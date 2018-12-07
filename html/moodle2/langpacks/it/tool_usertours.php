<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_usertours', language 'it', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_usertours
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Sopra';
$string['actions'] = 'Azioni';
$string['appliesto'] = 'Si applica a';
$string['backdrop'] = 'Visualizza con sfondo';
$string['backdrop_help'] = 'E\' possibile usare uno sfondo per evidenziare la parte di pagina alla quale ci si riferisce.

Nota: gli sfondi non sono compatibili con alcune parti della pagina, come ad esempio la barra di navigazione';
$string['below'] = 'Sotto';
$string['block'] = 'Blocco';
$string['block_named'] = 'Il blocco di nome \'{$a}\'';
$string['cachedef_stepdata'] = 'Elenco dei passi del tour utente';
$string['cachedef_tourdata'] = 'Elenco delle informazioni del tour utente visualizzati su tutte le pagine';
$string['confirmstepremovalquestion'] = 'Sei sicuro di eliminare il passo?';
$string['confirmstepremovaltitle'] = 'Conferma eliminazione passo';
$string['confirmtourremovalquestion'] = 'Sei sicuro di eliminare il tour?';
$string['confirmtourremovaltitle'] = 'Conferma eliminazione tour';
$string['content'] = 'Contenuto';
$string['content_heading'] = 'Contenuto';
$string['content_help'] = 'La descrizione di ciascun passo può essere inserita come testo semplice, eventualmente inserito nei tag multilingua qualora fosse necessario il filtraggio del testo in base alla lingua.

In alternativa è possibile inserire un ID della stringa della lingua con il formato \'identifier, component\', senza aggiungere parentesi o spazi dopo la virgola.';
$string['cssselector'] = 'Selettore CSS';
$string['defaultvalue'] = 'Default ({$a})';
$string['delay'] = 'Ritardo di visualizzazione del passo';
$string['delay_help'] = 'E\' possibile impostare un ritardo di visualizzazione del passo.

Il ritardo è espresso in millisecondi.';
$string['description'] = 'Descrizione';
$string['done'] = 'Fatto';
$string['editstep'] = 'Modifica di "{$a}"';
$string['enabled'] = 'Abilitato';
$string['endtour'] = 'Fine tour';
$string['event_step_shown'] = 'Visualizzato passo';
$string['event_tour_ended'] = 'Terminato tour';
$string['event_tour_reset'] = 'Reimpostato tour';
$string['event_tour_started'] = 'Avviato tour';
$string['exporttour'] = 'Esporta tour';
$string['filter_category'] = 'Categoria';
$string['filter_category_help'] = 'Visualizza il tour in una pagina che è associata a un corso nella categoria selezionata.';
$string['filter_course'] = 'Corsi';
$string['filter_courseformat'] = 'Formato di corso';
$string['filter_courseformat_help'] = 'Visualizza il tour in una pagina che è associata a un corso utilizzando il formato del corso selezionato.';
$string['filter_course_help'] = 'Visualizza il tour su una pagina che è associata al corso selezionato.';
$string['filter_header'] = 'Filtri tour';
$string['filter_help'] = 'Imposta le condizioni di visualizzazione del tour. I filtri devono corrispondere ad un tour da visualizzare all\'utente.';
$string['filter_role'] = 'Ruolo';
$string['filter_role_help'] = 'E\' possibile limitare la visibilità di un tour ad utenti che ricoprono uno specifico ruolo nel contesto dove il tour può essere visualizzato. Da notare che limitare un tour della Dashboard ad utenti che hanno il ruolo di studente non avrà alcun effetto perché gli utenti di solito hanno il ruolo di studente nel contesto del corsi. La visibilità di un tour della Dashboard può essere limitata solo ad utenti che hanno un ruolo di sistema.';
$string['filter_theme'] = 'Tema';
$string['filter_theme_help'] = 'Visualizza il tour quando l\'utente utilizza uno dei temi selezionato.';
$string['importtour'] = 'Importa tour';
$string['left'] = 'Sinistra';
$string['modifyshippedtourwarning'] = 'Questo tour utente è fornito con Moodle. Eventuali modifiche saranno eliminate al prossimo aggiornamento del sito.';
$string['movestepdown'] = 'Sposta il passo sotto';
$string['movestepup'] = 'Sposta  il passo sopra';
$string['movetourdown'] = 'Sposta sotto il tour';
$string['movetourup'] = 'Sposta sopra il tour';
$string['name'] = 'Nome';
$string['newstep'] = 'Aggiungi passo';
$string['newtour'] = 'Crea tour';
$string['next'] = 'Successivo';
$string['options_heading'] = 'Opzioni';
$string['orphan'] = 'Visualizza';
$string['orphan_help'] = 'Visualizza il passo se l\'obiettivo non è presente nella pagina';
$string['pathmatch'] = 'Applica a URL corrispondenti';
$string['pathmatch_help'] = 'I tour saranno visualizzati nelle pagine i cui URL corrisponderanno al valore impostato.

