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
 * Strings for component 'enrol', language 'it', version '4.1'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Plugin di iscrizione disponibili';
$string['addinstance'] = 'Aggiungi metodo';
$string['addinstanceanother'] = 'Aggiungi metodo e creane un altro';
$string['ajaxnext25'] = 'Successivi 25...';
$string['ajaxoneuserfound'] = 'Trovato 1 utente';
$string['ajaxxmoreusersfound'] = 'Sono stati trovati più di {$a} utenti';
$string['ajaxxusersfound'] = 'Trovati {$a} utenti';
$string['assignnotpermitted'] = 'Non hai i privilegi o non puoi assegnare ruoli in questo corso.';
$string['bulkuseroperation'] = 'Operazioni in massa sugli utenti';
$string['configenrolplugins'] = 'Per favore seleziona i plugin necessari e mettili in sequenza di utilizzo.';
$string['custominstancename'] = 'Nome personalizzato istanza';
$string['defaultenrol'] = 'Aggiungi istanza nei nuovi corsi';
$string['defaultenrol_desc'] = 'È possibile aggiungere di default questo plugin in tutti i nuovi corsi.';
$string['deleteinstanceconfirm'] = 'Stai per rimuovere il metodo si iscrizione "{$a->name}". Tutti i {$a->users} utenti iscritti con questo metodo saranno disiscritti e i loro dati nel corso, come valutazioni, appartenenza a gruppi, sottoscrizione di forum, eccetera, verranno eliminati.

