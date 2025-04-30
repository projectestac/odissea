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
 * Strings for component 'enrol_lti', language 'zh_cn', version '4.4'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = '添加内容';
$string['adddeployment:deploymentid'] = '部署 ID';
$string['adddeployment:deploymentid_help'] = '平台中工具（此站点）的每个部署都将分配一个部署 ID，该 ID 对于注册是唯一的。必须先在工具（此站点）中注册部署 ID，然后才允许从相应的工具部署启动。';
$string['adddeployment:invaliddeploymentiderror'] = '无效部署ID。此部署ID已在该app应用中注册过。';
$string['adddeployment:name'] = '部署名称';
$string['addtocourse'] = '添加到课程';
$string['addtogradebook'] = '添加到成绩册';
$string['allowframeembedding'] = '注意:建议启用站点管理设置“允许框架嵌入”，以便工具显示在框架中，而不是显示在新窗口中。';
$string['authltimustbeenabled'] = '注意:这个插件也需要启用LTI身份验证插件。';
$string['cartridgeurl'] = 'Cartridge URL';
$string['cookiesarerequired'] = 'Cookie 被您的浏览器阻止';
$string['cookiesarerequiredinfo'] = '此工具无法启动，因为您的浏览器似乎正在阻止第三方 Cookie。
<br><br>
要使用此工具，请尝试更改浏览器 Cookie 设置或使用其他浏览器。';
$string['copiedtoclipboard'] = '{$a}已复制到剪贴板';
$string['copytoclipboard'] = '复制到剪贴板';
$string['couldnotestablishproxy'] = '无法与使用者建立代理关系。';
$string['customproperties'] = '自定义属性';
$string['deeplinkingurl'] = '深层链接网址';
$string['deletedactivity'] = '已删除的活动记录';
$string['deletedactivityalt'] = '此实例共享的活动已删除';
$string['deletedactivitydescription'] = '此实例共享的活动已删除。您可以通过编辑实例来选择要共享的其他活动，或者，如果不再需要，您可以直接删除该实例。删除实例将删除任何关联的用户注册。';
$string['deploymentadd'] = '添加部署';
$string['deploymentaddnotice'] = '已添加部署';
$string['deploymentdelete'] = '删除部署';
$string['deploymentdeleteconfirm'] = '警告：删除部署将导致任何用户无法访问平台中与此工具部署相关的资源链接。这些资源的成员和成绩同步服务也将被删除。您确定要删除部署 ID“{$a}”吗？';
$string['deploymentdeletenotice'] = '已删除部署';
$string['deploymentid'] = '部署ID';
$string['deployments'] = '部署';
$string['deploymentsinfo'] = '当工具在具体情境下可用时，平台会生成部署 ID。 当该工具在某门课程或类别中使用时，部署ID会在注册时或注册之后生成。在允许工具部署启动之前，必须在此处输入部署 ID。';
$string['details'] = '详细信息';
$string['editplatformdetails'] = '编辑平台详细信息';
$string['endpointltiversionnotice'] = '下面的工具终端仅用于手动设置 LTI 1.3 。对于早期版本 (1.1/2.0)，使用者详细信息可以在“发布为 LTI 工具”页面上查询，可通过课程导航访问。';
$string['enrolenddate'] = '结束日期';
$string['enrolenddate_help'] = '如果启用，用户只能访问到此日期。';
$string['enrolenddateerror'] = '选课结束日期不能早于开始日期';
$string['enrolisdisabled'] = '“作为LTI工具发布”插件被禁用。';
$string['enrolltiversionincorrect'] = '该资源未设置为在旧版 LTI（版本 1.1/2.0）上使用。请与此工具的管理员联系。';
$string['enrolmentfinished'] = '选课已完成。';
$string['enrolmentnotstarted'] = '选课尚未开始。';
$string['enrolperiod'] = '选课持续时间';
$string['enrolperiod_help'] = '选课有效的时间长度，从用户从远程系统选课时开始计算。如果禁用，选课时间将不受限制。';
$string['enrolstartdate'] = '开始日期';
$string['enrolstartdate_help'] = '如果启用，用户只能从此日期开始访问。';
$string['existingregistrationerror'] = '该发布者和客户ID已被注册。';
$string['failedrequest'] = '失败的请求。原因: {$a->reason}';
$string['frameembeddingnotenabled'] = '要访问该工具，请点击下面的链接。';
$string['gradesync'] = '成绩同步';
$string['gradesync_help'] = '工具中的成绩是否发送到远程系统(LTI使用者)。';
$string['incorrecttoken'] = '令牌不正确。请检查URL并重试，或与此工具的管理员联系。';
$string['invalidexpiredregistrationurl'] = '注册URL无效或过期。请检查URL并重试。';
$string['invalidrequest'] = '无效请求';
$string['invalidtoolconsumer'] = '无效的工具使用者';
$string['jwksurl'] = 'JWKS 网址';
$string['launchdetails'] = '启动细节';
$string['launchdetails_help'] = '配置工具需要cartridge URL(也称为配置URL)加上secret或启动 URL。';
$string['launchurl'] = '启动 URL';
$string['loginurl'] = '启动登录 URL';
$string['lti13'] = 'LTI升级版';
$string['lti13launchdetails'] = '发布详情';
$string['lti13launchdetails_help'] = '只有在平台中手动配置资源链接时，才需要配置启动URL和自定义属性。在可能的情况下，在创建资源链接时教师更倾向于进行内容选择（深度链接）。';
$string['lti:config'] = '配置“作为LTI工具发布”实例';
$string['lti:unenrol'] = '取消用户选课';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = '从平台获取OpenID配置时出现问题，结果显示JSON无效。这可能是由于主机配置受阻造成的。请确保您的站点已配置连接到平台域，并使用新的注册URL重试。';
$string['ltiadvlauncherror:invaliddeployment'] = '启动数据或工具配置无效。找不到部署（部署 ID：{$a}）。';
$string['ltiadvlauncherror:invalidid'] = '无效的启动数据。资源“{$a}”不可用或不存在。';
$string['ltiadvlauncherror:invalidregistration'] = '启动数据或工具配置无效。平台注册信息未找到（发布者：{$a->platform}，客户ID：{$a->clientid}）。';
$string['ltiadvlauncherror:missingid'] = '无效的启动数据。通过LTI升级版启动活动或资源时需要自定义声明字段“id”。';
$string['ltilegacy'] = '旧版 LTI (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = '旧版 LTI (1.1/2.0) 工具已弃用。 请使用 LTI升级版 共享内容。';
$string['ltiversion'] = 'LTI 版本';
$string['ltiversion_help'] = '将用于访问已发布内容的 LTI 版本。

