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
 * Strings for component 'gradingform_rubric', language 'ro', version '4.5'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Adaugă criteriu';
$string['additionalfeedback'] = 'Feedback suplimentar';
$string['alwaysshowdefinition'] = 'Permiteți utilizatorilor să previzualizeze baremul (altfel va fi afișată numai după notare)';
$string['backtoediting'] = 'Înapoi la editare';
$string['confirmdeletecriterion'] = 'Sunteți sigur(ă) că doriți să ștergeți acest criteriu?';
$string['confirmdeletelevel'] = 'Sunteți sigur(ă) că doriți să ștergeți acest nivel?';
$string['criterion'] = 'Criteriu {$a}';
$string['criterionaddlevel'] = 'Adaugă nivel';
$string['criteriondelete'] = 'Șterge criteriu';
$string['criterionduplicate'] = 'Dublează criteriul';
$string['criterionempty'] = 'Click pentru a edita criteriul';
$string['criterionmovedown'] = 'Mută în jos';
$string['criterionmoveup'] = 'Mută în sus';
$string['criterionremark'] = 'Repunctare pentru criteriul {$a->description}: {$a->remark}';
$string['definerubric'] = 'Definire barem';
$string['description'] = 'Descriere';
$string['enableremarks'] = 'Permiteți cursantului să adauge comentarii text pentru fiecare criteriu';
$string['err_mintwolevels'] = 'Fiecare criteriu trebuie să aibă cel puțin două niveluri';
$string['err_nocriteria'] = 'Baremul trebuie să conțină cel puțin un criteriu';
$string['err_nodefinition'] = 'Definiția nivelului nu poate fi necompletată';
$string['err_nodescription'] = 'Descrierea criteriului nu poate fi necompletată';
$string['err_novariations'] = 'Nivelurile de criterii nu pot valora toate același număr de puncte';
$string['err_scoreformat'] = 'Numărul de puncte pentru fiecare nivel trebuie să fie un număr valid';
$string['err_totalscore'] = 'Numărul maxim de puncte posibil atunci când este notat după barem trebuie să fie mai mare de zero';
$string['gradingof'] = 'se notează {$a}';
$string['level'] = 'Nivel {$a->definition}, {$a->score} puncte.';
$string['leveldefinition'] = 'Definiția nivelului {$a}';
$string['leveldelete'] = 'Șterge nivelul {$a}';
$string['levelempty'] = 'Click pentru a edita nivelul';
$string['levelsgroup'] = 'Grup de niveluri';
$string['lockzeropoints'] = 'Calculați nota cu un punctaj minim al notei minime realizabile pentru barem';
$string['lockzeropoints_help'] = 'Această setare se aplică numai dacă suma numărului minim de puncte pentru fiecare criteriu este mai mare de 0. Dacă este bifată, punctajul minim al activității va fi nota minimă realizabilă pentru barem. Dacă nu este bifat, punctajul minim posibil pentru barem va fi corelat la nota minimă disponibilă pentru activitate (care este 0, cu excepția cazului în care se utilizează o scală de evaluare).';
$string['name'] = 'Nume';
$string['needregrademessage'] = 'Definiția baremului a fost modificat după ce acest cursant a fost notat. Cursantul nu poate vedea acest barem până nu verificați baremul și nu actualizați nota.';
$string['notset'] = 'Nu este setat';
$string['pluginname'] = 'Barem';
$string['pointsvalue'] = '{$a} puncte';
$string['previewrubric'] = 'Previzualizare barem';
$string['privacy:metadata:criterionid'] = 'Un identificator pentru un criteriu specific care este notat.';
$string['privacy:metadata:fillingssummary'] = 'Stochează informații despre nota utilizatorului creat de barem.';
$string['privacy:metadata:instanceid'] = 'Un identificator referitor la o notă dintr-o activitate.';
$string['privacy:metadata:levelid'] = 'Nivelul obținut în barem.';
$string['privacy:metadata:remark'] = 'Observații legate de criteriul baremului evaluat.';
$string['regrademessage1'] = 'Sunteți pe cale să salvați modificările la un barem care a fost deja utilizată pentru notare. Vă rugăm să indicați dacă notele existente trebuie revizuite. Dacă setați acest lucru, baremul va fi ascuns de studenți până când elementul lor va fi renotat.';
$string['regrademessage5'] = 'Sunteți pe punctul de a salva modificări semnificative într-un barem deja utilizat pentru notare. Valoarea din catalog va fi neschimbată, dar baremul nu va putea fi văzut de cursanți până când tema lor va fi renotată.';
$string['regradeoption0'] = 'Nu punctați pentru renotare';
$string['regradeoption1'] = 'Punctați pentru renotare';
$string['restoredfromdraft'] = 'NOTĂ: Ultima încercare de notare a acestei persoane nu a fost salvată corect, astfel încât notele temporare au fost restabilite. Dacă doriți să anulați aceste modificări, utilizați butonul „Anulare” de mai jos.';
$string['rubric'] = 'Barem';
$string['rubricmapping'] = 'Punctajul regulilor de corelare al notelor';
$string['rubricmappingexplained'] = 'Punctajul minim posibil pentru acest barem este de <b> {$a->minscore} puncte </b>. Acesta va fi convertit la nota minimă disponibilă pentru activitate (care este 0, cu excepția cazului în care se utilizează o scală). Scorul maxim de <b> {$a->maxscore} puncte </b> va fi convertit la nota maximă. Punctajele intermediare vor fi convertite întocmai.

Dacă se utilizează o scală pentru notare, scorul va fi rotunjit și convertit la elementele scalei ca și cum ar fi numere întregi consecutive.

Acest calcul al notei poate fi modificat editând formularul și bifând caseta „Calculați nota având un punctaj minim al notei minime ce poate fi obținut pentru barem”.';
$string['rubricnotcompleted'] = 'Vă rugăm să alegeți ceva pentru fiecare criteriu';
$string['rubricoptions'] = 'Opțiuni barem';
$string['rubricstatus'] = 'Status-ul baremului curent';
$string['save'] = 'Salvează';
$string['saverubric'] = 'Salvați baremul și pregătiți-l';
$string['saverubricdraft'] = 'Salvează ca draft';
$string['scoreinputforlevel'] = 'Punctajul de intrare pentru nivelul {$a}';
$string['scorepostfix'] = '{$a} puncte';
$string['showdescriptionstudent'] = 'Afișați descrierea baremului celor care sunt notați';
$string['showdescriptionteacher'] = 'Afișați descrierea baremului în timpul evaluării';
$string['showremarksstudent'] = 'Arătați observațiile celor care sunt notați';
$string['showscorestudent'] = 'Afișați punctele pentru fiecare nivel celor care sunt notați';
$string['showscoreteacher'] = 'Afișează punctele pentru fiecare nivel în timpul evaluării';
$string['sortlevelsasc'] = 'Sortează ordinea pentru niveluri:';
$string['sortlevelsasc0'] = 'Descendent în funcție de numărul de puncte';
$string['sortlevelsasc1'] = 'Ascendent în funcție de numărul de puncte';
$string['zerolevelsabsent'] = 'Atenție: Punctajul minim posibil pentru acest barem nu este 0; acest lucru poate duce la note neașteptate pentru această activitate. Pentru a evita acest lucru, fiecare criteriu ar trebui să aibă un nivel cu 0 puncte. <br>
Acest avertisment poate fi ignorat dacă se utilizează o scală de notare, iar nivelurile minime din barem corespund valorii minime a scalei.';
