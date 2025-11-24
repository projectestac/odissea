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
 * Strings for component 'activequiz', language 'zh_cn', version '4.5'.
 *
 * @package     activequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activequiz:addinstance'] = '添加一个考试';
$string['activequiz:attempt'] = '参加考试';
$string['activequiz:control'] = '控制一个进行中的考试（一般只用于教师）';
$string['activequiz:editquestions'] = '为一个考试编辑试题';
$string['activequiz:seeresponses'] = '查看其它学生的回答来评分';
$string['activequiz:viewownattempts'] = '允许学生查看自己的考试参与情况';
$string['activequizintro'] = '介绍';
$string['activequizsettings'] = '考试通用设置';
$string['activitygrades'] = '活动评分：';
$string['addquestion'] = '添加问题';
$string['addtoquiz'] = '添加';
$string['anonymousresponses'] = '匿名学生回复';
$string['anonymousresponses_help'] = '将学生的回答匿名以供教师查看，以便如果显示他们的屏幕，则不会显示学生的姓名或组名';
$string['anonymoususer'] = '匿名用户';
$string['assessed'] = '已评价';
$string['assessed_help'] = '选中此项，设计你的评估测试';
$string['attempt_grade'] = '尝试评分';
$string['attemptno'] = '参与次数';
$string['attempts'] = '尝试';
$string['attemptstarted'] = '您一开始参与这一次考试，请点击下面链接继续你的考试';
$string['attemptstartedalready'] = '您的一个小组成员已经开始了一次测验';
$string['attemptview'] = '浏览尝试';
$string['cantaddquestiontwice'] = '你无法在试卷中添加重复的问题';
$string['cantinitattempts'] = '您无法开始参与';
$string['closesession'] = '关闭会话';
$string['closingsession'] = '正在关闭会话...';
$string['countdatasetlabel'] = '回答数量';
$string['defaultquestiontime'] = '默认的问题时间';
$string['defaultquestiontime_help'] = '每题默认的答题时间。
可以在个别问题中被改变。';
$string['edit'] = '修改试卷';
$string['editpage_opensession_error'] = '会话打开时，您不能编辑测验问题或布局。';
$string['enabledquestiontypes'] = '开启试题样式';
$string['enabledquestiontypes_info'] = '可在活动测验、活动实例中使用的问题类型。';
$string['endquestion'] = '结束问题';
$string['errorregrade'] = '抱歉，所有考试重新打分时出现错误';
$string['eventattemptstarted'] = '尝试开始';
$string['eventattemptviewed'] = '尝试查看';
$string['eventquestionanswered'] = '尝试的问题回答';
$string['eventquestionmanuallygraded'] = '手工评分题';
$string['feedbackintro'] = '反馈你的问题。请等待讲师开始下一个问题';
$string['firstsession'] = '第一个课时';
$string['fullanonymize'] = '完全匿名学生回复';
$string['fullanonymize_help'] = '完全匿名学生回复。请注意，如果您选择此选项，本课程的回答将不会评分并应用于学生。';
$string['gatheringresults'] = '正在收集结果...';
$string['gotosession'] = '转到正在进行的课时';
$string['grademethod'] = '课时评分法';
$string['grademethod_help'] = '这是评分时使用的方法。此方法用于在同一个活动测验中计算多个课时的评分';
$string['gradesettings'] = '评分设置';
$string['groupattendance'] = '允许小组参与';
$string['groupattendance_help'] = '如果启用此框，参加测验的学生可以选择他们组中的哪些学生参加测验。';
$string['grouping'] = '组队';
$string['grouping_help'] = '选择要用于分组学生的分组';
$string['groupmembership'] = '组成员';
$string['groupworksettings'] = '群组设置';
$string['hide_correct_answer'] = '隐藏正确答案';
$string['hidenotresponded'] = '跳过不回答';
$string['hidestudentresponses'] = '隐藏回答';
$string['highestsessiongrade'] = '最高课时成绩';
$string['indvquestiontime'] = '答题时间';
$string['indvquestiontime_help'] = '答题时间（秒）';
$string['instructorquizinst'] = '<p>请等待此页面，直到学生连接。单击开始测验后，测验将开始第一个问题</p>
    <p>
