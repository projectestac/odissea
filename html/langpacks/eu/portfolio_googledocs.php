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
 * Strings for component 'portfolio_googledocs', language 'eu', version '3.8'.
 *
 * @package     portfolio_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Bezeroaren IDa';
$string['noauthtoken'] = 'Ez da autentifikazio tokenik jaso Google-tik. Mesedez, ziurtatu baimena duzula Moodlen zure Google kontura sartzeko';
$string['nooauthcredentials'] = 'OAuth kredentzialak behar dira.';
$string['nooauthcredentials_help'] = 'Google Drive portfolio-plugina erabiltzeko portfolio-ezarpenetan OAuth kredentzialak konfiguratu behar dituzu.';
$string['nosessiontoken'] = 'Saioko tokenik ez dago google-ra esportatzea debekatuz';
$string['oauthinfo'] = '<p>Plugin hau erabiltzeko, zure gunea Google-n erregistratu behar duzu <a href="{$a->docsurl}">Google OAuth 2.0 setup</a> dokumentazioan azaltzen den eran.</p><p>Erregistro-prozesuaren une batean, hurrengo URLa  \'Authorized Redirect URIs\' gisa sartu beharko duzu:</p><p>{$a->callbackurl}</p><p>Behin erregistroa eginda, bezero IDa eta sekretua emango zaizu Google Drive eta Picasa gehigarriak konfiguratu ahal izateko.</p>';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata'] = 'Plugin honek datuak bidaltzen ditu lotutako kanpoko Google kontura. Ez du lokalki daturik biltzen.';
$string['privacy:metadata:data'] = 'Portfolioaren azpisistemaren bitartez pasatako datu pertsonalak.';
$string['secret'] = 'Sekretua';
$string['sendfailed'] = '{$a} fitxategiak Google-ra bidaltzeak huts egin du';
