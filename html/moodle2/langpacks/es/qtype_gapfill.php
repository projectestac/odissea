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
 * Strings for component 'qtype_gapfill', language 'es', branch 'MOODLE_26_STABLE'
 *
 * @package   qtype_gapfill
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerdisplay'] = 'Muestra las respuestas';
$string['casesensitive'] = 'Distingue mayúsculas y minúsculas';
$string['casesensitive_help'] = 'Cuando está seleccionado, si la respuesta correcta es “GATO”, entonces “gato” se marcará como respuesta incorrecta.';
$string['delimitchars'] = 'Delimita los caracteres';
$string['delimitchars_help'] = 'Cambia los caracteres que delimitan un campo del predeterminado [ ], se suele utilizar para preguntas relacionadas con lenguajes de programación';
$string['displaydragdrop'] = 'Arrastrar/ soltar';
$string['displaydropdown'] = 'desplegable';
$string['displaygapfill'] = 'rellenar espacio';
$string['gapfill'] = 'Relleno espacio tipo Cloze';
$string['noduplicates'] = 'Sin duplicados';
$string['noduplicates_help'] = 'Cuando está seleccionado, cada respuesta debe ser única. Es práctico cuando cada campo tiene un operador | , por ejemplo:  “¿Cuáles son los colores de la medallas olímpicas?” y cada campo tiene [oro|plata|bronce], si un estudiante escribe oro en cada campo solamente el primero obtendrá una nota (aunque los otros también obtendrán un visto). Es usado más bien para descartar las respuestas duplicadas al calificar';
$string['pleaseenterananswer'] = 'Por favor introduzca una respuesta.';
$string['pluginname'] = 'Pregunta de rellenar espacio en blanco';
$string['pluginnameadding'] = 'Agregar una pregunta de rellenar espacio en blanco.';
$string['pluginnameediting'] = 'Editar pregunta de rellenar espacio en blanco.';
$string['pluginname_help'] = 'Ponga las palabras que necesitan ser completadas entre corchetes; por ejemplo: El [gato] se sentó sobre la [alfombra]. En caso de que alfombra o cama fueran válidos, se usaría [alfombra|cama].  Los modos desplegables y arrastrar/soltar permiten  mostrar una lista de respuestas mezcladas que también pueden incluir opcionalmente respuestas incorrectas o para despistar.';
$string['pluginname_link'] = '/question/type/gapfill';
$string['pluginnamesummary'] = 'Pregunta del tipo de rellenar espacio en blanco.  Menos funciones que las clásicas de tipo Cloze, pero con una sintaxis más simple.';
$string['questionsmissing'] = 'No se ha incluido ningún campo en el texto de la pregunta';
$string['wronganswers'] = 'Respuestas incorrectas.';
$string['wronganswers_help'] = 'Lista de palabras incorrectas para despistar de las respuestas correctas. Cada palabra está separada por comas, solo es aplicable en los modos de arrastrar/soltar y desplegables';
