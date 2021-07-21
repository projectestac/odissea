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
 * Strings for component 'question', language 'zh_cn', version '3.11'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '操作';
$string['addanotherhint'] = '再添加一个提示';
$string['addcategory'] = '新建类别';
$string['addmorechoiceblanks'] = '增加{no}个空白选项';
$string['adminreport'] = '题库中可能存在的问题的报表。';
$string['advancedsearchoptions'] = '搜索选项';
$string['alltries'] = '所有尝试';
$string['answer'] = '答案';
$string['answers'] = '答案';
$string['answersaved'] = '答案已保存';
$string['attemptfinished'] = '结束的试答';
$string['attemptfinishedsubmitting'] = '结束的试答提交：';
$string['attemptoptions'] = '试答选项';
$string['availableq'] = '可以使用？';
$string['badbase'] = '**之前的基础坏了：{$a}**';
$string['behaviour'] = '行为';
$string['behaviourbeingused'] = '使用的行为：“{$a}”';
$string['broken'] = '这是一个“断开的链接”，它指向一个不存在的文件。';
$string['byandon'] = '由<em>{$a->user}</em>于<em>{$a->time}</em>';
$string['cannotcopybackup'] = '无法复制备份文件';
$string['cannotcreate'] = '无法在question_attempts表中创建新条目';
$string['cannotcreatepath'] = '无法建立路径：{$a}';
$string['cannotdeletebehaviourinuse'] = '您不能删除行为“{$a}”。它已用于试题试答。';
$string['cannotdeletecate'] = '这是此场景的默认类别，您不能删除它。';
$string['cannotdeleteneededbehaviour'] = '不能删除试题行为“{$a}”。有其它已安装的行为依赖它。';
$string['cannotdeleteqtypeinuse'] = '您不能删除试题类型“{$a}”。题库中有这种类型的试题。';
$string['cannotdeleteqtypeneeded'] = '您不能删除试题类型“{$a}”。有其他已经安装的试题类型依赖它。';
$string['cannotdeletetopcat'] = '顶级类别不能删除。';
$string['cannotedittopcat'] = '顶级类别不能编辑。';
$string['cannotenable'] = '不能直接建立试题类型{$a}。';
$string['cannotenablebehaviour'] = '不能直接使用试题行为“{$a}”。它只能内部使用。';
$string['cannotfindcate'] = '找不到类别记录';
$string['cannotfindquestionfile'] = '在 zip 中找不到试题数据文件';
$string['cannotgetdsfordependent'] = '无法获取依赖于数据集的试题指定的数据集！（试题：{$a->id}，数据集项目：{$a->item}）';
$string['cannotgetdsforquestion'] = '无法获取计算题指定的数据集（试题：{$a}）';
$string['cannothidequestion'] = '不能隐藏试题';
$string['cannotimportformat'] = '抱歉，导入这种格式还未实现！';
$string['cannotinsertquestion'] = '无法插入新试题！';
$string['cannotinsertquestioncatecontext'] = '无法插入新试题类别{$a->cat}，非法的场景ID{$a->ctx}';
$string['cannotloadquestion'] = '无法加载试题';
$string['cannotmovequestion'] = '您不能使用此脚本移动与不同区域的文件有关联的试题。';
$string['cannotopenforwriting'] = '不能以可写模式打开：{$a}';
$string['cannotpreview'] = '您不能预览这些试题！';
$string['cannotread'] = '无法读取导入文件(或文件为空)';
$string['cannotretrieveqcat'] = '无法获取试题类别';
$string['cannotunhidequestion'] = '取消隐藏试题失败。';
$string['cannotunzip'] = '不能解压缩 zip文件。';
$string['cannotwriteto'] = '无法写入导出的试题到{$a}';
$string['categories'] = '类别';
$string['category'] = '类别';
$string['categorycurrent'] = '当前类别';
$string['categorycurrentuse'] = '使用该类别';
$string['categorydoesnotexist'] = '该类别不存在';
$string['categoryinfo'] = '类别信息';
$string['categorymove'] = '类别“{$a->name}”包含 {$a->count} 个试题（有些可能是仍然在测验中使用的隐藏的试题或随机题）。<br />请选择另一个类别以转移它们。';
$string['categorymoveto'] = '保存在类别中';
$string['categorynamecantbeblank'] = '类别名不能为空。';
$string['changeoptions'] = '更改选项';
$string['changepublishstatuscat'] = '课程“{$a->coursename}”中<a href="{$a->caturl}">类别“{$a->name}”</a>将把共享状态从<strong>{$a->changefrom}</strong>改变为<strong>{$a->changeto}</strong>。';
$string['check'] = '检查';
$string['chooseqtypetoadd'] = '选择一个试题类型';
$string['clearwrongparts'] = '清除不正确的回答';
$string['clickflag'] = '标记试题';
$string['clicktoflag'] = '标记此试题供将来参考';
$string['clicktounflag'] = '移除标记';
$string['clickunflag'] = '移除标记';
$string['closepreview'] = '关闭预览';
$string['combinedfeedback'] = '组合反馈';
$string['comment'] = '评论';
$string['commented'] = '已评论：{$a}';
$string['commentormark'] = '写评论或覆盖分数';
$string['comments'] = '评论';
$string['commentx'] = '评论：{$a}';
$string['complete'] = '完成';
$string['contexterror'] = '如果您不将类别移动到另一个场景，您就不应该来到这里。';
$string['copy'] = '从 {$a} 复制并更改链接。';
$string['correct'] = '正确';
$string['correctfeedback'] = '对于任何正确的回答';
$string['correctfeedbackdefault'] = '您的答案是正确的。';
$string['created'] = '创建';
$string['createdby'] = '创建人';
$string['createdmodifiedheader'] = '创建/最后保存';
$string['createnewquestion'] = '新建一道题...';
$string['cwrqpfs'] = '从子类别中选择随机题。';
$string['cwrqpfsinfo'] = '<p>在升级到 1.9 版后，我们将试题类别分离到不同的情境中。一些试题类别和试题将必须改变共享状态。在测验中如果存在从共享和不共享类别中选择的一个或多个随机试题这种情况，这种情况很少发生。而常发生在子类别和一个或多个子类别中有与父类别共享状态不同时。</p>';
$string['cwrqpfsnoprob'] = '您的网站没有题目类别受到“随机题目从子类别中选择题目”问题的影响。';
$string['decimalplacesingrades'] = '成绩的小数位数';
$string['defaultfor'] = '默认 {$a}';
$string['defaultinfofor'] = '场景“{$a}”中共享试题的默认类别。';
$string['defaultmark'] = '默认分数';
$string['defaultmarkmustbepositive'] = '默认分数必须为正。';
$string['deletecoursecategorywithquestions'] = '题库中有试题与本课程类别关联，如果继续，该试题将删除。你可以先使用题库界面移走它们。';
$string['deletequestioncheck'] = '您确定要删除“{$a}”吗？';
$string['deletequestionscheck'] = '您确定要删除下列试题吗？<br /><br />{$a}';
$string['deletingbehaviour'] = '删除试题行为“{$a}”';
$string['deletingqtype'] = '删除试题类型“{$a}”';
$string['didnotmatchanyanswer'] = '[不匹配任何答案]';
$string['disabled'] = '已禁用';
$string['displayoptions'] = '显示选项';
$string['disterror'] = '分布 {$a} 引发了故障';
$string['donothing'] = '不要复制或移动文件或更改链接。';
$string['editcategories'] = '编辑类别';
$string['editcategories_help'] = '为了不将所有试题都放在一个大列表中，可以创建类别和子类别来管理它们。

