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
 * Strings for component 'tool_usertours', language 'ro', version '4.1'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Deasupra';
$string['actions'] = 'Acțiuni';
$string['appliesto'] = 'Se aplică la';
$string['backdrop'] = 'Afișează cu fundal';
$string['backdrop_help'] = 'Puteți utiliza un fundal pentru a evidenția partea din pagină pe care o indicați.

Notă: Fundalurile nu sunt compatibile cu anumite părți ale paginii, cum ar fi bara de navigare.';
$string['below'] = 'Mai jos';
$string['block'] = 'Block';
$string['block_named'] = 'Block-ul denumit \'{$a}\'';
$string['cachedef_stepdata'] = 'Lista pașilor turului utilizatorilor';
$string['cachedef_tourdata'] = 'Lista cu informații despre tururile utilizatorului activate care sunt preluate pe fiecare pagină';
$string['confirmstepremovalquestion'] = 'Sigur doriți să eliminați acest pas?';
$string['confirmstepremovaltitle'] = 'Confirmă eliminarea pasului';
$string['confirmtourremovalquestion'] = 'Sigur doriți să eliminați acest tur?';
$string['confirmtourremovaltitle'] = 'Confirmă eliminarea turului';
$string['content'] = 'Conținut';
$string['content_heading'] = 'Conținut';
$string['content_help'] = 'Conținutul care descrie pasul poate fi adăugat ca text simplu, inclus în etichete multilang (pentru a fi utilizat cu filtrul de conținut în mai multe limbi), dacă este necesar.';
$string['content_type'] = 'Tip de conținut';
$string['content_type_help'] = '* Manual - conținutul este inserat folosind un editor de text
* Identificator de șir - în formatul identificatorului de șir,componentă (fără spațiu după virgulă)';
$string['content_type_langstring'] = 'Identificator identificatorului de șir';
$string['content_type_manual'] = 'Manual';
$string['cssselector'] = 'Selector CSS';
$string['defaultvalue'] = '({$a}) implicit';
$string['delay'] = 'Întârziere înainte de a arăta pasul';
$string['delay_help'] = 'Opțional, puteți alege să adăugați o întârziere înainte de afișarea pasului.

Această întârziere este în milisecunde.';
$string['description'] = 'Descriere';
$string['description_help'] = 'Descrierea unui Tur poate fi adăugată ca text simplu, inclusă în etichete multilingve (pentru a fi utilizate cu filtrul de conținut în mai multe limbi), dacă este necesar.

Alternativ, un ID de șir de limbă poate fi introdus în identificatorul de format,componentă (fără paranteze sau spațiu după virgulă).';
$string['displaystepnumbers'] = 'Afișează numărul de pași';
$string['displaystepnumbers_help'] = 'Dacă să se afișeze numărul de pași parcurși, ex. 1/4, 2/4 etc. pentru a indica lungimea turului utilizatorului.';
$string['done'] = 'Terminat';
$string['duplicatetour'] = 'Duplicare tur';
$string['duplicatetour_name'] = '{$a} (copie)';
$string['editstep'] = 'Se editează "{$a}"';
$string['enabled'] = 'Activat';
$string['endonesteptour'] = 'Am înțeles';
$string['endtour'] = 'Încheie turul';
$string['endtourlabel'] = 'Eticheta de final de tur';
$string['endtourlabel_help'] = 'Puteți specifica opțional o etichetă personalizată pentru butonul de încheiere a turului. Eticheta implicită este „Am înțeles” pentru tururi cu un singur pas și „Încheierea turului” pentru tururile cu mai mulți pași.

