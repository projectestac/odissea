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
 * Strings for component 'adaptivequiz', language 'ro', version '4.4'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated'] = 'Abilitatea estimată';
$string['abilityestimated_help'] = 'Capacitatea estimată a unui examinator se aliniază cu dificultatea întrebării la care testamentul are o probabilitate de 50% să răspundă corect la întrebare. Pentru a identifica nivelul de performanță, potriviți valoarea abilității cu intervalul de nivel de întrebări (vezi intervalul după simbolul „/”).';
$string['activityreports'] = 'Raport încercări';
$string['adaptivequiz:addinstance'] = 'Adăugați un nou test adaptiv';
$string['adaptivequiz:attempt'] = 'Încercare test adaptiv';
$string['adaptivequiz:reviewattempts'] = 'Examinați încercările testului adaptiv';
$string['adaptivequiz:viewreport'] = 'Vizualizați rapoartele testului adaptiv';
$string['adaptivequizname'] = 'Denumire';
$string['adaptivequizname_help'] = 'Introduceți denumirea instanței Test Adaptiv';
$string['all_attempts_deleted'] = 'Toate încercările Testului Adaptiv au fost șterse';
$string['all_grades_removed'] = 'Toate notele Testului Adaptiv au fost șterse';
$string['answer'] = 'Răspuns';
$string['answers_display_name'] = 'Răspunsuri';
$string['attempt_questiondetails'] = 'Detalii întrebare';
$string['attempt_state'] = 'Status încercare';
$string['attempt_summary'] = 'Rezumatul încercării';
$string['attempt_user'] = 'Utilizator';
$string['attemptclosed'] = 'Încercarea a fost închisă manual.';
$string['attemptclosedstatus'] = 'Închis manual de {$a->current_user_name} (ID utilizator: {$a->current_user_id}) pe {$a->now}.';
$string['attemptdeleted'] = 'Încercare ștearsă pentru {$a->name} trimisă pe {$a->timecompleted}';
$string['attemptfeedback'] = 'Feedback încercare';
$string['attemptfeedback_help'] = 'Feedback-ul încercării este afișat utilizatorului odată ce încercarea este finalizată';
$string['attemptfeedbackdefaulttext'] = 'Ai terminat încercarea, mulțumesc că ai parcurs testul!';
$string['attemptfinishedtimestamp'] = 'Timpul de finalizare a încercării';
$string['attemptfirst'] = 'Prima incercare';
$string['attemptlast'] = 'Ultima incercare';
$string['attemptnofirstquestion'] = 'Ne pare rău, dar nu am putut defini prima întrebare pentru a începe încercarea, este posibil ca testul să fie configurat greșit.';
$string['attemptquestion_ability'] = 'Măsurare capacitate';
$string['attemptquestion_abilitylogits'] = 'Capacitate măsurată (logit)';
$string['attemptquestion_difficulty'] = 'Dificultate întrebare (logit)';
$string['attemptquestion_diffsum'] = 'Suma dificultăților';
$string['attemptquestion_level'] = 'Nivel întrebare';
$string['attemptquestion_rightwrong'] = 'Corect/Greșit';
$string['attemptquestion_stderr'] = 'Eroare standard (&plusmn;&nbsp;logits)';
$string['attemptsallowed'] = 'Încercări permise';
$string['attemptsallowed_help'] = 'De câte ori un cursant poate încerca această activitate';
$string['attemptstarttime'] = 'Ora de început a încercării';
$string['attemptstate'] = 'Starea încercării';
$string['attemptstopcriteria'] = 'Motivul opririi încercării';
$string['attemptsusernoprevious'] = 'Încă nu ați început acest test.';
$string['attemptsuserprevious'] = 'Încercările tale anterioare';
$string['attempttotaltime'] = 'Timp total (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Înapoi la toate întrebările';
$string['bestscore'] = 'Cel mai bun scor';
$string['bestscorestderror'] = 'Eroare standard';
$string['browsersecurity'] = 'Securitatea browserului';
$string['browsersecurity_help'] = 'Dacă este selectată opțiunea „Pop-up în ecran complet cu securitate JavaScript”, testul va începe doar dacă studentul are un browser web cu JavaScript activat, testul apare într-o fereastră pop-up cu ecran complet care acoperă toate celelalte ferestre și nu are navigare controalele și elevii sunt împiedicați, pe cât posibil, să utilizeze facilități precum copiere și lipire';
$string['calcerrorwithinlimits'] = 'Eroarea standard calculată de {$a->calerror} se încadrează în limitele impuse de activitate {$a->definederror}';
$string['closeattempt'] = 'Închide încercarea';
$string['completionattemptcompletedcminfo'] = 'Completează o întrebare';
$string['confirmcloseattempt'] = 'Sunteți sigur că doriți să închideți și să finalizați această încercare de {$a->name}?';
$string['confirmcloseattemptscore'] = '{$a->num_questions} întrebări au primit răspuns, iar scorul de până acum este {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Această încercare a fost începută la {$a->started} și ultima actualizare la {$a->modified}.';
$string['confirmdeleteattempt'] = 'Confirmarea ștergerii încercării din {$a->name} trimisă pe {$a->timecompleted}';
$string['deleteattemp'] = 'Șterge încercarea';
$string['discrimination_display_name'] = 'Discriminare';
$string['downloadcsv'] = 'Descarcă CSV';
$string['enterrequiredpassword'] = 'Introduceți parola necesară';
$string['errorattemptstate'] = 'S-a identificat o eroare la determinarea stării încercării';
$string['errorclosingattempt_alreadycomplete'] = 'Această încercare este deja finalizată, nu poate fi închisă manual.';
$string['errorfetchingquest'] = 'Imposibil de preluat o întrebare pentru nivelul {$a->level}';
$string['errorlastattpquest'] = 'Eroare la verificarea valorii răspunsului pentru ultima întrebare încercată';
$string['errornumattpzero'] = 'Eroarea la numărul de întrebări încercate este egală cu zero, dar utilizatorul a trimis un răspuns la întrebarea anterioară';
$string['errorsumrightwrong'] = 'Suma răspunsurilor corecte și incorecte nu este egală cu numărul total de întrebări încercate';
$string['eventattemptcompleted'] = 'Încercare finalizată';
$string['formelementdecimal'] = 'Introduceți un număr zecimal. Lungime maxim 10 cifre și maxim 5 cifre la dreapta punctului zecimal';
$string['formelementempty'] = 'Introduceți un număr întreg pozitiv de la 1 la 999';
$string['formelementnegative'] = 'Introduceți un număr pozitiv de la 1 la 999';
$string['formelementnumeric'] = 'Introduceți o valoare numerică de la 1 la 999';
$string['formlowlevelgreaterthan'] = 'Cel mai mic nivel trebuie să fie mai mic decât cel mai înalt nivel';
$string['formminquestgreaterthan'] = 'Numărul minim de întrebări trebuie să fie mai mic decât numărul maxim de întrebări';
$string['formquestionpool'] = 'Selectați cel puțin o categorie de întrebări';
$string['formstartleveloutofbounds'] = 'Nivelul de pornire trebuie să fie un număr care se află între cel mai mic și cel mai înalt nivel';
$string['formstderror'] = 'Trebuie să introduceți un procent mai mic de 50 și mai mare sau egal cu 0';
$string['functiondisabledbysecuremode'] = 'Această funcționalitate este dezactivată în prezent';
$string['gradehighest'] = 'Cea mai mare notă';
$string['grademethod'] = 'Metoda de notare';
$string['grademethod_help'] = 'Când sunt permise mai multe încercări, sunt disponibile următoarele metode pentru calcularea notei finale a testului:

* Cea mai mare notă dintre toate încercările
* Prima încercare (toate celelalte încercări sunt ignorate)
* Ultima încercare (toate celelalte încercări sunt ignorate)';
$string['graphlegend_error'] = 'Eroare standard';
$string['highestlevel'] = 'Cel mai înalt nivel de dificultate';
$string['highestlevel_help'] = 'Cel mai înalt sau cel mai dificil nivel din care testul poate selecta întrebări. În timpul unei încercări, activitatea nu va depăși acest nivel de dificultate';
$string['highlevelusers'] = 'Utilizatori peste nivelul întrebării';
$string['id'] = 'ID';
$string['indvuserreport'] = 'Raportul individual al încercărilor unui utilizator   pentru {$a}';
$string['leveloutofbounds'] = 'Nivelul solicitat {$a->level} în afara limitelor pentru încercare';
$string['lowestlevel'] = 'Cel mai scăzut nivel de dificultate';
$string['lowestlevel_help'] = 'Cel mai mic sau cel mai puțin dificil nivel din care testul poate selecta întrebări. În timpul unei încercări, activitatea nu va depăși acest nivel de dificultate';
$string['lowlevelusers'] = 'Utilizatori sub nivelul întrebărilor';
$string['maximumquestions'] = 'Număr maxim de întrebări';
$string['maximumquestions_help'] = 'Numărul maxim de întrebări pe care cursantul le poate încerca';
$string['maxquestattempted'] = 'Numărul maxim de întrebări încercate';
$string['midlevelusers'] = 'Utilizatorii din apropierea nivelului de întrebare';
$string['minimumquestions'] = 'Număr minim de întrebări';
$string['minimumquestions_help'] = 'Numărul minim de întrebări pe care trebuie să le încerce cursantul';
$string['missingtagprefix'] = 'Lipsește prefixul etichetei';
$string['modulename'] = 'Test adaptiv';
$string['modulename_help'] = 'Activitatea Test adaptiv (Adaptive Quiz) permite profesorului să creeze teste care măsoară eficient abilitățile și cunoștințele participanților. Testele adaptive sunt alcătuite din întrebări selectate din banca de întrebări care pot fi etichetate cu un nivel de dificultate diferit. Întrebările sunt alese pentru a se potrivi cu nivelul estimat de abilitate al cursantului care parcurge testul. Dacă studentul reușește o întrebare, o întrebare mai dificilă este prezentată în continuare. Dacă studentul răspunde incorect la o întrebare, o întrebare mai puțin dificilă este prezentată în continuare. Această tehnică se va dezvolta într-o secvență de întrebări care converg la nivelul de cunoștințe al cursantului. Testul se oprește atunci când abilitatea cursantului este determinată cu precizia necesară.

