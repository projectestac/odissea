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
 * Strings for component 'enrol', language 'eu', version '4.4'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Eskura dauden ikastaroetako matrikulazio-pluginak';
$string['addinstance'] = 'Gehitu metodoa';
$string['addinstanceanother'] = 'Gehitu metodoa eta sortu beste bat';
$string['ajaxnext25'] = 'Hurrengo 25ak...';
$string['ajaxoneuserfound'] = 'Erabiltzaile 1 aurkitu da';
$string['ajaxxmoreusersfound'] = '{$a} erabiltzaile baino gehiago aurkitu dira';
$string['ajaxxusersfound'] = '{$a} erabiltzaile aurkitu d(ir)a';
$string['assignnotpermitted'] = 'Ez duzu baimenik edo ezin duzu rolik esleitu ikastaro honetan.';
$string['bulkuseroperation'] = 'Erabiltzaile-eragiketa masiboak';
$string['configenrolplugins'] = 'Mesedez, aukeratu beharrezko plugin guztiak eta zerrendatu ordena egokian.';
$string['custominstancename'] = 'Pertsonalizatu instantziaren izena';
$string['customwelcomemessage'] = 'Pertsonalizatu ongi-etorria emateko mezua';
$string['customwelcomemessage_help'] = 'Onartutako formatuak: Testu soila edo Moodleko formatu automatikoa. HTML etiketak eta etiketa eleaniztunak ere onartzen dira, baina hurrengo gakoak ere:
<ul>
<li>Ikastaroaren izena {$a->coursename}</li>
<li>Erabiltzailearen profilerako esteka {$a->profileurl}</li>
<li>Erabiltzailearen helbide elektronikoa {$a->email}</li>
<li>Erabiltzailearen izen osoa {$a->fullname}</li>
<li>Erabiltzailearen izena {$a->firstname}</li>
<li>Erabiltzailearen abizenak {$a->lastname}</li>
<li>Erabiltzailearen ikastaroko rola {$a->courserole}</li>
</ul>';
$string['customwelcomemessageplaceholder'] = 'Kaixo, {$a->fullname}: {$a->coursename} ikastaroan matrikulatuta zaude.';
$string['defaultenrol'] = 'Gehitu instantzia ikastaro berrietarako';
$string['defaultenrol_desc'] = 'Plugin hau modu lehenetsian ikastaro berri guztiei gehi dakieke.';
$string['deleteinstanceconfirm'] = '"{$a->name}" matrikulatzeko-metodoa ezabatzekotan zaude. Metodo hori erabilita dagoeneko matrikulatutako {$a->users} guztiak desmatrikulatuko dira eta erabiltzaileen kalifikazioak, taldeetako partaidetza eta foroetako harpidetzak bezalako ikastaroko datu guztiak ezabatuko dira.

