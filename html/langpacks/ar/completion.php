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
 * Strings for component 'completion', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'تحقيق الدرجة';
$string['activities'] = 'الأنشطة';
$string['activitiescompleted'] = 'إكمال الأنشطة';
$string['activitiescompletednote'] = 'ملاحظة: يجب ضبط اكتمال النشاط حتى يظهر النشاط في القائمة أعلاه.';
$string['activitieslabel'] = 'الأنشطة / الموارد';
$string['activityaggregation'] = 'الشرط يتطلب';
$string['activityaggregation_all'] = 'جميع الأنشطة المحددة التي يتعين إكمالها';
$string['activityaggregation_any'] = 'أي أنشطة محددة يتم إكمالها';
$string['activitycompletion'] = 'إكتمال النشاط';
$string['activitycompletionupdated'] = 'تم حفظ التغييرات';
$string['activitygradenotrequired'] = 'العلامة غير مطلوبة';
$string['affectedactivities'] = 'ستؤثر التغييرات على الأنشطة أو الموارد {$a} التالية :';
$string['aggregationmethod'] = 'أسلوب التجميع';
$string['all'] = 'كل';
$string['any'] = 'أي';
$string['approval'] = 'موافقة';
$string['areyousureoverridecompletion'] = 'هل تريد بالتأكيد تجاوز حالة الإكمال الحالية لهذا النشاط لهذا المستخدم ووضع علامة عليه "{$a}"؟';
$string['badautocompletion'] = 'عندما تختار الإكمال التلقائي، يجب أن تقوم بتفعيل واحد على الأقل من المتطلبات (في الأسفل).';
$string['badcompletiongradeitemnumber'] = 'يتعذر تمكين خيار العلامة مطلوبة لـ <b>{$a}</b> لأن وضع العلامات من قبل {$a} لم يتم تمكينه.';
$string['bulkactivitycompletion'] = 'تحرير النشاط الكامل الانتهاء';
$string['bulkactivitydetail'] = 'حدد الأنشطة التي ترغب في تعديلها بالكامل.';
$string['bulkcompletiontracking'] = 'تتبع الانتهاء';
$string['bulkcompletiontracking_help'] = '<b>بلا</b>: لا تشير إلى اكتمال النشاط
<b>يدوياً</b> : يمكن للطلاب بمناسبة النشاط يدويا كما أنجزت
<b>مع حالة (حالات)</b>: عرض النشاط أنها كاملة عندما يتم استيفاء الشروط';
$string['checkactivity'] = 'مربع اختيار النشاط / المورد: {$a}';
$string['checkall'] = 'تحديد أو إلغاء تحديد كل الأنشطة والموارد';
$string['checkallsection'] = 'تحديد أو إلغاء تحديد كل الأنشطة والموارد في المقطع الآتي: {$a}';
$string['completed'] = 'منتهٍ';
$string['completedunlocked'] = 'خيارات الإكمال غير مقفلة';
$string['completedunlockedtext'] = 'عندما تقوم بحفظ التغييرات، سيتم محي وضع الإكامل لكافة الطلاب. إذا غيرت رأيك حول الموضوع، لا تقم بحفظ النموذج.';
$string['completedwarning'] = 'خيارات الإكمال مقفلة';
$string['completedwarningtext'] = 'تم تأشير هذا النشاط على أنه مكتمل عند {$a} مشارك/مشاركين. سيؤدي تغيير خيارات الإكمال إلى محو حالة إكمالهم مما قد يسبب إرباكاً. لذا تم قفل هذا الخيار وينبغي إبقاؤه كذلك ما لم يكن ذلك ضرورياً تماماً.';
$string['completion'] = 'تتبع الإكمال';
$string['completionactivitydefault'] = 'استعمل إفتراضيات النشاط';
$string['completion-alt-auto-enabled'] = 'قام النظام باعتبار هذا العنصر مكتملاً وفقاً للشروط: {$a}';
$string['completion-alt-auto-fail'] = 'مكتمل: {$a} (درجة النجاح لم تتحقق)';
$string['completion-alt-auto-n'] = 'غير مكتمل: {$a}';
$string['completion-alt-auto-n-override'] = 'لم يكتمل: {$a->modname}
 (تم تعيينه بواسطة {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'مكتمل: {$a} (درجة النجاح تحققت)';
$string['completion-alt-auto-y'] = 'مكتمل: {$a}';
$string['completion-alt-auto-y-override'] = 'اكتمل: {$a->modname}
(تم تعيينه بواسطة {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'يمكن للطلاب تأشير هذا العنصر مكتملاً: {$a}';
$string['completion-alt-manual-n'] = 'غير مكتمل: {$a}. حدد لجعله مكتملاً.';
$string['completion-alt-manual-n-override'] = 'لم يكتمل: {$a->modname}
(تم تعيينه بواسطة {$a- overrideuser}). حدد لوضع علامة كاملة.';
$string['completion-alt-manual-y'] = 'مكتمل: {$a}. حدد لجعله غير مكتمل.';
$string['completion-alt-manual-y-override'] = 'اكتمل: {$a->modname}
 (تم تعيينه بواسطة {$a->overrideuser}). حدد لوضع علامة على أنها غير كاملة.';
$string['completion_automatic'] = 'إظهار النشاط كمكتمل عند تحقق الشروط';
$string['completiondefault'] = 'تتبع الإكمال الافتراضي';
$string['completiondisabled'] = 'غير مفعّل، لا يظهر في إعدادات النشاط';
$string['completionduration'] = 'الانضمام';
$string['completionenabled'] = 'مفعّل، يتم ضبطة من إعدادات النشاط والإكمال';
$string['completionexpected'] = 'من المتوقع الإكمال في';
$string['completionexpecteddesc'] = 'الاكتمال المتوقع في {$a}';
$string['completionexpectedfor'] = 'يجب إكمال {$a->instancename}';
$string['completionexpected_help'] = 'هذا الإعداد يحدد التاريخ المتوقع لإكمال هذا النشاط.';
$string['completion-fail'] = 'اكتمل ( لم يحقق درجة النجاح )';
$string['completion_help'] = 'عند تفعيله، يتم تتبع إكمال النشاط يدوياً أو تلقائياً، وذلك اعتماداً على شروط معينة. يمكن وضع عدة شروط حسب الرغبة. عندها، لا يعتبر النشاط مكتملاً إلا عند تحقق جميع تلك الشروط.

تشير العلامة الموضوعة بجانب اسم النشاط في صفحة المساق إلى حالة إكتماله.';
$string['completionicons'] = 'مربعات علامة الإكمال';
$string['completionicons_help'] = 'يمكن وضع علامة بجانب اسم النشاط تشير إلى موعد اكتماله.

عند ظهور المربع بإطار منقط، فإن التأشير سيظهر فيه تلقائياً بمجرد إكمالك للنشاط وفقاً للشروط التي حددها المعلم.

عند ظهور المربع بإطار متصل، فيمكنك النقر عليه لوضع التأشير بنفسك عندما تجد أنك قد أكملت هذا النشاط. (النقر عليه مجدداً سيزيل التأشير في حال أنك قد غيرت رأيك).';
$string['completion_manual'] = 'يمكن للطلاب يدوياً تعليم النشاط على أنه مكتمل';
$string['completionmenuitem'] = 'الإكمال';
$string['completion-n'] = 'لم يكتمل';
$string['completion_none'] = 'لا تقم بالإشارة إلى إكتمال النشاط';
$string['completionnotenabled'] = 'خاصية اتمام المقرر الدراسي غير مفعلة';
$string['completionnotenabledforcourse'] = 'خاصية اتمام المقرر الدراسي غير مفعلة في هذا  المقرر الدراسي';
$string['completionnotenabledforsite'] = 'خاصية اتمام المقرر الدراسي غير مفعلة في هذا  الموقع';
$string['completion-n-override'] = 'لم يكتمل (حدده {$a})';
$string['completionondate'] = 'التاريخ';
$string['completionondatevalue'] = 'التاريخ الذي سيتم عنده اعتبار المساق مكتملاً';
$string['completion-pass'] = 'اكتمل (حقق درجة النجاح)';
$string['completionsettingslocked'] = 'إعدادات الإكمال مقفلة';
$string['completionupdated'] = 'اكتمال التحديث للنشاط <b>{$a}</b>';
$string['completionusegrade'] = 'يتطلب الحصول على علامة';
$string['completionusegrade_desc'] = 'يجب أن يحصل الطالب على علامة لكي يستطيع إكمال هذا النشاط';
$string['completionusegrade_help'] = 'عند التفعيل، يعتبر النشاط مكتملاً عندما يحصل الطالب على العلامة. وتظهر أيقونات النجاح والرسوب إذا تم وضع علامة نجاح للنشاط.';
$string['completionview'] = 'الاستعراض مطلوب';
$string['completionview_desc'] = 'يجب على الطلاب استعراض هذا النشاط لإكماله';
$string['completion-y'] = 'اكتمل';
$string['completion-y-override'] = 'اكتمل (تم تحديده بواسطة {$a})';
$string['configcompletiondefault'] = 'الإعداد الافتراضي لتتبع الإكمال عند إنشاء أنشطة جديدة.';
$string['configenablecompletion'] = 'عند تمكينه، سيكون بالإمكان وضع شروط إكمال المساق ونشاطاته. وضع تلك الشروط أمر موصى به لتظهر للمستخدمين في صفحاتهم الرئيسية معلومات ذات قيمة تلخص مدى إكمالهم للمساق.';
$string['confirmselfcompletion'] = 'تأكيد الإكمال الذاتي';
$string['courseaggregation'] = 'الشرط يتطلب';
$string['courseaggregation_all'] = 'جميع الدورات المحددة لاستكمالها';
$string['courseaggregation_any'] = 'أي مادة مختارة لإكمالها';
$string['coursealreadycompleted'] = 'لقد اتممت هذا المقرر الدراسي';
$string['coursecomplete'] = 'اكتمل المقرر';
$string['coursecompleted'] = 'المقرر مكتمل';
$string['coursecompletion'] = 'إكمال المساق';
$string['coursecompletioncondition'] = 'الشرط: {$a}';
$string['coursegrade'] = 'علامة المساق';
$string['coursesavailable'] = 'المقررات المتوافرة';
$string['coursesavailableexplaination'] = 'ملاحظة: ينبغي وضع شروط إكمال المساق ليتسنى عرضه ضمن القائمة أعلاه.';
$string['criteria'] = 'معايير';
$string['criteriagroup'] = 'مجموعة المعايير';
$string['criteriarequiredall'] = 'كل المعايير في الأسفل مطلوبة';
$string['criteriarequiredany'] = 'أي معيار في الأسفل مطلوب';
$string['csvdownload'] = 'التنزيل بصيغة جدول (UTF-8 .csv)';
$string['datepassed'] = 'jadv';
$string['days'] = 'أيام';
$string['daysoftotal'] = '{$a->days}  من {$a->total}';
$string['defaultcompletion'] = 'اكتمال النشاط الافتراضي';
$string['defaultcompletionupdated'] = 'تم حفظ التغييرات';
$string['deletecompletiondata'] = 'حذف بيانات الإكمال';
$string['dependencies'] = 'تبعيات';
$string['dependenciescompleted'] = 'إكتمال مساقات أخرى';
$string['editcoursecompletionsettings'] = 'تحرير إعدادات إكمال المساق';
$string['enablecompletion'] = 'تفعيل تتبع الإكمال';
$string['enablecompletion_help'] = 'في حالة التمكين ، قد يتم تعيين شروط إكمال النشاط في إعدادات النشاط و / أو قد يتم تعيين شروط إكمال المادة.
يوصى بتمكين هذا حتى يتم عرض بيانات ذات معنى في نظرة عامة على المقرر على لوحة القيادة.';
$string['enrolmentduration'] = 'مدة الانضمام';
$string['enrolmentdurationlength'] = 'ينبغي أن يظل المستخدم منضماً لمدة';
$string['err_noactivities'] = 'خيارات الإكمال غير مفعّلة لأي من النشاطات، لذا لا يمكن عرض أي منها. يمكنك تفعيل معلومات الإكمال عبر تحرير إعدادات النشاط.';
$string['err_nocourses'] = 'خيارات الإكمال غير مُمَكَّنة لأي من المساقات الأخرى، لذا لا يمكن عرض أي منها. يمكنك تمكين إكمال المساق من إعداداته.';
$string['err_nograde'] = 'لم يتم وضع علامة نجاح لهذا المقرر. يجب عليك إنشاء علامة نجاح لهذا المقرر لتفعيل هذا النوع من المعايير.';
$string['err_noroles'] = 'لا توجد هناك أدوار تمتلك إمكانية \'moodle/course:markcomplete\' في هذا المساق.';
$string['err_nousers'] = 'لا يوجد طلاب في هذا المساق أو المجموعة ليتم عرض معلومات إكمالهم. (افتراضياً، يتم عرض معلومات الإكمال للمستخدمين الذين يمتلكون إمكانية \'يظهر في تقارير الإكمال\'. هذه الإمكانية متاحة لمن يمتلك دور الطلبة فقط، فإذا لم يكن هناك طلاب، سترى هذه الرسالة).';
$string['err_settingslocked'] = 'لقد قام طالب أو أكثر بإكمال المعايير، لذلك تم قفل الإعدادات. إلغاء قفل إعدادات ومعايير الإكمال سيؤدي إلى حذف أي بيانات موجودة للمستخدمين مما قد يسبب الإرباك.';
$string['err_system'] = 'حدث خطأ داخلي في نظام الإكمال. (يمكن لمديري النظام تفعيل معلومات التنقيح لمزيد من المعلومات.)';
$string['eventcoursecompleted'] = 'اكتملت المادة';
$string['eventcoursecompletionupdated'] = 'تحديث استكمال المادة';
$string['eventcoursemodulecompletionupdated'] = 'تحديث استكمال نشاط المادة';
$string['eventdefaultcompletionupdated'] = 'تم التحديث الافتراضي لإكمال نشاط المادة';
$string['excelcsvdownload'] = 'التنزيل بصيغة متوافقة مع Excel (.csv)';
$string['fraction'] = 'جزء';
$string['graderequired'] = 'علامة المساق المطلوبة';
$string['gradexrequired'] = 'مطلوب {$a}';
$string['hiddenrules'] = 'تم إخفاء بعض الإعدادات الخاصة بـ <b>{$a}</b> . للعرض إلغ تحديد الأنشطة الأخرى';
$string['inprogress'] = 'قيد التنفيذ';
$string['manual'] = 'يدوي';
$string['manualcompletionby'] = 'إكمال يدوي من قبل آخرين';
$string['manualcompletionbynote'] = 'ملاحظة: ينبغي السماح للإمكانية moodle/course:markcomplete حتى يظهر الدور في القائمة.';
$string['manualselfcompletion'] = 'إكمال يدوي ذاتي';
$string['manualselfcompletionnote'] = 'ملاحظة: يجب إضافة كتلة الإكمال الذاتي إلى المادة إذا تم تمكين الإكمال الذاتي اليدوي.';
$string['markcomplete'] = 'علّمه بأنه مكتمل';
$string['markedcompleteby'] = 'علّمه {$a} بأنه مكتمل';
$string['markingyourselfcomplete'] = 'اعتبار نفسك منتهياً (مكملاً)';
$string['modifybulkactions'] = 'تعديل الإجراءات التي ترغب في تعديلها بالكامل';
$string['moredetails'] = 'المزيد من التفاصيل';
$string['nocriteriaset'] = 'لم يتم إعداد معايير محددة لإكمال هذا المقرر الدراسي';
$string['nogradeitem'] = 'لا يمكن تمكين التقدير لـ <b>{$a}</b> لأنه لم يتم تقدير النشاط.';
$string['notcompleted'] = 'غير مكتمل';
$string['notenroled'] = 'لستَ منضماً إلى هذا المساق';
$string['nottracked'] = 'لا يتم متابعتك حاليًا من خلال إكمال هذه المادة';
$string['notyetstarted'] = 'لم يبدأ بعد';
$string['overallaggregation'] = 'متطلبات الإكمال';
$string['overallaggregation_all'] = 'المساق مكتمل عند استيفاء جميع الشروط';
$string['overallaggregation_any'] = 'المساق مكتمل عندما يتم استيفاء أيّ من الشروط';
$string['pending'] = 'معلق';
$string['periodpostenrolment'] = 'الفترة ما بعد التسجيل';
$string['privacy:metadata:completionstate'] = 'إذا كان النشاط قد اكتمل';
$string['privacy:metadata:course'] = 'مُعرَّف المساق';
$string['privacy:metadata:coursecompletedsummary'] = 'يخزن معلومات عن المستخدمين الذين أكملوا المعايير في المساق';
$string['privacy:metadata:coursemoduleid'] = 'مُعرَّف النشاط';
$string['privacy:metadata:coursemodulesummary'] = 'يخزن بيانات اكتمال النشاط للمستخدم';
$string['privacy:metadata:coursesummary'] = 'يخزن بيانات اكتمال المساق للمستخدم';
$string['privacy:metadata:gradefinal'] = 'الدرجة النهائية المستلمة لإكمال المساق';
$string['privacy:metadata:overrideby'] = 'مُعرَّف المستخدم للشخص الذي تجاوز إكمال النشاط';
$string['privacy:metadata:reaggregate'] = 'ما إذا كان إكمال المساق قد أُعيد تجميعه';
$string['privacy:metadata:timecompleted'] = 'الوقت الذي تم فيه إكمال المساق';
$string['privacy:metadata:timeenrolled'] = 'الوقت الذي انضم فيه المستخدم إلى المساق';
$string['privacy:metadata:timemodified'] = 'الوقت الذي تم فيه تعديل إكتمال النشاط';
$string['privacy:metadata:timestarted'] = 'وقت بدء المساق';
$string['privacy:metadata:unenroled'] = 'ما إذا تم إلغاء انضمام المستخدم إلى المساق';
$string['privacy:metadata:userid'] = 'مُعرَّف المستخدم للشخص الذي لديه بيانات إكمال المساق والنشاط';
$string['privacy:metadata:viewed'] = 'ما إذا تمت معاينة النشاط';
$string['progress'] = 'تقدّم الطالب';
$string['progress-title'] = '{$a->user}، {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'التقدم: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'تمييز التعلم السابق';
$string['remainingenroledfortime'] = 'البقاء منضماً للمدة الزمنية المحددة';
$string['remainingenroleduntildate'] = 'ابق مسجلاً حتى التاريخ المحدد';
$string['reportpage'] = 'عرض المستخدمين من {$a->from} إلى {$a->to} من أصل {$a->total}';
$string['requiredcriteria'] = 'المعايير المطلوبة';
$string['resetactivities'] = 'مسح جميع الأنشطة و الموارد المحددة';
$string['restoringcompletiondata'] = 'كتابة بيانات الإكمال';
$string['roleaggregation'] = 'الشرط يتطلب';
$string['roleaggregation_all'] = 'كل الأدوار المحددة عليها تأشير استيفاء الشرط';
$string['roleaggregation_any'] = 'أي من الأدوار المحددة يمكنه تأشير استيفاء الشرط';
$string['roleidnotfound'] = 'لم يتم العثور على معرف الدور {$a}';
$string['saved'] = 'تم الحفظ';
$string['seedetails'] = 'مشاهدة التفاصيل';
$string['select'] = 'تحديد';
$string['self'] = 'ذاتي';
$string['selfcompletion'] = 'إكمال ذاتي';
$string['showinguser'] = 'عرض المستخدم';
$string['unenrolingfromcourse'] = 'إلغاء الانضمام إلى المساق';
$string['unenrolment'] = 'إلغاء الانضمام';
$string['unit'] = 'الوحدة';
$string['unlockcompletion'] = 'إلغاء قفل خيارات الإكمال';
$string['unlockcompletiondelete'] = 'إلغاء قفل خيارات الإكمال وحذف بيانات إكمال المستخدم';
$string['updateactivities'] = 'تحديث حالة الانتهاء من الأنشطة المحددة';
$string['usealternateselector'] = 'استخدم محدد المقرر البديل';
$string['usernotenroled'] = 'المستخدم غير منضم إلى هذا المساق';
$string['viewcoursereport'] = 'عرض تقرير المقرر';
$string['viewingactivity'] = 'عرض {$a}';
$string['withconditions'] = 'مع الشروط';
$string['writingcompletiondata'] = 'كتابة بيانات الإكمال';
$string['xdays'] = '{$a}من الأيام';
$string['yourprogress'] = 'تقدمك';
