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
 * Strings for component 'auth', language 'ro', version '4.1'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Plugin-uri de autentificare disponibile';
$string['allowaccountssameemail'] = 'Acceptă conturi cu acelasi email';
$string['allowaccountssameemail_desc'] = 'Dacă este activată această opțiune, mai multe conturi de utilizator pot avea aceeași adresă de e-mail. Acest lucru poate duce la probleme de securitate sau de confidențialitate, de exemplu, e-mailul de confirmare a parolei schimbate.';
$string['alternatelogin'] = 'Dacă introduceţi aici un URL, el va fi folosit ca pagină de autentificare pentru acest site. Pagina ar trebui să conţină un formular care are proprietatea action setată pe <strong>\'{$a}\'</strong> şi să returneze câmpurile <strong>username</strong> şi <strong>password</strong>.<br />Aveţi grijă să nu introduceţi un URL incorect deoarece vă puteţi bloca accesul la site. <br />Lăsaţi acest câmp gol pentru a folosi pagina implicită de autentificare.';
$string['alternateloginurl'] = 'URL alternativ de autentificare';
$string['auth_changepasswordhelp'] = 'Instrucţiuni pentru schimbarea parolei';
$string['auth_changepasswordhelp_expl'] = 'Afişează instrucţiunile de recuperare a parolei utilizatorilor care şi-au uitat parola {$a}. Acestea vor fi afişate fie împreună cu, fie în locul <strong>URL schimbare parolă</strong> sau a paginii interne Moodle de schimbare a parolei.';
$string['auth_changepasswordurl'] = 'URL schimbare parolă';
$string['auth_changepasswordurl_expl'] = 'Specificaţi URL-ul către care vor fi direcţionaţi utilizatorii care şi-au uitat parola {$a}. Setaţi <strong>Utilizează pagina standard de schimbare a parolei</strong> pe <strong>Nu</strong>.';
$string['auth_changingemailaddress'] = 'Aţi solicitat schimbarea adresei de email, din {$a->oldemail} în {$a->newemail}. Din motive de securitate, vă trimitem un email la noua adresă pentru a ne asigura că sunteţi titularul acesteia. Noua adresă de email va fi actualizată imediat după ce veţi deschide URL-ul pe care vi-l trimitem în email.';
$string['auth_common_settings'] = 'Setări comune';
$string['auth_data_mapping'] = 'Mapare date';
$string['auth_fieldlock'] = 'Blochează valoare';
$string['auth_fieldlock_expl'] = '<p><b>Blochează valoare:</b> Dacă această setare este activată, utilizatorii nu vor putea edita acest câmp. Folosește această opţiune dacă realizezi operaţiunile de mentenanţă a acestor date din sistemul extern de autentificare. </p>';
$string['auth_fieldlockfield'] = 'Blochează valoarea ({$a})';
$string['auth_fieldlocks'] = 'Blochează câmpuri utilizator';
$string['auth_fieldlocks_help'] = '<p>Puteţi bloca câmpurile de date ale utilizator. care conţin informaţii despre utilizator. Acest lucru este folositor pentru siturile unde datele utilizatorilor sunt gestionate manual de către administratori sau sunt încărcate cu ajutorul funcţionalităţii "Încarcă utilizatori". Dacă blocaţi câmpuri obligatorii în Moodle, asiguraţi-vă că furnizaţi acele date atunci când creaţi conturi de utilizator, altfel acele conturi vor fi inutilizabile.</p><p>Puteţi seta modul de blocare pe \'Deblocat dacă e gol\' pentru a evita această problemă.</p>';
$string['auth_fieldmapping'] = 'Maparea datelor ({$a})';
$string['auth_invalidnewemailkey'] = 'Eroare: dacă încercaţi să confirmaţi o schimbare de adresă de email, este posibil să fi apărut o eroare la copierea URL-ului pe care vi l-am trimis prin email. Vă rugăm copiaţi adresa şi încercaţi din nou.';
$string['auth_multiplehosts'] = 'Se pot specifica mai multe host-uri SAU adrese (ex. host1.com;host2.com;host3.com) sau (ex. xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'Metoda de autentificare {$a} nu este configurată';
$string['auth_outofnewemailupdateattempts'] = 'Aţi depăşit numărul permis de încercări de actualizare a adresei de email. Cererea Dvs. de actualizare a fost anulată.';
$string['auth_passwordisexpired'] = 'Parola dumneavoastră a expirat. Vă rugăm să o schimbaţi acum.';
$string['auth_passwordwillexpire'] = 'Parola dumneavoastră va expira în {$a} zile. Doriţi să o schimbaţi acum?';
$string['auth_remove_delete'] = 'Şterge toţi utilizatorii interni';
$string['auth_remove_keep'] = 'Păstrează utilizatorii interni';
$string['auth_remove_suspend'] = 'Suspendă utilizatorii interni';
$string['auth_remove_user'] = 'Specificați ce să faceți cu contul de utilizator intern în timpul sincronizării în masă atunci când utilizatorul a fost eliminat din sursa externă. Numai utilizatorii suspendați sunt restabiliți automat dacă reapar în sursa externă.';
$string['auth_remove_user_key'] = 'Utilizator extern şters';
$string['auth_sync_script'] = 'Sincronizarea contului de utilizator';
$string['auth_sync_suspended'] = 'Dacă este activat, atributul suspendat va fi utilizat pentru a actualiza starea suspendării contului de utilizator local.';
$string['auth_sync_suspended_key'] = 'Sincronizează statusul suspendării utilizatorului local';
$string['auth_updatelocal'] = 'Actualizează local';
$string['auth_updatelocal_expl'] = '<p> <b> Actualizare locală: </b> Dacă este activat, câmpul va fi actualizat (de la autentificare externă) de fiecare dată când utilizatorul se conectează sau există o sincronizare a utilizatorului. Câmpurile setate pentru actualizare locală trebuie blocate. </p>';
$string['auth_updatelocalfield'] = 'Actualizați local ({$a})';
$string['auth_updateremote'] = 'Actualizează extern';
$string['auth_updateremote_expl'] = '<p><b>Actualizează extern:</b> Dacă această setare este activată, autentificarea externă se va actualiza atunci când contul de utilizator este actualizat. Câmpurile ar trebui deblocate pentru a permite editarea.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Note:</b> Actualizarea datelor LDAP externe necesită setarea parametrilor binddn şi bindpw pe un utilizator cu drepturi de editare pe toate conturile de utilizator. În acest moment, atributele multi-valoare nu sunt memorate, iar valorile suplimentare vor fi şterse la actualizare. </p>';
$string['auth_updateremotefield'] = 'Actualizați extern ({$a})';
$string['auth_user_create'] = 'Permite crearea de utilizatori';
$string['auth_user_creation'] = 'Utilizatorii noi (anonimi) pot crea conturi de utilizator pe sursa de autentificare externă, iar acestea pot fi confirmate prin email. Dacă această setare este activată, nu uitaţi să configuraţi opţiunile specifice fiecărui modul legate de crearea de utilizatori.';
$string['auth_usernameexists'] = 'Numele de utilizator ales există deja în sistem. Vă rugăm alegeţi alt nume de utilizator.';
$string['auth_usernotexist'] = 'Nu se poate actualiza utilizatorul neexistent: {$a}';
$string['authenticationoptions'] = 'Opţiuni autentificare';
$string['authinstructions'] = 'Lăsați acest spațiu necompletat pentru ca instrucțiunile implicite de conectare să fie afișate pe pagina de autentificare. Dacă doriți să furnizați instrucțiuni de conectare personalizate, introduceți-le aici.';
$string['authloginviaemail'] = 'Permite autentificarea via email';
$string['authloginviaemail_desc'] = 'Permite utilizatorilor să folosească atât numele de utilizator cât și adresa de email (dacă este unică) pentru a se loga pe site';
$string['auto_add_remote_users'] = 'Adaugă automat de utilizatori remote';
$string['cannotmapfield'] = 'Câmpul „{$a->fieldname}” nu poate fi mapat deoarece numele său scurt „{$a->shortname}” este prea lung. Pentru a permite maparea acestuia, trebuie să reduceți numele scurt la {$a->charlimit} caractere. <a href="{$a->link} "> Editați câmpurile profilului utilizatorului </a>';
$string['changepassword'] = 'URL schimbare parolă';
$string['changepasswordhelp'] = 'Adresa URL a paginii de recuperare a parolei pierdute, care va fi trimisă utilizatorilor printr-un e-mail. Rețineți că această setare nu va avea efect dacă o setare URL a parolei uitate este setată în setările comune de autentificare.';
$string['chooseauthmethod'] = 'Alegeţi o metodă de autentificare';
$string['chooseauthmethod_help'] = 'Această setare determină metoda de autentificare utilizată la conectarea utilizatorului. Ar trebui alese numai pluginurile de autentificare activate, altfel utilizatorul nu va mai putea să se conecteze. Pentru a bloca utilizatorul să nu se conecteze, selectați „Fără autentificare”.';
$string['createpassword'] = 'Generează parolă și anunță utilizatorul';
$string['createpasswordifneeded'] = 'Creați o parolă dacă este necesar și trimiteți-o prin e-mail';
$string['emailchangecancel'] = 'Anulează modificarea email-ului';
$string['emailchangepending'] = 'Modificarea este în așteptare. Deschide link-ul trimis la {$a->preference_newemail}.';
$string['emailnowexists'] = 'Adresa de e-mail pe care ați încercat să o atribuiți profilului dumnevoastră a fost atribuită altcuiva de când ați trimis cererea inițială. Cererea dumneavoastră de schimbare a adresei de e-mail este, așadar, anulată, dar puteți încerca din nou cu o altă adresă.';
$string['emailupdate'] = 'Actualizare adresă de email';
$string['emailupdatemessage'] = 'Stimate {$a->fullname},

