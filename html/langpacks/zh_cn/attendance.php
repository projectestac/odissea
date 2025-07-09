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
 * Strings for component 'attendance', language 'zh_cn', version '4.4'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = '缺';
$string['Afull'] = '缺勤';
$string['Eacronym'] = '假';
$string['Efull'] = '请假';
$string['Lacronym'] = '迟';
$string['Lfull'] = '迟到';
$string['Pacronym'] = '准';
$string['Pfull'] = '准时';
$string['absenteereport'] = '缺勤报告';
$string['acronym'] = '缩写';
$string['add'] = '添加';
$string['addedrecip'] = '添加了 {$a} 位新收件人';
$string['addedrecips'] = '添加了 {$a} 个新收件人';
$string['addmultiplesessions'] = '多个课时';
$string['addsession'] = '增加课时';
$string['adduser'] = '添加用户';
$string['addwarning'] = '添加警告';
$string['all'] = '全部';
$string['allcourses'] = '所有课程';
$string['allowupdatestatus'] = '允许学生自主修改其考勤状态';
$string['allowupdatestatus_desc'] = '若选中，则学生将能自主修改其考勤状态。';
$string['allowupdatestatus_help'] = '若选中，则学生将能自主修改其考勤状态。';
$string['allpast'] = '先前全部';
$string['allsessions'] = '所有课时';
$string['allsessionstotals'] = '选定课时总计';
$string['attendance:addinstance'] = '新增考勤活动';
$string['attendance:canbelisted'] = '出现在花名册中';
$string['attendance:changeattendances'] = '修改考勤';
$string['attendance:changepreferences'] = '更改偏好设置';
$string['attendance:export'] = '导出报告';
$string['attendance:import'] = '从文件导入考勤时段 （csv）';
$string['attendance:manageattendances'] = '管理考勤';
$string['attendance:managetemporaryusers'] = '管理临时学生';
$string['attendance:manualautomark'] = '允许人为操作自动评分过程';
$string['attendance:takeattendances'] = '记录考勤';
$string['attendance:view'] = '查看考勤';
$string['attendance:viewreports'] = '查看报告';
$string['attendance:viewsummaryreports'] = '查看课程总结报告';
$string['attendance:warningemails'] = '可订阅旷课用户的电子邮件';
$string['attendance_already_submitted'] = '成功设置考勤。';
$string['attendance_no_status'] = '无可用的有效状态-您可能太晚了，无法记录出勤情况。';
$string['attendancedata'] = '考勤数据';
$string['attendancefile'] = '考勤文件（csv格式）';
$string['attendancefile_help'] = '该文件必须是一个CSV文件，带有标题行和用于识别用户的字段，以及记录的出勤时间，例如（电子邮件，扫描时间）或（用户名，时间）';
$string['attendancegrade'] = '考勤成绩';
$string['attendancenotset'] = '必须设置您的考勤';
$string['attendancenotstarted'] = '课程尚未开始考勤';
$string['attendancepercent'] = '出勤率';
$string['attendancereport'] = '出勤';
$string['attendanceslogged'] = '已记录出勤';
$string['attendancestaken'] = '考勤人数';
$string['attendancesuccess'] = '成功记录考勤状态';
$string['attendanceupdated'] = '考勤状态已更新';
$string['attendanceuserreport'] = '考勤报告';
$string['attforblockdirstillexists'] = '旧的 mod/attforblock 目录仍然存在 - 在运行此升级前，你必须删除服务器上的该目录。';
$string['attrecords'] = '考勤记录';
$string['autoassignstatus'] = '自动选择可用的最高分状态';
$string['autoassignstatus_help'] = '若选择此项，学生将自动标记为最高分的状态。';
$string['automark'] = '自动评分';
$string['automark_help'] = '允许自动评分。
若选择“是”，系统将会自动根据学生首次访问该课程的情况进行评分。
若选择“课时结束时标记为未评分”，则所有未考勤的学生将被设置为未评分状态。';
$string['automarkall'] = '是';
$string['automarkclose'] = '课时结束时标记为未评分';
$string['automarkingcomplete'] = '已完成自动评分';
$string['automarkingnotavailableyet'] = '本课时尚未结束，结束时将自动评分。';
$string['automarkingnotenabled'] = '本课时未启用自动评分';
$string['automarktask'] = '检查需自动评分的课时';
$string['automarkuseempty'] = '自动评分状态的可用性处理';
$string['automarkuseempty_desc'] = '如果勾选，在自动评分期间，将允许状态项中"可供使用"设置为空/未设置';
$string['autorecorded'] = '系统已自动记录';
$string['availability'] = '自主修改考勤状态可用';
$string['availability_help'] = '限制此状态的可用性。<br> 若选择了“受限”选项，则需指定课时开始后此状态可用的分钟数。适用于学生自行修改出勤情况时。';
$string['availabilityalways'] = '始终';
$string['availabilitylimitedtime'] = '限制时间';
$string['availabilityno'] = '否';
$string['availablebeforesession'] = '提前考勤中可用';
$string['availablebeforesession_help'] = '当学生自主签到时，允许在课时开始前选择此状态。';
$string['averageattendance'] = '平均出勤率';
$string['averageattendancegraded'] = '平均出勤率';
$string['backtoparticipants'] = '返回参与者列表';
$string['below'] = '低于 {$a}%';
$string['calclose'] = '关闭';
$string['calendarevent'] = '创建课时日程';
$string['calendarevent_help'] = '若启用，将在日历中为此课时创建日程。
若禁用，将在日历中删除此课时所有现有日程。';
$string['caleventcreated'] = '成功创建课时日程';
$string['caleventdeleted'] = '成功删除此课时日程';
$string['calmonths'] = '一月,二月,三月,四月,五月,六月,七月,八月,九月,十月,十一月,十二月';
$string['calshow'] = '选择日期';
$string['calweekdays'] = '日,一,二,三,四,五,六';
$string['cannottakeforgroup'] = '您不能为小组 "{$a}" 进行考勤';
$string['cannottakethisgroup'] = '您并非该课程成员，因此您本课时的出勤未被记录。';
$string['cantaddstatus'] = '添加新状态时，您必须设置状态简写与状态描述。';
$string['canthidestatus'] = '您无法隐藏此状态，因为它已在此考勤活动中被使用';
$string['categoryreport'] = '课程分类报告';
$string['changeattendance'] = '修改考勤';
$string['changeduration'] = '修改持续时间';
$string['changesession'] = '修改课时';
$string['checkweekdays'] = '选择您指定的课时日期范围内的工作日。';
$string['closed'] = '本课时不能自主签到';
$string['column'] = '列';
$string['columnmap'] = '列映射';
$string['columnmap_help'] = '对于显示的每个字段，请在 csv 文件中选择相应的列。';
$string['columns'] = '列';
$string['commonsession'] = '所有学生';
$string['commonsessions'] = '所有学生';
$string['confirm'] = '确认';
$string['confirmcolumnmappings'] = '确认列映射';
$string['confirmdeletehiddensessions'] = '您确定要删除安排在此课程开始日期({$a->date})前的 {$a->count}个课时吗？';
$string['confirmdeleteuser'] = '您确定要删除用户 \'{$a->fullname}\' ({$a->email}) 吗？<br/>他的全部考勤记录将被永久删除。';
$string['copyfrom'] = '自该处复制考勤数据';
$string['countofselected'] = '已选数量';
$string['course'] = '课程';
$string['coursemessage'] = '向课程用户发送消息';
$string['courseshortname'] = '课程简称';
$string['coursesummary'] = '课程汇总报表';
$string['createmultiplesessions'] = '创建多个课时';
$string['createmultiplesessions_help'] = '您可使用此项功能来一步建立多个上课时间。
该多个上课时间开始日期依据基础课时的日期，并且持续到“上课结束日期”。