Această activitate este cea mai potrivită pentru a determina măsurarea abilității cursantului pe o scară unidimensională. Deși scara poate fi foarte largă, întrebările trebuie să ofere toate o măsură a capacității sau aptitudinii pe aceeași scară. Într-un test de plasare, de exemplu, întrebările scăzute pe scara la care novicii sunt capabili să răspundă corect ar trebui, de asemenea, să răspundă de către experți, în timp ce întrebările mai mari de pe scară ar trebui să răspundă numai de către experți sau o ghicitoare. Întrebările care nu discriminează între persoanele care au abilități diferite vor face testul ineficient și pot oferi rezultate neconcludente.

Întrebările utilizate în testul adaptiv trebuie:
 * să fie marcat automat ca corect / incorect
 * să fie etichetați cu dificultatea lor folosind „adpq_” urmat de un număr întreg pozitiv care se încadrează în intervalul pentru test

Testul Adaptiv poate fi configurat să:

 * definiți gama de întrebări-dificultăți / abilități de utilizator care trebuie măsurate. 1-10, 1-16 și 1-100 sunt exemple de intervale valide.
 * definiți precizia necesară înainte ca testul să fie oprit. Adesea, o eroare de 5% în măsurarea abilității este o regulă de oprire adecvată
 * necesită un număr minim de întrebări pentru a primi răspuns
 * necesită un număr maxim de întrebări la care se poate răspunde

