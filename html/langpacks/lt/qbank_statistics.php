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
 * Strings for component 'qbank_statistics', language 'lt', version '4.5'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'Reikia patikrinti?';
$string['discrimination_index_help'] = 'Klausimas nurodomas kaip toks, kurį greičiausiai reikia patikrinti, remiantis klausimų statistiniais duomenimis. Pavyzdžiui, jei dalyviai gauna mažai taškų už klausimą, bet daug taškų už visą testą, arba daug taškų už klausimą, bet mažai taškų už visą testą, gali būti, kad su klausimu yra problemų, pavyzdžiui, neteisingas atsakymas nustatytas kaip teisingas. Tačiau statistika taip pat gali būti netiksli.';
$string['discriminative_efficiency'] = 'Diskriminacinis efektyvumas';
$string['discriminative_efficiency_help'] = 'Diskriminacinis efektyvumas - tai statistinis įvertinimas, kaip gerai klausimas įvertina kurso dalyvius, o didesnė vertė reiškia, kad jis yra geresnis. Ypač maža vertė gali reikšti, kad klausimas yra problemiškas. Labai sunkus arba lengvas klausimas (kai priemonės indeksas artimas 0 % arba 100 %) taip pat gali lemti mažą vertę.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'Lengvumo indeksas';
$string['facility_index_help'] = 'Lengvumo indeksas parodo vidutinį balų vidurkį (procentais), gautą už klausimą (visas versijas) visuose testuose, kuriuose buvo bandyta atsakyti į šį klausimą. Didesnė reikšmė paprastai reiškia, kad klausimas yra lengvesnis.';
$string['likely'] = 'Tikėtina';
$string['na'] = 'N/A';
$string['pluginname'] = 'Klausimo statistika';
$string['privacy:metadata'] = 'Klausimų statistikos klausimų banko papildinys nesaugo jokių asmens duomenų.';
$string['unlikely'] = 'Mažai tikėtina';
$string['verylikely'] = 'Labai tikėtina';
