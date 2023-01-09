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
 * Strings for component 'completion', language 'ar', version '3.11'.
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
$string['activityaggregation'] = 'الشرط يتطلب';
$string['activityaggregation_all'] = 'جميع الأنشطة المحددة التي يتعين إكمالها';
$string['activityaggregation_any'] = 'أي أنشطة محددة يتم إكمالها';
$string['activitycompletion'] = 'إكمال النشاط';
$string['activitycompletionupdated'] = 'تم حفظ التغييرات';
$string['activitygradenotrequired'] = 'الدرجة غير مطلوبة';
$string['affectedactivities'] = 'ستؤثر التغييرات على الأنشطة أو الموارد <b>{$a}</b> الآتية:';
$string['aggregationmethod'] = 'طريقة الإجمال';
$string['all'] = 'الكل';
$string['any'] = 'أيّ';
$string['approval'] = 'الموافقة';
$string['areyousureoverridecompletion'] = 'هل تريد بالتأكيد تجاوز حالة الإكمال الحالية لهذا النشاط لهذا المستخدم ووضع علامة عليه "{$a}"؟';
$string['badautocompletion'] = 'عندما تختار الإكمال التلقائي، يجب أن تقوم بتمكين واحد على الأقل من المتطلبات (في الأسفل) .';
$string['badcompletiongradeitemnumber'] = 'يتعذر تمكين خيار الدرجة مطلوبة لـ <b>{$a}</b> لأن التقييم بواسطة {$a} لم يتم تفعيله.';
$string['bulkactivitycompletion'] = 'تحرير النشاط الكامل الانتهاء';
$string['bulkactivitydetail'] = 'حدد الأنشطة التي ترغب في تعديلها بالكامل.';
$string['bulkcompletiontracking'] = 'تتبع الانتهاء';
$string['bulkcompletiontracking_help'] = '<b>بلا</b>: لا تشير إلى اكتمال النشاط
<b>يدوياً</b> : يمكن للطلاب بمناسبة النشاط يدويا كما أنجزت
<b>مع حالة (حالات)</b>: عرض النشاط أنها كاملة عندما يتم استيفاء الشروط';
$string['checkactivity'] = 'مربع اختيار النشاط / المورد: {$a}';
$string['checkall'] = 'تحديد أو إلغاء تحديد كل الأنشطة والموارد';
$string['checkallsection'] = 'تحديد أو إلغاء تحديد كل الأنشطة والموارد في المقطع الآتي: {$a}';
$string['completeactivity'] = 'إكمال النشاط';
$string['completed'] = 'منتهٍ';
$string['completedunlocked'] = 'خيارات الإكمال غير مؤمنة';
$string['completedunlockedtext'] = 'عندما تقوم بحفظ التغييرات ، سيتم محو وضع الإكمال لكافة الطلاب . إذا غيرت رأيك حول الموضوع ، لا تقم بحفظ النموذج .';
$string['completedwarning'] = 'خيارات الإكمال مؤمنة';
$string['completedwarningtext'] = 'تم تأشير هذا النشاط على أنه مكتمل عند {$a} مشارك/مشاركين. سيؤدي تغيير خيارات الإكمال إلى محو حالة إكمالهم مما قد يسبب إرباكاً. لذا تم تأمين هذا الخيار وينبغي إبقاؤه كذلك ما لم يكن ذلك ضرورياً تماماً.';
$string['completion'] = 'تتبع الإكمال';
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
$string['completion-fail'] = 'اكتمل ( لم يحقق درجة النجاح )';
$string['completion-n'] = 'لم يكتمل';
$string['completion-n-override'] = 'لم يكتمل (حدده {$a})';
$string['completion-pass'] = 'اكتمل (حقق درجة النجاح)';
$string['completion-y'] = 'اكتمل';
$string['completion-y-override'] = 'اكتمل (تم تحديده بواسطة {$a})';
$string['completion_automatic'] = 'إظهار النشاط كمكتمل عند تحقق الشروط';
$string['completion_help'] = 'عند تفعيله، يتم تتبع إكمال النشاط يدوياً أو تلقائياً، وذلك اعتماداً على شروط معينة. يمكن وضع عدة شروط حسب الرغبة. عندها، لا يعتبر النشاط مكتملاً إلا عند تحقق جميع تلك الشروط.';
$string['completion_manual'] = 'يمكن للطلاب يدوياً تعليم النشاط على أنه مكتمل';
$string['completion_none'] = 'لا تقم بالإشارة إلى اكتمال النشاط';
$string['completionactivitydefault'] = 'استعمل إفتراضيات النشاط';
$string['completiondefault'] = 'تتبع الإكمال الافتراضي';
$string['completiondisabled'] = 'معطل ، لا يظهر في إعدادات النشاط';
$string['completionduration'] = 'الانضمام';
$string['completionenabled'] = 'مُمَكَّن، يتم ضبطه من إعدادات النشاط والإكمال';
$string['completionexpected'] = 'متوقع الإكمال في';
$string['completionexpected_help'] = 'هذا الإعداد يحدد التاريخ المتوقع لإكمال هذا النشاط.
عند اقتراب الموعد، سيتم إدراج النشاط في كتلة الخط الزمني في لوحة التحكم.';
$string['completionexpecteddesc'] = 'الاكتمال المتوقع في {$a}';
$string['completionexpectedfor'] = 'ينبغي أن يكون {$a->instancename} مكتملاً';
$string['completionicons'] = 'مربعات علامة الإكمال';
$string['completionicons_help'] = 'يمكن وضع علامة بجانب اسم النشاط تشير إلى موعد اكتماله.

