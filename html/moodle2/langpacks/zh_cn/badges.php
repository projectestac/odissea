<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'badges', language 'zh_cn', branch 'MOODLE_31_STABLE'
 *
 * @package   badges
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '行为';
$string['activate'] = '启用访问';
$string['activatesuccess'] = '访问徽章被成功启用。';
$string['addbadgecriteria'] = '添加徽章规则';
$string['addcourse'] = '添加课程';
$string['addcourse_help'] = '选出徽章所要求的所有课程，按 CTRL 键可以选择多个项目。';
$string['addcriteria'] = '添加判断规则';
$string['addcriteriatext'] = '要开始添加判断规则，请从下拉菜单中选择一项。';
$string['addtobackpack'] = '添加进勋章背包';
$string['adminonly'] = '本页面只限制系统管理员访问';
$string['after'] = '自从授予之后。';
$string['aggregationmethod'] = '聚合方法';
$string['all'] = '全部';
$string['allmethod'] = '所有选中的条件全部满足';
$string['allmethodactivity'] = '所有选中的活动全部完成';
$string['allmethodcourseset'] = '所有选中的课程全部完成';
$string['allmethodmanual'] = '所有选中的角色全部授予';
$string['allmethodprofile'] = '所有选中的个人信息项都得到完善';
$string['allowcoursebadges'] = '启用课程勋章';
$string['allowcoursebadges_desc'] = '允许在课程上下文中创建和授予勋章。';
$string['allowexternalbackpack'] = '允许连接到外部勋章背包';
$string['allowexternalbackpack_desc'] = '允许用户通过网络连接展示他们保存在外部勋章背包服务中心处的勋章。

提示：当无法从 Internet 访问此站点时（例如防火墙等造成的原因），建议禁用此项设置。';
$string['any'] = '任一个';
$string['anymethod'] = '任一个选中的条件符合';
$string['anymethodactivity'] = '任一个选中的活动完成';
$string['anymethodcourseset'] = '任一个选中的课程完成';
$string['anymethodmanual'] = '任一个选中的角色授予此勋章';
$string['anymethodprofile'] = '只要有一项个人信息项得到完善';
$string['archivebadge'] = '你要删除徽章 \'{$a}\', 同时保留已经发行出去的徽章?';
$string['archiveconfirm'] = '删除并且保留已经发行出去的徽章';
$string['archivehelp'] = '<P>这个选项表示徽章将被标记为“退休”，将不再出现在产品列表。用户将不再能够获得这枚徽章，然而现有的徽章者仍然可以在他们的页面显示这个徽章并将它推到外部背包。</P >
<P>如果你想你的用户获得了徽章是不是完全删除徽章选择此选项重要。</P >';
$string['attachment'] = '附件发送';
$string['attachment_help'] = '如果启用此项，授予的勋章文件会被作为附件发送到获得者的邮箱。（附件必须在站点管理中启用>插件>消息输出>电子邮件使用此选项。）';
$string['award'] = '授予勋章';
$string['awardedtoyou'] = '授予日期';
$string['awardoncron'] = '进入徽章被成功启用。太多的用户可以立即获得这枚徽章。为了确保网站的性能，这一行动将需要一些时间来处理。';
$string['awards'] = '获得人';
$string['backpackavailability'] = '外部验证徽章';
$string['backpackavailability_help'] = '为了能让勋章容器能验证从你这里获得的勋章，一个外部背包服务应该能访问你的站点并验证所发布的勋章有效。你的站点目前无法访问，意味着你已经发布的勋章或将要发布的勋章无法得到验证。

**为什么我会看到这条信息？**

可能是你的防火墙拒绝了你的网络外部的用户访问，或者你的站点有密码保护，或者你的站点运行在了一个互联网无法访问的电脑上（比如一台本地开发用机器）。

**是出问题了吗？**

