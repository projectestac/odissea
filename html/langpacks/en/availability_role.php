<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'availability_role', language 'en', version '4.5'.
 *
 * @package     availability_role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['description'] = 'Allow only users with a specified role.';
$string['error_selectrole'] = 'You must select a role';
$string['missing'] = '[Missing role]';
$string['nonsensical_warning'] = '<b>Warning:</b><br />This role does not have view access to this activity type at all.<br />The restriction may have no effect.';
$string['pluginname'] = 'Restriction by role';
$string['privacy:metadata'] = 'The Restriction by role plugin does not store any personal data.';
$string['requires_notrole'] = 'You are not a(n) <em>{$a}</em>';
$string['requires_role'] = 'You are a(n) <em>{$a}</em>';
$string['role:addinstance'] = 'Add role conditions to activities';
$string['setting_coursecatroles'] = 'Supported category roles';
$string['setting_courseroles'] = 'Supported course roles';
$string['setting_globalroles'] = 'Supported global roles';
$string['setting_specialrolesheading'] = 'Special roles';
$string['setting_supportedrolesheading'] = 'Supported roles';
$string['setting_supportedrolesheading_desc'] = 'With these settings, you can limit the roles that can be used in the condition. By default, all roles that can be assigned in the course context can be used in the condition, but roles which can be assigned on the category or global level are not enabled by default.';
$string['setting_supportedrolesheading_note'] = 'Please note: If you change one of these settings and disallow roles, it will not affect existing conditions and the disallowed role will still be set in existing conditions.';
$string['setting_supportguestrole'] = 'Guest role';
$string['setting_supportguestrole_desc'] = 'If activated, the availability of activities can be restricted to or forbidden for users that are viewing a course as guest.';
$string['setting_supportnotloggedinrole'] = 'Not-logged-in role';
$string['setting_supportnotloggedinrole_desc'] = 'If activated, the availability of activities can be restricted to or forbidden for users that are not logged in.';
$string['title'] = 'Role';
