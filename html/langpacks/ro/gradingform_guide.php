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
 * Strings for component 'gradingform_guide', language 'ro', version '4.4'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Adaugă comentarii frecvente';
$string['addcriterion'] = 'Adaugă criteriu';
$string['additionalcomments'] = 'Comentarii suplimentare';
$string['additionalcommentsforcriterion'] = 'Comentarii suplimentare pentru criteriu, {$a}';
$string['alwaysshowdefinition'] = 'Arătați definiția ghidului pentru studenți';
$string['backtoediting'] = 'Înapoi la editare';
$string['clicktocopy'] = 'Faceți clic pentru a copia acest text în feedback-ul de criterii';
$string['clicktoedit'] = 'Înapoi la editare';
$string['clicktoeditname'] = 'Click pentru a edita numele criteriului';
$string['comment'] = 'Comentariu';
$string['commentpickerforcriterion'] = 'Selector de comentarii folosit frecvent pentru {$a} comentarii suplimentare';
$string['comments'] = 'Comentarii frecvente';
$string['commentsdelete'] = 'Șterge comentariu';
$string['commentsempty'] = 'Click pentru editarea comentariului';
$string['commentsmovedown'] = 'Mută în jos';
$string['commentsmoveup'] = 'Mută în sus';
$string['confirmdeletecriterion'] = 'Sunteți sigur(ă) că doriți să ștergeți acest item?';
$string['confirmdeletelevel'] = 'Sunteți sigur(ă) că doriți să ștergeți acest nivel?';
$string['criterion'] = 'Numele criteriului';
$string['criteriondelete'] = 'Șterge criteriu';
$string['criterionempty'] = 'Click pentru a edita criteriul';
$string['criterionmovedown'] = 'Mută în jos';
$string['criterionmoveup'] = 'Mută în sus';
$string['criterionname'] = 'Nume criteriu';
$string['criterionremark'] = '{$a} criteriu de renotare';
$string['definemarkingguide'] = 'Definiți ghidul de notare';
$string['description'] = 'Descriere';
$string['descriptionmarkers'] = 'Descriere pentru notare';
$string['descriptionstudents'] = 'Descriere pentru cursanți';
$string['err_maxscoreisnegative'] = 'Nota maximă nu este validă, nu sunt permise valori negative';
$string['err_maxscorenotnumeric'] = 'Punctajul maxim al criteriului trebuie să fie numeric';
$string['err_nocomment'] = 'Comentariul nu poate fi lăsat necompletat';
$string['err_nodescription'] = 'Descrierea studentului nu poate fi necompletată';
$string['err_nodescriptionmarkers'] = 'Descrierea notării nu poate fi goală';
$string['err_nomaxscore'] = 'Punctajul maxim al criteriului nu poate fi gol';
$string['err_noshortname'] = 'Numele criteriului nu poate fi necompletat';
$string['err_scoreinvalid'] = 'Nota la \'{$a->criterianame}\'nu este validă, nota maximă este';
$string['err_scoreisnegative'] = 'Punctajul acordat „{$a->criterianame}” nu este valid, nu sunt permise valori negative';
$string['err_shortnametoolong'] = 'Numele criteriului trebuie să aibă mai puțin de 256 de caractere.';
$string['gradingof'] = '{$a} notare';
$string['guide'] = 'Ghid de notare';
$string['guidemappingexplained'] = 'AVERTISMENT: Ghidul dvs. de marcare are o notă maximă de <b> {$a->maxscore} puncte </b>, dar nota maximă stabilită în activitatea dvs. este {$a->modulegrade} Punctajul maxim stabilit în ghidul dvs. de marcare va fi scalat la nota maximă din activitate. <br />
Punctajele intermediare vor fi convertite, respectiv rotunjite, la cea mai apropiată notă disponibilă.';
$string['guidenotcompleted'] = 'Vă rugăm să furnizați o notă validă pentru fiecare criteriu';
$string['guideoptions'] = 'Opțiuni de ghidare pentru notare';
$string['guidestatus'] = 'Starea actuală a ghidului de notare';
$string['hidemarkerdesc'] = 'Ascundeți descrierile criteriilor de notare';
$string['hidestudentdesc'] = 'Ascundeți descrierea criteriilor cursanților';
$string['informationforcriterion'] = '{$a} informații';
$string['insertcomment'] = 'Inserați comentariile frecvente';
$string['maxscore'] = 'Nota maximă';
$string['name'] = 'Nume';
$string['needregrademessage'] = 'Definiția ghidului de notare a fost modificată după ce acest cursant a fost notat. Cursantul nu poate vedea acest ghid de notare până nu îl verificați și îi actualizați nota.';
$string['outof'] = 'Punctaj din {$a}';
$string['pluginname'] = 'Ghid de notare';
$string['previewmarkingguide'] = 'Previzualizare ghid de notare';
$string['privacy:metadata:criterionid'] = 'Un identificator al unui criteriu de notare avansată.';
$string['privacy:metadata:fillingssummary'] = 'Stochează informații despre notele unui utilizator și feedback pentru ghidul de notare.';
$string['privacy:metadata:instanceid'] = 'Un identificator la unei note utilizat de o activitate.';
$string['privacy:metadata:preference:showmarkerdesc'] = 'Dacă se afișează descrierile criteriilor de notare';
$string['privacy:metadata:preference:showstudentdesc'] = 'Dacă se afișează descrieri ale criteriilor cursantului';
$string['privacy:metadata:remark'] = 'Observații legate de acest criteriu de notare.';
$string['privacy:metadata:score'] = 'Un punctaj pentru acest criteriu de notă.';
$string['regrademessage1'] = 'Urmează să salvați modificările unui ghid de notare care a fost deja utilizat pentru notare. Vă rugăm să indicați dacă notele existente trebuie revizuite. Dacă setați acest lucru, ghidul de notare va fi ascuns de cursanți până când elementul lor este renotat.';
$string['regrademessage5'] = 'Sunteți pe cale să salvați modificări semnificative într-un ghid de notare care a fost deja utilizat pentru notare. Valoarea notelor va fi neschimbată, dar ghidul de notare va fi ascuns de cursanți până când elementul lor va fi renotat.';
$string['regradeoption0'] = 'Nu punctați pentru renotare';
$string['regradeoption1'] = 'Punctați pentru renotare';
$string['remark_help'] = 'Introduceți orice comentarii suplimentare despre acest criteriu.';
$string['restoredfromdraft'] = 'NOTĂ: Ultima încercare de notare a acestei persoane nu a fost salvată corect, astfel încât notele temporare au fost restabilite. Dacă doriți să anulați aceste modificări, utilizați butonul „Anulare” de mai jos.';
$string['save'] = 'Salvează';
$string['saveguide'] = 'Salvați ghidul de notare și pregătiți-l';
$string['saveguidedraft'] = 'Salvează ca draft';
$string['score'] = 'notă';
$string['score_help'] = 'Introduceți un punctaj pentru {$a->criterion} între 0 și {$a->maxscore}.';
$string['scoreforcriterion'] = '{$a} punctaj';
$string['showmarkerdesc'] = 'Afișați descrierile criteriilor de notare';
$string['showmarkspercriterionstudents'] = 'Arătați cursanților punctele pe criterii';
$string['showstudentdesc'] = 'Arătați descrierile criteriilor cursanților';
