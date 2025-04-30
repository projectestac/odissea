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
 * Strings for component 'quizaccess_seb', language 'ro', version '4.4'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Adăugați șablon nou';
$string['allowedbrowserkeysdistinct'] = 'Cheile trebuie să fie toate diferite.';
$string['allowedbrowserkeyssyntax'] = 'O cheie ar trebui să fie un șir hexazecimal de 64 de caractere.';
$string['cachedef_config'] = 'Configurări memoria cache SEB';
$string['cachedef_configkey'] = 'Cheia configurări memoriei cache SEB';
$string['cachedef_quizsettings'] = 'Setări memoria cache a testului SEB';
$string['cantdelete'] = 'Șablonul nu poate fi șters deoarece a fost folosit pentru unul sau mai multe teste.';
$string['cantedit'] = 'Șablonul nu poate fi editat, deoarece a fost utilizat pentru unul sau mai multe teste.';
$string['checkingaccess'] = 'Se verifică accesul la Safe Exam Browser...';
$string['clientrequiresseb'] = 'Acest test a fost configurat pentru a utiliza Safe Exam Browser cu configurația clientului.';
$string['confirmtemplateremovalquestion'] = 'Sigur doriți să eliminați acest șablon?';
$string['confirmtemplateremovaltitle'] = 'Confirmați eliminarea șablonului?';
$string['conflictingsettings'] = 'Nu aveți permisiunea de a actualiza setările existente ale Safe Exam Browser.';
$string['content'] = 'Șablon';
$string['description'] = 'Descriere';
$string['disabledsettings'] = 'Setări dezactivate.';
$string['disabledsettings_help'] = 'Setările testului Safe Exam Browser nu pot fi modificate dacă testul a fost încercat. Pentru a modifica o setare, toate încercările de test trebuie mai întâi șterse.';
$string['downloadsebconfig'] = 'Descărcați fișierul de configurare SEB';
$string['duplicatetemplate'] = 'Există deja un șablon cu același nume.';
$string['edittemplate'] = 'Editează șablon';
$string['enabled'] = 'Activat';
$string['error:ws:nokeyprovided'] = 'Trebuie furnizată cel puțin o cheie Safe Exam Browser.';
$string['error:ws:quiznotexists'] = 'Nu s-a găsit testul care corespunde identificatorului modulului de curs: {$a}';
$string['event:accessprevented'] = 'Accesul la test a fost restricționat';
$string['event:templatecreated'] = 'Șablonul SEB a fost creat';
$string['event:templatedeleted'] = 'Șablonul SEB a fost șters';
$string['event:templatedisabled'] = 'Șablonul SEB a fost dezactivat';
$string['event:templateenabled'] = 'Șablonul SEB a fost activat';
$string['event:templateupdated'] = 'Șablonul SEB a fost actualizat';
$string['exitsebbutton'] = 'Ieșiți din browserul Safe Exam';
$string['filemanager_sebconfigfile'] = 'Încărcați fișierul de configurare Safe Exam Browser';
$string['filemanager_sebconfigfile_help'] = 'Vă rugăm să încărcați propriul fișier de configurare Safe Exam Browser pentru acest test.';
$string['filenotpresent'] = 'Vă rugăm să încărcați un fișier de configurare SEB.';
$string['fileparsefailed'] = 'Fișierul încărcat nu a putut fi salvat ca fișier de configurare SEB.';
$string['httplinkbutton'] = 'Descărcați configurația';
$string['invalid_browser_key'] = 'Cheia de browser SEB nu este validă';
$string['invalid_config_key'] = 'Cheia de configurare SEB nu este validă';
$string['invalidkeys'] = 'Cheile Safe Exam Browser au putut fi validate. Te rugăm să te asiguri că utilizezi Safe Exam Browser cu fișierul de configurare corect.';
$string['invalidtemplate'] = 'Șablon de configurare SEB nu este valid';
$string['manage_templates'] = 'Șabloane Safe Exam Browser';
$string['managetemplates'] = 'Gestionați șabloanele';
$string['missingrequiredsettings'] = 'Setărilor de configurare le lipsesc unele valori necesare.';
$string['name'] = 'Denumire';
$string['newtemplate'] = 'Șablon nou';
$string['noconfigfilefound'] = 'Nu a fost găsit niciun fișier de configurare SEB încărcat pentru testul cu cmid: {$a}';
$string['noconfigfound'] = 'Nu s-a găsit nicio configurație SEB pentru test cu cmid: {$a}';
$string['not_seb'] = 'Nu se folosește niciun SEB.';
$string['notemplate'] = 'Niciun șablon';
$string['passwordnotset'] = 'Setările actuale necesită teste care utilizează Safe Exam Browser pentru a avea setată o parolă pentru test.';
$string['pluginname'] = 'Reguli de acces pentru SEB';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Setările Safe Exam Browser pentru un test. Aceasta include ID-ul ultimului utilizator care a creat sau a modificat setările.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'ID-ul testului pentru care sunt făcute setările.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Format de dată (unix) cu care au fost create setările.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Format de dată (unix) cu care a fost efectuată ultima modificare a setărilor.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID-ul utilizatorului care a creat sau modificat ultima dată setările.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Setări Safe Exam Browser. Aceasta include ID-ul ultimului utilizator care a creat sau a modificat șablonul.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Format de dată (unix) cu care a fost creat șablonul.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Format de dată (unix) cu care a fost efectuată ultima modificare a șablonului.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID-ul utilizatorului care a creat sau modificat ultima dată șablonul.';
$string['quizsettings'] = 'Setările tesului';
$string['restoredfrom'] = '{$a->name} (restaurat prin ID {$a->cmid})';
$string['seb'] = 'Safe Exam Browser';
$string['seb:bypassseb'] = 'Evitați cerința de a vizualiza testul în Safe Exam Browser.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Schimbați setarea testului SEB: selectați fișierul de configurare SEB';
$string['seb:manage_seb_activateurlfiltering'] = 'Modificați setarea testului SEB: Activați filtrarea adreselor URL';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Schimbați setarea testului SEB: chei de examen de browser permise';
$string['seb:manage_seb_allowreloadinexam'] = 'Schimbați setarea testului SEB: permiteți reîncărcarea';
$string['seb:manage_seb_allowspellchecking'] = 'Modificați setarea testului SEB: activați verificarea ortografică';
$string['seb:manage_seb_allowuserquitseb'] = 'Modificați setarea testului SEB: permiteți ieșirea';
$string['seb:manage_seb_enableaudiocontrol'] = 'Schimbați setarea testului SEB: activați controlul audio';
$string['seb:manage_seb_expressionsallowed'] = 'Modificați setarea testului SEB: sunt permise expresii simple';
$string['seb:manage_seb_expressionsblocked'] = 'Modificați setarea testului SEB: expresii simple blocate';
$string['seb:manage_seb_filterembeddedcontent'] = 'Modificați setarea testului SEB: filtrați conținutul încorporat';
$string['seb:manage_seb_linkquitseb'] = 'Modificați setarea testului SEB: Închideți linkul';
$string['seb:manage_seb_muteonstartup'] = 'Schimbați setarea testului SEB: Dezactivați sunetul la pornire';
$string['seb:manage_seb_quitpassword'] = 'Modificați setarea testului SEB: Parola de închidere SEB';
$string['seb:manage_seb_regexallowed'] = 'Modificați setarea testului SEB: sunt permise expresii Regex';
$string['seb:manage_seb_regexblocked'] = 'Modificați setarea testului SEB: expresiile Regex sunt blocate';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Schimbați setarea testului SEB: Solicitați Safe Exam Browser';
$string['seb:manage_seb_showkeyboardlayout'] = 'Modificați setarea testului SEB: Afișați aspectul tastaturii';
$string['seb:manage_seb_showreloadbutton'] = 'Modificați setarea testului SEB: Afișați butonul de reîncărcare';
$string['seb:manage_seb_showsebdownloadlink'] = 'Schimbați setarea testului SEB: Afișați linkul de descărcare';
$string['seb:manage_seb_showsebtaskbar'] = 'Modificarea setării testului SEB: Afișați bara de activități';
$string['seb:manage_seb_showtime'] = 'Schimbați setarea testului SEB: Afișați ora';
$string['seb:manage_seb_showwificontrol'] = 'Schimbați setarea testului SEB: Afișați controlul Wi-Fi';
$string['seb:manage_seb_templateid'] = 'Schimbați setarea testului SEB: selectați șablonul SEB';
$string['seb:manage_seb_userconfirmquit'] = 'Schimbați setarea testului SEB: confirmați la ieșire';
$string['seb:managetemplates'] = 'Gestionați șabloanele de configurare SEB';
$string['seb_activateurlfiltering'] = 'Activați filtrarea adreselor URL';
$string['seb_activateurlfiltering_help'] = 'Dacă este activată, adresele URL vor fi filtrate la încărcarea paginilor web. Setul de filtrare trebuie definit mai jos.';
$string['seb_allowedbrowserexamkeys'] = 'Cheile pentru examen în browser sunt permise';
$string['seb_allowedbrowserexamkeys_help'] = 'În acest câmp puteți introduce cheile de examen permise pentru browser pentru versiunile de Safe Exam Browser care au permisiunea de a accesa acest test. Dacă nu sunt introduse chei, atunci cheile de examinare ale browserului nu sunt verificate.';
$string['seb_allowreloadinexam'] = 'Activați reîncărcarea testului';
$string['seb_allowreloadinexam_help'] = 'Dacă este activată, reîncărcarea paginii este permisă (butonul de reîncărcare în bara de activități SEB, bara de instrumente a browserului, meniul glisant lateral iOS, comanda rapidă de la tastatură F5 / cmd + R). Rețineți că cache-ul offline se poate întrerupe dacă un utilizator încearcă să reîncarce o pagină fără o conexiune la internet.';
$string['seb_allowspellchecking'] = 'Activați verificarea ortografică';
$string['seb_allowspellchecking_help'] = 'Dacă este activată, verificarea ortografică în browserul SEB este permisă.';
$string['seb_allowuserquitseb'] = 'Activați închiderea aplicației SEB';
$string['seb_allowuserquitseb_help'] = 'Dacă este activat, utilizatorii pot părăsi SEB cu butonul „Ieșire” din bara de activități SEB sau apăsând tastele Ctrl-Q sau făcând clic pe butonul de închidere al ferestrei principale a browserului.';
$string['seb_enableaudiocontrol'] = 'Activează controalele audio';
$string['seb_enableaudiocontrol_help'] = 'Dacă este activată, pictograma de control audio este afișată în bara de activități SEB.';
$string['seb_expressionsallowed'] = 'Expresii permise';
$string['seb_expressionsallowed_help'] = 'Un câmp text care conține expresiile de filtrare permise pentru adresele URL permise. Este posibilă utilizarea caracterului wildcard „\\ *”. Exemple pentru expresii: „example.com” sau „example.com/stuff/\\*”. „example.com” se potrivește cu „example.com”, „www.example.com” și „www.mail.example.com”. „example.com/stuff/\\*” corespunde tuturor cererilor la orice subdomeniu din „example.com” care are „chestii” ca primul segment al căii.';
$string['seb_expressionsblocked'] = 'Expresiile blocate';
$string['seb_expressionsblocked_help'] = 'Un câmp text care conține expresiile de filtrare pentru adresele URL blocate. Este posibilă utilizarea caracterului wildcard „\\ *”. Exemple de expresii: „example.com” sau „example.com/stuff/\\*”. „example.com” se potrivește cu „example.com”, „www.example.com” și „www.mail.example.com”. „example.com/stuff/\\*” corespunde tuturor cererilor la orice subdomeniu din „example.com” care are „chestii” ca primul segment al căii.';
$string['seb_filterembeddedcontent'] = 'Filtrați și conținutul încorporat';
$string['seb_filterembeddedcontent_help'] = 'Dacă este activat, resursele încorporate vor fi, de asemenea, filtrate folosind setul de filtre.';
$string['seb_help'] = 'Configurați test pentru a utiliza browserul Safe Exam.';
$string['seb_linkquitseb'] = 'Afișați butonul Exit Safe Exam Browser, configurat cu acest link de ieșire';
$string['seb_linkquitseb_help'] = 'În acest câmp puteți introduce linkul pentru a părăsi SEB. Acesta va fi utilizat pe butonul „Exit Safe Exam Browser” de pe pagina care apare după trimiterea examenului. Când dați click pe butonul sau pe link-ul plasat oriunde doriți să-l puneți, este posibil să părăsiți SEB fără a fi nevoie să introduceți o parolă de ieșire. Pentru un site HTTPS, link-ul de ieșire trebuie să înceapă cu https://. Dacă nu este introdus niciun link, butonul „Exit Safe Exam Browser” nu apare și nu există niciun link setat pentru a părăsi SEB.';
$string['seb_managetemplates'] = 'Gestionați șabloanele Safe Exam Browser';
$string['seb_muteonstartup'] = 'Dezactivați sunetul la pornire';
$string['seb_muteonstartup_help'] = 'Dacă este activat, sunetul este inițial dezactivat la pornirea SEB.';
$string['seb_quitpassword'] = 'Parola de închidere';
$string['seb_quitpassword_help'] = 'Această parolă este solicitată atunci când utilizatorii încearcă să părăsească SEB cu butonul „Ieșire”, Ctrl-Q sau butonul de închidere din fereastra principală a browserului. Dacă nu este setată nicio parolă de ieșire, atunci SEB afișează doar „Sigur doriți să ieșiți din SEB?”.';
$string['seb_regexallowed'] = 'Regex este permis';
$string['seb_regexallowed_help'] = 'Un câmp de text care conține expresiile de filtrare pentru adresele URL permise într-un format de expresie regulată (Regex).';
$string['seb_regexblocked'] = 'Regex este blocat';
$string['seb_regexblocked_help'] = 'Un câmp de text care conține expresiile de filtrare pentru adresele URL blocate într-un format de expresie regulată (Regex).';
$string['seb_requiresafeexambrowser'] = 'Solicitați utilizarea Safe Exam Browser (SEB)';
$string['seb_requiresafeexambrowser_help'] = 'Dacă este activat, cursanții pot încerca testul folosind Safe Exam Browser (SEB).

