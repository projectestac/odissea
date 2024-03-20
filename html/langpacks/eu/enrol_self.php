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
 * Strings for component 'enrol_self', language 'eu', version '4.1'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Matrikulazioa desgaituta dago edo ez dago aktibo';
$string['canntenrolearly'] = 'Oraindik ezin duzu matrikularik egin; matrikula {$a} datan hasiko da.';
$string['canntenrollate'] = 'Ezin duzu matrikularik egin, matrikula {$a} datan itxi zelako.';
$string['cohortnonmemberinfo'] = 'Soilik \'{$a}\' kohorteko kideak matrikula daitezke.';
$string['cohortonly'] = 'Soilik kohorteko partaideak';
$string['cohortonly_help'] = 'Matrikulazio automatikoa soilik kohorte bateko kideentzat egon daiteke eskuragarri. Kontuan izan ezarpen hau aldatzeak ez duela eraginik existitzen diren matrikulazioetan.';
$string['confirmbulkdeleteenrolment'] = 'Ziur zaude erabiltzaile-matrikula hauek ezabatu nahi dituzula?';
$string['customwelcomemessage'] = 'Pertsonalizatu ongi etorria emateko mezua';
$string['customwelcomemessage_help'] = 'Ongi-etorri mezu pertsonalizatua gehi daiteke testu-soilean edo Moodleko formatu automatikoan, HTML etiketak eta etiketa eleaniztunak barne.

Mezuan hurrengo gakoak sar daitezke:

* Ikastaroaren izena {$a->coursename}
* Erabiltzailearen profilerako esteka {$a->profileurl}
* Erabiltzailearen helbide elektronikoa {$a->email}
* Erabiltzailearen izen osoa {$a->fullname}';
$string['defaultrole'] = 'Lehenetsitako rol-esleipena';
$string['defaultrole_desc'] = 'Aukeratu matrikulazio automatikoa egitean erabiltzaileari esleituko zaion rola.';
$string['deleteselectedusers'] = 'Ezabatu aukeratutako erabiltzaile-matrikulak';
$string['editselectedusers'] = 'Editatu aukeratutako erabiltzaile-matrikulak';
$string['enrolenddate'] = 'Amaiera-data';
$string['enrolenddate_help'] = 'Gaituz gero, erabiltzaileek euren burua soilik data honetara arte matrikulatu dezakete.';
$string['enrolenddaterror'] = 'Matrikulazioaren amaiera-data ezin da hasierakoa baina lehenagokoa izan';
$string['enrolme'] = 'Matrikula nazazu';
$string['enrolperiod'] = 'Matrikulazioaren iraupena';
$string['enrolperiod_desc'] = 'Matrikulazioaren iraupen lehenetsia. Zero ezarriz gero, matrikulazioa modu lehenetsian mugarik gabekoa izango da.';
$string['enrolperiod_help'] = 'Matrikulazioaren iraupena, erabiltzaileak bere burua matrikulatzen duen unetik hasita. Desgaituz gero, matrikulazioa mugarik gabekoa izango da.';
$string['enrolstartdate'] = 'Hasiera-data';
$string['enrolstartdate_help'] = 'Gaituz gero, erabiltzaileek soilik data honetatik aurrera izango dute matrikulatzeko aukera.';
$string['expiredaction'] = 'Matrikulazioaren iraungitze-ekintza';
$string['expiredaction_help'] = 'Aukeratu matrikulazioa iraungitzean exekutatuko den ekintza. Mesedez, kontuan izan hainbat erabiltzaile-datu eta ezarpen ezabatuak izango direla ikastarotik desmatrikulatzean.';
$string['expirymessageenrolledbody'] = 'Kaixo, {$a->user}:

Mezu hau \'{$a->course}\' ikastaroan zure matrikula {$a->timeend} datan amaituko dela jakinarazteko da.

