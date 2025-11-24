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
 * Strings for component 'tool_generator', language 'zh_cn', version '4.5'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalmodules'] = '附加活动';
$string['additionalmodules_help'] = '选择要包含在测试课程中的更多实现course_backend_generator_create_activity 功能的活动。';
$string['bigfile'] = '大文件{$a}';
$string['courseexplanation'] = '此工具创建标准测试课程，其中包括许多章节、活动和文件。

这旨在提供一个标准化措施，以检查可靠性和各种系统组件（如备份和恢复）的性能。

这项测试很重要，因为之前有很多案例，当面对现实生活中的情况（例如一门包含1000项活动的课程）时，该系统不起作用。

使用此功能创建的课程可能会占用大量数据库和文件系统空间（数十GB）。您需要删除这些课程（并等待各种清理运行）以再次释放此空间。

**请勿在实时系统上使用此功能**。仅在开发人员服务器上使用。（为避免意外使用，此功能将被禁用，除非您还选择了开发人员调试级别。）';
$string['coursesize_0'] = 'XS（~10KB；在~1秒内创建）';
$string['coursesize_1'] = 'S（~10MB；在30秒内创建）';
$string['coursesize_2'] = 'M（~100MB；约在2分钟内创建）';
$string['coursesize_3'] = 'L（~1GB；约在30分钟内创建）';
$string['coursesize_4'] = 'XL（~10GB；约在2小时内创建）';
$string['coursesize_5'] = 'XXL（~20GB；约在4小时内创建）';
$string['coursewithoutusers'] = '所选课程没有用户';
$string['createcourse'] = '创建课程';
$string['createtestplan'] = '创建测试计划';
$string['creating'] = '创建课程';
$string['done'] = '已完成（{$a}s）';
$string['downloadtestplan'] = '下载测试计划';
$string['downloadusersfile'] = '下载用户文件';
$string['error_nocourses'] = '没有生成测试计划的课程';
$string['error_noforumdiscussions'] = '所选课程不含有论坛讨论区';
$string['error_noforuminstances'] = '所选课程不包含论坛模块实例';
$string['error_noforumreplies'] = '所选课程不包含论坛回复';
$string['error_nonexistingcourse'] = '指定的课程不存在';
$string['error_nopageinstances'] = '所选课程不包含页面模块实例';
$string['error_notdebugging'] = '此服务器上不可用，因为调试未设置为“开发人员”';
$string['error_nouserspassword'] = '您需要在config.php中设置$CFG->tool_generator_users_password来生成测试计划';
$string['execute'] = '执行';
$string['execute_cleanup'] = '清理场景';
$string['execute_scenarios'] = '测试场景';
$string['fullname'] = '测试课程：{$a->size}';
$string['maketestcourse'] = '制作测试课程';
$string['maketestplan'] = '制定JMeter测试计划';
$string['notenoughusers'] = '所选课程没有足够的用户';
$string['pluginname'] = '开发数据生成器';
$string['privacy:metadata'] = '开发数据生成器插件不存储任何个人数据。';
$string['progress_checkaccounts'] = '正在检查用户帐户（{$a}）';
$string['progress_coursecompleted'] = '完成的课程（{$a}s）';
$string['progress_createaccounts'] = '创建用户帐户（{$a->from}-{$a->to}）';
$string['progress_createassignments'] = '正在创建作业（{$a}）';
$string['progress_createbigfiles'] = '创建大文件（{$a}）';
$string['progress_createcourse'] = '正在创建课程{$a}';
$string['progress_createforum'] = '创建论坛（{$a}帖子）';
$string['progress_createpages'] = '正在创建页面（{$a}）';
$string['progress_createsmallfiles'] = '创建小文件（{$a}）';
$string['progress_createusers'] = '创建用户帐户（{$a}）';
$string['progress_enrol'] = '为用户报名课程（{$a}）。';
$string['progress_sitecompleted'] = '完成的站点（{$a}s）';
$string['shortsize_0'] = '特小';
$string['shortsize_1'] = '小';
$string['shortsize_2'] = '中';
$string['shortsize_3'] = '大';
$string['shortsize_4'] = '特大';
$string['shortsize_5'] = '超特大';
$string['sitesize_0'] = 'XS（~10MB；3门课程，约30秒内创建）';
$string['sitesize_1'] = 'S（~50MB；8门课程，约2分钟内创建）';
$string['sitesize_2'] = 'M（~200MB；73门课程，约10分钟内创建）';
$string['sitesize_3'] = 'L（~1\'5GB；277门课程，约1.5小时内创建）';
$string['sitesize_4'] = 'XL（~10GB；1065门课程，约5小时内创建）';
$string['sitesize_5'] = 'XXL（~20GB；4177门课程，约10小时内创建）';
$string['size'] = '课程大小';
$string['smallfiles'] = '小文件';
$string['step_example'] = '步骤示例：';
$string['targetcourse'] = '测试目标课程';
$string['testplanexplanation'] = '此工具将创建JMeter测试计划文件以及用户凭据文件。

