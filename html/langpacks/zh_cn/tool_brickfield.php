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
 * Strings for component 'tool_brickfield', language 'zh_cn', version '4.4'.
 *
 * @package     tool_brickfield
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessibility'] = '可访问性';
$string['accessibilitydisabled'] = '此站点上未启用Brickfield可访问性工具包。请与站点管理员联系以启用。';
$string['accessibilityreport'] = '可访问性工具包';
$string['accessibilitytool'] = 'Brickfield可访问性工具';
$string['accessibilitytools'] = 'Brickfield可访问性工具';
$string['activate'] = '激活';
$string['activated'] = '该插件已被激活并可使用。';
$string['activationform'] = 'Brickfield注册';
$string['activationheader'] = 'Brickfield激活';
$string['activationinfo'] = '<p>要使用此插件，您必须在表单中提供此站点的有效密钥。</p><p>如果您还没有这些密钥，请在<a href="{$a}" data-action="send_info" target="_blank"> Brickfield 门户</a>注册（将在新窗口中打开）以获取它们。</p><p>一旦激活，您的密钥将通过计划任务进行验证。</p>';
$string['activityresults:pluginname'] = '活动细分可访问性工具报告';
$string['activityresults:toolname'] = '活动细分概要';
$string['activityresults:toolshortname'] = '活动细分';
$string['advanced:pluginname'] = '高级可访问性工具报告';
$string['advanced:toolname'] = '高级概要';
$string['advanced:toolshortname'] = '高级';
$string['allcourses'] = '所有已审核课程（{$a}）';
$string['allcoursescat'] = '类别{$a->catname}（{$a->count}）的所有已审核课程';
$string['analysis:byrequest'] = '应要求';
$string['analysis:disabled'] = '已禁用';
$string['analysistype'] = '启用分析请求';
$string['analysistype_desc'] = '允许请求进行内容可访问性分析';
$string['analysistypedisabled'] = '内容分析已禁用';
$string['bannercontentone'] = '企业无障碍工具包提供了一套完整的功能，帮助您的组织提高课程的无障碍性。<a href="{$a}">联系 Brickfield Education Labs 预约高级功能的免费演示</a>。';
$string['bannercontenttwo'] = '通过查找不符合指南的内容，解决问题，并使用可访问的文件、编辑器和增强功能让您的Moodle课程内容适应未来的需求，构建一个有效且包容的教学和学习平台。';
$string['bannerheadingone'] = '升级到企业可访问性工具包';
$string['batch'] = '批量限制';
$string['brickfield'] = 'Brickfield工具包';
$string['brickfield:viewcoursetools'] = '查看每个课程的报告';
$string['brickfield:viewsystemtools'] = '查看所有课程的报告';
$string['bulkprocesscaches'] = '批量处理缓存';
$string['bulkprocesscourses'] = '处理批量可访问性检查';
$string['buttonone'] = '获得免费演示';
$string['cachepending'] = '概要数据正在汇编中';
$string['checkdesc:alinksdontopennewwindow'] = '打开新窗口的链接应预先通知用户。';
$string['checkdesc:amustcontaintext'] = '链接需要包含文本才更直观。';
$string['checkdesc:areadontopennewwindow'] = '在图像地图中使用的区域，打开到一个新的窗口时应预先通知用户。';
$string['checkdesc:areahasaltvalue'] = '在图像地图中使用的区域，不应缺少与图像类似的alt（替代）文本。';
$string['checkdesc:asuspiciouslinktext'] = '链接文本应该是描述性的，并提供有关其链接目标的背景信息。';
$string['checkdesc:basefontisnotused'] = '基础字体元素（传统上用于格式化）不可访问，不应使用。';
$string['checkdesc:blinkisnotused'] = '用于设置闪动效果的闪烁元素不可访问，不应使用。';
$string['checkdesc:boldisnotused'] = '不应使用粗体（b）元素；应使用“strong”代替。';
$string['checkdesc:contenttoolong'] = '整个页面内容长度不应超过500字。';
$string['checkdesc:csstexthascontrast'] = '文本和背景之间的颜色对比度太低。';
$string['checkdesc:embedhasassociatednoembed'] = '嵌入元素（用于嵌入多媒体）不应缺少相应的“非嵌入”元素。';
$string['checkdesc:headerh3'] = 'H3标题之后的标题（编辑器大标题选项）不应破坏页面标题层次结构。';
$string['checkdesc:headershavetext'] = '标题需要包含文本才更直观。';
$string['checkdesc:iisnotused'] = '不应使用斜体（i）元素；应该用“em”代替。';
$string['checkdesc:imgaltisdifferent'] = '图像alt（可选）文本不应为图像文件名。';
$string['checkdesc:imgaltistoolong'] = '图像alt（可选）文本不应超过允许的最大字符数（125）。';
$string['checkdesc:imgaltnotemptyinanchor'] = '图像alt（可选）文本不应为空，尤其是当图像具有指向其他位置的链接时。';
$string['checkdesc:imgaltnotplaceholder'] = '图像alt（可选）文本不应是简单的占位符文本，例如“图像”。';
$string['checkdesc:imghasalt'] = '图像元素不应缺少图像alt（可选）文本，除非图片纯粹是装饰性的，没有任何意义。';
$string['checkdesc:imgwithmaphasusemap'] = '具有可点击区域的图像地图需要匹配的“usemap”和“map”元素。';
$string['checkdesc:legendtextnotempty'] = '图例元素（用于说明字段集元素），应该包含文本。';
$string['checkdesc:marqueeisnotused'] = '字幕（自动滚动）元素不可访问，不应使用。';
$string['checkdesc:noheadings'] = '没有标题会降低内容的结构化程度并增加阅读难度。';
$string['checkdesc:objectmusthaveembed'] = '对象元素（用于嵌入外部资源）不应缺少相应的“嵌入”元素。';
$string['checkdesc:objectmusthavetitle'] = '对象元素（用于嵌入外部资源）不应缺少相应的“标题”描述。';
$string['checkdesc:objectmusthavevalidtitle'] = '对象元素（用于嵌入外部资源）应具有与文本对应的“标题”。';
$string['checkdesc:strikeisnotused'] = '不可使用Strike（加删除线）元素；应改为使用“del”（已删除）。';
$string['checkdesc:tabledatashouldhaveth'] = '表格最好不要缺少标题。';
$string['checkdesc:tablesummarydoesnotduplicatecaption'] = '表格概要和标题不应完全相同。';
$string['checkdesc:tabletdshouldnotmerge'] = '表格最好不要有任何合并的单元格。';
$string['checkdesc:tablethshouldhavescope'] = '应声明表格的行或列范围（用于将行和列映射到每个单元格）。';
$string['checkidvalidation'] = '用于检查任何无效检验码的任务';
$string['checkscompleted'] = '已完成检查：{$a}';
$string['checktype'] = '检查组';
$string['checktype:form'] = '表格';
$string['checktype:image'] = '图像';
$string['checktype:layout'] = '布局';
$string['checktype:link'] = '链接';
$string['checktype:media'] = '媒体';
$string['checktype:table'] = '表格';
$string['checktype:text'] = '文本';
$string['checktyperesults:pluginname'] = '内容类型可访问性工具报告';
$string['checktyperesults:toolname'] = '内容类型概要';
$string['checktyperesults:toolshortname'] = '内容类型';
$string['cmpercent'] = '总体活动的百分比';
$string['cmpercenterrors'] = '总体错误百分比';
$string['cmpercenttitle'] = '活动与错误的总体百分比明细';
$string['confirmationmessage'] = '本课程已列入分析进程。最快将在{$a}前完成分析。请在此之后返回查看。';
$string['contactadmin'] = '请联系管理员以完成注册。';
$string['contactus'] = '联系我们';
$string['contentfive'] = '自动修复过期的HTML标记。';
$string['contentfour'] = '确定哪些活动具有最多的可访问性问题，以确定工作优先级。';
$string['contentone'] = '自动评价课程内容及评估可访问性问题。';
$string['contentsix'] = '为教师创建更好内容提供即时提示。';
$string['contentthree'] = '为学生提供音频、ePub和电子盲文等可访问格式的内容。';
$string['contenttwo'] = '批量更新网页链接、图像描述和视频字幕中的不清晰或缺失文本。';
$string['contenttypeerrors'] = '每门课程和每种内容类型的活动内容测试总结果。';
$string['contentyperesults'] = '每门课程内容区域的通过/失败总数。';
$string['contextid'] = '上下文id';
$string['core_course'] = '课程';
$string['core_question'] = '题库';
$string['count'] = '计数';
$string['country'] = '国家';
$string['country_help'] = '站点所在国';
$string['coursecount'] = '课程数';
$string['deletehistoricaldata'] = '删除历史检查结果';
$string['dependency'] = '依靠';
$string['emptycategory'] = '未找到类别{$a}的课程';
$string['emptytagcourses'] = '未找到已配置标记的课程的结果';
$string['enableaccessibilitytools'] = '启用可访问性工具';
$string['enableaccessibilitytools_desc'] = '可访问性工具包有助于确定课程中的可访问性问题。';
$string['error:nocoursespecified'] = '摘要报告需要有效的课程 ID。请从课程中访问 Accessibility Toolkit。';
$string['errorlink'] = '编辑{$a}的错误实例';
$string['errors'] = '错误：{$a}';
$string['errors:pluginname'] = '错误列表可访问性工具';
$string['errors:toolname'] = '错误列表概要';
$string['errors:toolshortname'] = '错误列表';
$string['eventanalysis_requested'] = '已要求进行内容分析';
$string['eventanalysis_requesteddesc'] = '要求对课程{$a}进行内容分析。';
$string['eventreport_downloaded'] = '可访问性概要已下载';
$string['eventreport_downloadeddesc'] = '已下载课程id{$a}的可访问性概要。';
$string['eventreport_viewed'] = '查看可访问性报告';
$string['eventreport_vieweddesc'] = '已查看课程id{$a->course}的可访问性报告，
类别id{$a->category}，选项卡{$a->tab}。';
$string['failed'] = '查看了课程ID{$a->course}的可访问性报告，
类别ID{$a->Category}，选项卡{$a->tab}。';
$string['failedcount'] = '失败：{$a}';
$string['footerheading'] = '页脚部分';
$string['fullcachedone'] = '无法重新运行缓存';
$string['hashcorrect'] = '输入的代码是正确的。';
$string['hashincorrect'] = '输入的代码不正确。';
$string['headingfive'] = 'HTML修复程序';
$string['headingfour'] = '集中精力';
$string['headingone'] = '评估内容';
$string['headingsix'] = '性能支持';
$string['headingthree'] = '可访问文件格式';
$string['headingtwo'] = '补救措施';
$string['hideshow'] = '隐藏/显示';
$string['icon:analytics-custom'] = '分析图标';
$string['icon:file-edit-custom'] = '编辑文件图标';
$string['icon:hands-helping-custom'] = '援助之手图标';
$string['icon:search-plus-custom'] = '搜索图标';
$string['icon:tools-custom'] = '工具图标';
$string['icon:wand-magic-custom'] = '魔棒图标';
$string['inactive'] = '插件处于未激活状态，无法使用。请输入有效的注册密钥，然后按“激活”。';
$string['innercontextid'] = '内部上下文ID';
$string['installed'] = '插件安装';
$string['installedcli'] = '通过命令行安装插件';
$string['installeddescription'] = '插件已安装，重定向到激活表单。';
$string['invalidaccessibilitytool'] = '请求的可访问性功能子插件无效。';
$string['invalidcategoryid'] = '无效的类别，请检查您的输入';
$string['invalidcourseid'] = '无效的课程，请检查您的输入';
$string['invalidlinkphrases'] = '点击|点击这里|更多|了解更多点击这里|信息|查看信息点击这里|信息|查看信息点击这里|阅读更多|阅读更多点击这里|更多信息|更多信息点击这里|更多详情|更多详情点击这里';
$string['language'] = '语言';
$string['language_help'] = '网站的语言';
$string['messageprovider:warningcheckid'] = '无效checkid警告';
$string['mobileservice'] = '已启用移动服务（{$a}）';
$string['module'] = '模块';
$string['modulename'] = '名字';
$string['moreinfo'] = '更多信息';
$string['noerrorsfound'] = '未找到搜索参数的常见可访问性错误。祝贺！';
$string['norecords'] = '没有发现与您的搜索参数相关的记录。';
$string['notregistered'] = '您的可访问性工具包需要注册。';
$string['notvalidated'] = '您的可访问性工具包在验证时可以正常使用。';
$string['numcourses'] = '课程数（{$a}）';
$string['numfactivities'] = '活动数（{$a}）';
$string['numfiles'] = '文件数（{$a}）';
$string['numinstances'] = '实例数';
$string['numusers'] = '用户数（{$a}）';
$string['pagedesc:checktype'] = '<p>为了总结和分析各种检查的结果，我们将这些检查分为不同的内容类型。因此，所有与图像相关的可访问性检查结果都在 "图像 "内容类型组中，所有与布局相关的可访问性检查结果都在 "布局 "内容类型组中，依此类推。</p><p>活动被列为活动、资源或与课程本身相关的内容领域。</p><p>内容类型图表页显示每个内容类型组的错误分类：图像、布局、链接、媒体、表格和文本。</p>';
$string['pagedesc:pertarget'] = '<p>为了总结和分析各种检查的结果，我们将这些检查分为不同的内容类型。因此，所有与图像相关的可访问性检查结果都在 "图像 "内容类型组中，所有与布局相关的可访问性检查结果都在 "布局 "内容类型组中，依此类推。</p><p>活动被列为活动、资源或与课程本身相关的内容领域。</p><p>内容类型图表页显示每个内容类型组的错误分类：图像、布局、链接、媒体、表格和文本。</p>';
$string['pagedesctitle:checktype'] = '已解释的内容类型';
$string['pagedesctitle:pertarget'] = '活动分类解释';
$string['passed'] = '通过';
$string['passedcount'] = '已通过：{$a}';
$string['passrate'] = '通过率：{$a}%';
$string['pdf:filename'] = 'Brickfield_概要报告_课程ID-{$a}';
$string['percheckerrors'] = '每门课程每次检查的具体测试和错误数。';
$string['perpage'] = '每页要显示的条目';
$string['pluginname'] = '可访问性工具包';
$string['printable:downloadpdf'] = '下载PDF';
$string['printable:pluginname'] = '概要报告可访问性工具报告';
$string['printable:printreport'] = '可打印报告';
$string['printable:toolname'] = '概要报告';
$string['printable:toolshortname'] = '概要报告';
$string['privacy:metadata'] = '可访问性检查报告插件不存储任何个人数据。';
$string['processanalysisrequests'] = '处理内容分析请求';
$string['registernow'] = '请现在注册。';
$string['registration'] = '登记表';
$string['registrationinfo'] = '<p>此注册过程允许您为已注册的Moodle站点使用Brickfield可访问性工具包入门版。</p><p>此使用受 <a href="{$a}" target="_blank">Brickfield教育实验室条款和条件（在新窗口中打开）</a>的约束，并且您同意使用此产品</p>';
$string['release'] = 'Moodle发布（{$a}）';
$string['remaining'] = '（{$a}剩余错误）';
$string['response:0'] = '此URL不指向任何地方';
$string['response:404'] = '找不到此URL页';
$string['schedule:blocknotscheduled'] = '<p>本课程尚未进入分析进程，以发现常见的可访问性问题</p>';
$string['schedule:notscheduled'] = '<p>本课程尚未进入分析进程，以发现常见的可访问性问题。</p><p>通过单击 "提交分析 "按钮，您将安排所有相关的课程HTML内容进行分析，如课程章节描述、活动描述、问题、页面等。</p><p>该分析将对您的课程HTML内容进行多种常见的可访问性检查，这些结果将显示在这些可访问性工具包的报告页面上。该分析将在后台通过计划任务进行处理，因此其完成速度将取决于任务时长和任务运行时间表。</p>';
$string['schedule:requestanalysis'] = '提交分析';
$string['schedule:scheduled'] = '本课程尚未进入分析进程';
$string['schedule:sitenotscheduled'] = '<p>全局（独立于课程的）内容尚未进入分析进程以发现常见的可访问性问题。</p><p>通过单击 "提交分析 "按钮，您可以安排所有相关的全局（独立于课程的）内容进行分析。</p><p>该分析将对该内容进行多个常见的可访问性检查，然后这些结果将显示在这些可访问性工具包报告页面上。该分析将在后台通过计划任务进行处理，因此其完成速度将取决于任务时长和任务运行时间表。</p>';
$string['schedule:sitescheduled'] = '已安排对全局（独立于课程的）内容进行分析。';
$string['secretkey'] = 'API密钥';
$string['secretkey_help'] = '此代码在注册后通过电子邮件接收。';
$string['sendfollowinginfo'] = '<p>以下信息将定期发送，仅用于总体统计。它不会在任何重要目录中公开。</p>{$a}';
$string['settings'] = '可访问性工具包设置';
$string['sitehash'] = '私钥';
$string['sitehash_help'] = '此代码在注册后通过电子邮件接收。';
$string['taberrors'] = '检查错误';
$string['targetavetitle'] = '每个活动的平均错误数';
$string['targetpercentage'] = '每个活动通过/未通过实例的百分比';
$string['targetratio'] = '活动通过率';
$string['tblcheck'] = '检查';
$string['tblcheckexample'] = '例子';
$string['tblcheckfailed'] = '检查失败';
$string['tblchecksummary'] = '概要';
$string['tbledit'] = '编辑';
$string['tblerrorcount'] = '错误';
$string['tblhtmlcode'] = '现有HTML代码';
$string['tblinstance'] = '实例';
$string['tblline'] = '线';
$string['tbloverallpercentage'] = '总误差%';
$string['tblpercentage'] = '百分比';
$string['tblpreview'] = '预览';
$string['tbltarget'] = '活动';
$string['tblupdateto'] = '更新至';
$string['titleactivityresultsall'] = '每个活动的结果：所有已审核课程（{$a->count}个课程）';
$string['titleactivityresultspartial'] = '每个活动的结果：课程{$a->name}';
$string['titleall'] = '错误详细信息：所有已审核课程（{$a->count}个课程）';
$string['titlechecktyperesultsall'] = '每种内容类型的结果：所有已审核课程（{$a->count}门课程）';
$string['titlechecktyperesultspartial'] = '每种内容类型的结果：课程{$a->name}';
$string['titleerrorsall'] = '错误详细信息：所有已审核课程（{$a->count}个课程）';
$string['titleerrorscount'] = '错误详细信息：（显示第一个{$a}错误）';
$string['titleerrorspartial'] = '错误详细信息：课程{$a->name}';
$string['titlepartial'] = '错误详细信息：课程{$a->name}';
$string['titleprintableall'] = '课程{$a->name}';
$string['titleprintablepartial'] = '课程{$a->name}';
$string['tools'] = '报告';
$string['toperrors'] = '顶部错误';
$string['toptargets'] = '失败的活动';
$string['totalactivities'] = '总活动';
$string['totalactivitiescount'] = '活动总数：{$a}';
$string['totalareas'] = '总面积';
$string['totalerrors'] = '错误总数';
$string['totalgrouperrors'] = '每种内容类型的错误总数（总和）';
$string['updatesummarydata'] = '更新站点概要数据';
$string['usersmobileregistered'] = '已注册移动设备的用户数（{$a}）';
$string['validationerror'] = '注册密钥验证失败。检查您注册的站点URL和密钥是否正确。';
$string['warningcheckidbody'] = 'Brickfield检查有问题，它处于激活状态，但未列在数据库中。请调查。';
$string['warningcheckidsubject'] = 'Brickfield工具箱checkID警告';
