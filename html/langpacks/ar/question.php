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
 * Strings for component 'question', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'الإجراء';
$string['addanotherhint'] = 'إضافة تلميح آخر';
$string['addcategory'] = 'إضافة صنف';
$string['addmorechoiceblanks'] = 'إضافة {no} خيارات أخرى';
$string['adminreport'] = 'رفع تقرير بمشاكل محتملة في قاعدة بيانات الأسئلة.';
$string['advancedsearchoptions'] = 'خيارات البحث';
$string['alltries'] = 'جميع محاولات';
$string['answer'] = 'إجابة';
$string['answers'] = 'الإجابات';
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
$string['cannotcopybackup'] = 'تعذر نسخ ملف النسخة الاحتياطية';
$string['cannotcreate'] = 'لم يتمكن من إضافة مدخل جديد في جدول question_attempts';
$string['cannotcreatepath'] = 'لا يمكن إنشاء المسار: {$a}';
$string['cannotdeletebehaviourinuse'] = 'لا يمكنك حذف السلوك  \'{$a}\'.يتم استخدامه من قبل محاولات السؤال.';
$string['cannotdeletecate'] = 'لا يمكنك حذف هذا التصنيف لأنه التصنيف الافتراضي ضمن هذا السياق.';
$string['cannotdeleteneededbehaviour'] = 'لا يمكن حذف سلوك السؤال \'{$a}\'.هناك سلوكات أخرى منصبة تعتمد عليه.';
$string['cannotdeleteqtypeinuse'] = 'لا يمكنك حذف نوع السؤال \'{$a}\'. لأن هناك أسئلة من هذا النوع موجودة ببنك الأسئلة.';
$string['cannotdeleteqtypeneeded'] = 'لا يمكنك حذف نوع السؤال \'{$a}\'. لأن هناك أنواع أخرى من الأسئلة المنصبة تعتمد عليه.';
$string['cannotdeletetopcat'] = 'الأصناف ذات المستوى الأعلى لا يمكن حذفها.';
$string['cannotedittopcat'] = 'الأصناف ذات المستوى الأعلى لا يمكن تحريرها.';
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
$string['categories'] = 'الأصناف';
$string['category'] = 'الصنف';
$string['categorycurrent'] = 'الصنف الحالي';
$string['categorycurrentuse'] = 'استعمل هذا الصنف';
$string['categorydoesnotexist'] = 'هذا الصنف غير موجود';
$string['categoryinfo'] = 'معلومات الصنف';
$string['categorymove'] = 'الصنف \'{$a->name}\' يحتوي على {$a->count} سؤال (بعضها قد تكون أسئلة مخفية أو أسئلة عشوائية لا تزال قيد الاستعمال في بعض الاختبارات). لطفاً، قم باختيار صنف آخر لنقل الأسئلة إليه.';
$string['categorymoveto'] = 'إحفظ في الصنف';
$string['categorynamecantbeblank'] = 'لا يمكن ترك اسم الصنف فارغاً.';
$string['categorynamewithcount'] = '{$a->name} ({$a->questioncount})';
$string['categorynamewithidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['categorynamewithidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->questioncount})';
$string['changeoptions'] = 'خيارات التغيير';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}">تصنيف "{$a->name}"</a> في المقرر الدراسي "{$a->coursename}" سيتغير وضع مشاركته من <strong>{$a->changefrom} إلى{$a->changeto}</strong>.';
$string['check'] = 'تحقق';
$string['chooseqtypetoadd'] = 'إختر نوع السؤال لإضافته';
$string['clearwrongparts'] = 'ردود غير صحيحة واضحة';
$string['clickflag'] = 'علم هذا السؤال';
$string['clicktoflag'] = 'تعليم هذا السؤال للرجوع إليه لاحقاً';
$string['clicktounflag'] = 'إزالة العلم';
$string['clickunflag'] = 'إزالة الإشارة';
$string['closepreview'] = 'إغلاق المُعاينة';
$string['combinedfeedback'] = 'الإفادة المركبة';
$string['comment'] = 'تعليق';
$string['commented'] = 'التعليق: {$a}';
$string['commentormark'] = 'قم بالتعليق أو تجاوز العلامة';
$string['comments'] = 'التعليقات';
$string['commentx'] = 'تعليق : {$a}';
$string['complete'] = 'تم/كامل';
$string['contexterror'] = 'يجب أن لا تكون وصلت هنا إذا لم تقم بنقل تصنيف إلى سياق آخر.';
$string['copy'] = 'نسخ من {$a} وتغيير الروابط.';
$string['correct'] = 'صحيح/صح';
$string['correctfeedback'] = 'لأي إجابة صحيحة';
$string['correctfeedbackdefault'] = 'إجابتك صحيحة';
$string['created'] = 'تم إنشائه';
$string['createdby'] = 'أٌنشيء بواسطة';
$string['createdmodifiedheader'] = 'تم إنشائه / أخر مرة تم الحفظ';
$string['createnewquestion'] = 'إنشاء سؤال جديد ...';
$string['cwrqpfs'] = 'الأسئلة العشوائية تنتخب الأسئلة من الأصناف الفرعية.';
$string['cwrqpfsinfo'] = '<p>خلال عملية الترقية إلى مودل 1.9 سنقوم بفصل أصناف الأسئلة إلى
سياقات متعددة. بعض أصناف الأسئلة والأسئلة في موقعك سيكون لزوماً تغيير
حالة مشاركتها. هذا الأمر ضروري في الحالات النادرة التي يكون فيها واحد
أو أكثر من الأسئلة \'العشوائية\' في اختبار ما مهيئة لجلب الأسئلة من مزيج من
الأصناف المشارَكة وغير المشارَكة (كما هو الحال في هذا الموقع). هذا يحدث
عند ضبط السؤال \'العشوائي\' على الاختيار من أصناف فرعية، وواحد أو أكثر
من تلك الأصناف لديه حالة مشارَكة مختلفة عن الصنف الأعلى رتبة الذي تم
فيه إنشاء السؤال العشوائي.</p>
<p>أصناف الأسئلة الآتية، التي فيها الأسئلة \'العشوائية\' في الأصناف الأعلى رتبة
تقوم بانتقاء الأسئلة، ستتغير فيها حالة المشاركة إلى نفس حالة المشاركة في الصنف
الذي يوجد فيه السؤال \'العشوائي\' عند الترقية إلى مودل 1.9. الأصناف الآتية ستتغير
حالة المشاركة فيها. الأسئلة التي ستتأثر، ستبقى شغالة في جميع الاختبارات الموجودة
حتى تقوم برفعها من تلك الاختبارات.</p>';
$string['cwrqpfsnoprob'] = 'لا توجد أصناف أسئلة في موقعك ستتأثر بمشكلة \'أسئلة عشوائية تنتقي الأسئلة من أصناف فرعية\'.';
$string['decimalplacesingrades'] = 'عدد خانات الأعداد العشرية في الدرجة';
$string['defaultfor'] = 'الافتراضي لـ {$a}';
$string['defaultinfofor'] = 'الصنف الافتراضي للأسئلة المشتركة في السياق \'{$a}\'.';
$string['defaultmark'] = 'الدرجة الافتراضية';
$string['defaultmarkmustbepositive'] = 'يجب أن تكون الدرجة الافتراضية إيجابية.';
$string['deletecoursecategorywithquestions'] = 'هناك في بنك الأسئلة ما يتعلق بتصنيف المساق هذا. إذا تابعت، سيتم حذفها. قد ترغب بنقل تلك الأسئلة أولاً مستعملاً واجهة بنك الأسئلة.';
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
$string['editcategories'] = 'تحرير الأصناف';
$string['editcategories_help'] = 'بدلاً من إبقاء جميع الأسئلة  في قائمة واحدة كبيرة، يمكن ترتيب الأسئلة في أصناف وأصناف فرعية.

