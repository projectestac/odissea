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
 * Strings for component 'feedback', language 'lt', version '4.5'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Įtraukti klausimą';
$string['add_pagebreak'] = 'Įtraukti puslapio lūžį';
$string['adjustment'] = 'Išdėstymas';
$string['after_submit'] = 'Pateikus';
$string['allowfullanonymous'] = 'Leisti visiškai anonimiškai';
$string['analysis'] = 'Analizė';
$string['anonymous'] = 'Anonimiškai';
$string['anonymous_edit'] = 'Įrašų naudotojų vardai';
$string['anonymous_entries'] = 'Anoniminiai įrašai ({$a})';
$string['anonymous_user'] = 'Anoniminis naudotojas';
$string['answerquestions'] = 'Atsakyti į klausimus';
$string['append_new_items'] = 'Pridėti naujų elementų';
$string['autonumbering'] = 'Automatiniai numeriai';
$string['autonumbering_help'] = 'Įjungia arba išjungia automatinius kiekvieno klausimo numerius';
$string['average'] = 'Vidurkis';
$string['bold'] = 'Paryškintasis';
$string['calendarend'] = '{$a} uždaroma';
$string['calendarstart'] = '{$a} atidaryta';
$string['cannotaccess'] = 'Jūs galite pasiekti atsiliepimą tik iš kurso';
$string['cannotsavetempl'] = 'Įrašyti šablonų neleidžiama';
$string['captcha'] = 'CAPTCHA';
$string['captchanotset'] = 'CAPTCHA nenustatyta.';
$string['check'] = 'Keli pasirinkimai – keli atsakymai';
$string['check_values'] = 'Galimi atsakymai';
$string['checkbox'] = 'Keli pasirinkimai – leidžiami keli atsakymai (žymės langeliai)';
$string['choosefile'] = 'Pasirinkti failą';
$string['chosen_feedback_response'] = 'Pasirinktas atsiliepimo atsakymas';
$string['closebeforeopen'] = 'Jūsų pabaigos data yra ankstenė nei pradžios data';
$string['complete_the_form'] = 'Atsakyti į klausimus';
$string['completed'] = 'Baigta';
$string['completed_feedbacks'] = 'Pateikti atsakymai';
$string['completedon'] = 'Baigta {$a}';
$string['completiondetail:submit'] = 'Pateikti atsiliepimą';
$string['completionsubmit'] = 'Pateikti atsiliepimą';
$string['configallowfullanonymous'] = 'Jei nustatyta „taip“, naudotojai gali užbaigti atsiliepimo veiklą svetainėje, neprisijungdami.';
$string['confirmdeleteentry'] = 'Ar tikrai norite naikinti šį įrašą?';
$string['confirmdeleteitem'] = 'Ar tikrai norite naikinti šį elementą?';
$string['confirmdeletetemplate'] = 'Ar tikrai norite naikinti šį šabloną?';
$string['confirmusetemplate'] = 'Ar tikrai norite naudoti šį šabloną?';
$string['continue_the_form'] = 'Tęsti atsakinėjimą į klausimus';
$string['count_of_nums'] = 'Numerių skaičius';
$string['courseid'] = 'Kurso ID';
$string['creating_templates'] = 'Įrašyti šiuos klausimus kaip naują šabloną';
$string['delete_entry'] = 'Naikinti įrašą';
$string['delete_item'] = 'Naikinti klausimą';
$string['delete_old_items'] = 'Naikinti senus elementus';
$string['delete_pagebreak'] = 'Šalinti puslapio lūžį';
$string['delete_template'] = 'Naikinti šabloną';
$string['delete_templates'] = 'Naikinti šabloną...';
$string['depending'] = 'priklausomi elementai';
$string['depending_help'] = 'Priklausomi elementai leidžia jums rodyti elementus atsižvelgiant į kitų elementų reikšmes.<br /> <strong>Štai komponavimo versijos pavyzdys, kaip naudoti:</strong><br /> <ul> <li>Pirmiausia sukurkite elementą, nuo kurio reikšmės priklauso kiti elementai.</li> <li>Tada įtraukite puslapio lūžį.</li> <li>Įtraukite elementus, kurie priklauso nuo ankstesnių elementų reikšmių.<br /> Pasirinkite elemento kūrimo formą sąraše Priklausomas elementas ir įrašykite reikiamą reikšmę teksto lauke Priklausoma reikšmė.</li> </ul> <strong>Struktūra turėtų atrodyti taip:</strong> <ol> <li>Elemento K: ar turite automobilį? A: Taip / Ne</li> <li>Puslapio lūžis</li> <li>Elemento K: kokios spalvos jūsų automobilis?<br /> (šis elementas priklauso nuo 1 elemento, kai jo reikšmė yra Taip)</li> <li>Elementas K: kodėl neturite automobilio?<br /> (šis elementas priklauso nuo 1 elemento, kai jo reikšmė yra Ne)</li> <li> ... kiti elementai</li> </ol> Viskas. Sėkmės!';
$string['dependitem'] = 'priklausomas elementas';
$string['dependvalue'] = 'priklausoma reikšmė';
$string['description'] = 'Aprašas';
$string['do_not_analyse_empty_submits'] = 'Analizuojant praleisti tuščius pateikimus';
$string['downloadresponseas'] = 'Atsiųsti visus atsakymus kaip:';
$string['drop_feedback'] = 'Šalinti iš šių kursų';
$string['dropdown'] = 'Keli pasirinkimai – leidžiamas vienas atsakymas (iškrentantis meniu)';
$string['dropdown_values'] = 'Atsakymai';
$string['dropdownlist'] = 'Keli pasirinkimai – vienas atsakymas (iškrentantis meniu)';
$string['dropdownrated'] = 'Iškrentantis meniu (įvertintas)';
$string['edit_item'] = 'Redaguoti klausimą';
$string['edit_items'] = 'Redaguoti klausimus';
$string['email_notification'] = 'Siųsti pranešimų el. laiškus';
$string['email_notification_help'] = 'Jei jungta, administratoriai el. paštu gauna pranešimą apie atsiliepimų pateikimus.';
$string['emailteachermail'] = '{$a->username} baigė atsiliepimo veiklą: {$a->feedback} Atsiliepimą galite peržiūrėti čia: {$a->url}';
$string['emailteachermailhtml'] = '{$a->username} baigė atsiliepimo veiklą: <i>\'{$a->feedback}\'</i><br /><br /> Atsiliepimą galite peržiūrėti <a href="{$a->url}">čia</a>.';
$string['entries_saved'] = 'Jūsų atsakymai įrašyti. Dėkojame.';
$string['eventresponsedeleted'] = 'Atsakymas pašalintas';
$string['eventresponsesubmitted'] = 'Atsakymas pateiktas';
$string['export_questions'] = 'Eksportuoti klausimus';
$string['export_to_excel'] = 'Eksportuoti į „Excel“';
$string['feedback:addinstance'] = 'Pridėti naują atsiliepimą';
$string['feedback:complete'] = 'Baigti atsiliepimą';
$string['feedback:createprivatetemplate'] = 'Kurti asmeninį šabloną';
$string['feedback:createpublictemplate'] = 'Kurti viešąjį šabloną';
$string['feedback:deletesubmissions'] = 'Naikinti baigtus pateikimus';
$string['feedback:deletetemplate'] = 'Naikinti šabloną';
$string['feedback:edititems'] = 'Redaguoti elementus';
$string['feedback:mapcourse'] = 'Susieti kursus su visuotiniais atsiliepimais';
$string['feedback:receivemail'] = 'Gauti pranešimą el. paštu';
$string['feedback:view'] = 'Peržiūrėti atsiliepimą';
$string['feedback:viewanalysepage'] = 'Peržiūrėti analizės puslapį po pateikimo';
$string['feedback:viewreports'] = 'Peržiūrėti ataskaitas';
$string['feedback_is_not_for_anonymous'] = 'Atsiliepimas nėra anoniminis';
$string['feedback_is_not_open'] = 'Atsiliepimas neatidarytas';
$string['feedbackclose'] = 'Uždaryti atsiliepimą';
$string['feedbackcompleted'] = '{$a->username} baigė {$a->feedbackname}';
$string['feedbackopen'] = 'Atidaryti atsiliepimą';
$string['feedbackupdated'] = 'Atsiliepimas atnaujintas.';
$string['file'] = 'Failas';
$string['filter_by_course'] = 'Filtruoti pagal kursą';
$string['handling_error'] = 'Apdorojant atsiliepimų modulio veiksmą įvyko klaida';
$string['hide_no_select_option'] = 'Slėpti parinktį Nepasirinkta';
$string['horizontal'] = 'Horizontalus';
$string['import_questions'] = 'Importuoti klausimus';
$string['import_successfully'] = 'Importuota sėkmingai';
$string['importfromthisfile'] = 'Importuoti iš šio failo';
$string['includeuserinrecipientslist'] = 'Į gavėjų sąrašą įtrauti {$a}';
$string['indicator:cognitivedepth'] = 'Kognityvinis atsiliepimas';
$string['indicator:cognitivedepth_help'] = 'Šis rodiklis yra pagrįstas pažinimo gyliu, kurį besimokantysis pasiekė vykdydamas Atsiliepimo užduotį.';
$string['indicator:cognitivedepthdef'] = 'Kognityvinis atsiliepimas';
$string['indicator:cognitivedepthdef_help'] = 'Per šį analizės intervalą dalyvis pasiekė šį pažinimo įtraukimo procentą, kurį siūlo atsiliepimo veikla (lygiai = nėra peržiūros, peržiūra, pateikimas)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Socialinis atsiliepimas';
$string['indicator:socialbreadth_help'] = 'Šis rodiklis pagrįstas socialiniu platumu, kurį besimokantysis pasiekė vykdydamas Atsiliepimo veiklą.';
$string['indicator:socialbreadthdef'] = 'Socialinis atsiliepimas';
$string['indicator:socialbreadthdef_help'] = 'Dalyvis per šį analizės intervalą pasiekė šį socialinio įsitraukimo procentą, kurį siūlo Atsiliepimo veikla (Lygiai = Nedalyvauja, Dalyvis vienas, Dalyvis su kitais)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Informacija';
$string['infotype'] = 'Informacijos tipas';
$string['insufficient_responses'] = 'nepakanka atsakymų';
$string['insufficient_responses_for_this_group'] = 'Yra nepakankamai šios grupės atsakymų';
$string['insufficient_responses_help'] = 'Jei norite, kad atsiliepimas būtų anoniminis, būtini ne mažiau kaip 2 atsakymai.';
$string['item_label'] = 'Žyma';
$string['item_name'] = 'Klausimas';
$string['label'] = 'Teksto ir medijos sritis';
$string['labelcontents'] = 'Turinys';
$string['mapcourse'] = 'Susieti atsiliepimą su kursais';
$string['mapcourse_help'] = 'Numatyta, kad atsiliepimų formos, kurios yra kuriamos jūsų pagrindiniame puslapyje, prieinamos visoje svetainėje ir naudojant atsiliepimų bloką bus rodomos visuose kursuose. Galite reikalauti, kad atsiliepimo forma būtų rodoma, nustatydami ją kaip statišką bloką arba apriboti kursus, kuriuose bus rodoma atsiliepimo forma, susiedami ją su konkrečiais kursais.';
$string['mapcourseinfo'] = 'Tai visos svetainės atsiliepimas, kuris naudojant atsiliepimų bloką prieinamas visuose kursuose. Tačiau susiedami kursus, galite apriboti, kuriems kursams jis bus rodomas. Ieškokite kursų ir susiekite jį su šiuo atsiliepimu.';
$string['mapcoursenone'] = 'Nesusieti jokie kursai. Atsiliepimas galimas visiems kursams';
$string['mapcourses'] = 'Susieti atsiliepimą su kursais';
$string['mappedcourses'] = 'Susieti kursai';
$string['mappingchanged'] = 'Kursų susiejimas buvo atnaujintas';
$string['maximal'] = 'Didžiausias';
$string['messageprovider:message'] = 'Atsiliepimo priminimas';
$string['messageprovider:submission'] = 'Pranešimai apie atsiliepimus';
$string['minimal'] = 'Mažiausias';
$string['mode'] = 'Režimas';
$string['modulename'] = 'Atsiliepimas';
$string['modulename_help'] = 'Atsiliepimų veikla leidžia kursų kūrėjui sukurti pasirinktinę apklausą, kurioje būtų galima rinkti dalyvių atsiliepimus, naudojant įvairius klausimų tipus, įskaitant klausimus su keliais atsakymų variantais, taip/ne arba teksto įvedimą.

