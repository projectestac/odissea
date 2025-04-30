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
 * Strings for component 'qtype_ordering', language 'it', version '4.4'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Posizione assoluta';
$string['addmultipleanswers'] = 'Aggiungi altri {$a} articoli';
$string['addsingleanswer'] = 'Aggiungi un altro elemento';
$string['allornothing'] = 'Tutto o niente';
$string['answer'] = 'Elemento testo';
$string['correctitemsnumber'] = 'Elementi corretti: {$a}';
$string['correctorder'] = 'L\'ordine corretto di questi elementi è il seguente:';
$string['defaultanswerformat'] = 'Formato di risposta di default';
$string['defaultquestionname'] = 'Trascina i seguenti elementi nell\'ordine corretto.';
$string['draggableitemno'] = 'Elemento trascinabile {no}';
$string['draggableitems'] = 'Elementi trascinabili';
$string['duplicatesnotallowed'] = 'Non è consentita la duplicazione degli elementi trascinabili. La stringa "{$a->text}" è già utilizzata in {$a->item}.';
$string['editingordering'] = 'Modifica ordinamento delle domande';
$string['gradedetails'] = 'Dettagli della valutazione';
$string['gradingtype'] = 'Tipo di valutazione';
$string['gradingtype_help'] = '**Tutto o niente**
&nbsp; Se tutti gli elementi sono nella posizione corretta, viene assegnato il massimo dei voti. Altrimenti il punteggio è zero.

**Posizione assoluta**
&nbsp; Un elemento è considerato corretto se si trova nella stessa posizione della risposta corretta. Il punteggio più alto possibile per la domanda è **uguale** al numero di elementi visualizzati dallo studente.

**Relativo alla posizione corretta**
&nbsp; Un elemento è considerato corretto se si trova nella stessa posizione della risposta corretta. Gli elementi corretti ricevono un punteggio pari al numero di elementi visualizzati meno uno. Gli elementi errati ricevono un punteggio pari al numero di elementi visualizzati meno uno e meno la distanza dell\'elemento dalla sua posizione corretta. Pertanto, se allo studente vengono mostrati ***n*** elementi, il numero di voti disponibili per ciascun elemento è ***(n - 1)*** e il voto più alto disponibile per la domanda è *** n x (n - 1)***, che è uguale a ***(n² - n)***.

**Relativo all\'elemento successivo (escluso l\'ultimo)**
&nbsp; Un elemento è considerato corretto se è seguito dallo stesso elemento presente nella risposta corretta. L\'elemento nell\'ultima posizione non è selezionato. Pertanto, il punteggio più alto possibile per la domanda è **uno in meno** del numero di elementi visualizzati allo studente.

**Relativo all\'elemento successivo (incluso l\'ultimo)**
&nbsp; Un elemento è considerato corretto se è seguito dallo stesso elemento presente nella risposta corretta. Questo include l\'ultimo elemento che non deve essere seguito da alcun elemento. Pertanto, il punteggio più alto possibile per la domanda è **uguale** al numero di elementi visualizzati dallo studente.

**Relativo sia agli elementi precedenti che a quelli successivi**
&nbsp; Un elemento è considerato corretto se sia l\'elemento precedente che quello successivo sono uguali a quelli della risposta corretta. Il primo elemento non deve avere un elemento precedente e l\'ultimo elemento non deve avere un elemento successivo. Pertanto, ci sono due punti possibili per ciascun elemento e il punteggio più alto possibile per la domanda è **due volte** il numero di elementi visualizzati allo studente.

**Relativo a TUTTI gli elementi precedenti e successivi**
&nbsp; Un elemento è considerato corretto se è preceduto da tutti gli stessi elementi della risposta corretta ed è seguito da tutti gli stessi elementi della risposta corretta. L\'ordine degli elementi precedenti non ha importanza, così come l\'ordine degli elementi successivi. Pertanto, se allo studente vengono mostrati ***n*** elementi, il numero di voti disponibili per ciascun elemento è ***(n - 1)*** e il voto più alto disponibile per la domanda è *** n x (n - 1)***, che è uguale a ***(n² - n)***.

**Sottoinsieme ordinato più lungo**
&nbsp; Il voto è il numero di elementi nel sottoinsieme ordinato di elementi più lungo. Il voto più alto possibile corrisponde al numero di elementi visualizzati. Un sottoinsieme deve contenere almeno due elementi. Non è necessario che i sottoinsiemi inizino dal primo elemento (ma possono farlo) e non è necessario che siano contigui (ma possono esserlo). Se sono presenti più sottoinsiemi di uguale lunghezza, gli elementi del sottoinsieme trovato per primo, durante la ricerca da sinistra a destra, verranno visualizzati come corretti. Gli altri elementi verranno contrassegnati come errati.

