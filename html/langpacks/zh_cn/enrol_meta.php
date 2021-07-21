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
 * Strings for component 'enrol_meta', language 'zh_cn', version '3.11'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = '加到小组';
$string['coursesort'] = '课程列表排序';
$string['coursesort_help'] = '这用来决定那些可以链接的课程列表的排序顺序是依照指定顺序(例如：网站管理>课程>管理课程与类别>排列顺序)或是自动按照字母顺序排列。';
$string['creategroup'] = '建立新组';
$string['defaultgroupnametext'] = '{$a->name} 课程 {$a->increment}';
$string['linkedcourse'] = '链接课程';
$string['meta:config'] = '配置元选课实例';
$string['meta:selectaslinked'] = '选择做为元链接的课程';
$string['meta:unenrol'] = '撤销停用用户的选课';
$string['nosyncroleids'] = '不同步的用户';
$string['nosyncroleids_desc'] = '缺省情况，所有课程级的角色分配都会从父课程同步到子课程。在这里选择的角色不会被同步。在下一次cron执行时，会更新可以同步的角色。';
$string['pluginname'] = '课程元链接';
$string['pluginname_desc'] = '课程元链接选课插件在两个不同课程间同步选课和角色。';
$string['syncall'] = '同步所有已选课用户';
$string['syncall_desc'] = '如果启用所有已选课用户都会被同步，无论他们是否参与父课程。如果禁用，则至少有一个已同步角色的用户才会被选课到子课程。';
