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
 * Strings for component 'enrol_flatfile', language 'es', version '3.11'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Codificación de archivos';
$string['expiredaction'] = 'Acción cuando caduca la matrícula';
$string['expiredaction_help'] = 'Seleccione la acción a realizar cuando finalice el periodo de matriculación del usuario. Por favor, tenga en cuenta que algunos datos de usuario y de configuración se eliminan del curso durante el proceso de baja.';
$string['filelockedmail'] = 'El fichero de texto empleado en matriculaciones basadas en archivo ({$a}) no puede ser eliminado por el proceso de \'cron\'. Esto generalmente significa que los permisos son erróneos. Por favor, corrija los permisos para que Moodle puede eliminar el archivo, de lo contrario, podría ser procesado en varias ocasiones.';
$string['filelockedmailsubject'] = 'Error importante: Archivo de matriculación';
$string['flatfile:manage'] = 'Gestionar manualmente la matriculación de usuario';
$string['flatfile:unenrol'] = 'Dar de baja usuarios del curso manualmente';
$string['flatfileenrolments'] = 'Inscripciones de archivos planos (CSV)';
$string['flatfilesync'] = 'Sincronización de fichero plano de matrículas';
$string['location'] = 'Ubicación del archivo';
$string['location_desc'] = 'Especifique la ruta completa al archivo de matriculaciones. El archivo se borra automáticamente después del proceso.';
$string['mapping'] = 'Mapeo de archivos planos de rol';
$string['messageprovider:flatfile_enrolment'] = 'Mensajes de archivos planos de matriculación';
$string['notifyadmin'] = 'Notificar al administrador';
$string['notifyenrolled'] = 'Notificar a los usuaruos matriculados';
$string['notifyenroller'] = 'Notificar al usuario responsable de las matriculaciones.';
$string['pluginname'] = 'Archivo plano (CSV)';
$string['pluginname_desc'] = 'Este método comprobará habitualmente y procesará un archivo de texto con un formato especial en la ubicación que usted especifique. El archivo es un archivo separado por comas que debe tener cuatro o seis campos por línea:

<pre class="informationbox">
* operation, role, idnumber(user), idnumber(course) [, starttime, endtime] donde:

* operation = add | del
* role = student | teacher | teacheredit
* idnumber(user) = idnumber in the user table NB not id
* idnumber(course) = idnumber in the course table NB not id
* starttime = start time (in seconds since epoch) - optional
* endtime = end time (in seconds since epoch) - optional </pre>

Será similar algo así:

 <pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'El complemento de inscripción de archivos planos (CSV) puede almacenar datos personales relacionados con inscripciones futuras en la tabla enrol_flatfile.';
$string['privacy:metadata:enrol_flatfile:action'] = 'La acción de inscripción esperada en la fecha indicada.';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'El ID del curso con el que está asociada la matrícula';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'El ID del rol para asignar o desasignar';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'El momento en el que finaliza la matrícula';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'El momento en el que la matrícula es modificada';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'El momento en el que empieza la matrícula';
$string['privacy:metadata:enrol_flatfile:userid'] = 'El ID del usuario asociado a la asignación de rol';