如果你打算在任何一个投入实际应用的站点上发布勋章，那么你应该解决这个问题，否则容器是无法验证从你这里获得的勋章的。如果你的站点还没有投入实际应用，你可以建立并发布测试勋章，直到你的站点可以被访问。

**如果我无法让我的整个站点被公开访问，该怎么办？**

验证仅仅需要一个网址，那就是[your-site-url]/badges/assertion.php，因此你只需要修改防火墙规则允许外部可访问这个文件，验证就可以进行了。';
$string['backpackbadges'] = '你从 {$a->totalcollections} 搜集的勋章有 {$a->totalbadges} 个已显示。 <a href="mybackpack.php">修改背包设置</a>。';
$string['backpackconnection'] = '背包连接';
$string['backpackconnection_help'] = '本页允许你设置一个访问外部背包服务的链接。背包链接让你显示外部勋章到自己的站点，也可以推送本地获得的勋章到你的外部背包。

当前，仅<a href="http://backpack.openbadges.org">Mozilla OpenBadges Backpack</a>被支持。在你尝试在这个页面建立一个背包链接前，你需要注册一个背包服务。';
$string['backpackdetails'] = '背包设置';
$string['backpackemail'] = 'Email';
$string['backpackemail_help'] = '你的背包关联的电子邮件地址。当你连接，任何徽章赢得了在本网站将与此有关的电子邮件地址。';
$string['backpackimport'] = '徽章导入设置';
$string['backpackimport_help'] = '背包连接成功建立后，你的背包中的勋章可以显示在“我的勋章”页面和您的个人资料页面。
在这个区域，你可以从背包中选择收藏勋章，以便在你的个人资料页面显示。';
$string['badgedetails'] = '勋章详情';
$string['badgeimage'] = '图片';
$string['badgeimage_help'] = '此图片在授予此勋章时使用。

