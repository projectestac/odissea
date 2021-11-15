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
 * Strings for component 'qtype_match', language 'es', version '3.11'.
 *
 * @package     qtype_match
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'Respuesta {$a}';
$string['availablechoices'] = 'Opciones disponibles';
$string['blanksforxmorequestions'] = '{no} Más conjuntos de espacios en blanco';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['deletedchoice'] = '[Opción eliminada]';
$string['deletedsubquestion'] = 'Esta parte de la pregunta se eliminó después de que se inició el intento.';
$string['filloutthreeqsandtwoas'] = 'Debe proporcionar al menos dos preguntas y tres respuestas. Puede incluir respuestas erróneas extra dando una respuesta con una pregunta en blanco. Las entradas correspondientes a la pregunta y respuesta en blanco serán pasadas por alto.';
$string['nomatchinganswer'] = 'Debe especificar una respuesta que corresponda a la pregunta \'{$a}\'';
$string['nomatchinganswerforq'] = 'Debe especificar una respuesta para esta pregunta.';
$string['notenoughqsandas'] = 'Debe suministrar al menos {$a->q} preguntas y {$a->a} respuestas.';
$string['notenoughquestions'] = 'Debe suministrar al menos {$a} pares de preguntas y respuestas.';
$string['pleaseananswerallparts'] = 'Por favor, responda a todas las partes de la pregunta.';
$string['pluginname'] = 'Emparejamiento';
$string['pluginname_help'] = 'Las preguntas de emparejamiento requieren para su resolución que se establezcan de forma correcta las relaciones entre una lista de nombres o enunciados (preguntas) y otra lista de nombres o enunciados (respuestas).';
$string['pluginnameadding'] = 'Agregando una pregunta de emparejamiento';
$string['pluginnameediting'] = 'Editando una pregunta de emparejamiento';
$string['pluginnamesummary'] = 'La respuesta a cada una de las sub-preguntas debe seleccionarse a partir de una lista de posibilidades.';
$string['privacy:metadata'] = 'El complemento de tipo de pregunta coincidente permite a los autores de preguntas establecer opciones predeterminadas como preferencias del usuario.';
$string['privacy:preference:defaultmark'] = 'La marca predeterminada establecida para una pregunta determinada.';
$string['privacy:preference:penalty'] = 'La penalización por cada intento incorrecto cuando las preguntas se ejecutan utilizando el comportamiento \'Interactivo con múltiples intentos\' o \'Modo adaptativo\'.';
$string['privacy:preference:shuffleanswers'] = 'Si las respuestas deben barajarse automáticamente.';
$string['shuffle'] = 'Barajar';
$string['shuffle_help'] = 'Si está habilitado, el orden de los elementos (respuestas) se elaborará al azar en cada intento, siempre que suponiendo que la opcion "Ordenar al azar" en los ajustes del cuestionario este también habilitada.';
