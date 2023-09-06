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
 * Strings for component 'rating', language 'it', version '4.1'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Media dei voti';
$string['aggregatecount'] = 'Numero di voti';
$string['aggregatemax'] = 'Voto massimo';
$string['aggregatemin'] = 'Voto minimo';
$string['aggregatenone'] = 'Senza voto';
$string['aggregatesum'] = 'Somma dei voti';
$string['aggregatetype'] = 'Modalità di aggregazione';
$string['aggregatetype_help'] = 'La modalità di aggregazione definisce come verranno calcolati i voti presenti nel registro valutatore.

* Media dei voti - La media di tutti i voti
* Numero di voti - Il voto finale è pari al numero di elementi valutati. Il totale non può comunque superare il voto massimo impostato nell\'attività.
* Voto più alto - Il voto finale è pari al voto più alto
* Voto più basso - Il voto finale è pari al voto più basso
* Somma dei voti - Tutti i voti sono sommati. Il totale non può comunque superare il voto massimo impostato nell\'attività.

Se si sceglie "Non aggregare i voti" l\'attività non comparirà nel registro valutatore.';
$string['allowratings'] = 'Consenti la valutazione degli elementi';
$string['allratingsforitem'] = 'Tutte le valutazioni inviate';
$string['capabilitychecknotavailable'] = 'La verifica delle autorizzazioni non sarà disponibile fino a quando l\'attività non sarà salvata';
$string['couldnotdeleteratings'] = 'Spiacente, non è possibile eliminarlo poiché alcuni partecipanti hanno già dato le loro valutazione';
$string['norate'] = 'La valutazione degli elementi non è consentita!';
$string['noratings'] = 'Nessuna valutazione inviata';
$string['noviewanyrate'] = 'Puoi solamente guardare i risultati dei tuoi inserimenti';
$string['noviewrate'] = 'Non hai il privilegio di visualizzare le valutazioni degli inserimenti';
$string['privacy:metadata:rating'] = 'La valutazione inserita dall\'utente viene memorizzata insieme a una mappatura dell\'elemento valutato.';
$string['privacy:metadata:rating:rating'] = 'Il valore numerico della valutazione inserita dall\'utente.';
$string['privacy:metadata:rating:timecreated'] = 'L\'orario della prima valutazione.';
$string['privacy:metadata:rating:timemodified'] = 'L\'orario dell\'aggiornamento più recente della valutazione.';
$string['privacy:metadata:rating:userid'] = 'L\'utente che ha valutato.';
$string['rate'] = 'Valuta';
$string['ratepermissiondenied'] = 'Non sei autorizzato a valutare questo elemento';
$string['rating'] = 'Valutazione';
$string['ratinginvalid'] = 'Il punteggio non è valido';
$string['ratings'] = 'Valutazioni';
$string['ratingtime'] = 'Limita valutazioni agli elementi con la data in questo intervallo:';
$string['rolewarning'] = 'Ruoli con il privilegio di valutare';
$string['rolewarning_help'] = 'Per valutare, gli utenti necessitano del privilegio moodle/rating:rate e degli eventuali privilegi specifici di ciascun modulo di attività. L\'elenco dei ruoli può essere modificato tramite la pagina Autorizzazioni.';
$string['scaleselectionrequired'] = 'Quando si seleziona un tipo di aggregazione di valutazioni è anche necessario scegliere una scala oppure impostare il punteggio massimo.';
