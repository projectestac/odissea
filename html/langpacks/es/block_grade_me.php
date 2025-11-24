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
 * Strings for component 'block_grade_me', language 'es', version '4.5'.
 *
 * @package     block_grade_me
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alt_gradebook'] = 'Ir al libro de calificaciones de {$a->course_name} ...';
$string['alt_mark'] = 'Comprobar';
$string['alt_mod'] = 'Ir al libro de calificaciones de {$a->mod_name} ...';
$string['datetime'] = '%d de %B, %H:%M';
$string['excess'] = 'Hay más de {$a->maxcourses} cursos con trabajo sin calificar.';
$string['expand'] = 'Colapsar / Expandir todo';
$string['grade_me:addinstance'] = 'Añadir un nuevo bloque "Califícame"';
$string['grade_me:myaddinstance'] = 'Añadir un nuevo bloque "Califícame" a la página "Mi Moodle"';
$string['grade_me_tools'] = 'Herramientas';
$string['grade_me_tools_desc'] = '<p><a href="{$a}/blocks/grade_me/quiz_update_ngrade.php">Actualizar los intentos de cuestionario que necesitan calificación</a></p>';
$string['link_grade_img'] = 'Calificar tarea...';
$string['link_gradebook'] = 'Ir a {$a->course_name}…';
$string['link_gradebook_icon'] = 'Ir al libro de calificaciones de {$a->course_name}…';
$string['link_mod'] = 'Ir a {$a->mod_name}';
$string['link_mod_img'] = 'Ir a {$a->mod_name} en el libro de calificaciones...';
$string['link_user_profile'] = 'Perfil de {$a->first_name}';
$string['nothing'] = '¡No hay nada que calificar!';
$string['pluginname'] = 'Califícame';
$string['pluginname-reset'] = 'Califícame - resetear tabla';
$string['quiz_update_ngrade_complete'] = 'Actualización completa';
$string['quiz_update_ngrade_success'] = 'Lista de intentos de cuestionario actualizada correctamente, ahora hay {$a} preguntas que necesitan calificación.';
$string['settings_adminviewall'] = 'Los administradores lo ven todo';
$string['settings_configadminviewall'] = 'Da a los administradores permiso para ver todos los trabajos sin calificar — no solo en los cursos en que tiene un rol de calificador.';
$string['settings_configenablepre'] = '¿Debe "Califícame" mostrar la actividad sin calificar del módulo "{$a->plugin_name}"?';
$string['settings_configmaxage'] = 'La antigüedad máxima de actividades calificables, en días, a mostrar. Los elementos más antiguos que esto estarán ocultos. Introduzca 0 para no poner límite.';
$string['settings_configmaxcourses'] = 'Pone el número máximo de cursos no callificados a mostrar. Si se pone un valor demasiado alto puede afectar al rendimiento.';
$string['settings_configshowhidden'] = 'Permitir mostrar actividades a calificar en cursos ocultos';
$string['settings_enablepre'] = 'Mostrar';
$string['settings_maxage'] = 'Antigüedad máxima';
$string['settings_maxcourses'] = 'Número máximo de cursos mostrados';
$string['settings_showhidden'] = 'Elementos ocultos en el curso mostrados';
$string['title'] = 'Califícame';
