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
 * Strings for component 'qbehaviour_deferredcbm', language 'zh_cn', version '3.11'.
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
$string['breakdownbycertainty'] = '依据确定程度分别呈现';
$string['cbmbonus'] = 'CBM信心加权分';
$string['cbmgradeexplanation'] = '就信心加权计分法，以上分数是相对于在C=1时，全对的最高分数。';
$string['cbmgrades_help'] = '在信心加权计分法（Certainty Based Marking ，CBM）中，每个答对的试题配上C=1（低度肯定），则给与100%的分数。如果试题答对又配上C=3(高度肯定），则分数可能高达300%。
错误的想法（答错却很自信）会比（答错却知道自己不确定）得到更低的分数，因此可能导致负的总分。

**正确度**是指只看答对百分比而忽视对于答案的信心，然后再依据每一题的配分进行加权。**正确度**+**信心加权分**是比**正确度**更好的测量知识的方法。但是错误的想法会导致负的加权分，这会提醒师生仔细检查错在什么地方。';
$string['cbmmark'] = 'CBM 信心加权分 {$a}';
$string['certainty'] = '确定';
$string['certainty1'] = '不太确定（低于67%）';
$string['certainty2'] = '还算确定（超过67%）';
$string['certainty3'] = '非常确定（高于80%）';
$string['forentirequiz'] = '就整个测验({$a} 试题)的結果';
$string['howcertainareyou'] = '确定度{$a->help}: {$a->choices}';
$string['judgementok'] = '确定';
$string['judgementsummary'] = '回应:{$a->responses}。 正确度:  {$a->fraction}。 (最佳范围为 {$a->idealrangelow} 到 {$a->idealrangehigh})。 当你使用这一确定度时，你是  {$a->judgement}。';
$string['noquestions'] = '没有回应';
$string['pluginname'] = '延迟反馈（支持CBM）';
$string['slightlyoverconfident'] = '有些自信的';
$string['weightx'] = '权重 {$a}';
