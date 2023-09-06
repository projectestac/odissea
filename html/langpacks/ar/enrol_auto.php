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
 * Strings for component 'enrol_auto', language 'ar', version '4.1'.
 *
 * @package     enrol_auto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auto:config'] = 'تهيئة عيِّنات الانضمام التلقائي';
$string['auto:manage'] = 'إدارة المستخدمين المنضمين';
$string['auto:unenrol'] = 'إلغاء انضمام المستخدمين إلى المساق';
$string['auto:unenrolself'] = 'إلغاء انضمام نفسه إلى المساق';
$string['courseview'] = 'معاينة المساق';
$string['customwelcomemessage'] = 'رسالة ترحيب مخصصة';
$string['customwelcomemessage_help'] = 'يمكن إضافة رسالة ترحيب مخصصة كنص عادي أو تنسيق مودل التلقائي، بما في ذلك وسوم HTML ووسوم متعدد اللغات.

قد يتم تضمين العناصر النائبة الآتية في الرسالة:

* اسم المساق {$a->coursename}
* رابط إلى صفحة الملف الشخصي للمستخدم {$a->profileurl}';
$string['defaultrole'] = 'تعيين الدور الافتراضي';
$string['defaultrole_desc'] = 'حدد الدور الذي ينبغي تعيينه للمستخدمين عند الانضمام التلقائي.';
$string['editenrolment'] = 'تحرير الانضمام';
$string['enrolon'] = 'ينضم إلى';
$string['enrolon_desc'] = 'الحدث الذي سيؤدي إلى الانضمام التلقائي.';
$string['enrolon_help'] = 'إختر الحدث الذي يجب أن يُحدث الانضمام التلقائي.

**معاينة المساق** - ضم المستخدم عند معاينته للمساق.<br>

**تسجيل دخول المستخدم** - ضم المستخدمين بمجرد تسجيلهم للدخول.<br>

**معاينة نشاط/مورد في المساق** - ضم المستخدم عند معاينته لأحد الأنشطة/الموارد المحددة.<br>
*ملاحظة:* يتطلب هذا الخيار عيِّنة انضمام وصول الضيف.';
$string['modview'] = 'معاينة نشاط/مورد في المساق';
$string['modviewmods'] = 'الأنشطة/الموارد';
$string['modviewmods_desc'] = 'ستؤدي معاينة أي من الموارد/الأنشطة المحددة إلى حدوث الانضمام التلقائي.';
$string['pluginname'] = 'الانضمام التلقائي';
$string['pluginname_desc'] = 'تقوم إضافة الانضمام التلقائي بضم المستخدمين تلقائيًا عند معاينتهم للمساق/النشاط/المورد.';
$string['privacy:metadata'] = 'إن إضافة الانضمام التلقائي لا تخزن أي بيانات شخصية.';
$string['requirepassword'] = 'يتطلب مفتاح الانضمام';
$string['requirepassword_desc'] = 'يتطلب مفتاح الانضمام إلى المقررات الدراسية الجديدة ويمنع إزالة مفتاح االانضمام من المقررات الحالية.';
$string['role'] = 'الدور المُعيَّن الافتراضي';
$string['sendcoursewelcomemessage'] = 'إرسال رسالة ترحيب بالمساق';
$string['sendcoursewelcomemessage_help'] = 'في حالة التمكين، يتلقى المستخدمون رسالة ترحيب عبر البريد الالكتروني عند انضمامهم التلقائي.';
$string['status'] = 'السماح بالانضمامات التلقائية';
$string['status_desc'] = 'السماح بالانضمامات التلقائية للمستخدمين في المساق إفتراضيًا.';
$string['status_help'] = 'يحدد هذا الإعداد ما إذا كان قد تم تمكين إضافة الانضمام التلقائي لهذا المساق.';
$string['unenrol'] = 'إلغاء انضمام المستخدم';
$string['unenrolselfconfirm'] = 'هل تريد حقًا إلغاء ضم نفسك إلى المساق "{$a}"؟';
$string['unenroluser'] = 'هل تريد حقًا إلغاء انضمام "{$a->user}" إلى المساق "{$a->course}"؟';
$string['userlogin'] = 'تسجيل دخول المستخدم';
$string['welcometocourse'] = 'مرحبًا بك في {$a}';
$string['welcometocoursetext'] = 'مرحبًا بك في {$a->coursename}!

إذا لم تكن قد قمت بذلك سابقًا، فعليك بتحرير صفحة ملفك الشخصي حتى نتمكن من معرفة المزيد عنك:

{$a->profileurl}';
