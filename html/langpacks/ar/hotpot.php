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
 * Strings for component 'hotpot', language 'ar', version '3.8'.
 *
 * @package     hotpot
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = 'لم يتم الاجابة علية';
$string['addquizchain'] = 'إضافة سلسلة اختبار';
$string['addquizchain_help'] = 'هل ينبغي إضافة كل الاختبارات في سلسلة الاختبارات؟

**لا**
: ستتم إضافة اختبار واحد إلى المقرر الدراسي

**نعم**
: إذا كان الملف المصدري هو **ملف اختبار**، ستتم معاملته بمثابة بداية سلسلة من الاختبارات وستتم إضافة كل اختبارات السلسلة إلى المقرر الدراسي بإعدادات متطابقة. ينبغي أن يكون لكل اختبار في السلسلة رابط إلى الملف التالي في السلسلة.

إذا كان الملف المصدري هو **مجلد**، ستتم إضافة كل الاختبارات التي يمكن التعرف عليها في المجلد إلى المقرر الدراسي لتكوين سلسلة من الاختبارات مع إعدادات متطابقة.

إذا كان الملف المصدري هو **ملف وحدة**، مثل ملف مهروس البطاطا الحارة أو ملف index.html، فستتم إضافة الاختبارات المدرجة في ملف الوحدة إلى المقرر بمثابة سلسلة من الاختبارات مع إعدادات متطابقة.';
$string['allowpaste_help'] = 'عند تمكين هذا الإعداد، سيسمح للطلاب بنسخ، لصق، وسحب النص إلى مربعات إدخال النصوص.';
$string['attempts'] = 'محاولات';
$string['attemptscore'] = 'درجة المحاولة';
$string['average'] = 'المتوسط';
$string['averagescore'] = 'متوسط الدرجة';
$string['bodystylesbackground'] = 'لون وصورة الخلفية';
$string['bodystylescolor'] = 'لون النص';
$string['completed'] = 'تم';
$string['correct'] = 'صح';
$string['d_index'] = 'مؤشر التمييز';
$string['entry_title'] = 'اسم الوحدة كعنوان';
$string['event_attempt_reviewed'] = 'محاولة HotPot تمت مراجعتها';
$string['event_attempt_reviewed_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" راجع محاولة في نشاط "hotpot" ضمن وحدة المساق ذات المُعرَّف "{$a->cmid}"';
$string['event_attempt_reviewed_explanation'] = 'مستخدم ما قد راجع توًا محاولته في نشاط HotPot';
$string['event_report_viewed'] = 'تقرير HotPot تمت معاينته';
$string['event_report_viewed_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" شاهد تقريرًا للمحاولات في نشاط "hotpot" ضمن وحدة المساق ذات المُعرَّف "{$a->cmid}"';
$string['event_report_viewed_explanation'] = 'مستخدم ما قد شاهد توًا تقريرًا عن المحاولات في نشاط HotPot';
$string['exit_attemptscore'] = 'إن درجتك لتلك المحاولة كانت {$a}';
$string['exit_course_text'] = 'عودة إلى صفحة المقرر الرئيسية';
$string['exit_hotpotgrade_highest_zero'] = 'لم تحرز أعلى من {$a} لهذا النشاط بعد';
$string['feedbackformmail'] = 'نموذج المعلومات';
$string['feedbackmoodleforum'] = 'منتدى مودل';
$string['feedbackwebpage'] = 'صفحة ويب';
$string['firstattempt'] = 'المحاولة الأولى';
$string['giveup'] = 'أترك';
$string['grademethod_help'] = 'هذا الإعداد يعرف كيفية إحتساب التقدير لنشاط HotPot من تقديرات المحاولات.

**الدرجة الأعلى**
: سيتم ضبط تقدير النشاط على أعلى درجة لأي محاولة لنشاط HotPot.

**متوسط الدرجة**
: سيتم ضبط التقدير على متوسط درجات كل محاولات نشاط HotPot.

**المحاولة الأولى**
: سيتم ضبط التقدير على درجة المحاولة الأولى لنشاط HotPot.

**المحاولة الأخيرة**
: سيتم ضبط التقدير على درجة المحاولة الأخيرة لنشاط HotPot.';
$string['highestscore'] = 'الدرجة الأعلى';
$string['hotpot:view'] = 'استخدم الاختبار';
$string['ignored'] = 'تجاهل';
$string['inprogress'] = 'قيد التنفيذ';
$string['modulename'] = 'اختبار هوت بوتيتو';
$string['modulenameplural'] = 'اختبارات هوت بوتيتو';
$string['navigation_none'] = 'لا شيء';
$string['noactivity'] = 'لا يوجد نشاط';
$string['noreview'] = 'عذرًا، ليس مسموحًا لك بمعاينة تفاصيل محاولة الاختبار هذه.';
$string['noreviewbeforeclose'] = 'عذرًا، ليس مسموحًا لك بمعاينة تفاصيل محاولة الاختبار هذه حتى {$a}.';
$string['outputformat'] = 'التنسيق المخرج';
$string['outputformat_best'] = 'الأفضل';
$string['outputformat_hp_6_jquiz_html'] = 'JQuiz (v6) من html';
$string['outputformat_hp_6_jquiz_xml_v6'] = 'JQuiz (v6) من xml';
$string['outputformat_hp_6_jquiz_xml_v6_autoadvance'] = 'JQuiz (v6) من xml (تقدم تلقائي)';
$string['outputformat_hp_6_jquiz_xml_v6_exam'] = 'JQuiz (v6) من xml (إمتحان)';
$string['penalties'] = 'غرامات';
$string['pluginname'] = 'وحدة هوت بوتيتو';
$string['questionshort'] = 'س - {$a}';
$string['quizzes'] = 'الاختبارات';
$string['score'] = 'الدرجة';
$string['scoresreport'] = 'الدرجات';
$string['studentfeedback'] = 'معلومات للطالب';
$string['textsourcefilename'] = 'استخدم أسم الملف';
$string['textsourcefilepath'] = 'أستخدم مسار الملف';
$string['textsourcequiz'] = 'الجلب من الاختبار';
$string['textsourcespecific'] = 'نص محدد';
$string['timedout'] = 'أنتهى الوقت';
$string['title'] = 'العنوان';
$string['weighting'] = 'وزن';
$string['wrong'] = 'خطاء';
