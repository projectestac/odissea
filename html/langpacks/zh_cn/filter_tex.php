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
 * Strings for component 'filter_tex', language 'zh_cn', version '4.1'.
 *
 * @package     filter_tex
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configconvertformat'] = '如果除了 <i>convert</i> 或 <i>dvisvgm</i> 之外还存在 <i>latex</i> 和 <i>dvips</i>，请选择首选图像类型（<i>convert</i> 生成 GIF 或 PNG;<i>dvisvgm</i> 生成 SVG）。否则<i>，mimeTeX</i>将用于创建GIF图像。';
$string['convertformat'] = '输出图像格式';
$string['filtername'] = 'TeX符号';
$string['latexpreamble'] = 'LaTeX前缀';
$string['latexsettings'] = 'LaTeX渲染器设置';
$string['pathconvert'] = '<i>convert</i>程序的路径';
$string['pathdvips'] = '<i>dvips</i>程序的路径';
$string['pathdvisvgm'] = '<i>dvisvgm</i>二进制文件的路径';
$string['pathlatex'] = '<i>latex</i>程序的路径';
$string['pathmimetex'] = '<i>mimetex</i>二进制文件的路径';
$string['pathmimetexdesc'] = '除非指定了另一个有效路径，否则Moodle将使用自己的mimetex二进制文件。';
$string['privacy:metadata'] = 'TeX符号插件不存储任何个人数据。';
$string['source'] = 'TeX源码';
