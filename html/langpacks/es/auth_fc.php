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
 * Strings for component 'auth_fc', language 'es', version '4.1'.
 *
 * @package     auth_fc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_fcchangepasswordurl'] = 'URL para cambio de contraseña';
$string['auth_fcconnfail'] = 'Fallo de conexión con Errno: {$a->no} and Error String: {$a->str}';
$string['auth_fccreators'] = 'Lista de grupos cuyos miembros pueden crear nuevos cursos. Separe los distintos grupos con \';\'. Los nombres deben escribirse exactamente igual que en el servidor FirstClass. El sistema diferencia entre mayúsculas y minúsculas.';
$string['auth_fccreators_key'] = 'Creadores';
$string['auth_fcdescription'] = 'Este método usa un servidor FirstClass para comprobar si un nombre de usuario o contraseña determinados son válidos.';
$string['auth_fcfppport'] = 'Puerto de servidor (3333 es el más común)';
$string['auth_fcfppport_key'] = 'Puerto';
$string['auth_fchost'] = 'Dirección del servidor FirstClass. Utilice el número de IP o el nombre DNS.';
$string['auth_fchost_key'] = 'Host:';
$string['auth_fcpasswd'] = 'Contraseña de la cuenta anterior.';
$string['auth_fcpasswd_key'] = 'Contraseña';
$string['auth_fcuserid'] = 'Identificador de usuario de la cuenta FirstClass con privilegios de \'Subadministrador\'.';
$string['auth_fcuserid_key'] = 'ID del Usuario';
$string['pluginname'] = 'Usar servidor FirstClass';
$string['privacy:metadata'] = 'El plugin de Autenticación FirstClass no almacena ningun dato personal.';
