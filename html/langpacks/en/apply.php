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
 * Strings for component 'apply', language 'en', version '3.11'.
 *
 * @package     apply
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept_entry'] = 'accept';
$string['acked_accept'] = 'Accept';
$string['acked_notyet'] = 'Not Yet';
$string['acked_reject'] = 'Reject';
$string['add_item'] = 'Add entry item to activity';
$string['add_items'] = 'Add entry items to activity';
$string['add_pagebreak'] = 'Add a page break for depending';
$string['adjustment'] = 'Adjustment';
$string['apply:addinstance'] = 'Add a new apply';
$string['apply:applies'] = 'issue a apply';
$string['apply:createprivatetemplate'] = 'Create private template';
$string['apply:createpublictemplate'] = 'Create public template';
$string['apply:deletesubmissions'] = 'Delete submissions';
$string['apply:deletetemplate'] = 'Delete template';
$string['apply:edititems'] = 'Edit Items';
$string['apply:edittemplates'] = 'Edit Templates';
$string['apply:mapcourse'] = 'Map courses to global applys';
$string['apply:operatesubmit'] = 'Operation of Entry';
$string['apply:preview'] = 'Preview';
$string['apply:preview_submit'] = 'Submit Screen Preview';
$string['apply:receivemail'] = 'Receive email notification';
$string['apply:submit'] = 'Submit a Entry';
$string['apply:view'] = 'View a Apply';
$string['apply:viewanalysepage'] = 'View the analysis page after submit';
$string['apply:viewentries'] = 'List of Entries';
$string['apply:viewreports'] = 'View reports';
$string['apply_is_already_submitted'] = 'Application is already submitted';
$string['apply_is_closed'] = 'Application period is closed';
$string['apply_is_disable'] = 'You ca not use this Apply.';
$string['apply_is_not_open'] = 'Application is not opened yet';
$string['apply_is_not_ready'] = 'Apply is not ready yet. Please edit items first.';
$string['apply_options'] = 'Apply options';
$string['average'] = 'Average';
$string['back_button'] = 'Back';
$string['before_apply'] = 'Before submit';
$string['can_discard'] = 'Can Discard';
$string['can_discard_help'] = 'Enable cancellation of application.';
$string['cancel_entry'] = 'Cancel';
$string['cancel_entry_button'] = 'Cancel';
$string['cancel_moving'] = 'Cancel moving';
$string['cannot_save_templ'] = 'saving templates is not allowed';
$string['captcha'] = 'Captcha';
$string['check'] = 'Check Box';
$string['checkbox'] = 'Check Boxes';
$string['class_cancel'] = 'Cancel';
$string['class_draft'] = 'Draft';
$string['class_newpost'] = 'New Post';
$string['class_update'] = 'Update';
$string['confirm_cancel_entry'] = 'Are you sure you want to cancel this entry?';
$string['confirm_delete_entry'] = 'Are you sure you want to Withdraw this entry?';
$string['confirm_delete_item'] = 'Are you sure you want to delete this element?';
$string['confirm_delete_submit'] = 'Are you sure you want to delete this application?';
$string['confirm_delete_template'] = 'Are you sure you want to delete this template?';
$string['confirm_rollback_entry'] = 'Are you sure you want to withdraw this entry?';
$string['confirm_use_template'] = 'Are you sure you want to use this template?';
$string['count_of_nums'] = 'Count of numbers';
$string['creating_templates'] = 'Save these questions as a new template';
$string['date_format'] = 'Display format of date(time)';
$string['date_format_default'] = '%m/%d/%y %H:%M';
$string['date_format_help'] = 'Specify display format of date and time. The default is %m/%d/%y %H:%M';
$string['delete_entry'] = 'Withdraw';
$string['delete_entry_button'] = 'Withdraw';
$string['delete_item'] = 'Delete item';
$string['delete_submit'] = 'Delete application';
$string['delete_template'] = 'Delete template';
$string['delete_templates'] = 'Delete template...';
$string['depending'] = 'Dependencies';
$string['depending_help'] = 'It is possible to show an item depending on the value of another item.<br />
<strong>Here is an example.</strong><br />
<ul>
<li>First, create an item on which another item will depend on.</li>
<li>Next, add a pagebreak for depending.</li>
<li>Then add the items dependant on the value of the item created before. Choose the item from the list labelled "Dependence item" and write the required value in the textbox labelled "Dependence value".</li>
</ul>
<strong>The item structure should look like this.</strong>
<ol>
<li>Item Q: Do you have a car? A: yes/no</li>
<li>Pagebreak for depending</li>
<li>Item Q: What colour is your car?<br />
(this item depends on item 1 with value = yes)</li>
<li>Item Q: Why don\'t you have a car?<br />
(this item depends on item 1 with value = no)</li>
<li> ... other items</li>
</ol>';
$string['dependitem'] = 'Dependence item';
$string['dependvalue'] = 'Dependence value';
$string['description'] = 'Description';
$string['display_button'] = 'Display';
$string['do_not_analyse_empty_submits'] = 'Do not analyse empty submits';
$string['dropdown'] = 'Dropdown List';
$string['edit_entry'] = 'Edit';
$string['edit_entry_button'] = 'Edit';
$string['edit_item'] = 'Edit question';
$string['edit_items'] = 'Edit Items';
$string['email_confirm_html'] = ': <i>\'{$a->apply}\'</i><br /><br /> You can view it <a href="{$a->url}">here</a>.';
$string['email_confirm_text'] = ': \'{$a->apply}\'

