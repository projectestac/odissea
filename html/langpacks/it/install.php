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
 * Strings for component 'install', language 'it', branch 'MOODLE_38_STABLE'
 *
 * @package   install
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'La cartella Admin specificata non è corretta';
$string['admindirname'] = 'Cartella Admin';
$string['admindirsetting'] = 'Alcuni web host utilizzano la cartella /admin come URL di accesso a pannelli di controllo o altre funzioni particolari. Tuttavia questo nome coincide con il nome della cartella che Moodle utilizza per i propri file di amministrazione. Per evitare conflitti, è possibile specificare un nome alternativo per la cartella admin di Moodle. Ad esempio:<p><b>moodleadmin</b></p>
Tutti i link che puntano ai file di amministrazione di Moodle terranno conto di questa variazione.';
$string['admindirsettinghead'] = 'Impostazione della cartella Admin...';
$string['admindirsettingsub'] = 'Alcuni web host utilizzano la cartella /admin come URL di accesso a pannelli di controllo o altre funzioni particolari. Tuttavia questo nome coincide con il nome della cartella che Moodle utilizza per i propri file di amministrazione. Per evitare conflitti, è possibile specificare un nome alternativo per la cartella admin di Moodle. Ad esempio:<p><b>moodleadmin</b></p>
Tutti i link che puntano ai file di amministrazione di Moodle terranno conto di questa variazione.';
$string['availablelangs'] = 'Elenco delle lingue disponibili';
$string['caution'] = 'Attenzione';
$string['chooselanguage'] = 'Scegli la lingua';
$string['chooselanguagehead'] = 'Scegli la lingua';
$string['chooselanguagesub'] = 'Scegli la lingua da usare durante l\'installazione. La lingua usata nel sito e dagli utenti potrà essere modificata in seguito.';
$string['cliadminemail'] = 'Nuovo indirizzo email dell\'amministratore';
$string['cliadminpassword'] = 'Password per l\'amministratore';
$string['cliadminusername'] = 'Username account amministratore';
$string['clialreadyconfigured'] = 'Il file di configurazione config.php è già presente.
Utilizzare admin/cli/install_database.php per installare Moodle.';
$string['clialreadyinstalled'] = 'Il file config.php è già presente.
Utilizzare admin/cli/install_database.php per aggiornare Moodle.';
$string['cliinstallfinished'] = 'L\'installazione è stata completata correttamente';
$string['cliinstallheader'] = 'Programma di installazione Moodle {$a} via linea di comando';
$string['climustagreelicense'] = 'In modalità non interattiva + necessario accettare la licenza specificando il parametro --agree-license';
$string['cliskipdatabase'] = 'Salto dell\'installazione del database.';
$string['clitablesexist'] = 'Le tabelle del database sono già presenti, l\'installazione via linea di comando non può proseguire.';
$string['compatibilitysettings'] = 'Verifica impostazioni PHP...';
$string['compatibilitysettingshead'] = 'Verifica impostazioni PHP...';
$string['compatibilitysettingssub'] = 'Il server deve superare tutti i seguenti test per consentire il corretto funzionamento di Moodle';
$string['configfilenotwritten'] = 'Lo script di installazione non è in grado di creare il file config.php con le impostazioni, fornite probabilmente perché la cartella dove si trova Moodle non ha permessi di scrittura. È possibile copiare manualmente il codice seguente in un file chiamato config.php da installare nella cartella radice di Moodle.';
$string['configfilewritten'] = 'config.php creato correttamente';
$string['configurationcomplete'] = 'Configurazione completata';
$string['configurationcompletehead'] = 'Configurazione completata';
$string['configurationcompletesub'] = 'Moodle ha tentato di salvare la configurazione in un file nella cartella radice dell\'installazione.';
$string['database'] = 'Database';
$string['databasehead'] = 'Impostazioni database';
$string['databasehost'] = 'Host database';
$string['databasename'] = 'Nome database';
$string['databasepass'] = 'Password database';
$string['databaseport'] = 'Porta database';
$string['databasesocket'] = 'Unix socket';
$string['databasetypehead'] = 'Scegli un database driver';
$string['databasetypesub'] = 'Moodle supporta molti tipi di database. Se non sai quale usare, contatta l\'amministratore del server.';
$string['databaseuser'] = 'Utente database';
$string['dataroot'] = 'Cartella dati';
$string['datarooterror'] = 'La \'cartella dati\' specificata non è stata trovata né è stato possibile crearla. Modifica il percorso oppure creala manualmente.';
$string['datarootpermission'] = 'Permessi cartella dati';
$string['datarootpublicerror'] = 'La \'cartella dati\' specificata è accessibile direttamente via web. Devi specificare una cartella alternativa.';
$string['dbconnectionerror'] = 'Non è possibile connettersi al Database. Verifica le impostazioni fornite.';
$string['dbcreationerror'] = 'Errore nella creazione del Database. Non è possibile creare un Database usando le impostazioni fornite.';
$string['dbhost'] = 'Host server';
$string['dbpass'] = 'Password';
$string['dbport'] = 'Porta';
$string['dbprefix'] = 'Prefisso tabelle';
$string['dbtype'] = 'Tipo';
$string['directorysettings'] = '<p>Verifica e conferma la correttezza degli indirizzi web e dei percorsi assoluti di installazione.</p>