لكل صنف يوجد سياق يحدد أين يمكن استعمال الأسئلة التابعة للصنف:

* سياق النشاط - الأسئلة لا تتوفر إلا في وحدة النشاط
* سياق المساق - تكون الأسئلة متاحة في جميع وحدات النشاطات في المساق
* سياق تصنيف المساق - تكون الأسئلة متاحة في جميع وحدات النشاط والمساقات التابعة لتصنيف المساق
* سياق النظام - تكون الأسئلة متاحة في جميع المساقات والأنشطة على الموقع

تستعمل الأصناف أيضاً للأسئلة العشوائية، حيث يتم اختيار الأسئلة من صنف معين.';
$string['editcategory'] = 'تحرير الصنف';
$string['editingcategory'] = 'تعديل الصنف';
$string['editingquestion'] = 'تعديل سؤال';
$string['editquestion'] = 'تحرير السؤال';
$string['editquestions'] = 'تحرير الأسئلة';
$string['editthiscategory'] = 'تحرير هذا الصنف';
$string['emptyxml'] = 'خطأ غير معروف - فم بتفريغ الملف imsmanifest.xml';
$string['enabled'] = 'تم تفعيله';
$string['erroraccessingcontext'] = 'تعذر الوصول إلى السياق';
$string['errordeletingquestionsfromcategory'] = 'خطأ في حذف السؤال من الصنف {$a}.';
$string['errorduringpost'] = 'وقع خطأ خلال مرحلة ما بعد المعالجة!';
$string['errorduringpre'] = 'وقع خطأ خلال مرحلة ما قبل المعالجة!';
$string['errorduringproc'] = 'وقع خطأ خلال المعالجة!';
$string['errorduringregrade'] = 'لا يمكن إعادة تصحيح السؤال {$a->qid},انتقل لحالة {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'خطأ: لا يمكن نسخ الملف {$a}.';
$string['errorfilecannotbemoved'] = 'خطأ: لا يمكن نقل الملف {$a}.';
$string['errorfileschanged'] = 'تغيرت الملفات المرتبطة من الأسئلة منذ أن تم عرض النموذج: خطأ.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'السؤال ({$a}) يظهر أكثر من مرة بأوزان ومواضع مختلفة في الاختبار. هذا غير مدعوم حالياً من قبل التقرير الإحصائي وقد يجعل إحصائيات هذا السؤال غير مُعول عليها.';
$string['errormanualgradeoutofrange'] = 'الدرجة {$a->grade} ليست بين 0 و {$a->maxgrade} للسؤال {$a->name}. لم يتم حفظ النتيجة ولا التعليق.';
$string['errormovingquestions'] = 'خطأ أثناء نقل الأسئلة ذات المعرفات{$a}.';
$string['errorpostprocess'] = 'وقع خطأ خلال مرحلة ما بعد المعالجة!';
$string['errorpreprocess'] = 'وقع خطأ خلال مرحلة ما قبل المعالجة!';
$string['errorprocess'] = 'وقع خطأ خلال المعالجة!';
$string['errorprocessingresponses'] = 'وقع خطأ ما عند معالجة الإجابات لديك ({$a}). أنقر على زر الاستمرار للعودة إلى الصفحة التي كنت عندها ثم حاول مجدداً.';
$string['errorsavingcomment'] = 'وقع خطأ عند حفظ التعليق على السؤال {$a->name} في قاعدة البيانات.';
$string['errorsavingflags'] = 'وقع خطأ عند حفظ حالة العلم.';
$string['errorupdatingattempt'] = 'وقع خطأ عند تحديث المحاولة {$a->name} في قاعدة البيانات.';
$string['eventquestioncategorycreated'] = 'تم إنشاء صنف الأسئلة';
$string['eventquestioncategorydeleted'] = 'تم حذف صنف الأسئلة';
$string['eventquestioncategorymoved'] = 'تم نقل صنف الأسئلة';
$string['eventquestioncategoryupdated'] = 'تم تحديث صنف الأسئلة';
$string['eventquestioncategoryviewed'] = 'تمت معاينة صنف الأسئلة';
$string['eventquestioncreated'] = 'تم إنشاء السؤال';
$string['eventquestiondeleted'] = 'تم حذف السؤال';
$string['eventquestionmoved'] = 'تم نقل السؤال';
$string['eventquestionsexported'] = 'تم تصدير الأسئلة';
$string['eventquestionsimported'] = 'تم استيراد الأسئلة';
$string['eventquestionupdated'] = 'تم تحديث السؤال';
$string['eventquestionviewed'] = 'تمت معاينة السؤال';
$string['export'] = 'تصدير';
$string['exportasxml'] = 'التصدير بصيغة مودل XML';
$string['exportcategory'] = 'تصدير الصنف';
$string['exportcategory_help'] = 'هذا الإعداد يحدد الصنف الذي تؤخذ منه الأسئلة المراد تصديرها.

