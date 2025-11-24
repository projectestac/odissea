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
 * Strings for component 'workshopallocation_scheduled', language 'ar', version '4.5'.
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
$string['currentstatusexecution1'] = 'نُفِّذت في {$a->datetime}';
$string['currentstatusexecution2'] = 'ليتم تنفيذها مرة أخرى في {$a->datetime}';
$string['currentstatusexecution3'] = 'ليتم تنفيذها في {$a->datetime}';
$string['currentstatusexecution4'] = 'تنتظر التنفيذ';
$string['currentstatusnext'] = 'التنفيذ المقبل';
$string['currentstatusnext_help'] = 'في بعض الحالات، جدولة التوزيع يتم تنفيذها تلقائياً مرة أخرى حتى لو تم تنفيذها سابقاً. قد يحدث هذا إذا تم تمديد الموعد النهائي للتسليمات، على سبيل المثال.';
$string['currentstatusreset'] = 'إعادة تعيين';
$string['currentstatusreset_help'] = 'حفظ النموذج مع هذا الاختيار يؤدي إلى إعادة تعيين الوضع الراهن. فستتم إزالة كافة المعلومات المنفذة السابقة حتى يمكن تنفيذ تخصيص جديد مرة أخرى (في حال تمكينها أعلاه).';
$string['currentstatusresetinfo'] = 'قم بتأشير الخانة واحفظ النموذج لإعادة تعيين نتيجة التنفيذ';
$string['currentstatusresult'] = 'نتيجة التنفيذ الأخيرة';
$string['enablescheduled'] = 'تمكين جدولة التوزيع';
$string['enablescheduledinfo'] = 'قم تلقائياً بتوزيع التسليمات عند نهاية طور التسليم';
$string['pluginname'] = 'التوزيع المجدول';
$string['privacy:metadata'] = 'ملحق التعيين المجدول لا يخزن أي بيانات شخصية. البيانات الشخصية الفعلية حول من سيقوم بتقييم من، يتم تخزينها بواسطة وحدة ورشة العمل نفسها وتشكل أساساً لتصدير تفاصيل التقييمات.';
$string['randomallocationsettings'] = 'إعدادات التوزيع';
$string['randomallocationsettings_help'] = 'عوامل طريقة التوزيع العشوائي يتم تعريفها هنا. سيتم استعمالها من قبل ملحق التوزيع العشوائي للتوزيع الفعلي للتسليمات.';
$string['resultdisabled'] = 'جدولة التوزيع معطلة';
$string['resultenabled'] = 'جدولة التوزيع مُمَكَّنة';
$string['resultexecuted'] = 'النجاح';
$string['resultfailed'] = 'غير قادر على توزيع التسليمات تلقائياً';
$string['resultfailedconfig'] = 'التوزيع المجدول تهيئته غير صحيحة';
$string['resultfaileddeadline'] = 'ورشة عمل لا يوجد لها موعد نهائي محدد';
$string['resultfailedphase'] = 'ورشة عمل ليست في مرحلة تقديم';
$string['resultvoid'] = 'لم يتم توزيع أي تسليمات';
$string['resultvoiddeadline'] = 'ليس بعد الموعد النهائي للتقديمات حتى الآن';
$string['resultvoidexecuted'] = 'تم تنفيذ التوزيع مسبقاً';
$string['scheduledallocationsettings'] = 'إعدادات التوزيع المجدول';
$string['scheduledallocationsettings_help'] = 'عند تمكينه، فإن طريقة التوزيع المجدول ستقوم تلقائياً بتوزيع التسليمات للتقييم عند انتهاء طور التسليم. يمكن تعريف نهاية الطور في إعداد ورشة العمل \'الموعد النهائي للتسليمات\'.

داخلياً، يتم تنفيذ طريقة التوزيع العشوائي بالعوامل المحددة مسبقاً في هذا النموذج. هذا يعني أن التوزيع المجدول يعمل كما لو أن المعلم هو من نفذ التوزيع العشوائي لهم عند انتهاء طور التسليم باستعمال إعدادات التوزيع أدناه.

لاحظ أن التوزيع المجدول *لا* يتم تنفيذه إذا قمت بتحويل ورشة العمل يدوياً إلى طور التقييم قبل الموعد النهائي للتسليمات. ينبغي عليك توزيع التسليمات بنفسك في هذه الحالة. طريقة التوزيع المجدول مفيدة بشكل خاص عند استعمالها جنباً إلى جنب مع ميزة التبديل التلقائي للطور.';
$string['setup'] = 'إعداد التوزيع المجدول';
