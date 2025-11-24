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
 * Strings for component 'enrol_imsenterprise', language 'eu', version '4.5'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'Zehaztasunak gordetakoan, agian nahiko duzu';
$string['allowunenrol'] = 'Baimendu IMS datuei ikasleak eta irakasleak desmatrikulatzea';
$string['allowunenrol_desc'] = 'Gaituz gero, ikastaroko matrikulazioak ezabatuko dira Enterprise datuetan horrela zehazten denean.';
$string['basicsettings'] = 'Oinarrizko ezarpenak';
$string['categoryidnumber'] = 'Baimendu kategorien ID zenbakia';
$string['categoryidnumber_desc'] = 'Gaituz gero IMS Enterprise-k ID zenbakia duen kategoria bat sortuko du.';
$string['categoryseparator'] = 'Kategoriako karaktere-banatzailea';
$string['categoryseparator_desc'] = 'Beharrezkoa \'Baimendu kategorien ID zenbakia\' gaituta dagoenean. Kategoriaren izena eta ID zenbakia banatzeko karakterea.';
$string['coursesettings'] = 'Ikastaroaren datuen aukerak';
$string['createnewcategories'] = 'Sortu ikastaroaren kategoria berriak (ezkutukoak) Moodlen ez badaude';
$string['createnewcategories_desc'] = '&lt;org&gt;&lt;orgunit&gt; elementua ikastaroaren sarrerako datuetan badago, bere edukia ikastaroaren kategoria zehazteko erabiliko da ikastaroa sortu behar bada. Pluginak EZ ditu existitzen diren ikastaroak berriz kategorizatzen.

Zehaztutako izeneko kategoriarik existitzen ez bada, ezkutuzko kategoria bat sortuko da.';
$string['createnewcourses'] = 'Sortu ikastaro berriak (ezkutukoak) Moodlen ez badaude';
$string['createnewcourses_desc'] = 'Gaituz gero, IMS Enterprise matrikulazio-pluginak ikastaro berriak sortu ahalko ditu IMS datuetan Moodleko datu-basean existitzen ez den ikastarorik aurkitzen badu. Ikastaro sortu-berri guztiak hasieran ezkutuan egongo dira.';
$string['createnewusers'] = 'Sortu oraindik Moodlen erregistratu ez diren erabiltzaileentzako erabiltzaile-kontuak';
$string['createnewusers_desc'] = 'IMS Enterprise matrikulazio-datuek normalean erabiltzaile-multzo bat deskribatzen dute. Gaituz gero, Moodleko datu-basean existitzen ez diren erabiltzaileentzako kontuak sortu ahalko dira.

