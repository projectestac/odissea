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
 * Strings for component 'auth_pam', language 'de', version '3.11'.
 *
 * @package     auth_pam
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_pamdescription'] = 'Diese Methode verwendet PAM (Pluggable Authentication Modules), um auf die richtigen Nutzerkonten auf dem Server zuzugreifen. Sie müssen <a href="http://www.math.ohio-state.edu/~ccunning/pam_auth/" target="_blank">PHP4 PAM Authentication</a> installieren, um das Modul nutzen zu können.';
$string['auth_passwordisexpired'] = 'Ihr Kennwort ist abgelaufen. Möchten Sie Ihr Kennwort jetzt ändern?';
$string['auth_passwordwillexpire'] = 'Ihr Kennwort läuft in {$a} Tagen ab. Möchten Sie Ihr Kennwort jetzt ändern?';
$string['pluginname'] = 'PAM Authentifizierung';
$string['privacy:metadata'] = 'Die Authentifizierung \'PAM (Pluggable Authentication Modules)\' speichert keine personenbezogenen Daten.';
