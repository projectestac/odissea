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
 * Strings for component 'scorm', language 'zh_cn', version '4.5'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = '激活';
$string['activityloading'] = '您将会被自动转入到活动中，该活动位于';
$string['activityoverview'] = '您有需要注意的 SCORM 包';
$string['activitypleasewait'] = '活动载入中，请稍候...';
$string['adminsettings'] = '管理的设置';
$string['advanced'] = '参数';
$string['aicchacpkeepsessiondata'] = 'AICC HACP 会话数据';
$string['aicchacpkeepsessiondata_desc'] = '保存外部AICC HACP会话数据的时间长度（以天为单位）（高设置将用旧数据填充表格，但在调试时可能有用）';
$string['aicchacptimeout'] = 'AICC HACP 超时';
$string['aicchacptimeout_desc'] = '外部AICC HACP会话可以保持打开的时间长度（分钟）';
$string['aiccuserid'] = 'AICC密码数字用户id';
$string['aiccuserid_desc'] = '与Moodle相比，AICC用户名标准非常严格，只允许字母数字字符、破折号和下划线。不允许使用句点、空格和@符号。如果启用，用户ID号将传递给AICC包，而不是用户名。';
$string['aliasonly'] = '从存储库中选择imsmanifest.xml文件时，必须为此文件使用别名/快捷方式。';
$string['allowapidebug'] = '激活 API 调试与跟踪（用 apidebugmask 设置捕获掩码）';
$string['allowtypeaicchacp'] = '打开外部 AICC HACP';
$string['allowtypeaicchacp_desc'] = '如果启用，则允许AICC HACP外部通信，而无需用户登录外部AICC包的post请求';
$string['allowtypeexternal'] = '启用外部包类型';
$string['allowtypeexternalaicc'] = '启用直接AICC URL';
$string['allowtypeexternalaicc_desc'] = '如果启用，则允许直接url到简单的AICC包';
$string['allowtypelocalsync'] = '启用可下载包类型';
$string['apidebugmask'] = 'API 调试捕获掩码——对 &lt;username&gt;:&lt;activityname&gt; 使用简单的正则表达式。例如：admin:.* 会只调试管理员用户';
$string['areacontent'] = '内容文件';
$string['areapackage'] = '包文件';
$string['asset'] = '资产';
$string['assetlaunched'] = '资产 - 已查看';
$string['attempt'] = '学习次数';
$string['attempt1'] = '1 次';
$string['attempts'] = '尝试次数';
$string['attemptsmanagement'] = '尝试管理';
$string['attemptstatusall'] = '仪表盘和概要页';
$string['attemptstatusentry'] = '仅概要页';
$string['attemptstatusmy'] = '仅仪表盘';
$string['attemptsx'] = '{$a} 次';
$string['attr_error'] = '标签 {$a->tag} 的属性 {$a->attr} 取值错误。';
$string['autocommit'] = '自动提交';
$string['autocommit_help'] = '若启用，SCORM 数据将自动保存到数据库。适用于 SCORM 对象不常规保存它们的数据时。';
$string['autocommitdesc'] = '如果 SCORM 包未保存 SCORM 数据，则自动保存。';
$string['autocontinue'] = '自动继续';
$string['autocontinue_help'] = '如果启用，后续的学习对象会被自动执行，否则必须使用“继续”按钮。';
$string['autocontinuedesc'] = '如果启用，则后续学习对象将自动启动，否则必须使用继续按钮。';
$string['averageattempt'] = '平均尝试次数';
$string['badarchive'] = '您必须提供一个有效的 zip 文件';
$string['badimsmanifestlocation'] = 'An imsmanifest.xml file was found but it was not in the root of your zip file, please re-package your SCORM';
$string['badmanifest'] = 'Manifest 有错误：请看错误日志';
$string['browse'] = '预览';
$string['browsed'] = '浏览';
$string['browsemode'] = '预览模式';
$string['browserepository'] = '浏览仓库';
$string['cachedef_elements'] = '元素缓存';
$string['calculatedweight'] = '计算重量';
$string['calendarend'] = '{$a}关闭';
$string['calendarstart'] = '{$a}打开';
$string['cannotaccess'] = '您不能那样调用脚本';
$string['cannotfindsco'] = '找不到 SCO';
$string['chooseapacket'] = '选择或更新一个包';
$string['closebeforeopen'] = '您指定的结束日期早于开始日期。';
$string['collapsetocwinsize'] = '窗口大小小于时折叠TOC';
$string['collapsetocwinsizedesc'] = '此设置允许您指定TOC应自动折叠的窗口大小。';
$string['compatibilitysettings'] = '兼容性设置';
$string['completed'] = '已完成';
$string['completiondetail:allscos'] = '完成此活动的所有部分';
$string['completiondetail:completionscore'] = '获得{$a}或以上的分数';
$string['completiondetail:completionstatuscompleted'] = '完成活动';
$string['completiondetail:completionstatuscompletedorpassed'] = '完成或通过活动';
$string['completiondetail:completionstatuspassed'] = '通过活动';
$string['completionscorerequired'] = '所需最低分数';
$string['completionscorerequired_help'] = '启用这个设置，将会要求用户至少有一个最低分数，才可在这一SCORM活动中标示为完成，如同任何其他活动的完成要求。';
$string['completionscorerequireddesc'] = '完成课程的最低分数为{$a}';
$string['completionstatus_completed'] = '已完成';
$string['completionstatus_passed'] = '已通过';
$string['completionstatusallscos'] = '所有 SCO 都必须返回完成状态';
$string['completionstatusallscos_help'] = '某些SCORM软件包包含多个组件或“SCO”-启用此功能后，软件包中的所有SCO必须返回相关的lesson_状态，才能将此活动标记为完成。';
$string['completionstatusrequired'] = '要求地位';
$string['completionstatusrequired_help'] = '若你勾选一个或多个状态，将会要求用户至少完成一个被勾选的状态，才能标示为完成这个SCORM活动，就如同其他活动完成的要求。';
$string['completionstatusrequireddesc'] = '学生必须至少达到以下状态之一：{$a}';
$string['confirmloosetracks'] = '警告：课件包已更新。如果该课件包的结构发生了变化，则用户的学习记录可能会在更新时丢失。';
$string['contents'] = '内容';
$string['coursepacket'] = '课程包';
$string['coursestruct'] = '课程结构';
$string['crontask'] = '后台处理SCORM';
$string['currentwindow'] = '当前窗口';
$string['datadir'] = '文件系统错误：无法创建课程数据目录';
$string['defaultdisplaysettings'] = '默认的显示设置';
$string['defaultgradesettings'] = '默认评分设置';
$string['defaultothersettings'] = '其他默认设置';
$string['deleteallattempts'] = '所有 SCORM 学习记录';
$string['deleteattemptcheck'] = '您确定要完全删除所有尝试记录吗？';
$string['deleteselected'] = '删除';
$string['deleteuserattemptcheck'] = '您确定要完全删除所有您的尝试记录吗？';
$string['details'] = '查看详情';
$string['directories'] = '显示目录链接';
$string['disabled'] = '不显示';
$string['display'] = '显示位置';
$string['displayattemptstatus'] = '显示尝试状态';
$string['displayattemptstatus_help'] = '此首选项允许在主控区和/或 SCORM 登录页面的课程概述块中显示用户尝试的摘要。';
$string['displayattemptstatusdesc'] = '用户尝试的摘要是否显示在 Dashboard 和/或 SCORM 登录页面的课程概述块中。';
$string['displaycoursestructure'] = '在进入页面显示课程结构';
$string['displaycoursestructure_help'] = '如果允许，课件内容的列表会显示在SCORM概要页面上。';
$string['displaycoursestructuredesc'] = '如果启用，目录将显示在 SCORM 大纲页面上。';
$string['displaydesc'] = '是否在新窗口中显示 SCORM 包';
$string['displaysettings'] = '显示设置';
$string['dnduploadscorm'] = '添加一个 SCORM 包';
$string['domxml'] = '外部 DOMXML 库';
$string['element'] = '项目';
$string['enter'] = '输入';
$string['entercourse'] = '进入课程';
$string['errorlogs'] = '错误日志';
$string['eventattemptdeleted'] = '已删除尝试';
$string['eventinteractionsviewed'] = '已查看互动';
$string['eventreportviewed'] = '已查看报告';
$string['eventscolaunched'] = '上海合作组织启动';
$string['eventscorerawsubmitted'] = '提交 SCORM 原始分数';
$string['eventstatussubmitted'] = '提交 SCORM 状态';
$string['eventtracksviewed'] = '查看的曲目';
$string['eventuserreportviewed'] = '已查看用户报告';
$string['everyday'] = '每天';
$string['everytime'] = '每次使用时';
$string['exceededmaxattempts'] = '您已经达到最大尝试次数。';
$string['exit'] = '退出课程';
$string['exitactivity'] = '退出活动';
$string['expired'] = '抱歉，本活动已于{$a}关闭，已不再可用。';
$string['external'] = '更新外部课件时间';
$string['failed'] = '失败';
$string['finishscorm'] = '如果您已完成查看本资源，{$a}';
$string['finishscormlinkname'] = '点击此处返回课程主页';
$string['firstaccess'] = '首次访问';
$string['firstattempt'] = '首次尝试';
$string['floating'] = '浮动';
$string['forceattemptalways'] = '总是';
$string['forceattemptoncomplete'] = '上次尝试完成、通过或失败时';
$string['forcecompleted'] = '强制为完成';
$string['forcecompleted_help'] = '如果启用，则当前尝试的状态将强制为 “已完成”。（仅适用于 SCORM 1.2 软件包。';
$string['forcecompleteddesc'] = '该参数设置强制完成的默认值';
$string['forcejavascript'] = '强制用户打开JavaScript';
$string['forcejavascript_desc'] = '如果启用（推荐），则当用户浏览器中不支持/启用 JavaScript 时，这将阻止访问 SCORM 对象。如果禁用，用户可以查看 SCORM，但 API 通信将失败，并且不会保存任何成绩信息。';
$string['forcejavascriptmessage'] = '需要Javascript支持，请您打开浏览器中的JavaScript设置，然后再试一次。';
$string['forcenewattempts'] = '强制为新尝试';
$string['forcenewattempts_help'] = '有3种选择：
*否-如果以前的尝试已完成、通过或失败，学生将可以选择进入复习模式或开始新的尝试。
*上一次尝试完成、通过或失败时-这取决于SCORM包设置的状态为“已完成”、“通过”或“失败”。
*始终-每次重新进入SCORM活动都将产生一次新的尝试，学生不会返回到上次尝试时达到的相同点。';
$string['found'] = '找到 Manifest 文件';
$string['frameheight'] = '活动的默认窗口或框架高度';
$string['framewidth'] = '活动的默认窗口或框架宽度';
$string['fromleft'] = '从左';
$string['fromtop'] = '自上而下';
$string['fullscreen'] = '全屏显示';
$string['general'] = '通用数据';
$string['gradeaverage'] = '平均分';
$string['gradeforattempt'] = '尝试成绩';
$string['gradehighest'] = '最高分';
$string['grademethod'] = '评分方法';
$string['grademethod_help'] = '评分方法决定了对此活动的每次尝试如何获得成绩。

