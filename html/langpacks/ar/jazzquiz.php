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
 * Strings for component 'jazzquiz', language 'ar', version '4.5'.
 *
 * @package     jazzquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_students_answered'] = '<b>{$a}</b> الطلبة أجابوا سؤالاً واحداً على الأقل.';
$string['a_students_joined_quiz'] = '<b>{$a}</b> من الطلبة انضموا إلى الاختبار.';
$string['add_question'] = 'إضافة سؤال';
$string['add_to_quiz'] = 'إضافة إلى الاختبار';
$string['anonymous_answers'] = 'عدم شخصنة الإجابات (يمكن مشاهدة الحضور)';
$string['anonymous_answers_info'] = 'الإجابات غير مشخصنة في هذه الجلسة. حضورك لا زال مسجلاً.';
$string['answer'] = 'الإجابة';
$string['create_new_question'] = 'إنشاء سؤال جديد';
$string['default_question_time'] = 'الوقت الافتراضي للسؤال';
$string['delete_question'] = 'حذف السؤال {$a}';
$string['edit_page_open_session_error'] = 'لا يمكنك تحرير الاختبار عندما تكون هناك جلسة مفتوحة.';
$string['edit_question'] = 'تحرير السؤال';
$string['event_attempt_started'] = 'محاولة تم بدؤها';
$string['event_question_answered'] = 'سؤال محاولة تمت إجابته';
$string['failed_to_end_question'] = 'فشل في إنهاء السؤال.';
$string['fully_anonymous_info'] = 'كل من الإجابات والحضور غير مشخصنان بالكامل في هذه الجلسة.';
$string['instructions_for_instructor'] = '<h3>ترجى قراءة التعليمات بإمعان:</h3>
    <p>هناك مفاتيح ساخنة متاحة، يمكن استعمالها عندما لا يكون حقل الإدخال حائزًا على التركيز.</p>
    <table>
        <tr>
               <th>المسيطر</th>
               <th>المفتاح الساخن</th>
               <th>الوصف</th>
        </tr>
        <tr>
            <td>
                <i class="fa fa-repeat"></i> Re-poll
            </td>
            <td>r</td>
            <td>
                يسمح للمرشد بإعادة طرح السؤال الذي تمت إجابته توًا.
                هذا مشابه للبدء بالسؤال من <i class="fa fa-bars"></i> قائمة القفز المنسدلة.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bar-chart"></i> Vote
            </td>
            <td>v</td>
            <td>
                 السماح للطلاب بالتصويت على إجاباتهم.
                 يمكن للمرشد النقر على إجابة للتبديل ما بين ما إذا كان ينبغي تضمينها في التصويت أم لا.
                 النقر على شريط الإجابة سيبدأ دمجًا من تلك الإجابة.
                 لاحظ بأن ذلك الشريط سيستحوذ على الشريط الذي تنقر عليه لاحقًا.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-edit"></i> إرتجل
            </td>
            <td>i</td>
            <td>
                يظهر الأسئلة المعدة للاتجال. أكتب الأسئلة على السبورة وأطلب الإدخال من بين تلك الأسئلة.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars"></i> القفز
            </td>
            <td>j</td>
            <td>
                يظهر قائمة بكل الأسئلة المعدة للاختبار.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-forward"></i> التالي
            </td>
            <td>n</td>
            <td>
                الاستمرار مع السؤال التالي من قائمة الأسئلة المعدة للاختبار.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-random"></i> عشوائي
            </td>
            <td>m</td>
            <td>
                البدء بسؤال عشوائي من قائمة الأسئلة المعدة للاختبار.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-close"></i> إنهاء
            </td>
            <td>e</td>
            <td>
                إنهاء السؤال الحالي.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-expand"></i> ملء الشاشة
            </td>
            <td>f</td>
            <td>
                إظهار النتائج في ملء الشاشة. لن تظهر الإجابات في أثناء السؤال، لذلك يمكنك المتابعة بهذه الوتيرة طيلة الجلسة.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> الإجابة
            </td>
            <td>a</td>
            <td>
                يعطي المرشد معاينة للسؤال مع تأشير على الإجابة الصائبة.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> الإجابات
            </td>
            <td>t (toggle)</td>
            <td>
                إظهار إجابات الطلاب أو إخفائها.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-window-close"></i> الخروج
            </td>
            <td></td>
            <td>
                الخروج من جلسة الاختبار الحالية.
            </td>
        </tr>
    </table>';
