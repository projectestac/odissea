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
 * Strings for component 'cachestore_file', language 'zh_cn', version '4.4'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = '异步清除目录';
$string['asyncpurge_help'] = '如果启用，将使用缓存修订创建新目录，并通过计划任务异步删除旧目录。';
$string['autocreate'] = '自动建立目录';
$string['autocreate_help'] = '若启用，将会自动建立不存在的指定目录。';
$string['lockwait'] = '最大锁定等待时间';
$string['lockwait_help'] = '在读取或写入缓存键之前等待独占锁的最长时间（以秒为单位）。这仅用于需要读取或写入锁定的缓存定义。';
$string['path'] = '缓存路径';
$string['path_help'] = '这个目录将用作存放文件的缓存。若留空（默认值），会在Moodledata目录下自动建立。也可以设置在高速磁盘（如内存）上。';
$string['pluginname'] = '文件缓存';
$string['prescan'] = '预先扫描目录';
$string['prescan_help'] = '若启用，第一次使用缓存时会扫描该目录，并与所请求的文件作核对。若你的文件系统速度很慢而造成系统瓶颈时有帮助。';
$string['privacy:metadata'] = '作为缓存功能的一部分，File cache 缓存存储插件可以短暂地存储数据，但这些数据会定期清除。';
$string['singledirectory'] = '一个目录存储';
$string['singledirectory_help'] = '如果启用，文件（缓存项目）将被存储在一个目录中，而不是被分割成多个目录。

启用该功能将加快文件的交互，但代价是增加了触及文件系统限制的风险。

建议只在以下情况下打开这个功能：

* 如果你知道缓存中的项目数量将足够小，不会引起你正在运行的文件系统出现问题。
* 被缓存的数据产生的成本并不高。如果是这样的话，坚持使用默认值可能仍然是更好的选择，因为它减少了问题出现的几率。';
$string['task_asyncpurge'] = '异步清除文件存储的旧缓存修订目录';
