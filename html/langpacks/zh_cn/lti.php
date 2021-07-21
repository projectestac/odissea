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
 * Strings for component 'lti', language 'zh_cn', version '3.11'.
 *
 * @package     lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = '接受';
$string['accept_grades'] = '接受此工具的成绩';
$string['accept_grades_admin'] = '接受此工具的成绩';
$string['accept_grades_admin_help'] = '详细说明工具提供者是否可以添加、更新、读取和删除与此工具实例关联的成绩。一些工具供应商支持根据在工具内采取的动作向Moodle报告成绩，从而创建更集成的体验。';
$string['accept_grades_help'] = '详细说明工具提供者是否可以添加、更新、读取和删除仅与此外部工具实例关联的成绩。一些工具供应商支持根据在工具内采取的行动向Moodle报告成绩，从而创建更集成的体验。注意，此设置可能在工具配置中被覆盖。';
$string['accepted'] = '已接受';
$string['action'] = '动作';
$string['activate'] = '激活';
$string['activatetoadddescription'] = '在添加描述之前，您需要激活此工具。';
$string['active'] = '活跃';
$string['activity'] = '活动';
$string['addnewapp'] = '启用外部应用程序';
$string['addserver'] = '添加新的可信服务器';
$string['addtype'] = '添加预配置工具';
$string['allow'] = '允许';
$string['allowsetting'] = '允许此工具在Moodle中储存8K的设置';
$string['always'] = '总是';
$string['autoaddtype'] = '添加工具';
$string['automatic'] = '根据工具url，自动选择';
$string['baseurl'] = '基础网页地址 / 工具注册名称';
$string['basiclti'] = 'LTI';
$string['basiclti_base_string'] = 'LTI 授权基本字符串';
$string['basiclti_endpoint'] = 'LTI启动端点';
$string['basiclti_in_new_window'] = '您的活动已在新窗口打开';
$string['basiclti_in_new_window_open'] = '在新窗口打开';
$string['basiclti_parameters'] = 'LTI 启动参数';
$string['basicltiactivities'] = 'LTI 活动';
$string['basicltifieldset'] = '自定义示例字段';
$string['basicltiintro'] = '活动描述';
$string['basicltiname'] = '活动名称';
$string['basicltisettings'] = '基本学习工具互操作性(LTI)设置';
$string['cachedef_keyset'] = '缓存工具的密钥集信息';
$string['cancel'] = '取消';
$string['cancelled'] = '已取消';
$string['cannot_delete'] = '您不能删除这个工具的配置。';
$string['cannot_edit'] = '您不能编辑这个工具的配置。';
$string['capabilities'] = '功能';
$string['capabilities_help'] = '选择您希望提供给工具提供者的那些功能。可以选择多个功能。';
$string['capabilitiesrequired'] = '该工具需要访问以下数据才能激活：';
$string['cleanaccesstokens'] = '外部工具删除过期的访问令牌';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">点击继续</a>';
$string['clientidadmin'] = '客户端 ID';
$string['clientidadmin_help'] = '客户端ID是用于标识工具的唯一值。它是为每个使用LTI 1.3中引入的JWT安全个人档案的工具自动创建的，并且应该是传递给工具提供者的详细信息的一部分，以便他们能够在他们的末端配置连接。';
$string['comment'] = '评论';
$string['configpassword'] = '默认的远程工具密码';
$string['configpreferheight'] = '默认偏好高度';
$string['configpreferwidget'] = '设置小部件为默认启动';
$string['configpreferwidth'] = '默认偏好宽度';
$string['configresourceurl'] = '默认的资源URL';
$string['configtoolurl'] = '默认远程工具URL';
$string['configtypes'] = '激活 LTI 应用';
$string['configured'] = '已配置';
$string['confirmtoolactivation'] = '您确定要激活此工具吗?';
$string['contentitem'] = '内容项目消息‎';
$string['contentitem_deeplinking_help'] = '如果勾选，在添加外部工具的时候，“选择内容”一项将有效。';
$string['contentitem_help'] = '如果勾选，在添加外部工具的时候，“选择内容”一项将有效。';
$string['course_tool_types'] = '课程工具';
$string['courseactivitiesorresources'] = '课程活动或资源';
$string['courseid'] = '课程编号';
$string['courseinformation'] = '课程信息';
$string['courselink'] = '去课程';
$string['coursemisconf'] = '课程配置错误';
$string['createdon'] = '创建于';
$string['curllibrarymissing'] = '要使用 LTI 必须安装 PHP Curl 库';
$string['custom'] = '自定义参数';
$string['custom_config'] = '使用自定义工具配置。';
$string['custom_help'] = '自定义参数是工具提供者使用的设置。例如，可以使用自定义参数来显示来自提供者的特定资源。每个参数都应该使用“name=value”的格式在单独的行中输入;例如,“章= 3”。除非由工具提供者指导，否则保持该字段不变是安全的。';
$string['custominstr'] = '自定义参数';
$string['debuglaunch'] = '调试选项';
$string['debuglaunchoff'] = '以普通模式启动';
$string['debuglaunchon'] = '以调试模式启动';
$string['default'] = '默认';
$string['default_launch_container'] = '默认启动容器';
$string['default_launch_container_help'] = '启动容器将影响从课程发行工具时的显示。一些启动容器为工具提供了更多的屏幕空间，而另一些则提供了与Moodle环境更集成的感觉。** *默认** -使用工具配置指定的启动容器。** *嵌入** -该工具显示在现有的Moodle窗口中，其方式与大多数其他活动类型类似。** *嵌入，没板块** -工具显示在现有的Moodle窗口，只有导航控件在页面的顶部。** *新窗口** -工具打开一个新窗口，占据所有可用空间。根据浏览器的不同，它将在一个新标签页或弹出窗口中打开。浏览器可能会阻止新窗口打开。';
$string['delegate'] = '委托给老师';
$string['delete'] = '删除';
$string['delete_confirmation'] = '您确定要删除这个预配置的工具吗?';
$string['deletetype'] = '删除预配置工具';
$string['display_description'] = '启动后显示活动描述';
$string['display_description_help'] = '如果启用，上面设定的活动描述会显示在工具的内容上面。