<p>控制:</p>
    <ul>
        <li>
            重新投票问题
            <ul>
                <li>
                    允许讲师重新调查当前或以前的问题（在审查问题时可用）。
                </li>
            </ul>
        </li>
        <li>
           下一个问题
            <ul>
                <li>
                    继续下一个问题（复习问题时可用）。
                </li>
            </ul>
        </li>
        <li>
            结束问题
            <ul>
                <li>
                    结束当前的问题。还允许讲师提前结束计时问题（在问题运行时可用）。 <i>如果问题没有时间限制，讲师将被要求<b>结束问题。</b></i>
                </li>
            </ul>
        </li>
        <li>
            Go to question
            <ul>
                <li>
                    Open a dialog box to direct all users to a specific question in the quiz (available during review of a question).
                </li>
            </ul>
        </li>
        <li>
            关闭课时
            <ul>
                <li>
                    关闭当前课程，以及学生的所有尝试。这将自动为所有尝试评分（随时可用）。
                </li>
            </ul>
        </li>
        <li>
            重新加载结果
            <ul>
                <li>
                    在信息框中重新加载学生回答。允许讲师查看有多少学生或小组已经回复，还有多少尚未回复（在复习问题时可用）。
                </li>
            </ul>
        </li>
        <li>
            隐藏/显示没有回答
            <ul>
                <li>
                    隐藏或显示信息框，该信息框显示有多少学生或组已回答以及哪些学生或组尚未回答（在问题轮询时可用）。
                </li>
            </ul>
        </li>
        <li>
            给出正确答案
            <ul>
                <li>
                    为讲师提供问题视图，并选择正确的答案（在复习问题时可用）。对于手动评分的问题类型，例如论文或绘图问题，这不会显示正确的回答。
                </li>
            </ul>
        </li>
    </ul>
