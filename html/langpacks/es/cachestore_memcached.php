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
 * Strings for component 'cachestore_memcached', language 'es', version '3.11'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Escritura de búfer';
$string['bufferwrites_help'] = 'Habilita o deshabilita un periférico de Entrada/Salida (E/S). Habilitar E/S obliga a los comandos de almacenamiento a "cargar" en lugar de ser enviados. Cualquier acción que recupere información causa que esta carga se envíe a una conexión remota. Cerrar o terminar la conexión también hará que los datos cargados se envíen a una conexión remota.';
$string['clustered'] = 'Habilitar servidores agrupados';
$string['clustered_help'] = 'Esto se utiliza para permitir la funcionalidad de lectura uno, conjunto múltiple.

El caso de uso previsto es crear una tienda mejorada para configuraciones con equilibrio de carga. La tienda buscará de un servidor (generalmente localhost), pero se configurará en muchos (todos los servidores en el grupo de equilibrio de carga). Para cachés con relaciones muy altas de lectura a configuración, esto ahorra una cantidad significativa de sobrecarga de red.

Cuando esta configuración está habilitada, el servidor mencionado anteriormente se utilizará para la recuperación.';
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
$string['isshared_help'] = '¿Su servidor memcached también está siendo utilizado por otras aplicaciones?

Si la caché es compartida por otras aplicaciones, entonces cada clave se eliminará individualmente para garantizar que solo se eliminen los datos que pertenecen a esta aplicación (dejando los datos de la caché de la aplicación externa sin cambios). Esto puede provocar una reducción en el rendimiento al purgar la caché, dependiendo de la configuración de su servidor.

Si está ejecutando una caché dedicada para esta aplicación, entonces la caché completa se puede vaciar de forma segura sin riesgo de destruir los datos de la caché de otra aplicación. Esto debería resultar en un mayor rendimiento al purgar la caché.';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Clave de prefijo';
$string['prefix_help'] = 'Esto se puede utilizar para crear un "dominio" para sus claves de posición, permitiendo crear múltiples sistemas de almacenaje memcached en una única instalación memcached. No debe contener más de 16 caracteres para evitar problemas de longitud de clave.';
$string['prefixinvalid'] = 'Prefijo no válido. Sólo puede usar a-z A-Z 0-9-_.';
$string['privacy:metadata:memcached'] = 'El complemento de almacenamiento en caché Memcached almacena datos brevemente como parte de su funcionalidad de almacenamiento en caché. Estos datos se almacenan en un servidor Memcache donde los datos se eliminan con regularidad.';
$string['privacy:metadata:memcached:data'] = 'Los diferentes datos almacenados en la caché';
$string['serialiser_igbinary'] = 'El serializador igbinary.';
$string['serialiser_json'] = 'Serializador de JSON.';
$string['serialiser_php'] = 'Serializador PHP predeterminado.';
$string['servers'] = 'Servidores';
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
$string['serversclusterinvalid'] = 'Se requiere un servidor cuando la agrupación está activada.';
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
$string['testservers_desc'] = 'Una o más conexiones para servidores memcached a comprobar. Si se ha especificado un servidor de prueba, entonces memcached se puede comprobar usando la página caché en el bloque de administración.
Por ejemplo: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'Te recomendamos que actualices tu extensión Memcached PHP a la versión 2.0.0 o superior.
La versión de la extensión Memcached PHP que estás utilizando no proporciona la funcionalidad que Moodle usa para asegurar una caché de espacio aislado. Hasta que no la actualices te recomendamos que no configures ninguna otra aplicación para que use los mismos servidores Memcached que utiliza Moodle.';
$string['usecompression'] = 'Usar compresión';
$string['usecompression_help'] = 'Activa o desactiva la compresión. Cuando está activado, los elementos de más de un cierto umbral (actualmente 100 bytes) se comprimen durante el almacenamiento y se descomprime durante la recuperación de forma transparente.';
$string['useserialiser'] = 'Usar serializador';
$string['useserialiser_help'] = 'Especifica el serializador que se utilizará para serializar valores no escalares.
Los serializadores válidos son Memcached::SERIALIZER_PHP o Memcached::SERIALIZER_IGBINARY.
Este último es compatible solo cuando memcached está configurado con la opción --enable-memcached-igbinary y la extensión igbinary está cargada.';
