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
 * Strings for component 'course', language 'ro', version '4.1'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Selectorul de activități din subsol';
$string['activitychooseractivefooter_desc'] = 'Selectorul de activități poate accepta pluginuri care adaugă elemente la subsol.';
$string['activitychoosercategory'] = 'Selectorul de activități';
$string['activitychooserhidefooter'] = 'Fără subsol';
$string['activitychooserrecommendations'] = 'Activități recomandate';
$string['activitychoosersettings'] = 'Setările selectorului de activități';
$string['activitychoosertabmode'] = 'Taburile selectorului de activități';
$string['activitychoosertabmode_desc'] = 'Selectorul de activități permite profesorului să selecteze cu ușurință activitățile și resursele pe care să le adauge la curs. Această setare determină care taburi ar trebui să fie afișate în selector. Rețineți că tabul cu favorite este afișată numai pentru un utilizator dacă a marcat una sau mai multe activități ca fiind favorite, iar tabul recomandate este afișat numai dacă un administrator de site a specificat unele activități recomandate.';
$string['activitychoosertabmodeone'] = 'Favorite, Toate, Activități, Resurse, Recomandate';
$string['activitychoosertabmodethree'] = 'Favorite, Activități, Resurse, Recomandate';
$string['activitychoosertabmodetwo'] = 'Favorite, Toate, Recomandate';
$string['activitydate:closed'] = 'Închis:';
$string['activitydate:closes'] = 'Se închide:';
$string['activitydate:opened'] = 'Deschis:';
$string['activitydate:opens'] = 'Se deschide:';
$string['aria:coursecategory'] = 'Categoria de curs';
$string['aria:courseimage'] = 'Imaginea reprezentativă a cursului';
$string['aria:coursename'] = 'Denumirea cursului';
$string['aria:courseshortname'] = 'Numele prescurtat al cursului';
$string['aria:defaulttab'] = 'Activități implicite';
$string['aria:favourite'] = 'Cursul este favorit';
$string['aria:favouritestab'] = 'Activități cu favorite';
$string['aria:modulefavourite'] = 'Marcați favorită activitatea {$a}';
$string['aria:recommendedtab'] = 'Activități recomandate';
$string['browsecourseadminindex'] = 'Analizați administrarea cursului cu acest index.';
$string['browsesettingindex'] = 'Analizați setările cu acest index.';
$string['completion_automatic:done'] = 'Completat:';
$string['completion_automatic:failed'] = 'Eșuat:';
$string['completion_automatic:todo'] = 'De îndeplinit:';
$string['completion_manual:aria:done'] = '{$a} este marcat ca fiind completat. Apăsați pentru a seta status necompletat.';
$string['completion_manual:aria:markdone'] = 'Setează {$a} ca activitate completată';
$string['completion_manual:done'] = 'Completat';
$string['completion_manual:markdone'] = 'Setează ca activitate completată';
$string['completion_setby:auto:done'] = 'Îndeplinită: {$a->condition} (setat de {$a->setby})';
$string['completion_setby:auto:todo'] = 'De îndeplinit: {$a->condition} (setat de {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} este marcată de {$a->setby} ca finalizată. Apăsați pentru a reveni la starea anterioară.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} este marcată de {$a->setby} ca nefinalizată. Apăsați pentru a marca finalizată.';
$string['completionrequirements'] = 'Criterii de completare pentru {$a}';
$string['courseaccess'] = 'Acces la curs';
$string['coursealreadyfinished'] = 'Curs încheiat deja';
$string['coursecontentnotification'] = 'Trimiteți o notificare de modificare a conținutului';
$string['coursecontentnotification_help'] = 'Bifați caseta pentru a notifica participanții la curs despre această activitate sau resursă modificată. Doar utilizatorii care pot accesa activitatea sau resursa vor primi notificarea.';
$string['coursecontentnotifnew'] = '{$a->coursename} conținut nou';
$string['coursecontentnotifnewbody'] = '<p>Resursa /  Activitatea de tip {$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> a fost adăugat(ă) în cursul <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Modificați setările pentru notificări </a></p>';
$string['coursecontentnotifupdate'] = '{$a->coursename} modificarea conținutului';
$string['coursecontentnotifupdatebody'] = '<p>Notificare!<br><br>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> a fost modificat(ă) în cursul <br><a href="{$a->courselink}">{$a->coursename}</a>.</p><p><br><br><a href="{$a->notificationpreferenceslink}">Modificați setările notificărilor.</a></p>';
$string['coursenotyetfinished'] = 'Cursul nu s-a încheiat încă';
$string['coursenotyetstarted'] = 'Cursul nu a început încă';
$string['courseparticipants'] = 'Participanți la curs';
$string['coursetoolong'] = 'Cursul e prea lung.';
$string['customfield_islocked'] = 'Blocat';
$string['customfield_islocked_help'] = 'Dacă câmpul este blocat, numai utilizatorii cu capacitatea de a schimba câmpurile personalizate blocate (în mod implicit numai utilizatorii cu rolul implicit de manager) îl vor putea modifica în setările cursului.';
$string['customfield_notvisible'] = 'Nimeni';
$string['customfield_visibility'] = 'Vizibil pentru';
$string['customfield_visibility_help'] = 'Această setare determină cine poate vizualiza numele și valoarea câmpului personalizat în lista cursurilor sau în filtrul de câmp personalizat disponibil din tabloul de bord.';
$string['customfield_visibletoall'] = 'Orice utilizator';
$string['customfield_visibletoteachers'] = 'Profesori';
$string['customfieldsettings'] = 'Setări obișnuite ale câmpurilor personalizate din cursului';
$string['daystakingcourse'] = 'Zile de participare la curs';
$string['downloadcontent'] = 'Include în descărcarea conținutului cursului';
$string['downloadcontent_help'] = 'Această activitate sau resursă ar trebui să fie inclusă în fișierul zip, conținutul cursului disponibil pentru descărcare? Fișierul, folderul, pagina și eticheta pot fi descărcate complet. Pentru toate celelalte activități și resurse, sunt descărcate doar numele și descrierea. Această opțiune necesită descărcarea conținutului cursului pentru a fi activată în setările cursului.

