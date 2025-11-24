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
 * Strings for component 'tool_mfa', language 'zh_cn', version '4.5'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = '实现了重量';
$string['added'] = '添加';
$string['alltime'] = '所有时间';
$string['areyousure'] = '您确定要删除此因素吗？';
$string['cancellogin'] = '取消登录';
$string['combination'] = '结合';
$string['confirmationreplace'] = '您将立即被要求设置另一个 \'{$a}\' 。请确保您已准备好完成安装过程。';
$string['confirmationrevoke'] = '您将无法再使用 \'{$a}\' 登录本网站。';
$string['connector'] = '和';
$string['created'] = '已创建';
$string['createdfromip'] = '从 IP 创建';
$string['debugmode:heading'] = '调试模式';
$string['devicename'] = '设备';
$string['editfactor'] = '编辑{$a}因子的设置';
$string['email:subject'] = '无法登录到{$a}';
$string['enablefactor'] = '启用因素';
$string['error:couldnotreplace'] = '无法取代这个因素。';
$string['error:directaccess'] = '此页面不应直接访问';
$string['error:isguestuser'] = '访客不能访问';
$string['error:notenoughfactors'] = '无法验证';
$string['error:reauth'] = '我们无法充分确认您的身份以满足站点身份验证安全策略。<br>这可能是由于：<br> 1)步骤被锁定-请等待几分钟再试一次。
<br> 2)步骤失败-请仔细检查每个步骤的详细信息。<br> 3)步骤被跳过-请重新加载此页面或尝试再次登录。';
$string['error:support'] = '如果您仍然无法登录，或者认为您看到的是错误的，请发送电子邮件：';
$string['event:userpassedmfa'] = '验证通过';
$string['factorrevoked'] = '\'{$a}\' 已成功删除。';
$string['inputrequired'] = '用户输入';
$string['lastused'] = '最后一次使用';
$string['lastverified'] = '最后一次验证';
$string['locked'] = '{$a}(不可用)';
$string['lockedusersforallfactors'] = '锁定用户：所有因素';
$string['lockedusersforfactor'] = '锁定用户：{$a}';
$string['mfa:mfaaccess'] = '与 MFA 交互';
$string['mfareports'] = 'MFA 报告';
$string['mfasettings'] = '管理多重身份验证';
$string['needhelp'] = '需要帮助吗？';
$string['nologinusers'] = '没有登录';
$string['nonauthusers'] = '待处理的 MFA';
$string['overall'] = '整体';
$string['pending'] = '待处理';
$string['performbulk'] = '批量操作';
$string['pluginname'] = '多重身份验证';
$string['preferences:activefactors'] = '活跃因素';
$string['preferences:availablefactors'] = '可用因素';
$string['preferences:header'] = '多重身份验证首选项';
$string['preferenceslink'] = '单击此处转到用户首选项。';
$string['privacy:metadata:tool_mfa'] = '配置了 MFA 因素的数据';
$string['privacy:metadata:tool_mfa:createdfromip'] = '设置因素的 IP';
$string['privacy:metadata:tool_mfa:factor'] = '因素类型';
$string['privacy:metadata:tool_mfa:id'] = '记录 ID';
$string['privacy:metadata:tool_mfa:label'] = '因素实例的标签，例如 device 或 email。';
$string['privacy:metadata:tool_mfa:lastverified'] = '上次使用此因素验证用户的时间';
$string['privacy:metadata:tool_mfa:secret'] = '因素的任何机密数据';
$string['privacy:metadata:tool_mfa:timecreated'] = '设置因素实例的时间';
$string['privacy:metadata:tool_mfa:timemodified'] = '上次修改时间因素';
$string['privacy:metadata:tool_mfa:userid'] = '该因素所属的用户的 ID';
$string['privacy:metadata:tool_mfa_auth'] = '上次为用户 ID 注册成功的 Multi-Factor Authentication 的时间。';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = '用户上次进行身份验证的时间';
$string['privacy:metadata:tool_mfa_auth:userid'] = '与此时间戳关联的用户。';
$string['privacy:metadata:tool_mfa_secrets'] = '用于用户身份验证的临时密钥。';
$string['privacy:metadata:tool_mfa_secrets:factor'] = '与此密钥关联的因素。';
$string['privacy:metadata:tool_mfa_secrets:secret'] = '秘密安全码';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = '与此密钥关联的会话 ID。';
$string['privacy:metadata:tool_mfa_secrets:userid'] = '与此密钥关联的用户';
$string['redirecterrordetected'] = '检测到不支持的重定向，脚本执行已终止。MFA 和 {$a} 之间发生重定向错误。';
$string['remove'] = '删除';
$string['replace'] = '替换';
$string['replacefactor'] = '替换因素';
$string['resetconfirm'] = '重置用户因素';
$string['resetfactor'] = '重置用户身份验证因素';
$string['resetfactorconfirm'] = '您确定要重置 {$a} 的因素吗？';
$string['resetfactorplaceholder'] = '用户名或电子邮件';
$string['resetsuccess'] = '已成功为用户 \'{$a->username} 重置因素 \'{$a->factor}”。';
$string['resetsuccessbulk'] = '因素 \'{$a}\' 已成功为提供的用户重置。';
$string['resetuser'] = '用户：';
$string['revoke'] = '撤回';
$string['revokefactor'] = '删除因素';
$string['selectfactor'] = '选择要重置的因素：';
$string['selectperiod'] = '选择报表的回溯期：';
$string['settings:combinations'] = '登录的良好条件总结';
$string['settings:debugmode'] = '启用调试模式';
$string['settings:debugmode_help'] = '调试模式将在 MFA 管理页面和用户首选项页面上显示一个小的通知横幅
         包含有关当前启用的因素的信息。';
