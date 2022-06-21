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
 * Strings for component 'antivirus_clamav', language 'zh_cn', version '3.11'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = '目前防病毒扫描存在问题。您的文件{$a->item}尚未上传。请稍后再试。';
$string['clamfailed'] = 'Clam AV运行失败。返回的错误信息是{$a}。下面是Clam的输出:';
$string['clamfailureonupload'] = 'ClamAV上传失败';
$string['configclamactlikevirus'] = '文件疑似病毒';
$string['configclamdonothing'] = '文件正常';
$string['configclamfailureonupload'] = '如果您已经配置了使用ClamAV扫描上传的文件，但它的配置不正确或未能运行等出现一些未知原因时，它应该如何表现？如果您选择“文件疑似病毒”，那么文件将被转移到隔离区或删除。如果您选择“文件正常”，文件将被移动到目标目录。无论哪种方式，管理员会警告文件上传失败。如果你选择把“文件疑似病毒”和某些原因ClamAV无法运行（通常是因为你输入了一个无效的ClamAV文件夹），所有上传文件将被移动到隔离区或被删除。小心这个设置。';
$string['configclamtryagain'] = '拒绝上传，请重试';
$string['errorcantopensocket'] = '连接到Unix域名套接字导致错误{$a}';
$string['errorclamavnoresponse'] = 'ClamAV 没有反应；请检查 daemon 执行状态';
$string['errornounixsocketssupported'] = '这个系统不支持Unix域名套接字的传输。请使用"命令行"的选项代替。';
$string['invalidpathtoclam'] = 'Moodle已经被配置为运行clam对上传的文件进行检查，但提供给Clam AV的路径 {$a} 是非法的。';
$string['pathtoclam'] = '命令行';
$string['pathtoclamdesc'] = '若执行方式设置为"命令行"，请在此输入ClamAV的路径。在Linux，它应该像  /usr/bin/clamscan 或 /usr/bin/clamdscan。';
$string['pathtounixsocket'] = 'Unix域名套接字';
$string['pathtounixsocketdesc'] = '若执行方式设置为 "Unix域名套接字"，请在此输入 ClamAV Unix的套接字。 在Debian Linux 这里可能是 /var/run/clamav/clamd.ctl。请确定 clamav daemon 对于上传的文件有读取权限，最简单的方式是添加一个用户 \\\'clamav\\\' 到你的服务器群组 (\\\'www-data\\\' on Debian Linux)。';
$string['pluginname'] = 'ClamAV 防病毒软件';
$string['privacy:metadata'] = 'ClamAV 防病毒插件不储存任何私人数据。';
$string['quarantinedir'] = '隔离文件夹';
$string['runningmethod'] = '运行方法';
$string['runningmethodcommandline'] = '命令行';
$string['runningmethoddesc'] = '执行ClamAV的方式。默认使用"命令行"，但在Unix系统上，使用系统套接字可以得到更好的性能表现';
$string['runningmethodtcpsocket'] = 'TCP 套接字';
$string['runningmethodunixsocket'] = 'Unix域名套接字';
$string['tcpsockethost'] = 'TCP套接字主机名';
$string['tcpsockethostdesc'] = 'ClamAV服务器的域名';
$string['tcpsocketport'] = 'TCP套接字端口';
$string['tcpsocketportdesc'] = '连接到ClamAV时要使用的端口';
$string['tries'] = '扫描尝试';
$string['tries_desc'] = '如果扫描过程中出现错误，ClamAV进行的尝试次数。';
$string['tries_notice'] = 'Clamav扫描尝试了 {$a->tries} 次。
 {$a->notice}';
$string['unknownerror'] = 'clam发生了未知错误。';
