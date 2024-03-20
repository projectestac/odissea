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
 * Strings for component 'tool_generator', language 'ro', version '4.1'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'Fișier mare {$a}';
$string['courseexplanation'] = 'Acest instrument creează cursuri de testare standard care includ multe
secțiuni, activități și fișiere.

Acesta este destinat să ofere o măsură standardizată pentru verificarea fiabilității
și performanța diferitelor componente ale sistemului (cum ar fi backup și restaurare).

Acest test este important, deoarece au existat multe cazuri anterior în care,
în fața cazurilor de utilizare din viața reală (de exemplu, un curs cu 1 000 de activități), sistemul
nu funcționează.

Cursurile create utilizând această caracteristică pot ocupa o cantitate mare de baze de date și
spațiul sistemului de fișiere (zeci de gigaocteți). Va trebui să ștergeți cursurile
(și așteptați diferite curse de curățare) pentru a elibera din nou acest spațiu.

** Nu utilizați această caracteristică pe un sistem live **. Folosiți numai pe un server pentru dezvoltatori.
(Pentru a evita utilizarea accidentală, această caracteristică este dezactivată, cu excepția cazului în care ați selectat și
Nivel de depanare DEVELOPER.)';
$string['coursesize_0'] = 'XS (~10KB; creat în ~1 secunde)';
$string['coursesize_1'] = 'S (~10MB; creat în ~30 second)';
$string['coursesize_2'] = 'M (~100MB; creat în ~2 minute)';
$string['coursesize_3'] = 'L (~1GB; creat în ~30 minute)';
$string['coursesize_4'] = 'XL (~10GB; creat în ~2 ore)';
$string['coursesize_5'] = 'XXL (~20GB; creat în ~4 ore)';
$string['coursewithoutusers'] = 'Cursul selectat nu are utilizatori';
$string['createcourse'] = 'Creați curs';
$string['createtestplan'] = 'Creați un plan de testare';
$string['creating'] = 'Crearea cursului';
$string['done'] = 'efectuate ({$a})';
$string['downloadtestplan'] = 'Descărcați planul de testare';
$string['downloadusersfile'] = 'Descărcați fișierul utilizatorilor';
$string['error_nocourses'] = 'Nu există cursuri pentru a genera planul de testare';
$string['error_noforumdiscussions'] = 'Cursul selectat nu conține discuții pe forum';
$string['error_noforuminstances'] = 'Cursul selectat nu conține instanțe ale modulului forum';
$string['error_noforumreplies'] = 'Cursul selectat nu conține răspunsuri la forum';
$string['error_nonexistingcourse'] = 'Cursul specificat nu există';
$string['error_nopageinstances'] = 'Cursul selectat nu conține instanțe ale modulului de pagină';
$string['error_notdebugging'] = 'Nu este disponibil pe acest server deoarece depanarea nu este setată la DEVELOPER';
$string['error_nouserspassword'] = 'Trebuie să setați $CFG->tool_generator_users_password în config.php pentru a genera planul de testare';
$string['fullname'] = 'Curs de testare: {$a->size}';
$string['maketestcourse'] = 'Faceți un curs de testare';
$string['maketestplan'] = 'Faceți planul de testare JMeter';
$string['notenoughusers'] = 'Cursul selectat nu are suficienți utilizatori';
$string['pluginname'] = 'Generator de date de dezvoltare';
$string['privacy:metadata'] = 'Plugin-ul Generator de date de dezvoltare nu stochează date personale.';
$string['progress_checkaccounts'] = 'Verificarea conturilor de utilizator ({$a})';
$string['progress_coursecompleted'] = 'Curs finalizat ({$a})';
$string['progress_createaccounts'] = 'Crearea conturilor de utilizator ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'Crearea temelor ({$a})';
$string['progress_createbigfiles'] = 'Crearea fișierelor mari ({$a})';
$string['progress_createcourse'] = 'Se creează cursul {$a}';
$string['progress_createforum'] = 'Se creează un forum ({$a} postări)';
$string['progress_createpages'] = 'Crearea paginilor ({$a})';
$string['progress_createsmallfiles'] = 'Crearea fișierelor mici ({$a})';
$string['progress_enrol'] = 'Înscrierea utilizatorilor la curs ({$a})';
$string['progress_sitecompleted'] = 'Site finalizat ({$a})';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~10MB; 3 courses, created in ~30 seconds)';
$string['sitesize_1'] = 'S (~50MB; 8 courses, created in ~2 minutes)';
$string['sitesize_2'] = 'M (~200MB; 73 courses, created in ~10 minutes)';
$string['sitesize_3'] = 'L (~1\'5GB; 277 courses, created in ~1\'5 hours)';
$string['sitesize_4'] = 'XL (~10GB; 1065 courses, created in ~5 hours)';
$string['sitesize_5'] = 'XXL (~20GB; 4177 courses, created in ~10 hours)';
$string['size'] = 'Mărimea, desigur';
$string['smallfiles'] = 'Fișiere mici';
$string['targetcourse'] = 'Testează cursul țintă';
$string['testplanexplanation'] = 'Acest instrument creează un fișier plan de testare JMeter împreună cu fișierul acreditării utilizatorului.

