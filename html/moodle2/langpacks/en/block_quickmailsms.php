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
 * Strings for component 'block_quickmailsms', language 'en', branch 'MOODLE_26_STABLE'
 *
 * @package   block_quickmailsms
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['add_all'] = 'Add All';
$string['add_button'] = 'Add';
$string['additional_emails'] = 'Additional SMSs';
$string['additional_emails_help'] = 'Other SMS addresses you would like the message sent to, in a comma or semicolon separated list. Example:

 SMS1@example.com, SMS2@example.com';
$string['admin_email_send_receipt'] = 'Admin SMS Send Receipt';
$string['allowstudents'] = 'Allow students to use QuickmailSMS';
$string['allowstudentsdesc'] = 'Allow students to use QuickmailSMS. If you choose "Never", the block cannot be configured to allow students access at the course level.';
$string['all_sections'] = 'All Groups';
$string['alternate'] = 'Alternate SMSs';
$string['alternate_body'] = '<p>
{$a->fullname} added {$a->address} as an alternate sending address for {$a->course}.
</p>

<p>
The purpose of this SMS was to verify that this address exists, and the owner
of this address has the appropriate permissions in Moodle.
</p>

<p>
If you wish to complete the verification process, please continue by directing
your browser to the following url: {$a->url}.
</p>

<p>
If the description of this SMS does not make any sense to you, then you may have
received it by mistake. Simply discard this message.
</p>

