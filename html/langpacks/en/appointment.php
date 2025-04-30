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
 * Strings for component 'appointment', language 'en', version '4.4'.
 *
 * @package     appointment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingappointment'] = 'Adding appointment';
$string['addingappointments'] = 'Adding appointments';
$string['addremoveattendees'] = 'Add/remove attendees';
$string['addsession'] = 'Add session';
$string['addtimeframe'] = 'Add timeframe';
$string['advanced'] = 'Advanced';
$string['allowcancellations'] = 'Allow cancelling';
$string['allowcancellations_help'] = 'If checked, session attendees will be able to cancel their signups';
$string['allowcancellationsdefault'] = 'Allow cancelling default';
$string['allowcancellationsdefault_help'] = 'If checked, the default setting, when creating new sessions for this activity, will be to allow sign-up cancellations';
$string['allowwaitlist'] = 'Allow waitlisting';
$string['allowwaitlist_help'] = 'When "Allow waitlisting" is checked, learners will be able to sign up for a Appointment session even if it is already full.<br />

When a learner signs up for a session that is already full, they will receive an email advising that they have been waitlisted for the session and will be notified when a booking becomes available.';
$string['alreadysignedup'] = 'You have already signed-up for this Appointment activity.';
$string['appointment'] = 'Appointment';
$string['appointment:addattendees'] = 'Add attendees to a Appointment session';
$string['appointment:addinstance'] = 'Add instance';
$string['appointment:configurecancellation'] = 'Allow the configuration of sign-up cancellations, upon adding/editing a Appointment activity.';
$string['appointment:editsessions'] = 'Add, edit, copy and delete Appointment sessions';
$string['appointment:managecustomfields'] = 'Manage custom fields for Appointment session.';
$string['appointment:overbook'] = 'Sign-up to full sessions that don\'t have waitlist enabled.';
$string['appointment:removeattendees'] = 'Remove attendees from a Appointment session';
$string['appointment:signup'] = 'Sign-up for a session';
$string['appointment:takeattendance'] = 'Take attendance';
$string['appointment:view'] = 'View Appointment activities and sessions';
$string['appointment:viewattendees'] = 'View attendance list and attendees';
$string['appointment:viewcancellations'] = 'View cancellations';
$string['appointmentactivity'] = 'Appointment activity';
$string['appointmentcustomfields'] = 'Appointment custom fields';
$string['appointmentname'] = 'Appointment name';
$string['appointments'] = 'Appointments';
$string['appointmentsession'] = 'Appointment session';
$string['appointmentsessiondates'] = 'Appointment session dates';
$string['appointmentsessions'] = 'Appointment sessions';
$string['appointmentsettings'] = 'Appointment settings';
$string['approvalreqd'] = 'Approval required';
$string['approvalreqd_help'] = 'When "Approval required" is checked, a learner will need approval from their manager to be permitted to attend a Appointment session.';
$string['approve'] = 'Approve';
$string['attendance'] = 'Attendance';
$string['attendanceinstructions'] = 'Select users who attended the session:';
$string['attendedsession'] = 'Attended session';
$string['attendees'] = 'Attendees';
$string['attendeestablesummary'] = 'People planning on or having attended this session.';
$string['availableplaceholders'] = 'Available placeholders';
$string['availableseats'] = '{$a} seats available';
$string['book'] = 'Book';
$string['bookedat'] = '<strong>Booked:</strong> {$a}';
$string['bookedvscapacity'] = 'Booked / Capacity';
$string['bookingcancelled'] = 'Your booking has been cancelled.';
$string['bookingcompleted'] = 'Your booking has been completed.';
$string['bookingfull'] = 'Full';
$string['bookingopen'] = 'Open';
$string['break'] = 'Break time';
$string['break_help'] = 'This setting defines the break time between sessions. Setting to 0 means no break is needed.';
$string['calendareventdescriptionbooking'] = 'You are booked for this <a href="{$a}">Appointment session</a>.';
$string['calendareventdescriptionsession'] = 'You have created this <a href="{$a}">Appointment session</a>.';
$string['calendaroptions'] = 'Calendar options';
$string['cancel'] = 'Cancel';
$string['cancelbooking'] = 'Cancel booking';
$string['cancellationinstrmngr'] = '# Notice for manager';
$string['cancellationinstrmngr_help'] = 'When **Send notice to manager** is checked, the text in the **Notice for manager** field is sent to a learner\'s manager advising that they have cancelled a Appointment booking.';
$string['cancellationmessage'] = 'Cancellation message';
$string['cancellationmessage_help'] = 'This message is sent out whenever users cancel their booking for a session.';
$string['cancellations'] = 'Cancellations';
$string['cancellationstablesummary'] = 'List of people who have cancelled their session signups.';
$string['cancelreason'] = 'Reason for cancellation';
$string['cannotapproveatcapacity'] = 'You cannot approve any more attendees as this session is full.';
$string['cannotsignupsessioninprogress'] = 'You cannot sign up, this session is in progress';
$string['cannotsignupsessionover'] = 'You cannot sign up, this session is over.';
$string['capacity'] = 'Capacity';
$string['capacity_help'] = '**Capacity** is the number of seats available in a session.

