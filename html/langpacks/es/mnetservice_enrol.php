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
 * Strings for component 'mnetservice_enrol', language 'es', version '3.11'.
 *
 * @package     mnetservice_enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablecourseson'] = 'Cursos disponibles en {$a}';
$string['availablecoursesonnone'] = 'El host remoto <a href="{$a->hosturl}">{$a->hostname}</a> no ofrece ningún curso a nuestros usuarios.';
$string['clientname'] = 'Cliente de matriculaciones remoto';
$string['clientname_help'] = 'Esta herramienta le permite matricular y dar de baja a sus usuarios locales en hosts remotos que permitan hacerlo a través de la extensión (plugin) \'Matriculaciones remotas MNet';
$string['editenrolments'] = 'Editar matriculaciones';
$string['hostappname'] = 'Aplicación';
$string['hostname'] = 'Nombre del host';
$string['hosturl'] = 'URL del host remoto';
$string['nopublishers'] = 'No hay disponibles pares remotos.';
$string['noroamingusers'] = 'Los usuarios necesitan la capacidad \'{$a}\' en el contexto del sistema para inscribirse/matricularse en los cursos a distancia, sin embargo actualmente no hay usuarios con esta capacidad. Haga clic en el botón Continuar para asignar la capacidad necesaria a uno o más roles de su sitio.';
$string['otherenrolledusers'] = 'Otros usuarios matriculados';
$string['pluginname'] = 'Servicio de matriculación remota';
$string['privacy:metadata:mnetservice_enrol_enrolments'] = 'Servicio de matrícula remota';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltime'] = 'La hora en la que la matrícula fue modificada';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltype'] = 'El tipo de matrícula utilizada en el servidor remoto para matricular al usuario en su curso';
$string['privacy:metadata:mnetservice_enrol_enrolments:hostid'] = 'El ID del host remoto MNet';
$string['privacy:metadata:mnetservice_enrol_enrolments:remotecourseid'] = 'El ID del curso en el servidor remoto';
$string['privacy:metadata:mnetservice_enrol_enrolments:rolename'] = 'El nombre del rol en el servidor remoto';
$string['privacy:metadata:mnetservice_enrol_enrolments:tableexplanation'] = 'El servicio de matrícula remota almacena información sobre las matriculaciones de usuarios locales en cursos de equipos remotos.';
$string['privacy:metadata:mnetservice_enrol_enrolments:userid'] = 'El ID del usuario local en este servidor';
$string['refetch'] = 'Volver a buscar estado actualizado desde hosts remotos';
