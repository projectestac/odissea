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
 * Strings for component 'appointment', language 'ar', version '4.5'.
 *
 * @package     appointment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingappointment'] = 'إضافة موعد';
$string['addingappointments'] = 'إضافة المواعيد';
$string['addremoveattendees'] = 'إضافة/إزالة الحضور';
$string['addsession'] = 'إضافة جلسة';
$string['addtimeframe'] = 'إضافة إطار زمني';
$string['advanced'] = 'متقدمة';
$string['allowcancellations'] = 'السماح بالإلغاء';
$string['allowcancellations_help'] = 'إذا تم تحديده، فسيتمكن الحاضرون في الجلسة من إلغاء اشتراكاتهم';
$string['allowcancellationsdefault'] = 'السماح بالإلغاء الافتراضي';
$string['allowcancellationsdefault_help'] = 'إذا تم تحديده، فسيكون الإعداد الافتراضي، عند إنشاء جلسات جديدة لهذا النشاط، هو السماح بإلغاء الاشتراك';
$string['allowwaitlist'] = 'السماح بقائمة الانتظار';
$string['allowwaitlist_help'] = 'عند تحديد "السماح بقائمة الانتظار"، سيتمكن المتعلمون من الاشتراك في جلسة الموعد حتى لو كانت ممتلئة بالفعل.<br />

