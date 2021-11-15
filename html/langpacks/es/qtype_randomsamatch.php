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
 * Strings for component 'qtype_randomsamatch', language 'es', version '3.11'.
 *
 * @package     qtype_randomsamatch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insufficientoptions'] = 'No hay suficientes opciones de respuesta para esta pregunta, por lo que no estará disponible en el cuestionario. Por favor informa a tu profesor.';
$string['nosaincategory'] = 'No existen preguntas de respuesta corta en la categoría elegida \'{$a->catname}\'. Elija una categoría diferente e incluya algunas preguntas en ella.';
$string['notenoughsaincategory'] = '{$a->nosaquestions} preguntas de respuesta corta en la categoría elegida \'{$a->catname}\'. Elija una categoría diferente, incluya algunas preguntas en ella o reduzca la cantidad de preguntas seleccionadas.';
$string['pluginname'] = 'Emparejamiento aleatorio';
$string['pluginname_help'] = 'Desde la perspectiva del alumno, es muy semejante a una pregunta de Emparejamiento. La diferencia es que la lista de nombre o enunciados (preguntas) para el Emparejamiento son seleccionados aleatoriamente de entre las preguntas de respuesta corta de la categoría elegida. Deben de haber un número suficiente de preguntas de respuesta corta sin usar en la categoría, de lo contrario se mostrará un mensaje de error.';
$string['pluginnameadding'] = 'Añadir una pregunta de tipo Emparejamiento aleatorio';
$string['pluginnameediting'] = 'Editar una pregunta de tipo Emparejamiento aleatorio';
$string['pluginnamesummary'] = 'Como una pregunta de Emparejamiento, pero creada aleatoriamente a partir de las preguntas de Respuesta corta de una categoría en concreto.';
$string['privacy:metadata'] = 'El complemento de tipo de pregunta de coincidencia de respuesta corta aleatoria no almacena ningún dato personal.';
$string['randomsamatch'] = 'Emparejamiento aleatorio';
$string['randomsamatchintro'] = 'Para cada una de las siguientes preguntas, selecciona la respuesta correcta en el menú.';
$string['randomsamatchnumber'] = 'Número de preguntas a elegir';
$string['subcats'] = 'Incluir subcategorías';
$string['subcats_help'] = 'Si está marcado, las preguntas serán escogidas también de entre las subcategorías.';
