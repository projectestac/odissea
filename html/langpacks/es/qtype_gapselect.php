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
 * Strings for component 'qtype_gapselect', language 'es', version '3.11'.
 *
 * @package     qtype_gapselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Espacios en blanco para {no} opciones más';
$string['answer'] = 'Respuesta';
$string['choices'] = 'Opciones';
$string['choicex'] = 'Opción [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'menú desplegable';
$string['combinedcontrolnamegapselectplural'] = 'menús desplegables';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['errorblankchoice'] = 'Por favor, comproba su opción: la opción {$a} está vacía.';
$string['errormissingchoice'] = 'Por favor revise el texto de la pregunta: ¡no se encontró {$a} en las opciones! Solo los números con respuestas de elección especificadas pueden usarse como marcadores de posición.';
$string['errornoslots'] = 'El texto de la pregunta debe contener marcadores de posición (\'place holders\') como por ejemplo [[1]] para mostrar dónde van las palabras que faltan.';
$string['errorquestiontextblank'] = 'Es necesario introducir un texto de pregunta.';
$string['group'] = 'Grupo';
$string['pleaseputananswerineachbox'] = 'Elige una respuesta en cada caja.';
$string['pluginname'] = 'Elige la palabra perdida';
$string['pluginname_help'] = 'Las preguntas para seleccionar palabras faltantes requieren que el encuestado seleccione las respuestas correctas de los menús desplegables. [[1]], [[2]], [[3]], ... se utilizan como marcadores de posición en el texto de la pregunta, con las respuestas correctas especificadas como respuestas de elección 1, 2, 3, ... respectivamente. Se pueden añadir respuestas de opción adicionales para hacer la pregunta más difícil. Las respuestas de elección se pueden agrupar para restringir las respuestas disponibles en cada menú desplegable.';
$string['pluginnameadding'] = 'Añadir una pregunta de selección de palabras perdidas';
$string['pluginnameediting'] = 'Edición de una pregunta de selección de palabras perdidas';
$string['pluginnamesummary'] = 'Las palabras que faltan en el texto de la pregunta se completan mediante menús desplegables.';
$string['privacy:metadata'] = 'El complemento de tipo de pregunta para seleccionar palabras que faltan permite a los autores de preguntas establecer opciones predeterminadas como preferencias del usuario.';
$string['privacy:preference:defaultmark'] = 'La marca predeterminada establecida para una pregunta determinada.';
$string['privacy:preference:penalty'] = 'La penalización por cada intento incorrecto cuando las preguntas se ejecutan utilizando el comportamiento \'Interactivo con múltiples intentos\' o \'Modo adaptativo\'.';
$string['privacy:preference:shuffleanswers'] = 'Si las respuestas deben barajarse automáticamente.';
$string['shuffle'] = 'Barajar';
$string['tagsnotallowed'] = '{$a->tag} no está permitido. (Solamente {$a->allowed} están permetidos.)';
$string['tagsnotallowedatall'] = '{$a->tag} no está permitido. (No se permite usar código HTML aquí.)';
