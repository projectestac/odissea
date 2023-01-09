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
 * Strings for component 'bim', language 'ar', version '3.11'.
 *
 * @package     bim
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allocation_form_post_title'] = 'العنوان:';
$string['bim_configuration_values'] = 'القيم الحالية';
$string['bim_continue'] = '<p align="center">(<a href="{$a}">متابعة</a>)</p>';
$string['bim_find_none_description'] = '<p>تعذر العثور على أي طلاب تتضمن أسماؤهم، أسماء المستخدم لهم، عناوين بريدهم الالكتروني  <blockquote><strong>{$a}</strong></blockquote>يرجى محاولة البحث بشكل آخر. </p>';
$string['bim_find_student_details_heading'] = 'تفاصيل الطالب';
$string['bim_find_too_many'] = '<p>بحثك عن <blockquote><strong>{$a->search}</strong></blockquote>يطابق {$a->count} من الطلاب. هذا عدد كبير جدًا (من وجهة نظر موارد النظام) ليتم عرضهم. يرجى تضييق نطاق البحث عند المحاولة مجددًا.</p>';
$string['bim_find_x_description'] = '<p>بحثك عن <blockquote><strong>{$a->search}</strong></blockquote>يطابق {$a->count} من الطلاب. قائمة بهؤلاء تظهر أدناه.</p><p>لقد بحثت عن:</p>';
$string['bim_mark_cancel_description'] = '<p>تجري إعادة التوجيه رجوعاً لإظهار تفاصيل المنشور.</p>';
$string['bim_mark_unallocated'] = '<li>المنشور لم يتم تعيينه كإجابة.</li>';
$string['bim_marker_answers'] = 'عدد الإجابات الفعلية / عدد الإجابات المطلوبة';
$string['bim_marker_student'] = 'الطالب';
$string['bim_please_register_heading'] = 'لطفاً، قم بتسجيل مدونك';
$string['bim_qform_stats'] = '<p>إجابات الطالب {$a->help}: {$a->stats}</p>';
$string['bim_qform_title'] = 'العنوان:';
$string['bim_qform_title_help'] = 'العنوان {$a}:';
$string['bim_questions_error_changing_title'] = 'خطأ عند تحديث قاعدة البيانات';
$string['bim_questions_nochanges'] = '<p>لم يتم إجراء أي تغييرات.</p>';
$string['bim_register'] = 'قم بتسجيل مدونك';
$string['bim_register_feed'] = 'أتسمح بالتسجيل؟';
$string['bim_register_no_retrieve_description'] = '<p>تعذر الوصول إلى عنوان الرابط الذي أعطيته <blockquote><strong>{$a->url}</strong></blockquote>كان الخطأ هو <blockquote><strong>{$a->error}</strong></blockquote>';
$string['bim_register_timeout_heading'] = 'انتهت مهلة الوقت خلال محاولة استرداد عنوان الرابط';
$string['bim_release_manage_any'] = 'مع أي منشورات.</p>';
$string['bim_release_manage_criteria'] = 'مع المنشورات المطابقة لهذه المعايير:</p><ul>';
$string['bim_table_live_blog'] = 'مدونة الطالب';
$string['bim_table_name'] = 'الاسم';
$string['bim_table_questions'] = 'الأسئلة';
$string['bim_tabs_details'] = 'طلابك';
$string['bim_tabs_find'] = 'إبحث عن الطالب';
$string['eventdetailsviewed'] = 'تفاصيل BIM للطالب تمت معاينتها';
$string['eventmarkerallocationstarted'] = 'تعيين مصحح تم بدؤه';
$string['eventmarkerallocationupdated'] = 'تعيين مصحح تم تحديثه';
$string['eventmarkingassessed'] = 'تصحيح تم تقييمه';
$string['eventmarkingstarted'] = 'تصحيح تم بدؤه';
$string['eventmarkingupdated'] = 'حالة تصحيح تم تحديثها';
$string['eventmarkingviewed'] = 'حالة تصحيح تمت معاينتها';
$string['eventopmlcreated'] = 'ماف OPML تم إنشاؤه';
$string['eventregistrationcreated'] = 'تسجيل تم إنشاؤه';
$string['eventregistrationstarted'] = 'تسجيل تم بدؤه';
$string['eventregistrationupdated'] = 'تسجيل تم تحديثه';
$string['eventregistrationviewed'] = 'تسجيل تمت معاينته';
$string['eventstudentlistviewed'] = 'قائمة طلاب تمت معاينتها';
$string['eventstudentsearched'] = 'الطالب المبحوث عنه';
$string['eventstudentsearchstarted'] = 'البحث عن الطالب تم بدؤه';
$string['eventstudentupdated'] = 'تصحيحات/منشورات الطلاب تم تحديثها';
$string['eventstudentviewed'] = 'تصحيحات/منشورات الطلاب تمت معاينتها';
$string['marker_allocation_heading'] = 'كل منشورات الطلاب';
$string['marking_form_student_post'] = '<strong>منشور الطالب <small>(<a href="{$a}">المنشور الأصلي</a>)</small></strong>';
$string['numAnswers'] = 'الإجابات الفعلية والمطلوبة';
$string['numReleased_help'] = 'إجاباتك يتم تأشيرها أولاً (عدد المؤشرات)، مراجعتها ومن ثم إطلاقها لك لمشاهدتها (عدد المطلقات)';
$string['pluginname'] = 'BIM';
$string['progressResult_help'] = 'يظهر إجمالي الدرجات الممنوحة إلى إجاباتك المطلقة. النتائج الخاصة بالإجابات المؤشرة غير مضمنة هنا، إذا ينبغي مراجعتها أولاً.';
$string['qform_title'] = 'عنوان السؤال';
$string['show_qs_body'] = 'الوصف';
$string['show_qs_title'] = 'العنوان';
$string['student_details_allposts_heading'] = 'كل المنشورات';
$string['student_details_details'] = '<p>عدد المنشورات المسجلة: <strong>{$a->total_posts}</strong> (يظهر ملخص لكل المنشورات في جدول <a href="#allposts">كل المنشورات</a> أدناه). </p><p>عدد الإجابات المطلوبة: <strong>{$a->total_questions}</strong></p><p>عدد الإجابات المتعرف عليها: <strong>{$a->num_answered}</strong> (إن لم يكن ذلك صحيحًا، يرجى التواصل مع معلمك).</p>';
$string['student_details_question_heading'] = 'السؤال';
$string['student_details_your_answer'] = 'إجابتك';
