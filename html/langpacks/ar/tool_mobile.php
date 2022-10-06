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
 * Strings for component 'tool_mobile', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'يتم تمكين تصحيح ADOdb. يجب تعطيله في مصادقة قاعدة البيانات الخارجية أو إعدادات البرنامج المساعد لتسجيل قاعدة البيانات الخارجية.';
$string['androidappid'] = 'المعرف الفريد لتطبيق Android';
$string['androidappid_desc'] = 'قد يتم ترك هذا الإعداد كإعداد افتراضي إلا إذا كان لديك تطبيق Android مخصص.';
$string['apppolicy'] = 'رابط سياسة التطبيق';
$string['apppolicy_help'] = 'رابط السياسة لمستخدمي التطبيق المدرجين في صفحة (حول) في التطبيق. إذا تم ترك الحقل فارغًا ، فسيتم استخدام رابط سياسة الموقع بدلاً من ذلك.';
$string['apprequired'] = 'تتاح هذه الوظيفة فقط عند الوصول إليها عبر تطبيق مودل للهاتف المحمول أو سطح المكتب.';
$string['autologinkeygenerationlockout'] = 'تم حظر إنشاء مفتاح تسجيل الدخول التلقائي.
تحتاج إلى الانتظار 6 دقائق بين الطلبات.';
$string['autologinnotallowedtoadmins'] = 'لا يُسمح بتسجيل الدخول التلقائي لمشرفي الموقع.';
$string['cachedef_plugininfo'] = 'هذا يخزن قائمة الملاحق مع إضافات الجوال';
$string['clickheretolaunchtheapp'] = 'أنقر هنا إذا لم يفتح التطبيق تلقائياً.';
$string['configmobilecssurl'] = 'ملف CSS لتخصيص واجهة تطبيق الجوال.';
$string['customlangstrings'] = 'سلاسل لغة مخصصة';
$string['customlangstrings_desc'] = 'يمكن تخصيص الكلمات والعبارات المعروضة في التطبيق هنا. أدخل كل نص مخصص للغة في سطر جديد بصيغة: معرف النص، نص اللغة المخصصة ورمز اللغة، مفصولاً بينها بحرف الأنبوب. مثلاً:
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
للحصول على قائمة كاملة بمعرفات النصوص، أنظر التوثيقات.';
$string['custommenuitems'] = 'عناصر القائمة المخصصة';
$string['custommenuitems_desc'] = 'يمكن إضافة عناصر إضافية إلى القائمة الرئيسية للتطبيق عن طريق تحديدها هنا. أدخل كل عنصر من عناصر القائمة المخصصة في سطر جديد بتنسيق: نص العنصر، الرابط، طريقة فتح الرابط، رمز اللغة (اختياري، لعرض العنصر لمستخدمي اللغة المحددة فقط)، مفصولاً بينها بأحرف الأنبوب.

طرق فتح الرابط هي: app (للارتباط بنشاط مدعوم من التطبيق)، inappbrowser (لفتح الرابط في متصفح دون مغادرة التطبيق)، browser (لفتح الرابط في المتصفح الافتراضي للجهاز خارج التطبيق) و embedded (لعرض الرابط في iframe في صفحة جديدة في التطبيق).

عندما تفتقر العناصر إلى الترجمة بلغة معينة، ستستعمل لغات أخرى بمثابة خط رجوع ما لم يتم إلحاق ترميز اللغة فيها بـ "_only".

