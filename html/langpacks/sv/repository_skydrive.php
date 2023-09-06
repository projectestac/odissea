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
 * Strings for component 'repository_skydrive', language 'sv', version '4.1'.
 *
 * @package     repository_skydrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_foldername'] = 'Katalognamns-cache';
$string['clientid'] = 'Klient-ID';
$string['configplugin'] = 'Konfigurera Microsoft OneDrive (äldre)';
$string['deprecatedwarning'] = 'Varning: Det API som används av denna lagringsplatspluginmodul har blivit inaktuellt och det kommer att sluta fungera så småningom. Migrera till den nyare "Microsoft OneDrive"-lagringen.';
$string['oauthinfo'] = '<p>För att använda det här plugin-programmet måste du registrera din webbplats <a href="https://account.live.com/developers/applications">hos Microsoft</a>.<p>Som en del i registreringsprocessen måste du ange följande URL som \'Redirect domain\':</p><p>
{$a->callbackurl}</p>
<p>Efter att du är registrerad kommer du att få ett klient-ID och en hemlighet som kan anges här.</p>';
$string['pluginname'] = 'Microsoft OneDrive (äldre version)';
$string['privacy:metadata'] = 'Pluginmodulen Microsoft OneDrive (äldre) lagrar inga personuppgifter, men överför användardata från Moodle till fjärrsystemet.';
$string['secret'] = 'Hemlighet';
$string['skydrive:view'] = 'Visa OneDrive (äldre)';