有4种评分方法：

* 学习对象 - 完成或通过的学习对象数量
* 最高分 - 在所有已完成的学习对象中取最高分
* 平均分 - 所有分数的平均分
* 总分 - 所有分数的总和';
$string['grademethoddesc'] = '评分方法定义如何确定活动的单次尝试的成绩。';
$string['gradereported'] = '成绩报告';
$string['gradescoes'] = '学习对象';
$string['gradesettings'] = '评分设置';
$string['gradesum'] = '总成绩';
$string['height'] = '高度';
$string['hidden'] = '隐藏';
$string['hidebrowse'] = '禁用预览模式';
$string['hidebrowse_help'] = '预览模式允许学生在进入课件之前先进行浏览。如果预览模式被禁止，预览按钮会被隐藏';
$string['hidebrowsedesc'] = '预览模式允许学生在尝试活动之前浏览活动。';
$string['hideexit'] = '隐藏退出链接';
$string['hidereview'] = '隐藏复习按钮';
$string['hidetoc'] = '在播放器中显示课程结构';
$string['hidetoc_help'] = '目录在 SCORM 播放器中的显示方式';
$string['hidetocdesc'] = '此设置指定目录在 SCORM 播放器中的显示方式。';
$string['highestattempt'] = '最高分尝试';
$string['identifier'] = '问题标识符';
$string['incomplete'] = '不完整';
$string['indicator:cognitivedepth'] = 'SCORM课件活动认知深度';
$string['indicator:cognitivedepth_help'] = '这个指标是基于学生在 SCORM课件活动中所达到的认知深度。';
$string['indicator:cognitivedepthdef'] = 'SCORM认知';
$string['indicator:cognitivedepthdef_help'] = '在此分析间隔期间，参与者已达到SCORM活动提供的认知参与百分比（级别=无查看、查看、提交、查看反馈）';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'SCORM课件活动社会宽度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在SCORM课件活动中所达到的社会宽度。';
$string['indicator:socialbreadthdef'] = 'SCORM社会';
$string['indicator:socialbreadthdef_help'] = '在此分析间隔期间，参与者已达到SCORM活动提供的社会参与度的百分比（级别=无参与，仅参与者一人）';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['interactions'] = '交互';
$string['invalidactivity'] = 'SCORM 活动不正确';
$string['invalidhacpsession'] = '无效的 HACP 会话';
$string['invalidmanifestname'] = '只能选择imsmanifest.xml或.zip文件';
$string['invalidmanifestresource'] = '警告：在您的 manifest 文件中描述了如下资源，但没有找到';
$string['invalidstatus'] = '无效状态';
$string['invalidurl'] = '指定的网址无效';
$string['invalidurlhttpcheck'] = '指定的URL无效。调试消息：<pre>{$a->cmsg}</pre>';
$string['largetrackupgrade'] = '下一个升级步骤可能需要一些时间才能完成，您的站点有{$a} SCORM跟踪记录需要迁移到新的表结构，由于无法显示进度条，请耐心等待。';
$string['last'] = '最后访问时间';
$string['lastaccess'] = '最后访问';
$string['lastattempt'] = '上次完成的尝试';
$string['lastattemptlock'] = '在最后一次尝试后锁定';
$string['lastattemptlock_help'] = '如果打开，学生用完了分配给他们的尝试次数，学生将不能再打开SCORM播放器';
$string['lastattemptlockdesc'] = '如果启用，则学生在用完所有分配的尝试后将无法启动 SCORM 播放器。';
$string['location'] = '显示地址栏';
$string['masteryoverride'] = '掌握分数优先于状态';
$string['masteryoverride_help'] = '如果启用并提供掌握分数，则当调用LMSFinish并设置原始分数时，将使用原始分数和掌握分数重新计算状态，并覆盖SCORM提供的任何状态（包括“未完成”）。';
$string['masteryoverridedesc'] = '此首选项设置掌握分数覆盖设置的默认值';
$string['max'] = '最高分值';
$string['maximumattempts'] = '学习次数';
$string['maximumattempts_help'] = '这里定义了允许用户尝试的次数。该设置仅支持SCORM1.2和AICC的课件包。';
$string['maximumattemptsdesc'] = '活动默认的学习次数';
$string['maximumgradedesc'] = '活动默认的最高分';
$string['menubar'] = '显示菜单栏';
$string['min'] = '最低分值';
$string['minimumscoregreater'] = '最低分数必须大于0分。';
$string['missing_attribute'] = '标签 {$a->tag} 的属性 {$a->attr} 缺失';
$string['missing_tag'] = '标签 {$a->tag} 缺失';
$string['missingparam'] = '必需参数缺失或错误';
$string['mode'] = '模式';
$string['modulename'] = 'SCORM 课件';
$string['modulename_help'] = 'SCORM和AICC是一套基于Web学习内容的规范，具有互用性、辅助性和复用性。通过SCORM/AICC模块可将SCORM/AICC课件包加入到课程中。';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulenameplural'] = 'SCORM 课件包';
$string['myaiccsessions'] = '我的AICC会话';
$string['myattempts'] = '我的尝试';
$string['nav'] = '显示导航';
$string['nav_help'] = '此设置指定是显示还是隐藏导航按钮及其位置。
有3种选择：
*否-不显示导航按钮
*在内容下-导航按钮显示在SCORM软件包内容的下方
*浮动-导航按钮显示为浮动，从顶部到左侧的位置由软件包确定。';
$string['navdesc'] = '此设置指定是显示还是隐藏导航按钮及其位置。';
$string['navigation'] = '导航';
$string['navpositionleft'] = '导航按钮从左侧的位置（以像素为单位）。';
$string['navpositiontop'] = '导航按钮从顶部的位置（以像素为单位）。';
$string['networkdropped'] = 'SCORM播放器已确定您的Internet连接不可靠或已中断。如果继续此SCORM活动，您的进度可能无法保存。<br/>
您应该立即退出活动，并在有可靠的Internet连接时返回。';
$string['newattempt'] = '开始新尝试';
$string['next'] = '继续';
$string['no_attributes'] = '标签 {$a->tag} 必须有属性';
$string['no_children'] = '标签 {$a->tag} 必须有子项';
$string['noactivity'] = '无报表';
$string['noattemptsallowed'] = '允许尝试的次数';
$string['noattemptsmade'] = '您已经尝试的次数';
$string['nolimit'] = '不限';
$string['nomanifest'] = '文件包不正确 - 缺少 imsmanifest.xml 或 AICC 结构';
$string['noprerequisites'] = '很抱歉，您没有访问此活动所需的先决条件';
$string['noreports'] = '无报表可显示';
$string['normal'] = '普通';
$string['noscriptnoscorm'] = '您的浏览器不支持 JavaScript 或已禁用 JavaScript 支持。此 SCORM 压缩包可能无法正确播放或保存数据。';
$string['not_corr_type'] = '标签 {$a->tag} 类型错误';
$string['notattempted'] = '未尝试';
$string['notopenyet'] = '抱歉，这个活动直到{$a}才能进行';
$string['objectives'] = '目标';
$string['openafterclose'] = '您已在关闭日期之后指定打开日期';
$string['optallstudents'] = '全部用户';
$string['optattemptsonly'] = '学习过的用户';
$string['options'] = '选项（某些浏览器不支持）';
$string['optionsadv'] = '高级选项';
$string['optionsadv_desc'] = '如果选中，宽度和高度将列为高级设置。';
$string['optnoattemptsonly'] = '未学习过的用户';
$string['organization'] = '组织';
$string['organizations'] = '组织';
$string['othersettings'] = '更多设置';
$string['package'] = '包文件';
$string['package_help'] = '包文件是一个包含了 SCORM/AICC 课程定义的 zip 或 pif 文件。';
$string['packagedir'] = '文件系统错误：无法创建包目录';
$string['packagefile'] = '未指定包文件';
$string['packagehdr'] = '包';
$string['packageurl'] = '网页地址';
$string['packageurl_help'] = '通过此设置可以提供指定 SCORM 课件的 URL，而不是选择一个文件。';
$string['page-mod-scorm-x'] = '任意 SCORM 模块页面';
$string['pagesize'] = '页面大小';
$string['passed'] = '已通过';
$string['php5'] = 'PHP 5 (原生 DOMXML 库)';
$string['pluginadministration'] = 'SCORM 课件管理';
$string['pluginname'] = 'SCORM 课件包';
$string['popup'] = '新窗口';
$string['popuplaunched'] = '此SCORM包已在弹出窗口中启动，如果您已查看完此资源，请单击此处返回课程页面';
$string['popupmenu'] = '在下拉菜单中';
$string['popupopen'] = '在新窗口中显示';
$string['popupsblocked'] = '弹出窗口似乎被阻止，阻止了此 SCORM 包的播放。请检查您的浏览器设置，然后再试一次。';
$string['position_error'] = '{$a->tag} 标签不能在 {$a->parent} 标签中';
$string['preferencespage'] = '此页的参数设置';
$string['preferencesuser'] = '此报告的参数设置';
$string['prev'] = '返回上一页';
$string['privacy:metadata:aicc:data'] = '从AICC/SCORM子系统传递的个人数据。';
$string['privacy:metadata:aicc:externalpurpose'] = '该插件使用AICC HACP向外部发送数据。';
$string['privacy:metadata:aicc_session:lessonstatus'] = '要跟踪的课程状态';
$string['privacy:metadata:aicc_session:scormmode'] = '要跟踪的元素的模式';
$string['privacy:metadata:aicc_session:scormstatus'] = '要跟踪的元素的状态';
$string['privacy:metadata:aicc_session:sessiontime'] = '要跟踪的会话时间';
$string['privacy:metadata:aicc_session:timecreated'] = '创建跟踪元素的时间';
$string['privacy:metadata:attempt'] = '尝试号码';
$string['privacy:metadata:scoes_track:element'] = '要跟踪的元素的名称';
$string['privacy:metadata:scoes_track:value'] = 'AICC HACP的会话信息';
$string['privacy:metadata:scorm_aicc_session'] = 'AICC HACP的会话信息';
$string['privacy:metadata:scorm_attempt'] = '用户进行的SCORM尝试';
$string['privacy:metadata:timemodified'] = '上次修改被跟踪元素的时间';
$string['privacy:metadata:userid'] = '访问SCORM活动的用户的ID';
$string['protectpackagedownloads'] = '保护软件包下载';
$string['protectpackagedownloads_desc'] = '如果启用，则仅当用户具有课程：manageactivities功能时，才能下载SCORM软件包。如果禁用，则始终可以下载SCORM软件包（通过移动或其他方式）。';
$string['raw'] = '原始分';
$string['regular'] = '常规 manifest';
$string['report'] = '报表';
$string['reportcountallattempts'] = '{$a->nbusers} 名用户的 {$a->nbattempts} 次学习，共 {$a->nbresults} 个结果';
$string['reportcountattempts'] = '{$a->nbresults} 个结果（{$a->nbusers} 名用户）';
$string['reports'] = '报表';
$string['repositorynotsupported'] = '此存储库不支持直接链接到imsmanifest.xml文件。';
$string['response'] = '响应';
$string['result'] = '结果';
$string['results'] = '结果';
$string['review'] = '复习';
$string['reviewmode'] = '回顾模式';
$string['rightanswer'] = '正确答案';
$string['scoes'] = '正在学习的对象';
$string['score'] = '得分';
$string['scorm:addinstance'] = '添加一个新的 SCORM 包';
$string['scorm:deleteownresponses'] = '删除自己的尝试记录';
$string['scorm:deleteresponses'] = '删除 SCORM 学习记录';
$string['scorm:savetrack'] = '保存详情';
$string['scorm:skipview'] = '跳过预览';
$string['scorm:viewreport'] = '显示报表';
$string['scorm:viewscores'] = '显示成绩';
$string['scormclose'] = '对...可用';
$string['scormcourse'] = '正在学习的课程';
$string['scormloggingoff'] = 'API 日志已关闭';
$string['scormloggingon'] = 'API 日志已开启';
$string['scormopen'] = '开放';
$string['scormresponsedeleted'] = '删除用户学习记录';
$string['scormstandard'] = 'SCORM标准模式';
$string['scormstandarddesc'] = '禁用时，Moodle允许SCORM 1.2包存储超出规范允许的内容，并在将用户名传递给SCORM包时使用Moodle全名格式设置';
$string['scormtype'] = '类型';
$string['scormtype_help'] = '此设置决定课件如何放入课程。有 4 中选项：

