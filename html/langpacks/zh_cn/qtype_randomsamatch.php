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
 * Strings for component 'qtype_randomsamatch', language 'zh_cn', version '3.11'.
 *
 * @package     qtype_randomsamatch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insufficientoptions'] = '此问题没有足够的选项，因此它在本测验中不可用。请通知你的老师。';
$string['nosaincategory'] = '在选择的\'{$a->catname}\'类别中没有填空题。请选择另一个类别，或者在此类别一些试题。';
$string['notenoughsaincategory'] = '在您选择的类别“{$a->catname}”中只有{$a->nosaquestions}道填空题。请选择另一个类别，在此类别中再建几道题或者减少您需要的试题数量。';
$string['pluginname'] = '随机填空匹配题';
$string['pluginname_help'] = '从学生的角度来看，这看起来就像一个匹配题。不同的是，用于匹配的名称或陈述（问题）列表是从当前类别的简答题中随机抽取的。该类别中应该有足够的未使用的简答题，否则将显示错误信息。';
$string['pluginnameadding'] = '增加一个随机填空匹配题';
$string['pluginnameediting'] = '编辑一个随机填空匹配题';
$string['pluginnamesummary'] = '像匹配题一样，但是从某个类别的填空题库中随机创建。';
$string['privacy:metadata'] = '随机填空题类型插件不存储任何个人数据。';
$string['randomsamatch'] = '随机填空匹配题';
$string['randomsamatchintro'] = '对于下面的每道题目，请从菜单中选择对应的答案。';
$string['randomsamatchnumber'] = '要选择的题目数量';
$string['subcats'] = '包含子类别';
$string['subcats_help'] = '如果选中，问题也将从子类别中选择。';
