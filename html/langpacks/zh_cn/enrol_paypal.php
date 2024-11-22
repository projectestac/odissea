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
 * Strings for component 'enrol_paypal', language 'zh_cn', version '4.1'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = '分配角色';
$string['businessemail'] = 'PayPal的商业邮件';
$string['businessemail_desc'] = '您商业PayPal账户的邮箱地址';
$string['cost'] = '报名费用';
$string['costerror'] = '选课费用不是数字';
$string['costorkey'] = '请在下列登记方法中选择一种';
$string['currency'] = '货币';
$string['defaultrole'] = '默认的角色分配';
$string['defaultrole_desc'] = '指定使用PayPal选课的用户的角色';
$string['enrolenddate'] = '终止日期';
$string['enrolenddate_help'] = '如果启用，只有在此日期后才能添加用户到此课程。';
$string['enrolenddaterror'] = '选课结束日期不能在开始日期之前';
$string['enrolperiod'] = '选课期限';
$string['enrolperiod_desc'] = '选课有效的默认时间长度。如果设置为零，则默认情况下，选课持续时间将是无限制的。';
$string['enrolperiod_help'] = '用户身份有效期长度，从用户自行加入课程之日算起。禁止此选项意味着用户身份永久有效。';
$string['enrolstartdate'] = '起始日期';
$string['enrolstartdate_help'] = '如果启用，用户只能在此日期之后撤销选课。';
$string['errdisabled'] = 'PayPal注册插件已禁用，不处理付款通知。';
$string['erripninvalid'] = 'PayPal尚未验证即时付款通知。';
$string['errpaypalconnect'] = '无法连接到{$a->url}以验证即时付款通知：{$a->result}';
$string['expiredaction'] = '选课到期操作';
$string['expiredaction_help'] = '选择当用户选课截止之后要执行的操作。注意，当课程结束之后，某些用户资料和设置会被清除。';
$string['mailadmins'] = '通知管理员';
$string['mailstudents'] = '通知学生';
$string['mailteachers'] = '通知老师';
$string['messageprovider:paypal_enrolment'] = 'PayPal 选课消息';
$string['nocost'] = '该课程完全免费！';
$string['paypal:config'] = '配置PayPal选课实例';
$string['paypal:manage'] = '管理已选课用户';
$string['paypal:unenrol'] = '从课程删除已选课用户';
$string['paypal:unenrolself'] = '撤销自己对此课程的选课';
$string['paypalaccepted'] = '接受PayPal支付';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'PayPal模块提供付费课程支持。如果你将课程的学费设置为零，学生将免费选择该课程。你也可以设置全站的学费标准的默认值，也可以对每个课程单独进行设置。如果对课程单独设置了收费标准，则课程将依此标准收费。';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = '有关PayPal注册的PayPal交易的信息。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = '收款人（即商户）的电子邮件地址或PayPal账户ID。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = '所售课程的ID。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = '课程中注册实例的ID。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = '已售出的课程的全称。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = '买方在PayPal网站付款备注字段中输入的备注。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = '买方的全名。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = '在退款、撤销或取消撤销的情况下，这将是原始交易的交易ID。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = '付款的状态。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = '保存付款是由电子支票（eCheck）支付，或由PayPal余额、信用卡或即时转账（instant）支付。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = '付款状态为“待定”的原因（如果是）。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = '付款状态为“撤销”、“退款”、“取消撤销”或“拒绝”的原因（如果状态是其中之一）。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = '收款人（即商户）的主要电子邮件地址。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = '收款人（即商户）的唯一PayPal帐户ID。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = '付款时收取的税款金额。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'PayPal通知Moodle付款的时间。';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = '这商家的原始交易识别号，用于接受买家付款，该案例已注册';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = '购买课程注册的用户的ID。';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'PayPal注册插件将用户数据从Moodle传输到PayPal网站。';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = '购买课程的用户的地址。';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = '购买课程的用户所在城市。';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = '购买课程的用户所在国家/地区。';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = '以连字符分隔的字符串，其中包含用户（买方）的ID、课程ID、注册实例的ID。';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = '购买课程的用户的电子邮件地址。';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = '购买课程的用户的名字。';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = '购买课程的用户的姓氏。';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = '买方的全名。';
$string['processexpirationstask'] = 'PayPal报名发送到期通知任务';
$string['sendpaymentbutton'] = '通过 Paypal 支付';
$string['status'] = '启用PayPal选课';
$string['status_desc'] = '缺省允许用户使用PayPal选课。';
$string['transactions'] = 'PayPal交易';
$string['unenrolselfconfirm'] = '您确定要撤销您自己对“{$a}”课程的选课吗？';
