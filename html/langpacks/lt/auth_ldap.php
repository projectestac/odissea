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
 * Strings for component 'auth_ldap', language 'lt', version '4.5'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Negalima sukurti naujos paskyros aktyvioje direktorijoje. Įsitikinkite kad jūs atitinkate visus reikalavimus šiam darbui (LDAPS sujungimas, priskirti naudotojus su adekvačiomis teisėmis, ir kt.)';
$string['auth_ldap_attrcreators'] = 'Sąrašas grupių ir kontekstų kurių nariai gali kurti atributus. Atskirkite skirtingas grupes su \';\' . Pvz. \'cn=teaches, ou=staff, o=myorg';
$string['auth_ldap_attrcreators_key'] = 'Atributų kūrėjai';
$string['auth_ldap_auth_user_create_key'] = 'Sukurti naudotojus išoriškai.';
$string['auth_ldap_bind_dn'] = 'Jei jūs norite naudoti susietus naudotojus kitų naudotojų paieškai, aprašykite  čia. Pvz. \'cn=ldapuse. ou =public, o = org';
$string['auth_ldap_bind_dn_key'] = 'Atpažinimo vardas';
$string['auth_ldap_bind_pw'] = 'Slaptažodis įpareigotam naudotojui.';
$string['auth_ldap_bind_pw_key'] = 'Slaptažodis';
$string['auth_ldap_bind_settings'] = 'Įpareigojimo nustatymai';
$string['auth_ldap_changepasswordurl_key'] = 'Slaptažodžio keitimo URL';
$string['auth_ldap_contexts'] = 'Sąrašas, iš kurios vietos kilę naudotojai. Atskirkite skirtingus sąrašus su kabletaškiu \';\'. Pvz.: \'ou=user,o=org; ou=other,o=org';
$string['auth_ldap_contexts_key'] = 'Kontekstas';
$string['auth_ldap_create_context'] = 'Jei pasirinkote naudotojų kūrimą su el. pašto patvirtinimu, nurodykite sąrašą, kur naudotojas yra sukurtas. Jis turėtų būti kitoks nei kitų naudotojų, saugumo sumetimais. Nebūtina nurodyti sąrašo ldap_context kintamajam, Moodle automatiškai tai padarys už jus.';
$string['auth_ldap_create_context_key'] = 'Naujų naudotojų kontekstas';
$string['auth_ldap_create_error'] = 'Klaida sukuriant naudotoją LDAP';
$string['auth_ldap_expiration_desc'] = 'Pasirinkite „{$a->no}“, kad išjungtumėte pasibaigusio slaptažodžio tikrinimą, arba „{$a->ldapserver}“, jei norite nuskaityti slaptažodžio galiojimo laiką tiesiai iš LDAP serverio.';
$string['auth_ldap_expiration_key'] = 'Pasibaigęs terminas';
$string['auth_ldap_expiration_warning_desc'] = 'Dienų skaičius iki įspėjimo apie slaptažodžio galiojimo pabaigą.';
$string['auth_ldap_expiration_warning_key'] = 'Perspėjimas dėl galiojimo pabaigos';
$string['auth_ldap_expireattr_desc'] = 'Neprivaloma: nepaiso LDAP atributo, kuriame saugomas slaptažodžio galiojimo laikas.';
$string['auth_ldap_expireattr_key'] = 'Galiojimo laiko atributas';
$string['auth_ldap_graceattr_desc'] = 'Neprivalomas: Nepaiso malonės prisijungimo atributo.';
$string['auth_ldap_gracelogin_key'] = 'Malonės prisijungimo požymis';
$string['auth_ldap_gracelogins_desc'] = 'Įgalinti LDAP malonės prisijungimo palaikymą. Pasibaigus slaptažodžio galiojimo laikui, naudotojas gali prisijungti, kol atidėjimo prisijungimo skaičius bus 0. Įjungus šį nustatymą, bus rodomas prisijungimo prie prisijungimo pranešimas, jei slaptažodžio galiojimo laikas baigėsi.';
$string['auth_ldap_gracelogins_key'] = 'Malonės prisijungimai';
$string['auth_ldap_groupecreators'] = 'Sąrašas grupių ar kontekstų narių kurie gali kurti grupes. Atskirti skirtingas grupes su \';\'. Pvz.:  \'cn=teachers,ou=staff,o=myorg';
$string['auth_ldap_groupecreators_key'] = 'Grupių kūrėjai';
$string['auth_ldap_host_url'] = 'Nurodykite LDAP prieglobą URL forma, pvz., „ldap://ldap.myorg.com/“ arba „ldaps://ldap.myorg.com/“. Atskirkite kelis serverius \';\' kad gautumėte perjungimo paramą.';
$string['auth_ldap_host_url_key'] = 'Pagrindinio kompiuterio URL';
$string['auth_ldap_ldap_encoding'] = 'LDAP serverio naudojama koduotė, greičiausiai utf-8. Jei pasirinkta LDAP v2, Active Directory naudoja sukonfigūruotą kodavimą, pvz., cp1252 arba cp1250.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP atkodavimas';
$string['auth_ldap_login_settings'] = 'Prisijungimo nustatymai';
$string['auth_ldap_memberattribute'] = 'Nurodykite naudotojo nario atributą, kai jis priklauso grupei.';
$string['auth_ldap_memberattribute_isdn'] = 'Perrašo narių atributų tvarkymo reikšmes.';
$string['auth_ldap_memberattribute_isdn_key'] = 'Naudotojo atributas naudoja dn';
$string['auth_ldap_memberattribute_key'] = 'Naudotojo atributas';
$string['auth_ldap_no_mbstring'] = 'Jums reikia \'mbstring\' papildinio kad galėtumėte kurti naudotojus aktyvioje direktorijoje.';
$string['auth_ldap_noconnect'] = 'LDAP modulis negali prisijungti prie serverio: {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP modulis negali prisijungti prie jokio serverio: {$a}';
$string['auth_ldap_noextension'] = 'Atrodo, kad PHP LDAP modulio nėra. Jei norite naudoti šį autentifikavimo papildinį, įsitikinkite, kad jis įdiegtas ir įgalintas.';
$string['auth_ldap_objectclass'] = 'Neprivaloma: nepaiso objectClass, naudojamo ldap_user_type naudotojams pavadinti/ieškoti. Paprastai to keisti nereikia.';
$string['auth_ldap_objectclass_key'] = 'Objektų klasė';
$string['auth_ldap_opt_deref'] = 'Nustato kaip slapyvardžiai yra naudojami paieškoje. Pasirinkite vieną iš šių reikšmių "Ne" (LDAP_DEREF_NEVER) arba "Taip" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Slapyvardžiai be nuorodos';
$string['auth_ldap_passtype'] = 'Apibrėžkite naujų arba pakeistų slaptažodžių formatą LDAP serveryje.';
$string['auth_ldap_passtype_key'] = 'Slaptažodžio formatas';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP slaptažodžio galiojimo pabaigos nustatymai';
$string['auth_ldap_preventpassindb'] = 'Pasirinkite Taip kad uždraustumėte slaptažodžių saugojimą Moodle duombazėje.';
$string['auth_ldap_preventpassindb_key'] = 'Apsaugoti nuo slaptažodžių talpinimo';
$string['auth_ldap_rolecontext'] = '{$a->localname} kontekstas';
$string['auth_ldap_rolecontext_help'] = 'LDAP kontekstas, naudojamas <i>{$a->localname}</i> atvaizdavimui pasirinkti. Atskirkite kelias grupes \';\'. Paprastai kažkas panašaus į „cn={$a->shortname},ou=first-ou-with-role-groups,o=myorg; cn={$a->shortname},ou=second-ou-with -role-groups,o=myorg".';
$string['auth_ldap_search_sub'] = 'Įterpti reikšmę nelygią 0 jei nori ieškoti naudotojus iš konteksto.';
$string['auth_ldap_search_sub_key'] = 'Ieškoti kontekste.';
$string['auth_ldap_server_settings'] = 'LDAP serverio nustatymai';
$string['auth_ldap_suspended_attribute'] = 'Neprivaloma: šis atributas bus naudojamas vietoje sukurtai naudotojo paskyrai įjungti / laikinai sustabdyti.';
$string['auth_ldap_suspended_attribute_key'] = 'Sustabdytas atributas';
$string['auth_ldap_unsupportedusertype'] = 'ldap user_create() nepalaiko pasirinkto naudotojo tipo:  {$a}';
$string['auth_ldap_update_userinfo'] = 'Atnaujinti naudotojo informaciją (vardas, pavardė, adresas..) iš LDAP į Moodle.';
$string['auth_ldap_user_attribute'] = 'Atributas naudojamas rasti naudotojui. Dažniausiai \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Naudotojo atributas';
$string['auth_ldap_user_exists'] = 'LDAP naudotojo vardas jau naudojamas.';
$string['auth_ldap_user_settings'] = 'Naudotojo paieškos nustatymai';
$string['auth_ldap_user_type'] = 'Pasirinkite, kaip naudotojai saugomi LDAP. Šis nustatymas taip pat nurodo, kaip veiks prisijungimo galiojimo pabaiga, malonės prisijungimai ir naudotojo kūrimas.';
$string['auth_ldap_user_type_key'] = 'Naudotojo tipas';
$string['auth_ldap_usertypeundefined'] = 'config.user_type neapibrėžtas arba funkcija ldap_expirationtime2unix nepalaiko pasirinkto tipo!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type neapibrėžtas arba funkcija ldap_unixi2expirationtime nepalaiko pasirinkto tipo!';
$string['auth_ldap_version'] = 'LDAP protokolo versija kurią naudoja serveris.';
$string['auth_ldap_version_key'] = 'Versija';
$string['auth_ldapdescription'] = 'Šis metodas užtikrina autentifikavimą naudojant išorinį LDAP serverį. Jei nurodytas naudotojo vardas ir slaptažodis galioja, Moodle sukuria naują naudotojo įrašą savo duomenų bazėje. Šis papildinys gali nuskaityti naudotojo atributus iš LDAP ir iš anksto užpildyti norimus laukus Moodle. Atliekant šiuos prisijungimus, tikrinamas tik naudotojo vardas ir slaptažodis.';
$string['auth_ldapextrafields'] = 'Šie laukai yra nebūtini. Jūs galite pasirinkti, kad Moodle pati užpildytų juos informacija iš <B>LDAP laukų</B>, kuriuos čia nurodysite. <P>Jei laukus paliksite tuščius, tai jokia informacija nebus atsiųsta iš LDAP ir Moodle pati užpildys įprastinėmis vertėmis. <P>Abiem atvejais, naudotojai galės keisti pateiktą informaciją, kai tik prisijunks.';
$string['auth_ldapnotinstalled'] = 'Negalima naudoti LDAP atpažinimo. PHP LDAP modulis nėra įrašytas.';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Jei norite bandyti vieną kartą prisijungti naudodami NTLM domeną, nustatykite į „taip“. Atminkite, kad tam reikia papildomos sąrankos serveryje. Norėdami gauti daugiau informacijos, žr. dokumentaciją <a href="https://docs.moodle.org/en/NTLM_authentication">NTLM autentifikavimas</a>.';
$string['auth_ntlmsso_enabled_key'] = 'Įjungti';
$string['auth_ntlmsso_ie_fastpath'] = 'Nustatykite įgalinti NTLM SSO greitąjį kelią (apeina tam tikrus veiksmus, jei kliento naršyklė yra MS Internet Explorer).';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Išbandyti NTLM su visomis naršyklėmis';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE greitasis kelias?';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Taip, pabandyti naudoti NTLM kitas naršykles';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Taip, visos kitos naršyklės naudoja standartinę prisijungimo formą';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Nepavyko išgauti naudotojo vardo iš REMOTE_USER antraštės. Ar sukonfigūruotas formatas tinkamas?';
$string['auth_ntlmsso_missing_username'] = 'Turite nurodyti bent %username% nuotolinio naudotojo vardo formatą';
$string['auth_ntlmsso_remoteuserformat'] = 'Jei pasirinkote „NTLM“ skiltyje „Autentifikavimo tipas“, čia galite nurodyti nuotolinio naudotojo vardo formatą. Jei paliksite šį lauką tuščią, bus naudojamas numatytasis DOMAIN\\naudotojo vardo formatas. Galite naudoti pasirenkamą <b>%domain%</b> vietos rezervą, kad nurodytumėte, kur rodomas domeno pavadinimas, ir privalomą <b>%username%</b> vietos rezervą, kad nurodytumėte, kur bus rodomas naudotojo vardas. <br /><br />Kai kurie plačiai naudojami formatai yra <tt>%domain%\\%username%</tt> (MS Windows numatytoji), <tt>%domain%/%username%</tt>, <tt >%domain%+%username%</tt> ir tik <tt>%username%</tt> (jei nėra domeno dalies).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Nuotolinio naudotojo vardo formatas';
$string['auth_ntlmsso_subnet'] = 'Jei nustatyta, tada bus bandomas SSO tik su klientais iš potinklio. Formatas : xxx.xxx.xxx.xxx/bitmask . Atskirti skirtingus potinklius su \',';
$string['auth_ntlmsso_subnet_key'] = 'Potinklis';
$string['auth_ntlmsso_type'] = 'Patikrinimo metodas interneto serveryje naudotojų atpažinimui (jei abejoja, imkite NTLM)';
$string['auth_ntlmsso_type_key'] = 'Tikrinimo tipas';
$string['cannotmaprole'] = 'Vaidmuo „{$a->rolename}“ negali būti susietas, nes jo trumpasis pavadinimas „{$a->shortname}“ per ilgas ir (arba) jame yra brūkšnelių. Kad būtų galima jį susieti, trumpąjį pavadinimą reikia sumažinti iki daugiausiai {$a->charlimit} simbolių ir pašalinti visus brūkšnelius. <a href="{$a->link}">Redaguoti vaidmenį</a>';
$string['connectingldap'] = 'Jungiamasi prie LDAP serverio...';
$string['connectingldapsuccess'] = 'Prisijungimas prie LDAP serverio buvo sėkmingas';
$string['creatingtemptable'] = 'Kuriamos laikinos lentelės {$a}';
$string['diag_contextnotfound'] = 'Konteksto {$a} nėra arba jo negalima nuskaityti įrišimo DN.';
$string['diag_emptycontext'] = 'Rastas tuščias kontekstas.';
$string['diag_genericerror'] = 'LDAP klaida {$a->code} skaitant {$a->subject}: {$a->message}.';
$string['diag_rolegroupnotfound'] = 'Grupės {$a->group}, skirtos vaidmeniui {$a->localname}, neegzistuoja arba jos negali nuskaityti surišimo DN.';
$string['diag_toooldversion'] = 'Labai mažai tikėtina, kad šiuolaikinis LDAP serveris naudoja LDAPv2 protokolą. Neteisingi nustatymai gali sugadinti reikšmes naudotojo laukuose. Pasitarkite su savo LDAP administratoriumi.';
$string['didntfindexpiretime'] = 'password_expire() nerado pabaigos laiko.';
$string['didntgetusersfromldap'] = 'Negautas nei vienas naudotojas iš LDAP -- klaida? -- išeinama';
$string['gotcountrecordsfromldap'] = 'Gauta {$a} įrašų iš LDAP';
$string['invalidusererrors'] = 'Įspėjimas: Praleistas {$a} naudotojų paskyrų kūrimas.';
$string['invaliduserexception'] = 'Klaida: Nepavyksta sukurti naujos naudotojo paskyros. Išsami informacija ir priežastis:
{$a}
Naudotojas praleidžiamas.';
$string['ldapnotconfigured'] = 'LDAP prieglobos URL šiuo metu nesukonfigūruotas';
$string['morethanoneuser'] = 'Daugiau nei vienas naudotojo įrašas rastas LDAP. Naudojamas tik pirmasis.';
$string['needbcmath'] = 'Norint naudoti pasibaigusio slaptažodžio tikrinimą naudojant „Active Directory“, reikalingas BCMath plėtinys.';
$string['needmbstring'] = 'Jums reikia mbstring papildinio pakeisti slaptažodį aktyvioje direktorijoje.';
$string['nodnforusername'] = 'Klaida user_update_password(). Jokio DN: {$a->username}';
$string['noemail'] = 'Bandyta išsiųsti el. laišką, bet nepavyko!';
$string['notcalledfromserver'] = 'Neturėtų būti kviečiamas iš interneto serverio';
$string['noupdatestobedone'] = 'Jokių atnaujinimų nėra';
$string['nouserentriestoremove'] = 'Jokių naudotojų pašalinimui nėra';
$string['nouserentriestorevive'] = 'Jokių naudotojų įrašų peržiūrai';
$string['nouserstobeadded'] = 'Jokių naudotojų pridėjimui';
$string['ntlmsso_attempting'] = 'Bandoma SSO per NTLM';
$string['ntlmsso_failed'] = 'Automatinis prisijungimas nepavyko, pabandykite paprastą prisijungimo puslapį...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO išjungtas';
$string['ntlmsso_unknowntype'] = 'Nežinomas ntlmsso tipas!';
$string['pagedresultsnotsupp'] = 'LDAP puslapių rezultatai nepalaikomi (arba jūsų PHP versija nepalaikoma, jūs sukonfigūravote Moodle naudoti LDAP protokolo 2 versiją arba Moodle negali susisiekti su jūsų LDAP serveriu, kad sužinotų, ar galimas puslapių palaikymas.)';
$string['pagesize'] = 'Įsitikinkite, kad ši reikšmė yra mažesnė už LDAP serverio rezultatų rinkinio dydžio limitą (didžiausias įrašų skaičius, kurį galima pateikti vienoje užklausoje).';
$string['pagesize_key'] = 'Puslapio  dydis';
$string['pluginname'] = 'Naudoti LDAP serverį';
$string['pluginnotenabled'] = 'Papildinys neįjungtas!';
$string['privacy:metadata'] = 'LDAP serverio autentifikavimo papildinys nesaugo jokių asmeninių duomenų.';
$string['renamingnotallowed'] = 'Naudotojų pervardijimas nėra leidžiamas LDAP';
$string['rootdseerror'] = 'Klaida užklausinėjant rootDSE aktyviai direktorijai';
$string['start_tls'] = 'Naudokite įprastą LDAP paslaugą (389 prievadą) su TLS šifravimu';
$string['start_tls_key'] = 'Naudoti TLS';
$string['syncroles'] = 'Sinchronizuoti sistemos vaidmenis iš LDAP';
$string['synctask'] = 'LDAP naudotojų sinchronizavimo užduotis';
$string['systemrolemapping'] = 'Sistemos vaidmenų atvaizdavimas';
$string['updatepasserror'] = 'Klaida user_update_password(). Klaidos kodas: {$a->errno}; Klaidos tekstas: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Klaida user_update_password() skaitant slaptažodžio galiojimo laiką. Klaidos kodas : {$a->errno}; Klaidos eilutė: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Klaida user_update_password() keičiant galiojimo laiką ir (arba) atidėjimo prisijungimus. Klaidos kodas: {$a->errno}; Klaidos eilutė: {$a->errstring}';
$string['updateremfail'] = 'Klaida atnaujinant LDAP įrašą. Klaidos kodas: {$a->errno}; Klaidos eilutė: {$a->errstring}<br/>Key ({$a->key}) - sena moodle reikšmė \'{$a->ouvalue}\' nauja reikšmė: \'{$a->nuvalue}';
$string['updateremfailamb'] = 'Nepavyko atnaujinti LDAP su dviprasmiška sritimi {$a->key}; sena moodle reikšmė: \'{$a->ouvalue}\', nauja reikšmė: \'{$a->nuvalue}';
$string['updateusernotfound'] = 'Nepavyko rasti naudotojo atnaujinant išoriškai. Detalės: paieškos bazė: \'{$a->userdn}\'; paieškos filtrai: \'(objectClass=*)\'; paieškos atributai: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'LDAP user_activate() nepalaiko pasirinkto naudotojo tipo : {$a}';
$string['user_disablenotsupportusertype'] = 'LDAP user_disable() nepalaiko pasirinkto naudotojo tipo : {$a}';
$string['useracctctrlerror'] = 'Klaida gaunant userAccountControl {$a}';
$string['userentriestoadd'] = 'Naudotojo įrašai kurie bus pridėti: {$a}';
$string['userentriestoremove'] = 'Naudotojo įrašai kurie bus pašalinti: {$a}';
$string['userentriestorevive'] = 'Naudotojo įrašai kurie bus prikelti: {$a}';
$string['userentriestoupdate'] = 'Naudotojo įrašai kurie bus atnaujinti: {$a}';
$string['usernotfound'] = 'Naudotojas nerastas LDAP';
