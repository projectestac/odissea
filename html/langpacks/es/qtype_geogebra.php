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
 * Strings for component 'qtype_geogebra', language 'es', version '4.5'.
 *
 * @package     qtype_geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconstraints'] = 'Añadir restricciones (condiciones) a las variables.';
$string['addmorevarblanks'] = 'Espacios para {no} más variable(s)';
$string['answerinvalid'] = 'La cadena de caracteres de la respuesta no es válida. Esto no debiera ocurrir.';
$string['answermissing'] = 'No hay resultados. Probablemente JavaScript no se encuentra activado en el navegador (o ha ocurrido otro error desconocido).';
$string['answervar'] = 'Variables para la calificación automática';
$string['answervar_help'] = 'Para la calificación automática hay que escribir un nombre para una variable lógica de GeoGebra que tomará el valor "true" (cierto) en caso de resolución (parcial). Se sumarán todas las notas de todas las variables lógicas. La pregunta se considerará resuelta con cualquier combinación que supere 100, siempre que al menos una sume exactamente 100%. Para la calificación manual, basta con dejar en blanco.';
$string['applet_advanced_settings'] = 'Ajustes avanzados...';
$string['constraints'] = 'Restricciones (condiciones)';
$string['constraints_help'] = '¿Hay condiciones para las variables, tales como a < b, que no pueden declararse usando las opciones del deslizador?  Deben separase por comas. Se aceptan relaciones como: <, <=, >, >=. De precisar una igualdad, debe usarse la misma variable al crear la construcción de GeoGebra. No se admiten rangos dinámicas como, por ejemplo, parámetros para el máximo o mínimo de un deslizador.';
$string['constraintswrongortoohard'] = '{$a->inequalities} son erróneas o muy difíciles de cumplir, se intentó (por fuerza bruta) {$a->tries} veces en {$a->time} segundos. Quizá se procure un método mejor en el futuro...';
$string['dragndrop'] = 'Arrastra un archivo de GeoGebra en cualquier parte de la sección del Applet GeoGebra';
$string['enable_label_drags'] = 'Habilitar arrastre de etiquetas';
$string['enable_right_click'] = 'Habilitar clic derecho y edición por teclado';
$string['enable_shift_drag_zoom'] = 'Habilitar Shift+Arrastrar & Zoom';
$string['feedback'] = 'Comentario de devolución cuando la variable resulte cierta';
$string['feedback_help'] = 'El comentario de devolución de respuesta se tomará automáticamente del subtítulo de la variable en el archivo GeoGebra.';
$string['forcedimensions'] = 'Forzar dimensiones del applet';
$string['forcedimensions_help'] = 'Por defecto el applet GeoGebra se escala automáticamente en el formato del cuestionario. Habilitar esta opción le permitirá especificar ancho y alto del plugin manualmente y deshabilitar que se escale automáticamente.';
$string['forcedimensionsenable'] = 'Especificar ancho y alto manualmente';
$string['geogebraapplet'] = 'Applet de GeoGebra';
$string['getvars'] = 'Obtener variables de asignación aleatoria desde el applet';
$string['ggbfilemissing'] = 'Falta la cadena de caracteres en base64 en la respuesta. Probablemente JavaScript no se encuentra activado en el navegador o que haya surgido un error desconocido';
$string['ggbturl'] = 'URL o ID de la hoja de trabajo en GeoGebra';
$string['ggbturl_help'] = 'Puede usarse el botón de compartir en GeoGebra y copiar y pegar el enlace o usar el repositorio GeoGebra. El applet y los parámetros están guardados en la base de datos, el applet no se recargará desde GeoGebra salvo requerimiento expreso. También se permite proporcionar el ID o el acceso compartido del Applet.';
$string['ggbxmlmissing'] = 'Falta la cadena de caracteres del XML en la respuesta. Probablemente JavaScript no se encuentra activado en el navegador (o ha ocurrido otro error desconocido).';
$string['height'] = 'Altura';
$string['height_help'] = 'Por defecto el applet GeoGebra se escala automáticamente para caber en el formato del cuestionario. Si por alguna razón esto no se ajusta a sus necesidades, puede especificar ancho y alto manualmente. Si los valores son demasiado grandes los estudiantes verán una barra de desplazamiento en pantallas pequeñas para mostrar el applet completo.';
$string['heightnotzero'] = 'Usted debe especificar un valor mayor que cero para la altura';
$string['invalidinequality'] = '{$a} no es válido';
$string['isexercise'] = 'Usar Ejercicios GeoGebra para chequear la pregunta';
$string['isexercise_help'] = 'El applet contiene herramientas definidas por el usuario que pueden usarse para chequear el ejercicio automáticamente.\\nCuidado: Las siguientes respuestas no se aplican en este caso.';
$string['israndomized'] = '¿Hay variables de asignación aleatoria?';
$string['loadapplet'] = '(Re)cargar y mostrar applet';
$string['loadapplet_help'] = '(Re)cargar el applet de GeoGebra y guardar la nueva versión desde GeoGebra en la base de datos.';
$string['mineqmax'] = 'No están indicados correctamente el mínimo y el máximo del intervalo para el valor aleatorio de la variable {$a}; tal vez no se especificaron en el deslizador o el objeto no sea un deslizador. Probablemente se deba corregir esto en tu archivo GeoGebra.';
$string['minplusstepgtmax'] = 'El mínimo más el incremento es mayor que el máximo para la variable {$a}; probablemente esto deba corregirse en el archivo GeoGebra.';
$string['noappletloaded'] = '¡No hay applet alguna cargada! Conviene comprobar si la URL es correcta o si se observa un applet después de elegir un enlace o (re)cargar tal applet';
$string['nofractionsumeq1'] = 'Al menos una combinación de notas debe sumar 100';
$string['pluginname'] = 'GeoGebra';
$string['pluginname_help'] = 'Preguntas que pueden resolverse usando GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';
$string['pluginnameadding'] = 'Añadir una pregunta de GeoGebra';
$string['pluginnameediting'] = 'Editar una pregunta de GeoGebra';
$string['pluginnamesummary'] = 'Una versión de preguntas calculadas que usa GeoGebra para mostrarlas y para comprobar cada respuesta cuando se realiza el cuestionario.';
$string['privacy:metadata'] = 'El plugin de pregunta GeoGebra no almacena ningún dato personal.';
$string['randomizedbutnovars'] = 'Se ha elegido que la pregunta sea aleatoria, sin indicar ninguna variable válida para que sea aleatoria.';
$string['randomizedvar'] = 'Variables de asignación aleatoria';
$string['randomizedvar_help'] = 'Las variables aleatorias se separan por comas. Se usan las opciones del deslizador de GeoGebra para fijar su mínimo, su máximo y su incremento. Estas variables se pueden emplear también en el texto de la pregunta, encerrándolas entre llaves como en: {a}';
$string['show_algebra_input'] = 'Mostrar barra de entrada';
$string['show_menu_bar'] = 'Mostrar menú';
$string['show_reset_icon'] = 'Mostrar icono de reinicio de construcción';
$string['show_tool_bar'] = 'Mostrar barra de herramientas';
$string['stepzero'] = 'Incremento 0 para la variable {$a}; o no se especificó en el deslizador o el objeto no es un deslizador. Probablemente haya que corregirlo en el archivo de GeoGebra.';
$string['useafile'] = '... o usa un archivo ggb';
$string['valuecheckedfor'] = 'Objetos lógicos  de GeoGebra utilizados para comprobar la corrección.';
$string['variablenamewrong'] = 'No se encuentra  una variable con tal nombre en el archivo de GeoGebra.';
$string['variableno'] = 'Variable {$a}';
$string['variables'] = 'Variables';
$string['width'] = 'Anchura';
$string['width_help'] = 'Por defecto el applet de GeoGebra se escala automáticamente para ajustarse al formato del cuestionario. Si por alguna razón esto no se ajusta a sus necesidades, puede especificar ancho y alto manualmente. Si los valores son demasiado altos los estudiantes verán una barra de desplazamiento en pantallas pequeñas para mostrar el applet completo.';
$string['widthnotzero'] = 'Debe especificar un valor mayor que cero para la anchura';
$string['willbereadfromfile'] = 'Se leerá desde GeoGebra... (ver el botón de ayuda)';
