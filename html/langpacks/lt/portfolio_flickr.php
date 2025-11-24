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
 * Strings for component 'portfolio_flickr', language 'lt', version '4.5'.
 *
 * @package     portfolio_flickr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'API raktas';
$string['contenttype'] = 'Turinio tipai';
$string['err_noapikey'] = 'API rakto nėra';
$string['err_noapikey_help'] = 'Nėra šiam papildiniui sukonfigūruoto API rakto. Jį galite gauti apsilankę http://flickr.com/services/api/keys/apply';
$string['hidefrompublicsearches'] = 'Ar šio vaizdo nerodyti viešosiose paieškose?';
$string['isfamily'] = 'Matomas šeimos nariams';
$string['isfriend'] = 'Matomas draugams';
$string['ispublic'] = 'Viešasis (gali matyti visi)';
$string['moderate'] = 'Vidutinis';
$string['noauthtoken'] = 'Nepavyko nuskaityti naudoti šiame seanse skirto autentifikavimo ženklo';
$string['other'] = 'Paveikslėliai, iliustracijos, CGI ir kiti ne fotografiniai vaizdai';
$string['photo'] = 'Nuotraukos';
$string['pluginname'] = 'Flickr.com';
$string['privacy:metadata'] = 'Šis papildinys siunčia duomenis iš išorės į susietą „Flickr“ paskyrą. Jis nesaugo duomenų vietoje.';
$string['privacy:metadata:data'] = 'Asmens duomenys, perduoti iš portfelio posistemio.';
$string['restricted'] = 'Apribota';
$string['safe'] = 'Saugu';
$string['safetylevel'] = 'Saugos lygis';
$string['screenshot'] = 'Momentinės ekrano kopijos';
$string['set'] = 'Rinkinys';
$string['setupinfo'] = 'Sąrankos instrukcijos';
$string['setupinfodetails'] = 'Norėdami gauti API raktą ir slaptąją eilutę, prisijunkite prie „Flickr“ ir <a href=rdblquote{$a->applyurl}">paprašykite naujo rakto</a>. Kai bus sugeneruoti jūsų naujasis raktas ir slaptoji eilutė, spustelėkite „Edit auth flow for this app“ (Redaguoti šios programos aut. srautą). Kaip „App Type“ (Programos tipas) pasirinkite „Web Application“ (Žiniatinklio programa). Lauke „Callback URL“ (Atgalinio iškvietimo URL) įveskite reikšmę: <br /><code>{$a->callbackurl}</code><br />Jei norite, galite pateikti „Moodle“ svetainės aprašą ir logotipą. Vėliau šias reikšmes galite redaguoti <a href=rdblquote{$a->keysurl}">puslapyje</a>, kur pateikiamas jūsų „Flickr“ programų sąrašas.';
$string['sharedsecret'] = 'Slaptoji eilutė';
$string['title'] = 'Pavadinimas';
$string['uploadfailed'] = 'Nepavyko įkelti vaizdų į flickr.com: {$a}';
