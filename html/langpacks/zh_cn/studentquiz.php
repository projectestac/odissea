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
 * Strings for component 'studentquiz', language 'zh_cn', version '3.11'.
 *
 * @package     studentquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_comment'] = '添加留言';
$string['approve'] = '批准';
$string['approve_toggle'] = '取消批准/批准';
$string['approved'] = '✓';
$string['approved_column_name'] = '已批准';
$string['approveselectedscheck'] = '你确定要取消批准/批准以下问题吗?<br /><br />{$a}';
$string['average_column_name'] = '平均';
$string['comment_column_name'] = '留言';
$string['comment_help'] = '写留言';
$string['comment_help_help'] = '给问题留言';
$string['createnewquestion'] = '创建新问题';
$string['createnewquestionfirst'] = '创建第一个问题';
$string['difficulty_all_column_name'] = '社群难度';
$string['difficulty_level_column_name'] = '难度';
$string['difficulty_title'] = '难度条';
$string['emailcommentaddedbody'] = '尊敬的{$a->recepientname},

你在课程 \'{$a->coursename}\' 中的学生小测验（StudentQuiz）活动\'{$a->modulename}\'里留的问题\'{$a->questionname}\'  于 \'{$a->timestamp}\'收到了 \'{$a->actorname}\' 的留言。

留言是：\'{$a->commenttext}\'

你可以审阅这个问题：{$a->questionurl}。';
$string['emailcommentaddedsmall'] = '你的问题\'{$a->questionname}\' 收到{$a->actorname}的留言。';
$string['emailcommentaddedsubject'] = '该问题收到留言：{$a->questionname}';
$string['emailcommentdeletedbody'] = '尊敬的{$a->recepientname},

你在课程 \'{$a->coursename}\' 中的学生小测验（StudentQuiz）活动\'{$a->modulename}\'里贡献的问题\'{$a->questionname}\' 下面有留言\'{$a->commenttime}\' 于 \'{$a->timestamp}\'被 \'{$a->actorname}\' 删除。

留言是：\'{$a->commenttext}\'

你可以审阅这个问题：{$a->questionurl}。';
$string['emailcommentdeletedsmall'] = '你的问题\'{$a->questionname}\' 里的留言被{$a->actorname}删除。';
$string['emailcommentdeletedsubject'] = '以下问题的留言被删除：{$a->questionname}';
$string['emailminecommentdeletedbody'] = '尊敬的{$a->recepientname},

你在课程 \'{$a->coursename}\' 中的学生小测验（StudentQuiz）活动\'{$a->modulename}\'里对问题\'{$a->questionname}\' 发表的留言\'{$a->commenttime}\' 于 \'{$a->timestamp}\'被 \'{$a->actorname}\' 删除。

留言是：\'{$a->commenttext}\'

