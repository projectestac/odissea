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
 * Strings for component 'group', language 'ar', version '4.4'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'أُضيفت عن طريق {$a}';
$string['addgroup'] = 'إضافة المستخدم للمجموعة';
$string['addgroupstogrouping'] = 'إضافة المجموعة إلى التجميع';
$string['addgroupstogroupings'] = 'إضافة/إزالة المجموعات';
$string['adduserstogroup'] = 'إضافة/استبعاد مستخدم';
$string['allocateby'] = 'تخصيص الأعضاء';
$string['anygrouping'] = '[أي تجميع]';
$string['autocreategroups'] = 'الإنشاء التلقائي للمجموعات';
$string['backtogroupings'] = 'الرجوع إلى التجميعات';
$string['backtogroups'] = 'الرجوع إلى المجموعات';
$string['badnamingscheme'] = 'يجب أن يحتوي على واحد بالضبط من الرموز التالية : \'@\'  أو \'#\'';
$string['byfirstname'] = 'أبجدياً حسب الاسم الأول، الاسم الأخير';
$string['byidnumber'] = 'أبجدياً حسب رقم المعرّف';
$string['bylastname'] = 'أبجدياً حسب الاسم الأخير، الاسم الأول';
$string['createautomaticgrouping'] = 'إنشاء التجميعات آلياً';
$string['creategroup'] = 'أنشئ مجموعة';
$string['creategrouping'] = 'إنشاء تجميع';
$string['creategroupinselectedgrouping'] = 'إنشاء مجموعة ضمن التجميع';
$string['createingrouping'] = 'تجميع المجموعات المنشأة تلقائياً';
$string['createorphangroup'] = 'إنشاء مجموعة يتيمة';
$string['csvdelimiter'] = 'فاصل CSV';
$string['databaseupgradegroups'] = 'إصدار المجموعات الآن هو {$a}';
$string['defaultgrouping'] = 'التجميع الافتراضي';
$string['defaultgroupingname'] = 'تجميع';
$string['defaultgroupname'] = 'مجموعة';
$string['deleteallgroupings'] = 'حذف كل التجميعات';
$string['deleteallgroups'] = 'حذف كل المجموعات';
$string['deletegroupconfirm'] = 'هل أنت متأكد من رغبتك بحذف مجموعة \'{$a}\'؟';
$string['deletegrouping'] = 'حذف التجميع';
$string['deletegroupingconfirm'] = 'هل أنت متأكد من رغبتك بحذف التجميع "{$a}" (لن يتم حذف المجموعات داخل التجميع)';
$string['deletegroupsconfirm'] = 'هل أنت متأكد من رغبتك في حذف المجموعات التالية؟';
$string['deleteselectedgroup'] = 'حذف';
$string['disablemessagingaction'] = 'تعطيل المراسلة';
$string['editgroupingsettings'] = 'تحرير إعدادات التجميعات';
$string['editgroupsettings'] = 'تحرير إعدادات المجموعات';
$string['editusersgroupsa'] = 'تحرير مجموعات "{$a}"';
$string['enablemessaging'] = 'مراسلة المجموعة';
$string['enablemessaging_help'] = 'عند تمكينه، يمكن لأعضاء المجموعة مراسلة الآخرين ضمن مجموعتهم عبر دُرج المراسلة.';
$string['enablemessagingaction'] = 'تمكين المراسلة';
$string['encoding'] = 'الترميز';
$string['enrolmentkey'] = 'مفتاح الانضمام';
$string['enrolmentkey_help'] = 'يُمكِّن استعمال مفتاح الانضمام جعل الوصول إلى المساق مقتصراً على أولئك الذين يعرفون المفتاح فقط. إذا تم تحديد مفتاح الانضمام للمجموعة أيضاً، فاستعماله لن يسمح للمستخدم بالوصول إلى المساق فحسب، بل سيقوم بمنحه عضوية تلك المجموعة أيضاً.

