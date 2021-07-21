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
$string['errorvalidatingschema'] = 'Error al validar el esquema de Solr: el campo {$a->fieldname} no existe. Por favor <a href="{$a->setupurl}">sigue este enlace</a> para configurar los campos necesarios.';
$string['extensionerror'] = 'La extensión Apache Solr PHP no está instalada. Por favor revisa la documentación.';
$string['fileindexing'] = 'Habilitar el indexado de ficheros';
$string['fileindexing_help'] = 'Si tu instalación de Solr lo soporta, esta característica permite a Moodle enviar ficheros para que sean indexados.';
$string['fileindexsettings'] = 'Ajustes de indexado de ficheros';
$string['maxindexfilekb'] = 'Tamaño máximo de fichero para indexar (kB)';
$string['searchinfo'] = 'Consultas de búsqueda';
