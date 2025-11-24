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
 * Strings for component 'portfolio_boxnet', language 'ro', version '4.5'.
 *
 * @package     portfolio_boxnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID-ul clientului';
$string['clientsecret'] = 'Jetonul secretul al clientului';
$string['existingfolder'] = 'Dosar existent în care să introduceți fișierele';
$string['folderclash'] = 'Folderul există deja!';
$string['foldercreatefailed'] = 'Nu s-a putut crea folderul țintă pe Box';
$string['folderlistfailed'] = 'Nu s-a putut prelua o listă de dosare din Box';
$string['missinghttps'] = 'este necesară conexiunea de tipul HTTPS';
$string['missinghttps_help'] = 'Box va funcționa numai cu un site web cu HTTPS.';
$string['missingoauthkeys'] = 'ID-ul clientului și secretul lipsesc';
$string['missingoauthkeys_help'] = 'Nu există niciun ID de client sau jeton secret configurat pentru acest plugin. Puteți obține una dintre acestea din pagina de dezvoltare Box.';
$string['newfolder'] = 'Dosar nou în care să introduceți fișierele';
$string['noauthtoken'] = 'Nu s-a putut prelua un indicativ de autentificare pentru utilizare în această sesiune';
$string['notarget'] = 'Trebuie să specificați fie un folder existent, fie un folder nou în care să încărcați';
$string['noticket'] = 'Nu s-a putut prelua un bilet din Box pentru a începe sesiunea de autentificare';
$string['password'] = 'Parola Box (nu va fi memorată)';
$string['pluginname'] = 'Box';
$string['privacy:metadata'] = 'Acest plugin trimite date extern către un cont Box conectat. Nu stochează date local.';
$string['privacy:metadata:data'] = 'Datele personale trecute din subsistemul portofoliu.';
$string['sendfailed'] = 'Nu s-a putut trimite conținut la Box: {$a}';
$string['setupinfo'] = 'Instrucțiuni pentru setup';
$string['setupinfodetails'] = 'Pentru a obține un ID de client și un secret, conectați-vă la Box și accesați <a href="{$a->servicesurl} "> pagina dezvoltatori Box </a>. Urmați „Creați o aplicație nouă” și creați o aplicație nouă pentru site-ul dvs. Moodle. ID-ul clientului și secretul sunt afișate în secțiunea „Parametrii OAuth2” din formularul de editare a aplicației. Opțional, puteți furniza și alte informații despre site-ul dvs. Moodle.';
$string['sharedfolder'] = 'Partajat';
$string['sharefile'] = 'Partajați acest fișier?';
$string['sharefolder'] = 'Partajați acest folder nou?';
$string['targetfolder'] = 'Dosar țintă';
$string['tobecreated'] = 'Pentru a fi creat';
$string['username'] = 'Numele de utilizator Box (nu va fi memorat)';
$string['warninghttps'] = 'Box necesită ca site-ul dvs. web să utilizeze HTTPS pentru ca portofoliul să funcționeze.';