ملاحظة: يجب تمكين مفاتيح انضمام المجموعات في إعدادات الانضمام الذاتي، ويجب أيضاً تحديد مفتاح الانضمام إلى المساق.';
$string['enrolmentkeyalreadyinuse'] = 'مفتاح الانضمام هذا مستعمل سلفاً لمجموعة أخرى.';
$string['erroraddremoveuser'] = 'خطأ في إضافة / إزالة المستخدم {$a}  من المجموعة';
$string['erroraddtogroup'] = 'قيمة خاطئة لحقل إضافة إلى المجموعة. ينبغي أن تكون 0 لنمط اللامجموعات أو 1 لإنشاء مجموعة جديدة.';
$string['erroraddtogroupgroupname'] = 'لا يمكنك تحديد اسم المجموعة عند ضبط الإعداد \'إضافة إلى المجموعة\'.';
$string['erroreditgroup'] = 'خطأ في إنشاء /تحديث المجموعة {$a}';
$string['erroreditgrouping'] = 'خطأ في إنشاء / تحديث تجمُّع {$a}';
$string['errorinvalidgroup'] = 'خطأ، مجموعة غير صالحة {$a}';
$string['errorremovenotpermitted'] = 'لا تمتلك الصلاحية لإزالة عضو مجموعة  تم إضافته تلقائيا للمجموعة {$a}';
$string['errorselectone'] = 'الرجاء اختيار مجموعة واحدة قبل تحديد هذا الخيار';
$string['errorselectsome'] = 'الرجاء اختيار مجموعة واحدة أو أكثر قبل تحديد هذا الخيار';
$string['evenallocation'] = 'ملاحظة: للحفاظ على تخصيص مجموعة  بشكل متساوٍ، العدد الفعلي للأعضاء في المجموعة يختلف عن الرقم الذي حددته.';
$string['eventgroupcreated'] = 'مجموعة تم إنشاؤها';
$string['eventgroupdeleted'] = 'مجموعة تم حذفها';
$string['eventgroupingcreated'] = 'تجميع تم إنشاؤه';
$string['eventgroupingdeleted'] = 'تجميع تم حذفه';
$string['eventgroupinggroupassigned'] = 'مجموعة تمت إضافتها إلى تجميع';
$string['eventgroupinggroupunassigned'] = 'مجموعة تمت إزالتها من تجميع';
$string['eventgroupingupdated'] = 'تجميع تم تحديثه';
$string['eventgroupmemberadded'] = 'عضو تم إضافته إلى مجموعة';
$string['eventgroupmemberremoved'] = 'عضو تم إزالته من مجموعة';
$string['eventgroupupdated'] = 'مجموعة تم تحديثها';
$string['existingmembers'] = 'الأعضاء الموجودين: {$a}';
$string['exportgroupsgroupings'] = 'تنزيل المجموعات والتجميعات بشكل';
$string['filtergroups'] = 'ترشيح المجموعات حسب:';
$string['group'] = 'مجموعة';
$string['groupaddedsuccesfully'] = 'تمت إضافة المجموعة {$a} بنجاح';
$string['groupaddedtogroupingsuccesfully'] = 'تمت إضافة المجموعة {$a->groupname} إلى التجميع {$a->groupingname} بنجاح';
$string['groupby'] = 'أنشئ تلقائياً بناءً على';
$string['groupdescription'] = 'وصف المجموعة';
$string['groupinfo'] = 'معلومات عن المجموعة المُختارة';
$string['groupinfomembers'] = 'معلومات عن الأعضاء المختارين';
$string['groupinfopeople'] = 'معلومات عن الأشخاص المختارين';
$string['grouping'] = 'التجميع';
$string['grouping_help'] = 'التجميع هو عدد من المجموعات ضمن مساق. إذا تم اختيار تجميع، فسيكون بإمكان الطلاب المنتمين لمجموعات في هذا التجميع العمل سوية.';
$string['groupingaddedsuccesfully'] = 'تمت إضافة التجميع {$a} بنجاح';
$string['groupingdescription'] = 'وصف التجميع';
$string['groupingname'] = 'اسم التجميع';
$string['groupingnameexists'] = 'التجميع باسم \'{$a}\' موجود مسبقاً في هذا المساق، يرجى اختيار اسم آخر.';
$string['groupings'] = 'التجميعات';
$string['groupingsection'] = 'صلاحية الوصول للتجميع/التجمُّع';
$string['groupingsection_help'] = 'التجميع هي عبارة عن مجموعة من المجموعات ضمن المقرر الدراسي. إذا تم تحديد تجميع هنا، فقط الطلاب المُضافون إلى مجموعات داخل هذا التجميع يمكنهم الوصول إلى القسم.';
$string['groupingsonly'] = 'التجميعات فقط';
$string['groupmember'] = 'عضو المجموعة';
$string['groupmemberdesc'] = 'الدور القياسي لعضو مجموعة';
$string['groupmembers'] = 'أعضاء المجموعة';
$string['groupmemberssee'] = 'عاين أعضاء المجموعة';
$string['groupmembersselected'] = 'أعضاء مجموعة مختارة';
$string['groupmode'] = 'نمط المجموعة';
$string['groupmode_groupsseparate_help'] = 'الطلاب مقسمون على مجموعات ويمكنهم فقط مشاهدة عمل مجموعتهم.';
$string['groupmode_groupsvisible_help'] = 'الطلاب مقسمون على مجموعات، ولكن يمكنهم مشاهدة عمل المجموعات الأخرى.';
$string['groupmode_help'] = '* بلا مجموعات
* مجموعات منفصلة: الطلاب مقسمون على مجموعات، ولكن يمكنهم مشاهدة عمل المجموعات الأخرى
* مجموعات مرئية: الطلاب مقسمون على مجموعات، ولكن يمكنهم مشاهدة عمل المجموعات الأخرى

