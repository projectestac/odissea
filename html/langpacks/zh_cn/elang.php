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
 * Strings for component 'elang', language 'zh_cn', version '4.5'.
 *
 * @package     elang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedlanguages'] = '允许的内容语言';
$string['allowedlanguages_desc'] = '创建或编辑视频听写时提供的内容语言。一个都不选，就会列出完整语言表。即使你之后从这里移除某种语言，活动仍会保留已保存的语言。';
$string['allowtranscriptdownload'] = '参与者下载文字稿';
$string['allowtranscriptdownload_help'] = '开启后，参与者可以把隐藏了每个空格的文字稿练习纸下载为 PDF、Word、OpenDocument 或纯文本。

默认为关闭。有权限的教学人员始终可以下载文字稿，与此设置无关。';
$string['allowtranscriptdownload_label'] = '参与者可以下载练习纸';
$string['completiondetail_completionfinishattempt'] = '完成一次尝试';
$string['completionfinishattempt'] = '参与者必须完成一次尝试';
$string['cuepausemode'] = '字幕结束时暂停';
$string['cuepausemode_auto'] = '自动';
$string['cuepausemode_help'] = '媒体是否在字幕结束处停下。

* 自动 —— 播放继续，只有在正处理该条字幕时才会在其结束处停下，也就是点击了该字幕或它的某个空格之后，或键盘焦点落在其中之一时。
* 在每条未作答的字幕处停止 —— 只要字幕中还有空着的空格，播放就会在其结束处停下，等待继续。
* 从不停止 —— 播放一直进行到媒体结束。

