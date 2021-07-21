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
 * Strings for component 'portfolio_picasa', language 'sv', version '3.11'.
 *
 * @package     portfolio_picasa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Klient-ID';
$string['noauthtoken'] = 'En autentiseringstoken har inte tagits emot från Google. Se till att du tillåter Moodle att komma åt ditt Google-konto.';
$string['nooauthcredentials'] = 'OAuth-autentiseringsuppgifter krävs.';
$string['nooauthcredentials_help'] = 'Om du vill använda Picasa-portföljpluginmodulen måste du konfigurera OAuth-autentiseringsuppgifter i portföljinställningarna.';
$string['oauthinfo'] = '<p>Om du vill använda den här pluginmodulen måste du registrera din webbplats hos Google, enligt beskrivningen i dokumentationen <a href="{$a->docsurl}">konfigurera Google OAuth 2.0</a>.</p><p>Som en del av registreringsprocessen måste du ange följande URL som \'Auktoriserade omdirigerings-URI:er\':</p><p>{$a->callbackurl}</p><p>När du registrerats kommer du att få ett klient-ID och hemlighet som kan användas för att konfigurera alla Google Drive och Picasa pluginmoduler.</p>';
$string['pluginname'] = 'Picasa';
$string['privacy:metadata'] = 'Denna pluginmodul skickar data externt till ett länkat Picasa-konto. Den lagrar inte data lokalt.';
$string['privacy:metadata:data'] = 'Personuppgifter som överförs från portföljens delsystem.';
$string['secret'] = 'Hemlighet';
$string['sendfailed'] = 'Det gick inte att överföra filen {$a} till Picasa';
