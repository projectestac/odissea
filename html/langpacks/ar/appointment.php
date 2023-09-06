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
 * Strings for component 'appointment', language 'ar', version '4.1'.
 *
 * @package     appointment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtimeframe'] = 'إضافة إطار زمني';
$string['advanced'] = 'متقدمة';
$string['break'] = 'وقت الاستراحة';
$string['calendareventdescriptionbooking'] = 'لقد تم الحجز لك في <a href="{$a}">جلسة الموعد</a> هذه.';
$string['calendareventdescriptionsession'] = 'لقد أنشأتَ <a href="{$a}">جلسة الموعد</a> هذه.';
$string['capacity_help'] = '**الاستيعاب** هو عدد المقاعد المتاحة في الجلسة.

عندما تصل جلسة الموعد إلى حد استيعابها، لا تظهر تفاصيل الجلسة في صفحة المساق. ستظهر التفاصيل بلون رمادي في صفحة \'معاينة كل الجلسات\' ولن يعود المتعلم قادرًا على الانضمام إلى الجلسة.
&nbsp;';
$string['crontask'] = 'أعمال صيانة الموعد';
$string['decidelater'] = 'القرار لاحقاً';
$string['deletetimeframe'] = 'حذف الإطار الزمني';
$string['endtime'] = 'وقت الإنهاء';
$string['error:cancellationsnotallowed'] = 'ليس مسموحًا لك بإلغاء هذا التسجيل.';
$string['error:eventoccurred'] = 'لا يمكنك إلغاء حدث وقع بالفعل.';
$string['error:sessionsplitexceeds'] = 'وقت تقسيم الجلسة يتجاوز مدتها.';
$string['error:sessionstartafterend'] = 'وقت بدء الجلسة متأخر عن وقت إنتهائها';
$string['errorcannoteditsessions'] = 'ليست لديك صلاحية تحرير الجلسات';
$string['errorcannotviewappointment'] = 'ليست لديك صلاحية معاينة هذا الموعد';
$string['errorcannotviewattendees'] = 'ليست لديك صلاحية معاينة الحاضرين';
$string['eventaddsession'] = 'جلسة أُضيفت';
$string['eventapproverequests'] = 'جلسة موافقتها طُلبت';
$string['eventattendancetaken'] = 'حضور جلسة تم أخذه';
$string['eventattendeesviewed'] = 'حاضرو جلسة تمت معاينتهم';
$string['eventcancelbooking'] = 'جلسة أُلغي حجزها';
$string['eventcourseappointmentviewed'] = 'عيّنات مواعيد مساق شوهدت';
$string['eventcoursemoduleviewed'] = 'عيّنة وحدة موعد شوهدت';
$string['eventdeletesession'] = 'جلسة حُذِفت';
$string['eventsignup'] = 'جلسة تم التسجيل فيها';
$string['eventupdatesession'] = 'جلسة تم تحديثها';
$string['goback'] = 'رجوع';
$string['modulename_link'] = 'Appointments';
$string['partiallyfull'] = 'مكتمل جزئياً';
$string['placeholder:finishtime'] = '[وقت الإنهاء]';
$string['placeholder:starttime'] = '[وقت البدء]';
$string['pluginname'] = 'الموعد';
$string['privacy:metadata:appointment_signups'] = 'تسجيلات المستخدم في جلسات الموعد';
$string['privacy:metadata:appointment_signups:id'] = 'مُعرَّف التسجيل';
$string['privacy:metadata:appointment_signups:mailedreminder'] = 'وقت آخر إرسال للتذكير';
$string['privacy:metadata:appointment_signups:sessionid'] = 'مُعرَّف الجلسة';
$string['privacy:metadata:appointment_signups_status'] = 'حالة تسجيل المستخدم في الجلسة';
$string['privacy:metadata:appointment_signups_status:note'] = 'يخزن سبب إلغاء الجلسة';
$string['privacy:metadata:appointment_signups_status:signupid'] = 'مُعرَّف التسجيل';
$string['privacy:metadata:appointment_signups_status:timecreated'] = 'وقت إنشاء تسجيل الحساب';
$string['privacy:metadata:userid'] = 'مُعرَّف المستخدم الذي دخل إلى نشاط الموعد';
$string['remindermessage_help'] = 'تُرسل هذه الرسالة قبل تاريخ بدء الجلسة بأيام قليلة.';
$string['reminderperiod'] = 'الأيام قبل إرسال الرسالة';
$string['room'] = 'الغرفة';
$string['sessiondatetime'] = 'تاريخ/وقت الجلسة';
$string['sessiondescription'] = 'الوصف';
$string['sessionfinishtime'] = 'وقت انتهاء الجلسة';
$string['sessionsdetailstablesummary'] = 'وصف كامل للجلسة الحالية.';
$string['sessionstartdateandtime'] = '{$a->startdate}، {$a->starttime} - {$a->endtime} (المنطقة الزمنية: {$a->timezone})';
$string['sessionstartdateandtimewithouttimezone'] = '{$a->startdate}، {$a->starttime} - {$a->endtime}';
$string['sessionstartfinishdateandtime'] = '{$a->startdate} - {$a->enddate}، {$a->starttime} - {$a->endtime} (المنطقة الزمنية: {$a->timezone})';
$string['sessionstartfinishdateandtimewithouttimezone'] = '{$a->startdate} - {$a->enddate}، {$a->starttime} - {$a->endtime}';
$string['sessionstarttime'] = 'وقت بدء الجلسة';
$string['setting:defaultcancellationmessagedefault'] = 'هذا إبلاغ لك بأن حجزك في الموعد أدناه قد ألغي:<br><br>
***الحجز أُلغي***<br><br>
المشارك:   [firstname] [lastname]<br>
الموعد:   [appointmentname]<br><br>
التاريخ/التواريخ:<br>
[alldates]<br><br>
الموقع:   [session:location]<br>
المكان:   [session:venue]<br>
الغرفة:   [session:room]';
$string['setting:defaultconfirmationmessagedefault'] = 'هذا تأكيد بأنك قد حجزت في الموعد أدناه:<br><br>
المشارك:   [firstname] [lastname]<br>
الموعد:   [appointmentname]<br><br>
التاريخ/التواريخ:<br>
[alldates]<br><br>
الموقع:   [session:location]<br>
المكان:   [session:venue]<br>
الغرفة:   [session:room]
***يرجى حضورك قبل بدء الموعد بعشر دقائق***<br><br>
لإعادة جدولة حجزك أو إلغائه<br>
لإعادة جدولة حجزك عليك إلغاء هذا الحجز ومن ثم الحجز في جلسة جديدة أخرى.<br>
لإلغاء حجزك، عُد إلى صفحة الموعد ومن ثم اختر \'إلغاء\'.<br><br>
[details]<br><br>
ستتلقى تذكيرًا قبل [reminderperiod] أيام عمل من هذا الموعد.<br><br>';
$string['setting:defaultconfirmationsubjectdefault'] = 'تأكيد حجز الموعد: [appointmentname]، [starttime]-[finishtime]، [sessiondate]';
$string['setting:defaultremindermessagedefault'] = 'هذا تذكير بأنك قد حجزت في الموعد أدناه:<br><br>
المشارك:   [firstname] [lastname]<br>
الموعد:   [appointmentname]<br><br>
التاريخ/التواريخ:<br>
[alldates]<br><br>
الموقع:   [session:location]<br>
المكان:   [session:venue]<br>
الغرفة:   [session:room]
***يرجى حضورك قبل بدء الموعد بعشر دقائق***<br><br>
لإعادة جدولة حجزك أو إلغائه<br>
لإعادة جدولة حجزك عليك إلغاء هذا الحجز ومن ثم الحجز في جلسة جديدة أخرى.<br>
لإلغاء حجزك، عُد إلى صفحة الموعد ومن ثم اختر \'إلغاء\'.<br><br>
[details]';
$string['setting:defaultremindersubjectdefault'] = 'تذكير حجز الموعد: [appointmentname]، [starttime]-[finishtime]، [sessiondate]';
$string['setting:defaultrequestmessagedefault'] = 'لقد تم إرسال طلبك للحجز في الموعد أدناه إلى مديرك:

