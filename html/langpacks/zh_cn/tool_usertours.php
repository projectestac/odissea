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
 * Strings for component 'tool_usertours', language 'zh_cn', version '3.11'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = '上面';
$string['actions'] = '动作';
$string['appliesto'] = '适用于';
$string['backdrop'] = '与背景一起显示';
$string['backdrop_help'] = '您可以使用背景来突出显示指向的页面部分。
注意：背景与页面的某些部分（如导航栏）不兼容';
$string['below'] = '下面';
$string['block'] = '板块';
$string['block_named'] = '版块命名为“{$a}”';
$string['cachedef_stepdata'] = '用户导览步骤列表';
$string['cachedef_tourdata'] = '在每个页面上获取的启用的用户导航信息列表';
$string['confirmstepremovalquestion'] = '您确定要删除此步骤吗？';
$string['confirmstepremovaltitle'] = '确认删除步骤';
$string['confirmtourremovalquestion'] = '您确定要删除此导览吗？';
$string['confirmtourremovaltitle'] = '确认删除导览';
$string['content'] = '内容';
$string['content_heading'] = '内容';
$string['cssselector'] = 'CSS选择器';
$string['defaultvalue'] = '默认 ({$a})';
$string['delay'] = '显示步骤前的延迟时间';
$string['delay_help'] = '您可以选择在显示步骤之前添加延迟。
此延迟以毫秒为单位。';
$string['description'] = '描述';
$string['done'] = '完成';
$string['duplicatetour'] = '复制导览';
$string['duplicatetour_name'] = '{$a}（副本）';
$string['editstep'] = '编辑“{$a}”';
$string['enabled'] = '启用';
$string['endtour'] = '结束教程';
$string['event_step_shown'] = '显示的步骤';
$string['event_tour_ended'] = '导览结束';
$string['event_tour_reset'] = '导览重置';
$string['event_tour_started'] = '导览开始';
$string['exporttour'] = '导出导览';
$string['filter_accessdate'] = '访问日期';
$string['filter_accessdate_enabled'] = '启用访问日期筛选器';
$string['filter_accessdate_enabled_help'] = '仅向新用户或最近访问过网站的用户显示导览。';
$string['filter_category'] = '类别';
$string['filter_category_help'] = '在与所选类别中的课程关联的页面上显示导览。';
$string['filter_course'] = '课程';
$string['filter_course_help'] = '在与所选课程关联的页面上显示导览。';
$string['filter_courseformat'] = '课程格式';
$string['filter_courseformat_help'] = '在与使用所选课程格式的课程关联的页面上显示导览。';
$string['filter_cssselector'] = 'CSS选择器';
$string['filter_cssselector_help'] = '仅当在页面上找到指定的CSS选择器时才显示导览。';
$string['filter_date_account_creation'] = '用户帐户创建日期在';
$string['filter_date_first_login'] = '用户的首次访问日期在';
$string['filter_date_last_login'] = '用户的最后访问日期在';
$string['filter_header'] = '导览过滤器';
$string['filter_help'] = '选择显示导览的条件。所有的过滤器必须匹配，才能向用户显示导览。';
$string['filter_role'] = '角色';
$string['filter_role_help'] = '在显示导览的环境中，一个导览可能被限制为具有选定角色的用户。例如，如果用户在课程中的角色是学生，那么将仪表板参观限制在学生角色的用户上是行不通的（通常是这样的）。控制面板导览只能限制给具有系统角色的用户。';
$string['filter_theme'] = '主题';
$string['filter_theme_help'] = '当用户使用其中一个选定主题时显示导览。';
$string['importtour'] = '导入导览';
$string['left'] = '左边';
$string['modifyshippedtourwarning'] = '这是Moodle附带的用户导览。你所做的任何修改都可能在下次站点升级时被覆盖。';
$string['movestepdown'] = '下移导览';
$string['movestepup'] = '创建新的导览';
$string['movetourdown'] = '下移导览';
$string['movetourup'] = '上移导览';
$string['name'] = '名称';
$string['newstep'] = '新步骤';
$string['newtour'] = '创建新的导览';
$string['next'] = '下一个';
$string['nextstep'] = '下一个';
$string['options_heading'] = '选项';
$string['orphan'] = '如果未找到目标，则显示';
$string['orphan_help'] = '如果在页面上找不到目标，则显示步骤。';
$string['pathmatch'] = '应用于URL匹配';
$string['pathmatch_help'] = '导览将显示在任何URL与此值匹配的页面上。

你可以用%字符作为通配符，来表示任何东西。
下面是一些示例：

* /my/% - 与仪表板相匹配。
* /course/view.php?id=2 - 匹配一个特定的课程
* /mod/forum/view.php% - 匹配论坛讨论列表
* /user/profile.php% - 匹配用户配置文件页面

如果你希望在网站首页显示导览，你可以使用这个值："FRONTPAGE"。';
$string['pausetour'] = '暂停';
$string['placement'] = '放置';
$string['placement_help'] = '步骤可以放在目标的上方、下方、左边或右边。建议放在上方或下方，因为这些位置在移动端的显示效果更好。

