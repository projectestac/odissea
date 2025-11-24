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
 * Strings for component 'adaptivequiz', language 'zh_cn', version '4.5'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated'] = '估计能力';
$string['abilityestimated_help'] = '考生的估计能力与问题难度一致，考生正确回答问题的概率为50%。要确定绩效水平，请将能力值与问题水平范围相匹配（请参见“/”符号后的范围）。';
$string['activityreports'] = '尝试报告';
$string['adaptivequiz:addinstance'] = '添加一个新的自适应测验';
$string['adaptivequiz:attempt'] = '尝试适应性测验';
$string['adaptivequiz:reviewattempts'] = '查看自适应测验提交';
$string['adaptivequiz:viewreport'] = '查看自适应测验报告';
$string['adaptivequizname'] = '名称';
$string['adaptivequizname_help'] = '输入自适应测验实例的名称';
$string['all_attempts_deleted'] = '已删除所有自适应测验尝试';
$string['all_grades_removed'] = '所有适应性测验分数均已删除';
$string['answer'] = '答案';
$string['answers_display_name'] = '答案';
$string['attempt_questiondetails'] = '问题详情';
$string['attempt_state'] = '尝试状态';
$string['attempt_summary'] = '尝试摘要';
$string['attempt_user'] = '用户';
$string['attemptclosed'] = '尝试已手动关闭。';
$string['attemptclosedstatus'] = '被 {$a->current_user_name} (user-id: {$a->current_user_id}) 在 {$a->now} 手动关闭。';
$string['attemptdeleted'] = '删除由 {$a->name} 在 {$a->timecompleted} 时进行的尝试';
$string['attemptfeedback'] = '尝试反馈';
$string['attemptfeedback_help'] = '尝试完成后，将向用户显示尝试反馈';
$string['attemptfeedbackdefaulttext'] = '您已经完成了尝试，感谢您参加测试！';
$string['attemptfinishedtimestamp'] = '尝试完成时间';
$string['attemptfirst'] = '首次尝试';
$string['attemptlast'] = '最后的尝试';
$string['attemptnofirstquestion'] = '抱歉，无法定义开始尝试的第一个问题，该测验可能配置错误。';
$string['attemptquestion_ability'] = '能力测量';
$string['attemptquestion_abilitylogits'] = '测量能力（逻辑）';
$string['attemptquestion_difficulty'] = '问题难度（逻辑）';
$string['attemptquestion_diffsum'] = '难度总和';
$string['attemptquestion_level'] = '问题级别';
$string['attemptquestion_rightwrong'] = '回答正确/错误';
$string['attemptquestion_stderr'] = '标准误差(&plusmn;&nbsp;逻辑)';
$string['attemptquestionsprogress'] = '问题进度：{$a}';
$string['attemptquestionsprogress_help'] = '这里显示的最大问题数不一定是你在测验中必须回答的问题数。这是你可能参加的最大问题数量，如果能力测试有充分的定义，测试可能会提前结束。';
$string['attemptsallowed'] = '允许尝试';
$string['attemptsallowed_help'] = '学生尝试此活动的次数';
$string['attemptstarttime'] = '尝试开始时间';
$string['attemptstate'] = '尝试状态';
$string['attemptstopcriteria'] = '停止尝试的原因';
$string['attemptsusernoprevious'] = '你还没有尝试过这个测验。';
$string['attemptsuserprevious'] = '你以前的尝试';
$string['attempttotaltime'] = '总时间 (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; 返回所有问题';
$string['bestscore'] = '最佳成绩';
$string['bestscorestderror'] = '标准误差';
$string['browsersecurity'] = '浏览器安全';
$string['browsersecurity_help'] = '如果选择了“带有一些JavaScript安全性的全屏弹出窗口”，则只有当学生拥有启用JavaScript的web浏览器时，测验才会开始，测验出现在一个全屏弹出窗口中，该窗口覆盖了所有其他窗口，并且没有导航控件，并且尽可能防止学生使用复制和粘贴等工具';
$string['calcerrorwithinlimits'] = '{$a->calerror}的计算标准误差在{$a->definederror}活动允许的限制范围内。';
$string['closeattempt'] = '关闭尝试';
$string['completionattemptcompletedcminfo'] = '完成一次尝试';
$string['completionattemptcompletedform'] = '学生必须至少完成一次该模块的尝试';
$string['confirmcloseattempt'] = '您确定要关闭并完成{$a->name}的尝试吗？';
$string['confirmcloseattemptscore'] = '{$a->num_questions} 问题得到了回答，到目前为止的分数是{$a->measure} {$a->standarderror}。';
$string['confirmcloseattemptstats'] = '此尝试在{$a->started}上开始，最后一次更新是在{$a->modified}。';
$string['confirmdeleteattempt'] = '确认从{$a->timecompleted}提交的{$a->name}中删除尝试';
$string['deleteattemp'] = '删除尝试';
$string['discrimination_display_name'] = '识别';
$string['downloadcsv'] = '下载CSV';
$string['enterrequiredpassword'] = '输入要求的密码';
$string['errorattemptstate'] = '确定尝试状态时出错';
$string['errorclosingattempt_alreadycomplete'] = '此尝试已完成，无法手动关闭。';
$string['errorfetchingquest'] = '无法获取级别为{$a->level}的问题';
$string['errorlastattpquest'] = '检查上次尝试问题的响应值时出错';
$string['errornumattpzero'] = '错误，尝试的问题数等于零，但用户提交了前一个问题的答案';
$string['errorsumrightwrong'] = '正确答案和错误答案之和不等于尝试的问题总数';
$string['eventattemptcompleted'] = '尝试已完成';
$string['formelementdecimal'] = '输入一个十进制数。最多10位，小数点右边最多5位';
$string['formelementempty'] = '输入1到999之间的正整数';
$string['formelementnegative'] = '输入1到999之间的正数';
$string['formelementnumeric'] = '输入1到999之间的数值';
$string['formlowlevelgreaterthan'] = '最低级别必须小于最高级别';
$string['formminquestgreaterthan'] = '最小问题数必须小于最大问题数';
$string['formquestionpool'] = '至少选择一个问题类别';
$string['formstartleveloutofbounds'] = '起始级别必须是介于最低级别和最高级别之间的数字';
$string['formstderror'] = '必须输入小于50且大于或等于0的百分比';
$string['functiondisabledbysecuremode'] = '该功能目前已被禁用';
$string['gradehighest'] = '最高等级';
$string['grademethod'] = '分级方法';
$string['grademethod_help'] = '当允许多次尝试时，以下方法可用于计算最终测验分数：

