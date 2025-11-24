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
 * Strings for component 'appointment', language 'zh_cn', version '4.5'.
 *
 * @package     appointment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingappointment'] = '添加约会';
$string['addingappointments'] = '添加约会';
$string['addremoveattendees'] = '添加/删除与会者';
$string['addsession'] = '添加会话';
$string['addtimeframe'] = '添加时间表';
$string['advanced'] = '高级';
$string['allowcancellations'] = '允许取消';
$string['allowcancellations_help'] = '如果选中，会议与会者将能够取消其注册';
$string['allowcancellationsdefault'] = '允许取消默认设置';
$string['allowcancellationsdefault_help'] = '如果选中，则在为此活动创建新会话时，默认设置为允许取消注册';
$string['allowwaitlist'] = '允许等待';
$string['allowwaitlist_help'] = '选中“允许等待列表”后，学员将能够注册预约课程，即使该课程已经满了<br/>
当学员注册一个已满的课程时，他们将收到一封电子邮件，告知他们已被列入该课程的等待名单，并在预订可用时收到通知。';
$string['alreadysignedup'] = '您已注册此约会活动。';
$string['appointment'] = '约会';
$string['appointment:addattendees'] = '将与会者添加到约会会话';
$string['appointment:addinstance'] = '添加实例';
$string['appointment:configurecancellation'] = '在添加/编辑约会活动时，允许配置注册取消。';
$string['appointment:editsessions'] = '添加、编辑、复制和删除约会会话';
$string['appointment:managecustomfields'] = '管理约会会话的自定义字段。';
$string['appointment:overbook'] = '注册未启用等待列表的完整会话。';
$string['appointment:removeattendees'] = '从约会会话中删除与会者';
$string['appointment:signup'] = '注册会话';
$string['appointment:takeattendance'] = '会议签到';
$string['appointment:view'] = '查看约会活动和会话';
$string['appointment:viewattendees'] = '查看考勤列表和与会者';
$string['appointment:viewcancellations'] = '查看取消';
$string['appointmentactivity'] = '约会活动';
$string['appointmentcustomfields'] = '约会自定义字段';
$string['appointmentname'] = '约会名称';
$string['appointments'] = '约会';
$string['appointmentsession'] = '约会会话';
$string['appointmentsessions'] = '约会会话';
$string['appointmentsettings'] = '约会设置';
$string['approvalreqd'] = '需要批准';
$string['approvalreqd_help'] = '勾选“需要批准”后，学员需要获得其管理员的批准才能参加预约会议。';
$string['approve'] = '批准';
$string['attendance'] = '出席';
$string['attendanceinstructions'] = '选择参加会话的用户：';
$string['attendedsession'] = '出席的会议';
$string['attendees'] = '与会者';
$string['attendeestablesummary'] = '计划或已经参加本次会议的人员。';
$string['availableseats'] = '{$a}座位可用';
$string['book'] = '预订';
$string['bookedvscapacity'] = '预订/容量';
$string['bookingcancelled'] = '您的预订已取消。';
$string['bookingcompleted'] = '您的预订已完成。';
$string['bookingfull'] = '满的';
$string['bookingopen'] = '开放的';
$string['break'] = '休息时间';
$string['break_help'] = '此设置定义会话之间的休息时间。设置为0表示不需要中断休息。';
$string['calendareventdescriptionbooking'] = '您已预订此<a href="{$a}">约会会话</a>。';
$string['calendareventdescriptionsession'] = '你已经创建此<a href="{$a}">约会会话</a>。';
$string['calendaroptions'] = '日历选项';
$string['cancel'] = '取消';
$string['cancelbooking'] = '取消预订';
$string['cancellationinstrmngr'] = '# 管理员须知';
$string['cancellationinstrmngr_help'] = '选中**向管理员发送通知**后，**向管理员发送通知**字段中的文本将发送给学员的管理员，告知他们已取消预约。';
$string['cancellationmessage'] = '取消消息';
$string['cancellationmessage_help'] = '每当用户取消会话预订时，都会发送此消息。';
$string['cancellations'] = '取消';
$string['cancellationstablesummary'] = '已取消会话注册的人员列表。';
$string['cancelreason'] = '取消原因';
$string['cannotapproveatcapacity'] = '由于此会话已满，您不能再批准任何与会者。';
$string['cannotsignupsessioninprogress'] = '您无法注册，此会话正在进行';
$string['cannotsignupsessionover'] = '您无法注册，此会话已结束。';
$string['capacity'] = '容量';
$string['capacity_help'] = '**容量**是一个会话中可用的座位数。

