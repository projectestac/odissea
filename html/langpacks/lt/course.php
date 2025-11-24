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
 * Strings for component 'course', language 'lt', version '4.5'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Veiklos parinkiklio poraštė';
$string['activitychooseractivefooter_desc'] = 'Veiklos parinkiklis gali palaikyti papildinius, kurie prideda elementų prie poraštės.';
$string['activitychoosercategory'] = 'Veiklos parinkiklis';
$string['activitychooserhidefooter'] = 'Nėra poraštės';
$string['activitychooserrecommendations'] = 'Rekomenduojamos veiklos';
$string['activitychoosersettings'] = 'Veiklos parinkiklio parametrai';
$string['activitychoosertabmode'] = 'Veiklos parinkiklio kortelės';
$string['activitychoosertabmode_desc'] = 'Veiklos parinkiklis išvardija veiklas ir išteklius, kuriuos dėstytojas gali įtraukti į savo kursą. Jei norite pridėti elementų į skirtuką „Rekomenduojami“, eikite į <a href=\'../course/recommendations.php\'>Rekomenduojamos veiklos</a>.';
$string['activitychoosertabmodefive'] = 'Pažymėti žvaigždute, Rekomenduojami, Visi';
$string['activitychoosertabmodefour'] = 'Pažymėti žvaigždute, Rekomenduojami, Visi, Veiklos, Ištekliai';
$string['activitychoosertabmodeone'] = 'Pažymėti žvaigždute, Visi, Veiklos, Ištekliai, Rekomenduojama';
$string['activitychoosertabmodesix'] = 'Pažymėti žvaigždute, Rekomenduojami, Veiklos, Ištekliai';
$string['activitychoosertabmodethree'] = 'Pažymėti žvaigždute, Veiklos, Ištekliai, Rekomenduojama';
$string['activitychoosertabmodetwo'] = 'Pažymėti žvaigždute, Visi, Rekomenduojama';
$string['activitydate:closed'] = 'Uždaroma:';
$string['activitydate:closes'] = 'Uždaroma:';
$string['activitydate:opened'] = 'Atidaroma:';
$string['activitydate:opens'] = 'Atidaroma:';
$string['aria:coursecategory'] = 'Kurso kategorija';
$string['aria:courseimage'] = 'Kurso paveiksliukas';
$string['aria:coursename'] = 'Kurso pavadinimas';
$string['aria:courseshortname'] = 'Kurso trumpasis pavadinimas';
$string['aria:defaulttab'] = 'Numatytos veiklos';
$string['aria:favourite'] = 'Kursas yra pažymėtas žvaigždute';
$string['aria:favouritestab'] = 'Pažymėtos žvaigždute veiklos';
$string['aria:modulefavourite'] = 'Pažymėti {$a} veiklą žvaigždute';
$string['aria:recommendedtab'] = 'Rekomenduojamos veiklos';
$string['browsecourseadminindex'] = 'Naršti kursų administravimą naudojant šį indeksą.';
$string['browsesettingindex'] = 'Naršyti nustatymus naudojant šį indeksą.';
$string['communicationroomlink'] = 'Pokalbis su kurso dalyviais';
$string['completion_automatic:done'] = 'Atlikta:';
$string['completion_automatic:failed'] = 'Nepavyko:';
$string['completion_automatic:todo'] = 'Reikia atlikti:';
$string['completion_manual:aria:done'] = '{$a} yra pažymėta kaip atlikta. Spauskite, norėdami atšaukti.';
$string['completion_manual:aria:markdone'] = 'Pažymėti {$a} kaip atlikta';
$string['completion_manual:done'] = 'Atlikta';
$string['completion_manual:markdone'] = 'Pažymėti kaip atliktą';
$string['completion_setby:auto:done'] = 'Atlikta: {$a->condition} (nustatyta {$a->setby})';
$string['completion_setby:auto:todo'] = 'Reikia atlikti: {$a->condition} (nustatyta {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} yra pažymėta {$a->setby} kaip atlikta. Spauskite, norėdami atšaukti.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} yra pažymėta {$a->setby} kaip neatlikta. Spauskite, norėdami pažymėti kaip atlikta.';
$string['completionrequirements'] = 'Baigimo sąlygos {$a}';
$string['courseaccess'] = 'Prieiga prie kurso';
$string['coursealreadyfinished'] = 'Kursas jau baigtas';
$string['coursecommunication_desc'] = 'Numatytoji komunikacijos paslauga naujiems kursams.  Esamuose kursuose pagal numatytuosius nustatymus nebus pasirinktas joks paslaugų teikėjas.';
$string['coursecontentnotification'] = 'Siųsti pranešimą apie turinio pasikeitimą';
$string['coursecontentnotification_help'] = 'Pažymėkite šį langelį, jei norite informuoti kursų dalyvius apie šią naują arba pakeistą veiklą ar išteklių. Pranešimą gaus tik tie naudotojai, kurie gali naudotis veikla ar ištekliu.';
$string['coursecontentnotifnew'] = '{$a->coursename} naujas turinys';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> yra naujas kursas <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Pakeisti pranešimų nuostatas</a></p>';
$string['coursecontentnotifupdate'] = '{$a->coursename} turinio pakeitimas';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> buvo pakeistas kurse <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Pakeisti pranešimų nuostatas</a></p>';
$string['coursecount'] = 'Kursų kiekis';
$string['coursenotyetfinished'] = 'Kursas dar nebaigtas';
$string['coursenotyetstarted'] = 'Kursas dar neprasidėjęs';
$string['courseparticipants'] = 'Kurso dalyviai';
$string['coursetoolong'] = 'Kursas yra per ilgas';
$string['customfield_islocked'] = 'Užrakinta';
$string['customfield_islocked_help'] = 'Jei laukas užrakintas, jį kurso nustatymuose galės keisti tik naudotojai, turintys galimybę pakeisti užrakintus pasirinktinius laukus (pagal numatytuosius nustatymus naudotojai, turintys tik Tvarkytojo vaidmenį).';
$string['customfield_notvisible'] = 'Niekas';
$string['customfield_visibility'] = 'Matoma';
$string['customfield_visibility_help'] = 'Šis nustatymas nustato, kas gali peržiūrėti pasirinktinio lauko pavadinimą ir reikšmę kursų sąraše arba galimame „Mano pagrindinis“ pasirinktinio lauko filtre.';
$string['customfield_visibletoall'] = 'Visiems';
$string['customfield_visibletoteachers'] = 'Mokytojams';
$string['customfieldsettings'] = 'Įprasti kurso pasirinktinių laukų nustatymai';
$string['daystakingcourse'] = 'Dienos kursui';
$string['defaultsettingscategory'] = 'Numatytieji nustatymai';
$string['downloadcontent'] = 'Įtraukti į kurso turinio atsisiuntimą';
$string['downloadcontent_help'] = 'Ar ši veikla arba ištekliai turėtų būti įtraukti į kurso turinio ZIP failą, kurį galima atsisiųsti? Galima pilnai atsisiųsti failą, aplanką, puslapį ir žymą. Visoms kitoms veikloms ir ištekliams atsisiunčiamas tik pavadinimas ir aprašymas. Ši parinktis reikalauja, kad kurso nustatymuose būtų įjungtas kurso turinio atsisiuntimas.

