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
 * Strings for component 'groupselect', language 'zh_cn', version '4.4'.
 *
 * @package     groupselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '行动';
$string['assignedteacher'] = '指导教师';
$string['assigngroup'] = '指定小组指导教师';
$string['assigngroup_help'] = '如果设置了，有按钮可以为小组指定指导教师（如果课程有指导教师）。指定的指导教师不是组成员，但导出和成员列表（如果设置了显示）里会列出指导教师。 如果课程有助手管理小组，这项功能非常有用。 可以在角色功能里进一步设置这个权限。';
$string['cannotselectclosed'] = '你不能成为这个组的成员了。';
$string['cannotselectmaxed'] = '你不能加入{$a} 组了，这个组已经达到人数上限了。';
$string['cannotselectnocap'] = '你不能选择组。';
$string['cannotselectnoenrol'] = '要想加入一个组，必须先选课。';
$string['cannotunselectclosed'] = '你不能退出组了';
$string['creategroup'] = '设置一个新组';
$string['deleteallgrouppasswords'] = '删除所有组的密码';
$string['deleteemptygroups'] = '如果组里再没有组员了，就删除这个组';
$string['deleteemptygroups_help'] = '如果设置这个选项，当最后一个组员退出组后自动删除组';
$string['description'] = '组的说明';
$string['duedate'] = '截止日期';
$string['edittooltip'] = '点击以便进行编辑';
$string['enablepermissions'] = '标准权限';
$string['eventexportlinkcreated'] = '输出链接已生成';
$string['eventgroupteacheradded'] = '已添加指导教师';
$string['export'] = '为组数据文件（CSV格式）生成一个下载链接';
$string['export_download'] = '下载CSV文件';
$string['fromallgroups'] = '全部组';
$string['globalpassword_help'] = '设置一个加入组的全局密码，这会覆盖组员设置的密码。';
$string['groupid'] = '组编号';
$string['groupselect:addinstance'] = '添加一个新的自行分组模块';
$string['groupselect:assign'] = '允许为各个组指定指导教师';
$string['groupselect:create'] = '允许设置新组';
$string['groupselect:export'] = '允许导出组成员';
$string['groupselect:select'] = '允许加入组';
$string['groupselect:unselect'] = '允许离开组';
$string['hidefullgroups'] = '在主列表里隐藏已经满员的组';
$string['hidefullgroups_help'] = '如果设置了此项，在组列表中隐藏所有满员的组（包括用户所在的组），对于有很多组的情况下可能会非常有用。';
$string['hidegroupmembers'] = '对学生隐藏组成员';
$string['hidegroupmembers_help'] = '如果设置了此项，会对学生隐藏全部组的成员。如果学生有管理组的权限，这一选项会失效，组成员始终会显示出来。';
$string['hidesuspendedstudents'] = '隐藏被暂停的用户';
$string['hidesuspendedstudents_help'] = '如果选中此项，被暂停的用户会被移出用户计数和组列表';
$string['incorrectpassword'] = '不正确的密码';
$string['managegroups'] = '管理组';
$string['maxcharlenreached'] = '已达到了最大的字符数量限制';
$string['maxgroupmembership'] = '能参加的组最大数量';
$string['maxgroupmembership_error_low'] = '不允许负数！';
$string['maxgroupmembership_help'] = '有参加的组的最大数量。0表示不能参加任何组。';
$string['maxlimitreached'] = '已达最大数量限制。';
$string['maxmembers'] = '每个组最多成员数量';
$string['maxmembers_error_low'] = '不能填写负数！0表示无限制。';
$string['maxmembers_error_smaller_minmembers'] = '需要大于每个组的最少参与人数。';
$string['maxmembers_help'] = '每个组的最多成员数量。0表示没有限制。';
$string['maxmembers_icon'] = '组成员太多了';
$string['maxmembers_notification'] = '你选择的组成员太多了。最多成员数量为{$a}。';
$string['member'] = '成员';
$string['membercount'] = '计数';
$string['membershidden'] = '用户列表不可用';
$string['memberslist'] = '成员';
$string['minmembers'] = '每个组最少成员数';
$string['minmembers_error_bigger_maxmembers'] = '最少成员数要小于每个组最大的可参与人数。';
$string['minmembers_error_low'] = '不能填定负数。0表示禁用。';
$string['minmembers_help'] = '每个组的最少成员数量。低于此限制会给组成员发通知，默认是0（表示禁用）。';
$string['minmembers_icon'] = '组内成员数量比要求的少。';
$string['minmembers_notification'] = '你所在的组成员数量比要求的少。最少数量是{$a}。';
$string['miscellaneoussettings'] = '其他设置';
$string['modulename'] = '自选组';
$string['modulename_help'] = '让参与人员可以自行建立或选择参加组。主要功能：

