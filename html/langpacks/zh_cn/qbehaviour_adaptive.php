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
 * Strings for component 'qbehaviour_adaptive', language 'zh_cn', version '4.1'.
 *
 * @package     qbehaviour_adaptive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['disregardedwithoutpenalty'] = '此提交无效，已被忽略，但不会罚分。';
$string['gradingdetails'] = '此次提交得分：{$a->raw}/{$a->max}。';
$string['gradingdetailsadjustment'] = '基于之前得分计算，此次得分<strong>{$a->cur}/{$a->max}</strong>。';
$string['gradingdetailspenalty'] = '此次提交罚分{$a}分。';
$string['gradingdetailspenaltytotal'] = '到目前为止总罚分：{$a}。';
$string['gradingdetailswithadjustment'] = '此次提交的得分为：{$a->raw}/{$a->max}。综合以前的尝试，应得分为 <strong>{$a->cur}/{$a->max}</strong>。';
$string['gradingdetailswithadjustmentpenalty'] = '此次提交的得分为：{$a->raw}/{$a->max}。综合以前的尝试，应得分为 <strong>{$a->cur}/{$a->max}</strong>。多次尝试即使答对也会有罚分系数，此次提交将扣除{$a->penalty}分。';
$string['gradingdetailswithadjustmenttotalpenalty'] = '此次提交的得分为：{$a->raw}/{$a->max}。综合以前的尝试，应得分为 <strong>{$a->cur}/{$a->max}</strong>。多次尝试即使答对也会有罚分系数，此次提交将扣除{$a->penalty}分，截至目前总共扣除{$a->totalpenalty}分。';
$string['gradingdetailswithpenalty'] = '此次提交的得分为：{$a->raw}/{$a->max}。多次尝试即使答对也会有罚分系数，此次提交将扣除{$a->penalty}分。';
$string['gradingdetailswithtotalpenalty'] = '此次提交的得分为：{$a->raw}/{$a->max}。多次尝试即使答对也会有罚分系数，此次提交将扣除{$a->penalty}分，截至目前总共扣除{$a->totalpenalty}分。';
$string['notcomplete'] = '未完成';
$string['pluginname'] = '自适应模式';
$string['privacy:metadata'] = '自适应模式问题行为插件不存储任何个人数据。';
