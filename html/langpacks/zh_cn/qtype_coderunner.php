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
 * Strings for component 'qtype_coderunner', language 'zh_cn', version '4.4'.
 *
 * @package     qtype_coderunner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['HIDE'] = '隐藏';
$string['HIDE_IF_FAIL'] = '如果失败了隐藏';
$string['HIDE_IF_SUCCEED'] = '如果成功了隐藏';
$string['SHOW'] = '显示';
$string['aborted'] = '测试因错误而中止。';
$string['ace-language'] = 'Ace语言';
$string['ace_ui_notready'] = 'Ace编辑器未准备好。重新加载页面试试？';
$string['addingcoderunner'] = '添加新的CodeRunner题目';
$string['advanced_customisation'] = '高级设置';
$string['ajax_error'] = '***AJAX错误。不要保存！***';
$string['allok'] = '通过所有测试！';
$string['allornone'] = '必须为所有测试用例提供测试代码，要么任何测试用例都不要提供测试代码。';
$string['allornothing'] = '非满分即零蛋';
$string['allornothing_help'] = '如果勾选了\'非满分即零蛋\'，则所有测试用例必须满足提交才能获得任何分数。否则，通过将所有通过的测试用例的分数相加，并将其表示为最大可能标记的分数，从而获得分数。

只有在未选中\'非满分即零蛋\'复选框时，才能指定每个测试用例标记。

