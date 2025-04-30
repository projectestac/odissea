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
 * Strings for component 'logstore_database', language 'zh_cn', version '4.4'.
 *
 * @package     logstore_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = '缓冲区大小';
$string['buffersize_help'] = '在一批数据库操作中插入的日志条目数，这将提高性能。';
$string['conectexception'] = '无法连接到数据库。';
$string['create'] = '创建';
$string['databasecollation'] = '数据库整理';
$string['databasehandlesoptions'] = '数据库处理选项';
$string['databasehandlesoptions_help'] = '远程数据库是否处理自己的选项。';
$string['databasepersist'] = '持续的数据库连接';
$string['databaseschema'] = '数据库模式';
$string['databasesettings'] = '数据库设置';
$string['databasesettings_help'] = '外部日志数据库的详细连接信息：{$a}';
$string['databasetable'] = '数据库表';
$string['databasetable_help'] = '用来存储日志的表格名称。此表格的结构应与logstore_standard(mdl_logstore_standard_log)使用的结构相同。';
$string['filters'] = '筛选日志';
$string['filters_help'] = '启用从日志中排除某些操作的过滤器。';
$string['includeactions'] = '包括这些类型的操作';
$string['includelevels'] = '包括这些教育等级的操作';
$string['jsonformat'] = 'JSON格式';
$string['jsonformat_desc'] = '在“其他”数据库字段中使用标准JSON格式，而不是PHP序列化数据。';
$string['logguests'] = '记录访客操作';
$string['other'] = '其他';
$string['participating'] = '参与';
$string['pluginname'] = '外部数据库日志';
$string['pluginname_desc'] = '在外部数据库表中存储日志条目的日志插件。';
$string['privacy:metadata:log'] = '过去事件的集合';
$string['privacy:metadata:log:anonymous'] = '事件是否标记为匿名';
$string['privacy:metadata:log:eventname'] = '事件名称';
$string['privacy:metadata:log:ip'] = '事件发生时使用的IP地址';
$string['privacy:metadata:log:origin'] = '事件的起源';
$string['privacy:metadata:log:other'] = '有关事件的其他信息';
$string['privacy:metadata:log:realuserid'] = '伪装用户时，事件背后真实用户的ID。';
$string['privacy:metadata:log:relateduserid'] = '与此事件相关的用户的ID';
$string['privacy:metadata:log:timecreated'] = '事件发生的时间';
$string['privacy:metadata:log:userid'] = '触发此事件的用户的ID';
$string['read'] = '阅读';
$string['tablenotfound'] = '找不到指定的表';
$string['teaching'] = '教学';
$string['testingsettings'] = '正在测试数据库设置。。。';
$string['testsettings'] = '测试连接';
$string['update'] = '更新';
