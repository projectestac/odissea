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
 * Strings for component 'enrol_saml', language 'es', version '4.1'.
 *
 * @package     enrol_saml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Asignar rol';
$string['created_group_info'] = 'Descripción para nuevos grupos';
$string['created_group_info_description'] = 'Configure ene este campo el texto que será usado para la descripción de nuevos grupos creados por la extensión';
$string['defaultperiod'] = 'Periodo de matriculación por defecto';
$string['defaultperiod_desc'] = 'Configuración de la duración por defecto del periodo de matriculación (en segundos)';
$string['enrolledincourserole'] = 'Matriculado en "{$a->course}" como "{$a->role}"';
$string['enrolusers'] = 'Matricular usuarios';
$string['error_instance_creation'] = 'Existe una instancia inactiva de este plugin SAML para este curso "{$a}", actívela en lugar de crear una nueva instancia';
$string['group_prefix'] = 'Prefijo para grupos gestionados';
$string['group_prefix_description'] = 'Defina un prefijo si quiere que la extensión solamente gestione grupos que coinciden con el prefijo. Déjelo vacío para gestionar todos. Campo de múltiples valores separados por comas';
$string['logfile'] = 'Guardar archivo en bitácora';
$string['logfile_description'] = 'Si estuviera definido el archivo, la información de inscripción de cursos y grupos será almacenada (Usar una ruta absoluta o Moodle guardará este archivo dentro de la carpeta moodledata.';
$string['pluginname'] = 'Matriculaciones SAML';
$string['pluginname_desc'] = 'El plugin para matriculaciones SAML le permite a los usuarios ser auto-matriculados al entrar';
$string['saml:config'] = 'Configurar las instancias de matriculación en SAML';
$string['saml:enrol'] = 'Matricular usuarios';
$string['saml:manage'] = 'Gestionar matriculaciones de usuarios';
$string['saml:unenrol'] = 'Dar de baja usuarios del curso';
$string['saml:unenrolself'] = 'Darse de baja del curso';
$string['status'] = 'Habilitar matriculaciones SAML';
$string['status_desc'] = 'Permitirles acceso al curso a usuarios matriculados internamente. Esto debería conservarse habilitado en la mayoría de los casos.';
$string['status_help'] = 'Esta configuración determina si es que los usuarios pueden auto-matricularse mediante entrada a SAML.';
$string['statusdisabled'] = 'Deshabilitado';
$string['statusenabled'] = 'Habilitado';
$string['unenrolselfconfirm'] = '¿Realmente quiere dar de baja a "{$a->user}" del curso "{$a->course}"?';
$string['unenroluser'] = '¿Realmente quiere dar de baja a "{$a->user}" del curso "{$a->course}"?';
$string['unenrolusers'] = 'Dar de baja usuarios';
$string['wscannotenrol'] = 'La instancia del plugin SAML no puede matricular un usuario en el curso con ID = {$a->courseid}';
$string['wsnoinstance'] = 'La instancia del plugin SAML no existe o está deshabilitada para el curso  (ID = {$a->courseid})';
$string['wsusercannotassign'] = 'Usted no tiene permisos para asignar este rol ({$a->roleid}) a este usuario ({$a->userid}) en este curso ({$a->courseid}).';