<p><b>Indirizzo web:</b> Specifica l\'indirizzo web per raggiungere l\'installazione di Moodle. Se l\'installazione è raggiungibile da più di una URL, allora indicare l\'URL che sarà utilizzato dagli utenti senza aggiungete uno slash alla fine.</p>

<p><b>Cartella di Moodle:</b> Specifica il percorso assoluto della cartella dove verrà installato Moodle. Accertarsii che il nome della cartella tenga conto di eventuali lettere maiuscole o minuscole.</p>

<p><b>Cartella dati:</b> E\' la cartella dove Moodle inserirà i file caricati dagli utenti. Il web server (in genere \'nobody\' o \'apache\') DEVE avere i permessi di lettura e di scrittura su questa cartella. In aggiunta, la cartella dei dati non deve essere direttamente accessibile via web. L\'installer cercherà di creare la cartella se non esistente</p>';
$string['directorysettingshead'] = 'Verifica e confermate la correttezza degli indirizzi web e dei percorsi assoluti di installazione';
$string['directorysettingssub'] = '<b>Indirizzo web:</b>
Specifica l\'indirizzo web per raggiungere la tua installazione Moodle. Se l\'installazione è raggiungibile da più di una URL, allora specifica la URL che sarà utilizzata dagli studenti senza aggiungere uno slash al termine della URL.
<br/>
<br/>
<b>Cartella di Moodle</b> Specifica il percorso assoluto della cartella dove stai installando Moodle. Accertati che il nome della cartella tenga conto di eventuali lettere maiuscole o minuscole.
<br/>
<br/>
<b>Cartella dati:</b> E\' la cartella dove Moodle inserirà i file caricati dagli utenti. Il web server (in genere \'nobody\' o \'apache\') DEVE avere i permessi di lettura e di scrittura su questa cartella. In aggiunta, la cartella dei dati non deve essere direttamente accessibile via web. L\'installer cercherà di creare questo folder se non esiste,';
$string['dirroot'] = 'Cartella di Moodle';
$string['dirrooterror'] = 'L\'impostazione \'Cartella di Moodle\' sembra essere errata - non è possibile trovare l\'installazione di Moodle nel percorso specificato. Il valore riportato sotto  è stato resettato.';
$string['download'] = 'Scarica';
$string['downloadlanguagebutton'] = 'Scarica il language pack "{$a}";';
$string['downloadlanguagehead'] = 'Scarica language pack';
$string['downloadlanguagenotneeded'] = 'È possibile continuare l\'installazione utilizzando il language pack "{$a}" di default.';
$string['downloadlanguagesub'] = 'Se lo desideri, puoi scaricare un Language pack e continuare l\'installazione con la lingua scaricata.<br /><br />Se lo scaricamento del Language pack non andrà a buon fine, l\'installazione proseguirà in lingua Inglese. (Una volta completata l\'installazione, avrai comunque la possibilità di scaricare ed installare ulteriori Language pack)';
$string['doyouagree'] = 'Accetti ? (si/no)';
$string['environmenthead'] = 'Verifica dell\'ambiente...';
$string['environmentsub'] = 'Stiamo verificando che i vari componenti del sistema soddisfino i requisiti necessari.';
$string['environmentsub2'] = 'Ciascuna release di Moodle prevede come requisito minimo una data versione del PHP ed una serie di estensioni. Prima di una installazione o di un aggiornamento viene eseguita la verifica dei requisiti minimi. Se non sai come installare nuove versioni del PHP o le sue estensioni, contatta l\'amministratore del tuo server.';
$string['errorsinenvironment'] = 'Sono stati riscontarti problemi nel tuo ambiente';
$string['fail'] = 'Errore';
$string['fileuploads'] = 'Caricamento file';
$string['fileuploadserror'] = 'Deve essere impostato a on';
$string['fileuploadshelp'] = '<p>Sul server il caricamento dei file sembra essere disabilitato.</p>

