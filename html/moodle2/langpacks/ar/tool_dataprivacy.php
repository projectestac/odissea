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
 * Strings for component 'tool_dataprivacy', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_dataprivacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'الأنشطة والمصادر';
$string['addcategory'] = 'اضف فئة';
$string['addnewdefaults'] = 'إضافة وحدة افتراضية جديدة';
$string['addpurpose'] = 'اضف غرضا';
$string['addroleoverride'] = 'تجاوز إضافة دور';
$string['approve'] = 'وافق';
$string['approverequest'] = 'وافق على الطلب';
$string['automaticdeletionrequests'] = 'إنشاء طلبات حذف البيانات التلقائي';
$string['automaticdeletionrequests_desc'] = 'في حالة التمكين ، سيتم إنشاء طلب حذف البيانات تلقائيًا لأي حسابات مستخدمين يتم حذفها يدويًا.';
$string['bulkapproverequests'] = 'الموافقة على الطلبات';
$string['bulkdenyrequests'] = 'رفض الطلبات';
$string['cachedef_contextlevel'] = 'مستويات السياق الغرض والفئة';
$string['cachedef_purpose'] = 'أغراض البيانات';
$string['cachedef_purpose_overrides'] = 'الغرض من التخطيات في أداة خصوصية البيانات';
$string['cancelrequest'] = 'إلغاء الطلب';
$string['cancelrequestconfirmation'] = 'هل تريد حقًا إلغاء طلب البيانات هذا؟';
$string['cannotreset'] = 'غير قادر على إعادة تعيين هذا الطلب. يمكن فقط إعادة تعيين الطلبات المرفوضة.';
$string['categories'] = 'فئات';
$string['categorieslist'] = 'قائمة فئات البيانات';
$string['category'] = 'فئة';
$string['categorycreated'] = 'تم انشاء الفئة';
$string['categorydefault'] = 'الفئة الافتراضية';
$string['categorydefault_help'] = 'الفئة الافتراضية هي فئة البيانات المطبقة على أي مثيلات جديدة. في حالة تحديد Inherit ، يتم تطبيق فئة البيانات من سياق أعلى. السياقات هي (من الأقل إلى الأعلى): الكتل> وحدات النشاط> الدورات> فئات الدورة التدريبية> المستخدم> الموقع.';
$string['category_help'] = 'تصف فئة في سجل البيانات نوع البيانات. يمكن إضافة فئة جديدة ، أو في حالة تحديد Inherit ، يتم تطبيق فئة البيانات من سياق أعلى. السياقات هي (من الأقل إلى الأعلى): الكتل> وحدات النشاط> الدورات> فئات المقررات> الموقع.';
$string['categoryupdated'] = 'تم تحديث الفئة';
$string['close'] = 'اغلق';
$string['compliant'] = 'متوافقة';
$string['confirmapproval'] = 'هل تريد حقًا الموافقة على طلب البيانات هذا؟';
$string['confirmbulkapproval'] = 'هل تريد حقًا الموافقة على طلبات البيانات المحددة؟';
$string['confirmbulkdenial'] = 'هل تريد حقًا رفض طلبات البيانات المحددة؟';
$string['confirmcompletion'] = 'هل تريد حقًا تحديد استعلام المستخدم هذا على أنه مكتمل؟';
$string['confirmcontextdeletion'] = 'هل تريد حقًا تأكيد حذف السياقات المحددة؟ سيؤدي هذا أيضًا إلى حذف جميع بيانات المستخدم للسياقات الفرعية لكل منها.';
$string['confirmdenial'] = 'هل تريد حقًا رفض طلب البيانات هذا؟';
$string['confirmrequestresubmit'] = 'هل أنت متأكد من رغبتك في إلغاء طلب {$a->type} الحالي لـ {$a->username}  وإعادة إرساله؟';
$string['contactdataprotectionofficer'] = 'الاتصال بموظف حماية البيانات';
$string['contactdataprotectionofficer_desc'] = 'تفعيل هذه الميزة سيوفر رابطًا للمستخدمين للاتصال بمسؤول حماية بيانات الموقع من داخل الموقع. سيتم عرض هذا الرابط على صفحتهم الشخصية وعلى صفحة سياسة خصوصية الموقع أيضًا. يقود الرابط إلى نموذج يسمح للمستخدم أن يقدّم طلب بيانات إلى مسؤول حماية البيانات.';
$string['contactdpoviaprivacypolicy'] = 'يرجى الاتصال بمسؤول حماية البيانات في الموقع كما هو موضح في سياسة الخصوصية';
$string['contextlevelname10'] = 'موقع';
$string['contextlevelname30'] = 'مستخدم';
$string['contextlevelname40'] = 'فئات المساق';
$string['contextlevelname50'] = 'مساقات';
$string['contextlevelname70'] = 'وحدات النشاط';
$string['contextlevelname80'] = 'منصات';
$string['contextpurposecategorysaved'] = 'الغرض والفئة المحفوظة.';
$string['createcategory'] = 'إنشاء فئة البيانات';
$string['createnewdatarequest'] = 'إنشاء طلب بيانات جديد';
$string['createpurpose'] = 'إنشاء غرض البيانات';
$string['creationauto'] = 'تلقائياً';
$string['creationmanual'] = 'يدوياً';
$string['datadeletion'] = 'حذف البيانات';
$string['datadeletionpagehelp'] = 'البيانات التي انتهت مدة الاحتفاظ بها مدرجة هنا. يرجى مراجعة و تأكيد حذف البيانات ، و التي سيتم تنفيذها بعد ذلك من خلال المهمة المجدولة "حذف السياقات منتهية الصلاحية".';
$string['dataprivacy:downloadallrequests'] = 'قم بتنزيل البيانات المصدّرة للجميع';
$string['dataprivacy:downloadownrequest'] = 'قم بتنزيل البيانات المصدّرة الخاصة بك';
$string['dataprivacy:makedatarequestsforchildren'] = 'تقديم طلبات البيانات للأطفال';
$string['dataprivacy:managedataregistry'] = 'إدارة سجل البيانات';
$string['dataprivacy:managedatarequests'] = 'إدارة طلبات البيانات';
$string['dataregistry'] = 'سجل البيانات';
$string['dataregistryinfo'] = 'يتيح سجل البيانات إمكانية تعيين الفئات (أنواع البيانات) و الأغراض (أسباب معالجة البيانات) لجميع المحتويات على الموقع - من المستخدمين و المقررات وصولاً إلى الأنشطة و الكتل. لكل غرض ، قد يتم تعيين فترة استبقاء.
 عند انتهاء فترة الاستبقاء ، يتم وضع علامة على البيانات و سردها للحذف ، في انتظار تأكيد المسؤول.';
