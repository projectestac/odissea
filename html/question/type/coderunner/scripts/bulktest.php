<?php
// This file is part of CodeRunner - http://coderunner.org.nz
//
// CodeRunner is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// CodeRunner is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with CodeRunner.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Bulk-test CodeRunner questions.
 *
 * When called without parameters, this script displays a configuration form
 * and a list of accessible contexts/categories to test. Selecting a context
 * or category runs the tests for that scope. An admin-only "Test All" option
 * runs tests across every context on the site.
 *
 * @package   qtype_coderunner
 * @copyright 2016-2025 Richard Lobb and Paul McKeown, The University of Canterbury
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qtype_coderunner;

use context;
use context_system;
use context_course;
use html_writer;
use moodle_url;
use qtype_coderunner_util;
use core_question\local\bank\question_bank_helper;
use core_question\local\bank\question_edit_contexts;

define('NO_OUTPUT_BUFFERING', true);

require_once(__DIR__ . '/../../../../config.php');
require_once($CFG->libdir . '/questionlib.php');

const BUTTONSTYLE = 'background-color: #FFFFD0; padding: 2px 2px 0px 2px;border: 4px solid white';
const ORANGY = 'border: 1px solid #F0F0F0; background-color:rgb(249, 242, 213); padding: 2px 2px 0px 2px;';

// ============================================================
// Helper functions used by the index view.
// ============================================================

function display_course_header_and_link($coursecontextid, $coursename) {
    $testalltitledetails = ['title' => get_string('testalltitle', 'qtype_coderunner')];
    $linktext = $coursename;
    $testallspan = html_writer::tag(
        'span',
        $linktext,
        ['class' => 'test-link',
        'data-contextid' => $coursecontextid,
        'style' => BUTTONSTYLE . ';cursor:pointer;']
    );
    $litext = $coursecontextid . ' - ' . $coursename . ' ' . $testallspan;
    echo html_writer::tag('h5', $litext, $testalltitledetails);
}


function display_questions_for_context($contextid, $name, $numcoderunnerquestions) {
    $testallstr = get_string('bulktestallincontext', 'qtype_coderunner');
    $testalltitledetails = ['title' => get_string('testalltitle', 'qtype_coderunner'), 'style' => BUTTONSTYLE];
    $testallspan = html_writer::tag(
        'span',
        $testallstr,
        ['class' => 'test-link',
        'data-contextid' => $contextid,
        'style' => BUTTONSTYLE . ';cursor:pointer;']
    );
    $expandlink = html_writer::link(
        '#expand',
        get_string('expand', 'qtype_coderunner'),
        ['class' => 'expander', 'title' => get_string('expandtitle', 'qtype_coderunner'), 'style' => BUTTONSTYLE]
    );
    $litext = $contextid . ' - ' . $name . ' (' . $numcoderunnerquestions . ') ' . $testallspan . ' ' . $expandlink;
    if (strpos($name, ": Quiz: ") === false) {
        $class = 'bulktest coderunner context normal';
    } else {
        $class = 'bulktest coderunner context quiz';
    }
    echo html_writer::start_tag('li', ['class' => $class]);
    echo $litext;

    $categories = bulk_tester::get_categories_for_context($contextid);
    echo html_writer::start_tag('ul', ['class' => 'expandable']);
    $titledetails = ['title' => get_string('testallincategory', 'qtype_coderunner')];
    foreach ($categories as $cat) {
        if ($cat->count > 0) {
            $linktext = $cat->name . ' (' . $cat->count . ')';
            $span = html_writer::tag(
                'span',
                $linktext,
                ['class' => 'test-link',
                'data-contextid' => $contextid,
                'data-categoryid' => $cat->id,
                'style' => BUTTONSTYLE . ';cursor:pointer;']
            );
            echo html_writer::tag('li', $span, $titledetails);
        }
    }
    echo html_writer::end_tag('ul');  // End category list.
    echo html_writer::end_tag('li');  // End context list item.
}


/**
 * Displays questions for all available contexts with questions.
 * Probably not much use now...
 * $availablequestionsbycontext maps
 *    from contextid to [name, numquestions] associative arrays.
 */
