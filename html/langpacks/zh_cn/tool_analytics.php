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
 * Strings for component 'tool_analytics', language 'zh_cn', version '3.11'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = '精确度';
$string['actionexecutedgroupedusefulness'] = '分组操作';
$string['actions'] = '操作';
$string['actionsexecutedbyusers'] = '用户执行的操作';
$string['actionsexecutedbyusersfor'] = '用户对“{$a}”模型执行的操作';
$string['allpredictions'] = '所有预测';
$string['alltimesplittingmethods'] = '所有分析间隔';
$string['analysingsitedata'] = '分析网站';
$string['analysis'] = '分析';
$string['analyticmodels'] = '分析模型';
$string['bettercli'] = '评估模型和生成预测可能涉及繁重的过程。建议从命令行运行这些操作。';
$string['cantguessenddate'] = '无法猜测结束日期';
$string['cantguessstartdate'] = '无法猜测开始日期';
$string['classdoesnotexist'] = '类型 {$a} 不存在';
$string['clearmodelpredictions'] = '您确定要清除所有预测 "{$a}" 吗？';
$string['clearpredictions'] = '清除预测';
$string['clienablemodel'] = '您可以通过它的ID选择一个分析间隔来启用这个模型。请注意，您还可以在以后使用web接口(\'none\'退出)启用它。';
$string['clievaluationandpredictions'] = '一个预定的任务在启用的模型中迭代，并获得预测。通过web界面进行模型评估是禁用的。您可以通过禁用<a href="{$a}">\'onlycli\'</a> 分析设置来允许这些程序通过web界面来手动执行。';
$string['clievaluationandpredictionsnoadmin'] = '一个预定的任务在启用的模型中迭代，并得到预测。通过web界面进行的模型评估是禁用的。它可能由站点管理员启用。';
$string['component'] = '组件';
$string['componentcore'] = '核心';
$string['componentselect'] = '选择组件 \'{$a}\' 提供的所有模型';
$string['componentselectnone'] = '取消全选';
$string['contexts'] = '场景';
$string['contexts_help'] = '该模型将被限制在这组场景中。如果没有选择场景，则不应用场景限制。';
$string['createmodel'] = '建立模型';
$string['currenttimesplitting'] = '当前分析间隔';
$string['delete'] = '删除';
$string['deletemodelconfirmation'] = '您确定要删除 "{$a}" 吗？这些更改无法恢复。';
$string['disabled'] = '禁用';
$string['editmodel'] = '编辑 "{$a}" 模型';
$string['edittrainedwarning'] = '这个模型已经被训练过了。注意，改变其指标或分析间隔将会删除之前的预测，并开始产生新的预测。';
$string['enabled'] = '启用';
$string['errorcantenablenotimesplitting'] = '在启用模型之前，您需要选择一个分析间隔';
$string['errornoenabledandtrainedmodels'] = '没有已启用且已训练的模型可供预测。';
$string['errornoenabledmodels'] = '没有已启用的模型可训练';
$string['errornoexport'] = '只能导出已训练的模型';
$string['errornostaticevaluated'] = '基于假设的模型无法评估。根据它们的定义，它们始终是100％正确的。';
$string['errornostaticlog'] = '由于没有效能日志，因此无法评估基于假设的模型。';
$string['erroronlycli'] = '仅允许通过命令行执行';
$string['errortrainingdataexport'] = '模型训练数据无法导出';
$string['evaluate'] = '评估';
$string['evaluatemodel'] = '评估模型';
$string['evaluationinbatches'] = '计算网站内容并分批存储。评估过程可以随时停止。下次运行时，它将从停止点开始继续运行。';
$string['evaluationmode'] = '评估模型';
$string['evaluationmode_help'] = '"有两组评估模型：

* 训练后的模型 - 网站数据用作测试数据，以评估训练后模型的准确性。
* 组态 - 为了训练和测试模型配置的准确性，网站数据分为训练和测试资料。

