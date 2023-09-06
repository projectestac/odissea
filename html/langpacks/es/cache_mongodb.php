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
 * Strings for component 'cache_mongodb', language 'es', version '4.1'.
 *
 * @package     cache_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'Base de datos';
$string['database_help'] = 'El nombre de la Base de Datos que se usará';
$string['extendedmode'] = 'Usar claves extendidas';
$string['extendedmode_help'] = 'Si se habilita, se usarán conjuntos de claves completas cuando se trabaje con este plugin. Esto no se usa internamente aún, pero le permitiría a Usted buscar e investigar fácilmente el plugin MongoDB de forma manual si así lo eligiera. Conectarlo añadirá un costo extra pequeño, por lo que solamente debería hacerlo si lo requiere.';
$string['password'] = 'Contraseña';
$string['password_help'] = 'La contraseña del usuario que se usa para la conexión';
$string['pluginname'] = 'MongoDB';
$string['replicaset'] = 'Conjunto réplica';
$string['replicaset_help'] = 'El nombre del conjunto réplica al cual conectarse. Si se da, el amo (master) será determinado al usar el comando ismaster en las semillas (seeds), de forma que el conductor puede terminar conectándose a un servidor que ni siquiera estaba enlistado.';
$string['server'] = 'Servidor';
$string['server_help'] = 'Esta es la cadena de conexión para el servidor que Usted quiere usar. Se pueden especificar servidores múltiples al separarlos con comas.';
$string['testserver'] = '';
$string['testserver_desc'] = 'Esta es la cadena de caracteres para la conexión con el servidor de prueba que desea utilizar. Los servidores de prueba son totalmente opcionales, y especificando un servidor de prueba puede ejecutar pruebas PHPUnit para este entorno y ejecutar pruebas de rendimiento.';
$string['username'] = 'Nombredeusuario';
$string['username_help'] = 'El nombredeusuario a usar al hacer una conexión';
$string['usesafe'] = 'Usar seguro';
$string['usesafe_help'] = 'Si se habilita, la opción usar-seguro se usará durantelas operaciones de  inserción (insert), obtención (get) y remoción (remove). Si ha especificado un conjunto réplica, este será forzado de cualquier forma.';
$string['usesafevalue'] = 'Usar valor seguro';
$string['usesafevalue_help'] = 'Usted puede elegir proporcionar un valor específico para usar seguro. Esto determinará el número de servidores que deben completar las operaciones antes de que se consideren que hayan sido completadas.';