* <strong>上课日</strong>: 选择上课日(例如星期二/星期三/星期五等等)；
* <strong>频率</strong>: 在此设定频率。如每周上课则选1，隔周上课则选2，每三周一次课则选3，等等；
* <strong>上课结束日期</strong>: 选择上课结束日期 (您想点名的最后一天)。';
$string['createonesession'] = '为此课程创建课时';
$string['csvdelimiter'] = 'CSV分割符';
$string['currentlyselectedusers'] = '当前选中用户';
$string['customexportfields'] = '导出自定义用户属性字段';
$string['customexportfields_help'] = '导出报表里包括额外的用户自定义资料字段';
$string['customfields'] = '自定义课时字段';
$string['date'] = '日期';
$string['days'] = '天';
$string['defaultdisplaymode'] = '默认显示模式';
$string['defaults'] = '默认';
$string['defaultsessionsettings'] = '默认课时设置';
$string['defaultsessionsettings_help'] = '这些设置定义了所有新课时的默认值';
$string['defaultsettings'] = '默认考勤设置';
$string['defaultsettings_help'] = '这些设置定义了所有新考勤的默认值';
$string['defaultstatus'] = '设置默认状态';
$string['defaultsubnet'] = '默认网络地址';
$string['defaultsubnet_help'] = '通过指定以逗号分隔的部分或完整 IP 地址列表，可以将出勤记录限制为特定子网。这是创建新课时的默认值。';
$string['defaultview'] = '登录时的默认视图';
$string['defaultview_desc'] = '这是教师首次登录时显示的默认视图。';
$string['defaultwarnings'] = '默认警告设置';
$string['defaultwarningsettings'] = '默认警告设置';
$string['defaultwarningsettings_help'] = '这些设置定义所有新警告的默认值';
$string['delete'] = '删除';
$string['deletecheckfull'] = '您是否确定完全删除 {$a}，包括所有用户数据？';
$string['deletedgroup'] = '有关此课时的组已被删除';
$string['deletehiddensessions'] = '删除所有隐藏课时';
$string['deletelogs'] = '删除考勤数据';
$string['deleteselected'] = '删除选定';
$string['deletesession'] = '删除课时';
$string['deletesessions'] = '删除所有课时';
$string['deleteuser'] = '删除用户';
$string['deletewarningconfirm'] = '您确定要删除此警告？';
$string['deletingsession'] = '删除此课程的课时';
$string['deletingstatus'] = '删除此课程的状态';
$string['description'] = '描述';
$string['display'] = '显示';
$string['displaymode'] = '显示模式';
$string['donotusepaging'] = '不使用分页';
$string['downloadexcel'] = '下载 Excel 格式';
$string['downloadooo'] = '下载 OpenOffice 格式';
$string['downloadtext'] = '下载文本格式';
$string['duration'] = '持续时间';
$string['editsession'] = '编辑课时';
$string['edituser'] = '编辑用户';
$string['emailcontent'] = '邮件内容';
$string['emailcontent_default'] = '%userfirstname%, 你好。

