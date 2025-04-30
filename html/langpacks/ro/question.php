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
 * Strings for component 'question', language 'ro', version '4.4'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acțiune';
$string['addanotherhint'] = 'Adăugați un alt indiciu';
$string['addcategory'] = 'Adaugă categorie';
$string['addmorechoiceblanks'] = 'Spații libere pentru alte {no} opțiuni';
$string['adminreport'] = 'Raport despre eventualele probleme apărute în baza de date cu întrebări.';
$string['advancedsearchoptions'] = 'Opțiuni de căutare';
$string['alltries'] = 'Toate încercările';
$string['answer'] = 'Răspuns';
$string['answers'] = 'Răspunsuri';
$string['answersaved'] = 'Răspuns salvat';
$string['answerx'] = 'Răspuns {$a}';
$string['attemptfinished'] = 'Încercare finalizată';
$string['attemptfinishedsubmitting'] = 'Trimiterea încercării finalizate: {$a}';
$string['attemptoptions'] = 'Opțiuni test';
$string['availableq'] = 'Disponibil?';
$string['badbase'] = 'Bad base înainte **: {$a}**';
$string['behaviour'] = 'Funcționalitate';
$string['behaviourbeingused'] = 'Funcționalitate utilizată: {$a}';
$string['broken'] = 'Aceasta reprezintă un "broken link" adică o legătură la un fişier inexistent';
$string['byandon'] = 'de la <em>{$a->user}</em> la ora <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Nu se poate copia fișierul de back-up';
$string['cannotcreate'] = 'Nu se poate insera un element nou în tabelul  question_attempts';
$string['cannotcreatepath'] = 'Nu se poate crea calea : {$a}';
$string['cannotdeletebehaviourinuse'] = 'Nu puteți șterge comportamentul „{$a}”. Este folosit de încercările din întrebare.';
$string['cannotdeletecate'] = 'Nu puteți șterge categoria daca este categoria implicită pentru acest context .';
$string['cannotdeleteneededbehaviour'] = 'Nu se poate șterge funcționalitatea întrebării \'{$a}\'. Există alte funcționalități instalate care depind de ea.';
$string['cannotdeleteqtypeinuse'] = 'Nu puteţi şterge tipul de întrebare \'{$a}\'. Există întrebări de acest tip în baza de date cu întrebări.';
$string['cannotdeleteqtypeneeded'] = 'Nu puteţi şterge tipul de întrebare \'{$a}\'. Există alte tipuri de întrebări instalate care derivă din el.';
$string['cannotdeletetopcat'] = 'Categoriile principale nu pot fi șterse.';
$string['cannotedittopcat'] = 'Categoriile principale nu pot fi editate.';
$string['cannotenable'] = 'Tipul de întrebare {$a} nu poate fi creat direct.';
$string['cannotenablebehaviour'] = 'Comportamentul întrebării {$a} nu poate fi utilizat direct. Este doar pentru uz intern.';
$string['cannotfindcate'] = 'Nu s-a putut găsi categoria de înregistrare';
$string['cannotfindquestionfile'] = 'Nu s-a putut găsi fișierul cu datele întrebării în zip';
$string['cannotgetdsfordependent'] = 'Nu se poate obține setul de date specificat pentru o întrebare dependentă de setul de date! (întrebare: {$a->id}, set de date: {$a->item})';
$string['cannotgetdsforquestion'] = 'Nu se poate obține setul de date specificat pentru o întrebare calculată! (întrebare: {$a})';
$string['cannothidequestion'] = 'Nu s-a putut ascunde întrebarea';
$string['cannotimportformat'] = 'Ne pare rău, importarea acestui format nu este încă implementată!';
$string['cannotinsertquestion'] = 'Nu s-a putut adăuga întrebarea nouă!';
$string['cannotinsertquestioncatecontext'] = 'Nu se poate insera noua categorie a întrebării  {$a->cat} illegal contextid {$a->ctx}';
$string['cannotloadquestion'] = 'Nu s-a putut încărca întrebarea';
$string['cannotmovequestion'] = 'Nu puteți utiliza acest script pentru a muta întrebările care au fișiere asociate din diferite zone.';
$string['cannotopenforwriting'] = 'Nu se poate deschide pentru scriere: {$a}';
$string['cannotpreview'] = 'Nu puteți previzualiza aceste întrebări!';
$string['cannotread'] = 'Nu se poate citi fişierul de import (sau fişierul este gol)';
$string['cannotregradedifferentqtype'] = 'Nu se poate regrade cu o întrebare de alt tip.';
$string['cannotretrieveqcat'] = 'Nu s-a putut obține categoria întrebării';
$string['cannotunhidequestion'] = 'Nu s-a putut renunța la ascunderea întrebării';
$string['cannotunzip'] = 'Nu s-a putut dezarhiva fișierul.';
$string['cannotwriteto'] = 'Nu se pot scrie întrebările exportate la {$a}';
$string['categories'] = 'Categorii';
$string['category'] = 'Categorie';
$string['categorycurrent'] = 'Categoria curentă';
$string['categorycurrentuse'] = 'Folosiți această categorie';
$string['categorydoesnotexist'] = 'Această categorie nu există';
$string['categoryinfo'] = 'Informații categorie';
$string['categorymove'] = 'Categoria „{$a->name}” conține {$a->count} întrebări (dintre care unele pot fi întrebări ascunse sau întrebări aleatorii care sunt încă utilizate într-un test). Vă rugăm să alegeți o altă categorie pentru a le muta.';
$string['categorymoveto'] = 'Salvați în categorie';
$string['categorynamecantbeblank'] = 'Numele categoriei nu poate fi necompletat.';
$string['categorynamewithcount'] = '{$a->name} ({$a->questioncount})';
$string['categorynamewithidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['categorynamewithidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->questioncount})';
$string['changeoptions'] = 'Modificați opțiunile';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}">Categoria "{$a->name}"</a> din cursul "{$a->coursename}" îşi va modifica opţiunea de partajare din <strong>{$a->changefrom} în {$a->changeto}.';
$string['check'] = 'Verifică';
$string['chooseqtypetoadd'] = 'Alege un tip de întrebare pentru a fi adăugat';
$string['clearwrongparts'] = 'Șterge răspunsurile incorecte';
$string['clickflag'] = 'Întrebare cu flag';
$string['clicktoflag'] = 'Puneți un flag acestei întrebări pentru referințe viitoare';
$string['clicktounflag'] = 'Ștergeți flag';
$string['clickunflag'] = 'Ștergeți flag';
$string['closepreview'] = 'Închide previzualizare';
$string['combinedfeedback'] = 'Feedback combinat';
$string['comment'] = 'Comentariu';
$string['commented'] = 'Commentat: {$a}';
$string['commentormark'] = 'Comentați sau suprascrieți punctajul';
$string['comments'] = 'Comentarii';
$string['commentx'] = 'Comentariu: {$a}';
$string['complete'] = 'Complet';
$string['contexterror'] = 'Nu ar fi trebuit să ajungeți aici dacă nu mutați o categorie la un alt context.';
$string['copy'] = 'Copiați de la {$a} și schimbați legătura';
$string['correct'] = 'Corect';
$string['correctfeedback'] = 'Pentru orice răspuns corect';
$string['correctfeedbackdefault'] = 'Răspunsul dumneavoastră este corect.';
$string['created'] = 'Creat';
$string['createdby'] = 'Creat de';
$string['createdmodifiedheader'] = 'Creat/Ultima salvare';
$string['createnewquestion'] = 'Creează o nouă întrebare...';
$string['cwrqpfs'] = 'Selectare aleatorie de întrebări din sub-categorii';
$string['cwrqpfsinfo'] = '<p>Pe parcursul actualizării la Moodle 1.9 vom separa categoriile de întrebări în
contexte diferite. Unele categorii de întrebări și întrebări de pe site-ul dumneavoastră vor trebui să aibă
statusul de partajare schimbat. Acest lucru este necesar în cazul rar când una sau mai multe întrebări "aleatorii" dintr-un test sunt setate să fie selectate dintr-o combinație de categorii  partajate și nepartajate (așa cum este cazul pe acest site). Acest lucru se întâmplă atunci când o întrebare "aleatorie" este setată să fie selectată  din subcategorii, iar una sau mai multe subcategorii au un status de partajare diferit față de la categoria-părinte în care
este creată întrebarea aleatorie.</p>
<p>Următoarele categorii de întrebări, din care întrebările "aleatorii" din categoriile-părinte selectează întrebări ,
vor avea statusul lor de partajare schimbat cu același status de partajare al categoriei din care întrebarea "aleatorie"
face parte - când se actualizarea lala Moodle 1.9. Următoarele categorii vor avea statusul de partajare schimbat. Întrebările respectivese vor găsi în continuare în toate testele existente, până când le ștergeți din aceste teste.</p>';
$string['cwrqpfsnoprob'] = 'Nicio categorie de întrebare din site-ul dumneavoastră nu este afectată de problema "întrebări aleatorii, se selectează întrebări din sub-categorii" .';
$string['decimalplacesingrades'] = 'Note cu zecimale';
$string['defaultfor'] = 'Implicit pentru {$a}';
$string['defaultinfofor'] = 'Categoria implicită pentru întrebările partajate în contextul \'{$a}\'.';
$string['defaultmark'] = 'Punctaj implicit';
$string['defaultmarkmustbepositive'] = 'Punctajul implicită trebuie să fie pozitivă.';
$string['deletecoursecategorywithquestions'] = 'În banca de întrebări există întrebări asociate cu această categorie de cursuri. Continuarea acestei acţiuni va determina ştergerea acelor întrebări. Dacă doriţi puteţi să mutaţi acele întrebări în altă categorie utilizând interfaţa băncii de întrebări.';
$string['deletequestioncheck'] = 'Această acțiune va șterge următoarea întebare și toate versiunile ei:<br /><br />{$a}';
$string['deletequestionscheck'] = 'Această acțiune va șterge următoarele întrebări și toate versiunile lor:<br /><br />{$a}';
$string['deletequestiontitle'] = 'Șterge întrebare?';
$string['deletequestiontitle_plural'] = 'Șterge întrebări?';
$string['deleteselectedquestioncheck'] = 'Această acțiune va șterge versiunile selectate ale următoarelor întrebări:<br /><br />{$a}';
$string['deleteversiontitle'] = 'Șterge versiunea selectată?';
$string['deleteversiontitle_plural'] = 'Șterge versiunile selectate?';
$string['deletingbehaviour'] = 'Se șterge funcționalitatea întrebării \'{$a}\'';
$string['deletingqtype'] = 'Se șterge tipul de întrebare \'{$a}\'';
$string['didnotmatchanyanswer'] = '[Nu a corespuns niciun răspuns]';
$string['disabled'] = 'Dezactivat';
$string['displayoptions'] = 'Opțiuni pentru afișare';
$string['disterror'] = 'Distribuția {$a} a cauzat probleme';
$string['donothing'] = 'Nu copia fişiere, nu muta fişiere, nu modifica linkuri.';
$string['editcategories'] = 'Editează categorii';
$string['editcategories_help'] = 'În loc să fie păstrat totul într-o listă mare, întrebările pot fi aranjate în categorii și subcategorii.

