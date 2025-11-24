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
 * Strings for component 'qtype_gapselect', language 'zh_cn', version '4.5'.
 *
 * @package     qtype_gapselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = '添加 {no}个空白可选项';
$string['answer'] = '答案';
$string['blanknumber'] = '空白{$a}';
$string['choices'] = '可选项';
$string['choicex'] = '可选项{no}';
$string['combinedcontrolnamegapselect'] = '下拉菜单';
$string['combinedcontrolnamegapselectplural'] = '下拉菜单';
$string['correctansweris'] = '正确答案是： {$a}';
$string['errorblankchoice'] = '请检查选项： 选项 {$a} 是空的。';
$string['errormissingchoice'] = '请检查题干： 选项里没有找到{$a}！只有数字和特定的可选答案被允许用于占位符。';
$string['errornoslots'] = '问题文本必须包含类似[[1]]的占位符，以显示缺少的单词的位置。';
$string['errorquestiontextblank'] = '您必须输入一些问题文本。';
$string['group'] = '组';
$string['pleaseputananswerineachbox'] = '请在每个盒子里放一个答案。';
$string['pluginname'] = '选词填空题';
$string['pluginname_help'] = '选词填空题要求做题者从下拉菜单中选择正确的答案。[[1]], [[2]], [[3]], ... 作为题干占位符，正确答案被分别指定为选项1, 2, 3, ... 另外的可选答案可以添加以增加题目的难度。可选答案可以分组，以限制每个下拉菜单中可见的可选答案。';
$string['pluginname_link'] = 'question/type/gapselect';
$string['pluginnameadding'] = '添加一道选词填空题';
$string['pluginnameediting'] = '编辑一道选词填空题';
$string['pluginnamesummary'] = '在下拉菜单中选择合适的词语填空。';
$string['privacy:metadata'] = '选词填空题类型插件允许问题作者将默认选项设置为用户首选项。';
$string['privacy:preference:defaultmark'] = '为给定问题设置的默认分数。';
$string['privacy:preference:penalty'] = '当使用“多次尝试交互”或“自适应模式”行为运行问题时，每次错误尝试的罚分。';
$string['privacy:preference:shuffleanswers'] = '答案是否应该被自动重新排序。';
$string['regradeissuenumchoiceschanged'] = '组 {$a} 中的选项数量发生了变化。';
$string['regradeissuenumgroupsschanged'] = '选项的组的数量发生了变化。';
$string['shuffle'] = '随机排序';
$string['tagsnotallowed'] = '不允许使用“{$a->tag}”。（只有{$a->allowed}被允许。）';
$string['tagsnotallowedatall'] = '不允许使用“{$a->tag}”。（此处不允许使用HTML。）';
