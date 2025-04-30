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

use html_writer;
use moodle_url;
use pix_icon;
use qbank_managecategories\helper as qbank_managecategories_helper;
use qbank_managecategories\question_category_list_item as base_question_category_list_item;

/**
 * Class representing custom category list item
 *
 * @package    qbank_purgecategory
 * @copyright  2016 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class question_category_list_item extends base_question_category_list_item {

    /**
     * Creating list without icons.
     *
     * @param bool $first
     * @param bool $last
     * @param stdClass $lastitem
     */
    public function set_icon_html($first, $last, $lastitem): void {
    }

    /**
     * Output the html just for this item. Called by to_html which adds html for children.
     *
     * @param array $extraargs
     * @return string
     */
    public function item_html($extraargs = []): string {
        global $CFG, $OUTPUT;
        $category = $this->item;

        $categoryname = format_string($category->name, true, ['context' => $this->parentlist->context]);
        $categoryname = html_writer::tag('b', $categoryname);
        $item = "$categoryname ($category->questioncount)";
        $item .= format_text($category->info, $category->infoformat,
                ['context' => $this->parentlist->context, 'noclean' => true]);

        $showpurgebutton = !qbank_managecategories_helper::question_is_only_child_of_top_category_in_context($category->id);
        if ($showpurgebutton) {
            $params = [];
            $params['purge'] = $this->id;
            $params['cmid'] = optional_param('cmid', null, PARAM_INT);
            $params['courseid'] = optional_param('courseid', null, PARAM_INT);
            $params = array_filter($params);

            $purgeurl = new moodle_url('/question/bank/purgecategory/confirm.php', $params);
            $text = get_string('purgethiscategory', 'qbank_purgecategory');
            $icon = new pix_icon('purge', $text, 'qbank_purgecategory');
            $item .= '&nbsp;';
            $item .= $OUTPUT->action_link($purgeurl, '', null, [], $icon);
        }

        return $item;
    }
}
