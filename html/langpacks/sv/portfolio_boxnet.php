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
 * Strings for component 'portfolio_boxnet', language 'sv', version '4.5'.
 *
 * @package     portfolio_boxnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Klient-ID';
$string['clientsecret'] = 'Klienthemlighet';
$string['existingfolder'] = 'Befintlig mapp att lagra filer i.';
$string['folderclash'] = 'Den mapp som Du frågade efter finns redan.';
$string['foldercreatefailed'] = 'Det gick inte att skapa målkatalogen på Box';
$string['folderlistfailed'] = 'Det gick inte att hämta kataloglistan från Box';
$string['missinghttps'] = 'HTTPS krävs';
$string['missinghttps_help'] = 'Box fungerar bara tillsammans med en HTTPS-aktiverad webbplats.';
$string['missingoauthkeys'] = 'Klient-ID och hemlighet saknas';
$string['missingoauthkeys_help'] = 'Det finns inget klient-ID eller hemlighet konfigurerad för den här pluginmodulen. Du kan få en av dessa från Box utvecklingssida.';
$string['newfolder'] = 'Ny mapp att lagra filer i';
$string['noauthtoken'] = 'Det gick inte att hämta någon "token" för autentisering att använda i den här sessionen';
$string['notarget'] = 'Du måste ange en ny eller befintlig katalog att ladda upp till';
$string['noticket'] = 'Det gick inte att hämta en ticket från Box för att starta autentiseringssessionen';
$string['password'] = 'Ditt Box-lösenord (sparas ej)';
$string['pluginname'] = 'Box';
$string['privacy:metadata'] = 'Det här plugin-programmet skickar data externt till ett länkat Box-konto. Den lagrar inte data lokalt.';
$string['privacy:metadata:data'] = 'Personuppgifter som överförs från portföljens undersystem.';
$string['sendfailed'] = 'Det gick inte att skicka innehåll till Box: {$a}';
$string['setupinfo'] = 'Installationsinstruktioner';
$string['setupinfodetails'] = 'Om du vill hämta ett klient-ID och en hemlighet loggar du in i Box och navigerar till sidan <a href="{$a->servicesurl}">Box developers</a>. Följ länken \'Create new application\' och skapa ett nytt program för din Moodle-webbplats. Klient-ID:t och hemligheten visas i avsnittet \'OAuth2-parameters\' i redigeringsformuläret. Du kan också ange annan information om Moodle-webbplatsen.';
$string['sharedfolder'] = 'Delad';
$string['sharefile'] = 'Dela den här filen?';
$string['sharefolder'] = 'Dela den nya katalogen?';
$string['targetfolder'] = 'Målkatalog';
$string['tobecreated'] = 'Kommer att skapas';
$string['username'] = 'Ditt Box-användarnamn (sparas ej)';
$string['warninghttps'] = 'Box kräver att din webbplats använder HTTPS för att portföljen ska fungera.';
