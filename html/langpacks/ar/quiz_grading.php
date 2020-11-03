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
 * Strings for component 'quiz_grading', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   quiz_grading
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alldoneredirecting'] = 'تم تصحيح جميع المحاولات المُحدَّدة. عودة إلى قائمة الأسئلة.';
$string['alreadygraded'] = 'مقيَّم سلفاً';
$string['alsoshowautomaticallygraded'] = 'أيضاً أظهر الأسئلة التي تم تقييمها تلقائياً';
$string['attemptstograde'] = 'المحاولات التي تحتاج للتصحيح';
$string['automaticallygraded'] = 'مقيّم آلياً';
$string['backtothelistofquestions'] = 'عودة إلى قائمة الأسئلة';
$string['bydate'] = 'حسب التاريخ';
$string['bystudentfirstname'] = 'حسب الاسم الأول للطالب';
$string['bystudentidnumber'] = 'حسب مُعرَّف الطالب';
$string['bystudentlastname'] = 'حسب اسم الطالب الأخير';
$string['cannotgradethisattempt'] = 'لا يمكن تصحيح هذه المحاولة';
$string['cannotloadquestioninfo'] = 'غير قادر على تحميل نوع السؤال من معلومات الأسئلة';
$string['changeoptions'] = 'تغيير الخيارات';
$string['essayonly'] = 'التصحيح اليدوي حتى الآن ممكن فقط للأسئلة المقاليه';
$string['grade'] = 'العلامة';
$string['gradeall'] = 'تصحيح الجميع';
$string['gradeattemptsall'] = 'الجميع ({$a})';
$string['gradeattemptsautograded'] = 'تلك التي تم تقييمها تلقائياً ({$a})';
$string['gradeattemptsmanuallygraded'] = 'تلك التي تم تقييمها يدوياً ({$a})';
$string['gradeattemptsneedsgrading'] = 'تلك التي تحتاج إلى تقييم ({$a})';
$string['graded'] = '(مقيَّم)';
$string['gradenextungraded'] = 'تقييم {$a} من المحاولات غير المقيمة الأخرى';
$string['gradeungraded'] = 'قيم كل {$a} من المحاولات التي لم تقيم';
$string['grading'] = 'منح العلامات يدوياً';
$string['gradingall'] = 'كل {$a} محاولاته في هذا السؤال.';
$string['gradingattempt'] = 'رقم المحاولة {$a->attempt} لــ {$a->fullname}';
$string['gradingattemptsxtoyofz'] = 'محاولات التقييم {$a->from}  لــ {$a->to}  من {$a->of}';
$string['gradingattemptwithidnumber'] = 'عدد المحاولات {$a->attempt}  لـ {$a->fullname} ({$a->idnumber})';
$string['grading:componentname'] = 'تقرير التقييم اليدوي';
$string['gradingnextungraded'] = 'بعد {$a}  محاولات لم تقيم';
$string['gradingnotallowed'] = 'ليست لديك صلاحية منح العلامات يدوياً في هذا الاختبار';
$string['gradingquestionx'] = 'تقييم السؤال  {$a->number}: {$a->questionname}';
$string['gradingreport'] = 'تقرير التقييم اليدوي';
$string['gradingungraded'] = '{$a}  محاولات لم تقيم';
$string['gradinguser'] = 'محاولات لـ  {$a}';
$string['grading:viewidnumber'] = 'مشاهدة مُعرَّف الطالب في أثناء التقييم';
$string['grading:viewstudentnames'] = 'مشاهدة أسماء الطلاب أثناء التقييم';
$string['hideautomaticallygraded'] = 'إخفاء الأسئلة التي تم تقييمها تلقائياً';
$string['inprogress'] = 'قيد التنفيذ';
$string['invalidattemptid'] = 'لا توجد محاولات للرقم';
$string['invalidquestionid'] = 'سؤال التقييم برقم {$a} غير موجود';
$string['noquestionsfound'] = 'لا يوجد سؤال يقيّم يدوياً';
$string['nothingfound'] = 'لا شيء لإظهاره';
$string['options'] = 'الخيارات';
$string['orderattempts'] = 'ترتيب المحاولات';
$string['pluginname'] = 'التقييم اليدوي';
$string['privacy:metadata'] = 'لا يخزن مكون  Quiz Manual grading  أي بيانات شخصية. يوفر واجهة للمستخدمين لتخزين البيانات دون تخزين أي بيانات في حد ذاتها.';
$string['qno'] = 'س #';
$string['questionname'] = 'اسم السؤال';
$string['questionsperpage'] = 'أسئلة لكل صفحة';
$string['questionsthatneedgrading'] = 'أسئلة تحتاج إلى تقييم';
$string['questiontitle'] = 'سؤال {$a->number} : "{$a->name}" ({$a->openspan}{$a->gradedattempts}{$a->closespan} / {$a->totalattempts} attempts {$a->openspan}graded{$a->closespan}).';
$string['randomly'] = 'عشوائياً';
$string['saveandnext'] = 'احفظ و انتقل للصفحة التالية';
$string['showstudentnames'] = 'أظهر اسم الطالب';
$string['tograde'] = 'للتقييم';
$string['total'] = 'الكل';
$string['unknownquestion'] = 'سؤال غير معروف';
$string['updategrade'] = 'تحديث الدرجات';
