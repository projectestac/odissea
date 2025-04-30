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
 * Strings for component 'completion', language 'ar', version '4.4'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'الدرجة المحققة';
$string['achievingpassinggrade'] = 'يحقق درجة النجاح';
$string['activities'] = 'الأنشطة';
$string['activitiescompleted'] = 'إكمال الأنشطة';
$string['activitiescompletednote'] = 'ملاحظة: يجب ضبط اكتمال النشاط حتى يظهر النشاط في القائمة أعلاه.';
$string['activitieslabel'] = 'الأنشطة / الموارد';
$string['activityaggregation'] = 'الشرط يتطلب';
$string['activityaggregation_all'] = 'جميع الأنشطة المحددة التي يتعين إكمالها';
$string['activityaggregation_any'] = 'أي أنشطة محددة يتم إكمالها';
$string['activitycompletion'] = 'شروط الإكمال';
$string['activitycompletionupdated'] = 'تم حفظ التغييرات';
$string['activitygradenotrequired'] = 'الدرجة غير مطلوبة';
$string['activitygradetopassnotset'] = 'لم يتم ضبط درجة نجاح صحيحة لهذا النشاط. يمكن ضبطها في قسم الدرجة من إعدادات النشاط.';
$string['addconditions'] = 'إضافة الشروط';
$string['affectedactivities'] = 'ستؤثر التغييرات على الأنشطة أو الموارد <b>{$a}</b> الآتية:';
$string['aggregationmethod'] = 'طريقة الإجمال';
$string['all'] = 'الكل';
$string['allconditions'] = 'النشاط يُعد مكتملاً عندما يقوم الطلاب بكل مما يأتي:';
$string['any'] = 'أيّ';
$string['approval'] = 'الموافقة';
$string['areyousureoverridecompletion'] = 'هل تريد بالتأكيد تجاوز حالة الإكمال الحالية لهذا النشاط لهذا المستخدم ووضع علامة عليه "{$a}"؟';
$string['badautocompletion'] = 'ينبغي عليك تحديد شرط واحد على الأقل.';
$string['badcompletiongradeitemnumber'] = 'يتعذر تمكين خيار الدرجة مطلوبة لـ <b>{$a}</b> لأن التقييم بواسطة {$a} لم يتم تفعيله.';
$string['bulkactivitycompletion'] = 'تحرير النشاط الكامل الانتهاء';
$string['bulkactivitydetail'] = 'حدد الأنشطة التي ترغب في تعديلها بالكامل.';
$string['bulkcompletiontracking'] = 'تتبع الانتهاء';
$string['bulkcompletiontracking_help'] = '<b>بلا</b>: لا تشير إلى اكتمال النشاط
<b>يدوياً</b> : يمكن للطلاب بمناسبة النشاط يدويا كما أنجزت
<b>مع حالة (حالات)</b>: عرض النشاط أنها كاملة عندما يتم استيفاء الشروط';
$string['checkactivity'] = 'مربع اختيار النشاط / المورد: {$a}';
$string['checkall'] = 'تحديد أو إلغاء تحديد كل الأنشطة والموارد';
$string['checkallsection'] = 'تحديد أو إلغاء تحديد كل الأنشطة والموارد في القسم الآتي: {$a}';
$string['completeactivity'] = 'إكمال النشاط';
$string['completed'] = 'منتهٍ';
$string['completedunlocked'] = 'خيارات الإكمال غير مؤمنة';
$string['completedunlockedtext'] = 'عندما تحفظ هذا النموذج، سيتم محو بيانات الإكمال ثم يُعاد إحتسابها حيثما أمكن ذلك. لتجنب ذلك، يمكنك الانتقال إلى صفحة أخرى بدون إجراء الحفظ.';
$string['completedwarning'] = 'خيارات الإكمال مؤمنة';
$string['completedwarningtext'] = 'تم تأشير هذا النشاط على أنه مكتمل عند طالب أو أكثر. إذا أزلت تأمين الإعدادات لتغيير خيارات الإكمال ثم حفظت النموذج، سيتم محو بيانات الإكمال ثم إعادة إحتسابها حيثما أمكن ذلك. تأشيرات الإكمال اليدوية لا يمكن إعادة إحتسابها، لذلك وفي تلك الحالات، سيترتب على الطلاب إعادة تأشيرها مكتملة مرة أخرى.';
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
$string['completion_automatic'] = 'إضافة المتطلبات';
$string['completion_help'] = 'عند تفعيله، يتم تتبع إكمال النشاط يدوياً أو تلقائياً، وذلك اعتماداً على شروط معينة. يمكن وضع عدة شروط حسب الرغبة. عندها، لا يعتبر النشاط مكتملاً إلا عند تحقق جميع تلك الشروط.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'على الطلاب تعليم النشاط على أنه مكتمل يدوياً';
$string['completion_none'] = 'لا أحد';
$string['completionactivitydefault'] = 'استعمل إفتراضيات النشاط';
$string['completionanygrade_desc'] = 'أي تقدير';
$string['completiondefault'] = 'تتبع الإكمال الافتراضي';
$string['completiondisabled'] = 'معطل ، لا يظهر في إعدادات النشاط';
$string['completionduration'] = 'الانضمام';
$string['completionenabled'] = 'مُمَكَّن، يتم ضبطه من إعدادات النشاط والإكمال';
$string['completionexpected'] = 'وضع التذكير في المخطط الزمني';
$string['completionexpected_help'] = 'هذا يسمح لك بإعداد تذكير للطلاب ليعملوا على هذا النشاط. سيظهر في كتلة المخطط الزمني في دفة القيادة لهم بشكل "{$a} يتطلب إجراء".';
$string['completionexpecteddesc'] = 'الاكتمال المتوقع في {$a}';
$string['completionexpectedfor'] = 'ينبغي أن يكون {$a->instancename} مكتملاً';
$string['completionicons'] = 'مربعات علامة الإكمال';
$string['completionicons_help'] = 'يمكن وضع علامة بجانب اسم النشاط تشير إلى موعد اكتماله.

