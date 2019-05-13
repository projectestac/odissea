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
 * Strings for component 'lti', language 'zh_cn', branch 'MOODLE_34_STABLE'
 *
 * @package   lti
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = '接受';
$string['accept_grades'] = '接受此工具的成绩';
$string['accept_grades_admin'] = '接受此工具的成绩';
$string['action'] = '动作';
$string['active'] = '激活';
$string['activity'] = '活动';
$string['addserver'] = '添加新的可信服务器';
$string['addtype'] = '添加外部工具配置';
$string['allow'] = '允许';
$string['allowsetting'] = '允许此工具在Moodle中储存8K的设置';
$string['always'] = '总是';
$string['automatic'] = '根据工具url，自动选择';
$string['baseurl'] = '基础网页地址 / 工具注册名称';
$string['basiclti'] = 'LTI';
$string['basicltiactivities'] = 'LTI 活动';
$string['basicltifieldset'] = '定制用力控件组';
$string['basiclti_in_new_window'] = '在的活动已在新窗口打开';
$string['basicltiintro'] = '活动描述';
$string['basicltiname'] = '活动名称';
$string['basiclti_parameters'] = 'LTI 启动参数';
$string['cancel'] = '取消';
$string['cancelled'] = '已取消';
$string['cannot_delete'] = '您不能删除这个工具的配置。';
$string['cannot_edit'] = '您不能编辑这个工具的配置。';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">点击继续</a>';
$string['comment'] = '评论';
$string['configpassword'] = '默认的远程工具密码';
$string['configpreferheight'] = '默认偏好高度';
$string['configpreferwidget'] = '将小工具设置为默认启动';
$string['configpreferwidth'] = '默认偏好宽度';
$string['configresourceurl'] = '默认的资源URL';
$string['configtypes'] = '激活 LTI 应用';
$string['contentitem_help'] = '如果勾选，在添加外部工具的时候，“选择内容”一项将有效。';
$string['courseid'] = '课程编号';
$string['coursemisconf'] = '课程配置错误';
$string['course_tool_types'] = '课程工具的类型';
$string['createdon'] = '创建于';
$string['curllibrarymissing'] = '要使用 LTI 必须安装 PHP Curl 库';
$string['custom'] = '定制参数';
$string['custom_config'] = '使用定制的工具配置。';
$string['custom_help'] = '自定义参数是工具提供者使用的设置。例如，可以使用自定义参数来显示来自提供者的特定资源。每个参数都应该使用“name=value”的格式在单独的行中输入;例如,“章= 3”。除非由工具提供者指导，否则保持该字段不变是安全的。';
$string['custominstr'] = '自定义参数';
$string['debuglaunch'] = '调试选项';
$string['debuglaunchoff'] = '以普通模式启动';
$string['debuglaunchon'] = '以调试模式启动';
$string['default'] = '默认';
$string['default_launch_container'] = '默认启动容器';
$string['delete'] = '删除';
$string['delete_confirmation'] = '您确定要删掉这个外部工具的配置吗？';
$string['deletetype'] = '删除外部工具配置';
$string['display_description'] = '启动后显示活动描述';
$string['display_description_help'] = '如果启用，上面设定的活动描述会显示在工具的内容上面。

此描述可以用来提供工具未提供的各种说明，不过这不是必须的。

如果工具是在新窗口中启动，则永远不会显示描述。';
$string['display_name'] = '启动后显示活动名';
$string['display_name_help'] = '如果启用，上面设定的活动名会显示在工具的内容上面。

工具提供商也有可能会显示活动名。此选项可以避免活动名被显示两次。

如果工具是在新窗口中启动，则永远不会显示活动名。';
$string['donot'] = '不发送';
$string['donotaccept'] = '不接受';
$string['donotallow'] = '不允许';
$string['edittype'] = '编辑外部工具配置';
$string['embed'] = '嵌入';
$string['embed_no_blocks'] = '嵌入，不使用版块';
$string['enableemailnotification'] = '发送通知邮件';
$string['enableemailnotification_help'] = '如果激活，当学生的提交打分后，他们会收到邮件通知。';
$string['external_tool_type'] = '外部工具类型';
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
$string['external_tool_types'] = '外部工具类型';
$string['failedtoconnect'] = 'Moodle无法与“{$a}”系统通讯';
$string['filter_basiclti_configlink'] = '配置您首选的站点以及他们的密码';
$string['filter_basiclti_password'] = '必须输入密码';
$string['filterconfig'] = 'LTI 管理';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = '对错误配置的实例使用一个已经存在的配置';
$string['fixnew'] = '新的配置';
$string['fixnewconf'] = '对错误配置的实例定义一个新的配置';
$string['fixold'] = '使用现有的';
$string['forced_help'] = '该项设置已经在一个课程或者站点级别配置中强制生效。您在本界面中不能改变它。';
$string['force_ssl'] = '强制使用 SSL';
$string['global_tool_types'] = '全局工具类型';
$string['icon_url'] = '图标的网址';
$string['id'] = 'id号';
$string['indicator:cognitivedepth'] = 'LTI 活动认知深度';
$string['indicator:cognitivedepth_help'] = '这个指标是基于学生在 LTI活动中所达到的认知深度。';
$string['indicator:socialbreadth'] = 'LTI活动社会宽度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在LTI活动中所达到的社会宽度。';
$string['invalidid'] = 'LTI ID 不正确';
$string['launch_in_moodle'] = '在 moodle 中启动工具';
$string['launchinpopup'] = '启动容器';
$string['launch_in_popup'] = '在弹出窗口中启动工具';
$string['launchoptions'] = '启动选项';
$string['launch_url'] = '启动 URL';
$string['lti'] = 'LTI';
$string['lti_errormsg'] = '该工具返回了如下的错误信息：“{$a}”';
$string['lti_launch_error'] = '启用该外部工具时发生了一个错误：';
$string['lti_launch_error_tool_request'] = '<p>
为了提交一个使管理员完成工具配置的请求，点击<a href="{$a->admin_request_url}" target="_top">这里</a>。
</p>';
$string['lti:requesttooladd'] = '向管理员提交一个工具进行配置';
$string['main_admin'] = '通用帮助';
$string['miscellaneous'] = '混杂的';
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
$string['modulenameplural'] = '基本 lti';
$string['modulenamepluralformatted'] = 'LTI 实例';
$string['never'] = '从不';
$string['new_window'] = '新窗口';
$string['noattempts'] = '对该工具实例没有做任何尝试';
$string['no_lti_configured'] = '没有活动的外部工具配置。';
$string['no_lti_pending'] = '没有未决的外部工具';
$string['no_lti_rejected'] = '没有被拒绝的外部工具';
$string['noltis'] = '没有 lti 实例';
$string['noservers'] = '没有找到服务器';
$string['notypes'] = '目前在 Moodle 中没有 LTI 工具设置。点击上方的安装按钮去添加一些。';
$string['noviewusers'] = '没有找到拥有使用该工具权限的用户';
$string['optionalsettings'] = '可选设置';
$string['organization'] = '机构详情';
$string['organizationdescr'] = '组织描述';
$string['organizationid'] = '机构 ID';
$string['organizationurl'] = '机构 URL';
$string['organizationurl_help'] = 'Moodle 实例的基本 URL 。