更换图片时，浏览并选择一张图片文件（JPG或者PNG格式），然后再点击“保存更改”按钮。图片文件会被裁切成正方形并且按需要进行缩放。';
$string['badgeprivacysetting'] = '勋章私密设置';
$string['badgeprivacysetting_help'] = '你获得的勋章可以显示在您的帐户页面。这个设置允许你自动设定的新赚取勋章的可见性。
你仍然可以控制个人勋章隐私设置您的“我的勋章”页面。';
$string['badgeprivacysetting_str'] = '自动在我的个人资料页面上展示我荣获的勋章';
$string['badges'] = '勋章';
$string['badgesalt'] = '接受者email的哈希盐值';
$string['badgesalt_desc'] = '提供一个哈希串给勋章服务中心，以便确保勋章获得者不会暴露他们的 email 地址。此项设计只能填入数字和字母。
注意：为了保证有效验证收件人，一旦你开始发行勋章请避免更改此设置。';
$string['badgesdisabled'] = '徽章没有被启用。';
$string['badgesearned'] = '获得勋章数： {$a}';
$string['badgesettings'] = '勋章设置';
$string['badgestatus_0'] = '用户不可以使用';
$string['badgestatus_1'] = '用户可以使用';
$string['badgestatus_2'] = '用户不可以使用';
$string['badgestatus_3'] = '用户可以使用';
$string['badgestatus_4'] = '存档';
$string['badgestoearn'] = '可用的勋章数： {$a}';
$string['badgesview'] = '课程勋章';
$string['badgeurl'] = '授予的勋章链接';
$string['bawards'] = '获得人（{$a}）';
$string['bcriteria'] = '授勋规则';
$string['bdetails'] = '编辑';
$string['bmessage'] = '消息';
$string['boverview'] = '概览';
$string['bydate'] = '完成日期不迟于';
$string['clearsettings'] = '清除设置';
$string['completioninfo'] = '该勋章是因为符合下面的条件而被授予的：';
$string['completionnotenabled'] = '当前课程没有启用课程进度跟踪，故它不能纳入授勋规则当中。课程进度跟踪特性可以在课程设置里面启用，如果在课程设置里面看不到这项，说明网站没有启用这一特性，可以用管理员身份进入：网站管理->高级特性启用它。';
$string['configenablebadges'] = '启用此项特性你将可以创建勋章并授予给网站的用户。';
$string['configuremessage'] = '勋章消息';
$string['connect'] = '连接';
$string['connected'] = '已连接';
$string['connecting'] = '连接中';
$string['contact'] = '联系';
$string['contact_help'] = '授勋机构的 email';
$string['copyof'] = '复制的 {$a}';
$string['coursebadges'] = '勋章';
$string['coursebadgesdisabled'] = '课程徽章没有这被启用';
$string['coursecompletion'] = '用户必须完成此课程。';
$string['create'] = '创建勋章';
$string['createbutton'] = '创建勋章';
$string['creatorbody'] = '<p>{$a->user} 已经满足所有的勋章条件，并且已经被授予了此勋章。单击 {$a->link} 进入查看此勋章信息</p>';
$string['creatorsubject'] = '\'{$a}\' 已经被授予！';
$string['criteria_0'] = '此勋章的授予条件...';
$string['criteria_1'] = '完成活动';
$string['criteria_1_help'] = '允许某勋章被授予给完成课程中的某些活动的用户。';
$string['criteria_2'] = '由角色手工授予';
$string['criteria_2_help'] = '由网站或者当前课程的某一特定用户角色手工来授予用户此勋章。';
$string['criteria_3'] = '社会参与';
$string['criteria_3_help'] = '社会';
$string['criteria_4'] = '完成课程';
$string['criteria_4_help'] = '允许勋章被授予给完成课程的用户。此规则可以包含附加参数，例如至少获得的成绩分数和完成日期不迟于指定日期等。';
$string['criteria_5'] = '完成一个课程集';
$string['criteria_5_help'] = '允许勋章被授予给完成课程的用户。各门课程可以附带参数，例如至少获得的成绩分数和完成日期不迟于指定日期等。';
$string['criteria_6'] = '个人信息完善';
$string['criteria_6_help'] = '允许一个徽章是用户完成他们某些领域授予简介。你可以从默认和自定义配置文件域是提供给用户选择。';
$string['criteriacreated'] = '徽章标准创建成功';
$string['criteriadeleted'] = '徽章标准删除成功';
$string['criteria_descr'] = '符合下列条件的用户可以获得此勋章：';
$string['criteria_descr_0'] = '符合下列 <strong>{$a}</strong> 条件的用户可以获得此勋章。';
$string['criteria_descr_1'] = '下列活动 <strong>{$a}</strong> 得到完成：';
$string['criteria_descr_2'] = '由以下角色中 <strong>{$a}</strong> 授予：';
$string['criteria_descr_4'] = '用户必须完成课程';
$string['criteria_descr_5'] = '下列课程 <strong>{$a}</strong> 得到完成：';
$string['criteria_descr_6'] = '下列个人信息项 <strong>{$a}</strong> 得到完善：';
$string['criteria_descr_bydate'] = '创建于 <em>{$a}</em>';
$string['criteria_descr_grade'] = '并获得不低于 <em>{$a}</em> 分的成绩';
$string['criteria_descr_short0'] = '完成 <strong>{$a}</strong> :';
$string['criteria_descr_short1'] = '完成 <strong>{$a}</strong> :';
$string['criteria_descr_short2'] = '由 <strong>{$a}</strong> 授予：';
$string['criteria_descr_short4'] = '完成课程';
$string['criteria_descr_short5'] = '完成 <strong>{$a}</strong> :';
$string['criteria_descr_short6'] = '完成 <strong>{$a}</strong> :';
$string['criteria_descr_single_1'] = '下列活动需要完成：';
$string['criteria_descr_single_2'] = '此勋章必须由具备以下角色的用户授予：';
$string['criteria_descr_single_4'] = '用户必须完成课程';
$string['criteria_descr_single_5'] = '下列课程需要完成：';
$string['criteria_descr_single_6'] = '下列个人信息项需要完善：';
$string['criteria_descr_single_short1'] = '完成：';
$string['criteria_descr_single_short2'] = '授予人：';
$string['criteria_descr_single_short4'] = '完成课程';
$string['criteria_descr_single_short5'] = '完成：';
$string['criteria_descr_single_short6'] = '完成：';
$string['criteriasummary'] = '标准概述';
$string['criteriaupdated'] = '徽章标准更新成功';
$string['criterror'] = '当前参数分配';
$string['criterror_help'] = '此字段集显示最初加入到此勋章要求，但不再可用的所有参数。我们建议您取消选中这此的参数，以确保用户可以在将来获得这个徽章。';
$string['currentimage'] = '图片';
$string['currentstatus'] = '当前状态：';
$string['dateawarded'] = '授予日期';
$string['dateearned'] = '日期： {$a}';
$string['day'] = '天';
$string['deactivate'] = '禁用';
$string['deactivatesuccess'] = '成功禁用勋章';
$string['defaultissuercontact'] = '默认授勋机构联系方式';
$string['defaultissuercontact_desc'] = '授勋机构的 email';
$string['defaultissuername'] = '默认授勋机构名称';
$string['defaultissuername_desc'] = '授勋机构的名称。';
$string['delbadge'] = '你确定要删除勋章\'{$a}\'并移除所有已有的该勋章？';
$string['delconfirm'] = '删除已有的勋章';
$string['delcritconfirm'] = '您确定需要删除这条授勋规则吗？';
$string['deletehelp'] = '<P>完全删除一个徽章，意味着所有的信息和条件的记录将被永久删除。谁赢得了这枚徽章的用户将不再能够访问和显示在个人资料页。</P >
<P>注：谁赢得了这枚徽章，已经把它推到外部背包的用户，仍将在其外部的背包有这个徽章。然而，他们将不能访问标准和依据网页链接到本网站。</P >';
$string['delparamconfirm'] = '您确定要删除此参数？';
$string['description'] = '描述';
$string['disconnect'] = '失去连接';
$string['donotaward'] = '目前，这枚徽章是不活跃的，所以它不能被授予用户。如果你想获得这枚徽章，请设置其状态为活跃。';
$string['editsettings'] = '编辑设置';
$string['enablebadges'] = '启用勋章';
$string['error:backpackdatainvalid'] = '从背包返回的数据是无效的。';
$string['error:backpackemailnotfound'] = '这个邮箱\'{$a}\'没有和背包关联。你需要为这个帐号<a href="http://backpack.openbadges.org">创建背包</a>或者用另一个邮箱注册。';
$string['error:backpackloginfailed'] = '你无法连接外部背包， 由于以下原因：{$a}';
$string['error:backpacknotavailable'] = '您的站点无法通过 Internet 访问，故此站点下授予的勋章均不能被外部勋章背包服务中心确认。';
$string['error:backpackproblem'] = '连接到你的背包服务提供商出现问题，请稍后再试。';
$string['error:badjson'] = '尝试的连接返回了无效的数据。';
$string['error:cannotact'] = '不能激活徽章。';
$string['error:cannotawardbadge'] = '不能奖徽章用户。';
$string['error:cannotdeletecriterion'] = '无法删除此规则。';
$string['error:clone'] = '不能克隆徽章。';
$string['error:connectionunknownreason'] = '连接失败，但是没有原因。';
$string['error:duplicatename'] = '徽章的名称已经在系统中存在';
$string['error:externalbadgedoesntexist'] = '徽章没有被找到';
$string['error:guestuseraccess'] = '你当前使用访问身份登录，如果查看徽章，你需要使用你的账号登录系统。';
$string['error:invalidbadgeurl'] = '授勋机构 URL 格式错误。';
$string['error:invalidcriteriatype'] = '无效的标准类型';
$string['error:invalidexpiredate'] = '过期时间必须是将来某个时间。';
$string['error:invalidexpireperiod'] = '有效期不能为负或为0。';
$string['error:noactivities'] = '此课程中没有启用进度跟踪的活动。';
$string['error:noassertion'] = '角色没有被声明，在完成登录过程前，你可以关闭这个对话框。';
$string['error:nocourses'] = '当前站点所有课程均未启用进度跟踪，故没能显示。课程进度跟踪特性可以在课程设置里面启用。';
$string['error:nogroups'] = '<p>你的背包中没有收集有效的公开勋章集。 </p>
<p>仅显示公开勋章集, <a href="http://backpack.openbadges.org">浏览你的背包</a> 创建公开勋章集。</p>';
$string['error:nopermissiontoview'] = '您没有查看勋章获得者的权限';
$string['error:nosuchbadge'] = '徽章ID： {$a} 不存在';
$string['error:nosuchcourse'] = '警告：这个课程不再可用。';
$string['error:nosuchfield'] = '警告：这个用户配置文件字段不再可用。';
$string['error:nosuchmod'] = '警告：这个活动不再可用。';
$string['error:nosuchrole'] = '警告：这个角色不在可用。';
$string['error:nosuchuser'] = '与此电子邮件地址的用户没有一个与当前的背包供应商匹配的帐户。';
$string['error:notifycoursedate'] = '警告：在课程开始日期之前，与课程和活动相关的勋章不能被授予。';
$string['error:parameter'] = '警告：为保证正确的徽章发放流程，至少有一个参数应该被选择。';
$string['error:personaneedsjs'] = '目前，JavaScript需要连接到你的背包。如果可以，请允许执行JavaScript脚本，并刷新本页面。';
$string['error:requesterror'] = '连接请求失败（错误代码：{$a}）';
$string['error:requesttimeout'] = '连接请求在它完成之前超时！';
$string['error:save'] = '不能保存徽章！';
$string['error:userdeleted'] = '{$a->user} (不存在于 {$a->site}站点中)';
$string['eventbadgeawarded'] = '勋章授予';
$string['evidence'] = '凭据';
$string['existingrecipients'] = '已经存在的勋章获得者';
$string['expired'] = '已过期';
$string['expiredate'] = '此勋章在 {$a} 过期。';
$string['expireddate'] = '此勋章已在 {$a} 过期。';
$string['expireperiod'] = '此勋章在被授予  {$a}  天后失效。';
$string['expireperiodh'] = '此勋章在被授予  {$a}  小时后失效。';
$string['expireperiodm'] = '此勋章在被授予  {$a}  分钟后失效。';
$string['expireperiods'] = '此勋章在被授予  {$a}  秒后失效。';
$string['expirydate'] = '过期时间';
$string['expirydate_help'] = '可选项，可以是一个指定的日期，也可以是一个从授予给用户的日期起计算的日期。';
$string['externalbadges'] = '我在其它网站获得的勋章';
$string['externalbadges_help'] = '此处展示您外部背包中的勋章。';
$string['externalbadgesp'] = '在其它网站获得的勋章：';
$string['externalconnectto'] = '为显示外部徽章，你需要<a href="{$a}">连接到背包</a>.';
$string['fixed'] = '固定日期';
$string['hiddenbadge'] = '抱歉，徽章的主要没有提供此信息。';
$string['issuancedetails'] = '有效期';
$string['issuedbadge'] = '授予的勋章信息';
$string['issuerdetails'] = '授勋机构详情';
$string['issuername'] = '授勋机构名称';
$string['issuername_help'] = '授勋机构的名称。';
$string['issuerurl'] = '授勋机构 URL';
$string['localbadges'] = '我的徽章来源于 {$a} 站点。';
$string['localbadgesh'] = '我的徽章来源于这个站点。';
$string['localbadgesh_help'] = '所有徽章赢得了在此网站完成课程，课程活动，及其他要求。
你可以管理你的徽章在这里让他们为你的页面公共的或私人的。
您可以下载所有徽章或每个徽章分别保存在你的电脑。下载的徽章可以被添加到您的外部包服务。';
$string['localbadgesp'] = '徽章来源于 {$a}:';
$string['localconnectto'] = '分享这些徽章到外部网站，你需要< a href ="{$a}“>连接到背包</a>。';
$string['makeprivate'] = '不公开';
$string['makepublic'] = '公开';
$string['managebadges'] = '勋章管理';
$string['message'] = '内容';
$string['messagebody'] = '<p>您被授予一枚 "%badgename%" 的勋章！</p>
<p>通过此勋章信息页面可以查看此勋章的详细信息： %badgelink%。</p>
<p>您可以从 {$a} 页面管理或下载此勋章。</p>';
$string['messagesubject'] = '热烈祝贺！您刚刚获得一枚勋章！';
$string['method'] = '当完成...此规则即生效';
$string['mingrade'] = '至少获得成绩';
$string['month'] = '月';
$string['mybackpack'] = '我的背包设置';
$string['mybadges'] = '我的勋章';
$string['never'] = '从不';
$string['newbadge'] = '添加一个新勋章';
$string['newimage'] = '更换图片';
$string['noawards'] = '还没有人获得此勋章。';
$string['nobackpack'] = '没有背包服务连接到这个帐户。<br />';
$string['nobackpackbadges'] = '在你所选择的集合没有徽章。<a href="mybackpack.php">添加更多连接</a>。';
$string['nobackpackcollections'] = '没有徽章的连接被选中。<a href="mybackpack.php">添加连接</a>。';
$string['nobadges'] = '没有可用的勋章';
$string['nocriteria'] = '此勋章还没有定义授勋规则。';
$string['noexpiry'] = '此勋章永不过期。';
$string['noparamstoadd'] = '没有附加的有效参数添加到这枚勋章';
$string['notacceptedrole'] = '您的用户角色没有被赋予权限来授予此勋章。<br/>
您可以访问 {$a} 页面来查看已经被授予此勋章的用户列表。';
$string['notconnected'] = '为连接';
$string['nothingtoadd'] = '没有可添加的规则。';
$string['notification'] = '通知勋章创建人';
$string['notification_help'] = '此项设置用来设定通知勋章创建人的方式，以便他们知道此勋章被授予的情况。