Alternativ, un ID de șir de limbă poate fi introdus în identificatorul de format,componentă (fără paranteze sau spațiu după virgulă).';
$string['event_step_shown'] = 'Pasul afișat';
$string['event_tour_ended'] = 'Turul s-a încheiat';
$string['event_tour_reset'] = 'Resetare tur';
$string['event_tour_started'] = 'Turul a început';
$string['exporttour'] = 'Tur de export';
$string['filter_accessdate'] = 'Data accesului';
$string['filter_accessdate_enabled'] = 'Activați filtrul pentru data de acces';
$string['filter_accessdate_enabled_help'] = 'Afișați turul numai noilor utilizatori sau utilizatorilor care au accesat site-ul recent.';
$string['filter_category'] = 'Categorie';
$string['filter_category_help'] = 'Afișați turul pe o pagină care este asociată cu un curs din categoria selectată.';
$string['filter_course'] = 'Cursuri';
$string['filter_course_help'] = 'Afișați turul pe o pagină asociată cursului selectat.';
$string['filter_courseformat'] = 'Formatul cursului';
$string['filter_courseformat_help'] = 'Afișați turul pe o pagină care este asociată cu un curs folosind formatul de curs selectat.';
$string['filter_cssselector'] = 'Selector CSS';
$string['filter_cssselector_help'] = 'Afișați turul numai atunci când selectorul CSS specificat se găsește pe pagină.';
$string['filter_date_account_creation'] = 'Data creării contului de utilizator în';
$string['filter_date_first_login'] = 'Prima dată de acces a utilizatorului în';
$string['filter_date_last_login'] = 'Ultima dată de acces a utilizatorului în';
$string['filter_header'] = 'Filtre tur';
$string['filter_help'] = 'Selectați condițiile în care turul va fi afișat. Toate filtrele trebuie să se potrivească pentru ca un tur să fie afișat unui utilizator.';
$string['filter_role'] = 'Rol';
$string['filter_role_help'] = 'Un tur poate fi limitat la utilizatorii cu roluri selectate în contextul în care este afișat turul. De exemplu, restricționarea unui tur Dashboard la utilizatorii cu rol de student nu va funcționa dacă utilizatorii au rolul de student la un curs (așa cum se întâmplă în general). Un tur Dashboard poate fi limitat doar la utilizatorii cu rol de sistem.';
$string['filter_theme'] = 'Tema';
$string['filter_theme_help'] = 'Afișați turul când utilizatorul folosește una dintre temele selectate.';
$string['importtour'] = 'Importă turul';
$string['invalid_lang_id'] = 'Identificatorul de șir nu este valid';
$string['left'] = 'Stânga';
$string['modifyshippedtourwarning'] = 'Acesta este un tur al utilizatorilor care a fost livrat cu Moodle. Orice modificare pe care o faceți poate fi anulată la următoarea actualizare a site-ului.';
$string['moodle_language_identifier'] = 'Identificatorului de șir';
$string['movestepdown'] = 'Mutați pasul în jos';
$string['movestepup'] = 'Mutați pasul în sus';
$string['movetourdown'] = 'Mutați turul în jos';
$string['movetourup'] = 'Mutați turul în sus';
$string['name'] = 'Nume';
$string['name_help'] = 'Numele unui tur poate fi adăugat ca text simplu, inclus în etichete multilingve (pentru a fi utilizat cu filtrul de conținut în mai multe limbi), dacă este necesar.

Alternativ, un ID de șir de limbă poate fi introdus în identificatorul de format,componentă (fără paranteze sau spațiu după virgulă).';
$string['newstep'] = 'Pas nou';
$string['newtour'] = 'Creează un tur nou';
$string['next'] = 'Următorul';
$string['nextstep'] = 'Următorul';
$string['nextstep_sequence'] = 'Următorul ({$a->position}/{$a->total})';
$string['options_heading'] = 'Opțiuni';
$string['orphan'] = 'Afișați dacă ținta nu a fost găsită';
$string['orphan_help'] = 'Afișați pasul dacă ținta nu a putut fi găsită pe pagină.';
$string['pathmatch'] = 'Aplicați la potrivirea URL';
$string['pathmatch_help'] = 'Tururile vor fi afișate pe orice pagină a cărei adresă URL se potrivește cu această valoare.

Puteți utiliza caracterul% ca wildcard pentru a desemna o acțiune.
Unele exemple de valori includ:

* /my/% - pentru a se potrivi cu tabloul de bord
* /course/view.php?id=2 - pentru a se potrivi cu un anumit curs
* /mod/forum/view.php% - pentru a se potrivi cu lista de discuții pe forum
* /user/profile.php% - pentru a se potrivi cu pagina profilului utilizatorului

