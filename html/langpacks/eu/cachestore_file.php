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
 * Strings for component 'cachestore_file', language 'eu', version '4.4'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'Hustu direktorioa modu asinkronoan';
$string['asyncpurge_help'] = 'Gaituz gero, cache berrikusketarekin direktorio berria sortzen da eta direktorio zaharra modu asinkronoan programatutako ataza bitartez ezabatuko da.';
$string['autocreate'] = 'Sortu direktorioa automatikoki';
$string['autocreate_help'] = 'Gaituz gero bidean zehaztutako direktorioa automatikoki sortuko da dagoeneko existitzen ez bada.';
$string['lockwait'] = 'Blokeoaren gehienezko itxarote-epea';
$string['lockwait_help'] = 'Cache-gako bat irakurri edo idatzi aurretik blokeatze esklusiboarentzako gehienez itxaron beharreko denbora (segundotan). Ezarpen hau soilik erabiliko da irakurtze ala idazte blokeoak eskatzen dituzten cache definizioetan.';
$string['path'] = 'Cachearen bidea';
$string['path_help'] = 'Cache-biltegi honetarako fitxategiak gordetzeko erabili beharreko direktorioa. Hutsik utziz gero (modu lehenetsian), moodledata direktorioaren barruan direktorio bat sortuko da automatikoki. Hau errendimendu hobea duen unitate bateko fitxategi-biltegi bat zehazteko erabil daiteke (memorian dagoen bat adibidez).';
$string['pluginname'] = 'Fitxategi-cachea';
$string['prescan'] = 'Aurrez eskaneatu direktorioa';
$string['prescan_help'] = 'Gaituz gero cachea erabiltzen den lehen aldian direktorioa eskaneatuko da eta fitxategi-eskaerak eskaneatze-datuetan lehenegoz egiaztatzen dira. Honek lagundu dezake fitxategi-sistema motela baduzu eta fitxategien eragiketek itogunea eragiten dutela ikusten baduzu.';
$string['privacy:metadata'] = 'Fitxategi-cachea cache-biltegi pluginak datuak laburki gordetzen ditu bere cache-funtzioaren baitan, baina datuak erregularki ezabatzen dira eta ez dira inola kanpora bidaltzen.';
$string['singledirectory'] = 'Direktorio bakarreko biltegia';
$string['singledirectory_help'] = 'Gaituz gero fitxategiak (cacheatutako elementuak) direktorio bakarrean gordeko diren direktorio anitzetan banatu beharrean.

Hau gaituta fitxategiekiko elkarrekintzak azkartuko dira baina fitxategi-sistemaren mugetara iristeko arriskua egon daiteke.

Aukera hau gaitzea soilik hurrengo hauetako bat gertatzen bada gomendatzen da:

* Cachean egongo den elementu kopurua nahikoa txikia izango dela eta exekutatzen ari den fitxategi-sistemarekin arazoak egongo ez direla badakizu.
* Cacheatutako datuak sortzeak kostu handia ez badu. Bestela lehenetsitako ezarpenak uztea komeni da arazoak izateko arriskuak txikitzen direlako.';
$string['task_asyncpurge'] = 'Hustu modu asinkronoan fitxategi-biltegiko cache berrikusketa zaharrak';