عندما يقوم المتعلم بالتسجيل في جلسة ممتلئة بالفعل، سيتلقى رسالة بريد إلكتروني تبلغه بأنه قد تم إدراجه في قائمة الانتظار للجلسة وسيتم إعلامه عندما يصبح الحجز متاحًا.';
$string['alreadysignedup'] = 'لقد قمت بالفعل بالتسجيل في نشاط الموعد هذا.';
$string['appointment'] = 'موعد';
$string['appointment:addattendees'] = 'إضافة الحضور إلى جلسة الموعد';
$string['appointment:addinstance'] = 'إضافة مثيل';
$string['appointment:configurecancellation'] = 'السماح بتكوين عمليات إلغاء الاشتراك، عند إضافة/تحرير نشاط الموعد.';
$string['appointment:editsessions'] = 'إضافة وتحرير ونسخ وحذف جلسات المواعيد';
$string['appointment:managecustomfields'] = 'إدارة الحقول المخصصة لجلسة التعيين.';
$string['appointment:overbook'] = 'قم بالتسجيل في الجلسات الكاملة التي لم يتم تمكين قائمة الانتظار فيها.';
$string['appointment:removeattendees'] = 'إزالة الحضور من جلسة التعيين';
$string['appointment:signup'] = 'الاشتراك في الجلسة';
$string['appointment:takeattendance'] = 'خذ الحضور';
$string['appointment:view'] = 'عرض أنشطة وجلسات المواعيد';
$string['appointment:viewattendees'] = 'عرض قائمة الحضور والحاضرين';
$string['appointment:viewcancellations'] = 'عرض الإلغاءات';
$string['appointmentactivity'] = 'نشاط التعيين';
$string['appointmentcustomfields'] = 'الحقول المخصصة للتعيين';
$string['appointmentname'] = 'اسم الموعد';
$string['appointments'] = 'المواعيد';
$string['appointmentsession'] = 'جلسة التعيين';
$string['appointmentsessiondates'] = 'مواعيد جلسات التعيين';
$string['appointmentsessions'] = 'جلسات التعيين';
$string['appointmentsettings'] = 'إعدادات الموعد';
$string['approvalreqd'] = 'الموافقة مطلوبة';
$string['approvalreqd_help'] = 'عند تحديد "الموافقة مطلوبة"، سيحتاج المتعلم إلى موافقة من مديره للسماح له بحضور جلسة التعيين.';
$string['approve'] = 'يعتمد';
$string['attendance'] = 'حضور';
$string['attendanceinstructions'] = 'حدد المستخدمين الذين حضروا الجلسة:';
$string['attendedsession'] = 'حضر الجلسة';
$string['attendees'] = 'الحاضرين';
$string['attendeestablesummary'] = 'الأشخاص الذين يخططون لهذه الجلسة أو حضروها.';
$string['availableplaceholders'] = 'العناصر النائبة المتاحة';
$string['availableseats'] = '{$a} المقاعد المتاحة';
$string['book'] = 'احجز';
$string['bookedat'] = '<strong>الحجز:</strong> {$a}';
$string['bookedvscapacity'] = 'حجز / السعة';
$string['bookingcancelled'] = 'لقد تم إلغاء الحجز الخاص بك.';
$string['bookingcompleted'] = 'تم الانتهاء من الحجز الخاص بك.';
$string['bookingfull'] = 'ممتلىء';
$string['bookingopen'] = 'يفتح';
$string['break'] = 'وقت الاستراحة';
$string['break_help'] = 'يحدد هذا الإعداد وقت الاستراحة بين الجلسات. الإعداد على 0 يعني عدم الحاجة إلى استراحة.';
$string['calendareventdescriptionbooking'] = 'لقد تم الحجز لك في <a href="{$a}">جلسة الموعد</a> هذه.';
$string['calendareventdescriptionsession'] = 'لقد أنشأتَ <a href="{$a}">جلسة الموعد</a> هذه.';
$string['calendaroptions'] = 'خيارات التقويم';
$string['cancel'] = 'يلغي';
$string['cancelbooking'] = 'إلغاء الحجز';
$string['cancellationinstrmngr'] = '#إشعار للمدير';
$string['cancellationinstrmngr_help'] = 'عند تحديد **إرسال إشعار إلى المدير**، يتم إرسال النص الموجود في الحقل **إشعار للمدير** إلى مدير المتعلم لإبلاغه بأنه قد قام بإلغاء حجز موعد.';
$string['cancellationmessage'] = 'رسالة الإلغاء';
$string['cancellationmessage_help'] = 'يتم إرسال هذه الرسالة عندما يقوم المستخدمون بإلغاء حجزهم لجلسة ما.';
$string['cancellations'] = 'الإلغاءات';
$string['cancellationstablesummary'] = 'قائمة الأشخاص الذين ألغوا اشتراكاتهم في الجلسة.';
$string['cancelreason'] = 'سبب الالغاء';
$string['cannotapproveatcapacity'] = 'لا يمكنك الموافقة على المزيد من الحضور لأن هذه الجلسة ممتلئة.';
$string['cannotsignupsessioninprogress'] = 'لا يمكنك التسجيل، هذه الجلسة قيد التقدم';
$string['cannotsignupsessionover'] = 'لا يمكنك التسجيل، هذه الجلسة قد انتهت.';
$string['capacity'] = 'سعة';
$string['capacity_help'] = '**الاستيعاب** هو عدد المقاعد المتاحة في الجلسة.

