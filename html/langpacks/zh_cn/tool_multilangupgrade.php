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
 * Strings for component 'tool_multilangupgrade', language 'zh_cn', version '4.5'.
 *
 * @package     tool_multilangupgrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['multilangupgradeinfo'] = '<p>multilang 过滤器语法在 1.8 中发生了变化，因此不再支持 &lt;lang&gt; 标签。</p>
<p>示例： &lt;span lang=“en” class=“multilang”&gt;Hello！&lt;/span&gt;&lt;span lang=“es” class=“multilang”&gt;Hola！&lt;/span&gt;</p>
<p>您现在是否要升级所有现有文本中的语法？</p>';
$string['pluginname'] = '多语言升级';
$string['privacy:metadata'] = 'Multilang升级插件不存储任何个人数据。';
