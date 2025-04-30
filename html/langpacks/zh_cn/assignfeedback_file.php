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
 * Strings for component 'assignfeedback_file', language 'zh_cn', version '4.4'.
 *
 * @package     assignfeedback_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['batchoperationconfirmuploadfiles'] = '上传一个或几个反馈文件给所有选定的用户';
$string['batchuploadfiles'] = '上传反馈文件给多个用户';
$string['batchuploadfilesforusers'] = '发送反馈文件给{$a}位选定的用户';
$string['configmaxbytes'] = '最大文件大小';
$string['confirmuploadzip'] = '确认压缩文件上传';
$string['countfiles'] = '{$a}个文件';
$string['default'] = '默认开启';
$string['default_help'] = '如果设置此项，将会为所有新作业默认开启此反馈方法。';
$string['enabled'] = '文件反馈';
$string['enabled_help'] = '如果启用，教师在批改提交的作业时就可以上传带有反馈的文件。这些文件可以是但不限于标记好的学生提交的文件，带有评论的文件或语音反馈。';
$string['feedbackfileadded'] = '给学生"{$a->student}"的新的反馈文件"{$a->filename}"';
$string['feedbackfileupdated'] = '给学生"{$a->student}"的修改过的反馈文件"{$a->filename}"';
$string['feedbackzip'] = '含多个反馈文件的压缩文件';
$string['feedbackzip_help'] = '一个压缩文件，其中包含一个或多个学生的反馈文件列表。反馈文件将根据用户ID分配给学生，用户ID应该是每个文件名的第二部分，紧跟在用户全名之后。下载提交文件时使用此命名约定，因此您可以下载所有提交文件，向一些文件添加评论，然后重新压缩并上传所有文件。没有更改的文件将被忽略。';
$string['file'] = '反馈文件';
$string['filesadded'] = '已添加反馈文件：{$a}';
$string['filesupdated'] = '已更新反馈文件：{$a}';
$string['importfeedbackfiles'] = '导入反馈文件';
$string['maxbytes'] = '最大文件大小';
$string['maxfiles'] = '最大的文件上传数量';
$string['maximumsize'] = '最大文件大小';
$string['moreusers'] = '{$a}更多…';
$string['nochanges'] = '没有改变';
$string['pluginname'] = '文件反馈';
$string['privacy:metadata:filepurpose'] = '老师反馈给学生的文件。';
$string['privacy:path'] = '反馈文件';
$string['selectedusers'] = '选定的用户';
$string['uploadfiles'] = '发送反馈文件';
$string['uploadzip'] = '以一个压缩文件方式上传多个反馈文件';
$string['uploadzipsummary'] = '以一个压缩文件方式导入的多个反馈文件';
$string['userswithnewfeedback'] = '用户及其更新的反馈文件：{$a}';
