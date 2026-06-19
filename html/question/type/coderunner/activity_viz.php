<?php
// =============================================================================
// activity_viz.php  —  Moodle server-activity visualiser
//
// Place this file in:
//   /var/www/moodle/local/question/type/coderunner/activity_viz.php
//
// Access it at:
//   https://yourserver/local/question/type/coderunner/activity_viz.php
//
// Requirements:
//   • User must be logged in to Moodle.
//   • User must have moodle/course:viewhiddenuserfields capability in the
//     selected course (i.e. be a teacher, editing teacher, or manager).
// =============================================================================

require_once(__DIR__ . '/../../../config.php');
require_once($CFG->libdir . '/accesslib.php');

// ── Page setup ────────────────────────────────────────────────────────────────

require_login();   // Redirects to login page if not authenticated.

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/local/question/type/coderunner/activity_viz.php'));
$PAGE->set_title('Course Activity Visualiser');
$PAGE->set_pagelayout('base');

// ── Helper: get courses where current user has teacher-level access ───────────

function get_teacher_courses() {
    global $DB, $USER;
    // Gather all courses where the user has viewhiddenuserfields (teachers+).
    $courses = enrol_get_all_users_courses($USER->id, true);
    $teacher_courses = [];
    foreach ($courses as $course) {
        $context = context_course::instance($course->id);
        if (has_capability('moodle/course:viewhiddenuserfields', $context)) {
            $teacher_courses[] = $course;
        }
    }
    usort($teacher_courses, fn($a, $b) => strcmp($a->fullname, $b->fullname));
    return $teacher_courses;
}

// ── Read form inputs ──────────────────────────────────────────────────────────

$courseid   = optional_param('courseid',   0,  PARAM_INT);
$groupid    = optional_param('groupid',    0,  PARAM_INT);   // 0 = all groups
$cmid       = optional_param('cmid',       0,  PARAM_INT);   // 0 = all activities
$date_from  = optional_param('date_from',  '', PARAM_ALPHANUMEXT);
$date_to    = optional_param('date_to',    '', PARAM_ALPHANUMEXT);
$ip_regex   = optional_param('ip_regex',   '10\.67\.28\..*', PARAM_RAW);

// Validate dates (expect YYYY-MM-DD).
$re_date = '/^\d{4}-\d{2}-\d{2}$/';
if (!preg_match($re_date, $date_from)) $date_from = '';
if (!preg_match($re_date, $date_to))   $date_to   = '';

// Validate IP regex — silently fall back to match-all if invalid.
$ip_regex_valid = true;
if ($ip_regex !== '') {
    set_error_handler(function() use (&$ip_regex_valid) { $ip_regex_valid = false; });
    preg_match('/' . $ip_regex . '/', '');
    restore_error_handler();
}
if (!$ip_regex_valid) $ip_regex = '.*';

// ── Security: verify teacher access to the selected course ───────────────────

$course_context = null;
if ($courseid > 0) {
    $course_context = context_course::instance($courseid, IGNORE_MISSING);
    if (!$course_context ||
        !has_capability('moodle/course:viewhiddenuserfields', $course_context)) {
        $courseid = 0;   // Reset — user not authorised for this course.
        $course_context = null;
    }
}

// ── Fetch supporting data for dropdowns (only when a valid course is chosen) ──

$groups     = [];
$activities = [];

if ($courseid > 0) {
    // Groups in this course.
    $groups = groups_get_all_groups($courseid);

    // Course modules with human-readable names.
    // We join course_modules → context → logstore to only show activities that
    // actually appear in the logs, but a simpler full-list is more useful.
    $modinfo = get_fast_modinfo($courseid);
    foreach ($modinfo->get_cms() as $cm) {
        if ($cm->uservisible) {
            $activities[$cm->id] = $cm->get_formatted_name() . ' (' . $cm->modname . ')';
        }
    }
    asort($activities);

    // Set default date range: last 7 days.
    if ($date_from === '') $date_from = date('Y-m-d', strtotime('-7 days'));
    if ($date_to   === '') $date_to   = date('Y-m-d');
}

