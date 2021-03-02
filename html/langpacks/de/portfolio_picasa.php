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
 * Strings for component 'portfolio_picasa', language 'de', version '3.8'.
 *
 * @package     portfolio_picasa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Client ID';
$string['noauthtoken'] = 'Von Google wurde kein Authentifikationstoken empfangen. Stellen Sie sicher, dass Moodle auf Ihr Google-Konto zugreifen darf.';
$string['nooauthcredentials'] = 'OAuth Einstellungen sind erforderlich';
$string['nooauthcredentials_help'] = 'Zur Verwendung des Picasa Portfolio Plugins sind Einstellungen für OAuth in den Portfolio-Einstellungen erforderlich.';
$string['oauthinfo'] = '<p>Um dieses Plugin verwenden zu können, ist eine Registrierung über Google erforderlich. Entsprechende Informationen finden Sie auf <a href="{$a->docsurl}">Google OAuth 2.0 Setup</a>.</p><p>Während der Registrierung müssen Sie folgende URL als \'Authorized Redirect URIs\' eingeben: <br />{$a->callbackurl}</p>Sie erhalten eine Client-ID und ein Secret, mit denen Sie alle Plugins für Google Drive und Picasa konfigurieren können.</p>';
$string['pluginname'] = 'Picasa';
$string['privacy:metadata'] = 'Dieses Plugin sendet Daten an einen extern verbundenes Picasa-Account. Es speichert lokal keine Daten.';
$string['privacy:metadata:data'] = 'Personenbezogene Daten, die vom Portfolio-Subsystem übergeben wurden';
$string['secret'] = 'Secret';
$string['sendfailed'] = 'Die Datei {$a} konnte nicht zu Picasa übertragen werden';
