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
 * Strings for component 'feedback', language 'ar', version '4.1'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'أضف سؤالاً';
$string['add_pagebreak'] = 'إضافة فاصل صفحات';
$string['adjustment'] = 'تعديلات';
$string['after_submit'] = 'بعد التسليم';
$string['allowfullanonymous'] = 'إسمح بإخفاء الهوية الكامل';
$string['analysis'] = 'تحليل';
$string['anonymous'] = 'غير مشخصن';
$string['anonymous_edit'] = 'قم بتسجيل أسماء المستخدمين';
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
$string['cannotsavetempl'] = 'حفظ المظاهر غير مسموح به';
$string['captcha'] = 'كلمة التحقق';
$string['captchanotset'] = 'لم يتم إعداد كلمة التحقق.';
$string['check'] = 'متعدد الخيارات - متعدد الاجابات';
$string['check_values'] = 'الاجابات المحتمله';
$string['checkbox'] = 'متعدد الخيارات - يسمح بإجابات متعددة (خانات تأشير)';
$string['choosefile'] = 'إختر الملف';
$string['chosen_feedback_response'] = 'استجابة الإفادة المختارة';
$string['closebeforeopen'] = 'لقد جعلت تاريخ الإنهاء قبل تاريخ البدء.';
$string['complete_the_form'] = 'أجب على الأسئلة';
$string['completed'] = 'مكتمل';
$string['completed_feedbacks'] = 'الاجابات المسلمة';
$string['completedon'] = 'مكتمل في {$a}';
$string['completiondetail:submit'] = 'تقديم الإفادة';
$string['completionsubmit'] = 'المعاينة بمثابة مكتمل إذا تم تسليم الإفادة';
$string['configallowfullanonymous'] = 'عند ضبطه على \'نعم\'، يمكن للمستخدمين إكمال نشاط الإفادة في واجهة الموقع دون الحاجة إلى تسجيل دخولهم.';
$string['confirmdeleteentry'] = 'هل أنت متأكد من رغبتك في حذف هذا الادخال؟';
$string['confirmdeleteitem'] = 'هل أنت متأكد من رغبتك في حذف هذا العنصر؟';
$string['confirmdeletetemplate'] = 'هل أنت متأكد من رغبتك في حذف هذا المظهر؟';
$string['confirmusetemplate'] = 'هل أنت متأكد من رغبتك في استعمال هذا المظهر؟';
$string['continue_the_form'] = 'استمر بإجابة الأسئلة';
$string['count_of_nums'] = 'عدد الأرقام';
$string['courseid'] = 'مُعرَّف المساق';
$string['creating_templates'] = 'أحفظ هذه الأسئلة كمظهر جديد';
$string['delete_entry'] = 'احذف المدخل';
$string['delete_item'] = 'احذف سؤال';
$string['delete_old_items'] = 'احذف العناصر القديمة';
$string['delete_pagebreak'] = 'حذف فاصل الصفحات';
$string['delete_template'] = 'احذف مظهر';
$string['delete_templates'] = 'إحذف المظهر...';
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
<li>فاصل صفحات</li>
<li>عنصر سؤال: ما لون سيارتك؟<br />
(هذا العنصر يعتمد على العنصر 1 مع القيمة = نعم)</li>
<li>عنصر سؤال: لماذا لا تمتلك سيارة؟<br />
(هذا العنصر يعتمد على العنصر 1 مع القيمة = لا)</li>
<li> ... عناصر أخرى</li>
</ol>';
$string['dependitem'] = 'العنصر المعتَمَد عليه';
$string['dependvalue'] = 'القيمة المعتَمَد عليها';
$string['description'] = 'الوصف';
$string['do_not_analyse_empty_submits'] = 'تغافل عن التسليمات الفارغة في التحليلات';
$string['downloadresponseas'] = 'قم بتنزيل كل الإجابات بشكل:';
$string['drop_feedback'] = 'أحذف من المساق هذا';
$string['dropdown'] = 'خيارات متعددة - إجابة واحدة مسموح بها (قائمة منسدلة)';
$string['dropdown_values'] = 'إجابات';
$string['dropdownlist'] = 'خيارات متعددة - إجابة واحدة (قائمة منسدلة)';
$string['dropdownrated'] = 'قائمة منسدلة (مقيَّم)';
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
$string['eventresponsedeleted'] = 'إجابة تم حذفها';
$string['eventresponsesubmitted'] = 'إجابة تم تقديمها';
$string['export_questions'] = 'تصدير الأسئلة';
$string['export_to_excel'] = 'تصدير إلى Excel';
$string['feedback:addinstance'] = 'إضافة إفادة جديدة';
$string['feedback:complete'] = 'إكمال الإفادة';
$string['feedback:createprivatetemplate'] = 'إنشاء مظهر خاص';
$string['feedback:createpublictemplate'] = 'إنشاء مظهر عام';
$string['feedback:deletesubmissions'] = 'حذف التسليمات المكتملة';
$string['feedback:deletetemplate'] = 'حذف المظهر';
$string['feedback:edititems'] = 'تحرير العناصر';
$string['feedback:mapcourse'] = 'تعيين المقررات الدراسية للإفادات العمومية';
$string['feedback:receivemail'] = 'تلقي إشعار البريد الالكتروني';
$string['feedback:view'] = 'معاينة الإفادة';
$string['feedback:viewanalysepage'] = 'معاينة صفحة التحليل بعد التسليم';
$string['feedback:viewreports'] = 'معاينة التقارير';
$string['feedback_is_not_for_anonymous'] = 'الإفادة ليست لمجهولي الهوية';
$string['feedback_is_not_open'] = 'الإفادة ليست مفتوحة';
$string['feedbackclose'] = 'السماح بالإجابات إلى';
$string['feedbackcompleted'] = '{$a->username} قد أكمل {$a->feedbackname}';
$string['feedbackopen'] = 'السماح بالإجابات من';
$string['feedbackupdated'] = 'تم تحديث الإفادة';
$string['file'] = 'الملف';
$string['filter_by_course'] = 'الترشيح حسب المساق';
$string['handling_error'] = 'وقع خطأ عند معاملة إجراء وحدة الإفادة';
$string['hide_no_select_option'] = 'إخفِ خيار "غير محدد"';
$string['horizontal'] = 'أفقي';
$string['import_questions'] = 'استيراد الأسئلة';
$string['import_successfully'] = 'تم الاستيراد بنجاح';
$string['importfromthisfile'] = 'استورد من هذا الملف';
$string['includeuserinrecipientslist'] = 'قم بتضمين {$a} في قائمة المستلمين';
$string['indicator:cognitivedepth'] = 'الإفادة معرفياً';
$string['indicator:cognitivedepth_help'] = 'هذا المؤشر مبني على عمق الحالة المعرفية التي وصلها الطالب في نشاط الإفادة.';
$string['indicator:cognitivedepthdef'] = 'الإفادة معرفياً';
$string['indicator:cognitivedepthdef_help'] = 'لقد وصل المشارك إلى هذه النسبة المئوية من المشاركة المعرفية التي وفرتها نشاطات الإفادة خلال فترة التحليل هذه (المستويات = لا معاينة، معاينة، تقديم)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'الإفادة إجتماعياً';
$string['indicator:socialbreadth_help'] = 'هذا المؤشر مبني على عمق التوسع الاجتماعي الذي وصله الطالب في نشاط الإفادة.';
$string['indicator:socialbreadthdef'] = 'الإفادة إجتماعياً';
$string['indicator:socialbreadthdef_help'] = 'لقد وصل المشارك إلى هذه النسبة المئوية من المشاركة الاجتماعية التي وفرتها نشاطات الإفادة خلال فترة التحليل هذه (المستويات = لا مشاركة، المشاركة منفرداً، المشاركة مع الآخرين)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'المعلومات';
$string['infotype'] = 'نوع المعلومات';
$string['insufficient_responses'] = 'إجابات غير كافية';
$string['insufficient_responses_for_this_group'] = 'لا توجد إجابات كافية لهذه المجموعة';
$string['insufficient_responses_help'] = 'لتكون الإفادة غير مشخصنة، لا بد من وجود إجابتين على الأقل.';
$string['item_label'] = 'الملصق';
$string['item_name'] = 'سؤال';
$string['label'] = 'الملصق';
$string['labelcontents'] = 'المحتويات';
$string['mapcourse'] = 'قم بتعيين الإفادة إلى المقررات الدراسية';
$string['mapcourse_help'] = 'إفتراضياً، نماذج الإفادات المنشأة في صفحتك الرئيسية تكون متاحة على مستوى عموم الموقع وستظهر في كل المقررات الدراسية باستعمال كتلة الإفادة. يمكنك إجبار نموذج الإفادة على الظهور عبر جعله كتلة دبقة أو تقنين المقررات الدراسية التي يظهر فيها عبر تعيينه إلى مقررات محددة.';
$string['mapcourseinfo'] = 'هذه إفادة على مستوى عموم الموقع وهي متاحة في كل المقررات الدراسية باستعمال كتلة الإفادة. مع ذلك، يمكنك تحديد المقررات الدراسية التي ستظهر فيها عبر تعيينها. إبحث عن المقرر المطلوب وقم بتعيينه إلى هذه الإفادة.';
$string['mapcoursenone'] = 'لم يتم تعيين مقررات. الإفادة متاحة لجميع المقررات الدراسية.';
$string['mapcourses'] = 'قم بتعيين الإفادة إلى المقررات الدراسية';
$string['mappedcourses'] = 'المقررات الدراسية المعينة';
$string['mappingchanged'] = 'تعيين المقررات الدراسية قد تغير';
$string['maximal'] = 'الأقصى';
$string['messageprovider:message'] = 'تذكير بتقديم الإفادة';
$string['messageprovider:submission'] = 'إشعارات الإفادة';
$string['minimal'] = 'الأدنى';
$string['mode'] = 'نمط';
$string['modulename'] = 'إفادة';
$string['modulename_help'] = 'وحدة نشاط الإفادة تُمكن المعلم من إنشاء استبيان مخصص لجمع آراء المشاركين باستعمال أنواع متعددة من الأسئلة بضمنها: متعدد الخيارات، نعم/لا، والإدخال النصي.

