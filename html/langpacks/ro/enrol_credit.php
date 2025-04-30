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
 * Strings for component 'enrol_credit', language 'ro', version '4.4'.
 *
 * @package     enrol_credit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Înscrierea este dezactivată sau inactivă';
$string['canntenrolearly'] = 'Nu vă puteți înscrie încă; înscrierea începe pe {$a}.';
$string['canntenrollate'] = 'Nu vă mai puteți înscrie, întrucât inscrierile s-au finalizat pe {$a}.';
$string['checkout'] = '{$a->credit_cost} creditele cursului vor fi deduse din soldul dumneavoastră din {$a->user_credits}.';
$string['cohortnonmemberinfo'] = 'Numai membrii cohortei \'{$a}\' se pot înscrie.';
$string['cohortonly'] = 'Numai membrii cohortei';
$string['cohortonly_help'] = 'Înscrierea poate fi limitată numai la membrii unei anumite cohorte. Rețineți că modificarea acestei setări nu produce efecte asupra înscrierilor existente.';
$string['confirmbulkdeleteenrolment'] = 'Sunteți sigur că doriți să ștergeți aceste înscrieri ale utilizatorului?';
$string['credit:config'] = 'Configurați sesiunea de înscriere a creditelor la curs';
$string['credit:holdkey'] = 'Apare drept titular al cheii de înscriere la creditul cursului';
$string['credit:manage'] = 'Gestionează utilizatorii înscriși';
$string['credit:unenrol'] = 'Retrage utilizatori de la curs';
$string['credit:unenrolself'] = 'Retrageți-vă de la curs';
$string['credit_cost'] = 'Cost credit';
$string['credit_cost_help'] = 'Numărul de credite pe care utilizatorii le vor deduce la înscriere.';
$string['customwelcomemessage'] = 'Mesaj de întâmpinare personalizat';
$string['customwelcomemessage_help'] = 'Mesajul de întâmpinare personalizat poate fi adăugat ca text simplu sau în format automat Moodle, incluzând etichete HTML și multi-lang.

Următorii substituenți pot fi incluși în mesaj:

* Nume curs {$a->coursename}
* Link către pagina de profil a utilizatorului {$a->profileurl}
* E-mail utilizator {$a->email}
* Nume complet utilizator {$a->fullname}';
$string['defaultrole'] = 'Alocarea implicită a rolului';
$string['defaultrole_desc'] = 'Selectați poziția care trebuie alocată utilizatorilor pe parcursul înscrierii';
$string['deleteselectedusers'] = 'Șterge înscrierile utilizatorilor selectați';
$string['editselectedusers'] = 'Editează înscrierile utilizatorilor selectați';
$string['enrol_credit'] = 'Înscrie cu credite curs';
$string['enrolenddate'] = 'Data de finalizare';
$string['enrolenddate_help'] = 'Dacă este activată, utilizatorii se pot înscrie numai până la acea dată.';
$string['enrolenddaterror'] = 'Data de finalizare a înscrierii nu poate fi anterioară datei de începere';
$string['enrolme'] = 'Înscrie-mă';
$string['enrolperiod'] = 'Durata înscrierii';
$string['enrolperiod_desc'] = 'Intervalul implicit de timp în care înscrierea este validă. Dacă este setat la zero, durata înscrierii va fi implicit nelimitată.';
$string['enrolperiod_help'] = 'Intervalul implicit de timp în care înscrierea este validă, începând cu momentul în care utilizatorul este înscris. Dacă este dezactivat, intervalul înscrierii va fi implicit nelimitat.';
$string['enrolstartdate'] = 'Data începerii';
$string['enrolstartdate_help'] = 'Dacă este activată, utilizatorii pot fi înscriși numai începând cu acea dată.';
$string['expiredaction'] = 'Acțiunea de expirare a înscrierii';
$string['expiredaction_help'] = 'Selectați acțiunea care trebuie întreprinsă, atunci când expiră înscrierea utilizatorului. Vă rugăm să observați că unele date și setări ale utilizatorului sunt șterse pe durata retragerii de la curs.';
$string['expirymessageenrolledbody'] = 'Stimate {$a->user},

Aceasta este o notificare că înscrierea dumneavoastră la curs \'{$a->course}\' urmează să expire pe {$a->timeend}.

