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
 * Strings for component 'attendance', language 'ro', version '4.5'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'A';
$string['Afull'] = 'Absent';
$string['Eacronym'] = 'E';
$string['Efull'] = 'Motivat';
$string['Lacronym'] = 'L';
$string['Lfull'] = 'Întârziat';
$string['Pacronym'] = 'P';
$string['Pfull'] = 'Prezent';
$string['absenteereport'] = 'Raport absențe';
$string['acronym'] = 'Acronim';
$string['add'] = 'Adaugă';
$string['addedrecip'] = 'S-a adăugat nou recipient {$a}';
$string['addedrecips'] = 'S-au adăugat {$a} noi recipienți';
$string['addmultiplesessions'] = 'Sesiuni multiple';
$string['addsession'] = 'Adaugă sesiune';
$string['adduser'] = 'Adaugă utilizator';
$string['addwarning'] = 'Adaugă avertizare';
$string['all'] = 'Toate';
$string['allcourses'] = 'Toate cursurile';
$string['allowupdatestatus'] = 'Permite cursanților să își actualizeze prezența proprie';
$string['allowupdatestatus_desc'] = 'Dacă se activează opțiunea, cursanții vor putea să își actualizeze prezența la o sesiune după ce și-au înregistrat deja prezența manual.';
$string['allowupdatestatus_help'] = 'Dacă se activează opțiunea cursanții vor putea să ăși actualizeze prezența la o sesiune după ce și-au înregistrat deja prezența manual.';
$string['allpast'] = 'Toate din urmă';
$string['allsessions'] = 'Toate sesiunile';
$string['allsessionstotals'] = 'Totaluri pentru sesiunile selectate';
$string['attendance:addinstance'] = 'Adaugă o activitate nouă de prezență';
$string['attendance:canbelisted'] = 'Afișare în listă';
$string['attendance:changeattendances'] = 'Se modifică prezența';
$string['attendance:changepreferences'] = 'Se schimbă preferințele';
$string['attendance:export'] = 'Exportă rapoartele';
$string['attendance:import'] = 'Import sesiuni din fișier (csv)';
$string['attendance:manageattendances'] = 'Administrează prezența';
$string['attendance:managetemporaryusers'] = 'Administrați utilizatorii temporari';
$string['attendance:manualautomark'] = 'Se permite procesul de marcare automată';
$string['attendance:takeattendances'] = 'Efectuează prezența';
$string['attendance:view'] = 'Vezi prezența';
$string['attendance:viewreports'] = 'Se vizualizează rapoartele';
$string['attendance:viewsummaryreports'] = 'Vizualizare raporturi sumare ale cursurilor';
$string['attendance:warningemails'] = 'Poate fi abonat la o listă de email-uri a utilizatorilor absenți';
$string['attendance_already_submitted'] = 'Prezența dumneavoastră a fost deja setată.';
$string['attendance_no_status'] = 'Nu a existat un status valid disponibil - poate fi prea târziu pentru a vă înregistra prezența.';
$string['attendancedata'] = 'Informații despre prezență';
$string['attendancefile'] = 'Fișier de prezență (format csv)';
$string['attendancefile_help'] = 'Fișierul trebuie să fie un fișier CSV cu un rând de antet și câmpuri pentru identificarea utilizatorului și data și ora când s-a înregistrat prezența (email, citire) sau (nume de utilizator, data și ora)';
$string['attendancegrade'] = 'Nota pentru prezență';
$string['attendancenotset'] = 'Trebuie să vă setați prezența';
$string['attendancenotstarted'] = 'Nu a început încă efectuarea prezenței pentru acest curs';
$string['attendancepercent'] = 'Procent de prezență';
$string['attendancereport'] = 'Prezență';
$string['attendanceslogged'] = 'Prezența a fost jurnalizată';
$string['attendancestaken'] = 'Prezența a fost făcută';
$string['attendancesuccess'] = 'Prezența a fost făcută cu succes';
$string['attendanceupdated'] = 'Prezența a fost actualizată cu succes';
$string['attendanceuserreport'] = 'Raport prezență';
$string['attforblockdirstillexists'] = 'Directorul vechi mod/attforblock încă există - trebuie să ștergeți acest director de pe server înainte de a se rula această actualizare.';
$string['attrecords'] = 'Înregistrări ale prezenței';
$string['autoassignstatus'] = 'Selectați automat cel mai înalt nivel disponibil';
$string['autoassignstatus_help'] = 'Dacă este selectată această opțiune, cursanții vor fi automat asignați celui mai înalt nivel disponibil.';
$string['automark'] = 'Marcare automată';
$string['automark_help'] = 'Permite ca marcarea să fie complet automată.
Dacă bifați „Da”, cursanții vor fi marcați automat în funcție de prima lor accesare a cursului.
Dacă bifați „Setează nemarcat la sfârșitul sesiunii”, toți cursanții care nu și-au marcat prezența vor fi avea statusul nemarcat selectat.';
$string['automarkall'] = 'Da';
$string['automarkclose'] = 'Setați nemarcat la sfârșitul sesiunii';
$string['automarkingcomplete'] = 'Marcare automată finalizată';
$string['automarkingnotavailableyet'] = 'Această sesiune folosește marcarea automată la încheierea sesiunii iar sesiunea nu s-a încheiat încă.';
$string['automarkingnotenabled'] = 'Marcare automată neactivată în această sesiune';
$string['automarktask'] = 'Verificați sesiunile de prezență care necesită marcare automată';
$string['automarkuseempty'] = '';
$string['autorecorded'] = 'prezență înregistrată de sistem în mod automat';
$string['availability'] = 'Disponibilitate pentru prezență efectuată manual';
$string['availability_help'] = 'Restricționează disponibilitatea statusului. <br> Dacă este selectată opțiunea "Limitată" specificați numărul de minute în care statusul este disponibil după începerea sesiunii. Este aplicabil când cursanții își marchează propria prezență.';
$string['availabilityalways'] = 'Întotdeauna';
$string['availabilitylimitedtime'] = 'Timp limitat';
$string['availabilityno'] = 'Nu';
$string['availablebeforesession'] = 'Disponibil înainte de începerea sesiunii';
$string['availablebeforesession_help'] = 'Când cursanții își marchează propria prezență, permiteți ca acest status să fie ales înainte de începerea sesiunii.';
$string['averageattendance'] = 'Prezență medie';
$string['averageattendancegraded'] = 'Prezență medie';
$string['backtoparticipants'] = 'Înapoi la lista participanților';
$string['below'] = 'Mai jos {$a}%';
$string['calclose'] = 'Închide';
$string['calendarevent'] = 'Creează un eveniment în calendar al sesiunii';
$string['calendarevent_help'] = 'Dacă se activează, se va crea un eveniment în calendar al acestei sesiuni.
Dacă se dezactivează, orice eveniment din calendar al acestei sesiuni va fi șters.';
$string['caleventcreated'] = 'Evenimentul din calendar al sesiunii a fost creat cu succes';
$string['caleventdeleted'] = 'Evenimentul din calendar al sesiunii a fost șters';
$string['calmonths'] = 'Ianuarie,februarie,martie,aprilie,mai,iunie,iulie,august,septembrie,octombrie,noiembrie,decembrie';
$string['calshow'] = 'Alege data';
$string['calweekdays'] = 'Lu,Ma,Mi,Jo,Vi,Sâ,Du';
$string['cannottakeforgroup'] = 'Nu puteți efectua prezența pentru grupul "{$a}"';
$string['cannottakethisgroup'] = 'Nu sunteți membru al grupului de cursuri la care se referă aceasă sesiune de prezență, prezența dumneavoastră nu a fost înregistrată.';
$string['cantaddstatus'] = 'Trebuie să setați un acronim și o descriere când adăugați un status nou.';
$string['canthidestatus'] = 'Nu puteți ascunde acest status pentru că este deja folosit în cadrul acestei activități de prezență.';
$string['categoryreport'] = 'Raportul categoriei de curs';
$string['changeattendance'] = 'Schimbă prezența';
$string['changeduration'] = 'Schimbă durata';
$string['changesession'] = 'Schimbă sesiunea';
$string['checkweekdays'] = 'Selectați zilele lucrătoare ale săptămânii care sunt în cadrul perioadei sesiunii selectate.';
$string['closed'] = 'Această sesiune nu este în prezent disponibilă pentru prezență efectuată manual';
$string['column'] = 'coloană';
$string['columnmap'] = 'Mapare coloane';
$string['columnmap_help'] = 'Pentru fiecare din câmpurile afișate selectați coloana corespunzătoare în fișierul csv.';
$string['columns'] = 'coloane';
$string['commonsession'] = 'Toți cursanții';
$string['commonsessions'] = 'Toți cursanții';
$string['confirm'] = 'Confirmă';
$string['confirmcolumnmappings'] = 'Confirmă maparea coloanelor';
$string['confirmdeletehiddensessions'] = 'Sunteți sigur(ă) că doriți să ștergeți {$a->count} sesiuni programate înainte de data începerii cursului ({$a->date})?';
$string['confirmdeleteuser'] = 'Ești sigur(ă) că vrei să ștergi utilizatorul\'{$a->fullname}\' ({$a->email})?<br/>Toate înregistrările prezenței vor fi șterse definitiv.';
$string['copyfrom'] = 'Copiați informațiile de prezență de la';
$string['countofselected'] = 'Numărul elementelor selectate';
$string['course'] = 'Curs';
$string['coursemessage'] = 'Trimiteți mesaje utilizatorilor cursului';
$string['courseshortname'] = 'Denumirea prescurtată a cursului';
$string['coursesummary'] = 'Raport sumar al cursului';
$string['createmultiplesessions'] = 'Creează sesiuni multiple';
$string['createmultiplesessions_help'] = 'Această funcție vă permite să creați sesiuni multiple într-un singur pas.
Sesiunea începe la data sesiunii de bază și continuă până la data \'repetă până la\'.

 * <strong>Repetă</strong>: Selectează zilele săptămânii când cursanții tăi se vor întâlni (de exemplu, Luni/Miercuri/Vineri).
  * <strong>Repetă în fiecare</strong>: Se permite configurarea prezenței. Dacă participanții se vor întâlni în fiecare săptămână, selectaț 1; dacă se vor întâlni la fiecare două săptămâni selectați 2; la fiecare trei săptămâni, selectați 3, etc.
  * <strong>Repeat până la</strong>: Selectați ultima zi a cursului (ultima zi în care vreți să efectuați prezența).';
