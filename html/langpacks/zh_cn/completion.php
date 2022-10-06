<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'completion', language 'zh_cn', branch 'MOODLE_38_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = '完成的成绩';
$string['activities'] = '活动';
$string['activitiescompleted'] = '活动完成情况';
$string['activitiescompletednote'] = '提醒：只有启用进度跟踪的活动才会出现在上面的列表之中。';
$string['activitieslabel'] = '活动/资源';
$string['activityaggregation'] = '条件满足情形';
$string['activityaggregation_all'] = '所有选中的活动都必须完成。';
$string['activityaggregation_any'] = '至少完成一个选中的活动。';
$string['activitycompletion'] = '活动进度';
$string['activitycompletionupdated'] = '修改已经保存';
$string['affectedactivities'] = '这些修改将影响以下<b>{$a}</b>活动或资源:';
$string['aggregationmethod'] = '汇总方法';
$string['all'] = '全部';
$string['any'] = '任意';
$string['approval'] = '认可';
$string['badautocompletion'] = '当您选择了自动完成时，您还必须激活至少一个前提（在下面）。';
$string['bulkactivitycompletion'] = '批量编辑活动完成设置';
$string['bulkactivitydetail'] = '选择您希望批量编辑的活动。';
$string['bulkcompletiontracking_help'] = '<strong>没有:</strong>不标示活动完成状态<br><strong>手工标记:</strong>学生可以手工标记此活动为完成状态<br><strong>有条件:</strong>当条件都满足时标记活动为完成状态';
$string['checkall'] = '勾选或取消勾选所有活动和资源';
$string['checkallsection'] = '勾选或取消勾选所有活动和资源在以下区域: {$a}';
$string['completed'] = '已完成';
$string['completedunlocked'] = '完成选项已解锁';
$string['completedunlockedtext'] = '保存修改后，所有学生的完成状态都会被删除。如果您改变了主意，就不要保存此表单。';
$string['completedwarning'] = '完成选项已锁定';
$string['completedwarningtext'] = '参与者{$a}已经标记这项活动为完成。改变完成选项会删除他们的完成状态记录，有可能导致混乱。因此，这些选项已被加锁。除非绝对必要，请不要解锁。';
$string['completion'] = '进度跟踪';
$string['completionactivitydefault'] = '用户活动默认设置';
$string['completion-alt-auto-enabled'] = '系统根据条件“{$a}”标记此项为完成';
$string['completion-alt-auto-fail'] = '已完成：{$a}（未及格）';
$string['completion-alt-auto-n'] = '未完成：{$a}';
$string['completion-alt-auto-n-override'] = '未完成: {$a->modname} (由 {$a->overrideuser}设置)';
$string['completion-alt-auto-pass'] = '已完成：{$a}（及格）';
$string['completion-alt-auto-y'] = '已完成：{$a}';
$string['completion-alt-auto-y-override'] = '已完成: {$a->modname} (由{$a->overrideuser}设置)';
$string['completion-alt-manual-enabled'] = '学生可以手工标记此项为完成：{$a}';
$string['completion-alt-manual-n'] = '未完成：{$a}。选择以标记为完成。';
$string['completion-alt-manual-n-override'] = '未完成：{$a->modname} (由 {$a->overrideuser}设置)。选择以标记为完成。';
$string['completion-alt-manual-y'] = '已完成：{$a}。选择以标记为未完成。';
$string['completion-alt-manual-y-override'] = '已完成: {$a->modname} (由{$a->overrideuser}设置)。选择以标记为未完成。';
$string['completion_automatic'] = '当条件都满足时，将活动标为完成';
$string['completiondefault'] = '完成进度跟踪默认设置';
$string['completiondisabled'] = '禁用，不在活动设置页面显示';
$string['completionduration'] = '环境';
$string['completionenabled'] = '启用，通过进度和活动设置来控制';
$string['completionexpected'] = '预期完成时间';
$string['completionexpected_help'] = '此选项设置此活动预期的完成日期。这个日期只显示在活动进度报告中，不会显示给学生。';
$string['completion-fail'] = '已完成（未及格）';
$string['completion_help'] = '如果启用，将基于给定的条件，人工或自动跟踪活动的完成状态。如需要，可以设置多个条件，那么只有所有条件都满足时活动才被看作已完成。