function display_questions_for_all_contexts($availablequestionsbycontext) {
    echo html_writer::start_tag('ul');
    foreach ($availablequestionsbycontext as $contextid => $info) {
        $name = $info['name'];
        $numcoderunnerquestions = $info['numquestions'];
        display_questions_for_context($contextid, $name, $numcoderunnerquestions);
    }
     echo html_writer::end_tag('ul');
}

// ============================================================
// Main script logic.
// ============================================================

// Get all parameters. contextid=-1 means the parameter was not provided.
$contextid = optional_param('contextid', -1, PARAM_INT);
$startfromcontextid = optional_param('startfromcontextid', 0, PARAM_INT);
$categoryid = optional_param('categoryid', null, PARAM_INT);
$randomseed = optional_param('randomseed', -1, PARAM_INT);
$repeatrandomonly = optional_param('repeatrandomonly', 1, PARAM_INT);
$nruns = optional_param('nruns', 1, PARAM_INT);
$clearcachefirst = optional_param('clearcachefirst', 0, PARAM_INT);
$usecache = optional_param('usecache', 1, PARAM_INT);
$questionids = optional_param('questionids', '', PARAM_RAW);

// Determine mode:
//   test-all:  contextid==0 with no questionids, OR startfromcontextid>0 (resume)
//   per-context/specific: contextid>0, or contextid==0 with questionids
//   index:     contextid not provided (== -1) and no startfromcontextid
$istestallmode = ($contextid === 0 && $questionids === '') || $startfromcontextid > 0;
$isindexmode = !$istestallmode && $contextid < 0;