前两种都不会在空格已全部填好的字幕处停下：那是已完成的工作，停在那里只会要求一次毫无作用的按键。这也意味着第二遍做练习时，只会在仍有缺漏的地方停下。';
$string['cuepausemode_nostop'] = '从不停止';
$string['cuepausemode_stop'] = '在每条未作答的字幕处停止';
$string['editcontent'] = '编辑内容';
$string['editor_addcue'] = '添加片段';
$string['editor_addgap'] = '用所选文字创建空格';
$string['editor_addhint'] = '添加提示';
$string['editor_addvariant'] = '添加变体';
$string['editor_advanced'] = '高级设置';
$string['editor_algoexact'] = '完全匹配';
$string['editor_algorithm'] = '答案比对';
$string['editor_algowordrecognized'] = '接受相近答案';
$string['editor_answers'] = '接受的变体';
$string['editor_autosaved'] = '所有更改已保存。';
$string['editor_autosaveerror'] = '自动保存失败，请用“保存”重试。';
$string['editor_captureend'] = '按播放位置设置结束时间';
$string['editor_capturestart'] = '按播放位置设置开始时间';
$string['editor_cueactions'] = '片段操作';
$string['editor_cuecount'] = '片段：{$a}';
$string['editor_currentmedia'] = '当前媒体：';
$string['editor_deletecue'] = '删除片段';
$string['editor_deletegap'] = '删除空格';
$string['editor_emptytranscript'] = '（尚无文字）';
$string['editor_endtime'] = '结束时间';
$string['editor_formatsubrip'] = 'SubRip (.srt)';
$string['editor_formatwebvtt'] = 'WebVTT (.vtt)';
$string['editor_gapcount'] = '空格：{$a}';
$string['editor_gaprange'] = '空格位置（字符）';
$string['editor_gotomedia'] = '前往“媒体”';
$string['editor_heading'] = '编辑字幕与空格';
$string['editor_hints'] = '提示';
$string['editor_hinttext'] = '提示文字';
$string['editor_hinttype'] = '类型';
$string['editor_hinttype_firstletter'] = '首字母';
$string['editor_hinttype_partial'] = '部分显示';
$string['editor_hinttype_solution'] = '答案';
$string['editor_hinttype_text'] = '自由文本';
$string['editor_hinttype_translation'] = '翻译';
$string['editor_hinttype_wordlength'] = '词长';
$string['editor_import'] = '导入字幕';
$string['editor_importappend'] = '追加到现有片段';
$string['editor_importapply'] = '导入';
$string['editor_importcancel'] = '取消';
$string['editor_importcheck'] = '检查内容';
$string['editor_importchecking'] = '正在检查…';
$string['editor_importcuecount'] = '找到的片段';
$string['editor_importduration'] = '时长';
$string['editor_importedcues'] = '已导入片段：{$a}';
$string['editor_importfilehint'] = '请选择包含字幕的 WebVTT (.vtt) 或 SubRip (.srt) 文件。';
$string['editor_importformat'] = '格式';
$string['editor_importfromfile'] = '上传文件';
$string['editor_importfromtext'] = '粘贴文本';
$string['editor_importgapcount'] = '找到的空格';
$string['editor_importhint'] = '粘贴 WebVTT 或 SubRip 内容，然后作为片段导入。';
$string['editor_importparseerror'] = '无法将此内容读取为 WebVTT 或 SubRip。';
$string['editor_importpastedtext'] = '粘贴的文本';
$string['editor_importreaderror'] = '无法读取该文件。';
$string['editor_importready'] = '可以导入';
$string['editor_importreplace'] = '替换所有片段';
$string['editor_importreplacedcues'] = '片段已替换；新导入：{$a}';
$string['editor_importsource'] = '来源';
$string['editor_importsummary'] = '找到的内容';
$string['editor_importtoolarge'] = '该文件为 {$a->size}；导入最多接受 {$a->max}。';
$string['editor_importwrongtype'] = '请选择字幕文件（{$a}）。';
$string['editor_insertafter'] = '在其后插入片段';
$string['editor_insertbefore'] = '在其前插入片段';
$string['editor_invalidtime'] = '请按 mm:ss.SSS 格式输入时间，例如 01:05.400。';
$string['editor_linkurl'] = '查词链接';
$string['editor_linkurl_help'] = '显示在空格旁边，作为查该词的去处。不想提供链接就留空。';
$string['editor_loaderror'] = '无法加载编辑器，请刷新页面。';
$string['editor_loading'] = '正在加载编辑器…';
$string['editor_maxlength'] = '最大长度';
$string['editor_maxlength_help'] = '限制参与者能输入多少内容。0 表示不限。';
$string['editor_media'] = '媒体';
$string['editor_mediafile'] = '已上传的文件';
$string['editor_mediakind'] = '媒体类型';
$string['editor_medianone'] = '无';
$string['editor_mediaprovider'] = '提供方';
$string['editor_mediaproviderref'] = '提供方引用';
$string['editor_mediaproviderrefhint'] = '视频 ID 或链接，常见形式均可（例如 youtu.be/…）。';
$string['editor_mediasaved'] = '媒体已保存。';
$string['editor_mediaurl'] = '媒体直链';
$string['editor_nocues'] = '尚无片段。请添加一个，或导入字幕。';
$string['editor_nocueselected'] = '请从列表中选择要编辑的片段。';
$string['editor_nocuesmatch'] = '没有与此搜索匹配的片段。';
$string['editor_nogaps'] = '没有空格';
$string['editor_nomedia'] = '无';
$string['editor_nomedianotice'] = '请先在“媒体”选项卡中添加视频或音频文件。字幕按媒体计时，因此编辑器需要先有媒体，才能处理片段和空格。';
$string['editor_novideotrack'] = '此浏览器无法解码该媒体的视频轨（只播放声音），参与者会看到黑屏。请把文件重新编码为 H.264/MP4（例如用 ffmpeg 或 HandBrake），然后重新上传。';
$string['editor_onboardinggaps'] = '在片段中选中一个词，把它变成空格。';
$string['editor_onboardingimport'] = '导入 WebVTT 或 SubRip 字幕，或手动添加片段。';
$string['editor_onboardingintro'] = '三步创建一个练习：';
$string['editor_onboardingmedia'] = '选择媒体（上传、网址或提供方）。';
$string['editor_onboardingtitle'] = '开始创建练习';
$string['editor_onlywarnings'] = '仅显示有警告的片段';
$string['editor_parsegaps'] = '识别空格标记：[词] 生成允许提示的空格，{词} 生成不带提示的空格。';
$string['editor_penalty'] = '扣分';
$string['editor_poster'] = '封面图';
$string['editor_preview'] = '参与者预览';
$string['editor_publish'] = '发布';
$string['editor_published'] = '该版本已发布。';
$string['editor_removehint'] = '移除提示';
$string['editor_removevariant'] = '移除';
$string['editor_ruleapplied'] = '按规则创建了 %count% 个空格。';
$string['editor_ruleapply'] = '应用 %count% 个空格';
$string['editor_ruleerror'] = '无法生成空格。';
$string['editor_ruleeverynth'] = '每隔 n 个词';
$string['editor_rulefound'] = '规则找到 %count% 个空格。';
$string['editor_rulegenerate'] = '生成空格';
$string['editor_ruleinterval'] = '间隔（n）';
$string['editor_ruletype'] = '空格规则';
$string['editor_rulewordlist'] = '要隐藏的词';
$string['editor_rulewords'] = '词表';
$string['editor_save'] = '保存草稿';
$string['editor_saved'] = '草稿已保存。';
$string['editor_saveerror'] = '无法保存草稿。';
$string['editor_savemedia'] = '保存媒体';
$string['editor_saving'] = '正在保存…';
$string['editor_searchcues'] = '搜索片段';
$string['editor_selecttext'] = '请先在文字稿中选中要隐藏的词。';
$string['editor_solution'] = '答案';
$string['editor_starttime'] = '开始时间';
$string['editor_transcript'] = '文字稿';
$string['editor_unsaved'] = '有未保存的更改';
$string['editor_uploadmedia'] = '上传媒体文件';
$string['editor_variantisregex'] = '将 {$a} 作为正则表达式处理';
$string['editor_variantmatching'] = '接受的变体如何比对';
$string['editor_warnemptysolution'] = '有空格没有答案';
$string['editor_warnnotranscript'] = '没有文字';
$string['editor_warntiming'] = '结束时间不晚于开始时间';
$string['editor_waveform'] = '音频波形';
$string['elang:addinstance'] = '添加新的视频听写';
$string['elang:attempt'] = '完成视频听写';
$string['elang:deleteattempts'] = '删除参与者的尝试';
$string['elang:exportreports'] = '导出含个人数据的报表';
$string['elang:exportsolution'] = '导出带答案的完整文字稿';
$string['elang:exporttranscript'] = '把练习纸导出为文档';
$string['elang:manage'] = '创建和编辑练习内容';
$string['elang:useregex'] = '在接受的答案中使用正则表达式';
$string['elang:view'] = '查看视频听写';
$string['elang:viewreports'] = '查看参与者报表';
$string['error_attemptnotinprogress'] = '此次尝试已不在进行中。';
$string['error_couldnotobtainlock'] = '未能取得此操作的锁，请重试。';
$string['error_draftrevisionmismatch'] = '此草稿在你载入之后已被更改。请重新载入后再试。';
$string['error_duplicatecuekey'] = '两个片段共用键“{$a}”；每个片段都需要唯一的键。';
$string['error_duplicategapkey'] = '同一片段中的两个空格共用键“{$a}”；每个空格都需要唯一的键。';
$string['error_duplicatehintlevel'] = '某个空格在第 {$a} 级有两条提示；每一级必须唯一。';
$string['error_gapnotinattemptversion'] = '此空格不属于本次尝试所对应的练习版本。';
$string['error_importnocues'] = '无法从此内容中读出任何字幕。WebVTT 或 SubRip 文件在每条字幕上方都有一行时间，例如 00:00:01.000 --> 00:00:04.000。';
$string['error_importnotutf8'] = '此文件不是有效的 UTF-8。很可能是用较旧的编码保存的——请用文本编辑器打开并另存为 UTF-8。';
$string['error_importtoolarge'] = '该文件为 {$a->size}；导入最多接受 {$a->max}。一节课录像的字幕文件要小得多，因此这多半不是字幕文件。';
$string['error_importtoomanycues'] = '该文件包含 {$a->count} 条字幕；导入最多接受 {$a->max} 条。';
$string['error_invalidcuepausemode'] = '请在给出的选项中选择字幕结束时的暂停方式。';
$string['error_invalidgradingalgorithm'] = '评分算法“{$a}”既不是 exact 也不是 wordrecognized。';
$string['error_invalidhinttype'] = '提示类型“{$a}”不属于允许的类型。';
$string['error_invalidisregex'] = '变体的正则表达式标记必须为 0 或 1。';
$string['error_invalidmediakind'] = '所选媒体类型不是 file、url 或 provider。';
$string['error_invalidpenalty'] = '提示扣分必须在 0 和 1 之间。';
$string['error_invalidproviderref'] = '“{$a}”不是此提供方可识别的视频 ID 或链接。';
$string['error_invalidregexpattern'] = '“{$a}”不是有效的正则表达式。';
$string['error_invalidsolutionavailability'] = '请在给出的选项中选择参与者何时可以看到带答案的文字稿。';
$string['error_invalidsourceurl'] = '请输入以 http:// 或 https:// 开头的完整地址，或 YouTube、Vimeo 链接。';
$string['error_invalidsubtitleposition'] = '请在给出的选项中选择字幕的显示位置。';
$string['error_invalidv1cuejson'] = '无法处理版本 1 的此片段。';
$string['error_negativegapoffset'] = '空格的位置和长度不能为负数。';
$string['error_noaccesstoattempt'] = '你无权访问此次尝试。';
$string['error_nomorehints'] = '此空格没有更多提示了。';
$string['error_nopublishedversion'] = '此练习尚无已发布的内容。';
$string['error_responsetoolong'] = '你的答案太长了。此空格最多 {$a} 个字符。';
$string['error_solutionnotavailable'] = '在此活动中，你无法查看带答案的文字稿。';
$string['error_staleattemptstate'] = '你看到的这次尝试已不是最新状态。请重新载入当前状态后再试。';
$string['error_transcriptnotavailable'] = '此活动没有可下载的文字稿。';
$string['error_unknowngaprule'] = '未知的空格规则类型“{$a}”。';
$string['error_unknownmediaprovider'] = '“{$a}”不属于受支持的媒体提供方。';
$string['error_versionnotadraft'] = '只有处于草稿状态的版本才能编辑。';
$string['error_versionnotfound'] = '此练习版本已不存在。';
$string['error_versionnotpublishable'] = '此版本无法发布：{$a}';
$string['export_audienceaftersubmission'] = '参与者完成一次尝试后可以下载';
$string['export_audiencealways'] = '参与者随时可以下载';
$string['export_audiencestaff'] = '仅限有权限的教学人员，不向参与者提供';
$string['export_docx'] = '下载为 Word（DOCX）';
$string['export_downloadpdf'] = '下载 PDF';
$string['export_heading'] = '导出文字稿';
$string['export_intro'] = '以多种格式下载此练习的文字稿。';
$string['export_moreformats'] = '更多格式';
$string['export_nocontent'] = '尚无可导出的已发布文字稿。';
$string['export_odt'] = '下载为 OpenDocument（ODT）';
$string['export_pdf'] = '下载为 PDF';
$string['export_solution'] = '带答案的文字稿';
$string['export_solutionhint'] = '显示每个空格答案的完整文本。';
$string['export_text'] = '下载为纯文本';
$string['export_versionnote'] = '导出基于此练习当前已发布的版本。';
$string['export_worksheet'] = '练习纸（隐藏空格）';
$string['export_worksheethint'] = '隐藏了每个空格的文本，可直接作为参与者材料分发。';
$string['exporttranscript'] = '导出文字稿';
$string['filearea_media'] = '媒体';
$string['filearea_poster'] = '封面图';
$string['gradingheading'] = '答案评分';
$string['import_badtiming'] = '无法读取时间行：{$a}';
$string['import_emptytranscript'] = '已跳过一个没有文字的片段。';
$string['import_warnlinetoolong'] = '已跳过第 {$a->block} 块：其中有一行超过 {$a->max} 个字符，这不是字幕行。';
$string['jarothreshold'] = '相似度阈值';
$string['jarothreshold_help'] = '对于设为“接受相近答案”的空格，这是预期答案与所输入答案之间的最低 Jaro 相似度。取 1 表示在按语言归一化之后要求完全一致；取值越低，越能接受差异更大的写法。';
$string['jarothresholdrange'] = '阈值必须在 0 和 1 之间。';
$string['language'] = '内容语言';
$string['language_help'] = '选择练习内容的语言。它决定答案如何比对，包括大小写处理和音译。若不需要按语言处理，请选择“通用（未指定）”。新的内容版本以此设置为起点。';
$string['language_none'] = '通用（未指定）';
$string['media_cuenote'] = '更换媒体时，已有的字幕和空格会保留。它们的时间不会自动调整，请随后在编辑器中检查。';
$string['media_current'] = '当前媒体';
$string['media_heading'] = '媒体';
$string['media_intro'] = '选择此练习所依托的视频或音频。字幕按它计时，因此这是第一步。';
$string['media_none'] = '此练习尚未设置媒体。';
$string['media_othersource'] = '其他来源';
$string['media_providerhint'] = '可识别的提供方：{$a}。其他地址将作为媒体直链使用。';
$string['media_sourceurl'] = '媒体网址';
$string['media_sourceurl_help'] = '粘贴视频地址，而不是上传文件——可以是 YouTube 或 Vimeo 链接，也可以是媒体文件的直接地址。

