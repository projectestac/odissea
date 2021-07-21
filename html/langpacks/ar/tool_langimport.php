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
 * Strings for component 'tool_langimport', language 'ar', version '3.11'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'تعذر الاتصال بمخدم التنزيل. ليس من الممكن تنصيب حزم اللغات أو تحديثها تلقائياً. يرجى تنزيل ملف ZIP المناسبة من <a href="{$a->src}">{$a->src}</a> وفك ضغطها يدوياً في مجلد البيانات الخاص بك <code>{$a->dest}</code>';
$string['install'] = 'تنصيب حزم اللغة المختارة';
$string['installedlangs'] = 'حزم اللغات المنصبة';
$string['installfailed'] = 'فشلت عملية تنصيب حزم اللغات!';
$string['installfinished'] = 'إكتملت عملية تنصيب حزم اللغات.';
$string['installpending'] = 'حزم اللغات التالية سيتم تنصيبها قريبًا: {$a}.';
$string['installscheduled'] = 'حزم اللغات المجدولة للتنصيب.';
$string['langimport'] = 'أداة استيراد اللغة';
$string['langimportdisabled'] = 'تم تعطيل ميزة استيراد اللغة. ينبغي عليك تحديث حزم لغاتك يدوياً على مستوى نظام الملفات. لا تنسَ تطهير مخبوءات النصوص بعد قيامك بذلك.';
$string['langpackinstalled'] = 'تم تنصيب حزمة اللغة \'{$a}\' بنجاح';
$string['langpackinstalledevent'] = 'حزمة لغة تم تنصيبها';
$string['langpacknotremoved'] = 'وقع خطأ؛ حزمة اللغة \'{$a}\' لم يتم إلغاء تنصيبها بالكامل. يرجى التحقق من صلاحيات الملفات.';
$string['langpackremoved'] = 'تم إلغاء تنصيب حزمة اللغة \'{$a}\'';
$string['langpackremovedevent'] = 'حزمة لغة تم إلغاء تنصيبها';
$string['langpackupdated'] = 'تم تحديث حزمة اللغة \'{$a}\' بنجاح';
$string['langpackupdatedevent'] = 'حزمة لغة تم تحديثها';
$string['langpackupdateskipped'] = 'تم تخطي تحديث حزمة اللغة \'{$a}\'';
$string['langpackuptodate'] = 'حزمة اللغة \'{$a}\' محدّثة إلى آخر إصدار';
$string['langunsupported'] = 'لا يبدو أن مخدمك يدعم اللغات التالية بشكل كامل:</p><ul>{$a->missinglocales}</ul><p>بدلاً من ذلك، سيتم استعمال اللغة العالمية ({$a->globallocale}) لتنسيق سلاسل معينة مثل التواريخ أو الأرقام.</p>';
$string['langupdatecomplete'] = 'تم إكمال تحديث حزم اللغات';
$string['missingcfglangotherroot'] = 'قيمة تكوين مفقودة  $CFG->langotherroot';
$string['missinglangparent'] = 'اللغة الأم مفقودة <em>{$a->parent}</em> من <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'لا يمكن إلغاء تثبيت حزمة اللغة الإنجليزية.';
$string['nolangupdateneeded'] = 'كل حزم اللغات الخاصة بك محدثة ولا تحتاج أي تحديث';
$string['pluginname'] = 'حزم اللغات';
$string['privacy:metadata'] = 'إن ملحق حزم اللغات لا يخزن أي بيانات شخصية.';
$string['purgestringcaches'] = 'تطهير مخبوءات الجُمل';
$string['search'] = 'البحث في حزم اللغات المتاحة';
$string['selectlangs'] = 'حدد اللغات المزمع إلغاء تنصيبها';
$string['uninstall'] = 'إلغاء تنصيب حزم اللغات المحددة';
$string['uninstallconfirm'] = 'أنت على وشك إلغاء تنصيب حزم اللغات هذه: <strong>{$a}</strong>. هل أنت متأكد؟';
$string['updatelangs'] = 'تحديث كل حزم اللغات المنصبة';
$string['updatelangsnote'] = 'تحديث كل حزم اللغات المنصبة عند النقر على الزر يمكن أن يستغرق وقتًا طويلاً ويفضي إلى حالات انتهاء مهلة التنزيل. يوصى بدلاً من ذلك الاستفادة من المهمة المجدولة \'{$a->taskname}\' (التي يتم تشغيلها إفتراضيًا كل يوم).';
