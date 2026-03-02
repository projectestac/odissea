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

use core_question\category_manager;

/**
 * Class representing custom question category
 *
 * @package    qbank_purgecategory
 * @copyright  2016 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class manager extends category_manager {

    /**
     * Moves used questions to new category. Removes category and all subcategories and all unused questions.
     *
     * @param int $oldcat id of category to delete
     * @param int $newcat id of category to move unused question.
     */
    public function move_and_purge_category($oldcat, $newcat) {
        global $DB;
        $subcategories = $DB->get_records('question_categories', ['parent' => $oldcat], 'id');
        foreach ($subcategories as $subcategory) {
            $this->move_and_purge_category($subcategory->id, $newcat);
        }
        // Trying to remove all unused question.
        $manager = new category_manager();
        $questionids = $manager->get_real_question_ids_in_category($oldcat);
        foreach ($questionids as $questionid) {
            question_delete_question($questionid);
        }
        // Move used questions to new category and delete category.
        $questionids = $manager->get_real_question_ids_in_category($oldcat);
        if ($questionids) {
            $manager->move_questions_and_delete_category($oldcat, $newcat);
        } else {
            $manager->delete_category($oldcat);
        }
    }

    /**
     * Removes category and all questions and subcategories
     *
     * @param int $oldcat id of category to delete
     */
    public function purge_category($oldcat) {
        global $DB;
        $subcategories = $DB->get_records('question_categories', ['parent' => $oldcat], 'id');
        foreach ($subcategories as $subcategory) {
            $this->purge_category($subcategory->id);
        }
        // Trying to remove all unused question.
        $manager = new category_manager();
        $questionids = $manager->get_real_question_ids_in_category($oldcat);
        foreach ($questionids as $questionid) {
            question_delete_question($questionid);
        }
        // Delete category, if no questions.
        $questionids = $manager->get_real_question_ids_in_category($oldcat);
        if (!$questionids) {
            $manager->delete_category($oldcat);
        }
    }

}
