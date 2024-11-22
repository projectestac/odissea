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
 * Strings for component 'qtype_gapselect', language 'it', version '4.1'.
 *
 * @package     qtype_gapselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Aggiungi {no} scelte';
$string['answer'] = 'Risposta';
$string['blanknumber'] = 'Vuoto {$a}';
$string['choices'] = 'Scelte';
$string['choicex'] = 'Scelta [[{no}]]';
$string['combinedcontrolnamegapselect'] = 'menu a discesa';
$string['combinedcontrolnamegapselectplural'] = 'menu a discesa';
$string['correctansweris'] = 'La risposta corretta è: {$a}';
$string['errorblankchoice'] = 'Per favore controlla le scelte: la scelta {$a} è vuota.';
$string['errormissingchoice'] = 'Per favore controlla il testo della domanda: {$a} non è presente tra le scelte. È possibile usare come segnaposto solamente i numeri di scelte esistenti.';
$string['errornoslots'] = 'Il testo della domanda deve contenere dei segnaposto come [[1]] per indicare dove si trova la parola mancante.';
$string['errorquestiontextblank'] = 'Devi inserire il testo della domanda.';
$string['group'] = 'Gruppo';
$string['pleaseputananswerineachbox'] = 'Per favore inserisci una risposta in ciascuno spazio';
$string['pluginname'] = 'Scelta delle parole mancanti';
$string['pluginname_help'] = 'Le domande Scelta delle parole mancanti richiedono al rispondente di selezionare le risposte corrette dai menu a discesa. [[1]], [[2]], [[3]], ... sono utilizzati come segnaposto nel testo della domanda, con le risposte corrette specificate come risposte a scelta 1, 2, 3, ... rispettivamente. È possibile aggiungere risposte a scelta aggiuntive per rendere la domanda più difficile. Le risposte a scelta possono essere raggruppate per limitare le risposte disponibili in ciascun menu a discesa.';
$string['pluginname_link'] = 'question/type/gapselect';
$string['pluginnameadding'] = 'Inserimento domanda Scelta delle parole mancanti';
$string['pluginnameediting'] = 'Modifica domanda Scelta delle parole mancanti';
$string['pluginnamesummary'] = 'Nel testo della domanda le parole mancanti vengono inserite tramite menu a discesa.';
$string['privacy:metadata'] = 'Il plugin Scelta delle parole mancanti non memorizza dati personali.';
$string['privacy:preference:defaultmark'] = 'Punteggio di default di una determinata domanda.';
$string['privacy:preference:penalty'] = 'Penalità per ogni tentativo errato quando le domande vengono eseguite utilizzando il comportamento \'Interattivo con tentativi multipli\' o \'Modalità adattiva\'.';
$string['privacy:preference:shuffleanswers'] = 'Indicatore di randomizzazione automatica delle risposte.';
$string['regradeissuenumchoiceschanged'] = 'Il numero di scelte nel gruppo {$a} è cambiato.';
$string['regradeissuenumgroupsschanged'] = 'Il numero di gruppi di scelte è cambiato.';
$string['shuffle'] = 'Rimescola';
$string['tagsnotallowed'] = '{$a->tag} non è consentito. (Sono permessi solo {$a->allowed}.)';
$string['tagsnotallowedatall'] = '{$a->tag} non è consentito. (L\'HTML non è consentito.)';