When a Appointment session reaches capacity the session details do not appear on the course page. The details will appear greyed out on the \'View all sessions\' page and the learner cannot enrol on the session.
&nbsp;';
$string['closed'] = 'Closed';
$string['completionattended'] = 'Book an appointment and attend it';
$string['completionattended_help'] = 'If enabled, the activity will be considered completed if the learner\'s booking attendance is marked as "Fully attended" or "Partially attended".';
$string['completionbooked'] = 'Learner must book an appointment to complete this activity';
$string['completionbooked_help'] = 'If enabled, the activity will be considered completed if the learner status is "Booked", "Fully attended", or "Partially attended". If the learner has cancelled, is wait-listed, or their attendance is marked as "No show", the activity will not be considered completed.';
$string['completiondetail:attended'] = 'Attend an appointment';
$string['completiondetail:booked'] = 'Book an appointment';
$string['confirmationinstrmngr'] = '# Notice for manager';
$string['confirmationinstrmngr_help'] = 'When "Send notice to manager" is checked, the text in the "Notice for manager" field is sent to a manager advising that a staff member has signed up for a Appointment session.';
$string['confirmationmessage'] = 'Confirmation message';
$string['confirmationmessage_help'] = 'This message is sent out whenever users sign up for a session.';
$string['confirmcancelbooking'] = 'Confirm cancellation';
$string['courseresetsessions'] = 'Remove all sessions';
$string['courseresetsignups'] = 'Remove all session sign-ups';
$string['crontask'] = 'Appointment maintenance jobs';
$string['currentstatus'] = 'Current status';
$string['customisednotifications'] = 'Customised notifications';
$string['date'] = 'Date';
$string['decidelater'] = 'Decide Later';
$string['decline'] = 'Decline';
$string['delete'] = 'Delete';
$string['deleteappointmentconfirm'] = 'Are you completely sure you want to delete this appointment and all its bookings?';
$string['deletesession'] = 'Delete session';
$string['deletetimeframe'] = 'Delete timeframe';
$string['details'] = 'Details';
$string['duplicate'] = 'Duplicate';
$string['duplicateappointment'] = 'Duplicate appointment';
$string['editingappointment'] = 'Editing appointment';
$string['email:message'] = 'Message';
$string['email:subject'] = 'Subject';
$string['emailmanager'] = 'Send notice to manager';
$string['emailmanagercancellation'] = '# Send notice to manager';
$string['emailmanagercancellation_help'] = 'When "Send notice to manager" is checked, an email will be sent to the learner\'s manager advising them that the Appointment booking has been cancelled.';
$string['emailmanagerconfirmation'] = '# Send notice to manager';
$string['emailmanagerconfirmation_help'] = 'When "Send notice to manager" is checked, a confirmation email will be sent to the learner\'s manager when the learner signs up for a Appointment session.';
$string['emailmanagerreminder'] = '# Send notice to manager';
$string['emailmanagerreminder_help'] = 'When "Send notice to manager" is checked, a reminder message will be sent to the learner\'s manager a few days before the start date of the Appointment session.';
$string['empty'] = 'Empty';
$string['endtime'] = 'End time';
$string['entitiysession'] = 'Session';
$string['error:cancellationsnotallowed'] = 'You are not allowed to cancel this sign-up.';
$string['error:canttakeattendanceforunstartedsession'] = 'Can not take attendance for a session that has yet to start.';
$string['error:eventoccurred'] = 'You cannot cancel an event that has already occurred.';
$string['error:invaliduserid'] = 'Invalid user ID';
$string['error:manageremailaddressmissing'] = 'You are currently not assigned to a manager in the system. Please contact the site administrator.';
$string['error:sessionsplitexceeds'] = 'Session split time exceeds session duration.';
$string['error:sessionstartafterend'] = 'Session start time is later than session end time.';
$string['errorcannoteditsessions'] = 'You don\'t have permission to edit sessions';
$string['errorcannotviewappointment'] = 'You don\'t have permission to view this appointment';
$string['errorcannotviewattendees'] = 'You don\'t have permission to view attendees';
$string['eventaddsession'] = 'Session added';
$string['eventapproverequests'] = 'Session approve requests';
$string['eventattendancetaken'] = 'Session attendance taken';
$string['eventattendeesviewed'] = 'Session attendees viewed';
$string['eventcancelbooking'] = 'Session cancel booking';
$string['eventcourseappointmentviewed'] = 'Course Appointment instances viewed';
$string['eventcoursemoduleviewed'] = 'Appointment module instance viewed';
$string['eventdeletesession'] = 'Session deleted';
$string['eventsignup'] = 'Session signup';
$string['eventupdatesession'] = 'Session updated';
$string['full'] = 'Date is fully occupied';
$string['fullfilter'] = 'Full';
$string['fullybooked'] = 'Fully booked';
$string['goback'] = 'Go back';
$string['icalendarheading'] = 'iCalendar Attachments';
$string['joinwaitlist'] = 'Join waitlist';
$string['location'] = 'Location';
$string['managecustomfields'] = 'Manage custom fields';
$string['modulename'] = 'Appointment booking';
$string['modulename_help'] = 'Appointment is an activity module for teachers to keep track of in-person activities.

