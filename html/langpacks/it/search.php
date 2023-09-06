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
 * Strings for component 'search', language 'it', version '4.1'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Ricerca avanzata';
$string['all'] = 'Tutti';
$string['allareas'] = 'Tutte le aree';
$string['allcourses'] = 'Tutti i corsi';
$string['allusers'] = 'Tutti gli  utenti';
$string['author'] = 'Autore';
$string['authorname'] = 'Nome dell\'autore';
$string['back'] = 'Indietro';
$string['beadmin'] = 'Bisogna essere amministratori per utilizzare questa pagina.';
$string['checkdb'] = 'Controllo database';
$string['checkdbadvice'] = 'Controllare il database per possibili problemi';
$string['checkdir'] = 'Controllo directory';
$string['checkdiradvice'] = 'Assicurarsi che la directory dati esista e sia scrivibile';
$string['commenton'] = 'Commento su';
$string['confirm_delete'] = 'Sei sicuro di eliminare l\'indice di {$a}? Fino a quando l\'area di ricerca non sarà stata indicizzata, gli utenti non potranno ottenere risultati da quest\'area.';
$string['confirm_deleteall'] = 'Sei sicuro di eliminare tutti i contenuti indicizzati? Fino a quando il sito non sarà stato nuovamente indicizzato,gli utenti non potranno ottenere risultati dalla ricerca.';
$string['confirm_indexall'] = 'Sei sicuro di aggiornare i contenuti indicizzati? L\'attività richiederà molto tempo se sarà necessario indicizzare una grande quantità di contenuti. Per i server in produzione normalmente è sufficiente l\'indicizzazione dell\'attività pianificata "Indicizzazione della ricerca globale".';
$string['confirm_reindexall'] = 'Sei sicuro di re-indicizzare tutti i contenuti del sito? L\'attività richiederà molto tempo se sarà necessario indicizzare una grande quantità di contenuti e gli utenti non otterranno risultati di ricerca completi fino al termine della re-indicizzazione.';
$string['content:courserole'] = '{$a->role} in {$a->course}';
$string['core-all'] = 'Tutto';
$string['core-course-content'] = 'Contenuto dei corsi';
$string['core-courses'] = 'Corsi';
$string['core-other'] = 'Altro';
$string['core-users'] = 'Utenti';
$string['createanindex'] = 'crea un indice';
$string['createdon'] = 'Data di creazione';
$string['database'] = 'Database';
$string['databasestate'] = 'Stato indicizzazione database';
$string['datadirectory'] = 'Directory dati';
$string['deleteindex'] = 'Elimina indice {$a}';
$string['deletionsinindex'] = 'Cancellazioni nell\'indice';
$string['docmodifiedon'] = 'Ultima modifica: {$a}';
$string['doctype'] = 'Tipo documento';
$string['doctypenotsupported'] = 'Il tipo di documento specificato non è ancora supportato.';
$string['documents'] = 'documenti';
$string['documentsfor'] = 'Documenti per';
$string['documentsindatabase'] = 'Documenti nel database';
$string['documentsinindex'] = 'Documenti nell\'indice';
$string['duration'] = 'Durata';
$string['emptydatabaseerror'] = 'La tabella database non è presente o non contiene alcun record indice.';
$string['enginenotfound'] = 'Il motore {$a} non è stato trovato.';
$string['enginenotinstalled'] = 'Il motore {$a} non è installato.';
$string['enginenotselected'] = 'Non hai selezionato nessun motore di ricerca.';
$string['engineserverstatus'] = 'Il motore di ricerca non è disponibile. Per favore contatta l\'amministratore del sito.';
$string['enteryoursearchquery'] = 'Parole da cercare';
$string['error_indexing'] = 'Si è verificato un errore durante l\'indicizzazione';
$string['errorareanotavailable'] = 'L\'area di ricerca {$a} non è disponibile.';
$string['errors'] = 'Errori';
$string['everywhere'] = 'Ovunque sia possibile accedere';
$string['filesinindexdirectory'] = 'Files nella directory indice';
$string['filterheader'] = 'Filtri';
$string['fromtime'] = 'Modificato dopo il';
$string['globalsearch'] = 'Ricerca globale';
$string['globalsearchdisabled'] = 'La ricerca globale non è abilitata';
$string['gradualreindex'] = 'Re-Indicizza gradualmente {$a}';
$string['gradualreindex_confirm'] = 'Sei sicuro di re-indicizzare {$a}? Potrà essere necessario del tempo, anche se i dati esistenti potranno essere usati per effettuare ricerche.';
$string['gradualreindex_queued'] = 'È stata richiesta la re-indicizzazione di {$a->name} ({$a->count} contesti). L\'indicizzazione darà effettuata dall\'elaborazione pianificata "Indicizzazione ricerca globale".';
$string['incourse'] = 'nel corso {$a}';
$string['index'] = 'Indice';
$string['indexwhendisabledfullnotice'] = 'L\'indicizzazione non è consentita quando la ricerca è disabilitata. Per conentirla: <a href="{$a->url}">searchindexwhendisabled</a>';
$string['indexwhendisabledshortnotice'] = 'L\'indicizzazione non è disponibile.';
$string['invalidindexerror'] = 'La directory indice contiene un indice non valido oppure è vuota.';
$string['ittook'] = 'Impiegati';
$string['matchingfile'] = 'Risultati nel file <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Risultati nei file:';
$string['mycoursesonly'] = 'Solo i miei corsi';
$string['next'] = 'Successivo';
$string['noindexmessage'] = 'Admin: Sembra non esistere un indice per la ricerca. Prego';
$string['noresults'] = 'Nessun risultato';
$string['normalsearch'] = 'Rierca normale';
$string['notitle'] = 'Senza titolo';
$string['openedon'] = 'aperto il';
$string['optimize'] = 'Ottimizza';
$string['order'] = 'Ordinamento dei risultati';
$string['order_location'] = 'Dai priorità ai risultati relativi a {$a}';
$string['order_relevance'] = 'Prima i risultati più rilevanti';
$string['priority'] = 'Priorità';
$string['priority_normal'] = 'Normale';
$string['priority_reindexing'] = 'Re-inidicizzazione in corso';
$string['privacy:metadata'] = 'Il sotto sistema di ricerca non memorizza dati personali.';
$string['progress'] = 'Avanzamento';
$string['queryerror'] = 'Il motore di ricerca non ha potuto analizzare la query: {$a}';
$string['queueheading'] = 'Coda addizionale di indicizzazione ({$a} items)';
$string['resultsreturnedfor'] = 'risultati ottenuti per';
$string['runindexer'] = 'Eseguire indexer (reale)';
$string['runindexertest'] = 'Eseguire il test di indexer';
$string['schemanotupdated'] = 'Lo schema di ricerca è obsoleto.';
$string['schemaversionunknown'] = 'Il motore di ricerca non conosce l\'attuale versione dello schema.';
$string['score'] = 'Punteggio';
$string['search'] = 'Ricerca';
$string['search:course'] = 'Corsi';
$string['search:course_teacher'] = 'Docente del corso';
$string['search:customfield'] = 'Campi personalizzati del corso';
$string['search:message_received'] = 'Messaggi - ricevuti';
$string['search:message_sent'] = 'Messaggi - inviati';
$string['search:mycourse'] = 'I miei corsi';
$string['search:section'] = 'Sezioni del corso';
$string['search:user'] = 'Utenti';
$string['searcharea'] = 'Area di ricerca';
$string['searchareacategories'] = 'Area di ricerca categorie';
$string['searching'] = 'Ricerca in ...';
$string['searchnotpermitted'] = 'Non sei autorizzato ad eseguire ricerche';
$string['searchsetupdescription'] = 'I passi seguenti faciliteranno l\'impostazione della ricerca globale di Moodle:';
$string['searchwithin'] = 'Cerca in';
$string['seconds'] = 'secondi';
$string['solutions'] = 'Soluzioni';
$string['statistics'] = 'Statistiche';
$string['step'] = 'Passo';
$string['thesewordshelpimproverank'] = 'Queste parole possono migliorare la graduatoria';
$string['thesewordsmustappear'] = 'Queste parole devono comparire';
$string['thesewordsmustnotappear'] = 'Queste parole non devono comparire';
$string['title'] = 'Titolo';
$string['tofetchtheseresults'] = 'per trovare questi risultati';
$string['topresults'] = 'Risultati principali';
$string['totalsize'] = 'Dimensione totale';
$string['totime'] = 'Modificato prima del';
$string['type'] = 'Tipo';
$string['uncompleteindexingerror'] = 'L\'indicizzazione non è stata completata correttamente, prego ripeterla.';
$string['versiontoolow'] = 'Spiacente, la ricerca globale richiede PHP 5.0.0 o vers. successive';
$string['viewresultincontext'] = 'Visualizza i risultati nel contesto';
$string['wordsintitle'] = 'Parole nel titolo';
