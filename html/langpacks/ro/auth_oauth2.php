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
 * Strings for component 'auth_oauth2', language 'ro', version '4.4'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'În platformă există deja un cont cu acest nume de utilizator. Dacă acesta este contul dumneavoastră, conectați-vă introducând numele de utilizator și parola și adăugați-le ca login conectat prin intermediul paginii de preferințe.';
$string['alreadylinked'] = 'Acest cont extern este deja conectat la un cont de pe acest site';
$string['auth_oauth2description'] = 'Autentificarea bazată pe standardele OAuth 2';
$string['auth_oauth2settings'] = 'Setări de autentificare OAuth 2.';
$string['confirmaccountemail'] = 'Bună ziua {$a->fullname},

Un cont nou a fost solicitat la „{$a->sitename}”
folosind adresa de e-mail.

Pentru a vă confirma noul cont, accesați această adresă web:

{$a->link}

În majoritatea programelor de e-mail, aceasta ar trebui să apară ca o legătură albastră
pe care puteți doar să faceți clic. Dacă asta nu funcționează,
apoi tăiați și lipiți adresa în adresă
linie în partea de sus a ferestrei browserului web.

Dacă aveți nevoie de ajutor, vă rugăm să contactați administratorul site-ului,
{$a->admin}

Dacă nu ați făcut acest lucru, altcineva ar putea încerca să vă compromită contul.
Vă rugăm să contactați imediat administratorul site-ului.';
$string['confirmaccountemailsubject'] = '{$a}: confirmarea contului';
$string['confirmationinvalid'] = 'Linkul de confirmare este fie invalid, fie a expirat. Vă rugăm să începeți din nou procesul de conectare pentru a genera un nou e-mail de confirmare.';
$string['confirmationpending'] = 'Acest cont este în așteptarea confirmării prin e-mail.';
$string['confirmlinkedloginemail'] = 'Bună ziua {$a->fullname},

A fost făcută o solicitare pentru a conecta datele de conectare {$a->issuername}
{$a->linkedemail} în contul dvs. la „{$a->sitename}”
folosind adresa de e-mail.

Pentru a confirma această solicitare și a conecta aceste date de conectare, vă rugăm să accesați această adresă web:

{$a->link}

În majoritatea programelor de e-mail, aceasta ar trebui să apară ca o legătură albastră
pe care puteți doar să faceți clic. Dacă asta nu funcționează,
apoi tăiați și lipiți adresa în adresă
linie în partea de sus a ferestrei browserului web.

Dacă aveți nevoie de ajutor, vă rugăm să contactați administratorul site-ului,
{$a->admin}

Dacă nu ați făcut acest lucru, altcineva ar putea încerca să vă compromită contul.
Vă rugăm să contactați imediat administratorul site-ului.';
$string['confirmlinkedloginemailsubject'] = '{$a}: confirmare conectare';
$string['createaccountswarning'] = 'Acest plugin de autentificare permite utilizatorilor să creeze conturi pe site-ul dvs. Poate doriți să activați setarea „authpreventaccountcreation” dacă utilizați acest plugin.';
$string['createnewlinkedlogin'] = 'Conectați un cont nou ({$a})';
$string['emailconfirmlink'] = 'Conectați-vă conturile';
$string['emailconfirmlinksent'] = '<p> S-a găsit un cont existent cu această adresă de e-mail, dar nu este conectat încă. </p>
    <p> Conturile trebuie să fie conectate înainte de a vă putea conecta. </p>
    <p> Un e-mail ar fi trebuit trimis la adresa dvs. la <b> {$a} </b>. </p>
    <p> Conține instrucțiuni ușoare pentru conectarea conturilor dvs. </p>
    <p> Dacă aveți probleme, contactați administratorul site-ului. </p>';
$string['emailpasswordchangeinfo'] = 'Bună {$a->prenume},

Cineva (probabil dvs.) a solicitat o nouă parolă pentru contul dvs. pe „{$a->sitename}”.

Cu toate acestea, parola dvs. nu poate fi resetată, deoarece vă utilizați contul pe un alt site pentru a vă conecta.

Vă rugăm să vă conectați ca înainte, folosind linkul de pe pagina de autentificare.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: Informaţii despre schimbarea parolei';
$string['info'] = 'Cont extern';
$string['issuer'] = 'Serviciul OAuth 2';
$string['issuernologin'] = 'Acest emitent nu poate fi utilizat pentru autentificare';
$string['key'] = 'Cheie';
$string['linkedlogins'] = 'Tipuri de autentificări conectate';
$string['linkedloginshelp'] = 'Ajutor pentru tipuri de autentificări conectate';
$string['loggedin'] = 'Utilizator autentificat cu succes cu furnizorul de autentificare.';
$string['loginerror_authenticationfailed'] = 'Procesul de autentificare a eșuat.';
$string['loginerror_cannotcreateaccounts'] = 'Nu a putut fi găsit un cont cu adresa dvs. de e-mail';
$string['loginerror_invaliddomain'] = 'Adresa de e-mail nu este permisă pe acest site.';
$string['loginerror_nouserinfo'] = 'Nu au fost returnate informații despre utilizator. Serviciul OAuth 2 se poate să fie configurat incorect.';
$string['loginerror_userincomplete'] = 'Informațiile utilizatorului returnate nu conțin un nume de utilizator și o adresă de e-mail. Serviciul OAuth 2 se poate să fie configurat incorect.';
$string['noconfiguredidps'] = 'Nu a fost configurată nicio autentificare de tipul OAuth2.';
$string['noissuersavailable'] = 'Niciunul dintre serviciile OAuth2 configurate nu vă permite să conectați conturi de autentificare.';
$string['notenabled'] = 'Ne pare rău, pluginul de autentificare OAuth 2 nu este activat';
$string['notloggedindebug'] = 'Încercarea de autentificare a eșuat. Motivul: {$a}';
$string['notwhileloggedinas'] = 'Tipurile de autentificare conectate nu pot fi gestionate în timp ce sunteți conectat ca alt utilizator.';
$string['oauth2:managelinkedlogins'] = 'Gestionați propriile conturi de autentificări conectate';
$string['plugindescription'] = 'Acest plugin de autentificare afișează o listă a furnizorilor de identitate configurați pe pagina de autentificare. Selectarea unui furnizor de identitate permite utilizatorilor să se conecteze cu datele lor de acces de la un furnizor OAuth 2.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'Autentificare OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Plugin-ul este conectat cu subsistemele de autentificare.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'Token de confirmare.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'Marcajul de timp când expiră token-ul de confirmare.';
$string['privacy:metadata:auth_oauth2:email'] = 'E-mailul extern care se indică la acest cont.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'ID-ul emitentului OAuth 2 pentru această conectare OAuth 2';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'OAuth 2 conturi conectate la contul Moodle al unui utilizator.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Marcajul de timp când contul de utilizator a fost conectat la datele de conectare OAuth 2.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'Marcajul de timp când a fost modificată această înregistrare.';
$string['privacy:metadata:auth_oauth2:userid'] = 'Identificatorul contului de utilizator la care sunt conectate datele de autentificare OAuth 2.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'Identificatorul utilizatorului care a modificat acest cont.';
$string['privacy:metadata:auth_oauth2:username'] = 'Numele de utilizator extern care se conectează la acest cont.';
$string['testidplogin'] = 'Testați autentificarea cu:';
$string['userinfo'] = 'Datele utilizatorului de la furnizor:';
$string['value'] = 'Valoare';
