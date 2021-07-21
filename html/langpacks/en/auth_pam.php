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
 * Strings for component 'auth_pam', language 'en', version '3.11'.
 *
 * @package     auth_pam
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_pamdescription'] = 'This method uses PAM to access the native usernames on this server. You have to install <a href="http://www.math.ohio-state.edu/~ccunning/pam_auth/">PHP4 PAM Authentication</a> in order to use this module.';
$string['auth_passwordisexpired'] = 'Your password has expired. Do you want to change your password now?';
$string['auth_passwordwillexpire'] = 'Your password will expire in {$a} days. Do you want to change your password now?';
$string['pluginname'] = 'PAM (Pluggable Authentication Modules)';
$string['privacy:metadata'] = 'The PAM (Pluggable Authentication Modules) authentication plugin does not store any personal data.';
