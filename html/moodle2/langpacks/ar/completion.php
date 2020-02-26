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
 * Strings for component 'completion', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'تحقيق الدرجة';
$string['activities'] = 'الأنشطة';
$string['activitiescompleted'] = 'الأنشطة المكتملة';
$string['activitiescompletednote'] = 'ملاحظة: يجب ضبط اكتمال النشاط حتى يظهر النشاط في القائمة أعلاه.';
$string['activitieslabel'] = 'الأنشطة / الموارد';
$string['activityaggregation'] = 'يتطلب شرط';
$string['activityaggregation_all'] = 'جميع الأنشطة المحددة التي يتعين إكمالها';
$string['activityaggregation_any'] = 'أي أنشطة محددة يتم إكمالها';
$string['activitycompletion'] = 'إكتمال النشاط';
$string['activitycompletionupdated'] = 'تم حفظ التغييرات';
$string['affectedactivities'] = 'ستؤثر التغييرات على الأنشطة أو الموارد {$a} التالية :';
$string['aggregationmethod'] = 'أسلوب التجميع';
$string['all'] = 'كل';
$string['any'] = 'أي';
$string['approval'] = 'موافقة';
$string['areyousureoverridecompletion'] = 'هل تريد بالتأكيد تجاوز حالة الإكمال الحالية لهذا النشاط لهذا المستخدم ووضع علامة عليه "{$a}"؟';
$string['badautocompletion'] = 'عندما تختار الإكمال التلقائي، يجب أن تقوم بتفعيل واحد على الأقل من المتطلبات (في الأسفل).';
$string['bulkactivitycompletion'] = 'تحرير النشاط الكامل الانتهاء';
$string['bulkactivitydetail'] = 'حدد الأنشطة التي ترغب في تعديلها بالكامل.';
$string['bulkcompletiontracking'] = 'تتبع الانتهاء';
$string['bulkcompletiontracking_help'] = '<b>بلا</b>: لا تشير إلى اكتمال النشاط
<b>يدوياً</b> : يمكن للطلاب بمناسبة النشاط يدويا كما أنجزت
<b>مع حالة (حالات)</b>: عرض النشاط أنها كاملة عندما يتم استيفاء الشروط';
$string['checkactivity'] = 'مربع اختيار النشاط / المورد: {$a}';
$string['checkall'] = 'تحقق أو ألغ تحديد جميع الأنشطة و الموارد';
$string['checkallsection'] = 'حدد أو ألغ تحديد جميع الأنشطة والموارد في القسم التالي: {$a}';
$string['completed'] = 'منتهٍ';
$string['completedunlocked'] = 'خيارات الإكمال غير مقفلة';
$string['completedunlockedtext'] = 'عندما تقوم بحفظ التغييرات، سيتم محي وضع الإكامل لكافة الطلاب. إذا غيرت رأيك حول الموضوع، لا تقم بحفظ النموذج.';
$string['completedwarning'] = 'خيارات الإكمال مقفلة';
$string['completedwarningtext'] = 'طالب أو أكثر ({$a}) قاموا بتعليم هذا النشاط على أنه مكتمل. سيؤدي تغيير خيارات الإكمال إلى محي حالة إكمالهم مما قد يسبب التشويش. لذا تم قفل الخيارات ولا يجب إلغاء قفله مالم يكن ذلك ضرورياً تماماً.';
$string['completion'] = 'تتبع الإكمال';
$string['completionactivitydefault'] = 'استخدم النشاط الافتراضي';
$string['completion-alt-auto-enabled'] = 'يعلم النظام هذا العنصر على أنه مكتمل وفقاً لشروط';
$string['completion-alt-auto-fail'] = 'مكتمل (لم تحقق درحة النجاح)';
$string['completion-alt-auto-n'] = 'غير مكتمل';
$string['completion-alt-auto-n-override'] = 'لم يكتمل: {$a->modname}
 (تم تعيينه بواسطة {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'مكتمل (حققت درجة النجاح)';
$string['completion-alt-auto-y'] = 'مكتمل';
$string['completion-alt-auto-y-override'] = 'اكتمل: {$a->modname}
(تم تعيينه بواسطة {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'يمكن للطلاب يدوياً اعتبار هذا العنصر مكتملاً';
$string['completion-alt-manual-n'] = 'غير مكتمل؛ حدد لجعل هذا العنصر مكتمل';
$string['completion-alt-manual-n-override'] = 'لم يكتمل: {$a->modname}
(تم تعيينه بواسطة {$a- overrideuser}). حدد لوضع علامة كاملة.';
$string['completion-alt-manual-y'] = 'مكتمل؛ حدد لجعل هذا العنصر غير مكتمل';
$string['completion-alt-manual-y-override'] = 'اكتمل: {$a->modname}
 (تم تعيينه بواسطة {$a->overrideuser}). حدد لوضع علامة على أنها غير كاملة.';
$string['completion_automatic'] = 'إظهار النشاط كمكتمل عند تحقق الشروط';
$string['completiondefault'] = 'تتبع الإنجاز الافتراضي';
$string['completiondisabled'] = 'غير مفعّل، لا يظهر في إعدادات النشاط';
$string['completionduration'] = 'التحاق';
$string['completionenabled'] = 'مفعّل، يتم ضبطة من إعدادات النشاط والإكمال';
$string['completionexpected'] = 'من المتوقع الإكمال في';
$string['completionexpecteddesc'] = 'الاكتمال المتوقع في {$a}';
$string['completionexpectedfor'] = 'يجب إكمال {$a->instancename}';
$string['completionexpected_help'] = 'هذا الإعداد يحدد التاريخ المتوقع إكمال هذا النشاط عنده. لا يظهر هذا التاريخ للطلاب بل يظهر فقط في تقرير إكمال النشاط.';
$string['completion-fail'] = 'اكتمل ( لم يحقق درجة النجاح )';
$string['completion_help'] = 'عند التفعيل، يتم تتبع إكمال النشاط يدوياً أو تلقائياً، وذلك بالعتماد على شروط معينة. يمكن ضبط عدة شروط حسب الرغبة. عندما يعتبر النشاط مكتملاً عن تحقق جميع الشروط.

تشير علامة موضوعة بجانب اسم النشاط في صفحة المقرر إلى متى يكتمل النشاط.';
$string['completionicons'] = 'مربعات علامة الإكمال';
$string['completionicons_help'] = 'يمكن وضع علامة بجانب اسم النشاط تشير إلى متى يكتمل النشاط.

عند عرض علامة منقطة، يمكنك النقر عليها لتعليم المربع والإشارة إلى أنك أكملت النشاط. (نقرها مرة أخرى يزيل العلامة إذا غيرت رأيك.) هذه العلامة اختيارية وهي طريقة بسيطة في تتبع تقدمك في المقرر.

عند عرض مربع فارغ، ستظهر عليه العلامة تلقائياً عند إكمالك للنشاط وفقط الشروط التي وضعها المدرس.';
$string['completion_manual'] = 'يمكن للطلاب يدوياً تعليم النشاط على أنه مكتمل';
$string['completionmenuitem'] = 'الإكمال';
$string['completion-n'] = 'لم يكتمل';
$string['completion_none'] = 'لا تقم بالإشارة إلى إكتمال النشاط';
$string['completionnotenabled'] = 'خاصية اتمام المقرر الدراسي غير مفعلة';
$string['completionnotenabledforcourse'] = 'خاصية اتمام المقرر الدراسي غير مفعلة في هذا  المقرر الدراسي';
$string['completionnotenabledforsite'] = 'خاصية اتمام المقرر الدراسي غير مفعلة في هذا  الموقع';
$string['completion-n-override'] = 'لم يكتمل (حدده {$a})';
$string['completionondate'] = 'التاريخ';
$string['completionondatevalue'] = 'التاريخ الذي سيتم فيه تحديد المادة على أنها كاملة';
$string['completion-pass'] = 'اكتمل (حقق درجة النجاح)';
$string['completionsettingslocked'] = 'إعدادات الإكمال مقفلة';
$string['completion-title-manual-n'] = 'علّمه بأنه مكتمل';
$string['completion-title-manual-y'] = 'علّمه بأنه غير مكتمل';
$string['completionupdated'] = 'اكتمال التحديث للنشاط <b>{$a}</b>';
$string['completionusegrade'] = 'الدرجة المطلوبة';
$string['completionusegrade_desc'] = 'يجب أن يحصل الطالب على علامة لكي يستطيع إكمال هذا النشاط';
$string['completionusegrade_help'] = 'عند التفعيل، يعتبر النشاط مكتملاً عندما يحصل الطالب على العلامة. وتظهر أيقونات النجاح والرسوب إذا تم وضع علامة نجاح للنشاط.';
$string['completionview'] = 'الاستعراض مطلوب';
$string['completionview_desc'] = 'يجب على الطلاب استعراض هذا النشاط لإكماله';
$string['completion-y'] = 'اكتمل';
$string['completion-y-override'] = 'اكتمل (تم تحديده بواسطة {$a})';
$string['configcompletiondefault'] = 'الإعداد الافتراضي لتتبع الإكمال عند إنشاء أنشطة جديدة.';
$string['configenablecompletion'] = 'عند التفعيل، بيمح لك هذا بتشغيل مزايا تتبع الإكمال (التقدم) على مستوى المقرر.';
$string['confirmselfcompletion'] = 'تأكيد الإكمال الذاتي';
$string['courseaggregation'] = 'يتطلب شرط';
$string['courseaggregation_all'] = 'جميع الدورات المحددة لاستكمالها';
$string['courseaggregation_any'] = 'أي مادة مختارة لإكمالها';
$string['coursealreadycompleted'] = 'لقد اتممت هذا المقرر الدراسي';
$string['coursecomplete'] = 'اكتمل المقرر';
$string['coursecompleted'] = 'المقرر مكتمل';
$string['coursecompletion'] = 'إتمام مقرر دراسي';
$string['coursecompletioncondition'] = 'الشرط: {$a}';
$string['coursegrade'] = 'علامة المقرر';
$string['coursesavailable'] = 'المقررات المتوافرة';
$string['coursesavailableexplaination'] = '<i>يجب ضبط معايير إكمال المقرر لكي يظهر المقرر في القائمة</i>';
$string['criteria'] = 'معايير';
$string['criteriagroup'] = 'مجموعة المعايير';
$string['criteriarequiredall'] = 'كل المعايير في الأسفل مطلوبة';
$string['criteriarequiredany'] = 'أي معيار في الأسفل مطلوب';
$string['csvdownload'] = 'حمل بتنسيق الجداول الإلكترونية (UTF-8 .csv)';
$string['datepassed'] = 'jadv';
$string['days'] = 'أيام';
$string['daysoftotal'] = '{$a->days}  من {$a->total}';
$string['defaultcompletion'] = 'اكتمال النشاط الافتراضي';
$string['defaultcompletionupdated'] = 'تم حفظ التغييرات';
$string['deletecompletiondata'] = 'احذف بيانات الإكمال';
$string['dependencies'] = 'تبعيات';
$string['dependenciescompleted'] = 'التبعيات اكتملت';
$string['editcoursecompletionsettings'] = 'تحرير إعدادات إكمال المقرر';
$string['enablecompletion'] = 'تفعيل تتبع الإكمال';
$string['enablecompletion_help'] = 'في حالة التمكين ، قد يتم تعيين شروط إكمال النشاط في إعدادات النشاط و / أو قد يتم تعيين شروط إكمال المادة.
يوصى بتمكين هذا حتى يتم عرض بيانات ذات معنى في نظرة عامة على المقرر على لوحة القيادة.';
$string['enrolmentduration'] = 'يوم باقي';
$string['enrolmentdurationlength'] = 'يجب أن يظل المستخدم ملتحقاً في';
$string['err_noactivities'] = 'خيارات الإكمال غير مفعّلة لأي من النشاطات، لذا لا يمكن عرض أي منها. يمكنك تفعيل معلومات الإكمال عبر تحرير إعدادات النشاط.';
$string['err_nocourses'] = 'خيارات الإكمال غير مفعّلة لأي من المقررات الأخرى، لذا لا يمكن عرض أي منها. يمكنك تفعيل الإكمال للمقرر من إعدادات المقرر.';
$string['err_nograde'] = 'لم يتم وضع علامة نجاح لهذا المقرر. يجب عليك إنشاء علامة نجاح لهذا المقرر لتفعيل هذا النوع من المعايير.';
$string['err_noroles'] = 'لا يوجد دور له إمكانية \'moodle/course:markcomplete\' في هذا المقرر. يمكنك تفعيل هذا المعيار بإضافة هذه الإمكانية للدور/الأدوار.';
$string['err_nousers'] = 'لا يوجد طلاب في هذا المقرر أو المجموعة ليتم عرض معلومات إكمالهم. (افتراضياً، يتم عرض معلومات الإكمال للطلاب فقط، لذا إن لم يكن هناك طلاب سترى هذا الخطأ. يمكن للمدراء تعديل هذا الخيار عبر لوحة الإدارة)';
$string['err_settingslocked'] = 'لقد قام طالب أو أكثر بإكمال المعايير لذا فقد تم قفل الإعدادات. إلغاء قفل إعدادات ومعايير الإكمال سيؤدي إلى حذف أي بيانات موجودة للمستخدمين مما قد يسبب التشويش.';
$string['err_system'] = 'حدث خطأ داخلي في نظام الإكمال. (يمكن لمديري النظام تفعيل معلومات التنقيح لمزيد من المعلومات.)';
$string['eventcoursecompleted'] = 'اكتملت المادة';
$string['eventcoursecompletionupdated'] = 'تحديث استكمال المادة';
$string['eventcoursemodulecompletionupdated'] = 'تحديث استكمال نشاط المادة';
$string['eventdefaultcompletionupdated'] = 'تم التحديث الافتراضي لإكمال نشاط المادة';
$string['excelcsvdownload'] = 'تحميل بتنسيق متوافق مع إكسل (.csv)';
$string['fraction'] = 'جزء';
$string['graderequired'] = 'يتطلب درجات المادة';
$string['gradexrequired'] = 'مطلوب {$a}';
$string['hiddenrules'] = 'تم إخفاء بعض الإعدادات الخاصة بـ <b>{$a}</b> . للعرض إلغ تحديد الأنشطة الأخرى';
$string['inprogress'] = 'قيد التنفيذ';
$string['manual'] = 'يدوي';
$string['manualcompletionby'] = 'إكمال يدوي بواسطة';
$string['manualcompletionbynote'] = 'ملاحظة: يجب تمكين moodle / course: markcomplete حتى يظهر دور في القائمة.';
$string['manualselfcompletion'] = 'إكمال يدوي ذاتي';
$string['manualselfcompletionnote'] = 'ملاحظة: يجب إضافة كتلة الإكمال الذاتي إلى المادة إذا تم تمكين الإكمال الذاتي اليدوي.';
$string['markcomplete'] = 'علّمه بأنه مكتمل';
$string['markedcompleteby'] = 'علّمه {$a} بأنه مكتمل';
$string['markingyourselfcomplete'] = 'اعتبار نفسك منتهياً (مكملاً)';
$string['modifybulkactions'] = 'قم بتعديل الإجراءات التي ترغب في تعديلها بالكامل';
$string['moredetails'] = 'المزيد من التفاصيل';
$string['nocriteriaset'] = 'لم يتم إعداد معايير محددة لإكمال هذا المقرر الدراسي';
$string['nogradeitem'] = 'لا يمكن تمكين التقدير لـ <b>{$a}</b> لأنه لم يتم تقدير النشاط.';
$string['notcompleted'] = 'غير مكتمل';
$string['notenroled'] = 'أنت لست مسجلاً كطالب في هذا المقرر';
$string['nottracked'] = 'لا يتم متابعتك حاليًا من خلال إكمال هذه المادة';
$string['notyetstarted'] = 'لم يبدأ بعد';
$string['overallaggregation'] = 'متطلبات الإكمال';
$string['overallaggregation_all'] = 'اكتمال المادة عند استيفاء جميع الشروط';
$string['overallaggregation_any'] = 'اكتمال المادة عندما يتم استيفاء أيّ من الشروط';
$string['pending'] = 'معلق';
$string['periodpostenrolment'] = 'الفترة ما بعد التسجيل';
$string['privacy:metadata:completionstate'] = 'إذا كان النشاط قد اكتمل';
$string['privacy:metadata:course'] = 'معرف المقرر';
$string['privacy:metadata:coursecompletedsummary'] = 'يخزن معلومات حول المستخدمين الذين أكملوا المعايير في المادة';
$string['privacy:metadata:coursemoduleid'] = 'معرف النشاط';
$string['privacy:metadata:coursemodulesummary'] = 'يخزن بيانات اكتمال النشاط للمستخدم';
$string['privacy:metadata:coursesummary'] = 'يخزن بيانات إتمام المادة للمستخدم.';
$string['privacy:metadata:gradefinal'] = 'تسليم الدرجة النهائية لإكمال المادة';
$string['privacy:metadata:overrideby'] = 'معرف المستخدم للشخص الذي تجاوز إكمال النشاط';
$string['privacy:metadata:reaggregate'] = 'إذا تراكم إكمال المادة.';
$string['privacy:metadata:timecompleted'] = 'الوقت الذي تم الانتهاء من المادة.';
$string['privacy:metadata:timeenrolled'] = 'الوقت الذي تم فيه إلتحاق المستخدم في المادة';
$string['privacy:metadata:timemodified'] = 'الوقت الذي تم فيه تعديل اكتمال النشاط';
$string['privacy:metadata:timestarted'] = 'وقت بدأت الدورة.';
$string['privacy:metadata:unenroled'] = 'إذا تم إلغاء الإلتحاق للمستخدم من المادة';
$string['privacy:metadata:userid'] = 'معرف المستخدم للشخص الذي لديه بيانات إكمال المادة و النشاط';
$string['privacy:metadata:viewed'] = 'إذا تم عرض النشاط';
$string['progress'] = 'تقدّم الطالب';
$string['progress-title'] = '{$a->user}، {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'التقدم: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'تمييز التعلم السابق';
$string['remainingenroledfortime'] = 'ابق مسجلاً للمدة الزمنية المحددة';
$string['remainingenroleduntildate'] = 'ابق مسجلاً حتى التاريخ المحدد';
$string['reportpage'] = 'عرض المستخدمين من {$a->from} إلى {$a->to} من أصل {$a->total}';
$string['requiredcriteria'] = 'المعايير المطلوبة';
$string['resetactivities'] = 'مسح جميع الأنشطة و الموارد المحددة';
$string['restoringcompletiondata'] = 'كتابة بيانات الإكمال';
$string['roleaggregation'] = 'يتطلب شرط';
$string['roleaggregation_all'] = 'جميع الأدوار المحددة لتمييزها عند استيفاء الشرط';
$string['roleaggregation_any'] = 'أي أدوار محددة لتمييزها عند استيفاء الشرط';
$string['roleidnotfound'] = 'لم يتم العثور على معرف الدور {$a}';
$string['saved'] = 'تم الحفظ';
$string['seedetails'] = 'مشاهدة التفاصيل';
$string['select'] = 'تحديد';
$string['self'] = 'ذاتي';
$string['selfcompletion'] = 'إكمال ذاتي';
$string['showinguser'] = 'عرض المستخدم';
$string['unenrolingfromcourse'] = 'إلغاء التسجيل من المقرر';
$string['unenrolment'] = 'إلغاء التسجيل';
$string['unit'] = 'الوحدة';
$string['unlockcompletion'] = 'إلغاء قفل خيارات الإكمال';
$string['unlockcompletiondelete'] = 'إلغاء قفل خيارات الإكمال وحذف بيانات إكمال المستخدم';
$string['updateactivities'] = 'تحديث حالة الانتهاء من الأنشطة المحددة';
$string['usealternateselector'] = 'استخدم محدد المقرر البديل';
$string['usernotenroled'] = 'المستخدم غير منضم لهذا المقرر الدراسيِ';
$string['viewcoursereport'] = 'عرض تقرير المقرر';
$string['viewingactivity'] = 'عرض {$a}';
$string['withconditions'] = 'مع الشروط';
$string['writingcompletiondata'] = 'كتابة بيانات الإكمال';
$string['xdays'] = '{$a} يوم';
$string['yourprogress'] = 'تقدمك';
