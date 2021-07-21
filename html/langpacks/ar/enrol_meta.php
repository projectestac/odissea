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
 * Strings for component 'enrol_meta', language 'ar', version '3.11'.
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
$string['defaultgroupnametext'] = 'المقرر الدراسي {$a->name} {$a->increment}';
$string['enrolmetasynctask'] = 'مهمة مزامنة انضمامات ميتا';
$string['linkedcourse'] = 'أربط المقرر الدراسي';
$string['meta:config'] = 'تهيئة عينات انضمام ميتا';
$string['meta:selectaslinked'] = 'إختيار المقرر الدراسي على أنه مرتبط ببيانات وصفية meta';
$string['meta:unenrol'] = 'إلغاء انضمام المستخدمين المعلقين';
$string['nosyncroleids'] = 'الأدوار غير المُزَامَنة';
$string['nosyncroleids_desc'] = 'إفتراضياً، كل تعيينات الأدوار على مستوى المقرر الدراسي تتم مزامنتها من المقرر الأساسي إلى الفرعيات. الأدوار المحددة هنا لن يتم تضمينها في عملية المزامنة. الأدوار المتاحة للمزامنة سيتم تحديثها عند التنفيذ القادم لمشغل الوظائف الدورية.';
$string['pluginname'] = 'رابط البيانات الوصفية للمقرر الدراسي';
$string['pluginname_desc'] = 'تقوم إصافة التسجيل في رابط التعريف بالمقرر الدراسي بمزامنة عمليات التسجيل والأدوار في مقررين دراسيين مختلفين.';
$string['privacy:metadata:core_group'] = 'ملحق انضمام ميتا يمكنه إنشاء مجموعة جديدة أو استعمال مجموعة موجودة لإضافة كل المشاركين في المقرر الدراسي المربوط.';
$string['syncall'] = 'مزامنة كل المستخدمين المنضمين';
$string['syncall_desc'] = 'عند تمكينه، ستتم مزامنة كل المستخدمين المنضمين حتى وإن لم يكن لديهم دور في المقرر الدراسي الأساسي. عند تعطيله، فقط المستخدمون الذين لديهم دور مُزَامن واحد على الأقل سيتم ضمهم إلى المقرر الدراسي الفرعي.';
