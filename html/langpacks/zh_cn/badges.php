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
 * Strings for component 'badges', language 'zh_cn', version '3.11'.
 *
 * @package     badges
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '行为';
$string['activate'] = '启用访问';
$string['activatesuccess'] = '成功启用了对勋章的访问。';
$string['addalignment'] = '增加外部技能或标准';
$string['addbackpack'] = '添加背包';
$string['addbadge'] = '添加勋章';
$string['addbadge_help'] = '选择所有应该添加到此勋章条件的勋章。按住CTRL键选择多个项目。';
$string['addbadgecriteria'] = '添加勋章规则';
$string['addcohort'] = '添加群组';
$string['addcohort_help'] = '选择所有应该添加到此勋章条件的群组。按住CTRL键选择多个项目。';
$string['addcompetency'] = '添加能力';
$string['addcompetency_help'] = '选择所有应添加到此勋章要求的能力。按住CTRL键选择多个项目。';
$string['addcourse'] = '添加课程';
$string['addcourse_help'] = '选择所有应该添加到此勋章要求的课程。按住CTRL键选择多个项目。';
$string['addcriteria'] = '添加规则';
$string['addcriteriatext'] = '要开始添加规则，请从下拉菜单中选择一个选项。';
$string['addedtobackpack'] = '添加勋章到背包';
$string['addrelated'] = '添加关联勋章';
$string['addtobackpack'] = '添加到背包';
$string['adminonly'] = '此页面仅限网站管理员访问。';
$string['after'] = '在颁发日期之后。';
$string['aggregationmethod'] = '汇总方法';
$string['alignment'] = '对齐方式';
$string['all'] = '全部';
$string['allmethod'] = '所有选中的条件全部满足';
$string['allmethodactivity'] = '所有选中的活动全部完成';
$string['allmethodbadges'] = '已获得所有已选勋章';
$string['allmethodcohort'] = '所有已选群组的成员';
$string['allmethodcompetencies'] = '所有选定的能力都已完成';
$string['allmethodcourseset'] = '所有选中的课程全部完成';
$string['allmethodmanual'] = '所有选定的角色都授予勋章';
$string['allmethodprofile'] = '所有选定的个人档案字段都已完成';
$string['allowcoursebadges'] = '启用课程勋章';
$string['allowcoursebadges_desc'] = '允许在课程场景中创建和授予勋章。';
$string['allowexternalbackpack'] = '外部背包连接';
$string['allowexternalbackpack_desc'] = '如果启用，用户可以连接到外部背包，并从这个网站共享他们的勋章。用户也可以选择在本网站的个人档案页面上显示任何来自外部背包的公共勋章收藏。如果您的站点无法从Internet访问，建议禁用此选项。';
$string['any'] = '任一个';
$string['anymethod'] = '满足所选的任何条件';
$string['anymethodactivity'] = '所选的任何活动都已完成';
$string['anymethodbadges'] = '所选任何勋章都已获得';
$string['anymethodcohort'] = '是任何已选群组的成员';
$string['anymethodcompetencies'] = '任意选定的能力都已完成';
$string['anymethodcourseset'] = '任意选定的课程都已完成';
$string['anymethodmanual'] = '任意选定的角色都授予此勋章';
$string['anymethodprofile'] = '任意选定的个人档案字段都已完成';
$string['apiversion'] = 'API版本支持';
$string['archivebadge'] = '您想要删除勋章“{$a}”，但保留现有已颁发的勋章吗?';
$string['archiveconfirm'] = '删除并保留现有的已颁发的勋章';
$string['archivehelp'] = '<p>此选项意味着该勋章将被标记为“已退役”，并且不再出现在勋章列表中。用户将不再能够获得此勋章，但是已有的勋章获得者仍然可以在他们的个人档案页面上显示此勋章，并将它推送到他们的外部背包上。</p> <p>如果您希望您的用户保留对已获得勋章的访问权，那么选择此选项而不是完全删除勋章是很重要的。</p>';
$string['attachment'] = '在消息上附加勋章';
$string['attachment_help'] = '如果启用，将在收件人的电子邮件中附加一个已颁发的勋章供下载。(必须在站点管理/服务器/电子邮件/发送邮件配置中启用附件才能使用此选项。)';
$string['award'] = '授予勋章';
$string['awardedtoyou'] = '颁发给我';
$string['awardoncron'] = '成功地启用了对勋章的访问。太多的用户可以立即获得这个勋章。为了确保站点的性能，这个操作需要一些时间来处理。';
$string['awards'] = '获得人';
$string['backpackapiurl'] = '背包API URL';
$string['backpackavailability'] = '外部勋章验证';
$string['backpackavailability_help'] = '为了让勋章获得者能够证明他们从您这里获得了他们的勋章，外部的背包服务应该能够访问您的站点并验证从它那里颁发的勋章。您的网站目前似乎无法访问，这意味着您已经颁发或将在未来颁发的勋章无法验证。我为什么看到这个信息?**可能是您的防火墙阻止网络外的用户访问您的站点，您的站点受密码保护，或者您在Internet上无法访问的计算机(例如本地开发机器)上运行该站点。这有问题吗?**您应该修正这个问题，在任何您打算颁发勋章的网站上，否则勋章获得者将无法证明他们从您那里获得了他们的勋章。如果您的网站还没有上线，您可以创建并发布测试勋章，只要在上线之前该站点是可访问的。**如果我无法让我的整个站点被公开访问，该怎么办？**验证所需的唯一URL是[your-site-url]/badges/assertion.php，因此如果您能够修改防火墙以允许外部访问该文件，那么勋章验证仍然有效。';
$string['backpackbadgessettings'] = '更改背包设置';
$string['backpackbadgessummary'] = '您有 {$a->totalbadges}从{$a->totalcollections}集合中显示的勋章。';
$string['backpackcannotsendverification'] = '无法发送验证邮件';
$string['backpackconnected'] = '背包已连接';
$string['backpackconnection'] = '背包连接';
$string['backpackconnection_help'] = '本页允许你设置一个访问外部背包服务的链接。背包链接让你显示外部勋章到自己的站点，也可以推送本地获得的勋章到你的外部背包。