在此填写的地址会取代已上传的文件。想用上面的上传，就把它留空。

提供方的视频在提供方自己的框架内播放，而该框架不会报告播放时间。因此这类练习始终把字幕显示在媒体下方，且不会在字幕结束处停下。

**数据流向何处。** YouTube 或 Vimeo 的框架会把每位参与者的浏览器连到该公司，该公司由此获得参与者的 IP 地址和设备信息。默认情况下，练习会先征求同意。如果你所在机构自建媒体服务器（Opencast、Panopto、Kaltura 或类似系统），请改为粘贴其中文件的直接地址：它会被当作普通媒体网址处理，保留你选择的字幕位置和暂停设置，且不涉及第三方。';
$string['migratev1_approvalheading'] = '已迁移，待核查';
$string['migratev1_approvebutton'] = '批准此次迁移';
$string['migratev1_approved'] = '视频听写 {$a} 已标记为已批准。';
$string['migratev1_colactivity'] = '活动';
$string['migratev1_colalgorithm'] = '评分算法';
$string['migratev1_colcues'] = '片段';
$string['migratev1_colgaps'] = '空格';
$string['migratev1_colissues'] = '问题';
$string['migratev1_collearners'] = '参与者';
$string['migratev1_confirmdecommission'] = '此操作将不可撤销地删除版本 1 的旧数据表和 elang.options 列。无法撤销。是否继续？';
$string['migratev1_confirmmigrate'] = '此操作会排入一个后台任务，为上面列出的每个活动写入版本 2 的数据。版本 1 的数据表和 elang.options 保持不变。是否继续？';
$string['migratev1_decommissionblocked'] = '删除仍被阻止，请查看下面的列表。';
$string['migratev1_decommissionblockedintro'] = '在满足以下条件之前，删除被阻止：';
$string['migratev1_decommissionbutton'] = '删除版本 1 的旧数据';
$string['migratev1_decommissioned'] = '版本 1 的旧数据已删除。';
$string['migratev1_decommissionheading'] = '停用版本 1 的数据';
$string['migratev1_decommissionready'] = '版本 1 的所有活动都已迁移并获批准。现在可以删除旧数据表和 elang.options。此操作无法撤销。';
$string['migratev1_heading'] = '迁移版本 1 的活动';
$string['migratev1_migratebutton'] = '迁移这些活动';
$string['migratev1_noissues'] = '无';
$string['migratev1_nonepending'] = '没有等待迁移的版本 1 活动。';
$string['migratev1_nonependingapproval'] = '没有等待核查的已迁移活动。';
$string['migratev1_notablespresent'] = '在本站点未找到版本 1 的旧数据表，没有需要迁移的内容。';
$string['migratev1_parseerrorcount'] = '无法处理的片段：{$a}';
$string['migratev1_pendingheading'] = '尚未迁移';
$string['migratev1_queued'] = '迁移任务已排入队列。它会在下一次 cron 运行时执行，或通过 admin/cli/adhoc_task.php --execute 立即执行。';
$string['migratev1_verifiedclean'] = '已核查：迁移后的数据与版本 1 的原始数据完全一致，没有差异。';
$string['migratev1_verifieddiscrepancies'] = '核查发现与版本 1 原始数据存在差异：{$a}';
$string['migratev1_verifyfailed'] = '无法核查此活动：{$a}';
$string['modulename'] = '视频听写';
$string['modulename_help'] = '视频听写活动让参与者一边观看或收听视频，一边填写带时间码字幕中的空格。

