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

$string['adhoc'] = '临时的';
$string['adhocempty'] = '临时任务队列为空';
$string['adhocqueueold'] = '最早的任务是{$a->age}，它超过了{$a->max}。';
$string['adhocqueuesize'] = '临时任务队列有{$a}个任务';
$string['adhoctaskid'] = '临时任务ID:{$a}';
$string['adhoctasks'] = '临时任务';
$string['asap'] = '尽快';
$string['backtoscheduledtasks'] = '返回预定的任务';
$string['blocking'] = '封锁';
$string['cannotfindthepathtothecli'] = '找不到PHP CLI可执行文件的路径，因此任务执行中止。请在站点管理/服务器/系统路径中设置“PHP CLI路径”。';
$string['checkadhocqueue'] = '临时任务队列';
$string['checkcronrunning'] = 'Cron运行';
$string['checkmaxfaildelay'] = '任务最大失败延迟';
$string['classname'] = '类名';
$string['clearfaildelay_confirm'] = '确定要清除任务\'{$a}\'的失败延迟吗？清除延迟后，该任务将按照其正常计划运行。';
$string['component'] = '组件';
$string['corecomponent'] = '核心';
$string['crondisabled'] = 'Cron已禁用。不会启动任何新任务。在再次启用之前，系统将无法正常工作。';
$string['cronok'] = 'Cron正在频繁运行';
$string['default'] = '默认';
$string['defaultx'] = '默认值：{$a}';
$string['disabled'] = '关闭';
$string['disabled_help'] = 'Cron不会执行被关闭的工作安排，但它们仍然可由CLI工具手动执行。';
$string['edittaskschedule'] = '编辑计划任务：{$a}';
$string['enablerunnow'] = '允许“现在运行”预定的任务';
$string['enablerunnow_desc'] = '允许管理员立即运行一个单独的预定任务，而不是等待它按照计划运行。该任务在web服务器上运行，因此一些站点可能希望禁用该特性，以避免潜在的性能问题。';
$string['faildelay'] = '故障延迟';
$string['fromcomponent'] = '来自组件：{$a}';
$string['hostname'] = '主机名';
$string['lastruntime'] = '最后运行';
$string['lastupdated'] = '上次更新{$a}。';
$string['nextruntime'] = '下次运行';
$string['pid'] = 'PID';
$string['plugindisabled'] = '插件已关闭';
$string['pluginname'] = '计划任务设置';
$string['privacy:metadata'] = '预定任务配置插件不存储任何个人数据。';
$string['resettasktodefaults'] = '恢复计划任务为默认值';
$string['resettasktodefaults_help'] = '将会放弃任何本地所做的修改，并将此工作恢复到原始设置。';
$string['runagain'] = '再运行一次';
$string['runningtasks'] = '正在运行的任务';
$string['runnow'] = '立即运行';
$string['runnow_confirm'] = '是否确实要立即运行此任务“{$a}”？该任务将在web服务器上运行，可能需要一些时间才能完成。';
$string['runpattern'] = '运行模式';
$string['scheduled'] = '预定的';
$string['scheduledtaskchangesdisabled'] = '在Moodle配置中已经禁止修改计划任务';
$string['scheduledtasks'] = '计划任务';
$string['started'] = '开始';
$string['taskdisabled'] = '计划任务已关闭';
$string['taskfailures'] = '{$a}任务失败';
$string['tasklogs'] = '任务日志';
$string['tasknofailures'] = '没有任务失败';
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
$string['viewlogs'] = '查看{$a}的日志';
