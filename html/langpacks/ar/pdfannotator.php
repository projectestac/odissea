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
 * Strings for component 'pdfannotator', language 'ar', version '3.11'.
 *
 * @package     pdfannotator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_private_comment'] = 'إضافة تعليق إلى الملاحظة الشخصية';
$string['allanswers'] = 'الكل';
$string['allquestions'] = 'الكل';
$string['allquestionsimgtitle'] = 'إظهار كل الأسئلة في هذا المستند';
$string['allquestionstitle'] = 'كل الأسئلة في';
$string['annotationDeleted'] = 'تم حذف الشرح';
$string['answer'] = 'الإجابة';
$string['answerButton'] = 'الإجابة';
$string['answerSolved'] = 'تم تأشير هذه الإجابة على أنها صحيحة من قبل المدير.';
$string['answercounthelpicon'] = 'عدد الإجابات';
$string['answercounthelpicon_help'] = 'هذا العمود يخبرك عن عدد الإجابات التي تلقاها السؤال.';
$string['answers'] = 'الإجابات';
$string['answerstab'] = 'الإجابات';
$string['answerstabicon'] = 'الإجابات';
$string['average_answers'] = 'متوسط الإجابات';
$string['average_questions'] = 'متوسط الأسئلة';
$string['closedquestions'] = 'محلول';
$string['createAnnotation'] = 'إنشاء الشرح';
$string['currentPage'] = 'رقم الصفحة الحالية';
$string['day'] = 'يوم';
$string['days'] = 'أيام';
$string['decision:overlappingAnnotation'] = 'لقد نقرت على منطقة فيها أكثر من تعليق. حدد أي منها الذي أردت النقر عليه.';
$string['deletedQuestion'] = 'سؤال محذوف';
$string['deletingAnnotation_manager'] = 'سيتم حذف الشرح مع كل التعليقات ذات الصلة.';
$string['deletingAnnotation_student'] = 'سيتم حذف الشرح مع كل التعليقات ذات الصلة.<br>يمكنك حذف تعليقاتك الخاصة طالما لم يتم التعقيب عليها من قبل المستخدمين الآخرين.';
$string['deletingQuestion_manager'] = 'سيتم حذف التعليقات.<br>تلميح: إذا أردت حذف كل الإجابات أيضاً، إحذف التعليق التوضيحي في المستند.';
$string['deletingQuestion_student'] = 'سيتم حذف السؤال.<br>إذا لم تتم إجابته، سيتم حذف التعليق أيضًا، بخلاف ذلك، سيتم عرض السؤال على أنه محذوف';
$string['dnduploadpdfannotator'] = 'إنشاء ملف من أجل تعليقات PDF';
$string['editAnnotation'] = 'سيتم نقل التعليق. <br>هذا قد يؤدي إلى تغيير سياق السؤال.';
$string['error:addAnnotation'] = 'وقع خطأ عند إضافة التعليق.';
$string['error:deleteAnnotation'] = 'وقع خطأ عند حذف التعليق.';
$string['error:editAnnotation'] = 'وقع خطأ عند تحرير التعليق.';
$string['error:getAnnotation'] = 'وقع خطأ عند جلب التعليق.';
$string['error:getAnnotations'] = 'وقع خطأ عند جلب كل التعليقات.';
$string['error:getQuestions'] = 'وقع خطأ عند إحضار الأسئلة لهذه الصفحة.';
$string['error:markcorrectanswer'] = 'وقع خطأ عند تأشير الإجابة على أنها صحيحة.';
$string['error:missingAnnotationtype'] = 'نوع التعليق غير موجود. ربما الإدخال في جدول pdfannotator_annotationtypes مفقود.';
$string['error:openprintview'] = 'وقع خطأ عند محاولة فتح ملف PDF في Acrobat Reader.';
$string['error:printcomments'] = 'وقع خطأ عند محاولة فتح التعليقات بصيغة PDF.';
$string['eventreport_added'] = 'تعليق تم الإبلاغ عنه';
$string['forwardedquestionhtml'] = '{$a->sender} قام بتمرير الرسالة الآتية لك: <br /> <br />
        "{$a->questioncontent}" <br /> <br />
        مع الرسالة: <br /> <br />
        "{$a->message}" <br /> <br />
        السؤال متاح <a href="{$a->urltoquestion}">هنا</a>.';
