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
 * Strings for component 'assignfeedback_editpdf', language 'zh_cn', branch 'MOODLE_38_STABLE'
 *
 * @package   assignfeedback_editpdf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = '添加到快捷列表';
$string['annotationcolour'] = '批注的颜色';
$string['black'] = '黑色';
$string['blue'] = '蓝色';
$string['cannotopenpdf'] = '无法打开这个PDF文件，这个文件可能已经损坏，或是不支持的格式。';
$string['clear'] = '清除';
$string['colourpicker'] = '颜色挑选器';
$string['command'] = '命令';
$string['comment'] = '评论';
$string['commentcolour'] = '评论的颜色';
$string['commentcontextmenu'] = '评论目录菜单';
$string['commentindex'] = '评论索引';
$string['commentlabel'] = '{$a->pnum}.{$a->cnum}';
$string['couldnotsavepage'] = '无法保存第{$a}页';
$string['currentstamp'] = '印章';
$string['default'] = '默认开启';
$string['default_help'] = '如果设置此项，将会为所有新作业默认开启此反馈方法。';
$string['deleteannotation'] = '删除批注';
$string['deletecomment'] = '删除评论';
$string['deletefeedback'] = '删除反馈的PDF文件';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = '下载反馈的PDF文件';
$string['draftchangessaved'] = '批注的草稿已保存';
$string['drag'] = '拖动';
$string['editpdf'] = '批注PDF文件';
$string['editpdf_help'] = '直接在浏览器批注学生的作业，并产生一个编辑好的、可下载的PDF文件。';
$string['enabled'] = '启用批注PDF文件';
$string['enabled_help'] = '若启用，当教师在批改作业时，可以建立一个批注PDF文件。它允许老师直接在学生的作业上添加评论、画图、和盖印章。这都是在浏览器上完成而不需要额外的软件支持。';
$string['errorgenerateimage'] = 'ghostscript脚本产生图像时发生错误，除错信息：{$a}';
$string['errorpdfpage'] = '生成此页时出错。';
$string['expcolcomments'] = '展开/折叠所有评论';
$string['filter'] = '筛选评论…';
$string['generatefeedback'] = '产生反馈的PDF文件';
$string['generatingpdf'] = '产生这个PDF…';
$string['gotopage'] = '跳转到页面';
$string['green'] = '绿色';
$string['gsimage'] = 'Ghostscript测试图片';
$string['highlight'] = '醒目标示';
$string['jsrequired'] = '要批注一个PDF文件，是需要用到JavaScript。请在你的浏览器上启用JavaScript来使用这个功能。';
$string['launcheditor'] = '启动PDF编辑器';
$string['line'] = '线';
$string['loadingeditor'] = '加载PDF编辑器';
$string['navigatenext'] = '下一页 (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['navigateprevious'] = '上一页 (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['output'] = '输出';
$string['oval'] = '椭圆形';
$string['pagenumber'] = '第 {$a} 页';
$string['pagexofy'] = '第 {$a->page} 页，共 {$a->total} 页';
$string['partialwarning'] = '提交某些文件只能通过直接下载进行访问。';
$string['pathtogspathdesc'] = '请注意，这个说明的pdf文件要在{$a}设定到ghostscript的目录。';
$string['pen'] = '笔';
$string['pluginname'] = '批注的PDF';
$string['preparesubmissionsforannotation'] = '准备要批注的作业';
$string['privacy:metadata:colourpurpose'] = '评论或批注的颜色';
$string['privacy:metadata:conversionpurpose'] = '文件转换为 PDF格式以允许批注。';
$string['privacy:metadata:filepurpose'] = '存储针对用户的带注释的PDF反馈。';
$string['privacy:metadata:rawtextpurpose'] = '存储快速数据的原始文本。';
$string['privacy:metadata:tablepurpose'] = '存储教师指定的评论快速列表';
$string['privacy:metadata:userid'] = '用户学号';
$string['privacy:path'] = 'PDF 反馈';
$string['rectangle'] = '长方形';
$string['red'] = '红色';
$string['result'] = '结果';
$string['searchcomments'] = '搜索评论';
$string['select'] = '选择';
$string['stamp'] = '印章';
$string['stamppicker'] = '印章挑选器';
$string['stamps'] = '印章';
$string['stampsdesc'] = '印章必须是图像文件（建议大小：40*40）。这些图像可以配合印章工具使用，作为批注PDF文件之用。';
$string['test_doesnotexist'] = 'ghostscript路径指向一个不存在的文件';
$string['test_empty'] = 'ghostscript路径是空的，请输入正确的路径';
$string['testgs'] = '测试ghostscript路径';
$string['test_isdir'] = '这个ghostscript路径指向一个文件夹，请在你指定的路径上包含这个ghostscript程序。';
$string['test_notestfile'] = '缺少测试的PDF文件';
$string['test_notexecutable'] = 'ghostscript指向一个不能执行的文件';
$string['test_ok'] = 'ghostscript路径似乎没有问题，请查看一下这图下方的信息。';
$string['tool'] = '工具';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = '浏览有批注的PDF文件';
$string['white'] = '白色';
$string['yellow'] = '黄色';
