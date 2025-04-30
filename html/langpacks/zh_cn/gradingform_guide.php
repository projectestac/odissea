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
 * Strings for component 'gradingform_guide', language 'zh_cn', version '4.4'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = '添加常用评语';
$string['addcriterion'] = '添加标准';
$string['additionalcomments'] = '附加评论';
$string['additionalcommentsforcriterion'] = '标准的附加注释，{$a}';
$string['alwaysshowdefinition'] = '向学生展示指南的定义';
$string['backtoediting'] = '返回编辑';
$string['clicktocopy'] = '点击复制此文本到标准反馈';
$string['clicktoedit'] = '点击编辑';
$string['clicktoeditname'] = '点击编辑标准名称';
$string['comment'] = '评论';
$string['commentpickerforcriterion'] = '附加评论{$a}的常用选择器';
$string['comments'] = '常用评语';
$string['commentsdelete'] = '删除评语';
$string['commentsempty'] = '点击编辑评语';
$string['commentsmovedown'] = '下移';
$string['commentsmoveup'] = '上移';
$string['confirmdeletecriterion'] = '您确定要删除此项吗？';
$string['confirmdeletelevel'] = '您确定你要删除这个级别吗？';
$string['criterion'] = '标准名称';
$string['criteriondelete'] = '删除标准';
$string['criterionempty'] = '点击编辑标准';
$string['criterionmovedown'] = '下移';
$string['criterionmoveup'] = '上移';
$string['criterionname'] = '评价标准名称';
$string['criterionremark'] = '{$a} 标准备注';
$string['definemarkingguide'] = '定义评分指南';
$string['description'] = '说明';
$string['descriptionmarkers'] = '给评分人的说明';
$string['descriptionstudents'] = '给学生的说明';
$string['err_maxscoreisnegative'] = '最高分无效，不允许使用负值';
$string['err_maxscorenotnumeric'] = '标准最高分必须是数字';
$string['err_nocomment'] = '评语不能为空';
$string['err_nodescription'] = '给学生的说明不能为空';
$string['err_nodescriptionmarkers'] = '给评分人的说明不能为空';
$string['err_nomaxscore'] = '标准最高分不能为空';
$string['err_noshortname'] = '标准名称不能为空';
$string['err_scoreinvalid'] = '给 {$a->criterianame} 的分数无效，最高分是：{$a->maxscore}';
$string['err_scoreisnegative'] = '给予“{$a->criterianame}”的分数无效，不允许使用负值';
$string['err_shortnametoolong'] = '标准名称必须少于 256 个字符';
$string['gradingof'] = '{$a} 评分';
$string['guide'] = '标记指南';
$string['guidemappingexplained'] = '警告：您的评分指南的最大分数为 <b>{$a->maxscore} 分>，但在您的活动中设定的最大分数为 {$a->modulegrade}。您评分指南中的最大分数将会被扩展成该模块中的最大分数。<br />

    中间分数将会按就近原则被换成可用的分数。';
$string['guidenotcompleted'] = '请为每个标准提供有效的成绩';
$string['guideoptions'] = '评分指南选项';
$string['guidestatus'] = '当前评分指南状态';
$string['hidemarkerdesc'] = '隐藏评分人标准描述';
$string['hidestudentdesc'] = '隐藏学生标准描述';
$string['informationforcriterion'] = '{$a} 信息';
$string['insertcomment'] = '插入常用评论';
$string['maxscore'] = '最高分';
$string['name'] = '名字';
$string['needregrademessage'] = '如果评分指南定义是在该学生被评分后更改，那么在您核对评分指南并更新成绩之前，学生无法看到此评分指南。';
$string['outof'] = '得分/满分{$a}';
$string['pluginname'] = '评分指南';
$string['previewmarkingguide'] = '预览评分指南';
$string['privacy:metadata:criterionid'] = '高级评分标准的标识符。';
$string['privacy:metadata:fillingssummary'] = '存储有关用户成绩的信息和评分指南的反馈。';
$string['privacy:metadata:instanceid'] = '活动成绩标识符。';
$string['privacy:metadata:preference:showmarkerdesc'] = '是否显示评分人标准描述';
$string['privacy:metadata:preference:showstudentdesc'] = '是否显示学生标准描述';
$string['privacy:metadata:remark'] = '此项评分标准备注。';
$string['privacy:metadata:score'] = '此项评分标准的分数。';
$string['regrademessage1'] = '您将要对已经用于评分的评分指南保存更改。请指明对于已经存在的分数是否需要重新审核。如果您设置此选项，那么在学生的文件被重新评测之前，评分指南会对他们隐藏。';
$string['regrademessage5'] = '您将保存该评分指南的更改，该指南已应用于评分过程。成绩簿的分数将保持不变，除非学生的作业被重新评分，否则学生看不到评分指南。';
$string['regradeoption0'] = '不标记重新评分';
$string['regradeoption1'] = '标记重新评分';
$string['remark_help'] = '输入有关此标准的任何附加评论。';
$string['restoredfromdraft'] = '注意：对于该人的上次评分没有正确保存，所以成绩草案已被恢复。如果您想取消这些更改，使用下方的"取消“按钮。';
$string['save'] = '保存';
$string['saveguide'] = '保存评分指南，并令其生效';
$string['saveguidedraft'] = '保存为草稿';
$string['score'] = '分数';
$string['score_help'] = '为此项标准{$a->criterion} 输入一个介于 0 和 {$a->maxscore} 之间的分数。';
$string['scoreforcriterion'] = '{$a} 分数';
$string['showmarkerdesc'] = '显示评分人标准说明';
$string['showmarkspercriterionstudents'] = '向学生显示每个标准的分数';
$string['showstudentdesc'] = '向学生显示标准描述';
