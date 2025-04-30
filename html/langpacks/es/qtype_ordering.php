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
 * Strings for component 'qtype_ordering', language 'es', version '4.4'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Posición absoluta';
$string['addmultipleanswers'] = 'Añadir {$a} elementos más';
$string['addsingleanswer'] = 'Añadir un elemento más';
$string['allornothing'] = 'Todo o nada';
$string['answer'] = 'Texto del elemento';
$string['correctitemsnumber'] = 'Elementos correctos: {$a}';
$string['correctorder'] = 'El orden correcto de estos elementos es el siguiente:';
$string['defaultanswerformat'] = 'Formato de respuesta por defecto';
$string['defaultquestionname'] = 'Coloque los siguientes elementos en el orden correcto.';
$string['draggableitemno'] = 'Elemento arrastrable {no}';
$string['draggableitems'] = 'Elementos arrastrables';
$string['duplicatesnotallowed'] = 'No está permitido duplicar elementos arrastrables. La cadena "{$a->text}" ya se está usando en {$a->item}.';
$string['editingordering'] = 'Editar orden de las preguntas';
$string['gradedetails'] = 'Detalles de calificación';
$string['gradingtype'] = 'Tipo de calificación';
$string['gradingtype_help'] = '**Todo o nada**
&nbsp; Si todos los elementos están en la posición correcta, entonces se consigue la puntuación total. Si no, la puntuación es cero.

**Posición absoluta**
&nbsp; Un elemento se considera correcto si está en la misma posición que en la respuesta correcta. La puntuación más alta posible para la pregunta es **la misma que** el número de elementos mostrado al estudiante.

**Relativo a la posición correcta**
&nbsp; Un elemento se considera correcto si está en la misma posición que en la respuesta correcta. Los elementos correctos reciben una puntuación igual al número de elementos mostrados menos uno. Los elementos incorrectos reciben una puntuación igual al número de elementos mostrados menos uno y menos la distancia al elemento de su posición correcta. Así, si ***n*** elementos se muestran al alumno, el número de puntos disponible para cada elemento es ***(n - 1)***, y la puntuación mayor disponible para la pregunta es ***n x (n - 1)***, que es lo mismo que ***(n² - n)***.

**Relativo al siguiente elemento (excluyendo el último)**
&nbsp; Un elemento se considera correcto si sigue al mismo elemento de la respuesta correcta. El elemento de la última posición no se comprueba. Así, la puntuación máxima de la pregunta es el número de elementos mostrados **menos uno**.

**Relativo al elemento siguiente (incluyendo el último)**
&nbsp; Un elemento se considera correcto si le sigue el mismo elemento de la respuesta correcta. Esto incluye al último elemento, que no tiene ninguno siguiéndole. Así, la puntuación máxima de la pregunta es **igual** al número de elementos mostrados al estudiante.

**Relativo tanto al elemento anterior como al posterior**
&nbsp; Un elemento se considera correcto si tanto el anterior como el posterior son los mismos que en la respuesta correcta. El primer elemento no debe tener elemento anterior y el último no debe tener elemento posterior. Así, hay dos puntos posibles para cada elemento, y la puntuación máxima posible es el **doble** del número de elementos mostrados al estudiante.

**Relativo a TODOS los elementos previos y siguientes**
&nbsp; Un elemento se considera correcto si le preceden todos los mismos elementos de la respuesta anterior, y le siguen todos los mismos de la respuesta correcta. El orden de los elementos anteriores no importa, y tampoco importa el orden de los elementos siguientes. Así, si se le muestran al estudiante ***n*** elementos, el número de puntos disponibles para cada elemento es ***(n - 1)***, y la puntuación máxima disponible para la pregunta es ***n x (n - 1)***, que es lo mismo que ***(n² - n)***.

**Subconjunto más largo ordenado**
&nbsp; La calificación es el número de elementos del mayor subconjunto ordenado de elementos. La calificación máxima posible es la misma que el número de elementos mostrado. Un subconjunto debe tener al menos dos elementos. Los subconjuntos no necesariamente tienen que empezar por el primer elemento (aunque pueden) y no tienen que ser necesariamente contiguos (aunque pueden serlo). Si hay cadenas de múltiples subconjuntos de igual logitud, los elementos del subconjunto que se encuentre primero, cuando se busca de izquierda a derecha, serán los que se muestren como correctos. Los demás se marcarán como incorrectos.

