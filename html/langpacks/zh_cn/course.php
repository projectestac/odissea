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
 * Strings for component 'course', language 'zh_cn', branch 'MOODLE_38_STABLE'
 *
 * @package   course
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aria:coursecategory'] = '课程类别';
$string['aria:courseimage'] = '课程图片';
$string['aria:coursename'] = '课程名称';
$string['aria:courseshortname'] = '课程简称';
$string['aria:favourite'] = '课程已标星';
$string['coursealreadyfinished'] = '课程已经结束';
$string['coursenotyetfinished'] = '课程还没有结束';
$string['coursenotyetstarted'] = '课程还没有开始';
$string['coursetoolong'] = '课程太长了';
$string['customfield_islocked'] = '锁定的';
$string['customfield_islocked_help'] = '如果字段被锁定，则只有具有更改锁定的自定义字段权限的用户(默认情况下，只有具有管理员角色的用户)才能在课程设置中更改该字段。';
$string['customfield_notvisible'] = '没有人';
$string['customfieldsettings'] = '普通课程自定义字段设置';
$string['customfield_visibility'] = '可见到';
$string['customfield_visibility_help'] = '此设置确定谁可以在课程列表或个人主页的可用自定义字段过滤器中查看自定义字段名称和值。';
$string['customfield_visibletoall'] = '每个人';
$string['customfield_visibletoteachers'] = '教师';
$string['errorendbeforestart'] = '结束日期({$a})在课程开始日期之前。';
$string['favourite'] = '标星的课程';
$string['gradetopassnotset'] = '本课程没有设置及格成绩，可以在课程的成绩项目中设置(成绩册设置)。';
$string['nocourseactivity'] = '在课程开始和结束之间没有足够的课程活动';
$string['nocourseendtime'] = '课程没有结束时间';
$string['nocoursesections'] = '没有课程小节';
$string['nocoursestudents'] = '没有学生';
$string['privacy:completionpath'] = '课程完成情况';
$string['privacy:favouritespath'] = '课程标星的信息';
$string['privacy:metadata:completionsummary'] = '此课程包含用户的课程进度信息。';
$string['privacy:metadata:favouritessummary'] = '该课程包含与用户标星的课程相关的信息。';
$string['privacy:perpage'] = '每页显示的课程数。';
$string['studentsatriskincourse'] = '{$a}课程中处于风险之中的学生';
$string['target:coursecompetencies'] = '学生有可能不能完成分配给课程的能力';
$string['target:coursecompetencies_help'] = '这个目标描述了一个学生是否有不能完成分配给课程的能力的风险。这一目标认为，分配给本课程的所有能力必须在课程结束前完成。';
$string['target:coursecompletion'] = '学生有可能不符合课程完成条件';
$string['target:coursecompletion_help'] = '该目标描述学生是否被认为存在不符合课程完成条件的风险。';
$string['target:coursedropout'] = '学生有辍学的风险';
$string['target:coursedropout_help'] = '这个目标描述了学生是否被认为有辍学的风险。';
$string['target:coursegradetopass'] = '学生有可能不能获得通过该课程的最低成绩';
$string['target:coursegradetopass_help'] = '这个目标描述了学生是否有不能获得通过课程的最低成绩的风险。';
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
$string['target:noaccesssincecoursestart'] = '还没有访问过此课程的学生';
$string['target:noaccesssincecoursestart_help'] = '这个目标描述了从未访问过他们所加入的课程的学生。';
$string['target:noaccesssincecoursestartinfo'] = '以下学生加入了一门已经开始的课程，但是他们从来没有访问过此课程。';
$string['target:norecentaccesses'] = '最近没有访问过此课程的学生';
$string['target:norecentaccesses_help'] = '此目标标识在设置的分析间隔内(默认为过去一个月)没有访问过所加入课程的学生。';
$string['target:norecentaccessesinfo'] = '以下学生未在设定的分析间隔内(默认为过去一个月)访问过他们所加入的课程。';
$string['target:noteachingactivity'] = '‎课程有无法开始的风险‎';
$string['target:noteachingactivity_help'] = '该目标描述了将在下周开始的课程是否将进行教学活动。';
$string['target:noteachingactivityinfo'] = '‎即将在未来几天开始的以下课程有无法开始的风险，因为它们没有教师或学生加入。';