Ați solicitat o modificare a adresei dvs. de e-mail pentru contul dvs. pe {$a->site}. Pentru a confirma această modificare, accesați următoarea adresă web:

{$a->url}

{$a->supportemail}';
$string['emailupdatesuccess'] = 'Adresa de e-mail a utilizatorului <em>{$a->fullname}</em> a fost schimbată cu succes în <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Confirmarea actualizării email-ului pe {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'Parola trebuie să aibă cel mult {$a} caractere identice consecutive.';
$string['errorminpassworddigits'] = 'Parola trebuie să conţină cel puţin {$a} cifre.';
$string['errorminpasswordlength'] = 'Parola trebuie să aibă o lungime de cel puţin {$a} caractere.';
$string['errorminpasswordlower'] = 'Parola trebuie să conţină cel puţin {$a} litere mici.';
$string['errorminpasswordnonalphanum'] = 'Parola trebuie să aibă cel puțin {$a} caractere speciale, cum ar fi *, - sau #.';
$string['errorminpasswordupper'] = 'Parola trebuie să conţină cel puţin {$a} majuscule.';
$string['errorpasswordreused'] = 'Această parolă a mai fost folosită înainte, nu este permis a fi reutilizată.';
$string['errorpasswordupdate'] = 'Eroare la actualizarea parolei, parola nu a fost schimbată.';
$string['eventuserloggedin'] = 'Utilizatorul s-a conectat';
$string['eventuserloggedinas'] = 'Utilizator logat cu contul altui utilizator';
$string['eventuserloginfailed'] = 'Logare utilizator nereușită';
$string['forcechangepassword'] = 'Obligă schimbarea parolei';
$string['forcechangepassword_help'] = 'Obligă utilizatorii să-şi schimbe parola la următoarea autentificare în Moodle.';
$string['forcechangepasswordfirst_help'] = 'Obligă utilizatorii să-şi schimbe parola la prima autentificare în Moodle.';
$string['forgottenpassword'] = 'Dacă introduceţi un URL în acest câmp, el va fi folosit ca pagină de recuperare a parolei pentru acest site. Această funcţionalitate se foloseşte pentru site-urile în care parolele sunt gestionate în întregime în afara Moodle. Lăsaţi acest câmp gol pentru a folosi recuperarea implicită de parolă.';
$string['forgottenpasswordurl'] = 'URL parolă uitată';
$string['getrecaptchaapi'] = 'Pentru a utiliza reCAPTCHA trebuie să obțineți o cheie API de la <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Buton autentificare vizitator';
$string['incorrectpleasetryagain'] = 'Incorect. Vă rugăm încercaţi din nou.';
$string['infilefield'] = 'Câmp obligatoriu în fişier';
$string['informminpassworddigits'] = 'cel puţin {$a} cifre';
$string['informminpasswordlength'] = 'cel puţin {$a} caractere';
$string['informminpasswordlower'] = 'cel puţin {$a} litere mici';
$string['informminpasswordnonalphanum'] = 'cel puțin {$a} caracter(e) special(e), cum ar fi *, -, sau #';
$string['informminpasswordreuselimit'] = 'Parolele pot fi refolosite după  {$a} schimbări';
$string['informminpasswordupper'] = 'cel puţin {$a} majuscule';
$string['informpasswordpolicy'] = 'Parola trebuie să conţină {$a}';
$string['instructions'] = 'Instrucţiuni';
$string['internal'] = 'Intern';
$string['limitconcurrentlogins'] = 'Limita logărilor simultane';
$string['limitconcurrentlogins_desc'] = 'Dacă este activată această opțiune, numărul de logări simultane pe browser pentru fiecare utilizator este restricționat. Cea mai veche sesiune se încheie după atingerea limitei, vă rugăm să rețineți că utilizatorii pot pierde toate activitățile care nu au fost salvate. Această setare nu este compatibilă cu plugin-uri unice de autentificare (SSO).';
$string['locked'] = 'Blocat';
$string['md5'] = 'Hash MD5';
$string['nopasswordchange'] = 'Parola nu poate fi schimbată.';
$string['nopasswordchangeforced'] = 'Nu puteţi trece mai departe fără să vă schimbaţi parola, însă nu există nicio pagină în care să realizaţi această operaţiune. Vă rugăm contactaţi un administrator Moodle.';
$string['noprofileedit'] = 'Profilul nu poate fi editat';
$string['ntlmsso_attempting'] = 'Se încearcă Single Sign On via NTLM...';
$string['ntlmsso_failed'] = 'Autentificarea automată a eşuat, încercaţi pagina de autentificare normală...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO este dezactivat';
$string['passwordhandling'] = 'Gestionarea câmpului Parolă';
$string['plaintext'] = 'Text neformatat';
$string['pluginnotenabled'] = 'Plugin-ul de autentificare \'{$a}\' nu este activat';
$string['pluginnotinstalled'] = 'Plugin-ul de autentificare \'{$a}\' nu este instalat';
$string['potentialidps'] = 'Autentificare folosind contul dvs. din platforma:';
$string['privacy:metadata:userpref:createpassword'] = 'Indică faptul că o parolă ar trebui să fie generată pentru utilizator';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Indică dacă utilizatorul ar trebui să își schimbe parola la autentificare';
$string['privacy:metadata:userpref:loginfailedcount'] = 'De câte ori utilizatorul nu a reușit să se autentifice';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'De câte ori utilizatorul nu a reușit să se autentifice de la ultima autentificare';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Data când s-a înregistrat ultima autentificare nereușită înregistrată';
$string['privacy:metadata:userpref:loginlockout'] = 'Dacă contul utilizatorului este blocat din cauza încercărilor eșuate de conectare și data la care contul a fost blocat';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Indică faptul că un cont de utilizator nu ar trebui să fie niciodată supus blocării';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Când este blocat, cheia secretă pe care utilizatorul trebuie să o folosească pentru deblocarea contului său';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA este pentru prevenirea abuzului din programele automate. Urmați instrucțiunile pentru a verifica dacă sunteți o persoană. Aceasta ar putea fi o casetă de bifat, caractere prezentate într-o imagine pe care trebuie să o introduceți sau un set de imagini din care să selectați.

