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
 * Strings for component 'auth', language 'zh_cn', version '3.11'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = '可用的认证插件';
$string['allowaccountssameemail'] = '允许账户使用相同的邮箱地址';
$string['allowaccountssameemail_desc'] = '如果启用此项，可允许超过一个账户共用一个邮箱地址。这可能会产生安全或隐私方面的问题，例如密码找回确认邮件等。';
$string['alternatelogin'] = '如果您在此输入一个URL，它将被用于本站的登录。这个页面上应当有一个表单，表单的 action 一项应设定为<strong>“{$a}”</strong>，并且返回的字段中应当有 <strong>username</strong> 和 <strong>password</strong>。<br />小心，不要输入错误的URL，否则您可能会被锁在站点之外。<br />要使用缺省的登录页面请为此设置保留空白。';
$string['alternateloginurl'] = '换用其它登录链接';
$string['auth_changepasswordhelp'] = '修改密码帮助';
$string['auth_changepasswordhelp_expl'] = '当用户丢失了他们的 {$a} 密码后显示给他们的帮助信息。系统将会把此信息和<strong>修改密码地址</strong>一起显示给用户或用它来替代 Moodle 内部的修改密码机制。';
$string['auth_changepasswordurl'] = '修改密码地址';
$string['auth_changepasswordurl_expl'] = '设定一个当用户丢失了他们的 {$a} 密码时发给用户的地址。需要将<strong>使用标准修改密码页面</strong>设定为<strong>否</strong>。';
$string['auth_changingemailaddress'] = '您已请求将Email地址由 {$a->oldemail} 变更为 {$a->newemail}。出于安全的考虑，服务器将自动向 {$a->newemail} 发送一封邮件，以确认它属于您。您只要访问邮件中的URL，Email地址会立刻更新。';
$string['auth_common_settings'] = '公用设置';
$string['auth_data_mapping'] = '数据映射';
$string['auth_fieldlock'] = '锁定值';
$string['auth_fieldlock_expl'] = '<p><b>锁定值：</b> 如果开启，Moodle 用户和管理员将不能直接修改字段的值。如果您正在维护外部数据库的数据，请选择此项。</p>';
$string['auth_fieldlockfield'] = '锁定值({$a})';
$string['auth_fieldlocks'] = '锁定用户字段';
$string['auth_fieldlocks_help'] = '<p>您可以锁定指定的用户数据字段。对于用户数据由管理员人工维护，或者是通过“上传用户”上传的站点而言，这个功能是很有用的。如果您锁定了 Moodle 必需的字段，那么请您确信在创建用户帐户时已经提供了其内容，否则这个账号将无法使用。</p>
<p>如果想要避免这个问题，可以考虑将锁定模式设定为“如果空则不锁定”。</p>';
$string['auth_fieldmapping'] = '数据映射 ({$a})';
$string['auth_invalidnewemailkey'] = '错误：URL 不正确，请完整拷贝后重试。';
$string['auth_multiplehosts'] = '可以指定多个主机名或地址（如 host1.com;host2.com;host3.com 或 xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx）';
$string['auth_notconfigured'] = '认证方法{$a}尚未配置。';
$string['auth_outofnewemailupdateattempts'] = '更改Email地址的许可次数已到，您的请求被取消。';
$string['auth_passwordisexpired'] = '您的密码已经过期。请现在修改。';
$string['auth_passwordwillexpire'] = '您的密码将在{$a}天后过期，现在要修改密码吗?';
$string['auth_remove_delete'] = '完全删除';
$string['auth_remove_keep'] = '保存';
$string['auth_remove_suspend'] = '延迟';
$string['auth_remove_user'] = '指定在用户帐号在外部被删除时，内部用户帐号在同步的时候允许做什么。只有延迟用户帐号在外部数据中出现时才会被自动激活。';
$string['auth_remove_user_key'] = '移除用户';
$string['auth_sync_script'] = '用户帐户同步';
$string['auth_sync_suspended'] = '若启用，数据库会根据本地用户帐号的休学状况加以更新';
$string['auth_sync_suspended_key'] = '同步本地用户休学状况';
$string['auth_updatelocal'] = '更新本地数据';
$string['auth_updatelocal_expl'] = '<p><b>更新本地数据:</b> 如果开启，则用户每次登录或有用户同步时字段将会被更新（数据来自外部认证）。设定为本地更新的字段应当被锁住。</p>';
$string['auth_updatelocalfield'] = '本地更新 ({$a})';
$string['auth_updateremote'] = '更新外部数据';
$string['auth_updateremote_expl'] = '<p><b>更新外部数据:</b> 如果开启，则外部认证系统中的用户记录将被更新。要修改这个选项需首先解锁字段。</p>';
$string['auth_updateremote_ldap'] = '<p><b>注意:</b> 更新外部LDAP数据需要您设定的binddn和binddw是有权限修改所有用户记录的用户。它目前不能保持多值属性的值，会在更新时删除其它的值。</p>';
$string['auth_updateremotefield'] = '更新外部({$a})';
$string['auth_user_create'] = '激活用户创建功能';
$string['auth_user_creation'] = '新的(匿名的)用户可以在外部身份认证源中创建帐号，并通过 Email 确认。如果您启用了这个功能，请记住也要配置与用户创建有关的模块特定选项。';
$string['auth_usernameexists'] = '选中的用户名已经存在。请选择一个新的。';
$string['auth_usernotexist'] = '不能更新不存在的用户 {$a}';
$string['authenticationoptions'] = '身份认证选项';
$string['authinstructions'] = '此处留空，登录页面会显示缺省的登录说明。如果想自定义登录说明，就在此输入。';
$string['authloginviaemail'] = '允许使用电子邮件登录';
$string['authloginviaemail_desc'] = '允许用户使用用户名和电子邮件地址（如果唯一）进行网站登录。';
$string['auto_add_remote_users'] = '自动添加远程用户';
$string['cannotmapfield'] = '无法映射字段 "{$a->fieldname}"，因为其短名称"{$a->shortname}" 过长。为了能使其被映射，您需要将短名称缩短为{$a->charlimit}字符以内。 <a href="{$a->link}">编辑用户档案字段</a>';
$string['changepassword'] = '更改密码 URL';
$string['changepasswordhelp'] = '在这里指定一个网址，用户在忘记了用户名或密码后，可以在这里重新获得或更改。它将以一个按钮的形式显示在登录页面和用户页面。如果留空不填，就不会有按钮出现。';
$string['chooseauthmethod'] = '选择一个身份认证方法：';
$string['chooseauthmethod_help'] = '此设置决定用户登录时的验证方式。只可以选择启用了的验证插件，否则用户就无法继续登录了。想禁止用户登录，请选择“不要登录”。';
$string['createpassword'] = '生成密码并通知用户';
$string['createpasswordifneeded'] = '如果需要则创建密码并以邮件形式发送给用户';
$string['emailchangecancel'] = '取消 email 变更';
$string['emailchangepending'] = '变更进行中。访问向 {$a->preference_newemail} 发送的链接。';
$string['emailnowexists'] = '你尝试输入到个人资料里的email地址已经被分配给别人了。所以您的email地址变更请求现予取消，但您可以再次尝试使用不同的地址。';
$string['emailupdate'] = 'Email地址更新';
$string['emailupdatemessage'] = '亲爱的{$a->fullname}您好,
您提出了修改您在{$a->site}网站账号的电子邮箱地址。请访问以下链接以确认此更改。

