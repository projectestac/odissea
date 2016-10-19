<?php

/**
 * Coursequotas report library
 *
 * @package    report
 * @subpackage coursequotas
 * @copyright  2012 Agora Development Team (http://agora.xtec.cat)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function report_coursequotas_diskinfo($chartinfo) {
    global $CFG;

    $hasinfo = function_exists('is_agora') && is_agora() && function_exists('getDiskInfo');
    $info = false;

    if ($hasinfo) {
        // Get diskSpace and diskConsume from Agoraportal (might be out-of-date).
        $tempinfo = getDiskInfo($CFG->dnscentre, 'moodle2');

        $info = new StdClass();
        $info->space = round($tempinfo['diskSpace']); // In MB.
        $info->consumed = $tempinfo['diskConsume'] / 1024; // Originally in kB.

        // If disk info is not avalaible...
        if ($info->consumed == 0) {
            $info->consumed += report_coursequotas_get_charinfo_total($chartinfo);
        }
        $info->consumed = round($info->consumed);
    }
    return $info;
}

/**
 * Formats a size figure and adds unit information
 *
 * @author Pau Ferrer (pau@moodle.com)
 * @param int $size file size to be formatted
 *
 * @return object number and units
 */
function report_coursequotas_format_size($size) {
    $formatted = new StdClass();
    $formatted->bytes = $size;

    $suffixes = array('Bytes', 'kB', 'MB', 'GB', 'TB');

    $suffix = 0;
    while ($size > 1024 && $suffix < count($suffixes)) {
        $size = $size / 1024;
        $suffix++;
    }

    $formatted->number = number_format($size, 2, ',', '.');
    $formatted->unit = $suffixes[$suffix];

    return $formatted;
}

/**
 * Format a size figure and adds unit information in text
 * @param int $size file size to be formatted
 *
 * @return string number and units
 */
function report_coursequotas_format_size_text($size) {
    $size = report_coursequotas_format_size($size);
    return $size->number . ' ' . $size->unit;
}

function report_course_quotas_get_chart_info() {
    $chartinfo = array();

    // Get quota used in courses.
    $chartinfo['course'] = report_coursequotas_get_course_usage();

    // Get quota used in backups.
    $chartinfo['backup'] = report_coursequotas_get_backup_usage();

    // Get quota used by users.
    $chartinfo['user'] = report_coursequotas_get_user_usage();

    // Get quota used in repositories.
    $chartinfo['repository'] = report_coursequotas_get_repository_usage();

    // Get quota used in files in temp and trash directories.
    $chartinfo['temp'] = report_coursequotas_get_temp_usage();
    $chartinfo['trash'] = report_coursequotas_get_trash_usage();

    return $chartinfo;
}

/**
 * Get course usage information without backup usage.
 *
 * @author Pau Ferrer (pau@moodle.com)
 * @return object   Formatted size.
 */
function report_coursequotas_get_course_usage() {
    global $DB;

    $syscontext = context_system::instance();
    $sql = "SELECT id, path
                  FROM {context}
                 WHERE depth = ? AND contextlevel = ? AND path LIKE ?";
    $params = array($syscontext->depth + 1, CONTEXT_COURSECAT, $syscontext->path.'/%');
    $contexts = $DB->get_records_sql_menu($sql, $params);

    $sitecourse = $DB->get_field('course', 'id', array('category' => 0));
    $context = context_course::instance($sitecourse);
    $contexts[$context->id] = $context->path;

    $sqlparts = array();
    foreach ($contexts as $contexid => $path) {
        $sqlparts[] = "(f.contextid = c.id AND c.path like '$path/%')";
    }
    $sqlparts[] = 'f.contextid IN ('.implode(',', array_keys($contexts)).')';

    $sql = implode(' OR ', $sqlparts);

    // Exclude backup files.
    $sql = "($sql) AND (f.component != 'backup' OR (f.filearea != 'activity' AND f.filearea != 'course' AND f.filearea != 'automated'))";

    // Calculate size of all the files inside the course avoiding duplicates.
    $size = get_coursequotas_filesize($sql, "{context} c");
    return report_coursequotas_format_size($size);
}

