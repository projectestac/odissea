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
 * Strings for component 'qtype_essay', language 'ar', version '3.11'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'أنواع الملفات المقبولة:';
$string['acceptedfiletypes_help'] = 'يمكن تقييد أنواع الملفات المقبولة عن طريق إدخال قائمة ملحقات الملفات. إذا تم ترك الحقل فارغًا ، فسيتم السماح بجميع أنواع الملفات.';
$string['allowattachments'] = 'السماح بالمرفقات';
$string['answerfiles'] = 'ملفات الإجابة';
$string['answertext'] = 'نص الإجابة';
$string['attachedfiles'] = 'المرفقات: {$a}';
$string['attachmentsoptional'] = 'المرفقات اختيارية';
$string['attachmentsrequired'] = 'تتطلب المرفقات';
$string['attachmentsrequired_help'] = 'يحدد هذا الخيار الحد الأدنى لعدد المرفقات المطلوبة لاستجابة يمكن اعتبارها قابلة للتقدير.';
$string['err_maxminmismatch'] = 'أقصى حد للكلمات ينبغي أن يكون أكبر من أدنى حد لها';
$string['err_maxwordlimit'] = 'أقصى حد للكلمات مُمَكَّن ولكن قيمته غير مذكورة';
$string['err_maxwordlimitnegative'] = 'أقصى حد للكلمات لا يمكن أن يكون قيمة سالبة';
$string['err_minwordlimit'] = 'أدنى حد للكلمات مُمَكَّن ولكن قيمته غير مذكورة';
$string['err_minwordlimitnegative'] = 'أدنى حد للكلمات لا يمكن أن يكون قيمة سالبة';
$string['formateditor'] = 'محرر HTML';
$string['formateditorfilepicker'] = 'محرر HTML  مع منتقي الملفات';
$string['formatmonospaced'] = 'نص عادي، بخط أحادي المسافة';
$string['formatnoinline'] = 'لا يوجد نص عبر الانترنت';
$string['formatplain'] = 'نص عادي';
$string['graderinfo'] = 'معلومات للمصحح.';
$string['graderinfoheader'] = 'معلومات المُقيِّم';
$string['maxbytes'] = 'أقصى حجم للملفات';
$string['maxwordlimit'] = 'أقصى حد للكلمات';
$string['maxwordlimit_help'] = 'إذا تطلبت الاستجابة أن يقوم الطلبة بإدخال نص، فهذا هو أقصى عدد من الكلمات مسموح بها لكل طالب.';
$string['maxwordlimitboundary'] = 'حد عدد الكلمات لهذا السؤال هو {$a->limit} من الكلمات وأنت تحاول تقديم {$a->count}. لطفاً، إختصر إجابتك ثم حاول مجدداً.';
$string['minwordlimit'] = 'أدنى حد للكلمات';
$string['minwordlimit_help'] = 'إذا تطلبت الاستجابة أن يقوم الطلبة بإدخال نص، فهذا هو أدنى عدد من الكلمات مسموح بها لكل طالب.';
$string['minwordlimitboundary'] = 'يتطلب السؤال إجابة لا تقل عن {$a->limit} من الكلمات وأنت تحاول تقديم {$a->count}. لطفاً، قم بتوسيع إجابتك ثم حاول مجدداً.';
$string['mustattach'] = 'عند تحديد "لا يوجد نص عبر الإنترنت" ، أو تكون الاستجابات اختيارية ، يجب السماح بمرفق واحد على الأقل.';
$string['mustrequire'] = 'عند تحديد "لا يوجد نص عبر الإنترنت" ، أو تكون الاستجابات اختيارية ، يجب عليك طلب مرفق واحد على الأقل.';
$string['mustrequirefewer'] = 'لا يمكنك طلب مرفقات أكثر مما تسمح به.';
$string['nlines'] = 'أسطر {$a}';
$string['nonexistentfiletypes'] = 'لم يتم التعرف على أنواع الملفات التالية: {$a}';
$string['pluginname'] = 'مقالي';
$string['pluginname_help'] = 'ردًا على السؤال، المجيب يمكنه رفع ملف أو أكثر و/أو إدخال نص عبر الإنترنت. يمكن توجيه الطالب عبر تزويده بقالب يوضح شكل الإجابة. ينبغي هنا تقييم الإجابات يدويًا.';
$string['pluginnameadding'] = 'إضافة سؤال مقالي';
$string['pluginnameediting'] = 'تحرير سؤال مقالي';
$string['pluginnamesummary'] = 'يسمح بالإجابة لبعض الجمل أو الفقرات. ثم يجب أن تقيم بعد ذلك يدوياً.';
$string['privacy:metadata'] = 'إن ملحق نوع السؤال المقالي يسمح لمنشئي السؤال بتعيين الخيارات الافتراضية بشكل تفضيلات للمستخدم.';
$string['privacy:preference:attachments'] = 'عدد ما مسموح به من مرفقات';
$string['privacy:preference:attachmentsrequired'] = 'عدد ما مسموح به من مرفقات';
$string['privacy:preference:defaultmark'] = 'الدرجة الافتراضية المعدة لسؤال معين';
$string['privacy:preference:maxbytes'] = 'أقصى حجم للملفات';
$string['privacy:preference:responsefieldlines'] = 'عدد السطور الذي يشير إلى حجم مربع الإدخال (منطقة النص)';
$string['privacy:preference:responseformat'] = 'ما هو تنسيق الاستجابة (محرر نصوص HTML، نص عادي، إلخ.)؟';
$string['privacy:preference:responserequired'] = 'فيما إذا كان مطلوبًا من الطالب إدخال نص أو أن النص اختياري';
$string['responsefieldlines'] = 'حجم مربع الإدخال';
$string['responseformat'] = 'تنسيق الإجابة';
$string['responseisrequired'] = 'اطلب من الطالب إدخال النص';
$string['responsenotrequired'] = 'إدخال النص اختياري';
$string['responseoptions'] = 'خيارات الاستجابة';
$string['responserequired'] = 'النص المطلوب';
$string['responsetemplate'] = 'قالب الاستجابة';
$string['responsetemplate_help'] = 'سيتم عرض أيّ نص تم إدخاله هنا في مربع إدخال الاستجابة عند بدء محاولة جديدة على السؤال.';
$string['responsetemplateheader'] = 'قالب الاستجابة';
$string['wordcount'] = 'عدد الكلمات: {$a}';
$string['wordcounttoofew'] = 'عدد الكلمات: {$a->count}، أقل مما هو مطلوب والبالغ {$a->limit}.';
$string['wordcounttoomuch'] = 'عدد الكلمات: {$a->count}، أكثر من الحد الأقصى والبالغ {$a->limit}.';
