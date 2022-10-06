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
 * Strings for component 'tool_langimport', language 'gl', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_langimport
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Non foi posíbel conectar co servidor de descargas. Non é posible instalar ou actualizar automaticamente os paquetes de idiomas. Descargue o(s) ficheiro(s) ZIP apropiados de <a href="{$a->src}">{$a->src}</a> e descomprímaos manualmente no directorio de datos <code>{$a->dest}</code>';
$string['install'] = 'Instalar o paquete de idioma seleccionado';
$string['installedlangs'] = 'Paquetes de idioma instalados';
$string['langimport'] = 'Utilidade para a importación de idiomas';
$string['langimportdisabled'] = 'Foi desactivada a opción de importación de idioma. Deberá actualizar os seus paquetes de idioma manualmente no nivel de sistema de ficheiros. Non esqueza purgar a cachés de cadeas despois de facelo.';
$string['langpackinstalled'] = 'O paquete de idioma «{$a}» foi instalado satisfactoriamente';
$string['langpackinstalledevent'] = 'O paquete de idioma foi instalado';
$string['langpacknotremoved'] = 'Produciuse un erro; o paquete del idioma «{$a}» non está completamente desinstalado, revise os permisos de ficheiros.';
$string['langpackremoved'] = 'O paquete de idioma «{$a}» foi desinstalado';
$string['langpackremovedevent'] = 'O paquete de idioma foi desinstalado';
$string['langpackupdated'] = 'O paquete de idioma «{$a}» foi actualizado satisfactoriamente';
$string['langpackupdatedevent'] = 'O paquete de idioma foi actualizado';
$string['langpackupdateskipped'] = 'Omitiuse a actualización do paquete de idioma «{$a}»';
$string['langpackuptodate'] = 'O paquete de idioma «{$a}» está ao día';
$string['langunsupported'] = '<p> Parece que o servidor non admite totalmente os seguintes idiomas: </p><ul>{$a->missinglocales}</ul><p>No seu lugar empregarase a localización global ({$a->globallocale}) para formatar certas cadeas como datas ou números.</p>';
$string['langupdatecomplete'] = 'Actualización do paquete de idioma concluída';
$string['missingcfglangotherroot'] = 'Falta o valor de configuración $CFG->langotherroot';
$string['missinglangparent'] = 'Falta o idioma patron <em>{$a->parent}</em> de <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'Non é posíbel desinstalar o paquete de idioma inglés.';
$string['nolangupdateneeded'] = 'Ningún dos seus paquetes de idioma precisa de ser actualizado.';
$string['pluginname'] = 'Paquetes de idioma';
$string['privacy:metadata'] = 'O engadido de paquetes de idioma non almacena ningún dato persoal.';
$string['purgestringcaches'] = 'Purgar as cachés de cadeas';
$string['selectlangs'] = 'Seleccione os idiomas a desinstalar';
$string['uninstall'] = 'Desinstale o paquete de idiomas seleccionado';
$string['uninstallconfirm'] = 'Está a punto de desinstalar completamente o paquete de idiomas {$a}, está certo?';
$string['updatelangs'] = 'Actualizar todos os paquetes de idiomas locais';
