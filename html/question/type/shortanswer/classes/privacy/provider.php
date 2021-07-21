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
 * Privacy Subsystem implementation for qtype_shortanswer.
 *
 * @package    qtype_shortanswer
 * @copyright  2018 Andrew Nicols <andrew@nicols.co.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qtype_shortanswer\privacy;

use core_privacy\local\metadata\collection;
use core_privacy\local\request\transform;
use core_privacy\local\request\writer;

defined('MOODLE_INTERNAL') || die();

/**
 * Privacy Subsystem for qtype_shortanswer implementing user_preference_provider.
 *
 * @copyright  2018 Andrew Nicols <andrew@nicols.co.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements
        // This component has data.
        // We need to return default options that have been set a user preferences.
        \core_privacy\local\metadata\provider,
        \core_privacy\local\request\user_preference_provider
{

    /**
     * Returns meta data about this system.
     *
     * @param   collection     $collection The initialised collection to add items to.
     * @return  collection     A listing of user data stored through this system.
     */
    public static function get_metadata(collection $collection) : collection {
        $collection->add_user_preference('qtype_shortanswer_defaultmark', 'privacy:preference:defaultmark');
        $collection->add_user_preference('qtype_shortanswer_penalty', 'privacy:preference:penalty');
        $collection->add_user_preference('qtype_shortanswer_usecase', 'privacy:preference:usecase');
        return $collection;
    }

    /**
     * Export all user preferences for the plugin.
     *
     * @param int $userid The userid of the user whose data is to be exported.
     */
    public static function export_user_preferences(int $userid) {
        $preference = get_user_preferences('qtype_shortanswer_defaultmark', null, $userid);
        if (null !== $preference) {
            $desc = get_string('privacy:preference:defaultmark', 'qtype_shortanswer');
            writer::export_user_preference('qtype_shortanswer', 'defaultmark', $preference, $desc);
        }

        $preference = get_user_preferences('qtype_shortanswer_penalty', null, $userid);
        if (null !== $preference) {
            $desc = get_string('privacy:preference:penalty', 'qtype_shortanswer');
            writer::export_user_preference('qtype_shortanswer', 'penalty', transform::percentage($preference), $desc);
        }

        $preference = get_user_preferences('qtype_shortanswer_usecase', null, $userid);
        if (null !== $preference) {
            $desc = get_string('privacy:preference:usecase', 'qtype_shortanswer');
            if ($preference) {
                $strvalue = get_string('caseyes', 'qtype_shortanswer');
            } else {
                $strvalue = get_string('caseno', 'qtype_shortanswer');
            }
            writer::export_user_preference('qtype_shortanswer', 'shuffleanswers', $strvalue, $desc);
        }
    }
}
