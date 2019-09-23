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

$string['analyticmodels'] = '分析模型';
$string['bettercli'] = '评估模型和产生预测可能涉及到大量的数据处理。建议从命令行运行这些操作。';
$string['clienablemodel'] = '您可以通过它的ID选择一个时间分割方法来启用这个模型。注意，您也可以稍后使用web接口(“none”退出)来启用它。';
$string['clievaluationandpredictions'] = '一个预定的任务在启用的模型中迭代，并获得预测。通过web界面进行模型评估是禁用的。您可以通过禁用<a href="{$a}">\'onlycli\'</a> 分析设置来允许这些程序通过web界面来手动执行。';
$string['clievaluationandpredictionsnoadmin'] = '一个预定的任务在启用的模型中迭代，并得到预测。通过web界面进行的模型评估是禁用的。它可能由站点管理员启用。';
$string['editmodel'] = '编辑 "{$a}" 模型';
$string['edittrainedwarning'] = '这个模型已经被训练过了。注意，改变其指标或时间分割方法将会删除之前的预测，并开始产生新的预测。';
$string['enabled'] = '启用';
$string['errorcantenablenotimesplitting'] = '在启用模型之前，您需要选择一个时间分割方法';
$string['errornoenabledandtrainedmodels'] = '目前还没有可用的并被训练过的模型可用来预测。';
$string['errornoenabledmodels'] = '没有可用的模型来进行训练。';
$string['errornoexport'] = '只有经过训练的模型才能输出';
$string['errornostaticedit'] = '基于假设的模型不能被编辑。';
$string['errornostaticevaluated'] = '基于假设的模型不能被评估。根据它们的定义，它们总是100%正确的。';
$string['errornostaticlog'] = '基于假设的模型不能被评估，因为没有执行日志。';
$string['indicators'] = '指标';
$string['insights'] = '洞察力';
$string['invalidanalysables'] = '对该模型无效的网站元素';
$string['invalidanalysablesinfo'] = '这个页面列出了这个站点可以分析的元素，这些元素不能被这个预测模型使用。所列的元素既不能用于训练预测模型，预测模型也不能从它们这里获得预测。';
$string['invalidprediction'] = '对获得预测无效';
$string['invalidtraining'] = '对训练模型无效';
$string['loginfo'] = '日志的额外信息';
$string['modelinvalidanalysables'] = '对"{$a}" 模型无效的可分析元素';
$string['modeltimesplitting'] = '时间分割';
$string['nextpage'] = '下一页';
$string['notdefined'] = '还没有定义';
$string['pluginname'] = '分析模型';
$string['predictorresultsin'] = '{$a}目录中的预测记录信息';
$string['previouspage'] = '上一页';
$string['target'] = '目标';
$string['trainmodels'] = '训练模型';
$string['viewlog'] = '日志';