您在 %coursename% %attendancename% 中的出勤率已降至 %warningpercent% 以下，目前为 %percent% ，希望您还顺利！

为了更好地通过此课程，您应提高出勤率，若您需要更多帮助，请与我们联系。';
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
$string['emailsubject_default'] = '出勤警告';
$string['emailsubject_help'] = '给学生发送警告时，邮件主题设置为这个字段。';
$string['emailuser'] = '邮件用户';
$string['emailuser_help'] = '若选中，将会给学生发送警告。';
$string['emptyacronym'] = '简写不能为空，状态未更新';
$string['emptydescription'] = '描述不能为空，状态未更新';
$string['enablecalendar'] = '创建日程';
$string['enablecalendar_desc'] = '若启用，将为每个考勤课时创建日程。更改此设置后，您应重置日历报告。';
$string['enablewarnings'] = '启用警告';
$string['enablewarnings_desc'] = '这允许为出勤设置警告，并在出勤低于配置的阈值时向用户发送电子邮件通知。<br/><strong>警告：这是一个新功能，尚未经过广泛测试。请自行承担风险使用，并在您发现它运行良好时在 moodle 论坛中提供反馈。</strong>';
$string['encoding'] = '编码';
$string['encoding_help'] = '这指的是学生身份证上使用的条形码编码类型。典型的条形码编码方案包括 Code-39、Code-128 和 UPC-A。';
$string['endofperiod'] = '时段的结束点';
$string['endtime'] = '下课时间';
$string['enrolmentend'] = '用户注册结束{$a}';
$string['enrolmentstart'] = '用户注册开始{$a}';
$string['enrolmentsuspended'] = '注册暂停';
$string['enterpassword'] = '输入密码';
$string['error:coursehasnoattendance'] = '课程 {$a} 无考勤课时。';
$string['error:coursenotfound'] = '找不到课程 {$a}';
$string['error:qrcode'] = '要启用二维码签到，必须允许学生自行签到。跳过。';
$string['error:sessioncourseinvalid'] = '课程无效！跳过。';
$string['error:sessiondateinvalid'] = '课时日期无效！跳过。';
$string['error:sessionendinvalid'] = '下课时间无效！跳过。';
$string['error:sessionstartinvalid'] = '上课时间无效！跳过。';
$string['error:statusnotfound'] = '用户 {$a->extuser} 的状态值 {$a->status} 未找到：';
$string['error:timenotreadable'] = '用户 {$a->extuser} 的扫描时间 {$a->scantime} 无法转换为短时间';
$string['error:userduplicate'] = '用户 {$a} 在导入中出现了两次。请确保每个用户只包含一条记录。';
$string['error:usernotfound'] = '设置给用户 {$a->extuser} 的属性字段 {$a->userfield} 无法在本课程中找到';
$string['errorgroupsnotselected'] = '选择一个或多个组';
$string['errorinaddingsession'] = '增加课时出错';
$string['erroringeneratingsessions'] = '生成课时有误';
$string['eventdurationupdated'] = '课时时长已更新';
$string['eventreportviewed'] = '考勤报告已查看';
$string['eventscreated'] = '日程已创建';
$string['eventsdeleted'] = '日程已删除';
$string['eventsessionadded'] = '课时已添加';
$string['eventsessiondeleted'] = '课时已删除';
$string['eventsessionipshared'] = '自行签到IP冲突';
$string['eventsessionsimported'] = '课时已导入';
$string['eventsessionupdated'] = '课时已更新';
$string['eventstatusadded'] = '已添加状态';
$string['eventstatusupdated'] = '已更新状态';
$string['eventstudentattendancesessionsupdated'] = '课时报告已更新';
$string['eventstudentattendancesessionsviewed'] = '课时报告已查看';
$string['eventtaken'] = '已考勤';
$string['eventtakenbystudent'] = '学生考勤';
$string['export'] = '导出';
$string['extrarestrictions'] = '额外限制';
$string['formattexttype'] = '格式';
$string['from'] = '从：';
$string['gradebookexplanation'] = '成绩单上的分数';
$string['gradebookexplanation_help'] = '考勤模块表示您迄今的考勤成绩，取决于您已获得的分数及您可能获得的分数，不含以后的课时。成绩单中您的出勤成绩则是根据您考勤（包含以后课时）及整个课程您可能获得的分数的百分比计算。因此，考勤模块及成绩单上的考勤成绩可能不同，但百分比是相同的。

