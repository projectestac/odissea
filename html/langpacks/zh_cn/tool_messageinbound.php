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
 * Strings for component 'tool_messageinbound', language 'zh_cn', version '3.11'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = '班级名称';
$string['component'] = '组件';
$string['configmessageinboundhost'] = '要指定一个非默认端口，你可以使用[server]:[port](例如mail.example.com:993) 的格式。
如果保持空白，Moodle将使用你指定的邮件服务器默认端口。';
$string['defaultexpiration'] = '地址默认有效期限';
$string['defaultexpiration_help'] = '当处理程序生成电子邮件地址时，可以将其设置为在一段时间后自动过期，这样就不能再使用它了。设置一个有效期限是明智的。';
$string['description'] = '描述';
$string['domain'] = '邮箱域名';
$string['edit'] = '编辑';
$string['edithandler'] = '编辑{$a}处理程序的设置';
$string['editinghandler'] = '编辑{$a}';
$string['enabled'] = '启用';
$string['fixedenabled_help'] = '您不能更改此处理程序的状态。这可能是因为其他处理程序需要该处理程序。';
$string['fixedvalidateaddress'] = '验证发件人地址';
$string['fixedvalidateaddress_help'] = '您不能为此处理程序更改地址验证。这可能是因为处理程序需要特定的设置。';
$string['handlerdisabled'] = '您试图联系的电子邮件处理程序已被禁用。此时无法处理消息。';
$string['incomingmailconfiguration'] = '接收邮件设置';
$string['incomingmailserversettings'] = '接收邮件服务器设置';
$string['incomingmailserversettings_desc'] = 'Moodle可以连接到合适配置的IMAP服务器。你可以在这里设置IMAP服务器';
$string['invalid_recipient_handler'] = '若收到一封有效邮件消息，但无法验证发送者，这个消息会被储存在邮件服务器上，并会以发送者的个人档案里的地址来联系发信者。让该用户有机会回复以确认这个消息是由他发送的。 这个处理程序是用来处理这些回复。 这个处理程序的发送者验证是无法关闭的，因为若他们的email客户端配置错误，该用户会从一个错误的地址回复。';
$string['invalid_recipient_handler_name'] = '无效的发送方处理程序';
$string['invalidrecipientdescription'] = '这条 "{$a->subject}" 邮件消息无法验证，因为不是从您的个人档案里的email地址，而是从不同的email地址所发送。若要让这个消息能被验证，您需要回复该消息。';
$string['invalidrecipientdescriptionhtml'] = '这条 "{$a->subject}" 邮件消息无法验证，因为不是从您的个人档案里的地址，而是从不同的email地址所发送。若要让这个消息能被认证，您需要回复该消息。';
$string['invalidrecipientfinal'] = '这一封 "{$a->subject}" 无法验证，请检查是从您的个人档案里的email地址发送的。';
$string['mailbox'] = '邮箱名称';
$string['mailboxconfiguration'] = '邮箱配置';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = '邮件设置';
$string['message_handlers'] = '消息处理程序';
$string['messageinbound'] = '站内消息';
$string['messageinboundenabled'] = '启用接收邮件处理程序';
$string['messageinboundenabled_desc'] = '接收邮件处理程序必须开启才能让邮件消息发送出去';
$string['messageinboundgeneralconfiguration'] = '基本配置';
$string['messageinboundgeneralconfiguration_desc'] = '站内消息处理程序允许您在Moodle系统内接收和处理email。它可以用来以email来回复讨论区的贴文，或添加文件到用户的私人文件。';
$string['messageinboundhost'] = '接收邮件服务器';
$string['messageinboundhostpass'] = '用户密码';
$string['messageinboundhostpass_desc'] = '这是你的服务提供商提供给你的密码，用来登录你的邮件帐号';
$string['messageinboundhostssl'] = '使用SSL';
$string['messageinboundhostssl_desc'] = '某些邮件服务器和你的Moodle通讯时可以使用加密来确保通讯安全。如果你的服务器支持，建议你使用SSL加密。';
$string['messageinboundhosttype'] = '服务器类型';
$string['messageinboundhostuser'] = '用户名称';
$string['messageinboundhostuser_desc'] = '这是你的服务提供商提供给你的用户名，用来登录你的邮件帐号';
$string['messageinboundmailboxconfiguration_desc'] = '当消息发出时，它们是符合 address+data@example.com 的格式。要让Moodle可靠的产生地址，请在@符号之前指定一个您平时使用的地址，并在@符号后指定一个域名。 举例来说，邮箱名称是 "address"，域名就是 "example.com"。为此，您应该使用一个专用的emai帐号。';
$string['messageprocessingerror'] = '很不幸，你最近发送的一封email "{$a->subject}" 无法处理。

