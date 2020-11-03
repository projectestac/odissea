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
 * Strings for component 'feedback', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   feedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'أضف سؤالاً';
$string['add_pagebreak'] = 'اضف فاصل صفحة';
$string['adjustment'] = 'تعديلات';
$string['after_submit'] = 'بعد التسليم';
$string['allowfullanonymous'] = 'إسمح بإخفاء الهوية الكامل';
$string['analysis'] = 'تحليل';
$string['anonymous'] = 'غير مشخصن';
$string['anonymous_edit'] = 'سجل اسم المستخدم';
$string['anonymous_entries'] = 'مدخلات غير مشخصنة ({$a})';
$string['anonymous_user'] = 'مستخدم غير مشخصن';
$string['answerquestions'] = 'أجب على الأسئلة';
$string['append_new_items'] = 'إلحاق عناصر جديدة';
$string['autonumbering'] = 'استعمل الترقيم التلقائي للأسئلة';
$string['autonumbering_help'] = 'تمكين أو تعطيل الترقيم التلقائي لكل سؤال';
$string['average'] = 'متوسط';
$string['bold'] = 'داكن';
$string['calendarend'] = '{$a} يُغلق';
$string['calendarstart'] = '{$a} يُفتح';
$string['cannotaccess'] = 'يمكنك الوصول إلى هذه الإفادة حصراً من مساق';
$string['cannotsavetempl'] = 'حفظ القوالب غير مسموح به';
$string['captcha'] = 'كلمة التحقق';
$string['captchanotset'] = 'لم يتم إعداد كلمة التحقق.';
$string['check'] = 'متعدد الخيارات - متعدد الاجابات';
$string['checkbox'] = 'متعدد الخيارات - يسمح بإجابات متعددة (خانات تأشير)';
$string['check_values'] = 'الاجابات المحتمله';
$string['choosefile'] = 'إختر الملف';
$string['chosen_feedback_response'] = 'استجابة الإفادة المختارة';
$string['closebeforeopen'] = 'لقد جعلت تاريخ الإنهاء قبل تاريخ البدء.';
$string['completed'] = 'مكتمل';
$string['completed_feedbacks'] = 'الاجابات المسلمة';
$string['completedon'] = 'مكتمل في {$a}';
$string['complete_the_form'] = 'أجب على الأسئلة';
$string['completionsubmit'] = 'المعاينة بمثابة مكتمل إذا تم تسليم الإفادة';
$string['configallowfullanonymous'] = 'عند ضبطه على \'نعم\'، يمكن للمستخدمين إكمال نشاط الإفادة من الصفحة الرئيسية دون الحاجة إلى تسجيل دخولهم.';
$string['confirmdeleteentry'] = 'هل أنت متأكد من رغبتك في حذف هذا الادخال؟';
$string['confirmdeleteitem'] = 'هل أنت متأكد من رغبتك في حذف هذا العنصر؟';
$string['confirmdeletetemplate'] = 'هل أنت متأكد من رغبتك في حذف هذا القالب؟';
$string['confirmusetemplate'] = 'هل أنت متأكد من رغبتك في استعمال هذا القالب؟';
$string['continue_the_form'] = 'استمر بإجابة الأسئلة';
$string['count_of_nums'] = 'عدد الأرقام';
$string['courseid'] = 'مُعرَّف المساق';
$string['creating_templates'] = 'أحفظ هذه الأسئلة كقالب جديد';
$string['delete_entry'] = 'احذف المدخل';
$string['delete_item'] = 'احذف سؤال';
$string['delete_old_items'] = 'احذف العناصر القديمة';
$string['delete_pagebreak'] = 'إحذف فاصل الصفحات';
$string['delete_template'] = 'احذف قالب';
$string['delete_templates'] = 'إحذف القالب...';
$string['depending'] = 'التبِعات';
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
<li>Pagebreak</li>
<li>عنصر سؤال: ما لون سيارتك؟<br />
(هذا العنصر يعتمد على العنصر 1 مع القيمة = نعم)</li>
<li>عنصر سؤال: لماذا لا تمتلك سيارة؟<br />
(هذا العنصر يعتمد على العنصر 1 مع القيمة = لا)</li>
<li> ... عناصر أخرى</li>
</ol>';
$string['dependitem'] = 'العنصر المعتَمَد عليه';
$string['dependvalue'] = 'القيمة المعتَمَد عليها';
$string['description'] = 'الوصف';
$string['do_not_analyse_empty_submits'] = 'لا تقم بتحليل التسليمات الفارغة';
$string['downloadresponseas'] = 'قم بتنزيل كل الإجابات بشكل:';
$string['dropdown'] = 'خيارات متعددة - إجابة واحدة مسموح بها (قائمة منسدلة)';
$string['dropdownlist'] = 'خيارات متعددة - إجابة واحدة (قائمة منسدلة)';
$string['dropdownrated'] = 'قائمة منسدلة (مقيَّم)';
$string['dropdown_values'] = 'إجابات';
$string['drop_feedback'] = 'أحذف من المقرر الدراسي هذا';
$string['edit_item'] = 'تحرير السؤال';
$string['edit_items'] = 'تحرير الأسئلة';
$string['email_notification'] = 'تمكين إشعارات التسليم';
$string['email_notification_help'] = 'عند تمكينه، سيتلقى المعلمون إشعاراً بشأن تسليمات الإفادة.';
$string['emailteachermail'] = 'لقد أكمل {$a->username} نشاط الإفادة: \'{$a->feedback}\'

