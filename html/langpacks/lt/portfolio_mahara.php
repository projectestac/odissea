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
 * Strings for component 'portfolio_mahara', language 'lt', version '4.5'.
 *
 * @package     portfolio_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Įjungti „Leap2a“ portfelio palaikymą (būtina „Mahara 1.3“)';
$string['err_invalidhost'] = 'Klaidingas „MNet“ pagrindinis kompiuteris';
$string['err_invalidhost_help'] = 'Šis papildinys neteisingai sukonfigūruotas rodyti klaidingą (arba panaikintą) „MNet“ pagrindinį kompiuterį. Šis papildinys remiasi „Moodle“ darbo tinkle lygiaverčiais nariais, kai SSO IDP publikuotas, SSO_SP užprenumeruotas, o portfelis užprenumeruotas <b>ir</b> publikuotas.';
$string['err_networkingoff'] = '„Moodle“ darbas tinkle išjungtas';
$string['err_networkingoff_help'] = 'MNet autentifikavimas šiuo metu išjungtas. Prieš bandydami konfigūruoti šį papildinį, įjunkite jį. Visi šio papildinio egzemplioriai buvo paslėpti, kol neįjungtas MNet. Juos vėl reikės rankiniu būdu nustatyti, kad jie būtų matomi.';
$string['err_nomnetauth'] = '„MNet“ autentifikavimo papildinys išjungtas';
$string['err_nomnetauth_help'] = '„MNet“ autentifikavimo papildinys yra išjungtas, bet reikalingas šiai paslaugai.';
$string['err_nomnethosts'] = 'Paremtas „Moodle“ darbu tinkle';
$string['err_nomnethosts_help'] = 'Šis papildinys remiasi „Moodle“ darbo tinkle lygiaverčiais nariais, kai SSO IDP publikuotas, SSO SP užprenumeruotas, o portfelio paslaugos, kaip ir „Moodle“ autentifikavimo papildinys, publikuotos ir užprenumeruotas. Kol tenkinamos šios sąlygos, visi šio papildinio egzemplioriai yra paslėpti. Vėliau juos reikės rankiniu būdu nustatyti kaip matomus.';
$string['failedtojump'] = 'Nepavyko užmegzti ryšio su nuotoliniu serveriu';
$string['failedtoping'] = 'Nepavyko užmegzti ryšio su nuotoliniu serveriu: {$a}';
$string['mnet_nofile'] = 'Perdavimo objekte nepavyko rasti failo – nebūdinga klaida';
$string['mnet_nofilecontents'] = 'Failas rastas perdavimo objekte, bet negalima gauti jo turinio – nebūdinga klaida: {$a}';
$string['mnet_noid'] = 'Nepavyko rasti atitinkančio šio atpažinimo ženklo perdavimo įrašo';
$string['mnet_notoken'] = 'Nepavyko rasti atpažinimo ženklo, atitinkančio šį perdavimą';
$string['mnet_wronghost'] = 'Nuotolinis pagrindinis kompiuteris neatitinka šio atpažinimo ženklo perdavimo įrašo';
$string['mnethost'] = '„MNet“ pagrindinis kompiuteris';
$string['pf_description'] = 'Leisti naudotojams perduoti „Moodle“ turinį į šį pagrindinį kompiuterį<br />Prenumeruokite <b>ir</b> publikuokite šią paslaugą, kad leistumėte autentifikuotiems savo svetainės naudotojams perduoti turinį į {$a}<br /><ul><li><em>Priklausomybė</em>: taip pat turite <strong>publikuoti</strong> SSO (teikėjo identifikavimo) paslaugą {$a}.</li><li><em>Priklausomybė</em>: taip pat turite <strong>prenumeruoti</strong> SSO (paslaugų teikėjo) paslaugą {$a}</li><li><em>Priklausomybė</em>: taip pat turite įjungti „MNet“ autentifikavimo papildinį.</li></ul><br />';
$string['pf_name'] = 'Portfelio paslaugos';
$string['pluginname'] = '„Mahara“ e. portfelis';
$string['privacy:metadata'] = 'Šis papildinys siunčia duomenis iš išorės į susietą „Mahara“ programą. Jis nesaugo duomenų vietoje.';
$string['privacy:metadata:data'] = 'Asmens duomenys, perduoti iš portfelio posistemio.';
$string['senddisallowed'] = 'Šiuo metu negalima perduoti failų į „Mahara“';
$string['url'] = 'URL';
