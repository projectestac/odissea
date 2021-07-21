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
 * Strings for component 'chat', language 'zh_cn', version '3.11'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = '您有即将到来的聊天会话';
$string['ajax'] = '使用 Ajax 版本';
$string['autoscroll'] = '自动滚屏';
$string['beep'] = '呼叫';
$string['bubble'] = '冒泡';
$string['cantlogin'] = '无法登录到聊天室！！';
$string['chat:addinstance'] = '添加新聊天室';
$string['chat:chat'] = '进入聊天室';
$string['chat:deletelog'] = '删除聊天日志';
$string['chat:exportparticipatedsession'] = '导出您参与过的聊天会话';
$string['chat:exportsession'] = '导出所有聊天会话';
$string['chat:readlog'] = '查看聊天日志';
$string['chat:talk'] = '发言';
$string['chat:view'] = '查看聊天活动';
$string['chatintro'] = '描述';
$string['chatname'] = '聊天室名称';
$string['chatreport'] = '聊天会话';
$string['chattime'] = '下一次聊天时间';
$string['compact'] = '紧凑';
$string['composemessage'] = '编辑一条消息';
$string['configmethod'] = 'Ajax 聊天模式提供一个基于 ajax 的聊天界面，它与服务器持续通讯，保持更新。普通聊天模式让客户端周期地连接服务器以获取更新。这种方式无需任何配置便可在所有环境下工作，但当很多人一起聊天时会给服务器带来极大负荷。使用服务器进程需要访问 Unix 的 Shell，但却可以得到一个快速而稳定的聊天环境。';
$string['confignormalupdatemode'] = '聊天室更新通常使用 HTTP 1.1 的 <em>Keep-Alive</em> 特性而高效地服务，但事实上这样仍然给服务器带来很大的负荷。更好的方法是使用 <em>Stream</em> 策略向用户提供更新。使用 <em>Stream</em>伸缩性更好（类似 chatd 模式），但是您的服务器可能并不支持。';
$string['configoldping'] = '用户多久(秒)不发言被认为是离开了？这只是一个上限，通常用户的离开是可以马上被检测到的。您可以根据需要设置较低的值，但如果您使用普通聊天模式，那么<strong>永远不要</strong>让它低于 2*chat_refresh_room';
$string['configrefreshroom'] = '多长时间(秒)聊天室自动刷新一次。此值设得短一些会使聊天室响应更快，但当很多人同时聊天时，可能给服务器带来较大负荷。如果您在使用<em>Stream</em>更新，那么可以选择更高的刷新频率——试试 2。';
$string['configrefreshuserlist'] = '多久刷新一次用户列表?(以秒为单位)';
$string['configserverhost'] = '运行聊天服务器的计算机的主机名';
$string['configserverip'] = '与上述主机名匹配的数字 IP 地址';
$string['configservermax'] = '允许的最大客户端数量';
$string['configserverport'] = '服务器上聊天进程所使用的端口';
$string['coursetheme'] = '课程主题风格';
$string['crontask'] = '聊天模块后台处理';
$string['currentchats'] = '活跃的聊天会话';
$string['currentusers'] = '当前用户';
$string['deletesession'] = '删除此会话';
$string['deletesessionsure'] = '您确定要删除此会话吗?';
$string['donotusechattime'] = '不显示聊天时间';
$string['enterchat'] = '点击进入聊天室';
$string['entermessage'] = '输入您的消息';
$string['errornousers'] = '找不到任何用户!';
$string['eventmessagesent'] = '消息已发送';
$string['eventsessionsviewed'] = '会话已查看';
$string['explaingeneralconfig'] = '这些设置会<strong>一直</strong>使用';
$string['explainmethoddaemon'] = '只有在选择“聊天服务器进程”作为聊天模式时，这些设置才会生效。';
$string['explainmethodnormal'] = '只有在选择“普通”作为聊天模式时，这些设置才会生效。';
$string['generalconfig'] = '常规设置';
$string['idle'] = '空闲';
$string['indicator:cognitivedepth'] = '聊天认知深度';
$string['indicator:cognitivedepth_help'] = '这个指标是基于学生在聊天活动中所达到的认知深度。';
$string['indicator:cognitivedepthdef'] = '聊天认知深度';
$string['indicator:cognitivedepthdef_help'] = '在此分析间隔内，参与人已经达到了聊天活动所提供的认知参与度(级别=没有查看、查看、提交、查看反馈、评论反馈)';
$string['indicator:socialbreadth'] = '聊天社会广度';
$string['indicator:socialbreadth_help'] = '这个指标基于学生在聊天活动中所达到的社会广度。';
$string['indicator:socialbreadthdef'] = '聊天社会广度';
$string['indicator:socialbreadthdef_help'] = '在此分析间隔内，参与人已经达到了聊天活动所提供的社会参与度(级别=没有参与，单独参与，和他人一起参与)';
$string['inputarea'] = '输入区';
$string['invalidid'] = '找不到那个聊天室!';
$string['list_all_sessions'] = '列出所有会话。';
$string['list_complete_sessions'] = '列出刚结束的会话。';
$string['listing_all_sessions'] = '列出所有会话。';
$string['messagebeepseveryone'] = '{$a}呼叫所有人！';
$string['messagebeepsyou'] = '{$a}刚刚呼叫您！';
$string['messageenter'] = '{$a}刚刚进入聊天室';
$string['messageexit'] = '{$a}已退出聊天室';
$string['messages'] = '消息';
$string['messageyoubeep'] = '您呼叫了{$a}';
$string['method'] = '聊天模式';
$string['methodajax'] = 'Ajax';
$string['methoddaemon'] = '聊天服务器进程';
$string['methodnormal'] = '普通';
$string['modulename'] = '聊天';
$string['modulename_help'] = '聊天活动模块使参与人能够进行基于文本的实时同步讨论。