نمط المجموعات المعرَّف على مستوى المساق هو النمط الافتراضي لكل الأنشطة ضمنه. إن كان نمط المجموعات مفروضاً على مستوى المساق، لن يكون بالإمكان تغييره في النشاطات.';
$string['groupmodeforce'] = 'فرض نمط المجموعات';
$string['groupmodeforce_help'] = 'إن نمط المجموعات مفروض لكل النشاطات ولا يمكن تغييره على مستوى نشاط معين.';
$string['groupmy'] = 'مجموعتي';
$string['groupname'] = 'اسم المجموعة';
$string['groupnameexists'] = 'المجموعة باسم \'{$a}\' موجودة مسبقاً في هذا المساق، يرجى اختيار اسم آخر.';
$string['groupnotamember'] = 'عذراً، أنت ليس عضو في تلك المجموعة';
$string['groups'] = 'المجموعات';
$string['groupscount'] = 'مجموعات ({$a})';
$string['groupsettingsheader'] = 'المجموعات';
$string['groupsgroupings'] = 'المجموعات والتجميعات';
$string['groupsinselectedgrouping'] = 'المجموعات في:';
$string['groupsnone'] = 'لا يوجد محموعات';
$string['groupsonly'] = 'مجموعات فقط';
$string['groupspreview'] = 'معاينة المجموعات';
$string['groupsseparate'] = 'مجموعات منفصلة';
$string['groupsvisible'] = 'مجموعات مرئية';
$string['grouptemplate'] = 'مجموعة @';
$string['importgroups'] = 'استيراد المجموعات';
$string['importgroups_help'] = 'يمكن استيراد المجموعات عبر ملف نصي. ينبغي أن يكون تنسيق الملف كما يلي:

* كل سطر من الملف يحتوي على سجل واحد
* كل سجل هو عبارة عن سلسلة من البيانات مفصولة بالفاصلة المحددة
* يحتوي السجل الأول على قائمة أسماء الحقول لتحديد شكل بقية الملف
* الحقل الإجباري هو groupname
* الحقول التالية هي اختيارية: مُعرَّف المجموعة groupidnumber، الوصف description، مفتاح التسجيل enrolmentkey، اسم التجميع groupingname، تمكين المراسلة enablemessaging';
$string['importgroups_link'] = 'group/import';
$string['includeonlyactiveenrol'] = 'تضمين الانضمامات النشطة فقط';
$string['includeonlyactiveenrol_help'] = 'في حالة التمكين، لن يتم تضمين حسابات المستخدمين المُعلَّقة في أي مجموعات.';
$string['javascriptrequired'] = 'هذه الصفحة تتطلب تمكين لغة JavaScript';
$string['manageactions'] = 'إدارة';
$string['memberofgroup'] = 'عضور مجموعة: {$a}';
$string['members'] = 'عدد الأعضاء في كل مجموعة';
$string['membersofselectedgroup'] = 'أعضاء في:';
$string['messagingdisabled'] = 'بنجاح تم تعطيل المراسلة مع {$a} من المجموعات';
$string['messagingenabled'] = 'بنجاح تم تمكين المراسلة مع {$a} من المجموعات';
$string['mygroups'] = 'مجموعاتي';
$string['namingscheme'] = 'طريقة التسمية';
$string['namingscheme_help'] = 'يمكن استخدام الرمز (@) لإنشاء مجموعات بترقيم أحرف. على سبيل المثال مجموعة A، مجموعة B، ...

