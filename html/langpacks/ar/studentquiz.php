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
 * Strings for component 'studentquiz', language 'ar', version '3.11'.
 *
 * @package     studentquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['api_state_change_success_content'] = 'تم تغيير وضع/حالة إظهار السؤال بنجاح';
$string['creator_anonym_fullname'] = 'إخفاء هوية الطالب';
$string['emailcommentdeletedbody'] = 'عزيزي {$a->recepientname}،

التعليق على \'{$a->commenttime}\' لسؤالك \'{$a->questionname}\' في نشاط اختبار الطالب \'{$a->modulename}\' في المساق \'{$a->coursename}\' قد تم حذفه من قبل \'{$a->actorname}\' عند \'{$a->timestamp}\'.

التعليق كان: \'{$a->commenttext}\'

يمكنك مراجعة هذا السؤال من خلال: {$a->questionurl}.';
$string['emailcommentdeletedsmall'] = 'التعليق على سؤالك {$a->questionname} قد تم حذفه من قبل {$a->actorname}.';
$string['emailminecommentdeletedbody'] = 'عزيزي {$a->recepientname}،

تعليقك على \'{$a->commenttime}\' للسؤال \'{$a->questionname}\' في نشاط اختبار الطالب \'{$a->modulename}\' في المساق \'{$a->coursename}\' قد تم حذفه من قبل \'{$a->actorname}\' عند \'{$a->timestamp}\'.

التعليق كان: \'{$a->commenttext}\'

يمكنك مراجعة هذا السؤال من خلال: {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = 'تعليقك على السؤال {$a->questionname} قد تم حذفه من قبل {$a->actorname}.';
$string['filter_advanced_element'] = '{$a} (عنصر متقدم)';
$string['filter_comment_label_sort_by'] = 'الفرز حسب:';
$string['filter_comment_label_sort_toggle'] = 'الفرز حسب {$a->field} {$a->type}';
$string['filter_label_question'] = 'عنوان السؤال';
$string['filter_label_question_creation_item'] = '{$a->creationtext} {$a->rowtext} {$a->inputtext}';
$string['filter_label_question_creation_item_inputtext'] = '{$a->inputtext} {$a->inputtype}';
$string['filter_label_questiontext'] = 'محتوى السؤال';
$string['lastattempt_right'] = '✓';
$string['lastattempt_right_label'] = 'أخر محاولة صحيحة';
$string['pagesize'] = 'حجم الصفحة:';
$string['please_enrole_message'] = 'رجاءً، انضم إلى هذا المساق لمشاهدة تقدمك الشخصي';
$string['privacy:metadata:studentquiz_attempt:categoryid'] = 'مُعرَّف الصنف';
$string['privacy:metadata:studentquiz_attempt:questionusageid'] = 'مُعرَّف استعمال السؤال';
$string['privacy:metadata:studentquiz_attempt:userid'] = 'مُعرَّف المستخدم';
$string['privacy:metadata:studentquiz_comment_history:content'] = 'محتوى ماضي التعليق';
$string['privacy:metadata:studentquiz_notification:content'] = 'محتوى الإشعار';
$string['privacy:metadata:studentquiz_notification:recipientid'] = 'مُعرَّف المستلم';
$string['privacy:metadata:studentquiz_notification:status'] = 'حالة الإشعار';
$string['privacy:metadata:studentquiz_progress'] = 'يخزن معلومات التقدم للطالب مع هذا السؤال';
$string['privacy:metadata:studentquiz_progress:attempts'] = 'عدد محاولات الإجابة على هذا السؤال';
$string['privacy:metadata:studentquiz_progress:correctattempts'] = 'عدد الإجابات الصحيحة';
$string['privacy:metadata:studentquiz_progress:questionid'] = 'مُعرَّف السؤال';
$string['report_comment_condition3'] = 'يضم محتوى فاحش مثل المواد الإباحية';
$string['report_comment_emailpreface'] = 'تم الإبلاغ عن التعليق من قبل {$a->fullname} ({$a->username}،
{$a->email}).';
$string['reportquiz_admin_title'] = 'إحصائيات الطالب';
$string['reportquiz_stats_all_last_attempt_correct'] = 'المتوسط المجتمعي لآخر الإجابات الصحيحة';
$string['reportquiz_stats_all_last_attempt_incorrect'] = 'المتوسط المجتمعي لآخر الإجابات الخاطئة';
$string['reportquiz_stats_all_percentage_correct_answers'] = 'النسبة المئوية المجتمعية للإجابات الصحيحة';
$string['reportquiz_stats_all_percentage_correct_answers_help'] = 'مجموع الإجابات الصحيحة / مجموع كل الإجابات.';
$string['reportquiz_stats_all_question_attempts_correct'] = 'المتوسط المجتمعي للإجابات الصحيحة';
$string['reportquiz_stats_all_question_attempts_incorrect'] = 'المتوسط المجتمعي للإجابات الخاطئة';
$string['reportquiz_stats_all_rates_average'] = 'متوسط التقييمات لكل الأسئلة';
$string['reportquiz_stats_own_last_attempt_correct'] = 'عدد إجاباتك الصحيحة الأخيرة';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'عدد إجاباتك الخاطئة الأخيرة';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'نسبة إجاباتك الصحيحة';
$string['reportquiz_stats_own_progress'] = 'التقدم الشخصي';
$string['reportquiz_stats_own_question_attempts_correct'] = 'إجمالي إجاباتك الصحيحة';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'إجمالي إجاباتك الخاطئة';
$string['reportquiz_stats_own_questions_answered'] = 'إجمالي إجاباتك';
$string['reportquiz_stats_title'] = 'الإحصائيات';
$string['reportquiz_total_attempt'] = 'وقت تشغيل المستخدم للاختبار';
$string['reportquiz_total_questions_right'] = 'إجمالي الإجابات الصحيحة';
$string['reportrank_table_column_correctanswers'] = 'الإجابات الصحيحة';
$string['reportrank_table_column_description'] = 'الوصف';
$string['reportrank_table_column_incorrectanswers'] = 'الإجابات الخاطئة';
$string['reportrank_table_column_progress'] = 'التقدم الشخصي';
$string['reportrank_table_column_quantifier_name'] = 'الاسم';
$string['reportrank_table_column_value'] = 'القيمة';
$string['reportrank_table_column_yourstatus'] = 'الإحصائيات الشخصية';
$string['reportrank_table_title_for_manager'] = 'تسلسل الطالب';
$string['settings_anonymous_help'] = 'لا يمكن للطلاب مشاهدة أسماء بعضهم البعض.';
$string['settings_email_digest_first_day'] = 'في أول أيام الأسبوع؟';
$string['settings_lastcorrectanswerquantifier'] = 'معامل الإجابات الصحيحة الأخيرة';
$string['settings_lastcorrectanswerquantifier_help'] = 'النقاط لكل إجابة صحيحة في المحاولة الأخيرة';
$string['settings_lastcorrectanswerquantifier_label'] = 'النقاط للإجابات الصحيحة الأخيرة';
$string['settings_section_description_default'] = 'هذه تمثل القيم الافتراضية عند إنشاء نشاط اختبار الطالب جديد.';
$string['studentquiz:addinstance'] = 'إضافة عيِّنة جديدة من اختبار الطالب';
$string['studentquiz:unhideanonymous'] = 'يمكنهم مشاهدة الأسماء الحقيقية حتى مع تفعيل إخفاء الهويات';
$string['studentquizname_help'] = 'اسم نشاط اختبار الطالب هذا';
$string['tags'] = 'الوسوم';
