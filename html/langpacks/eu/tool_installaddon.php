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
 * Strings for component 'tool_installaddon', language 'eu', version '3.11'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Onarpena';
$string['acknowledgementtext'] = 'Plugin gehigarriak instalatu aurreko gune honetako segurtasun-kopia osoak izatea nire ardura dela onartzen dut. Ulertu eta onartzen dut gehigarriek (eta bereziki jatorri ez-ofiziala dutenek, baina ez horiek bakarrik) segurtasun-arazoak izan ditzaketela, gunea ez-eskuragarri utzi dezaketela, edota datu pribatuen filtrazioa edo galera eragin dezaketela.';
$string['featuredisabled'] = 'Plugin-instalatzailea desgaituta dago gune honetan.';
$string['installaddon'] = 'Instalatu plugina!';
$string['installaddons'] = 'Instalatu pluginak';
$string['installfromrepo'] = 'Instalatu pluginak Moodleren plugin-bilgunetik';
$string['installfromrepo_help'] = 'Moodleko plugin-bilgunera bideratuko zaizu bertan plugina bilatu eta instalatzeko. Kontuan izan zure guneko izen osoa, URLa eta Moodleko bertsioa ere bidaliko direla, zuri instalazio-prozesua errazte aldera.';
$string['installfromzip'] = 'Instalatu plugina ZIP fitxategitik';
$string['installfromzip_help'] = 'Plugina zuzenean Moodleko plugin-biltegitik instalatzearen modu alternatibo bat plugina duen ZIP paketea igotzea da. ZIP paketeak Moodleko plugin-biltegitik jaitsitakoa paketearen egitura bera izan beharko du.';
$string['installfromzipfile'] = 'ZIP paketea';
$string['installfromzipfile_help'] = 'Pluginaren ZIP paketeak direktorioa bakarra izan behar du, eta pluginaren izenarekin bat etorri behar da. ZIParen edukia plugin-motari dagokion kokapenean erauziko da. Paketea Moodleko plugin-biltegitik jaitsi bada direktorioak egitura hau izango du.';
$string['installfromzipinvalid'] = 'Pluginaren ZIP paketeak direktorioa bakarra izan behar du, eta pluginaren izenarekin bat etorri behar da. Emandako fitxategia ez da ZIP pakete baliagarri bat.';
$string['installfromziprootdir'] = 'Aldatu izena jatorrizko direktorioari';
$string['installfromziprootdir_help'] = 'ZIP pakete batzuek, Github-ek sortutakoak adibidez, jatorrizko direktorioaren izen ezegokia izan dezakete. Hala bada, sartu hemen izen egokia.';
$string['installfromzipsubmit'] = 'Instalatu plugina ZIP fitxategitik';
$string['installfromziptype'] = 'Plugin mota';
$string['installfromziptype_help'] = 'Euren osagaiaren izena ondo adierazten duten pluginen kasuan, instalatzailea pluginaren mota automatikoki antzemateko gai da. Antzemate-automatikoa huts egiten badu, aukeratu ezazu eskuz plugin mota egokia. Kontuz: instalatze-prozesuak larriki huts egin dezake plugin mota modu egokian zehazten ez bada.';
$string['permcheck'] = 'Ziurtatu web-zerbitzariaren prozesuak plugin motaren jatorriaren kokapenean idazteko baimena duela.';
$string['permcheckerror'] = 'Errorea idazte-baimenak egiaztatzean';
$string['permcheckprogress'] = 'Egiaztatzen idazteko baimena...';
$string['permcheckrepeat'] = 'Egiaztatu berriz';
$string['permcheckresultno'] = 'Ezin da idatzi plugin motaren kokapenean <em>{$a->path}</em>';
$string['permcheckresultyes'] = 'Plugin motaren kokapenean <em>{$a->path}</em> idatzi daiteke';
$string['pluginname'] = 'Plugin-instalatzailea';
$string['privacy:metadata'] = 'Plugin-instalatzailea pluginak ez du datu pertsonalik biltzen.';
$string['remoterequestalreadyinstalled'] = 'Gune honetan {$a->name} pluginaren ({$a->component}) {$a->version} bertsioa Moodleko plugin-biltegitik instalatzeko eskaera bat dago. Halere, plugin hau <strong>dagoeneko instalatuta</strong> dago gune honetan.';
$string['remoterequestconfirm'] = 'Gune honetan <strong>{$a->name}</strong> ({$a->component}) pluginaren {$a->version} bertsioa Moodleko plugin-biltegitik instalatzeko eskaera bat dago. Jarraituz gero, pluginaren ZIP paketea balioztatzeko jaitsiko da. Oraindik ez da ezer instalatuko.';
$string['remoterequestinvalid'] = 'Gune honetan plugin bat instalatzeko eskaera bat dago. Zoritxarrez eskaera baliogabea da eta beraz plugina ezin da instalatu.';
$string['remoterequestnoninstallable'] = 'Gune honetan {$a->name} pluginaren ({$a->component}) {$a->version} bertsioa Moodleko plugin-biltegitik instalatzeko eskaera bat dago. Halere, pluginaren instalazioaren aurretiko egiaztatzeak huts egin du (arrazoiaren kodea: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Gune honetan {$a->name} pluginaren ({$a->component}) {$a->version} bertsioa Moodleko plugin-biltegitik instalatzeko eskaera bat dago. Halere, <strong>{$a->typepath}</strong> kokapenean <strong>ezin izan da idatzi</strong>. Web-zerbitzariko erabiltzaileari kokapen horretan idazteko baimena eman behar diozu, eta ondoren egin klik jarraitu botoian berriz egiaztatzeko.';
$string['remoterequestpluginfoexception'] = 'Ups... Errore bat gertatu da {$a->name} pluginaren ({$a->component}) {$a->version} bertsioaren informazioa eskuratzen saaitzean. Plugina ezin da instalatu. Gaitu arazketa-modua errorearen xehetasunak ikusteko.';
$string['typedetectionfailed'] = 'Ezin izan da plugin mota antzeman. Mesedez, aukeratu plugin mota eskuz.';
$string['typedetectionmismatch'] = 'Aukeratutako plugin mota ez dator bat pluginean adierazitakoarekin: {$a}';
