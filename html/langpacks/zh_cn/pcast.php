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
 * Strings for component 'pcast', language 'zh_cn', version '3.11'.
 *
 * @package     pcast
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewepisode'] = '添加一个新节目';
$string['allcategories'] = '所有类别';
$string['allentries'] = '所有';
$string['allowedfiletypes'] = '允许的文件格式';
$string['allowedfiletypes_help'] = '可以通过输入文件扩展名列表来限制允许的文件类型。如果字段留空，则允许所有文件类型。';
$string['approvalview'] = '批准节目';
$string['approvethisepisode'] = '批准这个节目';
$string['areaepisode'] = '播客节目';
$string['arealogo'] = '播客 RSS 徽标';
$string['areasummary'] = '播客节目概要';
$string['areyousuredelete'] = '您确定要删除这个节目吗？';
$string['ascending'] = '递增';
$string['attachment'] = '附件';
$string['author'] = '作者';
$string['author_help'] = '该播客的作者';
$string['authorview'] = '按作者浏览';
$string['cannotseeepisode'] = '错误：您没有查看该节目的权限';
$string['categories'] = '类别';
$string['category'] = '类别';
$string['category_help'] = 'iTunes 类别';
$string['categoryview'] = '按类别浏览';
$string['changeto'] = '更改为{$a}';
$string['clean'] = '清除';
$string['commentsnotenabled'] = '错误：评论没有启用';
$string['completionepisodes'] = '学生必须发布节目：';
$string['completionepisodesgroup'] = '需要节目';
$string['configallowhtmlinsummary'] = '此开关将允许RSS描述字段feeds包含HTML。禁用后，HTML将作为RSS feeds生成的一部分被悄悄剥离。';
$string['configallowhtmlinsummary2'] = '在RSS feeds 中允许HTML';
$string['configenablerssfeeds'] = '此开关将启用所有播客的 RSS feeds 。您仍然需要在每个播客的设置中手动打开 feeds 。';
$string['configenablerssfeeds2'] = '启用 RSS Feeds:';
$string['configenablerssitunes'] = '此开关将使 iTunes 尽可能兼容所有播客 RSS feeds 。您还需要在播客课程设置里将“启用iTunes RSS标签”设置为“是”。';
$string['configenablerssitunes2'] = '启用 iTunes RSS:';
$string['createasc'] = '最新节目优先';
$string['created'] = '发布';
$string['createdesc'] = '最老节目优先';
$string['current'] = '当前的排序 {$a}';
$string['dateview'] = '按日期浏览';
$string['deleteallepisodetags'] = '删除节目标签';
$string['deleteallviews'] = '删除节目观看历史记录';
$string['deletenotenrolled'] = '删除未选课用户的节目';
$string['deletethisepisode'] = '删除这个节目';
$string['descending'] = '递减';
$string['disapprove'] = '不批准';
$string['disapprovethisepisode'] = '不批准这个节目';
$string['displayauthor'] = '显示作者名字';
$string['displayauthor_help'] = '向用户显示每个节目作者的名字';
$string['displayviews'] = '显示观看者的名字';
$string['displayviews_help'] = '向用户显示每个节目的名称和观看次数';
$string['duration'] = '时长';
$string['durationlength'] = '{$a->hour}小时{$a->min}分{$a->sec}秒';
$string['durationlength2'] = '{$a->min}分{$a->sec}秒';
$string['editthisepisode'] = '编辑这个节目';
$string['enablerssfeed'] = '启用 RSS';
$string['enablerssfeed_help'] = '为此播客启用RSS';
$string['enablerssitunes'] = '为iTunes启用RSS';
$string['enablerssitunes_help'] = '这样可以在RSS文件中启用iTunes特定的标签';
$string['episodecommentandrateview'] = '评论/评价';
$string['episodecommentview'] = '评论';
$string['episodedeleted'] = '节目 {$a} 成功删除';
$string['episoderateview'] = '评价';
$string['episodes'] = '{$a} 个节目';
$string['episodesperpage'] = '每页显示的节目数';
$string['episodesperpage_help'] = '此设置控制将在单个页面上显示的节目数量。如果您使用较大的媒体文件，则可能希望将其设置为较小的数字。';
$string['episodeswithoutcategory'] = '没有类别的节目';
$string['episodetitle'] = '节目';
$string['episodeview'] = '节目';
$string['episodeviews'] = '观看量';
$string['errcannotedit'] = '错误：您不能编辑该节目';
$string['errcannoteditothers'] = '错误：您不能编辑其他用户的节目';
$string['erredittimeexpired'] = '错误：编辑时间已结束';
$string['errorinvalidmode'] = '错误：您没有访问权限';
$string['eventepisodeapproved'] = '节目已批准';
$string['eventepisodecreated'] = '节目已发布';
$string['eventepisodedeleted'] = '节目已删除';
$string['eventepisodedisapproved'] = '节目已取消批准';
$string['eventepisodeupdated'] = '节目已更新';
$string['eventepisodeviewed'] = '节目已经看过了';
$string['eventratingsviewed'] = '已查看节目评分';
$string['eventviewsviewed'] = '节目观看者已观看';
$string['explainaddentry'] = '在当前播客中添加新节目。<br />名称、概要和附件是必填字段。';
$string['explainall'] = '在一页上显示所有条目';
$string['explainalphabet'] = '使用此索引浏览播客';
$string['explainspecial'] = '显示不以字母开头的条目';
$string['explicit'] = '明确的内容';
$string['explicit_help'] = '这具体说明该播客是否包含明确的内容。';
$string['image'] = '播客图片';
$string['imagefile'] = '图片';
$string['imageheight'] = '高';
$string['imageheight_help'] = 'RSS频道徽标的高度';
$string['imagewidth'] = '宽';
$string['imagewidth_help'] = 'RSS频道徽标的宽度';
$string['invalidcmorid'] = '错误：您必须指定一个课程模块ID或一个实例ID';
$string['invalidcourse'] = '错误：课程ID不正确';
$string['invalidentry'] = '错误：无效的节目ID';
$string['itunes'] = 'iTunes';
$string['keywords'] = '关键字';
$string['keywords_help'] = '描述此播客的关键字';
$string['maxattachmentsize'] = '最大附件尺寸';
$string['maxattachmentsize_help'] = '此设置指定可以附加为播客节目的最大文件大小。';
$string['modulename'] = '播客 Podcast';
$string['modulename_help'] = '播客活动模块允许参与者创建播客并发布包含视频和/或音频文件的节目。节目可以按字母顺序浏览，也可以按类别、日期或作者浏览。节目可以被默认批准，也可以在每个人都能看到之前，需要得到教师的批准。教师可以允许对节目进行评论。节目也可以由教师或学生评价(同伴评价)。评分汇总形成最终成绩，并记录在成绩册中。学生可以使用自己喜欢的网络浏览器或音频应用程序(如iTunes、Winamp或Windows Media Player)订阅播客，并在便携式MP3播放器(如iPod)上收听。';
$string['modulenameplural'] = '播客 Podcast';
$string['name'] = '标题';
$string['newepisodes'] = '新的播客节目';
$string['nocommentuntilapproved'] = '节目被批准之前不能评论';
$string['noeditprivlidges'] = '错误：您没有编辑权限。';
$string['noepisodesposted'] = '没有发布节目';
$string['nopcastmediafile'] = '没有找到媒体文件';
$string['nopermissiontodelepisode'] = '错误：您没有删除该节目的权限';
$string['noratinguntilapproved'] = '节目被批准之前不能评分';
$string['noresize'] = '不调整';
$string['notcategorised'] = '未分类的';
$string['noviews'] = '没有观看量';
$string['page-mod-pcast-edit'] = '播客添加/编辑节目页';
$string['page-mod-pcast-view'] = '查看播客编辑页面';
$string['page-mod-pcast-x'] = '任何播客模块页面';
$string['pcast'] = '播客';
$string['pcast:addinstance'] = '添加一个新播客';
$string['pcast:approve'] = '批准未批准的节目，或取消已批准的节目';
$string['pcast:manage'] = '管理节目(编辑/删除)';
$string['pcast:rate'] = '给节目添加评分';
$string['pcast:view'] = '观看节目';
$string['pcast:viewallratings'] = '查看个人提供的所有原始评分';
$string['pcast:viewanyrating'] = '查看任何人收到的总评分';
$string['pcast:viewrating'] = '查看您收到的总评分';
$string['pcast:write'] = '发布新节目';
$string['pcast_help'] = '该活动允许用户创建和维护视频和音频播客。可以轻松配置播客以实现iTunes兼容性。';
$string['pcastactivityname'] = '播客: {$a}';
$string['pcastadministration'] = '播客管理';
$string['pcastfieldset'] = '自定义示例字段集';
$string['pcastlink'] = '在iTunes中订阅';
$string['pcastmediafile'] = '媒体文件';
$string['pcastname'] = '播客名称';
$string['pluginadministration'] = '播客管理';
$string['pluginname'] = '播客 Podcast';
$string['podcastepisodes'] = '播客节目';
$string['privacy'] = '结果保密';
$string['privacy:metadata:core_comments'] = '对pcast定义的注释使用core_comment系统存储';
$string['privacy:metadata:core_files'] = '链接到pcast定义的文件使用core_files系统存储';
$string['privacy:metadata:core_rating'] = '添加到pcas节目的评分使用core_ratings系统存储';
$string['privacy:metadata:core_tag'] = '添加到pcast定义的标签使用core_tag系统存储';
$string['privacy:metadata:pcast_episodes'] = '给定pcast活动的关于用户节目的信息';
$string['privacy:metadata:pcast_episodes:keywords'] = '用户添加的节目的关键字';
$string['privacy:metadata:pcast_episodes:mediafile'] = '用户添加的节目的附件';
$string['privacy:metadata:pcast_episodes:name'] = '用户添加的节目的名称';
$string['privacy:metadata:pcast_episodes:pcastid'] = '用户为其提供节目的pcast活动的ID';
$string['privacy:metadata:pcast_episodes:subtitle'] = '用户添加的节目的副标题';
$string['privacy:metadata:pcast_episodes:summary'] = '用户添加的节目的描述';
$string['privacy:metadata:pcast_episodes:timemodified'] = '显示用户何时修改了pcast的时间戳';
$string['privacy:metadata:pcast_episodes:userid'] = '正在添加此pcast节目的用户的ID';
$string['requireapproval'] = '节目需要批准';
$string['requireapproval_help'] = '发布前需要节目被批准';
$string['resetpcastsall'] = '从所有播客中删除节目';
$string['rssepisodes'] = '节目数量';
$string['rssepisodes_help'] = '此选项限制在RSS feed上显示的节目数量';
$string['rsslink'] = '此活动的RSS feed';
$string['rsssortorder'] = 'RSS排序顺序';
$string['rsssortorder_help'] = '这是节目的排序顺序。它们可以按日期排序';
$string['search:activity'] = '播客活动';
$string['search:episode'] = '播客节目';
$string['setupposting'] = '发布选项';
$string['sortby'] = '排序';
$string['sortbycreation'] = '发布日期';
$string['sortbylastupdate'] = '更新日期';
$string['special'] = '特殊的';
$string['standardview'] = '按字母浏览';
$string['subtitle'] = '副标题';
$string['subtitle_help'] = '播客副标题';
$string['summary'] = '概要';
$string['tagarea_pcast_episodes'] = '播客节目';
$string['tagsdeleted'] = '节目标签已被删除';
$string['tagtitle'] = '参见“{$a}”标签';
$string['totalcomments'] = '总评论数';
$string['totalratings'] = '总评分';
$string['totalviews'] = '总观看量';
$string['updated'] = '最近更新';
$string['user'] = '用户';
$string['userscancategorize'] = '允许节目类别';
$string['userscancategorize_help'] = '允许用户为他们的每一个节目选择iTunes类别';
$string['userscancomment'] = '允许用户评论';
$string['userscancomment_help'] = '允许用户发表评论';
$string['userscanpost'] = '允许用户发布节目';
$string['userscanpost_help'] = '允许用户发布节目。';
$string['userscanrate'] = '允许用户评分';
$string['userscanrate_help'] = '允许用户评价节目';
$string['view'] = '观看';
$string['viewepisode'] = '观看这个节目';
$string['viewnewepisodes'] = '自您上次登录以来有{$a}个新节目';
$string['viewpcast'] = '观看播客：{$a}';
$string['views'] = '观看量';
$string['viewthisepisode'] = '从{$a}观看一个节目';
$string['viewunapprovedepisodes'] = '有{$a}个节目等待批准';
$string['waitingapproval'] = '批准节目';
