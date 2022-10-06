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
 * Strings for component 'gradeimport_xml', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   gradeimport_xml
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = 'Error: formato XML erróneo';
$string['errduplicategradeidnumber'] = 'Error: no existen dos elementos de calificación con el número \'{$a}\' en este curso (es imposible que ocurra).';
$string['errduplicateidnumber'] = 'Error: número de id duplicado';
$string['errincorrectgradeidnumber'] = 'Error: el número de identificación \'{$a}\' del archivo de importación no coincide con ningún elemento de calificación.';
$string['errincorrectidnumber'] = 'Error: número de id incorrecto';
$string['errincorrectuseridnumber'] = 'Error: el número de identificación \'{$a}\' del fichero de importación no coincide con ningún usuario.';
$string['error'] = 'Ha habido errores';
$string['errorduringimport'] = 'Ha ocurrido un error al importar: {$a}';
$string['fileurl'] = 'URL de archivo remoto';
$string['fileurl_help'] = 'El archivo remoto del campo URL se usa para buscar datos de un servidor remoto, como un sistema de información del estudiante.';
$string['importxml'] = 'Importar XML';
$string['importxml_help'] = 'Las notas se pueden importar a través de un archivo XML que contenga los números de identificación de usuario y su actividad. Para obtener el formato correcto, primero exporte algunas notas al archivo XML y luego compruebe el archivo.';
$string['pluginname'] = 'Archivo XML';
$string['xml:publish'] = 'Publicar importación de calificaciones XML';
$string['xml:view'] = 'Importar calificaciones XML';
