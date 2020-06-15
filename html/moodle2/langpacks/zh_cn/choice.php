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
 * Strings for component 'choice', language 'zh_cn', branch 'MOODLE_36_STABLE'
 *
 * @package   choice
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoices'] = '更多选项';
$string['allowmultiple'] = '允许多选';
$string['allowupdate'] = '是否允许修改投票';
$string['answered'] = '已答';
$string['atleastoneoption'] = '您至少要提供一个可能的答案';
$string['cannotsubmit'] = '对不起，您的提交有误，请再试一次。';
$string['choice'] = '投票项 {$a}';
$string['choiceactivityname'] = '投票：{$a}';
$string['choice:addinstance'] = '添加新投票';
$string['choice:choose'] = '记录投票';
$string['choiceclose'] = '结束时间';
$string['choicecloseson'] = '投票关闭于{$a}';
$string['choice:deleteresponses'] = '删除回复';
$string['choice:downloadresponses'] = '下载回复';
$string['choicefull'] = '该选项已满，不能再选择。';
$string['choicename'] = '投票名称';
$string['choiceopen'] = '开始时间';
$string['choiceoptions'] = '投票选项';
$string['choiceoptions_help'] = '在这里您可以指定参与者应当选择的选项。

您可以输入任意数目的选项。空选项会被忽略。如果您需要超过8个选项，请点击“增加3个选项”按钮。';
$string['choice:readresponses'] = '阅读回复';
$string['choicesaved'] = '已经保存了您的选择';
$string['choicetext'] = '投票描述';
$string['chooseaction'] = '选择一个动作...';
$string['closebeforeopen'] = '你指定的关闭日期早于打开日期';
$string['completionsubmit'] = '用户投票后显示为完成';
$string['description'] = '简要描述';
$string['displayhorizontal'] = '水平显示';
$string['displaymode'] = '这些选项的显示方式';
$string['displayvertical'] = '垂直显示';
$string['eventanswercreated'] = '投票已建立';
$string['eventanswerdeleted'] = '投票结果已删除';
$string['eventanswerupdated'] = '投票已更新';
$string['eventreportdownloaded'] = '投票报告已下载';
$string['eventreportviewed'] = '投票报告已查看';
$string['expired'] = '对不起，该活动已于 {$a} 关闭。';
$string['full'] = '(已满)';
$string['havetologin'] = '只有登录后才能提交您的选择';
$string['includeinactive'] = '包含来自停止活动或已休学用户的投票结果';
$string['indicator:cognitivedepth'] = '投票活动认知深度';
$string['indicator:cognitivedepth_help'] = '这个指标是基于学生在投票活动中所达到的认知深度。';
$string['indicator:socialbreadth'] = '投票活动社会广度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在投票活动中所达到的社会宽度。';
$string['limit'] = '限制';
$string['limitanswers'] = '是否使用限制投票的次数';
$string['limitanswers_help'] = '这个选项允许您限制选择某一选项的参与者数目。如果达到此限制，那么任何人都不能再选择此选项。

如果限制功能关闭，则不会限制选择某一选项的人数。';
$string['limitno'] = '限制{否}';
$string['modulename'] = '投票';
$string['modulename_help'] = '在投票模块中，教师可以提出一个问题，并给出多个应答选项，由学生在线投票选择。

投票的结果可以设置成：1.在学生投票后显示；2.在指定日期后显示；3.完全不对学生显示。显示结果时可以显示学生姓名或匿名。

投票活动可以用做：

* 一个快速投票以刺激学生关于某话题的思考
* 一个快速测验来了解学生的理解程度
* 确定一个决策，例如学生投票决定课程方向';
$string['modulenameplural'] = '投票';
$string['moveselectedusersto'] = '移动所选的用户到...';
$string['multiplenotallowederror'] = '这个投票不允许选择多个选项';
$string['mustchooseone'] = '保存前必须先选择一个答案。没有数据被保存。';
$string['noguestchoose'] = '很抱歉，访客不允许投票';
$string['noresultsviewable'] = '结果目前不能查看。';
$string['notanswered'] = '未答';
$string['notenrolledchoose'] = '抱歉，只有已选课的用户可以投票。';
$string['notopenyet'] = '对于起，此活动在 {$a} 之后才可用';
$string['numberofuser'] = '用户数';
$string['numberofuserinpercentage'] = '用户数百分比';
$string['option'] = '选项';
$string['optionno'] = '选项{no}';
$string['options'] = '选项';
$string['page-mod-choice-x'] = '任意投票模块页面';
$string['pluginadministration'] = '投票管理';
$string['pluginname'] = '投票';
$string['previewonly'] = '这只是该活动的可用选项的预览。您要等到{$a}才可以进行投票。';
$string['privacy'] = '结果公开/保密';
$string['publish'] = '公布结果';
$string['publishafteranswer'] = '学生投票后才向其显示结果';
$string['publishafterclose'] = '只在投票结束后向学生显示结果';
$string['publishalways'] = '总是将结果显示给学生';
$string['publishanonymous'] = '匿名公布结果，不显示学生姓名';
$string['publishinfoanonafter'] = '匿名结果将在您回答后公布。';
$string['publishinfoanonclose'] = '匿名结果将在活动结束后公布。';
$string['publishinfofullafter'] = '完整的结果，显示每个人的选择，将在您回答后公布。';
$string['publishinfofullclose'] = '完整的结果，显示每个人的选择，将在活动结束后公布。';
$string['publishinfonever'] = '此活动结果将不会在您回答后公布。';
$string['publishnames'] = '完全公开结果，显示学生姓名及其选择';
$string['publishnot'] = '不向学生公布结果';
$string['removemychoice'] = '删除我的选择';
$string['removeresponses'] = '删除所有回复';
$string['responses'] = '回复';
$string['responsesresultgraphheader'] = '图示';
$string['responsesto'] = '回复 {$a}';
$string['results'] = '投票结果';
$string['savemychoice'] = '保存我的选择';
$string['search:activity'] = '投票活动信息';
$string['showpreview'] = '显示预览';
$string['showpreview_help'] = '在投票活动开放投票之前，允许学生预览可用选项。';
$string['showunanswered'] = '是否显示未回答的选项';
$string['skipresultgraph'] = '跳过结果统计图';
$string['spaceleft'] = '个可用空间';
$string['spacesleft'] = '个可用空间';
$string['taken'] = '已选';
$string['userchoosethisoption'] = '选择此选项的用户';
$string['viewallresponses'] = '查看 {$a} 个回复';
$string['withselected'] = '对已选的';
$string['yourselection'] = '您的选择';
