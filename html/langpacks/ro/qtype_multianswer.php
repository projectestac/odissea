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
 * Strings for component 'qtype_multianswer', language 'ro', version '4.5'.
 *
 * @package     qtype_multianswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'Confirm că vreau ca întrebarea să fie salvată ca editată';
$string['confirmsave'] = 'Confirmă, apoi salvează {$a}';
$string['correctanswer'] = 'Răspuns corect';
$string['correctanswerandfeedback'] = 'Răspuns corect şi feedback';
$string['corruptedquestion'] = 'Această întrebare este alterată și conține alte întrebări care nu se găsesc în banca de întrebări.';
$string['decodeverifyquestiontext'] = 'Decodifică şi verifică textul întrebării';
$string['invalidmultianswerquestion'] = 'Întrebare cu răspunsuri încorporate nevalide (Cloze) ({$a}).';
$string['layout'] = 'Layout';
$string['layouthorizontal'] = 'Şir orizontal de butoane radio';
$string['layoutmultiple_horizontal'] = 'Rând orizontal de casete de selecție';
$string['layoutmultiple_vertical'] = 'Rând vertical de casete de selecție';
$string['layoutselectinline'] = 'Meniul derulant în linie în text';
$string['layoutundefined'] = 'Layout nespecificat';
$string['layoutvertical'] = 'Coloană verticală de și butoane radio';
$string['missingsubquestion'] = 'Această întrebare nu se mai găsește în banca de întrebări și nu poate fi afișată.';
$string['multichoicex'] = 'Opțiune multiplă {$a}';
$string['nooptionsforsubquestion'] = 'Nu se pot obține variante pentru partea de întrebare # {$a->sub} (question->id={$a->id})';
$string['noquestions'] = 'Întrebarea Cloze (răspuns multiplu) „<strong> {$a}</strong>” nu conține nicio întrebare';
$string['pleaseananswerallparts'] = 'Vă rugăm să răspundeți la toate părțile întrebării';
$string['pluginname'] = 'Răspunsuri încorporate (Cloze)';
$string['pluginname_help'] = 'Întrebările cu răspunsuri integrate (Cloze) constau dintr-un pasaj de text cu întrebări, cum ar fi cele cu variante multiple de răspuns sau cele cu răspunsuri scurte încorporate în ele.';
$string['pluginname_link'] = 'question/type/multianswer';
$string['pluginnameadding'] = 'Adăugarea unei întrebări cu răspunsuri încorporate (Cloze)';
$string['pluginnameediting'] = 'Editarea unei întrebări cu răspunsuri încorporate (Cloze)';
$string['pluginnamesummary'] = 'Întrebările de acest tip sunt foarte flexibile, dar pot fi create doar prin introducerea textului care conține coduri speciale care creează răspunsuri scurte și întrebări numerice încorporate.';
$string['privacy:metadata'] = 'Pluginul pentru tipul de întrebare răspunsuri încorporate (Cloze) nu stochează date personale.';
$string['qtypenotrecognized'] = 'tip de întrebare {$a} necunoscut';
$string['questiondefinition'] = 'Definiţie întrebare';
$string['questiondeleted'] = 'Întrebare ștearsă';
$string['questioninquiz'] = '<ul>
   <li>adăugați sau ștergeți întrebări, </li>
   <li>modificați ordinea întrebărilor din text, </li>
   <li>modificați tipul de întrebare (numeric, răspuns scurt, alegere multiplă). </li> </ul>';
$string['questionnotfound'] = 'Nu s-a putut găsi întrebarea referitoare la partea #{$a}';
$string['questionsadded'] = 'Întrebare adăugată';
$string['questionsaveasedited'] = 'Întrebarea va fi salvată așa cum a fost editată';
$string['questionsless'] = '{$a} întrebare(i) mai puține decât în întrebarea cu mai multe răspunsuri stocată în baza de date';
$string['questionsmissing'] = 'Textul întrebării trebuie să includă cel puțin un răspuns încorporat.';
$string['questionsmore'] = '{$a} întrebare(i) mai multe decât în întrebarea cu mai multe răspunsuri stocată în baza de date';
$string['questiontypechanged'] = 'Tip de întrebare modificat';
$string['questiontypechangedcomment'] = 'Cel puțin un tip de întrebare a fost modificat. <br /> Ați adăugat, șters sau mutat o întrebare?';
$string['questionusedinquiz'] = 'Această întrebare este utilizată în {$a->nb_of_quiz} test(e), încercări totale: {$a->nb_of_attempts}';
$string['regradeissuenumsubquestionschanged'] = 'Numărul de subîntrebări încorporate în întrebare s-a modificat.';
$string['storedqtype'] = 'Tipul de întrebare stocat {$a}';
$string['subqresponse'] = 'partea {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'Tip de întrebare necunoscut: {$a->type} parte a întrebării # {$a->sub}';
$string['warningquestionmodified'] = '<b>AVERTIZARE</b>';
$string['youshouldnot'] = '<b>NU TREBUIE SĂ</b>';