Dacă doriți să afișați un tur pe pagina principală a site-ului, utilizați  valoarea: "FRONTPAGE".';
$string['pausetour'] = 'Pauză';
$string['placement'] = 'Plasament';
$string['placement_help'] = 'Un pas poate fi plasat deasupra, dedesubt, la stânga sau la dreapta țintei. Mai sus sau mai jos este recomandat, deoarece acestea se ajustează mai bine pentru afișajul mobil.

Dacă pasul nu se potrivește pe o anumită pagină în locul specificat, acesta va fi plasat automat în altă parte.';
$string['pluginname'] = 'Orientare utilizatori';
$string['previousstep'] = 'Anterior';
$string['privacy:metadata:preference:completed'] = 'Ora la care ultimul utilizator a finalizat un tur al utilizatorului.';
$string['privacy:metadata:preference:requested'] = 'Ora în care ultimul utilizator a solicitat manual un tur al utilizatorului.';
$string['privacy:request:preference:completed'] = 'Ați marcat ultima dată turul utilizatorului „{$a->name}” ca finalizat la {$a->time}';
$string['privacy:request:preference:requested'] = 'Ați solicitat ultima dată turul utilizatorului „{$a->name}” în {$a->time}';
$string['reflex'] = 'Continuați cu click';
$string['reflex_help'] = 'Treceți la pasul următor când se face clic pe țintă.';
$string['resettouronpage'] = 'Resetați turul utilizatorului pe această pagină';
$string['resumetour'] = 'Reia';
$string['right'] = 'Dreapta';
$string['select_block'] = 'Selectează un block';
$string['selector_defaulttitle'] = 'Inserează un titlu descriptiv';
$string['selectordisplayname'] = 'Un selector CSS care se potrivește cu „{$a}”';
$string['selecttype'] = 'Selectați tipul de pas';
$string['sharedtourslink'] = 'Depozit de tururi';
$string['skip'] = 'Omite';
$string['skip_tour'] = 'Omite turul';
$string['target'] = 'Target';
$string['target_block'] = 'Block';
$string['target_heading'] = 'Pasul țintă';
$string['target_selector'] = 'Selector';
$string['target_selector_targetvalue'] = 'Selectori CSS';
$string['target_selector_targetvalue_help'] = 'Un selector CSS poate fi folosit pentru a viza aproape orice element de pe pagină. Selectorul adecvat poate fi găsit cu ușurință folosind instrumentele de dezvoltator pentru browserul dvs. web.';
$string['target_unattached'] = 'Afișează în mijlocul paginii';
$string['targettype'] = 'Tipul țintei';
$string['targettype_help'] = 'Fiecare pas este asociat cu o parte a paginii - ținta. Tipurile țintă sunt:

* Bloc - pentru afișarea unui pas lângă un bloc specificat
* Selector CSS - pentru definirea corectă a zonei țintă folosind CSS
* Afișare în mijlocul paginii - pentru un pas care nu trebuie să fie asociat cu o anumită parte a paginii';
$string['title'] = 'Titlu';
$string['title_help'] = 'Titlul unui pas poate fi adăugat ca text simplu, inclus în etichete multilang (pentru utilizare cu filtrul de conținut în mai multe limbi), dacă este necesar.