* 所有尝试中的最高等级
* 第一次尝试（忽略所有其他尝试）
* 最后一次尝试（忽略所有其他尝试）';
$string['graphlegend_error'] = '标准误差';
$string['highestlevel'] = '最高难度';
$string['highestlevel_help'] = '评估可以从中选择问题的最高或最难级别。在尝试过程中，活动将不会超过此难度';
$string['highlevelusers'] = '问题级别以上的用户';
$string['id'] = 'ID';
$string['indvuserreport'] = '{$a}的单个用户尝试报告';
$string['leveloutofbounds'] = '请求的级别{$a->level}超出尝试的范围';
$string['lowestlevel'] = '最低难度';
$string['lowestlevel_help'] = '评估可以从中选择问题的最低或最低难度级别。在尝试过程中，活动将不会超过此难度';
$string['lowlevelusers'] = '问题级别以下的用户';
$string['maximumquestions'] = '最大问题数';
$string['maximumquestions_help'] = '学生可以尝试的最大问题数';
$string['maxquestattempted'] = '尝试的最大问题数';
$string['midlevelusers'] = '接近问题级别的用户';
$string['minimumquestions'] = '最小问题数';
$string['minimumquestions_help'] = '学生必须尝试的最小问题数';
$string['missingtagprefix'] = '缺少标记前缀';
$string['modformshowattemptprogress'] = '向学生展示测试进度';
$string['modformshowattemptprogress_help'] = '当被选中时，在尝试过程中，学生将看到一个进度条，描述在最大数量中回答了多少个问题。';
$string['modulename'] = '自适应测试';
$string['modulename_help'] = '自适应性测验活动使教师能够创建有效衡量考生能力的测验。自适应性测验由从题库中选择的题组成，题库中标记有难度分数。选择的问题与当前考生的估计能力水平相匹配。如果考生在一个问题上取得了成功，接下来会出现一个更具挑战性的问题。如果考生答错了一个问题，那么接下来会出现一个挑战性较小的问题。这种技巧将发展成一系列问题，集中在考生的有效能力水平上。当考生的能力达到要求的准确度时，测验停止。

这项活动最适合在一维尺度上进行确定性能力度量。虽然量表可以非常广泛，但所有问题都必须在相同的量表上提供能力或资质的衡量标准。例如，在实际测试中，新手能够正确回答的低级别问题也应该能被专家级回答，而高级别问题应该只能由专家回答或者幸运的猜测到。不能区分不同能力的考生的问题将使考试无效，并可能提供不确定的结果。

自适应性测验中使用的问题必须

 * 能被自动评分为正确/不正确
 * 使用“adpq_”和一个在测验范围内的正整数标记他们的困难

自适应测验可以配置为

 * 定义要测量的问题难度/用户能力的范围。1-10、1-16和1-100都是有效范围的示例。
 * 定义停止测验前所需的精度。通常，5%的能力测量误差是一个合适的停止规则
 * 要求回答最少数量的问题
 * 要求回答最多数量的问题