Sei sicuro ?';
$string['deleteinstanceconfirmself'] = 'Sei certo di eliminare l\'istanza "{$a->name}" che ti consente di accedere a questo corso? Se continui, è possibile che tu non riesca più ad accedere al corso.';
$string['deleteinstancenousersconfirm'] = 'Stai per rimuovere il metodo di iscrizione "{$a->name}". Sei sicuro?';
$string['disableinstanceconfirmself'] = 'Sei certo di eliminare l\'istanza "{$a->name}" che ti consente di accedere a questo corso? Se continui, è possibile che tu non riesca più ad accedere al corso.';
$string['durationdays'] = '{$a} giorni';
$string['editenrolment'] = 'Modifica iscrizione';
$string['edituserenrolment'] = 'Modifica iscrizione di {$a}';
$string['enrol'] = 'Iscrivi';
$string['enrolcandidates'] = 'Utenti non iscritti';
$string['enrolcandidatesmatching'] = 'Corrispondenza con utenti non iscritti';
$string['enrolcohort'] = 'Iscrivi gruppo globale';
$string['enrolcohortusers'] = 'Iscrivi utenti';
$string['enroldetails'] = 'Dettagli iscrizione';
$string['enrollednewusers'] = 'Sono stati iscritti correttamente {$a} nuovi utenti';
$string['enrolledusers'] = 'Iscrizioni';
$string['enrolledusersmatching'] = 'Corrispondenza con utenti iscritti';
$string['enrolme'] = 'Iscrivimi in questo corso';
$string['enrolment'] = 'Iscrizione';
$string['enrolmentinstances'] = 'Metodi di iscrizione';
$string['enrolmentmethod'] = 'Metodo di iscrizione';
$string['enrolmentnew'] = 'Nuova iscrizione a {$a}';
$string['enrolmentnewuser'] = '{$a->user} si è iscritto al corso "{$a->course}"';
$string['enrolmentoptions'] = 'Opzioni di iscrizione';
$string['enrolments'] = 'Iscrizione';
$string['enrolmentupdatedforuser'] = 'L\'iscrizione dell\'utente "{$a->fullname}" è stata aggiornata';
$string['enrolnotpermitted'] = 'Non hai i privilegi o non sei autorizzato ad iscrivere persone nel corso.';
$string['enrolperiod'] = 'Durata iscrizione';
$string['enroltimecreated'] = 'Iscrizione creata';
$string['enroltimeend'] = 'L\'iscrizione termina';
$string['enroltimeendinvalid'] = 'La data di fine iscrizione deve essere successiva alla data di inizio';
$string['enroltimestart'] = 'L\'iscrizione inizia';
$string['enrolusage'] = 'Istanze / iscrizioni';
$string['enrolusers'] = 'Iscrivi utenti';
$string['enrolxusers'] = 'Iscrivi {$a} utenti';
$string['errajaxfailedenrol'] = 'Non è stato possibile iscrivere l\'utente';
$string['errajaxsearch'] = 'Si è verificato un errore durante la ricerca degli utenti';
$string['erroreditenrolment'] = 'Si è verificato un errore durante il tentativo di modifica di una iscrizione';
$string['errorenrolcohort'] = 'Si è verificato un errore nel corso durante la creazione di un\'istanza Sincronizzazione gruppi globali ';
$string['errorenrolcohortusers'] = 'Si è verificato un errore durante l\'iscrizione nel corso dei membri del gruppo globale';
$string['errorthresholdlow'] = 'La soglia di notifica deve essere di almeno 1 giorno';
$string['errorwithbulkoperation'] = 'Si è verificato un errore durante la modifica in massa delle iscrizioni.';
$string['eventenrolinstancecreated'] = 'Creazione istanza metodo d\'iscrizione';
$string['eventenrolinstancedeleted'] = 'Eliminazione istanza metodo d\'iscrizione';
$string['eventenrolinstanceupdated'] = 'Aggiornamento istanza metodo d\'iscrizione';
$string['eventuserenrolmentcreated'] = 'Iscrizione utente al corso';
$string['eventuserenrolmentdeleted'] = 'Disiscrizione utente dal corso';
$string['eventuserenrolmentupdated'] = 'Aggiornamento iscrizione utente';
$string['expirynotify'] = 'Notifica la scadenza dell\'iscrizione';
$string['expirynotify_help'] = 'L\'impostazione consente di impostare l\'invio della Notifica di scadenza dell\'iscrizione';
$string['expirynotifyall'] = 'Sia ai partecipanti sia a colui che
li ha iscritti';
$string['expirynotifyenroller'] = 'Solo a colui che ha iscritto i partecipanti';
$string['expirynotifyhour'] = 'Orario di invio delle notifiche di scadenza delle iscrizioni';
$string['expirythreshold'] = 'Soglia di notifica';
$string['expirythreshold_help'] = 'Consente di impostare con quanti giorni di anticipo deve essere inviata la notifica di scadenza iscrizione.';
$string['extremovedaction'] = 'Azione di disiscrizione esterna';
$string['extremovedaction_help'] = 'L\'azione da compiere quando le iscrizioni degli utenti non sono più presenti nelle tabelle esterne. Da tenere presente che alcuni dati ed impostazioni relative all\'utente verranno eliminati quando l\'utente sarà stato disiscritto dal corso.';
$string['extremovedkeep'] = 'Mantieni iscritti gli utenti';
$string['extremovedsuspend'] = 'Disabilita l\'iscrizione al corso';
$string['extremovedsuspendnoroles'] = 'Disabilita le iscrizioni al corso e rimuovi i ruoli';
$string['extremovedunenrol'] = 'Disiscrivi gli utenti dal corso';
$string['finishenrollingusers'] = 'Termina iscrizione utenti';
$string['foundxcohorts'] = 'Trovati {$a} gruppi globali';
$string['instanceadded'] = 'Metodo aggiunto';
$string['instanceeditselfwarning'] = 'Attenzione:';
$string['instanceeditselfwarningtext'] = 'Sei iscritto al corso tramite questo metodo di iscrizione, eventuali modifiche possono avere impatti sul tuo accesso al corso.';
$string['invalidenrolduration'] = 'La durata dell\'iscrizione non è valida';
$string['invalidenrolinstance'] = 'L\'istanza dell\'iscrizione non è valida';
$string['invalidrequest'] = 'Richiesta non valida';
$string['invalidrole'] = 'Ruolo non valido';
$string['manageenrols'] = 'Gestione iscrizione';
$string['manageinstance'] = 'Gestisci';
$string['method'] = 'Metodo';
$string['migratetomanual'] = 'Migra a iscrizione manuale';
$string['nochange'] = 'Nessuna modifica';
$string['noexistingparticipants'] = 'Non ci sono partecipanti';
$string['nogroup'] = 'Nessun gruppo';
$string['noguestaccess'] = 'Gli ospiti non possono entrare in questo corso, per favore autenticati.';
$string['none'] = 'Nessuno';
$string['notenrollable'] = 'Non puoi iscriverti al corso.';
$string['notenrolledusers'] = 'Altri utenti';
$string['otheruserdesc'] = 'Gli utenti elencati di seguito non sono iscritti al corso ma possiedono dei ruoli sia ereditati sia assegnati direttamente.';
$string['participationactive'] = 'Attiva';
$string['participationnotcurrent'] = 'Non attiva';
$string['participationstatus'] = 'Stato iscrizione';
$string['participationsuspended'] = 'Sospesa';
$string['periodend'] = 'fino al {$a}';
$string['periodnone'] = 'iscritto {$a}';
$string['periodstart'] = 'a partire da {$a}';
$string['periodstartend'] = 'da {$a->start} a {$a->end}';
$string['privacy:metadata:user_enrolments'] = 'Iscrizioni';
$string['privacy:metadata:user_enrolments:enrolid'] = 'Istanza del plugin di iscrizione';
$string['privacy:metadata:user_enrolments:modifierid'] = 'ID dell\'utente che ha più recentemente modificato l\'iscrizione dell\'utente.';
$string['privacy:metadata:user_enrolments:status'] = 'Stato dell\'iscrizione al corso dell\'utente.';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Il plugin di iscrizione memorizza gli utenti iscritti al corso';
$string['privacy:metadata:user_enrolments:timecreated'] = 'Orario di creazione dell\'iscrizione dell\'utente.';
$string['privacy:metadata:user_enrolments:timeend'] = 'Orario di fine dell\'iscrizione dell\'utente.';
$string['privacy:metadata:user_enrolments:timemodified'] = 'Data e ora di modifica dell\'iscrizione dell\'utente';
$string['privacy:metadata:user_enrolments:timestart'] = 'Data e ora d\'inizio dell\'iscrizione dell\'utente';
$string['privacy:metadata:user_enrolments:userid'] = 'ID dell\'utente';
$string['proceedtocourse'] = 'Vai al contenuto del corso';
$string['recovergrades'] = 'Recupera, ove possibile, i voti precedenti dell\'utente';
$string['rolefromcategory'] = '{$a->role} (Ereditato dalla categoria di corsi)';
$string['rolefrommetacourse'] = '{$a->role} (Ereditato dal corso genitore)';
$string['rolefromsystem'] = '{$a->role} (Assegnato a livello di sito)';
$string['rolefromthiscourse'] = '{$a->role} (Assegnato in questo corso)';
$string['sendfromcoursecontact'] = 'Dal gestore del corso';
$string['sendfromkeyholder'] = 'Dal gestore della chiave di iscrizione';
$string['sendfromnoreply'] = 'Dall\'indirizzo no-reply';
$string['startdatetoday'] = 'Oggi';
$string['synced'] = 'Sincronizzato';
$string['testsettings'] = 'Test impostazioni';
$string['testsettingsheading'] = 'Test impostazioni di iscrizione - {$a}';
$string['timeended'] = 'Orario di fine';
$string['timeenrolled'] = 'Orario di iscrizione';
$string['timereaggregated'] = 'Orario di ricalcolo';
$string['timestarted'] = 'Orario di inizio';
$string['totalenrolledusers'] = '{$a} utenti iscritti';
$string['totalotherusers'] = '{$a} altri utenti';
$string['totalunenrolledusers'] = '{$a} utenti disiscritti';
$string['unassignnotpermitted'] = 'Non hai i privilegi per togliere ruoli da questo corso';
$string['unenrol'] = 'Disiscrivi';
$string['unenrolconfirm'] = 'Sei certo di disiscrivere l\'utente "{$a->user}"  (già iscritto tramite "{$a->enrolinstancename}") dal corso "{$a->course}"?';
$string['unenrolleduser'] = 'L\'utente "{$a->fullname}"è stato disiscritto dal corso';
$string['unenrolme'] = 'Disiscrivimi da {$a}';
$string['unenrolnotpermitted'] = 'Non hai i privilegi per disiscrivere questo utente dal corso.';
$string['unenrolroleusers'] = 'Disiscrivi utenti';
$string['uninstallmigrating'] = 'Migrazione di "{$a}" iscrizioni';
$string['unknowajaxaction'] = 'È stata richiesta un\'azione sconosciuta';
$string['unlimitedduration'] = 'Illimitato';
$string['userremovedfromselectiona'] = 'L’utente “{$a}” è stato deselezionato.';
$string['usersearch'] = 'Cerca';
$string['withselectedusers'] = 'Con gli utenti selezionati';
$string['youenrolledincourse'] = 'Sei stato iscritto al corso.';
$string['youunenrolledfromcourse'] = 'Ti sei disiscritto dal corso "{$a}".';