<p>Moodle può essere installato, ma senza questa funzionalità non sarà possibile  caricare file nei corsi o modificare le immagini degli utenti..</p>

<p>Per abilitare il caricamento dei file devi modificare il file php.ini sul tuo server impostando <b>file_uploads</b> a \'1\'.</p>';
$string['inputdatadirectory'] = 'Cartella dati:';
$string['inputwebadress'] = 'Indirizzo Web:';
$string['inputwebdirectory'] = 'Cartella di Moodle:';
$string['installation'] = 'Installazione';
$string['invaliddbprefix'] = 'Il prefisso non è valido. Può contenere solamente lettere minuscole d il trattino basso.';
$string['langdownloaderror'] = 'Purtroppo non è stato possibile scaricare la lingua "{$a}". L\'installazione proseguirà in lingua Inglese.';
$string['langdownloadok'] = 'La lingua "{$a}" è stata installata. L\'installazione proseguirà in questa lingua.';
$string['memorylimit'] = 'Memory Limit';
$string['memorylimiterror'] = 'Il limite di memoria del PHP è impostato a un valore troppo basso ... potrebbero verificarsi problemi in futuro.';
$string['memorylimithelp'] = '<p>Il limite di memoria assegnata al PHP attualmente è {$a}.</p>

<p>Tale limite potrà causare problemi nel funzionamento di Moodle, specialmente se usi molti moduli di attività con molti utenti.</p>