下面是可以选择的选项：

* **从不** – 不发送通知。

* **每次** – 每当有人被授予勋章时通知一次。

* **每天** – 每天发送一次通知。

* **每周** – 每周发送一次通知。

* **每月** – 每月发送一次通知。';
$string['notifydaily'] = '每天';
$string['notifyevery'] = '每次';
$string['notifymonthly'] = '每月';
$string['notifyweekly'] = '每周';
$string['numawards'] = '此勋章已经被授予 <a href="{$a->link}">{$a->count}</a> 人。';
$string['numawardstat'] = '此勋章已经被授予 {$a} 用户。';
$string['overallcrit'] = '规则符合';
$string['personaconnection'] = '用邮箱注册';
$string['personaconnection_help'] = 'Persona 是一个基于 WEB 的身份认证系统，使用你自己的 email 地址作为登录帐户。开放式勋章背包使用 Persona 作为一个登录系统，要连接到背包系统你需要一个Persona 帐户。

更多关于 Persona 的信息请访问 <a href="https://login.persona.org/about">https://login.persona.org/about</a>。';
$string['potentialrecipients'] = '潜在的勋章获得者';
$string['preferences'] = '勋章选项';
$string['recipientdetails'] = '获得者详情';
$string['recipientidentificationproblem'] = '在现有用户中无法找到此勋章的接受人';
$string['recipients'] = '勋章获得者';
$string['recipientvalidationproblem'] = '当前用户不能被验证为这个勋章的接受者。';
$string['relative'] = '相对日期';
$string['requiredcourse'] = '课程集授勋规则必须至少选择添加一门课程。';
$string['reviewbadge'] = '勋章获取方式的变更';
$string['reviewconfirm'] = '<p>此操作会让你的勋章对用户可见，并允许其获取。</p>

