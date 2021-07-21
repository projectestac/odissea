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
 * Strings for component 'assign', language 'zh_cn', version '3.11'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = '您有需要留意的作业';
$string['addattempt'] = '允许重做';
$string['addnewattempt'] = '添加新尝试';
$string['addnewattempt_help'] = '这将创建一个新的空白作业供您使用。';
$string['addnewattemptfromprevious'] = '基于先前提交的作业添加新尝试';
$string['addnewattemptfromprevious_help'] = '这会将您先前提交的作业复制到新作业中，以供您使用。';
$string['addnewgroupoverride'] = '添加组覆盖';
$string['addnewuseroverride'] = '添加用户覆盖';
$string['addsubmission'] = '添加作业';
$string['addsubmission_help'] = '您还没有交作业。';
$string['allocatedmarker'] = '分配的批改人';
$string['allocatedmarker_help'] = '分配给该作业的批改人。';
$string['allowsubmissions'] = '允许用户继续提交该作业。';
$string['allowsubmissionsanddescriptionfromdatesummary'] = '作业详情和提交表单将从<strong>{$a}</strong>可以获取';
$string['allowsubmissionsfromdate'] = '允许提交';
$string['allowsubmissionsfromdate_help'] = '如果启用了此选项，在此日期前，学生不能提交作业。如果禁用此选项，则学生马上就可以提交作业。';
$string['allowsubmissionsfromdatesummary'] = '此作业将从<strong>{$a}</strong>起接受提交';
$string['allowsubmissionsshort'] = '允许更改作业';
$string['alwaysshowdescription'] = '总是显示描述';
$string['alwaysshowdescription_help'] = '如果禁用，以上作业描述将只在“允许提交”日期对学生可见。';
$string['applytoteam'] = '将成绩和反馈应用到整个小组';
$string['assign:addinstance'] = '添加新作业';
$string['assign:editothersubmission'] = '编辑其他学生的作业';
$string['assign:exportownsubmission'] = '导出自己的作业';
$string['assign:grade'] = '评分作业';
$string['assign:grantextension'] = '准许延期';
$string['assign:manageallocations'] = '管理分配了作业的批改人';
$string['assign:managegrades'] = '检查并公布成绩';
$string['assign:manageoverrides'] = '管理作业覆盖';
$string['assign:receivegradernotifications'] = '接收作业评分提醒';
$string['assign:releasegrades'] = '公布成绩';
$string['assign:revealidentities'] = '公开学生身份';
$string['assign:reviewgrades'] = '检查成绩';
$string['assign:showhiddengrader'] = '看见隐藏的评分人的身份';
$string['assign:submit'] = '提交作业';
$string['assign:view'] = '查看作业';
$string['assign:viewblinddetails'] = '启用盲批时查看学生身份';
$string['assign:viewgrades'] = '查看成绩';
$string['assignfeedback'] = '反馈插件';
$string['assignfeedbackpluginname'] = '反馈插件';
$string['assignmentisdue'] = '作业到期';
$string['assignmentmail'] = '{$a->grader}已经给您的作业“{$a->assignment}”提供了一些反馈

您可以看到它附加在您的作业：

{$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader}已经给您的作业“<i>{$a->assignment}</i>”，提供了一些反馈。</p><p>您可以看到它附加在您的<a href="{$a->url}">作业</a>。</p>';
$string['assignmentmailsmall'] = '{$a->grader}已经给您的作业“{$a->assignment}”提供了一些反馈，您可以看到它附加在您的作业';
$string['assignmentname'] = '作业名称';
$string['assignmentplugins'] = '作业插件';
$string['assignmentsperpage'] = '每页作业数';
$string['assignsubmission'] = '提交插件';
$string['assignsubmissionpluginname'] = '提交插件';
$string['attemptheading'] = '尝试 {$a->attemptnumber}：{$a->submissionsummary}';
$string['attempthistory'] = '先前的尝试';
$string['attemptnumber'] = '尝试数';
$string['attemptreopenmethod'] = '尝试重开';
$string['attemptreopenmethod_help'] = '确定如何重新开启学生作业尝试。可用的选项有:

* 从不 - 不能重新开启。
* 手动 - 作业可以由教师重新开启。
* 自动直到及格 - 作业自动重新开启，直到学生作业成绩达到成绩册设置的及格成绩。';
$string['attemptreopenmethod_manual'] = '手动';
$string['attemptreopenmethod_none'] = '从不';
$string['attemptreopenmethod_untilpass'] = '自动开启直到及格';
$string['attemptsettings'] = '尝试设置';
$string['availability'] = '可用性';
$string['backtoassignment'] = '回到作业';
$string['batchoperationconfirmaddattempt'] = '允许重做选定的作业吗?';
$string['batchoperationconfirmdownloadselected'] = '下载选定的作业吗？';
$string['batchoperationconfirmgrantextension'] = '同意所有选定的作业延期吗？';
$string['batchoperationconfirmlock'] = '锁定所有选定的作业吗？';
$string['batchoperationconfirmremovesubmission'] = '移除选定的作业吗？';
$string['batchoperationconfirmreverttodraft'] = '将选定的作业退回到草稿状态吗？';
$string['batchoperationconfirmsetmarkingallocation'] = '为所有选定的作业设置批改分配吗？';
$string['batchoperationconfirmsetmarkingworkflowstate'] = '为所有选定的作业设置批改工作流程状态吗？';
$string['batchoperationconfirmunlock'] = '解锁所有选定的作业吗？';
$string['batchoperationlock'] = '锁定作业';
$string['batchoperationreverttodraft'] = '退回作业到草稿';
$string['batchoperationsdescription'] = '对选中的各项…';
$string['batchoperationunlock'] = '解锁作业';
$string['batchsetallocatedmarker'] = '为{$a}位选定的用户分配批改人。';
$string['batchsetmarkingworkflowstateforusers'] = '为{$a}位选定的用户设置批改工作流程状态。';
$string['blindmarking'] = '盲批';
$string['blindmarking_help'] = '盲批，批改人看不到学生的身份信息。一旦完成了与该作业相关的提交或评分，盲批设置将被锁定。';
$string['blindmarkingenabledwarning'] = '此活动已启用盲批。';
$string['calendardue'] = '{$a} 已到期';
$string['calendargradingdue'] = '{$a} 等待评分中';
$string['changefilters'] = '变更过滤器';
$string['changeuser'] = '变更用户';
$string['choosegradingaction'] = '评分操作';
$string['choosemarker'] = '选择…';
$string['chooseoperation'] = '选择操作';
$string['clickexpandreviewpanel'] = '点击展开检查面板';
$string['collapsegradepanel'] = '折叠评分面板';
$string['collapsereviewpanel'] = '折叠检查面板';
$string['comment'] = '评论';
$string['completionsubmit'] = '学生必须提交才可以完成此活动。';
$string['configshowrecentsubmissions'] = '任何人都可以在最近的活动报表中看到作业通知。';
$string['confirmbatchgradingoperation'] = '您确定您要对 {$a->count} 名学生进行{$a->operation}操作吗?';
$string['confirmsubmission'] = '您确定要提交作业进行评分吗?提交后，您将不能再进行任何更改。';
$string['confirmsubmissionheading'] = '确认作业';
$string['conversionexception'] = '无法转换作业。异常是：{$a}。';
$string['couldnotconvertgrade'] = '无法转换用户{$a}的作业成绩。';
$string['couldnotconvertsubmission'] = '无法转换用户{$a}的作业。';
$string['couldnotcreatecoursemodule'] = '无法创建课程模块。';
$string['couldnotcreatenewassignmentinstance'] = '无法创建新作业实例。';
$string['couldnotfindassignmenttoupgrade'] = '找不到要升级的旧作业实例。';
$string['crontask'] = '后台处理作业模块';
$string['currentassigngrade'] = '当前作业成绩';
$string['currentattempt'] = '这是第{$a}次尝试。';
$string['currentattemptof'] = '这是第{$a->attemptnumber}次尝试(允许尝试{$a->maxattempts}次)';
$string['currentgrade'] = '成绩册中的当前成绩';
$string['cutoffdate'] = '截止日期';
$string['cutoffdate_help'] = '如果设置，则该作业将在此日期之后不接受任何未获延期的提交。';
$string['cutoffdatecolon'] = '截止日期：{$a}';
$string['cutoffdatefromdatevalidation'] = '截止日期不能早于允许提交日期。';
$string['cutoffdatevalidation'] = '截止日期不能早于到期日期。';
$string['defaultlayout'] = '恢复默认的布局';
$string['defaultsettings'] = '默认的作业设置';
$string['defaultsettings_help'] = '这些设置定义所有新作业的默认设置。';
$string['defaultteam'] = '默认小组';
$string['deleteallsubmissions'] = '删除所有作业';
$string['description'] = '描述';
$string['disabled'] = '已禁用';
$string['downloadall'] = '下载所有作业';
$string['downloadasfolders'] = '以文件夹下载作业';
$string['downloadasfolders_help'] = '作业可以以文件夹下载。然后将每个作业放到一个单独的文件夹中，保留所有子文件夹的结构，文件没有重命名。';
$string['downloadselectedsubmissions'] = '下载选定的作业';
$string['duedate'] = '到期日期';
$string['duedate_help'] = '这是作业什么时候到期。到期后仍然允许学生提交作业，但所交作业会被标记为迟交。如果想在某个日期后阻止学生提交作业，则可以设置作业截止日期。';
$string['duedatecolon'] = '到期日期：{$a}';
$string['duedateno'] = '没有到期日期';
$string['duedatereached'] = '此作业的到期日期现已过去';
$string['duedatevalidation'] = '到期日期不能早于允许提交日期';
$string['duplicateoverride'] = '复制覆盖';
$string['editaction'] = '操作…';
$string['editattemptfeedback'] = '编辑第{$a}次尝试的成绩和反馈。';
$string['editingpreviousfeedbackwarning'] = '您正在编辑一个先前尝试的反馈。这是第{$a->attemptnumber}/{$a->totalattempts}次尝试。';
$string['editingstatus'] = '编辑状态';
$string['editonline'] = '在线编辑';
$string['editoverride'] = '编辑覆盖';
$string['editsubmission'] = '编辑作业';
$string['editsubmission_help'] = '您仍然可以修改您的作业。';
$string['editsubmissionother'] = '编辑{$a}的作业';
$string['enabled'] = '已启用';
$string['errornosubmissions'] = '没有可下载的作业';
$string['errorquickgradingvsadvancedgrading'] = '未保存成绩，因为此作业当前正在使用高级评分方法';
$string['errorrecordmodified'] = '未保存成绩，因为在您加载此页面之前有人修改了一条或多条记录。';
$string['eventallsubmissionsdownloaded'] = '所有作业均已下载。';
$string['eventassessablesubmitted'] = '一个作业已提交。';
$string['eventbatchsetmarkerallocationviewed'] = '批量设置批改人分配已查看';
$string['eventbatchsetworkflowstateviewed'] = '批量设置工作流程状态已查看。';
$string['eventextensiongranted'] = '已获准延期。';
$string['eventfeedbackupdated'] = '反馈已更新';
$string['eventfeedbackviewed'] = '反馈已查看';
$string['eventgradingformviewed'] = '评分表单已查看';
$string['eventgradingtableviewed'] = '评分表已查看';
$string['eventidentitiesrevealed'] = '身份已公开。';
$string['eventmarkerupdated'] = '分配的批改人已更新';
$string['eventoverridecreated'] = '作业覆盖已创建';
$string['eventoverridedeleted'] = '作业覆盖已删除';
$string['eventoverrideupdated'] = '作业覆盖已更新';
$string['eventremovesubmissionformviewed'] = '移除作业确认已查看。';
$string['eventrevealidentitiesconfirmationpageviewed'] = '公开身份确认页已查看。';
$string['eventstatementaccepted'] = '用户已接受作业声明。';
$string['eventsubmissionconfirmationformviewed'] = '作业确认表单已查看。';
$string['eventsubmissioncreated'] = '作业已创建。';
$string['eventsubmissionduplicated'] = '用户已复制他们的作业。';
$string['eventsubmissionformviewed'] = '作业表单已查看。';
$string['eventsubmissiongraded'] = '作业已评分。';
$string['eventsubmissionlocked'] = '用户的作业已锁定。';
$string['eventsubmissionstatusupdated'] = '作业状态已更新。';
$string['eventsubmissionstatusviewed'] = '作业状态已查看。';
$string['eventsubmissionunlocked'] = '用户的作业已解锁。';
$string['eventsubmissionupdated'] = '作业已更新。';
$string['eventsubmissionviewed'] = '作业已查看。';
$string['eventworkflowstateupdated'] = '工作流程状态已更新。';
$string['expandreviewpanel'] = '展开检查面板';
$string['extensionduedate'] = '延长到期日期';
$string['extensionnotafterduedate'] = '延期日期必须在到期日期后面';
$string['extensionnotafterfromdate'] = '延期日期必须在允许提交日期后面';
$string['feedback'] = '反馈';
$string['feedbackavailableanonhtml'] = '您的作业"<i>{$a->assignment}</i>"有新的反馈：<br /><br />您可以看到它附加在您的<a href="{$a->url}">作业</a>。';
$string['feedbackavailableanonsmall'] = '作业{$a->assignment}的新反馈';
$string['feedbackavailableanontext'] = '您的作业"{$a->assignment}"有新反馈：您可以看到它附加在您的作业：{$a->url}';
$string['feedbackavailablehtml'] = '{$a->username}已经给您的作业“<i>{$a->assignment}</i>”，提供了一些反馈。<br/><br/>
您可以看到它附加在您的<a href="{$a->url}">作业</a>。';
$string['feedbackavailablesmall'] = '{$a->username}已经为作业{$a->assignment}提供了反馈';
$string['feedbackavailabletext'] = '{$a->username}已经给您的作业“{$a->assignment}”提供了一些反馈。

