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
 * Strings for component 'qtype_match', language 'it', version '4.1'.
 *
 * @package     qtype_match
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'Risposta {$a}';
$string['availablechoices'] = 'Scelte disponibili';
$string['blanksforxmorequestions'] = '{no} altre coppie vuote';
$string['correctansweris'] = 'La risposta corretta è: {$a}';
$string['deletedchoice'] = '[Scelta eliminata]';
$string['deletedsubquestion'] = 'Questa porzione di domanda è stata eliminata dopo l\'inizio del tentativo';
$string['filloutthreeqsandtwoas'] = 'Devi fornire almeno due domande e tre risposte. Puoi anche aggiungere risposte errate in più: per farlo è sufficiente lasciare vuota la domanda ed inserire solo la risposta. Se lasciate vuota sia la domanda che la risposta la coppia non verrà utilizzata.';
$string['nomatchinganswer'] = 'Devi indicare una risposta corrispondente alla domanda \'{$a}\'.';
$string['nomatchinganswerforq'] = 'Devi fornire una risposta per questa domanda.';
$string['notenoughqsandas'] = 'Devi fornire almeno {$a->q} domande e {$a->a} risposte.';
$string['notenoughquestions'] = 'Devi fornire almeno {$a} coppie di domande e risposte.';
$string['pleaseananswerallparts'] = 'Per favore rispondi a tutte le parti della domanda';
$string['pluginname'] = 'Corrispondenza';
$string['pluginname_help'] = 'Lo studente dovrà far corrispondere i termini presenti nell\'elenco delle domande con i termini presenti nell\'elenco delle risposte.
';
$string['pluginname_link'] = 'question/type/match';
$string['pluginnameadding'] = 'Creazione domanda Corrispondenza';
$string['pluginnameediting'] = 'Modifica domanda Corrispondenza';
$string['pluginnamesummary'] = 'La risposta a ciascuna sotto domanda deve essere selezionata da un elenco di risposte possibili.';
$string['privacy:metadata'] = 'Il plugin Tipo di domande \'Corrispondenza\' non memorizza dati personali.';
$string['regradeissuenumchoiceschanged'] = 'Il numero di scelte è stato modificato.';
$string['regradeissuenumstemschanged'] = 'Il numero di sotto domande è stato modificato.';
$string['shuffle'] = 'Mescola';
$string['shuffle_help'] = 'Ogni volta che lo studente tenterà il quiz, le domande saranno presentate in ordine casuale  contenente questa domanda, l\'ordine delle possibili risposte sarà casuale - sempre che l\'impostazione del Quiz "Domande in ordine casuale" sia abilitata. In una domanda di tipo Corrispondenza, solo le domande saranno influenzate da questa impostazione. La possibili risposte saranno sempre ordinate casualmente.';