It enables the teacher to set up a booking system for one or many in-person or classroom-based sessions, for the students to sign-up for.

This activity module is suitable for either 1-to-1 sessions or multi-session activities such as seminars.

Sessions can have multiple dates and times within a single Appointment activity, and can be created in bulk using the time slots specified in the configuration.

The activity allows attendance tracking.';
$string['modulename_link'] = 'Appointments';
$string['modulenameplural'] = 'Appointments';
$string['multipleappointments'] = 'Multiple appointments';
$string['noactionableunapprovedrequests'] = 'No actionable unapproved requests';
$string['noremindersneedtobesent'] = 'No reminders need to be sent.';
$string['nosignedupusers'] = 'No users have signed-up for this session.';
$string['notset'] = 'Not set';
$string['notsignedup'] = 'You are not signed up for this session.';
$string['partiallyfull'] = 'Partially full';
$string['placeholder:alldates'] = '[alldates]';
$string['placeholder:appointmentname'] = '[appointmentname]';
$string['placeholder:attendeeslink'] = '[attendeeslink]';
$string['placeholder:details'] = '[details]';
$string['placeholder:finishtime'] = '[finishtime]';
$string['placeholder:firstname'] = '[firstname]';
$string['placeholder:lastname'] = '[lastname]';
$string['placeholder:reminderperiod'] = '[reminderperiod]';
$string['placeholder:sessiondate'] = '[sessiondate]';
$string['placeholder:starttime'] = '[starttime]';
$string['placeholdersdesc'] = 'Placeholders';
$string['placeholdersdesc_help'] = 'Placeholders allow you to add a dynamic content, e.g. [firstname] placeholder will be replaced with a user first name in the notification delivered to user.';
$string['pluginadministration'] = 'Appointment administration';
$string['pluginname'] = 'Appointment';
$string['potentialattendees'] = 'Potential Attendees';
$string['privacy:metadata:appointment_signups'] = 'User signups to Appointment sessions';
$string['privacy:metadata:appointment_signups:id'] = 'The id of the signup';
$string['privacy:metadata:appointment_signups:mailedreminder'] = 'The time a reminder was last sent';
$string['privacy:metadata:appointment_signups:sessionid'] = 'The session id';
$string['privacy:metadata:appointment_signups_status'] = 'The Status of a user signup to a session';
$string['privacy:metadata:appointment_signups_status:grade'] = 'The grade assigned for attending the session';
$string['privacy:metadata:appointment_signups_status:note'] = 'Stores the reason for a cancelled session';
$string['privacy:metadata:appointment_signups_status:signupid'] = 'The id of the signup';
$string['privacy:metadata:appointment_signups_status:statuscode'] = 'The status of the signup eg cancelled,declined,fully_attended';
$string['privacy:metadata:appointment_signups_status:timecreated'] = 'The time the signup was created.';
$string['privacy:metadata:userid'] = 'The ID of the user who accessed the Appointment activity';
$string['remindermessage'] = 'Reminder message';
$string['remindermessage_help'] = 'This message is sent out a few days before a session\'s start date.';
$string['reminderperiod'] = 'Days before message is sent';
$string['reminderperiod_help'] = 'The reminder message will be sent this many days before the start of the session.';
$string['requestmessage'] = 'Request message';
$string['requestmessage_help'] = 'When **Approval required** is enabled, the **Request message** section is available.

