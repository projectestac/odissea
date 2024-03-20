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
 * Strings for component 'quiz_overview', language 'ro', version '4.1'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Afişează toate încercările';
$string['allattemptscontributetograde'] = 'Toate încercările contribuie la stabilirea notei finale a utilizatorului.';
$string['allstudents'] = 'Afişează toate {$a}';
$string['attemptsonly'] = 'Afişează doar {$a} la care s-au înregistrat încercări';
$string['attemptsprepage'] = 'Număr de încercări afişate pe o pagină';
$string['deleteselected'] = 'Şterge încercările selectate';
$string['done'] = 'Realizat';
$string['err_failedtodeleteregrades'] = 'Ștergerea încercărilor calculate nu au putut fi șterse';
$string['err_failedtorecalculateattemptgrades'] = 'Recalcularea notelor încercărilor nu au putut fi efectuată';
$string['highlightinggraded'] = 'Încercarea marcată contribuie la nota finală a utilizatorului';
$string['needed'] = 'Necesar';
$string['noattemptsonly'] = 'Afişează/Descarcă doar {$a} la care nu s-au înregistrat încercări';
$string['noattemptstoregrade'] = 'Nicio încercare nu necesită recalcuare';
$string['nogradepermission'] = 'Nu aveți permisiunea să verificați acest test.';
$string['onlyoneattemptallowed'] = 'La acest chestionar este permisă o singură încercare';
$string['optallattempts'] = 'toate încercările';
$string['optallstudents'] = 'toate \'{$a}\'';
$string['optattemptsonly'] = 'Doar \'{$a}\' cu încercări';
$string['optnoattemptsonly'] = 'Doar \'{$a}\' fără încercări';
$string['optonlyregradedattempts'] = 'care au fost recalculate / sunt marcate că având nevoie de recalculare';
$string['overview'] = 'Privire de ansamblu';
$string['overviewdownload'] = 'Descărcare privire de ansamblu';
$string['overviewfilename'] = 'note';
$string['overviewreport'] = 'Raportul notelor';
$string['overviewreportgraph'] = 'Diagramă cu bare ilustrând numărul de studenţi şi intervalul de note pe care le obţin';
$string['overviewreportgraphgroup'] = 'Numărul de cursanți din grupul \'{$a}\' care au atins intervalul notelor';
$string['pagesize'] = 'Dimensiune pagină';
$string['pluginname'] = 'Note';
$string['preferencespage'] = 'Preferinţe doar pentru pagina curentă';
$string['preferencessave'] = 'Afișează raportul';
$string['preferencesuser'] = 'Preferinţe pentru acest raport';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Afișarea notelor pentru fiecare lot de întrebări.';
$string['privacy:preference:slotmarks:no'] = 'Notele nu sunt afișate împreună cu lotul de întrebări.';
$string['privacy:preference:slotmarks:yes'] = 'Notele sunt afișate împreună cu lotul de întrebări.';
$string['regrade'] = 'Notează din nou';
$string['regradeall'] = 'Notează toate testele din nou';
$string['regradealldry'] = 'Efectuare completă a recalculării notelor';
$string['regradealldrydo'] = 'Recalcularea încercărilor marcate că necesită recalculare ({$a})';
$string['regradealldrydogroup'] = 'Recalculare încercări ({$a->countregradeneeded}) marcate că necesită recalculare în grupul \'{$a->groupname}\'';
$string['regradealldrygroup'] = 'Efectuare completă a recalculării notelor pentru grupul \'{$a->groupname}\'';
$string['regradeallgroup'] = 'Efectuare completă a recalculării notelor pentru grupul \'{$a->groupname}\'';
$string['regradecomplete'] = 'Renotare completă';
$string['regradedsuccessfullyxofy'] = 'Renotare încheiată ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Renotare';
$string['regradeselected'] = 'Recalculează notele pentru încercările selectate';
$string['regradingattemptissue'] = 'Interval {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'Recalcularea încercare ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'Următoarele întrebări nu au putut fi renotate în testul {$a->attemptnum} de către {$a->name} (id {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'Recalcularea încercare ({$a->done}/{$a->count}) - Încercare {$a->attemptnum} de {$a->name} (id {$a->attemptid})';
$string['show'] = 'Afişează/ descarcă';
$string['showattempts'] = 'Doar afișare / descărcare încercări';
$string['showdetailedmarks'] = 'Note pentru fiecare întrebare';
$string['showinggraded'] = 'Afişează doar încercarea care a fost notată pentru fiecare utilizator.';
$string['showinggradedandungraded'] = 'Afişează toate încercările, şi cele notate şi cele care nu au fost notate. Încercarea pentru care cursantul este notat este marcată corespunzător. Metoda de notare pentru acest chestionar este {$a}.';
$string['studentingroup'] = '\'{$a->coursestudent}\' în grupul \'{$a->groupname}\'';
$string['studentingrouplong'] = '\'{$a->coursestudent}\' în acest grup';