教师导入 WebVTT 或 SubRip 字幕文件，把词或短语标记为空格，并设定答案比对的严格程度。参与者逐段完成文字稿，可以请求计分的提示，并立即得到反馈。';
$string['modulenameplural'] = '视频听写';
$string['nav_exportshort'] = '导出';
$string['nav_media'] = '媒体';
$string['nav_reports'] = '尝试';
$string['nav_subtitles'] = '字幕与空格';
$string['noinstances'] = '本课程中没有视频听写。';
$string['overview_attempts'] = '尝试';
$string['playbackheading'] = '播放与字幕';
$string['playbackoverlayhint'] = '叠在画面上的字幕只显示正在播放的那一条，因此在仍有空格待填的字幕结束处，播放总会停下。这里没有可选项。';
$string['playbackproviderhint'] = 'YouTube 或 Vimeo 的视频由提供方在自己的框架内播放，而该框架不会报告播放时间。因此这类练习始终把字幕显示在媒体下方，无论上面选了什么都不会在字幕结束处停下。上传的文件和媒体直链则会遵循这两项设置。';
$string['player_check'] = '检查答案';
$string['player_consentaccept'] = '从 {$a} 加载视频';
$string['player_consentdetail'] = '播放会把你的浏览器连到 {$a}。{$a} 会收到你的 IP 地址和设备信息，并可能读取它先前设置的 Cookie。在你选择加载视频之前，不会发送任何内容。';
$string['player_consentheading'] = '此视频由 {$a} 提供';
$string['player_finish'] = '结束本次尝试';
$string['player_finished'] = '本次尝试已结束。得分：%score%%';
$string['player_finishincomplete'] = '仍有空格未填：{$a}。仍要结束本次尝试吗？';
$string['player_gaplabel'] = '空格 %gap%';
$string['player_gaplink'] = '打开链接';
$string['player_hint'] = '显示提示';
$string['player_loaderror'] = '无法加载练习，请刷新页面。';
$string['player_loading'] = '正在加载练习…';
$string['player_nocontent'] = '尚未发布练习内容，请稍后再来。';
$string['player_novideotrack'] = '你的浏览器无法显示该媒体的视频轨，声音仍会播放。请告知你的老师。';
$string['player_outdatedattempt'] = '自你开始这次尝试之后，此练习已更新。你正在旧内容上继续；结束这次尝试后，下次就会使用更新后的练习。';
$string['player_progress'] = '已作答 {$a->total} 个空格中的 {$a->done} 个';
$string['player_ready'] = '练习已就绪。';
$string['player_scorelabel'] = '得分：%score%%';
$string['player_stateaccepted'] = '已接受';
$string['player_statecorrect'] = '正确';
$string['player_statehinted'] = '已用提示';
$string['player_stateincorrect'] = '错误';
$string['player_submitfailed'] = '无法保存你的答案，请重试。';
$string['player_transcriptheading'] = '文字稿';
$string['pluginadministration'] = '视频听写管理';
$string['pluginname'] = '视频听写';
$string['privacy_metadata_elang'] = '对每个活动，记录是谁批准了其 1.x 内容的单向迁移。';
$string['privacy_metadata_elang_attempt'] = '对练习的每次尝试，活动会记录是谁在何时完成的、进行到哪里以及如何评分。';
$string['privacy_metadata_elang_attempt_answeredgaps'] = '本次尝试中参与者作答的空格数量。';
$string['privacy_metadata_elang_attempt_attemptnumber'] = '本次尝试在该用户和该活动下的序号。';
$string['privacy_metadata_elang_attempt_correctgaps'] = '本次尝试中被判为正确的空格数量。';
$string['privacy_metadata_elang_attempt_exactgaps'] = '本次尝试中按字符完全匹配作答的空格数量。';
$string['privacy_metadata_elang_attempt_hintedgaps'] = '本次尝试中参与者请求提示的空格数量。';
$string['privacy_metadata_elang_attempt_score'] = '本次尝试取得的分数。';
$string['privacy_metadata_elang_attempt_state'] = '尝试处于进行中、已结束还是已放弃。';
$string['privacy_metadata_elang_attempt_timefinish'] = '尝试结束的时间。';
$string['privacy_metadata_elang_attempt_timemodified'] = '尝试最后一次更新的时间。';
$string['privacy_metadata_elang_attempt_timestart'] = '尝试开始的时间。';
$string['privacy_metadata_elang_attempt_totalgaps'] = '本次尝试所属练习版本中的空格总数。';
$string['privacy_metadata_elang_attempt_userid'] = '完成该尝试的用户 ID。';
$string['privacy_metadata_elang_attempt_versionid'] = '本次尝试所针对的练习版本。';
$string['privacy_metadata_elang_migrationapproveduserid'] = '批准此活动从 mod_elang 1.x 迁移的用户。保存下来以便日后核查该批准。';
$string['privacy_metadata_elang_response'] = '对参与者在一次尝试中作答的每个空格，活动会保存答案文本及其评分结果。';
$string['privacy_metadata_elang_response_accepted'] = '该空格的答案是否被判为正确。';
$string['privacy_metadata_elang_response_hintlevel'] = '该空格向参与者展示过的最高提示级别。';
$string['privacy_metadata_elang_response_responsetext'] = '参与者在该空格中输入的文字。';
$string['privacy_metadata_elang_response_resultstate'] = '评分给这条答案的归类（完全匹配、识别出词、错误或留空）。';
$string['privacy_metadata_elang_response_score'] = '扣除提示分后，这条答案贡献的分数。';
$string['privacy_metadata_elang_response_timecreated'] = '该答案首次提交的时间。';
$string['privacy_metadata_elang_response_timemodified'] = '该答案最后一次更新的时间。';
$string['privacy_metadata_elang_response_tries'] = '参与者为该空格提交答案的次数。';
$string['privacy_metadata_elang_version'] = '对每个内容版本，活动会记录最后修改它的用户。';
$string['privacy_metadata_elang_version_usermodified'] = '最后修改此内容版本的用户。保存下来以便核查是谁编辑了练习内容。';
$string['privacy_provider_externallink'] = '当练习基于 YouTube 或 Vimeo 的视频时，打开它会把参与者的浏览器连到该提供方。插件本身不发送任何内容，但这一连接由活动引起。是否会发生，取决于站点的提供方同意设置以及参与者是否同意。';
$string['privacy_provider_ipaddress'] = '参与者浏览器所使用的 IP 地址。';
$string['privacy_provider_useragent'] = '浏览器发送的浏览器与设备信息。';
$string['provider_vimeo'] = 'Vimeo';
$string['provider_youtube'] = 'YouTube';
$string['providerconsent'] = '嵌入 YouTube 或 Vimeo 前先询问';
$string['providerconsent_desc'] = '基于 YouTube 或 Vimeo 视频的练习会先显示一条说明而不是视频，只有在参与者同意后才嵌入。若没有这一步，页面一打开，提供方就会收到参与者的 IP 地址和浏览器信息——在任何人点击播放之前。只有当你所在机构以其他方式取得该同意时，才关闭此项。';
$string['report_actions'] = '操作';
$string['report_answered'] = '已作答';
$string['report_attemptnumber'] = '尝试';
$string['report_back'] = '返回所有尝试';
$string['report_correct'] = '正确';
$string['report_delete'] = '删除';
$string['report_deleteconfirm'] = '要永久删除这次尝试及其全部答案吗？此操作无法撤销。';
$string['report_deleted'] = '该尝试已删除。';
$string['report_exact'] = '完全匹配';
$string['report_export'] = '导出';
$string['report_filterany'] = '全部';
$string['report_filterapply'] = '应用筛选';
$string['report_filterattempt'] = '尝试编号';
$string['report_filterfrom'] = '开始于（之后）';
$string['report_filterrangeerror'] = '时间段的结束早于开始。';
$string['report_filterreset'] = '清除筛选';
$string['report_filterstate'] = '状态';
$string['report_filterto'] = '开始于（之前）';
$string['report_filteruser'] = '参与者';
$string['report_finished'] = '已结束';
$string['report_heading'] = '尝试';
$string['report_hinted'] = '用过提示';
$string['report_hints'] = '提示级别';
$string['report_kpianswered'] = '已作答';
$string['report_kpiattempts'] = '显示的尝试';
$string['report_kpiaverage'] = '平均分（已结束）';
$string['report_kpicorrect'] = '已接受';
$string['report_kpiexact'] = '完全正确';
$string['report_kpifinished'] = '已结束';
$string['report_kpihinted'] = '使用了提示';
$string['report_kpihintedgaps'] = '需要提示';
$string['report_noattempts'] = '还没有尝试。';
$string['report_nogaps'] = '本次尝试所用的版本没有空格。';
$string['report_nomatchingattempts'] = '没有符合这些筛选条件的尝试。';
$string['report_noresponse'] = '未作答';
$string['report_response'] = '答案';
$string['report_result'] = '结果';
$string['report_result_empty'] = '留空';
$string['report_result_exact'] = '完全匹配';
$string['report_result_incorrect'] = '错误';
$string['report_result_none'] = '—';
$string['report_result_wordrecognized'] = '识别出词';
$string['report_score'] = '得分';
$string['report_solution'] = '答案';
$string['report_started'] = '开始时间';
$string['report_state'] = '状态';
$string['report_state_abandoned'] = '已放弃';
$string['report_state_finished'] = '已结束';
$string['report_state_inprogress'] = '进行中';
$string['report_transcript'] = '文字稿';
$string['report_tries'] = '作答次数';
$string['report_user'] = '参与者';
$string['report_view'] = '查看';
$string['reports'] = '报表';
$string['resetattempts'] = '删除所有参与者的尝试和答案';
$string['solutionavailability'] = '面向参与者的带答案文字稿';
$string['solutionavailability_aftersubmission'] = '结束本次尝试之后';
$string['solutionavailability_always'] = '随时';
$string['solutionavailability_help'] = '参与者何时可以下载显示每个空格答案的完整文字稿。