عند ظهور المربع بإطار منقط، فإن التأشير سيظهر فيه تلقائياً بمجرد إكمالك للنشاط وفقاً للشروط التي حددها المعلم.

عند ظهور المربع بإطار متصل، فيمكنك النقر عليه لوضع التأشير بنفسك عندما تجد أنك قد أكملت هذا النشاط. (النقر عليه مجدداً سيزيل التأشير في حال أنك قد غيرت رأيك).';
$string['completionmenuitem'] = 'الإكمال';
$string['completionnotenabled'] = 'خاصية الإكمال للمساق غير ممكنة';
$string['completionnotenabledforcourse'] = 'خاصية الإكمال للمساق غير ممكنة في هذا المساق';
$string['completionnotenabledforsite'] = 'خاصية الإكمال للمساق غير ممكنة في هذا الموقع';
$string['completionondate'] = 'التاريخ';
$string['completionondatevalue'] = 'التاريخ الذي سيتم عنده اعتبار المساق مكتملاً';
$string['completionpassgrade'] = 'يتطلب درجة النجاح';
$string['completionpassgrade_desc'] = 'يحرز درجة النجاح';
$string['completionpassgrade_help'] = 'عند تمكينه، يُعتبر النشاط مكتملاً عندما يحرز الطالب درجة النجاح.';
$string['completionsettingslocked'] = 'إعدادات الإكمال مؤمنة';
$string['completionupdated'] = 'اكتمال التحديث للنشاط <b>{$a}</b>';
$string['completionusegrade'] = 'يتطلب الحصول على علامة';
$string['completionusegrade_desc'] = 'يحصل على الدرجة';
$string['completionusegrade_help'] = 'عند تمكينه، يعتبر النشاط مكتملاً عندما يحصل الطالب على الدرجة. إذا تم تحديد درجة نجاح للنشاط، ستظهر أيقونات النجاح والرسوب في تقرير إكمال النشاط.';
$string['completionview'] = 'يتطلب استعرض';
$string['completionview_desc'] = 'معاينة النشاط';
$string['configcompletiondefault'] = 'الإعداد الافتراضي لتتبع الإكمال عند إنشاء أنشطة جديدة.';
$string['configenablecompletion'] = 'عند تمكينه، سيكون بالإمكان وضع شروط إكمال المساق ونشاطاته. وضع تلك الشروط أمر موصى به لتظهر للمستخدمين في صفحاتهم الرئيسية معلومات ذات قيمة تلخص مدى إكمالهم للمساق.';
$string['confirmselfcompletion'] = 'تأكيد الإكمال الذاتي';
$string['courseaggregation'] = 'الشرط يتطلب';
$string['courseaggregation_all'] = 'كل المساقات المحددة لاستكمالها';
$string['courseaggregation_any'] = 'أي مادة مختارة لإكمالها';
$string['coursealreadycompleted'] = 'لقد أكملت هذا المساق';
$string['coursecomplete'] = 'اكتمل المساق';
$string['coursecompleted'] = 'المساق مكتمل';
$string['coursecompletedmessage'] = '<p>تهانينا!</p><p>لقد أكملت المساق تواً  <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'إكمال المساق';
$string['coursecompletioncondition'] = 'الشرط: {$a}';
$string['coursecompletionnavigation'] = 'تنقل إكمال المساق ما بعد الثانوي';
$string['coursecompletionsettings'] = 'إعدادات إكمال المساق';
$string['coursegrade'] = 'علامة المساق';
$string['coursesavailable'] = 'المقررات الدراسية المتوفرة';
$string['coursesavailableexplaination'] = 'ملاحظة: ينبغي وضع شروط إكمال المساق ليتسنى عرضه ضمن القائمة أعلاه.';
$string['criteria'] = 'معايير';
$string['criteriagroup'] = 'مجموعة المعايير';
$string['criteriarequiredall'] = 'كل المعايير في الأسفل مطلوبة';
$string['criteriarequiredany'] = 'أيّ معيار في الأسفل مطلوب';
$string['criteriasummary'] = '{$a->type}: {$a->summary}';
$string['csvdownload'] = 'التنزيل بصيغة جدول (UTF-8 .csv)';
$string['datepassed'] = 'مر التاريخ';
$string['days'] = 'أيام';
$string['daysoftotal'] = '{$a->days}  من {$a->total}';
$string['daysuntilcompletion'] = 'الأيام حتى الإكمال';
$string['defaultactivitycompletioncourse'] = 'هذه تمثل شروط الإكمال الافتراضية للنشاطات في هذا المساق.';
$string['defaultactivitycompletionsite'] = 'هذه تمثل شروط الإكمال الافتراضية للنشاطات في كل المقررات.';
$string['defaultcompletion'] = 'اكتمال النشاط الافتراضي';
$string['defaultcompletionupdated'] = 'تم حفظ التغييرات';
$string['deletecompletiondata'] = 'حذف بيانات الإكمال';
$string['dependencies'] = 'تبعيات';
$string['dependenciescompleted'] = 'إكتمال مساقات أخرى';
$string['detail_desc:receivegrade'] = 'تلقي علامة';
$string['detail_desc:receivepassgrade'] = 'يحرز درجة النجاح';
$string['detail_desc:view'] = 'معاينة';
$string['done'] = 'تم';
$string['editconditions'] = 'تحرير الشروط';
$string['editcoursecompletionsettings'] = 'تحرير إعدادات إكمال المساق';
$string['emptyconditionsinfo'] = 'ليست هناك شروط إكمال معدة لهذا النشاط.';
$string['emptyconditionswarning'] = 'عليك إضافة شرط إكمال واحد على الأقل.';
$string['enablecompletion'] = 'تمكين تتبع الإكمال';
$string['enablecompletion_help'] = 'عند تمكينه، يمكنك تعيين شروط إكمال النشاط أو المساق.';
$string['enrolmentduration'] = 'مدة الانضمام';
$string['enrolmentdurationlength'] = 'ينبغي أن يظل المستخدم منضماً لمدة';
$string['err_noactivities'] = 'خيارات الإكمال غير ممكنة لأيّ من الأنشطة ، لذا لا يمكن عرض أيّ منها . يمكنك تمكين معلومات الإكمال عبر تحرير إعدادات النشاط .';
$string['err_nocourses'] = 'خيارات الإكمال غير مُمَكَّنة لأي من المقررات الدراسية الأخرى، لذا لا يمكن عرض أي منها. يمكنك تمكين إكمال المقرر من إعداداته.';
$string['err_nograde'] = 'لم يتم وضع درجة النجاح لهذا المساق . لتمكين هذا النوع من المعايير يجب عليك إنشاء درجة  النجاح لهذا المساق .';
$string['err_noroles'] = 'لا توجد هناك أدوار تمتلك إمكانية \'moodle/course:markcomplete\' في هذا المساق.';
$string['err_nousers'] = 'لا يوجد طلاب في هذا المساق أو المجموعة ليتم عرض معلومات إكمالهم. (افتراضياً، يتم عرض معلومات الإكمال للمستخدمين الذين يمتلكون إمكانية \'يظهر في تقارير الإكمال\'. هذه الإمكانية متاحة لمن يمتلك دور الطلبة فقط، فإذا لم يكن هناك طلاب، سترى هذه الرسالة).';
$string['err_settingslocked'] = 'سبق وأن قام طالب أو أكثر بإكمال المعايير، لذلك تم تأمين الإعدادات. إلغاء تأمين الإعدادات سيؤدي إلى حذف بيانات الإكمال للمستخدمين مما قد يسبب الإرباك.';
$string['err_system'] = 'حدث خطأ داخلي في نظام الإكمال. (يمكن لمشرفي النظام تمكين معلومات التنقيح لمزيد من التفاصيل).';
$string['eventcoursecompleted'] = 'مساق تم إكماله';
$string['eventcoursecompletionupdated'] = 'إكمال مساق تم تحديثه';
$string['eventcoursemodulecompletionupdated'] = 'إكمال نشاط مساق تم تحديثه';
$string['eventdefaultcompletionupdated'] = 'الوضع الافتراضي لإكمال نشاط مساق تم تحديثه';
$string['excelcsvdownload'] = 'التنزيل بصيغة متوافقة مع Excel (.csv)';
$string['failed'] = 'فشل';
$string['fraction'] = 'جزء';
$string['graderequired'] = 'علامة المساق المطلوبة';
$string['gradexrequired'] = 'مطلوب {$a}';
$string['hiddenrules'] = 'تم إخفاء بعض الإعدادات الخاصة بـ <b>{$a}</b> . للعرض إلغ تحديد الأنشطة الأخرى';
$string['incompatibleplugin'] = 'هذا النشاط لا يدعم الإعدادات الافتراضية للإكمال. ينبغي ضبط شروط الإكمال يدويًا عند كل استعمال.';
$string['inprogress'] = 'في تقدم';
$string['manual'] = 'يدوي';
$string['manualcompletionby'] = 'إكمال يدوي من قبل آخرين';
$string['manualcompletionbynote'] = 'ملاحظة: ينبغي السماح للإمكانية moodle/course:markcomplete حتى يظهر الدور في القائمة.';
$string['manualselfcompletion'] = 'إكمال يدوي ذاتي';
$string['manualselfcompletionnote'] = 'ملاحظة: يجب إضافة كتلة الإكمال الذاتي إلى المساق إذا تم تمكين الإكمال الذاتي اليدوي.';
$string['markcomplete'] = 'علّمه بأنه مكتمل';
$string['markedcompleteby'] = 'علّمه بأنه مكتمل بواسطة {$a}';
$string['markingyourselfcomplete'] = 'علّم أنك أكملته';
$string['modifybulkactions'] = 'تعديل الإجراءات التي ترغب في تعديلها بالكامل';
$string['moredetails'] = 'المزيد من المعلومات';
$string['nocriteriaset'] = 'لم يتم إعداد معايير محددة لإكمال هذا المساق';
$string['nogradeitem'] = 'لا يمكن تمكين التقدير لـ <b>{$a}</b> لأنه لم يتم تقدير النشاط.';
$string['notcompleted'] = 'غير مكتمل';
$string['notenroled'] = 'لستَ منضماً إلى هذا المساق';
$string['nottracked'] = 'لا يتم متابعتك حاليًا من خلال إكمال هذه المادة';
$string['notyetstarted'] = 'لم يبدأ بعد';
$string['overallaggregation'] = 'متطلبات الإكمال';
$string['overallaggregation_all'] = 'المساق يكتمل عند استيفاء جميع الشروط';
$string['overallaggregation_any'] = 'المساق يكتمل عندما يتم استيفاء أيّ من الشروط';
$string['pending'] = 'معلّق';
$string['periodpostenrolment'] = 'الفترة بعد الإلتحاق';
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
$string['privacy:metadata:timecreated'] = 'وقت إنشاء إكمال النشاط';
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
$string['showcompletionconditions_help'] = 'إظهار شروط إكمال النشاط في صفحة المقرر.';
$string['showinguser'] = 'عرض المستخدم';
$string['studentsmust'] = 'ينبغي للطلبة';
$string['timecompleted'] = 'وقت إكماله';
$string['todo'] = 'قائمة المهام';
$string['unenrolingfromcourse'] = 'إلغاء الانضمام إلى المساق';
$string['unenrolment'] = 'إلغاء الانضمام';
$string['unit'] = 'الوحدة';
$string['unlockcompletion'] = 'فتح إعدادات الإكمال';
$string['unlockcompletiondelete'] = 'فتح إعدادات الإكمال وحذف بيانات إكمال المستخدم';
$string['updateactivities'] = 'تحديث حالة الانتهاء من الأنشطة المحددة';
$string['usealternateselector'] = 'استخدم محدد المساق البديل';
$string['usernotenroled'] = 'المستخدم غير منضم إلى هذا المساق';
$string['viewcoursereport'] = 'عرض تقرير المساق';
$string['viewingactivity'] = 'عرض الـ {$a}';
$string['withconditions'] = 'مع الشروط';
$string['writingcompletiondata'] = 'كتابة بيانات الإكمال';
$string['xdays'] = '{$a} من الأيام';
$string['youmust'] = 'ينبغي عليك';