$string['createonesession'] = 'Creați o sesiune pentru curs';
$string['csvdelimiter'] = 'Delimitator CSV';
$string['currentlyselectedusers'] = 'Utilizatorii selectați acum';
$string['customexportfields'] = 'Export câmpuri personalizate ale sesiunii';
$string['customexportfields_help'] = 'Câmp de profil extins al utilizatorului pentru a fi afișat în raportul de export';
$string['customfields'] = 'Câmpuri personalizate ale sesiunii';
$string['date'] = 'Data';
$string['days'] = 'Zile';
$string['defaultdisplaymode'] = 'Mod implicit de afișare';
$string['defaults'] = 'Implicite';
$string['defaultsessionsettings'] = 'Setările implicite ale sesiunii';
$string['defaultsessionsettings_help'] = 'Aceste setări definesc configurarea implicită a tuturor noilor sesiuni';
$string['defaultsettings'] = 'Setări implicite ale prezenței';
$string['defaultsettings_help'] = 'Aceste setări definesc configurările implicite ale tuturor noilor prezențe';
$string['defaultstatus'] = 'Status implicit setat';
$string['defaultsubnet'] = 'Adresa implicită a rețelei';
$string['defaultsubnet_help'] = 'Înregistrarea prezenței poate fi restricționată pentru anumite rețele prin specificarea unei liste de adrese IP parțiale sau complete separate prin virgulă. Aceasta este valoarea implicită utilizată la crearea de noi sesiuni.';
$string['defaultview'] = 'Aspect implicit la autentificare';
$string['defaultview_desc'] = 'Acesta este aspectul implicit pe care îl văd profesorii când se loghează prima dată.';
$string['defaultwarnings'] = 'Avertizare implicită setată';
$string['defaultwarningsettings'] = 'Setări implicite ale avertizării';
$string['defaultwarningsettings_help'] = 'Aceste setări definesc configurarea implicită pentru toate avertizările noi';
$string['delete'] = 'Șterge';
$string['deletecheckfull'] = 'Sunteți absolut sigur(ă) că vreți să ștergeți {$a}, inclusiv toate datele utilizatorului?';
$string['deletedgroup'] = 'Grupul asociat cu sesiunea a fost șters';
$string['deletehiddensessions'] = 'Șterge toate sesiunile ascunse';
$string['deletelogs'] = 'Șterge datele de prezență';
$string['deleteselected'] = 'Șterge datele selectate';
$string['deletesession'] = 'Șterge sesiunea';
$string['deletesessions'] = 'Șterge toate sesiunile';
$string['deleteuser'] = 'Eliminați utilizatorul';
$string['deletewarningconfirm'] = 'Sunteți sigur(ă) că doriți să ștergeți această avertizare?';
$string['deletingsession'] = 'Șterge sesiunea acestui curs';
$string['deletingstatus'] = 'Se șterge status-ul acestui curs';
$string['description'] = 'Descriere';
$string['display'] = 'Afișează';
$string['displaymode'] = 'Mod de afișare';
$string['donotusepaging'] = 'Nu utilizați paginarea';
$string['downloadexcel'] = 'Descarcă în format Excel';
$string['downloadooo'] = 'Descarcă în format OpenOffice';
$string['downloadtext'] = 'Descarcă în format text';
$string['duration'] = 'Durată';
$string['editsession'] = 'Editare sesiune';
$string['edituser'] = 'Editare utilizator';
$string['emailcontent'] = 'Conținutul email-ului';
$string['emailcontent_default'] = 'Bună ziua %userfirstname%,
Prezența ta în %coursename% %attendancename% a scăzut sub %warningpercent% iar acum este %percent% - sperăm că ești ok!

