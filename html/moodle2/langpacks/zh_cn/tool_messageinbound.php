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
 * Strings for component 'tool_messageinbound', language 'zh_cn', branch 'MOODLE_31_STABLE'
 *
 * @package   tool_messageinbound
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = '班级名称';
$string['component'] = '组件';
$string['configmessageinboundhost'] = '要指定一个非默认端口，你可以使用[server]:[port](例如mail.example.com:587) 的格式。
如果保持空白，Moodle将使用你指定的邮件服务器默认端口。';
$string['defaultexpiration'] = '地址默认有效期限';
$string['defaultexpiration_help'] = '当邮件地址由处理程序所产生时，它可以被设定一个有效期限，这样它不会就不会被继续使用。为了管理方便，最好预设一个有效期限。';
$string['description'] = '描述';
$string['domain'] = '邮箱域名';
$string['edit'] = '编辑';
$string['edithandler'] = '编辑{$a}处理程序的设置';
$string['editinghandler'] = '编辑{$a}';
$string['enabled'] = '启用';
$string['fixedenabled_help'] = '你无法更改这个处理程序的设置，可能是其他程序要用到它';
$string['fixedvalidateaddress'] = '验证发件人地址';
$string['fixedvalidateaddress_help'] = '你无法更改这个程序的地址验证，可能是这个程序需要某个特珠设置。';
$string['handlerdisabled'] = '你试图要访问的邮件服务器已经关闭。现在无法处理简讯。';
$string['incomingmailconfiguration'] = '接收邮件设置';
$string['incomingmailserversettings'] = '接收邮件服务器设置';
$string['incomingmailserversettings_desc'] = 'Moodle可以连接到合适配置的IMAP服务器。你可以在这里设置IMAP服务器';
$string['invalidrecipientdescription'] = '这条 "{$a->subject}" 简讯无法认证，因为不是从你的个人 资料信息的地址，而是从不同的email地址所发送。若要让这个简讯能被认证，你需要回复这一简讯。';
$string['invalidrecipientdescriptionhtml'] = '这条 "{$a->subject}" 简讯无法认证，因为不是从你的个人 资料信息的地址，而是从不同的email地址所发送。若要让这个简讯能被认证，你需要回复这一简讯。';
$string['invalidrecipientfinal'] = '这一封 "{$a->subject}" 无法验证，请检查是从你的个人资料信息里的email地址发出的。';
$string['invalid_recipient_handler'] = '若收到一封有效简讯，但无法验证发信者，这个简讯会被储存在邮件服务器上，并会以发信者的个人资料里的地址来联系发信者。让该用户有机会回复以确认这封简讯是由他发送的。

这个处理程序是用来处理这些回复。

这个处理程序的发信者验证是无法关闭的，因为若他们的email客户端配置错误，该用户会从一个错误的地址回复。';
$string['invalid_recipient_handler_name'] = '无效收件处理';
$string['mailbox'] = '邮箱名称';
$string['mailboxconfiguration'] = '邮箱配置';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = '邮件设定';
$string['message_handlers'] = '短信处理程序';
$string['messageinbound'] = '站内短信';
$string['messageinboundenabled'] = '启用接收邮件处理程序';
$string['messageinboundenabled_desc'] = '接收邮件处理程序必须开启才能让简讯发送出去';
$string['messageinboundgeneralconfiguration_desc'] = '站内简讯处理程序允许你在Moodle系统内接收和处理email。它可以用来以email来回应讨论区的贴文，或添加文件到用户的私人文件存储空间。';
$string['messageinboundhost'] = '接收邮件服务器';
$string['messageinboundhostpass'] = '用户密码';
$string['messageinboundhostpass_desc'] = '这是你的服务提供商提供给你的密码，用来登录你的邮件帐号';
$string['messageinboundhostssl'] = '使用SSL';
$string['messageinboundhostssl_desc'] = '某些邮件服务器和你的Moodle通讯时可以使用加密来确保通讯安全。如果你的服务器支持，建议你使用SSL加密。';
$string['messageinboundhosttype'] = '服务器类型';
$string['messageinboundhostuser'] = '用户名称';
$string['messageinboundhostuser_desc'] = '这是你的服务提供商提供给你的用户名，用来登录你的邮件帐号';
$string['messageinboundmailboxconfiguration_desc'] = '当简讯发出时，它们是符合 address+data@example.com 的格式。要让Moodle可靠的产生地址，请在@符号之前指定一个你平时使用的地址，并在@符号后指定一个域名。

举例来说，邮箱名称是 "address"，域名就是 "example.com"。为此，你应该使用一个专用的emai帐号。';
$string['messageprocessingerror'] = '很不幸，你最近发送的一封email "{$a->subject}" 无法处理。

错误的细节如下：

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>很不幸，你最近发送的一封email "{$a->subject}" 无法处理。</p>
<p>错误的细节如下：</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = '这一简讯 "{$a->subject}" 无法处理。错误原因如下: "{$a->message}"';
$string['messageprocessingfailedunknown'] = '这一简讯 "{$a->subject}" 无法处理。请联系你的管理员查明原因。';
$string['messageprocessingsuccess'] = '{$a->plain}

若不想继续收到这些通知，你可以在你的浏览器上开启 {$a->messagepreferencesurl}，然后设置你的个人短信偏好。';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>若不想继续收到这些通知，你可以<a href="{$a->messagepreferencesurl}">编辑你的个人短信偏好</a>。</p>';
$string['messageprovider:invalidrecipienthandler'] = '用于确认短信是否由你发送的短信';
$string['messageprovider:messageprocessingerror'] = '站内短信无法处理时提出警告';
$string['messageprovider:messageprocessingsuccess'] = '确认一则短信已经处理完成';
$string['name'] = '名称';
$string['noencryption'] = '关闭 - 不加密';
$string['noexpiry'] = '不过期';
$string['oldmessagenotfound'] = '你尝试手动确认短信，但找不到该短信。这可能是它已经被处理，或者短信已过期。';
$string['oneday'] = '一天';
$string['onehour'] = '一小时';
$string['oneweek'] = '一周';
$string['oneyear'] = '一年';
$string['pluginname'] = '站内短信设置';
$string['replysubjectprefix'] = '回信：';
$string['requirevalidation'] = '验证发件人地址';
$string['ssl'] = 'SSL（自动检测SSL版本）';
$string['sslv2'] = 'SSLv2（强制使用SSL第2版）';
$string['sslv3'] = 'SSLv3（强制使用SSL第3版）';
$string['taskcleanup'] = '清除没有经过验证已接收的email';
$string['taskpickup'] = '收取邮件';
$string['tls'] = 'TLS (TLS; 经由未加密的管道，开始进行协议层次的协商；启动安全连接时所建议的方式)';
$string['tlsv1'] = 'TLSv1 (以TLS 版本1.x 连接到服务器)';
$string['validateaddress'] = '验证发信者邮件地址';
$string['validateaddress_help'] = '当从一用户收到一封email时，Moodle会比较发信者的地址和他们个人资料信息里的地址是否相同，以进行验证。

若两个地址不吻合，那么那个发信者会收到一个通知，以确认他们是否确实发出这封email。

若这个设定被关闭，Moodle就不会检查发信者的地址。';
