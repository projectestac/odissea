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
 * Strings for component 'data', language 'zh_cn', version '4.4'.
 *
 * @package     data
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '动作';
$string['actionsmenu'] = '操作菜单';
$string['add'] = '增加条目';
$string['addcomment'] = '添加评论';
$string['addentries'] = '添加条目';
$string['addtemplate'] = '添加条目模板';
$string['advancedsearch'] = '高级搜索';
$string['allowcomments'] = '允许评论词条';
$string['alttext'] = '替代文字';
$string['approvalstatus'] = '审核结果';
$string['approve'] = '批准';
$string['approved'] = '已批准';
$string['areacontent'] = '字段';
$string['ascending'] = '升序';
$string['asearchtemplate'] = '高级搜索模版';
$string['atmaxentry'] = '您输入的条目数已达到上限！';
$string['authorfirstname'] = '名字';
$string['authorlastname'] = '姓氏';
$string['autogenallforms'] = '生成所有缺省模板';
$string['autolinkurl'] = '自动链接 URL';
$string['availablefromdate'] = '开放时间';
$string['availabletags'] = '可用的标签';
$string['availabletags_help'] = '标记是模板中的占位符，在编辑或查看条目时，这些占位符将被数据或其他项目（如编辑图标）替换。

字段的格式为[[fieldname]]。所有其他标记的格式均为##sometag##。

