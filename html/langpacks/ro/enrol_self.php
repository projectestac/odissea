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
 * Strings for component 'enrol_self', language 'ro', version '4.5'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Înscrierea este dezactivată sau inactivă';
$string['canntenrolearly'] = 'Nu vă puteți înscrie încă; înscrierea începe pe {$a}.';
$string['canntenrollate'] = 'Nu vă mai puteți înscrie, deoarece înscrierea s-a încheiat pe {$a}.';
$string['cohortnonmemberinfo'] = 'Numai membrii cohortei \'{$a}\' se pot auto-înscrie.';
$string['cohortonly'] = 'Numai membrii cohortei';
$string['cohortonly_help'] = 'Înscrierea personală poate fi limitată numai la membrii unei cohorte specificate. Rețineți că modificarea acestei setări nu are niciun efect asupra înscrierilor existente.';
$string['confirmbulkdeleteenrolment'] = 'Sigur doriți să ștergeți aceste înregistrări ale utilizatorilor?';
$string['customwelcomemessage'] = 'Mesaj de bun venit personalizat';
$string['customwelcomemessage_help'] = 'Formate acceptate: text simplu sau format Moodle-auto. Sunt acceptate, de asemenea, etichetele HTML și etichetele în mai multe limbi, precum și următorii substituenți:
<ul>
<li>Numele cursului {$a->coursename}</li>
<li>Link către pagina de profil a utilizatorului {$a->profileurl}</li>
<li>E-mailul utilizatorului {$a->email}</li>
<li>Nume complet al utilizatorului {$a->fullname}</li>
<li>Prenume utilizator {$a->firstname}</li>
<li>Numele utilizatorului {$a->lastname}</li>
<li>Rolul cursului utilizator {$a->courserole}</li>
</ul>';
$string['defaultrole'] = 'Atribuire implicită a rolului';
$string['defaultrole_desc'] = 'Selectați rolul care ar trebui să fie atribuit utilizatorilor în timpul autoînscrierii';
$string['deleteselectedusers'] = 'Ștergeți înregistrările utilizatorilor selectați';
$string['editselectedusers'] = 'Editați înscrierile utilizatorilor selectați';
$string['enrolenddate'] = 'Data de încheiere';
$string['enrolenddate_help'] = 'Dacă este activată, utilizatorii se pot înscrie singuri până la această dată.';
$string['enrolenddaterror'] = 'Data de încheiere a înscrierii nu poate fi anterioară datei de începere';
$string['enrolme'] = 'Înscrie-mă';
$string['enrolperiod'] = 'Durata înscrierii';
$string['enrolperiod_desc'] = 'Durata implicită de validare a înscrierii. Dacă este setată la zero, durata înscrierii va fi nelimitată în mod implicit.';
$string['enrolperiod_help'] = 'Durata de valabilitate a înscrierii, începând cu momentul în care utilizatorul se înscrie. Dacă este dezactivată, durata înscrierii va fi nelimitată.';
$string['enrolstartdate'] = 'Data de început';
$string['enrolstartdate_help'] = 'Dacă este activată, utilizatorii se pot înscrie singuri începând cu această dată.';
$string['expiredaction'] = 'Acțiune de expirare a înscrierii';
$string['expiredaction_help'] = 'Selectați acțiunea de efectuat la expirarea înscrierii utilizatorului. Vă rugăm să rețineți că unele date și setări ale utilizatorilor sunt eliminate din curs în timpul anulării cursului.';
$string['expiryinactivemessageenrolledbody'] = 'Bună {$a->user},

Înscrierea ta în cursul {$a->course} expiră în {$a->timeend} deoarece nu ai accesat cursul în ultimele {$a->inactivetime} zile.

Pentru a fi în continuare înregistrat, loghează-te și accesează <a href="{$a->url}">{$a->course}</a> înainte de {$a->timeend}.';
$string['expiryinactivemessageenrolledsubject'] = 'Înscrierea ta expiră: {$a->course}';
$string['expirymessageenrolledbody'] = 'Stimate {$a->user},

Aceasta este o notificare că înscrierea dvs. la cursul \'{$a->curs}\' urmează să expire pe {$a->timeend}.

