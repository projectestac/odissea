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
 * Strings for component 'gradingform_guide', language 'it', version '4.1'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Aggiungi commento di uso frequente';
$string['addcriterion'] = 'Aggiungi criterio';
$string['additionalcomments'] = 'Commenti aggiuntivi';
$string['additionalcommentsforcriterion'] = 'Commenti aggiuntivi sul criterio {$a}';
$string['alwaysshowdefinition'] = 'La definizione della valutazione guidata è visualizzata dagli studenti';
$string['backtoediting'] = 'Torna alla modifica';
$string['clicktocopy'] = 'Click per copiare questo testo nel commento dei criteri';
$string['clicktoedit'] = 'Click per modificare';
$string['clicktoeditname'] = 'Click per modificare il nome del criterio';
$string['comment'] = 'Commento';
$string['comments'] = 'Commenti di uso frequente';
$string['commentsdelete'] = 'Elimina commento';
$string['commentsempty'] = 'Click per modificare il commento';
$string['commentsmovedown'] = 'Sposta in basso';
$string['commentsmoveup'] = 'Sposta in alto';
$string['confirmdeletecriterion'] = 'Sei sicuro di eliminare questo elemento?';
$string['confirmdeletelevel'] = 'Sei sicuro di eliminare questo livello?';
$string['criterion'] = 'Nome del criterio';
$string['criteriondelete'] = 'Elimina criterio';
$string['criterionempty'] = 'Click per modificare il criterio';
$string['criterionmovedown'] = 'Sposta in basso';
$string['criterionmoveup'] = 'Sposta in alto';
$string['criterionname'] = 'Nome del criterio';
$string['criterionremark'] = 'Commento del criterio {$a}';
$string['definemarkingguide'] = 'Imposta valutazione guidata';
$string['description'] = 'Descrizione';
$string['descriptionmarkers'] = 'Descrizione per il valutatore';
$string['descriptionstudents'] = 'Descrizione per gli studenti';
$string['err_maxscoreisnegative'] = 'Il punteggio massimo non è valido, i valori negativi non sono consentiti.';
$string['err_maxscorenotnumeric'] = 'Il punteggio massimo del criterio deve essere numerico';
$string['err_nocomment'] = 'Il commento non può rimanere vuoto';
$string['err_nodescription'] = 'La descrizione per gli studenti non può rimanere vuoto';
$string['err_nodescriptionmarkers'] = 'La descrizione per il valutatore non può rimanere vuota';
$string['err_nomaxscore'] = 'Il punteggio massimo del criterio non può rimanere vuoto';
$string['err_noshortname'] = 'Il nome del criterio non può rimanere vuoto';
$string['err_scoreinvalid'] = 'Il punteggio dato a {$a->criterianame} non è valido, Il punteggio massimo è {$a->maxscore}';
$string['err_scoreisnegative'] = 'Il punteggio dato a {$a->criterianame} non è valido, i valori negativi non sono consentiti.';
$string['err_shortnametoolong'] = 'Il criterio deve contenere meno di 256 caratteri.';
$string['gradingof'] = 'Valutazione {$a}';
$string['guide'] = 'Valutazione guidata';
$string['guidemappingexplained'] = 'ATTENZIONE: la valutazione guidata ha un punteggio massimo di <b>{$a->maxscore}</b> ma il punteggio massimo impostato nell\'attività è pari a {$a->modulegrade}. Il punteggio massimo della valutazione guidata sarà convertito proporzionalmente.<br />I punteggi intermedi saranno arrotondati al punteggio più vicino.';
$string['guidenotcompleted'] = 'Per favore inserisci un punteggio valido per ciascun criterio';
$string['guideoptions'] = 'Opzioni valutazione guidata';
$string['guidestatus'] = 'Stato della valutazione guidata';
$string['hidemarkerdesc'] = 'Nascondi la descrizione dei criteri al valutatore';
$string['hidestudentdesc'] = 'Nascondi la descrizione dei criteri agli studenti';
$string['informationforcriterion'] = '{$a} informazioni';
$string['insertcomment'] = 'Inserisci commento di uso frequente';
$string['maxscore'] = 'Punteggio massimo';
$string['name'] = 'Nome';
$string['needregrademessage'] = 'La definizione della valutazione guidata è cambiata dopo la valutazione di questo studente. Lo studente non potrà visualizzare la propria valutazione finché la sua valutazione non sarà stata aggiornata.';
$string['outof'] = 'punteggio ottenuto su {$a}';
$string['pluginname'] = 'Valutazione guidata';
$string['previewmarkingguide'] = 'Anteprima valutazione guidata';
$string['privacy:metadata:criterionid'] = 'Identificatore del criterio di valutazione avanzata.';
$string['privacy:metadata:fillingssummary'] = 'Informazioni su voto e feedback di un utente per la valutazione guidata.';
$string['privacy:metadata:instanceid'] = 'Identificatore di una valutazione usata da un\'attività.';
$string['privacy:metadata:preference:showmarkerdesc'] = 'Scelta di visualizzare al valutatore la descrizione dei criteri.';
$string['privacy:metadata:preference:showstudentdesc'] = 'Scelta di visualizzare allo studente la descrizione dei criteri.';
$string['privacy:metadata:remark'] = 'Commenti relativi al criterio di valutazione.';
$string['privacy:metadata:score'] = 'Punteggio del criterio di valutazione.';
$string['regrademessage1'] = 'Stai per salvare modifiche di una valutazione guidata che è già stata usata per valutare. Devi specificare se le valutazioni già date devono essere contrassegnate come valutazioni da rivedere. Le valutazioni da rivedere non saranno più visualizzabili dagli studenti finché le loro valutazioni non saranno state aggiornate.';
$string['regrademessage5'] = 'Stai per salvare significative  modifiche di una valutazione guidata che è già stata usata per valutare. la valutazione presente nel registro valutatore non sarà modificata, ma le valutazioni non saranno più visualizzabili dagli studenti finché le loro valutazioni non saranno aggiornate.';
$string['regradeoption0'] = 'Non contrassegnare da rivedere';
$string['regradeoption1'] = 'Contrassegna da rivedere';
$string['remark_help'] = 'Inserire eventuali commenti aggiuntivi su questo criterio.';
$string['restoredfromdraft'] = 'NOTA: il salvataggio dell\'ultimo tentativo di valutare questo partecipante non è andato a buon fine, sono stati ripristinate le valutazioni in bozza. Se desideri annullare queste modifiche utilizza il pulsante \'Annulla\'.';
$string['save'] = 'Salva';
$string['saveguide'] = 'Salva la valutazione guidata e rendila disponibile';
$string['saveguidedraft'] = 'Salva come bozza';
$string['score'] = 'punteggio';
$string['score_help'] = 'Pee il criterio {$a->criterion}, inserire un punteggio compreso tra 0 e {$a->maxscore}.';
$string['scoreforcriterion'] = '{$a} punteggio';
$string['showmarkerdesc'] = 'Visualizza la descrizione dei criteri ai valutatori';
$string['showmarkspercriterionstudents'] = 'Gli studenti visualizzano il punteggio ottenuto in ciascun criterio';
$string['showstudentdesc'] = 'Visualizza la descrizione dei criteri agli studenti';
