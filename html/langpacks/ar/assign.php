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
 * Strings for component 'assign', language 'ar', version '3.11'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitydate:submissionsdue'] = 'تستحق:';
$string['activitydate:submissionsopen'] = 'تفتح:';
$string['activitydate:submissionsopened'] = 'فتحت:';
$string['activityoverview'] = 'لديك واجبات تتطلب الانتباه';
$string['addattempt'] = 'السماح بمحاولة أخرى';
$string['addnewattempt'] = 'إضافة محاولة جديدة';
$string['addnewattempt_help'] = 'هذا سينشئ  تسليم فارغ جديد حتى تقوم بالعمل عليه.';
$string['addnewattemptfromprevious'] = 'إضافة محاولة جديدة بناء على التسليم السابق';
$string['addnewattemptfromprevious_help'] = 'سوف يقوم هذا الخيار بنسخ محتويات تسليمك السابق إلى تسليم جديد حتى تستكمل العمل عليه.';
$string['addnewgroupoverride'] = 'أضف تجاوز مجموعة';
$string['addnewuseroverride'] = 'أضف تجاوز مستخدم';
$string['addsubmission'] = 'أضف تسليم';
$string['addsubmission_help'] = 'لم تقدم أي تسليم بعد.';
$string['allocatedmarker'] = 'المُصحِّح المعيَّن';
$string['allocatedmarker_help'] = 'تم تعيين مُصحِّح لهذا التسليم.';
$string['allowsubmissions'] = 'إسمح للمستخدم أن يستمر بتقديم التسليمات لهذا الواجب.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'تفاصيل الواجب ونموذج التسليم ستكون مُتاحة من <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'إسمح بالتسليم ابتداءً من';
$string['allowsubmissionsfromdate_help'] = 'في حالة تفعيل هذا الخيار، لن يتمكن الطلاب من تسليم الواجب قبل هذا التاريخ. أما إذا تم تعطيله، فسيتمكن الطلاب من البدء فوراً بالتسليم.';
$string['allowsubmissionsfromdatesummary'] = 'سيبدأ قبول التسليمات لهذا الواجب إبتداءً من <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'السماح بتغييرالتسليم';
$string['alwaysshowdescription'] = 'أظهر الوصف دائماً';
$string['alwaysshowdescription_help'] = 'عند تعطيله، فإن وصف الواجب أعلاه سيكون مرئياً للطلبة ابتداءً من التاريخ المُحدَّد في الإعداد "إسمح بالتسليم ابتداءً من".';
$string['applytoteam'] = 'تطبيق التقديرات والإفادات على المجموعة بأكملها';
$string['assign:addinstance'] = 'إضافة واجب جديد';
$string['assign:editothersubmission'] = 'تحرير تسليم طالب آخر';
$string['assign:exportownsubmission'] = 'تصدير تسليمه';
$string['assign:grade'] = 'تصحيح الواجب';
$string['assign:grantextension'] = 'منح التمديد';
$string['assign:manageallocations'] = 'إدارة المُصححين المخصصين للتسليمات';
$string['assign:managegrades'] = 'مراجعة ونشر التقديرات';
$string['assign:manageoverrides'] = 'إدارة تجاوزات الواجب';
$string['assign:receivegradernotifications'] = 'تلقي إخطارات عند تصحيح التسليمات';
$string['assign:releasegrades'] = 'نشر التقديرات';
$string['assign:revealidentities'] = 'الكشف عن هوية الطالب';
$string['assign:reviewgrades'] = 'مراجعة التقديرات';
$string['assign:showhiddengrader'] = 'مشاهدة هوية المقيّم المخفي';
$string['assign:submit'] = 'تسليم الواجب';
$string['assign:view'] = 'معاينة الواجب';
$string['assign:viewblinddetails'] = 'معاينة هويات الطلبة عند تفعيل خيار التصحيح الأعمى';
$string['assign:viewgrades'] = 'معاينة التقديرات';
$string['assign:viewownsubmissionsummary'] = 'معاينة ملخص تسليمه';
$string['assignfeedback'] = 'إضافة الإفادة';
$string['assignfeedbackpluginname'] = 'إضافة الإفادة';
$string['assignmentisdue'] = 'فات موعد التسليم';
$string['assignmentmail'] = '{$a->grader} قد أعطاك إفادة بشأن تسليمك للواجب \'{$a->assignment}\'

 يمكن أن ترى تلك الملاحظات مُلحقة بتسليمك للواجب في الرابط التالي:

    {$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} قد نشر إفادة على تسليمك للواجب \'<i>{$a->assignment}</i>\'.</p>
<p>يمكنك أن ترى تلك الملاحظات مُضافة إلى <a href="{$a->url}">تسليم الواجب الخاص بك </a>.</p>';
$string['assignmentmailsmall'] = '{$a->grader} قد أعطاك إفادة بشأن تسليمك للواجب \'{$a->assignment}\'. يمكنك أن ترى تلك الملاحظات مُضافة إلى تسليمك';
$string['assignmentname'] = 'اسم الواجب';
$string['assignmentplugins'] = 'إضافات الواجب';
$string['assignmentsperpage'] = 'عدد الواجبات في الصفحة الواحدة';
$string['assignsubmission'] = 'البرمجية المُلحقة للتسليمات';
$string['assignsubmissionpluginname'] = 'البرمجية المُلحقة للتسليمات';
$string['attemptheading'] = 'المحاولة {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'محاولات سابقة';
$string['attemptnumber'] = 'رقم المحاولة';
$string['attemptreopenmethod'] = 'المحاولات الإضافية';
$string['attemptreopenmethod_help'] = 'هذا الإعداد يُحدِّد ما إذا كان بإمكان الطالب القيام بمحاولات أخرى في الواجب. يتم حفظ الدرجة والإفادة لكل محاولة، ويمكن معاينتها من قبل المعلم والطالب. الخيارات المتاحة هي:

* أبداً - يمكن القيام بمحاولة واحدة فقط.
* يدوياً - يمكن للمعلم السماح بمحاولات إضافية.
* تلقائياً حتى النجاح - يتم السماح بمحاولات إضافية تلقائيًا تلقائياً حتى يحقق الطالب درجة النجاح المُحدَّدة في سجل التقديرات لهذا الواجب.';
$string['attemptreopenmethod_manual'] = 'يدوياً';
$string['attemptreopenmethod_none'] = 'أبداً';
$string['attemptreopenmethod_untilpass'] = 'تلقائياً حتى النجاح';
$string['attemptsettings'] = 'إعدادات المحاولة';
$string['availability'] = 'التوقيتات';
$string['backtoassignment'] = 'عودة إلى الواجب';
$string['batchoperationconfirmaddattempt'] = 'السماح بمحاولة أخرى للتسليمات المُحدَّدة؟';
$string['batchoperationconfirmdownloadselected'] = 'أتريد تنزيل التسليمات المختارة؟';
$string['batchoperationconfirmgrantextension'] = 'أتريد منح تمديد لكل التسليمات المُحددة؟';
$string['batchoperationconfirmlock'] = 'أتريد تأمين كل التسليمات المحددة؟';
$string['batchoperationconfirmremovesubmission'] = 'أتريد إزالة التسليمات المحددة؟';
$string['batchoperationconfirmreverttodraft'] = 'تحويل جميع التسليمات المُختارة إلى مسودات؟';
$string['batchoperationconfirmsetmarkingallocation'] = 'أتريد تحديد كيفية توزيع التصحيح لكل التسليمات المحددة؟';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'أتريد تحديد حالة مجرى العمل في التصحيح لكل التسليمات المحددة؟';
$string['batchoperationconfirmunlock'] = 'أتريد إزالة التأمين من كل التسليمات المحددة؟';
$string['batchoperationlock'] = 'تأمين التسليمات';
$string['batchoperationreverttodraft'] = 'إرجاع التسليمات كمسودات';
$string['batchoperationsdescription'] = 'مع المختارة...';
$string['batchoperationunlock'] = 'فتح التسليمات';
$string['batchsetallocatedmarker'] = 'حدد المصحح المُعيَّن لـ {$a} من المستخدمين المحددين.';
$string['batchsetmarkingworkflowstateforusers'] = 'حدد حالة سير عمل التصحيح لـ {$a} من المستخدمين المحددين.';
$string['blindmarking'] = 'تسليمات غير مشخصنة';
$string['blindmarking_help'] = 'التسليمات غير المشخصنة تخفي هوية الطلاب عن المُصحِّحين. سيتم تأمين الإعدادات للتسليم غير المشخصن بمجرد إرسال تسليم من أي طالب أو وضع تقدير لهذا الواجب.';
$string['blindmarkingenabledwarning'] = 'التسليمات غير المشخصنة مُمَكَّنة لهذا النشاط. لن تتم إضافة التقديرات إلى سجل التقديرات حتى يتم الكشف عن هويات الطلاب عبر قائمة إجراءات التقييم.';
$string['cachedef_overrides'] = 'معلومات تجاوز المستخدمين والمجموعات';
$string['calendardue'] = '{$a} مستحق';
$string['calendargradingdue'] = '{$a} مستحق لمنح التقدير';
$string['changefilters'] = 'تغيير المنقحات';
$string['changeuser'] = 'غيِّر المستخدم';
$string['choosegradingaction'] = 'إجراء التصحيح';
$string['choosemarker'] = 'إختر...';
$string['chooseoperation'] = 'إختر العملية';
$string['clickexpandreviewpanel'] = 'انقر لتوسيع لوحة المراجعة';
$string['collapsegradepanel'] = 'طي لوحة التقديرات';
$string['collapsereviewpanel'] = 'طي لوحة المراجعة';
$string['comment'] = 'تعليق';
$string['completiondetail:submit'] = 'القيام بالتسليم';
$string['completionsubmit'] = 'يجب على الطالب أن يقوم بتسليم إجابة هذا النشاط لاستكماله';
$string['configshowrecentsubmissions'] = 'يمكن لأي شخص أن يرى إخطارات التسليمات في تقارير الأنشطة الأخيرة.';
$string['confirmbatchgradingoperation'] = 'هل أنت متأكد أنك تريد {$a->operation} ل{$a->count} طلاب؟';
$string['confirmsubmission'] = 'هل أنت متأكد أنك تريد أن تُسلِّم عملك للتصحيح؟ لن تكون قادراً على إجراء أي تغييرات أخرى.';
$string['confirmsubmissionheading'] = 'تأكيد التسليم';
$string['conversionexception'] = 'تعذر تحويل الواجب. الخطأ كان: {$a}.';
$string['couldnotconvertgrade'] = 'تعذر تحويل علامة الواجب للمستخدم {$a}.';
$string['couldnotconvertsubmission'] = 'تعذر تحويل تسليم الواجب للمستخدم {$a}.';
$string['couldnotcreatecoursemodule'] = 'لا يمكن إنشاء وحدة المقرر الدراسي.';
$string['couldnotcreatenewassignmentinstance'] = 'تعذر إنشاء وحدة واجب جديدة.';
$string['couldnotfindassignmenttoupgrade'] = 'تعذر العثور على وحدة الواجب القديمة لترقيتها.';
$string['crontask'] = 'المعالجة الخلفية لوحدة الواجب';
$string['currentassigngrade'] = 'الدرجة الحالية في الواجب';
$string['currentattempt'] = 'هذه المحاولة {$a}.';
$string['currentattemptof'] = 'هذه المحاولة رقم {$a->attemptnumber} ( {$a->maxattempts} من المحاولات المسموح بها ).';
$string['currentgrade'] = 'التقدير الحالي في سجل التقديرات';
$string['cutoffdate'] = 'موعد التسليم النهائي';
$string['cutoffdate_help'] = 'إذا تم تفعيله، فإن الواجب لن يقبل التسليمات بعد هذا التاريخ دون تمديد.';
$string['cutoffdatecolon'] = 'تاريخ التوقف: {$a}';
$string['cutoffdatefromdatevalidation'] = 'لا يمكن أن يكون تاريخ التوقف سابقاً لتاريخ السماح بالتسليم إبتداءً من.';
$string['cutoffdatevalidation'] = 'تاريخ التوقف لا يمكن أن يكون سابقاً لتاريخ الاستحقاق.';
$string['defaultlayout'] = 'استعادة التصميم الافتراضي';
$string['defaultsettings'] = 'إعدادات الواجب الافتراضية';
$string['defaultsettings_help'] = 'هذه الإعدادات تحدد إفتراضيات كل الواجبات الجديدة.';
$string['defaultteam'] = 'المجموعة الأساسية';
$string['deleteallsubmissions'] = 'إحذف كل التسليمات';
$string['description'] = 'الوصف';
$string['disabled'] = 'معطلة';
$string['downloadall'] = 'تنزيل جميع التسليمات';
$string['downloadasfolders'] = 'تنزيل التسليمات في مجلدات';
$string['downloadasfolders_help'] = 'يمكن تنزيل التسليمات في مجلدات. سيتم عندها وضع كل تسليم في مجلد مستقل مع الحفاظ على هيكل المجلد لأي مجلدات فرعية، ولن تتم إعادة تسمية الملفات.';
$string['downloadselectedsubmissions'] = 'تنزيل التسليمات المحددة';
$string['duedate'] = 'تاريخ الاستحقاق';
$string['duedate_help'] = 'هذا موعد استحقاق الواجب. ستبقى التسليمات مسموحاً بها بعد هذا التاريخ، ولكن ما يتأخر منها عن هذا الموعد سيتم تأشيره بأنه متأخر. حدد تاريخ التوقف لمنع التسليمات بعد موعد معين.';
$string['duedatecolon'] = 'تاريخ الاستحقاق: {$a}';
$string['duedateno'] = 'لا يوجد موعد استحقاق';
$string['duedatereached'] = 'لقد انتهى موعد تسليم الواجب';
$string['duedatevalidation'] = 'تاريخ الاستحقاق لا يمكن أن يكون سابقاً لتاريخ السماح بالتسليم ابتداءً من.';
$string['duplicateoverride'] = 'تكرار التجاوز';
$string['editaction'] = 'الإجراءات...';
$string['editattemptfeedback'] = 'حرر الدرجة والإفادة للمحاولة المرقمة {$a}.';
$string['editingpreviousfeedbackwarning'] = 'أنت تحرر الإفادة لمحاولة سابقة. هذه المحاولة {$a->attemptnumber} من بين {$a->totalattempts}.';
$string['editingstatus'] = 'تعديل الحالة';
$string['editonline'] = 'التحرير مع الاتصال بالإنترنت';
$string['editoverride'] = 'تحرير التجاوز';
$string['editsubmission'] = 'تحرير التسليم';
$string['editsubmission_help'] = 'لا يزال بإمكانك إجراء تعديلات على تسليمك.';
$string['editsubmissionother'] = 'تحرير التسليم لـ {$a}';
$string['enabled'] = 'مُمَكَّنة';
$string['errornosubmissions'] = 'لا يوجد تسليمات ليتم تنزيلها';
$string['errorquickgradingvsadvancedgrading'] = 'لم يتم حفظ التقديرات لأن هذا الواجب يستعمل حالياً التقييم المتقدم';
$string['errorrecordmodified'] = 'لم يتم حفظ الدرجات لأن شخصاً ما قام بتعديل سجل واحد أو أكثر في وقت أقرب من طلبك لهذه الصفحة.';
$string['eventallsubmissionsdownloaded'] = 'تسليمات يتم تنزيلها كلها';
$string['eventassessablesubmitted'] = 'تسليم تم تقديمه';
$string['eventbatchsetmarkerallocationviewed'] = 'تعيين تصحيح بالجملة تمت معاينته';
$string['eventbatchsetworkflowstateviewed'] = 'تحديد حالة سير العمل بالجملة تمت معاينته';
$string['eventextensiongranted'] = 'تمديد تم منحه';
$string['eventfeedbackupdated'] = 'إفادة تم تحديثها';
$string['eventfeedbackviewed'] = 'إفادة تمت معاينتها';
$string['eventgradingformviewed'] = 'نموذج تقييم تمت معاينته';
$string['eventgradingtableviewed'] = 'جدول تقييم تمت معاينته';
$string['eventidentitiesrevealed'] = 'هويات تم كشفها';
$string['eventmarkerupdated'] = 'مصحح معيَّن تم تحديثه';
$string['eventoverridecreated'] = 'تجاوز واجب تم إنشاؤه';
$string['eventoverridedeleted'] = 'تجاوز واجب تم حذفه';
$string['eventoverrideupdated'] = 'تجاوز واجب تم تحديثه';
$string['eventremovesubmissionformviewed'] = 'تأكيد إزالة تسليم تمت معاينته';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'صفحة تأكيد كشف الهويات تمت معاينتها';
$string['eventstatementaccepted'] = 'مستخدم وافق على بيان التسليم';
$string['eventsubmissionconfirmationformviewed'] = 'نموذج تأكيد تسليم تمت معاينته';
$string['eventsubmissioncreated'] = 'تسليم تم إنشاؤه';
$string['eventsubmissionduplicated'] = 'مستخدم قام بتكرار تسليمه';
$string['eventsubmissionformviewed'] = 'نموذج تسليم تمت معاينته';
$string['eventsubmissiongraded'] = 'تسليم تم تقييمه';
$string['eventsubmissionlocked'] = 'تسليمات مستخدم تم تأمينها';
$string['eventsubmissionstatusupdated'] = 'حالة تسليم تم تحديثها';
$string['eventsubmissionstatusviewed'] = 'حالة تسليم تمت معاينتها';
$string['eventsubmissionunlocked'] = 'تسليمات مستخدم تم إلغاء تأمينها';
$string['eventsubmissionupdated'] = 'تسليم تم تحديثه';
$string['eventsubmissionviewed'] = 'تسليم تمت معاينته';
$string['eventworkflowstateupdated'] = 'حالة سير العمل تم تحديثها';
$string['expandreviewpanel'] = 'توسيع لوحة التنقيح';
$string['extensionduedate'] = 'تاريخ استحقاق التمديد';
$string['extensionnotafterduedate'] = 'تاريخ التمديد ينبغي أن يكون بعد تاريخ الاستحقاق';
$string['extensionnotafterfromdate'] = 'تاريخ التمديد ينبغي أن يكون بعد تاريخ السماح بالتسليم ابتداءً من';
$string['feedback'] = 'الإفادة';
$string['feedbackavailableanonhtml'] = 'لديك إفادة جديدة بشأن تسليمك للواجب\'<i>{$a->assignment}</i>\'<br /><br />
يمكن أن تراها ملحقة بـ <a href="{$a->url}">تسليمك للواجب</a>.';
$string['feedbackavailableanonsmall'] = 'إفادة جديدة للواجب {$a->assignment}';
$string['feedbackavailableanontext'] = 'لديك إفادة جديدة بشأن تسليمك للواجب \'{$a->assignment}\'

 يمكن أن ترى تلك الملاحظات مُلحقة بتسليمك للواجب في الرابط التالي:

    {$a->url}';