* 上传课件 - 通过文件选取器选择 SCORM 课件
* 外部 SCORM manifest - 指定一个 imsmanifest.xml 网址。注意：如果此 URL 与您的网站域名不同，那么最好用“下载课件”，否则不能保存成绩。
* 下载课件 - 指定一个课件 URL。课件会被解压缩并保存在本地，并随着外部 SCORM 课件更新而更新。
* 外部 AICC URL - 此 URL 是单个 AICC 活动的启动 URL。 将围绕此构建一个 psuedo 包。';
$string['scrollbars'] = '窗口可以滚动';
$string['search:activity'] = 'SCORM包-活动信息';
$string['selectall'] = '全部选择';
$string['selectnone'] = '全不选择';
$string['show'] = '显示';
$string['sided'] = '放旁边';
$string['skipview'] = '学生可忽略内容概览页面';
$string['skipview_help'] = '此设置决定是否内容结构页面应该被跳过（不显示）。如果课件只包含一个学习对象，内容结果页面就总是被跳过。';
$string['skipviewdesc'] = '默认何时会跳过内容结构页面';
$string['slashargs'] = '警告：此网站关闭了反斜线参数，此对象可能不能正常工作！';
$string['stagesize'] = '窗口尺寸';
$string['stagesize_help'] = '这两个设置用来限定学习对象的框架/窗口的高度和宽度。';
$string['started'] = '开始时间';
$string['status'] = '状态';
$string['statusbar'] = '显示状态栏';
$string['student_response'] = '响应';
$string['subplugintype_scormreport'] = '报表';
$string['subplugintype_scormreport_plural'] = '报表';
$string['suspended'] = '暂停';
$string['syntax'] = '语法错误';
$string['tag_error'] = '未知标签 {$a->tag}，其内容为：{$a->value}';
$string['time'] = '用时';
$string['title'] = '标题';
$string['toc'] = '目录';
$string['too_many_attributes'] = '标签 {$a->tag} 的属性太多了';
$string['too_many_children'] = '标签 {$a->tag} 的子项太多了';
$string['toolbar'] = '显示工具栏';
$string['totaltime'] = '总时间';
$string['trackcorrectcount'] = '正确数量';
$string['trackcorrectcount_help'] = '问题的正确结果数';
$string['trackid'] = 'ID';
$string['trackid_help'] = '这是SCORM包为此问题设置的标识符，SCORM规范不允许提供完整的问题文本。';
$string['trackingloose'] = '警告：此课件包的学习记录将会丢失。';
$string['tracklatency'] = '延迟';
$string['tracklatency_help'] = '从问题提供给学习者回答到第一次回答之间经过的时间。';
$string['trackpattern'] = '模式';
$string['trackpattern_help'] = '这就是对这个问题的正确回答，它没有显示学习者的回答。';
$string['trackresponse'] = '响应';
$string['trackresponse_help'] = '这是学员对该问题的回答';
$string['trackresult'] = '结果';
$string['trackresult_help'] = '基于学生的回答和<br/>正确结果';
$string['trackscoremax'] = '最高分';
$string['trackscoremax_help'] = '可为原始分数分配的最大值';
$string['trackscoremin'] = '最低分';
$string['trackscoremin_help'] = '可为原始分数分配的最小值';
$string['trackscoreraw'] = '原始分';
$string['trackscoreraw_help'] = '反映学习者相对于最小值和最大值范围的表现的数字';
$string['tracksuspenddata'] = '暂停数据';
$string['tracksuspenddata_help'] = '在学习者会话之间提供存储和检索数据的空间';
$string['tracktime'] = '时间';
$string['tracktime_help'] = '开始尝试的时间';
$string['tracktype'] = '类型';
$string['tracktype_help'] = '问题类型, 例如 "选择" 或 "简答"';
$string['trackweight'] = '权重';
$string['trackweight_help'] = '计算分数时分配给问题的权重。';
$string['type'] = '类型';
$string['typeaiccurl'] = '外部 AICC URL 地址';
$string['typeexternal'] = '外部 SCORM manifest';
$string['typelocal'] = '上传的课件';
$string['typelocalsync'] = '下载的课件';
$string['undercontent'] = '不足';
$string['unziperror'] = '解压课件包时发生错误';
$string['updatefreq'] = '自动更新频率';
$string['updatefreq_error'] = '仅当包文件位于外部时，才能设置自动更新频率';
$string['updatefreq_help'] = '自动下载和更新外部课件';
$string['updatefreqdesc'] = '默认的自动更新频率';
$string['validateascorm'] = '检验课件包';
$string['validation'] = '检验结果';
$string['validationtype'] = '设定用来检验 SCROM Manifest 文件的 DOMXML 库。如果您不了解具体情况，请保留默认值。';
$string['value'] = '值';
$string['versionwarning'] = '标签 {$a->tag} 警告：Manifest 版本老于 1.3。';
$string['viewallreports'] = '查看 {$a} 次学习该内容的报表';
$string['viewalluserreports'] = '查看 {$a} 个用户的报表';
$string['whatgrade'] = '多次学习评分策略';
$string['whatgrade_help'] = '如果允许多次尝试，则此设置指定在成绩簿中记录最高、平均（平均值）、第一次或最后一次完成的尝试。Last completed attempt （上次完成的尝试） 选项不包括状态为 \'failed\' 的尝试。

多次尝试的处理说明：

* 内容结构页面上 Enter 按钮上方的复选框提供了开始新尝试的选项，因此，如果要允许多次尝试，请确保提供对该页面的访问权限。
* 一些 SCORM 课件对新尝试很智能，但许多则不是。这意味着，如果学习者重新输入现有尝试，如果 SCORM 内容没有内部逻辑来避免覆盖之前的尝试，则即使尝试已“完成”或“通过”，也可以覆盖这些尝试。
* 设置“强制完成”、“强制新尝试”和“最终尝试后锁定”还提供对多次尝试的进一步管理。';
$string['whatgradedesc'] = '如果允许多次尝试，则成绩簿中是否记录最高、平均（平均值）、第一次或最后一次完成的尝试。';
$string['width'] = '宽度';
$string['window'] = '窗口';
$string['youmustselectastatus'] = '您必须选择需要的状态';
