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
 * Strings for component 'qformat_xml', language 'ro', version '4.5'.
 *
 * @package     qformat_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = 'Fișier XML nevalid - șir de așteptat (folosiți CDATA?)';
$string['pluginname'] = 'Format Moodle XML';
$string['pluginname_help'] = 'Acesta este un format specific Moodle pentru importul şi exportul de întrebări  utilizate în activitățile de tip test.';
$string['pluginname_link'] = 'qformat/xml';
$string['privacy:metadata'] = 'Pluginul pentru formatul întrebării XML nu stochează date personale.';
$string['truefalseimporterror'] = '<b> Avertisment </b>: Întrebarea adevărată / falsă „{$a->questiontext}” nu a putut fi importată corect. Nu era clar dacă răspunsul corect este adevărat sau fals. Întrebarea a fost importată presupunând că răspunsul este „{$a->answer}”. Dacă acest lucru nu este corect, va trebui să editați întrebarea.';
$string['unsupportedexport'] = 'Tipul de întrebare {$a} nu este acceptat de exportul XML';
$string['xmlimportnoname'] = 'Denumirea întrebării lipsește în fișierul XML';
$string['xmlimportnoquestion'] = 'Textul întrebării lipsește în fișierul XML';
$string['xmltypeunsupported'] = 'Tipul de întrebare {$a} nu este acceptat în importul XML';
