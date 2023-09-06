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
 * Strings for component 'onetoone', language 'ar', version '4.1'.
 *
 * @package     onetoone
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewfield'] = 'إضافة حقل مخصص جديد';
$string['addnewnotice'] = 'إضافة ملاحظة موقع جديدة';
$string['addsession'] = 'إضافة جلسة جديدة';
$string['alreadysignedup'] = 'لقد سجلتَ مسبقًا في نشاط وجهًا لوجه هذا.';
$string['calendareventdescriptionbooking'] = 'لقد تم الحجز لك في <a href="{$a}">جلسة واحد لواحد</a> هذه.';
$string['calendareventdescriptionsession'] = 'لقد أنشأت <a href="{$a}">جلسة واحد لواحد</a> هذه.';
$string['cancellationinstrmngr_help'] = 'عند تأشير **إرسال إشعار إلى المدير**، النص في حقل **إشعار إلى المدير** سيتم إرساله إلى مدير المتعلم لإبلاغه بأن الأخير قد ألغى حجز واحد لواحد.';
$string['capacity_help'] = '**الاستيعاب** هو عدد المقاعد المتاحة في الجلسة.

عندما تصل جلسة وجهًا لوجه إلى حد استيعابها، لا تظهر تفاصيل الجلسة في صفحة المساق. ستظهر التفاصيل بلون رمادي في صفحة \'معاينة كل الجلسات\' ولن يعود المتعلم قادرًا على الانضمام إلى الجلسة.
&nbsp;';
$string['confirmationinstrmngr_help'] = 'عند تأشير **إرسال إشعار إلى المدير**، النص في حقل **إشعار إلى المدير** سيتم إرساله إلى المدير لإبلاغه بأن أحد أعضاء الطاقم قد سجل في جلسة واحد لواحد.';
$string['confirmmanageremailaddress'] = 'تأكيد عنوان البريد الالكتروني للمدير';
$string['confirmmanageremailaddressquestion'] = 'هل لا زال <b>{$a}</b> العنوان البريدي لمديرك؟';
$string['confirmmanageremailinstruction1'] = 'لقد أدخلتَ سابقاً العنوان البريدي الآتي لمديرك:';
$string['confirmmanageremailinstruction2'] = 'هل لا يزال هذا عنوان البريد الإلكتروني لمديرك؟';
$string['dateadd'] = 'إضافة تاريخ جديد';
$string['emailmanagercancellation_help'] = 'عند تأشير **إرسال إشعار إلى المدير**، سيتم إرسال بريد الالكتروني إلى مدير المتعلم لإبلاغه بأن حجز واحد لواحد قد تم إلغاؤه.';
$string['emailmanagerconfirmation_help'] = 'عند تأشير **إرسال إشعار إلى المدير**، سيتم إرسال بريد الالكتروني تأكيدي إلى مدير المتعلم لإبلاغه بأن الأخير قد سجل في جلسة واحد لواحد.';
$string['emailmanagerreminder_help'] = 'عند تأشير **إرسال إشعار إلى المدير**، سيتم إرسال رسالة تذكيرية إلى مدير المتعلم قبل أيام قليلة من تاريخ بدء جلسة واحد لواحد.';
$string['error:emptyvenue'] = 'كان المكان فارغًا.';
$string['error:eventoccurred'] = 'لا يمكنك إلغاء حدث سبق وقوعه.';
$string['error:incorrectonetooneid'] = 'مُعرَّف واحد لواحد لم يكن صحيحًا';
$string['error:nopermissiontosignup'] = 'ليست لديك صلاحية الاشتراك في جلسة واحد لواحد هذه.';
$string['feedback'] = 'الإفادة';
$string['feedbackupdated'] = 'الإفادة تم تحديثها لـ {$a} من الأشخاص';
$string['goback'] = 'رجوع';
$string['learningroom'] = 'غرفة التعلم';
$string['location_help'] = '**الموقع** يصف أرجاء الجلسة (المدينة، البلد، المنطقة، إلخ).

**الموقع** يُعرض في صفحة المساق، \'صفحة التسجيل\'، صفحة \'معاينة كل الجلسات\'، وفي كل إشعارات البريد الالكتروني.

في صفحة \'معاينة كل الجلسات\'، يمكن ترشيح الجلسات المعروضة حسب الموقع.';
$string['maximumsize'] = 'أقصى عدد من الحضور';
$string['modulename'] = 'واحد لواحد';
$string['modulename_help'] = 'تمكن وحدة النشاط واحد لواحد المعلم من تهيئة نظام حجز طوعي لجلسات مبنية على أساس صفوف دراسية لشخص واحد.

يمكن لكل جلسة في نشاط واحد لواحد أن يكون لها إعدادات مخصصة، مثل: وقت البدء، الانتهاء والوصف.