عندما تصل جلسة الموعد إلى حد استيعابها، لا تظهر تفاصيل الجلسة في صفحة المقرر. ستظهر التفاصيل بلون رمادي في صفحة \'معاينة كل الجلسات\' ولن يعود المتعلم قادرًا على الانضمام إلى الجلسة.
&nbsp;';
$string['closed'] = 'مغلق';
$string['completionattended'] = 'حجز موعد والحضور إليه';
$string['completionattended_help'] = 'إذا تم تمكينه، فسيتم اعتبار النشاط مكتملًا إذا تم وضع علامة "حضور كامل" أو "حضور جزئي" على حجز حضور المتعلم.';
$string['completionbooked'] = 'يجب على المتعلم حجز موعد لإكمال هذا النشاط';
$string['completionbooked_help'] = 'في حالة التمكين، سيتم اعتبار النشاط مكتملًا إذا كانت حالة المتعلم "محجوزًا" أو "حضر بالكامل" أو "حضر جزئيًا". إذا قام المتعلم بإلغاء الحضور، أو تم إدراجه في قائمة الانتظار، أو تم وضع علامة "عدم الحضور" على حضوره، فلن يعتبر النشاط مكتملاً.';
$string['completiondetail:attended'] = 'حضور موعد';
$string['completiondetail:booked'] = 'حجز موعد';
$string['confirmationinstrmngr'] = '#إشعار للمدير';
$string['confirmationinstrmngr_help'] = 'عند تحديد "إرسال إشعار إلى المدير"، يتم إرسال النص الموجود في حقل "إشعار للمدير" إلى المدير لإبلاغه بأن الموظف قد قام بالتسجيل في جلسة تعيين.';
$string['confirmationmessage'] = 'رسالة تأكيد';
$string['confirmationmessage_help'] = 'يتم إرسال هذه الرسالة عندما يقوم المستخدمون بالتسجيل في جلسة ما.';
$string['confirmcancelbooking'] = 'تأكيد الالغاء';
$string['courseresetsessions'] = 'إزالة كافة الجلسات';
$string['courseresetsignups'] = 'إزالة كافة عمليات الاشتراك في الجلسة';
$string['crontask'] = 'أعمال صيانة الموعد';
$string['currentstatus'] = 'الحالة الحالية';
$string['customisednotifications'] = 'الإشعارات المخصصة';
$string['date'] = 'تاريخ';
$string['decidelater'] = 'القرار لاحقاً';
$string['decline'] = 'انخفاض';
$string['delete'] = 'يمسح';
$string['deleteappointmentconfirm'] = 'هل أنت متأكد تمامًا من رغبتك في حذف هذا الموعد وجميع حجوزاته؟';
$string['deletesession'] = 'حذف الجلسة';
$string['deletetimeframe'] = 'حذف الإطار الزمني';
$string['details'] = 'تفاصيل';
$string['duplicate'] = 'ينسخ';
$string['duplicateappointment'] = 'موعد مكرر';
$string['editingappointment'] = 'تحرير الموعد';
$string['email:message'] = 'رسالة';
$string['email:subject'] = 'موضوع';
$string['emailmanager'] = 'إرسال إشعار إلى المدير';
$string['emailmanagercancellation'] = '# إرسال إشعار إلى المدير';
$string['emailmanagercancellation_help'] = 'عند تحديد "إرسال إشعار إلى المدير"، سيتم إرسال بريد إلكتروني إلى مدير المتعلم لإبلاغه بإلغاء حجز الموعد.';
$string['emailmanagerconfirmation'] = '# إرسال إشعار إلى المدير';
$string['emailmanagerconfirmation_help'] = 'عند تحديد "إرسال إشعار إلى المدير"، سيتم إرسال رسالة تأكيد بالبريد الإلكتروني إلى مدير المتعلم عندما يقوم المتعلم بالتسجيل في جلسة التعيين.';
$string['emailmanagerreminder'] = '# إرسال إشعار إلى المدير';
$string['emailmanagerreminder_help'] = 'عند تحديد "إرسال إشعار إلى المدير"، سيتم إرسال رسالة تذكير إلى مدير المتعلم قبل أيام قليلة من تاريخ بدء جلسة التعيين.';
$string['empty'] = 'فارغ';
$string['endtime'] = 'وقت الإنهاء';
$string['entitiysession'] = 'حصة';
$string['error:cancellationsnotallowed'] = 'ليس مسموحًا لك بإلغاء هذا التسجيل.';
$string['error:canttakeattendanceforunstartedsession'] = 'لا يمكن أخذ الحضور للجلسة التي لم تبدأ بعد.';
$string['error:eventoccurred'] = 'لا يمكنك إلغاء حدث وقع بالفعل.';
$string['error:invaliduserid'] = 'هوية مستخدم غير صالحه';
$string['error:manageremailaddressmissing'] = 'لم يتم تعيينك حاليًا لمدير في النظام. يرجى الاتصال بمدير الموقع.';
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
$string['eventcourseappointmentviewed'] = 'عيّنات مواعيد مقرر شوهدت';
$string['eventcoursemoduleviewed'] = 'عيّنة وحدة موعد شوهدت';
$string['eventdeletesession'] = 'جلسة حُذِفت';
$string['eventsignup'] = 'جلسة تم التسجيل فيها';
$string['eventupdatesession'] = 'جلسة تم تحديثها';
$string['full'] = 'التاريخ مشغول بالكامل';
$string['fullfilter'] = 'ممتلىء';
$string['goback'] = 'رجوع';
$string['icalendarheading'] = 'مرفقات آي كاليندار
';
$string['joinwaitlist'] = 'انضم إلى قائمة الانتظار';
$string['location'] = 'موقع';
$string['managecustomfields'] = 'إدارة الحقول المخصصة';
$string['modulename'] = 'حجز موعد';
$string['modulename_help'] = 'التعيين عبارة عن وحدة نشاط للمدرسين لتتبع الأنشطة الشخصية.

