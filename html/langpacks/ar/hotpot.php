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
 * Strings for component 'hotpot', language 'ar', version '4.1'.
 *
 * @package     hotpot
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = 'لم يتم الاجابة علية';
$string['addquizchain'] = 'إضافة سلسلة اختبار';
$string['addquizchain_help'] = 'هل تنبغي إضافة كل الاختبارات في سلسلة الاختبارات؟

**لا**
: ستتم إضافة اختبار واحد إلى المساق

**نعم**
: إذا كان الملف المصدري هو **ملف اختبار**، ستتم معاملته بمثابة بداية سلسلة من الاختبارات وستتم إضافة كل اختبارات السلسلة إلى المساق بإعدادات متطابقة. ينبغي أن يكون لكل اختبار في السلسلة رابط إلى الملف التالي في السلسلة.

إذا كان الملف المصدري هو **مجلد**، ستتم إضافة كل الاختبارات التي يمكن التعرف عليها في المجلد إلى المساق لتكوين سلسلة من الاختبارات مع إعدادات متطابقة.

إذا كان الملف المصدري هو **ملف وحدة**، مثل ملف مهروس البطاطا الحارة أو ملف index.html، فستتم إضافة الاختبارات المدرجة في ملف الوحدة إلى المساق بمثابة سلسلة من الاختبارات مع إعدادات متطابقة.';
$string['allowpaste_help'] = 'عند تمكين هذا الإعداد، سيسمح للطلاب بنسخ، لصق، وسحب النص إلى مربعات إدخال النصوص.';
$string['allowreview_help'] = 'عند تمكينه، يمكن للطلاب مراجعة محاولاتهم في الاختبار بعد إغلاقه.';
$string['attempts'] = 'محاولات';
$string['attemptscore'] = 'درجة المحاولة';
$string['average'] = 'المتوسط';
$string['averagescore'] = 'متوسط الدرجة';
$string['bodystylesbackground'] = 'لون وصورة الخلفية';
$string['bodystylescolor'] = 'لون النص';
$string['bodystylesfont'] = 'حجم الخط ونوعه';
$string['completed'] = 'تم';
$string['configenablemymoodle'] = 'هذا الإعداد يتحكم بشأن ما إذا كان يتم إدراج HotPots في صفحة مودل الخاص بي أم لا';
$string['configframeheight'] = 'عند عرض الاختبار ضمن إطار، هذه القيمة هي الارتفاع (بالبكسل) للإطار العلوي الذي يحتوي على أدوات التنقلفي مودل.';
$string['confirmstop'] = 'هل أنت متأكد من رغبتك في الانتقال من هذه الصفحة؟';
$string['correct'] = 'صح';
$string['d_index'] = 'مؤشر التمييز';
$string['entry_title'] = 'اسم الوحدة كعنوان';
$string['entrycm'] = 'النشاط السابق';
$string['entrycmcourse'] = 'النشاط السابق في هذا المساق';
$string['entrycmsection'] = 'النشاط السابق في هذا المقطع من المساق';
$string['entrygrade'] = 'علامة النشاط السابق';
$string['entryoptions_help'] = 'خانات التأشير هذه تحدد عرض أو إخفاء العناصر في صفحة إدخال HotPot.

**اسم الوحدة كعنوان**
: عند تأشيره، سيُعرض اسم الوحدة بمثابة عنوان صفحة الإدخال.

**التقييم**
: عند تأشيره، ستُعرض معلومات تقييم HotPot في صفحة الإدخال.

**التواريخ**
: عند تأشيره، سيُعرض تاريخا فتح وإغلاق HotPot في صفحة الإدخال.

