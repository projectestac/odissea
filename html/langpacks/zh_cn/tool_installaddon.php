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
 * Strings for component 'tool_installaddon', language 'zh_cn', version '4.4'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = '确认';
$string['acknowledgementtext'] = '我明白在安装其他插件之前，我有责任对本网站进行完整备份。我接受并理解插件（特别是但不仅仅是那些源自非官方来源的插件）可能包含安全漏洞，可能使网站不可用，或导致私人数据泄漏或丢失。';
$string['featuredisabled'] = '网站已经关闭了插件安装器';
$string['installaddon'] = '安装插件！';
$string['installaddons'] = '安装插件';
$string['installfromrepo'] = '从Moodle插件目录安装插件';
$string['installfromrepo_help'] = '您将被重定向到Moodle插件目录以搜索和安装插件。请注意，您的站点全名、URL和Moodle版本也将被发送，以使安装过程更简单。';
$string['installfromzip'] = '从ZIP文件中安装插件';
$string['installfromzip_help'] = '直接从Moodle插件目录中安装插件的另一种方法是上传该插件的ZIP包。这个ZIP包的结构应该与从Moodle插件目录中下载的包相同。';
$string['installfromzipfile'] = 'ZIP包';
$string['installfromzipfile_help'] = '这个插件ZIP压缩包必须包含恰好一个目录，其名称要符合插件。压缩包里的内容将会被释放到符合插件类型的适当位置 。若这个压缩包已经从Moodle插件目录被下载，那它将会有这一个结构。';
$string['installfromzipinvalid'] = '插件ZIP包必须只包含一个目录，命名为与插件名称匹配的名称。提供的文件不是有效的插件ZIP包。';
$string['installfromziprootdir'] = '重命名根目录';
$string['installfromziprootdir_help'] = '某些ZIP包（如Github生成的ZIP包）可能包含不正确的根目录名。如果是，请在此处输入正确的名称。';
$string['installfromzipsubmit'] = '从这个ZIP文件安装插件';
$string['installfromziptype'] = '插件类型';
$string['installfromziptype_help'] = '对于正确阐明组件名称的插件，安装程序能够自动检测插件类型。如果自动检测失败，请手动选择正确的插件类型。警告：如果指定的插件类型不正确，安装过程可能会失败。';
$string['installfromziptype_link'] = 'Development:Plugins';
$string['permcheck'] = '确保插件类型根位置可由web服务器进程写入。';
$string['permcheckerror'] = '检查写入权限时出错';
$string['permcheckprogress'] = '检查写入权限...';
$string['permcheckrepeat'] = '再次检查';
$string['permcheckresultno'] = '插件类型目录<em>{$a->path}</em>不可写';
$string['permcheckresultyes'] = '插件类型目录 <em>{$a->path}</em>可写';
$string['pluginname'] = '插件安装器';
$string['privacy:metadata'] = '插件安装程序插件不存储任何个人数据。';
$string['remoterequestalreadyinstalled'] = '这里有一个请求要从这个网站的Moodle插件目录安装插件{$a->name} ({$a->component}) 版本 {$a->version} 。然而，这个插件 <strong>已经安装</strong> 在这个网站上。';
$string['remoterequestconfirm'] = '这里有一个请求要从这个网站的Moodle插件目录安装插件<strong>{$a->name} </strong> ({$a->component}) 版本 {$a->version} 。若你继续，这个插件 ZIP 文件将会被下载检查。目前还不会安装任何东西。';
$string['remoterequestinvalid'] = '有人请求在此站点上的Moodle插件目录中安装插件。请求无效，因此无法安装插件。';
$string['remoterequestnoninstallable'] = '这里有一个请求要从这个网站的Moodle 插件目录中安装插件{$a->name} ({$a->component}) 版本 {$a->version} 。然而，在插件安装的预先检查程序是失败的(请求代码：{$a->reason})';
$string['remoterequestpermcheck'] = '这里有一个请求要从这个网站的Moodle插件目录安装插件<strong>{$a->name} </strong> ({$a->component}) 版本 {$a->version} 。然而，这个插件类型的位置<strong>{$a->typepath}</strong>是<strong>不可写的</strong>。

你需要给给予这个网站服务器用户有对插件类型目录有写权限，然后按下“继续”按钮来重复这个检查。';
$string['remoterequestpluginfoexception'] = '哎呀... 在试图获取{$a->name}（{$a->component}）版本{$a->version}的插件信息时发生错误。该插件无法被安装。请打开调试模式，查看错误详情。';
$string['typedetectionfailed'] = '无法检测到插件的类型。请手动选择插件类型。';
$string['typedetectionmismatch'] = '所选插件类型与插件声明的类型不匹配：{$a}';