Laguntzarik behar baduzu, jarri harremanetan {$a->enroller}(r)ekin.';
$string['expirymessageenrolledsubject'] = 'Matrikulazio automatikoaren amaieraren jakinarazpena';
$string['expirymessageenrollerbody'] = '\'{$a->course}\' ikastaroko matrikulazioa hurrengo {$a->threshold} iraungiko da hurrengo erabiltzaileentzat:

{$a->users}

Beren matrikulazioa luzatzeko, sartu hemen {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Matrikulazio automatikoaren amaieraren jakinarazpena';
$string['expirynotifyall'] = 'Matrikulatzailea eta matrikulatutako erabiltzailea';
$string['expirynotifyenroller'] = 'Matrikulatzailea baino ez';
$string['groupkey'] = 'Erabili taldea matrikulatzeko gakoak';
$string['groupkey_desc'] = 'Erabili taldea matrikulatzeko gakoa modu lehenetsian.';
$string['groupkey_help'] = 'Matrikulazio-gakoa dakitenentzako sarbidea mugatzeaz gain, taldea matrikulatzeko gakoak erabilita erabiltzaileak automatikoki taldeetara gehitu daitezke ikastaroan matrikulatzen direnean.

Oharra: taldeen ezarpenetan taldea matrikulatzeko gakoa zehazteaz gain matrikulazio automatikoaren ezarpenetan ikastaroaren matrikulazio-gakoa zehaztu behar da.';
$string['keyholder'] = 'Matrikulazio-gako hau erabiltzaile honen partetik jaso beharko zenuke:';
$string['longtimenosee'] = 'Desmatrikulatu parte-hartu gabeko tarte honen ondoren';
$string['longtimenosee_help'] = 'Erabiltzaileak denbora luzez ikastaroan sartu gabe egonez gero automatikoki desmatrikulatzen dira. Ezarpen honek hori gertatzeko denbora-muga zehazten du.';
$string['maxenrolled'] = 'Matrikulatutako gehieneko erabiltzaileak';
$string['maxenrolled_help'] = 'Gehienez matrikula daitekeen erabiltzaile-kopurua zehazten du. Zero jarriz gero ez dago mugarik.';
$string['maxenrolledreached'] = 'Matrikula daitekeen erabiltzaile-kopuruaren mugara iritsi da.';
$string['messageprovider:expiry_notification'] = 'Matrikulazio automatikoaren iraungitze-jakinarazpenak';
$string['newenrols'] = 'Baimendu matrikulazio automatiko berriak';
$string['newenrols_desc'] = 'Baimendu ikastaro berrietan erabiltzaileak beren burua matrikulatzea modu lehenetsian.';
$string['newenrols_help'] = 'Ezarpen honek erabiltzaile batek bere burua ikastaro honetan matrikulatu dezakeen zehazten du.';
$string['nopassword'] = 'Ez da matrikulazio-gakoa behar.';
$string['password'] = 'Matrikulazio-gakoa';
$string['password_help'] = 'Matrikulazio-gako batek ikastarorako sarbidea gakoa ezagutzen dutenei mugatzea ahalbidetzen du.

Eremu hau hutsik utziz gero edonork matrikulatu dezake bere burua.

Matrikulazio-gako bat zehaztuz gero, matrikulatzen saiatzen den edozein erabiltzaileri gakoa eskatuko zaio. Kontuan izan erabiltzaile batek SOILIK BEHIN sartu behar duela gakoa, ikastaroan matrikulatzean.';
$string['passwordinvalid'] = 'Matrikulazio-gakoa ez da zuzena, mesedez, saiatu berriro';
$string['passwordinvalidhint'] = 'Matrikulazio-gako hori ez da zuzena, mesedez saiatu berriro<br/>
(Laguntza txiki bat - honela hasten da: \'{$a}\')';
$string['passwordmatchesgroupkey'] = 'Matrikulazio-gako hau dagoeneko taldeen matrikulazio-gako gisa erabiltzen da.';
$string['pluginname'] = 'Matrikulazio automatikoa';
$string['pluginname_desc'] = 'Matrikulazio automatikoko pluginak erabiltzaileari parte-hartu nahi duen ikastaroak hautatzeko aukera ematen dio. Ikastaroek matrikulazio-gakoa eskatu dezakete. Barrutik matrikulazioa eskuzko matrikulazio gehigarriaren bitartez egiten da, eta beraz gehigarri hori ere ikastaro horretan gaituta egon behar da.';
$string['privacy:metadata'] = 'Matrikulazio automatikoa pluginak ez du datu pertsonalik biltzen.';
$string['requirepassword'] = 'Matrikulazio-gakoa behar du';
$string['requirepassword_desc'] = 'Behartu ikastaro berrietan matrikulazio-gakoa izatea eta galarazi matrikulazio-gakoa ezabatzea existitzen diren ikastaroetan.';
$string['role'] = 'Modu lehenetsian esleitutako rola';
$string['self:config'] = 'Konfiguratu matrikulazio automatikorako instantziak';
$string['self:enrolself'] = 'Norbera ikastaroan matrikulatzea';
$string['self:holdkey'] = 'Agertu matrikulazio automatikoaren gako-zain gisa';
$string['self:manage'] = 'Kudeatu matrikulatutako erabiltzaileak';
$string['self:unenrol'] = 'Desmatrikulatu erabiltzaileak ikastarotik';
$string['self:unenrolself'] = 'Desmatrikulatu norbera ikastararotik';
$string['sendcoursewelcomemessage'] = 'Bidali ikastarorako harrera-mezua';
$string['sendcoursewelcomemessage_help'] = 'Erabiltzaileek beren burua ikastaro batean matrikulatzen dutenean ongi etorri e-maila jasoko dute. Ikastaroko kontaktuak bidaltzen badu (modu lehenetsian irakasleak) eta erabiltzaile batek baino gehiagok badute rol hori, e-maila rol hori daukan lehen erabiltzailearen izenean bidaliko da.';
$string['sendexpirynotificationstask'] = 'Matrikulazio automatikoen iraungitze-jakinarazpenen bidalketa ataza';
$string['showhint'] = 'Erakutsi argibidea';
$string['showhint_desc'] = 'Erakutsi gonbidatuen sarbide-gakoaren lehenbiziko letra';
$string['status'] = 'Mantendu aktiboak existitzen diren matrikulazioak';
$string['status_desc'] = 'Gaitu matrikulazio automatikoa ikastaro berrietan';
$string['status_help'] = 'Ez zehaztuz gero, aurretik ikastaroan euren burua matrikulatu duten erabiltzaileek ez dute sarbiderik izango.';
$string['syncenrolmentstask'] = 'Matrikulazio automatikoen sinkronizazio ataza';
$string['unenrol'] = 'Desmatrikulatu erabiltzailea';
$string['unenrolselfconfirm'] = 'Ziur al zaude "{$a}" ikastarotik desmatrikulatu nahi duzula?';
$string['unenroluser'] = 'Ziur al zaude  "{$a->user}" desmatrikulatu nahi duzula "{$a}" ikastarotik?';
$string['unenrolusers'] = 'Desmatrikulatu erabiltzaileak';
$string['usepasswordpolicy'] = 'Erabili pasahitzen politika';
$string['usepasswordpolicy_desc'] = 'Aplikatu pasahitz-politika estandarra matrikulazio-gakoei.';
$string['welcometocourse'] = 'Ongi etorri {$a} gunera';
$string['welcometocoursetext'] = 'Ongi etorri {$a->coursename} ikastarora!

Nahi baduzu, zure erabiltzaile-profila edita dezakezu beheko estekan klik eginda. Horrela geuk eta zure ikastaroko kideek zuri buruz gehiago jakingo dugu.

  {$a->profileurl}';
