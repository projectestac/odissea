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
 * Strings for component 'attendance', language 'zh_cn', version '4.1'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'A';
$string['Afull'] = '旷课';
$string['Eacronym'] = 'E';
$string['Efull'] = '请假';
$string['Lacronym'] = 'L';
$string['Lfull'] = '迟到';
$string['Pacronym'] = 'P';
$string['Pfull'] = '准时';
$string['absenteereport'] = '考勤报告';
$string['acronym'] = '首字母缩写';
$string['add'] = '增加';
$string['addedrecip'] = '添加了 {$a} 个新收件人';
$string['addedrecips'] = '添加了 {$a} 个新收件人';
$string['addmultiplesessions'] = '多个上课时间';
$string['addsession'] = '增加上课时间';
$string['adduser'] = '增加用户';
$string['addwarning'] = '增加警告';
$string['all'] = '全部';
$string['allcourses'] = '所有课程';
$string['allowupdatestatus'] = '允许学生更新自己的出勤状态';
$string['allowupdatestatus_desc'] = '如果选中此项，则学生将能够在自行报到后更新其出勤状态。';
$string['allowupdatestatus_help'] = '如果选中此项，则学生将能够在自行报告会话后更新其会话的出勤情况。';
$string['allpast'] = '过去全部';
$string['allsessions'] = '所有上课时间';
$string['allsessionstotals'] = '选定的上课时间的总计';
$string['attendance:addinstance'] = '新增一项考勤活动';
$string['attendance:canbelisted'] = '出现在花名册中';
$string['attendance:changeattendances'] = '修改考勤';
$string['attendance:changepreferences'] = '更改偏好设置';
$string['attendance:export'] = '导出报告';
$string['attendance:import'] = '从文件导入考勤时段 （csv）';
$string['attendance:manageattendances'] = '管理考勤';
$string['attendance:managetemporaryusers'] = '管理临时学生';
$string['attendance:manualautomark'] = '允许手动管理自动报到过程';
$string['attendance:takeattendances'] = '记录考勤';
$string['attendance:view'] = '查看考勤';
$string['attendance:viewreports'] = '查看报告';
$string['attendance:viewsummaryreports'] = '查看课程摘要报告';
$string['attendance:warningemails'] = '可以订阅旷课用户的电子邮件';
$string['attendance_already_submitted'] = '你的考勤已被设置好了。';
$string['attendance_no_status'] = '没有可用的有效状态-您可能太晚了，无法记录出勤情况。';
$string['attendancedata'] = '考勤数据';
$string['attendancefile'] = '考勤文件（csv格式）';
$string['attendancefile_help'] = '该文件必须是一个CSV文件，带有标题行和用于识别用户的字段，以及记录的出勤时间，例如（电子邮件，扫描时间）或（用户名，时间）';
$string['attendancegrade'] = '考勤成绩';
$string['attendancenotset'] = '你必须设置你的考勤';
$string['attendancenotstarted'] = '课程还未开始考勤';
$string['attendancepercent'] = '考勤比率';
$string['attendancereport'] = '出席';
$string['attendanceslogged'] = '考勤人数记录';
$string['attendancestaken'] = '考勤人数';
$string['attendancesuccess'] = '已成功记录考勤状况';
$string['attendanceupdated'] = '考勤状况已更新';
$string['attendanceuserreport'] = '出勤报表';
$string['attforblockdirstillexists'] = '旧的mod/attforblock目录 － 仍然出现 －您必须在服务器中删除此目录后才可以进行更新操作。';
$string['attrecords'] = '考勤记录';
$string['autoassignstatus'] = '自动选择现有的最高状态';
$string['autoassignstatus_help'] = '如果选中此选项，学生将自动获得最高可用分数。';
$string['automark'] = '自动记分';
$string['automark_help'] = '允许自动完成打分。
如果选择“是”，系统将会自动根据学生第一次访问该课程的情况进行打分。
如果选择“在课时结束时设为未打分”，所有未签到的学生将被设置为未打分的状态。';
$string['automarkall'] = '是的';
$string['automarkclose'] = '在课时快结束时设为未记分。';
$string['automarkingcomplete'] = '自动签到完成';
$string['automarkingnotavailableyet'] = '本次考勤使用了在时段结束时自动签到，但时段尚未结束。';
$string['automarkingnotenabled'] = '本次考勤时段没有开户自动签到';
$string['automarktask'] = '检查需要自动签到的考勤时段';
$string['automarkuseempty'] = '自动签到的可用性处理';
$string['automarkuseempty_desc'] = '如果勾选，则在自动签到期间将允许具有空/未设置“可用于”设置的状态项';
$string['autorecorded'] = '系统已自动记录';
$string['availability'] = '自行签到可用性';
$string['availability_help'] = '限制此状态的可用性。<br> 如果选择了“受限”选项，则提供时段开始后此状态可用的分钟数。这适用于学生标记自己的出勤情况。';
$string['availabilityalways'] = '始终';
$string['availabilitylimitedtime'] = '限制时间';
$string['availabilityno'] = '否';
$string['availablebeforesession'] = '可签到在时段开始前';
$string['availablebeforesession_help'] = '当学生标记自己的出勤状态时，允许在时段么开始前选择此状态。';
$string['averageattendance'] = '平均出勤';
$string['averageattendancegraded'] = '平均出勤';
$string['backtoparticipants'] = '返回到参与人列表';
$string['below'] = '低于 {$a}%';
$string['calclose'] = '关闭';
$string['calendarevent'] = '为上课时间创建日历事件';
$string['calendarevent_help'] = '如果允许，此时段会生成一个日历事件。
如果禁用，此时段相关的日历事件都会被删除。';
$string['caleventcreated'] = '成功创建课程的日程表事件';
$string['caleventdeleted'] = '成功删除';
$string['calmonths'] = '一月，二月，三月，四月，五月，六月，七月，八月，九月，十月，十一月，十二月';
$string['calshow'] = '选择日期';
$string['calweekdays'] = '日，一，二，三，四，五，六';
$string['cannottakeforgroup'] = '你不能参加"{$a}"组课程';
$string['cannottakethisgroup'] = '你并不是这个时段相关的课程的成员，你签到信息不会被记录下来。';
$string['cantaddstatus'] = '添加新状态时，必须设置首字母缩略词和描述。';
$string['canthidestatus'] = '您无法隐藏此状态，因为它已在此考勤时段中使用';
$string['categoryreport'] = '课程分类报表';
$string['changeattendance'] = '修改考勤';
$string['changeduration'] = '修改持续时间';
$string['changesession'] = '更改上课时间';
$string['checkweekdays'] = '在选定的上课日期范围内选择工作日。';
$string['closed'] = '此次时段当前不可用于自主签到';
$string['column'] = '列';
$string['columnmap'] = '列映射';
$string['columnmap_help'] = '对于显示的每个字段，请在 csv 文件中选择相应的列。';
$string['columns'] = '列';
$string['commonsession'] = '所有学生';
$string['commonsessions'] = '所有学生';
$string['confirm'] = '确认';
$string['confirmcolumnmappings'] = '确认列映射';
$string['confirmdeletehiddensessions'] = '你确定要删除安排在此课程开始日期({$a->date})之前的 {$a->count}个课时吗？';
$string['confirmdeleteuser'] = '你确定要删除用户 \'{$a->fullname}\' ({$a->email}) 吗？<br/>他的全部考勤记录将被永久删除掉。';
$string['copyfrom'] = '复制考勤数据';
$string['countofselected'] = '选择的个数';
$string['course'] = '课程';
$string['coursemessage'] = '发消息给课程用户';
$string['courseshortname'] = '课程简称';
$string['coursesummary'] = '课程汇总报表';
$string['createmultiplesessions'] = '建立多个上课时间';
$string['createmultiplesessions_help'] = '您可使用此项功能来一步建立多个上课时间。
该多个上课时间开始日期依据基础课时的日期，并且持续到“上课结束日期”。

