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
 * Strings for component 'organizer', language 'zh_cn', version '4.5'.
 *
 * @package     organizer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absolutedeadline'] = '报名结束';
$string['absolutedeadline_help'] = '选中此项，在此所设定的时间之后禁用学生可能的操作。';
$string['actionlink_delete'] = '删除';
$string['actionlink_edit'] = '编辑';
$string['actionlink_eval'] = '评分';
$string['actionlink_print'] = '打印';
$string['actions'] = '操作';
$string['actions_help'] = '要采取的操作。';
$string['addappointment'] = '添加预约';
$string['addslots_placesinfo'] = '此操作将创建 {$a->numplaces} 个新名额，使 {$a->numstudents} 学生总共有 {$a->totalplaces} 个名额。';
$string['addslots_placesinfo_group'] = '此操作将创建 {$a->numplaces} 个新名额，使 {$a->numgroups} 组总共有 {$a->totalplaces} 个名额。';
$string['allowedprofilefieldsprint'] = '允许的用户信息字段';
$string['allowedprofilefieldsprint2'] = '用于打印单个活动组织时段允许的用户信息字段';
$string['allowsubmissionsanddescriptionfromdatesummary'] = '自<strong>{$a}</strong>起，可查看活动管理器详细信息和报名表。';
$string['allowsubmissionsfromdate'] = '报名开始';
$string['allowsubmissionsfromdate_help'] = '如果您想在某个时间点后向学生开放此活动管理器，请选中此选项。';
$string['allowsubmissionsfromdatesummary'] = '自 <strong>{$a}</strong>起，此活动管理器接收报名表。';
$string['allowsubmissionstodate'] = '报名结束';
$string['alwaysshowdescription'] = '始终显示描述信息';
$string['alwaysshowdescription_help'] = '如果禁用，上述任务描述将仅在“报名开始”的日期后对学生可见。';
$string['applicant'] = '这是注册该组的人';
$string['appointment_reminder_student:fullmessage'] = '你好{$a->receivername}！

作为课程 {$a->courseid} {$a->coursefullname} 的一部分，您于 {$a->date}   {$a->time} 在 {$a->location} 上预约了 {$a->sendername}。

Moodle 消息系统';
$string['appointment_reminder_student:group:fullmessage'] = '你好{$a->receivername}！

作为课程 {$a->courseid} {$a->coursefullname} 的一部分，您所在的组于 {$a->date}   {$a->time} 在 {$a->location} 上预约了 {$a->sendername}。