على سبيل المثال:
<pre>
مساعدة التطبيق|https://someurl.xyz/help|inappbrowser
درجاتي|https://someurl.xyz/local/mygrades/index.php|embedded|ar
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
You will only see this in English|https://someurl.xyz/english|browser|en_only
</pre>';
$string['darkmode'] = 'النمط الداكن';
$string['disabledfeatures'] = 'الميزات المعطَّلة';
$string['disabledfeatures_desc'] = 'حدد هنا الميزات التي تريد تعطيلها في تطبيق الجوال لموقعك. يرجى ملاحظة أنه قد يتم بالفعل تعطيل بعض الميزات المدرجة هنا من خلال إعدادات الموقع الأخرى. سيكون عليك تسجيل الخروج و تسجيل الدخول مرة أخرى في التطبيق لرؤية التغييرات.';
$string['displayerrorswarning'] = 'لقد تم تمكين عرض رسائل التصحيح (debugdisplay). ينبغي تعطيلها.';
$string['downloadcourse'] = 'تنزيل المساق';
$string['downloadcourses'] = 'تنزيل المساقات';
$string['enablesmartappbanners'] = 'تمكين لافتات التطبيق';
$string['enablesmartappbanners_desc'] = 'في حالة التمكين ، سيتم عرض لافتة تروج لتطبيق الجوال عند الوصول إلى الموقع باستخدام متصفح الجوال.';
$string['forcedurlscheme'] = 'إذا أردت السماح حصرياً بفتح تطبيقك ذي العلامة المخصصة عبر نافذة المتصفح، حدد مخطط رابطه هنا. إذا أدت السماح للتطبيق الرسمي فقط، ضع القيمة الافتراضية. أترك الحقل فارغاً إذا أردت السماح بأي تطبيق.';
$string['forcedurlscheme_key'] = 'مخطط الرابط';
$string['forcelogout'] = 'فرض تسجيل الخروج';
$string['forcelogout_desc'] = 'في حالة التمكين ، يتم استبدال خيار التطبيق "تغيير الموقع" بـ "تسجيل الخروج". ينتج عن هذا تسجيل خروج المستخدم بالكامل. يجب عليهم بعد ذلك إعادة إدخال كلمة المرور الخاصة بهم في المرة القادمة التي يرغبون في الوصول إلى الموقع.';
$string['getmoodleonyourmobile'] = 'احصل على تطبيق الجوّال';
$string['h5poffline'] = 'معاينة محتوى H5P بدون الاتصال بالإنترنت';
$string['httpsrequired'] = 'يتطلب HTTPS';
$string['insecurealgorithmwarning'] = 'يبدو أن شهادة HTTPS تستخدم خوارزمية غير آمنة للتوقيع (SHA-1). يرجى محاولة تحديث الشهادة.';
$string['invalidcertificatechainwarning'] = 'يبدو أن سلسلة الشهادة غير صالحة.';
$string['invalidcertificateexpiredatewarning'] = 'يبدو أن شهادة HTTPS للموقع قد انتهت صلاحيتها.';
$string['invalidcertificatestartdatewarning'] = 'يبدو أن شهادة HTTPS للموقع غير صالحة بعد (مع تاريخ البدء في المستقبل).';
$string['invalidprivatetoken'] = 'رمز خاص غير صالح. يجب ألا تكون العلامة فارغة أو تمرر عبر معلمة GET.';
$string['invaliduserquotawarning'] = 'تم تعيين حصة المستخدم (userquota) إلى رقم غير صالح. يجب ضبطه على رقم صحيح (قيمة عددية) في إعدادات أمان الموقع.';
$string['iosappid'] = 'المعرف الفريد لتطبيق iOS';
$string['iosappid_desc'] = 'قد يتم ترك هذا الإعداد كإعداد افتراضي إلا إذا كان لديك تطبيق iOS مخصص.';
$string['loginintheapp'] = 'عبر التطبيق';
$string['logininthebrowser'] = 'عبر نافذة المتصفح (لملاحق خدمة الدخول الموحد)';
$string['loginintheembeddedbrowser'] = 'عبر متصفح مضمن (لملاحق خدمة الدخول الموحد)';
$string['mainmenu'] = 'القائمة الرئيسية';
$string['minimumversion'] = 'إذا تم تحديد إصدار تطبيق الجوال ليكون (3.8.0 أو أعلى)، سيُطلب من المستخدمين الذين يستعملون إصداراً أقدم
منه ترقية تطبيقاتهم قبل السماح لهم بالوصول إلى الموقع.';
$string['minimumversion_key'] = 'أدنى إصدار مطلوب لتطبيق الجوال';
$string['mobileapp'] = 'تطبيق الجوال';
$string['mobileappconnected'] = 'تطبيق الجوال متصل';
$string['mobileappearance'] = 'مظهر الجوال';
$string['mobileappenabled'] = 'تم تمكين وصول تطبيقات الجوال إلى هذا الموقع. <br /><a href="{$a}">قم بتنزيل تطبيق الجوال</a>.';
$string['mobileauthentication'] = 'مصادقة الجوال';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'ميزات الجوال';
$string['mobilenotificationsdisabledwarning'] = 'لم يتم تمكين إشعارات الجوال. ينبغي تمكينها في إعدادات الإشعارات.';
$string['mobilesettings'] = 'إعدادات الجوال';
$string['moodleappsportalfeatureswarning'] = 'لطفاً، لاحظ أن بعض المزايا قد تكون مقيدة اعتماداً على اشتراكك في تطبيق مودل. للتفاصيل، قم بزيارة <a href="{$a}" target="_blank">بوابة تطبيقات مودل</a>.';
$string['oauth2identityproviders'] = 'مزودو هوية OAuth 2';
$string['offlineuse'] = 'استخدام بدون اتصال';
$string['pluginname'] = 'أدوات تطبيق مودل';
$string['pluginnotenabledorconfigured'] = 'الملحق غير مُمَكَّن أو غير مهيأ.';
$string['privacy:metadata:core_userkey'] = 'مفاتيح المستخدم المستعملة لإنشاء مفتاح تسجيل الدخول التلقائي للمستخدم الحالي';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'تاريخ آخر طلب مفتاح تسجيل دخول تلقائي. بين كل طلب مطلوب 6 دقائق';
$string['readingthisemailgettheapp'] = 'أتريد قراءة هذا في البريد الإلكتروني؟ <a href="{$a}">قم بتنزيل تطبيق الجوال وتلقى الإشعارات على جهازك المحمول</a>.';
$string['remoteaddons'] = 'الوظائف الإضافية عن بُعد';
$string['responsivemainmenuitems'] = 'استجابة عناصر القائمة';
$string['selfsignedoruntrustedcertificatewarning'] = 'يبدو أن شهادة HTTPS موقعة ذاتياً أو غير موثوق بها.
لن يعمل تطبيق الجوال إلا مع المواقع الموثوق بها.';
$string['setuplink'] = 'صفحة تنزيل التطبيق';
$string['setuplink_desc'] = 'رابط للصفحة مع خيارات لتنزيل تطبيق الجوّال من App Store و Google Play. سيتم عرض رابط صفحة تنزيل التطبيق في أسفل الصفحة وفي صفحة الملف الشخصي للمستخدم. أتركه فارغاً لكيلا يتم عرض الرابط.';
$string['smartappbanners'] = 'لافتات التطبيق';
$string['typeoflogin'] = 'نوع تسجيل الدخول';
$string['typeoflogin_desc'] = 'إذا كان الموقع يستخدم طريقة مصادقة الدخول الموحّد (SSO) ، فحدد عبر نافذة متصفح أو عبر متصفح مدمج. يوفر المستعرض المدمج تجربة مستخدم أفضل ، على الرغم من أنه لا يعمل مع جميع المكونات الإضافية لـ SSO.';
