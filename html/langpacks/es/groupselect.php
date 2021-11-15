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
 * Strings for component 'groupselect', language 'es', version '3.11'.
 *
 * @package     groupselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['assignedteacher'] = 'Asignado profesor sin permiso de edición';
$string['assigngroup'] = 'Asignar profesor sin permiso de edición a grupos';
$string['assigngroup_help'] = 'Si se establece, habilita un botón para asignar profesores sin permiso de edición a los grupos (si el curso tiene profesores sin permiso de edición). Los profesores sin permiso de edición asignados no son miembros del grupo, pero aparecen en el archivo de exportación y en la vista principal (si está configurada). Puede ser útil si el curso utiliza asistentes para manejar grupos.';
$string['cannotselectclosed'] = 'No podrá ser miembro de un grupo nunca más.';
$string['cannotselectmaxed'] = 'No puede unirse al grupo {$a} - número máximo de miembros alcanzado.';
$string['cannotselectnocap'] = 'No está autorizado para seleccionar un grupo.';
$string['cannotselectnoenrol'] = 'Es necesario estar matriculado en el curso para poder convertirse en un miembro del grupo.';
$string['cannotunselectclosed'] = 'No podrá abandonar el grupo nunca más';
$string['creategroup'] = 'Crear un nuevo grupo';
$string['deleteallgrouppasswords'] = 'Borra las contraseñas de todos los grupos';
$string['deleteemptygroups'] = 'Eliminar grupo cuando el último estudiante lo abandone';
$string['deleteemptygroups_help'] = 'Si se establece, elimina automáticamente el grupo cuando el último estudiante lo abandone';
$string['description'] = 'Descripción del grupo';
$string['duedate'] = 'Fecha límite';
$string['edittooltip'] = 'Haga clic para editar';
$string['enablepermissions'] = 'Permisos generales';
$string['eventexportlinkcreated'] = 'Enlace de exportación creado';
$string['eventgroupteacheradded'] = 'Supervisor añadido';
$string['export'] = 'Crear un enlace para descargar el archivo de datos del grupo (CSV)';
$string['export_download'] = 'Descargar archivo CSV';
$string['fromallgroups'] = 'Todos los grupos';
$string['globalpassword_help'] = 'Establecer una contraseña global para apuntarse a un grupo. Sobrescribe la contraseña de los estudiantes.';
$string['groupid'] = 'ID Grupo';
$string['groupselect:addinstance'] = 'Añadir un nuevo grupo auto-seleccionado';
$string['groupselect:assign'] = 'Permitir asignar profesores a los grupos';
$string['groupselect:create'] = 'Permitir creación de grupos';
$string['groupselect:export'] = 'Permitir la exportación de miembros de grupo';
$string['groupselect:select'] = 'Permitir apuntarse a un grupo';
$string['groupselect:unselect'] = 'Permitir abandonar un grupo';
$string['hidefullgroups'] = 'Ocultar grupos completos de la vista principal';
$string['hidefullgroups_help'] = 'Si se establece, se ocultan todos los grupos que han alcanzado el número máximo de miembros, de la vista principal (excluyendo el grupo al que pertenece el usuario). Puede ser útil si la actividad tiene muchos grupos.';
$string['hidegroupmembers'] = 'Oculta los miembros del grupo a los estudiantes';
$string['hidegroupmembers_help'] = 'Si se establece, todos los miembros del grupo serán ocultados a los estudiantes. Si los estudiantes tienen la capacidad de gestionar grupos (moodle/course:managegroups) o si pueden acceder a todos los grupos (moodle/site:accessallgroups), los miembros se seguirán mostrando.';
$string['hidesuspendedstudents'] = 'Oculta estudiantes suspendidos';
$string['hidesuspendedstudents_help'] = 'Si está seleccionado, los estudiantes suspendidos serán eliminados del cómputo de estudiantes y de las listas de grupos.';
$string['incorrectpassword'] = 'Contraseña incorrecta';
$string['managegroups'] = 'Administrar grupos';
$string['maxcharlenreached'] = 'Número máximo de carácteres alcanzado';
$string['maxgroupmembership'] = 'Número máximo de grupos que el estudiante puede seleccionar';
$string['maxgroupmembership_error_low'] = '¡Error: al menos un grupo tiene que ser seleccionable!';
$string['maxgroupmembership_help'] = 'Número máximo de grupos para participar. Un 0 significa que es posible no participar.';
$string['maxlimitreached'] = 'Número máximo alcanzado';
$string['maxmembers'] = 'Número máximo de miembros por grupo';
$string['maxmembers_error_low'] = '¡Error: usa 0 para indicar tamaño ilimitado!';
$string['maxmembers_error_smaller_minmembers'] = '¡Error: necesita ser mayor que el mínimo de participantes por grupo!';
$string['maxmembers_help'] = 'Número máximo de miembros por grupo, 0 para ilimitados';
$string['maxmembers_icon'] = 'El grupo tiene demasiados miembros';
$string['maxmembers_notification'] = '¡Tu grupo tiene demasiados miembros! El máximo es {$a}.';
$string['member'] = 'Miembro';
$string['membercount'] = 'Contador';
$string['membershidden'] = 'Lista de miembros no disponible';
$string['memberslist'] = 'Miembros';
$string['minmembers'] = 'Número mínimo de miembros por grupo';
$string['minmembers_error_bigger_maxmembers'] = '¡Error: el tamaño mínimo debe ser menor que el máximo de participantes por grupo!';
$string['minmembers_error_low'] = '¡Error: no se aceptan números negativos para el tamaño de grupo mínimo!';
$string['minmembers_help'] = 'Número mínimo de miembros por grupo. Añade notificaciones para los miembros de los grupos que se encuentran por debajo de este límite. El valor predeterminado es 0 (desactivado).';
$string['minmembers_icon'] = 'El grupo tiene menos miembros de los requeridos';
$string['minmembers_notification'] = 'Su grupo tiene menos miembros del requerido! El mínimo es {$a}.';
$string['miscellaneoussettings'] = 'Ajustes diversos';
$string['modulename'] = 'Auto-selección de grupo';
$string['modulename_help'] = '<p>Permite crear y seleccionar grupos a los propios estudiantes. Funcionalidades: </p><ul><li>Los estudiantes pueden crear grupos, con una descripción y protegerlos con una contraseña, si se quiere</li><li>Los estudiantes pueden elegir y unirse a grupos</li><li>Los supervisores se pueden asignar a grupos</li><li>El profesor puede exportar la lista de grupos del curso en un fichero csv</li><li>Plena compatibilidad con los grupos de Moodle: los grupos se pueden crear por cualquier otro método si fuese necesario, soporta entrega de tareas por grupo, etc.</li></ul>';
$string['modulenameplural'] = 'Auto-selección de grupos';
$string['nogroups'] = 'No hay grupos disponibles para seleccionar, lo lamentamos.';
$string['notavailableanymore'] = 'La selección de grupos no está disponible, lo lamentos (desde el {$a}).';
$string['notavailableyet'] = 'La selección de grupos estará disponible el {$a}.';
$string['notifyexpiredselection'] = 'Muestra mensaje si se ha alcanzado la fecha "Permitir apuntarse hasta"';
$string['notifyexpiredselection_help'] = 'Si se define, se mostrará un mensaje si se ha alcanzado la fecha "Permitir apuntarse hasta"';
$string['ok'] = 'OK';
$string['password'] = 'Requiere contraseña';
$string['pluginadministration'] = 'Administración del módulo';
$string['pluginname'] = 'Auto-selección de grupo';
$string['privacy:metadata'] = 'El plugin Auto-selección de grupo no almacena ningún dato personal.';
$string['removeallsupervisors'] = 'Elimina los supervisores de grupo';
$string['saving'] = 'Guardando...';
$string['select'] = 'Apuntarse al grupo {$a}';
$string['selectconfirm'] = '¿Realmente quiere apuntarse al grupo <em>{$a}</em>?';
$string['selectgroupaction'] = 'Selecciona grupo';
$string['showassignedteacher'] = 'Mostrar profesores asignados';
$string['showassignedteacher_help'] = 'Si se establece, los profesores asignados se mostrarán en la lista de miembros del grupo. Útil si los estudiantes necesitan conocer a sus profesores.';
$string['studentcancreate'] = 'Los estudiantes pueden crear grupos';
$string['studentcancreate_help'] = 'Si se establece, los estudiantes sin grupo (en el agrupamiento seleccionado) pueden crear grupos';
$string['studentcanjoin'] = 'Los participantes pueden unirse a grupos';
$string['studentcanjoin_help'] = 'Si se establece, los participantes pueden unirse a grupos. Este permiso puede establecerse más adelante en la competencias del rol.';
$string['studentcanleave'] = 'Los participantes pueden abandonar los grupos';
$string['studentcanleave_help'] = 'Si se establece, los participantes pueden abandonar los grupos. Este permiso puede establecerse más adelante en las competencias del rol.';
$string['studentcansetdesc'] = 'Los estudiantes pueden establecer y editar la descripción del grupo';
$string['studentcansetdesc_help'] = 'Si se establece, los estudiantes pueden fijar y editar la descripción del grupo al crearlo, y sus miembros podrán editarla';
$string['studentcansetenrolmentkey'] = 'Los estudiantes podrán poner una clave para unirse a los grupos';
$string['studentcansetenrolmentkey_help'] = 'Si se establece, los estudiantes podrán poner una clave de inscripción para apuntarse al grupo';
$string['studentcansetgroupname'] = 'Los estudiantes podrán poner nombre a los grupos que creen';
$string['studentcansetgroupname_help'] = 'Si se establece, los estudiantes podrán poner nombre a los grupos';
$string['supervisionrole'] = 'Rol de supervisor';
$string['supervisionrole_help'] = 'Define el rol de supervisor (por defecto profesores sin permisos de edición)';
$string['targetgrouping'] = 'Selecionar grupo desde el agrupamiento';
$string['timeavailable'] = 'Permitir apuntarse desde';
$string['timeavailable_error_past_timedue'] = '¡Error: no se puede empezar después de la fecha límite!';
$string['timedue'] = 'Permitir apuntarse hasta';
$string['timedue_error_pre_timeavailable'] = '¡Error: no se puede acabar antes de la fecha de inicio!';
$string['unassigngroup'] = 'Desasignar supervisores de los grupos';
$string['unassigngroup_confirm'] = 'Esta acción va a desasignar a los supervisores de los grupos. ¿Estás seguro?';
$string['unselect'] = 'Abandonar el grupo {$a}';
$string['unselectconfirm'] = '¿Realmente quiere abandonar el grupo <em>{$a}</em>?';
