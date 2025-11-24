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
 * Strings for component 'checkmark', language 'zh_cn', version '4.5'.
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
$string['autograde_strchanged'] = '因进行了自动评分， <strong>{$a}</strong> 学员的成绩将发生改变。';
$string['autogradebuttonstitle'] = '为检查点 {$a} 计算作业成绩';
$string['emailteachers_help'] = '若启用，每当学生添加或更新一个勾选提交时，教师都会收到电子邮件通知。

仅能够评分特定勾选的教师才会收到通知。例如，若课程使用独立分组，被限制在特定分组的教师不会收到其他分组学生的通知。';
$string['emptysubmission'] = '您尚未提交任何内容';
$string['notsubmittedyet'] = '还未提交';
$string['submitted'] = '已提交';
$string['submitted_entries'] = '已提交';
$string['viewsubmissions'] = '查看{$a}已提交的复选标记';