Setarea nu are niciun efect asupra descărcarii de conținut a aplicației mobile pentru utilizare offline.';
$string['downloadcourseconfirmation'] = 'Sunteți pe cale să descărcați un fișier zip cu conținut de curs (cu excepția articolelor care nu pot fi descărcate și a fișierelor mai mari de {$a}).';
$string['downloadcoursecontent'] = 'Descărcați conținutul cursului';
$string['downloadcoursecontent_help'] = 'Această setare determină dacă conținutul cursului poate fi descărcat de către utilizatorii cu capacitatea de descărcare a conținutului cursului (în mod implicit, utilizatorii cu rol de student sau profesor).';
$string['enabledownloadcoursecontent'] = 'Activați descărcarea conținutului cursului';
$string['errorendbeforestart'] = 'Data de încheiere ({$a}) este înainte de data de începere a cursului.';
$string['favourite'] = 'Curs evidențiat';
$string['gradetopassnotset'] = 'Acest curs nu are notă de trecere. Poate fi setată în elementul de notă al cursului (Configurare catalog de note).';
$string['informationformodule'] = 'Informații despre activitatea {$a}';
$string['module'] = 'Activitate';
$string['namewithlink'] = 'Denumirea categoriei cu link';
$string['noaccesssincestartinfomessage'] = 'Bună {$a->userfirstname},
<p> Un număr de studenți din {$a->coursename} nu au accesat niciodată cursul. </p>';
$string['nocourseactivity'] = 'Activitate insuficientă a cursului între începutul și sfârșitul cursului';
$string['nocourseendtime'] = 'Cursul nu are o dată de încheiere';
$string['nocoursesections'] = 'Fără secțiuni de curs';
$string['nocoursestudents'] = 'Nu sunt studenți';
$string['norecentaccessesinfomessage'] = 'Bună {$a->userfirstname},
<p> Un număr de studenți din {$a->coursename} nu au accesat cursul recent. </p>';
$string['noteachinginfomessage'] = 'Bună {$a->userfirstname},
<p> Cursurile cu date de începere în săptămâna următoare au fost identificate ca fiind lipsite de înscrieri, nici profesori nici cursanți. </p>';
$string['participants:perpage'] = 'Numărul de participanți per pagină';
$string['participants:perpage_help'] = 'Specificați numărul de participanți afișati per pagină';
$string['participantsnavigation'] = 'Navigare separată a participanților.';
$string['privacy:completionpath'] = 'Finalizarea cursului';
$string['privacy:favouritespath'] = 'Informații de curs favorite';
$string['privacy:metadata:activityfavouritessummary'] = 'Sistemul de cursuri conține informații despre ce elemente din selectorul de activități au fost marcate ca fiind favorite de utilizator.';
$string['privacy:metadata:completionsummary'] = 'Cursul conține informații despre finalizarea executată de utilizator.';
$string['privacy:metadata:favouritessummary'] = 'Cursul conține informații despre cursul marcat ca fiind favorit de utilizator.';
$string['privacy:perpage'] = 'Numărul de cursuri care urmează a fi afișate pe pagină.';
$string['recommend'] = 'Recomandat';
$string['recommendcheckbox'] = 'Activitate recomandată: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} după începerea cursului';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} înainte de începerea cursului';
$string['searchactivitiesbyname'] = 'Caută activități după nume';
$string['searchresults'] = 'Rezultatele căutării: {$a}';
$string['studentsatriskincourse'] = 'Cursanți cu risc în cursul {$a}';
$string['studentsatriskinfomessage'] = 'Bună {$a->userfirstname},
<p> Cursanții din cursul {$a->coursename} au fost identificați ca fiind expuși riscului de abandon. </p>';
$string['submitsearch'] = 'Trimiteți căutarea';
$string['target:coursecompetencies'] = 'Cursanții cu riscul de a nu atinge competențele atribuite unui curs';
$string['target:coursecompetencies_help'] = 'Această țintă descrie dacă un student riscă să nu realizeze competențele atribuite unui curs. Această țintă consideră că toate competențele atribuite cursului trebuie atinse până la sfârșitul cursului.';
$string['target:coursecompletion'] = 'Cursanții care riscă să nu îndeplinească condițiile de finalizare a cursului';
$string['target:coursecompletion_help'] = 'Această țintă descrie dacă studentul este considerat expus riscului de a nu îndeplini condițiile de finalizare a cursului.';
$string['target:coursedropout'] = 'Cursanții care riscă să renunțe';
$string['target:coursedropout_help'] = 'Această țintă descrie dacă un cursant este considerat expus riscului de abandon.';
$string['target:coursegradetopass'] = 'Cursanții care riscă să nu atingă nota minimă de trecere pentru a finaliza cursul';
$string['target:coursegradetopass_help'] = 'Această țintă descrie dacă un cursant riscă să nu atingă nota minimă de trecere pentru a finaliza cursul.';
$string['target:noaccesssincecoursestart'] = 'Cursanți care nu au accesat încă cursul';
$string['target:noaccesssincecoursestart_help'] = 'Această țintă descrie cursanții care nu au accesat niciodată un curs la care sunt înscriși.';
$string['target:noaccesssincecoursestartinfo'] = 'Următorii cursanți sunt înscriși la un curs care a început, dar nu au accesat niciodată cursul.';
$string['target:norecentaccesses'] = 'Cursanții care nu au accesat recent cursul';
$string['target:norecentaccesses_help'] = 'Această țintă identifică cursanții care nu au accesat un curs la care sunt înscriși în intervalul de analiză stabilit (în mod implicit luna trecută).';
$string['target:norecentaccessesinfo'] = 'Următorii cursanți nu au accesat un curs la care sunt înscriși în intervalul de analiză stabilit (în mod implicit luna trecută).';
$string['target:noteachingactivity'] = 'Cursuri cu riscul de a nu începe';
$string['target:noteachingactivity_help'] = 'Acest obiectiv descrie dacă cursurile care urmează să înceapă în săptămâna viitoare vor avea activitate didactică.';
$string['target:noteachingactivityinfo'] = 'Următoarele cursuri care urmează să înceapă în zilele următoare riscă să nu înceapă, deoarece nu au profesori sau cursanți înscriși.';
$string['targetlabelstudentcompetenciesno'] = 'Cursant care este probabil să atingă competențele atribuite unui curs';
$string['targetlabelstudentcompetenciesyes'] = 'Cursant cu riscul de a nu atinge competențele atribuite unui curs';
$string['targetlabelstudentcompletionno'] = 'Cursant care este probabil să îndeplinească condițiile de finalizare a cursului';
$string['targetlabelstudentcompletionyes'] = 'Cursant care riscă să nu îndeplinească condițiile de finalizare a cursului';
$string['targetlabelstudentdropoutno'] = 'Nu este în pericol';
$string['targetlabelstudentdropoutyes'] = 'Cursant care riscă să renunțe';
$string['targetlabelstudentgradetopassno'] = 'Cursant care este probabil să îndeplinească nota minimă pentru finalizarea cursului.';
$string['targetlabelstudentgradetopassyes'] = 'Elevul care riscă să nu îndeplinească nota minimă pentru finalizarea cursului.';
$string['targetlabelteachingno'] = 'Cursuri cu riscul de a nu începe';
$string['targetlabelteachingyes'] = 'Utilizatori cu capacități de predare care au acces la curs';
