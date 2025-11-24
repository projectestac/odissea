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
 * Strings for component 'enrol_meta', language 'zh_cn', version '4.5'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = '加到小组';
$string['coursesort'] = '源课程列表顺序';
$string['coursesort_help'] = '将元课程链接到目标课程时，应如何对源课程进行排序？';
$string['creategroup'] = '建立新组';
$string['defaultgroupnametext'] = '{$a->name} 课程 {$a->increment}';
$string['enrolmetasynctask'] = '元报名同步任务';
$string['linkedcourse'] = '链接课程';
$string['meta:config'] = '配置元选课实例';
$string['meta:selectaslinked'] = '选择做为元链接的课程';
$string['meta:unenrol'] = '撤销停用用户的选课';
$string['nosyncroleids'] = '不同步的用户';
$string['nosyncroleids_desc'] = '选择不应在源课程和目标课程之间同步的任何角色。';
$string['pluginname'] = '课程元链接';
$string['pluginname_desc'] = '课程元链接将注册和角色从源课程同步到目标课程。';
$string['privacy:metadata:core_group'] = '课程元链接注册插件可以创建新小组，也可以使用现有小组从源课程添加参与者。';
$string['samemetacourse'] = '您不能向同一课程添加元链接';
$string['syncall'] = '同步所有已选课用户';
$string['syncall_desc'] = '如果启用，则所有已选课的用户都将从源课程同步，即使他们在源课程中没有角色。否则，只有至少具有一个角色的用户才会在目标课程中注册。';
$string['unknownmetacourse'] = '未知的元课程简称';
$string['wscannotcreategroup'] = '无权在链接的课程 ID = {$a} 中创建小组。';
$string['wsinvalidcourse'] = '课程 ID = {$a} 不存在，或没有添加课程元链接的权限。';
$string['wsinvalidmetacourse'] = '元课程 ID = {$a} 不存在或无添加注册实例的权限。';
$string['wsnoinstancesspecified'] = '未指定实例';
