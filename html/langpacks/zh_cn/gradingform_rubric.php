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
 * Strings for component 'gradingform_rubric', language 'zh_cn', version '4.1'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = '添加标准';
$string['additionalfeedback'] = '附加反馈';
$string['alwaysshowdefinition'] = '允许用户预览评分量规（否则仅在评分后显示）';
$string['backtoediting'] = '返回编辑';
$string['confirmdeletecriterion'] = '您确定要删除此标准吗？';
$string['confirmdeletelevel'] = '您确定要删除这个级别吗？';
$string['criterion'] = '标准 {$a}';
$string['criterionaddlevel'] = '添加级别';
$string['criteriondelete'] = '删除标准';
$string['criterionduplicate'] = '复制标准';
$string['criterionempty'] = '点击编辑标准';
$string['criterionmovedown'] = '下移';
$string['criterionmoveup'] = '上移';
$string['criterionremark'] = '标准备注{$a->description}: {$a->remark}';
$string['definerubric'] = '定义量规';
$string['description'] = '描述';
$string['enableremarks'] = '允许评分者为每个条件添加文本注释';
$string['err_mintwolevels'] = '每条标准必须至少有两个级别';
$string['err_nocriteria'] = '量规必须至少包含一个标准';
$string['err_nodefinition'] = '级别定义不能为空';
$string['err_nodescription'] = '标准的描述不能为空';
$string['err_novariations'] = '评分标准不同级别不能赋予相同分数值';
$string['err_scoreformat'] = '每个级别的分数必须是有效的数字';
$string['err_totalscore'] = '量规中最大可用的分数必须大于零';
$string['gradingof'] = '{$a} 评分';
$string['level'] = '等级 {$a->definition}，{$a->score} 分。';
$string['leveldefinition'] = '等级 {$a} 定义';
$string['leveldelete'] = '删除级别{$a}';
$string['levelempty'] = '单击编辑级别';
$string['levelsgroup'] = '等级小组';
$string['lockzeropoints'] = '为评分量规计算可以取得的最低分数';
$string['lockzeropoints_help'] = '此设置仅在每个标准的最低分数总和大于0时适用。如果勾选，则活动的最低分数将是该评分量规可以取得的最低分数。如果未勾选，则该量规的最低分数将匹配该活动的最低分数（除非使用评分等级，否则该分数为0）。';
$string['name'] = '名称';
$string['needregrademessage'] = '在该学生被评分后量规变了。您必须检查量规并更新评分后，学生才能看到该量规。';
$string['notset'] = '未设置';
$string['pluginname'] = '量规';
$string['pointsvalue'] = '{$a}分';
$string['previewrubric'] = '预览量规';
$string['privacy:metadata:criterionid'] = '正在评分的特定标准的标识符。';
$string['privacy:metadata:fillingssummary'] = '存储用户量规成绩信息。';
$string['privacy:metadata:instanceid'] = '与活动成绩相关的标识符。';
$string['privacy:metadata:levelid'] = '在量规中获得的等级。';
$string['privacy:metadata:remark'] = '与正在评分的量规标准相关的备注。';
$string['regrademessage1'] = '您将修改一个已经使用过的量规。请指示对于已有的分数是否需要重新评价。如果您选择“是”，学生们将在成绩重新评价之后，才能看到新的量规。';
$string['regrademessage5'] = '您将保存的量规有明显的变化，并且该量规已被使用。成绩簿中的已评成绩会保持不变，但学生们将在成绩重新评价之后，才能看到新的量规。';
$string['regradeoption0'] = '不标记重新评分';
$string['regradeoption1'] = '标记重新评分';
$string['restoredfromdraft'] = '注意：上一次对该人的评分未能成功保存，所以恢复了草稿。如果您希望取消这些变化，请使用下面的“取消”按钮。';
$string['rubric'] = '量规';
$string['rubricmapping'] = '分数与评级的映射规则';
$string['rubricmappingexplained'] = '此评分标准的最低可能分数为 <b>{$a->minscore} 分</b>。它将被转换为活动可用的最低成绩（除非使用量表，否则为 0）。<b>最高分 {$a->maxscore} 分</b>将转换为最高分。中级分数将分别转换。

如果使用量表进行评分，则分数将四舍五入转换为量表元素，就好像它们是连续的整数一样。

可以通过编辑表格并勾选“计算等级，其最低分数等于评分标准的最低可达到等级”框来更改此成绩计算。';
$string['rubricnotcompleted'] = '请为每个标准选择';
$string['rubricoptions'] = '量规的选项';
$string['rubricstatus'] = '当前量规状态';
$string['save'] = '保存';
$string['saverubric'] = '保存量规并使其可用';
$string['saverubricdraft'] = '保存为草稿';
$string['scoreinputforlevel'] = '级别 {$a} 的分数输入';
$string['scorepostfix'] = '{$a}分';
$string['showdescriptionstudent'] = '向被评价者显示量规描述';
$string['showdescriptionteacher'] = '在评价过程中显示量规描述';
$string['showremarksstudent'] = '向被评价者显示标记';
$string['showscorestudent'] = '向被评价者显示每个级别的分数';
$string['showscoreteacher'] = '在评价过程中显示每个级别的分数';
$string['sortlevelsasc'] = '级别排序：';
$string['sortlevelsasc0'] = '按分数降序';
$string['sortlevelsasc1'] = '按分数升序';