Pentru a învăța cât mai mult din acest curs ar trebui să îți îmbunătățești prezența, te rugăm să ne contactezi, dacă ai nevoie de suport.';
$string['emailcontent_help'] = 'Când se trimite o avertizare cursantului, conținutul email-ului va fi luat din acest câmp. Se pot utiliza următoarele variabile:
<ul>
<li>%coursename%</li>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%userid%</li>
<li>%warningpercent%</li>
<li>%attendancename%</li>
<li>%cmid%</li>
<li>%numtakensessions%</li>
<li>%points%</li>
<li>%maxpoints%</li>
<li>%percent%</li>
</ul>';
$string['emailsubject'] = 'Subiectul email-ului';
$string['emailsubject_default'] = 'Avertizare prezență';
$string['emailsubject_help'] = 'Când se trimite o avertizare cursantului, subiectul email-ului va fi copiat din acest câmp.';
$string['emailuser'] = 'Email către utilizator';
$string['emailuser_help'] = 'Dacă se bifează, se va trimite cursantului o avertizare.';
$string['emptyacronym'] = 'Nu se acceptă status fără acronim. Înregistrarea statusului nu a fost actualizată.';
$string['emptydescription'] = 'Nu se acceptă status fără descriere. Înregistrarea statusului nu a fost actualizată.';
$string['enablecalendar'] = 'Creare evenimente în calendar';
$string['enablecalendar_desc'] = 'Dacă este activat, pentry fiecare sesiune de prezență va fi creat un eveniment în calendar. După modificare acestei setări, ar trebui să rulați raportul de resetare al calendarului.';
$string['enablewarnings'] = 'Activați avertizările';
$string['enablewarnings_desc'] = 'Acest lucru permite definirea unui set de avertizări pentru prezență și notificări prin e-mail către utilizatori atunci când prezența scade sub pragul configurat. <br/><strong>AVERTIZARE: Aceasta este o funcționalitate nouă și nu a fost testată pe larg. Vă rugăm să o utilizați pe propriul risc și să oferiți feedback pe forumurile Moodle dacă considerați că funcționează bine.</strong>';
$string['encoding'] = 'Codare';
$string['endofperiod'] = 'Sfârșitul perioadei';
$string['endtime'] = 'Data încheierii sesiunii';
$string['enrolmentend'] = 'Înscrierea utilizatorilor se încheie {$a}';
$string['enrolmentstart'] = 'Înscrierea utilizatorilor începe {$a}';
$string['enrolmentsuspended'] = 'Înscriere suspendată';
$string['enterpassword'] = 'Inserați parola';
$string['error:coursehasnoattendance'] = 'Cursul cu denumirea prescurtată {$a} nu are activități de prezență.';
$string['error:coursenotfound'] = 'Cursul cu numele prescurtat {$a} nu poate fi găsit.';
$string['error:qrcode'] = 'Pentru a utiliza codul QR trebuie să li se permită cursanților să își înregistreze propria prezență! Se omite';
$string['error:sessioncourseinvalid'] = 'O sesiune a cursului nu este validă! Se omite.';
$string['error:sessiondateinvalid'] = 'O dată a sesiunii nu este validă! Se omite.';
$string['error:sessionendinvalid'] = 'Ora de încheiere a unei sesiuni nu este validă! Se omite.';
$string['error:sessionstartinvalid'] = 'Ora de începere a unei sesiuni nu este validă! Se omite';
$string['error:statusnotfound'] = 'Utilizatorul: {$a->extuser} are un status care nu a putut fi găsit: {$a->status}';
$string['error:timenotreadable'] = 'Utilizatorul: {$a->extuser} are un interval de scanare care nu poate fi convertit la valoarea strtotime: {$a->scantime}';
$string['error:userduplicate'] = 'Utilizatorul {$a} a fost găsit de două ori în import. Te rugăm să incluzi doar o înregistrare per utilizator.';
$string['error:usernotfound'] = 'Un utilizator cu $a->userfield} setat la {$a->extuser} nu a putut fi găsit în acest curs';
$string['errorgroupsnotselected'] = 'Selectați unul sau mai multe grupuri';
$string['errorinaddingsession'] = 'Eroare la adăugarea sesiunii';
$string['erroringeneratingsessions'] = 'Eroare la generarea sesiunii';
$string['eventdurationupdated'] = 'Durata sesiunii a fost actualizată';
$string['eventreportviewed'] = 'Raportul de prezență a fost vizualizat';
$string['eventscreated'] = 'Evenimentul a fost creat în calendar';
$string['eventsdeleted'] = 'Evenimentul a fost șters din calendar';
$string['eventsessionadded'] = 'Sesiune adăugată';
$string['eventsessiondeleted'] = 'Sesiune ștearsă';
$string['eventsessionipshared'] = 'S-a detectat un conflict de IP-uri în procesul de efectuare manuală a prezenței';
$string['eventsessionsimported'] = 'Sesiuni importate';
$string['eventsessionupdated'] = 'Sesiune actualizată';
$string['eventstatusadded'] = 'Sesiune adăugată';
$string['eventstatusupdated'] = 'Status actualizat';
$string['eventstudentattendancesessionsupdated'] = 'Raportul sesiunii actualizat';
$string['eventstudentattendancesessionsviewed'] = 'Raportul sesiunii vizualizat';
$string['eventtaken'] = 'S-a făcut prezența';
$string['eventtakenbystudent'] = 'Prezența făcută de cursant';
$string['export'] = 'Export';
$string['extrarestrictions'] = 'Restricții suplimentare';
$string['formattexttype'] = 'Se formatează';
$string['from'] = 'de la:';
$string['gradebookexplanation'] = 'Nota în catalog';
$string['gradebookexplanation_help'] = 'Modulul de prezență afișează nota actuală în funcție de numărul de puncte pe care le-ați obținut până în prezent și numărul de puncte care ar fi putut fi obținut până în prezent; nu include sesiunile viitoare. În catalog, nota pentru prezență se bazează pe procentajul prezenței actuale și numărul de puncte care pot fi obținute pe întreaga durată a cursului, inclusiv pentru cursurile viitoare. Ca atare, notele pentru prezență afișate în modulul de Prezență și în catalog pot să nu coincidă dar au același procent.