// ── Build chart data (JSON) ───────────────────────────────────────────────────

$chart_json = 'null';

if ($courseid > 0 && $date_from !== '' && $date_to !== '') {

    // Convert dates to Unix timestamps (start of day / end of day).
    $ts_from = strtotime($date_from . ' 00:00:00');
    $ts_to   = strtotime($date_to   . ' 23:59:59');

    if ($ts_from !== false && $ts_to !== false && $ts_from <= $ts_to) {

        // ── Build the SQL query ───────────────────────────────────────────────
        //
        // We want: for each hour bucket, the set of distinct IPs.
        // Strategy: fetch (timecreated, ip) rows matching all filters, then
        // bucket in PHP (avoids DB-specific date functions).

        $params = [$courseid, $ts_from, $ts_to];
        $where  = "l.courseid = ? AND l.timecreated >= ? AND l.timecreated <= ?";

        // Filter by group: get userids for the group, add to WHERE.
        if ($groupid > 0) {
            $member_ids = array_keys(get_enrolled_users(
                $course_context, '', $groupid, 'u.id'
            ));
            if (empty($member_ids)) {
                // Group has no members — return empty data.
                $chart_json = '{"labels":[],"counts":[]}';
                goto render;
            }
            [$in_sql, $in_params] = $DB->get_in_or_equal($member_ids);
            $where  .= " AND l.userid $in_sql";
            $params  = array_merge($params, $in_params);
        }

        // Filter by activity (course module → contextinstanceid in log).
        if ($cmid > 0) {
            $where   .= " AND l.contextinstanceid = ? AND l.contextlevel = ?";
            $params[] = $cmid;
            $params[] = CONTEXT_MODULE;  // 70
        }

        // Aggregate in the DB: one row per (hour_ts, ip) pair.
        // FLOOR(timecreated/3600)*3600 gives the Unix ts of the hour boundary.
        // This is vastly faster than streaming every log row to PHP.
        $sql = "SELECT FLOOR(l.timecreated/3600)*3600 AS hour_ts, l.ip
                  FROM {logstore_standard_log} l
                 WHERE $where
                   AND l.ip IS NOT NULL AND l.ip <> ''
              GROUP BY hour_ts, l.ip
              ORDER BY hour_ts ASC";

        $rs = $DB->get_recordset_sql($sql, $params);

        // ── Bucket into hourly slots ──────────────────────────────────────────
        // Each row is already one distinct (hour, ip) pair from the DB.
        // Apply IP regex filter in PHP (avoids DB-specific regex syntax).

        $ip_re = ($ip_regex !== '' && $ip_regex !== '.*') ? '/' . $ip_regex . '/' : null;

        $buckets = [];   // hour_ts => set of IPs (stored as assoc array keys)

        foreach ($rs as $row) {
            $hour_ts = (int)$row->hour_ts;
            if ($ip_re !== null && !preg_match($ip_re, $row->ip)) continue;
            if (!isset($buckets[$hour_ts])) {
                $buckets[$hour_ts] = [];
            }
            $buckets[$hour_ts][$row->ip] = true;
        }
        $rs->close();   // Always close recordsets to free the DB cursor.

        // Fill gaps so the chart is continuous.
        // Start from midnight of $date_from so the x-axis always begins at 00:00,
        // even if the first log entry is several hours into the day.
        if (!empty($buckets)) {
            $min_h = strtotime($date_from . ' 00:00:00');
            $max_h = max(array_keys($buckets));
            for ($h = $min_h; $h <= $max_h; $h += 3600) {
                if (!isset($buckets[$h])) $buckets[$h] = [];
            }
            ksort($buckets);
        }

        // ── Build labels and counts arrays for Chart.js ───────────────────────

        $labels = [];
        $counts = [];
        // For midnight hours we embed a date; others just show HH or empty.
        foreach ($buckets as $hour_ts => $ips) {
            $hh = (int)date('G', $hour_ts);   // 0–23, no leading zero
            $labels[] = $hour_ts;             // pass raw timestamp to JS
            $counts[] = count($ips);
        }

        $chart_json = json_encode(['timestamps' => $labels, 'counts' => $counts]);
    }
}

