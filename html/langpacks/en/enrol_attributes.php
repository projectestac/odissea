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
 * Strings for component 'enrol_attributes', language 'en', version '4.1'.
 *
 * @package     enrol_attributes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcondition'] = 'Add condition';
$string['addgroup'] = 'Add group';
$string['ajax-error'] = 'An error occured';
$string['ajax-okforced'] = 'OK, {$a} users have been enrolled';
$string['ajax-okpurged'] = 'OK, enrolments have been purged';
$string['attributes:config'] = 'Configure plugin instances';
$string['attributes:manage'] = 'Manage enrolled users';
$string['attributes:unenrol'] = 'Unenrol users from the course';
$string['attributes:unenrolself'] = 'Unenrol self from the course';
$string['attrsyntax'] = 'User profile fields rules';
$string['attrsyntax_help'] = '<p>These rules can only use custom user profile fields.</p>';
$string['cachedef_dbquerycache'] = 'DB query cache';
$string['confirmforce'] = 'This will (re)enrol all users corresponding to this rule.';
$string['confirmpurge'] = 'This will remove all enrolments corresponding to this rule.';
$string['defaultrole'] = 'Default role';
$string['defaultrole_desc'] = 'Default role used to enrol people with this plugin (each instance can override this).';
$string['defaultwhenexpired'] = 'Default behaviour after attributes expiration';
$string['defaultwhenexpired_desc'] = 'What to do with users that don\'t match the attribute rule anymore. This setting can be overridden in each enrollment instance.';
$string['deletecondition'] = 'Delete condition';
$string['force'] = 'Force enrolments now';
$string['group'] = 'Group assignement';
$string['group_help'] = 'You can assign none or multiples groups';
$string['listitem_description'] = 'The "equals" operator checks for strict equality. The "listitem" operator allows to check if a value is in a list of values. The list of values is a semicolon separated list of values. The listitem operator is case sensitive.';
$string['mappings'] = 'Shibboleth mappings';
$string['mappings_desc'] = 'When using Shibboleth authentication, this plugin can automatically update a user\'s profile upon each login.<br><br>For instance, if you want to update the user\'s <code>homeorganizationtype</code> profile field with the Shibboleth attribute <code>Shib-HomeOrganizationType</code> (provided that is the environment variable available to the server during login), you can enter on one line: <code>Shib-HomeOrganizationType:homeorganizationtype</code><br>You may enter as many lines as needed.<br><br>To not use this feature or if you don\'t use Shibboleth authentication, simple leave this empty.';
$string['no_custom_field'] = 'There seems to be no custom field. Head to <a href="{$a}" target="_blank">user settings</a> to add one.';
$string['no_profile_field_selected'] = 'No profile field has been selected in the enrol_attributes plugin settings.';
$string['observelogins'] = 'Enrol users immediately at login';
$string['observelogins_desc'] = 'Try to enrol users immediately when they log in. This can have a performance impact on your site, deactivate this if lots of users log in at the same time and their being enrolled at once becomes a bottleneck.';
$string['pluginname'] = 'Enrol by user profile fields';
$string['privacy:metadata'] = 'The Enrol by user profile fields enrolment plugin does not store any personal data.';
$string['profilefields'] = 'Profile fields to be used in the selector';
$string['profilefields_desc'] = 'Which user profile fields can be used when configuring an enrolment instance?<br><br>
        <div class="alert alert-warning alert-block fade in" role="alert" data-aria-autofocus="true">If you don\'t select any attribute here, this makes the plugin moot and hence disables its use in courses.</div><br>The feature below may however still be used in this case.';
$string['purge'] = 'Purge enrolments';
$string['removewhenexpired'] = 'Unenrol after attributes expiration';
$string['removewhenexpired_help'] = 'Unenrol users upon login if they don\'t match the attribute rule anymore.';
$string['whenexpired'] = 'Behaviour after attributes expiration';
$string['whenexpired_help'] = 'What to do with users that don\'t match the attribute rule anymore.';
$string['whenexpireddonothing'] = 'Leave user enrolled';
$string['whenexpiredremove'] = 'Unenroll user';
$string['whenexpiredsuspend'] = 'Suspend user';