只有“可用标记”列表中的标记可用于当前模板。';
$string['availabletodate'] = '适用于';
$string['availabletodatevalidation'] = '可用开始日期不能早于可用开始日期。';
$string['blank'] = '空白';
$string['buttons'] = '动作';
$string['bynameondate'] = '作者 {$a->name} - {$a->date}';
$string['calendarend'] = '{$a}关闭';
$string['calendarstart'] = '{$a}打开';
$string['cancel'] = '取消';
$string['cannotaccesspresentsother'] = '您没有访问其他用户预设置的权限';
$string['cannotadd'] = '无法增加新的条目！';
$string['cannotapplypreset'] = '应用预设时出错';
$string['cannotdeletepreset'] = '删除预设出错';
$string['cannotoverwritepreset'] = '覆盖预设时出错';
$string['cannotunziptopreset'] = '无法向预设目录解压缩';
$string['checkbox'] = '复选框';
$string['chooseexportfields'] = '选择要导出的字段';
$string['chooseexportformat'] = '选择要导出的格式';
$string['chooseorupload'] = '选择文件';
$string['choosepreset'] = '预设文件';
$string['closebeforeopen'] = '您在开始日期之前指定了结束日期。';
$string['columns'] = '专栏';
$string['comment'] = '评论';
$string['commentdeleted'] = '评论已删除';
$string['commentempty'] = '没有评论';
$string['comments'] = '评论';
$string['commentsaved'] = '评论已保存';
$string['commentsn'] = '{$a} 条评论';
$string['commentsoff'] = '未启用评论功能';
$string['completiondetail:entries'] = '创建条目：{$a}';
$string['completionentries'] = '要求输入';
$string['completionentriescount'] = '添加条目';
$string['completionentriesdesc'] = '所需的最小条目数：{$a}';
$string['configenablerssfeeds'] = '这个开关会使所有数据库都可以启用RSS种子。您仍需要手工在每个数据库的设置中打开种子功能。';
$string['confirmdeletefield'] = '您要删除这个字段，确定吗？';
$string['confirmdeleterecord'] = '您确定要删除此条目吗?';
$string['confirmdeleterecords'] = '您确定要删除这些记录？';
$string['createactivity'] = '创建您自己的字段来收集数据，或使用已包含字段的预设。';
$string['createfields'] = '创建字段以收集不同类型的数据。';
$string['createtemplates'] = '模板定义活动的界面。创建字段后，将自动创建模板。或者，您可以使用预设，其中包括字段和模板。';
$string['csstemplate'] = '自定义CSS';
$string['csvfailed'] = '无法从 CSV 文件中读取原始数据';
$string['csvfile'] = '包含 CSV 文件的 CSV 或 ZIP';
$string['csvimport'] = 'CSV 文件导入';
$string['csvimport_help'] = '可以从文本文件导入数据项。这个文件的第一行是字段名列表，然后每行一条数据记录。';
$string['csvwithselecteddelimiter'] = '<abbr title="逗号分隔">CSV</abbr>';
$string['data:addinstance'] = '添加新数据库';
$string['data:approve'] = '批准和撤消已批准的条目';
$string['data:comment'] = '撰写评论';
$string['data:exportallentries'] = '导出所有数据库条目';
$string['data:exportentry'] = '导出一条数据库条目';
$string['data:exportownentry'] = '导出自己的数据库条目';
$string['data:exportuserinfo'] = '导出用户资料';
$string['data:managecomments'] = '管理评论';
$string['data:manageentries'] = '管理条目';
$string['data:managetemplates'] = '管理模板';
$string['data:manageuserpresets'] = '管理预设';
$string['data:rate'] = '条目评级';
$string['data:readentry'] = '阅读条目';
$string['data:view'] = '查看数据库活动';
$string['data:viewallratings'] = '查看所有个人给出的原始评级';
$string['data:viewalluserpresets'] = '查看所有用户的预设';
$string['data:viewanyrating'] = '查看每个人获得的总评级';
$string['data:viewentry'] = '查看条目';
$string['data:viewrating'] = '查看您收到的总评分';
$string['data:writeentry'] = '撰写条目';
$string['date'] = '日期';
$string['dateentered'] = '输入日期';
$string['datemodified'] = '最后编辑：';
$string['defaultfielddelimiter'] = '(缺省为逗号)';
$string['defaultfieldenclosure'] = '缺省为空';
$string['defaultsortfield'] = '缺省排序字段';
$string['delcheck'] = '批量删除筛选框';
$string['delete'] = '删除';
$string['deleteallentries'] = '删除所有条目';
$string['deletecomment'] = '您确定要删除这条这注释吗？';
$string['deleteconfirm'] = '删除预设 {$a}？';
$string['deleted'] = '已删除';
$string['deleteentry'] = '删除条目';
$string['deletefield'] = '删除字段';
$string['deletenotenrolled'] = '删除未选课用户的条目';
$string['deletewarning'] = '删除预设会将其从所有课程的可用预设列表中删除';
$string['descending'] = '降序';
$string['directorynotapreset'] = '{$a->directory} 没有预设：文件丢失{$a->missing_files}';
$string['disapprove'] = '撤消批准';
$string['download'] = '下载';
$string['edit'] = '编辑';
$string['editcomment'] = '编辑注释';
$string['editentry'] = '编辑条目';
$string['editfield'] = '编辑字段';
$string['editordisable'] = '不可编辑';
$string['editorenable'] = '启用代码编辑器';
$string['editpreset'] = '编辑预设';
$string['emptyadd'] = '模板为空，按缺省模板生成...';
$string['emptyaddform'] = '您没有填写任何字段!';
$string['emptypresetname'] = '预设名称或文件不能为空';
$string['enabletemplateeditorcheck'] = '是否确实要启用编辑器？这可能导致在保存模板时更改内容。';
$string['entries'] = '条目';
$string['entrieslefttoadd'] = '您必须添加{$a->entriesleft}个以上条目才能完成活动';
$string['entrieslefttoaddtoview'] = '您必须添加{$a->entrieslefttoview}个以上条目，才能查看其他参与人的条目。';
$string['entry'] = '条目';
$string['entrysaved'] = '您的条目已保存';
$string['errordatafilenotfound'] = '无法导入该文件。可接受的文件类型为 CSV 或包含用于导出条目的格式的 CSV 文件的 ZIP。';
$string['errormustbeteacher'] = '只有教师能使用此页';
$string['errormustsupplyvalue'] = '您必须在此处提供一个值。';
$string['errorpresetexists'] = '具有此名称的预设已存在';
$string['errorpresetexistsbutnotoverwrite'] = '具有此名称的预设已存在。选择其他名称。';
$string['errorpresetnotfound'] = '未找到名称 {$a} 的预设。';
$string['eventfieldcreated'] = '字段创建';
$string['eventfielddeleted'] = '字段删除';
$string['eventfieldupdated'] = '现场更新';
$string['eventrecordcreated'] = '创建的记录';
$string['eventrecorddeleted'] = '删除记录';
$string['eventrecordupdated'] = '记录更新';
$string['eventtemplateupdated'] = '模板更新';
$string['eventtemplateviewed'] = '查看的模板';
$string['example'] = '数据库模块样例';
$string['excel'] = 'Excel';
$string['expired'] = '对不起，此活动已于{$a}关闭，不再可用';
$string['export'] = '输出';
$string['exportaszip'] = '以压缩格式输出';
$string['exportaszip_help'] = '导出为zip功能允许您将模板和字段保存为预设zip以供下载。然后可以将zip导入另一个课程。';
$string['exportedtozip'] = '输出到临时的压缩文件...';
$string['exportentries'] = '导出条目';
$string['exportformat'] = '导出格式';
$string['exportoptions'] = '导出选项';
$string['exportownentries'] = '仅导出您自己的条目？({$a->mine}/{$a->all})';
$string['exportpreset'] = '导出预设';
$string['failedpresetdelete'] = '尝试删除预设时遇到错误。';
$string['fieldadded'] = '字段已添加';
$string['fieldallowautolink'] = '允许自动链接';
$string['fielddeleted'] = '字段已删除';
$string['fielddelimiter'] = '字段分隔符';
$string['fielddescription'] = '字段描述';
$string['fieldenclosure'] = '文字分割符';
$string['fieldheight'] = '高度';
$string['fieldheightlistview'] = '列表视图中的高度（以像素为单位）';
$string['fieldheightsingleview'] = '单一视图中的高度（以像素为单位）';
$string['fieldids'] = 'ids 字段';
$string['fieldmappings'] = '字段映射';
$string['fieldmappings_help'] = '此菜单允许您保留现有数据库中的数据。若要在字段中保留数据，必须将其映射到新字段，数据将显示在该字段中。任何字段也可以留空，不复制任何信息。任何未映射到新字段的旧字段将丢失，其所有数据将被删除。
您只能映射相同类型的字段，因此每个下拉菜单中都有不同的字段。此外，您必须小心不要尝试将一个旧字段映射到多个新字段。';
$string['fieldname'] = '字段名';
$string['fieldnametype'] = '{$a->name} ({$a->type})';
$string['fieldnotmatched'] = '您文件中的下述字段不存在于数据库中：{$a}';
$string['fieldoptions'] = '选项(每行一个)';
$string['fields'] = '字段';
$string['fieldshelp'] = '创建字段以收集不同类型的数据。字段定义数据库中条目的结构。';
$string['fieldsinformationtags'] = '字段信息';
$string['fieldsnavigation'] = '字段三级导航';
$string['fieldtagdescription'] = '{$a} 描述';
$string['fieldtagid'] = '{$a} ID';
$string['fieldtagname'] = '{$a} 名称';
$string['fieldupdated'] = '字段已更新';
$string['fieldwidth'] = '宽度';
$string['fieldwidthlistview'] = '列表视图中的宽度（以像素为单位）';
$string['fieldwidthsingleview'] = '独立视图中的宽度（以像素为单位）';
$string['file'] = '文件';
$string['fileencoding'] = '编码';
$string['filesnotgenerated'] = '生成文件 {$a} 失败';
$string['filtername'] = '数据库自动链接';
$string['footer'] = '尾';
$string['forcelinkname'] = '链接名强制为';
$string['foundnorecords'] = '未找到任何记录。<a href=“{$a->reseturl}”>全部清除</a>';
$string['foundrecords'] = '在 {$a->max} 记录中找到 {$a->num}。<a href=“{$a->reseturl}”>全部清除</a>';
$string['fromfile'] = '从压缩文件导入';
$string['fromfile_help'] = '“从zip文件导入”功能允许您浏览和上载模板和字段的预设zip。';
$string['generateerror'] = '有部分文件未被生成！';
$string['header'] = '头';
$string['headeraddtemplate'] = '定义用于添加或编辑条目的接口';
$string['headerasearchtemplate'] = '定义高级搜索接口';
$string['headercsstemplate'] = '将自定义 CSS 添加到模板中';
$string['headerjstemplate'] = '为“列表”、“单个”或“添加条目”模板添加自定义 JavaScript。';
$string['headerlisttemplate'] = '定义列表视图的外观';
$string['headerrsstemplate'] = '定义条目在 RSS 源中的外观';
$string['headersingletemplate'] = '定义独立视图的外观';
$string['id'] = '条目 ID';
$string['importandapply'] = '导入预设并应用';
$string['importapreset'] = '导入预设';
$string['importentries'] = '导入条目';
$string['importpreset'] = '导入预设';
$string['importpreset_desc'] = '预设将应用于此活动，并创建字段和模板。
 它不会出现在预设列表中。';