يمكن إخفاء هويات أصحاب الإجابات حسب الرغبة، ويمكن إظهار النتائج لكل المشاركين أو تقييدها بالمعلمين فقط. يمكن أيضاً إكمال أي نشاطات من الإفادة في صفحة واجهة الموقع من قبل المستخدمين دون الحاجة إلى تسجيل دخولهم.

يمكن استعمال نشاطات الإفادة:

* لتقييم المقرر الدراسي، للمساعدة في تحسين المحتوى للمشاركين المستقبليين
* لتمكين المشاركين من التسجيل في وحدات المساق، أحداثه... إلخ.
* استطلاع آراء الضيوف بشأن إختيار المقررات الدراسية، سياسات المدرسة... إلخ.
* الاستبيانات بشأن محاربة الاعتداءات الشخصية حيث يمكن للطلاب الإبلاغ عن الحوادث دون كشف هوياتهم';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulenameplural'] = 'إفادات';
$string['move_item'] = 'أنقل هذا السؤال ';
$string['multichoice'] = 'متعدد الخيارات';
$string['multichoice_values'] = 'قيم متعدد الخيارات';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'متعدد الخيارات (مقيَّم)';
$string['multichoicetype'] = 'نوع متعدد الخيارات';
$string['multiplesubmit'] = 'السماح بتسليمات متعددة';
$string['multiplesubmit_help'] = 'عند تمكينه للاستطلاعات غير المشخصنة، يمكن للمستخدمين تقديم إفاداتهم لعدد غير محدد من المرات.';
$string['name'] = 'اسم';
$string['name_required'] = 'الاسم مطلوب';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = 'الصفحة التالية';
$string['no_handler'] = 'لا يتوفر معامل إجراء لـ';
$string['no_itemlabel'] = 'بلا ملصق';
$string['no_itemname'] = 'لا يوجد اسم عنصر';
$string['no_items_available_yet'] = 'لم يتم وضع أي أسئلة بعد';
$string['no_templates_available_yet'] = 'لا مظاهر متاحة بعد';
$string['non_anonymous'] = 'سيتم تسجيل اسم المستخدم وعرضه مع الإجابات';
$string['non_anonymous_entries'] = 'الإدخالات مكشوفة الهوية ({$a})';
$string['non_respondents_students'] = 'الطلاب غير المتجاوبين ({$a})';
$string['not_completed_yet'] = 'لم يكتمل بعد';
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
$string['page-mod-feedback-x'] = 'أي صفحة لوحدة نشاط الإفادة';
$string['page_after_submit'] = 'رسالة الإكمال';
$string['pagebreak'] = 'فاصل الصفحات';
$string['pluginadministration'] = 'إدارة الإفادة';
$string['pluginname'] = 'الإفادة';
$string['position'] = 'موضع';
$string['previewquestions'] = 'استعراض الأسئلة';
$string['previous_page'] = 'الصفحة السابقة';
$string['privacy:metadata:completed'] = 'سِجل بالتسليمات المقدمة إلى الإفادة';
$string['privacy:metadata:completed:anonymousresponse'] = 'فيما إذا كان التسليم معداً لإخفاء هوية صاحبه';
$string['privacy:metadata:completed:timemodified'] = 'وقت آخر تعديل في التسليم';
$string['privacy:metadata:completed:userid'] = 'مُعرَّف المستخدم الذي أكمل نشاط الإفادة';
$string['privacy:metadata:completedtmp'] = 'سِجل بالتسليمات التي لا تزال جارية';
$string['privacy:metadata:value'] = 'سِجل بإجابة السؤال';
$string['privacy:metadata:value:value'] = 'الإجابة المختارة';
$string['privacy:metadata:valuetmp'] = 'سِجل بإجابة السؤال بالنسبة إلى تسليم لا يزال جارياً';
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
$string['responsetime'] = 'وقت الاستجابات';
$string['save_as_new_item'] = 'أحفظ كسؤال جديد';
$string['save_as_new_template'] = 'أحفظ كمظهر جديد';
$string['save_entries'] = 'تسليم إجاباتك';
$string['save_item'] = 'أحفظ السؤال';
$string['saving_failed'] = 'فشل الحفظ';
$string['search:activity'] = 'الإفادة - معلومات النشاط';
$string['search_course'] = 'البحث في مساق';
$string['searchcourses'] = 'البحث في المقررات الدراسية';
$string['searchcourses_help'] = 'إبحث عن رمز أو اسم المقرر/المقررات الدراسية التي تريد ربطها مع هذه الإفادة.';
$string['selected_dump'] = 'الفهارس المختارة لمتغير $SESSION مطروحة أدناه:';
$string['send'] = 'أرسل';
$string['send_message'] = 'أرسل الإشعار';
$string['show_all'] = 'إظهار الكل';
$string['show_analysepage_after_submit'] = 'إظهار صفحة التحليل';
$string['show_entries'] = 'عرض الردود';
$string['show_entry'] = 'إظهار إجابة';
$string['show_nonrespondents'] = 'معاينة غير المستجيبين';
$string['site_after_submit'] = 'الموقع بعد التسليم';
$string['sort_by_course'] = 'أفرز حسب المساق';
$string['started'] = 'بدأ';
$string['startedon'] = 'بدأ في {$a}';
$string['subject'] = 'موضوع';
$string['switch_item_to_not_required'] = 'إجعله غير مطلوب';
$string['switch_item_to_required'] = 'إجعله مطلوباً';
$string['template'] = 'مظهر';
$string['template_deleted'] = 'تم حذف المظهر';
$string['template_saved'] = 'المظهر الذي تم حفظه';
$string['templates'] = 'مظاهر';
$string['textarea'] = 'إجابة بنص أطول';
$string['textarea_height'] = 'عدد الأسطر';
$string['textarea_width'] = 'العرض';
$string['textfield'] = 'إجابة بنص قصير';
$string['textfield_maxlength'] = 'أقصى عدد مقبول من الحروف';
$string['textfield_size'] = 'عرض حقل النص';
$string['there_are_no_settings_for_recaptcha'] = 'ليست هناك إعدادات لكلمة التحقق';
$string['this_feedback_is_already_submitted'] = 'لقد قمت مسبقاً بإكمال هذا النشاط.';
$string['typemissing'] = 'قيمة مفقودة "النوع"';
$string['update_item'] = 'حفظ تغييرات السؤال';
$string['url_for_continue'] = 'إربطه مع النشاط التالي';
$string['url_for_continue_help'] = 'بعد تقديم الإفادة، سيتم عرض زر الاستمرار، والذي يذهب إلى صفحة المساق. كبديل عن ذلك، قد يرتبط بالنشاط الآتي إذا تم وضع رابطه هنا.';
$string['use_one_line_for_each_value'] = 'استعمل سطراً واحداً لكل إجابة!';
$string['use_this_template'] = 'استخدم هذا المظهر';
$string['using_templates'] = 'استخدم مظهر';
$string['vertical'] = 'عمودي';
$string['whatfor'] = 'ماذا تريد أن تفعل؟';
