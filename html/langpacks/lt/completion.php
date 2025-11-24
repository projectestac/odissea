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
 * Strings for component 'completion', language 'lt', version '4.5'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Įvertinimo gavimas';
$string['achievingpassinggrade'] = 'Pasiekti teigiamą įvertinimą';
$string['activities'] = 'Veiklos';
$string['activitiescompleted'] = 'Baigtos veiklos';
$string['activitiescompletednote'] = 'Pastaba: turi būti nustatytas veiklos užbaigimas, kad veikla būtų rodoma aukščiau pateiktame sąraše.';
$string['activitieslabel'] = 'Veiklos / ištekliai';
$string['activityaggregation'] = 'Sąlyga reikalauja';
$string['activityaggregation_all'] = 'VISOMS pasirinktoms veikloms užbaigti';
$string['activityaggregation_any'] = 'BET KURIAI pasirinktai veiklai užbaigti';
$string['activitycompletion'] = 'Užbaigimo sąlygos';
$string['activitycompletionupdated'] = 'Pakeitimai išsaugoti';
$string['activitygradenotrequired'] = 'Įvertinimas nereikalaujamas';
$string['activitygradetopassnotset'] = 'Šiai užduočiai nėra nustatytas galiojantis išlaikymo įvertinimas. Jį galima nustatyti veiklos nustatymų dalyje Įvertinimas.';
$string['addconditions'] = 'Pridėti sąlygas';
$string['affectedactivities'] = 'Pakeitimai turės įtakos šioms <b> {$a} </ b> veikloms ar ištekliams:';
$string['aggregationmethod'] = 'Rinkimo metodas';
$string['all'] = 'Viskas';
$string['allconditions'] = 'Veikla baigta, kai besimokantieji atlieka viską:';
$string['any'] = 'Bet kas';
$string['approval'] = 'Patvirtinimas';
$string['areyousureoverridecompletion'] = 'Ar Jūs tikrai norite pakeisti dabartinę veiklos užbaigimo būseną šiam naudotojui ir pažymėti kaip "{$a}"?';
$string['badautocompletion'] = 'Turite pasirinkti bent vieną sąlygą.';
$string['badcompletiongradeitemnumber'] = 'Reikalauti įvertinimo negalima <b>{$a}</b> , kadangi vertinimas {$a} yra neįjungtas.';
$string['bulkactivitycompletion'] = 'Masinis veiklų užbaigimo redagavimas';
$string['bulkactivitydetail'] = 'Pasirinkite veiklas redagavimui vienu metu';
$string['bulkcompletiontracking'] = 'Užbaigimo sekimas';
$string['bulkcompletiontracking_help'] = '<strong>Nėra:</strong> Veiklos užbaigimas nereikalaujamas

<strong>Neautomatinis:</strong> Užbaigę veiklą besimokantieji gali ją pažymėti neautomatiniu būdu

