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
 * Strings for component 'qtype_match', language 'zh_cn', version '3.11'.
 *
 * @package     qtype_match
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = '答案 {$a}';
$string['availablechoices'] = '可选项';
$string['blanksforxmorequestions'] = '更多空白';
$string['correctansweris'] = '正确答案是：{$a}';
$string['deletedchoice'] = '[删除的选项]';
$string['deletedsubquestion'] = '问题的这一部分在尝试开始后被删除。';
$string['filloutthreeqsandtwoas'] = '您至少要提供两个问题和三个答案。只有答案而问题空白的题会被当做额外的错误答案。如果问题和答案都是空白，会被忽略。';
$string['nomatchinganswer'] = '您必须指定一个与问题“{$a}”匹配的答案。';
$string['nomatchinganswerforq'] = '您必须为这道题指定一个答案。';
$string['notenoughqsandas'] = '您必须提供至少 {$a->q} 个问题和 {$a->a} 个答案。';
$string['notenoughquestions'] = '您必须提供至少 {$a} 对题目和答案。';
$string['pleaseananswerallparts'] = '请回答题目的所有部分。';
$string['pluginname'] = '匹配题';
$string['pluginname_help'] = '匹配题也叫连线题，要求答题人将两个名词或短句的列表（问题列表和答案列表）正确匹配。';
$string['pluginnameadding'] = '添加一道匹配题';
$string['pluginnameediting'] = '编辑匹配题';
$string['pluginnamesummary'] = '必须在提供的列表中选择每个子问题的答案';
$string['privacy:metadata'] = '匹配题类型插件允许问题作者将默认选项设置为用户首选项。';
$string['privacy:preference:defaultmark'] = '为给定问题设置的默认分数。';
$string['privacy:preference:penalty'] = '当使用“多次尝试交互”或“自适应模式”行为运行问题时，每次错误尝试的罚分。';
$string['privacy:preference:shuffleanswers'] = '答案是否自动重新排序';
$string['shuffle'] = '乱序';
$string['shuffle_help'] = '如果启用，且活动设置中的”随机排列题目选项“也被启用，那么每次答题时选项的顺序都会是随机的。';