$string['settings:duration'] = '密钥有效期';
$string['settings:duration_help'] = '生成密钥的持续时间';
$string['settings:enabled'] = '已启用 MFA 插件';
$string['settings:enablefactor'] = '启用因素';
$string['settings:enablefactor_help'] = '选中此控件以允许将该因素用于 MFA 身份验证。';
$string['settings:general'] = '常规 MFA 设置';
$string['settings:guidancecheck'] = '使用引导页面';
$string['settings:guidancecheck_help'] = '添加指向 MFA 身份验证页面和 MFA 首选项页面上的指导页面的链接。';
$string['settings:guidancefiles'] = '引导页面文件';
$string['settings:guidancefiles_help'] = '在此处添加任何文件以在指南页面中使用，并在编辑器中使用 {{filename}}（解析路径）或 {{{filename}}}（html 链接）将它们嵌入到页面中';
$string['settings:guidancepage'] = '引导页面内容';
$string['settings:guidancepage_help'] = '此处的 HTML 将显示在引导页面上；输入文件区域中的文件名，以使用解析路径 {{filename}} 嵌入文件，或使用 {{{filename}}} 作为 html 链接嵌入文件。';
$string['settings:lockout'] = '锁定阈值';
$string['settings:lockout_help'] = '用户在被阻止登录之前可以回答输入因素的尝试次数。';
$string['settings:redir_exclusions'] = '不应重定向 MFA 检查的 URL';
$string['settings:redir_exclusions_help'] = '每个新行都是 MFA 检查不会从其重定向的站点根目录中的相对 URL';
$string['settings:weight'] = '因素权重';
$string['settings:weight_help'] = '此因素的权重（如果已通过）。用户至少需要 100 积分才能登录。';
$string['setup'] = '设置';
$string['setupfactor'] = '设置因素';
$string['setuprequired'] = '用户设置';
$string['state:fail'] = '失败';
$string['state:locked'] = '已锁定';
$string['state:neutral'] = '中性';
$string['state:pass'] = '通过';
$string['state:unknown'] = '未知';
$string['subplugintype_factor'] = '因素类型';
$string['subplugintype_factor_plural'] = '因素类型';
$string['totalusers'] = '用户总数';
$string['totalweight'] = '总权重';
$string['userempty'] = '用户不能为空';
$string['userlogs'] = '用户日志';
$string['usernotfound'] = '找不到用户';
$string['usersauthedinperiod'] = '已登录';
$string['verification'] = '两步验证';
$string['verification_desc'] = '为了确保您的帐户安全，我们需要检查此人是否是您本人。';
$string['verificationcode'] = '验证码';
$string['verificationcode_help'] = '当前身份验证因素提供的验证码。';
$string['verifyalt'] = '尝试其他验证方法：';
$string['weight'] = '权重';
$string['yesremove'] = '是的，删除';
$string['yesreplace'] = '是的，替换';
