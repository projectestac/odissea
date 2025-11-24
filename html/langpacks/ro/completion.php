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
 * Strings for component 'completion', language 'ro', version '4.5'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Se notează';
$string['achievingpassinggrade'] = 'Obținere a notei de trecere';
$string['activities'] = 'Activități';
$string['activitiescompleted'] = 'Finalizare activitate';
$string['activitiescompletednote'] = 'Notă: finalizarea activității trebuie să fie setată să apară pentru o activitate în lista de mai sus.';
$string['activitieslabel'] = 'Activități / resurse';
$string['activityaggregation'] = 'Condiții necesare';
$string['activityaggregation_all'] = 'TOATE activitățile selectate trebuie să fie finalizate';
$string['activityaggregation_any'] = 'ORICE activitate selectată trebuie să fie finalizată';
$string['activitycompletion'] = 'Condițiile finalizării';
$string['activitycompletionupdated'] = 'Modificările au fost salvate';
$string['activitygradenotrequired'] = 'Nota nu este necesară';
$string['activitygradetopassnotset'] = 'Această activitate nu are setată o notă validă de promovat. Poate fi setat în secțiunea Note din setările activității.';
$string['addconditions'] = 'Adăugare condiții';
$string['affectedactivities'] = 'Modificările vor afecta următoarele <b>{$a}</b> activități sau resurse:';
$string['aggregationmethod'] = 'Metoda de agregare';
$string['all'] = 'Toate';
$string['allconditions'] = 'Activitatea este finalizată când cursanții fac următoarele:';
$string['any'] = 'Oricare';
$string['approval'] = 'Aprobare';
$string['areyousureoverridecompletion'] = 'Sigur doriți să suprascrieți starea curentă de finalizare a acestei activități pentru acest utilizator și să o marcați „{$a}”?';
$string['badautocompletion'] = 'Trebuie să selectezi cel puțin o condiție.';
$string['badcompletiongradeitemnumber'] = 'Nota necesară nu poate fi activată pentru <b> {$a} </b>, deoarece notarea cu {$a} nu este activată.';
$string['bulkactivitycompletion'] = 'Editare în bloc a finalizării activităților';
$string['bulkactivitydetail'] = 'Selectați activitățile pe care doriți să le modificați în bloc.';
$string['bulkcompletiontracking'] = 'Urmărirea finalizării activităților și a resurselor';
$string['bulkcompletiontracking_help'] = '<strong> Niciuna: </strong> Nu indicați finalizarea activității

<strong> Manual: </strong> cursanții pot marca manual activitatea ca fiind finalizată

