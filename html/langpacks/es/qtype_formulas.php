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
 * Strings for component 'qtype_formulas', language 'es', version '3.11'.
 *
 * @package     qtype_formulas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Error absoluto';
$string['addmorepartsblanks'] = 'Espacios en blanco para {no} más partes';
$string['algebraic_formula'] = 'Fórmula algebraica';
$string['answer'] = 'Respuesta*';
$string['answer_help'] = '**Obligatoria**.
debe ser una lista de números o una lista de cadenas, en función del tipo de respuesta que se haya elegido. Donde solo haya una respuesta, se puede introducir directamente un número o una cadena. Tenga en cuenta que el número de elementos de la lista define el número de campos de la respuesta para esta parte.

<pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-a t)"<br>["vx t","vy t - 0.5 a t^2"]</pre>';
$string['answercombinedunitmulti'] = 'Respuesta y unidad para la parte {$a->part}';
$string['answercombinedunitsingle'] = 'Respuesta y unidad';
$string['answercoordinatemulti'] = 'Respuesta para parte {$a->part} y coordenada {$a->numanswer}';
$string['answercoordinatesingle'] = 'Respuesta para coordenada {$a->numanswer}';
$string['answermark'] = 'Calificación* de esta parte';
$string['answermark_help'] = '**Obligatoria**.
La calificación de la respuesta de esta parte, que debe ser un número mayor que 0.
 La calificación predeterminada de la pregunta completa es la suma de todas las calificaciones de sus partes.

Nota: Si el campo de la calificación de esta parte se deja en blanco, dicha parte se eliminará cuando se guarde la pregunta.';
$string['answermulti'] = 'Respuesta para parte {$a->part}';
$string['answerno'] = 'Parte {$a}';
$string['answersingle'] = 'Respuesta';
$string['answertype'] = 'Tipo de respuesta';
$string['answertype_help'] = 'Hay cuatro tipos de respuesta.

Las respuestas de tipo número, numérica y fórmula numérica requieren un número o una lista de números como respuesta.

Las respuestas de tipo fórmula algebraica requieren una cadena o una lista de cadenas como respuesta.

Los distintos tipos de respuestas imponen diferentes restricciones al introducir respuestas, por lo que los estudiantes deberán saber cómo introducirlas. La comprobación del formato en el código de la pregunta también les indicará si algo no es correcto cuando estén escribiendo. Lea la documentación para obtener más detalles.';
$string['answerunitmulti'] = 'Unidad para parte {$a->part}';
$string['answerunitsingle'] = 'Unidad';
$string['checkvarshdr'] = 'Comprobar la creación de instancias de las variables';
$string['choiceno'] = 'No';
$string['choiceyes'] = 'Sí';
$string['commonsiunit'] = 'Unidad común del SI';
$string['correctansweris'] = 'Una posible respuesta correcta sería: {$a}';
$string['correctfeedback'] = 'Para cualquier respuesta correcta';
$string['correctfeedback_help'] = 'Estos comentarios serán mostrados a estudiantes que obtengan la puntuación máxima en esta parte. Pueden incluir variables globales y locales que serán remplazadas por sus valores';
$string['correctness'] = 'Criterios* de calificación';
$string['correctness_help'] = '**Obligatorios**. Puede escoger entre un error relativo o un error absoluto con un rango de error. El error relativo no se puede utilizar para el tipo de respuesta algebraica.