* <strong>上课日</strong>: 选择上课日(例如星期二/星期三/星期五等等)；
* <strong>频率</strong>: 在此设定频率。如每周上课则选1，隔周上课则选2，每三周一次课则选3，等等；
* <strong>上课结束日期</strong>: 选择上课结束日期 (您想点名的最后一天)。';
$string['createonesession'] = '为此课程新建一个上课时间';
$string['csvdelimiter'] = 'CSV分割符';
$string['currentlyselectedusers'] = '当前选中的用户';
$string['customexportfields'] = '导出自定义用户属性字段';
$string['customexportfields_help'] = '导出报表里包括额外的用户自定义字段';
$string['customfields'] = '自定义时段字段';
$string['date'] = '日期';
$string['days'] = '日';
$string['defaultdisplaymode'] = '默认显示模式';
$string['defaults'] = '默认';
$string['defaultsessionsettings'] = '默认时段设置';
$string['defaultsessionsettings_help'] = '这些设置定义了所有新时段的默认值';
$string['defaultsettings'] = '默认考勤设置';
$string['defaultsettings_help'] = '这些设置定义了所有新时段的默认值';
$string['defaultstatus'] = '默认状态集';
$string['defaultsubnet'] = '默认网络地址';
$string['defaultsubnet_help'] = '通过指定以逗号分隔的部分或完整 IP 地址列表，可以将出勤记录限制为特定子网。这是创建新时段时使用的默认值。';
$string['defaultview'] = '登录时的默认视图';
$string['defaultview_desc'] = '这是教师首次登录时显示的默认视图。';
$string['defaultwarnings'] = '默认警告设置';
$string['defaultwarningsettings'] = '默认警告设置';
$string['defaultwarningsettings_help'] = '这些设置定义所有新警告的默认值';
$string['delete'] = '删除';
$string['deletecheckfull'] = '您是否绝对确定要完全删除 {$a}，包括所有用户数据？';
$string['deletedgroup'] = '有关此时间段的组已被删除';
$string['deletehiddensessions'] = '删除所有隐藏课时';
$string['deletelogs'] = '删除出席数据';
$string['deleteselected'] = '删除所选';
$string['deletesession'] = '删除上课时间';
$string['deletesessions'] = '删除所有上课时间';
$string['deleteuser'] = '删除用户';
$string['deletewarningconfirm'] = '是否确实要删除此警告？';
$string['deletingsession'] = '删除此课程的上课时间';
$string['deletingstatus'] = '删除此课程的状况';
$string['description'] = '描述';
$string['display'] = '显示';
$string['displaymode'] = '显示模式';
$string['donotusepaging'] = '不使用分页';
$string['downloadexcel'] = 'Excel表格格式下载';
$string['downloadooo'] = 'OpenOffice格式下载';
$string['downloadtext'] = '文本格式下载';
$string['duration'] = '持续时间';
$string['editsession'] = '编辑上课时间';
$string['edituser'] = '编辑用户';
$string['emailcontent'] = '邮件内容';
$string['emailcontent_default'] = '%userfirstname%, 你好。

