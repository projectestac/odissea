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
 * Strings for component 'assignfeedback_offline', language 'ar', version '3.11'.
 *
 * @package     assignfeedback_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'تأكيد استيراد التقديرات';
$string['default'] = 'ممكّن بشكل افتراضي';
$string['default_help'] = 'باختيارك ( صح ) سيتم تمكين التقييم بأوراق العمل دون اتصال بشكل افتراضي لكل الواجبات الجديدة.';
$string['downloadgrades'] = 'تنزيل ورقة عمل التقييم';
$string['enabled'] = 'ورقة عمل التقييم دون اتصال';
$string['enabled_help'] = 'إذا مُكِّن، فالمعلم سيكون قادر على تنزيل ورفع جدول فيه تقديرات للطلاب عند تصحيح الواجبات.';
$string['feedbackupdate'] = 'سجل الحقل "{$a->field}" لــ"{$a->student}" بــ"{$a->text}"';
$string['gradelockedingradebook'] = 'تم تأمين العلامة في سجل التقديرات لـ {$a}';
$string['graderecentlymodified'] = 'تم تعديل الدرجة في مودل في وقت أقرب من ورقة عمل التقييم لـ {$a}';
$string['gradesfile'] = 'التقييم في ورقة عمل  (بصيغة CSV)';
$string['gradesfile_help'] = 'جدول التقديرات مع الدرجات المعدلة. يجب أن يكون هذا الملف بصيغة CSV مع ترميز UTF-8 الذي تم تنزيله من الواجب، مع أعمدة لتقدير الطالب ومُعرَّفه.';
$string['gradeupdate'] = 'ضع الدرجة لــ {$a->student} لــ {$a->grade}';
$string['ignoremodified'] = 'اسمح بتحديث السجلات التي تم تعديلها مؤخرا في البرنامج على ما كانت عليه في ورقة العمل.';
$string['ignoremodified_help'] = 'عندما يتم تحميل ورقة عمل التقييم من البرنامج فإنها تحتوي على تاريخ آخر تعديل لكل الدرجات. إذا تم تحديث أيّ من الدرجات في البرنامج بعد تحميل هذه الورقة، فالبرنامج افتراضياً سيكتب المعلومات المحدّثة عند استيراد الدرجات. عن طريق تحديد هذا الخيار البرنامج سيعطل خيار التأمين، لأنه من الممكن عندما يتعامل مع الدرجات أكثر من مصحح ، فسيكتب البرنامج درجات كل مصحح على الأخر.';
$string['importgrades'] = 'تأكيد التغييرات في ورقة عمل التقييم';
$string['invalidgradeimport'] = 'لم يتمكن مودل من قراءة الجدول المرفوع. تأكد من أنه محفوظ بشكل قيم مفصولة بفوارز (CSV.) وحاول مجددًا.';
$string['nochanges'] = 'لم نجد تعديلات على الدرجات في ورقة العمل المحملة ..';
$string['offlinegradingworksheet'] = 'التقديرات';
$string['pluginname'] = 'ورقة عمل التقييم دون اتصال';
$string['privacy:nullproviderreason'] = 'لا يحتوي هذا الملحق على قاعدة بيانات لتخزين معلومات المستخدم. إنه يستعمل واجهات برمجة التطبيقات فقط في mod_assign للمساعدة في عرض واجهة التقدير.';
$string['processgrades'] = 'استورد التقديرات';
$string['skiprecord'] = 'تخطّي السجل';
$string['updatedgrades'] = 'تم تحديث <strong>{$a->gradeupdatescount}</strong> تقدير و <strong>{$a->feedbackupdatescount}</strong> إفادة فورية.';
$string['updaterecord'] = 'حدّث السجل ..';
$string['uploadgrades'] = 'حمل ورقة عمل التقييم';
