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
 * Strings for component 'apply', language 'zh_cn', version '4.4'.
 *
 * @package     apply
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept_entry'] = '接受';
$string['acked_accept'] = '接受';
$string['acked_notyet'] = '还没';
$string['acked_reject'] = '拒绝';
$string['add_item'] = '将条目项目添加到活动';
$string['add_items'] = '将条目项目添加到活动';
$string['add_pagebreak'] = '添加依赖的分页符';
$string['adjustment'] = '调整';
$string['apply:addinstance'] = '添加新应用程序';
$string['apply:applies'] = '发布应用程序';
$string['apply:createprivatetemplate'] = '创建私有模板';
$string['apply:createpublictemplate'] = '创建公共模板';
$string['apply:deletesubmissions'] = '删除提交内容';
$string['apply:deletetemplate'] = '删除模板';
$string['apply:edititems'] = '编辑项目';
$string['apply:edittemplates'] = '编辑模板';
$string['apply:mapcourse'] = '将课程映射到全局应用程序';
$string['apply:operatesubmit'] = '入口操作';
$string['apply:preview'] = '预览';
$string['apply:preview_submit'] = '提交屏幕预览';
$string['apply:receivemail'] = '接收电子邮件通知';
$string['apply:submit'] = '提交条目';
$string['apply:view'] = '查看申请';
$string['apply:viewanalysepage'] = '提交后查看分析页面';
$string['apply:viewentries'] = '条目列表';
$string['apply:viewreports'] = '查看报告';
$string['apply_is_already_submitted'] = '申请已提交';
$string['apply_is_closed'] = '申请已经关闭';
$string['apply_is_disable'] = '您不能使用此申请。';
$string['apply_is_not_open'] = '申请尚未打开';
$string['apply_is_not_ready'] = '申请尚未就绪。请先编辑项目。';
$string['apply_options'] = '申请选项';
$string['average'] = '平均的';
$string['back_button'] = '后退';
$string['before_apply'] = '在提交前';
$string['can_discard'] = '可以放弃';
$string['can_discard_help'] = '启用取消申请。';
$string['cancel_entry'] = '取消';
$string['cancel_entry_button'] = '取消';
$string['cancel_moving'] = '取消移动';
$string['cannot_save_templ'] = '不允许保存模板';
$string['captcha'] = '验证码';
$string['check'] = '复选框';
$string['checkbox'] = '复选框';
$string['class_cancel'] = '取消';
$string['class_draft'] = '草稿';
$string['class_newpost'] = '新建职位';
$string['class_update'] = '更新';
$string['confirm_cancel_entry'] = '是否确实要取消此条目？';
$string['confirm_delete_entry'] = '是否确实要撤消此条目？';
$string['confirm_delete_item'] = '你确定要删除这个元素吗？';
$string['confirm_delete_submit'] = '你确定要删除这个应用吗？';
$string['confirm_delete_template'] = '你确定要删除这个模板吗？';
$string['confirm_rollback_entry'] = '是否确实要撤消此条目？';
$string['confirm_use_template'] = '你确定要使用这个模板';
$string['count_of_nums'] = '数字计数';
$string['creating_templates'] = '将题目保存成模板';
$string['date_format'] = '日期（时间）显示格式';
$string['date_format_help'] = '指定日期和时间的显示格式。默认值为%m/%d/%y %H:%m';
$string['delete_entry'] = '撤回';
$string['delete_entry_button'] = '撤回';
$string['delete_item'] = '删除项目';
$string['delete_submit'] = '删除申请';
$string['delete_template'] = '删除模板';
$string['delete_templates'] = '删除模板';
$string['depending'] = '依赖项';
$string['depending_help'] = '可以根据另一个项目的值显示项目。<br />
<strong>这里是一个例子</strong><br />
<ul>
<li>首先，创建另一个项目将依赖的项目。</li>
<li>接下来，为依赖项目添加一个分页符。</li>
<li>然后根据之前创建的项目值添加项目。从标记为“依赖项”的列表中选择项目，并在标记为“依赖值”的文本框中写入所需的值。</li>
</ul>
<strong>项目结构应如下所示。</strong>
<ol>
<li>Item Q: Do you have a car? A: yes/no</li>
<li>Pagebreak for depending</li>
<li>Item Q: What colour is your car?<br />
（此项目取决于项目1，value=yes）</li>
<li>Item Q: Why don\'t you have a car?<br />
(此项目取决于项目1， value = no)</li>
<li> ... 其它项目</li>
</ol>';
$string['dependitem'] = '依赖项目';
$string['dependvalue'] = '依赖值';
$string['description'] = '描述';
$string['display_button'] = '显示';
$string['do_not_analyse_empty_submits'] = '不分析空提交';
$string['downloadexcel'] = '以Excel下载';
$string['downloadtext'] = '以 Text 下载';
$string['dropdown'] = '下拉列表';
$string['edit_entry'] = '编辑';
$string['edit_entry_button'] = '编辑';
$string['edit_item'] = '编辑问题';
$string['edit_items'] = '编辑项目';
$string['email_confirm_html'] = ': <i>\'{$a->apply}\'</i><br /><br /> 你可以点击 <a href="{$a->url}">这里</a>查看它。';
$string['email_confirm_text'] = ': \'{$a->apply}\'