您在 %coursename% %attendancename% 中的出勤率已降至 %warningpercent% 以下，目前为 %percent% 、

为了充分利用本课程，建议您应该提高出勤率，如果您需要任何进一步的支持，请与我们联系。';
$string['emailcontent_help'] = '当给学生发送提醒信息的时候，下面的字段可在邮件内容中：
<ul>
<li>%coursename%</li>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%userid%</li>
<li>%warningpercent%</li>
<li>%attendancename%</li>
<li>%cmid%</li>
<li>%numtakensessions%</li>
<li>%points%</li>
<li>%maxpoints%</li>
<li>%percent%</li>
</ul>';
$string['emailsubject'] = '邮件主题';
$string['emailsubject_default'] = '出勤提醒';
$string['emailsubject_help'] = '给学生发送提醒时，邮件主题设置为这个字段。';
$string['emailuser'] = '邮件用户';
$string['emailuser_help'] = '如果选中，将会给学生发送提醒信息。';
$string['emptyacronym'] = '缩写不允许留空，状况记录未更新';
$string['emptydescription'] = '描述不允许留空，状况记录未更新';
$string['enablecalendar'] = '生成日历事件';
$string['enablecalendar_desc'] = '如果启用，将为每个考勤时段创建一个日历事件。更改此设置后，您应该运行 reset calendar report。';
$string['enablewarnings'] = '允许提醒';
$string['enablewarnings_desc'] = '这允许为考勤定义警告集，并在出勤率低于配置的阈值时向用户发送电子邮件通知。<br/><strong>警告：这是一项新功能，尚未经过广泛测试。请自担风险使用，如果您发现它效果很好，请在 moodle论坛中提供反馈。</strong>';
$string['encoding'] = '编码';
$string['encoding_help'] = '这是指学生 ID 卡上使用的条形码编码类型。典型的条形码编码方案类型包括 Code-39、Code-128 和 UPC-A。';
$string['endofperiod'] = '时段的结束点';
$string['endtime'] = '下课时间';
$string['enrolmentend'] = '用户注册结束{$a}';
$string['enrolmentstart'] = '用户注册开始{$a}';
$string['enrolmentsuspended'] = '注册暂停';
$string['enterpassword'] = '输入密码';
$string['error:coursehasnoattendance'] = '此课程 {$a} 没有考勤时段。';
$string['error:coursenotfound'] = '找不到课程 {$a}';
$string['error:qrcode'] = '要使用二维码扫描，必须允许学生设置自己的考勤状态。忽略。';
$string['error:sessioncourseinvalid'] = '课程不适用！忽略。';
$string['error:sessiondateinvalid'] = '时段日期不合理！忽略。';
$string['error:sessionendinvalid'] = '时段结束日期不合理！忽略。';
$string['error:sessionstartinvalid'] = '时段开始日期不合理！忽略。';
$string['error:statusnotfound'] = '用户： {$a->extuser} 有一个状态值找不到： {$a->status}';
$string['error:timenotreadable'] = '用户： {$a->extuser} 有一个扫描时间不能转换为短时间： {$a->scantime}';
$string['error:userduplicate'] = 'User {$a} was found twice in the import. please only include one record per user.';
$string['error:usernotfound'] = '设置给用户 {$a->extuser}的属性字段 {$a->userfield} 在本课程内找不到';
$string['errorgroupsnotselected'] = '选择出一个或多个组';
$string['errorinaddingsession'] = '增加上课时间有误';
$string['erroringeneratingsessions'] = '产生上课时间有误';
$string['eventdurationupdated'] = '上课时间的持续时间已更新';
$string['eventreportviewed'] = '考勤报告已查看';
$string['eventscreated'] = '日历事件已生成';
$string['eventsdeleted'] = '日历事件已删除';
$string['eventsessionadded'] = '上课时间已添加';
$string['eventsessiondeleted'] = '上课时间已删除';
$string['eventsessionipshared'] = '自主签到IP冲突';
$string['eventsessionsimported'] = '时段已导入';
$string['eventsessionupdated'] = '上课时间已更新';
$string['eventstatusadded'] = '已新增状况';
$string['eventstatusupdated'] = '已更新状况';
$string['eventstudentattendancesessionsupdated'] = '时段报告已更新';
$string['eventstudentattendancesessionsviewed'] = '时段报告已查看';
$string['eventtaken'] = '已点名';
$string['eventtakenbystudent'] = '由学生点名';
$string['export'] = '导出';
$string['extrarestrictions'] = '额外的约束';
$string['formattexttype'] = '格式';
$string['from'] = '从：';
$string['gradebookexplanation'] = '成绩单上的分数';
$string['gradebookexplanation_help'] = '考勤模块表示您至今日的考勤成绩，依您所获得的点数及您理当获得的点数决定。此成绩不含以后的上课时间。成绩单上您的出席成绩则是依您考勤（包含以后上课时间）及整个课程您可能获得的点数的百分比计算。因此，出现在考勤模块及成绩单上的考勤成绩可能点数不同，但百分比是相同的。

