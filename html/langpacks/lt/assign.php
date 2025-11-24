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
 * Strings for component 'assign', language 'lt', version '4.5'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityattachments'] = 'Užduoties veiklos priedai';
$string['activitydate:submissionsdue'] = 'Pateikti iki:';
$string['activitydate:submissionsopen'] = 'Atidaroma:';
$string['activitydate:submissionsopened'] = 'Atidaroma:';
$string['activityeditor'] = 'Veiklos instrukcijos';
$string['activityeditor_help'] = 'Veiksmai, kuriuos norėtumėte, kad besimokantysis atliktų atlikdamas šią užduotį. Tai rodoma tik pateikimo puslapyje, kuriame besimokantysis redaguoja ir pateikia savo užduotį.';
$string['activityoverview'] = 'Jūs turite įkeltų darbų, kuriuos reikėtų peržiūrėti';
$string['addattempt'] = 'Leisti dar vieną bandymą';
$string['addnewattempt'] = 'Pridėti naują bandymą';
$string['addnewattempt_help'] = 'Tai sukurs jums naują darbo pateikimą.';
$string['addnewattemptfromprevious'] = 'Pridėti naują bandymą remiantis ankstesniu pateikimu';
$string['addnewattemptfromprevious_help'] = 'Tai nukopijuos Jūsų ankstesnio pateikimo turinį į naują pateikimą darbui.';
$string['addnewgroupoverride'] = 'Įtraukti grupės keitimą';
$string['addnewuseroverride'] = 'Įtraukti naudotojo keitimą';
$string['addsubmission'] = 'Įkelti darbą';
$string['addsubmission_help'] = 'Jūs dar neatlikote pateikimo.';
$string['allocatedmarker'] = 'Priskirtas vertintojas';
$string['allocatedmarker_help'] = 'Vertintojas priskirtas pateikimui.';
$string['allowsubmissions'] = 'Leisti naudotojui tęsti darbų įkėlimą šioje užduotyje.';
$string['allowsubmissionsfromdate'] = 'Leisti įkelti darbus nuo';
$string['allowsubmissionsfromdate_help'] = 'Jei įgalinta, besimokantieji negalės pateikti darbų  iki šios datos. Jei atjungta, besimokantieji galės pradėti kelti darbus tuoj pat.';
$string['allowsubmissionsshort'] = 'Leisti darbų pakeitimus';
$string['alwaysshowdescription'] = 'Visada rodyti aprašą';
$string['alwaysshowdescription_help'] = 'Jei išjungta, viršuje esantis užduoties aprašymas bus matomas besimokantiesiems tik nuo "Lesti įkelti darbus nuo" datos.';
$string['applytoteam'] = 'Patvirtinti įvertinimus ir atsaką visai grupei';
$string['assign:addinstance'] = 'Pridėti naują užduotį';
$string['assign:editothersubmission'] = 'Redaguoti kito besimokančiojo pateikimą';
$string['assign:exportownsubmission'] = 'Eksportuoti savo darbus';
$string['assign:grade'] = 'Įvertinti darbą';
$string['assign:grantextension'] = 'Pratęsti įkėlimą';
$string['assign:manageallocations'] = 'Keisti priskirtus vertintojus pateikimams';
$string['assign:managegrades'] = 'Peržiūrėti ir pateikti įvertinimus';
$string['assign:manageoverrides'] = 'Tvarkyti užduoties keitimus';
$string['assign:receivegradernotifications'] = 'Gauti įvertinimų pateikimams pranešimus';
$string['assign:releasegrades'] = 'Pateikti įvertinimai';
$string['assign:revealidentities'] = 'Atskleisti besimokančiųjų tapatybes';
$string['assign:reviewgrades'] = 'Peržiūrėti įvertinimus';
$string['assign:showhiddengrader'] = 'Peržiūrėti paslėpto vertintojo tapatybę';
$string['assign:submit'] = 'Pateikti darbą vertinimui';
$string['assign:view'] = 'Peržiūrėti užduotį';
$string['assign:viewblinddetails'] = 'Žiūrėti besimokančiųjų tapatybes, kai "Anonimiški pateikimai" yra įjungti';
$string['assign:viewgrades'] = 'Žiūrėti įvertinimus';
$string['assign:viewownsubmissionsummary'] = 'Peržiūrėti savo pateikimo santrauką';
$string['assignfeedback'] = 'Atsako papildinys';
$string['assignfeedbackpluginname'] = 'Atsako papildinys';
$string['assignmentduedigesthtml'] = '<p>Sveiki, {$a->firstname},</p>
<p>Šios užduotys turi būti atliktos iki <strong>{$a->duedate}</strong>.</p>
{$a->digest}';
$string['assignmentduedigestitem'] = '„<strong>{$a->assignmentname}</strong>“ kurse {$a->coursename}<br/>
<strong>Užbaigimo laikas: {$a->duetime}</strong><br/>
<a href="{$a->url}" aria-label="Eiti į {$a->assignmentname}">Eiti į veiklą</a>';
$string['assignmentduedigestsubject'] = 'Užduotys turi būti atliktos per 7 dienas';
$string['assignmentduesoonhtml'] = '<p>Sveiki, {$a->firstname},</p>
<p>Užduoties <strong>{$a->assignmentname}</strong> terminas kurse {$a->coursename} jau greitai.</p>
<p><strong>Atlikti iki: {$a->duedate}</strong></p>
<p><a href="{$a->url}">Eiti į veiklą</a></p>';
$string['assignmentduesoonsubject'] = 'Atlikti iki {$a->duedate}: {$a->assignmentname}';
$string['assignmentisdue'] = 'Užduoties atlikimo laikas baigėsi';
$string['assignmentmail'] = '{$a->grader} pateikė savo atsaką į Jūsų įkeltą užduotį \'{$a->assignment}\'.

Atsaką Jūs rasite ten kur įkėlėte darbą:

{$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} pateikė atsiliepimą Jūsų pateiktai užduočiai \'<i>{$a->assignment}</i>\'.</p> <p>Jį pamatyti galite pridėtą prie <a href="{$a->url}">užduoties pateikimo</a>.</p>';
$string['assignmentmailsmall'] = '{$a->grader} pateikė savo atsaką į Jūsų įkeltą užduotį \'{$a->assignment}\'. Atsaką Jūs rasite ten kur įkėlėte darbą';
$string['assignmentname'] = 'Užduoties pavadinimas';
$string['assignmentoverduehtml'] = '<p>Sveiki, {$a->firstname},</p>
<p><strong>{$a->assignmentname}</strong> kurse {$a->coursename} baigiasi <strong>{$a->duedate}</strong>.</p>
<p>Galbūt vis dar galėsite pateikti užduotį {$a->cutoffsnippet}, tačiau jos pateikimas bus pažymėtas kaip pavėluotas.</p>
<p><a href="{$a->url}">Eiti į veiklą</a></p>';
$string['assignmentoverduehtmlcutoffsnippet'] = '<strong>{$a->cutoffdate}</strong>';
$string['assignmentoverduesubject'] = 'Vėluojama: {$a->assignmentname}';
$string['assignmentplugins'] = 'Užduoties papildiniai';
$string['assignmentsperpage'] = 'Užduočių puslapyje';
$string['assignsubmission'] = 'Įkeliamo darbo papildinys';
$string['assignsubmissionpluginname'] = 'Įkeliamo darbo papildinys';
$string['assigntimeleft'] = 'Liko laiko';
$string['attemptheading'] = 'Bandymas {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Ankstesnis bandymas';
$string['attemptnumber'] = 'Bandymo numeris';
$string['attemptreopenmethod'] = 'Papildomi bandymai';
$string['attemptreopenmethod_automatic'] = 'Automatiškai';
$string['attemptreopenmethod_automatic_help'] = 'Po kiekvieno bandymo kitas bandymas suteikiamas automatiškai.';
$string['attemptreopenmethod_help'] = 'Parametras nurodo kaip besimokančiajam atidaromi papildomi bandymai. Kiekvieno bandymo metu įvertinimas ir atsiliepimai yra išsaugomi, juos gali peržiūrėti besimokantysis ir dėstytojas. Galimos parinktys yra:

*Niekada - galimas tik vienas bandymas.
*Rankiniu būdu - dėstytojas gali leisti papildomus bandymus.
*Automatiškai, kol negautas išlaikymo įvertinimas - papildomi bandymai yra leidžiami automatiškai kol besimokantysis pasieks išlaikymo įvertinimą, nurodytą įvertinimų knygelės nuostatose šiai užduočiai.';
$string['attemptreopenmethod_manual'] = 'Rankiniu būdu';
$string['attemptreopenmethod_manual_help'] = 'Po kiekvieno bandymo galite suteikti kitą bandymą naudodamiesi puslapiu „Pateikimai“ arba puslapiu „Vertintojas“.';
$string['attemptreopenmethod_none'] = 'Niekada';
$string['attemptreopenmethod_untilpass'] = 'Automatiškai, kol negaunamas teigiamas įvertinimas';
$string['attemptreopenmethod_untilpass_help'] = 'Po kiekvieno bandymo kitas bandymas bus suteikiamas automatiškai, kol besimokantysis gaus teigiamą įvertinimą.';
$string['attemptsettings'] = 'Bandymo nustatymai';
$string['availability'] = 'Prieinamumas';
$string['back'] = 'Atgal';
$string['backtoassignment'] = 'Atgal į užduotį';
$string['batchoperationaddattempt'] = 'Papildomas bandymas';
$string['batchoperationconfirmaddattempt'] = 'Leisti dar vieną bandymą pasirinktiems pateikimams?';
$string['batchoperationconfirmdownloadselected'] = 'Atsisiųsti pasirinktus pateikimus?';
$string['batchoperationconfirmgrantextension'] = 'Pratęsti įkėlimus visiems pasirinktiems darbams?';
$string['batchoperationconfirmlock'] = 'Užrakinti visus pasirinktus darbus?';
$string['batchoperationconfirmremovesubmission'] = 'Pašalinti pasirinktus darbus?';
$string['batchoperationconfirmreverttodraft'] = 'Paversti pasirinktus darbus į juodraščius?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Nustatyti visų pasirinktų pateikimų vertinimo paskirstymą?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Nustatyti visų pasirinktų pateikimų vertinimo eigos būseną?';
$string['batchoperationconfirmunlock'] = 'Atrakinti visus pasirinktus darbus?';
$string['batchoperationdownloadselected'] = 'Atsisiųsti';
$string['batchoperationgrantextension'] = 'Pratęsti';
$string['batchoperationlock'] = 'Užrakinti';
$string['batchoperationremovesubmission'] = 'Ištrinti';
$string['batchoperationreverttodraft'] = 'Grąžinti į juodraštį';
$string['batchoperationsdescription'] = 'Su pasirinktais...';
$string['batchoperationsetmarkingallocation'] = 'Paskirti vertintoją';
$string['batchoperationsetmarkingworkflowstate'] = 'Keisti vertinimo būseną';
$string['batchoperationunlock'] = 'Atrakinti';
$string['batchsetallocatedmarker'] = 'Priskirti vertintoją {$a} pasirinktam(-iems) naudotojui(-ams)';
$string['batchsetmarkingworkflowstateforusers'] = 'Nustatyti {$a} pasirinkto (-ų) naudotojo (-ų) vertinimo eigos būseną.';
$string['beginassignment'] = 'Pradėti užduotį';
$string['blindmarking'] = 'Anonimiški pateikimai';
$string['blindmarking_help'] = 'Anonimiški pateikimai slepia besimokančiųjų tapatybę nuo vertintojų. Anonimiškų pateikimų nustatymas bus užrakintas, kai bus pateiktas bent vienas su šia užduotimi susijęs pateikimas arba įvertinimas.';
$string['blindmarkingenabledwarning'] = 'Šioje veikloje leidžiama pateikti darbą anonimiškai.';
$string['cachedef_overrides'] = 'Naudotojo ir grupės keitimo informacija';
$string['calendardue'] = '{$a} turi būti pateikta';
$string['calendarextension'] = '{$a} yra terminas (pratęsimas)';
$string['calendargradingdue'] = '{$a} turi būti įvertinta';
$string['caneditsubmission'] = 'Galite redaguoti savo pateikimą ir pateikti jį pasibaigus terminui, tačiau jis bus pažymėtas kaip pavėluotas.';
$string['changefilters'] = 'Keisti filtrą';
$string['changeuser'] = 'Keisti naudotoją';
$string['choosegradingaction'] = 'Vertinimo  veiksmas';
$string['choosemarker'] = 'Pasirinkti...';
$string['chooseoperation'] = 'Pasirinkite operaciją';
$string['clickexpandreviewpanel'] = 'Spragtelkite peržiūros skydelio išskleidimui';
$string['collapsegradepanel'] = 'Sutraukti vertinimo skydelį';
$string['collapsereviewpanel'] = 'Sutraukti peržiūros skydelį';
$string['comment'] = 'Komentuoti';
$string['completiondetail:submit'] = 'Pateikti';
$string['completionsubmit'] = 'Atlikti pateikimą';
$string['configshowrecentsubmissions'] = 'Kiekvienas gali matyti pranešimus apie įkeltus darbus paskutinės veiklos ataskaitose.';
$string['confirmbatchgradingoperation'] = 'Ar Jūs tikrai norite {$a->count} besimokančiųjų {$a->operation}?';
$string['confirmstart'] = 'Turite {$a} atlikti šią užduotį. Kai pradėsite, laikmatis pradės skaičiuoti atgal ir jo nebus galima pristabdyti.';
$string['confirmsubmission'] = 'Ar Jūs tikrai norite pateikti darbą vertinimui? Jūs nebegalėsite atlikti jokių pakeitimų.';
$string['confirmsubmissionheading'] = 'Patvirtinti pateikimą';
$string['conversionexception'] = 'Nepavyko konvertuoti užduotį. Buvo ši išimtis: {$a}';
$string['couldnotconvertgrade'] = 'Nepavyko konvertuoti {$a} naudotojo užduoties įvertinimo.';
$string['couldnotconvertsubmission'] = 'Nepavyko konvertuoti {$a} naudotojo pateiktos užduoties.';
$string['couldnotcreatecoursemodule'] = 'Nepavyko sukurti kurso modulio.';
$string['couldnotcreatenewassignmentinstance'] = 'Nepavyko sukurti naujos užduoties.';
$string['couldnotfindassignmenttoupgrade'] = 'Nepavyko surasti senos užduoties, kurią būtų galima plėtoti.';
$string['crontask'] = 'Foninis apdorojimas užduoties moduliui';
$string['currentassigngrade'] = 'Dabartinis užduoties įvertinimas';
$string['currentattempt'] = 'Čia yra {$a} bandymas.';
$string['currentattemptof'] = 'Čia yra bandymas {$a->attemptnumber} ( {$a->maxattempts} bandymai leidžiami ).';
$string['currentgrade'] = 'Dabartinis įvertinimas įvertinimų knygelėje';
$string['cutoffdate'] = 'Paskutinė diena pristatymui';
$string['cutoffdate_help'] = 'Jei ši data nustatyta, darbai po jos nebus priimami be pratęsimo. Jei nenustatyta, darbai bus priimami visada.';
$string['cutoffdatecolon'] = 'Paskutinė diena pristatymui: {$a}';
$string['cutoffdatefromdatevalidation'] = 'Galutinė data negali būti ankstesnė nei leidimo pateikti pateikimą data.';
$string['cutoffdatevalidation'] = 'Galutinė data negali būti ankstesnė nei terminas.';
$string['defaultgradescale'] = 'Vertinimo skalė';
$string['defaultgradescale_help'] = 'Numatytoji naujų užduočių vertinimo skalė. Galimos tik standartinės skalės.';
$string['defaultgradetype'] = 'Įvertinimo tipas';
$string['defaultgradetype_help'] = 'Numatytasis įvertinimo tipas naujoms užduotims.';
$string['defaultlayout'] = 'Atstatyti numatytąją išdėstymą';
$string['defaultsettings'] = 'Numatytos užduoties nuostatos';
$string['defaultsettings_help'] = 'Šios nuostatos nustato numatytąsias reikšmes visoms naujoms užduotims.';
$string['defaultteam'] = 'Numatyta grupė';
$string['deleteallsubmissions'] = 'Visi pateikimai';
$string['description'] = 'Aprašymas';
$string['disabled'] = 'Išjungta';
$string['downloadall'] = 'Atsisiųsti visus darbus';
$string['downloadasfolders'] = 'Atsisiųsti pateikimus aplankuose';
$string['downloadasfolders_help'] = 'Užduotyse pateiktus dokumentus galima atsisiųsti aplankuose. Tada kiekvienas pateikimas įdedamas į atskirą aplanką, kuriame išsaugoma visų poaplankių aplanko struktūra, o failai nepervardijami.';
$string['downloadselectedsubmissions'] = 'Atsisiųsti pasirinktus pateikimus';
$string['duedate'] = 'Data pristatymui';
$string['duedate_help'] = 'Tai yra tada, kada turi būti atlikta užduotis. Užduotys ir toliau bus leidžiamos po šios datos, tačiau visos po šios datos pateiktos užduotys bus pažymėtos kaip pavėluotos. Nustatykite pateikimo pabaigos datą, kad po šios datos būtų išvengta pateikimų.';
$string['duedateaftersubmissionvalidation'] = 'Pateikimo data turi būti vėlesnė už datą, nuo kurios leidžiama pateikti.';
$string['duedatecolon'] = 'Terminas: {$a}';
$string['duedatereached'] = 'Vėliausia įkėlimo data šiai užduočiai jau praėjo.';
$string['duedatevalidation'] = 'Terminas negali būti ankstesnis nei „Leisti pateikti nuo“ datos.';
$string['duplicateoverride'] = 'Dubliuoti keitimą';
$string['editaction'] = 'Veiksmai...';
$string['editattemptfeedback'] = 'Keisti įvertinimą ir atsiliepimą bandymui {$a}.';
$string['editingpreviousfeedbackwarning'] = 'Redaguojate ankstesnio bandymo atsiliepimą. Tai yra {$a->attemptnumber} bandymas iš {$a->totalattempts}.';
$string['editingstatus'] = 'Darbo keitimo galimybė';
$string['editonline'] = 'Redaguoti prisijungus';
$string['editoverride'] = 'Redaguoti keitimą';
$string['editsubmission'] = 'Keisti įkeltus darbus';
$string['editsubmission_help'] = 'Dar galite atlikti savo pateikimo pakeitimus.';
$string['editsubmissionother'] = 'Redaguoti pateikimą {$a}';
$string['enabled'] = 'Įgalinta';
$string['enabletimelimit'] = 'Įgalinti užduotis pagal laiką';
$string['enabletimelimit_help'] = 'Jei įjungta, užduoties nustatymų puslapyje galite nustatyti laiko limitą.';
$string['errornosubmissions'] = 'Nėra įkeltų darbų, kuriuos galima parsisiųsti';
$string['errorquickgradingvsadvancedgrading'] = 'Įvertinimai nebuvo išsaugoti, nes ši užduotis šiuo metu naudoja platesnį vertinimą';
$string['errorrecordmodified'] = 'Įvertinimai nebuvo išsaugoti, nes kažkas pakeitė vieną ar kelis įrašus greičiau, nei Jūs spėjote įkelti puslapį.';
$string['eventallsubmissionsdownloaded'] = 'Visi pateikimai yra atsisiųsti.';
$string['eventassessablesubmitted'] = 'Darbas buvo pateiktas.';
$string['eventbatchsetmarkerallocationviewed'] = 'Peržiūrėtas partijos rinkinio vertinimo paskirstymas';
$string['eventbatchsetworkflowstateviewed'] = 'Peržiūrėta paketinio rinkinio darbo eigos būsena.';
$string['eventextensiongranted'] = 'Pratęsimas suteiktas.';
$string['eventfeedbackupdated'] = 'Atsiliepimai atnaujinti';
$string['eventfeedbackviewed'] = 'Atsiliepimai peržiūrėti';
$string['eventgradingformviewed'] = 'Vertinimo forma peržiūrėta';
$string['eventgradingtableviewed'] = 'Vertinimo lentelė peržiūrėta';
$string['eventidentitiesrevealed'] = 'Tapatybės buvo atskleistos.';
$string['eventmarkerupdated'] = 'Paskirtas vertintojas buvo atnaujintas.';
$string['eventoverridecreated'] = 'Užduoties keitimas sukurtas';
$string['eventoverridedeleted'] = 'Užduoties keitimas ištrintas';
$string['eventoverrideupdated'] = 'Užduoties keitimas atnaujintas';
$string['eventremovesubmissionformviewed'] = 'Pašalinti pateikimo patvritinimo peržiūrą.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Peržiūrėtas tapatybės patvirtinimo puslapis.';
$string['eventstatementaccepted'] = 'Naudotojas patvirtino pateiktą pateikimą.';
$string['eventsubmissionconfirmationformviewed'] = 'Pateikimo patvirtinimo forma peržiūrėta.';
$string['eventsubmissioncreated'] = 'Pateikimas sukurtas.';
$string['eventsubmissionduplicated'] = 'Naudotojas dubliavo savo pateikimą.';
$string['eventsubmissionformviewed'] = 'Pateikimo forma peržiūrėta.';
$string['eventsubmissiongraded'] = 'Pateikimas buvo įvertintas.';
$string['eventsubmissionlocked'] = 'Pateikimas buvo užrakintas naudotojui.';
$string['eventsubmissionremoved'] = 'Pateikimas pašalintas.';
$string['eventsubmissionstatusupdated'] = 'Pateikimo statusas buvo atnaujintas.';
$string['eventsubmissionstatusviewed'] = 'Pateikimo statusas buvo peržiūrėtas.';
$string['eventsubmissionunlocked'] = 'Pateikimas buvo atrakintas naudotojui.';
$string['eventsubmissionupdated'] = 'Pateikimas atnaujintas.';
$string['eventsubmissionviewed'] = 'Pateikimas peržiūrėtas.';
$string['eventworkflowstateupdated'] = 'Darbo eigos būsena buvo atnaujinta.';
$string['expandreviewpanel'] = 'Išskleisti peržiūros skydelį';
$string['extensionduedate'] = 'Pratęsta iki';
$string['extensionduedatecurrent'] = 'Dabartinis pratęsimo terminas';
$string['extensionduedatenone'] = 'Nėra';
$string['extensionduedaterange'] = 'Skirtingos tarp {$a->earliest} ir {$a->latest}';
$string['extensionduedatewithout'] = 'Naudotojai, neturintys galiojančio pratęsimo: {$a}';
$string['extensionnotafterduedate'] = 'Pratęsimo data turi būti vėlesnė nei "Data pristatymui"';
$string['extensionnotafterfromdate'] = 'Pratęsimo data turi būti vėlesnė nei "Leisti įkelti darbus nuo" data';
$string['feedback'] = 'Grįžtamasis ryšys';
$string['feedbackavailableanonhtml'] = 'Turite naują atsiliepimą savo pateiktoje užduotyje  „<i>{$a->assignment}</i>“<br /><br />
Jį galite matyti pridėtą prie pateiktos užduoties <a href="{$a->url}"></a>.';
$string['feedbackavailableanonsmall'] = 'Naujas atsiliepimas užduočiai {$a->assignment}';
$string['feedbackavailableanontext'] = 'Turite naują atsiliepimą savo pateiktoje užduotyje  „{$a->assignment}“

