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
 * Strings for component 'qtype_ordering', language 'ca', version '4.4'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Posició absoluta';
$string['addmultipleanswers'] = 'Afegeix {$a} elements més';
$string['addsingleanswer'] = 'Afegeix un element més';
$string['allornothing'] = 'Tot o res';
$string['correctitemsnumber'] = 'Elements correctes: {$a}';
$string['correctorder'] = 'L\'ordre correcte d\'aquests elements és el següent:';
$string['draggableitemno'] = 'Element arrossegable {no}';
$string['draggableitems'] = 'Elements arrossegables';
$string['editingordering'] = 'Edició de la pregunta d\'ordenació';
$string['gradedetails'] = 'Detalls de la qualificació';
$string['gradingtype'] = 'Tipus de qualificació';
$string['gradingtype_help'] = '**Tot o res**
&nbsp; Si tots els elements són a la posició correcta, s\'atorgarà la puntuació total. En cas contrari, la puntuació és zero.

**Posició absoluta**
&nbsp; Un element es considera correcte si es troba en la mateixa posició que a la resposta correcta. La puntuació més alta possible per a la pregunta és **igual al** nombre d\'elements que es mostren a l\'estudiant.

**Relatiu a la posició correcta**
&nbsp; Un element es considera correcte si es troba en la mateixa posició que a la resposta correcta. Els elements correctes reben una puntuació igual al nombre d\'elements mostrats menys un. Els elements incorrectes reben una puntuació igual al nombre d\'elements mostrats menys un i menys la distància de l\'element des de la seva posició correcta. Així, si es mostren a l\'estudiant ***n*** elements, el nombre de notes disponibles per a cada element és ***(n - 1)*** i la nota més alta disponible per a la pregunta és *** n x (n - 1)***, que és el mateix que ***(n² - n)***.

**Relatiu a l\'element següent (se n\'exclou el darrer)**
&nbsp; Un element es considera correcte si va seguit del mateix element que hi ha a la resposta correcta. L\'element a la darrera posició no està marcat. Així, la puntuació més alta possible per a la pregunta és **un menys que** el nombre d\'elements que es mostren a l\'estudiant.

**Relatiu a l\'element següent (se n\'inclou el darrer)**
&nbsp; Un element es considera correcte si va seguit del mateix element que hi ha a la resposta correcta. Això inclou el darrer element que no ha de tenir cap element després. Així, la puntuació més alta possible per a la pregunta és **igual al** nombre d\'elements que es mostren a l\'estudiant.

**Relatiu tant als elements anteriors com als següents**
&nbsp; Un element es considera correcte si tant els elements anteriors com els següents són els mateixos que a la resposta correcta. El primer element no hauria de tenir cap element anterior i el darrer element no hauria de tenir cap element següent. Així, hi ha dos punts possibles per a cada element, i la puntuació més alta possible per a la pregunta és **el doble** del nombre d\'elements que es mostren a l\'estudiant.

**Relatiu a TOTS els elements anteriors i següents**
&nbsp; Un element es considera correcte si va precedit de tots els mateixos elements que hi ha a la resposta correcta, i el segueixen tots els mateixos elements que hi ha a la resposta correcta. L\'ordre dels elements anteriors no importa, ni l\'ordre dels elements següents. Així, si es mostren a l\'estudiant ***n*** elements, el nombre de notes disponibles per a cada element és ***(n - 1)*** i la nota més alta disponible per a la pregunta és *** n x (n - 1)***, que és el mateix que ***(n² - n)***.

**Subconjunt ordenat més llarg**
&nbsp; La qualificació és el nombre d\'elements del subconjunt d\'elements ordenat més llarg. La nota més alta possible és la mateixa que el nombre d\'elements que es mostren. Un subconjunt ha de tenir almenys dos elements. Els subconjunts no necessiten començar pel primer element (però poden fer-ho) i no cal que siguin contigus (però poden ser-ho). Quan hi ha diversos subconjunts d\'igual longitud, els elements del subconjunt que es trobi primer, quan cerqueu d\'esquerra a dreta, es mostraran com a correctes. Els altres elements es marcaran com a incorrectes.