每个类别都有一个场景，决定类别中的试题可以在哪里使用：

* 活动场景 - 试题只在活动模块中可用
* 课程场景 - 试题在课程所有活动模块中可用
* 课程类别场景 - 试题在指定课程类别中的所有课程和活动模块中可用
* 系统场景 - 试题在站点中所有的课程和活动中可用

随机题也使用类别。它从指定的类别中随机选择试题。';
$string['editcategory'] = '编辑类别';
$string['editingcategory'] = '编辑一个类别';
$string['editingquestion'] = '编辑一道试题';
$string['editquestion'] = '编辑试题';
$string['editquestions'] = '编辑试题';
$string['editthiscategory'] = '编辑此类别';
$string['emptyxml'] = '未知错误 - 空的 imsmanifest.xml 文件';
$string['enabled'] = '启用';
$string['erroraccessingcontext'] = '无法访问场景';
$string['errordeletingquestionsfromcategory'] = '从类别{$a}中删除试题出错。';
$string['errorduringpost'] = '后处理过程中发生错误！';
$string['errorduringpre'] = '预处理过程中发生错误！';
$string['errorduringproc'] = '处理过程中发生错误！';
$string['errorduringregrade'] = '无法重评分试题{$a->qid}，去状态{$a->stateid}。';
$string['errorfilecannotbecopied'] = '错误：无法复制文件{$a}。';
$string['errorfilecannotbemoved'] = '错误：无法移动文件 {$a}。';
$string['errorfileschanged'] = '错误：自表单显示以来，链接到试题的文件已更改。';
$string['erroritemappearsmorethanoncewithdifferentweight'] = '试题（{$a}）在测试的不同位置以不同的权重出现多次。 统计报表当前不支持此情况，所以此题的统计结果可能不可靠。';
$string['errormanualgradeoutofrange'] = '试题 {$a->name} 的分数 {$a->grade} 不在 0 和 {$a->maxgrade} 之间。得分和评论未保存。';
$string['errormovingquestions'] = '移动ID为 {$a} 的试题时出错。';
$string['errorpostprocess'] = '后期处理过程中出错！';
$string['errorpreprocess'] = '预处理过程中出错！';
$string['errorprocess'] = '处理过程中出错！';
$string['errorprocessingresponses'] = '处理您的回答（{$a}）时出错。请点击继续返回刚才的页面，然后重试。';
$string['errorsavingcomment'] = '向数据库保存试题 {$a->name} 的评价时出错';
$string['errorsavingflags'] = '保存标记状态出错。';
$string['errorupdatingattempt'] = '更新数据库中的试卷 {$a->id} 时出错。';
$string['eventquestioncategorycreated'] = '试题类别已创建';
$string['eventquestioncategorydeleted'] = '试题类别已删除';
$string['eventquestioncategorymoved'] = '试题类别已移动';
$string['eventquestioncategoryupdated'] = '试题类别已更新';
$string['eventquestioncategoryviewed'] = '试题类别已查看';
$string['eventquestioncreated'] = '试题已创建';
$string['eventquestiondeleted'] = '试题已删除';
$string['eventquestionmoved'] = '试题已移动';
$string['eventquestionsexported'] = '试题已导出';
$string['eventquestionsimported'] = '试题已导入';
$string['eventquestionupdated'] = '试题已更新';
$string['eventquestionviewed'] = '试题已查看';
$string['export'] = '导出';
$string['exportasxml'] = '导出为 Moodle XML';
$string['exportcategory'] = '导出类别';
$string['exportcategory_help'] = '此设置确定导出的试题来自哪个类别。