Opțiunile disponibile sunt:

* Nu
<br/> Safe Exam Browser nu este obligatoriu pentru a încerca testul.
* Da - Folosiți un șablon existent
<br/> Se poate utiliza un șablon pentru configurarea browserului Safe Exam. Șabloanele sunt gestionate în administrarea site-ului. Setările manuale suprascriu setările din șablon.
* Da - Configurați manual
<br/> Nu va fi folosit niciun șablon pentru configurarea browserului Safe Exam. Puteți configura Safe Exam Browser manual.
* Da - Încărcați propria configurare
<br/> Puteți încărca propriul fișier de configurare Safe Exam Browser. Toate setările manuale și utilizarea șabloanelor vor fi dezactivate.
* Da - Utilizați configurația clientului SEB
<br/> Nu există configurații ale browserului Safe Exam pe partea Moodle. Testul poate fi încercat cu orice configurație a Safe Exam Browser.';
$string['seb_showkeyboardlayout'] = 'Afișați aspectul tastaturii';
$string['seb_showkeyboardlayout_help'] = 'Dacă este activat, aspectul actual al tastaturii este afișat în bara de activități SEB. Vă permite să comutați la alte aspecte de tastatură, care au fost activate în sistemul de operare.';
$string['seb_showreloadbutton'] = 'Afișați butonul de reîncărcare';
$string['seb_showreloadbutton_help'] = 'Dacă este activat, un buton de reîncărcare este afișat în bara de activități SEB, permițând reîncărcarea paginii web curente.';
$string['seb_showsebdownloadlink'] = 'Afișați butonul de descărcare Safe Exam Browser';
$string['seb_showsebdownloadlink_help'] = 'Dacă este activat, pe pagina de start a testului va fi afișat un buton pentru descărcarea Safe Exam Browser.';
$string['seb_showsebtaskbar'] = 'Afișați bara de activități SEB';
$string['seb_showsebtaskbar_help'] = 'Dacă este activat, o bară de activități apare în partea de jos a ferestrei browserului SEB. Bara de activități este necesară pentru a afișa elemente precum controlul Wi-Fi, butonul de reîncărcare, ora și aspectul tastaturii.';
$string['seb_showtime'] = 'Arată timpul';
$string['seb_showtime_help'] = 'Dacă este activată, ora curentă este afișată în bara de activități SEB.';
$string['seb_showwificontrol'] = 'Afișați controlul Wi-Fi';
$string['seb_showwificontrol_help'] = 'Dacă este activat, apare un buton de control Wi-Fi în bara de activități SEB. Butonul permite utilizatorilor să se reconecteze la rețelele Wi-Fi la care au fost conectate anterior.';
$string['seb_templateid'] = 'Șablon de configurare Safe Exam Browser';
$string['seb_templateid_help'] = 'Setările din șablonul de configurare selectat vor fi utilizate pentru configurarea Safe Exam Browser în timp ce parcurgeți testul. Puteți suprascrie setările din șablon cu setările manuale.';
$string['seb_use_client'] = 'Da - Utilizați configurația clientului SEB';
$string['seb_use_manually'] = 'Da - Configurați manual';
$string['seb_use_template'] = 'Da - Folosiți un șablon existent';
$string['seb_use_upload'] = 'Da - Încărcați propria configurare';
$string['seb_userconfirmquit'] = 'Solicitați utilizatorului să confirme închiderea SEB';
$string['seb_userconfirmquit_help'] = 'Dacă este activat, utilizatorii trebuie să confirme renunțarea la SEB atunci când este detectat un link de ieșire.';
$string['sebdownloadbutton'] = 'Descarcă Safe Exam Browser';
$string['sebkeysvalidationfailed'] = 'Eroare la validarea cheilor SEB';
$string['seblinkbutton'] = 'Lansați Safe Exam Browser';
$string['sebrequired'] = 'Acest test a fost configurat astfel încât cursanții să îl poată parcurge folosind Safe Exam Browser.';
$string['setting:autoreconfigureseb'] = 'Configurare automată SEB';
$string['setting:autoreconfigureseb_desc'] = 'Dacă este activat, utilizatorii care accesează un test folosind Safe Exam Browser vor fi obligați automat să-și reconfigureze Safe Exam Browser.';
$string['setting:displayblocksbeforestart'] = 'Afișați blocuri înainte de a începe testul';
$string['setting:displayblocksbeforestart_desc'] = 'Dacă este activat, blocurile vor fi afișate înainte ca un utilizator să încerce testul.';
$string['setting:displayblockswhenfinished'] = 'Afișați blocuri după terminarea testului';
$string['setting:displayblockswhenfinished_desc'] = 'Dacă este activat, blocurile vor fi afișate după ce un utilizator și-a terminat încercarea de testare curentă.';
$string['setting:downloadlink'] = 'Link de descărcare Safe Exam Browser';
$string['setting:downloadlink_desc'] = 'Adresa URL pentru descărcarea aplicației Safe Exam Browser.';
$string['setting:quizpasswordrequired'] = 'Parola de test necesară';
$string['setting:quizpasswordrequired_desc'] = 'Dacă este activată, toate testele care necesită Safe Exam Browser trebuie să aibă setată o parolă pentru test.';
$string['setting:showhttplink'] = 'Afișați http://';
$string['setting:showseblink'] = 'Afișați seb://';
$string['setting:showseblinks'] = 'Afișați linkurile de configurare a Safe Exam Browser';
$string['setting:showseblinks_desc'] = 'Dacă se afișează linkuri pentru ca un utilizator să acceseze fișierul de configurare Safe Exam Browser atunci când accesul la test este împiedicat. Rețineți că linkurile seb: // pot să nu funcționeze în fiecare browser.';
$string['setting:supportedversions'] = 'Vă rugăm să rețineți că următoarele versiuni minime ale clientului Safe Exam Browser sunt necesare pentru a utiliza caracteristica cheii de configurare: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['settingsfrozen'] = 'Datorită faptului că există cel puțin o încercare de test, setările Safe Exam Browser nu mai pot fi actualizate.';
$string['unknown_reason'] = 'Motiv necunoscut';
$string['used'] = 'Se folosește';
