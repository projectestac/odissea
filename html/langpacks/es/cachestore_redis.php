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
 * Strings for component 'cachestore_redis', language 'es', version '3.11'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = 'Sin compresión.';
$string['compressor_php_gzip'] = 'Utilizar compresión gzip.';
$string['compressor_php_zstd'] = 'Utilizar compresión Zstandard.';
$string['password'] = 'Contraseña';
$string['password_help'] = 'Esto establece la contraseña del servidor Redis.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Prefijo de clave';
$string['prefix_help'] = 'Este prefijo se usa para todos los nombres de clave en el servidor Redis.
* Si solo tiene una instancia de Moodle usando este servidor, puede dejar este valor predeterminado.
* Debido a las restricciones de longitud de la clave, se permite un máximo de 5 caracteres.';
$string['prefixinvalid'] = 'Prefijo no válido. Sólo puede utilizar a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'El complemento de almacenamiento en caché de Redis almacena datos brevemente como parte de su funcionalidad de almacenamiento en caché. Estos datos se almacenan en un servidor de Redis donde los datos se eliminan con regularidad.';
$string['privacy:metadata:redis:data'] = 'Los diferentes datos almacenados en caché';
$string['serializer_igbinary'] = 'El serializador igbinary.';
$string['serializer_php'] = 'El serializador por defecto de PHP.';
$string['server'] = 'Servidor';
$string['server_help'] = 'Esto establece el nombre del host o la dirección IP del servidor Redis que se va a utilizar.';
$string['test_password'] = 'Probar contraseña de servidor';
$string['test_password_desc'] = 'Contraseña del servidor de prueba Redis.';
$string['test_serializer'] = 'Serializador';
$string['test_serializer_desc'] = 'Serializador para utilizar en las pruebas.';
$string['test_server'] = 'Servidor de pruebas';
$string['test_server_desc'] = 'Servidor Redis para utilizar en las pruebas.';
$string['usecompressor'] = 'Utilizar compresor';
$string['usecompressor_help'] = 'Especifica el compresor que se utilizará después de la serialización. Se realiza a nivel de API de Moodle Cache, no a nivel de php-redis.';
$string['useserializer'] = 'Utilizar serializador';
$string['useserializer_help'] = 'Especifica el serializador que se utilizará para la serialización.
Los serializadores válidos son Redis::SERIALIZER_PHP o Redis::SERIALIZER_IGBINARY.
Este último es compatible solo cuando phpredis está configurado con la opción --enable-redis-igbinary y la extensión igbinary está cargada.';
