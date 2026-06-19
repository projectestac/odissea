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
 * Find all questions whose question text is exactly duplicated.
 *
 * When called without parameters, this script displays an index of all
 * accessible contexts with a link to run the duplicate finder in each.
 * When called with a contextid parameter it scans that context and
 * prints a list of all exact duplicates.
 *
 * @package   qtype_coderunner
 * @copyright 2018 and onwards Richard Lobb, The University of Canterbury
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qtype_coderunner;

use context;
use context_system;
use html_writer;
use moodle_url;
use qtype_coderunner_util;

define('NO_OUTPUT_BUFFERING', true);

require_once(__DIR__ . '/../../../../config.php');
require_once($CFG->libdir . '/questionlib.php');

// Get optional parameters.
$contextid = optional_param('contextid', 0, PARAM_INT);

if ($contextid > 0) {
    $context = context::instance_by_id($contextid);
} else {
    $context = context_system::instance();
}
require_login();

if ($contextid > 0) {
    // Worker mode: find and display duplicate questions in the selected context.
    require_capability('moodle/question:editall', $context);
    $PAGE->set_url('/question/type/coderunner/scripts/findduplicates.php', ['contextid' => $context->id]);
    $PAGE->set_context($context);
    $title = 'Duplicated CodeRunner questions';
    $PAGE->set_title($title);

    if ($context->contextlevel == CONTEXT_MODULE) {
        // Calling $PAGE->set_context should be enough, but it seems that it is not.
        // Therefore, we get the right $cm and $course, and set things up ourselves.
        $cm = get_coursemodule_from_id(false, $context->instanceid, 0, false, MUST_EXIST);
        $PAGE->set_cm($cm, $DB->get_record('course', ['id' => $cm->course], '*', MUST_EXIST));
    }

    // Display.
    echo $OUTPUT->header();
    echo $OUTPUT->heading($title);

    echo "<table class='table table-bordered table-striped'>\n";
    echo "<tr><th>Q1 name</th><th>Q1 Category</th><th>Q2 name</th><th>Q2 category</th></tr>\n";
    // Find all the duplicates.
    $allquestionsmap = bulk_tester::get_all_coderunner_questions_in_context($contextid);
    $allquestions = array_values($allquestionsmap);
    $numduplicates = 0;
    for ($i = 0; $i < count($allquestions); $i++) {
        $q1 = $allquestions[$i];
        $q1text = $q1->questiontext;
        for ($j = $i + 1; $j < count($allquestions); $j++) {
            $q2 = $allquestions[$j];
            $q2text = $q2->questiontext;
            if ($q1text === $q2text) {
                echo("<tr><td>{$q1->name}</td><td>{$q1->categoryname}</td><td>{$q2->name}<td>{$q2->categoryname}</td></tr>\n");
                $numduplicates++;
            }
        }
    }
    echo "</table>";
    echo "<p>$numduplicates duplicated questions found</p>";
} else {
    // Index mode: list accessible contexts with links to find duplicates.
    $PAGE->set_url('/question/type/coderunner/scripts/findduplicates.php');
    $PAGE->set_context($context);
    $PAGE->set_title('Find duplicate questions');

    // Display.
    echo $OUTPUT->header();
    echo $OUTPUT->heading('Courses containing CodeRunner questions');

    $availablequestionsbycontext = bulk_tester::get_num_available_coderunner_questions_by_context();

    // List all course contexts available to the user.
    if (count($availablequestionsbycontext) == 0) {
        echo html_writer::tag('p', 'unauthorisedbulktest');
    } else {
        $oldskool = !(\qtype_coderunner_util::using_mod_qbank()); // No qbanks in Moodle < 5.0.
        if (!$oldskool) {
            echo "Sorry :( This needs re-written to deal with Moodle 5.0 properly."; // TODO = Fix this <-----------------------.
            echo "<br>That is, to list by course rather than context.";
        }
        echo html_writer::start_tag('ul');
        $buttonstyle = 'border: 1px solid #F0F0F0; background-color: #FFFFC0; padding: 2px 2px 0px 2px;';
        foreach ($availablequestionsbycontext as $contextid => $countdata) {
            $numcoderunnerquestions = $countdata['numquestions'];
            $name = $countdata['name'];
            if (strpos($name, 'Course:') === 0 || !$oldskool) { // Remove the || !$oldskook when updating to deal with Moodle 5.0.
                $class = 'findduplicates coderunner context quiz';
                $findduplicatesurl = new moodle_url('/question/type/coderunner/scripts/findduplicates.php', ['contextid' => $contextid]);
                $findduplicateslink = html_writer::link(
                    $findduplicatesurl,
                    'Find duplicates',
                    ['title' => 'Find all duplicates in this context',
                    'style' => $buttonstyle]
                );
                $litext = $name . ' (' . $numcoderunnerquestions . ') ' . $findduplicateslink;
                echo html_writer::start_tag('li', ['class' => $class]);
                echo $litext;
                echo html_writer::end_tag('li');
            }
        }
        echo html_writer::end_tag('ul');
    }
}

echo $OUTPUT->footer();
