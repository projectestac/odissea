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
 * Strings for component 'availability_grade', language 'es', version '4.1'.
 *
 * @package     availability_grade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_items'] = 'Unidad guardada en caché para evaluar la disponibilidad condicional';
$string['cachedef_scores'] = 'Calificaciones de usuario guardadas en caché para evaluar la disponibilidad condicional';
$string['description'] = 'Los alumnos deben lograr una calificación específica.';
$string['error_backwardrange'] = 'Cuando se indica un rango de calificación, el mínimo debe ser inferior que el máximo.';
$string['error_invalidnumber'] = 'Los rangos de calificación deben indicarse con porcentajes válidos.';
$string['error_selectgradeid'] = 'Debes elegir un elemento calificable para la restricción de calificación.';
$string['label_max'] = 'Porcentaje máximo de calificación (excluido)';
$string['label_min'] = 'Porcentaje mínimo de calificación (incluido)';
$string['missing'] = '(actividad que falta)';
$string['option_max'] = 'debe ser <';
$string['option_min'] = 'debe ser ≥';
$string['pluginname'] = 'Restricción por evaluación';
$string['privacy:metadata'] = 'El complemento de restricción por calificación no almacena ningún dato personal.';
$string['requires_any'] = 'Tiene una calificación en <strong>{$a}</strong>';
$string['requires_max'] = 'Ha obtenido una puntuación menor que cierta puntuación en <strong>{$a}</strong>';
$string['requires_min'] = 'Ha obtenido una puntuación mayor que cierta puntuación en <strong>{$a}</strong>';
$string['requires_notany'] = 'No tiene calificación en <strong>{$a}</strong>';
$string['requires_notgeneral'] = 'No has alcanzado la puntuación necesaria en <strong>{$a}</strong>';
$string['requires_range'] = 'Ha alcanzado una puntuación dentro de cierto rango en <strong>{$a}</strong>';
$string['title'] = 'Calificación';