如果该步骤不适合在特定页面的指定位置，它将被自动放在其他地方。';
$string['pluginname'] = '用户导航';
$string['previousstep'] = '上一个';
$string['privacy:metadata:preference:completed'] = '用户最后一次完成用户导览的时间。';
$string['privacy:metadata:preference:requested'] = '用户最后一次手动申请用户导览的时间。';
$string['privacy:request:preference:completed'] = '您最后一次将"{$a->name}"用户的导览标记为完成，时间是{$a->time}。';
$string['privacy:request:preference:requested'] = '您最后一次请求"{$a->name}"用户导览是在{$a->time}。';
$string['reflex'] = '点击继续';
$string['reflex_help'] = '单击目标后，进入下一步。';
$string['resettouronpage'] = '在这个页面上重新开始用户导航';
$string['resumetour'] = '恢复';
$string['right'] = '正确的';
$string['select_block'] = '选择一个板块';
$string['selector_defaulttitle'] = '输入描述性标题';
$string['selectordisplayname'] = '匹配“{$A}”的CSS选择器';
$string['selecttype'] = '选择步骤类型';
$string['sharedtourslink'] = '导览资源库';
$string['skip'] = '跳过';
$string['target'] = '目标';
$string['target_block'] = '板块';
$string['target_heading'] = '步骤目标';
$string['target_selector'] = '选择器';
$string['target_selector_targetvalue'] = 'CSS选择器';
$string['target_selector_targetvalue_help'] = 'CSS选择器可以用于指向页面上的几乎任何元素。使用web浏览器的开发人员工具可以轻松找到合适的选择器。';
$string['target_unattached'] = '显示在页面中间';
$string['targettype'] = '目标类型';
$string['targettype_help'] = '每个步骤都与页面的一个部分相关联--目标。目标类型包括：

* 板块 - 用于显示指定板块旁边的步骤
* CSS选择器 - 用于使用CSS精确定义目标区域
* 显示在页面中间 - 用于不需要与页面的特定部分相关联的步骤';
$string['title'] = '标题';
$string['title_help'] = '可以用纯文本添加步骤的标题，如果需要的话，可以用多语言标签括起来（用于多语言内容过滤器）。

另外，语言字符串ID可以以标识符、组件的格式输入（逗号后没有括号或空格）。';
$string['tour1_content_addingblocks'] = '事实上，请仔细考虑是否在您的页面上加入任何块。块在Moodle应用程序中是不显示的，因此作为一般规则，最好确保您的网站在没有任何块的情况下也能运行良好。';
$string['tour1_content_blockregion'] = '这里还有一个板块区域。我们建议完全删除导航和管理板块，因为所有功能都在Boost主题的其他地方。';
$string['tour1_content_customisation'] = '要自定义站点和首页的外观，请使用此标题角落中的设置菜单。尝试现在就打开编辑功能。';
$string['tour1_content_end'] = '您的用户导览到这里结束。除非使用页尾中的链接重置它，否则它不会再次显示。作为一名管理员，你也可以像这样创建自己的教程！';
$string['tour1_content_navigation'] = '主要导航功能现在通过导航抽屉实现。内容会根据您在站点中的位置进行更新。使用顶部的按钮隐藏或显示它。';
$string['tour1_content_welcome'] = '欢迎来到Boost主题。如果您是从早期版本升级的，您可能会发现此主题的某些内容看起来有些不同。';
$string['tour1_title_addingblocks'] = '添加板块';
$string['tour1_title_blockregion'] = '板块区域';
$string['tour1_title_customisation'] = '定制';
$string['tour1_title_end'] = '导览结束';
$string['tour1_title_navigation'] = '导航';
$string['tour1_title_welcome'] = '欢迎';
$string['tour2_content_addblock'] = '如果打开编辑功能，您可以从导航抽屉里添加块。但是，请仔细考虑是否在您的页面上加入任何块。块在Moodle应用程序中是不显示的，所以为了获得最好的用户体验，最好确保您的课程在没有任何块的情况下也能运行良好。';
$string['tour2_content_addingblocks'] = '您可以使用此按钮在页面添加块。但是，请仔细考虑是否在您的页面上加入任何块。块在Moodle应用程序中是不显示的，所以为了获得最好的用户体验，最好确保您的课程在没有任何块的情况下也能运行良好。';
$string['tour2_content_customisation'] = '要更改任何课程设置，请使用此标题角落中的设置菜单，你也可以在每个活动的主页上找到类似的设置菜单。尝试现在就打开编辑功能。';
$string['tour2_content_end'] = '您的用户导览到这里结束。除非使用页尾中的链接重置它，否则它不会再次显示。如果需要，站点管理员还可以为此站点创建更多的导览。';
$string['tour2_content_navigation'] = '导航功能通过这个导航抽屉实现。使用顶部的按钮隐藏或显示它。您可以在这里看到课程各节的链接。';
$string['tour2_content_opendrawer'] = '现在试着打开导航抽屉。';
$string['tour2_content_participants'] = '在此处查看参与课程的人员。这也是添加或移除学生的地方。';
$string['tour2_content_welcome'] = '欢迎来到Boost主题。如果您的站点已从早期版本升级，您可能会发现课程页面上的内容看起来有些不同。';
$string['tour2_title_addblock'] = '添加一个板块';
$string['tour2_title_addingblocks'] = '添加板块';
$string['tour2_title_customisation'] = '定制';
$string['tour2_title_end'] = '导览结束';
$string['tour2_title_navigation'] = '导航';
$string['tour2_title_opendrawer'] = '打开导航抽屉';
$string['tour2_title_participants'] = '参与课程的人员';
$string['tour2_title_welcome'] = '欢迎';
$string['tour3_content_dashboard'] = '您的新控制面板有许多功能，可以帮助您轻松获得对您最重要的信息。';
$string['tour3_content_displayoptions'] = '课程可以按课程名称、课程简称或最后访问日期进行排序。