بعض تنسيقات الاستيراد، مثل GIFT ومودل XML تسمح بتضمين الصنف وبيانات السياق في ملف التصدير، مما يتيح (إختيارياً) إنشاءها عند الاستيراد. عند الحاجة، ينبغي تأشير خانات الاختيار المناسبة.';
$string['exporterror'] = 'وقعت أخطاء عند التصدير!';
$string['exportfilename'] = 'الأسئلة';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = 'تنزيل هذا السؤال بتنسيق مودل XML';
$string['exportquestions'] = 'تصدير الأسئلة إلى ملف';
$string['exportquestions_help'] = 'هذه الوظيفة تسمح بتصدير صنف أسئلة كامل (مع أصنافه الفرعية) إلى ملف. لطفاً، لاحظ أنه اعتماداً على صيغة الملف، قد لا يتم تصدير بعض بيانات و/أو أنواع الأسئلة.';
$string['feedback'] = 'الإفادة';
$string['filecantmovefrom'] = 'يتعذر نقل ملفات الأسئلة لأنك لا تمتلك صلاحية إزالة الملفات من الموضع الذي تحاول نقل الملفات منه.';
$string['filecantmoveto'] = 'يتعذر نقل ملفات الأسئلة أو نسخها لأنك لا تمتلك صلاحية إضافة الملفات إلى الموضع الذي تحاول نقل الملفات إليه.';
$string['fileformat'] = 'تنسيف الملف';
$string['filesareacourse'] = 'منطقة ملفات المساق';
$string['filesareasite'] = 'منطقة ملفات الموقع';
$string['filestomove'] = 'نقل/ نسخ الملفات {$a}؟';
$string['fillincorrect'] = 'أدخل الإجابات الصحيحة';
$string['filterbytags'] = 'الترشيح حسب الوسوم...';
$string['firsttry'] = 'أول محاولة';
$string['flagged'] = 'مُعلَّم';
$string['flagthisquestion'] = 'علم هذا السؤال';
$string['formquestionnotinids'] = 'إحتوى النموذج على سؤال ليس من ضمن مُعرَّفات الأسئلة';
$string['fractionsnomax'] = 'واحد من الإجابات ينبغي أن يحرز درجة 100% ليكون بالإمكان الحصول على العلامة الكاملة لهذا السؤال.';
$string['generalfeedback'] = 'الإفادة العامة';
$string['generalfeedback_help'] = 'الإفادة العامة تظهر للطالب بعد إكماله للسؤال. بخلاف الإفادة الخاصة، والتي تعتمد على نوع السؤال وما أعطاه الطالب من إجابة، فإن الإفادة العامة نفسها ستظهر لجميع الطلبة.

يمكنك استعمال الإفادة العامة لإعطاء الطلاب إجابة متكاملة وربما رابط للمزيد من المعلومات التي يمكنهم استعمالها في حالة عدم فهمهم للسؤال.';
$string['getcategoryfromfile'] = 'إجلب الصنف من الملف';
$string['getcontextfromfile'] = 'الحصول على السياق من ملف';
$string['hintn'] = 'التلميح {no}';
$string['hintnoptions'] = 'خيارات التلميح {no}';
$string['hinttext'] = 'نص التلميح';
$string['howquestionsbehave'] = 'كيف تتصرف الأسئلة';
$string['howquestionsbehave_help'] = 'يمكن للطلبة التفاعل مع الأسئلة في الاختبار بطرق عديدة مختلفة. على سبيل المثال، قد ترغب أن يقوم الطلاب بإدخال إجابة لكل سؤال ومن ثم تقديم الاختبار بكامله، قبل أن يتم منح أي درجات أو يحصلوا على أي إجابة. هذا سيكون نمط \'الإفادة المؤجلة\'.

بديلاً عن ذلك، قد ترغب أن يسلم الطلاب كل سؤال على حدة خلال تنقلهم ما بين الأسئلة ليحصلوا على إفادة مباشرة، وإن لم تكن إجابتهم صحيحة حينها، أن تتاح لهم محاولة أخرى لجني درجات أقل. هذا سيكون نمط \'تفاعلي مع محاولات متعددة\'.

ربما ما سبق أعلاه هما أكثر الأنماط شيوعاً كأسلوب تجاوب للسؤال مع الطلبة.';
$string['idnumber'] = 'رقم المُعرَّف';
$string['idnumber_help'] = 'عند استعماله، رقم المُعرَّف ينبغي أن يكون فريداً ضمن كل صنف أسئلة. يمكن اعتباره طريقة أخرى قد تكون مفيدة للتعرف على الأسئلة، ولكن عادة ما يُترك فارغاً.';
$string['ignorebroken'] = 'تجاهل الروابط الخاطئة';
$string['import'] = 'استيراد';
$string['importcategory'] = 'استيراد الصنف';
$string['importcategory_help'] = 'هذا الإعداد يحدد الصنف الذي ستذهب إليه الأسئلة المستوردة.

