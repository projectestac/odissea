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
 * Strings for component 'adobeconnect', language 'zh_cn', version '4.1'.
 *
 * @package     adobeconnect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addparticipant'] = '增加';
$string['addpresenter'] = '增加';
$string['admin_httpauth'] = 'HTTP认证头';
$string['admin_httpauth_desc'] = '在custom.ini中使用的HTTP_AUTH_HEADER值';
$string['admin_login'] = '管理员登录';
$string['admin_login_desc'] = '登录主管理员帐户';
$string['admin_password'] = '管理员密码';
$string['admin_password_desc'] = '主管理员登录密码';
$string['adminemptyxml'] = '前无法连接到Adobe connect Pro服务器。单击“继续”进入“活动设置”页面并测试连接';
$string['adminnotsetupproperty'] = '活动模块未正确设置。单击“继续”进入“活动设置”页面并测试连接';
$string['adobeconnect'] = 'Adobe Connect内容';
$string['adobeconnect:meetinghost'] = '会议服务主机';
$string['adobeconnect:meetingparticipant'] = '会议参与者';
$string['adobeconnect:meetingpresenter'] = '会议演讲人';
$string['adobeconnectfieldset'] = 'Adobe Connect设置';
$string['adobeconnecthost'] = 'Adobe Connect主机';
$string['adobeconnecthostdescription'] = '除了主持人可以做的事情之外，主机还可以给其他用户特权，启动和停止会议';
$string['adobeconnectintro'] = '插入';
$string['adobeconnectname'] = '会议标题';
$string['adobeconnectparticipant'] = 'Adobe Connect参与者';
$string['adobeconnectparticipantdescription'] = '可以查看，但不能修改任何会议设置';
$string['adobeconnectpresenter'] = 'Adobe Connect演讲人';
$string['adobeconnectpresenterdescription'] = '会议的演示者可以演示内容、共享屏幕、发送短信、缓和问题、创建文字注释、播放音频和视频，以及从web链接推送内容';
$string['allusers'] = '所有用户';
$string['assignadoberole'] = '分配Adobe角色';
$string['assignadoberoles'] = '为$a->meetname（$a->groupname）分配$a->role角色';
$string['assignroles'] = '分配角色';
$string['availablelist'] = '可获得的';
$string['backtomeeting'] = '返回 $a会议';
$string['cancelchanges'] = '取消';
$string['connectiontesttitle'] = '连接测试窗口';
$string['conntestintro'] = '<p>已运行一系列测试，以确定Adobe Connect Pro服务器是否已正确设置，以使此集成正常工作，并确定“活动全局设置”中提供的用户凭据是否具有执行“活动”模块所需必要任务的正确权限。如果以下任何测试失败，此活动模块将无法正常工作。</p><p> 有关如何设置Adobe Connect Pro服务器的更多帮助和文档，请参阅本活动模块的MoodleDocs帮助页面<a href=“{$a->url}”>帮助页面</a></p>';
$string['duplicatemeetingname'] = '在服务器上找到了重复的名称';
$string['duplicateurl'] = '在服务器上找到重复的会议URL';
$string['editingfor'] = '编辑: $a';
$string['email_login'] = '电邮地址登录';
$string['email_login_desc'] = '仅当您的Connect Pro服务器登录设置为使用电子邮件地址时，才选中此选项。请注意，在定期使用此活动模块期间打开/关闭此选项可能会在Connect Pro服务器上创建双面用户';
$string['emptyxml'] = '目前无法连接到Adobe connect Pro服务器。请通知您的Moodle管理员。';
$string['endtime'] = '结束时间';
$string['error1'] = '您必须是网站管理员才能访问此页面';
$string['error2'] = '属性“{$a}”为空，请输入值并保存设置';
$string['errormeeting'] = '检索记录时出错';
$string['errorrecording'] = '找不到录制会话';
$string['event_assign_role'] = '用户分配了Connect Pro角色';
$string['event_join_meeting'] = '用户加入一个会议';
$string['event_unassign_role'] = '用户未分配Connect Pro角色';
$string['event_view'] = '观看活动';
$string['event_view_all'] = '观看所有活动实例';
$string['event_view_recording'] = '用户查看了一段录音';
$string['existingusers'] = '$a现有用户';
$string['greaterstarttime'] = '开始时间不能大于结束时间';
$string['groupswitch'] = '按组筛选';
$string['host'] = '主机';
$string['host_desc'] = 'REST呼叫发送到哪里';
$string['https'] = 'HTTPS连接';
$string['https_desc'] = '通过HTTPS连接到Connect服务器';
$string['invalidadobemeeturl'] = '此字段的输入无效。单击帮助气泡以查看有效条目';
$string['invalidurl'] = 'URL需要以字母（a-z）开头';
$string['joinmeeting'] = '加入会议';
$string['longurl'] = '该会议URL太长。试着缩短它';
$string['meethost_desc'] = '安装Adobe服务器的域';
$string['meetinfo'] = '更多会议细节';
$string['meetinfotxt'] = '请参阅服务器会议详细信息';
$string['meetingend'] = '会议结束时间';
$string['meetinggroup'] = '会议组';
$string['meetinghost'] = '会议域';
$string['meetinginfo'] = '会议信息';
$string['meetingintro'] = '会议总结';
$string['meetingname'] = '会议名称';
$string['meetingstart'] = '会议开始时间';
$string['meetingtype'] = '会议类型';
$string['meetingtype_help'] = '<p>公共会议类型是指任何拥有会议URL的人都可以进入会议室的类型。</p>
<p>私人会议类型是只有注册用户和参与者才能进入的类型。登录页面不允许