$string['importpresetmissingcapability'] = '您没有导入预设的权限。';
$string['importsuccess'] = '成功应用预设';
$string['includeapproval'] = '包含审核状态';
$string['includefiles'] = '在导出中包含文件';
$string['includetags'] = '包含模板文件的标签';
$string['includetime'] = '包含增加时间、修改时间';
$string['includeuserdetails'] = '包含用户详情';
$string['indicator:cognitivedepth'] = '数据库活动认知深度';
$string['indicator:cognitivedepth_help'] = '这个指标是基于学生在数据库活动中所达到的认知深度。';
$string['indicator:cognitivedepthdef'] = '数据库认知';
$string['indicator:cognitivedepthdef_help'] = '在此分析间隔期间，参与者已达到数据库活动提供的认知参与百分比（级别=无查看、查看、提交）';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = '数据库活动社会宽度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在数据库活动中所达到的社会宽度。';
$string['indicator:socialbreadthdef'] = '社会数据库';
$string['indicator:socialbreadthdef_help'] = '在此分析间隔期间，参与者已达到数据库活动提供的社会参与度的百分比（级别=无参与，仅参与者一人）';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['insufficiententries'] = '查看这个数据库需要更多的条目';
$string['intro'] = '描述';
$string['invalidaccess'] = '页面访问错误';
$string['invalidfieldid'] = '字段ID不正确';
$string['invalidfieldname'] = '请为这个字段选择一个新名字';
$string['invalidfieldtype'] = '字段类型错误';
$string['invalidid'] = '不正确的数据ID';
$string['invalidpreset'] = '{$a}不是一个预设。';
$string['invalidrecord'] = '不正确的记录';
$string['invalidurl'] = '您刚刚输入的 URL 不合法';
$string['jstemplate'] = '自定义Javascript';
$string['latitude'] = '纬度';
$string['latlong'] = '坐标';
$string['latlongboth'] = '纬度和经度都是必需的。';
$string['latlongdownloadallhint'] = '把所有的条目链接下载为 KML 文件';
$string['latlongkmllabelling'] = '怎样在 KML 文件中标出内容（谷歌地球）';
$string['latlonglinkservicesdisplayed'] = '要显示的 Link-out 服务';
$string['latlongotherfields'] = '其他字段';
$string['list'] = '显示列表';
$string['listtemplate'] = '列表视图模板';
$string['listview'] = '列表视图';
$string['longitude'] = '经度';
$string['manageapproved'] = '允许修改已批准的条目';
$string['manageapproved_help'] = '允许学生在获得批准后编辑或删除其条目，编辑过的参赛作品需要重新批准。';
$string['managefields'] = '管理字段';
$string['mapexistingfield'] = '映射到{$a}';
$string['mapnewfield'] = '创建一个新字段';
$string['mapping:applypresets'] = '应用预设';
$string['mapping:dialogtitle:usepreset'] = '应用预设 {$a}？';
$string['mapping:fieldstocreate'] = '要创建的字段：{$a}';
$string['mapping:fieldstodelete'] = '要删除的现有字段：{$a}';
$string['mapping:mapfields'] = '映射字段';
$string['mapping:warningmessagedelete'] = '如果要删除的字段与要应用的预设中的新字段类型相同，则可以在映射字段中映射它们。';
$string['mapping:warningmessagedeleteandcreate'] = '如果要删除的字段与要创建的字段类型相同，则可以在映射字段中映射它们。';
$string['mappingwarning'] = '所有不能映射到新字段的旧字段将会丢失，而且此字段内的全部数据也会被删除。';
$string['maxentries'] = '最大条目数';
$string['maxentries_help'] = '学生在此活动最多可以提交的条目数。';
$string['maxsize'] = '最大尺寸';
$string['menu'] = '菜单';
$string['menuchoose'] = '选择...';
$string['missingdata'] = '必须为字段类提供数据 ID 或对象';
$string['missingfield'] = '程序员错误：您需要在定义字段类时指定字段和/或数据';
$string['missingfieldtype'] = '未找到 {$a->name} 的字段类型';
$string['missingfieldtypeimport'] = '由于未安装相应的字段类型，因此未导入以下字段：';
$string['missingfieldtypes'] = '以下字段未安装其相应的字段类型，并且不会包含在“添加条目”表单中。您需要检查“添加条目”模板并删除任何字段名称。';
$string['modulename'] = '数据库';
$string['modulename_help'] = '数据库使参与者能够创建、维护和搜索条目集合。

