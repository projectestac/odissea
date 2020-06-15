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
 * Strings for component 'tool_analytics', language 'zh_cn', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = '精确度';
$string['allpredictions'] = '所有预测';
$string['analysingsitedata'] = '分析网站';
$string['analyticmodels'] = '分析模型';
$string['bettercli'] = '评估模型和生成预测可能涉及繁重的过程。建议从命令行运行这些操作。';
$string['cantguessenddate'] = '无法猜测结束日期';
$string['cantguessstartdate'] = '无法猜测开始日期';
$string['clearmodelpredictions'] = '您确定要清除所有预测 "{$a}" 吗？';
$string['clearpredictions'] = '清除预测';
$string['clienablemodel'] = '您可以通过它的ID选择一个时间分割方法来启用这个模型。注意，您也可以稍后使用web接口(“none”退出)来启用它。';
$string['clievaluationandpredictions'] = '一个预定的任务在启用的模型中迭代，并获得预测。通过web界面进行模型评估是禁用的。您可以通过禁用<a href="{$a}">\'onlycli\'</a> 分析设置来允许这些程序通过web界面来手动执行。';
$string['clievaluationandpredictionsnoadmin'] = '一个预定的任务在启用的模型中迭代，并得到预测。通过web界面进行的模型评估是禁用的。它可能由站点管理员启用。';
$string['disabled'] = '禁用';
$string['editmodel'] = '编辑 "{$a}" 模型';
$string['edittrainedwarning'] = '这个模型已经被训练过了。注意，改变其指标或时间分割方法将会删除之前的预测，并开始产生新的预测。';
$string['enabled'] = '启用';
$string['errorcantenablenotimesplitting'] = '在启用模型之前，您需要选择一个时间分割方法';
$string['errornoenabledandtrainedmodels'] = '没有已启用且已训练的模型可供预测。';
$string['errornoenabledmodels'] = '没有已启用的模型可训练';
$string['errornoexport'] = '只能导出已训练的模型';
$string['errornostaticedit'] = '基于假设的模型不能被编辑。';
$string['errornostaticevaluated'] = '基于假设的模型无法评估。根据它们的定义，它们始终是100％正确的。';
$string['errornostaticlog'] = '由于没有效能日志，因此无法评估基于假设的模型。';
$string['erroronlycli'] = '仅允许通过命令行执行';
$string['errortrainingdataexport'] = '模型训练数据无法导出';
$string['evaluate'] = '评估';
$string['evaluatemodel'] = '评估模型';
$string['evaluationinbatches'] = '计算网站内容并分批存储。评估过程可以随时停止。下次运行时，它将从停止点开始继续运行。';
$string['export'] = '导出';
$string['exporttrainingdata'] = '导出训练数据';
$string['extrainfo'] = '信息';
$string['generalerror'] = '评估错误。状态代码 {$a}';
$string['getpredictions'] = '取得预测';
$string['goodmodel'] = '这是用于获取预测的良好模型。启用它以开始获取预测。';
$string['indicators'] = '指标';
$string['info'] = '信息';
$string['insights'] = '洞察';
$string['invalidanalysables'] = '无效的网站元素';
$string['invalidanalysablesinfo'] = '本页列出了此预测模型无法使用的可分析元素。列出的元素既不能用于训练预测模型，也不能用于对其进行预测。';
$string['invalidanalysablestable'] = '无效的网站可分析元素列表';
$string['invalidprediction'] = '对取得预测无效';
$string['invalidtraining'] = '无效的训练模型';
$string['loginfo'] = '‎记录额外信息‎';
$string['modelid'] = '模型 ID';
$string['modelinvalidanalysables'] = '模型 "{$a}" 的无效可分析元素';
$string['modelresults'] = '结果 {$a}';
$string['modeltimesplitting'] = '时间分割';
$string['nextpage'] = '下一页';
$string['nodatatoevaluate'] = '没有数据可评估模型';
$string['noinvalidanalysables'] = '此网站不包含任何无效的可分析元素。';
$string['notdefined'] = '尚未定义';
$string['pluginname'] = '分析模型';
$string['predictionprocessfinished'] = '预测过程已完成';
$string['predictionresults'] = '预测结果';
$string['predictmodels'] = '预测模型';
$string['predictorresultsin'] = '预测器在目录 {$a} 中记录的信息';
$string['previouspage'] = '上一页';
$string['privacy:metadata'] = '分析模型插件不储存任何个人数据。';
$string['sameenddate'] = '当前结束日期良好';
$string['samestartdate'] = '当前开始日期良好';
$string['target'] = '目标';
$string['trainandpredictmodel'] = '训练模型和计算预测';
$string['trainingprocessfinished'] = '训练过程完成';
$string['trainingresults'] = '训练结果';
$string['trainmodels'] = '训练模型';
$string['viewlog'] = '日志';
$string['weeksenddateautomaticallyset'] = '依据开始日期和区段数自动设置结束日期';
$string['weeksenddatedefault'] = '结束日期由课程开始日期自动计算得出。';