Alternativ, un ID de șir de limbă poate fi introdus în identificatorul de format, componentă (fără paranteze sau spațiu după virgulă).';
$string['tour1_content_addingblocks'] = 'De fapt, gândiți-vă cu atenție la includerea blocurilor pe paginile dvs. Blocurile nu sunt afișate în aplicația Moodle, deci, ca regulă generală, este mult mai bine să vă asigurați că site-ul dvs. funcționează bine fără blocuri.';
$string['tour1_content_blockregion'] = 'Există încă o regiune de bloc aici. Vă recomandăm să eliminați complet blocurile de navigare și administrare, întrucât toate funcționalitățile se află în altă parte în tema Boost.';
$string['tour1_content_customisation'] = 'Pentru a personaliza aspectul site-ului dumneavoastră și al paginii principale, utilizați meniul de setări din colțul acestui antet. Încercați să activați editarea chiar acum.';
$string['tour1_content_end'] = 'Acesta este sfârșitul turului dvs. de utilizator. Nu se va afișa din nou decât dacă îl resetați folosind linkul din subsol. În calitate de administrator, îți poți crea propriile tururi de genul acesta!';
$string['tour1_content_navigation'] = 'Navigarea majoră este acum prin acest sertar nav. Conținutul se actualizează în funcție de locul în care vă aflați pe site. Folosiți butonul din partea de sus pentru a-l ascunde sau a-l afișa.';
$string['tour1_content_welcome'] = 'Bine ai venit la tema Boost. Dacă ai făcut upgrade de la o versiune anterioară, este posibil ca unele lucruri să arate puțin diferite cu această temă.';
$string['tour1_title_addingblocks'] = 'Se adaugă block-uri';
$string['tour1_title_blockregion'] = 'Regiunea de blocare';
$string['tour1_title_customisation'] = 'Particularizare';
$string['tour1_title_end'] = 'Finalul turului';
$string['tour1_title_navigation'] = 'Navigare';
$string['tour1_title_welcome'] = 'Bine ai venit';
$string['tour2_content_addblock'] = 'Dacă activați editarea, puteți adăuga blocuri din sertarul nav. Cu toate acestea, gândiți-vă cu atenție la includerea blocurilor pe paginile dvs. Blocurile nu sunt afișate în aplicația Moodle, deci pentru cea mai bună experiență a utilizatorului, este mai bine să vă asigurați că cursul dvs. funcționează bine fără blocuri.';
$string['tour2_content_addingblocks'] = 'Puteți adăuga blocuri la această pagină folosind acest buton. Cu toate acestea, gândiți-vă cu atenție la includerea blocurilor pe paginile dvs. Blocurile nu sunt afișate în aplicația Moodle, deci pentru cea mai bună experiență a utilizatorului, este mai bine să vă asigurați că cursul dvs. funcționează bine fără blocuri.';
$string['tour2_content_customisation'] = 'Pentru a modifica setările cursului, utilizați meniul de setări din colțul acestui antet. Veți găsi un meniu de setări similar și pe pagina de pornire a fiecărei activități. Încercați să activați editarea chiar acum.';
$string['tour2_content_end'] = 'Acesta este sfârșitul turului dvs. de utilizator. Nu se va afișa din nou decât dacă îl resetați folosind linkul din subsol. Administratorul site-ului poate crea și alte tururi pentru acest site, dacă este necesar.';
$string['tour2_content_navigation'] = 'Navigarea se face acum prin acest sertar nav. Folosiți butonul din partea de sus pentru a-l ascunde sau a-l afișa. Veți vedea că există linkuri pentru secțiunile cursului dvs.';
$string['tour2_content_opendrawer'] = 'Încercați să deschideți sertarul de navă acum.';
$string['tour2_content_participants'] = 'Vizualizați participanții aici. Aici mergeți și pentru a adăuga sau a elimina studenți.';
$string['tour2_content_welcome'] = 'Bine ai venit la tema Boost. Dacă site-ul dvs. a fost actualizat de la o versiune anterioară, s-ar putea să găsiți că lucrurile arată puțin diferit aici, pe pagina cursului.';
$string['tour2_title_addblock'] = 'Adaugă un block';
$string['tour2_title_addingblocks'] = 'Se adaugă block-uri';
$string['tour2_title_customisation'] = 'Particularizare';
$string['tour2_title_end'] = 'Încheierea turului';
$string['tour2_title_navigation'] = 'Navigare';
$string['tour2_title_opendrawer'] = 'Deschideți sertarul de navigare';
$string['tour2_title_participants'] = 'Participanții la curs';
$string['tour2_title_welcome'] = 'Bine ai venit';
$string['tour3_content_dashboard'] = 'Noul dvs. tablou de bord are multe funcții pentru a vă ajuta să accesați cu ușurință informațiile cele mai importante pentru dvs.';
$string['tour3_content_displayoptions'] = 'Cursurile pot fi sortate după numele cursului, numele scurt al cursului sau data ultimei accesări.

