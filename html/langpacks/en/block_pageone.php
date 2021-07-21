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
 * Strings for component 'block_pageone', language 'en', version '3.11'.
 *
 * @package     block_pageone
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['account_info'] = 'Account information and additional settings';
$string['account_info2'] = 'Functions';
$string['account_works'] = 'PageOne server login';
$string['action'] = 'Action';
$string['add_alpha_tag'] = 'Add new custom MSISDNs';
$string['add_callback'] = 'Add SMS Callback';
$string['all_course_messages'] = 'All users messages for this course';
$string['all_messages'] = 'All users messages for all courses';
$string['all_own_messages'] = 'Messages for all my courses';
$string['alphatag'] = 'MSISDN';
$string['alphatag_help'] = '(<b>*</b> MSISDN already in use in custom settings. <b>#</b> System default MSISDN)';
$string['already_set'] = 'A custom MSISDN for this user has already been set';
$string['areyousure'] = 'Are you sure you want to delete all texts/emails in your history?';
$string['attachment'] = 'Attachment';
$string['attachment_warn'] = 'Warning, attachments can only sent by email and not by text message. Do you wish to continue ?';
$string['attachmentalt'] = 'Add an attachment to your text/email';
$string['attachmenterror'] = 'Not a valid attachment!  The following file does not exist: <strong>$a</strong>';
$string['attachmentoptional'] = '(Optional - only sent with emails)';
$string['available_credit'] = 'Available account credit';
$string['blockname'] = 'MoodleMobile';
$string['callback_added'] = 'The callback service has been added and should be listed below.';
$string['callback_delay'] = 'Please note, there may be a short delay (~10 minutes) between the registration of a callback for 2-way messaging and it becoming active.';
$string['callback_instructions'] = 'In order to recieve incomming text messages and text message delivery reports, you need to register a callback service with PageOne. The callback URL for this Moodle server which should be sent to PageOne support is shown below:';
$string['callback_ok'] = 'SMS Callback service';
$string['callback_ok_des'] = 'required for text message replies';
$string['callback_problem'] = 'The SMS callback services needed to receive text message replies and for enhanced message status reporting could not be set up automatically. This is either because the PageOne server has reject the callback setup request or because callbacks to a different system already exist.';
$string['callback_problem_1'] = 'Ignore any existing settings and add the SMS callbacks for this moodle instance';
$string['callback_problem_2'] = 'Delete all pre-existing callbacks and add SMS callbacks to this moodle instance';
$string['callback_problem_3'] = 'View and manually edit all registered SMS callbacks';
$string['callback_reg_error_delivery'] = 'There was an error registering the delivery reports callback';
$string['callback_reg_error_reply'] = 'There was an error registering the message replies callback';
$string['char_limit_error'] = 'Your message has exceeded the character limit for a text message. Please reduce the length of your message.';
$string['char_limit_mm'] = 'Your message has exceeded the character limit for a text message. The text message was not sent.';
$string['check'] = 'Check All';
$string['clearhistory'] = 'Clear History';
$string['compose'] = 'Compose Message';
$string['config_account_num'] = 'PageOne Account number';
$string['config_account_pass'] = 'PageOne Account password';
$string['config_alpha_tag'] = 'System default MSISDN';
$string['config_alpha_tag_help'] = 'The default number which all text messages sent from this system will come from. This can be overridden by the custom MSISDN settings.';
$string['config_char_limit'] = 'Message character limit';
$string['config_char_limit_help'] = 'The maximum number of characters allowed in a single outgoing message.';
$string['config_country_code'] = 'Country dialling code';
$string['config_country_code_help'] = 'The International dialling code for your country, digits only. For the UK, enter 44.';
$string['config_default_mbox'] = 'Default mailbox for incoming messages';
$string['config_default_mbox_help'] = 'This should be set to a suitable email address.';
$string['config_edit_alpha_link'] = 'Set custom MSISDNs for individual users';
$string['config_edit_log_link'] = 'View message logs';
$string['config_https'] = 'Use https for the callback end point';
$string['config_https_help'] = 'Set to yes if your Moodle server will only accept https connections for callbacks.';
$string['config_mobile_find'] = 'Mobile phone number identification method';
$string['config_mobile_find_always_first'] = 'Moodle \'Phone\' user parameter';
$string['config_mobile_find_always_second'] = 'Moodle \'Mobile Phone\' user parameter';
$string['config_mobile_find_first_valid'] = 'First valid phone number';
$string['config_mobile_find_help'] = 'This setting controls the mechanism used to identify Mobile phone numbers in the Moodle user parameters. The options are:<br /><ul><li><b>Moodle \'Mobile Phone\' user parameter:</b> The reccomended option if your user database is consistent and the mobile phone number is never placed in the other field. (Note this was refered to as \'Phone 2\' in some older versions of Moodle).</li><li><b>Moodle \'Phone\' user parameter:</b> Uses the number in the \'Phone\' user parameter field. (Note this was refered to as \'Phone 1\' in some older versions of Moodle)</li><li><b>First valid phone number:</b> This will check both the \'Phone\' and \'Mobile Phone\' fields. If \'Phone\' contains a valid number, then this will be used. If not, the content of \'Mobile phone\' will be used.</li><li><b>Second valid phone number:</b> This will check both the \'Mobile Phone\' and \'Phone\' fields. If \'Mobile Phone\' contains a valid number, then this will be used. If not, the content of \'Phone\' will be used.</li><li><b>Automatically identify UK mobile phone number:</b> This method checks all phone numbers stored in the users profile to see if they start with the normal UK mobile phone number prefix, 07.</li><li><b>Mobile phone number prefixed with letter m:</b> Use this option if the mobile phone number is stored prefixed with an m (eg m07123 456789) in either phone number field </li></ul>';
$string['config_mobile_find_second_valid'] = 'Second valid phone number';
$string['config_mobile_find_starts_m'] = 'Mobile phone number prefixed with letter m';
$string['config_mobile_find_uk_auto'] = 'Automatically identify UK mobile phone number';
$string['config_mtype'] = 'Text message delivery';
$string['config_mtype_0'] = 'Email';
$string['config_mtype_1'] = 'Moodle Messaging';
$string['config_mtype_help'] = 'The mechanism by which text messages are delivered to users.';
$string['config_receive'] = 'Unidentified recipient action';
$string['config_receive_0'] = 'Ignore';
$string['config_receive_1'] = 'Email rejection message to the sender if possible, otherwise forward to default mailbox';
$string['config_receive_2'] = 'Forward to default mailbox';
$string['config_receive_3'] = 'Send rejection text message to the sender';
$string['config_receive_help'] = 'The action to take when the recipient of an incomming text message cannot be identified,';
$string['confirmed'] = 'Confirmed';
$string['confirmed_errors'] = 'Confirmed with Errors';
$string['contact_with_mm'] = 'Contact with MoodleMobile';
$string['course_id'] = 'Course ID was incorrect';
$string['credit_message'] = 'Warning : SMS text credits were reported as low/empty when this message was sent. To top up, please contact PageOne Janet Customer Support on 0844&nbsp;811&nbsp;0808, or email janettxt@pageone.co.uk. Calls to 0844&nbsp;811&nbsp;0808 cost 5ppm at all times from a BT landline. Other networks may vary.';
$string['credit_usage'] = 'SMS Credit Usage';
$string['date'] = 'Date';
$string['delete'] = 'Delete';
$string['deletefail'] = 'Delete(s) Failed';
$string['deletesuccess'] = 'Delete(s) Successful';
$string['domxml_warn'] = 'Warning, the PHP DOMXML classes cannot be found. This block will not work without them. Please refer to the Readme file in the block download for more information.';
$string['edit_alpha'] = 'Edit Custom MSISDN';
$string['edit_callback'] = 'Edit Registered SMS Callbacks';
$string['email'] = 'Text/Email';
$string['email_address'] = 'Email Address';
$string['email_found'] = 'Email address found';
$string['email_not_found'] = 'Email address disabled/not found';
$string['emailfail'] = 'email error:';
$string['emailfailerror'] = 'The following users were not emailed due to...';
$string['emailstop'] = 'disabled email address:';
$string['error_code_0'] = 'Login to the PageOne server has failed . No text messages were sent.';
$string['error_code_200'] = 'Sent';
$string['error_code_201'] = 'Accepted';
$string['error_code_202'] = 'Group Accepted';
$string['error_code_203'] = 'Valid Login';
$string['error_code_210'] = 'Email accepted';
$string['error_code_211'] = 'Pager accepted';
$string['error_code_213'] = 'Location accepted';
$string['error_code_214'] = 'TTS accepted';
$string['error_code_400'] = 'No Access to this Service';
$string['error_code_401'] = 'Message Not Sent';
$string['error_code_402'] = 'Service currently unavailable';
$string['error_code_403'] = 'Could not send email';
$string['error_code_404'] = 'Unable to deliver';
$string['error_code_501'] = 'Bad Character';
$string['error_code_502'] = 'Invalid Number';
$string['error_code_503'] = 'Unknown Called Address';
$string['error_code_504'] = 'Unknown Pager';
$string['error_code_505'] = 'Protocol Error';
$string['error_code_507'] = 'Insufficient Credits';
$string['error_code_551'] = 'Failed Security';
$string['error_code_552'] = 'Inactive Subscriber';
$string['error_code_553'] = 'Max Limit Reached';
$string['error_code_554'] = 'Please Contact Service Provider';
$string['error_code_555'] = 'System Error';
$string['error_code_556'] = 'Unknown Error';
$string['error_code_558'] = 'Failed to replace handset';
$string['error_code_559'] = 'Insufficient Funds';
$string['errors'] = 'Note: There were errors during the sending of this message, some or all of the texts or emails may not have reached there destination.';
$string['failed'] = 'Failed';
$string['from'] = 'From';
$string['history'] = 'Outbox';
$string['host'] = 'Host';
$string['includefrom'] = 'Include sender name in text message';
$string['inhistory'] = 'Inbox (SMS Only)';
$string['mailto_key'] = '*=No valid mobile phone number, #=No valid email address.';
$string['message'] = 'Message Excerpt';
$string['message_from'] = 'Text message from';
$string['message_log'] = 'Message Log';
$string['message_time'] = 'Message time';
$string['messageerror'] = 'Must have a message!';
$string['messagefail'] = 'Your text message could not be delivered because it was sent to a number which has no designated recipient.';
$string['messagefail_extra'] = 'Details of the failed text message are shown below.';
$string['messagefail_subject'] = 'Your text message failed';
$string['messagefail_subject_default'] = 'Failed delivery of text message to';
$string['messagetype'] = 'Message type';
$string['messagetype_0'] = 'Text Message + Email';
$string['messagetype_1'] = 'Text Message only';
$string['messagetype_2'] = 'Email only';
$string['messagetype_3'] = 'Text Message + Moodle Messaging';
$string['messagetype_4'] = 'Moodle Messaging';
$string['messagetype_help_button'] = 'message types';
$string['messagewarn_1'] = 'Warning: Message contains extended character';
$string['messagewarn_2'] = 'please check the number of sms per message before sending';
$string['mm_disabled'] = '(Note : Moodle Messaging is disabled on this system, only email can be used.)';
$string['mobile_found'] = 'Mobile number found';
$string['mobile_number'] = 'Mobile Number';
$string['more_users'] = 'The users list shows all the users who have permission to use all the MoodleMobile instances on this system. If you have used a single sticky or site-wide instance of MoodleMobile instead of adding it to the courses where required, then you may find that many users are missing from the user list. When using MoodleMobile in this way, you will need to give any user you wish to be able to send or recieve messages site-wide \'can send\' permission.';
$string['no_available_users'] = 'All suitable users have had custom MSIDNSs set';
$string['no_contact'] = 'The following users do not have valid contact details for your choosen messaging method(s) and will not recieve your message :';
$string['no_course_users'] = 'No course users found to email';
$string['no_list'] = 'The MSISDN list could not be retrieved. If you are installing this block for the first time, leave this setting blank for now and the return to the block configuration page after the other settings have been saved to see the list of available MSISDNs. If the block has already been installed, then please check the account number and password settings.';
$string['no_mobile'] = 'Mobile number not found';
$string['no_permission'] = 'You do not appear to have permission to use MoodleMobile anywhere on the system.';
$string['no_permission_view'] = 'Sorry, but you do not have permission to view other users messages.';
$string['no_suitable_course'] = 'No course was specified and the user you are trying to contact was not found in any of the courses in which you have permission to use MoodleMobile.';
$string['no_user_email'] = 'No course users found to email';
$string['no_user_select'] = 'You have not selected any users to text/email.';
$string['no_view_priv'] = 'Warning : You are not allowed to see user details, so the full detail of these errors has been hidden.';
$string['nogroupmembers'] = 'No group members';
$string['not_authorised'] = 'You are not authorised to do this';
$string['not_configured'] = 'PageOne account settings have not been entered. Block disabled.';
$string['notingroup'] = 'Not in a group';
$string['own_messages'] = 'My Messages for this course only';
$string['pageone:addinstance'] = 'Add an instance of MoodleMooble';
$string['pageone:cansend'] = 'Can send emails and texts with MoodleMobile';
$string['pageone:myaddinstance'] = 'Add an instance of MoodleMooble';
$string['permission'] = 'Sorry, you do not have the correct permissions to use MoodleMobile.';
$string['please_select'] = 'Please Select';
$string['pluginname'] = 'MoodleMobile';
$string['receive'] = 'Receive Messages';
$string['registered'] = 'Registered';
$string['reply_mm'] = 'Reply via MM';
$string['reply_subject'] = 'Text message';
$string['reply_with'] = 'Reply to this message with MoodleMobile using the link below :';
$string['scope'] = 'Scope';
$string['scope_0'] = 'Restricted';
$string['scope_1'] = 'Session';
$string['scope_2'] = 'Message';
$string['scope_3'] = 'Permanent';
$string['select_help'] = 'Hold down the CTRL key to make multiple selections from the user lists, or to select/unselect individual users. If you want to select all the items in a list quickly, just click the top item and drag down.';
$string['selectuser'] = 'Select user';
$string['send_error'] = 'Text Messaging Send Error';
$string['send_error_help'] = 'There was an error communicating with the PageOne text messaging server. This could be due to a network problem or a problem with your PageOne account. If the problem persists, please report it to your system administrator with a copy of this error message.';
$string['send_with_mm'] = 'Send a copy of this message by SMS with MoodleMobile';
$string['sendemail'] = 'Send Message(s)';
$string['sender'] = 'Sender';
$string['sent'] = 'Sent';
$string['server_fail'] = 'Server did not respond';
$string['service'] = 'Service';
$string['service_0'] = 'All Events';
$string['service_1'] = 'Delivery Reports';
$string['service_2'] = 'Reply Messages';
$string['soap_fault'] = 'SOAP connection fault';
$string['soap_fault_help'] = 'This problem might be due to network problems or a bug in the MoodleMobile block or the services it is attempting to connect to. If the problem persists, please report it to your system administrator with a copy of this error message.';
$string['status'] = 'Status';
$string['status_help'] = 'Sent = Delivered to PageOne server with no errors.<br />Confirmed = Delivery of Text Message has been confirmed by PageOne server.';
$string['status_info_header'] = 'Message status';
$string['subjecterror'] = 'Must have a subject!';
$string['successfulemail'] = 'Text(s)/Email(s) sent successfully';
$string['textfail'] = 'Text messaging error(s):';
$string['textfailerror'] = 'The following users were not texted due to...';
$string['textstop'] = 'disabled text address:';
$string['to'] = 'To';
$string['toerror'] = 'Must select recipients for the text/email!';
$string['uncheck'] = 'Uncheck All';
$string['update_alphas'] = 'Update custom MSISDNs';
$string['user'] = 'User';
$string['user_not_found'] = 'User Not Found';
$string['via'] = '(Received via MoodleMobile)';
$string['view_message'] = 'View Message';