/**
 * Creates a tree of categories with size information.
 *
 * @author Pau Ferrer (pau@moodle.com)
 * @global array $DB
 *
 * @return array Tree with data (see description)
 */
function report_coursequotas_get_category_sizes() {
    global $DB;

    // Step 1: build category tree.
    $catrecords = $DB->get_records('course_categories', array(), 'depth, id', 'id, name, parent, visible');
    $cattree = report_coursequotas_build_category_tree($catrecords);

    // Add fake front page category.
    $cat = new StdClass();
    $cat->id = 0;
    $cat->name = get_string('front_page', 'report_coursequotas');
    $coursecontext = context_course::instance($DB->get_field('course', 'id', array('category' => 0)));
    $cat->categorysize = report_coursequotas_get_contextsize($coursecontext);
    $cat->visible = 1;
    $cat->subcategories = false;
    $cattree[0] = $cat;

    return $cattree;
}

/**
 * Creates a tree data structure wich contains, only, category information. Iterates recursively.
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @param array $catrecords Contains all the categories info from the data base
 * @param int $parent ID of the category where to start
 *
 * @return array Tree with data (see description)
 */
function report_coursequotas_build_category_tree(&$catrecords, $parent = 0) {
    $cattree = array();

    // Find categories with the same parent and add them.
    foreach ($catrecords as $catid => $record) {
        if ($record->parent == $parent) {
            $cat = new StdClass();
            $cat->id = $catid;
            $cat->name = $record->name;
            $catcontext = context_coursecat::instance($catid);
            $cat->categorysize = report_coursequotas_get_contextsize($catcontext);
            $cat->visible = $record->visible;

            $cattree[$catid] = $cat;

            // Effiency improvement: Once the category is added to the tree, it won't be added again.
            unset($catrecords[$catid]);
        }
    }

    if (empty($cattree)) {
        return false;
    }

    // Find categories with the same parent and add them. This is done in a second iteration to avoid repeating the same level.
    foreach ($cattree as $catid => $cat) {
        // Recursive call to find subcategories.
        $cat->subcategories = report_coursequotas_build_category_tree($catrecords, $catid);
    }

    return $cattree;
}

/**
 * Sum all files from a given context and its children.
 * @param  Object $context Containing path and instanceid.
 * @return int             Sum of all total bytes of context.
 */
function report_coursequotas_get_contextsize($context) {
    $path = $context->path;
    $contextid = $context->id;

    // Calculate size of all the files inside the course avoiding duplicates.
    return get_coursequotas_filesize("(f.contextid = c.id AND c.path like '$path/%') OR f.contextid = $contextid", "{context} c");
}

/**
 * Transforms category tree in a string HTML-formatted to be sent to the browser. Iterates recursively.
 *
 * @author Pau Ferrer (pau@moodle.com)
 * @param array $cattree Category tree
 *
 * @return string HTML code to be sent to the browser
 */
function report_coursequotas_print_category_data($cattree) {
    global $CFG;

    $content = '<ul>';
    $managestr = get_string('manage', 'report_coursequotas');
    $canmanage = can_manage_files();

    foreach ($cattree as $catid => $category) {

        // Format size number adding unit information.
        $size = report_coursequotas_format_size($category->categorysize);

        // Build list content.
        $content .= '<li>';
        if ($catid == 0) {
            $content .= $category->name;
        } else {
            $dimmed = $category->visible ? "" : ' class="dimmed"';
            $content .= '<a href="'.$CFG->wwwroot.'/course/index.php?categoryid='.$catid.'" '.$dimmed.' target="_blank">'.$category->name.'</a>';
        }
        $content .= ' - ' . $size->number . ' ' . $size->unit;

        if ($canmanage && $size->bytes > 0) {
            $content .= ' - <a href="'.$CFG->wwwroot.'/report/coursequotas/filemanager.php?category='.$catid.'&children=true">'.$managestr.'</a>';
        }

        // Recursive call for subcategories.
        if (!empty($category->subcategories)) {
            $content .= report_coursequotas_print_category_data($category->subcategories);
        }
        $content .= '</li>';
    }
    $content .= '</ul>';

    return $content;
}