你可以在这里查看它:
{$a->url}';
$string['email_entry'] = '向申请人发送电子邮件';
$string['email_noreply'] = '此电子邮件是自动发送的。请不要回复此电子邮件。';
$string['email_notification'] = '向管理员发送电子邮件通知';
$string['email_notification_help'] = '如果启用，管理员将收到申请提交的电子邮件通知。';
$string['email_notification_user'] = '向申请人发送电子邮件通知';
$string['email_notification_user_help'] = '如果启用，管理员可以向申请人发送申请流程的电子邮件。';
$string['email_teacher'] = '{$a->username} 已提交申请活动';
$string['email_user_accept'] = '您的申请已被接受';
$string['email_user_done'] = '您正在处理的申请已完成';
$string['email_user_other'] = '管理员已处理您的申请';
$string['email_user_reject'] = '你的申请被拒绝';
$string['enable_deletemode'] = '删除模式';
$string['enable_deletemode_help'] = '这使教师能够删除所有申请<br/>为了安全起见，通常请设置为“否”。';
$string['entries_list_title'] = '条目列表';
$string['entry_saved'] = '您的申请已保存。非常感谢。';
$string['entry_saved_draft'] = '您的申请已保存为<strong>草稿</strong>。';
$string['entry_saved_operation'] = '您的请求已被处理。';
$string['execd_done'] = '完成';
$string['execd_entry'] = '完成';
$string['execd_notyet'] = '还没有';
$string['exist'] = '存在';
$string['export'] = '导出';
$string['export_templates'] = '导出模板';
$string['firstlastname'] = '名 姓';
$string['fixedtitle'] = '固定标题';
$string['hide_no_select_option'] = '隐藏“未选择”选项';
$string['horizontal'] = '水平的';
$string['import_templates'] = '水平的';
$string['info'] = '信息';
$string['infotype'] = '信息类型';
$string['item_label'] = '标签';
$string['item_label_help'] = '特殊标签<br />
<ul>
<li><strong>提交标题</strong>
<ul><li>当此标签附加到文本字段（短文本答案）时，它将被视为应用程序的标题.</li></ul>
</li>
<li><strong>仅提交</strong>
<ul><li>这是仅在申请时显示的项目。这用于使用许可等。</li></ul>
</li>
<li><strong>管理员回复</strong>
<ul><li>虽然在申请时未显示在用户上，但它显示在申请之后。
由于管理员可以编辑，因此这用于管理员的评论等。</li></ul>
</li>
<li><strong>仅管理员</strong>
<ul><li>这是一个只能向管理员显示并且只能由管理员编辑的项目。
用于管理员备忘录等。</li></ul>
</li>
</ul>';
$string['item_name'] = '项目名称';
$string['item_style'] = '项目样式';
$string['item_style_help'] = '项目的样式。默认值为（）';
$string['items_are_required'] = '带星号的项目是必须要回答。';
$string['label'] = '标签';
$string['lastfirstname'] = '姓 名';
$string['maximal'] = '最大';
$string['messageprovider:message'] = '消息';
$string['messageprovider:processed'] = '已处理操作';
$string['messageprovider:submission'] = '入口操作';
$string['modulename'] = '申请表单';
$string['modulename_help'] = '您可以制作简单的申请表并让用户提交。';
$string['modulenameplural'] = '申请表单';
$string['move_here'] = '移动到此';
$string['move_item'] = '移动这个问题';
$string['movedown_item'] = '向下移动问题';
$string['moveup_item'] = '向上移动问题';
$string['multichoice'] = '多项选择';
$string['multichoice_values'] = '多项选择值';
$string['multichoicerated'] = '多项选择（分级）';
$string['multichoicetype'] = '多项选择类型';
$string['multiple_submit'] = '多次提交';
$string['multiple_submit_help'] = '如果启用匿名调查，用户可以无限次提交申请。';
$string['name'] = '名称';
$string['name_required'] = '名称必须';
$string['nested_table'] = '表格已嵌套！';
$string['next_page_button'] = '下一页';
$string['no_itemlabel'] = '没有标签';
$string['no_itemname'] = '未找到任何项目';
$string['no_items_available_yet'] = '尚未设置任何问题';
$string['no_settings_captcha'] = '无法编辑验证码设置。';
$string['no_submit_data'] = '数据不存在';
$string['no_table'] = '表格未启动！';
$string['no_templates_available_yet'] = '没有可用模板';
$string['no_title'] = '没有标题';
$string['not_close_table'] = '表格已经关闭';
$string['not_exist'] = '不存在';
$string['not_selected'] = '末选中';
$string['numeric'] = '回答数量';
$string['numeric_range_from'] = '从';
$string['numeric_range_to'] = '到';
$string['only_acked_accept'] = '仅接收';
$string['only_acked_accept_help'] = '启用仅接受接收。指定不需要处理的时间。';
$string['only_one_captcha_allowed'] = '应用中只允许使用一个验证码';
$string['operate_is_disable'] = '您不能使用此操作';
$string['operate_submit'] = '操作';
$string['operate_submit_button'] = '过程';
$string['operation_error_execd'] = '如果不接受输入，则不能选中“完成”';
$string['outside_style'] = '项目的边框样式';
$string['outside_style_help'] = '项目周围边框的样式。此设置在表中被忽略。默认值为（border: 0px solid）';
$string['overview'] = '概览并提交';
$string['pagebreak'] = '依赖的分页符';
$string['pagebreak_style'] = '分页符行的样式';
$string['pagebreak_style_help'] = '分页符行的样式（&lt；hr/&gt；）。默认值为（1px solid）。如果为空，则不会在打印屏幕上绘制线条。分页符行不会显示在提交屏幕和提交屏幕的预览上。';
$string['pagebreak_title'] = '打印分页符';
$string['pluginadministration'] = '申请管理';
$string['pluginname'] = '申请表单';
$string['position'] = '位置';
$string['preview'] = '预览';
$string['preview_help'] = '在预览中，您可以更改问题的顺序。';
$string['previous_apply'] = '上一个提交';
$string['previous_page_button'] = '上一页';
$string['printpagebreak'] = '添加分页符以进行打印';
$string['public'] = '公开';
$string['radio'] = '单选按钮';
$string['radiobutton'] = '单选按钮';
$string['radiobutton_rated'] = '单选按钮（额定）';
$string['radiorated'] = '单选按钮（额定）';
$string['reject_entry'] = '拒绝';
$string['related_items_deleted'] = '您的用户对此问题的所有回答也将被删除';
$string['required'] = '必需的';
$string['resetting_data'] = '重置申请响应';
$string['responsetime'] = '响应时间';
$string['returnto_course'] = '返回';
$string['rollback_entry'] = '提取';
$string['rollback_entry_button'] = '提取';
$string['save_as_new_item'] = '保存成问题';
$string['save_as_new_template'] = '保存成新模板';
$string['save_draft_button'] = '保存成草稿';
$string['save_entry_button'] = '提交';
$string['save_item'] = '保存项目';
$string['saving_failed'] = '保存失败';
$string['saving_failed_because_missing_or_false_values'] = '由于缺少值或值为false，保存失败。';
$string['show_all'] = '显示所有{$a}';
$string['show_perpage'] = '每页显示{$a}';
$string['start'] = '开始';
$string['started'] = '已开始';
$string['stop'] = '结束';
$string['subject'] = '订阅';
$string['submit_form_button'] = '新申请';
$string['submit_new_apply'] = '提交一个新申请';
$string['submit_num'] = '提交的数量';
$string['submitted'] = '已提交';
$string['switch_item_to_not_required'] = '切换到：非必需要回答';
$string['switch_item_to_required'] = '切换到：必需要回答';
$string['table_border'] = '内表边框大小';
$string['table_border_help'] = '表框架的边框大小增加1';
$string['table_border_style'] = '内表边框样式';
$string['table_border_style_help'] = '外部表格的边框样式为实心（固定）';
$string['table_columns'] = '列数';
$string['table_disp_iname'] = '显示项目名称';
$string['table_disp_iname_help'] = '显示表中项目的名称。';
$string['table_th_sizes'] = '每列的宽度（px）';
$string['table_th_sizes_help'] = '指定用逗号分隔的每列的宽度（px单位）。';
$string['table_th_strings'] = '每列标题';
$string['table_th_strings_help'] = '描述由换行符分隔的每列的标题。也就是说，一个标题写在一行上。';
$string['tableend'] = '表格结束';
$string['tablestart'] = '表格开始';
$string['template_saved'] = '模板已保存';
$string['templates'] = '模板';
$string['textarea'] = '长文本答案';
$string['textarea_height'] = '行数';
$string['textarea_width'] = '宽度';
$string['textfield'] = '短文本答案';
$string['textfield_maxlength'] = '允许最多字符数';
$string['textfield_size'] = '文本域宽度';
$string['time_close'] = '关闭时间';
$string['time_close_help'] = '您可以指定人们可以访问应用程序以回答应用程序的时间。
如果未勾选复选框，则未定义限制。';
$string['time_open'] = '打开时间';
$string['time_open_help'] = '您可以指定人们可以访问应用程序以回答应用程序的时间。
如果未勾选复选框，则未定义限制。';
$string['title_ack'] = '接收。';
$string['title_before'] = '在提交前';
$string['title_check'] = '确认';
$string['title_class'] = '状态';
$string['title_draft'] = '草稿';
$string['title_exec'] = '执行';
$string['title_title'] = '标题';
$string['title_version'] = '版本';
$string['update_entry'] = '更新';
$string['update_entry_button'] = '更新';
$string['update_item'] = '保存对题目的更改';
$string['use_calendar'] = '使用日历';
$string['use_calendar_help'] = '提交申请的期限登记在日历中。';
$string['use_item'] = '使用{$a}';
$string['use_one_line_for_each_value'] = '每个值使用一行！';
$string['use_this_template'] = '使用这个模板';
$string['user_pic'] = '图片';
$string['username_manage'] = '用户名管理';
$string['username_manage_help'] = '您可以在此模块中选择显示的名称模式。';
$string['using_templates'] = '使用一个模板';
$string['vertical'] = '垂直的';
$string['view_entries'] = '显示条目';
