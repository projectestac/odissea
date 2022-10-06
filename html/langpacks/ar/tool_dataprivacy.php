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
 * Strings for component 'tool_dataprivacy', language 'ar', version '3.11'.
 *
 * @package     tool_dataprivacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'الأنشطة والموارد';
$string['addcategory'] = 'إضافة فئة';
$string['addnewdefaults'] = 'أضف افتراضاً جديداً للوحدة';
$string['addpurpose'] = 'أضف غرضاً';
$string['addroleoverride'] = 'أضف تجاوز دور';
$string['approve'] = 'وافق';
$string['approvedrequestsubmitted'] = 'لقد تم تسليم طلبك وستتم معالجته قريباً.';
$string['approverequest'] = 'وافق على الطلب';
$string['automaticdatadeletionapproval'] = 'الموافقة التلقائية على طلب حذف البيانات';
$string['automaticdatadeletionapproval_desc'] = 'عند تمكينه، ستتم الموافقة تلقائياً على طلبات حذف البيانات.<br/>لاحظ أن الموافقة التلقائية سيتم تطبيقها على طلبات الحذف الجديدة مع تمكين هذا الإعداد. طلبات الحذف الموجودة حالياً والتي تنتظر الموافقة ستبقى بحاجة إلى الموافقة اليدوية من قبل مسؤول الخصوصية.';
$string['automaticdataexportapproval'] = 'الموافقة التلقائية على طلب تصدير البيانات';
$string['automaticdataexportapproval_desc'] = 'عند تمكينه، ستتم الموافقة تلقائياً على طلبات تصدير البيانات.<br/>لاحظ أن الموافقة التلقائية سيتم تطبيقها على طلبات التصدير الجديدة مع تمكين هذا الإعداد. طلبات التصدير الموجودة حالياً والتي تنتظر الموافقة ستبقى بحاجة إلى الموافقة اليدوية من قبل مسؤول الخصوصية.';
$string['automaticdeletionrequests'] = 'إنشاء طلبات حذف البيانات التلقائية';
$string['automaticdeletionrequests_desc'] = 'في حالة التمكين، سيتم إنشاء طلب حذف البيانات تلقائياً لأي حسابات مستخدمين يتم حذفها يدوياً.';
$string['bulkapproverequests'] = 'الموافقة على الطلبات';
$string['bulkdenyrequests'] = 'رفض الطلبات';
$string['cachedef_contextlevel'] = 'الغرض والفئة لمستويات السياق';
$string['cachedef_purpose'] = 'أغراض البيانات';
$string['cachedef_purpose_overrides'] = 'تجاوزات الغرض في أداة خصوصية البيانات';
$string['cancelrequest'] = 'إلغاء الطلب';
$string['cancelrequestconfirmation'] = 'هل تريد حقاً إلغاء طلب البيانات هذا؟';
$string['cannotreset'] = 'تعذرت إعادة تعيين هذا الطلب. يمكن إعادة تعيين الطلبات المرفوضة فقط.';
$string['categories'] = 'الفئات';
$string['categorieslist'] = 'قائمة فئات البيانات';
$string['category'] = 'الفئة';
$string['category_help'] = 'تصف الفئة في سجل البيانات نوع البيانات. يمكن إضافة فئة جديدة، أو في حالة تحديد وراثة، يتم تطبيق فئة البيانات من السياق الأعلى. السياقات هي (من الأدنى إلى الأعلى): الكتل > وحدات النشاط > المقررات الدراسية > تصنيفات المقررات > الموقع.';
$string['categorycreated'] = 'تم إنشاء الفئة';
$string['categorydefault'] = 'الفئة الافتراضية';
$string['categorydefault_help'] = 'الفئة الافتراضية هي فئة البيانات المطبقة على أي عينات جديدة. في حالة تحديد وراثة، يتم تطبيق فئة البيانات من السياق الأعلى. السياقات هي (من الأدنى إلى الأعلى): الكتل > وحدات النشاط > المقررات الدراسية > تصنيفات المقررات > المستخدم > الموقع.';
$string['categoryupdated'] = 'تم تحديث الفئة';
$string['close'] = 'أغلق';
$string['compliant'] = 'متوافقة';
$string['confirmapproval'] = 'هل تريد حقاً الموافقة على طلب البيانات هذا؟';
$string['confirmbulkapproval'] = 'هل تريد حقاً الموافقة بالجملة على طلبات البيانات المحددة؟';
$string['confirmbulkdenial'] = 'هل تريد حقاً الرفض بالجملة لطلبات البيانات المحددة؟';
$string['confirmcompletion'] = 'هل تريد حقاً تأشير استعلام المستخدم هذا على أنه مكتمل؟';
$string['confirmcontextdeletion'] = 'هل تريد حقاً تأكيد حذف السياقات المحددة؟ سيؤدي هذا أيضاً إلى حذف كل بيانات المستخدم في السياقات الفرعية العائدة لها.';
$string['confirmdenial'] = 'هل تريد حقاً رفض طلب البيانات هذا؟';
$string['confirmrequestresubmit'] = 'هل أنت متأكد من رغبتك في إلغاء الطلب {$a->type} الحالي العائد إلى {$a->username} وإعادة إرساله؟';
$string['contactdataprotectionofficer'] = 'الاتصال بمسؤول الخصوصية';
$string['contactdataprotectionofficer_desc'] = 'عند تمكينه، سيكون بإمكان المستخدمين الاتصال بمسؤول الخصوصية وتقديم طلبات بيانات عبر رابط في صفحة ملفهم الشخصي.';
$string['contactdpoviaprivacypolicy'] = 'يرجى الاتصال بمسؤول الخصوصية كما هو موضح في سياسة الخصوصية.';
$string['contextlevelname10'] = 'الموقع';
$string['contextlevelname30'] = 'المستخدمون';
$string['contextlevelname40'] = 'تصنيفات المقررات الدراسية';
$string['contextlevelname50'] = 'المقررات الدراسية';
$string['contextlevelname70'] = 'وحدات النشاط';
$string['contextlevelname80'] = 'الكُتل';
$string['contextpurposecategorysaved'] = 'تم حفظ الغرض والفئة.';
$string['createcategory'] = 'إنشاء فئة بيانات';
$string['createdeletedatarequest'] = 'إنشاء طلب حذف بيانات';
$string['createnewdatarequest'] = 'أنشئ طلب بيانات جديد';
$string['createpurpose'] = 'أنشئ غرض البيانات';
$string['creationauto'] = 'تلقائياً';
$string['creationmanual'] = 'يدوياً';
$string['datadeletion'] = 'حذف البيانات';
$string['datadeletionpagehelp'] = 'البيانات التي انتهت مدة الاحتفاظ بها مدرجة هنا. يرجى مراجعة وتأكيد حذف البيانات، والتي سيتم تنفيذها بعد ذلك من خلال المهمة المجدولة "حذف السياقات منتهية الصلاحية".';
$string['dataprivacy:downloadallrequests'] = 'تنزيل البيانات المصدّرة للجميع';
$string['dataprivacy:downloadownrequest'] = 'تنزيل البيانات المصدّرة الخاصة به';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'طلب حذف البيانات للقاصرين';
$string['dataprivacy:makedatarequestsforchildren'] = 'تقديم طلبات البيانات نيابة عن الأطفال';
$string['dataprivacy:managedataregistry'] = 'إدارة سجل البيانات';
$string['dataprivacy:managedatarequests'] = 'إدارة طلبات البيانات';
$string['dataprivacy:requestdelete'] = 'طلب حذف البيانات لنفسه';
$string['dataprivacy:requestdeleteforotheruser'] = 'طلب حذف البيانات نيابة عن مستخدم آخر';
$string['dataregistry'] = 'سجل البيانات';
$string['dataregistryinfo'] = 'يتيح سجل البيانات إمكانية تعيين الفئات (أنواع البيانات) والأغراض (أسباب معالجة البيانات) لجميع المحتويات في الموقع - من المستخدمين والمقررات الدراسية وصولاً إلى الأنشطة والكتل. لكل غرض، يمكن تعيين فترة استبقاء.  عند انتهاء فترة الاستبقاء، يتم وضع علامة على البيانات وإدراجها للحذف، في انتظار تأكيد المشرف.';
$string['datarequestcreatedforuser'] = 'تم إنشاء طلب بيانات لـ {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'تم إنشاؤه تلقائياً من مهمة مجدولة (مستخدم محذوف موجود مسبقاً).';
$string['datarequestcreatedupondelete'] = 'تم إنشاؤها تلقائياً عند حذف المستخدم.';
$string['datarequestemailsubject'] = 'طلب بيانات: {$a}';
$string['datarequests'] = 'طلبات البيانات';
$string['dataretentionexplanation'] = 'يوضح هذا الملخص الفئات والأغراض الافتراضية للاحتفاظ ببيانات المستخدم. قد يكون لبعض المناطق فئات وأغراض أكثر تحديداً من تلك المدرجة هنا.';
$string['dataretentionsummary'] = 'ملخص الاحتفاظ بالبيانات';
$string['datecomment'] = '[{$a->date}]:
 {$a->comment}';
