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
 * Strings for component 'analytics', language 'zh_cn', version '3.11'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = '可分析{$a->analysableid}但未使用:{$a->errors}';
$string['analysablenotvalidfortarget'] = '可分析性{$a->analysableid}对{$a->result}目标是无效的';
$string['analysisinprogress'] = '仍在上一次任务的分析中';
$string['analytics'] = '分析';
$string['analyticsdisabled'] = '分析已禁用。您可以在“站点管理>高级功能”中启用它。';
$string['analyticslogstore'] = '用于分析的日志存储';
$string['analyticslogstore_help'] = '分析API将使用日志存储来读取用户的活动';
$string['analyticssettings'] = '分析设置';
$string['analyticssiteinfo'] = '网站信息';
$string['calclifetime'] = '保留分析计算';
$string['configlcalclifetime'] = '这指定要保留计算数据的时间长度-这不会删除预测，而是删除用于生成预测的数据。这里使用默认选项是最好的，因为它可以控制磁盘的使用情况，但是如果您将计算表用于其他目的，则可能希望增加此值。';
$string['defaultpredictionsprocessor'] = '默认预测处理器';
$string['defaultpredictoroption'] = '默认处理器({$a})';
$string['defaulttimesplittingmethods'] = '模型评估的默认分析间隔';
$string['defaulttimesplittingmethods_help'] = '分析间隔定义了系统计算预测的时间以及为这些预测考虑的活动日志部分。除非指定了特定的分析间隔，否则模型评估过程将遍历这些分析间隔。';
$string['disabledmodel'] = '禁用的模型';
$string['erroralreadypredict'] = '文件 {$a} 已经被用于生成预测了。';
$string['errorcannotreaddataset'] = '无法读取数据集文件{$a}';
$string['errorcannotusetimesplitting'] = '提供的分析间隔不能用于此模型。';
$string['errorcannotwritedataset'] = '无法写入数据集文件{$a}';
$string['errorexportmodelresult'] = '无法导出机器学习模型。';
$string['errorimport'] = '导入JSON文件时出错。';
$string['errorimportmissingclasses'] = '以下分析组件在此网站上不可用：{$a->missingclasses}。';
$string['errorimportmissingcomponents'] = '提供的模型需要安装以下插件：{$a}。请注意，这些版本不一定需要与站点上安装的版本匹配。在大多数情况下，安装相同或更新版本的插件应该没问题。';
$string['errorimportversionmismatches'] = '以下组件的版本与此站点上安装的版本不同：{$a}。可以使用“忽略版本不匹配”选项忽略这些差异。';
$string['errorinvalidcontexts'] = '某些选定的上下文不能用于此目标。';
$string['errorinvalidindicator'] = '非法 {$a} 标识';
$string['errorinvalidtarget'] = '无效的{$a}目标';
$string['errorinvalidtimesplitting'] = '无效的时间分割;请确保您添加了类名完全合格的类。';
$string['errornocontextrestrictions'] = '所选目标不支持上下文限制';
$string['errornoexportconfig'] = '导出模型配置时出现问题。';
$string['errornoexportconfigrequirements'] = '只能导出具有分析间隔的非静态模型。';
$string['errornoindicators'] = '这个模型没有任何指标。';
$string['errornopredictresults'] = '没有从预测处理器返回的结果。检查输出目录内容以获得更多信息。';
$string['errornoroles'] = '学生或教师的角色还没有被定义。在分析设置页面中定义它们。';
$string['errornotarget'] = '这个模型没有任何目标。';
$string['errornotimesplittings'] = '这个模型没有任何时间分割方法。';
$string['errorpredictioncontextnotavailable'] = '此预测内容不再可用。';
$string['errorpredictionformat'] = '预测计算格式错误';
$string['errorpredictionnotfound'] = '未找到预测';
$string['errorpredictionsprocessor'] = '处理器预测错误：{$a}';
$string['errorpredictwrongformat'] = '预测处理器的返回不能被解码："{$a}"';
$string['errorprocessornotready'] = '选择的预测处理器还没有准备好：{$a}';
$string['errorsamplenotavailable'] = '预测的样本不再可用';
$string['errorunexistingmodel'] = '不存在的模型{$a}';
$string['errorunexistingtimesplitting'] = '选择的时间分割方法是不可用的。';
$string['errorunknownaction'] = '未知动作';
$string['eventinsightsviewed'] = '洞察力视图';
$string['eventpredictionactionstarted'] = '预测处理已开始';
$string['fixedack'] = '已认可';
$string['incorrectlyflagged'] = '标记不正确';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = '系统为你提供了一些洞察力：<a href="{$a}">{$a}</a>。';
$string['insightinfomessageplain'] = '系统为你提供了一些洞察力： {$a}';
$string['insightmessagesubject'] = '对 "{$a->contextname}": {$a->insightname}的新洞察';
$string['invalidanalysablefortimesplitting'] = '它不能用{$a}时间分割方法来分析。';
$string['invalidtimesplitting'] = 'ID 为{$a} 的模型在进行训练之前需要一个时间分割方法。';
$string['levelinstitution'] = '教育层次';
$string['levelinstitutionisced0'] = '幼儿教育（教育程度低于小学）';
$string['levelinstitutionisced1'] = '初等教育';
$string['levelinstitutionisced2'] = '初中教育';
$string['levelinstitutionisced3'] = '高中教育';
$string['levelinstitutionisced4'] = '中学后非高等教育（可能包括企业或社区/非政府组织培训）';
$string['levelinstitutionisced5'] = '短期高等教育（可能包括企业或社区/非政府组织培训）';
$string['levelinstitutionisced6'] = '本科或同等学历';
$string['levelinstitutionisced7'] = '硕士或同等水平';
$string['levelinstitutionisced8'] = '博士或同等水平';
$string['modeinstruction'] = '教学模式';
$string['modeinstructionblendedhybrid'] = '混合';
$string['modeinstructionfacetoface'] = '面对面';
$string['modeinstructionfullyonline'] = '完全在线';
$string['modeloutputdir'] = '模型输出目录';
$string['modeloutputdirinfo'] = '预测处理器存储所有评估信息的目录。对调试和研究很有用。';
$string['modeloutputdirwithdefaultinfo'] = '预测处理器存储所有评估信息的目录。用于调试和研究。如果为空，则{$a}将用作默认值。';
$string['modeltimelimit'] = '每个模型的分析时间限制';
$string['modeltimelimitinfo'] = '这个设置限制了每个模型分析站点内容的时间。';
$string['neutral'] = '中立的';
$string['neverdelete'] = '从不删除计算';
$string['nocourses'] = '无可分析课程';
$string['nodata'] = '无可分析数据';
$string['noevaluationbasedassumptions'] = '基于假设的模型不能被评估。';
$string['noinsights'] = '没有洞察力报表';
$string['noinsightsmodel'] = '这个模型没有产生洞察力';
$string['nonewdata'] = '无新的可用数据';
$string['nonewranges'] = '暂无新的预测';
$string['nopredictionsyet'] = '还没有可用的预测';
$string['noranges'] = '暂无预测';
$string['notapplicable'] = '不适用';
$string['notrainingbasedassumptions'] = '基于假设的模型不需要训练';
$string['notuseful'] = '无作用';
$string['novaliddata'] = '无有效可用数据';
$string['novalidsamples'] = '有有效且可用的样例';
$string['onlycli'] = '分析过程仅通过命令行执行';
$string['onlycliinfo'] = '分析过程，就像评估模型，训练机器学习算法或获得预测可能需要一段时间，它们将作为cron任务运行，它们可以通过命令行来强制执行。如果您希望站点管理员能够通过web界面手动运行这些程序，请禁用此设置';
$string['percentonline'] = '在线百分比';
$string['percentonline_help'] = '如果你所在的组织提供混合课程，那么在Moodle中在线完成学生工作的比例是多少？输入一个介于0和100之间的数字。';
$string['predictionsprocessor'] = '预测处理器';
$string['predictionsprocessor_help'] = '一个预测处理器是机器学习后端，它通过计算模型的指标和目标来处理数据集。如果你换到另一个预测处理器的话，所有经过训练的算法和预测都将被删除。';
$string['privacy:metadata:analytics:indicatorcalc'] = '指标计算';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = '内容正文';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = '计算结束时间';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = '指标计算类';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = '样例ID';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = '样例的源数据表';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = '计算开始时间';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = '预测完成时';
$string['privacy:metadata:analytics:indicatorcalc:value'] = '计算出的值';
$string['privacy:metadata:analytics:predictionactions'] = '预测操作';
$string['privacy:metadata:analytics:predictionactions:actionname'] = '操作名称';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = '预测ID';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = '预测操作执行的时间';
$string['privacy:metadata:analytics:predictionactions:userid'] = '执行此操作的用户';
$string['privacy:metadata:analytics:predictions'] = '预测';
$string['privacy:metadata:analytics:predictions:calculations'] = '指标计算';
$string['privacy:metadata:analytics:predictions:contextid'] = '内容正文';
$string['privacy:metadata:analytics:predictions:modelid'] = '模型代码';
$string['privacy:metadata:analytics:predictions:prediction'] = '预测';
$string['privacy:metadata:analytics:predictions:predictionscore'] = '预测得分';
$string['privacy:metadata:analytics:predictions:rangeindex'] = '时间分割方法的索引';
$string['privacy:metadata:analytics:predictions:sampleid'] = '样例ID';
$string['privacy:metadata:analytics:predictions:timecreated'] = '进行预测的时间';
$string['privacy:metadata:analytics:predictions:timeend'] = '计算工作结束时间';
$string['privacy:metadata:analytics:predictions:timestart'] = '计算工作开始时间';
$string['processingsitecontents'] = '正在处理网站内容';
$string['successfullyanalysed'] = '分析成功完成';
$string['timesplittingmethod'] = '课程时间分割方法';
$string['timesplittingmethod_help'] = '时间分割方法将课程时间分为若干部分;预测引擎将在这些部分结束时运行。建议您只启用感兴趣的时间分割方法。评估过程将遍历所有启用的时间分割方法，因此启用的时间分割方法越多，评估过程就越慢。';
$string['typeinstitution'] = '机构类型';
$string['typeinstitutionacademic'] = '学术的';
$string['typeinstitutionngo'] = '非政府组织(NGO)';
$string['typeinstitutiontraining'] = '企业培训';
$string['useful'] = '有用的';
$string['viewdetails'] = '查看详细信息';
$string['viewinsight'] = '查看细节';
$string['viewinsightdetails'] = '查看细节详情';
$string['viewprediction'] = '查看预测细节';
$string['washelpful'] = '这有用吗？';
