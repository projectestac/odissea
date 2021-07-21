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
 * Strings for component 'tool_lp', language 'zh_cn', version '3.11'.
 *
 * @package     tool_lp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '操作';
$string['activities'] = '活动';
$string['addcohorts'] = '添加群组';
$string['addcohortstosync'] = '添加群组进行同步';
$string['addcompetency'] = '添加能力';
$string['addcoursecompetencies'] = '添加能力到课程';
$string['addcrossreferencedcompetency'] = '添加交叉引用能力';
$string['addingcompetencywillresetparentrule'] = '添加一个新能力将移除“{$a}”设置的规则。您想继续吗?';
$string['addnewcompetency'] = '添加新能力';
$string['addnewcompetencyframework'] = '添加新能力框架';
$string['addnewplan'] = '添加新学习计划';
$string['addnewtemplate'] = '添加新学习计划模板';
$string['addnewuserevidence'] = '添加新证据';
$string['addtemplatecompetencies'] = '添加能力到学习计划模板';
$string['aisrequired'] = '”{$a}“是必需的';
$string['aplanswerecreated'] = '{$a}个学习计划已创建。';
$string['aplanswerecreatedmoremayrequiresync'] = '{$a}个学习计划已经创建；更多的将在下次同步的时候创建。';
$string['assigncohorts'] = '分配群组';
$string['averageproficiencyrate'] = '基于此模板的完成的学习计划的平均精通率为{$a}％。';
$string['cancelreviewrequest'] = '取消审查申请';
$string['cannotaddrules'] = '无法配置此能力。';
$string['cannotcreateuserplanswhentemplateduedateispassed'] = '无法创建新学习计划。此模板已经过期，或者即将过期。';
$string['cannotcreateuserplanswhentemplatehidden'] = '当此模板被隐藏时，无法创建新学习计划。';
$string['category'] = '类别';
$string['chooserating'] = '选择一个等级...';
$string['cohortssyncedtotemplate'] = '群组同步到此学习计划模板';
$string['competenciesforframework'] = '{$a}的能力';
$string['competenciesmostoftennotproficient'] = '大多数人在完成的学习计划中都无法达到精通的能力';
$string['competenciesmostoftennotproficientincourse'] = '此课程中通常大多数人不熟练的能力';
$string['competencycannotbedeleted'] = '不能删除能力“{$a}”';
$string['competencycreated'] = '已创建能力';
$string['competencycrossreferencedcompetencies'] = '{$a}个交叉引用能力';
$string['competencyframework'] = '能力框架';
$string['competencyframeworkcreated'] = '能力框架已创建。';
$string['competencyframeworkname'] = '名称';
$string['competencyframeworkroot'] = '没有父级别（顶级能力级别）';
$string['competencyframeworks'] = '能力框架';
$string['competencyframeworksrepository'] = '能力框架库';
$string['competencyframeworkupdated'] = '能力框架已更新。';
$string['competencyoutcome_complete'] = '标记为完成';
$string['competencyoutcome_evidence'] = '附加一个证据';
$string['competencyoutcome_none'] = '无';
$string['competencyoutcome_recommend'] = '推荐此能力';
$string['competencypicker'] = '能力选择器';
$string['competencyrule'] = '能力规则';
$string['competencyupdated'] = '更新的能力';
$string['completeplan'] = '完成此学习计划';
$string['completeplanconfirm'] = '设置学习计划“{$a}”为完成吗？如果是，所有用户能力的当前状态将被记录，并且此计划将变成只读。';
$string['configurecoursecompetencysettings'] = '配置课程能力';
$string['configurescale'] = '配置量表';
$string['coursecompetencies'] = '课程能力';
$string['coursecompetencyratingsarenotpushedtouserplans'] = '此课程的能力等级不影响学习计划。';
$string['coursecompetencyratingsarepushedtouserplans'] = '此课程的能力等级会在学习计划中即时更新。';
$string['coursecompetencyratingsquestion'] = '对课程能力进行评估时，等级是更新学习计划中的能力，还是仅更新课程？';
$string['coursesusingthiscompetency'] = '链接到此能力的课程';
$string['coveragesummary'] = '{$a->competenciescoveredcount}/{$a->competenciescount}个能力被覆盖 ( {$a->coveragepercentage}% )';
$string['createlearningplans'] = '创建学习计划';
$string['createplans'] = '创建学习计划';
$string['crossreferencedcompetencies'] = '交叉引用能力';
$string['default'] = '默认';
$string['deletecompetency'] = '删除能力“{$a}”吗？';
$string['deletecompetencyframework'] = '删除能力框架“{$a}”吗？';
$string['deletecompetencyparenthasrule'] = '删除能力“{$}”吗？这还将移除其父级的规则设置。';
$string['deleteplan'] = '删除学习计划“{$a}”吗？';
$string['deleteplans'] = '删除此学习计划';
$string['deletetemplate'] = '删除学习计划模板“{$a}”吗？';
$string['deletetemplatewithplans'] = '此模板有关联的学习计划。您必须指出怎么处理这些计划。';
$string['deletethisplan'] = '删除此学习计划';
$string['deletethisuserevidence'] = '删除此证据';
$string['deleteuserevidence'] = '删除此先前学习证据“{$a}”吗？';
$string['description'] = '描述';
$string['duedate'] = '到期日期';
$string['duedate_help'] = '学习计划应该完成的日期。';
$string['editcompetency'] = '编辑能力';
$string['editcompetencyframework'] = '编辑能力框架';
$string['editplan'] = '编辑学习计划';
$string['editrating'] = '编辑等级';
$string['edittemplate'] = '编辑学习计划模板';
$string['editthisplan'] = '编辑此学习计划';
$string['editthisuserevidence'] = '编辑此证据';
$string['edituserevidence'] = '编辑证据';
$string['evidence'] = '证据';
$string['filterbyactivity'] = '按资源或活动过滤能力';
$string['findcourses'] = '查找课程';
$string['frameworkcannotbedeleted'] = '不能删除能力架构“{$a}”';
$string['hidden'] = '隐藏';
$string['hiddenhint'] = '（隐藏）';
$string['idnumber'] = 'ID 号';
$string['inheritfromframework'] = '继承自能力框架 (默认)';
$string['itemstoadd'] = '要添加的项目';
$string['jumptocompetency'] = '跳转到能力';
$string['jumptouser'] = '跳转到用户';
$string['learningplancompetencies'] = '学习计划能力';
$string['learningplans'] = '学习计划';
$string['levela'] = '级别{$a}';
$string['linkcompetencies'] = '链接能力';
$string['linkcompetency'] = '链接能力';
$string['linkedcompetencies'] = '链接的能力';
$string['linkedcourses'] = '链接的课程';
$string['linkedcourseslist'] = '链接的课程：';
$string['listcompetencyframeworkscaption'] = '能力框架列表';
$string['listofevidence'] = '证据列表';
$string['listplanscaption'] = '学习计划列表';
$string['listtemplatescaption'] = '学习计划模板列表';
$string['loading'] = '加载中...';
$string['locatecompetency'] = '定位能力';
$string['managecompetenciesandframeworks'] = '管理能力和框架';
$string['modcompetencies'] = '课程能力';
$string['modcompetencies_help'] = '链接到此活动的课程能力。';
$string['move'] = '移动';
$string['movecompetency'] = '移动能力';
$string['movecompetencyafter'] = '在“{$a}”之后移动能力';
$string['movecompetencyframework'] = '移动能力框架';
$string['movecompetencytochildofselfwillresetrules'] = '移动此能力将移除其自身的规则，以及其父级和目标的规则设置。您想继续吗？';
$string['movecompetencywillresetrules'] = '移动该能力将移除其父级和目标的规则设置。您想继续吗?';
$string['moveframeworkafter'] = '在“{$a}”之后移动能力';
$string['movetonewparent'] = '跨层级移动';
$string['myplans'] = '我的学习计划';
$string['nfiles'] = '{$a}个文件';
$string['noactivities'] = '没有活动';
$string['nocompetencies'] = '在此框架中没有创建任何能力。';
$string['nocompetenciesinactivity'] = '没有能力链接到此活动或资源。';
$string['nocompetenciesincourse'] = '没有能力链接到此课程。';
$string['nocompetenciesinevidence'] = '没有能力链接到此证据。';
$string['nocompetenciesinlearningplan'] = '没有能力链接到此学习计划。';
$string['nocompetenciesinlist'] = '没有选择任何能力。';
$string['nocompetenciesintemplate'] = '没有能力链接到此学习计划模板。';
$string['nocompetencyframeworks'] = '还没有创建任何能力框架。';
$string['nocompetencyselected'] = '没有选择能力';
$string['nocrossreferencedcompetencies'] = '没有其他能力交叉引用到此能力。';
$string['noevidence'] = '没有证据';
$string['nofiles'] = '没有文件';
$string['nolinkedcourses'] = '没有课程链接到此能力';
$string['noparticipants'] = '没有找到参与人。';
$string['noplanswerecreated'] = '没有创建学习计划。';
$string['notemplates'] = '还没有创建学习计划模板。';
$string['nourl'] = '没有网址';
$string['nouserevidence'] = '还没有添加先前学习证据。';
$string['nouserplans'] = '还没有创建任何学习计划。';
$string['oneplanwascreated'] = '一个学习计划已创建';
$string['outcome'] = '成果';
$string['parentcompetency'] = '父级';
$string['parentcompetency_edit'] = '编辑父级';
$string['parentcompetency_help'] = '定义将在其下添加能力的父级。它可以是同一框架内的另一个能力，也可以是顶级能力的能力框架的根。';
$string['path'] = '路径：';
$string['planapprove'] = '激活';
$string['plancompleted'] = '已完成学习计划';
$string['plancreated'] = '已建立学习计划';
$string['plandescription'] = '描述';
$string['planname'] = '名称';
$string['plantemplate'] = '选择学习计划模板';
$string['plantemplate_help'] = '从模板创建的学习计划将包含与模板匹配的能力列表。模板的更新将反映在从该模板创建的任何计划中。';
$string['planunapprove'] = '发回到草稿';
$string['planupdated'] = '已更新学习计划';
$string['pluginname'] = '学习计划';
$string['points'] = '分数';
$string['pointsgivenfor'] = '给予“{$a}”的分数';
$string['privacy:metadata'] = '学习计划插件不存储任何个人数据。';
$string['proficient'] = '精通';
$string['progress'] = '进度';
$string['rate'] = '评估';
$string['ratecomment'] = '证据备注';
$string['rating'] = '等级';
$string['ratingaffectsonlycourse'] = '评估能力只更新此课程的能力';
$string['ratingaffectsuserplans'] = '评估能力也更新所有学习计划的能力';
$string['reopenplan'] = '重新开启学习计划';
$string['reopenplanconfirm'] = '重新开启学习计划吗？如果是，将删除先前完成计划时记录的用户能力状态，并且计划将再次变为活跃状态。';
$string['requestreview'] = '申请审查';
$string['reviewer'] = '审查人';
$string['reviewstatus'] = '审查状态';
$string['savechanges'] = '保存更改';
$string['scale'] = '量表';
$string['scale_help'] = '量表确定如何衡量能力的精通程度。选择量表后，需要对其进行配置。

