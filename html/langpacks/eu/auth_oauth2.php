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
 * Strings for component 'auth_oauth2', language 'eu', version '4.1'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Lehendik erabiltzaile-izen hori duen erabiltzaile bat dago gune honetan. Hau zure kontua bada, sartu zaitez zure erabiltzaile-izena eta pasahitza erabilita eta gehitu ezazu estekatutako sarbide gisa zure ezarpenen orrian.';
$string['alreadylinked'] = 'Lehendik kanpoko kontu hau guneko kontu batekin parekatuta dago.';
$string['auth_oauth2description'] = 'OAuth 2 estandarretan oinarritutako autentifikazioa';
$string['auth_oauth2settings'] = 'OAuth 2 autentifikazioaren ezarpenak';
$string['confirmaccountemail'] = 'Kaixo, {$a->firstname}:

Kontu-eskaera bat jaso dugu \'{$a->sitename}\' gunean zure helbide elektronikotik.

Zure kontua berresteko, mesedez hurrengo helbide honetara joan:

{$a->link}

Posta elektronikoko programa gehienetan goiko helbidea esteka urdin gisa agertu beharko litzateke eta zuk zuzenean klik egiteko aukera izan beharko zenuke. Horrela ez bada, helbidea kopiatu eta zure nabigatzailearen goialdean dagoen helbide-barran itsatsi ezazu.

Laguntza behar izanez gero, mesedez jarri harremanetan guneko kudeatzailearekin,
{$a->admin}

Kontu-eskaera hau zuk egin ez baduzu, norbait zure kontuan sarbidea lortzeko saiakera egiten egon daiteke.
Mesedez zure guneko kudeatzailearekin harremanetan jarri zaitez lehen bai lehen.';
$string['confirmaccountemailsubject'] = '{$a}: kontuaren berrespena';
$string['confirmationinvalid'] = 'Berrespen-esteka baliogabea da edo iraungi da. Mesedez, hasi berriz sartzeko prozesua kontua berrespen e-mail berri bat sortzeko.';
$string['confirmationpending'] = 'Kontu hau posta elektroniko bidezko berrespenaren zain dago.';
$string['confirmlinkedloginemail'] = 'Kaixo, {$a->fullname}:

Eskaera bat egin da {$a->issuername}(e)ko {$a->linkedemail} helbidea zure helbide elektronikoa erabiliz zure \'{$a->sitename}\' guneko kontuarekin lotzeko.

Eskaera hau baieztatu eta sarbide horiek lotzeko, mesedez sartu hurrengo helbidean:

{$a->link}

Posta elektronikoko programa gehienetan goiko helbidea esteka urdin gisa agertu beharko litzateke eta zuk zuzenean klik egiteko aukera izan beharko zenuke. Horrela ez bada, helbidea kopiatu eta zure nabigatzailearen goialdean dagoen helbide-barran itsatsi ezazu.

Laguntza behar baduzu, mesedez jarri harremanetan zure guneko kudeatzailearekin,
{$a->admin}

Kontu-eskaera hau zuk egin ez baduzu, norbait zure kontuan sarbidea lortzeko saiakera egiten egon daiteke.
Mesedez zure guneko kudeatzailearekin harremanetan jarri zaitez lehen bai lehen.';
$string['confirmlinkedloginemailsubject'] = '{$a}: lotutako sarbidearen berrespena';
$string['createaccountswarning'] = 'Autentifikazio-plugin honek zure gunean kontuak sortzea ahalbidetzen du. Ezarpen hau erabili nahi baduzu baliteke "authpreventaccountcreation" ezarpena gaitzea nahi izatea.';
$string['createnewlinkedlogin'] = 'Estekatu beste kontu bat ({$a})';
$string['emailconfirmlink'] = 'Estekatu zure kontuak';
$string['emailconfirmlinksent'] = '<p>Helbide elektroniko hau duen kontu bat aurkitu da baina oraindik lotu gabe dago.</p>
<p>Kontuak lotu behar dira sartu baino lehen.</p>
<p>E-mail bat bidaliko zen <b>{$a}</b> helbidera.</p>
<p>Bertan kontuak lotzeko jarraibide errazak aurkituko dituzu.</p>
<p>Zailtasunen bat baduzu, jarri harremanetan guneko kudeatzailearekin.</p>';
$string['emailpasswordchangeinfo'] = 'Kaixo, {$a->firstname}:

