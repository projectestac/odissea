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
 * Strings for component 'quest', language 'zh_cn', version '4.4'.
 *
 * @package     quest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['groupmode_help'] = '<P align="justify">小组模式可以是三个级别之一：</P>
<div align="justify">
  <ul>
  <li><strong>无小组</strong>: 没有子组，所有人都是一个大社区的一部分。</li>
  <li><strong>独立小组</strong>: 每个小组只能看到自己的小组，其他人不可见。</li>
  <li><strong>公开小组</strong>: 每个小组在自己的小组内工作，但也可以看到其他小组。</li>
  </ul>
</div>
<P align="justify">组模式可以在两个级别上定义：</P>
<div align="justify">
  <ul>
  <li><strong>课程级别</strong>: 在课程级别定义的组模式是该课程内所有活动默认的模式。</li>
      <li><strong>活动级别</strong>: 每个支持组的活动也可以定义自己的组模式。如果课程设置为"<a href="help.php?module=moodle&file=groupmodeforce"">强制组模式</a>"，则每个活动的设置将被忽略。</li>
  </ul>
</div>';