Jį galite matyti pridėtą prie pateiktos užduoties:

{$a->url}';
$string['feedbackavailablehtml'] = '{$a->username} parašė komentarą apie Jūsų įkeltą darbą, esantį \'<i>{$a->assignment}</i>\' užduotyje<br /><br />
Jūs galite jį peržiūrėti pridėtą prie Jūsų <a href="{$a->url}">įkelto darbo</a>.';
$string['feedbackavailablesmall'] = '{$a->username} pakomentavo Jūsų įkeltą darbą {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username} parašė komentarą apie Jūsų įkeltą darbą, esantį \'{$a->assignment}\' užduotyje.

Jūs galite jį peržiūrėti pridėtą prie Jūsų įkelto darbo:

 {$a->url}';
$string['feedbackplugin'] = 'Grįžtamojo ryšio papildinys';
$string['feedbackpluginforgradebook'] = 'Grįžtamojo ryšio papildinys, pateikiantis komentarus į įvertinimų knygelę';
$string['feedbackpluginforgradebook_help'] = 'Tiktai vienas užduoties atsiliepimo papildinys gali pateikti grįžtamąjį ryšį į įvertinimų knygelę.';
$string['feedbackplugins'] = 'Grįžtamojo ryšio papildiniai';
$string['feedbacksettings'] = 'Atsako nuostatos';
$string['feedbacktypes'] = 'Grįžtamojo ryšio tipai';
$string['filesubmissions'] = 'Įkeltų darbų failai';
$string['filter'] = 'Filtras';
$string['filterall'] = 'Visi';
$string['filterdraft'] = 'Juodraštis';
$string['filtergrantedextension'] = 'Suteiktas pratęsimas';
$string['filternone'] = 'Nėra filtro';
$string['filternotsubmitted'] = 'Nepateikta';
$string['filterrequiregrading'] = 'Reikia įvertinti';
$string['filtersubmitted'] = 'Pateikta';
$string['fixrescalednullgrades'] = 'Šioje užduotyje yra keletas klaidingų įvertinimų. Galite <a href="{$a->link}">automatiškai taisyti šiuos įvertinimus</a>. Tai gali turėti įtakos kurso įvertinimų sumoms.';
$string['fixrescalednullgradesconfirm'] = 'Ar tikrai norite pataisyti klaidingus įvertinimus? Visi paveikti įvertinimai bus pašalinti. Tai gali turėti įtakos kurso sumoms.';
$string['fixrescalednullgradesdone'] = 'Įvertinimai pataisyti.';
$string['gradeabovemaximum'] = 'Įvertinimas turi būti mažesnis arba lygus {$a}';
$string['gradeactions'] = 'Vertinimo veiksmai';
$string['gradebelowzero'] = 'Įvertinimas turi būti didesnis arba lygus nuliui';
$string['gradebreakdown'] = 'Įvertinimo paskirstymas';
$string['gradecanbechanged'] = 'Įvertinimas gali būti pakeistas';
$string['gradechangessaveddetail'] = 'Įvertinimo ir atsiliepimo keitimai išsaugoti';
$string['graded'] = 'Įvertinta';
$string['gradedby'] = 'Įvertino';
$string['gradedfollowupsubmit'] = 'Įvertinta - pakartotinai pateikta';
$string['gradedon'] = 'Įvertinta';
$string['gradeitem:submissions'] = 'Pateikimai';
$string['gradelocked'] = 'Šis įvertinimas yra užrakintas arba pakeistas įvertinimų knygelėje.';
$string['gradeoutof'] = 'Įvertinimas (iš galimų {$a})';
$string['gradeoutofhelp'] = 'Įvertinimas';
$string['gradeoutofhelp_help'] = 'Įveskite besimokančiojo darbo įvertinimą čia. Jūs galite rašyti ir dešimtainę įvertinimo dalį.';
$string['gradersubmissionupdatedhtml'] = 'Užduotyje <i>{$a->assignment},  {$a->timeupdated}</i>laiku, {$a->username} atnaujino savo įkeltą darbą.<br /><br />
Ją galite<a href="{$a->url}">rasti svetainėje</a>.';
$string['gradersubmissionupdatedsmall'] = 'Užduotyje {$a->assignment} {$a->username} atnaujino savo įkeltą darbą.';
$string['gradersubmissionupdatedtext'] = 'Užduotyje {$a->assignment},  {$a->timeupdated}laiku, {$a->username} atnaujino savo įkeltą darbą.

