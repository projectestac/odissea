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
 * Strings for component 'simplecertificate', language 'ar', version '4.1'.
 *
 * @package     simplecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['awardedsubject'] = 'إشعار الشهادة الممنوحة: {$a->certificate} تم منحها إلى {$a->student}';
$string['bulkbuttonlabel'] = 'إرسل';
$string['cantdeleteissue'] = 'خطأ عند إزالة الشهادات الممنوحة';
$string['cantissue'] = 'الشهادة لا يمكن منحها لأن المستخدم لا يلبي شروط النشاط';
$string['certificateimage'] = 'ملف صورة الشهادة';
$string['certificateimage_help'] = 'هذه هي الصورة التي ستستعمل في الشهادة';
$string['certificatename'] = 'اسم الشهادة';
$string['certificatename_help'] = 'اسم الشهادة';
$string['certificatenot'] = 'تعذر العثور على عيِّنة الشهادة البسيطة';
$string['certificatetext'] = 'نص الشهادة';
$string['certificatetext_help'] = 'هذا هو النص الذي سيتم استعماله في خلف الشهادة. سيتم استبدال بعض الكلمات الخاصة بمتغيرات، مثل اسم المساق، اسم الطالب، التقدير...
وهذه هي:
<ul>
<li>{USERNAME} -> الاسم الكامل للمستخدم</li>
<li>{COURSENAME} -> الاسم الكامل للمساق (أو تسمية مُعرفة بديلة للمساق)</li>
<li>{GRADE} -> الدرجة المنسقة</li>
<li>{DATE} -> التاريخ المنسق</li>
<li>{OUTCOME} -> مخرجات التعلم</li>
<li>{TEACHERS} -> قائمة المعلمين</li>
<li>{IDNUMBER} -> رقم مُعرَّف المستخدم</li>
<li>{FIRSTNAME} -> الاسم الأول للمستخدم</li>
<li>{LASTNAME} -> الاسم الأخير للمستخدم</li>
<li>{EMAIL} -> البريد الالكتروني للمستخدم</li>
<li>{ICQ} -> ICQ للمستخدم</li>
<li>{SKYPE} -> Skype للمستخدم</li>
<li>{YAHOO} -> yahoo messenger للمستخدم</li>
<li>{AIM} -> AIM للمستخدم</li>
<li>{MSN} -> MSN للمستخدم</li>
<li>{PHONE1} -> رقم الهاتف الأول للمستخدم</li>
<li>{PHONE2} -> رقم الهاتف الثاني للمستخدم</li>
<li>{INSTITUTION} -> مؤسسة المستخدم</li>
<li>{DEPARTMENT} -> قسم المستخدم</li>
<li>{ADDRESS} -> عنوان المستخدم</li>
<li>{CITY} -> مدينة المستخدم</li>
<li>{COUNTRY} -> بلد المستخدم</li>
<li>{URL} -> الصفحة الرئيسية للمستخدم</li>
<li>{CERTIFICATECODE} -> نص الترميز الفريد للشهادة</li>
<li>{USERROLENAME} -> تسمية دور المستخدم في المساق</li>
<li>{TIMESTART} -> تاريخ بدء انضمام المستخدم إلى المساق</li>
<li>{USERIMAGE} -> صورة الملف الشخصي للمستخدم</li>
<li>{USERRESULTS} -> نتائج المستخدم (التقديرات) في نشاطات المساق الأخرى</li>
<li>{PROFILE_xxxx} -> الحقول المخصصة للملف الشخصي للمستخدم</li>
</ul>
من أجل استعمال الحقول المخصصة للملف الشخصي عليك استعمال البادئة "PORFILE_"، على سبيل المثال: سبق وأنت قمت بإنشاء حقل ملف شخصي مخصص ذي الاسم المختصر "birthday"، لذلك سيكون النص المستعمل في الشهادة بالشكل {PROFILE_BIRTHDAY}.
يمكن للنص استعمال مُعلَّمات html الأساسية، الخطوط الأساسية، الجداول، ولكن تجنب أي تعريفات للموضع.';
$string['certificatetextx'] = 'الموضع الأفقي لنص الشهادة';
$string['certificatetexty'] = 'الموضع العمودي لنص الشهادة';
$string['certificateverification'] = 'التحقق من الشهادة';
$string['certlifetime'] = 'الإبقاء على الشهادات الممنوحة لمدة: (بالأشهر)';
$string['certlifetime_help'] = 'هذا يحدد الفترة الزمنية التي تريد فيها الإبقاء على الشهادات الممنوحة. يتم تلقائيًا حذف الشهادات الممنوحة الأقدم من هذا العمر.';
$string['codex'] = 'الموضع الأفقي لرمز QR للشهادة';
$string['codey'] = 'الموضع العمودي لرمز QR للشهادة';
$string['coursename'] = 'الاسم البديل للمساق';
$string['coursename_help'] = 'الاسم البديل للمساق';
$string['coursetimereq_help'] = 'أدخل أقل فترة من الوقت بالدقائق، على الطالب أن يقضيها داخل المساق قبل أن يتسنى له تلقي الشهادة.';
$string['defaultperpage'] = 'لكل صفحة';
$string['defaultperpage_help'] = 'عدد الشهادات المعروضة لكل صفحة (الأقصى 200)';
$string['deletissuedcertificates'] = 'حذف الشهادات الممنوحة';
$string['delivery_help'] = 'حدد الكيفية التي تريد أن يتلقى بها طلابك شهاداتهم.
<ul>
<li>فتح بالمستعرض: يفتح الشهادة في نافذة جديدة للمستعرض.</li>
<li>فرض التنزيل: يفتح نافذة تنزيل الملف بالمستعرض.</li>
<li>إرسال بالبريد: هذا الخيار يرسل الشهادة إلى الطالب كمرفق بالرسالة.</li>
<li>بعد أن يتلقى المستخدم شهادته، إذا قام بالنقر على رابط الشهادة من الصفحة الرئيسية للمساق، سيجد تاريخ تلقي الشهادة وسيتمكن من مراجعتها.</li>
</ul>';
$string['emailothers_help'] = 'أدخل عناوين البريد الالكتروني هنا، مفصولة بفوارز لمن ينبغي تنبيههم بريديًا كلما تلقى الطلاب شهادة.';
$string['emailstudentsubject'] = 'شهادتك في {$a->course}';
$string['emailstudenttext'] = 'مرحبًا {$a->username}،

		المرفق هو شهادتك في {$a->course}.


