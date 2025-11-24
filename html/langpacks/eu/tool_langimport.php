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
 * Strings for component 'tool_langimport', language 'eu', version '4.5'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Ezin izan da deskargen zerbitzarira konektatu. Ezin da hizkuntza-paketerik automatikoki instalatu edo eguneratu. Mesedez jaitsi ZIP fitxategi egokia(k) <a href="{$a->src}">{$a->src}</a> helbidetik eta eskuz erauzi zure datuen direktorioko <code>{$a->dest}</code> kokapenean.';
$string['install'] = 'Instalatu aukeratutako hizkuntza-paketea(k)';
$string['installedlangs'] = 'Instalatutako hizkuntza-paketeak';
$string['installfailed'] = 'Hizkuntza-paketeen instalazioak huts egin du!';
$string['installfinished'] = 'Hizkuntza-paketeen instalazioa amaitu da.';
$string['installpending'] = 'Hurrengo hizkuntza-paketeak laster instalatuko dira: {$a}.';
$string['installscheduled'] = 'Instalatzeko programatuta dauden hizkuntza-paketeak.';
$string['langimport'] = 'Hizkuntza inportatzeko baliabidea';
$string['langimportdisabled'] = 'Hizkuntza inportatzeko funtzioa ez dago gaituta. Eskuz eguneratu behar dituzu hizkuntza-paketeak fitxategi-sisteman. Hori egin ondoren ez ahaztu kateen cachea ezabatzeaz.';
$string['langpackinstalled'] = '\'{$a}\' hizkuntza-paketea ondo instalatu da';
$string['langpackinstalledevent'] = 'Hizkuntza-paketea instalatu da';
$string['langpacknotremoved'] = 'Errorea gertatu da; \'{$a}\' hizkuntza-paketea ez da guztiz desinstalatu. Mesedez, egiaztatu fitxategi-baimenak.';
$string['langpackremoved'] = '\'{$a}\' hizkuntza-paketea desinstalatu da';
$string['langpackremovedevent'] = 'Hizkuntza-paketea desinstalatu da';
$string['langpackupdated'] = '\'{$a}\' hizkuntza-paketea ondo eguneratu da';
$string['langpackupdatedevent'] = 'Hizkuntza-paketea eguneratu da';
$string['langpackupdateskipped'] = '\'{$a}\' hizkuntza-paketearen eguneratzea albo batera utzi da';
$string['langpackuptodate'] = '\'{$a}\' hizkuntza-paketea eguneratuta dago';
$string['langunsupported'] = '<p>Zure zerbitzariak ez ditu hurrengo hizkuntzak guztiz onartzen:</p><ul>{$a->missinglocales}</ul><p>Horien ordez hizkuntza nagusia ({$a->globallocale}) erabiliko da datak edo zenbakien moduko kateen formatua zehaztean.</p>';
$string['langupdatecomplete'] = 'Hizkuntza-paketea eguneratu da';
$string['missingcfglangotherroot'] = '$CFG->langotherroot konfigurazio-balioa falta da';
$string['missinglangparent'] = '<em>{$a->lang}</em> hizkuntzaren <em>{$a->parent}</em> goragoko hizkuntza falta da.';
$string['noenglishuninstall'] = 'Ingelesaren hizkuntza-paketea ezin da desinstalatu.';
$string['noenglishuninstalltitle'] = 'Ezin izan da desinstalatu';
$string['nolangupdateneeded'] = 'Hizkuntza-pakete guztiak eguneratuta daude: ez dago eguneratu beharrik.';
$string['pluginname'] = 'Hizkuntza-paketeak';
$string['privacy:metadata'] = 'Hizkuntza-paketeak pluginak ez du datu pertsonalik biltzen.';
$string['purgestringcaches'] = 'Ezabatu hizkuntza-kateen cacheak';
$string['search'] = 'Bilatu eskuragarri dauden hizkuntza-paketeak';
$string['selectlangs'] = 'Aukeratu desinstalatzeko hizkuntzak';
$string['uninstall'] = 'Desinstalatu aukeratutako hizkuntza-paketea(k)';
$string['uninstallconfirm'] = 'Hizkuntza-pakete hauek desinstalatzera zoaz: <strong>{$a}</strong>. Ziur zaude?';
$string['updatelangs'] = 'Eguneratu instalatutako hizkuntza-pakete guztiak';
$string['updatelangsnote'] = 'Instalatutako hizkuntza pakete guztiak botoian sakatuta eguneratzeak denbora asko eraman dezake eta denbora-mugak eragin ditzake. Horren ordez \'{$a->taskname}\' programatutako ataza erabiltzea gomendatzen da (modu lehenetsian egunero exekutatzen dena).';
