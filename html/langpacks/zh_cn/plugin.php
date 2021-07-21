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
 * Strings for component 'plugin', language 'zh_cn', version '3.11'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '行为';
$string['availability'] = '可用性';
$string['checkforupdates'] = '检查可用的更新';
$string['checkforupdateslast'] = '最近一次检查是在 {$a}';
$string['dependencyinstall'] = '安装';
$string['dependencyupload'] = '上传';
$string['detectedmisplacedplugin'] = '插件 "{$a->component}" 被安装在错误的位置 "{$a->current}", 期望的位置是在 "{$a->expected}"';
$string['displayname'] = '插件名称';
$string['err_response_curl'] = '不能获取到可用的更新数据-发生意外cURL模块错误。';
$string['err_response_format_version'] = '返回非预期的版本号，请重新检查可用更新';
$string['err_response_http_code'] = '不能获取到可用的更新数据-不可知的HTTP响应代码。';
$string['filterall'] = '显示全部';
$string['filtercontribonly'] = '只显示额外的插件';
$string['filterupdatesonly'] = '只显示可用的更新';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = '没有安装这类插件';
$string['notdownloadable'] = '不能下载这个安装包';
$string['notdownloadable_help'] = 'ZIP更新包不能自动下载。请参阅文档页面获取更多帮助。';
$string['notes'] = '笔记';
$string['notwritable'] = '插件的文件不可写';
$string['notwritable_help'] = '您已启用自动更新的部署，并且已有一个可用更新。然而在你的Web服务器，插件文件不可写，因此无法自动安装更新。
你需要把插件文件夹及其所有内容设置可写权限，然后就可以安装自动更新。';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = '所有插件';
$string['overviewext'] = '额外的插件';
$string['plugincheckall'] = '所有插件';
$string['plugincheckattention'] = '需要注意的插件';
$string['pluginchecknone'] = '现在没有插件需要你注意';
$string['pluginchecknotice'] = '可以在升级过程中，本页显示的插件需要你的关注。突出显示的项目包括新的插件，将要安装的插件，更新，要升级，任何丢失的插件。如果有可用的更新，额外的插件都会这被标记。建议您检查是否有最新的插件版本和更新的源代码，再继续这个Moodle升级。';
$string['plugindisable'] = '禁用';
$string['plugindisabled'] = '已禁用';
$string['pluginenable'] = '启用';
$string['pluginenabled'] = '已启用';
$string['release'] = '发布';
$string['requiredby'] = '所要求的：{$a}';
$string['requires'] = '要求';
$string['rootdir'] = '目录';
$string['settings'] = '设置';
$string['source'] = '来源';
$string['sourceext'] = '额外';
$string['sourcestd'] = '标准';
$string['status'] = '状态';
$string['status_delete'] = '将要被删除';
$string['status_downgrade'] = '更高版本已经被安装';
$string['status_missing'] = '缺少磁盘！';
$string['status_new'] = '将要安装';
$string['status_nodb'] = '没有数据库';
$string['status_upgrade'] = '将要升级';
$string['status_uptodate'] = '安装';
$string['systemname'] = '标识';
$string['type_antivirus_plural'] = '防病毒插件';
$string['type_auth'] = '认证方法';
$string['type_auth_plural'] = '认证方法集';
$string['type_availability'] = '可用性限制';
$string['type_availability_plural'] = '可用性限制';
$string['type_block'] = '版块';
$string['type_block_plural'] = '版块';
$string['type_cachelock'] = '缓存锁定处理';
$string['type_cachelock_plural'] = '缓存锁处理程序';
$string['type_cachestore'] = '高速缓存存储';
$string['type_cachestore_plural'] = '高速缓存存储';
$string['type_calendartype'] = '日历类型';
$string['type_calendartype_plural'] = '日历类型';
$string['type_contentbank'] = '内容库';
$string['type_contentbank_plural'] = '内容库插件';
$string['type_coursereport'] = '课程报表';
$string['type_coursereport_plural'] = '课程报表';
$string['type_dataformat'] = '数据格式';
$string['type_dataformat_plural'] = '数据格式';
$string['type_editor'] = '编辑器';
$string['type_editor_plural'] = '编辑器';
$string['type_enrol'] = '注册方法';
$string['type_enrol_plural'] = '注册方法';
$string['type_fileconverter_plural'] = '文档转换器';
$string['type_fileconvertermanage'] = '管理文档转换器';
$string['type_filter'] = '文本过滤器';
$string['type_filter_plural'] = '文本过滤器';
$string['type_format'] = '课程格式';
$string['type_format_plural'] = '课程格式';
$string['type_gradeexport'] = '成绩导出方式';
$string['type_gradeexport_plural'] = '成绩导出方式';
$string['type_gradeimport'] = '成绩导入方式';
$string['type_gradeimport_plural'] = '成绩导入方式';
$string['type_gradereport'] = '成绩册报表';
$string['type_gradereport_plural'] = '成绩册报表';
$string['type_gradingform'] = '高级阶段方法';
$string['type_gradingform_plural'] = '高级阶段方法';
$string['type_local'] = '本地插件';
$string['type_local_plural'] = '本地插件';
$string['type_media_plural'] = '媒体播放器';
$string['type_message'] = '消息输出';
$string['type_message_plural'] = '消息输出';
$string['type_mlbackend_plural'] = '机器学习的后端';
$string['type_mnetservice'] = 'MNet 服务';
$string['type_mnetservice_plural'] = 'MNet 服务';
$string['type_mod'] = '活动模块';
$string['type_mod_plural'] = '活动模块';
$string['type_plagiarism'] = '剽窃插件';
$string['type_plagiarism_plural'] = '剽窃插件';
$string['type_portfolio'] = '组合';
$string['type_portfolio_plural'] = '组合';
$string['type_profilefield'] = '组合域类型';
$string['type_profilefield_plural'] = '配置文件字段类型';
$string['type_qbehaviour'] = '题目行为';
$string['type_qbehaviour_plural'] = '题目行为';
$string['type_qformat'] = '题目导入导出格式';
$string['type_qformat_plural'] = '题目导入导出格式';
$string['type_qtype'] = '题目类型';
$string['type_qtype_plural'] = '题目类型';
$string['type_report'] = '站点报表';
$string['type_report_plural'] = '报告';
$string['type_repository'] = '库';
$string['type_repository_plural'] = '库';
$string['type_search'] = '搜索引擎';
$string['type_search_plural'] = '搜索引擎';
$string['type_theme'] = '皮肤';
$string['type_theme_plural'] = '皮肤';
$string['type_tool'] = '管理工具';
$string['type_tool_plural'] = '管理工具';
$string['type_webservice'] = 'Webservice协议';
$string['type_webservice_plural'] = 'Webservice协议';
$string['uninstall'] = '卸载';
$string['uninstallconfirm'] = '你将要卸载插件<em>{$a->name}</em>。这将完成删除这个插件的所有数据，包括配置信息，日志记录，用户文件。删除之后不能恢复，Moodle自身也没有为此创建任何的备份，你确定要继续卸载？';
$string['uninstalldelete'] = '这个插件<em>{$a->name}</em>所关联的所有数据已经从数据库中删除。Moodle由于自身权限原因不能删除这些文件夹，为了防止插件重新安装插件本身，请你务必从服务器中手动删除文件夹<em>{$a->rootdir}</em>。';
$string['uninstalldeleteconfirm'] = '这个插件<em>{$a->name}</em>所关联的所有数据已经从数据库中删除。为了防止插件重新安装插件本身，请你务必从服务器中手动删除文件夹<em>{$a->rootdir}</em>。你想要删除这些文件夹？';
$string['uninstalldeleteconfirmexternal'] = '系统显示这个插件是从版本控制系统{$a} 获取来的。如果你删除了插件文件夹，你可能会丢失掉你在本地所做的所有代码修改。你在继续删除之前确认。';
$string['uninstallextraconfirmblock'] = '本版块有 {$a->instances}  个实例';
$string['uninstallextraconfirmenrol'] = '有 {$a->instances} 个注册用户';
$string['uninstallextraconfirmmod'] = '在  {$a->courses} 课程中有 {$a->instances} 个模块实例。';
$string['uninstalling'] = '卸载 {$a->name}';
$string['updateavailable'] = '有新版本{$a}可以提供。';
$string['updateavailable_moreinfo'] = '更多信息...';
$string['updateavailable_release'] = '发布： {$a}';
$string['updatepluginconfirm'] = '插件更新信息';
$string['updatepluginconfirmexternal'] = '当前版本的插件已经被从源代码管理系统 ({$a})中取出，如果你安装这个更新，你将不再能够从源代码管理系统中得到插件更新。在继续之前请你确保你需要更新这个插件！';
$string['updatepluginconfirminfo'] = '你将要安装一个新版本的插件： <strong>{$a->name}</strong>. 一个版本号为{$a->version} 的 zip 格式安装包插件将被从<a href="{$a->url}">{$a->url}</a>下载，并且解压到你的Moodle系统，所以你的更新可以进行安装';
$string['updatepluginconfirmwarning'] = '请注意：Moodle不会自动备份你的数据，我们强烈建议你备份你的数据（包括文件，程序，数据库），以应对罕见情况。以避免如果新的代码有错误使你的系统受到破坏。风险自负。';
$string['validationmsg_componentmatch'] = '完整的组件名称';
$string['validationmsg_componentmismatchname'] = '插件名不符合';
$string['validationmsg_componentmismatchtype'] = '插件类型不符合';
$string['validationmsg_missingcomponent_help'] = '所有插件必须在version.php文件的“$plugin-$component”中提供完整的组件名称。';
$string['validationmsg_missingexpectedlangenfile_info'] = '指定的插件类型缺少应有的英语语言文件{$a}。';
$string['validationmsg_missinglangenfile'] = '没有找到英语语言文件';
$string['validationmsg_missingversionphp'] = '没有找到 version.php 文件';
$string['validationmsg_onedir'] = 'ZIP 压缩包文件结构不正确。';
$string['validationmsg_targetexists'] = '目标位置已经存在并且将被移除';
$string['validationmsg_targetnotdir'] = '目标位置被一个文件占用';
$string['validationmsg_unknowntype'] = '未知的插件类型';
$string['validationmsglevel_debug'] = '调试';
$string['validationmsglevel_warning'] = '警告';
$string['version'] = '版本';
$string['versiondb'] = '当前版本';
$string['versiondisk'] = '新版本';