你还可以选择以列表的形式显示课程，并提供摘要信息，或采用默认的 "卡片 "视图。';
$string['tour3_content_overview'] = '课程概览板块显示您注册的所有课程。

您可以选择显示当前正在进行的课程，或过去或未来的课程，或您标注星号的课程。';
$string['tour3_content_recentcourses'] = '最近访问的课程块显示您上次访问的课程，允许您直接返回。';
$string['tour3_content_starring'] = '您可以选择为一门课程标注星号，使其突出显示，或者隐藏一门对您不再重要的课程。

这些操作只会影响您的视图。

您还可以选择以“列表”、“摘要”或默认的“卡片”视图显示课程。';
$string['tour3_content_timeline'] = '时间线板块显示您即将发生的重要事件。

您可以选择显示下周、一个月或更远的未来的活动。

您还可以显示逾期的项目。';
$string['tour3_title_dashboard'] = '您的控制面板';
$string['tour3_title_displayoptions'] = '显示选项';
$string['tour3_title_overview'] = '课程概览';
$string['tour3_title_recentcourses'] = '最近访问的课程';
$string['tour3_title_starring'] = '标星和隐藏课程';
$string['tour3_title_timeline'] = '时间线板块';
$string['tour4_content_groupconvo'] = '如果您是启用了群组消息的群组成员，您会在这里看到群组对话。

课程组对话允许您们在一个私密和方便的地方与小组中的其他人互动。';
$string['tour4_content_icon'] = '你可以使用这个图标从任何页面访问你的消息。

如果你有未读消息，未读消息的数量也会显示在这里。

点击图标，打开信息传递抽屉并继续浏览。';
$string['tour4_content_messaging'] = '新的消息传递功能包括课程内的群组消息传递，以及更好地控制谁可以向您发送消息。';
$string['tour4_content_settings'] = '您可以通过齿轮图标访问您的消息设置。新的隐私设置允许您限制谁可以给您发消息。';
$string['tour4_content_starred'] = '您可以选择给特定的对话标星，使它们更容易被找到。';
$string['tour4_title_groupconvo'] = '群组消息';
$string['tour4_title_icon'] = '消息传递';
$string['tour4_title_messaging'] = '新的消息传递接口';
$string['tour4_title_settings'] = '信息传递设置';
$string['tour4_title_starred'] = '带星号标记的';
$string['tour_activityinfo_activity_student_content'] = '活动页面上显示活动日期以及完成活动的方法。';
$string['tour_activityinfo_activity_student_title'] = '新增：活动信息';
$string['tour_activityinfo_activity_teacher_content'] = '现在，每个活动页面（也可选择在课程页面上）为学生显示活动日期和完成条件。

对于需要学生手动将活动标记为已完成的活动，活动页面上会显示“标记为已完成”按钮。';
$string['tour_activityinfo_activity_teacher_title'] = '新增：活动信息';
$string['tour_activityinfo_course_student_content'] = '活动日期和/或完成活动的方法显示在课程页面上。';
$string['tour_activityinfo_course_student_title'] = '新增：活动信息';
$string['tour_activityinfo_course_teacher_content'] = '新的课程设置 "显示完成条件 "和 "显示活动日期 "使您能够选择是否在课程页面上为学生显示活动完成条件（如果设置）和/或日期。';
$string['tour_activityinfo_course_teacher_title'] = '新增：活动信息';
$string['tour_final_step_content'] = '您的用户导览已结束。除非使用页脚中的链接重置它，否则它不会再次显示。';
$string['tour_final_step_title'] = '导览结束';
$string['tour_resetforall'] = '导览状态已重置，所有用户可见。';
$string['tourconfig'] = '要导入的导览配置文件';
$string['tourisenabled'] = '导览已启用';
$string['tourlist_explanation'] = '您可以根据您的喜好创建尽可能多的导航，并为Moodle的不同部分提供支持。每一页只能创建一个导航。';
$string['tours'] = '导航';
$string['usertours'] = '用户导航';
$string['usertours:managetours'] = '创建、编辑和删除用户导航';
$string['viewtour_edit'] = '您可以<a href=“{$a->editlink}”>编辑导览默认值</a>和<a href=“{$a->resetlink}”>强制显示导览</a>给所有用户。。';
$string['viewtour_info'] = '这是 \'{$a->tourname}\' 导航。它适用于 \'{$a->path}\'。';