如果您有任何问题，请联系技术支持:{$a->supportemail}
{$a->url}';
$string['emailupdatesuccess'] = '用户 <em>{$a->fullname}</em> 的email地址已成功更新为 <em>{$a->email}</em>。';
$string['emailupdatetitle'] = '{$a->site}的email更新确认';
$string['errormaxconsecutiveidentchars'] = '密码必须包含最多{$a}个连续的相同字符。';
$string['errorminpassworddigits'] = '密码中至少要有 {$a} 个数字。';
$string['errorminpasswordlength'] = '密码中至少要有 {$a} 个字符。';
$string['errorminpasswordlower'] = '密码中至少要有 {$a} 个小写字母。';
$string['errorminpasswordnonalphanum'] = '密码至少要有 {$a} 位非字母、数字字符(!@#$%^&)。';
$string['errorminpasswordupper'] = '密码中至少要有 {$a} 个大写字母。';
$string['errorpasswordreused'] = '此密码曾被你用过，不可再次使用。';
$string['errorpasswordupdate'] = '更新密码错误，密码没有更新。';
$string['eventuserloggedin'] = '用户已登录';
$string['eventuserloggedinas'] = '使用另外一个用户名进行登录';
$string['eventuserloginfailed'] = '登记登录失败';
$string['forcechangepassword'] = '强制修改密码';
$string['forcechangepassword_help'] = '强制用户在下次登录时修改密码。';
$string['forcechangepasswordfirst_help'] = '强制用户在第一次登录时修改密码。';
$string['forgottenpassword'] = '如果您在这里键入一个URL地址，该地址将会用来丢失密码的查找页面。';
$string['forgottenpasswordurl'] = '忘记的密码 URL';
$string['getrecaptchaapi'] = '要使用reCAPTCHA图片验证码，您必须从以下网址获得编程接口注册码<a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = '访客登录按钮';
$string['incorrectpleasetryagain'] = '错误，请重试';
$string['infilefield'] = '字段必需存在于文件中';
$string['informminpassworddigits'] = '至少{$a}个数字';
$string['informminpasswordlength'] = '至少{$a}个字符';
$string['informminpasswordlower'] = '至少{$a}个小写字母';
$string['informminpasswordnonalphanum'] = '至少要有{$a}个特殊字符(!@#$%^&)';
$string['informminpasswordreuselimit'] = '密码能在 {$a} 次更换后再次使用';
$string['informminpasswordupper'] = '至少{$a}个大写字母';
$string['informpasswordpolicy'] = '密码必须包含{$a}';
$string['instructions'] = '使用说明';
$string['internal'] = '内部的';
$string['limitconcurrentlogins'] = '限制同时登录';
$string['limitconcurrentlogins_desc'] = '启用浏览器同时登录阀值，则用户登录会受到限制。到达限制值，则最早的进程会被中断，请注意用户可能会丢失未保存的信息。这个设置不适用于单点登录（SSO）认证插件。';
$string['locked'] = '锁定';
$string['md5'] = 'MD5 加密';
$string['nopasswordchange'] = '密码不能被更新';
$string['nopasswordchangeforced'] = '在您更改密码前不能继续操作，但系统找不到用来更改密码的页面，请与管理员联系。';
$string['noprofileedit'] = '不能编辑个人资料';
$string['ntlmsso_attempting'] = '尝试进行 NTLM 单点登录';
$string['ntlmsso_failed'] = '自动登录失败，尝试到普通登录页面登录。';
$string['ntlmsso_isdisabled'] = 'NTLM 单点登录被禁用。';
$string['passwordhandling'] = '如何处理密码字段';
$string['plaintext'] = '纯文本';
$string['pluginnotenabled'] = '认证插件“{$a}”不可用';
$string['pluginnotinstalled'] = '认证插件“{$a}”没有安装';
$string['potentialidps'] = '使用您的账号登录：';
$string['privacy:metadata:userpref:createpassword'] = '表示应该为用户生成一个密码';
$string['privacy:metadata:userpref:forcepasswordchange'] = '表示是否用户在登录时需要修改密码';
$string['privacy:metadata:userpref:loginfailedcount'] = '用户登录失败次数';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = '用户自上次成功登录后登录失败的次数';
$string['privacy:metadata:userpref:loginfailedlast'] = '最后一次有记录的登录失败日期';
$string['privacy:metadata:userpref:loginlockout'] = '账号是否因多次登录失败而锁定，以及账号被锁定的日期';
$string['privacy:metadata:userpref:loginlockoutignored'] = '用户账号永不会被锁定';
$string['privacy:metadata:userpref:loginlockoutsecret'] = '账号被锁定后，用户可用于解锁账号的密码';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = '图片验证码用来防止网站被自动程序滥用。只需在输入框中按顺序输入这些词，用一个空格分隔。

