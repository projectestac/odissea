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
 * Strings for component 'cachestore_file', language 'ar', version '4.1'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'إزالة المجلد بشكل لا متزامن';
$string['asyncpurge_help'] = 'عند تمكينه، سيتم إنشاء المجلد الجديد مع النسخة المرجعية المخبوءة وسيتم حذف المجلد القديم بشكل لا متزامن من قبل مهمة مجدولة.';
$string['autocreate'] = 'إنشاء دليل تلقائي';
$string['autocreate_help'] = 'إذا مكّن فالدليل المحدد في المسار يتم إنشاؤه تلقائيا إذا كان غير موجود بالفعل.';
$string['lockwait'] = 'أقصى مدة لانتظار التأمين';
$string['lockwait_help'] = 'أقصى مقدار من الوقت بالثواني لانتظار التأمين الحصري قبل قراءة أو كتابة مفتاح الخبء. هذا يُستعمل فقط مع تعريفات الخبء التي تتطلب تأمين القراءة أو الكتابة.';
$string['path'] = 'مسار الخبء';
$string['path_help'] = 'المجلد الذي ينبغي استعماله لتخزين الملفات لمخزن الخبء هذا. إذا تُرك فارغاً (افتراضي) سيتم إنشاء المجلد تلقائياً في المجلد moodledata. يمكن استعمال ذلك للإشارة إلى مخزن الملفات نسبة إلى مجلد في محرك أقراص ذي أداء أفضل (مثلما موجود في الذاكرة).';
$string['pluginname'] = 'خبء الملفات';
$string['prescan'] = 'المسح القبلي للدليل';
$string['prescan_help'] = 'إذا مكّن يتم تفحص المجلد عند استعمال الخبء لأول مرة ويتم فحص طلبات الحصول على الملفات لأول مرة إزاء البيانات المفحوصة. هذا يمكن أن يساعد إذا كان لديك نظام ملفات بطيء وعندما تكتشف بأن عمليات الملفات هي سبب الاختناق في الأداء.';
$string['privacy:metadata'] = 'تخزن إضافة مخزن خبء الملفات؛ البيانات لفترة وجيزة كجزء من وظائف التخزين المؤقت ولكن يتم مسح هذه البيانات بانتظام.';
$string['singledirectory'] = 'مخزن الدليل المفرد';
$string['singledirectory_help'] = 'إذا تم تمكينه، فالملفات (العناصر المخبأة) سيتم خزنها في مجلد واحد بدلاً من توزيعها على مجلدات متعددة.

تمكينه سيسرع من تبادل الملفات ولكن على حساب زيادة خطر تجاوز قيود نظام الملفات.

من الموصى به تشغيله إذا كان الآتي صحيحاً:

* إذا كنت تعلم بأن عدد العناصر في ذاكرة التخزين المؤقت ستكون صغيرة بما يكفي بحيث لن تسبب مشاكل في نظام الملفات الذي تعمل معه.
* البيانات التي يتم تخزينها مؤقتاً ليست مكلفة للتوليد. أما إذا كانت كذلك، فالبقاء مع الوضع الافتراضي هو الخيار الأفضل لأنه يقلل من احتمالية حدوث مشاكل.';
$string['task_asyncpurge'] = 'إزالة مجلدات مراجعة الخبء القديم لمخزن الملفات بشكل لا متزامن';
