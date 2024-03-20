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
 * Strings for component 'enrol_cvent', language 'ro', version '4.1'.
 *
 * @package     enrol_cvent
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['INVALID_LOGIN'] = 'Cvent s-a întors "AUTENTIFICARE_INVALIDĂ". Vă rugăm să verificați numărul contului, numele de utilizator și parola configurate de Cvent.\\n';
$string['account_number'] = 'ID-ul contului Cvent';
$string['account_number_desc'] = 'ID-ul contului dumnevoastră Cvent. (Trebuie să primiți această valoare de la Cvent.)';
$string['apicallsremaining'] = 'Apelurile API rămase astăzi până la miezul nopții, ora estică: {$a}\\n';
$string['attemptinginit'] = 'Încercarea de autentificare la Cvent...\\n';
$string['autocreate_category'] = 'Creați automat categoria de cursuri';
$string['autocreate_category_desc'] = 'Categoria cursurilor create automat.';
$string['autocreate_courses'] = 'Cursuri create automat';
$string['autocreate_courses_desc'] = 'Cursurile pot fi create automat (cu numerele de identificare corecte) dacă există înscrieri la un curs care nu există încă în Moodle.';
$string['clicktoseelogafter'] = 'Faceți click aici, pentru a vedea jurnalul de apeluri API după terminarea încărcării acestei pagini.';
$string['couldnotinit'] = 'Cvent nu a putut fi inițializat; numărul de apeluri API rămase astăzi este necunoscut.';
$string['count'] = 'Numără: {$a}<br />\\n';
$string['cron_frequency'] = 'Întârziere';
$string['cron_frequency_desc'] = 'Numărul minim de minute de așteptat înainte de sincronizările cu Cvent. Moodle cron trebuie să fie configurat, pentru ca acest lucru să funcționeze. Introduceți "0" sau lăsați spațiul necompletat, pentru a dezactiva sincronizarea prin Moodle cron.';
$string['defaultrole_desc'] = 'În prezent, acest plugin gestionează numai persoanele înregistrate și invitații Cvent; profesorii trebuie să fie înscriși separat în Moodle.';
$string['enrol_cvent_autocreate_header'] = 'Crearea automată de noi cursuri';
$string['enrol_cvent_cron_header'] = 'Sincronizarea via Moodle Cron';
$string['enrol_cvent_cron_now'] = 'Înscrieri Cvent: Sincronizează acum.\\n';
$string['enrol_cvent_mustbeadmin'] = 'Trebuie să fie administrator sau trebuie să ruleze de la CLI!<br />\\n';
$string['enrol_cvent_nocron'] = 'Înscrieri Cvent: Nu este configurat pentru sincronizare în Moodle cron.\\n';
$string['enrol_cvent_nocron_now'] = 'Înscrieri Cvent: Prea devreme pentru următoarea sincronizare în Moodle cron. Se va sincroniza din nou în {$a} minute(s).\\n';
$string['enrol_daysafter'] = 'Acces extins la curs';
$string['enrol_daysafter_desc'] = 'Mențineți studenții la cursuri pentru o mai mare perioadă de timp, după ce evenimentul Cvent este programat să se încheie . (Introdu -1 pentru a dezactiva -- studenții vor avea acces nelimitat la curs.)';
$string['enrol_daysbefore'] = 'Acces rapid la curs';
$string['enrol_daysbefore_desc'] = 'Înscrie studenții la cursuri pentru o mai mare perioadă de timp, înainte de data la care evenimentul Cvent este programat să înceapă.';
$string['headingcallsmade'] = 'Apeluri API efectuate (prin acest plugin)';
$string['headingcallsremaining'] = 'Apelurile API rămase (la ultima verificare)';
$string['initerrorunknown'] = 'Eroare necunoscută la autentificarea în Cvent. Poate doriți să activați depanarea Moodle și să încercați din nou.\\n';
$string['initsuccess'] = 'Autentificat cu succes la Cvent!\\n';
$string['manualsync'] = 'Sincronizează acum';
$string['password'] = 'Parola Cvent';
$string['password_desc'] = 'Parola contului dumneavoastră Cvent.';
$string['pluginname'] = 'Cvent';
$string['pluginname_desc'] = 'Puteți folosi Cvent (cvent.com), pentru a vă gestiona înscrierile. Trebuie să fiți client Cvent și să aveți acces API, pentru a putea utiliza acest plugin.';
$string['search_location'] = 'Căutați prefixul locației';
$string['search_location_desc'] = 'Începutul numelui locației (locațiilor) pe care doriți să o includeți.<br />\\nDe exemplu: Dacă aveți trei locații în Cvent (oraș, primărie, tribunal) și doriți ca acest moodle să obțină înscrieri pentru evenimentele din oraș și primărie, introduceți "Oraș" aici.';
$string['server_settings'] = 'Setări Cvent';
$string['set_up_enrolments'] = 'Configurarea înscrierilor pentru {$a}...<br />\\n';
$string['username'] = 'Nume de utilizator Cvent';
$string['username_desc'] = 'Numele de utilizator al contului dumneavoastră Cvent. (Trebuie să primiți această valoare de la Cvent.)';
$string['verbose'] = 'Detaliat';
$string['verbose_desc'] = 'Activarea gradului de detaliere duce la creșterea volumului de rezultate vizualizate în scripturile CLI / cron.';
$string['view_stats'] = '<a href="{$a}">Vizualizează statisticile API </a>';
$string['viewlog'] = 'Vizualizare jurnal';
$string['youmustsetdatetimezone'] = 'Eroare: data.timezone nu este setată în php.ini. Trebuie să setați acest parametru, înainte ca plugin-ul de înscriere Cvent să funcționeze.';
