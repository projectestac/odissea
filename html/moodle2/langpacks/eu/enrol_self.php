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
 * Strings for component 'enrol_self', language 'eu', branch 'MOODLE_32_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Matrikulazioa desgaituta dago edo ez dago aktibo';
$string['canntenrolearly'] = 'Oraindik ezin duzu matrikularik egin; matrikula {$a} datan hasiko da.';
$string['canntenrollate'] = 'Ezin duzu matrikularik egin, matrikula {$a} datan itxi zelako.';
$string['cohortnonmemberinfo'] = 'Soilik \'{$a}\' kohorteko kideak matrikula daitezke.';
$string['cohortonly'] = 'Kohorteko partaideak bakarrik';
$string['cohortonly_help'] = 'Matrikulazio automatikoa kohorte bateko kideentzat bakarrik egon daiteke eskura. Kontuan izan ezarpen hau aldatzeak ez duela eraginik existitzen diren matrikulazioetan.';
$string['customwelcomemessage'] = 'Pertsonalizatu ongi etorria emateko mezua';
$string['customwelcomemessage_help'] = 'Ongi-etorri mezu pertsonalizatua gehi daiteke testu-soilean edo Moodle-ko formatu automatikoan, HTML etiketak eta etiketa-eleanitzak barne.

Mezuan hurrengo leku-markak sar daitezke:

* Ikastaroaren izena {$a->coursename}
* Erabiltzailearen profilerako esteka {$a->profileurl}
* Erabiltzailearen e-posta helbidea {$a->email}
* Erabiltzailearen izen osoa {$a->fullname}';
$string['defaultrole'] = 'Berezko rol-esleipena';
$string['defaultrole_desc'] = 'Aukeratu matrikulazio automatikoa egitean erabiltzaileari esleituko zaion rola.';
$string['enrolenddate'] = 'Amaiera-data';
$string['enrolenddate_help'] = 'Gaituz gero, erabiltzaileak data honetara arte bakarrik matrikula daitezke.';
$string['enrolenddaterror'] = 'Matrikulaziorako amaiera-data ezin da hasierakoa baina lehenagokoa izan';
$string['enrolme'] = 'Matrikula nazazu';
$string['enrolperiod'] = 'Matrikulazioaren iraupena';
$string['enrolperiod_desc'] = 'Matrikulazioaren berezko iraupena. Zero ezarriz gero, matrikulazioa berez mugarik gabekoa izango da.';
$string['enrolperiod_help'] = 'Matrikulazioaren iraupena, erabiltzaileak bere burua matrikulatzen duen unetik hasita. Desgaituz gero, matrikulazioa mugarik gabekoa izango da.';
$string['enrolstartdate'] = 'Hasiera-data';
$string['enrolstartdate_help'] = 'Gaituz gero, erabiltzaileek data honetatik aurrera soilik izango dute matrikulatzeko aukera.';
$string['expiredaction'] = 'Matrikulazioaren iraungitze-ekintza';
$string['expiredaction_help'] = 'Aukeratu matrikulazioa iraungitzean exekutatuko den ekintza. Mesedez, kontuan izan hainbat erabiltzaile-datu eta ezarpen ezabatuak izango direla ikastarotik desmatrikulatzean.';
$string['expirymessageenrolledbody'] = 'Kaixo {$a->user},

Mezu hau \'{$a->course}\' ikastaroan zure matrikula {$a->timeend} datan amaituko dela jakinarazteko da.

Laguntzarik behar baduzu, jarri harremanetan {$a->enroller}-(r)ekin.';
$string['expirymessageenrolledsubject'] = 'Matrikulazio automatikoaren amaieraren jakinarazpena';
$string['expirymessageenrollerbody'] = '\'{$a->course}\' ikastaroko matrikulazioa hurrengo {$a->threshold} iraungituko da hurrengo erabiltzaileentzat:

{$a->users}

