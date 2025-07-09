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
 * Strings for component 'gradereport_gradedist', language 'zh_cn', version '4.4'.
 *
 * @package     gradereport_gradedist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a'] = '（绝对值）';
$string['absolut'] = '绝对值';
$string['actcoverage'] = '当前分数段未包含的项目：';
$string['actualcolumns'] = '当前分数段';
$string['actualgrade'] = '成绩 （当前）';
$string['boundaryerror'] = '新分数段中一些录入可能无效。必须为所有字段录入';
$string['category'] = '成绩类别';
$string['changeletters'] = '保存更改的分数段';
$string['chart'] = '图表';
$string['columns'] = '柱状图';
$string['confirm'] = '保存更改的分数段';
$string['confirmationtableviewed'] = '已查看确认表';
$string['confirmationtableviewed_description'] = 'ID 为  {$a->userid}  的用户查看了成绩分布确认表。';
$string['contextbuttontitle'] = '图表关联菜单';
$string['coursesum'] = '总分';
$string['coverage'] = '新的成绩分布并不涵盖所有成绩！';
$string['coverage_export'] = '分数段中不包含的项目：';
$string['csv'] = 'csv';
$string['decimals'] = '下限必须是 0 到 100 之间的数字。最多允许两位小数。';
$string['description'] = '标签';
$string['download'] = '下载';
$string['downloadjpeg'] = 'JPEG 图像';
$string['downloadpdf'] = 'PDF 文档';
$string['downloadpng'] = 'PNG 图像';
$string['downloadsvg'] = '下载 SVG 图像';
$string['export'] = '下载数据为';
$string['exportasimage'] = '下载图表为';
$string['gradeboundary'] = '下限 （%）';
$string['gradeboundary_help'] = '该设置确定将指定给成绩段的成绩的最小百分比。';
$string['gradeboundary_new'] = '新下限（%）';
$string['gradeboundary_new_help'] = '您可以查看新的下限对成绩分布的影响。下限必须是最多具有 2 个小数点的数字。';
$string['gradedist:edit'] = '管理成绩分布';
$string['gradedist:view'] = '查看成绩分布';
$string['gradedistdownloaded'] = '当前等级分布已下载';
$string['gradedistdownloaded_description'] = 'ID 为  {$a->userid}  的用户下载了当前成绩分布。';
$string['gradedistviewed'] = '已查看的成绩分布';
$string['gradedistviewed_description'] = 'ID 为  {$a->userid}  的用户查看了成绩分布。';
$string['gradeitem'] = '“评分”列';
$string['gradeletter'] = '分数段';
$string['highchartsmissing'] = '要查看图表，请从 <a href="http://code.highcharts.com/">http://code.highcharts.com/ </a>下载 Highcharts 库的 4.x 版。将核心模块 highcharts.src.js 和 exporting.src.js 模块一起复制到目录中，或者如果您更喜欢它们的缩小版本 highcharts.js 和 exporting.js，也可以分别复制到目录 moodleroot/grade/report/gradedist/js 中。';
$string['interval'] = '下限必须介于 0 和 100 之间。';
$string['labelgroup'] = '将视图聚焦在组上';
$string['labelgrouping'] = '将视图聚焦在组上';
$string['newcolumns'] = '新分数段';
$string['newcoverage'] = '新分数段未包含的项目：';
$string['newgrade'] = '成绩 （新）';
$string['newletterssubmitted'] = '新分数段已提交';
$string['newletterssubmitted_description'] = 'ID为 {$a->userid} 的用户提交了新分数段。';
$string['nogroupingentry'] = '无分组';
$string['notification'] = '注意:分数段定义适用于本课程的所有成绩项。';
$string['percent'] = '百分比';
$string['pluginname'] = '成绩分布';
$string['pluginname_help'] = '此报表根据分数段的最低限，显示指定成绩项的分布。使用预览功能可立即查看分数段低限的调整对成绩分布的影响。如果结果满意，可以立即启用分数段新的低限值。

注意:分数段定义适用于本课程的所有成绩项。';
$string['points'] = '分（{$a}）';
$string['predecessor'] = '一个分数段的低限值必须小于前一级别的边界。';
$string['printchart'] = '打印图表';
$string['privacy:null_reason'] = '此插件不存储任何个人信息。它提供了一个界面，用于直观地显示和导出课程中已评分项目的成绩分布。';
$string['saved'] = '分数段已成功修改。';
$string['showgradeitem'] = '显示成绩项';
$string['showgradeitem_description'] = '将成绩显示类型显示为成绩项的选择';
$string['showgradeitemtype'] = '显示成绩项类型';
$string['showgradeitemtype_help'] = '显示成绩项目类型，如测验、作业等。';
$string['sum'] = '总分';