在课程页面，当活动已完成时，活动名后面会有一个标记。
';
$string['completionicons'] = '完成状态标记框';
$string['completionicons_help'] = '当活动完成时，在活动名称边上有一个勾作为标记。
当一个虚线框出现的时候，当你根据老师设定的条件完成了活动之后，勾会自动出现。
当一个实线框出现的时候，如果你觉得你完成了任务，可以点击勾选。（如果改变主意了再点一次就可以去掉勾。）这个是可选的而且只是一种跟踪你课程进度的方式。';
$string['completion_manual'] = '学生可以手工标记此活动为完成';
$string['completionmenuitem'] = '进度';
$string['completion-n'] = '未完成';
$string['completion_none'] = '不标示活动完成状态';
$string['completionnotenabled'] = '进度跟踪功能未启用';
$string['completionnotenabledforcourse'] = '本课程未开启进度跟踪功能';
$string['completionnotenabledforsite'] = '本站未开启进度跟踪功能';
$string['completionondate'] = '日期';
$string['completionondatevalue'] = '用户必须在此日期之前一直保持选课';
$string['completion-pass'] = '已完成（及格）';
$string['completionsettingslocked'] = '完成设置已锁定';
$string['completionusegrade'] = '必须有成绩';
$string['completionusegrade_desc'] = '学生必须获得成绩才能完成此活动';
$string['completionusegrade_help'] = '如果激活，此活动在学生获得成绩时被标记为完成。如果活动设置了及格线，那么会显示及格或未及格图标。';
$string['completionview'] = '必须浏览';
$string['completionview_desc'] = '学生必须浏览此活动，才能完成它';
$string['completion-y'] = '已完成';
$string['configcompletiondefault'] = '当建立活动时，完成进度跟踪的默认设置';
$string['configenablecompletion'] = '启用后，您就可以在课程级别使用进度跟踪功能。';
$string['confirmselfcompletion'] = '确认自设完成';
$string['courseaggregation'] = '条件满足情形';
$string['courseaggregation_all'] = '所有选中的课程都必须完成。';
$string['courseaggregation_any'] = '至少完成一个选中的课程。';
$string['coursealreadycompleted'] = '你已经完成了这门课程';
$string['coursecomplete'] = '课程进度';
$string['coursecompleted'] = '课程已完成';
$string['coursecompletion'] = '课程进度';
$string['coursecompletioncondition'] = '满足条件: {$a}';
$string['coursegrade'] = '课程成绩';
$string['coursesavailable'] = '可用的课程';
$string['coursesavailableexplaination'] = '注意：课程必须先启用进度跟踪，才能出现在上面列表中。';
$string['criteria'] = '条件';
$string['criteriagroup'] = '条件组';
$string['criteriarequiredall'] = '必须满足以下所有条件';
$string['criteriarequiredany'] = '必须满足以下任一条件';
$string['csvdownload'] = '以电子表格格式（UTF-8.csv）下载';
$string['datepassed'] = '通过日期';
$string['days'] = '天数';
$string['daysoftotal'] = '{$a->days}天，总共有 {$a->total}天';
$string['defaultcompletion'] = '默认的活动完成设置';
$string['defaultcompletionupdated'] = '修改已经保存';
$string['deletecompletiondata'] = '删除已完成数据';
$string['dependencies'] = '依赖条件';
$string['dependenciescompleted'] = '完成其它课程';
$string['editcoursecompletionsettings'] = '编辑课程进度跟踪设置';
$string['enablecompletion'] = '启用进度跟踪';
$string['enablecompletion_help'] = '如果启用，活动完成情况将在活动设置页面和/或课程完成情况完成设置。';
$string['enrolmentduration'] = '选课持续时间';
$string['enrolmentdurationlength'] = '用户必须持续选课至少';
$string['err_noactivities'] = '没有任何活动启用了完成信息，所以什么都不能显示。您可以通过修改活动设置来启用完成信息。';
$string['err_nocourses'] = '没有其它课程启用课程进度跟踪功能，所以没有可显示的。您可以在课程设置中启用课程进度跟踪功能。';
$string['err_nograde'] = '此课程还未设置及格分数线。要想启用这种策略，您必须先为此课程创建及格数线。';
$string['err_noroles'] = '课程中没有任何角色有“moodle/course:markcomplete”权限。';
$string['err_nousers'] = '课程或小组中没有可以显示完成信息的学生。（缺省情况下，只显示学生的完成信息，所以没有学生的话，您就会看到这个错误。管理员可以修改此选项。）';
$string['err_settingslocked'] = '一个或多个学生已经完成了某条件，所以此设置被锁定。解锁完成条件设置将删除全部已有的用户数据，有可能造成不必要的麻烦。';
$string['err_system'] = '进度跟踪系统内部发生错误。（系统管理员可以激活调试信息来查看更多细节。）';
$string['eventcoursecompleted'] = '课程已完成';
$string['eventcoursecompletionupdated'] = '课程完成已更新';
$string['eventcoursemodulecompletionupdated'] = '课程模块学习完成，状态已更新';
$string['excelcsvdownload'] = '用Excel兼容格式（.csv）下载';
$string['fraction'] = '分数';
$string['graderequired'] = '需要课程分数';
$string['gradexrequired'] = '至少得 {$a}';
$string['hiddenrules'] = '一些特定于 <b>{$a}</b>的设置被隐藏。查看未选择的其他活动';
$string['inprogress'] = '处理中';
$string['manual'] = '手工标记';
$string['manualcompletionby'] = '由他人手动完成';
$string['manualcompletionbynote'] = '提醒：只有具备 moodle/course:markcomplete 权限的角色才会出现在此列表中。';
$string['manualselfcompletion'] = '手动自设进度';
$string['manualselfcompletionnote'] = '提醒：如果启用手动自设完成，则应当在课程版块中将“自设完成”版块添加上。';
$string['markcomplete'] = '标为完成';
$string['markedcompleteby'] = '由{$a}标记为完成';
$string['markingyourselfcomplete'] = '标记您自己为完成';
$string['modifybulkactions'] = '修改您希望批量编辑的活动';
$string['moredetails'] = '更多细节';
$string['nocriteriaset'] = '本课程未设置完成条件';
$string['notcompleted'] = '未完成';
$string['notenroled'] = '您没有加入此课程';
$string['nottracked'] = '在此课程中目前没有您的进度跟踪信息';
$string['notyetstarted'] = '还未开始';
$string['overallaggregation'] = '完成条件';
$string['overallaggregation_all'] = '当所有的条件全都满足视为课程已经完成';
$string['overallaggregation_any'] = '任意条件满足视为课程已完成';
$string['pending'] = '等待中';
$string['periodpostenrolment'] = '选课后';
$string['progress'] = '学生进度';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = '进度：{$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = '确认先修课程';
$string['remainingenroledfortime'] = '保持选课达到规定时间长度';
$string['remainingenroleduntildate'] = '在指定日期前保持选课';
$string['reportpage'] = '显示从{$a->from}到{$a->to}的用户（共{$a->total}人）。';
$string['requiredcriteria'] = '必要条件';
$string['resetactivities'] = '清除所有勾选的活动和资源';
$string['restoringcompletiondata'] = '写入进度数据';
$string['roleaggregation'] = '条件满足情形';
$string['roleaggregation_all'] = '所有选中的角色标记才算条件符合';
$string['roleaggregation_any'] = '任一选中的角色标记就算条件符合';
$string['roleidnotfound'] = '角色ID{$a}未发现';
$string['saved'] = '保存';
$string['seedetails'] = '查看细节';
$string['self'] = '自己';
$string['selfcompletion'] = '自设完成';
$string['showinguser'] = '显示用户';
$string['unenrolingfromcourse'] = '退出该选课';
$string['unenrolment'] = '注销选课';
$string['unit'] = '单元';
$string['unlockcompletion'] = '解锁完成选项';
$string['unlockcompletiondelete'] = '解锁完成选项并删除用户进度数据';
$string['usealternateselector'] = '使用替代的课程选择器';
$string['usernotenroled'] = '用户没有加入此课程';
$string['viewcoursereport'] = '查看课程报表';
$string['viewingactivity'] = '查看 {$a}';
$string['writingcompletiondata'] = '写入进度数据';
$string['xdays'] = '{$a}天';
$string['yourprogress'] = '您的进度';