条目的结构是使用不同类型的字段定义的，例如短文本、下拉列表、文本区域、URL、图像或文件。

作为教师，您可以对条目进行评论和评分。您还可以允许学生对参赛作品进行评分和评论（同行评估）。评分可以汇总起来形成最终成绩，该成绩记录在成绩簿中。

如果启用了数据库自动链接过滤器，则数据库中的任何条目都将自动链接到课程中出现的单词或短语的位置。

您可以使用数据库执行以下操作：

* 创建链接、书籍、书评、期刊参考等的协作集合。
* 展示学生创作的照片、海报、网站或诗歌，供同行评论和评论。';
$string['modulename_link'] = 'mod/data/view';
$string['modulenameplural'] = '数据库';
$string['more'] = '更多';
$string['moreurl'] = '更多 网页地址';
$string['movezipfailed'] = '移动压缩文件失败';
$string['multientry'] = '重复的条目';
$string['multimenu'] = '菜单(多选)';
$string['multipletags'] = '发现多个标签! 模板还没有保存';
$string['newentry'] = '新条目';
$string['newfield'] = '创建一个字段';
$string['newfield_help'] = '一个字段允许输入数据。数据库活动中的每个条目可以有多种类型的多个字段，例如日期字段（允许参与者从下拉菜单中选择日期、月份和年份）、图片字段（允许参与者上载图像文件）或复选框字段（允许参与者选择一个或多个选项）。