Fiecare categorie are un context care determină unde pot fi utilizate întrebările din categorie:

* Contextul activității - Întrebări disponibile numai în modulul de activitate
* Contextul cursului - Întrebări disponibile în toate modulele de activitate din curs
* Contextul categoriei de curs - Întrebări disponibile în toate modulele de activitate și cursurile din categoria de curs
* Contextul sistemului - Întrebări disponibile în toate cursurile și activitățile de pe site

Categoriile sunt, de asemenea, utilizate pentru întrebări aleatorii, deoarece întrebările sunt selectate dintr-o anumită categorie.';
$string['editcategories_link'] = 'question/category';
$string['editcategory'] = 'Editează categoria';
$string['editingcategory'] = 'Se modifică o categorie';
$string['editingquestion'] = 'Se modifică o întrebare';
$string['editquestion'] = 'Modifică întrebarea';
$string['editquestions'] = 'Modifică întrebările';
$string['editthiscategory'] = 'Editează această categorie';
$string['emptyxml'] = 'Eroare necunoscută -  imsmanifest.xml este gol';
$string['enabled'] = 'Activat';
$string['erroraccessingcontext'] = 'Contextul nu poate fi accesat';
$string['errordeletingquestionsfromcategory'] = 'Eroare la ștergerea unor întrebări din categoria {$a}.';
$string['errorduringpost'] = 'A apărut o eroare în timpul post-procesării!';
$string['errorduringpre'] = 'A apărut o eroare în timpul pre-procesării!';
$string['errorduringproc'] = 'A apărut o eroare în timpul procesării!';
$string['errorduringregrade'] = 'Nu se poate acorda altă notă la întrebarea {$a->qid}, mergi la stare {$a->stateidid}.';
$string['errorfilecannotbecopied'] = 'Eroare: nu se poate copia fișierul {$a}.';
$string['errorfilecannotbemoved'] = 'Eroare: nu se poate muta fișierul {$a}.';
$string['errorfileschanged'] = 'Eroare: fișierele cu link-uri către întrebări s-au schimbat de când formularul a fost afișat.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'Întrebarea ({$a}) apare de mai multe ori cu ponderi diferite în diferite locuri în cadrul testului. Acest lucru nu este acceptat în prezent în raportul statistic, iar statisticile pentru această întrebare pot deveni incorecte.';
$string['errormanualgradeoutofrange'] = 'Nota {$a->grade} nu se încadrează în intervalul 0 - {$a->maxgrade} pentru întrebarea {$a->name}. Nici punctajul, nici comentariile nu vor fi salvate.';
$string['errormovingquestions'] = 'S-a produs o eroare la realizarea operaţiunii de mutare a întrebărilor cu id-urile {$a}.';
$string['errorpostprocess'] = 'A apărut o eroare în timpul post-procesării!';
$string['errorpreprocess'] = 'A apărut o eroare în timpul pre-procesării!';
$string['errorprocess'] = 'A apărut o eroare în timpul procesării!';
$string['errorprocessingresponses'] = 'S-a produs o eroare în timpul procesării răspunsurilor dumneavoastră ({$a}). Dați click pe continuă pentru a vă întoarce la pagina unde erați și să încercați din nou.';
$string['errorsavingcomment'] = 'Eroare la salvarea comentariilor pentru întrebarea {$a->name} în baza de date.';
$string['errorsavingflags'] = 'Eroare la salvarea statusului flag-ului';
$string['errorupdatingattempt'] = 'Eroare la actualizarea propunerii {$a->id} în baza de date';
$string['eventqbankdisabled'] = 'Plugin-ul banca de întrebări e dezactivat';
$string['eventqbankenabled'] = 'Plugin-ul banca de întrebări e activat';
$string['eventquestioncategorycreated'] = 'Categoria întrebare a fost creată';
$string['eventquestioncategorydeleted'] = 'Categoria întrebărilor a fost ștearsă';
$string['eventquestioncategorymoved'] = 'Categoria de întrebări mutată';
$string['eventquestioncategoryupdated'] = 'Categoria întrebărilor a fost actualizată';
$string['eventquestioncategoryviewed'] = 'Categorie de întrebări vizualizată';
$string['eventquestioncreated'] = 'Întrebare creată';
$string['eventquestiondeleted'] = 'Întrebare ștearsă';
$string['eventquestionmoved'] = 'Întrebare mutată';
$string['eventquestionsexported'] = 'Întrebări exportate';
$string['eventquestionsimported'] = 'Întrebări importate';
$string['eventquestionupdated'] = 'Întrebare actualizată';
$string['eventquestionviewed'] = 'Întrebare vizualizată';
$string['export'] = 'Export';
$string['exportasxml'] = 'Exportă ca Moodle XML';
$string['exportcategory'] = 'Exportă categoria';
$string['exportcategory_help'] = 'Această setare stabilește din ce categorie  vor fi luate întrebările exportate.

