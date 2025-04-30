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
 * Strings for component 'grading', language 'zh_cn', version '4.4'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '选中“{$a->method}”作为“{$a->area}”区域的评分方法';
$string['activemethodinfonone'] = '没有为“{$a->area}”选择高级的评分方法。就采用最普通的评分方法吧。';
$string['changeactivemethod'] = '将当前评分方法改为';
$string['clicktoclose'] = '点击关闭';
$string['error:gradingunavailable'] = '高级评分方法设置不正确。 请检查论坛设置中的整个论坛评分选项。';
$string['error:notinrange'] = '提供的成绩 \'{$a->grade}\' 无效。 等级必须介于 0 和 {$a->maxgrade} 之间。';
$string['exc_gradingformelement'] = '无法实例化评分表单元素';
$string['formnotavailable'] = '已选择高级评分方法，但评分形式仍需定义。';
$string['gradingformunavailable'] = '请注意：高级评分暂时不可用。恢复正常前只能先使用简单评分。';
$string['gradingmanagement'] = '高级评分';
$string['gradingmanagementtitle'] = '高级评分：{$a->component} ({$a->area})';
$string['gradingmethod'] = '评分方式';
$string['gradingmethod_help'] = '选择此场景中用来计算成绩的高级评分方式。

要关闭高级评分并恢复到默认的评分方法，请选择“直接打分”。';
$string['gradingmethodnone'] = '直接打分';
$string['gradingmethods'] = '评分方式';
$string['manageactionclone'] = '从模板中创建评分表';
$string['manageactiondelete'] = '删除已有的评分表';
$string['manageactiondeleteconfirm'] = '您将要删除评分表 \'{$a->formname}\' 和所有来自\'{$a->component} ({$a->area})\'的相关的信息。请再三考虑一下后果：

* 本次操作不可逆。
* 您可以在不删除本评分表的情况下选择其他的评分方式，包括直接评分
* 所有填在评分表中的信息将会全部丢失。
* 已经计算过并保存在成绩单中的信息不会丢失。然而，它们是怎么算出来的您以后将无从知晓。
* 操作不会影响其他活动中的此评分表的副本。';
$string['manageactiondeletedone'] = '表格删除成功';
$string['manageactionedit'] = '编辑当前表格定义';
$string['manageactionnew'] = '从头定义新的评分表单';
$string['manageactionshare'] = '做为新模板发布';
$string['manageactionshareconfirm'] = '您即将保存一份 \'{$a}\'评分表的副本为新公用模板。其他用户可以通过该模板在他们的活动中创建新的评分表。';
$string['manageactionsharedone'] = '评分表成功以模板形式保存';
$string['noitemid'] = '不能评分。被评分项目不存在。';
$string['nosharedformfound'] = '没有找到模板';
$string['privacy:metadata:grading_definitions'] = '有关在可评分区域中定义的高级评分表格的基本信息。';
$string['privacy:metadata:grading_definitions:areaid'] = '定义高级评分表单的区域 ID。';
$string['privacy:metadata:grading_definitions:copiedfromid'] = '从中复制的评分定义 ID。';
$string['privacy:metadata:grading_definitions:description'] = '高级评分方法的描述。';
$string['privacy:metadata:grading_definitions:method'] = '负责定义的分级方法。';
$string['privacy:metadata:grading_definitions:name'] = '高级评分定义的名称。';
$string['privacy:metadata:grading_definitions:options'] = '此评分定义的一些设置。';
$string['privacy:metadata:grading_definitions:status'] = '此高级评分定义的状态。';
$string['privacy:metadata:grading_definitions:timecopied'] = '复制评分定义的时间。';
$string['privacy:metadata:grading_definitions:timecreated'] = '创建评分定义的时间。';
$string['privacy:metadata:grading_definitions:timemodified'] = '上次修改评分定义的时间。';
$string['privacy:metadata:grading_definitions:usercreated'] = '创建评分定义的用户的 ID。';
$string['privacy:metadata:grading_definitions:usermodified'] = '上次修改评分定义的用户的 ID。';
$string['privacy:metadata:grading_instances'] = '由一位评分者评估的一项可评分项目的评估记录。';
$string['privacy:metadata:grading_instances:feedback'] = '用户给出的反馈。';
$string['privacy:metadata:grading_instances:feedbackformat'] = '用户给出的反馈的文本格式。';
$string['privacy:metadata:grading_instances:raterid'] = '评分实例的用户 ID。';
$string['privacy:metadata:grading_instances:rawgrade'] = '评分实例的成绩。';
$string['privacy:metadata:grading_instances:status'] = '此评分实例的状态。';
$string['privacy:metadata:grading_instances:timemodified'] = '上次修改评分实例的时间。';
$string['privacy:metadata:gradingformpluginsummary'] = '评分方法的数据。';
$string['searchownforms'] = '包含我自己的表格';
$string['searchtemplate'] = '搜索评分表';
$string['searchtemplate_help'] = '您可以在此处搜索评分表，并将其用作新评分表的模板。只需键入应出现在表名称、其描述或表单正文本身中的某个位置的单词即可。若要搜索短语，请将整个查询用双引号括起来。

默认情况下，搜索结果中仅包含已另存为共享模板的评分表单。您还可以在搜索结果中包含所有您自己的评分表单。这样，您可以简单地重复使用您的评分表，而无需共享它们。只有标记为“可供使用”的表单才能以这种方式重复使用。';
$string['statusdraft'] = '草稿';
$string['statusready'] = '就绪';
$string['templatedelete'] = '删除';
$string['templatedeleteconfirm'] = '您将要删除已分享的模板“{$a}”。删除模板不会影响已通过它生成的评分表。';
$string['templateedit'] = '编辑';
$string['templatepick'] = '使用这个模板';
$string['templatepickconfirm'] = '您希望用“{$a->formname}”做为模板在“{$a->component} ({$a->area})”创建新评分表？';
$string['templatepickownform'] = '使用这个评分表作为模板';
$string['templatesource'] = '位置：{$a->component} ({$a->area})';
$string['templatetypeown'] = '自己的表单';
$string['templatetypeshared'] = '分享的模板';