例如，您已由10点中获得8点（80%出席率）而整个课程的考勤值是50点，则考勤模块会显示8/10而成绩单则显示40/50。您虽未取得40点但是40等于您目前考勤率即80%。您在考勤模块取得的点数绝不会变少，因为它只算到目前的考勤日期。但是您成绩单上的点数基于您未来的考勤有可能增减，因为它是计算整个课程的。';
$string['graded'] = '成绩';
$string['gridcolumns'] = '网格列';
$string['group'] = '组';
$string['groups'] = '组';
$string['groupsession'] = '学生所在的组';
$string['groupsessionsby'] = '时段分组条件';
$string['hiddensessions'] = '隐藏课时';
$string['hiddensessions_help'] = '如果课时早于课程开始日期，课时则会看不见。

您可以利用此功能来隐藏早先的课时，而不是删除它们。请记住只有看得见的课时才会出现在成绩册中。';
$string['hiddensessionsdeleted'] = '所有隐藏课时已删除';
$string['hideextrauserdetails'] = '隐藏额外的用户信息';
$string['hidensessiondetails'] = '隐藏上课时间细节';
$string['identifyby'] = '识别学生用';
$string['import'] = '导入';
$string['importfile'] = '导入文件';
$string['importsessions'] = '导入时段';
$string['importstatus'] = '状态字段';
$string['importstatus_help'] = '导入中允许的状态值，比如 P, L, 或者 A';
$string['includeabsentee'] = '在计算旷课报告的时候包含本课时';
$string['includeabsentee_help'] = '如果勾选，此上课时间将被包含在旷课报告进行计算。';
$string['includeall'] = '选择全部上课时间';
$string['includedescription'] = '包括上课时间的描述';
$string['includenottaken'] = '包含未点名的上课时间';
$string['includeqrcode'] = '包括二维码';
$string['includeremarks'] = '包含备注';
$string['incorrectpassword'] = '您输入的密码不正确，签到不成功，请输入正确的密码。';
$string['incorrectpasswordshort'] = '密码错误，签到不成功。';
$string['indetail'] = '详细……';
$string['indicator:cognitivedepth'] = '出勤感知';
$string['indicator:cognitivedepth_help'] = '此指标基于学生在考勤时段中达到的感知深度。';
$string['indicator:cognitivedepthdef'] = '出勤感知';
$string['indicator:cognitivedepthdef_help'] = '在此分析间隔内，参与者已达到 考勤时段 提供的感知参与度的此百分比（级别 = 无视图、视图）';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = '考勤社交';
$string['indicator:socialbreadth_help'] = '该指标基于学生在考勤时段中达到的社交广度。';
$string['indicator:socialbreadthdef'] = '考勤社交';
$string['indicator:socialbreadthdef_help'] = '在此分析间隔内，参与者已达到 考勤时段 提供的社交参与度的此百分比（级别 = 无参与，仅参与者）';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidaction'] = '你必须选择一个动作';
$string['invalidemails'] = '您必须指定现有用户帐户的地址，但找不到：{$a}';
$string['invalidimportfile'] = '文件格式错误。';
$string['invalidsessionenddate'] = '上课结束日期不能早于开始日期';
$string['invalidsessionendtime'] = '结束时间必须大于开始时间';
$string['invalidstatus'] = '选择了一个不适用的状态值，请重试';
$string['iptimemissing'] = '释放分钟数无效';
$string['jumpto'] = '跳到';
$string['keepsearching'] = '继续搜索';
$string['lasttaken'] = '上次参加的出席人数';
$string['manualtriggerauto'] = '手动触发自动打卡';
$string['marksessionimportcsvhelp'] = '此表单允许您上传包含用户标识符和状态的 csv 文件 - 状态字段可以是状态首字母缩略词或为该用户记录出勤的时间。如果传递了时间值，则它将尝试为状态值分配当时可用的最高成绩。';
$string['maxpossible'] = '最大可能性';
$string['maxpossible_help'] = '显示每个用户在每个会话中未获得的最高分（过去和未来）时可以达到的分数：
   <ul>
    <li><strong>点数</strong>: 用户在所有时段中可以获得的最大点数。</li>
    <li><strong>百分比</strong>: 用户在所有时段中可以获得的最高百分比。</li>
    </ul>';
$string['maxpossiblepercentage'] = '最大可能百分比';
$string['maxpossiblepoints'] = '最大可能点数';
$string['maxwarn'] = '电子邮件提醒的最大数量';
$string['maxwarn_help'] = '应发送警告的最大次数（每个时段活动仅发送一个警告）';
$string['mergeuser'] = '合并用户';
$string['messagedselecteduserfailed'] = '无法向一个或多个用户发送消息。请打开调试以了解更多信息。';
$string['mobilesessionfrom'] = '显示比上一个时段活动更早的时段活动';
$string['mobilesessionfrom_help'] = '允许限制在应用程序中签到时段活动时会话列表 - 仅显示自此值以来启动的会话';
$string['mobilesessionto'] = '显示未来的时段活动';
$string['mobilesessionto_help'] = '允许将会话列表限制为仅显示少量的未来会话。';
$string['mobilesettings'] = '移动应用设置';
$string['mobilesettings_help'] = '这些设置影响移动应用的行为';
$string['modulename'] = '考勤';
$string['modulename_help'] = '签到活动用于教师上课点名，并让学生查看自己的签到记录。

教师可建立多重课时，并标记"准时"，"旷课"，"迟到"，"请假"，或修改以符合自己的需求。

