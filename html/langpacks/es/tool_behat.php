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
 * Strings for component 'tool_behat', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_behat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Esta herramienta de administración permite a los desarrolladores y creadores de pruebas generar archivos .feature que describen las funcionalidades de Moodle y se ejecutan automáticamente. Las etapas definidas disponibles para su uso en los archivos .feature se enumeran a continuación.';
$string['allavailablesteps'] = 'Todas las etapas definidas disponibles';
$string['errorbehatcommand'] = 'Error durante la ejecución del comando behat en CLI. Ejecute manualmente "{$a} --help" desde la línea de comando para saber más acerca de este error.';
$string['errorcomposer'] = 'Las dependencias necesarias no están instaladas.';
$string['errordataroot'] = 'La configuración $CFG->behat_dataroot no existe o es inválida.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix y $CFG->behat_wwwroot deben ser agregadas en el fichero config.php.';
$string['erroruniqueconfig'] = 'Los valores de $CFG->behat_dataroot, $CFG->behat_prefix y $CFG->behat_wwwroot deben ser diferentes de los valores $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot y $CFG->phpunit_prefix.';
$string['fieldvalueargument'] = 'Parámetros de valor del campo';
$string['fieldvalueargument_help'] = 'Este parámetro debe ser completado con un valor del campo, existen varios tipos de campos, simples como casillas de verificación, áreas de texto o complejos como selector de fechas. Consultar <a href="http://docs.moodle.org/dev/Acceptance_testing#Providing_values_to_steps" target="_blank">Valores del campo</a> para saber el valor esperado dependiendo del tipo de campo.';
$string['giveninfo'] = 'Dado. Proceso para preparar el entorno';
$string['infoheading'] = 'Información';
$string['installinfo'] = 'Lea {$a} para obtener información acerca de la instalación y la ejecución de pruebas';
$string['newstepsinfo'] = 'Lea {$a} para obtener información acerca de cómo agregar nuevas definiciones de etapas';
$string['newtestsinfo'] = 'Lea {$a} para obtener información acerca de cómo crear nuevas pruebas';
$string['nostepsdefinitions'] = 'No existen etapas definidas que correspondan a los filtros de búsqueda';
$string['pluginname'] = 'Pruebas de aceptación';
$string['stepsdefinitionscomponent'] = 'Área';
$string['stepsdefinitionscontains'] = 'Contiene';
$string['stepsdefinitionsfilters'] = 'Definición de etapas';
$string['stepsdefinitionstype'] = 'Tipo';
$string['theninfo'] = 'Cuando. Verificación para asegurar que los resultados son los esperados';
$string['unknownexceptioninfo'] = 'Ha habido un problema con Selenium o con el navegador. Por favor asegúrese que esta usando la ultima versión de Selenium. Error:';
$string['viewsteps'] = 'Filtro de búsqueda';
$string['wheninfo'] = 'Cuando. Acciones que provocan un evento';
$string['wrongbehatsetup'] = 'Algo está mal en la configuración behat, las definiciones de etapas no pueden ser listadas: <b>{$a->errormsg}</b><br/><br/>Por favor verifique que:<ul>
<li>$CFG->behat_dataroot, $CFG->behat_prefix and $CFG->behat_wwwroot han sido agregados en el fichero config.php con  valores diferentes de $CFG->dataroot, $CFG->prefix y $CFG->wwwroot.</li>
<li>Se ha ejecutado el comando "{$a->behatinit}" desde el directorio raíz de Moodle.</li>
<li>Las dependencias han sido instaladas en vendor/ y el fichero {$a->behatcommand} tiene permisión para ser ejecutado.</li></ul>';