每个字段必须具有唯一的字段名。字段描述是可选的。';
$string['noaccess'] = '您无权访问此页';
$string['nodefinedfields'] = '新的预设值没有定义';
$string['nofieldcontent'] = '未找到域内容';
$string['nofieldindatabase'] = '尚未给此数据库定义字段。';
$string['nofields'] = '暂无字段';
$string['nolisttemplate'] = '尚未定义列表视图模板';
$string['nomatch'] = '找不到匹配的条目！';
$string['nomaximum'] = '无最大数量限制';
$string['nopreviewavailable'] = '没有适用于 {$a} 的预览';
$string['norecords'] = '没有条目';
$string['nosingletemplate'] = '独立显示模板尚未定义';
$string['notapproved'] = '等待批准';
$string['notapprovederror'] = '参赛作品尚未获批。';
$string['notemplates'] = '暂无模板';
$string['notinjectivemap'] = '非单项映射';
$string['notopenyet'] = '抱歉，此活动在{$a}之前不可用';
$string['number'] = '数字';
$string['numberrssarticles'] = 'RSS种子中的条目';
$string['numnotapproved'] = '待核准';
$string['numrecords'] = '{$a}个条目';
$string['ods'] = '<abbr title="OpenDocument Spreadsheet">ODS</abbr>&nbsp;(OpenOffice)';
$string['openafterclose'] = '您已在关闭日期之后指定打开日期';
$string['optionaldescription'] = '简要描述（可选）';
$string['optionalfilename'] = '文件名（可选）';
$string['other'] = '其他';
$string['otherfields'] = '所有其他字段';
$string['overrwritedesc'] = '将现有预设替换为此名称并覆盖其内容';
$string['overwrite'] = '覆盖';
$string['overwritesettings'] = '覆盖当前设置，例如评论、评级等';
$string['page-mod-data-x'] = '任意数据库活动模块页面';
$string['pagesize'] = '每页条目数';
$string['participants'] = '参与者';
$string['picture'] = '图片';
$string['pleaseaddsome'] = '请在创建一些在下面或 <a href="{$a}">选择一个预定义的集合</a>再开始.';
$string['pluginadministration'] = '数据库活动管理';
$string['pluginname'] = '数据库';
$string['portfolionotfile'] = '导出到文件包而不是文件（只支持csv和leap2a）';
$string['presetdeleted'] = '预设已删除';
$string['presetinfo'] = '保存为预设后，将发布这个模板。其他的用户也可以在他们的数据库中使用它。';
$string['presetnotselected'] = '未选择预设。';
$string['presets'] = '预设';
$string['presetshelp'] = '选择要用作起点的预设';
$string['preview'] = '{$a} 预览';
$string['previewaction'] = '预览';
$string['privacy:metadata:commentpurpose'] = '对数据库记录的评论';
$string['privacy:metadata:data_content'] = '字段的内容';
$string['privacy:metadata:data_content:content'] = '内容';
$string['privacy:metadata:data_content:content1'] = '附加内容1';
$string['privacy:metadata:data_content:content2'] = '附加内容2';
$string['privacy:metadata:data_content:content3'] = '附加内容3';
$string['privacy:metadata:data_content:content4'] = '附加内容4';
$string['privacy:metadata:data_content:fieldid'] = '字段定义ID';
$string['privacy:metadata:data_records'] = '数据库活动中的记录';
$string['privacy:metadata:data_records:approved'] = '批准状态';
$string['privacy:metadata:data_records:groupid'] = '团体';
$string['privacy:metadata:data_records:timecreated'] = '创建记录的时间';
$string['privacy:metadata:data_records:timemodified'] = '上次修改记录的时间';
$string['privacy:metadata:data_records:userid'] = '创建记录的用户';
$string['privacy:metadata:datafieldnpluginsummary'] = '数据库活动模块的字段';
$string['privacy:metadata:filepurpose'] = '附加到数据库记录的文件';
$string['privacy:metadata:ratingpurpose'] = '对数据库记录的评级';
$string['privacy:metadata:tagpurpose'] = '数据库记录上的标记';
$string['radiobutton'] = '单选按钮';
$string['recordapproved'] = '已批准条目';
$string['recorddeleted'] = '已删除条目';
$string['recorddisapproved'] = '未批准条目';
$string['recordsnotsaved'] = '没有记录被保存。请确认上传文件的安排。';
$string['recordssaved'] = '条目已保存';
$string['removealldatatags'] = '删除所有数据库标记';
$string['requireapproval'] = '需要批准';
$string['requireapproval_help'] = '教师必须先批准参赛作品，然后才能让所有人都能看到这些参赛作品';
$string['required'] = '要求的';
$string['requiredentries'] = '完成所需条目（旧）';
$string['requiredentries_help'] = '如果设置，将显示一条消息，说明完成所需的条目数。请注意，此设置未连接到“活动完成”。

