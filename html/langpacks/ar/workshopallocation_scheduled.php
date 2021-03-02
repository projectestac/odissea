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
 * Strings for component 'workshopallocation_scheduled', language 'ar', version '3.8'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'المعالجة الخلفية للتوزيع المجدول';
$string['currentstatus'] = 'الحالة الحالية';
$string['currentstatusexecution'] = 'الحالة';
$string['currentstatusexecution1'] = 'تنفيذها في  {$a->datetime}';
$string['currentstatusexecution2'] = 'ليتم تنفيذها مرة أخرى في {$a->datetime}';
$string['currentstatusexecution3'] = 'ليتم تنفيذها في {$a->datetime}';
$string['currentstatusexecution4'] = 'ينتظر للتنفيذ';
$string['currentstatusnext'] = 'التنفيذ المقبل';
$string['currentstatusnext_help'] = 'في بعض الحالات، جدولة التخصيص يتم تنفيذها تلقائيا مرة أخرى حتى لو تم تنفيذه سابقاً. قد يحدث هذا إذا تم تمديد الموعد النهائي للتقديمات، على سبيل المثال.';
$string['currentstatusreset'] = 'إعادة تعيين';
$string['currentstatusreset_help'] = 'حفظ النموذج مع هذا الاختيار يؤدي إلى إعادة تعيين الوضع الراهن. فستتم إزالة كافة المعلومات المنفذة السابقة حتى يمكن تنفيذ تخصيص جديد مرة أخرى (في حال تمكينها أعلاه).';
$string['currentstatusresetinfo'] = 'ضع علامة في المربع و احفظ النموذج لإعادة نتيجة التنفيذ.';
$string['currentstatusresult'] = 'نتيجة التنفيذ الأخيرة';
$string['enablescheduled'] = 'مكّن جدولة التخصيص';
$string['enablescheduledinfo'] = 'تلقائيا تخصيص التقديمات في نهاية مرحلة التقديم';
$string['pluginname'] = 'جدولة التخصيص';
$string['privacy:metadata'] = 'البرنامج المساعد للتخصيص المجدول لا يخزن أي بيانات شخصية. البيانات الشخصية الفعلية حول من سيقوم بتقييم من يتم تخزينه بواسطة وحدة ورشة العمل نفسها وتشكل أساسًا لتصدير تفاصيل التقييمات.';
$string['randomallocationsettings'] = 'إعدادات التخصيص';
$string['randomallocationsettings_help'] = 'قيم أسلوب التخصيص العشوائي يتم تعريفها هنا. و سوف تستخدم من قبل مساعد التخصيص العشوائي للتخصيص الفعلي للتقديمات.';
$string['resultdisabled'] = 'تعطيل جدولة التخصيص';
$string['resultenabled'] = 'تمكين جدولة التخصيص';
$string['resultexecuted'] = 'النجاح';
$string['resultfailed'] = 'غير قادر على تخصيص التقديمات تلقائياً';
$string['resultfailedconfig'] = 'جدولة التخصيص غير مضبوطة';
$string['resultfaileddeadline'] = 'ورشة عمل لا يوجد لها موعد نهائي محدد';
$string['resultfailedphase'] = 'ورشة عمل ليست في مرحلة تقديم';
$string['resultvoid'] = 'لا يوجد تقديمات مخصصة';
$string['resultvoiddeadline'] = 'ليس بعد الموعد النهائي للتقديمات حتى الآن';
$string['resultvoidexecuted'] = 'تم تنفيذ التخصيص بالفعل';
$string['scheduledallocationsettings'] = 'إعدادات جدولة التخصيص';
$string['scheduledallocationsettings_help'] = 'إذا مكّن ، فإن طريقة تخصيص الجدولة تخصص التقديمات للتقييم في نهاية مرحلة التقديم تلقائيا. ويمكن تعريف نهاية المرحلة في إعداد ورشة العمل "الموعد النهائي للتقديمات". داخليا، يتم تنفيذ أسلوب التخصيص العشوائي مع القيم المحددة مسبقا في هذا النموذج. فهذا يعني أن تخصيص الجدولة يعمل كما لو كان المعلم ينفذ التخصيص العشوائي لهم في نهاية مرحلة التقديم باستخدام إعدادات التخصيص أدناه. لاحظ أن تخصيص الجدولة هو ( لا) تنفيذها إذا قمت بالتبديل إلى ورشة العمل يدويا في مرحلة التقييم قبل الموعد النهائي للتقديمات. لتخصص التقديمات لنفسك في هذه الحالة. طريقة تخصيص الجدولة مفيدة بشكل خاص عند استخدامها جنبا إلى جنب مع ميزة التبديل التلقائي مرحلة.';
$string['setup'] = 'تركيب جدولة التخصيص';
