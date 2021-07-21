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
 * Strings for component 'enrol_manual', language 'zh_cn', version '3.11'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alterstatus'] = '修改状态';
$string['altertimeend'] = '修改结束时间';
$string['altertimestart'] = '修改开始时间';
$string['assignrole'] = '分配角色';
$string['browsecohorts'] = '浏览群';
$string['browseusers'] = '浏览用户';
$string['confirmbulkdeleteenrolment'] = '你确信要删除该用户的选课吗？';
$string['defaultperiod'] = '缺省保持选课时长';
$string['defaultperiod_desc'] = '选课有效的缺省时间长度（单位秒）。如果此时间设置为零，选课持续时间将会按默认不加以限制。';
$string['defaultperiod_help'] = '默认的用户身份有效期长度，从用户自行加入课程之日算起。禁止此选项意味着默认用户身份永久有效。';
$string['defaultstart'] = '默认选课开始';
$string['deleteselectedusers'] = '删除被选中用户的选课';
$string['editselectedusers'] = '编辑选中用户的选课';
$string['enrolledincourserole'] = '以"{$a->role}"身份选修 "{$a->course}"。';
$string['enrolusers'] = '加入用户';
$string['enroluserscohorts'] = '为所选用户及群组选课';
$string['expiredaction'] = '选课到期行动';
$string['expiredaction_help'] = '选择当用户选课之后要执行的操作。注意：当课程结束之后，某些用户资料和设置会被清除。';
$string['expirymessageenrolledbody'] = '亲爱的{$a->user}，

通知您于{$a->course}课程的选课将于{$a->timeend}到期。

如你需要协助，请联系{$a->enroller}';
$string['expirymessageenrolledsubject'] = '选课截止通知';
$string['expirymessageenrollerbody'] = '以下用户对{$a->course}的选课将于{$a->threshold}后到期：

{$a->users}

如需延期，请至{$a->extendurl}';
$string['expirymessageenrollersubject'] = '选课截止通知';
$string['manual:config'] = '配置人工选课实例';
$string['manual:enrol'] = '加入用户';
$string['manual:manage'] = '管理用户选课';
$string['manual:unenrol'] = '撤销用户的选课';
$string['manual:unenrolself'] = '撤销自己的选课';
$string['manualpluginnotinstalled'] = '“人工选课”插件没有安装';
$string['messageprovider:expiry_notification'] = '人工选课截止通知';
$string['now'] = '现在';
$string['pluginname'] = '人工选课';
$string['pluginname_desc'] = '通过人工选课插件，有权限的用户（例如教师）可以在课程管理设置中的一个链接里手工为其它用户选课。此插件通常都是启用的，因为有其它插件（比如自助选课）需要调用它。';
$string['selectcohorts'] = '选择群组';
$string['selectusers'] = '选择用户';
$string['status'] = '启用人工选课';
$string['status_desc'] = '允许内部选课的用户访问课程。大多数情况都应该启用这个选项。';
$string['status_help'] = '此设置决定用户是否可以被人工选课。教师等有权限的用户可以在课程管理设置中的一个链接里人工选择用户，加入课程。';
$string['statusdisabled'] = '已禁用';
$string['statusenabled'] = '已启用';
$string['unenrol'] = '撤销选课';
$string['unenrolselectedusers'] = '撤销选定用户的选课';
$string['unenrolselfconfirm'] = '您确定要撤销您自己对“{$a}”课程的选课吗？';
$string['unenroluser'] = '您确定要撤销用户“{$a->user}”对“{$a->course}”课程的选课吗？';
$string['unenrolusers'] = '撤销用户选课';
$string['wscannotenrol'] = '插件实例不能手动把一个用户加入id = {$a->courseid}}的课程';
$string['wsnoinstance'] = '对于课程（id = {$a->courseid}），手动选课插件实例不存在或者被禁用';
$string['wsusercannotassign'] = '您在课程({$a->courseid})中没有权限为用户({$a->userid})指定这一角色({$a->roleid})。';