如果使用一个模板分级器，将部分分数授予测试用例，通常应取消\'非满分即零蛋\'。';
$string['allowattachments'] = '允许附件';
$string['allowattachments_help'] = '是否允许学生在他们的提交文件中添加附件，如果允许，有多少。附件被复制到运行时工作目录中，并且在Twig变量{{ ATTACHMENTS }}中为模板提供了一个逗号分隔的附件名称列表。警告：对于具有大型类和/或大型附件的Moodle和Jobe服务器，允许附件可能会影响性能或磁盘空间。2019年2月之前的Moodle服务器和Jobe服务器无限期地存储所有附件。';
$string['allowedfilenames'] = '允许的文件名';
$string['allowedfilenames_help'] = '如果不是空的，所有上载的文件名必须与给定的PHP（Perl）正则表达式匹配。例如，使用\'.+\\.cpp\'来允许任何C++文件或\'(?!Prog)\\.java\'允许除\'Prog.java\'之外的Java文件. 此外，文件名只能包含字母数字字符加下划线、连字符和句点，不能以双下划线（__）开头，并且不能与任何支持文件名冲突。\'描述\'是向学生显示的文本消息，用于解释预期的文件。保留为空以显示正则表达式本身。将两者都保留为空以绕过正则表达式检查。';
$string['allowedfilenamesregex'] = '允许的文件名(正则表达式)';
$string['allowmultiplestdins'] = '允许多个输入';
$string['answer'] = '答案';
$string['answer_help'] = '可以在此处输入示例答案，供问题作者检查，并可以选择在查看过程中向学生显示。 批量测试器脚本也使用它。 保存时将检查非空答案的正确性，除非未选中\'保存时验证\\';
$string['answerbox_group'] = '答案框';
$string['answerbox_group_help'] = '设置要为答案框分配的行数。这将设置控制应答框的用户界面元素（例如Ace）的最小高度。宽度设置为适合窗口。如果答案垂直或水平溢出方框，则会出现滚动条。';
$string['answerboxlines'] = '行';
$string['answerpreload'] = '预检查的答案框';
$string['answerpreload_help'] = '提供在此的文本将预加载到学生的答案框中。';
$string['answerprompt'] = '答案：';
$string['answerrequired'] = '请提供非空答案';
$string['answertooshort'] = '回答太短。 必须至少包含{$a}个字符。';
$string['asolutionis'] = '老师的解决方法';
$string['atleastonetest'] = '您必须为此问题至少提供一个测试用例。';
$string['attachmentoptions'] = '附件选项 (experimental)';
$string['attachmentsoptional'] = '附件可选';
$string['attachmentsrequired'] = '要求附件';
$string['attachmentsrequired_help'] = '此选项指定为学生提交答案打分所需的最小附件数。';
$string['autotagbycategoryindextitle'] = 'CR问题自动标签功能';
$string['autotagbycategorytitle'] = 'CR根据类别自动打标签';
$string['bad_dotdotdot'] = '误用\'…\'。必须在末尾，放在两个递增的惩罚数后面';
$string['bad_empty_splitter'] = '使用组合模板时，测试用例分割串不能为空';
$string['bad_new_prototype_name'] = '新的原型名称非法：已被使用';
$string['badacelangstring'] = '不正确的ACE字符串';
$string['badcputime'] = 'CPU的时间限制必须留空，或为大于零的整数';
$string['bademptyprecheck'] = '预提交校验失败，出现以下意外输出：';
$string['badfilenamesregex'] = '非法的正则表达式';
$string['badfiles'] = '不允许的文件名字: {$a}';
$string['badjson'] = '组合打分输出的JSON输出串错误。输出是：{$a->output}';
$string['badjsonfunc'] = '未知的JSON内嵌func ({$a->func})';
$string['badmemlimit'] = '内存限制必须留空或非负整数';
$string['badpenalties'] = '惩罚系数必须是是范围[0，100]内的数字，以逗号分隔';
$string['badquestion'] = '问题有错误';
$string['badrandomintarg'] = 'JSON @randomint 函数的参数错误';
$string['badrandompickarg'] = 'JSON @randompic 函数的参数错误';
$string['badsandboxparams'] = '\'其他\'字段（沙盒参数）必须为空白或有效的JSON记录';
$string['badtemplateparams'] = '模板参数必须为空或有效的JSON记录';
$string['brokencombinator'] = '期望{$a->numtests}测试结果，得到{$a->numresults}。可能是输出过多或题目本身有错误？';
$string['brokentemplategrader'] = '来自打分器的错误输出：{$a->output}。程序执行可能已中止（例如超时或超出内存限制）。';
$string['bulkquestiontester'] = '<a href="{$a->link}">批测试脚本</a>测试当前上下文中所有问题的示例答案是否正确打分。只有在添加了一些带有示例答案的问题时才有用；初始安装时没有。';
$string['bulktestallincontext'] = '测试所有';
$string['bulktestcontinuefromhere'] = '从这里开始重新或继续运行';
$string['bulktestindextitle'] = 'CR批测试';
$string['bulktestrun'] = '运行系统中所有问题的所有测试（慢！仅限管理员）';
$string['bulktesttitle'] = '测试在 {$a} 中的题目';
$string['coderunner'] = '程序代码';
$string['coderunner_help'] = '对一个问题作答，不管该问题是程序片段、函数或整个程序，作答者以一种满足该规范的指定计算机语言输入源代码。';
$string['coderunner_install_testsuite_failures'] = '测试失败的用例';
$string['coderunner_install_testsuite_intro'] = '此页面使您可以测试带有示例答案的CodeRunner问题是否正常运行。';
$string['coderunner_install_testsuite_noanswer'] = '不带示例答案的问题';
$string['coderunner_install_testsuite_title'] = '适用于CodeRunner的测试套件示例答案';
$string['coderunner_install_testsuite_title_desc'] = '<a href="{$a-> link}\'>示例答案测试脚本</a>验证带有示例答案的问题是否正确执行。';
$string['coderunner_link'] = 'question/type/coderunner';
$string['coderunner_question_type'] = 'CR题目类型：';
$string['coderunnercategories'] = 'CR题目的类别';
$string['coderunnercontexts'] = 'CR题目的上下文';
$string['coderunnersettings'] = 'CR设置';
$string['coderunnersummary'] = '答案是程序代码，在一组测试用例的上下文中执行，以确定其正确性。';
$string['coderunnertype'] = '问题类型';
$string['coderunnertype_help'] = '选择编程语言和问题类型。选择类型后，可以在下面的\'问题类型详细信息\'面板中查看详细信息。';
$string['columncontrols'] = '结果表';
$string['columncontrols_help'] = '复选框，选择提交后应向学生显示结果表的哪些列';
$string['confirm_proceed'] = '如果在未选中\'定制\'的情况下保存此问题，则所做的任何定制都将丢失。 继续吗？';
$string['confirmreset'] = '舍弃您在此问题上的所有工作，并将答案框重置为原始的预加载值？';
$string['cputime'] = 'CPU运行时间限制(秒)';
$string['customisation'] = '定制';
$string['customisationcontrols'] = '定制';
$string['customise'] = '定制';
$string['datafiles'] = '支持文件';
$string['datafiles_help'] = '执行扩展模板程序时，此处上载的所有文件都将添加到工作目录中。 这样可以方便地添加大量数据或支持文件。';
$string['default_penalty_regime'] = '默认的惩罚系数';
$string['default_penalty_regime_desc'] = '用于新问题的默认惩罚机制，包括用逗号分隔的惩罚百分比列表，可选地以", ..."结尾以表示等差数列的系数。';
$string['display'] = '显示';
$string['downloadquizattempts'] = '下载测验的答卷';
$string['downloadquizattemptshelp'] = '单击您要下载的课程和测验的相应课程和/或下载按钮。 课后括号中的数字是至少提交一
         次的课程中测验的数量。 测验名称后面括号中的数字是提交的数字。';
