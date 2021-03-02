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
 * Strings for component 'cohort', language 'eu', version '3.8'.
 *
 * @package     cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Gehitu beste kohorte bat';
$string['allcohorts'] = 'Kohorte guztiak';
$string['anycohort'] = 'Edozein';
$string['assign'] = 'Esleitu';
$string['assigncohorts'] = 'Esleitu kohorteko partaideak';
$string['assignto'] = '{$a}\' kohorteko partaideak';
$string['backtocohorts'] = 'Itzuli kohorteetara';
$string['bulkadd'] = 'Gehitu kohortera';
$string['bulknocohort'] = 'Ez da kohorte eskuragarririk aurkitu';
$string['categorynotfound'] = '<b>{$a}</b> kategoria ez da aurkitu edo zuk ez duzu baimenik kohortea sortzeko bertan. Lehenetsitako testuingurua erabiliko da.';
$string['cohort'] = 'Kohortea';
$string['cohorts'] = 'Kohorteak';
$string['cohortsin'] = 'Eskura dauden kohorteak: {$a}';
$string['component'] = 'Mota';
$string['contextnotfound'] = '<b>{$a}</b> testuingurua ez da aurkitu edo zuk ez duzu baimenik kohortea sortzeko bertan. Lehenetsitako testuingurua erabiliko da.';
$string['csvcontainserrors'] = 'Erroreak aurkitu dira CSV datuetan. Ikusi xehetasunak behean.';
$string['csvcontainswarnings'] = 'Abisuak aurkitu dira CSV datuetan. Ikusi xehetasunak behean.';
$string['csvextracolumns'] = '<b>{$a}</b> zutabea(k) baztertuko d(ir)a.';
$string['currentusers'] = 'Oraingo erabiltzaileak';
$string['currentusersmatching'] = 'Bat datozen oraingo erabiltzaileak';
$string['defaultcontext'] = 'Lehenetsitako testuingurua';
$string['delcohort'] = 'Ezabatu kohortea';
$string['delconfirm'] = 'Ziur al zaude \'{$a}\' kohortea ezabatu nahi duzula?';
$string['description'] = 'Deskribapena';
$string['displayedrows'] = '{$a->displayed} errenkada erakutsi dira {$a->total}(e)tik.';
$string['duplicateidnumber'] = 'Badago dagoeneko ID zenbaki bera duen kohortea';
$string['editcohort'] = 'Editatu kohortea';
$string['editcohortidnumber'] = 'Editatu kohortearen IDa';
$string['editcohortname'] = 'Editatu kohortearen izena';
$string['eventcohortcreated'] = 'Kohortea sortu da';
$string['eventcohortdeleted'] = 'Kohortea ezabatu da';
$string['eventcohortmemberadded'] = 'Erabiltzailea kohortera gehitu da';
$string['eventcohortmemberremoved'] = 'Erabiltzailea kohortetik ezabatu da';
$string['eventcohortupdated'] = 'Kohortea eguneratu da';
$string['external'] = 'Kanpoko kohortea';
$string['idnumber'] = 'Kohortearen IDa';
$string['invalidtheme'] = 'Kohortearen azala ez da existitzen';
$string['memberscount'] = 'Kohortearen tamaina';
$string['name'] = 'Izena';
$string['namecolumnmissing'] = 'Arazoren bat dago CSV fitxategiaren formatuan. Mesedez, egiazta ezazu zutabeen izenak egokiak direla.  Erabiltzaileak kohorteetara gehitzeko, joan Gunearen Kudeaketako \'Igo erabiltzaileak\' atalera.';
$string['namefieldempty'] = 'Eremuaren izena ezin da hutsik egon';
$string['newidnumberfor'] = 'ID zenbaki berria {$a} kohortearentzat';
$string['newnamefor'] = 'Izen berria {$a} kohortearentzat';
$string['nocomponent'] = 'Eskuz sortua';
$string['potusers'] = 'Balizko erabiltzaileak';
$string['potusersmatching'] = 'Bat datozen balizko erabiltzaileak';
$string['preview'] = 'Aurreikusi';
$string['privacy:metadata:cohort_members'] = 'Erabiltzailearen kohorteen inguruko informazioa.';
$string['privacy:metadata:cohort_members:cohortid'] = 'Kohortearen IDa';
$string['privacy:metadata:cohort_members:timeadded'] = 'Erabiltzailea kohortera gehitu zeneko unea';
$string['privacy:metadata:cohort_members:userid'] = 'Kohortearekin lotutako erabiltzailearen IDa';
$string['removeuserwarning'] = 'Kohorte batetik erabiltzaileak kentzeak  hainbat ikastarotan erabiltzaileak desmatrikulatzea ekar dezake, erabiltzaile-ezarpenak, taldetako partaidetza edo ikastaro horietako beste hainbat informazio ezabatuz.';
$string['search'] = 'Bilatu';
$string['searchcohort'] = 'Bilatu kohortea';
$string['selectfromcohort'] = 'Aukeratu partaideak kohortetik';
$string['systemcohorts'] = 'Sistemako kohorteak';
$string['unknowncohort'] = 'Kohorte ezezaguna: ({$a})';
$string['uploadcohorts'] = 'Igo kohorteak';
$string['uploadcohorts_help'] = 'Kohorteak testu-fitxategien bitartez igo daitezke. Fitxategiaren formatua honako hau izan beharko litzateke:

* Fitxategiko errenkada bakoitzak erregistro bana du
* Erregistro bakoitza komaz (edo bestelako bereizle batez) banatutako datu-multzo bat da
* Fitxategiko lehen errenkadak eremuen izenen zerrenda izango du, fitxategiko beste erregistroen formatua zehaztuko duena
* <i>name</i> eremua derrigorrezkoa da
* Aukerazko eremuak hurrengoak dira: <i>idnumber</i>, <i>description</i>, <i>descriptionformat</i>, <i>visible</i>, <i>context</i>, <i>category</i>, <i>category_id</i>, <i>category_idnumber</i> eta <i>category_path</i>';
$string['uploadedcohorts'] = 'Igotako {$a} kohorte';
$string['useradded'] = 'Erabiltzailea "{$a}" kohortera gehitu da';
$string['visible'] = 'Ikusgai';
$string['visible_help'] = '\'moodle/cohort:view\' gaitasuna duten erabiltzaileek edozein kohorte ikusi dezakete kohortearen testuinguruan.<br/>
Ikusgai dauden kohorteak azpiko ikastaroetako erabiltzaileek ere ikusi ditzakete.';