المشارك:   [firstname] [lastname]
الموعد:   [appointmentname]

التاريخ/التواريخ:
[alldates]

الموقع:   [session:location]
المكان:   [session:venue]
الغرفة:   [session:room]';
$string['setting:defaultrequestsubjectdefault'] = 'طلب حجز الموعد: [appointmentname]، [starttime]-[finishtime]';
$string['setting:defaultupdatemessagedefault'] = 'هذا تبليغ لك بأن الموعد الذي حجزته أو انضممت إلى قائمة انتظاره قد تغير:<br><br>
المشارك:   [firstname] [lastname]<br>
الموعد:   [appointmentname]<br><br>
التاريخ/التواريخ:<br>
[alldates]<br><br>
الموقع:   [session:location]<br>
المكان:   [session:venue]<br>
الغرفة:   [session:room]
***يرجى ملاحظة بأن هذا التبليغ لا يُعد تأكيدًا لحجز الموعد***<br><br>
لإعادة حجزك أو موضعك في قائمة الانتظار، عُد إلى صفحة الموعد ومن ثم اختر \'إلغاء\'.<br><br>
[details]<br><br>';
$string['setting:oneemailperday_caption'] = 'رسالة واحدة في اليوم:';
$string['shortname'] = '# الاسم المختصر';
$string['showoncalendar_help'] = 'عند اختيار **الموقع** سيتم عرض جلسات نشاط الموعد في تقويم الموقع بمثابة حدث عمومي. سيتمكن كل مستخدمي الموقع من معاينة تلك الجلسات.

عند اختيار **المساق** سيتم عرض كل جلسات نشاط الموعد في تقويم المساق وبمثابة حدث على مستوى المساق في تقويم الموقع ويذلك يكون مرئيًا للمستخدمين المنضمين إلى ذلك المساق.

عند اختيار **بلا** سيتم عرض جلسات نشاط الموعد بمثابة أحداث خاصة بالمستخدم في تقويم الحضور المؤكدين؛ مع اعتبار تأشير الخيار **الإظهار في تقويم المستخدم**.';
$string['status_partially_attended'] = 'حضور جزئي';
$string['timecancelled'] = 'وقت الإلغاء';
$string['timeframes'] = 'الأُطر الزمنية';
$string['timerequested'] = 'وقت تقديم الطلب';
$string['timesignedup'] = 'وقت التسجيل';
$string['timestart'] = 'وقت البدء';
$string['unknowntime'] = '(وقت مجهول)';
$string['venue'] = 'المكان';