如果您不确定这些词是什么，可以尝试再获得一个图片验证码或播放声音验证码。';
$string['security_question'] = '安全问题';
$string['selfregistration'] = '自助注册';
$string['selfregistration_help'] = '如果选中一个身份认证插件，比如基于email的自助注册，那么用户就可以自己注册并创建帐户。这可能导致一些人为了在讨论区、博客等发送垃圾信息而自己建立帐号。为了避免这种风险，自助注册应禁用或仅限<em>允许的email域名</em>。
';
$string['settingmigrationmismatch'] = '更正插件设置名称时检测到数值不匹配！身份验证插件 \'{$a->plugin}\' 在原传统名称设置值 \'{$a->setting}\' 为 \'{$a->legacy}\' 而当前名称设置为\'{$a->current}\'。后面的值已被设定为有效值，但您应该检查一下是否符合您所期。';
$string['sha1'] = 'SHA-1 加密';
$string['showguestlogin'] = '您可以在登录页面显示或隐藏访客登录按钮。';
$string['stdchangepassword'] = '使用标准的修改密码页面';
$string['stdchangepassword_expl'] = '如果外部认证系统允许通过 Moodle 修改密码，则应设为是。此选项会覆盖“修改密码URL”。';
$string['stdchangepassword_explldap'] = '注意: 如果使用远程服务器，建议您使用安全的 LDAP 连接(ldaps://)。';
$string['suspended'] = '停用账号';
$string['suspended_help'] = '停用的用户账号将会阻止用户使用这个账号的用户名和密码登录系统，并且所有的系统外发消息也会被终止。';
$string['testsettings'] = '测试设置';
$string['testsettingsheading'] = '测试身份认证设置- {$a}';
$string['unlocked'] = '不锁定';
$string['unlockedifempty'] = '如果空则不锁定';
$string['update_never'] = '从不';
$string['update_oncreate'] = '创建时';
$string['update_onlogin'] = '每次登录时';
$string['update_onupdate'] = '更新时';
$string['user_activatenotsupportusertype'] = '认证：ldap的user_activate()不支持所选的用户类型：{$a}';
$string['user_disablenotsupportusertype'] = '认证：ldap的user_disable()不支持所选的用户类型（至少现在还不支持）';
$string['username'] = '用户名';
$string['username_help'] = '请注意，这些认证插件不允许你更改用户名称';
