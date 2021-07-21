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
 * Strings for component 'checkmark', language 'zh_cn', version '3.11'.
 *
 * @package     checkmark
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attendancegradelink'] = '将出勤情况纳入作业成绩自动计算';
$string['attendancegradelink_help'] = '激活此设置, 以便将保存的出勤数与检查点自动计算成绩关联。只有当学员出勤情况被标记后，检查点模块才会累加成绩。';
$string['attendancegradelink_hint'] = '注意: 自动计算的成绩已链接出勤。';
$string['autograde_confirm'] = '您即将为<strong>{$a}</strong>更新成绩及反馈。之前的成绩及反馈将被覆盖。';
$string['autograde_str_help'] = '自动评分根据每样板分数及勾选的样板计算学员成绩。它对每个勾选的样板的分数进行累加作为学员成绩。 <ul><li>为选中的用户评分 - 仅为这些选中的用户评分。如果某用户未进行任何提交，会加入一条空提报。</li><li>为需要被评分的用户评分 - 为每一个比当前对应成绩更新的提报评分。</li><li>为所有提报评分 -  为所有当前提报评分(本实例中的）。同时不会添加空提报。</li></ul><br />成绩根据样板成绩及勾选的样板进行计算：<ul><li>标准成绩：每个样板的权重相同(各样板为整数分数)。成绩计算方法为，(所有勾选样板数之和) x (检查点分数/检查点数)</li><li>单个样板权重:  成绩为各勾选样板分数之和(根据实例设置）。</li></ul>';
$string['autograde_strchanged'] = '因进行了自动评分， <strong>{$a}</strong> 学员的成绩将发生改变。';
$string['autogradebuttonstitle'] = '为检查点 {$a} 计算作业成绩';
$string['checkbrokengradebookgrades'] = '检查损坏的成绩簿成绩';
$string['emptysubmission'] = '您尚未提交任何内容';
$string['notsubmittedyet'] = '还未提交';
$string['submitted'] = '已提交';
$string['submitted_entries'] = '已提交';
$string['viewsubmissions'] = '查看{$a}已提交的复选标记';
