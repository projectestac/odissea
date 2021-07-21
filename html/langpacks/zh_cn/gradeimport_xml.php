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
 * Strings for component 'gradeimport_xml', language 'zh_cn', version '3.11'.
 *
 * @package     gradeimport_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = '错误：XML 格式不正确';
$string['errduplicategradeidnumber'] = '错误：在该课程中有两个成绩项的 ID 号都是“{$a}”，这应该是不可能的。';
$string['errduplicateidnumber'] = '错误：ID号重复';
$string['errincorrectgradeidnumber'] = '错误：来自导入文件的 ID 号“{$a}”与任何成绩项都不匹配。';
$string['errincorrectidnumber'] = '错误：ID 号不正确';
$string['errincorrectuseridnumber'] = '错误：来自导入文件的 ID 号“{$a}”与任何用户都不匹配。';
$string['error'] = '出错';
$string['errorduringimport'] = '尝试导入时出错：{$a}';
$string['fileurl'] = '远程文件网址';
$string['fileurl_help'] = '远程文件网址字段用于从远程服务器(例如学生信息系统)获取数据。';
$string['importxml'] = 'XML导入';
$string['importxml_help'] = '成绩可以通过一个包含用户 ID号 和活动 ID 号的XML文件导入。为了获得正确的格式，首先导出一些成绩到 XML 文件，然后查看该文件。';
$string['pluginname'] = 'XML 文件';
$string['privacy:metadata'] = '从 XML 导入成绩插件不存储任何个人数据。';
$string['xml:publish'] = '发布从 XML 导入的成绩';
$string['xml:view'] = '从 XML 导入成绩';
