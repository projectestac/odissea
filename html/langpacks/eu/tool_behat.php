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
 * Strings for component 'tool_behat', language 'eu', version '4.4'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Kudeaketa erreminta honek garatzaileei eta probatzaileei Moodleko funtzionalitateak zehazten dituzten .feature fitxategiak sortzen eta automatikoki exekutatzen laguntzen die. .feature fitxategietan erabiltzeko eskuragarri dauden urratsen definizioak behean zerrendatzen dira.';
$string['allavailablesteps'] = 'Eskuragarri dauden urratsen definizio guztiak';
$string['errorbehatcommand'] = 'Errorea behat CLI komandoa exekutatzean. Saiatu "{$a} --help" CLI bidez eskuz exekutatzen arazoaren inguruan gehiago jakiteko.';
$string['errorcomposer'] = 'Composer-eko menpekotasunak ez daude instalatuta.';
$string['errordataroot'] = '$CFG->behat_dataroot ez dago zehaztuta edo baliogabea da.';
$string['errorsetconfig'] = 'config.php fitxategian $CFG->behat_dataroot, $CFG->behat_prefix eta $CFG->behat_wwwroot zehaztu behar dira.';
$string['erroruniqueconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix eta $CFG->behat_wwwroot balioek $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot eta $CFG->phpunit_prefix balioekiko ezberdinak izan behar dute.<br>Bestela, $CFG->behat_prefix berbera bada, $CFG->behat_dbname edo $CFG->behat_dbhost  $CFG->phpunit_dbname-ekiko desberdinak izan behar dira eta $CFG->phpunit_dbhost zein $CFG->dbname eta $CFG->dbhost-ekiko desberdinak.';
$string['fieldvalueargument'] = 'Eremu-balioetako argumentuak';
$string['fieldvalueargument_help'] = 'Argumentu hau eremu-balio batekin osatu behar da. Eremu-mota asko dago, batzuk sinpleak (laukitxoak, aukera-zerrendak edo testu-eremuak bezalakoak) eta konplexuak besteak (datu-hautatzaileak bezalakoak). Ikusi garatzaileentzako dokumentazioa <a href="https://moodledev.io/general/development/tools/behat" target="_blank">Acceptance_testing</a> espero diren eremu-balioen zehaztasun gehiagora ikusteko.';
$string['giveninfo'] = 'Emandakoa. Ingurunea konfiguratzeko prozesuak.';
$string['infoheading'] = 'Informazioa';
$string['installinfo'] = 'Irakurri {$a} instalazio eta proben exekuzioaren informazioa izateko';
$string['newstepsinfo'] = 'Irakurri {$a} urratsen definizio berriak gehitzeko moduaren inguruko informazioa izateko';
$string['newtestsinfo'] = 'Irakurri {$a} proba berriak idazteko moduaren inguruko informazioa izateko';
$string['nostepsdefinitions'] = 'Ez dago iragazki honek betetzen duen urrats-definiziorik';
$string['pluginname'] = 'Onarpen probak';
$string['privacy:metadata'] = 'Onarpen probak pluginak ez du datu pertsonalik biltzen.';
$string['stepsdefinitionscomponent'] = 'Eremua';
$string['stepsdefinitionscontains'] = 'Barne ditu';
$string['stepsdefinitionsfilters'] = 'Urratsen definizioak';
$string['stepsdefinitionstype'] = 'Mota';
$string['theninfo'] = 'Orduan. Emaitzak espero zirenak direla bermatzeko kontrolak';
$string['unknownexceptioninfo'] = 'Arazo bat egon da Selenium edo zure nabigatzailearekin. Mesedez, ziurtatu Selenium-eko bertsio berriena erabiltzen ari zarela. Errorea:';
$string['viewsteps'] = 'Iragazkia';
$string['warndirrootconfigfound'] = 'Konfigurazio-fitxategi bat aurkitu da {$a} kokapenean. Fitxategi hau ez da automatikoki eguneratzen eta zaharkituta geratu daiteke. Fitxategi hau ezabatzea gomendatzen dizugu.';
$string['wheninfo'] = 'Noiz. Ekitaldi bat abiarazten duen ekintza';
$string['wrongbehatsetup'] = 'Arazoren bat dago behat-eko konfigurazioarekin eta urratsen definizioak ezin izan dira zerrendatu: <b>{$a->errormsg}</b><br/><br/>Mesedez egiaztatu:<ul>
<li>$CFG->behat_dataroot, $CFG->behat_prefix eta $CFG->behat_wwwroot parametroak config.php fitxategian $CFG->dataroot, $CFG->prefix eta $CFG->wwwroot parametroen balio ezberdinekin definituta daudela.</li>
<li>"{$a->behatinit}" zure Moodleko jatorrizko direktoriotik exekutatu duzula.</li>
<li>Menpekotasunak vendor/ kokapenean instalatuta daudela eta {$a->behatcommand} fitxategiak exekutatzeko baimank dituela.</li></ul>';