Ją galite rasti svetainėje:

{$a->url}';
$string['gradestudent'] = 'Įvertinti besimokantįjį: (id={$a->id}, fullname={$a->fullname}).';
$string['gradeuser'] = 'Vertinti {$a}';
$string['grading'] = 'Vertinama';
$string['gradingchangessaved'] = 'Įvertinimo pakeitimai išsaugoti';
$string['gradingduedate'] = 'Priminti man įvertinti iki';
$string['gradingduedate_help'] = 'Tikėtina užbaigimo data, iki kurios turi būti pažymėtas užbaigimas. Pagal šią datą atitinkamai rodomi pranešimai dėstytojų „Mano pagrindinis" puslapyje.';
$string['gradingdueduedatevalidation'] = '„Priminti man įvertinti iki“ data negali būti ankstesnė nei pristatymo data.';
$string['gradingduefromdatevalidation'] = '„Priminti man įvertinti iki“ data negali būti ankstesnė nei „Leisti įkelti darbus nuo“ data.';
$string['gradingmethodpreview'] = 'Vertinimo kriterijai';
$string['gradingoptions'] = 'Parinktys';
$string['gradingstatus'] = 'Vertinimo būsena';
$string['gradingstudent'] = 'Besimokančiojo vertinimas';
$string['gradingsummary'] = 'Vertinimo santrauka';
$string['grantextension'] = 'Pratęsti įkėlimą';
$string['grantextensionforusers'] = 'Pratęsti įkėlimą {$a} besimokančiųjų';
$string['groupoverrides'] = 'Grupės keitimai';
$string['groupoverridesdeleted'] = 'Grupės keitimai ištrinti';
$string['groupsnone'] = 'Nėra grupių, kurias galite pasiekti.';
$string['groupsubmissionsettings'] = 'Grupinio pateikimo nustatymai';
$string['hiddenuser'] = 'Dalyvis';
$string['hidegrader'] = 'Slėpti vertintojo tapatybę nuo besimokančiųjų';
$string['hidegrader_help'] = 'Jei įjungta, jokio naudotojo, kuris įvertina pateiktą užduotį, tapatybė nerodoma, todėl besimokantieji negali matyti, kas įvertino jų darbą.

Atminkite, kad šis nustatymas neturi įtakos komentarų laukeliui vertinimo puslapyje.';
$string['hideshow'] = 'Slėpti/Rodyti';
$string['inactiveoverridehelp'] = '* Šis nepaisymas neaktyvus, nes naudotojo prieiga prie veiklos yra apribota. Taip gali nutikti dėl grupės ar vaidmenų priskyrimo, kitų prieigos apribojimų arba paslėptos veiklos.';
$string['includesuspendedparticipants'] = 'Įtraukti suspenduotus dalyvius';
$string['indicator:cognitivedepth'] = 'Kognityvinė užduotis';
$string['indicator:cognitivedepth_help'] = 'Šis rodiklis pagrįstas pažinimo gyliu, kurį besimokantysis pasiekia atlikdamas užduotį.';
$string['indicator:cognitivedepthdef'] = 'Kognityvinė užduotis';
$string['indicator:cognitivedepthdef_help'] = 'Dalyvis per šį analizės intervalą pasiekė šį kognityvinio įsitraukimo procentą, kurį siūlo užduoties veikla (lygiai = neperžiūrėta, peržiūrėta, pateikta, peržiūrėtas atsiliepimas, pakomentuotas atsiliepimas, pateikta iš naujo po peržiūros)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Socialinė užduotis';
$string['indicator:socialbreadth_help'] = 'Šis rodiklis pagrįstas socialiniu platumu, kurį besimokantysis pasiekia atlikdamas užduotį.';
$string['indicator:socialbreadthdef'] = 'Socialinė užduotis';
$string['indicator:socialbreadthdef_help'] = 'Dalyvis per šį analizės intervalą pasiekė šį socialinio įsitraukimo procentą, kurį siūlo Užduoties veikla (lygiai = nedalyvauta, dalyvis vienas, dalyvis su kitais)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['instructionfiles'] = 'Nurodymų failai';
$string['introattachments'] = 'Papildomi failai';
$string['introattachments_help'] = 'Galima pridėti papildomų failų, skirtų naudoti atliekant užduotį, pvz., atsakymų šablonus.';
$string['invalidfloatforgrade'] = 'Nepavyko suprasti pateikto įvertinimo: {$a}';
$string['invalidgradeforscale'] = 'Pateiktas įvertinimas negalioja pasirinktoje skalėje';
$string['invalidoverrideid'] = 'Klaidingas keitimo id';
$string['lastmodifiedgrade'] = 'Paskutinį kartą keista <p>
(įvertinimas)</p>';
$string['lastmodifiedsubmission'] = 'Paskutinį kartą keista <p>(pateikimas)</p>';
$string['latesubmissions'] = 'Vėluojantys įkelti darbus';
$string['latesubmissionsaccepted'] = 'Leidžiama iki {$a}';
$string['loading'] = 'Įkeliama...';
$string['locksubmissionforstudent'] = 'Nebeleisti įkelti darbų šiam besimokančiajam: (id={$a->id}, fullname={$a->fullname}).';
$string['locksubmissions'] = 'Užrakinti pateikimus';
$string['manageassignfeedbackplugins'] = 'Valdyti užduoties grįžtamojo ryšio papildinius';
$string['manageassignsubmissionplugins'] = 'Valdyti užduoties įkeliamų darbų papildinius';
$string['marker'] = 'Vertintojas';
$string['markerfilter'] = 'Filtruoti pagal vertintoją';
$string['markerfilternomarker'] = 'Nėra vertintojo';
$string['markingallocation'] = 'Naudoti įvertinimo paskirstymą';
$string['markingallocation_help'] = 'Jei įjungta kartu su vertinimo eiga, vertintojai gali būti priskirti konkretiems besimokantiesiems.';
$string['markinganonymous'] = 'Leisti dalinai paskelbti įvertinimus vertinant anonimiškai';
$string['markinganonymous_help'] = 'Jei ši funkcija įjungta kartu su anoniminiu pateikimu ir vertinimo darbo eiga, ji leidžia iš dalies paskelbti įvertinimus, o vertinimą atlikti anonimiškai.';
$string['markingstate'] = 'Vertinimo būsena';
$string['markingworkflow'] = 'Naudoti vertinimo eigą';
$string['markingworkflow_help'] = 'Jei įjungta, įvertinimai bus skiriami per kelis darbo eigos etapus, kol bus paskelbti besimokantiesiems. Tai leidžia atlikti kelis vertinimo etapus ir tuo pačiu metu visiems besimokantiesiems skirti įvertinimus.';
$string['markingworkflowstate'] = 'Vertinimo būsena';
$string['markingworkflowstate_help'] = 'Galimi eigos etapai gali būti (priklausomai nuo jūsų teisių):

