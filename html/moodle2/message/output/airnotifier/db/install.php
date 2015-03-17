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
 * Airnotifier message processor installation code
 *
 * @package    message_airnotifier
 * @copyright  2012 Jerome Mouneyrac
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Install the Airnotifier message processor
 */
function xmldb_message_airnotifier_install() {
    global $CFG, $DB;

    $result = true;

    $provider = new stdClass();
    $provider->name = 'airnotifier';
    $provider->enabled = 0;
    $DB->insert_record('message_processors', $provider);

    // Add the WebServices to the MoodleMobile core service.
    // TODO: Remove this when this plugin launch in core.
    require_once($CFG->dirroot . '/webservice/lib.php');
    $webservicemanager = new webservice();
    $mobileservice = $webservicemanager->get_external_service_by_shortname(MOODLE_OFFICIAL_MOBILE_SERVICE);

    if (!$webservicemanager->service_function_exists("message_airnotifier_is_system_configured",
                                                        $mobileservice->id)) {
        $webservicemanager->add_external_function_to_service("message_airnotifier_is_system_configured",
                                                                $mobileservice->id);
    }

    if (!$webservicemanager->service_function_exists("message_airnotifier_are_notification_preferences_configured",
                                                        $mobileservice->id)) {
        $webservicemanager->add_external_function_to_service("message_airnotifier_are_notification_preferences_configured",
                                                        $mobileservice->id);
    }

    return $result;
}