<strong>Su sąlyga (-omis):</strong> Veikla rodoma kaip užbaigta kai išpildomos sąlygos';
$string['checkactivity'] = 'Žymimasis langelis veiklai / ištekliui: {$a}';
$string['checkall'] = 'Pažymėti ar atžymėti visas veiklas ir išteklius';
$string['checkallsection'] = 'Pažymėti ar atžymėti visas veiklas ir išteklius šioje dalyje: {$a}';
$string['completeactivity'] = 'Baigti veiklą';
$string['completed'] = 'Baigta';
$string['completedunlocked'] = 'Užbaigimo parinktys atrakintos';
$string['completedunlockedtext'] = 'Kai išsaugosite šią formą, užbaigimo duomenys bus ištrinti ir, jei įmanoma, perskaičiuoti. Kad to išvengtumėte, galite pereiti į kitą langą ir neišsaugoti.';
$string['completedwarning'] = 'Užbaigimo parinktys užrakintos';
$string['completedwarningtext'] = 'Ši veikla jau buvo pažymėtas kaip baigta {$a} dalyvio (-ių). Pakeitus užbaigimo parinktis bus pašalinta jų užbaigimo būsena, kas gali sukelti painiavą. Todėl parinktys yra užrakintos ir negali būti atrakintos, nebent tai absoliučiai būtina.';
$string['completion'] = 'Užbaigimo sekimas';
$string['completion-alt-auto-enabled'] = 'Sistema pažymi, kad šis elementas užbaigtas pagal sąlygas: {$a}';
$string['completion-alt-auto-fail'] = 'Baigta: {$a} (negautas išlaikymo įvertinimas)';
$string['completion-alt-auto-n'] = 'Nebaigta: {$a}';
$string['completion-alt-auto-n-override'] = 'Nebaigta: {$a->modname} (pažymėjo {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Baigta: {$a} (gautas išlaikymo įvertinimas)';
$string['completion-alt-auto-y'] = 'Baigta: {$a}';
$string['completion-alt-auto-y-override'] = 'Užbaigta: {$a->modname} (pažymėjo {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Besimokantieji gali neautomatiniu būdu pažymėti, kad užbaigė šį elementą: {$a}';
$string['completion-alt-manual-n'] = 'Dar neužbaigta: {$a}. Pasirinkti pažymėti kaip užbaigtą';
$string['completion-alt-manual-n-override'] = 'Dar neužbaigta: {$a->modname} (pažymėjo {$a->overrideuser}). Pasirinkti pažymėti kaip užbaigtą.';
$string['completion-alt-manual-y'] = 'Užbaigta: {$a}. Pasirinkti pažymėti kaip nebaigtą';
$string['completion-alt-manual-y-override'] = 'Užbaigta: {$a->modname} (pažymėjo {$a->overrideuser}). Pasirinkti pažymėti kaip neužbaigtą.';
$string['completion-fail'] = 'Baigtas (neišlaikyta)';
$string['completion-n'] = 'Nebaigta';
$string['completion-n-override'] = 'Nebaigta (pažymėjo {$a})';
$string['completion-pass'] = 'Baigtas (išlaikyta)';
$string['completion-y'] = 'Baigtas';
$string['completion-y-override'] = 'Baigta (pažymėjo {$a})';
$string['completion_automatic'] = 'Pridėti reikalavimus';
$string['completion_help'] = 'Jei įjungta, veiklos užbaigimas stebimas rankiniu būdu arba automatiškai, atsižvelgiant į tam tikras sąlygas. Jei pageidaujama, gali būti nustatytos kelios sąlygos. Jei taip, veikla bus laikoma baigta tik tada, kai bus įvykdytos VISOS sąlygos.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'Besimokantieji rankiniu būdu turi pažymėti, kad veikla atlikta.';
$string['completion_none'] = 'Nėra';
$string['completionactivitydefault'] = 'Naudoti numatytą veiklą';
$string['completionanygrade_desc'] = 'Bet kuris įvertinimas';
$string['completiondefault'] = 'Numatytasis užbaigimo sekimas';
$string['completiondisabled'] = 'Išjungta, nerodoma veiklos parametruose';
$string['completionduration'] = 'Registracija';
$string['completionenabled'] = 'Įjungta, valdyti naudojant užbaigimo ir veiklos parametrus';
$string['completionexpected'] = 'Nustatyti priminimą laiko juostoje';
$string['completionexpected_help'] = 'Tai leidžia nustatyti priminimą, kad besimokantiesiems reikia dirbti su šia veikla. Tai bus rodoma „Mano pagrindinis“ puslapyje bloke „Laiko juosta“ kaip „{$a} reikia imtis veiksmų“.';
$string['completionexpecteddesc'] = 'Užbaigimo tikimasi {$a}';
$string['completionexpectedfor'] = '{$a->instancename} turi būti baigta';
$string['completionicons'] = 'Užbaigimo žymėjimo laukai';
$string['completionicons_help'] = 'Šalia veiklos pavadinimo esantį lauką galima naudoti veiklos užbaigimo pažymėjimui.