يمكن للطلاب معاينة الجلسات والتسجيل فيها مع تعقب حضورهم وتوثيقه في منطقة التقديرات.';
$string['modulenameplural'] = 'واحد لواحد';
$string['noonetoones'] = 'ليس هناك نشاطات واحد لواحد';
$string['nositenotices'] = '<p>لم يتم تعريف أي ملاحظات في الموقع.</p>';
$string['onetoone'] = 'واحد لواحد';
$string['onetoonebooking'] = 'حجز واحد لواحد';
$string['onetoonename'] = 'اسم جلسة واحد لواحد';
$string['onetoonesession'] = 'جلسة واحد لواحد';
$string['place'] = 'الغرفة';
$string['pluginname'] = 'واحد لواحد';
$string['printversionid'] = 'نسخة الطباعة: بدون الاسم';
$string['printversionname'] = 'نسخة الطباعة: مع الاسم';
$string['reminderperiod'] = 'الأيام قبل إرسال الرسالة';
$string['room'] = 'الغرفة';
$string['room_help'] = '**الغرفة** هي اسم/رقم/مُعرَّف للغرفة المستعملة في جلسة التدريب.

تُعرض **الغرفة** في صفحة \'التسجيل\'، صفحة \'معاينة كل الجلسات\' وفي كل إشعارات البريد الالكتروني.';
$string['sessioninprogress'] = 'الجلسة قيد التنفيذ';
$string['sessionsdetailstablesummary'] = 'وصف كامل للجلسة الحالية.';
$string['sessionsoncoursepage'] = 'الجلسات المعروضة في صفحة المساق';
$string['sessionsoncoursepage_help'] = 'هذا يمثل عدد جلسات نشاط واحد لواحد التي سيتم إظهارها في الصفحة الرئيسية للمساق.';
$string['sessionvenue'] = 'مكان الجلسة';
$string['setting:defaultcancellationmessagedefault'] = 'هذا إبلاغ لك بأن حجزك في المساق أدناه قد ألغي:

***الحجز أُلغي***

المشارك:   [firstname] [lastname]
المساق:   [onetoonename]

الفترة:   [duration]
التاريخ/التواريخ:
[alldates]

الموقع:   [session:location]
المكان:   [session:venue]
الغرفة:   [session:room]';
$string['setting:defaultconfirmationmessagedefault'] = 'هذا تأكيد بأنك قد حجزت في المساق أدناه:

المشارك:   [firstname] [lastname]
المساق:   [onetoonename]
الكلفة:   [cost]

الفترة:   [duration]
التاريخ/التواريخ:
[alldates]

الموقع:   [session:location]
المكان:   [session:venue]
الغرفة:   [session:room]

***يرجى حضورك قبل بدء المساق بعشر دقائق***

لإعادة جدولة حجزك أو إلغائه
لإعادة جدولة حجزك عليك إلغاء هذا الحجز ومن ثم الحجز في جلسة جديدة أخرى.
لإلغاء حجزك، عُد إلى الموقع، ثم إلى صفحة هذا المساق ومن ثم اختر \'إلغاء\' من شاشة معلومات الحجز.

[details]

ستتلقى تذكيرًا قبل [reminderperiod] أيام عمل من هذا المساق.';
$string['setting:defaultvalue'] = 'القيمة الافتراضية';
$string['setting:oneemailperday'] = 'أرسل رسائل متعددة للأحداث المتعددة خلال اليوم.';
$string['setting:oneemailperday_caption'] = 'رسالة واحدة في اليوم:';
$string['setting:possiblevalues'] = 'قائمة القيم الممكنة';
$string['shortname_help'] = '**الاسم المختصر** هو وصف للجلسة التي تظهر في تقويم التدريب عند تمكين **إظهار في التقويم**.';
$string['showoncalendar_help'] = 'عند اختيار **الموقع** سيتم عرض جلسات نشاط وجه لوجه في تقويم الموقع بمثابة حدث عمومي. سيتمكن كل مستخدمي الموقع من معاينة تلك الجلسات.

عند اختيار **المساق** سيتم عرض كل جلسات نشاط وجه لوجه في تقويم المساق وبمثابة حدث على مستوى المساق في تقويم الموقع ويذلك يكون مرئيًا للمستخدمين المنضمين إلى ذلك المساق.

عند اختيار **بلا** سيتم عرض جلسات نشاط وجه لوجه بمثابة أحداث خاصة بالمستخدم في تقويم الحضور المؤكدين؛ مع اعتبار تأشير الخيار **الإظهار في تقويم المستخدم**.';
$string['signupforthissession'] = 'التسجيل في جلسة واحد لواحد';
$string['sitenoticesheading'] = 'ملاحظات الموقع';
$string['status_partially_attended'] = 'حضور جزئي';
$string['upcomingsessionslist'] = 'قائمة بكل الجلسات القادمة لنشاط واحد لواحد هذا';
$string['venue'] = 'المكان';
$string['venue_help'] = '**المكان** هو البناية التي ستُعقد فيها الجلسة.

يتم عرض **المكان** في صفحة \'التسجيل\'، صفحة \'معاينة كل الجلسات\'، وفي كل إشعارات البريد الالكتروني.';