某些导入格式，例如 GIFT 和 Moodle XML 格式，允许将类别和场景数据包含在导出文件中，这样在导入时可以重新创建类别（可选）。如果需要，应在相应的复选框中打勾。';
$string['exporterror'] = '导出过程发生错误！';
$string['exportfilename'] = '试题';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = '下载这个试题的Moodle XML 格式';
$string['exportquestions'] = '导出试题到文件';
$string['exportquestions_help'] = '此功能能够将整个类别（包括任何子类别）中的任何试题导出到一个文件。请注意，根据所选的文件格式，某些试题数据和试题类型可能不会导出。';
$string['feedback'] = '反馈';
$string['filecantmovefrom'] = '无法移动试题文件，因为您没有从移动试题的位置删除文件的权限。';
$string['filecantmoveto'] = '试题文件不能移动或复制，因为您没有在目标位置新建文件的权限。';
$string['fileformat'] = '文件格式';
$string['filesareacourse'] = '课程文件区';
$string['filesareasite'] = '站点文件区';
$string['filestomove'] = '移动/复制文件到 {$a}？';
$string['fillincorrect'] = '填入正确回答';
$string['filterbytags'] = '按标签过滤···';
$string['firsttry'] = '首次尝试';
$string['flagged'] = '已标记';
$string['flagthisquestion'] = '标记此题';
$string['formquestionnotinids'] = '表单包含不在 questionids 中的试题';
$string['fractionsnomax'] = '答案中应该有一个的分数是100%，这样这道题才可能得满分。';
$string['generalfeedback'] = '通用反馈';
$string['generalfeedback_help'] = '通用反馈会在学生答题后显示给学生。与特定反馈不同，后者随题目类型和学生回答的不同而变化，而前者对所有学生都是一样的。