function can_manage_files() {
    return has_capability('report/coursequotas:manage', context_system::instance());
}

/**
 * Get all course sizes and related info.
 *
 * @author Pau Ferrer (pau@moodle.com)
 *
 * @return array of course info
 */
function report_coursequotas_get_course_sizes() {
    global $DB, $CFG;

    $baseurl = $CFG->wwwroot.'/course/index.php?categoryid=';

    $categories = $DB->get_records('course_categories', null, '', 'id, name, visible');
    $courses = $DB->get_records('course', null, '', 'id, fullname, visible, category');
    foreach ($courses as $courseid => $course) {
        if ($course->category == 0) {
            $course->catlink = get_string('front_page', 'report_coursequotas');
        } else {
            $cat = $categories[$course->category];
            $dimmed = $cat->visible ? "" : ' class="dimmed"';
            $course->catlink = '<a href="'.$baseurl.$cat->id.'" '.$dimmed.' target="_blank">'.$cat->name.'</a>';
        }

        // Calculate and add size.
        $coursecontext = context_course::instance($courseid);
        $coursesize = report_coursequotas_get_contextsize($coursecontext);
        $size = report_coursequotas_format_size($coursesize);
        $course->bytes = $size->bytes;
        $course->sizeformat = $size->number.' '.$size->unit;
    }

    return $courses;
}

function cmp_sort_course_array($a, $b) {
    return $a->bytes < $b->bytes;
}

/**
 * Gets the amount of bytes used in course and users backups.
 *
 * @author Toni Ginard (aginard@xtec.cat)
 * @global array $DB
 *
 * @return int Number of bytes used
 */
function report_coursequotas_get_backup_usage() {
    // Component equal to backup means "course level backup".
    // filearea equal to backup means "user level backup" which is not associated to any course.
    $size = get_coursequotas_filesize(get_backup_where_sql());
    return report_coursequotas_format_size($size);
}

function get_backup_where_sql() {
    return "((f.component = 'backup' AND (f.filearea = 'activity' OR f.filearea = 'course' OR f.filearea = 'automated')) OR (f.component = 'user' AND f.filearea = 'backup'))";
}

function report_coursequotas_get_user_usage() {
    // User files excluding backups.
    $size = get_coursequotas_filesize("component = 'user' AND filearea != 'backup'");
    return report_coursequotas_format_size($size);
}

function report_coursequotas_get_directory_size($directory) {
    $size = 0;

    if (file_exists($directory)) {
        $size = exec('du -sk ' . $directory);
        $size = explode('/', $size);
        $size = $size[0] * 1024; // Size in kB to bytes.
    }

    return $size;
}

function report_coursequotas_get_temp_usage() {
    global $CFG;

    $tempdir = isset($CFG->tempdir) ? $CFG->tempdir : $CFG->dataroot.'/temp';

    $size = report_coursequotas_get_directory_size($tempdir);
    return report_coursequotas_format_size($size);
}

function report_coursequotas_get_trash_usage() {
    global $CFG;

    $trashdir = isset($CFG->trashdir) ? $CFG->trashdir : $CFG->dataroot.'/trashdir';

    $size = report_coursequotas_get_directory_size($trashdir);
    return report_coursequotas_format_size($size);
}

function report_coursequotas_get_repository_usage() {
    global $CFG;
    $size = report_coursequotas_get_directory_size($CFG->dataroot . '/repository/');
    return report_coursequotas_format_size($size);
}

function report_coursequotas_get_charinfo_total($chartinfo) {
    $total = 0;
    foreach ($chartinfo as $value) {
        $total += $value->bytes;
    }
    $total = $total / (1024 * 1024);

    return $total;
}

