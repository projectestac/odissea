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
 * Strings for component 'course', language 'ar', version '3.8'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aria:coursecategory'] = 'تصنيف المقرر';
$string['aria:courseimage'] = 'صورة المقرر';
$string['aria:coursename'] = 'اسم المقرر';
$string['aria:courseshortname'] = 'الاسم القصير للمقرر';
$string['aria:favourite'] = 'المقرر المميز بنجمة';
$string['coursealreadyfinished'] = 'لقد انتهى المقرر بالفعل';
$string['coursenotyetfinished'] = 'لم ينتهي المقرر الدراسي بعد';
$string['coursenotyetstarted'] = 'لم يبدأ المقرر بعد';
$string['coursetoolong'] = 'المقرر طويل جداً';
$string['customfield_islocked'] = 'مقفل';
$string['customfield_islocked_help'] = 'إذا تم تأمين الحقل، فسيتمكن المستخدمون الذين لديهم إمكانية تغيير الحقول المخصصة المقفلة فقط (بشكل افتراضي المستخدمون ذوو الدور الافتراضي للمدير فقط) من تغييره في إعدادات المقرر الدراسي.';
$string['customfield_notvisible'] = 'لا أحد';
$string['customfield_visibility'] = 'ظاهر لـ';
$string['customfield_visibility_help'] = 'يحدد هذا الإعداد مَن يمكنه معاينة اسم وقيمة الحقل المخصص في قائمة المقررات الدراسية أو في مرشح الحقل المخصص المتاح في لوحة التحكم.';
$string['customfield_visibletoall'] = 'الكل';
$string['customfield_visibletoteachers'] = 'المعلمون';
$string['customfieldsettings'] = 'الإعدادات الشائعة لتخصيص حقول المقررات الدراسية';
$string['errorendbeforestart'] = 'تاريخ النهاية ({$a}) يسبق تاريخ بداية المقرر';
$string['favourite'] = 'المقررات المميزة بنجمه';
$string['gradetopassnotset'] = 'لم يتم تحديد علامة النجاح لهذا المقرر الدراسي. قد يُصار إلى وضعها في مفردة التقييم للمقرر (إعداد سجل التقديرات).';
$string['noaccesssincestartinfomessage'] = 'مرحباً {$a->userfirstname}،
<p>عدد من الطلبة في {$a->coursename} لم يدخلوا إلى المساق على الإطلاق.</p>';
$string['nocourseactivity'] = 'لا يوجد نشاط كافي بين بداية ونهاية المقرر';
$string['nocourseendtime'] = 'المقرر لا يحتوي على تاريخ نهاية';
$string['nocoursesections'] = 'لا توجد أقسام بالمقرر';
$string['nocoursestudents'] = 'لا يوجد طلاب';
$string['norecentaccessesinfomessage'] = 'مرحباً {$a->userfirstname}،
<p>عدد من الطلبة في {$a->coursename} لم يدخلوا إلى المساق مؤخراً.</p>';
$string['noteachinginfomessage'] = 'مرحباً {$a->userfirstname}،
<p>هناك مساقات موعد بدئها سيحل في الأسبوع القادم، قد تم تشخيصها بأنها تفتقر إلى انضمام المعلمين أو الطلبة إليها.</p>';
$string['privacy:completionpath'] = 'إكتمال مقرر دراسي';
$string['privacy:favouritespath'] = 'معلومات المقررات المميزة بنجمة';
$string['privacy:metadata:completionsummary'] = 'يحتوي المقرر على معلومات الإكمال عن المستخدم';
$string['privacy:metadata:favouritessummary'] = 'يحتوي المقرر على معلومات تتعلق بالمقرر المميز بنجمة من قبل المستخدم.';
$string['privacy:perpage'] = 'عدد المقررات الدراسية في الصفحة الواحدة';
$string['studentsatriskincourse'] = 'الطالب في خطر في مقرر {$a}';
$string['studentsatriskinfomessage'] = 'مرحباً {$a->userfirstname}،
<p>الطلبة في المساق {$a->coursename} تم تشخيصهم بأنهم معرضون إلى خطر.</p>';
$string['target:coursecompetencies'] = 'الطلاب المعرضون لخطر عدم تحقيق الكفاءات المعينة للمقرر';
$string['target:coursecompetencies_help'] = 'يصف هذا المقصد ما إذا كان الطالب معرضاً لخطر عدم تحقيق الكفاءات المعينة للمقرر. يعتبر هذا المقصد أن جميع الكفاءات المعينة للمقرر يجب أن تتحقق بحلول نهاية المقرر الدراسي.';
$string['target:coursecompletion'] = 'الطلاب المعرضون لخطر عدم استيفاء شروط اكمال المقرر';
$string['target:coursecompletion_help'] = 'يصف هذا المقصد ما إذا كان الطالب يعتبر معرضاً لخطر عدم استيفاء شروط إكمال المقرر الدراسي.';
$string['target:coursedropout'] = 'الطلاب المعرضون لخطر التسرب';
$string['target:coursedropout_help'] = 'يصف هذا المقصد ما إذا كان الطالب يعتبر معرضاً لخطر التسرب من الدراسة.';
$string['target:coursegradetopass'] = 'الطلاب المعرضون لخطر عدم تحقيق الحد الأدنى من الدرجة لاجتياز المقرر الدراسي';
$string['target:coursegradetopass_help'] = 'يصف هذا الهدف ما إذا كان الطالب معرضًا لخطر عدم تحقيق الحد الأدنى من الدرجة لاجتياز المقرر.';
$string['target:noaccesssincecoursestart'] = 'الطلبة الذين لم يدخلوا إلى المقرر الدراسي بعد';
$string['target:noaccesssincecoursestart_help'] = 'هذا المقصد يصف الطلاب الذين لم يدخلوا أبداً إلى مقرر دراسي ما رغم انضمامهم إليه.';
$string['target:noaccesssincecoursestartinfo'] = 'الطلاب الآتية أسماؤهم جرى ضمهم إلى مقرر دراسي بدأ فعلياً، ولكنهم لم يدخلوا إليه أبداً.';
$string['target:norecentaccesses'] = 'الطلاب الذين لم يدخلوا إلى المقرر الدراسي مؤخراً';
$string['target:norecentaccesses_help'] = 'هذا المقصد يحدد الطلاب الذين لم يدخلوا إلى المقرر الدراسي رغم انضمامهم إليه خلال فترة التحليل المقررة (الشهر الماضي إفتراضياً).';
$string['target:norecentaccessesinfo'] = 'الطلاب الآتية أسماؤهم لم يدخلوا إلى مقرراتهم رغم انضمامهم إليها خلال فترة التحليل المقررة (الشهر الماضي إفتراضياً).';
$string['target:noteachingactivity'] = 'المقررات الدراسية المعرضة إلى خطر أن لا تبدأ';
$string['target:noteachingactivity_help'] = 'يصف هذا المقصد ما إذا كانت المقررات الدراسية المقرر لها أن تبدأ في الأسبوع القادم سيكون لها نشاط تعليمي.';
$string['target:noteachingactivityinfo'] = 'المقررات الدراسية الآتية المفترض بها أن تبدأ خلال الأيام القادمة لكنها معرضة إلى خطر أن لا تبدأ لأنها تفتقر إلى انضمام المعلمين أو الطلبة إليها.';
$string['targetlabelstudentcompetenciesno'] = 'الطالب الذي من المحتمل أن يحقق الكفاءات المخصصة للمقرر';
$string['targetlabelstudentcompetenciesyes'] = 'طالب المعرض إلى خطر عدم تحقيق الكفاءات المخصصة للمقرر';
$string['targetlabelstudentcompletionno'] = 'الطالب الذي من المحتمل أن يستوفي شروط إكمال المادة';
$string['targetlabelstudentcompletionyes'] = 'طالب في خطر عدم استيفاء شروط إكمال المقرر الدراسي';
$string['targetlabelstudentdropoutno'] = 'ليس في خطر';
$string['targetlabelstudentdropoutyes'] = 'طالب معرض للفصل';
$string['targetlabelstudentgradetopassno'] = 'الطالب الذي من المرجح أن يحقق الحد الأدنى من الدرجة لاجتياز المقرر.';
$string['targetlabelstudentgradetopassyes'] = 'طالب في خطر عدم استيفاء الحد الأدنى من الدرجة لاجتياز المقرر.';
$string['targetlabelteachingno'] = 'المقررات الدراسية المعرضة إلى خطر أن لا تبدأ';
$string['targetlabelteachingyes'] = 'المستخدمون الذين لديهم صلاحيات التدريس الذين يستطيعون الوصول إلى المقرر الدراسي';