**Subconjunt contigu més llarg**
&nbsp; La qualificació és el nombre d\'elements del subconjunt d\'elements contigu més llarg. La nota més alta possible és la mateixa que el nombre d\'elements que es mostren. Un subconjunt ha de tenir almenys dos elements. Els subconjunts no necessiten començar pel primer element (però poden fer-ho) i HAN DE SER CONTIGUS. Quan hi ha diversos subconjunts d\'igual longitud, els elements del subconjunt que es trobi primer, quan cerqueu d\'esquerra a dreta, es mostraran com a correctes. Els altres elements es marcaran com a incorrectes.';
$string['horizontal'] = 'Horitzontal';
$string['incorrectitemsnumber'] = 'Elements incorrectes: {$a}';
$string['layouttype'] = 'Disposició dels elements';
$string['layouttype_help'] = 'Tria si els elements s\'han de mostrar de manera vertical o horitzontal.';
$string['longestcontiguoussubset'] = 'Subconjunt contigu més llarg';
$string['longestorderedsubset'] = 'Subconjunt ordenat més llarg';
$string['moved'] = 'S\'ha mogut {$a->item}. Nova posició: {$a->position} de {$a->total}.';
$string['notenoughanswers'] = 'La preguntes d\'ordenació han de tenir més de {$a} respostes.';
$string['numberingstyle'] = 'Voleu numerar les opcions?';
$string['numberingstyle_help'] = 'Tria l\'estil de numeració per als elements arrossegables en aquesta pregunta.';
$string['numberingstylenone'] = 'Sense numeració';
$string['partialitemsnumber'] = 'Elements parcialment correctes: {$a}';
$string['pluginname'] = 'Ordenació';
$string['pluginname_help'] = 'Es mostren diversos elements desordenats. Aquests elements es poden arrossegar per aconseguir un ordre significatiu.';
$string['pluginname_link'] = 'question/type/ordering';
$string['pluginnameadding'] = 'Addició d\'una pregunta d\'ordenació';
$string['pluginnameediting'] = 'Edició d\'una pregunta d\'ordenació';
$string['pluginnamesummary'] = 'Posa els elements desordenats en un ordre significatiu.';
$string['privacy:preference:gradingtype'] = 'El tipus de qualificació.';
$string['privacy:preference:layouttype'] = 'La disposició dels elements';
$string['privacy:preference:selecttype'] = 'El tipus de selecció de l\'element';
$string['privacy:preference:showgrading'] = 'Aquest paràmetre estableix si es mostren o no els detalls de la qualificació.';
$string['relativeallpreviousandnext'] = 'Relatiu a TOTS els elements anteriors i següents';
$string['relativenextexcludelast'] = 'Relatiu a l\'element següent (se n\'exclou el darrer)';
$string['relativenextincludelast'] = 'Relatiu a l\'element següent (se n\'inclou el darrer)';
$string['relativeonepreviousandnext'] = 'Relatiu tant als elements anteriors com als següents';
$string['relativetocorrect'] = 'Relatiu a la posició correcta';
$string['scoredetails'] = 'Aquestes són les puntuacions de cada element en aquesta resposta:';
$string['selectall'] = 'Selecciona-ho tot';
$string['selectcontiguous'] = 'Selecciona un subconjunt contigu d\'elements';
$string['selectrandom'] = 'Selecciona un subconjunt aleatori d\'elements';
$string['selecttype'] = 'Tipus de selecció de l\'element';
$string['selecttype_help'] = 'Tria si es mostren tots els elements o només un subconjunt d\'aquests.';
$string['showgrading'] = 'Detalls de la qualificació';
$string['showgrading_help'] = 'Trieu si voleu mostrar o amagar els detalls del càlcul de la puntuació quan un estudiant revisa una resposta a aquesta pregunta d\'ordenació.';