function report_coursequotas_print_chart($chartinfo, $consumed = false, $total = false) {
    global $CFG;

    $text = "";

    $consumedcalc = report_coursequotas_get_charinfo_total($chartinfo);

    if ($consumed && $total) {
        if (is_xtecadmin()) {
            $diffcalc = (int) ($consumed - $consumedcalc);
            if ($diffcalc != 0) {
                $text .= "<div class=\"well well-small\">Hi ha $diffcalc MB que s'escapen...</div>";
            }
        }

        if ($consumedcalc > $consumed) {
            $consumed = $consumedcalc;
        }

        // Protect the graph against data errors.
        $free = $total - $consumed > 0 ? $total - $consumed : 0;
    } else {
        $free = 0;
        $total = $consumed = $consumedcalc;
    }

    $colors = array(
        'course' => '#FDB45C',
        'backup' => '#46BFBD',
        'user' => '#4C86B9',
        'temp' => '#984298',
        'trash' => '#A4822D',
        'repository' => '#BB556F'
    );
    $highlights = array(
        'course' => '#FFC870',
        'backup' => '#5AD3D1',
        'user' => '#5B90BF',
        'temp' => '#D19ED1',
        'trash' => '#C79E37',
        'repository' => '#DF6A88'
    );

    $onepercent = (int) $total / 100;
    $consumedpercent = 0;
    $chartvalues = array();
    foreach ($chartinfo as $type => $value) {
        $value = $value->bytes / (1024 * 1024);
        if ($value > $onepercent) {
            $chartvalue = new StdClass();
            $chartvalue->label = get_string('disk_used_'.$type, 'report_coursequotas');
            $chartvalue->value = $value;
            $chartvalue->percent = round($value / $total * 100, 1);
            $chartvalue->color = $colors[$type];
            $chartvalue->highlight = $highlights[$type];
            $chartvalues[] = $chartvalue;
            $consumed -= $value;
            $consumedpercent += $chartvalue->percent;
        }
    }

    if ($consumed > 0) {
        $chartvalue = new StdClass();
        $chartvalue->label = get_string('disk_used_other', 'report_coursequotas');
        $chartvalue->value = $consumed;
        $chartvalue->percent = round($consumed / $total * 100, 1);
        $chartvalue->color = '#F7464A';
        $chartvalue->highlight = '#FF5A5E';
        $chartvalues[] = $chartvalue;
        $consumedpercent += $chartvalue->percent;
    }

    if ($consumedpercent < 100) {
        $chartvalue = new StdClass();
        $chartvalue->label = get_string('disk_free', 'report_coursequotas');
        $chartvalue->value = $free;
        $chartvalue->percent = round(100 - $consumedpercent, 1);
        $chartvalue->color = '#2C9C69';
        $chartvalue->highlight = '#4CCA91';
        $chartvalues[] = $chartvalue;
    }

    $text .= '<script src="'.$CFG->wwwroot.'/report/coursequotas/chartjs/Chart.min.js"></script>';
    $text .= '<div id="canvas-holder" style="text-align:center;"><canvas id="chart-area" width="300" height="300"/></div>';
    $text .= '<script>
        window.onload = function(){
            var ctx = document.getElementById("chart-area").getContext("2d");
            var data = [';

    foreach ($chartvalues as $value) {
        $text .= '{ value: '.$value->value.', label: "'.$value->label.' ('.$value->percent.'%)", color: "'.$value->color.'", highlight: "'.$value->highlight.'"},';
    }

    $text .= '];
            var options = {
                animateRotate : true,
                animateScale : true,
                tooltipTemplate: "<%if (label){%><%=label%><%} else {%><%= value %><%}%>"
            };
            window.pieChart = new Chart(ctx).Pie(data, options);
        };
    </script>';
    return $text;
}

/**
 * Get the sum of all filesize on a SQL from filesizes avoiding duplicates.
 * @param  string $where  where SQL on file table.
 * @param  string $tables Additional tables to check.
 * @return int            Sum of Bytes.
 */
function get_coursequotas_filesize($where = "", $tables = "") {
    global $DB;

    if (!empty($tables)) {
        $tables = ', '.$tables;
    }

    $where = 'WHERE '.$where.' AND filename != \'.\'';
    $sql = "SELECT sum(total) as total FROM (
       SELECT DISTINCT f.contenthash, f.filesize as total FROM {files} f $tables $where) t";
    $size = $DB->get_field_sql($sql);
    return $size ? $size : 0;
}