De exemplu, dacă ați primit 8 din 10 puncte până în prezent (80% prezență) și prezența pentru întregul curs este în valoare de 50 de puncte, modulul de Prezență va afișa 8/10 iar catalogul va afișa 40/50. Nu ați primit încă 40 de puncte, dar 40 reprezintă valoarea echivalentă procentajului de prezență de 80%. Valoarea punctului primit în modulul de Prezență nu poate scădea niciodată, deoarece se bazează doar pe prezența până în prezent; cu toate acestea, valoarea punctului de prezență afișat în catalog poate crește sau descrește în funcție de prezența dumneavoastră viitoare, deoarece se bazează pe participarea la întregul curs.';
$string['graded'] = 'Sesiuni notate';
$string['gridcolumns'] = 'Coloanele tabelului';
$string['group'] = 'Grup';
$string['groups'] = 'Grupuri';
$string['groupsession'] = 'Grup de cursanți';
$string['groupsessionsby'] = 'Sesiuni de grup ale';
$string['hiddensessions'] = 'Sesiuni ascunde';
$string['hiddensessions_help'] = 'Sesiunile sunt ascunse în cazul în care sunt programate înainte de data începerii cursului.

Aveți posibilitatea să utilizați această funcționalitate pentru a ascunde sesiunile mai vechi în loc de a le șterge. Numai sesiunile vizibile vor apărea în catalog.';
$string['hiddensessionsdeleted'] = 'Toate sesiunie ascunse au fost șterse';
$string['hideextrauserdetails'] = 'Ascundere detalii suplimentare ale utilizatorului';
$string['hidensessiondetails'] = 'Ascundere detalii sesiune';
$string['identifyby'] = 'Identificarea cursantului după';
$string['import'] = 'Import';
$string['importfile'] = 'Importă fișier';
$string['importfile_help'] = 'Fișierul CSV trebuie să conțină un antet și câmpuri pentru a identifica grupurile, data și ora și datele sesiunilor care vor fi create.<br/> Pagina următoare de după  încărcarea fișierului vă va afișa exemple ale tuturor câmpurilor la care vă puteți mapa propriile câmpuri.<br/>Exemplu :<br/>groups;sessiondate;from;to<br/>groupA:05-10-2022;13:00;14:00<br/>groupB;05-10-2022;14:00;15:00';
$string['importsessions'] = 'Importă sesiuni';
$string['importstatus'] = 'Status';
$string['importstatus_help'] = 'Se permite ca o valoare a statusului să fie inclusă în raport, de ex. valori precum  P, Î, sau A';
$string['includeabsentee'] = 'Include sesiunile la calcularea raportului privind absențele';
$string['includeabsentee_help'] = 'Dacă se bifează, această sesiune va fi inclusă în calculul raportului absențelor.';
$string['includeall'] = 'Selectează toate sesiunile';
$string['includedescription'] = 'Include descrierea sesiunii';
$string['includenottaken'] = 'Include sesiunile la care nu ați participat';
$string['includeqrcode'] = 'Include codul QR';
$string['includeremarks'] = 'Include observații';
$string['incorrectpassword'] = 'Ați introdus o parolă incorectă iar prezența dumneavoastră nu a fost înregistrată, vă rugăm să inserați parola corectă.';
$string['incorrectpasswordshort'] = 'Parolă incorectă, prezență neînregistrată';
$string['indetail'] = 'În detaliu...';
$string['indicator:cognitivedepth'] = 'Prezență cognitivă';
$string['indicator:cognitivedepth_help'] = 'Acest indicator este bazat pe dezvoltarea cognitivă atinsă de cursant într-o activitate de Prezență.';
$string['indicator:cognitivedepthdef'] = 'Prezență cognitivă';
$string['indicator:cognitivedepthdef_help'] = 'Acest participant a atins acest procentaj al implicării cognitive furnizat de activitatea Prezență în perioada acestui intreval de analiză (Nivele = Fără vizualizare, Vizualizare)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Prezență socială';
$string['indicator:socialbreadth_help'] = 'Acest indicator este bazat pe interacțiunea socială atinsă de cursant în activitatea de Prezență.';
$string['indicator:socialbreadthdef'] = 'Prezență socială';
$string['indicator:socialbreadthdef_help'] = 'Participantul a atins acest procentaj de implicare socială furnizat de activitatea de prezență în perioada nivelului de analiză ( Nivele = Fără participaer, Activitatea participantului)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidaction'] = 'Trebuie să selectați o acțiune';
$string['invalidemails'] = 'Trebuie să specificați adreselor conturilor de utilizator existente, nu s-a putut găsi: {$a}';
$string['invalidimportfile'] = 'Formatul fișierului nu este valid.';
$string['invalidsessionenddate'] = 'Această dată nu poate fi mai devreme de data sesiunii';
$string['invalidsessionendtime'] = 'Data încheierii trebuie să fie după data începerii';
$string['invalidstatus'] = 'Ați selectat un status care nu este valid, vă rugăm să încercați din nou';
$string['iptimemissing'] = 'Timp eronat până la lansare';
$string['jumpto'] = 'Sari la';
$string['keepsearching'] = 'Caută în continuare';
$string['lasttaken'] = 'Ultima dată când s-a făcut prezența';
$string['manualtriggerauto'] = 'Declanșare manuală a marcării automate a prezenței';
$string['marksessionimportcsvhelp'] = 'Acest formular vă permite să încărcați un fișier csv care conține un identificator de utilizator și un status - câmpul status poate fi acronimul statusului sau ora la care a fost înregistrată prezența acelui utilizator. Dacă o valoare de timp este depășită, atunci se va  încerca să se atribuie statusul cu cea mai mare notă disponibilă la acel moment.';
$string['maxpossible'] = 'Maximul posibil';
$string['maxpossible_help'] = 'Se afișează punctajul pe care fiecare utilizator poate să îl atingă dacă primește numărul maxim de puncte în fiecare sesiune la care nu a participat încă (sesiuni vechi și seciuni viitoare):
    <ul>
    <li><strong>Puncte</strong>: numărul maxim de puncte pe care fiecare utilizator poate să îl atingă în toate sesiunile.</li>
    <li><strong>Procentaj</strong>: procentajul maxim pe care fiecare utilizator poate să îl atingă în toate sesiunile.</li>
    </ul>';
