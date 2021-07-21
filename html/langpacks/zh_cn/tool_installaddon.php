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
 * Strings for component 'tool_installaddon', language 'zh_cn', version '3.11'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['featuredisabled'] = '网站已经关闭了插件安装器';
$string['installaddon'] = '安装插件！';
$string['installaddons'] = '安装插件';
$string['installfromrepo'] = '从Moodle插件目录安装插件';
$string['installfromzip'] = '从ZIP文件中安装插件';
$string['installfromzipfile'] = 'ZIP包';
$string['installfromzipfile_help'] = '这个插件ZIP压缩包必须包含恰好一个目录，其名称要符合插件。压缩包里的内容将会被释放到符合插件类型的适当位置 。若这个压缩包已经从Moodle插件目录被下载，那它将会有这一个结构。';
$string['installfromziprootdir'] = '重命名根目录';
$string['installfromzipsubmit'] = '从这个ZIP文件安装插件';
$string['installfromziptype'] = '插件类型';
$string['permcheckprogress'] = '检查写入权限...';
$string['permcheckresultno'] = '插件类型目录<em>{$a->path}</em>不可写';
$string['permcheckresultyes'] = '插件类型目录 <em>{$a->path}</em>可写';
$string['pluginname'] = '插件安装器';
$string['remoterequestalreadyinstalled'] = '这里有一个请求要从这个网站的Moodle插件目录安装插件{$a->name} ({$a->component}) 版本 {$a->version} 。然而，这个插件 <strong>已经安装</strong> 在这个网站上。';
$string['remoterequestconfirm'] = '这里有一个请求要从这个网站的Moodle插件目录安装插件<strong>{$a->name} </strong> ({$a->component}) 版本 {$a->version} 。若你继续，这个插件 ZIP 文件将会被下载检查。目前还不会安装任何东西。';
$string['remoterequestnoninstallable'] = '这里有一个请求要从这个网站的Moodle 插件目录中安装插件{$a->name} ({$a->component}) 版本 {$a->version} 。然而，在插件安装的预先检查程序是失败的(请求代码：{$a->reason})';
$string['remoterequestpermcheck'] = '这里有一个请求要从这个网站的Moodle插件目录安装插件<strong>{$a->name} </strong> ({$a->component}) 版本 {$a->version} 。然而，这个插件类型的位置<strong>{$a->typepath}</strong>是<strong>不可写的</strong>。

你需要给给予这个网站服务器用户有对插件类型目录有写权限，然后按下“继续”按钮来重复这个检查。';