Anumite formate de import, cum ar fi GIFT și Moodle XML, permit categoriei  și datelor despre context  să fie incluse în fișierul de export, permițându-le (opțional) să fie create din nou la import. În cazul în care este necesar, căsuțele corespunzătoare trebuie bifate.';
$string['exporterror'] = 'Au apărut erori în timpul exportului';
$string['exportfilename'] = 'întrebări';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = 'Descărcați această întrebare în format Moodle XML';
$string['exportquestions'] = 'Exportă întrebări în fișier';
$string['exportquestions_help'] = 'Această funcție permite exportul unei categorii complete (și orice alte subcategorii) de întrebări în fișier. Vă rugăm să rețineți că, în funcție de formatul de fișier selectat, unele date ale tipurilor întrebării și anumite tipuri de întrebări se poate să nu fie exportate.';
$string['exportquestions_link'] = 'question/export';
$string['feedback'] = 'Feedback';
$string['fieldinquestion'] = '{$a->fieldname} {$a->questionindentifier}';
$string['fieldinquestionpre'] = '{$a->questionindentifier} {$a->fieldname}';
$string['filecantmovefrom'] = 'Fișierele cu întrebări nu pot fi mutate, deoarece nu aveți permisiunea de a muta fișiere din locul de unde încercați să mutați  întrebări.';
$string['filecantmoveto'] = 'Fișierele întrebării nu pot fi mutate sau copiate, deoarece nu aveți permisiunea de a adăuga fișiere în locul unde încercați să mutați întrebările.';
$string['fileformat'] = 'Formatul fișierului';
$string['filesareacourse'] = 'Fișiere curs';
$string['filesareasite'] = 'Fișiere site';
$string['filestomove'] = 'Mutați / copiați fișiere la {$a}?';
$string['fillincorrect'] = 'Completează răspunsurile corecte';
$string['filterbytags'] = 'Filtrează pe baza etichetelor...';
$string['firsttry'] = 'Prima încercare';
$string['flagged'] = 'Flagged';
$string['flagthisquestion'] = 'Puneți flag la această întrebare';
$string['formquestionnotinids'] = 'Formular care conține întrebări care nu sunt în questionids';
$string['fractionsnomax'] = 'Una din întrebări trebuie să aibă un punctaj de 100% astfel încât să fie posibilă obţinerea unei note maxime la această întrebare.';
$string['generalfeedback'] = 'Feedback general';
$string['generalfeedback_help'] = 'Feedback-ul general este prezentat studentului după ce a completat întrebarea. Spre deosebire de feedback-ul specific care depinde de tipul de întrebare și de răspunsul dat de student, același text cu feedback-ul general este prezentat tuturor studenților.