$string['maxpossiblepercentage'] = 'Procentaj maxim posibil';
$string['maxpossiblepoints'] = 'Puncte maxime posibile';
$string['maxwarn'] = 'Numărul maxim de avertizări pe e-mail';
$string['maxwarn_help'] = 'De câte ori maxim ar trebui să fie trimisă o avertizare (se trimite doar o avertizare pe sesiune)';
$string['mergeuser'] = 'Fuzionare date ale utilizatorului';
$string['messagedselecteduserfailed'] = 'Nu s-a putut trimite un mesaj către unul sau mai mulți utilizatori. Activați debugging-ul pentru a afla mai multe detalii.';
$string['mobilesessionfrom'] = 'Afișare sesiuni mai vechi decât ultima';
$string['mobilesessionto'] = 'Afișează sesiunile viitoare';
$string['mobilesessionto_help'] = 'Permite ca lista sesiunilor să fie restricționată ca să afișeze doar un număr redus de sesiuni viitoare.';
$string['mobilesettings'] = 'Setările Mobile app';
$string['mobilesettings_help'] = 'Această setare controlează funcționalitatea aplicației mobile Moodle';
$string['modulename'] = 'Prezență';
$string['modulename_help'] = 'Modulul de prezență îi permite profesorului să facă prezența în timpul sesiunii de formare iar cursanților le permite să vadă înregistrările prezenței lor.

Profesorul poate crea sesiuni multiple și poate marca statusul prezenței ca "Prezent", "Absent", "Întârziat", sau "Motivat", le poate redenumi sau poate defini alte statusuri.

Rapoartele sunt disponibile pentru întreaga clasă sau individual pentru cursanți.';
$string['modulenameplural'] = 'Prezențe';
$string['months'] = 'Luni';
$string['moreattendance'] = 'Prezența a fost efectuată cu succes pentru această pagină';
$string['moveleft'] = 'Mută în stânga';
$string['moveright'] = 'Mută în dreapta';
$string['multisessionexpanded'] = 'Sesiuni multiple extinse';
$string['multisessionexpanded_desc'] = 'Afișați setările „Sesiuni multiple” extinse în mod prestabilit atunci când creați sesiuni noi.';
$string['mustselectusers'] = 'Trebuie să selectați utilizatorii pentru export';
$string['name'] = 'Denumire';
$string['newdate'] = 'O dată nouă';
$string['newduration'] = 'Durată nouă';
$string['newstatusset'] = 'Nou set de status-uri';
$string['noattendanceusers'] = 'Nu este posibil să exportați date deoarece nu există cursanți înscriși în curs.';
$string['noattforuser'] = 'Nu există înregistrări ale prezenței pentru utilizator';
$string['noautomark'] = 'Dezactivat';
$string['nocapabilitytotakethisattendance'] = 'Ați încercat să modificați prezența unei sesiuni cu cmid : {$a} pe care nu aveți permisiunea să îl modificați.';
$string['nodescription'] = 'Sesiune obișnuită de clasă';
$string['noeventstoreset'] = 'Nu există evenimente în calendar care să necesite actualizare.';
$string['nogroups'] = 'Această activitate a fost setată să utilizeze grupuri, dar nu există grupuri în curs.';
$string['noguest'] = 'Vizitatorii nu pot vedea prezența';
$string['noofdaysabsent'] = 'Numărul de zile de absență';
$string['noofdaysexcused'] = 'Numărul de zile în care a fost motivat';
$string['noofdayslate'] = 'Numărul de zile în care a întârziat';
$string['noofdayspresent'] = 'Numărul de zile în care a fost prezent';
$string['nosessiondayselected'] = 'Nu a fost selectată o zi a Sesiunii';
$string['nosessionexists'] = 'Nu există nicio sesiune pentru acest curs';
$string['nosessionsselected'] = 'Nu există sesiuni selectate';
$string['notfound'] = 'Activitatea de prezență nu a fost găsită în acest curs!';
$string['notifytask'] = 'Trimite avertizări utilizatorilor';
$string['notmember'] = 'not&nbsp;membru';
$string['notset'] = 'nesetat';
$string['noupgradefromthisversion'] = 'Modulul Prezență nu se poate actualiza de la versiunea de attforblock pe care ați instalat-o. - vă rugăm să ștergeți attforblock sau să îl actualizați la cea mai recentă versiune înainte de a instala noul modul de prezență';
$string['numsessions'] = 'Numărul de sesiuni';
$string['numsessionstaken'] = 'Numărul de sesiuni la care ați participat';
$string['olddate'] = 'Data anterioară';
$string['onactivitycompletion'] = 'La finalizarea activității';
$string['onlyselectedusers'] = 'Exportă anumiți utilizatori';
$string['overallsessions'] = 'La toate sesiunile';
$string['overallsessions_help'] = 'Afișează statisticile tuturor sesiunilor, inclusiv cele la care nu ați participat încă (sesiuni vechi și sesiuni viitoare):
   <ul>
    <li><strong>Sesiuni</strong>: număr total de sesiuni.</li>
    <li><strong>Puncte</strong>: puncte acordate pe baza sesiunilor la care ați participat.</li>
    <li><strong>Procentaj</strong>: procentajul de puncte acordate peste maximul de puncte posibil pentru toate sesiunile.</li>
    </ul>';
$string['oversessionstaken'] = 'La sesiunile la care ați participat';
$string['oversessionstaken_help'] = 'Afișează statisticile sesiunilor unde a fost făcută prezența:
    <ul>
    <li><strong>Sesiuni</strong>: numărul de sesiuni la care ați participat deja</li>
    <li><strong>Puncte</strong>: punctele oferite pe baza sesiunilor la care ați participat</li>
    <li><strong>Procentaj</strong>: procentajul punctelor acordate peste punctele maxime posibile ale sesiunilor la care ați participat deja.</li>
    </ul>';
