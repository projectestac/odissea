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
 * Strings for component 'qtype_multianswer', language 'es', version '4.1'.
 *
 * @package     qtype_multianswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'Confirmo que deseo que la pregunta se guarde como editada';
$string['confirmsave'] = 'Confirmar y luego guardar {$a}';
$string['correctanswer'] = 'Respuesta correcta';
$string['correctanswerandfeedback'] = 'Respuesta correcta y retroalimentación';
$string['corruptedquestion'] = 'Esta pregunta está dañada y contiene subpreguntas que no están presentes en su sistema.';
$string['decodeverifyquestiontext'] = 'Decodificar y verificar el enunciado de la pregunta';
$string['invalidmultianswerquestion'] = 'Pregunta de respuestas incrustadas no válidas (Cloze) ({$ a}).';
$string['layout'] = 'Esquema';
$string['layouthorizontal'] = 'Fila horizontal de botones';
$string['layoutmultiple_horizontal'] = 'Fila horizontal de casillas de verificación';
$string['layoutmultiple_vertical'] = 'Columna vertical de casillas de verificación';
$string['layoutselectinline'] = 'Menú desplegable en línea en el texto';
$string['layoutundefined'] = 'Esquema indefinido';
$string['layoutvertical'] = 'Columna vertical de botones de opción';
$string['missingsubquestion'] = 'Esta subpregunta no se encuentra en su sistema y no se puede mostrar.';
$string['multichoicex'] = 'Elección múltiple {$a}';
$string['nooptionsforsubquestion'] = 'Imposible conseguir opciones para la parte de la pregunta # {$a->sub} (question->id={$a->id})';
$string['noquestions'] = 'La pregunta \'cloze\' (multi-respuesta) "<strong>{$a}</strong>" no contiene ninguna pregunta';
$string['pleaseananswerallparts'] = 'Por favor, responda a todas las partes de la pregunta.';
$string['pluginname'] = 'Respuestas anidadas (Cloze)';
$string['pluginname_help'] = 'Respuestas incrustadas (Cloze) consisten en  un  texto con preguntas tipo respuestas de opción múltiple o respuesta corta incrustadas en su interior.';
$string['pluginname_link'] = 'question/type/multianswer';
$string['pluginnameadding'] = 'Agregando una pregunta con respuestas anidadas (Cloze)';
$string['pluginnameediting'] = 'Editando una pregunta con respuestas anidadas (Cloze)';
$string['pluginnamesummary'] = 'Las preguntas de este tipo son muy flexibles, pero sólo pueden crearse introduciendo texto que contiene códigos especiales que crean preguntas anidadas de opción múltiple, cortas y numéricas.';
$string['privacy:metadata'] = 'El complemento de tipo de pregunta de Respuestas integradas (Cloze) no almacena ningún dato personal.';
$string['qtypenotrecognized'] = 'tipo de pregunta {$a} no reconocido';
$string['questiondefinition'] = 'Definición de la pregunta';
$string['questiondeleted'] = 'Pregunta eliminada';
$string['questioninquiz'] = '<ul><li> añadir o eliminar preguntas, </li><li> cambiar el orden de preguntas en el texto, </li><li> cambiar el tipo de pregunta (numérica, respuesta corta, de opción múltiple). </li></ul>';
$string['questionnotfound'] = 'Imposible encontrar la pregunta de la parte de pregunta #{$a}';
$string['questionsadded'] = '"Pregunta agregada"';
$string['questionsaveasedited'] = 'La pregunta se guardará como editada.';
$string['questionsless'] = 'hay {$a} pregunta(s) menos que en la pregunta multiple almacenada en la base de datos';
$string['questionsmissing'] = 'El texto de la pregunta debe contener, al menos, una respuesta integrada.';
$string['questionsmore'] = 'hay {$a} pregunta(s) más que en la pregunta multiple almacenada en la base de datos';
$string['questiontypechanged'] = 'Se ha modificado este tipo de pregunta';
$string['questiontypechangedcomment'] = 'Al menos un tipo de pregunta ha sido modificada.<br />¿Añadió, eliminó o movió alguna pregunta?<br />Puede continuar.';
$string['questionusedinquiz'] = 'Esta pregunta es usada en {$a->nb_of_quiz} cuestionario(s), intento(s) total(es) : {$a->nb_of_attempts}';
$string['regradeissuenumsubquestionschanged'] = 'El número de subpreguntas embebidas en la pregunta ha cambiado.';
$string['storedqtype'] = 'Tipo de pregunta {$a} guardada';
$string['subqresponse'] = 'parte {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'Tipo de pregunta desconocido: {$a->type} of question part # {$a->sub}';
$string['warningquestionmodified'] = '<b>ADVERTENCIA</b>';
$string['youshouldnot'] = '<b>USTED NO DEBERÍA</b>';