$string['feedbackavailablehtml'] = '{$a->username} قد أعطى إفادة بشأن تسليمك للواجب \'<i>{$a->assignment}</i>\'<br /><br />
يمكن أن تراها ملحقة بـ <a href="{$a->url}">تسليمك للواجب </a>.';
$string['feedbackavailablesmall'] = '{$a->username} قد أعطى إفادة للواجب {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username} قد أعطى إفادة بشأن تسليمك للواجب \'{$a->assignment}\'

 يمكن أن ترى تلك الملاحظات مُلحقة بتسليمك للواجب في الرابط التالي:

    {$a->url}';
$string['feedbackplugin'] = 'إضافة الإفادة';
$string['feedbackpluginforgradebook'] = 'إضافة الإفادة التي ستضع التعليقات في سجل التقديرات';
$string['feedbackpluginforgradebook_help'] = 'يمكن لإضافة إفادة واحدة فقط للواجبات أن تضع الإفادات في سجل التقديرات.';
$string['feedbackplugins'] = 'إضافات الإفادات';
$string['feedbacksettings'] = 'إعدادات الإفادة';
$string['feedbacktypes'] = 'أنواع الإفادات';
$string['filesubmissions'] = 'تسليمات الملفات';
$string['filter'] = 'المرشح';
$string['filterdraft'] = 'مُسودة';
$string['filtergrantedextension'] = 'مُنِحَ تمديداً';
$string['filternone'] = 'بلا ترشيح';
$string['filternotsubmitted'] = 'غير مُسَلِّم';
$string['filterrequiregrading'] = 'يتطلب التقييم';
$string['filtersubmitted'] = 'مسلمة';
$string['fixrescalednullgrades'] = 'يحتوي هذا الواجب على بعض الدرجات الخاطئة. يمكنك <a href="{$a->link}">إصلاح هذه الدرجات تلقائياً</a>. هذا قد يؤثر على إجماليات المقرر.';
$string['fixrescalednullgradesconfirm'] = 'هل أنت متأكد من رغبتك في إصلاح الدرجات الخاطئة؟ ستتم إزالة كل الدرجات المتأثرة. هذا قد يؤثر على إجماليات المقرر الدراسي.';
$string['fixrescalednullgradesdone'] = 'تم إصلاح الدرجات.';
$string['gradeabovemaximum'] = 'الدرجة ينبغي أن تكون مساوية أو أقل من {$a}.';
$string['gradebelowzero'] = 'الدرجة ينبغي أن تكون مساوية أو أكبر من الصفر.';
$string['gradecanbechanged'] = 'يمكن تغيير الدرجة';
$string['gradechangessaveddetail'] = 'التغييرات في الدرجة والإفادة تم حفظها';
$string['graded'] = 'مُقيَّم';
$string['gradedby'] = 'مُقيَّم من قِبَل';
$string['gradedfollowupsubmit'] = 'مُقيَّم - التسليم التابع تم تلقيه';
$string['gradedon'] = 'تم تقييمه في';
$string['gradeitem:submissions'] = 'التسليمات';
$string['gradelocked'] = 'هذا التقدير مُؤمَّن أو تم تجاوزه في سجل التقديرات.';
$string['gradeoutof'] = 'الدرجة من {$a}';
$string['gradeoutofhelp'] = 'الدرجة';
$string['gradeoutofhelp_help'] = 'أدخل علامة لتسليم الطالب هنا. بإمكانك استعمال المراتب العشرية.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} قام بتحديث تسليمه للواجب <i>\'{$a->assignment}\' بتاريخ {$a->timeupdated}</i><br /><br />
وهو <a href="{$a->url}">متاح في الموقع</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} قام بتحديث تسليمه للواجب {$a->assignment}.';
$string['gradersubmissionupdatedtext'] = '{$a->username} قام بتحديث تسليمه للواجب \'{$a->assignment}\' بتاريخ {$a->timeupdated}