$string['pageof'] = 'Pagina {$a->page} din {$a->numpages}';
$string['participant'] = 'Participant';
$string['password'] = 'Parolă';
$string['passwordgrp'] = 'Parola cursantului';
$string['passwordgrp_help'] = 'Dacă este setat, cursanții vor trebui să introducă această parolă înainte de a-și putea seta statusul de participare la sesiune. Dacă este necompletat, nu este necesară nicio parolă.';
$string['passwordheader'] = 'Folosiți parola de mai jos pentru a vă înregistra prezența';
$string['passwordrequired'] = 'Trebuie să inserați parola sesiunii înainte de a trimite prezența.';
$string['percentage'] = 'Procentaj';
$string['percentageallsessions'] = 'Procentul tuturor sesiunilor';
$string['percentagesessionscompleted'] = 'Procentajul sesiunilor unde ați participat';
$string['pluginadministration'] = 'Administrarea prezenței';
$string['pluginname'] = 'Prezență';
$string['points'] = 'Puncte';
$string['pointsallsessions'] = 'Punctele tuturor sesiunilor';
$string['pointssessionscompleted'] = 'Punctele sesiunilor la care ați participat';
$string['preferences_desc'] = 'Modificările aduse setărilor statusului vor afecta sesiunile de prezență existente și pot afecta notarea.';
$string['preventsharederror'] = 'Prezența efectuată manual a fost dezactivată la o sesiune deoarece acest dispozitiv a fost folosit pentru a înregistra prezența altui cursant.';
$string['preventsharedip'] = 'Previne ca utilizatorii să partajeze adresa IP';
$string['preventsharedip_help'] = 'Nu permite ca participanții (cursanții) să folosească același dispozitiv (prin identificarea adresei IP utilizate) pentru a-și înregistra prezența altui cursant.';
$string['preventsharediptime'] = 'Timpul când se permite refolosirea adresei IP (minute)';
$string['preventsharediptime_help'] = 'Se permite ca o adresă IP să fie reutilizată pentru efectuarea prezenței la această sesiune după expirarea acestui timp.';
$string['preview'] = 'Previzualizarea fișierului';
$string['previewhtml'] = 'Previzualizare format HTML';
$string['priorto'] = 'Data sesiunii este anterioară datei începerii cursului ({$a}), astfel încât noile sesiuni programate înainte de această dată vor fi ascunse (nu sunt accesibile). Puteți schimba oricând data de începere a cursului (în setările cursului) pentru a avea acces la sesiunile anterioare.<br><br>Vă rugăm să schimbați data sesiunii sau să dați click din nou pe butonul „Adăugare sesiune” pentru a confirma?';
$string['privacy:metadata:attendancelog'] = 'Jurnalul prezențelor înregistrate ale utilizatorului.';
$string['privacy:metadata:attendancesessions'] = 'Sesiuni la care se va face prezența.';
$string['privacy:metadata:attendancewarningdone'] = 'Jurnalul avertizărilor trimise utilizatorilor despre înregistrarea prezențelor lor.';
$string['privacy:metadata:duration'] = 'Durata sesiunii în secunde';
$string['privacy:metadata:groupid'] = 'Identificator grup asociat sesiunii.';
$string['privacy:metadata:ipaddress'] = 'Adresa IP de la care a fost marcată prezența.';
$string['privacy:metadata:lasttaken'] = 'Data și ora când s-a facut ultima dată prezența la sesiune';
$string['privacy:metadata:lasttakenby'] = 'Identificatorul utilizatorului care a făcut ultima dată prezența în această sesiune';
$string['privacy:metadata:notifyid'] = 'Identificatorul sesiunii de prezență care are avertizarea asociată.';
$string['privacy:metadata:remarks'] = 'Comentarii despre prezența utilizatorului';
$string['privacy:metadata:sessdate'] = 'Data și ora începerii sesiunii.';
$string['privacy:metadata:sessionid'] = 'ID sesiune de prezență';
$string['privacy:metadata:statusid'] = 'ID-ul statusului de prezență at cursantului.';
$string['privacy:metadata:statusset'] = 'Status-ul setat căruia îi aparșine ID-ul status-ului';
$string['privacy:metadata:studentid'] = 'Identificatorul cursantului căruia i s-a înregistrat prezența.';
$string['privacy:metadata:takenby'] = 'Identificatorul utilizatorul care a făcut ultima prezență a utilizatorului.';
$string['privacy:metadata:timemodified'] = 'Data și ora când sesiunea a fost modificată ultima dată.';
$string['privacy:metadata:timesent'] = 'Data și ora când a fost trimisă avertizarea.';
$string['privacy:metadata:timetaken'] = 'Data și ora când s-a înregistrat prezența cursantului.';
$string['privacy:metadata:userid'] = 'ID-ul utilizatorului căruia i se va trimite avertizarea.';
$string['processingfile'] = 'Se procesează fișierul';
$string['qr_cookie_error'] = 'Sesiunea QR a expirat';
$string['qr_pass_wrong'] = 'Parola QR este greșită sau a expirat.';
$string['qrcode'] = 'Cod QR';
$string['qrcodeandpasswordheader'] = 'Scanați codul QR de mai jos sau folosiți parola de mai jos pentru a vă înregistra prezența.';
$string['qrcodeheader'] = 'Scanați codul QR de mai jos pentru a vă înregistra prezența.';
$string['qrcodevalidafter'] = 'secunde';
$string['qrcodevalidbefore'] = 'Cod QR valid pentru:';
$string['randompassword'] = 'Parolă aleatorie';
$string['remark'] = 'Observații ale: {$a}';
$string['remarks'] = 'Observații';
$string['repeatasfollows'] = 'Se repetă sesiunea de mai sus, după cum urmează';
$string['repeatevery'] = 'Repetă în fiecare';
$string['repeaton'] = 'Repetă';
$string['repeatuntil'] = 'Repetă până în';
$string['report'] = 'Raport';
$string['reportsessiondate'] = 'Data sesiunii';
$string['reportsessionduration'] = 'Durata sesiunii';
$string['reportsessionlasttaken'] = 'Ultima dată când s-a făcut prezența (profesor)';
$string['required'] = 'Necesar*';
$string['requiredentries'] = 'Înregistrările temporare suprascriu înregistrările de prezenței cursanților';
$string['requiredentry_help'] = '<p align="center"><b>Prezență</b></p>
<p align="left"><strong>Fuzionare conturi</strong></p>
<p align="stânga">
<table border="2" cellpadding="4">
<tr>
<th>Utilizator Moodle</th>
<th>Utilizator temporar</th>
<th>Acțiune</th>
</tr>
<tr>
<td>Informații despre prezență</td>
<td>Informații despre prezență</td>
<td>Utilizatorul temporar va suprascrie utilizatorul Moolde</td>
</tr>
<tr>
<td>Nu există informații despre prezență</td>
<td>Informații despre prezență</td>
<td>Prezența utilizatorului temporar va fi transferată utilizatorului Moodle</td>
</tr>
<tr>
<td>Informații despre prezență</td>
<td>Nu există informații despre prezență</td>
<td>Utilizatorul temporar va fi șters</td>
</tr>
<tr>
<td>Nu există informații despre prezență</td>
<td>Nu există informații despre prezență</td>
<td>Utilizatorul temporar va fi șters</td>
</tr>
</table>

