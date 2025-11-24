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
 * Strings for component 'offlinequiz', language 'ro', version '4.5'.
 *
 * @package     offlinequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Adaugă';
$string['addarandomquestion'] = 'întrebări aleatorii';
$string['addarandomquestion_help'] = 'Moodle adaugă un set aleator de întrebări multivariantă (sau întrebări multivariantă totul-sau-nimic) grupului curent offline quiz. Numărul întrebărilor adăugate se poate alege. Întrebările sunt alese din categoria curentă de întrebări (și, dacă s-a optat, din subcategoriile sale).';
$string['addarandomselectedquestion'] = 'Adaugă o întrebarea selectată aleator...';
$string['addlist'] = 'Adaugă listă';
$string['addnewpagesafterselected'] = 'Adaugă o pagină nouă după întrebările selectate';
$string['addnewquestion'] = 'o nouă întrebare';
$string['addnewquestionsqbank'] = 'Adaugă întrebări în categoria {$a->catname}: {$a->link}';
$string['addnewuseroverride'] = 'Adaugă suprascriere utilizator';
$string['addpagebreak'] = 'Adaugă o nouă pagină';
$string['addpagehere'] = 'Adaugă o nouă pagină aici';
$string['addparts'] = 'Adaugă participanți';
$string['addquestionfrombankatend'] = 'Adaugă la sfârșit din banca de întrebări';
$string['addquestionfrombanktopage'] = 'Adaugă la pagina {$a} din banca de întrebări';
$string['addrandom'] = 'Adaugă în mod aleatoriu {$a} întrebări cu mai multe răspunsuri';
$string['addrandomfromcategory'] = 'întrebări aleatorii';
$string['addrandomquestion'] = 'întrebări aleatorii';
$string['addrandomquestiontoofflinequiz'] = 'Adăugare întrebări la offlinequiz {$a->name} (group {$a->group})';
$string['addrandomquestiontopage'] = 'Adaugă o întrebare aleatorie la pagina {$a}';
$string['addtoofflinequiz'] = 'Adaugă în testul offline';
$string['addtoqueue'] = 'Adaugă în coadă';
$string['allinone'] = 'Nelimitat';
$string['alllists'] = 'Toate listele';
$string['allornothing'] = 'Totul sau nimic';
$string['allresults'] = 'Afișează toate rezultatele';
$string['allstudents'] = 'Afișează toți studenții';
$string['alwaysavailable'] = 'Întotdeauna disponibil';
$string['analysis'] = 'Analiză element';
$string['answerform'] = 'Formular de răspuns';
$string['answerformforgroup'] = 'Formular de răspuns pentru grupul {$a}';
$string['answerforms'] = 'Formulare de răspunsuri';
$string['answerpdfxy'] = 'Formular de răspuns ({$a}->maxquestions questions / {$a}->maxanswers options)';
$string['areyousureremoveselected'] = 'Sigur doriți eliminarea tuturor întrebărilor alese?';
$string['attemptexists'] = 'Există încercări';
$string['attemptsexist'] = 'Nu mai puteți adăuga sau elimina întrebări';
$string['attemptsnum'] = 'Rezultate: {$a}';
$string['attemptsonly'] = 'Arată doar studenți cu rezultate';
$string['attendances'] = 'Prezențe';
$string['basicideasofofflinequiz'] = 'Ideile de bază pentru crearea chestionarelor';
$string['blackwhitethreshold'] = 'Prag alb/negru.';
$string['bulksavegrades'] = 'Salvează notele';
$string['calibratescanner'] = 'Calibrează scanner';
$string['cannoteditafterattempts'] = 'Nu se pot adăuga sau șterge întrebări, pentru că există răspunsuri completate. ({$a})';
$string['category'] = 'Categorie';
$string['changed'] = 'Rezultatul a fost schimbat';
$string['changeevaluationmode'] = 'Schimbă modul cum se face evaluarea. Posibil doar dacă este permis de administrator.';
$string['checkparts'] = 'Marchează participanții aleși, ca prezenți';
$string['checkuserid'] = 'Verifică ID grup/utilizator';
$string['chooseagroup'] = 'Alege un grup...';
$string['closebeforeopen'] = 'Nu s-a putut actualiza offline quiz. Ați specificat o dată de închidere care precedă data deschiderii.';
$string['closestudentview'] = 'Închide Vederea de Student';
$string['closewindow'] = 'Închide fereastra';
$string['cmmissing'] = 'Lipsește modulul de curs pentru oflline quiz cu ID {$a}';
$string['configblackwhitethreshold'] = 'Impune pragul pentru conversia alb/negru între 1-99 - Cu cât mai mare valoarea, cu atât mai alb trebuie să fie punctul importat, ca să fie considerat ca alb.';
$string['configdecimalplaces'] = 'Numărul de zecimale care trebuie afișat, când se prezintă note pentru offline auiz.';
$string['configdisableimgnewlines'] = 'Această opțiune dezactivează rândurile noi înainte și după imagini în foile pdf cu întrebări. Atenție: Asta poate duce la probleme de formatare.';
$string['configexperimentalevaluation'] = 'Evaluare experimentală a foilor cu răspunsuri';
$string['configexperimentalevaluationdesc'] = 'NU FOLOSIȚI ÎN PRODUCȚIE! Această opțiune este utilizată la teste alfa pentru noul algoritm de evaluare. Dacă această opțiune este comutată pe da/yes, algoritmul se poate activa în opțiunile instanței offlinequiz. Descurajăm puternic utilizarea acestei opțiuni. Nu există deloc suport pentru pierderi de date din cauza activării acestei opțiuni.';
$string['configintro'] = 'Valorile puse aici sunt folosite ca valori implicite pentru configurarea noilor offline quiz.';
$string['configkeepfilesfordays'] = 'Determină pentru câte zile se păstrează fișierele imagine încărcate, în depozitul temporar.';
$string['configonlylocalcategories'] = 'Nu sunt permise categorii partajate, de întrebări.';
$string['configpapergray'] = 'valoarea de alb a hârtiei, folosită la evaluarea foilor de răspuns';
$string['configshuffleanswers'] = 'Amestecă răspunsurile';
$string['configshufflequestions'] = 'Dacă activați această opțiune, atunci ordinea întrebărilor în grupurile offline quiz va fi amestecată de fiecare dată când re-creați pre-vizualizarea în foaia "Creează formulare".';
$string['configshufflewithin'] = 'Dacă activați această opțiune, atunci părțile ce compun întrebările individuale vor fi amestecate aleator, când se creează formularele de întrebări și de răspunsuri.';
$string['configuseridentification'] = 'O formulă ce descrie identificarea utilizatorilor. Această formulă este utilizată pentru alocarea formularelor de răspunsuri utilizatorilor, în sistem. Partea din dreapta a formulei trebuie să reprezinte un câmp în tabelul user al Moodle.';
$string['confirmremovequestion'] = 'Sunteți sigur(ă) că doriți să eliminați această întrebare?';
$string['copy'] = 'Copiază';
$string['copyright'] = '<strong>Atenție: Textele de pe această pagină sunt doar pentru informare personală. Ca orice text,aceste întrebări sunt limitate de drepturile de autor. Nu este permisă copierea lor sau arătarea lor altor persoane!</strong>';
$string['copyselectedtogroup'] = 'Adaugă întrebările alese la grupul: {$a}';
$string['copytogroup'] = 'Adaugă toate întrebările la grupul: {$a}';
$string['correct'] = 'corect';
$string['correcterror'] = 'rezolvă';
$string['correctforgroup'] = 'Răspunsuri corecte pentru Grup {$a}';
$string['correctionform'] = 'Corectare';
$string['correctionforms'] = 'Formulare de corectare';
$string['correctionoptionsheading'] = 'Opțiuni de corectare';
$string['correctupdated'] = 'Formular de corectură reîmprospătat pentru grup {$a}.';
$string['couldnotgrab'] = 'Nu s-a reușit captura imaginii {$a}';
$string['couldnotregister'] = 'Nu s-a putut înregistra utilizatorul {$a}';
$string['createcategoryandaddrandomquestion'] = 'Creează categorie și adaugă întrebări aleatorii';
$string['createlistfirst'] = 'Adaugă participanți';
$string['createofflinequiz'] = 'Creează formulare';
$string['createpartpdferror'] = 'Nu s-a putut crea formularul pentru lista participanților {$a}. Lista ar putea fi goală.';
$string['createpdf'] = 'Formular PDF';
$string['createpdferror'] = 'Nu s-a putut crea formularul pentru grupul {$a}. Poate nu sunt întrebări în grup.';
$string['createpdffirst'] = 'Întâi creați lista PDF';
$string['createpdfforms'] = 'Creează formulare';
$string['createpdfs'] = 'Descarcă formulare PDF';
$string['createpdfsparticipants'] = 'Formulare PDF pentru lista de participanți';
$string['createquestionandadd'] = 'Creează o întrebare nouă și adaugă la chestionar';
$string['createquiz'] = 'Creează formulare';
$string['csvfile'] = 'Fișier CSV';
$string['csvformat'] = 'Fișier text cu valori separate prin virgule (CSV)';
$string['csvplus1format'] = 'Fișier text cu date brute (CSV)';
$string['csvpluspointsformat'] = 'Fișier text cu puncte (CSV)';
$string['darkgray'] = 'Gri închis';
$string['datanotsaved'] = 'Nu s-au putut salva opțiunile';
$string['decimalplaces'] = 'Zecimale';
$string['decimalplaces_help'] = 'Numărul de zecimale care trebuie afișate după virgula zecimală, când se arată notele pentru offline quiz.';
$string['deletepdfs'] = 'Șterge documentele';
$string['deleteselectedpart'] = 'Elimină participanții selectați';
$string['deleteselectedresults'] = 'Sterge rezultatele selectate';
$string['deletethislist'] = 'Șterge această listă';
$string['difficultytitle'] = 'Dificultate';
$string['difficultytitlea'] = 'Dificultate  A';
$string['difficultytitleb'] = 'Dificultate B';
$string['difficultytitlediff'] = 'Diferență';
$string['downloadpdfs'] = 'Descarcă documente';
$string['downloadresultsas'] = 'Descracă rezultatele ca:';
$string['dragtoafter'] = 'După {$a}';
$string['editlist'] = 'Editează lista';
$string['editlists'] = 'Editează listele:';
$string['editquestion'] = 'Editează întrebarea';
$string['editquestions'] = 'Editează întrebările';
$string['editthislist'] = 'Editează această listă';
$string['generalfeedback'] = 'Feedback general';
$string['gradingofflinequiz'] = 'Note';
$string['gradingofflinequizx'] = 'Note: {$a}';
$string['idnumber'] = 'Număr identificare';
$string['importnew'] = 'Import';
$string['info'] = 'Info';
$string['infoshort'] = 'i';
$string['instruction1'] = 'Formularul de răspuns va fi scanat. Nu îndoiți sau pătați. Folosiți un pix negru sau albastru pentru marcarea cu \'X\' a câmpurilor:';
$string['instruction2'] = 'Doar marcajele clare pot fi interpretate corect! Dacă doriți corectarea unui marcaj, hașurați complet acea căsuță. Ea va fi considerată goală:';
$string['instruction3'] = 'Căsuțele hașurate nu pot fi marcate din nou. Vă rugăm să nu scrieți nimic în afara căsuțelor.';
$string['introduction'] = 'Introducere';
$string['invigilator'] = 'Supraveghetor';
$string['noparticipantsfound'] = 'Nu s-au găsit participanți';
$string['noresults'] = 'Nu există rezultate.';
$string['numquestionsx'] = 'Întrebări: {$a}';
$string['numusersadded'] = '{$a} participanți adăugați';
$string['outofshort'] = '{$a->grade}/{$a->maxgrade}';
$string['participants'] = 'Participanți';
$string['participantslist'] = 'Lista participanților';
$string['participantslists'] = 'Participanți';
$string['pdfintrotext'] = '<b>Cum marchez corect?</b><br />Formularul de răspuns va fi scanat. Nu îndoiți sau pătați. Folosiți pix negru sau albastru pentru marcarea cu \'X\' a căsuțelor. Dacă doriți să anulați o căsuță marcată, hașurați complet acea căsuță. Ea va fi interpretată ca goală<br />';
$string['point'] = 'punct';
$string['preview'] = 'previzualizare';
$string['questioninfoanswers'] = 'Numărul de răspunsuri corecte';
$string['questioninfocorrectanswer'] = 'răspuns corect';
$string['questioninfocorrectanswers'] = 'răspunsuri corecte';
$string['questionsheet'] = 'Foaie de întrebări';
$string['results'] = 'Rezultate';
$string['save'] = 'Salvează';
$string['select'] = 'Selectează';
$string['selectagroup'] = 'Selectează un grup';
$string['signature'] = 'Semnătură';
$string['standard'] = 'Standard';
$string['type'] = 'Tip';
$string['useradded'] = 'Utilizator {$a} adăugat';
$string['valuezero'] = 'Valoarea nu poate fi zero';
$string['viewresults'] = 'Vezi rezultatele';
$string['white'] = 'Alb';
$string['zipfile'] = 'Fișier ZIP';
$string['zipok'] = 'Fișierul ZIP a fost importat';