render:
// ── Fetch course list for the selector dropdown ───────────────────────────────

$all_courses = get_teacher_courses();

// ── Output ────────────────────────────────────────────────────────────────────
// We output a self-contained HTML page using Moodle's header/footer so that
// the Moodle nav bar and session remain intact.

echo $OUTPUT->header();
?>

<!---------------------------------------------------------------------------->
<!-- Styles                                                                  -->
<!---------------------------------------------------------------------------->
<style>
  @import url('https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500;700&family=DM+Sans:wght@400;500;600&family=Syne:wght@700;800&display=swap');

  #av-wrap {
    max-width: 1020px;
    margin: 0 auto;
    padding: 24px 16px 48px;
    font-family: 'DM Sans', 'Segoe UI', sans-serif;
    color: #c8dff0;
  }

  #av-wrap h1 {
    font-family: 'Syne', sans-serif;
    font-size: clamp(20px, 3.5vw, 30px);
    font-weight: 800;
    color: #e8f4ff;
    margin: 0 0 4px;
    letter-spacing: -0.4px;
  }

  #av-wrap .av-subtitle {
    color: #4a7a9b;
    font-family: 'DM Mono', monospace;
    font-size: 13px;
    margin-bottom: 28px;
  }

  /* ── Panel ── */
  .av-panel {
    background: #111e2e;
    border: 1px solid #1e3a5a;
    border-radius: 12px;
    padding: 18px 22px;
    margin-bottom: 18px;
  }

  .av-panel-title {
    font-size: 11px;
    font-family: 'DM Mono', monospace;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #4a7a9b;
    margin-bottom: 12px;
  }

  /* ── Form grid ── */
  .av-form-row {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
    align-items: flex-end;
  }

  .av-field {
    display: flex;
    flex-direction: column;
    gap: 5px;
    flex: 1;
    min-width: 160px;
  }

  .av-field label {
    font-size: 11px;
    font-family: 'DM Mono', monospace;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #4a7a9b;
  }

  .av-field select {
    background: #0d1520;
    border: 1px solid #2a4060;
    border-radius: 8px;
    color: #a8d8ea;
    font-size: 13px;
    font-family: 'DM Sans', sans-serif;
    padding: 8px 10px;
    outline: none;
    width: 100%;
    cursor: pointer;
  }

  .av-field input[type=date] {
    background: #0d1520;
    border: 1px solid #2a4060;
    border-radius: 8px;
    color: #a8d8ea;
    font-size: 13px;
    font-family: 'DM Sans', sans-serif;
    padding: 8px 10px;
    outline: none;
    width: 160px;
    cursor: pointer;
  }

  .av-field select:focus,
  .av-field input[type=date]:focus {
    border-color: #4fc3f7;
  }

  input[type=date]::-webkit-calendar-picker-indicator { filter: invert(0.7); cursor: pointer; }

  .av-btn {
    background: #0d4f8a;
    border: 1px solid #2e6faa;
    border-radius: 8px;
    color: #a8d8ea;
    font-family: 'DM Mono', monospace;
    font-size: 13px;
    font-weight: 500;
    padding: 9px 22px;
    cursor: pointer;
    transition: background 0.15s;
    white-space: nowrap;
    align-self: flex-end;
  }
  .av-btn:hover { background: #1565a0; }

  /* ── Stats strip ── */
  .av-stats {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    margin-bottom: 18px;
  }

  .av-stat {
    background: #111e2e;
    border: 1px solid #1e3a5a;
    border-radius: 8px;
    padding: 10px 18px;
    flex: 1;
    min-width: 110px;
  }

  .av-stat-label {
    font-size: 10px;
    font-family: 'DM Mono', monospace;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #4a7a9b;
  }

  .av-stat-value {
    font-family: 'Syne', sans-serif;
    font-size: 22px;
    font-weight: 700;
    color: #4fc3f7;
    margin-top: 2px;
  }

  /* ── Chart area ── */
  .av-chart-box {
    background: #111e2e;
    border: 1px solid #1e3a5a;
    border-radius: 12px;
    padding: 24px 16px 16px;
    min-height: 320px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
  }

  .av-placeholder {
    color: #2a4a6a;
    font-family: 'DM Mono', monospace;
    font-size: 14px;
    text-align: center;
  }

  .av-footer-note {
    margin-top: 12px;
    color: #2a4060;
    font-size: 11px;
    font-family: 'DM Mono', monospace;
    text-align: center;
  }

  /* ── Notice ── */
  .av-notice {
    background: #1a2e1a;
    border: 1px solid #2a5a2a;
    border-radius: 8px;
    color: #90c090;
    font-family: 'DM Mono', monospace;
    font-size: 13px;
    padding: 10px 16px;
    margin-bottom: 16px;
  }
</style>

<!---------------------------------------------------------------------------->
<!-- Markup                                                                  -->
<!---------------------------------------------------------------------------->
<div id="av-wrap">

  <h1>Course Activity <span style="color:#4fc3f7">Visualiser</span></h1>
  <p class="av-subtitle">Distinct active IPs per hour &middot; teacher access required</p>

  <?php if (empty($all_courses)): ?>
    <div class="av-notice">
      You do not appear to have teacher-level access to any courses.
    </div>
  <?php else: ?>

  <!-- ── Filter form ── -->
  <form method="get" action="">
    <div class="av-panel">
      <div class="av-panel-title">Course &amp; Filters</div>
      <div class="av-form-row">

        <!-- Course selector -->
        <div class="av-field" style="min-width:220px; flex:2">
          <label for="av-course">Course</label>
          <select name="courseid" id="av-course" onchange="this.form.submit()">
            <option value="0">— select a course —</option>
            <?php foreach ($all_courses as $c): ?>
              <option value="<?= (int)$c->id ?>"
                <?= ($c->id == $courseid ? 'selected' : '') ?>>
                <?= htmlspecialchars($c->fullname) ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <!-- Group selector (only shown when a course is selected) -->
        <?php if ($courseid > 0): ?>
        <div class="av-field">
          <label for="av-group">Group</label>
          <select name="groupid" id="av-group">
            <option value="0">All groups</option>
            <?php foreach ($groups as $g): ?>
              <option value="<?= (int)$g->id ?>"
                <?= ($g->id == $groupid ? 'selected' : '') ?>>
                <?= htmlspecialchars($g->name) ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <!-- Activity selector -->
        <div class="av-field" style="min-width:220px; flex:2">
          <label for="av-activity">Activity</label>
          <select name="cmid" id="av-activity">
            <option value="0">All activities</option>
            <?php foreach ($activities as $id => $name): ?>
              <option value="<?= (int)$id ?>"
                <?= ($id == $cmid ? 'selected' : '') ?>>
                <?= htmlspecialchars($name) ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

      </div><!-- .av-form-row (row 1) -->

      <!-- Row 2: date range + IP filter + submit -->
      <div class="av-form-row" style="margin-top:12px; flex-wrap:wrap; align-items:flex-end; gap:12px">

        <!-- Date range -->
        <div class="av-field" style="flex:0 0 auto">
          <label for="av-from">From</label>
          <input type="date" name="date_from" id="av-from"
                 value="<?= htmlspecialchars($date_from) ?>">
        </div>

        <div class="av-field" style="flex:0 0 auto">
          <label for="av-to">To</label>
          <input type="date" name="date_to" id="av-to"
                 value="<?= htmlspecialchars($date_to) ?>">
        </div>

        <!-- IP regex filter -->
        <div class="av-field" style="flex:0 0 auto">
          <label for="av-ipregex">IP Address Regex</label>
          <input type="text" name="ip_regex" id="av-ipregex"
                 value="<?= htmlspecialchars($ip_regex) ?>"
                 placeholder="e.g. 10\.67\.28\..*"
                 spellcheck="false"
                 style="font-family:'DM Mono',monospace; font-size:12px; width:200px">
          <?php if (!$ip_regex_valid): ?>
            <span style="color:#f48fb1; font-size:11px; font-family:'DM Mono',monospace">
              &#9888; Invalid regex &mdash; using .*
            </span>
          <?php endif; ?>
        </div>

        <div style="flex:0 0 auto; align-self:flex-end">
          <button type="submit" class="av-btn">Update</button>
        </div>

        <?php endif; ?>

      </div><!-- .av-form-row (row 2) -->
    </div><!-- .av-panel -->
  </form>

  <!-- ── Stats + chart ── -->
  <?php if ($courseid > 0): ?>
    <div class="av-stats" id="av-stats" style="display:none">
      <div class="av-stat">
        <div class="av-stat-label">Hours shown</div>
        <div class="av-stat-value" id="stat-hours">—</div>
      </div>
      <div class="av-stat">
        <div class="av-stat-label">Peak IPs / hour</div>
        <div class="av-stat-value" id="stat-peak">—</div>
      </div>
      <div class="av-stat">
        <div class="av-stat-label">IP-hours total</div>
        <div class="av-stat-value" id="stat-total">—</div>
      </div>
    </div>

    <div class="av-chart-box">
      <div class="av-placeholder" id="av-placeholder">
        <?= ($chart_json === 'null')
            ? 'Select a date range and click Update.'
            : 'Loading chart&hellip;' ?>
      </div>
      <canvas id="av-chart" style="display:none; width:100%; max-height:400px"></canvas>
    </div>
    <p class="av-footer-note">
      Tick marks every 8 h &middot; date shown at midnight &middot; hover any bar for exact count
    </p>
  <?php else: ?>
    <div class="av-chart-box">
      <div class="av-placeholder">Select a course above to begin.</div>
    </div>
  <?php endif; ?>

  <?php endif; // end if courses available ?>

</div><!-- #av-wrap -->

<!---------------------------------------------------------------------------->
<!-- Chart.js + rendering logic                                              -->
<!---------------------------------------------------------------------------->
<?php if ($courseid > 0 && $chart_json !== 'null'): ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
<script>
(function () {

  const raw = <?= $chart_json ?>;
  if (!raw || !raw.timestamps || raw.timestamps.length === 0) {
    document.getElementById('av-placeholder').textContent =
      'No log data found for the selected filters.';
    return;
  }

  // ── Build labels and expose hour/isNewDay metadata ──────────────────────────

  const timestamps = raw.timestamps;   // Unix timestamps (seconds), one per hour
  const counts     = raw.counts;

  const labels = timestamps.map(ts => {
    const d  = new Date(ts * 1000);
    const hh = d.getHours();
    const dd = String(d.getDate()).padStart(2, '0');
    const mm = String(d.getMonth() + 1).padStart(2, '0');
    return { ts, hh, isNewDay: hh === 0, dateLabel: `${dd}/${mm}`,
             fullLabel: `${dd}/${mm} ${String(hh).padStart(2,'0')}:00` };
  });

  // ── Stats ────────────────────────────────────────────────────────────────────

  const peak  = Math.max(...counts);
  const total = counts.reduce((a, b) => a + b, 0);
  document.getElementById('stat-hours').textContent = counts.length;
  document.getElementById('stat-peak').textContent  = peak;
  document.getElementById('stat-total').textContent = total.toLocaleString();
  document.getElementById('av-stats').style.display = 'flex';

  // ── Show canvas, hide placeholder ───────────────────────────────────────────

  document.getElementById('av-placeholder').style.display = 'none';
  const canvas = document.getElementById('av-chart');
  canvas.style.display = 'block';

  // ── Custom X-axis tick plugin ────────────────────────────────────────────────
  // Draws our own tick marks + labels at midnight (date+00) and every 8 h.
  // Chart.js built-in ticks are hidden via ticks.display:false.

  const customXTicks = {
    id: 'customXTicks',
    afterDraw(chart) {
      const { ctx, scales: { x, y } } = chart;
      const axisY = y.bottom;          // pixel Y of the x-axis line
      const FONT_MONO = "'DM Mono', monospace";

      ctx.save();
      ctx.textAlign = 'center';
      ctx.textBaseline = 'top';

      labels.forEach((lbl, i) => {
        if (lbl.hh % 8 !== 0) return;   // only every 8 hours

        const xPx = x.getPixelForValue(i);

        if (lbl.isNewDay) {
          // Tall cyan tick line
          ctx.beginPath();
          ctx.moveTo(xPx, axisY);
          ctx.lineTo(xPx, axisY + 7);
          ctx.strokeStyle = '#4fc3f7';
          ctx.lineWidth = 2;
          ctx.stroke();
          // Hour "00"
          ctx.font = `500 11px ${FONT_MONO}`;
          ctx.fillStyle = '#b0d4f0';
          ctx.fillText('00', xPx, axisY + 10);
          // Date below
          ctx.font = `700 12px ${FONT_MONO}`;
          ctx.fillStyle = '#e2eaf4';
          ctx.fillText(lbl.dateLabel, xPx, axisY + 24);
        } else {
          // Shorter dim tick
          ctx.beginPath();
          ctx.moveTo(xPx, axisY);
          ctx.lineTo(xPx, axisY + 4);
          ctx.strokeStyle = '#3d6080';
          ctx.lineWidth = 1;
          ctx.stroke();
          // Hour number
          ctx.font = `400 11px ${FONT_MONO}`;
          ctx.fillStyle = '#7aaecf';
          ctx.fillText(String(lbl.hh).padStart(2, '0'), xPx, axisY + 7);
        }
      });

      ctx.restore();
    }
  };

  // ── Chart ────────────────────────────────────────────────────────────────────

  new Chart(canvas, {
    type: 'bar',
    data: {
      labels: labels.map(l => l.fullLabel),   // used in tooltip
      datasets: [{
        data: counts,
        backgroundColor: '#1565a0',
        hoverBackgroundColor: '#4fc3f7',
        borderRadius: 3,
        borderSkipped: 'bottom',
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      animation: { duration: 400 },
      layout: { padding: { left: 8, right: 8, top: 8, bottom: 48 } },
      plugins: {
        legend: { display: false },
        tooltip: {
          backgroundColor: '#1a2332',
          borderColor: '#2e4a6e',
          borderWidth: 1,
          titleColor: '#e0f0ff',
          bodyColor: '#a8d8ea',
          titleFont: { family: "'DM Mono', monospace", weight: '600', size: 13 },
          bodyFont:  { family: "'DM Mono', monospace", size: 13 },
          callbacks: {
            title: items => items[0].label,
            label: item => ` ${item.raw} distinct IP${item.raw !== 1 ? 's' : ''}`
          }
        }
      },
      scales: {
        x: {
          grid: { display: false },
          border: { color: '#2e4a6e' },
          ticks: { display: false },   // we draw our own via the plugin
        },
        y: {
          beginAtZero: true,
          grid: { color: '#1a2e45', drawBorder: false },
          border: { display: false },
          ticks: {
            color: '#7aaecf',
            font: { family: "'DM Mono', monospace", size: 11 },
            precision: 0,
          },
          title: {
            display: true,
            text: 'Distinct IPs',
            color: '#7aaecf',
            font: { family: "'DM Mono', monospace", size: 11 }
          }
        }
      }
    },
    plugins: [customXTicks]
  });

})();
</script>

<!-- Give the canvas a fixed height (Chart.js needs a sized container) -->
<style>
  #av-chart { height: 400px !important; }
  /* Extra bottom padding so the custom x-axis tick labels (drawn below y.bottom)
     are not clipped by the canvas boundary. */
  .av-chart-box { min-height: 460px; align-items: stretch; padding-bottom: 8px; }
</style>
<?php endif; ?>

<?php
echo $OUTPUT->footer();
?>