当已将训练模型汇入到网站点中并且尚未使用网站数据对其进行训练时，训练模型才可使用。';
$string['evaluationmodecolconfiguration'] = '配置';
$string['evaluationmodecoltrainedmodel'] = '已训练的模型';
$string['evaluationmodeconfiguration'] = '评估模型配置';
$string['evaluationmodeinfo'] = '该模型已导入网站。您可以评估模型的效能，也可以使用网站数据评估模型配置的效能。';
$string['evaluationmodetrainedmodel'] = '评估已训练的模型';
$string['executescheduledanalysis'] = '执行计划的分析';
$string['export'] = '导出';
$string['exportincludeweights'] = '包含已训练模型的权重';
$string['exportmodel'] = '导出配置';
$string['exporttrainingdata'] = '导出训练数据';
$string['extrainfo'] = '信息';
$string['generalerror'] = '评估错误。状态代码 {$a}';
$string['getpredictions'] = '取得预测';
$string['goodmodel'] = '这是用于获取预测的良好模型。启用它以开始获取预测。';
$string['ignoreversionmismatches'] = '忽略版本不匹配';
$string['ignoreversionmismatchescheckbox'] = '忽略此网站版本和原始网站版本之间的差异。';
$string['importedsuccessfully'] = '该模型已成功导入。';
$string['importmodel'] = '导入模型';
$string['indicators'] = '指标';
$string['indicators_help'] = '这些指标是您认为能够准确预测目标的东西。';
$string['indicatorsnum'] = '指标数量：{$a}';
$string['info'] = '信息';
$string['insights'] = '洞察';
$string['insightsreport'] = '洞察报表';
$string['invalidanalysables'] = '无效的网站元素';
$string['invalidanalysablesinfo'] = '本页列出了此预测模型无法使用的可分析元素。列出的元素既不能用于训练预测模型，也不能用于对其进行预测。';
$string['invalidanalysablestable'] = '无效的网站可分析元素列表';
$string['invalidcurrenttimesplitting'] = '当前的分析间隔对于该模型的目标是无效的。请选择一个不同的间隔。';
$string['invalidindicatorsremoved'] = '增加了一个新模型。不与选定目标一起工作的指标已被自动删除。';
$string['invalidprediction'] = '对取得预测无效';
$string['invalidtimesplitting'] = '选定的分析间隔对于选定的目标无效。';
$string['invalidtimesplittinginmodels'] = '某些模型使用的分析间隔是无效的。请为以下模型选择不同的间隔:{$a}';
$string['invalidtraining'] = '无效的训练模型';
$string['loginfo'] = '‎记录额外信息‎';
$string['missingmoodleversion'] = '导入的文件未定义版本号';
$string['modelid'] = '模型 ID';
$string['modelinvalidanalysables'] = '模型 "{$a}" 的无效可分析元素';
$string['modelname'] = '模型名称';
$string['modelresults'] = '结果 {$a}';
$string['modeltimesplitting'] = '分析间隔';
$string['newmodel'] = '新模型';
$string['nextpage'] = '下一页';
$string['noactionsfound'] = '用户没有对生成的洞察执行任何操作。';
$string['nodatatoevaluate'] = '没有数据可评估模型';
$string['nodatatopredict'] = '没有新的元素可以预测。';
$string['nodatatotrain'] = '没有新的数据可以用于训练。';
$string['noinvalidanalysables'] = '此网站不包含任何无效的可分析元素。';
$string['notdefined'] = '尚未定义';
$string['pluginname'] = '分析模型';
$string['predictionprocessfinished'] = '预测过程已完成';
$string['predictionresults'] = '预测结果';
$string['predictmodels'] = '预测模型';
$string['predictorresultsin'] = '预测器在目录 {$a} 中记录的信息';
$string['previouspage'] = '上一页';
$string['privacy:metadata'] = '分析模型插件不储存任何个人数据。';
$string['restoredefault'] = '还原默认模型';
$string['restoredefaultempty'] = '请选择要还原的模型。';
$string['restoredefaultinfo'] = '这些默认模型在安装后丢失或更改。您可以恢复选定的默认模型。';
$string['restoredefaultnone'] = '系统核心和已安装插件所提供的默认模型均已建立。找不到新模型，没有什么可还原的。';
$string['restoredefaultsome'] = '成功重建了 {$ a-> count} 个新模型。';
$string['restoredefaultsubmit'] = '还原选定的';
$string['sameenddate'] = '当前结束日期良好';
$string['samestartdate'] = '当前开始日期良好';
$string['scheduledanalysisresults'] = '结果使用{$a->name}分析间隔';
$string['scheduledanalysisresultscli'] = '结果使用{$a->name} (id: {$a->id})分析间隔';
$string['selecttimesplittingforevaluation'] = '‎选择要用于评估模型配置的分析间隔。';
$string['target'] = '目标';
$string['target_help'] = '‎目标是模型将预测的内容。 ‎';
$string['timesplittingnotdefined'] = '‎未定义分析间隔。‎';
$string['timesplittingnotdefined_help'] = '‎在启用模型之前，您需要选择分析间隔。 ‎';
$string['trainandpredictmodel'] = '训练模型和计算预测';
$string['trainingprocessfinished'] = '训练过程完成';
$string['trainingresults'] = '训练结果';
$string['trainmodels'] = '训练模型';
$string['versionnotsame'] = '导入的文件版本 ({$a->importedversion}) 与目前版本 ({$a->version})  不同';
$string['viewlog'] = '评估日志';
$string['weeksenddateautomaticallyset'] = '依据开始日期和区段数自动设置结束日期';
$string['weeksenddatedefault'] = '结束日期由课程开始日期自动计算得出。';