Thank you.';
$string['alternate_from'] = 'Moodle: QuickmailSMS';
$string['alternate_new'] = 'Add Alternate Address';
$string['alternate_subject'] = 'Alternate SMS address verification';
$string['approved'] = 'Approved';
$string['are_you_sure'] = 'Are you sure you want to delete {$a->title}? This action
cannot be reversed.';
$string['attachment'] = 'Attachment(s)';
$string['backup_history'] = 'Include QuickmailSMS History';
$string['body'] = 'Body';
$string['composenew'] = 'Compose New SMS';
$string['config'] = 'Configuration';
$string['courseferpa'] = 'Respect Course Mode';
$string['courselayout'] = 'Course Layout';
$string['courselayout_desc'] = 'Use _Course_ page layout  when rendering the QuickmailSMS block pages. Enable this setting, if you are getting Moodle form fixed width issues.';
$string['default_flag'] = 'Default';
$string['delete_confirm'] = 'Are you sure you want to delete message with the following details: {$a}';
$string['delete_failed'] = 'Failed to delete SMS';
$string['download_all'] = 'Download All';
$string['drafts'] = 'View Drafts';
$string['draftssuccess'] = 'Draft';
$string['email'] = 'SMS';
$string['email_error'] = 'Could not SMS: {$a->firstname} {$a->lastname} ({$a->SMS})';
$string['email_error_field'] = 'Can not have an empty: {$a}';
$string['entry_activated'] = 'Alternate SMS {$a->address} can now be used in {$a->course}.';
$string['entry_failure'] = 'An SMS could not be sent to {$a->address}. Please verify that {$a->address} exists, and try again.';
$string['entry_key_not_valid'] = 'Activation link is no longer valid for {$a->address}. Continue to resend activation link.';
$string['entry_saved'] = 'Alternate address {$a->address} has been saved.';
$string['entry_success'] = 'An SMS to verify that the address is valid has been sent to {$a->address}. Instructions on how to activate the address is contained in its contents.';
$string['failed_to_send_to'] = 'failed to send to';
$string['ferpa'] = 'FERPA Mode';
$string['ferpa_desc'] = 'Allows the system to behave either according to the course groupmode setting, ignoring the groupmode setting but separating groups, or ignoring groups altogether.';
$string['from'] = 'From';
$string['history'] = 'View History';
$string['log'] = 'View History';
$string['logsuccess'] = 'all messages sent successfully';
$string['message'] = 'Message';
$string['message_body_as_follows'] = 'message body as follows';
$string['message_failure'] = 'some users did not get message';
$string['messageprovider:broadcast'] = 'Send broadcast messages using Admin SMS.';
$string['message_sent_to'] = 'Message sent to';
$string['moodle_attachments'] = 'Moodle Attachments ({$a})';
$string['no_agreement'] = 'User did not agree to receive SMS messages.';
$string['no_alternates'] = 'No alternate SMSs found for {$a->fullname}. Continue to make one.';
$string['no_course'] = 'Invalid Course with id of {$a}';
$string['no_drafts'] = 'You have no SMS drafts.';
$string['no_email'] = 'Could not SMS {$a->firstname} {$a->lastname}.';
$string['no_email_address'] = 'Could not SMS {$a}';
$string['noferpa'] = 'No Group Respect';
$string['no_filter'] = 'No filter';
$string['no_log'] = 'You have no SMS history yet.';
$string['no_permission'] = 'You do not have permission to send SMSs with QuickmailSMS.';
$string['noreply'] = 'No-Reply';
$string['no_section'] = 'Not in a group';
$string['no_selected'] = 'You must select some users for SMSing.';
$string['no_subject'] = 'You must have a subject';
$string['not_valid'] = 'This is not a valid SMS log viewer type: {$a}';
$string['not_valid_action'] = 'You must provide a valid action: {$a}';
$string['not_valid_typeid'] = 'You must provide a valid SMS for {$a}';
$string['not_valid_user'] = 'You can not view other SMS history.';
$string['no_type'] = '{$a} is not in the acceptable type viewer. Please use the applciation correctly.';
$string['no_usergroups'] = 'There are no users in your group capable of being SMSed.';
$string['no_users'] = 'There are no users you are capable of SMSing.';
$string['overwrite_history'] = 'Overwrite QuickmailSMS History';
$string['pluginname'] = 'QuickmailSMS';
$string['potential_sections'] = 'Potential Groups';
$string['potential_users'] = 'Potential Recipients';
$string['prepend_class'] = 'Prepend Course name';
$string['prepend_class_desc'] = 'Prepend the course shortname to the subject of
the SMS.';
$string['qm_contents'] = 'Download File Contents';
$string['quickmailsms:addinstance'] = 'Add a new QuickmailSMS block to a course page';
$string['quickmailsms:allowalternate'] = 'Allows users to add an alternate SMS for courses.';
$string['quickmailsms:canconfig'] = 'Allows users to configure QuickmailSMS instance.';
$string['quickmailsms:candelete'] = 'Allows users to delete SMS from history.';
$string['quickmailsms:canimpersonate'] = 'Allows users to log in as other users and view history.';
$string['quickmailsms:cansend'] = 'Allows users to send SMS through QuickmailSMS';
$string['quickmailsms:myaddinstance'] = 'Add a new QuickmailSMS block to the /my page';
$string['receipt'] = 'Receive a copy';
$string['receipt_help'] = 'Receive a copy of the SMS being sent';
$string['remove_all'] = 'Remove All';
$string['remove_button'] = 'Remove';
$string['required'] = 'Please fill in the required fields.';
$string['reset'] = 'Restore System Defaults';
$string['restore_history'] = 'Restore QuickmailSMS History';
$string['role_filter'] = 'Role Filter';
$string['save_draft'] = 'Save Draft';
$string['seconds'] = 'seconds';
$string['selected'] = 'Selected Recipients';
$string['select_groups'] = 'Select Sections ...';
$string['select_roles'] = 'Roles to filter by';
$string['select_users'] = 'Select Users ...';
$string['sendadmin'] = 'Send Admin SMS';
$string['send_again'] = 'send again';
$string['send_email'] = 'Send SMS';
$string['sent_success'] = 'all messages sent successfully';
$string['sent_successfully_to_the_following_users'] = 'sent successfully to the following users:';
$string['sig'] = 'Signature';
$string['signature'] = 'Signatures';
$string['something_broke'] = 'It looks like you either have SMS sending disabled or things are very broken';
$string['status'] = 'status';
$string['strictferpa'] = 'Always Separate Groups';
$string['subject'] = 'Subject';
$string['sure'] = 'Are you sure you want to delete {$a->address}? This action cannot be undone.';
$string['time_elapsed'] = 'Time Elapsed:';
$string['title'] = 'Title';
$string['user'] = 'user';
$string['users'] = 'users';
$string['valid'] = 'Activation Status';
$string['waiting'] = 'Waiting';
$string['warnings'] = 'Warnings';
