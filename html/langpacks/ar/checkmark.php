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
 * Strings for component 'checkmark', language 'ar', version '4.1'.
 *
 * @package     checkmark
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activateindividuals'] = 'تفعيل الوظيفة الفردية';
$string['all'] = 'الكل';
$string['all_absent'] = 'كل المشاركين الغائبين';
$string['all_attendant'] = 'كل المشاركين الحاضرين';
$string['allowresubmit'] = 'السماح بإعادة التسليم';
$string['alwaysshowdescription'] = 'إظهار الوصف دائمًا';
$string['autograde_confirm'] = 'أنت على وشك تحديث التقديرات والإفادات العائدة لـ <strong>{$a}</strong>. التقديرات والإفادات السابقة ستتم الكتابة عليها.';
$string['autograde_notsupported'] = 'هذا المقياس غير مدعوم من قبل التقييم التلقائي.';
$string['autograde_strall'] = 'كل التسليمات';
$string['availabledate'] = 'السماح بالتسليمات من';
$string['cantfixevent'] = 'تعذر تثبيت الحدث ذي المُعرَّف {$a->id}، المسمى {$a->name} ({$a->matches}
من التطابقات).';
$string['checkmarkmail'] = '{$a->grader} نشر إفادة بشأن
تسليمك لعلامة التأشير في \'{$a->checkmark}\'

يمكنك مشاهدتها ملحقة بتسليمك لعلامة التأشير:

    {$a->url}';
$string['checkmarkmailhtml'] = '{$a->grader} نشر إفادة بشأن تسليمك لعلامة التأشير في \'<i>{$a->checkmark}</i>\'<br /><br /> يمكنك مشاهدتها ملحقة <a href="{$a->url}">بتسليمك لعلامة التأشير</a>.

    {$a->url}';
$string['checkmarkmailsmall'] = '{$a->grader} نشر إفادة بشأن
تسليمك لعلامة التأشير في \'{$a->checkmark}\'. يمكنك مشاهدتها ملحقة بتسليمك لعلامة التأشير';
$string['couldfixevent'] = 'تم بنجاح تثبيت الحدث ذي المُعرَّف {$a->id}، المسمى {$a->name}';
$string['count_individuals_mismatch'] = 'مقدار الأسماء الفردية ({$a->namecount}) لا يطابق مقدار التقديرات الفردية ({$a->gradecount})!';
$string['data_settings'] = 'إعدادات الطباعة';
$string['description'] = 'الوصف';
$string['eventexamplecreated'] = 'مثال تم إنشاؤه';
$string['eventexampledeleted'] = 'مثال تم حذفه';
$string['eventexampleupdated'] = 'مثال تم تحديثه';
$string['eventgradeupdated'] = 'تقدير تم تحديثه';
$string['eventsubmissionoverwritten'] = 'تسليم تمت الكتابة عليه';
$string['eventsubmissionsexported'] = 'تسليم تم تصديره';
$string['eventsubmissionupdated'] = 'تسليم تم تحديثه';
$string['eventviewprintpreview'] = 'استعراض طباعة تمت معاينته';
$string['eventviewsubmissions'] = 'تسليمات تمت معاينتها';
$string['examplenames'] = 'الأسماء الفردية';
$string['exporttemplates_help'] = 'التصدير السريع مع المظاهر مسبقة التهيئة<br />
<ul>
    <li><strong>الإعدادات المخصصة</strong><br />
        لا يجري استعمال أي مظهر، كل الإعدادات ينبغي إجراؤها يدويًا</li>
    <li><strong>قائمة التقييم البسيطة:</strong><br />
        اتجاه عمودي، خط صغير، مع العنوان/التذييل، الأسماء مطبوعة في سطر واحد<br />
        تحتوي على الأعمدة الآتية: [fullname, examples, grade]</li>
    <li><strong>قائمة التقييم الموسعة:</strong><br />
        اتجاه أفقي، خط صغير، مع العنوان/التذييل، الأسماء مطبوعة في سطر واحد<br />
        تحتوي على الأعمدة الآتية: [fullname, idnumber, examples, checked, grade]</li>
    <li><strong>قائمة التواقيع البسيطة:</strong><br />
        اتجاه عمودي، خط صغير، مع العنوان/التذييل، الأسماء مطبوعة في سطر واحد<br />
        تحتوي على الأعمدة الآتية: [fullname, examples, signature]</li>
    <li><strong>قائمة التواقيع الموسعة:</strong><br />
        اتجاه أفقي، خط صغير، مع العنوان/التذييل، الأسماء مطبوعة في سطر واحد<br />
        تحتوي على الأعمدة الآتية: [fullname, idnumber, examples, checked, grade, signature]</li>
