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
 * Strings for component 'course', language 'ar', version '4.1'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'الحاشية السفلية لمنتقي النشاط';
$string['activitychooseractivefooter_desc'] = 'يمكن لمنتقي النشاط دعم الإضافات التي تضيف عناصر إلى حاشيته السفلية.';
$string['activitychoosercategory'] = 'منتقي النشاطات';
$string['activitychooserhidefooter'] = 'بلا تذييل';
$string['activitychooserrecommendations'] = 'النشاطات الموصى بها';
$string['activitychoosersettings'] = 'إعدادات منتقي النشاطات';
$string['activitychoosertabmode'] = 'تبويبات منتقي النشاطات';
$string['activitychoosertabmode_desc'] = 'منتقي النشاطات يتيح للمعلم بسهولة إختيار النشاطات والموارد لإضافتها إلى المساق. هذا الإعداد يحدد التبويبات التي ينبغي لها أن تظهر فيه. لاحظ أن التبويب المعلَّم بنجمة يظهر فقط للمستخدم الذي وضع نجمة لنشاط أو أكثر، أما التبويب الموصى به فيظهر فقط إذا قام المشرف على الموقع بتأشير بعض النشاطات على أنها موصى بها.';
$string['activitychoosertabmodeone'] = 'المعلَّمة بنجمة، الكل، النشاطات، الموارد، الموصى بها';
$string['activitychoosertabmodethree'] = 'المعلَّمة بنجمة، النشاطات، الموارد، الموصى بها';
$string['activitychoosertabmodetwo'] = 'المعلَّمة بنجمة، الكل، الموصى بها';
$string['activitydate:closed'] = 'مغلق:';
$string['activitydate:closes'] = 'يُغلق:';
$string['activitydate:opened'] = 'مفتوح:';
$string['activitydate:opens'] = 'يُفتح:';
$string['aria:coursecategory'] = 'تصنيف المساق';
$string['aria:courseimage'] = 'صورة المساق';
$string['aria:coursename'] = 'اسم المساق';
$string['aria:courseshortname'] = 'الاسم المختصر للمساق';
$string['aria:defaulttab'] = 'النشاطات الافتراضية';
$string['aria:favourite'] = 'المساق المميز بنجمة';
$string['aria:favouritestab'] = 'النشاطات المعلَّمة بنجمة';
$string['aria:modulefavourite'] = 'علِّم النشاط {$a} بنجمة';
$string['aria:recommendedtab'] = 'النشاطات الموصى بها';
$string['browsecourseadminindex'] = 'استعراض إدارة المساق بهذا الفهرس.';
$string['browsesettingindex'] = 'استعراض الإعدادات بهذا الفهرس.';
$string['completion_automatic:done'] = 'منجز:';
$string['completion_automatic:failed'] = 'فشل:';
$string['completion_automatic:todo'] = 'للقيام به:';
$string['completion_manual:aria:done'] = '{$a} مؤشر بأنه منجز. إضغط للتراجع عن ذلك.';
$string['completion_manual:aria:markdone'] = 'تأشير {$a} بأنه منجز';
$string['completion_manual:done'] = 'منجز';
$string['completion_manual:markdone'] = 'التأشير بأنه منجز';
$string['completion_setby:auto:done'] = 'المنجز: {$a->condition} (محدد من قبل {$a->setby})';
$string['completion_setby:auto:todo'] = 'ما مطلوب: {$a->condition} (محدد من قبل {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} مؤشر من قبل {$a->setby} بأنه منجز. إضغط للتراجع عن ذلك.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} مؤشر من قبل {$a->setby} بأنه غير منجز. إضغط لتأشيره منجزًا.';
$string['completionrequirements'] = 'متطلبات الإكمال لـ {$a}';
$string['courseaccess'] = 'الوصول إلى المساق';
$string['coursealreadyfinished'] = 'لقد انتهى المساق بالفعل';
$string['coursecontentnotification'] = 'إرسال إشعار تغيير المحتوى';
$string['coursecontentnotification_help'] = 'قم بتأشير المربع لإشعارمستخدمي المساق بشأن أي نشاط أو مورد جديد أو محدَّث. المستخدمون القادرون على الوصول إلى النشاط أو المورد وحدهم سيتلقون الإشعار.';
$string['coursecontentnotifnew'] = 'المحتوى الجديد في {$a->coursename}';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> هو جديد في المساق <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">تغيير تفضيلات إشعاراتك</a></p>';
$string['coursecontentnotifupdate'] = 'تغير محتوى {$a->coursename}';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> قد تم تغييره في المساق <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">تغيير تفضيلات إشعاراتك</a></p>';
$string['coursenotyetfinished'] = 'لم ينتهي المساق بعد';
$string['coursenotyetstarted'] = 'لم يبدأ المساق بعد';
$string['courseparticipants'] = 'المشاركون في المساق';
$string['coursetoolong'] = 'المساق طويل جداً';
$string['customfield_islocked'] = 'مؤَّمن';
$string['customfield_islocked_help'] = 'إذا تم تأمين الحقل، فسيتمكن المستخدمون الذين لديهم إمكانية تغيير الحقول المخصصة المؤمنة فقط (بشكل افتراضي المستخدمون ذوو الدور الافتراضي للمدير فقط) من تغييره في إعدادات المساق.';
$string['customfield_notvisible'] = 'لا أحد';
$string['customfield_visibility'] = 'ظاهر لـ';
$string['customfield_visibility_help'] = 'يحدد هذا الإعداد مَن يمكنه معاينة اسم وقيمة الحقل المخصص في قائمة المقررات الدراسية أو في مرشح الحقل المخصص المتاح في لوحة التحكم.';
$string['customfield_visibletoall'] = 'الكل';
$string['customfield_visibletoteachers'] = 'المعلمون';
$string['customfieldsettings'] = 'الإعدادات الشائعة لتخصيص حقول المقررات الدراسية';
$string['daystakingcourse'] = 'عدد أيام أخذ المساق';
$string['downloadcontent'] = 'التضمين في تنزيلات المساق (إذا كانت تلك الميزة مُمَكَّنة)';
$string['downloadcontent_help'] = 'هذا الإعداد يقرر فيما إذا كان بالإمكان تنزيل هذا النشاط عند تمكين تنزيل محتوى المساق في إعداداته';
$string['downloadcourseconfirmation'] = 'أنت على وشك تنزيل ملف مضغوط لمحتوى المساق (باستثناء العناصر غير القابلة للتنزيل وأي ملفات يزيد حجمها عن {$a}).';
$string['downloadcoursecontent'] = 'تنزيل محتوى المساق';
$string['downloadcoursecontent_help'] = 'هذا الإعداد يحدد ما إذا كان بالإمكان تنزيل محتوى المساق من قبل المستخدمين ذوي الإمكانية التي تسمح لهم بتنزيله (إفتراضياً، هم المستخدمون بدور الطلاب والمعلمين).';
$string['enabledownloadcoursecontent'] = 'تمكين تنزيل محتوى المساق';
$string['errorendbeforestart'] = 'تاريخ النهاية ({$a}) يسبق تاريخ بداية المساق';
$string['favourite'] = 'المقررات الدراسية المميزة بنجمه';
$string['gradetopassnotset'] = 'لم يتم تحديد علامة النجاح لهذا المساق. قد يُصار إلى وضعها في مفردة التقييم للمساق (إعداد سجل التقديرات).';
$string['informationformodule'] = 'معلومات عن النشاط {$a}';
$string['module'] = 'النشاط';
$string['namewithlink'] = 'اسم التصنيف مع رابطه';
$string['noaccesssincestartinfomessage'] = 'مرحباً {$a->userfirstname}،
<p>عدد من الطلبة في {$a->coursename} لم يدخلوا إلى المساق على الإطلاق.</p>';
$string['nocourseactivity'] = 'لا يوجد نشاط كافي بين بداية ونهاية المساق';
$string['nocourseendtime'] = 'المساق لا يحتوي على تاريخ نهاية';
$string['nocoursesections'] = 'لا توجد أقسام بالمساق';
$string['nocoursestudents'] = 'لا يوجد طلاب';
$string['norecentaccessesinfomessage'] = 'مرحباً {$a->userfirstname}،
<p>عدد من الطلبة في {$a->coursename} لم يدخلوا إلى المساق مؤخراً.</p>';
$string['noteachinginfomessage'] = 'مرحباً {$a->userfirstname}،
<p>هناك مساقات موعد بدئها سيحل في الأسبوع القادم، قد تم تشخيصها بأنها تفتقر إلى انضمام المعلمين أو الطلبة إليها.</p>';
$string['participants:perpage'] = 'عدد المشاركين لكل صفحة';
$string['participants:perpage_help'] = 'عدد المشاركين المعروضين في الصفحة الواحدة من صفحات المشاركين لكل مساق.';
$string['participantsnavigation'] = 'تنقل المشاركين.';
$string['privacy:completionpath'] = 'إكتمال مساق';
$string['privacy:favouritespath'] = 'معلومات المقررات الدراسية المميزة بنجمة';
$string['privacy:metadata:activityfavouritessummary'] = 'نظام المقررات الدراسية يحتوي على معلومات تتعلق بأي من فقرات منتقي النشاطات قد تم تعليمها بنجمة من قبل المستخدم';
$string['privacy:metadata:completionsummary'] = 'يحتوي المساق على معلومات الإكمال عن المستخدم';
$string['privacy:metadata:favouritessummary'] = 'يحتوي المساق على معلومات تتعلق بتمييزه بنجمة من قبل المستخدم';
$string['privacy:perpage'] = 'عدد المقررات الدراسية الظاهرة في الصفحة الواحدة.';
$string['recommend'] = 'أوصي به';
$string['recommendcheckbox'] = 'أوصي بالنشاط: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} بعد بدء المساق';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} قبل بدء المساق';
$string['searchactivitiesbyname'] = 'إبحث عن النشاطات بواسطة الاسم';
$string['searchresults'] = 'نتائج البحث: {$a}';
$string['studentsatriskincourse'] = 'الطالب في خطر في مساق {$a}';
$string['studentsatriskinfomessage'] = 'مرحباً {$a->userfirstname}،
<p>الطلبة في المساق {$a->coursename} تم تشخيصهم بأنهم معرضون إلى خطر.</p>';
$string['submitsearch'] = 'أطلب البحث';
$string['target:coursecompetencies'] = 'الطلاب المعرضون لخطر عدم تحقيق الكفاءات المعينة للمساق';
$string['target:coursecompetencies_help'] = 'يصف هذا المقصد ما إذا كان الطالب معرضاً لخطر عدم تحقيق الكفاءات المعينة للمساق. يعتبر هذا المقصد أن جميع الكفاءات المعينة للمساق يجب أن تتحقق بحلول نهاية المساق.';
$string['target:coursecompletion'] = 'الطلاب المعرضون لخطر عدم استيفاء شروط اكمال المساق';
$string['target:coursecompletion_help'] = 'يصف هذا المقصد ما إذا كان الطالب يعتبر معرضاً لخطر عدم استيفاء شروط إكمال المساق.';
$string['target:coursedropout'] = 'الطلاب المعرضون لخطر التسرب';
$string['target:coursedropout_help'] = 'يصف هذا المقصد ما إذا كان الطالب يعتبر معرضاً لخطر التسرب من الدراسة.';
$string['target:coursegradetopass'] = 'الطلاب المعرضون لخطر عدم تحقيق الحد الأدنى من الدرجة لاجتياز المساق';
$string['target:coursegradetopass_help'] = 'يصف هذا الهدف ما إذا كان الطالب معرضًا لخطر عدم تحقيق الحد الأدنى من الدرجة لاجتياز المساق.';
$string['target:noaccesssincecoursestart'] = 'الطلبة الذين لم يدخلوا إلى المساق بعد';
$string['target:noaccesssincecoursestart_help'] = 'هذا المقصد يصف الطلاب الذين لم يدخلوا أبداً إلى مساق ما رغم انضمامهم إليه.';
$string['target:noaccesssincecoursestartinfo'] = 'الطلاب الآتية أسماؤهم جرى ضمهم إلى مساق بدأ فعلياً، ولكنهم لم يدخلوا إليه أبداً.';
$string['target:norecentaccesses'] = 'الطلاب الذين لم يدخلوا إلى المساق مؤخراً';
$string['target:norecentaccesses_help'] = 'هذا المقصد يحدد الطلاب الذين لم يدخلوا إلى المساق رغم انضمامهم إليه خلال فترة التحليل المساقة (الشهر الماضي إفتراضياً).';
$string['target:norecentaccessesinfo'] = 'الطلاب الآتية أسماؤهم لم يدخلوا إلى مساقاتهم رغم انضمامهم إليها خلال فترة التحليل المساقة (الشهر الماضي إفتراضياً).';
$string['target:noteachingactivity'] = 'المقررات الدراسية المعرضة إلى خطر أن لا تبدأ';
$string['target:noteachingactivity_help'] = 'يصف هذا المقصد ما إذا كانت المقررات الدراسية مخطط لها أن تبدأ في الأسبوع القادم سيكون لها نشاط تعليمي.';
$string['target:noteachingactivityinfo'] = 'المقررات الدراسية الآتية المفترض بها أن تبدأ خلال الأيام القادمة لكنها معرضة إلى خطر أن لا تبدأ لأنها تفتقر إلى انضمام المعلمين أو الطلبة إليها.';
$string['targetlabelstudentcompetenciesno'] = 'الطالب الذي من المحتمل أن يحقق الكفاءات المخصصة للمساق';
$string['targetlabelstudentcompetenciesyes'] = 'طالب المعرض إلى خطر عدم تحقيق الكفاءات المخصصة للمساق';
$string['targetlabelstudentcompletionno'] = 'الطالب الذي من المحتمل أن يستوفي شروط إكمال المادة';
$string['targetlabelstudentcompletionyes'] = 'طالب في خطر عدم استيفاء شروط إكمال المساق';
$string['targetlabelstudentdropoutno'] = 'ليس في خطر';
$string['targetlabelstudentdropoutyes'] = 'طالب معرض للفصل';
$string['targetlabelstudentgradetopassno'] = 'الطالب الذي من المرجح أن يحقق الحد الأدنى من الدرجة لاجتياز المساق.';
$string['targetlabelstudentgradetopassyes'] = 'طالب في خطر عدم استيفاء الحد الأدنى من الدرجة لاجتياز المساق.';
$string['targetlabelteachingno'] = 'المقررات الدراسية المعرضة إلى خطر أن لا تبدأ';
$string['targetlabelteachingyes'] = 'المستخدمون الذين لديهم صلاحيات التدريس الذين يستطيعون الوصول إلى المساق';