客人请登录。对于私人会议，会议在主持人或主持人加入会议之前不会真正开始。</p>

<p>
如果您正在创建私人会议，最好在至少1名主持人或演示者将出席会议；因为用户
参与者角色将无法加入会议，除非具有主持人或演示者角色已加入第次会议。
</p>

<p>
如果会议支持单独的组，则每个组中至少有一个用户要出席会议，应具有主持人或演示者角色。
</p>';
$string['meettemplates'] = '会议模板';
$string['meettemplates_help'] = '<p>会议室模板使用会议室的自定义布局创建会议。</p>';
$string['meeturl'] = '会议URL';
$string['meeturl_help'] = '<p>您可以自定义用于连接到Adobe connect会议的URL。Adobe服务器域将始终保持不变。不过，URL的最后一部分可以自定义。
</p>
<p>例如，如果Adobe Connect服务器域位于<b>http://adobe.connect.server/</b>
 自定义<b>mymeeting</b>的URL时，连接到会议的URL将为<b>http://adobe.connect.server/mymeeting</b>。去掉后面的正斜杠
</p>
<p>有效的URL条目由可能如下
<ul>
<li>mymeeting</li>
<li>/mymeeting</li>
</ul>

无效的URL条目由多个正斜杠组成：
<ul>
<li>mymeeting/mymeeting</li>
<li>mymeeting/mymeeting/</li>
<li>mymeeting/mymeeting//anothermeeting</li>
<li>mymeeting/</li>
</ul>

</p>
<p>保存会议后，您将无法再编辑/更新此字段，因为该字段将被禁用。
如果更新活动设置，并且<b>组模式</b>设置为没有组，则您将在文本字段中看到部分URL。
否则，文本字段将保持空白，因为每个课程组都有自己的会议URL。
</p>';
$string['missingexpectedgroups'] = '没有可用的组。';
$string['noinstances'] = '没有adobeconnect的实例';
$string['nomeeting'] = '服务器上不存在会议';
$string['nopresenterrole'] = '错误：查找adobeconnectpresenter角色时出错';
$string['notparticipant'] = '您不是本次会议的参与者';
$string['notsetupproperty'] = '活动模块未正确设置。请联系Moodle管理员';
$string['participantbtngrp'] = '参与者行为';
$string['participantsgrp'] = '会议用户';
$string['particpantslabel'] = '参与者';
$string['pluginadministration'] = 'Adobe Connect 系统管理员';
$string['port'] = '端口Port';
$string['port_desc'] = '用户连接Adobe Connect的端口号';
$string['potentialusers'] = '$a 潜在用户';
$string['presenterbtngrp'] = '演讲人行为';
$string['presenterlabel'] = '演讲人';
$string['private'] = '私有的';
$string['public'] = '公开的';
$string['record_force'] = '强制会议记录';
$string['record_force_desc'] = '强制记录所有Adobe Connect会议。这是一个站点范围的影响，必须重新启动Adobe Connect服务器';
$string['recordinghdr'] = '记录';
$string['removeparticipant'] = '删除';
$string['removepresenter'] = '删除';
$string['roletoassign'] = '要分配的角色';
$string['samemeettime'] = '无效的会议时间';
$string['savechanges'] = '保存';
$string['selectparticipants'] = '分配角色';
$string['settingblurb'] = '<center><img src="{$a->image}" /></center><br />
    <p>Adobe Systems 公司和Remote-Learner.net合作创建了第一个公开可用的Moodle和Adobe Acrobat Connect Pro之间的集成方法。这个新的集成旨在简化Moodle中同步事件的使用。它提供了一个使用Adobe Connect Pro轻松创建和管理两个系统之间的单点登录会议的途径。</p><br />
    <p><center>About Remote-Learner</center>
  自1982年以来，Remote Learner一直为其业务提供教育技术服务，教育和政府客户。如今，这些服务包括对同类开源程序最佳产品的支持。About Remote-Learner是Moodle的官方合作伙伴、JasperSoft合作伙伴和Alfresco合作伙伴。该公司提供SaaS托管服务、IT支持合同和定制服务规划、劳动力发展培训、教学设计和战略咨询为规划在线学习计划的组织提供服务。</p><br />
    <p>访问这里 <a href="{$a->url}">获取Adobe Connect Moodle 插件目录</a>或企业支持信息。</p>';
$string['starttime'] = '开始时间';
$string['testconnection'] = '测试连接';
$string['unableretrdetails'] = '无法检索会议详细信息';
$string['usergrouprequired'] = '此会议要求用户加入一个组';
$string['usernotenrolled'] = '只有已注册并在此课程中具有角色的用户才能加入此会议';
