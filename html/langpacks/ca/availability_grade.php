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
 * Strings for component 'availability_grade', language 'ca', version '3.11'.
 *
 * @package     availability_grade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_items'] = 'Elements de qualificació en memòria cau per a avaluar la disponibilitat condicional.';
$string['cachedef_scores'] = 'Qualificacions de l\'usuari en memòria cau per a avaluar la disponibilitat condicional.';
$string['description'] = 'Requereix que els estudiants assoleixin una qualificació especificada.';
$string['error_backwardrange'] = 'Quan s\'especifica un interval de qualificacions, el mínim ha de ser més baix que el màxim.';
$string['error_invalidnumber'] = 'L\'interval de qualificacions s\'ha d\'especificar amb percentatges vàlids.';
$string['error_selectgradeid'] = 'Heu de seleccionar un element de qualificació per a la condició de qualificació.';
$string['label_max'] = 'Percentatge de qualificació màxim (exclusiu)';
$string['label_min'] = 'Percentatge de qualificació mínim (inclusiu)';
$string['missing'] = '(activitat perduda)';
$string['option_max'] = 'ha de ser <';
$string['option_min'] = 'ha de ser ≥';
$string['pluginname'] = 'Restricció per qualificacions';
$string['requires_any'] = 'Tingueu una qualificació en <strong>{$a}</strong>';
$string['requires_max'] = 'Tingueu una puntuació apropiada en <strong>{$a}</strong>';
$string['requires_min'] = 'Aconseguiu la puntuació requerida en <strong>{$a}</strong>';
$string['requires_notany'] = 'No teniu qualificació en <strong>{$a}</strong>';
$string['requires_notgeneral'] = 'No tingueu certes puntuacions en <strong>{$a}</strong>';
$string['requires_range'] = 'Hàgiu assolit una puntuació específica en <strong>{$a}</strong>';
$string['title'] = 'Qualificació';
