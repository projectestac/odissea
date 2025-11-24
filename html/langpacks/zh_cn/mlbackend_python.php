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
 * Strings for component 'mlbackend_python', language 'zh_cn', version '4.5'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = '服务器配置不完整。';
$string['errorserver'] = '服务器错误{$a}';
$string['host'] = '主机';
$string['hostdesc'] = '主机';
$string['packageinstalledshouldbe'] = 'moodlemlbackend Python包应被更新。所需版本为“{$a->required}”，安装版本为“{$a->installed}”。';
$string['packageinstalledtoohigh'] = 'moodlemlbackend Python包与此版本的Moodle不兼容。所需版本为“{$a->required}”或更高版本（只要它与API兼容）。安装的版本“{$a->installed}”太高。';
$string['password'] = '密码';
$string['passworddesc'] = '用作Moodle服务器和Python服务器之间通信的密码的字符串。';
$string['pluginname'] = '机器学习Python后端';
$string['port'] = '端口';
$string['portdesc'] = '端口';
$string['privacy:metadata'] = 'Python机器学习后端插件不存储任何个人数据。';
$string['pythonpackagenotinstalled'] = 'moodlemlbackend Python包未安装或存在问题。有关详细信息，请从命令行界面执行“{$a}”。';
$string['pythonpathnotdefined'] = '尚未定义可执行Python二进制文件的路径。请访问“{$a}”进行设置。';
$string['secure'] = '使用HTTPS';
$string['securedesc'] = '是否使用HTTP或HTTPS。';
$string['serversettingsinfo'] = '如果启用“使用服务器”，将显示服务器设置。';
$string['tensorboardinfo'] = '通过在web服务器中键入TensorBoard--logdir=\'{$a}\'，从命令行启动TensorBoard。';
$string['username'] = '用户名';
$string['usernamedesc'] = '用作Moodle服务器和Python服务器之间通信的用户名的字符串。';
$string['useserver'] = '使用服务器';
$string['useserverdesc'] = '机器学习后端Python包不是安装在web服务器上，而是安装在不同的服务器上。';
