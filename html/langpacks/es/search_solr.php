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
 * Strings for component 'search_solr', language 'es', version '3.11'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'El servidor Solr indicado no está disponible o el índice indicado no existe';
$string['connectionsettings'] = 'Ajustes de conexión';
$string['errorcreatingschema'] = 'Error al crear el esquema de Solr: {$a}';
$string['errorsolr'] = 'El motor de búsqueda Solr informó de un error: {$a}';
$string['errorvalidatingschema'] = 'Error al validar el esquema de Solr: el campo {$a->fieldname} no existe. Por favor <a href="{$a->setupurl}">sigue este enlace</a> para configurar los campos necesarios.';
$string['extensionerror'] = 'La extensión Apache Solr PHP no está instalada. Por favor revisa la documentación.';
$string['fileindexing'] = 'Habilitar el indexado de ficheros';
$string['fileindexing_help'] = 'Si su instalación de Solr lo soporta, esta característica permite a Moodle enviar ficheros para que sean indexados.<br/> Necesitará volver a indexar todos los contenidos del sitio después de habilitar esta opción para que se añadan todos los archivos.';
$string['fileindexsettings'] = 'Ajustes de indexado de ficheros';
$string['maxindexfilekb'] = 'Tamaño máximo de fichero para indexar (kB)';
$string['maxindexfilekb_help'] = 'Los archivos más grandes que este número de kilobytes no se incluirán en la indexación de búsqueda. Si se fija a 0, se indexarán archivos de cualquier tamaño.';
$string['minimumsolr4'] = 'Solr 4.0 es la versión mínima necesaria para Moodle';
$string['missingconfig'] = 'Su servidor Apache Solr aún no está configurado en Moodle.';
$string['multivaluedfield'] = 'El campo "{$a}" devolvió un array en lugar de un escalar. Por favor borre el índice actual, cree uno nuevo y ejecute el archivo setup_schema.php antes de indexar los datos en Solr.';
$string['nodatafromserver'] = 'No hay datos del servidor';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Este complemento envía datos de forma externa a un motor de búsqueda vinculado con Solr.  No almacena datos localmente.';
$string['privacy:metadata:data'] = 'Datos personales enviados desde el subsistema de búsqueda.';
$string['schemafieldautocreated'] = 'El campo "{$a}" ya existe en el esquema Solr. Es probable que se olvidara de ejecutar este script antes de indexar los datos y de que Solr creara los campos de forma automática. Por favor elimine el índice actual, cree uno nuevo y ejecute de nuevo el archivo setup_schema.php antes de indexar los datos en Solr.';
$string['schemasetupfromsolr5'] = 'La versión de su servidor Solr es menor que la 5.0. Este script sólo puede establecer su esquema si su versión de Solr es la 5.0 o superior. Tiene que ajustar manualmente los campos en su esquema de acuerdo con \\search_solr\\document::get_default_fields_definition().';
$string['searchinfo'] = 'Consultas de búsqueda';
$string['searchinfo_help'] = 'El campo que se buscará se puede especificar anteponiendo a la consulta de búsqueda \'título:\', \'contenido:\', \'nombre:\' o \'introducción:\'. Por ejemplo, la búsqueda de \'título: noticias\' arrojaría resultados con la palabra \'noticias\' en el título.

Los operadores booleanos (\'Y\', \'O\', \'NO\') se pueden usar para combinar o excluir palabras clave.

Se pueden usar caracteres comodín (\'*\' o \'?\') Para representar caracteres en la consulta de búsqueda.';
$string['setupok'] = 'El esquema está listo para ser utilizado.';
$string['solrauthpassword'] = 'Contraseña de autenticación HTTP';
$string['solrauthuser'] = 'Nombre de usuario de autenticación HTTP';
$string['solrhttpconnectionport'] = 'Puerto';
$string['solrhttpconnectiontimeout'] = 'Tiempo de espera';
$string['solrhttpconnectiontimeout_desc'] = 'El tiempo de espera de la conexión HTTP es el tiempo máximo permitido en segundos para que se produzca la operación de transferencia de datos HTTP.';
$string['solrindexname'] = 'Nombre del índice';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'El motor Solr no es el motor de búsqueda configurado';
$string['solrsecuremode'] = 'Modo seguro';
$string['solrserverhostname'] = 'Nombre del host';
$string['solrserverhostname_desc'] = 'Nombre de dominio del servidor Solr.';
$string['solrsetting'] = 'Ajustes Solr';
$string['solrsslcainfo'] = 'Nombre de los certificados SSL CA';
$string['solrsslcainfo_desc'] = 'Nombre del archivo que contiene uno o más certificados CA para verificar con el par';
$string['solrsslcapath'] = 'Ruta de los certificados SSL CA';
$string['solrsslcapath_desc'] = 'Ruta del directorio que contiene certificados CA para verificar con el par';
$string['solrsslcert'] = 'Certificado SSL';
$string['solrsslcert_desc'] = 'Nombre de archivo a un certificado privado con formato PEM';
$string['solrsslkey'] = 'Clave SSL';
$string['solrsslkey_desc'] = 'Nombre de archivo a una clave privada con formato PEM';
$string['solrsslkeypassword'] = 'Contraseña de la clave SSL';
$string['solrsslkeypassword_desc'] = 'Contraseña para archivo de clave privada con formato PEM';
