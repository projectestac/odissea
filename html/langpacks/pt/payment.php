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
 * Strings for component 'payment', language 'pt', version '4.5'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Arquivado';
$string['accountconfignote'] = 'Os gateways de pagamento para esta conta serão configurados separadamente';
$string['accountdeleteconfirm'] = 'Se esta conta tiver pagamentos anteriores, ela será arquivada, caso contrário, os seus dados de configuração serão apagados definitivamente. Tem a certeza de que pretende continuar?';
$string['accountidnumber'] = 'Número de identificação (ID)';
$string['accountidnumber_help'] = 'O número de identificação (ID) é usado apenas quando compara a conta com sistemas externos e não é exibido em nenhum lugar do site. Se a conta tiver um código do nome oficial, ele pode ser inserido, caso contrário, o campo pode ficar em branco.';
$string['accountname'] = 'Nome da conta';
$string['accountname_help'] = 'Como será identificada esta conta para os professores ou gestores que configuram pagamentos (por exemplo, no módulo de inscrição na disciplina).';
$string['accountnotavailable'] = 'Não disponível';
$string['createaccount'] = 'Criar conta de pagamento';
$string['deleteorarchive'] = 'Apagar ou arquivar';
$string['editpaymentaccount'] = 'Editar conta de pagamento';
$string['eventaccountcreated'] = 'Conta de pagamento criada';
$string['eventaccountdeleted'] = 'Conta de pagamento apagada';
$string['eventaccountupdated'] = 'Conta de pagamento atualizada';
$string['feeincludesurcharge'] = '{$a->fee} (inclui {$a->surcharge}% de sobretaxa por usar este tipo de pagamento)';
$string['gatewaycannotbeenabled'] = 'O gateway de pagamento não pode ser ativado porque a configuração está incompleta.';
$string['gatewaydisabled'] = 'Desativado';
$string['gatewayenabled'] = 'Ativado';
$string['gatewaynotfound'] = 'Gateway não encontrado';
$string['gotomanageplugins'] = 'Ativar e desativar os gateways de pagamento e definir sobretaxas para {$a}.';
$string['gotopaymentaccounts'] = 'Pode criar várias contas de pagamento usando qualquer um destes gateways em \'{$a}\'';
$string['hidearchived'] = 'Ocultar arquivados';
$string['noaccountsavilable'] = 'Nenhuma conta de pagamento está disponível.';
$string['nocurrencysupported'] = 'Nenhum pagamento em qualquer moeda é suportado. Certifique-se de que pelo menos um gateway de pagamento está ativado.';
$string['nogateway'] = 'Não existe gateway de pagamento que possa ser usado.';
$string['nogatewayselected'] = 'Tem de selecionar um gateway de pagamento.';
$string['paymentaccount'] = 'Conta de pagamento';
$string['paymentaccounts'] = 'Contas de pagamento';
$string['paymentaccountsexplained'] = 'Crie uma ou várias contas de pagamento para este site. Cada conta inclui a configuração dos gateways de pagamento disponíveis. Quem configurar o pagamento no site (por exemplo, pagamento pela inscrição na disciplina) poderá escolher entre as contas disponíveis.';
$string['payments'] = 'Pagamentos';
$string['privacy:metadata:database:payments'] = 'Informação sobre os pagamentos.';
$string['privacy:metadata:database:payments:amount'] = 'O valor do pagamento.';
$string['privacy:metadata:database:payments:currency'] = 'A moeda do pagamento.';
$string['privacy:metadata:database:payments:gateway'] = 'O gateway de pagamento que é usado para o pagamento.';
$string['privacy:metadata:database:payments:timecreated'] = 'Data e hora em que o pagamento foi efetuado';
$string['privacy:metadata:database:payments:timemodified'] = 'A data e hora em que o registo do pagamento foi atualizado pela última vez.';
$string['privacy:metadata:database:payments:userid'] = 'O utilizador que efetuou o pagamento.';
$string['restoreaccount'] = 'Rataurar';
$string['selectpaymenttype'] = 'Selecionar o tipo de pagamento';
$string['showarchived'] = 'Mostrar arquivados';
$string['supportedcurrencies'] = 'Moedas suportadas';
$string['surcharge'] = 'Sobretaxa (percentagem)';
$string['surcharge_desc'] = 'A sobretaxa é um percentual adicional cobrado aos utilizadores que optam por pagar usando este gateway de pagamento.';
