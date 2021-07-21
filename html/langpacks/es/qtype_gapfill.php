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
 * Strings for component 'qtype_gapfill', language 'es', version '3.11'.
 *
 * @package     qtype_gapfill
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addhinttext'] = 'Añadir pista al formulario para editar';
$string['addhinttext_text'] = 'Añadir las primeras dos pistas a la sección de Intentos múltiples del formato.';
$string['additemsettings'] = 'Añadir ajustes del hueco';
$string['answerdisplay'] = 'Muestra las respuestas';
$string['answerdisplay_help'] = 'Dragdrop (Arrastrar y soltar) muestra una lista de palabras que pueden ser arrastradas hacia los huecos, gapfill (llenar huecos) muestra los huecos sin opciones de palabras, dropdown (desplegable) muestra la misma lista de respuestas correctas (y posiblemente incorrectas) para cada campo';
$string['blank'] = 'vacío';
$string['cannotimport'] = 'nopuedeimportar';
$string['casesensitive'] = 'Distingue mayúsculas y minúsculas';
$string['casesensitive_help'] = 'Cuando está seleccionado, si la respuesta correcta es “GATO”, entonces “gato” se marcará como respuesta incorrecta.';
$string['correct'] = 'Retroalimentación para correcta.';
$string['correctanswer'] = 'Respuesta correcta';
$string['course'] = 'Ayuda para importación';
$string['coursenotfound'] = 'Curso no encontrado, revise el nombre corto del curso';
$string['courseshortname'] = 'Nombre corto del Curso';
$string['courseshortname_help'] = 'Introduzca el nombre corto del curso al que se le importarán preguntas. Esto hace una importación estándar de preguntas XML desde el archivo example_questions.xml en la carpeta del tipo de pregunta gapfill.';
$string['delimitchars'] = 'Caracteres delimitadores';
$string['delimitchars_help'] = 'Cambia los caracteres que delimitan un campo del predeterminado [ ], se suele utilizar para preguntas relacionadas con lenguajes de programación';
$string['delimitset_text'] = 'Configura los delimitadores para los huecos, de forma tal que pueda añadir % % para Tres tristes %tigres% tragan %trigo% en el trigal.';
$string['disableregex'] = 'Deshabilitar Regex';
$string['disableregex_help'] = 'Deshabilitar el procesamiento de expresiones regulares y realizar una comparación estándar de cadenas. Esto puede ser útil para preguntas HTML en donde los paréntesis cuadrados  (< y >)  deberían de tratarse literalmente, y en matemáticas, en donde los símbolos como * deberían de verse literalmente en lugar de verlos como expresiones';
$string['disableregexset_text'] = 'Deshabilitar el procesamiento de expresiones regulares de las respuestas';
$string['displaydragdrop'] = 'Arrastrar/ soltar';
$string['displaydropdown'] = 'desplegable';
$string['displaygapfill'] = 'rellenar espacio';
$string['distractor1'] = 'azul, zapato, pequeño';
$string['distractor2'] = 'azul, zapato, pequeño';
$string['duplicatepartialcredit'] = 'El crédito es parcial porque tiene respuestas duplicadas';
$string['editquestiontext'] = 'Editar texto de pregunta';
$string['example1'] = 'Arrastrar los verbos a los huecos. El [rió] y se [sentó]';
$string['example2'] = 'Seleccione los verbos desde los desplegables. El [rió] y se [sentó]';
$string['example3'] = '¿De donde viene el canguro? [Australia]. El siguiente hueco aceptará igualmente gato y perro [cat|dog]';
$string['fixedgapsize'] = 'Tamaño fijo de los huecos';
$string['fixedgapsize_help'] = 'Al intentar contestar las preguntas, todos los huecos se ajustarán al mismo tamaño que el hueco mayor. Esto elimina el tamaño del hueco como una posible pista para adivinar la respuesta correcta. Por ejemplo, si los huecos fueran [rojo] y [amarillo], sería muy evidente que la palabra \'amarillo\' iría en el hueco más grande';
$string['fixedgapsizeset_text'] = 'Ajusta el tamaño de todos los huecos al tamaño del hueco mayor';
$string['gap_plural'] = 'huecos';
$string['gap_singular'] = 'hueco';
$string['gapfill'] = 'Relleno espacio tipo Cloze';
$string['importexamples'] = 'Importar';
$string['incorrect'] = 'Retroalimentación para incorrecta.';
$string['itemsettings_button'] = 'Configuraciones del ítem';
$string['itemsettings_button_help'] = 'Hacer clic aquí activa el modo de configuración para acceder a los ajustes de cada hueco, tales como retroalimentación para respuestas incorrectas. Haga clic en una palabra limitada a un hueco para que salte un formulario de configuraciones';
$string['itemsettingsbutton'] = 'Configuraciones del hueco';
$string['itemsettingserror'] = 'Solamente funciona con el editor Atto. Vaya a Preferencias de editor para cambiar a Atto';
$string['letterhint0'] = 'La primera letra de la respuesta correcta será añadida a cada hueco incorrecto cuando presione \'Intentar nuevamente\'.';
$string['letterhint1'] = 'La siguiente letra de la respuesta correcta será añadida cuando presione \'Intentar nuevamente\'.';
$string['letterhints'] = 'Pistas de letra';
$string['letterhints_help'] = 'Añadir letra de la respuesta correcta como una pista en modo interactivo cuando se da una respuesta equivocada. Las pistas deben de estar en Intentos múltiples para que esto funcione';
$string['letterhints_text'] = 'Añadir letra de la respuesta correcta como una pista en modo interactivo cuando se da una respuesta equivocada';
$string['moreoptions'] = 'Más opciones.';
$string['noduplicates'] = 'Sin duplicados';
$string['noduplicates_help'] = 'Cuando está seleccionado, cada respuesta debe ser única. Es práctico cuando cada campo tiene un operador | , por ejemplo:  “¿Cuáles son los colores de la medallas olímpicas?” y cada campo tiene [oro|plata|bronce], si un estudiante escribe oro en cada campo solamente el primero obtendrá una nota (aunque los otros también obtendrán un visto). Es usado más bien para descartar las respuestas duplicadas al calificar';
$string['optionsaftertext'] = 'Opciones después del texto';
$string['optionsaftertext_help'] = 'Las opciones arrastrables de respuestas serán mostradas después del cuerpo del texto en lugar de encima de él';
$string['optionsaftertext_text'] = 'Configurar los arrastrables para que estén después del cuerpo del texto';
$string['or'] = 'o';
$string['pleaseenterananswer'] = 'Por favor introduzca una respuesta.';
$string['pluginname'] = 'Pregunta de rellenar espacio en blanco';
$string['pluginname_help'] = 'Ponga las palabras que necesitan ser completadas entre corchetes; por ejemplo: El [gato] se sentó sobre la [alfombra]. En caso de que alfombra o cama fueran válidos, se usaría [alfombra|cama].  Los modos desplegables y arrastrar/soltar permiten  mostrar una lista de respuestas mezcladas que también pueden incluir opcionalmente respuestas incorrectas o para despistar.';
$string['pluginname_link'] = '/question/type/gapfill';
$string['pluginnameadding'] = 'Agregar una pregunta de rellenar espacio en blanco.';
$string['pluginnameediting'] = 'Editar pregunta de rellenar espacio en blanco.';
$string['pluginnamesummary'] = 'Pregunta del tipo de rellenar espacio en blanco.  Menos funciones que las clásicas de tipo Cloze, pero con una sintaxis más simple.';
$string['privacy:null_reason'] = 'El tipo de pregunta llenar hueco no afecta ni almacena ningún dato por sí mismo.';
$string['questioncatnotfound'] = 'Categoría de pregunta no encontrada, haga clic <a href={$a}>aquí</a> para inicializar y después en el botón de atrás del navegador';
$string['questionsmissing'] = 'No se ha incluido ningún campo en el texto de la pregunta';
$string['questiontext'] = 'Texto de la pregunta';
$string['questiontext_help'] = 'Ponga delimitadores alrededor de las palabras que se convertirán en el texto';
$string['singleuse'] = 'Arrastrables de uso único';
$string['singleuse_help'] = 'Quitar arrastrables de la lista cuando sean soltados en un hueco';
$string['singleuse_text'] = 'Quitar arrastrables de la lista cuando sean soltados en un hueco';
$string['visitquestions'] = 'Haga clic <a href={$a}>aquí</a> para visitar las preguntas';
$string['wronganswers'] = 'Respuestas incorrectas.';
$string['wronganswers_help'] = 'Lista de palabras incorrectas para despistar de las respuestas correctas. Cada palabra está separada por comas, solo es aplicable en los modos de arrastrar/soltar y desplegables';
$string['yougotnrightcount'] = 'Su número de huecos llenados correctamente es {$a->num}.';
