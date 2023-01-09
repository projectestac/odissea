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
 * Strings for component 'customcert', language 'ar', version '3.11'.
 *
 * @package     customcert
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcertpage'] = 'إضافة صفحة';
$string['alignleft'] = 'المحاذاة يسارًا';
$string['alignment'] = 'المحاذاة';
$string['alignment_help'] = 'هذه الخاصية تضبط المحاذاة الأفقية للعنصر. بعض العناصر قد لا تدعمه، بينما سلوك أخرى قد يختلف.';
$string['alignright'] = 'المحاذاة يمينًا';
$string['cannotverifyallcertificates'] = 'ليست لديك صلاحية التحقق من كل الشهادات في الموقع.';
$string['certificate'] = 'الشهادة';
$string['coursetimereq_help'] = 'أدخل أقل فترة من الوقت بالدقائق، على الطالب أن يقضيها داخل المساق قبل أن يتسنى له تلقي الشهادة.';
$string['customcert:addinstance'] = 'إضافة عَيِّنة جديدة من الشهادة المخصصة';
$string['customcert:manage'] = 'إدارة الشهادة المخصصة';
$string['customcert:managerequiredtime'] = 'إعداد إدارة الوقت المطلوب';
$string['customcert:receiveissue'] = 'تلقي الشهادة';
$string['customcert:verifyallcertificates'] = 'التحقق من كل الشهادات في الموقع';
$string['customcert:verifycertificate'] = 'التحقق من الشهادات';
$string['customcert:view'] = 'معاينة الشهادة المخصصة';
$string['customcert:viewallcertificates'] = 'معاينة كل الشهادات';
$string['customcertsettings'] = 'إعدادات الشهادة المخصصة';
$string['deleteissueconfirm'] = 'هل أنت متأكد من رغبتك في حذف هذا المنح للشهادة؟';
$string['deleteissuedcertificates'] = 'حذف الشهادات الممنوحة';
$string['deletepageconfirm'] = 'هل أنت متأكد من رغبتك في حذف صفحة الشهادة هذه؟';
$string['deletetemplateconfirm'] = 'هل أنت متأكد من رغبتك في حذف قالب الشهادة هذا؟';
$string['description'] = 'الوصف';
$string['duplicatetemplateconfirm'] = 'هل أنت متأكد من رغبتك في تكرار قالب الشهادة هذا؟';
$string['editcustomcert'] = 'تحرير الشهادة';
$string['elementname_help'] = 'سيكون هذا هو الاسم المستعمل للتعرف على هذا العنصر عند تحرير الشهادة. ملاحظة: لن يتم عرضه في ملف PDF.';
$string['elements_help'] = 'هذه هي قائمة العناصر التي سيتم عرضها في الشهادة.

