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
 * Strings for component 'tool_langimport', language 'zh_cn', version '3.11'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['install'] = '安装选择的语言包';
$string['installedlangs'] = '安装语言包';
$string['installfailed'] = '语言包安装失败！';
$string['installfinished'] = '语言包安装完成。';
$string['installpending'] = '即将安装以下语言包：{$a}';
$string['installscheduled'] = '计划安装的语言包。';
$string['langimport'] = '语言导入工具';
$string['langimportdisabled'] = '语言导入功能已禁用。您必须在文件系统上手工更新语言包。做完后，不要忘记清空字符串缓存。';
$string['langpackinstalled'] = '语言包{$a}安装成功';
$string['langpackremoved'] = '语言包已卸载';
$string['langpackupdateskipped'] = '跳过更新{$a}语言包';
$string['langpackuptodate'] = '{$a}语言包是最新的';
$string['langupdatecomplete'] = '语言包更新成功';
$string['missingcfglangotherroot'] = '未设置配置变量 $CFG->langotherroot';
$string['missinglangparent'] = '缺少语言参数。<em>{$a->lang}</em>的<em>{$a->parent}</em>';
$string['nolangupdateneeded'] = '您的语言包已经是最新的了，不需要升级。';
$string['pluginname'] = '语言包';
$string['purgestringcaches'] = '清除字符串缓存';
$string['search'] = '搜索可用的语言包';
$string['uninstall'] = '卸载选择的语言包';
$string['uninstallconfirm'] = '您准备要完全卸载语言包{$a}，您确定吗？';
$string['updatelangs'] = '更新所有已安装的语言包';
$string['updatelangsnote'] = '通过单击按钮更新所有已安装的语言包可能需要很长时间并导致超时。建议改为使用计划任务“{$a->taskname}”（默认情况下每天运行）。';
