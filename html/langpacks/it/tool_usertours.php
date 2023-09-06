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
 * Strings for component 'tool_usertours', language 'it', version '4.1'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Sopra';
$string['actions'] = 'Azioni';
$string['appliesto'] = 'Si applica a';
$string['backdrop'] = 'Visualizza con sfondo';
$string['backdrop_help'] = 'È possibile usare uno sfondo per evidenziare la parte di pagina alla quale ci si riferisce.

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
$string['content_help'] = 'La descrizione di ciascun passo può essere inserita come testo semplice, eventualmente inserito nei tag multilingua qualora fosse necessario il filtraggio del testo in base alla lingua.';
$string['content_type'] = 'Tipo di contenuto';
$string['content_type_help'] = '* Inserti manualmente - Il contenuto viene inserito usando l\'editor
* Letti da language pack - Gli ID delle stringhe di lingua possono essere inseriti nel formato identifier,component (senza parentesi o spazi dopo la virgola)';
$string['content_type_langstring'] = 'ID della stringa di lingua';
$string['content_type_manual'] = 'Manuale';
$string['cssselector'] = 'Selettore CSS';
$string['defaultvalue'] = 'Default ({$a})';
$string['delay'] = 'Ritardo di visualizzazione del passo';
$string['delay_help'] = 'È possibile impostare un ritardo di visualizzazione del passo.

Il ritardo è espresso in millisecondi.';
$string['description'] = 'Descrizione';
$string['description_help'] = 'Per la descrizione di un tour è possibile utilizzare testo semplice anche all\'interno di tag multilingua per l\'utilizzo con il filtro multi lingua.

In alternativa, è possibile specificare l\'ID della stringa di lingua utilizzando il formato identifier,component (senza parentesi o spazi dopo la virgola).';
$string['displaystepnumbers'] = 'Visualizza numero di passi';
$string['displaystepnumbers_help'] = 'Consente di visualizzare il numero di passi del tour, ad esempio 1/4, 2/4, in modo da renderne nota la lunghezza.';
$string['done'] = 'Fatto';
$string['duplicatetour'] = 'Duplica tour';
$string['duplicatetour_name'] = '{$a} (copia)';
$string['editstep'] = 'Modifica di "{$a}"';
$string['enabled'] = 'Abilitato';
$string['endonesteptour'] = 'Ho capito';
$string['endtour'] = 'Fine tour';
$string['endtourlabel'] = 'Etichetta del pulsante Fine tour';
$string['endtourlabel_help'] = 'È possibile impostare un\'etichetta personalizzata per il pulsante Fine tour. L\'etichetta di default è "Ho capito" per i tour a passo singolo e "Fine tour" per i tour a più passi.

