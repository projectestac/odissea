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
 * Strings for component 'qtype_ordering', language 'zh_cn', version '3.11'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = '绝对位置';
$string['allornothing'] = '全有或全无';
$string['answer'] = '项目文本';
$string['answerheader'] = '可拖动的项 {no}';
$string['correctorder'] = '这些项目的正确顺序如下:';
$string['defaultanswerformat'] = '默认的答案格式';
$string['defaultquestionname'] = '将下列项目拖到正确的顺序。';
$string['editingordering'] = '编辑排序题目';
$string['gradedetails'] = '成绩的细节';
$string['gradingtype'] = '评级类型';
$string['gradingtype_help'] = '选择等级计算的类型。全部或全不:如果所有的项目都处于正确的位置，那么就会获得满分。否则，分数为0。绝对位置:如果与正确的答案处于相同的位置，则被认为是正确的。这个问题的最高可能的分数与“与...一致”显示给学生的条目数相同。相对于正确的位置:如果与正确的答案处于相同的位置，那么一个项目就被认为是正确的。正确的条目得到的分数等于显示的条目的数量减去1。不正确的项目得到的分数等于所显示的条目的数量减去1和减去条目与正确位置的距离。因此，如果向学生显示n个项目，每个项目可用的标记的数量是(n-1)，并且这个问题的最高可用标记是n x(n-1)，这与(n²-n)相同。相对于下一项(不包括最后一项):如果一个项被认为是正确的，那么与它同样的项目就也被认为是正确的。最后一个位置的项不被检查。因此，这个题目的最高可能分数比显示给学生的条目数少一个。相对于下一项(包括最后一项):如果一个项被认为是正确的，那么与它同样的项目就也被认为是正确的。这包括最后一项，它必须下面没有项。因此，这个题目的最高可能分数与显示给学生的条目数相同。相对于前一项和下一项:如果前项和下项都与正确答案相同，那么该项就被认为是正确的。第一个项目应该没有以前的项目，最后一个项目应该没有下一个项目。因此，每个项目有两个可能的分数，并且这个题目的最高可能的分数是显示给学生的项目的数量的两倍。相对于前一项和下一项:如果与前面正确答案的所有项目相同，并且和后面正确答案的所有项目是一样的，那么该条目被认为是正确的。前一项的顺序不重要，后一项的顺序也不重要。因此，如果向学生显示n个项目，每个项目可用的标记的数量是(n-1)，并且这个问题的最高可用标记是n x(n-1)，这与(n²-n)相同。最长有序子集:等级是项目中最长有序子集的项目数量。最高可能的级别与显示的条目数相同。一个子集必须至少有两个项目。子集不需要从第一个项开始(但是它们可以)，并且它们不需要是连续的(但是可以是)。当有多个相同长度的子集时，在从左到右搜索的子集中首先找到的条目将被显示为正确的。其他项目将被标记为不正确。最长的连续子集:等级是项目中最长的连续子项的项数。最高可能的级别与显示的条目数相同。一个子集必须至少有两个项目。子集不需要从第一个项目开始(但是它们可以)，而且它们必须是连续的。当有多个相同长度的子集时，在从左到右搜索的子集中首先找到的条目将被显示为正确的。其他项目将被标记为不正确。';
$string['horizontal'] = '水平';
$string['layouttype'] = '项目的布局';
$string['layouttype_help'] = '选择是垂直还是水平地显示项目。';
$string['longestcontiguoussubset'] = '最长连续的子集';
$string['longestorderedsubset'] = '最长有序的子集';
$string['noresponsedetails'] = '对不起，没有关于这个问题的回答的细节。';
$string['noscore'] = '没有分数';
$string['notenoughanswers'] = '排序题目必须有多于{$a}个答案。';
$string['pluginname'] = '排序题';
$string['pluginname_help'] = '有几个项目以混乱的顺序显示。这些项目可以被拖到一个有意义的顺序中。';
$string['pluginnameadding'] = '添加一个排序题';
$string['pluginnameediting'] = '编辑一个排序题';
$string['pluginnamesummary'] = '把顺序混乱的项目进行有意义的排序';
$string['relativeallpreviousandnext'] = '相对于之前的和以后的项目';
$string['relativenextexcludelast'] = '相对于下一项(不包括最后一项)';
$string['relativenextincludelast'] = '相对于下一项(包括最后一项)';
$string['relativeonepreviousandnext'] = '相对于前一项和下一项';
$string['relativetocorrect'] = '相对于正确的位置';
$string['removeeditor'] = '删除HTML编辑器';
$string['removeitem'] = '删除可拖动的项';
$string['scoredetails'] = '以下是该回答中的每个条目的得分:';
$string['selectall'] = '选出所有项目';
$string['selectcontiguous'] = '选择一个项目的连续子集';
$string['selectcount'] = '子集的大小';
$string['selectcount_help'] = '当题目出现在测验中时，将显示的条目数。';
$string['selectrandom'] = '选择一个项目的随机子集';
$string['selecttype'] = '项目选择类型';
$string['selecttype_help'] = '选择是显示所有项目还是一个项目的子集。';
$string['showgrading'] = '评分细节';
$string['showgrading_help'] = '当一个学生对这个排序题作出回答时，选择是显示还是隐藏计分的细节。';
$string['vertical'] = '垂直';
