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
 * Strings for component 'completion', language 'ar', version '3.8'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'الدرجة المحققة';
$string['activities'] = 'الأنشطة';
$string['activitiescompleted'] = 'إكمال الأنشطة';
$string['activitiescompletednote'] = 'ملاحظة: يجب ضبط اكتمال النشاط حتى يظهر النشاط في القائمة أعلاه.';
$string['activitieslabel'] = 'الأنشطة / الموارد';
$string['activityaggregation'] = 'يتطلب شرط';
$string['activityaggregation_all'] = 'جميع الأنشطة المحددة التي يتعين إكمالها';
$string['activityaggregation_any'] = 'أي أنشطة محددة يتم إكمالها';
$string['activitycompletion'] = 'إكمال النشاط';
$string['activitycompletionupdated'] = 'تم حفظ التغييرات';
$string['activitygradenotrequired'] = 'العلامة غير مطلوبة';
$string['affectedactivities'] = 'ستؤثر التغييرات على الأنشطة أو الموارد <b>{$a}</b> الآتية:';
$string['aggregationmethod'] = 'أسلوب التجميع';
$string['all'] = 'الكل';
$string['any'] = 'أيّ';
$string['approval'] = 'الموافقة';
$string['areyousureoverridecompletion'] = 'هل تريد بالتأكيد تجاوز حالة الإكمال الحالية لهذا النشاط لهذا المستخدم ووضع علامة عليه "{$a}"؟';
$string['badautocompletion'] = 'عندما تختار الإكمال التلقائي، يجب أن تقوم بتمكين واحد على الأقل من المتطلبات (في الأسفل) .';
$string['badcompletiongradeitemnumber'] = 'يتعذر تمكين خيار العلامة مطلوبة لـ <b>{$a}</b> لأن وضع العلامات من قبل {$a} لم يتم تمكينه.';
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
$string['completedunlockedtext'] = 'عندما تقوم بحفظ التغييرات ، سيتم محو وضع الإكمال لكافة الطلاب . إذا غيرت رأيك حول الموضوع ، لا تقم بحفظ النموذج .';
$string['completedwarning'] = 'خيارات الإكمال مقفلة';
$string['completedwarningtext'] = 'طالب أو أكثر ({$a}) قاموا بتعليم هذا النشاط على أنه مكتمل . سيؤدي تغيير خيارات الإكمال إلى محو حالة إكمالهم مما قد يتسبب بالتشويش .
لذا تم قفل الخيارات و لا يجب إلغاء قفله مالم يكن ذلك ضرورياً تماماً .';
$string['completion'] = 'تتبع الإكمال';
$string['completion-alt-auto-enabled'] = 'النظام علّم هذا العنصر على أنه مكتمل وفقاً للشروط :  {$a}';
$string['completion-alt-auto-fail'] = 'مكتمل :  {$a} (لم يحقق درجة النجاح)';
$string['completion-alt-auto-n'] = 'غير مكتمل :  {$a}';
$string['completion-alt-auto-n-override'] = 'لم يكتمل: {$a->modname}
 (تم تعيينه بواسطة {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'مكتمل :  {$a} (حقق درجة النجاح)';
$string['completion-alt-auto-y'] = 'مكتمل :  {$a}';
$string['completion-alt-auto-y-override'] = 'اكتمل: {$a->modname}
(تم تعيينه بواسطة {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'يمكن للطلاب يدوياً التعليم على هذا العنصر مكتملاً :  {$a}';
$string['completion-alt-manual-n'] = 'غير مكتمل :  {$a}، حدد لتعليم هذا العنصر مكتملاً .';
$string['completion-alt-manual-n-override'] = 'لم يكتمل: {$a->modname}
(تم تعيينه بواسطة {$a- overrideuser}). حدد لوضع علامة كاملة.';
$string['completion-alt-manual-y'] = 'مكتمل :  {$a} ، حدد لتعليم هذا العنصر غير مكتمل .';
$string['completion-alt-manual-y-override'] = 'اكتمل: {$a->modname}
 (تم تعيينه بواسطة {$a->overrideuser}). حدد لوضع علامة على أنها غير كاملة.';
$string['completion-fail'] = 'اكتمل ( لم يحقق درجة النجاح )';
$string['completion-n'] = 'لم يكتمل';
$string['completion-n-override'] = 'لم يكتمل (حدده {$a})';
$string['completion-pass'] = 'اكتمل (حقق درجة النجاح)';
$string['completion-y'] = 'اكتمل';
$string['completion-y-override'] = 'اكتمل (تم تحديده بواسطة {$a})';
$string['completion_automatic'] = 'إظهار النشاط كمكتمل عند تحقق الشروط';
$string['completion_help'] = 'إذا مكّن ، يتم تتبع إكمال النشاط يدوياً أو تلقائياً ، و ذلك بالاعتماد على شروط معينة. يمكن ضبط عدة شروط حسب الرغبة . يعتبر النشاط مكتملاً عند تحقق جميع الشروط . تشير علامة موضوعة بجانب اسم النشاط في صفحة المقرر إلى ( متى يكتمل النشاط ).';
$string['completion_manual'] = 'يمكن للطلاب يدوياً تعليم النشاط على أنه مكتمل';
$string['completion_none'] = 'لا تقم بالإشارة إلى اكتمال النشاط';
$string['completionactivitydefault'] = 'استخدم النشاط الافتراضي';
$string['completiondefault'] = 'تتبع الإنجاز الافتراضي';
$string['completiondisabled'] = 'معطل ، لا يظهر في إعدادات النشاط';
$string['completionduration'] = 'التحاق';
$string['completionenabled'] = 'مُمَكَّن، يتم ضبطه من إعدادات النشاط والإكمال';
$string['completionexpected'] = 'متوقع الإكمال في';
$string['completionexpected_help'] = 'هذا الإعداد يحدد التاريخ المتوقع إكمال هذا النشاط عنده . لا يظهر هذا التاريخ للطلاب بل يظهر فقط في تقرير إكمال النشاط .';
$string['completionexpecteddesc'] = 'الاكتمال المتوقع في {$a}';
$string['completionexpectedfor'] = 'يجب إكمال {$a->instancename}';
$string['completionicons'] = 'مربعات علامة الإكمال';
$string['completionicons_help'] = 'يمكن وضع علامة بجانب اسم النشاط تشير إلى متى يكتمل النشاط . عند عرض علامة منقطة ، يمكنك النقر عليها لتعليم المربع والإشارة إلى أنك أكملت النشاط . (النقر مرة أخرى يزيل العلامة إذا غيرت رأيك) . هذه العلامة اختيارية وهي طريقة بسيطة في تتبع تقدمك في المقرر . عند عرض مربع فارغ ، ستظهر عليه العلامة تلقائياً عند إكمالك للنشاط وفق الشروط التي وضعها المدرس .';
$string['completionmenuitem'] = 'الإكمال';
$string['completionnotenabled'] = 'خاصية الإكمال للمقرر غير ممكنة';
$string['completionnotenabledforcourse'] = 'خاصية الإكمال للمقرر غير ممكنة في هذا المقرر';
$string['completionnotenabledforsite'] = 'خاصية الإكمال للمقرر غير ممكنة في هذا الموقع';
$string['completionondate'] = 'التاريخ';
$string['completionondatevalue'] = 'التاريخ الذي سيتم فيه تحديد المادة على أنها كاملة';
$string['completionsettingslocked'] = 'إعدادات الإكمال مقفلة';
$string['completionupdated'] = 'اكتمال التحديث للنشاط <b>{$a}</b>';
$string['completionusegrade'] = 'يتطلب درجة';
$string['completionusegrade_desc'] = 'يجب أن يحصل الطالب على الدرجة لكي يستطيع إكمال هذا النشاط';
$string['completionusegrade_help'] = 'عند التمكين، يعتبر النشاط مكتملاً عندما يحصل الطالب على الدرجة. قد تظهر أيقونات النجاح والرسوب إذا تم وضع درجة نجاح للنشاط.';
$string['completionview'] = 'يتطلب استعرض';
$string['completionview_desc'] = 'يجب على الطلاب استعراض هذا النشاط لإكماله';
$string['configcompletiondefault'] = 'الإعداد الافتراضي لتتبع الإكمال عند إنشاء أنشطة جديدة.';
$string['configenablecompletion'] = 'عند التمكين ، يسمح لك هذا بتشغيل مزايا تتبع الإكمال (التقدم) على مستوى المقرر .';
$string['confirmselfcompletion'] = 'تأكيد الإكمال الذاتي';
$string['courseaggregation'] = 'يتطلب شرط';
$string['courseaggregation_all'] = 'جميع الدورات المحددة لاستكمالها';
$string['courseaggregation_any'] = 'أي مادة مختارة لإكمالها';
$string['coursealreadycompleted'] = 'لقد أكملت هذا المقرر';
$string['coursecomplete'] = 'اكتمل المقرر';
$string['coursecompleted'] = 'المقرر مكتمل';
$string['coursecompletion'] = 'إتمام مقرر دراسي';
$string['coursecompletioncondition'] = 'الشرط: {$a}';
$string['coursegrade'] = 'درجة المقرر';
$string['coursesavailable'] = 'المقررات المتوفرة';
$string['coursesavailableexplaination'] = 'ملاحظة: يجب تعيين شروط إتمام المادة لكي تظهر المادة في القائمة أعلاه.';
$string['criteria'] = 'معايير';
$string['criteriagroup'] = 'مجموعة المعايير';
$string['criteriarequiredall'] = 'كل المعايير في الأسفل مطلوبة';
$string['criteriarequiredany'] = 'أيّ معيار في الأسفل مطلوب';
$string['csvdownload'] = 'التنزيل بصيغة جدول (UTF-8 .csv)';
$string['datepassed'] = 'مر التاريخ';
$string['days'] = 'أيام';
$string['daysoftotal'] = '{$a->days}  من {$a->total}';
$string['defaultcompletion'] = 'اكتمال النشاط الافتراضي';
$string['defaultcompletionupdated'] = 'تم حفظ التغييرات';
$string['deletecompletiondata'] = 'احذف بيانات الإكمال';
$string['dependencies'] = 'تبعيات';
$string['dependenciescompleted'] = 'التبعيات اكتملت';
$string['editcoursecompletionsettings'] = 'تحرير إعدادات إكمال المقرر الدراسي';
$string['enablecompletion'] = 'مكّن تتبع الإكمال';
$string['enablecompletion_help'] = 'في حالة التمكين، يمكن تعيين شروط إكمال النشاط في إعداداته و/أو يمكن تعيين شروط إكمال المساق. يوصى بتمكينه حتى يتم عرض بيانات ذات معنى عند استعراض المساق من دفة القيادة.';
$string['enrolmentduration'] = 'أيام الإلتحاق';
$string['enrolmentdurationlength'] = 'يجب أن يظل المستخدم ملتحقاً في';
$string['err_noactivities'] = 'خيارات الإكمال غير ممكنة لأيّ من الأنشطة ، لذا لا يمكن عرض أيّ منها . يمكنك تمكين معلومات الإكمال عبر تحرير إعدادات النشاط .';
$string['err_nocourses'] = 'خيارات الإكمال غير ممكنة لأيّ من المقررات الأخرى ، لذا لا يمكن عرض أيّ منها . يمكنك تمكين الإكمال للمقرر من إعدادات المقرر .';
$string['err_nograde'] = 'لم يتم وضع درجة النجاح لهذا المقرر . لتمكين هذا النوع من المعايير يجب عليك إنشاء درجة  النجاح لهذا المقرر .';
$string['err_noroles'] = 'لا يوجد أدوار لها قدرة \'moodle/course:markcomplete\' في هذا المقرر . يمكنك تفعيل هذا المعيار بإضافة هذه القدرة إلى الدور / الأدوار .';
$string['err_nousers'] = 'لا يوجد طلاب في هذا المقرر أو المجموعة ليتم عرض معلومات إكمالهم . (افتراضياً ، يتم عرض معلومات الإكمال للطلاب فقط ، لذا إن لم يكن هناك طلاب سترى هذا الخطأ . يمكن للمدراء تعديل هذا الخيار عبر شاشة الإدارة ) .';
$string['err_settingslocked'] = 'لقد قام طالب أو أكثر بإكمال المعايير لذا فقد تم قفل الإعدادات . إلغاء قفل إعدادات معايير الإكمال سيؤدي إلى حذف أيّ بيانات موجودة للمستخدمين مما قد يسبب التشويش .';
$string['err_system'] = 'حدث خطأ داخلي في نظام الإكمال . ( يمكن لمديري النظام تمكين معلومات التنقيح لمزيد من المعلومات ) .';
$string['eventcoursecompleted'] = 'مساق تم إكماله';
$string['eventcoursecompletionupdated'] = 'إكمال مساق تم تحديثه';
$string['eventcoursemodulecompletionupdated'] = 'إكمال نشاط مساق تم تحديثه';
$string['eventdefaultcompletionupdated'] = 'الوضع الافتراضي لإكمال نشاط مساق تم تحديثه';
$string['excelcsvdownload'] = 'التنزيل بصيغة متوافقة مع Excel (.csv)';
$string['fraction'] = 'جزء';
$string['graderequired'] = 'يتطلب درجات المادة';
$string['gradexrequired'] = 'مطلوب {$a}';
$string['hiddenrules'] = 'تم إخفاء بعض الإعدادات الخاصة بـ <b>{$a}</b> . للعرض إلغ تحديد الأنشطة الأخرى';
$string['inprogress'] = 'في تقدم';
$string['manual'] = 'يدوي';
$string['manualcompletionby'] = 'أُكمل يدوياً بواسطة آخرين';
$string['manualcompletionbynote'] = 'ملاحظة: يجب تمكين moodle / course: markcomplete حتى يظهر دور في القائمة.';
$string['manualselfcompletion'] = 'إكمال يدوي ذاتي';
$string['manualselfcompletionnote'] = 'ملاحظة: يجب إضافة كتلة الإكمال الذاتي إلى المادة إذا تم تمكين الإكمال الذاتي اليدوي.';
$string['markcomplete'] = 'علّمه بأنه مكتمل';
$string['markedcompleteby'] = 'علّمه بأنه مكتمل بواسطة {$a}';
$string['markingyourselfcomplete'] = 'علّم أنك أكملته';
$string['modifybulkactions'] = 'قم بتعديل الإجراءات التي ترغب في تعديلها بالكامل';
$string['moredetails'] = 'المزيد من التفاصيل';
$string['nocriteriaset'] = 'لم يتم إعداد معايير محددة لإكمال هذا المقرر';
$string['nogradeitem'] = 'لا يمكن تمكين التقدير لـ <b>{$a}</b> لأنه لم يتم تقدير النشاط.';
$string['notcompleted'] = 'غير مكتمل';
$string['notenroled'] = 'أنت لست ملتحقاً كطالب في هذا المقرر';
$string['nottracked'] = 'لا يتم متابعتك حاليًا من خلال إكمال هذه المادة';
$string['notyetstarted'] = 'لم يبدأ بعد';
$string['overallaggregation'] = 'متطلبات الإكمال';
$string['overallaggregation_all'] = 'اكتمال المادة عند استيفاء جميع الشروط';
$string['overallaggregation_any'] = 'اكتمال المادة عندما يتم استيفاء أيّ من الشروط';
$string['pending'] = 'معلّق';
$string['periodpostenrolment'] = 'الفترة بعد الإلتحاق';
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
$string['remainingenroledfortime'] = 'يبقى ملتحقاً لفترة زمنية محددة';
$string['remainingenroleduntildate'] = 'يبقى ملتحقاً حتى تاريخ محدد';
$string['reportpage'] = 'عرض المستخدمين من {$a->from} إلى {$a->to} من أصل {$a->total}';
$string['requiredcriteria'] = 'المعايير المطلوبة';
$string['resetactivities'] = 'إخلاء كل الأنشطة والموارد المحددة';
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
$string['unenrolingfromcourse'] = 'إلغاء الالتحاق من المقرر';
$string['unenrolment'] = 'إلغاء الالتحاق';
$string['unit'] = 'الوحدة';
$string['unlockcompletion'] = 'فتح خيارات الإكمال';
$string['unlockcompletiondelete'] = 'فتح خيارات الإكمال وحذف بيانات إكمال المستخدم';
$string['updateactivities'] = 'تحديث حالة الانتهاء من الأنشطة المحددة';
$string['usealternateselector'] = 'استخدم محدد المقرر البديل';
$string['usernotenroled'] = 'المستخدم غير ملتحق بهذا المقرر';
$string['viewcoursereport'] = 'عرض تقرير المقرر';
$string['viewingactivity'] = 'عرض الـ {$a}';
$string['withconditions'] = 'مع الشروط';
$string['writingcompletiondata'] = 'كتابة بيانات الإكمال';
$string['xdays'] = '{$a} أيام';
$string['yourprogress'] = 'تقدمك';