<p>Ti raccomandiamo di impostare il PHP con un limite più alto, ad esempio 40M, usando uno dei modi seguenti:
<ol>
<li>Se possibile, ricompila il PHP con l\'opzione <i>--enable-memory-limit</i>.
Questo consentirà a Moodle di impostare in autonomia il limite di memoria.</li>
<li>Se hai accesso al file php.ini, è possibile modificare la variabile <b>memory_limit</b> a un valore più alto, ad esempio 40M. Se non hai accesso, puoi chiedere all\'amministratore di sistema di farlo.</li>
<li>Su alcuni server con il PHP è possibile creare un file .htaccess nella cartella di Moodle contenente questa linea:
<blockquote>php_value memory_limit 40M</blockquote>
<p>Tuttavia, su alcuni server la direttiva potrebbe impedire a <b>tutte</b> le pagine PHP di funzionare (appariranno degli errori durante la visualizzazione delle pagine), in tal caso dovrai rimuovere il file .htaccess.</li></ol>';
$string['mysqliextensionisnotpresentinphp'] = 'Il PHP non è stato configurato correttamente con l\'estensione MySQLi e non può comunicare con MySQL. Controlla il file php.ini o ricompila il PHP.';
$string['nativemariadb'] = 'MariaDB (native/mariadb)';
$string['nativemariadbhelp'] = '<p>Devi ora configurare il database dove Moodle memorizzerà la maggior parte dei dati e delle impostazioni.</p>
<p>Il nome del database, il nome utente e la password sono campi obbligatori, il prefisso delle tabelle è facoltativo.</p>
<p>Il nome del database può contenere solamente caratteri alfanumerici, il simbolo del dollaro ($) e il trattino basso (_).</p>
<p>Se il database non esiste e se l\'utente fornito ha i permessi necessari, Moodle tenterà di creare il proprio database con le necessarie impostazioni.</p>
<p>Questo driver non è compatibile con il vecchio motore MyISAM.</p>';
$string['nativemysqli'] = 'Improved MySQL (native/mysqli)';
$string['nativemysqlihelp'] = '<p>Devi ora configurare il database dove Moodle memorizzerà la maggior parte dei dati e delle impostazioni.</p>
<p>Il nome del database, il nome utente e la password sono campi obbligatori, il prefisso delle tabelle è facoltativo.</p>
<p>Il nome del database può contenere solamente caratteri alfanumerici, il simbolo del dollaro ($) e il trattino basso (_).</p>
<p>Se il database non esiste e se l\'utente fornito ha i permessi necessari, Moodle tenterà di creare il proprio database con le necessarie impostazioni.</p>';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativeocihelp'] = 'Devi ora configurare il database dove Moodle memorizzerà la maggior parte dei dati. Il database con l\'utente e la password d\'accesso devono già essere stati creati. Il prefisso delle tabelle è obbligatorio.';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = '<p>Devi ora configurare il database dove Moodle memorizzerà la maggior parte dei dati e delle impostazioni.</p>
<p>Il nome del database, il nome utente, la password e il prefisso delle tabelle sono campi obbligatori.</p>
<p>Il database deve essere già stato creato e l\'utente fornito deve potervi accedere in lettura e scrittura.</p>';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Devi ora configurare il database dove Moodle memorizzerà la maggior parte dei dati. Il database con l\'utente e la password d\'accesso devono già essere stati creati. Il prefisso delle tabelle è obbligatorio.';
$string['nativesqlsrvnodriver'] = 'I driver PHP Microsoft per SQL Server non sono installati o non sono configurati correttamente.';
$string['ociextensionisnotpresentinphp'] = 'Il PHP non è stato configurato correttamente con l\'estensione OCI8 e non può comunicare con Oracle. Controlla il file php.ini o ricompila il PHP.';
$string['pass'] = 'Test superato';
$string['paths'] = 'Percorsi';
$string['pathserrcreatedataroot'] = 'Lo script di installazione non ha potuto creare la Cartella dei dati ({$a->dataroot}).';
$string['pathshead'] = 'Conferma percorsi';
$string['pathsrodataroot'] = 'Non è possibile scrivere nella  Cartella dati.';
$string['pathsroparentdataroot'] = 'La cartella genitore ({$a->parent}) non è scrivibile. Lo script di installazione non può creare la Cartella dati ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Alcuni web host utilizzano la cartella /admin come URL di accesso a pannelli di controllo od altre funzioni particolari. Tuttavia questo nome coincide con il nome della cartella che Moodle utilizza per i propri file di amministrazione. Per evitare conflitti, è possibile specificare un nome alternativo per la cartella Admin di Moodle. Ad esempio:<p><b>moodleadmin</b></p>
Tutti i link che puntano ai file di amministrazione di Moodle terranno conto di questa variazione.';
$string['pathssubdataroot'] = '<p>La cartella dove Moodle memorizzerà i file caricati dagli utenti.</p>
<p>L\'utente con il qule gira il processo del web server (in genere \'www-data\' o \'apache\') deve avere i permessi di lettura e di scrittura su questa cartella.</p>
<p>La cartella inoltre non deve essere direttamente accessibile via web.</p>
<p>Qualora la cartella non esista, lo script di installazione tenterà di crearla.</p>';
$string['pathssubdirroot'] = '<p>Percorso assoluto della cartella dove si trova il codice di Moodle.</p>';
$string['pathssubwwwroot'] = '<p>L\'iIndirizzo web per raggiungere a Moodle, in altre parole l\'indirizzo che gli utenti inseriranno nella barra degli indirizzi del proprio browser per accedere a questa installazione.</p>
<p>Non è possibile accedere alla stessa installazione Moodle usando più di un indirizzi web. Se il tuo sito usa più indirizzi web, devi configurare dei re-indirizzamenti permanenti per tutti gli altri indirizzi web.</p>
<p>Se il tuo sito è raggiungibile sia dalla Internet sia dalla rete interna (a volte chiamata Intranet), allora usa l\'indirizzo Internet pubblico.</p>
<p>Se l\'indirizzo utilizzato è errato, per favore correggilo nella barra degli indirizzi del browser e avvia nuovamente l\'installazione.</p>';
$string['pathsunsecuredataroot'] = 'La posizione della Cartella dati non è sicura';
$string['pathswrongadmindir'] = 'La cartella Admin non esiste';
$string['pgsqlextensionisnotpresentinphp'] = 'Il PHP non è stato configurato correttamente con l\'estensione PGSQL e non può comunicare con PostgreSQL. Controlla il file php.ini o ricompila il PHP.';
$string['phpextension'] = '{$a} estensioni PHP';
$string['phpversion'] = 'Versione PHP';
$string['phpversionhelp'] = '<p>Moodle necessita come minimo della versione 5.6.5 del PHP. (La versione 7.0.x ha alcuni limiti nell\'engine)</p>
<p>La versione installata nel sistema è la {$a}</p>
<p>E\' necessario aggiornare la versione del PHP oppure spostarsi su un host che abbia una versione più aggiornata del PHP.<br>';
$string['releasenoteslink'] = 'Per informazioni su questa versione di Moodle, fai riferimento alle Note di Rilascio su {$a}';
$string['safemode'] = 'Safe mode';
$string['safemodeerror'] = 'Moodle può avere problemi con il safe mode impostato a on';
$string['safemodehelp'] = '<p>Moodle può avere diversi problemi con safe mode impostato ad on, tra cui l\'impossibilità  di creare nuovi file.</p>

