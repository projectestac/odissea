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
 * Strings for component 'report_performance', language 'zh_cn', version '4.5'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = '自动备份';
$string['check_backup_comment_disable'] = '备份过程可能会影响网站性能。若启用，备份应该安排在非高峰时段。';
$string['check_backup_comment_enable'] = '备份过程可能会影响网站性能。备份应该安排在非高峰时段。';
$string['check_backup_details'] = '启用自动备份，在你指定的时间系统自动将所有课程进行备份到压缩文件。备份过程中，会消耗更多系统资源影响性能。';
$string['check_cachejs_comment_disable'] = '若启用，页面加载性能会改进。';
$string['check_cachejs_comment_enable'] = '若关闭，页面加载性能可能变慢。';
$string['check_cachejs_details'] = '对Javascript缓存并压缩，会大大提高网页加载速度。我们强烈建议在生产环境中使用此功能。';
$string['check_dbschema_errors'] = '数据库架构未对齐。';
$string['check_dbschema_name'] = '数据库架构检查';
$string['check_dbschema_ok'] = '数据库架构正确';
$string['check_debugmsg_comment_developer'] = '如果设置为开发者以外其他项，性能可能会有所改进。';
$string['check_debugmsg_comment_nodeveloper'] = '如果设置为开发者，性能可能略受影响。';
$string['check_debugmsg_details'] = '除非开发人员要求，否则进入开发人员级别很少有任何优势。<p>获得错误消息并将其复制并粘贴到某个位置后，强烈建议将 Debug 切换回 NONE。调试消息可以为黑客提供有关您网站设置的线索，并可能影响性能。</p>';
$string['check_enablestats_comment_disable'] = '统计处理过程可能影响性能。若启用，统计设置要小心。';
$string['check_enablestats_comment_enable'] = '统计处理过程可能影响性能。统计设置要小心。';
$string['check_enablestats_details'] = '若启用，它将定期处理日志并进行统计。若你的网站访问量较大，可能需要更多时间。<p>在统计过程中，会消耗更多服务器资源从而可能影响性能。</p>';
$string['check_themedesignermode_comment_disable'] = '若启用，不会缓存图像和样式文件，从而造成性能显著降低。';
$string['check_themedesignermode_comment_enable'] = '若关闭，会缓存图像和样式文件，从而有效改进性能。';
$string['check_themedesignermode_details'] = '通常会造成Moodle网站运行缓慢。<p>若启用主题开发模式，Moodle网站运行占用CPU时间很可能是原来的两倍。<p>';
$string['comments'] = '评论';
$string['disabled'] = '关闭';
$string['edit'] = '编辑';
$string['enabled'] = '启用';
$string['issue'] = '问题';
$string['morehelp'] = '更多说明';
$string['performance:view'] = '查看性能报告';
$string['performancereportdesc'] = '这份报告将列出可能影响网站{$a}性能的问题。';
$string['pluginname'] = '性能综览';
$string['privacy:metadata'] = '性能概览插件不存储任何个人数据。';
$string['value'] = '数值';
