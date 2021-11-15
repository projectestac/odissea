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
 * Strings for component 'cachestore_file', language 'es', version '3.11'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Crear directorio automáticamente';
$string['autocreate_help'] = 'Si está habilitado el directorio especificado en la ruta se creará automáticamente, si no existe.';
$string['path'] = 'Ruta del caché';
$string['path_help'] = 'Directorio que se usará para almacenar la caché de archivos de este almacén. Si se deja en blanco (por defecto) el directorio se creará automáticamente en moodledata. Este ajuste puede ser usado para apuntando un almacén de archivos hacia un directorio concreto, mejorando el rendimiento (tal como uno en la memoria).';
$string['pluginname'] = 'Caché de archivos';
$string['prescan'] = 'Pre-escanear directorio';
$string['prescan_help'] = 'Si está habilitado el directorio se escanea cuando se utiliza la memoria caché por vez primera y las solicitudes de archivos se comparan con los datos de la exploración. Este ajuste puede ayudar si se tiene un sistema de archivos lento y las operaciones de archivo están causando un cuello de botella.';
$string['privacy:metadata'] = 'El complemento de almacenamiento en caché de caché de archivos almacena datos brevemente como parte de su funcionalidad de almacenamiento en caché, pero estos datos se borran con regularidad.';
$string['singledirectory'] = 'Almacén de archivo único';
$string['singledirectory_help'] = 'Si está habilitado, los archivos (elementos en caché) se almacenarán en un solo directorio en lugar de dividirse en varios directorios.

Habilitar esto acelerará las interacciones de archivos, pero tiene el costo de un mayor riesgo de afectar las limitaciones del sistema de archivos.

Es aconsejable activarlo solo si se cumple lo siguiente:

* Si sabe que la cantidad de elementos en la caché será lo suficientemente pequeña como para que no cause problemas en el sistema de archivos con el que está ejecutando.
* Los datos que se almacenan en caché no son costosos de generar. Si es así, seguir con el valor predeterminado puede ser la mejor opción, ya que reduce la posibilidad de problemas.';