当前，仅<a href="http://backpack.openbadges.org">Mozilla OpenBadges Backpack</a>被支持。在你尝试在这个页面建立一个背包链接前，你需要注册一个背包服务。';
$string['backpackconnectioncancelattempt'] = '使用不同的电子邮件地址连接';
$string['backpackconnectionconnect'] = '连接到背包';
$string['backpackconnectionnottested'] = '这个背包无法测试连接，因为只有Open badge v2.0背包支持它。';
$string['backpackconnectionok'] = '背包连接成功建立';
$string['backpackconnectionresendemail'] = '重发验证邮件';
$string['backpackconnectionunexpectedmessage'] = '背包返回错误："{$a}"。';
$string['backpackconnectionunexpectedresult'] = '连接背包出现问题。请再次尝试。<br><br>如果该问题继续发生，请联系管理员。';
$string['backpackdetails'] = '背包设置';
$string['backpackdisconnected'] = '背包已断开连接';
$string['backpackemail'] = '电子邮件地址';
$string['backpackemail_help'] = '与您的背包相关的电子邮件地址。当您被连接，任何在本网站获得的勋章将与此电子邮件地址相关联。';
$string['backpackemailverificationpending'] = '验证等待中';
$string['backpackemailverifyemailbody'] = '您好，
有人使用您的电子邮件地址从“{$a->sitename}”请求连接到您的勋章背包。要确认并激活到您背包的连接请转到{$a->link}，在大多数邮件程序中，这应该是一个蓝色的链接，您可以点击它。如果这不起作用，那么请剪切并粘贴地址到web浏览器顶部的地址行。如果您需要帮助，请联系网站管理员， {$a->admin}';
$string['backpackemailverifyemailsubject'] = '{$a}：勋章背包邮件验证';
$string['backpackemailverifypending'] = '一封验证邮件已经发送到<strong>{$a}</strong>。点击邮件中的验证连接来激活您的背包连接。';
$string['backpackemailverifysuccess'] = '感谢您的邮箱验证。您现在已经连接到了您的背包。';
$string['backpackemailverifytokenmismatch'] = '您单击的链接中的令牌与存储的令牌不匹配。确保您在最近收到的邮件中点击了链接。';
$string['backpackexporterror'] = '无法将勋章导出到背包';
$string['backpackimport'] = '勋章导入设置';
$string['backpackimport_help'] = '成功建立背包连接后，来自背包的勋章可以显示在勋章页面和个人档案页面上。在这个区域，您可以从您的背包中选择您想要显示在您的个人档案中的勋章集合。';
$string['backpackneedsupdate'] = '连接到此个人档案的背包与该站点的背包不匹配。您需要断开并重新连接背包。';
$string['backpacksettings'] = '背包设置';
$string['backpackweburl'] = '背包URL';
$string['badgedetails'] = '勋章详情';
$string['badgeimage'] = '图片';
$string['badgeimage_help'] = '此图片在授予此勋章时使用。