Dacă nu sunteți sigur care sunt imaginile, puteți încerca să obțineți un alt CAPTCHA sau un CAPTCHA audio.';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'Întrebare de securitate';
$string['selfregistration'] = 'Auto-înregistrare';
$string['selfregistration_help'] = 'Dacă se selectează un plugin de autentificare, cum ar fi auto-înregistrarea bazată pe email, potenţialii utilizatori se pot înregistra singuri şi îşi pot crea conturi. Astfel, este posibil ca spammerii să îşi creeze conturi pentru a trimite spam pe postări de forum, articole de blog etc. Pentru a evita acest risc, auto-înregistrare ar trebui dezactivată sau limitată de setarea <em>Domenii email permise</em>.';
$string['settingmigrationmismatch'] = 'Valori nepotrivite detectate în timp ce corectați numele setărilor pluginului! Pluginul de autentificare „{$a->plugin}” avea setarea „{$a->setare}” configurată la „{$a->legacy}” sub numele vechi și la „{$a->current}” sub numele actual. Ultima valoare a fost setată ca fiind valabilă, dar ar trebui să verificați și să confirmați că este de așteptat.';
$string['sha1'] = 'Hash SHA-1';
$string['showguestlogin'] = 'Puteţi ascunde sau afişa butonul de autentificare vizitator pe pagina de autentificare.';
$string['stdchangepassword'] = 'Foloseşte pagina standard pentru schimbarea parolei';
$string['stdchangepassword_expl'] = 'În cazul în care sistemul extern de autentificare permite schimbarea parolei prin Moodle, comutaţi pe "Da". Această setare va avea prioritate faţă de setarea "URL schimbare parolă"';
$string['stdchangepassword_explldap'] = 'NOTĂ: în cazul în care serverul LDAP este remote, se recomandă utilizarea LDAP printr-un tunel SSL criptat (ldaps://).';
$string['suspended'] = 'Cont suspendat';
$string['suspended_help'] = 'Conturile de utilizator suspendate nu se pot conecta și nu pot folosi servicii web, orice alte mesaje trimise sunt șterse.';
$string['testsettings'] = 'Setări test';
$string['testsettingsheading'] = 'Setări autentificare test - {$a}';
$string['unlocked'] = 'Deblocat';
$string['unlockedifempty'] = 'Deblocat dacă gol';
$string['update_never'] = 'Niciodată';
$string['update_oncreate'] = 'La creare';
$string['update_onlogin'] = 'La fiecare autentificare';
$string['update_onupdate'] = 'La actualizare';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() nu suportă tipul de utilizator selectat: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() nu suportă tipul de utilizator selectat (..încă)';
$string['username'] = 'Nume de utilizator';
$string['username_help'] = 'Vă rugăm să rețineți că unele plugin-uri de autentificare nu vă vor permite să schimbați numele de utilizator.';
