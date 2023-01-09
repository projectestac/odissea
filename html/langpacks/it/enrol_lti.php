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
 * Strings for component 'enrol_lti', language 'it', version '3.11'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'Nota: si raccomanda l\'abilitazione di \'Consenti l\'embed in frame\', in questo modo il tool sarà visualizzato in un frame invece che in una nuova finestra.';
$string['authltimustbeenabled'] = 'Nota: questo plugin richiede l\'abilitazione del plugin di autenticazione LTI.';
$string['cartridgeurl'] = 'URL cartridge';
$string['deletedactivity'] = 'Attività eliminata';
$string['deletedactivityalt'] = 'L\'attività condivisa da questa istanza è stata eliminata';
$string['deletedactivitydescription'] = 'L\'attività condivisa da questa istanza è stata eliminata. È possibile selezionare un\'altra attività da condividere oppure è possibile semplicemente eliminare l\'istanza. L\'eliminazione dell\'istanza eliminerà le iscrizioni utente associate.';
$string['enrolenddate'] = 'Data di fine';
$string['enrolenddate_help'] = 'Gli utenti potranno accedere fino alla data impostata';
$string['enrolenddateerror'] = 'La data di fine iscrizione non può essere antecedente alla data di inizio';
$string['enrolisdisabled'] = 'Il plugin \'Pubblicazione come tool LTI\' è disabilitato.';
$string['enrolmentfinished'] = 'L\'iscrizione è chiusa.';
$string['enrolmentnotstarted'] = 'L\'iscrizione non è ancora cominciata.';
$string['enrolperiod'] = 'Durata dell\'iscrizione';
$string['enrolperiod_help'] = 'Durata dell\'iscrizione, con inizio all\'atto della prima iscrizione dell\'utente proveniente dal sistema remoto. Se l\'impostazione è disabilitata, la durata dell\'iscrizione non avrà limite.';
$string['enrolstartdate'] = 'Data di inizio';
$string['enrolstartdate_help'] = 'Gli utenti potranno accedere dopo la data impostata';
$string['failedrequest'] = 'Richiesta non andata a buon fine. Motivo: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Per accedere al tool per favore utilizza il link sottostante.';
$string['gradesync'] = 'Sincronizzazione valutazioni';
$string['gradesync_help'] = 'Consente di inviare le valutazioni dal tool al sistema remot (LTI consumer)';
$string['incorrecttoken'] = 'Il token non era corretto. Per favore verifica l\'URL e riprova oppure contatta l\'amministratore del tool.';
$string['invalidrequest'] = 'Richiesta non valida';
$string['invalidtoolconsumer'] = 'Consumer del tool non valido';
$string['launchdetails'] = 'Dettagli di lancio';
$string['launchdetails_help'] = 'Per configurare il tool è necessario un URL cartridge (detto anche URL di configurazione) e un secret.';
$string['launchurl'] = 'URL di lancio';
$string['lti:config'] = 'Configurare istanze \'Pubblicazione come tool LTI\'';
$string['lti:unenrol'] = 'Disiscrivere gli utenti dal corso';
$string['maxenrolled'] = 'Massimo numero di utenti';
$string['maxenrolled_help'] = 'Il numero massimo di utenti remoti che possono accedere al tool. Impostare a zero per nessun limite.';
$string['maxenrolledreached'] = 'È stato raggiunto il numero massimo di utenti che possono accedere al tool.';
$string['membersync'] = 'Sincronizzazione utenti';
$string['membersync_help'] = 'Stabilisce se creare un account per ciascun utente remoto, iscrivendolo al corso.';
$string['membersyncmode'] = 'Modalità sincronizzazione utenti';
$string['membersyncmode_help'] = 'Stabilisce se l\'utente remoto deve essere iscritto/disiscritto dal corso';
$string['membersyncmodeenrolandunenrol'] = 'Iscrivi i nuovi utenti e disiscrivi gli utenti mancanti';
$string['membersyncmodeenrolnew'] = 'Iscrivi i nuovi utenti';
$string['membersyncmodeunenrolmissing'] = 'Disiscrivi gli utenti mancanti';
$string['notoolsprovided'] = 'Nessun tool fornito';
$string['opentool'] = 'Apri tool';
$string['pluginname'] = 'Pubblicazione come tool LTI';
$string['pluginname_desc'] = 'Il di iscrizione \'Pubblicazione come tool LTI\', assieme al plugin di autenticazione LTI, consente l\'ascesso a specifici corsi ed attività da parte di utenti remoti, rendendo Moodle un LTI provider.';
$string['privacy:metadata:enrol_lti_users'] = 'Elenco degli utenti iscritti via provider LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Data di accesso più recente dell\'utente al corso';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Valutazione più recente ricevuta dall\'utente.';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Orario di iscrizione';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID dell\'utente';
$string['registration'] = 'Registrazione pubblicata del tool';
$string['registrationurl'] = 'URL di registrazione';
$string['registrationurl_help'] = 'Utilizzando un URL di registrazione (anche detta Proxy URL), il tool sarà configurato automaticamente.';
$string['remotesystem'] = 'Sistema remoto';
$string['requirecompletion'] = 'Richiedi il completamento del corso o dell\'attività prima di sincronizzare la valutazione';
$string['returnurlnotset'] = 'L\'URL di ritorno non è stata impostata.';
$string['roleinstructor'] = 'Ruolo del docente';
$string['roleinstructor_help'] = 'Il ruolo assegnato dal tool al docente remoto';
$string['rolelearner'] = 'Ruolo dello studente';
$string['rolelearner_help'] = 'Il ruolo assegnato dal tool allo studente remoto';
$string['secret'] = 'Secret';
$string['secret_help'] = 'Una stringa di caratteri condivisa con il sistema remoto (LTI consumer) per consentire l\'acesso al tool.';
$string['sharedexternaltools'] = 'Pubblicati come tool LTI';
$string['successfulregistration'] = 'Registrazione avvenuta correttamente';
$string['tasksyncgrades'] = 'Pubblicazione come tool LTI sincronizzazione valutazioni';
$string['tasksyncmembers'] = 'Sincronizzazione utenti per Pubblicazione come tool LTI';
$string['toolsprovided'] = 'Tool pubblicati';
$string['toolsprovided_help'] = 'Un tool può essere condiviso con altri siti fornendo i dettagli di lancio o la URL di registrazione.';
$string['tooltobeprovided'] = 'Tool da pubblicare';
$string['toolurl'] = 'URL tool';
$string['userdefaultvalues'] = 'Utilizza valori di default';