此描述可以用来提供工具未提供的各种说明，不过这不是必须的。

如果工具是在新窗口中启动，则永远不会显示描述。';
$string['display_name'] = '启动后显示活动名';
$string['display_name_help'] = '如果启用，上面设定的活动名会显示在工具的内容上面。

工具提供商也有可能会显示活动名。此选项可以避免活动名被显示两次。

如果工具是在新窗口中启动，则永远不会显示活动名。';
$string['domain_mismatch'] = '工具URL的域名与工具配置不匹配。';
$string['donot'] = '不发送';
$string['donotaccept'] = '不接受';
$string['donotallow'] = '不允许';
$string['duplicateregurl'] = '此注册URL已在使用中';
$string['editdescription'] = '点击这里给这个工具一个描述';
$string['edittype'] = '编辑预配置工具';
$string['embed'] = '嵌入';
$string['embed_no_blocks'] = '嵌入，不使用版块';
$string['enableemailnotification'] = '发送通知邮件';
$string['enableemailnotification_help'] = '如果激活，当学生的提交评分后，他们会收到邮件通知。';
$string['enterkeyandsecret'] = '输入用户密钥和共享密钥';
$string['enterkeyandsecret_help'] = '如果您获得了用户密钥和/或共享密钥，请在这里输入它们';
$string['errorbadurl'] = 'URL不是有效的工具URL或工具盒。';
$string['errorincorrectconsumerkey'] = '用户密钥不正确。';
$string['errorinvaliddata'] = '无效的数据:{$}';
$string['errorinvalidmediatype'] = '无效的媒体类型:{$a}';
$string['errorinvalidresponseformat'] = '无效的内容项响应格式。';
$string['errormisconfig'] = '配置错误的工具。请您的Moodle管理员修复该工具的配置。';
$string['errortooltypenotfound'] = '没有找到LTI工具类型。';
$string['existing_window'] = '现有的窗口';
$string['extensions'] = 'LTI拓展服务';
$string['external_tool_type'] = '预配置工具';
$string['external_tool_type_help'] = '工具配置的主要目的是为 Moodle 和工具提供商之间提供一个安全的沟通渠道。
它也提供了由此工具提供的默认配置以及设置附加服务的机会。

* **自动的，基于 Launch URL** - 该项设置几乎应该被应用在所有情况下。 Moodle 会
       基于Launch URL 选择最合适的工具配置。由管理员或者课程内配置的工具将会被用到。
       当指定了 Launch URL， 无论是否识别该 URL ，  Moodle都会提供一个反馈。如果 Moodle 未能识别 Launch URL，您可能需要
       手动进入工具配置细节。
* **一种特殊的工具类型** - 通过选择一种特殊的工具类型，在与外部工具提供者
       进行交流的时候，您可以强制 Moodle 使用该工具配置。如果该 Launch URL 并不属于该工具提供者，一个警告将会出现。在
       某些情况下，没有必要在提供一种特殊的工具类型时进入一个 Launch URL （如果对于工具提供者没有连接到特定的资源）。
