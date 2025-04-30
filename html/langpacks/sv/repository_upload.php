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
 * Strings for component 'repository_upload', language 'sv', version '4.4'.
 *
 * @package     repository_upload
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configplugin'] = 'Konfiguration för pluginmodulen ladda upp';
$string['pluginname'] = 'Ladda upp fil';
$string['pluginname_help'] = 'Ladda upp fil till Moodle';
$string['privacy:metadata'] = 'Pluginmodulen Ladda upp fil lagrar eller överför ingen personinformation.';
$string['upload:view'] = 'Använd uppladdning i filväljaren';
$string['upload_error_cant_write'] = 'Misslyckades att skriva fil på disk';
$string['upload_error_extension'] = 'Ett PHP tillägg stoppade filuppladdningen.';
$string['upload_error_form_size'] = 'Den uppladdade filen överskrider värdet för <code>MAX_FILE_SIZE</code> som angivits i HTML formuläret.';
$string['upload_error_ini_size'] = 'Den uppladdade filen överskrider värdet för <code>upload_max_filesize</code> i php.ini.';
$string['upload_error_invalid_file'] = 'Filen {$a} är antingen tom eller en mapp. För att ladda upp en katalog behöver du lägga dem i en ZIP-fil först.';
$string['upload_error_no_file'] = 'Inge fil laddades upp.';
$string['upload_error_no_tmp_dir'] = 'PHP saknar en temporär katalog.';
$string['upload_error_partial'] = 'Den uppladdade filen blev endast uppladdad till del.';