In alternativa, è possibile specificare l\'ID della stringa di lingua utilizzando il formato identifier,component (senza parentesi o spazi dopo la virgola).';
$string['event_step_shown'] = 'Visualizzazione passo';
$string['event_tour_ended'] = 'Completamento tour';
$string['event_tour_reset'] = 'Reimpostazione tour';
$string['event_tour_started'] = 'Avvio tour';
$string['exporttour'] = 'Esporta tour';
$string['filter_accessdate'] = 'Data di accesso';
$string['filter_accessdate_enabled'] = 'Abilita filtro data di accesso';
$string['filter_accessdate_enabled_help'] = 'Consente di visualizzare tour solo ai nuovi utenti o agli utenti che hanno acceduto recentemente.';
$string['filter_category'] = 'Categoria';
$string['filter_category_help'] = 'Visualizza il tour in una pagina che è associata a un corso nella categoria selezionata.';
$string['filter_course'] = 'Corsi';
$string['filter_course_help'] = 'Visualizza il tour su una pagina che è associata al corso selezionato.';
$string['filter_courseformat'] = 'Formato di corso';
$string['filter_courseformat_help'] = 'Visualizza il tour in una pagina che è associata a un corso utilizzando il formato del corso selezionato.';
$string['filter_cssselector'] = 'Selettore CSS';
$string['filter_cssselector_help'] = 'Visualizza il tour solo se la pagina contiene il selettore CSS';
$string['filter_date_account_creation'] = 'Creazione account utente entro';
$string['filter_date_first_login'] = 'Primo accesso dell\'utente entro';
$string['filter_date_last_login'] = 'Ultimo accesso dell\'utente entro';
$string['filter_header'] = 'Filtri tour';
$string['filter_help'] = 'Imposta le condizioni di visualizzazione del tour. I filtri devono corrispondere ad un tour da visualizzare all\'utente.';
$string['filter_role'] = 'Ruolo';
$string['filter_role_help'] = 'È possibile limitare la visibilità di un tour ad utenti che ricoprono uno specifico ruolo nel contesto dove il tour può essere visualizzato. Da notare che limitare un tour della Dashboard ad utenti che hanno il ruolo di studente non avrà alcun effetto perché gli utenti di solito hanno il ruolo di studente nel contesto del corsi. La visibilità di un tour della Dashboard può essere limitata solo ad utenti che hanno un ruolo di sistema.';
$string['filter_theme'] = 'Tema';
$string['filter_theme_help'] = 'Visualizza il tour quando l\'utente utilizza uno dei temi selezionato.';
$string['importtour'] = 'Importa tour';
$string['invalid_lang_id'] = 'L\'identificativo della lingua non è valido';
$string['left'] = 'Sinistra';
$string['modifyshippedtourwarning'] = 'Questo tour utente è fornito con Moodle. Eventuali modifiche saranno eliminate al prossimo aggiornamento del sito.';
$string['moodle_language_identifier'] = 'ID della stringa di lingua';
$string['movestepdown'] = 'Sposta il passo sotto';
$string['movestepup'] = 'Sposta  il passo sopra';
$string['movetourdown'] = 'Sposta sotto il tour';
$string['movetourup'] = 'Sposta sopra il tour';
$string['name'] = 'Nome';
$string['name_help'] = 'Per il nome di un tour è possibile utilizzare testo semplice anche all\'interno di tag multilingua per l\'utilizzo con il filtro multi lingua.

In alternativa, è possibile specificare l\'ID della stringa di lingua utilizzando il formato identifier,component (senza parentesi o spazi dopo la virgola).';
$string['newstep'] = 'Aggiungi passo';
$string['newtour'] = 'Crea tour';
$string['next'] = 'Prosegui';
$string['nextstep'] = 'Prosegui';
$string['nextstep_sequence'] = 'Prosegui ({$a->position}/{$a->total})';
$string['options_heading'] = 'Opzioni';
$string['orphan'] = 'Visualizza';
$string['orphan_help'] = 'Visualizza il passo se l\'obiettivo non è presente nella pagina';
$string['pathmatch'] = 'Applica a URL corrispondenti';
$string['pathmatch_help'] = 'I tour saranno visualizzati nelle pagine i cui URL corrisponderanno al valore impostato.

È possibile utilizzare il caratteri jolly % per generalizzare le corrispondenze, ad esempio:

* /my/% - corrisponde all\'URL della Dashboard
* /course/view.php?id=2 - corrisponde all\'URL di uno specifico corso
* /mod/forum/view.php% - corrisponde all\'URL dell\'elenco delle discussioni
* /user/profile.php% - corrisponde all\'URL del profilo utente

Per visualizzare un tour nella pagina home del sito, utilizzare "FRONTPAGE".';
$string['pausetour'] = 'Pausa';
$string['placement'] = 'Posizione';
$string['placement_help'] = 'È possibile posizionare un passo sopra, sotto, a destra o a sinistra dell\'obiettivo. Si raccomanda di utilizzare sopra o sotto per una migliore visualizzazione mobile.

