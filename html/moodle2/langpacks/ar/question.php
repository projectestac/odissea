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
 * Strings for component 'question', language 'ar', branch 'MOODLE_32_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'إجراء';
$string['addanotherhint'] = 'إضافة تلميح آخر';
$string['addcategory'] = 'إضافة فئة';
$string['addmorechoiceblanks'] = 'أضف {no} خيارات فارغة';
$string['adminreport'] = 'رفع تقرير بمشاكل محتملة في قاعدة بيانات الأسئلة.';
$string['advancedsearchoptions'] = 'خيارات البحث';
$string['alltries'] = 'جميع محاولات';
$string['answer'] = 'إجابة';
$string['answers'] = 'إجابات';
$string['answersaved'] = 'تم حفظ الإجابة';
$string['attemptfinished'] = 'انتهت المحاولة';
$string['attemptfinishedsubmitting'] = 'انتهت المحاولة وسيتم التسليم';
$string['attemptoptions'] = 'خيارات المحاولة';
$string['availableq'] = 'متاح؟';
$string['badbase'] = 'قاعدة سيئة قبل **: {$a}**';
$string['behaviour'] = 'سلوك';
$string['behaviourbeingused'] = 'السلوك المُستخدم حالياً:  {$a}';
$string['broken'] = 'هذا الرابط غير صحيح ويشير إلى ملف غير موجود.';
$string['byandon'] = 'بواسطة <em>{$a->user}</em> في <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'لا يمكن نسخ ملف النسخة الاحتياطية';
$string['cannotcreate'] = 'لم يتمكن من إضافة مدخل جديد في جدول question_attempts';
$string['cannotcreatepath'] = 'لا يمكن إنشاء المسار: {$a}';
$string['cannotdeletebehaviourinuse'] = 'لا يمكنك حذف السلوك  \'{$a}\'.يتم استخدامه من قبل محاولات السؤال.';
$string['cannotdeletecate'] = 'لا يمكنك حذف هذا التصنيف لأنه التصنيف الافتراضي ضمن هذا السياق.';
$string['cannotdeleteneededbehaviour'] = 'لا يمكن حذف سلوك السؤال \'{$a}\'.هناك سلوكيات الأخرى مثبتة تعتمد عليه.';
$string['cannotdeleteqtypeinuse'] = 'لا يمكنك حذف نوع السؤال \'{$a}\'. لأن هناك أسئلة من هذا النوع موجودة ببنك الأسئلة.';
$string['cannotdeleteqtypeneeded'] = 'لا يمكنك حذف نوع السؤال \'{$a}\'. لأن هناك أنواع أخرى من الأسئلة المنصبة تعتمد عليه.';
$string['cannotenable'] = 'لا يمكن إنشاء نوع السؤال {$a} مباشر.';
$string['cannotenablebehaviour'] = 'لا يمكن استخدام سلوك السؤال  {$a}  مباشرة. هذا السلوك للاستخدام الداخلي فقط.';
$string['cannotfindcate'] = 'لا يمكن إيجاد سجل التصنيف';
$string['cannotfindquestionfile'] = 'لم يتمكن من إيجاد ملف بيانات السؤال في الملف المضغوط';
$string['cannotgetdsfordependent'] = 'لا يمكن الحصول على مجموعة البيانات المحددة لمجموعةالبيانات للسؤال التابع!(السؤال: {$a->id}, بند البيانات: {$a->item})';
$string['cannotgetdsforquestion'] = 'لا يمكن الحصول على مجموعة البيانات المحددة للسؤال المحسوب!(سؤال: {$a})';
$string['cannothidequestion'] = 'لم يتمكن من إخفاء هذا السؤال';
$string['cannotimportformat'] = 'عذراً، لا يمكن استيراد هذا التنسيق!';
$string['cannotinsertquestion'] = 'لا يمكن إدراج السؤال الجديد!';
$string['cannotinsertquestioncatecontext'] = 'لا يمكن إدراج تصنيف سؤال جديد {$a->cat} معرِّف سياق غير قانوني {$a->ctx}';
$string['cannotloadquestion'] = 'لم يتم تحميل السؤال';
$string['cannotmovequestion'] = 'لا يمكنك استخدام هذا السكربت لنقل الأسئلة المرفق نعها ملفات من أماكن مختلفة.';
$string['cannotopenforwriting'] = 'لا يمكن فتح للكتابة: {$a}';
$string['cannotpreview'] = 'لا يمكنك معاينة هذه الأسئلة!';
$string['cannotread'] = 'تعذر قراءة الملف المستورد (أو الملف فارغ)';
$string['cannotretrieveqcat'] = 'لم يتم استرجاع فئة السؤال';
$string['cannotunhidequestion'] = 'فشل إظهار السؤال.';
$string['cannotunzip'] = 'لا يمكن فك ضغط الملف.';
$string['cannotwriteto'] = 'لا يمكن كتابة الأسئلة المُصدَّرة  في {$a}';
$string['categories'] = 'فئات';
$string['category'] = 'فئة';
$string['categorycurrent'] = 'الفئة الحالية';
$string['categorycurrentuse'] = 'استخدم هذه الفئة ';
$string['categorydoesnotexist'] = 'هذه الفئة غير موجوده';
$string['categoryinfo'] = 'معلومات الفئة';
$string['categorymove'] = 'التصنيف \'{$a->name}\' يحتوي على {$a->count} سؤال. يرجى اختيار تصنيف آخر لنقل الأسئلة إليه.';
$string['categorymoveto'] = 'أحفظ في الفئة ';
$string['categorynamecantbeblank'] = 'لا يمكن ترك اسم الفئة فارغاً';
$string['changeoptions'] = 'خيارات التغير';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}">تصنيف "{$a->name}"</a> في المقرر الدراسي "{$a->coursename}" سيتغير وضع مشاركته من <strong>{$a->changefrom} إلى{$a->changeto}</strong>.';
$string['check'] = 'تحقق';
$string['chooseqtypetoadd'] = 'اختر نوعاً السؤال التي ترغب بإضافته';
$string['clearwrongparts'] = 'ردود غير صحيحة واضحة';
$string['clickflag'] = 'علم هذا السؤال';
$string['clicktoflag'] = 'انقر لتعليم هذا السؤال';
$string['clicktounflag'] = 'انقر لإلغاء تعليم هذا السؤال';
$string['clickunflag'] = 'إزالة الإشارة';
$string['closepreview'] = 'إغلاق المُعاينة';
$string['combinedfeedback'] = 'التغذية الراجعة (الملاحظات) مجتمعة';
$string['comment'] = 'تعليق';
$string['commented'] = 'التعليق: {$a}';
$string['commentormark'] = 'قم بالتعليق أو تجاوز العلامة';
$string['comments'] = 'تعليقات';
$string['commentx'] = 'تعليق : {$a}';
$string['complete'] = 'تم/كامل';
$string['contexterror'] = 'يجب أن لا تكون وصلت هنا إذا لم تقم بنقل تصنيف إلى سياق آخر.';
$string['copy'] = 'نسخ من {$a} وتغيير الروابط.';
$string['correct'] = 'صحيح/صح';
$string['correctfeedback'] = 'لكل إجابة صحيحة';
$string['correctfeedbackdefault'] = 'إجابتك صحيحة';
$string['created'] = 'تم إنشائه';
$string['createdby'] = 'أٌنشيء بواسطة';
$string['createdmodifiedheader'] = 'تم إنشائه / أخر مرة تم الحفظ';
$string['createnewquestion'] = 'إنشاء سؤال جديد ...';
$string['decimalplacesingrades'] = 'عدد خانات الأعداد العشرية في الدرجة';
$string['defaultfor'] = 'افتراضي لـ {$a}';
$string['defaultinfofor'] = 'التصنيف الافتراضي للأسئلة المشتركة في السياق \'{$a}\'.';
$string['defaultmark'] = 'الدرجة الافتراضية';
$string['defaultmarkmustbepositive'] = 'يجب أن تكون الدرجة الافتراضية إيجابية.';
$string['deletequestioncheck'] = 'هل أنت متأكد تماماً أنك تريد حذف  \'{$a}\'?';
$string['deletequestionscheck'] = 'هل أنت متأكد تماماُ أنك تريد حذف الأسئلة التالية؟
<br /><br />{$a}';
$string['deletingbehaviour'] = 'حذف سلوك السؤال \'{$a}\'';
$string['deletingqtype'] = 'حذف نوع السؤال \'{$a}\'';
$string['didnotmatchanyanswer'] = '[لم تتطابق مع أي إجابة]';
$string['disabled'] = 'معطل';
$string['displayoptions'] = 'خيارات العرض';
$string['disterror'] = 'التوزيع {$a} سبب مشاكل';
$string['donothing'] = 'لا تنسخ الملفات ولا تنقلها ولا تغيّر الروابط.';
$string['editcategories'] = 'تحرير التصنيفات ';
$string['editcategories_help'] = 'بدلاً من إبقاء جميع الأسئلة  في قائمة واحدة كبيرة، يمكن ترتيب الأسئلة في تصنيفات وتصنيفات فرعية.

