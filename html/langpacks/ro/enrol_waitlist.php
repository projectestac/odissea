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
 * Strings for component 'enrol_waitlist', language 'ro', version '4.5'.
 *
 * @package     enrol_waitlist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmation'] = 'Dacă continuați, veți fi înscris la acest curs.<br><br>Sunteți absolut sigur că doriți să faceți acest lucru?';
$string['confirmation_cancel'] = 'Anulare';
$string['confirmation_no'] = 'Nu';
$string['confirmation_yes'] = 'Da';
$string['confirmationfull'] = '<strong>Acest curs este rezervat în prezent.</strong>Dacă continuați, veți fi inclus pe o listă de așteptare și veți fi înscris automat și informat prin e-mail în cazul în care vor fi disponibile suficiente locuri.<br>';
$string['continue'] = 'continuare';
$string['customwelcomemessage'] = 'Mesaj de bun venit personalizat';
$string['defaultrole'] = 'Atribuire implicită a rolului';
$string['defaultrole_desc'] = 'Selectați rolul care trebuie să fie atribuit utilizatorilor în timpul înscrierii pe lista de așteptare';
$string['disable'] = 'Nu vă puteți înscrie la acest curs.';
$string['enrolenddate'] = 'Data de încheiere';
$string['enrolenddate_help'] = 'Dacă este activată, utilizatorii se pot înscrie singuri până la această dată.';
$string['enrolenddaterror'] = 'Data de încheiere a înscrierii nu poate fi anterioară datei de începere';
$string['enrolme'] = 'Înscrie-mă';
$string['enrolperiod'] = 'Durata înscrierii';
$string['enrolperiod_desc'] = 'Durata implicită de validare a înscrierii (în secunde). Dacă este setată la zero, durata înscrierii va fi nelimitată în mod implicit.';
$string['enrolperiod_help'] = 'Durata de valabilitate a înscrierii, începând cu momentul în care utilizatorul se înscrie. Dacă este dezactivată, durata înscrierii va fi nelimitată.';
$string['enrolstartdate'] = 'Data de început';
$string['enrolstartdate_help'] = 'Dacă este activată, utilizatorii se pot înscrie singuri începând cu această dată.';
$string['enrolusers'] = 'Înscriere utilizatori';
$string['faculty'] = 'Facultate';
$string['groupkey'] = 'Utilizați cheile de înscriere în grup';
$string['groupkey_desc'] = 'Utilizați în mod implicit cheile de înscriere în grup.';
$string['groupkey_help'] = 'Pe lângă restricționarea accesului la curs doar la cei care cunosc cheia, utilizarea unei chei de înscriere în grup înseamnă că utilizatorii sunt adăugați automat la grup, atunci când se înscriu la curs.

Pentru a utiliza o cheie de înscriere în grup, trebuie specificată o cheie de înscriere în setările cursului, precum și cheia de înscriere în grup în setările grupului.';
$string['lineconfirm'] = '<br>Sunteți absolut sigur că doriți să faceți acest lucru?';
$string['lineinfo'] = '<br>Numărul de persoane care așteaptă în fața dvs.:';
$string['longtimenosee'] = 'Anulează înscrierea inactivă după';
$string['longtimenosee_help'] = 'Dacă utilizatorii nu au accesat un curs pentru o lungă perioadă de timp, înscrierea acestora este anulată în mod automat. Acest parametru specifică acea limită de timp.';
$string['manage::assign'] = 'Alocare';
$string['manage::define'] = 'Definiți';
$string['maxenrolled'] = 'Nr. maxim de utilizatori înscriși';
$string['maxenrolled_help'] = 'Specifică numărul maxim de utilizatori care se pot înregistra pe lista de așteptare. 0 înseamnă "fără limită".';
$string['maxenrolledreached'] = 'Numărul maxim de utilizatori autorizați să se înscrie în lista de așteptare a fost deja atins.';
$string['nocursefields'] = 'Fără câmpuri';
$string['password'] = 'Cheie de înscriere';
$string['password_help'] = 'O cheie de înscriere permite ca accesul la curs să fie limitat doar la cei care cunosc cheia.