يرجى ملاحظة: العناصر مقدمة بهذا الترتيب. يمكن تغيير الترتيب باستعمال الأسهم المحاذية لكل عنصر.';
$string['emailnonstudentbody'] = 'المرفق هو الشهادة \'{$a->certificatename}\' العائدة لـ \'{$a->userfullname}\' في المساق \'{$a->coursefullname}\'.';
$string['emailnonstudentbodyplaintext'] = 'المرفق هو الشهادة \'{$a->certificatename}\' العائدة لـ \'{$a->userfullname}\' في المساق \'{$a->coursefullname}\'.';
$string['emailnonstudentcertificatelinktext'] = 'معاينة تقرير الشهادة';
$string['emailnonstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailothers_help'] = 'عند إعداده فإنه يرسل إلى العناوين البريدية المدرجة هنا (مفصولة بفوارز) نسخة من الشهادة عند توافرها. <strong>تحذير:</strong> إعداد هذا الحقل قبل أن تكون قد أكملت إنشاء الشهادة سيرسل إلى تلك العناوين شهادة غير مكتملة.';
$string['emailstudentbody'] = 'المرفق هو شهادتك \'{$a->certificatename}\' في المساق \'{$a->coursefullname}\'.';
$string['emailstudentbodyplaintext'] = 'المرفق هو شهادتك \'{$a->certificatename}\' في المساق \'{$a->coursefullname}\'.';
$string['emailstudentcertificatelinktext'] = 'معاينة الشهادة';
$string['emailstudents_help'] = 'عند إعداده فإنه يرسل إلى الطلاب نسخة من الشهادة عند توافرها. <strong>تحذير:</strong> ضبطه على \'نعم\' قبل أن تكون قد أكملت إنشاء الشهادة سيرسل إلى الطالب شهادة غير مكتملة.';
$string['emailstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailteachers_help'] = 'عند إعداده فإنه يرسل إلى المعلمين نسخة من الشهادة عند توافرها. <strong>تحذير:</strong> ضبطه على \'نعم\' قبل أن تكون قد أكملت إنشاء الشهادة سيرسل إلى المعلم شهادة غير مكتملة.';
$string['fontsize'] = 'الحجم';
$string['fontsize_help'] = 'حجم الخط بالنقاط.';
$string['getcustomcert'] = 'معاينة الشهادة';
$string['height_help'] = 'هذا يمثل إرتفاع الشهادة بصيغة PDF بالمليمتر. كمرجع، قطعة الورق بحجم A4 إرتفاعها 297 ملم والورقة بحجم الرسالة إرتفاعها 279 ملم.';
$string['invalidheight'] = 'ينبغي أن يكون الارتفاع رقماً صالحاً أكبر من 0.';
$string['invalidmargin'] = 'ينبغي أن يكون الهامش رقماً صالحاً أكبر من 0.';
$string['invalidwidth'] = 'ينبغي أن يكون العرض رقماً صالحاً أكبر من 0.';
$string['leftmargin'] = 'الهامش الأيسر';
$string['leftmargin_help'] = 'هذا يمثل الهامش الأيسر من الشهادة بصيغة PDF بالملم.';
$string['loadtemplatemsg'] = 'هل أنت متأكد من رغبتك في تحميل هذا القالب؟ هذا سيزيل أي صفحات وعناصر موجودة في هذه الشهادة.';
$string['managetemplatesdesc'] = 'هذا الرابط سيأخذك إلى شاشة جديدة حيث ستتمكن من إدارة القوالب المستعملة من قبل نشاطات الشهادات المخصصة في المساق.';
$string['modulename'] = 'الشهادة المخصصة';
$string['modulename_help'] = 'هذه الوحدة تسمح بالتوليد التلقائي للشهادات بصيغة PDF.';
$string['modulenameplural'] = 'الشهادات المخصصة';
$string['mycertificates'] = 'شهاداتي';
$string['mycertificatesdescription'] = 'تلك هي الشهادات التي منحتها إما عبر البريد الالكتروني أو التنزيل اليدوي.';
$string['name'] = 'الاسم';
$string['nocustomcerts'] = 'لا توجد شهادات في هذا المساق';
$string['page'] = 'صفحة {$a}';
$string['pluginadministration'] = 'إدارة الشهادة المخصصة';
$string['pluginname'] = 'الشهادة المخصصة';
$string['preventcopy'] = 'مَنع النسخ';
$string['preventcopy_desc'] = 'تمكين الحماية من إجراء النسخ.';
$string['preventmodify'] = 'مَنع التعديل';
$string['preventmodify_desc'] = 'تمكين الحماية من إجراء التعديل.';
$string['preventprint'] = 'مَنع الطباعة';
$string['preventprint_desc'] = 'تمكين الحماية من إجراء الطباعة.';
$string['privacy:metadata:customcert_issues'] = 'قائمة الشهادات الممنوحة';
$string['privacy:metadata:customcert_issues:code'] = 'الرمز العائد للشهادة';
$string['privacy:metadata:customcert_issues:customcertid'] = 'مُعرَّف الشهادة';
$string['privacy:metadata:customcert_issues:emailed'] = 'فيما إذا تم إرسال الشهادة بالبريد أم لا';
$string['privacy:metadata:customcert_issues:timecreated'] = 'وقت إصدار الشهادة';
$string['privacy:metadata:customcert_issues:userid'] = 'مُعرَّف المستخدم الذي مُنِحَ الشهادة';
$string['rearrangeelementsheading'] = 'استعمل السحب والإفلات مع العناصر لتغيير مواضعها في الشهادة.';
$string['requiredtimenotmet'] = 'ينبغي أن تقضي على الأقل {$a->requiredtime} من الدقائق في المقرر الدراسي قبل أن تتمكن من الوصول إلى هذه الشهادة.';
$string['rightmargin'] = 'الهامش الأيمن';
$string['rightmargin_help'] = 'هذا يمثل الهامش الأيمن من الشهادة بصيغة PDF بالملم.';
$string['search:activity'] = 'الشهادة المخصصة - معلومات النشاط';
$string['setprotection_help'] = 'إختر الإجراءات التي ترغب بمنع المستخدمين من القيام بها مع هذه الشهادة.';
$string['taskemailcertificate'] = 'يعالج إرسال الشهادات عبر البريد الالكتروني.';
$string['topleft'] = 'أعلى اليسار';
$string['uploadimagedesc'] = 'هذا الرابط سيأخذك إلى شاشة جديدة حيث ستتمكن من رفع الصور. الصور المرفوعة بهذه الطريقة ستكون متاحة على امتداد موقعك لكل المستخدمين القادرين على إنشاء الشهادات.';
$string['verifyallcertificates'] = 'السماح بالتحقق من كل الشهادات';
$string['verifyallcertificates_desc'] = 'عند تمكين هذا الإعداد، سيتمكن أي شخص (حتى لو لم يكن قد سجل دخوله) من زيارة الرابط \'{$a}\' من أجل التحقق من أي شهادة في الموقع بدلاً من الحاجة للذهاب إلى رابط التحقق لكل شهادة.

ملاحظة - هذا ينطبق فقط على الشهادات التي تم فيها ضبط الإعداد \'السماح لأي شخص بالتحقق من الشهادة\' على \'نعم\' في إعداداتها.';
$string['verifycertificate'] = 'التحقق من الشهادة';
$string['verifycertificateanyone'] = 'السماح لأي شخص بالتحقق من الشهادة';
$string['verifycertificateanyone_help'] = 'هذا الإعداد يُمكِّن أي شخص لديه رابط التحقق من الشهادة (بضمنهم المستخدمين غير المسجلين لدخولهم) من التحقق من الشهادة.';
$string['verifycertificatedesc'] = 'هذا الرابط يأخذك إلى شاشة جديدة حيث يمكنك التحقق من الشهادات في الموقع';
$string['width_help'] = 'هذا يمثل عُرض الشهادة بصيغة PDF بالمليمتر. كمرجع، قطعة الورق بحجم A4 عرضها 210 ملم والورقة بحجم الرسالة عرضها 216 ملم.';