您也可以导出个别学生或全班学生的报告。';
$string['modulenameplural'] = '考勤';
$string['months'] = '月';
$string['moreattendance'] = '此页点名已完成';
$string['moveleft'] = '向左移动';
$string['moveright'] = '向右移动';
$string['multisessionexpanded'] = '多个时段活动已扩展';
$string['multisessionexpanded_desc'] = '创建新会话时，将“Multiple sessions”设置默认显示为展开状态。';
$string['mustselectusers'] = '必须选择要导出的用户';
$string['name'] = '名字';
$string['newdate'] = '新日期';
$string['newduration'] = '新的持续时间';
$string['newstatusset'] = '新的状态集';
$string['noabsentstatusset'] = '使用中设置的状态在未标记时没有要使用的状态。';
$string['noattendanceusers'] = '无法导出任何数据，因为该课程尚未有学生选学。';
$string['noattforuser'] = '此用户没有考勤记录';
$string['noautomark'] = '禁用';
$string['nocapabilitytotakethisattendance'] = '您试图用 cmid: {$a} 修改您无权修改的的时段活动出席情况。';
$string['nodescription'] = '正常班级课时';
$string['noeventstoreset'] = '没有需要更新的日历事件。';
$string['nogroups'] = '此活动已设置为使用小组，但课程中不存在任何小组。';
$string['noguest'] = '访客不能看考勤状况';
$string['noofdaysabsent'] = '旷课天数';
$string['noofdaysexcused'] = '请假天数';
$string['noofdayslate'] = '迟到天数';
$string['noofdayspresent'] = '准时天数';
$string['nosessiondayselected'] = '未选出上课日';
$string['nosessionexists'] = '此课程没有课时';
$string['nosessionsselected'] = '尚未选取课时';
$string['notfound'] = '此课程找不到考勤记录！';
$string['notifytask'] = '向用户发送提醒';
$string['notmember'] = 'not&nbsp;成员';
$string['notset'] = '未设置';
$string['nounmarkedstatusset'] = '时段活动 (id:{$a->sessionid})没有配置未签到的状态值，请完善 <a href="{$a->url}">状态设置</a>';
$string['noupgradefromthisversion'] = '考勤模块不能在您attforblock的版本上升级。安装新的考勤模块前请删除attforblock或更新到最新版本。';
$string['numsessions'] = '时段活动数量';
$string['numsessionstaken'] = '已使用的时段活动数量';
$string['olddate'] = '旧日期';
$string['onactivitycompletion'] = '在活动完成时';
$string['onlyselectedusers'] = '导出特定用户';
$string['overallsessions'] = '遍及所有课程';
$string['overallsessions_help'] = '显示全部时段活动的统计信息包括那些未出席的（过去和未来）：
    <ul>
    <li><strong>时段活动</strong>: 时段活动总数。</li>
    <li><strong>点数</strong>: 已出席活动所获得的点数。</li>
    <li><strong>比例</strong>: 已获得点数占全部活动最大可能点数的比例。</li>
    </ul>';
$string['oversessionstaken'] = '已完成上课时间';
$string['oversessionstaken_help'] = '显示已出席时段活动的统计信息：
    <ul>
    <li><strong>活动</strong>: 已出席的时段活动数量。</li>
    <li><strong>点数</strong>: 已出席活动所获得的点数</li>
    <li><strong>比例</strong>: 已出席活动获得的点数点最大可能点数的比例。</li>
    </ul>';
