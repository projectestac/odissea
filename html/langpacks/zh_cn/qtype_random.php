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
 * Strings for component 'qtype_random', language 'zh_cn', version '3.11'.
 *
 * @package     qtype_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configselectmanualquestions'] = '当从一个分类中随机选择题目时，是否可以选择人工评分的题目？';
$string['includingsubcategories'] = '包括子类别';
$string['pluginname'] = '随机题';
$string['pluginname_help'] = '随机题并不是一种题目类型，而是从指定类别随机选出题目插入到活动中的一种方法。';
$string['pluginnameediting'] = '编辑随机题';
$string['privacy:metadata'] = '随机简答匹配问题类型插件不存储任何个人数据。';
$string['randomqname'] = '随机题（{$a}）';
$string['randomqnamefromtop'] = '错误的随机问题！请删除此问题。';
$string['randomqnamefromtoptags'] = '错误的随机问题！请删除此问题。';
$string['randomqnametags'] = '随机（{$a->category}，标记：{$a->tags}）';
$string['randomqplusname'] = '随机题（{$a}和子类别）';
$string['randomqplusnamecourse'] = '随机（本课程中的任何类别）';
$string['randomqplusnamecoursecat'] = '随机（课程类别{$a}内的任何类别）';
$string['randomqplusnamecoursecattags'] = '随机（课程类别{$a->category}内的任何类别，标记：{$a->tags}）';
$string['randomqplusnamecoursetags'] = '随机（本课程中的任何类别，标记：{$a->tags}）';
$string['randomqplusnamemodule'] = '随机（此测验的任何类别）';
$string['randomqplusnamemoduletags'] = '随机（此测验的任何类别，标记：{$a->tags}）';
$string['randomqplusnamesystem'] = '随机（任何系统级类别）';
$string['randomqplusnamesystemtags'] = '随机（任何系统级类别，标记：{$a->tags}）';
$string['randomqplusnametags'] = '随机（{$a->category}和子类别，标记：{$a->tags}）';
$string['selectedby'] = '{$a->questionname}选自{$a->randomname}';
$string['selectmanualquestions'] = '随机试题可以使用人工评分的题';
$string['taskunusedrandomscleanup'] = '删除未使用的随机问题';