يمكنك مشاهدتها هنا:

 {$a->url}';
$string['emailteachermailhtml'] = '<p>لقد أكمل {$a->username} نشاط الإفادة: <i>\'{$a->feedback}\'</i>.
</p>
<p>إنه <a href="{$a->url}">متاح في الموقع</a>.</p>';
$string['entries_saved'] = 'شكراً، لقد تم حفظ إجاباتك';
$string['eventresponsedeleted'] = 'تم حذف الإجابة';
$string['eventresponsesubmitted'] = 'تم تقديم الإجابة';
$string['export_questions'] = 'تصدير الأسئلة';
$string['export_to_excel'] = 'تصدير إلى Excel';
$string['feedback:addinstance'] = 'إضافة إفادة جديدة';
$string['feedbackclose'] = 'السماح بالإجابات إلى';
$string['feedback:complete'] = 'إكمال الإفادة';
$string['feedbackcompleted'] = '{$a->username} قد أكمل {$a->feedbackname}';
$string['feedback:createprivatetemplate'] = 'إنشاء قالب خاص';
$string['feedback:createpublictemplate'] = 'إنشاء قالب عام';
$string['feedback:deletesubmissions'] = 'حذف التسليمات المكتملة';
$string['feedback:deletetemplate'] = 'حذف القالب';
$string['feedback:edititems'] = 'تحرير العناصر';
$string['feedback_is_not_for_anonymous'] = 'الإفادة ليست لمجهولي الهوية';
$string['feedback_is_not_open'] = 'الإفادة ليست مفتوحة';
$string['feedback:mapcourse'] = 'تعيين المساقات للإفادات العمومية';
$string['feedbackopen'] = 'السماح بالإجابات من';
$string['feedback:receivemail'] = 'تلقي إشعار البريد الالكتروني';
$string['feedback:view'] = 'معاينة الإفادة';
$string['feedback:viewanalysepage'] = 'معاينة صفحة التحليل بعد الإرسال';
$string['feedback:viewreports'] = 'معاينة التقارير';
$string['file'] = 'الملف';
$string['filter_by_course'] = 'الترشيح حسب المساق';
$string['handling_error'] = 'وقع خطأ عند معاملة إجراء وحدة الإفادة';
$string['hide_no_select_option'] = 'إخفِ خيار "غير محدد"';
$string['horizontal'] = 'أفقي';
$string['importfromthisfile'] = 'استورد من هذا الملف';
$string['import_questions'] = 'استيراد الأسئلة';
$string['import_successfully'] = 'تم الاستيراد بنجاح';
$string['includeuserinrecipientslist'] = 'قم بتضمين {$a} في قائمة المستلمين';
$string['indicator:cognitivedepth'] = 'الإفادة معرفياً';
$string['indicator:cognitivedepthdef'] = 'الإفادة معرفياً';
$string['indicator:cognitivedepthdef_help'] = 'لقد وصل المشارك إلى هذه النسبة المئوية من المشاركة المعرفية التي وفرتها نشاطات الإفادة خلال فترة التحليل هذه (المستويات = لا معاينة، معاينة، تقديم)';
$string['indicator:cognitivedepth_help'] = 'هذا المؤشر مبني على عمق الحالة المعرفية التي وصلها الطالب في نشاط الإفادة.';
$string['indicator:socialbreadth'] = 'الإفادة إجتماعياً';
$string['indicator:socialbreadthdef'] = 'الإفادة إجتماعياً';
$string['indicator:socialbreadthdef_help'] = 'لقد وصل المشارك إلى هذه النسبة المئوية من المشاركة الاجتماعية التي وفرتها نشاطات الإفادة خلال فترة التحليل هذه (المستويات = لا مشاركة، المشاركة منفرداً، المشاركة مع الآخرين)';
$string['indicator:socialbreadth_help'] = 'هذا المؤشر مبني على عمق التوسع الاجتماعي الذي وصله الطالب في نشاط الإفادة.';
$string['info'] = 'المعلومات';
$string['infotype'] = 'نوع المعلومات';
$string['insufficient_responses'] = 'إجابات غير كافية';
$string['insufficient_responses_for_this_group'] = 'لا توجد إجابات كافية لهذه المجموعة';
$string['insufficient_responses_help'] = 'لتكون الإفادة غير مشخصنة، لا بد من وجود إجابتين على الأقل.';
$string['item_label'] = 'الملصق';
$string['item_name'] = 'سؤال';
$string['label'] = 'الملصق';
$string['labelcontents'] = 'المحتويات';
$string['mapcourse'] = 'قم بتعيين الإفادة إلى المساقات';
$string['mapcourse_help'] = 'إفتراضياً، نماذج الإفادات المنشأة في صفحتك الرئيسية تكون متاحة على مستوى عموم الموقع وستظهر في كل المساقات باستعمال كتلة الإفادة. يمكنك إجبار نموذج الإفادة على الظهور عبر جعله كتلة دبقة أو تقنين المساقات التي يظهر فيها عبر تعيينه إلى مساقات محددة.';
$string['mapcourseinfo'] = 'هذه إفادة على مستوى عموم الموقع وهي متاحة في كل المساقات باستعمال كتلة الإفادة. مع ذلك، يمكنك تحديد المساقات التي ستظهر فيها عبر تعيينها. إبحث عن المساق المطلوب وقم بتعيينه إلى هذه الإفادة.';
$string['mapcoursenone'] = 'لم يتم تعيين مساقات. الإفادة متاحة لجميع المساقات.';
$string['mapcourses'] = 'قم بتعيين الإفادة إلى المساقات';
$string['mappedcourses'] = 'المساقات المعينة';
$string['mappingchanged'] = 'تعيين المساقات قد تغير';
$string['maximal'] = 'الأقصى';
$string['messageprovider:message'] = 'تذكير بتقديم الإفادة';
$string['messageprovider:submission'] = 'إعلامات الإفادة';
$string['minimal'] = 'الأدنى';
$string['mode'] = 'نمط';
$string['modulename'] = 'إفادة';
$string['modulename_help'] = 'وحدة نشاط الإفادة تُمكن المعلم من إنشاء استبيان مخصص لجمع آراء المشاركين باستعمال أنواع متعددة من الأسئلة بضمنها: متعدد الخيارات، نعم/لا، والإدخال النصي.