Qualora il passo non si adatti ad essere visualizzato nella posizione impostata, sarà posizionato altrove automaticamente.';
$string['pluginname'] = 'Tour utente';
$string['previousstep'] = 'Precedente';
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
$string['skip_tour'] = 'Salta tour';
$string['target'] = 'Obiettivo';
$string['target_block'] = 'Blocco';
$string['target_heading'] = 'Obiettivo del passo';
$string['target_selector'] = 'Selettore';
$string['target_selector_targetvalue'] = 'Selettori CSS';
$string['target_selector_targetvalue_help'] = 'È possibile utilizzare un selettore CSS in quasi tutti gli elementi della pagina, Per individuare il selettore giusto, utilizzare i tool di sviluppo web del browser.';
$string['target_unattached'] = 'Visualizza al centro della pagina';
$string['targettype'] = 'Tipo di obiettivo';
$string['targettype_help'] = 'Ciascun passo può essere associato ad una parte della pagina: l\'obiettivo. Sono disponibili i seguenti tipi di obiettivo:

* Blocco - visualizza un passo vicino al blocco
* Selettore CSS - individua con precisione l\'obiettivo utilizzando i CSS
* Visualizza al centro della pagina - utile quando il passo non richiede l\'associazione con una parte specifica della pagina';
$string['title'] = 'Titolo';
$string['title_help'] = 'Il titolo di ciascun passo può essere inserito come testo semplice, eventualmente inserito nei tag multilingua qualora fosse necessario il filtraggio del testo in base alla lingua.

In alternativa è possibile inserire un ID della stringa della lingua con il formato \'identifier, component\', senza aggiungere parentesi o spazi dopo la virgola.';
$string['tour1_content_addingblocks'] = 'Valuta attentamente l\'inserimento di blocchi poiché nella app Moodle Mobile i blocchi non verranno visualizzati, pertanto è preferibile accertarsi che il sito funzioni bene senza l\'utilizzo dei blocchi.';
$string['tour1_content_blockregion'] = 'Una regione per i blocchi è ancora disponibile. Si raccomanda di eliminare completamente il blocco Navigazione ed il blocco Amministrazione poiché le stesse funzionalità sono presenti nel tema Boost.';
$string['tour1_content_customisation'] = 'Per personalizzare l\'aspetto del sito e della pagina home, utilizza le impostazioni del menu presente nell\'angolo dell\'intestazione. Prova ad attivare adesso la modalità modifica.';
$string['tour1_content_end'] = 'Sei alla fine del tour utente. Il tour non sarà più visualizzato a meno che venga reimpostato utilizzando il link nel piè di pagina. Un amministratore del sito può anche creare tour personalizzati.';
$string['tour1_content_navigation'] = 'La navigazione avviene ora tramite il cassetto di navigazione, Il contenuto del cassetto cambierà in funzione di dove trovi. Utilizza il pulsante in alto per aprire e chiudere il cassetto.';
$string['tour1_content_welcome'] = 'Benvenuti nel tema Boost. Se hai aggiornato da una versione precedente di Moodle, scoprirai molte novità.';
$string['tour1_title_addingblocks'] = 'Inserimento blocchi';
$string['tour1_title_blockregion'] = 'Regione del blocco';
$string['tour1_title_customisation'] = 'Personalizzazione';
$string['tour1_title_end'] = 'Fine del tour';
$string['tour1_title_navigation'] = 'Navigazione';
$string['tour1_title_welcome'] = 'Benvenuto';
$string['tour2_content_addblock'] = 'Attivando la modalità modifica è possibile aggiungere blocchi tramite il cassetto di navigazione. Valutare attentamente l\'inserimento di blocchi poiché nella app Moodle Mobile i blocchi non verranno visualizzati, pertanto è preferibile allestire corsi senza l\'utilizzo dei blocchi, migliorando l\'esperienza degli utenti,';
$string['tour2_content_addingblocks'] = 'È possibile aggiungere blocchi utilizzando questo pulsante. Valutare attentamente l\'inserimento di blocchi poiché nella app Moodle Mobile i blocchi non verranno visualizzati, pertanto è preferibile allestire i corsi senza l\'utilizzo dei blocchi, migliorando l\'esperienza degli utenti,';
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
$string['tour3_content_dashboard'] = 'La nuova dashboard ha tante funzionalità che ti faciliteranno l\'accesso alle informazioni più rilevanti.';
$string['tour3_content_displayoptions'] = 'È possibile ordinare i corsi per nome o per data di accesso.

