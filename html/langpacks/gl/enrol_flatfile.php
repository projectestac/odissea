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
 * Strings for component 'enrol_flatfile', language 'gl', version '4.5'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Codificación do ficheiro';
$string['expiredaction'] = 'Acción de expiración da matrícula';
$string['expiredaction_help'] = 'Seleccione a acción que se realizará cando expire a matrícula do usuario. Vexa que algúns datos de usuario e opcións se depuran do curso durante a matriculación no curso.';
$string['filelockedmail'] = 'O ficheiro de texto que está a utilizar para as matriculacións baseadas no ficheiro({$a}) non poderá ser eliminado polo proceso cron.  Normalmente, isto significa que os permisos non son apropiados.  Sinale os permisos para que Moodle poida eliminar o ficheiro, no caso contrario poderá ser procesado repetidamente.';
$string['filelockedmailsubject'] = 'Erro importante: Ficheiro de matriculación';
$string['flatfile:manage'] = 'Xestionar manualmente a matriculación dos usuarios';
$string['flatfile:unenrol'] = 'Desmatricular manualmente os usuarios do curso';
$string['flatfileenrolments'] = 'Matriculacións por ficheiro simple (CSV)';
$string['flatfilesync'] = 'Sincronización do ficheiro simple de matrícula';
$string['location'] = 'Localización do ficheiro';
$string['location_desc'] = 'Especifique a ruta completa ao ficheiro de matriculación. Este ficheiro elimínase automaticamente após o procesamento.';
$string['mapping'] = 'Asignación do ficheiro simple de matrícula';
$string['messageprovider:flatfile_enrolment'] = 'Mensaxes do ficheiro simple de matrícula';
$string['notifyadmin'] = 'Notificarlle ao administrador';
$string['notifyenrolled'] = 'Notificarlle os usuarios matriculados';
$string['notifyenroller'] = 'Notificarlle ao usuario responsábel das matriculacións';
$string['pluginname'] = 'Ficheiro simple (CSV)';
$string['pluginname_desc'] = 'Este método comprobará repetidamente e procesará un ficheiro de texto formatado especialmente na localización que vostede especifique.
O ficheiro contén os valores separados por comas e asúmese que ten entre catro e seis campos por liña:

    operation, role, user idnumber, course idnumber [, starttime [, endtime]]

onde:

* operation - add | del
* role - student | teacher | teacheredit
* user idnumber - idnumber na táboa de usuarios MAIS NON É Id
* course idnumber - idnumber na táboa do curso MAIS NON É Id
* starttime - hora de inicio (en segundos após o 1.1.1970 ás 0 h UTC) - opcional
* endtime - hora de término (en segundos após o 1.1.1970 ás 0 h UTC) - opcional

Podería resultar algo así:

<pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'O engadido de matriculación por ficheiro simple (CSV) pode almacenar datos persoais relativos ás futuras matriculacións na táboa enrol_flatfile.';
$string['privacy:metadata:enrol_flatfile:action'] = 'A acción de matriculación prevista na data determinada.';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'O ID do curso co que se relaciona a matriculación';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'O ID do rol a asignar ou sen asignar';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'O momento no que remata o cambio de matriculación.';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'O momento da modificación deste cambio de matriculación.';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'O momento no que comeza o cambio de matriculación.';
$string['privacy:metadata:enrol_flatfile:userid'] = 'O ID do usuario co que se relaciona a asignación de rol';