聊天可以是一次性活动，也可以每天或每周的同一时间重复。聊天会话被保存，可以供所有人查看，或者仅限于具有查看聊天会话日志权限的用户使用。

当小组聊天无法面对面时，聊天特别有用。比如

* 参加在线课程的学生定期开会，以使他们可以与同一课程但在不同地点的其他人分享经验
* 学生为了赶上工作暂时无法亲自参加与老师的聊天
* 参加工作的学生聚在一起，互相讨论他们的经历和他们的老师
* 年幼的孩子晚上在家使用聊天工具，作为进入社交网络世界的一种控制(指导)方式
* 与邀请的演讲者在不同位置进行的问答环节
* 帮助学生准备考试的会议，老师或其他学生将提出例题讨论';
$string['modulenameplural'] = '聊天';
$string['neverdeletemessages'] = '不删除聊天消息';
$string['nextsession'] = '下一个预定的会话';
$string['no_complete_sessions_found'] = '没有找到已结束的会话。';
$string['nochat'] = '没有找到聊天';
$string['noguests'] = '此聊天室不对访客开放';
$string['nomessages'] = '还没有消息';
$string['nopermissiontoseethechatlog'] = '您没有查看聊天日志的权限。';
$string['normalkeepalive'] = '保持在线';
$string['normalstream'] = '流';
$string['noscheduledsession'] = '没有预定的会话';
$string['notallowenter'] = '您不能进入此聊天室。';
$string['notlogged'] = '您没有登录！';
$string['oldping'] = '断开超时';
$string['page-mod-chat-x'] = '任意聊天模块页面';
$string['pastchats'] = '过去的聊天会话';
$string['pluginadministration'] = '聊天管理';
$string['pluginname'] = '聊天';
$string['privacy:metadata:chat_messages_current'] = '当前的聊天会话。此数据是临时的，在聊天会话删除后删除';
$string['privacy:metadata:chat_users'] = '跟踪哪些用户在哪些聊天室';
$string['privacy:metadata:chat_users:firstping'] = '首次进入聊天室的时间';
$string['privacy:metadata:chat_users:ip'] = '用户 IP';
$string['privacy:metadata:chat_users:lang'] = '用户语言';
$string['privacy:metadata:chat_users:lastmessageping'] = '此聊天室最后一条消息的时间';
$string['privacy:metadata:chat_users:lastping'] = '最后一次进入聊天室的时间';
$string['privacy:metadata:chat_users:userid'] = '此用户 ID';
$string['privacy:metadata:chat_users:version'] = '用户如何访问聊天(socket /basic/ajax/header_js)';
$string['privacy:metadata:messages'] = '聊天会话期间发送的消息的记录';
$string['privacy:metadata:messages:issystem'] = '消息是否是系统生成的消息';
$string['privacy:metadata:messages:message'] = '消息';
$string['privacy:metadata:messages:timestamp'] = '消息发送的时间。';
$string['privacy:metadata:messages:userid'] = '消息作者的用户ID';
$string['refreshroom'] = '刷新聊天室';
$string['refreshuserlist'] = '刷新用户列表';
$string['removemessages'] = '移除所有消息';
$string['repeatdaily'] = '每天同一时间';
$string['repeatnone'] = '无重复-仅发布指定的时间';
$string['repeattimes'] = '重复/发布会话时间';
$string['repeatweekly'] = '每周同一时间';
$string['saidto'] = '说';
$string['savemessages'] = '保存过去的会话';
$string['search:activity'] = '聊天-活动信息';
$string['seesession'] = '查看此会话';
$string['send'] = '发送';
$string['sending'] = '正在发送';
$string['serverhost'] = '服务器名称';
$string['serverip'] = '服务器 IP';
$string['servermax'] = '最大用户数';
$string['serverport'] = '服务器端口';
$string['sessions'] = '聊天会话';
$string['sessionstart'] = '下一个聊天会话将从{$a->date}开始，(离现在{$a->fromnow})';
$string['strftimemessage'] = '';
$string['studentseereports'] = '每个人都可以查看过去的会话';
$string['studentseereports_help'] = '如果设置为否，只有具有 mod/chat:readlog 权限的用户才能看到聊天日志';
$string['talk'] = '对话';
$string['updatemethod'] = '更新方式';
$string['updaterate'] = '更新速率：';
$string['userlist'] = '用户列表';
$string['usingchat'] = '使用聊天';
$string['usingchat_help'] = '聊天模块提供了一些功能以让聊天更加有趣。

* 笑脸 - 所有可以在 Moodle 中其它地方使用的笑脸(表情)都可以在此使用，例如，:-)
* 链接 - 网站地址会自动被转换为链接
* 表演 - 在行首添加“/me”或者“:”可以将这行变成动作描述。例如，假设您叫柱子，那么您输入了“:手舞足蹈！”或者“/me 手舞足蹈！”，则所有人都会看到“柱子手舞足蹈！”
* 呼叫 - 您可以通过点击别人姓名旁的“呼叫”链接发送一个声音给他。要想一下子呼叫所有的人，可以输入“beep all”。
* HTML - 如果您知道如何使用HTML，您可以使用它们，这样就可以插入图片、播放声音或者创建不同颜色的文字';
$string['viewreport'] = '查看过去的聊天会话';
