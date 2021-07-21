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
 * Strings for component 'cachestore_memcache', language 'es', version '3.11'.
 *
 * @package     cachestore_memcache
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'Habilitar servidores agrupados';
$string['clusteredheader'] = 'Separar servidores';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Prefijo de clave';
$string['prefix_help'] = 'Este prefijo se utiliza para todas las claves en el servidor memcache.
* Si sólo tiene una instancia Moodle usando este servidor, puede dejar el valor por defecto.
* Debido a las restricciones de longitud de clave, sólo se permite un máximo de 5 caracteres.';
$string['prefixinvalid'] = 'Prefijo inválido. Sólo puede usar a-z A-Z 0-9-_.';
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
$string['sessionhandlerconflict'] = 'Advertencia: Una instancia memcache ({$a}) ha sido configurada para utilizar el mismo servidor memcached que las sesiones. Al purgar todas las cachés también se purgarán las sesiones.';
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
