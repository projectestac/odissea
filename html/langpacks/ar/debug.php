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
 * Strings for component 'debug', language 'ar', version '3.8'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'المكون الإضافي للمصادقة {$a} غير موجود .';
$string['blocknotexist'] = 'الكتلة {$a} غير موجودة';
$string['cannotbenull'] = 'لا يمكن أن يكون {$a} فارغا !';
$string['cannotdowngrade'] = 'لا يمكن التراجع عن الترقية {$a->plugin} من {$a->oldversion} إلى {$a->newversion} .';
$string['cannotfindadmin'] = 'لا يمكن إيجاد مستخدم مسؤول !';
$string['cannotinitpage'] = 'لا يمكن تهيئة الصفحة بالكامل : غير صالح {$a->name} برقم معرف  {$a->id}';
$string['cannotsetuptable'] = 'الجداول {$a} لم يتم تعيينها بنجاح !';
$string['codingerror'] = 'تم الكشف عن خطأ بالنص البرمجي ،  يجب إصلاحه من قبل المبرمج : {$a}';
$string['configmoodle'] = 'لم يتم إعداد مودل بعد . يجب أن تقوم بتحرير الملف config.php أولاً.';
$string['debuginfo'] = 'معلومات التصحيح';
$string['erroroccur'] = 'لقد حدث خطأ أثناء هذه العملية';
$string['invalidarraysize'] = 'حجم المصفوفة غير صحيح في معاملات {$a}';
$string['invalideventdata'] = 'تم تسليم بيانات أحداث غير صحيحة : {$a}';
$string['invalidparameter'] = 'تم الكشف عن قيمة معامل غير صالحة';
$string['invalidresponse'] = 'تم الكشف عن قيمة إجابة غير صالحة';
$string['line'] = 'خط';
$string['missingconfigversion'] = 'جدول الإعدادات لا يحتوي رقم الإصدار ، لا يمكن الاستمرار ، آسف .';
$string['modulenotexist'] = 'الوحدة {$a} غير موجودة';
$string['morethanonerecordinfetch'] = 'تم إيجاد أكثر من سجل في fetch() !';
$string['mustbeoveride'] = 'طريقة المستخلص {$a} يجب تجاوزها .';
$string['noadminrole'] = 'لا يمكن إيجاد دور مسؤول';
$string['noblocks'] = 'لا يوجد كتل مركبة !';
$string['nocate'] = 'لا يوجد فئات !';
$string['nomodules'] = 'لا يوجد وحدات !';
$string['nopageclass'] = 'تم استيراد {$a} لكن لم يوجد أي مقاطع صفحات';
$string['noreports'] = 'لا يوجد تقارير يمكن الوصول إليها';
$string['notables'] = 'لا يوجد جداول !';
$string['outputbuffer'] = 'التخزين المؤقت للمخرجات';
$string['phpvaroff'] = 'متغيرات خادم PHP \'{$a->name}\' يجب أن يكون مغلقا  - {$a->link}';
$string['phpvaron'] = 'متغيرات خادم PHP  \'{$a->name}\' يجب أن يكون مفتوحا - {$a->link}';
$string['sessionmissing'] = 'الغرض {$a} مفقود من الجلسة';
$string['sqlrelyonobsoletetable'] = 'هذه الـ SQL تعتمد على جداول متقادمة : {$a} ! يجب إصلاح النص البرمجي من قبل مبرمج .';
$string['stacktrace'] = 'تتبع المكدس';
$string['withoutversion'] = 'ملف version.php الرئيسي مفقود أو غير مقروء أو تم نقله .';
$string['xmlizeunavailable'] = 'توابع التحويل إلى xml غير متوافرة';