Erabiltzaileak aurkitzeko lehenengo euren ID zenbakia eta ondoren euren Moodleko erabiltzaile-izena bilatzen dira. IMS Enterprise pluginak ez ditu pasahitzak inportatzen. Erabiltzaileak autentifikatzeko autentifikazio-plugin bat erabiltzea gomendatzen da.';
$string['cronfrequency'] = 'Prozesamenduaren maiztasuna';
$string['deleteusers'] = 'Ezabatu erabiltzaile-kontuak IMS datuetan zehazten denean';
$string['deleteusers_desc'] = 'Gaituz gero, IMS Enterprise matrikulazio-gehigarriak erabiltzaile-kontuen ezabatzea zehaztu dezake ("recstatus" banderak 3 balioa badu, kontuaren ezabatzea irudikatzen duena). Moodlen modu lehenetsian gertatzen den moduan, erabiltzailearen erregistroa ez da datu-basetik ezabatzen, baina kontua ezabatu gisa markatzen da.';
$string['disableenrolmentandremoveallroles'] = 'Eten matrikulazioa eta ezabatu rolak';
$string['disableenrolonly'] = 'Eten matrikulazioa soilik';
$string['doitnow'] = 'Exekutatu oraintxe bertan IMS Enterprise inportazioa';
$string['emptyattribute'] = 'Utzi hutsik';
$string['filelockedmail'] = 'IMS fitxategian oinarritutako matrikulazioetarako erabiltzen ari zaren testua ({$a})ezin da kron prozesuaren bitartez ezabatu. Horrek normalean prozesuak okerrekoak direla esan nahi izaten du. Mesedez, banatu baimenak Moodlek fitxategia ezabatu ahal izateko (bestela, behin eta berriz prozesatuko litzateke).';
$string['filelockedmailsubject'] = 'Errore larria: Matrikulazio-fitxategia';
$string['fixcasepersonalnames'] = 'Aldatu izen pertsonalak letra larrira.';
$string['fixcaseusernames'] = 'Aldatu erabiltzaileen izenak lerra xehera.';
$string['ignore'] = 'Baztertu';
$string['importimsfile'] = 'Inportatu IMS Enterprise fitxategia';
$string['imsenterprise:config'] = 'Konfiguratu IMS Enterprise matrikulazio-instantziak';
$string['imsenterprisecrontask'] = 'Matrikulazio-fitxategia prozesatzen';
$string['imsrolesdescription'] = 'IMS Enterprise ezarpenak 8 rol ezberdin hartzen ditu bere baitan. Mesedez, aukeratu nola nahi duzun Moodlen zuri ezartzea eta baita baten bat alde batera utzi behar den ere.';
$string['location'] = 'Fitxategiaren kokapena';
$string['logtolocation'] = 'Irteerako log fitxategiaren kokapena (hutsik utzi ez badago erregistrorik)';
$string['mailadmins'] = 'Jakinarazi posta elektronikoz kudeatzaileari';
$string['mailusers'] = 'Jakinarazi posta elektronikoz erabiltzaileei';
$string['messageprovider:imsenterprise_enrolment'] = 'IMS Enterprise matrikulazio-mezuak';
$string['miscsettings'] = 'Bestelakoak';
$string['nestedcategories'] = 'Baimendu habiaratutako kategoriak';
$string['nestedcategories_desc'] = 'Gaituz gero IMS Enterprise-k habiaratutako kategoriak sortuko ditu';
$string['noaction'] = 'Ekintzarik ez';
$string['pluginname'] = 'IMS Enterprise fitxategia';
$string['pluginname_desc'] = 'Metodo honek modu errepikakorrean zehaztutako kokapenean dagoen formatu bereziko testu-fitxategia bilatu eta prozesatu egingo du. Fitxategiak IMS Enterprise ezarpenak jarraitu eta person, group, eta membership XML elementuak izan behar ditu.';
$string['privacy:metadata'] = 'IMS Enterprise fitxategia matrikulazio-pluginak ez du datu pertsonalik biltzen.';
$string['processphoto'] = 'Gehitu erabiltzailearen argazkia profilari';
$string['processphotowarning'] = 'Kontuz: Irudiak prozesatzeak zerbitzariari lan karga nabarmen gaineratuko dio seguruenik. Aukera hau ez aktibatzeko gomendatzen da ikasle-kopuru altua prozesatzeko asmoa badago.';
$string['removeenrolmentandallroles'] = 'Ezabatu matrikulazioa eta rolak';
$string['restricttarget'] = 'Prozesatu datuak soilik ondorengo helburua zehaztu bada';
$string['restricttarget_desc'] = 'IMS Enterprise-ko datu-fitxategi bat "helburu" anitzetarako erabil daiteke - LMS ezberdinak, edota eskola/unibertsitateko sistema ezberdinak. Fitxategian helburuko sistemarako datuak zeintzuk diren zehazteko aukera dago, hauek <properties> etiketaren barruan <target> etiketekin izendatuz.

