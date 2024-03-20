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
 * Strings for component 'tool_messageinbound', language 'ro', version '4.1'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Numele clasei';
$string['component'] = 'Componenta';
$string['configmessageinboundhost'] = 'Adresa serverului cu care Moodle ar trebui să verifice e-mailurile. Pentru a specifica un port non-implicit, utilizați [server]: [port], de exemplu mail.example.com:993. Dacă nu este specificat un port, va fi utilizat portul implicit pentru tipul de server de mail.';
$string['defaultexpiration'] = 'Perioada de expirare a adresei prestabilite';
$string['defaultexpiration_help'] = 'Când o adresă de e-mail este generată de gestionar, aceasta poate fi setată să expire automat după o perioadă de timp, astfel încât să nu mai poată fi utilizată. Este recomandabil să stabiliți o perioadă de expirare.';
$string['description'] = 'Descriere';
$string['domain'] = 'Domeniul adresei de e-mail';
$string['edit'] = 'Editați';
$string['edithandler'] = 'Editați setările pentru gestionarul {$a}';
$string['editinghandler'] = 'Se editează {$a}';
$string['enabled'] = 'Activat';
$string['fixedenabled_help'] = 'Nu puteți schimba starea acestui gestionar. Acest lucru se poate datora faptului că gestionarul este solicitat de alți gestionari.';
$string['fixedvalidateaddress'] = 'Validează adresa expeditorului';
$string['fixedvalidateaddress_help'] = 'Nu puteți modifica validarea adresei pentru acest gestionar. Acest lucru se poate datora faptului că gestionarul necesită o setare specifică.';
$string['handlerdisabled'] = 'Gestionarul de e-mail pe care ați încercat să îl contactați a fost dezactivat. Momentul nu poate fi procesat.';
$string['incomingmailconfiguration'] = 'Configurare primire e-mail';
$string['incomingmailserversettings'] = 'Configurarea server de email';
$string['incomingmailserversettings_desc'] = 'Moodle este capabil să se conecteze la servere IMAP configurate corespunzător. Aici puteți specifica setările utilizate pentru conectarea la serverul dvs. IMAP.';
$string['invalid_recipient_handler'] = 'Dacă se primește un mesaj valid, dar expeditorul nu poate fi autentificat, mesajul este stocat pe serverul de e-mail și utilizatorul este contactat folosind adresa de e-mail din profilul său de utilizator. Utilizatorul are ocazia să răspundă pentru a confirma autenticitatea mesajului original.

Acest gestionar procesează aceste răspunsuri.

Nu este posibil să dezactivați verificarea expeditorului acestui manipulator, deoarece utilizatorul poate răspunde de la o adresă de e-mail incorectă dacă configurația clientului de e-mail este incorectă.';
$string['invalid_recipient_handler_name'] = 'Gestionarul expeditor nu este valid';
$string['invalidrecipientdescription'] = 'Mesajul „{$a->subject}” nu a putut fi autentificat, deoarece a fost trimis de la o altă adresă de e-mail decât în profilul dvs. de utilizator. Pentru ca mesajul să fie autentificat, trebuie să răspundeți la acest mesaj.';
$string['invalidrecipientdescriptionhtml'] = 'Mesajul „{$a->subject}” nu a putut fi autentificat, deoarece a fost trimis de la o altă adresă de e-mail decât în profilul dvs. de utilizator. Pentru ca mesajul să fie autentificat, trebuie să răspundeți la acest mesaj.';
$string['invalidrecipientfinal'] = 'Mesajul „{$a->subject}” nu a putut fi autentificat. Vă rugăm să verificați dacă trimiteți mesajul dvs. de la aceeași adresă de e-mail ca în profilul dvs.';
$string['mailbox'] = 'Denumirea cutiei poștale';
$string['mailboxconfiguration'] = 'Configurare cutie poștală';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'Setări de e-mail';
$string['message_handlers'] = 'Gestionari de mesaje';
$string['messageinbound'] = 'Mesaj Inbound';
$string['messageinboundenabled'] = 'Activați procesarea mesajelor primite';
$string['messageinboundenabled_desc'] = 'Procesarea mesajelor primite trebuie să fie activată pentru ca mesajele să fie trimise cu informațiile corespunzătoare.';
$string['messageinboundgeneralconfiguration'] = 'Configurare generală';
$string['messageinboundgeneralconfiguration_desc'] = 'Prelucrarea mesajelor de intrare vă permite să primiți și să procesați e-mailuri în cadrul Moodle. Aceasta are aplicații precum trimiterea de răspunsuri prin e-mail la postările de pe forum sau adăugarea de fișiere în fișierele private ale unui utilizator.';
$string['messageinboundhost'] = 'Server de mail pentru primirea mesajelor';
$string['messageinboundhostoauth_help'] = 'Serviciul OAuth 2 folosit pentru a accesa serverul IMAP folosind autentificarea XOAUTH2. Dacă serviciul nu există încă, va trebui să îl creezi.';
$string['messageinboundhostpass'] = 'Parola';
$string['messageinboundhostpass_desc'] = 'Aceasta este parola pe care furnizorul dvs. de servicii o va furniza pentru a vă conecta la contul dvs. de e-mail.';
$string['messageinboundhostssl'] = 'Folosiți SSL';
$string['messageinboundhostssl_desc'] = 'Unele servere de e-mail acceptă un nivel suplimentar de securitate prin criptarea comunicării dintre Moodle și serverul dvs. Vă recomandăm să utilizați această criptare SSL dacă serverul dvs. acceptă';
$string['messageinboundhosttype'] = 'Tipul serverului';
$string['messageinboundhostuser'] = 'Nume de utilizator';
$string['messageinboundhostuser_desc'] = 'Acesta este numele de utilizator pe care îl va furniza furnizorul dvs. de servicii pentru a vă conecta la contul dvs. de e-mail.';
$string['messageinboundmailboxconfiguration_desc'] = 'Când mesajele sunt trimise, acestea se încadrează în formatul adresa + date@example.com. Pentru a genera în mod fiabil adrese de la Moodle, vă rugăm să specificați adresa pe care ați utiliza-o în mod normal înainte de semnul @ și domeniul după semnul @ separat. De exemplu, numele cutiei poștale din exemplu ar fi „adresa”, iar domeniul de poștă electronică ar fi „exemplu.com”. În acest scop, ar trebui să utilizați un cont de e-mail dedicat.';
$string['messageprocessingerror'] = 'Ați trimis recent un e-mail „{$a->subject}”, dar din păcate nu a putut fi procesat.