فهو يمكّن المعلم من إعداد نظام حجز لجلسة واحدة أو أكثر من الجلسات الشخصية أو في الفصل الدراسي، ليقوم الطلاب بالتسجيل فيها.

وحدة النشاط هذه مناسبة للجلسات الفردية أو الأنشطة متعددة الجلسات مثل الندوات.

يمكن أن تحتوي الجلسات على تواريخ وأوقات متعددة ضمن نشاط موعد واحد، ويمكن إنشاؤها بشكل مجمّع باستخدام الفترات الزمنية المحددة في التكوين.

النشاط يسمح بتتبع الحضور.';
$string['modulename_link'] = 'Appointments';
$string['modulenameplural'] = 'مواعيد';
$string['multipleappointments'] = 'مواعيد متعددة';
$string['noactionableunapprovedrequests'] = 'لا توجد طلبات غير معتمدة قابلة للتنفيذ';
$string['noremindersneedtobesent'] = 'لا يلزم إرسال أي تذكيرات.';
$string['nosignedupusers'] = 'لم يقم أي مستخدم بالتسجيل في هذه الجلسة.';
$string['notset'] = 'غير مضبوط';
$string['notsignedup'] = 'أنت غير مسجل في هذه الجلسة.';
$string['partiallyfull'] = 'مكتمل جزئياً';
$string['placeholder:alldates'] = '[alldates]';
$string['placeholder:appointmentname'] = '[appointmentname]';
$string['placeholder:attendeeslink'] = '[attendeeslink]';
$string['placeholder:details'] = '[details]';
$string['placeholder:finishtime'] = '[وقت الإنهاء]';
$string['placeholder:firstname'] = '[firstname]';
$string['placeholder:lastname'] = '[lastname]';
$string['placeholder:reminderperiod'] = '[lastname]';
$string['placeholder:sessiondate'] = '[sessiondate]';
$string['placeholder:starttime'] = '[وقت البدء]';
$string['placeholdersdesc'] = 'العناصر النائبة';
$string['placeholdersdesc_help'] = 'تتيح لك العناصر النائبة إضافة محتوى ديناميكي، على سبيل المثال. سيتم استبدال العنصر النائب [firstname] بالاسم الأول للمستخدم في الإشعار الذي يتم تسليمه إلى المستخدم.';
$string['pluginadministration'] = 'إدارة التعيين';
$string['pluginname'] = 'الموعد';
$string['potentialattendees'] = 'الحضور المحتملين';
$string['privacy:metadata:appointment_signups'] = 'تسجيلات المستخدم في جلسات الموعد';
$string['privacy:metadata:appointment_signups:id'] = 'مُعرَّف التسجيل';
$string['privacy:metadata:appointment_signups:mailedreminder'] = 'وقت آخر إرسال للتذكير';
$string['privacy:metadata:appointment_signups:sessionid'] = 'مُعرَّف الجلسة';
$string['privacy:metadata:appointment_signups_status'] = 'حالة تسجيل المستخدم في الجلسة';
$string['privacy:metadata:appointment_signups_status:grade'] = 'الدرجة المخصصة لحضور الجلسة';
$string['privacy:metadata:appointment_signups_status:note'] = 'يخزن سبب إلغاء الجلسة';
$string['privacy:metadata:appointment_signups_status:signupid'] = 'مُعرَّف التسجيل';
$string['privacy:metadata:appointment_signups_status:statuscode'] = 'حالة الاشتراك، على سبيل المثال، تم الإلغاء،الرفض،الحضور الكامل';
$string['privacy:metadata:appointment_signups_status:timecreated'] = 'وقت إنشاء تسجيل الحساب';
$string['privacy:metadata:userid'] = 'مُعرَّف المستخدم الذي دخل إلى نشاط الموعد';
$string['remindermessage'] = 'رسالة تذكير';
$string['remindermessage_help'] = 'تُرسل هذه الرسالة قبل تاريخ بدء الجلسة بأيام قليلة.';
$string['reminderperiod'] = 'الأيام قبل إرسال الرسالة';
$string['reminderperiod_help'] = 'سيتم إرسال رسالة التذكير قبل عدة أيام من بدء الجلسة.';
$string['requestmessage'] = 'رسالة الطلب';
$string['requestmessage_help'] = 'عند تمكين **الموافقة مطلوبة**، يكون قسم **رسالة الطلب** متاحًا.