当预约会话达到容量时，会话详细信息不会显示在课程页面上。“查看所有课程”页面上的详细信息将显示为灰色，学习者无法注册课程。
&nbsp；';
$string['closed'] = '关闭的';
$string['completionattended'] = '预约并参加';
$string['completionbooked'] = '学员必须预约才能完成此活动';
$string['completionbooked_help'] = '如果启用，如果学习者状态为“已预订”、“已全部参加”或“部分参加”，则该活动将被视为已完成。如果学员已取消、已列入等待名单，或他们的出席被标记为“未出席”，则活动将不会被视为已完成。';
$string['completiondetail:booked'] = '预约';
$string['confirmationinstrmngr'] = '# 通知管理员';
$string['confirmationinstrmngr_help'] = '选中“向管理员发送通知”后，“管理员通知”字段中的文本将发送给管理员，通知其人员已注册预约会议。';
$string['confirmationmessage'] = '确认消息';
$string['confirmationmessage_help'] = '每当用户注册会话时，就会发送此消息。';
$string['confirmcancelbooking'] = '确认取消';
$string['courseresetsessions'] = '删除所有会话';
$string['courseresetsignups'] = '删除所有会话注册';
$string['crontask'] = '预约维护作业';
$string['currentstatus'] = '定制状态';
$string['customisednotifications'] = '定制通知';
$string['date'] = '日期';
$string['decidelater'] = '以后再决定';
$string['decline'] = '减少';
$string['delete'] = '删除';
$string['deleteappointmentconfirm'] = '是否完全确定要删除此约会及其所有预订？';
$string['deletesession'] = '删除会话';
$string['deletetimeframe'] = '删除时间段';
$string['details'] = '详细信息';
$string['duplicate'] = '复制';
$string['duplicateappointment'] = '复制约会';
$string['editingappointment'] = '编辑约会';
$string['email:message'] = '消息';
$string['email:subject'] = '订阅';
$string['emailmanager'] = '向管理员发送通知';
$string['emailmanagercancellation'] = '# 向管理员发送通知';
$string['emailmanagercancellation_help'] = '选中“向管理员发送通知”后，将向学员管理员发送一封电子邮件，告知他们预约已取消。';
$string['emailmanagerconfirmation'] = '# 向管理员发送通知';
$string['emailmanagerconfirmation_help'] = '选中“向管理员发送通知”后，当学员注册预约课程时，将向学员的管理员发送确认电子邮件。';
$string['emailmanagerreminder'] = '# 向管理员发送通知';
$string['emailmanagerreminder_help'] = '选中“向管理员发送通知”后，将在预约会议开始日期前几天向学员管理员发送提醒消息。';
$string['empty'] = '为空';
$string['endtime'] = '结束时间';
$string['entitiysession'] = '会话';
$string['error:cancellationsnotallowed'] = '不允许您取消此注册。';
$string['error:canttakeattendanceforunstartedsession'] = '无法参加尚未开始的会话。';
$string['error:eventoccurred'] = '无法取消已发生的事件。';
$string['error:invaliduserid'] = '无效用户ID';
$string['error:manageremailaddressmissing'] = '您当前未分配给系统中的管理员。请联系网站管理员。';
$string['error:sessionsplitexceeds'] = '会话拆分时间超过会话持续时间。';
$string['error:sessionstartafterend'] = '会话开始时间晚于会话结束时间。';
$string['errorcannoteditsessions'] = '您没有编辑会话的权限';
$string['errorcannotviewappointment'] = '您没有查看此约会的权限';
$string['errorcannotviewattendees'] = '您没有查看与会者的权限';
$string['eventaddsession'] = '已添加会话';
$string['eventapproverequests'] = '会话批准请求';
$string['eventattendancetaken'] = '参加会议人数';
$string['eventattendeesviewed'] = '查看会议与会者';
$string['eventcancelbooking'] = '会话取消预订';
$string['eventcourseappointmentviewed'] = '查看课程预约实例';
$string['eventcoursemoduleviewed'] = '已查看约会模块实例';
$string['eventdeletesession'] = '已删除会话';
$string['eventsignup'] = '会话注册';
$string['eventupdatesession'] = '已更新会话';
$string['full'] = '日期已满';
$string['fullfilter'] = '已满';
$string['fullybooked'] = '已订满';
$string['goback'] = '返回';
$string['icalendarheading'] = 'iCalendar附件';
$string['joinwaitlist'] = '加入等待列表';
$string['location'] = '位置';
$string['managecustomfields'] = '管理定制字段';
$string['modulename'] = '预约登记';
$string['modulename_help'] = '预约是教师跟踪个人活动的活动模块。