بعض تنسيقات الاستيراد، مثل GIFT ومودل XML تسمح بتضمين الصنف وبيانات السياق في ملف التصدير. للاستفادة من هذه البيانات، بدلاً من الصنف المحدد، ينبغي تأشير خانات الاختيار المناسبة. إن كانت الأصناف المضمنة في الملف المستورد غير موجودة، سيتم إنشاؤها.';
$string['importerror'] = 'وقع خطأ خلال معالجة الاستيراد';
$string['importerrorquestion'] = 'خطأ عند استيراد السؤال';
$string['importfromcoursefiles'] = '... أو اختر ملف المساق ليتم استيراده.';
$string['importfromupload'] = 'إختر ملفاً ليتم تحميله ...';
$string['importingquestions'] = 'يجري استيراد {$a} أسئلة/سؤال من الملف';
$string['importparseerror'] = 'وقع خطأ/أخطاء عند تحليل الملف المستورد. لم يتم استيراد أي أسئلة. لاستيراد ما قد يكون صالحاً منها، حاول مجدداً مع تغيير الإعداد \'التوقف عند الخطأ\' إلى \'لا\'.';
$string['importquestions'] = 'استيراد الأسئلة من ملف';
$string['importquestions_help'] = 'هذه الوظيفة تتيح استيراد الأسئلة بتنسيقات متعددة عبر ملف نصي. لاحظ أن الملف ينبغي أن يكون بترميز UTF-8.';
$string['importwrongfiletype'] = 'نوع الملف الذي اخترته ({$a->actualtype}) لا يطابق النوع المتوقع للاستيراد بهذا التنسيق ({$a->expectedtype}).';
$string['impossiblechar'] = 'تم العثور على حرف {$a} مستحيل أن يكون بمثابة أقواس';
$string['includesubcategories'] = 'أظهر أيضاً الأسئلة من الأصناف الفرعية';
$string['incorrect'] = 'خطأ';
$string['incorrectfeedback'] = 'لأي إجابة غير صحيحة';
$string['incorrectfeedbackdefault'] = 'إجابتك غير صحيحة.';
$string['information'] = 'المعلومات';
$string['invalidanswer'] = 'إجابة غير مكتملة';
$string['invalidarg'] = 'تم إعطاء معاملات غير صحيحة أو تهيئة المخدم خاطئة';
$string['invalidcategoryidforparent'] = 'مُعرَّف الصنف الأعلى رتبة غير صحيح!';
$string['invalidcategoryidtomove'] = 'مُعرِّف الصنف المزمع نقله غير صحيح!';
$string['invalidconfirm'] = 'جملة التأكيد غير صحيحة';
$string['invalidcontextinhasanyquestions'] = 'سياق غير صحيح مُمرر إلى question_context_has_any_questions.';
$string['invalidgrade'] = 'الدرجات ({$a}) لا تتطابق مع خيارات الدرجة -تم  تخطي السؤال.';
$string['invalidpenalty'] = 'غرامة غير صحيحة';
$string['invalidwizardpage'] = 'صفحة برنامج إعداد خاطئة أو لم يتم تحديدها!';
$string['lastmodifiedby'] = 'آخر تعديل بواسطة';
$string['lasttry'] = 'آخر محاولة';
$string['linkedfiledoesntexist'] = 'الملف المرتبط {$a} غير موجود';
$string['makechildof'] = 'إجعله تابعاً إلى \'{$a}\'';
$string['makecopy'] = 'أنشئ نسخة';
$string['maketoplevelitem'] = 'أنقل إلى مستوى أعلى';
$string['manualgradeinvalidformat'] = 'هذا ليس رقم صالح.';
$string['manualgradeoutofrange'] = 'هذه العلامة من خارج المجال المسموح';
$string['manuallygraded'] = 'مُصحَّح يدوياً {$a->mark} مع التعليق: {$a->comment}';
$string['mark'] = 'درجة';
$string['markedoutof'] = 'الدرجة من';
$string['markedoutofmax'] = 'الدرجة من {$a}';
$string['markoutofmax'] = 'درجة {$a->mark} من {$a->max}';
$string['marks'] = 'العلامات';
$string['matchgrades'] = 'مطابقة العلامات';
$string['matchgradeserror'] = 'خطأ إذا لم تكن العلامة مدرجة';
$string['matchgrades_help'] = 'الدرجات المستوردة يجب أن تتطابق مع واحدة من القائمة الثابتة من الدرجات صالحة -100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, )11.111, 10, 5, 0 (وكذلك القيم السالبة. إذا لم تتطابق فيوجد خيارين:

* خطأ إذا لم يتم إدراج الدرجة - إذا كان السؤال لا يتضمن أي من الدرجات من القائمة فسيتم عرض خطأ ولن يتم استيراد هذا السؤال
*  إذا لم يتم إدراج أقرب درجة  - إذا تم العثور على الدرجة التي لا تتطابق مع القيم المُدرجة في القائمة، فسيتم تغيير الدرجة إلى أقرب قيمة مطابقة في القائمة';
$string['matchgradesnearest'] = 'أقرب علامة إذا لم تكن مدرجة';
$string['missingcourseorcmid'] = 'ينبغي تزويد المعامل print_question بمُعرَّف المساق أو مفتاحه الأساسي.';
$string['missingcourseorcmidtolink'] = 'ينبغي تزويد المعامل get_question_edit_link بمُعرَّف المساق أو مفتاحه الأساسي.';
$string['missingimportantcode'] = 'نوع السؤال هذا يفقد كود مهم: {$a}.';
$string['missingoption'] = 'سؤال cloze {$a} تنقصه خياراته';
$string['modified'] = 'آخر حفظ';
$string['move'] = 'الانتقال من {$a} وتغيير الروابط.';
$string['movecategory'] = 'أنقل الصنف';
$string['movedquestionsandcategories'] = 'الأسئلة وأصناف الأسئلة المنقولة من {$a->oldplace} إلى {$a->newplace}.';
$string['movelinksonly'] = 'فقط قم بتتغيير الأماكن التي تشير لها الروابط، لاتقم بنقل أو نسخ الملفات';
$string['moveq'] = 'أنقل السؤال/الأسئلة';
$string['moveqtoanothercontext'] = 'نقل السؤال إلى سياق آخر.';
$string['moveto'] = 'انقل إلي >>';
$string['movingcategory'] = 'يتم نقل الصنف';
$string['movingcategoryandfiles'] = 'هل أنت متأكد أنك تريد نقل الصنف {$a->name} وكل أصنافه الفرعية إلى السياق في "{$a->contextto}"؟<br />لقد اكتشفنا {$a->urlcount} ملفات مرتبطة من الأسئلة في {$a->fromareaname}، هل ترغب في نسخ أو نقل هذه الملفات إلى {$a->toareaname}؟';
$string['movingcategorynofiles'] = 'هل أنت متأكد أنك تريد نقل الصنف "{$a->name}" وكل أصنافه الفرعية إلى السياق في "{$a->contextto}"؟';
$string['movingquestions'] = 'نقل الأسئلة وأية ملفات';
$string['movingquestionsandfiles'] = 'هل أنت متأكد من أنك تريد نقل السؤال/الأسئلة {$a->questions} إلى سياق لـ <strong>"{$a->tocontext}"</strong>؟<br />اكتشفنا <strong>{$a->urlcount} ملفات</strong>مرتبطة من هذه الأسئلة في{$a->fromareaname},هل ترغب في نسخ أو نقل هذه ل  {$a->toareaname}؟';
$string['movingquestionsnofiles'] = 'هل أنت متأكد من أنك تريد نقل السؤال/الأسئلة {$a->questions} إلى سياق لـ <strong>"{$a->tocontext}"</strong>؟<br /> <strong> لا يوجد أي ملفات</strong> مرتبطة من هذه الأسئلة في{$a->fromareaname}.';
$string['needtochoosecat'] = 'عليك اختيار الصنف المطلوب نقل هذا السؤال إليه أو أنقر \'إلغاء\'.';
$string['nocate'] = 'لا يوجد هذا التصنيف {$a}!';
$string['nopermissionadd'] = 'ليس لديك إذن لإضافة الأسئلة هنا.';
$string['nopermissionmove'] = 'لا تمتلك إذن لنقل الأسئلة من هنا. يجب حفظ  السؤال في هذا التصنيف أو حفظه كسؤال جديد.';
$string['noprobs'] = 'لا توجد مشاكل في قاعدة بيانات الأسئلة لديك.';
$string['noquestions'] = 'لم يتم العثور على الأسئلة لتصديرها. تأكد من أنك قمت بتحديد التصنيف الذي يحتوي على الأسئلة لتصديره.';
$string['noquestionsinfile'] = 'لم تكن هناك أسئلة في ملف الاستيراد';
$string['noresponse'] = 'لا توجد إجابة';
$string['notagfiltersapplied'] = 'لم يتم تطبيق مرشحات الوسوم';
$string['notanswered'] = 'غير مجاب عليه';
$string['notchanged'] = 'لم تتغير منذ آخر محاولة';
$string['notenoughanswers'] = 'هذا النوع من الأسئلة يتطلب على الأقل {$a} إجابات';
$string['notenoughdatatoeditaquestion'] = 'لم يتم تحديد مُعرِّف السؤال، ولامُعرِّف التصنيف ولا نوع السؤال .';
$string['notenoughdatatomovequestions'] = 'ينبغي عليك تقديم مُعرَّفات الأسئلة التي تريد نقلها.';
$string['notflagged'] = 'غير مُؤشَّرة';
$string['notgraded'] = 'لم يتم التقييم';
$string['notshown'] = 'غير ظاهر';
$string['notyetanswered'] = 'غير مجاب عليه بعد';
$string['notyourpreview'] = 'هذه المعاينة ليست لك';
$string['novirtualquestiontype'] = 'لا توجد أنواع عملية للسؤال ذي النوع {$a}';
$string['numqas'] = 'عدد محاولات السؤال';
$string['numquestions'] = 'لا يوجد أسئلة';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} مخفي)';
$string['options'] = 'خيارات';
$string['page-question-category'] = 'صفحة صنف السؤال';
$string['page-question-edit'] = 'صفحة تحرير السؤال';
$string['page-question-export'] = 'صفحة تصدير السؤال';
$string['page-question-import'] = 'صفحة إستيراد السؤال';
$string['page-question-x'] = 'أي صفحة للسؤال';
$string['parent'] = 'أعلى';
$string['parentcategory'] = 'الصنف الأعلى رتبة';
$string['parentcategory_help'] = 'الصنف الأعلى هو الصنف الذي سيندرج تحته الصنف الجديد. "الأعلى" يعني أن هذا الصنف لا يندرج تحت أي صنف آخر. تظهر سياقات الصنف بخط عريض. ينبغي أن يكون هناك صنف واحد على الأقل في كل سياق.';
$string['parenthesisinproperclose'] = 'الأقواس قبل ** لم يتم إغلاقها بشكل صحيح في {$a}**';
$string['parenthesisinproperstart'] = 'الأقواس قبل ** لم يتم افتتاحها بشكل صحيح في {$a}**';
$string['parsingquestions'] = 'تحليل الأسئلة من ملف الاستيراد.';
$string['partiallycorrect'] = 'صحيحة جزئياً';
$string['partiallycorrectfeedback'] = 'لأي إجابة صحيحة جزئياً';
$string['partiallycorrectfeedbackdefault'] = 'إجابتك صحيحة بشكل جزئي';
$string['penaltyfactor'] = 'عامل جزاء';
$string['penaltyfactor_help'] = 'يحدد هذا الإعداد الجزء الذي سيتم خصمه من النتيجة النهائية  لكل إجابة خاطئة. هذا الإعداد يصلح فقط إذا كان الاختبار يستعمل وضع التكيف.

