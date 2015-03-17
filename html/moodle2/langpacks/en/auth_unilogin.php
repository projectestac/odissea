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
 * Strings for component 'auth_unilogin', language 'en', branch 'MOODLE_26_STABLE'
 *
 * @package   auth_unilogin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['application_id'] = 'Application ID';
$string['application_id_description'] = 'Each application has a unique ID used to identify to UNI C';
$string['application_info_description'] = 'Basic information about your application. You get this infromation by registering with UNI C';
$string['application_info_header'] = 'Application info';
$string['application_secret'] = 'Application secret';
$string['application_secret_description'] = 'The secret that is used, together with the application ID to identify to UNI C';
$string['application_settings_description'] = 'Settings for how the user should login';
$string['application_settings_header'] = 'Login settings';
$string['auth_unilogindescription'] = 'A plugin to login users using the Danish UNI Login service.';
$string['fieldlocks'] = 'Select what should happen to each user field.';
$string['login_behaviour'] = 'Login behaviour';
$string['login_behaviour_description'] = 'How should the page behave when the user clicks on "login"? Link means that a link with the
 text "UNI•Login" will be inserted into the page before the regular moodle login form. The link-text can be changed with the
 setting below. Redirect means that the user will be sent directly to the UNI•Login page. This also means that regular
 moodle logins will no longer work, since the user will always be redirected to UNI•Login. However, for administrative access and the like,
 the regular moodle login form can still be accessed on: {$a}/login/index.php?unilogin=false.';
$string['login_behaviour_link'] = 'Link';
$string['login_behaviour_link_selector'] = 'Link insertion selector';
$string['login_behaviour_link_selector_default'] = '#login';
$string['login_behaviour_link_selector_description'] = 'The selector to insert the login link into. The login link will be placed in as the last child of the selected element. With the bootstrap theme, this means that #login will insert it after the "forgot your password" link';
$string['login_behaviour_link_text'] = 'Link text';
$string['login_behaviour_link_text_default'] = 'UNI•Login';
$string['login_behaviour_link_text_description'] = 'The text used to display a link to the UNI•Login page. The string is sent through
 [`format_string`](https://docs.moodle.org/dev/Output_functions#format_string.28.29) before being output, so it supports
 [Multi-language strings](https://docs.moodle.org/28/en/Multi-language_content_filter)';
$string['login_behaviour_redirect'] = 'Redirect';
$string['login_type'] = 'Login type';
$string['login_type_description'] = 'How the login procedure should work for users. Single Sign On (SSO) means, that if the user is
 already logged in to another service that uses UNI C the user will not be required to enter their password, while Single Login (SLI)
 means that users will always be required to enter their password, even though they are signed into other UNI C services that use SSO.';
$string['login_type_sli'] = 'Single Login';
$string['login_type_sso'] = 'Single Sign On';
$string['pluginname'] = 'UNI Login';
$string['ticketvalidationerror'] = 'The ticket returned by UNI•Login could not be validated. It has either expired, or already been used.';
$string['validatetime'] = 'Validation time limit';
$string['validatetime_description'] = 'The maximum age in seconds for a ticket to be considered valid.';
$string['validation_behaviour'] = 'Validation behaviour';
$string['validation_behaviour_db'] = 'Database';
$string['validation_behaviour_description'] = 'How should tickets returned from UNI C be validated? Database saves tickets in a table
 in the DB to ensure that each ticket is only used once, while time ensures that the ticket has been issued within the last x seconds
 (see option below)';
$string['validation_behaviour_time'] = 'Time';
$string['webserviceerror'] = 'There was en error contacting the UNI•Login webservice';
$string['ws_id'] = 'Webservice ID';
$string['ws_id_description'] = 'Each application has a unique used to identify to the UNI C webservice';
$string['ws_secret'] = 'Webservice secret';
$string['ws_secret_description'] = 'The secret that is used, together with the webservice ID to identify to the UNI C webservice';
