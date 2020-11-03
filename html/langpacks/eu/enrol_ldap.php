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
 * Strings for component 'enrol_ldap', language 'eu', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = '\'{$a->role_shortname}\' rola esleitzen \'{$a->user_username}\' erabiltzaileari \'{$a->course_shortname}\'  ikastaroan (id {$a->course_id})';
$string['assignrolefailed'] = 'Huts egin du \'{$a->role_shortname}\' rola esleitzean \'{$a->user_username}\' erabiltzaileari \'{$a->course_shortname}\' ikastaroan (id {$a->course_id})';
$string['autocreate'] = '<p>Ikastaroak era automatikoan sor daitezke oraindik ere Moodlen existitzen ez den ikastaro batean matrikulazioak badaude.</p><p>Ikastaro sorrera automatikoa erabiltzen baduzu, gomendagarria da gaitasun hauek rol garrantzitsuenei ezgaitzea: moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname eta moodle/course:changesummary. Horrela, goian aipatutako lau ikastaro eremuak aldatzea debekatuko da (ID zenbakia, izen laburra, izen osoa eta laburpena).</p>';
$string['autocreate_key'] = 'Sortu automatikoki';
$string['autocreation_settings'] = 'Ikastaroak era automatikoan sortzeko ezarpenak';
$string['autoupdate_settings'] = 'Ikastaroak era automatikoan eguneratzeko ezarpenak';
$string['autoupdate_settings_desc'] = '<p>Aukeratu \'Sinkronizatu LDAP matrikulazioak\' programatutako ataza exekutatzean eguneratuko diren eremuak.</p><p>Gutxienez eremu bat aukeratzen bada eguneratzea egingo da.</p>';
$string['bind_dn'] = 'Erabiltzaileak bilatzeko \'bind-user\' bat erabili nahi baduzu, zehaztu hemen. Horrelako zerbait \'cn=ldapuser,ou=public,o=org\'';
$string['bind_dn_key'] = '\'Bind-user\'aren izen gorena (distinguished name)';
$string['bind_pw'] = '\'Bind-user\'aren pasahitza';
$string['bind_pw_key'] = 'Pasahitza';
$string['bind_settings'] = 'Bind ezarpenak';
$string['cannotcreatecourse'] = 'Ezin izan da ikastaroa sortu: LDAP erregistroan beharrezko datuak falta dira!';
$string['cannotupdatecourse'] = 'Ezin izan da ikastaroa eguneratu: LDAP erregistroan beharrezko datuak falta dira! Ikastaroaren ID zenbakia: \'{$a->idnumber}\'';
$string['cannotupdatecourse_duplicateshortname'] = 'Ezin izan da ikastaroa eguneratu: Bikoiztutako izen laburra. Alde batera utzi da \'{$a->idnumber}\' ID zenbakia duen ikastaroa...';
$string['category'] = 'Era automatikoan sortutako ikastaroetarako kategoria';
$string['category_key'] = 'Kategoria';
$string['contexts'] = 'LDAP kontestuak';
$string['couldnotfinduser'] = 'Ezin izan da \'{$a}\' erabiltzailea aurkitu, alde batera utzi da';
$string['course_fullname'] = 'Aukerakoa: LDAP eremua zeinetatik lortuko den izen osoa.';
$string['course_fullname_key'] = 'Izen osoa';
$string['course_fullname_updateonsync'] = 'Eguneratu izen osoa sinkronizazio script-ean';
$string['course_fullname_updateonsync_key'] = 'Eguneratu izen osoa';
$string['course_idnumber'] = 'Identifikatzaile bakarraren mapa LADPn, ohikoena <em>cn</em> edo <em>uid</em>. Balioa blokeatzea gomendatzen da ikastaroa sortzeko era automatikoa erabiltzen ari bada.';
$string['course_idnumber_key'] = 'ID zenbakia';
$string['coursenotexistskip'] = '\'{$a}\' ikastaroa ez da existitzen eta sorrera automatikoa desgaituta dago, alde batera utzi da';
$string['course_search_sub'] = 'Bilatu taldetako partaidetza azpitestuinguruetan';
$string['course_search_sub_key'] = 'Bilatu azpitestuinguruak';
$string['course_settings'] = 'Ikastaroan matrikulatzeko ezarpenak';
$string['course_shortname'] = 'Aukerakoa:  LDAP eremua zeinetatik lortuko den izen laburra.';
$string['course_shortname_key'] = 'Izen laburra';
$string['course_shortname_updateonsync'] = 'Eguneratu izen laburra sinkronizazio script-ean';
$string['course_shortname_updateonsync_key'] = 'Eguneratu izen laburra';
$string['course_summary'] = 'Aukerakoa:  LDAP eremua zeinetatik lortuko den laburpena.';
$string['course_summary_key'] = 'Laburpena';
$string['course_summary_updateonsync'] = 'Eguneratu laburpena sinkronizazio script-ean';
$string['course_summary_updateonsync_key'] = 'Eguneratu laburpena';
$string['courseupdated'] = '\'{$a->idnumber}\' ID zenbakia duen ikastaroa ondo eguneratu da.';
$string['courseupdateskipped'] = '\'{$a->idnumber}\' ID zenbakia duen ikastaroak ez du eguneratzerik behar. Alde batera utzi da...';
$string['createcourseextid'] = 'SORTU matrikulatutako erabiltzailea existitzen ez den ikastaroan \'{$a->courseextid}\'';
$string['createnotcourseextid'] = 'Erabiltzailea existitzen ez den \'{$a->courseextid}\' ikastaroan matrikulatuta dago';
$string['creatingcourse'] = '\'{$a}\' ikastaroa sortzen...';
$string['duplicateshortname'] = 'Errorea ikastaroa sortzean. Bikoiztutako izen laburra. Alde batera utzi da \'{$a->idnumber}\' ID zenbakia duen iakstaroa...';
$string['editlock'] = 'Blokeatu balioa';
$string['emptyenrolment'] = 'Hutsik \'{$a->course_shortname}\' ikastaroaren \'{$a->role_shortname}\' rolaren matrikulazioa';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = 'Matrikulatu \'{$a->user_username}\' erabiltzailea \'{$a->course_shortname}\' ikastaroan (id {$a->course_id})';
$string['enroluserenable'] = '\'{$a->user_username}\' erabiltzailea \'{$a->course_shortname}\' (id {$a->course_id}) ikastaroan matrikulatu da.';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group()-ek ez du erabiltzaile-mota hau onartzen: {$a}';
$string['extcourseidinvalid'] = 'Ikastaroaren kanpoko IDa ez da baliozkoa!';
$string['extremovedsuspend'] = 'Matrikulazioa desgaitu da \'{$a->user_username}\' erabiltzailearentzat \'{$a->course_shortname}\' ikastaroan (id {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Matrikulazioa desgaitu da eta rolak ezabatu zaizkio  \'{$a->user_username}\' erabiltzailearentzat \'{$a->course_shortname}\' ikastaroan (id {$a->course_id})';
$string['extremovedunenrol'] = 'Desmatrikulatu \'{$a->user_username}\' erabiltzailea \'{$a->course_shortname}\' ikastarotik (id {$a->course_id})';
$string['failed'] = 'Huts egin du!';
$string['general_options'] = 'Aukera orokorrak';
$string['group_memberofattribute'] = 'Erabiltzailea zein taldeko kide den zehazten duen atributuaren izena (ad. memberOf, groupMembership, etab.)';
$string['group_memberofattribute_key'] = '\'Member of\' atributua';
$string['host_url'] = 'Zehaztu LDAP hosta URL formatuan, adib. \'ldap://ldap.myorg.com/\'
edo \'ldaps://ldap.myorg.com/\'';
$string['host_url_key'] = 'Ostalariaren URLa';
$string['idnumber_attribute'] = 'Taldetako partaidetzak izen gorenak baditu (distinguished names), zehaztu ezazu LDAP autentifikazio ezarpenetako erabiltzailearen \'ID zenbakia\' eremuarekin lotutako atributu berdina.';
$string['idnumber_attribute_key'] = 'Atributuaren ID zenbakia';
$string['ldap_encoding'] = 'Zehaztu LDAP zerbitzariak erabiltzen duen kodifikazioa. Ziur aski utf-8, MS AD v2-k modu lehenetsian cp1252, cp1250 eta antzeko kodifikazioak erabiltzen ditu.';
$string['ldap_encoding_key'] = 'LDAP kodifikazioa';
$string['ldap:manage'] = 'Kudeatu LDAP matrikulaziorako instantziak';
$string['memberattribute'] = 'LDAP kide-ezaugarria';
$string['memberattribute_isdn'] = 'Taldetako partaidetzak izen gorenak baditu (distinguished names), hemen zehaztu beharko dituzu. Hala izanez gero, atal honetako beste ezarpenak ere konfiguratu beharko dituzu.';
$string['memberattribute_isdn_key'] = '\'Member\' atributuak \'dn\' erabiltzen du';
$string['nested_groups'] = 'Habiaratutako taldeak (adib. taldeen taldeak) matrikulaziorako?';
$string['nested_groups_key'] = 'Habiaratutako taldeak';
$string['nested_groups_settings'] = 'Habiaratutako taldeen ezarpenak';
$string['nosuchrole'] = 'Hurrengo rola ez da existitzen: \'{$a}\'';
$string['objectclass'] = 'Ikastaroak bilatzeko erabilitako objectClass. Ohikoena \'posixGroup\'.';
$string['objectclass_key'] = 'Objektu-mota';
$string['ok'] = 'Ados!';
$string['opt_deref'] = 'Taldetako partaidetzak izen gorenak baditu (distinguished names), zehaztu bilaketetan ezinezak nola kudeatuko diren. Aukeratu hurengo balioetako bat: \'Ez\' (LDAP_DEREF_NEVER) edo \'Bai\' (LDAP_DEREF_ALWAYS)';
$string['opt_deref_key'] = 'Erreferentziazko ezizenak';
$string['phpldap_noextension'] = '<em>Dirudienez PHPko LDAP modulua ez dago instalatuta. Mesedez ziurtatu instalatuta eta gaituta dagoela matrikulazio plugin hau erabili nahi baduzu</em>';
$string['pluginname'] = 'LDAP matrikulak';
$string['pluginname_desc'] = '<p>LDAP zerbitzaria erabil dezakezu matrikulazioak kontrolatzeko. Suposatu egiten da zure LDAP arbolak ikastaroetarako taldeak dituela eta hauetako talde edo ikastaro bakoitzak ikasleei erreferentzia egiten dieten matrikulazio-sarrerak dituztela.</p><p>Suposatu egiten da ikastaroak talde bezala daudela definituta LDAPen, talde bakoitzak erabiltzailea identifikazio bakarra duten hainbat matrikulazio-eremu dituelarik (<em>member</em> edo <em>memberUid</em>).</p><p>LDAP matrikulazioa erabiltzeko, erabiltzaileek balio duen ID zenbakia eremua izan <strong>behar</strong>dute. LDAP taldeek \'idnumber\' hori izan behar dute erabiltzaile-eremuetan erabiltzailea ikastaro batean matrikulatu ahal izateko. Ondo funtzionatuko du dagoeneko LDAP Autentifikazioa erabiltzen baduzu.</p><p>Matrikulazioak eguneratu egingo dira erabiltzailea idenfikatzen denean. Kontsulta ezazu <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Plugin hau LDAPn talde berriak agertzen direnean ikastaro berriak era automatikoan sortzeko ere zehaztu ahal da.</p>';
$string['pluginnotenabled'] = 'Plugina ez dago gaituta!';
$string['privacy:metadata'] = 'LDAP bidezko matrikulazio-pluginak ez du datu pertsonalik biltzen.';
$string['role_mapping'] = '<p>Rol bakoitzeko, ikastaroak adierazten dituzten taldeen kokapenaren LDAP testuinguruak zehaztu behar dituzu. Banatu testuinguruak \';\' karakterea erabiliz.</p><p>Zure LDAP zerbitzariak taldeetako kideak gordetzeko erabiltzen duen atributua ere zehaztu beharko duzu. Hau normalean \'member\' edo \'memberUid\'.</p>';
$string['role_mapping_attribute'] = 'LDAP \'member\' atributua {$a}-(r)entzat';
$string['role_mapping_context'] = 'LDAP testuinguruak {$a}-(r)entzat';
$string['role_mapping_key'] = 'Lotu rolak LDAPetik';
$string['roles'] = 'Rolen lotura';
$string['server_settings'] = 'LDAP zerbitzariaren ezarpenak';
$string['synccourserole'] = '== \'{$a->idnumber}\' ikastaroaren \'{$a->role_shortname}\' rola sinkronizatzen';
$string['syncenrolmentstask'] = 'Sinkronizatu LDAP matrikulazioak ataza';
$string['template'] = 'Aukerakoa: era automatikoan sortutako ikastaroak ikastaro-txantiloi batetik kopia ditzakete beren zehaztasunak.';
$string['template_key'] = 'Txantiloia';
$string['unassignrole'] = '\'{$a->user_username}\' erabiltzaileari \'{$a->role_shortname}\' rola kentzen \'{$a->course_shortname}\' ikastarotik (id {$a->course_id})';
$string['unassignrolefailed'] = 'Errorea \'{$a->user_username}\' erabiltzaileari \'{$a->role_shortname}\' rola kentzean \'{$a->course_shortname}\' ikastarotik (id {$a->course_id})';
$string['unassignroleid'] = '\'{$a->user_id}\' erabiltzaileari \'{$a->role_id}\' IDko rola kentzen';
$string['updatelocal'] = 'Eguneratu datu lokalak';
$string['user_attribute'] = 'Taldetako partaidetzak izen gorenak baditu (distinguished names), zehaztu erabiltzaileak izendatzeko/bilatzeko erabiliko den atributua. Autentifikaziorako LDAP erabiltzen baduzu, balio hau LDAPeko autentifikazio ezarpenetako \'ID zenbakia\' eremuan lotutakoaren berdina izan beharko luke.';
$string['user_attribute_key'] = 'Atributuaren ID zenbakia';
$string['user_contexts'] = 'Taldetako partaidetzak izen gorenak baditu (distinguished names), zehaztu ezazu erabiltzaileak dauden testuinguruen zerrenda. Banandu testuinguru ezberdinak \';\' karakterea erabilita. Adibidez: \'ou=erabitzaileak,o=org; ou=besteak,o=org\'.';
$string['user_contexts_key'] = 'Testuinguruak';
$string['user_search_sub'] = 'Taldetako partaidetzak izen gorenak baditu (distinguished names), zehaztu azpitestuinguruetan ere erabiltzaileak bilatuko ote diren.';
$string['user_search_sub_key'] = 'Bilatu azpitestuinguruak';
$string['user_settings'] = 'Erabiltzaileen bilaketaren ezarpenak';
$string['user_type'] = 'Taldeetako partaidetzak izen gorenak baditu (distinguished names), zehaztu LDAPean erabiltzaileak gordetzen diren modua';
$string['user_type_key'] = 'Erabiltzaile-mota';
$string['version'] = 'Zerbitzariak erabiltzen duen LDAP protokoloaren bertsioa';
$string['version_key'] = 'Bertsioa';