**Subconjunto más largo contiguo**
&nbsp; La calificación es el número de elementos del subconjunto mayor de elementos. La calificación máxima posible es la misma que el número de elementos mostrado. Un subconjunto puede tener al menos dos elementos. Los subconjuntos no tienen que empezar necesariamente por el primer elemento (aunque pueden) y DEBEN SER CONTIGUOS. Donde haya cadenas de múltiples elementos de la misma longitud, los elementos del subconjunto que se haya encontrado antes, al buscar de izquierda a derecha, serán los que se muestren como correctos. Los demás se marcarán como incorrectos.';
$string['highlightresponse'] = 'Marcar respuesta como correcta o incorrecta';
$string['horizontal'] = 'Horizontal';
$string['incorrectitemsnumber'] = 'Elementos incorrectos: {$a}';
$string['layouttype'] = 'Disposición de elementos';
$string['layouttype_help'] = 'Elija entre disponer los elementos horizontal o verticalmente';
$string['longestcontiguoussubset'] = 'Subconjunto más largo contiguo';
$string['longestorderedsubset'] = 'Subconjunto más largo ordenado';
$string['moved'] = '{$a->item} movido. Nueva posición: {$a->position} de {$a->total}.';
$string['moveleft'] = 'Mover a la izquierda';
$string['moveright'] = 'Mover a la derecha';
$string['noresponsedetails'] = 'Lo sentimos, ningún detalle está disponible para la respuesta a esta pregunta.';
$string['noscore'] = 'Sin puntuación';
$string['notenoughanswers'] = 'Las preguntas para ordenar deben tener más de {$a} respuestas.';
$string['notenoughsubsetitems'] = 'Un subconjunto debe tener al menos {$a} elementos.';
$string['numberingstyle'] = '¿Numerar las opciones?';
$string['numberingstyle123'] = '1., 2., 3., ...';
$string['numberingstyleABCD'] = 'A., B., C., ...';
$string['numberingstyleIIII'] = 'I., II., III., ...';
$string['numberingstyle_desc'] = 'El estilo de numeración por defecto.';
$string['numberingstyle_help'] = 'Elija el estilo de numeración por defecto para los elementos arrastrables de esta pregunta.';
$string['numberingstyleabc'] = 'a., b., c., ...';
$string['numberingstyleiii'] = 'i., ii., iii., ...';
$string['numberingstylenone'] = 'Sin numeración';
$string['partialitemsnumber'] = 'Elementos parcialmente correctos: {$a}';
$string['pluginname'] = 'Poner en orden';
$string['pluginname_help'] = 'Varios elementos aparecen desordenados. Se pueden arrastrar en un orden significativo.';
$string['pluginname_link'] = 'question/type/ordering';
$string['pluginnameadding'] = 'Añadir una pregunta de tipo Poner en orden';
$string['pluginnameediting'] = 'Modificar una pregunta de Poner en orden';
$string['pluginnamesummary'] = 'Colocar los elementos desordenados en un orden significativo.';
$string['positionx'] = 'Posición {$a}';
$string['privacy:preference:gradingtype'] = 'El tipo de calificación.';
$string['privacy:preference:layouttype'] = 'La disposición de los elementos.';
$string['privacy:preference:numberingstyle'] = 'El estilo de numeración de las opciones.';
$string['privacy:preference:selectcount'] = 'El conteo de selección.';
$string['privacy:preference:selecttype'] = 'El tipo de selección del elemento.';
$string['privacy:preference:showgrading'] = 'Si se deben mostrar los detalles de calificación o no.';
$string['regradeissuenumitemschanged'] = 'El número de elementos arrastrables ha cambiado.';
$string['relativeallpreviousandnext'] = 'Relativo a TODOS los elementos previos y siguientes.';
$string['relativenextexcludelast'] = 'Relativo al elemento siguiente (excluyendo el último).';
$string['relativenextincludelast'] = 'Relativo al elemento siguiente (incluyendo el último).';
$string['relativeonepreviousandnext'] = 'Relativo tanto al elemento anterior como al posterior.';
$string['relativetocorrect'] = 'Relativo a la posición correcta.';
$string['removeeditor'] = 'Eliminar editor HTML';
$string['removeitem'] = 'Eliminar elemento arrastrable';
$string['scoredetails'] = 'A continuación se muestran las puntuaciones de cada elemento de esta respuesta:';
$string['selectall'] = 'Seleccionar todos los elementos';
$string['selectcontiguous'] = 'Seleccionar un subconjunto contiguo de elementos';
$string['selectcount'] = 'Tamaño del subconjunto';
$string['selectcount_help'] = 'El número de elementos que se mostrarán cuando la pregunta aparezca en un cuestionario';
$string['selectrandom'] = 'Seleccione un subconjunto aleatorio de elementos';
$string['selecttype'] = 'Tipo de elemento de selección';
$string['selecttype_help'] = 'Elja si mostrar todos los elementos o un subconjunto de los elementos.';
$string['showgrading'] = 'Detalles de calificación';
$string['showgrading_help'] = 'Elja si mostrar u ocultar detalles del cálculo de la puntuación cuando un estudiante revisa una respuesta a esta pregunta de ordenar.';
$string['vertical'] = 'Vertical';
