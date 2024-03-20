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
 * Strings for component 'enrol_paypal', language 'ro', version '4.1'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Atribuiți rolul';
$string['businessemail'] = 'Adresa de e-mail PayPal de serviciu';
$string['businessemail_desc'] = 'Adresa de e-mail a contului dvs. PayPal de serviciu';
$string['cost'] = 'Costul înscrierii';
$string['costerror'] = 'Costul înscrierii nu este numeric';
$string['costorkey'] = 'Vă rugăm să alegeți una dintre următoarele metode de înscriere.';
$string['currency'] = 'Valută';
$string['defaultrole'] = 'Atribuire implicită a rolului';
$string['defaultrole_desc'] = 'Selectați rolul care trebuie să fie atribuit utilizatorilor în timpul înscrierilor PayPal';
$string['enrolenddate'] = 'Data de încheiere';
$string['enrolenddate_help'] = 'Dacă este activată, utilizatorii pot fi înscriși numai până la această dată.';
$string['enrolenddaterror'] = 'Data de încheiere a înscrierii nu poate fi anterioară datei de începere';
$string['enrolperiod'] = 'Durata înscrierii';
$string['enrolperiod_desc'] = 'Durata implicită de validare a înscrierii. Dacă este setată la zero, durata înscrierii va fi nelimitată în mod implicit.';
$string['enrolperiod_help'] = 'Durata de valabilitate a înscrierii, începând cu momentul în care utilizatorul este înscris. Dacă este dezactivată, durata înscrierii va fi nelimitată.';
$string['enrolstartdate'] = 'Data de început';
$string['enrolstartdate_help'] = 'Dacă este activată, utilizatorii pot fi înscriși numai de la această dată.';
$string['errdisabled'] = 'Plugin-ul de înscriere PayPal este dezactivat și nu gestionează notificările de plată.';
$string['erripninvalid'] = 'Notificarea de plată instantanee nu a fost verificată de PayPal.';
$string['errpaypalconnect'] = 'Nu s-a putut conecta la {$a->url}, pentru a verifica notificarea de plată instantă: {$a->result}';
$string['expiredaction'] = 'Acțiunea de expirare a înscrierii';
$string['expiredaction_help'] = 'Selectați acțiunea de efectuat la expirarea înscrierii utilizatorului. Vă rugăm să rețineți că unele date și setări ale utilizatorilor sunt eliminate din curs în timpul anulării cursului.';
$string['mailadmins'] = 'Notificați administratorul';
$string['mailstudents'] = 'Anunțați cursanții';
$string['mailteachers'] = 'Anunțați formatorii';
$string['messageprovider:paypal_enrolment'] = 'Mesaje de înscriere PayPal';
$string['nocost'] = 'Înscrierea la acest curs nu implică niciun cost!';
$string['paypal:config'] = 'Configurați instanțele de înscriere PayPal';
$string['paypal:manage'] = 'Gestionați utilizatorii înscriși';
$string['paypal:unenrol'] = 'Anulați înscrierea utilizatorilor de la curs';
$string['paypal:unenrolself'] = 'Anulați propria înscriere la curs';
$string['paypalaccepted'] = 'Se acceptă plăți prin PayPal';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'Modulul PayPal vă permite să configurați cursuri cu plată. Dacă costul pentru orice curs este zero, atunci studenților nu li se va cere să plătească pentru intrare. Există un cost la nivelul întregului site, pe care îl setați aici ca implicit pentru întregul site, apoi faceți o setare a cursului pentru fiecare curs individual. Costul cursului prevalează asupra costului site-ului.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Informații despre tranzacțiile PayPal pentru înscrierile PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Adresa de e-mail sau ID-ul contului PayPal al destinatarului plății (adică al comerciantului).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'ID-ul cursului vândut.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'ID-ul instanței de înscriere la curs.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Numele complet al cursului căruia i s-a vândut înscrierea.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'O notă introdusă de cumpărător în câmpul de notă de plată al site-ului PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Numele complet al cumpărătorului.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'În cazul unei rambursări, stornări sau stornări anulate, acesta ar fi ID-ul tranzacției inițiale.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Starea plății.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Reține dacă plata a fost finanțată cu un eCheck (echeck) sau a fost finanțată cu sold PayPal, card de credit sau transfer instant (instant).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Motivul pentru care starea plății este în așteptare (dacă este cazul).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'Motivul pentru care starea plății este inversată, rambursată, anulată_inversată sau refuzată (dacă starea este una dintre ele).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Adresa de e-mail principală a destinatarului plății (adică a comerciantului).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'ID-ul unic al contului PayPal al destinatarului plății (de exemplu, comerciantul).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Suma taxei percepute la plată.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Ora notificării Moodle de PayPal cu privire la plată.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Numărul original de identificare a tranzacției comerciantului pentru plata de la cumpărător, în baza căruia a fost înregistrat cazul';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'ID-ul utilizatorului care a cumpărat înscrierea la curs.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'Plugin-ul de înscriere PayPal transmite datele utilizatorului de la Moodle către site-ul PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Adresa utilizatorului care cumpără cursul.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Orașul utilizatorului care cumpără cursul.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Țara utilizatorului care cumpără cursul.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Un șir separat de cratime care conține ID-ul utilizatorului (cumpărătorul), ID-ul cursului, ID-ul instanței de înscriere.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Adresa de e-mail a utilizatorului care cumpără cursul.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Prenumele utilizatorului care cumpără cursul.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Numele utilizatorului care cumpără cursul.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Numele complet al cumpărătorului.';
$string['processexpirationstask'] = 'Înscrierea PayPal trimite sarcina notificărilor de expirare';
$string['sendpaymentbutton'] = 'Trimiteți plata prin PayPal';
$string['status'] = 'Permiteți înscrierile PayPal';
$string['status_desc'] = 'Permiteți utilizatorilor să utilizeze PayPal, pentru a se înscrie la un curs în mod prestabilit.';
$string['transactions'] = 'Tranzacții PayPal';
$string['unenrolselfconfirm'] = 'Doriți cu adevărat să vă anulați înscrierea la cursul "{$a}"?';
