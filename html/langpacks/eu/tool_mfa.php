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
 * Strings for component 'tool_mfa', language 'eu', version '4.5'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Lortutako pisua';
$string['added'] = 'Gehituta';
$string['alltime'] = 'Denbora guztia';
$string['areyousure'] = 'Ziur zaude faktore hau kendu nahi duzula?';
$string['cancellogin'] = 'Utzi bertan behera saio-hasiera';
$string['combination'] = 'Konbinazioa';
$string['confirmationreplace'] = 'Berehala beste \'{$a}\' bat konfiguratu beharko duzu. Ziurtatu ezazu konfigurazio-prozesua osatzeko prest zaudela.';
$string['confirmationrevoke'] = 'Aurrerantzean ezingo duzu \'{$a}\' erabili gune honetan saioa hasteko.';
$string['connector'] = 'ETA';
$string['created'] = 'Sortuta';
$string['createdfromip'] = 'IP helbidetik sortuta';
$string['debugmode:heading'] = 'Arazte-modua';
$string['devicename'] = 'Gailua';
$string['editfactor'] = 'Editatu {$a} faktorearen ezarpenak';
$string['email:subject'] = 'Ezin izan da {$a}(e)ra sartu';
$string['enablefactor'] = 'Gaitu faktorea';
$string['entercode'] = 'Idatzi kodea';
$string['error:actionnotfound'] = '\'{$a}\' ekintza ez dago onartuta';
$string['error:couldnotreplace'] = 'Ezin izan da faktore hau ordezkatu.';
$string['error:directaccess'] = 'Orri honetara ez litzateke zuzenean sartu beharko';
$string['error:factornotenabled'] = 'Faktore anitzeko autentifikazioko \'{$a}\' faktorea ez dago gaituta';
$string['error:factornotfound'] = 'Faktore anitzeko autentifikazioko \'{$a}\' faktorea ez da aurkitu';
$string['error:isguestuser'] = 'Gonbidatuek ez dute baimenik hemen.';
$string['error:notenoughfactors'] = 'Ezin izan da autentifikatu';
$string['error:reauth'] = 'Ezin izan dugu zure identitatea guneko segurtasun politika betetzeko behar beste baieztatu.
<br>Hau hurrengo arrazoiengatik izan daiteke:
<br> 1) Pausoak blokeatuta egotea - itxaron minutu batzuk eta ondoren berriz saiatu zaitez, mesedez.
<br> 2) Pausoek huts egin izana- pauso bakoitzerako xehetasunak berriz egiaztatu itzazu, mesedez.
<br> 3) Pausoak saltatu izana - orri hau berriz kargatu ezazu ala saioa berriz hasten saiatu zaitez, mesedez.';
$string['error:revoke'] = 'Ezin izan da faktorea kendu';
$string['error:setupfactor'] = 'Ezin izan da faktorea konfiguratu';
$string['error:support'] = 'Oraindik saioa hasi ezinik bazabiltza, edo mezu hau ikustea errore bat dela uste baduzu,
bidali ezazu e-mail bat helbide honetara:';
$string['error:wrongfactorid'] = '\'{$a}\' faktore-IDa en da zuzena';
$string['event:failfactor'] = 'Faktore anitzeko autentifikazioak huts egin du gainditu gabeko faktore baten ondorioz.';
$string['event:faillockout'] = 'Faktore anitzeko autentifikazioak huts egin du gehiegizko saiakera kopuruaren ondorioz.';
$string['event:failnotenoughfactors'] = 'Faktore anitzeko autentifikazioak huts egin du gainditutako faktore nahikoa ez izatearen ondorioz.';
$string['event:userdeletedfactor'] = 'Faktorea ezabatuta';
$string['event:userfailedmfa'] = 'Erabiltzailearen faktore anitzeko autentifikazioak huts egin du';
$string['event:userpassedmfa'] = 'Egiaztapena gainditu da';
$string['event:userrevokedfactor'] = 'Faktore-baliogabetzea';
$string['event:usersetupfactor'] = 'Faktore-konfigurazioa';
$string['factor'] = 'Faktorea';
$string['factorreplace'] = '\'{$a}\' faktorea ondo ordezkatu da.';
$string['factorreport'] = 'Faktore guztien txostena';
$string['factorreset'] = 'Guneko kudeatzaile batek faktore anitzeko autentifikazioko zure \'{$a->factor}\' faktorea berrabiarazi du. Baliteke faktorea berriz ere konfiguratu behar izatea. {$a->url}';
$string['factorresetall'] = 'Guneko kudeatzaile batek faktore anitzeko autentifikazioko zure faktore guztiak berrabiarazi ditu. Baliteke faktore horiek berriz ere konfiguratu behar izatea. {$a->url}';
$string['factorrevoked'] = '\'{$a}\' faktorea ondo kendu da.';
$string['factorsetup'] = '\'{$a}\' faktorea ondo konfiguratu da.';
$string['fallback'] = 'Erortze-faktorea';
$string['fallback_info'] = 'Faktore hau beste faktorerik ez dagoenean erabiliko den faktorea da. Faktore honen bidezko egiaztapenak beti huts egingo du.';
$string['guidance'] = 'Faktore anitzeko autentifikazioaren erabiltzaile-gida';
$string['inputrequired'] = 'Erabiltzailearen sarrera';
$string['ipatcreation'] = 'Faktorea sortu zeneko IP helbidea';
$string['lastused'] = 'Erabilitako azkena';
$string['lastverified'] = 'Azkenengoz egiaztatua';
$string['locked'] = '{$a} (ez-eskuragarri)';
$string['lockedusersforallfactors'] = 'Blokeatutako erabiltzaileak: Faktore guztiak';
$string['lockedusersforfactor'] = 'Blokeatutako erabiltzaileak: {$a}';
$string['lockoutnotification'] = '{$a} saiakera geratzen zaizkizu.';
$string['managefactor'] = 'Kudeatu faktorea';
$string['mfa'] = 'Faktore anitzeko autentifikazioa';
$string['mfa:intro'] = 'Zure kontua seguruagoa bihurtu dezakezu saioa hasterakoan egiaztatze faktore gehigarria eskatuta.';
$string['mfa:mfaaccess'] = 'Elkarreraginean aritu MFArekin';
$string['mfareports'] = 'MFA txostenak';
$string['mfasettings'] = 'Kudeatu faktore anitzeko autentifikazioa';
$string['na'] = 'ED/EE';
$string['needhelp'] = 'Laguntza behar duzu?';
$string['nologinusers'] = 'Saioa hasi gabe';
$string['nonauthusers'] = 'Faktore anitzeko autentifikazioa zain';
$string['overall'] = 'Guztira';
$string['pending'] = 'Geratzen dena';
$string['performbulk'] = 'Ekintza masiboa';
$string['pluginname'] = 'Faktore anitzeko autentifikazioa';
$string['preferences:activefactors'] = 'Gaitu faktoreak';
$string['preferences:availablefactors'] = 'Eskuragarri dauden faktoreak';
$string['preferences:header'] = 'Faktore anitzeko autentifikazioaren hobespenak';
$string['preferenceslink'] = 'Egin klik hemen erabiltzaile-hobespenetara joateko.';
$string['privacy:metadata:tool_mfa'] = 'Konfiguratutako MFA faktoreen datuak';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'Faktorea konfiguratu zueneko erabiltzailearen IP helbidea.';
$string['privacy:metadata:tool_mfa:factor'] = 'Faktore mota';
$string['privacy:metadata:tool_mfa:id'] = 'Erregistroaren IDa';
$string['privacy:metadata:tool_mfa:label'] = 'Faktore-instantziaren etiketa, esaterako device edo email.';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Erabiltzailea faktore honekin egiaztatu zeneko azken aldia';
$string['privacy:metadata:tool_mfa:secret'] = 'Faktorearen edozein datu sekretu';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Faktore-instantzia konfiguratu zeneko unea.';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Faktore-instantzia azkenengoz aldatu zeneko unea';
$string['privacy:metadata:tool_mfa:userid'] = 'Faktorea dagokion erabiltzailearen IDa';
$string['privacy:metadata:tool_mfa_auth'] = 'Erabiltzaile ID batentzako faktore anitzeko autentifikazioa gainditu izana azkenengoz erregistratu zeneko unea.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Erabiltzailea azkenengoz autentifikatu zeneko unea';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'Une honekin lotutako erabiltzailea.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Erabiltzaile-autentifikaziorako aldi baterako sekretuak.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'Sekretu honekin lotutako faktorea.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'Sekretuaren segurtasun-gakoa.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'Sekretu honekin lotutako saioaren IDa.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'Sekretu honekin lotutako erabiltzailea.';
$string['redirecterrordetected'] = 'Onartzen ez den berbideratzea antzeman da, script exekuzioa bertan behera utzi da. Berbideratzea MFA eta {$a} bitartean gertatu da.';
$string['remove'] = 'Kendu';
$string['replace'] = 'Ordezkatu';
$string['replacefactor'] = 'Ordezkatu faktorea';
$string['resetconfirm'] = 'Berrabiarazi erabiltzaile-faktorea';
$string['resetfactor'] = 'Berrabiarazi erabiltzaileen autentifikazio-faktoreak';
$string['resetfactorconfirm'] = 'Ziur zaude faktore hau {$a} erabiltzailearentzat berrabiarazi nahi duzula?';
$string['resetfactorplaceholder'] = 'Erabiltzaile-izena edo helbide elektronikoa';
$string['resetsuccess'] = '\'{$a->factor}\' faktorea ondo berrabiarazi da \'{$a->username}\' erabiltzailearentzat.';
$string['resetsuccessbulk'] = '{$a}\' faktorea ondo berrabiarazi da emandako erabiltzaileentzat.';
$string['resetuser'] = 'Erabiltzailea:';
$string['revoke'] = 'Baliogabetu';
$string['revokefactor'] = 'Kendu faktorea';
$string['selectfactor'] = 'Aukeratu berrabiarazi beharreko faktorea:';
$string['selectperiod'] = 'Aukeratu txostenarentzako atzera-begirako epea:';
$string['settings:combinations'] = 'Saioa hasteko baldintza egokien laburpena';
$string['settings:debugmode'] = 'Gaitu arazte-modua';
$string['settings:debugmode_help'] = 'Arazte-moduak MFA kudeaketa-orrietan eta erabiltzaileen hobespenen orrian une horretan gaituta dauden faktoreen inguruko informazioarekin jakinarazpen-leiho txiki bat erakutsiko du.';
$string['settings:duration'] = 'Sekretuaren baliozkotasunaren iraupena';
$string['settings:duration_help'] = 'Sortutako sekretuak baliozkotzat hartuko diren denbora-tartea.';
$string['settings:enabled'] = 'Gaitu MFA plugina';
$string['settings:enablefactor'] = 'Gaitu faktorea';
$string['settings:enablefactor_help'] = 'Markatu laukitxo hau faktorea MFA autentifikazioan erabilia izan dadin.';
$string['settings:general'] = 'MFA ezarpen orokorrak';
$string['settings:guidancecheck'] = 'Erabili orientatze-orria';
$string['settings:guidancecheck_help'] = 'Gehitu orientatze-orriaren esteka bat faktore anitzeko autentifikazio-orrietan eta hobespenen orrian.';
$string['settings:guidancefiles'] = 'Orientatze-orriaren fitxategiak';
$string['settings:guidancefiles_help'] = 'Gehitu hemen orientatze-orrian erabili nahi dituzun fitxategiak, eta orrian txertatu itzazu editorean  {{filename}} (ebatzitako bidea) or {{{filename}}} (HTML esteka) erabilita';
$string['settings:guidancepage'] = 'Orientatze-orriaren edukiak';
$string['settings:guidancepage_help'] = 'Hemengo HTMLa orientatze-orrian erakutsiko da. Fitxategiak txertatzeko idatzi fitxategi-eremuko fitxategien izenak ebatzitako bidearekin {{filename}} ala HTML esteka {{{filename}}} erabilita.';
$string['settings:lockout'] = 'Blokeatze atalasea';
$string['settings:lockout_help'] = 'Erabiltzaile batek sarrera-faktoreak erantzun ahal duen saiakera kopurua saioa hastea galarazi aurretik.';
$string['settings:redir_exclusions'] = 'Faktore anitzeko autentifikaziora berbideratu behar ez diren URLak.';
$string['settings:redir_exclusions_help'] = 'Errenkada berri bakoitza faktore anitzeko autentifikaziora berbideratuko ez den gunearen URL erlatibo bat izango da';
$string['settings:weight'] = 'Faktorearen pisua';
$string['settings:weight_help'] = 'Faktore hau gainditzeak ematen duen pisua. Erabiltzaile batek gutxienez 100 puntu behar ditu saioa hasteko.';
$string['setup'] = 'Konfiguratu';
$string['setupfactor'] = 'Konfiguratu faktorea';
$string['setupfactorbuttonadditional'] = 'Gehitu faktore gehigarria';
$string['setuprequired'] = 'Erabiltzaile-konfigurazioa';
$string['state:fail'] = 'Huts egin du';
$string['state:locked'] = 'Blokeatuta';
$string['state:neutral'] = 'Neutrala';
$string['state:pass'] = 'Gaindituta';
$string['state:unknown'] = 'Ezezaguna';
$string['subplugintype_factor'] = 'Faktore-mota';
$string['subplugintype_factor_plural'] = 'Faktore-motak';
$string['totalusers'] = 'Erabiltzaileak guztira';
$string['totalweight'] = 'Pisua guztira';
$string['userempty'] = 'Erabiltzailea ezin da hutsik egon.';
$string['userlogs'] = 'Erabiltzaile-erregistroak';
$string['usernotfound'] = 'Ezin da erabiltzailea aurkitu.';
$string['usersauthedinperiod'] = 'Saioa hasita';
$string['verification'] = '2 pausoko egiaztapena';
$string['verification_desc'] = 'Zure kontua babestuta mantentzeko, benetan zu zarela egiaztatu behar dugu.';
$string['verificationcode'] = 'Egiaztapen kodea';
$string['verificationcode_help'] = 'Oraingo autentifikazio-faktoreak emandako egiaztapen-kodea.';
$string['verifyalt'] = 'Saiatu egiaztatzeko beste modu bat:';
$string['weight'] = 'Pisua';
$string['yesremove'] = 'Bai, kendu';
$string['yesreplace'] = 'Bai, ordezkatu';
