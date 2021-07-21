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
 * Strings for component 'editor_atto', language 'zh_cn', version '3.11'.
 *
 * @package     editor_atto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = '无法连接到服务器。如果您现在提交，您的修改将会丢失。';
$string['autosavefrequency'] = '自动保存频率';
$string['autosavefrequency_desc'] = '这是自动保存的间隔秒数。Atto 会依据这一选项自动保存编辑器中的文本，从而在同一用户回到同一表格时恢复文本内容。';
$string['autosavesucceeded'] = '已保存草稿。';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = '行 "{$a}" 的格式不正确。';
$string['errorgroupisusedtwice'] = '组 "{$a}" 定义了两次。组名必须唯一。';
$string['errornopluginsorgroupsfound'] = '没有发现插件或者分组。请添加一些插件或分组。';
$string['errorpluginisusedtwice'] = '插件 "{$a}" 使用了两次。插件只能定义一次。';
$string['errorpluginnotfound'] = '插件 "{$a}" 无法使用。它似乎并没有安装。';
$string['errortextrecovery'] = '很不幸，无法恢复草稿。';
$string['infostatus'] = '信息';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['pluginname'] = 'Atto HTML 编辑器';
$string['recover'] = '恢复';
$string['settings'] = 'Atto 工具栏设置';
$string['subplugintype_atto'] = 'Atto 插件';
$string['subplugintype_atto_plural'] = 'Atto 插件';
$string['textrecovered'] = '此文本的草稿版本已自动恢复。';
$string['toolbarconfig'] = '工具栏设置';
$string['toolbarconfig_desc'] = '可以在这里配置插件列表和它们的显示顺序。配置包括分组 (每行一个)，紧随着其组内插件的列表。分组由等号和插件隔开，插件由逗号隔开。组名必须是唯一的，并应当表明按钮的共性。按钮和组名不应重复并且仅能包含字母和数字。';
$string['warningstatus'] = '警告';
