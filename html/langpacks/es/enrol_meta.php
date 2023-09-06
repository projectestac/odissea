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
 * Strings for component 'enrol_meta', language 'es', version '4.1'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Agregar al grupo';
$string['coursesort'] = 'Ordenar ista de cursos';
$string['coursesort_help'] = 'Esto determina si la lista de cursos a los que acceder siguen un orden predeterminado (el orden configurado en Administración>Cursos>Administrar cursos y categorías) o alfabéticamente según los ajustes del curso.';
$string['creategroup'] = 'Crear nuevo grupo';
$string['defaultgroupnametext'] = '{$a->name} curso {$a->increment}';
$string['enrolmetasynctask'] = 'Tarea de sincronización de metainscripción';
$string['linkedcourse'] = 'Enlazar curso';
$string['meta:config'] = 'Configurar instancias de meta-matriculación';
$string['meta:selectaslinked'] = 'Seleccionar curso como meta-enlazado';
$string['meta:unenrol'] = 'Dar de baja usuarios suspendidos';
$string['nosyncroleids'] = 'Roles que no están sincronizados';
$string['nosyncroleids_desc'] = 'Por defecto, todas las asignaciones de rol a nivel de curso se sincronizan de  cursos-padre a cursos-hijo. Los roles seleccionados aquí no se incluirán en el proceso de sincronización. Los roles actuales se actualizarán en la próxima ejecución del \'cron\'.';
$string['pluginname'] = 'Meta-enlace de curso';
$string['pluginname_desc'] = 'La extensión de matriculación meta-enlace sincroniza matrículas y roles entre dos cursos diferentes.';
$string['privacy:metadata:core_group'] = 'Enroll meta plugin puede crear un nuevo grupo o usar un grupo existente para agregar a todos los participantes del curso vinculado.';
$string['syncall'] = 'Sincronizar todos los usuarios inscritos';
$string['syncall_desc'] = 'Si se habilita todos los usuarios matriculados están sincronizados, incluso si no tienen ningún rol en el curso-padre; si está deshabilitado sólo los usuarios que tienen al menos un rol sincronizado se matriculan en el curso-hijo.';
$string['wscannotcreategroup'] = 'No hay permiso para crear grupo en curso enlazado con id = {$a}.';
$string['wsinvalidcourse'] = 'El curso con id = {$a} no existe o no tiene permiso para enlazara a inscripción meta.';
$string['wsinvalidmetacourse'] = 'El curso meta con id = {$a} no existe o no tiene permiso para añadir instancia de inscripción.';
$string['wsnoinstancesspecified'] = 'Sin instancia especificada';
