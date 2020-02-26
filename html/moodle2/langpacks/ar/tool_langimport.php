<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_langimport', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_langimport
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'غير قادر على الاتصال بخادم التنزيل. لم يمكن تثبيت حزم اللغات أو تحديثها تلقائيًا.
يرجى تنزيل ملف ZIP المناسب من {$a->src} و فك ضغطها يدويًا إلى دليل البيانات الخاص بك{$a->dest}';
$string['install'] = 'ثبت حزمة اللغة المختارة';
$string['installedlangs'] = 'ثبت حزم اللغات المختارة';
$string['langimport'] = 'أداة استيراد اللغة';
$string['langimportdisabled'] = 'تم تعطيل ميزت إستراد اللغة. يجب عليك تحديث حزمة لغتك عن طريق مستوى ملف النظام';
$string['langpackinstalled'] = 'تم تثبيت حزمة اللغة {$a} بنجاح';
$string['langpackinstalledevent'] = 'حزمة اللغة المثبتة';
$string['langpacknotremoved'] = 'حدث خطأ؛
حزمة اللغة \'{$a}\' لم يتم إلغاء تثبيتها بالكامل.
يرجى التحقق من أذونات الملف.';
$string['langpackremoved'] = 'تم حذف حزمة اللغة';
$string['langpackremovedevent'] = 'تم إلغاء تثبيت حزمة اللغة';
$string['langpackupdated'] = 'تم تحديث حزمة اللغة \'{$a}\' بنجاح';
$string['langpackupdatedevent'] = 'حزمة اللغة المحدثة';
$string['langpackupdateskipped'] = 'تم تخطي تحديث حزمة اللغة {$a}';
$string['langpackuptodate'] = 'حزمة اللغة {$a}  محدّثة حتى تاريخه';
$string['langupdatecomplete'] = 'تم تحديث حزمة اللغة';
$string['missingcfglangotherroot'] = 'قيمة تكوين مفقودة  $CFG->langotherroot';
$string['missinglangparent'] = 'اللغة الأم مفقودة <em>{$a->parent}</em> من <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'لا يمكن إلغاء تثبيت حزمة اللغة الإنجليزية.';
$string['nolangupdateneeded'] = 'كل حزم اللغة الخاصة بك محدثة ولا تحتاج أي تحديث.';
$string['pluginname'] = 'حزم اللغة';
$string['privacy:metadata'] = 'لا يخزن المكون الإضافي Language packs أيّ بيانات شخصية.';
$string['purgestringcaches'] = 'تطهير الذاكرة المؤقتة من الجُمل';
$string['selectlangs'] = 'حدد اللغات لإلغاء التثبيت';
$string['uninstall'] = 'حذف حزمة اللغة المختارة';
$string['uninstallconfirm'] = 'أنت على وشك القيام بحذف حزمة اللغة {$a}، هل أنت متأكد؟';
$string['updatelangs'] = 'حدث جميع حزم اللغة المحليه';
