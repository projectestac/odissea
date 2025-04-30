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
 * @copyright  2024 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qbank_purgecategory;

use core_question\local\bank\navigation_node_base;
use core_question\local\bank\plugin_features_base;

/**
 * Class plugin_feature.
 *
 * Entry point for qbank plugin.
 * Every qbank plugin must extent this class.
 *
 * @package    qbank_purgecategory
 * @copyright  2024 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class plugin_feature extends plugin_features_base {

    /**
     * This method will return the object for the navigation node.
     *
     * @return null|navigation_node_base
     */
    public function get_navigation_node(): ?navigation_node_base {
        return new navigation();
    }
}
