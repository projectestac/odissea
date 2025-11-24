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
 * Strings for component 'logstore_legacy', language 'zh_cn', version '4.5'.
 *
 * @package     logstore_legacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = '被记录的遗留事件';
$string['loglegacy'] = '记录遗留数据';
$string['loglegacy_help'] = '该插件将日志数据记录到遗留日志表（mdl_log）中。此功能已被更新、更丰富、更高效的日志插件所取代，因此仅在您有需要直接查询旧版日志表的旧版自定义报告时，才应该运行此插件。写入遗留日志将增加负载，出于性能原因，建议您在不需要使用时禁用此插件。';
$string['pluginname'] = '旧日志（兼容目的）';
$string['pluginname_desc'] = '在旧日志表中存储日志条目的日志插件。';
$string['privacy:metadata:log'] = '过去事件的集合';
$string['privacy:metadata:log:action'] = '对操作的描述';
$string['privacy:metadata:log:info'] = '其他信息';
$string['privacy:metadata:log:ip'] = '事件发生时使用的IP地址';
$string['privacy:metadata:log:time'] = '操作发生的时间';
$string['privacy:metadata:log:url'] = '与事件相关的URL';
$string['privacy:metadata:log:userid'] = '执行操作的用户的ID';
$string['taskcleanup'] = '旧日志表清理';
