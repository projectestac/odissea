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
 * Strings for component 'tool_behat', language 'eu', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_behat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Kudeaketa erreminta honek garatzaileei eta probatzaileei Moodle-ko funtzionalitateak zehazten dituzten .feature fitxategiak sortzen eta automatikoki exekutatzen laguntzen die. .feature fitxategietan erabiltzeko eskuragarri dauden urratsen definizioak behean zerrendatzen dira.';
$string['allavailablesteps'] = 'Eskuragarri dauden urratsen definizio guztiak';
$string['errorbehatcommand'] = 'Errorea behat CLI komandoa exekutatzean. Saiatu "{$a} --help" CLI bidez eskuz exekutatzen arazoaren inguruan gehiago jakiteko.';
$string['errorcomposer'] = 'Composer-eko menpekotasunak ez daude instalatuta.';
$string['errordataroot'] = '$CFG->behat_dataroot ez dago zehaztuta edo baliogabea da.';
$string['errorsetconfig'] = 'config.php fitxategian $CFG->behat_dataroot, $CFG->behat_prefix eta $CFG->behat_wwwroot zehaztu behar dira.';
$string['erroruniqueconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix eta $CFG->behat_wwwroot balioek $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot eta $CFG->phpunit_prefix balioekiko ezberdinak izan behar dute.';
$string['fieldvalueargument'] = 'Eremu-balioetako argumentuak';
$string['fieldvalueargument_help'] = 'Argumentu hau eremu-balio batekin osatu behar da, eremu-mota asko dago, sinpleak laukitxoak, aukera-zerrendak edo testu-eremuak bezalakoak, edo konplexuak datu-hautatzaileak bezalakoak. <a href="http://docs.moodle.org/dev/Acceptance_testing#Providing_values_to_steps" target="_blank">Eremu-balioak</a> egiazta ditzakezu zehazten duzun eremu-motaren arabera espero diren eremu-balioak ikusteko.';
$string['giveninfo'] = 'Emandakoa. Ingurunea konfiguratzeko prozesuak.';
$string['infoheading'] = 'Informazioa';
$string['installinfo'] = 'Irakurri {$a} instalazio eta proben exekuzioaren informazioa izateko';
$string['newstepsinfo'] = 'Irakurri {$a} urratsen definizio berriak gehitzeko moduaren inguruko informazioa izateko';
$string['newtestsinfo'] = 'Irakurri {$a} proba berriak idazteko moduaren inguruko informazioa izateko';
$string['nostepsdefinitions'] = 'Ez dago iragazki hauek betetzen dituen urratsen definiziorik';
$string['pluginname'] = 'Onarpen probak';
$string['privacy:metadata'] = 'Onarpen probak pluginak ez du datu pertsonalik biltzen.';
$string['stepsdefinitionscomponent'] = 'Eremua';
$string['stepsdefinitionscontains'] = 'Barne ditu';
$string['stepsdefinitionsfilters'] = 'Urratsen definizioak';
$string['stepsdefinitionstype'] = 'Mota';
$string['theninfo'] = 'Orduan. Emaitzak espero zirenak direla bermatzeko kontrolak';
$string['unknownexceptioninfo'] = 'Arazo bat egon da Selenium edo zure nabigatzailearekin. Mesedez, ziurtatu Selenium-eko azken bertsioa erabiltzen ari zarela. Errorea:';
$string['viewsteps'] = 'Iragazkia';
$string['wheninfo'] = 'Noiz. Ekitaldi bat abiarazten duten ekintzak';
$string['wrongbehatsetup'] = 'Arazoren bat dago behat-eko konfigurazioarekin eta urratsen definizioak ezin izan dira zerrendatu: <b>{$a->errormsg}</b><br/><br/>Mesedez egiaztatu:<ul>
<li>$CFG->behat_dataroot, $CFG->behat_prefix eta $CFG->behat_wwwroot parametroak config.php fitxategian $CFG->dataroot, $CFG->prefix eta $CFG->wwwroot parametroen balio ezberdinekin definituta daudela.</li>
<li>"{$a->behatinit}" zure Moodle-ko jatorrizko karpetatik exekutatu duzula.</li>
<li>Menpekotasunak vendor/ kokapenean instalatuta daudela eta {$a->behatcommand} fitxategiak exekutatzeko baimank dituela.</li></ul>';