Para una definición precisa del error relativo y del error absoluto cuando existe más de un campo de respuesta, consulte la documentación.';
$string['correctnessexpert'] = 'Experto';
$string['correctnesssimple'] = 'Simple';
$string['defaultanswermark'] = 'Calificación de la parte predeterminada';
$string['defaultanswermark_desc'] = 'Calificación de la parte predeterminada para las partes de la nueva pregunta';
$string['defaultanswertype'] = 'Tipo de respuesta predeterminada';
$string['defaultanswertype_desc'] = 'Tipo de respuesta predeterminada para las partes de la nueva pregunta';
$string['defaultcorrectness'] = 'Criterios de calificación predeterminados';
$string['defaultcorrectness_desc'] = 'Criterios de calificación predeterminados para las partes de la nueva pregunta';
$string['defaultunitpenalty'] = 'Penalización de la unidad predeterminada';
$string['defaultunitpenalty_desc'] = 'Penalización predeterminada por unidad incorrecta (0-1)';
$string['error_algebraic_var'] = 'Error de sintaxis de la definición de la variable algebraica.';
$string['error_answer_missing'] = 'No se ha definido ninguna respuesta.';
$string['error_answerbox_duplicate'] = 'El marcador de posición de cada campo de respuesta solo se puede utilizar una vez en una parte.';
$string['error_answertype_mistmatch'] = 'No coincide el tipo de respuesta: Para el tipo de respuesta numérica se requiere un número y para el tipo de respuesta algebraica se requiere una cadena';
$string['error_criterion'] = 'El criterio de calificación se debe evaluar como un único número.';
$string['error_eval_numerical'] = 'Algunas expresiones no se pueden evaluar con números.';
$string['error_fixed_range'] = 'Error de sintaxis de un rango fijo.';
$string['error_forbid_char'] = 'La fórmula o la expresión contiene operadores o caracteres prohibidos.';
$string['error_forloop'] = 'Error de sintaxis del bucle for.';
$string['error_forloop_expression'] = 'La expresión del bucle for tiene que ser una lista.';
$string['error_forloop_var'] = 'La variable del bucle for contiene algunos errores.';
$string['error_func_param'] = 'Número incorrecto o tipo de parámetros incorrecto para la función $a()';
$string['error_mark'] = 'La calificación de la respuesta debe adoptar un valor superior a 0.';
$string['error_no_answer'] = 'Es necesaria al menos una respuesta.';
$string['error_placeholder_format'] = 'Caracteres prohibidos o formato del marcador de posición incorrecto.';
$string['error_placeholder_main_duplicate'] = 'Marcador de posición duplicado en el texto de la pregunta principal.';
$string['error_placeholder_missing'] = 'Falta este marcador de posición del texto de la pregunta principal.';
$string['error_placeholder_sub_duplicate'] = 'Este marcador de posición ya ha sido definido en otra parte.';
$string['error_placeholder_too_long'] = 'La longitud del marcador de posición se ha limitado a 40 caracteres.';
$string['error_randvars_set_size'] = 'El número de elementos que se pueden generar en el conjunto debe ser superior a 1.';
$string['error_randvars_type'] = 'Todos los elementos del conjunto deben ser exactamente del mismo tipo y tamaño.';
$string['error_rule'] = 'Error de análisis de regla';
$string['error_ruleid'] = 'No existe ninguna regla con esas características en el archivo con ese id/nombre.';
$string['error_subexpression_empty'] = 'Hay una subexpresión vacía.';
$string['error_syntax'] = 'Error de sintaxis.';
$string['error_unit'] = 'Error de análisis de unidad';
$string['error_unitpenalty'] = 'La penalización debe ser un número comprendido entre 0 y 1.';
$string['error_validation_eval'] = 'Error de la evaluación de prueba';
$string['error_vars_array_index_nonnumeric'] = 'No se puede utilizar como índice de lista un valor no numérico.';
$string['error_vars_array_index_out_of_range'] = 'Índice de lista fuera de rango';
$string['error_vars_array_size'] = 'El tamaño de la lista debe estar comprendido entre 1 y 1000.';
$string['error_vars_array_type'] = 'Los elementos de la misma lista deben ser del mismo tipo, ya sean números o cadenas.';
$string['error_vars_array_unsubscriptable'] = 'No se pueden utilizar subíndices en la variable.';
$string['error_vars_bracket_mismatch'] = 'Los corchetes no coinciden.';
$string['error_vars_end_separator'] = 'Falta un separador de tarea al final.';
$string['error_vars_name'] = 'La sintaxis del nombre de la variable no es correcta.';
$string['error_vars_reserved'] = 'La función {$a}() está reservada y no se puede utilizar como variable.';
$string['error_vars_string'] = '¡Error! La cadena no contiene la comilla doble de cierre o utiliza un carácter no aceptado como .';
$string['error_vars_undefined'] = 'No se ha definido la variable {$a}.';
$string['feedback'] = 'Comentarios';
$string['feedback_help'] = 'Los comentarios de esta parte se mostrarán a los estudiantes que no obtengan la máxima calificación en esta parte. Pueden incluir las variables locales y globales que se sustituirán por sus valores';
$string['functiontakesatleasttwo'] = 'La función {$a} debe contener al menos dos argumentos';
$string['functiontakesnoargs'] = 'La función {$a} no admite ningún argumento';
$string['functiontakesonearg'] = 'La función {$a} debe contener exactamente un argumento';
$string['functiontakesoneortwoargs'] = 'La función {$a} debe contener uno o dos argumentos';
$string['functiontakestwoargs'] = 'La función {$a} debe contener exactamente dos argumentos';
$string['globaloptions'] = '[Global] -';
$string['globalvarshdr'] = 'Variables';
$string['illegalformulasyntax'] = 'Sintaxis de la fórmula que comienza por \'{$a}\' no válida';
$string['incorrectfeedback'] = 'Para cualquier respuesta incorrecta';
$string['incorrectfeedback_help'] = 'Estos comentarios serán mostrados a estudiantes que no obtengan ninguna puntuación en esta parte. Pueden incluir variables globales y locales que serán remplazadas por sus valores';
$string['instantiate'] = 'Crear una instancia';
$string['mainq'] = 'Pregunta principal';
$string['modelanswer'] = 'Respuesta modelo';
$string['none'] = 'Ninguno';
$string['number'] = 'Número';
$string['number_unit'] = 'Número y unidad';
$string['numdataset'] = 'Número del conjunto de datos';
$string['numeric'] = 'Numérico';
$string['numeric_unit'] = 'Numérico y unidad';
$string['numerical_formula'] = 'Fórmula numérica';
$string['numerical_formula_unit'] = 'Fórmula numérica y unidad';
$string['otherrule'] = 'Otras reglas';
$string['otherrule_help'] = 'Aquí el autor de la pregunta puede definir normas de conversión adicionales para otras unidades base aceptadas. Consulte la documentación sobre los usos avanzados.';
$string['partiallycorrectfeedback'] = 'Para cualquier respuesta parcialmente correcta';
$string['partiallycorrectfeedback_help'] = 'Estos comentarios serán mostrados a estudiantes que no obtengan la puntuación máxima en esta parte. Pueden incluir variables globales y locales que serán remplazadas por sus valores';
$string['placeholder'] = 'Nombre del marcador de posición';
$string['placeholder_help'] = 'El marcador de posición se utiliza para identificar el lugar en el texto de la pregunta principal que se sustituirá con el contenido de la parte. Se trata de una cadena de caracteres alfanuméricos con el prefijo **#**, como por ejemplo #1, #2a, #2b y #A.

