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
 * Strings for component 'qtype_essay', language 'zh_cn', version '4.4'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = '可接受的文件类型';
$string['acceptedfiletypes_help'] = '接受的文件类型可以通过输入一系列文件扩展名来实现限制。如果此处为空，那么所有的文件格式都能被接受。';
$string['allowattachments'] = '允许上传附件';
$string['answerfiles'] = '答案文件';
$string['answertext'] = '答案文本';
$string['attachedfiles'] = '附件：{$a}';
$string['attachmentsoptional'] = '附件是可选的';
$string['attachmentsrequired'] = '要求附件';
$string['attachmentsrequired_help'] = '此选项指定了回复被视为可评分的所需最少附件数。';
$string['err_maxminmismatch'] = '最大字数限制必须大于最小字数限制';
$string['err_maxwordlimit'] = '已启用最大字数限制，但未设置字数';
$string['err_maxwordlimitnegative'] = '最大字数限制不能为负数';
$string['err_minwordlimit'] = '已启用最大字数限制，但未设置字数';
$string['err_minwordlimitnegative'] = '最小字数限制不能为负数';
$string['formateditor'] = 'HTML编辑器';
$string['formateditorfilepicker'] = '带文件选择工具的HTML编辑器';
$string['formatmonospaced'] = '纯文本，等宽字体';
$string['formatnoinline'] = '无嵌入式文本';
$string['formatplain'] = '纯文本';
$string['graderinfo'] = '给评分人的信息';
$string['graderinfoheader'] = '评分人信息';
$string['maxbytes'] = '最大文件大小';
$string['maxwordlimit'] = '最大字数限制';
$string['maxwordlimit_help'] = '如果要求学生输入文本回答问题，这是每个学生允许提交的字数上限。';
$string['maxwordlimitboundary'] = '本问题的字数限制为{$a->limit}字，而您试图提交{$a->count}字。请减少字数并重试。';
$string['minwordlimit'] = '最小字数限制';
$string['minwordlimit_help'] = '如果要求学生输入文本回答问题，这是每个学生允许提交的字数下限。';
$string['minwordlimitboundary'] = '本问题要求至少回答{$a->limit}字，而您试图提交{$a->count}字。请增加字数并重试。';
$string['mustattach'] = '当“无内嵌文本”被选择，或响应是可选时，则必须允许至少一个附件。';
$string['mustrequire'] = '当“无内嵌文本”被选择，或响应是可选时，则要求有至少一个附件。';
$string['mustrequirefewer'] = '你不能要求超过你允许的附件数。';
$string['nlines'] = '{$a} 行';
$string['nonexistentfiletypes'] = '以下文件类型未被识别：{$a}';
$string['pluginname'] = '简答题';
$string['pluginname_help'] = '通过一段或两段文字来回答一道题，题目里可以包含图片。简答题只有在被教师审阅并人工评分后才有成绩。';
$string['pluginname_link'] = 'question/type/essay';
$string['pluginnameadding'] = '添加一道简答题';
$string['pluginnameediting'] = '编辑一道简答题';
$string['pluginnamesummary'] = '可以回答几句或几段话，然后人工评分';
$string['privacy:metadata'] = '简答题类型插件允许问题作者将默认选项设置为用户首选项。';
$string['privacy:preference:attachments'] = '允许的附件数。';
$string['privacy:preference:attachmentsrequired'] = '所需附件的数量。';
$string['privacy:preference:defaultmark'] = '为给定问题设置的默认分数。';
$string['privacy:preference:maxbytes'] = '最大文件大小。';
$string['privacy:preference:responsefieldlines'] = '表示输入框大小的行数（文本输入区）。';
$string['privacy:preference:responseformat'] = '响应格式是什么（HTML编辑器、纯文本等）？';
$string['privacy:preference:responserequired'] = '是否要求学生必须输入文本';
$string['responsefieldlines'] = '输入框大小';
$string['responseformat'] = '回复格式';
$string['responseisrequired'] = '要求学生输入文本';
$string['responsenotrequired'] = '文本输入是可选的';
$string['responseoptions'] = '应答选项';
$string['responserequired'] = '需要文本';
$string['responsetemplate'] = '应答模板';
$string['responsetemplate_help'] = '在这里输入的任何文字都将在新的作答尝试开始时显示在回复输入框中。';
$string['responsetemplateheader'] = '应答模板';
$string['wordcount'] = '字数：{$a}';
$string['wordcounttoofew'] = '字数：{$a->count}，低于要求的{$a->limit}字。';
$string['wordcounttoomuch'] = '字数：{$a->count}，超过了字数上限{$a->limit}字。';