يعرض قسم **رسالة الطلب** الإشعارات المرسلة إلى المتعلم ومديره فيما يتعلق بعملية الموافقة على حضور المتعلم جلسة التعيين.

**الموضوع:** هو سطر الموضوع الذي يظهر في رسائل البريد الإلكتروني الخاصة بالموافقة على الطلب المرسلة إلى المدير والمتعلم.

**الرسالة:** هي رسالة البريد الإلكتروني المرسلة إلى المتعلم لإبلاغه بأن طلبه لحضور جلسة التعيين قد تم إرساله إلى مديره للموافقة عليه.

**إشعار للمدير:** هو نص البريد الإلكتروني الذي يتم إرساله إلى مدير المتعلم لطلب الموافقة على حضور جلسة التعيين.';
$string['requeststablesummary'] = 'الأشخاص الذين يطلبون حضور هذه الجلسة.';
$string['room'] = 'الغرفة';
$string['saveattendance'] = 'حفظ الحضور';
$string['search:activity'] = 'أنشطة التعيين';
$string['seatsavailable'] = 'مقاعد متوفرة';
$string['seatsbooked'] = 'تم حجز المقاعد';
$string['sessionavailability'] = 'توفر الجلسة';
$string['sessiondatetime'] = 'تاريخ/وقت الجلسة';
$string['sessiondescription'] = 'الوصف';
$string['sessionduration'] = 'مدة الجلسة';
$string['sessionfinished'] = 'انتهى';
$string['sessionfinishtime'] = 'وقت انتهاء الجلسة';
$string['sessioninprogress'] = 'الجلسة قيد التقدم';
$string['sessionisfull'] = 'هذه الجلسة ممتلئة الآن. ستحتاج إلى اختيار وقت آخر أو التحدث إلى المدرب.';
$string['sessionnotstarted'] = 'لم يبدأ';
$string['sessionrequiresmanagerapproval'] = 'تتطلب هذه الجلسة موافقة المدير للحجز.';
$string['sessions'] = 'الجلسات';
$string['sessionsdetailstablesummary'] = 'وصف كامل للجلسة الحالية.';
$string['sessionstartdate'] = 'تاريخ بدء الجلسة';
$string['sessionstartdateandtime'] = '{$a->startdate}، {$a->starttime} - {$a->endtime} (المنطقة الزمنية: {$a->timezone})';
$string['sessionstartdateandtimewithouttimezone'] = '{$a->startdate}، {$a->starttime} - {$a->endtime}';
$string['sessionstartfinishdateandtime'] = '{$a->startdate} - {$a->enddate}، {$a->starttime} - {$a->endtime} (المنطقة الزمنية: {$a->timezone})';
$string['sessionstartfinishdateandtimewithouttimezone'] = '{$a->startdate} - {$a->enddate}، {$a->starttime} - {$a->endtime}';
$string['sessionstarttime'] = 'وقت بدء الجلسة';
$string['sessionstatus'] = 'حالة الجلسة';
$string['setting:defaultcancellationmessagedefault'] = 'هذا إبلاغ لك بأن حجزك في الموعد أدناه قد ألغي:<br><br>
***الحجز أُلغي***<br><br>
المشارك:   [firstname] [lastname]<br>
الموعد:   [appointmentname]<br><br>
التاريخ/التواريخ:<br>
[alldates]<br><br>
الموقع:   [session:location]<br>
المكان:   [session:venue]<br>
الغرفة:   [session:room]';
$string['setting:defaultcancellationsubjectdefault'] = 'إلغاء حجز الموعد';
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
$string['setting:defaultupdatesubjectdefault'] = 'تحديث الموعد:  [appointmentname], [starttime]-[finishtime], [sessiondate]';
$string['setting:defaultwaitlistedmessagedefault'] = 'هذا للعلم بأنه تمت إضافتك إلى قائمة الانتظار لـ:<br><br>
الموعد:    [appointmentname]<br>
الموقع: [session:location]<br>
المشارك: [firstname] [lastname]<br><br>
***يرجى ملاحظة أن هذا ليس تأكيدًا لحجز موعد***<br><br>
من خلال قائمة الانتظار، قمت بتسجيل اهتمامك بهذا الموعد وسيتم الاتصال بك مباشرة عندما تصبح الجلسات متاحة.<br><br>
لإزالة نفسك من قائمة الانتظار هذه، يرجى العودة إلى هذا الموعد والنقر فوق "إلغاء الأمر". يرجى ملاحظة أنه لا يوجد بريد إلكتروني لتأكيد إزالة قائمة الانتظار.';
$string['setting:defaultwaitlistedsubjectdefault'] = 'نصيحة بشأن قائمة الانتظار لـ [appointmentname]';
$string['setting:oneemailperday'] = 'أرسل بريدًا إلكترونيًا منفصلاً لكل يوم في الأحداث التي تمتد لعدة أيام';
$string['setting:oneemailperday_caption'] = 'رسالة واحدة في اليوم:';
$string['settings'] = 'إعدادات';
$string['shortname'] = '# الاسم المختصر';
$string['shortname_help'] = '**الاسم المختصر** هو وصف الجلسة التي تظهر في تقويم التدريب عند تمكين **العرض في التقويم**.';
$string['showoncalendar'] = 'إعدادات عرض التقويم';
$string['showoncalendar_help'] = 'عند اختيار **الموقع** سيتم عرض جلسات نشاط الموعد في تقويم الموقع بمثابة حدث عمومي. سيتمكن كل مستخدمي الموقع من معاينة تلك الجلسات.