您可以看到它附加在您的作业：

{$a->url}';
$string['feedbackplugin'] = '反馈插件';
$string['feedbackpluginforgradebook'] = '反馈插件，推送评论到成绩册';
$string['feedbackpluginforgradebook_help'] = '只有一个作业反馈插件可以推送反馈到成绩册。';
$string['feedbackplugins'] = '反馈插件';
$string['feedbacksettings'] = '反馈设置';
$string['feedbacktypes'] = '反馈类型';
$string['filesubmissions'] = '文件作业';
$string['filter'] = '过滤器';
$string['filtergrantedextension'] = '准予延期';
$string['filternone'] = '没有过滤器';
$string['filternotsubmitted'] = '没有提交';
$string['filterrequiregrading'] = '待评分';
$string['filtersubmitted'] = '已提交';
$string['fixrescalednullgrades'] = '此作业包含一些错误成绩。您可以<a href="{$a->link}">自动修正这些错误</a>。这可能会影响课程总成绩。';
$string['fixrescalednullgradesconfirm'] = '您确定要修正错误的成绩吗?所有受影响的成绩会被移除。这可能会影响课程总成绩。';
$string['fixrescalednullgradesdone'] = '成绩已修正。';
$string['gradeabovemaximum'] = '成绩必须小于等于{$a}。';
$string['gradebelowzero'] = '成绩必须大于等于0。';
$string['gradecanbechanged'] = '允许更改成绩';
$string['gradechangessaveddetail'] = '成绩和反馈的更改已保存';
$string['graded'] = '已评分';
$string['gradedby'] = '评分人';
$string['gradedfollowupsubmit'] = '已评分-继续已收到的作业';
$string['gradedon'] = '评分于';
$string['gradeitem:submissions'] = '作业';
$string['gradelocked'] = '此成绩在成绩册中被锁定或覆盖。';
$string['gradeoutof'] = '满分{$a}分';
$string['gradeoutofhelp'] = '成绩';
$string['gradeoutofhelp_help'] = '在此处输入学生作业的成绩。可以包含小数。';
$string['gradersubmissionupdatedhtml'] = '{$a->username}已经更新了他们的作业<i>“{$a->assignment}\'”于 {$a->timeupdated}</i><br /><br /><a href="{$a->url}">可以在网站查看</a>。';
$string['gradersubmissionupdatedsmall'] = '{$a->username} 已经更新了他们的作业{$a->assignment}。';
$string['gradersubmissionupdatedtext'] = '{$a->username}于{$a->timeupdated}更新了他们的作业“{$a->assignment}” 。

