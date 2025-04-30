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
 * Strings for component 'privacy', language 'zh_cn', version '4.4'.
 *
 * @package     privacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['broughtbymoodle'] = '此数据导出由 Moodle 提供。';
$string['exportfrom'] = '从 {$a} 导出';
$string['exporttime'] = '在 {$a} 导出';
$string['exportuser'] = '{$a} 的数据';
$string['navigation'] = '导航';
$string['privacy:metadata'] = '隐私子系统不存储其自身的任何数据，旨在充当组件与用于描述、导出和删除其数据的接口之间的通道。';
$string['privacy:subsystem:empty'] = '该子系统不存储任何数据。';
$string['trace:deletingapproved'] = '执行删除 {$a->total} 批准的上下文 ({$a->datetime})';
$string['trace:deletingapprovedusers'] = '在上下文 {$a->contextid} ({$a->datetime}) 的 {$a->total} 批准组件中执行用户删除。';
$string['trace:deletingcontext'] = '从 {$a->total} 组件中移除上下文 ({$a->datetime})';
$string['trace:deletinguser'] = '从 {$a->total} 组件中删除用户 ({$a->datetime})';
$string['trace:done'] = '完成';
$string['trace:exportcomplete'] = '导出完成';
$string['trace:exportingapproved'] = '为 {$a->total} 组件执行主要导出 ({$a->datetime})';
$string['trace:exportingrelated'] = '为 {$a->total} 组件执行相关导出 ({$a->datetime})';
$string['trace:fetchcomponents'] = '从 {$a->total} 组件中获取数据 ({$a->datetime})';
$string['trace:finalisingexport'] = '完成导出';
$string['trace:preprocessingcomponent'] = '预处理 {$a->component} ({$a->progress}/{$a->total}) ({$a->datetime})';
$string['trace:processingcomponent'] = '处理 {$a->component} ({$a->progress}/{$a->total}) ({$a->datetime})';
$string['viewdata'] = '单击导航中的链接以查看数据。';
