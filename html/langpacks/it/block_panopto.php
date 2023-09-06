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
 * Strings for component 'block_panopto', language 'it', version '4.1'.
 *
 * @package     block_panopto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_a_panopto_server'] = 'Nessuno - Aggiungere un server/appkey Panopto per continuare';
$string['add_to_panopto'] = 'Sincronizza il corso con Panopto';
$string['api_manager_unavailable'] = 'Impossibile creare il client API manager {$a}! (Il server Panopto è disponibile, e in tal caso il nome dell\'istanza e la chiave dell\'applicazione sono corretti?)';
$string['application_key'] = 'Chiave applicazione';
$string['async_wait_warning'] = 'Le attività asincrone causeranno un ritardo prima di sincronizzare gli utenti. Di solito si tratta di 5-15 minuti, ma può cambiare a seconda della configurazione di Moodle.';
$string['attempt_provision_course'] = 'Si sta tentando di eseguire il provisioning di una cartella Panopto con un Id esterno di: {$a}.';
$string['attempt_sync_user'] = 'Tentativo di sincronizzare un utente con un Id di {$a} con Panopto.';
$string['attempt_sync_user_server'] = 'Il server di destinazione del tentativo di sincronizzazione è {$a}.';
$string['attempt_unprovision_course'] = 'Tentativo di cancellare il provvedimento della cartella Panopto con un Id esterno di {$a}.';
$string['attempted_import_course_id'] = 'Id Moodle del corso di importazione di sorgente';
$string['attempted_moodle_course_id'] = 'Tentativo di corso Moodle Id';
$string['attempted_panopto_server'] = 'Tentativo di server Panopto';
$string['attempted_provisioning_personal_folder'] = 'Si è tentato di eseguire il provisioning in una cartella personale; al momento questa non è un\'azione supportata da Panopto. La invitiamo a mappare il corso in una cartella diversa attraverso la configurazione dell\'istanza di blocco e a riprovare il provisioning.';
$string['attempted_target_course_id'] = 'ID Moodle del corso di destinazione';
$string['attribute_ensure_branch_failed'] = 'Garantisci l\'errore del ramo';
$string['attribute_ensured_branch'] = 'Garantisci la gerarchia delle rami';
$string['attribute_new_name'] = 'Nuovo nome della cartella';
$string['attribute_original_name'] = 'Nome originale della cartella';
$string['attribute_target_branch_leaf'] = 'Nome della categoria del nodo fogliare del ramo di destinazione';
$string['attribute_target_panopto_server'] = 'Destinazione del server Panopto';
$string['autoprovision_new_courses'] = 'Provisioning automatico dei corsi appena creati';
$string['autoprovision_off'] = 'Nessun provisioning automatico dei corsi appena creati';
$string['autoprovision_on_block_view'] = 'Provisioning automatico quando il blocco Panopto viene visualizzato per la prima volta';
$string['back_to_config'] = 'Ritorna alla configurazione';
$string['back_to_course'] = 'Ritorna al corso';
$string['begin_building_category_structure'] = 'Inizia a costruire la struttura delle categorie';
$string['begin_reinitializing_imports'] = 'Inizia a reinizializzare le importazioni';
$string['block_edit_error'] = 'Impossibile configurare l\'istanza di blocco: Configurazione globale incompleta. Si rivolga al suo amministratore di sistema.';
$string['block_edit_header'] = 'Selezionare la cartella del corso Panopto da visualizzare in questo blocco.';
$string['block_edit_header_help'] = 'Scelgiere una cartella di corsi Panopto esistente o provvigiona una nuova cartella di corsi Panopto per questo blocco.';
$string['block_global_add_courses'] = 'Aggiungi corsi Moodle su Panopto';
$string['block_global_application_key'] = 'Chiave applicazione';
$string['block_global_application_key_desc'] = 'Inserisca la chiave di applicazione dalla pagina dei provider di identità di Panopto.';
$string['block_global_build_category_structure'] = 'Sincronizza tutte le categorie Moodle su Panopto';
$string['block_global_hostname'] = 'Nome host del server Panopto';
$string['block_global_hostname_desc'] = 'Inserire il FQDN del suo server Panopto. Ad esempio, demo.example.panopto.com';
$string['block_global_instance_desc'] = 'Inserisca il nome dell\'istanza dalla pagina dei provider di identità di Panopto.';
$string['block_global_instance_name'] = 'Nome dell\'istanza Moodle';
$string['block_global_panopto_bulk_and_batch_tools'] = 'Strumenti per operazioni in serie e batch';
$string['block_global_panopto_folder_and_category_options'] = 'Opzioni di cartella e categoria';
$string['block_global_panopto_http_and_debug_settings'] = 'Opzioni Http e di debug';
$string['block_global_panopto_role_options'] = 'Opzioni di ruolo Panopto';
$string['block_global_panopto_server_config'] = 'Configurazione del server Panopto';
$string['block_global_panopto_syncing_options'] = 'Opzioni di sincronizzazione Panopto';
$string['block_global_reinitialize_all_imports'] = 'Reinizializza tutte le importazioni di cartelle Panopto';
$string['block_global_rename_all_folders'] = 'Aggiorna tutti i nomi delle cartelle di Panopto';
$string['block_global_unprovision_courses'] = 'Annulla il provisioning delle cartelle Panopto dai corsi Moodle';
$string['block_global_upgrade_all_folders'] = 'Aggiorna tutte le cartelle e le importazioni esistenti';
$string['block_panopto_any_creator_can_view_folder_settings'] = 'Consente a tutti gli utenti con accesso Creatore di vedere i link alle impostazioni delle cartelle Panopto';
$string['block_panopto_any_creator_can_view_folder_settings_desc'] = 'Quando è attivato, qualsiasi utente con ruolo di Creatore nella cartella può visualizzare il link alle impostazioni. Per impostazione predefinita, solo gli istruttori dei corsi possono visualizzare il link delle impostazioni del corso.';
$string['block_panopto_anyone_view_recorder_links'] = 'Consente a tutti i ruoli di accedere ai link per il download del registratore';
$string['block_panopto_anyone_view_recorder_links_desc'] = 'Quando è attivato, gli spettatori possono accedere ai link di download del registratore. Per impostazione predefinita, solo gli utenti con accesso al Creatore e/o al provisioning di una cartella possono visualizzare i link di download.';
$string['block_panopto_async_tasks'] = 'Attiva le attività di sincronizzazione asincrona (non raccomandato).';
$string['block_panopto_async_tasks_desc'] = 'Quando è selezionata, le operazioni di login, iscrizione, disiscrizione, applicazione della categoria e cancellazione dell\'utente avvengono in modo asincrono.
Se questa opzione è deselezionata, queste operazioni avvengono nel gestore di eventi in modo sincrono. Poiché è difficile rilevare il fallimento in modo tempestivo, non raccomandiamo questa opzione.';
$string['block_panopto_auto_add_block_to_new_courses'] = 'Aggiungi automaticamente un blocco Panopto ai nuovi corsi';
$string['block_panopto_auto_add_block_to_new_courses_desc'] = 'Quando è selezionato, il blocco Panopto viene inserito automaticamente in tutti i nuovi corsi Moodle';
$string['block_panopto_auto_insert_lti_link_to_new_courses'] = 'Crea automaticamente un link a una cartella di corsi LTI per i nuovi corsi.';
$string['block_panopto_auto_insert_lti_link_to_new_courses_desc'] = 'Quando è selezionato, un link a una cartella del corso LTI verrà aggiunto automaticamente nella prima sezione disponibile della pagina del suo corso Moodle.';
$string['block_panopto_auto_provision'] = 'Crea automaticamente i corsi';
$string['block_panopto_auto_provision_desc'] = 'Questa opzione può essere impostata per creare automaticamente una cartella di corsi Panopto quando viene creato un corso. Questa opzione può anche essere impostata per fornire automaticamente un corso quando il blocco Panopto viene visualizzato per la prima volta.';
$string['block_panopto_auto_sync_imports'] = 'Concedi automaticamente permessi durante l\'importazione di un corso';
$string['block_panopto_auto_sync_imports_desc'] = 'Quando è selezionato, Panopto concede automaticamente i permessi di spettatore quando importa un corso.';
$string['block_panopto_automatic_operation_target_server'] = 'Funzionamento automatico server di destinazione';
$string['block_panopto_automatic_operation_target_server_desc'] = 'Selezionare il server Panopto che sarà destinato alle attività \'Provisioning automatico dei corsi appena creati\', \'Sincronizza l\'utente al momento dell\'accesso\' e \'Applica la struttura delle categorie\'.';
$string['block_panopto_check_server_interval'] = 'Intervallo di controllo dello stato di salute del server';
$string['block_panopto_check_server_interval_desc'] = 'Con quale frequenza il controllo dello stato di salute del server deve tentare di connettersi al server Panopto. Il risultato sarà salvato e memorizzato nella cache fino al prossimo controllo di salute.';
$string['block_panopto_check_server_status'] = 'Controlla la salute del server prima di caricare il blocco';
$string['block_panopto_check_server_status_desc'] = 'Quando è selezionato, il server Panopto di destinazione viene controllato per assicurarsi che sia in funzione, per evitare chiamate di timeout potenzialmente lunghe quando il server non è raggiungibile.
Questa opzione è deselezionata per impostazione predefinita, in quanto utilizza una funzione dipendente dalla piattaforma / dal sistema operativo. Dovrebbe essere selezionato solo se le è stato consigliato dall\'Assistenza Panopto.';
$string['block_panopto_creator_mapping'] = 'Mappatura del ruolo creatore';
$string['block_panopto_creator_mapping_desc'] = 'Selezionare quali ruoli di corso sono impostati come creatori nelle nuove cartelle di corsi Panopto.';
$string['block_panopto_enforce_category_after_course_provision'] = 'Crea cartelle di categoria nella (ri)provvedimento del corso';
$string['block_panopto_enforce_category_after_course_provision_desc'] = 'Quando è attivato, il (re)provisioning creerà delle cartelle per le categorie in cui si trova il corso, oltre alla cartella del corso stesso.';
$string['block_panopto_enforce_category_structure'] = 'Sincronizza le categorie nuove e spostate con Panopto';
$string['block_panopto_enforce_category_structure_desc'] = 'Quando è attivato, ogni volta che una categoria viene creata o spostata, la sua struttura di categoria verrà rispecchiata sul sito Panopto.';
$string['block_panopto_enforce_https_on_wsdl'] = 'Applica l\'HTTPS sulle chiamate API di Panopto';
$string['block_panopto_enforce_https_on_wsdl_desc'] = 'Quando è attivato, gli endpoint HTTPS sono utilizzati per le chiamate API di Panopto.
Questa impostazione è fortemente consigliata.';
$string['block_panopto_folder_name_style'] = 'Visualizzazione del nome della cartella Panopto';
$string['block_panopto_folder_name_style_desc'] = 'Selezionare il modo in cui le nuove cartelle Panopto appaiono nel blocco Moodle.';
$string['block_panopto_non_editing_teacher_provision'] = 'Consenti all\'insegnante non revisore di provvedere';
$string['block_panopto_non_editing_teacher_provision_desc'] = 'Quando è attivato, questa opzione consente ai docenti non editori di provvedere alle cartelle dei corsi Panopto.';
$string['block_panopto_panopto_connection_timeout'] = 'Timeout della connessione Panopto';
$string['block_panopto_panopto_connection_timeout_desc'] = 'In secondi, questa è la durata del timeout per la connessione a Panopto. Questo valore deve essere modificato solo se consigliato dal Supporto Panopto.';
$string['block_panopto_panopto_socket_timeout'] = 'Timeout del socket di Panopto';
$string['block_panopto_panopto_socket_timeout_desc'] = 'In secondi, la durata del tempo in cui il plugin attenderà che Panopto completi un\'attività dopo la connessione. Questo valore deve essere modificato solo se consigliato dal Supporto Panopto.';
$string['block_panopto_print_log_to_file'] = 'Reindirizza i registri degli errori a un file di testo';
$string['block_panopto_print_log_to_file_desc'] = 'Quando è selezionata, la registrazione di Panopto dal log_errori di PHP sarà reindirizzata a un file .txt, "PanoptoLogs.txt" all\'interno della directory di base di Moodle.  Questa opzione deve essere selezionata solo se il Supporto Panopto la consiglia.';
$string['block_panopto_print_verbose_logs'] = 'Stampar  registri verbosi';
$string['block_panopto_print_verbose_logs_desc'] = 'Quando viene selezionato, verranno aggiunti altri log al Panopto PHP error_log. Questa opzione dovrebbe essere selezionata solo se necessaria per scopi di debug.';
$string['block_panopto_publisher_mapping'] = 'Mappatura dei ruoli dell\'editore';
$string['block_panopto_publisher_mapping_desc'] = 'Selezionare quali ruoli di corso sono impostati come editori nelle nuove cartelle di corsi Panopto.';
$string['block_panopto_publisher_system_role_mapping'] = 'Ruoli di sistema con permessi di provvedimento';
$string['block_panopto_publisher_system_role_mapping_desc'] = 'Selezionare quali ruoli del sistema possono provvigionare nuove cartelle di corsi Panopto. L\'aggiunta di ruoli a questa impostazione può avere un impatto sulle prestazioni nei sistemi più grandi.';
$string['block_panopto_server_number_desc'] = 'Cliccare su \'Salva modifiche\' per aggiornare il numero di server.';
$string['block_panopto_server_number_name'] = 'Numero di server Panopto';
$string['block_panopto_sso_sync_type'] = 'Comportamento della sincronizzazione SSO di Panopto';
$string['block_panopto_sync_after_login'] = 'Autentica e sincronizza Panopto con l\'accesso a Moodle (non raccomandato).';
$string['block_panopto_sync_after_provisioning'] = 'Sincronizza gli utenti iscritti dopo aver effettuato con successo il provisioning (non raccomandato)';
$string['block_panopto_sync_on_enrolment'] = 'Sincronizza gli utenti dopo l\'iscrizione alla lezione (opzionale)';
$string['block_panopto_wsdl_proxy_host'] = 'Host Proxy WSDL';
$string['block_panopto_wsdl_proxy_host_desc'] = 'Opzionalmente, è possibile aggiungere l\'indirizzo host utilizzato come proxy per qualsiasi servizio Panopto WSDL.';
$string['block_panopto_wsdl_proxy_port'] = 'Porta proxy WSDL';
$string['block_panopto_wsdl_proxy_port_desc'] = 'Opzionalmente, è possibile aggiungere la porta utilizzata come proxy per qualsiasi servizio Panopto WSDL.';
$string['build_category_structure_start'] = 'Avvio mappatura di tutte le categorie di Moodle su {$a}.';
$string['bulk_remove_all_adhoc_task'] = 'Rimozione di tutti i compiti Panopto adhoc in coda';
$string['bulk_rename_single_failed'] = 'Non è stato possibile aggiornare il nome della cartella associata all\'Id del corso Moodle {$a}';
$string['bulk_rename_single_success'] = 'La cartella associata al corso Moodle con Id {$a->moodleid} è stata rinominata correttamente. Nome precedente: {$a->oldname}, Nuovo nome: {$a->newname}';
$string['bulk_rename_single_unnecessary'] = 'Non è necessario rinominare, la cartella corrisponde già al nome del corso di {$a}.';
$string['bulk_rename_start_button'] = 'Avvio modifica nome delle cartelle';
$string['bulk_rename_start_renaming'] = 'Avvio aggiornamento di  tutti i nomi delle cartelle';
$string['bulk_reprovision_begin_reprovision'] = 'Ricreazione di corsi verificati';
$string['bulk_reprovision_start'] = 'Aggiornamento di tutte le cartelle di panopto';
$string['bulk_reprovision_start_button'] = 'Avvio aggiornamento cartelle';
$string['bulk_task_access_error'] = 'BULK TASK BLOCCATO: l\'utente {$a} non ha accesso a una cartella di corsi Panopto provvisti. L\'utente che lavora deve avere almeno un accesso come spettatore a tutte le cartelle dei corsi Panopto per le operazioni di massa. Si raccomanda vivamente che l\'utente che lavora sia un Amministratore di Panopto.';
$string['bulk_task_contact_support'] = 'Per qualsiasi domanda, aprire un ticket di assistenza Panopto.';
$string['bulk_task_new_step'] = 'Inizio del passo: {$a}';
$string['bulk_task_reached_count'] = 'E\' stato raggiunto il numero di cartelle desiderato, inizia il passaggio successivo';
$string['bulk_task_rename_cli_command'] = 'php -f rename_all_folders_cli.php';
$string['bulk_task_reprovision_cli_command'] = 'php -f upgrade_all_folders_cli.php';
$string['bulk_task_skipping_folder'] = 'Salta la cartella {$a}';
$string['bulk_task_update_progress'] = 'Elaborazione della cartella {$a->currentprogress} da {$a->totalitems}';
$string['bulk_task_version_error'] = 'Errore nell\'operazione Panopto Bulk - Il server Panopto richiede una versione più recente';
$string['bulk_task_working_count'] = 'Avvio sulla cartella {$a->beginningindex} ed elaborazione fino alla cartella {$a->endingindex}.';
$string['categories_need_newer_panopto'] = 'Eseguire il comando con i seguenti argomenti \'build_category_structure.php <panoptoservername> <applicationkey>\'.';
$string['cli_heading_build_category_structure'] = 'Sincronizza tutte le categorie Moodle su Panopto';
$string['completed_recordings'] = 'Registrazioni completate';
$string['copy_access_error'] = 'L\'utente non ha accesso alla cartella Panopto linkata all\'importazione del corso sorgente con Id di {$a->importedcourseid}.';
$string['course'] = 'Corso';
$string['course_already_provisioned'] = 'Questo corso è già stato fornito di una cartella con un Id pubblico di: {$a}.';
$string['course_has_invalid_panopto_data'] = 'Il corso Moodle di destinazione non è associato a una cartella Panopto valida.';
$string['course_name'] = 'Titolo del corso';
$string['course_settings'] = 'Impostazioni del corso';
$string['creator'] = 'Creatore';
$string['creator_help'] = 'L\'utente Creatore può creare e modificare il contenuto in Panopto';
$string['creators'] = 'Creatori';
$string['current_version'] = 'Versione attuale: {$a}';
$string['current_version_attr'] = 'Versione attuale';
$string['download_recorder'] = 'Scarica il registratore';
$string['ensure_category_branch_failed'] = 'La call per assicurare il ramo di categoria non è andata a buon fine, si prega di consultare il log di Panopto per maggiori dettagli.';
$string['ensure_category_branch_start'] = 'Iniziare a garantire il ramo di categoria per la categoria foglia: {$a->categoryname} sul server Panopto {$a->targetserver}.';
$string['ensure_category_branch_success'] = 'Il ramo categoriale è assicurato con la seguente struttura: \\n {$a}';
$string['error_invalid_category_information'] = 'La categoria di destinazione non contiene informazioni valide.';
$string['error_no_admin_account_found'] = 'Errore: Non è stato trovato alcun account amministratore';
$string['error_retrieving'] = 'Errore nel recupero della cartella dei corsi Panopto. Controlli il log degli errori di PHP per maggiori dettagli.';
$string['existing_course'] = 'Selezionare una cartella Panopto esistente che non sia già mappata su un altro corso:';
$string['fetching_content'] = 'Recupero del contenuto Panopto...';
$string['folder_not_found_error'] = 'Non è stata trovata la cartella Panopto associata al corso Moodle, forse la cartella è stata eliminata. Il provisioning continuerà collegandosi alla cartella Moodle predefinita oppure creandone qualora non esista.';
$string['get_provisioning_info'] = 'Tentativo di ottenere informazioni sul provisioning per un corso con l\'ID Moodle: {$a}.';
$string['groups_getting_synced'] = 'Gruppi da sincronizzare con questa call: {$a}';
$string['impacted_server'] = 'Server impattato: {$a}';
$string['impacted_server_attr'] = 'Server impattato';
$string['import_success'] = 'Il corso con Id {$a->importedcourseid} è stato importato correttamente.';
$string['init_import_source'] = 'Tentativo di importazione del corso Moodle sorgente Id: {$a}.';
$string['init_import_target'] = 'Tentativo di importazione del corso Moodle di destinazione Id: {$a}.';
$string['invalid_folder_information'] = 'Le informazioni Panopto per questo corso non sono valide. La preghiamo di riprovvedere a questo corso.';
$string['links'] = 'Collegamenti';
$string['live_sessions'] = 'Sessioni live';
$string['minimum_required_version'] = 'Versione minima richiesta: {$a}';
$string['minimum_required_version_attr'] = 'Versione minima richiesta';
$string['missing_moodle_required_version'] = 'Il blocco Panopto richiede una versione di Moodle più recente di {$a->requiredversion}, la sua versione attuale di Moodle è: {$a->currentversion}.';
$string['moodle_course_not_exist'] = 'Spostando la riga nella vecchia cartella, il corso non esisteva all\'interno di Moodle.';
$string['name_style_combination'] = '[nome breve]: [nome completo]';
$string['name_style_fullname'] = '[nome completo]';
$string['name_style_shortname'] = '[nome breve]';
$string['no_access'] = 'Non sei autorizzato a visualizzare questa cartella di Panopto.';
$string['no_completed_recordings'] = 'Nessuna registrazione completata';
$string['no_course_selected'] = 'Nessuna cartella di corsi Panopto selezionata';
$string['no_creators'] = 'Nessun creatore';
$string['no_folder_associated_with_moodle_id'] = 'Nessuna cartella Panopto à stata associata a un corso Moodle con Id {$a}';
$string['no_live_sessions'] = 'Nessuna sessione live';
$string['no_publishers'] = 'Nessun editore';
$string['no_server'] = 'Non ci sono server impostati per il provisioning. Contatti l\'amministratore del sistema.';
$string['no_users_synced_desc'] = 'Tutti gli utenti iscritti al corso verranno sincronizzati con Panopto non appena visualizzeranno il blocco Panopto nel corso.';
$string['no_viewers'] = 'Nessun spettatore';
$string['or'] = 'o';
$string['panopto:addinstance'] = 'Aggiungere un nuovo blocco Panopto';
$string['panopto:myaddinstance'] = 'Aggiungere un nuovo blocco Panopto alla dashboard';
$string['panopto:provision_aspublisher'] = 'Creazione di un editore';
$string['panopto:provision_asteacher'] = 'Creazione di un docente';
$string['panopto:provision_course'] = 'Creare un corso';
$string['panopto:provision_multiple'] = 'Creare più corsi contemporaneamente';
$string['panopto_server_error'] = 'Il server Panopto {$a} ha restituito un errore del server, riproverà al prossimo accesso.';
$string['pluginname'] = 'Panopto';
$string['podcast_audio'] = 'Audio podcast';
$string['podcast_feeds'] = 'Podcast feeds';
$string['podcast_video'] = 'Video podcast';
$string['provision'] = 'Creazione';
$string['provision_course_link_text'] = 'Attiva il corso su Panopto';
$string['provision_courses'] = 'Creazione di corsi';
$string['provision_successful'] = 'Attivazione del corso avvenuta con successo, cartella del corso con Id: {$a}';
$string['provisioncourseselect'] = 'Selezionare i corsi da attivare.';
$string['publisher'] = 'Editore';
$string['publisher_help'] = 'Un Editore può approvare i contenuti inviati dai Creatori.';
$string['publishers'] = 'Editori';
$string['result'] = 'Risultati';
$string['role_map_header'] = 'Modifica le mappature dei ruoli di Panopto';
$string['server_name'] = 'Nome del server';
$string['server_not_available'] = 'Il server Panopto {$a} non era disponibile. Il server potrebbe essere inattivo';
$string['show_all'] = 'Visualizza tutto';
$string['show_less'] = 'Visualizza meno';
$string['take_notes'] = 'Prendi note';
$string['unknown_provisioning_error'] = 'Si è verificato un errore sconosciuto.';
$string['unprovisioned'] = 'Questo corso non è ancora stato attivato.';
$string['viewers'] = 'Visualizzatori';
$string['watch_live'] = 'Visualizza live';
