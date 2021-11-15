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
 * Strings for component 'qtype_random', language 'es', version '3.11'.
 *
 * @package     qtype_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configselectmanualquestions'] = '¿Puede el tipo de pregunta aleatoria seleccionar una pregunta calificada manualmente cuando está haciendo su selección aleatoria a partir de una pregunta obtenida de una categoría?';
$string['includingsubcategories'] = 'Incluyendo subcategorías';
$string['pluginname'] = 'Aleatoria';
$string['pluginname_help'] = 'Una pregunta aleatoria no es un tipo de pregunta sino una manera de insertar en un cuestionario una pregunta escogida al azar entre las de una categoría determinada.';
$string['pluginnameediting'] = 'Editando una pregunta aleatoria';
$string['privacy:metadata'] = 'El complemento de tipo de pregunta aleatoria no almacena ningún dato personal.';
$string['randomqname'] = 'Aleatoria ({$a})';
$string['randomqnamefromtop'] = '¡Pregunta aleatoria defectuosa! Elimina esta pregunta.';
$string['randomqnamefromtoptags'] = '¡Pregunta aleatoria defectuosa! Elimina esta pregunta.';
$string['randomqnametags'] = 'Aleatorio ({$a->category}, etiquetas: {$a->tags})';
$string['randomqplusname'] = 'Aleatorio ({$a} y subcategorías)';
$string['randomqplusnamecourse'] = 'Aleatorio (Cualquier categoría en este curso)';
$string['randomqplusnamecoursecat'] = 'Aleatorio (Cualquier categoría dentro de la categoría de cursos {$a})';
$string['randomqplusnamecoursecattags'] = 'Aleatorio ((Cualquier categoría dentro de la categoría de cursos {$a}, etiquetas: {$a->tags})';
$string['randomqplusnamecoursetags'] = 'Aleatorio (Cualquier categoría en este curso, etiquetas: {$a->tags})';
$string['randomqplusnamemodule'] = 'Aleatorio (Cualquier categoría de este cuestionario)';
$string['randomqplusnamemoduletags'] = 'Aleatorio (Cualquier categoría de este cuestionario, etiquetas: {$a->tags})';
$string['randomqplusnamesystem'] = 'Aleatorio (Cualquier categoría a nivel de sistema)';
$string['randomqplusnamesystemtags'] = 'Aleatorio (Cualquier categoría a nivel de sistema, etiquetas: {$a->tags})';
$string['randomqplusnametags'] = 'Aleatorio ({$a->category} y subcategorías, etiquetas: {$a->tags})';
$string['selectedby'] = '{$a->questionname} seleccionado por {$a->randomname}';
$string['selectmanualquestions'] = 'Las preguntas aleatorias pueden utilizar preguntas calificadas manualmente';
$string['taskunusedrandomscleanup'] = 'Eliminar las preguntas aleatorias sin utilizar';