يجب أن يكون عامل الغرامة رقم بين 0 و 1. إذا كان 1 تعني أن الطالب يجب أن يُدخل الإجابة الصحيحة في أول محاولة للحصول على أي درجة  على الإطلاق. أما إذا كان عامل الغرامة 0، فيعني أن الطالب يمكنه أن يحاول قدر ما يشاء للحصول على علامات كاملة دون أن تُخصم منه درجات لكل محاولة خاطئة.';
$string['penaltyforeachincorrecttry'] = 'الغرامة لكل محاولة غير صحيحة';
$string['penaltyforeachincorrecttry_help'] = 'عند تشغيل الأسئلة باستعمال \'تفاعلي مع محاولات متعددة\' أو اختيار سلوك \'وضع  التكيف\' بحيث يتمكن الطالب من القيام بعدة محاولات للحصول على الإجابة الصحيحة للسؤال، فإن هذا الإعداد سيتحكم بما سيتم خصمه كغرامة لكل محاولة غير صحيحة.

إن الغرامة هي نسبة من إجمالي درجة السؤال، فإذا كان السؤال يستحق ثلاث علامات، والغرامة  0.3333333،  سوف يحصل الطالب على 3 درجات إذا صحت إجابته من المحاولة الأولى، وسيحصل على 2 إذا أجاب من المحاولة الثانية، وعلى درجة واحدة إذا أجاب بطريقة صحيحة من المحاولة الثالثة.

