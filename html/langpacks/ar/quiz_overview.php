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
 * Strings for component 'quiz_overview', language 'ar', version '4.4'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'أظهر جميع المحاولات';
$string['allattemptscontributetograde'] = 'كل المحاولات ساهمت في الدرجة النهائية للمستخدم.';
$string['allstudents'] = 'أظهر الكل {$a}';
$string['attemptsonly'] = 'إظهار {$a} مع المحاولات فقط';
$string['attemptsprepage'] = 'المحاولات المعروضة لكل صفحة';
$string['deleteselected'] = 'احذف المحاولات المحددة';
$string['done'] = 'تم';
$string['err_failedtodeleteregrades'] = 'فشل في حذف درجات محاولة محسوبة';
$string['err_failedtorecalculateattemptgrades'] = 'فشل في إعادة حساب درجات المحاولة';
$string['highlightinggraded'] = 'محاولة المستخدم التي تسهم في التقدير النهائي يتم تمييزها.';
$string['needed'] = 'الحاجة';
$string['noattemptsonly'] = 'إظهار / تنزيل {$a} فقط الذين بلا محاولات';
$string['noattemptstoregrade'] = 'لا توجد محاولات تحتاج إعادة تقييم';
$string['nogradepermission'] = 'ليست لديك صلاحية تقييم هذا الاختبار.';
$string['onlyoneattemptallowed'] = 'يُسمح لكل مستخدم بمحاولة واحدة في هذا الاختبار.';
$string['optallattempts'] = 'كل المحاولات';
$string['optallstudents'] = 'كل {$a} حاول أو لم يحاول في الاختبار';
$string['optattemptsonly'] = '{$a} حاول في الاختبار';
$string['optnoattemptsonly'] = '{$a} الذين لم يحاولوا في الاختبار';
$string['optonlyregradedattempts'] = 'التي أعيد تقييمها / المؤشرة بأنها تتطلب إعادة تقييم';
$string['overview'] = 'الدرجات';
$string['overviewdownload'] = 'معاينة عامة للتنزيل';
$string['overviewfilename'] = 'درجات';
$string['overviewreport'] = 'تقرير الدرجات';
$string['overviewreportgraph'] = 'عدد الطلاب الكلي الذي حقق نطاقات الدرجة';
$string['overviewreportgraphgroup'] = 'عدد الطلاب في المجموعة \'{$a}\' الذين حققوا درجة في النطاقات';
$string['pagesize'] = 'حجم الصفحة';
$string['pluginname'] = 'التقديرات';
$string['preferencespage'] = 'التفضيلات فقط لهذه الصفحة';
$string['preferencessave'] = 'اظهر التقرير';
$string['preferencesuser'] = 'التفضيلات الخاصة بك لهذا التقرير';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'ما إذا يتم إظهار علامات لكل خانة سؤال.';
$string['privacy:preference:slotmarks:no'] = 'لا تظهر العلامات بجانب خانة السؤال.';
$string['privacy:preference:slotmarks:yes'] = 'تظهر العلامات بجانب خانة السؤال.';
$string['regrade'] = 'إعادة التقييم';
$string['regradeall'] = 'إعادة تقييم الكل';
$string['regradealldry'] = 'إعادة تقدير الدرجات بالكامل';
$string['regradealldrydo'] = 'إعادة تقييم المحاولات المؤشرة بأنها بحاجة لإعادة التقييم ({$a})';
$string['regradealldrydogroup'] = 'إعادة تقييم المحاولات المؤشرة بأنها بحاجة لإعادة التقييم ({$a->countregradeneeded}) في المجموعة \'{$a->groupname}\'';
$string['regradealldrygroup'] = 'إعادة تقدير الدرجات بالكامل للمجموعة \'{$a->groupname}\\';
$string['regradeallgroup'] = 'إعادة تقييم الدرجات للمجموعة بالكامل \'{$a->groupname}\\';
$string['regradecomplete'] = 'إعادة التقييم إكتملت';
$string['regradedsuccessfullyxofy'] = 'إعادة التقييم المنتهية ({$a->done}/{$a->count})';
$string['regradeheader'] = 'إعادة التقييم';
$string['regradeselected'] = 'إعادة التقييم للمحاولات المحددة';
$string['regradingattemptissue'] = 'الخانة {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'إعادة التقييم للمحاولات ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'تعذرت إعادة تقييم الأسئلة الآتية في المحاولة {$a->attemptnum} من قبل {$a->name} (المُعرَّف {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'تجري إعادة التقييم ({$a->done}/{$a->count}) - المحاولة {$a->attemptnum} من قِبل {$a->name} (المُعرَّف {$a->attemptid})';
$string['show'] = 'أظهر / حمّل';
$string['showattempts'] = 'فقط أظهر / حمّل المحاولات';
$string['showdetailedmarks'] = 'درجات كل سؤال';
$string['showinggraded'] = 'إظهار فقط المحاولات المقيّمة للمستخدم.';
$string['showinggradedandungraded'] = 'إظهار المحاولات المقيّمة وغير المقيّمة لكل مستخدم. المحاولة الواحدة لكل مستخدم تم تقييمها مميزة عن ما سواها. طريقة منح التقديرات لهذا الاختبار هي {$a}.';
$string['studentingroup'] = '\'{$a->coursestudent}\'  في المجموعة \'{$a->groupname}\\';
$string['studentingrouplong'] = '\'{$a->coursestudent}\' في هذه المجموعة';
