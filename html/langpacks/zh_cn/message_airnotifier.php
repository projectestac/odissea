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
 * Strings for component 'message_airnotifier', language 'zh_cn', version '3.11'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = '管理设备';
$string['airnotifieraccesskey'] = '短信通知访问密钥';
$string['airnotifierappname'] = '短信通知应用程序名称';
$string['airnotifiermobileappname'] = '移动端应用名称';
$string['airnotifierport'] = '短信通知端口';
$string['airnotifierurl'] = '短信通知URL';
$string['configairnotifieraccesskey'] = '用于连接到短信通知服务器的访问密钥。您可以通过单击下面的“请求访问密钥”链接（仅限注册网站）或在<a href="https://apps.moodle.com">Moodle 应用程序门户网站</a>上创建一个帐户来获取访问密钥。';
$string['configairnotifierappname'] = '短信通知应用程序名称标识符';
$string['configairnotifiermobileappname'] = '唯一的移动端应用识别名（通常像是com.moodle.moodlemobile)。';
$string['configairnotifierport'] = '连接到短信通知服务器时使用的端口。';
$string['configairnotifierurl'] = '连接到发送推送通知的服务器url。';
$string['deletecheckdevicename'] = '删除您的设备：{$a->name}';
$string['deletedevice'] = '删除该设备。请注意，应用程序可以再次注册该设备。如果该设备继续出现，请禁用它。';
$string['devicetoken'] = '设备令牌';
$string['enableprocessor'] = '启用移动设备通知';
$string['errorretrievingkey'] = '检索访问密钥时出错。您的网站必须注册才能使用这项服务。如果您的网站已经注册，请更新您的注册。';
$string['keyretrievedsuccessfully'] = '访问密钥检索成功。要访问Moodle应用程序使用情况统计信息，请在<a href="https://apps.moodle.com"> Moodle应用程序门户网站</a>上创建一个帐户。';
$string['moodleappsportallimitswarning'] = '请注意，允许接收通知的用户设备数量取决于您的Moodle应用程序订阅。有关详细信息，请访问<a href="{$a}" target="_blank"> Moodle 应用程序门户网站</a>。';
$string['nodevices'] = '没有注册的设备。安装Moodle应用程序并添加此站点后，设备将自动出现。';
$string['nopermissiontomanagedevices'] = '您没有管理设备的权限。';
$string['notconfigured'] = '尚未配置短信通知服务器，因此无法发送推送通知。';
$string['pluginname'] = '移动设备';
$string['privacy:appiddescription'] = '这是正在使用的应用程序的标识符。';
$string['privacy:enableddescription'] = '如果此设备启用了短信通知。';
$string['privacy:metadata:date'] = '发送消息的日期。';
$string['privacy:metadata:enabled'] = '短信通知设备是否启用。';
$string['privacy:metadata:externalpurpose'] = '该信息被发送到外部站点，以最终传递到用户的移动设备。';
$string['privacy:metadata:fullmessage'] = '完整的消息。';
$string['privacy:metadata:notification'] = '如果此消息是通知。';
$string['privacy:metadata:smallmessage'] = '消息的一部分。';
$string['privacy:metadata:subject'] = '消息的主题行。';
$string['privacy:metadata:tableexplanation'] = '短信通知设备的信息存储在这里。';
$string['privacy:metadata:userdeviceid'] = '链接到用户移动设备的ID';
$string['privacy:metadata:userfromfullname'] = '发送消息的用户的全名。';
$string['privacy:metadata:userfromid'] = '消息作者的用户ID。';
$string['privacy:metadata:userid'] = '发送消息的用户的ID。';
$string['privacy:metadata:username'] = '用户的用户名。';
$string['privacy:metadata:usersubsystem'] = '该插件已连接到用户子系统。';
$string['privacy:subcontext'] = '短信通知消息';
$string['requestaccesskey'] = '请求访问密钥';
$string['showhide'] = '启用/禁用该设备。';
$string['sitemustberegistered'] = '为了使用公共短信通知实例，必须注册您的站点。另外，您可以通过在<a href="https://apps.moodle.com"> Moodle 应用程序门户网站 </a>上创建一个帐户来获取访问密钥。';
$string['unknowndevice'] = '未知设备';
