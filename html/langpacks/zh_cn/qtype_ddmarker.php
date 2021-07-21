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
 * Strings for component 'qtype_ddmarker', language 'zh_cn', version '3.11'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = '添加{no} 个空白标记';
$string['alttext'] = '替代文本';
$string['answer'] = '答案';
$string['bgimage'] = '背景图片';
$string['clearwrongparts'] = '将放置不正确的标记移回图片下方的默认起始位置';
$string['coords'] = '坐标';
$string['correctansweris'] = '正确答案是:{$a}';
$string['draggableimage'] = '可拖动图片';
$string['draggableitem'] = '可拖动项目';
$string['draggableitemheader'] = '可拖动项目{$a}';
$string['draggableitemtype'] = '类型';
$string['draggableword'] = '可拖动文本';
$string['dropbackground'] = '用于将标记拖动到上面的背景图片';
$string['dropzone'] = '放置区域{$a}';
$string['dropzoneheader'] = '放置区域';
$string['dropzones'] = '放置区域';
$string['dropzones_help'] = '放置区域可以由坐标定义，或在上面的预览中拖动到合适位置。首先选择一个形状(圆形、矩形或多边形)，将在预览的左上角添加一个新的放置区域形状。这可能是有用的，以尽量减少标记部分，以便您编辑放置区域时可以看到预览。编辑形状首先在预览中单击形状以显示编辑手柄。您可以使用中心手柄移动形状，或使用顶点手柄调整形状的尺寸。仅对多边形而言，按住control按钮(Mac上是command按钮)同时点击顶点手柄将为多边形添加一个新的顶点。请尽量保持多边形的形状简单，不要交叉。这三个形状的坐标如下:*圆形：圆心_x,圆心_y;半径<br/>例如:<code>80,100;50</code>*矩形：左上_x,左上_y;宽度,高度<br/>例如:<code>20,60;80,40</code>* 多边形： x1, y1;x2, y2;…;例如:<code>20,60;100,60;20,100</code>选择一个标记文本将在预览中添加该文本到形状。';
$string['followingarewrong'] = '以下标记被放置在错误的区域:{$a}。';
$string['followingarewrongandhighlighted'] = '下列标记位置不正确:{$a}。高亮的标记现在显示在正确的位置。<br />点击标记，高亮显示允许的区域。';
$string['formerror_nobgimage'] = '您需要选择一个图片作为拖放区域的背景。';
$string['formerror_noitemselected'] = '您指定了一个放置区域，但没有选择必须放置到该区域的标记。';
$string['formerror_nosemicolons'] = '在您的坐标字符串中没有分号(;)。您的{$a->shape}坐标应该表示为- {$a->coordsstring}。';
$string['formerror_onlysometagsallowed'] = '只允许“{$a}”标签出现在标记的标签中。';
$string['formerror_onlyusewholepositivenumbers'] = '请仅使用全部的正整数来指定x、y坐标和/或形状的宽度和高度。您的{$a->shape}坐标应该表示为- {$a->coordsstring}。';
$string['formerror_polygonmusthaveatleastthreepoints'] = '对于一个多边形形状，您需要指定至少3个点。您的{$a->shape}坐标应该表示为- {$a->coordsstring}。';
$string['formerror_repeatedpoint'] = '您两次输入了相同的坐标。每个点必须是唯一的。您的{$a->shape}坐标应该表示为- {$a->coordsstring}。';
$string['formerror_shapeoutsideboundsofbgimage'] = '您定义的形状超出了背景图片的边界。';
$string['formerror_toomanysemicolons'] = '对于您指定的坐标，分号(;)分隔的部分太多了。您的{$a->shape}坐标应该表示为- {$a->coordsstring}。';
$string['formerror_unrecognisedwidthheightpart'] = '您指定的宽度和高度无法识别。您的{$a->shape}坐标应该表示为- {$a->coordsstring}。';
$string['formerror_unrecognisedxypart'] = '您指定的x、y坐标无法识别。您的{$a->shape}坐标应该表示为- {$a->coordsstring}。';
$string['infinite'] = '无限';
$string['marker'] = '标记';
$string['marker_n'] = '标记 {no}';
$string['markers'] = '标记';
$string['nolabel'] = '没有标签文本';
$string['noofdrags'] = '可以被使用几次';
$string['pleasedragatleastonemarker'] = '您的回答不完整；您必须在图片上放置至少一个标记。';
$string['pluginname'] = '拖放标签题';
$string['pluginname_help'] = '拖放标记题要求答题者拖动文本标签并将其放入背景图片上定义的放置区域。';
$string['pluginnameadding'] = '添加拖放标记题';
$string['pluginnameediting'] = '编辑拖放标签题';
$string['pluginnamesummary'] = '标记被拖动并放置到背景图片上。
注意：视障用户无法访问此试题类型。';
$string['previewareaheader'] = '预览';
$string['previewareamessage'] = '选择一个背景图片文件，为标记输入文本标签，并在背景图片上定义放置区域。';
$string['privacy:metadata'] = '拖放标记试题类型插件不存储任何个人数据。';
$string['refresh'] = '刷新预览';
$string['shape'] = '形状';
$string['shape_circle'] = '圆形';
$string['shape_circle_coords'] = 'x,y;r(其中x,y为圆心的坐标，r为半径)';
$string['shape_circle_lowercase'] = '圆形';
$string['shape_polygon'] = '多边形';
$string['shape_polygon_coords'] = '(x1, y1, x2, y2; x3, y3, x4、y4……(其中x1, y1是第一个顶点的坐标，x2, y2是第二个顶点的坐标，以此类推。不需要重复第一个顶点的坐标来关闭多边形)。';
$string['shape_polygon_lowercase'] = '多边形';
$string['shape_rectangle'] = '矩形';
$string['shape_rectangle_coords'] = 'x,y;w,h(其中x,y为矩形左上角的坐标，w,h为矩形的宽度和高度)';
$string['shape_rectangle_lowercase'] = '矩形';
$string['showmisplaced'] = '高亮显示没有正确放置标记的放置区域。';
$string['shuffleimages'] = '每次试答试题时打乱拖动项目顺序';
$string['stateincorrectlyplaced'] = '标记放置错误的状态';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = '放置区域 {$a}';
$string['ytop'] = '顶端';
