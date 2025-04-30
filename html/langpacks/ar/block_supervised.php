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
 * Strings for component 'block_supervised', language 'ar', version '4.4'.
 *
 * @package     block_supervised
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'أتريد استعمال هذا الصف الدراسي في الجلسات؟';
$string['active_help'] = 'عند تمكينه، يمكنك الشروع بالجلسات والتخطيط للجديد منها في هذا الصف الدراسي';
$string['addclassroom'] = 'إضافة الصف الدراسي ...';
$string['addclassroomnavbar'] = 'إضافة صف دراسي';
$string['addclassroompagetitle'] = 'إضافة صف دراسي';
$string['addingnewclassroom'] = 'إضافة صف دراسي جديد';
$string['allclassrooms'] = 'كل الصفوف الدراسية';
$string['allgroups'] = 'كل المجموعات';
$string['alllessontypes'] = 'كل أنواع الدروس';
$string['allstates'] = 'كل الولايات';
$string['allusers'] = 'كل المستخدمين';
$string['backtocourse'] = 'عودة إلى المساق';
$string['cannotdeleteclassroom'] = 'كانت هناك جلسات في هذا الصف. إحذف الجلسات التي تستعمل هذا الصف أولاً. يمكنك إخفاء الصف';
$string['cannotdeletelessontype'] = 'لا يمكنك حذف نوع الدرس هذا لأنه مستعمل في الجلسات أو الاختبارات';
$string['classroom'] = 'الصف الدراسي';
$string['classroomsbreadcrumb'] = 'الصفوف الدراسي';
$string['classroomsdefinition'] = 'تعريف الصفوف الدراسية';
$string['classroomsheader'] = 'قائمة الصفوف الدراسي';
$string['classroomspagetitle'] = 'قائمة الصفوف الدراسية';
$string['classroomsurl'] = 'الصفوف الدراسية';
$string['createclassroom'] = 'للتخطيط للجلسة أو البدء بها عليك إنشاء (أو إظهار) صف دراسي واحد على الأقل!';
$string['deleteclassroomcheck'] = 'هل أنت متأكد من رغبتك في الحذف الكامل لهذا الصف الدراسي من كل مساقات هذا الموقع؟';
$string['durationvalidationerror'] = 'الفترة ينبغي أن تكون أكبر من الصفر.';
$string['editclassroomnavbar'] = 'تحرير الصف الدراسي';
$string['editclassroompagetitle'] = 'تحرير الصف الدراسي';
$string['editingclassroom'] = 'تحرير الصف الدراسي';
$string['emaileditedsessionsubject'] = '{$a->sitename}: تم تحرير الجلسة في {$a->timestart}';
$string['emailnewsessionsubject'] = '{$a->sitename}: جلسة جديدة في {$a->timestart}';
$string['emailremovedsessionsubject'] = '{$a->sitename}: تمت إزالة الجلسة في {$a->timestart}';
$string['emailsessioninfo'] = 'المساق:         {$a->course}
الصف:         {$a->classroom}
المجموعة:     {$a->group}
نوع الدرس:   {$a->lessontype}
وقت البدء:     {$a->timestart}
الفترة (دقائق): {$a->duration}
وقت الإنهاء    {$a->timeend}

{$a->comment}';
$string['eventaddclassroom'] = 'صف دراسي جديد تمت إضافته';
$string['eventaddlessontype'] = 'نوع درس جديد تمت إضافته';
$string['eventaddsession'] = 'درس جديد تمت إضافته';
$string['eventdeleteclassroom'] = 'صف دراسي تم حذفه';
$string['eventdeletelessontype'] = 'نوع درس تم حذفه';
$string['eventdeletesession'] = 'جلسة تم حذفها';
$string['eventfinishsession'] = 'جلسة تم إنهاؤها';
$string['eventhideclassroom'] = 'صف دراسي تم إخفاؤه';
$string['eventstartplannedsession'] = 'جلسة مخطط لها تم بدؤها';
$string['eventstartsession'] = 'جلسة تم بدؤها';
$string['eventunhideclassroom'] = 'صف دراسي تم إظهاره';
$string['eventupdateactivesession'] = 'جلسة نشطة تم تحديثها';
$string['eventupdateclassroom'] = 'صف دراسي تم تحديثه';
$string['eventupdatelessontype'] = 'نوع درس تم تحديثه';
$string['eventupdatesession'] = 'جلسة تم تحديثها';
$string['gotoclassrooms'] = 'الذهاب إلى صفحة الصفوف الدراسية';
$string['haveaniceday'] = 'أتمنى لك نهاراً سعيداً!';
$string['increaseduration'] = 'وقت إنهاء الجلسة ينبغي أن يكون أكبر من الوقت الحالي.';
$string['insertclassroomerror'] = 'خطأ قاعدة البيانات! تعذر إدراج الصف الدراسي في قاعدة البيانات';
$string['invalidclassroomid'] = 'أنت تحاول استعمال مُعرَّف غير صالح للصف الدراسي';
$string['logsbreadcrumb'] = 'سجلات وقوعات الجلسة';
$string['logspagetitle'] = 'سجلات وقوعات الجلسة';
$string['logsview'] = 'سجلات وقوعات الجلسة';
$string['pagesizevalidationerror'] = 'حجم الصفحة ينبغي أن يكون أكبر من الصفر.';
$string['sessiondurationcourse'] = 'القيمة الافتراضية لمدة الجلسة في هذا المساق (بالدقائق)';
$string['settingsdayspastdesc'] = 'الفترة الزمنية الافتراضية لجدول الجلسات بالأيام (من يومنا الحالي).';
$string['settingsdayspasttitle'] = 'عدد أيام إظهار الجلسات';
$string['settingsdurationdesc'] = 'الوقت الافتراضي للجلسة بالدقائق.';
$string['settingsdurationtitle'] = 'وقت الجلسة';
$string['showlogs'] = 'إظهار سجلات الوقوعات';
$string['showlogsbutton'] = 'إظهار سجلات الوقوعات';
$string['supervised:editclassrooms'] = 'تحرير الصفوف الدراسية';
$string['supervised:manageownsessions'] = 'إدارة جلساته: تخطيط، تحرير، إزالة الجلسات غير المنتهية';
$string['teacherhassession'] = 'المشرف مسبقاً لديه جلسة في هذا الوقت.';
$string['timeend'] = 'نهاية الوقت';
$string['timestart'] = 'بداية الوقت';
