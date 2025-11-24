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
 * Strings for component 'checklist', language 'ar', version '4.5'.
 *
 * @package     checklist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomments'] = 'إضافة التعليقات';
$string['additem'] = 'إضافة';
$string['additemalt'] = 'إضافة عنصر جديد إلى القائمة';
$string['additemhere'] = 'إضافة عنصر جديد بعد هذا';
$string['addownitems'] = 'إضافة عناصرك الخاصة';
$string['addownitems-stop'] = 'توقف عن إضافة عناصرك الخاصة';
$string['allowmodulelinks'] = 'السماح بروابط الوحدات';
$string['anygrade'] = 'أي';
$string['anygrouping'] = 'أي تجميع';
$string['autopopulate'] = 'إظهار وحدات المساقات في قائمة التأشير';
$string['autopopulate_help'] = 'سيؤدي هذا إلى إضافة قائمة بكل الموارد والنشاطات التي في المساق الحالي تلقائيًا إلى قائمة التأشير.<br />
سيتم تحديث هذه القائمة بأي تغييرات في المساق، كلما زرت صفحة \'التحرير\' لقائمة التأشير.<br />
يمكن إخفاء العناصر من القائمة بالنقر على أيقونة \'إخفاء\' بجانبها.<br />
لإزالة العناصر التلقائية من القائمة، غيّر هذا الخيار إلى \'لا\'، ثم انقر على \'إزالة عناصر وحدة المساق\' في صفحة \'التحرير\'.';
$string['autoupdate'] = 'التأشير عند اكتمال الوحدات';
$string['autoupdate2'] = 'التأشير عند اكتمال المساقات أو الوحدات';
$string['autoupdate2_help'] = 'سيؤدي هذا إلى تحديد العناصر في قائمة التأشير تلقائيًا عند إكمال النشاط ذي الصلة في المساق.<br />
إذا تم تفعيل ميزة تتبع الإكمال لنشاط معين، فسيتم استعمالها لتأشير العنصر في القائمة.<br>
وإلا، يختلف \'إكمال\' النشاط من نشاط لآخر - \'عرض\' مورد، \'تسليم\' اختبار أو واجب، \'نشر\' في منتدى أو الانضمام إلى محادثة، إلخ. (للحصول على تفاصيل حول سبب وضع علامة \'مكتمل\' على نشاط ما، اطلب من مشرف الموقع البحث في الملف \'mod/checklist/classes/local/autoupdate.php\').<br>
إذا كان العنصر مرتبطًا بمساق وتم تفعيل ميزة الإكمال لذلك المساق، فسيتم تحديثه عند وضع علامة مكتمل عليه.';
$string['autoupdate_help'] = 'سيؤدي هذا إلى تحديد العناصر في قائمة التأشير تلقائيًا عند إكمال النشاط ذي الصلة في المساق.<br />
إذا تم تفعيل ميزة تتبع الإكمال لنشاط معين، فسيتم استعمالها لتأشير العنصر في القائمة.<br>
وإلا، يختلف \'إكمال\' النشاط من نشاط لآخر - \'عرض\' مورد، \'تسليم\' اختبار أو واجب، \'نشر\' في منتدى أو الانضمام إلى محادثة، إلخ. (للحصول على تفاصيل حول سبب وضع علامة \'مكتمل\' على نشاط ما، اطلب من مشرف الموقع البحث في الملف \'mod/checklist/classes/local/autoupdate.php\').<br>';
$string['autoupdatenote'] = 'علامة \'الطالب\' هي التي يتم تحديثها تلقائيًا - لن يتم عرض أي تحديثات لقوائم التأشير المخصصة \'للمعلم فقط\'';
$string['autoupdatewarning_both'] = 'تتضمن هذه القائمة عناصر سيتم تحديثها تلقائيًا (عند إكمال الطلاب للنشاط ذي الصلة). ولكن، نظرًا لأن قائمة التأشير هذه خاصة بالطلاب والمعلمين، فلن يتم تحديث أشرطة التقدم إلا بعد موافقة المعلم على الدرجات الممنوحة.';
$string['autoupdatewarning_student'] = 'تتضمن هذه القائمة عناصر سيتم تحديثها تلقائيًا (عند إكمال الطلاب للنشاط ذي الصلة).';
$string['autoupdatewarning_teacher'] = 'تتضمن هذه القائمة عناصر سيتم تحديثها تلقائيًا (عند إكمال الطلاب للنشاط ذي الصلة).';
$string['calendardescription'] = 'تمت إضافة هذا الحدث من قبل قائمة التأشير: {$a}';
$string['canceledititem'] = 'إلغاء';
$string['changetextcolour'] = 'لون النص التالي';
$string['checkeditemsdeleted'] = 'العناصر المؤشرة تم حذفها';
$string['checklist'] = 'قائمة التأشير';
$string['checklist:addinstance'] = 'إضافة قائمة تأشير جديدة';
$string['checklist:edit'] = 'إنشاء قوائم التأشير وتحريرها';
$string['checklist:emailoncomplete'] = 'تلقي بريد الكتروني عند الإكمال';
$string['checklist:preview'] = 'استعراض قائمة التأشير';
$string['checklist:updatelocked'] = 'تحديث علامات قائمة التأشير المؤمنة';
$string['checklist:updateother'] = 'تحديث علامات قوائم التأشير للطلاب';
$string['checklist:updateown'] = 'تحديث علامات قائمة تأشيرك';
$string['checklist:viewmenteereports'] = 'معاينة تقدم المتدرب (فقط)';
$string['checklist:viewreports'] = 'معاينة تقدم الطلاب';
$string['checklistautoupdate'] = 'السماح لقوائم التأشير بالتحديث تلقائيًا';
$string['checklistfor'] = 'قائمة التأشير لـ';
$string['checklistintro'] = 'مقدمة';
$string['checklistsettings'] = 'الإعدادات';
$string['checks'] = 'تأشير العلامات';
$string['choosecourse'] = 'إختر المساق...';
$string['comments'] = 'التعليقات';
$string['completiondetail:items'] = 'عناصر التأشير: {$a}';
$string['completiondetail:percent'] = 'عناصر التأشير: {$a}%';
$string['completionpercent'] = 'عدد العناصر التي ينبغي تأشيرها:';
$string['completionpercentgroup'] = 'يتطلب التأشير';
$string['completionpercentgroup_help'] = 'إذا تم تحديد \'النسبة المئوية للعناصر\'، فيجب على المستخدمين تحديد النسبة المئوية المحددة على الأقل من عناصر قائمة التأشير ليتم اعتبارها \'مكتملة\'. أما إذا تم تحديد \'عناصر\'، فيجب على المستخدم تحديد هذا العدد على الأقل من العناصر الفردية في القائمة. ملاحظة: إذا حددت عددًا من العناصر هنا أكبر من عدد العناصر في قائمة التأشير، فلن يتم وضع علامة \'مكتملة\' عليها.';
$string['configchecklistautoupdate'] = 'قبل السماح بهذا ينبغي عليك إجراء بعض التعديلات في برمجة نواة مودل، لطفاً، أنظر mod/checklist/README.txt لمعرفة التفاصيل';
$string['configshowcompletemymoodle'] = 'إذا لم يكن هذا مؤشرًا، ستكون قوائم التأشير المكتملة مخفية عن صفحة \'مودل الخاص بي\'';
$string['configshowmymoodle'] = 'إذا لم يكن هذا مؤشرًا، ستكون نشاطات قائمة التأشير (مع شرائط تقدمها) مخفية عن صفحة \'مودل الخاص بي\'';
$string['configshowupdateablemymoodle'] = 'إذا كان هذا مؤشرًا، ستظهر فقط قوائم التأشير القابلة للتحديث في صفحة \'مودل الخاص بي\'';
$string['confirmdeleteitem'] = 'هل أنت متأكد من رغبتك في الحذف النهائي لعنصر قائمة التأشير هذا؟';
$string['deleteitem'] = 'حذف هذا العنصر';
$string['duedatesoncalendar'] = 'إضافة تواريخ الاستيجاب إلى التقويم';
$string['edit'] = 'تحرير قائمة التأشير';
$string['editchecks'] = 'تحرير التأشيرات';
$string['editdatesstart'] = 'تحرير التواريخ';
$string['editdatesstop'] = 'إيقاف تحرير التواريخ';
$string['edititem'] = 'تحرير هذا العنصر';
$string['emailoncomplete'] = 'أرسل بريدًا الكترونيًا عند اكتمال قائمة التأشير:';
$string['emailoncomplete_help'] = 'عند اكتمال قائمة التأشير، يُمكن إرسال بريد إلكتروني للإشعار: إلى الطالب الذي أكملها، أو إلى كل مُعلّمي المساق، أو إلى كليهما.<br />
يُمكن للمشرف التحكم في مُستلمي هذا البريد الإلكتروني باستعمال الإمكانية \'mod:checklist/emailoncomplete\' - كل المُعلّمين، بما في ذلك المُعلّمين غير المُحرّرين، يمتلكون افتراضيًا هذه الإمكانية.
لهذا الغرض، تُعتبر قائمة التأشير \'مكتملة\' بمجرد إتمام كل العناصر - ولا يُؤخذ في الاعتبار أي نسبة إنجاز مُعرَّفة في إعدادات \'إكمال النشاط\'.';
$string['emailoncompletebody'] = 'المستخدم {$a->user} قد أكمل قائمة التأشير \'{$a->checklist}\' في المساق \'{$a->coursename}\'
عاين قائمة التأشير هنا:';
$string['emailoncompletebodyown'] = 'لقد أكملت قائمة التأشير \'{$a->checklist}\' في المساق \'{$a->coursename}\'
عاين قائمة التأشير هنا:';
$string['emailoncompletesubject'] = 'المستخدم  {$a->user} قد أكمل قائمة التأشير \'{$a->checklist}\'';
$string['emailoncompletesubjectown'] = 'لقد أكملت قائمة التأشير \'{$a->checklist}\'';
$string['enterurl'] = 'أدخل عنوان الرابط ...';
$string['errorchecklistitemnotvalid'] = 'مُعرَّف عنصر قائمة التأشير لا ينتمي إلى وحدة المساق هذه!';
$string['eventchecklistcomplete'] = 'قائمة تأشير تم إكمالها';
$string['eventchecklistupdated'] = 'قائمة تأشير تم تحديثها';
$string['eventeditpageviewed'] = 'صفحة تحرير تمت معاينتها';
$string['eventreportviewed'] = 'تقرير تمت معاينته';
$string['eventstudentchecksupdated'] = 'تأشيرات طالب تم تحديثها';
$string['eventteacherchecksupdated'] = 'تأشيرات معلم تم تحديثها';
$string['export'] = 'تصدير العناصر';
$string['forceupdate'] = 'تحديث التأشيرات لكل العناصر التلقائية';
$string['gradetocomplete'] = 'الدرجة للإكمال:';
$string['grouping'] = 'مرئي للتجميعات';
$string['guestsno'] = 'ليست لديك صلاحية معاينة قائمة التأشير هذه';
$string['headingitem'] = 'هذا العنصر هو عنوان - لن يحتوي على خانة تأشير بداخله';
$string['import'] = 'استيراد العناصر';
$string['importfile'] = 'إختر الملف لاستيراده';
$string['importfromcourse'] = 'كل المساق';
$string['importfromsection'] = 'المقطع الحالي';
$string['indentitem'] = 'محاذاة العنصر';
$string['itemcomplete'] = 'مكتمل';
$string['items'] = 'عناصر قائمة التأشير';
$string['itemstype'] = 'العناصر';
$string['linkcourses'] = 'السماح بربط العناصر بالمساقات';
$string['linkcourses_desc'] = 'عند تمكينه، يُمكن ربط عناصر قائمة التأشير بالمساقات داخل مودل، حيث تُعلَّم كمكتملة عند إكمال المساق المرتبط بها. قد يؤثر تمكين هذه الميزة سلبًا على الأداء عند تحرير عناصر قائمة التأشير في مواقع تضم عددًا كبيرًا من المساقات.';
$string['linkto'] = 'رابط لـ';
$string['linktocourse'] = 'المساق المرتبط بهذا العنصر';
$string['linktomodule'] = 'النشاط المرتبط بهذا العنصر';
$string['linktourl'] = 'الرابط المرتبط بهذا العنصر';
$string['lockteachermarks'] = 'تأمين علامات المعلم';
$string['lockteachermarks_help'] = 'عند تمكينه، بمجرد حفظ المعلم  علامة \'نعم\'، لن يتمكن بعدها من تغييرها. المستخدمون ذوو الإمكانية \'mod/checklist:updatelocked\' سيبقون قادرين على تغيير العلامة.';
$string['lockteachermarkswarning'] = 'ملاحظة: بمجرد حفظك لتلك العلامات، لن تتمكن من تغيير أي علامات مؤشرة بـ \'نعم\'';
$string['missinguser'] = 'المستخدم غير موجود';
$string['modulename'] = 'قائمة التأشير';
$string['modulename_help'] = 'إن وحدة قائمة التأشير تسمح للمعلم بإنشاء قائمة تأشير / قائمة مهام / قائمة خطوات لطلابه ليعملوا عليها.';
$string['modulename_link'] = 'mod/checklist/view';
$string['modulenameplural'] = 'قوائم التأشير';
$string['moveitemdown'] = 'أنقل العنصر إلى الأسفل';
$string['moveitemup'] = 'أنقل العنصر إلى الأعلى';
$string['noitems'] = 'لا توجد عناصر في قائمة التأشير';
$string['onlyenrolled'] = 'المستخدمون النشطون فقط';
$string['onlyenrolleddesc'] = 'عند تأشيره، سيظهر فقط المستخدمون ذوو الانضمامات النشطة في قوائم التأشير (أزل التأشير للعودة إلى السلوك القديم)';
$string['openlinkinnewwindow'] = 'أتريد الفتح في نافذة جديدة؟';
$string['optionalhide'] = 'إخفاء العناصر الاختيارية';
$string['optionalitem'] = 'هذا العنصر إختياري';
$string['optionalshow'] = 'إظهار العناصر الاختيارية';
$string['or'] = 'أو';
$string['percent'] = 'النسبة المئوية للعناصر';
$string['percentcomplete'] = 'العناصر المطلوبة';
$string['percentcompleteall'] = 'كل العناصر';
$string['pluginadministration'] = 'إدارة قائمة التأشير';
$string['pluginname'] = 'قائمة التأشير';
$string['preview'] = 'استعراض';
$string['privacy:metadata:checklist_check'] = 'معلومات عن أي من عناصر قائمة التأشير قد تم تأشيرها من قبل المستخدم (أو تم تأشيرها من قبل المعلم للمستخدم) ضمن قائمة تأشير معينة';
$string['privacy:metadata:checklist_check:item'] = 'مُعرَّف عنصر قائمة التأشير الذي تم تأشيره';
$string['privacy:metadata:checklist_check:teacherid'] = 'مُعرَّف المعلم الذي قام بتحديث حالة هذا العنصر';
$string['privacy:metadata:checklist_check:teachermark'] = 'الحالة المعينة لهذا العنصر للمستخدم من قبل المعلم';
$string['privacy:metadata:checklist_check:teachertimestamp'] = 'وقت آخر تعيين للحالة لهذا العنصر من قبل المعلم';
$string['privacy:metadata:checklist_check:userid'] = 'مُعرَّف المستخدم الذي أشر العنصر (أو، إذا كان التأشير من قبل المعلم، المستخدم الذي أُشرت له)';
$string['privacy:metadata:checklist_check:usertimestamp'] = 'وقت آخر تأشير للعنصر من قبل المستخدم (0 إذا كان العنصر غير مؤشر حاليًا)';
$string['privacy:metadata:checklist_comment'] = 'معلومات عن التعليقات التي وضعها المعلم بشأن تقدم المستخدم في قائمة تأشير معينة';
$string['privacy:metadata:checklist_comment:commentby'] = 'مُعرَّف المستخدم (المعلم) الذي وضع هذا التعليق';
$string['privacy:metadata:checklist_comment:itemid'] = 'مُعرَّف عنصر قائمة التأشير الذي يتعلق به التعليق';
$string['privacy:metadata:checklist_comment:text'] = 'نص التعليق';
$string['privacy:metadata:checklist_comment:userid'] = 'مُعرَّف المستخدم (الطالب) الذي يتعلق به هذا التعليق';
$string['privacy:metadata:checklist_comment_student'] = 'التعليقات المقدمة من قبل الطالب لقائمة تأشير معينة';
$string['privacy:metadata:checklist_comment_student:itemid'] = 'مُعرَّف عنصر قائمة التأشير الذي يتعلق به التعليق';
$string['privacy:metadata:checklist_comment_student:text'] = 'نص التعليق';
$string['privacy:metadata:checklist_comment_student:usermodified'] = 'مُعرَّف المستخدم (الطالب) الذي وضع هذا التعليق';
$string['privacy:metadata:checklist_comp_notification'] = 'تتبع اي من المستخدمين قد أكمل كل العناصر في قائمة تأشيره حتى لا يتم إرسال البريد الالكتروني مرة أخرى';
$string['privacy:metadata:checklist_comp_notification:checklistid'] = 'مُعرَّف قائمة التأشير';
$string['privacy:metadata:checklist_comp_notification:iscomplete'] = '1 مكتملة و 0 غير مكتملة';
$string['privacy:metadata:checklist_comp_notification:userid'] = 'مُعرَّف المستخدم الذي أكمل قائمة التأشير';
$string['privacy:metadata:checklist_item'] = 'معلومات عن العناصر الخاصة التي أضافها المستخدم إلى قائمة تأشير معينة';
$string['privacy:metadata:checklist_item:checklist'] = 'مُعرَّف قائمة التأشير التي أضيف إليها هذا العنصر الخاص';
$string['privacy:metadata:checklist_item:displaytext'] = 'نص العنصر الخاص لقائمة التأشير';
$string['privacy:metadata:checklist_item:userid'] = 'مُعرَّف المستخدم الذي أنشأ العنصر الخاص (0 للعناصر المنشأة من قبل المعلم والظاهرة لكل المستخدمين)';
$string['progress'] = 'التقدم';
$string['removeauto'] = 'إزالة عناصر وحدة المساق';
$string['report'] = 'مشاهدة التقدّم';
$string['reporttablesummary'] = 'جدول يظهر عناصر قائمة التأشير التي أكملها كل طالب';
$string['requireditem'] = 'هذا العنصر إجباري - لا بد من إكماله';
$string['resetchecklistprogress'] = 'إعادة تعيين تقدم قائمة التأشير وعناصر المستخدم';
$string['savechecks'] = 'حفظ';
$string['showcolorchooser'] = 'عرض منتقي الألوان';
$string['showcolorchooserdesc'] = 'يعرض منتقي الألوان لعنصر القائمة في edit.php';
$string['showcompletemymoodle'] = 'إظهار قوائم التأشير المكتملة في صفحة \'مودل الخاص بي\'';
$string['showfulldetails'] = 'إظهار التفاصيل الكاملة';
$string['showhidechecked'] = 'إظهار/إخفاء العناصر المحددة';
$string['showmymoodle'] = 'إظهار قوائم التأشير في صفحة \'مودل الخاص بي\'';
$string['showprogressbars'] = 'إظهار شرائط التقدم';
$string['showupdateablemymoodle'] = 'إظهار قوائم التأشير القابلة للتحديث فقط في صفحة \'مودل الخاص بي\'';
$string['student_comment_created'] = 'تعليق الطالب تم إنشاؤه';
$string['student_comment_updated'] = 'تعليق الطالب تم تحديثه';
$string['student_comment_updated_desc'] = 'المستخدم ذو المُعرَّف {$a->userid} قام بتحديث تعليق ما في قائمة التأشير ضمن وحدة المساق ذات المُعرَّف {$a->cmid} ليكون فيه النص \'{$a->commenttext}\'';
$string['studentcomments'] = 'المستخدم يمكنه إضافة تعليقاته الخاصة إلى عناصر قائمة التأشير';
$string['teacheralongsidecheck'] = 'الطالب والمعلم';
$string['teachercomments'] = 'المعلمون يمكنهم إضافة التعليق';
$string['teacherdate'] = 'آخر تاريخ قام فيه المعلم بتحديث هذا العنصر';
$string['teacheredit'] = 'التحديثات من قبل';
$string['teacherid'] = 'المعلم الأخير الذي حدّث هذه العلامة';
$string['teachermarkno'] = 'المعلم يعتبر بأنك لم تكمله';
$string['teachermarkundecided'] = 'المعلم لم يقم بعد بتأشيره';
$string['teachermarkyes'] = 'المعلم يعتبر بأنك قد أكملته';
$string['teachernoteditcheck'] = 'الطالب فقط';
$string['teacheroverwritecheck'] = 'المعلم فقط';
$string['theme'] = 'نمط عرض قائمة التأشير';
$string['togglecolumn'] = 'تبديل العمود';
$string['toggledates'] = 'تبديل الأسماء والتواريخ';
$string['togglerow'] = 'تبديل الصف';
$string['unindentitem'] = 'إلغاء محاذاة العنصر';
$string['update_student_comment_failed'] = 'فشل تحديث تعليق الطالب';
$string['updatecompletescore'] = 'حفظ تقديرات الإكمال';
$string['updateitem'] = 'تحديث';
$string['userdate'] = 'آخر تاريخ حدّث فيه المستخدم هذا العنصر';
$string['useritemsallowed'] = 'المستخدم يمكنه إضافة عناصره الخاصة';
$string['useritemsdeleted'] = 'عناصر المستخدم تم حذفها';
$string['view'] = 'معاينة قائمة التأشير';
$string['viewall'] = 'معاينة كل الطلاب';
$string['viewallcancel'] = 'إلغاء';
$string['viewallsave'] = 'حفظ';
$string['viewsinglereport'] = 'معاينة تقدم هذا المستخدم';
$string['viewsingleupdate'] = 'تحديث تقدم هذا المستخدم';
$string['yesnooverride'] = 'نعم، لا يمكن تجاوزه';
$string['yesoverride'] = 'نعم، يمكن تجاوزه';
