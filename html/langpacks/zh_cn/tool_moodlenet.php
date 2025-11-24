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
 * Strings for component 'tool_moodlenet', language 'zh_cn', version '4.5'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = '从MoodleNet添加内容';
$string['aria:enterprofile'] = '输入您的MoodleNet配置文件的ID';
$string['aria:footermessage'] = '浏览MoodleNet上的内容';
$string['autoenablenotification'] = '<p>在 Moodle 4.0 及更高版本中，高级功能中的 <a href="https://moodle.net/">MoodleNet</a> 集成默认启用。具有创建和管理活动功能的用户可以通过活动选择器浏览 MoodleNet，并将 MoodleNet 资源导入到他们的课程中。</p><p>若需要，可在 <a href="{$a->settingslink}">MoodleNet 入站设置</a>中指定备用 MoodleNet 实例。</p>';
$string['autoenablenotification_subject'] = '默认MoodleNet设置已更改。';
$string['browsecontentmoodlenet'] = '或者浏览MoodleNet上的内容';
$string['clearsearch'] = '清除搜索';
$string['connectandbrowse'] = '连接并浏览：';
$string['defaultmoodlenet'] = 'MoodleNet URL';
$string['defaultmoodlenet_desc'] = '活动选择器提供的MoodleNet实例的URL。';
$string['defaultmoodlenetname'] = 'MoodleNet实例名';
$string['defaultmoodlenetname_desc'] = '活动选择器提供的MoodleNet实例的名称。';
$string['defaultmoodlenetnamevalue'] = 'MoodleNet中心';
$string['enablemoodlenet'] = '启用 MoodleNet 集成（入站）';
$string['enablemoodlenet_desc'] = '如果启用，具有创建和管理活动权限的用户可以通过活动选择器浏览MoodleNet，并将MoodleNet资源导入他们的课程。此外，具有还原、备份权限的用户可以在MoodleNet上选择一个备份文件，然后将其还原到Moodle中。';
$string['errorduringdownload'] = '下载文件时发生错误：{$a}';
$string['footermessage'] = '或浏览以下内容';
$string['forminfo'] = '您的 MoodleNet 个人资料 ID 将自动保存在您在本网站上的个人资料中。';
$string['importconfirm'] = '您将把内容“{$a->resourcename} ({$a->resourcetype})”导入到课程“{$a->coursename}”中。您确定要继续吗?';
$string['importconfirmnocourse'] = '您将导入内容“{$a->resourcename} ({$a->resourcetype})”到您的站点。您确定要继续吗?';
$string['importformatselectguidingtext'] = '您希望“{$a->name} ({$a->type})”以何种格式添加到您的课程中?';
$string['importformatselectheader'] = '选择内容显示格式';
$string['inputhelp'] = '或者，如果您已经拥有 MoodleNet 帐户，请从您的 MoodleNet 个人资料中复制 ID 并将其粘贴到此处：';
$string['instancedescription'] = 'MoodleNet是一个面向教育工作者的开放式社交媒体平台，专注于开放资源集合的协作管理。';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-example@moodle.net';
$string['invalidmoodlenetprofile'] = '{$a->userprofile}格式不正确';
$string['missinginvalidpostdata'] = '来自MoodleNet的资源信息丢失或格式不正确。如果重复发生这种情况，请与站点管理员联系。';
$string['mnetprofile'] = 'MoodleNet配置文件';
$string['mnetprofiledesc'] = '<p>在这里输入您的MoodleNet配置文件的详细信息，在访问MoodleNet时将被重定向到您的配置文件。</p>';
$string['moodlenetnotenabled'] = '必须先在“站点管理/ MoodleNet”中启用MoodleNet集成，然后才能处理资源导入。';
$string['moodlenetsettings'] = 'MoodleNet 入站设置';
$string['notification'] = '您将导入内容“{$a->name} ({$a->type})”到您的站点。请选择要添加它的课程，或<a href="{$a->cancellink}">取消</a>。';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'MoodleNet工具只是方便了与MoodleNet的沟通。它不存储数据。';
$string['profilevalidationerror'] = '尝试验证您的 MoodleNet 配置文件 ID 时出现问题';
$string['profilevalidationfail'] = '请输入一个有效的MoodleNet配置文件ID';
$string['profilevalidationpass'] = '看起来不错！';
$string['removedmnetprofilenotification'] = '由于最近MoodleNet平台发生了变化，以前在网站上保存了MoodleNet配置文件ID的所有用户都需要输入新格式的MoodleNet配置文件ID，以便在MoodleNet平台上进行认证。';
$string['removedmnetprofilenotification_subject'] = 'MoodleNet配置文件ID格式更改';
$string['saveandgo'] = '保存并继续';
$string['searchcourses'] = '搜索课程';
$string['selectpagetitle'] = '选择页';
$string['uploadlimitexceeded'] = '文件大小{$a->filesize}超过了用户上传限制{$a->uploadlimit}字节。';