Si este campo se deja vacío, la parte se anexará al final del texto de la pregunta principal.';
$string['pleaseputananswer'] = 'Introduzca una respuesta en cada campo de entrada.';
$string['pluginname'] = 'Fórmulas';
$string['pluginname_help'] = 'Para empezar a utilizar este tipo de pregunta, lea el <a href="http://code.google.com/p/moodle-coordinate-question/wiki/Tutorial">Tutorial</a>.

Para conocer las posibles preguntas, descargue e importe el <a href="http://code.google.com/p/moodle-coordinate-question/downloads/list">Ejemplo</a>
o consulte las <a href="http://code.google.com/p/moodle-coordinate-question/wiki/ScreenShots">Capturas de pantalla</a>.

Para las opciones del siguiente formulario de edición, lea las <a href="http://code.google.com/p/moodle-coordinate-question/wiki/QuestionOptions">Opciones de la pregunta</a>

Para consultar la documentación completa, lea la <a href="http://code.google.com/p/moodle-coordinate-question/wiki/Documentation">Documentación</a>';
$string['pluginnameadding'] = 'Añadir una pregunta de fórmulas';
$string['pluginnameediting'] = 'Editar una pregunta de fórmulas';
$string['pluginnamesummary'] = 'Tipo de pregunta con valores aleatorios y múltiples respuestas
Los campos de la respuesta se pueden colocar en cualquier lugar de forma que se puedan crear preguntas con diferentes estructuras como vectores, polinomios y matrices.
Otras características como la verificación de unidades y las preguntas con varias partes también están correctamente integradas y son fáciles de utilizar.';
$string['postunit'] = 'Unidad';
$string['postunit_help'] = 'Aquí puede especificar la unidad. Este tipo de pregunta está especialmente diseñada para las unidades del SI, de forma que un espacio vacío representa el «producto» de diferentes «unidades base» y <tt> ^ </tt> se utiliza para los exponentes.
Además, también se puede utilizar <tt> / </tt> para exponentes negativos. Las permutaciones de la unidad base se tratan igual.

Los estudiantes deben utilizar el mismo formato de entrada. Por ejemplo:

<pre class="prettyprint">1 m<br>0,1 m^2<br>20 m s^(-1)<br>400 kg m/s<br>100 kW</pre>';
$string['privacy:metadata'] = 'El plugin del tipo de pregunta Fórmulas no almacena ningún dato personal.';
$string['qtextpreview'] = 'Previsualización con el conjunto de datos';
$string['questiontext'] = 'Texto de la pregunta';
$string['questiontext_help'] = 'Además del texto normal de la pregunta, aquí también pueden utilizar variables globales y marcadores de posición.

Las variables globales se sustituirán por sus respectivos valores y los marcadores de posición se sustituirán con las partes.
    Un sencillo ejemplo en el que se utilizan las variables <tt> A, B, C </tt> y los marcadores de posición <tt> #1, #2, #3 </tt> es el siguiente:

<pre class="prettyprint">¿Cuál es el resultado de {A} + {B}?<br>{#1}<br>¿Cuál es el resultado de {A} - {B}?<br>{#2}<br>¿Cuál es el resultado de {C} / {B}?<br>{#3}</pre>';
$string['relerror'] = 'Error relativo';
$string['renew'] = 'Renovar';
$string['ruleid'] = 'Reglas de conversión básicas';
$string['ruleid_help'] = 'Este tipo de pregunta posee un sistema de conversión de unidades integrado y cuenta con unas reglas de conversión básicas.

La regla más básica es «Unidad común del SI», que convierte unidades estándar como las de longitud en km, m, cm y mm, por ejemplo. Esta opción no tiene ningún efecto si no se utiliza ninguna unidad.';
$string['settingusepopup'] = 'Utilizar ayuda contextual';
$string['settingusepopup_desc'] = 'Mostrar la respuesta correcta y los comentarios en la ayuda contextual';
$string['subqoptions'] = 'Opciones extra';
$string['subqtext'] = 'Texto de la parte';
$string['subqtext_help'] = 'Aquí se pueden especificar los lugares que ocuparán los campos de respuesta y del texto de la parte. Los marcadores de posición que se pueden utilizar para especificar los lugares en los que se situarán los campos de respuesta son:

<pre class="prettyprint">{_0}<br>{_1}<br>{_2}<br>...<br>{_u}</pre>

Los campos <tt> {_0}, {_1}, {_2} </tt> son los campos de entrada para las coordenadas, y <tt> {_u} </tt> es el campo de entrada para la unidad.

Todos los campos que falten se anexan automáticamente al final del texto de la parte. Un caso especial se produce si se especifican de forma consecutiva <tt> {_0}, {_u} </tt> y solo existe una coordenada y una unidad, es decir, <tt> {_0}{_u} </tt> se combinarán en un único campo de respuesta de entrada larga para la respuesta y la unidad.';
$string['unit'] = 'Unidad';
$string['unitpenalty'] = 'Resta por unidad incorrecta (0-1)*';
$string['unitpenalty_help'] = 'Esta opción especifica la puntuación con la que desea penalizar al estudiante por cada unidad incorrecta.

Tiene un valor de entre 0 y 1. Si adopta el valor de 1, la unidad y la respuesta deben ser correctas al mismo tiempo para poder obtener la puntuación. Es decir, la unidad y la respuesta se consideran una sola entidad. Por otra parte, si adopta un valor 0, los estudiantes podrán obtener la puntuación total únicamente si introducen la respuesta correcta, y ninguna cadena aleatoria tendrá ningún efecto al final de la respuesta.

Por tanto, se recomienda utilizar el valor 1 cuando la respuesta no posea ninguna unidad asociada.';
$string['unsupportedformulafunction'] = 'No se admite la función {$a}';
$string['vars1'] = 'Variables locales';
$string['vars1_help'] = 'Aquí puede definir las variables del mismo modo que las variables globales se definen en el nivel de la pregunta. Las variables que se definen aquí se pueden utilizar en los comentarios o en la respuesta de una parte y solo serán visibles en la parte.';
$string['vars2'] = 'Variables de calificación';
$string['vars2_help'] = 'Aquí se pueden utilizar todas las variables locales y las respuestas del estudiante. Consulte la documentación sobre los usos avanzados.';
$string['varsdata'] = 'Conjunto de datos de creación de instancias';
$string['varsglobal'] = 'Variables globales';
$string['varsglobal_help'] = 'Aquí se pueden especificar las fórmulas para manipular las variables aleatorias de creación de instancias (están disponibles todas las variables aleatorias). En la documentación se incluye la lista completa de operadores y funciones matemáticas.

<pre class="prettyprint">a = 1.11111;<br>b = exp(3);<br>c = A + a + b;<br>d = sin(1.5*pi()) + c;<br>e = round(a, 0);<br>f = [0,1,2,3][A];<br>g = ["zero","one","two","three"][A];<br>distance = sqrt(a*a + b*b);</pre>';
$string['varsrandom'] = 'Variables aleatorias';
$string['varsrandom_help'] = 'Al principio de cada intento se generan nuevos valores aleatorios para estas variables.  Puede realizarse definiendo un conjunto de elementos para escoger entre:

<pre class="prettyprint">A = {1,2,3};<br>C = {[1,-1], [2,-2], [3,-3]};<br>E = {10:100:10, 100, 1000};</pre>

Estos elementos pueden ser números, cadenas o listas de estas. Al iniciar un nuevo intento, se extraerá un elemento del conjunto y se asignará a la variable de la izquierda.  Además, para un conjunto de números, puede utilizar la notación de rangos como por ejemplo 10:100:10 (consulte el ejemplo E anterior). </p>';
$string['varsstatistics'] = 'Estadísticas';
$string['yougotnright'] = 'Ha respondido correctamente a {$a->num} partes de esta pregunta.';
