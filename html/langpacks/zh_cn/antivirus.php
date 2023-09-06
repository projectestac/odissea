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
 * Strings for component 'antivirus', language 'zh_cn', version '4.1'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = '可用防病毒插件';
$string['antiviruscommonsettings'] = '通用防病毒设置';
$string['antiviruses'] = '防病毒插件';
$string['antivirussettings'] = '管理防病毒插件';
$string['configantivirusplugins'] = '请选择你希望使用的防病毒插件，并在应用中使用。';
$string['dataerrordesc'] = '发生数据扫描程序错误。';
$string['dataerrorname'] = '数据扫描程序错误。';
$string['datainfecteddesc'] = '检测到感染数据';
$string['datainfectedname'] = '数据被感染';
$string['datastream'] = '数据';
$string['emailadditionalinfo'] = '从病毒引擎返回的其他详细信息：';
$string['emailauthor'] = '上传者：';
$string['emailcontenthash'] = '内容hash：';
$string['emailcontenttype'] = '内容类型：';
$string['emaildate'] = '上传日期：';
$string['emailfilename'] = '文件名：';
$string['emailfilesize'] = '文件尺寸：';
$string['emailgeoinfo'] = '地理位置：';
$string['emailinfectedfiledetected'] = '检测到受感染的文件';
$string['emailipaddress'] = 'IP地址：';
$string['emailreferer'] = '引用：';
$string['emailreport'] = '报告：';
$string['emailscanner'] = '扫描器：';
$string['emailscannererrordetected'] = '发生扫描器错误';
$string['emailsubject'] = '{$a} :: 防病毒通知';
$string['enablequarantine'] = '启用隔离';
$string['enablequarantine_help'] = '如果启用，任何被检测为病毒的文件都将放置在隔离文件夹 ([dataroot]/{$a}) 中以供以后检查。 上传到 Moodle 将失败。 如果您进行了任何文件系统级别的病毒扫描，则应从防病毒检查中排除隔离文件夹，以避免检测到隔离文件。';
$string['fileerrordesc'] = '发生文件扫描程序错误。';
$string['fileerrorname'] = '文件扫描程序错误。';
$string['fileinfecteddesc'] = '检测到受感染的文件。';
$string['fileinfectedname'] = '文件被感染';
$string['notifyemail'] = '防病毒警报通知电子邮件';
$string['notifyemail_help'] = '检测到病毒时的通知电子邮件地址。 如果留空，则将向所有站点管理员发送通知。';
$string['notifylevel'] = '通知级别';
$string['notifylevel_help'] = '要通知的不同级别的信息';
$string['notifylevelerror'] = '检测到威胁和扫描程序错误';
$string['notifylevelfound'] = '仅检测到威胁';
$string['privacy:metadata'] = '反病毒系统不会存储任何个人信息。';
$string['quarantinedfiles'] = '防病毒隔离文件';
$string['quarantinedisabled'] = '隔离已禁用。 不存储文件。';
$string['quarantinetime'] = '最长隔离时间';
$string['quarantinetime_desc'] = '超过指定期限的隔离文件将被删除。';
$string['taskcleanup'] = '清理隔离的文件。';
$string['threshold'] = '状态检查阈值';
$string['threshold_desc'] = '根据{$a}中报告的先前结果检查错误等的时间。';
$string['unknown'] = '未知';
$string['virusfound'] = '病毒检查器发现{$a->item}已被病毒感染！';