$string['datarequestcreatedforuser'] = 'تم إنشاء طلب بيانات لـ {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'تم إنشاؤه تلقائيًا من مهمة مجدولة (مستخدم محذوف موجود مسبقًا).';
$string['datarequestcreatedupondelete'] = 'تم إنشاؤها تلقائيًا عند حذف المستخدم.';
$string['datarequestemailsubject'] = 'طلب بيانات: {$a}';
$string['datarequests'] = 'طلبات البيانات';
$string['dataretentionexplanation'] = 'يوضح هذا الملخص الفئات و الأغراض الافتراضية للاحتفاظ ببيانات المستخدم. قد يكون لبعض المناطق فئات و أغراض محددة أكثر من تلك المدرجة هنا.';
$string['dataretentionsummary'] = 'ملخص الاحتفاظ بالبيانات';
$string['datecomment'] = '[{$a->date}]: {$a->comment}';
$string['daterequested'] = 'التاريخ الذي تم فيه الطلب';
$string['daterequesteddetail'] = 'التاريخ الذي تم فيه الطلب:';
$string['defaultexpired'] = 'البيانات لجميع المستخدمين';
$string['defaultexpiredexcept'] = 'البيانات لجميع المستخدمين ، باستثناء أولئك الذين لديهم أيّ من الأدوار التالية:
{$a->unexpired}';
$string['defaultsinfo'] = 'يتم تطبيق الفئات والأغراض الافتراضية على كافة المثيلات المنشأة حديثًا.';
$string['defaultssaved'] = 'تم حفظ الافتراضات';
$string['defaultswarninginfo'] = 'تحذير: قد يؤثر تغيير هذه الإعدادات الافتراضية على فترة الاحتفاظ بالمثيلات الموجودة.';
$string['defaultunexpired'] = 'فقط بيانات المستخدمين الذين يحتفظون بأي من الأدوار التالية:
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'فقط بيانات المستخدمين الذين يشغلون أيًا من الأدوار التالية:
{$a->expired} ما لم يشغلوا أيضًا أيًا من الأدوار التالية:
{$a->unexpired}';
$string['deletecategory'] = 'احذف "{$a}" فئة';
$string['deletecategorytext'] = 'هل أنت متأكد من أنك تريد حذف "{$a}" فئة ؟';
$string['deletedefaults'] = 'حذف الإعدادات الافتراضية: {$a}';
$string['deletedefaultsconfirmation'] = 'هل تريد بالتأكيد حذف الفئة الافتراضية و الغرض من الوحدات {$a}؟';
$string['deleteexistingdeleteduserstask'] = 'إنشاء طلب حذف بيانات للمستخدمين المحذوفين مسبقًا';
$string['deleteexpiredcontextstask'] = 'حذف السياقات منتهية الصلاحية';
$string['deleteexpireddatarequeststask'] = 'احذف بيانات تصدير طلب انتهاء الصلاحية';
$string['deletemyaccount'] = 'احذف حسابي';
$string['deletepurpose'] = 'احذف "{$a}" غرضا';
$string['deletepurposetext'] = 'هل أنت متأكد من أنك تريد حذف "{$ a}" غرضا؟';
$string['deny'] = 'رفض';
$string['denyrequest'] = 'رفض الطلب';
$string['deprecated'] = 'إهمال';
$string['deprecatedexplanation'] = 'يستخدم هذا البرنامج المساعد إصدارًا قديمًا من واجهات الخصوصية و يجب تحديثه.';
$string['download'] = 'تحميل';
$string['downloadexpireduser'] = 'انتهت صلاحية التنزيل. أرسل طلبًا جديدًا إذا كنت ترغب في تصدير بياناتك الشخصية.';
$string['dporolemapping'] = 'تخطيط دور مسؤول حماية البيانات';
$string['dporolemapping_desc'] = 'اختر دورا واحدًا أو أكثر من الأدوار التي يتم ربطها بدور مسؤول حماية البيانات. سيتمكن المستخدمون الذين لديهم هذه الأدوار أن يديروا طلبات البيانات. وهذا يتطلب أن يكون الدور (الأدوار) المختارين لديهم قدرة: \'tool/dataprivacy:managedatarequests\\';
$string['duplicaterole'] = 'الدور المحدد بالفعل';
$string['editcategories'] = 'تدقيق الفئات';
$string['editcategory'] = 'تدقيق الفئة';
$string['editdefaults'] = 'تحرير الإعدادات الافتراضية: {$a}';
$string['editmoduledefaults'] = 'تحرير الإعدادات الافتراضية للوحدة';
$string['editpurpose'] = 'تدقيق الغرض';
$string['editpurposes'] = 'تدقيق الأغراض';
$string['effectiveretentionperiodcourse'] = '{$a} (بعد تاريخ انتهاء الدورة)';
$string['effectiveretentionperioduser'] = '{$a} (منذ آخر مرة قام فيها المستخدم بالوصول إلى الموقع)';
$string['emailsalutation'] = 'عزيزي {$a},';
$string['errorcontexthasunexpiredchildren'] = 'لا يزال للسياق "{$a}" سياقات فرعية لم تنته بعد. لم يتم وضع علامة على سياقات للحذف.';
$string['errorinvalidrequestcreationmethod'] = 'طريقة إنشاء طلب غير صالحة!';
$string['errorinvalidrequeststatus'] = 'حالة طلب غير صالحة!';
$string['errorinvalidrequesttype'] = 'نوع طلب غير صالح!';
$string['errornocapabilitytorequestforothers'] = 'لا يملك المستخدم {$a->requestby} القدرة على تقديم طلب بيانات نيابة عن المستخدم {$a->userid}';
$string['errornoexpiredcontexts'] = 'لا توجد سياقات منتهية الصلاحية';
$string['errorrequestalreadyexists'] = 'لازال لديك طلب تحت المراجعة';
$string['errorrequestnotfound'] = 'طلب لم يعثر عليه';
$string['errorrequestnotwaitingforapproval'] = 'الطلب لا ينتظر الموافقة. إما أنه ليس جاهزا بعد أو أنه تم البت فيه.';
$string['errorsendingmessagetodpo'] = 'حدث خطأ أثناء محاولة إرسال رسالة إلى {$a}.';
$string['exceptionnotificationbody'] = 'حدث استثناء أثناء استدعاء {$a->fullmethodname} .
هذا يعني أن المكوّن الإضافي {$a->component} لم يكمل معالجة البيانات. قد يتم نقل معلومات الاستثناء التالية إلى مطور البرنامج المساعد:

{$a->message}


{$a->backtrace}';
$string['exceptionnotificationsubject'] = 'حدث استثناء أثناء معالجة بيانات الخصوصية';
$string['expandplugin'] = 'توسيع و طيّ البرنامج المساعد.';
$string['expandplugintype'] = 'توسيع و طيّ نوع البرنامج المساعد.';
$string['expiredretentionperiodtask'] = 'انتهت مدة الاستبقاء';
$string['expiredrolewithretention'] = '{$a->retention} (منتهي الصلاحية)';
$string['expiry'] = 'انقضاء';
$string['explanationtitle'] = 'الرموز المستخدمة في هذه الصفحة و ماذا تعني.';
$string['external'] = 'إضافي';
$string['externalexplanation'] = 'ملحق إضافي مثبت على هذا الموقع.';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'مواد الصفحة الأولى';
$string['gdpr_art_6_1_a_description'] = 'أعطى موضوع البيانات موافقته على معالجة بياناته الشخصية لغرض واحد أو أكثر من الأغراض المحددة';
$string['gdpr_art_6_1_a_name'] = 'موافقة (النظام الأوروبي العام لحماية البيانات المادة 6.1 (أ))';
$string['gdpr_art_6_1_b_description'] = 'المعالجة ضرورية لأداء العقد الذي يكون موضوع البيانات طرفًا فيه أو من أجل اتخاذ خطوات بناءً على طلب البيانات قبل الدخول في عقد';
$string['gdpr_art_6_1_b_name'] = 'العقد (النظام الأوروبي العام لحماية البيانات المادة 6.1 (ب))';
$string['gdpr_art_6_1_c_description'] = 'المعالجة ضرورية للامتثال لالتزام قانوني يخضع له جهاز التحكم';
$string['gdpr_art_6_1_c_name'] = 'الالتزام القانوني (النظام الأوروبي العام لحماية البياناتالمادة 6.1 (ج))';
$string['gdpr_art_6_1_d_description'] = 'المعالجة ضرورية لحماية المصالح الحيوية لموضوع البيانات أو لشخص طبيعي آخر';
$string['gdpr_art_6_1_d_name'] = 'المصالح الحيوية (النظام الأوروبي العام لحماية البياناتالمادة 6.1 (د))';
$string['gdpr_art_6_1_e_description'] = 'تعتبر المعالجة ضرورية لأداء مهمة يتم تنفيذها لتحقيق المصلحة العامة أو في ممارسة السلطة الرسمية المخولة بوحدة التحكم';
$string['gdpr_art_6_1_e_name'] = 'المهمة العامة (النظام الأوروبي العام لحماية البياناتالمادة 6.1 (هـ))';
$string['gdpr_art_6_1_f_description'] = 'تعتبر المعالجة ضرورية لأغراض المصالح المشروعة التي يتبعها المراقب أو من قبل طرف ثالث ، باستثناء الحالات التي يتم فيها تجاوز هذه المصالح بسبب المصالح أو الحقوق و الحريات الأساسية لموضوع البيانات التي تتطلب حماية البيانات الشخصية ، و لا سيما عندما تكون البيانات عن موضوع طفل';
$string['gdpr_art_6_1_f_name'] = 'المصالح المشروعة (النظام الأوروبي العام لحماية البياناتالمادة 6.1 (و))';
$string['gdpr_art_9_2_a_description'] = 'أعطى موضوع البيانات موافقة صريحة على معالجة تلك البيانات الشخصية لواحد أو أكثر من الأغراض المحددة ، إلا إذا كان قانون الاتحاد أو الدولة العضو ينص على أنه لا يجوز رفع الحظر المشار إليه في الفقرة 1 من المادة 9 من GDPR  بواسطة موضوع البيانات';
$string['gdpr_art_9_2_a_name'] = 'موافقة صريحة (النظام الأوروبي العام لحماية البياناتالمادة 9-2 (أ))';
$string['gdpr_art_9_2_b_description'] = 'تعتبر المعالجة ضرورية لغرض تنفيذ الالتزامات وممارسة حقوق محددة للمراقب أو للبيانات موضوع في مجال العمل والضمان الاجتماعي وقانون الحماية الاجتماعية بقدر ما يسمح به قانون الاتحاد أو الدولة العضو أو اتفاق جماعي وفقًا لقانون الدولة العضو ينص على ضمانات مناسبة للحقوق الأساسية و مصالح موضوع البيانات';
$string['gdpr_art_9_2_b_name'] = 'قانون العمل / الضمان الاجتماعي / الحماية (النظام الأوروبي العام لحماية البياناتالمادة 9.2 (ب))';
$string['gdpr_art_9_2_c_description'] = 'المعالجة ضرورية لحماية المصالح الحيوية لموضوع البيانات أو لشخص طبيعي آخر حيث يكون موضوع البيانات غير قادر جسديًا أو قانونيًا على إعطاء الموافقة';
$string['gdpr_art_9_2_c_name'] = 'حماية المصالح الحيوية (المادة 9-2 (ج) من النظام الأوروبي العام لحماية البيانات)';
$string['gdpr_art_9_2_d_description'] = 'تتم المعالجة في سياق أنشطتها المشروعة مع ضمانات مناسبة من قبل مؤسسة أو جمعية أو أي هيئة أخرى غير هادفة للربح لها هدف سياسي أو فلسفي أو ديني أو نقابي بشرط أن تكون المعالجة مرتبطة فقط ب الأعضاء أو الأعضاء السابقين في الهيئة أو الأشخاص الذين لديهم اتصال منتظم به فيما يتعلق بمقاصده وأن البيانات الشخصية لا يتم الكشف عنها خارج تلك الهيئة دون موافقة موضوعات البيانات';
$string['gdpr_art_9_2_d_name'] = 'الأنشطة المشروعة المتعلقة بأعضاء / جهات اتصال وثيقة لمؤسسة أو جمعية أو هيئة أخرى لا تهدف للربح (النظام الأوروبي العام لحماية البيانات المادة 9.2 (د))';
$string['gdpr_art_9_2_e_description'] = 'تتعلق المعالجة بالبيانات الشخصية التي يتم نشرها بوضوح بواسطة موضوع البيانات';
$string['gdpr_art_9_2_e_name'] = 'البيانات التي يتم نشرها من خلال موضوع البيانات (النظام الأوروبي العام لحماية البيانات المادة 9.2 (هـ))';
$string['gdpr_art_9_2_f_description'] = 'تعتبر المعالجة ضرورية لإنشاء أو ممارسة أو الدفاع عن دعاوى قانونية أو عندما تتصرف المحاكم بصفتها القضائية';
$string['gdpr_art_9_2_f_name'] = 'الدعاوى القانونية والإجراءات القضائية (النظام الأوروبي العام لحماية البيانات المادة 9.2 (و))';
$string['gdpr_art_9_2_g_description'] = 'تعتبر المعالجة ضرورية لأسباب تتعلق بالمصلحة العامة الجوهرية ، على أساس قانون الاتحاد أو الدولة العضو الذي يتناسب مع الهدف المنشود ، واحترام جوهر الحق في حماية البيانات وتوفير تدابير مناسبة ومحددة لحماية الحقوق الأساسية و مصالح موضوع البيانات';
$string['gdpr_art_9_2_g_name'] = 'المصلحة العامة الجوهرية (النظام الأوروبي العام لحماية البيانات المادة 9.2 (ز))';
$string['gdpr_art_9_2_h_description'] = 'المعالجة ضرورية لأغراض الطب الوقائي أو المهني ، لتقييم قدرة العامل على العمل ، أو التشخيص الطبي ، أو توفير الرعاية الصحية أو الاجتماعية أو العلاج أو إدارة نظم وخدمات الرعاية الصحية أو الاجتماعية على أساس قانون الاتحاد أو الدولة العضو أو بموجب عقد مع أخصائي صحي ويخضع للشروط والضمانات المشار إليها في الفقرة 3 من النظام الأوروبي العام لحماية البيانات المادة 9';
$string['gdpr_art_9_2_h_name'] = 'أغراض طبية (النظام الأوروبي العام لحماية البيانات المادة 9.2 (ح))';
$string['gdpr_art_9_2_i_description'] = 'المعالجة ضرورية لأسباب تتعلق بالمصلحة العامة في مجال الصحة العامة ، مثل الحماية من التهديدات الخطيرة عبر الحدود للصحة أو ضمان معايير عالية من الجودة والسلامة للرعاية الصحية والمنتجات الطبية أو الأجهزة الطبية ، على أساس الاتحاد أو قانون الدولة العضو الذي ينص على تدابير مناسبة ومحددة لحماية حقوق وحريات موضوع البيانات ، ولا سيما السرية المهنية';
$string['gdpr_art_9_2_i_name'] = 'الصحة العامة (النظام الأوروبي العام لحماية البيانات المادة 9.2 (1))';
$string['gdpr_art_9_2_j_description'] = 'المعالجة ضرورية لأغراض الأرشفة بما يحقق المصلحة العامة أو لأغراض البحث العلمي أو التاريخي أو لأغراض إحصائية وفقًا للمادة 89 (1) بناءً على قانون الاتحاد أو الدولة العضو والتي يجب أن تكون متناسبة مع الهدف المنشود ، واحترام جوهر الحق في حماية البيانات وتوفير تدابير مناسبة ومحددة لحماية الحقوق الأساسية ومصالح موضوع البيانات';
$string['gdpr_art_9_2_j_name'] = 'المصلحة العامة ، أو البحوث العلمية / التاريخية / الإحصائية (النظام الأوروبي العام لحماية البيانات المادة 9-2 (ي))';
$string['hide'] = 'طي الكل';
$string['httpwarning'] = 'لا يجوز تشفير أي بيانات تم تنزيلها من هذا الموقع. يرجى الاتصال بمسؤول النظام الخاص بك وطلب تثبيت SSL على هذا الموقع.';
$string['inherit'] = 'يرث';
$string['lawfulbases'] = 'القواعد القانونية';
$string['lawfulbases_help'] = 'حدد خيارًا واحدًا على الأقل سيكون بمثابة الأساس القانوني لمعالجة البيانات الشخصية. للحصول على تفاصيل حول هذه القواعد القانونية ، يرجى الاطلاع على النظام الأوروبي العام لحماية البيانات المادة 6.1';
$string['markcomplete'] = 'علامة كاملة';
$string['markedcomplete'] = 'تم وضع علامة على استفسارك على أنه مكتمل بواسطة مسؤول الخصوصية.';
$string['message'] = 'رسالة';
$string['messagelabel'] = 'رسالة:';
$string['messageprovider:contactdataprotectionofficer'] = 'طلبات البيانات';
$string['messageprovider:datarequestprocessingresults'] = 'نتائج معالجة طلب البيانات';
$string['messageprovider:notifyexceptions'] = 'طلبات البيانات استثناءات الإخطارات';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'طلبات بياناتي الشخصية';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} أطفال';
$string['newrequest'] = 'طلب جديد';
$string['noactivitiestoload'] = 'لا توجد أنشطة';
$string['noassignedroles'] = 'لا يوجد أدوار محددة في هذا السياق';
$string['noblockstoload'] = 'لا يوجد منصات';
$string['nocategories'] = 'لا توجد فئات حتى الآن';
$string['nocoursestoload'] = 'لا توجد أنشطة';
$string['nodatarequests'] = 'لا توجد طلبات البيانات';
$string['nodatarequestsmatchingfilter'] = 'لا توجد طلبات بيانات مطابقة للمرشح المحدد';
$string['noexpiredcontexts'] = 'لا يحتوي مستوى السياق هذا على بيانات انتهت فترة الاحتفاظ بها.';
$string['nopersonaldatarequests'] = 'ليس لديك أي طلبات بيانات شخصية';
$string['nopurposes'] = 'لا توجد أغراض حتى الآن';
$string['nosubjectaccessrequests'] = 'لا توجد طلبات بيانات تحتاج إلى اتخاذ إجراء بشأنها';
$string['nosystemdefaults'] = 'لم يتم تحديد الغرض والفئة الافتراضية للموقع بعد.';
$string['notset'] = 'غير معين (موروث)';
$string['notyetexpired'] = '{$a} (لم تنته بعد)';
$string['overrideinstances'] = 'إعادة تعيين المثيلات مع القيم المخصصة';
$string['pluginname'] = 'خصوصية البيانات';
$string['pluginname_help'] = 'مفعل خصوصية البيانات';
$string['pluginregistry'] = 'سجل خصوصية البرنامج المساعد';
$string['pluginregistrytitle'] = 'البرنامج المساعد سجل الامتثال الخصوصية';
$string['privacy'] = 'خصوصية';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'المرشحات المطبقة حاليًا على صفحة طلبات البيانات.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'عدد طلبات البيانات التي يفضل المستخدم رؤيتها على صفحة واحدة';
$string['privacy:metadata:request'] = 'المعلومات الواردة من طلبات البيانات الشخصية (طلبات الوصول وطلبات الحذف) المقدمة لهذا الموقع.';
$string['privacy:metadata:request:comments'] = 'أي تعليقات للمستخدم مرفقة بالطلب.';
$string['privacy:metadata:request:dpocomment'] = 'أي تعليقات من مسؤول خصوصية الموقع المختص ذات العلاقة بالطلب.';
$string['privacy:metadata:request:requestedby'] = 'معرف المستخدم الذي يقوم بتقديم الطلب ، إذا تم تقديمه نيابة عن مستخدم آخر.';
$string['privacy:metadata:request:timecreated'] = 'الطابع الزمني الذي يحدد وقت تقديم الطلب من قبل المستخدم.';
$string['privacy:metadata:request:userid'] = 'معرف المستخدم الذي يخصه الطلب';
$string['privacyofficeronly'] = 'المستخدمون الذين تم تعيين دور مسؤول الخصوصية ({$a}) لهم حق الوصول إلى هذا المحتوى';
$string['privacyrequestexpiry'] = 'انتهاء طلب البيانات';
$string['privacyrequestexpiry_desc'] = 'الوقت الذي ستتوفر فيه طلبات البيانات المعتمدة للتنزيل قبل انتهاء صلاحيتها. إذا تم ضبطه على الصفر ، فلا يوجد حد زمني.';
$string['protected'] = 'محمي';
$string['protectedlabel'] = 'الاحتفاظ بهذه البيانات له أولوية قانونية أكبر من طلب المستخدم أن يتم حذفها. لن يتم حذف هذه البيانات إلا بعد انتهاء فترة الاحتفاظ.';
$string['purpose'] = 'غرض';
$string['purposecreated'] = 'تم انشاء الغرض';
$string['purposedefault'] = 'الغرض الافتراضي';
$string['purposedefault_help'] = 'الغرض الافتراضي هو الغرض الذي يتم تطبيقه على أي مثيلات جديدة. إذا تم تحديد الوراثة ، فسيتم تطبيق الغرض من سياق أعلى. السياقات هي (من الأقل إلى الأعلى): الكتل> وحدات النشاط> الدورات> فئات الدورة التدريبية> المستخدم> الموقع.';
$string['purpose_help'] = 'يصف الغرض سبب معالجة البيانات. يمكن إضافة غرض جديد ، أو في حالة تحديد الوراثة ، يتم تطبيق الغرض من سياق أعلى. السياقات هي (من الأقل إلى الأعلى): الكتل> وحدات النشاط> الدورات> فئات الدورة التدريبية> المستخدم> الموقع.';
$string['purposeoverview'] = 'يصف الغرض سياسة الاستخدام والاحتفاظ المقصودة للبيانات المخزنة. ويرد وصف لتخزين هذه البيانات والاحتفاظ بها في الغرض.';
$string['purposes'] = 'أغراض';
$string['purposeslist'] = 'قائمة أغراض البيانات';
$string['purposeupdated'] = 'تم تحديث الغرض';
$string['replyto'] = 'الرد على';
$string['requestactions'] = 'أفعال';
$string['requestapproved'] = 'تمت الموافقة على الطلب';
$string['requestby'] = 'مقدم الطلب';
$string['requestbydetail'] = 'بتوصية من:';
$string['requestcomments'] = 'ملاحاظات';
$string['requestcomments_help'] = 'رجاءا لا تتردد في تقديم مزيد من التفاصيل حول طلبك';
$string['requestcreation'] = 'إنشاء';
$string['requestdenied'] = 'تم رفض الطلب';
$string['requestemailintro'] = 'لقد تلقيت طلبًا للبيانات:';
$string['requestfor'] = 'طلب للحصول على';
$string['requestmarkedcomplete'] = 'تم وضع علامة على الطلب كاملاً';
$string['requestorigin'] = 'الموقع';
$string['requestsapproved'] = 'تمت الموافقة على الطلبات';
$string['requestsdenied'] = 'تم رفض الطلبات';
$string['requeststatus'] = 'الحالة';
$string['requestsubmitted'] = 'تم إرسال طلبك إلى مسؤول حماية بيانات الموقع';
$string['requesttype'] = 'نوع';
$string['requesttypedelete'] = 'احذف جميع بياناتي الشخصية';
$string['requesttypedeleteshort'] = 'حذف';
$string['requesttypeexport'] = 'تصدير جميع بياناتي الشخصية';
$string['requesttypeexportshort'] = 'تصدير';
$string['requesttype_help'] = 'حدد سبب رغبتك في الاتصال بمسؤول حماية بيانات الموقع';
$string['requesttypeothers'] = 'استفسار عام';
$string['requesttypeothersshort'] = 'أخرين';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'النظر في المواد دون تاريخ انتهاء زمن المادة';
$string['requireallenddatesforuserdeletion_desc'] = 'عند حساب انتهاء صلاحية المستخدم ، يتم مراعاة عدة عوامل:
* تتم مقارنة وقت تسجيل دخول المستخدم الأخير بفترة الاحتفاظ للمستخدمين ؛
و * ما إذا كان المستخدم مسجل بنشاط في أيّ مادة . عند التحقق من التسجيل النشط في المادة ، إذا لم يكن للدورة تاريخ انتهاء ، فسيتم استخدام هذا الإعداد لتحديد ما إذا كانت هذه المادة نشطة أم لا. إذا لم يكن للدورة تاريخ انتهاء ، و تم تمكين هذا الإعداد ، فلا يمكن حذف المستخدم.';
$string['requiresattention'] = 'يتطلب الاهتمام.';
$string['requiresattentionexplanation'] = 'لا يطبق هذا المكون الإضافي واجهة برمجة تطبيقات خصوصية Moodle. إذا كان هذا المكون الإضافي يخزن أيّ بيانات شخصية ، فلن يتم تصديره أو حذفه من خلال نظام الخصوصية في Moodle.';
$string['resubmitrequest'] = 'إعادة إرسال طلب {$a->type} لطلب {$a->username}';
$string['resubmitrequestasnew'] = 'إعادة تقديم كطلب جديد';
$string['resubmittedrequest'] = 'تم إلغاء طلب {$ a-> type} الحالي لـ {$a->username} و إعادة إرساله';
$string['resultdeleted'] = 'قد طلبت مؤخرًا أن يتم حذف حسابك وبياناتك الشخصية في {$a}. اكتملت هذه العملية ولن تتمكن بعد ذلك من تسجيل الدخول.';
$string['resultdownloadready'] = 'نسختك من بياناتك الشخصية في {$a} التي طلبتها مؤخرًا متاحة الآن للتنزيل. يرجى النقر على الرابط أدناه للانتقال إلى صفحة التنزيل.';
$string['retentionperiod'] = 'فترة الاحتفاظ';
$string['retentionperiod_help'] = 'تحدد فترة الاستبقاء طول الفترة الزمنية التي يجب الاحتفاظ بها البيانات. عند انتهاء فترة الاستبقاء ، يتم وضع علامة على البيانات و تسجيلها للحذف ، في انتظار تأكيد المسؤول.';
$string['retentionperiodnotdefined'] = 'لم يتم تحديد فترة احتفاظ';
$string['retentionperiodzero'] = 'لا يوجد  فترة للاحتفاظ';
$string['reviewdata'] = 'مراجعة البيانات';
$string['role'] = 'الدور';
$string['role_help'] = 'الدور الذي يجب أن ينطبق عليه التجاوز.';
$string['roleoverride'] = 'تجاوز الدور';
$string['roleoverrideoverview'] = 'يمكن تجاوز سياسة الاستبقاء الافتراضية لأدوار مستخدم محددة ، مما يسمح لك بتحديد سياسة الاحتفاظ لأطول أو أقصر. تنتهي صلاحية المستخدم فقط عندما تنتهي صلاحية جميع أدواره.';
$string['roleoverrides'] = 'تجاوزات الدور';
$string['selectbulkaction'] = 'يرجى اختيار جملة إجراءات .';
$string['selectdatarequests'] = 'يرجى اختيار طلبات البيانات.';
$string['selectuserdatarequest'] = 'حدد {$a->username}  طلب بيانات {$a->requesttype}.';
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
$string['statusdeleted'] = 'تم الحذف';
$string['statusdetail'] = 'الحالة:';
$string['statusexpired'] = 'منتهية الصلاحية';
$string['statuspending'] = 'قيد الانتظار';
$string['statuspreprocessing'] = 'ما قبل المعالجة';
$string['statusprocessing'] = 'قيد المعالجة';
$string['statusready'] = 'تحميل جاهز';
$string['statusrejected'] = 'مرفوض';
$string['subjectscope'] = 'نطاق الموضوع';
$string['subjectscope_help'] = 'يسرد نطاق الموضوع الأدوار التي يمكن تعيينها في هذا السياق.';
$string['summary'] = 'ملخص تكوين السجل';
$string['systemconfignotsetwarning'] = 'لم يتم تحديد غرض وفئة الموقع. عندما لا يتم تعريف هذه ، سيتم إزالة جميع البيانات عند معالجة طلبات الحذف.';
$string['tobedeleted'] = 'البيانات المراد حذفها';
$string['unexpiredrolewithretention'] = '{$a->retention} (غير منتهية الصلاحية)';
$string['user'] = 'مستخدم';
$string['userlistexplanation'] = 'يحتوي هذا المكون الإضافي على الموفر الأساسي ، و لكن يجب أيضًا تطبيق موفر قائمة المستخدمين للحصول على الدعم الكامل لوظيفة الخصوصية.';
$string['userlistnoncompliant'] = 'قائمة موفر المستخدم مفقودة';
$string['viewrequest'] = 'شاهد الطلب';
$string['visible'] = 'توسيع الكل';