Orokorrean ez duzu honengatik arduratu behar. Hutsik utzi ezarpen hau eta Moodlek datuak beti prozesatuko ditu, helburua zehaztuta egon edo ez. Bestela, zehaztu <target> etiketaren barruan erabilitako izen zehatza.';
$string['roles'] = 'Rolak';
$string['settingfullname'] = 'IMS deskribapen-etiketa ikastaroaren izen luzerako';
$string['settingfullnamedescription'] = 'Izen osoa ikastaroaren beharrezko eremua da eta beraz zure IMS Enterprise fitxategiko description etiketan definitu behar duzu';
$string['settingshortname'] = 'IMS deskribapen-etiketa ikastaroaren izen laburrerako';
$string['settingshortnamedescription'] = 'Izen laburra ikastaroaren beharrezko eremua da eta beraz zure IMS Enterprise fitxategiko description etiketan definitu behar duzu';
$string['settingsummary'] = 'IMS deskribapen-etiketa ikastaroaren laburpenerako';
$string['settingsummarydescription'] = 'Hautazko eremua da , aukeratu \'Utzi hutsik\' ez baduzu ikastaroaren laburpena zehaztu nahi.';
$string['sourcedidfallback'] = 'Erabili \'sourcedid\'-a erabiltzaile baten erabiltzaile-ID gisa bere "userid" eremua aurkitzen ez bada';
$string['sourcedidfallback_desc'] = 'IMS datuetan, <sourcedid> eremuak jatorrizko sisteman pertsona batentzako ID kode iraunkorra irudikatzen du. <userid> eremua beste eremu bat da eta sartzera zoazen sistemarako ID kodea eduki beharko luke. Kasu askotan bi kode hauek berdinak izango dira - baina ez beti.

Informazio Zerbitzu batzuk ikasleen <userid> eremua esportatzean huts egiten dute. Kasu horretan, ezarpen hau gaitu beharko zenuke <sourcedid> eremua Moodleko erabiltzaile ID gisa erabili ahal izateko. Bestela, utzi ezarpen hau desgaituta.';
$string['truncatecoursecodes'] = 'Ikastaroaren kodeak luzera honetara moztu';
$string['truncatecoursecodes_desc'] = 'Egoera batzuetan prozesatu aurretik ikastaro batzuetako kodeak moztu nahiko dituzu gehieneko luzera bat izan dezaten. Horrela bada, zehaztu hemen gehieneko karaktere kopurua. Bestela, hutsik utzi ezarpen hau eta ez da mozketarik egingo.';
$string['unenrolaction'] = 'Desmatrikulazio-ekintza';
$string['unenrolaction_desc'] = 'Erabiltzaile bat ikastarotik desmatrikulatzen denean exekutatu beharreko ekintza (soilik goiko desmatrikulatu ezarpena gaituta badago)';
$string['updatecourses'] = 'Eguneratu ikastaroa';
$string['updatecourses_desc'] = 'Gaituz gero, IMS Enterprise matrikulazio-pluginak ikastaroen izen laburra eta izen osoa eguneratzeko aukera izango du ("recstatus" markak 2 balioa badu, eguneratze bat erakusten duena)';
$string['updateusers'] = 'Eguneratu erabiltzaile-kontuak IMS datuetan zehaztuta dagoenean';
$string['updateusers_desc'] = 'Gaituz gero, IMS Enterprise  matrikulazio-gehigarriaren datuetan erabiltzaile-kontuetako aldaketak zehaz daitezke ("recstatus" markak 2 balioa badu, eguneratze bat erakusten duena)';
$string['usecapitafix'] = 'Kutxa hau markatu Capita erabiltzen bada (bere XML formatua ezberdina delako)';
$string['usecapitafix_desc'] = 'Errore bat antzeman da Capita sistemak sortutako ikasleen datuetako XML irteeran. Capita erabiltzen ari bazara ezarpen hau gaitu beharko zenuke - bestela utz ezazu markatu gabe.';
$string['usersettings'] = 'Erabiltzailearen datuen aukerak';
$string['zeroisnotruncation'] = '0-ak kodeak ez direla mozten adierazten du';
