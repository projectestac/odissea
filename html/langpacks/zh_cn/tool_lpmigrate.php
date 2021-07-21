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
 * Strings for component 'tool_lpmigrate', language 'zh_cn', version '3.11'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses_help'] = '选择要迁移到新框架的课程。如果没有指定课程，那么所有课程都将被迁移。';
$string['continuetoframeworks'] = '继续框架';
$string['coursecompetencymigrations'] = '课程能力迁移';
$string['coursemodulecompetencymigrations'] = '课程活动和资源能力迁移';
$string['coursestartdate'] = '课程开始日期';
$string['coursestartdate_help'] = '如果启用，开始日期在指定日期之前的课程将不会被迁移。';
$string['disallowedcourses_help'] = '选择不迁移到新框架的课程。';
$string['errorcannotmigratetosameframework'] = '不能在同一框架中迁移';
$string['errorcouldnotmapcompetenciesinframework'] = '不能在这个框架映射任何能力。';
$string['errors'] = '错误';
$string['errorwhilemigratingcoursecompetencywithexception'] = '迁移课程能力时出现错误： {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = '迁移课程活动或资源能力时出现错误：{$a}';
$string['excludethese'] = '这些除外';
$string['explanation'] = '这个工具可以用来更新一个能力框架到新版本。它在使用旧框架的课程和活动中搜索能力，并精确地更新指向新框架的链接。

不建议直接编辑旧的能力集合，因为这将改变已经在用户学习计划中获得的所有能力。

通常，您将导入框架的新版本，隐藏旧框架，然后使用该工具将新课程迁移到新框架中。';
$string['findingcoursecompetencies'] = '查找课程能力';
$string['findingmodulecompetencies'] = '查找活动和资源能力';
$string['frameworks'] = '框架';
$string['limittothese'] = '只限于这些';
$string['lpmigrate:frameworksmigrate'] = '迁移框架';
$string['migrateframeworks'] = '迁移框架';
$string['migratefrom'] = '迁移自';
$string['migratefrom_help'] = '选择当前正在使用的旧框架。';
$string['migratemore'] = '迁移更多';
$string['migrateto'] = '迁移到';
$string['migrateto_help'] = '选择框架的新版本。仅仅可能选择一个没有隐藏的框架。';
$string['migratingcourses'] = '迁移课程';
$string['performmigration'] = '执行迁移';
$string['pluginname'] = '能力迁移工具';
$string['results'] = '结果';
$string['startdatefrom'] = '开始日期';
$string['warningcouldnotremovecoursecompetency'] = '这个课程的能力不能被移除。';
$string['warningcouldnotremovemodulecompetency'] = '这个活动或资源的能力不能被移除。';
$string['warningdestinationcoursecompetencyalreadyexists'] = '目标课程能力已经存在。';
$string['warningdestinationmodulecompetencyalreadyexists'] = '目标活动或资源能力已经存在。';
$string['warnings'] = '警告';