* Neįvertinta - vertinimas dar neprasidėjo
* Vertinama - vertinimas prasidėjo, tačiau dar nėra baigtas
* Vertinimas baigtas - vertinimas baigtas, tačiau gali tekti patikrinti / pataisyti
* Peržiūrima - dabar atsakingas dėstytojas tikrina vertinimo kokybę
* Paruošta pateikimui – atsakingas dėstytojas yra patenkintas vertinimu, bet laukia, kol leis besimokantiesiems prieigą vertinimų
* Pateikta – besimokantysis gali matyti įvertinimus/atsiliepimus';
$string['markingworkflowstateinmarking'] = 'Vertinama';
$string['markingworkflowstateinreview'] = 'Peržiūrima';
$string['markingworkflowstatenotmarked'] = 'Neįvertinta';
$string['markingworkflowstatereadyforrelease'] = 'Paruošta pateikimui';
$string['markingworkflowstatereadyforreview'] = 'Vertinimas baigtas';
$string['markingworkflowstatereleased'] = 'Pateikta';
$string['maxattempts'] = 'Leidžiami bandymai';
$string['maxattempts_help'] = 'Didžiausias pateikimų bandymų skaičius, kurį gali atlikti besimokantysis. Pasiekus šį skaičių, pateikimo iš naujo atidaryti nebegalima.';
$string['maxgrade'] = 'Didžiausias įvertinimas';
$string['maxperpage'] = 'Didžiausias užduočių skaičius puslapyje';
$string['maxperpage_help'] = 'Didžiausias užduočių skaičius, kurį vertintojas gali rodyti užduočių vertinimo puslapyje. Šis nustatymas naudingas norint išvengti ilgo puslapio krovimo laiko, kursuose, kuriuose daug dalyvių.';
$string['messageprovider:assign_due_digest'] = 'Pranešimas apie užduotis, kurios turi būti atliktos per 7 dienas';
$string['messageprovider:assign_due_soon'] = '„Užduoties atlikimo terminas netrukus“ pranešimas';
$string['messageprovider:assign_notification'] = 'Užduoties pranešimai';
$string['messageprovider:assign_overdue'] = 'Pranešimas apie vėluojamą atlikti užduotį';
$string['modulename'] = 'Užduotis';
$string['modulename_help'] = 'Užduočių veiklos modulis leidžia dėstytojui pateikti užduotis, rinkti darbus ir teikti įvertinimus bei atsiliepimus.

Besimokantieji gali pateikti bet kokį skaitmeninį turinį (failus), pvz., tekstinius dokumentus, skaičiuokles, vaizdus arba garso ir vaizdo klipus. Atskirai, arba papildomai, atliekant užduotį, besimokantieji gali įvesti tekstą tiesiai į teksto rengyklę. Užduotį taip pat galima naudoti norint priminti mokiniams apie „realias“ užduotis, kurias jie turi atlikti neprisijungę, pvz., meno kūrinį, todėl nereikia jokio skaitmeninio turinio. Besimokantieji darbus gali pateikti individualiai arba kaip grupės nariai.

