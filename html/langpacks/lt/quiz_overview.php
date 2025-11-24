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
 * Strings for component 'quiz_overview', language 'lt', version '4.5'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Rodyti visus bandymus';
$string['allattemptscontributetograde'] = 'Visi bandymai pridedami prie galutinio naudotojo įvertinimo.';
$string['allstudents'] = 'Rodyti visus {$a}';
$string['attemptsonly'] = 'Rodyti {$a} tik su bandymais';
$string['attemptsprepage'] = 'Puslapyje rodomų bandymų skaičius';
$string['deleteselected'] = 'Naikinti pasirinktus bandymus';
$string['done'] = 'Atlikta';
$string['err_failedtodeleteregrades'] = 'Nepavyko panaikinti suskaičiuotų bandymų įvertinimų';
$string['err_failedtorecalculateattemptgrades'] = 'Nepavyko perskaičiuoti bandymų įvertinimų';
$string['highlightinggraded'] = 'Naudotojo bandymas, kuris prisideda prie galutinio įvertinimo, yra paryškintas.';
$string['needed'] = 'Reikalinga';
$string['noattemptsonly'] = 'Rodyti / atsisiųsti {$a} tik be bandymų';
$string['noattemptstoregrade'] = 'Nėra bandymų, kuriuos reikia iš naujo įvertinti';
$string['nogradepermission'] = 'Jūs neturite teisės vertinti šio testo.';
$string['onlyoneattemptallowed'] = 'Šį testą kiekvienas naudotojas gali atlikti tik kartą.';
$string['optallattempts'] = 'visi bandymai';
$string['optallstudents'] = 'visi {$a}, kurie bandė arba nebandė atlikti testo';
$string['optattemptsonly'] = '{$a}, kurie bandė atlikti testą';
$string['optnoattemptsonly'] = '{$a}, kurie nebandė atlikti testo';
$string['optonlyregradedattempts'] = 'iš naujo įvertintus / pažymėtus kaip vertintinus iš naujo';
$string['overview'] = 'Įvertinimai';
$string['overviewdownload'] = 'Apžvalgos atsisiuntimas';
$string['overviewfilename'] = 'įvertinimai';
$string['overviewreport'] = 'Įvertinimų ataskaita';
$string['overviewreportgraph'] = 'Besimokančiųjų pasiskirstymas pagal įvertinimų intervalus';
$string['overviewreportgraphgroup'] = 'Grupėje {$a} esančių besimokančiųjų, siekiančių įverčių intervalų, skaičius';
$string['pagesize'] = 'Puslapio dydis';
$string['pluginname'] = '„Grades“';
$string['preferencespage'] = 'Tik šio puslapio nuostatos';
$string['preferencessave'] = 'Rodyti ataskaitą';
$string['preferencesuser'] = 'Jūsų šios ataskaitos nuostatos';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Ar rodyti kiekvieno klausimo nustatytos vietos įvertinimus.';
$string['privacy:preference:slotmarks:no'] = 'Įvertinimai nerodomi šalia klausimo nustatytos vietos.';
$string['privacy:preference:slotmarks:yes'] = 'Įvertinimai rodomi šalia klausimo nustatytos vietos.';
$string['regrade'] = 'Vertinti iš naujo';
$string['regrade_allattempts'] = 'Visi bandymai';
$string['regrade_allquestions'] = 'Visi klausimai';
$string['regrade_attempts'] = 'Perskaičiuoti bandymus...';
$string['regrade_commitregrade'] = 'Įpareigoti pervertinti';
$string['regrade_dryrun'] = 'Bandomasis perskaičiavimas';
$string['regrade_link'] = 'Quiz_grades_report#Re-grading_attempts';
$string['regrade_regradenow'] = 'Perskaičiuoti dabar';
$string['regrade_selectedattempts'] = 'Pasirinkti bandymai';
$string['regrade_selectedquestions'] = 'Pasirinkti klausimai';
$string['regradeall'] = 'Viską vertinti iš naujo';
$string['regradealldry'] = 'Atlikti bandomąjį visišką įvertinimą iš naujo';
$string['regradealldrydo'] = 'Iš naujo vertinti bandymus, pažymėtus kaip vertintinus iš naujo ({$a})';
$string['regradealldrydogroup'] = 'Iš naujo vertinti bandymus ({$a->countregradeneeded}), grupėje {$a->groupname} pažymėtus kaip vertintinus iš naujo';
$string['regradealldrygroup'] = 'Atlikti visišką bandomąjį grupės {$a->groupname} įvertinimą iš naujo';
$string['regradeallgroup'] = 'Visiškas grupės {$a->groupname} įvertinimas iš naujo';
$string['regradecomplete'] = 'Vertinimas iš naujo baigtas';
$string['regradedsuccessfullyxofy'] = 'Baigtas pervertinimas ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Vertinimas iš naujo';
$string['regradeselected'] = 'Iš naujo vertinti pasirinktus bandymus';
$string['regradingattemptissue'] = 'Nustatyta vieta {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'Pervertinimo bandymas ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'Klausimai, kurie negali būti įvertinti iš naujo bandyme {$a->attemptnum} {$a->name} (id {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'Bandymo pervertinimas ({$a->done}/{$a->count}) – {$a->attemptnum} bandymas, kurį atliko {$a->name} (id {$a->attemptid})';
$string['show'] = 'Įtraukti';
$string['showattempts'] = 'Įtraukti bandymus';
$string['showdetailedmarks'] = 'Balai už kiekvieną klausimą';
$string['showinggraded'] = 'Rodomas tik įvertintas kiekvieno naudotojo bandymas.';
$string['showinggradedandungraded'] = 'Rodomi įvertinti ir neįvertinti kiekvieno naudotojo bandymai. Pažymėtas vienas kiekvieno įvertinto naudotojo bandymas. Šio testo vertinimo metodas yra {$a}.';
$string['studentingroup'] = '{$a->coursestudent} grupėje {$a->groupname}';
$string['studentingrouplong'] = '{$a->coursestudent} šioje grupėje';