È possibile anche visualizzarli come elenco, elenco con sommario oppure come matrice.';
$string['tour3_content_overview'] = 'Il blocco Panoramica corsi visualizza tutti i corsi nei quali sei iscritto.

Puoi scegliere di visualizzare i corsi in svolgimento, quelli passati, quelli futuri oppure i corsi preferiti.';
$string['tour3_content_recentcourses'] = 'Il blocco Corsi visitati recentemente mostra gli ultimi corsi che hai visualizzato e ti permette  di raggiungerli velocemente.';
$string['tour3_content_starring'] = 'Puoi aggiungere un corso ai preferiti o nasconderlo se non è più importante.

Queste operazioni influenzano solo la tua visualizzazione.

Puoi anche visualizzarli come elenco, elenco con sommario oppure come matrice.';
$string['tour3_content_timeline'] = 'Il blocco Cronologia mostra i prossimi eventi.

Puoi scegliere di visualizzare le attività della prossima settimana, del prossimo mese o quelle future.

Puoi anche scegliere di visualizzare le attività scadute.';
$string['tour3_title_dashboard'] = 'La tua Dashboard';
$string['tour3_title_displayoptions'] = 'Opzioni di visualizzazione';
$string['tour3_title_overview'] = 'Panoramica corsi';
$string['tour3_title_recentcourses'] = 'Ultimi corsi visitati';
$string['tour3_title_starring'] = 'Aggiungere un corso ai preferiti o nasconderlo';
$string['tour3_title_timeline'] = 'Blocco cronologia';
$string['tour4_content_groupconvo'] = 'Se si appartiene ad un gruppo che ha la messaggistica abilitata, sarà visualizzata qui la conversazione di gruppo.

Le conversazioni di gruppo all\'interno di un corso consentono ai membri di conversare in modo efficacie e riservato.';
$string['tour4_content_icon'] = 'Tramite l\'icona, è possibile accedere ai propri messaggi da qualsiasi pagina.

Se ci sono messaggi non letti, sarà visualizzato il loro numero.

Per continuare, fai click sull\'icona.';
$string['tour4_content_messaging'] = 'Le nuove funzionalità della messaggistica includono la messaggistica di gruppo all\'interno di un corso e un controllo più granulare su chi può i inviarti messaggi.';
$string['tour4_content_settings'] = 'È possibile accedere alle impostazioni dei messaggi tramite l\'icona dell\'ingranaggio, dove sarà possibile impostare coloro che potranno inviarti messaggi.';
$string['tour4_content_starred'] = 'È possibile inserire discussioni tra le preferite in modo da trovarle con più facilità.';
$string['tour4_title_groupconvo'] = 'Messaggi di gruppo';
$string['tour4_title_icon'] = 'Messaggistica';
$string['tour4_title_messaging'] = 'Nuova interfaccia della messaggistica';
$string['tour4_title_settings'] = 'Impostazioni messaggistica';
$string['tour4_title_starred'] = 'Preferiti';
$string['tour_activityinfo_activity_student_content'] = 'Nella pagina delle attività visualizza le date dell\'attività e cosa fare per completarla';
$string['tour_activityinfo_activity_student_title'] = 'Novità: informazioni sull’attività';
$string['tour_activityinfo_activity_teacher_content'] = 'Nella pagina di ciascuna attività (ed opzionalmente nella pagina home dei corsi) agli studenti vengono visualizzate le date e i criteri di completamento.

