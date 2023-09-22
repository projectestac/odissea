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
 * Strings for component 'tool_behat', language 'es', version '4.1'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Esta herramienta de administración permite a los desarrolladores y creadores de pruebas generar archivos .feature que describen las funcionalidades de Moodle y se ejecutan automáticamente. Las etapas definidas disponibles para su uso en los archivos .feature se enumeran a continuación.';
$string['allavailablesteps'] = 'Todas las definiciones de etapas disponibles';
$string['errorbehatcommand'] = 'Error durante la ejecución del comando behat en CLI. Ejecute manualmente "{$a} --help" desde la línea de comando para saber más acerca de este error.';
$string['errorcomposer'] = 'Las dependencias necesarias no están instaladas.';
$string['errordataroot'] = 'La configuración $CFG->behat_dataroot no existe o es inválida.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix y $CFG->behat_wwwroot deben ser agregadas en el fichero config.php.';
$string['erroruniqueconfig'] = 'Los valores $CFG->behat_dataroot, $CFG->behat_prefix y $CFG->behat_wwwroot deben ser diferentes de $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot y valores $CFG->phpunit_prefix.<br/>O, si $CFG->behat_prefix es igual, $CFG->behat_dbname o $CFG->behat_dbhost tiene que ser distinto de $CFG->phpunit_dbname and $CFG->phpunit_dbhost y de $CFG->dbname y $CFG->dbhost.';
$string['fieldvalueargument'] = 'Parámetros de valor del campo';
$string['fieldvalueargument_help'] = 'Este argumento debe ser completado con un valor del campo. Existen varios tipos de campos, simples como casillas de verificación, áreas de texto o complejos como selector de fechas. Consulte <a href="https://moodledev.io/general/development/tools/behat" target="_blank">Prueba de aceptación</a> para conocer en detalle los valores de campo esperados.';
$string['giveninfo'] = 'Dado. Proceso para preparar el entorno';
$string['infoheading'] = 'Información';
$string['installinfo'] = 'Lea {$a} para obtener información acerca de la instalación y la ejecución de pruebas';
$string['newstepsinfo'] = 'Lea {$a} para obtener información acerca de cómo añadir nuevas definiciones de pasos';
$string['newtestsinfo'] = 'Lea {$a} para obtener información acerca de cómo crear nuevas pruebas';
$string['nostepsdefinitions'] = 'No existen pasos definidos que coincidan con este filtro';
$string['pluginname'] = 'Pruebas de aceptación';
$string['privacy:metadata'] = 'El complemento de prueba de aceptación no almacena ningún dato personal.';
$string['stepsdefinitionscomponent'] = 'Área';
$string['stepsdefinitionscontains'] = 'Contiene';
$string['stepsdefinitionsfilters'] = 'Definiciones de etapas';
$string['stepsdefinitionstype'] = 'Tipo';
$string['theninfo'] = 'Cuando. Verificación para asegurar que los resultados son los esperados';
$string['unknownexceptioninfo'] = 'Ha habido un problema con Selenium o con el navegador. Por favor asegúrese que esta usando la ultima versión de Selenium. Error:';
$string['viewsteps'] = 'Filtro de búsqueda';
$string['warndirrootconfigfound'] = 'Se encontró un archivo de configuración en {$a}. Este archivo no se actualiza de forma automática y puede volverse obsoleto. Se recomienda eliminar este archivo.';
$string['wheninfo'] = 'Cuando. Acción que provoca un evento';
$string['wrongbehatsetup'] = 'Algo está mal en la configuración behat, las definiciones de etapas no pueden ser listadas: <b>{$a->errormsg}</b><br/><br/>Por favor verifique que:<ul>
<li>$CFG->behat_dataroot, $CFG->behat_prefix and $CFG->behat_wwwroot han sido agregados en el fichero config.php con  valores diferentes de $CFG->dataroot, $CFG->prefix y $CFG->wwwroot.</li>
<li>Se ha ejecutado el comando "{$a->behatinit}" desde el directorio raíz de Moodle.</li>
<li>Las dependencias han sido instaladas en vendor/ y el fichero {$a->behatcommand} tiene permisión para ser ejecutado.</li></ul>';