/**
 * Returns a list of files filtered.
 * @param  string  $filename        Filename to filter (LIKE).
 * @param  int     $userid          User owner to filter.
 * @param  int     $contextid       Context to filter
 * @param  boolean $addchildren     Add children of the context.
 * @param  string  $filearea        Filearea to filter
 * @param  string  $component       Component to filter.
 * @param  integer $size            Size (less or more to filter).
 * @param  integer $sizeselected    0 if more than, 1 if less than (size).
 * @param  boolean $showonlybackups Show only backup files.
 * @param  boolean $hidesamehash    Hide same hash files (only show one file per hash). It will cause warnings.
 * @param  string  $sort            Sort by field.
 * @param  string  $direction       Direction to sort by.
 * @param  integer $from            From which record return
 * @param  integer $limitnum        Limit number of records.
 * @return Object                   Object containing: files, count of files, filesize (disk usage), total (total sum of files).
 */
function get_filtered_files($filename = "" , $userid = null, $contextid = null, $addchildren = false, $filearea = null,
    $component = null, $size = 0, $sizeselected = 0, $showonlybackups = false, $hidesamehash = false, $sort = 'filename',
    $direction = 'ASC', $from = 0, $limitnum = 100) {
    global $DB;

    $tables = '{files} f';

    $filter = array("f.filename != '.'");
    if (!empty($filename)) {
        $filter[] = "f.filename LIKE '%$filename%'";
    }

    if ($userid) {
        $filter[] = 'f.userid = '.$userid;
    }

    if ($contextid) {
        if ($addchildren) {
            $ctxt = context::instance_by_id($contextid);
            $filter[] = "((f.contextid = c.id AND c.path LIKE '$ctxt->path/%') OR f.contextid = $contextid )";
            $tables .= ', {context} c';
        } else {
            $filter[] = 'f.contextid = '.$contextid;
        }
    }

    if ($filearea) {
        $filter[] = "f.filearea = '$filearea'";
    }

    if ($component) {
        $filter[] = "f.component = '$component'";
    }

    if ($showonlybackups) {
        $filter[] = get_backup_where_sql();
    }

    if ($size > 0) {
        $size *= 1024 * 1024;
        if ($sizeselected == 0) {
            $filter[] = "f.filesize >= $size";
        } else if ($sizeselected == 1) {
            $filter[] = "f.filesize <= $size";
        }
    }

    $avaiablesorts = array('filename', 'filearea', 'component', 'filesize');
    if (!in_array($sort, $avaiablesorts)) {
        $sort = 'filename';
    }
    $direction = strtolower($direction) == 'desc' ? 'DESC' : 'ASC';

    $where = implode(' AND ', $filter);
    $record = new StdClass();

    if ($hidesamehash) {
        $distinct = "DISTINCT f.contenthash, f.id";
    } else {
        $distinct = "DISTINCT f.id, f.contenthash";
    }
    $sql = "SELECT $distinct, f.filename, f.userid, f.contextid, f.filearea, f.component, f.filesize, f.pathnamehash, f.filepath, f.mimetype, f.timemodified FROM $tables WHERE $where ORDER BY f.$sort $direction";

    $record->files = @$DB->get_records_sql($sql, null, $from, $limitnum);

    if ($hidesamehash) {
        $sql = "SELECT count(DISTINCT f.contenthash) FROM $tables WHERE $where";
    } else {
        $sql = "SELECT count(DISTINCT f.id) FROM $tables WHERE $where";
    }
    $record->count = $DB->count_records_sql($sql);

    $sql = "SELECT sum(total) as total FROM (SELECT DISTINCT (f.contenthash), f.filesize as total FROM $tables WHERE $where) t";
    $size = $DB->get_field_sql($sql);
    $record->filesize  = $size ? $size : 0;

    if ($hidesamehash) {
        $record->total  = $record->filesize;
    } else {
        $sql = "SELECT sum(total) AS total FROM (SELECT DISTINCT (f.id), f.filesize as total FROM $tables WHERE $where) t";
        $size = $DB->get_field_sql($sql);
        $record->total  = $size ? $size : 0;
    }

    return $record;
}