你可以审阅这个问题：{$a->questionurl}。';
$string['emailminecommentdeletedsmall'] = '你在问题\'{$a->questionname}\' 下的留言被{$a->actorname}删除。';
$string['emailminecommentdeletedsubject'] = '以下留言被删除：{$a->questionname}';
$string['filter'] = '筛选';
$string['filter_ishigher'] = '较高于';
$string['filter_islower'] = '较低于';
$string['filter_label_approved'] = '已批准的问题';
$string['filter_label_comment'] = '留言';
$string['filter_label_createdate'] = '创建';
$string['filter_label_difficulty_level'] = '难度';
$string['filter_label_fast_filters'] = '问题的快速筛选';
$string['filter_label_myattempts'] = '我的尝试';
$string['filter_label_mydifficulty'] = '我的难度';
$string['filter_label_mylastattempt'] = '我最近一次的尝试';
$string['filter_label_myrate'] = '我的评分';
$string['filter_label_onlyapproved'] = '已批准';
$string['filter_label_onlyapproved_help'] = '被老师批准的问题';
$string['filter_label_onlydifficult'] = '所有人都觉得难';
$string['filter_label_onlydifficult_help'] = '平均难度的高于{$a}%的问题';
$string['filter_label_onlydifficultforme'] = '我觉得难';
$string['filter_label_onlydifficultforme_help'] = '匹配我的难度的高于{$a}%的问题';
$string['filter_label_onlygood'] = '好';
$string['filter_label_onlygood_help'] = '评分至少{$a}星的问题';
$string['filter_label_onlymine'] = '我的';
$string['filter_label_onlymine_help'] = '你创建的问题';
$string['filter_label_onlynew'] = '未答复的问题';
$string['filter_label_onlynew_help'] = '你从未回答过的问题';
$string['filter_label_question'] = '问题标题';
$string['filter_label_questiontext'] = '问题内容';
$string['filter_label_rates'] = '评分';
$string['filter_label_show_mine'] = '我的问题';
$string['filter_label_tags'] = '标签';
$string['finish_button'] = '完成';
$string['lastattempt_right'] = '✓';
$string['lastattempt_wrong'] = '✗';
$string['latest_column_name'] = '最近';
$string['messageprovider:approved'] = '问题批准通知';
$string['messageprovider:changed'] = '问题✗修改通知';
$string['messageprovider:commentadded'] = '新留言通知';
$string['messageprovider:commentdeleted'] = '留言删除通知';
$string['messageprovider:deleted'] = '问题删除通知';
$string['messageprovider:minecommentdeleted'] = '我的留言被删除通知';
$string['mine_column_name'] = '我的';
$string['modulename'] = '学生小测验';
$string['modulename_help'] = '学生小测验（StudentQuiz）活动允许学生为社群添加问题。 在学生小测验活动的首页，学生可以过滤问题。 他们还可以使用社群中的过滤问题练习。 教师可以选择按照分栏匿名这些问题。<br> <br> 学生小测验活动以积分奖励学生，以激励他们贡献问题和使用问题进行练习。 积分以排名表的方式列示在活动中。<br> <br>详细信息请参阅<a href="https://studentquiz.hsr.ch/docs/"> 学生小测验（StudentQuiz）文档</a>。';
$string['modulenameplural'] = '学生小测验（StudentQuiz）';
$string['myattempts_column_name'] = '我的尝试';
$string['mydifficulty_column_name'] = '我的难度';
$string['mylastattempt_column_name'] = '我最后的尝试';
$string['myrate_column_name'] = '我的评分';
$string['nav_export'] = '导出';
$string['nav_import'] = '导入';
$string['needtoallowatleastoneqtype'] = '你需要至少选择一种问题类型';
$string['next_button'] = '下一页';
$string['no_comment'] = '资料不详';
$string['no_comments'] = '无留言';
$string['no_difficulty_level'] = '资料不详';
$string['no_myattempts'] = '资料不详';
$string['no_mylastattempt'] = '资料不详';
$string['no_mylastattempt_label'] = '这个问题没被尝试';
$string['reportrank_table_column_incorrectanswers'] = '错误答案';
$string['reportrank_table_column_lastcorrectanswers'] = '最近答对而获得的点数';
$string['reportrank_table_column_lastincorrectanswers'] = '最近答错而获得的点数';
$string['reportrank_table_column_points'] = '点数';
$string['reportrank_table_column_progress'] = '个人进度';
$string['reportrank_table_column_quantifier_name'] = '名字';
$string['reportrank_table_column_rank'] = '排行';
$string['reportrank_table_column_summeanrates'] = '获得星级对应的点数';
$string['reportrank_table_column_total_points'] = '总点数';
$string['reportrank_table_column_value'] = '值';
$string['reportrank_table_column_yourstatus'] = '个人统计资料';
$string['reportrank_table_quantifier_caption'] = '你获得的点数是怎么计算的？';
$string['reportrank_table_title'] = '学生排行 - 前十';
$string['reportrank_table_title_for_manager'] = '学生排行';
$string['reportrank_title'] = '排行';
$string['review_button'] = '审核';
$string['settings_allowallqtypes'] = '允许所有问题类型';
$string['settings_allowedqtypes'] = '已允许的问题类别';
$string['settings_allowedqtypes_help'] = '你在这里注明允许的问题类别';
$string['settings_anonymous'] = '学生匿名';
$string['settings_anonymous_help'] = '学生们看不到对方的名字。';
$string['settings_anonymous_label'] = '让学生匿名';
$string['settings_approvedquantifier'] = '批准问题的因素';
$string['settings_approvedquantifier_help'] = '每个已批准问题的积分';
$string['settings_approvedquantifier_label'] = '批准每个问题的积分';
$string['settings_lastcorrectanswerquantifier'] = '最新的正确答案因素';
$string['settings_lastcorrectanswerquantifier_help'] = '最后一次尝试的每个正确答案的所得点数';
$string['settings_lastcorrectanswerquantifier_label'] = '最新的正确答案所获点数';
$string['settings_lastincorrectanswerquantifier'] = '最新的错误答案因素';
$string['settings_lastincorrectanswerquantifier_help'] = '上次尝试时每个错误或部分错误答案的所获点数';
$string['settings_lastincorrectanswerquantifier_label'] = '最新错误答案的点数';
$string['settings_questionquantifier'] = '创建问题因素';
$string['settings_questionquantifier_help'] = '每个创建的问题的点数';
$string['settings_questionquantifier_label'] = '创建每个问题的点数';
$string['settings_ratequantifier'] = '评分因子';
$string['settings_ratequantifier_help'] = '收到每颗星的点数。';
$string['settings_ratequantifier_label'] = '获得问题的平均星数的乘数';
$string['settings_removeqbehavior'] = '删除问题行为插件StudentQuiz';
$string['settings_removeqbehavior_help'] = '此信息在更新期间应该只出现一次。 这里特别通知你，系统检测到一项测验活动插件StudentQuiz已被安装。 此插件已经不再需要，因此系统尝试自动删除它。 如果你仍然能够看到此项设置，请在<a href="{$a}">此处</a>手动卸载该插件。';
$string['settings_removeqbehavior_label'] = '删除问题行为插件StudentQuiz';
$string['show_less'] = '显示较少';
$string['show_more'] = '显示更多';
$string['slot_of_slot'] = '在此集合中{$a->slots}的问题{$a->slot}';
$string['start_quiz_button'] = '开始测验';
$string['statistic_block_approvals'] = '批准的问题';
$string['statistic_block_created'] = '创建的问题';
$string['statistic_block_progress_available'] = '可用的问题';
$string['statistic_block_progress_last_attempt_correct'] = '最新尝试并回答正确';
$string['statistic_block_progress_last_attempt_incorrect'] = '最新尝试并回答错误';
$string['statistic_block_progress_never'] = '从未回答过的问题';
$string['statistic_block_title'] = '我的进度';
$string['studentquiz'] = 'studentquiz';
$string['studentquiz:addinstance'] = '为StudentQuiz添加新实例';
$string['studentquiz:emailnotifyapproved'] = '问题批准通知';
$string['studentquiz:emailnotifychanged'] = '问题更改通知';
$string['studentquiz:emailnotifycommentadded'] = '添加新评论通知';
$string['studentquiz:emailnotifycommentdeleted'] = '评论已删除通知';
$string['studentquiz:emailnotifydeleted'] = '问题已删除通知';
$string['studentquiz:manage'] = '在StudentQuiz修改问题';
$string['studentquiz:previewothers'] = '在StudentQuiz上预览其他人的问题';
$string['studentquiz:submit'] = '在StudentQuiz上提交问题';
$string['studentquiz:unhideanonymous'] = '即使处于匿名活动状态，也可以看到真实姓名';
$string['studentquiz:view'] = '查看StudentQuiz上的问题';
$string['studentquizname'] = 'StudentQuiz名称';
$string['studentquizname_help'] = '本StudentQuiz活动的名称';
$string['tags'] = '标签';
$string['unapprove'] = '取消审核';
