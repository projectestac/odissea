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
 * Strings for component 'tool_task', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_task
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'في اسرع وقت ممكن';
$string['backtoscheduledtasks'] = 'العودة إلى المهام المجدولة';
$string['blocking'] = 'حجب';
$string['cannotfindthepathtothecli'] = 'لا يمكن العثور على المسار إلى PHP CLI القابل للتنفيذ حتى تم إحباط تنفيذ المهمة. قم بتعيين إعداد "المسار إلى PHP CLI" في مسارات إدارة الموقع / الخادم / النظام.';
$string['clearfaildelay_confirm'] = 'هل أنت متأكد من رغبتك في إلغاء تأخير الفشل للمهمة \'{$a}\'؟ بعد مسح التأخير ، ستعمل المهمة وفقًا لجدولها الطبيعي.';
$string['component'] = 'مكوّن';
$string['corecomponent'] = 'النواة';
$string['default'] = 'الافتراضي';
$string['disabled'] = 'معطّل';
$string['disabled_help'] = 'لا يتم تنفيذ المهام المجدولة المعطلة من cron ، و مع ذلك لا يزال من الممكن تنفيذها يدويًا عبر أداة CLI.';
$string['edittaskschedule'] = 'تعديل جدول المهام: {$a}';
$string['enablerunnow'] = 'اسمح بـ "التشغيل الآن" للمهام المجدولة';
$string['enablerunnow_desc'] = 'يتيح للمسؤولين تشغيل مهمة مجدولة واحدة على الفور ، بدلاً من انتظار تشغيلها في الموعد المحدد. تتطلب هذه الميزة تعيين "Path to PHP CLI" (pathtophp) في مسارات النظام. تعمل المهمة على خادم الويب ، لذلك قد ترغب في تعطيل هذه الميزة لتجنب مشاكل الأداء المحتملة.';
$string['faildelay'] = 'فشل التأخير';
$string['lastruntime'] = 'آخر تشغيل';
$string['nextruntime'] = 'التشغيل التالي';
$string['plugindisabled'] = 'البرنامج المساعد معطل';
$string['pluginname'] = 'تكوين المهمة المجدولة';
$string['privacy:metadata'] = 'لا يخزن المكون Scheduled task configuration أيّ بيانات شخصية.';
$string['resettasktodefaults'] = 'إعادة تعيين جدول المهام إلى الإعدادات الافتراضية';
$string['resettasktodefaults_help'] = 'سيؤدي ذلك إلى تجاهل أي تغييرات محلية وإعادة الجدول الزمني لهذه المهمة إلى إعداداته الأصلية.';
$string['runnow'] = 'التشغيل الآن';
$string['runnow_confirm'] = 'هل أنت متأكد من رغبتك في تشغيل هذه المهمة \'{$a}\' الآن؟
ستعمل المهمة على خادم الويب و قد تستغرق بعض الوقت حتى تكتمل.';
$string['runpattern'] = 'نمط التشغيل';
$string['scheduledtaskchangesdisabled'] = 'تم منع التعديلات على قائمة المهام المجدولة في تكوين Moodle';
$string['scheduledtasks'] = 'المهام المجدولة';
$string['taskdisabled'] = 'تم تعطيل المهمة';
$string['taskscheduleday'] = 'اليوم';
$string['taskscheduleday_help'] = 'حقل يوم من الشهر لجدول المهام. يستخدم الحقل نفس تنسيق يونكس كرون. بعض الأمثلة هي:
* * كل يوم
* * / 2 كل يوم ثانٍ
* 1 الأول من كل شهر
* 1،15 الأول و الخامس عشر من كل شهر';
$string['taskscheduledayofweek'] = 'يوم من الأسبوع';
$string['taskscheduledayofweek_help'] = 'يوم من أيام الأسبوع لجدول المهام. يستخدم الحقل نفس تنسيق يونكس كرون. بعض الأمثلة هي:
* * كل يوم
* 0 كل يوم أحد
* 6 كل يوم سبت
* 1،5 كل يوم اثنين وجمعة';
$string['taskschedulehour'] = 'الساعة';
$string['taskschedulehour_help'] = 'حقل ساعة لجدول المهمة. يستخدم الحقل نفس تنسيق يونكس كرون. بعض الأمثلة على ذلك:
* * كل ساعة
* * / 2 كل 2 ساعة
* 2-10 كل ساعة من 02:00 حتى 10:00 (ضمنا)
* 2،6،9 02:00، 06:00 و 09:00';
$string['taskscheduleminute'] = 'اللدقيقة';
$string['taskscheduleminute_help'] = 'حقل دقيقة لجدول المهمة. يستخدم الحقل نفس تنسيق يونكس كرون. بعض الأمثلة هي:
 * * كل دقيقة
* * / 5 كل 5 دقائق
 * 2-10 كل دقيقة بين 2 و 10 بعد الساعة (ضمناً)
* 2،6،9 2 و 6 و 9 دقائق بعد الساعة';
$string['taskschedulemonth'] = 'الشهر';
$string['taskschedulemonth_help'] = 'حقل شهر لجدول المهمة. يستخدم الحقل نفس تنسيق يونكس كرون. بعض الأمثلة هي:
* * كل شهر
* * / 2 كل شهر ثاني
* 1 كل يناير
* 1،5 كل يناير ومايو';
