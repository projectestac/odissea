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
 * Strings for component 'fileconverter_unoconv', language 'lt', version '4.5'.
 *
 * @package     fileconverter_unoconv
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Kelias į unoconv dokumentų keitiklį';
$string['pathtounoconv_help'] = 'Kelias į unoconv dokumentų konverterį. Tai vykdomasis failas, kurį galima konvertuoti  dokumentus iš vieno formato į kitą, kurį palaiko „LibreOffice“. Tai neprivaloma, bet jei nurodyta, Moodle naudos jį automatiškai konvertuodama iš vieno dokumento formato į kitą. Tai naudojama norint palaikyti platesnį įvesties failų spektrą, skirtą priskyrimo komentarų PDF funkcijai.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = '„Unoconv“ dokumentų keitiklio papildinys nesaugo jokių asmeninių duomenų.';
$string['test_unoconv'] = 'Testuoti unoconv kelią';
$string['test_unoconvdoesnotexist'] = 'Unoconv kelias nenurodo unoconv programos. Peržiūrėkite savo kelio nustatymus.';
$string['test_unoconvdownload'] = 'Atsisiųti konvertuotą pdf testinį failą.';
$string['test_unoconvempty'] = 'Unoconv kelias nenustatytas. Peržiūrėkite savo kelio nustatymus.';
$string['test_unoconvisdir'] = 'Unoconv kelias nurodo aplanką, įtraukite unoconv programą į nurodytą kelią';
$string['test_unoconvnotestfile'] = 'Trūksta testinio dokumento, kuris bus konvertuojamas į PDF.';
$string['test_unoconvnotexecutable'] = 'Unoconv kelias nurodo failą, kuris nėra vykdomas';
$string['test_unoconvok'] = 'Atrodo, kad unoconv kelias tinkamai sukonfigūruotas.';
$string['test_unoconvversionnotsupported'] = 'Jūsų įdiegta unoconv versija nepalaikoma.';