Moodle 消息系统';
$string['appointment_reminder_student:group:smallmessage'] = '您所在组于 {$a->date}   {$a->time} 在 {$a->location} 预约了 {$a->sendername}。';
$string['appointment_reminder_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - 组预约提醒';
$string['appointment_reminder_student:smallmessage'] = '您在 {$a->location} 预约了 {$a->sendername}，时间是 {$a->date}  {$a->time}。';
$string['appointment_reminder_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - 预约提醒';
$string['appointment_reminder_teacher:digest:fullmessage'] = '你好{$a->receivername}！

明天你有以下预约：

{$a->digest}

Moodle 消息系统';
$string['appointment_reminder_teacher:digest:smallmessage'] = '您已收到明天的预约摘要。';
$string['appointment_reminder_teacher:digest:subject'] = '预约摘要';
$string['appointment_reminder_teacher:fullmessage'] = '你好{$a->receivername}！

作为课程 {$a->courseid} {$a->coursefullname} 的一部分，您在 {$a->date}   {$a->time}， {$a->location}有一个与学生的预约。

Moodle 消息系统';
$string['appointment_reminder_teacher:group:digest:fullmessage'] = '你好{$a->receivername}！

明天你有以下预约：

{$a->digest}

Moodle 消息系统';
$string['appointment_reminder_teacher:group:digest:smallmessage'] = '您已收到明天的预约摘要。';
$string['appointment_reminder_teacher:group:digest:subject'] = '预约摘要';
$string['appointment_reminder_teacher:smallmessage'] = '您在 {$a->date}    {$a->time} ， {$a->location} 与学生有一个预约。';
$string['appointment_reminder_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - 预约提醒';
$string['appointmentcomments'] = '评论';
$string['appointmentcomments_help'] = '有关预约的其他信息可以在此处添加。';
$string['appointmentdatetime'] = '日期和时间';
$string['appointmentdeleted_notify_student:fullmessage'] = '你好{$a->receivername}！

您在课程 {>$a-courseshortname} 中，{$a->date}  {$a->time} ，{$a->location}的预约已删除。';
$string['appointmentdeleted_notify_student:group:fullmessage'] = '你好{$a->receivername}！

您在课程 {>$a-courseshortname} 中，{$a->date}  {$a->time} ，{$a->location}的预约已删除。';
$string['appointmentdeleted_notify_student:group:smallmessage'] = '您在活动管理器 \'{$a->organizername}\'中，{$a->date}  {$a->time} 在预约已被删除。';
$string['appointmentdeleted_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - 预约已删除';
$string['appointmentdeleted_notify_student:smallmessage'] = '您在活动管理器 \'{$a->organizername}\'中，{$a->date}  {$a->time} 在预约已被删除。';
$string['appointmentdeleted_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - 预约已删除';
$string['assign'] = '指定';
$string['assign_notify_student:fullmessage'] = '你好{$a->receivername}！

作为课程 {$a->courseid} {$a->coursefullname} 的一部分，{$a->sendername} 已为您分配了 {$a->slot_teacher} 在 {$a->date}   {$a->time} 的预约。

教师：{$a->slot_teacher}
位置：{$a->slot_location}
日期：{$a->date}  {$a->time}

Moodle 消息系统';
$string['assign_notify_student:group:fullmessage'] = '你好{$a->receivername}！

作为课程 {$a->courseid} {$a->coursefullname} 的一部分，{$a->time}  {$a->date} 与 {$a->slot_teacher} 的预约已由 {$a->sendername} 分配给您所在的组 {$a->groupname}。

教师：{$a->slot_teacher}
位置：{$a->slot_location}
日期：{$a->date}  {$a->time}

Moodle 消息系统';
$string['assign_notify_student:group:smallmessage'] = '{$a->sendername} 已将 {$a->date}  {$a->time} 与 {$a->slot_teacher} 的预约分配给您所在的组 {$a->groupname}。';
$string['assign_notify_student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - 教师指定的预约';
$string['assign_notify_student:smallmessage'] = '{$a->sendername} 已为您分配了 {$a$a->date}  {$a->time} 与 {->slot_teacher} 的预约。';
$string['assign_notify_student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - 教师指定的预约';
$string['assign_notify_teacher:fullmessage'] = '你好{$a->receivername}！

作为课程 {$a->courseid} {$a->coursefullname} 的一部分，{$a->sendername} 已为您分配了 {$a->date} {$a->time}与{$a->participantname} 的预约。

参与者：{$a->participantname}
位置：{$a->slot_location}
日期：{$a->date}  {$a->time}

Moodle 消息系统';
$string['assign_notify_teacher:group:fullmessage'] = '你好{$a->receivername}！

作为课程 {$a->courseid} {$a->coursefullname} 的一部分，{$a->sendername} 已为您分配了 {$a->date}  {$a->time} 与组 {$a->groupname} 的预约。

组：{$a->groupname}
位置：{$a->slot_location}
日期：{$a->date}  {$a->time}

Moodle 消息系统';
$string['assign_notify_teacher:group:smallmessage'] = '{$a->sendername} 已为您分配了 {$a$a->日期} {$a->time} 与组 {$a->groupname} 的预约。';
$string['assign_notify_teacher:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - 预约已安排';
$string['assign_notify_teacher:smallmessage'] = '{$a->sendername} 已同意你要求的 {$a->date}  {$a->time} 与 {$a->sendername} 的预约';
$string['assign_notify_teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - 已分配预约';
$string['assign_title'] = '分配预约';
$string['assignsuccess'] = '预约时段已成功分配，参与者已收到通知。';
$string['assignsuccessnotsent'] = '预约时段已成功分配，但尚未通知参与者。';
$string['atlocation'] = '在';
$string['attended'] = '参加的';
$string['auth'] = '认证方法';
$string['availability'] = '可用性';
$string['availablefrom'] = '申请可能开始于';
$string['availablefrom_help'] = '设置允许学生报名预约时间段的时间范围。或者，选中“立即开始”以立即启用报名。';
$string['availablegrouplist'] = '可用组';
$string['availableslotsfor'] = '可用时段';
$string['back'] = '退回';
$string['btn_add'] = '添加新活动时段';
$string['btn_assign'] = '分配活动时段';
$string['btn_comment'] = '编辑评论';
$string['btn_delete'] = '移除选中的活动时段';
$string['btn_deleteappointment'] = '删除预约';
$string['btn_deletesingle'] = '移除选择的活动时段';
$string['btn_edit'] = '编辑选择的活动时段';
$string['btn_editsingle'] = '编辑选择的活动时段';
$string['btn_eval'] = '为选择时段活动评分';
$string['btn_eval_short'] = '评分';
$string['btn_evalsingle'] = '为选择时段的活动评分';
$string['btn_print'] = '打印选择的时段活动';
$string['btn_printsingle'] = '打印选择的时段活动';
$string['btn_queue'] = '队列';
$string['btn_reeval'] = '重新评估';
$string['btn_register'] = '报名';
$string['btn_remind'] = '发送提醒';
$string['btn_reregister'] = '重新报名';
$string['btn_save'] = '保存评论';
$string['btn_send'] = '发送';
$string['btn_sendall'] = '向所有没有足够预约的参与者发送提醒：';
$string['btn_start'] = '开始';
$string['btn_unqueue'] = '从队列中删除';
$string['btn_unregister'] = '取消报名';
$string['calendarsettings'] = '日历设置';
$string['can_reregister'] = '你可重新预约其他的活动';
$string['cannot_eval'] = '无法评估，学生有一个';
$string['cfg_dontshowidentity'] = '隐藏身份标识';
$string['cfg_dontshowidentity_desc'] = '在活动预约列表中隐藏参与者的身份标识';
$string['day_0'] = '星期一';
$string['day_1'] = '星期二';
$string['day_2'] = '星期三';
$string['day_3'] = '星期四';
$string['day_4'] = '星期五';
$string['day_5'] = '星期六';
$string['day_6'] = '星期日';
$string['nogroup'] = '不在组里的';