هذه رسالة تلقائية - لا ترد عليها رجاءً';
$string['emailteachermail'] = '{$a->student} قد تلقى شهادته: \'{$a->certificate}\'
في {$a->course}.

يمكنك مراجعتها هنا:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->student} قد تلقى شهادته: \'<i>{$a->certificate}</i>\'
في {$a->course}.

يمكنك مراجعتها هنا:

    <a href="{$a->url}">Certificate Report</a>.';
$string['emailteachers_help'] = 'عند تمكينه، سيتم تنبيه المعلمين عبر البريد الالكتروني كلما تلقى الطلاب شهادة.';
$string['enablesecondpage'] = 'تمكين الصفحة الخلفية للشهادة';
$string['enablesecondpage_help'] = 'تمكين تحرير الصفحة الخلفية من الشهادة، عند تعطيله، ستقتصر الصفحة الخلفية على طباعة ترميز QR (إذا تم تمكين ترميز QR)';
$string['eventcertificate_verified'] = 'الشهادة تم التحقق منها';
$string['eventcertificate_verified_description'] = 'المستخدم ذو المُعرَّف {$a->userid} تحقق من الشهادة ذات المُعرَّف {$a->certificateid}، الممنوحة إلى المستخدم ذي المُعرَّف {$a->certiticate_userid}.';
$string['getcertificate'] = 'إحصل على الشهادة';
$string['gradefmt_help'] = 'توجد هناك ثلاثة تنسيقات إذا اخترتَ طباعة التقدير في الشهادة:
<ul>
<li>نسبة مئوية: يطبع التقدير بشكل نسبة مئوية.</li>
<li>نقاط: يطبع القيمة الرقمية للتقدير.</li>
<li>بالحروف: يطبع التقدير بشكل حروف.</li>
</ul>';
$string['gradepercent'] = 'نسبة مئوية';
$string['height'] = 'إرتفاع الشهادة';
$string['invalidcode'] = 'رمز الشهادة غير صحيح';
$string['issuedcertificatenotfound'] = 'تعذر العثور على الشهادة الممنوحة';
$string['issueddownload'] = 'الشهادة الممنوحة [المُعرَّف: {$a}] تم تنزيلها';
$string['issuedview'] = 'الشهادات الممنوحة';
$string['keywords'] = 'الشهادة، المساق، pdf، مودل';
$string['modulename'] = 'شهادة بسيطة';
$string['modulename_help'] = 'وحدة نشاط الشهادة البسيطة تمكن المعلم من إنشاء شهادة مخصصة يمكن منحها إلى المشاركين الذين أكملوا المتطلبات المحددة من قبل المعلم.';
$string['modulenameplural'] = 'الشهادات البسيطة';
$string['multipdf'] = 'تنزيل الشهادات بملف مضغوط';
$string['nocertificatesissued'] = 'ليست هناك شهادات ممنوحة';
$string['nodelivering'] = 'بلا توصيل، المستخدم سيتلقى هذه الشهادة باستعمال طرق أخرى';
$string['notreceived'] = 'لا شهادات ممنوحة';
$string['onepdf'] = 'تنزيل الشهادات بملف PDF واحد';
$string['opendownload'] = 'أنقر الرابط أدناه لحفظ شهادتك في حاسبتك.';
$string['openemail'] = 'أنقر الرابط أدناه وسيتم إرسال شهادتك إليك كمرفق برسالة بريد الكتروني.';
$string['openwindow'] = 'أنقر الزر أدناه لفتح شهادتك في نافذة مستعرض جديدة.';
$string['pluginadministration'] = 'إدارة الشهادة';
$string['pluginname'] = 'الشهادة البسيطة';
$string['printdate'] = 'طباعة التاريخ';
$string['printgrade'] = 'طباعة التقدير';
$string['printoutcome'] = 'طباعة المخرجات';
$string['printqrcode'] = 'طباعة رمز QR للشهادة';
$string['printqrcode_help'] = 'طباعة رمز QR للشهادة (أم لا)';
$string['qrcodefirstpage'] = 'طباعة رمز QR في الصفحة الأولى';
$string['qrcodefirstpage_help'] = 'طباعة رمز QR في الصفحة الأولى';
$string['qrcodeposition'] = 'موضع رمز QR في الشهادة';
$string['qrcodeposition_help'] = 'تلك هي إحداثيات XY (بالمليمتر) لرمز QR في الشهادة';
$string['requiredtimenotmet'] = 'ينبغي أن تقضي ما لا يقل عن {$a->requiredtime} من الدقائق في هذا المساق لتتلقى هذه الشهادة';
$string['secondimage'] = 'ملف الصورة الخلفية للشهادة';
$string['secondimage_help'] = 'هذه هي الصورة التي ستستعمل في خلفية الشهادة';
$string['secondpageoptions'] = 'الصفحة الخلفية للشهادة';
$string['secondpagetext'] = 'النص الخلفي للشهادة';
$string['secondpagex'] = 'الموضع الأفقي للنص الخلفي للشهادة';
$string['secondpagey'] = 'الموضع العمودي للنص الخلفي للشهادة';
$string['secondtextposition'] = 'موضع النص الخلفي للشهادة';
$string['secondtextposition_help'] = 'تلك هي إحداثيات XY (بالمليمتر) للنص الخلفي للشهادة';
$string['simplecertificate:addinstance'] = 'إضافة نشاط الشهادة البسيطة';
$string['simplecertificate:manage'] = 'إدارة نشاط الشهادة البسيطة';
$string['simplecertificate:view'] = 'معاينة نشاط الشهادة البسيطة';
$string['size'] = 'حجم الشهادة';
$string['size_help'] = 'تلك هي مقدار الطول والعرض (بالمليمتر) للشهادة، الحجم الافتراضي هو ورقة A4 بالعرض';
$string['standardview'] = 'منح شهادة إختبارية';
$string['summaryofattempts'] = 'ملخص الشهادات المتلقاة سابقًا';
$string['textposition'] = 'موضع نص الشهادة';
$string['textposition_help'] = 'تلك هي إحداثيات XY (بالمليمتر) لنص الشهادة';
$string['verifycertificate'] = 'التحقق من الشهادة';
$string['viewcertificateviews'] = 'معاينة {$a} من الشهادات الممنوحة';
$string['width'] = 'عُرض الشهادة';
