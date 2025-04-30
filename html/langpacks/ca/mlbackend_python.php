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
 * Strings for component 'mlbackend_python', language 'ca', version '4.4'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'La configuració del servidor no està completa.';
$string['errorserver'] = 'Error del servidor {$a}';
$string['host'] = 'Amfitrió';
$string['hostdesc'] = 'Amfitrió';
$string['packageinstalledshouldbe'] = 'Cal actualitzar el paquet de Python «moodlemlbackend». La versió instal·lada és la «{$a->installed}» i es necessita la «{$a->required}».';
$string['packageinstalledtoohigh'] = 'El paquet de Python «moodlemlbackend» no és compatible amb aquesta versió de Moodle. La versió instal·lada «{$a->installed}» és massa alta. Es requereix la versió «{$a->required}» o superior mentre sigui compatible amb l\'API.';
$string['password'] = 'Contrasenya';
$string['passworddesc'] = 'Cadena de caràcters emprada com a contrasenya en la comunicació entre el servidor Moodle i el servidor Python.';
$string['pluginname'] = 'Connector de la dorsal d\'aprenentatge automàtic del Python';
$string['port'] = 'Port';
$string['portdesc'] = 'Port';
$string['privacy:metadata'] = 'El connector de la dorsal d\'aprenentatge automàtic del Python no emmagatzema cap dada personal.';
$string['pythonpackagenotinstalled'] = 'El paquet de Python «moodlemlbackend» no està instal·lat o té algun problema';
$string['pythonpathnotdefined'] = 'No s\'ha definit el camí a l\'executable de Python. Visiteu «{$a}» per establir-lo.';
$string['secure'] = 'Usa HTTPS';
$string['securedesc'] = 'Si cal emprar HTTP o HTTPS.';
$string['serversettingsinfo'] = 'Si l\'opció «Usa un servidor» està activada, es mostraran els paràmetres del servidor.';
$string['tensorboardinfo'] = 'Executeu el TensorBoard des del terminal escrivint «tensorboard --logdir=\'{$a}\'» en el vostre servidor web.';
$string['username'] = 'Nom d\'usuari';
$string['usernamedesc'] = 'Cadena de caràcters emprada com a nom d\'usuari en la comunicació entre el servidor Moodle i el servidor Python.';
$string['useserver'] = 'Usa un servidor';
$string['useserverdesc'] = 'El paquet del connector de la dorsal d\'aprenentatge automàtic del Python no està instal·lat al servidor web sinó en un servidor diferent.';