$string['daterequested'] = 'التاريخ الذي تم فيه الطلب';
$string['daterequesteddetail'] = 'التاريخ الذي تم فيه الطلب:';
$string['defaultexpired'] = 'البيانات لجميع المستخدمين';
$string['defaultexpiredexcept'] = 'البيانات لجميع المستخدمين، باستثناء أولئك الذين لديهم أيّ من الأدوار التالية:<br>
{$a->unexpired}';
$string['defaultsinfo'] = 'يتم تطبيق الفئات والأغراض الافتراضية على كافة المثيلات المنشأة حديثاً والموجودة سلفاً حيثما لم يتم تحديد القيمة.';
$string['defaultssaved'] = 'تم حفظ الافتراضات';
$string['defaultswarninginfo'] = 'تحذير: قد يؤثر تغيير هذه الإعدادات الافتراضية على فترة الاحتفاظ بالمثيلات الموجودة.';
$string['defaultunexpired'] = 'فقط بيانات المستخدمين الذين يمتلكون أياً من الأدوار الآتية:<br>
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'فقط بيانات المستخدمين الذين يمتلكون أياً من الأدوار الآتية:
<br>
{$a->expired}
ما لم يمتلكون أيضاً أياً من الأدوار الآتية:
{$a->unexpired}';
$string['deletecategory'] = 'إحذف الفئة';
$string['deletecategorytext'] = 'هل أنت متأكد من رغبتك في حذف فئة "{$a}"؟';
$string['deletedefaults'] = 'إحذف الافتراضيات: {$a}';
$string['deletedefaultsconfirmation'] = 'هل أنت متأكد من رغبتك في حذف الفئة والغرض الافتراضي لوحدات {$a}؟';
$string['deleteexistingdeleteduserstask'] = 'إنشاء طلب حذف بيانات للمستخدمين المحذوفين، الموجودين سابقاً';
$string['deleteexpiredcontextstask'] = 'حذف السياقات منتهية الصلاحية';
$string['deleteexpireddatarequeststask'] = 'حذف ملفات تصدير طلب البيانات منتهية الصلاحية';
$string['deletemyaccount'] = 'إحذف حسابي';
$string['deletepurpose'] = 'إحذف الغرض';
$string['deletepurposetext'] = 'هل أنت متأكد من رغبتك في حذف الغرض \'{$a}\'؟';
$string['deny'] = 'رفض';
$string['denyrequest'] = 'رفض الطلب';
$string['deprecated'] = 'مهمل';
$string['deprecatedexplanation'] = 'تستعمل هذه الإضافة إصداراً قديماً من أحد واجهات الخصوصية وينبغي تحديثها.';
$string['download'] = 'تنزيل';
$string['downloadexpireduser'] = 'انتهت صلاحية التنزيل. أرسل طلباً جديداً إذا كنت ترغب في تصدير بياناتك الشخصية.';
$string['dporolemapping'] = 'تعيين دور مسؤول الخصوصية';
$string['dporolemapping_desc'] = 'يمكن لمسؤول الخصوصية إدارة طلبات البيانات. ينبغي السماح بإمكانية tool/dataprivacy:managedatarequests لدور معين ليتم إدراجه ضمن خيارات تعيين دور مسؤول الخصوصية.';
$string['duplicaterole'] = 'الدور المحدد سلفاً';
$string['editcategories'] = 'تحرير الفئات';
$string['editcategory'] = 'تحرير الفئة';
$string['editdefaults'] = 'تحرير الافتراضيات: {$a}';
$string['editmoduledefaults'] = 'تحرير افتراضيات الوحدة';
$string['editpurpose'] = 'تحرير الغرض';
$string['editpurposes'] = 'تحرير الأغراض';
$string['effectiveretentionperiodcourse'] = '{$a} (بعد تاريخ انتهاء المقرر الدراسي)';
$string['effectiveretentionperioduser'] = '{$a} (منذ آخر مرة قام فيها المستخدم بالوصول إلى الموقع)';
$string['emailsalutation'] = 'عزيزي {$a}،';
$string['errorcannotrequestdeleteforother'] = 'ليس لديك صلاحية إنشاء طلب حذف لهذا المستخدم.';
$string['errorcannotrequestdeleteforself'] = 'ليس لديك صلاحية إنشاء طلب حذف لنفسك.';
$string['errorcannotrequestexportforself'] = 'ليست لديك صلاحية إنشاء طلب تصدير لنفسك.';
$string['errorcontactdpodisabled'] = 'خيار الاتصال مع موظف الخصوصية مُعطَّل.';
$string['errorcontexthasunexpiredchildren'] = 'لا يزال للسياق "{$a}" سياقات فرعية لم تنته صلاحيتها بعد. لم يتم وضع علامة على أي سياقات للحذف.';
$string['errorinvalidrequestcomments'] = 'حقل التعليقات ينبغي أن يحتوي نصاً عادياً فقط.';
$string['errorinvalidrequestcreationmethod'] = 'طريقة إنشاء طلب غير صالحة!';
$string['errorinvalidrequeststatus'] = 'حالة طلب غير صالحة!';
$string['errorinvalidrequesttype'] = 'نوع طلب غير صالح!';
$string['errornocapabilitytorequestforothers'] = 'لا يملك المستخدم {$a->requestby} إمكانية تقديم طلب بيانات نيابة عن المستخدم {$a->userid}';
$string['errornoexpiredcontexts'] = 'لا توجد سياقات منتهية الصلاحية لمعالجتها';
$string['errorrequestalreadyexists'] = 'لا زال لديك طلب قيد التنفيذ.';
$string['errorrequestnotfound'] = 'طلب لم يعثر عليه';
$string['errorrequestnotwaitingforapproval'] = 'الطلب لا ينتظر الموافقة. إما أنه ليس جاهزاً بعد أو تم البت فيه.';
$string['errorsendingmessagetodpo'] = 'حدث خطأ أثناء محاولة إرسال رسالة إلى {$a}.';
$string['exceptionnotificationbody'] = 'حدث خطأ في أثناء استدعاء <b>{$a->fullmethodname}</b>.<br>هذا يعني أن الإضافة {$a->component}</b> لم تكمل معالجة البيانات. قد يتم نقل معلومات الخطأ الآتية إلى مطور الإضافة:</p><pre>{$a->message}<br>

