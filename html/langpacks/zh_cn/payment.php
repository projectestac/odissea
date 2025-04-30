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
 * Strings for component 'payment', language 'zh_cn', version '4.4'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = '存档';
$string['accountconfignote'] = '此账户的支付网关将单独配置';
$string['accountdeleteconfirm'] = '如果此账户有过往付款，则会被存档，否则其配置数据将被永久删除。 你确定你要继续吗？';
$string['accountidnumber'] = '身份证号码';
$string['accountidnumber_help'] = '身份证号码仅在将帐户与外部系统匹配时使用，不会显示在网站的任何位置。 如果账户有官方代号，则可以输入，否则该字段可以留空。';
$string['accountname'] = '用户名';
$string['accountname_help'] = '如何为设置付款的教师或经理识别此帐户（例如在课程注册插件中）。';
$string['accountnotavailable'] = '无法使用';
$string['createaccount'] = '创建支付账户';
$string['deleteorarchive'] = '删除或存档';
$string['editpaymentaccount'] = '编辑支付帐户';
$string['eventaccountcreated'] = '已创建付款帐户';
$string['eventaccountdeleted'] = '付款帐户已删除';
$string['eventaccountupdated'] = '付款帐户已更新';
$string['feeincludesurcharge'] = '{$a->fee}（包括使用此付款方式的 {$a->surcharge}% 附加费）';
$string['gatewaycannotbeenabled'] = '由于配置不完整，无法启用支付网关。';
$string['gatewaydisabled'] = '已禁用';
$string['gatewayenabled'] = '已启用';
$string['gatewaynotfound'] = '找不到网关';
$string['gotomanageplugins'] = '通过 {$a} 启用和禁用支付网关并设置附加费。';
$string['gotopaymentaccounts'] = '您可以在 {$a} 页面上使用任何这些网关创建多个支付帐户';
$string['hidearchived'] = '隐藏存档';
$string['noaccountsavilable'] = '没有可用的付款帐户。';
$string['nocurrencysupported'] = '不支持任何货币支付。 请确保至少启用了一个支付网关。';
$string['nogateway'] = '没有可以使用的支付网关。';
$string['nogatewayselected'] = '您首先需要选择一个支付网关。';
$string['paymentaccount'] = '支付帐户';
$string['paymentaccounts'] = '付款账户';
$string['paymentaccountsexplained'] = '为此网站创建一个或多个付款帐户。 每个帐户都包含可用支付网关的配置。 在网站上配置付款（例如，为课程注册付款）的人将能够从可用帐户中进行选择。';
$string['payments'] = '付款';
$string['privacy:metadata:database:payments'] = '有关付款的信息。';
$string['privacy:metadata:database:payments:amount'] = '付款金额。';
$string['privacy:metadata:database:payments:currency'] = '付款金额。';
$string['privacy:metadata:database:payments:gateway'] = '用于支付的支付网关。';
$string['privacy:metadata:database:payments:timecreated'] = '付款的时间。';
$string['privacy:metadata:database:payments:timemodified'] = '上次更新付款记录的时间。';
$string['privacy:metadata:database:payments:userid'] = '付款的用户。';
$string['restoreaccount'] = '恢复';
$string['selectpaymenttype'] = '选择付款类型';
$string['showarchived'] = '显示已存档';
$string['supportedcurrencies'] = '支持的货币';
$string['surcharge'] = '附加费（百分比）';
$string['surcharge_desc'] = '附加费是向选择使用此支付网关付款的用户收取的额外百分比。';
