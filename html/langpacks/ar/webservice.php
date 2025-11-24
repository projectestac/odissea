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
 * Strings for component 'webservice', language 'ar', version '4.5'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'استثناء سيطرة الوصول';
$string['actwebserviceshhdr'] = 'بروتوكول خدمة الويب النشيط';
$string['addaservice'] = 'أضف خدمة';
$string['addcapabilitytousers'] = 'تحقق من إمكانية المستخدمين';
$string['addcapabilitytousersdescription'] = 'ينبغي أن يكون للمستخدمين إمكانيتان - webservice:createtoken وإمكانية تضاهي البروتوكولات المستعملة، على سبيل المثال webservice/rest:use، webservice/soap:use. لتحقيق ذلك، أنشئ دوراً لخدمة الويب مع الإمكانيات المناسبة وقم بتعيينه إلى مستخدم خدمات الويب بمثابة دور على مستوى النظام.';
$string['addexternalservice'] = 'إضافة الخدمة الخارجية';
$string['addfunction'] = 'أضف وظيفة';
$string['addfunctionhelp'] = 'إختر الوظيفة لإضافتها إلى الخدمة.';
$string['addfunctions'] = 'أضف وظائف';
$string['addfunctionsdescription'] = 'إختر الوظائف المطلوبة للخدمة المنشأة حديثاً.';
$string['addrequiredcapability'] = 'تعيين/إلغاء تعيين الإمكانية المطلوبة';
$string['addservice'] = 'إضافة خدمة جديدة: {$a->name} (المُعرَّف: {$a->id})';
$string['addservicefunction'] = 'أضف وظائف إلى الخدمة "{$a}"';
$string['allusers'] = 'كل المستخدمين';
$string['apiexplorer'] = 'مستكشف API';
$string['apiexplorernotavalaible'] = 'مستكشف API غير متاح بعد.';
$string['arguments'] = 'العوامل';
$string['authmethod'] = 'طريقة المصادقة';
$string['callablefromajax'] = 'قابل للاستدعاء من AJAX';
$string['cannotcreatetoken'] = 'لا صلاحية لإنشاء ترميز خدمة الويب للخدمة {$a}.';
$string['cannotgetcoursecontents'] = 'يتعذر الحصول على محتويات المقرر الدراسي';
$string['checkusercapability'] = 'تحقق من إمكانية المستخدم';
$string['checkusercapabilitydescription'] = 'ينبغي أن يكون للمستخدم الإمكانيات المناسبة حسب البروتوكولات المستعملة، على سبيل المثال webservice/rest:use، webservice/soap:use. لتحقيق ذلك، أنشئ دوراً لخدمة الويب مع الإمكانيات المناسبة وقم بتعيينه إلى مستخدم خدمات الويب بمثابة دور على مستوى النظام.';
$string['configwebserviceplugins'] = 'لدواعي الأمان، ينبغي الاقتصار على تمكين البروتوكولات التي هي قيد الاستعمال فقط.';
$string['context'] = 'السياق';
$string['createservicedescription'] = 'الخدمة هي مجموعة من وظائف خدمة الويب. ستسمح للمستخدم بالوصول إلى خدمة جديدة. في صفحة <strong>أضف خدمة</strong> قم بتأشير خيارَي \'تمكين\' و \'المستخدمون المرخص لهم\'. إختر \'لا إمكانية مطلوبة\'.';
$string['createserviceforusersdescription'] = 'الخدمة هي مجموعة من وظائف خدمة الويب. ستسمح للمستخدم بالوصول إلى خدمة جديدة. في صفحة <strong>أضف خدمة</strong> قم بتأشير خيار \'تمكين\' وأزل التأشير من خيار \'المستخدمون المرخص لهم\'. إختر \'لا إمكانية مطلوبة\'.';
$string['createtoken'] = 'إنشئ ترميزاً';
$string['createtokenforuser'] = 'إنشئ ترميزاً للمستخدم';
$string['createtokenforuserdescription'] = 'إنشئ ترميزاً لمستخدم خدمات الويب.';
$string['createuser'] = 'إنشاء مستخدم محدد';
$string['createuserdescription'] = 'مستخدم خدمات الويب مطلوب لتمثيل النظام المسيطر على مودل.';
$string['criteriaerror'] = 'لا صلاحيات للبحث في المعيار.';
$string['default'] = 'الافتراضي لـ "{$a}"';
$string['deleteaservice'] = 'إحذف الخدمة';
$string['deleteservice'] = 'إحذف الخدمة: {$a->name} (المُعرَّف: {$a->id})';
$string['deleteserviceconfirm'] = 'حذف الخدمة سيؤدي أيضاً إلى حذف الترميزات المتعلقة بها. هل ترغب حقاً بحذف الخدمة الخارجية "{$a}"؟';
$string['deletetoken'] = 'حذف الترميز';
$string['deletetokenconfirm'] = 'هل ترغب حقاً بحذف ترميز خدمة الويب لهذا للمستخدم <strong>{$a->user}</strong> من الخدمة <strong>{$a->service}</strong>؟';
$string['deprecated'] = 'مُهمَل';
$string['disabledwarning'] = 'كل بروتوكولات خدمة الويب معطلة. يمكن العثور على الإعداد "تمكين خدمات الويب" في المزايا المتقدمة.';
$string['doc'] = 'التوثيقات';
$string['docaccessrefused'] = 'ليس مسموحاً لك بمعاينة توثيقات هذا الترميز';
$string['downloadfiles'] = 'يستطيع تنزيل الملفات';
$string['downloadfiles_help'] = 'عند تمكينه، أي مستخدم سيستطيع تنزيل الملفات بمفاتيحه الأمنية. بلا شك، هم مقيدون بالملفات المسموح لهم بتنزيلها في الموقع.';
$string['editaservice'] = 'تحرير الخدمة';
$string['editexternalservice'] = 'تحرير الخدمة الخارجية';
$string['editservice'] = 'تحرير الخدمة: {$a->name} (المُعرَّف: {$a->id})';
$string['enabled'] = 'مُمَكَّنة';
$string['enabledocumentation'] = 'تمكين توثيقات المطور';
$string['enabledocumentationdescription'] = 'توثيق تفصيلي عن خدمات الويب متاح بالنسبة للبروتوكولات المُمَكنة.';
$string['enableprotocols'] = 'تمكين البروتوكولات';
$string['enableprotocolsdescription'] = 'ينبغي تمكين بروتوكول واحد على الأقل. لدواعي الأمان، ينبغي الاقتصار على تمكين البروتوكولات التي من المزمع استعمالها فقط.';
$string['enablews'] = 'تمكين خدمات الويب';
$string['enablewsdescription'] = 'ينبغي تمكين خدمات الويب في المزايا المتقدمة.';
$string['entertoken'] = 'أدخل مفتاح/ترميز الأمان:';
$string['error'] = 'خطأ: {$a}';
$string['errorcatcontextnotvalid'] = 'لا يمكنك تنفيذ الوظائف في سياق التصنيف (مُعرَّف التصنيف :{$a->catid}). رسالة الخطأ في السياق كانت: {$a->message}';
$string['errorcodes'] = 'رسالة الخطأ';
$string['errorcoursecontextnotvalid'] = 'لا يمكنك تنفيذ الوظائف في سياق المساق (مُعرَّف المساق: {$a->courseid}). رسالة الخطأ في السياق كانت: {$a->message}';
$string['errorinvalidparam'] = 'المعامل "{$a}" غير صحيح.';
$string['errornotemptydefaultparamarray'] = 'معامل وصف خدمة الويب المسمى \'{$a}\' هو في بنية مفردة أو متعددة. الافتراضي يمكن فقط أن يكون مصفوفة فارغة. تحقق من وصف خدمة الويب.';
$string['erroroptionalparamarray'] = 'معامل وصف خدمة الويب المسمى \'{$a}\' هو في بنية مفردة أو متعددة. لا يمكن ضبطه ليكون بمثابة VALUE_OPTIONAL. تحقق من وصف خدمة الويب.';
$string['eventwebservicefunctioncalled'] = 'وظيفة خدمة ويب تم استدعاؤها';
$string['eventwebserviceloginfailed'] = 'دخول خدمة ويب فشل';
$string['eventwebserviceservicecreated'] = 'خدمة ويب تم إنشاؤها';
$string['eventwebserviceservicedeleted'] = 'خدمة ويب تم حذفها';
$string['eventwebserviceserviceupdated'] = 'خدمة ويب تم تحديثها';
$string['eventwebserviceserviceuseradded'] = 'مستخدم خدمة ويب تمت إضافته';
$string['eventwebserviceserviceuserremoved'] = 'مستخدم خدمة ويب تمت إزالته';
$string['eventwebservicetokencreated'] = 'ترميز خدمة ويب تم إنشاؤه';
$string['eventwebservicetokensent'] = 'ترميز خدمة ويب تم إرساله';
$string['execute'] = 'نفذ';
$string['executewarnign'] = 'تحذير: إذا ضغطت على تنفيذ، فسيتم تعديل قاعدة بياناتك والتعديلات لا يمكن التراجع عنها ذاتياً!';
$string['externalservice'] = 'الخدمة الخارجية';
$string['externalservicefunctions'] = 'وظائف الخدمة الخارجية';
$string['externalservices'] = 'الخدمات الخارجية';
$string['externalserviceusers'] = 'مستخدمو الخدمة الخارجية';
$string['failedtolog'] = 'فشل التدوين في سجل الوقوعات';
$string['filenameexist'] = 'اسم الملف موجود سلفاً: {$a}';
$string['forbiddenwsuser'] = 'لا يمكن إنشاء الترميز لمستخدم غير متحقق من حسابه أو محذوف أو معلق أو بصفة ضيف.';
$string['function'] = 'الوظيفة';
$string['functions'] = 'الوظائف';
$string['generalstructure'] = 'البنية العامة';
$string['information'] = 'المعلومات';
$string['installexistingserviceshortnameerror'] = 'هناك خدمة ويب بالاسم المختصر "{$a}" موجودة سلفاً. لا يمكن تنصيب/تحديث خدمة ويب أخرى بهذا الاسم المختصر.';
$string['installserviceshortnameerror'] = 'خطأ برمجي: الاسم المختصر للخدمة "{$a}" ينبغي أن يقتصر على محارف وأرقام لاتينية (حروفاً وأرقاماً)، الشُرَط التحتانية (_)، علامة الطرح (-) أو النقطة (.)';
$string['invalidextparam'] = 'معامل واجهة برمجة التطبيق الخارجي غير صالح: {$a}';
$string['invalidextresponse'] = 'استجابة واجهة برمجة التطبيق الخارجي غير صالحة: {$a}';
$string['invalidiptoken'] = 'ترميز غير صالح - عنوان IP الخاص بك غير مدعوم';
$string['invalidtimedtoken'] = 'ترميز غير صالح - الترميز منته الصلاحية';
$string['invalidtoken'] = 'ترميز غير صالح - الترميز تعذر العثور عليه';
$string['iprestriction'] = 'تقييد IP';
$string['iprestriction_help'] = 'على المستخدم استدعاء خدمة الويب عبر عناوين IP المدرجة (مفصولة بفوارز).';
$string['key'] = 'المعرف';
$string['keyshelp'] = 'المفاتيح تستعمل للوصول إلى حسابك في مودل من تطبيقات خارجية.';
$string['loginrequired'] = 'مقتصر على المستخدمين الداخلين إلى الموقع';
$string['manageprotocols'] = 'إدارة البروتوكولات';
$string['managetokens'] = 'إدارة الترميزات';
$string['missingcaps'] = 'الإمكانيات المفقودة';
$string['missingcaps_help'] = 'قائمة بالإمكانيات المعلنة من قبل الخدمة والتي لا يمتلكها المستخدم. قد لا تتوفر بعض وظائف الخدمة بدون تلك الإمكانيات.';
$string['missingpassword'] = 'كلمة المرور مفقودة';
$string['missingrequiredcapability'] = 'الإمكانية {$a} مطلوبة.';
$string['missingusername'] = 'اسم المستخدم مفقود';
$string['missingversionfile'] = 'خطأ برمجي: الملف version.php مفقود للمكون {$a}';
$string['nameexists'] = 'الاسم مستعمل سلفاً من قبل خدمة أخرى';
$string['nocapabilitytouseparameter'] = 'ليست لدى المستخدم الإمكانية المطلوبة لاستعمال المعامل {$a}';
$string['nofunctions'] = 'هذه الخدمة ليست لها وظائف.';
$string['norequiredcapability'] = 'لا يتطلب إمكانية';
$string['notoken'] = 'قائمة الترميزات فارغة.';
$string['onesystemcontrolling'] = 'السماح لنظام خارجي بالتحكم بمودل';
$string['onesystemcontrollingdescription'] = 'الخطوات الآتية تساعدك في تهيئة خدمات الويب في مودل بُغية السماح لنظام خارجي بالتفاعل معه. هذا يتضمن تهيئة طريقة المصادقة عبر ترميز (مفتاح أمان).';
$string['onlyseecreatedtokens'] = 'يمكنك معاينة الترميزات التي أنشأتها حصرًا.';
$string['operation'] = 'عملية';
$string['optional'] = 'إختياري';
$string['passwordisexpired'] = 'كلمة المرور منتهية الصلاحية';
$string['phpparam'] = 'XML-RPC (بُنية PHP)';
$string['phpresponse'] = 'XML-RPC (بُنية PHP)';
$string['postrestparam'] = 'النص البرمجي لـ PHP لـ REST (طلب POST)';
$string['potusers'] = 'ليسوا مستخدمين مصرح لهم';
$string['potusersmatching'] = 'ليسوا مستخدمين مصرح لهم يطابقون';
$string['print'] = 'طباعة الكل';
$string['privacy:metadata'] = 'إن واجهة برمجة تطبيق خدمات الويب لا تخزن أي بيانات.';
$string['protocol'] = 'البروتوكول';
$string['removefunction'] = 'أزل';
$string['removefunctionconfirm'] = 'هل تريد حقاً إزالة الوظيفة "{$a->function}" من الخدمة "{$a->service}"؟';
$string['requireauthentication'] = 'الطريقة تحتاج إلى التصريح مع صلاحية xxx.';
$string['required'] = 'مطلوبة';
$string['requiredcapability'] = 'الإمكانية المطلوبة';
$string['requiredcapability_help'] = 'عند تأشيرها، سيكون المستخدمون ذوو الإمكانية المطلوبة فقط قادرين على الوصول إلى الخدمة.';
$string['requiredcaps'] = 'الإمكانيات المطلوبة';
$string['resettokencomplete'] = 'تمت إعادة تعيين الترميز المحدد';
$string['resettokenconfirm'] = 'هل تريد حقاً إعادة تعيين مفتاح خدمة الويب هذا للمستخدم <strong>{$a->user}</strong> في الخدمة <strong>{$a->service}</strong>؟';
$string['resettokenconfirmsimple'] = 'هل تريد حقاً إعادة تعيين هذا المفتاح؟ أي روابط محفوظة تتضمن المفتاح القديم لن تعمل بعد الآن.';
$string['response'] = 'الاستجابة';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'الحساب المستعاد يحتاج إلى إعادة تعيين كلمة المرور قبل الحصول على ترميز.';
$string['restparam'] = 'REST (معاملات POST)';
$string['restrictedusers'] = 'المستخدمون المصرح لهم فقط';
$string['restrictedusers_help'] = 'هذا الإعداد يحدد فيما إذا كان لكل المستخدمين ذوي صلاحية إنشاء ترميز خدمة الويب، إمكانية توليد ترميز لهذه الخدمة عبر صفحة مفاتيح الأمان العائدة لهم، أم المستخدمون المصرح لهم فقط يمكنهم القيام بذلك.';
$string['securitykey'] = 'مفتاح الأمان (الترميز)';
$string['securitykeys'] = 'مفاتيح الأمان';
$string['selectauthorisedusers'] = 'إختر المستخدمين المصرح لهم';
$string['selectedcapability'] = 'محدد';
$string['selectedcapabilitydoesntexit'] = 'الإمكانية المطلوبة المعدة حالياً ({$a}) لم تعد موجودة. لطفاً، قم بتغييرها ثم احفظ التغييرات.';
$string['selectservice'] = 'إختر الخدمة';
$string['selectspecificuser'] = 'إختر مستخدماً معيناً';
$string['selectspecificuserdescription'] = 'أضف مستخدم خدمات الويب بمثابة مستخدم مصرح له.';
$string['service'] = 'الخدمة';
$string['servicehelpexplanation'] = 'الخدمة هي مجموعة من الوظائف. يمكن الوصول إلى الخدمة من قِبَل كل المستخدمين أو من قِبَل مستخدمين محددين.';
$string['servicename'] = 'اسم الخدمة';
$string['servicenotavailable'] = 'خدمة الويب غير متاحة. (ليست موجودة أو قد تكون معطلة).';
$string['servicerequireslogin'] = 'خدمة الويب غير متاحة. (تم الخروج من الجلسة أو انتهت صلاحيتها).';
$string['servicesbuiltin'] = 'الخدمات المُضَمَّنة';
$string['servicescustom'] = 'الخدمات المخصصة';
$string['serviceusers'] = 'المستخدمون المصرح لهم';
$string['serviceusersettings'] = 'إعدادات المستخدم';
$string['serviceusersmatching'] = 'مطابقة المستخدمين المصرح لهم';
$string['serviceuserssettings'] = 'تغيير الإعدادات للمستخدمين المصرح لهم';
$string['shortnametaken'] = 'الاسم المختصر مستعمل سلفاً لخدمة أخرى ({$a})';
$string['simpleauthlog'] = 'تصريح الدخول البسيط';
$string['step'] = 'الخطوة';
$string['supplyinfo'] = 'تفاصيل أكثر';
$string['testauserwithtestclientdescription'] = 'قم بمحاكاة الوصول الخارجي إلى الخدمة باستعمال وكيل اختبار خدمة الويب. قبل القيام بذلك، قم بتسجيل الدخول بمثابة مستخدم ذي الإمكانية moodle/webservice:createtoken واحصل على مفتاح الأمان (الترميز) عبر صفحة تفضيلات المستخدم. ستستعمل هذا الترميز مع وكيل الاختبار. أيضاً في وكيل الاختبار، قم باختيار بروتوكول مُمَكن مع مصادقة الترميز. <strong>تحذير: الوظائف التي تختبرها سيتم تنفيذها لهذا المستخدم، لذلك كن على حذر بشأن ما تختار اختباره!</strong>';
$string['testclient'] = 'وكيل اختبار خدمة الويب';
$string['testclientdescription'] = '* وكيل اختبار خدمة الويب <strong>ينفذ</strong> الوظائف <strong>حقيقة</strong>. لا تختبر الوظائف التي لا تعرفها. <br/>* كل وظائف خدمة الويب الموجودة غير مطبقة حتى الآن مع وكيل الاختبار. <br/>* من أجل التحقق من أن أحد المستخدمين لا يمكنه الوصول إلى وظائف معينة، يمكنك اختبار بعض الوظائف التي لم تسمح بها.<br/>*  لمعاينة رسائل الخطأ بشكل أوضح، اضبط مفتاح معالجة الأخطاء على <strong>{$a->mode}</strong> في {$a->atag}.';
$string['testwithtestclient'] = 'إختبر الخدمة';
$string['testwithtestclientdescription'] = 'قم بمحاكاة الوصول الخارجي إلى الخدمة باستعمال وكيل اختبار خدمة الويب. قم باختيار بروتوكول مُمَكن مع مصادقة الترميز. <strong>تحذير: الوظائف التي تختبرها سيتم تنفيذها لهذا المستخدم، لذلك كن على حذر بشأن ما تختار اختباره!</strong>';
$string['token'] = 'الترميز';
$string['tokenauthlog'] = 'مصادقة الترميز';
$string['tokencopied'] = 'تم نسخ النص إلى الحافظة';
$string['tokencreatedbyadmin'] = 'يمكن فقط إعادة ضبطه من قبل المشرف (*)';
$string['tokencreator'] = 'المنشئ';
$string['tokenfilter'] = 'مرشح الترميزات';
$string['tokenfilterreset'] = 'إظهار كل الترميزات';
$string['tokenfiltersubmit'] = 'إظهار الترميزات المطابقة فقط';
$string['tokenname'] = 'الاسم';
$string['tokennamehint'] = 'إذا لم تُدخل الاسم فسيتم استعمال اسم عشوائي.';
$string['tokennameprefix'] = 'خدمة الويب-{$a}';
$string['tokennewmessage'] = 'إنسخ الترميز الآن. لن يتم إظهاره مجددًا بمجرد مغادرتك هذه الصفحة.';
$string['unknownoptionkey'] = 'مفتاح خيار مجهول ({$a})';
$string['unnamedstringparam'] = 'معامل نصي غير مسمى.';
$string['updateusersettings'] = 'تحديث';
$string['uploadfiles'] = 'يستطيع رفع الملفات';
$string['uploadfiles_help'] = 'عند تمكينه، يمكن لأي مستخدم رفع الملفات بمفاتيح أمانه إلى منطقة الملفات الخاصة به أو منطقة ملفات مسودة. تتم مراعاة حصص ملفات المستخدمين.';
$string['userasclients'] = 'المستخدمون بمثابة وكلاء مع ترميز';
$string['userasclientsdescription'] = 'الخطوات الآتية تساعدك في تهيئة خدمة الويب في مودل للمستخدمين بمثابة وكلاء. هذه الخطوات تساعد أيضاً في إعداد طريقة المصادقة عبر الترميزات الموصى بها (مفاتيح الأمان). في تلك الحالة من الاستعمال، سيقوم المستخدمون بتوليد ترميزاتهم عبر صفحة مفاتيح الأمان عند صفحة تفضيلاتهم الشخصية.';
$string['usermissingcaps'] = 'إمكانيات مفقودة: {$a}';
$string['usernameorid'] = 'اسم المستخدم / مُعرَّف المستخدم';
$string['usernameorid_help'] = 'أدخل اسم المستخدم أو مُعرَّف المستخدم.';
$string['usernotallowed'] = 'المستخدم ليس مسموحاً له بالوصول إلى هذه الخدمة. أولاً، عليك تمكين هذا المستخدم عبر صفحة إدارة المستخدمين المسموح لهم بـ {$a}.';
$string['userservices'] = 'خدمات المستخدم: {$a}';
$string['usersettingssaved'] = 'تم حفظ إعدادات المستخدم';
$string['validuntil'] = 'صالحة حتى';
$string['validuntil_empty'] = 'ليس لهذا الترميز تاريخ انتهاء صلاحية.';
$string['validuntil_help'] = 'عند تأشيره، سيتم إبطال الخدمة بعد هذا التاريخ لهذا المستخدم.';
$string['webservice'] = 'خدمة الويب';
$string['webservices'] = 'خدمات الويب';
$string['webservicesoverview'] = 'نظرة عامة';
$string['webservicetokens'] = 'ترميزات خدمة الويب';
$string['wrongusernamepassword'] = 'اسم مستخدم أو كلمة مرور خاطئة';
$string['wsaccessuserdeleted'] = 'الوصول المرفوض لخدمة ويب لحساب مستخدم محذوف: {$a}';
$string['wsaccessuserexpired'] = 'الوصول المرفوض لخدمة ويب لحساب مستخدم ذي كلمة مرور منتهية الصلاحية: {$a}';
$string['wsaccessusernologin'] = 'الوصول المرفوض لخدمة ويب لحساب مستخدم بلا مصادقة دخول: {$a}';
$string['wsaccessusersuspended'] = 'تم رفض الدخول لخدمة الويب للمستخدم المعلق: {$a}';
$string['wsaccessuserunconfirmed'] = 'الوصول المرفوض لخدمة ويب لحساب مستخدم غير مؤكد: {$a}';
$string['wsclientdoc'] = 'توثيقات مودل لوكيل خدمة الويب';
$string['wsdocapi'] = 'توثيقات واجهة برمجة التطبيق';
$string['wsdocumentation'] = 'توثيقات خدمة الويب';
$string['wsdocumentationdisable'] = 'توثيقات خدمة الويب معطلة.';
$string['wsdocumentationintro'] = 'لإنشاء وكيل، نحن ننصحك بقراءة {$a->doclink}';
$string['wsdocumentationlogin'] = 'أو أدخل اسم المستخدم وكلمة المرور العائدين لخدمة الويب الخاصة بك:';
$string['wspassword'] = 'كلمة مرور خدمة الويب';
$string['wsusername'] = 'اسم المستخدم لخدمة الويب';
