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
 * Strings for component 'atto_accessibilitychecker', language 'zh_cn', version '3.11'.
 *
 * @package     atto_accessibilitychecker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['emptytext'] = '空白文本';
$string['entiredocument'] = '整个文档';
$string['imagesmissingalt'] = '图片需要替换文字。要修正这个警告，请为您的图片添加 alt 属性。仅在图片只有装饰作用而不携带任何信息时可以使用空的 alt 属性。';
$string['needsmorecontrast'] = '文字前景色和背景色的对比度太低。要修正这个错误，请调整文字的前景色或者背景色以使阅读更容易。';
$string['needsmoreheadings'] = '有很多文字没有标题。标题让很多屏幕阅读器用户能够轻松浏览，也让页面对所有人都更有可用性。';
$string['nowarnings'] = '恭喜，没有发现可用性问题！';
$string['pluginname'] = '可用性检查器';
$string['privacy:metadata'] = 'atto_accessibilitychecker 插件不储存任何私人数据。';
$string['report'] = '可用性报告：';
$string['tablesmissingcaption'] = '表格需要说明文字。虽然不是每个表格都需要说明文字，但它通常都是有用的。';
$string['tablesmissingheaders'] = '表格需要使用行/列表头。';
$string['tableswithmergedcells'] = '表格不应包含合并的单元格。尽管这已经作为表格的标准标记存在多年，一些屏幕阅读器仍然不支持复杂的表格。如果可能请尝试 "扁平化" 表格并避免合并的单元格。';
