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
 * Strings for component 'repository_googledocs', language 'it', branch 'MOODLE_32_STABLE'
 *
 * @package   repository_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Client ID';
$string['configplugin'] = 'Configurazione plugin Google Drive';
$string['googledocs:view'] = 'Visualizzare repository Google Drive';
$string['oauthinfo'] = '<p>Per usare questo plugin, devi essere registrato su Google. Trovi le istruzioni per la registrazione nella documentazione <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>Durante il processo di registrazione dovrai inserire il seguente URL quale \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p>Al termine della registrazione riceverai un Client ID ed un secret che possono essere utilizzati per configurare sia i plugin Google Drive sia i plugin Picasa.</p>
</p><p>Da notare che dovrai anche abilitare il servizio \'Drive API\'.</p>';
$string['pluginname'] = 'Google Drive';
$string['secret'] = 'Secret';
$string['servicenotenabled'] = 'Accesso non configurato. Accertati che il servizio  \'Drive API\' sia abilitato.';
