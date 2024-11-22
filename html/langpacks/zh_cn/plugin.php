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
 * Strings for component 'plugin', language 'zh_cn', version '4.1'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '行为';
$string['availability'] = '可用性';
$string['cancelinstallall'] = '取消新安装 ({$a})';
$string['cancelinstallhead'] = '取消插件安装';
$string['cancelinstallinfo'] = '以下插件尚未完全安装，因此它们的安装可能会被取消。 为此，必须立即从服务器中删除插件文件夹。 确保这确实是您想要防止意外数据丢失（例如您自己的代码修改）的目的。';
$string['cancelinstallinfodir'] = '要删除的文件夹：{$a}';
$string['cancelinstallone'] = '取消此安装';
$string['cancelupgradeall'] = '取消升级 ({$a})';
$string['cancelupgradehead'] = '恢复以前版本的插件';
$string['cancelupgradeone'] = '取消这次升级';
$string['checkforupdates'] = '检查可用的更新';
$string['checkforupdateslast'] = '最近一次检查是在 {$a}';
$string['dependencyavailable'] = '可用的';
$string['dependencyfails'] = '失败';
$string['dependencyinstall'] = '安装';
$string['dependencyinstallhead'] = '安装缺少的依赖项';
$string['dependencyinstallmissing'] = '安装缺少的依赖项 ({$a})';
$string['dependencymissing'] = '丢失的';
$string['dependencyunavailable'] = '不可用';
$string['dependencyupload'] = '上传';
$string['dependencyuploadmissing'] = '上传 ZIP 文件';
$string['detectedmisplacedplugin'] = '插件 "{$a->component}" 被安装在错误的位置 "{$a->current}", 期望的位置是在 "{$a->expected}"';
$string['displayname'] = '插件名称';
$string['err_response_curl'] = '不能获取到可用的更新数据-发生意外cURL模块错误。';
$string['err_response_format_version'] = '返回非预期的版本号，请重新检查可用更新';
$string['err_response_http_code'] = '不能获取到可用的更新数据-不可知的HTTP响应代码。';
$string['filterall'] = '显示全部';
$string['filtercontribonly'] = '只显示额外的插件';
$string['filterupdatesonly'] = '只显示可用的更新';
$string['incompatibleversion'] = '不兼容的 Moodle 版本：{$a}';
$string['isenabled'] = '启用？';
$string['misdepinfoplugin'] = '插件信息';
$string['misdepinfoversion'] = '版本信息';
$string['misdepsavail'] = '可用的缺失依赖项';
$string['misdepsunavail'] = '不可用的缺失依赖';
$string['misdepsunavaillist'] = '找不到满足依赖项要求的版本：{$a}。';
$string['misdepsunknownlist'] = '不在插件目录中：<strong>{$a}</strong>。';
$string['moodlebranch'] = 'Moodle {$a->min} - {$a->max}';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = '没有安装这类插件';
$string['notdownloadable'] = '不能下载这个安装包';
$string['notdownloadable_help'] = 'ZIP更新包不能自动下载。';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = '笔记';
$string['notsupported'] = '插件可能与 Moodle 版本 {$a} 不兼容';
$string['notwritable'] = '插件的文件不可写';
$string['notwritable_help'] = '插件文件不能被web服务器写入。web服务器进程必须具有对插件文件夹及其所有内容的写访问权限。可能还需要对给定插件类型的根文件夹进行写访问。';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = '所有插件';
$string['overviewext'] = '额外的插件';
$string['overviewupdatable'] = '可用更新';
$string['packagesdebug'] = '启用调试输出';
$string['packagesdownloading'] = '下载 {$a}';
$string['packagesextracting'] = '提取 {$a}';
$string['packagesvalidating'] = '验证 {$a}';
$string['packagesvalidatingfailed'] = '由于验证失败安装中止';
$string['packagesvalidatingok'] = '验证成功，可以继续安装';
$string['plugincheckall'] = '所有插件';
$string['plugincheckattention'] = '需要注意的插件';
$string['pluginchecknone'] = '现在没有插件需要你注意';
$string['pluginchecknotice'] = '此页面显示升级过程中可能需要您注意的插件，例如要安装的新插件，要升级的插件，丢失的插件等。如果有可用的更新，则显示其他插件。建议您检查是否有最新版本的插件可用，并在继续此Moodle升级之前更新其源代码。';
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
$string['supportedconversions'] = '支持的文档转换';
$string['supportedmoodleversions'] = '支持的 Moodle 版本';
$string['systemname'] = '标识';
$string['type_antivirus'] = '防病毒插件';
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
$string['type_contenttype'] = '内容库';
$string['type_contenttype_plural'] = '内容库插件';
$string['type_coursereport'] = '课程报表';
$string['type_coursereport_plural'] = '课程报表';
$string['type_customfield'] = '自定义字段';
$string['type_customfield_plural'] = '自定义字段';
$string['type_dataformat'] = '数据格式';
$string['type_dataformat_plural'] = '数据格式';
$string['type_editor'] = '编辑器';
$string['type_editor_plural'] = '编辑器';
$string['type_enrol'] = '注册方法';
$string['type_enrol_plural'] = '注册方法';
$string['type_fileconverter'] = '文档转换器';
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
$string['type_h5plib'] = 'H5P框架';
$string['type_h5plib_plural'] = 'H5P框架';
$string['type_local'] = '本地插件';
$string['type_local_plural'] = '本地插件';
$string['type_media'] = '媒体播放器';
$string['type_media_plural'] = '媒体播放器';
$string['type_message'] = '消息输出';
$string['type_message_plural'] = '消息输出';
$string['type_mlbackend'] = '机器学习后端';
$string['type_mlbackend_plural'] = '机器学习的后端';
$string['type_mnetservice'] = 'MNet 服务';
$string['type_mnetservice_plural'] = 'MNet 服务';
$string['type_mod'] = '活动模块';
$string['type_mod_plural'] = '活动模块';
$string['type_paygw'] = '支付网关';
$string['type_paygw_plural'] = '支付网关';
$string['type_paygwmanage'] = '管理支付网关';
$string['type_plagiarism'] = '剽窃插件';
$string['type_plagiarism_plural'] = '剽窃插件';
$string['type_portfolio'] = '组合';
$string['type_portfolio_plural'] = '组合';
$string['type_profilefield'] = '组合域类型';
$string['type_profilefield_plural'] = '配置文件字段类型';
$string['type_qbank'] = '题库插件';
$string['type_qbank_plural'] = '题库插件';
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
$string['validationmsg_componentmismatchname_help'] = '某些 ZIP 包，例如 Github 生成的那些，可能包含不正确的根目录名称。 您需要修复根目录的名称以匹配声明的插件名称。';
$string['validationmsg_componentmismatchname_info'] = '该插件声明其名称为“{$a}”，但与根目录的名称不匹配。';
$string['validationmsg_componentmismatchtype'] = '插件类型不符合';
$string['validationmsg_componentmismatchtype_info'] = '预期类型 \'{$a->expected}\' 但插件声明其类型为 \'{$a->found}\'。';
$string['validationmsg_filenotexists'] = '未找到解压文件';
$string['validationmsg_filesnumber'] = '在包中找不到足够的文件';
$string['validationmsg_filestatus'] = '无法提取所有文件';
$string['validationmsg_filestatus_info'] = '尝试提取文件 {$a->file} 导致错误“{$a->status}”。';
$string['validationmsg_foundlangfile'] = '找到语言文件';
$string['validationmsg_maturity'] = '声明的成熟度级别';
$string['validationmsg_maturity_help'] = '该插件可以声明其成熟度级别。 如果维护者认为插件稳定，则声明的成熟度级别将读取 MATURITY_STABLE。 所有其他成熟度级别（例如 alpha 或 beta）都应被视为不稳定并发出警告。';
$string['validationmsg_missingcomponent'] = '插件未声明其组件名称';
$string['validationmsg_missingcomponent_help'] = '所有插件必须在version.php文件的“$plugin-$component”中提供完整的组件名称。';
$string['validationmsg_missingcomponent_link'] = 'Development:version.php';
$string['validationmsg_missingexpectedlangenfile'] = '英文文件名不匹配';
$string['validationmsg_missingexpectedlangenfile_info'] = '指定的插件类型缺少应有的英语语言文件{$a}。';
$string['validationmsg_missinglangenfile'] = '没有找到英语语言文件';
$string['validationmsg_missinglangenfolder'] = '缺少英文文件夹';
$string['validationmsg_missingversion'] = '插件未声明其版本';
$string['validationmsg_missingversionphp'] = '没有找到 version.php 文件';
$string['validationmsg_multiplelangenfiles'] = '找到多个英文文件';
$string['validationmsg_onedir'] = 'ZIP 压缩包文件结构不正确。';
$string['validationmsg_onedir_help'] = 'ZIP 包必须只包含一个包含插件代码的根目录。 该根目录的名称必须与插件的名称匹配。';
$string['validationmsg_pathwritable'] = '写访问检查';
$string['validationmsg_pluginversion'] = '插件版本';
$string['validationmsg_pluginversiontoolow'] = '已安装此插件的更高版本';
$string['validationmsg_release'] = '插件发布';
$string['validationmsg_requiresmoodle'] = '所需的 Moodle 版本';
$string['validationmsg_rootdir'] = '要安装的插件名称';
$string['validationmsg_rootdir_help'] = 'ZIP 包中根目录的名称构成要安装的插件的名称。 如果名称不正确，您可能希望在安装插件之前重命名 ZIP 中的根目录。';
$string['validationmsg_rootdirinvalid'] = '插件名称无效';
$string['validationmsg_rootdirinvalid_help'] = 'ZIP 包中根目录的名称违反了正式的语法要求。 某些 ZIP 包，例如 Github 生成的那些，可能包含不正确的根目录名称。 您需要修复根目录的名称以匹配插件名称。';
$string['validationmsg_targetexists'] = '目标位置已经存在并且将被移除';
$string['validationmsg_targetexists_help'] = '插件目录已经存在，将被插件包内容替换。';
$string['validationmsg_targetnotdir'] = '目标位置被一个文件占用';
$string['validationmsg_unknowntype'] = '未知的插件类型';
$string['validationmsg_versionphpsyntax'] = '在 version.php 文件中检测到不受支持的语法';
$string['validationmsglevel_debug'] = '调试';
$string['validationmsglevel_error'] = '错误';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = '警告';
$string['version'] = '版本';
$string['versiondb'] = '当前版本';
$string['versiondisk'] = '新版本';