Jei pageidaujama, grįžtamojo ryšio atsakymai gali būti anoniminiai, o rezultatai gali būti rodomi visiems dalyviams arba tik kurso kūrėjams.

Atsiliepimų veikla gali būti naudojama:
* kursų vertinimui, padedančiam tobulinti turinį vėlesniems dalyviams
* kad dalyviai galėtų užsiregistruoti į kursų modulius, renginius ir t. t.
* svečių apklausoms apie kursų pasirinkimą ir t. t.
* apklausoms prieš patyčias, kuriose mokiniai gali anonimiškai pranešti apie incidentus.';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulenameplural'] = 'Atsiliepimas';
$string['move_item'] = 'Perkelti šį klausimą';
$string['multichoice'] = 'Keli pasirinkimai';
$string['multichoice_values'] = 'Kelių pasirinkimų reikšmės';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Keli pasirinkimai (įvertinta)';
$string['multichoicetype'] = 'Kelių pasirinkimų tipas';
$string['multiplesubmit'] = 'Keli pateikimai';
$string['multiplesubmit_help'] = 'Jei nustatyta Taip:

* Anoniminėms apklausoms: dalyviai gali pateikti neribotą atsakymų skaičių, o visi atsakymai bus įrašyti.
* Neanoniminėms apklausoms: dalyviai gali pateikti neribotą skaičių atsakymų, tačiau bus įrašytas tik paskutinis jų atsakymas.';
$string['name'] = 'Pavadinimas';
$string['name_required'] = 'Būtinas vardas';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = 'Kitas puslapis';
$string['no_handler'] = 'Nėra veiksmų apdorojimo programos, skirtos';
$string['no_itemlabel'] = 'Nėra žymos';
$string['no_itemname'] = 'Nėra elemento pavadinimo';
$string['no_items_available_yet'] = 'Dar nenustatyti jokie klausimai';
$string['no_templates_available_yet'] = 'Dar nėra jokių šablonų';
$string['non_anonymous'] = 'Naudotojo vardas bus užregistruotas ir rodomas su atsakymais';
$string['non_anonymous_entries'] = 'Neanoniminiai įrašai ({$a})';
$string['non_respondents_students'] = 'Neatsakę besimokantieji ({$a})';
$string['not_completed_yet'] = 'Dar nebaigta';
$string['not_selected'] = 'Nepasirinkta';
$string['not_started'] = 'Nepradėta';
$string['numberoutofrange'] = 'Skaičius nėra iš intervalo';
$string['numeric'] = 'Skaitinis atsakymas';
$string['numeric_range_from'] = 'Intervalas nuo';
$string['numeric_range_to'] = 'Intervalas iki';
$string['of'] = 'iš';
$string['oldvaluespreserved'] = 'Visi seni klausimai ir priskirtos reikšmės bus išsaugotos';
$string['oldvalueswillbedeleted'] = 'Dabartiniai klausimai ir visi atsakymai bus panaikinti.';
$string['only_one_captcha_allowed'] = 'Atsiliepime gali būti tik viena CAPTCHA';
$string['openafterclose'] = 'Atidarymo data nurodyta po uždarymo datos';
$string['overview'] = 'Apžvalga';
$string['page'] = 'Puslapis';
$string['page-mod-feedback-x'] = 'Bet kuris atsiliepimų modulio puslapis';
$string['page_after_submit'] = 'Puslapis po pateikimo';
$string['pagebreak'] = 'Puslapio lūžis';
$string['pluginadministration'] = 'Atsiliepimų administravimas';
$string['pluginname'] = 'Atsiliepimas';
$string['position'] = 'Vieta';
$string['previewquestions'] = 'Peržiūrėti klausimus';
$string['previous_page'] = 'Ankstesnis puslapis';
$string['privacy:metadata:completed'] = 'Atsiliepimo pateikimo įrašas';
$string['privacy:metadata:completed:anonymousresponse'] = 'Pateikimas naudojamas anonimiškai ar ne.';
$string['privacy:metadata:completed:timemodified'] = 'Laikas, kai paskutinį kartą pateikta.';
$string['privacy:metadata:completed:userid'] = 'Naudotojo, kuris atliko atsiliepimo veiklą, ID.';
$string['privacy:metadata:completedtmp'] = 'Įrašas vis dar pateikiamas.';
$string['privacy:metadata:value'] = 'Atsakymo į klausimą įrašas.';
$string['privacy:metadata:value:value'] = 'Atsakymas pasirinktas.';
$string['privacy:metadata:valuetmp'] = 'Atsakymo į klausimą įrašas pateikiamas.';
$string['public'] = 'Vieša';
$string['question'] = 'Klausimas';
$string['questionandsubmission'] = 'Klausimų ir pateikimų nustatymai';
$string['questionmoved'] = 'Klausimas perkeltas';
$string['questions'] = 'Klausimai';
$string['questionslimited'] = 'Rodomi tik {$a} pirmieji klausimai, peržiūrėkite atskirus atsakymus arba atsisiųskite lentelės duomenis, kad galėtumėte peržiūrėti viską.';
$string['radio'] = 'Keli pasirinkimai – vienas atsakymas';
$string['radio_values'] = 'Atsakymai';
$string['ready_feedbacks'] = 'Paruošti atsiliepimai';
$string['required'] = 'Būtina';
$string['resetting_data'] = 'Atsakymai';
$string['resetting_delete'] = 'Ištrinti atsakymus';
$string['resetting_feedbacks'] = 'Iš naujo nustatomi atsiliepimai';
$string['response_nr'] = 'Atsakymo numeris';
$string['responses'] = 'Atsakymai';
$string['responsetime'] = 'Atsakymų laikas';
$string['save_as_new_item'] = 'Įrašyti kaip naują klausimą';
$string['save_as_new_template'] = 'Įrašyti kaip naują šabloną';
$string['save_entries'] = 'Pateikti savo atsakymus';
$string['save_item'] = 'Įrašyti klausimą';
$string['saving_failed'] = 'Įrašyti nepavyko';
$string['search:activity'] = 'Grįžtamasis ryšys - veiklos informacija';
$string['search_course'] = 'Ieškoti kursų';
$string['searchcourses'] = 'Ieškoti kursų';
$string['searchcourses_help'] = 'Ieškoti kursų, kuriuos norite susieti su šiuo atsiliepimu, kodo arba pavadinimo.';
$string['selected_dump'] = 'Pasirinkti $SESSION kintamojo indeksai yra iškelti žemiau:';
$string['send'] = 'Siųsti';
$string['send_message'] = 'Siųsti pranešimą';
$string['show_all'] = 'Rodyti viską';
$string['show_analysepage_after_submit'] = 'Rodyti analizės puslapį po pateikimo';
$string['show_entries'] = 'Rodyti atsakymus';
$string['show_entry'] = 'Rodyti atsakymą';
$string['show_nonrespondents'] = 'Rodyti neatsakiusius';
$string['site_after_submit'] = 'Svetainė po pateikimo';
$string['sort_by_course'] = 'Rikiuoti pagal kursą';
$string['started'] = 'Pradėjo';
$string['startedon'] = 'Pradėjo {$a}';
$string['subject'] = 'Tema';
$string['switch_item_to_not_required'] = 'Nustatyti kaip neprivalomą';
$string['switch_item_to_required'] = 'Nustatyti kaip privalomą';
$string['template'] = 'Šablonas';
$string['template_deleted'] = 'Šablonas ištrintas';
$string['template_saved'] = 'Šablonas įrašytas';
$string['templates'] = 'Šablonai';
$string['textarea'] = 'Ilgesnis tekstinis atsakymas';
$string['textarea_height'] = 'Eilučių skaičius';
$string['textarea_width'] = 'Plotis';
$string['textfield'] = 'Trumpas tekstinis atsakymas';
$string['textfield_maxlength'] = 'Maksimalus leidžiamas simbolių skaičius';
$string['textfield_size'] = 'Teksto lauko plotis';
$string['there_are_no_settings_for_recaptcha'] = 'Nėra CAPTCHA parametrų';
$string['this_feedback_is_already_submitted'] = 'Jau užbaigėte šią veiklą.';
$string['typemissing'] = 'Nėra reikšmės „type“';
$string['update_item'] = 'Įrašyti klausimo pakeitimus';
$string['url_for_continue'] = 'Mygtuko Tęsti URL';
$string['url_for_continue_help'] = 'Numatyta, kad pateikus atsiliepimą mygtuko Tęsti paskirties vieta yra kursų puslapis. Čia galite apibrėžti kitą mygtuko Tęsti paskirties vietos URL.';
$string['use_one_line_for_each_value'] = 'Naudoti vieną eilutę kiekvienam atsakymui!';
$string['use_this_template'] = 'Naudoti šį šabloną';
$string['using_templates'] = 'Naudoti šabloną';
$string['vertical'] = 'Vertikalus';
$string['whatfor'] = 'Ką tu nori daryti?';