E\' possibile utilizzare il caratteri jolly % per generalizzare le corrispondenze, ad esempio:

* /my/% - corrisponde all\'URL della Dashboard
* /course/view.php?id=2 - corrisponde all\'URL di uno specifico corso
* /mod/forum/view.php% - corrisponde all\'URL dell\'elenco delle discussioni
* /user/profile.php% - corrisponde all\'URL del profilo utente

Per visualizzare un tour nella home page del sito, utilizzare "FRONTPAGE"';
$string['pausetour'] = 'Pausa';
$string['placement'] = 'Posizione';
$string['placement_help'] = 'E\' possibile posizionare un passo sopra, sotto, a destra o a sinistra dell\'obiettivo. Si raccomanda di utilizzare sopra o sotto per una migliore visualizzazione mobile.

Qualora il passo non si adatti ad essere visualizzato nella posizione impostata, sarà posizionato altrove automaticamente.';
$string['pluginname'] = 'Tour utente';
$string['privacy:metadata:preference:completed'] = 'L\'orario nel quale un utente ha più recentemente completato il tour.';
$string['privacy:metadata:preference:requested'] = 'L\'orario nel quale un utente ha più recentemente resettato manualmente il tour.';
$string['privacy:request:preference:completed'] = 'Il {$a->time} hai contrassegnato come completato il tour utente "{$a->name}"';
$string['privacy:request:preference:requested'] = 'Il {$a->time} hai richiesto il tour utente "{$a->name}"';
$string['reflex'] = 'Avanza con click';
$string['reflex_help'] = 'Avanza al passo successivo se viene fatto click sull\'obiettivo';
$string['resettouronpage'] = 'Reimposta il tour utente in questa pagina';
$string['resumetour'] = 'Riprendi';
$string['right'] = 'Destra';
$string['select_block'] = 'Seleziona un blocco';
$string['selector_defaulttitle'] = 'Inserisci un testo descrittivo';
$string['selectordisplayname'] = 'Un selettore CSS corrispondente a \'{$a}\'';
$string['selecttype'] = 'Seleziona il tipo di passo';
$string['sharedtourslink'] = 'Repository dei tour';
$string['skip'] = 'Salta';
$string['target'] = 'Obiettivo';
$string['target_block'] = 'Blocco';
$string['target_heading'] = 'Obiettivo del passo';
$string['target_selector'] = 'Selettore';
$string['target_selector_targetvalue'] = 'Selettori CSS';
$string['target_selector_targetvalue_help'] = 'E\' possibile utilizzare un selettore CSS in quasi tutti gli elementi della pagina, Per individuare il selettore giusto, utilizzare i tool di sviluppo web del browser.';
$string['targettype'] = 'Tipo di obiettivo';
$string['targettype_help'] = 'Ciascun passo può essere associato ad una parte della pagina: l\'obiettivo. Sono disponibili i seguenti tipi di obiettivo:

* Blocco - visualizza un passo vicino al blocco
* Selettore CSS - individua con precisione l\'obiettivo utilizzando i CSS
* Visualizza al centro della pagina - utile quando il passo non richiede l\'associazione con una parte specifica della pagina';
$string['target_unattached'] = 'Visualizza al centro della pagina';
$string['title'] = 'Titolo';
$string['title_help'] = 'Il titolo di ciascun passo può essere inserito come testo semplice, eventualmente inserito nei tag multilingua qualora fosse necessario il filtraggio del testo in base alla lingua.

