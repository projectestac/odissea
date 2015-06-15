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
 * Strings for component 'tool_behat', language 'es', branch 'MOODLE_28_STABLE'
 *
 * @package   tool_behat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Esta herramienta de administración permite a los desarrolladores y creadores de pruebas generar archivos .feature que describen las funcionalidades de Moodle y se ejecutan automáticamente. Las etapas definidas disponibles para su uso en los archivos .feature se enumeran a continuación.';
$string['allavailablesteps'] = 'Todas las etapas definidas disponibles';
$string['errorbehatcommand'] = 'Error durante la ejecución del comando behat en CLI. Ejecute manualmente "{$a} --help" desde la línea de comando para saber más acerca de este error.';
$string['errordataroot'] = 'La configuración $CFG->behat_dataroot no existe o es inválida.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix y $CFG->behat_wwwroot deben ser agregadas en el fichero config.php.';
$string['erroruniqueconfig'] = 'Los valores de $CFG->behat_dataroot, $CFG->behat_prefix y $CFG->behat_wwwroot deben ser diferentes de los valores $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot y $CFG->phpunit_prefix.';
$string['infoheading'] = 'Información';
$string['installinfo'] = 'Lea {$a} para obtener información acerca de la instalación y la ejecución de pruebas';
$string['newstepsinfo'] = 'Lea {$a} para obtener información acerca de cómo agregar nuevas definiciones de etapas';
$string['newtestsinfo'] = 'Lea {$a} para obtener información acerca de cómo crear nuevas pruebas';
$string['nostepsdefinitions'] = 'No existen etapas definidas que correspondan a los filtros de búsqueda';
$string['pluginname'] = 'Pruebas de aceptación';
$string['viewsteps'] = 'Filtro de búsqueda';
