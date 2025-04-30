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
 * Strings for component 'certificate', language 'ar', version '4.4'.
 *
 * @package     certificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlinklabel'] = 'إضافة خيار نشاط مرتبط آخر';
$string['addlinktitle'] = 'أنقر لإضافة خيار نشاط مرتبط آخر';
$string['areaintro'] = 'مقدمة الشهادة';
$string['awarded'] = 'ممنوحة';
$string['awardedto'] = 'ممنوحة إلى';
$string['back'] = 'رجوع';
$string['border'] = 'الحدود';
$string['borderblack'] = 'أسود';
$string['borderblue'] = 'أزرق';
$string['borderbrown'] = 'بني';
$string['bordercolor'] = 'خطوط الحدود';
$string['bordercolor_help'] = 'طالما أن الصور يمكنها زيادة حجم ملف PDF بشكل ملحوظ، قد تختار طباعة حدود مكونة من خطوط بدلاً من استعمال صورة للحدود (تأكد من وضع خيار صورة الحدود على \'لا\') خيار خطوط الحدود سيطبع حدودًا لطيفة مكونة من ثلاثة خطوط ذات عرض متفاوت باللون الذي تحدده';
$string['bordergreen'] = 'أخضر';
$string['borderlines'] = 'الخطوط';
$string['borderstyle'] = 'صورة الحدود';
$string['borderstyle_help'] = 'يسمح لك خيار صورة الحدود باختيار صورة الحدود من المجلد certificate/pix/borders. إختر صورة الحدود التي تريدها محيطة بحوافي الشهادة أو إختر \'بلا حدود\'';
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
$string['certificatetype_help'] = 'هذا هو المكان الذي تحدد فيه تخطيط الشهادة. يتضمن مجلد نوع الشهادة أربع شهادات افتراضية:
تطبع A4 Embedded على ورق بحجم A4 بخط مضمن.
تطبع A4 Non-Embedded على ورق بحجم A4 بدون خطوط مضمنة.
تطبع Letter Embedded على ورق بحجم Letter بخط مضمن.
تطبع Letter Non-Embedded على ورق بحجم Letter بدون خطوط مضمنة.

تستخدم الأنواع غير المضمنة خطوط Helvetica وTimes. إذا كنت تشعر أن المستخدمين لن يمتلكوا هذه الخطوط في حواسيبهم، أو إذا كانت لغتك تستعمل أحرفًا أو رموزًا لا تستوعبها خطوط Helvetica وTimes، فاختر نوعًا مضمنًا. تستعمل الأنواع المضمنة خطوط Dejavusans وDejavuserif. سيؤدي ذلك إلى جعل ملفات pdf كبيرة إلى حد ما؛ وبالتالي لا يُنصح باستعمال نوع مضمن إلا إذا كان ذلك ضروريًا.