يمكن إخفاء هويات أصحاب الإجابات حسب الرغبة، ويمكن إظهار النتائج لكل المشاركين أو تقييدها بالمعلمين فقط. يمكن أيضاً إكمال اي نشاطات من الإفادة في الصفحة الأمامية للموقع من قبل المستخدمين دون الحاجة إلى تسجيل دخولهم.

يمكن استعمال نشاطات الإفادة:

* لتقييم المساق، للمساعدة في تحسين المحتوى للمشاركين المستقبليين
* لتمكين المشاركين من التسجيل في وحدات المساق، أحداثه... إلخ.
* استطلاع آراء الضيوف بشأن إختيار المساقات، سياسات المدرسة... إلخ.
* الاستبيانات بشأن محاربة الاعتداءات الشخصية حيث يمكن للطلاب الإبلاغ عن الحوادث دون كشف هوياتهم';
$string['modulenameplural'] = 'إفادات';
$string['move_item'] = 'أنقل هذا السؤال ';
$string['multichoice'] = 'متعدد الخيارات';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'متعدد الخيارات (مقيَّم)';
$string['multichoicetype'] = 'نوع متعدد الخيارات';
$string['multichoice_values'] = 'قيم متعدد الخيارات';
$string['multiplesubmit'] = 'إرسالات متعددة';
$string['multiplesubmit_help'] = 'عند تمكينه للاستطلاعات غير المشخصنة، يمكن للمستخدمين تقديم إفاداتهم لعدد غير محدد من المرات.';
$string['name'] = 'اسم';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['name_required'] = 'الاسم مطلوب';
$string['next_page'] = 'الصفحة التالية';
$string['no_handler'] = 'لا يتوفر معامل إجراء لـ';
$string['no_itemlabel'] = 'بلا ملصق';
$string['no_itemname'] = 'لا يوجد اسم عنصر';
$string['no_items_available_yet'] = 'لم يتم وضع أي أسئلة بعد';
$string['non_anonymous'] = 'سيتم تسجيل اسم المستخدم وعرضه مع الإجابات';
$string['non_anonymous_entries'] = 'الإدخالات مكشوفة الهوية ({$a})';
$string['non_respondents_students'] = 'الطلاب غير المتجاوبين ({$a})';
$string['not_completed_yet'] = 'لم يكتمل بعد';
$string['no_templates_available_yet'] = 'لا قوالب متاحة بعد';
$string['not_selected'] = 'غير محددة';
$string['not_started'] = 'لم يبدأ';
$string['numberoutofrange'] = 'العدد خارج المدى';
$string['numeric'] = 'إجابة رقمية';
$string['numeric_range_from'] = 'المجال من:';
$string['numeric_range_to'] = 'المجال إلى:';
$string['of'] = 'من';
$string['oldvaluespreserved'] = 'سيتم الاحتفاظ بكل الأسئلة القديمة والقيم المعينة لها';
$string['oldvalueswillbedeleted'] = 'سيتم حذف كل الأسئلة الحالية وإجاباتها.';
$string['only_one_captcha_allowed'] = 'يُسمح بكلمة تحقق واحدة فقط في الإفادة';
$string['openafterclose'] = 'لقد جعلتَ تاريخ الفتح بعد تاريخ الإغلاق';
$string['overview'] = 'نظرة عامة';
$string['page'] = 'صفحة';
$string['page_after_submit'] = 'الصفحة بعد الإرسال';
$string['pagebreak'] = 'فاصل صفحات';
$string['page-mod-feedback-x'] = 'أي صفحة لوحدة نشاط الإفادة';
$string['pluginadministration'] = 'إدارة الإفادة';
$string['pluginname'] = 'الإفادة';
$string['position'] = 'موضع';
$string['previous_page'] = 'صفحة سابقة';
$string['privacy:metadata:completed'] = 'سِجل بالتسليمات المقدمة إلى الإفادة';
$string['privacy:metadata:completed:anonymousresponse'] = 'فيما إذا كان التسليم معداً لإخفاء هوية صاحبه';
$string['privacy:metadata:completed:timemodified'] = 'وقت آخر تعديل في التسليم';
$string['privacy:metadata:completedtmp'] = 'سِجل بالتسليمات التي لا تزال جارية';
$string['privacy:metadata:completed:userid'] = 'مُعرَّف المستخدم الذي أكمل نشاط الإفادة';
$string['privacy:metadata:value'] = 'سِجل بإجابة السؤال';
$string['privacy:metadata:valuetmp'] = 'سِجل بإجابة السؤال بالنسبة إلى تسليم لا يزال جارياً';
$string['privacy:metadata:value:value'] = 'الإجابة المختارة';
$string['public'] = 'عام';
$string['question'] = 'السؤال';
$string['questionandsubmission'] = 'إعدادات السؤال والتسليم';
$string['questions'] = 'الأسئلة';
$string['questionslimited'] = 'إظهار أول {$a} أسئلة فقط؛ عاين الإجابات الفردية أو قم بتنزيل بيانات الجدول لمعاينة الكل.';
$string['radio'] = 'متعدد الاختيارات - إجابة واحدة';
$string['radio_values'] = 'الإجابات';
$string['ready_feedbacks'] = 'الإفادات الجاهزة';
$string['required'] = 'مطلوب';
$string['resetting_data'] = 'أعد تعيين إجابات الإفادة';
$string['resetting_feedbacks'] = 'تجري إعادة تعيين الإفادات';
$string['response_nr'] = 'رقم الإجابة';
$string['responses'] = 'إجابات';
$string['responsetime'] = 'وقت الإجابة';
$string['save_as_new_item'] = 'أحفظ كسؤال جديد';
$string['save_as_new_template'] = 'أحفظ كقالب جديد';
$string['save_entries'] = 'تسليم إجاباتك';
$string['save_item'] = 'أحفظ السؤال';
$string['saving_failed'] = 'فشل الحفظ';
$string['search:activity'] = 'الإفادة - معلومات النشاط';
$string['search_course'] = 'البحث في مقرر دراسي';
$string['searchcourses'] = 'البحث في المقررات الدراسية';
$string['searchcourses_help'] = 'إبحث عن رمز أو اسم المساق/المساقات التي تريد ربطها مع هذه الإفادة.';
$string['selected_dump'] = 'الفهارس المختارة لمتغير $SESSION مطروحة أدناه:';
$string['send'] = 'أرسل';
$string['send_message'] = 'أرسل الرسالة';
$string['show_all'] = 'إظهار الكل';
$string['show_analysepage_after_submit'] = 'عرض صفحة التحليل بعد الإرسال';
$string['show_entries'] = 'عرض الردود';
$string['show_entry'] = 'إظهار إجابة';
$string['show_nonrespondents'] = 'معاينة غير المستجيبين';
$string['site_after_submit'] = 'الموقع بعد التسليم';
$string['sort_by_course'] = 'أفرز حسب المقرر الدراسي';
$string['started'] = 'بدأ';
$string['startedon'] = 'بدأ في {$a}';
$string['subject'] = 'موضوع';
$string['switch_item_to_not_required'] = 'إجعله غير مطلوب';
$string['switch_item_to_required'] = 'إجعله مطلوباً';
$string['template'] = 'قالب';
$string['template_deleted'] = 'تم حذف القالب';
$string['templates'] = 'قوالب';
$string['template_saved'] = 'القالب الذي تم حفظه';
$string['textarea'] = 'إجابة بنص أطول';
$string['textarea_height'] = 'عدد الأسطر';
$string['textarea_width'] = 'العرض';
$string['textfield'] = 'إجابة بنص قصير';
$string['textfield_maxlength'] = 'أقصى عدد مقبول من الحروف';
$string['textfield_size'] = 'عرض حقل النص';
$string['there_are_no_settings_for_recaptcha'] = 'ليست هناك إعدادات لكلمة التحقق';
$string['this_feedback_is_already_submitted'] = 'لقد قمت مسبقاً بإكمال هذا النشاط.';
$string['typemissing'] = 'قيمة مفقودة "النوع"';
$string['update_item'] = 'إحفظ تغييرات السؤال';
$string['url_for_continue'] = 'إربطه مع النشاط الآتي';
$string['url_for_continue_help'] = 'بعد تقديم الإفادة، سيتم عرض زر الاستمرار، والذي يذهب إلى صفحة المساق. كبديل عن ذلك، قد يرتبط بالنشاط الآتي إذا تم وضع رابطه هنا.';
$string['use_one_line_for_each_value'] = 'استعمل سطراً واحداً لكل إجابة!';
$string['use_this_template'] = 'استخدم هذا القالب';
$string['using_templates'] = 'استخدم قالب';
$string['vertical'] = 'عمودي';