**Sottoinsieme contiguo più lungo**
&nbsp; Il voto è il numero di elementi nel sottoinsieme contiguo di elementi più lungo. Il voto più alto possibile corrisponde al numero di elementi visualizzati. Un sottoinsieme deve contenere almeno due elementi. Non è necessario che i sottoinsiemi inizino dal primo elemento (ma possono farlo) e DEVONO ESSERE CONTIGUI. Se sono presenti più sottoinsiemi di uguale lunghezza, gli elementi del sottoinsieme trovato per primo, durante la ricerca da sinistra a destra, verranno visualizzati come corretti. Gli altri elementi verranno contrassegnati come errati.';
$string['highlightresponse'] = 'Evidenzia la risposta come corretta o errata';
$string['horizontal'] = 'Orizzontale';
$string['incorrectitemsnumber'] = 'Elementi errati: {$a}';
$string['layouttype'] = 'Impaginazione elementi';
$string['layouttype_help'] = 'Selezionare se visualizzare gli elementi in verticale o in orizzontale.';
$string['longestcontiguoussubset'] = 'Sottoinsieme contiguo più lungo';
$string['longestorderedsubset'] = 'Sottoinsieme contiguo più lungo';
$string['moved'] = '{$a->item} spostato. Nuova posizione: {$a->position} di {$a->total}.';
$string['moveleft'] = 'Sposta a sinistra';
$string['moveright'] = 'Sposta a destra';
$string['noresponsedetails'] = 'Non sono disponibili dettagli sulla risposta a questa domanda.';
$string['noscore'] = 'Senza punteggio';
$string['notenoughanswers'] = 'Le domande Ordinamento devono avere più di {$a} risposte.';
$string['notenoughsubsetitems'] = 'Un sottoinsieme deve contenere almeno {$a} elementi.';
$string['numberingstyle'] = 'Numero di scelte';
$string['numberingstyle123'] = '1., 2., 3., ...';
$string['numberingstyleABCD'] = 'A., B., C., ...';
$string['numberingstyleIIII'] = 'I., II., III., ...';
$string['numberingstyle_desc'] = 'Lo stile di numerazione di default.';
$string['numberingstyle_help'] = 'Selezionare lo stile di numerazione per gli elementi trascinabili in questa domanda.';
$string['numberingstyleabc'] = 'a., b., c., ...';
$string['numberingstyleiii'] = 'a., b., c., ...';
$string['numberingstylenone'] = 'Nessuna numerazione';
$string['partialitemsnumber'] = 'Elementi parzialmente corretti: {$a}';
$string['pluginname'] = 'Ordinamento';
$string['pluginname_help'] = 'Diversi elementi vengono visualizzati disordinatamente. Gli elementi possono essere trascinati in un ordine significativo.';
$string['pluginname_link'] = 'question/type/ordering';
$string['pluginnameadding'] = 'Inserimento domanda Ordinamento';
$string['pluginnameediting'] = 'Modifica domanda Ordinamento';
$string['pluginnamesummary'] = 'Mettere gli elementi disordinati in un ordine significativo.';
$string['positionx'] = 'Posizione {$a}';
$string['privacy:preference:gradingtype'] = 'Tipi di valutazione.';
$string['privacy:preference:layouttype'] = 'Impaginazione degli elementi.';
$string['privacy:preference:numberingstyle'] = 'Stile della numerazione delle scelte.';
$string['privacy:preference:selectcount'] = 'Conteggio selezionato.';
$string['privacy:preference:selecttype'] = 'Tipo di selezione della voce.';
$string['privacy:preference:showgrading'] = 'Opzione di visualizzazione dei dettagli della valutazione.';
$string['regradeissuenumitemschanged'] = 'Il numero di elementi trascinabili è cambiato.';
$string['relativeallpreviousandnext'] = 'Relativo all\'elemento successivo (escluso l\'ultimo)';
$string['relativenextexcludelast'] = 'Relativo all\'elemento successivo (escluso l\'ultimo)';
$string['relativenextincludelast'] = 'Relativo all\'elemento successivo (incluso l\'ultimo)';
$string['relativeonepreviousandnext'] = 'Relativo sia agli elementi precedenti che a quelli successivi';
$string['relativetocorrect'] = 'Relativo alla posizione corretta';
$string['removeeditor'] = 'Rimuovi editor HTML';
$string['removeitem'] = 'Rimuovi elemento trascinabile';
$string['scoredetails'] = 'Ecco i punteggi per ciascun elemento in questa risposta:';
$string['selectall'] = 'Seleziona tutti gli elementi';
$string['selectcontiguous'] = 'Selezionare un sottoinsieme contiguo di elementi';
$string['selectcount'] = 'Dimensione del sottoinsieme';
$string['selectcount_help'] = 'Il numero di elementi che verranno visualizzati quando la domanda viene visualizzata in un quiz.';
$string['selectrandom'] = 'Seleziona un sottoinsieme casuale di elementi';
$string['selecttype'] = 'Tipo di selezione degli elementi';
$string['selecttype_help'] = 'Selezionare se visualizzare tutti gli elementi o un loro sottoinsieme.';
$string['showgrading'] = 'Dettagli delle valutazioni';
$string['showgrading_help'] = 'Selezionare se visualizzare o nascondere i dettagli del calcolo del punteggio quando uno studente rivede una risposta a questa domanda di tipo Ordinamento.';
$string['vertical'] = 'Verticale';