يمكن استخدام الرمز (#) لإنشاء مجموعات بترقيم أعداد. على سبيل المثال: مجموعة 1، مجموعة 2، ...';
$string['newgrouping'] = 'تجميع جديد';
$string['newpicture'] = 'صورة جديدة';
$string['newpicture_help'] = 'ختر صورة بتنسيق JPG أو PNG. سيتم اقتصاص الصورة وتغيير حجمها إلى 100x100 بكسل.';
$string['noallocation'] = 'لم يتم التخصيص';
$string['nogroup'] = 'لا توجد مجموعة';
$string['nogrouping'] = 'لا يوجد تجميع/تجمُّع';
$string['nogroups'] = 'لا توجد مجموعات أنشئت في هذا المساق بعد';
$string['nogroupsassigned'] = 'لم يتم تعيين مجموعات';
$string['nopermissionforcreation'] = 'تعذر إنشاء مجموعة "{$a}" نظراً لأنك لا تمتلك الصلاحيات المطلوبة لذلك';
$string['nosmallgroups'] = 'منع المجموعة الصغيرة الأخيرة';
$string['notingroup'] = 'تجاهل المستخدمين في المجموعات';
$string['notingrouping'] = 'غير موجود في تجميع';
$string['notingrouplist'] = 'ليس في المجموعة';
$string['nousersinrole'] = 'لا يوجد مُستخدمين مناسبين للدور المُختار';
$string['number'] = 'عدد الأعضاء/المجموعات';
$string['numgroups'] = 'عدد المجموعات';
$string['nummembers'] = 'عدد الأعضاء في كل مجموعة';
$string['othergroups'] = 'مجموعات أخرى';
$string['overview'] = 'معاينة';
$string['participation'] = 'إظهار المجموعة في القائمة المنسدلة بالنسبة للنشاطات التي في وضعية المجموعة';
$string['participation_help'] = 'هل ينبغي لأعضاء المجموعة أن يكونوا قادرين على اختيار هذه المجموعة للنشاطات في نمط المجموعات المنفصلة أم نمط المجموعات المرئية؟ (هذا الإعداد قابل للتطبيق حصرًا إذا تم ضبط المجموعة لتكون مرئية من قبل الكل أو مرئية من قبل الأعضاء).';
$string['participationshort'] = 'المساهمة';
$string['potentialmembers'] = 'الأعضاء المحتملون: {$a}';
$string['potentialmembs'] = 'الأعضاء المحتملون';
$string['printerfriendly'] = 'عرض طباعة';
$string['privacy:metadata:core_message'] = 'محادثات المجموعة';
$string['privacy:metadata:groups'] = 'سجل عضوية المجموعة';
$string['privacy:metadata:groups:groupid'] = 'مُعرَّف المجموعة';
$string['privacy:metadata:groups:timeadded'] = 'البصمة الزمنية التي تشير إلى وقت إضافة المستخدم إلى المجموعة';
$string['privacy:metadata:groups:userid'] = 'مُعرَّف المستخدم المرتبط بالمجموعة';
$string['random'] = 'عشوائياً';
$string['removefromgroup'] = 'استبعد مستخدم من المجموعة {$a}';
$string['removefromgroupconfirm'] = 'هل تريد بالفعل إزالة المستخدم "{$a->user}" من المجموعة "{$a->group}"؟';
$string['removegroupfromselectedgrouping'] = 'أستبعد مجموعة من التجميع';
$string['removegroupingsmembers'] = 'إزالة كل المجموعات من التجميعات';
$string['removegroupsmembers'] = 'إزالة كل الأعضاء من المجموعات';
$string['removeselectedusers'] = 'استبعد المستخدمين المختارين من المجموعة';
$string['selectfromgroup'] = 'حدِّد أعضاء من المجموعة';
$string['selectfromgrouping'] = 'حدِّد أعضاء من التجميع';
$string['selectfromrole'] = 'إختر الأعضاء بدور';
$string['showgroupsingrouping'] = 'أظهر المجموعات في التجميع';
$string['showmembersforgroup'] = 'أظهر أعضاء المجموعة';
$string['toomanygroups'] = 'عدد المستخدمين غير كافي لملء هذا العدد من المجموعات - هناك فقط {$a} مستخدم في الدور المُختار';
$string['usercount'] = 'عدد المستخدمين';
$string['usercounttotal'] = 'عدد المستخدمين: ({$a})';
$string['usergroupmembership'] = 'انتماءات المستخدمين المُحدَّدين:';
$string['visibility'] = 'رؤية عضوية المجموعة';
$string['visibility_help'] = '* مرئية - يمكن لكل المشاركين في المساق مشاهدة المستخدمين الذين في المجموعة
* مرئية من قبل الأعضاء فقط - المشاركون في المساق الذين ليسوا في المجموعة لا يمكنهم مشاهدة المجموعة أو أعضائها
* مرئية لصاحبها - يمكن للمستخدم مشاهدة نفسه عضوًا في المجموعة، ولكنه لا يستطيع مشاهدة عضوية الآخرين فيها
* مخفية - المعلمون وحدهم يمكنهم مشاهدة المجموعة وأعضائها

المستخدمون الذين لديهم إمكانية معاينة المجموعات المخفية سيتمكنون دائمًا من مشاهدة عضوية المجموعة.

لاحظ بأنه لا يمكن تحرير هذا الإعداد إذا كانت للمجموعة أعضاء.';
$string['visibilityall'] = 'مرئية';
$string['visibilitymembers'] = 'مرئية من قبل الأعضاء فقط';
$string['visibilitynone'] = 'مخفية';
$string['visibilityown'] = 'مرئية لصاحبها';
$string['visibilityshort'] = 'الرؤية';
$string['withselected'] = 'مع المختارة';
