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
 * Strings for component 'plugin', language 'it', version '4.1'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Azioni';
$string['availability'] = 'Disponibilità';
$string['cancelinstallall'] = 'Annulla nuove installazioni ({$a})';
$string['cancelinstallhead'] = 'Annullamento dell\'installazione dei plugin in corso';
$string['cancelinstallinfo'] = 'I seguenti plugin non sono stati installati correttamente e la loro installazione può essere annullata. Per farlo, la cartella dei plugin deve essere eliminata dal server. Accertati che l\'eliminazione sia ciò che desideri fare per evitare perdite di dati accidentali (ad esempio modifiche al codice).';
$string['cancelinstallinfodir'] = 'Cartella da eliminare: {$a}';
$string['cancelinstallone'] = 'Annulla questa installazione';
$string['cancelupgradeall'] = 'Annulla aggiornamenti ({$a})';
$string['cancelupgradehead'] = 'Ripristino della versione precedente dei plugin in corso';
$string['cancelupgradeone'] = 'Annulla questo aggiornamento';
$string['checkforupdates'] = 'Controlla gli aggiornamenti';
$string['checkforupdateslast'] = 'Controllo più recente effettuato il {$a}';
$string['dependencyavailable'] = 'Disponibile';
$string['dependencyfails'] = 'Errori';
$string['dependencyinstall'] = 'Installa';
$string['dependencyinstallhead'] = 'Installazione dipendenze mancanti in corso';
$string['dependencyinstallmissing'] = 'Installa dipendenze mancanti ({$a})';
$string['dependencymissing'] = 'Mancanti';
$string['dependencyunavailable'] = 'Non disponibili';
$string['dependencyupload'] = 'Carica';
$string['dependencyuploadmissing'] = 'Carica file ZIP';
$string['detectedmisplacedplugin'] = 'Il plugin "{$a->component}" è installato erroneamente in "{$a->current}", dovrebbe invece essere installato in  "{$a->expected}"';
$string['displayname'] = 'Nome plugin';
$string['err_response_curl'] = 'Non è stato possibile ottenere i dati sugli aggiornamenti - errore cURL inatteso.';
$string['err_response_format_version'] = 'Formato del response inatteso. Per favore prova a ricontrollare la disponibilità di aggiornamenti';
$string['err_response_http_code'] = 'Non è stato possibile ottenere i dati sugli aggiornamenti - response HTTP inatteso.';
$string['filterall'] = 'Visualizza tutto';
$string['filtercontribonly'] = 'Visualizza solo i plugin aggiuntivi';
$string['filterupdatesonly'] = 'Visualizza solo plugin aggiornabili';
$string['incompatibleversion'] = 'Versione di Moodle non compatibile: {$a}';
$string['isenabled'] = 'Abilita';
$string['misdepinfoplugin'] = 'Informazioni plugin';
$string['misdepinfoversion'] = 'Informazioni sulla versione';
$string['misdepsavail'] = 'Dipendenze mancanti disponibili';
$string['misdepsunavail'] = 'Dipendenze mancanti non disponibili';
$string['misdepsunavaillist'] = 'Non ci sono versioni che soddisfino le dipendenze: {$a}.';
$string['misdepsunknownlist'] = 'Non è presente nella cartella dei Plugin: <strong>{$a}</strong>.';
$string['moodlebranch'] = 'Moodle {$a->min} - {$a->max}';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Non ci sono plugin di questo tipo installati.';
$string['notdownloadable'] = 'Non è possibile scaricare i pacchetti';
$string['notdownloadable_help'] = 'Non è possibile scaricare automaticamente i pacchetti ZIP degli aggiornamenti.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'Note';
$string['notsupported'] = 'Il plugin può non essere compilabile con la versione {$a} di Moodle';
$string['notwritable'] = 'I file del plugin non sono scrivibili';
$string['notwritable_help'] = 'll web server non ha i permessi di scrittura nella  cartella del plugin. Può anche essere necessario concedere i permessi di scrittura  sulla cartella radice dei plugin.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Tutti i plugin';
$string['overviewext'] = 'Plugin addizionali';
$string['overviewupdatable'] = 'Aggiornamenti disponibili';
$string['packagesdebug'] = 'Output di debug abilitato';
$string['packagesdownloading'] = 'Scaricamento di {$a}';
$string['packagesextracting'] = 'Estrazione di {$a}';
$string['packagesvalidating'] = 'Validazione di {$a}';
$string['packagesvalidatingfailed'] = 'L\'installazione è stata fermata a causa di un errore di validazione.';
$string['packagesvalidatingok'] = 'Validazione superata, l\'installazione può proseguire';
$string['plugincheckall'] = 'Tutti i plugin';
$string['plugincheckattention'] = 'Plugin che richiedono attenzione';
$string['pluginchecknone'] = 'Non ci sono plugin che richiedono attenzione';
$string['pluginchecknotice'] = 'La pagina visualizza i plugin che richiedono una verifica prima dell\'aggiornamento. Gli elementi evidenziati includono nuovi plugin in procinto di essere installati, plugin da aggiornare e plugin mancanti. I plugin aggiuntivi vengono evidenziati se è disponibile un aggiornamento. Si raccomanda di controllare la disponibilità di versioni più recenti dei plugin aggiuntivi e aggiornare il relativo codice prima di effettuare l\'aggiornamento di Moodle.';
$string['plugindisable'] = 'Disabilita';
$string['plugindisabled'] = 'Disabilitato';
$string['pluginenable'] = 'Abilita';
$string['pluginenabled'] = 'Abilitato';
$string['release'] = 'Release';
$string['requiredby'] = 'Richiesto da: {$a}';
$string['requires'] = 'Richiede';
$string['rootdir'] = 'Cartella';
$string['settings'] = 'Impostazioni';
$string['source'] = 'Sorgente';
$string['sourceext'] = 'Aggiuntivo';
$string['sourcestd'] = 'Standard';
$string['status'] = 'Stato';
$string['status_delete'] = 'Da eliminare';
$string['status_downgrade'] = 'Una versione più recente è già stata installata!';
$string['status_missing'] = 'Manca sul disco';
$string['status_new'] = 'Da installare';
$string['status_nodb'] = 'Nessun database';
$string['status_upgrade'] = 'Da aggiornare';
$string['status_uptodate'] = 'Installato';
$string['supportedconversions'] = 'Conversioni di documenti supportate';
$string['supportedmoodleversions'] = 'Versioni di Moodle supportate';
$string['systemname'] = 'Identificativo';
$string['type_antivirus'] = 'Plugin antivirus';
$string['type_antivirus_plural'] = 'Plugin antivirus';
$string['type_auth'] = 'Metodo di autenticazione';
$string['type_auth_plural'] = 'Plugin di autenticazione';
$string['type_availability'] = 'Condizione per l\'accesso';
$string['type_availability_plural'] = 'Condizioni per l\'accesso';
$string['type_block'] = 'Blocco';
$string['type_block_plural'] = 'Blocchi';
$string['type_cachelock'] = 'Cache lock handler';
$string['type_cachelock_plural'] = 'Cache lock handler';
$string['type_cachestore'] = 'Cache store';
$string['type_cachestore_plural'] = 'Cache store';
$string['type_calendartype'] = 'Tipo di calendario';
$string['type_calendartype_plural'] = 'Tipi di calendario';
$string['type_contentbank'] = 'Deposito dei contenuti';
$string['type_contentbank_plural'] = 'Plugin deposito dei contenuti';
$string['type_contenttype'] = 'Deposito dei contenuti';
$string['type_contenttype_plural'] = 'Plugin deposito dei contenuti';
$string['type_coursereport'] = 'Report del corso';
$string['type_coursereport_plural'] = 'Report del corso';
$string['type_customfield'] = 'Campo personalizzato';
$string['type_customfield_plural'] = 'Campi personalizzati';
$string['type_dataformat'] = 'Formato data';
$string['type_dataformat_plural'] = 'Formati data';
$string['type_editor'] = 'Editor';
$string['type_editor_plural'] = 'Editor';
$string['type_enrol'] = 'Metodo di iscrizione';
$string['type_enrol_plural'] = 'Metodi di iscrizione';
$string['type_fileconverter'] = 'Convertitori di documenti';
$string['type_fileconverter_plural'] = 'Convertitori di documenti';
$string['type_fileconvertermanage'] = 'Gestione convertitori di documenti';
$string['type_filter'] = 'Filtro';
$string['type_filter_plural'] = 'Filtro Tex';
$string['type_format'] = 'Formato corso';
$string['type_format_plural'] = 'Tipologie di corso';
$string['type_gradeexport'] = 'Metodo di esportazione delle valutazioni';
$string['type_gradeexport_plural'] = 'Metodi di esportazione delle valutazioni';
$string['type_gradeimport'] = 'Metodo di importazione delle valutazioni';
$string['type_gradeimport_plural'] = 'Metodi di importazione delle valutazioni';
$string['type_gradereport'] = 'Report registro valutatore';
$string['type_gradereport_plural'] = 'Report registro valutatore';
$string['type_gradingform'] = 'Metodo di valutazione avanzato';
$string['type_gradingform_plural'] = 'Metodi di valutazione avanzati';
$string['type_h5plib'] = 'Infrastruttura H5P';
$string['type_h5plib_plural'] = 'Infrastrutture H5P';
$string['type_local'] = 'Plugin locale';
$string['type_local_plural'] = 'Plugin locali';
$string['type_media'] = 'Riproduttore multimediali';
$string['type_media_plural'] = 'Riproduttori multimediali';
$string['type_message'] = '';
$string['type_message_plural'] = 'Plugin notifiche';
$string['type_mlbackend'] = 'Backend di machine learning';
$string['type_mlbackend_plural'] = 'Backend di machine learning';
$string['type_mnetservice'] = 'Servizio MNet';
$string['type_mnetservice_plural'] = 'Servizi MNet';
$string['type_mod'] = 'Modulo attività';
$string['type_mod_plural'] = 'Moduli attività';
$string['type_paygw'] = 'Gateway di pagamento';
$string['type_paygw_plural'] = 'Gateway di pagamento';
$string['type_paygwmanage'] = 'Gestione gateway di pagamento';
$string['type_plagiarism'] = 'Plugin prevenzione plagio';
$string['type_plagiarism_plural'] = 'Plugin prevenzione plagio';
$string['type_portfolio'] = 'Portfolio';
$string['type_portfolio_plural'] = 'Portfolio';
$string['type_profilefield'] = 'Tipo di campo personalizzato';
$string['type_profilefield_plural'] = 'Tipi di campo personalizzato';
$string['type_qbank'] = 'Plugin Deposito delle domande';
$string['type_qbank_plural'] = 'Plugin Deposito delle domande';
$string['type_qbehaviour'] = 'Comportamento domanda';
$string['type_qbehaviour_plural'] = 'Comportamenti domanda';
$string['type_qformat'] = 'Formato di importazione/esportazione domande';
$string['type_qformat_plural'] = 'Formati di importazione/esportazione domande';
$string['type_qtype'] = 'Tipo domanda';
$string['type_qtype_plural'] = 'Tipi domande';
$string['type_report'] = 'Report del sito';
$string['type_report_plural'] = 'Report';
$string['type_repository'] = 'Repository';
$string['type_repository_plural'] = 'Repository';
$string['type_search'] = 'Motore di ricerca';
$string['type_search_plural'] = 'Motori di ricerca';
$string['type_theme'] = 'Tema';
$string['type_theme_plural'] = 'Temi';
$string['type_tool'] = 'Tool amministrativo';
$string['type_tool_plural'] = 'Tool amministrativi';
$string['type_webservice'] = 'Protocollo webservice';
$string['type_webservice_plural'] = 'Protocolli webservice';
$string['uninstall'] = 'Rimuovi';
$string['uninstallconfirm'] = 'Stai per rimuovere il plugin <em>{$a->name}</em>. La rimozione eliminerà i dati associati al plugin presenti nel database, la configurazione, i log, file utente gestiti dal plugin, eccetera. La rimozione è definitiva e Moodle non crea backup di sorta. Sei SICURO di continuare?';
$string['uninstalldelete'] = 'Tutti i dati relativi al plugin <em>{$a->name}</em> sono stati eliminati dal database. Per evitare che il plugin si installi nuovamente, è necessario rimuovere manualmente dal server la seguente cartella: <em>{$a->rootdir}</em>.
Moodle non può rimuovere la cartella per mancanza di permessi di scrittura.';
$string['uninstalldeleteconfirm'] = 'Tutti i dati relativi al plugin <em>{$a->name}</em> sono stati eliminati dal database. Per evitare che il plugin si installi nuovamente, è necessario rimuovere dal server la seguente cartella: <em>{$a->rootdir}</em>. Desideri rimuovere la cartella?';
$string['uninstalldeleteconfirmexternal'] = 'È possibile che il codice sorgente del plugin sia stato ottenuto via checkout del source code management system ({$a}). Rimuovendo la cartella del plugin si potrebbero perdere informazioni rilevanti sulle eventuali modifiche apportate al codice. Prima di proseguire, per favore accertarsi che la cartella vada eliminata definitivamente.';
$string['uninstallextraconfirmblock'] = 'Sono presenti  {$a->instances} istanze di questo blocco';
$string['uninstallextraconfirmenrol'] = 'Sono presenti  {$a->enrolments} iscrizioni.';
$string['uninstallextraconfirmmod'] = 'Sono presenti {$a->instances} istanze del modulo in {$a->courses} corsi.';
$string['uninstalling'] = 'Rimozione di {$a->name}';
$string['updateavailable'] = 'È disponibile una nuova versione {$a}!';
$string['updateavailable_moreinfo'] = 'Ulteriori informazioni';
$string['updateavailable_release'] = 'Release {$a}';
$string['updatepluginconfirm'] = 'Conferma aggiornamento plugin';
$string['updatepluginconfirmexternal'] = 'Sembra che la versione in uso del plugin sia stata ottenuta tramite un checkout del source code management system ({$a}). Installando l\'aggiornamento non sarà più possibile ottenere aggiornamenti del plugin tramite source code management system. Assicurati di voler realmente aggiornare il plugin prima di proseguire.';
$string['updatepluginconfirminfo'] = 'Stai per installare una nuova versione del plugin <strong>{$a->name}</strong>. Un pacchetto zip contenente la versione {$a->version} del plugin sarà scaricato da  <a href="{$a->url}">{$a->url}</a>, espanso nella cartella di installazione di Moodle ed aggiornato.';
$string['updatepluginconfirmwarning'] = 'Da notare che Moodle non effettuerà automaticamente una copia del database prima dell\'aggiornamento. È fortemente consigliato effettuare una copia completa di backup per poter ripristinare il sito nel caso di bug con il codice aggiornato o di problemi con il database. Prosegui a tuo rischio.';
$string['validationmsg_componentmatch'] = 'Nome plugin';
$string['validationmsg_componentmismatchname'] = 'Discrepanza sul nome del plugin';
$string['validationmsg_componentmismatchname_help'] = 'Alcuni pacchetti ZIP, come ad esempio i pacchetti generati da Github, possono contenere nomi errati della cartella radice. È necessario correggere il nome della cartella radice rendendolo coincidente con il nome dichiarato del plugin.';
$string['validationmsg_componentmismatchname_info'] = 'Il plugin dichiara il nome \'{$a}\', ma questo nome non coincide con il nome della cartella radice.';
$string['validationmsg_componentmismatchtype'] = 'Discrepanza sul tipo di plugin';
$string['validationmsg_componentmismatchtype_info'] = 'Hai selezionato il tipo  \'{$a->expected}\' ma il plugin dichiara di essere di tipo \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'I file estratti non sono stati trovati';
$string['validationmsg_filesnumber'] = 'Nel pacchetto non è presente un numero sufficiente di file';
$string['validationmsg_filestatus'] = 'Non è possibile estrarre tutti i file';
$string['validationmsg_filestatus_info'] = 'Il tentativo di estrarre il file {$a->file} ha generato l\'errore \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'Trovato file della lingua';
$string['validationmsg_maturity'] = 'Maturity level dichiarato';
$string['validationmsg_maturity_help'] = 'Il plugin può dichiarare il proprio maturity level. Se il maintainer ritiene il plugin stabile, il maturity level sarà MATURITY_STABLE. Tutti gli altri maturity level dichiarati (ad esempio, alpha o beta)  saranno considerati non stabili e sarà visualizzato un avviso.';
$string['validationmsg_missingcomponent'] = 'Il plugin non dichiara il nome del componente';
$string['validationmsg_missingcomponent_help'] = 'Tutti i plugin devono esplicitate il nome del proprio componente tramite la dichiarazione \'$plugin->component` presente nel file version.php.';
$string['validationmsg_missingcomponent_link'] = 'Development:version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'Discrepanza sul nome del file della lingua ingelse';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Il plugin deve fornire il file {$a} per la lingua inglese.';
$string['validationmsg_missinglangenfile'] = 'Non è stato trovato il file di lingua inglese';
$string['validationmsg_missinglangenfolder'] = 'La cartella della lingua inglese non è presente';
$string['validationmsg_missingversion'] = 'Il plugin non dichiara la propria versione';
$string['validationmsg_missingversionphp'] = 'Il file version.php non è stato trovato';
$string['validationmsg_multiplelangenfiles'] = 'Sono stati trovati più file della lingua inglese.';
$string['validationmsg_onedir'] = 'Il pacchetto ZIP ha una struttura non valida.';
$string['validationmsg_onedir_help'] = 'Il pacchetto ZIP deve contenere solo una cartella radice con il codice del plugin. Il nome della cartella radice deve coincidere con il nome del plugin.';
$string['validationmsg_pathwritable'] = 'Verifica permessi scrittura';
$string['validationmsg_pluginversion'] = 'Versione plugin';
$string['validationmsg_pluginversiontoolow'] = 'Un versione più recente del plugin risulta già installata.';
$string['validationmsg_release'] = 'Release plugin';
$string['validationmsg_requiresmoodle'] = 'Versione Moodle richiesta';
$string['validationmsg_rootdir'] = 'Nome del plugin da installare';
$string['validationmsg_rootdir_help'] = 'Il nome della cartella radice contenuta nel pacchetto ZIP costituisce il nome del plugin da installare. Se il nome è errato, prima di installare il plugin è possibile rinominare il nome della cartella radice all\'interno del pacchetto .';
$string['validationmsg_rootdirinvalid'] = 'Nome del plugin non valido';
$string['validationmsg_rootdirinvalid_help'] = 'Il nome della cartella radice contenuta nel pacchetto ZIP viola i requisiti sintattici formali. Alcuni pacchetti ZIP, come ad esempio i pacchetti generati da Github, possono contenere nomi errati della cartella radice. È necessario correggere il nome della cartella radice rendendolo coincidente con il nome del plugin.';
$string['validationmsg_targetexists'] = 'La cartella di destinazione è già esistente e sarà eliminata';
$string['validationmsg_targetexists_help'] = 'La cartella dove installare il plugin è già esistente e sarà soprascritta dal contenuto del pacchetto del plugin.';
$string['validationmsg_targetnotdir'] = 'La destinazione è occupata da un file';
$string['validationmsg_unknowntype'] = 'Tipo plugin sconosciuto';
$string['validationmsg_versionphpsyntax'] = 'È stata rilevata una sintassi non supportata nel file version.php';
$string['validationmsglevel_debug'] = 'Debug';
$string['validationmsglevel_error'] = 'Errore';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Attenzione';
$string['version'] = 'Versione';
$string['versiondb'] = 'Versione attuale';
$string['versiondisk'] = 'Nuova versione';