Dacă doriți să beneficiați de asistență, vă rugăm să contactați {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificare de expirarea a înscrierii';
$string['expirymessageenrollerbody'] = 'Înscrierea la cursul \'{$a->course}\' va expira în următoarele {$a->threshold} pentru următorii utilizatori:

{$a->users}

Pentru a extinde înscrierea acestora, mergeți la {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificare de expirare a înscrierii';
$string['groupkey'] = 'Utilizați cheia de înscriere în grup';
$string['groupkey_desc'] = 'Utilizați implicit cheia de înscriere în grup.';
$string['groupkey_help'] = 'Pe lângă restricționarea accesului la curs doar pentru cei care cunosc cheia, utilizarea cheilor de înscriere în grup ajută la adăugarea automată a utilizatorilor la grupuri, atunci când se înscriu la curs.

Observație: Trebuie specificată o cheie de înscriere pentru curs în setările înscrierii, precum și o cheie de înscriere în grup în setările acestuia.';
$string['insufficient_credits'] = 'Nu aveți suficiente credite de curs, pentru a vă înscrie. Sunt necesare {$a->credit_cost} credite, iar soldul dumneavoastră este {$a->user_credits}.';
$string['keyholder'] = 'Trebuie să primiți cheia de înscriere de la:';
$string['longtimenosee'] = 'Retrageți utilizatori inactivi după';
$string['longtimenosee_help'] = 'Utilizatorii vor fi retrași în mod automat, dacă nu au accesat cursul pentru o perioadă mai lungă de timp. Acest parametru specifică limita de timp';
$string['maxenrolled'] = 'Număr maxim de utilizatori înscriși';
$string['maxenrolled_help'] = 'Specifică numărul maxim de utilizatori care se pot înscrie. 0 înseamnă nelimitat.';
$string['maxenrolledreached'] = 'A fost atins numărul maxim de utilizatori care se pot înscrie.';
$string['messageprovider:expiry_notification'] = 'Notificări privind expirarea înscrierii creditului la curs';
$string['newenrols'] = 'Permite înscrieri noi';
$string['newenrols_desc'] = 'Permite utilizatorilor să se înscrie implicit la noile cursuri.';
$string['newenrols_help'] = 'Această setare determină dacă un utilizator se poate înscrie la curs.';
$string['not_set'] = 'Nu este setat';
$string['pluginname'] = 'Înscrierea creditului la curs';
$string['pluginname_desc'] = '';
$string['privacy:metadata'] = 'Plugin-ul Înscrierea creditului la curs nu memorează date personale.';
$string['profile_field_map'] = 'Cartografierea câmpului profilului';
$string['profile_field_map_help'] = 'Selectați câmpul de profil care stochează creditele cursurilor în profilurile utilizatorilor.';
$string['purchase'] = 'Achiziționează';
$string['role'] = 'Rol alocat implicit';
$string['sendcoursewelcomemessage'] = 'Transmite mesaj de întâmpinare la curs';
$string['sendcoursewelcomemessage_help'] = 'Când un utilizator se înscrie la curs, este posibil să primească un e-mail care va conține un mesaj de întâmpinare. Dacă este trimis de la contactul cursului (implicit profesorul) și mai mulți utilizatori au acest rol, e-mailul este trimis de la primul utilizator căruia i se atribuie poziția.';
$string['sendexpirynotificationstask'] = 'Sarcina notificărilor de expirare privind înscrierea creditului la curs';
$string['showhint'] = 'Afișează indiciu';
$string['showhint_desc'] = 'Afișează prima literă a chei de acces a vizitatorului.';
$string['status'] = 'Permite înscrierile existente';
$string['status_desc'] = 'Activați metoda de înscriere a creditului la cursuri noi.';
$string['status_help'] = 'Dacă este activat în paralel cu dezactivarea opțiunii „Permiteți înscrieri noi”, numai utilizatorii care s-au înscris anterior pot accesa cursul. Dacă această metodă de înscriere este efectiv dezactivată, toate înscrierile existente sunt suspendate, iar utilizatorii noi nu se pot înscrie.';
$string['syncenrolmentstask'] = 'Sincronizarea înscrierii creditului cursului cu sarcina de înscriere';
$string['unenrol'] = 'Retrage utilizator';
$string['unenrolselfconfirm'] = 'Sunteți sigur că doriți să vă retrageți de la curs "{$a}"?';
$string['unenroluser'] = 'Doriți să-l retrageți pe "{$a->user}" de la curs"{$a->course}"?';
$string['unenrolusers'] = 'Retrage utilizatori';
$string['welcometocourse'] = 'Bine ai venit la {$a}';
$string['welcometocoursetext'] = 'Bine ai venit la {$a->coursename}!

Dacă nu ai făcut acest lucru încă, trebuie să  îți editezi pagina de profil, astfel încât să putem afla mai multe despre tine:

  {$a->profileurl}';
