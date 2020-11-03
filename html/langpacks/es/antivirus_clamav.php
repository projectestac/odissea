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
 * Strings for component 'antivirus_clamav', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Clam AV no se ha ejecutado. El mensaje de error de retorno es {$a}. Éste es el output de Clam:';
$string['clamfailureonupload'] = 'Cuando ClamAV falle';
$string['configclamactlikevirus'] = 'Trata los ficheros como virus';
$string['configclamdonothing'] = 'Trata ficheros como si estuvieran bien';
$string['configclamfailureonupload'] = 'Si has configurado clam para analizar los ficheros subidos, pero está mal configurado o falla al ejecutarse por alguna razón desconocida, ¿cómo debería comportarse?. Si eliges "Trata los ficheros como virus", los ficheros serán movidos a la zona de cuarentena o serán borrados. Si eliges "Trata los ficheros como si estuvieran bien", los ficheros serán movidos al directorio de destino del modo habitual. En cualquier caso los administradores serán alertados de que clam ha fallado. Si eliges "Trata los ficheros como virus" y por alguna razón clam falla al ejecutarse (normalmente debido a que has introducido una ruta de clam incorrecta), TODOS los ficheros que se suban será movidos a la zona de cuarentena definida o serán borrados. Ten cuidado con esta configuración.';
$string['errorcantopensocket'] = 'La conexión al socket del dominio de Unix ha generado un error {$a}';
$string['errorclamavnoresponse'] = 'ClamAV no responde; comprueba el estado del demonio';
$string['errornounixsocketssupported'] = 'El transporte del socket del dominio Unix no es compatible en este sistema. En su lugar, utilice la línea de comandos.';
$string['invalidpathtoclam'] = 'Moodle está configurado para ejecutar Clam al cargar un archivo, pero la ruta para Clam AV, {$a}, no es válida.';
$string['pathtoclam'] = 'Línea de comando';
$string['pathtoclamdesc'] = 'Si el método de arranque está configurado en "línea de comandos", inserta aquí la ruta de ClamAV. En Linux esta será /usr/bin/clamscan o /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Socket del dominio Unix';
$string['pathtounixsocketdesc'] = 'Si el método de ejecución se establece en "socket de dominio Unix", introduzca aquí la ruta del socket Unix de ClamAV. En Debian Linux esta será /var/run/clamav/clamd.ctl. Por favor, asegúrese de que el demonio de ClamAV tiene acceso de lectura a los archivos cargados, la forma más fácil de asegurarse es agregar el usuario \'clamav\' a su grupo de webserver (\'www-data\' en Debian Linux).';
$string['pluginname'] = 'Antivirus ClamAV';
$string['privacy:metadata'] = 'El antivirus ClamAV no almacena información personal.';
$string['quarantinedir'] = 'Directorio de cuarentena';
$string['runningmethod'] = 'Método de ejecución';
$string['runningmethodcommandline'] = 'Línea de comandos';
$string['runningmethoddesc'] = 'Método de arranque ClamAV. La línea de comandos es usada por defecto, sin embargo en sistemas Unix se puede obtener un mejor rendimiento usando sockets del sistema.';
$string['runningmethodunixsocket'] = 'Socket del dominio Unix';
$string['unknownerror'] = 'Se ha producido un error desconocido con Clam.';
