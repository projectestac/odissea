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
use qbank_purgecategory\question_categories;
use renderable;
use renderer_base;
use templatable;

/**
 * Output component for all categories editing form
 *
 * @package    qbank_purgecategory
 * @copyright  2025 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class categories implements renderable, templatable {

    /**
     * Constructor.
     *
     * @param question_categories $categories Question categories for display.
     */
    public function __construct(
        /** @var question_categories $categories Question categories for display. */
        protected question_categories $categories,
    ) {
    }

    #[\Override]
    public function export_for_template(renderer_base $output): array {
        $categories = [];
        foreach ($this->categories->editlists as $contextid => $list) {
            // Get list elements.
            $context = context::instance_by_id($contextid);
            $items = [];
            foreach ($list->items as $item) {
                $category = new category($item, $context);
                $items[] = $category->export_for_template($output);
            }
            if ($items) {
                $ctxlvl = "contextlevel" . $list->context->contextlevel;
                $contextname = $list->context->get_context_name();
                $heading = get_string('questioncatsfor', 'question', $contextname);
                $categories[] = [
                    'ctxlvl' => $ctxlvl,
                    'heading' => $heading,
                    'items' => $items,
                ];
            }
        }
        return [
            'categories' => $categories,
        ];
    }
}
