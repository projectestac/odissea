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
 * Strings for component 'webservice', language 'eu', version '3.11'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Sarbide-kontrolerako salbuespena';
$string['actwebserviceshhdr'] = 'Web-zerbitzuetarako protokolo aktiboak';
$string['addaservice'] = 'Gehitu zerbitzua';
$string['addcapabilitytousers'] = 'Egiaztatu erabiltzaileen gaitasunak';
$string['addcapabilitytousersdescription'] = 'Erabiltzaileek bi gaitasun izan beharko lituzkete - webservice:createtoken eta erabiiltako protokoloekin lotutakoa, adibidez webservice/rest:use edo webservice/soap:use. Hau lortzeko, sortu ezazu web-zerbitzuetan beharrezko gaitasunak baimenduta dituen rol bat eta esleitu iezaiozu web-zerbitzuaren erabiltzaileari sistemako rol moduan.';
$string['addfunction'] = 'Gehitu funtzioa';
$string['addfunctionhelp'] = 'Aukeratu zein funtzio gehitu zerbitzura.';
$string['addfunctions'] = 'Gehitu funtzioak';
$string['addfunctionsdescription'] = 'Aukeratu beharrezko funtzioak zerbitzu berrirako.';
$string['addrequiredcapability'] = 'Esleitu/kendu beharrezko gaitasuna';
$string['addservice'] = 'Gehitu web-zerbitzu berria: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Gehitu funtzioak "{$a}" zerbitzura';
$string['allusers'] = 'Erabiltzaile guztiak';
$string['apiexplorer'] = 'API arakatzailea';
$string['apiexplorernotavalaible'] = 'API arakatzailea ez dago oraindik eskuragarri.';
$string['arguments'] = 'Argumentuak';
$string['authmethod'] = 'Autentifikazio-metodoa';
$string['callablefromajax'] = 'AJAX-etik deitu dakioke';
$string['cannotcreatetoken'] = 'Ez duzu baimenik {$a} zerbitzuarentzako web-zerbitzu tokena sortzeko.';
$string['cannotgetcoursecontents'] = 'Ezin dira ikastaroaren edukiak lortu';
$string['checkusercapability'] = 'Egiaztatu erabiltzailearen gaitasunak';
$string['checkusercapabilitydescription'] = 'Erabiltzaileak erabililtako protokoloekin lotutakoa gaitasunak izan beharko lituzke, adibidez webservice/rest:use edo webservice/soap:use. Hau lortzeko, sor ezazu web-zerbitzuetan beharrezko gaitasunak baimenduta dituen rol bat eta esleitu iezaiozu web-zerbitzuaren erabiltzaileari sistemako rol moduan.';
$string['configwebserviceplugins'] = 'Segurtasun-arrazoiak direla-eta, erabiliko diren protokoloak baino ez lirateke gaitu beharko.';
$string['context'] = 'Testuingurua';
$string['createservicedescription'] = 'Zerbitzu bat web-zerbitzu bateko funtzioen multzo bat da. Funtzioen multzo horrekin erabiltzaileei zerbitzu berri baterako sarbidea emango diezu. <strong>Gehitu zerbitzua</strong> orrian markatu \'Gaituta\' eta \'Baimendutako erabiltzaileak\' aukerak. Aukeratu \'Ez da gaitasunik behar\'.';
$string['createserviceforusersdescription'] = 'Zerbitzu bat web-zerbitzu bateko funtzioen multzo bat da. Funtzioen multzo horrekin erabiltzaileei zerbitzu berri baterako sarbidea emango diezu. <strong>Gehitu zerbitzua</strong> orrian markatu \'Gaituta\' eta \'Baimendutako erabiltzaileak\' aukerak. Aukeratu \'Ez da gaitasunik behar\'';
$string['createtoken'] = 'Sortu tokena';
$string['createtokenforuser'] = 'Sortu erabiltzaile batentzako tokena';
$string['createtokenforuserdescription'] = 'Sortu web-zerbitzuko erabiltzaileentzako tokena.';
$string['createuser'] = 'Sortu erabiltzaile jakin bat';
$string['createuserdescription'] = 'Web-zerbitzuko erabiltzaile bat behar da Moodlek kontrolatzen duen sistema ordezkatzeko.';
$string['criteriaerror'] = 'Baimenak falta dira irizpidean bilatzeko.';
$string['default'] = 'Lehenetsitako balioa: "{$a}"';
$string['deleteaservice'] = 'Ezabatu zerbitzua';
$string['deleteservice'] = 'Ezabatu zerbitzua: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Zerbitzu bat ezabatzeak zerbitzu horrekin lotutako tokenak ere ezabatuko ditu. Ziur zaude "{$a}" kanpoko zerbitzua ezabatu nahi duzula?';
$string['deletetokenconfirm'] = 'Ziur zaude <strong>{$a->service}</strong> zerbitzuko <strong>{$a->user}</strong> erabiltzailearen web-zerbitzuko tokena ezabatu nahi duzula?';
$string['disabledwarning'] = 'Web-zerbitzuetako protokolo guztiak desgaituta daude. "Gaitu web-zerbitzuak" ezarpena Funtzio aurreratuetan aurkitu daiteke.';
$string['doc'] = 'Dokumentazioa';
$string['docaccessrefused'] = 'Ez duzu baimenik token honen dokumentazioa ikusteko';
$string['documentation'] = 'web-zerbitzuaren dokumentazioa';
$string['downloadfiles'] = 'Fitxategiak jaitsi daitezke';
$string['downloadfiles_help'] = 'Gaituz gero, edozein erabiltzailek fitxategiak jaitsi ditzake bere segurtasun-giltza erabiliz. Gunetik jaitsi ditzaketen fitxategiak baino ezingo dituzte jaitsi, noski.';
$string['editaservice'] = 'Editatu zerbitzua';
$string['editservice'] = 'Editatu zerbitzua: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Gaituta';
$string['enabledocumentation'] = 'Gaitu garatzaileen dokumentazioa';
$string['enabledocumentationdescription'] = 'Gaitutako protokoloentzako web-zerbitzuen dokumentazio xehetua eskuragarri dago.';
$string['enableprotocols'] = 'Gaitu protokoloak';
$string['enableprotocolsdescription'] = 'Gutxienez protokolo batek gaituta egon behar du. Segurtasun-arrazoiengatik, erabiliko diren protokoloak baino ez lirateke gaitu beharko.';
$string['enablews'] = 'Gaitu web-zerbitzuak';
$string['enablewsdescription'] = 'Web-zerbitzuek funtzio aurreratuetan gaituta egon behar dute.';
$string['entertoken'] = 'Idatzi segurtasun-giltza/tokena:';
$string['error'] = 'Errorea: {$a}';
$string['errorcatcontextnotvalid'] = 'Ezin duzu funtziorik exekutatu kategoria testuinguruan (kategoriaren IDa:{$a->catid}). Testuinguruaren errore-mezua hau izan da: {$a->message}';
$string['errorcodes'] = 'Errore-mezua';
$string['errorcoursecontextnotvalid'] = 'Ezin duzu funtziorik exekutatu ikastaro testuinguruan (ikastaroaren IDa:{$a->catid}). Testuinguruaren errore-mezua hau izan da: {$a->message}';
$string['errorinvalidparam'] = '"{$a}" parametroa baliogabea da.';
$string['errornotemptydefaultparamarray'] = 'Web-zerbitzuaren \'{$a}\' izeneko deskribapen-parametroa egitura bakan edo anizkoitzekoa da. Lehenetsitako balioa kate hutsa baino ezin da izan. Egiaztatu web-zerbitzuaren deskribapena.';
$string['erroroptionalparamarray'] = 'Web-zerbitzuaren \'{$a}\' izeneko deskribapen-parametroa egitura bakan edo anizkoitzekoa da. Ezin du VALUE_OPTIONAL gisa konfiguratu. Egiaztatu web-zerbitzuaren deskribapena.';
$string['eventwebservicefunctioncalled'] = 'Web-zerbitzuaren funtzioari deitu zaio';
$string['eventwebserviceloginfailed'] = 'Web-zerbitzuaren saio-hasierak huts egin du';
$string['eventwebserviceservicecreated'] = 'Web-zerbitzua sortu da';
$string['eventwebserviceservicedeleted'] = 'Web-zerbitzua ezabatu da';
$string['eventwebserviceserviceupdated'] = 'Web-zerbitzuaa eguneratu da';
$string['eventwebserviceserviceuseradded'] = 'Web-zerbitzuaren erabiltzailea gehitu da';
$string['eventwebserviceserviceuserremoved'] = 'Web-zerbitzuaren erabiltzailea ezabatu da';
$string['eventwebservicetokencreated'] = 'Web-zerbitzuaren tokena sortu da';
$string['eventwebservicetokensent'] = 'Web-zerbitzuaren tokena bidali da';
$string['execute'] = 'Exekutatu';
$string['executewarnign'] = 'KONTUZ: \'Exekutatu\' sakatzen baduzu, zure datu-basea aldatuko da eta aldaketa hauek ez dute atzerabuelta automatikorik!';
$string['externalservice'] = 'Kanpoko zerbitzua';
$string['externalservicefunctions'] = 'Kanpoko zerbitzuaren funtzioak';
$string['externalservices'] = 'Kanpoko zerbitzuak';
$string['externalserviceusers'] = 'Kanpoko zerbitzuaren erabiltzaileak';
$string['failedtolog'] = 'Errorea saioa hastean';
$string['filenameexist'] = 'Fitxategiaren izena dagoeneko existitzen da: {$a}';
$string['forbiddenwsuser'] = 'Ezin da token bat sortu egiaztatu gabeko kontua duten, ezabatutako, bertan behera utzitako edo gonbidatutako erabiltzaile batentzat.';
$string['function'] = 'Funtzioa';
$string['functions'] = 'Funtzioak';
$string['generalstructure'] = 'Egitura orokorra';
$string['information'] = 'informazioa';
$string['installexistingserviceshortnameerror'] = 'Lehendik badago "{$a}" izeneko web-zerbitzu bat. Ezin da instalatu/eguneratu izen labur hau duen beste web-zerbitzu bat.';
$string['installserviceshortnameerror'] = 'Kodifikazio-errorea: "{$a}" zerbitzuaren izen laburrak karaktere alfanumerikoak (hizkiak eta zenbakiak), beheko gidoiak (_), gidoiak (-) eta puntuak (.) baino ezin ditu izan.';
$string['invalidextparam'] = 'Kanpoko API parametro baliogabea: {$a}';
$string['invalidextresponse'] = 'Kanpoko API-aren deskribapen baliogabea: {$a}';
$string['invalidiptoken'] = 'Token baliogabea - zure IP helbidea ez da onartzen.';
$string['invalidtimedtoken'] = 'Token baliogabea - tokena iraungi da';
$string['invalidtoken'] = 'Token baliogabea - ez da tokena aurkitu';
$string['iprestriction'] = 'IP murrizketa';
$string['iprestriction_help'] = 'Erabiltzaileak web-zerbitzuari (komaz banatuta) zerrendako IP helbideetatik deitu behar dio .';
$string['key'] = 'Gakoa';
$string['keyshelp'] = 'Gakoak zure Moodle kontuan kanpoko aplikazioetatik sartzeko erabiltzen dira.';
$string['loginrequired'] = 'Saioa hasi duten erabiltzaileei murriztua';
$string['manageprotocols'] = 'Kudeatu protokoloak';
$string['managetokens'] = 'Kudeatu tokenak';
$string['missingcaps'] = 'Gaitasunak falta dira';
$string['missingcaps_help'] = 'Zerbitzuak emandako erabiltzaileak ez dituen baimenen zerrenda. Baimen hauek izan gabe baliteke zerbitzuaren funtzionalitateren bat eskuragarri ez egotea.';
$string['missingpassword'] = 'Pasahitza falta da';
$string['missingrequiredcapability'] = '{$a} gaitasuna beharrezkoa da.';
$string['missingusername'] = 'Erabiltzaile-izena falta da';
$string['missingversionfile'] = 'Kodeaketa-errorea: {$a} osagaiaren version.php fitxategia falta da';
$string['nameexists'] = 'Izen hau dagoeneko beste zerbitzu batean erabiltzen ari da';
$string['nocapabilitytouseparameter'] = 'Erabiltzaileak ez dauka {$a} parametroa erabiltzeko behar den gaitasuna';
$string['nofunctions'] = 'Zerbitzu honek ez du funtziorik.';
$string['norequiredcapability'] = 'Ez da gaitasunik behar';
$string['notoken'] = 'Token-zerrenda hutsik dago';
$string['onesystemcontrolling'] = 'Baimendu kanpoko sistemak Moodle kontrolatzea';
$string['onesystemcontrollingdescription'] = 'Hurrengo urratsek lagunduko dizute Moodleko web-zerbitzua kanpoko sistema batekin eragiteko konfiguratzen. Honek autentifikazio-metodorako token bat (segurtasun-gakoa) konfiguratzea barne hartzen du.';
$string['onlyseecreatedtokens'] = 'Soilik zuk sortutako token-ak ikus ditzakezu.';
$string['operation'] = 'Eragiketa';
$string['optional'] = 'Aukerakoa';
$string['passwordisexpired'] = 'Pasahitza iraungi da.';
$string['phpparam'] = 'XML-RPC (PHP egitura)';
$string['phpresponse'] = 'XML-RPC (PHP egitura)';
$string['postrestparam'] = 'PHP kodea REST-erako (POST request)';
$string['potusers'] = 'Baimenik gabeko erabiltzaileak';
$string['potusersmatching'] = 'Bat datozen baimenik gabeko erabiltzaileak';
$string['print'] = 'Inprimatu guztia';
$string['privacy:metadata:serviceusers'] = 'Kanpoko zerbitzu zehatz bat erabili dezaketen erabiltzaileen zerrenda';
$string['privacy:metadata:serviceusers:iprestriction'] = 'Zerbitzua erabiltzeko mugatutako IP helbidea';
$string['privacy:metadata:serviceusers:timecreated'] = 'Erregistroa sortu zeneko data';
$string['privacy:metadata:serviceusers:userid'] = 'Erabiltzailearen IDa';
$string['privacy:metadata:serviceusers:validuntil'] = 'Baimena amaitzen deneko data';
$string['privacy:metadata:tokens'] = 'Web-zerbitzu edo Mobile aplikazioen bitartez Moodlerekin harremanetan jartzeko tokenen erregistroa.';
$string['privacy:metadata:tokens:creatorid'] = 'Tokena sortu zuen erabiltzailearen IDa';
$string['privacy:metadata:tokens:iprestriction'] = 'Token hau erabiltzeko mugatutako IP helbidea';
$string['privacy:metadata:tokens:lastaccess'] = 'Tokena azkenengoz erabili zeneko data';
$string['privacy:metadata:tokens:privatetoken'] = 'Noizean behin eragiketa zehatz batzuk balidatzeko erabilitako token pribatuagoa, hala nola SSO';
$string['privacy:metadata:tokens:timecreated'] = 'Tokena sortu zeneko unea';
$string['privacy:metadata:tokens:token'] = 'Erabiltzailearen tokena';
$string['privacy:metadata:tokens:tokentype'] = 'Token mota';
$string['privacy:metadata:tokens:userid'] = 'Tokenaren jabea den erabiltzailearen IDa';
$string['privacy:metadata:tokens:validuntil'] = 'Tokena iraungiko deneko unea';
$string['privacy:request:notexportedsecurity'] = 'Ez da esportatzen segurtasun-arrazoiak direla eta';
$string['protocol'] = 'Protokoloa';
$string['removefunction'] = 'Ezabatu';
$string['removefunctionconfirm'] = 'Ziur zaude "{$a->function}" funtzioa "{$a->service}" zerbitzutik ezabatu nahi duzula?';
$string['requireauthentication'] = 'Metodo honek xxx baimena duen autentifikazioa behar du.';
$string['required'] = 'Beharrezkoa';
$string['requiredcapability'] = 'Beharrezko gaitasuna';
$string['requiredcapability_help'] = 'Ezarriz gero, beharrezko gaitasunak dituzten erabiltzaileak baino ezin izango dira zerbitzura sartu.';
$string['requiredcaps'] = 'Beharrezko gaitasunak';
$string['resettokenconfirm'] = 'Ziur zaude <strong>{$a->service}</strong> zerbitzuko <strong>{$a->user}</strong> erabiltzailearen web-zerbitzu gako hau berrabiarazi nahi duzula?';
$string['resettokenconfirmsimple'] = 'Ziur zaude gako hau berrabiarazi nahi duzula? Gako zaharra duten esteka guztiek ez dute gehiago funtzionatuko.';
$string['response'] = 'Erantzuna';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Berreskuratutako kontu batek pasahitza aldatu behar du token bat lortu baino lehen.';
$string['restparam'] = 'REST (POST parametroak)';
$string['restrictedusers'] = 'Baimendutako erabiltzaileak baino ez';
$string['restrictedusers_help'] = 'Ezarpen honek zehazten du web-zerbitzuetako tokenak sortzeko baimena duten erabiltzaile guztiek euren segurtasun-gakoen orriaren bitartez zerbitzu honetarako tokena sortu dezaketen edo hori soilik baimendutako erabiltzaileek egin dezaketen.';
$string['securitykey'] = 'Segurtasun-gakoak (tokena)';
$string['securitykeys'] = 'Segurtasun-gakoak';
$string['selectauthorisedusers'] = 'Aukeratu baimendutako erabiltzaileak';
$string['selectedcapability'] = 'Aukeratuta';
$string['selectedcapabilitydoesntexit'] = 'Une honetan konfiguratutako gaitasuna ({$a}) ez da dagoeneko existitzen. Mesedez, aldatu eta  gorde aldaketak.';
$string['selectservice'] = 'Aukeratu zerbitzu bat';
$string['selectspecificuser'] = 'Aukeratu erabiltzaile jakin bat';
$string['selectspecificuserdescription'] = 'Gehitu web-zerbitzuetako erabiltzailea baimendutako erabiltzaile gisa.';
$string['service'] = 'Zerbitzua';
$string['servicehelpexplanation'] = 'Zerbitzu bat funtzioen multzo bat da. Zerbitzu batera erabiltzaile guztiek izan dezakete sarbidea edo zehaztutako erabiltzaileak soilik.';
$string['servicename'] = 'Zerbitzuaren izena';
$string['servicenotavailable'] = 'Web-zerbitzua ez dago eskuragarri (ez da existitzen edo baliteke desgaituta egotea).';
$string['servicerequireslogin'] = 'Web-zerbitzua ez dago eskuragarri (saioa itxi egin da edo iraungi da).';
$string['servicesbuiltin'] = 'Barne dauden zerbitzuak';
$string['servicescustom'] = 'Pertsonalizatu zerbitzuak';
$string['serviceusers'] = 'Baimendutako erabiltzaileak';
$string['serviceusersettings'] = 'Erabiltzailearen ezarpenak';
$string['serviceusersmatching'] = 'Bat datozen baimendun erabiltzaileak';
$string['serviceuserssettings'] = 'Aldatu ezarpenak baimendutako erabiltzaileei';
$string['shortnametaken'] = 'Izen labur hau erabiltzen duen beste zerbitzu bat dago ({$a})';
$string['simpleauthlog'] = 'Autentifikazio sinplerako sarbidea';
$string['step'] = 'Urratsa';
$string['supplyinfo'] = 'Xehetasun gehiago';
$string['testauserwithtestclientdescription'] = 'Simulatu kanpotiko zerbitzurako sarbidea web-zerbitzuaren proba-bezeroa erabilita. Hori egin aurretik, sar zaitez moodle/webservice:createtoken gaitasuna duen erabiltzaile batekin eta lor ezazu segurtasun-gakoa (token) erabiltzailearen hobespenen orritik. Token hori proba-bezeroan erabiliko duzu. Proba-bezeroan aukeratu token bidezko autentifikazioa duen gaitutako protokolo bat. <strong>KONTUZ: Probatuko dituzun funtziok erabiltzaile honentzako EXEKUTATUKO DIRA, beraz probatuko duzuna kontuz aukeratu!</strong>';
$string['testclient'] = 'Web-zerbitzuaren proba-bezeroa';
$string['testclientdescription'] = '* Web-zerbitzuaren proba-bezeroak funtzioak <strong>BENETAN exekutatzen ditu</strong>. Ez probatu ezagutzen ez dituzun funtzioak. <br/>
* Existitzen diren web-zerbitzuko funtzio guztiak oraindik ez dira proba-bezeroan implementatu.<br/>
* Erabiltzaile batek funtzio batzuk erabili ezin dituela egiaztatzeko, baimentzen ez dituzun funtzio batzuk probatu ditzakezu.<br/>
* Errore-mezu argiagoak ikusteko <strong>{$a->mode}</strong> arazketa-modua {$a->atag}(e)ra ezarri.';
$string['testwithtestclient'] = 'Probatu zerbitzua';
$string['testwithtestclientdescription'] = 'Simulatu kanpotiko zerbitzurako sarbidea web-zerbitzuaren proba-bezeroa erabilita. Erabil ezazu token bidezko autentifikazioa gaituta duen gaitutako protokolo bat. <strong>KONTUZ: Probatuko dituzun funtziok erabiltzaile honentzako EXEKUTATUKO DIRA, beraz probatuko duzuna kontuz aukeratu!</strong>';
$string['token'] = 'Tokena';
$string['tokenauthlog'] = 'Token bidezko autentifikazioa';
$string['tokencreatedbyadmin'] = 'Soiik kudeatzaile batek berrabiaraz dezake (*)';
$string['tokencreator'] = 'Sortzailea';
$string['tokenfilter'] = 'Tokenen iragazkia';
$string['tokenfilterreset'] = 'Erakutsi token guztiak';
$string['tokenfiltersubmit'] = 'Erakutsi soilik bat datozen tokenak';
$string['unknownoptionkey'] = 'Aukera-gako ezezaguna ({$a})';
$string['unnamedstringparam'] = 'Kateko parametro batek ez du izenik';
$string['updateusersettings'] = 'Eguneratu';
$string['uploadfiles'] = 'Fitxategiak igo daitezke';
$string['uploadfiles_help'] = 'Gaituz gero, edozein erabiltzailek bere segurtasun-gakoarekin fitxategiak igo ditzake bere gune pribatura edo fitxategien zirriborro-gunera. Fitxategien edozein erabiltzaile-kuota aplikatuko zaie.';
$string['userasclients'] = 'Erabiltzaileak tokena duten bezero gisa';
$string['userasclientsdescription'] = 'Hurrengo urratsek lagunduko dizute Moodleko web-zerbitzua erabiltzaileak bezero gisa konfiguratzen. Honek autentifikazio-metodorako token bat (segurtasun-gakoa) konfiguratzea barne hartzen du. Erabilera-kasu honetan, erabiltzaileek bere tokena sortuko dute euren segurtasun-gakoen orritik hobespenen orriaren bitartez.';
$string['usermissingcaps'] = 'Falta diren gaitasunak: {$a}';
$string['usernameorid'] = 'Erabiltzaile-izena / Erabiltzailearen IDa';
$string['usernameorid_help'] = 'Idatzi erabiltzaile-izena edo erabiltzailearen IDa.';
$string['usernameoridnousererror'] = 'Ez da aurkitu erabiltzaile-izen/ erabiltzailearen ID hori duen erabiltzailerik.';
$string['usernameoridoccurenceerror'] = 'Erabiltzaile-izen hori duen erabiltzaile bat baino gehiago aurkitu da. Mesedez, idatzi erabiltzaile IDa.';
$string['usernotallowed'] = 'Erabiltzaileak ez du zerbitzu hau erabiltzeko baimenik. Aurretik erabiltzaile honi sarbidea eman behar diozu {$a}(e)ko baimendutako erabiltzaileen kudeaketa-orrian.';
$string['userservices'] = 'Erabiltzailearen zerbitzuak: {$a}';
$string['usersettingssaved'] = 'Erabiltzailearen ezarpenak gorde dira';
$string['validuntil'] = 'Noiz arte indarrean';
$string['validuntil_help'] = 'Gaituz gero, data hori heltzean zerbitzua erabiltzaile honentzako desgaituko da.';
$string['webservice'] = 'Web-zerbitzua';
$string['webservices'] = 'Web-zerbitzuak';
$string['webservicesoverview'] = 'Ikuspegi orokorra';
$string['webservicetokens'] = 'Web-zerbitzuen tokenak';
$string['wrongusernamepassword'] = 'Erabiltzaile-izena edo pasahitza okerra!';
$string['wsaccessuserdeleted'] = 'Ezabatutako erabiltzaileei web-zerbitzurako sarbidea ukatu zaie: {$a}';
$string['wsaccessuserexpired'] = 'Pasahitza iraungita duten erabiltzaileei web-zerbitzurako sarbidea ukatu zaie: {$a}';
$string['wsaccessusernologin'] = 'Saioa hasi gabeko autentifikazioa duten erabiltzaileei web-zerbitzurako sarbidea ukatu zaie: {$a}';
$string['wsaccessusersuspended'] = 'Bertan behera utzitako erabiltzaileei web-zerbitzurako sarbidea ukatu zaie: {$a}';
$string['wsaccessuserunconfirmed'] = 'Kontua egiaztatu gabe dutene erabiltzaileei web-zerbitzurako sarbidea ukatu zaie: {$a}';
$string['wsclientdoc'] = 'Moodleko web-zerbitzuen dokumentazioa';
$string['wsdocapi'] = 'API-aren dokumentazioa';
$string['wsdocumentation'] = 'Web-zerbitzuen dokumentazioa';
$string['wsdocumentationdisable'] = 'Web-zerbitzuen dokumentazioa desgaituta dago';
$string['wsdocumentationintro'] = 'Bezeroa sortzeko, {$a->doclink} irakurtzea gomendatzen dizugu';
$string['wsdocumentationlogin'] = 'edo idatzi zure web-zerbitzuaren erabiltzaile-izena eta pasahitza:';
$string['wspassword'] = 'Web-zerbitzuaren pasahitza';
$string['wsusername'] = 'Web-zerbitzuaren erabiltzaile-izena';
