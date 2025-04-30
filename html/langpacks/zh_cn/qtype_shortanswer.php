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
 * Strings for component 'qtype_shortanswer', language 'zh_cn', version '4.4'.
 *
 * @package     qtype_shortanswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = '更多的答案空白';
$string['answer'] = '答案：{$a}';
$string['answermustbegiven'] = '此题目有成绩/反馈信息，因此您必须输入一个答案。';
$string['answerno'] = '答案{$a}';
$string['caseno'] = '不，大小写不重要';
$string['casesensitive'] = '大小写敏感';
$string['caseyes'] = '是的，大小写必须匹配';
$string['correctansweris'] = '正确答案：{$a}';
$string['correctanswers'] = '正确答案';
$string['filloutoneanswer'] = '必须提供至少一个可能的答案。答案不能为空，“*”可以做为一个通配符，用来匹配任何字符。第一个匹配的答案将用来决定分数和反馈。';
$string['notenoughanswers'] = '此类型的题目至少要有 {$a} 个答案';
$string['pleaseenterananswer'] = '请输入答案。';
$string['pluginname'] = '填空题';
$string['pluginname_help'] = '在回答一个问题（可能包括图像）时，答题者输入一个单词或短语。可能有几种可能的正确答案，每个答案都有不同的分数。如果选择了“区分大小写”选项，则可以为“Word”或“word”设置不同的分数。';
$string['pluginname_link'] = 'question/type/shortanswer';
$string['pluginnameadding'] = '添加一道填空题';
$string['pluginnameediting'] = '编辑填空题';
$string['pluginnamesummary'] = '允许用一个或多个词回答，系统通过和不同的标准答案（可以包含通配符）对比来自动评分。';
$string['privacy:metadata'] = '填空题类型插件允许问题作者将默认选项设置为用户首选项。';
$string['privacy:preference:defaultmark'] = '为给定问题设置的默认分数。';
$string['privacy:preference:penalty'] = '当使用“多次尝试交互”或“自适应模式”行为运行问题时，每次错误尝试的罚分。';
$string['privacy:preference:usecase'] = '答案是否应区分大小写。';
