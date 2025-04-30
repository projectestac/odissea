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
 * Strings for component 'auth_shibboleth', language 'zh_cn', version '4.4'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = '身份验证方法徽标';
$string['auth_shib_auth_logo_description'] = '提供用户熟悉的口令身份验证方式徽标 。如可以是口令联盟徽标，<tt>SWITCHaai 登录</tt> or <tt>InCommon 登录</tt> or 等类型徽标。';
$string['auth_shib_auth_method'] = '身份认证方法名称';
$string['auth_shib_auth_method_description'] = '给Shibboleth验证方法起一个用户熟悉的名字。可以是您的Shibboleth组织的名字，比如<tt>SWITCHaai 登陆</tt> 或者 <tt>InCommon 登陆</tt> 或者其他类似的名字。';
$string['auth_shib_changepasswordurl'] = '更改密码 URL';
$string['auth_shib_contact_administrator'] = '如果你与所提到的组织没有关系，但是你需要访问此服务器上的一个课程，那么请联系<a href="mailto:{$a}">Moodle管理员</a>。';
$string['auth_shib_convert_data'] = '数据修改 API';
$string['auth_shib_convert_data_description'] = '您可以使用此API进一步修改Shibboleth提供的数据。阅读<a href="{$a}">README</a>以了解更多说明。';
$string['auth_shib_convert_data_filepath_warning'] = '你不能使用位于当前网站数据目录（$CFG->dataroot）内的文件作为数据修改API。';
$string['auth_shib_convert_data_warning'] = '此文件不存在或无法被 Web 服务器读取！';
$string['auth_shib_idp_list'] = '身份提供者';
$string['auth_shib_idp_list_description'] = '提供身份提供者的 entityID 列表，供用户在登录页面选择。<br />每行都必须是一个半角逗号分隔的二元组，一个是 IdP（在Shibboleth 元数据文件中）的 entityID，另一个是显示在下拉列表中的 IdP 的名字。<br />如果您的 Moodle 是多联邦配置的一部分，那么会使用可选的第三个参数，那是 Shibboleth 会话起始器的位置。';
$string['auth_shib_instructions'] = '如果您的机构支持，请使用<a href="{$a}">Shibboleth 登录</a>通过Shibboleth获取访问权限。否则，请使用此处显示的正常登录形式。';
$string['auth_shib_instructions_help'] = '应当在此为您的用户提供关于 Shibboleth 的解释。在登录屏幕上，将会显示这些提示。其中应当包含一个指向“<b>{$a}</b>”的链接，这样 用户可以轻 松等如。如果此项为空，缺省的指示信息将会被是用(并非为 Shibboleth 定制)。';
$string['auth_shib_instructions_key'] = '登录说明';
$string['auth_shib_integrated_wayf'] = 'Moodle的WAYF服务';
$string['auth_shib_integrated_wayf_description'] = '若您启用此功能，Moodle将使用自己的WAYF服务，而不是为Shibboleth配置的服务。Moodle将在此备选登录页面上显示一个下拉列表，用户必须在其中选择其身份提供者。';
$string['auth_shib_logout_return_url'] = '备用的登出返回URL';
$string['auth_shib_logout_return_url_description'] = '请提供Shibboleth用户注销后跳转页面的URL。<br/>用户将会被重定向到Moodle默认的重定向地址。';
$string['auth_shib_logout_url'] = 'Shibboleth服务提供商退出处理URL';
$string['auth_shib_logout_url_description'] = '提供指向Shibboleth服务提供商退出处理的URL。一般形如<tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = '如果想使用整合的 WAYF 服务，您必须提供一个独立的身份提供商列表，包括 entityIDs，名称和可选的会话发起者';
$string['auth_shib_only'] = '只用 Shibboleth';
$string['auth_shib_only_description'] = '如果只是用 Shibboleth 认证方式，请设定此选项。';
$string['auth_shib_username_description'] = '用在 Moodle 中当作用户名的 Shibboleth环 境变量名';
$string['auth_shibboleth_errormsg'] = '请选择您所在的组织';
$string['auth_shibboleth_login'] = 'Shibboleth 登录';
$string['auth_shibboleth_login_long'] = '通过口令登录 Moodle';
$string['auth_shibboleth_manual_login'] = '手动登录';
$string['auth_shibboleth_select_member'] = '我是成员之一';
$string['auth_shibboleth_select_organization'] = '要通过Shibboleth进行身份验证，请从下拉菜单中选择您的组织：';
$string['auth_shibbolethdescription'] = '使用这种方法，使用 Shibboleth 创建和验证用户。有关设置的详细信息，请参阅<a href="{$a}">Shibboleth README</a>。';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = '口令身份验证插件不存储任何个人数据。';
$string['shib_invalid_account_error'] = '您似乎在使用 Shibboleth 认证，但 Moodle 找不到您提供的用户名的有效账号。您的账号可能不存在，或者被禁用。';
$string['shib_no_attributes_error'] = '您似乎正在使用 Shibboleth 认证，但是 Moodle 不接受用户的属性。请确认您的身份提供者激活了必要的属性({$a})，或者向这个服务器的网络管理员报表。';
$string['shib_not_all_attributes_error'] = 'Moodle 需要 Shibboleth 属性，但是现在不存在这些属性。这些属性是: {$a}<br /> 请联系服务器的网络管理员或您的身份认证者。';
$string['shib_not_set_up_error'] = 'Shibboleth 身份验证似乎没有正确设置，因为此页面没有 Shibboleth 环境变量。 请参阅 <a href="{$a}">README</a>以获取有关如何设置 Shibboleth 身份验证的更多说明，或联系安装此Moodle的网站管理员。';