Aveți posibilitatea să utilizați feedback-ul general pentru a oferi studenților un răspuns complet și poate un link către mai multe informații pe care le pot folosi în cazul în care nu au înțeles întrebările.';
$string['getcategoryfromfile'] = 'Obţine categorie din fişier';
$string['getcontextfromfile'] = 'Obţine context din fişier';
$string['hintn'] = 'Sugestie {no}';
$string['hintnoptions'] = 'Opțiuni sugestie {no}';
$string['hinttext'] = 'Textul sugestiei';
$string['howquestionsbehave'] = 'Care este funcționalitatea întrebărilor';
$string['howquestionsbehave_help'] = 'Cursanții pot interacționa cu întrebările din test în diferite moduri. De exemplu, ați putea dori ca studenții să introducă un răspuns la fiecare întrebare și apoi să trimită testul complet, înainte să primească notă sau feedback. Acesta ar fi modul „Feedback diferit”.

Alternativ, ați putea dori ca utilizatorii să trimită fiecare întrebare pe măsură continuă testul pentru a obține feedback imediat și, dacă nu găsesc răspunsul corect  imediat, mai pot încerca încă odată și vor primi penalizări la nota finală. Acesta ar fi modul „Interactiv cu mai multe încercări”.

Acestea sunt probabil cele două moduri de comportament cele mai utilizate.';
$string['howquestionsbehave_link'] = 'question/behaviour';
$string['idnumber'] = 'Număr identificator';
$string['idnumber_help'] = 'Dacă este utilizat, numărul de identificare trebuie să fie unic în cadrul fiecărei categorii de întrebări. Oferă un alt mod de identificare a unei întrebări uneori util, dar care poate fi lăsat necompletat.';
$string['ignorebroken'] = 'Ignorați legăturile întrerupte';
$string['import'] = 'Import';
$string['importcategory'] = 'Categorie import';
$string['importcategory_help'] = 'Această setare determină categoria în care vor merge întrebările importate.

Anumite formate de import, cum ar fi GIFTși Moodle XML, pot include categorii și contexte de date în fișierul de import. Pentru a face uz de aceste date, mai degrabă decât de categoria selectată, căsuțele corespunzătoare trebuie bifate. În cazul în care categoriile specificate în fișierul de import nu există, ele vor fi create.';
$string['importerror'] = 'A apărut o eroare în timpul procesării importului';
$string['importerrorquestion'] = 'Eroare la importul întrebărilor';
$string['importfromcoursefiles'] = '... sau alegeți un fișier curs pentru import.';
$string['importfromupload'] = 'Selectează un fișier pentru upload...';
$string['importingquestions'] = 'Se importă  {$a} întrebări din fișier';
$string['importparseerror'] = 'S-au găsit erori la analizarea fișierului de import. Nu au fost importate întrebările. Pentru a importa orice întrebare bună, încercați din nou setând „Stop când apare eroare” la „Nu”';
$string['importquestions'] = 'Importă întrebări din fișier';
$string['importquestions_help'] = 'Această funcție permite activarea întrebărilor într-o varietate de formate pentru a fi importate prin fișier text. Rețineți că fișierul trebuie să utilizeze codificarea UTF-8.';
$string['importquestions_link'] = 'question/import';
$string['importwrongfileencoding'] = 'Fișierul pe care l-ați selectat nu folosește encodarea caracterelor UTF-8. Fișierele {$a} trebuie să folosească UTF-8.';
$string['importwrongfiletype'] = 'Tipul de fișier selectat ({$a->actualtype}) nu corespunde tipului de fișier așteptat de acest format de import ({$a->expectedtype}).';
$string['impossiblechar'] = 'Caracter imposibil {$a} detectat caracter de paranteză';
$string['includesubcategories'] = 'Afișează și  întrebările din subcategorii';
$string['incorrect'] = 'Incorect';
$string['incorrectfeedback'] = 'Pentru orice răspuns incorect';
$string['incorrectfeedbackdefault'] = 'Răspunsul dumneavoastră este incorect.';
$string['information'] = 'Informații';
$string['invalidanswer'] = 'Răspuns incomplet';
$string['invalidarg'] = 'Nu există argumente valide furnizate sau configurarea serverului este incorectă';
$string['invalidcategoryidforparent'] = 'ID-ul de categorie nu este valid pentru părinte!';
$string['invalidcategoryidtomove'] = 'Id-ul categoriei care trebuie mutată nu este valid!';
$string['invalidconfirm'] = 'String-ul de confirmare a fost incorect';
$string['invalidcontextinhasanyquestions'] = 'Contextul trecut la question_context_has_any_questions  nu este valid';
$string['invalidgrade'] = 'Notele ({$a}) nu corespund opțiunilor de notare - întrebare omisă';
$string['invalidgradequestion'] = 'Notele ({$a->grades}) nu corespund cu opțiunile de notare - întrebare \'{$a->question}\' omisă.';
$string['invalidpenalty'] = 'Penalizare nevalidă';
$string['invalidwizardpage'] = 'Wizard page nespecificată sau incorectă!';
$string['lastmodifiedby'] = 'Ultima modificare efectuată de';
$string['lasttry'] = 'Ultima încercare';
$string['linkedfiledoesntexist'] = 'Fişierul referit {$a} nu există';
$string['makechildof'] = 'Transformă în subordonat al \'{$a}\'';
$string['makecopy'] = 'Creează o copie';
$string['maketoplevelitem'] = 'Trasferă pe primul nivel';
$string['manualgradeinvalidformat'] = 'Acesta nu este un număr valid.';
$string['manualgradeoutofrange'] = 'Nota este în afata pragurilor admise';
$string['manuallygraded'] = 'Notată manual {$a->mark} cu comentariul: {$a->comment}';
$string['mark'] = 'Punctaj';
$string['markedoutof'] = 'Marcat din';
$string['markedoutofmax'] = 'Marcat din {$a}';
$string['markoutofmax'] = 'Marcat {$a->mark} din {$a->max}';
$string['marks'] = 'Puncte';
$string['matchgrades'] = 'Potrivire note';
$string['matchgrades_help'] = 'Notele importate trebuie să se potrivească cu una dintre listele fixe de note valide - 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5 , 0 (de asemenea, valori negative).

