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
 * Strings for component 'filter_mathjaxloader', language 'zh_cn', version '4.5'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = '附加方程式分隔符';
$string['additionaldelimiters_help'] = 'MathJax筛选器解析包含在分隔符字符中的方程式的文本。
可在此处添加可识别分隔符的列表（例如，AsciiMath使用`）。
分隔符可以包含多个字符，多个分隔符可以用逗号分隔。';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'MathJax URL';
$string['httpsurl_help'] = 'MathJax库的完整URL。';
$string['localinstall'] = 'Local MathJax installation';
$string['localinstall_help'] = '默认的MathJax配置使用MathJax的CDN版本，但是如果需要，可以在本地安装MathJax。

这对于节省带宽或由于本地代理限制而非常有用。

要使用本地安装的MathJax，首先从下载完整的MathJax库https://www.mathjax.org/. 然后将其安装到web服务器上。最后更新MathJax过滤器设置httpurl和/或httpsurl，以指向本地MathJax.js URL。';
$string['mathjaxsettings'] = 'MathJAX配置';
$string['mathjaxsettings_desc'] = '默认的MathJax配置应该适合大多数用户，但是MathJax是高度可配置的，可以在这里添加任何标准MathJax配置选项。';
$string['privacy:metadata'] = 'MathJax插件不存储任何个人数据。';
$string['texfiltercompatibility'] = 'TeX滤波器兼容性';
$string['texfiltercompatibility_help'] = 'MathJax过滤器可用作TeX符号过滤器的替代品。
为了支持TeX符号过滤器支持的所有分隔符，MathJax将被配置为显示所有与文本“内联”的方程式。';
