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
 * Strings for component 'qbank_statistics', language 'es', version '4.5'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = '¿Necesita revisión?';
$string['discrimination_index_help'] = 'Se indica que es probable que una pregunta deba verificarse en función de las estadísticas de la pregunta. Por ejemplo, si los estudiantes obtienen una puntuación baja en la pregunta pero una puntuación alta en todo el cuestionario, o una puntuación alta en la pregunta pero una puntuación baja en todo el cuestionario, entonces puede haber un problema con la pregunta, como que sea  errónea la respuesta se establece como correcta. Sin embargo, las estadísticas no son infalibles; esto es solo una pista de que la pregunta debe ser revisada.';
$string['discriminative_efficiency'] = 'Eficiencia discriminativa';
$string['discriminative_efficiency_help'] = 'La eficiencia discriminatoria es una estimación estadística de qué tan bien la pregunta evalúa a los estudiantes, siendo mejor un valor más alto. Un valor particularmente bajo puede indicar un problema con la pregunta. Una pregunta muy difícil o fácil (con un índice de facilidad cercano al 0% o al 100%) también puede llevar a un valor bajo.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'Índice de facilidad';
$string['facility_index_help'] = 'El índice de facilidad proporciona la calificación promedio (en porcentaje) obtenida en la pregunta (todas las versiones) en todos los cuestionarios en los que se ha intentado la pregunta. Un valor más alto normalmente indica una pregunta más fácil.';
$string['likely'] = 'Probable';
$string['na'] = 'No disponible';
$string['pluginname'] = 'Estadísticas de pregunta';
$string['privacy:metadata'] = 'El complemento de estadísticas de pregunta del banco de preguntas no almacena ningún dato personal.';
$string['unlikely'] = 'Poco probable';
$string['verylikely'] = 'Bastante probable';
