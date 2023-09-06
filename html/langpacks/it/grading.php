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
 * Strings for component 'grading', language 'it', version '4.1'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\'  è selezionato come metodo di valutazione attivo per l\'area \'{$a->area}\'';
$string['activemethodinfonone'] = 'Non ci sono metodi di valutazione avanzata per l\'area \'{$a->area}\'. Verrà utilizzata la valutazione semplice diretta.';
$string['changeactivemethod'] = 'Cambia il metodo di valutazione attivo in';
$string['clicktoclose'] = 'click per chiudere';
$string['error:gradingunavailable'] = 'Il metodo di valutazione avanzato non è impostato correttamente. Controllare le opzioni di valutazione dell\'intero forum nelle impostazioni del forum.';
$string['error:notinrange'] = 'La valutazione \'{$a->grade}\' non è valida. le valutazioni devono essere tra 0 e {$a->maxgrade}.';
$string['exc_gradingformelement'] = 'Non è possibile istanziare lo schema di valutazione';
$string['formnotavailable'] = 'È stato selezionato il metodo di valutazione avanzato ma lo schema di valutazione non è ancora pronto. Puoi prepararlo tramite il collegamento disponibile nel blocco Amministrazione';
$string['gradingformunavailable'] = 'Attenzione: il metodo di valutazione avanzato non è ancora pronto all\'uso. Verrà utilizzata la valutazione semplice diretta finché non sarà disponibile uno schema di valutazione valido.';
$string['gradingmanagement'] = 'Valutazione avanzata';
$string['gradingmanagementtitle'] = 'Valutazione avanzata: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Metodo di valutazione';
$string['gradingmethod_help'] = 'È possibile scegliere il metodo di valutazione avanzata da usare per il calcolo dei voti in un determinato contesto.

Per disabilitare la valutazione avanzata ed usare la valutazione default, scegli "Valutazione semplice diretta".';
$string['gradingmethodnone'] = 'Valutazione semplice diretta';
$string['gradingmethods'] = 'Metodi di valutazione';
$string['manageactionclone'] = 'Crea un nuovo schema di valutazione a partire da uno esistente';
$string['manageactiondelete'] = 'Elimina lo schema al momento definito';
$string['manageactiondeleteconfirm'] = 'Stai per eliminare lo schema di valutazione \'{$a->formname}\' e tutte le informazioni associate da \'{$a->component} ({$a->area})\'. Per favore accertati di comprendere bene le conseguenze:

* Non è possibile annullare l\'operazione
* Puoi cambiare il metodo di valutazione senza eliminare questo schema.
* Verranno perdute tutte le informazioni su come è stato realizzato lo schema di valutazione
* I voti presenti nel registro valutatore non verranno modificati, ma non sarà più disponibile la spiegazione di come sono stati calcolati.
* L\'eliminazione non influenza eventuali copie di questo schema usate in altre attività';
$string['manageactiondeletedone'] = 'Lo schema è stato eliminato';
$string['manageactionedit'] = 'Modifica lo schema al momento definito';
$string['manageactionnew'] = 'Crea un nuovo schema di valutazione da zero';
$string['manageactionshare'] = 'Pubblica lo schema come nuovo modello';
$string['manageactionshareconfirm'] = 'Stai per salvare come modello pubblico una copia dello schema di valutazione \'{$a}\' . Altri utenti del sito potranno creare nuovi schemi di valutazione per le loro attività a partire dal tuo modello.';
$string['manageactionsharedone'] = 'Lo schema è stato salvato come modello';
$string['noitemid'] = 'Non è possibile valutare. L\'elemento di valutazione non esiste.';
$string['nosharedformfound'] = 'Non sono stati trovati modelli';
$string['privacy:metadata:grading_definitions'] = 'Informazioni di base su uno schema di valutazione avanzata definito in un\'area valutabile.';
$string['privacy:metadata:grading_definitions:areaid'] = 'ID dell\'area in cui viene definito lo schema di valutazione avanzata.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'ID della definizione della valutazione da cui questa è stata copiata.';
$string['privacy:metadata:grading_definitions:description'] = 'Descrizione del metodo di valutazione avanzata.';
$string['privacy:metadata:grading_definitions:method'] = 'Metodo di valutazione responsabile della definizione.';
$string['privacy:metadata:grading_definitions:name'] = 'Nome della definizione della valutazione avanzata.';
$string['privacy:metadata:grading_definitions:options'] = 'Impostazioni della definizione della valutazione.';
$string['privacy:metadata:grading_definitions:status'] = 'Stato della definizione della valutazione avanzata.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'Data e ora di copia della definizione della valutazione.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'Data e ora di creazione della definizione della valutazione.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'Data e ora dell\'ultima modifica della definizione della valutazione.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'ID dell\'utente che ha creato la definizione della valutazione.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'ID dell\'utente che ha apportato l\'ultima modifica alla definizione della valutazione.';
$string['privacy:metadata:grading_instances:feedback'] = 'Feedback dato dall\'utente.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'Formato di testo del feedback dato dall\'utente.';
$string['privacy:metadata:grading_instances:raterid'] = 'ID dell\'utente che ha valutato l\'istanza.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'Valutazione per l\'istanza.';
$string['privacy:metadata:grading_instances:status'] = 'Stato dell\'istanza di valutazione.';
$string['privacy:metadata:grading_instances:timemodified'] = 'Data e ora dell\'ultima modifica dell\'istanza di valutazione.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Data del metodo di valutazione';
$string['searchownforms'] = 'Includi i miei schemi';
$string['searchtemplate'] = 'Ricerca schemi di valutazione';
$string['searchtemplate_help'] = 'È possibile cercare uno schema di valutazione da usare come modello. Inserisci le parole da cercare nel nome degli schemi, nella descrizione o nel testo dello schema. Per cercare una frase, racchiudi le parole tra doppi apici.

Di default i risultati della ricerca includeranno solo gli schemi salvati come modello. Se lo desideri, puoi includere nei risultati i tuoi schemi, in questo modo puoi riutilizzare facilmente i tuoi schemi senza doverli pubblicare. Possono essere riutilizzati solo gli schemi contrassegnati come "Pronto all\'uso" .';
$string['statusdraft'] = 'Bozza';
$string['statusready'] = 'Pronto all\'uso';
$string['templatedelete'] = 'Elimina';
$string['templatedeleteconfirm'] = 'Stai per eliminare il modello pubblico {$a}\'. L\'eliminazione di un modello non influenzerà gli schemi di valutazione creati a partite da questo schema.';
$string['templateedit'] = 'Modifica';
$string['templatepick'] = 'Usa questo modello';
$string['templatepickconfirm'] = 'Vuoi utilizzare lo schema di valutazione \'{$a->formname}\' come modello per il nuovo schema in \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Usa questo schema come modello';
$string['templatesource'] = 'Locazione: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Schema proprio';
$string['templatetypeshared'] = 'Modello condiviso';
