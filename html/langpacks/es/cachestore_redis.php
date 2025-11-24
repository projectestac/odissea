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
 * Strings for component 'cachestore_redis', language 'es', version '4.5'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'Ruta de archivo CA (Autoridad de Certificación)';
$string['ca_file_help'] = 'Localización de archivo Autoridad de Certificación en sistema de archivos local';
$string['clustermode'] = 'Modo Cluster';
$string['clustermode_help'] = 'Habilitar el modo cluster ejecutará la función de cluster Redis, permitiendo a su servidor multiplicar servidores para manejar solicitudes concurrentes simultáneamente.';
$string['clustermodeunavailable'] = 'El cluster Redis ahora no está disponible. Por favor, asegúrese de que la extensión Redis PHP soporte la funcionalidad Redis Cluster.';
$string['compressor_none'] = 'Sin compresión.';
$string['compressor_php_gzip'] = 'Utilizar compresión gzip.';
$string['compressor_php_zstd'] = 'Utilizar compresión Zstandard.';
$string['connectiontimeout'] = 'Tiempo de expiración de conexión';
$string['connectiontimeout_help'] = 'Esto selecciona el tiempo de expiración cuando se intenta conectar al servidor Redis.';
$string['encrypt_connection'] = 'Usar cifrado TLS.';
$string['encrypt_connection_help'] = 'Usar TLS para conectar a Redis. No usar "tls://" en el nombre de host de Redis, usar esta otra opción.';
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
$string['server'] = 'Servidor(es)';
$string['server_help'] = 'Servidor Redis que se va a utilizar para pruebas.

Algunos valores de ejemplo:

* testredis.abc.com - Para conectar a un servidor Redis por nombre de host (Puerto 6379 por defecto).
* testredis.abc.com:1234 - Para conectar a un servidor Redis por nombre de puerto con un puerto específico.
* 1.2.3.4 - Para conectar a un servidor Redis por dirección IP (Puerto 6379 por defecto).
* 1.2.3.4:1234 - Para conectar a un servidor Redis por dirección IP usando un puerto específico.
* unix:///var/redis.sock - Para conectar a un servidor Redis usando un socket Unix.
* /var/redis.sock - Para conectar a un servidor Redix usando un socket Unix (formato alternativo).

Si el modo cluster está habilitado, por favor, especifique los servidores separados por una línea nueva:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

Para más información, consulte <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Aceptar conexiones de cliente</a> y <a href="https://redis.io/resources/clients/#php">clientes Redis PHP</a>';
$string['task_ttl'] = 'Liberar memoria utilizada por entradas caducadas en cachés de Redis';
$string['test_clustermode'] = 'Modo Cluster';
$string['test_clustermode_desc'] = 'Habilitar Prueba en modo cluster Redis.';
$string['test_password'] = 'Probar contraseña de servidor';
$string['test_password_desc'] = 'Contraseña del servidor de prueba Redis.';
$string['test_serializer'] = 'Serializador';
$string['test_serializer_desc'] = 'Serializador para utilizar en las pruebas.';
$string['test_server'] = 'Servidor de pruebas';
$string['test_server_desc'] = 'Servidor Redis para utilizar en las pruebas.

Algunos valores de ejemplo:

* testredis.abc.com - Para conectar a un servidor Redis por nombre de host (Puerto 6379 por defecto).
* testredis.abc.com:1234 - Para conectar a un servidor Redis por nombre de puerto con un puerto específico.
* 1.2.3.4 - Para conectar a un servidor Redis por dirección IP (Puerto 6379 por defecto).
* 1.2.3.4:1234 - Para conectar a un servidor Redis por dirección IP usando un puerto específico.
* unix:///var/redis.sock - Para conectar a un servidor Redis usando un socket Unix.
* /var/redis.sock - Para conectar a un servidor Redix usando un socket Unix (formato alternativo).

i el modo cluster está habilitado, por favor, especifique los servidores separados por una línea nueva:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

Para más información consulte <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">Aceptar conexiones de cliente</a> y <a href="https://redis.io/resources/clients/#php">clientes Redis PHP</a>.';
$string['test_ttl'] = 'Probando TTL';
$string['test_ttl_desc'] = 'Ejecutar la prueba de rendimiento con una caché que requiera TTL (conjuntos más lentos).';
$string['usecompressor'] = 'Utilizar compresor';
$string['usecompressor_help'] = 'Especifica el compresor que se utilizará después de la serialización. Se realiza a nivel de API de Moodle Cache, no a nivel de php-redis.';
$string['useserializer'] = 'Utilizar serializador';
$string['useserializer_help'] = 'Especifica el serializador que se utilizará para la serialización.
Los serializadores válidos son Redis::SERIALIZER_PHP o Redis::SERIALIZER_IGBINARY.
Este último es compatible solo cuando phpredis está configurado con la opción --enable-redis-igbinary y la extensión igbinary está cargada.';