更换图片时，浏览并选择一张图片文件（JPG或者PNG格式），然后再点击“保存更改”按钮。图片文件会被裁切成正方形并且按需要进行缩放。';
$string['badgeprivacysetting'] = '勋章的隐私设置';
$string['badgeprivacysetting_help'] = '您获得的勋章可以显示在您的帐户个人档案页面。此设置允许您自动设置新获得的勋章的可见性。您仍然可以在您的勋章页面上控制个人的勋章隐私设置。';
$string['badgeprivacysetting_str'] = '自动在我的个人档案页面上展示我获得的勋章';
$string['badges'] = '勋章';
$string['badgesalt'] = '接受者email的哈希盐值';
$string['badgesalt_desc'] = '提供一个哈希串给勋章服务中心，以便确保勋章获得者不会暴露他们的 email 地址。此项设计只能填入数字和字母。
注意：为了保证有效验证收件人，一旦你开始发行勋章请避免更改此设置。';
$string['badgesdisabled'] = '此站点没有启用勋章。';
$string['badgesearned'] = '获得勋章数： {$a}';
$string['badgesettings'] = '勋章设置';
$string['badgestatus_0'] = '‎用户不可用 ‎';
$string['badgestatus_1'] = '‎可供用户使用 ‎';
$string['badgestatus_2'] = '‎用户不可用 ‎';
$string['badgestatus_3'] = '‎可供用户使用 ‎';
$string['badgestatus_4'] = '存档';
$string['badgestoearn'] = '可用的勋章数： {$a}';
$string['badgesview'] = '课程勋章';
$string['badgeurl'] = '已颁发的勋章链接';
$string['balignment'] = '比对 ({$a})';
$string['bawards'] = '获得人（{$a}）';
$string['bcriteria'] = '授勋规则';
$string['bdetails'] = '编辑详细信息';
$string['bendorsement'] = '签注';
$string['bmessage'] = '消息';
$string['boverview'] = '概览';
$string['brelated'] = '关联勋章 ({$a})';
$string['bydate'] = '完成日期不迟于';
$string['claim'] = '索赔';
$string['claimcomment'] = '签注意见';
$string['claimid'] = '声明网址';
$string['clearsettings'] = '清除设置';
$string['completioninfo'] = '该勋章是因为符合下面的条件颁发的：';
$string['completionnotenabled'] = '当前课程没有启用课程进度跟踪，故它不能纳入授勋规则当中。课程进度跟踪特性可以在课程设置里面启用，如果在课程设置里面看不到这项，说明网站没有启用这一特性，可以用管理员身份进入：网站管理->高级特性启用它。';
$string['configenablebadges'] = '启用此项特性你将可以创建勋章并授予给网站的用户。';
$string['configuremessage'] = '勋章消息';
$string['connect'] = '连接';
$string['connected'] = '已连接';
$string['connecting'] = '连接中';
$string['contact'] = '联系人';
$string['contact_help'] = '授勋机构的 email';
$string['copyof'] = '复制的 {$a}';
$string['coursebadges'] = '勋章';
$string['coursebadgesdisabled'] = '本网站没启用课程勋章。';
$string['coursecompletion'] = '用户必须完成此课程。';
$string['create'] = '新勋章';
$string['createbutton'] = '创建勋章';
$string['creatorbody'] = '<p>{$a->user} 已经满足所有的勋章条件，并且已经被授予了此勋章。单击 {$a->link} 进入查看此勋章信息</p>';
$string['creatorsubject'] = '\'{$a}\' 已经被授予！';
$string['criteria_0'] = '此勋章的授予条件...';
$string['criteria_1'] = '完成活动';
$string['criteria_1_help'] = '允许根据用户在课程内完成的一组活动授予勋章。';
$string['criteria_2'] = '按角色手工颁发';
$string['criteria_2_help'] = '由网站或者当前课程的某一特定用户角色手工来授予用户此勋章。';
$string['criteria_3'] = '社会参与';
$string['criteria_3_help'] = '社会';
$string['criteria_4'] = '完成课程';
$string['criteria_4_help'] = '允许向完成课程的用户授予勋章。这个规则可以有额外的参数，如最低成绩和完成课程的日期。';
$string['criteria_5'] = '完成一组课程';
$string['criteria_5_help'] = '允许完成一组课程的用户获得勋章。每门课程都可以有额外的参数，如最低成绩和完成课程的日期。';
$string['criteria_6'] = '个人档案完成';
$string['criteria_6_help'] = '允许为完成用户档案中的某些字段授予勋章。您可以从用户可用的默认和自定义个人档案字段中进行选择。';
$string['criteria_7'] = '已授予勋章';
$string['criteria_7_help'] = '根据用户已获得的其它勋章确定是否颁发勋章。';
$string['criteria_8'] = '群组成员';
$string['criteria_8_help'] = '允许根据群组成员资格向用户授予勋章。';
$string['criteria_9'] = '能力';
$string['criteria_9_help'] = '允许根据用户完成的能力授予勋章。';
$string['criteria_descr'] = '符合下列条件的用户可以获得此勋章：';
$string['criteria_descr_0'] = '符合下列 <strong>{$a}</strong> 条件的用户可以获得此勋章。';
$string['criteria_descr_1'] = '<strong>{$a}</strong>已完成下列活动：';
$string['criteria_descr_2'] = '此勋章必须由以下角色<strong>{$a}</strong>的用户授予:';
$string['criteria_descr_4'] = '用户必须完成课程';
$string['criteria_descr_5'] = '<strong>{$a}</strong>以下课程必须完成：';
$string['criteria_descr_6'] = '<strong>{$a}</strong>必须填写以下用户个人档案字段：';
$string['criteria_descr_7'] = '<strong>{$a}</strong>必须获得下列徽章:';
$string['criteria_descr_8'] = '<strong>{$a}</strong>需要下列群组的成员：';
$string['criteria_descr_9'] = '<strong>{$a}</strong>必须完成下列能力：';
$string['criteria_descr_bydate'] = '由<em>{$a}</em>';
$string['criteria_descr_grade'] = '最低分<em>{$a}</em>';
$string['criteria_descr_short0'] = '完成 <strong>{$a}</strong> :';
$string['criteria_descr_short1'] = '完成 <strong>{$a}</strong> :';
$string['criteria_descr_short2'] = '由 <strong>{$a}</strong> 授予：';
$string['criteria_descr_short4'] = '完成课程';
$string['criteria_descr_short5'] = '完成 <strong>{$a}</strong> :';
$string['criteria_descr_short6'] = '完成 <strong>{$a}</strong> :';
$string['criteria_descr_short7'] = '完成 <strong>{$a}</strong> :';
$string['criteria_descr_short8'] = '<strong>{$a}</strong>群组成员：';
$string['criteria_descr_short9'] = '完成 <strong>{$a}</strong> :';
$string['criteria_descr_single_1'] = '必须完成下列活动：';
$string['criteria_descr_single_2'] = '此勋章必须由以下角色的用户授予：';
$string['criteria_descr_single_4'] = '用户必须完成课程';
$string['criteria_descr_single_5'] = '以下课程必须完成：';
$string['criteria_descr_single_6'] = '必须填写以下用户个人档案字段：';
$string['criteria_descr_single_7'] = '必须获得下列勋章：';
$string['criteria_descr_single_8'] = '需要是下列群组的成员：';
$string['criteria_descr_single_9'] = '必须具备下列能力：';
$string['criteria_descr_single_short1'] = '完成：';
$string['criteria_descr_single_short2'] = '授予人：';
$string['criteria_descr_single_short4'] = '完成课程';
$string['criteria_descr_single_short5'] = '完成：';
$string['criteria_descr_single_short6'] = '完成：';
$string['criteria_descr_single_short7'] = '完成：';
$string['criteria_descr_single_short8'] = '成员在：';
$string['criteria_descr_single_short9'] = '完成：';
$string['criteriacreated'] = '勋章规则创建成功';
$string['criteriadeleted'] = '勋章规则删除成功';
$string['criteriasummary'] = '规则概要';
$string['criteriaupdated'] = '勋章规则更新成功';
$string['criterror'] = '‎当前参数问题‎';
$string['criterror_help'] = '这个字段集显示了最初添加到这个勋章条件但不再可用的所有参数。建议取消对这些参数的选择，以确保用户将来可以获得此勋章。';
$string['currentimage'] = '当前图片';
$string['currentstatus'] = '当前状态：';
$string['dateawarded'] = '颁发日期';
$string['dateearned'] = '日期： {$a}';
$string['day'] = '天';
$string['deactivate'] = '禁用';
$string['deactivatesuccess'] = '成功禁用勋章';
$string['defaultissuercontact'] = '勋章颁发人电子邮件地址';
$string['defaultissuercontact_desc'] = '与勋章颁发者关联的电子邮件地址。对于Open badge v2.0背包，在将勋章发布到背包时使用此身份验证。';
$string['defaultissuername'] = '勋章颁发人名称';
$string['defaultissuername_desc'] = '颁发机构或当局的名称。';
$string['defaultissuerpassword'] = '勋章颁发人密码';
$string['defaultissuerpassword_help'] = '需要在背包站点上注册一个帐号，并在站点管理/勋章/勋章设置中设置勋章颁发者的电子邮件地址。帐户的密码应该在这里输入。';
$string['delbadge'] = '您是否要删除勋章“{$a}”并删除所有已颁发的勋章?';
$string['delconfirm'] = '删除和删除已颁发的勋章';
$string['delcritconfirm'] = '您确定需要删除这条授勋规则吗？';
$string['deletehelp'] = '完全删除一个勋章意味着它的所有信息和规则记录将被永久删除。获得此勋章的用户将不再能够访问它并在其个人档案页面上显示它。注：已获得此勋章并已将其推入外置背包的用户，其外置背包内仍有此勋章。然而，他们将无法访问规则和证书页面链接回本网站。';
$string['delexternalbackpack'] = '删除网站背包';
$string['delexternalbackpackconfirm'] = '删除网站背包”{$a}“吗?';
$string['delparamconfirm'] = '您确定要删除此参数？';
$string['description'] = '描述';
$string['disconnect'] = '断开连接';
$string['donotaward'] = '目前，这个勋章不可用，所以它不能授予用户。如果您想授予此勋章，请将其状态设置为活跃。';
$string['editsettings'] = '编辑设置';
$string['enablebadges'] = '启用勋章';
$string['endorsement'] = '签注';
$string['error:backpackdatainvalid'] = '背包返回的数据无效。';
$string['error:backpackemailnotfound'] = '这个邮箱\'{$a}\'没有和背包关联。您需要为这个帐号<a href="http://backpack.openbadges.org">创建背包</a>或者用另一个邮箱登录。';
$string['error:backpacknotavailable'] = '您的站点无法通过 Internet 访问，故此站点下授予的勋章均不能被外部勋章背包服务中心确认。';
$string['error:backpackproblem'] = '连接到你的背包服务提供商出现问题，请稍后再试。';
$string['error:badgeawardnotfound'] = '无法验证此已授予的勋章。此勋章可能已被撤销。';
$string['error:badgenotfound'] = '‎未找到勋章';
$string['error:cannotact'] = '不能激活该勋章。';
$string['error:cannotawardbadge'] = '‎无法向用户授予勋章。‎';
$string['error:cannotdeletecriterion'] = '无法删除此规则。';
$string['error:cannotrevokebadge'] = '不能撤消用户的勋章。';
$string['error:clone'] = '不能克隆勋章。';
$string['error:connectionunknownreason'] = '连接不成功，但没有给出原因。';
$string['error:duplicatename'] = '系统中已经存在具有此类名称的勋章。';
$string['error:externalbadgedoesntexist'] = '‎未找到勋章';
$string['error:guestuseraccess'] = '您当前正在使用访客访问。要查看勋章，您需要登录您的帐户。';
$string['error:invalidcriteriatype'] = '无效的规则类型。';
$string['error:invalidexpiredate'] = '‎到期日期必须在未来。';
$string['error:invalidexpireperiod'] = '有效期不能为负或等于0。';
$string['error:invalidparambadge'] = '勋章不存在。';
$string['error:invalidparamcohort'] = '群组不存在。';
$string['error:noactivities'] = '本课程没有启用进度规则的活动。';
$string['error:nobadges'] = '没有允许将访问权限添加为规则的课程或站点勋章。';
$string['error:nocohorts'] = '无群组';
$string['error:nocourses'] = '当前站点所有课程均未启用进度跟踪，故没能显示。课程进度跟踪特性可以在课程设置里面启用。';
$string['error:nogroupslink'] = '<p>只显示公共集合。<a href="{$a}" target="_blank" rel="nofollow">访问您的背包</a>创建一些公开集合。</p>';
$string['error:nogroupssummary'] = '<p>您的背包里没有可用的公共集合的勋章。</p>';
$string['error:nopermissiontoview'] = '您没有查看勋章获得者的权限';
$string['error:nosuchbadge'] = '勋章ID: {$a} 不存在';
$string['error:nosuchcohort'] = '警告:这个群组不再可用。';
$string['error:nosuchcourse'] = '警告：这个课程不再可用。';
$string['error:nosuchfield'] = '警告：这个用户个人档案字段不再可用。';
$string['error:nosuchmod'] = '警告：这个活动不再可用。';
$string['error:nosuchrole'] = '警告：这个角色不再可用。';
$string['error:nosuchuser'] = '使用此电子邮件地址的用户在当前背包提供商处没有帐户。';
$string['error:notifycoursedate'] = '警告:与课程及活动进度有关的勋章不能于课程开始日期前颁发。';
$string['error:parameter'] = '警告:为了确保正确的勋章颁发流程，至少应该选择一个参数。';
$string['error:relatedbadgedoesntexist'] = '没有带此标识符的公共勋章';
$string['error:requesterror'] = '连接请求失败（错误代码：{$a}）';
$string['error:requesttimeout'] = '连接请求在它完成之前超时！';
$string['error:save'] = '无法保存勋章。';
$string['error:userdeleted'] = '{$a->user} (不存在于 {$a->site}站点中)';
$string['eventbadgearchived'] = '勋章存档';
$string['eventbadgeawarded'] = '已授予勋章';
$string['eventbadgecreated'] = '已创建勋章';
$string['eventbadgecriteriacreated'] = '已创建勋章规则';
$string['eventbadgecriteriadeleted'] = '已删除勋章规则';
$string['eventbadgecriteriaupdated'] = '已更新勋章规则';
$string['eventbadgedeleted'] = '已删除勋章';
$string['eventbadgedisabled'] = '已禁用勋章';
$string['eventbadgeduplicated'] = '已复制勋章';
$string['eventbadgeenabled'] = '已启用勋章';
$string['eventbadgelistingviewed'] = '已查看勋章列表';
$string['eventbadgerevoked'] = '已撤销勋章';
$string['eventbadgeupdated'] = '已更新勋章';
$string['eventbadgeviewed'] = '已查看勋章';
$string['evidence'] = '证书';
$string['existingrecipients'] = '现有的勋章获得者';
$string['existsinbackpack'] = '勋章已经在背包中';
$string['expired'] = '已过期';
$string['expiredate'] = '此勋章在 {$a} 过期。';
$string['expireddate'] = '此勋章已在 {$a} 过期。';
$string['expireperiod'] = '此勋章在颁发 {$a} 天后过期。';
$string['expireperiodh'] = '此勋章在颁发 {$a} 小时后过期。';
$string['expireperiodm'] = '此勋章在颁发 {$a} 分钟后过期。';
$string['expireperiods'] = '此勋章在颁发 {$a} 秒后过期。';
$string['expirydate'] = '到期日期';
$string['expirydate_help'] = '可选项，勋章可以在特定日期过期，也可以根据颁发给用户的日期计算日期。';
$string['externalbadges'] = '我在其它网站获得的勋章';
$string['externalbadges_help'] = '此处展示您外部背包中的勋章。';
$string['externalbadgesp'] = '在其它网站获得的勋章：';
$string['externalconnectto'] = '为显示外部勋章，您需要<a href="{$a}">连接到背包</a>.';
$string['fixed'] = '固定日期';
$string['hidden'] = '隐藏';
$string['hiddenbadge'] = '抱歉，勋章主人没有提供此信息。';
$string['imageauthoremail'] = '图片作者的电子邮件';
$string['imageauthoremail_help'] = '如果指定，勋章图像作者的电子邮件地址将显示在勋章页面上。';
$string['imageauthorname'] = '图片作者的名字';
$string['imageauthorname_help'] = '如果指定，勋章图像作者的名称将显示在勋章页上。';
$string['imageauthorurl'] = '图片作者的网址';
$string['imageauthorurl_help'] = '如果指定，则在勋章页上显示到勋章图像作者网站的链接。URL应该有一个前缀http://或https://。';
$string['imagecaption'] = '图片标题';
$string['imagecaption_help'] = '如果指定，则在勋章页上显示图片说明。';
$string['invalidurl'] = '网址不正确';
$string['issuancedetails'] = '勋章到期';
$string['issuedbadge'] = '颁发勋章的信息';
$string['issuerdetails'] = '颁发人详情';
$string['issueremail'] = '电子邮件';
$string['issueremail_help'] = '颁发签注的机构的电邮地址。';
$string['issuername'] = '颁发人名称';
$string['issuername_endorsement'] = '签注人名称';
$string['issuername_endorsement_help'] = '签注人名称。';
$string['issuername_help'] = '颁发勋章的机构或当局的名称。';
$string['issuerurl'] = '颁发人网址';
$string['issuerurl_help'] = '颁发签注的机构的网页。URL应该有一个前缀http://或https://。';
$string['language'] = '语言';
$string['language_help'] = '勋章页上使用的语言。';
$string['listbackpacks'] = '背包列表';
$string['localbadges'] = '我的勋章来自{$a}网站';
$string['localbadgesh'] = '我的勋章来自这个网站';
$string['localbadgesh_help'] = '通过完成课程、课程活动和其他要求而在本网站内获得的所有勋章。您可以在这里管理您的勋章，通过使他们公开或私人为您的个人档案页。您可以下载您的所有勋章或每个勋章分别保存在您的电脑上。下载的勋章可以添加到您的外部背包服务。';
$string['localbadgesp'] = '勋章来源于 {$a}:';
$string['localconnectto'] = '要在本网站之外共享这些勋章，您需要<a href="{$a}">连接到一个背包</a>。';
$string['makeprivate'] = '不公开';
$string['makepublic'] = '公开';
$string['managebackpacks'] = '管理背包';
$string['managebadges'] = '管理勋章';
$string['message'] = '消息正文';
$string['messagebody'] = '<p>您已被授予勋章“%badgename%”！</p> <p>更多关于这个勋章的信息可以在%badgelink% badge信息页面找到。</p> <p>您可以从{$a}页面管理和下载勋章。</p>';
$string['messagesubject'] = '热烈祝贺！您刚刚获得一枚勋章！';
$string['method'] = '当完成...此规则即生效';
$string['mingrade'] = '最低分要求';
$string['month'] = '月';
$string['mybackpack'] = '我的背包设置';
$string['mybadges'] = '我的勋章';
$string['never'] = '从不';
$string['newbackpack'] = '添加一个新背包';
$string['newbadge'] = '添加一个新勋章';
$string['newimage'] = '新图片';
$string['noalignment'] = '此勋章没有指定任何外部技能或标准。';
$string['noawards'] = '还没有人获得此勋章。';
$string['nobackpack'] = '没有背包服务连接到这个帐户。<br />';
$string['nobackpackbadgessummary'] = '您选择的集合中没有勋章。';
$string['nobackpackcollectionssummary'] = '没有选择勋章集合。';
$string['nobackpacks'] = '没有可用的背包';
$string['nobadges'] = '没有可用的勋章。';
$string['nocompetencies'] = '没有选择能力';
$string['nocriteria'] = '此勋章还没有定义授勋规则。';
$string['noendorsement'] = '这个勋章没有签注。';
$string['noexpiry'] = '此勋章永不过期。';
$string['noparamstoadd'] = '没有额外的参数添加到这个勋章条件中。';
$string['norelated'] = '此勋章没有任何关联勋章。';
$string['notacceptedrole'] = '您的用户角色没有被赋予权限来授予此勋章。<br/>
您可以访问 {$a} 页面来查看已经被授予此勋章的用户列表。';
$string['notconnected'] = '未连接';
$string['notealignment'] = '可以指定与勋章达成一致的外部技能或标准。任何外部技能或标准都显示在勋章页面上。';
$string['noteendorsement'] = '来自第三方的签注可以用来增加勋章的价值。例如，一个老师颁发的勋章可能会得到学校的签注，或者一个地方奖励机构颁发的勋章可能会得到国家奖励机构的签注。';
$string['noterelated'] = '带有连接的勋章可以标记为相关的。例如，在不同语言中显示的具有相同规则的勋章可能被标记为相关的。任何相关的勋章都显示在勋章页面上。';
$string['nothingtoadd'] = '没有要添加的可用规则。';
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
$string['numawards'] = '此勋章已经颁发给 <a href="{$a->link}">{$a->count}</a> 用户。';
$string['numawardstat'] = '此勋章已经颁发给{$a}用户。';
$string['oauth2issuer'] = 'OAuth 2 服务';
$string['openbadgesv1'] = 'Open Badges v1.0';
$string['openbadgesv2'] = 'Open Badges v2.0';
$string['openbadgesv2p1'] = 'Open Badges v2.1';
$string['overallcrit'] = '所选规则中的一个是完整的。';
$string['potentialrecipients'] = '潜在的勋章获得者';
$string['preferences'] = '勋章偏好';
$string['privacy:metadata:backpack'] = '用户背包的记录';
$string['privacy:metadata:backpack:backpackuid'] = '背包唯一标识符';
$string['privacy:metadata:backpack:email'] = '与背包关联的电子邮件';
$string['privacy:metadata:backpack:externalbackpackid'] = '背包的ID';
$string['privacy:metadata:backpack:userid'] = '背包所在用户的ID';
$string['privacy:metadata:backpackoauth2'] = '当用户连接到外部背包时，OAuth 2 信息';
$string['privacy:metadata:backpackoauth2:issuerid'] = 'OAuth 2 服务 ID';
$string['privacy:metadata:backpackoauth2:scope'] = '背包连接列表范围';
$string['privacy:metadata:backpackoauth2:token'] = '背包连接令牌';
$string['privacy:metadata:backpackoauth2:userid'] = '连接到背包的用户的 ID';
$string['privacy:metadata:backpackoauth2:usermodified'] = '修改连接的用户的 ID';
$string['privacy:metadata:badge'] = '勋章集合';
$string['privacy:metadata:badge:timecreated'] = '创建勋章的时间';
$string['privacy:metadata:badge:timemodified'] = '上次修改勋章的时间';
$string['privacy:metadata:badge:usercreated'] = '创建勋章的用户的ID';
$string['privacy:metadata:badge:usermodified'] = '修改勋章的用户的ID';
$string['privacy:metadata:criteriamet'] = '已满足的规则集合';
$string['privacy:metadata:criteriamet:datemet'] = '规则满足的日期';
$string['privacy:metadata:criteriamet:userid'] = '满足规则的用户的ID';
$string['privacy:metadata:external:backpacks'] = '用户将勋章提交到外部背包时共享的信息';
$string['privacy:metadata:external:backpacks:badge'] = '勋章的名称';
$string['privacy:metadata:external:backpacks:description'] = '勋章的描述';
$string['privacy:metadata:external:backpacks:image'] = '勋章的图像';
$string['privacy:metadata:external:backpacks:issuer'] = '关于颁发人的一些信息';
$string['privacy:metadata:external:backpacks:url'] = '在Moodle的URL中可以看到颁发的勋章信息';
$string['privacy:metadata:issued'] = '授予勋章的记录';
$string['privacy:metadata:issued:dateexpire'] = '勋章过期的日期';
$string['privacy:metadata:issued:dateissued'] = '授予的日期';
$string['privacy:metadata:issued:userid'] = '被授予勋章的用户的ID';
$string['privacy:metadata:manualaward'] = '手动授予的记录';
$string['privacy:metadata:manualaward:datemet'] = '用户被授予勋章的日期';
$string['privacy:metadata:manualaward:issuerid'] = '被授予勋章的用户的ID';
$string['privacy:metadata:manualaward:issuerrole'] = '被授予勋章的用户的角色';
$string['privacy:metadata:manualaward:recipientid'] = '被手动授予勋章的用户的ID';
$string['recipientdetails'] = '获得者详情';
$string['recipientidentificationproblem'] = '在现有用户中找不到此勋章的获得者。';
$string['recipients'] = '勋章获得者';
$string['recipientvalidationproblem'] = '当前用户无法验证为此勋章的获得者。';
$string['relatedbages'] = '关联勋章';
$string['relative'] = '相对日期';
$string['requiredbadge'] = '至少应该向勋章规则中添加一个勋章。';
$string['requiredcohort'] = '至少应将一个群组添加到群组规则。';
$string['requiredcompetency'] = '在能力规则中应添加至少一项能力。';
$string['requiredcourse'] = '至少有一门课程应该被添加到课程组规则';
$string['reviewbadge'] = '勋章获取方式的变更';
$string['reviewconfirm'] = '<p>此操作会让你的勋章对用户可见，并允许其获取。</p> <p>这可能是一些用户已经达到这个勋章的规则，在勋章启用后就会立即得到它</p> <p>一旦勋章颁发它将被<strong>锁定</strong> - 某些设置，包括规则和到期设置等不可以再改变。</p> <p>你确定要启用勋章\'{$a}\'么?</p>';
$string['revoke'] = '撤销勋章';
$string['save'] = '保存';
$string['searchname'] = '按名称搜索';
$string['selectaward'] = '请选择您要授予此勋章的用户角色：';
$string['selectgroup_end'] = '只显示公共集合。<a href="{$a}">访问您的背包</a> 创造更多的公共集合。';
$string['selectgroup_start'] = '从您的背包中选择要在本网站显示的集合：';
$string['selecting'] = '选定的勋章…';
$string['setup'] = '建立连接';
$string['sitebackpack'] = '可用的外部背包';
$string['sitebackpack_help'] = '用户可以从这个网站连接到的外部背包。请注意，在用户连接背包后更改此设置将要求每个用户进入背包设置页面，断开连接然后重新连接。';
$string['sitebackpackdeleted'] = '网站背包已被删除。';
$string['sitebackpacknotdeleted'] = '无法删除此背包，因为它当前是站点默认值。';
$string['sitebackpackverify'] = '背包连接';
$string['sitebackpackwarning'] = '无法连接到背包。<br/><br/>检查“勋章发行者电子邮件地址”管理设置是否为背包网站账户的有效电子邮件。<br/><br/>在 <a href="{$a->url}">站点背包设置页面</a>检查 "勋章发行人密码", 背包网站上的账号密码是否正确.。<br/><br/>背包返回："{$a->warning}"';
$string['sitebadges'] = '站点勋章';
$string['sitebadges_help'] = '站点勋章只能授予站点级别相关活动的用户。包括完成一个课程组或者是完善一部分个人档案等。站点勋章也可以由一个用户手工颁发给别人。 课程相关活动的勋章则只能在课程级别创建。课程勋章可以在课程管理 >勋章中找到。';
$string['status'] = '勋章状态';
$string['status_help'] = '勋章的状态决定了它在系统中的表现：

