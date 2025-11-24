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
 * Strings for component 'resource', language 'zh_cn', version '4.5'.
 *
 * @package     resource
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clicktodownload'] = '点击{$a}链接下载此文件';
$string['clicktoopen2'] = '点击{$a}链接查看此文件';
$string['configdisplayoptions'] = '选择所有可以使用的选项。已有的设置不会改变。按住CTRL键选择多个域。';
$string['configframesize'] = '当网页或上传的文件在一个框架内显示时，该值是顶部框架（包含导航）的高度（以像素为单位）。';
$string['configparametersettings'] = '当添加新的资源时，以此作为参数设置框的缺省值。在第一次设置之后，就允许每个用户自己设置。';
$string['configpopup'] = '所添加的新资源显示在弹出窗口，设其为默认值吗？';
$string['configpopupdirectories'] = '弹出窗口是否显示缺省目录链接？';
$string['configpopupheight'] = '新窗口缺省高度？';
$string['configpopuplocation'] = '弹出窗口是否显示地址栏？';
$string['configpopupmenubar'] = '弹出窗口是否显示菜单栏？';
$string['configpopupresizable'] = '弹出窗口是否可以调整大小？';
$string['configpopupscrollbars'] = '弹出窗口是否可滚动？';
$string['configpopupstatus'] = '弹出窗口是否显示状态栏？';
$string['configpopuptoolbar'] = '弹出窗口是否显示工具栏？';
$string['configpopupwidth'] = '新窗口缺省宽度？';
$string['contentheader'] = '内容';
$string['displayoptions'] = '可用的显示选项';
$string['displayselect'] = '显示';
$string['displayselect_help'] = '此设置，文件的类型，及浏览器是否允许嵌入，一起决定如何显示文件。选项可能包括：

* 自动 - 对类型可以自动选择的文件，这是最好的选项
* 嵌入 - 在导航栏下的页面中显示文件、文件描述和各种版块
* 强制下载 - 用户会被提示下载此文件
* 打开 - 只在浏览器窗口中显示此文件
* 在弹出窗口中 - 在一个无菜单和地址栏的新窗口中显示文件
* 在框架中 - 在导航栏和文件描述下方的框架里显示文件
* 新窗口 - 在有菜单和地址栏的新窗口中显示文件
';
$string['displayselect_link'] = 'mod/file/mod';
$string['displayselectexplain'] = '选择显示类型，但并不是所有类型都适合所有文件。';
$string['dnduploadresource'] = '创建文件资源';
$string['encryptedcode'] = '加密代码';
$string['filenotfound'] = '抱歉，找不到文件。';
$string['filterfiles'] = '对文件内容使用过滤器';
$string['filterfilesexplain'] = '选择文件内容过滤的类型。请注意，这可能会给某些Flash和Java applet程序带来问题。请确定所有文本文件都使用UTF-8编码。';
$string['filtername'] = '资源名称自动链接';
$string['forcedownload'] = '强制下载';
$string['framesize'] = '页框高度';
$string['indicator:cognitivedepth'] = '文件资源认知深度';
$string['indicator:cognitivedepth_help'] = '这个指标是基于学生在 文件资源中所达到的认知深度。';
$string['indicator:cognitivedepthdef'] = '文件认知';
$string['indicator:cognitivedepthdef_help'] = '在此分析间隔期间，参与者已达到文件资源提供的认知参与百分比（级别=无视图，视图）';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = '文件资源社会宽度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在文件资源中所达到的社会宽度。';
$string['indicator:socialbreadthdef'] = '文件社交';
$string['indicator:socialbreadthdef_help'] = '在此分析间隔期间，参与者已达到文件资源提供的社会参与度的百分比（级别=无参与，仅参与者一人）';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['legacyfiles'] = '移植的旧课程文件';
$string['legacyfilesactive'] = '活动的';
$string['legacyfilesdone'] = '已结束';
$string['modifieddate'] = '修改 {$a}';
$string['modulename'] = '文件';
$string['modulename_help'] = '文件模块允许教师提供文件作为课程资源。在可能的情况下，该文件将显示在课程界面中；否则，系统会提示学生下载。该文件可以包括支持文件，例如HTML页面可以嵌入图像。

请注意，学生需要在他们的计算机上安装适当的软件才能打开文件。

一个文件可以用来

* 分享课堂上的演示
* 包括一个迷你网站作为课程资源
* 提供软件程序的草稿文件，供学生编辑并提交评估';
$string['modulename_link'] = 'mod/resource/view';
$string['modulenameplural'] = '文件';
$string['notmigrated'] = '抱歉，传统的资源类型（{$a}）还不能移植。';
$string['optionsheader'] = '显示选项';
$string['page-mod-resource-x'] = '任意文件模块页面';
$string['pluginadministration'] = '文件模块管理';
$string['pluginname'] = '文件';
$string['popupheight'] = '弹出窗口高度（单位：像素）';
$string['popupheightexplain'] = '指定弹出窗口的缺省高度。';
$string['popupresource'] = '该资源将出现在一个弹出窗口中.';
$string['popupresourcelink'] = '若不行, 点击这里: {$a}';
$string['popupwidth'] = '弹出窗口宽度（单位：像素）';
$string['popupwidthexplain'] = '指定弹出窗口的缺省宽度。';
$string['printintro'] = '显示资源描述';
$string['printintroexplain'] = '在内容下方显示资源描述？某些显示类型就算开启此选项也不会显示描述。';
$string['privacy:metadata'] = '文件资源插件不存储任何个人数据。';
$string['resource:addinstance'] = '添加一个新的资源';
$string['resource:exportresource'] = '导出资源';
$string['resource:view'] = '查看资源';
$string['resourcecontent'] = '文件和子目录';
$string['resourcedetails_sizedate'] = '{$a->size} · {$a->date}';
$string['resourcedetails_sizetype'] = '{$a->size} · {$a->type}';
$string['resourcedetails_sizetypedate'] = '{$a->size} · {$a->type} · {$a->date}';
$string['resourcedetails_typedate'] = '{$a->type} · {$a->date}';
$string['search:activity'] = '文件';
$string['selectmainfile'] = '请点击文件名旁的图标选择主文件。';
$string['showdate'] = '显示上传/修改日期';
$string['showdate_desc'] = '是否在课程页面上显示上载/修改日期？';
$string['showdate_help'] = '在文件链接旁边显示上载/修改日期。
如果此资源中有多个文件，则显示开始文件上载/修改日期。';
$string['showsize'] = '显示大小';
$string['showsize_desc'] = '在课程页面中显示文件大小？';
$string['showsize_help'] = '在文件链接的旁边，显示文件大小，如“3.1 MB”。如果在资源中有多个文件，则显示所有文件的总大小。';
$string['showtype'] = '显示类型';
$string['showtype_desc'] = '在课程页面中显示文件类型（如WORD文件）？';
$string['showtype_help'] = '在文件链接的旁边，显示文件的类型，如“Word文档”。如果在资源中有多个文件，则显示第一个文件的类型。如果文件类型是未知的，则不显示类型。';
$string['uploadeddate'] = '上传 {$a}';
