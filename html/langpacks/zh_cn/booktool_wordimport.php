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
 * Strings for component 'booktool_wordimport', language 'zh_cn', version '3.11'.
 *
 * @package     booktool_wordimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = '不能打开临时文件 <b>{$a}</b>';
$string['exportbook'] = '导出图书到 Microsoft Word 文件';
$string['exportchapter'] = '导出这个章节到 Microsoft Word 文件';
$string['heading1stylelevel'] = '标题元素级别为“标题1”样式';
$string['heading1stylelevel_desc'] = 'Microsoft Word 的“标题1”样式被映射为HTML标题元素级别';
$string['importchapters'] = '从 Microsoft Word 文件导入';
$string['insertionpoint'] = '插入到当前章节之前';
$string['insertionpoint_help'] = '在当前章节之前插入内容，保留所有现有内容。';
$string['nochapters'] = '没有发现图书章节，所以不能导出到 Microsoft Word 文件。';
$string['pluginname'] = 'Microsoft Word 文件导入/导出';
$string['replacebook'] = '替换图书内容';
$string['replacebook_help'] = '在导入之前删除图书的当前内容';
$string['replacechapter'] = '替换当前章节';
$string['replacechapter_help'] = '用文件的第一章替换章节内容，但保留所有其他章节内容';
$string['settings'] = 'Microsoft Word 文件导入设置';
$string['splitonsubheadings'] = '基于子标题创建子章节';
$string['splitonsubheadings_help'] = '子章节将在“标题2”样式中创建';
$string['stylesheetunavailable'] = 'XSLT样式表<b>{$a}</b>不可用';
$string['transformationfailed'] = 'XSLT转换失败(<b>{$a}</b>)';
$string['wordfile'] = 'Microsoft Word 文件';
$string['wordfile_help'] = '上传从 Microsoft Word 或 LibreOffice 保存的<i>.docx</i> 文件';
$string['wordimport:export'] = '导出为 Microsoft Word 文件';
$string['wordimport:import'] = '从 Microsoft Word 文件导入';
$string['xsltunavailable'] = '您需要使用PHP安装的XSLT库来保存这个Word文件';