Peržiūrėdami užduotis, dėstytojai gali palikti atsiliepimų komentarus ir įkelti failus, pvz., patikrintus besimokančiųjų pateiktus dokumentus, dokumentus su komentarais arba žodinius garso atsiliepimus. Užduotys gali būti vertinamos naudojant balus arba pasirinktinę skalę, arba išplėstinį vertinimo metodą, pvz., rubriką. Galutiniai įvertinimai įrašomi į įvertinimų knygelę.';
$string['modulename_link'] = 'mod/assignment/view';
$string['modulenameplural'] = 'Užduotys';
$string['moreusers'] = '{$a} daugiau...';
$string['multipleteams'] = 'Daugiau nei vienos grupės narys';
$string['multipleteams_desc'] = 'Užduotį reikia pateikti grupėmis. Esate daugiau nei vienos grupės narys. Kad galėtumėte pateikti, turite būti tik vienos grupės narys. Norėdami pakeisti grupės narystę, susisiekite su dėstytoju.';
$string['multipleteamsgrader'] = 'Daugiau nei vienos grupės narys, todėl negali pateikti pateikimų.';
$string['newsubmissions'] = 'Pateiktos užduotys';
$string['nextuser'] = 'Kitas naudotojas';
$string['noattempt'] = 'Nebandyta';
$string['noclose'] = 'Nėra uždarymo datos';
$string['nofiles'] = 'Nėra failų.';
$string['nofilters'] = 'Nėra filtrų';
$string['nograde'] = 'Nėra įvertinimų.';
$string['nogroupoverrides'] = 'Šiuo metu grupės keitimų nėra.';
$string['nomoresubmissionsaccepted'] = 'Tik besimokantieji, kuriems pratęstas įkėlimas vis dar gali įkelti savo darbus';
$string['none'] = 'Nėra';
$string['noonlinesubmissions'] = 'Ši užduotis nereikalauja nieko įkelti į svetainę';
$string['noopen'] = 'Nėra atidarymo datos';
$string['nooverridedata'] = 'Turite pakeisti bent vieną iš užduoties nustatymų.';
$string['nosavebutnext'] = 'Toliau';
$string['nosubmission'] = 'Nebuvo pateikta darbų šiai užduočiai';
$string['nosubmissionyet'] = 'Jokių pateikimų dar nepateikta';
$string['noteam'] = 'Nepriklausote reikiamai grupei';
$string['noteam_desc'] = 'Šią užduotį reikia pateikti grupėmis. Jūs nepriklausote reikiamai grupei, todėl negalite sukurti pateikimo. Susisiekite su savo dėstytoju, kad būtumėte įtraukti į grupę.';
$string['noteamgrader'] = 'Nepriklausote reikiamai grupei, todėl negalite pateikti darbų.';
$string['notgraded'] = 'Neįvertinta';
$string['notgradedyet'] = 'Dar neįvertinta';
$string['notifications'] = 'Pranešimai';
$string['notifystudents'] = 'Pranešti besimokantiesiems';
$string['nouseroverrides'] = 'Šiuo metu naudotojų keitimų nėra.';
$string['nousers'] = 'Nėra naudotojų';
$string['nousersselected'] = 'Nepasirinkti naudotojai';
$string['numberofdraftsubmissions'] = 'Juodraščiai';
$string['numberofparticipants'] = 'Dalyviai';
$string['numberofsubmissionsneedgrading'] = 'Reikia įvertinti';
$string['numberofsubmissionsneedgradinglabel'] = 'Reikia įvertinti: {$a}';
$string['numberofsubmittedassignments'] = 'Pateikta';
$string['numberofteams'] = 'Grupės';
$string['offline'] = 'Nereikia įkelti darbų į svetainę';
$string['open'] = 'Atidaryta';
$string['opensubmissionexists'] = 'Atviros užduoties pateikimas jau yra.';
$string['outlinegrade'] = 'Įvertinta: {$a}';
$string['outof'] = '{$a->current} iš {$a->total}';
$string['overdue'] = 'Vėluojama įkelti darbą: {$a}';
$string['override'] = 'Keisti';
$string['overridedeletegroupsure'] = 'Ar tikrai norite naikinti grupės {$a} keitimą?';
$string['overridedeleteusersure'] = 'Ar tikrai norite naikinti naudotojo {$a} keitimą?';
$string['overridegroup'] = 'Keisti grupę';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overrides'] = 'Keitimai';
$string['overrideuser'] = 'Keisti naudotoją';
$string['overrideusereventname'] = '{$a->assign} - keitimas';
$string['page-mod-assign-view'] = 'Užduoties modulio pagrindinis ir pateikimo puslapis';
$string['page-mod-assign-x'] = 'Bet kurios užduoties modulio puslapis';
$string['paramtimeremaining'] = 'Liko {$a}';
$string['participant'] = 'Dalyvis';
$string['pluginadministration'] = 'Užduoties administravimas';
$string['pluginname'] = 'Užduotis';
$string['preventsubmissionnotingroup'] = 'Reikalinga grupė, kad pateikti darbus';
$string['preventsubmissionnotingroup_help'] = 'Jei įjungta, naudotojai, kurie nėra grupės nariai negalės pateikti darbų.';
$string['preventsubmissions'] = 'Neleisti naudotojui įkelti darbus šioje užduotyje.';
$string['preventsubmissionsshort'] = 'Neleisti įkelto darbo pakeitimų';
$string['previous'] = 'Ankstesnis';
$string['previoususer'] = 'Ankstesnis naudotojas';
$string['privacy:attemptpath'] = 'bandymas {$a}';
$string['privacy:blindmarkingidentifier'] = 'Identifikatorius, naudojamas anoniminiams pateikimams';
$string['privacy:gradepath'] = 'įvertinimas';
$string['privacy:metadata:assigndownloadasfolders'] = 'Naudotojo pasirinkimas, ar keli pateikti failai turi būti atsisiunčiami į aplankus';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Atsiliepimai apie užduotį.';
$string['privacy:metadata:assignfilter'] = 'Filtro parinktys, pvz., „Pateikta“, „Nepateikta“, „Reikalingas įvertinimas“ ir „Suteiktas pratęsimas“';
$string['privacy:metadata:assigngrades'] = 'Išsaugo naudotojo įvertinimus užduočiai';
$string['privacy:metadata:assignmarkerfilter'] = 'Filtruoti priskyrimo santrauką pagal priskirtą vertintoją.';
$string['privacy:metadata:assignmentid'] = 'Užduoties ID';
$string['privacy:metadata:assignmessageexplanation'] = 'Žinutės studentams siunčiamos per susirašinėjimo sistemą.';
$string['privacy:metadata:assignoverrides'] = 'Išsaugo užduoties keitimo informaciją';
$string['privacy:metadata:assignperpage'] = 'Užduočių skaičius rodomas viename puslapyje.';
$string['privacy:metadata:assignquickgrading'] = 'Pirmenybė, ar naudojamas greitasis įvertinimas, ar ne.';
$string['privacy:metadata:assignsubmissiondetail'] = 'Saugo naudotojo pateikimo informaciją';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Pateikimo duomenys užduočiai.';
$string['privacy:metadata:assignuserflags'] = 'Saugo naudotojo metaduomenis, pvz., pratęsimo datas';
$string['privacy:metadata:assignusermapping'] = 'Anoniminių pateikimų žemėlapis';
$string['privacy:metadata:assignworkflowfilter'] = 'Filtruoti pagal skirtingus darbo eigos etapus.';
$string['privacy:metadata:grade'] = 'Šios užduoties pateikimo skaitinis įvertinimas. Galima nustatyti pagal skales / išplėstines vertinimo formas ir pan., bet visada bus konvertuojamas atgal į slankiojo kablelio skaičių.';
$string['privacy:metadata:grader'] = 'Įvertinusio asmens naudotojo ID.';
$string['privacy:metadata:groupid'] = 'Grupės ID, kurios narys yra naudotojas.';
$string['privacy:metadata:latest'] = 'Labai supaprastina užklausas, norinčias sužinoti informaciją tik apie paskutinį bandymą.';
$string['privacy:metadata:mailed'] = 'Ar šiam naudotojui jau išsiųstas el. paštas?';
$string['privacy:metadata:timecreated'] = 'Laikas, kada sukurta';
$string['privacy:metadata:timestarted'] = 'Laikas prasidėjo';
$string['privacy:metadata:userid'] = 'Naudotojo ID';
$string['privacy:studentpath'] = 'studentsubmissions';
$string['privacy:submissionpath'] = 'pateikimas';
$string['quickgrading'] = 'Greitas vertinimas';
$string['quickgrading_help'] = 'Greitas vertinimas leidžia įrašyti vertinimus (ir rezultatus) tiesiai į įkėlimo formą. Greitas vertinimas yra nesuderinamas su platesniu vertinimu ir nerekomenduojamas naudojant keletą žymeklių.';
$string['quickgradingchangessaved'] = 'Įvertinimo pakeitimai buvo išsaugoti';
$string['quickgradingresult'] = 'Greitas vertinimas';
$string['recordid'] = 'Identifikatorius';
$string['relativedatessubmissiontimeleft'] = 'Skaičiuojama kiekvienam besimokančiajam';
$string['removeallgroupoverrides'] = 'Visi grupės keitimai';
$string['removealluseroverrides'] = 'Visi naudotojo keitimai';
$string['removesubmission'] = 'Pašalinti pateikimą';
$string['removesubmissionconfirm'] = 'Ar tikrai norite panaikinti savo pateikimą?';
$string['removesubmissionconfirmforstudent'] = 'Ar tikrai norite panaikinti besimokančiojo {$a} pateikimą?';
$string['removesubmissionconfirmforstudentwithtimelimit'] = 'Ar tikrai norite pašalinti {$a} pateiktą informaciją? Atminkite, kad tai neatstatys studento laiko limito. Galite skirti daugiau laiko pridėję laiko limito naudotojo keitimą.';
$string['removesubmissionconfirmwithtimelimit'] = 'Ar tikrai norite pašalinti pateiktą informaciją? Atkreipkite dėmesį, kad tai neatstatys jūsų laiko limito.';
$string['removesubmissionforstudent'] = 'Pašalinti pateikimą studentui: (id={$a->id}, fullname={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Atidaryti iš naujo, kol išlaikymo parinktis nesuderinama su anoniminiais pateikimais, nes įvertinimai neįtraukiami į įvertinimų knygelę, kol neatskleidžiama besimokančiojo tapatybė.';
$string['requireallteammemberssubmit'] = 'Reikalauti, kad darbą pateiktų visi grupės nariai';
$string['requireallteammemberssubmit_help'] = 'Šis nustatymas turi būti naudojamas kartu su „Reikalauti, kad besimokantieji paspaustų pateikimo mygtuką“, esančiu „Pateikimo nustatymuose“.

