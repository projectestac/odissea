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
 * Strings for component 'groupselect', language 'it', version '4.1'.
 *
 * @package     groupselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Azioni';
$string['assignedteacher'] = 'Supervisore';
$string['assigngroup'] = 'Assegna supervisori ai gruppi';
$string['assigngroup_help'] = 'Se impostato, sarà visualizzato un pulsante per assegnare i supervisori ai gruppi (se il corso ha supervisori). I supervisori assegnati non sono partecipanti del gruppo, ma possono essere mostrati nel file di esportazione e nella schermata principale. Utile in caso di corsi con assistenti che gestiscono i gruppi. Questa autorizzazione può essere gestita anche nelle autorizzazioni del ruolo.';
$string['cannotselectclosed'] = 'Non puoi più aggiungerti al gruppo';
$string['cannotselectmaxed'] = 'Non puoi aggiungerti al gruppo {$a} - il massimo numero di partecipanti è stato raggiunto';
$string['cannotselectnocap'] = 'Non sei autorizzato a selezionare il gruppo.';
$string['cannotselectnoenrol'] = 'Devi essere iscritto nel corso per poterti iscrivere ad un gruppo.';
$string['cannotunselectclosed'] = 'Non puoi più abbandonare il gruppo.';
$string['creategroup'] = 'Crea un nuovo gruppo';
$string['deleteallgrouppasswords'] = 'Elimina le password da tutti i gruppi';
$string['deleteemptygroups'] = 'Elimina gruppo quando l\'ultimo partecipante abbandona';
$string['deleteemptygroups_help'] = 'Se impostato, elimina automaticamente il gruppo quando l\'ultimo partecipante lo abbandona.';
$string['description'] = 'Descrizione del gruppo';
$string['duedate'] = 'Scadenza';
$string['edittooltip'] = 'Clicca per modificare';
$string['enablepermissions'] = 'Autorizzazioni generali';
$string['eventexportlinkcreated'] = 'Esporta link creato';
$string['eventgroupteacheradded'] = 'Docente supervisore aggiunto';
$string['export'] = 'Crea un link di download per i dati dei gruppi (CSV)';
$string['export_download'] = 'Scarica file CSV';
$string['fromallgroups'] = 'Tutti i gruppi';
$string['globalpassword_help'] = 'Imposta un password per iscriversi al gruppo. Sovrascrive le password impostate dai partecipanti.';
$string['groupid'] = 'ID gruppo';
$string['groupselect:addinstance'] = 'Aggiungere un nuovo Auto-Selezione Gruppo';
$string['groupselect:assign'] = 'Assegnare supervisori ai gruppi';
$string['groupselect:create'] = 'Creare gruppi';
$string['groupselect:export'] = 'Esportare i partecipanti dei gruppi';
$string['groupselect:select'] = 'Diventare un partecipante del gruppo';
$string['groupselect:unselect'] = 'Abbandonare un gruppo';
$string['hidefullgroups'] = 'Nascondi "Tutti i gruppi" dalla vista principale';
$string['hidefullgroups_help'] = 'Se impostato, tutti i gruppi che avranno raggiunto la capienza massima saranno nascosti (a esclusione del gruppo in cui si è partecipante). Può essere utile in caso di attività con tanti gruppi.';
$string['hidegroupmembers'] = 'Nascondi i partecipanti del gruppo agli studenti';
$string['hidegroupmembers_help'] = 'Se impostato, i partecipanti del gruppo saranno nascosti agli stessi. Se lo studente ha l\'autorizzazione per gestire i gruppi (moodle/course:managegroups) o se possono accede a tutti i gruppi (moodle/site:accessallgroups), allora i partecipanti saranno sempre mostrati.';
$string['hidesuspendedstudents'] = 'Nascondi studenti sospesi';
$string['hidesuspendedstudents_help'] = 'Se impostato, gli studenti sospesi non saranno conteggiati e non saranno visualizzati nella lista dei partecipanti';
$string['incorrectpassword'] = 'Password sbagliata';
$string['managegroups'] = 'Gestisci gruppi';
$string['maxcharlenreached'] = 'Massimo numero di caratteri raggiunto';
$string['maxgroupmembership'] = 'Numero massimo di gruppi a cui ci si può iscrivere';
$string['maxgroupmembership_error_low'] = 'I numeri negativi non sono consentiti!';
$string['maxgroupmembership_help'] = 'Il massimo numero di gruppi a cui ci si può iscrivere. 0 significa che non è ammessa partecipazione.';
$string['maxlimitreached'] = 'Numero massimo raggiunto';
$string['maxmembers'] = 'Numero massimo di partecipanti per gruppo';
$string['maxmembers_error_low'] = 'I numeri negativi non sono consentiti! Usa 0 per non impostare un limite!';
$string['maxmembers_error_smaller_minmembers'] = 'Deve essere maggiore rispetto al limite minimo di partecipanti per gruppo!';
$string['maxmembers_help'] = 'Il massimo numero di partecipanti per gruppo. Usa 0 per non impostare un limite.';
$string['maxmembers_icon'] = 'Questo gruppo ha troppi partecipanti';
$string['maxmembers_notification'] = 'Il tuo gruppo ha troppi partecipanti! Il massimo è {$a}.';
$string['member'] = 'Partecipanti';
$string['membercount'] = 'Conteggio';
$string['membershidden'] = 'La lista dei partecipanti non è disponibile';
$string['memberslist'] = 'Partecipanti';
$string['minmembers'] = 'Numero minimo di partecipanti per gruppo';
$string['minmembers_error_bigger_maxmembers'] = 'Deve essere minore rispetto al limite massimo di partecipanti per gruppo!';
$string['minmembers_error_low'] = 'I numeri negativi non sono consentiti! Usa 0 per non impostare un limite!';
$string['minmembers_help'] = 'Il numero minimo di partecipanti per gruppo. Aggiunge una notifica ai partecipanti dei gruppi che sono sotto il limite. Il default è 0 (disabilitato).';
$string['minmembers_icon'] = 'Il gruppo ha meno partecipanti rispetto a quello richiesto';
$string['minmembers_notification'] = 'Il tuo gruppo ha troppo pochi partecipanti! Il minimo è {$a}.';
$string['miscellaneoussettings'] = 'Impostazioni varie';
$string['modulename'] = 'Auto-Selezione Gruppo';
$string['modulename_help'] = 'Permette a tutti i partecipanti di creare e selezionare gruppi.