例如，若您目前获得了 8/10 分（出勤率 80%），而整个课程的出勤成绩占 50 分，那么出勤模块将显示 8/10，成绩单将显示 40/50。你尚未获得 40 分，但 40 分相当于你当前 80%出勤率的等值分数。出勤模块中你获得的分数永远不会减少，因为它仅基于目前的出勤情况；然而，成绩单中显示的出勤分数可能会根据你未来的出勤情况增加或减少，因为它基于整个课程的出勤情况。';
$string['graded'] = '成绩';
$string['gridcolumns'] = '网格列';
$string['group'] = '组';
$string['groups'] = '组';
$string['groupsession'] = '学生所在的组';
$string['groupsessionsby'] = '课时分组条件';
$string['hiddensessions'] = '隐藏课时';
$string['hiddensessions_help'] = '若课时安排在课程开始日前，则课时将被隐藏。

您可使用此功能隐藏而不删除旧课时。仅可见课时才会出现在成绩单中。';
$string['hiddensessionsdeleted'] = '所有隐藏课时已删除';
$string['hideextrauserdetails'] = '隐藏额外的用户详细';
$string['hidensessiondetails'] = '隐藏课时详细';
$string['identifyby'] = '辨别学生依据';
$string['import'] = '导入';
$string['importfile'] = '导入文件';
$string['importfile_help'] = 'CSV 文件必须包含标题和字段，以标识要创建的组、时间和时段日期。<br/>文件上传后的下一页将展示所有可映射到您自定义字段的字段示例。<br/>示例：<br/>组;会话日期;开始时间;结束时间<br/>groupA:05-10-2022;13:00;14:00<br/>groupB;05-10-2022;14:00;15:00';
$string['importsessions'] = '导入时段';
$string['importstatus'] = '状态字段';
$string['importstatus_help'] = '导入中允许的状态值，比如 P, L, 或者 A';
$string['includeabsentee'] = '在计算旷课报告的时候包含本课时';
$string['includeabsentee_help'] = '若勾选，此课时将被包含在旷课报告中。';
$string['includeall'] = '选择所有课时';
$string['includedescription'] = '包括课时描述';
$string['includenottaken'] = '包含未点名的课时';
$string['includeqrcode'] = '包含二维码';
$string['includeremarks'] = '包含备注';
$string['incorrectpassword'] = '密码错误，签到失败，请输入正确的密码。';
$string['incorrectpasswordshort'] = '密码错误，签到失败。';
$string['indetail'] = '详细……';
$string['indicator:cognitivedepth'] = '出勤感知';
$string['indicator:cognitivedepth_help'] = '此指标基于学生在考勤时段中达到的感知深度。';
$string['indicator:cognitivedepthdef'] = '出勤感知';
$string['indicator:cognitivedepthdef_help'] = '参与者已达到此分析期间出勤所提供的认知参与程度的百分比（级别 = 无查看，查看）';
$string['indicator:cognitivedepthdef_link'] = '学习分析指标#认知深度';
$string['indicator:socialbreadth'] = '考勤社交';
$string['indicator:socialbreadth_help'] = '该指标基于学生在考勤时段中达到的社交广度。';
$string['indicator:socialbreadthdef'] = '考勤社交';
$string['indicator:socialbreadthdef_help'] = '在此分析间隔内，参与者已达到 考勤时段 提供的社交参与度的此百分比（级别 = 无参与，仅参与者）';
$string['indicator:socialbreadthdef_link'] = '学习分析指标#社交广度';
$string['invalidaction'] = '您必须选择一个操作';
$string['invalidemails'] = '您必须指定现有用户帐户的地址，找不到：{$a}';
$string['invalidimportfile'] = '文件格式错误。';
$string['invalidsessionenddate'] = '此日期不能早于课时日期';
$string['invalidsessionendtime'] = '结束时间必须大于开始时间';
$string['invalidstatus'] = '状态值无效，请重试';
$string['iptimemissing'] = '无效的发布分钟数';
$string['jumpto'] = '跳至';
$string['keepsearching'] = '继续搜索';
$string['lasttaken'] = '最近一次考勤';
$string['manualtriggerauto'] = '手动触发自动评分';
$string['marksessionimportcsvhelp'] = '此表单允许您上传包含用户标识符和状态的 csv 文件 - 状态字段可以是状态首字母缩略词或为该用户记录出勤的时间。如果传递了时间值，则它将尝试为状态值分配当时可用的最高成绩。';
$string['maxpossible'] = '最大可能';
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
$string['modulename_help'] = '考勤活动模块用于教师上课点名，并让学生查看自己的签到记录。

