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
 * Strings for component 'auth_ldap', language 'ro', version '4.5'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Nu se poate crea un cont nou în Active Directory. Asigurați-vă că îndepliniți toate cerințele (conexiune LDAPS , asociați utilizatorul cu drepturile corespunzătoare, etc.)';
$string['auth_ldap_attrcreators'] = 'Lista grupurilor sau contextelor ai căror membri au permisiunea de  a crea atribute. Separați grupurile multiple prin \';\'. În mod obișnuit \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Creatorii atributelor';
$string['auth_ldap_auth_user_create_key'] = 'Creați utilizatori extern';
$string['auth_ldap_bind_dn'] = 'Dacă doriți să utilizați bind-user pentru a căuta utilizatori, specificați-l aici. Ceva de genul „cn = ldapuser, ou = public, o = org”';
$string['auth_ldap_bind_dn_key'] = 'Nume distinctiv';
$string['auth_ldap_bind_pw'] = 'Parola pentru utilizatorul de legătură';
$string['auth_ldap_bind_pw_key'] = 'Parolă';
$string['auth_ldap_bind_settings'] = 'Setări bind';
$string['auth_ldap_changepasswordurl_key'] = 'URL schimbare parolă';
$string['auth_ldap_contexts'] = 'Lista contextelor unde se găsesc utilizatorii. Separați contextele diferite prin \';\'. De exemplu: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Contexte';
$string['auth_ldap_create_context'] = 'Dacă activați crearea utilizatorului cu confirmarea prin e-mail, specificați contextul în care sunt creați utilizatorii. Acest context ar trebui să fie diferit de alți utilizatori pentru a preveni problemele de securitate. Nu este nevoie să adăugați acest context la ldap_context-variable, Moodle va căuta automat utilizatori din acest context. <br /> <b> Notă! </b> Trebuie să modificați metoda user_create() în fișierul auth/ldap/auth.php pentru a activa crearea utilizatorilor';
$string['auth_ldap_create_context_key'] = 'Context pentru utilizatori noi';
$string['auth_ldap_create_error'] = 'Eroare la crearea utilizatorului în LDAP.';
$string['auth_ldap_expiration_desc'] = 'Selectați „{$a->no}” pentru a dezactiva verificarea parolei expirate sau „{$a->ldapserver}” pentru a citi timpul de expirare a parolei direct de pe serverul LDAP.';
$string['auth_ldap_expiration_key'] = 'Expirare';
$string['auth_ldap_expiration_warning_desc'] = 'Numărul de zile dinainte ca o avertizare pentru expirarea parolei să fie emisă.';
$string['auth_ldap_expiration_warning_key'] = 'Avertizare de expirare';
$string['auth_ldap_expireattr_desc'] = 'Opțional: Înlocuiește atributul LDAP care stochează timpul de expirare a parolei.';
$string['auth_ldap_expireattr_key'] = 'Atribut pentru expirare';
$string['auth_ldap_graceattr_desc'] = 'Opțional: Înlocuiește atributul de autentificare grație';
$string['auth_ldap_gracelogin_key'] = 'Atributul de autentificare grație';
$string['auth_ldap_gracelogins_desc'] = 'Activați asistența de conectare grație LDAP. După ce parola a expirat, utilizatorul se poate conecta până când numărul de conectare la grație este 0. Activarea acestei setări afișează mesajul de conectare la grație dacă parola a expirat.';
$string['auth_ldap_gracelogins_key'] = 'Conectări de grație';
$string['auth_ldap_groupecreators'] = 'Lista grupurilor sau contextelor ai căror membri sunt autorizați să creeze grupuri. Separați mai multe grupuri cu „;”. De obicei ceva de genul „cn = profesori, ou = personal, o = myorg”';
$string['auth_ldap_groupecreators_key'] = 'Creatorii grupului';
$string['auth_ldap_host_url'] = 'Specificați gazda LDAP sub formă de adresă URL, cum ar fi „ldap://ldap.myorg.com/” sau „ldaps: //ldap.myorg.com/”. Separați mai multe servere cu \';\' pentru a obține asistență pentru reluare la eșec.';
$string['auth_ldap_host_url_key'] = 'URL gazdă';
$string['auth_ldap_ldap_encoding'] = 'Codificare utilizată de serverul LDAP, cel mai probabil utf-8. Dacă este selectat LDAP v2, Active Directory folosește codificarea configurată, cum ar fi cp1252 sau cp1250.';
$string['auth_ldap_ldap_encoding_key'] = 'Codare LDAP';
$string['auth_ldap_login_settings'] = 'Setări pentru autentificare';
$string['auth_ldap_memberattribute'] = 'Opțional: Înlocuiește atributul membru utilizator, atunci când utilizatorii aparțin unui grup. De obicei „member”';
$string['auth_ldap_memberattribute_isdn'] = 'Înlocuiește gestionarea valorilor atributelor de membru';
$string['auth_ldap_memberattribute_isdn_key'] = 'Atributul membru folosește dn';
$string['auth_ldap_memberattribute_key'] = 'Atribut al membrului';
$string['auth_ldap_no_mbstring'] = 'Este necesară extensia mbstring pentru a crea utilizatori în Active Directory.';
$string['auth_ldap_noconnect'] = 'LDAP-module nu se poate conecta la server: {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP-module nu se poate conecta la niciun server: {$a}';
$string['auth_ldap_noextension'] = 'Modulul PHP LDAP nu pare să fie prezent. Vă rugăm să vă asigurați că este instalat și activat dacă doriți să utilizați acest plugin de autentificare.';
$string['auth_ldap_objectclass'] = 'Opțional: Înlocuiește obiectul de clasă folosit pentru a numi / căuta utilizatori pe ldap_user_type. De obicei nu este nevoie să schimbați acest lucru.';
$string['auth_ldap_objectclass_key'] = 'Clasa obiectului';
$string['auth_ldap_opt_deref'] = 'Determină modul în care sunt tratate pseudonimele în timpul căutării. Selectați una dintre următoarele valori: „Nu” (LDAP_DEREF_NEVER) sau „Da” (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Aliasuri de referință';
$string['auth_ldap_passtype'] = 'Specificați formatul parolelor noi sau celor schimbate în serverul LDAP.';
$string['auth_ldap_passtype_key'] = 'Format parolă';
$string['auth_ldap_passwdexpire_settings'] = 'Setările pentru expirarea parolei LDAP';
$string['auth_ldap_preventpassindb'] = 'Selectați "da" pentru ca parolele să nu fie stocate în baza de date Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Nu salva parole în memoria cache';
$string['auth_ldap_rolecontext'] = 'Context {$a->localname}';
$string['auth_ldap_rolecontext_help'] = 'Contextul LDAP folosit pentru a selecta pentru maparea <i>{$a->localname}</i>. Separați mai multe grupuri cu „;”. De obicei ceva de genul „cn={$a->shortname},ou=first-ou-with-role-groups,o=myorg; cn={$a->shortname},ou=second-ou-with -role-groups,o=myorg".';
$string['auth_ldap_search_sub'] = 'Căutați utilizatori în subcontexte';
$string['auth_ldap_search_sub_key'] = 'Caută subcontexte';
$string['auth_ldap_server_settings'] = 'Setări server LDAP';
$string['auth_ldap_suspended_attribute'] = 'Opțional: când este furnizat, acest atribut va fi utilizat pentru a activa / suspenda contul de utilizator creat local.';
$string['auth_ldap_suspended_attribute_key'] = 'Atribut suspendat';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create()  nu acceptă tipul de utilizator selectat: {$a}';
$string['auth_ldap_update_userinfo'] = 'Actualizați informațiile utilizatorului (prenume, prenume, adresă ..) de la LDAP la Moodle. Specificați setările „Mapping date” după cum aveți nevoie.';
$string['auth_ldap_user_attribute'] = 'Opțional: Înlocuiește atributul folosit pentru a numi / căuta utilizatori. De obicei „cn”.';
$string['auth_ldap_user_attribute_key'] = 'Atribut al utilizatorului';
$string['auth_ldap_user_exists'] = 'Numele de utilizator LDAP există deja';
$string['auth_ldap_user_settings'] = 'Setări pentru căutarea utilizatorului';
$string['auth_ldap_user_type'] = 'Selectați modul de stocare a utilizatorilor în LDAP. Această setare specifică, de asemenea, modul în care vor funcționa expirarea autentificării, conectările grație și crearea utilizatorului.';
$string['auth_ldap_user_type_key'] = 'Tipul de utilizator';
$string['auth_ldap_usertypeundefined'] = 'config.user_type nu este definit sau funcția ldap_expirationtime2unix nu acceptă tipul selectat!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type nu este definit sau funcția  ldap_unixi2expirationtime nu acceptă tipul selectat!';
$string['auth_ldap_version'] = 'Versiunea protocolului LDAP folosită de serverul dumneavoastră.';
$string['auth_ldap_version_key'] = 'Versiune';
$string['auth_ldapdescription'] = 'Această metodă oferă autentificare împotriva unui server LDAP extern. Dacă numele de utilizator și parola date sunt valabile, Moodle creează o nouă intrare de utilizator în baza sa de date. Acest plugin poate citi atributele utilizatorului din LDAP și poate completa câmpurile dorite în Moodle. Pentru următoarele conectări sunt verificate doar numele de utilizator și parola.';
$string['auth_ldapextrafields'] = 'Aceste câmpuri sunt opționale. Puteți alege să completați câteva câmpuri de utilizator Moodle cu informații din <b> câmpurile LDAP </b> pe care le specificați aici. <p> Dacă lăsați aceste câmpuri goale, atunci nimic nu va fi transferat de la LDAP și valorile implicite ale Moodle vor fi folosite în schimb. </p> <p> În ambele cazuri, utilizatorul va putea edita toate aceste câmpuri după ce se conectează în. </p>';
$string['auth_ldapnotinstalled'] = 'Nu se poate folosi autentificarea LDAP. Modulul PHP LDAP nu este instalat.';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Setați Da pentru a încerca Single Sign On cu domeniul NTLM. Rețineți că acest lucru necesită configurare suplimentară pe server pentru a funcționa. Pentru detalii suplimentare, consultați documentația <a href="https://docs.moodle.org/en/NTLM_authentication"> Autentificarea NTLM </a>.';
$string['auth_ntlmsso_enabled_key'] = 'Activează';
$string['auth_ntlmsso_ie_fastpath'] = 'Setați să activați calea rapidă SSL NTLM (ocolește anumiți pași dacă browserul clientului este MS Internet Explorer).';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Încearcă NTLM cu toate browserele';
$string['auth_ntlmsso_ie_fastpath_key'] = 'Calea rapidă MS IE?';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Da, încercați alte browsere NTLM';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Da, toate celelalte browsere utilizează formularul standard de autentificare';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Imposibil de extras numele de utilizator din antetul REMOTE_USER. Este corect formatul configurat?';
$string['auth_ntlmsso_missing_username'] = 'Trebuie să specificați cel puțin % username% în formatul de nume de utilizator la distanță';
$string['auth_ntlmsso_remoteuserformat'] = 'Dacă ați ales „NTLM” în „Tipul de autentificare”, puteți specifica aici formatul de nume de utilizator la distanță. Dacă lăsați acest lucru gol, va fi utilizat formatul implicit DOMAIN \\ nume de utilizator. Puteți utiliza substituentul opțional <b>%domain% </b> pentru a specifica unde apare numele domeniului și substituentul obligatoriu <b>%username% </b> pentru a specifica unde apare numele de utilizator. <br /> <br /> Unele formate utilizate pe scară largă sunt <tt>%domain% \\%username% </tt> (implicit MS Windows), <tt>%domain% /%username% </tt>, <tt >%domain% +%username% </tt> și doar <tt>%username% </tt> (dacă nu există o parte din domeniu).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Format de nume de utilizator la distanță';
$string['auth_ntlmsso_subnet'] = 'Dacă este setat, va încerca SSO numai cu clienții din această subrețea. Format: xxx.xxx.xxx.xxx/bitmask. Separați mai multe subrețele cu \',\' (virgulă).';
$string['auth_ntlmsso_subnet_key'] = 'Subnet';
$string['auth_ntlmsso_type'] = 'Metoda de autentificare configurată în serverul web pentru a autentifica utilizatorii (În caz de incertitudine, alegeți NTLM)';
$string['auth_ntlmsso_type_key'] = 'Tip de autentificare';
$string['cannotmaprole'] = 'Rolul „{$a->rolename}” nu poate fi mapat deoarece numele său scurt „{$a->shortname}” este prea lung și / sau conține cratime. Pentru a permite maparea acestuia, numele scurt trebuie redus la maximum {$a->charlimit} caractere și orice cratime eliminată. <a href="{$a->link} "> Editați rolul </a>';
$string['connectingldap'] = 'Conectare la serverul LDAP...';
$string['connectingldapsuccess'] = 'Conectarea la serverul LDAP a avut succes';
$string['creatingtemptable'] = 'Se creează tabel temporar  {$a}';
$string['diag_contextnotfound'] = 'Contextul {$a} nu există sau nu poate fi citit de bind DN.';
$string['diag_emptycontext'] = 'S-a găsit un context necompletat.';
$string['diag_genericerror'] = 'Eroare LDAP {$a->code} citind {$a->subject}: {$a->message}.';
$string['diag_rolegroupnotfound'] = 'Grupul {$a->group} pentru rolul {$a->localname} nu există sau nu poate fi citit de DN de legare.';
$string['diag_toooldversion'] = 'Este foarte puțin probabil ca un server LDAP modern să utilizeze protocolul LDAPv2. Setările greșite pot corupe valorile din câmpurile utilizatorului. Verificați cu administratorul LDAP.';
$string['didntfindexpiretime'] = 'funcția password_expire() nu a găsit timpul de expirare.';
$string['didntgetusersfromldap'] = 'Nu ați primit utilizatori de la LDAP - eroare? - ieșind';
$string['gotcountrecordsfromldap'] = 'Sunt {$a} înregistrări de la LDAP';
$string['invalidusererrors'] = 'Avertizare: S-a omis crearea conturilor utilizatorilor {$a}.';
$string['invaliduserexception'] = 'Eroare: Nu se poate crea contul noului utilizator. Detalii și motiv:
{$a}
Omiteți acest utilizator.';
$string['ldapnotconfigured'] = 'Adresa URL gazdă LDAP nu este configurată momentan';
$string['morethanoneuser'] = 'S-au găsit mai multe înregistrări de utilizator în LDAP. Se folosește doar primul.';
$string['needbcmath'] = 'Aveți nevoie de extensia BCMath pentru a utiliza verificarea parolei expirate cu Active Directory.';
$string['needmbstring'] = 'Aveți nevoie de extensia mbstring pentru a schimba parolele din Active Directory';
$string['nodnforusername'] = 'Eroare la user_update_password(). Fără DN pentru : {$a->username}';
$string['noemail'] = 'Nu s-a putut trimite email-ul!';
$string['notcalledfromserver'] = 'Nu trebuie apelat de pe serverul web!';
$string['noupdatestobedone'] = 'Nu sunt actualizări de făcut';
$string['nouserentriestoremove'] = 'Nu sunt postări ale utilizatorului pentru de eliminat';
$string['nouserentriestorevive'] = 'Nicio intrare de utilizator care nu va fi reînviată';
$string['nouserstobeadded'] = 'Nu sunt postări ale utilizatorului pentru de adăugat';
$string['ntlmsso_attempting'] = 'Se încearcă conectarea unică prin NTLM ...';
$string['ntlmsso_failed'] = 'Autentificarea nu a reușit, încercați pagina normală de autentificare ...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO este dezactivat.';
$string['ntlmsso_unknowntype'] = 'Tip ntlmsso necunoscut';
$string['pagedresultsnotsupp'] = 'Rezultatele paginate LDAP nu sunt acceptate (fie versiunea dvs. PHP nu are suport, ați configurat Moodle pentru a utiliza protocolul LDAP versiunea 2, fie Moodle nu poate contacta serverul LDAP pentru a vedea dacă este disponibil suport paginat).';
$string['pagesize'] = 'Asigurați-vă că această valoare este mai mică decât limita de dimensiune stabilită pentru rezultatul serverului LDAP (numărul maxim de intrări care pot fi returnate într-o singură interogare)';
$string['pagesize_key'] = 'Dimensiune pagină';
$string['pluginname'] = 'Server LDAP';
$string['pluginnotenabled'] = 'Plugin neactivat!';
$string['privacy:metadata'] = 'Pluginul de autentificare a serverului LDAP nu stochează date personale.';
$string['renamingnotallowed'] = 'Redenumirea utilizatorului nu este permisă în LDAP';
$string['rootdseerror'] = 'Eroare la interogarea rootDSE pentru Active Directory';
$string['start_tls'] = 'Utilizați un serviciu LDAP obișnuit (portul 389) cu criptare TLS';
$string['start_tls_key'] = 'Utilizați TLS';
$string['sync_updateuserchunk'] = 'Setați această valoare la numărul de utilizatori pe care doriți să îi actualizați per tranzacție. Setarea la 0 va actualiza toți utilizatorii într-o singură tranzacție.';
$string['sync_updateuserchunk_key'] = 'Numărul de utilizatori care vor fi actualizați în procesul de sincronizare';
$string['syncroles'] = 'Sincronizați rolurile de sistem din LDAP';
$string['synctask'] = 'Procesul de sincronizare utilizatori LDAP';
$string['systemrolemapping'] = 'Maparea rolurilor sistemului';
$string['updatepasserror'] = 'Eroare în user_update_password(). Cod de eroare: {$a->errno}; Șir de eroare: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Eroare în user_update_password() la citirea timpului de expirare a parolei. Cod de eroare: {$a->errno}; Șir de eroare: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Eroare în user_update_password() la modificarea timpului de expirare și / sau a autentificărilor de grație. Cod de eroare: {$a->errno}; Șir de eroare: {$a->errstring}';
$string['updateremfail'] = 'Eroare la actualizarea înregistrării LDAP. Cod de eroare: {$a->errno}; Șir de eroare: {$a->errstring} <br/> Cheie ({$a->cheie}) - valoare Moodle veche: \'{$a->ouvalue}\' valoare nouă: \'{$a->nuvalue}\'';
$string['updateremfailamb'] = 'Actualizarea LDAP nu a reușit cu câmpul ambiguu {$a->key}; valoare moodle veche: \'{$a->ouvalue}\', valoare nouă: \'{$a->nuvalue}\'';
$string['updateusernotfound'] = 'Nu s-a putut găsi utilizatorul în timpul actualizării externe. Urmează detaliile: baza de căutare: \'{$a->userdn}\'; filtru de căutare: \'(objectClass = *)\'; atribute de căutare: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() nu acceptă tipul de utilizator selectat: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() nu acceptă tipul de utilizator selectat: {$a}';
$string['useracctctrlerror'] = 'Eroare la obținerea userAccountControl pentru {$a}';
$string['userentriestoadd'] = 'Postări ale utilizatorului de adăugat: {$a}';
$string['userentriestoremove'] = 'Postări ale utilizatorului de eliminat: {$a}';
$string['userentriestorevive'] = 'Intrări de utilizator care vor fi reutilizate: {$a}';
$string['userentriestoupdate'] = 'Postări ale utilizatorului de actualizat: {$a}';
$string['usernotfound'] = 'Utilizatorul nu a fost găsit în LDAP';
