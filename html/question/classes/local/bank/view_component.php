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

namespace core_question\local\bank;

/**
 * Abstract class to define functionality shared by all pluggable components used in the question bank view.
 *
 * @package   core_question
 * @copyright 2023 onwards Catalyst IT EU {@link https://catalyst-eu.net}
 * @author    Mark Johnson <mark.johnson@catalyst-eu.net>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class view_component {
    /** @var int value we return from get_menu_position here. Subclasses should override this. */
    const MENU_POSITION_NOT_SET = 6666;

    /** @var view Question bank view. */
    protected $qbank;

    /**
     * Constructor.
     * @param view $qbank the question bank view we are helping to render.
     */
    public function __construct(view $qbank) {
        $this->qbank = $qbank;
        $this->init();
    }

    /**
     * A chance for subclasses to initialise themselves, for example to load lang strings,
     * without having to override the constructor.
     */
    protected function init(): void {
    }

    /**
     * Return an integer to indicate the desired position in the menu for this link, smaller at the top.
     *
     * The standard menu items in Moodle core return these numbers:
     * 100 preview_action
     * 200 edit_action
     * 250 copy_action
     * 300 tags_action
     * 400 delete_action
     * 500 history_action
     * 600 export_xml_action
     * (So, if you want your action at a particular place in the order, there should be space.)
     *
     * If two actions get the same order number, then the tie-break on the sort
     * is plugin name, then the order returned by get_question_actions for that plugin.
     *
     * @return int desired position. Smallest at the top.
     */
    public function get_menu_position(): int {
        // We return a big number by default, which is after all the standard core links,
        // so they go first. This should be overridden by all plugins, and not overriding will
        // generate a debugging warning from {@see \core_question\local\bank\view::init_question_actions()}.
        return self::MENU_POSITION_NOT_SET;
    }

    /**
     * Return an array 'table_alias' => 'JOIN clause' to bring in any data that
     * this feature requires.
     *
     * The return values for all the features will be checked. It is OK if two
     * features join in the same table with the same alias and identical JOIN clauses.
     * If two features try to use the same alias with different joins, you get an error.
     * Tables included by default are question (alias q) and those defined in {@see view::get_required_joins()}
     *
     * It is importnat that your join simply adds additional data (or NULLs) to the
     * existing rows of the query. It must not cause additional rows.
     *
     * @return string[] 'table_alias' => 'JOIN clause'
     */
    public function get_extra_joins(): array {
        return [];
    }

    /**
     * Use table alias 'q' for the question table, or one of the
     * ones from get_extra_joins. Every field requested must specify a table prefix.
     *
     * @return string[] fields required.
     */
    public function get_required_fields(): array {
        return [];
    }
}