您可以通过通用反馈给学生完整的答案，或者是他们不理解试题时可以参考的链接。';
$string['getcategoryfromfile'] = '从文件中获取类别';
$string['getcontextfromfile'] = '从文件中获取场景';
$string['hintn'] = '提示{no}';
$string['hintnoptions'] = '提示 {no} 选项';
$string['hinttext'] = '提示内容';
$string['howquestionsbehave'] = '何种试题行为';
$string['howquestionsbehave_help'] = '学生可以和此测验中的试题有多种交互方式。例如，您可能希望学生输入每道题的答案后再提交整个测验，然后才评分和显示反馈。那么就应该用“延迟反馈”模式。

再比如，您可能希望学生在答题过程中每题都提交一下，并获得立即的反馈；如果他们没有答对，还有机会再次尝试，但只能得到较低的分数。那么就应该用“交互式多次尝试”模式。

它们大概是通常情况下用的最多的两种模式。';
$string['idnumber'] = 'ID号';
$string['idnumber_help'] = '如果使用，ID号在每个试题类别中必须是唯一的。它提供了另一种识别试题的方法，这种方法有时很有用，但通常可以留空。';
$string['ignorebroken'] = '忽略断开的链接';
$string['import'] = '导入';
$string['importcategory'] = '导入类别';
$string['importcategory_help'] = '此设置确定导入的试题将被归入哪个类别。

一些导入格式（例如 GIFT 和 Moodle XML 格式）可能会在文件中包含类别和场景数据。如果要利用这些数据，而不是所选的类别，应该勾选相应的选择框。如果文件指定的类别不存在，将会被自动创建。';
$string['importerror'] = '导入过程中发生错误';
$string['importerrorquestion'] = '导入试题出错';
$string['importfromcoursefiles'] = '... 或选择一个课程文件来导入。';
$string['importfromupload'] = '选择上传的文件…';
$string['importingquestions'] = '从文件中导入 {$a} 道题';
$string['importparseerror'] = '解析导入文件时发现错误。没能导入任何试题。要导入好的试题，请重试，并把“遇错中止”设为“否”';
$string['importquestions'] = '从文件导入试题';
$string['importquestions_help'] = '此功能可以从文本文件导入各种格式的试题。但请注意，文件必须是UTF-8编码。';
$string['importwrongfiletype'] = '您选定的文件类型（{$a->actualtype}）与此次导入使用的格式（{$a->expectedtype}）不匹配。';
$string['impossiblechar'] = '检测括号字符时遇到不应该出现的字符 {$a}';
$string['includesubcategories'] = '同时显示子类别的试题';
$string['incorrect'] = '错误';
$string['incorrectfeedback'] = '对于任何错误的回答';
$string['incorrectfeedbackdefault'] = '您的答案不正确';
$string['information'] = '信息';
$string['invalidanswer'] = '不完整的答案';
$string['invalidarg'] = '没有有效的参数，或服务器配置不正确';
$string['invalidcategoryidforparent'] = '父类别 ID 无效！';
$string['invalidcategoryidtomove'] = '要移动的类别 ID 无效！';
$string['invalidconfirm'] = '确认字符串不正确';
$string['invalidcontextinhasanyquestions'] = '传给 question_context_has_any_questions 的场景无效。';
$string['invalidgrade'] = '分数({$a})与成绩选项不匹配-此题跳过。';
$string['invalidpenalty'] = '无效罚分';
$string['invalidwizardpage'] = '不正确，或未指定向导页面！';
$string['lastmodifiedby'] = '最后修改人';
$string['lasttry'] = '最后一次尝试';
$string['linkedfiledoesntexist'] = '链接文件 {$a} 不存在';
$string['makechildof'] = '制作子类别 “{$a}”';
$string['makecopy'] = '克隆一份';
$string['maketoplevelitem'] = '移动至顶层';
$string['manualgradeinvalidformat'] = '这不是一个有效数字';
$string['manualgradeoutofrange'] = '此分数在有效范围之外。';
$string['manuallygraded'] = '人工评分{$a->mark}分，评论：{$a->comment}';
$string['mark'] = '得分';
$string['markedoutof'] = '满分';
$string['markedoutofmax'] = '满分{$a}';
$string['markoutofmax'] = '得分 {$a->mark}/{$a->max} 分';
$string['marks'] = '得分';
$string['matchgrades'] = '匹配分数';
$string['matchgrades_help'] = '导入的分数必须与有效分数的固定列表之一匹配—100、90、80、75、70、66.666、60、50、40、33.333、30、25、20、16.666、14.2857、12.5、11.111、10、5、0（也包括负值）。如果不是，那么有两个选择：

