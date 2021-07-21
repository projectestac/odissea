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
 * Strings for component 'group', language 'zh_cn', version '3.11'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = '由{$a}添加';
$string['addgroup'] = '添加用户到小组';
$string['addgroupstogrouping'] = '添加小组到大组';
$string['addgroupstogroupings'] = '添加/移除小组';
$string['adduserstogroup'] = '添加/移除用户';
$string['allocateby'] = '分配成员';
$string['anygrouping'] = '[任何大组]';
$string['autocreategroups'] = '自动创建小组';
$string['backtogroupings'] = '返回大组';
$string['backtogroups'] = '返回小组';
$string['badnamingscheme'] = '必须包含一个“@” 或者一个“#”';
$string['byfirstname'] = '按名、姓字母顺序排列';
$string['byidnumber'] = '按 ID 号字母顺序排列';
$string['bylastname'] = '按姓、名字母顺序排列';
$string['createautomaticgrouping'] = '创建自动大组';
$string['creategroup'] = '创建小组';
$string['creategrouping'] = '创建大组';
$string['creategroupinselectedgrouping'] = '在大组中创建小组';
$string['createingrouping'] = '自动创建的小组的大组';
$string['createorphangroup'] = '创建独立小组';
$string['databaseupgradegroups'] = '小组版本现在是 {$a}';
$string['defaultgrouping'] = '默认大组';
$string['defaultgroupingname'] = '大组';
$string['defaultgroupname'] = '小组';
$string['deleteallgroupings'] = '删除所有大组';
$string['deleteallgroups'] = '删除所有小组';
$string['deletegroupconfirm'] = '您确定要删除小组“{$a}”吗？';
$string['deletegrouping'] = '删除大组';
$string['deletegroupingconfirm'] = '您确定要删除大组“{$a}”吗？（此大组中的小组不会被删除。）';
$string['deletegroupsconfirm'] = '您确定要删除下面的小组吗？';
$string['deleteselectedgroup'] = '删除选定的小组';
$string['editgroupingsettings'] = '编辑大组设置';
$string['editgroupsettings'] = '编辑小组设置';
$string['editusersgroupsa'] = '编辑小组"{$a}"';
$string['enablemessaging'] = '小组消息';
$string['enablemessaging_help'] = '如果启用，小组成员可以通过消息抽屉向小组中的其他成员发送消息。';
$string['enrolmentkey'] = '选课密钥';
$string['enrolmentkey_help'] = '选课密钥可以使该课程的访问仅限于那些知道该密钥的人员。 如果指定了小组选课密钥，则输入该密钥不仅会使用户进入课程，而且还将自动使他们成为该小组的成员。

注意：必须在自助选课设置中启用小组选课密钥，并且还必须指定课程的选课密钥。';
$string['enrolmentkeyalreadyinuse'] = '此选课密钥已用于另一个小组。';
$string['erroraddremoveuser'] = '添加/移除用户{$a}到小组出错';
$string['erroreditgroup'] = '创建/更新小组{$a}出错';
$string['erroreditgrouping'] = '创建/更新大组{$a}出错';
$string['errorinvalidgroup'] = '错误，无效的小组{$a}';
$string['errorremovenotpermitted'] = '您没有移除自动添加的小组成员{$a}的权限';
$string['errorselectone'] = '请选择一个小组，然后再选择此选项';
$string['errorselectsome'] = '请选择一个或多个小组，然后再选择此选项';
$string['evenallocation'] = '注意：为了确保分组均衡，每小组的实际成员数可能和您指定的不一致。';
$string['eventgroupcreated'] = '小组已创建';
$string['eventgroupdeleted'] = '小组已删除';
$string['eventgroupingcreated'] = '大组已创建';
$string['eventgroupingdeleted'] = '大组已删除';
$string['eventgroupinggroupassigned'] = '小组已分配到大组';
$string['eventgroupinggroupunassigned'] = '已从大组撤销分配小组';
$string['eventgroupingupdated'] = '大组已更新';
$string['eventgroupmemberadded'] = '小组成员已添加';
$string['eventgroupmemberremoved'] = '小组成员已移除';
$string['eventgroupupdated'] = '小组已更新';
$string['existingmembers'] = '现有成员：{$a}';
$string['filtergroups'] = '过滤小组按：';
$string['group'] = '小组';
$string['groupaddedsuccesfully'] = '小组{$a}添加成功';
$string['groupaddedtogroupingsuccesfully'] = '小组 {$a->groupname} 成功添加到大组 {$a->groupingname}';
$string['groupby'] = '自动创建基于';
$string['groupdescription'] = '小组描述';
$string['groupinfo'] = '关于选定小组的信息';
$string['groupinfomembers'] = '关于选定成员的信息';
$string['groupinfopeople'] = '关于选定人员的信息';
$string['grouping'] = '大组';
$string['grouping_help'] = '大组是课程中几个小组的集合。如果选择了一个大组，属于同一个大组的不同小组的学生可以一起工作。';
$string['groupingaddedsuccesfully'] = '大组{$a}成功添加';
$string['groupingdescription'] = '大组描述';
$string['groupingname'] = '大组名';
$string['groupingnameexists'] = '该大组名“{$a}”在该课程中已存在，请另选一个。';
$string['groupings'] = '大组';
$string['groupingsection'] = '大组访问';
$string['groupingsection_help'] = '大组是课程中几个小组的集合。 如果在此处选择了大组，则只有分配给该大组中各小组的学生才能访问该小节。';
$string['groupingsonly'] = '仅大组';
$string['groupmember'] = '小组成员';
$string['groupmemberdesc'] = '小组中成员的标准角色。';
$string['groupmembers'] = '小组成员';
$string['groupmemberssee'] = '查看小组成员';
$string['groupmembersselected'] = '选定小组的成员';
$string['groupmode'] = '小组模式';
$string['groupmode_help'] = '此设置有三个选项：

