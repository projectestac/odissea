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
 * Strings for component 'assignfeedback_offline', language 'eu', version '4.5'.
 *
 * @package     assignfeedback_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Kalifikazioen inportazioa berretsi';
$string['default'] = 'Gaituta modu lehenetsian';
$string['default_help'] = 'Ezarriz gero, kalkulu-orri bidez lineaz kanpoko kalifikazioen erabilera lehenetsiko da zeregin berrientzat.';
$string['downloadgrades'] = 'Kalifikazio kalkulu-orria jaitsi';
$string['enabled'] = 'Lineaz kanpoko kalkulu-orria';
$string['enabled_help'] = 'Gaituz gero, irakasleak jaitsi eta igo ahal izango du kalkulu-orri bat ikasleen kalifikazioekin zereginak kalifikatzerakoan.';
$string['feedbackupdate'] = '"{$a->field}" eremuan "{$a->text}" balioa ezarri da "{$a->student}"-(a)rentzat';
$string['gradelockedingradebook'] = '{$a}-ren kalifikazioa blokeatu da kalifikazio-liburuan';
$string['graderecentlymodified'] = '{$a}-ren kalifikazioa Moodlen aldatu da kalifikazio kalkulu-orria sortu ondoren';
$string['gradesfile'] = 'Kalifikazio kalkulu-orria (csv formatua)';
$string['gradesfile_help'] = 'Kalifikazio eguneratuak dituen kalkulu-orria. Fitxategia hau zeregin honetatik jaitsitako eta UTF-8 kodifikazioa duen CSV fitxategia izan behar du, eta ikaslearen identifikatzailearentzako eta kalifikaziorako zutabe bana izan behar du.';
$string['gradeupdate'] = 'Eman {$a->grade} kalifikazioa {$a->student} ikasleari';
$string['ignoremodified'] = 'Baimendu kalifikazioen eguneraketa kasu hau ematen denean: Moodlen dagoen kalifikazioa kalkulu-orria sortu ondoren eman da.';
$string['ignoremodified_help'] = 'Kalifikazio kalkulu-orria Moodletik jaisten denean, kalifikazio bakoitzaren azken eguneraketa data jasotzen da. Horietako kalifikazioren bat eguneratzen bada Moodlen orria jaitsi ondoren, lehentasuna emango zaio azken kalifikazio honi inportazioa egiteko unean. Aukera hau gaitzen bada, Moodlek desgaituko du babes neurri hau, eta kalifikatzaile bat baino gehiago badago, posible izango da batak besteari kalifikazioak zanpatzea.';
$string['importgrades'] = 'Aldaketak berretsi kalifikazio kalkulu-orrian';
$string['invalidgradeimport'] = 'Moodlek ezin izan du irakurri igotako kalkulu-orria. Ziurtatu ezazu komaz banatutako balioen formatuan (.csv) gorde duzula eta saiatu zaitez berriro.';
$string['nochanges'] = 'Ez da topatu aldatutako kalifikaziorik igotako kalkulu-orrian';
$string['offlinegradingworksheet'] = 'Kalifikazioak';
$string['pluginname'] = 'Lineaz kanpoko kalkulu-orria';
$string['privacy:nullproviderreason'] = 'Plugin honek ez du erabiltzailearen informazioa biltzeko datu-baserik. Soilik mod_assign-eko APIak erabiltzen ditu kalifikazio-interfazea erakusten laguntzeko.';
$string['processgrades'] = 'Inportatu kalifikazioak';
$string['skiprecord'] = 'Utzi alde batera erregistroa';
$string['updatedgrades'] = '<strong>{$a->gradeupdatescount}</strong> kalifikazio eta <strong>{$a->feedbackupdatescount}</strong> feedback-instantzia eguneratu dira.';
$string['updaterecord'] = 'Eguneratu erregistroa';
$string['uploadgrades'] = 'Igo kalifikazio kalkulu-orria';