* 错误 ，如果分数未列出 - 如果一个试题包含列表中没有的分数，那么将显示错误，并且该试题不会导入
* 最接近的分数，如果未列出 - 如果某个分数不匹配列表中的值，那么这个分数就会被更改为列表中最接近的匹配值。';
$string['matchgradeserror'] = '错误 ，如果分数未列出';
$string['matchgradesnearest'] = '最接近的分数，如果未列出';
$string['missingcourseorcmid'] = 'print_question 需要提供 courseid 或 cmid 。';
$string['missingcourseorcmidtolink'] = 'get_question_edit_link 需要提供 courseid 或 cmid 。';
$string['missingimportantcode'] = '该试题类型缺少重要代码：{$a}。';
$string['missingoption'] = '完形题{$a}缺少选项';
$string['modified'] = '最后保存';
$string['move'] = '从 {$a} 移动并更改链接。';
$string['movecategory'] = '移动类别';
$string['movedquestionsandcategories'] = '将试题和试题类别从 {$a->oldplace} 移至 {$a->newplace}。';
$string['movelinksonly'] = '仅更改链接指向，不移动或复制文件。';
$string['moveq'] = '移动试题';
$string['moveqtoanothercontext'] = '移动题目到另一个场景。';
$string['moveto'] = '移动到 >>';
$string['movingcategory'] = '移动类别';
$string['movingcategoryandfiles'] = '您确定要移动类别“{$a->name}”和所有子类别至“{$a->contextto}”吗？<br />已经检测到{$a->urlcount} 个文件与 {$a->fromareaname}中的试题相链接。您想要复制或移动它们到 {$a->toareaname} 吗？';
$string['movingcategorynofiles'] = '您确定要移动类别“{$a->name}”和所有子类别到“{$a->contextto}”吗？';
$string['movingquestions'] = '移动试题和任何文件';
$string['movingquestionsandfiles'] = '您确定要移动试题“{$a->questions}”到<strong>“{$a->tocontext}”</strong>场景吗？<br />已经检测到 <strong>{$a->urlcount}个文件</strong>与{$a->fromareaname}中的试题链接。您确定要复制或移动它们到{$a->toareaname}吗？';
$string['movingquestionsnofiles'] = '您确定要移动试题“{$a->questions}”到场景<strong>“{$a->tocontext}”</strong>吗？<br />在“{$a->fromareaname}”中<strong>没有任何文件</strong>链接到这些试题。';
$string['needtochoosecat'] = '您需要选择一个将此题移入的类别，或者点“取消”。';
$string['nocate'] = '没有这样的类别{$a}！';
$string['nopermissionadd'] = '您没有在此处添加试题的权限。';
$string['nopermissionmove'] = '您没有将试题从此处移走的权限。您必须保存此试题在此类别中，或者将其另存为一道新试题。';
$string['noprobs'] = '在题目数据库中未发现问题。';
$string['noquestions'] = '未找到可导出的试题。请确认您要导出的类别包含试题。';
$string['noquestionsinfile'] = '导入文件中没有试题';
$string['noresponse'] = '[未回答]';
$string['notagfiltersapplied'] = '没有应用标签过滤器';
$string['notanswered'] = '未作答';
$string['notchanged'] = '自上次试答以来未更改';
$string['notenoughanswers'] = '此类型的试题需要至少 {$a} 个答案';
$string['notenoughdatatoeditaquestion'] = '既未指定试题ID，也未指定类别ID和试题类型。';
$string['notenoughdatatomovequestions'] = '您需要提供要移动题目的 ID。';
$string['notflagged'] = '未标记';
$string['notgraded'] = '未评分';
$string['notshown'] = '未显示';
$string['notyetanswered'] = '还未作答';
$string['notyourpreview'] = '此预览不属于您';
$string['novirtualquestiontype'] = '题目类型{$a}没有虚拟题目类型';
$string['numqas'] = '试题试答次数';
$string['numquestions'] = '试题数量';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} 隐藏)';
$string['options'] = '选项';
$string['page-question-category'] = '试题类别页面';
$string['page-question-edit'] = '试题编辑页面';
$string['page-question-export'] = '试题导出页面';
$string['page-question-import'] = '试题导入页面';
$string['page-question-x'] = '任何试题页面';
$string['parent'] = '父';
$string['parentcategory'] = '父类别';
$string['parentcategory_help'] = '新建类别会被放置在一个父类别中。“顶级”意味着该类别不包含在任何其它类别中。类别场景以粗体显示。每个场景中至少要有一个类别。';
$string['parenthesisinproperclose'] = '在 {$a}** 中，** 之前的括号没有正确结束';
$string['parenthesisinproperstart'] = '在 {$a}** 中，** 之前的括号没有正确开始';
$string['parsingquestions'] = '从导入文件解析试题。';
$string['partiallycorrect'] = '部分正确';
$string['partiallycorrectfeedback'] = '对于任何部分正确的回答';
$string['partiallycorrectfeedbackdefault'] = '您的答案部分正确。';
$string['penaltyfactor'] = '惩罚因子';
$string['penaltyfactor_help'] = '此设置确定每次错误的回答将从最终分数里扣除多少分。这只对允许学生多次做答的自适应模式下的测验有效。