可以在这里查看： {$a->url}';
$string['gradestudent'] = '评分学生：(ID={$a->id}，姓名={$a->fullname})。';
$string['gradeuser'] = '成绩 {$a}';
$string['grading'] = '评分';
$string['gradingchangessaved'] = '成绩更改已保存';
$string['gradingduedate'] = '提醒我评分';
$string['gradingduedate_help'] = '作业应该完成批改的预计日期。该日期用于为教师设置个人主页通知的优先级。';
$string['gradingdueduedatevalidation'] = '提醒我评分的日期不能早于到期日期。';
$string['gradingduefromdatevalidation'] = '提醒我评分的日期不能早于允许提交日期。';
$string['gradingmethodpreview'] = '评分标准';
$string['gradingoptions'] = '选项';
$string['gradingstatus'] = '评分状态';
$string['gradingstudent'] = '评分学生';
$string['gradingsummary'] = '评分概要';
$string['grantextension'] = '准许延期';
$string['grantextensionforusers'] = '准许学生{$a}延期';
$string['groupoverrides'] = '小组覆盖';
$string['groupoverridesdeleted'] = '小组覆盖已删除';
$string['groupsnone'] = '没有可以访问的小组。';
$string['groupsubmissionsettings'] = '小组作业设置';
$string['hiddenuser'] = '参与人';
$string['hidegrader'] = '向学生隐藏评分人的身份';
$string['hidegrader_help'] = '如果启用，则不会显示任何为作业评分的用户的身份，因此学生无法看到谁批改他们的作业。

请注意，此设置对评分页上的评论框无效。';
$string['hideshow'] = '隐藏 / 显示';
$string['inactiveoverridehelp'] = '* 由于用户对活动的访问受到限制，因此该覆盖无效。这可能是由于小组或角色分配，其他访问限制或活动被隐藏。';
$string['indicator:cognitivedepth'] = '作业认知深度';
$string['indicator:cognitivedepth_help'] = '这个指标是基于学生在作业活动中所达到的认知深度。';
$string['indicator:cognitivedepthdef'] = '作业认知深度';
$string['indicator:cognitivedepthdef_help'] = '在此分析间隔内，参与人已经达到了作业活动所提供的认知参与度(级别=未查看、查看、提交、查看反馈、评论反馈、查看反馈后重新提交)';
$string['indicator:socialbreadth'] = '作业社会广度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在作业活动中所达到的社会广度。';
$string['indicator:socialbreadthdef'] = '作业社会广度';
$string['indicator:socialbreadthdef_help'] = '在此分析间隔内，参与人达到了作业活动所提供的社会参与度(级别=没有参与，单独参与，和他人一起参与)';
$string['instructionfiles'] = '说明文件';
$string['introattachments'] = '附加文件';
$string['introattachments_help'] = '可以添加在作业中使用的附加文件，例如答案模板，可以下载。文件的下载链接将显示在作业页面描述的下面。';
$string['invalidfloatforgrade'] = '该成绩格式不对：{$a}';
$string['invalidgradeforscale'] = '提供的成绩不适用于当前量表';
$string['invalidoverrideid'] = '无效的覆盖 ID';
$string['lastmodifiedgrade'] = '上次修改（评分）';
$string['lastmodifiedsubmission'] = '上次修改（作业）';
$string['latesubmissions'] = '迟交';
$string['latesubmissionsaccepted'] = '允许到{$a}';
$string['loading'] = '载入中……';
$string['locksubmissionforstudent'] = '阻止该学生再次提交：(ID={$a->id}, 姓名={$a->fullname})。';
$string['locksubmissions'] = '锁定作业';
$string['manageassignfeedbackplugins'] = '管理作业反馈插件';
$string['manageassignsubmissionplugins'] = '管理作业提交插件';
$string['marker'] = '批改人';
$string['markerfilter'] = '批改人过滤器';
$string['markerfilternomarker'] = '没有批改人';
$string['markingallocation'] = '使用批改分配';
$string['markingallocation_help'] = '如果启用，与批改工作流程一起，批改人可以被分配给特定的学生。';
$string['markingworkflow'] = '使用批改工作流程';
$string['markingworkflow_help'] = '如果启用，分数将经过一系列工作流程阶段，然后公布给学生。这允许多轮批改，并允许分数在同一时间公布给所有学生。';
$string['markingworkflowstate'] = '批改工作流程状态';
$string['markingworkflowstate_help'] = '工作流程状态可能包含（取决于您的权限）：

