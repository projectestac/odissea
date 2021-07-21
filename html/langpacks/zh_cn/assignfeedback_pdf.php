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
 * Strings for component 'assignfeedback_pdf', language 'zh_cn', version '3.11'.
 *
 * @package     assignfeedback_pdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addquicklist'] = '添加评价列表';
$string['allowpdffeedback'] = '启用';
$string['annotatesubmission'] = '注释提交';
$string['annotationhelp'] = '注释帮助';
$string['annotationhelp_text'] = '<table>
<thead><tr><th>控制</th><th>键盘快捷键</th><th>说明</th></tr></thead>
<tr><td>{$a->save}</td><td> </td><td>关闭批注功能而不要产生回应的PDF文件(注意，所有的批注都会立刻被存储)</td></tr>
 <tr><td>{$a->generate}</td><td> </td><td>产生一个已被批注的PDF文件，以供学生下载<td><tr>
 <tr><td>寻找评论</td><td> </td><td>直接跳到先前输入的评论(在此作业上)并以醒目颜色标示。</td></tr>
 <tr><td>显示先前的</td><td> </td><td>从这一课程的其他作业取用现成的评论(在一副框中)给这一位学生看。</td></tr>
 <tr><td><-- 前一页</td><td>p</td><td>查看前一页面</td></tr>
 <tr><td>下一页 --></td><td>n</td><td>查看下一页面</td></tr>
 <tr><td>背景顏色</td><td>[ and ]</td><td>变更评论方块的填充颜色(也可以使用在评论上按鼠标右键的方式)</td></tr>
 <tr><td>线的颜色</td><td>{ and }</td><td>变更批注的颜色</td></tr>
 <tr><td>选择戳记</td><td> </td><td>选择要使用的戳记以供戳记工具使用(可以在服务器的 \'pix/stamps\'文件夹中添加新的戳记</td></tr>
 <tr><td>{$a->comment}</td><td>c</td><td>在页面上点选，可以添加一个评论方块，输入评论，然后再点选一次就可以存储。点选在评论上就可以编辑，拖拉就可以移动。按鼠标右键就可以更改颜色、存储到简易清单或刪除 (或以刪除文字來刪除)。</td></tr>
 <tr><td>{$a->line}</td><td>l</td><td>点选 +拖拉 (或点选, 移动, 点选) 可在页面上画出一条直线。</td></tr>
 <tr><td>{$a->rectangle}</td><td>r</td><td>点选 + 拖拉 (或点选, 移动, 点选) 可在页面上画出一个四边形。</td></tr>
 <tr><td>{$a->oval}</td><td>o</td><td>点选 + 拖拉 (或点选, 移动, 点选) 可在页面上画出一个椭圆。</td></tr>
 <tr><td>{$a->freehand}</td><td>f</td><td>点选 + 拖拉 可在页面上画出一个手绘随意线条。</td></tr>
 <tr><td>{$a->highlight}</td><td>h</td><td>点选 + 拖拉 (或点选, 移动, 点选) 可在页面内容上画出一个半透明强调颜色。 </td></tr>
 <tr><td>{$a->stamp}</td><td>s</td><td>以点选来插入被选出的戳记(默认大小)。 点选 + 拖拉 可插入不同大小的戳记</td></tr>
 <tr><td>{$a->erase}</td><td>e</td><td>点选在批注 (不是评论)上来擦试它</td></tr>
 <tr><td>简易清单</td><td> </td><td>在页面上使用鼠标右键来插入先前存储在\'简易清单\'上的评论。使用 \'x\' 来删除简易清单上不要的条目。</td></tr>
 </table>';
$string['backtocommentlist'] = '回到评论列表';
$string['badaction'] = '无效操作{$a}';
$string['badannotationid'] = '注释标签是不同的提交或页面';
$string['badcommentid'] = '评论是不同的提交或页面';
$string['badcoordinate'] = '直线上坐标点是奇数个---应该每个点2个坐标';
$string['badpath'] = '路径指向无效';
$string['cancel'] = '取消';
$string['clearimagecache'] = '清除页面图像缓存';
$string['colourblack'] = '黑色的';
$string['colourblue'] = '蓝色的';
$string['colourclear'] = '清晰的';
$string['colourgreen'] = '绿色';
$string['colourred'] = '红色的';
$string['colourwhite'] = '白色的';
$string['colouryellow'] = '黄色的';
$string['comment'] = '评论';
$string['deletecomment'] = '删除评论';
$string['deleteresponse'] = '删除响应';
$string['deleteresponseconfirm'] = '你确定你要删除在 \'{$a->assignmentname}\'作业上给{$a->username}的回复？';
$string['downloadoriginal'] = '原提交PDF下载';
$string['downloadresponse'] = '下载响应';
$string['draftsaved'] = '草稿已保存';
$string['emptyquicklist'] = 'Quicklist里无项目';
$string['emptyquicklist_instructions'] = '在评论上按鼠标右键，可将它复制到Quicklist里。';
$string['emptysubmission'] = '无提交文件';
$string['enabled'] = 'PDF反馈';
$string['enabled_help'] = '此选项允许PDF在线反馈(以PDF格式提交的)，并把此反馈PDF返回给学生。';
$string['eraseicon'] = 'e-删掉线条、形状。';
$string['errorgenerateimage'] = '无法生成图像 - 细节: {$a}';
$string['errormessage'] = '错误信息：';
$string['errornosubmission'] = '正在为不存在的提交生成反馈';
$string['errornosubmission2'] = '无法找到提交的PDF文件';
$string['errortempfolder'] = '无法建立临时文件夹';
$string['findcomments'] = '查找评论';
$string['findcommentsempty'] = '没有评论';
$string['freehandicon'] = 'f - 手画线';
$string['generateresponse'] = '生成反馈文件';
$string['gspath'] = 'Ghostscript的路径';
$string['highlighticon'] = 'h - 高亮文本';
$string['keyboardnext'] = 'n - 下一页';
$string['keyboardprev'] = 'p - 上一页';
$string['next'] = '下一步';
$string['nogroup'] = '不在组里的';
$string['opennewwindow'] = '在新窗口中打开页面';
$string['pagenumber'] = '页码';
$string['pagenumbertoobig'] = '要求的页码大于总页数 ({$a->pageno} > {$a->pagecount})';
$string['pagenumbertoosmall'] = '要求的页码数太小(<1)';
$string['servercommfailed'] = '与服务器通信失败――你是否要重新发送此信息？';
$string['showpreviousassignment'] = '显示以前的作业';
$string['test_doesnotexist'] = 'ghostscript 路径指向一个不存在的文件';
$string['test_empty'] = 'ghostscript 路径为空 - 请输入正确的路径';
$string['test_ok'] = '这个 ghostscript 目录似乎没有问题――请检查你是否能看到图像下方的信息';
$string['viewresponse'] = '在线查看答复';
