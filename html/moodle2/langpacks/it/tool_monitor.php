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
 * Strings for component 'tool_monitor', language 'it', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_monitor
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Aggiungi regola';
$string['allevents'] = 'Tutti gli eventi';
$string['allmodules'] = 'Tutti le istanze';
$string['area'] = 'Area';
$string['areatomonitor'] = 'Area da monitorare';
$string['cachedef_eventsubscriptions'] = 'L\'elenco delle sottoscrizioni eventi dei singoli corsi';
$string['contactadmin'] = 'Contatta l\'amministratore del sito per abilitarlo.';
$string['core'] = 'Core';
$string['currentsubscriptions'] = 'Le tue sottoscrizioni';
$string['defaultmessagetemplate'] = 'Nome regola: {rulename}<br />Descrizione: {description}<br />Nome evento: {eventname}';
$string['deleterule'] = 'Elimina regola';
$string['deletesubscription'] = 'Elimina sottoscrizione';
$string['description'] = 'Descrizione:';
$string['disablefieldswarning'] = 'Alcuni campi non possono essere modificati poiché sono presenti sottoscrizioni per questa regola';
$string['duplicaterule'] = 'Duplica regola';
$string['editrule'] = 'Modifica regola';
$string['enablehelp'] = 'Abilita/disabilita monitoraggio eventi';
$string['enablehelp_help'] = 'Prima di creare e sottoscrivere regole, è necessario abilitare il monitoraggio eventi. Da notare che abilitare il monitoraggio eventi può avere impatti sulle performance del sito.';
$string['errorincorrectevent'] = 'Per favore seleziona un evento correlato al plugin scelto';
$string['event'] = 'Evento';
$string['eventnotfound'] = 'Non trovato evento';
$string['eventrulecreated'] = 'Creata regola';
$string['eventruledeleted'] = 'Eliminata regola';
$string['eventruleupdated'] = 'Aggiornata regola';
$string['eventsubcreated'] = 'Creata sottoscrizione';
$string['eventsubcriteriamet'] = 'Soddisfatti criteri di sottoscrizione';
$string['eventsubdeleted'] = 'Eliminata sottoscrizione';
$string['freqdesc'] = '{$a->freq} volte in {$a->mins} minuti';
$string['frequency'] = 'Soglia di notifica';
$string['frequency_help'] = 'Il numero di eventi che si devono verificare in un dato intervallo di tempo affinché sia inviata la notifica.';
$string['inminutes'] = 'in minuti';
$string['invalidmodule'] = 'Il modulo non è valido';
$string['manage'] = 'Gestione';
$string['managerules'] = 'Regole monitoraggio eventi';
$string['manageruleslink'] = 'E\' possibile gestire le regole nella pagina {$a}.';
$string['managesubscriptions'] = 'Monitoraggio eventi';
$string['managesubscriptionslink'] = 'E\' possibile sottoscrivere la regola nella pagina {$a}.';
$string['messageprovider:notification'] = 'Ricevere notifiche delle regole sottoscritte';
$string['messagetemplate'] = 'Messaggio di notifica';
$string['messagetemplate_help'] = 'Il messaggio di notifica che sarà inviato agli utenti quando viene raggiunta la soglia di notifica. E\' possibile utilizzare i seguenti segnaposto:
<br /><br />
* {link} - Collegamento alla pagina dove si è verificato l\'evento<br />
* {modulelink} - Collegamento all\'area monitorata<br />
* {rulename} - Nome della regola<br />
* {description} - Descrizione<br />
* {eventname} - Nome dell\'evento<br />';
$string['moduleinstance'] = 'Istanza';
$string['monitordisabled'] = 'Il monitoraggio eventi è disabilitato.';
$string['monitorenabled'] = 'Il monitoraggio eventi è abilitato.';
$string['monitor:managerules'] = 'Gestione regole monitoraggio eventi';
$string['monitor:managetool'] = 'Abilita/disabilita monitoraggio eventi';
$string['monitor:subscribe'] = 'Sottoscrizione regole monitoraggio eventi';
$string['norules'] = 'Non ci sono regole di monitoraggio eventi.';
$string['pluginname'] = 'Monitoraggio eventi';
$string['privacy:metadata:description'] = 'Descrizione della regola.';
$string['privacy:metadata:eventname'] = 'Nome non ambiguo dell\'evento.';
$string['privacy:metadata:frequency'] = 'Frequenza delle notifiche.';
$string['privacy:metadata:historysummary'] = 'Memorizza lo storico delle notifiche inviate tramite email.';
$string['privacy:metadata:inactivedate'] = 'Periodi di tempo, in giorni, dopo il quale una sottoscrizione inattiva verrà rimossa definitivamente.';
$string['privacy:metadata:lastnotificationsent'] = 'Quando è stata inviata l\'ultima notifica per questa sottoscrizione.';
$string['privacy:metadata:messagesummary'] = 'Le notifiche vengono inviate al sistema di messaggistica.';
$string['privacy:metadata:name'] = 'Nome della regola.';
$string['privacy:metadata:plugin'] = 'Nome Frankenstyle del plugin.';
$string['privacy:metadata:rulessummary'] = 'Memorizza le regole di monitoraggio.';
$string['privacy:metadata:subscriptionssummary'] = 'Memorizza le sottoscrizioni degli utenti alle varie regole.';
$string['privacy:metadata:template'] = 'Modello messaggi.';
$string['privacy:metadata:timecreatedrule'] = 'Data di creazione della regola.';
$string['privacy:metadata:timecreatedsub'] = 'Data di creazione della sottoscrizione.';
$string['privacy:metadata:timemodifiedrule'] = 'Quando è stata modificata la regola.';
$string['privacy:metadata:timesent'] = 'Quando è stato inviato il messaggio.';
$string['privacy:metadata:timewindow'] = 'Intervallo di tempo in secondi.';
$string['privacy:metadata:userid'] = 'ID dell\'utente che ha creato la regola.';
$string['privacy:metadata:useridhistory'] = 'ID dell\'utente a cui è stata inviata la notifica.';
$string['privacy:metadata:useridsub'] = 'ID del sottoscrittore.';
$string['processevents'] = 'Elaborazione eventi';
$string['ruleareyousure'] = 'Sei sicuro di eliminare la regola "{$a}"?';
$string['ruleareyousureextra'] = 'Saranno eliminate anche  {$a} sottoscrizioni della regola.';
$string['rulecopysuccess'] = 'La regola è stata duplicata correttamente';
$string['ruledeletesuccess'] = 'La regola è stata eliminata correttamente';
$string['rulehelp'] = 'Dettagli della regola';
$string['rulehelp_help'] = 'Questa regola controlla che l\'evento \'{$a->eventname}\' si verifichi in \'{$a->moduleinstance}\' per {$a->frequency} volte in {$a->minutes} minuti.';
$string['rulename'] = 'Nome regola';
$string['rulenopermission'] = 'Non sei autorizzato a sottoscrivere qualsiasi evento';
$string['rulenopermissions'] = 'Non sei autorizzato a "{$a} una regola"';
$string['rulescansubscribe'] = 'Regole disponibili per la sottoscrizione';
$string['selectacourse'] = 'Seleziona un corso';
$string['selectcourse'] = 'Visita questo report a livello di corso per visualizzare un elenco di possibili moduli';
$string['subareyousure'] = 'Sei sicuro di eliminare la sottoscrizione alla regola "{$a}"?';
$string['subcreatesuccess'] = 'La sottoscrizione è stata creata correttamente';
$string['subdeletesuccess'] = 'La sottoscrizione è stata eliminata correttamente';
$string['subhelp'] = 'Dettagli della sottoscrizione';
$string['subhelp_help'] = 'Questa sottoscrizione controlla che l\'evento  \'{$a->eventname}\' si verifichi in \'{$a->moduleinstance}\' per {$a->frequency} volte  in {$a->minutes} minuti.';
$string['subscribeto'] = 'Sottoscrivi la regola "{$a}"';
$string['taskchecksubscriptions'] = 'Abilitazione/disabilitazione sottoscrizioni di regole non valide';
$string['taskcleanevents'] = 'Pulizia eventi del monitoraggio eventi';
$string['unsubscribe'] = 'Revoca sottoscrizione';
