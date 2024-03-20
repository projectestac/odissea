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
 * Strings for component 'portfolio_flickr', language 'ro', version '4.1'.
 *
 * @package     portfolio_flickr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Cheie API';
$string['contenttype'] = 'Tipuri de conținut';
$string['err_noapikey'] = 'Fără cheie API';
$string['err_noapikey_help'] = 'Nu există nicio cheie API configurată pentru acest plugin. Puteţi obţine o cheie din pagina de servicii Flickr.';
$string['hidefrompublicsearches'] = 'Ascundeți imaginile din căutările publice?';
$string['isfamily'] = 'Vizibil pentru familie';
$string['isfriend'] = 'Vizibil pentru prieteni';
$string['ispublic'] = 'Public (vizibilitate generală)';
$string['moderate'] = 'Moderat';
$string['noauthtoken'] = 'Nu s-a putut prelua un indicativ de autentificare pentru utilizare în această sesiune';
$string['other'] = 'Artă, ilustrații, CGI sau alte imagini non-fotografice';
$string['photo'] = 'Fotografii';
$string['pluginname'] = 'Flickr.com';
$string['privacy:metadata'] = 'Acest plugin trimite date extern către un cont Flickr conectat. Nu stochează date local.';
$string['privacy:metadata:data'] = 'Datele personale trecute din subsistemul portofoliu.';
$string['restricted'] = 'Restricționat!';
$string['safe'] = 'Sigur';
$string['safetylevel'] = 'Nivel de securitate';
$string['screenshot'] = 'Screenshot-uri';
$string['set'] = 'Set';
$string['setupinfo'] = 'Instrucțiuni pentru setup';
$string['setupinfodetails'] = 'Pentru a obține cheia API și șirul secret, conectați-vă la Flickr și <a href="{$a->applyurl} "> solicitați o nouă cheie </a>. După ce vi se generează o nouă cheie și un secret, urmați linkul „Editați fluxul de autentificare pentru această aplicație” din pagină. Selectați „Tip aplicație” la „Aplicație web”. În câmpul „Adresă URL de apel invers”, introduceți valoarea: <br /> <code> {$a->callbackurl} </code> <br /> Opțional, puteți furniza și descrierea și sigla site-ului Moodle. Aceste valori pot fi setate ulterior la <a href="{$a->keysurl} "> pagina </a> cu listarea aplicațiilor dvs. Flickr.';
$string['sharedsecret'] = 'Șir de caractere secret';
$string['title'] = 'Titlu';
$string['uploadfailed'] = 'Nu s-au putut încărca imaginea(imaginile) în flickr.com: {$a}';
