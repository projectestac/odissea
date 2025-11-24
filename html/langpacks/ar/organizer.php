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
 * Strings for component 'organizer', language 'ar', version '4.5'.
 *
 * @package     organizer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowcreationofpasttimeslots'] = 'إنشاء فسحات زمنية ماضية';
$string['alwaysshowdescription'] = 'إظهار الوصف دائمًا';
$string['appointmentcomments_help'] = 'يمكن إضافة معلومات إضافية عن المواعيد هنا.';
$string['assign_notify_student:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، تم تعيين موعد لك مع {$a->slot_teacher} في {$a->date} عند {$a->time} من قِبل {$a->sendername}.

المعلم: {$a->slot_teacher}
المكان: {$a->slot_location}
التاريخ: {$a->date} في {$a->time}

نظام المراسلة في مودل';
$string['assign_notify_student:group:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، تم تعيين موعد لمجموعتك {$a->groupname} مع {$a->slot_teacher} في {$a->date} عند {$a->time} من قِبل {$a->sendername}.

المعلم: {$a->slot_teacher}
المكان: {$a->slot_location}
التاريخ: {$a->date} في {$a->time}

نظام المراسلة في مودل';
$string['assign_notify_teacher:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، تم تعيين موعد لك مع {$a->participantname} في {$a->date} عند {$a->time} من قِبل {$a->sendername}.

المشارك: {$a->participantname}
المكان: {$a->slot_location}
التاريخ: {$a->date} في {$a->time}

نظام المراسلة في مودل';
$string['assign_notify_teacher:group:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، تم تعيين موعد لك مع المجموعة {$a->groupname} في {$a->date} عند {$a->time} من قِبل {$a->sendername}.

المجموعة: {$a->groupname}
المكان: {$a->slot_location}
التاريخ: {$a->date} في {$a->time}

نظام المراسلة في مودل';
$string['assignsuccess'] = 'تم تعيين الفسحة الزمنية بنجاح والمشاركون تم إشعارهم.';
$string['assignsuccessnotsent'] = 'تم تعيين الفسحة الزمنية بنجاح ولكن المشاركين لم يتم إشعارهم.';
$string['availableslotsfor'] = 'الفسحات المتاحة لـ';
$string['back'] = 'رجوع';
$string['btn_add'] = 'إضافة فسحات جديدة';
$string['btn_assign'] = 'تعيين الفسحة';
$string['btn_delete'] = 'إزالة الفسحات المحددة';
$string['btn_deletesingle'] = 'إزالة الفسحة المحددة';
$string['btn_edit'] = 'تحرير الفسحات المحددة';
$string['btn_editsingle'] = 'تحرير الفسحة المحددة';
$string['btn_eval'] = 'تقييم الفسحات المحددة';
$string['btn_evalsingle'] = 'تقييم الفسحة المحددة';
$string['btn_print'] = 'طباعة الفسحات المحددة';
$string['btn_printsingle'] = 'طباعة الفسحة المحددة';
$string['btn_send'] = 'إرسل';
$string['configallowcreationofpasttimeslots'] = 'هل من المسموح به إنشاء فسحات زمنية ماضية؟';
$string['configday'] = 'يوم';
$string['configdays'] = 'يوم';
$string['configintro'] = 'القيم التي تقوم بتعيينها هنا ستكون بمثابة القيم الافتراضية المستعملة في نموذج الإعدادات عندما تنشئ منظم جديد.';
$string['configmaximumgrade'] = 'يعين القيمة الافتراضية المحددة في حقل الدرجة عند إنشاء منظم جديد. هذه هي أقصى درجة يمكن تعيينها للطالب بشأن موعده.';
$string['configsingleslotprintfield'] = 'حقل المستخدم المزمعة طباعته عند طباعة الفسحة الزمنية المنفردة';
$string['confirm_conflicts'] = 'هل أنت متأكد من رغبتك في تجاهل التصادمات وإنشاء الفسحات الزمنية؟';
$string['createsubmit'] = 'إنشاء الفسحات الزمنية';
$string['datetime_help'] = 'تاريخ الفسحة ووقتها.';
$string['day'] = 'يوم';
$string['day_0'] = 'الإثنين';
$string['day_1'] = 'الثلاثاء';
$string['day_2'] = 'الأربعاء';
$string['day_3'] = 'الخميس';
$string['day_4'] = 'الجمعة';
$string['day_5'] = 'السبت';
$string['day_6'] = 'الأحد';
$string['day_pl'] = 'أيام';
$string['defaultsingleslotprintfields'] = 'الحقول الافتراضية للملف الشخصي للمستخدم عند طباعة الفسحة الزمنية المنفردة';
$string['deleteheader'] = 'حذف الفسحات الآتية:';
$string['deletenoslots'] = 'لم يتم تحديد أي فسحات قابلة للحذف';
$string['details_help'] = 'الحالة الحالية لهذه الفسحة.';
$string['edit_notify_student:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، تفاصيل الموعد {$a->sendername} في {$a->date} عند {$a->time} قد تغيرت.

المعلم: {$a->slot_teacher}
المكان: {$a->slot_location}
أقصى عدد من المشاركين: {$a->slot_maxparticipants}
التعليقات:
{$a->slot_comments}

نظام المراسلة في مودل';
$string['edit_notify_student:group:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، تفاصيل موعد المجموعة {$a->sendername} في {$a->date} عند {$a->time} قد تغيرت.

المعلم: {$a->slot_teacher}
المكان: {$a->slot_location}
أقصى عدد من المشاركين: {$a->slot_maxparticipants}
التعليقات:
{$a->slot_comments}

نظام المراسلة في مودل';
$string['edit_notify_teacher:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، تفاصيل الفسحة الزمنية في {$a->date} عند {$a->time} قد تغيرت من قِبل {$a->sendername}.

المعلم: {$a->slot_teacher}
المكان: {$a->slot_location}
أقصى عدد من المشاركين: {$a->slot_maxparticipants}
التعليقات:
{$a->slot_comments}

نظام المراسلة في مودل';
$string['edit_notify_teacher:group:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، تفاصيل الفسحة الزمنية في {$a->date} عند {$a->time} قد تغيرت من قِبل {$a->sendername}.

المعلم: {$a->slot_teacher}
المكان: {$a->slot_location}
أقصى عدد من المشاركين: {$a->slot_maxparticipants}
التعليقات:
{$a->slot_comments}

نظام المراسلة في مودل';
$string['edit_notify_teacher:group:smallmessage'] = 'تفاصيل الفسحة الزمنية في {$a->date} عند {$a->time} قد تغيرت من قِبل {$a->sendername}.';
$string['edit_notify_teacher:smallmessage'] = 'تفاصيل الفسحة الزمنية في {$a->date} عند {$a->time} قد تغيرت من قِبل {$a->sendername}.';
$string['err_comments'] = 'ينبغي عليك إدخال الوصف!';
$string['err_noslots'] = 'لم يتم تحديد أي فسحات!';
$string['eval_feedback'] = 'الإفادة';
$string['eval_header'] = 'الفسحات الزمنية المحددة';
$string['eval_no_participants'] = 'ليس لهذه الفسحة أي مشاركين';
$string['eval_not_occured'] = 'هذه الفسحة الزمنية لم تحدث بعد';
$string['eval_notify_newappointment:student:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، موعدك {$a->sendername} في {$a->date} عند {$a->time} في {$a->location} قد تم تقييمه.

معلمو المساق يسمحون لك بإعادة التسجيل في أي فسحة زمنية متاحة في منظم المواعيد {$a->organizername}.

نظام المراسلة في مودل';
$string['eval_notify_newappointment:student:group:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، موعد مجموعتك {$a->sendername} في {$a->date} عند {$a->time} في {$a->location} قد تم تقييمه.

معلمو المساق يسمحون لك بإعادة التسجيل في أي فسحة زمنية متاحة في منظم المواعيد {$a->organizername}.

نظام المراسلة في مودل';
$string['event'] = 'حدث التقويم';
$string['eventappointmentadded'] = 'طالب سَجَّل في فسحة زمنية';
$string['eventappointmentassigned'] = 'موعد تم تعيينه من قبل المعلم';
$string['eventappointmentcommented'] = 'موعد تم التعليق عليه';
$string['eventappointmentevaluated'] = 'موعد تم تقييمه';
$string['eventappointmentlistprinted'] = 'قائمة مواعيد تمت طباعتها';
$string['eventappointmentremindersent'] = 'تذكير موعد تم إرساله';
$string['eventappointmentremoved'] = 'طالب ألغى تسجيله في فسحة زمنية';
$string['eventappwith:group'] = 'موعد مجموعة';
$string['eventappwith:single'] = 'الموعد';
$string['eventnoparticipants'] = 'لا مشاركين';
$string['eventqueueadded'] = 'أُضيف إلى قائمة الانتظار';
$string['eventqueueremoved'] = 'أُزيل من قائمة الانتظار';
$string['eventregistrationsviewed'] = 'تبويب التسجيل تمت معاينته';
$string['eventslotcreated'] = 'فسحات زمنية جديدة تم إنشاؤها';
$string['eventslotdeleted'] = 'فسحة زمنية تمت إضافتها';
$string['eventslotupdated'] = 'فسحة زمنية تم تحديثها';
$string['eventslotviewed'] = 'فسحات زمنية تمت معاينتها';
$string['eventteacheranonymous'] = 'معلم مجهول';
$string['eventtemplate'] = '{$a->courselink} / {$a->organizerlink}: {$a->appwith} {$a->with} {$a->participants}<br />الموضع: {$a->location}<br />';
$string['eventtemplatecomment'] = 'التعليق:<br />{$a}<br />';
$string['eventtemplatewithoutlinks'] = '{$a->coursename} / {$a->organizername}: {$a->appwith} {$a->with} {$a->participants}<br />الموضع: {$a->location}<br />';
$string['eventtitle'] = '{$a->coursename} / {$a->organizername}: {$a->appwith}';
$string['eventwith'] = 'مع';
$string['eventwithout'] = 'مع';
$string['font_small'] = 'صغير';
$string['group_registration_notify:student:queue:group:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، قام {$a->sendername} بإضافة مجموعتك {$a->groupname} إلى قائمة الانتظار للفسحة الزمنية في {$a->date} عند {$a->time} في {$a->location}.

نظام المراسلة في مودل';
$string['group_registration_notify:student:queue:group:smallmessage'] = 'قام {$a->sendername} بإضافة مجموعتك {$a->groupname} إلى قائمة الانتظار للفسحة الزمنية في {$a->date} عند {$a->time}.';
$string['group_registration_notify:student:register:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، قام {$a->sendername} بتسجيل مجموعتك {$a->groupname} في الفسحة الزمنية في {$a->date} عند {$a->time} في {$a->location}.

نظام المراسلة في مودل';
$string['group_registration_notify:student:register:group:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، قام {$a->sendername} بتسجيل مجموعتك {$a->groupname} في الفسحة الزمنية في {$a->date} عند {$a->time} في {$a->location}.

نظام المراسلة في مودل';
$string['group_registration_notify:student:register:group:smallmessage'] = 'قام {$a->sendername} بتسجيل مجموعتك {$a->groupname} في الفسحة الزمنية في {$a->date} عند {$a->time}.';
$string['group_registration_notify:student:register:smallmessage'] = 'قام {$a->sendername} بتسجيل مجموعتك {$a->groupname} في الفسحة الزمنية في {$a->date} عند {$a->time}.';
$string['group_registration_notify:student:reregister:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، قام {$a->sendername} بإعادة تسجيل مجموعتك {$a->groupname} في فسحة زمنية جديدة في {$a->date} عند {$a->time} في {$a->location}.

نظام المراسلة في مودل';
$string['group_registration_notify:student:reregister:group:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، قام {$a->sendername} بإعادة تسجيل مجموعتك {$a->groupname} في فسحة زمنية جديدة في {$a->date} عند {$a->time} في {$a->location}.

نظام المراسلة في مودل';
$string['group_registration_notify:student:reregister:group:smallmessage'] = 'قام {$a->sendername} بإعادة تسجيل مجموعتك {$a->groupname} في فسحة زمنية جديدة في {$a->date} عند {$a->time}.';
$string['group_registration_notify:student:reregister:smallmessage'] = 'قام {$a->sendername} بإعادة تسجيل مجموعتك {$a->groupname} في فسحة زمنية جديدة في {$a->date} عند {$a->time}.';
$string['group_registration_notify:student:unqueue:group:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، قام {$a->sendername} بإزالة مجموعتك {$a->groupname} من قائمة الانتظار للفسحة الزمنية في {$a->date} عند {$a->time} في {$a->location}.

نظام المراسلة في مودل';
$string['group_registration_notify:student:unqueue:group:smallmessage'] = 'قام {$a->sendername} بإزالة مجموعتك {$a->groupname} من قائمة الانتظار للفسحة الزمنية في {$a->date} عند {$a->time}.';
$string['group_registration_notify:student:unregister:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، قام {$a->sendername} بإلغاء تسجيل مجموعتك {$a->groupname} في الفسحة الزمنية في {$a->date} عند {$a->time} في {$a->location}.

نظام المراسلة في مودل';
$string['group_registration_notify:student:unregister:group:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، قام {$a->sendername} بإلغاء تسجيل مجموعتك {$a->groupname} في الفسحة الزمنية في {$a->date} عند {$a->time} في {$a->location}.

نظام المراسلة في مودل';
$string['group_registration_notify:student:unregister:group:smallmessage'] = 'قام {$a->sendername} بإلغاء تسجيل مجموعتك {$a->groupname} في الفسحة الزمنية في {$a->date} عند {$a->time}.';
$string['group_registration_notify:student:unregister:smallmessage'] = 'قام {$a->sendername} بإلغاء تسجيل مجموعتك {$a->groupname} في الفسحة الزمنية في {$a->date} عند {$a->time}.';
$string['group_slot_available'] = 'الفسحة الزمنية متاحة';
$string['group_slot_full'] = 'الفسحة الزمنية محجوزة';
$string['groupmodeslotgroups'] = 'إنشاء المجموعة حسب الفسحة الخالية';
$string['groupmodeslotgroupsappointment'] = 'إنشاء المجموعة حسب الفسحة المحجوزة';
$string['headerfooter'] = 'طباعة العنوان/التذييل';
$string['headerfooter_help'] = 'طباعة العنوان/التذييل إذا تم تأشيره';
$string['img_title_due'] = 'الفسحة الزمنية مستوجبة';
$string['img_title_evaluated'] = 'الفسحة الزمنية مقيَّمة';
$string['img_title_no_participants'] = 'الفسحة الزمنية ليس فيها مشاركون';
$string['img_title_past_deadline'] = 'الفسحة الزمنية تجاوزت موعدها النهائي';
$string['img_title_pending'] = 'الفسحة الزمنية تنتظر التقييم';
$string['infobox_description_title'] = 'وصف المنظِّم';
$string['infobox_feedback_title'] = 'الإفادة';
$string['infobox_messages_title'] = 'رسائل النظام';
$string['infobox_myslot_noslot'] = 'لستَ مسجلاً في أي فسحة زمنية حاليًا.';
$string['infobox_myslot_title'] = 'فسحتي';
$string['infobox_showfreeslots'] = 'الفسحات الخالية';
$string['infobox_showhiddenslots'] = 'الفسحات المخفية';
$string['infobox_showmyslotsonly'] = 'فسحاتي';
$string['infobox_showregistrationsonly'] = 'الفسحات المحجوزة';
$string['infobox_showslots'] = 'الفسحات الماضية';
$string['infobox_slotoverview_title'] = 'استعراض الفسحة';
$string['introeditor_error'] = 'لا بد من إعطاء وصف المنظِّم!';
$string['message_custommessage_help'] = 'استعمل هذا الحقل لإدخال نص شخصي في الرسالة المولدة آليًا.';
$string['message_error_slot_full_group'] = 'هذه الفسحة الزمنية محجوزة مسبقًا!';
$string['message_info_slots_added_pl'] = '{$a->count} من الفسحات الجديدة تمت إضافتها.';
$string['message_info_slots_added_sg'] = 'فسحة جديدة واحدة تمت إضافتها.';
$string['message_warning_no_slots_added'] = 'لم تتم إضافة فسحات جديدة!';
$string['message_warning_no_slots_selected'] = 'ينبغي عليك تحديد فسحة واحدة على الأقل!';
$string['message_warning_no_visible_slots_selected'] = 'ينبغي عليك أولاً تحديد فسحة واحدة مرئية على الأقل!';
$string['messageprovider:slotdeleted_notify_student'] = 'الفسحات الزمنية لمنظم المواعيد تم حذفها';
$string['messages_none'] = 'لا إشعارات تسجيل';
$string['mymoodle_next_slot'] = 'الفسحة القادمة في {$a->date} عند {$a->time}';
$string['mymoodle_no_reg_slot'] = 'لم تُسجل في فسحة زمنية بعد';
$string['mymoodle_no_reg_slot_group'] = 'مجموعتك {$a->groupname} لم تُسجل في فسحة زمنية بعد';
$string['mymoodle_no_slots'] = 'لا فسحات زمنية قادمة';
$string['mymoodle_reg_slot_group'] = 'مجموعتك {$a->groupname} سبق لها التسجيل في فسحة زمنية';
$string['newslot'] = 'إضافة المزيد من الفسحات';
$string['no_due_slots'] = 'كل الفسحات الزمنية المنشأة في منظم المواعيد هذا منتهية الصلاحية';
$string['no_my_slots'] = 'ليست لديك فسحات زمنية منشأة في منظم المواعيد هذا';
$string['no_slots'] = 'ليست هناك أي فسحات زمنية منشأة في منظم المواعيد هذا';
$string['no_slots_defined'] = 'ليست هناك أي فسحات مواعيد متاحة حاليًا';
$string['no_slots_defined_teacher'] = 'ليست هناك أي فسحات مواعيد حالية. أنقر <a href="{$a->link}">هنا</a> لإنشاء البعض منها الآن.';
$string['nocalendareventslotcreation'] = 'لا توجد أحداث تقويم للفسحات الخالية';
$string['nofreeslots'] = 'لا توجد فسحات خالية متاحة';
$string['noparticipants'] = 'لا مشاركين';
$string['norightpage'] = 'لا يسمح لك باستدعاء هذه الصفحة.';
$string['nosingleslotprintfields'] = 'الطباعة غير ممكنة. ليست هناك حقول مستخدم معرفة. إنظر إعدادات المنظم';
$string['noslots'] = 'لا توجد فسحات لـ';
$string['noslotsselected'] = 'لم يتم تحديد أي فسحات!';
$string['numentries'] = 'المُدخلات الظاهرة لكل صفحة';
$string['numentries_help'] = 'إختر "المثالي" لأمثَلة توزيع مُدخلات القائمة وفقًا لحجم النص المحدد واتجاه الصفحة، هذا إذا كان هناك العديد من المشاركين المسجلين في مساقك.';
$string['organizer:addinstance'] = 'إضافة منظم جديد';
$string['organizer:addslots'] = 'إضافة فسحات زمنية جديدة';
$string['organizer:assignslots'] = 'تعيين الفسحة الزمنية إلى طالب';
$string['organizer:deleteslots'] = 'حذف الفسحات الزمنية الموجودة';
$string['organizer:editslots'] = 'تحرير الفسحات الزمنية الموجودة';
$string['organizer:evalslots'] = 'تقييم الفسحات الزمنية المكتملة';
$string['organizer:printslots'] = 'طباعة الفسحات الزمنية الموجودة';
$string['organizer:register'] = 'التسجيل في فسحة زمنية';
$string['organizer:unregister'] = 'إلغاء التسجيل في فسحة زمنية';
$string['organizer:viewallslots'] = 'معاينة كل الفسحات الزمنية بصفة معلم';
$string['organizer:viewmyslots'] = 'معاينة كل فسحاته الزمنية بصفة معلم';
$string['organizer:viewstudentview'] = 'معاينة كل الفسحات الزمنية بصفة طالب';
$string['pageorientation'] = 'اتجاه الصفحة';
$string['participants'] = 'المشارك/المشاركون';
$string['participants_help'] = 'قائمة المشاركين الذي حجزوا هذه الفسحة الزمنية.';
$string['print_return'] = 'عودة إلى استعراض الفسحة الزمنية';
$string['printout'] = 'طباعة';
$string['printpreview'] = 'استعراض الطباعة (أول 10 مُدخلات)';
$string['printslotuserfieldsnotenabled'] = 'إن الميزة حقول المستخدم لفتحة الطباعة غير مُمَكنة من قبل المشرف.';
$string['privacy:metadata:applicantidappointment'] = 'مُعرَّف المستخدم الذي قام بحجز هذه الفسحة الزمنية للمجموعة';
$string['privacy:metadata:attended'] = 'فيما إذا حضر المستخدم أو المجموعة إلى موعد الفسحة';
$string['privacy:metadata:comments'] = 'تعليقات المدربين لهذه الفسحة';
$string['privacy:metadata:feedback'] = 'إفادات المدربين عند تقييم الفسحة';
$string['privacy:metadata:grade'] = 'الدرجة التي تلقاها المستخدم أو المجموعة لهذه الفسحة الزمنية';
$string['privacy:metadata:groupidappointment'] = 'مُعرَّف المجموعة التي قامت بحجز هذه الفسحة الزمنية.';
$string['requiremodintro'] = 'يتطلب وصف النشاط';
$string['singleslotprintfield'] = 'حقل المستخدم لفتحة الطباعة';
$string['singleslotprintfield0'] = 'حقل المستخدم لفتحة الطباعة';
$string['tabstud'] = 'معاينة الطالب';
$string['teacherfeedback_title'] = 'إفادة المعلم';
$string['textsize'] = 'حجم النص';
$string['th_feedback'] = 'الإفادة';
$string['th_firstname'] = 'الاسم الأول';
$string['th_idnumber'] = 'رقم المُعرَّف';
$string['th_lastname'] = 'الاسم الأخير';
$string['th_participant'] = 'المشارك';
$string['th_participants'] = 'المشاركون';
$string['title_add'] = 'إضافة فسحات مواعيد جديدة';
$string['title_print'] = 'فتحات الطباعة';
$string['visibility'] = 'حالة إظهار الأعضاء - الإعداد المسبق';
$string['warningtext2'] = 'تحذير! محتوى هذا الحقل قد تغير!';