对于活动完成所需的条目，应使用新的活动完成设置“Require entries”。若要完全删除此设置，请设置为“无”，然后保存更改。
请改用“活动完成”部分中的“必填项”字段。';
$string['requiredentriestoview'] = '查看前需要完成条目数';
$string['requiredentriestoview_help'] = '学生在查看其他学生的条目之前需要添加的条目数。

这与数据库自动链接过滤器不兼容。';
$string['requiredentrieswarning'] = '此设置已被“活动完成”设置“需要条目”替换';
$string['requiredfield'] = '必填字段';
$string['resetalltemplates'] = '重置所有模板';
$string['resetalltemplatesconfirm'] = '您将要删除当前预设的所有模板。如果您想稍后恢复模板，则需要在“预设”选项卡中再次选择预设。';
$string['resetalltemplatesconfirmtitle'] = '重置所有模板？';
$string['resetsettings'] = '重置字段';
$string['resettemplate'] = '重置当前模板';
$string['resettemplateconfirm'] = '这将永久删除您当前预设的 {$a}';
$string['resettemplateconfirmtitle'] = '重置模板？';
$string['resizingimages'] = '调整图片到拇指大小';
$string['rows'] = '列';
$string['rssglobaldisabled'] = '已禁用。请参看站点变量配置。';
$string['rsstemplate'] = 'RSS 模板';
$string['rsstitletemplate'] = 'RSS 标题模板';
$string['rsstype'] = '此活动的RSS种子';
$string['save'] = '保存';
$string['saveandadd'] = '保存并添加另一个';
$string['saveandview'] = '保存并浏览';
$string['saveaspreset'] = '发布预设';
$string['saveaspreset_help'] = '保存为预设值功能会发布此模板和字段，从而网站中的其他人也可以使用。（您随时可以将其从预设列表中删除。）';
$string['saveaspresetmissingcapability'] = '用户无权将数据库另存为预设';
$string['savedataaspreset'] = '保存所有字段和模板，并在此站点上按预设发布';
$string['savesettings'] = '保存设置';
$string['savesuccess'] = '预设已保存。<a href=“{$a->url}”>预览预设</a>';
$string['savetemplate'] = '保存模板';
$string['search'] = '搜索';
$string['search:activity'] = '数据库-活动信息';
$string['search:entry'] = '数据库-条目';
$string['searchresults'] = '包含“{$a}”的条目';
$string['selectedrequired'] = '要求全选';
$string['selectexportoptions'] = '数据库-条目';
$string['selectfields'] = '数据库-条目';
$string['selectfordeletion'] = '选择要删除的条目';
$string['showall'] = '显示所有条目';
$string['showmore'] = '显示更多';
$string['single'] = '独立视图';
$string['singletemplate'] = '独立视图模板';
$string['singleview'] = '单视图';
$string['startbuilding'] = '开始构建您的活动';
$string['subplugintype_datafield'] = '数据库字段类型';
$string['subplugintype_datafield_plural'] = '数据库字段类型';
$string['subplugintype_datapreset'] = '预设';
$string['subplugintype_datapreset_plural'] = '预设';
$string['tagarea_data_records'] = '数据记录';
$string['tags'] = '标签';
$string['tagsdeleted'] = '数据库标记已被删除';
$string['teachersandstudents'] = '{$a->teachers} 和 {$a->students}';
$string['templatereset'] = '重置模板';
$string['templateresetall'] = '重置所有模板';
$string['templates'] = '模板';
$string['templatesaved'] = '模板已保存';
$string['templatesnavigation'] = '模板三级导航';
$string['text'] = '文本';
$string['textarea'] = '文本域';
$string['timeadded'] = '添加时间';
$string['timemodified'] = '修改时间';
$string['todatabase'] = '至此数据库。';
$string['type'] = '字段类型';
$string['undefinedprocessactionmethod'] = '在 Data_Preset 中处理动作“{$a}”，没有定义动作的方法';
$string['unknown'] = '未知字段';
$string['unsupportedfields'] = '不支持的字段';
$string['unsupportedfieldslist'] = '无法导出以下字段：';
$string['updatefield'] = '更新已有字段';
$string['uploadfile'] = '上传文件';
$string['uploadrecords'] = '导入条目';
$string['uploadrecords_help'] = '通过 CSV 或包含 CSV 文件的 ZIP（如果导出中包含文件）导入从另一个数据库导出的条目。

或者，要创建用于导入的 CSV 文件，请向数据库添加一个条目，然后将其导出。编辑 CSV 文件并添加更多条目。';
$string['uploadrecords_link'] = 'mod/data/import';
$string['url'] = 'URL';
$string['usedate'] = '包含在搜索中。';
$string['usepredefinedset'] = '使用预定义集';
$string['usepreset'] = '使用此预设';
$string['usestandard'] = '使用一个预设';
$string['usestandard_help'] = '要使用可用于整个站点的预设，请从列表中选择它。（如果已使用“另存为预设”功能将预设添加到列表中，则可以选择将其删除。）';
$string['viewfromdate'] = '从何时开始只读';
$string['viewnavigation'] = '视图模式三级导航';
$string['viewtemplates'] = '查看模板';
$string['viewtodate'] = '只读到何时';
$string['viewtodatevalidation'] = '只读截止日期不能早于只读起始日期。';
$string['wrongdataid'] = '提供数据 ID 错误';
