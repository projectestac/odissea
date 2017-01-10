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
 * Strings for component 'backup', language 'ar', branch 'MOODLE_31_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoactivedescription'] = 'قم باختيار ما إذا أردت استخدام عمل نسخ احتياطي ألياً أو يدوياً. إذا تم اختيار النسخ الاحتياطي اليدوي ، فالنسخ الاحتياطي الآلي لن يكون ممكناً إلا من خلال النص البرمجي للنسخ الاحتياطي والذي يتم تنفيذه من واجهة سطر الأوامر (CLI) . ويمكن التنفيذ إما يدوياً أو من خلال الملف الدوري Cron.';
$string['autoactivedisabled'] = 'تعطيل';
$string['autoactiveenabled'] = 'تفعيل';
$string['autoactivemanual'] = 'يدوي';
$string['automatedbackupschedule'] = 'جدول';
$string['automatedbackupschedulehelp'] = 'قم باختيار أيام الأسبوع لأداء النسخ الاحتياطي الآلي';
$string['automatedbackupsinactive'] = 'لم يتم تفعيل النسخ الاحتياطي الآلي من مشرف الموقع';
$string['automatedbackupstatus'] = 'حالة النسخ الاحتياطي';
$string['automateddeletedays'] = 'حذف النسخ الاحتياطية الأقدم من';
$string['automatedmaxkept'] = 'أقصى عدد من نُسخ النسخ الاحتياطي تم الاحتفاظ بها';
$string['automatedmaxkepthelp'] = 'هذا يحدد الحد الأقصى لعدد النسخ الاحتياطي الآلي الأخيرة التي سيتم الاحتفاظ بها لكل مقرر دراسي. سيتم حذف النسخ الاحتياطية الأقدم تلقائيا.';
$string['automatedminkept'] = 'أقل عدد من نُسخ النسخ الاحتياطي تم الاحتفاظ بها';
$string['automatedminkepthelp'] = 'إذا تم حذف النسخ الاحتياطية الأقدم من عدد الأيام المُحدَّدة، فإنه يمكن لمقرر دراسي غير نشط  يكون بلا نسخ احتياطية، ولمنع ذلك ، يجب تحديد الحد الأدنى لعدد النسخ الاحتياطي التي يتم الاحتفاظ بها';
$string['automatedsettings'] = 'إعدادات النسخ الاحتياطي الآلي';
$string['automatedsetup'] = 'ضبط النسخ الاحتياطي الآلي';
$string['automatedstorage'] = 'تخزين النسخ الاحتياطي الآلي';
$string['automatedstoragehelp'] = 'ًقم باختيارمكان تخزين النسخ الاحتياطي ليتم حفظها فيه عندما يتم إنشاؤها تلقائيا.';
$string['backupactivity'] = 'النسخ الاحتياطي للنشاط: {$a}';
$string['backupcourse'] = 'النسخ الاحتياطي لمقرر: {$a}';
$string['backupcoursedetails'] = 'تفاصيل المقرر الدراسي';
$string['backupcoursesection'] = 'القسم: {$a}';
$string['backupcoursesections'] = 'أقسام المقرر الدراسي';
$string['backupdate'] = 'التاريخ مأخوذ';
$string['backupdetails'] = 'تفاصيل النسخ الاحتياطي';
$string['backupdetailsnonstandardinfo'] = 'الملف المُحدَّد ليس  بالشكل المعياري المقبول لملف النسخ الاحتياطي لمودل.عملية الاستعادة ستقوم بمحاوبة تحويل الملف للشكل المعياري للنسخ الاحتياطي و ثم سيتم استرجاعه بعد نجاح العملية';
$string['backupformat'] = 'تصميم';
$string['backupformatmoodle1'] = 'مودل 1';
$string['backupformatmoodle2'] = 'مودل 2';
$string['backupformatunknown'] = 'تصميم غير معروف';
$string['backuplog'] = 'المعلومات التقنية والتحذيرات';
$string['backupmode'] = 'صيغة';
$string['backupmode10'] = 'عام';
$string['backupmode20'] = 'استيراد';
$string['backupmode30'] = 'موزع';
$string['backupmode40'] = 'الموقع ذاته';
$string['backupmode50'] = 'آلي';
$string['backupmode60'] = 'مُحوَّل';
$string['backupsection'] = 'النسخ الاحتياطي لقسم من المقرر الدراسي: {$a}';
$string['backupsettings'] = 'إعدادات النسخ الاحتياطي';
$string['backupsitedetails'] = 'تفاصيل الموقع';
$string['backupstage16action'] = 'استمر';
$string['backupstage1action'] = 'التالي';
$string['backupstage2action'] = 'التالي';
$string['backupstage4action'] = 'تنفيذ النسخ الاحتياطية';
$string['backupstage8action'] = 'استمر';
$string['backuptype'] = 'نوع';
$string['backuptypeactivity'] = 'نشاط';
$string['backuptypecourse'] = 'مقرر دراسي';
$string['backuptypesection'] = 'قسم';
$string['backupversion'] = 'إصدار النسخة الاحتياطية';
$string['cannotfindassignablerole'] = 'دور الـ{$a}  في النسخة الاحتياطية لا يمكن ربطها بأي من الأدوار المسموح لك بتعيينها';
$string['choosefilefromactivitybackup'] = 'منطقة النسخ الاحتياطي للنشاط';
$string['choosefilefromactivitybackup_help'] = 'يتم حفظ هنا النُسخ الاحتياطية للنشاط التي تم عملها بالإعدادت التلقائية';
$string['choosefilefromautomatedbackup'] = 'النُسخ الاحتياطية الآلية';
$string['choosefilefromautomatedbackup_help'] = 'ًيحتوي على النسخ الاحتياطية التي تم إنشاؤه تلقائياً';
$string['choosefilefromcoursebackup'] = 'منطقة النُّسخ الاحتياطية الخاصة بالمقرر الدراسي';
$string['choosefilefromcoursebackup_help'] = 'ًيحتوي على النسخ الاحتياطية للمقرر الدراسي التي تم إنشاؤه تلقائياً';
$string['choosefilefromuserbackup'] = 'منطقة النُّسخ الاحتياطية الخاصة بالمُستخدم';
$string['choosefilefromuserbackup_help'] = 'يتم تخزين ملفات النسخ الاحتياطي التي تم حفظها بلا معلومات المُستخدم هنا';
$string['configgeneralactivities'] = 'ثبت الوضع لافتراضي لتضمين الأنشطة في النسخ الاحتياطي';
$string['configgeneralanonymize'] = 'في حالة التمكين ستصبح المعلومات الخاصة المستخدمين مجهولة افتراضيا';
$string['configgeneralblocks'] = 'ثبت الوضع لافتراضي لتضمين الكتل في النسخ الاحتياطي';
$string['configgeneralcomments'] = 'ثبت الوضع لافتراضي لتضمين التعليقات في النسخ الاحتياطي';
$string['configgeneralfilters'] = 'ثبت الوضع لافتراضي لتضمين الملفات في النسخ الاحتياطي';
$string['configgeneralhistories'] = 'ثبت الوضع لافتراضي لتضمين تاريخ المستخدم داخل النسخ الاحتياطي';
$string['configgenerallogs'] = 'في حالة التمكين ستضمن السجلات في النسخ الاحتياطي افتراضيا';
$string['configgeneralroleassignments'] = 'في حالة التمكين سيتم تضمين تعيينات الأدوار في النسخ الاحتياطي افتراضيا';
$string['configgeneralusers'] = 'ثبت الوضع لافتراضي ما إذا سيتم تضمين المستخدمين في النسخ الاحتياطي';
$string['configgeneraluserscompletion'] = 'في حالة التمكين سيتم تضمين معلومات إتمام المستخدم في النسخ الاحتياطي افتراضيا';
$string['confirmcancel'] = 'إلغاء النسخ الاحتياطي';
$string['confirmcancelno'] = 'ابقى';
$string['confirmcancelquestion'] = 'هل أنت متأكد أنك ترغب في الإلغاء؟
سيتم فقدان أي معلومات قمت بإدخالها مُسبقاً';
$string['confirmcancelyes'] = 'إلغاء';
$string['confirmnewcoursecontinue'] = 'تحذير جديد للمقرر الدراسي';
$string['confirmnewcoursecontinuequestion'] = 'سيتم إنشاء مقرر دراسي مؤقت (مخفي) من قِبل عملية استعادة المقرر. لإيقاف الاستعادة انقر فوق إلغاء الأمر. لا تغلق المتصفح أثناء عملية الاستعادة.';
$string['coursecategory'] = 'التصنيف الذي سيتم تخزين المقرر الدراسي به';
$string['courseid'] = 'المُعرِّف الأصلي';
$string['coursesettings'] = 'إعدادت المقرر الدراسي';
$string['coursetitle'] = 'عنوان';
$string['currentstage1'] = 'الإعدادات الأولية';
$string['currentstage16'] = 'تام';
$string['currentstage2'] = 'إعدادت المخطط';
$string['currentstage4'] = 'تأكيد والمراجعة';
$string['currentstage8'] = 'إجراء عملية النسخ الاحتياطي';
$string['enterasearch'] = 'إدخال البحث';
$string['errorcopyingbackupfile'] = 'فشل لنسخ ملف النسخ الاحتياطي إلى مجلد مؤقت قبل استعادة.';
$string['errorfilenamemustbezip'] = 'اسم الملف المُدخل  يجب أن يكون ملف مضغوط ويكون بامتداد .mbz';
$string['errorfilenamerequired'] = 'يجب إدخال اسم صالح لملف النسخة الاحتياطية';
$string['errorinvalidformat'] = 'تصميم النسخة الاحتياطية غير معروف';
$string['errorinvalidformatinfo'] = 'الملف المحدد غير صالح كملف مودل للنسخة الاحتياطية ولا يمكن استعادته';
$string['errorrestorefrontpagebackup'] = 'يمكنك استعادة النسخ الاحتياطي للصفحة الأولى على الصفحة الاولى';
$string['executionsuccess'] = 'تم بنجاح إنشاء ملف النسخ الاحتياطي';
$string['filename'] = 'إسم الملف';
$string['generalactivities'] = 'ضمن الأنشطة';
$string['generalanonymize'] = 'معلومات غير مشخصنة';
$string['generalbackdefaults'] = ' افتراضيات نسخ الاحتياط العامة';
$string['generalblocks'] = 'ضمن الكتل';
$string['generalcomments'] = 'تضمين التعليقات';
$string['generalfilters'] = 'تضمين المرشحات';
$string['generallogs'] = 'ضمن السجلات';
$string['generalroleassignments'] = 'ضمن تعيينات الأدوار';
$string['generalusers'] = 'تضمين المستخدمين';
$string['generaluserscompletion'] = 'تضمين معلومات المستخدمين التكميلية';
$string['importbackupstage16action'] = 'إستمرار';
$string['importbackupstage1action'] = 'التالي';
$string['importbackupstage2action'] = 'التالي';
$string['importbackupstage4action'] = 'تنفيذ الاستيراد';
$string['importbackupstage8action'] = 'إستمرار';
$string['importcurrentstage0'] = 'إختيار المقرر';
$string['importcurrentstage1'] = 'الإعدادات الأولية';
$string['importcurrentstage16'] = 'إكتمل';
$string['importcurrentstage2'] = 'ضبط مخطط';
$string['importcurrentstage4'] = 'التأكيد والاستعراض';
$string['importcurrentstage8'] = 'تنفيذ الاستيراد';
$string['importfile'] = 'استيراد ملف نسخة الاحتياط';
$string['importsuccess'] = 'اكتمل الاسترداد. اضغط على استمرار للرجوع للمقرر';
$string['includeactivities'] = 'ضمن:';
$string['includeditems'] = 'البنود المتضمنة:';
$string['includesection'] = 'قسم {$a}';
$string['includeuserinfo'] = 'بيانات المستخدم';
$string['locked'] = 'مغلق';
$string['lockedbypermission'] = 'لا يوجد لديك الصلاحيات التي تخولك للقيام بتغير هذا الإعداد';
$string['managefiles'] = 'إدارة ملفات النسخ الاحتياطية';
$string['moodleversion'] = 'إصدار مودل';
$string['moreresults'] = 'يوجد نتائج كثيرة، الرجاء ادخال بحث أكثر دقة';
$string['nomatchingcourses'] = 'لا يوجد مقررات لعرضها';
$string['norestoreoptions'] = 'لا يوجد تصنيفات أو مقررات لتستطيع القيام بعملية الإستراجاع إليها';
$string['originalwwwroot'] = 'رابط النسخة الاحتياطية';
$string['previousstage'] = 'السابق';
$string['restoreactivity'] = 'إسترجاع النشاط';
$string['restorecourse'] = 'إسترجاع المقرر';
$string['restorecoursesettings'] = 'إعدادات المقرر';
$string['restoreexecutionsuccess'] = 'تم إسترجاع المقرر بنجاح، إضغط على زر إكمال في الأسفل لمشاهدة المقرر الذي قمت بإستراجاعة';
$string['restorenewcoursefullname'] = 'اسم المقرر الجديد';
$string['restorenewcourseshortname'] = 'مختصر اسم المقرر الجديد';
$string['restorenewcoursestartdate'] = 'تاريخ بدء جديد';
$string['restorerolemappings'] = 'استرجع تخطيط الدور';
$string['restorerootsettings'] = 'إسترجاع الإعدادات';
$string['restoresection'] = 'إسترجاع القسم';
$string['restorestage1'] = 'التأكيد';
$string['restorestage16'] = 'المراجعة';
$string['restorestage16action'] = 'القيام بعملية الإسترجاع';
$string['restorestage1action'] = 'التالي';
$string['restorestage2'] = 'الوجهة';
$string['restorestage2action'] = 'التالي';
$string['restorestage32'] = 'العملية';
$string['restorestage32action'] = 'استمرار';
$string['restorestage4'] = 'الإعدادات';
$string['restorestage4action'] = 'التالي';
$string['restorestage64'] = 'إكمال';
$string['restorestage64action'] = 'استمرار';
$string['restorestage8'] = 'مخطط';
$string['restorestage8action'] = 'التالي';
$string['restoretarget'] = 'إرجاع الهدف';
$string['restoretocourse'] = 'إستعادة المقرر:';
$string['restoretocurrentcourse'] = 'إستعادة لهذا المقرر';
$string['restoretocurrentcourseadding'] = 'أدمج النسخ الاحتاطي في هذا المقرر';
$string['restoretocurrentcoursedeleting'] = 'احذف محتويات هذا المقرر ثم قم بإسترجاعه';
$string['restoretoexistingcourse'] = 'استرجع في مقرر موجود';
$string['restoretoexistingcourseadding'] = 'ادمج النسج الاحتياطي لمقرر في مقرر موجود';
$string['restoretoexistingcoursedeleting'] = 'احذف محتويات مقرر موجود  تم قم بإسترجاعه';
$string['restoretonewcourse'] = 'إسترجاع كمقرر جديد';
$string['restoringcourse'] = 'عملية إسترجاع المقرر قيد التنفيذ';
$string['restoringcourseshortname'] = 'إسترجاع';
$string['rootenrolmanual'] = 'استرجاع كتسجيل يدوي';
$string['rootsettingactivities'] = 'ضمن الأنشطة';
$string['rootsettinganonymize'] = 'عدم شخصنة معلومات المستخدم';
$string['rootsettingbadges'] = 'تشمل الشارات';
$string['rootsettingblocks'] = 'ضمن الكتل';
$string['rootsettingcalendarevents'] = 'تضمين أحداث التقويم';
$string['rootsettingcomments'] = 'ضمن التعليقات';
$string['rootsettingcompetencies'] = 'تشمل الكفاءات';
$string['rootsettingfilters'] = 'ضمن المرشحات';
$string['rootsettinggradehistories'] = 'ضمن تاريخ الدرجات';
$string['rootsettinggroups'] = 'تضمين المجموعات والتجمُّعات';
$string['rootsettinglogs'] = 'ضمن سجلات المقرر';
$string['rootsettingquestionbank'] = 'تضمين بنك الأسئلة';
$string['rootsettingroleassignments'] = 'ضمن تعيينات أدوار المستخدمين';
$string['rootsettings'] = 'إعدادات النسخ الاحتياطي';
$string['rootsettingusers'] = 'ضمن المستخدمين المسجليين';
$string['rootsettinguserscompletion'] = 'ضمن تفاصيل المستخدمين التكميلية';
$string['sectionactivities'] = 'الأنشطة';
$string['sectioninc'] = 'لم يتم تضمين (معلومات المستخدم) في النسخ الاحتياطي';
$string['sectionincanduser'] = 'تم التضمين في النسخ الاحتياطي مع معلومات المستخدم';
$string['selectacategory'] = 'اختر فئة';
$string['selectacourse'] = 'اختر مقرر دراسي';
$string['setting_course_fullname'] = 'اسم المقرر';
$string['setting_course_shortname'] = 'اسم المقرر المختصر';
$string['setting_course_startdate'] = 'تاريخ  بداية المقرر';
$string['setting_keep_groups_and_groupings'] = 'الاحتفاظ بالمجموعات والتجمُّعات الحالية';
$string['setting_keep_roles_and_enrolments'] = 'الاحتفاظ بالأدوار والتسجيلات الحالية';
$string['setting_overwriteconf'] = 'استبدال إعدادات المقرر';
$string['showtypes'] = 'أظهر خيارات الأنواع';
$string['sitecourseformatwarning'] = 'هنا النسخة الاحتياطية للصفحة الأولى، لاحظ أن هذه النسخة لا يمكن استردادها إلا من  الصفحة الأولى';
$string['skiphidden'] = 'تخطي المقررات الخفية';
$string['skiphiddenhelp'] = 'اختيار إما تضمين أو تخطي المقررات الخفية';
$string['skipmodifdays'] = 'تخطي المقررات الدراسية التي لم يتم تعديلها منذ';
$string['skipmodifdayshelp'] = 'اختيار تخطي المقررات الدراسية التي لم يتم تعديلها منذ الأيام المُحدَّدة';
$string['skipmodifprev'] = 'تخطي المقررات الدراسية التي لم يتم تعديلها منذ النسخ الاحتياطي السابق';
$string['skipmodifprevhelp'] = 'اختيار إما تضمين أو تخطي المقررات الدراسية التي لم يتم تعديلها منذ النسخ الاحتياطي التلقائي الماضي   في هذا النسخ، وهذا يتطلب التسجيل ليتم التفعيل.';
$string['storagecourseandexternal'] = 'منطقة والمجلد المحدد لملفات النسخ الاحتياطي لمقرر دراسي';
$string['storagecourseonly'] = 'منطقة ملفات النسخ الاحتياطي لمقرر';
$string['storageexternalonly'] = 'المجلد المحدد للنسخ الاحتياطي الآلي المُجدول';
$string['timetaken'] = 'الوقت المستغرق';
$string['title'] = 'عنوان';
$string['totalcategorysearchresults'] = 'مجموع التصنيفات : {$a}';
$string['totalcoursesearchresults'] = 'مجموع المقررات: {$a}';
$string['unnamedsection'] = 'قسم غير مُسمَّى';
$string['userinfo'] = 'معلومات المُستخدم';
