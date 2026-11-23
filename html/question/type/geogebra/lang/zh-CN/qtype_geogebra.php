<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = '为变量添加限制(条件).';
$string['addmorevarblanks'] = '{no} 更多变量空白';
$string['answerinvalid'] = '响应中的回答字符串无效, 这不应该发生.';
$string['answermissing'] = '响应中的答案丢失, 可能 JavaScript 在浏览器中没有打开或者出现了未知错误';
$string['answervar'] = '自动评分变量';
$string['answervar_help'] = '对自动评分: 如果学生解决了问题(部分地), 那么 GeoGebra 中的布尔运算对象名称为真. 合计所有布尔变量的所有分数. 如果任何组合都超过了 100%, 那么问题就是正确的, 但是至少应该有一个组合的总分恰恰达到 100%. 请为手动评分留下空白.';
$string['applet_advanced_settings'] = '高级设置...';
$string['constraints'] = '限制(条件)';
$string['constraints_help'] = '如同不能在滑动条选项中作标识的 a < b 的变量, 对它们有限制吗? 以逗号分隔. 支持的关系有: <, <=, >, >=. 如需要等式, 你就不得不在创建 GeoGebra 课件时使用同一变量. 运用变量作为滑动条的最小值/最大值的动态区间是得不到支持的.';
$string['constraintswrongortoohard'] = '{$a->inequalities} 是错误的或难以满足的, 在 {$a->time} 秒内我们(强力)尝试了 {$a->tries} 次. 也许我们将来会用更好的方法...';
$string['dragndrop'] = '在 GeoGebra 小程序部分拖放 GeoGebra 文件';
$string['enable_label_drags'] = '启用标签拖动';
$string['enable_right_click'] = '启用右击和键盘编辑';
$string['enable_shift_drag_zoom'] = '启用上档键-拖动及缩放';
$string['feedback'] = '变量为真时反馈';
$string['feedback_help'] = '反馈自动地从 GeoGebra 文件中的变量标题中采纳.';
$string['geogebraapplet'] = 'GeoGebra 小程序';
$string['getvars'] = '从小程序中取得能被随机化的变量';
$string['ggbfilemissing'] = '响应中的 Base64 编码字符串丢失, 可能是浏览器中的 JavaScript 没有打开或者出现了未知的错误';
$string['ggbturl'] = 'GeoGebra 课件网址或者ID';
$string['ggbturl_help'] = '你或者可以使用 GeoGebra 中的分享按钮复制粘贴链接, 或者使用 GeoGebra 库. 小程序和参数保存在数据库中, 除非有要求, 小程序将会从 GeoGebra 中重新载入. 只需提供 ID 或小程序的共享密钥也能得到支持.';
$string['ggbxmlmissing'] = '响应中的 XML 字符串丢失, 可能是浏览器中的 JavaScript 没有打开或者出现了未知错误';
$string['invalidinequality'] = '{$a} 无效';
$string['isexercise'] = '使用 GeoGebra 练习检查问题';
$string['isexercise_help'] = '该小程序含有用户定义的可用于自动检查练习的工具.\n注意: 下面所有答案在此案例中不适用!';
$string['israndomized'] = '存在应当随机化的变量吗?';
$string['loadapplet'] = '(重新)载入并显示小程序';
$string['loadapplet_help'] = '从 GeoGebra(重新)载入小程序并将 GeoGebra 中的新版本保存进数据库.';
$string['mineqmax'] = '对于随机化的最小值和最大值为变量 {$a} 指定得不正确, 你或者还没有指定滑动条的最小值和最大值或者该元素根本就不是滑动条. 你可能不得不在 GeoGebra 文件中纠正它.';
$string['minplusstepgtmax'] = '变量 {$a} 的最小值加上增量大于最大值, 你可能不得不在 GeoGebra 文件中纠正它.';
$string['noappletloaded'] = '无小程序载入! 检查一下网址是否正确, 并确定选择一个链接或者(重新)载入小程序后是否能看见它';
$string['nofractionsumeq1'] = '至少成绩的一个组合总和必须达到 100%';
$string['pluginname_help'] = '学生能用 GeoGebra 解决的问题';
$string['pluginnameadding'] = '添加 GeoGebra 问题';
$string['pluginnameediting'] = '编辑 GeoGebra 问题';
$string['pluginnamesummary'] = '测验时运用 GeoGebra 显示问题并验证答案的计算问题版本.';
$string['randomizedbutnovars'] = '你已经选择了应该随机化的问题, 但你没有指定任何可随机化的有效变量.';
$string['randomizedvar'] = '随机变量';
$string['randomizedvar_help'] = '随机变量(逗号隔开). 使用 GeoGebra 中的滑动条选项, 标识最小值、最大值和增量. 这些变量也可以应用于问题文本中, 并以大括号将它们括起来, 例如: {a}';
$string['show_algebra_input'] = '显示输入栏';
$string['show_menu_bar'] = '显示菜单';
$string['show_reset_icon'] = '显示重置作图图标';
$string['show_tool_bar'] = '显示工具栏';
$string['stepzero'] = '变量 {$a} 的增量为0; 你或者没有指定滑动条的增量, 或者该元素根本就不是一个滑动条. 你可能不得不在 GeoGebra 文件中纠正它.';
$string['useafile'] = '...或者使用 ggb 文件';
$string['valuecheckedfor'] = 'GeoGebra 中用于检查正确性的布尔对象';
$string['variablenamewrong'] = '在 GeoGebra 文件中无法找到以此命名的变量.';
$string['variableno'] = '变量 {$a}';
$string['variables'] = '变量';
$string['willbereadfromfile'] = '将从 GeoGebra 读取...(见帮助按钮)';