LTI Advantage 允许将内容发布到预先注册的平台，而无需在发布新内容时在平台上进行更改。安全契约是平台和工具之间的契约。

旧版本（1.1 和 2.0）要求在消费者身上为每条新发布的内容创建新的工具注册，因为每条发布的内容都与消费者网站有自己的安全合同，并且必须根据具体情况进行设置';
$string['managedeployments'] = '管理部署';
$string['maxenrolled'] = '最大选课用户数';
$string['maxenrolled_help'] = '可以访问该工具的远程用户的最大数量。如果设置为零，则选课用户的数量是无限的。';
$string['maxenrolledreached'] = '允许访问该工具的远程用户的最大数量已经达到。';
$string['membersync'] = '用户同步';
$string['membersync_help'] = '计划任务是否将远程系统中已选课用户与本课程的选课用户同步，根据需要为每个远程用户创建帐户，并根据需要选课或取消选课。如果设置为否，则在远程用户访问该工具时，将为他们创建一个帐户，他们将自动选课。';
$string['membersyncmode'] = '用户同步模式';
$string['membersyncmode_help'] = '远程用户是否应该选课和/或取消选课本课程。';
$string['membersyncmodeenrolandunenrol'] = '新选课的和未选课的失踪用户';
$string['membersyncmodeenrolnew'] = '为新用户选课';
$string['membersyncmodeunenrolmissing'] = '未选课失踪的用户';
$string['moodle'] = 'Moodle';
$string['nodeployments'] = '未找到工具部署';
$string['nopublishedcontent'] = '尚未发布任何资源或活动';
$string['noregisteredplatforms'] = '没有注册平台';
$string['notoolsprovided'] = '没有提供工具';
$string['opensslconfiginvalid'] = 'LTI 1.3 需要配置有效的 openssl.cnf 并可供您的 Web 服务器使用。 请联系站点管理员为该站点配置和启用openssl。';
$string['opentool'] = '打开工具';
$string['platformdetails'] = '平台详情';
$string['platformdetailsinfo'] = '在平台中设置工具后，必须在此处记录来自平台的详细信息以完成注册。
<ul>
<li>对于动态注册，此信息将自动设置，无需进一步更改。</li>
<li>对于手动注册，必须从平台手动复制此信息。</li>
</ul>';
$string['pluginname'] = '作为LTI工具发布';
$string['pluginname_desc'] = '“作为LTI工具发布”插件和LTI身份验证插件允许远程用户访问选定的课程和活动。换句话说，Moodle的功能是提供LTI工具。';
$string['privacy:metadata:enrol_lti_users'] = '通过LTI提供者选课的用户列表';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = '用户最后一次访问课程的时间';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = '用户被记录的最后成绩';
$string['privacy:metadata:enrol_lti_users:timecreated'] = '用户选课的时间';
$string['privacy:metadata:enrol_lti_users:userid'] = '用户的ID';
$string['provisioningmode'] = '关联模式';
$string['provisioningmode_help'] = '此设置决定了首次启动时如何处理帐户。支持多种模式：
<ul>
<li>仅限新帐户（自动）。系统将自动为从平台启动的用户创建帐户。这是学生启动的默认设置。</li>
<li>现有帐户和新帐户（提示）。用户将可以选择做什么。他们可以决定关联现有帐户，或为他们创建新帐户。这是最灵活的选项，也是教师启动的默认选项。</li>
<li>仅限现有帐户（提示）。系统将要求用户链接现有帐户，如果不这样做，将无法访问工具资源。</li>
</ul>';
$string['provisioningmodestudentlaunch'] = '学生首次启动关联模式';
$string['provisioningmodeteacherlaunch'] = '教师首次启动关联模式';
$string['publishedcontent'] = '已发布内容';
$string['publishedcontent_help'] = '已发布的资源或活动可在注册平台通过内容选择（深度链接）模式使用。此外，还可以通过使用启动URL和提供的自定义属性在平台中手动创建资源链接。';
$string['registeredplatforms'] = '注册平台';
$string['registeredplatformsltiversionnotice'] = '以下列出的平台已注册LTI 1.3通信方式。对于早期版本，使用者不需要注册。';
$string['registerplatform:accesstokenurl'] = '访问令牌URL';
$string['registerplatform:accesstokenurl_help'] = '工具发送访问令牌请求的URL将由平台提供。';
$string['registerplatform:authrequesturl'] = '身份验证请求 URL';
$string['registerplatform:authrequesturl_help'] = '工具发送开放ID身份验证请求的URL将由平台提供。';
$string['registerplatform:clientid'] = '客户ID';
$string['registerplatform:clientid_help'] = '用于识别平台上注册工具的字符串将由平台提供。';
$string['registerplatform:duplicateregistrationerror'] = '无效的客户 ID。 此客户 ID 已在提供的平台 ID 注册。';
$string['registerplatform:invalidurlerror'] = '无效的网址。您是否输入 http:// 或 https://？';
$string['registerplatform:jwksurl'] = '公共密钥集URL';
$string['registerplatform:jwksurl_help'] = '公钥集或 JWKS URL，用于获取平台的公钥，将由平台提供。';
$string['registerplatform:name'] = '平台名称';
$string['registerplatform:name_help'] = '描述平台的简短名称，可随时更改。';
$string['registerplatform:platformid'] = '平台 ID（发布者）';
$string['registerplatform:platformid_help'] = '第三方学习平台URL，将由平台提供。';
$string['registerplatformadd'] = '注册一个平台';
$string['registerplatformaddnotice'] = '已添加平台注册';
$string['registerplatformdelete'] = '删除平台注册';
$string['registerplatformdeleteconfirm'] = '你确定要删除平台{$a}的注册吗？这将同时删除与此注册平台相关的所有工具部署。';
$string['registerplatformdeletenotice'] = '已删除平台注册';
$string['registerplatformedit'] = '编辑注册';
$string['registerplatformeditnotice'] = '平台注册已更新';
$string['registration'] = '已发布的工具注册';
$string['registrationdeeplinklabel'] = '从{$a}添加内容';
$string['registrationdynamic'] = '动态注册';
$string['registrationmanual'] = '手动注册';
$string['registrationresourcelinklabel'] = '从 {$a} 启动内容';
$string['registrationstatus'] = '状态';
$string['registrationstatusactive'] = '活跃的';
$string['registrationstatuspending'] = '待处理的';
$string['registrationurl'] = '注册URL';
$string['registrationurl_help'] = '如果使用注册URL(也称为代理URL)，则自动配置该工具。';
$string['registrationurlinfomessage'] = '如果平台支持动态注册，请使用下方注册网址。有关动态注册的更多信息，请参阅文档 <a href="{$a}">发布为 LTI 工具</a>.';
$string['remotesystem'] = '远程系统';
$string['requirecompletion'] = '需要在成绩同步前完成课程或活动';
$string['returnurlnotset'] = '没有设置返回URL。';
$string['roleinstructor'] = '教师的角色';
$string['roleinstructor_help'] = '在工具中分配给远程教师的角色。';
$string['rolelearner'] = '学生的角色';
$string['rolelearner_help'] = '在工具中分配给远程学生的角色。';
$string['secret'] = '秘密短语';
$string['secret_help'] = '与远程系统(LTI使用者)共享的一串字符，用于提供对该工具的访问。';
$string['sharedexternaltools'] = '发布为LTI工具';
$string['successfulregistration'] = '成功注册';
$string['tasksyncgrades'] = '作为LTI工具发布成绩同步';
$string['tasksyncmembers'] = '作为LTI工具发布用户同步';
$string['tooldetails'] = '工具详情';
$string['toolsprovided'] = '已发布工具';
$string['toolsprovided_help'] = '工具可以通过提供启动细节或注册URL与其他站点共享。';
$string['tooltobeprovided'] = '即将发布的工具';
$string['toolurl'] = '工具URL';
$string['userdefaultvalues'] = '用户默认值';
$string['viewplatformdetails'] = '查看平台详情';
$string['viewtoolendpoints'] = '查看工具终端';