لكل تصنيف يوجد سياق يحدد أين يمكن استخدام الأسئلة التابعة للتصنيف:

* سياق النشاط- الأسئلة لا تتوفر إلا في وحدة النشاط
* سياق المقرر الدراسي - تكون الأسئلة متوفرة في جميع وحدات النشاط في المقرر الدراسي
* سياق تصنيف المقرر الدراسي - تكون الأسئلة متوفرة في جميع وحدات النشاط  والمقررات الدراسية التابعة لتصنيف المقرر الدراسي
* سياق النظام - تكون الأسئلة متوفرة في جميع المقررات الدراسية والأنشطة على الموقع

تستخدم  التصنيفات أيضاً للأسئلة عشوائية، كما يتم اختيار الأسئلة من تصنيف معين.';
$string['editcategory'] = 'حرر الفئة';
$string['editingcategory'] = 'تعديل تصنيف';
$string['editingquestion'] = 'تعديل سؤال';
$string['editquestion'] = 'حرر السؤال';
$string['editquestions'] = 'حرر الأسئلة';
$string['editthiscategory'] = 'عدّل هذا التصنيف';
$string['emptyxml'] = 'خطأ غير معروف - فم بتفريغ الملف imsmanifest.xml';
$string['enabled'] = 'تم تفعيله';
$string['errordeletingquestionsfromcategory'] = 'خطأ في حذف السؤال من التصنيف {$a}.';
$string['errorduringregrade'] = 'لا يمكن إعادة تصحيح السؤال {$a->qid},انتقل لحالة {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'خطأ: لا يمكن نسخ الملف {$a}.';
$string['errorfilecannotbemoved'] = 'خطأ: لا يمكن نقل الملف {$a}.';
$string['errorfileschanged'] = 'تغيرت الملفات المرتبطة من الأسئلة منذ أن تم عرض النموذج: خطأ.';
$string['errormanualgradeoutofrange'] = 'الدرجة {$a->grade} ليست بين 0 و {$a->maxgrade} للسؤال {$a->name}. لم يتم حفظ النتيجة ولا التعليق.';
$string['errormovingquestions'] = 'خطأ أثناء نقل الأسئلة ذات المعرفات{$a}.';
$string['eventquestioncategorycreated'] = 'إنشاء تصنيف السؤال';
$string['export'] = 'تصدير';
$string['exportcategory'] = 'تصدير الفئه';
$string['exportfilename'] = 'أسئله';
$string['exportquestions'] = 'صدر الأسئله إلى ملف';
$string['feedback'] = '(تغذية راجعة (ملاحظات';
$string['fileformat'] = 'تنسيف الملف';
$string['filesareacourse'] = 'منطقة ملفات المقرر الدراسي';
$string['filesareasite'] = 'منطقة ملفات الموقع';
$string['filestomove'] = 'نقل/ نسخ الملفات {$a}؟';
$string['firsttry'] = 'أول محاولة';
$string['flagthisquestion'] = 'علم هذا السؤال';
$string['generalfeedback'] = 'إفادة عامه';
$string['getcategoryfromfile'] = 'احصل على الفئه من ملف';
$string['getcontextfromfile'] = 'الحصول على السياق من ملف';
$string['hintn'] = 'تلميح';
$string['hinttext'] = 'نص التلميح';
$string['howquestionsbehave'] = 'كيف تتصرف الأسئلة';
$string['import'] = 'استيراد';
$string['importcategory'] = 'استورد فئه';
$string['importfromcoursefiles'] = 'أو أختر ملف مقرر دراسي ليتم إستيراده';
$string['importfromupload'] = 'أختر ملف ليتم تحميله';
$string['importquestions'] = 'استورد أسئله من ملف';
$string['includesubcategories'] = 'أظهر أيضا الأسئلة من  التصنيفات الفرعية';
$string['incorrect'] = 'خطأ';
$string['incorrectfeedback'] = 'لأي إجابة غير صحيحة';
$string['incorrectfeedbackdefault'] = 'إجابتك غير صحيحة.';
$string['information'] = 'معلومات';
$string['invalidanswer'] = 'إجابة غير مكتملة';
$string['invalidcategoryidtomove'] = 'مُعرِّف التصنيف غير صحيح للنقل';
$string['invalidconfirm'] = 'جملة التأكيد غير صحيحة';
$string['invalidgrade'] = 'الدرجات ({$a}) لا تتطابق مع خيارات الدرجة -تم  تخطي السؤال.';
$string['invalidpenalty'] = 'عقوبة غير صحيحة';
$string['lastmodifiedby'] = 'اخر تعديل بواسطة';
$string['lasttry'] = 'آخر محاولة';
$string['makecopy'] = 'أنشئ نسخة';
$string['maketoplevelitem'] = 'أنقل إلى مستوى أعلى';
$string['manualgradeinvalidformat'] = 'هذا ليس رقم صالح.';
$string['manualgradeoutofrange'] = 'هذه العلامة من خارج المجال المسموح';
$string['manuallygraded'] = 'مُصحَّح يدوياً {$a->mark} مع التعليق: {$a->comment}';
$string['mark'] = 'درجة';
$string['markedoutof'] = 'الدرجة من';
$string['markedoutofmax'] = 'الدرجة من {$a}';
$string['markoutofmax'] = 'درجة {$a->mark} من {$a->max}';
$string['marks'] = 'علامات';
$string['matchgrades'] = 'طابق الدرجات';
$string['matchgradeserror'] = 'خطأ إذا لم يتم إدراج الدرجة';
$string['matchgrades_help'] = 'الدرجات المستوردة يجب أن تتطابق مع واحدة من القائمة الثابتة من الدرجات صالحة -100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, )11.111, 10, 5, 0 (وكذلك القيم السالبة. إذا لم تتطابق فيوجد خيارين:

* خطأ إذا لم يتم إدراج الدرجة - إذا كان السؤال لا يتضمن أي من الدرجات من القائمة فسيتم عرض خطأ ولن يتم استيراد هذا السؤال
*  إذا لم يتم إدراج أقرب درجة  - إذا تم العثور على الدرجة التي لا تتطابق مع القيم المُدرجة في القائمة، فسيتم تغيير الدرجة إلى أقرب قيمة مطابقة في القائمة';
$string['matchgradesnearest'] = 'إذا لم يتم إدراج أقرب درجة';
$string['missingimportantcode'] = 'نوع السؤال هذا يفقد كود مهم: {$a}.';
$string['modified'] = 'اخر حفظ';
$string['move'] = 'الانتقال من {$a} وتغيير الروابط.';
$string['movecategory'] = 'أنقل الفئه';
$string['movedquestionsandcategories'] = 'انتقلت الأسئلة وتصنيفات الأسئلة من {$a->oldplace} إلى {$a->newplace}.';
$string['movelinksonly'] = 'فقط قم بتتغيير الأماكن التي تشير لها الروابط، لاتقم بنقل أو نسخ الملفات';
$string['moveq'] = 'أنقل السؤال / الأسئله';
$string['moveqtoanothercontext'] = 'أنقل السؤال إلى سياق اخر';
$string['moveto'] = 'انقل إلي >>';
$string['movingcategory'] = 'يتم نقل الفئه';
$string['movingcategoryandfiles'] = 'هل أنت متأكد أنك تريد نقل التصنيف {$a->name} وجميع تصنيفاته الفرعية إلى السياق ل "{$a->contextto}"؟<br />اكتشفنا {$a->urlcount} ملفات مرتبطة من الأسئلة في {$a->fromareaname}, هل ترغب في نسخ أو نقل هذه الملفات ل{$a->toareaname}؟';
$string['movingcategorynofiles'] = 'هل أنت متأكد أنك تريد نقل التصنيف "{$a->name}" وجميع تصنيفاته الفرعية إلى سياق "{$a->contextto}" ؟';
$string['movingquestions'] = 'نقل الأسئلة وأية ملفات';
$string['movingquestionsandfiles'] = 'هل أنت متأكد من أنك تريد نقل السؤال/الأسئلة {$a->questions} إلى سياق لـ <strong>"{$a->tocontext}"</strong>؟<br />اكتشفنا <strong>{$a->urlcount} ملفات</strong>مرتبطة من هذه الأسئلة في{$a->fromareaname},هل ترغب في نسخ أو نقل هذه ل  {$a->toareaname}؟';
$string['movingquestionsnofiles'] = 'هل أنت متأكد من أنك تريد نقل السؤال/الأسئلة {$a->questions} إلى سياق لـ <strong>"{$a->tocontext}"</strong>؟<br /> <strong> لا يوجد أي ملفات</strong> مرتبطة من هذه الأسئلة في{$a->fromareaname}.';
$string['nocate'] = 'لا يوجد هذا التصنيف {$a}!';
$string['nopermissionadd'] = 'ليس لديك إذن لإضافة الأسئلة هنا.';
$string['nopermissionmove'] = 'لا تمتلك إذن لنقل الأسئلة من هنا. يجب حفظ  السؤال في هذا التصنيف أو حفظه كسؤال جديد.';
$string['noquestions'] = 'لم يتم العثور على الأسئلة لتصديرها. تأكد من أنك قمت بتحديد التصنيف الذي يحتوي على الأسئلة لتصديره.';
$string['noquestionsinfile'] = 'لم تكن هناك أسئلة في ملف الاستيراد';
$string['noresponse'] = 'لا توجد إجابة';
$string['notanswered'] = 'لم يتم الاجابة عليه';
$string['notchanged'] = 'لم تتغير منذ آخر محاولة';
$string['notenoughanswers'] = 'هذا النوع من الأسئلة يتطلب على الأقل {$a} إجابات';
$string['notenoughdatatoeditaquestion'] = 'لم يتم تحديد مُعرِّف السؤال، ولامُعرِّف التصنيف ولا نوع السؤال .';
$string['notflagged'] = 'غير مُؤشَّرة';
$string['notgraded'] = 'لم يتم التقييم';
$string['notshown'] = 'غير ظاهر';
$string['notyetanswered'] = 'لم يتم الاجابة عليه بعد';
$string['notyourpreview'] = 'هذه المعاينة ليست لك';
$string['numqas'] = 'عدد محاولات السؤال';
$string['numquestions'] = 'لا يوجد أسئلة';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} مخفي)';
$string['options'] = 'خيارات';
$string['page-question-category'] = 'صفحة فئة السؤال';
$string['page-question-edit'] = 'صفحة تحرير السؤال';
$string['page-question-export'] = 'صفحة تصدير السؤال';
$string['page-question-import'] = 'صفحة إستيراد السؤال';
$string['page-question-x'] = 'أي صفحة للسؤال';
$string['parent'] = 'أعلى';
$string['parentcategory'] = 'فئه أعلى';
$string['parentcategory_help'] = 'التصنيف الأعلى هو التصنيف الذي سيندرج تحته التصنيف الجديد. "الأعلى" يعني أن هذا التصنيف لا يندرج تحت أي تصنيف آخر. وتظهر سياقات التصنيف  بخط عريض. يجب أن يكون هناك تصنيف واحد  على الأقل في كل سياق.';
$string['parsingquestions'] = 'تحليل الأسئلة من ملف الاستيراد.';
$string['partiallycorrect'] = 'إجابة جزئية';
$string['partiallycorrectfeedback'] = 'لكل إجابة صحيحة جزئياً';
$string['partiallycorrectfeedbackdefault'] = 'إجابتك صحيحة بشكل جزئي';
$string['penaltyfactor'] = 'عامل جزاء';
$string['penaltyfactor_help'] = 'يحدد هذا الإعداد الجزء الذي سيتم خصمه من النتيجة النهائية  لكل إجابة خاطئة. هذا الإعداد يصلح فقط إذا كان الاختبار يستخدم وضع التكيف.

