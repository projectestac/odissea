<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.

/**
 * Question bank overview report.
 *
 * @package    report_questionbankoverview
 * @copyright  2025 Toni Ginard
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once '../../config.php';
require_once $CFG->libdir.'/adminlib.php';
require_once __DIR__ . '/locallib.php';

admin_externalpage_setup('questionbankoverview');

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'report_questionbankoverview'));

// Create a mapping of context levels to their names.
$context_levels = [
    CONTEXT_SYSTEM => 'CONTEXT_SYSTEM',
    CONTEXT_USER => 'CONTEXT_USER',
    CONTEXT_COURSECAT => 'CONTEXT_COURSECAT',
    CONTEXT_COURSE => 'CONTEXT_COURSE',
    CONTEXT_MODULE => 'CONTEXT_MODULE',
    CONTEXT_BLOCK => 'CONTEXT_BLOCK',
];

// Count the number of questions in the questions table.
$total_questions = $DB->count_records('question');

// Count the number of random questions (records in question_set_references).
$total_random_questions = $DB->count_records('question_set_references');

// Fetch all question categories with their context levels and instance id.
$categories = $DB->get_records_sql('
    SELECT qc.*, c.contextlevel, c.instanceid
    FROM {question_categories} qc
    JOIN {context} c ON qc.contextid = c.id
');

// Organize categories by parent.
$categories_by_parent = [];
foreach ($categories as $category) {
    $categories_by_parent[$category->parent][] = $category;
}

// Fetch the number of questions in each category from question_bank_entries.
$question_counts = $DB->get_records_sql_menu(
    'SELECT questioncategoryid, COUNT(*) as count FROM {question_bank_entries} GROUP BY questioncategoryid ORDER BY questioncategoryid ASC'
);

// Sum of questions in each category.
global $categories_total_questions;

// Calculate total questions for each main category.
$main_categories = $categories_by_parent[0] ?? [];

foreach ($main_categories as $key => $category) {
    $categories_total_questions[$category->id] = calculate_total_questions($category->id, $categories_by_parent, $question_counts);
    $category->total_questions = $categories_total_questions[$category->id];
    $main_categories[$key] = $category;
}

// Sort main categories by total questions in descending order.
usort($categories_by_parent[0], static function($a, $b) {
    return $b->total_questions <=> $a->total_questions;
});

// Build the category tree starting from the root (parent_id = 0). In fact, it is just a one-dimension array.
$category_tree = build_category_tree(0, $main_categories, $categories_by_parent, $question_counts, $context_levels);

// Prepare the table.
$table = new html_table();
$table->head = [
    get_string('category'),
    get_string('contextlevel'),
    get_string('instance', 'report_questionbankoverview'),
    get_string('courseurl', 'report_questionbankoverview'),
    get_string('quizurl', 'report_questionbankoverview'),
    get_string('coursecaturl', 'report_questionbankoverview'),
    get_string('delete'),
    get_string('info')
];
$table->data = [];

// Check if the qbank_purgecategory plugin is installed.
$pluginman = \core_plugin_manager::instance();
$plugininfo = $pluginman->get_plugin_info('qbank_purgecategory');
$is_purgecategory_installed = (bool)$plugininfo;

// Populate the table with the category tree.
foreach ($category_tree as $category) {

    $course_link = ($category['course_url']) ?
        html_writer::link($category['course_url'], get_string('course')) :
        '';
    $quiz_link = ($category['quiz_url']) ?
        html_writer::link($category['quiz_url'], get_string('quiz', 'report_questionbankoverview')) :
        '';
    $coursecat_link = ($category['coursecat_url']) ?
        html_writer::link($category['coursecat_url'], get_string('category')) :
        '';

    // Specific code for Àgora project.
    if ($is_purgecategory_installed && get_protected_agora()) {
        $delete_link = html_writer::link(
            new moodle_url(
                '/question/bank/purgecategory/confirm.php',
                ['purge' => $category['id'], 'courseid' => $category['course_id']]
            ),
            get_string('delete')
        );
    } else {
        $delete_link = '';
    }

    $table->data[] = [
        $category['name'],
        $category['contextlevel'],
        $category['instanceid'],
        $course_link,
        $quiz_link,
        $coursecat_link,
        $delete_link,
        $category['info'],
    ];
}

// Print a box that shows the totals.
$text = get_string('totalquestions', 'report_questionbankoverview', $total_questions) .
    '<br>' .
    get_string('totalrandomquestions', 'report_questionbankoverview', $total_random_questions);

echo html_writer::tag('div', $text, ['class' => 'alert alert-info']);

// Print the table.
echo html_writer::table($table);

echo $OUTPUT->footer();
