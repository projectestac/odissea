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
 * Strings for component 'auth_ldap', language 'eu', branch 'MOODLE_31_STABLE'
 *
 * @package   auth_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Ezin da sortu kontu berria Active Directory-n. Ziurtatu lan honetarako baldintza guztiak betetzen dituzula (LDAPS konexioa, eskubide egokiak dituen erabiltzailea,e.a.).';
$string['auth_ldap_attrcreators'] = 'Talde edo testuinguru zerrenda, zeinetako partaideek atributuak sortzeko baimena duten. Banatu taldeak \',\' erabilita. Orokorrean, honelako zerbait: \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Atributu-sortzaileak';
$string['auth_ldap_auth_user_create_key'] = 'Sortu erabiltzaileak kanpotik';
$string['auth_ldap_bind_dn'] = 'Erabiltzaileak bilatzeko bind-user erabili nahi baduzu, hemen zehaztu. Honen antzeko zerbait: \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Izen gorena';
$string['auth_ldap_bind_pw'] = 'bind-user erabiltzailearen pasahitza.';
$string['auth_ldap_bind_pw_key'] = 'Pasahitza';
$string['auth_ldap_bind_settings'] = 'Ezarpenak finkatu';
$string['auth_ldap_changepasswordurl_key'] = 'Pasahitza aldatzeko URLa';
$string['auth_ldap_contexts'] = 'Erabiltzaileak kokatzen diren testuinguru zerrenda. Testuinguruak \';\' erabiliz banatu. Adibidez: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Testuinguruak';
$string['auth_ldap_create_context'] = 'E-postaren bitartez erabiltzailearen sorrera indarrean jartzen baduzu, zehaztu erabiltzaileak sortuko direneko egoera. Egoera horrek beste erabiltzaileenaren desberdina izan behar du arazoak ekiditeko. Egoera hori ez da Idap_context-variable-n itsatsi behar, Moodle-k egoera horretako erabiltzaileak automatikoki bilatuko ditu. <br /><b>Oharra!</b> Erabiltzaileak sortzeko, user_create() aldatu behar duzu auth/ldap/auth.php fitxategian';
$string['auth_ldap_create_context_key'] = 'Erabiltzaile berrientzako testuingurua';
$string['auth_ldap_create_error'] = 'Errorea erabiltzailea LDAPn sortzean.';
$string['auth_ldap_creators'] = 'Ikastaro berriak sortzeko baimena duten partaideen taldeak. Taldeak \';\' zeinuaren bidez bana daiteke. Normalki era honetan egingo genuke: \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_creators_key'] = 'Sortzaileak';
$string['auth_ldapdescription'] = 'Metodo honek kanpo LDAP zerbitzari baten bidezko autentifikazioa eskaintzen du. Emandako erabiltzaile izen eta pasahitza baliozkoak badira, Moodle-k erabiltzaile-sarrera berri bat sortuko du bere datu-basean. Modulu honek erabiltzaile atributuak LDAP zerbitzaritik irakur ditzake eta eremuak Moodle-n bete. Hurrengo saio-hasieretan soilik izen eta pasahitza egiaztatuko dira.';
$string['auth_ldap_expiration_desc'] = 'Pasahitza iraungi ote den indargabetzeko Ez aukeratu, edo LDAP pasahitzaren kaduzitate denbora zuzenean LDAPetik irakurtzeko.';
$string['auth_ldap_expiration_key'] = 'Epe-muga';
$string['auth_ldap_expiration_warning_desc'] = 'Pasahitzaren kaduzitate-oharra agertu aurretiko egun-kopurua.';
$string['auth_ldap_expiration_warning_key'] = 'Epe-mugaren abisua';
$string['auth_ldap_expireattr_desc'] = 'Aukerakoa: Pasahitzaren kaduzitatea metatzen duen ldap atributua indargabetzen du.';
$string['auth_ldap_expireattr_key'] = 'Iraungitze-atributua';
$string['auth_ldapextrafields'] = '<p>Eremu hauek aukerazkoak dira. Moodle erabiltzaile eremu batzuk hemen zehaztutako <b>LDAP eremu</b>etako informazioz betetzea aukeratu dezakezu.</p><p>Zurian uzten badituzu, ez da ezer transferituko LDAP-tik eta Moodlek lehenetsitako balioak erabiliko dira ordez.</p><p>Edozein kasutan, erabiltzaileak eremu guzti hauek editatzeko gaitasuna izango du behin saioa hasita.</p>';
$string['auth_ldap_graceattr_desc'] = 'Aukerazkoa: Graziazko sarreren atributua indargabetzen du';
$string['auth_ldap_gracelogin_key'] = 'Graziazko sarreren atributua';
$string['auth_ldap_gracelogins_desc'] = 'Gaitu LDAP graziazko sarreren euskarria. Pasahitza iraungitakoan, erabiltzailea graziazko sarreren kontua zerora iritsi arte sar daiteke. Aukera hau aktibatuz gero graziazko sarreren mezua erakutsiko da, pasahitza iraungitu bada.';
$string['auth_ldap_gracelogins_key'] = 'Graziazko sarrerak';
$string['auth_ldap_groupecreators'] = 'Taldeak sortzeko baimena duten kideak dauden talde edo testuinguru-zerrenda. Taldeak \',\'-z banatu. Adibidez, honelako zerbait: \'cn=irakasleak,ou=administrazioa,o=nireerakundea\'';
$string['auth_ldap_groupecreators_key'] = 'Talde sortzaileak';
$string['auth_ldap_host_url'] = 'LDAP ostatua URL bidez zehaztu, adibidez \'ldap://ldap.zerbitzaria.com/\' edo \'ldaps://ldap.zerbitzaria.com/\'. Banatu zerbitzariak \';\' erabiliz hutsegiteen aurkako babesa gehitzeko.';
$string['auth_ldap_host_url_key'] = 'Ostalariaren URLa';
$string['auth_ldap_ldap_encoding'] = 'Zehaztu LDAP zerbitzariak erabilitako kodifikazioa. Ziurrenik utf-8, MS AD v2-k berez erabiltzen du plataformako kodifikazioa. Adibidez: cp1252, cp1250, e.a.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP kodifikazioa';
$string['auth_ldap_login_settings'] = 'Sarrera-ezarpenak';
$string['auth_ldap_memberattribute'] = 'Erabiltzailearen izenerako atributua zehaztu, erabiltzaileak taldean biltzen direnean. Normalean \'partaide\'';
$string['auth_ldap_memberattribute_isdn'] = 'Aukerakoa: kideen atributuen balorea ikutzea ekiditen du, 0 edo 1 izan daiteke.';
$string['auth_ldap_memberattribute_isdn_key'] = 'Partaide-atributuek dn darabilte';
$string['auth_ldap_memberattribute_key'] = 'Partaide-atributua';
$string['auth_ldap_noconnect'] = 'LDAP modulua ezin da ondoko zerbitzariarekin konektatu: {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP modulua ezin da zerbitzarietako batekin ere konektatu: {$a}';
$string['auth_ldap_noextension'] = '<em>Dirudienez PHPko LDAP modulua ez dago. Mesedez, ziurtatu instalatuta eta gaituta dagoela autentifikazio-plugin hau erabili nahi izanez gero.</em>';
$string['auth_ldap_no_mbstring'] = 'mbstring luzapena behar duzu Active Directory-n erabiltzaileak sortzeko.';
$string['auth_ldapnotinstalled'] = 'Ezin da LDAP autentifikazioa erabili. PHP LDAP modulua ez dago instalatuta.';
$string['auth_ldap_objectclass'] = 'Aukerakoa: ldap_user_type-n  erabiltzaileak izendatzeko/bilatzeko objectClass ekiditen du. Normalean ez duzu hau aldatu beharko.';
$string['auth_ldap_objectclass_key'] = 'Objektu-mota';
$string['auth_ldap_opt_deref'] = 'Bilaketan zehar aliasak nola maneiatu zehazten du. Balorea hauetako bat aukeratu: "Ez" (LDAP_DEREF_NEVER) edo "Bai" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Erreferentziazko ezizena';
$string['auth_ldap_passtype'] = 'Zehaz ezazu pasahitz berrien formatua edo LDAP zerbitzarian aldatutakoena.';
$string['auth_ldap_passtype_key'] = 'Pasahitzaren formatua';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP pasahitzaren kaduzitate-ezarpenak.';
$string['auth_ldap_preventpassindb'] = '\'Bai\' aukeratu pasahitzak Moodle-ren datu-basean ez gordetzeko.';
$string['auth_ldap_preventpassindb_key'] = 'Ez cacheatu pasahitzak';
$string['auth_ldap_search_sub'] = 'Bilatu erabiltzaileak azpitestuinguruetan.';
$string['auth_ldap_search_sub_key'] = 'Bilatu azpitestuinguruetan';
$string['auth_ldap_server_settings'] = 'LDAP zerbitzariaren ezarpenak';
$string['auth_ldap_suspended_attribute'] = 'Aukerakoa: Atributu hau zehazten bada lokalki sortutako erabiltzaile-kontuak gaitzeko edo eteteko erabiliko da.';
$string['auth_ldap_suspended_attribute_key'] = 'Etenda atributua';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create()-k ez du onartzen aukeratutako erabiltzaile-mota: {$a}';
$string['auth_ldap_update_userinfo'] = 'Eguneratu erabiltzaile informazioa (izena, abizena, helbidea..) LDAP-tik Moodle-ra. Zehaztu "Datuen lotura" ezarpenak behar duzun moduan.';
$string['auth_ldap_user_attribute'] = 'Erbiltzaileak izendatzeko edo bilatzeko atributua. \'cn\' izan ohi da.';
$string['auth_ldap_user_attribute_key'] = 'Erabiltzailearen atributuak';
$string['auth_ldap_user_exists'] = 'LDAP erabiltze-izen hau lehendik ere badago';
$string['auth_ldap_user_settings'] = 'Erabiltzaileen bilaketaren ezarpenak';
$string['auth_ldap_user_type'] = 'Aukeratu erabiltzaileak LDAPen nola gordeko diren. Ezarpen honek sarbidearen iraungitzea, graziazko sarrerak eta erabiltzaileen sorrerak ere nola funtzionatuko duten zehazten du.';
$string['auth_ldap_user_type_key'] = 'Erabiltzaile-mota';
$string['auth_ldap_usertypeundefined'] = 'config.user_type ez dago definituta edo ldap_expirationtime2unix funtzioak ez du onartzen aukeratutako mota!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type ez dago definituta edo ldap_unixi2expirationtime funtzioak ez du onartzen aukeratutako mota!';
$string['auth_ldap_version'] = 'Zure zerbitzariak erabiltzen duen LDAP protokoloaren bertsioa.';
$string['auth_ldap_version_key'] = 'Bertsioa';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Bai ezarri Single Sign On NTLM domeinuan saiatzeko. <strong>Oharra:</strong> bestelako ezarpen behar du web zerbitzarian funtzionatzeko, begiratu <a href="http://docs.moodle.org/en/NTLM_authentication">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'Gaitu';
$string['auth_ntlmsso_ie_fastpath'] = 'Ezarri NTLM SSO sarbide azkarra gaitzeko (hainbat pausu aurreratzen ditu erabiltzailearen nabigatzailea MS Internet Explorer bada).';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Saiatu NTLM nabigatzaile guztiekin';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE bide azkarra?';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Bai, saiatu NTLM nabigatzaile guztiekin';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Bai, beste nabigatzile guztiek saioa hasteko formulario estandarra erabiltzen dute.';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Ezin izan da erabiltzailea atera REMOTE_USER goiburutik. Konfiguratutako formatua egokia da?';
$string['auth_ntlmsso_missing_username'] = 'Gutxienez %username% eremua zehaztu behar duzu urruneko erabiltzaile formatuan.';
$string['auth_ntlmsso_remoteuserformat'] = '\'Autentifikazio-mota\' eremuan \'NTLM\' aukera baduzu, urruneko erabiltzaile-formatua zehaztu dezakezu hemen. Hutsik utziz gero, berezko DOMEINUA\\erabiltzailea formatua erabiliko da. Aukerazko <b>%domain%</b> hitz-gakoa erabili dezakezu domeinua no agertzen den zehazteko, eta derrigorrezko <b>%username%</b> hitz-gakoa erabiltzaiea non agertzen den zehazteko.<br /><br /> Asko zabaldutako formatu batzuk  <tt>%domain%\\%username%</tt> (MS Windows-eko berezkoa), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> eta soilik <tt>%username%</tt> dira (domeinuko atalik ez badago).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Urrutiko erailtzaile-izenaren formatua';
$string['auth_ntlmsso_subnet'] = 'Ezarrita, SSO saiatuko da azpi-sare honetako bezeroekin bakarrik. Formatua: xxx.xxx.xxx.xxx/bitmask. subnet bat baino gehiago balego \',\' bitartez bereiztu (koma).';
$string['auth_ntlmsso_subnet_key'] = 'Azpisarea';
$string['auth_ntlmsso_type'] = 'Erabiltzaileak autentifikatzeko web zerbitzarian ezarritako autentifikazio-metodoa (zalantza izanez gero, aukeratu NTLM)';
$string['auth_ntlmsso_type_key'] = 'Autentifikazio-mota';
$string['connectingldap'] = 'LDAP zerbitzarira konektatzen...';
$string['creatingtemptable'] = 'Aldi baterako taula sortzen: {$a}';
$string['didntfindexpiretime'] = 'password_expire-k() ez du iraungitze-data aurkitu.';
$string['didntgetusersfromldap'] = 'Ez da erabiltzailerik lortu LDAPetik. -- errorea? -- irteten';
$string['gotcountrecordsfromldap'] = 'Lortu {$a} erregistroa(k) LDAP-etik';
$string['morethanoneuser'] = 'Arraroa da! LDAPen erabiltzaile bat baino gehiago aurkitu dira. Lehena bakarrik erabiliko da.';
$string['needbcmath'] = 'BCMath luzapena behar duzu graziazko sarbidea erabiltzeko Active Directory-rekin';
$string['needmbstring'] = 'mbstring luzapena behar duzu Active Directory-n pasahitzak aldatzeko.';
$string['nodnforusername'] = 'Errorea user_update_password()-en. Ez dago DN-rik hurrengorako: {$a->username}';
$string['noemail'] = 'E-posta bat bidali nahi izan dizugu baina ezin!';
$string['notcalledfromserver'] = 'Ez litzateke web zerbitzaritik deituko beharko!';
$string['noupdatestobedone'] = 'Ez dago egiteko eguneraketarik';
$string['nouserentriestoremove'] = 'Ez dago ezabatzeko erabiltzaile-sarrerarik';
$string['nouserentriestorevive'] = 'Ez dago berreskuratzeko erabiltzaile-sarrerarik';
$string['nouserstobeadded'] = 'Ez dago gehitzeko erabiltzaile-sarrerarik';
$string['ntlmsso_attempting'] = 'Single Sign On saiatzen NTLM bidez...';
$string['ntlmsso_failed'] = 'Kale egin du saio-hasiera automatikoak, jo normal sartzeko orrira...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO desgaituta dago.';
$string['ntlmsso_unknowntype'] = 'ntlmsso mota ezezaguna!';
$string['pagedresultsnotsupp'] = 'LDAPeko orrikako emaitzak ez dira onartzen (zure PHP bertsioak onartzen ez dituelako, Moodle LDAP protokoloaren 2 bertsioa erabiltzeko konfiguratu duzulako edo Moodle-k ezin duelako LDAP zerbitzariarekin kontaktatu orrikako emaitzak onartzen dituen egiaztatzeko.';
$string['pagesize'] = 'Ziurtatu ezazu balio hau zure LDAP zerbitzariren emaitza-sortaren gehienezko tamaina (query bakar batek bueltatu dezakeen gehienezko erregistro kopurua) baino txikiagoa dela';
$string['pagesize_key'] = 'Orriaren tamaina';
$string['pluginname'] = 'LDAP zerbitzaria';
$string['pluginnotenabled'] = 'Plugina ez dago gaituta';
$string['renamingnotallowed'] = 'Erabiltzaileen berrizendatzea ez da onartzen LDAPen.';
$string['rootdseerror'] = 'Errore Active Directory-ko rootDSE-a kontsultatzean';
$string['start_tls'] = 'Erabili LDAPeko zerbitzu normala (389 ataka) TLS zifraketarekin';
$string['start_tls_key'] = 'Erabili TLS';
$string['synctask'] = 'LDAP erabiltzaileen sinkronizazio-lana';
$string['updatepasserror'] = 'Errorea user_update_password()-en. Errore-kodea: {$a->errno}; Errorearen mezua: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Errorea user_update_password()-en pasahitzaren iraungitze-data irakurtzean. Errore-kodea: {$a->errno}; Errorearen mezua: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Errorea user_update_password()-en pasahitzaren iraungitze-data edota graziazko sarrerak (gracelogins) aldatzean. Errore-kodea: {$a->errno}; Errorearen mezua: {$a->errstring}';
$string['updateremfail'] = 'Errorea LDAP erregistroa eguneratzean. Errore-kodea: {$a->errno}; Errorearen mezua: {$a->errstring}<br/>({$a->key}) giltza - Moodle-ko balio zaharra: \'{$a->ouvalue}\' balio berria: \'{$a->nuvalue}\'';
$string['updateremfailamb'] = 'Errorea gertatu da LDAP eguneratzean {$a->key} eremu anbiguoarekin; Moodle-ko balio zaharra: \'{$a->ouvalue}\' balio berria: \'{$a->nuvalue}\'';
$string['updateusernotfound'] = 'Ezin da erabiltzailea aurkitu kanpotik eguneratzean. Xehetasunak jarraian: bilaketaren oinarria: \'{$a->userdn}\'; bilaketa-iragazkia \'(objectClass=*)\'; bilaketa-atributuak: {$a->attribs}';
$string['useracctctrlerror'] = 'Errorea {$a}-(r)entzako userAccountControl eskuratzean';
$string['user_activatenotsupportusertype'] = 'auth: LDAPeko user_activate()-ek ez du erabiltzaile-mota hau onartzen: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: LDAPeko user_activate()-ek ez du erabiltzaile-mota hau onartzen: {$a}';
$string['userentriestoadd'] = 'Gehitzeko erabiltzaile-sarrerak: {$a}';
$string['userentriestoremove'] = 'Ezabatzeko erabiltzaile-sarrerak: {$a}';
$string['userentriestorevive'] = 'Berreskuratzeko erabiltzaile-sarrerak: {$a}';
$string['userentriestoupdate'] = 'Eguneratzeko erabiltzaile-sarrerak: {$a}';
$string['usernotfound'] = 'Erabiltzailea ez da LDAP-en aurkitu';
