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
 * Tool for deleting question category with question and subcategories.
 *
 * @package    qbank_purgecategory
 * @copyright  2016 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace qbank_purgecategory;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir.'/questionlib.php');

/**
 * Helper class.
 *
 * @package    qbank_purgecategory
 * @copyright  2025 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class helper {

    /**
     * Returns overall subcategories count in category and all subcategories.
     *
     * @param int $categoryid id of category
     * @return int questions count
     */
    public static function get_subcategories_count($categoryid): int {
        global $DB;

        $subcategories = $DB->get_records('question_categories', ['parent' => $categoryid], 'id');
        $count = count($subcategories);
        foreach ($subcategories as $subcategory) {
            $count += static::get_subcategories_count($subcategory->id);
        }
        return $count;
    }

    /**
     * Returns overall question count in category and all subcategories.
     *
     * @param int $categoryid id of category
     * @return int questions count
     */
    public static function get_questions_count($categoryid): int {
        global $DB;

        $sql = "SELECT COUNT(q.id)
                  FROM {question} q
                  JOIN {question_versions} qv ON qv.questionid = q.id
                  JOIN {question_bank_entries} qbe ON qbe.id = qv.questionbankentryid
                 WHERE qbe.questioncategoryid = :categoryid";
        $params = ['categoryid' => $categoryid];
        $count = $DB->count_records_sql($sql, $params);
        $subcategories = $DB->get_records('question_categories', ['parent' => $categoryid], 'id');
        foreach ($subcategories as $subcategory) {
            $count += static::get_questions_count($subcategory->id);
        }
        return $count;
    }

    /**
     * Returns used question count in category and all subcategories.
     *
     * @param int $categoryid id of category
     * @return int questions count
     */
    public static function get_used_questions_count($categoryid): int {
        global $DB;

        $count = 0;
        $sql = "SELECT q.id
                  FROM {question} q
                  JOIN {question_versions} qv ON qv.questionid = q.id
                  JOIN {question_bank_entries} qbe ON qbe.id = qv.questionbankentryid
                 WHERE qbe.questioncategoryid = :categoryid";
        $params = ['categoryid' => $categoryid];
        $questions = $DB->get_records_sql($sql, $params);
        foreach ($questions as $question) {
            if (questions_in_use([$question->id])) {
                $count++;
            }
        }
        $subcategories = $DB->get_records('question_categories', ['parent' => $categoryid], 'id');
        foreach ($subcategories as $subcategory) {
            $count += static::get_used_questions_count($subcategory->id);
        }
        return $count;
    }
}