<strong> Cu condiții: </strong> Afișați activitatea ca finalizată atunci când sunt îndeplinite condițiile';
$string['checkactivity'] = 'Checkbox pentru activitate / resursă: {$a}';
$string['checkall'] = 'Bifați sau debifați toate activitățile și resursele';
$string['checkallsection'] = 'Bifați sau debifați toate activitățile și resursele în următoarea secțiune: {$a}';
$string['completeactivity'] = 'Finalizează activitatea';
$string['completed'] = 'Finalizare';
$string['completedunlocked'] = 'Opțiuni finalizare deblocate';
$string['completedunlockedtext'] = 'Când salvați acest formular, gradul de finalizare va fi șters, apoi recalculat, unde este posibil. Pentru a evita acest lucru, poți să închizi pagina fără să salvezi.';
$string['completedwarning'] = 'Opțiuni finalizare blocate';
$string['completedwarningtext'] = 'Această activitate este marcată ca fiind realizată pentru unul sau mai mulți cursanți. Dacă deblocați setările pentru a face o modificare, apoi salvați formularul, datele de completare ale activității vor fi șterse și apoi recalculate acolo unde este posibil. Finalizarea manuală nu poate fi recalculată, așa că, în acest caz, cursantul va trebui să o marcheze din nou ca finalizată.';
$string['completion'] = 'Monitorizare finalizare';
$string['completion-alt-auto-enabled'] = 'Sistemul marchează acest element ca fiind complet potrivit condițiilor : {$a}';
$string['completion-alt-auto-fail'] = 'Finalizat: {$a} (nu a obținut notă de trecere)';
$string['completion-alt-auto-n'] = 'Nu s-a finalizat: {$a}';
$string['completion-alt-auto-n-override'] = 'Necompletat: {$a->modname} (set by {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Finalizat: {$a} (s-a obținut notă de trecere)';
$string['completion-alt-auto-y'] = 'Finalizat: {$a}';
$string['completion-alt-auto-y-override'] = 'Completat: {$a->modname} (set by {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Cursanții pot să marcheze manual acest element ca fiind finalizat: {$a}';
$string['completion-alt-manual-n'] = 'Necompletat: {$a}. Selectați pentru a-l seta ca fiind completat.';
$string['completion-alt-manual-n-override'] = 'Nu este complet: {$a->modname} (set by {$a->overrideuser}). Selectați pentru a-l seta ca fiind complet.';
$string['completion-alt-manual-y'] = 'Completat: {$a}. Selectați pentru a-l seta ca fiind necompletat.';
$string['completion-alt-manual-y-override'] = 'Finalizat: {$a->modname} (setat de {$a->overrideuser}). Selectați pentru a marca ca nefinalizat.';
$string['completion-fail'] = 'Finalizat (nu s-a primit notă de trecere)';
$string['completion-n'] = 'Nu este finalizat';
$string['completion-n-override'] = 'Nu este completat (setat de {$a})';
$string['completion-pass'] = 'Finalizat (s-a obținut notă de trecere)';
$string['completion-y'] = 'Finalizat';
$string['completion-y-override'] = 'Completat (setat de {$a})';
$string['completion_automatic'] = 'Adaugă cerințe';
$string['completion_help'] = 'Dacă opțiunea este activată, finalizarea activităților va fi urmărită, fie manual, fie automat, bazat pe anumite condiţii. Puteți seta condiții multiple după plac. Astfel, activitatea va fi considerată completă doar atunci când TOATE condițiile vor fi îndeplinite.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'Cursanții trebuie să seteze în mod manual activitatea ca fiind încheiată';
$string['completion_none'] = 'Niciuna';
$string['completionactivitydefault'] = 'Utilizare activități implicite';
$string['completionanygrade_desc'] = 'Orice notă';
$string['completiondefault'] = 'Urmărirea completării implicite';
$string['completiondisabled'] = 'Dezactivat, nu este afișat în setările activității';
$string['completionduration'] = 'Înscriere';
$string['completionenabled'] = 'Dacă este activat, se controlează completarea și setările de activitate';
$string['completionexpected'] = 'Setează reminder în Timeline';
$string['completionexpected_help'] = 'Acest lucru vă permite să setați un memento pentru această activitate pentru a fi completată de către cursanți. Acest memento va apărea în blocul Cronologie din Tabloul de bord ca „{$a} necesită acțiune”';
$string['completionexpecteddesc'] = 'Finalizare așteptată pe {$a}';
$string['completionexpectedfor'] = '{$a->instancename} ar trebui să fie completată';
$string['completionicons'] = 'Căsuțe de bifare a completării';
$string['completionicons_help'] = 'O bifă lângă un nume de activitate poate fi utilizată pentru a indica când activitatea este finalizată.

Dacă este afișată o casetă cu o linie punctată, o bifă va apărea automat atunci când ați finalizat activitatea în conformitate cu condițiile stabilite de profesor.

