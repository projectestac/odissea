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
 * Strings for component 'mlbackend_python', language 'nl', version '4.5'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'De serverconfiguratie is niet compleet.';
$string['errorserver'] = 'Serverfout {$a}';
$string['host'] = 'Host';
$string['hostdesc'] = 'Host';
$string['packageinstalledshouldbe'] = 'Het "moodlemlbackend" python packet zou moeten geüpdatet worden. De vereiste versie is "{$a->required}" en de geïnstalleerde versie is "{$a->installed}".';
$string['packageinstalledtoohigh'] = 'Het "moodlemlbackend" python pakket is niet compatibel met deze Moodle-versie. De vereiste versie is "{$a->required}" of hoger zolang het API-compatibel is. De geïnstalleerde versie "{$a->installed}" is te hoog.';
$string['password'] = 'Wachtwoord';
$string['passworddesc'] = 'Tekenreeks die als wachtwoord wordt gebruikt om te communiceren tussen je Moodle-server en de python-server';
$string['pluginname'] = 'Python machine learning backend';
$string['port'] = 'Poort';
$string['portdesc'] = 'Poort';
$string['privacy:metadata'] = 'Het Python machine-learning backend bewaart geen persoonlijke gegevens';
$string['pythonpackagenotinstalled'] = 'Het "moodlemlbackend" python pakket is niet geïnstalleerd of er is een probleem mee. Voer "{$a}" uit van de command line interface voor meer informatie.';
$string['pythonpathnotdefined'] = 'Het pad naar je uitvoerbare Python-bibliotheek is niet opgegeven. Ga naar  "{$a}" om dat in te stellen.';
$string['secure'] = 'Gebruik HTTPS';
$string['securedesc'] = 'Of je HTTP of HTTPS wil gebruiken.';
$string['serversettingsinfo'] = 'Als \'Een server gebruiken\' ingeschakeld is, dan worden de serverinstellingen weergegeven.';
$string['tensorboardinfo'] = 'Start TensorBoard vanaf de opdrachtregel door tensorboard  --logdir=\'{$a}\' in uw webserver te typen.';
$string['username'] = 'Gebruikersnaam';
$string['usernamedesc'] = 'Tekenreeks die wordt gebruikt als gebruikersnaam om te communiceren tussen je Moodle-server en de python-server.';
$string['useserver'] = 'Gebruik een server';
$string['useserverdesc'] = 'Het machine learning backend python-pakket is niet op de webserver geïnstalleerd, maar op een andere server.';
