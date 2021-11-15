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
 * Strings for component 'cachestore_mongodb', language 'es', version '3.11'.
 *
 * @package     cachestore_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'Base de datos';
$string['database_help'] = 'El nombre de la base de datos a utilizar.';
$string['extendedmode'] = 'Usar claves extendidas';
$string['extendedmode_help'] = 'Si está habilitado, se utilizarán conjuntos de claves completos al trabajar con el complemento. Esto aún no se usa internamente, pero le permitiría buscar e investigar fácilmente el complemento MongoDB manualmente si así lo desea. Activar esto añadirá una pequeña sobrecarga, por lo que solo debe hacerse si lo necesita.';
$string['password'] = 'Contraseña';
$string['password_help'] = 'La contraseña del usuario es la misma que se utiliza para la conexión.';
$string['pleaseupgrademongo'] = 'Está usando una versión antigua de la extensión PHP Mongo (<1.3). Soporte para versiones antiguas de la extensión Mongo será descartada en el futuro. Por favor, considere actualizarla.';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = 'El complemento de almacenamiento en caché de MongoDB almacena datos brevemente como parte de su funcionalidad de almacenamiento en caché. Estos datos se almacenan en un servidor MongoDB donde los datos se eliminan con regularidad.';
$string['privacy:metadata:mongodb:data'] = 'Los diferentes datos almacenados en la caché';
$string['replicaset'] = 'Set de réplicas';
$string['replicaset_help'] = 'El nombre del conjunto de réplicas al que conectarse. Si esto se proporciona, el maestro se determinará mediante el comando de la base de datos ismaster en las semillas, por lo que el controlador puede terminar conectándose a un servidor que ni siquiera estaba en la lista.';
$string['server'] = 'Servidor';
$string['server_help'] = 'Esta es la cadena de conexión para el servidor que desea utilizar. Se pueden especificar múltiples servidores en una lista separada por comas.';
$string['testserver'] = 'Servidor de prueba';
$string['testserver_desc'] = 'La cadena para la conexión con el servidor de prueba que desea utilizar. Si un servidor de prueba ha sido especificado, se puede comprobar el rendimiento de MongoDB usando la página de rendimiento en caché en el bloque de administración.
Por ejemplo: mongodb://127.0.0.1:27017';
$string['username'] = 'Nombre de usuario';
$string['username_help'] = 'El nombre de usuario que se utilizará al realizar una conexión.';
$string['usesafe'] = 'Uso seguro';
$string['usesafe_help'] = 'Si está habilitada, la opción usesafe se utilizará durante las operaciones de inserción, consulta y eliminación. Si ha especificado un conjunto de réplicas, se forzará de todos modos.';
$string['usesafevalue'] = 'Usar valor seguro';
$string['usesafevalue_help'] = 'Puede optar por proporcionar un valor específico para un uso seguro. Esto determinará la cantidad de servidores en los que se deben completar las operaciones antes de que se considere que se han completado.';