Acest plan de testare este conceput pentru a funcționa împreună cu {$a}, ceea ce face mai ușor rularea planului de testare într-un anumit mediu Moodle, colectează informații despre rulări și compară rezultatele, deci va trebui să îl descărcați și să îl utilizați test_runner. sh script sau urmați instrucțiunile de instalare și utilizare.

Trebuie să setați o parolă pentru utilizatorii cursului în config.php (de ex. $CFG-> tool_generator_users_password = \'moodle\';). Nu există o valoare implicită pentru această parolă pentru a preveni utilizările neintenționate ale instrumentului. Trebuie să utilizați opțiunea de actualizare a parolelor în cazul în care utilizatorii cursului dvs. au alte parole sau au fost generate de tool_generator dar fără a seta o valoare $CFG->tool_generator_users_password.

Face parte din tool_generator, deci funcționează bine cu cursurile generate de cursuri și de generatorii de site-uri, poate
de asemenea, să fie utilizat cu orice curs care conține cel puțin:

* Destul de utilizatori înscriși (depinde de dimensiunea planului de testare pe care o selectați) cu resetarea parolei la „moodle”
* O instanță de modul de pagină
* O instanță de modul forum cu cel puțin o discuție și un răspuns

S-ar putea să doriți să luați în considerare capacitatea serverelor dvs. atunci când rulați planuri mari de testare ca fiind suma încărcată generată de JMeter
poate fi deosebit de mare. Perioada de creștere a fost ajustată în funcție de numărul de fire (utilizatori) pentru a reduce acest tip
de probleme, dar încărcătura este încă imensă.

** Nu rulați planul de testare pe un sistem live **. Această caracteristică creează numai fișierele pentru a alimenta JMeter, deci nu este periculos
în sine, dar nu ar trebui să ** NICIODATĂ ** să executați acest plan de testare pe un site de producție.';
$string['testplansize_0'] = 'XS ({$a->users} utilizatori, {$a->loops} bucle și {$a->rampup} perioadă de rampup)';
$string['testplansize_1'] = 'S ({$a->users} utilizatori, {$a->loops} bucle și {$a->rampup} perioadă de rampup)';
$string['testplansize_2'] = 'M ({$a->users} utilizatori, {$a->loops} bucle și {$a->rampup} perioadă de rampup)';
$string['testplansize_3'] = 'L ({$a->users} utilizatori, {$a->loops} bucle și {$a->rampup} perioadă de rampup)';
$string['testplansize_4'] = 'XL ({$a->users} utilizatori, {$a->loops} bucle și {$a->rampup} perioadă de rampup)';
$string['testplansize_5'] = 'XXL ({$a->users} utilizatori, {$a->loops} bucle și {$a->rampup} perioadă de rampup)';
$string['updateuserspassword'] = 'Actualizați parola utilizatorilor cursului';
$string['updateuserspassword_help'] = 'JMeter trebuie să se conecteze ca utilizatori de curs, puteți seta parola utilizatorilor utilizând $CFG->tool_generator_users_password în config.php; această setare actualizează parola utilizatorului cursului în conformitate cu $CFG->tool_generator_users_password. Poate fi util în cazul în care utilizați un curs care nu a fost generat de tool_generator sau $CFG->tool_generator_users_password nu a fost setat când ați creat cursurile de testare.';