* 未批改 - 批改还没开始
* 批改中 - 批改已开始但未结束
* 批改完成 - 批改已经结束，但仍可能需要检查或修正
* 复查中 - 批改现在交给负责质量检查的教师
* 准备公布 - 负责教师对批改感到满意，但仍在等待，然后再给予学生访问批改的权限
* 已公布 - 学生可以访问成绩/反馈';
$string['markingworkflowstateinmarking'] = '批改中';
$string['markingworkflowstateinreview'] = '复查中';
$string['markingworkflowstatenotmarked'] = '未批改';
$string['markingworkflowstatereadyforrelease'] = '准备公布';
$string['markingworkflowstatereadyforreview'] = '批改完成';
$string['markingworkflowstatereleased'] = '已公布';
$string['maxattempts'] = '最多尝试';
$string['maxattempts_help'] = '学生能够尝试作业的最多次数。超过此数目后，作业不再重新开启。';
$string['maxgrade'] = '最高分';
$string['maxperpage'] = '每页最大作业数';
$string['maxperpage_help'] = '评分人可以在作业评分页面中显示的最大作业数。此设置对于防止参与人众多的课程超时很有用。';
$string['messageprovider:assign_notification'] = '作业通知';
$string['modulename'] = '作业';
$string['modulename_help'] = '作业活动模块允许教师布置作业，收集作品并提供成绩和反馈。

学生可以提交任意数字化内容（文件），比如文字处理文档、电子表格、图片或音频视频。此外，作业还可以要求学生直接在文本编辑器中输入文本。作业也可以用来提醒学生他们需要离线完成的“真实世界”中的作业，比如手工作品，不需要任何数字内容。学生可以单独提交作业，也可以作为小组的一员提交。