if ($istestallmode) {
    // --------------------------------------------------------
    // Test-all mode: run tests across every context on the site.
    // Requires site admin capability.
    // --------------------------------------------------------
    $context = context_system::instance();
    require_login();
    require_admin();

    if ($startfromcontextid > 0) {
        $PAGE->set_url('/question/type/coderunner/scripts/bulktest.php', ['startfromcontextid' => $startfromcontextid]);
    } else {
        $PAGE->set_url('/question/type/coderunner/scripts/bulktest.php', ['contextid' => 0]);
    }
    $PAGE->set_context($context);
    $title = get_string('bulktestalltitle', 'qtype_coderunner');
    $PAGE->set_title($title);

    $numpasses = 0;
    $allfailingtests = [];
    $allmissinganswers = [];
    $skipping = $startfromcontextid != 0;

    // Release the session, so the user can do other things while this runs.
    \core\session\manager::write_close();

    // Display.
    echo $OUTPUT->header();
    echo $OUTPUT->heading($title, 1);

    $jobehost = get_config('qtype_coderunner', 'jobe_host');
    $usecachelabel = get_string('bulktestusecachelabel', 'qtype_coderunner');
    $usecachevalue = $usecache ? "true" : "false";
    echo html_writer::tag('p', '<b>jobe_host:</b> ' . $jobehost);
    echo html_writer::tag('p', "<b>$usecachelabel</b> $usecachevalue");
    echo html_writer::tag('p', get_string('bulktestallcachenotclearedmessage', 'qtype_coderunner'));
    echo html_writer::tag('p', "Use link below to open Moodle cache admin page so you can purge the whole coderunner_grading_cache.");
    if (has_capability('moodle/site:config', context_system::instance())) {
        $link = html_writer::link(
            new moodle_url('/cache/admin.php'),
            "Open admin-cache page - for purging whole grading cache.",
            ['class' => 'link-to-cache-admin',
            'data-contextid' => 0,
            'style' => ORANGY . ";cursor:pointer;"]
        );
        echo html_writer::tag('p', $link);
    }

    // Run the tests.
    ini_set('memory_limit', '2048M');  // For big question banks - TODO: make this a setting?
    $contextdata = bulk_tester::get_num_coderunner_questions_by_context();
    foreach ($contextdata as $contextid => $numcoderunnerquestions) {
        if ($skipping && $contextid != $startfromcontextid) {
            continue;
        }
        $skipping = false;
        $testcontext = context::instance_by_id($contextid);
        if (has_capability('moodle/question:editall', $context)) {
            $bulktester = new bulk_tester(
                context: $testcontext,
                randomseed: $randomseed,
                repeatrandomonly: $repeatrandomonly,
                nruns: $nruns,
                clearcachefirst: $clearcachefirst,
                usecache: $usecache
            );
            echo $OUTPUT->heading(get_string('bulktesttitle', 'qtype_coderunner', $testcontext->get_context_name()));
            echo html_writer::tag('p', html_writer::link(
                new moodle_url(
                    '/question/type/coderunner/scripts/bulktest.php',
                    ['startfromcontextid' => $testcontext->id]
                ),
                get_string('bulktestcontinuefromhere', 'qtype_coderunner')
            ));
            [$passes, $failingtests, $missinganswers] = $bulktester->run_tests();
            $numpasses += $passes;
            $allfailingtests = array_merge($allfailingtests, $failingtests);
            $allmissinganswers = array_merge($allmissinganswers, $missinganswers);
        }
    }

    // Display the final summary.
    bulk_tester::print_summary_after_bulktestall($numpasses, $allfailingtests, $allmissinganswers);

} else if ($isindexmode) {
    // --------------------------------------------------------
    // Index mode: show configuration form and context list.
    // --------------------------------------------------------
    $oldskool = !(qtype_coderunner_util::using_mod_qbank());

    $context = context_system::instance();
    require_login();

    $PAGE->set_url('/question/type/coderunner/scripts/bulktest.php');
    $PAGE->set_context($context);
    $PAGE->set_title(get_string('bulktestindextitle', 'qtype_coderunner'));

    $nruns = 1;
    $nrunsfromsettings = get_config('qtype_coderunner', 'bulktestdefaultnruns');
    if (abs($nrunsfromsettings) > 1) {
        $nruns = abs($nrunsfromsettings);
    }

    $numrunslabel = get_string('bulktestnumrunslabel', 'qtype_coderunner');
    $numrunsexplanation = get_string('bulktestnumrunsexplanation', 'qtype_coderunner');

    $randomseedlabel = get_string('bulktestrandomseedlabel', 'qtype_coderunner');
    $randomseedexplanation = get_string('bulktestrandomseedexplanation', 'qtype_coderunner');

    $repeatrandomonlylabel = get_string('bulktestrepeatrandomonlylabel', 'qtype_coderunner');
    $repeatrandomonlyexplanation = get_string('bulktestrepeatrandomonlyexplanation', 'qtype_coderunner');

    $clearcachefirstlabel = get_string('bulktestclearcachefirstlabel', 'qtype_coderunner');
    $clearcachefirstexplanation = get_string('bulktestclearcachefirstexplanation', 'qtype_coderunner');

    $usecachelabel = get_string('bulktestusecachelabel', 'qtype_coderunner');
    $usecacheexplanation = get_string('bulktestusecacheexplanation', 'qtype_coderunner');

    // Display.
    echo $OUTPUT->header();

    // Add the configuration form.
    echo <<<HTML
<div class="bulk-test-config" style="margin-bottom: 20px; padding: 10px; background-color: #f5f5f5; border: 1px solid #ddd;">
    <h3>Test Configuration</h3>
    <div style="margin-bottom: 10px; display: grid; grid-template-columns: 180pt 80pt auto; gap: 10px;
        align-items: center; max-width:1000;">
        <div style="grid-column: span 3; border-top: 1px solid rgb(10, 16, 74);"> </div>
        <label for="nruns">$numrunslabel</label>
        <input type="number" id="nruns" class="form-control" value="{$nruns}" min="1" style="width: 80px;">
        <span>$numrunsexplanation</span>
        <div style="grid-column: span 3; border-bottom: 1px solid rgb(10, 16, 74);"> </div>

        <label for="randomseed">$randomseedlabel</label>
        <input type="number" id="randomseed" class="form-control" value="" min="0" style="width: 80px;">
        <span>$randomseedexplanation</span>
        <div style="grid-column: span 3; border-bottom: 1px solid rgb(10, 16, 74);"> </div>
        <label for="repeatrandomonly">$repeatrandomonlylabel</label>
        <div>
            <input type="checkbox" id="repeatrandomonly" checked>
        </div>
        <span>$repeatrandomonlyexplanation</span>
        <div style="grid-column: span 3; border-bottom: 1px solid rgb(10, 16, 74);"> </div>
        <label for="clearcachefirst">$clearcachefirstlabel</label>
        <div>
            <input type="checkbox" id="clearcachefirst"  onchange="confirmCheckboxChange(this)">
        </div>
        <span>$clearcachefirstexplanation</span>
        <div style="grid-column: span 3; border-bottom: 1px solid rgb(10, 16, 74);"> </div>
        <label for="usecache">$usecachelabel</label>
        <div>
            <input type="checkbox" id="usecache" checked>
        </div>
        <span>$usecacheexplanation</span>
        <div style="grid-column: span 3; border-bottom: 1px solid rgb(10, 16, 74);"> </div>
    </div>
</div>
HTML;

    // Find questions from contexts which the user can edit questions in.
    $availablequestionsbycontext = bulk_tester::get_num_available_coderunner_questions_by_context();

    $jobehost = get_config('qtype_coderunner', 'jobe_host');
    if (count($availablequestionsbycontext) == 0) {
        echo html_writer::tag('p', get_string('unauthorisedbulktest', 'qtype_coderunner'));
    } else {
        echo html_writer::tag('p', '<b>jobe_host:</b> ' . $jobehost);
        // Something to do.
        if ($oldskool) {
            // Moodle 4 style.
            echo $OUTPUT->heading(get_string('coderunnercontexts', 'qtype_coderunner'));
            qtype_coderunner_util::display_course_contexts(
                $availablequestionsbycontext,
                'qtype_coderunner\display_questions_for_context'
            );
        } else {
            // Deal with funky question bank madness in Moodle 5.0.
            echo html_writer::tag('p', "Moodle >= 5.0 detected. Listing by course then qbank.");
            qtype_coderunner_util::display_course_grouped_contexts(
                $availablequestionsbycontext,
                'qtype_coderunner\display_course_header_and_link',
                'qtype_coderunner\display_questions_for_context'
            );
        }
        // Output final stuff, including link to test-all.
        echo html_writer::empty_tag('br');
        echo html_writer::tag('hr', '');
        echo html_writer::empty_tag('br');
        if (has_capability('moodle/site:config', context_system::instance())) {
            echo html_writer::tag('p', html_writer::link(
                new moodle_url('/question/type/coderunner/scripts/bulktest.php', ['contextid' => 0]),
                get_string('bulktestrun', 'qtype_coderunner'),
                ['class' => 'test-all-link',
                'data-contextid' => 0,
                'style' => BUTTONSTYLE . ';cursor:pointer;']
            ));
        }
    }

    echo <<<SCRIPT_END
<script>
function confirmCheckboxChange(checkbox) {
    if (checkbox.checked) {
        var prompt = "Are you sure you want to clear the cache for the selected course?";
        prompt = prompt + " This will clear the cache for all attempts on all questions!";
        const confirmed = confirm(prompt);
        if (!confirmed) {
            checkbox.checked = false;
        }
    }
}

document.addEventListener("DOMContentLoaded", function(event) {
    // Handle expandable sections
    var expandables = document.getElementsByClassName('expandable');
    Array.from(expandables).forEach(function (expandable) {
        expandable.style.display = 'none';
    });

    var expanders = document.getElementsByClassName('expander');
    Array.from(expanders).forEach(function(expander) {
        expander.addEventListener('click', function(event) {
            event.preventDefault();
            if (expander.innerHTML == 'Expand') {
                expander.innerHTML = 'Collapse';
                expander.nextSibling.style.display = 'inline';
            } else {
                expander.innerHTML = 'Expand';
                expander.nextSibling.style.display = 'none';
            }
        });
    });

    // Handle test links (per-context or per-category)
    var testLinks = document.getElementsByClassName('test-link');
    Array.from(testLinks).forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            // Get configuration values
            var nruns = document.getElementById('nruns').value;
            var randomseed = document.getElementById('randomseed').value;
            var repeatrandomonly = document.getElementById('repeatrandomonly').checked ? 1 : 0;
            var clearcachefirst = document.getElementById('clearcachefirst').checked ? 1 : 0;
            var usecache = document.getElementById('usecache').checked ? 1 : 0;

            // Build URL parameters
            var params = new URLSearchParams();
            params.append('contextid', link.dataset.contextid);

            // Add category ID if present
            if (link.dataset.categoryid) {
                params.append('categoryid', link.dataset.categoryid);
            }
            params.append('nruns', nruns);
            params.append('randomseed', randomseed);
            params.append('repeatrandomonly', repeatrandomonly);
            params.append('clearcachefirst', clearcachefirst);
            params.append('usecache', usecache);

            // Construct and navigate to URL
            var url = M.cfg.wwwroot + '/question/type/coderunner/scripts/bulktest.php?' + params.toString();
            window.location.href = url;
        });
    });


    // Handle test-all link
    var testAllLinks = document.getElementsByClassName('test-all-link');
    Array.from(testAllLinks).forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            // Get configuration values
            var nruns = document.getElementById('nruns').value;
            var randomseed = document.getElementById('randomseed').value;
            var repeatrandomonly = document.getElementById('repeatrandomonly').checked ? 1 : 0;
            var clearcachefirst = document.getElementById('clearcachefirst').checked ? 1 : 0;
            var usecache = document.getElementById('usecache').checked ? 1 : 0;

            // Build URL parameters
            var params = new URLSearchParams();
            params.append('contextid', link.dataset.contextid);

            // Add category ID if present
            if (link.dataset.categoryid) {
                params.append('categoryid', link.dataset.categoryid);
            }
            params.append('nruns', nruns);
            params.append('randomseed', randomseed);
            params.append('repeatrandomonly', repeatrandomonly);
            params.append('clearcachefirst', clearcachefirst);
            params.append('usecache', usecache);

            // Construct and navigate to URL (contextid=0 triggers test-all mode)
            var url = M.cfg.wwwroot + '/question/type/coderunner/scripts/bulktest.php?' + params.toString();
            window.location.href = url;
        });
    });
});
</script>
SCRIPT_END;

} else {
    // --------------------------------------------------------
    // Per-context or specific-questions test mode.
    // --------------------------------------------------------
    require_login();
    $context = \context::instance_by_id($contextid);
    require_capability('moodle/question:editall', $context);

    $urlparams = ['contextid' => $context->id, 'categoryid' => $categoryid, 'randomseed' => $randomseed,
                'repeatrandomonly' => $repeatrandomonly, 'nruns' => $nruns, 'clearcachefirst' => $clearcachefirst,
                'questionids' => $questionids];
    $PAGE->set_url('/question/type/coderunner/scripts/bulktest.php', $urlparams);
    $PAGE->set_context($context);
    $title = get_string('bulktesttitle', 'qtype_coderunner', $context->get_context_name());
    $PAGE->set_title($title);

    if ($questionids != '') {
        $questionids = array_map('intval', explode(',', $questionids));
    } else {
        $questionids = [];
    }

    if ($context->contextlevel == CONTEXT_MODULE) {
        // Calling $PAGE->set_context should be enough, but it seems that it is not.
        // Therefore, we get the right $cm and $course, and set things up ourselves.
        $cm = get_coursemodule_from_id(false, $context->instanceid, 0, false, MUST_EXIST);
        $PAGE->set_cm($cm, $DB->get_record('course', ['id' => $cm->course], '*', MUST_EXIST));
    }

    // Create the helper class.
    $bulktester = new bulk_tester(
        $context,
        $categoryid,
        $randomseed,
        $repeatrandomonly,
        $nruns,
        $clearcachefirst,
        $usecache
    );

    // Was: Release the session, so the user can do other things while this runs.
    // Seems like Moodle 4.5 doesn't like this - gives an error. So commented out.
    // User will have to use an incognito window instead.
    // \core\session\manager::write_close().

    // Display.
    echo $OUTPUT->header();
    echo $OUTPUT->heading($title, 2);

    $jobehost = get_config('qtype_coderunner', 'jobe_host');
    $usecachelabel = get_string('bulktestusecachelabel', 'qtype_coderunner');
    $usecachevalue = $usecache ? "true" : "false";
    echo html_writer::tag('p', '<b>jobe_host:</b> ' . $jobehost);
    echo html_writer::tag('p', "<b>$usecachelabel</b> $usecachevalue");

    // Release the session, so the user can do other things while this runs.
    \core\session\manager::write_close();

    ini_set('memory_limit', '1024M');  // For big question banks - TODO: make this a setting?

    $bulktester->run_tests($questionids);

    // Prints the summary of failed/missing tests.
    $bulktester->print_overall_result();
}

echo $OUTPUT->footer();
