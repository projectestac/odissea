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
 * Search area for mod_journal activities.
 *
 * @package    mod_journal
 * @copyright  2016 David Monllao {@link http://www.davidmonllao.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_journal\search;

/**
 * Return proper class name
 *
 * @return void
 */
function get_dynamic_parent_activity() {
    global $CFG;
    if (class_exists('\core_search\area\base_activity')) {
        return '\core_search\area\base_activity';
    } else {
        return '\core_search\base_activity';
    }
}
class_alias(get_dynamic_parent_activity(), '\mod_journal\search\DynamicParentActivity');


/**
 * Search area for mod_journal activities.
 *
 * @package    mod_journal
 * @copyright  2016 David Monllao {@link http://www.davidmonllao.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class activity extends \mod_journal\search\DynamicParentActivity {

}

