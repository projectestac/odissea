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
 * Strings for component 'block_filtered_course_list', language 'eu', version '4.4'.
 *
 * @package     block_filtered_course_list
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcourses'] = 'Kudeatzaileek ikastaro guztiak ikusten dituzte';
$string['blockname'] = 'Iragazitako ikastaro-zerrenda';
$string['catrubrictpl'] = 'Kategoriako errubrika-txantiloia';
$string['catseparator'] = 'Kategoriako banatzailea';
$string['completedcourses'] = 'Osatutako ikastaroak';
$string['configcatrubrictpl'] = 'Ezarpen hau erabili ezazu kategoria bat iragaztean errubrikak erakusteko patroi bat zehazteko. Hurrengo ordezkapen-tokenak erabili daitezke: NAME, IDNUMBER, PARENT eta ANCESTRY. Edozein tokenaren irteera moztu dezakezu karaktere kopurua giltzen artean gehituta (esaterako NAME{20}). Elipsi bat gehituko da<br /><br />Xehetasun guztiak <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki</a> webgunean aurkitu daitezke.';
$string['configcatseparator'] = 'Kategoria-izenen artean erabili beharreko banatzailea kategoriaren errubrika-txantiloian ANCESTRY kategoria erabiltzean.';
$string['configcoursenametpl'] = 'Ezarpen hau erabili ezazu ikastaroen izenak erakusteko patroi bat zehazteko. Hurrengo ordezkapen-tokenak erabili daitezke: FULLNAME, SHORTNAME, IDNUMBER eta CATEGORY. Edozein tokenaren irteera moztu dezakezu karaktere kopurua giltzen artean gehituta (esaterako NAME{20}). Elipsi bat gehituko da<br /><br />Xehetasun guztiak <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki</a> webgunean aurkitu daitezke.';
$string['configexternalfilters'] = 'Parentesi arteko identifikatzailea erabili ezazu iragazki-konfiguratzailearen testu-arearen barrutik iragazkiari erreferentzia egiteko. Kanpoko iragazki baterako eskuragarri dagoen konfiguraziori buruzko informazio gehiagorako ikusi ezazu eskaintzen duen plugina.';
$string['configfilters'] = 'Idatzi ezazu iragazki bat lerro bakoitzean iragazkiaren elementuak banatzeko lerro bertikalak erabilita. Iragazki-motak hurrengo hauek dira: <i>category</i>, <i>shortname</i>, <i>regex</i>, <i>idnumber</i>, <i>completion</i>, <i>starred</i>, <i>enrolment</i> eta <i>generic</i>. <br /><br />Xehetasun guztiak <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax</a> webgunean daude.';
$string['confighideallcourseslink'] = 'Ezkutatu blokearen azpiko aldeko "Ikastaro guztiak" esteka. <br>Esteka ezkutatzeak ez dio kudeatzaileen ikuspegiari eragiten.';
$string['confighidefromguests'] = 'Ezkutatu blokea gonbidatu eta bisitari anonimoei.';
$string['confighideothercourses'] = 'Ezkutatu "Beste ikastaroak" errubrika blokean.';
$string['configmanagerview'] = 'Zer ikusi beharko luke kudeatzaile batek ikastaro-zerrenda blokean? Kontuan izan ezein ikastaroetan matrikulatuta ez dauden kudeatzaileek';
$string['configmaxallcourse'] = 'Kategoria bakarra duen gune batean, kudeatzaile eta bisitariek ikastaro guztiak ikusi ahal dituzte, <br />baina kopuru honetatik gora horren ordez kategoriaren esteka ikusiko dute. <br />[Zehaztu 0 eta 999 arteko zenbaki bat.]';
$string['configpersistentexpansion'] = 'Gogoratu errubrikaren hedapen-egoera nabigatzaile-saioaren barruan.';
$string['configprimarysort'] = 'Errubrika baten barruan ikastaroak eremu honen arabera ordenatuko dira. Aukeratu "Ordenatze-irizpidea" ikastaroak ikastaroen kudeaketa-interfazean bezala ordenatuak izan daitezen.';
$string['configsecondarysort'] = 'Errubrika baten barruan ikastaroak bigarren mailan eremu honen arabera ordenatuko dira.';
$string['configtitle'] = 'Blokearen izenburua';
$string['coursenametpl'] = 'Ikastaro-izenaren txantiloia';
$string['courses'] = 'Ikastaroak';
$string['courseswithxenrolment'] = '{$a} matrikulatutako erabiltzaile dituzten ikastaroak';
$string['defaultfilters'] = 'kategoria | tolestuta | 0 (goragoko maila) | 0 (ondorengo guztiak)';
$string['externalfilters'] = 'Kanpoko Iragazkiak';
$string['filtered_course_list:addinstance'] = 'Gehitu Iragazitako ikastaro-zerrenda bloke berri bat';
$string['filtered_course_list:myaddinstance'] = 'Gehitu Iragazitako ikastaro-zerrenda bloke berri bat Aginte-panelera';
$string['filters'] = 'Iragazkien konfigurazioa';
$string['filters_help'] = 'Idatzi ezazu iragazki bat lerro bakoitzean iragazkiaren elementuak banatzeko lerro bertikalak erabilita. Iragazki-motak hurrengo hauek dira: <i>category</i>, <i>shortname</i>, <i>regex</i>, <i>idnumber</i>, <i>completion</i>, <i>starred</i>, <i>enrolment</i> eta <i>generic</i>. <br /><br />Xehetasun guztiak <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax</a> webgunean daude.';
$string['hideallcourseslink'] = 'Ezkutatu "Ikastaro guztiak" esteka';
$string['hidefromguests'] = 'Ezkutatu gonbidatuei';
$string['hideothercourses'] = 'Ezkutatu beste ikastaroak';
$string['managerview'] = 'Kudeatzaileen ikuspegia';
$string['maxallcourse'] = 'Gehienekoa kategoria bakarrerako';
$string['othercourses'] = 'Beste ikastaroak';
$string['owncourses'] = 'Kudeatzaileek euren ikastaroak ikusten dituzte';
$string['persistentexpansion'] = 'Hedapen iraunkorra';
$string['pluginname'] = 'Iragazitako ikastaro-zerrenda';
$string['primarysort'] = 'Ordenatze-irizpide nagusia';
$string['primaryvector'] = 'Ordenatze-irizpide nagusiaren bektorea';
$string['privacy:metadata'] = 'Iragazitako ikastaro-zerrenda blokeak ikastaro-matrikulazioen inguruko informazioa erakusten du, baina ez du berezko datu pertsonalik biltzen. Matrikulazio guztiak Moodleko beste sistemek kudeatzen dituzte.';
$string['secondarysort'] = 'Bigarren mailako ordenatze-irizpidea';
$string['secondaryvector'] = 'Bigarren mailako ordenatze-irizpidearen bektorea';
$string['starredcourses'] = 'Nabarmendutako Ikastaroak';
$string['top'] = 'Goragokoa';
