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
 * Strings for component 'cohort', language 'zh_cn', version '3.11'.
 *
 * @package     cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = '新建群组';
$string['allcohorts'] = '所有群组';
$string['anycohort'] = '任意';
$string['assign'] = '分配';
$string['assigncohorts'] = '分配群成员';
$string['assignto'] = '群“{$a}”的成员';
$string['backtocohorts'] = '回到群';
$string['bulkadd'] = '添加到群';
$string['bulknocohort'] = '没有可用的群';
$string['categorynotfound'] = '分类 <b>{$a}</b>未找到，或者你没有在这里创建群的权限。将使用默认值。';
$string['cohort'] = '群组';
$string['cohorts'] = '群组';
$string['cohortsin'] = '{$a}：可用群';
$string['component'] = '来源';
$string['contextnotfound'] = '情况 <b>{$a}</b>未找到，或者你没有在这里创建群的权限。将使用默认值。';
$string['csvcontainserrors'] = '在CSV中发现错误。详见下面。';
$string['csvcontainswarnings'] = '在CSV中发现警告。详见下面。';
$string['csvextracolumns'] = '列<b>{$a}</b>将被忽略';
$string['currentusers'] = '当前用户';
$string['currentusersmatching'] = '匹配的当前用户';
$string['defaultcontext'] = '默认情况';
$string['delcohort'] = '删除群';
$string['delconfirm'] = '您真的要删除群“{$a}”吗？';
$string['description'] = '描述';
$string['displayedrows'] = '{$a->displayed}行显示超过了{$a->total}。';
$string['duplicateidnumber'] = '已有使用相同ID的群存在';
$string['editcohort'] = '编辑群组';
$string['editcohortidnumber'] = '编辑群组ID';
$string['editcohortname'] = '编辑群名称';
$string['eventcohortcreated'] = '群组已创建';
$string['eventcohortdeleted'] = '群组已删除';
$string['eventcohortmemberadded'] = '用户添加到群';
$string['eventcohortmemberremoved'] = '用户从群中移除';
$string['eventcohortupdated'] = '群更新';
$string['external'] = '外部群';
$string['idnumber'] = '群ID';
$string['invalidtheme'] = '群组主题不存在';
$string['memberscount'] = '群大小';
$string['name'] = '名称';
$string['namecolumnmissing'] = 'CSV文件格式有错误。请检查文件包含正确的列表头。请注意上传群组功能仅允许您向现有群组中添加新用户，但不支持从现有群组中删除用户。';
$string['namefieldempty'] = '字段名称不能为空';
$string['newidnumberfor'] = '群{$a}的新ID';
$string['newnamefor'] = '群{$a}的新名称';
$string['nocomponent'] = '人工建立';
$string['potusers'] = '潜在用户';
$string['potusersmatching'] = '潜在的匹配用户';
$string['preview'] = '预览';
$string['privacy:metadata:cohort_members'] = '用户群组信息。';
$string['privacy:metadata:cohort_members:cohortid'] = '群组ID';
$string['privacy:metadata:cohort_members:timeadded'] = '表示用户加入到群组的时间戳';
$string['privacy:metadata:cohort_members:userid'] = '群组中用户的ID';
$string['removeuserwarning'] = '从群删除用户可能会导致撤销该用户在多个课程的选课，也就是说会删除用户在这些课程的个人设置、成绩、分组和其它用户信息。';
$string['search'] = '搜索';
$string['searchcohort'] = '搜索群';
$string['selectfromcohort'] = '从群选择成员';
$string['systemcohorts'] = '系统群';
$string['unknowncohort'] = '未知群（{$a}）！';
$string['uploadcohorts'] = '上传群';
$string['uploadcohorts_help'] = '群可以用过文本文件上传。文件格式应当是：

* 每行包含一条记录
* 每条记录是由逗号 (或其他分隔符) 分隔的一系列数据
* 第一条记录为字段名称的列表，用于定义文件其它部分的格式
* 必填的字段是 name
* 可选的字段是 idnumber, description, descriptionformat, visible, context, category, category_id, category_idnumber, category_path';
$string['uploadedcohorts'] = '上传 {$a} 个群';
$string['useradded'] = '用户已加入群“{$a}”';
$string['visible'] = '是否可见';
$string['visible_help'] = '任何群都可以允许拥有该群\'moodle/cohort:view\'能力的人查看。<br/>
可见群还可以被基本课程中的用户查看。';