Această descriere și procesul de testare din această activitate se bazează pe <a href="http://www.rasch.org/memo69.pdf"> Computer-Adaptive Testing: O metodologie al cărei timp a venit </a> de John Michael Linacre, dr. Laboratorul de psihometrie MESA - Universitatea din Chicago. Memorandumul MESA nr. 69.';
$string['modulenameplural'] = 'Test adaptiv';
$string['na'] = 'N/A';
$string['name'] = 'Denumire';
$string['noattemptsallowed'] = 'Nu mai sunt permise încercări la această activitate';
$string['nonewmodules'] = 'Nu s-au găsit instanțe ale activității test adaptiv';
$string['nopermission'] = 'Nu aveți permisiunea de a vizualiza această resursă';
$string['notinprogress'] = 'Această încercare nu este în desfășurare.';
$string['notyourattempt'] = 'Aceasta nu este încercarea ta de a face activitatea';
$string['numofattemptshdr'] = 'Număr de încercări';
$string['percent_correct_display_name'] = '% Corect';
$string['pluginadministration'] = 'Test adaptiv';
$string['pluginname'] = 'Test adaptiv';
$string['question_report'] = 'Analiza întrebărilor';
$string['questionanalysisbtn'] = 'Analiza întrebărilor';
$string['questionnumber'] = 'Întrebarea #';
$string['questionpool'] = 'Lot de întrebări';
$string['questionpool_help'] = 'Selectați categoria (categoriile) de întrebări din care se vor extrage întrebările în timpul unei încercări.';
$string['questions_report'] = 'Raport de întrebări';
$string['questionsattempted'] = 'Suma întrebărilor încercate';
$string['questionspoolerrornovalidstartingquestions'] = 'Categoriile de întrebări selectate nu conțin întrebări care sunt etichetate corespunzător pentru a se potrivi cu nivelul de dificultate de început selectat.';
$string['recentactquestionsattempted'] = 'Întrebări încercate: {$a}';
$string['recentattemptstate'] = 'Starea încercării:';
$string['recentcomplete'] = 'Efectuat';
$string['recentinprogress'] = 'În progres';
$string['reportattemptanswerdistributiontab'] = 'Distribuirea răspunsurilor';
$string['reportattemptgraphtab'] = 'Graficul încercărilor';
$string['reportattemptgraphtabletitle'] = 'Vizualizarea tabelului graficul încercărilor';
$string['reportattemptquestionsdetailstab'] = 'Detaliile întrebărilor';
$string['reportattemptreviewpageheading'] = '{$a->quizname} - revizualizarea încercării de către {$a->fullname}, trimisă pe {$a->finished}';
$string['reportattemptsdownloadfilename'] = '{$a}_attempts_report';
$string['reportattemptsfilterformheader'] = 'Filtrare';
$string['reportattemptsfilterformsubmit'] = 'Filtru';
$string['reportattemptsfilterincludeinactiveenrolments'] = 'Includeți utilizatorii cu înscrieri inactive';
$string['reportattemptsfilterusers'] = 'Afișează';
$string['reportattemptspersistentfilter'] = 'Filtru persistent';
$string['reportattemptsprefsformsubmit'] = 'Aplică';
$string['reportattemptsresetfilter'] = 'Resetare filtre';
$string['reportattemptsshowinitialbars'] = 'Arată alfabetul';
$string['reportattemptsummarytab'] = 'Sumarul încercării';
$string['reportattemptsusersperpage'] = 'Numărul de utilizatori afișați:';
$string['reportindividualuserattemptpageheading'] = '{$a->quizname} - raportul încercărilor individuale ale utilizatorului {$a->username}';
$string['reportquestionanalysispageheading'] = '{$a} - raport de întrebări';
$string['reportuserattemptstitleshort'] = 'încercările utilizatoprului {$a}';
$string['requirepassword'] = 'Parola necesară';
$string['requirepassword_help'] = 'Cursanții trebuie să introducă o parolă înainte de a începe încercarea';
$string['requirepasswordmessage'] = 'Pentru a accesa acest test, trebuie să cunoașteți parola testului';
$string['resetadaptivequizsall'] = 'Ștergeți toate încercările Testului adaptiv';
$string['result'] = 'Rezultat';
$string['reviewattempt'] = 'Revizualizare încercare';
$string['reviewattemptreport'] = 'Revizualizare încercare de către {$a->fullname} trimisă pe {$a->finished}';
$string['score'] = 'Scor';
$string['showabilitymeasure'] = 'Arată studenților măsurarea capacității';
$string['showabilitymeasure_help'] = 'Uneori, poate fi util să le dezvăluiți elevilor estimările abilităților după ce au participat la un test adaptativ. Cu această setare activată, un elev poate vedea estimarea abilităților în rezumatul încercărilor și imediat după terminarea unei încercări.';
$string['standarderror'] = 'Eroare standard pentru a opri';
$string['standarderror_help'] = 'Când eroarea în măsurarea cunoștințelor utilizatorului scade sub această valoare, testul se va opri. Reglați această valoare de la cea implicită de 5% pentru a estima o precizie mai mare sau mai mică în măsurarea cunoștințelor';
$string['standarderrorhdr'] = 'Eroare standard';
$string['startattemptbtn'] = 'Începeți încercarea';
$string['startinglevel'] = 'Nivelul inițial de dificultate';
$string['startinglevel_help'] = 'În cazul în care cursantul începe o încercare, activitatea va selecta aleatoriu o întrebare care se potrivește cu nivelul de dificultate';
$string['statistic'] = 'Statistic';
$string['stopingconditionshdr'] = 'Condiții de oprire';
$string['submitanswer'] = 'Trimite răspunsul';
$string['times_used_display_name'] = 'Timp utilizat';
$string['updateattempterror'] = 'Eroare la actualizarea înregistrării încercării';
$string['user'] = 'Utilizator';
$string['value'] = 'Vaoare';
$string['wrongpassword'] = 'Parola este incorectă';
