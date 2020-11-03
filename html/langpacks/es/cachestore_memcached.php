<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'cachestore_memcached', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   cachestore_memcached
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Escritura de búfer';
$string['bufferwrites_help'] = 'Habilita o deshabilita un periférico de Entrada/Salida (E/S). Habilitar E/S obliga a los comandos de almacenamiento a "cargar" en lugar de ser enviados. Cualquier acción que recupere información causa que esta carga se envíe a una conexión remota. Cerrar o terminar la conexión también hará que los datos cargados se envíen a una conexión remota.';
$string['clustered'] = 'Habilitar servidores agrupados';
$string['clusteredheader'] = 'Separar servidores';
$string['hash'] = 'Método hash';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Por defecto (una a la vez)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Especifica el algoritmo hash utilizado para las claves de los elementos. Cada algoritmo hash tiene sus ventajas y sus desventajas. Utilice el valor por defecto si usted no sabe o no le importa.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'Caché compartida';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Clave de prefijo';
$string['prefix_help'] = 'Esto se puede utilizar para crear un "dominio" para sus claves de posición, permitiendo crear múltiples sistemas de almacenaje memcached en una única instalación memcached. No debe contener más de 16 caracteres para evitar problemas de longitud de clave.';
$string['prefixinvalid'] = 'Prefijo no válido. Sólo puede usar a-z A-Z 0-9-_.';
$string['serialiser_json'] = 'Serializador de JSON.';
$string['serialiser_php'] = 'Serializador PHP predeterminado.';
$string['servers'] = 'Servidores';
$string['serversclusterinvalid'] = 'Se requiere un servidor cuando la agrupación está activada.';
$string['servers_help'] = 'Este ajuste configura los servidores utilizados por el adaptador memcache.
Los servidores deben definirse uno por línea, indicando la dirección de servidor y, opcionalmente, un puerto y peso.
Si no se proporciona ningún puerto se utilizará el puerto predeterminado (11211).

Por ejemplo:
<pre>
server.url.com
IP address:port
nombre_servidor:puerto:peso
</pre>

Si *habilitar servidores agrupados* está habilitado, sólo puede haber un servidor en esta lista. Normalmente será un nombre que siempre determina el equipo local, como 127.0.0.1 o localhost.';
$string['sessionhandlerconflict'] = 'Advertencia: Un caso memcached ({$a}) se ha configurado para utilizar el mismo servidor memcached como sesiones. Eliminar toda la caché redirigirá a sesiones que estén siendo eliminadas.';
$string['setservers'] = 'Configurar Servidores';
$string['setservers_help'] = 'Esta es la lista de servidores que se actualizarán cuando los datos se modifican en la caché. Normalmente el nombre completo de cada servidor en el inventario. **Debe** incluir el servidor especificado en *servidores* encima, incluso si es con un nombre de equipo diferente.
Los servidores deben definirse uno por línea y consisten en una dirección de servidor y, opcionalmente, un puerto.
Si no se proporciona ningún puerto se utilizará el puerto predeterminado (11211).

Por ejemplo:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'Servidores de prueba';
$string['testservers_desc'] = 'Los servidores de prueba se utilizan para las pruebas unitarias y las pruebas de rendimiento. Es totalmente opcional utilizar servidores de prueba. Cada servidor se define en una por línea mediante una dirección de servidor y opcionalmente un puerto y su relevancia. Si no se especifica un puerto se usa el puerto por defecto (11211).';
$string['upgrade200recommended'] = 'Te recomendamos que actualices tu extensión Memcached PHP a la versión 2.0.0 o superior.
La versión de la extensión Memcached PHP que estás utilizando no proporciona la funcionalidad que Moodle usa para asegurar una caché de espacio aislado. Hasta que no la actualices te recomendamos que no configures ninguna otra aplicación para que use los mismos servidores Memcached que utiliza Moodle.';
$string['usecompression'] = 'Usar compresión';
$string['usecompression_help'] = 'Activa o desactiva la compresión. Cuando está activado, los elementos de más de un cierto umbral (actualmente 100 bytes) se comprimen durante el almacenamiento y se descomprime durante la recuperación de forma transparente.';
$string['useserialiser'] = 'Usar serializador';