The **Request message** section displays the notices sent to the learner and their manager regarding the approval process for the learner to attend the Appointment session.

**Subject:** is the subject line that appears on the request approval emails sent to the manager and the learner.

**Message:** is the email text sent to the learner advising them that their request to attend the Appointment session has been sent to their manager for approval.

**Notice for manager:** is the email text sent to the learner\'s manager requesting approval to attend the Appointment session.';
$string['requeststablesummary'] = 'People requesting to attended this session.';
$string['room'] = 'Room';
$string['saveattendance'] = 'Save attendance';
$string['search:activity'] = 'Appointment activities';
$string['seatsavailable'] = 'Seats available';
$string['seatsbooked'] = 'Seats booked';
$string['sessionavailability'] = 'Session availability';
$string['sessiondatetime'] = 'Session date/time';
$string['sessiondescription'] = 'Description';
$string['sessionduration'] = 'Session duration';
$string['sessionfinished'] = 'Finished';
$string['sessionfinishtime'] = 'Session finish time';
$string['sessioninprogress'] = 'session in progress';
$string['sessionisfull'] = 'This session is now full. You will need to pick another time or talk to the instructor.';
$string['sessionnotstarted'] = 'Not started';
$string['sessionrequiresmanagerapproval'] = 'This session requires manager approval to book.';
$string['sessions'] = 'Sessions';
$string['sessionsdetailstablesummary'] = 'Full description of the current session.';
$string['sessionstartdate'] = 'Session start date';
$string['sessionstartdateandtime'] = '{$a->startdate}, {$a->starttime} - {$a->endtime} (time zone: {$a->timezone})';
$string['sessionstartdateandtimewithouttimezone'] = '{$a->startdate}, {$a->starttime} - {$a->endtime}';
$string['sessionstartfinishdateandtime'] = '{$a->startdate} - {$a->enddate}, {$a->starttime} - {$a->endtime} (time zone: {$a->timezone})';
$string['sessionstartfinishdateandtimewithouttimezone'] = '{$a->startdate} - {$a->enddate}, {$a->starttime} - {$a->endtime}';
$string['sessionstarttime'] = 'Session start time';
$string['sessionstatus'] = 'Session status';
$string['setting:defaultcancellationmessagedefault'] = 'This is to advise that your booking on the following appointment has been cancelled:<br><br>
***BOOKING CANCELLED***<br><br>
Participant:   [firstname] [lastname]<br>
Appointment:   [appointmentname]<br><br>
Date(s):<br>
[alldates]<br><br>
Location:   [session:location]<br>
Venue:   [session:venue]<br>
Room:   [session:room]';
$string['setting:defaultcancellationsubjectdefault'] = 'Appointment booking cancellation';
$string['setting:defaultconfirmationmessagedefault'] = 'This is to confirm that you are now booked on the following appointment:<br><br>
Participant:   [firstname] [lastname]<br>
Appointment:   [appointmentname]<br><br>
Date(s):<br>
[alldates]<br><br>
Location:   [session:location]<br>
Venue:   [session:venue]<br>
Room:   [session:room]<br><br>
***Please arrive ten minutes before the appointment starts***<br><br>
To re-schedule or cancel your booking<br>
To re-schedule your booking you need to cancel this booking and then re-book a new session.<br>
To cancel your booking, return to the appointment page, and then select \'Cancel\'.<br><br>
[details]<br><br>
You will receive a reminder [reminderperiod] business days before this appointment.<br><br>';
$string['setting:defaultconfirmationsubjectdefault'] = 'Appointment booking confirmation: [appointmentname], [starttime]-[finishtime], [sessiondate]';
$string['setting:defaultremindermessagedefault'] = 'This is a reminder that you are booked on the following appointment:<br><br>
Participant:   [firstname] [lastname]<br>
Appointment:   [appointmentname]<br><br>
Date(s):<br>
[alldates]<br><br>
Location:   [session:location]<br>
Venue:   [session:venue]<br>
Room:   [session:room]<br><br>
***Please arrive ten minutes before the appointment starts***<br><br>
To re-schedule or cancel your booking<br>
To re-schedule your booking you need to cancel this booking and then re-book a new session.<br>
To cancel your booking, return to appointment page, and then select \'Cancel\'.<br><br>
[details]';
$string['setting:defaultremindersubjectdefault'] = 'Appointment booking reminder: [appointmentname], [starttime]-[finishtime], [sessiondate]';
$string['setting:defaultrequestmessagedefault'] = 'Your request to book into the following appointment has been sent to your manager:

Participant:   [firstname] [lastname]
Appointment:   [appointmentname]

Date(s):
[alldates]

Location:   [session:location]
Venue:   [session:venue]
Room:   [session:room]';
$string['setting:defaultrequestsubjectdefault'] = 'Appointment booking request: [appointmentname], [starttime]-[finishtime]';
$string['setting:defaultupdatemessagedefault'] = 'This is to inform you that appointment you booked or joined waitlist has changed:<br><br>
Participant:   [firstname] [lastname]<br>
Appointment:   [appointmentname]<br><br>
Date(s):<br>
[alldates]<br><br>
Location:   [session:location]<br>
Venue:   [session:venue]<br>
Room:   [session:room]<br><br>
***Please note this is not a appointment booking confirmation***<br><br>
To cancel your booking or place in waitlist, return to the appointment page, and then select \'Cancel\'.<br><br>
[details]<br><br>';
$string['setting:defaultupdatesubjectdefault'] = 'Appointment update: [appointmentname], [starttime]-[finishtime], [sessiondate]';
$string['setting:defaultwaitlistedmessagedefault'] = 'This is to advise that you have been added to the waitlist for:<br><br>
Appointment:   [appointmentname]<br>
Location:  [session:location]<br>
Participant:   [firstname] [lastname]<br><br>
***Please note this is not a appointment booking confirmation***<br><br>
By waitlisting you have registered your interest in this appointment and will be contacted directly when sessions become available.<br><br>
To remove yourself from this waitlist please return to this appointment and click Cancel. Please note there is no waitlist removal confirmation email.';
$string['setting:defaultwaitlistedsubjectdefault'] = 'Waitlisting advice for [appointmentname]';
$string['setting:oneemailperday'] = 'Send separate email for each day in events spanning multiple days';
$string['setting:oneemailperday_caption'] = 'Separate email for each day';
$string['settings'] = 'Settings';
$string['shortname'] = '# Short Name';
$string['shortname_help'] = '**Short name** is the description of the session that appears on the training calendar when **Show on the calendar** is enabled.';
$string['showoncalendar'] = 'Calendar display settings';
$string['showoncalendar_help'] = 'When **Site** is selected the Appointment activity sessions will be displayed on the site calendar as a Global Event.  All site users will be able to view these sessions.

