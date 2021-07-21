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
 * Strings for component 'tool_recyclebin', language 'zh_cn', version '3.11'.
 *
 * @package     tool_recyclebin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alertdeleted'] = '\'{$a->name}\' 已删除';
$string['alertemptied'] = '回收站已清空';
$string['alertrestored'] = '\'{$a->name}\'  已恢复';
$string['autohide'] = '自动隐藏';
$string['autohide_desc'] = '当回收站为空时，自动隐藏回收站链接';
$string['categorybinenable'] = '启用类别回收站';
$string['categorybinexpiry'] = '课程生存期';
$string['categorybinexpiry_desc'] = '一个被删除的课程要在回收站中保存多久？';
$string['coursebinenable'] = '启用课程回收站';
$string['coursebinexpiry'] = '条目生命期';
$string['coursebinexpiry_desc'] = '一个被删除的条目要在回收站中保存多久？';
$string['datedeleted'] = '数据已删除';
$string['deleteall'] = '删除所有';
$string['deleteallconfirm'] = '确认删除回收站中所有条目？';
$string['deleteconfirm'] = '确认删除回收站中已选条目？';
$string['deleteexpirywarning'] = '{$a} 后内容将被永久删除';
$string['eventitemcreated'] = '条目已建立';
$string['eventitemcreated_desc'] = 'ID {$a->objectid} 的条目已建立';
$string['eventitemdeleted'] = '条目已删除';
$string['eventitemdeleted_desc'] = 'ID {$a->objectid}的条目已删除';
$string['eventitemrestored'] = '条目已恢复';
$string['eventitemrestored_desc'] = 'ID {$a->objectid} 的条目已恢复';
$string['invalidcontext'] = '无效的内容被提供了';
$string['noitemsinbin'] = '回收站中没有条目';
$string['notenabled'] = '报歉，回收站已被管理员禁用';
$string['pluginname'] = '回收站';
$string['recyclebin:deleteitems'] = '删除回收站条目';
$string['recyclebin:restoreitems'] = '恢复回收站条目';
$string['recyclebin:viewitems'] = '查看回收站条目';
$string['taskcleanupcategorybin'] = '清理分类回收站';
$string['taskcleanupcoursebin'] = '清理课程回收站';
