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
 * Strings for component 'tool_customlang', language 'zh_cn', version '4.4'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = '保存字符串到语言包';
$string['checkout'] = '打开并编辑语言包';
$string['checkoutdone'] = '已加载语言包';
$string['checkoutinprogress'] = '正加载语言包';
$string['cliexportfileexists'] = '{$a->lang}的文件已存在，正在跳过。如果要覆盖，请添加--override=true选项。';
$string['cliexportfilenotfoundforcomponent'] = '没有找到可以导出的文件。正在跳过此语言的导出。';
$string['cliexportheading'] = '开始导出lang文件。';
$string['cliexportnofilefoundforlang'] = '找不到要导出的文件。正在跳过此语言的导出。';
$string['cliexportstartexport'] = '导出语言{$a}';
$string['cliexportzipdone'] = '已创建Zip:{$a}';
$string['cliexportzipfail'] = '无法创建zip{$a}';
$string['clifiles'] = '要导入到{$a}中的文件';
$string['cliimporting'] = '导入文件字符串（模式{$a}）。';
$string['climissingfiles'] = '缺少有效文件';
$string['climissinglang'] = '缺失的语言';
$string['climissingmode'] = '缺少或无效的模式（有效的是全部的，新的或更新的）。';
$string['climissingsource'] = '缺少文件或文件夹';
$string['clinolog'] = '没有可以导入到{$a}的内容';
$string['confirmcheckin'] = '您将要保存对本地语言包的修改。这会将自定义字符串从翻译器导出到您的网站数据目录中，您的网站将开始使用修改后的字符串。按“继续”继续保存。';
$string['customlang:edit'] = '编辑本地翻译';
$string['customlang:export'] = '导出本地翻译';
$string['customlang:view'] = '查看本地翻译';
$string['editlangpack'] = '编辑语言包';
$string['export'] = '导出自定义字符串';
$string['exportfilter'] = '选择要导出的组件';
$string['filter'] = '过滤字符串';
$string['filtercomponent'] = '显示这些组件的字符串';
$string['filtercustomized'] = '只显示自定义的';
$string['filtermodified'] = '仅在此会话中修改';
$string['filteronlyhelps'] = '只显示帮助';
$string['filtershowstrings'] = '显示字符串';
$string['filterstringid'] = '字符串标识符';
$string['filtersubstring'] = '显示的字符串包含';
$string['headingcomponent'] = '组件';
$string['headinglocal'] = '本地自定义';
$string['headingstandard'] = '标准文本';
$string['headingstringid'] = '字符串';
$string['import'] = '导入自定义字符串';
$string['import_all'] = '创建或更新该组件的所有字符串';
$string['import_mode'] = '导入模式';
$string['import_new'] = '只创建没有本地自定义的字符串';
$string['import_update'] = '只更新本地自定义的字符串';
$string['importfile'] = '导入文件';
$string['langpack'] = '语言组件';
$string['markinguptodate'] = '标记此自定义为最新';
$string['markinguptodate_help'] = '如果自从您的网站上自定义字符串以来，英文原文或主翻译已修改，则自定义翻译可能会过时。查看自定义翻译。如果您发现它是最新的，请单击复选框。否则对其进行编辑。';
$string['markuptodate'] = '标记为最新';
$string['modifiedno'] = '没有需要保存的字符串';
$string['modifiednum'] = '有 {$a} 条字符串修改过。您要把它们保存到您的本地语言包吗？';
$string['nolocallang'] = '找不到本地字符串。';
$string['nostringsfound'] = '未找到字符串，请修改过滤器设置';
$string['notice_ignorenew'] = '忽略字符串{$a->component}/{$a->stringid}，因为它不是自定义的。';
$string['notice_ignoreupdate'] = '忽略字符串{$a->component}/{$a->stringid}，因为它已定义。';
$string['notice_inexitentstring'] = '找不到字符串{$a->component}/{$a->stringid}。';
$string['notice_missingcomponent'] = '缺少组件{$a->component}。';
$string['notice_success'] = '字符串{$a->component}/{$a->stringid}已成功更新。';
$string['placeholder'] = '占位符';
$string['placeholder_help'] = '占位符是字符串中的一些特定符号，比如“{$a}”或“{$a->something}”。当字符串最终被输出时，它们会被替换为其它值。

一定要保持它们本来的样子。不要翻译它们。';
$string['placeholderwarning'] = '有占位符的字符串';
$string['pluginname'] = '定制语言';
$string['privacy:metadata'] = '语言自定义插件不存储任何个人数据。';
$string['savecheckin'] = '将更改保存到语言包';
$string['savecontinue'] = '生效变化并继续编辑';
