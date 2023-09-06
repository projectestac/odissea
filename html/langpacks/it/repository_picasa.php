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
 * Strings for component 'repository_picasa', language 'it', version '4.1'.
 *
 * @package     repository_picasa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Client ID';
$string['configplugin'] = 'Configurazione repository Picasa';
$string['oauthinfo'] = '<p>Per usare questo plugin, devi essere registrato su Google. Trovi le istruzioni per la registrazione nella documentazione <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>Durante il processo di registrazione dovrai inserire il seguente URL quale \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p>Al termine della registrazione riceverai un Client ID ed un secret che possono essere utilizzati per configurare sia i plugin Google Drive sia i plugin Picasa.</p>';
$string['picasa:view'] = 'Visualizzare repository Picasa';
$string['pluginname'] = 'Web Album Picasa';
$string['privacy:metadata:repository_picasa'] = 'Il plugin Repository \'Web Album Picasa\' non memorizza dati personali, ma trasmette i dati degli utenti da Moodle al sistema remoto.';
$string['privacy:metadata:repository_picasa:searchtext'] = 'Query di ricerca testo per l\'utente del repository Picasa.';
$string['secret'] = 'Secret';