Dacă câmpul este lăsat necompletat, orice utilizator se poate înscrie la curs.

Dacă este specificată o cheie de înscriere, orice utilizator, care încearcă să se înscrie la curs, va fi obligat să furnizeze cheia. Rețineți că un utilizator trebuie să furnizeze o singură dată cheia de înscriere, atunci când se înscrie la curs.';
$string['passwordinvalid'] = 'Cheie de înscriere incorectă, încercați din nou';
$string['passwordinvalidhint'] = 'Cheia de înscriere a fost incorectă, vă rugăm să încercați din nou<br />
(Iată un indiciu - începe cu \'{$a}\')';
$string['pluginname'] = 'Înscriere în lista de așteptare';
$string['pluginname_desc'] = 'Plugin-ul de înscriere în lista de așteptare le permite utilizatorilor să aleagă la ce cursuri doresc să participe. Cursurile pot fi protejate de o cheie de înscriere. Înscrierea internă se face prin intermediul plugin-ului de înscriere manual, care trebuie activat în același curs.';
$string['privacy:metadata:user_enrol_waitlist'] = 'Stochează metadatele utilizatorului în câmpul ID utilizator';
$string['profilecreatefield'] = 'Creați o nouă listă de așteptare';
$string['profiledescription2'] = 'Descrierea 2 a câmpului';
$string['profilefield'] = 'Câmp';
$string['requirepassword'] = 'Solicitați cheia de înscriere';
$string['requirepassword_desc'] = 'Solicitați cheia de înscriere la cursuri noi și opriți eliminarea cheii de înscriere din cursurile existente.';
$string['role'] = 'Atribuiți rolul';
$string['sendcoursewelcomemessage'] = 'Trimiteți mesajul de bun venit al cursului';
$string['sendcoursewelcomemessage_help'] = 'Dacă este activat, utilizatorii primesc un mesaj de întâmpinare prin e-mail, atunci când așteaptă să se înscrie la un curs.';
$string['showhint'] = 'Arată indiciul';
$string['showhint_desc'] = 'Afișați prima literă a cheii de acces pentru invitați.';
$string['status'] = 'Permiteți înscrierile pe lista de așteptare';
$string['status_desc'] = 'Permiteți utilizatorilor din lista de așteptare să se înscrie în mod implicit la curs.';
$string['status_help'] = 'Această setare determină dacă un utilizator se poate înscrie (și, de asemenea, să-și anuleze înscrierea dacă are permisiunea corespunzătoare) de la curs.';
$string['unenrolwaitlistconfirm'] = 'Dotiți cu adevărat să anulați înscrierea "{$a}"?';
$string['usepasswordpolicy'] = 'Aplicați politica de parolă';
$string['usepasswordpolicy_desc'] = 'Utilizați politica standard privind parolele pentru cheile de înscriere.';
$string['users_on_waitlist'] = 'Utilizatori pe lista de așteptare';
$string['waitlist:config'] = 'Configurați instanțele de înscriere în lista de așteptare';
$string['waitlist:manage'] = 'Gestionarea utilizatorilor înscriși';
$string['waitlist:unenrol'] = 'Anularea înscrierii utilizatorilor la curs';
$string['waitlist:unenrolself'] = 'Anularea propriei înscrieri la curs';
$string['waitlist:unenrolwaitlist'] = 'Anularea înscrierii unei liste de așteptare de la curs';
$string['waitlisted_users'] = 'Utilizatori în așteptare';
$string['waitlistinfo'] = '<b>Acest curs este rezervat în prezent</b>.<br/><br/>Vă mulțumim pentru cererea dvs. de înscriere. Ați fost inclus pe o listă de așteptare și veți fi informat prin e-mail, în cazul în care devine disponibil un loc.';
$string['welcometocourse'] = 'Bun venit la {$a}';
$string['welcometocoursetext'] = '<p>Bun venit la {$a->coursename}!</p>


<p>Data de început: {$a->startdate}</p>

<p>Descrierea cursului: </p>

	<p>{$a->rezumat}</p>';
