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
 * Strings for component 'antivirus_clamav', language 'es', version '3.11'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'Hay un problema con el escaneo de AntiVirus en este momento. Su archivo {$a->item} no se ha cargado. Por favor, inténtelo de nuevo más tarde.';
$string['clamfailed'] = 'Clam AV no se ha ejecutado. El mensaje de error de retorno es {$a}. Éste es el output de Clam:';
$string['clamfailureonupload'] = 'Cuando ClamAV falle';
$string['configclamactlikevirus'] = 'Trata los ficheros como virus';
$string['configclamdonothing'] = 'Trata ficheros como si estuvieran bien';
$string['configclamfailureonupload'] = 'Si se selecciona "Tratar archivos como OK", los archivos se moverán al directorio de destino. Si se selecciona "Rechazar carga, intentar de nuevo", se le pedirá al usuario que vuelva a intentarlo más tarde. Si se selecciona "Tratar archivos como virus", los archivos se moverán al área de cuarentena o se eliminarán. Advertencia: Con esta opción, si por alguna razón clam no se ejecuta (generalmente debido a un pathtoclam no válido), TODOS los archivos cargados se moverán al área de cuarentena indicada o se eliminarán.';
$string['configclamtryagain'] = 'Rechazar la carga, inténtelo de nuevo';
$string['errorcantopensocket'] = 'La conexión al socket del dominio de Unix ha generado un error {$a}';
$string['errorclamavnoresponse'] = 'ClamAV no responde; comprueba el estado del demonio';
$string['errornounixsocketssupported'] = 'El transporte del socket del dominio Unix no es compatible en este sistema. En su lugar, utilice la línea de comandos.';
$string['invalidpathtoclam'] = 'Moodle está configurado para ejecutar Clam al cargar un archivo, pero la ruta para Clam AV, {$a}, no es válida.';
$string['pathtoclam'] = 'Línea de comando';
$string['pathtoclamdesc'] = 'Si el método de arranque está configurado en "línea de comandos", inserta aquí la ruta de ClamAV. En Linux esta será /usr/bin/clamscan o /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Socket del dominio Unix';
$string['pathtounixsocketdesc'] = 'Si el método de ejecución se establece en "socket de dominio Unix", introduzca aquí la ruta del socket Unix de ClamAV. En Debian Linux esta será /var/run/clamav/clamd.ctl. Por favor, asegúrese de que el demonio de ClamAV tiene acceso de lectura a los archivos cargados, la forma más fácil de asegurarse es agregar el usuario \'clamav\' a su grupo de webserver (\'www-data\' en Debian Linux).';
$string['pluginname'] = 'Antivirus ClamAV';
$string['privacy:metadata'] = 'El complemento de antivirus ClamAV no almacena ningún dato personal.';
$string['quarantinedir'] = 'Directorio de cuarentena';
$string['runningmethod'] = 'Método de ejecución';
$string['runningmethodcommandline'] = 'Línea de comandos';
$string['runningmethoddesc'] = 'Método de arranque ClamAV. La línea de comandos es usada por defecto, sin embargo en sistemas Unix se puede obtener un mejor rendimiento usando sockets del sistema.';
$string['runningmethodtcpsocket'] = 'Socket TCP';
$string['runningmethodunixsocket'] = 'Socket del dominio Unix';
$string['tcpsockethost'] = 'Nombre de host del socket TCP';
$string['tcpsockethostdesc'] = 'Nombre de dominio del servidor ClamAV';
$string['tcpsocketport'] = 'Puerto del socket TCP';
$string['tcpsocketportdesc'] = 'El puerto que se utilizará al conectarse a ClamAV';
$string['tries'] = 'Intentos de escaneo';
$string['tries_desc'] = 'Número de intentos realizados por ClamAV si hay un error durante el proceso de escaneo.';
$string['tries_notice'] = 'El escaneo de Clamav ha intentado {$a->tries} veces.
{$a->notice}';
$string['unknownerror'] = 'Se ha producido un error desconocido con Clam.';
