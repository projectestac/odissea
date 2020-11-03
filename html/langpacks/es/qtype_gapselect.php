<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_gapselect', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   qtype_gapselect
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'Respuesta';
$string['choices'] = 'Opciones';
$string['choicex'] = 'Opción {no}';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['errorblankchoice'] = 'Por favor, comproba su opción: la opción {$a} está vacía.';
$string['errormissingchoice'] = 'Compruebe el texto de la pregunta: {$a} no se ha encontrado en las opciones! Sólo los números con respuestas de elección especificadas se permiten utilizar como titulares de lugar (\'place holders\').';
$string['errornoslots'] = 'El texto de la pregunta debe contener marcadores de posición (\'place holders\') como por ejemplo [[1]] para mostrar dónde van las palabras que faltan.';
$string['errorquestiontextblank'] = 'Es necesario introducir un texto de pregunta.';
$string['group'] = 'Grupo';
$string['pleaseputananswerineachbox'] = 'Elige una respuesta en cada caja.';
$string['pluginname'] = 'Elige la palabra perdida';
$string['pluginnameadding'] = 'Añadir una pregunta de selección de palabras perdidas';
$string['pluginnameediting'] = 'Edición de una pregunta de selección de palabras perdidas';
$string['pluginname_help'] = 'Seleccione las palabras perdidas. Las preguntas requieren que el encuestado seleccione las respuestas correctas en los menús desplegables. [[1]], [[2]], [[3]], ... se utilizan como marcadores de posición (\'place holders\') en el texto de la pregunta, con las respuestas correctas especificadas como respuestas de elección 1, 2, 3, ... respectivamente. Se pueden agregar respuestas de elección extra para hacer la pregunta más difícil. Las respuestas de elección pueden agruparse para restringir las respuestas disponibles en cada menú desplegable.';
$string['pluginnamesummary'] = 'Las palabras que faltan en el texto de la pregunta se rellenan mediante los menús desplegables.';
$string['shuffle'] = 'Barajar';
$string['tagsnotallowed'] = '{$a->tag} no está permitido. (Solamente {$a->allowed} están permetidos.)';
$string['tagsnotallowedatall'] = '{$a->tag} no está permitido. (No se permite usar código HTML aquí.)';