$string['editingcoderunner'] = '编辑一个CR题目';
$string['empty_new_prototype_name'] = '新的问题类型名不能为空';
$string['emptypenaltyregime'] = '惩罚系数必须定义（从版本3.1开始）';
$string['enable'] = '激活';
$string['enable_diff_check'] = '启用 \'查看差异\' 按钮';
$string['enable_diff_check_desc'] = '如果学生回答错误并使用完全匹配验证器，则向他们显示\'显示差异\'按钮（实验性）';
$string['enable_sandbox_desc'] = '允许使用指定的沙箱运行学生提交的内容';
$string['enablecombinator'] = '启用组合打分';
$string['equalitygrader'] = '精确匹配';
$string['error_loading_prototype'] = '加载原型出错，可能是网络问题或服务器down机？';
$string['errorstring-accessdenied'] = '访问沙盒被拒绝';
$string['errorstring-autherror'] = '未授权使用沙盒';
$string['errorstring-jobe400'] = '从Jobe服务器发来的错误信息';
$string['errorstring-ok'] = '确定';
$string['errorstring-overload'] = '因为服务器过载导致任务没有被运行。过一会再试试吧？';
$string['errorstring-pastenotfound'] = '请求的任务不存在';
$string['errorstring-submissionfailed'] = '提交沙盒验证失败';
$string['errorstring-submissionlimitexceeded'] = '提交沙盒请求达到限制次数';
$string['errorstring-unknown'] = '执行代码时发生意外错误。 沙盒服务器可能已关闭或过载。 也许不久之后再试一次？';
$string['errorstring-wronglangid'] = '请求的语言不存在';
$string['expand'] = '展开';
$string['expandtitle'] = '显示问题类别';
$string['expected'] = '期望输出';
$string['expected_help'] = '测试的预期输出。模板显示为 {{TEST.expected}}';
$string['expectedcolhdr'] = '期望的结果';
$string['exportthisquestion'] = '输出本题目';
$string['exportthisquestion_help'] = '这将创建一个仅包含此问题的Moodle XML导出文件。 如果您想向开发人员报告CodeRunner中的一个错误，那么这个很有用。';
$string['extra'] = '其余的模板数据';
$string['extra_help'] = '模板使用的有时有用的额外文本字段，以{{TEST.extra}}访问';
$string['fail'] = '失败';
$string['failedhidden'] = '您的代码未通过一项或多项隐藏测试。';
$string['failedntests'] = '失败了 {$a->numerrors} 个用例';
$string['failedtesting'] = '失败的测试';
$string['fails'] = '失败';
$string['feedback'] = '反馈';
$string['feedback_help'] = '选择\'通过测验设置\'以允许测验反馈设置来控制结果表的显示，选择\'强制显示\'以显示结果表，无论如何都可以使用\'强制隐藏\'来隐藏结果表';
$string['feedback_hide'] = '强制隐藏';
$string['feedback_quiz'] = '本测验设置的';
$string['feedback_show'] = '强制输出';
$string['fileheader'] = '支持文件';
$string['filenamesexplain'] = '描述';
$string['filenamesregex'] = '正则表达式';
$string['filloutoneanswer'] = '您必须输入符合规范的源代码。您输入的代码将被执行，以确定其正确性，并相应地打分。';
$string['firstfailure'] = '第一个失败的测试用例：{$a}';
$string['forexample'] = '例如';
$string['globalextra'] = '其他的全局选项';
$string['globalextra_help'] = '模板作者通用的文本字段，例如每个测试用例的额外字段，但对所有测试都是全局的。 模板作者可以使用{{ QUESTION.globalextra }}。';
$string['goodemptyprecheck'] = '通过';
$string['gotcolhdr'] = '得到的结果';
$string['grader'] = '打分器';
$string['grading'] = '打分';
$string['gradingcontrols'] = '打分控制';
$string['hidden'] = '隐藏';
$string['hidedifferences'] = '隐藏差异';
$string['hiderestiffail'] = '如果失败了隐藏其余的用例';
$string['hoisttemplateparams'] = '提拉模板参数';
$string['howtogetmore'] = '关更多详细信息，请选中\'在保存时验证\'以保存问题，然后手动进行测试';
$string['ideone_pass'] = 'Ideone 服务器密码';
$string['ideone_pass_desc'] = '连接到已弃用的Ideone服务器时使用的密码（如果启用了ideone沙箱）';
$string['ideone_user'] = 'Ideone 服务器用户';
$string['ideone_user_desc'] = '连接到已弃用的Ideone服务器时要使用的登录名（如果启用了ideone沙箱）';
$string['illegalformat'] = '非法格式 ({$a->format}) 在\'列格式\'中';
$string['info_unavailable'] = '问题类型信息不适用于自定义问题。';
$string['inputcolhdr'] = '输入';
$string['insufficientattachments'] = '附件不够数, 要求 {$a} 个.';
$string['is_prototype'] = '用于原型';
$string['iscombinatortemplate'] = '是否组合式';
$string['jobe_apikey'] = 'Jobe的API密钥';
$string['jobe_host'] = 'Jobe服务器';
$string['language'] = '沙盒语言';
$string['languages'] = '语言';
$string['languageselectlabel'] = '语言';
$string['mark'] = '得分';
$string['marking'] = 'Mark allocation';
$string['markinggroup'] = '得分';
$string['maxfilesize'] = '最大允许的文件大小（字节）';
$string['maxfilesize_help'] = '选择最大文件上传大小（字节）。 允许使用大类上传大文件会影响Moodle和Jobe服务器上的性能和磁盘空间。';
$string['memorylimit'] = '内存限制 (MB)';
$string['missinganswers'] = '缺少答案';
$string['missingoutput'] = '您必须提供此测试用例的预期输出。';
$string['missingprototypes'] = '缺少原型';
$string['morehidden'] = '一些隐藏的测试用例也失败了。';
$string['multipledefaults'] = '默认最多可以选择一种语言';
$string['mustrequirefewer'] = '您所需要的附件数量不能超过允许的数量。';
$string['nearequalitygrader'] = '几乎完全匹配';
$string['negativeorzeromark'] = '分数必须大于零';
$string['nodetailsavailable'] = '选择一个问题类型以查看详细的帮助。';
$string['noerrorsallowed'] = '您的代码必须通过所有测试才能获得任何分数。 再试一次吧。';
$string['nonnumericmark'] = '非数字打分';
$string['noqtype'] = '未选择问题类型';
$string['nosampleanswer'] = '没有示例答案';
$string['options'] = '选项';
$string['ordering'] = '排序';
$string['pass'] = '通过';
$string['passes'] = '通过';
$string['penaltyregime'] = '(惩罚系数: {$a} %)';
$string['penaltyregimelabel'] = '惩罚系数：';
$string['pluginname_link'] = '题目/类型/CR';
$string['pluginnameadding'] = '增加一个CR题目';
$string['pluginnameediting'] = '编辑一个CR题目';
$string['pluginnamesummary'] = 'CodeRunner：在沙箱中运行学生提交的代码';
$string['precheck'] = '提交前预检查';
$string['precheck_all'] = '全部的';
$string['precheck_disabled'] = '禁用';
$string['precheck_empty'] = '空';
$string['precheck_examples'] = '例子';
$string['precheck_help'] = '如果启用了\'预检查\'，则学生将在通常的检查按钮的左侧有一个额外的按钮，使他们可以避免罚分
去运行测试，以对照问题的部分测试用例，检查其代码的正确性。

