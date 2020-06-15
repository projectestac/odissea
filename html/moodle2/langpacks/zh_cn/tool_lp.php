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
 * Strings for component 'tool_lp', language 'zh_cn', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_lp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '操作';
$string['activities'] = '活动';
$string['addcohorts'] = '增加群';
$string['addcohortstosync'] = '增群到同步';
$string['addcompetency'] = '添加能力';
$string['addcoursecompetencies'] = '为课程添加能力';
$string['addcrossreferencedcompetency'] = '添加交叉能力';
$string['addnewcompetency'] = '创建能力';
$string['addnewcompetencyframework'] = '添加新的能力框架';
$string['addnewplan'] = '添加新学习计划';
$string['addnewtemplate'] = '添加新的学习计划模板';
$string['addnewuserevidence'] = '创建证书';
$string['addtemplatecompetencies'] = '学习计划模板中添加能力';
$string['aisrequired'] = '\'{$a}\'是必须的';
$string['aplanswerecreated'] = '{$a}学习计划建立了。';
$string['aplanswerecreatedmoremayrequiresync'] = '{$a}学习计划已经建立；更多的将在下一次同步的时候被创建出来。';
$string['assigncohorts'] = '分配群';
$string['averageproficiencyrate'] = '基于此模板的完成的学习计划的平均熟练率为 {$a} %';
$string['cancelreviewrequest'] = '取消审查请求';
$string['cannotaddrules'] = '这个能力不能被配置。';
$string['cannotcreateuserplanswhentemplateduedateispassed'] = '不能创建新的学习计划。计划模板已经过期，或者即将过期。';
$string['cannotcreateuserplanswhentemplatehidden'] = '当这个模板被隐藏，新的学习计划不能被创建。';
$string['category'] = '类别';
$string['chooserating'] = '选择一个评估...';
$string['cohortssyncedtotemplate'] = '群同步到该学习计划模板';
$string['competenciesforframework'] = '{$a}的能力';
$string['competenciesmostoftennotproficient'] = '在完成的学习计划中，通常大多数能力都不是精通的。';
$string['competenciesmostoftennotproficientincourse'] = '在这门课程中大多数能力通常不精通';
$string['competencycannotbedeleted'] = '能力 \'{$a}\' 不能被删除';
$string['competencycreated'] = '创建的能力';
$string['competencycrossreferencedcompetencies'] = '{$a}交叉引用的能力';
$string['competencyframework'] = '能力框架';
$string['competencyframeworkcreated'] = '能力框架已创建。';
$string['competencyframeworkname'] = '能力框架名称';
$string['competencyframeworkroot'] = '没有父级别（顶级能力级别）';
$string['competencyframeworks'] = '能力框架';
$string['competencyframeworksrepository'] = '能力框架库';
$string['competencyframeworkupdated'] = '能力框架已更新。';
$string['competencyoutcome_complete'] = '标记为完成';
$string['competencyoutcome_evidence'] = '附加一个证据';
$string['competencyoutcome_none'] = '无';
$string['competencyoutcome_recommend'] = '推荐该能力';
$string['competencypicker'] = '能力选择器';
$string['competencyrule'] = '能力规则';
$string['competencyupdated'] = '更新的能力';
$string['completeplan'] = '完成这个学习计划';
$string['completeplanconfirm'] = '设置学习计划 \'{$a}\' 为完成的？如果是这样，所有用户能力的当前状态将被记录，并且该计划将变为只能被读取。';
$string['configurecoursecompetencysettings'] = '设置课程能力';
$string['configurescale'] = '配置量尺';
$string['coursecompetencies'] = '课程能力';
$string['coursecompetencyratingsarenotpushedtouserplans'] = '该课程的能力评估不会影响学习计划。';
$string['coursecompetencyratingsarepushedtouserplans'] = '本课程的能力评估在学习计划中即时更新。';
$string['coursecompetencyratingsquestion'] = '当一个课程能力被评估时，该评估是否更新学习计划中的能力，或者仅仅是应用于该课程?';
$string['coursesusingthiscompetency'] = '链接到该能力的课程';
$string['coveragesummary'] = '{$a->competenciescoveredcount} of {$a->competenciescount} 能力被覆盖( {$a->coveragepercentage} % )';
$string['createlearningplans'] = '创建学习计划';
$string['createplans'] = '创建学习计划';
$string['crossreferencedcompetencies'] = '交叉引用的能力';
$string['default'] = '默认';
$string['deletecompetency'] = '删除能力\'{$a}\'？';
$string['deletecompetencyframework'] = '删除能力框架  \'{$a}\' 吗?';
$string['deletecompetencyparenthasrule'] = '删除能力\'{$a}\'？这还将删除其父类设置的规则。';
$string['deleteplan'] = '删除学习计划\'{$a}\'？';
$string['deleteplans'] = '删除这个学习计划';
$string['deletetemplate'] = '删除学习计划模板{$a} ?';
$string['deletetemplatewithplans'] = '这个模板有相关的学习计划。你必须指明如何处理这些计划。';
$string['deletethisplan'] = '删除这个学习计划';
$string['deletethisuserevidence'] = '删除这个证据';
$string['deleteuserevidence'] = '删除 \'{$a}\'这个先前学习的证据？';
$string['description'] = '描述';
$string['duedate'] = '截止日期';
$string['duedate_help'] = '学习计划应该完成的日期。';
$string['editcompetency'] = '编辑能力';
$string['editcompetencyframework'] = '编辑能力框架';
$string['editplan'] = '编辑学习计划';
$string['editrating'] = '编辑等级';
$string['edittemplate'] = '编辑学习计划模板';
$string['editthisplan'] = '编辑这个学习计划';
$string['editthisuserevidence'] = '编辑这个证据';
$string['edituserevidence'] = '编辑证据';
$string['evidence'] = '证据';
$string['findcourses'] = '查找课程';
$string['frameworkcannotbedeleted'] = '能力框架  \'{$a}\'  不能删除';
$string['hidden'] = '隐藏';
$string['hiddenhint'] = '（隐藏）';
$string['idnumber'] = 'ID号';
$string['inheritfromframework'] = '继承自能力框架 (默认)';
$string['itemstoadd'] = '添加的项目';
$string['jumptocompetency'] = '跳转到能力';
$string['jumptouser'] = '跳转到用户';
$string['learningplancompetencies'] = '学习计划能力';
$string['learningplans'] = '学习计划';
$string['levela'] = '级别{$a}';
$string['linkcompetencies'] = '链接能力';
$string['linkcompetency'] = '链接能力';
$string['linkedcompetencies'] = '链接的能力';
$string['linkedcourses'] = '链接的课程';
$string['linkedcourseslist'] = '链接的课程列表';
$string['listcompetencyframeworkscaption'] = '能力框架列表';
$string['listofevidence'] = '证据列表';
$string['listplanscaption'] = '学习计划列表';
$string['listtemplatescaption'] = '学习计划模板列表';
$string['locatecompetency'] = '定位能力';
$string['managecompetenciesandframeworks'] = '管理能力和框架';
$string['modcompetencies'] = '课程能力';
$string['modcompetencies_help'] = '与此活动相关的课程能力';
$string['movecompetency'] = '移动能力';
$string['movecompetencyafter'] = '在\'{$a}\'之后移动能力';
$string['movecompetencyframework'] = '移动能力框架';
$string['moveframeworkafter'] = '在\'{$a}\'之后移动能力框架';
$string['movetonewparent'] = '跨层级移动位置';
$string['myplans'] = '我的学习计划';
$string['noactivities'] = '没有活动';
$string['nocompetencies'] = '这个框架里面还没有创建能力。';
$string['nocompetenciesincourse'] = '没有能力链接到该课程。';
$string['nocompetenciesinevidence'] = '没有能力链接到该证据。';
$string['nocompetenciesintemplate'] = '还没有能力链接到该学习计划模板。';
$string['nocompetencyframeworks'] = '尚未建立任何能力框架';
$string['nocompetencyselected'] = '没有选择能力';
$string['nocrossreferencedcompetencies'] = '没有其他能力交叉引用到这个能力。';
$string['noevidence'] = '没有证据';
$string['nofiles'] = '没有文件';
$string['nolinkedcourses'] = '没有课程链接到该能力';
$string['noparticipants'] = '未找到参与者';
$string['noplanswerecreated'] = '没有创建学习计划';
$string['notemplates'] = '尚未建立学习计划模板';
$string['nouserevidence'] = '还没有先前学习的证据被添加。';
$string['nouserplans'] = '还没有创建任何学习计划。';
$string['outcome'] = '成果';
$string['parentcompetency_help'] = '定义将添加的能力的父类。它可以是同一个框架中的另一个能力，也可以是顶级能力的能力框架的根。';
$string['path'] = '路径:';
$string['plandescription'] = '描述';
$string['planname'] = '学习计划名称';
$string['plantemplate'] = '选择学习计划模板';
$string['planunapprove'] = '发回到草稿';
$string['pluginname'] = '学习计划';
$string['points'] = '分数';
$string['pointsgivenfor'] = '给予\'{$a}分数';
$string['proficient'] = '精通';
$string['progress'] = '进步';
$string['rate'] = '评估';
$string['ratecomment'] = '证据说明';
$string['rating'] = '评级';
$string['ratingaffectsonlycourse'] = '能力评估只更新该课程的能力';
$string['ratingaffectsuserplans'] = '评估一个能力的同时也更新所有学习计划中的该项能力';
$string['requestreview'] = '请求审核';
$string['reviewstatus'] = '审核状态';
$string['savechanges'] = '保存更改';
$string['scale'] = '量尺';
$string['scale_help'] = '量尺确定了在能力方面的熟练程度。在选择了量尺之后，需要对其进行配置。被选择为“默认”的项目是当一个能力自动完成时给予的评价。';
$string['scalevalue'] = '量尺值';
$string['selectcohortstosync'] = '选择群到同步';
$string['selectcompetencymovetarget'] = '选择一个位置来移动这个能力:';
$string['selectedcompetency'] = '选择的能力';
$string['selectuserstocreateplansfor'] = '选择用户来创建学习计划';
$string['sendallcompetenciestoreview'] = '把所有的能力都放在审查中，以证明之前的学习 \'{$a}\\';
$string['sendcompetenciestoreview'] = '发送能力进行审核';
$string['shortname'] = '简称';
$string['sitedefault'] = '（网站默认）';
$string['startreview'] = '开始审核';
$string['status'] = '状态';
$string['stopreview'] = '完成审核';
$string['stopsyncingcohort'] = '停止同步群';
$string['taxonomies'] = '分类标准';
$string['taxonomy_add_competency'] = '添加能力';
$string['taxonomy_add_level'] = '添加级别';
$string['taxonomy_add_outcome'] = '增加成果';
$string['taxonomy_edit_competency'] = '编辑能力';
$string['taxonomy_edit_level'] = '编辑级别';
$string['taxonomy_edit_outcome'] = '编辑成果';
$string['taxonomy_parent_competency'] = '父能力';
$string['taxonomy_parent_level'] = '父级别';
$string['taxonomy_selected_competency'] = '选择的能力';
$string['taxonomy_selected_level'] = '选择的级别';
$string['template'] = '学习计划模板';
$string['templatebased'] = '基于模板';
$string['templatecohortnotsyncedwhileduedateispassed'] = '如果模板到期，群将不能同步。';
$string['templatecohortnotsyncedwhilehidden'] = '当模板隐藏，群将不能被同步。';
$string['templatecompetencies'] = '学习计划模板能力';
$string['templatecreated'] = '学习计划模板已建立';
$string['templatename'] = '模板名称';
$string['templates'] = '学习计划模板';
$string['templateupdated'] = '学习计划模板已更新';
$string['totalrequiredtocomplete'] = '整个需要完成的能力';
$string['unlinkcompetencycourse'] = '取消链接到该课程的能力“{$a}”？';
$string['unlinkcompetencyplan'] = '取消链接到该学习计划的能力“{$a}”？';
$string['unlinkcompetencytemplate'] = '取消链接到该学习计划模板的能力{$a}？';
$string['unlinkplanstemplate'] = '取消这些学习计划与它们的模板的链接';
$string['unlinkplantemplate'] = '取消链接到学习计划模板';
$string['uponcoursecompletion'] = '课程完成之后：';
$string['uponcoursemodulecompletion'] = '活动完成后：';
$string['userevidence'] = '先前学习的证据';
$string['userevidencecreated'] = '已经建立的先前学习的证据';
$string['userevidencedescription'] = '描述';
$string['userevidencefiles'] = '文件';
$string['userevidencename'] = '名称';
$string['userevidencesummary'] = '描述';
$string['userevidenceupdated'] = '已经更新先前学习的证据';
$string['userevidenceurl'] = '网页地址';
$string['visible'] = '可见';
$string['visible_help'] = '能力框架在设立或更新时可以被隐藏。';
$string['when'] = '当';
$string['xcompetenciesproficientoutofy'] = '{$a->x} / {$a->y} 能力是精通的';
$string['xcompetenciesproficientoutofyincourse'] = '你精通这门课程{$a->y}个能力中的{$a->x}个。';
$string['xplanscompletedoutofy'] = '这个模板有{$a->x}/{$a->y}学习计划完成了';
