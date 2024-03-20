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
 * Strings for component 'portfolio_googledocs', language 'ro', version '4.1'.
 *
 * @package     portfolio_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Identificator client';
$string['noauthtoken'] = 'Un indicativ de autentificare nu a fost primit de la Google. Vă rugăm să vă asigurați că permiteți Moodle să vă acceseze contul Google';
$string['nooauthcredentials'] = 'Sunt necesare acreditări OAuth.';
$string['nooauthcredentials_help'] = 'Pentru a utiliza pluginul portofoliului Google Drive, trebuie să configurați acreditările OAuth în setările portofoliului.';
$string['nosessiontoken'] = 'Nu există un jeton de sesiune care să împiedice exportul pe google.';
$string['oauthinfo'] = '<p> Pentru a utiliza acest plugin, trebuie să vă înregistrați site-ul la Google, așa cum este descris în documentația <a href="{$a->docsurl} "> configurarea Google OAuth 2.0 </a>.</p> <p > Ca parte a procesului de înregistrare, va trebui să introduceți următoarea adresă URL ca „URI-uri de redirecționare autorizate”: </p> <p> {$a->callbackurl} </p> <p> Odată înregistrat, veți fi furnizat cu un ID de client și un secret care poate fi utilizat pentru a configura toate pluginurile Google Drive și Picasa. </p>';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata'] = 'Acest plugin trimite date extern către un cont Google conectat. Nu stochează date local.';
$string['privacy:metadata:data'] = 'Datele personale trecute din subsistemul portofoliu.';
$string['secret'] = 'Secret';
$string['sendfailed'] = 'Fișierul {$a} nu a putut fi transferat către Google';