如果选择\'空\'，则将使用一个测试用例对每个测试模板进行一次运行，其中所有字段（测试代码，标
准输入，期望输出等）均为空字符串。非空输出被视为预检查失败。请谨慎使用：
某些问题类型将无法正确处理此问题，例如那些有生成输出的\'编写程序\'类型的问题。

如果选择了\'例子\'，则将针对所有已检查\'用作例子\'的测试用例来测试代码的正确性。

如果选择\'选中的\'，则会向每个测试用例添加一个额外的UI元素，以允许教师选择测试的特定子集。

如果选择\'全部的\'，则将运行所有测试用例（如果模板代码选择的话，尽管它们的行为可能与正常的
Check不同）。

模板可以使用Twig参数{{ IS_PRECHECK }}来检查运行是否为\'预检查\'运行，在预检查运行期间
为\'1\'，否则为\'0\'。';
$string['precheck_only'] = '仅是预检查';
$string['precheck_selected'] = '选择的';
$string['precheckingemptyset'] = '设置了预检查示例，但没有任何示例！';
$string['prototypeQ'] = '是原型？';
$string['prototype_error'] = '***原型加载失败。 不要保存！ ***';
$string['prototype_load_failure'] = '原型加载错误：';
$string['prototypecontrols'] = '原型';
$string['prototypeusage'] = 'CodeRunner课程{$a}的问题原型用法';
$string['prototypeusageindex'] = '可用的课程';
$string['qtype_c_function'] = '<p>C函数编写问题类型。学生的答案应该是完整的C函数，但可以选择在其前面添加其他自包含的C代码，
例如预处理器指令和支持函数。</p>
<p>针对此类问题的测试代码通常会调用学生的函数，传入某些测试参数，并输出结果，例如
<pre>printf("%d\\n", someIntFunction(blah1, blah2))</pre>
测试用例的<i>期望输出</i>字段是测试的预期输出。</p>
<p>如果没有为任何测试用例提供标准输入，那么将构建一个测试程序，其中包括：</p>
<ol>
<li>以下标准的 #includes：stdlib.h，ctype.h，string.h，stdbool.h，math.h </ li>
<li>学生的答案。</li>
<li>对于每个给定的测试用例，用括号括起来的一系列块序列。每个块仅包含测试用例的测试代码。在
代码块之间还添加了一个<i>printf</i>语句，以打印一个特殊的分隔串，该分隔串用于将输出拆分回
各个测试用例输出。</li>
</ol>
<p>但是，如果任何测试用例具有非空标准输入，则将运行多个测试程序，每个测试用例一个。</p>
<p>测试用例的<i>其余</ i>字段将被忽略。</p>';
$string['qtype_c_program'] = '<p>用于C语言写程序问题，其中没有针对每个测试用例的代码，不同的测试
只是使用不同的标准输入（stdin）数据。学生的答案应该是一个完整的可运行程序，它是按原样运行的，
不需要CodeRunner修改，每个测试用例一次。测试代码的值和每个测试用例的额外字段都将被忽略。</p>
<p>如果需要为问题设置特殊的编译或链接参数，可以对其进行自定义（单击\'自定义\'复选框），
打开\'高级自定义\'部分，并在\'参数\'字段中输入合适的值。例如<pre>{"linkargs":["-lm"]}</pre>链接到
数学库。';
$string['qtype_cpp_function'] = '<p>用于C++函数编写的问题类型。
学生的答案应该是一个完整的C++函数，当然可以选择在其前面加上一点代码（例如预处理器指令和
支持函数）</p>。
<p>在每个测试用例中，此类问题的测试代码通常会调用学生的函数，传入某些测试参数，并输出结果，
例如
<pre>cout << someIntFunction(blah1, blah2))</pre>
测试用例的<i>期望输出</i>字段是测试的预期输出。
<p>
如果没有为任何测试用例提供标准输入，那么将构建一个测试程序，其中包括：</p>
<ol>
<li>以下标准的 #includes: iostream, fstream, string, math, vector and algorithm</li>
<li><code>using namespace std;</code></li>
<li>学生答案</li>
<li>对于每个给定的测试用例，用括号括起来的一系列块序列。
每个块均包含测试用例的<i>其余</i>字段（通常为空），紧跟着是测试代码。在代码块之间还添加了
一个<i>printf</i>语句，以打印一个特殊的分隔串，该分隔串用于将输出拆分回各个测试用例输出。</li>
</ol>
<p>但是，如果任何测试用例具有非空标准输入，则将运行多个测试程序，每个测试用例一个。
</p>';
$string['qtype_cpp_program'] = '<p>用于C++编写程序的问题，其中没有按测试用例编写的代码，并且
不同的测试仅使用不同的标准输入（stdin）数据。 学生的答案应该是一个完整的可运行程序，按原样运行，无需CodeRunner修改，每个测试用例一次。 测试代码
的值和每个测试用例的多余字段都将被忽略。</p>';
$string['qtypehelp'] = '问题类型的帮助';
$string['question_type_changed'] = '更改问题类型。 单击\'确定\'重新加载自定义字段，单击\'取消\'保留您的自定义字段。';
$string['questioncheckboxes'] = '定制';
$string['questioncheckboxes_help'] = '要自定义问题类型，例如 要编辑问题模板或沙箱参数，请单击\'自定义\'复选框，并阅读新显示的表单元素上的可用帮助以获取更多信息。

