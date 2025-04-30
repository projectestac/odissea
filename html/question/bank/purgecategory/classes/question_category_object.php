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

use context;
use qbank_managecategories\question_category_object as base_question_category_object;

/**
 * Class representing custom question category
 *
 * @package    qbank_purgecategory
 * @copyright  2016 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class question_category_object extends base_question_category_object {

    /**
     * Initializes this classes general category-related variables
     *
     * @param int $page
     * @param array $contexts
     * @param int $currentcat
     * @param int $defaultcategory
     * @param int $todelete
     * @param array $addcontexts
     */
    public function initialize($page, $contexts, $currentcat, $defaultcategory, $todelete, $addcontexts): void {
        $lastlist = null;
        foreach ($contexts as $context) {
            $this->editlists[$context->id] = new question_category_list('ul', '', true,
                    $this->pageurl, $page, 'cpage', QUESTION_PAGE_LENGTH, $context);
            $this->editlists[$context->id]->lastlist = & $lastlist;
            if ($lastlist !== null) {
                $lastlist->nextlist = & $this->editlists[$context->id];
            }
            $lastlist = & $this->editlists[$context->id];
        }

        $count = 1;
        $paged = false;
        foreach ($this->editlists as $key => $list) {
            [$paged, $count] = $this->editlists[$key]->list_from_records($paged, $count);
        }
    }

    /**
     * Outputs a list to allow editing/rearranging of existing categories
     * $this->initialize() must have already been called
     */
    public function output_edit_lists(): void {
        global $OUTPUT;

        echo $OUTPUT->heading(get_string('purgecategories', 'qbank_purgecategory'));

        foreach ($this->editlists as $context => $list) {
            $listhtml = $list->to_html(0, ['str' => $this->str]);
            if ($listhtml) {
                $classes = 'boxwidthwide boxaligncenter generalbox questioncategories';
                $classes .= ' contextlevel' . $list->context->contextlevel;
                echo $OUTPUT->box_start($classes);
                $fullcontext = context::instance_by_id($context);
                echo $OUTPUT->heading(get_string('questioncatsfor', 'question', $fullcontext->get_context_name()), 3);
                echo $listhtml;
                echo $OUTPUT->box_end();
            }
        }

        if (!empty($list)) {
            echo $list->display_page_numbers();
        }
    }

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
        $questionids = $this->get_real_question_ids_in_category($oldcat);
        foreach ($questionids as $questionid) {
            question_delete_question($questionid);
        }
        // Move used questions to new category and delete category.
        $questionids = $this->get_real_question_ids_in_category($oldcat);
        if ($questionids) {
            $this->move_questions_and_delete_category($oldcat, $newcat);
        } else {
            $this->delete_category($oldcat);
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
        $questionids = $this->get_real_question_ids_in_category($oldcat);
        foreach ($questionids as $questionid) {
            question_delete_question($questionid);
        }
        // Delete category, if no questions.
        $questionids = $this->get_real_question_ids_in_category($oldcat);
        if (!$questionids) {
            $this->delete_category($oldcat);
        }
    }

}