يجب أن يكون عامل العقوبة رقم بين 0 و 1. إذا كان 1 تعني أن الطالب يجب أن يُدخل الإجابة الصحيحة في أول محاولة للحصول على أي درجة  على الإطلاق. أما إذا كان عامل العقوبة  0 يعني أن الطالب يمكنه أن يحاول قدر ما يشاء للحصول على علامات كاملة دون أن يُخصم منه درجات لكل محاولة خاطئة.';
$string['penaltyforeachincorrecttry'] = 'العقوبة لكل محاولة غير صحيحة';
$string['penaltyforeachincorrecttry_help'] = 'عندما يتم تشغيل الأسئلة باستخدام \'التفاعلية مع محاولات متعددة\' أو اختيارسلوك \'وضع  التكيف\'، سيتمكن الطالب من القيام بعدة محاولات للحصول على الإجابة الصحيحة للسؤال، ثم سيتحكم هذا الإعداد أيضاً بما سيتم خصمه كمعاقبة لكل محاولة غير صحيحة.

وتكون العقوبة نسبة من إجمالي درجة السؤال،فإذا كان السؤال يستحق ثلاث علامات، والعقوبة  0.3333333،  سوف يحصل الطالب على 3 درجات إذا أجاب بطريقة صحيحة من أول محاولة ،ويحصل الطالب على 2 إذا أجاب من المحاولة الثانية ، وعلى درجة واحدة إذا أجاب بطريقة صحيحة من المحاولة الثالثة.';
$string['permissionedit'] = 'حرر هذا السؤال';
$string['permissionmove'] = 'أنقل هذا السؤال';
$string['permissionsaveasnew'] = 'أحفظ هذا السؤال كسؤال جديد';
$string['permissionto'] = 'لديك صلاحية لـ:';
$string['previewquestion'] = 'معاينة السؤال: {$a}';
$string['published'] = 'مشترك';
$string['qtypeveryshort'] = 'صح';
$string['questionbank'] = 'بنك الأسئله';
$string['questionbehaviouradminsetting'] = 'إعدادات تصرفات الأسئلة';
$string['questionbehavioursdisabled'] = 'تصرفات الأسئلة ليتم تعطيلها';
$string['questionbehavioursdisabledexplained'] = 'أدخل قائمة مفصولة بفواصل من السلوكيات التي لا تريد أن تظهر في القائمة المنسدلة';
$string['questionbehavioursorder'] = 'ترتيب تصرفات الأسئلة';
$string['questionbehavioursorderexplained'] = 'أدخل قائمة مفصولة بفواصل من السلوكيات في النظام الذي تريد أن تظهر في القائمة المنسدلة';
$string['questioncategory'] = 'فئة السؤال';
$string['questioncatsfor'] = 'تصنيفات السؤال لـ \'{$a}\'';
$string['questiondoesnotexist'] = 'هذا السؤال غير موجود';
$string['questionidmismatch'] = 'عدم تطابق مُعرِّفات السؤال';
$string['questionname'] = 'أسم السؤال';
$string['questionnamecopy'] = '{$a} (نسخ)';
$string['questionno'] = 'سؤال {$a}';
$string['questionpreviewdefaults'] = 'الإعدادات الافتراضية لمعاينة السؤال';
$string['questionpreviewdefaults_desc'] = 'تستخدم هذه الافتراضات عندما يقوم المستخدم بمعاينة السؤال لأول مرة في بنك الأسئلة. بعد أن يقوم المستخدم بمعاينة السؤال، سيتم تخزين تفضيلاته الشخصية كتفضيلات المستخدم.';
$string['questions'] = 'أسئله';
$string['questionsmovedto'] = 'الأسئلة لا تزال قيد الاستخدام انتقلت إلى "{$a}" في تصنيف المقرر الأعلى.';
$string['questionsrescuedfrom'] = 'الأسئلة التي تم حفظها من السياق {$a}.';
$string['questiontext'] = 'نص السؤال';
$string['questiontype'] = 'نوع السؤال';
$string['questionuse'] = 'استخدم السؤال في هذا النشاط';
$string['questionvariant'] = 'السؤال البديل';
$string['questionx'] = 'سؤال {$a}';
$string['requiresgrading'] = 'يتطلب التصحيح';
$string['responsehistory'] = 'الأرشيف التأريخي للإجابة';
$string['restart'] = 'ابداء من جديد';
$string['restartwiththeseoptions'] = 'ابداء من جديد بهذه الخيارات';
$string['reviewresponse'] = 'مراجعة الاجابة';
$string['rightanswer'] = 'إجابة صحيحة';
$string['rightanswer_help'] = 'ملخص تم إنشاؤه  تلقائياً من الإجابة الصحيحة. هذا الملخص يمكن أن يكون محدود، لذلك قد ترغب في النظر في شرح الحل الصحيح في التغذية الراجعة (الملاحظات) العامة لهذا السؤال، وإيقاف هذا الخيار.';
$string['save'] = 'حفظ';
$string['savechangesandcontinueediting'] = 'حفظ التغييرات ومتابعة التحرير';
$string['saved'] = 'تم حفظ: {$a}';
$string['saveflags'] = 'حفظ حالة التأشير';
$string['selectacategory'] = 'اختر فئه';
$string['selectaqtypefordescription'] = 'ااختر نوع السؤل لتتمكن من معاينة وصفه';
$string['selectcategoryabove'] = 'اختر تصنيفاً من الأعلى';
$string['selectquestionsforbulk'] = 'إختر أسئلة للقيام بالإجراءات بالجملة';
$string['settingsformultipletries'] = 'محاولات متعددة';
$string['shareincontext'] = 'شارك في سياق {$a}';
$string['showhidden'] = 'اظهر الأسئلة القديمة ايضا';
$string['showmarkandmax'] = 'أظهر الدرجة والحد الأقصى';
$string['showmaxmarkonly'] = 'مشاهدة الدرجات القصوى فقط';
$string['shown'] = 'المُظهر';
$string['shownumpartscorrect'] = 'عرض عدد  الإجابات الصحيحة';
$string['shownumpartscorrectwhenfinished'] = 'عرض عدد الإجابات الصحيحة بمجرد الانتهاء من السؤال';
$string['showquestiontext'] = 'أظهر نص السؤال ضمن قائمة الأسئلة';
$string['specificfeedback'] = 'تغذية راجعة (ملاحظات) محددة';
$string['specificfeedback_help'] = 'التغذية الراجعة (الملاحظة) التي تعتمد على إجابة الطالب.';
$string['started'] = 'بدأ';
$string['state'] = 'حالة';
$string['step'] = 'خطوة';
$string['stoponerror'] = 'توقف عند حصول خطاء';
$string['stoponerror_help'] = 'يحدد هذا الإعداد ما إذا كانت عملية الاستيراد تتوقف عند الكشف عن خطأ، مما يؤدي إلى عدم استيراد أي أسئلة ،  أو أن يتم تجاهل أي أسئلة تحتوي على أخطاء و استيراد أي أسئلة صالحة.';
$string['submissionoutofsequence'] = 'وصول خارج التسلسل. يرجى عدم النقر على زرالخلف مرة أخرى عند العمل على أسئلة الاختبار.';
$string['submissionoutofsequencefriendlymessage'] = 'لقد أدخلت بيانات خارج التسلسل الطبيعي. يمكن أن يحدث هذا إذا كنت تستخدم أزرار المتصفح للتحرك للخلف أو إلى الأمام ،  من فضلك لا تستخدم هذه الأزرار أثناء الاختبار. ويمكن أن يحدث أيضاً إذا قمت بالنقر فوق على شيء أثناء تحميل الصفحة . انقر على <strong> متابعة </ strong> للاستئناف.';
$string['submit'] = 'سلم/قدم';
$string['submitandfinish'] = 'سلم/قدم وانتهي';
$string['submitted'] = 'إرسال: {$a}';
$string['tagarea_question'] = 'أسئلة';
$string['technicalinfo'] = 'معلومات تقنية';
$string['technicalinfo_help'] = 'هذه المعلومات التقنية ربما تكون مفيدة فقط للتقنيين المُطورين للبرمجيات الذين يعملون على إنشاء أنواع جديدة للأسئلة. قد تكون هذه المعلومات مفيدة أيضاً عند محاولة تشخيص مشاكل الأسئلة.';
$string['technicalinfomaxfraction'] = 'جزء الحد الأقصى: {$a}';
$string['technicalinfominfraction'] = 'جزء الحد الأدنى:  {$a}';
$string['technicalinfoquestionsummary'] = 'ملخص السؤال: {$a}';
$string['technicalinforesponsesummary'] = 'ملخص الإجابة: {$a}';
$string['technicalinforightsummary'] = 'ملخص الجواب الصحيح: {$a}';
$string['technicalinfostate'] = 'حالة السؤال: {$a}';
$string['technicalinfovariant'] = 'السؤال البديل: {$a}';
$string['tofilecategory'] = 'اكتب الفئه في ملف';
$string['tofilecontext'] = 'اكتب السياق في ملف';
$string['uninstallbehaviour'] = 'إزالة التثبيت لهذا السلوك من الأسئلة';
$string['uninstallqtype'] = 'إزالة التثبيت نوع هذا السؤال';
$string['unknown'] = 'غير معروف';
$string['unknownbehaviour'] = 'سلوك غير معروف: {$a}.';
$string['unknownorunhandledtype'] = 'نوع سؤال غير معروف أو غير متداول: {$a}';
$string['unknownquestion'] = 'السؤال غير معروف: {$a}.';
$string['unknownquestioncatregory'] = 'تصنيف سؤال غير معروف: {$a}.';
$string['unknownquestiontype'] = 'نوع السؤال غير معروف: {$a}.';
$string['unknowntolerance'] = 'نوع سماح غير معروف {$a}';
$string['unpublished'] = 'غير مشترك';
$string['unusedcategorydeleted'] = 'لقد تم حذف هذا التصنيف، لأنه بعد حذف المقرر الدراسي، لم تستخدم أسئلة التصنيف في أي مكان آخر.';
$string['updatedisplayoptions'] = 'حدِّث خيارات العرض';
$string['whethercorrect'] = 'سواء صحيحة';
$string['whethercorrect_help'] = 'هذا يشمل الوصف النصي "صحيح"،أو "صحيح جزئيا" أو "غير صحيح"، ويشمل كذلك التمييز بالألوان  الذي يعطي نفس المعلومات.';
$string['whichtries'] = 'أي محاولة';
$string['withselected'] = 'مع ما تم اختياره';
$string['xoutofmax'] = '{$a->mark} من {$a->max}';
$string['yougotnright'] = 'لقد قمت بإختيار إجابة صحيحة';
$string['youmustselectaqtype'] = 'لا بد من اختيار نوع السؤال';
$string['yourfileshoulddownload'] = 'ينبغي أن يبدأ تحميل ملف التصدير الخاص بك قريباً. إذا لم يبدأ التحميل، يرجى <a href="{$a}">الضغط هنا</a>.';