**المحاولات**
: عند تأشيره، سيُعرض جدول بتفاصيل المحاولات السابقة للمستخدم لـ HotPot هذا في صفحة الإدخال. سيكون هناك زر استئناف في العمود أقصى اليمين إزاء المحاولات القابلة للاستئناف.';
$string['event_attempt_reviewed'] = 'محاولة HotPot تمت مراجعتها';
$string['event_attempt_reviewed_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" راجع محاولة في نشاط "hotpot" ضمن وحدة المساق ذات المُعرَّف "{$a->cmid}"';
$string['event_attempt_reviewed_explanation'] = 'مستخدم ما قد راجع توًا محاولته في نشاط HotPot';
$string['event_attempt_started'] = 'محاولة HotPot تم بدؤها';
$string['event_attempt_started_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" بدأ محاولة في نشاط "hotpot" ضمن وحدة المساق ذات المُعرَّف "{$a->cmid}"';
$string['event_attempt_started_explanation'] = 'مستخدم ما قد بدأ توًا محاولة في نشاط HotPot';
$string['event_attempt_submitted'] = 'محاولة HotPot تم تسليمها';
$string['event_attempt_submitted_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" قام بتسليم محاولة في نشاط "hotpot" ضمن وحدة المساق ذات المُعرَّف "{$a->cmid}"';
$string['event_attempt_submitted_explanation'] = 'مستخدم ما سلَّم توًا محاولة في نشاط HotPot';
$string['event_base'] = 'حدث HotPot تم اكتشافه';
$string['event_base_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" استحدث حدثًا في نشاط "hotpot" ضمن وحدة المساق ذات المُعرَّف "{$a->cmid}"';
$string['event_base_explanation'] = 'حدث تم اكتشافه من قبل وحدة HotPot';
$string['event_report_viewed'] = 'تقرير HotPot تمت معاينته';
$string['event_report_viewed_description'] = 'المستخدم ذو المُعرَّف "{$a->userid}" شاهد تقريرًا للمحاولات في نشاط "hotpot" ضمن وحدة المساق ذات المُعرَّف "{$a->cmid}"';
$string['event_report_viewed_explanation'] = 'مستخدم ما قد شاهد توًا تقريرًا عن المحاولات في نشاط HotPot';
$string['exit_attemptscore'] = 'إن درجتك لتلك المحاولة كانت {$a}';
$string['exit_course_text'] = 'عودة إلى صفحة المساق الرئيسية';
$string['exit_feedback'] = 'إفادة صفحة الخروج';
$string['exit_feedback_help'] = 'هذه الخيارات تحدد عرض أو إخفاء عناصر الإفادة في صفحة الخروج من HotPot.

**اسم الوحدة كعنوان**
: عند تأشيره، سيُعرض اسم الوحدة بمثابة عنوان صفحة الخروج.

**التشجيع**
: عند تأشيره، سيُعرض تشجيع ما في صفحة الخروج.
التشجيع يعتمد على علامة HotPot:
: **> 90%**: ممتاز!
: **> 60%**: أحسنت
: **> 0%**: محاولة جيدة
: **= 0%**: هل أنت بخير؟

**علامة محاولة الوحدة**
: عند تأشيره، سيُعرض تقدير محاولة الوحدة في صفحة الخروج.

**علامة الوحدة**
: عند تأشيره، سيُعرض تقدير HotPot في صفحة الخروج.

إضافة إلى ذلك، إذا كانت طريقة تقييم الوحدة هي العلامة الأعلى، ستُعرض رسالة تخبر المستخدم فيما إذا كانت محاولته الأخيرة أفضل من سابقتها أو مكافئة لها.';
$string['exit_hotpotgrade_highest_zero'] = 'لم تحرز أعلى من {$a} لهذا النشاط بعد';
$string['exit_next_text'] = 'حاول النشاط التالي';
$string['exitcm'] = 'النشاط التالي';
$string['exitcmcourse'] = 'النشاط التالي في هذا المساق';
$string['exitcmsection'] = 'النشاط التالي في هذا المقطع من المساق';
$string['exitgrade'] = 'علامة النشاط التالي';
$string['exitpage_help'] = 'هل ينبغي عرض صفحة خروج بعد إكمال اختبار HotPot؟

**نعم**
: ستظهر للطالب صفحة خروج بعد إكمال اختبار HotPot. يتم تحديد محتويات صفحة الخروج في الإعدادات الخاصة بإفادة صفحة الخروج لـ HotPot وروابطها.

**لا**
: لن تظهر للطالب صفحة خروج بعد إكمال الاختبار. بدلاً من ذلك، سيذهب مباشرةً إلى النشاط التالي أو يعود إلى صفحة المساق في مودل.';
$string['feedbackdiscuss'] = 'مناقشة هذا الاختبار في المنتدى';
$string['feedbackformmail'] = 'نموذج الإفادة';
$string['feedbackmoodleforum'] = 'منتدى مودل';
$string['feedbackwebpage'] = 'صفحة الويب';
$string['firstattempt'] = 'المحاولة الأولى';
$string['giveup'] = 'أترك';
$string['grademethod_help'] = 'هذا الإعداد يعرف كيفية إحتساب التقدير لنشاط HotPot من تقديرات المحاولات.

**الدرجة الأعلى**
: سيتم ضبط تقدير النشاط على أعلى درجة لأي محاولة لنشاط HotPot.

**متوسط الدرجة**
: سيتم ضبط التقدير على متوسط درجات كل محاولات نشاط HotPot.

**المحاولة الأولى**
: سيتم ضبط التقدير على درجة المحاولة الأولى لنشاط HotPot.

**المحاولة الأخيرة**
: سيتم ضبط التقدير على درجة المحاولة الأخيرة لنشاط HotPot.';
$string['highestscore'] = 'الدرجة الأعلى';
$string['hotpot:addinstance'] = 'إضافة نشاط HotPot جديد';
$string['hotpot:view'] = 'استخدم الاختبار';
$string['hotpotname'] = 'اسم نشاط HotPot';
$string['ignored'] = 'تجاهل';
$string['inprogress'] = 'قيد التنفيذ';
$string['maxeventlength'] = 'أقصى عدد من الأيام لحدث واحد في التقويم';
$string['modulename'] = 'اختبار هوت بوتيتو';
$string['modulename_link'] = 'mod/hotpot/view';
$string['modulenameplural'] = 'اختبارات هوت بوتيتو';
$string['nameadd'] = 'الاسم';
$string['nameedit'] = 'الاسم';
$string['navigation_embed'] = 'صفحة الويب المضمنة';
$string['navigation_help'] = 'هذا الإعداد يحدد التنقل المستعمل في الاختبار:

**شريط تنقل مودل**
: سيتم عرض شريط تنقل مودل في نفس نافذة الاختبار وفي أعلى الصفحة

**إطار تنقل مودل**
: سيتم عرض شريط تنقل مودل في إطار منفصل وفي أعلى الاختبار

**صفحة ويب مضمنة**
: سيتم عرض شريط تنقل مودل مع اختبار Hot Potatoes مضمنًا في النافذة

**مساعدات التنقل الأصلية**
: سيتم عرض الاختبار مع أزرار التنقل، إن وجدت، والمُعرَّفة في الاختبار

**زر "رفع اليد" منفرد**
: سيتم عرض الاختبار مع زر "رفع اليد" المنفرد وفي أعلى الصفحة

**بلا**
: سيتم عرض الاختبار بدون أي مساعدات تنقل، لذلك عند إجابة كل الأسئلة بشكل صحيح، واعتمادًا على الإعداد "أتريد إظهار الاختبار التالي؟"، إما يعود مودل إلى صفحة المساق أو يعرض الاختبار اللاحق';
$string['navigation_none'] = 'لا شيء';
$string['noactivity'] = 'لا يوجد نشاط';
$string['noreview'] = 'عذرًا، ليس مسموحًا لك بمعاينة تفاصيل محاولة الاختبار هذه.';
$string['noreviewafterclose'] = 'عذرًا، لقد تم إغلاق هذاالاختبار. لم يعد مسموحًا لك بمعاينة تفاصيل هذه المحاولة في الاختبار.';
$string['noreviewbeforeclose'] = 'عذرًا، ليس مسموحًا لك بمعاينة تفاصيل محاولة الاختبار هذه حتى {$a}.';
$string['outputformat'] = 'التنسيق المخرج';
$string['outputformat_best'] = 'الأفضل';
$string['outputformat_hp_6_jquiz_html'] = 'JQuiz (v6) من html';
$string['outputformat_hp_6_jquiz_xml_v6'] = 'JQuiz (v6) من xml';
$string['outputformat_hp_6_jquiz_xml_v6_autoadvance'] = 'JQuiz (v6) من xml (تقدم تلقائي)';
$string['outputformat_hp_6_jquiz_xml_v6_exam'] = 'JQuiz (v6) من xml (إمتحان)';
$string['penalties'] = 'غرامات';
$string['pluginname'] = 'وحدة هوت بوتيتو';
$string['questionshort'] = 'س - {$a}';
$string['quizname_help'] = 'نص المساعدة بشأن اسم الاختبار';
$string['quizzes'] = 'الاختبارات';
$string['score'] = 'الدرجة';
$string['scoresreport'] = 'الدرجات';
$string['stopbutton_help'] = 'إذا تم تمكين هذا الإعداد، سيتم إدراج زر إيقاف في الاختبار.

إذا قام الطالب بالنقر على زر الإيقاف، ستعاد النتائج التي في حينها إلى مودل وستؤشر حالة محاولة الاختبار على أنها متروكة.

النص المعروض على زر الإيقاف يمكن أن يكون واحدًا من العبارات المحضرة سابقًا من حزم اللغات في مودل، أو يقوم المعلم بتحديد النص الخاص به ليظهر في الزر.';
$string['storedetails'] = 'خزن التفاصيل الخام بصيغة XML لمحاولات اختبار HotPot';
$string['studentfeedback'] = 'إفادة الطالب';
$string['studentfeedback_help'] = 'عند تمكينه، سيتم عرض رابط لنافذة إفادة منبثقة كلما نقر الطالب على زر "التحقق". تسمح نافذة الإفادة للطالب بمناقشة هذا الاختبار مع معلمه وزملائه بواحدة من الطرق الآتية:

**صفحة الويب**
: يتطلب عنوان رابط صفحة الويب، مثلاً
http://myserver.com/feedbackform.html

**نموذج الإفادة**
: يتطلب عنوان النص البرمجي للنموذج، مثلاً http://myserver.com/cgi-bin/formmail.pl

**منتدى مودل**
: سيتم عرض فهرس منتدى المساق

**رسائل مودل**
: سيتم عرض نافذة المراسلة الفورية لمودل. إذا كان هناك معلمون متعددون في المساق، سيُطلب من الطالب تحديد المعلم قبل ظهور نافذة المراسلة.';
$string['textsourcefilename'] = 'استخدم أسم الملف';
$string['textsourcefilepath'] = 'أستخدم مسار الملف';
$string['textsourcequiz'] = 'الجلب من الاختبار';
$string['textsourcespecific'] = 'نص محدد';
$string['timedout'] = 'أنتهى الوقت';
$string['title'] = 'العنوان';
$string['usemediafilter_help'] = 'هذه الإعدادات تحدد منقح الوسائط المستعمل:

**بلا**
: لن يتم تمرير المحتوى إلى أي منقح وسائط

**منقحات الوسائط القياسية لمودل**
: سيتم تمرير المحتوى إلى المنقحات القياسية لمودل. هذه المنقحات تبحث عن روابط تؤدي إلى الأنواع الشائعة من ملفات الصوت والفيديو، ثم تحول تلك الروابط إلى مشغلات الوسائط المناسبة

**منقح وسائط HotPot**
: سيتم تمرير المحتوى إلى منقحات تكتشف الروابط، الصور، الأصوات والفيديوهات ليتم تحديدها باستعمال ترميز الأقواس المربعة

ترميز الأقواس المربعة يمتلك الصيغة الآتية:
<code>[url player width height options]</code>

**الرابط**
: الرابط النسبي أو المطلق لملف الوسائط

**المشغل** (إختياري)
: اسم المشغل المراد إدراجه. القيمة الافتراضية لهذا الإعداد هي "moodle". النسخة القياسية من وحدة HotPot تقدم أيضًا المشغلات الآتية:
: **dew**: مشغل ملفات mp3
: **dyer**: مشغل ملفات mp3 مقدم من Bernard Dyer
: **hbs**: مشغل ملفات mp3 من Half-Baked Software
: **image**: إدراج صورة في صفحة الويب
: **link**: إدراج رابط إلى صفحة ويب أخرى

**العرض** (إختياري)
: العرض المطلوب للمشغل

**الارتفاع** (إختياري)
: الارتفاع المطلوب للمشغل. عند تركه، سيتم ضبطه إلى نفس قيمة العرض.

**الخيارات** (إختياري)
: قائمة مفصولة بفوارز من الخيارات لتمريرها إلى المشغل. كل خيار يمكن أن يكون مفتاح تفعيل/تعطيل بسيط، أو زوج من الاسم والقيمة.
: **الاسم=القيمة
: **الاسم="قيمة معينة ذات فراغات"';
$string['weighting'] = 'وزن';
$string['wrong'] = 'خطاء';
