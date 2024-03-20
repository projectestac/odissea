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
 * Strings for component 'enrol_database', language 'ar', version '4.1'.
 *
 * @package     enrol_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'تهيئة عينات انضمام قاعدة البيانات';
$string['database:unenrol'] = 'إلغاء انضمام المستخدمين المعلقة حساباتهم';
$string['dbencoding'] = 'ترميز قاعدة البيانات';
$string['dbhost'] = 'مضيف قاعدة البيانات';
$string['dbhost_desc'] = 'أدخل عنوان IP لمخدم قاعدة البيانات أو اسم المضيف. استعمل تسمية DSN للنظام إذا كنت تستعمل ODBC. استعمل PDO DSN إذا كنت تستعمل PDO.';
$string['dbname'] = 'اسم قاعادة البيانات';
$string['dbname_desc'] = 'أتركه فارغاً إذا كنت تستعمل تسمية DSN في مضيف قاعدة البيانات.';
$string['dbpass'] = 'كلمة مرور قاعدة البيانات';
$string['dbsetupsql'] = 'أمر تنصيب قاعدة البيانات';
$string['dbsetupsql_desc'] = 'أمر SQL عند إجراء تنصيب خاص لقاعدة البيانات، عادة ما يستعمل لتهيئة ترميز الاتصال - مثلاً لـ MySQL و PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'استعمل اقتباسات sybase';
$string['dbsybasequoting_desc'] = 'نمط الاستبدال بعلامة اقتباس مفردة لـ Sybase - المطلوب لـ Oracle، MS SQL وبعض أنظمة قواعد البيانات الأخرى. لا تستعمله مع MySQL!';
$string['dbtype'] = 'مشغل قاعدة البيانات';
$string['dbtype_desc'] = 'اسم مشغل قاعدة بيانات ADOdb، نوع محرك قاعدة البيانات الخارجي.';
$string['dbuser'] = 'مستخدم قاعدة البيانات';
$string['debugdb'] = 'اكتشاف أخطاء ADOdb';
$string['debugdb_desc'] = 'اكتشاف أخطاء اتصال ADOdb مع قاعدة البيانات الخارجية - استعمله عند ظهور صفحة فارغة عند تسجيل الدخول. لا يتناسب مع المواقع قيد التشغيل الفعلي!';
$string['defaultcategory'] = 'التصنيف الافتراضي للمساق الجديد';
$string['defaultcategory_desc'] = 'التصنيف الافتراضي للمساقات الدراسية المنشأة تلقائياً. استعمله عند عدم تحديد مُعرَّف التصنيف الجديد أو تعذر العثور عليه.';
$string['defaultrole'] = 'الدور الافتراضي';
$string['defaultrole_desc'] = 'الدور الذي سيتم منحه تلقائياً إذا لم يتم تحديد أي دور في الجدول الخارجي.';
$string['ignorehiddencourses'] = 'تجاهل المقررات الدراسية المخفية';
$string['ignorehiddencourses_desc'] = 'عند تمكينه، لن يتم ضم المستخدمين إلى المقررات الدراسية التي تم ضبطها غير متاحة للطلبة.';
$string['localcategoryfield'] = 'حقل التصنيف المحلي';
$string['localcoursefield'] = 'حقل المساق المحلي';
$string['localrolefield'] = 'حقل الدور المحلي';
$string['localuserfield'] = 'حقل المستخدم المحلي';
$string['newcoursecategory'] = 'حقل تصنيف المساق الجديد';
$string['newcoursefullname'] = 'حقل الاسم الكامل للمقرر الدراسي الجديد';
$string['newcourseidnumber'] = 'حقل مُعرَّف المساق الجديد';
$string['newcourseshortname'] = 'حقل الاسم المختصر للمقرر الدراسي الجديد';
$string['newcoursetable'] = 'جدول المقررات الدراسية الجديدة البعيد';
$string['newcoursetable_desc'] = 'حدد اسم الجدول الذي يضم قائمة بالمقررات الدراسيةالتي ينبغي إنشاؤها تلقائياً. تركه فارغاً معناه لن يتم إنشاء أي مقرر.';
$string['pluginname'] = 'قاعدة البيانات الخارجية';
$string['pluginname_desc'] = 'يمكنك استعمال قاعدة بيانات خارجية (تقريباً بأي نوع) للسيطرة على عمليات الانضمام. من المفترض أن قاعدة بياناتك تحتوي على الأقل على حقل يضم مُعرَّف المساق، وحقل آخر يحتوي على مُعرَّف المستخدم. ستتم مقارنتهما مع الحقول التي تختارها في جدولي المقررات الدراسية والمستخدمين المحليين.';
$string['privacy:metadata'] = 'إن محلق انضمام قاعدة البيانات لا يخزن أي بيانات شخصية.';
$string['remotecoursefield'] = 'حقل المساق عن بعد';
$string['remotecoursefield_desc'] = 'اسم الحقل في الجدول البعيد والذي سيتم استعماله للمقارنة من مدخلات جدول المساق.';
$string['remoteenroltable'] = 'جدول انضمام المستخدم البعيد';
$string['remoteenroltable_desc'] = 'حدد اسم الجدول الذي يحتوي على قائمة انضمامات المستخدمين. تركه فارغاً معناه عدم إجراء مزامنة على انضمامات المستخدمين.';
$string['remoteotheruserfield'] = 'حقل آخر للمستخدم البعيد';
$string['remoteotheruserfield_desc'] = 'اسم الحقل في الجدول البعيد الذي سيتم استعماله  لوضع علم  على تعيين الدور لـ "مستخدم آخر".';
$string['remoterolefield'] = 'حقل الدور البعيد';
$string['remoterolefield_desc'] = 'اسم الحقل في الجدول البعيد والذي سيتم استعماله للمقارنة من مدخلات جدول الأدوار.';
$string['remoteuserfield'] = 'حقل المستخدم البعيد';
$string['remoteuserfield_desc'] = 'اسم الحقل في الجدول البعيد والذي سيتم استعماله للمقارنة من مدخلات جدول المستخدمين.';
$string['settingsheaderdb'] = 'اتصال قاعدة البيانات الخارجي';
$string['settingsheaderlocal'] = 'تعيين الحقل المحلي';
$string['settingsheadernewcourses'] = 'إنشاء مساقات جديدة';
$string['settingsheaderremote'] = 'مزامنة الانضمام البعيد';
$string['syncenrolmentstask'] = 'مهمة مزامنة انضمامات قاعدة البيانات الخارجية';
$string['templatecourse'] = 'مظهر المساق الجديد';
$string['templatecourse_desc'] = 'إختياري: يمكن للمقررات المنشأة تلقائياً نسخ إعداداتها من مظهر مساق. أدخل هنا الاسم المختصر للمقرر الدراسي الذي سيكون بمثابة مظهر.';