$string['pageof'] = '页码： {$a->page} / {$a->numpages}';
$string['participant'] = '参加';
$string['password'] = '密码';
$string['passwordgrp'] = '学生密码';
$string['passwordgrp_help'] = '如果设置此项， 学生在设置他们自己在该课时的签到状态之前，将被要求输入密码 。如果为空，则不需要密码。';
$string['passwordheader'] = '使用下面列出的密码签到';
$string['passwordrequired'] = '在签到时你必须输入时段活动密码';
$string['percentage'] = '百分比';
$string['percentageallsessions'] = '占所有课时的百分比';
$string['percentagesessionscompleted'] = '已点名课时的百分比';
$string['pluginadministration'] = '考勤管理';
$string['pluginname'] = '考勤';
$string['points'] = '分值';
$string['pointsallsessions'] = '所有课时的分值';
$string['pointssessionscompleted'] = '已点名课时的百分比';
$string['preferences_desc'] = '对状态设置的更改会影响现有签到课时，并影响打分。';
$string['preventsharederror'] = '时段活动的自主签到功能已被禁用，因为此设备似乎已用于记录其他学生的出勤情况。';
$string['preventsharedip'] = '防止学生共享IP地址';
$string['preventsharedip_help'] = '阻止学生使用相同的设备（使用 IP 地址识别）为其他学生记录考勤。';
$string['preventsharediptime'] = '允许重复使用 IP 地址的时间（分钟）';
$string['preventsharediptime_help'] = '允许 IP 地址在此时间过后重新用于签到此时段活动。';
$string['preview'] = '文献预览';
$string['previewhtml'] = 'HTML格式预览';
$string['priorto'] = '由于课时早于课程开始日期({$a}) ，所以在此日期前的新课时将会隐藏（不能存取）。您可以随时更改课程的开始日期（查看课程设置）以存取较早的课时段。<br><br>请变更课时日期或点击「新增课时」按钮确认？';
$string['privacy:metadata:attendancelog'] = '用户考勤日志已记录';
$string['privacy:metadata:attendancesessions'] = '将记录出席情况的时段活动。';
$string['privacy:metadata:attendancewarningdone'] = '通过用户的出勤记录发送给用户的提醒日志。';
$string['privacy:metadata:duration'] = '时段活动持续时间（秒）';
$string['privacy:metadata:groupid'] = '与会话关联的组 ID。';
$string['privacy:metadata:ipaddress'] = 'IP 地址出勤被标记自。';
$string['privacy:metadata:lasttaken'] = '上次参加时段活动的时间的时间戳。';
$string['privacy:metadata:lasttakenby'] = '最后一个在此时段活动中签到的用户 ID';
$string['privacy:metadata:notifyid'] = '与出勤时段活动警告关联的 ID。';
$string['privacy:metadata:remarks'] = '有关用户出勤的说明。';
$string['privacy:metadata:sessdate'] = '会话启动时间的时间戳。';
$string['privacy:metadata:sessionid'] = '出席时段活动 ID。';
$string['privacy:metadata:statusid'] = '学生出勤状态的 ID。';
$string['privacy:metadata:statusset'] = '状态 设置状态 ID 所属的状态设置。';
$string['privacy:metadata:studentid'] = '记录了出勤的学生的 ID。';
$string['privacy:metadata:takenby'] = '为学生打卡用户 ID。';
$string['privacy:metadata:timemodified'] = '上次修改时段活动时的时间戳';
$string['privacy:metadata:timesent'] = '发送提醒时的时间戳。';
$string['privacy:metadata:timetaken'] = '为学生记录出勤时间的时间戳。';
$string['privacy:metadata:userid'] = '要向其发送提醒的用户的 ID。';
$string['processingfile'] = '处理文件';
$string['qr_cookie_error'] = '二维码已过期。';
$string['qr_pass_wrong'] = '二维码密码错误或已过期。';
$string['qrcode'] = '二维码';
$string['qrcodeandpasswordheader'] = '扫描下面的二维码或使用下面列出的密码参加';
$string['qrcodeheader'] = '扫描下方二维码打卡';
$string['qrcodevalidafter'] = '秒';
$string['qrcodevalidbefore'] = '二维码适用于：';
$string['randompassword'] = '随机密码';
$string['remark'] = '{$a}的备注';
$string['remarks'] = '备注';
$string['repeatasfollows'] = '重复以上课时';
$string['repeatevery'] = '重复在每个';
$string['repeaton'] = '重复在';
$string['repeatuntil'] = '重复直到';
$string['report'] = '报告';
$string['reportsessiondate'] = '时段活动日期';
$string['reportsessionduration'] = '时段活动时长';
$string['reportsessionlasttaken'] = '上次占用的时段活动时间 （教师）';
$string['required'] = '必须*';
$string['requiredentries'] = '临时记录覆盖参加者的出席记录';
$string['requiredentry'] = '临时用户合并帮助指南';
$string['requiredentry_help'] = '<p align="center"><b>考勤记录</b></p>
<p align="left"><strong>合并用户</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Moodle 用户</th>
<th>临时用户</th>
<th>动作</th>
</tr>
<tr>
<td>考勤数据</td>
<td>考勤数据</td>
<td>临时用户将覆盖Moodle用户</td>
</tr>
<tr>
<td>没有考勤数据</td>
<td>考勤数据</td>
<td>临时用户的考勤记录将传送到Moodle用户</td>
</tr>
<tr>
<td>考勤数据</td>
<td>没有考勤数据</td>
<td>临时用户将会被删除</td>
</tr>
<tr>
<td>没有考勤数据</td>
<td>没有考勤数据</td>
<td>临时用户将会被删除</td>
</tr>
</table>