* 被选为“默认”的项目是能力自动完成时给出的等级。
* 被选为“精通”的项目表示在评估能力时哪些等级会将能力标记为精通。';
$string['scalevalue'] = '量表值';
$string['search'] = '搜索...';
$string['selectcohortstosync'] = '选择要同步的群组';
$string['selectcompetencymovetarget'] = '选择一个位置将此能力移动到：';
$string['selectedcompetency'] = '选定的能力';
$string['selectuserstocreateplansfor'] = '选择要为其创建学习计划的用户';
$string['sendallcompetenciestoreview'] = '发送所有能力进行审查，以获得先前学习证据“{$a}”';
$string['sendcompetenciestoreview'] = '发送所有能力进行审查';
$string['shortname'] = '名称';
$string['sitedefault'] = '（站点默认）';
$string['startreview'] = '开始审查';
$string['state'] = '状态';
$string['status'] = '状态';
$string['stopreview'] = '结束审查';
$string['stopsyncingcohort'] = '停止同步群组';
$string['taxonomies'] = '分类标准';
$string['taxonomy_add_behaviour'] = '添加行为';
$string['taxonomy_add_competency'] = '添加能力';
$string['taxonomy_add_concept'] = '添加概念';
$string['taxonomy_add_domain'] = '添加领域';
$string['taxonomy_add_indicator'] = '添加指标';
$string['taxonomy_add_level'] = '添加级别';
$string['taxonomy_add_outcome'] = '添加成果';
$string['taxonomy_add_practice'] = '添加练习';
$string['taxonomy_add_proficiency'] = '添加精通';
$string['taxonomy_add_skill'] = '添加技能';
$string['taxonomy_add_value'] = '添加值';
$string['taxonomy_edit_behaviour'] = '编辑行为';
$string['taxonomy_edit_competency'] = '编辑能力';
$string['taxonomy_edit_concept'] = '编辑概念';
$string['taxonomy_edit_domain'] = '编辑领域';
$string['taxonomy_edit_indicator'] = '编辑指标';
$string['taxonomy_edit_level'] = '编辑级别';
$string['taxonomy_edit_outcome'] = '编辑成果';
$string['taxonomy_edit_practice'] = '编辑练习';
$string['taxonomy_edit_proficiency'] = '编辑精通';
$string['taxonomy_edit_skill'] = '编辑技能';
$string['taxonomy_edit_value'] = '编辑值';
$string['taxonomy_parent_behaviour'] = '父行为';
$string['taxonomy_parent_competency'] = '父能力';
$string['taxonomy_parent_concept'] = '父概念';
$string['taxonomy_parent_domain'] = '父领域';
$string['taxonomy_parent_indicator'] = '父指标';
$string['taxonomy_parent_level'] = '父级别';
$string['taxonomy_parent_outcome'] = '父成果';
$string['taxonomy_parent_practice'] = '父练习';
$string['taxonomy_parent_proficiency'] = '父精通';
$string['taxonomy_parent_skill'] = '父技能';
$string['taxonomy_parent_value'] = '父值';
$string['taxonomy_selected_behaviour'] = '选定的行为';
$string['taxonomy_selected_competency'] = '选定的能力';
$string['taxonomy_selected_concept'] = '选定的概念';
$string['taxonomy_selected_domain'] = '选定的领域';
$string['taxonomy_selected_indicator'] = '选定的指标';
$string['taxonomy_selected_level'] = '选定的级别';
$string['taxonomy_selected_outcome'] = '选定的成果';
$string['taxonomy_selected_practice'] = '选定的练习';
$string['taxonomy_selected_proficiency'] = '选定的精通';
$string['taxonomy_selected_skill'] = '选定的技能';
$string['taxonomy_selected_value'] = '选定的值';
$string['template'] = '学习计划模板';
$string['templatebased'] = '基于的模板';
$string['templatecohortnotsyncedwhileduedateispassed'] = '如果模板到期，群组将不能同步。';
$string['templatecohortnotsyncedwhilehidden'] = '当模板隐藏时，群组将不能同步。';
$string['templatecompetencies'] = '学习计划模板能力';
$string['templatecreated'] = '已创建学习计划模板';
$string['templatename'] = '名称';
$string['templates'] = '学习计划模板';
$string['templateupdated'] = '已更新学习计划模板';
$string['totalrequiredtocomplete'] = '整个需要完成的能力';
$string['unlinkcompetencycourse'] = '取消链接到此课程的能力“{$a}”吗？';
$string['unlinkcompetencyplan'] = '取消链接到此学习计划的能力“{$a}”吗？';
$string['unlinkcompetencytemplate'] = '取消链接到此学习计划模板的能力{$a}吗？';
$string['unlinkplanstemplate'] = '取消学习计划与其模板的链接';
$string['unlinkplantemplate'] = '取消与学习计划模板的链接';
$string['unlinkplantemplateconfirm'] = '取消学习计划“{$a}”与其模板的链接吗？对模板所做的任何更改将不再应用于此计划。此操作无法撤消。';
$string['uponcoursecompletion'] = '完成课程后：';
$string['uponcoursemodulecompletion'] = '完成活动后：';
$string['usercompetencyfrozen'] = '此记录现已冻结。当用户的学习计划标记为完成时，它反映了用户的能力状态。';
$string['userevidence'] = '先前学习证据';
$string['userevidencecreated'] = '已建立先前学习证据';
$string['userevidencedescription'] = '描述';
$string['userevidencefiles'] = '文件';
$string['userevidencename'] = '名称';
$string['userevidencesummary'] = '概要';
$string['userevidenceupdated'] = '已更新先前学习证据';
$string['userevidenceurl'] = '网址';
$string['userevidenceurl_help'] = '网址必须以“http://”或“https://”开头。';
$string['viewdetails'] = '查看详情';
$string['visible'] = '可见';
$string['visible_help'] = '能力框架可以在设置或更新为新版本时隐藏。';
$string['when'] = '当';
$string['xcompetencieslinkedoutofy'] = '{$a->x}/{$a->y} 个能力链接到课程';
$string['xcompetenciesproficientoutofy'] = '{$a->x}/{$a->y}个能力是熟练的';
$string['xcompetenciesproficientoutofyincourse'] = '您熟练此课程中的{$a->x}/{$a->y}个能力。';
$string['xplanscompletedoutofy'] = '此模板已完成 {$a->x}/{$a->y} 个学习计划';
