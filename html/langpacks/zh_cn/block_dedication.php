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
 * Strings for component 'block_dedication', language 'zh_cn', version '4.5'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_filter_courseid'] = '课程名称';
$string['admin_filter_courseid_help'] = '按课程名称过滤报告';
$string['admin_filter_form'] = '功能配置';
$string['admin_filter_form_help'] = '时间是根据应用于日志条目的会话和会话持续时间的概念估计的。

<strong>点击：</strong>每次用户访问 Moodle 中的页面时，都会存储一个日志条目。

<strong>会话：</strong>一组连续两次或多次点击，其中每对连续点击之间的经过时间
未超过既定的最长时间。

<strong>会话持续时间：</strong>会话第一次点击和最后一次单击之间经过的时间。

<strong>奉献时间：<</strong>用户所有会话持续时间的总和。';
$string['admin_filter_form_text'] = '选择日期范围和同一会话的两次点击之间的最长时间';
$string['admin_filter_maxtime'] = '期末';
$string['admin_filter_maxtime_help'] = '仅考虑在此日期之前结束的日志条目';
$string['admin_filter_mintime'] = '期初';
$string['admin_filter_mintime_help'] = '仅考虑此日期之后的日志条目';
$string['admin_filter_submit'] = '计算';
$string['allloglifetime'] = '保留会话历史记录';
$string['averagetimespent'] = '<strong>平均上课时间：</strong> {$a}';
$string['cleanuptask'] = '会话历史记录清理任务';
$string['collect_dedication'] = '为时间花费模块收集数据';
$string['configallloglifetime'] = '指定要保留有关会话持续时间的数据的时间长度。超过此长度的会话将自动删除。';
$string['connectionratiorow'] = '每日连接数';
$string['dedication:addinstance'] = '允许添加时间花费模块';
$string['dedication:myaddinstance'] = '允许将时间花费模块添加到仪表板页面';
$string['dedication:viewreports'] = '允许查看时间花费报告';
$string['dedicationall'] = '所有课程成员的时间花费。单击名字以查看其详细的课程时间花费。';
$string['dedicationrow'] = '课程花费的时间';
$string['enrolmententity'] = '选课报名';
$string['enrolmentmethod'] = '报名方式';
$string['entity_dedication'] = '时间花费';
$string['excludesessionslessthan'] = '排除小于 {$a} 的会话';
$string['group'] = '组';
$string['groupentity'] = '组';
$string['ignore_sessions_limit'] = '忽略会话限制';
$string['ignore_sessions_limit_desc'] = '删除较短的会话，任何小于此值（以分钟为单位）的内容都将在贡献报告中被忽略';
$string['lastupdated'] = '上次更新时间： {$a}';
$string['period'] = '从 <em>{$a->mintime}</em>到 <em>{$a->maxtime}</em>的时期';
$string['perioddiff'] = '<strong>估计的时间：</strong>  {$a}';
$string['pluginname'] = '时间花费';
$string['privacy:metadata'] = 'block_dedication插件存储用户专用于课程的时间花费。';
$string['privacy:metadata:block_dedication:courseid'] = '时间花费的课程ID';
$string['privacy:metadata:block_dedication:timespent'] = '在课程上花费的时间';
$string['privacy:metadata:block_dedication:timestart'] = '收集数据的开始时间';
$string['privacy:metadata:block_dedication:userid'] = '时间花费的用户ID';
$string['report_dedication'] = '工具时间花费报告';
$string['report_timespent'] = '时间花费报告';
$string['session_limit'] = '会话限制';
$string['session_limit_desc'] = '报表页筛选器的会话限制';
$string['sessionduration'] = '会话持续时间';
$string['sessiondurationsum'] = '会话持续时间（总和）';
$string['sessionstart'] = '会话启动';
$string['showestimatedtime'] = '向用户显示估计花费的时间';
$string['showestimatedtime_help'] = '此设置允许用户查看他们在块中花费的估计时间。';
$string['timespent_estimation'] = '估计您在课程中花费的时间是：';
$string['timespentincourse'] = '课程花费的时间';
$string['timespentreport'] = '完整报告';
$string['timespenttasknotrunning'] = '花费的时间计算任务尚未运行。';
$string['totaltimespent'] = '<strong>在课程中花费的所有时间的总和：</strong> {$a}';
$string['user_dedication_datasource'] = '用户时间花费';
$string['userdedication'] = '<em>{$a}</em>的详细课程时间花费。';
$string['viewsessiondurationreport'] = '查看会话持续时间报告';