* 参与人员可以建立一个组，需要的话还可以设置组密码。
* 参与人员可以选择并加入一个组。
* 每个组可以指定管理员。
* 教师可以导出组（csv格式）。
* 完全兼容moodle群组，组可以由其他方式建立 ，支持分组交作业等等。';
$string['modulename_link'] = 'mod/groupselect/view';
$string['modulenameplural'] = '自选组';
$string['nogroups'] = '没有可用于选择的组。';
$string['notavailableanymore'] = '选择组不再可用 (自从 {$a})。';
$string['notavailableyet'] = '选择组将在 {$a}可用。';
$string['notifyexpiredselection'] = '显示信息，直到开放到期';
$string['notifyexpiredselection_help'] = '如果设置此项，会显示一条消息直到开放到期。';
$string['ok'] = '好';
$string['password'] = '需要密码';
$string['pluginadministration'] = '模块管理';
$string['pluginname'] = '自选组';
$string['privacy:metadata'] = '自选组插件不保存任何个人数据。';
$string['removeallsupervisors'] = '删除组管理员';
$string['saving'] = '保存中...';
$string['select'] = '成为组 {$a}的成员。';
$string['selectconfirm'] = '真的要加入组<em>{$a}</em>？';
$string['selectgroupaction'] = '选择组';
$string['showassignedteacher'] = '显示指定的管理员';
$string['showassignedteacher_help'] = '如果设置了此项，指定管理员会在组成员中显示。对于组成员需要知道小组指导老师的情况下很有用。';
$string['studentcancreate'] = '参与人员可建立组';
$string['studentcancreate_help'] = '如果设置了此项，没有加入现有组的参与人员可以建立新组。这个权限可以在角色权限中设置更多的参数。';
$string['studentcanjoin'] = '参与人员可加入组';
$string['studentcanjoin_help'] = '如果设置了此项，参与人员可以加入组。这个权限可以在角色权限中设置更多的参数。';
$string['studentcanleave'] = '参与人员可以自行退组';
$string['studentcanleave_help'] = '如果设置了此项，参与人员可以自行退组。这个权限可以在角色权限中设置更多的参数。';
$string['studentcansetdesc'] = '参与人员可以设置和修改组描述';
$string['studentcansetdesc_help'] = '如果设置了此项，参与人员可以在建立组或之后设置组描述，';
$string['studentcansetenrolmentkey'] = '参与人员可以设置加入组的密码';
$string['studentcansetenrolmentkey_help'] = '如果设置了此项，加入组需要输入密码。';
$string['studentcansetgroupname'] = '参与人员可以设置新组的名称';
$string['studentcansetgroupname_help'] = '如果设置了此项，参与人员能设置新组的名称。';
$string['supervisionrole'] = '管理员角色';
$string['supervisionrole_help'] = '定义管理员角色（通常是无编辑权教师）。';
$string['targetgrouping'] = '分组时选择组';
$string['timeavailable'] = '开放自';
$string['timeavailable_error_past_timedue'] = '开始日期不能晚于结日期。';
$string['timedue'] = '开放直到';
$string['timedue_error_pre_timeavailable'] = '结束日期不能早于开始日期。';
$string['unassigngroup'] = '取消指定组管理员';
$string['unassigngroup_confirm'] = '此操作会取消指定组管理员，确定不？';
$string['unselect'] = '退出组{$a}';
$string['unselectconfirm'] = '确定要退出组 <em>{$a}</em>？';