批改作业时，教师可以留下反馈意见，还可以上传文件，例如加了批注的学生作业、有评语的文档或语音反馈。作业可以使用数值或自定义量表或高级评分方法(如红批)进行评分。最终成绩记录在成绩册上。';
$string['modulenameplural'] = '作业';
$string['moreusers'] = '{$a} 更多…';
$string['multipleteams'] = '多个小组的成员';
$string['multipleteams_desc'] = '此作业要求小组提交。您是多个小组的成员。您必须只是一个小组的成员才能提交。请联系您的老师更改您的小组成员身份。';
$string['multipleteamsgrader'] = '您同时属于多个小组的成员，因此无法提交作业。';
$string['mysubmission'] = '我的作业：';
$string['newsubmissions'] = '已提交的作业';
$string['noattempt'] = '没有尝试';
$string['noclose'] = '没有关闭日期';
$string['nofiles'] = '没有文件。';
$string['nofilters'] = '没有过滤器';
$string['nograde'] = '没有成绩。';
$string['nolatesubmissions'] = '不接受迟交。 ‎';
$string['nomoresubmissionsaccepted'] = '只允许获准延期的参与人';
$string['none'] = '没有';
$string['noonlinesubmissions'] = '此作业不需要您在线提交任何东西';
$string['noopen'] = '没有开启日期';
$string['nooverridedata'] = '您必须至少覆盖一个作业设置。';
$string['nosavebutnext'] = '向后';
$string['nosubmission'] = '此作业还没有提交任何东西';
$string['nosubmissionsacceptedafter'] = '此后不接受作业';
$string['noteam'] = '不是任何小组的成员';
$string['noteam_desc'] = '此作业要求小组提交。您不是任何小组的成员, 因此不能提交作业。请联系您的老师把您添加到一个小组。';
$string['noteamgrader'] = '您不是任何小组的成员 ，因此无法提交作业。';
$string['notgraded'] = '未评分';
$string['notgradedyet'] = '还未评分';
$string['notifications'] = '通知';
$string['notsubmittedyet'] = '还未提交';
$string['nousers'] = '没有用户';
$string['nousersselected'] = '没有选定的用户';
$string['numberofdraftsubmissions'] = '草稿';
$string['numberofparticipants'] = '参与人';
$string['numberofsubmissionsneedgrading'] = '需要评分';
$string['numberofsubmittedassignments'] = '已提交';
$string['numberofteams'] = '小组';
$string['offline'] = '不需要在线提交';
$string['open'] = '开启';
$string['outlinegrade'] = '成绩: {$a}';
$string['outof'] = '{$a->current}/ {$a->total}';
$string['overdue'] = '<font color="red">作业过期：{$a}</font>';
$string['override'] = '覆盖';
$string['overridedeletegroupsure'] = '您确定要删除小组{$a}的覆盖吗？';
$string['overridedeleteusersure'] = '您确定要删除用户{$a}的覆盖吗？';
$string['overridegroup'] = '覆盖小组';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overrides'] = '覆盖';
$string['overrideuser'] = '覆盖用户';
$string['overrideusereventname'] = '{$a->assign} - 覆盖';
$string['page-mod-assign-view'] = '作业模块主页和提交页';
$string['page-mod-assign-x'] = '任意作业模块页';
$string['paramtimeremaining'] = '仅剩 {$a}';
$string['participant'] = '参与人';
$string['pluginadministration'] = '作业管理';
$string['pluginname'] = '作业';
$string['preventsubmissionnotingroup'] = '要求小组作业';
$string['preventsubmissionnotingroup_help'] = '如果启用，非小组成员的用户将无法提交作业。';
$string['preventsubmissions'] = '阻止用户再次提交该作业。';
$string['preventsubmissionsshort'] = '阻止作业更改';
$string['previous'] = '向前';
$string['privacy:attemptpath'] = '尝试 {$a}';
$string['privacy:blindmarkingidentifier'] = '用于盲批的标识符';
$string['privacy:gradepath'] = '成绩';
$string['privacy:metadata:assigndownloadasfolders'] = '用户偏好，用于确定是否应将多个文件作业下载到文件夹中';
$string['privacy:metadata:assignfeedbackpluginsummary'] = '作业反馈数据。';
$string['privacy:metadata:assignfilter'] = '过滤器选项, 如 "已提交"、"未提交"、"待评分" 和 "准予延期"';
$string['privacy:metadata:assigngrades'] = '存储用户作业成绩';
$string['privacy:metadata:assignmarkerfilter'] = '按分配的批改人过滤分配概要。';
$string['privacy:metadata:assignmentid'] = '作业 ID';
$string['privacy:metadata:assignmessageexplanation'] = '消息通过消息系统发送给学生。';
$string['privacy:metadata:assignoverrides'] = '存储作业的覆盖信息';
$string['privacy:metadata:assignperpage'] = '每页显示的作业数。';
$string['privacy:metadata:assignquickgrading'] = '关于是否使用快速评分的偏好。';
$string['privacy:metadata:assignsubmissiondetail'] = '存储用户作业信息';
$string['privacy:metadata:assignsubmissionpluginsummary'] = '作业的提交数据。';
$string['privacy:metadata:assignuserflags'] = '存储用户元数据, 如延期日期';
$string['privacy:metadata:assignusermapping'] = '盲批的映射';
$string['privacy:metadata:assignworkflowfilter'] = '按不同的工作流程阶段过滤';
$string['privacy:metadata:grade'] = '作业的数值成绩，可以通过量表/高级评价表单等来确定, 但总是会转换为浮点数。';
$string['privacy:metadata:grader'] = '评分人员的用户 ID。';
$string['privacy:metadata:groupid'] = '用户所属小组的 ID。';
$string['privacy:metadata:latest'] = '极大地简化了只想了解有关最新尝试信息的查询。';
$string['privacy:metadata:mailed'] = '已发邮件给此用户了吗？';
$string['privacy:metadata:timecreated'] = '创建时间';
$string['privacy:metadata:userid'] = '用户 ID';
$string['privacy:studentpath'] = '学生作业';
$string['privacy:submissionpath'] = '作业';
$string['quickgrading'] = '快速评分';
$string['quickgrading_help'] = '快速评分允许您直接在作业表里分配评分（和成果）。快速评分与高级评分不兼容，当有多个批改人时，不推荐使用此评分方法。';
$string['quickgradingchangessaved'] = '成绩更改已保存';
$string['quickgradingresult'] = '快速评分';
$string['recordid'] = '标识符';
$string['relativedatessubmissionduedateafter'] = '课程开始后的{$a->datediffstr}';
$string['relativedatessubmissionduedatebefore'] = '课程开始前的{$a->datediffstr}';
$string['relativedatessubmissiontimeleft'] = '为每个学生计算';
$string['removeallgroupoverrides'] = '删除所有小组覆盖';
$string['removealluseroverrides'] = '删除所有用户覆盖';
$string['removesubmission'] = '移除作业';
$string['removesubmissionconfirm'] = '您确定要移除该作业数据吗?';
$string['removesubmissionconfirmforstudent'] = '您确定要移除学生{$a}的作业数据吗？';
$string['removesubmissionforstudent'] = '移除学生的作业： (ID={$a->id}, 姓名={$a->fullname})。';
$string['reopenuntilpassincompatiblewithblindmarking'] = '重新开启，直到盲批与及格选项不兼容，因为在公开学生身份之前，成绩不会公布到成绩册中。';
$string['requireallteammemberssubmit'] = '要求所有组成员提交';
$string['requireallteammemberssubmit_help'] = '如果启用，学生小组的所有成员必须点击此作业的提交按钮，该小组作业才视为已提交。如果禁用，则只要学生小组的任何成员点击提交按钮，小组作业就会视为已提交。';
$string['requiresubmissionstatement'] = '要求学生接受作业声明';
$string['requiresubmissionstatement_help'] = '要求学生为该作业的所有提交接受作业声明。';
$string['revealidentities'] = '公开学生身份';
$string['revealidentitiesconfirm'] = '您确定要在该作业中公开学生身份吗?此操作无法撤消。一旦学生身份被公开，分数将公布到成绩册上。';
$string['reverttodefaults'] = '恢复到作业默认值';
$string['reverttodraft'] = '退回该作业到草稿状态。';
$string['reverttodraftforstudent'] = '退回该学生的作业到草稿状态：(ID={$a->id}，姓名={$a->fullname})。';
$string['reverttodraftshort'] = '退回该作业到草稿';
$string['reviewed'] = '已复查';
$string['save'] = '保存';
$string['saveallquickgradingchanges'] = '保存所有快速评分更改';
$string['saveandcontinue'] = '保存并继续';
$string['savechanges'] = '保存更改';
$string['savegradingresult'] = '成绩';
$string['savenext'] = '保存并显示下一个';
$string['saveoverrideandstay'] = '保存并输入另一个覆盖';
$string['savingchanges'] = '保存更改…';
$string['scale'] = '量表';
$string['search:activity'] = '作业 - 活动信息';
$string['selectedusers'] = '选定的用户';
$string['selectlink'] = '选择…';
$string['selectuser'] = '选择 {$a}';
$string['sendlatenotifications'] = '迟交作业时通知评分人';
$string['sendlatenotifications_help'] = '如果启用，评分人（通常就是教师）会在学生迟交作业时收到一个消息。消息的发送方式可配置。';
$string['sendnotifications'] = '提交作业时通知评分人';
$string['sendnotifications_help'] = '如果启用，则评分人（通常是老师）会在学生提交作业时收到一条通知消息，不管是提前、按时，还是迟交均会收到。消息的发送方式可配置。';
$string['sendstudentnotifications'] = '通知学生';
$string['sendstudentnotifications_help'] = '如果启用，学生将收到关于成绩或反馈更新的消息。如果在该作业中启用了批改工作流程，在成绩“已公布”之前不会发送通知。';
$string['sendstudentnotificationsdefault'] = '"通知学生"的默认设置';
$string['sendstudentnotificationsdefault_help'] = '为评分表单上“通知学生”复选框设置默认值。';
$string['sendsubmissionreceipts'] = '发送作业收据给学生';
$string['sendsubmissionreceipts_help'] = '此开关为学生启用作业收据。学生每次成功提交作业都会收到通知。';
$string['setmarkerallocationforlog'] = '设置批改分配： (ID={$a->id}，姓名={$a->fullname}，批改人={$a->marker})。';
$string['setmarkingallocation'] = '设置分配的批改人';
$string['setmarkingworkflowstate'] = '设置批改工作流程状态';
$string['setmarkingworkflowstateforlog'] = '设置批改工作流程状态：(ID={$a->id}，姓名={$a->fullname}，状态={$a->state})。';
$string['settings'] = '作业设置';
$string['showrecentsubmissions'] = '显示最近的作业';
$string['status'] = '状态';
$string['studentnotificationworkflowstateerror'] = '批改工作流程状态必须是”已公布“才通知学生。';
$string['submission'] = '作业';
$string['submissioncopiedhtml'] = '<p>您已经为“<i>{$a->assignment}</i>”复制了一份先前的作业“。</p><p>您可以看到您的<a href="{$a->url}">作业</a>状态。</p>';
$string['submissioncopiedsmall'] = '您已为{$a-> assignment}复制了先前的作业';
$string['submissioncopiedtext'] = '您已经为“{$a-> assignment}”复制了先前的作业，您可以在 {$a->url} 看到您的作业状态。';
$string['submissiondrafts'] = '学生必须点击提交按钮';
$string['submissiondrafts_help'] = '如果启用，学生将必须单击提交按钮以声明其作业为最终作业。这使学生可以将作业的草稿版本保留在系统上。如果在学生提交后将此设置从“否”更改为“是”，则这些作业将被视为最终作业。';
$string['submissioneditable'] = '学生可以编辑此作业';
$string['submissionempty'] = '没有提交任何东西';
$string['submissionlog'] = '学生: {$a->fullname}, 状态: {$a->status}';
$string['submissionmodified'] = '您已有作业数据。请离开此页面，然后重试。';
$string['submissionmodifiedgroup'] = '该作业已被他人修改。请离开此页面，然后重试。';
$string['submissionnotcopiedinvalidstatus'] = '该作业未被复制，因为它在重新开启后被编辑过。';
$string['submissionnoteditable'] = '学生不能编辑此作业';
$string['submissionnotready'] = '此作业还没有准备提交：';
$string['submissionplugins'] = '提交插件';
$string['submissionreceipthtml'] = '<p>您已经提交了作业“<i>{$a->assignment}</i>”。</p>
 <p>您可以看到您的<a href="{$a->url}">作业</a>状态。</p>';