此测试计划设计为与{$a}配合使用，这使得在特定Moodle环境中运行测试计划变得更容易，收集有关运行的信息并比较结果，因此您需要下载它并使用它的test_runner.sh脚本，或者按照安装和使用说明进行操作。

您需要在config.php中为课程用户设置密码（例如$CFG->tool_generator_users_password=\'moodle\'）。此密码没有默认值以防止意外使用该工具。您需要使用更新密码选项，以防止您的课程用户有其他密码，或者他们是由tool_generator生成的但未设置$CFG->tool_ generator_users_password 的值，

它是tool_generator的一部分，因此它可以很好地与课程和站点生成器生成的课程配合使用，也可用于至少包含以下内容的任何课程：

* 足够的注册用户（取决于您选择的测试计划大小），密码重置为“moodle”
* 页面模块实例
* 至少包含一个讨论和一个回复的论坛模块实例

在运行大型测试计划时，您可能会考虑您的服务器容量，因为JMeter生成的负载量将会特别大。我们已经根据线程（用户）的数量调整了爬升周期，以减少这种情况，但负担仍然很大。

**不要在实时系统上运行测试计划**。此功能仅创建用于馈送JMeter的文件，因此不会对JMeter造成危险，但请您不要在生产站点中运行此测试计划。';
$string['testplansize_0'] = 'XS（{$a->users}用户、{$a->loops}循环和{$a->ramup}加速期）';
$string['testplansize_1'] = 'S（{$a->users}用户、{$a->loops}循环和{$a->ramup}加速期）';
$string['testplansize_2'] = 'M（{$a->users}用户，{$a->loops}循环和{$a->rampup}加速期）';
$string['testplansize_3'] = 'L（{$a->users}用户，{$a->loops}循环和{$a->ramup}加速期）';
$string['testplansize_4'] = 'XL（{$a->users}用户、{$a->loops}循环和{$a->rampup}加速期）';
$string['testplansize_5'] = 'XXL（{$a->users}用户、{$a->loops}循环和{$a->rampup}加速期）';
$string['testscenario'] = '创建测试场景';
$string['testscenario_description'] = '创建测试方案 使用有限的功能文件语法来创建运行手动测试所需的所有元素。';
$string['testscenario_errorparsing'] = '解析特征文件错误：{$a}';
$string['testscenario_file'] = '特征文件';
$string['testscenario_filedesc'] = '上传特征文件只能包含具有core_data_generator步骤的场景或一些不需要 selenium 的特定步骤。除了带有 @cleanup 标签的场景外，所有场景都将同时执行。';
$string['testscenario_filedesc_cleanup'] = '具有 @cleanup 标签的场景仅在 “执行” 设置为 “执行” 时执行
设置为 “Cleanup”。要通过 CLI 执行清理，您可以使用 --cleanup 选项。';
$string['testscenario_filedesc_list'] = '以下是可在测试场景功能文件中使用的步骤列表：';
$string['testscenario_invalidfile'] = '文件格式无效或包含无效步骤。';
$string['testscenario_invalidstep'] = '未知的一步。创建测试场景只接受生成器步骤。';
$string['testscenario_nosteps'] = '文件中没有要执行的步骤。';
$string['testscenario_notready'] = '尚未安装 Composer 和 Behat 库。<br><br>执行此命令以启用此工具：<strong>php admin/tool/generator/cli/runtestscenario.php</strong>';
$string['testscenario_outline'] = '不支持场景概要。';
$string['testscenario_scenarionosteps'] = '这个场景没有任何步骤。';
$string['testscenario_steps'] = '测试场景步骤：';
$string['updateuserspassword'] = '更新课程用户密码';
$string['updateuserspassword_help'] = 'JMeter需要以课程用户身份登录，您可以在config.php中使用$CFG->tool_generator_users_password设置用户密码；此设置根据$CFG->tool_generator_users_password更新课程用户的密码。如果您使用的课程不是由tool_generator生成的，或者创建测试课程时未设置$CFG->tool_generator_users_password，则此选项非常有用。';
