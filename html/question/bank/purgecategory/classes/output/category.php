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
 * Tool for quick renaming of many question categories.
 *
 * @package    qbank_purgecategory
 * @copyright  2025 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qbank_purgecategory\output;

use context;
use core\output\action_link;
use core\output\pix_icon;
use core_question\category_manager;
use moodle_url;
use renderable;
use renderer_base;
use stdClass;
use templatable;

/**
 * Output component for a single category
 *
 * @package    qbank_purgecategory
 * @copyright  2025 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class category implements renderable, templatable {

    /**
     * Constructor
     *
     * @param stdClass $category The record of category we are rendering
     * @param context $context The context the category belongs to
     */
    public function __construct(
        /** @var stdClass $category The record of category we are rendering */
        protected stdClass $category,
        /** @var context $context The context the category belongs to. */
        protected context $context,
    ) {
    }

    /**
     * Create the template data for a category, and call recursively for child categories.
     *
     * @param renderer_base $output
     * @return array
     */
    public function export_for_template(renderer_base $output): array {
        $children = [];
        if (!empty($this->category->children)) {
            foreach ($this->category->children as $child) {
                $childcategory = new category($child, $this->context);
                $children[] = $childcategory->export_for_template($output);
            }
        }
        $actionlink = null;
        $manager = new category_manager();
        $showpurgebutton = !$manager->is_only_child_of_top_category_in_context($this->category->id);
        if ($showpurgebutton) {
            $params = [];
            $params['purge'] = $this->category->id;
            $params['cmid'] = optional_param('cmid', null, PARAM_INT);
            $params['courseid'] = optional_param('courseid', null, PARAM_INT);
            $params = array_filter($params);
            $text = get_string('purgethiscategory', 'qbank_purgecategory');
            $actionlink = new action_link(
                new moodle_url('/question/bank/purgecategory/confirm.php', $params),
                '',
                null,
                [],
                new pix_icon('purge', $text, 'qbank_purgecategory'),
            );
        }
        return [
            'categoryid' => $this->category->id,
            'contextid' => $this->context->id,
            'categoryname' => format_string($this->category->name, true, ['context' => $this->context]),
            'questioncount' => $this->category->questioncount,
            'categorydesc' => format_text($this->category->info, $this->category->infoformat,
                ['context' => $this->context, 'noclean' => true]),
            'actionlink' => $actionlink?->export_for_template($output),
            'haschildren' => !empty($children),
            'children' => $children,
        ];
    }
}