教师可建立多重课时，并标记"准时"，"旷课"，"迟到"，"请假"，或修改以符合自己的需求。

您也可以导出个别学生或全班学生的报告。';
$string['modulenameplural'] = '考勤';
$string['months'] = '月';
$string['moreattendance'] = '此页考勤已完成';
$string['moveleft'] = '向左移动';
$string['moveright'] = '向右移动';
$string['multisessionexpanded'] = '展开多个课时';
$string['multisessionexpanded_desc'] = '创建新课时时，默认展开显示"多课时"设置。';
$string['mustselectusers'] = '必须选择要导出的用户';
$string['name'] = '名';
$string['newdate'] = '新日期';
$string['newduration'] = '新的持续时间';
$string['newstatusset'] = '新的状态集';
$string['noabsentstatusset'] = '使用中设置的状态在未标记时没有要使用的状态。';
$string['noattendanceusers'] = '无法导出任何数据，因为该课程尚未有学生注册课程。';
$string['noattforuser'] = '此用户没有考勤记录';
$string['noautomark'] = '禁用';
$string['nocapabilitytotakethisattendance'] = '您尝试修改具有 cmid: {$a}的课程的出勤记录，但您没有修改权限。';
$string['nodescription'] = '正常班级课时';
$string['noeventstoreset'] = '无需要更新的日程。';
$string['nogroups'] = '此活动已设置为使用小组，但课程中不存在任何小组。';
$string['noguest'] = '访客不能看考勤状况';
$string['noofdaysabsent'] = '缺勤天数';
$string['noofdaysexcused'] = '请假天数';
$string['noofdayslate'] = '迟到天数';
$string['noofdayspresent'] = '准时天数';
$string['nosessiondayselected'] = '尚未选择上课日';
$string['nosessionexists'] = '此课程无课时';
$string['nosessionsselected'] = '尚未选择课时';
$string['notfound'] = '此课程找不到考勤活动！';
$string['notifytask'] = '向用户发送警告';
$string['notmember'] = 'not&nbsp;成员';
$string['notset'] = '未设置';
$string['nounmarkedstatusset'] = '此课程（id:{$a->sessionid}）未配置未标记状态，要修复此问题，请更新<a href="{$a->url}">状态设置</a>';
$string['noupgradefromthisversion'] = '考勤模块不能在您attforblock的版本上升级。安装新的考勤模块前请删除attforblock或更新到最新版本。';
$string['numsessions'] = '课时数';
$string['numsessionstaken'] = '参加课时数';
$string['olddate'] = '旧日期';
$string['onactivitycompletion'] = '在活动完成时';
$string['onlyselectedusers'] = '导出特定用户';
$string['overallsessions'] = '所有课时';
$string['overallsessions_help'] = '显示全部时段活动的统计信息包括那些未出席的（过去和未来）：
    <ul>
    <li><strong>时段活动</strong>: 时段活动总数。</li>
    <li><strong>点数</strong>: 已出席活动所获得的点数。</li>
    <li><strong>比例</strong>: 已获得点数占全部活动最大可能点数的比例。</li>
    </ul>';
