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
 * Strings for component 'mlbackend_python', language 'de', version '4.1'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'Die Serverkonfiguration ist nicht vollständig.';
$string['errorserver'] = 'Serverfehler{$a}';
$string['host'] = 'Host';
$string['hostdesc'] = 'Host';
$string['packageinstalledshouldbe'] = 'Das Python-Paket \'moodlemlbackend\' muss aktualisiert werden. Die notwendige Version ist \'{$a->required}\', aber die installierte Version ist \'{$a->installed}\'.';
$string['packageinstalledtoohigh'] = 'Das Python-Paket "moodlemlbackend" ist nicht mit dieser Moodle-Version kompatibel. Die erforderliche Version ist \'{$a->required}\' oder höher, solange sie API-kompatibel ist. Die installierte Version \'{$a->installed}\' ist zu hoch.';
$string['password'] = 'Kennwort';
$string['passworddesc'] = 'Zeichenfolge, die als Kennwort für die Kommunikation zwischen dem Moodle-Server und dem Python-Server verwendet wird.';
$string['pluginname'] = 'Python machine learning backend';
$string['port'] = 'Port';
$string['portdesc'] = 'Port';
$string['privacy:metadata'] = 'Das Python Machine learning Backendplugin speichert keine personenbezogenen Daten.';
$string['pythonpackagenotinstalled'] = 'Das Python-Paket \'moodlemlbackend\' ist nicht installiert oder es gibt ein Problem damit. Führen Sie \'{$a}\' über die Befehlszeile aus, um weitere Infos zu erhalten.';
$string['pythonpathnotdefined'] = 'Der Pfad zu Ihrer ausführbaren Python-Binärdatei wurde nicht definiert. Besuchen Sie "{$a}", um ihn festzulegen.';
$string['secure'] = 'HTTPS verwenden';
$string['securedesc'] = 'Ob HTTP oder HTTPS verwendet werden soll.';
$string['serversettingsinfo'] = 'Falls die Option \'Server nutzen\' aktiviert ist, werden die Servereinstellungen hier angezeigt.';
$string['tensorboardinfo'] = 'Führen Sie TensorBoard über die Befehlszeile, indem Sie tensorboard --logdir=\'{$a}\' auf Ihrem Webserver eingeben.';
$string['username'] = 'Nutzername';
$string['usernamedesc'] = 'Zeichenfolge, die als Nutzername für die Kommunikation zwischen dem Moodle-Server und dem Python-Server verwendet wird.';
$string['useserver'] = 'Einen Server verwenden';
$string['useserverdesc'] = 'Das maschinell lernende Backend-Python-Paket wird nicht auf dem Webserver installiert, sondern auf einem anderen Server.';