وهو متاح هنا:

    {$a->url}';
$string['gradestudent'] = 'منح الدرجة للطالب: (المُعرَّف={$a->id}، الاسم الكامل={$a->fullname}).';
$string['gradeuser'] = 'منح علامة {$a}';
$string['grading'] = 'التقييم';
$string['gradingchangessaved'] = 'تم حفظ تغييرات الدرجة';
$string['gradingduedate'] = 'ذكِّرني بالتقييم في';
$string['gradingduedate_help'] = 'التاريخ المتوقع لإكمال تصحيح التسليمات. هذا التاريخ يستعمل لمنح الأولوية في إشعارات لوحة التحكم للمعلمين.';
$string['gradingdueduedatevalidation'] = 'ذكِّرني بالتقييم في تاريخ لا يكون سابقاً لتاريخ الاستحقاق.';
$string['gradingduefromdatevalidation'] = 'ذكِّرني بالتقييم في تاريخ لا يكون سابقاً لتاريخ السماح بالتسليم ابتداءً من.';
$string['gradingmethodpreview'] = 'معيار التقييم';
$string['gradingoptions'] = 'الخيارات';
$string['gradingstatus'] = 'حالة التقييم';
$string['gradingstudent'] = 'تقييم الطالب';
$string['gradingsummary'] = 'خلاصة التقييم';
$string['grantextension'] = 'إمنح تمديداً';
$string['grantextensionforusers'] = 'إمنح تمديداً لـ {$a} من الطلاب';
$string['groupoverrides'] = 'تجاوزات المجموعة';
$string['groupoverridesdeleted'] = 'تم حذف تجاوزات المجموعة';
$string['groupsnone'] = 'لا مجموعات يمكنك الوصول إليها.';
$string['groupsubmissionsettings'] = 'إعدادات تسليم المجموعات';
$string['hiddenuser'] = 'المشارك';
$string['hidegrader'] = 'إخفِ هوية المُقيِّم عن الطلاب';
$string['hidegrader_help'] = 'عند تمكنيه، لن تظهر هوية أي مستخدم يقوم بتقييم تسليمات الواجب، لذلك لن يكون بإمكان الطلبة معرفة من قام بتقييم أعمالهم.

لاحظ أن هذا الإعداد ليس له تأثير على خانة التعليقات في صفحة التقييم.';
$string['hideshow'] = 'إظهار/إخفاء';
$string['inactiveoverridehelp'] = '* هذا التجاوز غير فعال بسبب تقييد وصول المستخدم إلى النشاط. هذا قد يكون معزواً إلى تعيينات الدور أو المجموعة، غيرها من تقييدات الوصول، أو لأن النشاط مخفي.';
$string['indicator:cognitivedepth'] = 'الواجب معرفياً';
$string['indicator:cognitivedepth_help'] = 'هذا المؤشر مبني على عمق الحالة المعرفية التي وصلها الطالب في نشاط الواجب.';
$string['indicator:cognitivedepthdef'] = 'الواجب معرفياً';
$string['indicator:cognitivedepthdef_help'] = 'لقد وصل المشارك إلى هذه النسبة المئوية من المشاركة المعرفية التي وفرتها نشاطات الواجب خلال فترة التحليل هذه (المستويات = لا معاينة، معاينة، تسليم، معاينة الرد، التعليق على الرد، إعادة التسليم بعد معاينة الرد)';
$string['indicator:socialbreadth'] = 'الواجب إجتماعياً';
$string['indicator:socialbreadth_help'] = 'هذا المؤشر مبني على عمق التوسع الاجتماعي الذي وصله الطالب في نشاط الواجب.';
$string['indicator:socialbreadthdef'] = 'الواجب إجتماعياً';
$string['indicator:socialbreadthdef_help'] = 'لقد وصل المشارك إلى هذه النسبة المئوية من المشاركة الاجتماعية التي وفرتها نشاطات الواجب خلال فترة التحليل هذه (المستويات = لا مشاركة، المشاركة منفرداً، المشاركة مع الآخرين)';
$string['instructionfiles'] = 'ملفات إرشادية';
$string['introattachments'] = 'ملفات إضافية';
$string['introattachments_help'] = 'يمكن إضافة ملفات إضافية لاستعمالها في الواجب، مثل قوالب الإجابة. روابط تنزيل لهذه الملفات سيتم عرضها عندئذ في صفحة الواجب تحت الوصف.';
$string['invalidfloatforgrade'] = 'تعذر فهم الدرجة المعطاة: {$a}';
$string['invalidgradeforscale'] = 'الدرجة المعطاة لم تكن صحيحة للمقياس الحالي';
$string['invalidoverrideid'] = 'مُعرَّف تجاوز غير صحيح';
$string['lastmodifiedgrade'] = 'آخر تعديل (التقدير)';
$string['lastmodifiedsubmission'] = 'آخر تعديل (التسليم)';
$string['latesubmissions'] = 'التسليمات المتأخرة';
$string['latesubmissionsaccepted'] = 'مسموح به حتى {$a}';
$string['loading'] = 'التحميل جارٍ...';
$string['locksubmissionforstudent'] = 'إمنع أي تسليمات أخرى للطالب: (المُعرَّف={$a->id}، الاسم الكامل={$a->fullname}).';
$string['locksubmissions'] = 'تأمين التسليمات';
$string['manageassignfeedbackplugins'] = 'إدارة إضافات إفادات الواجب';
$string['manageassignsubmissionplugins'] = 'إدارة إضافات تسليمات الواجب';
$string['marker'] = 'المصحح';
$string['markerfilter'] = 'مرشح التصحيح';
$string['markerfilternomarker'] = 'بلا مصحح';
$string['markingallocation'] = 'استعمل تعيين التصحيح';
$string['markingallocation_help'] = 'عند تمكينه جنباً إلى جنب مع سير عمل التصحيح، سيكون بالإمكان تعيين المصححين لطلبة محددين.';
$string['markingworkflow'] = 'استعمل سير عمل التصحيح';
$string['markingworkflow_help'] = 'عند تمكينه، سيخضع عمل المصححين إلى سلسلة من المراحل قبل إطلاقه إلى الطلبة. هذا يسمح بجولات متعددة من التصحيح ويسمح بإطلاق التصحيحات لجميع الطلبة في وقت واحد.';
$string['markingworkflowstate'] = 'تقييم حالة سير العمل';
$string['markingworkflowstate_help'] = 'الحالات الممكنة لسير عمل التصحيح قد تتضمن (إعتماداً على صلاحياتك):