</p>
<p align="left"><strong>临时用户将会在合并后删除</strong></p>';
$string['requiresubnet'] = '需要网络地址';
$string['requiresubnet_help'] = '通过指定以逗号分隔的部分或完整 IP 地址列表，可以将出勤记录限制为特定子网。';
$string['resetcaledarcreate'] = '已启用日历事件，但许多现有时段活动没有生成日历事件。是否要为所有现有活动创建日历事件？';
$string['resetcaledardelete'] = '日历事件已被禁用，但许多现有时段活动包含应删除的日历事件。是否要删除所有现有事件？';
$string['resetcalendar'] = '重置日历';
$string['resetdescription'] = '请记住，删除出席数据将会从数据库中清除掉所有信息。你可以利用更改该课程的开始日期来隐藏先前的上课时间的数据。';
$string['resetstatuses'] = '重置状态到默认';
$string['restoredefaults'] = '恢复为默认';
$string['resultsperpage'] = '每页结果';
$string['resultsperpage_desc'] = '单一页面可以显示的学生数';
$string['rotateqrcode'] = '旋转二维码';
$string['rotateqrcode_cleartemppass_task'] = '清除旋转二维码功能生成的临时密码的任务。';
$string['rotateqrcodeexpirymargin'] = '旋转二维码/密码到期时长（秒）';
$string['rotateqrcodeexpirymargin_desc'] = '允许过期 二维码/密码的时间间隔（秒）。';
$string['rotateqrcodeinterval'] = '旋转 二维码/密码间隔（秒）';
$string['rotateqrcodeinterval_desc'] = '旋转 二维码/密码的时间间隔（秒）。';
$string['save'] = '保存考勤记录';
$string['saveandshownext'] = '保存并显示下一页';
$string['scantime'] = '扫描时间';
$string['scantime_help'] = '这允许在导入文件中包含一个时间戳 - 它将尝试转换使用 PHP strtotime 函数传递的时间戳，然后使用出勤状态设置来决定为用户设置哪个状态';
$string['search:activity'] = '考勤 - 时段活动信息';
$string['selectactivity'] = '选择时段活动';
$string['session'] = '上课时间';
$string['session_help'] = '上课时间';
$string['sessionadded'] = '成功添加上课时间';
$string['sessionalreadyexists'] = '此日期已存在课时';
$string['sessiondate'] = '日期';
$string['sessiondays'] = '上课天数';
$string['sessiondeleted'] = '成功删除课时';
$string['sessiondescription'] = '时段活动描述';
$string['sessionduplicate'] = '课程 {$a->course}的考勤: {$a->activity}, {$a->date}有重复时段';
$string['sessionexist'] = '未添加课时（已经存在）';
$string['sessiongenerated'] = '一个课时被成功创建';
$string['sessions'] = '上课时间';
$string['sessionsallcourses'] = '全部课程';
$string['sessionsbyactivity'] = '考勤实例';
$string['sessionsbycourse'] = '课程';
$string['sessionsbydate'] = '周';
$string['sessionscompleted'] = '已签到课时';
$string['sessionscurrentcourses'] = '当前课程';
$string['sessionsgenerated'] = '已成功创建{$a}个上课时间';
$string['sessionsids'] = '课时的ID：';
$string['sessionsnotfound'] = '在互选定期间内没有上课时段';
$string['sessionstartdate'] = '课时开始时间';
$string['sessionstotal'] = '课时总数';
$string['sessionsupdated'] = '时段更新';
$string['sessiontype'] = '类型';
$string['sessiontype_help'] = '有两种课时添加方式：一般课时（所有学生）、小组课时。是否能添加不同形式取决于活动小组模式。

