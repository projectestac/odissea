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
 * Strings for component 'tool_oauth2', language 'eu', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_oauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authconfirm'] = 'Ekintza honek Moodle-ri autentifikatutako kontuan API sarbide iraunkorra emango dio. Hau Moodle-renak diren fitxategiak kudeatzeko sistemako kontu gisa erabiltzeko pentsatuta dago.';
$string['authconnected'] = 'Sistemako kontua lineaz kanpoko sarbiderako konektatuta dago orain';
$string['authnotconnected'] = 'Sistemako kontua ez dago lineaz kanpoko sarbiderako konektatuta';
$string['configured'] = 'Konfiguratuta';
$string['configuredstatus'] = 'Konfiguratuta';
$string['connectsystemaccount'] = 'Konektatu sistemako kontura';
$string['createfromtemplate'] = 'Sortu OAuth 2 zerbitzu bat txantiloitik';
$string['createfromtemplatedesc'] = 'Aukeratu beheko Oauth2 zerbitzuko txantiloietako bat zerbitzu-mota ezagunetarako konfigurazio egoki bat duen OAuth zerbitzu bat sortzeko. Honek OAuth2 zerbitzu bat sortuko du, autentifikaziorako beharrezkoak diren amaiera-puntu eta parametro guztiekin, baina zerbitzua erabili ahal izateko aurretik zure bezero IDa eta sekretua sartu beharko dituzu.';
$string['createnewendpoint'] = 'Sortu amaiera-puntu berria "{$a}" emailearentzat';
$string['createnewfacebookissuer'] = 'Sortu Facebook zerbitzu berria';
$string['createnewgoogleissuer'] = 'Sortu Google zerbitzu berria';
$string['createnewissuer'] = 'Sortu pertsonalizatutako zerbitzu berria';
$string['createnewmicrosoftissuer'] = 'Sortu Microsoft zerbitzu berria';
$string['createnewnextcloudissuer'] = 'Sortu nextcloud zerbitzu berria';
$string['createnewuserfieldmapping'] = 'Sortu erabiltzaile-eremu lotura berria "{$a}" emailearentzat';
$string['deleteconfirm'] = 'Ziur zaude "{$a}" identitate-emailea ezabatu nahi duzula? Emaile honetan oinarritzen den edozein pluginek funtzionatzeari utziko dio.';
$string['deleteendpointconfirm'] = 'Ziur zaude "{$a->issuer}" jaulkitzailearen "{$a->endpoint}" amaiera-puntua ezabatu nahi duzula? Amaiera-puntu honetan oinarritzen den edozein pluginek funtzionatzeari utziko dio.';
$string['deleteuserfieldmappingconfirm'] = 'Ziur zaude "{$a}" jaulkitzailearen erabiltzaile-eremu lotura ezabatu nahi duzula?';
$string['discovered'] = 'Zerbitzu aurkikuntza arrakastatsua izan da';
$string['discovered_help'] = 'Aurkikuntzak esan nahi du OAuth 2 amaiera-puntuak OAuth zerbitzuaren oinarrizko URLtik abiatuta automatikoki zehaz daitezkeela. Zerbitzu guztiak ez dira "aurkituak" izan behar, baina horrela ez bada, amaiera-puntuak eta erabiltzaile-loturen informazioa eskuz sartu beharko da.';
$string['discoverystatus'] = 'Aurkikuntza';
$string['editendpoint'] = 'Editatu amaiera-puntua: {$a->issuer} jaulkitzailearen {$a->endpoint}';
$string['editendpoints'] = 'Konfiguratu amaiera-puntuak';
$string['editissuer'] = 'Editatu nortasun-emailea: {$a}';
$string['edituserfieldmapping'] = 'Editatu {$a->issuer} jaulkitzailearen erabiltzaile-eremu lotura';
$string['edituserfieldmappings'] = 'Konfiguratu erabiltzaile-eremuen loturak';
$string['endpointdeleted'] = 'Amaiera-puntua ezabatu da';
$string['endpointname'] = 'Izena';
$string['endpointname_help'] = 'Amaiera-puntu hau bilatzeko erabilitako gakoa. Amaieran "_endpoint" izan behar du.';
$string['endpointsforissuer'] = 'Emailearen amaiera-puntuak: {$a}';
$string['endpointurl'] = 'URLa';
$string['endpointurl_help'] = 'Amaiera-puntu honetarako URLa.  https:// protokoloa erabili behar du.';
$string['issueralloweddomains'] = 'Sarbidea duten domeinuak';
$string['issueralloweddomains_help'] = 'Zehaztuz gero, ezarpen honetan hornitzaile hau erabili saioa hasi ahalko duten domeinuak mugatu daitezke komaz banatutako zerrendan zehaztuta.';
$string['issuerbaseurl'] = 'Zerbitzuaren oinarrizko URLa';
$string['issuerbaseurl_help'] = 'Zerbitzu honetarako sarbiderako oinarrizko URLa';
$string['issuerclientid'] = 'Bezeroaren IDa';
$string['issuerclientid_help'] = 'Emaile honentzako OAuth bezeroaren IDa';
$string['issuerclientsecret'] = 'Bezeroaren sekretua';
$string['issuerclientsecret_help'] = 'Emaile honentzako OAuth bezeroaren sekretua';
$string['issuerdeleted'] = 'Nortasun-emailea ezabatu da';
$string['issuerdisabled'] = 'Nortasun-emailea desgaitu da';
$string['issuerenabled'] = 'Nortasun-emailea gaitu da';
$string['issuerimage'] = 'Logoaren URLa';
$string['issuerimage_help'] = 'Emailearen logoa erakusteko erabiltzen den irudiaren URLa. Sarbide-orrian erakutsi daiteke.';
$string['issuerloginparams'] = 'Saio-hasiera eskaeran sartutako parametro gehigarriak.';
$string['issuerloginparams_help'] = 'Sistema batzuk saio-hasiera eskaeran parametro gehigarriak behar dituzte erabiltzailearen oinarrizko profila irakurri ahal izateko.';
$string['issuerloginparamsoffline'] = 'Saio-hasiera eskaeran lineaz kanpoko sarbiderako sartutako parametro gehigarriak.';
$string['issuerloginparamsoffline_help'] = 'OAuth sistema bakoitzak modu ezberdin bat zehazten du lineaz kanpoko sarbiderako. Esaterako Google-k hurrengo parametro gehigarriak behar ditu: "access_type=offline&prompt=consent". Parametro hauek URLko query parametro formatuan egon behar dira.';
$string['issuerloginscopes'] = 'Saio-hasiera eskaeran sartu beharreko esparruak.';
$string['issuerloginscopes_help'] = 'Sistema batzuk saio-hasiera eskaeran esparru gehigarriak behar dituzte erabiltzailearen oinarrizko profila irakurri ahal izateko.OpenID Connect betetzen duten sistementzako esparru estandarrak "openid profile email" dira.';
$string['issuerloginscopesoffline'] = 'Saio-hasiera eskaeran lineaz kanpoko sarbiderako sartu beharreko esparruak.';
$string['issuerloginscopesoffline_help'] = 'OAuth sistema bakoitzak modu ezberdin bat zehazten du lineaz kanpoko sarbiderako. Esaterako Microsoft-ek "offline_access" esparru gehigarria behar du.';
$string['issuername'] = 'izena';
$string['issuername_help'] = 'Identitate-emailearen izena. Sarbide-orrian erakutsi daiteke.';
$string['issuerrequireconfirmation'] = 'e-posta egiaztapena beharrekoa da';
$string['issuerrequireconfirmation_help'] = 'OAuth bidez saioa hasi aurretik erabiltzaile guztiek euren e-posta helbidea egiaztatzera behartzen ditu. Honek eragina du saio-hastearekin batera sortutako kontuetan, baita existitzen zen Moodle kontu bat e-posta helbidea lotuz OAuth bidezko saio-hasiera egiteko konektatzen denean ere.';
$string['issuers'] = 'Jaulkitzaileak';
$string['issuersetup'] = 'OAuth 2 zerbitzu arruntak konfiguratzeko argibide xeheak.';
$string['issuersetuptype'] = '{$a} OAuth 2 hornitzailea konfiguratzeko argibide xeheak.';
$string['issuershowonloginpage'] = 'Erakutsi sarbide-orrian.';
$string['issuershowonloginpage_help'] = 'OAuth autentifikazio-plugina gaituta badago, saio-hasiera emaile hau sarbide-orrian zerrendatuko da erabiltzaileek emaile hau erabiliz saioa hasteko aukera izan dezaten.';
$string['loginissuer'] = 'Baimendu saioa hastea';
$string['notconfigured'] = 'Konfiguratu gabe';
$string['notdiscovered'] = 'Zerbitzu-aurkikuntza ez da ondo egin';
$string['notloginissuer'] = 'Ez baimendu saioa hastea';
$string['pluginname'] = 'OAuth 2 zerbitzuak';
$string['privacy:metadata'] = 'OAuth 2 zerbitzuak pluginak ez du datu pertsonalik biltzen.';
$string['savechanges'] = 'Gorde aldaketak';
$string['serviceshelp'] = 'Zerbitzu-hornitzailearen konfigurazio argibideak.';
$string['systemaccountconnected'] = 'Sistemako kontua konektatuta';
$string['systemaccountconnected_help'] = 'Sistemako kontuak pluginentzako funtzionalitate aurreratuak eskaintzeko erabiltzen dira. Saio-hasiera funtzionalitatea baino ez eskaintzeko ez dira behar, baina OAuth zerbitzua erabiltzen duten beste plugin batzuk funtzioen multzo murriztu bat eskaintzen dute sistemako kontua konektatu ezean. Esaterako biltegiek ezin dute "controlled links" onartu fitxategietako eragiketak egiteko sistemako kontu bat izan gabe.';
$string['systemaccountnotconnected'] = 'Ez da sistemako konturik konektatu';
$string['systemauthstatus'] = 'Sistemako kontua konektatuta dago';
$string['usebasicauth'] = 'Token eskaerak HTTP goiburuen bidez autentifikatu';
$string['usebasicauth_help'] = 'Erabili HTTP Basic autentifikazio-eskema bezero ID eta pasahitza tokena freskatzeko eskaerarekin bidaltzerakoan. OAuth 2 estandarrak gomendatzen du, baina emaile batzuekin eskuragarri ez egotea gertatu daiteke.';
$string['userfieldexternalfield'] = 'Kanpoko eremuaren izena';
$string['userfieldexternalfield_error'] = 'Eremuak ezin du izan HTML koderik.';
$string['userfieldexternalfield_help'] = 'Kanpoko OAuth sistemak emandako eremuaren izena';
$string['userfieldinternalfield'] = 'Barruko eremuaren izena';
$string['userfieldinternalfield_help'] = 'Kanpoko eremuarekin lotu beharreko Moodle-ko erabiltzaile-eremuaren izena';
$string['userfieldmappingdeleted'] = 'Erabiltzaile-eremu lotura ezabatu da';
$string['userfieldmappingsforissuer'] = 'Emailearentzako erabiltzaile-eremu loturak: {$a}';