</p>
<p align="left"><strong>Utilizatorul temporar va fi șters în toate situațiile după acțiunea de fuziune</strong></p>';
$string['requiresubnet'] = 'Este necesară adresa rețelei';
$string['requiresubnet_help'] = 'Înregistrarea prezenței poate fi restricționată pentru anumite rețele prin specificarea unei adrese IP parțiale sau complete separate prin virgulă.';
$string['resetcaledarcreate'] = 'Evenimentele din calendar au fost activate, dar o serie de sesiuni existente nu au evenimente. Doriți să creați evenimente în calendar pentru toate sesiunile existente?';
$string['resetcaledardelete'] = 'Evenimentele din calendar au fost dezactivate, dar un număr de sesiuni existente au evenimente care ar trebui șterse. Doriți să ștergeți toate evenimentele existente?';
$string['resetcalendar'] = 'Resetează calendarul';
$string['resetdescription'] = 'Rețineți că ștergerea datelor de prezență va șterge informațiile din baza de date. Puteți ascunde sesiunile mai vechi care au data începerii modificată!';
$string['resetstatuses'] = 'Restaurează status-urile ca implicite';
$string['restoredefaults'] = 'Restaurează setările implicite';
$string['resultsperpage'] = 'Rezultate pe pagină';
$string['resultsperpage_desc'] = 'Numărul de cursanți afișat pe o pagină';
$string['rotateqrcode'] = 'Schimbare cod QR';
$string['rotateqrcode_cleartemppass_task'] = 'Sarcina de ștergere a parolelor temporare generate prin funcționalitate de regenerare a codului QR.';
$string['rotateqrcodeexpirymargin'] = 'Intervalul de secunde până la expirarea codului QR/parolei';
$string['rotateqrcodeexpirymargin_desc'] = '';
$string['rotateqrcodeinterval'] = 'Interval de schimbare al parolei /QR cod (secunde)';
$string['rotateqrcodeinterval_desc'] = 'Intervalul de timp (secunde) pentru a regenera codul QR/parola.';
$string['save'] = 'Salvează prezența';
$string['saveandshownext'] = 'Salvare și afișare pagina următoare';
$string['scantime'] = 'Data și ora cînd s-a făcut citirea';
$string['search:activity'] = 'Prezență - informații despre activitate';
$string['selectactivity'] = 'Selectare activitate';
$string['session'] = 'Sesiune';
$string['session_help'] = 'Sesiune';
$string['sessionadded'] = 'Sesiunea a adăugată cu succes';
$string['sessionalreadyexists'] = 'Sesiunea există deja pentru această dată';
$string['sessiondate'] = 'Data';
$string['sessiondays'] = 'Zilele sesiunii';
$string['sessiondeleted'] = 'Sesiune ștearsă cu succes';
$string['sessiondescription'] = 'Descrierea sesiunii';
$string['sessionduplicate'] = 'Există o sesiune similară a cursului: {$a->course} în prezență: {$a->activity}, {$a->date}';
$string['sessionexist'] = 'Sesiunea nu a fost adăugată (există deja)';
$string['sessiongenerated'] = 'O sesiune a fost generată cu succes';
$string['sessions'] = 'Sesiuni';
$string['sessionsallcourses'] = 'Toate cursurile';
$string['sessionsbyactivity'] = 'Instanță de prezență';
$string['sessionsbycourse'] = 'Curs';
$string['sessionsbydate'] = 'Saptămână';
$string['sessionscompleted'] = 'Sesiune completă';
$string['sessionscurrentcourses'] = 'Cursurile actuale';
$string['sessionsgenerated'] = '{$a} sesiuni au fost generate cu succes';
$string['sessionsids'] = 'ID-urile sesiunilor';
$string['sessionsnotfound'] = 'Nu există sesiuni în intervalul de timp selectat';
$string['sessionstartdate'] = 'Data de începere a sesiunii';
$string['sessionstotal'] = 'Numărul total de sesiuni';
$string['sessionsupdated'] = 'Sesiuni actualizate';
$string['sessiontype'] = 'Tip';
$string['sessiontype_help'] = 'Puteți adăuga sesiuni pentru toți cursanții sau pentru un grup de cursanți. Posibilitatea de a adăuga diferite tipuri depinde de modul de activitate pe grupuri.