لبعض الأسئلة ذات الأجزاء المتعددة، يتم تطبيق منطق معالجة الدرجات هذا بشكل منفصل لكل جزء في السؤال. التفاصيل تعتمد على نوع السؤال ويمكن أن تكون معقدة، ولكن المبدأ هو منح الطلبة درجات مقابل المعرفة التي بينوها بشكل عادل على قدر المستطاع.';
$string['permissionedit'] = 'تحرير هذا السؤال';
$string['permissionmove'] = 'أنقل هذا السؤال';
$string['permissionsaveasnew'] = 'أحفظ هذا السؤال كسؤال جديد';
$string['permissionto'] = 'لديك صلاحية لـ:';
$string['previewquestion'] = 'معاينة السؤال: {$a}';
$string['privacy:metadata:database:question'] = 'التفاصيل بشأن سؤال محدد';
$string['privacy:metadata:database:question_attempts'] = 'معلومات بشأن محاولة معينة لسؤال محدد';
$string['privacy:metadata:database:question_attempts:flagged'] = 'مؤشر على أن المستخدم قد وضع علامة على هذا السؤال في أثناء المحاولة';
$string['privacy:metadata:database:question_attempts:responsesummary'] = 'ملخص عن استجابة السؤال';
$string['privacy:metadata:database:question_attempt_step_data'] = 'خطوات محاولة السؤال قد ترافقها بيانات إضافية متعلقة بكل من تلك الخطوات. تلك البيانات تُخزن في الجدول step_data';
$string['privacy:metadata:database:question_attempt_step_data:name'] = 'اسم عنصر البيانات';
$string['privacy:metadata:database:question_attempt_step_data:value'] = 'قيمة عنصر البيانات';
$string['privacy:metadata:database:question_attempt_steps'] = 'لكل محاولة سؤال عدد من الخطوات لتؤشر الأطوار المختلفة من البدء ثم الإكمال ثم منح العلامة. هذا الجدول يخزن المعلومات المتعلقة بكل من تلك الخطوات';
$string['privacy:metadata:database:question_attempt_steps:fraction'] = 'العلامة الممنوحة لمحاولة السؤال هذه مقايسة نسبة إلى الواحد';
$string['privacy:metadata:database:question_attempt_steps:state'] = 'حالة خطوة محاولة السؤال عند نهاية الانتقال من الخطوة';
$string['privacy:metadata:database:question_attempt_steps:timecreated'] = 'تاريخ ووقت بدء الخطوة الانتقالية هذه';
$string['privacy:metadata:database:question_attempt_steps:userid'] = 'المستخدم الذي نفذ الخطوة الانتقالية';
$string['privacy:metadata:database:question_attempts:timemodified'] = 'وقت تحديث محاولة السؤال';
$string['privacy:metadata:database:question:createdby'] = 'الشخص الذي أنشأ السؤال';
$string['privacy:metadata:database:question:generalfeedback'] = 'الإفادة العامة لهذا السؤال';
$string['privacy:metadata:database:question:modifiedby'] = 'الشخص الذي أجرى التحديث الأخير للسؤال';
$string['privacy:metadata:database:question:name'] = 'اسم السؤال';
$string['privacy:metadata:database:question:questiontext'] = 'نص السؤال';
$string['privacy:metadata:database:question:timecreated'] = 'تاريخ ووقت إنشاء هذا السؤال';
$string['privacy:metadata:database:question:timemodified'] = 'تاريخ ووقت تحديث هذا السؤال';
$string['privacy:metadata:link:qbehaviour'] = 'نظام الأسئلة الفرعي يستعمل ملحق سلوك الأسئلة';
$string['privacy:metadata:link:qformat'] = 'نظام الأسئلة الفرعي يستعمل ملحق تنسيق الأسئلة لأغراض استيراد وتصدير الأسئلة بتنسيقات مختلفة';
$string['privacy:metadata:link:qtype'] = 'نظام الأسئلة الفرعي يتعامل مع ملحق أنواع الأسئلة والذي يضم كل أنواعها المختلفة';
$string['published'] = 'مشترك';
$string['qtypeveryshort'] = 'النوع';
$string['questionaffected'] = '<a href="{$a->qurl}">السؤال "{$a->name}" ({$a->qtype})</a> موجود ضمن صنف الأسئلة هذا ولكنه قيد الاستعمال أيضاً في <a href="{$a->qurl}">الاختبار "{$a->quizname}"</a> في مساق آخر "{$a->coursename}".';
$string['questionbank'] = 'بنك الأسئلة';
$string['questionbehaviouradminsetting'] = 'إعدادات سلوك الأسئلة';
$string['questionbehavioursdisabled'] = 'سلوكات الأسئلة المزمع تعطيلها';
$string['questionbehavioursdisabledexplained'] = 'أدخل قائمة مفصولة بفوارز للسلوكيات التي لا تريدها أن تظهر في القائمة المنسدلة.';
$string['questionbehavioursorder'] = 'ترتيب سلوكات الأسئلة';
$string['questionbehavioursorderexplained'] = 'أدخل قائمة مفصولة بفوارز للسلوكيات وحسب الترتيب الذي تريد أن تظهر به في القائمة المنسدلة.';
$string['questioncategory'] = 'صنف السؤال';
$string['questioncatsfor'] = 'أصناف الأسئلة لـ \'{$a}\'';
$string['questiondoesnotexist'] = 'هذا السؤال غير موجود';
$string['questionformtagheader'] = 'وسوم {$a}';
$string['questionidmismatch'] = 'عدم تطابق مُعرِّفات السؤال';
$string['questionname'] = 'اسم السؤال';
$string['questionnamecopy'] = '{$a} (نسخ)';
$string['questionno'] = 'سؤال {$a}';
$string['questionpreviewdefaults'] = 'الإعدادات الافتراضية لمعاينة السؤال';
$string['questionpreviewdefaults_desc'] = 'تستخدم هذه الافتراضات عندما يقوم المستخدم بمعاينة السؤال لأول مرة في بنك الأسئلة. بعد أن يقوم المستخدم بمعاينة السؤال، سيتم تخزين تفضيلاته الشخصية كتفضيلات المستخدم.';
$string['questions'] = 'الأسئلة';
$string['questionsaveerror'] = 'وقعت أخطاء في أثناء حفظ السؤال - ({$a})';
$string['questionsinuse'] = '(* الأسئلة المعلمة بالنجمة مستعملة في مكان ما، على سبيل المثال في أحد الاختبارات. لذلك، عند المتابعة فإن تلك الأسئلة لن يتم حذفها فعلياً، بل سيتم إخفاؤها فقط.)';
$string['questionsmovedto'] = 'الأسئلة لا تزال قيد الاستخدام انتقلت إلى "{$a}" في تصنيف المقرر الأعلى.';
$string['questionsrescuedfrom'] = 'الأسئلة التي تم حفظها من السياق {$a}.';
$string['questionsrescuedfrominfo'] = 'هذه الأسئلة (والتي قد يكون بعضها مخفياً) تم حفظها عندما جرى حذف السياق {$a} لأنها لا تزال قيد الاستعمال من قبل بعض الاختبارات أو النشاطات الأخرى.';
$string['questiontags'] = 'وسوم السؤال';
$string['questiontext'] = 'نص السؤال';
$string['questiontype'] = 'نوع السؤال';
$string['questionuse'] = 'استخدم السؤال في هذا النشاط';
$string['questionvariant'] = 'السؤال البديل';
$string['questionx'] = 'سؤال {$a}';
$string['requiresgrading'] = 'يتطلب التصحيح';
$string['responsehistory'] = 'التوثيق التاريخي للاستجابة';
$string['restart'] = 'البدء مجدداً';
$string['restartwiththeseoptions'] = 'البدء مجدداً مع هذه الخيارات';
$string['restoremultipletopcats'] = 'ملف الحفظ الاحتياطي يحتوي على أكثر من صنف أسئلة ذي مستوى رئيسي ضمن السياق {$a}.';
$string['reviewresponse'] = 'مراجعة الاجابة';
$string['rightanswer'] = 'إجابة صحيحة';
$string['rightanswer_help'] = 'ملخص مولد تلقائياً للاستجابة الصحيحة. هذا الملخص قد يكون محدوداً، لذلك قد ترغب في الأخذ بعين الاعتبار شرح الحل الصحيح في الإفادة العامة لهذا السؤال، وإيقاف هذا الخيار.';
$string['save'] = 'حفظ';
$string['savechangesandcontinueediting'] = 'حفظ التغييرات ومتابعة التحرير';
$string['saved'] = 'تم حفظ: {$a}';
$string['saveflags'] = 'حفظ حالة التأشير';
$string['selectacategory'] = 'إختر الصنف:';
$string['selectaqtypefordescription'] = 'إختر نوع السؤل لتتمكن من معاينة وصفه.';
$string['selectcategoryabove'] = 'إختر صنفاً من الأعلى';
$string['selectquestionsforbulk'] = 'إختر أسئلة للقيام بالإجراءات بالجملة';
$string['settingsformultipletries'] = 'محاولات متعددة';
$string['shareincontext'] = 'شارك في سياق {$a}';
$string['showhidden'] = 'اظهر الأسئلة القديمة ايضا';
$string['showmarkandmax'] = 'أظهر الدرجة والحد الأقصى';
$string['showmaxmarkonly'] = 'مشاهدة الدرجات القصوى فقط';
$string['shown'] = 'ظاهر';
$string['shownumpartscorrect'] = 'عرض عدد  الإجابات الصحيحة';
$string['shownumpartscorrectwhenfinished'] = 'عرض عدد الإجابات الصحيحة بمجرد الانتهاء من السؤال';
$string['showquestiontext'] = 'أظهر نص السؤال ضمن قائمة الأسئلة';
$string['specificfeedback'] = 'الإفادة الخاصة';
$string['specificfeedback_help'] = 'الإفادة التي تعتمد على إجابة الطالب.';
$string['started'] = 'بدأ';
$string['state'] = 'الحالة';
$string['step'] = 'الخطوة';
$string['steps'] = 'الخطوات';
$string['stoponerror'] = 'توقف عند الخطأ';
$string['stoponerror_help'] = 'يحدد هذا الإعداد ما إذا كانت عملية الاستيراد تتوقف عند الكشف عن خطأ، مما يؤدي إلى عدم استيراد أي أسئلة ،  أو أن يتم تجاهل أي أسئلة تحتوي على أخطاء و استيراد أي أسئلة صالحة.';
$string['submissionoutofsequence'] = 'وصول خارج التسلسل. يرجى عدم النقر على زرالخلف مرة أخرى عند العمل على أسئلة الاختبار.';
$string['submissionoutofsequencefriendlymessage'] = 'لقد أدخلت بيانات خارج التسلسل الطبيعي. يمكن أن يحدث هذا إذا كنت تستخدم أزرار المتصفح للتحرك للخلف أو إلى الأمام ،  من فضلك لا تستخدم هذه الأزرار أثناء الاختبار. ويمكن أن يحدث أيضاً إذا قمت بالنقر فوق على شيء أثناء تحميل الصفحة . انقر على <strong> متابعة </ strong> للاستئناف.';
$string['submit'] = 'تسليم';
$string['submitandfinish'] = 'تسليم وإنهاء';
$string['submitted'] = 'إرسال: {$a}';
$string['tagarea_question'] = 'الأسئلة';
$string['technicalinfo'] = 'معلومات تقنية';
$string['technicalinfo_help'] = 'هذه المعلومات التقنية ربما تكون مفيدة فقط للتقنيين المُطورين للبرمجيات الذين يعملون على إنشاء أنواع جديدة للأسئلة. قد تكون هذه المعلومات مفيدة أيضاً عند محاولة تشخيص مشاكل الأسئلة.';
$string['technicalinfomaxfraction'] = 'جزء الحد الأقصى: {$a}';
$string['technicalinfominfraction'] = 'جزء الحد الأدنى:  {$a}';
$string['technicalinfoquestionsummary'] = 'ملخص السؤال: {$a}';
$string['technicalinforesponsesummary'] = 'ملخص الإجابة: {$a}';
$string['technicalinforightsummary'] = 'ملخص الجواب الصحيح: {$a}';
$string['technicalinfostate'] = 'حالة السؤال: {$a}';
$string['technicalinfovariant'] = 'السؤال البديل: {$a}';
$string['tofilecategory'] = 'أكتب الصنف في الملف';
$string['tofilecontext'] = 'أكتب السياق في الملف';
$string['topfor'] = 'مستوى أعلى لـ {$a}';
$string['uninstallbehaviour'] = 'إزالة التثبيت لهذا السلوك من الأسئلة';
$string['uninstallqtype'] = 'إلغِ تنصيب نوع السؤال هذا';
$string['unknown'] = 'غير معروف';
$string['unknownbehaviour'] = 'سلوك غير معروف: {$a}.';
$string['unknownorunhandledtype'] = 'نوع سؤال غير معروف أو غير متداول: {$a}';
$string['unknownquestion'] = 'السؤال غير معروف: {$a}.';
$string['unknownquestioncatregory'] = 'تصنيف سؤال غير معروف: {$a}.';
$string['unknownquestiontype'] = 'نوع السؤال غير معروف: {$a}.';
$string['unknowntolerance'] = 'نوع سماح غير معروف {$a}';
$string['unpublished'] = 'غير مشترك';
$string['unusedcategorydeleted'] = 'لقد تم حذف هذا الصنف، لأنه بعد حذف المساق، لم تستعمل أسئلة الصنف في أي مكان آخر.';
$string['updatedisplayoptions'] = 'حدِّث خيارات العرض';
$string['upgradeproblemcategoryloop'] = 'تم الكشف عن مشكلة عند ترقية أصناف الأسئلة. هناك حلقة مفرغة في شجرة الأصناف. مُعرَّفات الأصناف المتأثرة هي {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'تعذر تحديث صنف الأسئلة {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'تم الكشف عن مشكلة عند ترقية أصناف الأسئلة. الصنف {$a->id} يقع ضمن الصنف {$a->parent}، الذي ليس له وجود. تم تغيير الصنف الأعلى رتبة لإصلاح المشكلة.';
$string['whethercorrect'] = 'سواء صحيحة';
$string['whethercorrect_help'] = 'هذا يشمل الوصف النصي "صحيح"،أو "صحيح جزئيا" أو "غير صحيح"، ويشمل كذلك التمييز بالألوان  الذي يعطي نفس المعلومات.';
$string['whichtries'] = 'أي محاولة';
$string['withselected'] = 'مع ما تم اختياره';
$string['wrongprefix'] = 'بادئة اسم ذات تنسيق خاطئ {$a}';
$string['xoutofmax'] = '{$a->mark} من {$a->max}';
$string['yougotnright'] = 'لقد حددتَ {$a->num} بشكل صحيح.';
$string['youmustselectaqtype'] = 'لا بد من اختيار نوع السؤال';
$string['yourfileshoulddownload'] = 'ينبغي أن يبدأ تحميل ملف التصدير الخاص بك قريباً. إذا لم يبدأ التحميل، يرجى <a href="{$a}">الضغط هنا</a>.';