Dacă aveți nevoie de ajutor, vă rugăm să contactați {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificare expirare autoînscriere';
$string['expirymessageenrollerbody'] = 'Autoînscrierea la cursul \'{$a->course}\' va expira în următorul {$a->threshold} pentru următorii utilizatori:

{$a->users}

Pentru a extinde înscrierea, accesați {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificare expirare autoînscriere';
$string['expirynotifyall'] = 'Înscriere și utilizator înscris';
$string['expirynotifyenroller'] = 'Doar înscriere';
$string['groupkey'] = 'Utilizați cheile de înscriere în grup';
$string['groupkey_desc'] = 'Utilizați în mod implicit cheile de înregistrare de grup.';
$string['groupkey_help'] = 'Pe lângă restricționarea accesului la curs doar la cei care cunosc cheia, utilizarea cheilor de înscriere în grup înseamnă că utilizatorii sunt adăugați automat la grupuri, atunci când se înscriu la curs.

Notă: O cheie de înscriere pentru curs trebuie specificată în setările de autoînscriere, precum și chei de înscriere de grup în setările de grup.';
$string['keyholder'] = 'Ar fi trebuit să primiți această cheie de înscriere de la:';
$string['longtimenosee'] = 'Anularea înscrierii este inactivă după';
$string['longtimenosee_help'] = 'Dacă utilizatorii nu au accesat un curs pentru o lungă perioadă de timp, atunci înscrierea lor va fi anulată automat. Acest parametru specifică acea limită de timp.';
$string['maxenrolled'] = 'Max utilizatori înscriși';
$string['maxenrolled_help'] = 'Specifică numărul maxim de utilizatori care se pot înscrie automat. 0 înseamnă "fără limită".';
$string['maxenrolledreached'] = 'Numărul maxim de utilizatori autorizați să se înscrie automat a fost deja atins.';
$string['messageprovider:expiry_notification'] = 'Notificări de expirare a autoînscrierii';
$string['newenrols'] = 'Permite auto-înscrieri noi';
$string['newenrols_desc'] = 'Permiteți utilizatorilor să se înscrie automat la cursuri noi în mod prestabilit.';
$string['newenrols_help'] = 'Această setare determină dacă un utilizator se poate înscrie la acest curs.';
$string['nopassword'] = 'Nu este necesară nicio cheie de înscriere.';
$string['password'] = 'Cheie de înscriere';
$string['password_help'] = 'O cheie de înscriere permite ca accesul la curs să fie limitat doar la cei care cunosc cheia.

Dacă câmpul este lăsat necompletat, orice utilizator se poate înscrie la curs.

Dacă este specificată o cheie de înscriere, orice utilizator care încearcă să se înscrie la curs va fi obligat să furnizeze cheia. Rețineți că un utilizator trebuie să furnizeze o singură dată cheia de înscriere, atunci când se înscrie la curs.';
$string['passwordinvalid'] = 'Cheie de înscriere incorectă, încercați din nou';
$string['passwordinvalidhint'] = 'Cheia de înscriere a fost incorectă, încercați din nou <br />
(Iată un indiciu - începe cu \'{$a}\')';
$string['passwordmatchesgroupkey'] = 'Cheia de înregistrare este deja folosită ca și cheie de înregistrare a unui grup existent';
$string['pluginname'] = 'Autoînscriere';
$string['pluginname_desc'] = 'Plugin-ul de autoînscriere permite utilizatorilor să aleagă la ce cursuri doresc să participe. Cursurile pot fi protejate de o cheie de înscriere. Înscrierea internă se face prin intermediul plugin-ului de înscriere manual care trebuie activat în același curs.';
$string['privacy:metadata'] = 'Plugin-ul de autoînscriere nu stochează date personale.';
$string['requirepassword'] = 'Solicitați cheia de înscriere';
$string['requirepassword_desc'] = 'Solicitați cheia de înscriere la cursuri noi și împiedicați eliminarea cheii de înscriere din cursurile existente.';
$string['role'] = 'Rolul atribuit implicit';
$string['self:config'] = 'Configurați instanțele de autoînscriere';
$string['self:enrolself'] = 'Auto-înscriere la curs';
$string['self:holdkey'] = 'Apare ca titular al cheii de autoînscriere';
$string['self:manage'] = 'Gestionați utilizatorii înscriși';
$string['self:unenrol'] = 'Anulați înscrierea utilizatorilor la curs';
$string['self:unenrolself'] = 'Anulați înscrierea dumneavoastră la curs';
$string['sendcoursewelcomemessage'] = 'Trimiteți mesajul de bun venit la curs';
$string['sendcoursewelcomemessage_help'] = 'Când un utilizator se înscrie în curs, i se poate trimite un mesaj de bun venit prin e-mail. Dacă este trimis de contactul cursului (implicit profesorul) și mai mulți utilizatori au acest rol, e-mailul va fi trimis de primul utilizator căruia i se atribuie rolul.';
$string['sendexpirynotificationstask'] = 'Înscrierea automată trimite sarcina notificărilor de expirare';
$string['showhint'] = 'Arata indiciul';
$string['showhint_desc'] = 'Afișați prima literă a cheii de acces pentru invitați.';
$string['status'] = 'Păstrează auto-înscrierile existente active';
$string['status_desc'] = 'Activați metoda de autoînscriere la cursuri noi.';
$string['status_help'] = 'Dacă se setează Nu, participanții existenți care s-au înscris la curs nu vor mai avea acces.';
$string['syncenrolmentstask'] = 'Sincronizarea sarcinii de autoînscrieri';
$string['unenrol'] = 'Anulați înregistrarea utilizatorului';
$string['unenrolselfconfirm'] = 'Vreți cu adevărat să anulați înscrierea la curs? "{$a}"?';
$string['unenroluser'] = 'Chiar vreți să anulați înscrierea "{$a->user}" de la cursul "{$a->course}"?';
$string['unenrolusers'] = 'Anulează înscrierea utilizatorilor';
$string['usepasswordpolicy'] = 'Folosiți politica de parolă';
$string['usepasswordpolicy_desc'] = 'Utilizați politica standard privind parolele pentru cheile de înscriere.';
$string['welcometocourse'] = 'Bun venit la {$a}';
$string['welcometocoursetext'] = 'Bun venit la {$a->coursename}!

Dacă nu ați făcut deja acest lucru, ar trebui să vă editați pagina de profil, ca să putem afla mai multe despre dvs.:

  {$a->profileurl}';
