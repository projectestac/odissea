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
$string['allow_multiple'] = 'rRgistrazioni multiple';
$string['allow_multiple_help'] = 'Consente agli studenti di registrarsi in più di 1 gruppo contemporaneamente. E\' necessario specificare il numero minimo  (= gruppi minimi da scegliere) ed il numero massimo (= gruppi massimi da scegliere)';
$string['allow_reg'] = 'Abilita l\'autoregistrazione';
$string['allow_reg_help'] = 'Abilita l\'autoregistrazione per gli studenti in modo che possano registrarsi nei gruppi attivi, che vengono scelti di seguito';
$string['allow_unreg'] = 'Consenti l\'annullamento della registrazione';
$string['allow_unreg_help'] = 'Consente agli studenti di annullare la registrazione o di passare ad altri gruppi prima (facoltativo) della data di scadenza.';
$string['allowed'] = 'Consentito';
$string['already_marked'] = 'Questo gruppo è già contrassegnato per la registrazione!';
$string['alwaysshowdescription'] = 'Visualizza sempre la descrizione';
$string['alwaysshowdescription_help'] = 'Se disabilitata, la descrizione dello strumento di gruppo sopra sarà visibile agli studenti solo alla data di "Inizio registrazione"';
$string['asterisk_marks_moodle_registrations'] = 'Gli utenti preceduti da un asterisco (*) sono già registrati nel rispettivo gruppo Moodle';
$string['availabledate'] = 'Inizio della registrazione';
$string['availabledate_help'] = 'Inizio del periodo di registrazione. Dopo questa data gli studenti potranno registrarsi nei gruppi selezionati (se abilitati)';
$string['availabledateno'] = 'Sempre disponibile';
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
$string['duedate'] = 'Fine della registrazione';
$string['filterunoccupied'] = 'Visualizza solamente i gruppi con posti liberi';
$string['free'] = 'Liberi';
$string['group_places'] = 'Posti disponibili';
$string['not_registered'] = 'Non sei ancora registrato!';
$string['number_of_students'] = 'Numero di studenti';
$string['occupied'] = 'Occupati';
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
$string['registered_on_rank'] = 'Registrato in posizione #{$a}';
$string['registration_missing'] = '1 registrazione disponibile';
$string['registrationdue'] = 'Fine della registrazione';
$string['registrations'] = 'Registrazioni nel gruppo';
$string['start'] = 'Inizia';
$string['total'] = 'Totali';
$string['unqueue'] = 'Rimuovi dalla coda';
$string['unreg'] = 'Annulla la registrazione';
$string['unreg_is'] = 'Cancellazione';
$string['unregister'] = 'Cancellazione';
$string['unregister_progress_completed'] = 'Cancellazione completata';
$string['use_queue'] = 'Usa code';
$string['you_are_already_registered'] = 'Sei già registrato nel gruppo <strong>{$a->groupname}</strong>!';