* 小组模式之无小组，您只能增加一般课时（所有学生）；
* 小组模式之分隔小组，您只可增加小组课时；
* 小组模式之可视小组，您可增加一般及小组课时。';
$string['sessiontypeshort'] = '类型';
$string['sessionunknowngroup'] = '该时段指定了未知组： {$a}';
$string['sessionupdated'] = '成功更新课时';
$string['set_by_student'] = '自行登记';
$string['setallstatuses'] = '设置状态';
$string['setallstatusesto'] = '设置状态为«{$a}»';
$string['setperiod'] = '释放IP的指定时间（分钟）';
$string['settings'] = '设置';
$string['setunmarked'] = '未签到将自动设置为';
$string['setunmarked_help'] = '如果在时段中启用，则在学生尚未标记自己的出勤时设置此状态。';
$string['showdefaults'] = '显示默认值';
$string['showduration'] = '显示期间';
$string['showextrauserdetails'] = '显示额外的用户信息';
$string['showqrcode'] = '显示二维码';
$string['showsessiondescriptiononreport'] = '在报表里显示时段描述';
$string['showsessiondescriptiononreport_desc'] = '在考勤列表里显示时段描述。';
$string['showsessiondetails'] = '展示课程详细信息';
$string['somedisabledstatus'] = '（时段开始后一些选项已被移除。）';
$string['sortedgrid'] = '分类网格';
$string['sortedlist'] = '分类列表';
$string['startofperiod'] = '时段的开始点';
$string['starttime'] = '开始时间';
$string['status'] = '状态';
$string['statusall'] = '全部';
$string['statusdeleted'] = '状态已删除';
$string['statuses'] = '状态';
$string['statusset'] = '状态{$a}';
$string['statussetsettings'] = '状态设置';
$string['statustotalcount'] = '状态 {$a} - 总计';
$string['statustotalcountcurrentweek'] = '状态 {$a} - 本周累计';
$string['statustotalcountpreviousweek'] = '状态 {$a} - 上周累计';
$string['statusunselected'] = '未选择';
$string['strftimedm'] = '%b %d';
$string['strftimedmw'] = '<nobr>%a %b %d</nobr>';
$string['strftimedmy'] = '%d %b %Y';
$string['strftimedmyhm'] = '%d %b %Y %I.%M%p';
$string['strftimedmyw'] = '<nobr>%Y-%m-%d %a</nobr>';
$string['strftimeh'] = '%I%p';
$string['strftimehm'] = '%I:%M%p';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentid'] = '学生ID';
$string['studentmarked'] = '您在本时段的出席情况已被记录下来。';
$string['studentmarking'] = '学生登记';
$string['studentpassword'] = '学生密码';
$string['studentrecordingexpanded'] = '学生记录已扩展';
$string['studentrecordingexpanded_desc'] = '在创建新时段时，将 学生记录 设置默认显示为展开状态。';
$string['studentscanmark'] = '允许学生登记自己的考勤情况';
$string['studentscanmark_desc'] = '如果选中此项，教师将能够允许学生标记自己的出勤情况。';
$string['studentscanmark_help'] = '如果勾选，学生将可以自己更改他们在该课时内的考勤状态。';
$string['studentscanmarksessiontime'] = '学生在本时段记录出勤情况';
$string['studentscanmarksessiontime_desc'] = '如果选中此项，学生只能在时段内记录其出勤情况。';
$string['studentscanmarksessiontimeend'] = '时段结束（分钟）';
$string['studentscanmarksessiontimeend_desc'] = '如果时段没有结束时间，则学生应可以使用该时段多少分钟来记录其出勤情况。';
$string['studentsearlyopentime'] = '提前开放时段以进行签到';
$string['studentsearlyopentime_help'] = '这允许教师提前开始时段 ，以便在实际开始时间之前进行考勤。';
$string['submit'] = '提交';
$string['submitattendance'] = '提交考勤';
$string['submitattendancefuture'] = '报告将来的缺勤';
$string['submitpassword'] = '提交密码';
$string['subnet'] = '子网';
$string['subnetactivitylevel'] = '允许在活动级别配置子网';
$string['subnetactivitylevel_desc'] = '如果启用，教师可以在创建出勤时覆盖时段活动级别的默认子网。否则，在创建会话时将使用 site default。';
$string['subnetwrong'] = '只能从特定位置记录出勤情况，并且此计算机不在允许列表中。';
$string['summary'] = '摘要';
$string['tablerenamefailed'] = '将旧的attforblock表重命名为考勤失败';
$string['tactions'] = '动作';
$string['takeattendance'] = '点名';
$string['takensessions'] = '已签到课时';
$string['tcreated'] = '建立';
$string['tempaddform'] = '新增临时用户';
$string['tempexists'] = '这儿已经有一个临时用户登记这个电子邮件地址';
$string['temptable'] = '临时用户清单';
$string['tempuser'] = '临时用户';
$string['tempusermerge'] = '合并临时用户';
$string['tempusers'] = '临时用户';
$string['tempusersedit'] = '编辑临时用户';
$string['tempuserslist'] = '临时用户';
$string['thirdpartyemails'] = '通知其他用户';
$string['thirdpartyemails_help'] = '将收到通知的其他用户列表。（需要 mod/attendance：viewreports 功能）';
$string['thirdpartyemailsubject'] = '出勤提醒';
$string['thirdpartyemailtext'] = '{$a->firstname} {$a->lastname} 在课程 {$a->coursename} {$a->aname} 中的出勤低于 {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = '您收到此邮件是因为本课程的老师已将您的电子邮件添加到收件人列表中';
$string['thiscourse'] = '此课程';
$string['time'] = '时间';
$string['timeahead'] = '无法建立超过一年的多个上课时间，请调整开始及结束日期。';
$string['timemodified'] = '时间已修改';
$string['timetaken'] = '已占用的出勤时间';
$string['to'] = '至：';
$string['todate'] = '迄今为止';
$string['totalnumsessions'] = '时段总数';
$string['triggered'] = '首次通知';
$string['tuseremail'] = '电子邮件';
$string['tusername'] = '全名';
$string['ungraded'] = '没有分等级的上课时间';
$string['unknowngroup'] = '未知小组';
$string['unknownstatus'] = '未知状态id: {$a}';
$string['update'] = '更新';
$string['updateattendance'] = '更新考勤';
$string['uploadattendance'] = '通过 CSV 上传考勤';
$string['usedefaultsubnet'] = '使用默认值';
$string['usemessageform'] = '或使用下面的表格向选定的学生发送消息';
$string['userexistingstatus'] = '您的出席率已标记为：<strong>{$a}</strong>，如有需要，请使用下面的表格进行更改。';
$string['userexists'] = '这儿已经有一真实用户使用这个电子邮件地址。';
$string['userid'] = '用户ID';
$string['userimportfield'] = '扩展用户字段';
$string['userimportfield_help'] = '上传的 CSV 中包含用户标识符的字段';
$string['userimportto'] = 'Moodle 用户字段';
$string['userimportto_help'] = '与 CSV 导出中的数据匹配的 Moodle 字段';
$string['users'] = '要导出的用户';
$string['usersessiongrade'] = '用户时段考勤';
$string['usersessionremarks'] = '用户时段备注';
$string['usersessiontaken'] = '已占用用户时段';
$string['userstatus'] = '用户时段状态';
$string['usestatusset'] = '状态设置';
$string['variable'] = '变量';
$string['variablesupdated'] = '成功更新变量组';
$string['versionforprinting'] = '打印版本';
$string['viewmode'] = '查看模式';
$string['warnafter'] = '提醒前进行的时段数';
$string['warnafter_help'] = '仅当用户的出勤至少达到此时段数时，才会触发警告。';
$string['warningdeleted'] = '提醒已删除';
$string['warningdesc'] = '该警告将被自动添加到所有新的签到活动中。如果在完全相同的时间内触发多个警告，则只发送具有较低警告阈值的警告。';
$string['warningdesc_course'] = '这里设置的警告阈值会影响到考勤报告，并允许学生和第三方得到通知。如果在完全相同的时间内触发多个警告，则只发送具有较低警告阈值的警告。';
$string['warningfailed'] = '您无法创建使用相同百分比和时段数的警告。';
$string['warningpercent'] = '如果百分比低于';
$string['warningpercent_help'] = '当总体百分比低于此数字时，将触发提醒。';
$string['warnings'] = '警告设置';
$string['warningthreshold'] = '警告阈值';
$string['warningupdated'] = '更新的提醒';
$string['week'] = '周';
$string['weekcommencing'] = '开始的一周';
$string['weeks'] = '周';
$string['youcantdo'] = '什么都不能做';
