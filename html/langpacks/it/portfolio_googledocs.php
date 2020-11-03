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
 * Strings for component 'portfolio_googledocs', language 'it', branch 'MOODLE_38_STABLE'
 *
 * @package   portfolio_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Client ID';
$string['noauthtoken'] = 'Non è stato possibile ottenere un token di autenticazione da Google. Accertati di aver consentito a Moodle di accedere al tuo account Google';
$string['nooauthcredentials'] = 'Sono necessarie le credenziali OAuth';
$string['nooauthcredentials_help'] = 'Per usare il plugin portfolio Google Drive devi configurare le credenziali OAuth nelle impostazioni del plugin.';
$string['nosessiontoken'] = 'Non esiste un token di sessione e non è possibile esportare file su Google.';
$string['oauthinfo'] = '<p>Per usare questo plugin devi essere registrato su Google. Trovi le istruzioni per la registrazione nella documentazione <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>Durante il processo di registrazione dovrai inserire il seguente URL nel campo \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p>Al termine della registrazione riceverai un Client ID ed uno Shared secret che possono essere utilizzati per configurare sia i plugin Google Drive sia i plugin Picasa.</p>';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata'] = 'Il plugin invia dati esternamente a un account Google collegato. Non memorizza dati localmente.';
$string['privacy:metadata:data'] = 'Dati personali passati dal sottosistema portfolio.';
$string['secret'] = 'Secret';
$string['sendfailed'] = 'Non è stato possibile trasferire il file {$a} su Google';