如果单击模板调试复选框，则为每个测试用例生成的程序将显示在输出中。';
$string['questionloaderror'] = '加载问题失败';
$string['questionpreview'] = '问题预览';
$string['questiontype'] = '问题类型';
$string['questiontype_required'] = '您必须选择问题的类型';
$string['questiontypedetails'] = '问题类型的细节';
$string['regexgrader'] = '正则表达式';
$string['reset'] = '重置答案';
$string['resethover'] = '放弃更改并将答案重置为原始预加载值';
$string['resultcolumnheader'] = '结果';
$string['resultcolumns'] = '结果栏';
$string['resultcolumnsnotjson'] = '\'结果\'列字段不是有效的JSON字符串';
$string['resultcolumnsnotlist'] = '结果列字段必须为列说明符的JSON编码列表';
$string['resultcolumnspecbad'] = '碰到了无效的列说明符：每个列说明符必须是两个或更多字符串的列表';
$string['resultstring-abnormaltermination'] = '非正常结束';
$string['resultstring-compilationerror'] = '编译错误';
$string['resultstring-illegalsyscall'] = '非法的函数调用';
$string['resultstring-internalerror'] = 'CR内部错误：请告诉老师';
$string['resultstring-memorylimit'] = '超过了内存限制';
$string['resultstring-norun'] = '没有运行';
$string['resultstring-outputlimit'] = '输出过量';
$string['resultstring-runtimeerror'] = '运行错误';
$string['resultstring-sandboxoverload'] = '沙盒服务器过载。 也许很快再试一次会好了？';
$string['resultstring-sandboxpending'] = 'CR沙盒挂起错误：请告诉老师';
$string['resultstring-sandboxpolicy'] = 'CR沙盒策略错误：请告诉老师';
$string['resultstring-success'] = '成功';
$string['resultstring-timelimit'] = '超过了时间限制';
$string['run_failed'] = '运行测试用例失败';
$string['sampleanswerattachments'] = '例子答案的附件';
$string['sampleanswerattachments_help'] = '如果示例答案需要附件文件，请在此处上传';
$string['sandboxcontrols'] = '沙盒';
$string['sandboxcontrols_help'] = '选择用于运行学生提交内容的沙箱。
DEFAULT使用可用于所选语言的最高优先级沙箱。
由于Jobe已替换了所有沙箱类型，但已弃用的\'ideonesandbox\'除外，因此建议将值\'jobesandbox\'
正常使用，如果Jobe服务器关闭，则会产生更好的错误消息。