* 没有小组
* 分隔小组 - 每个小组的成员都只能看到自己的小组，不能看到其它的小组
* 可视小组 - 每个小组成员都在自己的小组内完成工作，但也可以看到其它小组的情况

在课程级别定义的小组模式会默认成为该课程内所有活动的默认小组模式。每个支持小组的活动也都可以定义自己的小组模式。如果课程设置了强制小组模式，则每个活动的小组模式设置会被忽略。';
$string['groupmodeforce'] = '强制小组模式';
$string['groupmodeforce_help'] = '如果设置了强制小组模式，那么课程中的每个活动都会被设置为课程的小组模式。每个活动自己的小组模式设置将被忽略。';
$string['groupmy'] = '我的小组';
$string['groupname'] = '组名';
$string['groupnameexists'] = '组名{$a}在课程中存在，请另选一个。';
$string['groupnotamember'] = '对不起，您不是此小组成员';
$string['groups'] = '小组';
$string['groupscount'] = '小组（{$a}）';
$string['groupsettingsheader'] = '小组';
$string['groupsgroupings'] = '小组和大组';
$string['groupsinselectedgrouping'] = '小组在：';
$string['groupsnone'] = '没有小组';
$string['groupsonly'] = '仅小组';
$string['groupspreview'] = '小组预览';
$string['groupsseparate'] = '分隔小组';
$string['groupsvisible'] = '可视小组';
$string['grouptemplate'] = '小组@';
$string['hidepicture'] = '隐藏图片';
$string['importgroups'] = '导入小组';
$string['importgroups_help'] = '可以从文本文件导入小组。文件格式如下：

* 文件每行只包含一条记录
* 每条记录是一系列用逗号分隔的数据
* 第一条记录包含字段名列表，定义文件其余部分的格式
* groupname 字段是必需的
* 可选字段有 groupidnumber, description, enrolmentkey, groupingname, enablemessaging';
$string['includeonlyactiveenrol'] = '只包括活跃的选课';
$string['includeonlyactiveenrol_help'] = '如果启用，暂停的用户将不包括在小组中。';
$string['javascriptrequired'] = '该页需要浏览器启用 JavaScript 。';
$string['memberofgroup'] = '小组成员属于：{$a}';
$string['members'] = '每小组成员数量';
$string['membersofselectedgroup'] = '成员属于：';
$string['mygroups'] = '我的小组';
$string['namingscheme'] = '命名规则';
$string['namingscheme_help'] = '符号@可以用来创建名中包含英文字母的小组。例如“小组@”会生成组名“小组A”、“小组B”、“小组C”...

符号#可以用来创建包含数字的小组。例如“小组#”会生成组名“小组1”、“小组2”、“小组3”...';
$string['newgrouping'] = '新大组';
$string['newpicture'] = '新图片';
$string['newpicture_help'] = '选择一个 JPG 或 PNG 格式的图片。此图片将被剪裁为正方形，并调整尺寸为100x100像素。';
$string['noallocation'] = '没有分配';
$string['nogroup'] = '没有小组';
$string['nogrouping'] = '没有大组';
$string['nogroups'] = '该课程还没有设置小组';
$string['nogroupsassigned'] = '没有分配小组';
$string['nopermissionforcreation'] = '不能创建小组“{$a}”，因为您没有相应的权限。';
$string['nosmallgroups'] = '防止最后一个小组太小';
$string['notingroup'] = '忽略小组中的用户';
$string['notingrouping'] = '[不在大组中]';
$string['notingrouplist'] = '[不在小组中]';
$string['nousersinrole'] = '在选定的角色中，没有合适的用户';
$string['number'] = '小组/成员数量';
$string['numgroups'] = '小组数量';
$string['nummembers'] = '每小组成员数量';
$string['othergroups'] = '其他小组';
$string['overview'] = '概览';
$string['potentialmembers'] = '可选成员：{$a}';
$string['potentialmembs'] = '可选成员';
$string['printerfriendly'] = '打印显示';
$string['privacy:metadata:core_message'] = '小组对话';
$string['privacy:metadata:groups'] = '小组成员记录。';
$string['privacy:metadata:groups:groupid'] = '小组 ID。';
$string['privacy:metadata:groups:timeadded'] = '显示用户何时添加到小组的时间戳。';
$string['privacy:metadata:groups:userid'] = '与小组关联的用户的 ID。';
$string['random'] = '随机地';
$string['removefromgroup'] = '从小组{$a}中移除用户';
$string['removefromgroupconfirm'] = '您确定要从小组“{$a->group}”中移除用户“{$a->user}”吗？';
$string['removegroupfromselectedgrouping'] = '从大组中移除小组';
$string['removegroupingsmembers'] = '从大组中移除所有小组';
$string['removegroupsmembers'] = '移除所有小组成员';
$string['removeselectedusers'] = '移除选定的用户';
$string['selectfromgroup'] = '从小组中选择成员';
$string['selectfromgrouping'] = '从大组中选择成员';
$string['selectfromrole'] = '从角色中选择成员';
$string['showgroupsingrouping'] = '显示大组中的小组';
$string['showmembersforgroup'] = '显示小组成员';
$string['toomanygroups'] = '用户不足，无法填充此数量的小组 - 所选角色中只有{$a}个用户。';
$string['usercount'] = '用户数量';
$string['usercounttotal'] = '用户数量({$a})';
$string['usergroupmembership'] = '选定用户的所在小组：';
