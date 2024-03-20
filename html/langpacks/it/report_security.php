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
 * Strings for component 'report_security', language 'it', version '4.1'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_antivirus_error'] = 'Sono stati rilevati {$a->errors} errori all\'interno dell\'ultimo {$a->lookback}';
$string['check_antivirus_info'] = 'Nessuna analizzatore di virus è stato abilitato';
$string['check_antivirus_logstore_not_supported'] = 'Non è stato possibile verificare lo stato degli scanner antivirus a causa del tipo di log store selezioanto';
$string['check_antivirus_name'] = 'Antivirus';
$string['check_antivirus_ok'] = 'Antivirus';
$string['check_configrw_details'] = '<p>Si raccomanda di modificare i permessi del file <code>config.php</code> subito dopo l\'installazione per evitare che il file possa essere modificato da processi del web server.
Questa impostazione non innalza significativamente la sicurezza del sito, tuttavia riduce e limita i pericoli provenienti dai più comuni exploit.</p>';
$string['check_configrw_name'] = 'File config.php modificabile';
$string['check_configrw_ok'] = 'Il file config.php non è modificabile da script PHP.';
$string['check_configrw_warning'] = 'Il file config.php può essere modificato da script PHP.';
$string['check_cookiesecure_details'] = '<p>Se si abilita la comunicazione https, si raccomanda anche di abilitare i cookie sicuri. Si raccomanda di configurare anche l\'indirizzamento permanente da http ad https e servire header HSTS.</p>';
$string['check_cookiesecure_error'] = 'Per favore abilita i cookie sicuri';
$string['check_cookiesecure_http'] = 'Per utilizzare cookie sicuri è necessario attivare https.';
$string['check_cookiesecure_name'] = 'Cookie sicuri';
$string['check_cookiesecure_ok'] = 'Cookie sicuri abilitati.';
$string['check_crawlers_details'] = '<p>L\'impostazione Aperto a Google consente ai motori di ricerca di accedere ai corsi come ospite. È inutile consentire l\'accesso come ospite ai motori di ricerca se l\'accesso come ospite è disabilitato.</p>';
$string['check_crawlers_error'] = 'L\'accesso per i motori di ricerca è abilitato ma l\'accesso come ospite al sito è disabilitato.';
$string['check_crawlers_info'] = 'I motori di ricerca possono entrare nel sito come ospiti.';
$string['check_crawlers_name'] = 'Aperto a Google';
$string['check_crawlers_ok'] = 'L\'accesso per i motori di ricerca è disabilitato.';
$string['check_defaultuserrole_details'] = '<p>A tutti gli utenti autenticati vengono conferiti i privilegi del Ruolo di default per tutti gli utenti. Accertati che tale ruolo non possegga privilegi tali da consentirgli di compromettere la sicurezza del sito.</p>
<p>Il solo Ruolo origine supportato per il Ruolo di default per tutti gli utenti è <em>Utente autenticato</em>.</p>';
$string['check_defaultuserrole_error'] = 'Il Ruolo di default per tutti gli utenti "{$a}" non è definito in modo corretto!';
$string['check_defaultuserrole_name'] = 'Ruolo di default per tutti gli utenti';
$string['check_defaultuserrole_notset'] = 'Il ruolo di default non è impostato.';
$string['check_defaultuserrole_ok'] = 'Definizione del Ruolo di default per tutti gli utenti OK.';
$string['check_dirindex_info'] = 'L\'indice della cartella non deve essere abilitato';
$string['check_displayerrors_details'] = '<p>Si consiglia vivamente di non abilitare l\'impostazione PHP <code>display_errors</code> nei server in produzione in quanto i messaggi di errore potrebbero fornire informazioni sensibili sul server.</p>';
$string['check_displayerrors_error'] = 'La visualizzazione degli errori PHP è abilitata. Si raccomanda di disabilitarla.';
$string['check_displayerrors_name'] = 'Visualizzazione errori PHP';
$string['check_displayerrors_ok'] = 'La visualizzazione degli errori PHP è disabilitata.';
$string['check_dotfiles_info'] = 'Tutti i dotfile tranne /.well-known/* non devono essere pubblici';
$string['check_emailchangeconfirmation_details'] = '<p>Si raccomanda di rendere necessaria la conferma dell\'email quando un utente cambia l\'email nel proprio profilo. Se la conferma viene disabilitata, gli spammer potrebbero tentare di entrare nel server con lo scopo di utilizzarlo per l\'invio di posta indesiderata.</p>
<p>È anche possibile bloccare il campo email nelle configurazioni dei plugin: tale impostazione non è analizzata da questo report.</p>';
$string['check_emailchangeconfirmation_error'] = 'Gli utenti possono inserire qualsiasi indirizzo di email.';
$string['check_emailchangeconfirmation_info'] = 'Gli utenti possono usare indirizzi email provenienti esclusivamente dai domini consentiti.';
$string['check_emailchangeconfirmation_name'] = 'Conferma del cambio email';
$string['check_emailchangeconfirmation_ok'] = 'Conferma del cambio dell\'email nel profilo degli utenti';
$string['check_embed_details'] = '<p>L\'inserimento incondizionato di oggetti nelle pagine è molto pericoloso. Un qualsiasi utente autenticato potrebbe lanciare un attacco XSS contro altri utenti dello stesso server. Questa impostazione deve essere disabilitata nei server in produzione.</p>';
$string['check_embed_error'] = 'L\'inserimento incondizionato di oggetti nelle pagine è abilitato. Questo rappresenta uno dei maggiori rischi per la sicurezza dei server.';
$string['check_embed_name'] = 'Consenti tag EMBED e OBJECT';
$string['check_embed_ok'] = 'L\'inserimento incondizionato di oggetti nelle pagine non è consentito.';
$string['check_frontpagerole_details'] = '<p>Il Ruolo di default della la pagina home del sito viene attribuito a tutti gli utenti autenticati per consentirgli di partecipare alle attività presenti nella pagina home del sito. Accertarsi che tale ruolo non possegga privilegi tali da consentirgli di compromettere la sicurezza del sito.</p>';
$string['check_frontpagerole_error'] = 'Il ruolo di default della la pagina home, "{$a}", non è definito in modo corretto.';
$string['check_frontpagerole_name'] = 'Ruolo di default della la pagina home del sito';
$string['check_frontpagerole_notset'] = 'Il Ruolo di default della la pagina home del sito non è impostato.';
$string['check_frontpagerole_ok'] = 'Definizione del Ruolo di default della pagina home del sito OK.';
$string['check_guestrole_details'] = '<p>Il Ruolo ospite è utilizzato per gli ospiti: agli utenti non autenticati può essere consentito un accesso temporaneo come ospite. Accertati che il ruolo ospite non possegga privilegi tali da consentirgli di compromettere la sicurezza del sito.</p>
<p>Il solo Ruolo origine supportato per il ruolo di ospite è <em>Ospite</em>.</p>';
$string['check_guestrole_error'] = 'Il Ruolo di default per gli ospiti, "{$a}", non è definito in modo corretto.';
$string['check_guestrole_name'] = 'Ruolo per gli ospiti';
$string['check_guestrole_notset'] = 'Il Ruolo per gli ospiti non è impostato.';
$string['check_guestrole_ok'] = 'Definizione del Ruolo ospite OK.';
$string['check_mediafilterswf_details'] = '<p>L\'inserimento automatico di file swf è molto pericoloso. Un qualsiasi utente autenticato potrebbe lanciare un attacco XSS contro altri utenti nello stesso server. Questa impostazione deve essere disabilitata nei server in produzione.</p>';
$string['check_mediafilterswf_error'] = 'Il filtro Plugin multimediali per file .swf è abilitato - impostazione molto pericolosa su qualsiasi server.';
$string['check_mediafilterswf_name'] = 'Abilitazione filtro .swf';
$string['check_mediafilterswf_ok'] = 'Il filtro Plugin multimediali per file .swf è disabilitato.';
$string['check_nodemodules_details'] = '<p>La cartella <em>{$a->path}</em> contiene i moduli Node.js e le relative dipendenze, generalmente installate dall\'utilityNPM. Queste librerie possono essere necessarie per lo sviluppo locale oppure per la installazione di framework grunt. La cartella può anche contenere codice potenzialmente pericoloso esponendo il sito ad attacchi da remoto.</p><p>Poichè il contenuto della cartella non è necessario per il funzionamento di Moodle in produzione, si raccomanda caldamente di rimuovere la cartella qualora il sito sia accessibile pubblicamente oppure di impedirne l\'accesso pubblico.</p>';
$string['check_nodemodules_info'] = 'La cartella node_modules non deve essere presente siti pubblici.';
$string['check_nodemodules_name'] = 'Cartella del modulo Node.js';
$string['check_openprofiles_details'] = '<p>I profili utente visibili senza login possono essere utilizzati dagli spammer. Si raccomanda di abilitare <code>Imponi il login per i profili</code> oppure <code>Imponi il login</code>.</p>';
$string['check_openprofiles_error'] = 'Chiunque può accedere ai profili utente senza autenticarsi.';
$string['check_openprofiles_name'] = 'Profili utente visibili senza login';
$string['check_openprofiles_ok'] = 'Per accedere ai profili utente è necessario autenticarsi.';
$string['check_passwordpolicy_details'] = '<p>Si raccomanda di attivare le regole password: le password facili vengono indovinate molto facilmente e sono il modo più semplice per entrare nei sistemi senza essere autorizzati. Tuttavia, fai attenzione a non attivare regole password troppo complicate, altrimenti rischi che gli utenti non siano in grado di ricordarle senza scriverle.</p>';
$string['check_passwordpolicy_error'] = 'Le regole password non sono attive.';
$string['check_passwordpolicy_name'] = 'Regole password';
$string['check_passwordpolicy_ok'] = 'Le regole password sono attive.';
$string['check_preventexecpath_details'] = '<p>Consentire la configurazione degli eseguibili tramite GUI amministrativa facilita il <i>privilege escalation</i>. Èpossibile forzare la configurazione nel file config.php: </p><p><code>$CFG->preventexecpath = true;<code></p>';
$string['check_preventexecpath_name'] = 'Percorsi degli eseguibili';
$string['check_preventexecpath_ok'] = 'I percorsi degli eseguibili sono configurabili solamente nel file config.php';
$string['check_preventexecpath_warning'] = 'I percorsi degli eseguibili sono configurabili tramite GUI amministrata.';
$string['check_publicpaths_403'] = '(È stato restituito un 403, dovrebbe essere un 404)';
$string['check_publicpaths_generic'] = 'I file {$a} non devono essere pubblici';
$string['check_publicpaths_name'] = 'Controllare tutti i percorsi pubblici/privati';
$string['check_publicpaths_ok'] = 'Tutti i percorsi interni non sono accessibili pubblicamente';
$string['check_publicpaths_warning'] = 'Alcuni percorsi interni sono accessibili pubblicamente';
$string['check_riskadmin_detailsok'] = '<p>Per favore verificare il seguente elenco di amministratori:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Per favore verificare il seguente elenco di amministratori:
</p>{$a->admins}
<p>Si raccomanda di assegnare il ruolo di amministratore solamente nel contesto di sito. I seguenti utenti hanno l\'assegnazione del ruolo amministratore in altri contesti (non supportata):</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Amministratori';
$string['check_riskadmin_ok'] = 'Sono stati individuati {$a} amministratore(i) del server.';
$string['check_riskadmin_unassign'] = 'Controllare l\'attribuzione di ruolo <a href="{$a->url}">{$a->fullname} ({$a->email})';
$string['check_riskadmin_warning'] = 'Sono stati individuati {$a->admincount} amministratori del server e {$a->unsupcount} assegnazioni non supportate del ruolo amministratore.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Queste modifiche ai ruoli danno agli utenti il privilegio di effettuare backup con dati utente. Accertati che tale privilegio sia realmente necessario.</p>{$a}';
$string['check_riskbackup_details_systemroles'] = '<p>I ruoli sotto elencati hanno il privilegio di eseguire backup con dati utente. Accertati che il privilegio sia realmente necessario.</p>{$a}';
$string['check_riskbackup_details_users'] = '<p>Come conseguenza dei privilegi assegnati ai ruoli sopra elencati, i seguenti account dispongono del privilegio di effettuare backup con dati utente. Accertati che (a) siano utenti affidabili e che (b) le loro credenziali siano protette con password forti.</p>{$a}';
$string['check_riskbackup_detailsok'] = 'Nessun ruolo possiede il privilegio di eseguire backup con dati utente. Ciononostante, gli amministratori con il privilegio "doanything" potrebbero riuscire comunque ad effettuare backup con dati utente.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} in {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Backup di dati utente';
$string['check_riskbackup_ok'] = 'Non ci sono ruoli con il privilegio di eseguire backup di dati utente';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) in {$a->contextname}</a>';
$string['check_riskbackup_warning'] = 'Sono stati individuati {$a->rolecount} ruoli, {$a->overridecount} modifiche ai ruoli e {$a->usercount} utenti con il privilegio di eseguire backup di dati utente';
$string['check_riskxss_details'] = '<p>RISK_XSS indica privilegi che devono essere dati solamente ad utenti affidabili.</p>
<p>Per favore verificate la seguente lista di utenti e accertatevi che tutti gli utenti elencati meritano la vostra fiducia:<br/>{$a}</p>';
$string['check_riskxss_name'] = 'Utenti affidabili per XSS';
$string['check_riskxss_warning'] = 'RISK_XSS - individuati {$a} utenti che devono essere affidabili.';
$string['check_unsecuredataroot_details'] = '<p>Il folder dataroot non deve essere accessibile via web. La cosa migliore è creare il foder dataroot al di fuori dello spazio web.</p>
<p>Se spostate il folder dataroot, ricordate di modificare l\'impostazione <code>$CFG->dataroot</code> nel file config.php.</p>';
$string['check_unsecuredataroot_error'] = 'La cartella dataroot <code>{$a}</code> si trova in una posizione errata ed è esposta pubblicamente sul web!';
$string['check_unsecuredataroot_name'] = 'Dataroot non sicura';
$string['check_unsecuredataroot_ok'] = 'La Dataroot non deve essere accessibile via web.';
$string['check_unsecuredataroot_warning'] = 'La cartella dataroot <code>{$a}</code> si trova in una posizione errata e potrebbe essere esposta pubblicamente sul web!';
$string['check_vendordir_details'] = '<p>La cartella <em>{$a->path}</em> contiene diverse librerie di terze parti e le relative dipendenze, generalmente installate da PHP Composer. Queste librerie possono essere necessarie per lo sviluppo locale oppure per la installazione di framework PHPUnit. La cartella può anche contenere codice potenzialmente pericoloso esponendo il sito ad attacchi da remoto.</p><p>Poichè il contenuto della cartella non è necessario per il funzionamento di Moodle in produzione, si raccomanda caldamente di rimuovere la cartella qualora il sito sia accessibile pubblicamente oppure di impedirne l\'accesso pubblico.</p>';
$string['check_vendordir_info'] = 'La cartella fornitori non deve essere presente in siti pubblici';
$string['check_vendordir_name'] = 'Cartella fornitori';
$string['check_webcron_details'] = '<p>Lanciare il cron via web può rivelare informazioni sensibili ad utenti anonimi. Si raccomanda di lanciare il corn solo via linea di comando oppure di impostare una password per l\'elaborazione del cron via web</p>';
$string['check_webcron_name'] = 'Cron web';
$string['check_webcron_ok'] = 'Gli utenti anonimi non possono accedere al cron.';
$string['check_webcron_warning'] = 'Gli utenti anonimi possono accedere al cron.';
$string['configuration'] = 'Configurazione';
$string['description'] = 'Descrizione';
$string['details'] = 'Dettagli';
$string['eventreportviewed'] = 'Visualizzazione report delle verifiche di sicurezza';
$string['issue'] = 'Problema';
$string['pluginname'] = 'Verifiche di sicurezza';
$string['privacy:metadata'] = 'Il plugin \'Sicurezza\' non memorizza dati personali.';
$string['security:view'] = 'Visualizzare il Report sulla sicurezza';
$string['timewarning'] = 'L\'elaborazione può richiedere molto tempo, vi preghiamo di attendere...';