عند اختيار **المساق** سيتم عرض كل جلسات نشاط الموعد في تقويم المساق وبمثابة حدث على مستوى المساق في تقويم الموقع ويذلك يكون مرئيًا للمستخدمين المنضمين إلى ذلك المقرر.

عند اختيار **بلا** سيتم عرض جلسات نشاط الموعد بمثابة أحداث خاصة بالمستخدم في تقويم الحضور المؤكدين؛ مع اعتبار تأشير الخيار **الإظهار في تقويم المستخدم**.';
$string['sign-ups'] = 'الاشتراكات';
$string['signupforthissession'] = 'قم بالتسجيل في جلسة التعيين هذه';
$string['split'] = 'الانقسام التلقائي';
$string['split_help'] = 'يحدد هذا الإعداد مدة كل جلسة يتم إنشاؤها ضمن الإطار الزمني. يؤدي تعيينه إلى 0 إلى تعطيل الخيار.';
$string['status'] = 'حالة';
$string['status_approved'] = 'موافقة';
$string['status_booked'] = 'حجز';
$string['status_declined'] = 'انخفض';
$string['status_fully_attended'] = 'حضر بالكامل';
$string['status_no_show'] = 'لا تظهر';
$string['status_partially_attended'] = 'حضور جزئي';
$string['status_requested'] = 'مطلوب';
$string['status_user_cancelled'] = 'تم إلغاء المستخدم';
$string['status_waitlisted'] = 'قائمة الانتظار';
$string['suppressemail'] = 'قمع إشعار البريد الإلكتروني';
$string['suppressemail_help'] = 'استخدم هذا الخيار إذا كنت تريد إضافة/إزالة المستخدمين بصمت من جلسة الموعد. عندما يتم تبديل هذا الخيار، البريد الإلكتروني المعتاد
لا يتم إرسال التأكيد إلى المستخدمين المحددين.';
$string['takeattendance'] = 'خذ الحضور';
$string['thirdpartyemailaddress'] = 'عنوان (عناوين) البريد الإلكتروني لجهة خارجية';
$string['thirdpartyemailaddress_help'] = '**عنوان (عناوين) البريد الإلكتروني لجهة خارجية** هو حقل اختياري يُستخدم لتحديد عنوان البريد الإلكتروني لجهة خارجية (مثل مدرس خارجي) الذي سيتلقى بعد ذلك رسائل تأكيد عندما يقوم المستخدم بالتسجيل في جلسة ما.
عند إدخال **عناوين بريد إلكتروني متعددة**، افصل كل عنوان بفاصلة. على سبيل المثال: bob@example.com،joe@example.com';
$string['thirdpartywaitlist'] = 'قم بإخطار الطرف الثالث بشأن الجلسات المدرجة في قائمة الانتظار';
$string['thirdpartywaitlist_help'] = 'عند تحديد **إخطار الطرف الثالث بشأن الجلسات المدرجة في قائمة الانتظار**، سيتم إخطار الطرف (الأطراف) الثالثة عندما يقوم المتعلم بالتسجيل في جلسة مدرجة في قائمة الانتظار. متى

