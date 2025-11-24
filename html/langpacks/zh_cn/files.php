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
 * Strings for component 'files', language 'zh_cn', version '4.5'.
 *
 * @package     files
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contenthash'] = '内容哈希值';
$string['eventfileaddedtodraftarea'] = '文件添加到草稿区';
$string['eventfiledeletedfromdraftarea'] = '文件已从草稿区删除';
$string['privacy:metadata:core_userkey'] = '生成并存储私有令牌。 此令牌可用于访问 Moodle 文件，而无需您登录。';
$string['privacy:metadata:file_conversion:usermodified'] = '开始文件转换的用户。';
$string['privacy:metadata:file_conversions'] = '用户执行的文件转换的记录。';
$string['privacy:metadata:files'] = '用户上传或共享文件的记录';
$string['privacy:metadata:files:author'] = '文件内容的作者';
$string['privacy:metadata:files:contenthash'] = '文件内容的校验值';
$string['privacy:metadata:files:filename'] = '文件区域中文件名称';
$string['privacy:metadata:files:filepath'] = '文件在文件区域的路径';
$string['privacy:metadata:files:filesize'] = '文件大小';
$string['privacy:metadata:files:license'] = '文件内容的授权许可';
$string['privacy:metadata:files:mimetype'] = '文件的MIME类型';
$string['privacy:metadata:files:source'] = '文件来源';
$string['privacy:metadata:files:timecreated'] = '文件创建时间';
$string['privacy:metadata:files:timemodified'] = '文件上次修改的时间';
$string['privacy:metadata:files:userid'] = '创建文件的用户';
$string['redactor'] = '文件编辑';
$string['redactor:exifremover'] = 'EXIF 删除工具';
$string['redactor:exifremover:emptyremovetags'] = '移除标签不能为空！';
$string['redactor:exifremover:enabled'] = '启用 EXIF 删除工具';
$string['redactor:exifremover:enabled_desc'] = '默认情况下，EXIF 删除工具只支持使用 PHP GD 的JPG文件，如果配置了 ExifTool，则只支持使用 PHP GD 的 JPG 文件。
这降低了图像的质量，并删除了方向标签。

要提高 EXIF 删除工具的性能，请配置下面的 ExifTool 设置。

关于安装 ExifTool 的更多信息可以在{$a->link}中找到';
$string['redactor:exifremover:failedprocessexiftool'] = '编辑失败：使用 ExifTool 处理文件失败！';
$string['redactor:exifremover:failedprocessgd'] = '编辑失败：使用 PHP dg 处理文件失败！';
$string['redactor:exifremover:heading'] = 'Exif工具';
$string['redactor:exifremover:mimetype'] = '支持的 MIME 类型';
$string['redactor:exifremover:mimetype_desc'] = '要添加新的 MIME 类型，请确保它们包含在<a href="./tool/filetypes/index.php">文件类型</a>。';
$string['redactor:exifremover:removetags'] = 'EXIF 标记将被删除。';
$string['redactor:exifremover:removetags_desc'] = '需要删除的 EXIF 标记。';
$string['redactor:exifremover:tag:all'] = '全部';
$string['redactor:exifremover:tag:gps'] = '仅 GPS';
$string['redactor:exifremover:tooldoesnotexist'] = '编辑失败：ExifTool 不存在！';
$string['redactor:exifremover:toolpath'] = 'ExifTool 的路径';
$string['redactor:exifremover:toolpath_desc'] = '要使用 ExifTool，请提供 ExifTool 可执行文件的路径。
通常，在Unix/Linux系统上，路径为/usr/bin/exiftool。';
