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
 * Strings for component 'booking', language 'en', version '4.1'.
 *
 * @package     booking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutmodaloptiondateform'] = 'Create custom dates
(e.g. for blocked events or for single dates that differ from the date series).';
$string['accessdenied'] = 'Access denied';
$string['activatemails'] = 'Activate e-mails (confirmations, notifications and more)';
$string['active'] = 'Active';
$string['activitycompletionsuccess'] = 'All selected users have been marked for activity completion';
$string['activitycompletiontext'] = 'Message to be sent to user when booking option is completed';
$string['activitycompletiontext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['activitycompletiontextmessage'] = 'You have completed the following booking option:

{$a->bookingdetails}

Go to course: {$a->courselink}
See all booking options: {$a->bookinglink}';
$string['activitycompletiontextsubject'] = 'Booking option completed';
$string['add_optiondate_series'] = 'Create date series';
$string['addastemplate'] = 'Add as template';
$string['addbookingrule'] = 'Add rule';
$string['addcategory'] = 'Edit categories';
$string['addcustomfield'] = 'Add custom field';
$string['addholiday'] = 'Add holiday(s)';
$string['additionalpricecategories'] = 'Add or edit price categories';
$string['addmorebookings'] = 'Add more bookings';
$string['addnewcategory'] = 'Add new category';
$string['addnewinstitution'] = 'Add new institution';
$string['addnewlocation'] = 'Add new location';
$string['addnewreporttemplate'] = 'Add new report template';
$string['addnewtagtemplate'] = 'Add new tag template';
$string['addoptiondate'] = 'Add date';
$string['addpricecategory'] = 'Add price category';
$string['addpricecategory_info'] = 'You can add another price category';
$string['address'] = 'Address';
$string['addsemester'] = 'Add semester';
$string['addtocalendar'] = 'Add to course calendar';
$string['addtocalendardesc'] = 'Course calendar events are visible to ALL users within a course. If you do not want them to be created at all,
you can turn this setting off and lock it by default. Don\'t worry: user calendar events for booked options will still be created anyways.';
$string['addtogroup'] = 'Automatically enrol users in group';
$string['addtogroup_help'] = 'Automatically enrol users in group - group will be created automatically with name: Bookin name - Option name';
$string['addusertogroup'] = 'Add user to group:';
$string['advancedoptions'] = 'Advanced options';
$string['aftercompletedtext'] = 'After activity completed';
$string['aftercompletedtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['agreetobookingpolicy'] = 'I have read and agree to the following booking policies';
$string['alertrecalculate'] = '<b>Caution!</b> All prices will be recalculated and all old prices will be overwritten.';
$string['allbookingoptions'] = 'Download users for all booking options';
$string['allchangessaved'] = 'All changes have been saved.';
$string['allcomments'] = 'Everybody can comment';
$string['allmailssend'] = 'All e-mails to the users have been sent!';
$string['allowdelete'] = 'Allow users to cancel their booking themselves';
$string['allowupdate'] = 'Allow booking to be updated';
$string['allratings'] = 'Everybody can rate';
$string['allteachers'] = 'All teachers';
$string['allusersbooked'] = 'All {$a} selected users have successfully been assigned to this booking option.';
$string['alreadyonlist'] = 'You will be notified';
$string['alreadypassed'] = 'Already passed';
$string['answer'] = 'Answer';
$string['answered'] = 'Answered';
$string['applyunitfactor'] = 'Apply unit factor';
$string['applyunitfactor_desc'] = 'If this setting is active, the educational unit length (e.g. 45 min) set above will be used
 to calculate the number of educational units. This number will be used as factor for the price formula.
 Example: A booking option has a date series like "Mon, 15:00 - 16:30". So it lasts 2 educational units (45 min each).
 So a unit factor of 2 will be applied to the price formula.';
$string['asglobaltemplate'] = 'Use as global template';
$string['associatedcourse'] = 'Associated course';
$string['astemplate'] = 'Use as template in this course';
$string['attachedfiles'] = 'Attached files';
$string['attachical'] = 'Attach single iCal event per booking';
$string['attachicaldesc'] = 'Email notifications will include an attached iCal event, if this is enabled. The iCal will include only one start time and one end time either defined
in the booking option settings or start time of the first session to end time of the last session';
$string['attachicalsess'] = 'Attach all session dates as iCal events';
$string['attachicalsessdesc'] = 'Email notifications will include all session dates defined for a booking option as iCal attachment.';
$string['autcrheader'] = 'Automatic booking option creation';
$string['autcrwhatitis'] = 'If this option is enabled it automatically creates a new booking option and assigns a user as booking manager / teacher to it. Users are selected based on a custom user profile field value.';
$string['autoenrol'] = 'Automatically enrol users';
$string['autoenrol_help'] = 'If selected, users will be enrolled onto the relevant course as soon as they make the booking and unenrolled from that course as soon as the booking is cancelled.';
$string['automaticcoursecreation'] = 'Automatic creation of Moodle courses (PRO)';
$string['availability'] = 'Still available';
$string['availabilityconditions'] = 'Availability conditions';
$string['availabilityinfotexts_desc'] = 'Only available in the PRO version.';
$string['availabilityinfotexts_heading'] = 'Availability info texts for booking places and waiting list';
$string['available'] = 'Places available';
$string['availableplaces'] = 'Places available: {$a->available} of {$a->maxanswers}';
$string['backtoresponses'] = '&lt;&lt; Back to responses';
$string['banusernames'] = 'Ban usernames';
$string['banusernames_help'] = 'To limit which usernames can`t apply just write in this field, and separate with coma. To ban usernames, that end with gmail.com and yahoo.com just write: gmail.com, yahoo.com';
$string['banusernameswarning'] = 'Your username is banned so you can\'t book.';
$string['beforebookedtext'] = 'Before booked';
$string['beforebookedtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['beforecompletedtext'] = 'After booked';
$string['beforecompletedtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['biggerthan'] = 'is bigger than (number)';
$string['bo_cond_alreadybooked'] = 'alreadybooked: Is already booked by this user';
$string['bo_cond_alreadybooked_available'] = 'Not yet booked';
$string['bo_cond_alreadybooked_full_available'] = 'The user has not yet booked';
$string['bo_cond_alreadybooked_full_not_available'] = 'Booking option already booked';
$string['bo_cond_alreadybooked_not_available'] = 'Booked';
$string['bo_cond_booking_time'] = 'booking_time: Only bookable within a certain time';
$string['bo_cond_booking_time_available'] = 'Within normal booking times';
$string['bo_cond_booking_time_full_available'] = 'Within normal booking times. From {$a} until {$b}';
$string['bo_cond_booking_time_full_not_available'] = 'Not within normal booking times. From {$a} until {$b}';
$string['bo_cond_booking_time_not_available'] = 'Not within normal booking times.';
$string['bo_cond_customuserprofilefield_available'] = 'Book it';
$string['bo_cond_customuserprofilefield_field'] = 'Profile field';
$string['bo_cond_customuserprofilefield_full_available'] = 'Booking is possible';
$string['bo_cond_customuserprofilefield_full_not_available'] = 'Only user with customfield {$a->profilefield} set to value {$a->value} are allowed to book.
    <br>But you have the right to book a user anyways.';
$string['bo_cond_customuserprofilefield_not_available'] = 'Not allowed to book';
$string['bo_cond_customuserprofilefield_operator'] = 'Operator';
$string['bo_cond_customuserprofilefield_value'] = 'Value';
$string['bo_cond_fullybooked'] = 'fullybooked: Fully booked';
$string['bo_cond_fullybooked_available'] = 'Book it';
$string['bo_cond_fullybooked_full_available'] = 'Booking is possible';
$string['bo_cond_fullybooked_full_not_available'] = 'Fully booked. Booking not possible anymore.';
$string['bo_cond_fullybooked_not_available'] = 'Fully booked';
$string['bo_cond_fullybookedoverride'] = 'fullybookedoverride: Can be overbooked by staff';
$string['bo_cond_fullybookedoverride_available'] = 'Book it';
$string['bo_cond_fullybookedoverride_full_available'] = 'Booking is possible';
$string['bo_cond_fullybookedoverride_full_not_available'] = 'Already fully booked, but you have the right to book a user anyways.';
$string['bo_cond_fullybookedoverride_not_available'] = 'Fully booked';
$string['bo_cond_isbookable'] = 'isbookable: Booking is allowed';
$string['bo_cond_isbookable_available'] = 'Book it';
$string['bo_cond_isbookable_full_available'] = 'Booking is possible';
$string['bo_cond_isbookable_full_not_available'] = 'Booking is forbidden for this booking option.
    <br>But you have the right to book a user anyways.';
$string['bo_cond_isbookable_not_available'] = 'Not allowed to book';
$string['bo_cond_iscancelled'] = 'iscancelled: Booking option cancelled';
$string['bo_cond_iscancelled_available'] = 'Book it';
$string['bo_cond_iscancelled_full_available'] = 'Booking is possible';
$string['bo_cond_iscancelled_full_not_available'] = 'Cancelled - booking not possible';
$string['bo_cond_iscancelled_not_available'] = 'Cancelled';
$string['bo_cond_isloggedin'] = 'isloggedin: User is logged in';
$string['bo_cond_isloggedin_available'] = 'Book it';
$string['bo_cond_isloggedin_full_available'] = 'Booking is possible';
$string['bo_cond_isloggedin_full_not_available'] = 'User is not logged in.';
$string['bo_cond_isloggedin_not_available'] = 'Log in to book this optin.';
$string['bo_cond_max_number_of_bookings'] = 'max_number_of_bookings: Maximum number of bookings per user reached';
$string['bo_cond_max_number_of_bookings_available'] = 'Book it';
$string['bo_cond_max_number_of_bookings_full_available'] = 'Booking is possible';
$string['bo_cond_max_number_of_bookings_full_not_available'] = 'User has reached the max number of bookings';
$string['bo_cond_max_number_of_bookings_not_available'] = 'Max number of bookings reached';
$string['bo_cond_onnotifylist_available'] = 'Book it';
$string['bo_cond_onnotifylist_full_available'] = 'Booking is possible';
$string['bo_cond_onnotifylist_full_not_available'] = 'User has reached the max number of bookings';
$string['bo_cond_onnotifylist_not_available'] = 'Max number of bookings reached';
$string['bo_cond_onwaitinglist'] = 'onwaitinglist: User is on waiting list';
$string['bo_cond_onwaitinglist_available'] = 'Book it';
$string['bo_cond_onwaitinglist_full_available'] = 'Booking is possible';
$string['bo_cond_onwaitinglist_full_not_available'] = 'User is on waitinglist';
$string['bo_cond_onwaitinglist_not_available'] = 'Fully booked - You are on the waiting list';
$string['bo_cond_previouslybooked'] = 'previouslybooked: User has previously booked a certain option';
$string['bo_cond_previouslybooked_available'] = 'Book it';
$string['bo_cond_previouslybooked_full_available'] = 'Booking is possible';
$string['bo_cond_previouslybooked_full_not_available'] = 'Only user who have previously booked this <a href="{$a}">option</a> are allowed to book.
    <br>But you have the right to book a user anyways.';
$string['bo_cond_previouslybooked_not_available'] = 'Not allowed to book';
$string['bo_cond_previouslybooked_optionid'] = 'Booking option';
$string['bo_cond_priceisset'] = 'priceisset: Price is set';
$string['bo_cond_priceisset_available'] = 'Book it';
$string['bo_cond_priceisset_full_available'] = 'Booking is possible';
$string['bo_cond_priceisset_full_not_available'] = 'A price is set, payment required';
$string['bo_cond_priceisset_not_available'] = 'You need to pay';
$string['bo_cond_userprofilefield'] = 'userprofilefield: User profile field has a certain value';
$string['bo_cond_userprofilefield_available'] = 'Book it';
$string['bo_cond_userprofilefield_field'] = 'Profile field';
$string['bo_cond_userprofilefield_full_available'] = 'Booking is possible';
$string['bo_cond_userprofilefield_full_not_available'] = 'Only user with customfield {$a->profilefield} set to value {$a->value} are allowed to book.
    <br>But you have the right to book a user anyways.';
$string['bo_cond_userprofilefield_not_available'] = 'Not allowed to book';
$string['bo_cond_userprofilefield_operator'] = 'Operator';
$string['bo_cond_userprofilefield_value'] = 'Value';
$string['booked'] = 'Booked';
$string['bookedpast'] = 'Booked (course terminated)';
$string['bookedtext'] = 'Booking confirmation';
$string['bookedtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['bookedtextmessage'] = 'Your booking has been registered:

{$a->bookingdetails}
<p>##########################################</p>
Booking status: {$a->status}
Participant:   {$a->participant}

To view all your booked courses click on the following link: {$a->bookinglink}
The associated course can be found here: {$a->courselink}';
$string['bookedtextsubject'] = 'Booking confirmation for {$a->title}';
$string['bookedtextsubjectbookingmanager'] = 'New booking for {$a->title} by {$a->participant}';
$string['bookedusers'] = 'Booked users';
$string['booking'] = 'Booking';
$string['booking:addeditownoption'] = 'Add new option and edit own options.';
$string['booking:addinstance'] = 'Add new booking';
$string['booking:bookforothers'] = 'Book for others';
$string['booking:canseeinvisibleoptions'] = 'View invisible options.';
$string['booking:cansendmessages'] = 'Can send messages';
$string['booking:cantoggleformmode'] = 'User can edit all settings';
$string['booking:changelockedcustomfields'] = 'Can change locked custom booking option fields.';
$string['booking:choose'] = 'Book';
$string['booking:comment'] = 'Add comments';
$string['booking:communicate'] = 'Can communicate';
$string['booking:deleteresponses'] = 'Delete responses';
$string['booking:downloadresponses'] = 'Download responses';
$string['booking:managecomments'] = 'Manage comments';
$string['booking:manageoptiontemplates'] = 'Manage option templates';
$string['booking:rate'] = 'Rate chosen booking options';
$string['booking:readallinstitutionusers'] = 'Show all users';
$string['booking:readresponses'] = 'Read responses';
$string['booking:semesters'] = 'Booking: Semesters';
$string['booking:sendpollurl'] = 'Send poll url';
$string['booking:sendpollurltoteachers'] = 'Send poll url to teachers';
$string['booking:subscribeusers'] = 'Make bookings for other users';
$string['booking:updatebooking'] = 'Manage booking options';
$string['booking:viewallratings'] = 'View all raw ratings given by individuals';
$string['booking:viewanyrating'] = 'View total ratings that anyone received';
$string['booking:viewrating'] = 'View the total rating you received';
$string['booking_customfield'] = 'Booking customfields for booking options';
$string['bookingaction'] = 'Action';
$string['bookinganswer_cancelled'] = 'Booking option cancelled for/by user';
$string['bookingattachment'] = 'Attachment';
$string['bookingcategory'] = 'Category';
$string['bookingchangedtext'] = 'Message to be sent when a booking option changes (will only be sent to users who have already booked). Use the placeholder {changes} to show the changes. Enter 0 to turn off change notifications.';
$string['bookingchangedtext_help'] = 'Enter 0 to turn change notifications off.

You can use any of the following placeholders in the text:
<ul>
<li>{changes} - What has changed?</li>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['bookingchangedtextmessage'] = 'Your booking "{$a->title}" has changed.

Here\'s what\'s new:
{changes}

To view the change(s) and all your booked courses click on the following link: {$a->bookinglink}';
$string['bookingchangedtextsubject'] = 'Change notification for {$a->title}';
$string['bookingclosingtime'] = 'Until';
$string['bookingcondition'] = 'Condition';
$string['bookingdeleted'] = 'Your booking was cancelled';
$string['bookingduration'] = 'Duration';
$string['bookingfull'] = 'There are no available places';
$string['bookingfulldidntregister'] = 'Option is full, so I didn\'t transfer all users!';
$string['bookingimages'] = 'Upload header images for booking options - they need to have the exact same name as the value of the selected customfield in each booking option.';
$string['bookingimagescustomfield'] = 'Booking option custom field to match the header images with';
$string['bookinginstance'] = 'Booking instance';
$string['bookinginstancetemplatename'] = 'Booking instance template name';
$string['bookinginstancetemplatessettings'] = 'Booking instance templates';
$string['bookingmanagererror'] = 'The username entered is not valid. Either it does not exist or there are more then one users with this username (example: if you have mnet and local authentication enabled)';
$string['bookingmeanwhilefull'] = 'Meanwhile someone took already the last place';
$string['bookingname'] = 'Booking name';
$string['bookingnotopenyet'] = 'Your event starts in {$a} minutes. The link you used will redirect you if you click it again within 15 minutes before.';
$string['bookingopen'] = 'Open';
$string['bookingopeningtime'] = 'From';
$string['bookingoption_booked'] = 'Booking option booked';
$string['bookingoption_cancelled'] = 'Booking option cancelled';
$string['bookingoption_completed'] = 'Booking option completed';
$string['bookingoption_created'] = 'Booking option created';
$string['bookingoption_deleted'] = 'Booking option deleted';
$string['bookingoption_updated'] = 'Booking option updated';
$string['bookingoptioncalendarentry'] = '<a href="{$a}" class="btn btn-primary">Book now...</a>';
$string['bookingoptiondate_created'] = 'Booking option date created';
$string['bookingoptiondate_deleted'] = 'Booking option date deleted';
$string['bookingoptiondate_updated'] = 'Booking option date updated';
$string['bookingoptiondefaults'] = 'Default settings for booking options';
$string['bookingoptiondefaultsdesc'] = 'Here you can set default settings for the creation of booking options and lock them if needed.';
$string['bookingoptionimage'] = 'Upload an image';
$string['bookingoptionname'] = 'Booking option name';
$string['bookingoptionprice'] = 'Price';
$string['bookingoptionsfromtemplatemenu'] = 'New booking option from template';
$string['bookingoptionsmenu'] = 'Booking options';
$string['bookingoptiontext'] = 'Booking option text depending on booking status';
$string['bookingoptiontitle'] = 'Booking option title';
$string['bookingorganizatorname'] = 'Organizer name';
$string['bookingpassed'] = 'Your event has ended.';
$string['bookingplacesenoughmessage'] = 'Still enough booking places available.';
$string['bookingplacesfullmessage'] = 'No booking places available anymore.';
$string['bookingplacesinfotexts'] = 'Show availability info texts for booking places';
$string['bookingplacesinfotexts_info'] = 'Show short info messages instead of the number of available booking places.';
$string['bookingplaceslowmessage'] = 'Only a few booking places are left.';
$string['bookingplaceslowpercentage'] = 'Percentage for booking places low message';
$string['bookingplaceslowpercentagedesc'] = 'If the available booking places reach or get below this percentage a booking places low message will be shown.';
$string['bookingpoints'] = 'Course points';
$string['bookingpolicy'] = 'Booking policy';
$string['bookingpollurl'] = 'Poll url';
$string['bookingpollurlteachers'] = 'Teachers poll url';
$string['bookingpricecategory'] = 'Price category';
$string['bookingpricecategory_info'] = 'Define the name of the category, eg "students"';
$string['bookingpricesettings'] = 'Price settings';
$string['bookingpricesettings_desc'] = 'Here you can customize booking prices.';
$string['bookingrule'] = 'Rule';
$string['bookingruleaction'] = 'Action of the rule';
$string['bookingrulecondition'] = 'Condition of the rule';
$string['bookingrules'] = 'Booking: Define global rules (PRO)';
$string['bookingsaved'] = 'Your booking was successfully saved. You can now proceed to book other courses.';
$string['bookingsettings'] = 'Booking: Main settings';
$string['bookingtags'] = 'Tags';
$string['bookingtext'] = 'Booking text';
$string['booknow'] = 'Book now';
$string['bookotherusers'] = 'Book other users';
$string['bookotheruserslimit'] = 'Max. number of users a teacher assigned to the option can book';
$string['booktootherbooking'] = 'Book users to other booking';
$string['bookuserswithoutcompletedactivity'] = 'Book users without completed activity';
$string['bstcourse'] = 'Course';
$string['bstcoursestarttime'] = 'Date / Time';
$string['bstinstitution'] = 'Institution';
$string['bstlink'] = 'Show';
$string['bstlocation'] = 'Location';
$string['bstmanageresponses'] = 'Manage responses';
$string['bstparticipants'] = 'Participants';
$string['bstteacher'] = 'Teacher(s)';
$string['bsttext'] = 'Booking option';
$string['bstwaitinglist'] = 'On waiting list';
$string['btnbooknowname'] = 'Name of button: Book now';
$string['btncacname'] = 'Name of button: Confirm activity completion';
$string['btncancelname'] = 'Name of button: Cancel booking';
$string['btnviewavailable'] = 'View available options';
$string['cachedef_bookingoptions'] = 'Booking options (cache)';
$string['cachedef_bookingoptionsanswers'] = 'Booking options answers (cache)';
$string['cachedef_bookingoptionsettings'] = 'Booking option settings (cache)';
$string['cachedef_bookingoptionstable'] = 'Tables of booking options with hashed sql queries (cache)';
$string['cachedef_cachedbookinginstances'] = 'Booking instances (cache)';
$string['cachedef_cachedpricecategories'] = 'Booking price categories (cache)';
$string['cachedef_cachedprices'] = 'Prices in booking (cache)';
$string['cachedef_cachedsemesters'] = 'Semesters (cache)';
$string['caladdascourseevent'] = 'Add to calendar (visible only to course participants)';
$string['caladdassiteevent'] = 'Add to calendar (visible to all users)';
$string['caldonotadd'] = 'Do not add to course calendar';
$string['caleventtype'] = 'Calendar event visibility';
$string['cancancelbook'] = 'Allow user to cancel the booking during the booking period?';
$string['cancancelbookdays'] = 'Disallow users to cancel their booking n days before start. Minus means, that users can still cancel n days AFTER course start.';
$string['cancancelbookdaysno'] = 'Don\'t limit';
$string['cancel'] = 'Cancel';
$string['cancelallusers'] = 'Cancel booking for all users';
$string['cancelbooking'] = 'Cancel booking';
$string['canceloption'] = 'Cancel boooking option';
$string['canceloption_desc'] = 'Canceling a boooking option means that it is no longer bookabel, but it is still shown in list.';
$string['cancelreason'] = 'Reason for cancelation of this booking option';
$string['cancelthisbookingoption'] = 'Cancel this booking option';
$string['cannotremovesubscriber'] = 'You have to remove the activity completion prior to cancel the booking. Booking was not cancelled!';
$string['categories'] = 'Categories';
$string['category'] = 'Category';
$string['categoryname'] = 'Category name';
$string['cfgsignin'] = 'Sign-In Sheet Configuration';
$string['cfgsignin_desc'] = 'Configure the sign-in sheet settings';
$string['changeinfoadded'] = 'has been added:';
$string['changeinfocfadded'] = 'A field has been added:';
$string['changeinfocfchanged'] = 'A field has changed:';
$string['changeinfocfdeleted'] = 'A field has been deleted:';
$string['changeinfochanged'] = 'has changed:';
$string['changeinfodeleted'] = 'has been deleted:';
$string['changeinfosessionadded'] = 'A session has been added:';
$string['changeinfosessiondeleted'] = 'A session has been deleted:';
$string['changenew'] = '[NEW]';
$string['changeold'] = '[DELETED]';
$string['changesemester'] = 'Change Semester';
$string['changesemester:warning'] = '<strong>Be careful:</strong> By clicking "Save changes" all dates will be deleted
 and be replaced with dates of the chosen semester.';
$string['choose...'] = 'Choose...';
$string['choosecourse'] = 'Choose a course';
$string['choosecourse_help'] = 'Choose "New course" if you want a new Moodle course to be created for this booking option.';
$string['choosepdftitle'] = 'Select a title for the sign-in sheet';
$string['chooseperiod'] = 'Select time period';
$string['chooseperiod_help'] = 'Select a time period within to create the date series.';
$string['choosesemester'] = 'Choose semester';
$string['choosesemester_help'] = 'Choose the semester for which the holiday(s) should be created.';
$string['closed'] = 'Booking closed';
$string['comments'] = 'Comments';
$string['completed'] = 'Completed';
$string['completedcomments'] = 'Only with completed activity';
$string['completedratings'] = 'Only with completed activity';
$string['completionmodule'] = 'Upon completion of the selected course activity, enable bulk deletion of user bookings';
$string['completionmodule_help'] = 'Display bulk deletion button for booking answers, if another course module has been completed. The bookings of users will be deleted with a click of a button on the report page! Only activities with completion enabled can be selected from the list.';
$string['condition_select_student_in_bo_desc'] = 'Select all students of the booking option (affected by the rule) having a certain role.';
$string['condition_select_student_in_bo_roles'] = 'Choose role';
$string['condition_select_teacher_in_bo_desc'] = 'Select the teachers of the booking option (affected by the rule).';
$string['condition_select_user_from_event_desc'] = 'Choose a user who is somehow connected to the event';
$string['condition_select_user_from_event_type'] = 'Choose role';
$string['condition_select_users_userids'] = 'Select the users you want to target';
$string['condition_textfield'] = 'Value';
$string['conectedbooking'] = 'Connected booking';
$string['conectedbooking_help'] = 'Booking instance eligible for transferring booked users. You can define from which option within the selected booking instance and how many users you will accept.';
$string['confirmactivtyfrom'] = 'Confirm users activity from';
$string['confirmationmessagesettings'] = 'Confirmation e-mail settings';
$string['confirmbookingoffollowing'] = 'Please confirm the booking of following course';
$string['confirmcanceloption'] = 'Confirm cancelation of booking option';
$string['confirmcanceloptiontitle'] = 'Change the status of the booking option';
$string['confirmdeletebookingoption'] = 'Do you really want to delete this booking option?';
$string['confirmoptioncompletion'] = '(Un)confirm completion status';
$string['confirmpresence'] = 'Confirm presence';
$string['confirmusers'] = 'Confirm users activity';
$string['confirmuserswith'] = 'Confirm users who completed activity or received badge';
$string['contains'] = 'contains (text)';
$string['containsnot'] = 'does not contain (text)';
$string['copy'] = '- Copy';
$string['copyonlythisbookingurl'] = 'Copy this booking URL';
$string['copypollurl'] = 'Copy poll URL';
$string['copytoclipboard'] = 'Copy to clipboard: Ctrl+C, Enter';
$string['copytotemplate'] = 'Save booking option as template';
$string['copytotemplatesucesfull'] = 'Booking option was sucesfully saved as template.';
$string['coursedate'] = 'Date';
$string['courseendtime'] = 'End time of the course';
$string['coursepageshortinfo'] = 'If you want to book yourself for this course, click on "View available options", choose a booking option and then click on "Book now".';
$string['coursepageshortinfolbl'] = 'Short info';
$string['coursepageshortinfolbl_help'] = 'Choose a short info text to show on the course page.';
$string['coursestarttime'] = 'Start time of the course';
$string['courseurl'] = 'Course URL';
$string['createdbywunderbyte'] = 'Booking module created by Wunderbyte GmbH';
$string['createnewbookingoption'] = 'New booking option';
$string['createnewbookingoptionfromtemplate'] = 'Add a new booking option from template';
$string['csvfile'] = 'CSV file';
$string['csvfile_help'] = 'CSV file must contain only one column named Institution.';
$string['custom_field_changed'] = 'Custom field changed';
$string['customdatesbtn'] = '<i class="fa fa-plus-square"></i> Custom dates...';
$string['customdownloadreport'] = 'Download report';
$string['customfield'] = 'Custom field to be set in the booking option settings. It will then be shown in the booking option overview.';
$string['customfieldconfigure'] = 'Booking: Custom booking option fields';
$string['customfielddef'] = 'Custom booking option field';
$string['customfielddesc'] = 'After adding a custom field, you can define the value for the field in the booking option settings. The value will be shown in the booking option description.';
$string['customfieldname'] = 'Field name';
$string['customfieldname_help'] = 'You can enter any field name you want. The special fieldnames
                                    <ul>
                                        <li>TeamsMeeting</li>
                                        <li>ZoomMeeting</li>
                                        <li>BigBlueButtonMeeting</li>
                                    </ul> in combination with a link in the value field will render buttons and links
                                    which are only accessible during (and shortly before) the actual meetings.';
$string['customfieldoptions'] = 'List of possible values';
$string['customfields'] = 'Custom fields';
$string['customfieldtype'] = 'Field type';
$string['customfieldvalue'] = 'Value';
$string['customfieldvalue_help'] = 'You can enter any value you want (text, number or HTML).<br>
                                    If you have used one of the special field names
                                    <ul>
                                        <li>TeamsMeeting</li>
                                        <li>ZoomMeeting</li>
                                        <li>BigBlueButtonMeeting</li>
                                    </ul> then enter the complete link to the meeting session starting with https:// or http://';
$string['customlabels'] = 'Custom labels';
$string['customprofilefield'] = 'Custom profile field to check';
$string['customprofilefieldvalue'] = 'Custom profile field value to check';
$string['customreporttemplate'] = 'Custom report template';
$string['customreporttemplates'] = 'Custom report templates';
$string['dateandtime'] = 'Date and time';
$string['dateerror'] = 'Wrong date in line {$a}:';
$string['datenotset'] = 'Date not set';
$string['dateparseformat'] = 'Date parse format';
$string['dateparseformat_help'] = 'Please, use date format like specified in CSV file. Help with <a href="http://php.net/manual/en/function.date.php">this</a> resource for options.';
$string['dates'] = 'Dates';
$string['dayofweektime'] = 'Day & Time';
$string['days'] = '{$a} days';
$string['daystonotify'] = 'Number of days in advance of the event-start to notify participants';
$string['daystonotify2'] = 'Second notification before start of event to notify participants.';
$string['daystonotify_help'] = 'Will work only if start and end date of option are set! 0 for disabling this functionality.';
$string['daystonotifysession'] = 'Number of days in advance of the session start to notify participants';
$string['daystonotifysession_help'] = 'Enter 0 to deactivate the e-mail notification for this session.';
$string['daystonotifyteachers'] = 'Number of days in advance of the event-start to notify teachers (PRO)';
$string['defaultbookingoption'] = 'Default booking options';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['defaultpricecategoryname'] = 'Default price category name';
$string['defaultpriceformula'] = 'Price formula';
$string['defaultpriceformuladesc'] = 'The JSON object permits the configuration of the automatic price calculation with a booking option.';
$string['defaulttemplate'] = 'Default template';
$string['defaulttemplatedesc'] = 'Default booking option template when creating a new booking option.';
$string['defaultvalue'] = 'Default price value';
$string['defaultvalue_help'] = 'Enter a default value for every price in this category. Of course, this value can be overwritten later.';
$string['delcustfield'] = 'Delete this field and all associated field settings in the booking options';
$string['deletebooking'] = 'Do you really want to unsubscribe from following course? <br /><br /> <b>{$a} </b>';
$string['deletebookingrule'] = 'Delete rule';
$string['deletebookingrule_confirmtext'] = 'Do you really want to delete the following rule?';
$string['deletecategory'] = 'Delete';
$string['deletecustomfield'] = 'Delete custom field?';
$string['deletecustomfield_help'] = 'Caution: Setting this checkbox will delete the associated custom field when saving.';
$string['deletedbookingusermessage'] = 'Hello {$a->participant},

Your booking for {$a->title} ({$a->startdate} {$a->starttime}) has been cancelled.';
$string['deletedbookingusersubject'] = 'Booking for {$a->title} cancelled';
$string['deletedrule'] = 'Rule deleted.';
$string['deletedtext'] = 'Cancelled booking message (enter 0 to turn off)';
$string['deletedtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['deletedtextmessage'] = 'Booking option has been deleted: {$a->title}

User: {$a->participant}
Title: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Course: {$a->courselink}
Booking link: {$a->bookinglink}';
$string['deletedtextsubject'] = 'Deleted booking: {$a->title} by {$a->participant}';
$string['deletedusers'] = 'Deleted users';
$string['deleteholiday'] = 'Delete holiday';
$string['deleteoptiondate'] = 'Remove date';
$string['deleteresponsesactivitycompletion'] = 'Delete all users with completed activity: {$a}';
$string['deleterule'] = 'Delete';
$string['deletesemester'] = 'Delete semester';
$string['deletesubcategory'] = 'Please, first delete all subcategories of this category!';
$string['deletethisbookingoption'] = 'Delete this booking option';
$string['deleteuserfrombooking'] = 'Do you really want to delete the users from the booking?';
$string['delnotification'] = 'You deleted {$a->del} of {$a->all} users. Users, that have completed activity, can\'t be deleted!';
$string['delnotificationactivitycompletion'] = 'You deleted {$a->del} of {$a->all} users. Users, that have completed activity, can\'t be deleted!';
$string['description'] = 'Description';
$string['disablebookingusers'] = 'Disable booking of users - hide Book now button.';
$string['disablepricecategory'] = 'Disable price category';
$string['disablepricecategory_help'] = 'When you disable a price category, you will not be able to use it anymore.';
$string['donotselectcourse'] = 'No course selected';
$string['donotselecteventtype'] = 'No event type selected';
$string['donotselectinstitution'] = 'No institution selected';
$string['donotselectlocation'] = 'No location selected';
$string['dontaddpersonalevents'] = 'Dont add personal calendar events';
$string['dontaddpersonaleventsdesc'] = 'For each booked option and for all of its sessions, personal events are created in the moodle calendar. Suppressing them improves performance for heavy load sites.';
$string['dontuse'] = 'Don\'t use template';
$string['download'] = 'Download';
$string['downloadallresponses'] = 'Download all responses for all booking options';
$string['downloadusersforthisoptionods'] = 'Download users as .ods';
$string['downloadusersforthisoptionxls'] = 'Download users as .xls';
$string['duplicatebooking'] = 'Duplicate this booking option';
$string['duplicatename'] = 'This booking option name already exists. Please choose another one.';
$string['duplicationrestore'] = 'Duplication, backup and restore';
$string['duplicationrestoredesc'] = 'Here you can set which information you want to include when duplicating or backing up / restoring booking instances.';
$string['duplicationrestoreentities'] = 'Include entities';
$string['duplicationrestoreprices'] = 'Include prices';
$string['duplicationrestoreteachers'] = 'Include teachers';
$string['duration:minutes'] = 'Duration (minutes)';
$string['duration:units'] = 'Units ({$a} min)';
$string['editbookingoption'] = 'Edit booking option';
$string['editcategory'] = 'Edit';
$string['editingoptiondate'] = 'You are currently editing this session';
$string['editinstitutions'] = 'Edit institutions';
$string['editotherbooking'] = 'Other booking rules';
$string['editrule'] = 'Edit';
$string['edittag'] = 'Edit';
$string['editteachers'] = 'Edit';
$string['educationalunitinminutes'] = 'Length of an educational unit (minutes)';
$string['educationalunitinminutes_desc'] = 'Enter the length of an educational unit in minutes. It will be used to calculate the performed teaching units.';
$string['enable'] = 'Enable';
$string['enablecompletion'] = 'Count of entries';
$string['enablecompletiongroup'] = 'Require entries';
$string['enablepresence'] = 'Enable presence';
$string['endtimenotset'] = 'End date not set';
$string['enrolledcomments'] = 'Only enrolled';
$string['enrolledinoptions'] = 'alredy booked in booking options:';
$string['enrolledratings'] = 'Only enrolled';
$string['enrolmentstatus'] = 'Enrol users at course start time (Default: Not checked &rarr; enrol them immediately.)';
$string['enrolmentstatus_help'] = 'Notice: In order for automatic enrolment to work, you need to change the booking instance setting
 "Automatically enrol users" to "Yes".';
$string['enter_userprofilefield'] = 'Select users by entering a value for custom user profile field.';
$string['entervalidurl'] = 'Please, enter a valid URL!';
$string['equals'] = 'has exactly this value (text or number)';
$string['equalsnot'] = 'has not exactly this value (text or number)';
$string['error:choosevalue'] = 'You have to choose a value here.';
$string['error:coursecategoryvaluemissing'] = 'You need to choose a value here as it is needed as course category
 for the automatically created Moodle course.';
$string['error:entervalue'] = 'You have to enter a value here.';
$string['error:failedtosendconfirmation'] = 'The following user did not receive a confirmation mail

Booking status: {$a->status}
Participant: {$a->participant}
Booking option: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Link: {$a->bookinglink}
Associated course: {$a->courselink}';
$string['error:identifierexists'] = 'Choose another identifier. This one already exists.';
$string['error:invalidcmid'] = 'The report cannot be opened because no valid course module ID (cmid) was provided. It needs to be the cmid of a booking instance!';
$string['error:missingteacherid'] = 'Error: Report cannot be loaded because of missing teacherid.';
$string['error:mustnotbeempty'] = 'Must not be empty.';
$string['error:newcoursecategorycfieldmissing'] = 'You need to create a <a href="{$a->bookingcustomfieldsurl}" target="_blank">booking
 custom field</a> for new course categories first. After you have created one, make sure it is selected in the
 <a href="{$a->settingsurl}" target="_blank">Booking plugin settings</a>.';
$string['error:nofieldchosen'] = 'You have to choose a field.';
$string['error:reasonfornoteacher'] = 'Enter a reason why no teachers were present at this date.';
$string['error:reasonforsubstituteteacher'] = 'Enter a reason for the substitute teacher(s).';
$string['error:reasontoolong'] = 'Reason is too long, enter a shorter text.';
$string['error:wrongteacherid'] = 'Error: No user could be found for the provided "teacherid".';
$string['errorduplicatepricecategoryidentifier'] = 'Price category identifiers need to be unique.';
$string['errorduplicatepricecategoryname'] = 'Price category names need to be unique.';
$string['errorduplicatesemesteridentifier'] = 'Semester identifiers need to be unique.';
$string['errorduplicatesemestername'] = 'Semester names need to be unique.';
$string['erroremptycustomfieldname'] = 'Custom field name is not allowed to be empty.';
$string['erroremptycustomfieldvalue'] = 'Custom field value is not allowed to be empty.';
$string['erroremptypricecategoryidentifier'] = 'Price category identifier is not allowed to be empty.';
$string['erroremptypricecategoryname'] = 'Price category name is not allowed to be empty.';
$string['erroremptysemesteridentifier'] = 'Semester identifier is needed!';
$string['erroremptysemestername'] = 'Semester name is not allowed to be empty';
$string['errorholidayend'] = 'Holiday is not allowed to end before the start date.';
$string['errorholidaystart'] = 'Holiday is not allowed to start after the end date.';
$string['erroroptiondateend'] = 'Date end needs to be after date start.';
$string['erroroptiondatestart'] = 'Date start needs to be before date end.';
$string['errorpagination'] = 'Please enter a number bigger than 0';
$string['errorsemesterend'] = 'Semester end needs to be after semester start.';
$string['errorsemesterstart'] = 'Semester start needs to be before semester end.';
$string['errortoomanydecimals'] = 'Only 2 decimals are allowed.';
$string['eventalreadyover'] = 'This event is already over.';
$string['eventduration'] = 'Event duration';
$string['eventpoints'] = 'Points';
$string['eventreport_viewed'] = 'Report viewed';
$string['eventteacher_added'] = 'Teacher added';
$string['eventteacher_removed'] = 'Teacher removed';
$string['eventtype'] = 'Event type';
$string['eventtype_help'] = 'You can either enter the event type manually or choose from a list of previous event types.
                             You can choose one event type only. Once you save, the event type will be added to the list.';
$string['eventuserprofilefields_updated'] = 'Userprofile updated';
$string['excelfile'] = 'CSV file with activity completion';
$string['existingsubscribers'] = 'Existing subscribers';
$string['expired'] = 'Sorry, this activity closed on {$a} and is no longer available';
$string['fields'] = 'Fields to display in different contexts';
$string['fillinatleastoneoption'] = 'You need to provide at least two possible answers.';
$string['filterbtn'] = 'Filter';
$string['filterenddate'] = 'Until';
$string['filterstartdate'] = 'From';
$string['forcourse'] = 'for course';
$string['friday'] = 'Friday';
$string['full'] = 'Full';
$string['fullname'] = 'Full name';
$string['fullybooked'] = 'Fully booked';
$string['generatenewurl'] = 'Generate new short url';
$string['generaterecnum'] = 'Generate numbers';
$string['generaterecnumareyousure'] = 'This will generate new numbers and permanently delete the old one!';
$string['generaterecnumnotification'] = 'New numbers have been generated.';
$string['globalactivitycompletiontext'] = 'Message to be sent to user when booking option is completed (global template)';
$string['globalbookedtext'] = 'Booking confirmation (global template)';
$string['globalbookingchangedtext'] = 'Message to be sent when a booking option changes (will only be sent to users who have already booked). Use the placeholder {changes} to show the changes. Enter 0 to turn off change notifications. (Global template)';
$string['globalcurrency'] = 'Currency';
$string['globalcurrencydesc'] = 'Choose the currency for booking option prices';
$string['globaldeletedtext'] = 'Cancelled booking message (global template)';
$string['globalmailtemplates'] = 'Global mail templates';
$string['globalmailtemplates_desc'] = 'Only available in the PRO version. After activation, you can go to the settings of a booking instance and set the source of mail templates to global.';
$string['globalnotifyemail'] = 'Participant notification before start (global template)';
$string['globalnotifyemailteachers'] = 'Teacher notification before start (global template)';
$string['globalpollurlteacherstext'] = 'Message for the poll url sent to teachers (global template)';
$string['globalpollurltext'] = 'Message for sending poll url to booked users (global template)';
$string['globalstatuschangetext'] = 'Status change message (global template)';
$string['globaluserleave'] = 'User has cancelled his/her own booking (global template)';
$string['globalwaitingtext'] = 'Waiting list confirmation (global template)';
$string['goenrol'] = 'Go to registration';
$string['googleapikey'] = 'Google API key';
$string['googleapikey_desc'] = 'API key for Google URL Shortener. Get it here: https://developers.google.com/url-shortener/v1/getting_started#APIKey';
$string['gotobooking'] = '&lt;&lt; Bookings';
$string['gotobookingoption'] = 'Go to booking option';
$string['gotomanageresponses'] = '&lt;&lt; Manage responses';
$string['gotop'] = 'Go to top';
$string['groupdeleted'] = 'This booking instance creates groups automatically in the target course. But the group has been manually deleted in the target course. Activate the following checkbox in order to recreate the group';
$string['groupexists'] = 'The group already exists in the target course, please choose another name for the booking option';
$string['groupname'] = 'Group name';
$string['helptext:placeholders'] = '<p>
<a data-toggle="collapse" href="#collapsePlaceholdersHelptext" role="button" aria-expanded="false" aria-controls="collapsePlaceholdersHelptext">
  <i class="fa fa-question-circle" aria-hidden="true"></i><span>&nbsp;You can use the following placeholders...</span>
</a>
</p>
<div class="collapse" id="collapsePlaceholdersHelptext">
  <div class="card card-body">
    <ul>
        <li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
        <li>{gotobookingoption} - Link to booking option</li>
        <li>{status} - Booking status</li>
        <li>{participant}</li>
        <li>{email} - User email</li>
        <li>{title}</li>
        <li>{duration}</li>
        <li>{starttime}</li>
        <li>{endtime}</li>
        <li>{startdate}</li>
        <li>{enddate}</li>
        <li>{courselink}</li>
        <li>{bookinglink}</li>
        <li>{pollurl}</li>
        <li>{pollurlteachers}</li>
        <li>{location}</li>
        <li>{institution}</li>
        <li>{address}</li>
        <li>{eventtype}</li>
        <li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
        <li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
        <li>{pollstartdate}</li>
        <li>{qr_id} - Insert QR code with user id</li>
        <li>{qr_username} - Insert QR code with user username</li>
        <li>{dates} - Session times</li>
        <li>{shorturl} - Short URL of option</li>
        <li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
        <li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
    </ul>
  </div>
</div>';
$string['hidedescription'] = 'Hide description';
$string['hidelistoncoursepage'] = 'Hide list on course page (default)';
$string['holiday'] = 'Holiday';
$string['holidayend'] = 'End';
$string['holidayendactive'] = 'End is not on the same day';
$string['holidayname'] = 'Holiday name (optional)';
$string['holidays'] = 'Holidays';
$string['holidaystart'] = 'Holiday (start)';
$string['hours'] = '{$a} hours';
$string['howmanytimestorepeat'] = 'How many times to repeat?';
$string['howoftentorepeat'] = 'How often to repeat?';
$string['icalcancel'] = 'Include iCal event when booking is cancelled as cancelled event';
$string['icalcanceldesc'] = 'When a users cancels a booking or is removed from the booked users list, then attach an iCal attachment as cancelled event.';
$string['icalcfg'] = 'Configuration of the iCal attachements';
$string['icalcfgdesc'] = 'Configure the iCal.ics files that are attached to e-mail messages. These files alow adding the booking dates to the personal calendar.';
$string['icalfieldlocation'] = 'Text to display in iCal field location';
$string['icalfieldlocationdesc'] = 'Choose from the dropdown list what what text should be used for the calendar field location';
$string['import_failed'] = 'The import failed due to following reason:';
$string['import_partial'] = 'The import was only partially completed. There were problems with following lines and they were not imported:';
$string['importcsvbookingoption'] = 'Import CSV with booking options';
$string['importcsvtitle'] = 'Import CSV';
$string['importexcelbutton'] = 'Import activity completion';
$string['importexceltitle'] = 'Import activity completion';
$string['importfinished'] = 'Importing finished!';
$string['importinfo'] = 'Import info: You can use the following columns in the csv upload (Explanation in parenthesis)';
$string['inarray'] = 'user has one of these comma separated values';
$string['includeteachers'] = 'Include teachers in the sign-in sheet';
$string['info:teachersforoptiondates'] = 'Go to the <a href="{$a}" target="_self">teaching journal</a>, to manage teachers for specific dates.';
$string['infoalreadybooked'] = '<div class="infoalreadybooked"><i>You are already booked for this option.</i></div>';
$string['infonobookingoption'] = 'In order to add a booking option please use the settings block or the settings-icon on top of the page';
$string['infotext:prolicensenecessary'] = 'You need a Booking PRO license if you want to use this feature.
 <a href="https://wunderbyte.at/en/contact" target="_blank">Contact Wunderbyte</a> if you want to buy a PRO license.';
$string['infowaitinglist'] = '<div class="infowaitinglist"><i>You are on the waiting list for this option.</i></div>';
$string['instance_not_saved_no_valid_license'] = 'Booking instance could not be saved as template.
                                                  Upgrade to PRO version to save an unlimited number of templates.';
$string['instancesuccessfullysaved'] = 'This booking instance was sucesfully saved as template.';
$string['instancetemplate'] = 'Instance template';
$string['institution'] = 'Institution';
$string['institution_help'] = 'You can either enter the institution name manually or choose from a list of previous institutions.
                                    You can choose one institution only. Once you save, the institution will be added to the list.';
$string['institutionname'] = 'Institution name';
$string['institutions'] = 'Institutions';
$string['invisibleoption'] = 'Invisible booking option';
$string['invisibleoption:notallowed'] = 'You are not allowed to see this booking option.';
$string['isempty'] = 'field is empty';
$string['isnotempty'] = 'field is not empty';
$string['lblacceptingfrom'] = 'Name of label: Accepting from';
$string['lblbooking'] = 'Name of label: Booking';
$string['lblbooktootherbooking'] = 'Name of button: Book users to other booking option';
$string['lblinstitution'] = 'Name of label: Institution';
$string['lbllocation'] = 'Name of label: Location';
$string['lblname'] = 'Name of label: Name';
$string['lblnumofusers'] = 'Name of label: Num. of users';
$string['lblsputtname'] = 'Name of label: Send poll url to teachers';
$string['lblsurname'] = 'Name of label: Surname';
$string['lblteachname'] = 'Name of label: Teachers';
$string['leftandrightdate'] = '{$a->leftdate} to {$a->righttdate}';
$string['license_activated'] = 'PRO version activated successfully.<br>(Expires:';
$string['license_invalid'] = 'Invalid license key';
$string['licensekey'] = 'PRO license key';
$string['licensekeycfg'] = 'Activate PRO version';
$string['licensekeycfgdesc'] = 'With a PRO license you can create as many booking templates as you like and use PRO features such as global mail templates, waiting list info texts or teacher notifications.';
$string['licensekeydesc'] = 'Upload a valid license key to activate the PRO version.';
$string['limit'] = 'Limit';
$string['limitanswers'] = 'Limit the number of participants';
$string['limitanswers_help'] = 'If you change this option and you have booked people, you can remove them without notification!';
$string['linkgotobookingoption'] = 'Go to booked option: {$a}</a>';
$string['linknotavailableyet'] = 'The link to access the meeting is available only 15 minutes before the start until the end of the session.';
$string['linknotvalid'] = 'This link or meeting is not accessible.
If it is a meeting you have booked, please check again, shortly before start.';
$string['linktoteachersinstancereport'] = '<p><a href="{$a}" target="_self">&gt;&gt; Go to teachers report for booking instance</a></p>';
$string['location'] = 'Location';
$string['location_help'] = 'You can either enter the location name manually or choose from a list of previous locations.
                                    You can choose one location only. Once you save, the location will be added to the list.';
$string['lowerthan'] = 'is lower than (number)';
$string['mailconfirmationsent'] = 'You will shortly receive a confirmation e-mail';
$string['mailtemplatesadvanced'] = 'Activate advanced settings for e-mail templates';
$string['mailtemplatesglobal'] = 'Use global mail templates from plugin settings';
$string['mailtemplatesinstance'] = 'Use mail templates from this booking instance (default)';
$string['mailtemplatessource'] = 'Set source of mail templates (PRO)';
$string['mailtemplatessource_help'] = '<b>Caution:</b> If you choose global e-mail templates, the instance-specific mail
templates won\'t be used. Instead the e-mail templates specified in the booking plugin settings will be used. <br><br>
Please make sure that there are existing e-mail templates in the booking settings for each e-mail type.';
$string['managebooking'] = 'Manage';
$string['managebookinginstancetemplates'] = 'Manage booking instance templates';
$string['managecustomreporttemplates'] = 'Manage custom report templates';
$string['manageoptiontemplates'] = 'Manage option templates';
$string['manageresponses'] = 'Manage responses';
$string['match_userprofilefield'] = 'Select users by matching field in booking option and user profile field.';
$string['maxoverbooking'] = 'Max. number of places on waiting list';
$string['maxparticipantsnumber'] = 'Max. number of participants';
$string['maxperuser'] = 'Max current bookings per user';
$string['maxperuser_help'] = 'The maximum number of bookings an individual user can make in this activity at once. After an event end time has passed, it is no longer counted against this limit.';
$string['maxperuserwarning'] = 'You currently have used {$a->count} out of {$a->limit} maximum available bookings ({$a->eventtype}) for your user account';
$string['message_sent'] = 'Message sent';
$string['messageprovider:bookingconfirmation'] = 'Booking confirmations';
$string['messagesend'] = 'Your message has been sent.';
$string['messagesubject'] = 'Subject';
$string['messagetext'] = 'Message';
$string['minanswers'] = 'Min. number of participants';
$string['minutes'] = '{$a} minutes';
$string['missinghours'] = 'Missing hours';
$string['modaloptiondateformtitle'] = 'Custom dates';
$string['modulename'] = 'Booking';
$string['modulenameplural'] = 'Bookings';
$string['monday'] = 'Monday';
$string['moveoptionto'] = 'Move booking option to other booking instance';
$string['multiicalfiles'] = 'Attach one iCal file per date for MS Outlook 2010 compatibility';
$string['multiicalfilesdesc'] = 'Only MS Outlook 2010 does not support multiple dates within one iCal file. Previous and later version do support it (Ex. Outlook365). If you want to send MS Outlook compatible dates, then activate this option in order to attach multiple iCal files (one per date/event)';
$string['multiselect'] = 'Multiple selection';
$string['mustchooseone'] = 'You must choose an option before saving. Nothing was saved.';
$string['mustfilloutuserinfobeforebooking'] = 'Befor proceeding to the booking form, please fill in some personal booking information';
$string['mybookings'] = 'My bookings';
$string['mybookingsbooking'] = 'Booking (Course)';
$string['mybookingsoption'] = 'Option';
$string['myoptions'] = 'Options I manage';
$string['newcourse'] = 'New course';
$string['newcoursecategorycfield'] = 'Booking option custom field to be used as course category';
$string['newcoursecategorycfielddesc'] = 'Choose a booking option custom field which will be used as course category for automatically created
 courses using the dropdown entry "New course" in the form for creating new booking options.';
$string['newoptiondate'] = 'Create a new session...';
$string['newtemplatesaved'] = 'New template for booking option was saved.';
$string['next'] = 'Next';
$string['no'] = 'No';
$string['nobookingpossible'] = 'No booking possible.';
$string['nobookingselected'] = 'No booking option selected';
$string['nocancelreason'] = 'You need to give a reason for canceling this booking option';
$string['nocfnameselected'] = 'Nothing selected. Either type new name or select one from the list.';
$string['nocomments'] = 'Commenting disabled';
$string['nocourse'] = 'No course selected for this booking option';
$string['nodateset'] = 'Course date not set';
$string['nofieldchosen'] = 'No field chosen';
$string['nogrouporcohortselected'] = 'You need to select at least one group or cohort.';
$string['noguestchoose'] = 'Sorry, guests are not allowed to enter data';
$string['nopermissiontoaccesspage'] = '<div class="alert alert-danger" role="alert">You have no permission to access this page.</div>';
$string['nopricecategoriesyet'] = 'No price categories have been created yet.';
$string['nopricecategoryselected'] = 'Enter the name of a new price category';
$string['nopriceformulaset'] = 'No formula set on setting page. <a href="{$a->url}" target="_blank">Set it here.</a>';
$string['noratings'] = 'Ratings disabled';
$string['noresultsviewable'] = 'The results are not currently viewable.';
$string['norighttobook'] = 'Booking is not possible for your user role. Please contact the site administrator to give you the appropriate rights or enrol/sign in.';
$string['nosubscribers'] = 'There are no teachers assigned!';
$string['notallbooked'] = 'The following users could not be booked due to reaching the max number of bookings per user or lack of available places for the booking option: {$a}';
$string['notbooked'] = 'Not yet booked';
$string['notconectedbooking'] = 'Not connected';
$string['noteacherfound'] = 'The user specified as teacher on line {$a} does not exist on the platform.';
$string['noteacherset'] = 'No teacher';
$string['notemplate'] = 'Do not use as template';
$string['notes'] = 'Booking notes';
$string['notificationlist'] = 'Notification list';
$string['notificationlistdesc'] = 'When no place is available anymore, users can still register to be notified when there is an opening';
$string['notificationtext'] = 'Notification message';
$string['notificationtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['notifyemail'] = 'Participant notification before start';
$string['notifyemail_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['notifyemailmessage'] = 'Your booking will start soon:

Booking status: {$a->status}
Participant: {$a->participant}
Booking option: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
To view all your booked courses click on the following link: {$a->bookinglink}
The associated course can be found here: {$a->courselink}';
$string['notifyemailsubject'] = 'Your booking will start soon';
$string['notifyemailteachers'] = 'Teacher notification before start (PRO)';
$string['notifyemailteachers_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['notifyemailteachersmessage'] = 'Your booking will start soon:

{$a->bookingdetails}

You have <b>{$a->numberparticipants} booked participants</b> and <b>{$a->numberwaitinglist} people on the waiting list</b>.

To view all your booked courses click on the following link: {$a->bookinglink}
The associated course can be found here: {$a->courselink}';
$string['notifyemailteacherssubject'] = 'Your booking will start soon';
$string['notifyme'] = 'Notify when available';
$string['notinarray'] = 'user has none of these comma separated values';
$string['notopenyet'] = 'Sorry, this activity is not available until {$a}';
$string['notstarted'] = 'Not yet started';
$string['nouserfound'] = 'No user found:';
$string['nousers'] = 'No users!';
$string['numberrows'] = 'Number rows';
$string['numberrowsdesc'] = 'Number each row of the sign-in sheet. Number will be displayed left of the name in the same column';
$string['numgenerator'] = 'Enable rec. number generation?';
$string['numrec'] = 'Rec. num.';
$string['onlythisbookingurl'] = 'Link to this booking URL';
$string['onlyusersfrominstitution'] = 'You can only add users from this institution: {$a}';
$string['onwaitinglist'] = 'You are on the waiting list';
$string['option_template_not_saved_no_valid_license'] = 'Booking option template could not be saved as template.
                                                  Upgrade to PRO version to save an unlimited number of templates.';
$string['optionannotation'] = 'Internal annotation';
$string['optionannotation_help'] = 'Add internal remarks, annotations or anything you want. It will only be shown in this form and nowhere else.';
$string['optionbookablebody'] = '{$a->title} is now available again. <a href="{$a->url}">Click here</a> to directly go there.<br><br>
(You receive this mail because you have clicked on the notification button for this option.)';
$string['optionbookabletitle'] = '{$a->title} is available again';
$string['optiondate'] = 'Date';
$string['optiondateend'] = 'End';
$string['optiondatesmanager'] = 'Manage option dates';
$string['optiondatesmessage'] = 'Session {$a->number}: {$a->date} <br> From: {$a->starttime} <br> To: {$a->endtime}';
$string['optiondatessuccessfullydelete'] = 'Session time was deleted.';
$string['optiondatessuccessfullysaved'] = 'Session time was saved.';
$string['optiondatestart'] = 'Start';
$string['optiondatesteachersreport'] = 'Teaching Report / Replacement teachers';
$string['optiondatesteachersreport_desc'] = 'This report gives an overview of which teacher was present at which specific date.<br>
By default, every date will be filled in with the option\'s teacher. You can overwrite specific dates with replacement teachers.';
$string['optiondatestime'] = 'Session time';
$string['optionformconfig'] = 'Booking: Configure booking option form';
$string['optionformconfig:nobooking'] = 'You need to create at least one booking instance before you can use this form!';
$string['optionformconfigsaved'] = 'Configuration for the booking option form saved.';
$string['optionformconfigsubtitle'] = '<p>Turn off features you do not need, in order to make the booking option form clearer for your administrators.</p>
<p><strong>BE CAREFUL:</strong> Only deactivate fields if you are completely sure that you won\'t need them!</p>';
$string['optionid'] = 'Option ID';
$string['optionidentifier'] = 'Unique identifier';
$string['optionidentifier_help'] = 'Add a unique identifier for this booking option.';
$string['optioninvisible'] = 'Hide from normal users (visible to entitled users only)';
$string['optionmenu'] = 'This booking option';
$string['optionsfields'] = 'Fields on the booking options overview page';
$string['optiontemplate'] = 'Option template';
$string['optiontemplatename'] = 'Option template name';
$string['optiontemplatessettings'] = 'Booking option templates';
$string['optionvisibility'] = 'Visibility';
$string['optionvisibility_help'] = 'Here you can choose whether the option should be visible for everyone or if it should be hidden from normal users and be visible to entitled users only.';
$string['optionvisible'] = 'Visible to everyone (default)';
$string['organizatorname'] = 'Organizer name';
$string['organizatorname_help'] = 'You can either enter the organizer name manually or choose from a list of previous organizers.
                                    You can choose one organizer only. Once you save, the organizer will be added to the list.';
$string['otherbookingaddrule'] = 'Add new rule';
$string['otherbookinglimit'] = 'Limit';
$string['otherbookinglimit_help'] = 'How many users you accept from option. If 0, you can accept unlimited users.';
$string['otherbookingnumber'] = 'Num. of users';
$string['otherbookingoptions'] = 'Accepting from';
$string['otherbookingsuccessfullysaved'] = 'Rule saved!';
$string['overridecondition'] = 'Condition';
$string['overrideconditioncheckbox'] = 'Has relation to other condition';
$string['overrideoperator'] = 'Operator';
$string['overrideoperator:and'] = 'AND';
$string['overrideoperator:or'] = 'OR';
$string['paginationnum'] = 'N. of records - pagination';
$string['pdflandscape'] = 'Landscape';
$string['pdfportrait'] = 'Portrait';
$string['pluginadministration'] = 'Booking administration';
$string['pluginname'] = 'Booking';
$string['pollstrftimedate'] = '%Y-%m-%d';
$string['pollurl'] = 'Poll url';
$string['pollurl_help'] = 'You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['pollurlteachers'] = 'Teachers poll url';
$string['pollurlteachers_help'] = 'You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{numberparticipants} - Number of participants (without waiting list)</li>
<li>{numberwaitinglist} - Number of participants on the waiting list</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['pollurlteacherstext'] = 'Message for the poll url sent to teachers';
$string['pollurlteacherstext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['pollurlteacherstextmessage'] = 'Please take the survey:

Survey URL: <a href="{pollurlteachers}" target="_blank">{pollurlteachers}</a>';
$string['pollurlteacherstextsubject'] = 'Please take the survey';
$string['pollurltext'] = 'Message for sending poll url to booked users';
$string['pollurltext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['pollurltextmessage'] = 'Please take the survey:

Survey URL: <a href="{pollurl}" target="_blank">{pollurl}</a>';
$string['pollurltextsubject'] = 'Please take the survey';
$string['populatefromtemplate'] = 'Populate from template';
$string['potentialsubscribers'] = 'Potential subscribers';
$string['presence'] = 'Presence';
$string['previous'] = 'Previous';
$string['price'] = 'Price';
$string['pricecategories'] = 'Booking: Price categories';
$string['pricecategoriessaved'] = 'Price categories were saved';
$string['pricecategoriessubtitle'] = '<p>Here you can define different price categories, e.g.
    special price categories for students, employees or externals.
    <b>Be careful:</b> Once you have added a category, you cannot delete it.
    Only disable or rename it.</p>';
$string['pricecategory'] = 'Price category';
$string['pricecategory_changed'] = 'Price category changed';
$string['pricecategoryfield'] = 'User profile field for price category';
$string['pricecategoryfielddesc'] = 'Choose the user profile field, which stores the price category identifier for each user.';
$string['pricecategoryfieldoff'] = 'Do not show';
$string['pricecategoryidentifier'] = 'Price category identifier';
$string['pricecategoryidentifier_help'] = 'Enter a short text to identify the category, e.g. "stud" or "acad".';
$string['pricecategoryname'] = 'Price category name';
$string['pricecategoryname_help'] = 'Enter the full name of the price category to be shown in booking options, e.g. "Student price".';
$string['pricecatsortorder'] = 'Sort order (number)';
$string['pricecatsortorder_help'] = 'Enter a full number. "1" means that the price category will be shown at first place, "2" at second place etc.';
$string['pricecurrency'] = 'Currency';
$string['priceformulaadd'] = 'Absolute value';
$string['priceformulaadd_help'] = 'Additional value to <strong>add</strong> to the result.';
$string['priceformulainfo'] = '<a data-toggle="collapse" href="#priceformula" role="button" aria-expanded="false" aria-controls="priceformula">
<i class="fa fa-code"></i> Show JSON for price formula...
</a>
<div class="collapse" id="priceformula">
<samp>{$a->formula}</samp>
</div><br>
<a href="/admin/settings.php?section=modsettingbooking" target="_blank"><i class="fa fa-edit"></i> Edit formula...</a><br><br>
Below, you can additionally add a manual factor (multiplication) and an absolute value (addition) to be added to the formula.';
$string['priceformulaisactive'] = 'On saving, calculate prices with price formula (this will overwrite current prices).';
$string['priceformulamultiply'] = 'Manual factor';
$string['priceformulamultiply_help'] = 'Additional value to <strong>multiply</strong> the result with.';
$string['priceformulaoff'] = 'Prevent recalculation of prices';
$string['priceformulaoff_help'] = 'Activate this option, in order to prevent the function "Calculate all prices from
 instance with formula" from recalculating the prices for this booking option.';
$string['privacy:metadata:booking_answers'] = 'Represents a booking of an event';
$string['privacy:metadata:booking_answers:bookingid'] = 'ID of the booking instance';
$string['privacy:metadata:booking_answers:completed'] = 'User that booked has completed the task';
$string['privacy:metadata:booking_answers:frombookingid'] = 'ID of connected booking';
$string['privacy:metadata:booking_answers:notes'] = 'Additional notes';
$string['privacy:metadata:booking_answers:numrec'] = 'Record number';
$string['privacy:metadata:booking_answers:optionid'] = 'ID of the booking option';
$string['privacy:metadata:booking_answers:status'] = 'Status info for this booking';
$string['privacy:metadata:booking_answers:timecreated'] = 'Timestamp when booking was created';
$string['privacy:metadata:booking_answers:timemodified'] = 'Timestamp when booking was last modified';
$string['privacy:metadata:booking_answers:userid'] = 'User that is booked for this event';
$string['privacy:metadata:booking_answers:waitinglist'] = 'True if user is on the waitinglist';
$string['privacy:metadata:booking_icalsequence'] = 'Ical sequence';
$string['privacy:metadata:booking_icalsequence:optionid'] = 'Booking option ID for ical';
$string['privacy:metadata:booking_icalsequence:sequencevalue'] = 'Ical sequence value';
$string['privacy:metadata:booking_icalsequence:userid'] = 'User ID for ical';
$string['privacy:metadata:booking_ratings'] = 'Your rating of an event';
$string['privacy:metadata:booking_ratings:optionid'] = 'ID of the rated booking option';
$string['privacy:metadata:booking_ratings:rate'] = 'Rate that was assigned';
$string['privacy:metadata:booking_ratings:userid'] = 'User that rated this event';
$string['privacy:metadata:booking_teachers'] = 'Teacher(s) of an event';
$string['privacy:metadata:booking_teachers:bookingid'] = 'ID of booking instance for teacher';
$string['privacy:metadata:booking_teachers:calendarid'] = 'ID of calendar event for teacher';
$string['privacy:metadata:booking_teachers:completed'] = 'If task is completed for the teacher';
$string['privacy:metadata:booking_teachers:optionid'] = 'ID of the booking option which is taught';
$string['privacy:metadata:booking_teachers:userid'] = 'User that is teaching this event';
$string['privacy:metadata:booking_userevents'] = 'User events in calendar';
$string['privacy:metadata:booking_userevents:eventid'] = 'ID of event in events table';
$string['privacy:metadata:booking_userevents:optiondateid'] = 'ID of optiondate (session) for user event';
$string['privacy:metadata:booking_userevents:optionid'] = 'ID of booking option for user event';
$string['privacy:metadata:booking_userevents:userid'] = 'User ID for user event';
$string['problemsofcohortorgroupbooking'] = '<br><p>Not all users could be booked with cohort booking:</p>
<ul>
<li>{$a->notenrolledusers} users are not enrolled in the course</li>
<li>{$a->notsubscribedusers} users not booked for other reasons</li>
</ul>';
$string['progressbars'] = 'Progress bars of time passed (PRO)';
$string['progressbars_desc'] = 'Get a visual representation of the time which has already passed for a booking option.';
$string['progressbarscollapsible'] = 'Make progress bars collapsible';
$string['proversiononly'] = 'Upgrade to Booking PRO to use this feature.';
$string['question'] = 'Question';
$string['ratings'] = 'Bookingoption ratings';
$string['ratingsuccessful'] = 'The ratings were successfully updated';
$string['reason'] = 'Reason';
$string['recalculateall'] = 'Calculate all prices';
$string['recalculateprices'] = 'Calculate all prices from instance with formula';
$string['recreategroup'] = 'Recreate group in the target course and enrol users in group';
$string['recurringheader'] = 'Recurring options';
$string['reminder1_sent'] = 'First reminder sent';
$string['reminder2_sent'] = 'Second reminder sent';
$string['reminder_teacher_sent'] = 'Teacher reminder sent';
$string['removeafterminutes'] = 'Remove activity completion after N minutes';
$string['removeresponses'] = 'Remove all responses';
$string['removeuseronunenrol'] = 'Remove user from booking upon unenrolment from associated course?';
$string['reoccurringdatestring'] = 'Weekday, start and end time (Day, HH:MM - HH:MM)';
$string['reoccurringdatestring_help'] = 'Enter a text in the following format:
    "Day, HH:MM - HH:MM", e.g. "Monday, 10:00 - 11:00" or "Sun 09:00-10:00" or "block" for blocked events.';
$string['reoccurringdatestringerror'] = 'Enter a text in the following format:
    Day, HH:MM - HH:MM or "block" for blocked events.';
$string['repeatthisbooking'] = 'Repeat this option';
$string['reportfields'] = 'Downlodable responses fields (csv, xls-Download)';
$string['reportremindermessage'] = '{$a->bookingdetails}';
$string['reportremindersubject'] = 'Reminder: Your booked course';
$string['reservedusers'] = 'Users with shortterm reservations';
$string['reset'] = 'Reset';
$string['responses'] = 'Responses';
$string['responsesfields'] = 'Fields on the manage responses page';
$string['responsesto'] = 'Responses to {$a}';
$string['restrictanswerperiodclosing'] = 'Booking option is available until a certain date';
$string['restrictanswerperiodopening'] = 'Booking option is availably only after a certain date';
$string['restrictwithcustomuserprofilefield'] = 'A custom user profile field should have a certain value';
$string['restrictwithpreviouslybooked'] = 'User has previously booked a certain option';
$string['restrictwithuserprofilefield'] = 'A chosen user profile field should have a certain value';
$string['resultofcohortorgroupbooking'] = '<p>This is the result of your cohort booking:</p>
<ul>
<li>{$a->sumcohortmembers} users found in the selected cohorts</li>
<li>{$a->sumgroupmembers} users found in the selected groups</li>
<li><b>{$a->subscribedusers} users where booked for this option</b></li>
</ul>';
$string['rootcategory'] = 'Root';
$string['roundpricesafterformula'] = 'Round prices (price formula)';
$string['roundpricesafterformula_desc'] = 'If active, prices will be rounded to full numbers (no decimals) after the <strong>price formula</strong> has been applied.';
$string['rule_customprofilefield'] = 'Custom user profile field';
$string['rule_datefield'] = 'Date field';
$string['rule_days'] = 'Number of days before';
$string['rule_daysbefore'] = 'Trigger n days before a certain date';
$string['rule_daysbefore_desc'] = 'Choose a date field of booking options and the number of days BEFORE that date.';
$string['rule_event'] = 'Event';
$string['rule_mailtemplate'] = 'Mail template';
$string['rule_name'] = 'Custom name for the rule';
$string['rule_operator'] = 'Operator';
$string['rule_optionfield'] = 'Option field to compare';
$string['rule_optionfield_address'] = 'Address (address)';
$string['rule_optionfield_bookingclosingtime'] = 'End of allowed booking period (bookingclosingtime)';
$string['rule_optionfield_bookingopeningtime'] = 'Start of allowed booking period (bookingopeningtime)';
$string['rule_optionfield_courseendtime'] = 'End (courseendtime)';
$string['rule_optionfield_coursestarttime'] = 'Begin (coursestarttime)';
$string['rule_optionfield_location'] = 'Location (location)';
$string['rule_optionfield_text'] = 'Name of the booking option (text)';
$string['rule_react_on_event'] = 'React on event';
$string['rule_react_on_event_desc'] = 'Choose an event that should trigger the rule.';
$string['rule_sendmail_cpf'] = '[Preview] Send an e-mail to user with custom profile field';
$string['rule_sendmail_cpf_desc'] = 'Choose an event that should trigger the "Send an e-mail" rule. Enter an e-mail template
 (you can use placeholders like {bookingdetails}) and define to which users the e-mail should be sent.
  Example: All users having the value "Vienna center" in a custom user profile field called "Study center".';
$string['rule_value'] = 'Value';
$string['saturday'] = 'Saturday';
$string['saveinstanceastemplate'] = 'Add booking instance to template';
$string['savenewtagtemplate'] = 'Save';
$string['scgfbookgroupscohorts'] = 'Book cohort(s) or group(s)';
$string['scgfcohortheader'] = 'Cohort subscription';
$string['scgfgroupheader'] = 'Group subscription';
$string['scgfselectcohorts'] = 'Select cohort(s)';
$string['scgfselectgroups'] = 'Select group(s)';
$string['search'] = 'Search...';
$string['searchdate'] = 'Date';
$string['searchname'] = 'First name';
$string['searchsurname'] = 'Last name';
$string['searchtag'] = 'Search tags';
$string['searchwaitinglist'] = 'On waiting list';
$string['select'] = 'Selection';
$string['select_student_in_bo'] = 'Select users of a booking option';
$string['select_teacher_in_bo'] = 'Select teachers of a booking option';
$string['select_user_from_event'] = 'Select user from event';
$string['select_users'] = 'Directly select users without connection to the booking option';
$string['selectanoption'] = 'Please, select a booking option';
$string['selectatleastoneuser'] = 'Please, select at least 1 user!';
$string['selectcategory'] = 'Select parent category';
$string['selectfield'] = 'Drop-down list';
$string['selectoptionid'] = 'Please, select option!';
$string['selectoptioninotherbooking'] = 'Option';
$string['selectpresencestatus'] = 'Choose presence status';
$string['semester'] = 'Semester';
$string['semesterend'] = 'Last day of semester';
$string['semesterend_help'] = 'The day the semester ends';
$string['semesteridentifier'] = 'Identifier';
$string['semesteridentifier_help'] = 'Short text to identify the semester, e.g. "ws22".';
$string['semestername'] = 'Name';
$string['semestername_help'] = 'Enter the full name of the semester, e.g. "Semester of Winter 2021/22"';
$string['semesters'] = 'Semesters';
$string['semesterssaved'] = 'Semesters have been saved';
$string['semesterssubtitle'] = 'Here you can add, change or delete <strong>semesters and holidays</strong>.
    After saving, the entries will be ordered by their <strong>start date in descending order</strong>.';
$string['semesterstart'] = 'First day of semester';
$string['semesterstart_help'] = 'The day the semester starts.';
$string['send_mail'] = 'Send email';
$string['sendcopytobookingmanger'] = 'Send confirmation e-mail to booking manager';
$string['sendcustommessage'] = 'Send custom message';
$string['sendmailtobooker'] = 'Book other users page: Send mail to user who books instead to users who are booked';
$string['sendmailtobooker_help'] = 'Activate this option in order to send booking confirmation mails to the user who books other users instead to users, who have been added to a booking option. This is only relevant for bookings made on the page "book other users".';
$string['sendpollurltoteachers'] = 'Send poll url';
$string['sendreminderemail'] = 'Send reminder e-mail';
$string['sendreminderemailsuccess'] = 'Notification e-mail has been sent!';
$string['sessionnotifications'] = 'E-mail notifications for each session';
$string['sessionremindermailmessage'] = '<p>Keep in mind: You are booked for the following session:</p>
<p>{$a->optiontimes}</p>
<p>##########################################</p>
<p>{$a->sessiondescription}</p>
<p>##########################################</p>
<p>Booking status: {$a->status}</p>
<p>Participant: {$a->participant}</p>';
$string['sessionremindermailsubject'] = 'Reminder: You have an upcoming session';
$string['sessions'] = 'Session(s)';
$string['shortcodeslistofbookingoptions'] = 'List of booking options';
$string['shorturl'] = 'Short URL of this option';
$string['showactive'] = 'Active bookings';
$string['showallbookings'] = 'All bookings';
$string['showcoursenameandbutton'] = 'Show course name, short info and a button redirecting to the available booking options';
$string['showcustomfields'] = 'Custom booking option fields';
$string['showcustomfields_desc'] = 'Select the custom booking option fields to be shown on the sign-in sheet';
$string['showdates'] = 'Show dates';
$string['showdescription'] = 'Show description';
$string['showdescriptioninline'] = 'Show full descriptions inline (right inside the table)';
$string['showdescriptionmodal'] = 'Show info links (default)';
$string['showdescriptionmode'] = 'Choose description mode';
$string['showdescriptionmode_help'] = 'You can choose how to show descriptions: You can show them only after clicking on info links or inline - right inside the table.';
$string['showhelpfullnavigationlinks'] = 'Show navigation links.';
$string['showhelpfullnavigationlinks_help'] = 'Show \'Go to registration\' and \'Go to top\' links.';
$string['showinapi'] = 'Show in API?';
$string['showlistoncoursepage'] = 'Show list on course page';
$string['showlistoncoursepagelbl'] = 'Show available booking options on course page';
$string['showlistoncoursepagelbl_help'] = 'If you activate this setting, a list of available booking options will be
                                            shown right on the course page below the link of the booking instance.
                                            You can also choose to show only the course name, a short info and a button
                                            redirecting to the available booking options.';
$string['showmybookingsonly'] = 'My bookings';
$string['showonlymyinstitutions'] = 'My institution';
$string['showprogressbars'] = 'Show progress bars of time passed';
$string['showviews'] = 'Views to show in the booking options overview';
$string['sign_in_sheet_download'] = 'Download sign-in sheet';
$string['signature'] = 'Signature';
$string['signinadddatemanually'] = 'Add date manually';
$string['signinaddemptyrows'] = 'Add empty rows';
$string['signincustfields'] = 'Custom profile fields';
$string['signincustfields_desc'] = 'Select the custom profiles fields to be shown on the sign-in sheet';
$string['signinextracols'] = 'Additional column';
$string['signinextracols_desc'] = 'You can print up to 3 additional columns on the sign-in sheet. Fill in the column title or leave it blank for no additional column';
$string['signinextracols_heading'] = 'Additional columns on the sign-in sheet';
$string['signinextrasessioncols'] = 'Add extra columns for dates';
$string['signinhidedate'] = 'Hide date';
$string['signinlogo'] = 'Logo to display on the sign-in sheet';
$string['signinlogofooter'] = 'Logo in footer to display on the sign-in sheet';
$string['signinlogoheader'] = 'Logo in header to display on the sign-in sheet';
$string['signinonesession'] = 'Display date(s) in the header';
$string['signinsheetaddress'] = 'Address:';
$string['signinsheetdate'] = 'Date(s):';
$string['signinsheetdatetofillin'] = 'Date:';
$string['signinsheetfields'] = 'Sign-in sheet fields (PDF)';
$string['signinsheetlocation'] = 'Location:';
$string['spaceleft'] = 'space available';
$string['spacesleft'] = 'spaces available';
$string['startendtimeknown'] = 'Start and end time of course are known';
$string['starttimenotset'] = 'Start date not set';
$string['status'] = 'Status';
$string['status_attending'] = 'Attending';
$string['status_complete'] = 'Complete';
$string['status_failed'] = 'Failed';
$string['status_incomplete'] = 'Incomplete';
$string['status_noshow'] = 'No show';
$string['status_unknown'] = 'Unknown';
$string['statuschangetext'] = 'Status change message';
$string['statuschangetext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['statuschangetextmessage'] = 'Hello {$a->participant}!

Your booking status has changed.

Booking status: {$a->status}

Participant:   {$a->participant}
Booking option: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}

Go to the booking option: {$a->gotobookingoption}';
$string['statuschangetextsubject'] = 'Booking status has changed for {$a->title}';
$string['studentbooked'] = 'Users who booked';
$string['studentdeleted'] = 'Users who were already deleted';
$string['studentnotificationlist'] = 'Users on the notification list';
$string['studentwaitinglist'] = 'Users on the waiting list';
$string['submitandaddnew'] = 'Save and add new';
$string['submitandgoback'] = 'Save and go back';
$string['subscribersto'] = 'Teachers for \'{$a}\'';
$string['subscribetocourse'] = 'Enrol users in the course';
$string['subscribeuser'] = 'Do you really want to enrol the users in the following course';
$string['substitutions'] = 'Substitution(s)';
$string['successfulcalculation'] = 'Price calculation successful!';
$string['successfulldeleted'] = 'Category was deleted!';
$string['successfulldeletedinstitution'] = 'Institution was deleted';
$string['sucesfullcompleted'] = 'Activity was sucesfully completed for users.';
$string['sucesfullytransfered'] = 'Users were sucesfully transfered.';
$string['sum_units'] = 'Sum of units';
$string['sunday'] = 'Sunday';
$string['tableheader_courseendtime'] = 'Course end';
$string['tableheader_coursestarttime'] = 'Course start';
$string['tableheader_maxanswers'] = 'Available places';
$string['tableheader_maxoverbooking'] = 'Waiting list places';
$string['tableheader_minanswers'] = 'Min. number of participants';
$string['tableheader_teacher'] = 'Teacher(s)';
$string['tableheader_text'] = 'Course name';
$string['tagdeleted'] = 'Tag template was deleted!';
$string['tagsuccessfullysaved'] = 'Tag was saved.';
$string['tagtag'] = 'Tag';
$string['tagtemplates'] = 'Tag templates';
$string['tagtext'] = 'Text';
$string['taken'] = 'Taken';
$string['task_clean_booking_db'] = 'Booking: Clean database';
$string['task_enrol_bookedusers_tocourse'] = 'Booking: Enrol booked users to course';
$string['task_remove_activity_completion'] = 'Booking: Remove activity completion';
$string['task_send_completion_mails'] = 'Booking: Send completion mails';
$string['task_send_confirmation_mails'] = 'Booking: Send confirmation mails';
$string['task_send_mail_by_rule_adhoc'] = 'Booking: Send mail by rule (adhoc task)';
$string['task_send_notification_mails'] = 'Booking: Send notification mails';
$string['task_send_reminder_mails'] = 'Booking: Send reminder mails';
$string['teacher'] = 'Teacher';
$string['teacherroleid'] = 'Subscribe teacher with that role to the course';
$string['teachers'] = 'Teachers';
$string['teachers_instance_report'] = 'Teachers report';
$string['teachersforoption'] = 'Teachers';
$string['teachersforoption_help'] = '<b>BE CAREFUL: </b>When adding teachers here, they will also be <b>added to EACH date</b> in the teaching report.
When deleting teachers here, they will be <b>removed from EACH date</b> in the teaching report!';
$string['teachersinstancereport:subtitle'] = '<strong>Hint:</strong> The number of units of a course (booking option) is calculated by the duration of an educational unit
 which you can <a href="/admin/settings.php?section=modsettingbooking" target="_blank">set in the booking settings</a> and the specified date series string (e.g. "Tue, 16:00-17:30").
 For blocked events or booking options missing this string, the number of units cannot be calculated!';
$string['teachingreportforinstance'] = 'Teaching overview report for';
$string['teachingreportfortrainer'] = 'Report of performed teaching units for trainer';
$string['teachingreportfortrainer:subtitle'] = '<strong>Hint:</strong> You can change the duration of
an educational unit in the plugin settings (e.g. 45 instead of 60 minutes).<br/>
<a href="/admin/settings.php?section=modsettingbooking" target="_blank">
&gt;&gt; Go to plugin settings...
</a>';
$string['templatedeleted'] = 'Template was deleted!';
$string['templatefile'] = 'Template file';
$string['templatesuccessfullysaved'] = 'Template was saved.';
$string['terminated'] = 'Terminated';
$string['textfield'] = 'Single line text input';
$string['thisinstance'] = 'This booking instance';
$string['thursday'] = 'Thursday';
$string['timecreated'] = 'Time created';
$string['timerestrict'] = 'Restrict answering to this time period: This is deprecated and will be removed. Please use "Restrict Access" settings for making the booking activity available for a certain period';
$string['titleprefix'] = 'Prefix';
$string['titleprefix_help'] = 'Add a prefix which will be shown before the option title, e.g. "BB42".';
$string['to'] = 'to';
$string['toggleformmode_expert'] = '<i class="fa fa-expand" aria-hidden="true"></i> Switch to expert mode';
$string['toggleformmode_simple'] = '<i class="fa fa-compress" aria-hidden="true"></i> Switch to simple mode';
$string['toomuchusersbooked'] = 'The max number of users you can book is: {$a}';
$string['topic'] = 'Topic';
$string['transefusers'] = 'Transfer users';
$string['transfer'] = 'Transfer';
$string['transferheading'] = 'Transfer selected users to the selected booking option';
$string['transferhelp'] = 'Transfer users, that have not completed activity from selected option to {$a}.';
$string['transferoptionsuccess'] = 'The booking option and the users have successfully been transferred.';
$string['transferproblem'] = 'The following could not be transferred due to booking option limitation or user limitation: {$a}';
$string['transfersuccess'] = 'The users have successfully been transferred to the new booking option';
$string['tuesday'] = 'Tuesday';
$string['undocancelreason'] = 'Do you really want to undo the cancellation of this booking option?';
$string['undocancelthisbookingoption'] = 'Undo cancelling of this booking option';
$string['units'] = 'Units';
$string['units_courses'] = 'Courses / Units';
$string['units_unknown'] = 'Number of units unknown';
$string['unlimitedplaces'] = 'Unlimited';
$string['updatebooking'] = 'Edit this booking option';
$string['uploadheaderimages'] = 'Header images for booking options';
$string['usedinbooking'] = 'You can\'t delete this category, because you\'re using it in booking!';
$string['usedinbookinginstances'] = 'Template is used in following booking instances';
$string['usenotificationlist'] = 'Use notification list';
$string['useraffectedbyevent'] = 'User affected by the event';
$string['usercalendarentry'] = 'You are booked for <a href="{$a}">this session</a>.';
$string['userdownload'] = 'Download users';
$string['usergavereason'] = '{$a} gave the following reason for cancellation:';
$string['userid'] = 'UserID';
$string['userinfofieldoff'] = 'No user profile field selected';
$string['userleave'] = 'User has cancelled his/her own booking (enter 0 to turn off)';
$string['userleave_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['userleavemessage'] = 'Hello {$a->participant},

You have been unsubscribed from {$a->title}.';
$string['userleavesubject'] = 'You successfully unsubscribed from {$a->title}';
$string['usernameofbookingmanager'] = 'Choose a booking manager';
$string['usernameofbookingmanager_help'] = 'Username of the user who will be displayed in the "From" field of the confirmation notifications. If the option "Send confirmation e-mail to booking manager" is enabled, this is the user who receives a copy of the confirmation notifications.';
$string['usersonlist'] = 'User on list';
$string['userssuccessfullenrolled'] = 'All users have been enrolled!';
$string['userssuccessfullybooked'] = 'All users have been booked to the other booking option.';
$string['userssuccessfullygetnewpresencestatus'] = 'All users have a new presence status.';
$string['userssucesfullygetnewpresencestatus'] = 'Presence status for selected users successfully updated';
$string['userwhotriggeredevent'] = 'User who triggered the event';
$string['viewallresponses'] = 'Manage {$a} responses';
$string['waitinglist'] = 'Waiting list';
$string['waitinglistenoughmessage'] = 'Still enough places on the waiting list available.';
$string['waitinglistfullmessage'] = 'No places available on the waiting list.';
$string['waitinglistinfotexts'] = 'Show availability info texts for waiting list';
$string['waitinglistinfotexts_info'] = 'Show short info messages instead of the number of available waiting list places.';
$string['waitinglistlowmessage'] = 'Only a few places on the waiting list are left.';
$string['waitinglistlowpercentage'] = 'Percentage for waiting list low message';
$string['waitinglistlowpercentagedesc'] = 'If the available places on the waiting list reach or get below this percentage a waiting list low message will be shown.';
$string['waitinglisttaken'] = 'On the waiting list';
$string['waitinglistusers'] = 'Users on waiting list';
$string['waitingplacesavailable'] = 'Waiting list places available: {$a->overbookingavailable} of {$a->maxoverbooking}';
$string['waitingtext'] = 'Waiting list confirmation';
$string['waitingtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status} - Booking status</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher} - Name of first teacher</li>
<li>{teachers} - List of all teachers</li>
<li>{teacherN} - Name of specific teacher, e.g. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{dates} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['waitingtextmessage'] = 'You are now on the waiting list of:

{$a->bookingdetails}
<p>##########################################</p>
Booking status: {$a->status}
Participant:   {$a->participant}

To view all your booked courses click on the following link: {$a->bookinglink}
The associated course can be found here: {$a->courselink}';
$string['waitingtextsubject'] = 'Booking status for {$a->title} has changed';
$string['waitingtextsubjectbookingmanager'] = 'Booking status for {$a->title} has changed';
$string['waitspaceavailable'] = 'Places on waiting list available';
$string['wednesday'] = 'Wednesday';
$string['week'] = 'Week';
$string['whichview'] = 'Default view for booking options';
$string['whichviewerror'] = 'You have to include the default view in: Views to show in the booking options overview';
$string['withselected'] = 'With selected users:';
$string['wrongdataallfields'] = 'Please, fill out all fields!';
$string['yes'] = 'Yes';
$string['yourselection'] = 'Your selection';
