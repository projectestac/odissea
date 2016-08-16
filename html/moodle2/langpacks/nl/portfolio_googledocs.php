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
 * Strings for component 'portfolio_googledocs', language 'nl', branch 'MOODLE_31_STABLE'
 *
 * @package   portfolio_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Client ID';
$string['noauthtoken'] = 'Er is geen authenticatietoken van Google opgegeven. Zorg er voor dat je Moodle toelaat tot je Google account';
$string['nooauthcredentials'] = 'OAuth credentials vereist';
$string['nooauthcredentials_help'] = 'Om de Google Drive portfolio plugin te gebruiken, moet je de OAuth credentials configureren in de portfolio instellingen.';
$string['nosessiontoken'] = 'Er bestaat geen sessie-token dat export naar Google verhindert.';
$string['oauthinfo'] = '<p>Om deze plugin te kunnen gebruiken, moet je je site registreren bij Google, zoals beschreven in de documentatie <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>Als deel van het registratieproces zul je volgende URL moeten ingeven als \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p>Als je geregistreerd bent, zul je een client ID en geheim krijgen die je dan kunt gebruiken om alle Google Drive en Picasa plugins te configureren.</p>';
$string['pluginname'] = 'Google Drive';
$string['secret'] = 'Geheim';
$string['sendfailed'] = 'Het is niet gelukt om bestand {$a} naar Google over te brengen';
