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
 * Strings for component 'qtype_numerical', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   qtype_numerical
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Margen de error';
$string['addmoreanswerblanks'] = 'Espacios en blanco para {no} opciones más';
$string['addmoreunitblanks'] = 'Espacios en blanco para {no} unidades más';
$string['answercolon'] = 'Respuesta:';
$string['answererror'] = 'Error';
$string['answermustbenumberorstar'] = 'La respuesta debe ser un número, por ejemplo -1.234 o 3e8, o \'*\'.';
$string['answerno'] = 'Respuesta {$a}';
$string['decfractionofquestiongrade'] = 'como fracción decimal (0-1) de la calificación de de la pregunta';
$string['decfractionofresponsegrade'] = 'como fracción decimal (0-1) de la calificación de la respuesta';
$string['decimalformat'] = 'decimales';
$string['editableunittext'] = 'el elemento de texto introducido';
$string['errornomultiplier'] = 'Debe especificar un multiplicador para esta unidad.';
$string['errorrepeatedunit'] = 'No puede tener dos unidades con el mismo nombre.';
$string['geometric'] = 'Geométrica';
$string['invalidnumber'] = 'Debes introducir un valor numérico.';
$string['invalidnumbernounit'] = 'Debes introducir un valor numérico. No incluyas la unidad en la respuesta.';
$string['invalidnumericanswer'] = 'Una de las respuestas que has introducido no es un número válido.';
$string['invalidnumerictolerance'] = 'Uno de los valores de tolerancia introducidos no es un número válido.';
$string['leftexample'] = 'en la izquierda, como por ejemplo $1.00 o £1.00';
$string['manynumerical'] = 'Las unidades son opcionales. Si se escribe la unidad, se usa para convertir la respuesta a Unidad 1 antes de calificar.';
$string['multiplier'] = 'Multiplicador';
$string['nominal'] = 'Nominal';
$string['noneditableunittext'] = 'Texto de la Unidad Nº 1 NO editable';
$string['nonvalidcharactersinnumber'] = 'Caracteres no válidos en el número';
$string['notenoughanswers'] = 'Debe escribir al menos una respuesta.';
$string['nounitdisplay'] = 'Sin calificar unidad';
$string['numericalmultiplier'] = 'Multiplicador';
$string['numericalmultiplier_help'] = 'El multiplicador es el factor por el que la respuesta-numérica correcta se multiplica.
<br>La primera unidad (\'Unidad 1\') tiene un valor multiplicador predeterminado de 1. Así, por ejemplo, si la respuesta-numérica correcta es de 5500 W y se establece W (vatio) como unidad en \'Unidad 1\' que tiene 1 como multiplicador predeterminado, la respuesta correcta es 5500 W.
<br>Si se agrega la unidad kW (kilovatio) con un multiplicador de 0,001, entonces 5,5kW será también una respuesta correcta. Esto significa que tanto 5500W como 5.5kW se consideran correctas.
<br>Tenga en cuenta que el margen de error aceptado también se multiplica, por lo que un error permitido de 100 W se convertiría en un error de 0.1kW.';
$string['oneunitshown'] = 'Unidad 1 es mostrada automáticamente junto a la caja de respuesta.';
$string['onlynumerical'] = 'No se emplean Unidades para nada. Solamente se califica el valor numérico.';
$string['pleaseenterananswer'] = 'Por favor, introduce una respuesta.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Por favor, escribe tu respuesta sin usar el separador de miles ({$a}).';
$string['pluginname'] = 'Numérica';
$string['pluginnameadding'] = 'Agregando una pregunta numérica';
$string['pluginnameediting'] = 'Editando una pregunta numérica';
$string['pluginname_help'] = 'Desde la perspectiva del alumno, una pregunta numérica es muy semejante a una pregunta de respuesta corta. La diferencia es que a las respuestas numéricas se les permite tener un margen de error. Esto permite evaluar la respuesta debtro de un rango fijo. Por ejemplo, si la respuesta es 10, con un margen de error de 2, entonces cualquier número entre 8 y 12 se aceptará como correcto.';
$string['pluginnamesummary'] = 'Permite una respuesta numérica (con posibilidad de especificar las unidades) que es calificada comparándola con distintas respuestas modelo (es posible incluir márgenes de tolerancia).';
$string['privacy:metadata'] = 'El tipo de pregunta Numérica no almacena ningún dato personal.';
$string['relative'] = 'Relativa';
$string['rightexample'] = 'a la derecha, por ejemplo 1.00cm o 1.00km';
$string['selectunit'] = 'Seleccione una unidad';
$string['selectunits'] = 'Seleccione uidades';
$string['studentunitanswer'] = 'Las unidades se introducen empleando';
$string['tolerancetype'] = 'Tipo de tolerancia';
$string['unit'] = 'Unidad';
$string['unitappliedpenalty'] = 'Estas marcas incluyen una penalización de {$a} por unidad incorrecta';
$string['unitchoice'] = 'una selección de opción múltiple';
$string['unitedit'] = 'Editar unidad';
$string['unitgraded'] = 'Se debe indicar la unidad, y se tendrá en cuenta en la calificación.';
$string['unithandling'] = 'Tratamiento de las unidades';
$string['unitincorrect'] = 'No proporcionó la unidad correcta';
$string['unitmandatory'] = 'Obligatorio';
$string['unitmandatory_help'] = '* La respuesta se calificará usando la unidad numérica indicada.

* Se aplicará penalización si el campo de la unidad está vacío';
$string['unitnotselected'] = 'Debe seleccionar una unidad.';
$string['unitonerequired'] = 'Debe introducir almenos una unidad';
$string['unitoptional'] = 'Unidad opcional';
$string['unitoptional_help'] = '* Si el campo de unidad no está vacío, la respuesta será calificada considerando también la unidad.
* Si la unidad está mal escrita o es desconocida la respuesta será considerada como no válida.';
$string['unitpenalty'] = 'Penalización de unidad';
$string['unitpenalty_help'] = 'La penalización se aplica si
* Se escribe un nombre de unidad sin definir en el campo de respuesta-unidad o
* Se escribe un nombre de unidad en el campo de respuesta-numérica';
$string['unitposition'] = 'Posición de unidad';
$string['units'] = 'Unidades';
$string['unitselect'] = 'menú emergente';
$string['unitx'] = 'Unidad {no}';
$string['validnumberformats'] = 'Formatos de número válidos';
$string['validnumberformats_help'] = '* números regulares 13500.67, 13 500.67, 13500,67 or 13 500,67

* si usa coma (,) como separador de miles, use SIEMPRE el punto (.) decimal, por ejemplo:
 13,500.67 : 13,500.

* para la forma exponencial, digamos 1.350067 * 10<sup>4</sup>, utilice
 1.350067 E4 : 1.350067 E04';
$string['validnumbers'] = '13500.67, 13 500.67, 13,500.67, 13500,67, 13 500,67, 1.350067 E4 or 1.350067 E04';
$string['xmustbenumeric'] = '{$a} debe ser un número.';
$string['xmustnotbenumeric'] = '{$a} no puede ser un número.';
$string['youmustenteramultiplierhere'] = 'Debe escribir un multiplicador aquí.';