您还可设置每个测试用例运行所允许的最大CPU时间（以秒为单位）以及单个测试用例运行可以消耗
的最大内存（MB）。空白条目使用沙盒的默认值（CPU时间限制通常为5秒，内存量取决于语言），但
默认设置可能不适用于资源消耗大的程序。最大内存的0值不会导致任何限制。此处指定的内存量是运
行所需的总量，包括所有库，解释器，VM等。

\'参数\'用于传递其他沙盒特定的数据，例如编译选项和API密钥。通常应将其留空，但如果非空白，则必
须是有效的JSON格式记录。对于Jobe沙箱，可用属性包括disklimit，streamsize，numprocs，compileargs，
linkargs和解释器args。例如，对于C问题，<tt>{"compileargs":["-std=c89"]}</tt>将强制C89合规性，
将不使用其他C选项。有关详细信息，请参见Jobe文档。某些沙箱（如不建议使用的Ideone沙箱）可能会静
默忽略任何或所有这些设置。

如果沙箱设置为\'jobesandbox\'，则用于测试问题的Jobe主机通常是通过CodeRunner插件的管理员设置指
定的。但是，可以通过定义一个\'jobeserver\'参数以及一个可选的\'jobeapikey\'参数来选择其他Jobe服务
器。例如，如果\'参数\'字段设置为<tt>{"jobeserver": "myjobe.com"}</tt>，则将运行提交到服务器
\'myjobe.com\'。警告：此功能仍处于试验阶段，将来可能会更改。';
$string['sandboxerror'] = '来自沙箱的错误： [{$a->sandbox}]: {$a->message}';
$string['sandboxparams'] = '参数';
$string['seethisquestioninthequestionbank'] = '在题库中看到这个问题';
$string['showcolumns'] = '显示列：';
$string['showcolumns_help'] = '选择结果表的哪些列应显示给学生。空列将被隐藏。
默认值适用于大多数用途。';
$string['showdifferences'] = '显示差异';
$string['showsource'] = '模板调试';
$string['sourcecodeallruns'] = '调试：所有测试运行的源代码';
$string['stdin'] = '标准输入';
$string['stdin_help'] = '测试的标准输入，模板显示为{{TEST.stdin}}';
$string['student_answer'] = '学生答案';
$string['supportscripts'] = '支持脚本';
$string['syntax_errors'] = '语法错误';
$string['table_ui_invalidjson'] = '表格 UI: 非法的 JSON 序列化.';
$string['table_ui_invalidserialisation'] = '表格 UI: 非法的序列化.';
$string['table_ui_missingparams'] = '表UI需要模板参数table_num_columns和
table_num_rows。';
$string['template'] = '模板';
$string['template_changed'] = '\'每用例\'模板已更改-禁用组合方式？ [\'取消\'保持启用状态。]';
$string['template_help'] = '模板定义针对指定学生答案和测试在沙箱中运行的程序。
模板有两种类型：