</ul>';
$string['failedupdatefeedback'] = 'فشل تحديث إفادة التسليم للمستخدم {$a}';
$string['feedback'] = 'الإفادة';
$string['feedbackfromteacher'] = 'الإفادة من {$a}';
$string['feedbackupdated'] = 'إفادة التسليم تم تحديثها لـ {$a} من الأشخاص';
$string['flexiblenaming_help'] = 'إذا تم تفعيله، سيتم استعمال الأسماء والتقديرات الفردية لكل مثال.';
$string['forcesinglelinenames'] = 'فرض الأسماء بسطر واحد';
$string['gradingdue_help'] = 'التاريخ المتوقع لإكمال تصحيح التسليمات. هذا التاريخ يستعمل لمنح الأولوية في إشعارات دفة القيادة للمعلمين.';
$string['informstudents_help'] = 'إذا تم تفعيله، سيتلقى المشارك إشعاراً عن حالة حضوره.';
$string['latesubmissionsaccepted'] = 'مسموح حتى {$a}';
$string['page-mod-checkmark-view'] = 'الصفحة الرئيسية لوحدة العلامة المرجعية';
$string['page-mod-checkmark-x'] = 'كل صفحة لوحدة علامة التأشير';
$string['pagesize'] = 'التسليمات الظاهرة لكل صفحة';
$string['pagesize_help'] = 'إختر "المثالي" لأمثَلة توزيع مُدخلات القائمة وفقًا لحجم النص المحدد واتجاه الصفحة، هذا إذا كان هناك العديد من المشاركين المسجلين في مساقك.';
$string['pdfpageorientation'] = 'اتجاه الصفحة';
$string['pdfpagesize'] = 'التسليمات الظاهرة لكل صفحة';
$string['pdfpagesize_help'] = 'إختر "المثالي" لأمثَلة توزيع مُدخلات القائمة وفقًا لحجم النص المحدد واتجاه الصفحة، هذا إذا كان هناك العديد من المشاركين المسجلين في مساقك.';
$string['pdfprintheader'] = 'طباعة العنوان/التذييل';
$string['pdfprintheader_help'] = 'طباعة العنوان/التذييل إذا تم تأشيره';
$string['pdfprintheaderlong'] = 'طباعة العنوان/التذييل إذا تم تأشيره';
$string['pdftextsize'] = 'حجم النص';
$string['popupinnewwindow'] = 'إفتح في نافذة منبثقة';
$string['presentationfeedback'] = 'إفادة العرض التقديمي';
$string['presentationfeedback_table'] = 'الإفادة (عرض تقديمي)';
$string['presentationgrade_table'] = 'التقدير (عرض تقديمي)';
$string['presentationgrading_help'] = 'إذا تم تفعيله، يمكن تسجيل درجات العرض التقديمي بمثابة عناصر إضافية لمعلومات التقييم.';
$string['privacy:metadata:cutoffdate'] = 'التاريخ والوقت حتى تكون التسليمات ممكنة';
$string['privacy:metadata:feedback'] = 'الإفادة النصية المعطاة للمستخدم';
$string['privacy:metadata:feedback:timecreated'] = 'تاريخ ووقت إنشاء الإفادة';
$string['privacy:metadata:feedback:timemodified'] = 'آخر تاريخ ووقت تم فيه تعديل الإفادة';
$string['privacy:metadata:feedbacks'] = 'جدول يحتوي على بيانات إفادة المستخدم';
$string['privacy:metadata:format'] = 'تنسيق الإفادة النصية المعطاة للمستخدم';
$string['privacy:metadata:graderid'] = 'المستخدم الذي أعطى الإفادة';
$string['privacy:metadata:mailed'] = 'يشير إلى ما إذا تم إبلاغ المستخدم بشأن الإفادة';
$string['privacy:metadata:override:timecreated'] = 'تاريخ ووقت تجاوز التواريخ لهذا المستخدم';
$string['privacy:metadata:override:timemodified'] = 'آخر تاريخ ووقت تم فيه تجاوز التواريخ لهذا المستخدم';
$string['privacy:metadata:pref:forcesinglelinenames'] = 'الإعداد الافتراضي فيما إذا كان ينبغي فرض الأسماء بسطر واحد عند تصدير التسليمات أم لا.';
$string['privacy:metadata:pref:pageorientation'] = 'اتجاه الصفحة الافتراضي المستعمل عند عرض نموذج تصدير التسليمات.';
$string['privacy:metadata:presentationfeedback'] = 'الإفادة النصية المعطاة للعرض التقديمي للمستخدم';
$string['privacy:metadata:presentationformat'] = 'تنسيق الإفادة النصية المعطاة للعرض التقديمي للمستخدم';
$string['privacy:metadata:submission:timecreated'] = 'تاريخ ووقت إنشاء التسليم';
$string['privacy:metadata:submission:timemodified'] = 'آخر تاريخ ووقت تم فيه تعديل التسليم';
$string['privacy:metadata:timeavailable'] = 'الوقت منذ بدء فترة التسليم';
$string['privacy:path:feedback'] = 'الإفادة';
$string['quickgrade_help'] = 'إذا مُكّن، علامات تأشير متعددة يمكن تقييمها في صفحة واحدة. أضف التقديرات والتعليقات ثم انقر زر "حفظ كل إفاداتي" لحفظ كل التغييرات لهذه الصفحة.';
$string['saveallfeedback'] = 'حفظ كل إفاداتي';
$string['seperatenamecolumns_help'] = 'عند تمكينه، كل أجزاء الاسم الكامل المعروض (أي الاسم الأول واسم العائلة) ستتم تجزئتها إلى أعمدة.';
$string['str_userid'] = 'مُعرَّف الطالب';
$string['strallononepage'] = 'طباعة الكل في صفحة واحدة';
$string['strpapersizes'] = 'حجم الورقة';
$string['strsmall'] = 'صغير';
$string['strstdnames'] = 'الأسماء القياسية';
$string['strstdnamesdesc'] = 'أسماء الأمثلة إذا تم استعمال "الأسماء الفردية"';
$string['submissionfeedback'] = 'إفادة التسليم';
$string['viewfeedback'] = 'معاينة تقديرات علامة التأشير وإفاداتها';
