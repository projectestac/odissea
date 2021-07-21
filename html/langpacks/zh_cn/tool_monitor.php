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
 * Strings for component 'tool_monitor', language 'zh_cn', version '3.11'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = '添加一条新规则';
$string['allevents'] = '所有事件';
$string['allmodules'] = '所有实例';
$string['area'] = '区域';
$string['areatomonitor'] = '监看的区域';
$string['cachedef_eventsubscriptions'] = '这是用以保存个别课程的事件订阅的列表';
$string['contactadmin'] = '联系你的管理员来启用它';
$string['core'] = '核心';
$string['currentsubscriptions'] = '你目前的订阅';
$string['defaultmessagetemplate'] = '规则名称: {rulename}<br />说明: {description}<br />事件名称: {eventname}';
$string['deleterule'] = '删除规则';
$string['deletesubscription'] = '删除订阅';
$string['description'] = '说明';
$string['disablefieldswarning'] = '某些字段无法编辑，因为已有人订阅该规则';
$string['duplicaterule'] = '重复的规则';
$string['editrule'] = '编辑规则';
$string['enablehelp'] = '启用/关闭事件监看';
$string['enablehelp_help'] = '必须先启用事件监看，你才可以建立和订阅规则。注意，事件监看可能影响你的网站性能。';
$string['errorincorrectevent'] = '请选择一个与已被选择的插件有关的事件';
$string['event'] = '事件';
$string['eventnotfound'] = '没有发现事件';
$string['eventrulecreated'] = '规则已建立';
$string['eventruledeleted'] = '规则已删除';
$string['eventruleupdated'] = '规则已更新';
$string['eventsubcreated'] = '订阅已建立';
$string['eventsubcriteriamet'] = '订阅标准';
$string['eventsubdeleted'] = '订阅已删除';
$string['freqdesc'] = '在 {$a->mins} 分钟内有 {$a->freq} 次';
$string['frequency'] = '通知阈值';
$string['frequency_help'] = '需要在指定的时间限制内发生多少次事件才发出通知讯息';
$string['inminutes'] = '分钟';
$string['invalidmodule'] = '无效的模块';
$string['manage'] = '管理';
$string['managerules'] = '事件监看规则';
$string['manageruleslink'] = '你可以从这{$a}页面管理规则';
$string['managesubscriptions'] = '事件监看';
$string['managesubscriptionslink'] = '你可以从这{$a}页面订阅规则';
$string['messageprovider:notification'] = '规则订阅的通知';
$string['messagetemplate'] = '通知讯息';
$string['messagetemplate_help'] = '一旦达到发出通知的门槛，将会寄出通知信息给订阅者。此信息可以包含以下变动:
<br /><br />
* 到这事件位置的链接 {link}<br />
* 到这被监看区域的链接 {modulelink}<br />
* 规则名称 {rulename}<br />
* 说明 {description}<br />
* 事件 {eventname}';
$string['moduleinstance'] = '实例';
$string['monitor:managerules'] = '管理事件监看规则';
$string['monitor:managetool'] = '启用/关闭事件监看';
$string['monitor:subscribe'] = '订阅事件监看规则';
$string['monitordisabled'] = '事件监看目前已被关闭';
$string['monitorenabled'] = '事件监看目前已被启用';
$string['norules'] = '这里没有事件监看规则';
$string['pluginname'] = '事件查看器';
$string['processevents'] = '处理事件';
$string['ruleareyousure'] = '你确定要删除这个规则“${a}”？';
$string['ruleareyousureextra'] = '这里有{$a}个对此规则的订阅，也将被一起删除。';
$string['rulecopysuccess'] = '规则已被复制';
$string['ruledeletesuccess'] = '规则已被删除';
$string['rulehelp'] = '规则细节';
$string['rulehelp_help'] = '当\'{$a->moduleinstance}\' 的事件\'{$a->eventname}\'在{$a->minutes} 分钟内发生{$a->frequency} 次，这个规则就会起反应。';
$string['rulename'] = '规则名称';
$string['rulenopermission'] = '你没有权限订阅任何监看事件';
$string['rulenopermissions'] = '你没有权限去"{$a}一规则"';
$string['rulescansubscribe'] = '你可以订阅的规则';
$string['selectacourse'] = '选择一课程';
$string['selectcourse'] = '在课程里查看报告，以便获得可能的模块列表';
$string['subareyousure'] = '你确定要删除对这个规则"{$a}"的订阅？';
$string['subcreatesuccess'] = '订阅已被建立';
$string['subdeletesuccess'] = '订阅已被移除';
$string['subhelp'] = '订阅细节';
$string['subhelp_help'] = '当\'{$a->moduleinstance}\' 的事件\'{$a->eventname}\'在{$a->minutes} 分钟内发生{$a->frequency} 次，这个订阅就会起反应。';
$string['subscribeto'] = '订阅规则"{$a}"';
$string['taskcleanevents'] = '移除不必要的监看事件';
$string['unsubscribe'] = '取消订阅';
