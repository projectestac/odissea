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
 * Strings for component 'enrol_meta', language 'ar', version '4.1'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'أضف إلى المجموعة';
$string['coursesort'] = 'إفرز قائمة المقررات الدراسية';
$string['coursesort_help'] = 'هذا يحدد فيما إذا كانت قائمة المقررات الدراسية التي يمكن ربطها مفروزة بترتيب ما (بعبارة أخرى، الترتيب الذي تظهر به في إدارة الموقع > المقررات الدراسية > إدارة المقررات الدراسية والتصنيفات) أو الفرز هجائياً حسب أسمائها.';
$string['creategroup'] = 'أنشئ مجموعة جديدة';
$string['defaultgroupnametext'] = 'المساق {$a->name} {$a->increment}';
$string['enrolmetasynctask'] = 'مهمة مزامنة انضمامات ميتا';
$string['linkedcourse'] = 'أربط المساق';
$string['meta:config'] = 'تهيئة عينات انضمام ميتا';
$string['meta:selectaslinked'] = 'إختيار المساق على أنه مرتبط ببيانات وصفية meta';
$string['meta:unenrol'] = 'إلغاء انضمام المستخدمين المعلقين';
$string['nosyncroleids'] = 'الأدوار غير المُزَامَنة';
$string['nosyncroleids_desc'] = 'إفتراضياً، كل تعيينات الأدوار على مستوى المساق تتم مزامنتها من المساق الأساسي إلى الفرعيات. الأدوار المحددة هنا لن يتم تضمينها في عملية المزامنة. الأدوار المتاحة للمزامنة سيتم تحديثها عند التنفيذ القادم لمشغل الوظائف الدورية.';
$string['pluginname'] = 'رابط البيانات الوصفية للمساق الدراسي';
$string['pluginname_desc'] = 'تقوم إصافة التسجيل في رابط التعريف بالمساق بمزامنة عمليات التسجيل والأدوار في مساقين دراسيين مختلفين.';
$string['privacy:metadata:core_group'] = 'إضافة انضمام ميتا يمكنه إنشاء مجموعة جديدة أو استعمال مجموعة موجودة لإضافة كل المشاركين في المساق المربوط.';
$string['syncall'] = 'مزامنة كل المستخدمين المنضمين';
$string['syncall_desc'] = 'عند تمكينه، ستتم مزامنة كل المستخدمين المنضمين حتى وإن لم يكن لديهم دور في المساق الأساسي. عند تعطيله، فقط المستخدمون الذين لديهم دور مُزَامن واحد على الأقل سيتم ضمهم إلى المساق الفرعي.';
$string['wscannotcreategroup'] = 'ليست هناك صلاحية إنشاء مجموعة في المساق المرتبط ذي المُعرَّف = {$a}.';
$string['wsinvalidcourse'] = 'مُعرَّف المساق = {$a} ليس موجودًا أو ليست هناك صلاحية للربط مع انضمام Meta.';
$string['wsinvalidmetacourse'] = 'المساق Meta ذي مُعرَّف = {$a} ليس موجودًا أو ليست هناك صلاحية لإضافة عيِّنة الانضمام.';
$string['wsnoinstancesspecified'] = 'لم يتم تحديد العيِّنات';
