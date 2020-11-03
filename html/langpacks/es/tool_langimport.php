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
 * Strings for component 'tool_langimport', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_langimport
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'No se puede conectar al servidor de descargas. No es posible instalar o actualizar automáticamente los paquetes de idioma. Por favor, descargue los archivos ZIP apropiados desde <a href="{$a->src}">{$a->src}</a> y descomprímalos manualmente a su directorio de datos <code>{$a->dest}</code>';
$string['install'] = 'Instalar paquete(s) de idioma(s) seleccionado(s)';
$string['installedlangs'] = 'Paquetes de idioma instalados';
$string['langimport'] = 'Utilidad de importación de idioma';
$string['langimportdisabled'] = 'Se ha deshabilitado la opción de importación de idioma. Deberá actualizar sus paquetes de idioma manualmente en el nivel de sistema de archivos. No olvide purgar las cachés de cadenas una vez lo haga.';
$string['langpackinstalled'] = 'El paquete de idioma "{$a}" se ha instalado con éxito';
$string['langpackinstalledevent'] = 'Paquete de idioma instalado';
$string['langpacknotremoved'] = 'Ha ocurrido un error; el paquete del idioma \'{$a}\' no está completamente desinstalado, por favor revise los permisos de archivos.';
$string['langpackremoved'] = 'El paquete de idioma \'{$a}\' fue desinstalado';
$string['langpackremovedevent'] = 'Paquete de idioma desinstalado';
$string['langpackupdated'] = 'El paquete de idioma \'{$a}\' ha sido correctamente actualizado';
$string['langpackupdatedevent'] = 'Paquete de idioma actualizado';
$string['langpackupdateskipped'] = 'Se ha pasado por alto la actualización del paquete de idioma "{$a}"';
$string['langpackuptodate'] = 'El paquete de idioma \'{$a}\' está al día';
$string['langupdatecomplete'] = 'Se ha completado la actualización del paquete de idioma';
$string['missingcfglangotherroot'] = 'Falta el valor de configuración $CFG->langotherroot';
$string['missinglangparent'] = 'Falta idioma padre <em>{$a->parent}</em> de <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'El paquete del idioma Inglés no puede desinstalarse';
$string['nolangupdateneeded'] = 'Todos los paquetes de idioma están al día: no se necesita actualizarlos';
$string['pluginname'] = 'Paquetes de idioma';
$string['privacy:metadata'] = 'El plugin de los Paquetes de idioma no almacena ningún dato personal.';
$string['purgestringcaches'] = 'Purgar cachés de cadenas';
$string['selectlangs'] = 'Seleccione idiomas a desinstalar';
$string['uninstall'] = 'Desinstalar paquete(s) de idioma seleccionado(s)';
$string['uninstallconfirm'] = 'Está a punto de desinstalar por completo estos paquetes de idioma <strong>{$a}</strong>. ¿Está usted seguro?';
$string['updatelangs'] = 'Actualizar todos los paquetes de idioma instalados';