* **自定义配置** - 为了在这个实例中开始自定义工具配置，显示高级选项并进入使用者密匙和共享密匙。如果您没有用户密匙和共享密匙，您可以从工具提供者获得他们。
       并不是所有的工具都需要一个用户密匙和共享密匙，在这种情况下相应的填写密匙处可以留空不填。

### 工具类型编辑

在外部工具类型的下拉菜单中，有三个图标可供使用：

* **添加** - 建立一个课程级别的工具配置。在该课程下的所有外部工具实例都可以使用该工具配置。
* **编辑** - 从该下拉菜单中选择课程级别工具类型，然后点击该图标。工具配置的细节可以被编辑。
* **删除** - 删除已选择的课程级别工具类型。';
$string['external_tool_types'] = '预配置工具';
$string['failedtoconnect'] = 'Moodle无法与“{$a}”系统通讯';
$string['failedtocreatetooltype'] = '创建新工具失败。请检查URL，然后再试一次。';
$string['failedtodeletetoolproxy'] = '删除工具注册失败。您可能需要访问“管理外部工具注册”并手动删除它。';
$string['filter_basiclti_configlink'] = '配置您首选的站点以及他们的密码';
$string['filter_basiclti_password'] = '必须输入密码';
$string['filterconfig'] = 'LTI 管理';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = '对错误配置的实例使用现有配置';
$string['fixnew'] = '新的配置';
$string['fixnewconf'] = '为错误配置的实例定义新配置';
$string['fixold'] = '使用现有的';
$string['force_ssl'] = '强制使用 SSL';
$string['force_ssl_help'] = '选择此选项将强制此工具的所有启动者都使用SSL。此外，来自工具的所有web服务请求都将使用SSL。如果使用此选项，请确认此Moodle站点和工具提供者支持SSL。';
$string['forced_help'] = '该项设置已经在一个课程或者站点级别配置中强制生效。您在本界面中不能改变它。';
$string['generaltool'] = '普通工具';
$string['global_tool_types'] = '全局预配置工具';
$string['grading'] = '成绩路由';
$string['icon_url'] = '图标的网址';
$string['icon_url_help'] = 'icon URL允许修改在课程列表中显示的用于此活动的图标。可以指定一个表示活动类型的图标，而不是使用默认的LTI图标。';
$string['id'] = 'id号';
$string['indicator:cognitivedepth'] = 'LTI 活动认知深度';
$string['indicator:cognitivedepth_help'] = '这个指标是基于学生在 LTI活动中所达到的认知深度。';
$string['indicator:cognitivedepthdef'] = 'LTI 活动认知深度';
$string['indicator:cognitivedepthdef_help'] = '在此分析间隔内，参与者达到了外部工具活动所提供的认知参与百分比(级别=未查看、查看、提交、查看反馈)';
$string['indicator:socialbreadth'] = 'LTI活动社会宽度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在LTI活动中所达到的社会广度。';
$string['indicator:socialbreadthdef'] = 'LTI活动社会宽度';
$string['indicator:socialbreadthdef_help'] = '在这个分析间隔内，参与者已经达到了外部工具活动所提供的社会参与百分比(级别=没有参与，单独参与，和其他人一起参与)';
$string['initiatelogin'] = '初始化登录网址';
$string['initiatelogin_help'] = '要将启动登录的请求发送到的工具URL。在将消息成功发送到工具之前，需要此URL。';
$string['invalidid'] = 'LTI ID 不正确';
$string['jwtsecurity'] = 'LTI 1.3';
$string['keytype'] = '公钥类型';
$string['keytype_help'] = '用于验证工具的身份验证方法。';
$string['keytype_keyset'] = '密钥集 URL';
$string['keytype_rsa'] = 'RSA 密钥';
$string['launch_in_moodle'] = '在 moodle 中启动工具';
$string['launch_in_popup'] = '在弹出窗口中启动工具';
$string['launch_url'] = '启动 URL';
$string['launch_url_help'] = '工具URL表示外部工具的web地址，并且可能包含其他信息，例如要显示的资源。如果您不确定为工具URL输入什么内容，请向工具提供者查询更多信息。如果您有工具盒URL，您可以输入，其余的表单细节将自动填写。如果您选择了预配置的工具，您可能不需要输入工具URL。如果工具链接只是用于启动到工具提供者的系统，而不是指向特定的资源，那么很可能就是这种情况。';
$string['launchinpopup'] = '启动容器';
$string['launchinpopup_help'] = '启动容器将影响从课程启动时工具的显示。一些启动容器为工具提供了更多的屏幕空间，而另一些则提供了与Moodle环境更集成的感觉。** *默认** -使用工具配置指定的启动容器。** *嵌入** -该工具显示在现有的Moodle窗口中，其方式与大多数其他活动类型类似。** *嵌入，没有版块** -该工具显示在现有的Moodle窗口，只有导航控件在页面的顶部。** *新窗口** -该工具将在一个新窗口中打开，占据所有可用空间。根据浏览器的不同，它将在一个新标签页或弹出窗口中打开。浏览器可能会阻止新窗口打开。';
$string['launchoptions'] = '启动选项';
$string['leaveblank'] = '如果不需要，就留空';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = '添加特定于课程的工具配置';
$string['lti:addinstance'] = '添加一个新的外部工具';
$string['lti:addmanualinstance'] = '添加手动配置的工具';
$string['lti:addpreconfiguredinstance'] = '添加预配置的工具';
$string['lti:admin'] = '该工具启动时成为管理员';
$string['lti:grade'] = '查看外部工具返回的成绩';
$string['lti:manage'] = '当工具启动时成为指导员';
$string['lti:requesttooladd'] = '请求工具在站点范围内配置';
$string['lti:view'] = '启动外部工具活动';
$string['lti_administration'] = '编辑预配置工具';
$string['lti_errormsg'] = '该工具返回了如下的错误信息：“{$a}”';
$string['lti_launch_error'] = '启用该外部工具时发生了一个错误：';
$string['lti_launch_error_tool_request'] = '<p>
为了提交一个使管理员完成工具配置的请求，点击<a href="{$a->admin_request_url}" target="_top">这里</a>。
</p>';
$string['lti_launch_error_unsigned_help'] = '<p>此错误可能是由于缺少工具提供程序的使用者密钥和共享密钥造成的。</p> <p>如果您有一个使用者密钥和共享密钥，您可以在编辑外部工具实例时输入它(确保高级选项是可见的)。</p> <p>或者， 您可以<a href="{$a->course_tool_editor}">创建课程级工具提供程序配置</a>。</p>';
$string['lti_tool_request_added'] = '工具配置请求成功提交。您可能需要联系管理员来完成工具配置。';
$string['lti_tool_request_existing'] = '工具域名的工具配置已经提交。';
$string['ltisettings'] = 'LTI设置';
$string['ltiunknownserviceapicall'] = 'LTI未知服务API调用。';
$string['ltiversion'] = 'LTI 版本';
$string['ltiversion_help'] = '用于对消息和服务请求进行签名的LTI版本:LTI 1.0/1.1和LTI 2.0使用OAuth 1.0A安全个人档案;LTI 1.3.0使用JWTs。';
$string['main_admin'] = '通用帮助';
$string['main_admin_help'] = '外部工具允许Moodle用户与远程托管的学习资源进行交互。通过一个特殊的启动协议，远程工具可以访问关于启动用户的一般信息。例如，机构名称、课程ID、用户ID和其他信息，如用户名或电子邮件地址。本页列出的工具分为三个类别:** *活跃** -这些工具供应商已获管理员批准和配置。他们可以从任何课程在这个网站上使用。如果输入了使用者密钥和共享密钥，则在此站点和远程工具之间建立信任关系，从而提供安全的通信通道。** *挂起** -这些工具提供程序是通过包导入来的，但是还没有被管理员配置。教师仍然可以使用来自这些提供者的工具，如果他们有一个使用者密钥和共享密钥，或者不需要任何密钥。** *拒绝** -这些工具提供者被标记为管理员无意在站点上提供的工具。教师仍然可以使用来自这些提供者的工具，如果他们有一个使用者密钥和共享密钥，或者不需要任何密钥。';
$string['manage_external_tools'] = '管理';
$string['manage_tool_proxies'] = '管理外部工具注册';
$string['manage_tools'] = '管理预配置工具';
$string['manuallyaddtype'] = '或者，您可以 <a href="{$a}">手动配置一个工具</a>。';
$string['miscellaneous'] = '杂项';
$string['misconfiguredtools'] = '检测到错误配置的工具实例';
$string['missingparameterserror'] = '页面配置错误：“{$a}”';
$string['module_class_type'] = 'Moodle 模块类型';
$string['modulename'] = '外部工具';
$string['modulename_help'] = '外部工具活动模块使学生能够与其他网站上的学习资源和活动进行交互。
例如，一个外部工具可以提供来自发布者的新活动类型或学习材料的访问权。
要创建一个外部工具活动，需要一个支持LTI(学习工具互操作性)的工具提供程序。
教师可以创建一个外部工具活动，或者使用由站点管理员配置的工具。
外部工具活动不同于URL资源的几方面:
* 外部工具是上下文意识，即它们可获得启动该工具的用户的信息,例如机构,课程和姓名
* 外部工具支持阅读、更新，和删除与活动实例相关的成绩
* 外部工具配置创建一个你的网站和工具提供者之间的信任关系,允许它们之间的安全通信';
$string['modulenameplural'] = '外部工具';
$string['modulenamepluralformatted'] = 'LTI 实例';
$string['name'] = '名称';
$string['never'] = '从不';
$string['new_window'] = '新窗口';
$string['no_lti_configured'] = '没有活跃的外部工具配置。';
$string['no_lti_pending'] = '没有挂起的外部工具';
$string['no_lti_rejected'] = '没有被拒绝的外部工具';
$string['no_lti_tools'] = '没有配置任何外部工具。';
$string['no_tp_accepted'] = '没有已接受的外部工具注册。';
$string['no_tp_cancelled'] = '没有已注销的外部工具注册。';
$string['no_tp_configured'] = '没有未注册的外部工具注册配置。';
$string['no_tp_pending'] = '没有未完成的外部工具注册。';
$string['no_tp_rejected'] = '没有被拒绝的外部工具注册。';
$string['noattempts'] = '对该工具实例没有做任何尝试';
$string['noltis'] = '没有 lti 实例';
$string['noprofileservice'] = '没有找到个人档案服务';
$string['noservers'] = '没有找到服务器';
$string['notypes'] = '目前在 Moodle 中没有 LTI 工具设置。点击上方的安装按钮去添加一些。';
$string['noviewusers'] = '没有找到拥有使用该工具权限的用户';
$string['oauthsecurity'] = 'LTI 1.0/1.1';
$string['opensslconfiginvalid'] = 'LTI 1.3需要配置一个有效的openssl.cnf，并使其对您的web服务器可用。请与站点管理员联系，以便为该站点配置和启用openssl。';
$string['optionalsettings'] = '可选设置';
$string['organization'] = '机构详情';
$string['organizationdescr'] = '组织描述';
$string['organizationid'] = '机构 ID';
$string['organizationid_default'] = '默认组织 ID';
$string['organizationid_default_help'] = '组织ID的默认值。站点ID标识这个Moodle安装。';
$string['organizationid_help'] = '这个Moodle实例的唯一标识符。通常使用组织的DNS（域名）名称。如果此字段留空，则此Moodle站点的主机名将用作默认值。';
$string['organizationidguid'] = '组织ID';
$string['organizationidguid_help'] = '这个Moodle实例的唯一标识符作为平台实例GUID传递给工具。
如果该字段为空，则使用默认值。';
$string['organizationurl'] = '机构 URL';
$string['organizationurl_help'] = '这个Moodle实例的基本URL。如果此字段为空，则将根据站点配置使用默认值。';
$string['pagesize'] = '每页显示的提交';
$string['parameter'] = '工具参数';
$string['parameter_help'] = '工具参数是工具提供者在可接受的工具代理中请求传递的设置。';
$string['password'] = '共享密匙';
$string['password_admin'] = '共享密匙';
$string['password_admin_help'] = '共享密匙可以被看作是用来授权访问工具的一个密码。它应该同用户密匙一同由工具提供。