{$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'وقع خطأ في أثناء معالجة بيانات الخصوصية';
$string['expandplugin'] = 'توسيع وطيّ الإضافة.';
$string['expandplugintype'] = 'توسيع وطيّ نوع االإضافة.';
$string['expiredretentionperiodtask'] = 'مدة الاستبقاء منتهية الصلاحية';
$string['expiredrolewithretention'] = '{$a->retention} (منتهية الصلاحية)';
$string['expiry'] = 'إنتهاء الصلاحية';
$string['explanationtitle'] = 'الأيقونات المستعملة في هذه الصفحة ومعانيها.';
$string['external'] = 'إضافي';
$string['externalexplanation'] = 'ملحق إضافي منصب في هذا الموقع.';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'مقرر صفحة الواجهة';
$string['gdpr_art_6_1_a_description'] = 'أعطى صاحب البيانات موافقته على معالجة بياناته الشخصية لغرض واحد أو أكثر من الأغراض المحددة';
$string['gdpr_art_6_1_a_name'] = 'موافقة (النظام الأوروبي العام لحماية البيانات المادة 6.1 (أ))';
$string['gdpr_art_6_1_b_description'] = 'المعالجة ضرورية لأداء العقد الذي يكون صاحب البيانات طرفاً فيه أوبصدد اتخاذ خطوات بناءً على طلب البيانات قبل الدخول في عقد';
$string['gdpr_art_6_1_b_name'] = 'العقد (النظام الأوروبي العام لحماية البيانات المادة 6.1 (ب))';
$string['gdpr_art_6_1_c_description'] = 'المعالجة ضرورية للامتثال بالتزام قانوني يخضع له جهاز التحكم';
$string['gdpr_art_6_1_c_name'] = 'الالتزام القانوني (النظام الأوروبي العام لحماية البيانات، المادة 6.1 (ج))';
$string['gdpr_art_6_1_d_description'] = 'المعالجة ضرورية لحماية المصالح الحيوية لصاحب البيانات أو لشخص طبيعي آخر';
$string['gdpr_art_6_1_d_name'] = 'المصالح الحيوية (النظام الأوروبي العام لحماية البيانات، المادة 6.1 (د))';
$string['gdpr_art_6_1_e_description'] = 'تعتبر المعالجة ضرورية لأداء مهمة يتم تنفيذها لتحقيق المصلحة العامة أو في ممارسة السلطة الرسمية المخولة بوحدة التحكم';
$string['gdpr_art_6_1_e_name'] = 'المهمة العامة (النظام الأوروبي العام لحماية البيانات، المادة 6.1 (هـ))';
$string['gdpr_art_6_1_f_description'] = 'تعتبر المعالجة ضرورية لأغراض المصالح المشروعة التي يتبعها المراقب أو من قبل طرف ثالث، باستثناء الحالات التي يتم فيها تجاوز هذه المصالح بسبب المصالح أو الحقوق والحريات الأساسية لصاحب البيانات والتي تتطلب حماية البيانات الشخصية، ولا سيما عندما يكون صاحب البيانات طفلاً';
$string['gdpr_art_6_1_f_name'] = 'المصالح المشروعة (النظام الأوروبي العام لحماية البيانات، المادة 6.1 (و))';
$string['gdpr_art_9_2_a_description'] = 'أعطى صاحب البيانات موافقة صريحة على معالجة تلك البيانات الشخصية لواحد أو أكثر من الأغراض المحددة، إلا إذا كان قانون الاتحاد أو الدولة العضو ينص على أنه لا يجوز رفع الحظر المشار إليه في الفقرة 1 من المادة 9 من النظام الأوروبي العام لحماية البيانات من قبل صاحب البيانات';
$string['gdpr_art_9_2_a_name'] = 'موافقة صريحة (النظام الأوروبي العام لحماية البيانات، المادة 9.2 (أ))';
$string['gdpr_art_9_2_b_description'] = 'تعتبر المعالجة ضرورية لغرض تنفيذ الالتزامات وممارسة حقوق محددة للمراقب أو صاحب البيانات في مجال العمل والضمان الاجتماعي وقانون الحماية الاجتماعية بقدر ما يسمح به قانون الاتحاد أو الدولة العضو أو اتفاق جماعي وفقاً لقانون الدولة العضو الذي يقدم من أجل ضمانات مناسبة للحقوق الأساسية ومصالح صاحب البيانات';
$string['gdpr_art_9_2_b_name'] = 'قانون العمل / الضمان الاجتماعي / الحماية (النظام الأوروبي العام لحماية البيانات، المادة 9.2 (ب))';
$string['gdpr_art_9_2_c_description'] = 'المعالجة ضرورية لحماية المصالح الحيوية لصاحب البيانات أو لشخص طبيعي آخر حيث يكون صاحب البيانات غير قادر جسدياً أو قانونياً على إعطاء الموافقة';
$string['gdpr_art_9_2_c_name'] = 'حماية المصالح الحيوية (المادة 9.2 (ج) من النظام الأوروبي العام لحماية البيانات)';
$string['gdpr_art_9_2_d_description'] = 'تتم المعالجة في سياق أنشطتها المشروعة مع ضمانات مناسبة من قبل مؤسسة أو جمعية أو أي جهة أخرى غير هادفة للربح لها هدف سياسي أو فلسفي أو ديني أو نقابي بشرط أن تكون المعالجة مرتبطة فقط بالأعضاء أو الأعضاء السابقين في الجهة أو الأشخاص الذين لديهم اتصال منتظم بها فيما يتعلق بمقاصدها وأن البيانات الشخصية لا يتم الكشف عنها خارج تلك الجهة دون موافقة أصحاب البيانات';
$string['gdpr_art_9_2_d_name'] = 'الأنشطة المشروعة المتعلقة بأعضاء / جهات اتصال وثيقة لمؤسسة أو جمعية أو جهة أخرى لا تهدف للربح (النظام الأوروبي العام لحماية البيانات المادة 9.2 (د))';
$string['gdpr_art_9_2_e_description'] = 'المعالجة المتعلقة بالبيانات الشخصية التي يتم نشرها بوضوح بواسطة صاحب البيانات';
$string['gdpr_art_9_2_e_name'] = 'البيانات التي يتم نشرها من قبل صاحب البيانات (النظام الأوروبي العام لحماية البيانات المادة 9.2 (هـ))';
$string['gdpr_art_9_2_f_description'] = 'تعتبر المعالجة ضرورية لإنشاء أو ممارسة أو الدفاع عن دعاوى قانونية أو عندما تتصرف المحاكم بصفتها القضائية';
$string['gdpr_art_9_2_f_name'] = 'الدعاوى القانونية والإجراءات القضائية (النظام الأوروبي العام لحماية البيانات المادة 9.2 (و))';
$string['gdpr_art_9_2_g_description'] = 'تعتبر المعالجة ضرورية لأسباب تتعلق بالمصلحة العامة الجوهرية، على أساس قانون الاتحاد أو الدولة العضو الذي يتناسب مع الهدف المنشود، واحترام جوهر الحق في حماية البيانات وتوفير تدابير مناسبة ومحددة لحماية الحقوق الأساسية ومصالح صاحب البيانات';
$string['gdpr_art_9_2_g_name'] = 'المصلحة العامة الجوهرية (النظام الأوروبي العام لحماية البيانات المادة 9.2 (ز))';
$string['gdpr_art_9_2_h_description'] = 'المعالجة ضرورية لأغراض الطب الوقائي أو المهني، لتقييم قدرة العامل على العمل، أو التشخيص الطبي، أو توفير الرعاية الصحية أو الاجتماعية أو العلاج أو إدارة نظم وخدمات الرعاية الصحية أو الاجتماعية على أساس قانون الاتحاد أو الدولة العضو أو بموجب عقد مع أخصائي صحي ويخضع للشروط والضمانات المشار إليها في الفقرة 3 من النظام الأوروبي العام لحماية البيانات المادة 9';
$string['gdpr_art_9_2_h_name'] = 'أغراض طبية (النظام الأوروبي العام لحماية البيانات المادة 9.2 (ح))';
$string['gdpr_art_9_2_i_description'] = 'المعالجة ضرورية لأسباب تتعلق بالمصلحة العامة في مجال الصحة العامة، مثل الحماية من التهديدات الخطيرة عبر الحدود للصحة أو ضمان معايير عالية من الجودة والسلامة للرعاية الصحية والمنتجات الطبية أو الأجهزة الطبية، على أساس قانون الاتحاد أو الدولة العضو الذي ينص على تدابير مناسبة ومحددة لحماية حقوق وحريات صاحب البيانات، ولا سيما السرية المهنية';
$string['gdpr_art_9_2_i_name'] = 'الصحة العامة (النظام الأوروبي العام لحماية البيانات المادة 9.2 (1))';
$string['gdpr_art_9_2_j_description'] = 'المعالجة ضرورية لأغراض الأرشفة بما يحقق المصلحة العامة أو لأغراض البحث العلمي أو التاريخي أو لأغراض إحصائية وفقاً للمادة 89 (1) بناءً على قانون الاتحاد أو الدولة العضو والتي يجب أن تكون متناسبة مع الهدف المنشود، واحترام جوهر الحق في حماية البيانات وتوفير تدابير مناسبة ومحددة لحماية الحقوق الأساسية ومصالح صاحب البيانات';
$string['gdpr_art_9_2_j_name'] = 'المصلحة العامة، أو البحوث العلمية / التاريخية / الإحصائية (النظام الأوروبي العام لحماية البيانات المادة 9.2 (ي))';
$string['hide'] = 'طي الكل';
$string['httpwarning'] = 'لا يجوز تشفير أي بيانات تم تنزيلها من هذا الموقع. يرجى الاتصال بمسؤول النظام الخاص بك وأطلب منه تنصيب SSL في هذا الموقع.';
$string['inherit'] = 'وراثة';
$string['lawfulbases'] = 'القواعد القانونية';
$string['lawfulbases_help'] = 'حدد خياراً واحداً على الأقل سيكون بمثابة الأساس القانوني لمعالجة البيانات الشخصية. للحصول على تفاصيل حول هذه القواعد القانونية، أنظر لطفاً <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">النظام الأوروبي العام لحماية البيانات المادة 6.1</a>';
$string['markcomplete'] = 'قم بتأشيره على أنه مكتمل';
$string['markedcomplete'] = 'تم وضع علامة على استفسارك على أنه مكتمل بواسطة مسؤول الخصوصية.';
$string['message'] = 'الرسالة';
$string['messagelabel'] = 'الرسالة:';
$string['messageprovider:contactdataprotectionofficer'] = 'طلبات البيانات';
$string['messageprovider:datarequestprocessingresults'] = 'نتائج معالجة طلب البيانات';
$string['messageprovider:notifyexceptions'] = 'إشعارات استثناءات طلبات البيانات';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'طلبات بياناتي الشخصية';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} أطفال';
$string['newrequest'] = 'طلب جديد';
$string['noactivitiestoload'] = 'لا أنشطة';
$string['noassignedroles'] = 'لا أدوار معينة في هذا السياق';
$string['noblockstoload'] = 'لا كُتل';
$string['nocategories'] = 'لا فئات حتى الآن';
$string['nocoursestoload'] = 'لا نشاطات';
$string['nodatarequests'] = 'لا طلبات بيانات';
$string['nodatarequestsmatchingfilter'] = 'لا توجد طلبات بيانات مطابقة للمرشح المحدد';
$string['noexpiredcontexts'] = 'لا يحتوي مستوى السياق هذا على بيانات انتهت فترة الاحتفاظ بها.';
$string['nopersonaldatarequests'] = 'ليس لديك أي طلبات بيانات شخصية';
$string['nopurposes'] = 'لا توجد أغراض حتى الآن';
$string['nosubjectaccessrequests'] = 'لا توجد طلبات بيانات تحتاج إلى اتخاذ إجراء بشأنها';
$string['nosystemdefaults'] = 'لم يتم تحديد الغرض والفئة للموقع بعد.';
$string['notset'] = 'غير مُعد (استعمل القيمة الافتراضية)';
$string['notyetexpired'] = '{$a} (لم تنته صلاحيتها بعد)';
$string['overrideinstances'] = 'إعادة تعيين العيِّنات باستعمال القيم المخصصة';
$string['pluginname'] = 'خصوصية البيانات';
$string['pluginname_help'] = 'ملحق خصوصية البيانات';
$string['pluginregistry'] = 'سجل خصوصية الإضافة';
$string['pluginregistrytitle'] = 'سجل الامتثال للخصوصية للملحق';
$string['privacy'] = 'الخصوصية';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'المرشحات المطبقة حالياً على صفحة طلبات البيانات';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'عدد طلبات البيانات التي يفضل المستخدم رؤيتها على صفحة واحدة';
$string['privacy:metadata:request'] = 'المعلومات الواردة من طلبات البيانات الشخصية (طلبات الوصول وطلبات الحذف) المقدمة لهذا الموقع';
$string['privacy:metadata:request:comments'] = 'أي تعليقات للمستخدم مرفقة بالطلب';
$string['privacy:metadata:request:dpocomment'] = 'أي تعليقات من قبل مسؤول خصوصية الموقع ذات العلاقة بالطلب';
$string['privacy:metadata:request:requestedby'] = 'مُعرَّف المستخدم المقدم للطلب، إذا تم تقديمه نيابة عن مستخدم آخر';
$string['privacy:metadata:request:timecreated'] = 'الطابع الزمني الذي يحدد وقت تقديم الطلب من قبل المستخدم';
$string['privacy:metadata:request:userid'] = 'مُعرَّف المستخدم الذي يخصه الطلب';
$string['privacyofficeronly'] = 'المستخدمون الذين تم تعيينهم بدور مسؤول الخصوصية ({$a}) لهم حق الوصول إلى هذا المحتوى';
$string['privacyrequestexpiry'] = 'انتهاء صلاحية طلب البيانات';
$string['privacyrequestexpiry_desc'] = 'الوقت الذي يتاح فيه تنزيل البيانات الموافَق على طلباتها قبل انتهاء صلاحيتها. إذا تم ضبطه على الصفر، فلا يوجد حد زمني.';
$string['protected'] = 'محمي';
$string['protectedlabel'] = 'الاحتفاظ بهذه البيانات له أولوية قانونية أكبر من طلب المستخدم أن يتم حذفها. لن يتم حذف هذه البيانات إلا بعد انتهاء فترة الاحتفاظ.';
$string['purpose'] = 'الغرض';
$string['purpose_help'] = 'يصف الغرض سبب معالجة البيانات. يمكن إضافة غرض جديد، أو في حالة اختيار وراثة، يتم تطبيق الغرض من السياق الأعلى. السياقات هي (من الأدنى إلى الأعلى): الكتل > وحدات النشاط > المقررات الدراسية > تصنيفات المقررات > المستخدم > الموقع.';
$string['purposecreated'] = 'تم إنشاء الغرض';
$string['purposedefault'] = 'الغرض الافتراضي';
$string['purposedefault_help'] = 'الغرض الافتراضي هو الغرض الذي يتم تطبيقه على أي عينات جديدة. إذا تم اختيار وراثة، فسيتم تطبيق الغرض من السياق الأعلى. السياقات هي (من الأدنى إلى الأعلى): الكتل > وحدات النشاط > المقررات الدراسية > تصنيفات المقررات > المستخدم > الموقع.';
$string['purposeoverview'] = 'يصف الغرض سياسة الاستخدام والاحتفاظ للبيانات المخزنة. أساسيات الخزن والاحتفاظ بهذه البيانات موضحة أيضاً في الغرض.';
$string['purposes'] = 'الأغراض';
$string['purposeslist'] = 'قائمة بأغراض البيانات';
$string['purposeupdated'] = 'تم تحديث الغرض';
$string['replyto'] = 'الرد على';
$string['requestactions'] = 'الإجراءات';
$string['requestapproved'] = 'تمت الموافقة على الطلب';
$string['requestby'] = 'مقدم من قبل';
$string['requestbydetail'] = 'مقدم من قبل:';
$string['requestcomments'] = 'التعليقات';
$string['requestcomments_help'] = 'هذا المربع يمكنك من إدخال أي تفاصيل إضافية بشأن طلب البيانات الخاص بك.';
$string['requestcreation'] = 'إنشاء';
$string['requestdenied'] = 'تم رفض الطلب';
$string['requestemailintro'] = 'لقد تلقيت طلباً للبيانات:';
$string['requestfor'] = 'المستخدم';
$string['requestmarkedcomplete'] = 'تم تأشير الطلب على أنه مكتمل';
$string['requestorigin'] = 'الموقع';
$string['requestsapproved'] = 'تمت الموافقة على الطلبات';
$string['requestsdenied'] = 'تم رفض الطلبات';
$string['requeststatus'] = 'الحالة';
$string['requestsubmitted'] = 'تم إرسال طلبك إلى مسؤول الخصوصية';
$string['requesttype'] = 'النوع';
$string['requesttype_help'] = 'حدد سبب اتصالك بمسؤول الخصوصية. كن على دراية بأن حذف كل بياناتك الشخصية سيؤدي إلى تعذر دخولك إلى الموقع.';
$string['requesttypedelete'] = 'حذف كل بياناتي الشخصية';
$string['requesttypedeleteshort'] = 'حذف';
$string['requesttypeexport'] = 'تصدير كل بياناتي الشخصية';
$string['requesttypeexportshort'] = 'تصدير';
$string['requesttypeothers'] = 'استفسار عام';
$string['requesttypeothersshort'] = 'مراسلة';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'إعتبار المقررات الدراسية التي ليس لها تاريخ انتهاء بأنها لا تزال نشطة';
$string['requireallenddatesforuserdeletion_desc'] = 'عند حساب إنتهاء صلاحية المستخدم، تتم مراعاة عدة عوامل:

