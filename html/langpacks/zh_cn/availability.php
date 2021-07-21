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
 * Strings for component 'availability', language 'zh_cn', version '3.11'.
 *
 * @package     availability
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessrestrictions'] = '访问限制';
$string['addrestriction'] = '添加限制';
$string['and'] = '且';
$string['condition_group'] = '限制集合';
$string['condition_group_info'] = '添加一系列的嵌套限制，用以更复杂的逻辑。';
$string['enableavailability'] = '允许受限制的访问';
$string['enableavailability_desc'] = '启用后，可以基于条件（日期、成绩或完成状态）设置活动或资源的可用性。';
$string['error_list_nochildren'] = '逻辑集应该至少包含一个条件。';
$string['hidden_all'] = '如果用户不满足条件就完全隐藏';
$string['hidden_individual'] = '如果用户不满足这个条件就完全隐藏';
$string['hidden_marker'] = '其他方式隐藏';
$string['hide_verb'] = '点击隐藏';
$string['invalid'] = '请设置';
$string['item_unknowntype'] = '这些限制使用了一个已经不再可用的插件（如果可以移除这些限制，请将其删除）';
$string['itemheading'] = '{$a->number} {$a->type} 限制';
$string['label_multi'] = '必需的限制';
$string['label_sign'] = '限制类型';
$string['list_and'] = '所有的';
$string['list_and_hidden'] = '所有（不同方式隐藏）';
$string['list_or'] = '任意一项';
$string['list_or_hidden'] = '任何的（不同方式隐藏）';
$string['list_root_and'] = '不能使用除非';
$string['list_root_and_hidden'] = '不能使用（隐藏）除非';
$string['list_root_or'] = '不能使用除非符合任意一项';
$string['list_root_or_hidden'] = '不能使用（隐藏）除非符合任意一项';
$string['listheader_multi_after'] = '以下';
$string['listheader_multi_and'] = '全部';
$string['listheader_multi_before'] = '符合';
$string['listheader_multi_or'] = '任何';
$string['listheader_sign_before'] = '学生';
$string['listheader_sign_neg'] = '必须不';
$string['listheader_sign_pos'] = '必须';
$string['listheader_single'] = '符合下列';
$string['manageplugins'] = '管理限制';
$string['missingplugin'] = '缺少限制插件';
$string['or'] = '或';
$string['privacy:metadata'] = '访问限制子系统不存储任何个人数据。';
$string['restrictaccess'] = '限制访问';
$string['restrictbygroup'] = '添加小组/大组访问限制';
$string['setheading'] = '{$a->number} 设置中的 {$a->count} 条件';
$string['show_verb'] = '点击显示灰色显示';
$string['shown_all'] = '如果用户没有满足这一条件，则显示灰色';
$string['shown_individual'] = '如果用户没有满足这一条件，以变灰色来显示';
$string['unknowncondition'] = '未知条件（删除条件的插件）';