Dacă este afișată o casetă cu o linie continuă, puteți face clic pe ea pentru a bifa caseta atunci când credeți că ați finalizat activitatea. (Dacă faceți clic din nou pe acesta, îndepărtați bifa dacă vă răzgândiți.)';
$string['completionmenuitem'] = 'Finalizare';
$string['completionnotenabled'] = 'Finalizarea nu este activată';
$string['completionnotenabledforcourse'] = 'Finalizarea nu este activată pentru acest curs';
$string['completionnotenabledforsite'] = 'Finalizarea nu este activată pentru acest site';
$string['completionondate'] = 'Data';
$string['completionondatevalue'] = 'Data când cursul va fi marcat ca fiind finalizat';
$string['completionpassgrade'] = 'Necesită notă de trecere';
$string['completionpassgrade_desc'] = 'Notă de trecere';
$string['completionpassgrade_help'] = 'Dacă este activată această opțiune, activitatea este considerată finalizată când cursantul obține o notă de trecere.';
$string['completionsettingslocked'] = 'Setări finalizare blocate';
$string['completionupdated'] = 'Finalizare actualizată pentru activitatea <b> {$a} </b>';
$string['completionusegrade'] = 'Notă necesară';
$string['completionusegrade_desc'] = 'Să primești o notă';
$string['completionusegrade_help'] = 'Dacă este activată această opțiune, activitatea este considerată finalizată atunci când un cursant primește o notă. Dacă este setată o notă de promovare a activității, atunci pictogramele de promovare și de nepromavare sunt afișate în raportul de finalizare a activității.';
$string['completionview'] = 'Necesită vizualizare';
$string['completionview_desc'] = 'Vizualizare activitate';
$string['configcompletiondefault'] = 'Setarea implicită pentru urmărirea completării, atunci când se creează noi activități.';
$string['configenablecompletion'] = 'Dacă este activată, pot fi stabilite condițiile de finalizare a cursului și a activității. Se recomandă setarea condițiilor de finalizare a activității, astfel încât să fie afișate date semnificative pentru utilizatori în prezentarea generală a cursului lor pe tabloul de bord.';
$string['confirmselfcompletion'] = 'Confirmă auto-completarea';
$string['courseaggregation'] = 'Condiții necesare';
$string['courseaggregation_all'] = 'TOATE cursurile selectate trebuie să fie completate';
$string['courseaggregation_any'] = 'ORICARE DIN cursurile selectate trebuie să fie completate';
$string['coursealreadycompleted'] = 'Ai completat deja acest curs';
$string['coursecomplete'] = 'Curs finalizat';
$string['coursecompleted'] = 'Curs finalizat';
$string['coursecompletedmessage'] = '<p>Felicitări!</p> <p> Ați finalizat cursul <a href={$a->courselink}"> {$a->coursename} </a>. </p>';
$string['coursecompletion'] = 'Setări finalizare curs';
$string['coursecompletioncondition'] = 'Condiție: {$a}';
$string['coursecompletionnavigation'] = 'Finalizarea cursului de navigație terțiară';
$string['coursecompletionsettings'] = 'Setări finalizare curs';
$string['coursegrade'] = 'Notă curs';
$string['coursesavailable'] = 'Cursuri disponibile';
$string['coursesavailableexplaination'] = 'Notă: Condițiile de finalizare a cursului trebuie să fie setate pentru ca un curs să apară în lista de mai sus.';
$string['criteria'] = 'Criterii';
$string['criteriagroup'] = 'Grup criterii';
$string['criteriarequiredall'] = 'Toate criteriile de mai jos sunt necesare';
$string['criteriarequiredany'] = 'Oricare dintre criteriile de mai jos sunt necesare';
$string['criteriasummary'] = '{$a->type}: {$a->summary}';
$string['csvdownload'] = 'Downloadează în format spreadsheet  (UTF-8 .csv)';
$string['datepassed'] = 'Dată absolvire';
$string['days'] = 'Zile';
$string['daysoftotal'] = '{$a->zile} din {$a->total}';
$string['daystakingcourse'] = 'Zile de participare la curs';
$string['daysuntilcompletion'] = 'Timp până la finalizare';
$string['defaultactivitycompletioncourse'] = 'Acestea sunt condițiile implicite de finalizare pentru activitățile din acest curs.';
$string['defaultactivitycompletionsite'] = 'Acestea sunt condițiile implicite de finalizare pentru activitățile din toate cursurile.';
$string['defaultcompletion'] = 'Finalizarea implicită a activităților';
$string['defaultcompletionupdated'] = 'Modificările au fost salvate';
$string['deletecompletiondata'] = 'Data finalizării';
$string['dependencies'] = 'Dependințe';
$string['dependenciescompleted'] = 'Finalizarea altor cursuri';
$string['detail_desc:receivegrade'] = 'Trebuie să primești o notă';
$string['detail_desc:receivepassgrade'] = 'Obține o notă de trecere';
$string['detail_desc:view'] = 'Vizualizare';
$string['done'] = 'Încheiat';
$string['editconditions'] = 'Editează condițiile';
$string['editcoursecompletionsettings'] = 'Editare setări finalizare curs';
$string['emptyconditionsinfo'] = 'Nu există condiții de finalizare setate pentru această activitate.';
$string['emptyconditionswarning'] = 'Trebuie să adaugi cel puțin o condiție pentru finalizare.';
$string['enablecompletion'] = 'Activare monitorizare finalizare';
$string['enablecompletion_help'] = 'Dacă este activată acestă opțiune, poți seta condițiile pentru finalizarea activității sau finalizarea cursului.';
$string['enrolmentduration'] = 'Durata înscrierii';
$string['enrolmentdurationlength'] = 'Utilizatorul trebuie să rămână înregistrat pentru';
$string['err_noactivities'] = 'Informațiile despre completare nu sunt activate pentru nicio activitate, astfel încât nu pot fi afișate. Puteți activa informațiile despre completare prin editarea setărilor pentru activitate.';
$string['err_nocourses'] = 'Finalizarea cursului nu este activată pentru oricare alte cursuri, astfel încât nu poate fi afișată. Puteți activa finalizarea cursului în setările cursului.';
$string['err_nograde'] = 'Nu a fost stabilită o notă de trecere pentru acest curs. Pentru a activa acest  tip de criteriu trebuie să stabiliți o notă de trecere pentru acest curs.';
$string['err_noroles'] = 'Nu există roluri cu capabilitatea moodle/curs: markcomplete în acest curs.';
$string['err_nousers'] = 'Nu sunt cursanți în acest curs sau grup pentru care sunt afișate informații de finalizare. (Informațiile de finalizare sunt afișate numai pentru utilizatorii cu capacitatea „Afișați în rapoartele de finalizare”. Capacitatea este permisă numai pentru rolul implicit al cursantului, deci dacă nu sunt cursanți, veți vedea acest mesaj.)';
$string['err_settingslocked'] = 'Unul sau mai mulți cursanți au îndeplinit deja o cerință, astfel că setările au fost blocate. Deblocarea setărilor va șterge datele despre gradele de completare realizate de utilizator și poate crea confuzie.';
$string['err_system'] = 'O eroare internă a apărut în sistemul de completare. (Administratorii de sistem pot permite debug-ul informațiilor pentru a vedea mai multe detalii.)';
$string['eventcoursecompleted'] = 'Curs completat';
$string['eventcoursecompletionupdated'] = 'Finalizare curs actualizată';
$string['eventcoursemodulecompletionupdated'] = 'Finalizarea activității cursului actualizată';
$string['eventdefaultcompletionupdated'] = 'Implicit pentru finalizarea activității cursului actualizat';
$string['excelcsvdownload'] = 'Downloadează în format Excel comptabil (.csv)';
$string['failed'] = 'Eșuat';
$string['fraction'] = 'Fracție';
$string['graderequired'] = 'Nota de curs necesară';
$string['gradexrequired'] = '{$a} notă necesară';
$string['hiddenrules'] = 'Unele setări specifice pentru <b>{$a}</b> au fost ascunse. Pentru vizualizare, deselectați alte activități';
$string['incompatibleplugin'] = 'Această activitate nu acceptă setările implicite pentru finalizare. Condițiile de finalizare trebuie setate manual pentru fiecare utilizare.';
$string['inprogress'] = 'În curs';
$string['manual'] = 'Manual';
$string['manualcompletionby'] = 'Completare manuală de către alții';
$string['manualcompletionbynote'] = 'Notă: Capabilitatea moodle/curs: markcomplete trebuie să fie permisă unui rol ca să apară în listă.';
$string['manualselfcompletion'] = 'Auto-finalizare manuală';
$string['manualselfcompletionnote'] = 'Notă: Bloc-ul de autocompletare ar trebui adăugat la curs, dacă este activată autocompletarea.';
$string['markcomplete'] = 'Marcare ca finalizat';
$string['markedcompleteby'] = 'Marcat ca finalizat de către {$a}';
$string['markingyourselfcomplete'] = 'Bifați completarea';
$string['modifybulkactions'] = 'Modificați acțiunile pe care doriți să le modificați în bloc';
$string['moredetails'] = 'Mai multe detalii';
$string['nocriteriaset'] = 'Nu sunt setate criterii de completare pentru acest curs';
$string['nogradeitem'] = 'Nota necesară nu poate fi activată pentru <b> {$a} </b> deoarece activitatea nu este notată.';
$string['notcompleted'] = 'Nu a fost finalizat';
$string['notenroled'] = 'Nu sunteți înregistrat în acest curs';
$string['nottracked'] = 'Statusul activității dumneavoastră nu este urmărit în acest curs';
$string['notyetstarted'] = 'Nu a fost încă început';
$string['overallaggregation'] = 'Cerințe pentru finalizare';
$string['overallaggregation_all'] = 'Cursul este complet când TOATE condițiile au fost îndeplinite';
$string['overallaggregation_any'] = 'Cursul este complet când ORICE condiție este îndeplinită';
$string['pending'] = 'În progres';
$string['periodpostenrolment'] = 'Perioadă post-înrolare';
$string['privacy:metadata:completionstate'] = 'Dacă activitatea a fost completată';
$string['privacy:metadata:course'] = 'Un identificator de curs';
$string['privacy:metadata:coursecompletedsummary'] = 'Stochează informații despre utilizatorii care au îndeplinit criteriile la un curs';
$string['privacy:metadata:coursemoduleid'] = 'Identificatorul activității';
$string['privacy:metadata:coursemodulesummary'] = 'Stochează datele de finalizare a activității pentru un utilizator';
$string['privacy:metadata:coursesummary'] = 'Stochează datele de finalizare a cursului pentru un utilizator.';
$string['privacy:metadata:gradefinal'] = 'Stochează datele de finalizare a cursului pentru un utilizator.';
$string['privacy:metadata:overrideby'] = 'Stochează datele de finalizare a cursului pentru un utilizator.';
$string['privacy:metadata:reaggregate'] = 'Dacă finalizarea cursului a fost reagregată.';
$string['privacy:metadata:timecompleted'] = 'Ora la care a fost completat cursul.';
$string['privacy:metadata:timecreated'] = 'Ora la care a fost creată finalizarea activității';
$string['privacy:metadata:timeenrolled'] = 'Când a fost înscris utilizatorul la curs';
$string['privacy:metadata:timemodified'] = 'Timpul în care a fost modificată finalizarea activității';
$string['privacy:metadata:timestarted'] = 'Cînd a început cursul.';
$string['privacy:metadata:unenroled'] = 'Dacă utilizatorul a fost scos de la curs';
$string['privacy:metadata:userid'] = 'Identificatorul utilizatorului persoanei cu date de finalizare a cursului și a activității';
$string['privacy:metadata:viewed'] = 'Dacă activitatea a fost vizualizată.';
$string['progress'] = 'Progresul cursantului';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Progres: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Recunoașterea activității anterioare';
$string['remainingenroledfortime'] = 'Ramâi înregistrat pentru o perioadă specifică de timp';
$string['remainingenroleduntildate'] = 'Rămâne înscris până la o dată specificată';
$string['reportpage'] = 'Arată utilizatorii {$a->from} până la {$a->to} din {$a->total}.';
$string['requiredcriteria'] = 'Criteriu necesar';
$string['resetactivities'] = 'Șterge toate activitățile și resursele verificate';
$string['restoringcompletiondata'] = 'Se scriu datele completării';
$string['roleaggregation'] = 'Condiții necesare';
$string['roleaggregation_all'] = 'TOATE rolurile selectate să seteze cursul ca fiind finalizat';
$string['roleaggregation_any'] = 'ORICARE din rolurile selectate să seteze cursul ca fiind finalizat';
$string['roleidnotfound'] = 'Identificator rol {$a} nu a fost găsit';
$string['saved'] = 'Salvat';
$string['seedetails'] = 'Vezi detalii';
$string['select'] = 'Selectează';
$string['self'] = 'Auto';
$string['selfcompletion'] = 'Auto completare';
$string['showcompletionconditions'] = 'Arată condițiile de completare activitate';
$string['showcompletionconditions_help'] = 'Afișează condițiile pentru finalizarea activității pe pagina de curs.';
$string['showinguser'] = 'Arată utilizator';
$string['studentsmust'] = 'Cursanții trebuie';
$string['timecompleted'] = 'Data completării';
$string['todo'] = 'De făcut';
$string['unenrolingfromcourse'] = 'Renunțare la curs';
$string['unenrolment'] = 'Renunțare';
$string['unit'] = 'Unitate';
$string['unlockcompletion'] = 'Deblochează opțiunile completării';
$string['unlockcompletiondelete'] = 'Deblochează opțiunile de completare și șterge datele completării de către utilizator';
$string['updateactivities'] = 'Actualizați starea de finalizare a activităților verificate';
$string['usealternateselector'] = 'Utilizează selectorul alternativ de curs';
$string['usernotenroled'] = 'Utilizatorul nu este înscris la acest curs';
$string['viewcoursereport'] = 'Vezi raportul cursului';
$string['viewingactivity'] = 'Vizualizare {$a}';
$string['withconditions'] = 'Cu condițiile';
$string['writingcompletiondata'] = 'Se scriu datele pentru completare';
$string['xdays'] = '{$a} zile';
$string['youmust'] = 'Tu trebuie';
