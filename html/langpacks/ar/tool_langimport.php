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
 * Strings for component 'tool_langimport', language 'ar', version '3.8'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'غير قادر على الاتصال بخادم التنزيل. لم يمكن تثبيت حزم اللغات أو تحديثها تلقائيًا.
يرجى تنزيل ملف ZIP المناسب من {$a->src} و فك ضغطها يدويًا إلى دليل البيانات الخاص بك{$a->dest}';
$string['install'] = 'ثبت حزمة (حِزم) اللغة المختارة';
$string['installedlangs'] = 'حزم اللغة المثبتة';
$string['langimport'] = 'أداة استيراد اللغة';
$string['langimportdisabled'] = 'تم تعطيل ميزة استيراد اللغة.
يجب عليك تحديث حزم لغتك يدوياً على مستوى نظام الملفات. لا تنس تطهير مخابئ السلسلة بعد القيام بذلك.';
$string['langpackinstalled'] = 'تم تنصيب حزمة اللغة \'{$a}\' بنجاح';
$string['langpackinstalledevent'] = 'حزمة اللغة المثبتة';
$string['langpacknotremoved'] = 'حدث خطأ؛
حزمة اللغة \'{$a}\' لم يتم إلغاء تثبيتها بالكامل.
يرجى التحقق من أذونات الملف.';
$string['langpackremoved'] = 'تم إلغاء تنصيب حزمة اللغة \'{$a}\'';
$string['langpackremovedevent'] = 'تم إلغاء تثبيت حزمة اللغة';
$string['langpackupdated'] = 'تم تحديث حزمة اللغة \'{$a}\' بنجاح';
$string['langpackupdatedevent'] = 'حزمة اللغة المحدثة';
$string['langpackupdateskipped'] = 'تم تخطي تحديث حزمة اللغة \'{$a}\'';
$string['langpackuptodate'] = 'حزمة اللغة {$a}  محدّثة حتى تاريخه';
$string['langunsupported'] = 'لا يبدو أن مخدمك يدعم اللغات التالية بشكل كامل:</p><ul>{$a->missinglocales}</ul><p>بدلاً من ذلك، سيتم استعمال اللغة العالمية ({$a->globallocale}) لتنسيق سلاسل معينة مثل التواريخ أو الأرقام.</p>';
$string['langupdatecomplete'] = 'تم إكمال تحديث حزم اللغات';
$string['missingcfglangotherroot'] = 'قيمة تكوين مفقودة  $CFG->langotherroot';
$string['missinglangparent'] = 'اللغة الأم مفقودة <em>{$a->parent}</em> من <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'لا يمكن إلغاء تثبيت حزمة اللغة الإنجليزية.';
$string['nolangupdateneeded'] = 'كل حزم اللغة الخاصة بك محدثة و لا تحتاج أيّ تحديث.';
$string['pluginname'] = 'حزم اللغات';
$string['privacy:metadata'] = 'لا يخزن المكون الإضافي Language packs أيّ بيانات شخصية.';
$string['purgestringcaches'] = 'تطهير الذاكرة المؤقتة من الجُمل';
$string['selectlangs'] = 'حدد اللغات لإلغاء التثبيت';
$string['uninstall'] = 'إلغاء حزمة (حزم) اللغة المختارة';
$string['uninstallconfirm'] = 'أنت على وشك القيام بإلغاء حزمة اللغة {$a}، هل أنت متأكد؟';
$string['updatelangs'] = 'حدّث جميع حزم اللغة المحلية';
