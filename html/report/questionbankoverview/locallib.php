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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Recursively calculate the total number of questions for each category.
 *
 * @author Toni Ginard
 * @param int $category_id
 * @param array $categories_by_parent
 * @param array $question_counts
 * @return int
 */
function calculate_total_questions(int $category_id, array $categories_by_parent, array $question_counts): int {

    global $categories_total_questions;

    $total_questions = $question_counts[$category_id] ?? 0;

    if (isset($categories_by_parent[$category_id])) {
        foreach ($categories_by_parent[$category_id] as $subcategory) {
            $total_questions += calculate_total_questions($subcategory->id, $categories_by_parent, $question_counts);
        }
    }

    $categories_total_questions[$category_id] = (int)$total_questions;

    return $total_questions;

}

/**
 * Recursively build the category tree
 *
 * @param int $parent_id
 * @param array $main_categories
 * @param array $categories_by_parent
 * @param array $question_counts
 * @param array $context_levels
 * @param int $depth
 * @throws coding_exception
 * @throws dml_exception
 * @return array
 * @author Toni Ginard
 */
function build_category_tree(int $parent_id, array $main_categories, array $categories_by_parent, array $question_counts, 
                             array $context_levels, int $depth = 0): array {

    global $CFG, $DB, $categories_total_questions;
    $tree = [];

    if (isset($categories_by_parent[$parent_id])) {
        foreach ($categories_by_parent[$parent_id] as $category) {

            $contextlevel_name = $context_levels[$category->contextlevel] ?? $category->contextlevel;

            $course_url = ((int)$category->contextlevel === CONTEXT_COURSE) ?
                $CFG->wwwroot . '/course/view.php?id=' . $category->instanceid :
                '';
            $quiz_url = ((int)$category->contextlevel === CONTEXT_MODULE) ?
                $CFG->wwwroot . '/mod/quiz/view.php?id=' . $category->instanceid :
                '';
            $coursecat_url = ((int)$category->contextlevel === CONTEXT_COURSECAT) ?
                $CFG->wwwroot . '/course/index.php?categoryid=' . $category->instanceid :
                '';

            if (!empty($course_url)) {
                $course_id = $category->instanceid;
            } else if (!empty($quiz_url)) {
                $course_id = $DB->get_field_sql('SELECT course FROM {quiz} WHERE id = ?', [$category->instanceid]);
            } else {
                $course_id = 0;
            }

            // Recursively build the tree for subcategories and accumulate their question counts.
            $subcategories = build_category_tree($category->id, $main_categories, $categories_by_parent, $question_counts,
                $context_levels, $depth + 1);

            // Build the figures shown to the user: questions in this category - questions in this category and its subcategories.
            if (isset($question_counts[$category->id])) {
                $quantities = $question_counts[$category->id] . ' - ' . $categories_total_questions[$category->id];
            } else {
                $quantities = $categories_total_questions[$category->id];
            }

            $tree[] = [
                'id' => $category->id,
                'name' => str_repeat('&nbsp;', $depth * 4) . $category->id . ' - ' . format_string($category->name) .
                    ' (' . $quantities . ')',
                'contextlevel' => $contextlevel_name,
                'instanceid' => $category->instanceid,
                'course_id' => $course_id,
                'course_url' => $course_url,
                'quiz_url' => $quiz_url,
                'coursecat_url' => $coursecat_url,
                'info' => format_text($category->info, FORMAT_HTML),
            ];

            $tree = array_merge($tree, $subcategories);
        }
    }

    return $tree;
}
