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
 * Strings for component 'tool_task', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_task
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'في أقرب وقت ممكن';
$string['backtoscheduledtasks'] = 'عودة إلى المهام المجدولة';
$string['blocking'] = 'حجب';
$string['cannotfindthepathtothecli'] = 'تعذر العثور على المسار إلى واجهة سطر الأوامر القابل للتنفيذ لـ PHP لذلك تم إحباط تنفيذ المهمة. قم بتعيين إعداد "المسار إلى واجهة سطر الأوامر لـ PHP" في إدارة الموقع / المخدم / مسارات النظام.';
$string['clearfaildelay_confirm'] = 'هل أنت متأكد من رغبتك في إخلاء تأخير الفشل للمهمة \'{$a}\'؟ بعد إخلاء التأخير، ستعمل المهمة وفقاً لجدولها الطبيعي.';
$string['component'] = 'مكوّن';
$string['corecomponent'] = 'النواة';
$string['default'] = 'الافتراضي';
$string['disabled'] = 'معطّل';
$string['disabled_help'] = 'لا يتم تنفيذ المهام المجدولة المعطلة من قبل مشغل الوظائف الدورية، مع ذلك، لا يزال من الممكن تنفيذها يدوياً عبر أداة واجهة سطر الأوامر.';
$string['edittaskschedule'] = 'تعديل جدول المهام: {$a}';
$string['enablerunnow'] = 'اسمح بـ "التشغيل الآن" للمهام المجدولة';
$string['enablerunnow_desc'] = 'يتيح للمشرفين تشغيل مهمة مجدولة واحدة على الفور، بدلاً من انتظار تشغيلها في موعدها المجدول. تتطلب هذه الميزة تعيين \'مسار واجهة سطر الأوامر لـ PHP\' (pathtophp) في مسارات النظام. يجري تنفيذ المهمة في مخدم الويب، لذلك قد ترغب بتعطيل هذه الميزة لتجنب مشاكل الأداء المحتملة.';
$string['faildelay'] = 'تأخير الفشل';
$string['lastruntime'] = 'آخر تشغيل';
$string['nextruntime'] = 'التشغيل التالي';
$string['plugindisabled'] = 'الملحق مُعطَّل';
$string['pluginname'] = 'تهيئة المهمة المجدولة';
$string['privacy:metadata'] = 'إن ملحق تهيئة المهمة المجدولة لا يخزن أي بيانات شخصية.';
$string['resettasktodefaults'] = 'إعادة تعيين جدول المهام إلى الإعدادات الافتراضية';
$string['resettasktodefaults_help'] = 'سيؤدي ذلك إلى تجاهل أي تغييرات محلية وإعادة الجدول الزمني لهذه المهمة إلى إعداداته الأصلية.';
$string['runnow'] = 'إشتغل الآن';
$string['runnow_confirm'] = 'هل أنت متأكد من رغبتك في تشغيل هذه المهمة \'{$a}\' الآن؟ ستعمل المهمة على مخدم الويب وقد تستغرق بعض الوقت حتى تكتمل.';
$string['runpattern'] = 'نمط التشغيل';
$string['scheduledtaskchangesdisabled'] = 'تم منع التعديلات في قائمة المهام المجدولة في تهيئة مودل';
$string['scheduledtasks'] = 'المهام المجدولة';
$string['taskdisabled'] = 'تم تعطيل المهمة';
$string['tasklogs'] = 'سجلات المهام';
$string['taskscheduleday'] = 'اليوم';
$string['taskscheduleday_help'] = 'حقل يوم الشهر لجدولة المهام. يستعمل الحقل نفس تنسيق مشغل الوظائف الدورية في يونكس. بعض الأمثلة هي:

* <strong>*</strong> كل يوم
* <strong>*/2</strong> كل يومين
* <strong>1</strong> الأول من كل شهر
* <strong>1,15</strong> الأول والخامس عشر من كل شهر';
$string['taskscheduledayofweek'] = 'يوم من الأسبوع';
$string['taskscheduledayofweek_help'] = 'حقل يوم الأسبوع لجدولة المهام. يستعمل الحقل نفس تنسيق مشغل الوظائف الدورية في يونكس. بعض الأمثلة هي:

* <strong>*</strong> كل يوم
* <strong>0</strong> كل يوم أحد
* <strong>6</strong> كل يوم سبت
* <strong>1,5</strong> كل اثنين وجمعة';
$string['taskschedulehour'] = 'الساعة';
$string['taskschedulehour_help'] = 'حقل الساعة لجدولة المهام. يستعمل الحقل نفس تنسيق مشغل الوظائف الدورية في يونكس. بعض الأمثلة هي:

* <strong>*</strong> كل ساعة
* <strong>*/2</strong> كل ساعتين
* <strong>2-10</strong> كل ساعة من 02:00 حتى 10:00 (ضمناً)
* <strong>2,6,9</strong> الثانية صباحاً، السادسة صباحاً، التاسعة صباحاً';
$string['taskscheduleminute'] = 'الدقيقة';
$string['taskscheduleminute_help'] = 'حقل الساعة لجدولة المهام. يستعمل الحقل نفس تنسيق مشغل الوظائف الدورية في يونكس. بعض الأمثلة هي:

* <strong>*</strong> كل دقيقة
* <strong>*/5</strong> كل 5 دقائق
* <strong>2-10</strong> كل دقيقة ما بين الدقيقة الثانية وحتى العاشرة لكل ساعة (ضمناً)
* <strong>2,6,9</strong> الدقائق؛ الثانية، السادسة، والتاسعة من كل ساعة';
$string['taskschedulemonth'] = 'الشهر';
$string['taskschedulemonth_help'] = 'حقل الساعة لجدولة المهام. يستعمل الحقل نفس تنسيق مشغل الوظائف الدورية في يونكس. بعض الأمثلة هي:

* <strong>*</strong> كل شهر
* <strong>*/2</strong> كل شهرين
* <strong>1</strong> كل كانون الثاني/يناير
* <strong>1,5</strong> كل كانون الثاني/يناير و أيار/مايو';
$string['viewlogs'] = 'عرض سجلات {$a}';
