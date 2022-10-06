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
 * Strings for component 'tool_mobile', language 'zh_cn', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = '启用ADOdb调试。它应该在外部数据库认证或外部数据库注册插件设置中禁用。';
$string['androidappid'] = 'Android应用程序的惟一标识符';
$string['androidappid_desc'] = '除非您有自定义 Android 应用，否则此设置可以留为默认值。';
$string['apppolicy'] = '应用政策网址';
$string['apppolicy_help'] = '应用用户政策网址，列在应用的“关于”页面上。如果字段为空，则使用站点政策网址。';
$string['apprequired'] = '该功能只有通过Moodle移动或桌面应用访问时才能使用。';
$string['autologinkeygenerationlockout'] = '自动登录密钥生成被阻塞。您需要在请求之间等待 6 分钟。';
$string['autologinnotallowedtoadmins'] = '站点管理员不允许自动登录。';
$string['cachedef_plugininfo'] = '它存储包含移动插件的插件列表';
$string['clickheretolaunchtheapp'] = '如果应用没有自动打开，请点击这里。';
$string['configmobilecssurl'] = '定制您的移动应用界面的CSS文件。';
$string['customlangstrings'] = '自定义语言字符串';
$string['custommenuitems'] = '自定义菜单项';
$string['darkmode'] = '深色模式';
$string['disabledfeatures'] = '禁用功能';
$string['disabledfeatures_desc'] = '在这里为您的站点选择您想要在移动应用中禁用的功能。请注意，这里列出的一些功能可能已经通过其他站点设置被禁用。您必须退出并再次登录应用才能看到变化。';
$string['displayerrorswarning'] = '已启用显示调试消息(debugdisplay)。它应该被禁用。';
$string['downloadcourse'] = '下载课程';
$string['downloadcourses'] = '下载课程';
$string['enablesmartappbanners'] = '启用应用头图';
$string['enablesmartappbanners_desc'] = '如果启用，在使用移动设备浏览器访问站点时，将显示一个推广移动应用的头图。';
$string['forcedurlscheme'] = '如果您只允许您的自定义品牌应用通过浏览器窗口打开，那么在这里指定它的URL方案。如果您只允许官方应用，那么设置为默认值。如果您想允许任何应用，请将字段留空。';
$string['forcedurlscheme_key'] = 'URL方案';
$string['forcelogout'] = '强制退出';
$string['forcelogout_desc'] = '如果启用，“切换站点”的应用选项将被“退出”所取代。这将导致用户被完全退出。他们下次访问站点的时候必须重新输入密码。';
$string['getmoodleonyourmobile'] = '获取移动应用';
$string['h5poffline'] = '离线查看H5P内容';
$string['httpsrequired'] = '‎需要 HTTPS‎';
$string['insecurealgorithmwarning'] = '似乎HTTPS证书使用了一种不安全的签名算法(SHA-1)。请更新证书。';
$string['invalidcertificatechainwarning'] = '似乎证书链是无效的。';
$string['invalidcertificateexpiredatewarning'] = '似乎该站点的HTTPS证书已经过期。';
$string['invalidcertificatestartdatewarning'] = '似乎该站点的HTTPS证书还未生效(生效日期还未到)。';
$string['invalidprivatetoken'] = '无效的私人令牌。令牌不应为空或通过GET参数传递。';
$string['invaliduserquotawarning'] = '用户配额(userquota)设置的数字无效。在站点安全设置中，应该将其设置为一个有效的数字(一个整数值)。';
$string['iosappid'] = 'iOS应用的唯一标识符';
$string['iosappid_desc'] = '除非您有一个定制的iOS应用，否则这个设置可以保留为默认值。';
$string['loginintheapp'] = '通过应用（APP）';
$string['logininthebrowser'] = '通过浏览器窗口(用于SSO插件)';
$string['loginintheembeddedbrowser'] = '通过嵌入式浏览器(用于SSO插件)';
$string['mainmenu'] = '主菜单';
$string['minimumversion'] = '如果指定了应用版本(3.8.0或更高版本)，任何使用较老版本应用的用户将被提示升级他们的应用，然后才能访问站点。';
$string['minimumversion_key'] = '最低应用版本要求';
$string['mobileapp'] = '移动应用';
$string['mobileappconnected'] = '已连接移动应用';
$string['mobileappearance'] = '移动设备外观';
$string['mobileappenabled'] = '此站点已启用移动应用访问。<br /> <a href="{$a}">下载移动应用</a>。';
$string['mobileauthentication'] = '移动设备身份验证';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = '移动设备功能';
$string['mobilenotificationsdisabledwarning'] = '未启用移动设备通知。应在通知设置中启用它们。';
$string['mobilesettings'] = '移动设备设置';
$string['moodleappsportalfeatureswarning'] = '请注意，某些功能可能会受到限制，具体取决于您的Moodle应用订阅。有关详细信息，请访问<a href="{$a}" target="_blank">Moodle应用门户网站</a>。';
$string['oauth2identityproviders'] = 'OAuth 2身份验证提供程序';
$string['offlineuse'] = '离线使用';
$string['pluginname'] = 'Moodle 应用工具';
$string['pluginnotenabledorconfigured'] = '未启用或配置插件。';
$string['privacy:metadata:core_userkey'] = '用户密钥，用于为当前用户创建自动登录密钥。';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = '上次自动登录密钥请求的日期。每次请求之间需要 6 分钟。';
$string['readingthisemailgettheapp'] = '在邮件中阅读？<a href="{$a}">在您的移动设备上下载移动应用并接收通知</a>。';
$string['remoteaddons'] = '远程附件';
$string['responsivemainmenuitems'] = '响应式菜单项';
$string['selfsignedoruntrustedcertificatewarning'] = '似乎HTTPS证书是自签名的或不受信任的。该移动应用只能在可信任的站点上使用。';
$string['setuplink'] = '应用下载页面';
$string['setuplink_desc'] = '页面网址，其中包含从app Store和Google Play下载移动应用的选项。应用下载页面链接显示在页面页脚和用户个人档案中。留空则不显示链接。';
$string['smartappbanners'] = '应用头图';
$string['typeoflogin'] = '登陆类型';
$string['typeoflogin_desc'] = '如果站点使用SSO身份验证方法，则通过浏览器窗口或嵌入式浏览器进行选择。嵌入式浏览器虽然不能与所有SSO插件一起使用，但可以提供更好的用户体验。';