<p>这可能是一些用户已经达到这个勋章的标准，在勋章启用后就会立即得到它</p>

<p>一旦勋章已发出它将被<strong>锁定</strong> - 某些设置，包括标准和到期设置等不可以再改变。</p>

<p>你确定要启用勋章\'{$a}\'么?</p>';
$string['save'] = '保存';
$string['searchname'] = '按名称搜索';
$string['selectaward'] = '请选择您要授予此勋章的用户角色：';
$string['selectgroup_end'] = '只有公共收藏显示，<a href="http://backpack.openbadges.org">访问您的背包</a>，以创造更多的公共收藏。';
$string['selectgroup_start'] = '从你的背包中选择收藏，以便显示在此网站：';
$string['selecting'] = '选定徽章...';
$string['setup'] = '建立连接';
$string['signinwithyouremail'] = '使用你的电子邮件登录';
$string['sitebadges'] = '站点勋章';
$string['sitebadges_help'] = '站点勋章只能授予站点级别相关活动的用户。包括完成一个课程集或者是完善一组个人信息项等。站点勋章也可以由一个用户手工授予给另外的用户。

课程相关活动的勋章则只能在课程级别的场合来创建。课程勋章可以在<i>课程设置>勋章</i>中设置。';
$string['status'] = '勋章状态';
$string['status_help'] = '勋章的状态决定了它在系统中的表现：