$string['oversessionstaken'] = '已完成课时';
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
$string['passwordgrp_help'] = '若设置，学生需输入此密码才能自主签到。若为空，则无需密码。';
$string['passwordheader'] = '输入下面的密码签到：';
$string['passwordrequired'] = '签到时必须输入密码';
$string['percentage'] = '百分比';
$string['percentageallsessions'] = '占所有课时的百分比';
$string['percentagesessionscompleted'] = '已考勤课时的百分比';
$string['pluginadministration'] = '考勤管理';
$string['pluginname'] = '考勤';
$string['points'] = '分值';
$string['pointsallsessions'] = '所有课时的分值';
$string['pointssessionscompleted'] = '已点名课时的百分比';
$string['preferences_desc'] = '对状态集的更改将影响现有的考勤课时，并可能影响评分。';
$string['preventsharederror'] = '该课时的自主签到已被禁用，因为此设备似乎被用于另一名学生的签到。';
$string['preventsharedip'] = '阻止学生共享IP地址';
$string['preventsharedip_help'] = '阻止学生使用相同的设备（根据 IP 地址）为其他学生签到。';
$string['preventsharediptime'] = '允许重复使用 IP 地址的时间（分钟）';
$string['preventsharediptime_help'] = '允许 IP 地址在此时间过后重新用于本课时的签到。';
$string['preview'] = '文件预览';
$string['previewhtml'] = 'HTML格式预览';
$string['priorto'] = '课时日期早于课程开始日期({$a}) ，所以在此日期前的新课时将会隐藏（不可访问）。您可以随时更改课程的开始日期（查看课程设置）以访问较早的课时。<br><br>请更改课时日期，或点击「添加课时」按钮确认？';
$string['privacy:metadata:attendancelog'] = '用户考勤日志已记录';
$string['privacy:metadata:attendancesessions'] = '将记录出勤的课时。';
$string['privacy:metadata:attendancewarningdone'] = '通过用户的出勤记录发送给用户的提醒日志。';
$string['privacy:metadata:duration'] = '课时持续时间（秒）';
$string['privacy:metadata:groupid'] = '与会话关联的组 ID。';
$string['privacy:metadata:ipaddress'] = 'IP 地址出勤被标记自。';
$string['privacy:metadata:lasttaken'] = '上次课时出勤的时间戳。';
$string['privacy:metadata:lasttakenby'] = '本课时最后签到的用户 ID';
$string['privacy:metadata:notifyid'] = '与出勤时段活动警告关联的 ID。';
$string['privacy:metadata:remarks'] = '有关用户出勤的说明。';
$string['privacy:metadata:sessdate'] = '上课时间戳';
$string['privacy:metadata:sessionid'] = '出席时段活动 ID。';
$string['privacy:metadata:statusid'] = '学生出勤状态的 ID。';
$string['privacy:metadata:statusset'] = '状态 设置状态 ID 所属的状态设置。';
$string['privacy:metadata:studentid'] = '记录了出勤的学生 ID。';
$string['privacy:metadata:takenby'] = '记录学生考勤的用户 ID。';
$string['privacy:metadata:timemodified'] = '课时最后修改时间戳';
$string['privacy:metadata:timesent'] = '发送警告的时间戳。';
$string['privacy:metadata:timetaken'] = '学生考勤记录的时间戳。';
$string['privacy:metadata:userid'] = '发送警告的用户 ID。';
$string['processingfile'] = '处理文件';
$string['qr_cookie_error'] = '二维码已过期。';
$string['qr_pass_wrong'] = '二维码密码错误或已过期。';
$string['qrcode'] = '二维码';
$string['qrcodeandpasswordheader'] = '扫描二维码或输入密码签到：';
$string['qrcodeheader'] = '扫描二维码签到：';
$string['qrcodevalidafter'] = '秒';
$string['qrcodevalidbefore'] = '二维码有效期：';
$string['randompassword'] = '随机密码';
$string['remark'] = '{$a}的备注';
$string['remarks'] = '备注';
$string['repeatasfollows'] = '重复以上课时';
$string['repeatevery'] = '每X周重复';
$string['repeaton'] = '每周X重复';
$string['repeatuntil'] = '结束日';
$string['report'] = '报告';
$string['reportsessiondate'] = '课时日期';
$string['reportsessionduration'] = '课时时长';
$string['reportsessionlasttaken'] = '课时最后使用时间（教师）';
$string['required'] = '必填*';
$string['requiredentries'] = '临时记录会覆盖参与者的出勤记录';
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
$string['resetcaledarcreate'] = '已启用日程，但许多现有课程没有生成日程。是否要为所有现有课时创建日程？';
$string['resetcaledardelete'] = '日程已被禁用，但许多现有课时包含应删除的日程。是否要删除所有现有日程？';
$string['resetcalendar'] = '重置日历';
$string['resetdescription'] = '请记住，删除考勤数据将清除数据库中的信息。您只需隐藏更改了课程开始日期的旧课程即可！';
$string['resetstatuses'] = '重置状态为默认值';
$string['restoredefaults'] = '恢复为默认';
$string['resultsperpage'] = '每页结果';
$string['resultsperpage_desc'] = '每页显示的学生数';
$string['rotateqrcode'] = '自动刷新二维码';
$string['rotateqrcode_cleartemppass_task'] = '清除自动刷新二维码功能生成临时密码的任务。';
$string['rotateqrcodeexpirymargin'] = '过期二维码/密码宽限时长（秒）';
$string['rotateqrcodeexpirymargin_desc'] = '过期二维码/密码宽限期（秒）。';
$string['rotateqrcodeinterval'] = '自动刷新二维码/密码间隔（秒）';
$string['rotateqrcodeinterval_desc'] = '自动刷新二维码/密码的时间间隔（秒）。';
$string['save'] = '保存考勤记录';
$string['saveandshownext'] = '保存并显示下一页';
$string['scantime'] = '扫描时间';
$string['scantime_help'] = '这允许在导入文件中包含一个时间戳 - 它将尝试转换使用 PHP strtotime 函数传递的时间戳，然后使用出勤状态设置来决定为用户设置何种状态';
$string['search:activity'] = '考勤 - 时段活动信息';
$string['selectactivity'] = '选择时段活动';
$string['session'] = '课时';
$string['session_help'] = '课时';
$string['sessionadded'] = '成功添加课时';
$string['sessionalreadyexists'] = '此日期已存在课时';
$string['sessiondate'] = '日期';
$string['sessiondays'] = '上课天数';
$string['sessiondeleted'] = '成功删除课时';
$string['sessiondescription'] = '课时描述';
$string['sessionduplicate'] = '课程 {$a->course}的考勤: {$a->activity}, {$a->date}有重复课时';
$string['sessionexist'] = '未添加课时（已经存在）';
$string['sessiongenerated'] = '一个课时被成功创建';
$string['sessions'] = '课时';
$string['sessionsallcourses'] = '全部课程';
$string['sessionsbyactivity'] = '考勤实例';
$string['sessionsbycourse'] = '课程';
$string['sessionsbydate'] = '周';
$string['sessionscompleted'] = '已签到课时';
$string['sessionscurrentcourses'] = '当前课程';
$string['sessionsgenerated'] = '已成功创建{$a}个课时';
$string['sessionsids'] = '课时ID:';
$string['sessionsnotfound'] = '所选时间段内没有课时';
$string['sessionstartdate'] = '课时开始日';
$string['sessionstotal'] = '课时总数';
$string['sessionsupdated'] = '课时已更新';
$string['sessiontype'] = '类型';
$string['sessiontype_help'] = '您可为所有学生或小组添加课时。是否能添加取决于小组模式：

