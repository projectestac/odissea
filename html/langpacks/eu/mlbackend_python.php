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
 * Strings for component 'mlbackend_python', language 'eu', version '4.5'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'Zerbitzariaren konfigurazioa osatu gabe dago.';
$string['errorserver'] = 'Zerbitzari-errorea {$a}';
$string['host'] = 'Ostalaria';
$string['hostdesc'] = 'Ostalaria';
$string['packageinstalledshouldbe'] = 'moodlemlbackend Python paketea eguneratu beharko litzateke. "{$a->required}" bertsioa behar da eta "{$a->installed}" bertsioa dago instalatuta';
$string['packageinstalledtoohigh'] = 'moodlemlbackend Python paketea ez da Moodleko bertsio honekin bateragarria. Beharrezko bertsioa "{$a->required}" edo ondorengoa da, API-bateragarri den heinean. Instalatutako "{$a->installed}" bertsioa berriegia da.';
$string['password'] = 'Pasahitza';
$string['passworddesc'] = 'Moodle zerbitzariaren eta Python zerbitzariaren artean komunikatzeko pasahitz moduan erabilitako karaktere-katea.';
$string['pluginname'] = 'Python-eko ikaste automatikoaren backend-a';
$string['port'] = 'Ataka';
$string['portdesc'] = 'Ataka';
$string['privacy:metadata'] = 'Python-eko ikaste automatikoaren backend-a pluginak ez du datu pertsonalik biltzen.';
$string['pythonpackagenotinstalled'] = 'moodlemlbackend Python paketea ez dago instalatuta edo paketearekin arazoren bat dago. Mesedez, komando-lerroan exekutatu "{$a}" informazio gehiago eskuratzeko';
$string['pythonpathnotdefined'] = 'Zure Python exekutagarriaren bidea ez dago zehaztuta. Mesedez, joan "{$a}" orrira ezartzeko.';
$string['secure'] = 'Erabili HTTPS';
$string['securedesc'] = 'HTTP edo HTTPS erabiliko den.';
$string['serversettingsinfo'] = '"Erabili zerbitzari bat" ezarpena gaituta badago, zerbitzariaren ezarpenak erakutsiko dira.';
$string['tensorboardinfo'] = 'Abiarazi TensorBoard komando-lerrotik zure zerbitzarian tensorboard --logdir=\'{$a}\' idatzita.';
$string['username'] = 'Erabiltzaile-izena';
$string['usernamedesc'] = 'Moodle zerbitzariaren eta Python zerbitzariaren artean komunikatzeko erabiltzaile-izen moduan erabilitako karaktere-katea.';
$string['useserver'] = 'Erabili zerbitzari bat';
$string['useserverdesc'] = 'Ikaste automatikoko Python backend paketea ez dago web-zerbitzarian instalatuta, beste zerbitzari batean baizik.';
