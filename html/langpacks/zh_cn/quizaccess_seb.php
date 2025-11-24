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
 * Strings for component 'quizaccess_seb', language 'zh_cn', version '4.5'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = '添加新模板';
$string['allowedbrowserkeysdistinct'] = '所有的密钥必须是不同的。';
$string['allowedbrowserkeyssyntax'] = '密钥应该是64个十六进制字符串。';
$string['cachedef_config'] = 'SEB配置缓存';
$string['cachedef_configkey'] = 'SEB配置密钥缓存';
$string['cachedef_quizsettings'] = 'SEB测验设置缓存';
$string['cantdelete'] = '不能删除模板，因为它已经被用于一个或多个测验。';
$string['cantedit'] = '模板不能被编辑，因为它已经被用于一个或多个测验。';
$string['checkingaccess'] = '检查访问安全的考试浏览器…';
$string['clientrequiresseb'] = '这个测试已经配置为使用客户端配置的安全考试浏览器。';
$string['confirmtemplateremovalquestion'] = '您确定要删除此模板吗?';
$string['confirmtemplateremovaltitle'] = '确认删除模板吗?';
$string['conflictingsettings'] = '您没有权限更新现有的安全考试浏览器设置。';
$string['content'] = '模板';
$string['description'] = '描述';
$string['disabledsettings'] = '禁用设置。';
$string['disabledsettings_help'] = '如果测验已经尝试，安全考试浏览器测验设置不能更改。要更改设置，必须先删除所有测验尝试。';
$string['downloadsebconfig'] = '下载SEB配置文件';
$string['duplicatetemplate'] = '已经存在具有相同名称的模板。';
$string['edittemplate'] = '编辑模板';
$string['enabled'] = '启用';
$string['error:ws:nokeyprovided'] = '必须提供至少一个安全考试浏览器密钥。';
$string['error:ws:quiznotexists'] = '没有找到匹配的课程模块ID: {$a}';
$string['event:accessprevented'] = '测验访问被阻止';
$string['event:templatecreated'] = '创建SEB模板';
$string['event:templatedeleted'] = '删除SEB模板';
$string['event:templatedisabled'] = '禁用SEB模板';
$string['event:templateenabled'] = '启用SEB模板';
$string['event:templateupdated'] = '更新SEB模板';
$string['exitsebbutton'] = '退出安全考试浏览器';
$string['filemanager_sebconfigfile'] = '上传安全考试浏览器配置文件';
$string['filemanager_sebconfigfile_help'] = '请上传您自己的安全考试浏览器配置文件。';
$string['filenotpresent'] = '请上传SEB配置文件。';
$string['fileparsefailed'] = '上传的文件不能保存为SEB配置文件。';
$string['httplinkbutton'] = '下载配置';
$string['invalid_browser_key'] = 'SEB浏览器密钥无效';
$string['invalid_config_key'] = 'SEB配置密钥无效';
$string['invalidkeys'] = '无法验证 Safe Exam Browser 密钥。检查您是否正在使用带有正确配置文件的 Safe Exam Browser。';
$string['invalidtemplate'] = '无效的SEB配置模板';
$string['manage_templates'] = '安全考试浏览器模板';
$string['managetemplates'] = '管理模板';
$string['missingrequiredsettings'] = '配置设置缺少一些必需的值。';
$string['name'] = '名称';
$string['newtemplate'] = '新模板';
$string['noconfigfilefound'] = 'cmid为 {$a} 的测验没有找到上传的SEB配置文件';
$string['noconfigfound'] = 'cmid为 {$a} 的测验没有找到SEB配置';
$string['not_seb'] = '没有使用安全的考试浏览器。';
$string['notemplate'] = '无模板无模板';
$string['passwordnotset'] = '当前的设置要求使用安全考试浏览器的测验有一个测验密码设置。';
$string['pluginname'] = '安全考试浏览器访问规则';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = '测验的安全考试浏览器设置。这包括创建或修改设置的最后一个用户的ID。';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = '测验的ID的设置存在。';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = '设置创建时的操作系统时间。';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = '最后一次修改设置的操作系统时间。';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = '最后创建或修改设置的用户的ID。';
$string['privacy:metadata:quizaccess_seb_template'] = '安全的考试浏览器模板设置。这包括创建或修改模板的最后一个用户的ID。';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = '创建模板的操作系统时间。';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = '最后一次修改模板的操作系统时间。';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = '最后创建或修改模板的用户的ID。';
$string['quizsettings'] = '测验设置';
$string['restoredfrom'] = '{$a->name} (通过cmid {$a->cmid}还原)';
$string['seb'] = '考试安全浏览器';
$string['seb:bypassseb'] = '绕过在安全考试浏览器中查看测验的要求。';
$string['seb:manage_filemanager_sebconfigfile'] = '更改SEB测验设置：选择SEB配置文件';
$string['seb:manage_seb_activateurlfiltering'] = '更改SEB测验设置：激活URL过滤';
$string['seb:manage_seb_allowedbrowserexamkeys'] = '更改SEB测验设置：允许浏览器考试密钥';
$string['seb:manage_seb_allowreloadinexam'] = '更改SEB测验设置：允许重新加载';
$string['seb:manage_seb_allowspellchecking'] = '更改SEB测验设置：启用拼写检查';
$string['seb:manage_seb_allowuserquitseb'] = '更改SEB测验设置：允许退出';
$string['seb:manage_seb_configuremanually'] = '更改SEB测试设置：选择手动配置';
$string['seb:manage_seb_enableaudiocontrol'] = '更改SEB测验设置：启用音频控制';
$string['seb:manage_seb_expressionsallowed'] = '更改SEB测验设置：允许简单表达式';
$string['seb:manage_seb_expressionsblocked'] = '更改SEB测验设置：阻止简单表达式';
$string['seb:manage_seb_filterembeddedcontent'] = '更改SEB测验设置：过滤嵌入内容';
$string['seb:manage_seb_linkquitseb'] = '更改SEB测验设置：退出链接';
$string['seb:manage_seb_muteonstartup'] = '更改SEB测验设置：启动时静音';
$string['seb:manage_seb_quitpassword'] = '更改SEB测验设置：退出密码';
$string['seb:manage_seb_regexallowed'] = '更改SEB测验设置：允许正则表达式';
$string['seb:manage_seb_regexblocked'] = '更改SEB测验设置：阻塞正则表达式';
$string['seb:manage_seb_requiresafeexambrowser'] = '更改SEB测验设置：要求安全考试浏览器';
$string['seb:manage_seb_showkeyboardlayout'] = '更改SEB测验设置：显示键盘布局';
$string['seb:manage_seb_showreloadbutton'] = '更改SEB测验设置：显示重新加载按钮';
$string['seb:manage_seb_showsebdownloadlink'] = '更改SEB测验设置：显示下载链接';
$string['seb:manage_seb_showsebtaskbar'] = '更改SEB测验设置：显示任务栏';
$string['seb:manage_seb_showtime'] = '更改SEB测验设置：显示时间';
$string['seb:manage_seb_showwificontrol'] = '更改SEB测验置：显示Wi-Fi控制';
$string['seb:manage_seb_templateid'] = '更改SEB测验设置：选择SEB模板';
$string['seb:manage_seb_userconfirmquit'] = '更改SEB测验设置：确认退出';
$string['seb:manage_seb_usesebclientconfig'] = '更改SEB测试设置：使用SEB客户端配置';
$string['seb:managetemplates'] = '管理SEB配置模板';
$string['seb_activateurlfiltering'] = '启用URL过滤';
$string['seb_activateurlfiltering_help'] = '如果启用，url将在加载web页面时被过滤。过滤器集必须在下面定义。';
$string['seb_allowedbrowserexamkeys'] = '允许的浏览器考试密钥';
$string['seb_allowedbrowserexamkeys_help'] = '在这个字段，您可以输入允许浏览器考试密钥的被允许访问这个测验的安全考试浏览器版本。如果没有输入密钥，则不会检查浏览器考试密钥。';
$string['seb_allowreloadinexam'] = '允许在考试中重新加载';
$string['seb_allowreloadinexam_help'] = '如果启用，则允许重新加载页面(重新加载SEB任务栏、浏览器工具栏、iOS侧边滑块菜单、键盘快捷键F5/cmd+R)。请注意，如果用户试图在没有internet连接的情况下重新加载页面，脱机缓存可能会中断。';
$string['seb_allowspellchecking'] = '启用拼写检查';
$string['seb_allowspellchecking_help'] = '如果启用，SEB浏览器中的拼写检查是允许的。';
$string['seb_allowuserquitseb'] = '启用退出SEB';
$string['seb_allowuserquitseb_help'] = '如果启用，用户可以通过SEB任务栏中的“quit”按钮退出SEB，或者按下Ctrl-Q键，或者点击浏览器主窗口关闭按钮。';
$string['seb_enableaudiocontrol'] = '启用音频控制';
$string['seb_enableaudiocontrol_help'] = '如果启用，音频控制图标将显示在SEB任务栏中。';
$string['seb_expressionsallowed'] = '公式允许';
$string['seb_expressionsallowed_help'] = '一个文本字段，其中包含允许的url的过滤表达式。可以使用通配符 \'\\*\'。表达式的例子:\'example.com\'或\'example.com/stuff/\\*\'。“example.com”匹配“example.com”、“www.example.com”和“www.mail.example.com”。\'example.com/stuff/\\*\'匹配所有的请求到\'example.com\'的任何子域，有\'stuff\'作为路径的第一部分。';
$string['seb_expressionsblocked'] = '表达式阻塞';
$string['seb_expressionsblocked_help'] = '一个文本字段，其中包含阻塞url的过滤表达式。可以使用通配符\'\\*\'。表达式的例子:\'example.com\'或\'example.com/stuff/\\*\'。“example.com”匹配“example.com”、“www.example.com”和“www.mail.example.com”。\'example.com/stuff/\\*\'匹配所有的请求到\'example.com\'的任何子域，有\'stuff\'作为路径的第一部分。';
$string['seb_filterembeddedcontent'] = '过滤嵌入的内容';
$string['seb_filterembeddedcontent_help'] = '如果启用，嵌入式资源也将使用过滤器集进行过滤。';
$string['seb_help'] = '设置测验使用安全考试浏览器。';
$string['seb_linkquitseb'] = '显示退出安全考试浏览器按钮，配置此退出链接';
$string['seb_linkquitseb_help'] = '在此字段中，您可以输入退出 SEB 的链接。它用于提交考试后出现的页面上的“Exit Safe Exam Browser”（退出安全考试浏览器）按钮。单击按钮或放置在您想要放置的任何位置的链接时，无需输入退出密码即可退出 SEB。对于 HTTPS 站点，quit 链接必须以 https:// 开头。如果未输入链接，则不会显示“退出安全考试浏览器”按钮，并且没有设置退出 SEB 的链接。';
$string['seb_managetemplates'] = '管理安全考试浏览器模板';
$string['seb_muteonstartup'] = '启动时静音';
$string['seb_muteonstartup_help'] = '如果启用，在启动SEB时，音频最初是静音的。';
$string['seb_quitpassword'] = '退出密码';
$string['seb_quitpassword_help'] = '当用户尝试使用“退出”按钮、Ctrl-Q或浏览器主窗口中的关闭按钮退出SEB时，会提示此密码。如果没有设置退出密码，则SEB只会提示“您确定要退出SEB吗?”';
$string['seb_regexallowed'] = '正则表达式允许';
$string['seb_regexallowed_help'] = '一个文本字段，它以正则表达式(Regex)格式包含对允许的url的过滤表达式。';
$string['seb_regexblocked'] = '正则表达式阻塞';
$string['seb_regexblocked_help'] = '一个文本字段，它以正则表达式(Regex)格式包含对阻塞的url的过滤表达式。';
$string['seb_requiresafeexambrowser'] = '要求使用安全考试浏览器';
$string['seb_requiresafeexambrowser_help'] = '如果启用，学生只能使用安全考试浏览器尝试测验。可用的选项是:*没有<br />尝试该测验不需要安全考试浏览器。*是的-使用现有的模板<br />可使用安全考试浏览器的配置模板。模板在站点管理中进行管理。手动设置会覆盖模板中的设置。*是-手动配置<br/>安全考试浏览器配置将不使用模板。您可以手动配置安全考试浏览器。您可以上传您自己的安全考试浏览器配置文件。所有手动设置和模板的使用将被禁用。*是的-使用SEB客户端配置<br/>在Moodle端没有安全考试浏览器配置。测验可以用任何配置的安全考试浏览器尝试。';
$string['seb_showkeyboardlayout'] = '显示键盘布局';
$string['seb_showkeyboardlayout_help'] = '如果启用，当前的键盘布局将显示在SEB任务栏中。它允许您切换到操作系统中已启用的其他键盘布局。';
$string['seb_showreloadbutton'] = '显示重新加载按钮';
$string['seb_showreloadbutton_help'] = '如果启用，一个“重新加载”按钮将显示在SEB任务栏中，允许当前web页面被重新加载。';
$string['seb_showsebdownloadlink'] = '显示安全考试浏览器下载按钮';
$string['seb_showsebdownloadlink_help'] = '如果启用，安全考试浏览器下载按钮将显示在测验开始页。';
$string['seb_showsebtaskbar'] = '显示SEB任务栏';
$string['seb_showsebtaskbar_help'] = '如果启用，一个任务栏将出现在SEB浏览器窗口的底部。任务栏需要显示Wi-Fi控制、重载按钮、时间和键盘布局等项目。';
$string['seb_showtime'] = '显示时间';
$string['seb_showtime_help'] = '如果启用，当前时间将显示在SEB任务栏中。';
$string['seb_showwificontrol'] = '显示 Wi-Fi 控制';
$string['seb_showwificontrol_help'] = '如果启用，一个 Wi-Fi 控制按钮将出现在SEB任务栏中。这个按钮允许用户重新连接之前连接过的Wi-Fi 网络。';
$string['seb_templateid'] = '安全考试浏览器配置模板';
$string['seb_templateid_help'] = '选择的配置模板中的设置将在尝试测验时用于安全考试浏览器的配置。您可以用手动设置覆盖模板中的设置。';
$string['seb_use_client'] = '是的-使用SEB客户端配置';
$string['seb_use_manually'] = '是的-手动配置';
$string['seb_use_template'] = '是的-使用现有的模板';
$string['seb_use_upload'] = '是的-上传我自己的配置';
$string['seb_userconfirmquit'] = '要求用户确认退出';
$string['seb_userconfirmquit_help'] = '如果启用，用户必须在检测到退出链接时确认退出SEB。';
$string['sebdownloadbutton'] = '下载考试安全浏览器';
$string['sebkeysvalidationfailed'] = '验证SEB密钥时出错';
$string['seblinkbutton'] = '启动安全考试浏览器';
$string['sebrequired'] = '这个测验已经被配置，所以学生只能使用安全考试浏览器尝试该测验。';
$string['setting:autoreconfigureseb'] = '自动配置SEB';
$string['setting:autoreconfigureseb_desc'] = '如果启用，使用安全考试浏览器导航到测验的用户将强制自动重新配置他们的安全考试浏览器。';
$string['setting:displayblocksbeforestart'] = '开始测验前显示版块';
$string['setting:displayblocksbeforestart_desc'] = '如果启用，版块将在用户尝试测验前显示。';
$string['setting:displayblockswhenfinished'] = '完成测验后显示版块';
$string['setting:displayblockswhenfinished_desc'] = '如果启用，版块将在用户完成测验尝试后显示。';
$string['setting:downloadlink'] = '安全考试浏览器下载链接';
$string['setting:downloadlink_desc'] = '下载安全考试浏览器应用程序的URL。';
$string['setting:quizpasswordrequired'] = '要求测验密码';
$string['setting:quizpasswordrequired_desc'] = '如果启用，所有要求安全考试浏览器的测验必须设置测验密码。';
$string['setting:showhttplink'] = '显示http://链接';
$string['setting:showseblink'] = '显示seb://链接';
$string['setting:showseblinks'] = '显示安全考试浏览器配置链接';
$string['setting:showseblinks_desc'] = '当访问测验被阻止时，是否显示用户访问安全考试浏览器配置文件的链接。注意，seb://链接可能不是在每个浏览器中都能工作。';
$string['setting:supportedversions'] = '请注意，以下安全考试浏览器客户端需要使用配置关键功能的最小版本:macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14。';
$string['settingsfrozen'] = '由于至少有一次测验尝试，安全考试浏览器设置不能再更新。';
$string['unknown_reason'] = '未知原因';
$string['used'] = '在使用中';