* **启用** – 表示此勋章可以被用户获得。此时勋章的授勋规则不能被更改。

* **禁用** – 表示此勋章既不可以被用户获得，也不能手工授予。如果此勋章从未授予给任何人，则它的授勋规则是可以被更改的。

一旦某勋章至少被授予了给一位用户，它自动就被转为 **锁定** 状态。已经被锁定的勋章仍然可以被用户获得，但它们的授勋规则就再不能被更改了。如果您想要修改一个被锁定的勋章，您可以复制它，然后再对复制品做所需的更改。

*为何我们要锁定勋章呢？*

我们需要保证所有的人在符合相同的条件情况下，都应当平等地获得勋章。而当前已经授予的勋章是无法被收回的。如果我们一直允许勋章的授勋规则被更改，则很有可能最终导致具备并不一致条件的人获得相同的勋章。';
$string['statusmessage_0'] = '此勋章还没有启用，请先启用它。';
$string['statusmessage_1'] = '此勋章已经启用。如果需要再修改，请先禁用它。';
$string['statusmessage_2'] = '这个勋章目前对用户不可用，并且它的授勋规则是锁定的。如果您希望用户获得此勋章，请启用访问。';
$string['statusmessage_3'] = '此勋章已经启用，故它的授勋规则已经被锁定。';
$string['statusmessage_4'] = '此勋章目前已存档。';
$string['subject'] = '消息主题';
$string['targetcode'] = '代码';
$string['targetcode_help'] = '用于在其框架内引用外部技能或标准的唯一字符串标识符。';
$string['targetdescription'] = '描述';
$string['targetdescription_help'] = '外部技能或标准的简短描述。';
$string['targetframework'] = '框架';
$string['targetframework_help'] = '外部技能或标准框架的名称。';
$string['targetname'] = '名称';
$string['targetname_help'] = '与勋章达成一致的外部技能或标准。';
$string['targeturl'] = '网址';
$string['targeturl_help'] = '指向描述外部技能或标准的页面的链接。URL应该有一个前缀http://或https://。';
$string['testbackpack'] = '测试背包"{$a}"';
$string['testsettings'] = '测试设置';
$string['type'] = '类型';
$string['variablesubstitution'] = '在消息中的替换变量';
$string['variablesubstitution_help'] = '在设置勋章消息时，可以将某些变量插入到消息标题和/或消息内容当中，这些变量在该消息发送出去的时候会被替换成相关的真实数据。这些变量在插入的时候必须严格按下面的格式进行填写。下面列出可以使用的变量及其使用格式：

%badgename%
：此变量将会被替换成勋章的全名。

%username%
：此变量将会被替换成获得勋章用户的全名。

%badgelink%
：此变量将会被替换成授勋机构的URL网址。';
$string['version'] = '版本';
$string['version_help'] = '版本字段可用于跟踪勋章的开发。如果指定，版本将显示在勋章页面上。';
$string['viewbadge'] = '查看已颁发的勋章';
$string['visible'] = '可见';
$string['warnexpired'] = '（此勋章已过期！）';
$string['year'] = '年';
