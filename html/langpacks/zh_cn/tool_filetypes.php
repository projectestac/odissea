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
 * Strings for component 'tool_filetypes', language 'zh_cn', version '4.5'.
 *
 * @package     tool_filetypes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = '新增一个文件类型';
$string['corestring'] = '另一种语言的字符串';
$string['corestring_help'] = '该设置可以从核心mimetypes.php语言文件选择一个不同的语言字串。一般情况下它应该被留空。对于自定义类型，请使用说明字段。';
$string['defaulticon'] = 'MIME类型的默认图标';
$string['defaulticon_help'] = '如果有多个文件扩展名具有相同的MIME类型，请为其中一个扩展名选择此选项，以便在根据MIME类型确定图标时使用其图标。';
$string['delete_confirmation'] = '你确定要删除<strong>.{$a}</strong>？';
$string['deletea'] = '删除 {$a}';
$string['deletefiletypes'] = '删除一个文件类型';
$string['description'] = '自定义说明';
$string['description_help'] = '简单的文件类型描述，例如，"Kindle电子书"。如果你的站点支持多种语言并使用多语言过滤器，你可以在此字段中输入多语言标签以提供不同语言的描述。';
$string['descriptiontype'] = '说明类型';
$string['descriptiontype_custom'] = '在该表单中指定的自定义说明';
$string['descriptiontype_default'] = '默认(MIME类型或对应的语言字串)';
$string['descriptiontype_help'] = '有三种可能的方法来指定描述。

* 默认行为使用MIME类型。如果mimetypes.php中存在与该MIME类型对应的语言字符串，则将使用该字符串；否则，MIME类型本身将显示给用户。
* 您可以在此表单上指定自定义说明。
* 您可以在mimetypes.php中指定要使用的语言字符串的名称，而不是MIME类型。';
$string['descriptiontype_lang'] = '其他语言字串(来自mimetypes.php)';
$string['displaydescription'] = '说明';
$string['editfiletypes'] = '编辑现有的文件类型';
$string['emptylist'] = '沒有定义文件类型';
$string['error_addentry'] = '文件类型扩展名、描述、MIME类型和图标不能包含换行和分号字符。';
$string['error_defaulticon'] = '另一个具有相同MIME类型的文件扩展名已经被标记为默认图标。';
$string['error_extension'] = '文件类型的扩展名(extention)<strong>{$a}</strong>已经存在或无效。文件的扩展名必须是唯一的，且不可以包含特殊字符。';
$string['error_notfound'] = '无法找到扩展名是{$a}的文件类型';
$string['extension'] = '扩展名';
$string['extension_help'] = '不带点的文件扩展名，例如 \'mobi\'';
$string['groups'] = '类型小组';
$string['groups_help'] = '此类型所属的文件类型组的可选列表。这些是通用类别，如“文档”和“图像”。';
$string['icon'] = '文件图标';
$string['icon_help'] = '图标文件名称。
这个图标清单取自你的Moodle安装目录下的 /pix/f 目录。若有需要的话，你可以自行添加图标文件到这个目录中。';
$string['mimetype'] = 'MIME类型';
$string['mimetype_help'] = '与这个文件类型有关的MIME类型，例如 &lsquo;application/x-mobipocket-ebook&rsquo;';
$string['pluginname'] = '文件类型';
$string['privacy:metadata'] = '文件类型插件不存储任何个人数据。';
$string['revert'] = '恢复{$a}到Moodle的默认值';
$string['revert_confirmation'] = '你是否确定要恢复 <strong>.{$a}</strong> 到Moodle默认值，而放弃你的修改？';
$string['revertfiletype'] = '恢复一个文件类型';
$string['source'] = '类型';
$string['source_custom'] = '自定义';
$string['source_deleted'] = '已删除';
$string['source_modified'] = '已修改';
$string['source_standard'] = '标准';