/**
 * Get files by contenthash
 * @param  string  $hash      Hash of the content to filter.
 * @param  string  $sort      Sort by field.
 * @param  string  $direction Direction to sort by.
 * @param  integer $from      From which record return
 * @param  integer $limitnum  Limit number of records.
 * @return Object             Object containing: files, count of files, filesize (disk usage) = total (total sum of files).
 */
function get_contenthash_files($hash, $sort = 'filename', $direction = 'ASC', $from = 0, $limitnum = 100) {
    global $DB;

    $where = "f.contenthash = '$hash'";

    $avaiablesorts = array('filename', 'filearea', 'component', 'filesize');
    if (!in_array($sort, $avaiablesorts)) {
        $sort = 'filename';
    }
    $direction = strtolower($direction) == 'desc' ? 'DESC' : 'ASC';

    $record = new StdClass();
    $sql = "SELECT DISTINCT (f.id), f.filename, f.userid, f.contextid, f.filearea, f.component, f.filesize, f.contenthash, f.pathnamehash, f.filepath, f.mimetype, f.timemodified FROM {files} f WHERE $where ORDER BY f.$sort $direction";
    $record->files = $DB->get_records_sql($sql, null, $from, $limitnum);
    $sql = "SELECT count(DISTINCT f.id) FROM {files} f WHERE $where";
    $record->count = $DB->count_records_sql($sql);

    $sql = "SELECT sum(total) AS total FROM (SELECT DISTINCT (f.id), f.filesize as total FROM {files} f WHERE $where) t";
    $size = $DB->get_field_sql($sql);
    $record->total  = $size ? $size : 0;

    $sql = "SELECT sum(total) as total FROM (SELECT DISTINCT (f.contenthash), f.filesize as total FROM {files} f WHERE $where) t";
    $size = $DB->get_field_sql($sql);
    $record->filesize  = $size ? $size : 0;

    return $record;
}

/**
 * Get all options to filter for.
 * @param  int $searchedcontext Contextid where we're searching.
 * @return object               Filters.
 */
function get_all_filter_options($searchedcontext) {
    global $DB;

    $filters = new StdClass();
    $users = $DB->get_records_sql('SELECT DISTINCT userid, firstname, lastname FROM {files} f, {user} u  WHERE f.userid = u.id ORDER BY lastname');
    $filters->users = [];
    foreach ($users as $userid => $user) {
        $filters->users[$userid] = $user->firstname.' '.$user->lastname;
    }
    $contexts = $DB->get_records_sql('SELECT DISTINCT contextid FROM {files} ORDER BY contextid');
    $filters->contexts = [];
    foreach ($contexts as $contextid => $context) {
        $filecontext = context::instance_by_id($contextid);
        if ($filecontext->contextlevel == CONTEXT_COURSE) {
            $filters->contexts[$contextid] = $filecontext->get_context_name();
        }
    }

    if ($searchedcontext && !isset($filters->contexts[$searchedcontext])) {
        $filecontext = context::instance_by_id($searchedcontext);
        $filters->contexts[$searchedcontext] = $filecontext->get_context_name();
    }

    $filters->fileareas = $DB->get_records_sql_menu('SELECT DISTINCT filearea AS f, filearea FROM {files} ORDER BY filearea');
    $filters->components = $DB->get_records_sql_menu('SELECT DISTINCT component AS c, component FROM {files} ORDER BY component');
    return $filters;
}
