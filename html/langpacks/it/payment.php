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
 * Strings for component 'payment', language 'it', version '4.5'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Archiviato';
$string['accountconfignote'] = 'Per questo account il gateway di pagamento verrà configurato separatamente';
$string['accountdeleteconfirm'] = 'L\'account sarà archiviato se ha già ricevuto pagamenti, in caso contrario sarà eliminato del tutto. Sei sicuro di continuare?';
$string['accountidnumber'] = 'Codice identificativo';
$string['accountidnumber_help'] = 'Il codice identificativo sarà utilizzato solamente per creare una corrispondenza tra account e sistemi esterni ma non verrà visualizzato all\'infuori di qui. Qualora l\'account ha un nome codificato ufficiale, è possibile utilizzare quel nome, altrimenti è anche possibile non compilare il campo.';
$string['accountname'] = 'Nome dell\'account';
$string['accountname_help'] = 'Il nome che consente a docenti e manager di identificare l\'account (ad esempio nel plugin di iscrizione al corso).';
$string['accountnotavailable'] = 'Non disponibile';
$string['createaccount'] = 'Crea account di pagamento';
$string['deleteorarchive'] = 'Elimina o archivia';
$string['editpaymentaccount'] = 'Modifica account di pagamento';
$string['eventaccountcreated'] = 'Creazione account di pagamento';
$string['eventaccountdeleted'] = 'Eliminazione account di pagamento';
$string['eventaccountupdated'] = 'Aggiornamento account di pagamento';
$string['feeincludesurcharge'] = '{$a->fee} (include un sovrapprezzo del {$a->surcharge}% dovuto all\'utilizzo di questo tipo di pagamento)';
$string['gatewaycannotbeenabled'] = 'Non è possibile attivare il gateway di pagamento poiché la configurazione non è stata completata.';
$string['gatewaydisabled'] = 'Disabilitato';
$string['gatewayenabled'] = 'Abilitato';
$string['gatewaynotfound'] = 'Il gateway non è stato trovato';
$string['gotomanageplugins'] = 'Abilita e disabilita gateway di pagamento e imposta sovrapprezzi via {$a}.';
$string['gotopaymentaccounts'] = 'È possibile creare più account di pagamento utilizzando i gateway disponibili in {$a}';
$string['hidearchived'] = 'Nascondi archiviati';
$string['noaccountsavilable'] = 'Non è disponibile nessun account di pagamento.';
$string['nocurrencysupported'] = 'Nonne è supportato nessun metodo di pagamento. Per favore accertarsi che sia abilitato almeno un metodo di pagamento.';
$string['nogateway'] = 'Non ci sono gateway di pagamento utilizzabili.';
$string['nogatewayselected'] = 'È necessario selezionare un gateway di pagamento';
$string['paymentaccount'] = 'Account di pagamento';
$string['paymentaccounts'] = 'Account di pagamento';
$string['paymentaccountsexplained'] = 'È possibile creare uno o più account di pagamento ciascuno con il proprio gateway. Coloro che possono configurare le iscrizioni a pagamento potranno scegliere uno degli account configurati.';
$string['payments'] = 'Pagamenti';
$string['privacy:metadata:database:payments'] = 'Informazioni sul pagamento';
$string['privacy:metadata:database:payments:amount'] = 'Ammontare del pagamento';
$string['privacy:metadata:database:payments:currency'] = 'Valuta del pagamento';
$string['privacy:metadata:database:payments:gateway'] = 'Gateway utilizzato per il pagamento';
$string['privacy:metadata:database:payments:timecreated'] = 'Orario nel quale è stato effettuato il pagamento';
$string['privacy:metadata:database:payments:timemodified'] = 'Orario nel quale il record del pagamento è stato aggiornato';
$string['privacy:metadata:database:payments:userid'] = 'Utente che ha effettuato il pagamento';
$string['restoreaccount'] = 'Ripristina';
$string['selectpaymenttype'] = 'Seleziona il metodo di pagamento';
$string['showarchived'] = 'Visualizza archiviati';
$string['supportedcurrencies'] = 'Valute supportate';
$string['surcharge'] = 'Sovrapprezzo (percentuale)';
$string['surcharge_desc'] = 'Il sovrapprezzo è una percentuale aggiunta a quegli utenti che selezionano questo metodo di pagamento.';
