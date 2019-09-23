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
 * Strings for component 'enrol_flatfile', language 'zh_cn', branch 'MOODLE_36_STABLE'
 *
 * @package   enrol_flatfile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = '文件编码中';
$string['expiredaction'] = '选课到期行动';
$string['expiredaction_help'] = '当用户选课终止后，选择要执行的操作。请注意：某些用户资料和设置会在撤销选课时清除';
$string['filelockedmail'] = 'cron 进程无法删除您用于选课的文本文件({$a})。请设置好权限以便 Moodle 能删除这个文件，否则它将被重复处理。';
$string['filelockedmailsubject'] = '严重错误：选课文件';
$string['flatfile:manage'] = '手动管理用户选课';
$string['flatfilesync'] = '以文本文件格式同步选课';
$string['flatfile:unenrol'] = '手动将已选课用户移出课程';
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