罚分因子应该是0到1之间的数字。罚分因子设为1意味着学生必须一次回答正确才能得到分数。罚分因子设为0表示学生可以尝试任意次，仍有机会得到满分。';
$string['penaltyforeachincorrecttry'] = '每次错误尝试的罚分';
$string['penaltyforeachincorrecttry_help'] = '当您想让学生可以通过多次尝试而获知正确答案，于是使用“交互式多次尝试”或“自适应模式”作为试题行为时，那么此选项控制每次错误尝试罚分多少。

罚分只占试题总分的一定比例。因此，如果试题是3分，罚分是0.3333333，那么当学生第一次就答对时能获得3分，第二次才答对能获得2分，第三次才答对就只能得到1分。

对于某些多部分试题，此评分逻辑将分别应用于试题的每个部分。 具体内容取决于试题类型，并且可能会很复杂，但是其原理是使学生尽可能公平地证明自己所学的知识。';
$string['permissionedit'] = '编辑试题';
$string['permissionmove'] = '移动试题';
$string['permissionsaveasnew'] = '另存为新试题';
$string['permissionto'] = '您有权限：';
$string['previewquestion'] = '预览试题：{$a}';
$string['privacy:metadata:database:question'] = '有关特定试题的详情。';
$string['privacy:metadata:database:question:createdby'] = '建立试题的人。';
$string['privacy:metadata:database:question:generalfeedback'] = '此试题的通用反馈。';
$string['privacy:metadata:database:question:modifiedby'] = '最后更新试题的人。';
$string['privacy:metadata:database:question:name'] = '试题的名称。';
$string['privacy:metadata:database:question:questiontext'] = '试题正文。';
$string['privacy:metadata:database:question:timecreated'] = '建立此试题的日期和时间。';
$string['privacy:metadata:database:question:timemodified'] = '这个试题更新的日期和时间。';
$string['privacy:metadata:database:question_attempt_step_data'] = '试题试答步骤可能有特定于该步骤的额外数据。此数据存储在 step_data 表中。';
$string['privacy:metadata:database:question_attempt_step_data:name'] = '数据项目的名称。';
$string['privacy:metadata:database:question_attempt_step_data:value'] = '数据项目的值。';
$string['privacy:metadata:database:question_attempt_steps'] = '每道题的试答都有多个步骤来表明从开始到完成到评分的不同阶段。此表存储每个步骤的信息。';
$string['privacy:metadata:database:question_attempt_steps:fraction'] = '试答此试题的分数被调整为大于1的值。';
$string['privacy:metadata:database:question_attempt_steps:state'] = '在步骤转换结束时，此试题试答步骤的状态。';
$string['privacy:metadata:database:question_attempt_steps:timecreated'] = '此步骤转换开始的日期和时间。';
$string['privacy:metadata:database:question_attempt_steps:userid'] = '执行步骤转换的用户。';
$string['privacy:metadata:database:question_attempts'] = '有关试答特定试题的信息。';
$string['privacy:metadata:database:question_attempts:flagged'] = '表示用户已在试答中标记了此试题。';
$string['privacy:metadata:database:question_attempts:responsesummary'] = '试题回答的概要。';
$string['privacy:metadata:database:question_attempts:timemodified'] = '试题试答更新的时间。';
$string['privacy:metadata:link:qbehaviour'] = '试题子系统利用试题行为插件类型。';
$string['privacy:metadata:link:qformat'] = '试题子系统利用试题格式插件类型来导入和导出不同格式的试题。';
$string['privacy:metadata:link:qtype'] = '‎试题子系统与包含不同类型的试题的试题类型插件进行交互。 ‎';
$string['published'] = '共享';
$string['qtypeveryshort'] = '题型';
$string['questionaffected'] = '<a href="{$a->qurl}">题目“{$a->name}” ({$a->qtype})</a>在此题目类别中，但是正被另一课程“{$a->coursename}”的<a href="{$a->qurl}">测验“{$a->quizname}”</a>使用。';
$string['questionbank'] = '题库';
$string['questionbehaviouradminsetting'] = '试题行为设置';
$string['questionbehavioursdisabled'] = '禁用的试题行为';
$string['questionbehavioursdisabledexplained'] = '输入您不希望出现在下拉菜单中的行为，用半角逗号分隔。';
$string['questionbehavioursorder'] = '试题行为顺序';
$string['questionbehavioursorderexplained'] = '按您希望在下拉菜单中看到的顺序输入各个行为，用半角逗号分隔';
$string['questioncategory'] = '试题类别';
$string['questioncatsfor'] = '“{$a}”的试题类别';
$string['questiondoesnotexist'] = '该试题不存在';
$string['questionformtagheader'] = '{$a} 标签';
$string['questionidmismatch'] = '试题 ID 不匹配';
$string['questionname'] = '试题名称';
$string['questionnamecopy'] = '{$a} (复制)';
$string['questionno'] = '试题{$a}';
$string['questionpreviewdefaults'] = '试题预览的默认值';
$string['questionpreviewdefaults_desc'] = '这些默认值用于用户首次在题库中预览试题。一旦用户预览一道试题，他们的个人偏好被保存为用户偏好。';
$string['questions'] = '试题';
$string['questionsaveerror'] = '保存题目时出错 - （{$a}）';
$string['questionsinuse'] = '（* 标星的试题是已经被某些测验使用的试题。因此，如果继续，这些试题将不会真正删除，而只会被隐藏。）';
$string['questionsmovedto'] = '移动到“{$a}”的试题仍在父课程类别中被使用。';
$string['questionsrescuedfrom'] = '从场景{$a}保存的试题。';
$string['questionsrescuedfrominfo'] = '即便删除场景{$a}，这些试题（有些可能被隐藏）仍被保存。因为仍有一些测验或其它活动使用它们。';
$string['questiontags'] = '试题标签';
$string['questiontext'] = '试题正文';
$string['questiontype'] = '试题类型';
$string['questionuse'] = '在该活动中使用题目';
$string['questionvariant'] = '试题变体';
$string['questionx'] = '试题 {$a}';
$string['requiresgrading'] = '需要评分';
$string['responsehistory'] = '回答历史';
$string['restart'] = '重新开始';
$string['restartwiththeseoptions'] = '从这些选项重新开始';
$string['restoremultipletopcats'] = '备份文件包含场景{$a}的多个顶级试题类别。';
$string['reviewresponse'] = '回顾回答';
$string['rightanswer'] = '正确答案';
$string['rightanswer_help'] = '自动生成的正确回答的概要。这可能会受到限制，因此您不妨考虑在试题的通用反馈中解释正确的解决方案，然后关闭此选项。';
$string['save'] = '保存';
$string['savechangesandcontinueediting'] = '保存更改并继续编辑';
$string['saved'] = '保存：{$a}';
$string['saveflags'] = '保存这些标记的状态';
$string['selectacategory'] = '选择一个类别：';
$string['selectaqtypefordescription'] = '选择一个试题类型来查看详细描述。';
$string['selectcategoryabove'] = '在上面选择一个类别';
$string['selectquestionsforbulk'] = '选择批量操作的试题';
$string['settingsformultipletries'] = '多次尝试';
$string['shareincontext'] = '在场景中共享 {$a}';
$string['showhidden'] = '显示旧试题';
$string['showmarkandmax'] = '显示得分和满分';
$string['showmaxmarkonly'] = '只显示满分';
$string['shown'] = '显示';
$string['shownumpartscorrect'] = '显示正确回答的数量';
$string['shownumpartscorrectwhenfinished'] = '试题结束后显示正确回答的数量';
$string['showquestiontext'] = '在试题列表中显示试题正文';
$string['specificfeedback'] = '特定的反馈';
$string['specificfeedback_help'] = '根据学生给出的回答做出的反馈。';
$string['started'] = '开始';
$string['state'] = '状态';
$string['step'] = '步骤';
$string['steps'] = '步骤';
$string['stoponerror'] = '遇错中止';
$string['stoponerror_help'] = '此设置确定发生错误时，是停止导入（这将导致没有试题被导入），还是忽略任何包含错误的试题，导入任何有效的试题。';
$string['submissionoutofsequence'] = '访问顺序不正确。在处理测验试题的时候，请不要点击后退按钮。';
$string['submissionoutofsequencefriendlymessage'] = '您输入的数据在正常顺序之外。这可能是因为您使用了浏览器的“后退”或“前进”按钮。在测试过程中请不要使用它们。也可能是因为您在页面加载过程中点击了什么。点击<strong>继续</strong>可恢复正常。';
$string['submit'] = '提交';
$string['submitandfinish'] = '提交并结束';
$string['submitted'] = '提交：{$a}';
$string['tagarea_question'] = '试题';
$string['technicalinfo'] = '技术信息';
$string['technicalinfo_help'] = '此技术信息可能仅对处理新试题类型的开发人员有用。 尝试诊断试题问题时它也可能很有帮助。';
$string['technicalinfomaxfraction'] = '最高分：{$a}';
$string['technicalinfominfraction'] = '最低分：{$a}';
$string['technicalinfoquestionsummary'] = '试题概要：{$a}';
$string['technicalinforesponsesummary'] = '回答概要：{$a}';
$string['technicalinforightsummary'] = '正确答案概要：{$a}';
$string['technicalinfostate'] = '试题状态：{$a}';
$string['technicalinfovariant'] = '试题变体：{$a}';
$string['tofilecategory'] = '写入类别到文件';
$string['tofilecontext'] = '写入场景到文件';
$string['topfor'] = '前{$a}';
$string['uninstallbehaviour'] = '卸载此试题行为。';
$string['uninstallqtype'] = '卸载此试题类型。';
$string['unknown'] = '未知';
$string['unknownbehaviour'] = '未知行为：{$a}。';
$string['unknownorunhandledtype'] = '未知的或未处理的试题类型：{$a}';
$string['unknownquestion'] = '未知试题：{$a}。';
$string['unknownquestioncatregory'] = '未知试题类别：{$a}。';
$string['unknownquestiontype'] = '未知试题类型：{$a}。';
$string['unknowntolerance'] = '未知容差类型 {$a}';
$string['unpublished'] = '不共享';
$string['unusedcategorydeleted'] = '此类别已删除，因为删除课程后，它的试题都不再使用。';
$string['updatedisplayoptions'] = '更新显示选项';
$string['upgradeproblemcategoryloop'] = '在升级题目类别时遇到问题。题目类别树中存在循环引用，受影响的类别ID有 {$a}。';
$string['upgradeproblemcouldnotupdatecategory'] = '无法升级题目类别 {$a->name} ({$a->id})';
$string['upgradeproblemunknowncategory'] = '在升级题目类别时遇到问题。类别 {$a->id} 有父类别 {$a->parent}，但该类别已经不存在了。已通过修改父类别纠正了错误。';
$string['whethercorrect'] = '是否正确';
$string['whethercorrect_help'] = '此文字说明包括“正确”，“部分正确”或“不正确”，它和任何彩色高亮传达相同的信息。';
$string['whichtries'] = '哪次尝试';
$string['withselected'] = '对所选试题';
$string['wrongprefix'] = '错误格式化的名前缀 {$a}';
$string['xoutofmax'] = '{$a->mark} / {$a->max}';
$string['yougotnright'] = '您已正确选择 {$a->num} 个。';
$string['youmustselectaqtype'] = '您必须选择一种试题类型。';
$string['yourfileshoulddownload'] = '您的导出文件将很快开始下载。如果没有，请<a href="{$a}">点击这里</a>。';
