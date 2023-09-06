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
 * Strings for component 'quickom', language 'en', version '4.1'.
 *
 * @package     quickom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['addtocalendar'] = 'Add to calendar';
$string['allmeetings'] = 'All live-classes with Quickom';
$string['alternative_hosts'] = 'Alternative Hosts';
$string['alternative_hosts_help'] = 'The alternative host option allows you to schedule live-classes and designate another Pro user on the same account to start the live-class or webinar if you are unable to. This user will receive an email notifying them that they\'ve been added as an alternative host, with a link to start the live-class. Separate multiple emails by comma (without spaces).';
$string['apikey'] = 'Quickom API key';
$string['apikey_desc'] = '';
$string['apisecret'] = 'Quickom API secret';
$string['apisecret_desc'] = '';
$string['apiurl'] = 'Quickom API url';
$string['apiurl_desc'] = '';
$string['attentiveness_score'] = 'Attentiveness score*';
$string['attentiveness_score_help'] = '*Attentiveness score is lowered when a participant does not have Quickom in focus for more than 30 seconds when someone is sharing a screen.';
$string['audio_both'] = 'VoIP and Telephony';
$string['audio_telephony'] = 'Telephony only';
$string['audio_voip'] = 'VoIP only';
$string['cachedef_quickomid'] = 'The quickom user id of the user';
$string['cachedef_sessions'] = 'Information from the quickom get user report request';
$string['calendardescriptionURL'] = 'Live-class join URL: {$a}.';
$string['calendardescriptionintro'] = '\\nDescription:\\n{\\$a}';
$string['calendariconalt'] = 'Calendar icon';
$string['clickjoin'] = 'Clicked join live-class button';
$string['connectionfailed'] = 'Connection failed:';
$string['connectionok'] = 'Connection working.';
$string['connectionstatus'] = 'Connection status';
$string['defaultsettings'] = 'Default Quickom settings';
$string['defaultsettings_help'] = 'These settings define the defaults for all new Quickom live-classes.';
$string['downloadical'] = 'Download iCal';
$string['duration'] = 'Duration';
$string['endtime'] = 'End time';
$string['err_duration_nonpositive'] = 'The duration must be positive.';
$string['err_duration_too_long'] = 'The duration cannot exceed 8767 hours (1 year).';
$string['err_long_timeframe'] = 'Requested time frame too long, showing results of latest month in range.';
$string['err_password'] = 'Password may only contain the following characters: [a-z A-Z 0-9 @ - _ *]. Max of 10 characters.';
$string['err_start_time_past'] = 'The start date cannot be in the past.';
$string['errorwebservice'] = 'Quickom webservice error: {$a}.';
$string['export'] = 'Export';
$string['firstjoin'] = 'First able to join';
$string['firstjoin_desc'] = 'The earliest a user can join a scheduled live-class (minutes before start).';
$string['getmeetingreports'] = 'Get live-class report from Quickom';
$string['invalid_status'] = 'Status invalid, check the database.';
$string['join'] = 'Join';
$string['join_link'] = 'Join link';
$string['join_meeting'] = 'Join live-class with Quickom';
$string['joinbeforehost'] = 'Join live-class before host';
$string['jointime'] = 'Join time';
$string['leavetime'] = 'Leave time';
$string['licensesnumber'] = 'Number of licenses';
$string['lowlicenses'] = 'If the number of your licenses exceeds those required, then when you create each new activity by the user, it will be assigned a PRO license by lowering the status of another user. The option is effective when the number of active PRO-licenses is more than 5.';
$string['meeting_finished'] = 'Finished';
$string['meeting_nonexistent_on_quickom'] = 'Nonexistent on Quickom';
$string['meeting_not_started'] = 'Not started';
$string['meeting_started'] = 'In progress';
$string['meeting_time'] = 'Start Time';
$string['meetingoptions'] = 'Live-class option';
$string['meetingoptions_help'] = '*Join before host* allows attendees to join the live-class before the host joins or when the host cannot attend the live-class.';
$string['moduleintro'] = 'Description';
$string['modulename'] = 'Quickom';
$string['modulename_help'] = 'Quickom is a video and web conferencing platform that gives authorized users the ability to host live-classes.';
$string['modulenameplural'] = 'Quickom';
$string['newmeetings'] = 'New live-classes';
$string['nomeetinginstances'] = 'No sessions found for this live-class.';
$string['noparticipants'] = 'No participants found for this session at this time.';
$string['noquickoms'] = 'No live-classes';
$string['nosessions'] = 'No sessions found for specified range.';
$string['off'] = 'Off';
$string['oldmeetings'] = 'Concluded live-classes';
$string['on'] = 'On';
$string['option_audio'] = 'Audio options';
$string['option_host_video'] = 'Host video';
$string['option_jbh'] = 'Enable join before host';
$string['option_participants_video'] = 'Participants video';
$string['participants'] = 'Participants';
$string['password'] = 'Password';
$string['passwordprotected'] = 'Password Protected';
$string['pluginadministration'] = 'Manage Quickom live-class';
$string['pluginname'] = 'Quickom';
$string['privacy:metadata:quickom_meeting_details'] = 'The database table that stores information about each live-class instance.';
$string['privacy:metadata:quickom_meeting_details:topic'] = 'The name of the live-class that the user attended.';
$string['privacy:metadata:quickom_meeting_participants'] = 'The database table that stores information about live-class participants.';
$string['privacy:metadata:quickom_meeting_participants:attentiveness_score'] = 'The participant\'s attentiveness score';
$string['privacy:metadata:quickom_meeting_participants:duration'] = 'How long the participant was in the live-class';
$string['privacy:metadata:quickom_meeting_participants:join_time'] = 'The time that the participant joined the live-class';
$string['privacy:metadata:quickom_meeting_participants:leave_time'] = 'The time that the participant left the live-class';
$string['privacy:metadata:quickom_meeting_participants:name'] = 'The name of the participant';
$string['privacy:metadata:quickom_meeting_participants:user_email'] = 'The email of the participant';
$string['quickom:addinstance'] = 'Add a new Quickom live-class';
$string['quickom:view'] = 'View Quickom live-classes';
$string['quickomerr'] = 'An error occured with Quickom.';
$string['quickomerr_apikey_missing'] = 'Quickom API key not found';
$string['quickomerr_apisecret_missing'] = 'Quickom API secret not found';
$string['quickomerr_id_missing'] = 'You must specify a course_module ID or an instance ID';
$string['quickomerr_licensescount_missing'] = 'Quickom utmost setting found but, licensescount setting not found';
$string['quickomerr_meetingnotfound'] = 'This live-class cannot be found on Quickom. You can <a href="{$a->recreate}">recreate it here</a> or <a href="{$a->delete}">delete it completely</a>.';
$string['quickomerr_meetingnotfound_info'] = 'This live-class cannot be found on Quickom. Please contact the live-class host if you have questions.';
$string['quickomerr_usernotfound'] = 'Unable to find your account on Quickom. If you are using Quickom for the first time, you must Quickom account by logging into Quickom <a href="{$a}" target="_blank">{$a}</a>. Once you\'ve activated your Quickom account, reload this page and continue setting up your live-class. Else make sure your email on Quickom matches your email on this system.';
$string['quickomurl'] = 'Quickom home page URL';
$string['quickomurl_desc'] = '';
$string['recurringmeeting'] = 'Recurring';
$string['recurringmeeting_help'] = 'Has no end date';
$string['recurringmeetinglong'] = 'Recurring live-class (live-class with no end date or time)';
$string['redefinelicenses'] = 'Redefine licenses';
$string['report'] = 'Reports';
$string['reportapicalls'] = 'Report API calls exhausted';
$string['requirepassword'] = 'Require live-class password';
$string['resetapicalls'] = 'Reset the number of available API calls';
$string['search:activity'] = 'Quickom - activity information';
$string['sessions'] = 'Sessions';
$string['showdescription'] = 'Display description on course page';
$string['start'] = 'Start';
$string['start_meeting'] = 'Start live-class with Quickom';
$string['start_time'] = 'When';
$string['starthostjoins'] = 'Start video when host joins';
$string['startpartjoins'] = 'Start video when participant joins';
$string['starttime'] = 'Start time';
$string['status'] = 'Status';
$string['title'] = 'Title';
$string['topic'] = 'Topic';
$string['unavailable'] = 'Unable to join at this time';
$string['updatemeetings'] = 'Update live-class settings from Quickom';
$string['usepersonalmeeting'] = 'Use personal live-class ID {$a}';
$string['webinar'] = 'Webinar';
$string['webinar_already_false'] = '<p><b>This module was already set as a live-class, not webinar. You cannot toggle this setting after creating the live-class.</b></p>';
$string['webinar_already_true'] = '<p><b>This module was already set as a webinar, not live-class. You cannot toggle this setting after creating the webinar.</b></p>';
$string['webinar_help'] = 'This option is only available to pre-authorized Quickom accounts.';
