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
 * Strings for component 'enrol_metabulk', language 'es', version '4.1'.
 *
 * @package     enrol_metabulk
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Añadir al grupo';
$string['coursesort'] = 'Ordenar lista de cursos';
$string['coursesort_help'] = 'Esto determina si es que la lista de cursos que pueden ser enlazados son ordenados por un orden (por ejemplo, el orden configurado en Administración del sitio > Cursos > Gestionar cursos y categorías) o alfabéticamente por configuración del curso.';
$string['creategroup'] = 'Crear nuevo grupo';
$string['defaultgroupnametext'] = '{$a->name} {$a->increment}';
$string['linkbulk'] = 'Enlace';
$string['linkcourses'] = 'Enlace a los cursos';
$string['linked'] = 'Cursos enlazados:';
$string['manage'] = 'Gestionar';
$string['metabulk:config'] = 'Configurar instancias de inscripción meta masiva';
$string['metabulk:selectaslinked'] = 'Seleccionar curso como meta enlazado';
$string['metabulk:unenrol'] = 'Des-inscribir usuarios suspendidos';
$string['next'] = 'Siguiente';
$string['nosyncroleids'] = 'Roles que no están sincronizados';
$string['nosyncroleids_desc'] = 'Por defecto todas las asignaciones de rol a nivel de curso son sincronizadas del curso padre al curso hijo. Los roles que sean seleccionados aquí no seránincluidos en el proceso de sincronización. Los roles disponibles para sincronización serán actualizados en la siguiente ejecución del cron.';
$string['numberofcourses'] = '{$a} Cursos';
$string['pluginname'] = 'Enlace a curso meta masivo';
$string['pluginname_desc'] = 'El plugin de inscripción masiva a meta curso sincroniza inscripciones y roles en dos cursos diferentes.';
$string['syncall'] = 'Sincronizar a todos los usuarios inscritos';
$string['syncall_desc'] = 'Si se habilita, todos los usuarios inscritos son sincronizados aun y cuando no tuvieran rol en el curso paterno; si se deshabilita solamente los usuarios que tengan al menos un rol sincronizado serán inscritos dentro del curso hijo.';
$string['unlinkbulk'] = 'Des-enlazar';
$string['unlinked'] = 'Cursos des-enlazados:';