$string['forwardedquestiontext'] = '{$a->sender} قام بتمرير الرسالة الآتية لك:

        "{$a->questioncontent}"

        مع الرسالة:

        "{$a->message}"

        السؤال متاح <a href="{$a->urltoquestion}">هنا</a>.';
$string['global_setting_use_private_comments'] = 'أتريد السماح بالملاحظات الشخصية؟';
$string['global_setting_use_private_comments_desc'] = 'السماح للمشاركين بكتابة الشروح والملاحظات الشخصية';
$string['global_setting_use_protected_comments_desc'] = 'السماح للمشاركين بكتابة الشروح والملاحظات الخاصة. وحدهما كاتب الملاحظة والمدير يمكنهما مشاهدتها.';
$string['global_setting_use_studentdrawing_desc'] = 'يرجى ملاحظة أن الرسومات غير مشخصنة ولا يمكن التعليق عليها أو الإبلاغ عنها.';
$string['global_setting_use_studenttextbox_desc'] = 'يرجى ملاحظة أن تعليقات مربع النص غير مشخصنة ولا يمكن التعليق عليها أو الإبلاغ عنها.';
$string['global_setting_useprint_comments_desc'] = 'السماح للمشاركين بحفظ التعليقات والملاحظات وطباعتها';
$string['hideAnnotations'] = 'إخفاء التعليقات';
$string['itemsperpage'] = 'العناصر لكل صفحة';
$string['lastanswered'] = 'الإجابة الأخيرة';
$string['likeCountAnswer'] = 'الأشخاص الذين يعتقدون أن هذه الإجابة مفيدة';
$string['likeForbidden'] = 'ليس مسموحًا لك بالإعجاب بهذا التعليق';
$string['messageprovider:newanswer'] = 'عند تقديم إجابة على السؤال الذي اشتركتَ فيه';
$string['missingAnnotation'] = 'تعذر العثور على التعليق ذي الصلة!';
$string['modulename'] = 'تعليق PDF';
$string['modulenameplural'] = 'تعليقات PDF';
$string['myanswers'] = 'إجاباتي';
$string['myprivate'] = 'ملاحظاتي الشخصية';
$string['newanswerhtml'] = 'السؤال الذي اشتركت فيه "{$a->question}" قد تمت إجابته من قبل {$a->answeruser} مع التعليق: <br /> <br /> "{$a->content}"<br /><br />
الإجابة متاحة <a href="{$a->urltoanswer}">هنا</a>.';
$string['newanswertext'] = 'السؤال الذي اشتركت فيه "{$a->question}" قد تمت إجابته من قبل {$a->answeruser} مع التعليق:

     "{$a->content}"

الإجابة متاحة في: {$a->urltoanswer}';
$string['newquestionhtml'] = 'تمت إضافة سؤال جديد من قبل {$a->answeruser} مع التعليق: <br /> <br /> "{$a->content}"<br /><br />
السؤال متاح <a href="{$a->urltoanswer}">هنا</a>.';
$string['newquestiontext'] = 'تمت إضافة سؤال جديد من قبل {$a->answeruser} مع التعليق:

  "{$a->content}"