<p>Safe modedi solito  è abilitato su paranoici web server pubblici, se è cosi l\'unica soluzione è trovare un nuovo web server per il tuo sito Moodle.</p>

<p>È possibile continuare l\'installazione se si vuole, ma aspettati una serie di problemi in seguito.</p>';
$string['sessionautostart'] = 'Session Auto Start';
$string['sessionautostarterror'] = 'Dovrebbe essere impostato ad off';
$string['sessionautostarthelp'] = '<p>Moodle richiede il supporto delle sessioni e non funziona senza.</p>
<p>Le sessioni possono essere abilitate nel file php.ini ... cerca il parametro session.auto_start.</p>';
$string['sqliteextensionisnotpresentinphp'] = 'Il PHP non è stato configurato correttamente con l\'estensione SQLite extension. Controlla il file php.ini o ricompila il PHP.';
$string['upgradingqtypeplugin'] = 'Aggiornamento plugin tipi di domande';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Se vedi questa pagina hai installato correttamente e lanciato il pacchetto <strong>{$a->packname} {$a->packversion}</strong>. Complimenti!';
$string['welcomep30'] = 'La release di <strong>{$a->installername}</strong> include l\'applicazione per creare l\'ambiente necessario a far girare <strong>Moodle</strong>:';
$string['welcomep40'] = 'Il pacchetto include anche <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'L\'utilizzo delle applicazioni incluse in questo pacchetto è regolato dalle rispettive licenze. L\'intero pacchetto <strong>{$a->installername}</strong> è <a href="http://www.opensource.org/docs/definition_plain.html">open source</a> ed è distribuito in accordo alla licenza <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Le prossime pagine ti guideranno attraverso semplici passi per installare e configurare <strong>Moodle</strong> nel tuo computer. Puoi utilizzare le impostazioni di default oppure modificarle per adeguarle alle tue esigenze.';
$string['welcomep70'] = 'Fai click sul pulsante "Avanti" per continuare l\'installazione di <strong>Moodle</strong>.';
$string['wwwroot'] = 'Indirizzo web';
$string['wwwrooterror'] = 'L\'indirizzo web sembra non essere valido - questa installazione di Moodle non sembra trovarsi dove indicato. L\'indirizzo è stato reimpostato.';
