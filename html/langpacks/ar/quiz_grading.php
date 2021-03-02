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
 * Strings for component 'quiz_grading', language 'ar', version '3.8'.
 *
 * @package     quiz_grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alldoneredirecting'] = 'تم تقييم كل المحاولات المحددة. العودة إلى قائمة الأسئلة.';
$string['alreadygraded'] = 'تم تقييمه';
$string['alsoshowautomaticallygraded'] = 'أيضاً أظهر الأسئلة التي تقيّم تلقائياً';
$string['attemptstograde'] = 'محاولات للتقييم';
$string['automaticallygraded'] = 'مقيّم آلياً';
$string['backtothelistofquestions'] = 'العودة إلى قائمة الأسئلة.';
$string['bydate'] = 'بالتاريخ';
$string['bystudentfirstname'] = 'بالاسم الأول للطالب';
$string['bystudentidnumber'] = 'برقم الطالب';
$string['bystudentlastname'] = 'بالاسم الأخير للطالب';
$string['cannotgradethisattempt'] = 'لا يمكن تقييم هذه المحاولة.';
$string['cannotloadquestioninfo'] = 'غير قادر على تحميل نوع السؤال من معلومات الأسئلة';
$string['changeoptions'] = 'غيّر الخيارات';
$string['essayonly'] = 'الأسئلة التالية سيتم تقييمها يدوياً';
$string['grade'] = 'قيّم';
$string['gradeall'] = 'قيّم الكل';
$string['gradeattemptsall'] = 'كل ({$a})';
$string['gradeattemptsautograded'] = 'تلك التي تم تقييمها آلياً ({$a})';
$string['gradeattemptsmanuallygraded'] = 'تلك التي تم تقييمها يدوياً ({$a})';
$string['gradeattemptsneedsgrading'] = 'تلك التي تحتاج إلى تقييم ({$a})';
$string['graded'] = '(مقيم)';
$string['gradenextungraded'] = 'قيم التالي {$a} من المحاولات التي لم تقيّم';
$string['gradeungraded'] = 'قيم كل {$a} من المحاولات التي لم تقيم';
$string['grading'] = 'تقييم يدوي';
$string['grading:componentname'] = 'تقرير التقييم اليدوي';
$string['grading:viewidnumber'] = 'انظر رقم الطالب أثناء التقييم';
$string['grading:viewstudentnames'] = 'شاهد أسماء الطلاب أثناء التقييم';
$string['gradingall'] = 'كل {$a} محاولاته في هذا السؤال.';
$string['gradingattempt'] = 'رقم المحاولة {$a->attempt} لــ {$a->fullname}';
$string['gradingattemptsxtoyofz'] = 'محاولات التقييم {$a->from}  لــ {$a->to}  من {$a->of}';
$string['gradingattemptwithidnumber'] = 'عدد المحاولات {$a->attempt}  لـ {$a->fullname} ({$a->idnumber})';
$string['gradingnextungraded'] = 'بعد {$a}  محاولات لم تقيم';
$string['gradingnotallowed'] = 'لم يكن لديك إذن في التقييم يدويًا في هذا الاختبار';
$string['gradingquestionx'] = 'تقييم السؤال  {$a->number}: {$a->questionname}';
$string['gradingreport'] = 'تقرير التقييم اليدوي';
$string['gradingungraded'] = '{$a}  محاولات لم تقيم';
$string['gradinguser'] = 'محاولات لـ  {$a}';
$string['hideautomaticallygraded'] = 'أخف الأسئلة التي تم تقييمها آلياً';
$string['inprogress'] = 'في تقدم';
$string['invalidattemptid'] = 'لا توجد محاولات للرقم';
$string['invalidquestionid'] = 'سؤال التقييم برقم {$a} غير موجود';
$string['noquestionsfound'] = 'لا يوجد سؤال يقيّم يدوياً';
$string['nothingfound'] = 'لا شيء لإظهاره';
$string['options'] = 'الخيارات';
$string['orderattempts'] = 'ترتيب المحاولات';
$string['pluginname'] = 'التقييم اليدوي';
$string['privacy:metadata'] = 'لا يخزن مكون  Quiz Manual grading  أي بيانات شخصية. يوفر واجهة للمستخدمين لتخزين البيانات دون تخزين أي بيانات في حد ذاتها.';
$string['qno'] = 'السؤال #';
$string['questionname'] = 'اسم السؤال';
$string['questionsperpage'] = 'أسئلة لكل صفحة';
$string['questionsthatneedgrading'] = 'أسئلة تحتاج إلى تقييم';
$string['questiontitle'] = 'سؤال {$a->number} : "{$a->name}" ({$a->openspan}{$a->gradedattempts}{$a->closespan} / {$a->totalattempts} attempts {$a->openspan}graded{$a->closespan}).';
$string['randomly'] = 'عشوائياً';
$string['saveandnext'] = 'احفظ وانتقل للصفحة التالية';
$string['showstudentnames'] = 'أظهر اسم الطالب';
$string['tograde'] = 'للتقييم';
$string['total'] = 'الكل';
$string['unknownquestion'] = 'سؤال غير معروف';
$string['updategrade'] = 'تحديث الدرجات';
