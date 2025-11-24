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
 * Strings for component 'qformat_xml', language 'lt', version '4.5'.
 *
 * @package     qformat_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = 'Neleistinas XML failas – numatyta eilutė (naudoti CDATA?)';
$string['pluginname'] = 'Moodle XML formatas';
$string['pluginname_help'] = 'Moodle formatas klausimų importavimui ir eksportavimui. Dalindamiesi klausimais tarp Moodle sistemų naudokite šį formatą.';
$string['pluginname_link'] = 'qformat/xml';
$string['privacy:metadata'] = 'XML klausimo formato papildinys nesaugo jokių asmeninių duomenų.';
$string['truefalseimporterror'] = '<b>Warning</b>: Tiesa/Netiesa klausimas \'{$a->questiontext}\' negali būti tinkamai importuotas. Nėra aišku ar teisingas atsakymas yra Tiesa ar Netiesa. Klausimas buvo importuotas manant kad atsakymas yra  \'{$a->answer}\'. Jeigu tai klaidinga, jums reikės redaguoti klausimą.';
$string['unsupportedexport'] = 'XML eksportas nepalaiko klausimo tipo {$a}';
$string['xmlimportnoname'] = 'Trūksta klausimo pavadinimo XML faile';
$string['xmlimportnoquestion'] = 'Nerastas klausimo tekstas XML faile';
$string['xmltypeunsupported'] = 'Klausimo tipas {$a} nepalaikomas XML importo';
