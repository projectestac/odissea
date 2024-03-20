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
 * Strings for component 'message_airnotifier', language 'it', version '4.1'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Gestire dispositivi';
$string['airnotifieraccesskey'] = 'Chiave di accesso Airnotifier';
$string['airnotifierappname'] = 'Nome app Airnotifier';
$string['airnotifierfielderror'] = 'Per favore rimuovere spazi bianchi o caratteri non necessari dal seguente campo: {$a}';
$string['airnotifiermobileappname'] = 'Nome mobile app';
$string['airnotifierport'] = 'Porta Airnotifier';
$string['airnotifierurl'] = 'URL Airnotifier';
$string['checkconfiguration'] = 'Controlla e verifica la configurazione delle notifiche push';
$string['configairnotifieraccesskey'] = 'La chiave di accesso da utilizzare per il collegamento con il server Airnotifier. È possibile ottenere la chiave cliccando sul link sottostante, "Richiedi chiave di accesso" (valido solo per siti registrati), oppure previa creazione di account su <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['configairnotifierappname'] = 'L\'identificativo del nome app in Airnotifier';
$string['configairnotifiermobileappname'] = 'L\'identificativo univoco della app mobile (ad esempio com.moodle.moodlemobile)';
$string['configairnotifierport'] = 'La porta da utilizzare per il collegamento con il server Airnotifier';
$string['configairnotifierurl'] = 'L\'URL del server al quale collegarsi per inviare notifiche push';
$string['configured'] = 'Configurato';
$string['deletecheckdevicename'] = 'Elimina dispositvo: {$a->name}';
$string['deletedevice'] = 'Elimina il dispositivo. Da notare che una app puà registrare nuovamente il dispositivo. Se il dispositivo continua a ricomparire, disabilitarlo.';
$string['devicetoken'] = 'Token dispositivo';
$string['donotsendnotification'] = 'Non inviare nessuna notifica';
$string['enableprocessor'] = 'Abilita le notifiche mobile';
$string['encryptnotifications'] = 'Crittografa notifiche';
$string['encryptprocessing'] = 'Per i dispositivi che non supportano la crittografia';
$string['encryptprocessing_desc'] = 'Per favore definire il comportamento quando un dispositivo di destinazione non supporta la crittografia (supporto solo per Android 6 e IOS 13 e superiori)';
$string['errorretrievingkey'] = 'Si è verificato un errore durante il recupero della chiave. Per utilizzare il servizio, il sito deve essere registrato. Se il sito è già registrato, provare ad aggiornare la registrazione. In alternativa è possibile ottenere una chiave di accesso creando un account su <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['keyretrievedsuccessfully'] = 'La chiave è stata recuperata correttamente. Per accedere alle statistiche di utilizzo della Moodle App, per favore creare un account sul <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['messageprovidersempty'] = 'Non ci sono notifiche mobili abilitate nelle preferenze predefinite di notifica .';
$string['messageproviderslow'] = 'Nelle preferenze predefinite di notifica sono abilitate solo alcune notifiche mobili.';
$string['moodleappsportallimitswarning'] = 'Da tenere presente che il numero di dispositivi utente autorizzati a ricevere notifiche dipende dalla sottoscrizione dell\'app Moodle. Per i dettagli, visita il <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['nodevices'] = 'Non sono presenti dispositivi registrati. I dispositivi appariranno automaticamente dopo aver installato l\'app Moodle e aggiunto questo sito.';
$string['noemailevernotset'] = '$CFG->noemailever è disabilitato';
$string['noemaileverset'] = '$CFG->noemailever è abilitato nel file config.php. È necessario disabilitarlo impostandolo a \'false\' oppure rimuovere l\'istruzione.';
$string['nopermissiontomanagedevices'] = 'Non sei autorizzato a gestire dispositivi.';
$string['notconfigured'] = 'Il server Airnotifier non è stato configurato, non è possibile inviare notifiche push.';
$string['notificationsserverconfiguration'] = 'Configurazione del server delle notifiche (Airnotifier)';
$string['pluginname'] = 'Mobile';
$string['privacy:appiddescription'] = 'Identificativo dell\'applicazione in uso.';
$string['privacy:enableddescription'] = 'Abilitazione Airnotifier del dispositivo';
$string['privacy:metadata:date'] = 'La data di invio del messaggio.';
$string['privacy:metadata:enabled'] = 'Scelta di abilitare il dispositivo Airnotifier.';
$string['privacy:metadata:externalpurpose'] = 'Informazioni inviate a un sito esterno per essere poi inviate sul dispositivo mobile dell\'utente.';
$string['privacy:metadata:fullmessage'] = 'Il testo del messaggio';
$string['privacy:metadata:notification'] = 'Scelta di rendere questo messaggio una notifica o meno.';
$string['privacy:metadata:smallmessage'] = 'Versione ridotta del messaggio.';
$string['privacy:metadata:subject'] = 'L\'oggetto del messaggio.';
$string['privacy:metadata:tableexplanation'] = 'Le informazioni sul dispositivo Airnotifier sono memorizzate qui.';
$string['privacy:metadata:userdeviceid'] = 'ID che rimanda al dispositivo mobile dell\'utente.';
$string['privacy:metadata:userfromfullname'] = 'Nome e cognome dell\'autore del messaggio.';
$string['privacy:metadata:userfromid'] = 'L\'ID dell\'autore del messaggio.';
$string['privacy:metadata:userid'] = 'L\'ID dell\'utente che ha inviato il messaggio';
$string['privacy:metadata:username'] = 'Username dell\'utente.';
$string['privacy:metadata:usersubsystem'] = 'Il plugin è collegato al sottosistema utente.';
$string['privacy:subcontext'] = 'Messaggio Airnotifier';
$string['requestaccesskey'] = 'Richiedi chiave di accesso';
$string['sendnotificationnotenc'] = 'Invia le notifiche non crittografate';
$string['sendtest'] = 'Invia una notifica push di prova ai miei dispositivi';
$string['sendtestconfirmation'] = 'Verrà inviata una notifica push di prova ai dispositivi che utilizzi per connetterti a questo sito. Assicurarsi che i dispositivi siano connessi a Internet e che l\'app mobile non sia aperta (poiché le notifiche push vengono visualizzate solo quando vengono ricevute in background).';
$string['serverconnectivityerror'] = 'Questo sito non è in grado di connettersi al server delle notifiche {$a}';
$string['showhide'] = 'Abilita/disabilita il dispositivo';
$string['sitemustberegistered'] = 'Per utilizzare l\'istanza Airnotifier pubblica, è necessario registrare il proprio sito Moodle. In alternativa, è possibile ricevere una Access Key creando  account sul <a href="https://apps.moodle.com">Moodle Apps Portal</a>.';
$string['unknowndevice'] = 'Dispositivo sconosciuto';
$string['userdevices'] = 'Dispositivi utente';
$string['view_notification'] = 'Tocca per visualizzare';