Jei rodomas taškuotas rėmelis, pažymėjimas pasirodys automatiškai, kai baigsite veiklą pagal dėstytojo nustatytas sąlygas.

Jei rodomas vientisos linijos rėmelis, spustelėjimu galite pažymėti, kai jums atrodys, kad užbaigėte veiklą. (Persigalvojus, spustelėję lauką dar kartą, galėsite pažymėjimą pašalinti.)';
$string['completionmenuitem'] = 'Užbaigimas';
$string['completionnotenabled'] = 'Užbaigimas nėra įgalintas';
$string['completionnotenabledforcourse'] = 'Užbaigimas nėra įgalintas pasirinktam kursui';
$string['completionnotenabledforsite'] = 'Užbaigimas nėra įgalintas pasirinktam puslapiui';
$string['completionondate'] = 'Data';
$string['completionondatevalue'] = 'Data, kai kursas bus pažymėtas kaip užbaigtas';
$string['completionpassgrade'] = 'Reikalauti teigiamo įvertinimo';
$string['completionpassgrade_desc'] = 'Gauti išlaikymo įvertinimą';
$string['completionpassgrade_help'] = 'Jei ši funkcija įjungta, veikla laikoma baigta, kai besimokantysis gauna teigiamą įvertinimą.';
$string['completionsettingslocked'] = 'Užbaigimo parametrai užrakinti';
$string['completionupdated'] = 'Atnaujintas užbaigimas veiklai <b>{$a}</b>';
$string['completionusegrade'] = 'Įvertinimas būtinas';
$string['completionusegrade_desc'] = 'Gauti įvertinimą';
$string['completionusegrade_help'] = 'Jei įjungta, veikla laikoma baigta, kai besimokantysis gauna įvertinimą. Jei nustatytas veiklos išlaikymo įvertinimas, tada veiklos užbaigimo ataskaitoje rodomos išlaikymo ir neišlaikymo piktogramos.';
$string['completionview'] = 'Būtinas rodinys';
$string['completionview_desc'] = 'Peržiūrėti veiklą';
$string['configcompletiondefault'] = 'Numatytasis nustatymas užbaigimo sekimui, kai kuriamos naujos veiklos.';
$string['configenablecompletion'] = 'Jei įjungta, galima nustatyti kurso ir veiklos baigimo sąlygas. Rekomenduojama nustatyti veiklos baigimo sąlygas, kad reikšmingi duomenys būtų rodomi naudotojams jų kursų apžvalgoje Mano pagrindinis puslapyje.';
$string['confirmselfcompletion'] = 'Patvirtinti savo užbaigimą';
$string['courseaggregation'] = 'Sąlyga reikalauja';
$string['courseaggregation_all'] = 'VISIEMS pasirinktiems kursams užbaigti';
$string['courseaggregation_any'] = 'BET KURIAM pasirinktam kursui užbaigti';
$string['coursealreadycompleted'] = 'Jūs jau užbaigėte šį kursą';
$string['coursecomplete'] = 'Kurso baigimas';
$string['coursecompleted'] = 'Kursas baigtas';
$string['coursecompletedmessage'] = '<p>Sveikiname!</p><p>Jūs baigėte kursą <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Kurso baigimas';
$string['coursecompletioncondition'] = 'Sąlyga: {$a}';
$string['coursecompletionnavigation'] = 'Kurso baigimo tretinė navigacija';
$string['coursecompletionsettings'] = 'Kurso baigimo nustatymai';
$string['coursegrade'] = 'Kurso įvertinimas';
$string['coursesavailable'] = 'Kursai';
$string['coursesavailableexplaination'] = 'Pastaba:  turi būti nustatytos kurso baigimo sąlygos, kad kursas būtų įtrauktas į aukščiau esantį sąrašą.';
$string['criteria'] = 'Kriterijai';
$string['criteriagroup'] = 'Kriterijų grupė';
$string['criteriarequiredall'] = 'Visi žemiau pateikti kriterijai yra būtini';
$string['criteriarequiredany'] = 'Bet kuris žemiau pateiktas kriterijus yra būtinas';
$string['criteriasummary'] = '{$a->type}: {$a->summary}';
$string['csvdownload'] = 'Atsisiųsti skaičiuoklės formatu (UTF-8 .csv)';
$string['datepassed'] = 'Išlaikymo data';
$string['days'] = 'Dienos';
$string['daysoftotal'] = '{$a->days} iš {$a->total}';
$string['daystakingcourse'] = 'Dienos kursui';
$string['daysuntilcompletion'] = 'Laikas iki užbaigimo';
$string['defaultactivitycompletioncourse'] = 'Tai šio kurso numatytosios veiklų užbaigimo sąlygos.';
$string['defaultactivitycompletionsite'] = 'Tai visiems kursams numatytosios veiklos užbaigimo sąlygos.';
$string['defaultcompletion'] = 'Numatytas veiklos užbaigimas';
$string['defaultcompletionupdated'] = 'Pakeitimai išsaugoti';
$string['deletecompletiondata'] = 'Užbaigimo duomenys';
$string['dependencies'] = 'Priklausomybės';
$string['dependenciescompleted'] = 'Kitų kursų užbaigimas';
$string['detail_desc:receivegrade'] = 'Gauti įvertinimą';
$string['detail_desc:receivepassgrade'] = 'Gauti išlaikymo įvertinimą';
$string['detail_desc:view'] = 'Peržiūrėti';
$string['done'] = 'Atlikta';
$string['editconditions'] = 'Redaguoti sąlygas';
$string['editcoursecompletionsettings'] = 'Redaguoti kurso užbaigimo sąlygas';
$string['emptyconditionsinfo'] = 'Šiai veiklai nenustatytos užbaigimo sąlygos.';
$string['emptyconditionswarning'] = 'Turite pridėti bent vieną užbaigimo sąlygą.';
$string['enablecompletion'] = 'Įjungti užbaigimo sekimą';
$string['enablecompletion_help'] = 'Jei įjungta, galite nustatyti veiklos arba kurso užbaigimo sąlygas.';
$string['enrolmentduration'] = 'Registracijos trukmė';
$string['enrolmentdurationlength'] = 'Naudotojai privalo likti įregistruoti';
$string['err_noactivities'] = 'Neįjungta nei vienos veiklos užbaigimo informacija, todėl negalima jos rodyti. Galite įjungti užbaigimo informaciją redaguodami veiklos parametrus.';
$string['err_nocourses'] = 'Jokiuose kituose kursuose kurso baigimas neįjungtas, todėl kursai nerodomi. Galite įjungti kurso baigimą kurso parametruose.';
$string['err_nograde'] = 'Nenustatytas šio kurso išlaikymo įvertinimas. Norėdami įjungti šį kriterijaus tipą turite sukurti šio kurso išlaikymo įvertinimą.';
$string['err_noroles'] = 'Kurse nėra vaidmenų, kuriems suteikta teisė pažymėti užbaigimą (moodle/course:markcomplete).';
$string['err_nousers'] = 'Kurse arba grupėje nėra besimokančiųjų, kuriems būtų rodoma baigimo informacija. (Baigimo informacija rodoma tik naudotojams, turintiems teisę "Rodyti baigimo ataskaitas". Pagal numatytuosius parametrus ši teisė yra tik besimokančiojo vaidmeniui, todėl, kai nebus besimokančiųjų, matysite šią klaidą.)';
$string['err_settingslocked'] = 'Vienas ar daugiau besimokančiųjų jau įvykdė kriterijų, todėl nustatymai buvo užrakinti. Atrakinus nustatymus bus ištrinti naudotojo užbaigimo duomenys ir gali kilti painiavos.';
$string['err_system'] = 'Užbaigimo sistemoje įvyko vidinė klaida. (Sistemos administratoriai gali įjungti programinių klaidų taisymo informaciją, kad matytų išsamesnę informaciją.)';
$string['eventcoursecompleted'] = 'Kursas baigtas';
$string['eventcoursecompletionupdated'] = 'Kurso baigimas atnaujintas';
$string['eventcoursemodulecompletionupdated'] = 'Kurso veiklos užbaigimas atnaujintas';
$string['eventdefaultcompletionupdated'] = 'Numatytasis kurso veiklos užbaigimas atnaujintas';
$string['excelcsvdownload'] = 'Atsisiųsti su „Excel“ suderinamu formatu (.csv)';
$string['failed'] = 'Nepavyko';
$string['fraction'] = 'Trupmena';
$string['graderequired'] = 'Įvertinimas reikalingas';
$string['gradexrequired'] = '{$a} reikalingas';
$string['hiddenrules'] = 'Kai kurie specifiniai nustatymai <b>{$a}</b> buvo paslėpti. Peržiūrai atžymėkite kitas veiklas';
$string['incompatibleplugin'] = 'Ši veikla nepalaiko numatytųjų užbaigimo nustatymų. Užbaigimo sąlygas kiekvienam naudojimui reikia nustatyti rankiniu būdu.';
$string['inprogress'] = 'Nebaigta';
$string['manual'] = 'Neautomatinis';
$string['manualcompletionby'] = 'Neautomatiniu būdu užbaigė';
$string['manualcompletionbynote'] = 'Pastaba: turi būti leidžiama moodle/course:markcomplete, kad vaidmuo būtų rodomas sąraše.';
$string['manualselfcompletion'] = 'Savas užbaigimas neautomatiniu būdu';
$string['manualselfcompletionnote'] = 'Pastaba: Savarankiško užbaigimo blokas turėtų būti įtrauktas į kursą, jei savarankiškas užbaigimas yra įjungtas.';
$string['markcomplete'] = 'Pažymėti kaip užbaigtą';
$string['markedcompleteby'] = 'Kaip užbaigtą pažymėjo {$a}';
$string['markingyourselfcomplete'] = 'Paties žymėjimas kaip užbaigto';
$string['modifybulkactions'] = 'Veiksmų keitimas redaguojant vienu metu';
$string['moredetails'] = 'Daugiau informacijos';
$string['nocriteriaset'] = 'Užbaigimo kriterijaus pasirinktam kursui nėra';
$string['nogradeitem'] = 'Privalomas įvertinimas negali būti įjungtas <b> {$a} </b> veiklai, nes ji nėra vertinama.';
$string['notcompleted'] = 'Nebaigta';
$string['notenroled'] = 'Jūs nesate įregistruotas į šį kursą';
$string['nottracked'] = 'Šiuo metu jūsų kurso užbaigimas nestebimas';
$string['notyetstarted'] = 'Dar nepradėta';
$string['overallaggregation'] = 'Užbaigimo reikalavimai';
$string['overallaggregation_all'] = 'Kursas yra užbaigtas tuomet, kai yra įvykdytos visos sąlygos';
$string['overallaggregation_any'] = 'Kursas yra užbaigtas tuomet, kai yra įvykdyta bent viena iš sąlygų';
$string['pending'] = 'Laukiama';
$string['periodpostenrolment'] = 'Įsiregistravimas praėjus laikotarpiui';
$string['privacy:metadata:completionstate'] = 'Jei veikla baigta';
$string['privacy:metadata:course'] = 'Kurso identifikatorius';
$string['privacy:metadata:coursecompletedsummary'] = 'Saugoma informacija apie naudotojus, kurie įvykdė kurso baigimo sąlygas';
$string['privacy:metadata:coursemoduleid'] = 'Veiklos ID';
$string['privacy:metadata:coursemodulesummary'] = 'Saugomi naudotojo veiklos užbaigimo duomenys';
$string['privacy:metadata:coursesummary'] = 'Saugomi naudotojo kurso baigimo duomenys.';
$string['privacy:metadata:gradefinal'] = 'Už kurso baigimą gautas galutinis įvertinimas';
$string['privacy:metadata:overrideby'] = 'Naudotojo ID, kuris pakeitė veiklos užbaigimą';
$string['privacy:metadata:reaggregate'] = 'Jei kursas baigtas pakartotinai.';
$string['privacy:metadata:timecompleted'] = 'Kurso baigimo laikas.';
$string['privacy:metadata:timecreated'] = 'Laikas, kai buvo sukurtas veiklos užbaigimas';
$string['privacy:metadata:timeenrolled'] = 'Laikas, kada naudotojas įregistruotas į kursą';
$string['privacy:metadata:timemodified'] = 'Laikas, kada veiklos užbaigimas buvo keistas';
$string['privacy:metadata:timestarted'] = 'Laikas, kada kursas prasidėjo.';
$string['privacy:metadata:unenroled'] = 'Jei naudotojas buvo išregistruotas iš kurso';
$string['privacy:metadata:userid'] = 'Asmens naudotojo ID su kurso ir veiklos baigimo duomenimis';
$string['privacy:metadata:viewed'] = 'Jei veikla žiūrėta';
$string['progress'] = 'Besimokančiojo pažanga';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Pažanga: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Ankstesnio mokymosi atpažinimas';
$string['remainingenroledfortime'] = 'Pasilikimas įsiregistravus nurodytam laikotarpiui';
$string['remainingenroleduntildate'] = 'Pasilikimas įsiregistravus iki nurodytos datos';
$string['reportpage'] = 'Rodomi naudotojai nuo {$a->from} iki {$a->to} iš visų {$a->total}.';
$string['requiredcriteria'] = 'Būtini kriterijai';
$string['resetactivities'] = 'Išvalyti visas pažymėtas veiklas ar išteklius';
$string['restoringcompletiondata'] = 'Įrašomi užbaigimo duomenys';
$string['roleaggregation'] = 'Sąlyga reikalauja';
$string['roleaggregation_all'] = 'VISIEMS pasirinktiems vaidmenims pažymėti, kai sąlyga yra tenkinama';
$string['roleaggregation_any'] = 'BET KURIAM pasirinktam vaidmeniui pažymėti, kai sąlyga yra tenkinama';
$string['roleidnotfound'] = 'Vaidmens ID {$a} nerastas';
$string['saved'] = 'Įrašyta';
$string['seedetails'] = 'Žiūrėti išsamią informaciją';
$string['select'] = 'Pasirinkti';
$string['self'] = 'Savas';
$string['selfcompletion'] = 'Savas užbaigimas';
$string['showcompletionconditions'] = 'Rodyti veiklos užbaigimo sąlygas';
$string['showcompletionconditions_help'] = 'Rodyti veiklos užbaigimo sąlygas kurso puslapyje.';
$string['showinguser'] = 'Rodomas naudotojas';
$string['studentsmust'] = 'Besimokantieji privalo';
$string['timecompleted'] = 'Baigimo laikas';
$string['todo'] = 'Atlikti';
$string['unenrolingfromcourse'] = 'Išregistruojama iš kurso';
$string['unenrolment'] = 'Išregistravimas';
$string['unit'] = 'Vienetas';
$string['unlockcompletion'] = 'Atrakinti užbaigimo nuostatas';
$string['unlockcompletiondelete'] = 'Atrakinti užbaigimo nuostatas ir panaikinti naudotojo užbaigimo duomenis';
$string['updateactivities'] = 'Atnaujinti užbaigimo statusą pažymėtoms veikloms';
$string['usealternateselector'] = 'Naudoti alternatyvų kursų išrinkiklį';
$string['usernotenroled'] = 'Naudotojas nėra įregistruotas į šį kursą';
$string['viewcoursereport'] = 'Peržiūrėti kurso ataskaitą';
$string['viewingactivity'] = 'Peržiūrimas {$a}';
$string['withconditions'] = 'Su sąlygomis';
$string['writingcompletiondata'] = 'Įrašomi užbaigimo duomenys';
$string['xdays'] = 'Dienų: {$a}';
$string['youmust'] = 'Jūs privalote';
