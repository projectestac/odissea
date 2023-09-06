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
 * Strings for component 'mnetservice_enrol', language 'zh_cn', version '4.1'.
 *
 * @package     mnetservice_enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablecourseson'] = '{$a}上的可用课程';
$string['availablecoursesonnone'] = '远程主机<a href="{$a->hosturl}">{$a->hostname}</a>不向我们的用户提供任何课程。';
$string['clientname'] = '远程选课客户';
$string['clientname_help'] = '用此工具，您可以让您的本地用户在允许通过“MNet 远程选课”插件选课的远程主机上选课。';
$string['editenrolments'] = '修改选课方式';
$string['hostappname'] = '应用程序';
$string['hostname'] = '主机名';
$string['hosturl'] = '远程主机 URL';
$string['nopublishers'] = '没有可用的远程伙伴。';
$string['noroamingusers'] = '选修远程课程的用户必须在系统场景下有“{$a}”权限。但是，目前没有用户有此权限。点击继续按钮为您网站的一个或多个角色分配此权限。';
$string['otherenrolledusers'] = '其他注册用户';
$string['pluginname'] = '远程选课服务';
$string['privacy:metadata:mnetservice_enrol_enrolments'] = '远程注册服务';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltime'] = '注册被更改的时间';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltype'] = '远程服务器上用于为用户注册课程的注册类型';
$string['privacy:metadata:mnetservice_enrol_enrolments:hostid'] = '远程MNet主机的ID';
$string['privacy:metadata:mnetservice_enrol_enrolments:remotecourseid'] = '远程服务器上课程的ID';
$string['privacy:metadata:mnetservice_enrol_enrolments:rolename'] = '远程服务器上角色的名称';
$string['privacy:metadata:mnetservice_enrol_enrolments:tableexplanation'] = '远程注册服务存储本地用户在远程主机上注册课程的信息。';
$string['privacy:metadata:mnetservice_enrol_enrolments:userid'] = '此服务器上本地用户的ID';
$string['refetch'] = '从远程主机重新获取更新的状态';