يمكن إضافة مجلدات أنواع جديدة إلى الشهادة';
$string['certify'] = 'هذه شهادة بأن';
$string['code'] = 'النص البرمجي';
$string['completiondate'] = 'إكمال المساق';
$string['course'] = 'لأجل';
$string['coursegrade'] = 'تقدير المساق';
$string['coursename'] = 'المساق';
$string['coursetimereq'] = 'الدقائق المطلوبة في المساق';
$string['coursetimereq_help'] = 'أدخل أقل فترة من الوقت بالدقائق، على الطالب أن يقضيها داخل المساق قبل أن يتسنى له تلقي الشهادة.';
$string['credithours'] = 'رصيد الساعات';
$string['customtext'] = 'النص المخصص';
$string['customtext_help'] = 'إذا كنت تريد أن تطبع الشهادة أسماء مختلفة للمعلمين عن أولئك الذين تم تعيينهم بدور المعلم، فلا تحدد خيار طباعة المعلم أو أي صورة توقيع باستثناء صورة الخط. أدخل أسماء المعلمين في مربع النص هذا كما تريد ظهورها. بشكل افتراضي، يتم وضع هذا النص في الجزء الأيسر السفلي من الشهادة. تتوفر علامات HTML التالية: &lt;br&gt;، &lt;p&gt;، &lt;b&gt;، &lt;i&gt;، &lt;u&gt;، &lt;img&gt; (src وwidth (أو height) إلزاميان)، &lt;a&gt; (href إلزامي)، &lt;font&gt; (السمات المحتملة هي: color، (رمز اللون السداسي عشري)، face، (arial، times، courier، helvetica، symbol)).';
$string['date'] = 'شغال';
$string['datefmt'] = 'صيغة التاريخ';
$string['datefmt_help'] = 'إختر التنسيق الذي تريد أن يظهر به التاريخ في الشهادة، أو اختر الخيار الأخير ليكون التاريخ بالتنسيق العائد للغة الخاصة بالمستخدم.';
$string['datehelp'] = 'التاريخ';
$string['deletissuedcertificates'] = 'حذف الشهادات الممنوحة';
$string['delivery'] = 'التوصيل';
$string['delivery_help'] = 'إختر هنا الطريقة التي تريد أن يحصل بها طلابك على شهاداتهم.
فتح في المتصفح: يفتح الشهادة في نافذة متصفح جديدة.
فرض التنزيل: يفتح نافذة تنزيل ملف المتصفح.
إرسال الشهادة عبر البريد الإلكتروني: يؤدي تحديد هذا الخيار إلى إرسال الشهادة إلى الطالب كمرفق بريد إلكتروني.
بعد أن يتلقى المستخدم شهادته، إذا نقر على رابط الشهادة من الصفحة الرئيسية للمساق، فسيشاهد تاريخ استلامه للشهادة وسيتمكن من مراجعة الشهادة التي استلمها';
$string['designoptions'] = 'خيارات التصميم';
$string['download'] = 'فرض التنزيل';
$string['emailcertificate'] = 'البريد الالكتروني';
$string['emailothers'] = 'مراسلة الآخرين';
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
$string['emailteachers'] = 'مراسلة المعلمين';
$string['emailteachers_help'] = 'عند تمكينه، سيتم تنبيه المعلمين عبر البريد الالكتروني كلما تلقى الطلاب شهاداتهم.';
$string['entercode'] = 'أدخل ترميز الشهادة للتحقق منه:';
$string['fontsans'] = 'نوع الخط Sans-serif';
$string['fontsans_desc'] = 'نوع الخط Sans-serif للشهادات ذات الخطوط المُضمَّنة';
$string['fontserif'] = 'عائلة الخط Sans-serif';
$string['fontserif_desc'] = 'نوع الخط Serif للشهادات ذات الخطوط المُضمَّنة';
$string['getcertificate'] = 'إحصل على شهادتك';
$string['grade'] = 'التقدير';
$string['gradedate'] = 'تاريخ التقدير';
$string['gradefmt'] = 'صيغة التقدير';
$string['gradefmt_help'] = 'توجد هناك ثلاثة تنسيقات إذا اخترتَ طباعة التقدير في الشهادة:

نسبة مئوية: يطبع التقدير بشكل نسبة مئوية.
نقاط: يطبع القيمة الرقمية للتقدير.
بالحروف: يطبع التقدير بشكل حروف.';
$string['gradeletter'] = 'التقدير بالحروف';
$string['gradepercent'] = 'التقدير كنسبة مئوية';
$string['gradepoints'] = 'التقدير بالنقاط';
$string['imagetype'] = 'نوع الصورة';
$string['incompletemessage'] = 'من أجل تنزيل شهادتك، ينبغي عليك أولاً إكمال كل النشاطات المطلوبة. يرجى العودة إلى المساق لمتابعة عملك فيه.';
$string['intro'] = 'المقدمة';
$string['issued'] = 'مُصدرة';
$string['issueddate'] = 'تاريخ إصدارها';
$string['issueoptions'] = 'خيارات الإصدار';
$string['landscape'] = 'بالعرض';
$string['lastviewed'] = 'لقد حصلتَ على هذه الشهادة في:';
$string['letter'] = 'الحرف';
$string['lockingoptions'] = 'خيارات التأمين';
$string['modulename'] = 'الشهادة';
$string['modulename_help'] = 'هذه الوحدة تسمح بالتوليد التلقائي للشهادات بناءً على الشروط المعرفة مسبقًا من قبل المعلم.';
$string['modulename_link'] = 'Certificate_module';
$string['modulenameplural'] = 'الشهادات';
$string['mycertificates'] = 'شهاداتي';
$string['nocertificates'] = 'لا توجد شهادات';
$string['nocertificatesissued'] = 'لا توجد شهادات ممنوحة';
$string['nocertificatesreceived'] = 'لم يتلقَّ أي شهادات من أي مساق.';
$string['nofileselected'] = 'ينبغي إختيار الملف لرفعه';
$string['nogrades'] = 'لا تتوفر أي تقديرات';
$string['notapplicable'] = 'غير متاحة';
$string['notfound'] = 'تعذر التحقق من رقم الشهادة.';
$string['notissued'] = 'غير مُصدرة';
$string['notissuedyet'] = 'غير مُصدرة بعد';
$string['notreceived'] = 'لم تتلقَّ هذه الشهادة';
$string['openbrowser'] = 'إفتح بنافذة جديدة';
$string['opendownload'] = 'أنقر الزر أدناه لحفظ شهادتك في حاسوبك.';
$string['openemail'] = 'أنقر الزر أدناه وشهادتك سترسل إليك كمرفق برسالة بريد الكتروني.';
$string['openwindow'] = 'أنقر الزر أدناه لفتح شهادتك في نافذة مستعرض جديدة.';
$string['or'] = 'أو';
$string['orientation'] = 'الاتجاه';
$string['orientation_help'] = 'إختر ما إذا كنت تريد اتجاه صفحة شهادتك أن يكون طوليًا أم عرضيًا.';
$string['pluginadministration'] = 'إدارة الشهادة';
$string['pluginname'] = 'الشهادة';
$string['portrait'] = 'بالطول';
$string['printdate'] = 'طباعة التاريخ';
$string['printdate_help'] = 'هذا هو التاريخ الذي ستتم طباعته، لو تم تحديد تاريخ الطباعة. إذا تم اختيار تاريخ إكمال المساق لكن الطالب لم يكمله بعد، ستتم طباعة تاريخ تلقي الشهادة. يمكنك أيضًا اختيار طباعة التاريخ بناءً على موعد منح الدرجة للنشاط. إذا تم منح الشهادة قبل تقييم النشاط، ستتم طباعة تاريخ تلقيها.';
$string['printerfriendly'] = 'صفحة سهلة الطباعة';
$string['printgrade'] = 'طباعة التقدير';
$string['printgrade_help'] = 'يمكنك اختيار أي عنصر تقييم متاح في المقرر من سجل التقديرات لطباعة درجة المستخدم التي تلقاها من ذلك العنصر في الشهادة. يتم عرض عناصر التقييم بالترتيب الذي تظهر به في سجل التقديرات. إختر تنسيق الدرجة أدناه.';
$string['printhours'] = 'طباعة الساعات المعتمدة';
$string['printhours_help'] = 'أدخل هنا عدد ساعات الرصيد المراد طباعته في الشهادة.';
$string['printnumber'] = 'طباعة الرمز';
$string['printnumber_help'] = 'يمكن طباعة رمز فريد من 10 مراتب مكون من حروف وأرقام عشوائية على الشهادة. يمكن لاحقًا التحقق من هذا الرمز عبر مقارنته مع الرمز المعروض في تقرير الشهادات.';
$string['printoutcome'] = 'طباعة المخرجات';
$string['printoutcome_help'] = 'يمكنك اختيار أي من مخرجات المساق لطباعة اسمها والمستخدم الذي تلقاها في الشهادة. كمثال على ذلك: مخرجات الواجب: بارع.';
$string['printseal'] = 'الختم أو صورة الشعار';
$string['printseal_help'] = 'هذا الخيار يسمح لك بتحديد الختم أو الشعار الذي على الشهادة من مجلد certificate/pix/seals. إفتراضيًا هذه الصورة تتوضع في الزاوية اليمنى السفلى من الشهادة.';
$string['printsignature'] = 'صورة التوقيع';
$string['printteacher'] = 'طباعة أسماء المعلمين';
$string['printteacher_help'] = 'لطباعة اسم المعلم على الشهادة، إضبط دور المعلم على مستوى الوحدة. إفعل ذلك إذا كان لديك، على سبيل المثال، أكثر من معلم واحد للمساق أو لديك أكثر من شهادة واحدة في المساق وتريد طباعة أسماء معلمين مختلفة على كل شهادة. أنقر لتحرير الشهادة، ثم أنقر على تبويب الأدوار المعينة محليًا. ثم قم بتعيين دور المعلم (المعلم ذي صلاحية التحرير) للشهادة (ليس من الضروري أن يكون معلمًا في المساق- يمكنك تعيين هذا الدور لأي شخص). ستتم طباعة هذه الأسماء على الشهادة كمعلمين.';
$string['printwmark'] = 'صورة العلامة المائية';
$string['printwmark_help'] = 'يمكن وضع ملف علامة مائية في خلفية الشهادة. العلامة المائية هي صورة باهتة وقد تكون شعار، ختم، شارة، كلمة أو أي شيء تريد استعماله كصورة خلفية.';
$string['receivedcerts'] = 'الشهادات المتلقاة';
$string['receiveddate'] = 'تاريخ تلقيها';
$string['reissuecert'] = 'إعادة منح الشهادات';
$string['reissuecert_help'] = 'إذا اخترت نعم، فسيتم منح الشهادة مرة أخرى بتاريخ جديد، علامة جديدة، ورمز جديد في كل مرة ينقر فيها المستخدم على رابط الشهادة. على الرغم من وجود جدول يُظهر تواريخ التلقي الماضية، لن يتوفر زر لمراجعتها بالنسبة إلى المستخدمين. فقط الشهادة الممنوحة مؤخرًا ستظهر في تقرير الشهادة.';
$string['removecert'] = 'تمت إزالة الشهادات الممنوحة';
$string['report'] = 'التقرير';
$string['reportcert'] = 'الإبلاغ عن الشهادات';
$string['reportcert_help'] = 'إذا اخترت نعم هنا، فسيتم إظهار تاريخ التلقي، الرمز، واسم المساق الخاصين بهذه الشهادة في تقارير شهادة المستخدم. إذا اخترت طباعة العلامة في هذه الشهادة، فستظهر تلك العلامة أيضًا في تقريرها.';
$string['requiredtimenotmet'] = 'عليك قضاء ما لا يقل عن {$a->requiredtime} من الدقائق في المساق قبل أن تتمكن من الوصول إلى هذه الشهادة';
$string['requiredtimenotvalid'] = 'الوقت المطلوب ينبغي أن يكون رقمًا صالحًا أكبر من 0';
$string['reviewcertificate'] = 'مراجعة شهادتك';
$string['savecert'] = 'حفظ الشهادات';
$string['savecert_help'] = 'إذا اخترتَ هذا الخيار، فسيتم حفظ نسخة من ملف PDF الخاص بشهادة كل مستخدم في مجلد بيانات المساق moddata لتلك الشهادة. سيتم عرض رابط في تقرير الشهادة لكل شهادة مستخدم محفوظة.';
$string['seal'] = 'الختم';
$string['sigline'] = 'الخط';
$string['signature'] = 'التوقيع';
$string['statement'] = 'قد أكمل المساق';
$string['summaryofattempts'] = 'ملخص الشهادات المتلقاة سابقًا';
$string['textoptions'] = 'خيارات النص';
$string['title'] = 'شهادة إنجاز';
$string['to'] = 'ممنوحة إلى';
$string['typeA4_embedded'] = 'A4 Embedded';
$string['typeA4_non_embedded'] = 'A4 Non-Embedded';
$string['typeletter_embedded'] = 'Letter Embedded';
$string['typeletter_non_embedded'] = 'Letter Non-Embedded';
$string['unsupportedfiletype'] = 'ينبغي أن يكون الملف بصيغة jpeg أو png';
$string['uploadimage'] = 'رفع الصورة';
$string['uploadimagedesc'] = 'هذا الزر سيأخذك إلى شاشة أخرى حيث ستتمكن من رفع الصور.';
$string['userdateformat'] = 'تنسيق التاريخ بلغة المستخدم';
$string['validate'] = 'تحقق';
$string['verifycertificate'] = 'تحقق من الشهادة';
$string['viewcertificateviews'] = 'معاينة {$a} من الشهادات الممنوحة';
$string['viewed'] = 'لقد تلقيتَ هذه الشهادة في:';
$string['viewtranscript'] = 'معاينة الشهادات';
$string['watermark'] = 'العلامة المائية';