Jei ši funkcija įjungta, visi grupės nariai turi spustelėti mygtuką „Pateikti“, kad grupės pateiktas darbas būtų laikomas pateiktu. Jei išjungta, bet kuris grupės narys gali spausti pateikimo mygtuką.';
$string['requiresubmissionstatement'] = 'Reikalauti, kad besimokantieji priimtų darbo pateikimo taisykles';
$string['requiresubmissionstatement_help'] = 'Reikalauti, kad besimokantieji priimtų darbo pateikimo taisykles visiems įkeliamiems darbams šioje svetainėje naudojančioje "Moodle". Jei ši nuostata neįgalinta, įkeliamo darbo taisyklės gali būti įjungtos arba išjungtos kiekvienoje atskiroje užduotyje.';
$string['revealidentities'] = 'Atskleisti besimokančiųjų tapatybes';
$string['revealidentitiesconfirm'] = 'Ar tikrai norite atskleisti šios užduoties besimokančiųjų tapatybes? Šios operacijos atšaukti negalima. Kai besimokančiųjų tapatybės bus atskleistos, įvertinimai bus įrašyti į įvertinimų knygelę.';
$string['reverttodefaults'] = 'Atkurti numatytąsias užduoties reikšmes';
$string['reverttodraft'] = 'Grąžinti pateikimą į juodraščio būseną';
$string['reverttodraftforgroup'] = 'Padaryti grupės {$a} pateikimą juodraščiu.';
$string['reverttodraftforstudent'] = 'Paversti besimokančiojo (id={$a->id}, fullname={$a->fullname}) darbą į juodraštį.';
$string['reverttodraftshort'] = 'Pateiktus darbus paversti juodraščiais';
$string['reviewed'] = 'Peržiūrėta';
$string['save'] = 'Įrašyti';
$string['saveallquickgradingchanges'] = 'Išsaugoti visus greitus vertinimus';
$string['saveandcontinue'] = 'Įrašyti ir tęsti';
$string['savechanges'] = 'Išsaugoti pakeitimus';
$string['savegradingresult'] = 'Įvertinimas';
$string['savenext'] = 'Išsaugoti ir parodyti kitą';
$string['saveoverrideandstay'] = 'Įrašyti ir įvesti kitą keitimą';
$string['savingchanges'] = 'Pakeitimai išsaugomi...';
$string['scale'] = 'Skalė';
$string['search:activity'] = 'Užduotis - veiklos informacija';
$string['selectedusers'] = 'Pažymėti naudotojai';
$string['selectlink'] = 'Pasirinkti...';
$string['selectuser'] = 'Pasirinkti {$a}';
$string['sendlatenotifications'] = 'Informuoti vertintojus apie pavėluotai įkeltus darbus';
$string['sendlatenotifications_help'] = 'Jei įgalinta, vertintojai (dažniausiai dėstytojai) gaus pranešimą, kuomet vėluojantis įkelti darbą besimokantysis jį įkels. Pranešimo metodai yra konfigūruojami.';
$string['sendnotificationduedatesoon'] = 'Pranešti naudotojui apie artėjantį užduoties atlikimo terminą';
$string['sendnotificationduedigest'] = 'Pranešti naudotojui apie užduotis, kurias reikia atlikti per 7 dienas';
$string['sendnotificationoverdue'] = 'Pranešti naudotojui apie vėluojančią užduotį';
$string['sendnotifications'] = 'Informuoti vertintojus apie įkeltus darbus';
$string['sendnotifications_help'] = 'Jei įgalinta, vertintojai (dažniausiai mokytojai) gaus pranešimą, kuomet besimokantysis jį įkels darbą: anksčiau, laiku ar  vėluodamas. Pranešimo metodai yra konfigūruojami.';
$string['sendstudentnotifications'] = 'Informuoti besimokantįjį';
$string['sendstudentnotifications_help'] = 'Pažymėkite šį laukelį, jei norite išsiųsti pranešimą apie atnaujintą įvertinimą arba atsiliepimą. Jei atliekant užduotį naudojama vertinimo eiga arba įvertinimai yra paslėpti vertintojo ataskaitoje, pranešimas nebus siunčiamas, kol įvertinimas nebus pateiktas.';
$string['sendstudentnotificationsdefault'] = 'Numatytasis nustatymas “Informuoti besimokantįjį"';
$string['sendstudentnotificationsdefault_help'] = 'Ar vertinant kiekvieną besimokantįjį pagal numatytuosius nustatymus turėtų būti pažymėta „Informuoti besimokantįjį“?';
$string['sendsubmissionreceipts'] = 'Nusiųsti įkelto darbo patvirtinimą besimokantiesiems';
$string['sendsubmissionreceipts_help'] = 'Ši parinktis įgalina įkelto darbo patvirtinimo siuntimą besimokantiesiems. Besimokantieji gaus pranešimą kiekvieną kartą, kai jie sėkmingai pateiks užduotį.';
$string['setmarkerallocationforlog'] = 'Nustatyti vertinimo paskirstymą : (id={$a->id}, fullname={$a->fullname}, marker={$a->marker}).';
$string['setmarkingallocation'] = 'Priskirti vertintoją';
$string['setmarkingworkflowstate'] = 'Nurodyti vertinimo būseną';
$string['setmarkingworkflowstateforlog'] = 'Nustatyti vertinimo darbo eigos būseną : (id={$a->id}, fullname={$a->fullname}, state={$a->state}).';
$string['settings'] = 'Užduoties nuostatos';
$string['showrecentsubmissions'] = 'Parodyti paskutinius darbus';
$string['status'] = 'Būsena';
$string['studentnotificationworkflowstateerror'] = 'Vertinimo eigos būsena turi būti „Pateikta besimokantiesiems“, kad apie tai būtų pranešta besimokantiesiems.';
$string['submission'] = 'Pateikimas';
$string['submissionactions'] = 'Pateikimo veiksmai';
$string['submissionattachments'] = 'Failus rodyti tik pateikimo metu';
$string['submissionattachments_help'] = 'Pažymėkite langelį, jei norite, kad failai būtų rodomi tik pateikimo puslapyje. Priešingu atveju failai bus rodomi ir užduoties, ir pateikimo puslapiuose.';
$string['submissioncopiedhtml'] = '<p>Padarėte ankstesnės užduoties pateikimo „<i>{$a->assignment}</i>“ kopiją.</p>
<p>Galite matyti <a href="{$a->url}">pateiktos užduoties</a> būseną.</p>';
$string['submissioncopiedsmall'] = 'Jūs nukopijavote ankstesnės veiklos {$a->assignment} pateikimą';
$string['submissioncopiedtext'] = 'Jūs nukopijavote ankstesnės veiklos "{$a->assignment}" pateikimą
Jūs galite peržiūrėti veiklos pateikimo būseną: {$a->url}';
$string['submissiondrafts'] = 'Reikalauti besimokančiųjų spustelėti pateikimo mygtuką';
$string['submissiondrafts_help'] = 'Jei įjungta, besimokantieji turės spustelėti pateikimo mygtuką, kad paskelbtų, kad jų pateikimas yra galutinis. Tai leidžia besimokantiesiems sistemoje išsaugoti pateikimo juodraštį. Jei šis nustatymas bus pakeistas iš „Ne“ į „Taip“, kai besimokantieji jau pateiks, tie pateikimai bus laikomi galutiniais.';
$string['submissioneditable'] = 'Besimokantysis gali keisti savo darbą';
$string['submissionempty'] = 'Nebuvo pateikta darbų';
$string['submissionlog'] = 'Besimokantysis: {$a->fullname}, Statusas: {$a->status}';
$string['submissionmodified'] = 'Turite esamų pateikimo duomenų. Išeikite iš šio puslapio ir bandykite dar kartą.';
$string['submissionmodifiedgroup'] = 'Pateikimą pakeitė kažkas kitas. Išeikite iš šio puslapio ir bandykite dar kartą.';
$string['submissionnotcopiedinvalidstatus'] = 'Pateikimas nebuvo nukopijuotas, nes buvo redaguotas nuo tada, kai buvo iš naujo atidarytas.';
$string['submissionnoteditable'] = 'Besimokantysis negali keisti šio įkelto darbo';
$string['submissionnotopen'] = 'Ši užduotis nėra atvira pateikimams';
$string['submissionnotready'] = 'Ši užduotis neparengta įkėlimui:';
$string['submissionplugins'] = 'Įkeliamo darbo papildiniai';
$string['submissionreceipthtml'] = '<p>Jūs pateikėte darbą „<i>{$a->assignment}</i>“ užduočiai</p>
<p>Galite peržiūrėti savo <a href="{$a->url}">darbo būseną</a>.</p>';
$string['submissionreceiptotherhtml'] = 'Jūs pateikėte darbą „<i>{$a->assignment}</i>“ užduočiai<br /><br /> Galite peržiūrėti savo <a href="{$a->url}">darbo būseną</a>.';
$string['submissionreceiptothersmall'] = 'Jūsų darbas užduočiai {$a->assignment} buvo pateiktas.';
$string['submissionreceiptothertext'] = 'Jūsų darbas užduočiai "{$a->assignment}" buvo pateiktas.
Jūs galite peržiūrėti savo darbo būseną: {$a->url}';
$string['submissionreceipts'] = 'Siųsti įkelto darbo patvirtinimą';
$string['submissionreceiptsmall'] = 'Jūs pateikėte darbą {$a->assignment} užduočiai';
$string['submissionreceipttext'] = 'Jūs pateikėte darbą \'{$a->assignment}\' užduočiai.

Galite peržiūrėti savo darbo būseną:

  {$a->url}';