Šis nustatymas neturi įtakos programos mobiliesiems turinio atsisiuntimui, kai naudojama neprisijungus.';
$string['downloadcourseconfirmation'] = 'Ketinate atsisiųsti kurso turinio ZIP failą (išskyrus elementus, kurių negalima atsisiųsti, ir failus, didesnius nei {$a}).';
$string['downloadcoursecontent'] = 'Atsisiųsti kurso turinį';
$string['downloadcoursecontent_help'] = 'Šis nustatymas nustato ar kurso turinį gali atsisiųsti naudotojai, turintys  šią teisę (pagal numatytuosius nustatymus atsisiųsti kurso turinį gali naudotojai turintys besimokančiojo ar dėstytojo vaidmenį).';
$string['enabledownloadcoursecontent'] = 'Įgalinti kurso turinio atsisiuntimą';
$string['errorendbeforestart'] = 'Pabaigos data({$a})  yra prieš kurso pradžios datą.';
$string['favourite'] = 'Pažymėtas žvaigždute kursas';
$string['filterbothactive'] = 'Vardas ({$a->first}) Pavardė ({$a->last})';
$string['filterbyname'] = 'Filtruoti pagal vardą';
$string['filterfirstactive'] = 'Vardas ({$a->first})';
$string['filterlastactive'] = 'Pavardė ({$a->last})';
$string['gotosection'] = 'Eiti į {$a} skyrių';
$string['gradetopassnotset'] = 'Šiame kurse nėra išlaikymo įvertinimo. Jis gali būti nustatytas kurso įvertinimų elemente (Įvertinimų knygelės nuostatos).';
$string['hideendedcoursestask'] = 'Slėpti kursus kursų pabaigos datą';
$string['informationformodule'] = 'Informacija apie {$a} veiklą';
$string['module'] = 'Veikla';
$string['namewithlink'] = 'Kategorijos pavadinimas su nuoroda';
$string['noaccesssincestartinfomessage'] = 'Sveiki, {$a->userfirstname},
<p>yra besimokančiųjų, kurie dar nebuvo nei karto apsilankę kurse {$a->coursename}.</p>';
$string['nocourseactivity'] = 'Nepakanka kurso veiklos nuo kurso pradžios iki pabaigos';
$string['nocourseendtime'] = 'Kursas neturi pabaigos laiko';
$string['nocoursesections'] = 'Nėra kurso dalies';
$string['nocoursestudents'] = 'Nėra besimokančiųjų';
$string['norecentaccessesinfomessage'] = 'Sveiki, {$a->userfirstname},
<p>yra besimokančiųjų, kurie jau kurį laiką nebuvo apsilankę kurse "{$a->coursename}".</p>';
$string['noteachinginfomessage'] = 'Sveiki, {$a->userfirstname},
<p>kursuose, kurių pradžios data yra kita savaitė, nėra įtraukta dėstytojų ar besimokančiųjų.</p>';
$string['participants:perpage'] = 'Dalyvių skaičius puslapyje';
$string['participants:perpage_help'] = 'Naudotojų skaičius, rodomas kiekviename kurso dalyvių puslapyje.';
$string['participantsnavigation'] = 'Dalyvių tretinė navigacija.';
$string['pdfexportfont'] = 'PDF šriftas';
$string['pdfexportfont_help'] = 'Šriftas, naudojamas sugeneruotiems PDF failams, pvz., užduočių pateikimui.';
$string['privacy:completionpath'] = 'Kurso užbaigimas';
$string['privacy:favouritespath'] = 'Žvaigždute pažymėto kurso informacija';
$string['privacy:metadata:activityfavouritessummary'] = 'Kursų sistemoje yra informacijos apie tai, kuriuos elementus iš veiklos parinkiklio naudotojas pažymėjo žvaigždute.';
$string['privacy:metadata:completionsummary'] = 'Kurso užbaigime laikoma informacija apie naudotoją.';
$string['privacy:metadata:favouritessummary'] = 'Kurse pateikiama informacija apie kursą, kurį naudotojas pažymėjo žvaigždute.';
$string['privacy:perpage'] = 'Kursų skaičius rodomas viename puslapyje.';
$string['recommend'] = 'Rekomenduoti';
$string['recommendcheckbox'] = 'Rekomenduotina veikla: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} po kurso pradžios';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} prieš kurso pradžią';
$string['searchactivitiesbyname'] = 'Ieškoti veiklos pagal pavadinimą';
$string['searchresults'] = 'Paieškos rezultatai: {$a}';
$string['sectionlink'] = 'Nuolatinė nuoroda';
$string['showstartedcoursestask'] = 'Rodyti kursus kursų pradžios datą';
$string['studentsatriskincourse'] = 'Besimokančiųjų, kurie rizikuoja kurse "{$a}", įžvalga';
$string['studentsatriskinfomessage'] = 'Sveiki, {$a->userfirstname},
<p>nustatyta, jog besimokantiesiems kurse {$a->coursename} gresia mokymosi pavojus.</p>';
$string['submitsearch'] = 'Pateikti paiešką';
$string['target:coursecompetencies'] = 'Besimokantieji, kuriems gresia nepasiekti kursui priskirtų kompetencijų';
$string['target:coursecompetencies_help'] = 'Šis tikslas apibūdina, ar besimokančiąjam kyla pavojus, kad jis nepasieks kursui priskirtų kompetencijų. Šis tikslas reiškia, kad visos kursui priskirtos kompetencijos turi būti pasiektos iki kurso pabaigos.';
$string['target:coursecompletion'] = 'Besimokantieji, kuriems gresia neįvykdyti kurso baigimo sąlygų';
$string['target:coursecompletion_help'] = 'Šis tikslas apibūdina, ar besimokančiąjam kyla pavojus, kad jis neatitiks kurso baigimo sąlygų.';
$string['target:coursedropout'] = 'Besimokantieji, kuriems gresia išmetimas';
$string['target:coursedropout_help'] = 'Šis tikslas apibūdina, ar besimokančiąjam kyla pavojus mesti studijas.';
$string['target:coursegradetopass'] = 'Besimokantieji, kuriems gresia nepasiekti minimalaus įvertinimo, kad išlaikytų kursą';
$string['target:coursegradetopass_help'] = 'Šis tikslas apibūdina, ar besimokančiąjam kyla pavojus, kad jis nepasieks minimalaus įvertinimo, kad išlaikytų kursą.';
$string['target:noaccesssincecoursestart'] = 'Besimokantieji, kurie dar neapsilankė kurse';
$string['target:noaccesssincecoursestart_help'] = 'Šis tikslas apibūdina besimokančiuosius, kurie niekada nelankė kurso, į kurį yra užsiregistravę.';
$string['target:noaccesssincecoursestartinfo'] = 'Šie besimokantieji yra įregistruoti į prasidėjusį kursą, bet niekada jame nedalyvavo.';
$string['target:norecentaccesses'] = 'Besimokantieji, kurie pastaruoju metu nebuvo apsilankę kurse';
$string['target:norecentaccesses_help'] = 'Šis tikslas identifikuoja besimokančiuosius, kurie yra įregistruoti į kursą, bet per nustatytą analizės laikotarpį (pagal nutylėjimą praėjusį mėnesį) nebuvo apsilankę kurse.';
$string['target:norecentaccessesinfo'] = 'Šie besimokantieji nebuvo apsilankę kurse, į kurį yra įregistruoti, per nustatytą analizės intervalą (pagal nutylėjimą, praėjusį mėnesį).';
$string['target:noteachingactivity'] = 'Kursai rizikuoja neprasidėti';
$string['target:noteachingactivity_help'] = 'Šis tikslas apibūdina, ar ateinančią savaitę prasidėsiančiuose kursuose bus mokymo veikla.';
$string['target:noteachingactivityinfo'] = 'Šie kursai, kurie turi prasidėti artimiausiomis dienomis, gali neprasidėti, nes juose nėra dėstytojų ar besimokančiųjų.';
$string['targetlabelstudentcompetenciesno'] = 'Besimokantysis, kuris, tikėtina, įgys kursui priskirtas kompetencijas';
$string['targetlabelstudentcompetenciesyes'] = 'Besimokantysis rizikuoja neįgyti kursui priskirtų kompetencijų';
$string['targetlabelstudentcompletionno'] = 'Besimokantysis, kuris gali atitikti kurso baigimo sąlygas';
$string['targetlabelstudentcompletionyes'] = 'Besimokantysis rizikuoja neatitikti kurso baigimo sąlygų';
$string['targetlabelstudentdropoutno'] = 'Nerizikuoja';
$string['targetlabelstudentdropoutyes'] = 'Studentas, kuriam gresia išmetimas';
$string['targetlabelstudentgradetopassno'] = 'Besimokantysis, kuris greičiausiai pasieks minimalų įvertinimą, kad išlaikytų kursą.';
$string['targetlabelstudentgradetopassyes'] = 'Besimokantysis rizikuoja negauti minimalaus įvertinimo, kad išlaikytų kursą.';
$string['targetlabelteachingno'] = 'Kursai rizikuoja neprasidėti';
$string['targetlabelteachingyes'] = 'Naudotojai, turintys mokymo gebėjimų ir turintys prieigą prie kurso';
$string['totalactivities'] = 'Veiklos: {$a}';
