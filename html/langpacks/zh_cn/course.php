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
 * Strings for component 'course', language 'zh_cn', version '3.11'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychoosercategory'] = '活动选择器';
$string['activitychooserrecommendations'] = '推荐的活动';
$string['activitychoosersettings'] = '活动选择器设置';
$string['activitychoosertabmode'] = '活动选择器标签';
$string['activitychoosertabmode_desc'] = '通过活动选择器，教师可以轻松选择要添加到课程中的活动和资源。 此设置确定应在其中显示哪些标签。 请注意，仅当用户为一个或多个活动标星时，才为用户显示“标星的”标签，并且仅当站点管理员指定了一些推荐活动时，才显示“推荐的”标签。';
$string['activitychoosertabmodeone'] = '标星的，全部，活动，资源，推荐的';
$string['activitychoosertabmodethree'] = '标星的，活动，资源，推荐的';
$string['activitychoosertabmodetwo'] = '标星的，全部，推荐的';
$string['aria:coursecategory'] = '课程类别';
$string['aria:courseimage'] = '课程图片';
$string['aria:coursename'] = '课程名称';
$string['aria:courseshortname'] = '课程简称';
$string['aria:defaulttab'] = '默认活动';
$string['aria:favourite'] = '课程已标星';
$string['aria:favouritestab'] = '标星的活动';
$string['aria:modulefavourite'] = '标星{$a}活动';
$string['aria:recommendedtab'] = '推荐的活动';
$string['coursealreadyfinished'] = '课程已经结束';
$string['coursenotyetfinished'] = '课程还没有结束';
$string['coursenotyetstarted'] = '课程还没有开始';
$string['coursetoolong'] = '课程太长了';
$string['customfield_islocked'] = '锁定的';
$string['customfield_islocked_help'] = '如果字段被锁定，则只有具有更改锁定的自定义字段权限的用户(默认情况下，只有具有管理员角色的用户)才能在课程设置中更改该字段。';
$string['customfield_notvisible'] = '没有人';
$string['customfield_visibility'] = '可见到';
$string['customfield_visibility_help'] = '此设置确定谁可以在课程列表或个人主页的可用自定义字段过滤器中查看自定义字段名称和值。';
$string['customfield_visibletoall'] = '每个人';
$string['customfield_visibletoteachers'] = '教师';
$string['customfieldsettings'] = '普通课程自定义字段设置';
$string['errorendbeforestart'] = '结束日期({$a})在课程开始日期之前。';
$string['favourite'] = '标星的课程';
$string['gradetopassnotset'] = '本课程没有设置及格成绩，可以在课程的成绩项目中设置(成绩册设置)。';
$string['informationformodule'] = '关于{$a}活动的信息';
$string['module'] = '活动';
$string['noaccesssincestartinfomessage'] = '{$a->userfirstname}您好！<p>{$a-> coursename}中的许多学生从未访问过该课程。</p>';
$string['nocourseactivity'] = '在课程开始和结束之间没有足够的课程活动';
$string['nocourseendtime'] = '课程没有结束时间';
$string['nocoursesections'] = '没有课程小节';
$string['nocoursestudents'] = '没有学生';
$string['norecentaccessesinfomessage'] = '{$a->userfirstname}，您好！<p>  {$a->coursename} 中的许多学生最近没有访问过该课程。</p>';
$string['noteachinginfomessage'] = '{$a->userfirstname}，您好！<p>开始日期在下周的课程被确定为没有老师或学生加入。</p>';
$string['privacy:completionpath'] = '课程完成情况';
$string['privacy:favouritespath'] = '课程标星的信息';
$string['privacy:metadata:activityfavouritessummary'] = '此课程系统包含用户已为活动选择器中的哪些项目标星的信息。';
$string['privacy:metadata:completionsummary'] = '此课程包含用户的课程进度信息。';
$string['privacy:metadata:favouritessummary'] = '该课程包含与用户标星的课程相关的信息。';
$string['privacy:perpage'] = '每页显示的课程数。';
$string['recommend'] = '推荐';
$string['recommendcheckbox'] = '推荐活动：{$a}';
$string['relativedatessubmissionduedateafter'] = '课程开始后的{$a->datediffstr}';
$string['relativedatessubmissionduedatebefore'] = '课程开始前的{$a->datediffstr}';
$string['searchactivitiesbyname'] = '按名称搜索活动';
$string['searchresults'] = '搜索结果：{$a}';
$string['studentsatriskincourse'] = '{$a}课程中处于风险之中的学生';
$string['studentsatriskinfomessage'] = '{$a->userfirstname}, 您好！<p>已确认{$a->coursename} 课程中的学生处于风险之中。</ p>';
$string['submitsearch'] = '提交搜索';
$string['target:coursecompetencies'] = '学生有可能不能完成分配给课程的能力';
$string['target:coursecompetencies_help'] = '这个目标描述了一个学生是否有不能完成分配给课程的能力的风险。这一目标认为，分配给本课程的所有能力必须在课程结束前完成。';
$string['target:coursecompletion'] = '学生有可能不符合课程完成条件';
$string['target:coursecompletion_help'] = '该目标描述学生是否被认为存在不符合课程完成条件的风险。';
$string['target:coursedropout'] = '学生有辍学的风险';
$string['target:coursedropout_help'] = '这个目标描述了学生是否被认为有辍学的风险。';
$string['target:coursegradetopass'] = '学生有可能不能获得通过该课程的最低成绩';
$string['target:coursegradetopass_help'] = '这个目标描述了学生是否有不能获得通过课程的最低成绩的风险。';
$string['target:noaccesssincecoursestart'] = '还没有访问过此课程的学生';
$string['target:noaccesssincecoursestart_help'] = '这个目标描述了从未访问过他们所加入的课程的学生。';
$string['target:noaccesssincecoursestartinfo'] = '以下学生加入了一门已经开始的课程，但是他们从来没有访问过此课程。';
$string['target:norecentaccesses'] = '最近没有访问过此课程的学生';
$string['target:norecentaccesses_help'] = '此目标标识在设置的分析间隔内(默认为过去一个月)没有访问过所加入课程的学生。';
$string['target:norecentaccessesinfo'] = '以下学生未在设定的分析间隔内(默认为过去一个月)访问过他们所加入的课程。';
$string['target:noteachingactivity'] = '‎课程有无法开始的风险‎';
$string['target:noteachingactivity_help'] = '该目标描述了将在下周开始的课程是否将进行教学活动。';
$string['target:noteachingactivityinfo'] = '‎即将在未来几天开始的以下课程有无法开始的风险，因为它们没有教师或学生加入。';
$string['targetlabelstudentcompetenciesno'] = '有可能完成分配给课程的能力的学生';
$string['targetlabelstudentcompetenciesyes'] = '‎学生有无法完成分配给课程的能力的风险 ‎';
$string['targetlabelstudentcompletionno'] = '‎有可能满足课程完成条件的学生‎';
$string['targetlabelstudentcompletionyes'] = '‎学生有不能满足课程完成条件的风险‎';
$string['targetlabelstudentdropoutno'] = '没有风险';
$string['targetlabelstudentdropoutyes'] = '‎有辍学风险的学生‎';
$string['targetlabelstudentgradetopassno'] = '有可能获得通过此课程的最低成绩的学生。';
$string['targetlabelstudentgradetopassyes'] = '学生有不能获得通过该课程的最低成绩的风险。';
$string['targetlabelteachingno'] = '‎课程有无法开始的风险‎';
$string['targetlabelteachingyes'] = '具有教学权限的用户可以访问该课程';
