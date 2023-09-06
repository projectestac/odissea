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
 * Strings for component 'gradingform_rubric', language 'it', version '4.1'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Aggiungi criterio';
$string['additionalfeedback'] = 'Feedback aggiuntivo';
$string['alwaysshowdefinition'] = 'Gli utenti potranno visualizzare un\'anteprima del rubric (altrimenti il rubric sarà visibile solo dopo la valutazione)';
$string['backtoediting'] = 'Torna alla modifica';
$string['confirmdeletecriterion'] = 'Sei sicuro di eliminare questo criterio?';
$string['confirmdeletelevel'] = 'Sei sicuro di eliminare questo livello?';
$string['criterion'] = 'Criterio {$a}';
$string['criterionaddlevel'] = 'Aggiungi livello';
$string['criteriondelete'] = 'Elimina criterio';
$string['criterionduplicate'] = 'Duplica criterio';
$string['criterionempty'] = 'Click per modificare il criterio';
$string['criterionmovedown'] = 'Sposta in basso';
$string['criterionmoveup'] = 'Sposta in alto';
$string['criterionremark'] = 'Commento del criterio {$a->description}: {$a->remark}';
$string['definerubric'] = 'Impostazione rubric';
$string['description'] = 'Descrizione';
$string['enableremarks'] = 'Consenti al valutatore di aggiungere commenti testuali ai criteri';
$string['err_mintwolevels'] = 'Ciascun criterio deve avere almeno due livelli';
$string['err_nocriteria'] = 'Il rubric deve contenere almeno un criterio';
$string['err_nodefinition'] = 'La definizione del livello non può essere lasciata in bianco';
$string['err_nodescription'] = 'La descrizione del criterio non può essere lasciata in bianco';
$string['err_novariations'] = 'I livelli del criterio non possono valere tutti lo stesso punteggio.';
$string['err_scoreformat'] = 'I punteggi per ciascun livello devono essere numeri validi';
$string['err_totalscore'] = 'Il punteggio massimo possibile del rubric deve essere maggiore di zero.';
$string['gradingof'] = 'Valutazione di {$a}';
$string['level'] = 'Livello {$a->definition}, punti {$a->score}.';
$string['leveldefinition'] = 'Definizione livello {$a}';
$string['leveldelete'] = 'Elimina livello {$a}';
$string['levelempty'] = 'Click per modificare il livello';
$string['levelsgroup'] = 'Gruppo di livelli';
$string['lockzeropoints'] = 'Calcola la valutazione basandosi sul punteggio minimo del rubric';
$string['lockzeropoints_help'] = 'L\'impostazione si applica solamente se il numero minimo di punti per ciascun criterio è maggiore di 0. Se selezionata, la valutazione minima ottenibile sarà il punteggio minimo del rubric Se non selezionata, la valutazione minima possibile con il rubric sarà mappata alla valutazione più bassa dell\'attività (ossia 0 a meno che non venga utilizzata una scala).';
$string['name'] = 'Nome';
$string['needregrademessage'] = 'La definizione del rubric è stata cambiata dopo la valutazione di questo studente. Lo studente non potrà visualizzare questo rubric finché non controllerai il rubric e aggiornerai la valutazione';
$string['notset'] = 'Non impostato';
$string['pluginname'] = 'Rubric';
$string['pointsvalue'] = '{$a} punti';
$string['previewrubric'] = 'Anteprima rubric';
$string['privacy:metadata:criterionid'] = 'Identificatore di un determinato criterio valutato.';
$string['privacy:metadata:fillingssummary'] = 'Informazioni sulla valutazione di un utente generata dal rubric.';
$string['privacy:metadata:instanceid'] = 'Identificatore relativo a una valutazione in un\'attività.';
$string['privacy:metadata:levelid'] = 'Livello ottenuto nel rubric.';
$string['privacy:metadata:remark'] = 'Commenti relativi al criterio del rubric che viene valutato.';
$string['regrademessage1'] = 'Stai per salvare modifiche ad un rubric che è già stato utilizzato per valutare. È necessario indicare quali valutazioni debbano essere riviste.Il rubrica non sarà visualizzabile dagli studenti finché non verranno nuovamente valutati.';
$string['regrademessage5'] = 'Stai per salvare modifiche significative ad un rubric che è già stato utilizzato per valutare. I valori presenti nel registro valutatore non saranno modificati, ma il rubric non sarà visualizzabile dagli studenti finché non verranno nuovamente valutati.';
$string['regradeoption0'] = 'Da non valutare nuovamente';
$string['regradeoption1'] = 'Da valutare nuovamente';
$string['restoredfromdraft'] = 'NOTA: l\'ultimo tentativo di valutare questa persona non è stato salvato correttamente e sono quindi state ripristinate le valutazioni in bozza. Se vuoi annullare questi cambiamenti usa il pulsante "Annulla" qui sotto.';
$string['rubric'] = 'Rubric';
$string['rubricmapping'] = 'Regole di conversione del punteggio in valutazione';
$string['rubricmappingexplained'] = 'Il punteggio minimo di questo rubric è <b>{$a->minscore} points</b> e sarà convertito nel voto minimo disponibile per questo modulo (pari a zero a meno di usare una scala). Il punteggio massimo di <b>{$a->maxscore} punti</b> sarà convertito nel voto massimo. I punteggi intermedi saranno pure convertiti ed arrotondati al voto più vicino.

Se si utilizza una scala al posto di un voto, il punteggio sarà convertito nell\'elemento corrispondente della scala considerando la scala come una sequenza di valori interi consecutivi.

Il calcolo della valutazione può essere modificato selezionando \'Calcola la valutazione basata sul rubric con un punteggio minimo pari a 0\'';
$string['rubricnotcompleted'] = 'Per favore seleziona qualcosa per ciascun criterio';
$string['rubricoptions'] = 'Opzioni rubric';
$string['rubricstatus'] = 'Stato del rubric';
$string['save'] = 'Salva';
$string['saverubric'] = 'Salva il rubric e rendilo disponibile';
$string['saverubricdraft'] = 'Salva come bozza';
$string['scoreinputforlevel'] = 'Input punti per il livello {$a}';
$string['scorepostfix'] = '{$a} punti';
$string['showdescriptionstudent'] = 'Visualizza la descrizione del rubric a coloro che riceveranno la valutazione';
$string['showdescriptionteacher'] = 'Visualizza la descrizione del rubric durante la valutazione';
$string['showremarksstudent'] = 'I commenti sono visualizzati da coloro che riceveranno la valutazione';
$string['showscorestudent'] = 'Visualizza il punteggio per ciascun livello a coloro che saranno valutati';
$string['showscoreteacher'] = 'Visualizza il punteggio per ciascun livello durante la valutazione';
$string['sortlevelsasc'] = 'Ordinamento dei livelli:';
$string['sortlevelsasc0'] = 'Decrescente per punteggio';
$string['sortlevelsasc1'] = 'Crescente per punteggio';
$string['zerolevelsabsent'] = 'Attenzione: il punteggio minimo possibile per il rubric non è pari 0; questo può provocare valutazioni inattese dell\'attività. Per evitare il problema, ciascun criterio deve avere un livello con un punteggio pari a 0.<br>
È possibile ignorare l\'avviso quando la valutazione è basata su una scala e il livello con la valutazione più bassa è impostato con il valore più basso della scala.';
