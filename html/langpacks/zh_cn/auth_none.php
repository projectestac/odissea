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
 * Strings for component 'auth_none', language 'zh_cn', version '3.11'.
 *
 * @package     auth_none
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_nonedescription'] = '用户可以进入本系统并立刻创建一个有效帐号，不需要任何在外部服务器做任何身份认证，也不需要email确认。慎用该方法——因为它会带来安全和管理上的问题。';
$string['checknoauthdetails'] = '<p><em>不认证身份</em>插件不是给正式网站设计的。除非这是一个开发测试网站，否则请禁用它。</p>';
$string['checknoautherror'] = '不认证身份插件不能在正式网站使用。';
$string['checknoauthok'] = '不认证身份插件已禁用。';
$string['pluginname'] = '不认证身份';
$string['privacy:metadata'] = '免登录插件不存储任何个人数据。';
