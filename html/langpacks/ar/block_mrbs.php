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
 * Strings for component 'block_mrbs', language 'ar', version '3.11'.
 *
 * @package     block_mrbs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addroom'] = 'إضافة غرفة';
$string['advanced_search'] = 'بحث متقدم';
$string['all_day'] = 'كل اليوم';
$string['backadmin'] = 'عودة إلى المشرف';
$string['bgcolor'] = 'لون الخلفية';
$string['booking_users_help'] = 'هذه ينبغي أن تكون قائمة مفصولة بفوارز لعناوين البريد الالكتروني للمستخدمين المسموح لهم بحجز هذه الغرفة. أتركه فارغًا للسماح لكل المستخدمين بحجزها.';
$string['bookingmovedmessage'] = 'لقد تم نقل حجزك {$a->name} من الغرفة {$a->oldroom} إلى الغرفة {$a->newroom} عند {$a->area} للدرس المقام في {$a->date}، {$a->starttime}. الغرفة مطلوبة من أجل {$a->newbookingname}. تنبيه: تم إجراء هذا الانتقال من قبل الحاسوب الذي قام باحتساب أفضل الاحتمالات، يرجى التحقق من كون الغرفة مناسبة قبل بدء الدرس';
$string['bookingmovedshort'] = '{$a->name} إنتقلت إلى {$a->newroom}';
$string['bookingmoveerror'] = 'خطأ في حجز الغرفة';
$string['brief_description'] = 'وصف مختصر.';
$string['clash'] = 'تضارب: {$a->oldbooking} {$a->newbooking} {$a->time} في الغرفة: {$a->room}';
$string['clashemailsub'] = 'تنبيه التضارب في الغرف';
$string['computerroom'] = 'غرف الحاسوب فقط';
$string['computerrooms'] = 'غرف الحاسوب';
$string['config_cookie_path_override2'] = 'إذا تم تعيين هذه القيمة فستستعمل من قبل مخطط جلسة \'php\' لتجاوز السلوك الافتراضي المتعلق بالتحديد التلقائي للمسار المستعمل لملف تعريف الارتباط.';
$string['config_default_report_days'] = 'إمتداد التقرير (بالأيام)';
$string['config_default_report_days2'] = 'الامتداد الافتراضي للتقرير بالأيام';
$string['config_default_room'] = 'الغرفة الافتراضية';
$string['config_default_room2'] = 'حدد الغرفة الافتراضية للبدء بها (المستعملة من قبل الملف index.php). يمكن معرفة أرقام الغرف عند النظر إلى رابط تحرير الغرفة أو حذفها والذي يمكن الوصول إليه من صفحة المشرف.';
$string['config_eveningends2'] = 'وقت الإنهاء (ساعة) بالنسبة لليوم. ينبغي تعطيل الفترات لاستعمال هذا الخيار.';
$string['config_eveningends_min2'] = 'وقت الإنهاء (دقيقة) بالنسبة لليوم. ينبغي تعطيل الفترات لاستعمال هذا الخيار.';
$string['config_mail_room_admin_on_bookings'] = 'مراسلة مشرف الغرفة';
$string['config_mail_room_admin_on_bookings2'] = 'إرسال بريد الكتروني إلى مشرف الغرفة لإشعاره بالحجز الجديد';
$string['config_morningstarts2'] = 'وقت البدء (ساعة) بالنسبة لليوم. ينبغي تعطيل الفترات لاستعمال هذا الخيار.';
$string['config_morningstarts_min2'] = 'وقت البدء (دقيقة) بالنسبة لليوم. ينبغي تعطيل الفترات لاستعمال هذا الخيار.';
$string['config_new_window'] = 'النافذة';
$string['config_refresh_rate'] = 'وقت تنشيط الصفحة';
$string['config_refresh_rate2'] = 'وقت تنشيط الصفحة (بالثواني). إجعله 0 لتعطيله.';
$string['config_resolution'] = 'الفترات الزمنية';
$string['config_resolution2'] = 'الفترات الزمنية المزمع جدولتها. ينبغي تعطيل الفترات لاستعمال هذا الخيار.';
$string['config_search_count'] = 'نتائج البحث لكل صفحة';
$string['config_search_count2'] = 'النتائج لكل صفحة عند البحث';
$string['config_timeformat'] = 'تنسيق الوقت';
$string['config_timeformat2'] = 'تنسيق الوقع المزمع استعماله من قبل MRBS.';
$string['config_times_right_side'] = 'الوقت عند الجانب الأيمن';
$string['config_times_right_side2'] = 'لعرض الوقت في الجانب الأيمن بطريقة عرض اليوم والأسبوع، ضعه على نعم';
$string['ctrl_click'] = 'استعمل النقر المسبوق بالضغط على مفتاح Ctrl لتحديد أكثر من غرفة';
$string['dayafter'] = 'إذهب إلى اليوم بعد';
$string['daybefore'] = 'إذهب إلى اليوم قبل';
$string['days'] = 'أيام';
$string['delarea'] = 'ينبغي عليك حذف كل الغرف من هذه المنطقة قبل أن تتمكن من حذفها<p>';
$string['dontshowoccupied'] = 'لا تُظهر الغرف المشغولة';
$string['doublebookebody'] = 'قام المستخدم {$a->user} بتأكيد حجز غرفتك، {$a->room}، في {$a->time} يوم {$a->date}. هذا يتضارب مع حجزك {$a->oldbooking}. المستخدم حجز الغرفة لـ {$a->newbooking}. إن لم تكن لديك مشكلة، فلا حاجة للقيام بشيء. مع ذلك، إن لم تكن هذا ما تتوقعه، يرجى التواصل مع المستخدم لحل الإشكال. تم إرسال هذه الرسالة تلقائيًا من قبل نظام حجز الغرف، إن كنت تظن بأن تلقيت هذه الرسالة بطريق الخطأ يرجى التواصل مع {$a->admin}';
$string['editroom'] = 'تحرير الغرفة';
$string['editroomarea'] = 'تحرير المنطقة أو وصف الغرفة';
$string['end_date'] = 'وقت الإنهاء';
$string['error_room'] = 'خطأ: الغرفة';
$string['eventbookingcreated'] = 'حجز تم إنشاؤه';
$string['eventbookingupdated'] = 'حجز تم تحديثه';
$string['findroom'] = 'إبحث عن غرفة';
$string['finishedimport'] = 'إكتملت المعالجة، الوقت المستغرق: {$a} من الثواني';
$string['for_any_questions'] = 'لأي أسئلة غير مجاب عنها هنا.';
$string['forciblybook'] = 'حجز الغرفة بالقوة';
$string['gototoday'] = 'إذهب إلى هذا اليوم';
$string['idontcare'] = 'لا أبالي، أكِّد حجز الغرفة/الغرف';
$string['mail_subject_delete'] = 'تم حذف إدخال {$a->date}، {$a->room} (المحجوزة من قبل {$a->user})';
$string['mail_subject_entry'] = 'تم تغيير إدخال {$a->date}، {$a->room} (من قبل {$a->user})';
$string['mail_subject_newentry'] = 'تمت إضافة إدخال {$a->date}، {$a->room} (من قبل {$a->user})';
$string['match_area'] = 'منطقة التطابق';
$string['match_descr'] = 'وصف كامل للتطابق';
$string['match_entry'] = 'وصف مختصر للتطابق';
$string['match_room'] = 'غرفة التطابق';
$string['match_type'] = 'نوع التطابق';
$string['mincapacity'] = 'الحد الأدنى للسعة';
$string['minutes'] = 'دقائق';
$string['month'] = 'شهر';
$string['monthafter'] = 'الذهاب إلى الشهر التالي';
$string['monthbefore'] = 'الذهاب إلى الشهر السابق';
$string['movedto'] = 'انتقل إلى';
$string['mrbs'] = 'نظام الحجز لغرفة الاجتماعات';
$string['mrbs:administermrbs'] = 'تعديل غرف MRBS + الإعدادات';
$string['mrbs:doublebook'] = 'الحجز المؤكد للغرف';
$string['mrbs:forcebook'] = 'فرض حجز الغرف (النقل التلقائي للحجوزات الموجودة)';
$string['mrbs:myaddinstance'] = 'إضافة كتلة جديدة من MRBS';
$string['mrbs:viewalltt'] = 'معاينة الجداول الزمنية لكل المستخدمين';
$string['mrbsadmin_desc'] = 'المستخدمون الذين بهذا الدور (على مستوى النظام) يمكنهم إجراء التهيئة الكاملة للجدول الزمني في MRBS: إنشاء المناطق والغرف، تحرير حجوزات الأشخاص الآخرين، فرض الحجوزات وحجز الغرف بشكل مؤكد';
$string['mrbsviewer_desc'] = 'المستخدمون الذين هم بهذا الدور (عند مستوى النظام) يمكنهم معاينة الجدول الزمني لـ MRBS، لكن بدون القدرة على إجراء أي تعديلات';
$string['must_set_description'] = 'ينبغي عليك وضع الوصف';
$string['must_set_name'] = 'يجب عليك تعيين اسم';
$string['namebooker'] = 'حجز لـ';
$string['newwindow'] = 'نافذة جديدة';
$string['no_rooms_for_area'] = 'لم يتم تحديد لهذه المنطقة أي غرف';
$string['noarea'] = 'لم يتم تحديد أي منطقة';
$string['noareas'] = 'لا يوجد مناطق';
$string['norights'] = 'ليست لديك صلاحية تعديل هذا العنصر.';
$string['norooms'] = 'لا غرف';
$string['noroomsfound'] = 'عذراً لم يتم إيجاد أي غرف';
$string['not_found'] = 'غير موجود';
$string['notallowedbook'] = 'لست ضمن قائمة المستخدمين المسموح لهم حجز هذه الغرفة';
$string['pagewindow'] = 'نفس النافذة';
$string['password_twice'] = 'إذا أردت تغيير كلمة المرور، يرجى إدخال كلمة المرور الجديدة مرتين';
$string['please_contact'] = 'الرجاء التواصل';
$string['postbrowserlang'] = 'لغة.';
$string['ppreview'] = 'معاينة قبل الطباعة';
$string['records'] = 'سجلات';
$string['rep_dsp_dur'] = 'مدة';
$string['rep_dsp_end'] = 'وقت النهاية';
$string['rep_end_date'] = 'تاريخ انتهاء التكرار';
$string['rep_freq'] = 'تكرار';
$string['rep_num_weeks'] = 'عدد الأسابيع';
$string['rep_rep_day'] = 'يوم التكرار';
$string['rep_type'] = 'نوع التكرار';
$string['rep_type_0'] = 'لا يوجد';
$string['rep_type_1'] = 'يومياً';
$string['rep_type_2'] = 'أسبوعياً';
$string['rep_type_3'] = 'شهرياً';
$string['rep_type_4'] = 'سنوياً';
$string['report_and_summary'] = 'تقرير وملخص';
$string['report_end'] = 'تاريخ انتهاء التقرير';
$string['report_on'] = 'تقرير عن اجتماعات';
$string['report_only'] = 'فقط التقرير';
$string['report_start'] = 'تاريخ بدء التقرير';
$string['requestvacatemessage'] = '{$a->user} يطلب بأن تنقل {$a->description} من الغرفة {$a->room}، {$a->datetime}. يرجى التواصل معهم لمناقشة هذا الأمر. [أعط سببًا]';
$string['requestvacatemessage_html'] = '{$a->user} يطلب بأن تنقل <a href="{$a->href}">{$a->description}</a> من الغرفة {$a->room}، {$a->datetime}. يرجى التواصل معهم لمناقشة هذا الأمر. <br /><br />[أعط سببًا]';
$string['resolution_units'] = 'دقائق';
$string['returnprev'] = 'عودة إلى الصفحة السابقة';
$string['room'] = 'الغرفة';
$string['room_admin_email'] = 'عنوان البريد الالكتروني لمشرف الغرفة';
$string['roomchange'] = 'التأشير على أنه تغيير في الغرفة';
$string['rooms'] = 'الغرف';
$string['roomsearch'] = 'البحث في الغرف';
$string['roomsfree'] = 'الغرف الخالية...';
$string['search_for'] = 'ابحث عن';
$string['search_results'] = 'نتائج البحث عن';
$string['seconds'] = 'ثواني';
$string['slot'] = 'الخانة';
$string['sort_rep'] = 'رتِّب التقرير بطريقة';
$string['sort_rep_time'] = 'تاريخ/وقت البدء';
$string['specialroom'] = 'استبعاد الغرف الخاصة';
$string['start_date'] = 'وقت البدء';
$string['sum_by_descrip'] = 'وصف مختصر';
$string['teachingroom'] = 'غرف التدريس فقط';
$string['toofaradvance'] = 'لا يمكنك حجز الغرف قبل ما يزيد على {$a} من الأيام';
$string['ttfor'] = 'الجدول الزمني لـ:';
$string['update_room_failed'] = 'فشل تحديث الغرفة';
$string['valid_room'] = 'الغرفة.';
$string['valid_time_of_day'] = 'الوقت الصحيح من اليوم.';
$string['viewday'] = 'معاينة اليوم';