* تتم مقارنة وقت آخر تسجيل دخول للمستخدم مع فترة الاحتفاظ للمستخدمين؛ و
* ما إذا كان المستخدم منضم فعلياً في أيّ مقرر دراسي.

عند التحقق من الانضمام النشط في المقرر الدراسي، إذا لم يكن للمقرر تاريخ انتهاء، فسيتم استعمال هذا الإعداد لتحديد ما إذا كان ذلك المقرر نشطاً أم لا.

إذا لم يكن للمقرر تاريخ انتهاء، وتم تمكين هذا الإعداد، فلن يكون بالإمكان حذف المستخدم.';
$string['requiresattention'] = 'يتطلب الاهتمام.';
$string['requiresattentionexplanation'] = 'لا تطبق هذه الإضافة واجهة برمجة التطبيق للخصوصية في مودل. إذا كانت هذه الإضافة خازناً لأيّ بيانات شخصية، فلن يتم تصديرها أو حذفها من خلال نظام الخصوصية في مودل.';
$string['resubmitrequest'] = 'إعادة إرسال طلب {$a->type} لـ {$a->username}';
$string['resubmitrequestasnew'] = 'إعادة التقديم كطلب جديد';
$string['resubmittedrequest'] = 'تم إلغاء طلب {$a->type} الحالي لـ {$a->username} وإعادة إرساله';
$string['resultdeleted'] = 'قد طلبت مؤخراً أن يتم حذف حسابك وبياناتك الشخصية في {$a}. اكتملت هذه العملية ولن تتمكن بعدها من تسجيل الدخول.';
$string['resultdownloadready'] = 'نسختك من بياناتك الشخصية في {$a} التي طلبتها مؤخراً متاحة الآن للتنزيل عبر الرابط الآتي.';
$string['retentionperiod'] = 'فترة الاستبقاء';
$string['retentionperiod_help'] = 'تحدد فترة الاستبقاء طول الفترة الزمنية التي ينبغي بها الاحتفاظ بالبيانات. عند انتهاء فترة الاستبقاء، يتم وضع علامة على البيانات وإدراجها للحذف، في انتظار تأكيد المسؤول.';
$string['retentionperiodnotdefined'] = 'لم يتم تحديد فترة الاستبقاء';
$string['retentionperiodzero'] = 'لا توجد فترة للاستبقاء';
$string['reviewdata'] = 'مراجعة البيانات';
$string['role'] = 'الدور';
$string['role_help'] = 'الدور الذي يجب أن ينطبق عليه التجاوز.';
$string['roleoverride'] = 'تجاوز الدور';
$string['roleoverrideoverview'] = 'يمكن تجاوز سياسة الاستبقاء الافتراضية لأدوار مستخدم محددة ، مما يسمح لك بتحديد سياسة الاحتفاظ لأطول أو أقصر. تنتهي صلاحية المستخدم فقط عندما تنتهي صلاحية جميع أدواره.';
$string['roleoverrides'] = 'تجاوزات الدور';
$string['selectbulkaction'] = 'يرجى اختيار جملة إجراءات .';
$string['selectdatarequests'] = 'يرجى اختيار طلبات البيانات.';
$string['selectuserdatarequest'] = 'حدد طلب بيانات {$a->username} من نوع {$a->requesttype}.';
$string['send'] = 'أرسل';
$string['sensitivedatareasons'] = 'أسباب معالجة البيانات الشخصية الحساسة';
$string['sensitivedatareasons_help'] = 'حدد واحدًا أو أكثر من الأسباب القابلة للتطبيق التي تستثني حظر معالجة البيانات الشخصية الحساسة المرتبطة بهذا الغرض. لمزيد من المعلومات ، يرجى الاطلاع على النظام الأوروبي العام لحماية البيانات المادة . 9.2';
$string['setdefaults'] = 'ضبط الافتراضات';
$string['showdataretentionsummary'] = 'عرض ملخص الاحتفاظ بالبيانات';
$string['showdataretentionsummary_desc'] = 'في حالة التمكين ، يتم عرض رابط لملخص الاحتفاظ بالبيانات في تذييل الصفحة وفي ملفات تعريف المستخدمين.';
$string['statusapproved'] = 'موافق عليه';
$string['statusawaitingapproval'] = 'ينتظر الموافقة';
$string['statuscancelled'] = 'ملغى';
$string['statuscomplete'] = 'مكتمل';
$string['statusdeleted'] = 'محذوف';
$string['statusdetail'] = 'الحالة:';
$string['statusexpired'] = 'منتهية الصلاحية';
$string['statuspending'] = 'قيد الانتظار';
$string['statusprocessing'] = 'قيد المعالجة';
$string['statusready'] = 'جاهز للتنزيل';
$string['statusrejected'] = 'مرفوض';
$string['subjectscope'] = 'نطاق الموضوع';
$string['subjectscope_help'] = 'يسرد نطاق الموضوع الأدوار التي يمكن تعيينها في هذا السياق.';
$string['summary'] = 'ملخص تهيئة السجل';
$string['systemconfignotsetwarning'] = 'لم يتم تحديد غرض وفئة الموقع. عندما لا يتم تعريف هذه ، سيتم إزالة جميع البيانات عند معالجة طلبات الحذف.';
$string['tobedeleted'] = 'البيانات المراد حذفها';
$string['unexpiredrolewithretention'] = '{$a->retention} (غير منتهية الصلاحية)';
$string['user'] = 'مستخدم';
$string['userlistexplanation'] = 'تحتوي هذه الإضافة على المزود الأساسي، ولكن يجب أيضاً تطبيق مزود قائمة المستخدمين للحصول على الدعم الكامل لوظيفة الخصوصية.';
$string['userlistnoncompliant'] = 'قائمة موفر المستخدم مفقودة';
$string['viewrequest'] = 'شاهد الطلب';
$string['visible'] = 'توسيع الكل';
