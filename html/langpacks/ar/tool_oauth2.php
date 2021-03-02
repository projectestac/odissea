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
 * Strings for component 'tool_oauth2', language 'ar', version '3.8'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authconfirm'] = 'يمنح هذا الإجراء وصولًا دائمًا لواجهة برمجة التطبيقات إلى Moodle للحساب المصادق عليه. هذا مخصص ليتم استخدامه كحساب نظام لإدارة الملفات التي يملكها Moodle.';
$string['authconnected'] = 'حساب النظام متصل الآن للوصول دون اتصال';
$string['authnotconnected'] = 'حساب النظام غير متصل للوصول دون اتصال';
$string['configured'] = 'تكوين';
$string['configuredstatus'] = 'مكوّن';
$string['connectsystemaccount'] = 'الاتصال بحساب النظام';
$string['createfromtemplate'] = 'قم بإنشاء خدمة OAuth 2 من قالب';
$string['createfromtemplatedesc'] = 'اختر أحد قوالب خدمة OAuth 2 أدناه لإنشاء خدمة OAuth بتكوين صالح لأحد أنواع الخدمات المعروفة. سيؤدي ذلك إلى إنشاء خدمة OAuth 2، مع جميع نقاط النهاية والمعاملات الصحيحة المطلوبة للمصادقة، على الرغم من أنك ستظل بحاجة إلى إدخال مُعرَّف العميل والسر للخدمة الجديدة قبل استعمالها.';
$string['createnewendpoint'] = 'إنشاء نقطة نهاية جديدة للمصدر "{$a}"';
$string['createnewfacebookissuer'] = 'قم بإنشاء خدمة Facebook جديدة';
$string['createnewgoogleissuer'] = 'إنشاء خدمة Google جديدة';
$string['createnewissuer'] = 'إنشاء خدمة مخصصة جديدة';
$string['createnewmicrosoftissuer'] = 'إنشاء خدمة Microsoft جديدة';
$string['createnewnextcloudissuer'] = 'إنشاء خدمة Nextcloud جديدة';
$string['createnewuserfieldmapping'] = 'إنشاء تعيين حقل مستخدم جديد للمصدر "{$a}"';
$string['deleteconfirm'] = 'هل أنت متأكد من أنك تريد حذف مُصدر الهوية "{$a}"؟
أيّ مكونات إضافية تعتمد على هذا المصدر ستتوقف عن العمل.';
$string['deleteendpointconfirm'] = 'هل تريد بالتأكيد حذف نقطة النهاية "{$a->endpoint}" للمُصدر "{$a->issuer}" ؟ أي مكونات إضافية تعتمد على نقطة النهاية هذه ستتوقف عن العمل.';
$string['deleteuserfieldmappingconfirm'] = 'هل تريد بالتأكيد حذف تعيين حقل المستخدم للمصدر "{$a}"؟';
$string['discovered'] = 'اكتشاف خدمة ناجحة';
$string['discovered_help'] = 'الاكتشاف يعني أنه يمكن تحديد نقاط نهاية OAuth 2 تلقائيًا من رابط الأساسي لخدمة OAuth. ليس من الضروري "اكتشاف" جميع الخدمات ، و لكن إذا لم تكن كذلك ، فستكون هناك حاجة إلى إدخال نقاط النهاية و معلومات تعيين المستخدم يدويًا.';
$string['discoverystatus'] = 'اكتشاف';
$string['editendpoint'] = 'تحرير نقطة النهاية: {$a->endpoint} للمُصدر {$a->issuer}';
$string['editendpoints'] = 'تكوين نقاط النهاية';
$string['editissuer'] = 'تحرير مُصدر الهوية: {$a}';
$string['edituserfieldmapping'] = 'تحرير تعيين حقل المستخدم للمصدر {$a}';
$string['edituserfieldmappings'] = 'تكوين تعيينات مجال المستخدم';
$string['endpointdeleted'] = 'تم حذف نقطة النهاية';
$string['endpointname'] = 'الاسم';
$string['endpointname_help'] = 'المفتاح المستخدم للبحث عن نقطة النهاية هذه. يجب أن ينتهي بـ "_endpoint".';
$string['endpointsforissuer'] = 'نقاط النهاية للمصدر: {$a}';
$string['endpointurl'] = 'رابط';
$string['endpointurl_help'] = 'رابط لنقطة النهاية هذه. يجب استخدام https: // البروتوكول.';
$string['issueralloweddomains'] = 'مجالات تسجيل الدخول';
$string['issueralloweddomains_help'] = 'إذا تم تعيينه ، فإن هذا الإعداد هو قائمة مفصولة بفواصل من المجالات التي سيتم تسجيل الدخول إليها عند استخدام هذا الموفر.';
$string['issuerbaseurl'] = 'رابط لقاعدة الخدمة';
$string['issuerbaseurl_help'] = 'الرابط الأساسي المستخدم للوصول إلى الخدمة.';
$string['issuerclientid'] = 'معرف العميل';
$string['issuerclientid_help'] = 'معرف عميل OAuth لهذا المُصدر.';
$string['issuerclientsecret'] = 'سر العميل';
$string['issuerclientsecret_help'] = 'سر عميل OAuth لهذا المصدر.';
$string['issuerdeleted'] = 'تم حذف مصدر الهوية';
$string['issuerdisabled'] = 'مُصدر الهوية معطّل';
$string['issuerenabled'] = 'مُصدر الهوية ممكّن';
$string['issuerimage'] = 'عنوان رابط الشعار';
$string['issuerimage_help'] = 'رابط للصورة يستخدم لإظهار شعار لهذا المصدر. قد يتم عرضها على صفحة تسجيل الدخول.';
$string['issuerloginparams'] = 'معلمات إضافية المدرجة في طلب تسجيل الدخول.';
$string['issuerloginparams_help'] = 'تتطلب بعض الأنظمة معلمات إضافية لطلب تسجيل الدخول من أجل قراءة ملف تعريف المستخدم الأساسي.';
$string['issuerloginparamsoffline'] = 'معلمات إضافية المضمنة في طلب تسجيل الدخول للوصول دون اتصال.';
$string['issuerloginparamsoffline_help'] = 'يعرّف كل نظام OAuth طريقة مختلفة لطلب الوصول دون اتصال. على سبيل المثال ، تتطلب Google المعاملات الإضافية: "access_type = دون اتصال & موجه = موافقة". يجب أن تكون هذه المعلمات بتنسيق معلمة استعلام URL.';
$string['issuerloginscopes'] = 'النطاقات المدرجة في طلب تسجيل الدخول.';
$string['issuerloginscopes_help'] = 'تتطلب بعض الأنظمة نطاقات إضافية لطلب تسجيل الدخول من أجل قراءة ملف تعريف المستخدم الأساسي. النطاقات القياسية لنظام متوافق مع OpenID Connect هي "البريد الإلكتروني لملف التعريف المفتوح".';
$string['issuerloginscopesoffline'] = 'النطاقات المضمنة في طلب تسجيل الدخول للوصول دون اتصال.';
$string['issuerloginscopesoffline_help'] = 'يعرّف كل نظام OAuth طريقة مختلفة لطلب الوصول دون اتصال. على سبيل المثال ، تتطلب Microsoft نطاقًا إضافيًا "offline_access".';
$string['issuername'] = 'الاسم';
$string['issuername_help'] = 'اسم مصدر الهوية. قد يتم عرضها على صفحة تسجيل الدخول.';
$string['issuerrequireconfirmation'] = 'يتطلب التحقق من البريد الإلكتروني';
$string['issuerrequireconfirmation_help'] = 'مطالبة جميع المستخدمين بالتحقق من عنوان بريدهم الإلكتروني قبل أن يتمكنوا من تسجيل الدخول باستخدام OAuth. ينطبق هذا على الحسابات التي تم إنشاؤها حديثًا كجزء من عملية تسجيل الدخول ، أو عند اتصال حساب Moodle موجود بتسجيل دخول OAuth عبر عناوين بريد إلكتروني مطابقة.';
$string['issuers'] = 'مُصدّري';
$string['issuersetup'] = 'تعليمات مفصلة حول تكوين خدمات OAuth 2 الشائعة';
$string['issuersetuptype'] = 'إرشادات مفصلة حول إعداد موفر OAuth 2 {$a}';
$string['issuershowonloginpage'] = 'عرض على صفحة تسجيل الدخول';
$string['issuershowonloginpage_help'] = 'إذا تم تمكين المكون الإضافي للمصادقة OAuth 2 ، فسيتم إدراج مُصدر تسجيل الدخول هذا في صفحة تسجيل الدخول للسماح للمستخدمين بتسجيل الدخول باستخدام حسابات من المُصدر.';
$string['loginissuer'] = 'السماح بتسجيل الدخول';
$string['notconfigured'] = 'غير مهيأ';
$string['notdiscovered'] = 'اكتشاف الخدمة غير ناجح';
$string['notloginissuer'] = 'لا تسمح بتسجيل الدخول';
$string['pluginname'] = 'خدمات OAuth 2';
$string['privacy:metadata'] = 'لا يخزن المكون الإضافيOAuth 2 services  أيّ بيانات شخصية.';
$string['savechanges'] = 'حفظ التغييرات';
$string['serviceshelp'] = 'تعليمات إعداد مزود الخدمة.';
$string['systemaccountconnected'] = 'حساب النظام متصل';
$string['systemaccountconnected_help'] = 'تستخدم حسابات النظام لتوفير وظائف متقدمة للإضافات. لا تكون مطلوبة لوظائف تسجيل الدخول فقط ، ولكن قد توفر المكونات الإضافية الأخرى التي تستخدم خدمة OAuth مجموعة من الميزات المخفضة إذا لم يكن حساب النظام متصلاً. على سبيل المثال ، لا يمكن لمستودعات التخزين دعم "الروابط التي يتم التحكم فيها" بدون حساب نظام لتنفيذ عمليات الملفات.';
$string['systemaccountnotconnected'] = 'حساب النظام غير متصل';
$string['systemauthstatus'] = 'حساب النظام متصل';
$string['usebasicauth'] = 'مصادقة طلبات الرمز المميز عبر رؤوس HTTP';
$string['usebasicauth_help'] = 'استخدم نظام مصادقة HTTP Basic عند إرسال معرف العميل وكلمة المرور مع طلب رمز مميز للتحديث. موصى به من قبل معيار OAuth 2 ، ولكن قد لا يكون متاحًا مع بعض الجهات المصدرة.';
$string['userfieldexternalfield'] = 'اسم الحقل الخارجي';
$string['userfieldexternalfield_error'] = 'لا يمكن أن يحتوي هذا الحقل على HTML.';
$string['userfieldexternalfield_help'] = 'اسم الحقل المقدم من قبل نظام OAuth الخارجي.';
$string['userfieldinternalfield'] = 'اسم الحقل الداخلي';
$string['userfieldinternalfield_help'] = 'اسم حقل مستخدم Moodle الذي يجب تعيينه من الحقل الخارجي.';
$string['userfieldmappingdeleted'] = 'تم حذف تعيين حقل المستخدم';
$string['userfieldmappingsforissuer'] = 'تعيينات حقل المستخدم للمصدر: {$a}';
