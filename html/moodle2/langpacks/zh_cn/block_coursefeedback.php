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
 * Strings for component 'block_coursefeedback', language 'zh_cn', branch 'MOODLE_26_STABLE'
 *
 * @package   block_coursefeedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminpage_html_activefeedbacka'] = '现有调查问卷';
$string['adminpage_html_activefeedbackb'] = '选择一份问卷。此问卷会显示在课程中的新增版块中。<br />您可以在“修改/新增 调查问卷”中进行更改。';
$string['adminpage_html_allowhidinga'] = '允许隐藏';
$string['adminpage_html_allowhidingb'] = '如果允许，教师能够编辑对版块是否可见。';
$string['adminpage_html_defaultlanguagea'] = '默认语言';
$string['adminpage_html_defaultlanguageb'] = '问题的默认语音会列出，如果存在语音加载失败（例如：用户首选语言未定义）。那么您所增加的问题会被加入默认语言中。';
$string['adminpage_html_setstickya'] = '钉住它';
$string['adminpage_html_setstickyb'] = '如果允许，在所有课程的默认版块中都会增加您设置的调查问卷。';
$string['adminpage_link_feedbackedit'] = '编辑/新建 调查问卷';
$string['caution'] = '警告';
$string['copyof'] = '复制 "{$a}"';
$string['coursefeedback:addinstance'] = '增加此版块到课程页';
$string['coursefeedback:download'] = '保存当前课程调查问卷到文件';
$string['coursefeedback:evaluate'] = '评估当前课程调查问卷';
$string['coursefeedback:managefeedbacks'] = '修改版块课程调查问卷的全剧设置';
$string['coursefeedback:myaddinstance'] = '增加该版块到“我的主页”（如果在我的主页无用，那么应该对所有人屏蔽掉）';
$string['coursefeedback:viewanswers'] = '查看当前课程调查问卷的分析';
$string['download_html_filename'] = '结果';
$string['download_thead_questions'] = '问题';
$string['form_area_questiontext'] = '编辑文本';
$string['form_header_confirm'] = '必要的确认';
$string['form_header_deleteanswers'] = '删除用户回答';
$string['form_header_deletelang'] = '删除语言';
$string['form_header_editfeedback'] = '编辑调查问卷';
$string['form_header_editquestion'] = '编辑问题';
$string['form_header_newfeedback'] = '新调查问卷';
$string['form_header_newquestion'] = '新问题';
$string['form_header_question'] = '问题 {$a}';
$string['form_html_currentlang'] = '您正在编辑 {$a}';
$string['form_html_deleteanswerstext'] = '调查问卷现在不能修改，因为已经存在回执。您可以删除现有问卷或者拷贝一份新问卷。';
$string['form_html_deleteanswerswarning'] = '回执数据将会永久删除。<br/>请确认数据已不再需要。';
$string['form_html_nolangimplemented'] = '该回执没有默认的语言。';
$string['form_html_notextendable'] = '您不能增加问题，因为没有额外的语言供选择。';
$string['form_select_changepos'] = '检测新位置';
$string['form_select_confirmyesno'] = '确认删除？';
$string['form_select_deleteanswers'] = '删除用户回执？';
$string['form_select_newlang'] = '语言';
$string['form_select_unwantedlang'] = '选择语言 <br/><span style="font-size: x-small;">（可多选）<span>';
$string['form_submit_feedbacksubmit'] = '保存评估';
$string['page_headline_admin'] = '课程问卷调查管理';
$string['page_headline_listoffeedbacks'] = '调查问卷列表';
$string['page_headline_listofquestions'] = '问卷 \'{$a}\'';
$string['page_html_activated'] = '课程调查问卷 ({$a}) 已被注册为当前调查问卷。';
$string['page_html_answersdeleted'] = '用户的回执已删除。';
$string['page_html_editallquestions'] = '应用于所有语言';
$string['page_html_evalintro'] = '课程可以在这里进行评估。课程问卷调查会以匿名的形式提交，并且结果只会显示给相关的课程管理人员。';
$string['page_html_evaluated'] = '您已经评估过该课程了。';
$string['page_html_intronotifications'] = '该回执需满足如下条件（多个）：';
$string['page_html_nofeedbackactive'] = '问卷调查已置未非激活状态。';
$string['page_html_nolinks'] = '您未被授权填写此份调查问卷。';
$string['page_html_noquestions'] = '没有可用问题';
$string['page_html_norelations'] = '所有的问题都必须设置至少一门语言。';
$string['page_html_viewnavbar'] = '调查问卷分析';
$string['page_link_backtoconfig'] = '返回网站管理';
$string['page_link_backtofeedbackview'] = '返回上一页';
$string['page_link_deletelanguage'] = '删除语言';
$string['page_link_download'] = '保存结果为 {$a} 格式';
$string['page_link_evaluate'] = '评估课程';
$string['page_link_newlanguage'] = '添加其他语言';
$string['page_link_newquestion'] = '新增问题';
$string['page_link_newtemplate'] = '新建调查问卷';
$string['page_link_noquestion'] = '没有可用问题 - 新建一个问题';
$string['page_link_settings'] = '管理';
$string['page_link_showlistofquestions'] = '编辑问题';
$string['page_link_use'] = '使用';
$string['page_link_view'] = '分析';
$string['perm_header_editnotpermitted'] = '该问卷调查暂时因如下问题而不能修改：';
$string['perm_html_answersexists'] = '该问卷调查已经有用户填写或提交。';
$string['perm_html_danswerslink'] = '为创建一个新的问卷调查，您可以 <a href="admin.php?fid={$a}&mode=feedback&action=new">拷贝一份现有问卷</a> 或 <a href="admin.php?fid={$a}&mode=feedback&action=danswers">删除用户的回执</a>.';
$string['perm_html_duplicatelink'] = '为创建一个新的问卷调查，您可以 <a href="admin.php?fid={$a}&mode=feedback&action=new">拷贝一份现有问卷</a> 或拷贝一份现有问卷。';
$string['perm_html_erroractive'] = '您不能修改此问卷调查。';
$string['pluginname'] = '课程调查问卷';
$string['table_header_abstain'] = '不打分';
$string['table_header_bad'] = '差';
$string['table_header_good'] = '非常好';
$string['table_header_languages'] = '可选语言';
$string['table_header_questions'] = '问题';
$string['table_html_abstain'] = '未打分';
$string['table_html_average'] = '平均';
$string['table_html_nofeedback'] = '无调查问卷';
$string['table_html_undefinedlang'] = '丢失翻译文件。语言 \'{$a}\' 不可用。';
$string['table_html_votes'] = '投票数';
$string['untitled'] = '无标题';