不需要来自 Moodle 的保密通信以及不提供附加的服务（例如成绩报告）的工具可能不需要一个共享密匙。';
$string['password_help'] = '对于预配置的工具，此处没有必要输入共享密匙，因为该共享密匙在
配置过程中将会被提供。

如果向工具建立的连接没有配置，该区域应该填写。
如果在此课程中工具将会被多次使用，添加一个课程工具配置会是一个好主意。

共享密匙可以被看作是用来授权访问工具的一个密码。它应该同用户密匙一同由工具提供。

不需要来自 Moodle 的保密通信以及不提供附加的服务（例如成绩报告）的工具可能不需要一个共享密匙。';
$string['pending'] = '挂起';
$string['pluginadministration'] = 'LTI 管理';
$string['pluginname'] = '外部工具';
$string['preferheight'] = '首选高度';
$string['preferwidget'] = '首选小部件启动';
$string['preferwidth'] = '首选宽度';
$string['press_to_submit'] = '点击以启动此活动';
$string['privacy'] = '隐私';
$string['privacy:metadata:coursefullname'] = '用户从LTI使用者访问的课程的全名';
$string['privacy:metadata:courseid'] = '用户访问LTI使用者的课程的ID';
$string['privacy:metadata:courseidnumber'] = '用户从LTI使用者访问的课程的ID号';
$string['privacy:metadata:courseshortname'] = '用户访问LTI使用者的课程的简称';
$string['privacy:metadata:createdby'] = '创建记录的用户';
$string['privacy:metadata:email'] = '访问LTI使用者的用户的电子邮件地址';
$string['privacy:metadata:externalpurpose'] = 'LTI使用者向LTI工具提供者提供用户信息和场景。';
$string['privacy:metadata:firstname'] = '‎访问 LTI 使用者的用户的名字';
$string['privacy:metadata:fullname'] = '访问LTI使用者的用户的全名';
$string['privacy:metadata:lastname'] = '‎访问 LTI 使用者的用户的姓氏';
$string['privacy:metadata:lti_submission'] = 'LTI提交';
$string['privacy:metadata:lti_submission:datesubmitted'] = '表示提交时间的时间戳';
$string['privacy:metadata:lti_submission:dateupdated'] = '表示提交何时被修改的时间戳';
$string['privacy:metadata:lti_submission:gradepercent'] = '用百分数表示用户的成绩';
$string['privacy:metadata:lti_submission:originalgrade'] = '用户的原始成绩';
$string['privacy:metadata:lti_submission:userid'] = '提交LTI活动的用户的ID';
$string['privacy:metadata:lti_tool_proxies'] = 'LTI代理';
$string['privacy:metadata:lti_tool_proxies:name'] = 'LTI代理名称';
$string['privacy:metadata:lti_types'] = 'LTI类型';
$string['privacy:metadata:lti_types:name'] = 'LTI类型名称';
$string['privacy:metadata:role'] = '用户访问LTI使用者的课程的角色';
$string['privacy:metadata:timecreated'] = '记录创建的时间';
$string['privacy:metadata:timemodified'] = '记录被修改的时间';
$string['privacy:metadata:userid'] = '访问LTI使用者的用户ID';
$string['privacy:metadata:useridnumber'] = '访问LTI使用者的用户的ID号';
$string['privacy:metadata:username'] = '访问LTI使用者的用户的用户名';
$string['publickey'] = '公钥';
$string['publickey_help'] = '该工具提供的公钥(PEM格式)，用于验证传入消息和服务请求的签名。';
$string['publickeyset'] = '公钥集';
$string['publickeyset_help'] = '此站点将从其中检索工具的公钥集，以允许对传入消息和服务请求的签名进行验证。';
$string['quickgrade'] = '允许快速评分';
$string['quickgrade_help'] = '如果启用，多个工具可以在一个页面上评分。添加分数和评论，然后点击“保存所有我的反馈”按钮，保存该页面的所有更改。';
$string['redirect'] = '您将在几秒钟内被重定向。如果没有，就按这个按钮。';
$string['redirectionuris'] = '重定向的URI';
$string['redirectionuris_help'] = '该工具在发出授权请求时使用的uri列表(每行一个)。在消息能够成功发送到工具之前，至少要注册一个。';
$string['register'] = '注册';
$string['register_warning'] = '注册页面似乎需要一段时间才能打开。如果没有显示，请检查您在配置设置中输入的URL是否正确。如果Moodle正在使用https，请确保您正在配置的工具支持https，并且在URL中使用https。';
$string['registertype'] = '配置一个新的外部工具注册';
$string['registration_options'] = '注册选项';
$string['registrationname'] = '工具提供商名称';
$string['registrationname_help'] = '输入要注册的工具提供商的名称。';
$string['registrationurl'] = '注册URL';
$string['registrationurl_help'] = '注册URL应该作为发送注册请求的位置从工具提供商中可用。';
$string['reject'] = '拒绝';
$string['rejected'] = '已拒绝';
$string['resource'] = '资源';
$string['resourcekey'] = '使用者密匙';
$string['resourcekey_admin'] = '使用者密匙';
$string['resourcekey_admin_help'] = '使用者密匙可以被看作是用来授权访问工具的一个用户名。 它可以由工具用来唯一识别 Moodle 站点，通过 Moodle 站点，用户可以使用这种工具 用户密匙必须由工具提供。获得用户密匙的方法会随着工具 的不同而不同。 它可以是一个自动的过程，或者它可能需要和工具之间进行对话。 不需要来自 Moodle 的保密通信以及不提供附加的服务（例如成绩报告）的工具可能不需要一个资源密匙。';
$string['resourcekey_help'] = '对于预配置的工具，这里不需要输入资源密钥，因为使用者密钥将作为配置过程的一部分提供。如果创建到尚未配置的工具提供程序的链接，则应输入此字段。如果在本课程中不止一次使用工具提供程序，添加课程工具配置是一个好主意。使用者密钥可以看作是用于对该工具的访问进行身份验证的用户名。工具提供者可以使用它来唯一地标识用户从哪个Moodle站点启动该工具。使用者密钥必须由工具提供程序提供。获取使用者密钥的方法因工具提供商的不同而不同。它可能是一个自动化的过程，也可能需要与工具提供者进行对话。不需要与Moodle进行安全通信且不提供其他服务(如成绩报告)的工具可能不需要资源密钥。';
$string['resourceurl'] = '资源 URL';
$string['return_to_course'] = '点击<a href="{$a->link}" target="_top">这里</a>返回课程。';
$string['saveallfeedback'] = '保存我所有的反馈';
$string['search:activity'] = '外部工具-活动信息';
$string['secure_icon_url'] = '安全图标 URL';
$string['secure_icon_url_help'] = '类似于icon URL，但在通过SSL安全访问站点时使用。此字段用于防止浏览器显示关于不安全图像的警告。';
$string['secure_launch_url'] = '安全工具URL';
$string['secure_launch_url_help'] = '类似于工具URL，但如果需要较高的安全性，则使用它代替工具URL。如果通过SSL访问Moodle站点，或者将工具配置设置为始终通过SSL启动，则Moodle将使用安全工具URL而不是工具URL。工具URL也可以设置为https地址，以强制通过SSL启动，此字段可以留空。';
$string['selectcontent'] = '选择内容';
$string['send'] = '发送';
$string['services'] = '服务';
$string['services_help'] = '选择您希望提供给工具提供商的那些服务。可以选择多个服务。';
$string['setupoptions'] = '设置选项';
$string['share_email'] = '和该工具分享启动者的邮箱';
$string['share_email_admin'] = '与工具共享启动者的电子邮件';
$string['share_email_admin_help'] = '指定启动该工具的用户的电子邮件地址是否将与工具提供程序共享。工具提供者可能需要启动器的电子邮件地址来区分用户在UI中的相同名称，或者根据工具中的操作向用户发送电子邮件。';
$string['share_email_help'] = '指定启动该工具的用户的电子邮件地址是否将与工具提供程序共享。工具提供者可能需要启动器的电子邮件地址来区分具有相同名称的用户，或者根据工具中的操作向用户发送电子邮件。注意，这个设置可能会在工具配置中被覆盖。';
$string['share_name'] = '使用此工具分享启动者的名字';
$string['share_name_admin'] = '与工具共享启动者的名字';
$string['share_name_admin_help'] = '指定启动工具的用户的全名是否应该与工具提供者共享。工具提供者可能需要启动者的名称来显示工具中有意义的信息。';
$string['share_name_help'] = '指定启动工具的用户的全名是否应该与工具提供者共享。工具提供者可能需要启动者的名称来显示工具中有意义的信息。注意，此设置可能在工具配置中被覆盖。';
$string['share_roster'] = '允许工具访问本课程的花名册';
$string['share_roster_admin'] = '工具可访问课程花名册';
$string['share_roster_admin_help'] = '指定该工具是否可以访问启动该工具的课程的注册用户列表。';
$string['share_roster_help'] = '指定该工具是否可以访问已注册本课程的用户列表。注意，此设置可能在工具配置中被覆盖。';
$string['show_in_course_activity_chooser'] = '作为一个预配置工具显示在活动选择器里';
$string['show_in_course_lti1'] = '工具配置使用';
$string['show_in_course_lti1_help'] = '此工具可在活动选择器中显示，供教师选择添加到课程中。或者，在向课程添加外部工具时，可以在预先配置的工具下拉菜单中显示它。另一个选项是，只有在向课程添加外部工具时输入准确的工具URL时，才使用工具配置。';
$string['show_in_course_lti2'] = '工具配置使用';
$string['show_in_course_lti2_help'] = '这个工具可以在活动选择器中显示，供老师选择添加到课程中，或者在向课程添加外部工具时，在预先配置的工具下拉菜单中显示。';
$string['show_in_course_no'] = '不显示；仅在输入匹配的工具URL时使用';
$string['show_in_course_preconfigured'] = '在添加外部工具时显示为预配置的工具';
$string['sitehost'] = '站点主机名';
$string['siteid'] = '站点 ID';
$string['size'] = '尺寸参数';
$string['submission'] = '提交';
$string['submissions'] = '提交';
$string['submissionsfor'] = '提交 {$a}';
$string['subplugintype_ltiresource'] = 'LTI服务资源';
$string['subplugintype_ltiresource_plural'] = 'LTI服务资源';
$string['subplugintype_ltiservice'] = 'LTI服务';
$string['subplugintype_ltiservice_plural'] = 'LTI服务';
$string['subplugintype_ltisource'] = 'LTI源';
$string['subplugintype_ltisource_plural'] = 'LTI源';
$string['successfullycreatedtooltype'] = '成功创建新工具!';
$string['successfullyfetchedtoolconfigurationfromcontent'] = '成功从所选内容获取工具配置。';
$string['toggle_debug_data'] = '切换调试数据';
$string['tool_config_not_found'] = '此URL未找到工具配置。';
$string['tool_settings'] = '工具设置';
$string['tooldescription'] = '工具描述';
$string['tooldescription_help'] = '将在活动列表中显示给教师的工具描述。这应该描述该工具的用途和功能，以及教师可能需要了解的任何其他信息。';
$string['tooldetailsaccesstokenurl'] = 'URL访问令牌';
$string['tooldetailsauthrequesturl'] = '身份验证请求URL';
$string['tooldetailsclientid'] = '客户端ID';
$string['tooldetailsdeploymentid'] = '部署ID';
$string['tooldetailsmailtosubject'] = 'LTI工具配置';
$string['tooldetailsmodalemail'] = '电子邮件';
$string['tooldetailsmodallink'] = '查看配置细节';
$string['tooldetailsmodaltitle'] = '工具配置细节';
$string['tooldetailsplatformid'] = '平台ID';
$string['tooldetailspublickeyseturl'] = '‎公钥集 URL‎';
$string['toolisbeingused'] = '这个工具被使用了{$a}次';
$string['toolisnotbeingused'] = '这个工具还没有被使用过';
$string['toolproxy'] = '外部工具注册';
$string['toolproxy_help'] = '外部工具注册允许Moodle站点管理员通过从支持LTI 2.0的工具提供商获得的工具代理来配置外部工具。由工具提供者提供的注册URL是启动流程所需的全部内容。在配置新注册时，将选择提供给工具提供者的功能和服务。本页列出的工具注册分为四类：** *已配置** -这些工具注册已经建立，但注册过程尚未开始。** *待定** -这些工具的注册过程已经开始，但尚未完成。打开并保存设置，将其移回“已配置”类别。** *已接受** -这些工具注册已获批准；工具代理中指定的资源将出现在预配置工具页面上，初始状态为“待定”。** *被拒绝** -这些工具注册是在注册过程中被拒绝的。打开并保存设置，将其移回“已配置”类别，以便重新启动注册过程。';
$string['toolproxyregistration'] = '外部工具注册';
$string['toolregistration'] = '外部工具注册';
$string['toolsetup'] = '外部工具配置';
$string['tooltypeadded'] = '已添加预配置工具';
$string['tooltypedeleted'] = '已删除预配置工具';
$string['tooltypenotdeleted'] = '无法删除预配置工具';
$string['tooltypes'] = '工具';
$string['tooltypeupdated'] = '已更新预配置工具';
$string['toolurl'] = '工具URL';
$string['toolurl_contentitemselectionrequest'] = '内容选择URL';
$string['toolurl_contentitemselectionrequest_help'] = '内容选择URL将用于从工具提供程序启动内容选择页面。如果为空，则使用工具URL';
$string['toolurl_help'] = '工具基地址用来和启动URL匹配，以确定使用正确的工具配置。http(s) 前缀可有可无。 此外，如果外部工具实例中未指定启动 URL，会使用此地址。 <table> <thead> <tr> <td> <b>基地址</b> </td> <td> <b>匹配</b> </td> </tr> </thead> <tbody> <tr> <td> tool.com </td> <td> tool.com, tool.com/quizzes, tool.com/quizzes/quiz.php?id=10, www.tool.com/quizzes </td> </tr> <tr> <td> www.tool.com/quizzes </td> <td> tool.com/quizzes, tool.com/quizzes/take.php?id=10, www.tool.com/quizzes </td> </tr> <tr> <td> quiz.tool.com </td> <td> quiz.tool.com, quiz.tool.com/take.php?id=10 </td> </tr> </tbody> </table> 如果同一个域名有两条不同的工具配置，那么会使用匹配度最高的。';
$string['toolurlplaceholder'] = '工具 URL...';
$string['typename'] = '工具名';
$string['typename_help'] = '工具名用来在 Moodle 中区分不同的工具。教师在向课程添加外部工具时会看到工具名。';
$string['types'] = '类型';
$string['unabletocreatetooltype'] = '无法创建工具';
$string['unabletofindtooltype'] = '找不到工具 {$a->id}';
$string['unknownstate'] = '未知状态';
$string['update'] = '更新';
$string['useraccountinformation'] = '用户账户信息';
$string['userpersonalinformation'] = '用户个人信息';
$string['using_tool_cartridge'] = '使用的工具盒';
$string['using_tool_configuration'] = '使用工具配置:';
$string['validurl'] = '一个正确的 URL 必须以 http(s):// 开头';
$string['viewsubmissions'] = '查看提交和评分屏幕';
