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
 * Strings for component 'cache_file', language 'zh_cn', branch 'MOODLE_25_STABLE'
 *
 * @package   cache_file
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = '自动创建目录';
$string['autocreate_help'] = '指定的目录如果不存在系统会自动创建';
$string['path'] = '缓存目录';
$string['path_help'] = '用来保存cache的目录，如果不填，系统会自动在moodledata目录下面生成一个文件夹保存cache文件。这里你可以把目录指向一个性能比较好的驱动（比如指向一个内存盘）';
$string['pluginname'] = '文件缓存';
$string['prescan'] = '预扫描目录';
$string['prescan_help'] = '在缓存第一次使用和请求缓存文件时，先对目录进行扫描。当你的服务器文件系统比较慢时，建议启用这个设置。';
