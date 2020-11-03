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
 * Strings for component 'cachestore_file', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   cachestore_file
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'إنشاء دليل تلقائي';
$string['autocreate_help'] = 'إذا مكّن فالدليل المحدد في المسار يتم إنشاؤه تلقائيا إذا كان غير موجود بالفعل.';
$string['path'] = 'مسار الخبء';
$string['path_help'] = 'المجلد الذي ينبغي استعماله لتخزين الملفات لمخزن الخبء هذا. إذا تُرك فارغاً (افتراضي) سيتم إنشاء المجلد تلقائياً في المجلد moodledata. يمكن استعمال ذلك للإشارة إلى مخزن الملفات نسبة إلى مجلد في محرك أقراص ذي أداء أفضل (مثلما موجود في الذاكرة).';
$string['pluginname'] = 'خبء الملفات';
$string['prescan'] = 'المسح القبلي للدليل';
$string['prescan_help'] = 'إذا مكّن يتم تفحص الدليل عندما يتم استخدام ذاكرة التخزين المؤقت أولا و يتم فحص طلبات الحصول على الملفات أولاً ضد بيانات المسح الضوئي.
هذا يمكن أن يساعد إذا كان لديك نظام الملفات بطيء و  أن عمليات الملفات تسبب لك عنق الزجاجة.';
$string['privacy:metadata'] = 'يخزن ملحق مخزن خبء الملفات؛ البيانات لفترة وجيزة كجزء من وظائف التخزين المؤقت ولكن يتم مسح هذه البيانات بانتظام.';
$string['singledirectory'] = 'مخزن الدليل المفرد';
$string['singledirectory_help'] = 'إذا مكّن تخزين الملفات (البنود المؤقتة) فسيتم في دليل واحد بدلا من تقسيمها إلى أدلة متعددة. <br /> سوف تمكن هذه التفاعلات من تسريع الملفات و لكن يأتي على حساب زيادة خطر ضرب قيود نظام الملفات.
<BR /> فمن المستحسن تشغيل هذا إذا كانت أحد النقاط التالية صحيحة:
<br /> - إذا كنت تعرف عدد العناصر في ذاكرة التخزين المؤقت ستكون صغيرة بما يكفي أنه لن يسبب مشاكل على نظام الملفات.
<br /> التعامل مع البيانات التي يتم تخزينها مؤقتا ليست مكلفة للتوليد. إذا كان هذا هو الحال فالبقاء مع الافتراضي هو الخيار الأفضل لأنه يقلل من فرصة التكرار.';