$string['submissionreceiptotherhtml'] = '您已经提交了作业“<i>{$a->assignment}</i>”。<br />
您可以看到您的<a href="{$a->url}">作业</a>状态。';
$string['submissionreceiptothersmall'] = '您已经提交了作业{$a->assignment}。';
$string['submissionreceiptothertext'] = '您已经提交了作业“<i>{$a->assignment}</i>”<br />
 您可以查看您的作业状态：{$a->url} 。';
$string['submissionreceipts'] = '发送作业收据';
$string['submissionreceiptsmall'] = '您已经提交了作业{$a->assignment}';
$string['submissionreceipttext'] = '您已经提交了作业“{$a->assignment}”。

您可以查看作业状态：{$a->url}';
$string['submissionsclosed'] = '作业已关闭';
$string['submissionsettings'] = '作业设置';
$string['submissionslocked'] = '此作业不接受提交';
$string['submissionslockedshort'] = '不允许更改作业';
$string['submissionsnotgraded'] = '未评分的作业：{$a}';
$string['submissionstatement'] = '作业声明';
$string['submissionstatement_help'] = '作业声明，每个学生必须接受才能提交他们的作业。';
$string['submissionstatementacceptedlog'] = '用户{$a}接受了作业声明';
$string['submissionstatementdefault'] = '此作业是我自己的作品，除非我承认使用了他人的作品。';
$string['submissionstatementteamsubmission'] = '小组作业声明';
$string['submissionstatementteamsubmission_help'] = '作业声明，每个学生必须接受才能提交他们小组的作业。';
$string['submissionstatementteamsubmissionallsubmit'] = '所有小组成员都提交的小组作业声明';
$string['submissionstatementteamsubmissionallsubmit_help'] = '作业声明，每个学生必须接受才能以小组成员的身份提交他们的作业。';
$string['submissionstatementteamsubmissionallsubmitdefault'] = '此作业是我作为小组成员自己的作品，除非我承认使用了他人的作品。';
$string['submissionstatementteamsubmissiondefault'] = '此作业是我们小组的作品，除非我们承认使用了他人的作品。';
$string['submissionstatus'] = '作业状态';
$string['submissionstatus_'] = '没有作业';
$string['submissionstatus_draft'] = '草稿（未提交）';
$string['submissionstatus_marked'] = '已评分';
$string['submissionstatus_new'] = '没有作业';
$string['submissionstatus_reopened'] = '重新开启';
$string['submissionstatus_submitted'] = '已提交请评分';
$string['submissionstatusheading'] = '作业状态';
$string['submissionsummary'] = '{$a->status}。最后修改时间： {$a->timemodified}';
$string['submissionteam'] = '小组';
$string['submissiontypes'] = '作业类型';
$string['submitaction'] = '提交';
$string['submitassignment'] = '提交作业';
$string['submitassignment_help'] = '作业提交后，您将不能再做任何更改。';
$string['submitforgrading'] = '提交以评分';
$string['submitted'] = '已提交';
$string['submittedearly'] = '作业早交{$a}';
$string['submittedlate'] = '作业迟交{$a}';
$string['submittedlateshort'] = '迟{$a}';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = '反馈插件';
$string['subplugintype_assignfeedback_plural'] = '反馈插件';
$string['subplugintype_assignsubmission'] = '提交插件';
$string['subplugintype_assignsubmission_plural'] = '提交插件';
$string['teamname'] = '团队：{$a}';
$string['teamsubmission'] = '学生小组提交';
$string['teamsubmission_help'] = '如果启用，则将根据默认小组或自定义大组将学生分为几个小组。小组作业将在小组成员之间共享，小组中的所有成员都将看到彼此对作业所做的更改。';
$string['teamsubmissiongroupingid'] = '学生小组的大组';
$string['teamsubmissiongroupingid_help'] = '这是作业将用于为学生小组找到小组的大组。如果没有设置，将使用小组的默认设置。';
$string['textinstructions'] = '作业说明';
$string['timemodified'] = '最后修改';
$string['timeremaining'] = '剩余时间';
$string['timeremainingcolon'] = '剩余时间：{$a}';
$string['togglezoom'] = '局部放大/缩小';
$string['ungroupedusers'] = '启用了“要求小组作业”设置，某些用户不是任何小组的成员，或者是多个小组的成员，因此无法提交作业。';
$string['ungroupedusersoptional'] = '启用了“学生小组提交”设置，某些用户不是任何小组的成员，或者是多个小组的成员。请注意，这些学生将作为“默认小组”的成员提交。';
$string['unlimitedattempts'] = '不限制';
$string['unlimitedattemptsallowed'] = '允许无限尝试。';
$string['unlimitedpages'] = '无限制';
$string['unlocksubmissionforstudent'] = '允许学生提交：(ID={$a->id}，姓名={$a->fullname})。';
$string['unlocksubmissions'] = '解锁作业';
$string['unsavedchanges'] = '更改未保存';
$string['unsavedchangesquestion'] = '成绩或反馈的更改未保存。您要保存更改并继续吗？';
$string['updategrade'] = '更新成绩';
$string['updatetable'] = '保存并更新表';
$string['upgradenotimplemented'] = '未在插件 ({$a->type} {$a->subtype}) 中实现升级';
$string['userassignmentdefaults'] = '用户作业默认值';
$string['userextensiondate'] = '延期到：{$a}';
$string['usergrade'] = '用户成绩';
$string['useridlistnotcached'] = '该成绩更改未保存。因为无法确定该成绩要保存到哪个作业。';
$string['useroverrides'] = '用户覆盖';
$string['useroverridesdeleted'] = '用户覆盖已删除';
$string['usersnone'] = '没有学生可以访问此作业。';
$string['usersubmissioncannotberemoved'] = '无法移除{$a}的作业。';
$string['userswhoneedtosubmit'] = '需要提交的用户：{$a}';
$string['validmarkingworkflowstates'] = '有效的批改工作流程状态';
$string['viewadifferentattempt'] = '查看不同的尝试';
$string['viewbatchmarkingallocation'] = '查看批量设置批改分配页面。';
$string['viewbatchsetmarkingworkflowstate'] = '查看批量设置批改工作流程状态页面。';
$string['viewfeedback'] = '查看反馈';
$string['viewfeedbackforuser'] = '查看用户反馈：{$a}';
$string['viewfull'] = '查看全部';
$string['viewfullgradingpage'] = '打开完整评分页面来提供反馈';
$string['viewgradebook'] = '查看成绩册';
$string['viewgrading'] = '查看所有作业';
$string['viewgradingformforstudent'] = '查看学生（ID={$a->id}，姓名={$a->fullname}）的评分页面。';
$string['viewownsubmissionform'] = '查看自己的提交作业页面。';
$string['viewownsubmissionstatus'] = '查看自己的作业状态页面。';
$string['viewrevealidentitiesconfirm'] = '查看公开学生身份确认页。';
$string['viewsubmission'] = '查看作业';
$string['viewsubmissionforuser'] = '查看用户作业：{$a}';
$string['viewsubmissiongradingtable'] = '查看作业评分表。';
$string['viewsummary'] = '查看概要';
$string['workflowfilter'] = '工作流程过滤器';
$string['xofy'] = '{$a->y}/{$a->x}';
