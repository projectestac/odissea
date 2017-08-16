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
 * Strings for component 'tool_assignmentupgrade', language 'ar', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_assignmentupgrade
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['areyousure'] = 'هل أنت مُتأكد؟';
$string['areyousuremessage'] = 'هل أنت متأكد أنك تريد ترقية المهمة/التكليف"{$a->name}"?';
$string['assignmentid'] = 'معرف المهمة';
$string['assignmentnotfound'] = 'تعذر العثورعلى التكليف/ المهمة (المُعرِّف={$a})';
$string['assignmentsperpage'] = 'عدد المهمات لكل صفحة';
$string['assignmenttype'] = 'نوع المهمة';
$string['backtoindex'] = 'العودة للفهرس';
$string['batchoperations'] = 'دفعة العمليات';
$string['batchupgrade'] = 'ترقية تكاليف متعددة';
$string['confirmbatchupgrade'] = 'تأكيد دفعة ترقية التكاليف/المهمات';
$string['conversioncomplete'] = 'تم تحويل التكاليف';
$string['conversionfailed'] = 'لم يكن  تحويل التكليف/المهمة  ناجحاً. سجل الترقية  هو :<br />{$a}';
$string['listnotupgraded'] = 'قائمة بالمهمات التي لم يتم ترقيتها';
$string['listnotupgraded_desc'] = 'يمكنك ترقية التكاليف/المهام الفردية من هنا';
$string['noassignmentsselected'] = 'لا تكاليف /مهام مُختارة';
$string['noassignmentstoupgrade'] = 'لا توجد المهام/ تكاليف التي تتطلب ترقية';
$string['notupgradedintro'] = 'تسرد هذه الصفحة التكاليف التي تم إنشاؤها باستخدام نسخة قديمة من مودل التي لم يتم ترقيتها إلى وحدة تكليف جديدة في مودل 2.3. لا يمكن ترقية جميع التكاليف/المهام - لو تم إنشاؤها بنوع تكليف فرعي  مخصص، فسوف يكون واجباً ترقية ذلك النوع الفرعي أولاً إلى تنسيق التكاليف الجديدة حتى يتم إستكمال الترقية.';
$string['notupgradedtitle'] = 'تكاليف لم يتم ترقيتها';
$string['pluginname'] = 'مُساعد ترقية التكاليف';
$string['select'] = 'اختر';
$string['submissions'] = 'تسليم';
$string['supported'] = 'الترقية';
$string['unknown'] = 'غير معروف';
$string['updatetable'] = 'تحديث الجدول';
$string['upgradable'] = 'يمكن ترقيته';
$string['upgradeall'] = 'ترقية جميع التكاليف';
$string['upgradeallconfirm'] = 'ترقية جميع التكاليف؟';
$string['upgradeassignmentfailed'] = 'النتيجة: فشل ترقية. سجل من الترقية و:<br/><div class="tool_assignmentupgrade_upgradelog">{$a->log}</div>';
$string['upgradeassignmentsuccess'] = 'النتيجة: ترقية ناجحة';
$string['upgradeassignmentsummary'] = 'ترقية التكليف:{$a->name} (المقرر الدراسي:{$a->shortname})';
$string['upgradeprogress'] = 'ترقية التكاليف الـ{$a->current}  من {$a->total}';
$string['upgradeselected'] = 'ترقية تكاليف محددة';
$string['upgradeselectedcount'] = 'ترقية التكاليف المُحدَّدة الـ{$a}';
$string['upgradesingle'] = 'ترقية التكليف المُختار';
$string['viewcourse'] = 'عرض المقررات الدراسية التي تحتوي على تكاليف مُحوَّلة';