它使教师能够为一个或多个面对面或基于课堂的课程设置预订系统，以便学生注册。

此活动模块适用于1对1课程或多课程活动，如研讨会。

会话可以在单个约会活动中具有多个日期和时间，并且可以使用配置中指定的时间段批量创建会话。

该活动允许考勤跟踪。';
$string['modulename_link'] = 'Appointments';
$string['modulenameplural'] = '预约';
$string['multipleappointments'] = '多个预约';
$string['noactionableunapprovedrequests'] = '没有可操作的未批准请求';
$string['noremindersneedtobesent'] = '无需发送提醒。';
$string['nosignedupusers'] = '没有用户注册此会话。';
$string['notset'] = '没有设置';
$string['notsignedup'] = '您尚未注册此会话。';
$string['partiallyfull'] = '部分满';
$string['placeholder:alldates'] = '[所有日期]';
$string['placeholder:appointmentname'] = '[预约名称]';
$string['placeholder:attendeeslink'] = '[与会者链接]';
$string['placeholder:details'] = '[详情]';
$string['placeholder:finishtime'] = '[完成时间]';
$string['placeholder:firstname'] = '[名]';
$string['placeholder:lastname'] = '[姓]';
$string['placeholder:reminderperiod'] = '[提醒周期]';
$string['placeholder:sessiondate'] = '[会议日期]';
$string['placeholder:starttime'] = '[开始时间]';
$string['placeholdersdesc'] = '占位符';
$string['placeholdersdesc_help'] = '占位符允许你添加一个动态的内容，例如[firstname]占位符将被替换为用户的名字，在发送给用户的通知中。';
$string['pluginadministration'] = '预约管理';
$string['pluginname'] = '预约';
$string['potentialattendees'] = '潜在与会者';
$string['privacy:metadata:appointment_signups'] = '用户注册约会会话';
$string['privacy:metadata:appointment_signups:id'] = '注册的id';
$string['privacy:metadata:appointment_signups:mailedreminder'] = '上次发送提醒的时间';
$string['privacy:metadata:appointment_signups:sessionid'] = '会话id';
$string['privacy:metadata:appointment_signups_status'] = '注册会话的用户的状态';
$string['privacy:metadata:appointment_signups_status:grade'] = '指定参加课程的年级';
$string['privacy:metadata:appointment_signups_status:note'] = '存储取消会话的原因';
$string['privacy:metadata:appointment_signups_status:signupid'] = '注册的id';
$string['privacy:metadata:appointment_signups_status:statuscode'] = '注册状态，如已取消，拒绝，全员参与';
$string['privacy:metadata:appointment_signups_status:timecreated'] = '创建注册的时间。';
$string['privacy:metadata:userid'] = '访问约会活动的用户的ID';
$string['remindermessage'] = '提醒消息';
$string['remindermessage_help'] = '此消息在会话开始日期前几天发出。';
$string['reminderperiod'] = '消息发送前天';
$string['reminderperiod_help'] = '提醒消息将在会话开始前这么多天发送。';
$string['requestmessage'] = '请求消息';
$string['requestmessage_help'] = '启用**需要审批**时，**请求消息**部分可用。

**请求消息**部分显示发送给学员及其管理员的关于学员参加预约会议的批准流程的通知。

**主题：**是发送给管理员和学员的请求批准电子邮件上显示的主题行。

**消息：**是发送给学员的电子邮件文本，通知他们参加预约会议的请求已发送给他们的管理员批准。

