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
 * Strings for component 'tool_task', language 'zh_cn', version '4.4'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = '临时的';
$string['adhocempty'] = '临时任务队列为空';
$string['adhocqueueold'] = '最早的未处理任务是 {$a->age}，大于 {$a->max}';
$string['adhocqueuesize'] = '临时任务队列有{$a}个任务';
$string['adhoctaskid'] = '临时任务ID:{$a}';
$string['adhoctaskrun'] = '临时任务运行已启动';
$string['adhoctasks'] = '临时任务';
$string['adhoctasksdue'] = '到期的临时任务';
$string['adhoctasksfailed'] = '临时任务失败';
$string['adhoctasksfuture'] = '未来的临时任务';
$string['adhoctasksrunning'] = '正在运行的临时任务';
$string['asap'] = '尽快';
$string['backtoadhoctasks'] = '返回临时任务';
$string['backtoscheduledtasks'] = '返回预定的任务';
$string['blocking'] = '封锁';
$string['cannotfindthepathtothecli'] = '找不到PHP CLI可执行文件的路径，因此任务执行中止。请在站点管理/服务器/系统路径中设置“PHP CLI路径”。';
$string['checkadhocqueue'] = '临时任务队列';
$string['checkcronrunning'] = 'Cron运行';
$string['checklongrunningtaskcount'] = '长时间运行的任务：{$a}';
$string['checklongrunningtasks'] = '长时间运行的任务';
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
$string['enablerunnow_desc'] = '允许管理员立即运行单个计划任务，而不是等待它按计划运行。该功能需要在系统路径中设置“PHP CLI 路径”（pathtophp）。该任务在 Web 服务器上运行，因此您可能希望禁用此功能以避免潜在的性能问题。';
$string['faildelay'] = '故障延迟';
$string['failed'] = '失败了';
$string['fromcomponent'] = '来自组件：{$a}';
$string['hostname'] = '主机名';
$string['lastcronstart'] = '自上次cron运行以来的时间：{$a}';
$string['lastruntime'] = '最后运行';
$string['lastupdated'] = '上次更新{$a}。';
$string['nextruntime'] = '下次运行';
$string['noclassname'] = '未指定类名';
$string['notasks'] = '没有任务要运行';
$string['payload'] = '负载';
$string['pid'] = 'PID';
$string['plugindisabled'] = '插件已关闭';
$string['pluginname'] = '计划任务设置';
$string['privacy:metadata'] = '预定任务配置插件不存储任何个人数据。';
$string['resettasktodefaults'] = '恢复计划任务为默认值';
$string['resettasktodefaults_help'] = '将会放弃任何本地所做的修改，并将此工作恢复到原始设置。';
$string['run_adhoctasks'] = '执行临时任务';
$string['runadhoc'] = '现在可以执行临时任务吗？';
$string['runadhoc_confirm'] = '任务将在web服务器上运行，可能需要一些时间才能完成。';
$string['runadhoctask'] = '运行 \'{$a->task}\' 任务ID {$a->taskid}';
$string['runadhoctasks'] = '运行所有 \'{$a}\'任务';
$string['runadhoctasksfailed'] = '运行失败的 \'{$a}\' 任务';
$string['runagain'] = '再运行一次';
$string['runclassname'] = '运行所有';
$string['runclassnamefailedonly'] = '运行全部失败';
$string['runningalltasks'] = '运行所有任务';
$string['runningfailedtasks'] = '运行失败的任务';
$string['runningtasks'] = '正在运行的任务';
$string['runnow'] = '立即运行';
$string['runnow_confirm'] = '是否确实要立即运行此任务“{$a}”？该任务将在web服务器上运行，可能需要一些时间才能完成。';
$string['runpattern'] = '运行模式';
$string['scheduled'] = '预定的';
$string['scheduledtaskchangesdisabled'] = '在Moodle配置中已经禁止修改计划任务';
$string['scheduledtasks'] = '计划任务';
$string['showall'] = '显示所有';
$string['showfailedonly'] = '仅显示失败';
$string['showsummary'] = '显示临时任务摘要';
$string['slowtask'] = '任务运行时间超过{$a}';
$string['started'] = '开始';
$string['taskage'] = '运行时间';
$string['taskdetails'] = '任务运行时间超过 {$a->time} (max {$a->maxtime}): {$a->count}';
$string['taskdisabled'] = '计划任务已关闭';
$string['taskfailures'] = '{$a}任务失败';
$string['taskid'] = '任务 ID';
$string['tasklogs'] = '任务日志';
$string['tasknofailures'] = '没有任务失败';
$string['taskrunningtime'] = '任务已为{$a}运行';
$string['taskscheduleday'] = '日';
$string['taskscheduleday_help'] = '任务计划的 Day of month 字段。该字段使用与 unix cron 相同的格式。一些示例包括：

* <strong>*</strong> 每天
* <strong>*/2</strong> 每 2 天
* <strong>1</strong> 每月第一天
* <strong>1.15</strong> 每月的 1 号和 15 号';
$string['taskscheduledayofweek'] = '星期几';
$string['taskscheduledayofweek_help'] = '任务计划的星期字段。该字段使用与 unix cron 相同的格式。一些示例包括：

* <strong>*</strong> 每天
* <strong>0</strong> 每周日
* <strong>每周六 6</strong> 次
* <strong>1,5</strong> 每周一和周五';
$string['taskschedulehour'] = '时';
$string['taskschedulehour_help'] = '任务计划的 Hour 字段。该字段使用与 unix cron 相同的格式。一些示例包括：

* <strong>*</strong> 每小时
* <strong>*/2</strong> 每 2 小时
* <strong>2-10</strong> 凌晨 2 点至 10 点（含）每小时一班
* <strong>2,6,9</strong> 凌晨 2 点、早上 6 点和上午 9 点';
$string['taskscheduleminute'] = '分';
$string['taskscheduleminute_help'] = '任务计划的 Minute 字段。该字段使用与 unix cron 相同的格式。一些示例包括：

* <strong>*</strong> 每分钟
* <strong>*/5</strong> 每 5 分钟
* <strong>2-10</strong> 整点（含）后 2 点到 10 点之间的每分钟
* <strong>2,6,9</strong> 小时后 2、6 和 9 分钟';
$string['taskschedulemonth'] = '月';
$string['taskschedulemonth_help'] = '任务计划的 Month 字段。该字段使用与 unix cron 相同的格式。一些示例包括：

* <strong>*</strong> 每月
* <strong>*/2</strong> 每两个月
* <strong>每年 1 月 1</strong> 次
* <strong>1,5</strong> 每年 1 月和 5 月';
$string['viewlogs'] = '查看{$a}的日志';
