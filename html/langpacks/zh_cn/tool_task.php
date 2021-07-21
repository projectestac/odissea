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
 * Strings for component 'tool_task', language 'zh_cn', version '3.11'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = '尽快';
$string['blocking'] = '封锁';
$string['component'] = '组件';
$string['corecomponent'] = '核心';
$string['default'] = '默认';
$string['disabled'] = '关闭';
$string['disabled_help'] = 'Cron不会执行被关闭的工作安排，但它们仍然可由CLI工具手动执行。';
$string['edittaskschedule'] = '编辑计划任务：{$a}';
$string['enablerunnow'] = '允许“现在运行”预定的任务';
$string['enablerunnow_desc'] = '允许管理员立即运行一个单独的预定任务，而不是等待它按照计划运行。该任务在web服务器上运行，因此一些站点可能希望禁用该特性，以避免潜在的性能问题。';
$string['faildelay'] = '故障延迟';
$string['lastruntime'] = '最后运行';
$string['nextruntime'] = '下次运行';
$string['plugindisabled'] = '插件已关闭';
$string['pluginname'] = '计划任务设置';
$string['resettasktodefaults'] = '恢复计划任务为默认值';
$string['resettasktodefaults_help'] = '将会放弃任何本地所做的修改，并将此工作恢复到原始设置。';
$string['scheduledtaskchangesdisabled'] = '在Moodle配置中已经禁止修改计划任务';
$string['scheduledtasks'] = '计划任务';
$string['taskdisabled'] = '计划任务已关闭';
$string['taskscheduleday'] = '日';
$string['taskscheduleday_help'] = '任务调度的"日"字段。这一字段必须使用与 unix cron 相同的格式。例如:<br/>
<ul><li><strong>*</strong>每一天</li>
<li><strong>*/2</strong> 每隔2天</li>
<li><strong>1</strong>每个月的第1天</li>
<li><strong>1,15</strong> 每个月的第1和第15天</li>
</ul>';
$string['taskscheduledayofweek'] = '星期几';
$string['taskscheduledayofweek_help'] = '任务高度的"星期几"字段。这一字段必须使用与 unix cron相同的格式。例如:<br/>
<ul>
<li><strong>*</strong> 一周每天</li>
<li><strong>0</strong> 每个星期日</li>
<li><strong>6</strong> 每个星期六</li>
<li><strong>1,5</strong>每个星期一和五</li>
</ul>';
$string['taskschedulehour'] = '时';
$string['taskschedulehour_help'] = '任务调度"时"字段。这个字段必须使用与 unix cron 相同的格式。例如:<br/>
<ul>
<li><strong>*</strong> 每小时</li>
<li><strong>*/2</strong> 每2小时</li>
<li><strong>2-10</strong>从2点到10点的每一小时 (包含)</li>
<li><strong>2,6,9</strong>2点、6点和9点</li>
</ul>';
$string['taskscheduleminute'] = '分';
$string['taskscheduleminute_help'] = '任务调度的"分"字段。这个字段必须使用与 unix cron 相同的格式。例如:<br/>
<ul>
<li><strong>*</strong> 每一分钟</li>
<li><strong>*/5</strong> 每隔5分钟</li>
<li><strong>2-10</strong> 介于2到10(包含)之间的每一分钟</li>
<li><strong>2,6,9</strong> 整点过后的第2、6和9分钟</li>
</ul>';
$string['taskschedulemonth'] = '月';
$string['taskschedulemonth_help'] = '任务调度的"月"字段。这个字段必须使用与 unix cron 相同的格式。例如:<br/>
<ul>
<li><strong>*</strong> 每一个月</li>
<li><strong>*/2</strong>每隔2个月</li>
<li><strong>1</strong>每到一月份</li>
<li><strong>1,5</strong> 一月和五月</li>
</ul>';