Dacă nu, există două opțiuni:

* Eroare dacă nota nu este listată - Dacă o întrebare conține note care nu au fost găsite în listă, se afișează o eroare și această întrebare nu va fi importată
* Cea mai apropiată notă dacă nu este listată - Dacă se găsește o notă care nu se potrivește cu o valoare din listă, nota se schimbă la cea mai apropiată valoare de potrivire din listă';
$string['matchgradeserror'] = 'Eroare dacă nota nu este listată';
$string['matchgradesnearest'] = 'Cea mai apropiată notă dacă nu este listată';
$string['missingcourseorcmid'] = 'Trebuie să specificați courseid sau  cmid pentru a print_question.';
$string['missingcourseorcmidtolink'] = 'Trebuie să specificați courseid sau cmid pentru a get_question_edit_link.';
$string['missingimportantcode'] = 'Acest tip de întrebare nu are un cod important şi anume {$a}.';
$string['missingoption'] = 'Întrebarea cloze {$a} nu are opțiuni';
$string['modified'] = 'Ultima salvare';
$string['move'] = 'Mută din {$a} şi schimbă linkuri.';
$string['movecategory'] = 'Mută categoria';
$string['movedquestionsandcategories'] = 'Întrebările şi categoriile de întrebări au fost transferate din {$a->oldplace} în {$a->newplace}.';
$string['movelinksonly'] = 'Schimbaţi locaţia de destinaţie a link-ului, nu transferaţi sau copiaţi fişiere';
$string['moveq'] = 'Mută întrebarea(întrebările)';
$string['moveqtoanothercontext'] = 'Mută întrebare în alt context.';
$string['moveto'] = 'Mută în';
$string['movingcategory'] = 'Se transferă categoria';
$string['movingcategoryandfiles'] = 'Sunteţi sigur că doriţi să transferaţi categoria {$a->name} şi toate sub-categoriile corespunzătoare în contextul "{$a->contextto}"?<br /> În {$a->fromareaname} au fost identificate {$a->urlcount} fişiere referite din întrebări, doriţi să le copiaţi sau să le transferaţi în {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Sunteţi sigur că doriţi să transferaţi categoria "{$a->name}" împreună cu toate categoriile subordonate în contextul "{$a->contextto}"?';
$string['movingquestions'] = 'Mută întrebări și fișiere asociate';
$string['movingquestionsandfiles'] = 'Sunteți sigur(ă) că doriți să mutați întrebarea(întrebările) {$a->questions} în context pentru <strong>"{$a->tocontext}"</strong>?<br /> Am găsit <strong>{$a->urlcount} files</strong> cu link-uri de la această(aceste) întrebare(întrebări), doriți să le copiați  sau să le mutați în {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Sunteți sigur(ă) că doriți să mutați întrebarea(întrebările) în context pentru <strong>"{$a->tocontext}"</strong>?<br /> Nu există <strong>fișiere</strong> cu link de la aceste întrebări în {$a->fromareaname}.';
$string['needtochoosecat'] = 'Alegeţi categoria în care doriţi să transferaţi această întrebare sau apăsaţi butonul Anulare.';
$string['nocate'] = 'Nu există o asemenea categorie {$a}!';
$string['noconditionspecified'] = 'Te rugăm să specifici o condiție';
$string['nopermissionadd'] = 'Nu aveţi permisiunea să adăugaţi întrebări în această secţiune.';
$string['nopermissionedit'] = 'Nu aveți permisiunea să editați întrebările din acest loc.';
$string['nopermissionmove'] = 'Nu aveţi permisiunea să transferaţi întrebări din cadrul acestei secţiuni. Va trebui să salvaţi întrebarea în această categorie sau să o salvaţi cu un alt nume.';
$string['noprobs'] = 'Nu s-au identificat probleme în baza de date cu întrebări creată de dumneavoastră.';
$string['noquestionbanks'] = 'Nu s-a găsit niciun plugin Banca de întrebări';
$string['noquestions'] = 'Nu s-au găsit întrebări care ar putea fi exportate. Asigurați-vă că ați selectat o categorie pentru export  care conține întrebări.';
$string['noquestionsinfile'] = 'Nu există întrebări în fişierul de import';
$string['noresponse'] = '[Fără răspuns]';
$string['notagfiltersapplied'] = 'Nu s-au aplicat filtre de etichete';
$string['notanswered'] = 'Nu a primit răspuns';
$string['notchanged'] = 'Nu există schimbări de la ultima încercare';
$string['notenoughanswers'] = 'Acest tip de întrebare necesită cel puțin {$a} răspunsuri';
$string['notenoughdatatoeditaquestion'] = 'N-au fost specificate: id-ul întrebării, id-ul categoriei şi tipul întrebării.';
$string['notenoughdatatomovequestions'] = 'Va trebui să furnizaţi un id pentru fiecare întrebare pe care doriţi să o transferaţi.';
$string['notgraded'] = 'Fără notă';
$string['notshown'] = 'Neafișat';
$string['notyetanswered'] = 'Nu a primit răspuns încă';
$string['notyourpreview'] = 'Această previzualizare nu vă aparține';
$string['novirtualquestiontype'] = 'Nu există tip de întrebare virtuală pentru tipul de întrebare {$a}';
$string['numqas'] = 'Numărul de încercări pentru întrebare';
$string['numquestions'] = 'Număr de întrebări';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} hidden +{$a->numdraft} draft)';
$string['options'] = 'Opțiuni';
$string['page-question-category'] = 'Pagina categoriei întrebării';
$string['page-question-edit'] = 'Pagina de editare a întrebării';
$string['page-question-export'] = 'Pagina de export a întrebării';
$string['page-question-import'] = 'Pagina de import a întrebării';
$string['page-question-x'] = 'Orice pagină de întrebări';
$string['parent'] = 'Parent';
$string['parentcategory'] = 'Categorie';
$string['parentcategory_help'] = 'Categoria părinte este cea în care va fi plasată noua categorie. „Sus” înseamnă că această categorie nu este inclusă în nicio altă categorie. Contextele categoriilor sunt afișate cu caractere aldine. Trebuie să existe cel puțin o categorie în fiecare context.';
$string['parentcategory_link'] = 'question/category';
$string['parenthesisinproperclose'] = 'Paranteza de dinaintea  ** nu este închisă corect  în {$a}**';
$string['parenthesisinproperstart'] = 'Paranteza de dinaintea ** nu este deschisă corect în {$a}**';
$string['parsingquestions'] = 'Se analizează întrebarea din fișierul importat';
$string['partiallycorrect'] = 'Parțial corect';
$string['partiallycorrectfeedback'] = 'Pentru orice răspuns parțial corect';
$string['partiallycorrectfeedbackdefault'] = 'Răspunsul dumneavoastră este parțial corect.';
$string['penaltyfactor'] = 'Factor penalizare';
$string['penaltyfactor_help'] = 'Această setare determină ce fracțiune din punctajul obținut se scade pentru fiecare răspuns greșit. Este aplicabil numai în cazul în care testul se execută în modul adaptiv.