De asemenea, puteți alege să afișați cursurile într-o listă, cu informații de rezumat sau vizualizarea implicită „card”.';
$string['tour3_content_overview'] = 'Blocul Prezentare generală a cursurilor arată toate cursurile la care sunteți înscris.

Puteți alege să afișați cursuri în curs de desfășurare, în trecut sau în viitor sau cursuri pe care le-ați marcat.';
$string['tour3_content_recentcourses'] = 'Blocul Cursuri accesate recent prezintă cursurile pe care le-ați vizitat ultima dată, permițându-vă să intrați direct înapoi.';
$string['tour3_content_starring'] = 'Puteți alege să marcați un curs pentru a-l scoate în evidență sau să ascundeți un curs care nu mai este important pentru dvs.

Aceste acțiuni vă afectează doar vizualizarea.

Puteți alege, de asemenea, să afișați cursurile într-o listă, sau cu informații de rezumat, sau vizualizarea implicită „card”.';
$string['tour3_content_timeline'] = 'Blocul Cronologie arată evenimentele dvs. importante viitoare.

Puteți alege să afișați activități în săptămâna următoare, luna sau mai departe în viitor.

Puteți afișa, de asemenea, elemente care sunt restante.';
$string['tour3_title_dashboard'] = 'Tabloul dvs. de bord';
$string['tour3_title_displayoptions'] = 'Opțiuni de afișare';
$string['tour3_title_overview'] = 'Cursurile mele';
$string['tour3_title_recentcourses'] = 'Cursuri recent accesate';
$string['tour3_title_starring'] = 'Cursuri cu vedete și ascunderi';
$string['tour3_title_timeline'] = 'Bloc cronologie';
$string['tour4_content_groupconvo'] = 'Dacă sunteți membru al unui grup cu mesaje de grup activate, veți vedea conversații de grup aici.

Conversațiile de grup de curs vă permit să interacționați cu ceilalți din grupul dvs. într-o locație privată și convenabilă.';
$string['tour4_content_icon'] = 'Puteți accesa mesajele dvs. din orice pagină folosind această pictogramă.

Dacă aveți mesaje necitite, numărul de mesaje necitite se va afișa și aici.

Faceți clic pe pictogramă pentru a deschide sertarul de mesagerie și a continua turul.';
$string['tour4_content_messaging'] = 'Noile funcții de mesagerie includ mesaje de grup în cadrul unui curs și un control mai bun asupra celor care vă pot trimite mesaje.';
$string['tour4_content_settings'] = 'Puteți accesa setările de mesagerie prin intermediul pictogramei dințate. O nouă setare de confidențialitate vă permite să restricționați cine vă poate trimite mesaje.';
$string['tour4_content_starred'] = 'Puteți alege să marcați anumite conversații pentru a le face mai ușor de găsit.';
$string['tour4_title_groupconvo'] = 'Mesaje de grup';
$string['tour4_title_icon'] = 'Mesagerie';
$string['tour4_title_messaging'] = 'Noua interfață de mesagerie';
$string['tour4_title_settings'] = 'Setări de mesagerie';
$string['tour4_title_starred'] = 'Favorite';
$string['tour_activityinfo_activity_student_content'] = 'Datele activității plus cerințele necesare pentru a finaliza activitatea sunt afișate pe pagina de activitate.';
$string['tour_activityinfo_activity_student_title'] = 'Nou: Informații despre activitate';
$string['tour_activityinfo_activity_teacher_content'] = 'Datele activității și condițiile de finalizare sunt acum afișate pentru cursanți pe fiecare pagină de activitate (și opțional pe pagina cursului).