**通知管理员：**是发送给学员管理员的电子邮件文本，请求批准参加预约会议。';
$string['requeststablesummary'] = '请求参加此会议的人员。';
$string['room'] = '房间';
$string['saveattendance'] = '保存考勤';
$string['search:activity'] = '预约活动';
$string['seatsavailable'] = '可用座位';
$string['seatsbooked'] = '预订的座位';
$string['sessionavailability'] = '会话可用性';
$string['sessiondatetime'] = '会话日期/时间';
$string['sessiondescription'] = '描述';
$string['sessionfinished'] = '完成';
$string['sessionfinishtime'] = '会话完成时间';
$string['sessioninprogress'] = '会话进行中';
$string['sessionisfull'] = '此会话现在已满。您需要选择其他时间或与讲师协商。';
$string['sessionnotstarted'] = '未开始';
$string['sessionrequiresmanagerapproval'] = '此会话需要管理员批准才能预订。';
$string['sessions'] = '会话';
$string['sessionsdetailstablesummary'] = '关于当前会话的完整描述';
$string['sessionstartdate'] = '会话开始日期';
$string['sessionstartdateandtime'] = '{$a->startdate}, {$a->starttime} - {$a->endtime} (time zone: {$a->timezone})';
$string['sessionstartdateandtimewithouttimezone'] = '{$a->startdate}, {$a->starttime} - {$a->endtime}';
$string['sessionstartfinishdateandtime'] = '{$a->startdate} - {$a->enddate}, {$a->starttime} - {$a->endtime} (time zone: {$a->timezone})';
$string['sessionstartfinishdateandtimewithouttimezone'] = '{$a->startdate} - {$a->enddate}, {$a->starttime} - {$a->endtime}';
$string['sessionstarttime'] = '会话开始时间';
$string['setting:defaultcancellationmessagedefault'] = '兹通知您以下预约已取消：<br><br>
***预订已取消***<br><br>
参与者：[lastname] [firstname]<br>
会议： [appointmentname]<br><br>
日期：<br>
[alldates]<br><br>
位置：[session:location]<br>
地点： [session:venue]<br>
会议室： [session:room]';
$string['setting:defaultcancellationsubjectdefault'] = '预约取消';
$string['setting:defaultconfirmationmessagedefault'] = '这是为了确认您现在已预订以下约会：<br><br>
参与者：[lastname] [firstname]<br>
会议： [appointmentname]<br><br>
日期：<br>
[alldates]<br><br>
位置：[session:location]<br>
地点： [session:venue]<br>
会议室： [session:room]<br><br>
***请在会议开始前十分钟到达***<br><br>
重新安排或取消预订<br>
要重新安排您的预订，您需要取消此预订，然后重新预订新的会话<br>
要取消预订，请返回“会议”页面，然后选择“取消”<br><br>
[details]<br><br>
您将在此约会前的[reminderperiod]个工作日收到提醒<br><br>';
$string['setting:defaultconfirmationsubjectdefault'] = '会议确认： [appointmentname], [starttime]-[finishtime], [sessiondate]';
$string['setting:defaultremindermessagedefault'] = '提醒您已预约以下会议：<br><br>
参与者：[lastname] [firstname]<br>
会议： [appointmentname]<br><br>
日期：<br>
[alldates]<br><br>
位置：[session:location]<br>
地点： [session:venue]<br>
会议室： [session:room]<br><br>
***请在约会开始前十分钟到达***<br><br>
重新安排或取消预订<br>
要重新安排您的预订，您需要取消此预订，然后重新预订新的会话<br>
要取消预订，请返回“会议”页面，然后选择“取消”<br><br>
[details]';
$string['setting:defaultremindersubjectdefault'] = '预约提醒： [appointmentname], [starttime]-[finishtime], [sessiondate]';
$string['setting:defaultrequestmessagedefault'] = '您预订以下会议的请求已发送给您的管理员：

会议： [appointmentname]<br><br>
日期：<br>
[alldates]<br><br>

位置：[session:location]<br>
地点： [session:venue]<br>
会议室： [session:room]<br><br>';
$string['setting:defaultrequestsubjectdefault'] = '预约请求： [appointmentname], [starttime]-[finishtime]';
$string['setting:defaultupdatemessagedefault'] = '这是为了通知您，您预订或加入等待名单的会议已更改：<br><br>
参与者：[lastname] [firstname]<br>
会议： [appointmentname]<br><br>
日期：<br>
[alldates]<br><br>
位置：[session:location]<br>
地点： [session:venue]<br>
会议室： [session:room]<br><br>
***请注意，这不是预约确认***<br><br>
要取消您的预订或列入等待名单，请返回会议页面，然后选择“取消”<br><br>
[details]<br><br>';
$string['setting:defaultupdatesubjectdefault'] = '预约更新： [appointmentname], [starttime]-[finishtime], [sessiondate]';
$string['setting:defaultwaitlistedmessagedefault'] = '这是为了通知您已被添加到等待列表中：<br><br>
会议： [appointmentname]<br><br>
位置：[session:location]
参与者：[lastname] [firstname]<br>
***请注意，这不是预约确认***<br><br>
通过等待列表，您已经注册了对此会议的兴趣，并将在会话可用时直接与您联系<br><br>
若要从此等待列表中删除您自己，请返回此会议并单击“取消”。请注意，没有等待名单删除确认电子邮件。';
$string['setting:defaultwaitlistedsubjectdefault'] = '[appointmentname]的等待列表建议';
$string['setting:oneemailperday'] = '在多天的活动中，每天发送单独的电子邮件';
$string['setting:oneemailperday_caption'] = '每天单独发送电子邮件';
$string['settings'] = '设置';
$string['shortname'] = '# 简称';
$string['shortname_help'] = '**简称**是启用**在日历上显示**时，培训日历上显示的会话描述。';
$string['showoncalendar'] = '日历显示设置';
$string['showoncalendar_help'] = '选择**站点**后，约会活动会话将作为全局事件显示在站点日历上。所有站点用户都可以查看这些会话。