You can view it here:
{$a->url}';
$string['email_entry'] = 'Send email to applicant';
$string['email_noreply'] = 'This email is automatically. Please do not reply to this email.';
$string['email_notification'] = 'Send email notifications to admin';
$string['email_notification_help'] = 'If enabled, administrators receive email notification of apply submissions.';
$string['email_notification_user'] = 'send email notifications to applicants';
$string['email_notification_user_help'] = 'If enabled, administrator can send email of apply processes to applicants.';
$string['email_teacher'] = '{$a->username} has submitted apply activity';
$string['email_user_accept'] = 'Your application was accepted';
$string['email_user_done'] = 'Your application is processing has been completed';
$string['email_user_other'] = 'The administrator has processed your application';
$string['email_user_reject'] = 'Your application was rejected';
$string['enable_deletemode'] = 'Delete Mode';
$string['enable_deletemode_help'] = 'This enables a teacher to delete all applications.<br />Usually, please set to "No" for safety.';
$string['entries_list_title'] = 'List of Entries';
$string['entry_saved'] = 'Your applocation has been saved. Thank you.';
$string['entry_saved_draft'] = 'Your applocation has been saved as <strong>Draft</strong>.';
$string['entry_saved_operation'] = 'Your request has been processed.';
$string['execd_done'] = 'Done';
$string['execd_entry'] = 'done';
$string['execd_notyet'] = 'Not Yet';
$string['exist'] = 'Exist';
$string['export_templates'] = 'Export templates';
$string['firstlastname'] = 'firstname lastname';
$string['fixedtitle'] = 'Fixed Title';
$string['hide_no_select_option'] = 'Hide the "Not selected" option';
$string['horizontal'] = 'horizontal';
$string['import_templates'] = 'Import templates';
$string['info'] = 'Information';
$string['infotype'] = 'Information-Type';
$string['item_label'] = 'Label';
$string['item_label_help'] = 'Special Labels<br />
<ul>
<li><strong>submit_title</strong>
<ul><li>When this label is attached to the textfield (Short text answer), it is treated as a title of an application.</li></ul>
</li>
<li><strong>submit_only</strong>
<ul><li>This is an item displayed only at the time of an application. This is used for use consent etc.</li></ul>
</li>
<li><strong>admin_reply</strong>
<ul><li>Although not displayed on a user at the time of an application, it is displayed after an application.
Since the administrator can edit, This is uses for the comment from an administrator, etc. </li></ul>
</li>
<li><strong>admin_only</strong>
<ul><li>This is an item which can be displayed to only an administrator and can be edited by only an administrator.
It is used for an administrator\'s memo etc.</li></ul>
</li>
</ul>';
$string['item_name'] = 'Item Name';
$string['item_style'] = 'Style of item';
$string['item_style_default'] = '';
$string['item_style_help'] = 'The style of the item. The Default is (  )';
$string['items_are_required'] = 'Answers are required to starred items.';
$string['label'] = 'Label';
$string['lastfirstname'] = 'lastname firstname';
$string['maximal'] = 'maximal';
$string['messageprovider:message'] = 'Message';
$string['messageprovider:processed'] = 'Operation was Processed';
$string['messageprovider:submission'] = 'Operation of Entry';
$string['modulename'] = 'Application Form';
$string['modulename_help'] = 'You can make simple Application Forms and make a user submit it.';
$string['modulenameplural'] = 'Application Forms';
$string['move_here'] = 'Move here';
$string['move_item'] = 'Move this question';
$string['movedown_item'] = 'Move this question down';
$string['moveup_item'] = 'Move this question up';
$string['multichoice'] = 'Multiple choice';
$string['multichoice_values'] = 'Multiple choice values';
$string['multichoicerated'] = 'Multiple choice (rated)';
$string['multichoicetype'] = 'Multiple choice type';
$string['multiple_submit'] = 'Multiple Submissions';
$string['multiple_submit_help'] = 'If enabled for anonymous surveys, users can submit apply an unlimited number of times.';
$string['name'] = 'Name';
$string['name_required'] = 'Name required';
$string['nested_table'] = 'Table is nested!';
$string['next_page_button'] = 'Next page';
$string['no_itemlabel'] = 'No label';
$string['no_itemname'] = 'No itemname';
$string['no_items_available_yet'] = 'No questions have been set up yet';
$string['no_settings_captcha'] = 'Setting of CAPTCHA cannot be edited.';
$string['no_submit_data'] = 'Specified entry data does not exist';
$string['no_table'] = 'Table is not started!';
$string['no_templates_available_yet'] = 'No templates available yet';
$string['no_title'] = 'No Title';
$string['not_close_table'] = 'The table is not closed';
$string['not_exist'] = 'not Exist';
$string['not_selected'] = 'not Selected';
$string['numeric'] = 'Numeric answer';
$string['numeric_range_from'] = 'Range from';
$string['numeric_range_to'] = 'Range to';
$string['only_acked_accept'] = 'Reception Only';
$string['only_acked_accept_help'] = 'Enable to only accept reception. Specify when processing is not required.';
$string['only_one_captcha_allowed'] = 'Only one captcha is allowed in a apply';
$string['operate_is_disable'] = 'You ca not use this Operation';
$string['operate_submit'] = 'Operate';
$string['operate_submit_button'] = 'Process';
$string['operation_error_execd'] = 'When you do not accept entry, you can not checke "done"';
$string['outside_style'] = 'Border style of item';
$string['outside_style_default'] = 'border: 0px solid';
$string['outside_style_help'] = 'The style of the border around the item. This setting is ignored in the table. The default is ( border: 0px solid )';
$string['overview'] = 'Overview and Submit';
$string['pagebreak'] = 'Page break for depending';
$string['pagebreak_style'] = 'Style of page break line';
$string['pagebreak_style_default'] = '1px solid';
$string['pagebreak_style_help'] = 'The style of the page break line (&lt; hr /&gt;). The Default is ( 1px solid ). In case of empty, the line is not drawn on print screen. The page break line is not displayed on the submit screen and the preview of the submit screen.';
$string['pagebreak_title'] = 'Page Break for Printing';
$string['pluginadministration'] = 'Apply administration';
$string['pluginname'] = 'Application Form';
$string['position'] = 'Position';
$string['preview'] = 'Preview';
$string['preview_help'] = 'In the preview you can change the order of questions.';
$string['previous_apply'] = 'Previous submit';
$string['previous_page_button'] = 'Previous page';
$string['printpagebreak'] = 'Add a page break for printing';
$string['public'] = 'Public';
$string['radio'] = 'Radio Button';
$string['radiobutton'] = 'Radio Button';
$string['radiobutton_rated'] = 'Radio Button (Rated)';
$string['radiorated'] = 'Radio Button (Rated)';
$string['reject_entry'] = 'reject';
$string['related_items_deleted'] = 'All your user\'s responses for this question will also be deleted';
$string['required'] = 'Required';
$string['resetting_data'] = 'Reset apply responses';
$string['responsetime'] = 'Responsestime';
$string['returnto_course'] = 'Return';
$string['rollback_entry'] = 'Withdraw';
$string['rollback_entry_button'] = 'Withdraw';
$string['save_as_new_item'] = 'Save as new question';
$string['save_as_new_template'] = 'Save as new template';
$string['save_draft_button'] = 'Save as draft';
$string['save_entry_button'] = 'Submit this entry';
$string['save_item'] = 'Save item';
$string['saving_failed'] = 'Saving failed';
$string['saving_failed_because_missing_or_false_values'] = 'Saving failed because missing or false values.';
$string['separator_decimal'] = '.';
$string['separator_thousand'] = ',';
$string['show_all'] = 'Show all {$a}';
$string['show_perpage'] = 'Show {$a} per page';
$string['start'] = 'Start';
$string['started'] = 'started';
$string['stop'] = 'End';
$string['subject'] = 'Subject';
$string['submit_form_button'] = 'New Application';
$string['submit_new_apply'] = 'Submit a new Apply';
$string['submit_num'] = 'Submitted number';
$string['submitted'] = 'submitted';
$string['switch_item_to_not_required'] = 'switch to: answer not required';
$string['switch_item_to_required'] = 'switch to: answer required';
$string['table_border'] = 'Border size of inside table';
$string['table_border_help'] = 'The border size of the frame of table is incremented by 1';
$string['table_border_style'] = 'Border style of inside table';
$string['table_border_style_help'] = 'The border style of outside table is solid (fix)';
$string['table_columns'] = 'Number of columns';
$string['table_disp_iname'] = 'Display item name';
$string['table_disp_iname_help'] = 'Display the name of the item in table.';
$string['table_th_sizes'] = 'Width(px) of each column';
$string['table_th_sizes_help'] = 'Specify the width (px unit) of each column separated by commas.';
$string['table_th_strings'] = 'Title of each column';
$string['table_th_strings_help'] = 'Describe the title of each column separated by line feed. That is, one title is written on one line.';
$string['tableend'] = 'Table End';
$string['tablestart'] = 'Table Start';
$string['template_saved'] = 'Template saved';
$string['templates'] = 'Templates';
$string['textarea'] = 'Longer text answer';
$string['textarea_height'] = 'Number of lines';
$string['textarea_width'] = 'Width';
$string['textfield'] = 'Short text answer';
$string['textfield_maxlength'] = 'Maximum characters accepted';
$string['textfield_size'] = 'Textfield width';
$string['time_close'] = 'Time to close';
$string['time_close_help'] = 'You can specify times when the apply is accessible for people to answer the applications.
If the checkbox is not ticked there is no limit defined.';
$string['time_open'] = 'Time to open';
$string['time_open_help'] = 'You can specify times when the apply is accessible for people to answer the applications.
If the checkbox is not ticked there is no limit defined.';
$string['title_ack'] = 'Recept.';
$string['title_before'] = 'Before Submit';
$string['title_check'] = 'Check';
$string['title_class'] = 'Status';
$string['title_draft'] = 'Draft';
$string['title_exec'] = 'Exec.';
$string['title_title'] = 'Title';
$string['title_version'] = 'Ver.';
$string['update_entry'] = 'Update';
$string['update_entry_button'] = 'Update';
$string['update_item'] = 'Save changes to question';
$string['use_calendar'] = 'Use Calendar';
$string['use_calendar_help'] = 'The period for submission of an application is registered into a calendar.';
$string['use_item'] = 'use {$a}';
$string['use_one_line_for_each_value'] = 'Use one line for each value!';
$string['use_this_template'] = 'Use this template';
$string['user_pic'] = 'Picture';
$string['username_manage'] = 'Manage of Username';
$string['username_manage_help'] = 'You can select displied name pattern in this module.';
$string['using_templates'] = 'Use a template';
$string['vertical'] = 'vertical';
$string['view_entries'] = 'Show Entries';
$string['wiki_url'] = 'http://www.nsl.tuis.ac.jp/xoops/modules/xpwiki/?mod_apply%20%28E%29';
$string['yes_button'] = 'Yes';
