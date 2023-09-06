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
 * Strings for component 'mlbackend_python', language 'sv', version '4.1'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'Serverkonfigurationen är inte slutförd.';
$string['errorserver'] = 'Serverfel {$a}';
$string['host'] = 'Server';
$string['hostdesc'] = 'Server';
$string['packageinstalledshouldbe'] = 'Paketet moodlemlbackend för Python behöver uppdateras. Den nödvändiga versionen är "{$a->required}" men den installerade versionen är "{$a->installed}".';
$string['packageinstalledtoohigh'] = 'Paketet moodlemlbackend för Python är inte kompatibelt med den här versionen av Moodle. Den nödvändiga versionen är "{$a->required}" eller högre (så länge den är API-kompatibel). Den installerade versionen "{$a->installed}" är för hög.';
$string['password'] = 'Lösenord';
$string['passworddesc'] = 'Lösenord för kommunikation mellan Moodle- och Python-servern.';
$string['pluginname'] = 'Python maskininlärnings-backend';
$string['port'] = 'Port';
$string['portdesc'] = 'Port';
$string['privacy:metadata'] = 'Pluginmodulen Python maskininlärnings backend lagrar ingen personinformation.';
$string['pythonpackagenotinstalled'] = 'Paketet för moodlemlbackend för Python är inte installerat eller så är det problem med det. Vänligen kör "<code>{$a}</code>" från kommandoraden för mer info.';
$string['pythonpathnotdefined'] = 'Sökvägen till Python-applikationen har inte konfigurerats. Gå till "{$a}" för att konfigurera den.';
$string['secure'] = 'Använd HTTPS';
$string['securedesc'] = 'Om HTTP eller HTTPS ska användas.';
$string['serversettingsinfo'] = 'Om \'Använd en server\' är markerad kommer serverinställningarna att visas.';
$string['tensorboardinfo'] = 'Starta TensorBoard från kommandoraden genom att skriva <code>tensorboard --logdir=\'{$a}\'</code> på din webbserver.';
$string['username'] = 'Användarnamn';
$string['usernamedesc'] = 'Användarnamn som används för kommunikation mellan Moodle- och Python-servern.';
$string['useserver'] = 'Använd en server';
$string['useserverdesc'] = 'Machine learning backend Python-paketet är inte installerat på webbservern utan på en annan server.';