选择**课程**后，所有预约活动会话都将显示在课程日历上，并作为网站级日历上的课程事件显示，所有注册课程的用户都可以看到。

选择**无**时，如果已选择**在用户日历上显示**选项，则约会活动会话将仅在已确认的与会者日历上显示为用户事件。';
$string['sign-ups'] = '注册';
$string['signupforthissession'] = '注册此预约会话';
$string['split'] = '自动拆分';
$string['split_help'] = '此设置定义在时间范围内创建的每个会话的持续时间。将其设置为0将禁用该选项。';
$string['status'] = '状态';
$string['status_approved'] = '已批准';
$string['status_booked'] = '已预订';
$string['status_declined'] = '已拒绝';
$string['status_fully_attended'] = '完整的已拒绝';
$string['status_no_show'] = '不显示';
$string['status_partially_attended'] = '部分出席';
$string['status_requested'] = '已请求';
$string['status_user_cancelled'] = '用户已取消';
$string['status_waitlisted'] = '等待列表';
$string['suppressemail'] = '抑制电子邮件通知';
$string['suppressemail_help'] = '如果要在预约会话中以静默方式添加/删除用户，请使用此选项。切换此选项时，通常的电子邮件
不会向所选用户发送确认。';
$string['takeattendance'] = '参加会议';
$string['thirdpartyemailaddress'] = '第三方电子邮件地址';
$string['thirdpartyemailaddress_help'] = '**第三方电子邮件地址）**是一个可选字段，用于指定第三方（如外部讲师）的电子邮件地址，当用户注册会话时，第三方（如外部讲师）将收到确认消息。

输入**多个电子邮件地址**时，请用逗号分隔每个地址。例如：bob@example.com;joe@example.com';
$string['thirdpartywaitlist'] = '通知第三方等待列表会话';
$string['thirdpartywaitlist_help'] = '选择**通知第三方有关等待列表的课程**后，当学员注册等待列表的课程时，将通知第三方。什么时候

**通知第三方等待列表会话**未启用只有当用户注册（或取消）预定会话时，才会通知第三方。';
$string['timecancelled'] = '已取消时间';
$string['timeframes'] = '时间段';
$string['timerequested'] = '已请求时间';
$string['timesignedup'] = '时间注册';
$string['timestart'] = '开始时间';
$string['unapprovedrequests'] = '未批准的请求';
$string['unknowndate'] = '(未知日期)';
$string['unknowntime'] = '(未知时间)';
$string['updatemessage'] = '更新消息';
$string['updatemessage_help'] = '每当会话更改时，都会发送此消息。';
$string['usercalentry'] = '在用户日历上显示条目';
$string['usercalentry_help'] = '激活时，此设置会将用户事件条目添加到预约会话与会者的日历中。如果禁用此选项，则可防止会话与会者的日历中出现重复事件，您可以将日历显示设置为“课程”或“站点”。';
$string['usercancelledon'] = '用户在{$a}上取消';
$string['usernotsignedup'] = '状态:没有注册';
$string['usersignedup'] = '状态：已注册';
$string['usersignedupon'] = '用户注册{$a}';
$string['userwillbewaitlisted'] = '此会议预约当前已满。单击“注册”按钮，您将被置于会话的等待列表中。';
$string['venue'] = '地点';
$string['waitlistedat'] = '<strong>候补名单:</strong> {$a}';
$string['waitlistedmessage'] = '等待列表消息';
$string['waitlistedmessage_help'] = '每当用户注册等待列表会话时，就会发送此消息。';