* غير مصحح - المصحح لم يبدأ عمله بعد
* قيد التصحيح - المصحح بدأ ولكنه لم ينته بعد
* التصحيح مكتمل - المصحح قد أكمل عمله ولكنه قد يحتاج إلى الرجوع لأغراض التحقق/التعديل
* قيد التنقيح - التصحيح الآن صار بيد المعلم المسؤول عن تدقيق الجودة
* جاهز للنشر - المعلم المسؤول راضٍ عن التصحيح ولكنه قد ينتظر قبل السماح للطلبة بالوصول إلى التصحيحات
* مطلق - يمكن للطالب الوصول إلى الدرجات/الإفادات';
$string['markingworkflowstateinmarking'] = 'قيد التصحيح';
$string['markingworkflowstateinreview'] = 'قيد التنقيح';
$string['markingworkflowstatenotmarked'] = 'غير مصحح';
$string['markingworkflowstatereadyforrelease'] = 'جاهز للإطلاق';
$string['markingworkflowstatereadyforreview'] = 'التصحيح مكتمل';
$string['markingworkflowstatereleased'] = 'مطلق';
$string['maxattempts'] = 'أقصى عدد من المحاولات';
$string['maxattempts_help'] = 'أقصى عدد من محاولات التسليم يمكن القيام بها من قبل الطالب. بعد الوصول إلى هذا العدد، لن يعاد فتح المجال للتسليم مجدداً.';
$string['maxgrade'] = 'أقصى علامة';
$string['maxperpage'] = 'أقصى عدد من الواجبات في الصفحة';
$string['maxperpage_help'] = 'أقصى عدد من الواجبات التي يمكن للمُقيِّم إظهارها في صفحة تقييم الواجبات. هذا الإعداد مفيد في منع استنفاذ مهلة الجلسة للمقررات الدراسية ذات الأعداد الكبيرة من المشاركين.';
$string['messageprovider:assign_notification'] = 'إشعارات الواجب';
$string['modulename'] = 'واجب';
$string['modulename_help'] = 'تُمكن وحدة نشاط الواجب المعلم من إيصال الواجبات، جمع التسليمات ووضع التقديرات والإفادات.

يمكن للطلاب تقديم أي محتوى رقمي (ملفات)، مثل الوثائق النصية وجداول البيانات أو الصور أو مقاطع الصوت والفيديو. بدلاً من ذلك، أو إضافة إليه، قد يتطلب الواجب من الطلاب كتابة النص مباشرة في محرر النصوص. يمكن أيضاً استعال الواجب لتذكير الطلاب بواجبات "العالم الواقعي" التي ينبغي على الطلاب إكمالها بدون الاتصال بالإنترنت، مثل الأعمال الفنية، والتي لا تتطلب أي محتوى رقمي. يمكن للطلاب تسليم أعمالهم بصورة فردية أو كأعضاء في مجموعة.