Pentru activitățile care solicită cursanților să marcheze manual o activitate ca fiind finalizată, pe pagina activității este afișat un buton „Marcați ca finalizat”.';
$string['tour_activityinfo_activity_teacher_title'] = 'Nou: Informații despre activitate';
$string['tour_activityinfo_course_student_content'] = 'Datele activității și/sau ce trebuie făcut pentru a finaliza activitatea sunt afișate pe pagina cursului.';
$string['tour_activityinfo_course_student_title'] = 'Nou: Informații despre activitate';
$string['tour_activityinfo_course_teacher_content'] = 'Noile setări ale cursului „Afișează condițiile de finalizare” și „Afișează datele activității” vă permit să alegeți dacă condițiile de finalizare a activității (dacă sunt stabilite) și/sau datele sunt afișate pentru cursanți pe pagina cursului.';
$string['tour_activityinfo_course_teacher_title'] = 'Nou: Informații despre activitate';
$string['tour_final_step_content'] = 'Acesta este sfârșitul turului dvs. de utilizator. Nu se va afișa din nou decât dacă îl resetați folosind linkul din subsol.';
$string['tour_final_step_title'] = 'Sfârșitul turului';
$string['tour_navigation_course_announcements_teacher_content'] = '@@PIXICON::tour/tour_course_admin_3::tool_usertours@@<br>Postează noutăți importante aici.';
$string['tour_navigation_course_announcements_teacher_title'] = 'Aveți un mesaj pentru toată lumea?';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@@<br>Adaugă conținut nou sau editează conținutul existent.';
$string['tour_navigation_course_edit_teacher_title'] = 'Activați modul de editare';
$string['tour_navigation_course_index_student_content'] = '@@PIXICON::tour/tour_course_student::tool_usertours@@<br>Navigați prin activități și urmăriți-vă progresul.';
$string['tour_navigation_course_index_student_title'] = 'Orientare';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@@<br>Drag și drop al activităților pentru a reordona conținutul cursului.';
$string['tour_navigation_course_index_teacher_title'] = 'Index-ul cursului';
$string['tour_navigation_course_student_tour_des'] = 'Unde să navigați prin activitățile dintr-un curs';
$string['tour_navigation_course_student_tour_name'] = 'Index-ul cursului';
$string['tour_navigation_course_teacher_tour_des'] = 'Modul de editare, drag și drop al activităților și postarea anunțurilor într-un curs.';
$string['tour_navigation_course_teacher_tour_name'] = 'Editare curs';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br>Acest panou lateral poate să conțină mai multe funcții.';
$string['tour_navigation_dashboard_title'] = 'Expandați pentru a explora';
$string['tour_navigation_dashboard_tour_des'] = 'Unde se găsesc block-urile';
$string['tour_navigation_dashboard_tour_name'] = 'Sertar de block-uri';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourses::tool_usertours@@<br>Adaugă, copiază, șterge și ascunde cursuri din acest meniu.';
$string['tour_navigation_mycourses_endtourlabel'] = 'Înțeleg';
$string['tour_navigation_mycourses_title'] = 'Cursuri și categorii';
$string['tour_navigation_mycourses_tour_des'] = 'Opțiuni de administrare a cursului pe pagina Cursurile mele.';
$string['tour_navigation_mycourses_tour_name'] = 'Administrarea cursului';
$string['tour_resetforall'] = 'Starea turului a fost resetată. Acesta va fi afișat din nou tuturor utilizatorilor.';
$string['tourconfig'] = 'Fișier de configurare tur de importat';
$string['tourisenabled'] = 'Turul este activat';
$string['tourlist_explanation'] = 'Puteți crea oricâte tururi doriți și le puteți activa pentru diferite părți ale Moodle. Se poate crea un singur tur pentru fiecare pagină.';
$string['tours'] = 'Tururi';
$string['usertours'] = 'Orientare utilizatori';
$string['usertours:managetours'] = 'Creați, editați și eliminați tururile utilizatorilor';
$string['viewtour_edit'] = 'Puteți <a href="{$a->editlink} "> edita valorile implicite ale turului </a> și <a href="{$a->resetlink}"> forța afișarea turului </a> la din nou toți utilizatorii.';
$string['viewtour_info'] = 'Acesta este turul „{$a->tourname}”. Se aplică căii „{$a->path}”.';
