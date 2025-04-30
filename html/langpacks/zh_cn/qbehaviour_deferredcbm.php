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
 * Strings for component 'qbehaviour_deferredcbm', language 'zh_cn', version '4.4'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = '正确度';
$string['accuracyandbonus'] = '正确度+奖励分';
$string['assumingcertainty'] = '您没有选择确定程度。假定选择：{$a}。';
$string['averagecbmmark'] = '平均CBM信心加权分';
$string['basemark'] = '基础分{$a}';
$string['breakdownbycertainty'] = '依据确定程度分别呈现';
$string['cbmbonus'] = 'CBM信心加权分';
$string['cbmgradeexplanation'] = '就信心加权计分法，以上分数是相对于在C=1时，全对的最高分数。';
$string['cbmgrades'] = 'CBM 成绩';
$string['cbmgrades_help'] = '在信心加权计分法（Certainty Based Marking ，CBM）中，每个答对的试题配上C=1（低度肯定），则给与100%的分数。如果试题答对又配上C=3(高度肯定），则分数可能高达300%。
错误的想法（答错却很自信）会比（答错却知道自己不确定）得到更低的分数，因此可能导致负的总分。

**正确度**是指只看答对百分比而忽视对于答案的信心，然后再依据每一题的配分进行加权。**正确度**+**信心加权分**是比**正确度**更好的测量知识的方法。但是错误的想法会导致负的加权分，这会提醒师生仔细检查错在什么地方。';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['cbmmark'] = 'CBM 信心加权分 {$a}';
$string['certainty'] = '确定';
$string['certainty-1'] = '不知道';
$string['certainty1'] = 'C=1 （不确定： <67%）';
$string['certainty2'] = 'C=2 （中： >67%）';
$string['certainty3'] = 'C=3（非常确定：>80%）';
$string['certainty_help'] = '基于确定性的评分需要你来回答对于你的答案有多确定。可选的等级为：
确定性等级| C=1（不确定）| C=2（中等）| C=3（非常确定）
 -------------- | ------------ | --------- | ----------------
标记是否正确| 1         | 2           | 3
标记是否错误| 0         |-2           |-6
正确的概率|<67%      | 67-80% |>80%
通过承认不确定性获得最佳分数。例如，如果您认为错误的概率超过1/3，则应输入C=1，避免出现负分的风险。';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certaintyshort-1'] = '不知道';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = '不知道';
$string['foransweredquestions'] = '仅{$a}回答问题的结果';
$string['forentirequiz'] = '就整个测验({$a} 试题)的結果';
$string['howcertainareyou'] = '确定度{$a->help}: {$a->choices}';
$string['judgementok'] = '确定';
$string['judgementsummary'] = '回应:{$a->responses}。 正确度:  {$a->fraction}。 (最佳范围为 {$a->idealrangelow} 到 {$a->idealrangehigh})。 当你使用这一确定度时，你是  {$a->judgement}。';
$string['noquestions'] = '没有回应';
$string['overconfident'] = '过分自信';
$string['pluginname'] = '延迟反馈（支持CBM）';
$string['privacy:metadata'] = 'CBM问题行为插件的延迟反馈不存储任何个人数据。';
$string['slightlyoverconfident'] = '有些自信的';
$string['slightlyunderconfident'] = '有点不自信';
$string['underconfident'] = '不自信';
$string['weightx'] = '权重 {$a}';
