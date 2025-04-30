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
 * Strings for component 'enrol_meta', language 'es', version '4.4'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Agregar al grupo';
$string['coursesort'] = 'Ordenar lista de cursos';
$string['coursesort_help'] = 'Cuando se conecta el curso origen con el curso destino, ¿cómo deberían ordenarse los cursos origen?';
$string['creategroup'] = 'Crear nuevo grupo';
$string['defaultgroupnametext'] = '{$a->name} curso {$a->increment}';
$string['enrolmetasynctask'] = 'Tarea de sincronización de metainscripción';
$string['linkedcourse'] = 'Enlazar curso';
$string['meta:config'] = 'Configurar instancias de meta-matriculación';
$string['meta:selectaslinked'] = 'Seleccionar curso como meta-enlazado';
$string['meta:unenrol'] = 'Dar de baja usuarios suspendidos';
$string['nosyncroleids'] = 'Roles que no están sincronizados';
$string['nosyncroleids_desc'] = 'Seleccione aquellos roles que no deban sincronizarse entre el curso origen y el curso destino.';
$string['pluginname'] = 'Meta-enlace de curso';
$string['pluginname_desc'] = 'La extensión de matriculación meta-enlace sincroniza matrículas y roles desde el curso origen al curso destino.';
$string['privacy:metadata:core_group'] = 'Enrol meta plugin puede crear un nuevo grupo o usar un grupo existente para agregar a todos los participantes del curso origen.';
$string['samemetacourse'] = 'Usted no puede crear un meta enlace del curso a sí mismo';
$string['syncall'] = 'Sincronizar todos los usuarios inscritos';
$string['syncall_desc'] = 'Si se habilita todos los usuarios matriculados están sincronizados, incluso si no tienen ningún rol en el curso-padre; si está deshabilitado sólo los usuarios que tienen al menos un rol sincronizado se matriculan en el curso-hijo.';
$string['unknownmetacourse'] = 'Nombre corto de meta curso desconocido';
$string['wscannotcreategroup'] = 'No hay permiso para crear grupo en curso enlazado con id = {$a}.';
$string['wsinvalidcourse'] = 'El curso con id = {$a} no existe o no tiene permiso para añadir un meta enlace de curso.';
$string['wsinvalidmetacourse'] = 'El curso meta con id = {$a} no existe o no tiene permiso para añadir instancia de inscripción.';
$string['wsnoinstancesspecified'] = 'Sin instancia especificada';
