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
 * Strings for component 'grouptool', language 'it', version '4.1'.
 *
 * @package     grouptool
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activated_group'] = 'Gruppo attivato';
$string['activated_groups'] = 'Gruppi attivati';
$string['active'] = 'Attivo';
$string['activegroups'] = 'Gruppi attivi';
$string['administration'] = 'Amministrazione';
$string['agroups'] = 'Gruppi attivi';
$string['allow_multiple'] = 'Registrazioni multiple';
$string['allow_multiple_help'] = 'Consente agli studenti di registrarsi in più di 1 gruppo contemporaneamente. E\' necessario specificare il numero minimo  (= gruppi minimi da scegliere) ed il numero massimo (= gruppi massimi da scegliere)';
$string['allow_reg'] = 'Abilita l\'autoregistrazione';
$string['allow_reg_help'] = 'Abilita l\'autoregistrazione per gli studenti in modo che possano registrarsi nei gruppi attivi, che vengono scelti di seguito';
$string['allow_unreg'] = 'Consenti l\'annullamento della registrazione';
$string['allow_unreg_help'] = 'Consente agli studenti di annullare la registrazione o di passare ad altri gruppi prima (facoltativo) della data di scadenza.';
$string['allowed'] = 'Consentito';
$string['already_marked'] = 'Questo gruppo è già contrassegnato per la registrazione!';
$string['already_member'] = '<strong>{$a->username}</strong> è già membro del gruppo <strong>{$a->groupname}</strong>';
$string['already_occupied'] = 'Il posto nel gruppo <strong>{$a->grpname}</strong> è stato già occupato perché un altro utente ha completato la registrazione più velocemente. Per favore cerca un altro gruppo in cui registrarti.';
$string['already_queued'] = '<strong>{$a->username}</strong> è già in coda per la registrazione nel gruppo <strong>{$a->groupname}</strong>!';
$string['already_registered'] = '<strong>{$a->username}</strong> è già registrato nel gruppo <strong>{$a->groupname}</strong>!';
$string['alwaysshowdescription'] = 'Visualizza sempre la descrizione';
$string['alwaysshowdescription_help'] = 'Se disabilitata, la descrizione dello strumento di gruppo sopra sarà visibile agli studenti solo alla data di "Inizio registrazione"';
$string['asterisk_marks_moodle_registrations'] = 'Gli utenti preceduti da un asterisco (*) sono già registrati nel rispettivo gruppo Moodle';
$string['availabledate'] = 'Apertura registrazioni';
$string['availabledate_help'] = 'Inizio del periodo di registrazione. Dopo questa data gli studenti potranno registrarsi nei gruppi selezionati (se abilitati)';
$string['availabledateno'] = 'Sempre disponibile';
$string['calendaravailable'] = 'Apertura registrazioni {$a}';
$string['calendardue'] = 'Termine registrazioni {$a}';
$string['cant_enrol'] = 'Impossibile iscrivere automaticamente l\'utente al corso';
$string['cfg_addinstanceset_head'] = 'Impostazioni aggiuntive dell\'istanza';
$string['cfg_addinstanceset_head_info'] = 'Impostazioni aggiuntive di grouptool';
$string['cfg_admin_head'] = 'Impostazioni predefinite in nella scheda amministrazione';
$string['cfg_admin_head_info'] = 'Impostazioni standard della scheda amministrazione nella vista grouptool';
$string['cfg_allow_multiple'] = 'Registrazioni multiple';
$string['cfg_allow_multiple_desc'] = 'Consente agli studenti di essere registrati per default in più di 1 gruppo contemporaneamente.';
$string['cfg_allow_reg'] = 'Consenti l\'autoregistrazione';
$string['cfg_allow_reg_desc'] = 'Consente agli studenti di registrarsi per default';
$string['cfg_allow_unreg'] = 'Consenti l\'annullamento della registrazione';
$string['cfg_allow_unreg_desc'] = 'Gli utenti devono essere in grado di annullare la registrazione e di cambiare gruppo?';
$string['cfg_choose_max'] = 'Scegli il massimo';
$string['cfg_choose_max_desc'] = 'A quanti gruppi gli utenti devono essere in grado di registrarsi contemporaneamente per default?';
$string['cfg_choose_min'] = 'Scegli il minimo';
$string['cfg_choose_min_desc'] = 'Quanti gruppi hanno utenti per cui scegliere il minimo per default?';
$string['cfg_force_dereg'] = 'Forza l\'annullamento della registrazione in grouptool';
$string['cfg_force_dereg_desc'] = 'Forza la cancellazione non solo da grouptool ma anche da moodle-group.';
$string['cfg_force_importreg'] = 'Forza la registrazione in grouptool';
$string['cfg_groups_queues_limit'] = 'Posti in coda per gruppo';
$string['cfg_groups_queues_limit_desc'] = 'Determina il numero di studenti diversi che possono essere messi in coda in un gruppo contemporaneamente per impostazione predefinita.';
$string['cfg_grpsize'] = 'Dimensione del gruppo standard globale';
$string['cfg_grpsize_desc'] = 'Dimensioni del gruppo standard utilizzate ovunque in grouptoo';
$string['cfg_ifgroupdeleted'] = 'Se i gruppi vengono eliminati';
$string['cfg_ifgroupdeleted_desc'] = 'I gruppi eliminati devono essere ricreati per l\'istanza di grouptool o i riferimenti in grouptool (inclusi i dati di gruppo, le registrazioni e la coda) devono essere eliminati? Nota: se selezioni "Ricrea gruppo", i gruppi verranno ricreati automaticamente dopo l\'eliminazione in "Amministrazione del corso';
$string['cfg_ifmemberadded'] = 'Se vengono aggiunti membri del gruppo';
$string['cfg_ifmemberadded_desc'] = 'I nuovi membri del gruppo aggiunti tramite moodle dovrebbero essere registrati anche in grouptool o essere ignorati?';
$string['cfg_ifmemberremoved'] = 'Se i membri del gruppo vengono rimossi';
$string['cfg_ifmemberremoved_desc'] = 'Le registrazioni di grouptool dovrebbero essere eliminate se gli utenti vengono eliminati dal corrispondente gruppo moodle?';
$string['cfg_immediate_reg'] = 'Registrazione immediata';
$string['cfg_immediate_reg_desc'] = 'Ogni registrazione dovrebbe essere passata ai gruppi moodle?';
$string['cfg_importfields'] = 'Confronta i campi per l\'importazione / cancellazione';
$string['cfg_importfields_desc'] = 'Definisce quali campi nella tabella utente devono essere confrontati con i dati durante l\'importazione / cancellazione degli utenti. I campi vengono cercati uno per uno finché non viene trovata una corrispondenza univoca. I valori possibili / utili sono ad esempio: username, idnumber, email. ATTENZIONE: non c\'è controllo per i nomi di campo corretti. Caratteri consentiti: a-z, A-Z e ","';
$string['cfg_instance_head'] = 'Impostazioni di default dell\'istanza';
$string['cfg_instance_head_info'] = 'Impostazioni di default delle nuove istanze grouptool.';
$string['change_group'] = 'Cambia gruppo';
$string['change_group_to'] = 'Sei sicuro di cambiare il gruppo con <strong>{$a->groupname}</strong>?';
$string['change_group_to_success'] = 'Cambio di gruppo avvenuto con successo! <strong>{$a->username}</strong> è ora registrato nel gruppo <strong>{$a->groupname}</strong>!';
$string['changes_saved'] = 'Modifiche salvate';
$string['checkbox_control_header'] = 'Seleziona / Deseleziona gruppi e raggruppamenti';
$string['choose'] = 'Scegli...';
$string['choose_group'] = 'Devi selezionare un gruppo!';
$string['choose_max'] = 'Numero massimo di gruppi da scegliere';
$string['choose_max_text'] = 'Sei autorizzato a scegliere al massimo <strong>{$a}</strong> gruppi!';
$string['choose_min'] = 'Numero minimo di gruppi da scegliere';
$string['choose_min_max_text'] = 'Devi scegliere tra <strong>{$a->min}</strong> e <strong>{$a->max}</strong> gruppi!';
$string['choose_min_text'] = 'Devi scegliere al massimo';
$string['choose_minmax_title'] = 'Gruppi da scegliere';
$string['choose_targetgroup_import'] = 'Importa nei gruppi';
$string['choose_targetgroup_unregister'] = 'Rimuovi dai gruppi';
$string['chooseactivity'] = 'Devi prima scegliere un\'attività prima di poter visualizzare i dati!';
$string['completiondetail:register'] = 'Registrazione nei gruppi: {$a}';
$string['completionregister'] = 'Lo studente deve essere registrato nel seguente numero di gruppi:';
$string['condition_prevent_access'] = 'Le attuali condizioni non ti permettono di accedere a questa istanza di Grouptool!';
$string['confirm_delete_title'] = 'Vuoi davvero eliminare questo elemento?';
$string['copy'] = 'Copia';
$string['copy_chosen'] = 'Copia selezionato';
$string['createGroups'] = 'Crea gruppi';
$string['create_1_person_groups'] = 'Crea gruppi da 1 persona';
$string['create_assign_groupings'] = 'Crea / Assegna raggruppamenti';
$string['createinsertgrouping'] = 'Aggiungi a raggruppamento';
$string['deactivated_group'] = 'Disabilita gruppo';
$string['deactivated_groups'] = 'Gruppi disabilitati!';
$string['define_amount_groups'] = 'Definisci il numero di gruppi';
$string['define_amount_members'] = 'Definisci il numero di membri per gruppo';
$string['delete_reference'] = 'Elimina da grouptool';
$string['description'] = 'Descrizione';
$string['deselect'] = 'Deseleziona';
$string['determinismerror'] = 'Il termine delle registrazioni non può essere precedente alla data di apertura o essere una data passata.';
$string['digits'] = 'Numero minimo di cifre';
$string['disabled'] = 'Disabilitato';
$string['drag'] = 'Sposta';
$string['due'] = 'Termine registrazioni';
$string['duedate'] = 'Termine della registrazione';
$string['duedateno'] = 'Nessun termine';
$string['eventgroupingscreated'] = 'Raggruppamento creato';
$string['eventregistrationcreated'] = 'Registrazione creata';
$string['eventregistrationdeleted'] = 'Registrazione eliminata';
$string['filters_legend'] = 'Filtro data';
$string['filterunoccupied'] = 'Visualizza solamente i gruppi con posti liberi';
$string['free'] = 'Liberi';
$string['fullgroup'] = 'Il gruppo è pieno';
$string['general_information'] = 'Informazioni generali';
$string['grading'] = 'Valutazione';
$string['grading_activity_title'] = 'Attività';
$string['grading_filter_select_title'] = 'Gruppo o gruppi';
$string['grading_grouping_select_title'] = 'Filtra raggruppamenti';
$string['group_administration'] = 'Gestisci gruppi';
$string['group_creation'] = 'Crea gruppi';
$string['group_creation_alt'] = 'Crea gruppi';
$string['group_creation_failed'] = 'Creazione gruppi fallita!';
$string['group_creation_success'] = 'Gruppi creati correttamente!';
$string['group_not_found'] = 'Il gruppo <strong>{$a->groupid}</strong> non può essere trovato nel grouptool <strong>{$a->grouptoolid}</strong>!';
$string['group_not_in_grouping'] = 'Il gruppo selezionato non è membro del raggruppamento selezionato!';
$string['group_or_member_count'] = 'Conteggio gruppi / membri';
$string['group_places'] = 'Posti disponibili';
$string['groupcreation'] = 'Creazione gruppo';
$string['groupcreationmode'] = 'Modalità';
$string['groupfromtodigits'] = 'Da, a e cifre per il nome dei gruppi:';
$string['groupinfo'] = 'Informazione gruppo';
$string['grouping_creation_error'] = 'Non è stato possibile creare il raggruppamento!';
$string['grouping_creation_error_prev'] = 'Impossibile creare il raggruppamento!';
$string['grouping_creation_only_success'] = 'Raggruppamento creato con successo!';
$string['grouping_creation_only_success_prev'] = 'I raggruppamenti possono essere correttamente creati!';
$string['groupings_created_and_groups_added'] = 'Raggruppamenti creati e/o gruppi creati!';
$string['groupingscreation'] = 'Crea e assegna raggruppamenti';
$string['groupingselect'] = 'Raggruppamenti per i gruppi selezionati';
$string['groupoverview'] = 'Panoramica gruppo';
$string['groups_created'] = 'Gruppi creati correttamente!';
$string['groups_queues_limit'] = 'Dimensione coda per gruppo';
$string['groups_queues_limit_help'] = 'Se attivata, limita i posti disponibili come coda per i gruppi';
$string['groupselection'] = 'Selezione gruppo';
$string['groupsize'] = 'Dimensione gruppo';
$string['groupstatus'] = 'Status';
$string['grouptool'] = 'Grouptool';
$string['grouptool:addinstance'] = 'Aggiungi un\'istanza grouptool al corso.';
$string['grouptool:administrate_groups'] = 'Gestire gruppi e raggruppamenti';
$string['grouptool:create_groupings'] = 'Creare raggruppamenti tramite grouptool';
$string['grouptool:create_groups'] = 'Creare gruppi tramite grouptool';
$string['grouptool:export'] = 'Esportare i dati dei gruppi e delle registrazioni in differenti formati';
$string['grouptool:grade'] = 'Copiare le valutazioni da un membro del gruppo a un altro';
$string['grouptool:grade_own_group'] = 'Copiare le valutazioni da un membro del gruppo a un altro se la valutazione originale è stata data da me';
$string['grouptool:move_students'] = 'Spostare studenti in altri gruppi';
$string['grouptool:register'] = 'Registrarsi in un gruppo tramite grouptool';
$string['grouptool:register_students'] = 'Registrare studenti nei gruppi attivi tramite grouptool';
$string['grouptool:unregister_students'] = 'Annullare la registrazione di studenti dai gruppi tramite grouptool';
$string['grouptool:view_description'] = 'Vedere a registrazione del grouptool';
$string['grouptool:view_groups'] = 'Vedere i gruppi attivi';
$string['grouptool:view_own_registration'] = 'Vedere la proprie registrazioni';
$string['grouptool:view_registrations'] = 'Vedere chi è registrato o in coda nei gruppi tramite grouptool';
$string['grouptool:view_regs_course_overview'] = 'Vedere la lista degli utenti registrati o in coda nei gruppi tramite grouptool';
$string['grouptool:view_regs_course_view'] = 'Vedere la lista degli utenti registrati o in coda nei gruppi tramite grouptool';
$string['grouptool:view_regs_group_overview'] = 'Vedere la lista degli gruppi con gli utenti registrati o in coda nei gruppi tramite grouptool';
$string['grouptool:view_regs_group_view'] = 'Vedere la lista degli gruppi con gli utenti registrati o in coda nei gruppi tramite grouptool';
$string['grouptoolfieldset'] = 'Impostazioni';
$string['grouptoolname'] = 'Nome del grouptool';
$string['grouptoolname_help'] = 'Il nome dell\'istanza di grouptool';
$string['immediate_reg'] = 'Registrazione immediata';
$string['import'] = 'Importa';
$string['import_progress_completed'] = 'Importazione completata';
$string['import_progress_import'] = 'Importa utente';
$string['import_progress_search'] = 'Cerca utente';
$string['import_progress_start'] = 'Inizia importazione';
$string['importbutton'] = 'Importa utenti';
$string['inactive'] = 'Non attivo';
$string['inactivegroups'] = 'Gruppi non attivi';
$string['inactivegroups_hide'] = 'Nascondi gruppi';
$string['inactivegroups_show'] = 'Mostra gruppi non attivi';
$string['includedeleted'] = 'Includi utenti eliminati';
$string['modulename'] = 'Grouptool';
$string['modulenameplural'] = 'Grouptool';
$string['namingscheme'] = 'Schema per il nome';
$string['no_registrations'] = 'Nessuna registrazione';
$string['not_registered'] = 'Non sei ancora registrato!';
$string['number_of_students'] = 'Numero di studenti';
$string['occupied'] = 'Occupati';
$string['onenewgrouping'] = 'In un nuovo raggruppamento';
$string['onenewgroupingpergroup'] = 'Un raggruppamento per gruppo';
$string['pluginname'] = 'Grouptool';
$string['queue'] = 'Coda';
$string['queued'] = 'In coda';
$string['queued_on_rank'] = 'In coda in posizione #{$a}';
$string['queueing_is'] = 'La coda è';
$string['queues'] = 'Code';
$string['register'] = 'Registrati';
$string['register_you_in_group'] = 'Sei sicuro di iscriverti nel gruppo <strong>{$a->groupname}</strong>?';
$string['register_you_in_group_success'] = 'Ti sei registrato nel gruppo <strong>{$a->groupname}</strong>!';
$string['register_you_in_group_successmail'] = 'Ti sei registrato nel gruppo <strong>{$a->groupname}</strong>!';
$string['register_you_in_group_successmailhtml'] = 'Ti sei registratonel gruppo <strong>{$a->groupname}</strong>!';
$string['registered'] = 'Registrato';
$string['registered_in_group_info'] = '{$a->username} registrato nel gruppo <strong>{$a->groupname}</strong>';
$string['registered_on_rank'] = 'Registrato in posizione #{$a}';
$string['registration_missing'] = '1 registrazione mancante';
$string['registration_period_end'] = 'Termina registrazioni per';
$string['registration_period_start'] = 'Inizia registrazioni per';
$string['registrationdue'] = 'Termine delle registrazioni';
$string['registrations'] = 'Registrazioni nel gruppo';
$string['setactive'] = 'Imposta attivo';
$string['setinactive'] = 'Imposta non attivo';
$string['settingspage'] = 'Modifica impostazioni del gruppo';
$string['show_members'] = 'Mostra membri del gruppo';
$string['size'] = 'Dimensione gruppo';
$string['start'] = 'Inizia';
$string['status'] = 'Status';
$string['total'] = 'Totali';
$string['unqueue'] = 'Rimuovi dalla coda';
$string['unreg'] = 'Annulla la registrazione';
$string['unreg_is'] = 'Cancellazione';
$string['unregister'] = 'Cancellazione';
$string['unregister_progress_completed'] = 'Cancellazione completata';
$string['use_queue'] = 'Usa code';
$string['use_size'] = 'Attiva';
$string['user'] = 'Utente';
$string['you_are_already_registered'] = 'Sei già registrato nel gruppo <strong>{$a->groupname}</strong>!';