Factorul de penalizare ar trebui să fie un număr între 0 și 1. Un factor de penalizare 1 înseamnă că studentul trebuie să dea din prima încrecare răspunsulcorect în primul său răspuns pentru a obține punctajul. Un factor de penalizare de 0 înseamnă că elevul poate încerca de câte ori vrea și primește în continuare punctajul complet.';
$string['penaltyforeachincorrecttry'] = 'Penalizare pentru fiecare încercare incorectă';
$string['penaltyforeachincorrecttry_help'] = 'Atunci când întrebările sunt rulate folosind comportamentul „Interactiv cu încercări multiple” sau „Modul adaptiv”, astfel încât cursantul să aibă mai multe încercări pentru a corecta întrebarea, atunci această opțiune controlează cât de mult este penalizată fiecare încercare incorectă.

Penalizarea este o proporție din nota totală per întrebare, deci dacă întrebarea valorează trei puncte, iar pedeapsa este 0,3333333, atunci cursantul va primi 3 puncte dacă răspunde corect la întrebare din prima încercare, 2 dacă răspunde bine la doua încercare, iar unul dacă răspunde bine la a treia încercare.

Pentru unele întrebări cu mai multe părți (compuse), această logică de notare se aplică separat fiecărei parte a întrebării. Detaliile depind de tipul de întrebare și pot fi complicate, dar principiul este de a acorda cursanților credit pentru cunoștințele pe care le-au demonstrat cât mai corect posibil.';
$string['permissionedit'] = 'Editează această întrebare';
$string['permissionmove'] = 'Mută această întrebare';
$string['permissionsaveasnew'] = 'Salvează ca întrebare nouă';
$string['permissionto'] = 'Aveţi permisiunea să :';
$string['previewquestion'] = 'Previzualizare întrebare: {$a}';
$string['privacy:metadata:database:question'] = 'Detalii despre o întrebare specifică';
$string['privacy:metadata:database:question:createdby'] = 'Cine a creat întrebarea';
$string['privacy:metadata:database:question:generalfeedback'] = 'Feedback-ul general pentru această întrebare';
$string['privacy:metadata:database:question:modifiedby'] = 'Cine a actualizat ultima dată întrebarea.';
$string['privacy:metadata:database:question:name'] = 'Denumirea întrebării.';
$string['privacy:metadata:database:question:questiontext'] = 'Textul întrebării.';
$string['privacy:metadata:database:question:timecreated'] = 'Când a fost creată întrebarea.';
$string['privacy:metadata:database:question:timemodified'] = 'Când a fost actualizată întrebarea.';
$string['privacy:metadata:database:question_attempt_step_data'] = 'Pașii de încercare a întrebărilor pot avea date suplimentare specifice acelui pas. Datele sunt stocate în tabelul step_data.';
$string['privacy:metadata:database:question_attempt_step_data:name'] = 'Numele elementului de date.';
$string['privacy:metadata:database:question_attempt_step_data:value'] = 'Valoarea elementului de date.';
$string['privacy:metadata:database:question_attempt_steps'] = 'Fiecare încercare de întrebare are un număr de pași pentru a indica diferitele faze de la început, la finalizare până la notare. Acest tabel stochează informațiile pentru fiecare dintre acești pași.';
$string['privacy:metadata:database:question_attempt_steps:fraction'] = 'Nota care a fost acordată acestei încercări a crescut la o valoare de 1';
$string['privacy:metadata:database:question_attempt_steps:state'] = 'Starea acestei încercări trece la sfârșitul tranziției pasului.';
$string['privacy:metadata:database:question_attempt_steps:timecreated'] = 'Data și ora la care a început această etapă de tranziție.';
$string['privacy:metadata:database:question_attempt_steps:userid'] = 'Utilizatorul care a efectuat tranziția pasului.';
$string['privacy:metadata:database:question_attempts'] = 'Informațiile despre o încercare la o anumită întrebare.';
$string['privacy:metadata:database:question_attempts:flagged'] = 'O indicație că utilizatorul a marcat această întrebare în timpul încercării.';
$string['privacy:metadata:database:question_attempts:responsesummary'] = 'Un rezumat al răspunsului la întrebare.';
$string['privacy:metadata:database:question_attempts:timemodified'] = 'Ora actualizării încercării.';
$string['privacy:metadata:database:question_bank_entries'] = 'Detalii despre o anumită întrebare din banca de întrebări.';
$string['privacy:metadata:database:question_bank_entries:ownerid'] = 'Utilizatorul care a creat întrebarea.';
$string['privacy:metadata:link:qbehaviour'] = 'Subsistemul întrebări folosește tipul de plugin Comportament al întrebării.';
$string['privacy:metadata:link:qformat'] = 'Subsistemul Întrebări utilizează tipul de plug-in Format Întrebări în scopul importării și exportării întrebărilor în diferite formate.';
$string['privacy:metadata:link:qtype'] = 'Subsistemul Întrebări interacționează cu tipul de întrebare care conține diferitele tipuri de întrebări.';
$string['published'] = 'partajate';
$string['qbanknotfound'] = 'Plugin-ul \'{$a}\' Banca de întrebări nu există sau nu este recunoscut.';
$string['qtypeveryshort'] = 'T';
$string['question_version'] = 'Versiunea întrebării';
$string['questionaffected'] = '<a href="{$a->qurl}">Întrebarea "{$a->name}" ({$a->qtype})</a> este în această categorie dar este, de asemenea, folosită în <a href="
{$a->qurl}">quiz "{$a->quizname}"</a> în alt curs
"{$a->coursename}".';
$string['questionbank'] = 'Banca de întrebări';
$string['questionbanknavigation'] = 'Navigare terțiară banca de întrebări';
$string['questionbehaviouradminsetting'] = 'Setări funcționalitate intrebare';
$string['questionbehavioursdisabled'] = 'Funcționalități întrebare pentru a fi dezactivate';
$string['questionbehavioursdisabledexplained'] = 'Introduceți o listă de comportamente separate prin virgulă care nu doriți să apară în meniul derulant.';
$string['questionbehavioursorder'] = 'Ordinea tipurilor de comportament al întrebărilor';
$string['questionbehavioursorderexplained'] = 'Introduceți o listă de comportamente ale întrebărilor separate prin virgulă în ordinea în care doriți să apară în meniul derulant.';
$string['questioncategories'] = 'Categorii de întrebări';
$string['questioncategory'] = 'Categoria întrebării';
$string['questioncatsfor'] = 'Categoriile de  întrebări pentru {$a}.';
$string['questiondoesnotexist'] = 'Această întrebare nu există.';
$string['questionformtagheader'] = '{$a} etichete';
$string['questionidmismatch'] = 'Nu corespund id-urile întrebării';
$string['questionloaderror'] = 'Nu s-au putut încărca opțiunile întrebării.';
$string['questionname'] = 'Denumirea întrebării';
$string['questionnameandquestionversion'] = '{$a->name} v{$a->version}';
$string['questionnamecopy'] = '{$a} (copy)';
$string['questionno'] = 'Întrebare {$a}';
$string['questionpreviewdefaults'] = 'Previzualizare implicită a întrebării';
$string['questionpreviewdefaults_desc'] = 'Aceste valori implicite sunt utilizate atunci când un utilizator previzualizează pentru prima dată o întrebare din banca de întrebări. Odată ce un utilizator a previzualizat o întrebare, preferințele sale personale sunt stocate ca preferințe ale utilizatorului.';
$string['questions'] = 'Întrebări';
$string['questionsaveerror'] = 'Apar erori în timpul salvării întrebării - ({$a})';
$string['questionsinuse'] = '* Indică întrebări care nu pot fi șterse deoarece sunt folosite. În schimb, vor fi ascunse în banca de întrebări, cu excepția cazului în care setezi „Afișează întrebări ascunse” la \'\'Da\'.';
$string['questionsmovedto'] = 'Întrebări care sunt încă în uz au fost transferate în "{$a}" în categoria cursului principal.';
$string['questionsrescuedfrom'] = 'Întrebări salvate din contextul {$a}.';
$string['questionsrescuedfrominfo'] = 'Aceste întrebări (dintre care unele ar putea fi invizibile) au fost salvate atunci când contextul {$a} a fost şters deoarece sunt încă utilizate în cadrul unor chestionare şi a altor activităţi.';
$string['questiontags'] = 'Etichete de întrebări';
$string['questiontext'] = 'Textul întrebării';
$string['questiontype'] = 'Tipul întrebării';
$string['questionuse'] = 'Foloseşte întrebare în această activitate';
$string['questionvariant'] = 'Variabilă întrebării';
$string['questionx'] = '{$a} întrebare';
$string['requiresgrading'] = 'Trebuie să fie notată';
$string['responsehistory'] = 'Istoricul răspunsurilor';
$string['restart'] = 'Începeți din nou';
$string['restartwiththeseoptions'] = 'Salvează opțiunile pentru previzualizare și începe din nou';
$string['restoremultipletopcats'] = 'Fișierul copie de rezervă conține mai multe categorii de întrebări de nivel superior pentru contextul {$a}.';
$string['reviewresponse'] = 'Previzualizare răspuns';
$string['rightanswer'] = 'Răspunsul corect';
$string['rightanswer_help'] = 'Un rezumat generat automat al răspunsului corect. Acest lucru poate fi limitat, deci vă recomandăm să explicați soluția corectă în feedback-ul general pentru întrebare și să dezactivați această opțiune.';
$string['save'] = 'Salvează';
$string['savechangesandcontinueediting'] = 'Salvează modificările și continuă editarea';
$string['saved'] = 'Salvat: {$a}';
$string['saveflags'] = 'Salvează status-ul flag-urilor';
$string['selectacategory'] = 'Selectează o categorie:';
$string['selectaqtypefordescription'] = 'Selectați un tip de întrebare pentru a-i vedea descrierea.';
$string['selectcategoryabove'] = 'Selectează o categorie anterioară';
$string['selectquestionsforbulk'] = 'Selectați întrebări pentru acțiuni în bloc';
$string['settingsformultipletries'] = 'Încercări multiple';
$string['shareincontext'] = 'Partajează în context pentru {$a}';
$string['shortversioninfo'] = 'v{$a->version} (a{$a->latestversion})';
$string['shortversioninfolatest'] = 'v{$a->version} (latest)';
$string['showhidden'] = 'Afișează întrebările ascunde';
$string['showmarkandmax'] = 'Afișați punctul și valoarea maximă';
$string['showmaxmarkonly'] = 'Afișați doar punctaj maximă';
$string['shown'] = 'Afișat';
$string['shownumpartscorrect'] = 'Afișează numărul răspunsurilor corecte';
$string['shownumpartscorrectwhenfinished'] = 'Afișează numărul de răspunsuri corecte odată ce întrebarea este închisă';
$string['showquestiontext'] = 'Se afișează textul întrebării în lista de întrebări?';
$string['showquestiontext_full'] = 'Da, cu imagini, fișiere media, etc';
$string['showquestiontext_off'] = 'Nu';
$string['showquestiontext_plain'] = 'Da, doar text';
$string['specificfeedback'] = 'Feedback specific';
$string['specificfeedback_help'] = 'Feedback care depinde de răspunsul dat de cursant';
$string['started'] = 'Început';
$string['state'] = 'Stare';
$string['step'] = 'Pas';
$string['steps'] = 'Pași';
$string['stoponerror'] = 'Stop când apare eroare';
$string['stoponerror_help'] = 'Această setare stabilește dacă procesul de import este stopat atunci când este detectată o eroare, nicio întrebare nefiind importată, sau întrebările care conțin erori sunt ignorate și întrebările valide sunt importate.';
$string['submissionoutofsequence'] = 'Acces în afara secvenței. Vă rugăm să nu faceți clic pe butonul Înapoi atunci când lucrați la întrebări la test.';
$string['submissionoutofsequencefriendlymessage'] = 'Ați introdus date din afara secvenței normale. Acest lucru se întâmplă dacă folosiți funcțiile Back și Forward ale browser-ului.  Vă rugăm să nu le folosiți în timpul testului. De asemenea, se întâmplă când dați click pe ceva în timp ce pagina se încarcă. Click <strong>Continue</strong>  pentru a relua.';
$string['submit'] = 'Trimite';
$string['submitandfinish'] = 'Trimite și finalizează';
$string['submitted'] = 'Trimite: {$a}';
$string['tagarea_question'] = 'Întrebări';
$string['technicalinfo'] = 'Informație tehnică';
$string['technicalinfo_help'] = 'Această informație tehnică este probabil utilă numai pentru dezvoltatorii care lucrează la noi tipuri de întrebări. Poate fi, de asemenea, de ajutor atunci când încercați să diagnosticați întrebările cu probleme.';
$string['technicalinfomaxfraction'] = 'Fracție maximă: {$a}';
$string['technicalinfominfraction'] = 'Fracție minimă: {$a}';
$string['technicalinfoquestionsummary'] = 'Rezumatul întrebării';
$string['technicalinforesponsesummary'] = 'Rezumatul răspunsului: {$a}';
$string['technicalinforightsummary'] = 'Rezumatul răspunsului corect: {$a}';
$string['technicalinfostate'] = 'Status-ul întrebării: {$a}';
$string['technicalinfovariant'] = 'Variantă întrebare: {$a}';
$string['tofilecategory'] = 'Scrie categorie în fişier';
$string['tofilecontext'] = 'Scrie context în fişier';
$string['topfor'] = 'Top pentru {$a}';
$string['uninstallbehaviour'] = 'Dezinstalează această funcționalitate a întrebării';
$string['uninstallqtype'] = 'Dezinstalează acest tip de întrebare';
$string['unknown'] = 'Necunoscut';
$string['unknownbehaviour'] = 'Funcționalitate necunoscută: {$a}.';
$string['unknownorunhandledtype'] = 'Tip de întrebare necunoscut sau care nu se poate modifica: {$a}';
$string['unknownquestion'] = 'Întrebare necunoscută: {$a}.';
$string['unknownquestioncatregory'] = 'Categorie a întrebării necunoscută: {$a}.';
$string['unknownquestiontype'] = '{$a} este un tip de întrebare necunoscut.';
$string['unknowntolerance'] = 'Tip de toleranță necunoscut {$a}';
$string['unpublished'] = 'nu este partajat';
$string['unusedcategorydeleted'] = 'Această categorie a fost ștearsă, deoarece, după ștergerea cursului, întrebările nu mai sunt utilizate.';
$string['updatedisplayoptions'] = 'Actualizează opțiunile de afișare';
$string['upgradeproblemcategoryloop'] = 'A fost identificată o problemă la actualizarea categoriilor de întrebări. Există o buclă în structura arborescentă a categoriilor de întrebări. ID-urile de categorii afectate de această problemă sunt {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Nu a putut fi actualizată categoria de întrebări {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'S-a identificat o problemă la actualizarea categoriilor de întrebări. Categoria {$a->id} se referă la categoria principală {$a->parent} care nu mai există. Categoria subordonată a fost transferată în altă categorie principală.';
$string['version_selection'] = 'Versiunea {$a->versiune}';
$string['versioninfo'] = 'Versiune {$a->version} (a{$a->latestversion})';
$string['versioninfolatest'] = 'Versiune {$a->version} (latest)';
$string['whethercorrect'] = 'Dacă este corect';
$string['whethercorrect_help'] = 'Aceasta acoperă atât descrierea textuală „Corect”, „Parțial corect” sau „Incorect”, cât și orice evidențiere colorată care transmite aceleași informații.';
$string['whichtries'] = 'care întrebări';
$string['withselected'] = 'Acțiuni cu ce ați selectat';
$string['wrongprefix'] = 'nameprefix {$a} formatat greșit';
$string['xoutofmax'] = '{$a->mark} din {$a->max}';
$string['yougotnright'] = 'Ați selectat în mod corect {$a->num}.';
$string['youmustselectaqtype'] = 'Trebuie să selectați un tip de întrebare.';
$string['yourfileshoulddownload'] = 'Fişierul dumneavoastră de export ar trebui să înceapă să se descarce în curând. Dacă acest lucru nu se întâmplă executaţi clic <a href="{$a}">aici</a>. Categoria principală a fost schimbată pentru remedierea problemei.';