错误的细节如下：

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>很不幸，你最近发送的一封email "{$a->subject}" 无法处理。</p>
<p>错误的细节如下：</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = '这一消息 "{$a->subject}" 无法处理。错误原因如下: "{$a->message}"';
$string['messageprocessingfailedunknown'] = '这一消息 "{$a->subject}" 无法处理。请联系您的管理员查明原因。';
$string['messageprocessingsuccess'] = '{$a->plain} 若不想继续收到这些通知，您可以在你的浏览器上开启 {$a->messagepreferencesurl}，然后设置您的个人消息偏好。';
$string['messageprocessingsuccesshtml'] = '{$a->html} <p>若不想继续收到这些通知，您可以<a href="{$a->messagepreferencesurl}">编辑您的个人消息偏好</a>。</p>';
$string['messageprovider:invalidrecipienthandler'] = '验证来自您的站内消息';
$string['messageprovider:messageprocessingerror'] = '站内消息无法处理时提出警告';
$string['messageprovider:messageprocessingsuccess'] = '验证消息已成功处理';
$string['name'] = '名称';
$string['noencryption'] = '关闭 - 不加密';
$string['noexpiry'] = '不过期';
$string['oldmessagenotfound'] = '您试图手动验证消息，但无法找到该消息。这可能是因为它已经被处理了，或者是因为消息过期了。';
$string['oneday'] = '一天';
$string['onehour'] = '一小时';
$string['oneweek'] = '一周';
$string['oneyear'] = '一年';
$string['pluginname'] = '站内消息配置';
$string['privacy:metadata:coreuserkey'] = '用户的密钥，以验证收到的电子邮件';
$string['privacy:metadata:messagelist'] = '验证失败且需要进一步授权的消息标识符列表';
$string['privacy:metadata:messagelist:address'] = '发送电子邮件的地址';
$string['privacy:metadata:messagelist:messageid'] = '消息ID';
$string['privacy:metadata:messagelist:timecreated'] = '记录被创造的时间';
$string['privacy:metadata:messagelist:userid'] = '需要批准消息的用户的ID';
$string['replysubjectprefix'] = '回复：';
$string['requirevalidation'] = '验证发件人地址';
$string['ssl'] = 'SSL（自动检测SSL版本）';
$string['sslv2'] = 'SSLv2（强制使用SSL第2版）';
$string['sslv3'] = 'SSLv3（强制使用SSL第3版）';
$string['taskcleanup'] = '清除没有经过验证已接收的email';
$string['taskpickup'] = '收取邮件';
$string['tls'] = 'TLS (TLS; 经由未加密的管道，开始进行协议层次的协商；启动安全连接时所建议的方式)';
$string['tlsv1'] = 'TLSv1 (以TLS 版本1.x 连接到服务器)';
$string['validateaddress'] = '验证发信者邮件地址';
$string['validateaddress_help'] = '当从一用户收到一封email时，Moodle会比较发信者的地址和他们个人档案里的地址是否相同，以进行验证。 若两个地址不吻合，那么那个发信者会收到一个通知，以确认他们是否确实发出这封email。 若这个设定被关闭，Moodle就不会检查发信者的地址。';