* 从不 —— 只有教师可以下载。
* 结束本次尝试之后 —— 参与者在此活动中完成一次尝试后即可下载。
* 随时 —— 参与者在作答之前也可以下载。

有权限的教学人员始终可以下载，与此设置无关。';
$string['solutionavailability_never'] = '从不';
$string['subplugintype_elangscript'] = '文字系统处理器';
$string['subplugintype_elangscript_plural'] = '文字系统处理器';
$string['subtitleposition'] = '字幕显示方式';
$string['subtitleposition_below'] = '媒体下方';
$string['subtitleposition_help'] = '交互式字幕显示在哪里。

* 媒体下方 —— 整份文字稿位于媒体下方的独立滚动区域，并跟随播放。
* 视频内（上方或下方）—— 只把正在播放的那条字幕叠在媒体上。

只有音频的媒体没有可供叠加的画面，因此始终使用媒体下方的显示方式。该设置本身会保留，一旦活动改用视频就会重新生效。';
$string['subtitleposition_overlaybottom'] = '视频内 — 下方';
$string['subtitleposition_overlaytop'] = '视频内 — 上方';
$string['task_migratev1activities'] = '迁移版本 1 的活动';
$string['transcriptheading'] = '面向参与者的文字稿';
$string['validate_cueafterend'] = '{$a->where}：在 {$a->endtime} 毫秒结束，晚于媒体（{$a->duration} 毫秒）。播放永远到不了那里。';
$string['validate_cueendbeforestart'] = '{$a}：结束时间不晚于开始时间。';
$string['validate_cuewhere'] = '片段 {$a->sortorder}（{$a->cuekey}）';
$string['validate_emptysolution'] = '{$a} 的答案为空。';
$string['validate_hintlevels'] = '{$a} 的提示级别不是从 1 开始的连续序列。';
$string['validate_negativetime'] = '{$a}：开始时间早于录音的起点。';
$string['validate_nocues'] = '该版本没有片段。';
$string['validate_nogaps'] = '该版本没有可作答的空格。';
$string['validate_nonpositivelength'] = '{$a} 的字符长度必须为正数。';
$string['validate_rangeoutside'] = '{$a} 的字符范围超出了其文字稿。';
$string['validate_rangeoverlap'] = '{$a} 的字符范围与另一个空格重叠。';
$string['validate_unknownalgorithm'] = '无法识别 {$a->where} 的评分算法“{$a->algorithm}”。';
$string['validate_where'] = '片段 {$a->cuekey} 中的空格 {$a->gapkey}';
$string['verify_algorithmmismatch'] = '空格 {$a->gapkey}：评分算法为“{$a->actual}”，预期为“{$a->expected}”。';
$string['verify_attemptcount'] = '已迁移的尝试数量为 {$a->actual}，预期为 1.x 中的 {$a->expected} 名不同参与者。';
$string['verify_jarothreshold'] = '答案比对阈值为 {$a->actual}，预期为 {$a->expected}。';
$string['verify_missingattempt'] = '用户 {$a}：预期有已迁移的尝试，但没有找到。';
$string['verify_missingcue'] = '片段 {$a}：缺少已迁移的片段。';
$string['verify_missinggap'] = '空格 {$a}：缺少已迁移的空格。';
$string['verify_missinghint'] = '空格 {$a}：版本 1 在此允许提示，但没有迁移任何提示。';
$string['verify_orphancue'] = '片段 {$a}：未找到对应的版本 1 片段。';
$string['verify_orphangap'] = '空格 {$a}：未找到对应的版本 1 空格。';
$string['verify_rangemismatch'] = '空格 {$a}：字符范围与版本 1 的原始数据不一致。';
$string['verify_responsecount'] = '用户 {$a->userid}：已迁移的答案数量为 {$a->actual}，预期为 {$a->expected}。';
$string['verify_solutionmismatch'] = '空格 {$a->gapkey}：答案为“{$a->actual}”，预期为“{$a->expected}”。';
$string['verify_transcriptmismatch'] = '片段 {$a}：文字稿与版本 1 的原始数据不一致。';
$string['verify_unexpectedhint'] = '空格 {$a}：版本 1 在此不允许提示，但仍迁移了一条提示。';
