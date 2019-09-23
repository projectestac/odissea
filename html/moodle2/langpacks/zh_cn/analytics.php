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
 * Strings for component 'analytics', language 'zh_cn', branch 'MOODLE_36_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = '可分析{$a->analysableid}但未使用:{$a->errors}';
$string['analysablenotvalidfortarget'] = '可分析性{$a->analysableid}对{$a->result}目标是无效的';
$string['analysisinprogress'] = '仍在上一次任务的分析中';
$string['analytics'] = '分析';
$string['analyticslogstore'] = '用于分析的日志存储';
$string['analyticslogstore_help'] = '分析API将使用日志存储来读取用户的活动';
$string['analyticssettings'] = '分析设置';
$string['coursetoolong'] = '课程过长';
$string['defaultpredictionsprocessor'] = '默认预测处理器';
$string['defaultpredictoroption'] = '默认处理器({$a})';
$string['disabledmodel'] = '禁用的模型';
$string['enabledtimesplittings'] = '时间分割方法';
$string['erroralreadypredict'] = '文件 {$a} 已经被用于生成预测了。';
$string['errorcannotreaddataset'] = '无法读取数据集文件{$a}';
$string['errorcannotwritedataset'] = '无法写入数据集文件{$a}';
$string['errorendbeforestart'] = '课程结束日期({$a})早于开始日期';
$string['errorinvalidindicator'] = '非法 {$a} 标识';
$string['errorinvalidtimesplitting'] = '无效的时间分割;请确保您添加了类名完全合格的类。';
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
$string['insightinfomessage'] = '系统为你提供了一些洞察力： {$a}';
$string['insightinfomessagehtml'] = '系统为你提供了一些洞察力：<a href="{$a}">{$a}</a>。';
$string['insightmessagesubject'] = '对 "{$a->contextname}": {$a->insightname}的新洞察';
$string['invalidanalysablefortimesplitting'] = '它不能用{$a}时间分割方法来分析。';
$string['invalidtimesplitting'] = 'ID 为{$a} 的模型在进行训练之前需要一个时间分割方法。';
$string['modeloutputdir'] = '模型输出目录';
$string['modeloutputdirinfo'] = '预测处理器存储所有评估信息的目录。对调试和研究很有用。';
$string['modeltimelimit'] = '每个模型的分析时间限制';
$string['modeltimelimitinfo'] = '这个设置限制了每个模型分析站点内容的时间。';
$string['nocourses'] = '无可分析课程';
$string['nodata'] = '无可分析数据';
$string['noevaluationbasedassumptions'] = '基于假设的模型不能被评估。';
$string['noinsights'] = '没有洞察力报表';
$string['noinsightsmodel'] = '这个模型没有产生洞察力';
$string['nonewdata'] = '无新的可用数据';
$string['nonewranges'] = '暂无新的预测';
$string['nonewtimeranges'] = '无新的时间范围;无可预测。';
$string['nopredictionsyet'] = '还没有可用的预测';
$string['noranges'] = '暂无预测';
$string['notrainingbasedassumptions'] = '基于假设的模型不需要训练';
$string['notuseful'] = '无作用';
$string['novaliddata'] = '无有效可用数据';
$string['novalidsamples'] = '有有效且可用的样例';
$string['onlycli'] = '分析过程仅通过命令行执行';
$string['onlycliinfo'] = '分析过程，就像评估模型，训练机器学习算法或获得预测可能需要一段时间，它们将作为cron任务运行，它们可以通过命令行来强制执行。如果您希望站点管理员能够通过web界面手动运行这些程序，请禁用此设置';
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
$string['viewprediction'] = '查看预测细节';
