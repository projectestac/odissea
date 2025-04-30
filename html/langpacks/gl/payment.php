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
 * Strings for component 'payment', language 'gl', version '4.4'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Arquivado';
$string['accountconfignote'] = 'As pasarelas de pagamento desta conta configuraranse por separado';
$string['accountdeleteconfirm'] = 'Se esta conta ten pagamentos anteriores, arquivarase, se non, borraranse permanentemente os seus datos de configuración. Confirma que quere continuar?';
$string['accountidnumber'] = 'Número ID';
$string['accountidnumber_help'] = 'O número de identificación só se emprega cando se compara a conta con sistemas externos e non se amosa en ningunha parte do sitio. Se a conta ten un nome de código oficial, pódese introducir, se non, o campo pode deixarse en branco.';
$string['accountname'] = 'Nome da conta';
$string['accountname_help'] = 'Como se identificará esta conta para os profesores ou xestores que configuran os pagos (por exemplo, no engadido de matriculación do curso).';
$string['accountnotavailable'] = 'Non dispoñíbel';
$string['createaccount'] = 'Crear conta de pago';
$string['deleteorarchive'] = 'Eliminar ou arquivar';
$string['editpaymentaccount'] = 'Editar a conta de pago';
$string['eventaccountcreated'] = 'Creouse unha conta de pagamento';
$string['eventaccountdeleted'] = 'Eliminouse a conta de pagamento';
$string['eventaccountupdated'] = 'Actualizouse a conta de pagamento';
$string['feeincludesurcharge'] = '{$a->fee} (inclúe unha recarga do {$a->surcharge}% por usar este tipo de pago)';
$string['gatewaycannotbeenabled'] = 'Non é posíbel activar a pasarela de pagamentos porque a configuración está incompleta.';
$string['gatewaydisabled'] = 'Desactivado';
$string['gatewayenabled'] = 'Activado';
$string['gatewaynotfound'] = 'Non se atopou a pasarela';
$string['gotomanageplugins'] = 'Activa e desactiva as pasarelas de pagamento e estabelece recargas a través de {$a}.';
$string['gotopaymentaccounts'] = 'Pode crear varias contas de pagamento usando calquera destas pasarelas na páxina {$a}';
$string['hidearchived'] = 'Agochar o arquivado';
$string['noaccountsavilable'] = 'Non hai contas de pagamento dispoñíbeis.';
$string['nocurrencysupported'] = 'Non se admite o pagamento en ningunha moeda. Asegúrese de que estea activada polo menos unha pasarela de pagamento.';
$string['nogateway'] = 'Non hai ningunha pasarela de pagamento que poida usarse.';
$string['nogatewayselected'] = 'Primeiro ten que seleccionar unha pasarela de pagamento.';
$string['paymentaccount'] = 'Conta de pagamento';
$string['paymentaccounts'] = 'Contas de pagamento';
$string['paymentaccountsexplained'] = 'Cree unha ou varias contas de pagamento para este sitio. Cada conta inclúe a configuración das pasarelas de pagamento dispoñíbeis. A persoa que configure os pagos no sitio (por exemplo, o pago da matricula do curso) poderá escoller entre as contas dispoñíbeis.';
$string['payments'] = 'Pagamentos';
$string['privacy:metadata:database:payments'] = 'Información sobre os pagamentos.';
$string['privacy:metadata:database:payments:amount'] = 'O importe do pagamento.';
$string['privacy:metadata:database:payments:currency'] = 'A moeda de pagamento.';
$string['privacy:metadata:database:payments:gateway'] = 'A pasarela de pagamento que se usa para o pago.';
$string['privacy:metadata:database:payments:timecreated'] = 'A hora en que se realizou o pagamento.';
$string['privacy:metadata:database:payments:timemodified'] = 'A hora na que se actualizou por última vez o rexistro do pagamento.';
$string['privacy:metadata:database:payments:userid'] = 'O usuario que realizou o pagamento.';
$string['restoreaccount'] = 'Restaurar';
$string['selectpaymenttype'] = 'Seleccione o tipo de pagamento';
$string['showarchived'] = 'Amosar o arquivado';
$string['supportedcurrencies'] = 'Moedas admitidas';
$string['surcharge'] = 'Recarga (porcentaxe)';
$string['surcharge_desc'] = 'A recarga é unha porcentaxe adicional que se cobra aos usuarios que deciden pagar mediante esta pasarela de pagamento.';