**إخطار الطرف الثالث بشأن الجلسات المدرجة في قائمة الانتظار** لم يتم تمكين الطرف (الأطراف) الثالث فقط عندما يقوم المستخدم بالتسجيل (أو الإلغاء) لجلسة مجدولة.';
$string['timecancelled'] = 'وقت الإلغاء';
$string['timeframes'] = 'الأُطر الزمنية';
$string['timerequested'] = 'وقت تقديم الطلب';
$string['timesignedup'] = 'وقت التسجيل';
$string['timestart'] = 'وقت البدء';
$string['unapprovedrequests'] = 'الطلبات غير الموافق عليها';
$string['unknowndate'] = '(unknown date)';
$string['unknowntime'] = '(وقت مجهول)';
$string['updatemessage'] = 'تحديث الرسالة';
$string['updatemessage_help'] = 'يتم إرسال هذه الرسالة كلما تم تغيير الجلسة.';
$string['usercalentry'] = 'إظهار الإدخال في تقويم المستخدم';
$string['usercalentry_help'] = 'عندما يكون هذا الإعداد فعالاً، فإنه يضيف إدخال حدث مستخدم إلى تقويم أحد الحاضرين في جلسة الموعد. عند إيقاف تشغيله، يؤدي هذا إلى منع ظهور حدث مكرر في تقويم حضور الجلسة، حيثما يكون عرض التقويم معدًا للظهور في المساق أو الموقع.';
$string['usercancelledon'] = 'تم إلغاء المستخدم في {$a}';
$string['usernotsignedup'] = 'الحالة: غير مسجل';
$string['usersignedup'] = 'الحالة: تم الاشتراك';
$string['usersignedupon'] = 'قام المستخدم بالتسجيل في {$a}';
$string['userwillbewaitlisted'] = 'هذه الجلسة ممتلئة حاليًا. بالنقر على زر "التسجيل"، سيتم وضعك على قائمة انتظار الجلسات.';
$string['venue'] = 'المكان';
$string['waitlistedat'] = '<strong>قائمة الانتظار:</strong> {$a}';
$string['waitlistedmessage'] = 'رسالة قائمة الانتظار';
$string['waitlistedmessage_help'] = 'يتم إرسال هذه الرسالة عندما يقوم المستخدمون بالتسجيل في جلسة قائمة الانتظار.';
