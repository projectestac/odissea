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
 * Strings for component 'assignsubmission_cincopa', language 'en', version '4.5'.
 *
 * @package     assignsubmission_cincopa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['api_token_cincopa'] = 'Cincopa Api Token';
$string['api_token_cincopa_help'] = 'Api token Cincopa account';
$string['auto_token_api_error'] = 'Automatic is unavailable for this course\'s sub-account ({$a->subaccount}): the Cincopa API call {$a->method} failed: "{$a->message}". The Cincopa API token in the plugin settings needs account and token permissions. Enter a token manually.';
$string['auto_token_found'] = '<strong>Sub-Account:</strong> {$a->subaccount}<br><strong>Token:</strong> {$a->token}';
$string['auto_token_no_main_token'] = 'Automatic is unavailable for this course\'s sub-account ({$a}): no Cincopa API token is set in the plugin settings. Enter a token manually.';
$string['auto_token_not_found'] = 'A token could not be found or created for this course\'s sub-account ({$a}).';
$string['cincopa'] = 'Cincopa submissions';
$string['cincopa_not_enabled'] = 'Cincopa submissions are not enabled for this assignment.';
$string['default'] = 'Enabled by default';
$string['default_help'] = 'If set, this submission method will be enabled by default for all new assignments.';
$string['description'] = '<div style="margin:10px;padding:15px;background-color:#f5f5f5;border:2px solid #e3e3e3;"><img src="https://www.cincopa.com/_cms/design15/icons/favicon-32.png?affdata=moodle-plugin-assign,setup-page"> Welcome to Cincopa Moodle plugin, check our <a href="https://www.cincopa.com/moodle/welcome" target="_blank">welcome page</a> for registration and support documents.</div>';
$string['enabled'] = 'Help with Cincopa submissions';
$string['enabled_help'] = 'If enabled, students are able to upload and record from webcam/app different types of multimedia including videos, images, and audios as their submission.';
$string['manual_token'] = 'Cincopa Api Token';
$string['mobile_config_error'] = 'The Cincopa uploader could not be loaded for this assignment. Check your connection and try again, or contact your teacher.';
$string['pluginname'] = 'Cincopa submissions';
$string['template_cincopa'] = 'Template';
$string['template_cincopa_help'] = 'Gallery Template';
$string['token_mode_auto'] = 'Automatic';
$string['token_mode_manual'] = 'Manual';
$string['token_selection_mode'] = 'API Token Source';
$string['use_sub_accounts'] = 'Use Sub-Accounts';
$string['use_sub_accounts_help'] = 'If enabled, you can assign a specific API token for a sub-account based on the course creation month and year.';