Funzionalità:
* I partecipanti possono creare gruppi, darne le descrizioni e impostare delle password di accesso
* I partecipanti possono iscriversi ai gruppi
* Ai gruppi possono essere assegnati dei supervisori
* I docenti possono esportare la lista dei gruppi in un file CSV
* Compatibilità completa con i gruppi di Moodle';
$string['modulename_link'] = 'mod/groupselect/view';
$string['modulenameplural'] = 'Auto-Selezione Gruppo';
$string['nogroups'] = 'Non ci sono gruppi tra cui scegliere.';
$string['notavailableanymore'] = 'La selezione del gruppo non è più disponibile dal {$a}.';
$string['notavailableyet'] = 'La selezione del gruppo sarà disponibile dal {$a}.';
$string['notifyexpiredselection'] = 'Mostra messaggio se la scadenza è stata raggiunta';
$string['notifyexpiredselection_help'] = 'Se impostato, un messaggio sarà visualizzato quando la scadenza è stata raggiunta.';
$string['ok'] = 'OK';
$string['password'] = 'Richiedi password';
$string['pluginadministration'] = 'Amministrazione';
$string['pluginname'] = 'Auto-Selezione Gruppo';
$string['privacy:metadata'] = 'Il plugin Auto-Selezione Gruppo non memorizza dati personali.';
$string['removeallsupervisors'] = 'Rimuovi i supervisori del gruppo';
$string['saving'] = 'Salvataggio...';
$string['select'] = 'Iscriviti al gruppo {$a}';
$string['selectconfirm'] = 'Confermi di volerti iscrivere al gruppo <em>{$a}</em>?';
$string['selectgroupaction'] = 'Seleziona gruppo';
$string['showassignedteacher'] = 'Mostra i supervisori assegnati';
$string['showassignedteacher_help'] = 'Se impostato, i supervisori assegnati saranno mostrati ai partecipanti del gruppo. Utile se i partecipanti devono sapere a quale docente hanno assegnato.';
$string['studentcancreate'] = 'I partecipanti possono creare gruppi';
$string['studentcancreate_help'] = 'Se impostato, i partecipanti senza gruppo (nel raggruppamento selezionato) possono creare gruppi. Questa autorizzazione può essere gestita anche nelle autorizzazioni del ruolo.';
$string['studentcanjoin'] = 'I partecipanti possono iscriversi ai gruppi';
$string['studentcanjoin_help'] = 'Se impostato, i partecipanti possono iscriversi ai gruppi. Questa autorizzazione può essere gestita anche nelle autorizzazioni del ruolo.';
$string['studentcanleave'] = 'I partecipanti possono abbandonare i gruppi';
$string['studentcanleave_help'] = 'Se impostato, i partecipanti possono abbandonare i gruppi. Questa autorizzazione può essere gestita anche nelle autorizzazioni del ruolo.';
$string['studentcansetdesc'] = 'I partecipanti possono impostare e modificare le descrizioni dei gruppi';
$string['studentcansetdesc_help'] = 'Se impostato, i partecipanti possono impostare una descrizione al momento della creazione e i partecipanti al gruppo potranno poi modificarla.';
$string['studentcansetenrolmentkey'] = 'I partecipanti possono impostare password di iscrizione ai gruppi';
$string['studentcansetenrolmentkey_help'] = 'Se impostato, i partecipanti possono impostare una password per iscrivere al gruppo.';
$string['studentcansetgroupname'] = 'I partecipanti possono impostare il nome dei nuovi gruppi';
$string['studentcansetgroupname_help'] = 'Se impostato, i partecipanti possono assegnare un nome ai nuovi gruppi.';
$string['supervisionrole'] = 'Ruolo supervisore';
$string['supervisionrole_help'] = 'Definisce il ruolo del supervisore (formalmente il docente)';
$string['targetgrouping'] = 'Seleziona i gruppi dai raggruppamenti';
$string['timeavailable'] = 'Aperto da';
$string['timeavailable_error_past_timedue'] = 'Non può iniziare dopo la scadenza!';
$string['timedue'] = 'Aperto fino';
$string['timedue_error_pre_timeavailable'] = 'Non può terminare dopo la data iniziale!';
$string['unassigngroup'] = 'Rimuovi supervisori dai gruppi';
$string['unassigngroup_confirm'] = 'Confermi di voler rimuovere i supervisori dai gruppi?';
$string['unselect'] = 'Abbandona il gruppo {$a}';
$string['unselectconfirm'] = 'Confermi di voler abbandonare il gruppo <em>{$a}</em?';