عند استعراض الواجبات، يمكن للمعلمين ترك تعليقات الإفادات ورفع الملفات، مثل تسليمات الطلاب المصححة، وثائق ذات تعليقات أو إفادات صوتية. يمكن وضع درجات الواجبات باستعمال مقياس عددي أو مخصص، أو طريقة متقدمة لمنح التقديرات مثل سلم التقييم. التقديرات النهائية تذهب إلى سجل التقديرات.';
$string['modulenameplural'] = 'واجبات';
$string['moreusers'] = '{$a} أكثر...';
$string['multipleteams'] = 'عضو في أكثر من مجموعة';
$string['multipleteams_desc'] = 'الواجب يتطلب التسليم في مجموعات. أنت عضو في أكثر من مجموعة. لتتمكن من التسليم، عليك أن تكون عضواً في مجموعة واحدة. لطفاً، تواصل مع معلمك لتغيير عضويتك في المجموعات.';
$string['multipleteamsgrader'] = 'عضو في أكثر من مجموعة، لذلك يتعذر تقديم تسليمات.';
$string['mysubmission'] = 'تسليمي:';
$string['newsubmissions'] = 'واجبات تم تسليمها';
$string['nextuser'] = 'المستخدم التالي';
$string['noattempt'] = 'لا توجد محاولات';
$string['noclose'] = 'لا تاريخ إغلاق';
$string['nofiles'] = 'لا ملفات.';
$string['nofilters'] = 'لا منقحات';
$string['nograde'] = 'لا علامة.';
$string['nolatesubmissions'] = 'التسليمات المتأخرة غير مقبولة.';
$string['nomoresubmissionsaccepted'] = 'مسموح به فقط للمشاركين الذين تم منحهم تمديداً';
$string['none'] = 'لا شيء';
$string['noonlinesubmissions'] = 'لا يتطلب منك هذا الواجب إرسال أي شيء عبر الإنترنت';
$string['noopen'] = 'لا تاريخ فتح';
$string['nooverridedata'] = 'عليك تجاوز واحد من إعدادات الواجب على الأقل.';
$string['nosavebutnext'] = 'التالي';
$string['nosubmission'] = 'لم يتم تسليم شيء لهذا الواجب';
$string['nosubmissionsacceptedafter'] = 'لا تُقبل التسليمات بعد';
$string['noteam'] = 'لستَ عضواً في أي مجموعة';
$string['noteam_desc'] = 'الواجب يتطلب التسليم في مجموعات. أنت لست عضواً في أي مجموعة، لذلك لا يمكنك التسليم. لطفاً، تواصل مع معلمك لإضافتك إلى مجموعة.';
$string['noteamgrader'] = 'لست عضواً في أي مجموعة، لذلك يتعذر تقديم تسليمات.';
$string['notgraded'] = 'لم يتم التقييم';
$string['notgradedyet'] = 'لم تعطى درجة بعد';
$string['notifications'] = 'الإشعارات';
$string['notsubmittedyet'] = 'لم تقدم بعد';
$string['nousers'] = 'لا مستخدمين';
$string['nousersselected'] = 'لم يتم تحديد المستخدمين';
$string['numberofdraftsubmissions'] = 'المسودات';
$string['numberofparticipants'] = 'المشاركون';
$string['numberofsubmissionsneedgrading'] = 'بحاجة للتقييم';
$string['numberofsubmittedassignments'] = 'مسلمة';
$string['numberofteams'] = 'المجموعات';
$string['offline'] = 'التسليمات عبر الاتصال بالإنترنت غير مطلوبة';
$string['open'] = 'إفتح';
$string['outlinegrade'] = 'الدرج: {$a}';
$string['outof'] = '{$a->current} من أصل {$a->total}';
$string['overdue'] = 'فات موعد تسليم الواجب منذ: {$a}';
$string['override'] = 'تجاوز';
$string['overridedeletegroupsure'] = 'هل أنت متأكد من رغبتك في حذف التجاوز للمجموعة {$a}؟';
$string['overridedeleteusersure'] = 'هل أنت متأكد من رغبتك في حذف التجاوز للمستخدم {$a}؟';
$string['overridegroup'] = 'تجاوز المجموعة';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overrides'] = 'التجاوزات';
$string['overrideuser'] = 'تجاوز المستخدم';
$string['overrideusereventname'] = 'تجاوز - {$a->assign}';
$string['page-mod-assign-view'] = 'الصفحة الرئيسية لوحدة الواجب والتسليم';
$string['page-mod-assign-x'] = 'أي صفحة لوحدة الواجب';
$string['paramtimeremaining'] = '{$a} باقية';
$string['participant'] = 'المشارك';
$string['pluginadministration'] = 'إدارة الواجب';
$string['pluginname'] = 'الواجب';
$string['preventsubmissionnotingroup'] = 'يتطلب قيام المجموعة بتقديم التسليم';
$string['preventsubmissionnotingroup_help'] = 'عند تمكينه، سيكون المستخدمون اللامنتمون إلى أي مجموعة غير قادرين على تقديم تسليمات.';
$string['preventsubmissions'] = 'إمنع المستخدم من تقديم المزيد من التسليمات لهذا الواجب.';
$string['preventsubmissionsshort'] = 'إمنع تغييرات التسليم';
$string['previous'] = 'السابق';
$string['previoususer'] = 'المستخدم السابق';
$string['privacy:attemptpath'] = 'المحاولة {$a}';
$string['privacy:blindmarkingidentifier'] = 'المُعرَّف المستعمل للتسليمات غير المشخصنة';
$string['privacy:gradepath'] = 'الدرجة';
$string['privacy:metadata:assigndownloadasfolders'] = 'تفضيل المستخدم فيما إذا كانت التسليمات المتعددة الملفات ينبغي تنزيلها في مجلدات';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'بيانات الإفادة للواجب';
$string['privacy:metadata:assignfilter'] = 'خيارات المرشح مثل \'مُسَلم\'، \'غير مُسَلم\'، \'يتطلب التقييم\'، و\'مُنِح تمديداً\'';
$string['privacy:metadata:assigngrades'] = 'يخزن درجات المستخدم للواجب';
$string['privacy:metadata:assignmarkerfilter'] = 'ترشيح ملخص التعيين حسب المصحح المُعيَّن';
$string['privacy:metadata:assignmentid'] = 'مُعرَّف الواجب';
$string['privacy:metadata:assignmessageexplanation'] = 'الرسائل ترسل إلى الطلبة بواسطة نظام المراسلة';
$string['privacy:metadata:assignoverrides'] = 'يخزن معلومات التجاوز للواجب';
$string['privacy:metadata:assignperpage'] = 'عدد الواجبات المعروضة في الصفحة';
$string['privacy:metadata:assignquickgrading'] = 'مرجع للدلالة على استعمال التقييم السريع أم لا';
$string['privacy:metadata:assignsubmissiondetail'] = 'يخزن معلومات تسليم المستخدم للواجب';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'بيانات التسليم للواجب';
$string['privacy:metadata:assignuserflags'] = 'يخزن البيانات الوصفية للمستخدم مثل تواريخ التمدي';
$string['privacy:metadata:assignusermapping'] = 'التعيين بشأن التسليمات غير المشخصنة';
$string['privacy:metadata:assignworkflowfilter'] = 'الترشيح حسب مراحل سير العمل المختلفة';
$string['privacy:metadata:grade'] = 'الدرجة الرقمية لتسليم الواجب هذا. يمكن تحديده وفقاً للمقاييس/نماذج التقييم المتقدم وما شابه، ولكنه دائماً يجري تحويله إلى رقم ذي كسر عشري';
$string['privacy:metadata:grader'] = 'مُعرَّف المستخدم للشخص المانح للتقييم';
$string['privacy:metadata:groupid'] = 'مُعرَّف المجموعة التي يكون المستخدم عضواً فيها';
$string['privacy:metadata:latest'] = 'يبسط كثيراً الاستعلامات الهادفة إلى الحصول على معلومات عن المحاولة الأخيرة فقط';
$string['privacy:metadata:mailed'] = 'هل تمت مراسلة هذا المستخدم حتى الآن؟';
$string['privacy:metadata:timecreated'] = 'وقت الإنشاء';
$string['privacy:metadata:userid'] = 'مُعرَّف المستخدم';
$string['privacy:studentpath'] = 'تسليمات الطالب';
$string['privacy:submissionpath'] = 'التسليم';
$string['quickgrading'] = 'التقييم السريع';
$string['quickgrading_help'] = 'التقييم السريع يسمح لك بمنح الدرجات (والمخرجات) مباشرة في جدول التسليمات. التقييم السريع ليس متوافقاً مع التقييم المتقدم وغير موصى به عندما يكون هناك أكثر من مصحح.';
$string['quickgradingchangessaved'] = 'تم حفظ تغييرات الدرجة';
$string['quickgradingresult'] = 'التقييم السريع';
$string['recordid'] = 'المُعرَّف';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} بعد بدء المقرر';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} قبل بدء المقرر';
$string['relativedatessubmissiontimeleft'] = 'محسوب لكل طالب';
$string['removeallgroupoverrides'] = 'حذف كل تجاوزات المجموعة';
$string['removealluseroverrides'] = 'حذف كل تجاوزات المستخدم';
$string['removesubmission'] = 'إزالة التسليم';
$string['removesubmissionconfirm'] = 'هل أنت متأكد من رغبتك في إزالة بيانات التسليم؟';
$string['removesubmissionconfirmforstudent'] = 'هل أنت متأكد من رغبتك في إزالة بيانات التسليم للطالب {$a}؟';
$string['removesubmissionforstudent'] = 'إزالة التسليم للطالب: (المُعرَّف={$a->id}، الاسم الكامل={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'خيار أعِد الفتح حتى النجاح غير متوافق مع االتسليمات غير المشخصنة، لأن التقديرات لا تُطلق إلى سجل التقديرات ما لم يتم كشف هويات الطلبة.';
$string['requireallteammemberssubmit'] = 'يتطلب التسليم من كل أعضاء المجموعة';
$string['requireallteammemberssubmit_help'] = 'عند تمكينه، ينبغي على كل أعضاء مجموعة الطلاب النقر على زر التسليم لهذا الواجب قبل اعتبار تسليم المجموعة مكتملاً. عند تعطيله، سيعتبر تسليم المجموعة مكتملاً بمجرد قيام أي عضو فيها بالنقر على زر التسليم.';
$string['requiresubmissionstatement'] = 'ينبغي على الطلاب قبول بيان التسليم';
$string['requiresubmissionstatement_help'] = 'ينبغي على الطلاب قبول بيان التسليم لكل التسليمات في هذا الواجب .';
$string['revealidentities'] = 'إكشف هويات الطلاب';
$string['revealidentitiesconfirm'] = 'هل أنت متأكد من رغبتك في كشف هويات الطلاب لهذا الواجب؟ لا يمكن التراجع عن هذه العملية. بمجرد الكشف عن هويات الطلاب، ستُطلق الدرجات إلى سجل التقديرات.';
$string['reverttodefaults'] = 'الرجوع إلى افتراضات الواجب';
$string['reverttodraft'] = 'إرجاع التسليم إلى وضع المسودة';
$string['reverttodraftforstudent'] = 'إرجاع التسليم إلى مسودة للطالب: (المُعرَّف={$a->id}، الاسم الكامل={$a->fullname}).';
$string['reverttodraftshort'] = 'أرجِع التسليم إلى مسودة';
$string['reviewed'] = 'تمت مراجعته';
$string['save'] = 'احفظ';
$string['saveallquickgradingchanges'] = 'حفظ كل تغييرات التقييم السريع';
$string['saveandcontinue'] = 'إحفظ واستمر';
$string['savechanges'] = 'حفظ التغييرات';
$string['savegradingresult'] = 'الدرجة';
$string['savenext'] = 'إحفظ وأظهر التالي';
$string['saveoverrideandstay'] = 'إحفظ وأدخل تجاوزاً آخر';
$string['savingchanges'] = 'يجري حفظ التغييرات...';
$string['scale'] = 'المقياس';
$string['search:activity'] = 'الواجب - معلومات النشاط';
$string['selectedusers'] = 'المستخدمون المحددون';
$string['selectlink'] = 'إختر...';
$string['selectuser'] = 'إختر {$a}';
$string['sendlatenotifications'] = 'أبلغ المقيمين عن التسليمات المتأخرة';
$string['sendlatenotifications_help'] = 'عند تمكينه، سيتلقى المقيمون (المعلمون عادة) رسالة كلما قام طالب بالتسليم متأخراً. طرق المراسلة قابلة للتهيئة.';
$string['sendnotifications'] = 'أبلغ المقيمين عن التسليمات';
$string['sendnotifications_help'] = 'عند تمكينه، سيتلقى المقيمون (المعلمون عادة) رسالة كلما قام طالب بالتسليم باكراً، في الموعد أو متأخراً. طرق المراسلة قابلة للتهيئة.';
$string['sendstudentnotifications'] = 'أبلغ الطلاب';
$string['sendstudentnotifications_help'] = 'عند تمكينه، سيتلقى الطلاب رسالة عن التحديث في سجل التقديرات أو الإفادة. إذا كان سير عمل التصحيح مُمَكَّناً في هذا الواجب، لن يتم إرسال الإشعارات حتى "إطلاق" الدرجات.';
$string['sendstudentnotificationsdefault'] = 'الإعداد الافتراضي لـ "أبلغ الطلاب"';
$string['sendstudentnotificationsdefault_help'] = 'حدد القيمة الافتراضية  لخانة تأشير "أبلغ الطلاب" في نموذج التقييم.';
$string['sendsubmissionreceipts'] = 'أرسل إيصالات التسليم إلى الطلاب';
$string['sendsubmissionreceipts_help'] = 'هذا المفتاح يُمكِّن إيصالات التسليم للطلاب. سيتقلى الطلاب إشعاراً كلما سلموا الواجب بنجاح.';
$string['setmarkerallocationforlog'] = 'حدد تعيين التصحيح: (المُعرَّف={$a->id}، الاسم الكامل={$a->fullname}، المصحح={$a->marker}).';
$string['setmarkingallocation'] = 'حدد المصحح المُعيَّن';
$string['setmarkingworkflowstate'] = 'حدد حالة سير عمل التصحيح';
$string['setmarkingworkflowstateforlog'] = 'حدد حالة سير عمل التصحيح: (المُعرَّف={$a->id}، الاسم الكامل={$a->fullname}، الحالة={$a->state}).';
$string['settings'] = 'إعدادات الواجب';
$string['showrecentsubmissions'] = 'أظهر التسليمات الحديثة';
$string['status'] = 'الحالة';
$string['studentnotificationworkflowstateerror'] = 'حالة سير عمل التصحيح ينبغي أن تكون \'مطلق\' لإشعار الطلاب.';
$string['submission'] = 'تسليم';
$string['submissioncopiedhtml'] = '<p>لقد أنشأت نسخة من تسليمك السابق للمهمة \'<i>{$a->assignment}</i>\'.</p>
<p>يمكنك معاينة حالة <a href="{$a->url}">تقديمك للتسليم</a>.</p>';
$string['submissioncopiedsmall'] = 'لقد أنشأت نسخة من تسليمك السابق للمهمة {$a->assignment}';
$string['submissioncopiedtext'] = 'لقد أنشأت نسخة من تسليمك السابق للمهمة \'{$a->assignment}\'

