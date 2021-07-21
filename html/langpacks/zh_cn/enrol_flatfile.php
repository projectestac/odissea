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
 * Strings for component 'enrol_flatfile', language 'zh_cn', version '3.11'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = '文件编码中';
$string['expiredaction'] = '选课到期行动';
$string['expiredaction_help'] = '当用户选课终止后，选择要执行的操作。请注意：某些用户资料和设置会在撤销选课时清除';
$string['filelockedmail'] = 'cron 进程无法删除您用于选课的文本文件({$a})。请设置好权限以便 Moodle 能删除这个文件，否则它将被重复处理。';
$string['filelockedmailsubject'] = '严重错误：选课文件';
$string['flatfile:manage'] = '手动管理用户选课';
$string['flatfile:unenrol'] = '手动将已选课用户移出课程';
$string['flatfileenrolments'] = '文本文件 (CSV)选课';
$string['flatfilesync'] = '以文本文件格式同步选课';
$string['location'] = '文件位置';
$string['location_desc'] = '指定选课文件完整路径。这个文件在处理之后会自动删除';
$string['mapping'] = '文本文件映射';
$string['messageprovider:flatfile_enrolment'] = '文本文件选课消息';
$string['notifyadmin'] = '通知管理员';
$string['notifyenrolled'] = '通知已选课用户';
$string['notifyenroller'] = '通知已注册用户';
$string['pluginname'] = '文本文件（CSV）';
$string['pluginname_desc'] = '该方法会反复在您指定的位置检查和处理一个特殊格式的文本文件。此文件每行应有四个或六个用逗号分隔的字段：

<pre class="informationbox">
*  operation, role, idnumber(用户), idnumber(课程) [, starttime, endtime]
其中：
*  operation        = add | del
*  role             = student | teacher | teacheredit
*  idnumber(用户)   = 用户表中的学号（不是id）
*  idnumber(课程) = 课程表中的编号（不是id）
*  starttime        = 开始时间（从epoch以来的秒数）- 可选
*  endtime          = 结束时间（从epoch以来的秒数）- 可选
</pre>
例如：
<pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = '文本文件(CSV)选课插件可以将与将来选课有关的个人数据存储在enrol_flatfile表中。';
$string['privacy:metadata:enrol_flatfile:action'] = '预期在指定日期的选课动作';
$string['privacy:metadata:enrol_flatfile:courseid'] = '与选课有关的课程ID';
$string['privacy:metadata:enrol_flatfile:roleid'] = '要分配或未分配的角色的ID';
$string['privacy:metadata:enrol_flatfile:timeend'] = '选课结束的时间';
$string['privacy:metadata:enrol_flatfile:timemodified'] = '修改选课的时间';
$string['privacy:metadata:enrol_flatfile:timestart'] = '选课开始的时间';
$string['privacy:metadata:enrol_flatfile:userid'] = '与角色分配相关的用户ID';