When **Course** is selected all of the Appointment activity sessions will be displayed on the course calendar and as Course Event on the site level calendar and visible to all users enrolled in the course.

When **None** is selected, Appointment activity sessions will only be displayed as User Events on a confirmed attendee\'s calendar, provided the **Show on user\'s calendar** option has been selected.';
$string['sign-ups'] = 'Sign-ups';
$string['signupforthissession'] = 'Sign-up for this Appointment session';
$string['split'] = 'Automatic split';
$string['split_help'] = 'This setting defines the duration of each session created within the timeframe. Setting it to 0 disables the option.';
$string['status'] = 'Status';
$string['status_approved'] = 'Approved';
$string['status_booked'] = 'Booked';
$string['status_declined'] = 'Declined';
$string['status_fully_attended'] = 'Fully attended';
$string['status_no_show'] = 'No show';
$string['status_partially_attended'] = 'Partially attended';
$string['status_requested'] = 'Requested';
$string['status_user_cancelled'] = 'User Cancelled';
$string['status_waitlisted'] = 'Wait-listed';
$string['suppressemail'] = 'Suppress email notification';
$string['suppressemail_help'] = 'Use this option if you want to silently add/remove users from a Appointment session. When this option is toggled, the usual email
  confirmation is not sent to the selected users.';
$string['takeattendance'] = 'Take attendance';
$string['thirdpartyemailaddress'] = 'Third-party email address(es)';
$string['thirdpartyemailaddress_help'] = '**Third-party email address(es)** is an optional field used to specify the email address of a third-party (such as an external instructor) who will then receive confirmation messages whenever a user signs-up for a session.
When entering **multiple email addresses**, separate each address with a comma. For example: bob@example.com,joe@example.com';
$string['thirdpartywaitlist'] = 'Notify third-party about wait-listed sessions';
$string['thirdpartywaitlist_help'] = 'When **Notify third-party about wait-listed sessions** is selected the third-party(s) will be notified when a learner signs up for a wait-listed session. When

**Notify third-party about wait-listed sessions** is not enabled third-party(s) will only be notified when a user signs up (or cancels) for a scheduled session.';
$string['timecancelled'] = 'Time Cancelled';
$string['timeframes'] = 'Timeframes';
$string['timerequested'] = 'Time Requested';
$string['timesignedup'] = 'Time Signed Up';
$string['timestart'] = 'Start time';
$string['unapprovedrequests'] = 'Unapproved Requests';
$string['unknowndate'] = '(unknown date)';
$string['unknowntime'] = '(unknown time)';
$string['updatemessage'] = 'Update message';
$string['updatemessage_help'] = 'This message is sent out whenever session is changed.';
$string['usercalentry'] = 'Show entry on user\'s calendar';
$string['usercalentry_help'] = 'When active this setting adds a User Event entry to the calendar of an attendee of a Appointment session. When turned off this prevents a duplicate event appearing in a session attendee\'s calendar, where you have calendar display settings set to Course or Site.';
$string['usercancelledon'] = 'User cancelled on {$a}';
$string['usernotsignedup'] = 'Status: not signed up';
$string['usersignedup'] = 'Status: signed up';
$string['usersignedupon'] = 'User signed up on {$a}';
$string['userwillbewaitlisted'] = 'This session is currently full. By clicking the "Sign-up" button, you will be placed on the sessions\'s wait-list.';
$string['venue'] = 'Venue';
$string['waitlistedat'] = '<strong>Wait-listed:</strong> {$a}';
$string['waitlistedmessage'] = 'Wait-listed message';
$string['waitlistedmessage_help'] = 'This message is sent out whenever users sign-up for a wait-listed session.';
