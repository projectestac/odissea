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
 * Strings for component 'repository_personalyoutube', language 'it', version '4.1'.
 *
 * @package     repository_personalyoutube
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Client ID';
$string['configplugin'] = 'Configurazione del plugin Personal YouTube';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Collegamento alla configurazione dei servizi OAuth 2">Configurazione servizi OAuth 2</a>';
$string['oauthinfo'] = '<p>Per usare questo plugin, devi essere registrato su Google. Trovi le istruzioni per la registrazione nella documentazione <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>
Durante il processo di registrazione dovrai inserire il seguente URL quale \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p><p>Al termine della registrazione riceverai un Client ID ed un secret che possono essere utilizzati per configurare tutti i plugin per i servizi Google.</p><p>Da notare che dovrai anche abilitare il servizio \'YouTube API\'.</p>';
$string['personalyoutube:view'] = 'Visualizzare repository Personal YouTube';
$string['pluginname'] = 'Personal YouTube';
$string['pluginname_help'] = 'Upload e pubblicazione video dal canale personale di YouTube';
$string['search'] = 'Cerca';
$string['secret'] = 'Secret';
$string['uploads'] = 'Upload';