In alternativa è possibile inserire un ID della stringa della lingua con il formato \'identifier, component\', senza aggiungere parentesi o spazi dopo la virgola.';
$string['tour1_content_addingblocks'] = 'Valuta attentamente l\'inserimento di blocchi poiché nella app Moodle Mobile i blocchi non verranno visualizzati, pertanto è preferibile accertari che il sito funzioni bene senza l\'utilizzo dei blocchi.';
$string['tour1_content_blockregion'] = 'Una regione per i blocchi è ancora disponibile. Si raccomanda di eliminare completamente il blocco Navigazione ed il blocco Amministrazione poiché le stesse funzionalità sono presenti nel tema Boost.';
$string['tour1_content_customisation'] = 'Per personalizzare l\'aspetto del sito e della pagina home, utilizza le impostazioni del menu presente nell\'angolo dell\'intestazione. Prova ad attivare adesso la modalità modifica.';
$string['tour1_content_end'] = 'Sei alla fine del tour utente. Il tour non sarà più visualizzato a meno che venga reimpostato utilizzando il link nel piè di pagina. Un amministratore del sito può anche creare tour personalizzati.';
$string['tour1_content_navigation'] = 'La navigazione avviene ora tramite il cassetto di navigazione, Il contenuto del cassetto cambierà in funzione di dove trovi. Utilizza il pulsante in alto per aprire e chiudere il cassetto.';
$string['tour1_content_welcome'] = 'Benvenuti nel tema Boost per Moodle 3.2. Se hai aggiornato da una versione precedente di Moodle, scoprirai molte novità.';
$string['tour1_title_addingblocks'] = 'Inserimento blocchi';
$string['tour1_title_blockregion'] = 'Regione del blocco';
$string['tour1_title_customisation'] = 'Personalizzazione';
$string['tour1_title_end'] = 'Fine del tour';
$string['tour1_title_navigation'] = 'Navigazione';
$string['tour1_title_welcome'] = 'Benvenuto';
$string['tour2_content_addblock'] = 'Attivando la modalità modifica è possibile aggiungere blocchi dal cassetto di navigazione. Valuta attentamente l\'inserimento di blocchi poiché nella app Moodle Mobile i blocchi non verranno visualizzati, pertanto è preferibile allestire i corsi senza l\'utilizzo dei blocchi, migliorando l\'esperienza degli utenti,';
$string['tour2_content_addingblocks'] = 'E\' possibile aggiungere blocchi utilizzando questo pulsante. Valuta attentamente l\'inserimento di blocchi poiché nella app Moodle Mobile i blocchi non verranno visualizzati, pertanto è preferibile allestire i corsi senza l\'utilizzo dei blocchi, migliorando l\'esperienza degli utenti,';
$string['tour2_content_customisation'] = 'Per modificare le impostazioni del corso, utilizza le impostazioni disponibili nel menu presente nell\'angolo dell\'intestazione. Troverai un menu simile nelle pagine home di tutte le attività. Prova ad attivare adesso la modalità modifica.';
$string['tour2_content_end'] = 'Sei alla fine del tuo tour utente. Il tour non sarà più visualizzato a meno che venga reimpostato utilizzando il link nel piè di pagina. Un amministratore del sito può anche creare tour personalizzati.';
$string['tour2_content_navigation'] = 'La navigazione avviene ora tramite il cassetto di navigazione.Utilizza il pulsante in alto per aprire e chiudere il cassetto. Nel cassetto sono disponibili i collegamenti alle sezioni del corso.';
$string['tour2_content_opendrawer'] = 'Prova ad aprire adesso il cassetto di navigazione.';
$string['tour2_content_participants'] = 'Qui puoi visualizzare i partecipanti ed aggiungere o rimuovere studenti.';
$string['tour2_content_welcome'] = 'Benvenuti nel tema Boost. Se il tuo sito è stato aggiornato da una versione precedente di Moodle, troverai molte novità nella pagina del corso.';
$string['tour2_title_addblock'] = 'Aggiungi un blocco';
$string['tour2_title_addingblocks'] = 'Aggiunta di un blocco';
$string['tour2_title_customisation'] = 'Personalizzazione';
$string['tour2_title_end'] = 'Fine del tour';
$string['tour2_title_navigation'] = 'Navigazione';
$string['tour2_title_opendrawer'] = 'Apri il cassetto di navigazione';
$string['tour2_title_participants'] = 'Partecipanti al corso';
$string['tour2_title_welcome'] = 'Benvenuto';
$string['tourconfig'] = 'File di configurazione tour da importare';
$string['tourisenabled'] = 'Tour abilitato';
$string['tourlist_explanation'] = 'E\' possibile creare tanti tour quanti si vuole ed abilitarli per diverse parti di Moodle. Una pagina può avere un solo tour.';
$string['tour_resetforall'] = 'Lo stato del tour è stato reimpostato. Verrà visualizzato nuovamente a tutti gli utenti.';
$string['tours'] = 'Tour';
$string['usertours'] = 'Tour utente';
$string['usertours:managetours'] = 'Creare, modificare ed eliminare tour utente';
$string['viewtour_edit'] = 'E\' possibile <a href="{$a->editlink}">modificare i default del tour</a> e <a href="{$a->resetlink}">forzare di nuovo la visualizzazione del tour</a> a tutti gli utenti.';
$string['viewtour_info'] = 'Questo è il tour {$a->tourname}\'. Si applica al percorso \'{$a->path}\'.';
