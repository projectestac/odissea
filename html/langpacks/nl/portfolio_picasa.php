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
 * Strings for component 'portfolio_picasa', language 'nl', version '4.1'.
 *
 * @package     portfolio_picasa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Client ID';
$string['noauthtoken'] = 'Er is geen authenticatietoken van Google opgegeven. Zorg er voor dat je Moodle toelaat tot je Google account.';
$string['nooauthcredentials'] = 'OAuth credentials vereist';
$string['nooauthcredentials_help'] = 'Om de Picasa portfolio plugin te gebruiken, moet je de OAuth credentials configureren in de portfolio instellingen.';
$string['oauthinfo'] = '<p>Om deze plugin te kunnen gebruiken, moet je je site registreren bij Google, zoals beschreven in de documentatie <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>Als deel van het registratieproces zul je volgende URL moeten ingeven als \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p>Als je geregistreerd bent, zul je een client ID en geheim krijgen die je dan kunt gebruiken om alle Google Drive en Picasa plugins te configureren.</p>';
$string['pluginname'] = 'Picasa';
$string['privacy:metadata'] = 'Deze plugin stuurt gegevens extern door naar een gelinkte Picasa-account en bewaart geen gegevens lokaal.';
$string['privacy:metadata:data'] = 'Persoonlijke gegevens, binnengekomen via het portfolio subsysteem.';
$string['secret'] = 'Geheim';
$string['sendfailed'] = 'Het is niet gelukt om bestand {$a} naar Picasa over te brengen';