Detaliile erorii sunt prezentate mai jos.

{$a->eroare}';
$string['messageprocessingerrorhtml'] = '<p> Ați trimis recent un e-mail „{$a->subject}”, dar, din păcate, nu a putut fi procesat. </p>
<p> Detaliile erorii sunt prezentate mai jos. </p>
<p> {$a->eroare} </p>';
$string['messageprocessingfailed'] = 'E-mailul „{$a->subject}” nu a putut fi procesat. Eroarea este următoarea: „{$a->message}”.';
$string['messageprocessingfailedunknown'] = 'E-mailul „{$a->subject}” nu a putut fi procesat. Contactați administratorul pentru informații suplimentare.';
$string['messageprocessingsuccess'] = '{$a->simplu}

Dacă nu doriți să primiți aceste notificări în viitor, puteți edita preferințele personale de mesagerie deschizând {$a->messagepreferencesurl} în browser.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p> Dacă nu doriți să primiți aceste notificări în viitor, puteți <a href="{$a->messagepreferencesurl}"> modificați preferințele dvs. personale de mesagerie </a>. </p>';
$string['messageprovider:invalidrecipienthandler'] = 'Mesaj pentru confirmarea faptului că a venit un mesaj primit de la dvs.';
$string['messageprovider:messageprocessingerror'] = 'Avertisment atunci când un mesaj de intrare nu a putut fi procesat';
$string['messageprovider:messageprocessingsuccess'] = 'Confirmarea faptului că un mesaj a fost procesat cu succes';
$string['name'] = 'Nume';
$string['noencryption'] = 'Off - Fără criptare';
$string['noexpiry'] = 'Fără expirare';
$string['oldmessagenotfound'] = 'Ați încercat să autentificați manual un mesaj, dar mesajul nu a putut fi găsit. Acest lucru se poate datora faptului că a fost deja procesat sau pentru că mesajul a expirat.';
$string['oneday'] = 'O zi';
$string['onehour'] = 'O oră';
$string['oneweek'] = 'O săptămână';
$string['oneyear'] = 'Un an';
$string['pluginname'] = 'Configurarea mesajului de intrare';
$string['privacy:metadata:coreuserkey'] = 'Cheile utilizatorului pentru validarea e-mailului primit';
$string['privacy:metadata:messagelist'] = 'O listă de identificatori de mesaje care nu au validat și necesită o autorizare suplimentară';
$string['privacy:metadata:messagelist:address'] = 'Adresa la care a fost trimis e-mailul';
$string['privacy:metadata:messagelist:messageid'] = 'Identificatorul mesajului';
$string['privacy:metadata:messagelist:timecreated'] = 'Ora când s-a făcut înregistrarea';
$string['privacy:metadata:messagelist:userid'] = 'Identificatorul utilizatorului care trebuie să aprobe mesajul';
$string['replysubjectprefix'] = 'Răspuns:';
$string['requirevalidation'] = 'Validați adresa expeditorului';
$string['ssl'] = 'SSL (detectarea automată a versiunii SSL)';
$string['sslv2'] = 'SSLv2 (Forțează SSL versiunea 2)';
$string['sslv3'] = 'SSLv3 (Forțează SSL versiunea 3)';
$string['taskcleanup'] = 'Eliminarea e-mailurilor primite dar neconfirmate';
$string['taskpickup'] = 'Preluarea e-mailurilor primite';
$string['tls'] = 'TLS (TLS; pornit prin negociere la nivel de protocol pe canal necriptat; Mod RECOMANDAT de inițiere a conexiunii securizate)';
$string['tlsv1'] = 'TLSv1 (conexiune directă la serverul TLS versiunea 1.x)';
$string['validateaddress'] = 'Validați adresa de e-mail a expeditorului';
$string['validateaddress_help'] = 'Când se primește un mesaj de la un utilizator, Moodle încearcă să valideze mesajul comparând adresa de e-mail a expeditorului cu adresa de e-mail din profilul de utilizator.

Dacă expeditorul nu se potrivește, atunci utilizatorul primește o notificare pentru a confirma că a trimis într-adevăr e-mailul.

Dacă această setare este dezactivată, atunci adresa de e-mail a expeditorului nu este deloc verificată.';
