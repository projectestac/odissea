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
 * Strings for component 'tool_mobile', language 'ar', branch 'MOODLE_36_STABLE'
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
$string['autologinkeygenerationlockout'] = 'تم حظر إنشاء مفتاح تسجيل الدخول التلقائي.
تحتاج إلى الانتظار 6 دقائق بين الطلبات.';
$string['autologinnotallowedtoadmins'] = 'لا يُسمح بتسجيل الدخول التلقائي لمشرفي الموقع.';
$string['cachedef_plugininfo'] = 'هذا يخزن قائمة الإضافات مع ملحقات المحمول';
$string['clickheretolaunchtheapp'] = 'انقر هنا إذا لم يفتح التطبيق تلقائيًا.';
$string['configmobilecssurl'] = 'ملف CSS لتخصيص واجهة تطبيق الجوال.';
$string['customlangstrings'] = 'سلاسل لغة مخصصة';
$string['customlangstrings_desc'] = 'يمكن تخصيص الكلمات و العبارات المعروضة في التطبيق هنا. أدخل كل سلسلة لغة مخصصة في سطر جديد بتنسيق: معرف السلسلة ، سلسلة اللغة المخصصة ورمز اللغة ، مفصولة بحرف توجيه. فمثلا:
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
للحصول على قائمة كاملة بمعرفات السلسلة ، انظر الوثائق.';
$string['custommenuitems'] = 'عناصر القائمة المخصصة';
$string['custommenuitems_desc'] = 'يمكن إضافة عناصر إضافية إلى القائمة الرئيسية للتطبيق عن طريق تحديدها هنا. أدخل كل عنصر من عناصر القائمة المخصصة في سطر جديد بتنسيق: نص العنصر ، و رابط ، و طريقة فتح الرابط ، و رمز اللغة (اختياري ، لعرض العنصر لمستخدمي اللغة المحددة فقط) ، مفصولة بأحرف توجيه. طرق فتح الرابط هي:
التطبيق (للارتباط بنشاط مدعوم من التطبيق) ، inappbrowser (لفتح رابط في متصفح دون مغادرة التطبيق) ،
متصفح (لفتح الرابط في المتصفح الافتراضي للجهاز خارج التطبيق) و مضمن (لعرض الرابط في iframe في صفحة جديدة في التطبيق). فمثلا:
مساعدة التطبيق | https: //someurl.xyz/help | inappbrowser
درجاتي | https: //someurl.xyz/local/mygrades/index.php | مضمن | ar
mis calificaciones | https: //someurl.xyz/local/mygrades/index.php | embedded | es';
$string['disabledfeatures'] = 'ميزات المعوقين';
$string['disabledfeatures_desc'] = 'حدد هنا الميزات التي تريد تعطيلها في تطبيق الجوال لموقعك. يرجى ملاحظة أنه قد يتم بالفعل تعطيل بعض الميزات المدرجة هنا من خلال إعدادات الموقع الأخرى. سيكون عليك تسجيل الخروج و تسجيل الدخول مرة أخرى في التطبيق لرؤية التغييرات.';
$string['displayerrorswarning'] = 'يتم تمكين عرض رسائل التصحيح (debugdisplay). يجب أن يتم تعطيل.';
$string['downloadcourse'] = 'تنزيل المقرر';
$string['downloadcourses'] = 'تنزيل المقررات';
$string['enablesmartappbanners'] = 'تمكين لافتات التطبيقات';
$string['enablesmartappbanners_desc'] = 'في حالة التمكين ، سيتم عرض لافتة تروج لتطبيق الجوال عند الوصول إلى الموقع باستخدام متصفح الجوال.';
$string['forcedurlscheme'] = 'إذا كنت تريد السماح فقط بفتح تطبيقك ذي العلامات التجارية المخصصة عبر نافذة متصفح ، فحدد مخطط رابط خاص به هنا ؛ و إلا اترك الحقل فارغًا.';
$string['forcedurlscheme_key'] = 'رابط المخطط';
$string['forcelogout'] = 'فرض تسجيل الخروج';
$string['forcelogout_desc'] = 'في حالة التمكين ، يتم استبدال خيار التطبيق "تغيير الموقع" بـ "تسجيل الخروج". ينتج عن هذا تسجيل خروج المستخدم بالكامل. يجب عليهم بعد ذلك إعادة إدخال كلمة المرور الخاصة بهم في المرة القادمة التي يرغبون في الوصول إلى الموقع.';
$string['getmoodleonyourmobile'] = 'احصل على تطبيق الجوّال';
$string['httpsrequired'] = 'HTTPS المطلوبة';
$string['insecurealgorithmwarning'] = 'يبدو أن شهادة HTTPS تستخدم خوارزمية غير آمنة للتوقيع (SHA-1). يرجى محاولة تحديث الشهادة.';
$string['invalidcertificatechainwarning'] = 'يبدو أن سلسلة الشهادة غير صالحة.';
$string['invalidcertificateexpiredatewarning'] = 'يبدو أن شهادة HTTPS للموقع قد انتهت صلاحيتها.';
$string['invalidcertificatestartdatewarning'] = 'يبدو أن شهادة HTTPS للموقع غير صالحة بعد (مع تاريخ البدء في المستقبل).';
$string['invalidprivatetoken'] = 'رمز خاص غير صالح. يجب ألا تكون العلامة فارغة أو تمرر عبر معلمة GET.';
$string['invaliduserquotawarning'] = 'تم تعيين حصة المستخدم (userquota) إلى رقم غير صالح. يجب ضبطه على رقم صحيح (قيمة عددية) في إعدادات أمان الموقع.';
$string['iosappid'] = 'المعرف الفريد لتطبيق iOS';
$string['iosappid_desc'] = 'قد يتم ترك هذا الإعداد كإعداد افتراضي إلا إذا كان لديك تطبيق iOS مخصص.';
$string['loginintheapp'] = 'عبر التطبيق';
$string['logininthebrowser'] = 'عبر نافذة متصفح (لمكونات خدمة الدخول الموحد)';
$string['loginintheembeddedbrowser'] = 'عبر متصفح مضمن (للمكونات الإضافية لـ SSO)';
$string['mainmenu'] = 'القائمة الرئيسية';
$string['mobileapp'] = 'تطبيق جوال';
$string['mobileappconnected'] = 'تطبيق جوال متصل';
$string['mobileappearance'] = 'مظهر المحمول';
$string['mobileappenabled'] = 'يحتوي هذا الموقع على تمكين الوصول إلى تطبيقات الجوال.
قم بتنزيل تطبيق الجوال .';
$string['mobileauthentication'] = 'مصادقة المحمول';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'ميزات المحمول';
$string['mobilenotificationsdisabledwarning'] = 'لم يتم تمكين إشعارات الجوال. يجب تمكينها في إدارة مخرجات الرسائل.';
$string['mobilesettings'] = 'إعدادات المحمول';
$string['offlineuse'] = 'استخدام بدون اتصال';
$string['pluginname'] = 'أدوات التطبيق Moodle';
$string['pluginnotenabledorconfigured'] = 'البرنامج المساعد غير مفعل أو مكوّن.';
$string['privacy:metadata:core_userkey'] = 'مفاتيح المستخدم المستخدمة لإنشاء مفتاح تسجيل الدخول التلقائي للمستخدم الحالي.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'تاريخ آخر طلب مفتاح تسجيل دخول تلقائي. بين كل طلب مطلوب 6 دقائق.';
$string['remoteaddons'] = 'الوظائف الإضافية عن بُعد';
$string['selfsignedoruntrustedcertificatewarning'] = 'يبدو أن شهادة HTTPS موقعة ذاتياً أو غير موثوق بها.
لن يعمل تطبيق الجوال إلا مع المواقع الموثوق بها.';
$string['setuplink'] = 'صفحة تنزيل التطبيق';
$string['setuplink_desc'] = 'رابط للصفحة مع روابط لتنزيل تطبيق الجوّال من App Store و Google Play.';
$string['smartappbanners'] = 'لافتات التطبيق';
$string['typeoflogin'] = 'نوع تسجيل الدخول';
$string['typeoflogin_desc'] = 'إذا كان الموقع يستخدم طريقة مصادقة الدخول الموحّد (SSO) ، فحدد عبر نافذة متصفح أو عبر متصفح مدمج. يوفر المستعرض المدمج تجربة مستخدم أفضل ، على الرغم من أنه لا يعمل مع جميع المكونات الإضافية لـ SSO.';
