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
 * Strings for component 'filter_wiris', language 'es', version '4.1'.
 *
 * @package     filter_wiris
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessproviderenabled'] = 'Control de acceso';
$string['accessproviderenabled_help'] = 'Si se habilita, sólo pueden acceder a los servicios de MathType los usuarios autenticados.';
$string['alloweditorpluginactive'] = 'Editor siempre activo';
$string['alloweditorpluginactive_help'] = 'El editor estaría activo independientemente de que el filtro MathType esté deshabilitado a nivel de curso o de actividad. Por defecto, si un filtro MathType está deshabilitado en un curso/actividad, MathType también se deshabilita en el mismo curso/actividad.';
$string['area'] = 'área';
$string['arenotinstalled'] = 'no están instalados.';
$string['atto'] = 'Atto';
$string['button1'] = 'Pruebas MathType';
$string['button2'] = 'Preguntas WirisQuizzes';
$string['cachedef_formulas'] = 'Fórmulas MathType';
$string['cachedef_images'] = 'Imágenes MathType';
$string['clearcache'] = 'Limpiar caché';
$string['clearcachedesc'] = 'Limpiar caché de filtro MathType';
$string['clickwirisplugincorrectlyinstalled'] = 'Clique el siguiente botón para comprobar si MathType está instalado correctamente.';
$string['clickwirisquizzescorrectlyinstalled'] = 'Clique el siguiente botón para comprobar si WirisQuizzes está instalado correctamente.';
$string['connectionsettings'] = 'Ajustes de conexión';
$string['connectionsettings_text'] = '&nbsp;';
$string['contact'] = 'Para más información o si tiene alguna duda, contacte con el Soporte de WIRIS:';
$string['disabled'] = 'Deshabilitado';
$string['editormodalwindow'] = 'Ventana modal habilitada';
$string['editormodalwindow_help'] = '&nbsp;';
$string['editormodalwindowfullscreen'] = 'Ventana modal en modo de pantalla completa';
$string['editormodalwindowfullscreen_help'] = 'Especifica si la ventana modal debería abrirse en modo de pantalla completa.';
$string['editornameexpected'] = 'Se esperaba un nombre de editor';
$string['editorsettings'] = 'Ajustes del editor';
$string['editorsettings_text'] = '&nbsp;';
$string['enabled'] = 'Habilitado';
$string['error'] = 'ERROR';
$string['errordeletingcache'] = 'Error borrando caché en área {$a}';
$string['errorsavingcache'] = 'Error guardando caché en área {a}';
$string['filter_standalone'] = 'Sólo filtro MathType';
$string['filter_standalonedesc'] = 'Usted podrá mostrar fórmulas ya existentes pero no está disponible la creación de nuevas fórmulas. También elimina el mensaje de aviso.';
$string['filtermustbeinstalled'] = 'El filtro debe instalarse en la carpeta de filtros de Moodle.';
$string['filtername'] = 'MathType por WIRIS';
$string['furtherinformation'] = 'Para más información vea nuestra página de documentación';
$string['havesameversion'] = 'tiene la misma versión';
$string['imageformat'] = 'Formato de imagen';
$string['imageformat_help'] = 'Formato específico de imagen (svg o png).';
$string['imageservicehost'] = 'Servicio host';
$string['imageservicehost_help'] = 'Especifica la imagen de fórmula del servicio host.';
$string['imageservicepath'] = 'Ruta de servicio';
$string['imageservicepath_help'] = 'Especifica la ruta del servicio de imagen de fórmula.';
$string['imageserviceport'] = 'Puerto de servicio';
$string['imageserviceport_help'] = 'Especifica el puerto de servicio de imagen de fórmula.';
$string['imageserviceprotocol'] = 'Protocolo de servicio';
$string['imageserviceprotocol_help'] = 'Especifica el protocolo de servicio del servidor de imagen de fórmula.';
$string['imagesettings'] = 'Configuración de imagen';
$string['imagesettings_text'] = '&nbsp;';
$string['impossibletofindwirisfilterversion'] = 'Imposible encontrar un archvio de versión de filtro MathType.';
$string['lookingforfilterfiles'] = 'Buscando archivos de filtro';
$string['lookingforwirisfilterversion'] = 'Buscando versión de filtro MathType';
$string['lookingforwirisplugin'] = 'Buscando MathType';
$string['lookingforwirispluginenabled'] = 'Buscando MathType';
$string['mustbeinstalled'] = 'debe instalarse.';
$string['noteditorspluginsinstalled'] = 'No hay plugins de editores instalados.';
$string['notsupportededitor'] = 'no es un editor soportado.';
$string['ok'] = 'De acuerdo';
$string['oldconfiguration'] = 'Se ha borrado un archivo .ini antiguo en {a}. Por favor, múevalo a /filter/wiris/configuration.ini.';
$string['onlytextareaeditorinstalled'] = 'Sólo hay un plugin de edición de área de texto instalado';
$string['or'] = 'o';
$string['pluginname'] = 'MathType de WIRIS';
$string['pluginperformance'] = 'Modo de rendimiento de imagen';
$string['pluginperformance_help'] = 'Especifica si la respuesta debería ser un JSON en vez de un binario que permita atrapar solicitudes. Habilite el rendimiento para usar respuesta JSON.';
$string['privacy:metadata'] = 'MathType no almacena ningún dato por sí mismo.';
$string['rendertype'] = 'Tipo de renderización';
$string['rendertype_help'] = 'Especifica cómo renderizar las fórmulas<br>- PHP: llama al servicio de renderización Wiris desde el módulo de filtrado.<br>- Cliente: todas las solicitudes a los servidores Wiris desde el navegador.<br><i>Se recomienda encarecidamente dejar el servicio de renderizado del lado del cliente (PHP), que es el configurado por defecto. Sólo se recomienda activar el renderizado del lado del cliente (Client) en entornos de alta concurrencia, donde haya un gran número de usuarios concurrentes que necesiten representar expresiones matemáticas complejas simultáneamente.</i>';
$string['securitysettings'] = 'Ajustes de seguridad';
$string['securitysettings_text'] = '&nbsp;';
$string['tinymce'] = 'TinyMCE';
$string['title'] = 'Página de prueba de filtro MathType';
$string['version'] = 'versión';
$string['versionsdontmatch'] = 'las versiones no coinciden';
$string['windowsettings'] = 'Ajustes de ventana';
$string['windowsettings_text'] = '&nbsp;';
$string['wirisbehaterroreditornotfound'] = 'No se pudo encontrar MathType';
$string['wiriscas'] = 'Calculadora';
$string['wirischemeditor'] = 'Editor de química';
$string['wirischemeditor_help'] = 'Mostrar el botón ChemType (química).';
$string['wirisfilterversion'] = 'Versión de filtro MathType =';
$string['wirismatheditor'] = 'Editor de matemáticas';
$string['wirismatheditor_help'] = 'Mostrar botón de editor MathType.';
$string['wirispluginfilterfor'] = 'Filtro MathType y MathType para';
$string['wirispluginfiltermustbeinstalled'] = 'Debe instalarse el filtro MathType.';
$string['wirispluginfor'] = 'MathType para';
$string['wirispluginforatto'] = 'MathType para Atto';
$string['wirispluginfortinymce'] = 'MathType para TinyMCE';
