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
 * Strings for component 'assignfeedback_offline', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   assignfeedback_offline
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'تأكيد استيراد الدرجات';
$string['default'] = 'ممكّن بشكل افتراضي';
$string['default_help'] = 'باختيارك ( صح ) سيتم تمكين التقييم بأوراق العمل دون اتصال بشكل افتراضي لكل الواجبات الجديدة.';
$string['downloadgrades'] = 'تنزيل ورقة عمل التقييم';
$string['enabled'] = 'ورقة عمل التقييم دون اتصال';
$string['enabled_help'] = 'إذا مكّن ، فإن المعلم قادر على تنزيل و تحميل ورقة عمل التقييم للطلاب عند تصحيح الواجبات.';
$string['feedbackupdate'] = 'سجل الحقل "{$a->field}" لــ"{$a->student}" بــ"{$a->text}"';
$string['gradelockedingradebook'] = 'تم تأمين الدرجة في دفتر الدرجات  لـ {$a}';
$string['graderecentlymodified'] = 'تم تعديل الدرجة في البرنامج و هي أكثر حداثة من ورقة عمل التقييم لـ  {$a}';
$string['gradesfile'] = 'التقييم في ورقة عمل  (بصيغة CSV)';
$string['gradesfile_help'] = 'ورقة عمل الدرجات مع الدرجات المعدلة. يجب أن يكون هذا الملف ملف CSV مع ترميز UTF-8 الذي تم تنزيله من الواجب ، مع أعمدة لتقدير الطالب و معرّفه.';
$string['gradeupdate'] = 'ضع الدرجة لــ {$a->student} لــ {$a->grade}';
$string['ignoremodified'] = 'اسمح بتحديث السجلات التي تم تعديلها مؤخرا في البرنامج على ما كانت عليه في ورقة العمل.';
$string['ignoremodified_help'] = 'عندما يتم تحميل ورقة عمل التقييم من البرنامج فإنها تحتوي على تاريخ آخر تعديل لكل الدرجات. إذا تم تحديث أيّ من الدرجات في البرنامج بعد تحميل هذه الورقة، فالبرنامج افتراضياً سيكتب المعلومات المحدّثة عند استيراد الدرجات. عن طريق تحديد هذا الخيار البرنامج سيعطل خيار التأمين، لأنه من الممكن عندما يتعامل مع الدرجات أكثر من مصحح ، فسيكتب البرنامج درجات كل مصحح على الأخر.';
$string['importgrades'] = 'تأكيد التغييرات في ورقة عمل التقييم';
$string['invalidgradeimport'] = 'لم يتمكن البرنامج من قراءة ورقة العمل المحملة . تأكد من حفظها على شكل قيم مفصولة بفاصلة منقوطة (CSV.) و حاول مرة أخرى.';
$string['nochanges'] = 'لم نجد تعديلات على الدرجات في ورقة العمل المحملة ..';
$string['offlinegradingworksheet'] = 'الدرجات';
$string['pluginname'] = 'ورقة عمل التقييم دون اتصال';
$string['privacy:nullproviderreason'] = 'لا يحتوي هذا البرنامج المساعد على قاعدة بيانات لتخزين معلومات المستخدم. يستخدم واجهات برمجة التطبيقات فقط في mod_assign للمساعدة في عرض واجهة التقدير.';
$string['processgrades'] = 'استورد الدرجات';
$string['skiprecord'] = 'تخطّي السجل';
$string['updatedgrades'] = 'حدّث {$a} الدرجات و ردود الفعل';
$string['updaterecord'] = 'حدّث السجل ..';
$string['uploadgrades'] = 'حمل ورقة عمل التقييم';