يمكنك معاينة حالة التسليم لمهمتك:

    {$a->url}';
$string['submissiondrafts'] = 'يتطلب الأمر أن يقوم الطلبة بالنقر على زر التسليم';
$string['submissiondrafts_help'] = 'عند تمكينه، سيكون على الطلبة النقر على زر التسليم للتصريح بأن تسليمهم مكتمل بشكل نهائي. هذا يسمح للطلبة بالاحتفاظ بنسخة مسودة من التسليم في النظام. إذا تم تغيير هذا الإعداد من "لا" إلى "نعم" بعد قيام الطلبة بالتسليم فعلياً، فإن تلك التسليمات سيتم اعتبارها نهائية.';
$string['submissioneditable'] = 'يمكن للطالب تحرير هذا التسليم';
$string['submissionempty'] = 'لم يتم تسليم شيء بعد';
$string['submissionlog'] = 'الطالب: {$a->fullname}، الحالة: {$a->status}';
$string['submissionmodified'] = 'لديك بيانات تسليم موجودة. لطفاً، غادر هذه الصفحة ثم حاول مجدداً.';
$string['submissionmodifiedgroup'] = 'لقد تم تعديل التسليم من قبل شخص آخر. لطفاً، غادر هذه الصفحة ثم حاول مجدداً';
$string['submissionnotcopiedinvalidstatus'] = 'لم يتم نسخ التسليم لأنه تم تعديله منذ إعادة فتحه.';
$string['submissionnoteditable'] = 'لا يمكن للطالب تحرير هذا التسليم';
$string['submissionnotready'] = 'هذا الواجب غير جاهز للتسليم:';
$string['submissionplugins'] = 'إضافات التسليم';
$string['submissionreceipthtml'] = '<p>لقد قمت بتسليم الواجب \'<i>{$a->assignment}</i>\'.</p>
<p>يمكنك معاينة حالة <a href="{$a->url}">تقديمك للتسليم</a>.</p>';
$string['submissionreceiptotherhtml'] = 'لقد تم تقديم تسليمك للمهمة
\'<i>{$a->assignment}</i>\'.<br /><br />
يمكنك معاينة حالة <a href="{$a->url}">تقديمك للتسليم</a>.';
$string['submissionreceiptothersmall'] = 'لقد تم تقديم تسليمك للمهمة {$a->assignment}.';
$string['submissionreceiptothertext'] = 'لقد تم تقديم تسليمك للمهمة
\'{$a->assignment}\'.

يمكنك معاينة حالة تسليمك:

    {$a->url}';
$string['submissionreceipts'] = 'أرسل إيصالات التسليم';
$string['submissionreceiptsmall'] = 'لقد قمت بتقديم تسليمك لـ {$a->assignment}';
$string['submissionreceipttext'] = 'لقد قمت بتقديم تسليمك لـ \'{$a->assignment}\'

يمكنك معاينة حالة تسليمك:

    {$a->url}';