如果该区域被留空，那么根据站点的配置，一个默认值将会被使用。';
$string['pagesize'] = '每页展示提交';
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
$string['pending'] = '待决';
$string['pluginadministration'] = 'LTI 管理';
$string['pluginname'] = 'LTI';
$string['preferheight'] = '首选高度';
$string['preferwidth'] = '首选宽度';
$string['press_to_submit'] = '点击以启动此活动';
$string['privacy'] = '隐私';
$string['quickgrade'] = '允许快速评分';
$string['reject'] = '拒绝';
$string['rejected'] = '被拒绝';
$string['resource'] = '资源';
$string['resourcekey'] = '用户密匙';
$string['resourcekey_admin'] = '用户密匙';
$string['resourcekey_admin_help'] = '用户密匙可以被看作是用来授权访问工具的一个用户名。
它可以由工具用来唯一识别 Moodle 站点，通过 Moodle 站点，用户可以使用这种工具

用户密匙必须由工具提供。获得用户密匙的方法会随着工具
的不同而不同。
它可以是一个自动的过程，或者它可能需要和工具之间进行对话。

不需要来自 Moodle 的保密通信以及不提供附加的服务（例如成绩报告）的工具可能不需要一个资源密匙。';
$string['resourceurl'] = '资源 URL';
$string['return_to_course'] = '点击<a href="{$a->link}" target="_top">这里</a>返回课程。';
$string['saveallfeedback'] = '保存我所有的反馈';
$string['secure_icon_url'] = '安全图标 URL';
$string['secure_launch_url'] = '安全开始 URL';
$string['selectcontent'] = '选择内容';
$string['send'] = '发送';
$string['services'] = '服务';
$string['setupoptions'] = '设置选项';
$string['share_email'] = '和该工具分享启动者的邮箱';
$string['share_email_admin'] = '使用工具分享启动者的名字';
$string['share_email_admin_help'] = '指定启动该工具的用户的电子邮件地址是否将与工具提供程序共享。工具提供者可能需要启动器的电子邮件地址来区分用户在UI中的相同名称，或者根据工具中的操作向用户发送电子邮件。';
$string['share_email_help'] = '指定启动该工具的用户的电子邮件地址是否将与工具提供程序共享。工具提供者可能需要启动器的电子邮件地址来区分具有相同名称的用户，或者根据工具中的操作向用户发送电子邮件。注意，这个设置可能会在工具配置中被覆盖。';
$string['share_name'] = '使用此工具分享启动者的名字';
$string['share_name_admin'] = '使用工具分享启动者的名字';
$string['submissions'] = '提交';
$string['tool_config_not_found'] = '找不到该URL的工具配置';
$string['tooldescription'] = '工具描述';
$string['tool_settings'] = '工具设置';
$string['toolsetup'] = '外部工具配置';
$string['toolurl'] = '工具基地址';
$string['toolurl_help'] = '工具基地址用来和启动 URL 匹配，以确定使用正确的工具配置。http(s) 前缀可有可无。

此外，如果外部工具实例中未指定启动 URL，会使用此基地址。

<table>
    <thead>
        <tr>
            <td>
                <b>基地址</b>
            </td>
            <td>
                <b>匹配</b>
            </td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                tool.com
            </td>
            <td>
                tool.com, tool.com/quizzes, tool.com/quizzes/quiz.php?id=10, www.tool.com/quizzes
            </td>
        </tr>
        <tr>
            <td>
                www.tool.com/quizzes
            </td>
            <td>
                tool.com/quizzes, tool.com/quizzes/take.php?id=10, www.tool.com/quizzes
            </td>
        </tr>
        <tr>
            <td>
                quiz.tool.com
            </td>
            <td>
                quiz.tool.com, quiz.tool.com/take.php?id=10
            </td>
        </tr>
    </tbody>
</table>

如果同一个域名有两条不同的工具配置，那么会使用匹配度最高的。';
$string['typename'] = '工具名';
$string['typename_help'] = '工具名用来在 Moodle 中区分不同的工具。教师在向课程添加外部工具时会看到工具名。';
$string['types'] = '类型';
$string['update'] = '更新';
$string['validurl'] = '一个正确的 URL 必须以 http(s):// 开头';