* **启用** – 表示此勋章可以被用户获得。此时勋章的授勋规则不能被更改。

* **禁用** – 表示此勋章既不可以被用户获得，也不能手工授予。如果此勋章从未授予给任何人，则它的授勋规则是可以被更改的。

一旦某勋章至少被授予了给一位用户，它自动就被转为 **锁定** 状态。已经被锁定的勋章仍然可以被用户获得，但它们的授勋规则就再不能被更改了。如果您想要修改一个被锁定的勋章，您可以复制它，然后再对复制品做所需的更改。

*为何我们要锁定勋章呢？*

我们需要保证所有的人在符合相同的条件情况下，都应当平等地获得勋章。而当前已经授予的勋章是无法被收回的。如果我们一直允许勋章的授勋规则被更改，则很有可能最终导致具备并不一致条件的人获得相同的勋章。';
$string['statusmessage_0'] = '此勋章还没有启用，请先启用它。';
$string['statusmessage_1'] = '此勋章已经启用。如果需要再修改，请先禁用它。';
$string['statusmessage_2'] = '此勋章还没启用，同时它的授勋规则也已经被锁定。
如果您希望用户能获得此勋章，则请先启用它。';
$string['statusmessage_3'] = '此勋章已经启用，故它的授勋规则已经被锁定。';
$string['statusmessage_4'] = '此勋章目前已存档。';
$string['subject'] = '标题';
$string['variablesubstitution'] = '在消息中的替换变量';
$string['variablesubstitution_help'] = '在设置勋章消息时，可以将某些变量插入到消息标题和/或消息内容当中，这些变量在该消息发送出去的时候会被替换成相关的真实数据。这些变量在插入的时候必须严格按下面的格式进行填写。下面列出可以使用的变量及其使用格式：

%badgename%
：此变量将会被替换成勋章的全名。

%username%
：此变量将会被替换成获得勋章用户的全名。

%badgelink%
：此变量将会被替换成授勋机构的URL网址。';
$string['viewbadge'] = '查看授予的勋章';
$string['visible'] = '可见';
$string['warnexpired'] = '（此勋章已过期！）';
$string['year'] = '年';