$string['submissionsclosed'] = 'التسليمات مغلقة';
$string['submissionsettings'] = 'إعدادات التسليم';
$string['submissionslocked'] = 'هذه الوظيفة لا تقبل التسليم الآن';
$string['submissionslockedshort'] = 'لا يُسمح بالتغييرات في التسليم';
$string['submissionsnotgraded'] = '{$a} مرسلات غير مصححة';
$string['submissionstatement'] = 'بيان التسليم';
$string['submissionstatement_help'] = 'البيان الذي على كل طالب الموافقة عليه من أجل تسليم عمله.';
$string['submissionstatementacceptedlog'] = 'تمت الموافقة على بيان التسليم من قبل المستخدم {$a}';
$string['submissionstatementdefault'] = 'هذا التسليم هو عملي الخاص، ما عدا ما عرَّفتُ به من استعمالي لأعمال الآخرين.';
$string['submissionstatementteamsubmission'] = 'بيان تسليم المجموعة';
$string['submissionstatementteamsubmission_help'] = 'البيان الذي على كل طالب الموافقة عليه من أجل تسليم عمل مجموعته.';
$string['submissionstatementteamsubmissionallsubmit'] = 'بيان تسليم المجموعة حيث كل أعضاء المجموعة يقومون بالتسليم';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'البيان الذي على كل طالب الموافقة عليه من أجل تسليم عمله كعضو مجموعة.';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'هذا التسليم هو عملي الخاص كعضو مجموعة، ما عدا ما عرَّفتُ به من استعمالي لأعمال الآخرين.';
$string['submissionstatementteamsubmissiondefault'] = 'هذا التسليم هو عمل مجموعتي، ما عدا ما عرَّفنا به من استعمالنا لأعمال الآخرين.';
$string['submissionstatus'] = 'حالة التسليم';
$string['submissionstatus_'] = 'لا تسليم';
$string['submissionstatus_draft'] = 'مسودة (غير مسلمة)';
$string['submissionstatus_marked'] = 'مُقيَّم';
$string['submissionstatus_new'] = 'لا تسليم';
$string['submissionstatus_reopened'] = 'أُعيد فتحه';
$string['submissionstatus_submitted'] = 'مسلمة للتقييم';
$string['submissionstatusheading'] = 'حالة التسليم';
$string['submissionsummary'] = '{$a->status}. آخر تعديل في {$a->timemodified}';
$string['submissionteam'] = 'المجموعة';
$string['submissiontypes'] = 'أنواع التسليم';
$string['submitaction'] = 'تسليم';
$string['submitassignment'] = 'تسليم الواجب';
$string['submitassignment_help'] = 'بمجرد تسليم الواجب لن تتمكن من إجراء المزيد من التعديلات عليه.';
$string['submitforgrading'] = 'التسليم لغرض التقييم';
$string['submitted'] = 'تم التسليم';
$string['submittedearly'] = 'تم تسليم الواجب {$a} باكرًا';
$string['submittedlate'] = 'تم تسليم الواجب {$a} متأخراً';
$string['submittedlateshort'] = '{$a} متأخر';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = 'إضافة الإفادة';
$string['subplugintype_assignfeedback_plural'] = 'إضافات الإفادات';
$string['subplugintype_assignsubmission'] = 'إضافة التسليم';
$string['subplugintype_assignsubmission_plural'] = 'إضافات التسليم';
$string['teamname'] = 'الفريق: {$a}';
$string['teamsubmission'] = 'الطلبة يُسلِّمون كمجموعات';
$string['teamsubmission_help'] = 'عند تمكينه، سيتم تقسيم الطلبة إلى مجموعات حسب المجموعات الافتراضية أو التجميعات المخصصة. ستتم مشاركة التسليم ما بين أعضاء المجموعة وسيتمكن كل عضو فيها من معاينة التغييرات الحاصلة في التسليم لمجموعته.';
$string['teamsubmissiongroupingid'] = 'التجميع لمجموعات الطلبة';
$string['teamsubmissiongroupingid_help'] = 'هذا هي التجميع التي سيستعمله الواجب للعثور على المجموعات في حالة التسليم كمجموعات. إذا لم تتم تهيئته، سيتم استعمال المجموعات الافتراضية.';
$string['textinstructions'] = 'تعليمات التسليم';
$string['timemodified'] = 'آخر تعديل';
$string['timeremaining'] = 'الزمن المتبقي';
$string['timeremainingcolon'] = 'الزمن المتبقي: {$a}';
$string['togglezoom'] = 'تكبير/تصغير المنطقة';
$string['ungroupedusers'] = 'لقد تم تمكين الإعداد \'يتطلب قيام المجموعة بتقديم التسليم\' وهناك بعض المستخدمين إما ليسوا أعضاءً في أي مجموعة أو أعضاءً في أكثر من مجموعة، ولذلك يتعذر تقديم التسليمات.';
$string['ungroupedusersoptional'] = 'لقد تم تمكين الإعداد \'الطلبة يُسلِّمون كمجموعات\' وهناك بعض المستخدمين إما ليسوا أعضاءً في أي مجموعة أو أعضاءً في أكثر من مجموعة. لطفاً، خذ بنظر الاعتبار بأن هؤلاء الطلبة سيسلمون كأعضاء في \'المجموعة الافتراضية\'.';
$string['unlimitedattempts'] = 'غير محدود';
$string['unlimitedattemptsallowed'] = 'يُسمح بعدد غير محدود من المحاولات.';
$string['unlimitedpages'] = 'غير محدود';
$string['unlocksubmissionforstudent'] = 'إسمح بالتسليمات للطالب: (المُعرَّف={$a->id}، الاسم الكامل={$a->fullname}).';
$string['unlocksubmissions'] = 'إلغاء تأمين التسليمات';
$string['unsavedchanges'] = 'تغييرات غير محفوظة';
$string['unsavedchangesquestion'] = 'هناك تغييرات غير محفوظة في الدرجات أو الإفادات. هل ترغب في حفظ التغييرات والاستمرار؟';
$string['updategrade'] = 'تحديث الدرجة';
$string['updatetable'] = 'إحفظ وحدِّث الجدول';
$string['upgradenotimplemented'] = 'الترقية غير مطبقة في الإضافة ({$a->type} {$a->subtype})';
$string['userassignmentdefaults'] = 'إفتراضات الواجب للمستخدم';
$string['userextensiondate'] = 'تم منح التمديد حتى: {$a}';
$string['usergrade'] = 'علامة المستخدم';
$string['useridlistnotcached'] = 'تغييرات الدرجة لم يتم حفظها، نظراً لتعذر تحديد التسليم الذي كانت مقصودة له.';
$string['useroverrides'] = 'تجاوزات المستخدم';
$string['useroverridesdeleted'] = 'تم حذف تجاوزات المستخدم';
$string['usersnone'] = 'لا وصول لأي طالب إلى هذا الواجب.';
$string['usersubmissioncannotberemoved'] = 'تتعذر إزالة التسليم لـ {$a}.';
$string['userswhoneedtosubmit'] = 'المستخدمون الذين عليهم التسليم: {$a}';
$string['validmarkingworkflowstates'] = 'حالات سير عمل التصحيح الصحيحة';
$string['viewadifferentattempt'] = 'معاينة محاولة أخرى';
$string['viewbatchmarkingallocation'] = 'معاينة صفحة تعيين التصحيح بالجملة.';
$string['viewbatchsetmarkingworkflowstate'] = 'معاينة صفحة تعيين حالة سير عمل التصحيح بالجملة.';
$string['viewfeedback'] = 'معاينة الإفادة';
$string['viewfeedbackforuser'] = 'معاينة الإفادة للمستخدم: {$a}';
$string['viewfull'] = 'معاينة الكل';
$string['viewfullgradingpage'] = 'إفتح صفحة التقييم الكاملة لوضع الإفادات';
$string['viewgradebook'] = 'معاينة سجل التقديرات';
$string['viewgrading'] = 'معاينة كل التسليمات';
$string['viewgradingformforstudent'] = 'معاينة صفحة التقييم للطالب: (المُعرَّف={$a->id}، الاسم الكامل={$a->fullname}).';
$string['viewownsubmissionform'] = 'معاينة صفحة تسليم الوظيفة الشخصية';
$string['viewownsubmissionstatus'] = 'معاينة صفحة حالة التسليم الشخصية';
$string['viewrevealidentitiesconfirm'] = 'معاينة صفحة تأكيد كشف هويات الطلاب.';
$string['viewsubmission'] = 'معاينة التسليم';
$string['viewsubmissionforuser'] = 'معاينة التسليم للمستخدم: {$a}';
$string['viewsubmissiongradingtable'] = 'معاينة جدول تقييم التسليم.';
$string['viewsummary'] = 'معاينة الملخص';
$string['workflowfilter'] = 'مرشِّح سير العمل';
$string['xofy'] = '{$a->x} من {$a->y}';