* În modul grup „Fără grupuri” puteți adăuga numai doar pentru toți cursanții.
* În modul grup „Grupuri separate” puteți adăuga numai sesiuni pentru un grup de cursanți.
* În modul grup „Grupuri vizibile” puteți adăuga ambele tipuri de sesiuni.';
$string['sessiontypeshort'] = 'Tip';
$string['sessionunknowngroup'] = 'O sesiune specifică grup(uri) necunoscut(e): {$a}';
$string['sessionupdated'] = 'Sesiune actualizată cu succes';
$string['set_by_student'] = 'Înregistrare făcută manual';
$string['setallstatuses'] = 'Setează statusul pentru';
$string['setallstatusesto'] = 'Setează status-ul la «{$a}»';
$string['setperiod'] = 'Intervalul în minute pentru a permite accesul la IP';
$string['settings'] = 'Setări';
$string['setunmarked'] = 'Setat automat când nu este marcat';
$string['setunmarked_help'] = 'Dacă este activat în sesiune, setați acest status dacă un student nu și-a marcat propria prezență.';
$string['showdefaults'] = 'Afișează implicit';
$string['showduration'] = 'Afișează durata';
$string['showextrauserdetails'] = 'Afișare detalii suplimentare despre utilizator';
$string['showqrcode'] = 'Afișare cod QR';
$string['showsessiondescriptiononreport'] = 'Afișarea descrierii sesiunii în raport';
$string['showsessiondescriptiononreport_desc'] = 'Arătați descrierea sesiunii când se afișează rapoartele de prezență.';
$string['showsessiondetails'] = 'Afișati detaliile sesiunii';
$string['somedisabledstatus'] = '(Unele opțiuni au fost șterse deoarece sesiunea a început.)';
$string['sortedgrid'] = 'Tabel ordonat';
$string['sortedlist'] = 'Listă ordonată';
$string['startofperiod'] = 'Începutul perioadei';
$string['starttime'] = 'Data începerii';
$string['status'] = 'Status';
$string['statusall'] = 'toate';
$string['statusdeleted'] = 'Status șters';
$string['statuses'] = 'Status-uri';
$string['statusset'] = 'Status setat {$a}';
$string['statussetsettings'] = 'Status setat';
$string['statustotalcount'] = 'Status {$a} - Număr total';
$string['statustotalcountcurrentweek'] = 'Status {$a} - Număr total pentru săptămâna curentă';
$string['statustotalcountpreviousweek'] = 'Status {$a} - Număr total pentru săptămâna anterioară';
$string['statusunselected'] = 'neselectat';
$string['strftimedm'] = '%b %d';
$string['strftimedmw'] = '<nobr>%a %b %d</nobr>';
$string['strftimedmy'] = '%d %b %Y';
$string['strftimedmyhm'] = '%d %b %Y %I.%M%p';
$string['strftimedmyw'] = '<nobr>%a %d %b %Y</nobr>';
$string['strftimeh'] = '%I%p';
$string['strftimehm'] = '%I:%M%p';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentid'] = 'ID cursant';
$string['studentmarked'] = 'Prezența dumneavoastră la această sesiune a fost înregistrată.';
$string['studentmarking'] = 'Înregistrare cursanți';
$string['studentpassword'] = 'Parolă cursant';
$string['studentrecordingexpanded'] = 'Întregistrare student extinsă';
$string['studentrecordingexpanded_desc'] = 'Afișează setările "Înregistrare de către cursant" expandate în mod implicit la crearea de noi sesiuni.';
$string['studentscanmark'] = 'Permite cursanților să își înregistreze propria prezență.';
$string['studentscanmark_desc'] = 'Dacă se bifează, profesorul va putea să le permită cursanților să își marcheze prezența proprie.';
$string['studentscanmark_help'] = 'Dacă este bifat, cursanții își vor putea schimba propriul status de prezență la sesiune.';
$string['studentscanmarksessiontime'] = 'Cursanții înregistrează prezența în timpul sesiunii';
$string['studentscanmarksessiontime_desc'] = 'Dacă se bifează, cursanții pot să își înregistreze prezența doar în timpul sesiunii.';
$string['studentscanmarksessiontimeend'] = 'Încheierea sesiunii (minute)';
$string['studentscanmarksessiontimeend_desc'] = 'Dacă sesiunea nu are o oră de încheiere, câte minute disponibile ar trebui să aibă pentru ca participanții să își înregistreze prezența.';
$string['studentsearlyopentime'] = 'Deschidere sesiune mai devreme pentru marcare';
$string['studentsearlyopentime_help'] = 'Se permite ca profesorii să deschidă sesiunea mai repede, iar prezența să fie făcută înaintea orei reale de începere.';
$string['submit'] = 'Trimitere';
$string['submitattendance'] = 'Trimite prezența';
$string['submitattendancefuture'] = 'Raportul viitoarelor absențe';
$string['submitpassword'] = 'Trimitere parolă';
$string['subnet'] = 'Subnet';
$string['subnetactivitylevel'] = 'Permite configurare rețea la nivel de activitate';
$string['subnetwrong'] = 'Prezența poate fi înregistrată doar din anumite locații iar acest computer nu este pe lista celor acceptate.';
$string['summary'] = 'Rezumat';
$string['tablerenamefailed'] = 'Redenumirea tabelului attforblock în prezență a eșuat';
$string['tactions'] = 'Acțiune';
$string['takeattendance'] = 'Faceți prezența';
$string['takensessions'] = 'Sesiuni la care ați participat';
$string['tcreated'] = 'Creat';
$string['tempaddform'] = 'Adaugă utilizator temporar';
$string['tempexists'] = 'Există deja un utilizator temporar cu această adresă de email';
$string['temptable'] = 'Lista utilizatorilor temporari';
$string['tempuser'] = 'Utilizator temporar';
$string['tempusermerge'] = 'Fuzionare informații despre utilizatorul temporar';
$string['tempusers'] = 'Utilizatori temporari';
$string['tempusersedit'] = 'Editează utilizatorul temporar';
$string['tempuserslist'] = 'Utilizatori temporari';
$string['thirdpartyemails'] = 'Notifică alți utilizatori';
$string['thirdpartyemails_help'] = 'Lista celorlalți utilizatori care vor fi notificați.
(este necesară capabilitatea mod/attendance:viewreports)';
$string['thirdpartyemailsubject'] = 'Avertizare prezență';
$string['thirdpartyemailtext'] = '{$a->firstname} {$a->lastname} prezența la cursul {$a->coursename} {$a->aname} e mai mică decât {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = 'Primești asta deoarece profesorul acestui curs a adăugat e-mailul tău la lista destinatarilor';
$string['thiscourse'] = 'Acest curs';
$string['time'] = 'Ore de desfășurare';
$string['timeahead'] = 'Sesiunile multiple care depășesc un an nu pot fi create, vă rugăm să ajustați datele de început și de sfârșit.';
$string['timemodified'] = 'Dată și oră modificată';
$string['timetaken'] = 'Ora la care s-a făcut prezența';
$string['to'] = 'până la:';
$string['todate'] = 'până la data';
$string['totalnumsessions'] = 'Număr total de sesiuni';
$string['triggered'] = 'Notificat prima dată';
$string['tuseremail'] = 'Email';
$string['tusername'] = 'Nume complet';
$string['ungraded'] = 'Sesiuni actualizate';
$string['unknowngroup'] = 'Grup necunoscut';
$string['unknownstatus'] = 'Identificator status necunoscut: {$a}';
$string['update'] = 'Actualizare';
$string['updateattendance'] = 'Actualizare prezență';
$string['uploadattendance'] = 'Încarcă prezența prin fișier CSV';
$string['usedefaultsubnet'] = 'Utilizare implicită';
$string['usemessageform'] = 'sau folosește formularul de mai jos pentru a trimite un mesaj utilizatorilor selectați';
$string['userexistingstatus'] = 'Prezența dumneavoastră a fost deja marcată ca: <strong>{$a}</strong>, utilizați formularul de mai jos pentru a modifica, dacă este necesar.';
$string['userexists'] = 'Există deja un utilizator real cu această adresă de mail';
$string['userid'] = 'ID-ul utilizatorului';
$string['userimportfield'] = 'Câmp extern al utilizatorului';
$string['userimportfield_help'] = 'Câmp din CSV-ul încărcat care conține identificatorul utilizatorului';
$string['userimportto'] = 'Câmp utilizator Moodle';
$string['userimportto_help'] = 'Câmp Moodle care corespunde datelor din exportul CSV';
$string['users'] = 'Utilizatori pentru export';
$string['usersessiongrade'] = 'Nota utilizatorului pentru sesiune';
$string['usersessionremarks'] = 'Observații privind sesiunea utilizatorului';
$string['usersessiontaken'] = 'Sesiunile la care a participat utilizatorul';
$string['userstatus'] = 'Statusul sesiunii utilizatorului';
$string['usestatusset'] = 'Status setat';
$string['variable'] = 'variabilă';
$string['variablesupdated'] = 'Variabilă actualizată cu succes';
$string['versionforprinting'] = 'versiune pentru tipărire';
$string['viewmode'] = 'Vezi mod';
$string['warnafter'] = 'Numărul de sesiuni la care ați participat înaintea avertizării';
$string['warnafter_help'] = 'Avertizările vor fi declanșate numai atunci când utilizatorului i s-a înregistrat prezența la cel puțin acest număr de sesiuni.';
$string['warningdeleted'] = 'Avertizare ștearsă';
$string['warningdesc'] = 'Aceste avertizări vor fi adăugate automat la orice activitate nouă de prezență. Dacă sunt declanșate mai multe avertizări exact în același timp, va fi trimisă doar avertizarea cu pragul de avertizare inferior.';
$string['warningfailed'] = 'Nu puteți crea o avertizare care utilizează același procent și număr de sesiuni.';
$string['warningpercent'] = 'Avertizați dacă procentul scade sub';
$string['warningpercent_help'] = 'O avertizare va fi declanșată atunci când procentul total scade sub acest număr.';
$string['warnings'] = 'Avertizări setate';
$string['warningthreshold'] = 'Prag de avertizare';
$string['warningupdated'] = 'Avertizări actualizate';
$string['week'] = 'săptămână(săptămâni)';
$string['weekcommencing'] = 'Săptămâna care începe';
$string['weeks'] = 'Săptămâni';
$string['youcantdo'] = 'Nu puteți face nimic';