* \'每用例\'模板，用于定义要针对单个测试用例运行的程序，以及
* \'组合\'模板，用于定义将所有不同用例组合到单个程序中。

对于\'每用例\'模板，未选中\'是组合的\'复选框，而对组合模板则选中它。
该帮助面板的其余部分假定您使用的是\'每用例\'模板。有关使用组合模板的
信息，请参见完整文档。

模板由Twig模板引擎（请参阅http://twig.sensiolabs.org）处理，在处理的上下文中，
STUDENT_ANSWER是学生的答案，TEST.testcode是当前测试用例的代码。这些值（以及其
他测试用例值，例如TEST.expected，TEST.stdin，TEST.mark）可以通过将其括在双括号
中来插入模板中，例如<tt>{{TEST.testcode}}</tt>。为了在文字字符串中使用，应使用
适当的转义函数，例如<tt>{{STUDENT_ANSWER | e(\'py\')}}</tt>是一种适用于Python
双三引号字符串的学生答案转义函数。其他转义函数是<tt>e(\'c\')</tt>，<tt>e(\'java\')</tt>，
<tt>e(\'matlab\')</tt>。然后，使用所选内置类型的语言并将stdin设置为TEST.stdin编译并
执行Twig输出的程序。然后，该程序的输出将传递到所选的打分机。
有关更多信息，请参见\'评分控件\'下的帮助。

请注意，如果使用自定义的每用例模板，则每个测试用例都会有一个编译执行周期，而大多
数内置的问题类型会定义一个组合器模板，该模板将所有测试用例合并为一个运行。

如果单击\'模板调试\'复选框，则为每个测试用例生成的程序将显示在输出中。';
$string['templatecontrols'] = '模板控件';
$string['templateerror'] = '模板错误';
$string['templategrader'] = '模板打分器';
$string['templateparams'] = '模板参数';
$string['templateparams_help'] = '模板参数字段允许您将字符串参数传递到问题的模板。如果非空，则必须是JSON格式的记录。
然后可以在模板中使用记录的字段，这些字段显示为QUESTION.parameters.&lt;&lt;param&gt;&gt;。例如，如果模板参数是

        {"age": 23}

值23将被替换到模板中来代替模板变量<tt>{{ QUESTION.parameters.age }}</tt>。

传递到模板的模板参数集由原型中定义的任何模板参数以及合并的问题模板参数组成。因此，
问题参数可以覆盖原型参数，但不能删除它们。

模板参数还可用于提供问题内的随机性。首次实例化问题时，会将模板参数传递给Twig模板
引擎，以产生最终的JSON版本。
Twig的"随机"功能可用于为模板参数分配随机值。如果选中了"Twig全部"复选框，则问题还
将使用模板参数作为环境来处理问题的所有其他字段（问题文本，答案，测试用例等）。 这
可能导致不同的学生看到该问题的不同随机变体。有关详细信息，请参见文档。';
$string['testallincategory'] = '在这个类别中测试所有问题';
$string['testalltitle'] = '在此上下文中测试所有问题';
$string['testcase'] = '测试用例 {$a}';
$string['testcasecontrols'] = '测试属性';
$string['testcasecontrols_help'] = '如果选中了\'用作示例\'，该测试将自动包含在问题的\'例如：\'结果表中。

\'显示\'组合框确定何时在结果表中向学生显示该测试用例。

如果选中了\'如果失败则隐藏其余用例\'并且该测试失败，则无论\'Display\'组合框的设置如
何，所有后续测试都将对学生隐藏。

\'得分\'设置该测试用例的值；仅当这不是一个\'非满分即零蛋\'问题时才有意义。

使用\'排序\'可以更改测试用例在保存时的顺序：此字段对测试用例进行排序。';
$string['testcases'] = '测试用例';
$string['testcode'] = '测试代码';
$string['testcode_help'] = '测试代码，模板显示为 {{TEST.testcode}}';
$string['testcolhdr'] = '测试';
$string['testingquestion'] = '测试问题 {$a}';
$string['testsplitterre'] = '测试分隔串（正则表达式）';
$string['testtype'] = '预检查测试类型';
$string['testtype_both'] = '两种';
$string['testtype_help'] = '如果启用了\'预检查\'并将其设置为\'选定\'，则此设置可控制是仅在常规
运行中，仅在进行预检查时还是在两次运行中都使用测试。
如果\'预检查\'设置为\'选定\'以外的任何其他设置，则此设置就被忽略了。';
$string['testtype_normal'] = '只做检查';
$string['testtype_precheck'] = '只做预检查';
$string['tooshort'] = '答案太短而没有意义，已经被无视忽略了';
$string['twigall'] = 'Twig所有的';
$string['twigcontrols'] = 'Twig控制';
$string['twigcontrols_help'] = '模板参数通常在Twig扩展期间以{{QUESTION.parameters.someparam}}的形式引用。
 但是，如果选中了\'提升模板参数\'复选框，则将参数提升到Twig全局名称空间中，并可简单地以 {{someparam}}来引用。

传统上，Twig宏处理器仅应用于模板。现在，它也适用于模板参数，如果选中了\'全部\'，则使
用Twig扩展的模板参数作为环境，将其应用于问题文本，示例答案，答案预载和所有测试用例字段。
如果在模板参数中使用随机化，通常将需要打开TwigAll';
$string['twigerror'] = 'Twig错误 {$a}';
$string['twigerrorintest'] = '在处理测试用例 {$a} 时的Twig错误';
$string['type_header'] = 'CR问题类型';
$string['typename'] = '问题类型名';
$string['typerequired'] = '请选择问题的类型（语言，格式等）';
$string['ui_fallback'] = '退回到使用原始文本区。';
$string['uicontrols'] = '输入的UI控件';
$string['uicontrols_help'] = '选择学生答案的用户界面控制器和问题作者的模板。

学生答案下拉列表显示可用插件的列表。对于编程问题，通常使用Ace编辑器。

值\'无\'可用于仅提供原始文本框。
值\'图式输入\'为用户提供了一个简单的图形绘制用户界面，用于回答要求学生绘制某种规格的图
形的问题。这样的问题通常只有一个测试用例，并用一个模板进行评分，该模板将分析图形的序
列化表示形式，如果答案正确，则输出诸如\'OK\'之类的消息，否则将给出适当的错误信息。

可以在原型或实际问题中设置模板参数，以修改Graph插件的行为，如下所示：
{"isdirected": false}用于无向图； {"isfsm": true}允许没有起始节点的入
边，并允许双击节点以将其定义为接受状态；
{"noderadius": 30}，例如，以像素为单位设置不同的结点半径；
{"helpmenutext"："Line1\\nLine2\\nLine3"}将默认的帮助菜单替换为自定义版本。
实际问题中的模板参数与原型中的模板参数合并并覆盖（自CodeRunner V3.2.2起）。

还有一个\'表格\'用户界面元素，它显示供学生填写的文本区域表格。它由
\'python3_程序测试\'问题类型使用，该类型包含在github上的示例问题中。这需要
模板参数必需的table_num_rows和table_num_columns，和可选的table_column_headers
（用于标记列字符串的列表），table_row_labels（用于标记行字符串的列表）和
table_column_width_percents（用于分配给所有表宽的百分比列表）列，包括行标签列
（如果已指定））和table_locked_cells（用户无法更改的[行，列]对单元格的列表-行
和列的索引均为0，但不包括行标签的列或列）标题行）。

视力不佳的学生或希望检查序列化的作者（例如，了解Graph UI使用的表示形式）可以通
过键入Ctrl-Alt-M来切换当前页面上所有UI插件的使用。

为学生答案选择的任何值也将在\'示例答案\'和\'答案预载\'字段的编辑器表单中使用。

如果选中\'模板使用ace\'，则Ace代码编辑器将同时管理模板和模板参数框。否则，将使用
原始文本框。';
$string['unauthorisedbulktest'] = '您无权访问任何CodeRunner问题';
$string['unauthoriseddbaccess'] = '您无权使用此脚本';
$string['unknowncombinatorgraderfield'] = '组合打分输出中的未知字段名称 ({$a->fieldname})';
$string['unknownerror'] = '一个意料之外的问题发生了。沙箱可能已关闭。请稍后重试。';
$string['unserializefailed'] = '存储的测试结果无法反序列化。 也许尝试再次打分？';
$string['useace'] = '模板使用ACE';
$string['useasexample'] = '用作示例';
$string['validateonsave'] = '保存时验证';
$string['wrongnumberofformats'] = '测试结果列格式数量错误。 预期{$a->expected}，得到{$a->got}';
$string['xmlcoderunnerformaterror'] = 'Coderunner问题中的XML格式错误';