عند ظهور المربع بإطار منقط، فإن التأشير سيظهر فيه تلقائياً بمجرد إكمالك للنشاط وفقاً للشروط التي حددها المعلم.

عند ظهور المربع بإطار متصل، فيمكنك النقر عليه لوضع التأشير بنفسك عندما تجد أنك قد أكملت هذا النشاط. (النقر عليه مجدداً سيزيل التأشير في حال أنك قد غيرت رأيك).';
$string['completionmenuitem'] = 'الإكمال';
$string['completionnotenabled'] = 'خاصية الإكمال للمقرر غير ممكنة';
$string['completionnotenabledforcourse'] = 'خاصية الإكمال للمقرر غير ممكنة في هذا المقرر';
$string['completionnotenabledforsite'] = 'خاصية الإكمال للمقرر غير ممكنة في هذا الموقع';
$string['completionondate'] = 'التاريخ';
$string['completionondatevalue'] = 'التاريخ الذي سيتم عنده اعتبار المقرر الدراسي مكتملاً';
$string['completionsettingslocked'] = 'إعدادات الإكمال مؤمنة';
$string['completionupdated'] = 'اكتمال التحديث للنشاط <b>{$a}</b>';
$string['completionusegrade'] = 'يتطلب الحصول على علامة';
$string['completionusegrade_desc'] = 'يجب أن يحصل الطالب على الدرجة لكي يستطيع إكمال هذا النشاط';
$string['completionusegrade_help'] = 'عند تمكينه، يعتبر النشاط مكتملاً عندما يحصل الطالب على الدرجة. إذا تم تحديد درجة نجاح للنشاط، ستظهر أيقونات النجاح والرسوب في تقرير إكمال النشاط.';
$string['completionview'] = 'يتطلب استعرض';
$string['completionview_desc'] = 'يجب على الطلاب استعراض هذا النشاط لإكماله';
$string['configcompletiondefault'] = 'الإعداد الافتراضي لتتبع الإكمال عند إنشاء أنشطة جديدة.';
$string['configenablecompletion'] = 'عند تمكينه، سيكون بالإمكان وضع شروط إكمال المقرر الدراسي ونشاطاته. وضع تلك الشروط أمر موصى به لتظهر للمستخدمين في صفحاتهم الرئيسية معلومات ذات قيمة تلخص مدى إكمالهم للمقرر.';
$string['confirmselfcompletion'] = 'تأكيد الإكمال الذاتي';
$string['courseaggregation'] = 'الشرط يتطلب';
$string['courseaggregation_all'] = 'جميع الدورات المحددة لاستكمالها';
$string['courseaggregation_any'] = 'أي مادة مختارة لإكمالها';
$string['coursealreadycompleted'] = 'لقد أكملت هذا المقرر';
$string['coursecomplete'] = 'اكتمل المقرر';
$string['coursecompleted'] = 'المقرر مكتمل';
$string['coursecompletedmessage'] = '<p>تهانينا!</p><p>لقد أكملت المقرر الدراسي تواً  <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'إكمال المقرر الدراسي';
$string['coursecompletioncondition'] = 'الشرط: {$a}';
$string['coursegrade'] = 'علامة المقرر الدراسي';
$string['coursesavailable'] = 'المقررات المتوفرة';
$string['coursesavailableexplaination'] = 'ملاحظة: ينبغي وضع شروط إكمال المقرر الدراسي ليتسنى عرضه ضمن القائمة أعلاه.';
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
$string['deletecompletiondata'] = 'حذف بيانات الإكمال';
$string['dependencies'] = 'تبعيات';
$string['dependenciescompleted'] = 'إكتمال مقررات أخرى';
$string['detail_desc:receivegrade'] = 'تلقي علامة';
$string['detail_desc:view'] = 'معاينة';
$string['editcoursecompletionsettings'] = 'تحرير إعدادات إكمال المقرر الدراسي';
$string['enablecompletion'] = 'مكّن تتبع الإكمال';
$string['enablecompletion_help'] = 'في حالة التمكين، يمكن تعيين شروط إكمال النشاط في إعداداته و/أو يمكن تعيين شروط إكمال المساق. يوصى بتمكينه حتى يتم عرض بيانات ذات معنى عند استعراض المقرر الدراسي من لوحة التحكم.';
$string['enrolmentduration'] = 'مدة الانضمام';
$string['enrolmentdurationlength'] = 'ينبغي أن يظل المستخدم منضماً لمدة';
$string['err_noactivities'] = 'خيارات الإكمال غير ممكنة لأيّ من الأنشطة ، لذا لا يمكن عرض أيّ منها . يمكنك تمكين معلومات الإكمال عبر تحرير إعدادات النشاط .';
$string['err_nocourses'] = 'خيارات الإكمال غير مُمَكَّنة لأي من المقررات الدراسية الأخرى، لذا لا يمكن عرض أي منها. يمكنك تمكين إكمال المقرر من إعداداته.';
$string['err_nograde'] = 'لم يتم وضع درجة النجاح لهذا المقرر . لتمكين هذا النوع من المعايير يجب عليك إنشاء درجة  النجاح لهذا المقرر .';
$string['err_noroles'] = 'لا توجد هناك أدوار تمتلك إمكانية \'moodle/course:markcomplete\' في هذا المقرر الدراسي.';
$string['err_nousers'] = 'لا يوجد طلاب في هذا المقرر الدراسي أو المجموعة ليتم عرض معلومات إكمالهم. (افتراضياً، يتم عرض معلومات الإكمال للمستخدمين الذين يمتلكون إمكانية \'يظهر في تقارير الإكمال\'. هذه الإمكانية متاحة لمن يمتلك دور الطلبة فقط، فإذا لم يكن هناك طلاب، سترى هذه الرسالة).';
$string['err_settingslocked'] = 'لقد قام طالب أو أكثر بإكمال المعايير، لذلك تم قفل الإعدادات. إلغاء قفل إعدادات ومعايير الإكمال سيؤدي إلى حذف أي بيانات موجودة للمستخدمين مما قد يسبب الإرباك.';
$string['err_system'] = 'حدث خطأ داخلي في نظام الإكمال . ( يمكن لمديري النظام تمكين معلومات التنقيح لمزيد من المعلومات ) .';
$string['eventcoursecompleted'] = 'مساق تم إكماله';
$string['eventcoursecompletionupdated'] = 'إكمال مساق تم تحديثه';
$string['eventcoursemodulecompletionupdated'] = 'إكمال نشاط مساق تم تحديثه';
$string['eventdefaultcompletionupdated'] = 'الوضع الافتراضي لإكمال نشاط مساق تم تحديثه';
$string['excelcsvdownload'] = 'التنزيل بصيغة متوافقة مع Excel (.csv)';
$string['fraction'] = 'جزء';
$string['graderequired'] = 'علامة المقرر الدراسي المطلوبة';
$string['gradexrequired'] = 'مطلوب {$a}';
$string['hiddenrules'] = 'تم إخفاء بعض الإعدادات الخاصة بـ <b>{$a}</b> . للعرض إلغ تحديد الأنشطة الأخرى';
$string['inprogress'] = 'في تقدم';
$string['manual'] = 'يدوي';
$string['manualcompletionby'] = 'إكمال يدوي من قبل آخرين';
$string['manualcompletionbynote'] = 'ملاحظة: ينبغي السماح للإمكانية moodle/course:markcomplete حتى يظهر الدور في القائمة.';
$string['manualselfcompletion'] = 'إكمال يدوي ذاتي';
$string['manualselfcompletionnote'] = 'ملاحظة: يجب إضافة كتلة الإكمال الذاتي إلى المادة إذا تم تمكين الإكمال الذاتي اليدوي.';
$string['markcomplete'] = 'علّمه بأنه مكتمل';
$string['markedcompleteby'] = 'علّمه بأنه مكتمل بواسطة {$a}';
$string['markingyourselfcomplete'] = 'علّم أنك أكملته';
$string['modifybulkactions'] = 'تعديل الإجراءات التي ترغب في تعديلها بالكامل';
$string['moredetails'] = 'المزيد من التفاصيل';
$string['nocriteriaset'] = 'لم يتم إعداد معايير محددة لإكمال هذا المقرر';
$string['nogradeitem'] = 'لا يمكن تمكين التقدير لـ <b>{$a}</b> لأنه لم يتم تقدير النشاط.';
$string['notcompleted'] = 'غير مكتمل';
$string['notenroled'] = 'لستَ منضماً إلى هذا المقرر';
$string['nottracked'] = 'لا يتم متابعتك حاليًا من خلال إكمال هذه المادة';
$string['notyetstarted'] = 'لم يبدأ بعد';
$string['overallaggregation'] = 'متطلبات الإكمال';
$string['overallaggregation_all'] = 'المقرر الدراسي يكتمل عند استيفاء جميع الشروط';
$string['overallaggregation_any'] = 'المقرر الدراسي يكتمل عندما يتم استيفاء أيّ من الشروط';
$string['pending'] = 'معلّق';
$string['periodpostenrolment'] = 'الفترة بعد الإلتحاق';
$string['privacy:metadata:completionstate'] = 'إذا كان النشاط قد اكتمل';
$string['privacy:metadata:course'] = 'مُعرَّف المقرر الدراسي';
$string['privacy:metadata:coursecompletedsummary'] = 'يخزن معلومات عن المستخدمين الذين أكملوا المعايير في المقرر الدراسي';
$string['privacy:metadata:coursemoduleid'] = 'مُعرَّف النشاط';
$string['privacy:metadata:coursemodulesummary'] = 'يخزن بيانات اكتمال النشاط للمستخدم';
$string['privacy:metadata:coursesummary'] = 'يخزن بيانات اكتمال المقرر للمستخدم';
$string['privacy:metadata:gradefinal'] = 'الدرجة النهائية المستلمة لإكمال المقرر الدراسي';
$string['privacy:metadata:overrideby'] = 'مُعرَّف المستخدم للشخص الذي تجاوز إكمال النشاط';
$string['privacy:metadata:reaggregate'] = 'ما إذا كان إكمال المقرر الدراسي قد أُعيد تجميعه';
$string['privacy:metadata:timecompleted'] = 'الوقت الذي تم فيه إكمال المقرر الدراسي';
$string['privacy:metadata:timeenrolled'] = 'الوقت الذي انضم فيه المستخدم إلى المقرر الدراسي';
$string['privacy:metadata:timemodified'] = 'الوقت الذي تم فيه تعديل إكتمال النشاط';
$string['privacy:metadata:timestarted'] = 'وقت بدء المقرر الدراسي';
$string['privacy:metadata:unenroled'] = 'ما إذا تم إلغاء انضمام المستخدم إلى المقرر الدراسي';
$string['privacy:metadata:userid'] = 'مُعرَّف المستخدم للشخص الذي لديه بيانات إكمال المقرر الدراسي والنشاط';
$string['privacy:metadata:viewed'] = 'ما إذا تمت معاينة النشاط';
$string['progress'] = 'تقدّم الطالب';
$string['progress-title'] = '{$a->user}، {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'التقدم: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'تمييز التعلم السابق';
$string['remainingenroledfortime'] = 'البقاء منضماً للمدة الزمنية المحددة';
$string['remainingenroleduntildate'] = 'يبقى ملتحقاً حتى تاريخ محدد';
$string['reportpage'] = 'عرض المستخدمين من {$a->from} إلى {$a->to} من أصل {$a->total}';
$string['requiredcriteria'] = 'المعايير المطلوبة';
$string['resetactivities'] = 'إخلاء كل الأنشطة والموارد المحددة';
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
$string['showcompletionconditions'] = 'إظهار شروط إكمال النشاط';
$string['showcompletionconditions_help'] = 'شروط إكمال النشاط ظاهرة دائمًا في صفحة النشاط. هذا الإعداد يحدد ما إذا كانت تلك الشروط ظاهرة أيضًا تحت كل نشاط في صفحة المقرر الدراسي.';
$string['showinguser'] = 'عرض المستخدم';
$string['unenrolingfromcourse'] = 'إلغاء الانضمام إلى المقرر الدراسي';
$string['unenrolment'] = 'إلغاء الانضمام';
$string['unit'] = 'الوحدة';
$string['unlockcompletion'] = 'فتح إعدادات الإكمال';
$string['unlockcompletiondelete'] = 'فتح إعدادات الإكمال وحذف بيانات إكمال المستخدم';
$string['updateactivities'] = 'تحديث حالة الانتهاء من الأنشطة المحددة';
$string['usealternateselector'] = 'استخدم محدد المقرر البديل';
$string['usernotenroled'] = 'المستخدم غير منضم إلى هذا المقرر الدراسي';
$string['viewcoursereport'] = 'عرض تقرير المقرر';
$string['viewingactivity'] = 'عرض الـ {$a}';
$string['withconditions'] = 'مع الشروط';
$string['writingcompletiondata'] = 'كتابة بيانات الإكمال';
$string['xdays'] = '{$a} من الأيام';
$string['yourprogress'] = 'تقدمك';
