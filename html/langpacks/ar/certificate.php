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
 * Strings for component 'certificate', language 'ar', version '3.11'.
 *
 * @package     certificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['areaintro'] = 'مقدمة الشهادة';
$string['back'] = 'رجوع';
$string['bordergreen'] = 'أخضر';
$string['certificate'] = 'التحقق من ترميز الشهادة:';
$string['certificate:addinstance'] = 'إضافة عيِّنة الشهادة';
$string['certificate:manage'] = 'إدارة عيِّنة الشهادة';
$string['certificate:printteacher'] = 'أن يُدرج اسمه كمعلم في الشهادة إن كان إعداد طباعة المعلم مُفعلاً';
$string['certificate:student'] = 'استرجاع الشهادة';
$string['certificate:view'] = 'معاينة الشهادة';
$string['certificatename'] = 'اسم الشهادة';
$string['certificatereport'] = 'تقرير الشهادات';
$string['certificatesfor'] = 'شهادات';
$string['certificatetype'] = 'نوع الشهادة';
$string['coursetimereq_help'] = 'أدخل أقل فترة من الوقت بالدقائق، على الطالب أن يقضيها داخل المساق قبل أن يتسنى له تلقي الشهادة.';
$string['datefmt_help'] = 'إختر التنسيق الذي تريد أن يظهر به التاريخ في الشهادة، أو اختر الخيار الأخير ليكون التاريخ بالتنسيق العائد للغة الخاصة بالمستخدم.';
$string['deletissuedcertificates'] = 'حذف الشهادات الممنوحة';
$string['emailothers_help'] = 'أدخل عناوين البريد الالكتروني هنا، مفصولة بفوارز لمن عليهم تلقي تنبيهات عبر البريد كلما حصل الطلاب على شهادات.';
$string['emailstudenttext'] = 'المرفق هو شهادتك في {$a->course}.';
$string['emailteachermail'] = 'الطالب {$a->student} قد تلقى شهادته: \'{$a->certificate}\'
في {$a->course}.

يمكنك مراجعتها هنا:

    {$a->url}';
$string['emailteachermailhtml'] = 'الطالب {$a->student} قد تلقى شهادته: \'<i>{$a->certificate}</i>\'
في {$a->course}.

يمكنك مراجعتها هنا:

    <a href="{$a->url}">تقرير الشهادة</a>.';
$string['emailteachers_help'] = 'عند تمكينه، سيتم تنبيه المعلمين عبر البريد الالكتروني كلما تلقى الطلاب شهاداتهم.';
$string['entercode'] = 'أدخل ترميز الشهادة للتحقق منه:';
$string['fontsans_desc'] = 'نوع الخط Sans-serif للشهادات ذات الخطوط المُضمَّنة';
$string['fontserif_desc'] = 'نوع الخط Serif للشهادات ذات الخطوط المُضمَّنة';
$string['getcertificate'] = 'إحصل على شهادتك';
$string['gradefmt_help'] = 'توجد هناك ثلاثة تنسيقات إذا اخترتَ طباعة التقدير في الشهادة:

نسبة مئوية: يطبع التقدير بشكل نسبة مئوية.
نقاط: يطبع القيمة الرقمية للتقدير.
بالحروف: يطبع التقدير بشكل حروف.';
$string['gradepercent'] = 'نسبة مئوية';
$string['incompletemessage'] = 'من أجل تنزيل شهادتك، ينبغي عليك أولاً إكمال كل النشاطات المطلوبة. يرجى العودة إلى المساق لمتابعة عملك فيه.';
$string['lastviewed'] = 'لقد حصلتَ على هذه الشهادة في:';
$string['modulename'] = 'الشهادة';
$string['modulename_help'] = 'هذه الوحدة تسمح بالتوليد التلقائي للشهادات بناءً على الشروط المعرفة مسبقًا من قبل المعلم.';
$string['modulenameplural'] = 'الشهادات';
$string['mycertificates'] = 'شهاداتي';
$string['nocertificates'] = 'لا توجد شهادات';
$string['nocertificatesissued'] = 'لا توجد شهادات ممنوحة';
$string['nocertificatesreceived'] = 'لم يتلقَّ أي شهادات من أي مساق.';
$string['notfound'] = 'تعذر التحقق من رقم الشهادة.';
$string['notreceived'] = 'لم تتلقَّ هذه الشهادة';
$string['opendownload'] = 'أنقر الزر أدناه لحفظ شهادتك في حاسوبك.';
$string['openemail'] = 'أنقر الزر أدناه وشهادتك سترسل إليك كمرفق برسالة بريد الكتروني.';
$string['openwindow'] = 'أنقر الزر أدناه لفتح شهادتك في نافذة مستعرض جديدة.';
$string['orientation_help'] = 'إختر ما إذا كنت تريد اتجاه صفحة شهادتك أن يكون طوليًا أم عرضيًا.';
$string['pluginadministration'] = 'إدارة الشهادة';
$string['pluginname'] = 'الشهادة';
$string['printdate_help'] = 'هذا هو التاريخ الذي ستتم طباعته، لو تم تحديد تاريخ الطباعة. إذا تم اختيار تاريخ إكمال المقرر الدراسي لكن الطالب لم يكمله بعد، ستتم طباعة تاريخ تلقي الشهادة. يمكنك أيضًا اختيار طباعة التاريخ بناءً على موعد منح الدرجة للنشاط. إذا تم منح الشهادة قبل تقييم النشاط، ستتم طباعة تاريخ تلقيها.';
$string['printgrade_help'] = 'يمكنك اختيار أي مفردة تقييم متاحة في المقرر الدراسي من سجل التقديرات لطباعة درجة المستخدم التي تلقاها من تلك المفردة في الشهادة. يتم عرض مفردات التقييم بالترتيب الذي تظهر به في سجل التقديرات. إختر تنسيق الدرجة أدناه.';
$string['printhours_help'] = 'أدخل هنا عدد ساعات الرصيد المراد طباعته في الشهادة.';
$string['printnumber_help'] = 'يمكن طباعة رمز فريد من 10 مراتب مكون من حروف وأرقام عشوائية على الشهادة. يمكن لاحقًا التحقق من هذا الرمز عبر مقارنته مع الرمز المعروض في تقرير الشهادات.';
$string['printoutcome_help'] = 'يمكنك اختيار أي من مخرجات المساق لطباعة اسمها والمستخدم الذي تلقاها في الشهادة. كمثال على ذلك: مخرجات الواجب: بارع.';
$string['printseal'] = 'الختم أو صورة الشعار';
$string['printwmark_help'] = 'يمكن وضع ملف علامة مائية في خلفية الشهادة. العلامة المائية هي صورة باهتة وقد تكون شعار، ختم، شارة، كلمة أو أي شيء تريد استعماله كصورة خلفية.';
$string['receivedcerts'] = 'الشهادات المتلقاة';
$string['reissuecert'] = 'إعادة منح الشهادات';
$string['reissuecert_help'] = 'إذا اخترت نعم، فسيتم منح الشهادة مرة أخرى بتاريخ جديد، علامة جديدة، ورمز جديد في كل مرة ينقر فيها المستخدم على رابط الشهادة. على الرغم من وجود جدول يُظهر تواريخ التلقي الماضية، لن يتوفر زر لمراجعتها بالنسبة إلى المستخدمين. فقط الشهادة الممنوحة مؤخرًا ستظهر في تقرير الشهادة.';
$string['removecert'] = 'تمت إزالة الشهادات الممنوحة';
$string['reportcert'] = 'الإبلاغ عن الشهادات';
$string['reportcert_help'] = 'إذا اخترت نعم هنا، فسيتم إظهار تاريخ التلقي، الرمز، واسم المساق الخاصين بهذه الشهادة في تقارير شهادة المستخدم. إذا اخترت طباعة العلامة في هذه الشهادة، فستظهر تلك العلامة أيضًا في تقريرها.';
$string['requiredtimenotmet'] = 'عليك قضاء ما لا يقل عن {$a->requiredtime} من الدقائق في المساق قبل أن تتمكن من الوصول إلى هذه الشهادة';
$string['requiredtimenotvalid'] = 'الوقت المطلوب ينبغي أن يكون رقمًا صالحًا أكبر من 0';
$string['reviewcertificate'] = 'مراجعة شهادتك';
$string['savecert'] = 'حفظ الشهادات';
$string['savecert_help'] = 'إذا اخترتَ هذا الخيار، فسيتم حفظ نسخة من ملف PDF الخاص بشهادة كل مستخدم في مجلد بيانات المساق moddata لتلك الشهادة. سيتم عرض رابط في تقرير الشهادة لكل شهادة مستخدم محفوظة.';
$string['summaryofattempts'] = 'ملخص الشهادات المتلقاة سابقًا';
$string['title'] = 'شهادة إنجاز';
$string['verifycertificate'] = 'تحقق من الشهادة';
$string['viewcertificateviews'] = 'معاينة {$a} من الشهادات الممنوحة';
$string['viewed'] = 'لقد تلقيتَ هذه الشهادة في:';
$string['viewtranscript'] = 'معاينة الشهادات';