</p>';
$string['instructorsessionsgoing'] = '正在进行一个课。请点击下面的按钮进入该课。';
$string['invalid_indvquestiontime'] = '提问时间必须是0或以上的整数';
$string['invalid_numberoftries'] = '尝试次数必须是1或以上的整数';
$string['invalid_points'] = '分数是必需的，并且必须是大于0的数字';
$string['invalidattemptaccess'] = '您没有访问此尝试的权限';
$string['invalidgroupid'] = '学生需要一个有效的组编号';
$string['invalidquestionattempt'] = '添加到测验尝试中的问题 ($a->questionname) 无效。';
$string['isanonymous'] = '所有对此活动测验的回答都是匿名的';
$string['joinquiz'] = '参加测试';
$string['joinquizinstructions'] = '点击并参加测试';
$string['jumptoquesetioninstructions'] = '选择您感兴趣的问题：';
$string['jumptoquestion'] = '进入问题';
$string['lastsession'] = '最后一课';
$string['loading'] = '初始化测试';
$string['manualcomment'] = '手动注释';
$string['manualcomment_help'] = '讲师在评分尝试时可以添加的注释';
$string['marks'] = '分数';
$string['marks_help'] = '每个问题的数字分数，以及总的尝试分数';
$string['modulename'] = '主动测验';
$string['modulename_help'] = '<p>主动测验活动使讲师能够实时创建和管理测验。所有常规测验问题类型都可以用于活动测验。</p>
<p>主动测验允许个人或团体参与。小组参与是可能的，所以在活动测验中给出的分数将只适用于参加课程的参与者。问题可以设置为允许多次尝试。可以设置时间限制来自动结束问题，或者讲师可以手动结束问题并继续下一个问题。讲师还可以在运行课程时跳转到不同的问题。讲师可以监控小组或个人的参与情况、参与者的实时回答以及被调查的问题。</p>
<p>每一次测验都会像常规测验一样自动进行标记（论文和问题除外），成绩记录在成绩册中。小组参与评分可以通过将评分从单个响应者转移到其他小组成员来自动完成。 </p>
<p>教师可以选择在测验完成后向学生展示提示、给出反馈和给出正确答案。</p>
<p>主动测验可以作为在Moodle中进行团队学习的工具。</p>';
$string['modulenameplural'] = '可用的考试';
$string['nextquestion'] = '下一个问题';
$string['no_questions'] = '此测验中没有添加任何问题。';
$string['nochangegroups'] = '创建课程后不能更改组，或者没有为此课程定义组。';
$string['nochangegroups_label'] = '&nbsp;';
$string['nofeedback'] = '本题无反馈。';
$string['nosession'] = '没有公开课';
$string['notime'] = '没有时间限制';
$string['notime_help'] = '勾选此字段，以便在这个问题上没有计时器<p> 然后，讲师需要单击结束问题按钮以结束问题</p>';
$string['notresponded'] = '尝试中未响应的次数';
$string['notries'] = '你已经没有机会回答这个问题了';
$string['numberoftries'] = '尝试次数';
$string['numberoftries_help'] = '用户尝试回答问题的次数。学生仍将受到问题时间限制的约束';
$string['overallgrade'] = '整体成绩：{$a->overallgrade}/{$a->scale}';
$string['percentagedatasetlabel'] = '占总答案的百分比';
$string['pluginadministration'] = '主动测验管理';
$string['pluginname'] = '正在进行的考试';
$string['points'] = '问题点';
$string['points_help'] = '你希望这个问题值得多少分';
$string['qdeleteerror'] = '不能删除问题';
$string['qdeletesucess'] = '删除问题成功';
$string['qmoveerror'] = '不能移动问题';
$string['qmovesuccess'] = '成功移动问题';
$string['question'] = '问题';
$string['questiondelete'] = '删除问题{$a}';
$string['questionedit'] = '编辑问题';
$string['questionfinished'] = '问题已完成，等待结果';
$string['questionlist'] = '问题列表';
$string['questionmovedown'] = '向下移动问题{$a}';
$string['questionmoveup'] = '将问题{$a}向上移动';
$string['quiznotrunning'] = '测验目前不进行——等待你的老师开始。使用“重新加载”按钮重新加载此页面以再次检查';
$string['regradeallgrades'] = '重新评分';
$string['reload_results'] = '重新加载结果';
$string['repollquestion'] = '重新投票问题';
$string['response_attempt_controls'] = '编辑/查看尝试';
$string['responses'] = '查看回答';
$string['reviewafter'] = '课程结束后';
$string['reviewoptionsettings'] = '查看选项';
$string['savequestion'] = '保存问题';
$string['scale'] = '最高等级';
$string['scale_help'] = '该值（整数）将根据测验中获得的任何分数缩放到此值。';
$string['select_group'] = '选择你的小组';
$string['selectsession'] = '选择要查看的课程：&nbsp;&nbsp;&nbsp;&nbsp;';
$string['sessionaverage'] = '课程平均分';
$string['sessionclosed'] = '课程现在是关闭的';
$string['sessionname'] = '课程名称';
$string['sessionname_required'] = '课程名称是必须的';
$string['sessionnametext'] = '<span style="font-weight: bold">课程: </span>';
$string['show_correct_answer'] = '显示正确答案';
$string['showhistoryduringquiz'] = '显示回答历史';
$string['showhistoryduringquiz_help'] = '在测验中回顾问题的回答时，显示学生/小组对此问题的回答历史。';
$string['shownotresponded'] = '显示没有回答的';
$string['showstudentresponses'] = '显示回答的';
$string['start_session'] = '开始课程';
$string['startedon'] = '开始';
$string['startquiz'] = '开始考试';
$string['studentquizinst'] = '<p>请等待教师开始测验。一旦开始，你会看到计时器倒计时到第一个问题开始</p>';
$string['successregrade'] = '成功对考试重新打分';
$string['teacherjoinquizinstruct'] = '如果你想自己尝试一个测验，请使用此选项（你还需要在另一个窗口中开始测验）';
$string['teacherstartinstruct'] = '使用此选项开始一个小测验，让学生参加。<br/>使用文本框定义此课程的名称（以便在以后查看结果时提供帮助）。';
$string['theattempt'] = '尝试';
$string['theattempt_help'] = '学生是否能够回顾尝试。';
$string['timecompleted'] = '考试时间结束';
$string['timemodified'] = '考试时间被更改';
$string['timertext'] = '您的问题将在以下时间结束并自动提交：';
$string['trycount'] = '你还有{$a->tries}次尝试机会。';
$string['unabletocreate_session'] = '无法创建课程';
$string['view'] = '查看考试';
$string['viewstats'] = '查看考试状态';
$string['waitforquestion'] = '正在等待问题发送：';
$string['waitforquestiontime'] = '等待提问时间';
$string['waitforquestiontime_help'] = '等待问题开始/及时提出的时间。';
$string['waitforrevewingend'] = '讲师目前正在复习前面的问题。请等待下一个问题开始';
$string['waitstudent'] = '等待学生连接';
$string['workedingroups'] = '我们将分组工作。';
$string['workedingroups_help'] = '勾选此框表示学生将分组学习。确保在下面选择一个分组';
