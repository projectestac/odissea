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
 * Strings for component 'quiz_overview', language 'it', version '4.5'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Visualizza tutti tentativi';
$string['allattemptscontributetograde'] = 'Tutti i tentativi contribuiscono alla valutazione finale dell\'utente.';
$string['allstudents'] = 'Visualizza tutti {$a}';
$string['attemptsonly'] = 'Visualizza solo {$a} con tentativi';
$string['attemptsprepage'] = 'Tentativi visualizzati per pagina';
$string['deleteselected'] = 'Elimina tentativi selezionati';
$string['done'] = 'Fatto';
$string['err_failedtodeleteregrades'] = 'Non è stato possibile eliminare le valutazione calcolate dei tentativi';
$string['err_failedtorecalculateattemptgrades'] = 'Non è stato possibile ricalcolare le valutazione dei tentativi';
$string['highlightinggraded'] = 'Il tentativo che contribuisce alla valutazione finale dell\'utente è evidenziato.';
$string['needed'] = 'Necessario';
$string['noattemptsonly'] = 'Visualizza/scarica {$a} senza tentativi';
$string['noattemptstoregrade'] = 'Nessun tentativo ha bisogno di rivalutazione';
$string['nogradepermission'] = 'Non hai il permesso necessario per valutare questo quiz.';
$string['onlyoneattemptallowed'] = 'Consentito solo un tentativo per utente in questo quiz.';
$string['optallattempts'] = 'tutti i tentativi';
$string['optallstudents'] = 'tutti \'{$a}\'';
$string['optattemptsonly'] = 'solo \'{$a}\' con tentativi';
$string['optnoattemptsonly'] = 'solo \'{$a}\' senza tentativi';
$string['optonlyregradedattempts'] = 'tentativi che sono stati rivalutati/sono evidenziati da rivalutare';
$string['overview'] = 'Valutazioni';
$string['overviewdownload'] = 'Scarica riepilogo';
$string['overviewfilename'] = 'valutazioni';
$string['overviewreport'] = 'Report dei voti';
$string['overviewreportgraph'] = 'Numero complessivo di studenti ripartiti per intervallo di valutazione';
$string['overviewreportgraphgroup'] = 'Numero di studenti nel gruppo \'{$a}\' ripartiti per punteggio raggiunto';
$string['pagesize'] = 'Tentativi per pagina';
$string['pluginname'] = 'Voti';
$string['preferencespage'] = 'Preferenze solo per questa pagina';
$string['preferencessave'] = 'Visualizza report';
$string['preferencesuser'] = 'Le tue preferenze per questo report';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Scelta di visualizzare i punteggi per ogni domanda.';
$string['privacy:preference:slotmarks:no'] = 'I punteggi non sono visualizzati accanto allo slot della domanda.';
$string['privacy:preference:slotmarks:yes'] = 'I punteggi sono visualizzati accanto allo slot della domanda.';
$string['regrade'] = 'Rivaluta';
$string['regrade_allattempts'] = 'Tutti i tentativi';
$string['regrade_allquestions'] = 'Tutte le domande';
$string['regrade_attempts'] = 'Rivaluta tentativi...';
$string['regrade_commitregrade'] = 'Conferma la rivalutazione';
$string['regrade_dryrun'] = 'Prova a secco';
$string['regrade_help'] = 'La rivalutazione ricalcola la valutazione automatica dei tentativi, utilizzando la versione corrente di ogni domanda, se possibile. Una prova a secco consente di visualizzare in anteprima le modifiche delle valutazioni senza influire sui tentativi';
$string['regrade_link'] = 'Quiz_grades_report#Re-grading_attempts';
$string['regrade_regradeneedednotificationmessage'] = 'L\'ultima prova a secco di una rivalutazione ha rilevato che la rivalutazione avrebbe modificato i voti per {$a->questions} domande in {$a->attempts} tentativi.';
$string['regrade_regradenow'] = 'Rivaluta adesso';
$string['regrade_selectedattempts'] = 'Tentativi selezionati';
$string['regrade_selectedquestions'] = 'Domande selezionate';
$string['regradeall'] = 'Rivaluta tutto';
$string['regradealldry'] = 'Prova rivalutazione totale';
$string['regradealldrydo'] = 'Rivaluta tentativi evidenziati da rivalutare ({$a})';
$string['regradealldrydogroup'] = 'Rivaluta tentativi ({$a->countregradeneeded}) evidenziati da rivalutare in gruppo \'{$a->groupname}\'';
$string['regradealldrygroup'] = 'Prova rivalutazione totale per gruppo \'{$a->groupname}\'';
$string['regradeallgroup'] = 'Rivaluta tutto per gruppo \'{$a->groupname}\'';
$string['regradecomplete'] = 'Rivalutazione completata';
$string['regradedsuccessfullyxofy'] = '({$a->done}/{$a->count}) rivalutati correttamente';
$string['regradeheader'] = 'Rivalutazione';
$string['regradeselected'] = 'Rivaluta tentativi selezionati';
$string['regradingattemptissue'] = 'Slot {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'Rivalutazione tentativo ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'Non è stato possibile rivalutare le seguenti domande nel tentativo {$a->attemptnum} di {$a->name} (id {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'Rivalutazione del tentativo ({$a->done}/{$a->count}) - Tentativo {$a->attempted} di {$a->name} (è {$an->attempted})';
$string['show'] = 'Visualizza / scarica';
$string['showattempts'] = 'Visualizza / scarica solamente i tentativi';
$string['showdetailedmarks'] = 'Punti per ciascuna domanda';
$string['showinggraded'] = 'Visualizza solo il tentativo valutato per ogni utente';
$string['showinggradedandungraded'] = 'Visualizzazione dei tentativi valutati e non valutati per ciascun utente. Il tentativo valutato, per ogni utente, è evidenziato. Il metodo di valutazione usato per questo quiz è {$a}.';
$string['studentingroup'] = '\'{$a->coursestudent}\' nel gruppo \'{$a->groupname}\'';
$string['studentingrouplong'] = '\'{$a->coursestudent}\' in questo gruppo';
