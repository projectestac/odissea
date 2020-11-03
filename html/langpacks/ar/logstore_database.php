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
 * Strings for component 'logstore_database', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   logstore_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'حجم المخزن الوسيط';
$string['buffersize_help'] = 'عدد إدخالات سجل الوقوعات المُدخلة دفعة واحدة في قاعدة البيانات، مما يحسن الأداء.';
$string['conectexception'] = 'لا يمكن الاتصال بقاعدة البيانات.';
$string['create'] = 'إنشاء';
$string['databasecollation'] = 'تجميع قاعدة البيانات';
$string['databasehandlesoptions'] = 'قاعدة البيانات تعالج الخيارات';
$string['databasehandlesoptions_help'] = 'هل تعالج قاعدة البيانات عن بعد خياراتها الخاصة.';
$string['databasepersist'] = 'اتصالات قاعدة البيانات المستمرة';
$string['databaseschema'] = 'مخطط قاعدة البيانات';
$string['databasesettings'] = 'إعدادات قاعدة البيانات';
$string['databasesettings_help'] = 'تفاصيل الاتصال لقاعدة بيانات السجل الخارجي: {$a}';
$string['databasetable'] = 'جدول قاعدة البيانات';
$string['databasetable_help'] = 'اسم الجدول حيث سيتم تخزين السجلات. يجب أن يحتوي هذا الجدول على بنية مماثلة لتلك المستخدمة من قبل logstore_standard (mdl_logstore_standard_log).';
$string['filters'] = 'تصفية السجلات';
$string['filters_help'] = 'تمكين المنقحات التي تستبعد بعض الإجراءات من التسجيل.';
$string['includeactions'] = 'شمول الإجراءات التي بهذه الأنواع';
$string['includelevels'] = 'شمول إجراءات هذه المستويات التعليمية';
$string['jsonformat'] = 'تنسيق JSON';
$string['jsonformat_desc'] = 'استخدم تنسيق JSON القياسي بدلاً من البيانات التسلسلية لـ PHP في حقل قاعدة البيانات "الآخر".';
$string['logguests'] = 'توثيق إجراءات الضيف';
$string['other'] = 'آخر';
$string['participating'] = 'المشاركة';
$string['pluginname'] = 'سجل قاعدة البيانات الخارجية';
$string['pluginname_desc'] = 'ملحق سجل يخزّن إدخالات السجل في جدول قاعدة بيانات خارجية.';
$string['privacy:metadata:log'] = 'مجموعة من الأحداث الماضية';
$string['privacy:metadata:log:anonymous'] = 'ما إذا كان قد تم الإبلاغ عن الحدث على أنه مجهول';
$string['privacy:metadata:log:eventname'] = 'اسم الحدث';
$string['privacy:metadata:log:ip'] = 'عنوان IP المستخدم في وقت الحدث';
$string['privacy:metadata:log:origin'] = 'أصل الحدث';
$string['privacy:metadata:log:other'] = 'معلومات إضافية حول الحدث';
$string['privacy:metadata:log:realuserid'] = 'معرف المستخدم الحقيقي وراء الحدث، عند تنكر المستخدم';
$string['privacy:metadata:log:relateduserid'] = 'معرف المستخدم المتعلق بهذا الحدث';
$string['privacy:metadata:log:timecreated'] = 'الوقت الذي وقع فيه الحدث';
$string['privacy:metadata:log:userid'] = 'معرف المستخدم الذي قام بتشغيل هذا الحدث';
$string['read'] = 'قراءة';
$string['tablenotfound'] = 'لم يتم العثور على جدول محدد';
$string['teaching'] = 'التدريس';
$string['testingsettings'] = 'اختبار إعدادات قاعدة البيانات ...';
$string['testsettings'] = 'اختبار الاتصال';
$string['update'] = 'تحديث';