Le attività che richiedono la spunta manuale per indicare il completamento visualizzeranno il pulsante \'Spunta come completato" nella pagina dell’attività.';
$string['tour_activityinfo_activity_teacher_title'] = 'Novità: informazioni sull’attività';
$string['tour_activityinfo_course_student_content'] = 'Nella pagina del corso visualizza le date dell\'attività e/o cosa fare per completarla';
$string['tour_activityinfo_course_student_title'] = 'Novità: informazioni sull’attività';
$string['tour_activityinfo_course_teacher_content'] = 'L\'impostazione \'Visualizza criteri di completamento\' e \'Visualizza date delle attività\' consentono di visualizzare i criteri di completamento nella home page del corso.';
$string['tour_activityinfo_course_teacher_title'] = 'Novità: informazioni sull’attività';
$string['tour_final_step_content'] = 'Il tour è terminato. Per visualizzarlo di nuovo fai click sul link presente nel piè di pagina.';
$string['tour_final_step_title'] = 'Fine del tour';
$string['tour_navigation_course_announcements_teacher_content'] = '@@PIXICON::tour/tour_course_admin_3::tool_usertours@@<br>Inserire qui le novità importanti.';
$string['tour_navigation_course_announcements_teacher_title'] = 'Informazioni da dare a tutti?';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@@<br>Aggiungere contenuti o modificare gli esistenti.';
$string['tour_navigation_course_edit_teacher_title'] = 'Attivare la modalità modfica';
$string['tour_navigation_course_index_student_content'] = '@@PIXICON::tour/tour_course_student::tool_usertours@@<br>Naviga tra le attività e controlla l\'avanzamento nel corso.';
$string['tour_navigation_course_index_student_title'] = 'Orientarsi';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@@<br>Trascina e rilascia attività per riordinare i contenuti del corso.';
$string['tour_navigation_course_index_teacher_title'] = 'Indice del corso';
$string['tour_navigation_course_student_tour_des'] = 'Dove sfogliare le attività di un corso';
$string['tour_navigation_course_student_tour_name'] = 'Indice del corso';
$string['tour_navigation_course_teacher_tour_des'] = 'Modalità modifica, trascinamento e rilascio delle attività e inserimento di annunci in un corso';
$string['tour_navigation_course_teacher_tour_name'] = 'Modifica del corso';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br>Il pannello laterale può contenere funzionalità aggiuntive.';
$string['tour_navigation_dashboard_title'] = 'Espandi per esplorare';
$string['tour_navigation_dashboard_tour_des'] = 'Dove si trovano i blocchi';
$string['tour_navigation_dashboard_tour_name'] = 'Cassetto dei blocchi';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourses::tool_usertours@@<br>Da questo menu è possibile aggiungere, copiare, nascondere ed eliminare corsi.';
$string['tour_navigation_mycourses_endtourlabel'] = 'Ho capito';
$string['tour_navigation_mycourses_title'] = 'Corsi e categorie';
$string['tour_navigation_mycourses_tour_des'] = 'Le opzioni di gestione della pagina i Miei corsi';
$string['tour_navigation_mycourses_tour_name'] = 'Gestione del corso';
$string['tour_resetforall'] = 'Lo stato del tour è stato reimpostato. Verrà visualizzato nuovamente a tutti gli utenti.';
$string['tourconfig'] = 'File di configurazione tour da importare';
$string['tourisenabled'] = 'Tour abilitato';
$string['tourlist_explanation'] = 'È possibile creare tanti tour quanti si vuole ed abilitarli per diverse parti di Moodle. Una pagina può avere un solo tour.';
$string['tours'] = 'Tour';
$string['usertours'] = 'Tour utente';
$string['usertours:managetours'] = 'Creare, modificare ed eliminare tour utente';
$string['viewtour_edit'] = 'È possibile <a href="{$a->editlink}">modificare i default del tour</a> e <a href="{$a->resetlink}">forzare di nuovo la visualizzazione del tour</a> a tutti gli utenti.';
$string['viewtour_info'] = 'Questo è il tour {$a->tourname}\'. Si applica al percorso \'{$a->path}\'.';
