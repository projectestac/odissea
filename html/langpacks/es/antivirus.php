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
 * Strings for component 'antivirus', language 'es', version '3.11'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Plugins de antivirus disponibles';
$string['antiviruscommonsettings'] = 'Configuraciones de antivirus comunes';
$string['antiviruses'] = 'Plugins de antivirus';
$string['antivirussettings'] = 'Administrar plugins de antivirus';
$string['configantivirusplugins'] = 'Por favor, elige los plugins de antivirus que deseas utilizar y organízalos en el orden en que serán aplicados.';
$string['datainfecteddesc'] = 'Se detectaron datos infectados.';
$string['datainfectedname'] = 'Datos infectados';
$string['datastream'] = 'Datos';
$string['emailadditionalinfo'] = 'Detalles adicionales devueltos por el motor de virus:';
$string['emailauthor'] = 'Subido por:';
$string['emailcontenthash'] = 'Content hash:';
$string['emailcontenttype'] = 'Content type:';
$string['emaildate'] = 'Fecha de subida:';
$string['emailfilename'] = 'Nombre del archivo:';
$string['emailfilesize'] = 'Tamaño del archivo:';
$string['emailgeoinfo'] = 'Geolocalización:';
$string['emailinfectedfiledetected'] = 'Archivo infectado detectado';
$string['emailipaddress'] = 'Dirección IP:';
$string['emailreferer'] = 'Referente:';
$string['emailreport'] = 'Informe:';
$string['emailscanner'] = 'Escáner:';
$string['emailscannererrordetected'] = 'Ocurrió un error de escáner';
$string['emailsubject'] = '{$a} :: Notificación de antivirus';
$string['enablequarantine'] = 'Habilitar cuarentena';
$string['enablequarantine_help'] = 'Si se habilita, cualquier archivo que sea detectado como virus será colocado en la carpeta de cuarentena  ([dataroot]/{$a}) para su posterior inspección. La subida a Moodle  fallará.
Si Usted tiene en operación cualquier escaneo de virus a nivel del sistema de archivos, la carpeta de cuarentena debería de estar excluida de las revisiones del antivirus para evitar detectar los archivos en cuarentena.';
$string['fileinfecteddesc'] = 'Se detectó un archivo infectado.';
$string['fileinfectedname'] = 'Archivo infectado';
$string['notifyemail'] = 'Correo electrónico de notificación de alerta antivirus';
$string['notifyemail_help'] = 'La dirección de correo electrónico para recibir notificaciones cuando se detecta un virus. Si se deja en blanco, se enviarán notificaciones a todos los administradores del sitio.';
$string['privacy:metadata'] = 'El sistema de Antivirus no almacena información personal.';
$string['quarantinedfiles'] = 'Archivos en cuarentena por antivirus';
$string['quarantinedisabled'] = 'La cuarentena está desactivada. El archivo no se almacena.';
$string['quarantinetime'] = 'Tiempo máximo de cuarentena';
$string['quarantinetime_desc'] = 'Los archivos en cuarentena más antiguos que el período especificado serán removidos.';
$string['taskcleanup'] = 'Limpiar archivos en cuarentena.';
$string['unknown'] = 'Desconocido';
$string['virusfound'] = '¡{$a->item} ha sido escaneado por un antivirus y ha sido marcado como infectado!';
