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
 * Strings for component 'filter_displayh5p', language 'zh_cn', version '3.11'.
 *
 * @package     filter_displayh5p
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedsourceslist'] = '允许的来源';
$string['allowedsourceslistdesc'] = '用户可以从中嵌入H5P内容的URL列表。如果未指定任何URL，则所有URL将保留为链接，而不会显示为嵌入的H5P内容。

“[id]”是外部源中H5P内容id的占位符。
例如：

- H5P.com: https://[xxxxxx].H5P.com/content/[id]
- Wordpress: http://myserver/wp-admin/admin-ajax.php?action=h5p_embed&amp;id=[id]';
$string['filtername'] = '显示H5P';
$string['privacy:metadata'] = '这个显示的H5P过滤器不存储任何个人数据。';