本活动中的描述和测试过程基于<a href=”http://www.rasch.org/memo69.pdf“>计算机自适应测试：一种可行的方法</A>作者：芝加哥大学梅萨心理测量实验室博士约翰·迈克尔·利纳克雷。梅萨备忘录第69号。';
$string['modulenameplural'] = '自适应测试';
$string['na'] = '不适用';
$string['name'] = '名称';
$string['noattemptsallowed'] = '此活动不允许再次尝试';
$string['nonewmodules'] = '未找到自适应测试实例';
$string['nopermission'] = '您没有查看此资源的权限';
$string['notinprogress'] = '这一尝试尚未进行。';
$string['notyourattempt'] = '这不是你尝试的活动';
$string['numofattemptshdr'] = '尝试次数';
$string['percent_correct_display_name'] = '% 正确率';
$string['pluginadministration'] = '自适应测试';
$string['pluginname'] = '自适应测试';
$string['question_report'] = '问题分析';
$string['questionanalysisbtn'] = '问题分析';
$string['questionnumber'] = '问题 #';
$string['questionpool'] = '问题库';
$string['questionpool_help'] = '选择活动将在尝试期间从中提取问题的问题类别。';
$string['questions_report'] = '问题报告';
$string['questionsattempted'] = '尝试的问题总数';
$string['questionspoolerrornovalidstartingquestions'] = '所选问题类别不包含正确标记以匹配所选起始难度的问题。';
$string['recentactquestionsattempted'] = '尝试的问题：{$a}';
$string['recentattemptstate'] = '尝试状态：';
$string['recentcomplete'] = '完成';
$string['recentinprogress'] = '进行中';
$string['reportanswersdistributionchartnumrightlabel'] = '正确回答数';
$string['reportanswersdistributionchartnumwronglabel'] = '错误回答数';
$string['reportanswersdistributionchartxaxislabel'] = '试题难度';
$string['reportanswersdistributionchartyaxislabel'] = '回答数';
$string['reportattemptanswerdistributiontab'] = '答案分布';
$string['reportattemptgraphtab'] = '尝试图';
$string['reportattemptgraphtabletitle'] = '尝试图的表视图';
$string['reportattemptquestionsdetailstab'] = '问题详情';
$string['reportattemptreviewpageheading'] = '{$a->quizname}-审阅{$a->fullname}在{$a->finished}提交的尝试';
$string['reportattemptsbothenrolledandnotenrolled'] = '所有进行过尝试的用户';
$string['reportattemptsdownloadfilename'] = '{$a}_尝试报告';
$string['reportattemptsenrolledwithattempts'] = '所有进行过尝试的参与者';
$string['reportattemptsenrolledwithnoattempts'] = '没有进行过尝试的参与者';
$string['reportattemptsfilterformheader'] = '过滤器';
$string['reportattemptsfilterformsubmit'] = '过滤器';
$string['reportattemptspersistentfilter'] = '永久过滤器';
$string['reportattemptspersistentfilter_help'] = '选中后，将在提交时存储下面的过滤器设置，然后在每次访问报告页面时应用这些设置。';
$string['reportattemptsprefsformsubmit'] = '应用';
$string['reportattemptsresetfilter'] = '重置过滤器';
$string['reportattemptsummarytab'] = '尝试总结';
$string['reportattemptsusersperpage'] = '显示的用户数：';
$string['reportindividualuserattemptpageheading'] = '{$a->username}的个人用户尝试报告 {$a->quizname}';
$string['reportquestionanalysispageheading'] = '{$a} -问题报告';
$string['reportuserattemptstitleshort'] = '{$a} 的尝试情况';
$string['requirepassword'] = '要求密码';
$string['requirepassword_help'] = '要求学生在开始尝试之前输入密码';
$string['requirepasswordmessage'] = '要尝试此测验，您需要知道测验密码';
$string['resetadaptivequizsall'] = '删除所有自适应测试的尝试';
$string['result'] = '结果';
$string['reviewattempt'] = '回顾尝试情况';
$string['reviewattemptreport'] = '回顾 {$a->fullname} 已经完成 {$a->finished}的尝试情况';
$string['score'] = '分数';
$string['standarderror'] = '要停止的标准误差';
$string['standarderror_help'] = '当用户能力测量中的错误量下降到低于此值时，测验将停止。将此值从默认值5%调整为需要或多或少的能力度量精度';
$string['standarderrorhdr'] = '标准误差';
$string['startattemptbtn'] = '开始尝试';
$string['startinglevel'] = '起始难度';
$string['startinglevel_help'] = '学生开始尝试时，活动将随机选择与难度级别匹配的问题';
$string['statistic'] = '统计';
$string['stopingconditionshdr'] = '停止条件';
$string['submitanswer'] = '提交答案';
$string['times_used_display_name'] = '用时';
$string['updateattempterror'] = '尝试更新尝试记录时出错';
$string['user'] = '用户';
$string['value'] = '值';
$string['wrongpassword'] = '密码错误';