Beren matrikulazioa luzatzeko, sartu hemen {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Matrikulazio automatikoaren amaieraren jakinarazpena';
$string['groupkey'] = 'Erabili taldea matrikulatzeko giltzak';
$string['groupkey_desc'] = 'Berez taldea matrikulatzeko giltza erabili.';
$string['groupkey_help'] = 'Matrikulazio-giltza dakitenentzako sarbidea mugatzeaz gain, taldea matrikulatzeko giltzak erabilita erabiltzaileak automatikoki taldeetara gehitu daitezke ikastaroan matrikulatzen direnean.

Oharra: taldeen ezarpenetan taldea matrikulatzeko giltza zehazteaz gain matrikulazio automatikoaren ezarpenetan ikastaroaren matrikulazio-giltza zehaztu behar da.';
$string['keyholder'] = 'Matrikulazio-giltza hau erabiltzaile honen partetik jaso beharko zenuke:';
$string['longtimenosee'] = 'Desmatrikulatu parte-hartu gabeko tarte honen ondoren';
$string['longtimenosee_help'] = 'Erabiltzaileak denbora luzez ikastaroan sartu gabe egonez gero automatikoki desmatrikulatzen dira. Ezarpen honek hori gertatzeko denbora-muga zehazten du.';
$string['maxenrolled'] = 'Matrikulatutako gehienezko erabiltzaileak';
$string['maxenrolled_help'] = 'Gehienez matrikula daitekeen erabiltzaile-kopurua zehazten du. Zero jarriz gero ez dago mugarik.';
$string['maxenrolledreached'] = 'Matrikula daitekeen erabiltzaile-kopuruaren mugara iritsi da.';
$string['messageprovider:expiry_notification'] = 'Matrikulazio automatikoaren iraungitze-jakinarazpenak';
$string['newenrols'] = 'Baimendu matrikula berriak';
$string['newenrols_desc'] = 'Berez ikastaro berrietan erabiltzaileak beren burua matrikulatzea baimendu.';
$string['newenrols_help'] = 'Ezarpen honek erabiltzaile batek bere burua ikastaro honetan matrikulatu dezakeen zehazten du.';
$string['nopassword'] = 'Ez da matrikulazio-giltza behar.';
$string['password'] = 'Matrikulazio-giltza';
$string['password_help'] = 'Matrikulazio-giltza batek ikastarorako sarbidea giltza ezagutzen dutenei mugatzea ahalbidetzen du.

Eremu hau hutsik utziz gero edonork matrikulatu dezake bere burua.

Matrikulazio-giltza bat zehaztuz gero, matrikulatzen saiatzen den edozein erabiltzaileri giltza eskatuko zaio. Kontuan izan erabiltzaile batek SOILIK BEHIN sartu behar duela giltza, ikastaroan matrikulatzean.';
$string['passwordinvalid'] = 'Matrikulazio-giltza ez da zuzena, mesedez, saiatu berriz';
$string['passwordinvalidhint'] = 'Matrikulazio-giltza hori ez da zuzena, mesedez berriro saiatu<br/>
(Laguntza txiki bat - honela hasten da: \'{$a}\')';
$string['pluginname'] = 'Matrikulazio automatikoa';
$string['pluginname_desc'] = 'Matrikulazio automatikoko gehigarriak erabiltzaileari parte-hartu nahi duen ikastaroak hautatzeko aukera ematen dio. Ikastaroek matrikulazio-giltza eskatu dezakete. Barrutik matrikulazioa eskuzko matrikulazio gehigarriaren bitartez egiten da, eta beraz gehigarri hori ere ikastaro horretan gaituta egon behar da.';
$string['requirepassword'] = 'Matrikulazio-giltza behar du';
$string['requirepassword_desc'] = 'Behartu ikastaro berrietan matrikulazio-giltza izatea eta galerazi matrikulazio-giltza ezabatzea existitzen diren ikastaroetan.';
$string['role'] = 'Berez esleitutako rola';
$string['self:config'] = 'Ezarri matrikulazio automatikorako instantziak';
$string['self:holdkey'] = 'Agertu matrikulazio automatikoaren giltzain gisa';
$string['self:manage'] = 'Matrikulatutako erabiltzaileak kudeatu';
$string['self:unenrol'] = 'Desmatrikulatu erabiltzaileak ikastarotik';
$string['self:unenrolself'] = 'Norbera ikastararotik desmatrikulatu';
$string['sendcoursewelcomemessage'] = 'Bidali ikastarorako harrera-mezua';
$string['sendcoursewelcomemessage_help'] = 'Erabiltzaileek beren burua ikastaro batean matrikulatzen dutenean ongi etorri mezua jasoko dute e-postaz. Ikastaroko kontaktuak bidaltzen badu (berez irakasleak) eta erabiltzaile batek baino gehiagok badute rol hori, e-posta rol hori daukan lehen erabiltzailearen izenean bidaliko da.';
$string['showhint'] = 'Erakutsi argibidea';
$string['showhint_desc'] = 'Bisitarien sarbide-giltzaren lehenbiziko letra erakutsi';
$string['status'] = 'Baimendu existitzen diren matrikulazioak';
$string['status_desc'] = 'Gaitu matrikulazio automatikoa ikastaro berrietan';
$string['status_help'] = '\'Baimendu matrikula berriak\' aukerarekin batera gaituz gero, soilik aurretik auto-matrikulatutako erabiltzaileek izango dute ikastarorako sarbidea. Desgaituz gero matrikulazio automatikoki gehigarria desgaituko da, existitzen diren matrikulazioak etengo direlako eta erabiltzaile berriek ezingo dutelako bere burua matrikulatu.';
$string['unenrol'] = 'Desmatrikulatu erabiltzailea';
$string['unenrolselfconfirm'] = 'Ziur al zaude "{$a}" ikastarotik desmatrikulatu nahi duzula?';
$string['unenroluser'] = 'Ziur al zaude  "{$a->user}" desmatrikulatu nahi duzula "{$a}" ikastarotik?';
$string['usepasswordpolicy'] = 'Erabili pasahitzen politika';
$string['usepasswordpolicy_desc'] = 'Aplikatu pasahitz-politika estandarra matrikulazio-giltzei.';
$string['welcometocourse'] = 'Ongi etorri {$a} gunera';
$string['welcometocoursetext'] = 'Ongi etorri {$a->coursename} ikastarora!

Nahi baduzu, zure erabiltzaile-profila
edita dezakezu beheko loturari sakatuta. Horrela geuk eta zure ikastarokideek zuri buruz gehiago jakingo dugu.

  {$a->profileurl}';
