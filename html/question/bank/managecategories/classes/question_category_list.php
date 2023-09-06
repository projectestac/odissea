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

namespace qbank_managecategories;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir. '/listlib.php');
require_once($CFG->dirroot . '/question/editlib.php');

use stdClass;
use moodle_list;

/**
 * Class representing a list of question categories.
 *
 * @package    qbank_managecategories
 * @copyright  1999 onwards Martin Dougiamas {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class question_category_list extends moodle_list {

    /**
     * Table name.
     * @var $table
     */
    public $table = "question_categories";

    /**
     * List item class name.
     * @var $listitemclassname
     */
    public $listitemclassname = '\qbank_managecategories\question_category_list_item';

    /**
     * Reference to list displayed below this one.
     * @var $nextlist
     */
    public $nextlist = null;

    /**
     * Reference to list displayed above this one.
     * @var $lastlist
     */
    public $lastlist = null;

    /**
     * Context.
     * @var $context
     */
    public $context = null;

    /**
     * Sort by string.
     * @var $sortby
     */
    public $sortby = 'parent, sortorder, name';

    /**
     * Constructor.
     *
     * @param string $type
     * @param string $attributes
     * @param boolean $editable
     * @param \moodle_url $pageurl url for this page
     * @param integer $page if 0 no pagination. (These three params only used in top level list.)
     * @param string $pageparamname name of url param that is used for passing page no
     * @param integer $itemsperpage no of top level items.
     * @param \context $context
     */
    public function __construct($type='ul', $attributes='', $editable = false, $pageurl=null,
                                $page = 0, $pageparamname = 'page',
                                $itemsperpage = DEFAULT_QUESTIONS_PER_PAGE, $context = null) {
        parent::__construct('ul', '', $editable, $pageurl, $page, 'cpage', $itemsperpage);
        $this->context = $context;
    }

    /**
     * Set the array of records of list items.
     */
    public function get_records() : void {
        $this->records = helper::get_categories_for_contexts($this->context->id, $this->sortby);
    }

    /**
     * Returns the highest category id that the $item can have as its parent.
     * Note: question categories cannot go higher than the TOP category.
     *
     * @param \list_item $item The item which its top level parent is going to be returned.
     * @return int
     */
    public function get_top_level_parent_id($item) : int {
        // Put the item at the highest level it can go.
        $topcategory = question_get_top_category($item->item->contextid, true);
        return $topcategory->id;
    }

    /**
     * Process any actions.
     *
     * @param integer $left id of item to move left
     * @param integer $right id of item to move right
     * @param integer $moveup id of item to move up
     * @param integer $movedown id of item to move down
     * @return void
     */
    public function process_actions($left, $right, $moveup, $movedown) : void {
        $category = new stdClass();
        if (!empty($left)) {
            // Moved Left (In to another category).
            $category->id = $left;
            $category->contextid = $this->context->id;
            $event = \core\event\question_category_moved::create_from_question_category_instance($category);
            $event->trigger();
        } else if (!empty($right)) {
            // Moved Right (Out of the current category).
            $category->id = $right;
            $category->contextid = $this->context->id;
            $event = \core\event\question_category_moved::create_from_question_category_instance($category);
            $event->trigger();
        }
        parent::process_actions($left, $right, $moveup, $movedown);
    }
}