$string['invalid_question_time'] = 'وقت السؤال ينبغي أن يكون رقماً صحيحاً من 0 فأكثر';
$string['jazzquiz:addinstance'] = 'إضافة عينة من jazzquiz';
$string['jazzquiz:attempt'] = 'محاولة jazzquiz';
$string['jazzquiz:control'] = 'التحكم بـ JazzQuiz. (عادة للمرشدين فقط)';
$string['jazzquiz:editquestions'] = 'تحرير الأسئلة في JazzQuiz.';
$string['jazzquiz:seeresponses'] = 'معاينة استجابات الطلبة الآخرين لوضع التقديرات لها';
$string['jazzquizsettings'] = 'إعدادات JazzQuiz العامة';
$string['join_quiz'] = 'الانضمام إلى الاختبار';
$string['join_quiz_instructions'] = 'أنقر أدناه للانضمام إلى الاختبار';
$string['modulenameplural'] = 'إختبارات جاز';
$string['nonanonymous_session_info'] = 'هذه الجلسة ليست غير مشخصنة. حضورك وإجاباتك كلاهما مسجلان.';
$string['pluginadministration'] = 'إدارة إختبار جاز';
$string['pluginname'] = 'إختبار جاز';
$string['privacy:metadata:jazzquiz_attempts'] = 'تفاصيل عن محاولة الاختبار لجلسة إختبار جاز';
$string['privacy:metadata:jazzquiz_attempts:responded'] = 'فيما إذا تمت إجابة آخر سؤال تم طرحه أم لا';
$string['privacy:metadata:jazzquiz_attempts:timefinish'] = 'وقت إنهاء آخر سؤال في المحاولة';
$string['privacy:metadata:jazzquiz_attempts:timemodified'] = 'وقت تعديل آخر سؤال في المحاولة';
$string['privacy:metadata:jazzquiz_attempts:timestart'] = 'وقت بدء آخر سؤال في المحاولة';
$string['privacy:metadata:jazzquiz_attempts:userid'] = 'المستخدم الذي أجرى المحاولة';
$string['question'] = 'السؤال';
$string['question_move_down'] = 'أنقل السؤال {$a} إلى الأسفل';
$string['question_move_up'] = 'أنقل السؤال {$a} إلى الأعلى';
$string['question_time'] = 'وقت السؤال';
$string['question_time_help'] = 'وقت السؤال بالثواني';
$string['question_will_end_in_x_seconds'] = 'السؤال سينتهي خلال {$a} من الثواني';
$string['question_will_start_in_x_seconds'] = 'السؤال سيبدأ بعد {$a} من الثواني';
$string['question_will_start_now'] = 'السؤال سيبدأ الآن';
$string['questions'] = 'الأسئلة';
$string['quiz_not_running'] = '<p>إنتظر قيام المعلم ببدء الاختبار.</p><p>استعمل زر إعادة التحميل للتحقق من بدئه.</p>';
$string['save_question'] = 'حفظ السؤال';
$string['session_name_required'] = 'اسم الجولة مطلوب حتماً';
$string['short_answer'] = 'إجابة قصيرة';
$string['short_math_answer'] = 'إجابة رياضية قصيرة';
$string['startquiz'] = 'بدء الاختبار';
$string['student'] = 'الطالب';
$string['wait_for_question_time'] = 'وقت إنتظار السؤال';
$string['wait_for_question_time_help'] = 'وقت إنتظار بدء السؤال';
$string['x_seconds_left'] = 'بقيت {$a}';