السؤال متاح في {$a->urltoanswer}';
$string['nextPage'] = 'الصفحة التالية';
$string['noCommentsupported'] = 'هذا النوع من التعليقات لا يدعم التعقيب.';
$string['noanswers'] = 'ليست هناك إجابات في هذا المقرر الدراسي في الوقت الحاضر.';
$string['noanswerssubscribed'] = 'ليست هناك إجابات على الإسئلة المشترك فيها في هذا المقرر الدراسي في الوقت الحاضر.';
$string['nomyposts'] = 'لم تقم بطرح سؤال أو تقديم جواب في هذا المقرر الدراسي بعد.';
$string['noquestions'] = 'لا توجد أسئلة في هذه الصفحة!';
$string['notificationsubject:newanswer'] = 'إجابة جديدة على سؤال مشترك فيه في {$a}';
$string['ownpoststabicon_help'] = 'هذه الصفحة تعرض كل التعليقات التي نشرتها في هذا المساق.';
$string['pdfannotator:create'] = 'إنشاء التعليقات والشروحات';
$string['pdfannotator:deleteany'] = 'حذف أي تعليقات وشروحات';
$string['pdfannotator:deleteown'] = 'حذف تعليقاتك وشروحاتك';
$string['pdfannotator:edit'] = 'تحرير تعليقاتك وشروحاتك';
$string['pdfannotator:editanypost'] = 'تحرير أي تعليقات وشروحات';
$string['pdfannotator:markcorrectanswer'] = 'تأشير الإجابات على أنها صحيحة';
$string['pdfannotator:view'] = 'معاينة تعليق PDF';
$string['pdfannotator:viewanswers'] = 'معاينة الإجابات على الأسئلة المشترك فيها (صفحة النظرة العامة)';
$string['pdfannotator:viewstatistics'] = 'معاينة صفحة الإحصائيات';
$string['pdfannotator:viewteacherstatistics'] = 'أنظر المعلومات الإضافية في صفحة الإحصائيات';
$string['pdfannotator:vote'] = 'التصويت لصالح سؤال مثير للانتباه أو إجابة مفيدة';
$string['pdfannotator:writeprivatecomments'] = 'كتابة الملاحظات الشخصية';
$string['pdfannotatorname'] = 'أداة تعليق PDF';
$string['pluginadministration'] = 'إدارة تعليق PDF';
$string['pluginname'] = 'تعليق PDF';
$string['prevPage'] = 'الصفحة السابقة';
$string['privacy:metadata:core_files'] = 'يخزن Pdfannotator الملفات التي رفعها المستخدم كأساس لوضع التعليقات والمناقشة';
$string['privacy:metadata:pdfannotator_annotations'] = 'معلومات عن التعليقات التي وضعها المستخدم. هذا يتضمن نوع التعليق (مثلاً تأشير أو رسم)، موضعه ضمن الملف المحدد، فضلاً عن وقت إنشائه';
$string['privacy:metadata:pdfannotator_annotations:annotationid'] = 'مُعرَّف التعليق الذي تم تدوينه. إنه يشير إلى البيانات المدرجة أعلاه';
$string['privacy:metadata:pdfannotator_annotations:userid'] = 'مُعرَّف المستخدم الذي قام بهذا التعليق';
$string['privacy:metadata:pdfannotator_comments'] = 'معلومات عن تعليقات المستخدم. هذا يتضمن المحتوى ووقت إنشاء التعليق، فضلاً عن التعليق الضمني';
$string['privacy:metadata:pdfannotator_comments:annotationid'] = 'مُعرَّف التعليق الضمني';
$string['privacy:metadata:pdfannotator_reports:message'] = 'المحتوى النصي للتقرير';
$string['private_comments'] = 'الملاحظات الشخصية';
$string['questionsimgtitle'] = 'إظهار كل الأسئلة في هذه الصفحة';
$string['sendPrivate'] = 'نشر الملاحظة الشخصية';
$string['setting_alternative_name_help'] = 'إن كان الاسم أطول من 20 حرفاً، سيتم استبدال الحروف الباقية بـ \'...\' في تنقل التبويب الداخلي للحاشية.';
$string['setting_use_private_comments'] = 'السماح بالملاحظات الشخصية';
$string['setting_use_private_comments_help'] = 'السماح للمشاركين بكتابة الملاحظات الشخصية. الأشخاص الآخرون لا يمكنهم مشاهدة تلك التعليقات.';
$string['setting_use_studentdrawing_help'] = 'السماح للمشاركين بحفظ وطباعة مستند pdf بدون التعليقات والشروح';
$string['setting_use_studenttextbox_help'] = 'يرجى ملاحظة أن تعليقات مربع النص مشخصنة ولا يمكن التعليق عليها أو الإبلاغ عنها.';
$string['setting_useprint_comments_help'] = 'السماح للمشاركين بحفظ التعليقات والشروحات وطباعتها';
$string['setting_useprint_help'] = 'يرجى ملاحظة أن الرسومات مشخصنة ولا يمكن التعليق عليها أو الإبلاغ عنها.';
$string['showAnnotations'] = 'إظهار التعليقات';
$string['startDiscussion'] = 'إبدأ المناقشة';
$string['statistic'] = 'الإحصائيات';
$string['subscribe'] = 'الاشتراك في هذه التعليقات';
$string['unsubscribe'] = 'إلغاء الاشتراك في هذه التعليقات';
$string['use_private_comments'] = 'أتريد السماح للمشاركين بكتابة الملاحظات الشخصية؟';