Ziur zaude aurrera egin nahi duzula?';
$string['deleteinstanceconfirmself'] = 'Ziur al zaude "{$a->name}"  ikastarora sartzeko modua ematen dizun instatzia ezabatu nahi duzula? Aurrera egiten baduzu, litekeena da gero ikastaro honetara ezinezkoa izatea  sartzea.';
$string['deleteinstancenousersconfirm'] = '"{$a->name}" matrikulatzeko-metodoa ezabatzekotan zaude. Ziur zaude aurrera egin nahi duzula?';
$string['disableinstanceconfirmself'] = 'Ziur al zaude "{$a->name}"  ikastarora sartzeko modua ematen dizun instantzia desgaitu nahi duzula? Aurrera egiten baduzu, litekeena da gero ikastaro honetara ezinezkoa izatea  sartzea.';
$string['durationdays'] = '{$a} egun';
$string['editenrolment'] = 'Editatu matrikulazioa';
$string['edituserenrolment'] = 'Editatu {$a}(r)en matrikulazioa';
$string['enrol'] = 'Matrikulatu';
$string['enrolcandidates'] = 'Ez dago erabiltzailerik matrikulatuta';
$string['enrolcandidatesmatching'] = 'Bat datoz matrikulatu gabeko erabiltzaileak';
$string['enrolcohort'] = 'Matrikulatu kohortea';
$string['enrolcohortusers'] = 'Matrikulatu erabiltzaileak';
$string['enroldetails'] = 'Matrikulazioaren xehetasunak';
$string['enrollednewusers'] = 'Egoki matrikulatu dira {$a} erabiltzaile berri';
$string['enrolledusers'] = 'Matrikulatutako erabiltzaileak';
$string['enrolledusersmatching'] = 'Bat datoz matrikulatutako erabiltzaileak';
$string['enrolme'] = 'Ikastaro honetan matrikulatu nahi dut';
$string['enrolment'] = 'Matrikulazioa';
$string['enrolmentinstances'] = 'Matrikulazio-metodoak';
$string['enrolmentmethod'] = 'Matrikulazio-metodoak';
$string['enrolmentnew'] = '{$a} ikastaroan matrikula berria';
$string['enrolmentnewuser'] = '{$a->user} (e)k "{$a->course}" ikastaroan matrikulatu da';
$string['enrolmentoptions'] = 'Matrikulazio-aukerak';
$string['enrolments'] = 'Matrikulazioak';
$string['enrolmentupdatedforuser'] = '"{$a->fullname}" erabiltzailearen matrikulazioa eguneratu da';
$string['enrolnotpermitted'] = 'Ez duzu baimenik inor ikastaro honetan matrikulatzeko edo ez dago gaituta';
$string['enrolperiod'] = 'Matrikularen iraupena';
$string['enroltimecreated'] = 'Matrikularen sorrera-data';
$string['enroltimeend'] = 'Matrikulazioaren amaiera-data';
$string['enroltimeendinvalid'] = 'Matrikulazioaren amaiera-data hasiera data baino beranduagokoa izan behar da';
$string['enroltimestart'] = 'Matrikulazioaren hasiera-data';
$string['enrolusage'] = 'Instantziak / matrikulazioak';
$string['enrolusers'] = 'Matrikulatu erabiltzaileak';
$string['enrolxusers'] = 'Matrikulatu {$a} erabiltzaile';
$string['errajaxfailedenrol'] = 'Errorea erabiltzailea matrikulatzean';
$string['errajaxsearch'] = 'Errorea erabiltzaileak bilatzean';
$string['erroreditenrolment'] = 'Errorea gertatu da erabiltzaile-matrikula aldatzean';
$string['errorenrolcohort'] = 'Errorea kohorteen sinkronizazioko matrikulazio-instantzia sortzean ikastaro honetan.';
$string['errorenrolcohortusers'] = 'Errorea kohorte-kideak ikastaro honetan matrikulatzean.';
$string['errorthresholdlow'] = 'Jakinarazpenen atalasea gutxienez egun betekoa izan behar du.';
$string['errorwithbulkoperation'] = 'Errorea gertatu da matrikulazio-aldaketa masiboak prozesatu bitartean.';
$string['eventenrolinstancecreated'] = 'Matrikulazio-instantzia sortuta';
$string['eventenrolinstancedeleted'] = 'Matrikulazio-instantzia ezabatuta';
$string['eventenrolinstanceupdated'] = 'Matrikulazio-instantzia eguneratuta';
$string['eventuserenrolmentcreated'] = 'Erabiltzailea ikastaroan matrikulatu da';
$string['eventuserenrolmentdeleted'] = 'Erabiltzailea ikastarotik  desmatrikulatu da';
$string['eventuserenrolmentupdated'] = 'Erabiltzaile-matrikulazioa eguneratuta';
$string['expirynotify'] = 'Jakinarazi matrikula iraungi aurretik';
$string['expirynotify_help'] = 'Ezarpen honek zehazten du noiz bidaltzen diren matrikula amaituko dela jakinarazteko abisuak.';
$string['expirynotifyall'] = 'Matrikulatzailea eta matrikulatutako erabiltzailea';
$string['expirynotifyenroller'] = 'Matrikulatzailea baino ez';
$string['expirynotifyhour'] = 'Matrikula amaituko dela jakinarazteko abisuen bidalketa-ordua';
$string['expirythreshold'] = 'Jakinarazpenen atalasea';
$string['expirythreshold_help'] = 'Zenbat egun lehenago bidali behar zaie abisua erabiltzaileei, matrikula amaitu aurretik?';
$string['extremovedaction'] = 'Kanpoko desmatrikulazio-ekintza';
$string['extremovedaction_help'] = 'Aukeratu ekintza bat kanpoko matrikulazioa erabiltzaileak matrikulatzeko iturri gisa desagertzen denerako. Kontuan izan erabiltzaileen hainbat datu eta ezarpen galdu egiten direla ikastarotik desmatrikulatzean.';
$string['extremovedkeep'] = 'Mantendu erabiltzailea matrikulatuta';
$string['extremovedsuspend'] = 'Desgaitu ikastaro-matrikulazioa';
$string['extremovedsuspendnoroles'] = 'Desgaitu ikastaro-matrikulazioa eta kendu rolak';
$string['extremovedunenrol'] = 'Desmatrikulatu erabiltzailea ikastarotik';
$string['finishenrollingusers'] = 'Amaitu erabiltzaileak matrikulatzen';
$string['foundxcohorts'] = 'Aurkitutako {$a} kohorte';
$string['instanceadded'] = 'Metodoa gehitu da';
$string['instanceeditselfwarning'] = 'Kontuz:';
$string['instanceeditselfwarningtext'] = 'Matrikulazio-metodo hau erabilita zaude matrikulatuta ikastaro honetan eta aldaketek eragotzi egin dezakete ikastarorako sarbidea.';
$string['invalidenrolduration'] = 'Matrikula-iraupen baliogabea';
$string['invalidenrolinstance'] = 'Matrikulazio-instantzia baliogabea';
$string['invalidrequest'] = 'Eskari baliogabea';
$string['invalidrole'] = 'Rolak ez du balio';
$string['manageenrols'] = 'Kudeatu matrikulazio-pluginak';
$string['manageinstance'] = 'Kudeatu';
$string['method'] = 'Metodoa';
$string['migratetomanual'] = 'Migratu eskuzko matrikulaziora';
$string['nochange'] = 'Aldaketarik ez';
$string['noexistingparticipants'] = 'Ez dago partaiderik';
$string['nogroup'] = 'Talderik ez';
$string['noguestaccess'] = 'Gonbidatuak ezin dira ikastaro honetan sartu. Mesedez, hasi saioa.';
$string['none'] = 'Bat ere ez';
$string['notenrollable'] = 'Ezin duzu zeure burua matrikulatu ikastaro honetan.';
$string['notenrolledusers'] = 'Beste erabiltzaile batzuk';
$string['otheruserdesc'] = 'Ondorengo erabilzaileak ez daude matrikulatuta ikastaro honetan baina rolak dituzte, heredatutakoak edo esleitutakoak, bertan.';
$string['participationactive'] = 'Aktiboa';
$string['participationnotcurrent'] = 'Ez aktiboa';
$string['participationstatus'] = 'Egoera';
$string['participationsuspended'] = 'Etenda';
$string['periodend'] = 'noiz arte {$a}';
$string['periodnone'] = '{$a} matrikulatuta';
$string['periodstart'] = 'noiztik {$a}';
$string['periodstartend'] = '{$a->start} -tik  {$a->end} arte';
$string['plugindisabled'] = '{$a} matrikulazio-plugina desgaituta dago';
$string['privacy:metadata:user_enrolments'] = 'Matrikulak';
$string['privacy:metadata:user_enrolments:enrolid'] = 'Matrikulazio-pluginaren instantzia';
$string['privacy:metadata:user_enrolments:modifierid'] = 'Erabiltzailearen matrikula azkenik aldatu zuen erabiltzailearen IDa';
$string['privacy:metadata:user_enrolments:status'] = 'Erabiltzailearen matrikulazio-egoera ikastaroan';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Sistemako matrikulazio-pluginak matrikulatutako erabiltzaileak gordetzen ditu.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'Erabiltzailearen matrikula sortu zeneko unea';
$string['privacy:metadata:user_enrolments:timeend'] = 'Erabiltzailearen matrikula amaitu zeneko unea';
$string['privacy:metadata:user_enrolments:timemodified'] = 'Erabiltzailearen matrikula aldatu zeneko unea';
$string['privacy:metadata:user_enrolments:timestart'] = 'Erabiltzailearen matrikula hasi zeneko unea';
$string['privacy:metadata:user_enrolments:userid'] = 'Erabiltzailearen IDa';
$string['recovergrades'] = 'Berreskuratu erabiltzailearen lehengo kalfikazioak, posible bada';
$string['rolefromcategory'] = '{$a->role} (Ikastaro-kategoriatik heredatutakoa)';
$string['rolefrommetacourse'] = '{$a->role} (Goragoko ikastarotik heredatutakoa)';
$string['rolefromsystem'] = '{$a->role} (Gune mailan esleitutakoa)';
$string['rolefromthiscourse'] = '{$a->role} (Ikastaro honetan esleitutakoa)';
$string['sendcoursewelcomemessage'] = 'Bidali ikastaroko ongi-etorri mezua';
$string['sendcoursewelcomemessage_help'] = 'Erabiltzaile edo kohorte bat ikastaroan matrikulatzean, ongi-etorri e-maila bidali ahal zaie. Ikastaroko kontaktuak bidaltzen badu (modu lehenetsian irakasleak) eta erabiltzaile batek baino gehiagok badute rol hori, e-maila rol hori daukan lehen erabiltzailearen izenean bidaliko da.';
$string['sendfromcoursecontact'] = 'Ikastaroko kontaktuak bidalita';
$string['sendfromkeyholder'] = 'Gako-zainak bidalita';
$string['sendfromnoreply'] = 'Ez-erantzun helbidetik bidalita';
$string['startdatetoday'] = 'Gaur';
$string['synced'] = 'Sinkronizatua';
$string['testsettings'] = 'Probatu ezarpenak';
$string['testsettingsheading'] = 'Matrikulazio-ezarpenen proba - {$a}';
$string['timeended'] = 'Amaitze-unea';
$string['timeenrolled'] = 'Matrikulatuta igarotako denbora';
$string['timereaggregated'] = 'Berriz agregatzeko unea';
$string['timestarted'] = 'Hasiera-unea';
$string['totalenrolledusers'] = '{$a} erabiltzaile matrikulatuta';
$string['totalotherusers'] = 'beste {$a} erabiltzaile';
$string['totalunenrolledusers'] = '{$a} erabiltzaile desmatrikulatu dira';
$string['unassignnotpermitted'] = 'Ez duzu baimenik rolak kentzeko ikastaro honetan';
$string['unenrol'] = 'Desmatrikulatu';
$string['unenrolconfirm'] = 'Ziur zaude ("{$a->course}" ikastarotik "{$a->enrolinstancename}" matrikulazio-metodoa erabiliz matrikulatuta dagoen) "{$a->user}" erabiltzailea desmatrikulatu nahi duzula?';
$string['unenrolleduser'] = '"{$a->fullname}" erabiltzailea ikastarotik desmatrikulatu da';
$string['unenrolme'] = 'Desmatrikulatu nazazu Ikastaro honetatik';
$string['unenrolnotpermitted'] = 'Ez duzu baimenik erabiltzaile hau ikastaro honetatik desmatrikulatzeko.';
$string['unenrolroleusers'] = 'Desmatrikulatu erabiltzaileak';
$string['uninstallmigrating'] = '"{$a}" matrikulak migratzen';
$string['unknowajaxaction'] = 'Eskatutako ekintza ezezaguna da';
$string['unlimitedduration'] = 'Mugarik gabea.';
$string['userremovedfromselectiona'] = '"{$a}" erabiltzailea aukeraketatik kendu da.';
$string['usersearch'] = 'Bilatu';
$string['withselectedusers'] = 'Aukeratutako erabiltzaileekin';
$string['youenrolledincourse'] = 'Ikastaroan matrikulatuta zaude.';
$string['youunenrolledfromcourse'] = '"{$a}" ikastarotik desmatrikulatua izan zara.';
