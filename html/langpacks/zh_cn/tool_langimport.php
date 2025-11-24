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
 * Strings for component 'tool_langimport', language 'zh_cn', version '4.5'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = '无法连接到下载服务器。无法自动安装或更新语言包。请从<a href="{$a->src}">{$a->src}</a>手动下载相应的 ZIP 文件，并解压到您的数据目录<code>{$a->dest}</code>。';
$string['install'] = '安装选定的语言包';
$string['installedlangs'] = '安装语言包';
$string['installfailed'] = '语言包安装失败！';
$string['installfinished'] = '语言包安装完成。';
$string['installpending'] = '即将安装以下语言包：{$a}';
$string['installscheduled'] = '计划安装的语言包。';
$string['langimport'] = '语言导入工具';
$string['langimportdisabled'] = '语言导入功能已禁用。您必须在文件系统上手工更新语言包。做完后，不要忘记清空字符串缓存。';
$string['langpackinstalled'] = '语言包‘{$a}’安装成功';
$string['langpackinstalledevent'] = '已安装语言包';
$string['langpacknotremoved'] = '发生错误；语言包“{$a}”未完全卸载。请检查文件权限。';
$string['langpackremoved'] = '语言包“{$a}”已卸载';
$string['langpackremovedevent'] = '已卸载语言包';
$string['langpackupdated'] = '语言包“{$a}”已成功更新';
$string['langpackupdatedevent'] = '已更新语言包';
$string['langpackupdateskipped'] = '已跳过更新{$a}语言包';
$string['langpackuptodate'] = '{$a} 语言包是最新的';
$string['langunsupported'] = '<p>您的服务器似乎不完全支持以下语言：</p><ul>{$a->missinglocales}</ul><p>相反，全局区域设置（{$a->globallocale}）将用于格式化某些字符串，例如日期或数字。</p>';
$string['langupdatecomplete'] = '语言包更新成功';
$string['missingcfglangotherroot'] = '未设置配置变量 $CFG->langotherroot';
$string['missinglangparent'] = '缺少语言参数。<em>{$a->lang}</em>的<em>{$a->parent}</em>';
$string['noenglishuninstall'] = '无法卸载英语语言包。';
$string['noenglishuninstalltitle'] = '无法卸载';
$string['nolangupdateneeded'] = '您的语言包已经是最新的了，不需要升级。';
$string['pluginname'] = '语言包';
$string['privacy:metadata'] = '语言包插件不存储任何个人数据。';
$string['purgestringcaches'] = '清除字符串缓存';
$string['search'] = '搜索可用的语言包';
$string['selectlangs'] = '选择要卸载的语言';
$string['uninstall'] = '卸载选定的语言包';
$string['uninstallconfirm'] = '您将要完全卸载这些语言包：<strong>{$a}</strong>。是否确定？';
$string['updatelangs'] = '更新所有已安装的语言包';
$string['updatelangsnote'] = '通过单击按钮更新所有已安装的语言包可能需要很长时间并导致超时。建议改为使用计划任务“{$a->taskname}”（默认情况下每天运行）。';