Norbaitek (seguru asko zuk zeuk)  \'{$a->sitename}\' zure konturako pasahitz berria eskatu du.

Hala ere, zure pasahitza ezin da berrabiarazi kontua beste gune batean sartzeko erabiltzen ari baitzara.

Sartu lehen bezala, sarrera-orriko esteka erabiliz, mesedez.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: Pasahitz-aldaketari buruzko informazioa';
$string['info'] = 'Kanpoko kontua';
$string['issuer'] = 'OAuth 2 zerbitzua';
$string['issuernologin'] = 'Emaile hau ezin da sarbiderako erabili.';
$string['key'] = 'Gakoa';
$string['linkedlogins'] = 'Lotutako sarbideak';
$string['linkedloginshelp'] = 'Laguntza lotutako sarbideekin';
$string['loggedin'] = 'Erabiltzailea hornitzailearekin arrakastaz autentifikatu da.';
$string['loginerror_authenticationfailed'] = 'Autentifikazio-prozesuak huts egin du.';
$string['loginerror_cannotcreateaccounts'] = 'Ezin da aurkitu zure helbide elektronikoa duen konturik.';
$string['loginerror_invaliddomain'] = 'Helbide elektroniko hau ez dago gune honetan baimenduta.';
$string['loginerror_nouserinfo'] = 'Ez da itzuli erabiltzaile-informaziorik. Baliteke OAuth 2 zerbitzua modu ezegokian konfiguratuta egotea.';
$string['loginerror_userincomplete'] = 'Itzulitako erabiltzaile-informazioak ez du erabiltzaile-izen eta helbide elektronikorik. Baliteke OAuth 2 zerbitzua modu ezegokian konfiguratuta egotea.';
$string['noconfiguredidps'] = 'Ez dago OAuth2 hornitzailerik konfiguratuta.';
$string['noissuersavailable'] = 'Konfiguratuta dauden OAuth 2 zerbitzuetatik batek ere ez du kontuak lotzea baimentzen';
$string['notenabled'] = 'Sentitzen dugu, OAuth 2 autentifikazio-plugina ez dago gaituta';
$string['notloggedindebug'] = 'Sarrera-saiakerak huts egin du. Arrazoia: {$a}';
$string['notwhileloggedinas'] = 'Lotutako sarbideak ezin dira kudeatu beste erabiltzaile bat bezala sartuta zaudenean.';
$string['oauth2:managelinkedlogins'] = 'Kudeatu lotutako nire kontuak';
$string['plugindescription'] = 'Autentifikazio-plugin honek konfiguratuta dauden identitate-hornitzaile zerrenda bat erakusten du sarbide-orrian. Identitate-hornitzaile bat aukeratzeak erabiltzaileak OAuth 2 hornitzaile horretako kredentzialen bitartez gunean sartzea baimentzen du.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'OAuth2 autentifikazioa';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Plugin hau autentifikazio-sistemarekin lotuta dago';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'Berrespen-tokena';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'Berrespen-tokena iraungitzen den unea.';
$string['privacy:metadata:auth_oauth2:email'] = 'Kontu honekin lotutako kanpoko helbide elektronikoa.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'OAuth 2 saio-hasiera honetako OAuth 2 emailearen IDa';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Erabiltzailearen Moodle kontuarekin lotutako OAuth 2 kontuak.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Erabiltzaile-kontua OAuth 2 saio-hasierarekin lotu zeneko unea.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'Erregistro hau aldatu zeneko unea.';
$string['privacy:metadata:auth_oauth2:userid'] = 'OAuth 2 saio-hasierarekin lotutako erabiltzaile-kontuaren IDa.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'Kontu hau aldatu zueneko erabiltzailearen IDa.';
$string['privacy:metadata:auth_oauth2:username'] = 'Kontu honekin lotutako kanpoko erabiltzailearen erabiltzaile-izena.';
$string['testidplogin'] = 'Probatu saio-hasiera honekin:';
$string['userinfo'] = 'Hornitzaileko erabiltzaile-datuak';
$string['value'] = 'Balioa';
