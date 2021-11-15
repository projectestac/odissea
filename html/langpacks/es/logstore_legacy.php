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
 * Strings for component 'logstore_legacy', language 'es', version '3.11'.
 *
 * @package     logstore_legacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'Evento heredado registrado';
$string['loglegacy'] = 'Registrar datos heredados';
$string['loglegacy_help'] = 'Este complemento guarda los datos de registro en la tabla de registro heredada (mdl_log). Esta funcionalidad ha sido reemplazada por complementos de registro más nuevos, ricos y eficientes, por lo que solo debe ejecutar este complemento si tiene informes personalizados antiguos que consultan directamente la tabla de registro anterior. Escribir en los registros heredados aumentará la carga, por lo que se recomienda que desactive este complemento por razones de rendimiento cuando no sea necesario.';
$string['pluginname'] = 'Log heredado';
$string['pluginname_desc'] = 'Un plugin de log que guarde las entradas del log en la tabla de log heredada.';
$string['privacy:metadata:log'] = 'Una colección de eventos pasados';
$string['privacy:metadata:log:action'] = 'Una descripción de la acción';
$string['privacy:metadata:log:info'] = 'Información adicional';
$string['privacy:metadata:log:ip'] = 'La dirección IP utilizada en el momento del evento';
$string['privacy:metadata:log:time'] = 'El momento en el que se produjo la acción';
$string['privacy:metadata:log:url'] = 'La URL relacionada con el evento';
$string['privacy:metadata:log:userid'] = 'El ID del usuario que realizó la acción';
$string['taskcleanup'] = 'Limpieza de la tabla heredada de log';
