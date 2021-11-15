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
 * Strings for component 'qtype_multichoice', language 'es', version '3.11'.
 *
 * @package     qtype_multichoice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerhowmany'] = '¿Una o varias respuestas?';
$string['answerhowmany_desc'] = 'Si la opción por defecto debe ser una respuesta (p. ej. botón de opción) o respuestas múltiples (p. ej. casillas de verificación)';
$string['answernumbering'] = '¿Numerar las opciones?';
$string['answernumbering123'] = '1., 2., 3., ...';
$string['answernumberingABCD'] = 'A., B., C., ...';
$string['answernumberingIIII'] = 'I., II., III., ...';
$string['answernumbering_desc'] = 'El estilo de numeración por defecto.';
$string['answernumberingabc'] = 'a., b., c., ...';
$string['answernumberingiii'] = 'i., ii., iii., ...';
$string['answernumberingnone'] = 'Sin numeración';
$string['answersingleno'] = 'Se permiten varias respuestas';
$string['answersingleyes'] = 'Sólo una respuesta';
$string['choiceno'] = 'Elección {$a}';
$string['choices'] = 'Opciones disponibles';
$string['clearchoice'] = 'Quitar mi elección';
$string['clozeaid'] = 'Escribir palabra perdida';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['correctanswersare'] = 'Las respuestas correctas son: {$a}';
$string['correctfeedback'] = 'Para cualquier respuesta correcta';
$string['deletedchoice'] = 'Esta opción fue eliminada después de que el intento fuera iniciado.';
$string['errfractionsaddwrong'] = 'Las calificaciones positivas elegidas no alcanzan el 100%<br />Sólo alcanzan el {$a}%';
$string['errfractionsnomax'] = 'Una de las respuestas debería tener el 100% de forma que sea <br />posible alcanzar la calificación máxima en esta pregunta.';
$string['errgradesetanswerblank'] = 'Calificación establecida, pero la respuesta está en blanco';
$string['feedback'] = 'Retroalimentación';
$string['fillouttwochoices'] = 'Debe rellenar al menos dos opciones. Las que deje en blanco no se usarán.';
$string['fractionsaddwrong'] = 'Las calificaciones positivas que ha elegido no suman el 100%<br />sino únicamente el {$a}%<br />¿Desea volver y arreglarlo?';
$string['fractionsnomax'] = 'Una de las respuestas debería ser el 100%, de modo que fuera <br />posible alcanzar la calificación total de esta pregunta.<br />¿Desea volver y arreglar esta pregunta?';
$string['incorrectfeedback'] = 'Para cualquier respuesta incorrecta';
$string['notenoughanswers'] = 'Este tipo de pregunta requiere al menos {$a} opciones';
$string['overallcorrectfeedback'] = 'Retroalimentación para cualquier respuesta correcta';
$string['overallfeedback'] = 'Retroalimentación global';
$string['overallincorrectfeedback'] = 'Retroalimentación para cualquier respuesta incorrecta';
$string['overallpartiallycorrectfeedback'] = 'Retroalimentación para cualquier respuesta parcialmente correcta';
$string['partiallycorrectfeedback'] = 'Para cualquier respuesta parcialmente correcta';
$string['pleaseselectananswer'] = 'Por favor, selecciona una respuesta.';
$string['pleaseselectatleastoneanswer'] = 'Por favor, selecciona al menos una respuesta.';
$string['pluginname'] = 'Opción múltiple';
$string['pluginname_help'] = 'En respuesta a una pregunta (puede incluir una imagen) el estudiante escoge la respuesta entre varias respuestas posibles. Una pregunta de opción múltiple puede tener una o varias respuesta(s) correcta(s).';
$string['pluginnameadding'] = 'Agregando pregunta de opción múltiple';
$string['pluginnameediting'] = 'Editando una pregunta de opción múltiple';
$string['pluginnamesummary'] = 'Permite la selección de una o varias respuestas a partir de una lista predefinida.';
$string['privacy:metadata'] = 'El complemento de tipo de pregunta de opción múltiple permite a los autores de preguntas establecer opciones predeterminadas como preferencias del usuario.';
$string['privacy:preference:answernumbering'] = 'Qué estilo de numeración debería utilizarse (\'1, 2, 3, ...\', \'a, b, c, ...\' etc.).';
$string['privacy:preference:defaultmark'] = 'La puntuación predeterminada establecida para una pregunta determinada.';
$string['privacy:preference:penalty'] = 'La penalización por cada intento incorrecto cuando las preguntas se ejecutan utilizando el comportamiento \'Interactivo con múltiples intentos\' o \'Modo adaptativo\'.';
$string['privacy:preference:showstandardinstruction'] = 'Si muestra instrucción estándar.';
$string['privacy:preference:shuffleanswers'] = 'Si las respuestas deben mezclarse automáticamente.';
$string['privacy:preference:single'] = 'Si la respuesta es simple con botones de opción o múltiple con casillas de verificación.';
$string['selectmulti'] = 'Seleccione una o más de una:';
$string['selectone'] = 'Seleccione una:';
$string['showstandardinstruction'] = 'Mostrar instrucciones estándar';
$string['showstandardinstruction_help'] = 'Si se muestran las instrucciones "Seleccione una:" o "Seleccione una o más:" antes de las opciones de respuesta.';
$string['shuffleanswers'] = '¿Barajar respuestas?';
$string['shuffleanswers_desc'] = 'Si por defecto las opciones deben ser barajadas aleatoriamente para cada intento.';
$string['shuffleanswers_help'] = 'Si está activado, el orden de las respuestas varía de forma aleatoria en cada intento, siempre que "Barajar dentro de las preguntas" en la configuración del cuestionario también esté habilitada.';
$string['singleanswer'] = 'Seleccione una respuesta.';
$string['toomanyselected'] = 'Ha seleccionado demasiadas opciones.';