* 无小组：您仅能为所有学生添加；
* 独立小组：您仅能为小组添加；
* 公开小组：您可为所有学生及小组添加。';
$string['sessiontypeshort'] = '类型';
$string['sessionunknowngroup'] = '该时段指定了未知组： {$a}';
$string['sessionupdated'] = '成功更新课时';
$string['set_by_student'] = '自主登记';
$string['setallstatuses'] = '设置状态';
$string['setallstatusesto'] = '设置状态为«{$a}»';
$string['setperiod'] = '释放IP的指定时间（分钟）';
$string['settings'] = '设置';
$string['setunmarked'] = '未签到时自动状态';
$string['setunmarked_help'] = '若在课时中启用，则在学生未自主签到时设为此状态。';
$string['showdefaults'] = '显示默认值';
$string['showduration'] = '显示时长';
$string['showextrauserdetails'] = '显示额外的用户信息';
$string['showqrcode'] = '显示二维码';
$string['showsessiondescriptiononreport'] = '在报告中显示课时描述';
$string['showsessiondescriptiononreport_desc'] = '在考勤列表里显示课时描述。';
$string['showsessiondetails'] = '显示课时详细';
$string['somedisabledstatus'] = '（由于课时已开始，一些选项已被移除。）';
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
$string['strftimedmyhm'] = '%d %b %Y %I. %p %M';
$string['strftimedmyw'] = '<nobr>%Y-%m-%d %a</nobr>';
$string['strftimeh'] = '%p %I:00';
$string['strftimehm'] = '%p %I:%M';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentid'] = '学生ID';
$string['studentmarked'] = '您本课时已成功记录考勤。';
$string['studentmarking'] = '学生记录';
$string['studentpassword'] = '学生密码';
$string['studentrecordingexpanded'] = '展开学生记录';
$string['studentrecordingexpanded_desc'] = '创建新课时时，默认展开显示“学生记录”设置。';
$string['studentscanmark'] = '允许学生自主签到';
$string['studentscanmark_desc'] = '若选中此项，教师将能够允许学生自主签到。';
$string['studentscanmark_help'] = '若勾选，学生将可自主更改其课时的考勤状态。';
$string['studentscanmarksessiontime'] = '学生在课程期间记录考勤';
$string['studentscanmarksessiontime_desc'] = '若选中此项，学生仅可在课程期间记录其考勤情况。';
$string['studentscanmarksessiontimeend'] = '课时结束（分钟）';
$string['studentscanmarksessiontimeend_desc'] = '若课时无结束时间，则本课时允许学生自主考勤的时长(分钟)。';
$string['studentsearlyopentime'] = '提前课时以签到';
$string['studentsearlyopentime_help'] = '这允许教师将课时提前，以便在课时实际开始前进行考勤。';
$string['submit'] = '提交';
$string['submitattendance'] = '提交考勤';
$string['submitattendancefuture'] = '报告将来的缺勤';
$string['submitpassword'] = '提交密码';
$string['subnet'] = '子网';
$string['subnetactivitylevel'] = '允许在活动级别配置子网';
$string['subnetactivitylevel_desc'] = '若启用，教师可在创建考勤时覆盖活动级别的默认子网；否则，将使用站点默认设置。';
$string['subnetwrong'] = '仅可从特定位置记录，并且此计算机不在白名单中。';
$string['summary'] = '摘要';
$string['tablerenamefailed'] = '将旧的attforblock表重命名为考勤失败';
$string['tactions'] = '操作';
$string['takeattendance'] = '考勤';
$string['takensessions'] = '已签到课时';
$string['tcreated'] = '创建';
$string['tempaddform'] = '添加临时用户';
$string['tempexists'] = '已有使用此电子邮件地址的临时用户';
$string['temptable'] = '临时用户列表';
$string['tempuser'] = '临时用户';
$string['tempusermerge'] = '合并临时用户';
$string['tempusers'] = '临时用户';
$string['tempusersedit'] = '编辑临时用户';
$string['tempuserslist'] = '临时用户';
$string['thirdpartyemails'] = '通知其他用户';
$string['thirdpartyemails_help'] = '将收到通知的其他用户列表。（需要 mod/attendance:viewreports 功能）';
$string['thirdpartyemailsubject'] = '考勤提醒';
$string['thirdpartyemailtext'] = '{$a->firstname} {$a->lastname} 在课程 {$a->coursename} {$a->aname} 中的出勤低于 {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = '您收到此通知是因为本课程教师已将您的电子邮件添加到收件人列表中';
$string['thiscourse'] = '此课程';
$string['time'] = '时间';
$string['timeahead'] = '超过一年的多个课时不能创建，请调整开始和结束日期。';
$string['timemodified'] = '时间已修改';
$string['timetaken'] = '已记录考勤时间';
$string['to'] = '至：';
$string['todate'] = '至今';
$string['totalnumsessions'] = '总课时数';
$string['triggered'] = '首次通知';
$string['tuseremail'] = '电子邮件';
$string['tusername'] = '全名';
$string['ungraded'] = '未评分课时';
$string['unknowngroup'] = '未知小组';
$string['unknownstatus'] = '未知状态ID: {$a}';
$string['update'] = '更新';
$string['updateattendance'] = '更新考勤';
$string['uploadattendance'] = '通过 CSV 上传考勤';
$string['usedefaultsubnet'] = '使用默认值';
$string['usemessageform'] = '或使用下方表单向选定的学生发送消息';
$string['userexistingstatus'] = '您的出勤情况已被标记为：<strong>{$a}</strong>。若需要，请使用下方表单进行更改。';
$string['userexists'] = '已经有真实用户使用了这个电子邮件地址';
$string['userid'] = '用户ID';
$string['userimportfield'] = '展开用户字段';
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
$string['warnafter'] = '发出警告前的出勤次数';
$string['warnafter_help'] = '仅当用户已被记录考勤达到此次数后，才会触发警告。';
$string['warningdeleted'] = '警告已删除';
$string['warningdesc'] = '这些警告将被自动添加到所有新的签到活动中。如果在完全相同的时间内触发多个警告，则只发送具有较低警告阈值的警告。';
$string['warningdesc_course'] = '警告阈值在此处设置会影响缺勤报告，并允许学生和第三方接收通知。如果同时触发多个警告，则仅会发送警告阈值较低的警告。';
$string['warningfailed'] = '您无法创建使用相同百分比和课时数的警告。';
$string['warningpercent'] = '若百分比低于';
$string['warningpercent_help'] = '当总百分比低于此数值时，将触发警告。';
$string['warnings'] = '警告设置';
$string['warningthreshold'] = '警告阈值';
$string['warningupdated'] = '更新警告';
$string['week'] = '周';
$string['weekcommencing'] = '本周开始';
$string['weeks'] = '周';
$string['youcantdo'] = '什么都不能做';
