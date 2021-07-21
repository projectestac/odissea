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
 * Strings for component 'auth_oauth2', language 'zh_cn', version '3.11'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = '本站已存在同名用户。如果是您的账户，请使用用户名和密码登陆，并在偏好设置中进行关联。';
$string['alreadylinked'] = '该外部账户已被关联至本站的既有账户';
$string['auth_oauth2description'] = '基于OAuth 2标准的认证';
$string['auth_oauth2settings'] = 'OAuth 2认证设置';
$string['confirmaccountemail'] = '{$a->fullname} 您好，

您的电子邮件地址被用于在 {$a->sitename} 申请了一个账户。

请前往以下地址进行确认：

{$a->link}

绝大多数电子邮件客户端中，以上地址应该是蓝色可点击的。
如果无法点击，请将该地址复制到您的浏览器顶端的的地址栏中。

如需帮助，请联系站点管理员 {$a->admin}';
$string['confirmaccountemailsubject'] = '{$a}：账户确认';
$string['confirmationinvalid'] = '该确认地址无效，可能是因为已经过期。请重新注册以获取新的确认邮件。';
$string['confirmationpending'] = '该账号的电子邮件尚未确认。';
$string['confirmlinkedloginemail'] = '{$a->fullname} 您好，

{$a->issuername} 账户 {$a->linkedemail} 请求绑定到 {$a->sitename} 上您的账户中。

请前往以下地址确认该请求，并激活该第三方登陆方式：

{$a->link}

绝大多数电子邮件客户端中，以上地址应该是蓝色可点击的。
如果无法点击，请将该地址复制到您的浏览器顶端的的地址栏中。

如需帮助，请联系站点管理员 {$a->admin}';
$string['confirmlinkedloginemailsubject'] = '{$a}：第三方登陆确认';
$string['createaccountswarning'] = '这个认证插件会允许访客在站点上创建新用户。请考虑是否需要开启“防止在身份认证时创建账号”这一设置。';
$string['createnewlinkedlogin'] = '绑定 {$a} 账户';
$string['emailconfirmlink'] = '确认账户绑定';
$string['emailconfirmlinksent'] = '<p>已有既有用户使用了相同的电子邮件地址，但是并不存在绑定关系。</p>
<p>只有在绑定后才可使用第三方登陆。</p>
<p>已向您的邮箱 <b>{$a}</b> 发送了一封包含绑定方法的邮件。</p>
<p>如果遇到问题，请与站点管理员联系。</p>';
$string['emailpasswordchangeinfosubject'] = '{$a}：确定改变密码';
$string['info'] = '第三方账户';
$string['issuer'] = '第三方平台';
$string['issuernologin'] = '该平台不可用于登陆';
$string['linkedlogins'] = '管理第三方登陆';
$string['linkedloginshelp'] = '第三方登陆帮助';
$string['loginerror_authenticationfailed'] = '认证过程发生错误';
$string['loginerror_cannotcreateaccounts'] = '不存在与您的电子邮件地址一致的账户';
$string['loginerror_invaliddomain'] = '该电子邮件地址不可使用';
$string['loginerror_nouserinfo'] = '缺少账户信息，可能是配置有误';
$string['loginerror_userincomplete'] = '账户信息中缺少用户名和电子邮件地址，可能是配置有误';
$string['noissuersavailable'] = '已配置的第三方平台都不可用';
$string['notenabled'] = 'OAuth 2认证插件未启用';
$string['notloggedindebug'] = '登陆失败，原因是：{$a}';
$string['notwhileloggedinas'] = '当以其他用户身份登陆时，不可管理第三方登陆';
$string['oauth2:managelinkedlogins'] = '管理我的第三方绑定账户';
$string['plugindescription'] = '这个认证插件会在登陆页面上显示已配置的第三方登陆方式。用户可以从中选择一个方式通过OAuth 2进行登陆。';
$string['pluginname'] = 'oAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'oAuth 2 身份验证';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = '此插件已连接到身份验证子系统。';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = '确认码。';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = '确认码过期时的时间戳。';
$string['privacy:metadata:auth_oauth2:email'] = '映射到此帐户的外部电子邮件。';
$string['privacy:metadata:auth_oauth2:issuerid'] = '此 OAuth 2 登录名的 OAuth 2 颁发者的 ID';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = '链接到用户的 Moodle 帐户的 OAuth 2帐户。';
$string['privacy:metadata:auth_oauth2:timecreated'] = '用户帐户链接到 OAuth 2 登录名时的时间戳。';
$string['privacy:metadata:auth_oauth2:timemodified'] = '修改此记录时的时间戳。';
$string['privacy:metadata:auth_oauth2:userid'] = 'oAuth 2 登录名链接到的用户帐户ID。';
$string['privacy:metadata:auth_oauth2:usermodified'] = '修改此帐户的用户的ID。';
$string['privacy:metadata:auth_oauth2:username'] = '映射到此帐户的外部账户。';
