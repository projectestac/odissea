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
 * Strings for component 'apply', language 'ar', version '4.1'.
 *
 * @package     apply
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_pagebreak'] = 'إضافة فاصل صفحات للمعتمد';
$string['apply:createprivatetemplate'] = 'إنشاء مظهر خاص';
$string['apply:createpublictemplate'] = 'إنشاء مظهر عام';
$string['apply:deletetemplate'] = 'حذ المظهر';
$string['apply:edittemplates'] = 'تحرير المظاهر';
$string['apply:viewanalysepage'] = 'معاينة صفحة التحليل بعد التسليم';
$string['back_button'] = 'رجوع';
$string['cannot_save_templ'] = 'حفظ المظاهر غير مسموح به';
$string['confirm_delete_entry'] = 'هل أنت متأكد من رغبتك في سحب هذا الإدخال؟';
$string['confirm_delete_template'] = 'هل أنت متأكد من رغبتك في حذف هذا المظهر؟';
$string['confirm_rollback_entry'] = 'هل أنت متأكد من رغبتك في سحب هذا الإدخال؟';
$string['confirm_use_template'] = 'هل أنت متأكد من رغبتك في استعمال هذا المظهر؟';
$string['creating_templates'] = 'حفظ هذه الأسئلة بمثابة مظهر جديد';
$string['date_format'] = 'عرض تنسيق التاريخ (الوقت)';
$string['date_format_help'] = 'تحديد تنسيق عرض التاريخ والوقت. القيمة الافتراضية هي %m/%d/%y %H:%M';
$string['delete_entry'] = 'إنسحاب';
$string['delete_entry_button'] = 'إنسحاب';
$string['delete_template'] = 'حذف المظهر';
$string['delete_templates'] = 'حذف المظهر...';
$string['depending_help'] = 'من الممكن إظهار العنصر المعتمد على قيمة عنصر آخر.<br />
<strong>إليك مثالاً على ذلك.</strong><br />
<ul>
<li>أولاً، قم بإنشاء عنصر ليكون هناك عنصر آخر معتمد عليه.</li>
<li>بعدها، أضف فاصل صفحات.</li>
<li>ثم أضف العناصر المعتمدة على قيمة العنصر الذي أنشأته آنفاً. إختر العنصر من القائمة المسماة "العنصر المعتمد عليه" وأكتب القيمة المطلوبة في مربع النص المسمى "القيمة المعتمد عليها".</li>
</ul>
<strong>هيكل العنصر ينبغي أن يبدو بهذا الشكل.</strong>
<ol>
<li>عنصر سؤال: هل لديك سيارة؟ ج: نعم/لا</li>
<li>فاصل صفحات للتبعية</li>
<li>عنصر سؤال: ما لون سيارتك؟<br />
(هذا العنصر يعتمد على العنصر 1 مع القيمة = نعم)</li>
<li>عنصر سؤال: لماذا لا تمتلك سيارة؟<br />
(هذا العنصر يعتمد على العنصر 1 مع القيمة = لا)</li>
<li> ... عناصر أخرى</li>
</ol>';
$string['dependvalue'] = 'القيمة المعتمدة';
$string['description'] = 'الوصف';
$string['email_user_other'] = 'قام المشرف بمعالجة تطبيقك';
$string['entry_saved_operation'] = 'لقد تمت معالجة طلبك.';
$string['export_templates'] = 'تصدير المظاهر';
$string['fixedtitle'] = 'العنوان الثابت';
$string['import_templates'] = 'استيراد المظاهر';
$string['item_name'] = 'اسم العنصر';
$string['items_are_required'] = 'الإجابات مطلوبة للعناصر المعلمة بنجمة.';
$string['messageprovider:processed'] = 'تمت معالجة العملية';
$string['multichoice_values'] = 'قيم متعدد الاختيارات';
$string['name'] = 'الاسم';
$string['name_required'] = 'الاسم مطلوب';
$string['next_page_button'] = 'الصفحة التالية';
$string['no_templates_available_yet'] = 'لا مظاهر متاحة بعد';
$string['no_title'] = 'بلا عنوان';
$string['numeric'] = 'إجابة رقمية';
$string['only_acked_accept_help'] = 'تمكين قبول الاستلام فقط. حدده عندما تكون المعالجة غير مطلوبة.';
$string['operate_submit_button'] = 'معالجة';
$string['pagebreak'] = 'فاصل صفحات للمعتمد';
$string['pagebreak_style'] = 'نمط خط فاصل الصفحات';
$string['pagebreak_style_help'] = 'نمط خط فاصل الصفحات (&lt; hr /&gt;). الافتراضي هو (1 بكسل solid). في حالة كونه فارغًا، لا يتم رسم الخط في شاشة الطباعة. لا يتم عرض خط فاصل الصفحات في شاشة التسليم وشاشة استعراض التسليم.';
$string['pagebreak_title'] = 'فاصل الصفحات للطباعة';
$string['previous_page_button'] = 'الصفحة السابقة';
$string['printpagebreak'] = 'إضافة فاصل صفحات للطباعة';
$string['responsetime'] = 'وقت الاستجابة';
$string['rollback_entry'] = 'إنسحاب';
$string['rollback_entry_button'] = 'إنسحاب';
$string['save_as_new_template'] = 'الحفظ بمثابة مظهر جديد';
$string['saving_failed_because_missing_or_false_values'] = 'فشل الحفظ بسبب قيم مفقودة أو خاطئة.';
$string['show_perpage'] = 'إظهار {$a} لكل صفحة';
$string['switch_item_to_not_required'] = 'التبديل إلى: الإجابة غير مطلوبة';
$string['switch_item_to_required'] = 'التبديل إلى: الإجابة مطلوبة';
$string['table_disp_iname_help'] = 'عرض اسم الفقرة في الجدول.';
$string['table_th_strings'] = 'عنوان كل عمود';
$string['table_th_strings_help'] = 'أعطِ وصفًا لعنوان كل عمود مفصولاً بفاصل نهاية السطر. أي بشكل عنوان واحد لكل سطر.';
$string['template_saved'] = 'تم حفظ المظهر';
$string['templates'] = 'المظاهر';
$string['textarea'] = 'إجابة ذات نص أطول';
$string['textfield'] = 'إجابة قصيرة';
$string['time_close'] = 'وقت الإغلاق';
$string['time_open'] = 'وقت الفتح';
$string['title_title'] = 'العنوان';
$string['use_one_line_for_each_value'] = 'استعمل سطر واحد لكل قيمة!';
$string['use_this_template'] = 'استعمل هذا المظهر';
$string['username_manage'] = 'إدارة اسم المستخدم';
$string['using_templates'] = 'استعمل المظهر';
