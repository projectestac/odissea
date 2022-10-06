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
 * Strings for component 'enrol_flatfile', language 'ar', version '3.11'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'ترميز الملف';
$string['expiredaction'] = 'إجراء انتهاء صلاحية الانضمام';
$string['expiredaction_help'] = 'إختر الإجراء المطلوب اتخاذه عند انتهاء صلاحية انضمامات المستخدمين. لطفاً لاحظ أن بعض بيانات المستخدمين وإعداداتهم ستتم إزالتها من المقرر الدراسي عند إلغاء الانضمام فيه.';
$string['filelockedmail'] = 'الملف النصي الذي تستعمله للإنشاء الانضمامات المبنية على ملف ({$a}) لا يمكن حذفه من قبل مشغل الوظائف المجدولة. هذا عادة معناه وجود خطأ في صلاحياته. لطفاً، قم بإصلاح الصلاحيات ليتمكن مودل من حذف الملف، أو بخلافه، قد تعاد محاولة معالجته مراراً.';
$string['filelockedmailsubject'] = 'خطأ هام: ملف الانضمام';
$string['flatfile:manage'] = 'إدارة انضمامات المستخدمين يدوياً';
$string['flatfile:unenrol'] = 'إلغاء انضمام المستخدمين في المقرر الدراسي يدوياً';
$string['flatfileenrolments'] = 'انضمامات ملف منبسط بصيغة (CSV)';
$string['flatfilesync'] = 'مزامنة ملف الانضمامات المنبسط';
$string['location'] = 'موضع الملف';
$string['location_desc'] = 'حدد المسار الكامل لملف الانضمامات. سيتم حذف الملف تلقائياً بعد معالجته.';
$string['mapping'] = 'تعيين أدوار الملف المنبسط';
$string['messageprovider:flatfile_enrolment'] = 'رسائل انضمامات الملف المنبسط';
$string['notifyadmin'] = 'أبلغ المشرف';
$string['notifyenrolled'] = 'أبلغ المستخدمين الذين تم ضمهم';
$string['notifyenroller'] = 'أبلغ المستخدم المسؤول عن الانضمامات';
$string['pluginname'] = 'ملف منبسط (CSV)';
$string['pluginname_desc'] = 'هذه الطريقة ستقوم بالتحقق دورياً من ملف نصي ذي صيغة خاصة في الموضع الذي تحدده وتقوم بمعالجته.
الملف هو عبارة عن قائمة مفصولة بفوارز يُفترض أنها ذات أربعة حقول أو ستة لكل سطر:

    operation, role, user idnumber, course idnumber [, starttime [, endtime]]

حيث أن:

* operation - add | del
* role - student | teacher | teacheredit
* user idnumber - idnumber في جدول المستخدمين NB وليس المُعرَّف
* course idnumber - idnumber في جدول المقررات الدراسية NB وليس المُعرَّف
* starttime - start time (بالثواني مقاسة منذ epoch) - إختياري
* endtime - end time (بالثواني مقاسة منذ epoch) - إختياري

يمكن أن تكون محتويات الملف شيئاً مشابهاً للآتي:
<pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'إن إضافة الانضمام بالملف المنبسط (CSV) قد تخزن بيانات شخصية تتعلق بالانضمامات المستقبلية في جدول enrol_flatfile.';
$string['privacy:metadata:enrol_flatfile:action'] = 'إجراء الانضمام المتوقع عند التاريخ المعطى';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'مُعرَّف المقرر الذي يتعلق به الانضمام';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'مُعرَّف الدور الذي سيتم تعيينه أو إلغاء تعيينه';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'وقت انتهاء الانضمام';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'وقت تعديل الانضمام';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'وقت بدء الانضمام';
$string['privacy:metadata:enrol_flatfile:userid'] = 'مُعرَّف المستخدم الذي يعود عليه الانضمام';
