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
 * Strings for component 'booking', language 'en', version '3.11'.
 *
 * @package     booking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Active';
$string['activitycompletionsuccess'] = 'All selected users have been marked for activity completion';
$string['activitycompletiontext'] = 'Message to be sent to user when booking option is completed';
$string['activitycompletiontext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['activitycompletiontextmessage'] = 'You have completed the following booking option:

{$a->bookingdetails}

Go to course: {$a->courselink}
See all booking options: {$a->bookinglink}';
$string['activitycompletiontextsubject'] = 'Booking option completed';
$string['addastemplate'] = 'Add as template';
$string['addcategory'] = 'Edit categories';
$string['addcustomfield'] = 'Add custom field';
$string['addeditbooking'] = 'Edit booking option';
$string['addmorebookings'] = 'Add more bookings';
$string['addnewbookingoption'] = 'Add a new booking option';
$string['addnewbookingoptionfromtemplate'] = 'Add a new booking option from template';
$string['addnewcategory'] = 'Add new category';
$string['addnewinstitution'] = 'Add new institution';
$string['addnewlocation'] = 'Add new location';
$string['addnewreporttemplate'] = 'Add new report template';
$string['addnewtagtemplate'] = 'Add new tag template';
$string['address'] = 'Address';
$string['addteachers'] = 'Add teachers';
$string['addtocalendar'] = 'Add to calendar';
$string['addtogroup'] = 'Automatically enrol users in group';
$string['addtogroup_help'] = 'Automatically enrol users in group - group will be created automatically with name: Bookin name - Option name';
$string['addusertogroup'] = 'Add user to group:';
$string['advancedoptions'] = 'Advanced options';
$string['aftercompletedtext'] = 'After activity completed';
$string['aftercompletedtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['agreetobookingpolicy'] = 'I have read and agree to the following booking policies';
$string['allbookingoptions'] = 'Download users for all booking options';
$string['allchangessave'] = 'All changes have been saved.';
$string['allcomments'] = 'Everybody can comment';
$string['allmailssend'] = 'All e-mails to the users have been sent!';
$string['allowdelete'] = 'Allow users to cancel their booking themselves';
$string['allowupdate'] = 'Allow booking to be updated';
$string['allratings'] = 'Everybody can rate';
$string['allusersbooked'] = 'All {$a} selected users have successfully been assigned to this booking option.';
$string['answer'] = 'Answer';
$string['answered'] = 'Answered';
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
$string['availability'] = 'Still available';
$string['availabilityinfotexts_desc'] = 'Only available in the PRO version.';
$string['availabilityinfotexts_heading'] = 'Availability info texts for booking places and waiting list';
$string['available'] = 'Places available';
$string['availableplaces'] = 'Places available: {$a->available} of {$a->maxanswers}';
$string['backtoresponses'] = '<< Back to responses';
$string['banusernames'] = 'Ban usernames';
$string['banusernames_help'] = 'To limit which usernames can`t apply just write in this field, and separate with coma. To ban usernames, that end with gmail.com and yahoo.com just write: gmail.com, yahoo.com';
$string['banusernameswarning'] = 'Your username is banned so you can\'t book.';
$string['beforebookedtext'] = 'Before booked';
$string['beforebookedtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['beforecompletedtext'] = 'After booked';
$string['beforecompletedtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['booked'] = 'Booked';
$string['bookedpast'] = 'Booked (course terminated)';
$string['bookedtext'] = 'Booking confirmation';
$string['bookedtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['bookedusers'] = 'Booked users';
$string['booking'] = 'Booking';
$string['booking:addeditownoption'] = 'Add new option and edit own options.';
$string['booking:addinstance'] = 'Add new booking';
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
$string['booking:sendpollurl'] = 'Send poll url';
$string['booking:sendpollurltoteachers'] = 'Send poll url to teachers';
$string['booking:subscribeusers'] = 'Make bookings for other users';
$string['booking:updatebooking'] = 'Manage booking options';
$string['booking:viewallratings'] = 'View all raw ratings given by individuals';
$string['booking:viewanyrating'] = 'View total ratings that anyone received';
$string['booking:viewrating'] = 'View the total rating you received';
$string['bookingattachment'] = 'Attachment';
$string['bookingcategory'] = 'Category';
$string['bookingchangedmessage'] = 'Your booking "{$a->title}" has changed.

Here\'s what\'s new:
{changes}

To view the change(s) and all your booked courses click on the following link: {$a->bookinglink}';
$string['bookingchangedsubject'] = 'Change notification for {$a->title}';
$string['bookingchangedtext'] = 'Message to be sent when a booking option changes (will only be sent to users who have already booked). Use the placeholder {changes} to show the changes. Enter 0 to turn off change notifications.';
$string['bookingchangedtext_help'] = 'Enter 0 to turn change notifications off.

You can use any of the following placeholders in the text:
<ul>
<li>{changes} - What has changed?</li>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['bookingclose'] = 'Until';
$string['bookingdeleted'] = 'Your booking was cancelled';
$string['bookingduration'] = 'Duration';
$string['bookingfull'] = 'There are no available places';
$string['bookingfulldidntregister'] = 'Option is full, so I didn\'t transfer all users!';
$string['bookinginstancetemplatename'] = 'Booking instance template name';
$string['bookinginstancetemplatessettings'] = 'Booking instance templates';
$string['bookingmanagererror'] = 'The username entered is not valid. Either it does not exist or there are more then one users with this username (example: if you have mnet and local authentication enabled)';
$string['bookingmeanwhilefull'] = 'Meanwhile someone took already the last place';
$string['bookingname'] = 'Booking name';
$string['bookingnotopenyet'] = 'Your event starts in {$a} minutes. The link you used will redirect you if you click it again within 15 minutes before.';
$string['bookingopen'] = 'Open';
$string['bookingoption_created'] = 'Booking option created';
$string['bookingoption_deleted'] = 'Booking option deleted';
$string['bookingoption_updated'] = 'Booking option updated';
$string['bookingoptioncalendarentry'] = '<a href="{$a}" class="btn btn-primary">Book now...</a>';
$string['bookingoptiondate_created'] = 'Booking option date created';
$string['bookingoptiondate_deleted'] = 'Booking option date deleted';
$string['bookingoptiondate_updated'] = 'Booking option date updated';
$string['bookingoptionname'] = 'Booking option name';
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
$string['bookingsaved'] = 'Your booking was successfully saved. You can now proceed to book other courses.';
$string['bookingtags'] = 'Tags';
$string['bookingtext'] = 'Booking text';
$string['booknow'] = 'Book now';
$string['bookotherusers'] = 'Book other users';
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
$string['caladdascourseevent'] = 'Add to calendar (visible only to course participants)';
$string['caladdassiteevent'] = 'Add to calendar (visible to all users)';
$string['caldonotadd'] = 'Do not add to calendar';
$string['caleventtype'] = 'Calendar event visibility';
$string['cancancelbook'] = 'Allow user to cancel the booking during the booking period?';
$string['cancancelbookdays'] = 'Disallow users to cancel their booking n days before start';
$string['cancancelbookdaysno'] = 'Don\'t limit';
$string['cancel'] = 'Cancel';
$string['cancelbooking'] = 'Cancel booking';
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
$string['choosecourse'] = 'Choose a course';
$string['choosepdftitle'] = 'Select a title for the sign-in sheet';
$string['closed'] = 'Booking closed';
$string['comments'] = 'Comments';
$string['completed'] = 'Completed';
$string['completedcomments'] = 'Only with completed activity';
$string['completedratings'] = 'Only with completed activity';
$string['completionmodule'] = 'Upon completion of the selected course activity, enable bulk deletion of user bookings';
$string['completionmodule_help'] = 'Display bulk deletion button for booking answers, if another course module has been completed. The bookings of users will be deleted with a click of a button on the report page! Only activities with completion enabled can be selected from the list.';
$string['conectedbooking'] = 'Connected booking';
$string['conectedbooking_help'] = 'Booking instance eligible for transferring booked users. You can define from which option within the selected booking instance and how many users you will accept.';
$string['confirmactivtyfrom'] = 'Confirm users activity from';
$string['confirmationmessage'] = 'Your booking has been registered


Booking status: {$a->status}
Participant:   {$a->participant}
Booking option: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
To view all your booked courses click on the following link: {$a->bookinglink}
The associated course can be found here: {$a->courselink}';
$string['confirmationmessagesettings'] = 'Confirmation e-mail settings';
$string['confirmationmessagewaitinglist'] = 'Hello {$a->participant},

Your booking request has been registered

Booking status: {$a->status}
Participant: {$a->participant}
Booking option: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
To view all your booked courses click on the following link: {$a->bookinglink}';
$string['confirmationsubject'] = 'Booking confirmation for {$a->title}';
$string['confirmationsubjectbookingmanager'] = 'New booking for {$a->title} by {$a->participant}';
$string['confirmationsubjectwaitinglist'] = 'Booking status for {$a->title} has changed';
$string['confirmationsubjectwaitinglistmanager'] = 'Booking status for {$a->title} has changed';
$string['confirmbookingoffollowing'] = 'Please confirm the booking of following course';
$string['confirmdeletebookingoption'] = 'Do you really want to delete this booking option?';
$string['confirmoptioncompletion'] = '(Un)confirm completion status';
$string['confirmpresence'] = 'Confirm presence';
$string['confirmusers'] = 'Confirm users activity';
$string['confirmuserswith'] = 'Confirm users who completed activity or received badge';
$string['copy'] = '- Copy';
$string['copyonlythisbookingurl'] = 'Copy this booking URL';
$string['copypollurl'] = 'Copy poll URL';
$string['copytoclipboard'] = 'Copy to clipboard: Ctrl+C, Enter';
$string['copytotemplate'] = 'Copy to template';
$string['copytotemplatesucesfull'] = 'Booking option was sucesfully copied to template.';
$string['coursedate'] = 'Date';
$string['courseendtime'] = 'End time of the course';
$string['coursepageshortinfo'] = 'If you want to book yourself for this course, click on "View available options", choose a booking option and then click on "Book now".';
$string['coursepageshortinfolbl'] = 'Short info';
$string['coursepageshortinfolbl_help'] = 'Choose a short info text to show on the course page.';
$string['coursestarttime'] = 'Start time of the course';
$string['courseurl'] = 'Course URL';
$string['createdby'] = 'Booking module created by Wunderbyte GmbH';
$string['csvfile'] = 'CSV file';
$string['csvfile_help'] = 'CSV file must contain only one column named Institution.';
$string['custom_field_changed'] = 'Custom field changed';
$string['customdownloadreport'] = 'Download report';
$string['customfield'] = 'Custom field to be set in the booking option settings. It will then be shown in the booking option overview.';
$string['customfieldconfigure'] = 'Custom booking option fields';
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
$string['dateerror'] = 'Wrong date in line {$a}:';
$string['datenotset'] = 'Date not set';
$string['dateparseformat'] = 'Date parse format';
$string['dateparseformat_help'] = 'Please, use date format like specified in CSV file. Help with <a href="http://php.net/manual/en/function.date.php">this</a> resource for options.';
$string['days'] = '{$a} days';
$string['daystonotify'] = 'Number of days in advance of the event-start to notify participants';
$string['daystonotify2'] = 'Second notification before start of event to notify participants.';
$string['daystonotify_help'] = 'Will work only if start and end date of option are set! 0 for disabling this functionality.';
$string['daystonotifysession'] = 'Number of days in advance of the session start to notify participants';
$string['daystonotifysession_help'] = 'Enter 0 to deactivate the e-mail notification for this session.';
$string['daystonotifyteachers'] = 'Number of days in advance of the event-start to notify teachers (PRO)';
$string['defaultbookingoption'] = 'Default booking options';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['defaulttemplate'] = 'Default template';
$string['defaulttemplatedesc'] = 'Default booking option template when creating a new booking option.';
$string['delcustfield'] = 'Delete this field and all associated field settings in the booking options';
$string['deletebooking'] = 'Do you really want to unsubscribe from following course? <br /><br /> <b>{$a} </b>';
$string['deletebookingoption'] = 'Delete this booking option';
$string['deletecategory'] = 'Delete';
$string['deletecustomfield'] = 'Delete custom field?';
$string['deletecustomfield_help'] = 'Caution: Setting this checkbox will delete the associated custom field when saving.';
$string['deletedbookingmessage'] = 'Booking option has been deleted: {$a->title}

User: {$a->participant}
Title: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Course: {$a->courselink}
Booking link: {$a->bookinglink}';
$string['deletedbookingsubject'] = 'Deleted booking: {$a->title} by {$a->participant}';
$string['deletedbookingusermessage'] = 'Hello {$a->participant},

Your booking for {$a->title} ({$a->startdate} {$a->starttime}) has been cancelled.';
$string['deletedbookingusersubject'] = 'Booking for {$a->title} cancelled';
$string['deletedrule'] = 'Rule deleted.';
$string['deletedtext'] = 'Cancelled booking message';
$string['deletedtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['deleteresponsesactivitycompletion'] = 'Delete all users with completed activity: {$a}';
$string['deleterule'] = 'Delete';
$string['deletesubcategory'] = 'Please, first delete all subcategories of this category!';
$string['deleteuserfrombooking'] = 'Do you really want to delete the users from the booking?';
$string['delnotification'] = 'You deleted {$a->del} of {$a->all} users. Users, that have completed activity, can\'t be deleted!';
$string['delnotificationactivitycompletion'] = 'You deleted {$a->del} of {$a->all} users. Users, that have completed activity, can\'t be deleted!';
$string['description'] = 'Description';
$string['disablebookingusers'] = 'Disable booking of users - hide Book now button.';
$string['donotselectcourse'] = 'No course selected';
$string['donotselecteventtype'] = 'No event type selected';
$string['donotselectinstitution'] = 'No institution selected';
$string['donotselectlocation'] = 'No location selected';
$string['dontuse'] = 'Don\'t use template';
$string['download'] = 'Download';
$string['downloadallresponses'] = 'Download all responses for all booking options';
$string['downloadusersforthisoptionods'] = 'Download users as .ods';
$string['downloadusersforthisoptionxls'] = 'Download users as .xls';
$string['duplicatebooking'] = 'Duplicate this booking option';
$string['duplicatename'] = 'This booking option name already exists. Please choose another one.';
$string['editcategory'] = 'Edit';
$string['editingoptiondate'] = 'You are currently editing this session';
$string['editinstitutions'] = 'Edit institutions';
$string['editotherbooking'] = 'Other booking rules';
$string['editrule'] = 'Edit';
$string['edittag'] = 'Edit';
$string['editteachers'] = 'Edit';
$string['editteacherslink'] = 'Edit teachers';
$string['enable'] = 'Enable';
$string['enablecompletion'] = 'Count of entries';
$string['enablecompletiongroup'] = 'Require entries';
$string['enablepresence'] = 'Enable presence';
$string['endtimenotset'] = 'End date not set';
$string['enrolledcomments'] = 'Only enrolled';
$string['enrolledinoptions'] = 'alredy booked in booking options:';
$string['enrolledratings'] = 'Only enrolled';
$string['enrolmentstatus'] = 'Do not enrol users immediately but only at course start time';
$string['entervalidurl'] = 'Please, enter a valid URL!';
$string['error:failedtosendconfirmation'] = 'The following user did not receive a confirmation mail

Booking status: {$a->status}
Participant: {$a->participant}
Booking option: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Link: {$a->bookinglink}
Associated course: {$a->courselink}';
$string['erroremptycustomfieldname'] = 'Custom field name is not allowed to be empty.';
$string['erroremptycustomfieldvalue'] = 'Custom field value is not allowed to be empty.';
$string['errorpagination'] = 'Please enter a number bigger than 0';
$string['eventalreadyover'] = 'This event is already over.';
$string['eventbooking_cancelled'] = 'Booking cancelled';
$string['eventbookingoption_booked'] = 'Booking option booked';
$string['eventbookingoption_completed'] = 'Booking option completed';
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
$string['forcourse'] = 'for course';
$string['full'] = 'Full';
$string['fullname'] = 'Full name';
$string['generatenewurl'] = 'Generate new short url';
$string['generaterecnum'] = 'Generate numbers';
$string['generaterecnumareyousure'] = 'This will generate new numbers and permanently delete the old one!';
$string['generaterecnumnotification'] = 'New numbers have been generated.';
$string['globalactivitycompletiontext'] = 'Message to be sent to user when booking option is completed (global template)';
$string['globalbookedtext'] = 'Booking confirmation (global template)';
$string['globalbookingchangedtext'] = 'Message to be sent when a booking option changes (will only be sent to users who have already booked). Use the placeholder {changes} to show the changes. Enter 0 to turn off change notifications. (Global template)';
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
$string['gotobooking'] = '<< Bookings';
$string['gotobookingoption'] = 'Go to booking option';
$string['gotop'] = 'Go to top';
$string['groupdeleted'] = 'This booking instance creates groups automatically in the target course. But the group has been manually deleted in the target course. Activate the following checkbox in order to recreate the group';
$string['groupexists'] = 'The group already exists in the target course, please choose another name for the booking option';
$string['groupname'] = 'Group name';
$string['hidedescription'] = 'Hide description';
$string['hidelistoncoursepage'] = 'Hide list on course page';
$string['hours'] = '{$a} hours';
$string['howmanytimestorepeat'] = 'How many times to repeat?';
$string['howmanyusers'] = 'Max. number of users a teacher assigned to the option can book';
$string['howmanyusers_help'] = '';
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
$string['includeteachers'] = 'Include teachers in the sign-in sheet';
$string['infoalreadybooked'] = '<div class="infoalreadybooked"><i>You are already booked for this option.</i></div>';
$string['infonobookingoption'] = 'In order to add a booking option please use the settings block or the settings-icon on top of the page';
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
$string['linknotvalid'] = 'You don\'t seem to be booked for this meeting';
$string['location'] = 'Location';
$string['location_help'] = 'You can either enter the location name manually or choose from a list of previous locations.
                                    You can choose one location only. Once you save, the location will be added to the list.';
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
$string['maxoverbooking'] = 'Max. number of places on waiting list';
$string['maxparticipantsnumber'] = 'Max. number of participants';
$string['maxperuser'] = 'Max current bookings per user';
$string['maxperuser_help'] = 'The maximum number of bookings an individual user can make in this activity at once. After an event end time has passed, it is no longer counted against this limit.';
$string['maxperuserwarning'] = 'You currently have used {$a->count} out of {$a->limit} maximum available bookings ({$a->eventtype}) for your user account';
$string['messageprovider:bookingconfirmation'] = 'Booking confirmations';
$string['messagesend'] = 'Your message has been sent.';
$string['messagesubject'] = 'Subject';
$string['messagetext'] = 'Message';
$string['minutes'] = '{$a} minutes';
$string['modulename'] = 'Booking';
$string['modulenameplural'] = 'Bookings';
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
$string['newtemplatesaved'] = 'New template for booking option was saved.';
$string['next'] = 'Next';
$string['no'] = 'No';
$string['nobookingpossible'] = 'No booking possible.';
$string['nobookingselected'] = 'No booking option selected';
$string['nocfnameselected'] = 'Nothing selected. Either type new name or select one from the list.';
$string['nocomments'] = 'Commenting disabled';
$string['nocourse'] = 'No course selected for this booking option';
$string['nodateset'] = 'Course date not set';
$string['nogrouporcohortselected'] = 'You need to select at least one group or cohort.';
$string['noguestchoose'] = 'Sorry, guests are not allowed to enter data';
$string['noratings'] = 'Ratings disabled';
$string['noresultsviewable'] = 'The results are not currently viewable.';
$string['norighttobook'] = 'Booking is not possible for your user role. Please contact the site administrator to give you the appropriate rights or enrol/sign in.';
$string['nosubscribers'] = 'There are no teachers assigned!';
$string['notallbooked'] = 'The following users could not be booked due to reaching the max number of bookings per user or lack of available places for the booking option: {$a}';
$string['notbooked'] = 'Not yet booked';
$string['notconectedbooking'] = 'Not connected';
$string['noteacherfound'] = 'The user specified as teacher on line {$a} does not exist on the platform.';
$string['notemplate'] = 'Do not use as template';
$string['notes'] = 'Booking notes';
$string['notificationsubject'] = 'Reminder: You have an upcoming course';
$string['notificationtext'] = 'Notification message';
$string['notificationtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['notificationtextmessage'] = 'Course will start:

Booking option: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}';
$string['notificationtextsubject'] = 'Info about course start!';
$string['notifyemail'] = 'Participant notification before start';
$string['notifyemail_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['notifyemaildefaultmessage'] = 'Your booking will start soon:

Booking status: {$a->status}
Participant: {$a->participant}
Booking option: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
To view all your booked courses click on the following link: {$a->bookinglink}
The associated course can be found here: {$a->courselink}';
$string['notifyemailteachers'] = 'Teacher notification before start (PRO)';
$string['notifyemailteachers_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['notifyemailteachersdefaultmessage'] = 'Your booking will start soon:

{$a->bookingdetails}

You have <b>{$a->numberparticipants} booked participants</b> and <b>{$a->numberwaitinglist} people on the waiting list</b>.

To view all your booked courses click on the following link: {$a->bookinglink}
The associated course can be found here: {$a->courselink}';
$string['notopenyet'] = 'Sorry, this activity is not available until {$a}';
$string['notstarted'] = 'Not yet started';
$string['nouserfound'] = 'No user found:';
$string['nousers'] = 'No users!';
$string['numberrows'] = 'Number rows';
$string['numberrowsdesc'] = 'Number each row of the sign-in sheet. Number will be displayed left of the name in the same column';
$string['numgenerator'] = 'Enable rec. number generation?';
$string['numrec'] = 'Rec. num.';
$string['onlythisbookingurl'] = 'Link to this booking URL';
$string['onwaitinglist'] = 'You are on the waiting list';
$string['option_template_not_saved_no_valid_license'] = 'Booking option template could not be saved as template.
                                                  Upgrade to PRO version to save an unlimited number of templates.';
$string['optiondates'] = 'Multiple dates session';
$string['optiondatesmessage'] = 'Session {$a->number}: {$a->date} <br> From: {$a->starttime} <br> To: {$a->endtime}';
$string['optiondatessuccessfullydelete'] = 'Session time was deleted.';
$string['optiondatessuccessfullysaved'] = 'Session time was saved.';
$string['optiondatestime'] = 'Session time';
$string['optionid'] = 'Option ID';
$string['optionmenu'] = 'This booking option';
$string['optionsfields'] = 'Fields on the booking options overview page';
$string['optiontemplate'] = 'Option template';
$string['optiontemplatename'] = 'Option template name';
$string['optiontemplatessettings'] = 'Booking option templates';
$string['organizatorname'] = 'Organizer name';
$string['organizatorname_help'] = 'You can either enter the organizer name manually or choose from a list of previous organizers.
                                    You can choose one organizer only. Once you save, the organizer will be added to the list.';
$string['otherbookingaddrule'] = 'Add new rule';
$string['otherbookinglimit'] = 'Limit';
$string['otherbookinglimit_help'] = 'How many users you accept from option. If 0, you can accept unlimited users.';
$string['otherbookingnumber'] = 'Num. of users';
$string['otherbookingoptions'] = 'Accepting from';
$string['otherbookingsuccessfullysaved'] = 'Rule saved!';
$string['paginationnum'] = 'N. of records - pagination';
$string['pdfdate'] = 'Booking Date(s):';
$string['pdflandscape'] = 'Landscape';
$string['pdflocation'] = 'Location:';
$string['pdfportrait'] = 'Portrait';
$string['pdfroom'] = 'Room:';
$string['pdfsignature'] = 'Signature';
$string['pdfstudentname'] = 'Student Name';
$string['pdftodaydate'] = 'Date:';
$string['pluginadministration'] = 'Booking administration';
$string['pluginname'] = 'Booking';
$string['pollstrftimedate'] = '%Y-%m-%d';
$string['pollurl'] = 'Poll url';
$string['pollurl_help'] = 'You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
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
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['pollurlteacherstext'] = 'Message for the poll url sent to teachers';
$string['pollurlteacherstext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
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
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
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
$string['privacy:metadata:booking_answers'] = 'Represents a booking to an event';
$string['privacy:metadata:booking_answers:bookingid'] = 'ID of the event';
$string['privacy:metadata:booking_answers:notes'] = 'Additional notes';
$string['privacy:metadata:booking_answers:optionid'] = 'Specifies which version of an event, eg summerterm or winterterm';
$string['privacy:metadata:booking_answers:status'] = 'Statusinfo for this booking';
$string['privacy:metadata:booking_answers:timecreated'] = 'Timestamp when booking was created';
$string['privacy:metadata:booking_answers:timemodified'] = 'Timestamp when booking was last modified';
$string['privacy:metadata:booking_answers:userid'] = 'User that is booked for this event';
$string['privacy:metadata:booking_answers:waitinglist'] = 'If this user is on a waitinglist';
$string['privacy:metadata:booking_ratings'] = 'Represents your rating of an event';
$string['privacy:metadata:booking_ratings:optionid'] = 'Which version of an event was rated';
$string['privacy:metadata:booking_ratings:rate'] = 'Rate that was assigned';
$string['privacy:metadata:booking_ratings:userid'] = 'User that rated this event';
$string['privacy:metadata:booking_teachers'] = 'Represents the teacher of an event';
$string['privacy:metadata:booking_teachers:completed'] = 'If task is completed';
$string['privacy:metadata:booking_teachers:optionid'] = 'Which version of an event is taught';
$string['privacy:metadata:booking_teachers:userid'] = 'User that is teaching this event';
$string['problemsofcohortorgroupbooking'] = '<br><p>Not all users could be booked with cohort booking:</p>
<ul>
<li>{$a->notenrolledusers} users are not enrolled in the course</li>
<li>{$a->notsubscribedusers} users not booked for other reasons</li>
</ul>';
$string['question'] = 'Question';
$string['ratings'] = 'Bookingoption ratings';
$string['ratingsuccess'] = 'The ratings were successfully updated';
$string['recreategroup'] = 'Recreate group in the target course and enrol users in group';
$string['recurringheader'] = 'Recurring options';
$string['removeafterminutes'] = 'Remove activity completion after N minutes';
$string['removeresponses'] = 'Remove all responses';
$string['removeuseronunenrol'] = 'Remove user from booking upon unenrolment from associated course?';
$string['repeatthisbooking'] = 'Repeat this option';
$string['reportfields'] = 'Downlodable responses fields (csv, xls-Download)';
$string['reset'] = 'Reset';
$string['responses'] = 'Responses';
$string['responsesfields'] = 'Fields on the manage responses page';
$string['responsesto'] = 'Responses to {$a}';
$string['resultofcohortorgroupbooking'] = '<p>This is the result of your cohort booking:</p>
<ul>
<li>{$a->sumcohortmembers} users found in the selected cohorts</li>
<li>{$a->sumgroupmembers} users found in the selected groups</li>
<li><b>{$a->subscribedusers} users where booked for this option</b></li>
</ul>';
$string['rootcategory'] = 'Root';
$string['saveinstanceastemplate'] = 'Add booking instance to template';
$string['savenewtagtemplate'] = 'Save';
$string['scgfbookgroupscohorts'] = 'Book cohort(s) or group(s)';
$string['scgfcohortheader'] = 'Cohort subscription';
$string['scgfgroupheader'] = 'Group subscription';
$string['scgfselectcohorts'] = 'Select cohort(s)';
$string['scgfselectgroups'] = 'Select group(s)';
$string['searchdate'] = 'Date';
$string['searchname'] = 'First name';
$string['searchsurname'] = 'Last name';
$string['searchtag'] = 'Search tags';
$string['searchwaitinglist'] = 'On waiting list';
$string['select'] = 'Selection';
$string['selectanoption'] = 'Please, select a booking option';
$string['selectatleastoneuser'] = 'Please, select at least 1 user!';
$string['selectcategory'] = 'Select parent category';
$string['selectfield'] = 'Drop-down list';
$string['selectoptionid'] = 'Please, select option!';
$string['selectoptioninotherbooking'] = 'Option';
$string['selectpresencestatus'] = 'Choose presence status';
$string['sendconfirmmail'] = 'Send confirmation e-mail';
$string['sendconfirmmailtobookingmanger'] = 'Send confirmation e-mail to booking manager';
$string['sendcustommessage'] = 'Send custom message';
$string['sendmailtobooker'] = 'Book other users page: Send mail to user who books instead to users who are booked';
$string['sendmailtobooker_help'] = 'Activate this option in order to send booking confirmation mails to the user who books other users instead to users, who have been added to a booking option. This is only relevant for bookings made on the page "book other users".';
$string['sendpollurltoteachers'] = 'Send poll url';
$string['sendreminderemail'] = 'Send reminder e-mail';
$string['sendreminderemailsuccess'] = 'Notification e-mail has been sent!';
$string['sessionremindermailmessage'] = 'Keep in mind: You are booked for the following session:<br>
{$a->sessiondescription}<br><br>
Booking status: {$a->status}<br>
Participant: {$a->participant}<br>';
$string['sessionremindermailsubject'] = 'Reminder: You have an upcoming session';
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
$string['showlistoncoursepage'] = 'Show list on course page (default)';
$string['showlistoncoursepagelbl'] = 'Show available booking options on course page';
$string['showlistoncoursepagelbl_help'] = 'If you activate this setting, a list of available booking options will be
                                            shown right on the course page below the link of the booking instance.
                                            You can also choose to show only the course name, a short info and a button
                                            redirecting to the available booking options.';
$string['showmybookingsonly'] = 'My bookings';
$string['showonlymyinstitutions'] = 'My institution';
$string['showviews'] = 'Views to show in the booking options overview';
$string['sign_in_sheet_download'] = 'Download Sign in Sheet';
$string['sign_in_sheet_download_show'] = 'Show Sign in sheet download form';
$string['signature'] = 'Signature';
$string['signinaddemptyrows'] = 'Number of empty rows to add for people who did not sign up';
$string['signincustfields'] = 'Custom profile fields';
$string['signincustfields_desc'] = 'Select the custom profiles fields to be shown on the sign-in sheet';
$string['signinextracols'] = 'Additional column';
$string['signinextracols_desc'] = 'You can print up to 3 additional columns on the sign-in sheet. Fill in the column title or leave it blank for no additional column';
$string['signinextracols_heading'] = 'Additional columns on the sign-in sheet';
$string['signinlogo'] = 'Logo to display on the sign-in sheet';
$string['signinlogofooter'] = 'Logo in footer to display on the sign-in sheet';
$string['signinlogoheader'] = 'Logo in header to display on the sign-in sheet';
$string['signinonesession'] = 'Display selected session time on the sign-in sheet';
$string['signinsheetfields'] = 'Sign-in sheet fields (PDF)';
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
$string['statuschangemessage'] = 'Hello {$a->participant}!

Your booking status has changed.

Booking status: {$a->status}

Participant:   {$a->participant}
Booking option: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}

Go to the booking option: {$a->gotobookingoption}';
$string['statuschangesubject'] = 'Booking status has changed for {$a->title}';
$string['statuschangetext'] = 'Status change message';
$string['statuschangetext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['submitandaddnew'] = 'Save and add new';
$string['submitandgoback'] = 'Save and go back';
$string['subscribersto'] = 'Teachers for \'{$a}\'';
$string['subscribetocourse'] = 'Enrol users in the course';
$string['subscribeuser'] = 'Do you really want to enrol the users in the following course';
$string['successfulldeleted'] = 'Category was deleted!';
$string['successfulldeletedinstitution'] = 'Institution was deleted';
$string['sucesfullcompleted'] = 'Activity was sucesfully completed for users.';
$string['sucesfullytransfered'] = 'Users were sucesfully transfered.';
$string['tagdeleted'] = 'Tag template was deleted!';
$string['tagsuccessfullysaved'] = 'Tag was saved.';
$string['tagtag'] = 'Tag';
$string['tagtemplates'] = 'Tag templates';
$string['tagtext'] = 'Text';
$string['taken'] = 'Taken';
$string['teacherroleid'] = 'Subscribe teacher with that role to the course';
$string['teachers'] = 'Teachers';
$string['templatedeleted'] = 'Template was deleted!';
$string['templatefile'] = 'Template file';
$string['templatesuccessfullysaved'] = 'Template was saved.';
$string['terminated'] = 'Terminated';
$string['textfield'] = 'Single line text input';
$string['thisinstance'] = 'This booking instance';
$string['timecloseoption'] = 'Limit the availability of this booking option until a certain date';
$string['timecreated'] = 'Time created';
$string['timerestrict'] = 'Restrict answering to this time period: This is deprecated and will be removed. Please use "Restrict Access" settings for making the booking activity available for a certain period';
$string['to'] = 'to';
$string['toomuchusersbooked'] = 'The max number of users you can book is: {$a}';
$string['topic'] = 'Topic';
$string['transefusers'] = 'Transfer users';
$string['transfer'] = 'Transfer';
$string['transferheading'] = 'Transfer selected users to the selected booking option';
$string['transferhelp'] = 'Transfer users, that have not completed activity from selected option to {$a}.';
$string['transferoptionsuccess'] = 'The booking option and the users have successfully been transferred.';
$string['transferproblem'] = 'The following could not be transferred due to booking option limitation or user limitation: {$a}';
$string['transfersuccess'] = 'The users have successfully been transferred to the new booking option';
$string['unlimited'] = 'Number of available places is not limited';
$string['updatebooking'] = 'Edit this booking option';
$string['usedinbooking'] = 'You can\'t delete this category, because you\'re using it in booking!';
$string['usedinbookinginstances'] = 'Template is used in following booking instances';
$string['usercalendarentry'] = 'You are booked for <a href="{$a}">this session</a>.';
$string['userdownload'] = 'Download users';
$string['userid'] = 'UserID';
$string['userleave'] = 'User has cancelled his/her own booking';
$string['userleave_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{bookingdetails} - Detailed summary of the booking option (incl. sessions und link to booking option)</li>
<li>{gotobookingoption} - Link to booking option</li>
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['userleavebookedmessage'] = 'Hello {$a->participant},

You have been unsubscribed from {$a->title}.';
$string['userleavebookedsubject'] = 'You successfully unsubscribed from {$a->title}';
$string['usernameofbookingmanager'] = 'Choose a booking manager';
$string['usernameofbookingmanager_help'] = 'Username of the user who will be displayed in the "From" field of the confirmation notifications. If the option "Send confirmation e-mail to booking manager" is enabled, this is the user who receives a copy of the confirmation notifications.';
$string['users'] = '<< Manage responses';
$string['usersonlist'] = 'User on list';
$string['userssuccessfullenrolled'] = 'All users have been enrolled!';
$string['userssuccessfullybooked'] = 'All users have been booked to the other booking option.';
$string['userssuccessfullygetnewpresencestatus'] = 'All users have a new presence status.';
$string['userssucesfullygetnewpresencestatus'] = 'Presence status for selected users successfully updated';
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
<li>{status}</li>
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
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short URL of option</li>
<li>{usercalendarurl} - Link to subscribe to user calendar (personal events)</li>
<li>{coursecalendarurl} - Link to subscribe to course calendar (course events)</li>
</ul>';
$string['waitspaceavailable'] = 'Places on waiting list available';
$string['week'] = 'Week';
$string['whichview'] = 'Default view for booking options';
$string['whichviewerror'] = 'You have to include the default view in: Views to show in the booking options overview';
$string['withselected'] = 'With selected users:';
$string['wrongdataallfields'] = 'Please, fill out all fields!';
$string['yes'] = 'Yes';
$string['yourselection'] = 'Your selection';
