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
 * Strings for component 'auth_db', language 'es', version '3.11'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'No se puede conectar con una base de datos externa.';
$string['auth_dbcannotreadtable'] = 'No se puede leer una tabla externa.';
$string['auth_dbcantconnect'] = 'No se ha podido conectar con la base de datos de identificación especificada...';
$string['auth_dbchangepasswordurl_key'] = 'URL de cambio de contraseña';
$string['auth_dbcolumnlist'] = 'La tabla externa contiene las siguientes columna: <br />{$a}';
$string['auth_dbdebugauthdb'] = 'Depurar ADPdb';
$string['auth_dbdebugauthdbhelp'] = 'Depurar conexión ADOdb a una base de datos externa - Utilizarlo cuando se esté obteniendo una página en blanco durante el inicio de sesión. No es conveniente para sitios de producción.';
$string['auth_dbdeleteuser'] = 'Eliminado el usuario {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Error  al eliminar al usuario {$a}';
$string['auth_dbdescription'] = 'Este método utiliza una tabla de una base de datos externa para comprobar si un determinado usuario y contraseña son válidos. Si la cuenta es nueva, la información de otros campos puede también ser copiada en Moodle.';
$string['auth_dbextencoding'] = 'Codificación de base de datos externa';
$string['auth_dbextencodinghelp'] = 'Codificación del usuario en base de datos externa';
$string['auth_dbextrafields'] = 'Estos campos son opcionales. Usted puede elegir pre-rellenar algunos campos del usuario de Moodle con información desde los <strong>campos de la base de datos externa</strong> que especifique aquí. <p>Si deja esto en blanco, se tomarán los valores por defecto</p>.<p>En ambos casos, el usuario podrá editar todos estos campos después de entrar</p>.';
$string['auth_dbfieldpass'] = 'Nombre del campo que contiene las contraseñas';
$string['auth_dbfieldpass_key'] = 'Campo de contraseña';
$string['auth_dbfielduser'] = 'Nombre del campo que contiene los nombres de usuario. Este campo debe ser de tipo varchar.';
$string['auth_dbfielduser_key'] = 'Campo de nombre de usuario';
$string['auth_dbhost'] = 'El ordenador que aloja el servidor de la base de datos. Utilice una entrada DSN del sistema si está utilizando ODBC. Utilice una entrada PDO DSN si está utilizando PDO.';
$string['auth_dbhost_key'] = 'Host';
$string['auth_dbinsertuser'] = 'Insertado el usuario {$a->name} id {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Error al insertar el usuario {$a->username}  - El usuario con ese nombre ya fue creado mediante  la extensión \'{$a->auth}\'.';
$string['auth_dbinsertusererror'] = 'Error al insertar al usuario {$a}';
$string['auth_dbname'] = 'Nombre de la propia base de datos. Déjelo en blanco si utiliza un DSN ODBC. Déjelo en blanco si su PDO DSN ya contiene el nombre de la base de datos.';
$string['auth_dbname_key'] = 'Nombre de la Base de Datos';
$string['auth_dbnoexttable'] = 'Tabla externa no especificada.';
$string['auth_dbnouserfield'] = 'Campo de usuario externo no especificado.';
$string['auth_dbpass'] = 'Contraseña correspondiente al nombre de usuario anterior';
$string['auth_dbpass_key'] = 'Contraseña';
$string['auth_dbpasstype'] = '<p>Especifique el formato que usa el campo de contraseña. La encriptación MD5 es útil para conectar con otras aplicaciones web como PostNuke.</p> <p>Use "interno" si quiere que la base de datos externa gestione los nombres de usuario y las direcciones de correo electrónico, pero que Moodle administre las contraseñas. Si utiliza "interno", <i>debe</i> proporcionar un campo con una  dirección de correo electrónico utilizada en la base de datos externa, y debe ejecutar regularmente tanto admin/cron.php como auth/db/cli/sync_users.php. Moodle enviará un correo electrónico a los nuevos usuarios con una contraseña temporal.</p>';
$string['auth_dbpasstype_key'] = 'Formato de contraseña';
$string['auth_dbreviveduser'] = 'Recuperado el usuario {$a->name} id {$a->id}';
$string['auth_dbrevivedusererror'] = 'Error al recuperar al usuario {$a}';
$string['auth_dbsaltedcrypt'] = 'Cifrado de hash de cadena de una dirección';
$string['auth_dbsetupsql'] = 'Comando de ajuste SQL';
$string['auth_dbsetupsqlhelp'] = 'Comando SQL para la configuración especial de la base de datos, comúnmente se utiliza para la codificación de comunicación - ejemplo para MySQL y PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Suspendido el usuario {$a->name} id {$a->id}';
$string['auth_dbsuspendusererror'] = 'Error al suspender al usuario {$a}';
$string['auth_dbsybasequoting'] = 'Utilizar citaciones (quotes) de sybase';
$string['auth_dbsybasequotinghelp'] = 'Escapado de comilla simple al estilo Sybase - necesario para Oracle, MS SQL y algunas otras bases de datos. ¡No lo utilice para MySQL!';
$string['auth_dbsyncuserstask'] = 'Tarea de sincronización de usuarios';
$string['auth_dbtable'] = 'Nombre de la tabla en la base de datos';
$string['auth_dbtable_key'] = 'Tabla';
$string['auth_dbtableempty'] = 'Tabla externa está vacía.';
$string['auth_dbtype'] = 'El tipo de base de datos (consulte la documentación <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - Capa de abstracción de base de datos para PHP</a> para obtener más detalles).';
$string['auth_dbtype_key'] = 'Base de datos';
$string['auth_dbupdateerror'] = 'Error al actualizar la base de datos externa.';
$string['auth_dbupdateusers'] = 'Actualizar usuarios';
$string['auth_dbupdateusers_description'] = 'Además de insertar nuevos usuarios, actualizar los usuarios existentes.';
$string['auth_dbupdatinguser'] = 'Actualizando al usuario {$a->name} id {$a->id}';
$string['auth_dbuser'] = 'Nombre de usuario con acceso de lectura a la base de datos';
$string['auth_dbuser_key'] = 'Usuario de la Base de Datos';
$string['auth_dbuserstoadd'] = 'Entradas de usuario a añadir: {$a}';
$string['auth_dbuserstoremove'] = 'Entradas de usuario a eliminar: {$a}';
$string['pluginname'] = 'Usar una base de datos externa';
$string['privacy:metadata'] = 'El complemento de autenticación con base de datos externa no almacena ningún dato personal.';
