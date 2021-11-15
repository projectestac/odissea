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
 * Strings for component 'logstore_database', language 'es', version '3.11'.
 *
 * @package     logstore_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Tamaño de buffer';
$string['buffersize_help'] = 'Número de entradas de registro insertadas en una operación por lotes de base de datos, lo que mejora el rendimiento.';
$string['conectexception'] = 'No se puede conectar con la base de datos';
$string['create'] = 'Crear';
$string['databasecollation'] = 'Recopilación de la base de datos';
$string['databasehandlesoptions'] = 'La base de datos maneja las opciones';
$string['databasehandlesoptions_help'] = '¿La base de datos remota maneja sus propias opciones?';
$string['databasepersist'] = 'Conexiones persistentes a la base de datos';
$string['databaseschema'] = 'Esquema de la base datos';
$string['databasesettings'] = 'Configuración de la base de datos';
$string['databasesettings_help'] = 'Detalles de conexión para el log externo de la base de datos: {$a}';
$string['databasetable'] = 'Tabla de base de datos';
$string['databasetable_help'] = 'Nombre de la tabla donde se almacenarán los registros. Esta tabla debe tener una estructura idéntica a la utilizada por logstore_standard (mdl_logstore_standard_log).';
$string['filters'] = 'Filtrar registros';
$string['filters_help'] = 'Habilitar filtros que excluyan el registro de algunas acciones.';
$string['includeactions'] = 'Incluir acciones de este tipo';
$string['includelevels'] = 'Incluir acciones con estos niveles educativos';
$string['jsonformat'] = 'Formato JSON';
$string['jsonformat_desc'] = 'Utilizar el formato JSON estándar en lugar de los datos serializados de PHP en el campo \'otro\' de la base de datos.';
$string['logguests'] = 'Registrar acciones del huésped';
$string['other'] = 'Otro';
$string['participating'] = 'Participando';
$string['pluginname'] = 'Registro de la base de datos externa';
$string['pluginname_desc'] = 'Un complemento que registra las entradas en una tabla de base de datos externa.';
$string['privacy:metadata:log'] = 'Una colección de eventos pasados';
$string['privacy:metadata:log:anonymous'] = 'Si el evento fue etiquetado como anónimo';
$string['privacy:metadata:log:eventname'] = 'El nombre del evento';
$string['privacy:metadata:log:ip'] = 'La dirección IP utilizada en el momento del evento';
$string['privacy:metadata:log:origin'] = 'El origen del evento';
$string['privacy:metadata:log:other'] = 'Información adicional sobre el evento';
$string['privacy:metadata:log:realuserid'] = 'El ID del usuario real tras el evento, cuando se hace pasar por un usuario.';
$string['privacy:metadata:log:relateduserid'] = 'El ID del usuario relacionado con este evento';
$string['privacy:metadata:log:timecreated'] = 'El momento en el que sucedió el evento';
$string['privacy:metadata:log:userid'] = 'El ID del usuario que provocó este evento';
$string['read'] = 'Leer';
$string['tablenotfound'] = 'La tabla especificada no ha sido encontrada';
$string['teaching'] = 'Enseñando';
$string['testingsettings'] = 'Probando la configuración de la base de datos...';
$string['testsettings'] = 'Probando conexión';
$string['update'] = 'Actualizar';