$string['submissionsclosed'] = 'Darbų įkėlimai uždaryti';
$string['submissionsettings'] = 'Įkeliamo darbo nuostatos';
$string['submissionslocked'] = 'Užduotis nebeleidžia įkelti darbų';
$string['submissionslockedshort'] = 'įkelto darbo pakeitimai negalimi';
$string['submissionstatement'] = 'Darbo pateikimo taisyklės';
$string['submissionstatement_help'] = 'Pareiškimas, kurį kiekvienas studentas turi priimti norėdamas pateikti savo darbą.';
$string['submissionstatementacceptedlog'] = 'Darbo pateikimo taisykles priėmė {$a}';
$string['submissionstatementdefault'] = 'Šis įkeltas pateikimas yra mano paties darbas, išskyrus vietas, kuriose aš nurodžiau citatų autorius.';
$string['submissionstatementrequired'] = 'Prieš pateikdami užduotį turite sutikti su šiuo pareiškimu.';
$string['submissionstatementteamsubmission'] = 'Grupės pateikimo pareiškimas';
$string['submissionstatementteamsubmission_help'] = 'Pareiškimas, kurį turi priimti kiekvienas besimokantysis, norėdamas pateikti savo grupės darbą.';
$string['submissionstatementteamsubmissionallsubmit'] = 'Grupės pateikimo pareiškimas, kuriame pateikia visi grupės nariai';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Pareiškimas, kurį turi priimti kiekvienas besimokantysis, norėdamas pateikti savo darbą kaip grupės narys.';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'Šis įkeltas pateikimas yra mano paties darbas kaip grupės nario, išskyrus vietas, kuriose aš nurodžiau citatų autorius.';
$string['submissionstatementteamsubmissiondefault'] = 'Šis pateikimas yra mano grupės darbas, išskyrus vietas, kuriose mes nurodėme citatų autorius.';
$string['submissionstatus'] = 'Įkelto darbo būsena';
$string['submissionstatus_'] = 'Nėra darbų';
$string['submissionstatus_draft'] = 'Juodraštis (nepateiktas)';
$string['submissionstatus_marked'] = 'Įvertinta';
$string['submissionstatus_new'] = 'Nėra pateikimo';
$string['submissionstatus_reopened'] = 'Vėl atidarytas';
$string['submissionstatus_submitted'] = 'Pateikta vertinimui';
$string['submissionstatusheading'] = 'Vertinimo būsena';
$string['submissionsummary'] = '{$a->status}. Paskutinis keitimas {$a->timemodified}';
$string['submissionteam'] = 'Grupė';
$string['submissiontypes'] = 'Pateikimo tipai';
$string['submitaction'] = 'Pateikta';
$string['submitassignment'] = 'Pateikti darbą';
$string['submitassignment_help'] = 'Kai darbas bus pateiktas, Jūs negalėsite padaryti jokių pakeitimų.';
$string['submitforgrading'] = 'Pateikti vertinimui';
$string['submitted'] = 'Pateikta';
$string['submittedearly'] = 'Užduotis buvo įkelta {$a} anksčiau';
$string['submittedlate'] = 'Užduotis buvo įkelta vėluojant {$a}';
$string['submittedlateshort'] = '{$a} vėluojama';
$string['submittedovertime'] = 'Užduotis buvo pateikta {$a} kartų, viršijant nustatytą laiką';
$string['submittedundertime'] = 'Užduotis buvo pateikta {$a} iki nustatyto termino';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = 'Grįžtamojo ryšio papildinys';
$string['subplugintype_assignfeedback_plural'] = 'Grįžtamojo ryšio papildiniai';
$string['subplugintype_assignsubmission'] = 'Pateikimo papildinys';
$string['subplugintype_assignsubmission_plural'] = 'Pateikimo papildiniai';
$string['teamname'] = 'Grupė: {$a}';
$string['teamsubmission'] = 'Besimokantieji kelia darbus grupėse';
$string['teamsubmission_help'] = 'Jei įjungta, besimokantieji bus suskirstyti į grupes pagal numatytąjį grupių rinkinį arba tinkintą grupavimą. Grupės pateikimas bus bendrinamas tarp grupės narių ir visi grupės nariai matys vienas kito pateikimo pakeitimus.';
$string['teamsubmissiongroupingid'] = 'Grupavimas besimokančiųjų grupėms';
$string['teamsubmissiongroupingid_help'] = 'Tai yra grupavimas, kurį užduotys naudos ieškant besimokančiųjų grupių rinkinių. Jei nenustatyta, bus naudojamas numatytasis grupių rinkinys.';
$string['textinstructions'] = 'Užduoties nurodymai';
$string['timelimit'] = 'Laiko limitas';
$string['timelimit_help'] = 'Jei ši funkcija įjungta, užduoties puslapyje nurodomas laiko limitas, o užduoties metu rodomas atgalinio skaičiavimo laikmatis.';
$string['timelimitnotenabled'] = 'Laiko apribojimas užduočiai neįjungtas.';
$string['timelimitpassed'] = 'Laiko limitas baigėsi';
$string['timemodified'] = 'Paskutinį kartą keista';
$string['timeremaining'] = 'Liko laiko';
$string['timeremainingcolon'] = 'Likęs laikas: {$a}';
$string['togglezoom'] = 'Priartinti/nutolinti regioną';
$string['ungroupedusers'] = 'Nuostata "Reikalinga grupė, kad pateikti darbus" yra įjungta, tačiau kai kurie dalyviai nėra grupės nariai ar priklauso daugiau nei vienai grupei, todėl jie negali pateikti savo pateikimo.';
$string['ungroupedusersoptional'] = 'Nustatymas „Besimokantieji pateikia darbus grupėse“ yra įjungtas, o kai kurie besimokantieji nėra jokios grupės nariai arba yra daugiau nei vienos grupės nariai. Atkreipkite dėmesį, kad šie besimokantieji pateiks darbus kaip „Numatytosios grupės“ nariai.';
$string['unlimitedattempts'] = 'Neribotai';
$string['unlimitedattemptsallowed'] = 'Leidžiamas neribotas bandymų skaičius.';
$string['unlimitedpages'] = 'Neribota';
$string['unlocksubmissionforstudent'] = 'Leisti įkelti darbus šiam besimokančiajam: (id={$a->id}, fullname={$a->fullname})';
$string['unlocksubmissions'] = 'Atrakinti pateikimus';
$string['unsavedchanges'] = 'Neišsaugoti pakeitimai';
$string['unsavedchangesquestion'] = 'Yra neišsaugotų įvertinimų ar atsiliepimų pakeitimų. Ar norite išsaugoti pakeitimus ir tęsti?';
$string['updategrade'] = 'Atnaujinti įvertinimą';
$string['updatetable'] = 'Išsaugoti ir atnaujinti lentelę';
$string['upgradenotimplemented'] = 'Plėtotė nėra realizuota ({$a->type} {$a->subtype}) papildinyje';
$string['userassignmentdefaults'] = 'Numatytieji naudotojo priskyrimo nustatymai';
$string['userextensiondate'] = 'Darbo įkėlimas pratęstas iki: {$a}';
$string['usergrade'] = 'Naudotojo įvertinimas';
$string['useridlistnotcached'] = 'Įvertinimo pakeitimai NEIŠSAUGOTI, nes neįmanoma nustatyti, kokį pateikimą jis turėjo.';
$string['useroverrides'] = 'Naudotojo keitimai';
$string['useroverridesdeleted'] = 'Naudotojo keitimai ištrinti';
$string['usersnone'] = 'Besimokantieji negali prieiti prie šios užduoties.';
$string['usersubmissioncannotberemoved'] = '{$a} pateikimas negali būti pašalintas.';
$string['userswhoneedtosubmit'] = 'Naudotojai, kurie turi pateikti darbą: {$a}';
$string['validmarkingworkflowstates'] = 'Galiojančios vertinimo eigos būsenos';
$string['viewadifferentattempt'] = 'Peržiūrėti kitą bandymą';
$string['viewbatchmarkingallocation'] = 'Peržiūrėti partijos rinkinio vertinimo paskirstymo puslapį.';
$string['viewbatchsetmarkingworkflowstate'] = 'Peržiūrėti paketų rinkinio vertinimo eigos būsenos puslapį.';
$string['viewfeedback'] = 'Peržiūrėti atsaką';
$string['viewfeedbackforuser'] = 'Peržiūrėti {$a} besimokančiojo atsaką';
$string['viewfull'] = 'Peržiūrėti pilnai';
$string['viewfullgradingpage'] = 'Atverti pilno vertinimo puslapį, atsako pateikimui';
$string['viewgradebook'] = 'Atverti įvertinimų knygelę';
$string['viewgrader'] = 'Žiūrėti Vertintoją';
$string['viewgrading'] = 'Peržiūrėti visus darbus';
$string['viewgradingformforstudent'] = 'Pamatyti vertinimo puslapį šiam besimokančiajam: (id={$a->id}, fullname={$a->fullname}).';
$string['viewownsubmissionform'] = 'Pamatyti savo darbų pateikimo puslapį.';
$string['viewownsubmissionstatus'] = 'Pamatyti savo pateiktų darbų būsenos puslapį.';
$string['viewrevealidentitiesconfirm'] = 'Pamatyti besimokančiųjų tapatybės atskleidimo puslapį.';
$string['viewsubmission'] = 'Peržiūrėti darbą';
$string['viewsubmissionforuser'] = 'Pamatyti pateiktus darbus šiam naudotojui: {$a}';
$string['viewsubmissiongradingtable'] = 'Pamatyti pateiktų darbų vertinimo lentelę.';
$string['viewsummary'] = 'Parodyti santrauką';
$string['workflowfilter'] = 'Filtruoti pagal būseną';
$string['xofy'] = '{$a->x} iš {$a->y}';
