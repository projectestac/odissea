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
 * Strings for component 'tool_mobile', language 'ar', version '4.4'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'يتم تمكين تصحيح ADOdb. يجب تعطيله في مصادقة قاعدة البيانات الخارجية أو إعدادات البرنامج المساعد لتسجيل قاعدة البيانات الخارجية.';
$string['androidappid'] = 'المعرف الفريد لتطبيق Android';
$string['androidappid_desc'] = 'قد يتم ترك هذا الإعداد كإعداد افتراضي إلا إذا كان لديك تطبيق Android مخصص.';
$string['apppolicy'] = 'رابط سياسة التطبيق';
$string['apppolicy_help'] = 'رابط السياسة لمستخدمي التطبيق المدرجين في صفحة (حول) في التطبيق. إذا تم ترك الحقل فارغًا ، فسيتم استخدام رابط سياسة الموقع بدلاً من ذلك.';
$string['apprequired'] = 'تتاح هذه الوظيفة فقط عند الوصول إليها عبر تطبيق مودل للهاتف المحمول أو سطح المكتب.';
$string['autologinkeygenerationlockout'] = 'تم حظر إنشاء مفتاح تسجيل الدخول التلقائي. تحتاج إلى الانتظار {$a} دقائق بين الطلبات.';
$string['autologinmintimebetweenreq'] = 'أقل وقت ما بين طلبات تسجيل الدخول التلقائي.';
$string['autologinmintimebetweenreq_desc'] = 'أقل مدة ما بين طلبات تسجيل الدخول التلقائي من تطبيق الجوال. إذا كان مستخدمو تطبيق الجوال عُرضة للمطالبات المتكررة بإدخال معطيات حساباتهم عند مشاهدتهم للمحتوى المضمن في الموقع، عليك ضبط هذا الإعداد على قيمة قليلة.';
$string['autologinnotallowedtoadmins'] = 'لا يُسمح بتسجيل الدخول التلقائي لمشرفي الموقع.';
$string['autologout'] = 'فرض تسجيل الخروج التلقائي لمستخدميك';
$string['autologout_desc'] = 'لدواعٍ أمنية، يمكنك فرض تسجيل الخروج التلقائي لمستخدميك عند مغادرتهم أو إغلاقهم للتطبيق، أو تحويله إلى الخلفية. سيكون على المستخدمين معاودة تسجيل الدخول عند رجوعهم إلى التطبيق.';
$string['autologoutcustom'] = 'الوقت المخصص بعد مغادرة المستخدمين أو إغلاقهم للتطبيق';
$string['autologoutinmediate'] = 'فورًا بعد مغادرة المستخدمين أو إغلاقهم للتطبيق';
$string['autologouttime'] = 'مؤقت مسجل الخروج التلقائي';
$string['cachedef_plugininfo'] = 'هذا يخزن قائمة الإضافات مع إضافات الجوال';
$string['cachedef_subscriptiondata'] = 'هذا يخزن معلومات اشتراك تطبيق الجوال.';
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
$string['disabledfeatures_desc'] = 'حدد هنا الميزات التي تريد تعطيلها في تطبيق الجوال لموقعك. يرجى ملاحظة أنه قد يتم بالفعل تعطيل بعض الميزات المدرجة هنا من خلال إعدادات الموقع الأخرى. سيكون عليك تسجيل الخروج وتسجيل الدخول مرة أخرى في التطبيق لرؤية التغييرات.';
$string['displayerrorswarning'] = 'لقد تم تمكين عرض رسائل التصحيح (debugdisplay). ينبغي تعطيلها.';
$string['downloadcourse'] = 'تنزيل المساق';
$string['downloadcourses'] = 'تنزيل المقررات الدراسية';
$string['enablesmartappbanners'] = 'تمكين لافتات التطبيق';
$string['enablesmartappbanners_desc'] = 'في حالة التمكين ، سيتم عرض لافتة تروج لتطبيق الجوال عند الوصول إلى الموقع باستخدام متصفح الجوال.';
$string['filetypeexclusionlist'] = 'قائمة أنواع الملفات المستبعدة';
$string['filetypeexclusionlist_desc'] = 'إختر كل أنواع الملفات التي ليست للاستعمال في الجوالات. سيتم سرد هكذا ملفات في المساق، وعندها، إذا حاول المستخدم فتحها، سيتم إظهار تنبيه يوضح بأن ذلك النوع من الملفات غير مهيأ لاستعماله في أجهزة الجوال. يمكن بعدها للمستخدم إلغاء التنبيه أو تجاهله ومحاولة فتح الملف مع ذلك.';
$string['filetypeexclusionlistplaceholder'] = 'قائمة أنواع ملفات الجوال المستبعدة';
$string['forcedurlscheme'] = 'إذا أردت السماح حصرياً بفتح تطبيقك ذي العلامة المخصصة عبر نافذة المتصفح، حدد مخطط رابطه هنا. إذا أدت السماح للتطبيق الرسمي فقط، ضع القيمة الافتراضية. أترك الحقل فارغاً إذا أردت السماح بأي تطبيق.';
$string['forcedurlscheme_key'] = 'مخطط الرابط';
$string['forcelogout'] = 'فرض تسجيل الخروج';
$string['forcelogout_desc'] = 'عند تمكينه، سيتم تسجيل خروج المستخدمين بشكل كامل حتى عند تبديل الحسابات. عليهم عندها إعادة إدخال كلمة مرورهم في المرة القادمة التي يرغبون فيها الوصول إلى الموقع.';
$string['getmoodleonyourmobile'] = 'احصل على تطبيق الجوّال';
$string['h5poffline'] = 'معاينة محتوى H5P بدون الاتصال بالإنترنت';
$string['httpsrequired'] = 'يتطلب HTTPS';
$string['insecurealgorithmwarning'] = 'يبدو أن شهادة HTTPS تستخدم خوارزمية غير آمنة للتوقيع (SHA-1). يرجى محاولة تحديث الشهادة.';
$string['invalidcertificatechainwarning'] = 'يبدو أن سلسلة الشهادة غير صالحة. قد تعمل هذه الشهادة مع المتصفح ولكنها لن تعمل مع تطبيق الجوال.';
$string['invalidcertificateexpiredatewarning'] = 'يبدو أن شهادة HTTPS للموقع قد انتهت صلاحيتها.';
$string['invalidcertificatestartdatewarning'] = 'يبدو أن شهادة HTTPS للموقع غير صالحة بعد (مع تاريخ البدء في المستقبل).';
$string['invalidprivatetoken'] = 'رمز خاص غير صالح. يجب ألا تكون العلامة فارغة أو تمرر عبر معلمة GET.';
$string['invaliduserquotawarning'] = 'تم تعيين حصة المستخدم (userquota) إلى رقم غير صالح. يجب ضبطه على رقم صحيح (قيمة عددية) في إعدادات أمان الموقع.';
$string['iosappid'] = 'المعرف الفريد لتطبيق iOS';
$string['iosappid_desc'] = 'قد يتم ترك هذا الإعداد كإعداد افتراضي إلا إذا كان لديك تطبيق iOS مخصص.';
$string['launchviasiteinbrowser'] = 'الإطلاق بواسطة الموقع في مستعرض النظام';
$string['loginintheapp'] = 'عبر التطبيق';
$string['logininthebrowser'] = 'عبر نافذة المتصفح (لإضافات خدمة الدخول الموحد)';
$string['loginintheembeddedbrowser'] = 'عبر متصفح مضمن (لإضافات خدمة الدخول الموحد)';
$string['logoutconfirmation'] = 'هل أنت متأكد من رغبتك في تسجيل الخروج من تطبيق الجوال المنصب في الأجهزة المحمولة؟ بتسجيل الخروج، ستحتاج إلى معاودة إدخال اسم المستخدم وكلمة المرور في تطبيق الجوال عند كل الأجهزة حيثما تم تنصيبه.';
$string['mainmenu'] = 'القائمة الرئيسية';
$string['managefiletypes'] = 'إدارة أنواع الملفات';
$string['minimumversion'] = 'إذا تم تحديد إصدار تطبيق الجوال ليكون (3.8.0 أو أعلى)، سيُطلب من المستخدمين الذين يستعملون إصداراً أقدم
منه ترقية تطبيقاتهم قبل السماح لهم بالوصول إلى الموقع.';
$string['minimumversion_key'] = 'أدنى إصدار مطلوب لتطبيق الجوال';
$string['mobileapp'] = 'تطبيق الجوال';
$string['mobileappearance'] = 'مظهر الجوال';
$string['mobileappenabled'] = 'تم تمكين وصول تطبيقات الجوال إلى هذا الموقع. <br /><a href="{$a}">قم بتنزيل تطبيق الجوال</a>.';
$string['mobileappsubscription'] = 'اشتراك تطبيق مودل';
$string['mobileauthentication'] = 'مصادقة الجوال';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'ميزات الجوال';
$string['mobilenotificationsdisabledwarning'] = 'لم يتم تمكين إشعارات الجوال. ينبغي تمكينها في إعدادات الإشعارات.';
$string['mobilesettings'] = 'إعدادات الجوال';
$string['moodleappsportalfeatureswarning'] = 'لطفاً، لاحظ أن بعض المزايا قد تكون مقيدة اعتماداً على اشتراكك في تطبيق مودل. للتفاصيل، قم بزيارة <a href="{$a}" target="_blank">بوابة تطبيقات مودل</a>.';
$string['notifications'] = 'الإشعارات';
$string['notificationsactivedevices'] = 'الأجهزة النشطة';
$string['notificationscurrentactivedevices'] = 'الأجهزة التي تلقت إشعارات هذا الشهر';
$string['notificationsignorednotifications'] = 'الإشعارات التي لم تُرسل';
$string['notificationslimitreached'] = 'لقد تم تجاوز حد إرسال الإشعارات الشهري إلى أجهزة المستخدمين النشطة. لن يتم إرسال الإشعارات إلى بعض المستخدمين. من الموصى به أن تبادر إلى ترقية خطة تطبيق مودل الخاصة بك في <a href="{$a}" target="_blank">بوابة تطبيقات مودل</a>.';
$string['notificationsmissingwarning'] = 'تعذر استرجاع إحصائيات إشعارات تطبيق مودل. سبب ذلك على الأرجح هو عدم تمكين إشعارات الجوال لهذا الموقع بعد. يمكنك تمكينها عبر إدارة الموقع / المراسلة / الجوال.';
$string['notificationsnewdevices'] = 'الأجهزة الجديدة';
$string['notificationsseemore'] = 'ملاحظة: لا يتم احتساب إحصائيات استعمال تطبيق مودل آنياً. للوصول إلى إحصائيات أكثر تفصيلاً، بضمنها بيانات الأشهر الماضية، لطفاً، سجل دخولك في <a href="{$a}" target="_blank">بوابة تطبيقات مودل</a>.';
$string['notificationssentnotifications'] = 'الإشعارات المرسلة';
$string['oauth2identityproviders'] = 'مزودو هوية OAuth 2';
$string['offlineuse'] = 'استخدام بدون اتصال';
$string['pluginname'] = 'أدوات تطبيق مودل';
$string['pluginnotenabledorconfigured'] = 'الإضافة غير مفعلة أو غير مهيأة.';
$string['privacy:metadata:core_userkey'] = 'مفاتيح المستخدم المستعملة لإنشاء مفتاح تسجيل الدخول التلقائي للمستخدم الحالي';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'تاريخ آخر طلب مفتاح تسجيل دخول تلقائي. بين كل طلب مطلوب 6 دقائق';
$string['qrcodedisabled'] = 'الوصول عبر ترميز QR مُعطَّل';
$string['qrcodeformobileappaccess'] = 'الوصول إلى تطبيق الجوال عبر ترميز QR';
$string['qrcodeformobileapploginabout'] = 'إمسح ترميز QR بتطبيق الجوال الخاص بك وسيتم تسجيل دخولك تلقائياً. ستنتهي صلاحية ترميز QR خلال {$a}.';
$string['qrcodeformobileappurlabout'] = 'إمسح ترميز QR بتطبيق الجوال الخاص بك للحصول على رابط الموقع في التطبيق.';
$string['qrcodetype'] = 'الوصول عبر ترميز QR';
$string['qrcodetype_desc'] = 'يمكن تقديم ترميز QR لمسحه من قبل مستعملي تطبيق الجوال. يمكن استعمال هذه الطريقة للحصول على رابط الموقع، أو إذا كان الموقع مؤمناً باستعمال HTTPS، لتسجيل دخول المستخدمين تلقائياً دون الحاجة إلى إدخال اسم المستخدم وكلمة المرور الخاصة بهم.';
$string['qrcodetypelogin'] = 'ترميز QR مع تسجيل الدخول التلقائي';
$string['qrcodetypeurl'] = 'ترميز QR مع رابط الموقع';
$string['qrkeyttl'] = 'مدة مفتاح مصادقة QR';
$string['qrkeyttl_desc'] = 'مقدار الوقت الذي يكون فيه ترميز مصادقة QR صالحًا لتسجيل الدخول تلقائيًا.';
$string['qrsameipcheck'] = 'فحص نفس عنوان IP عبر رمز الاستجابة السريعة';
$string['qrsameipcheck_desc'] = 'فيما إذا كان ينبغي للمستخدمين استعمال نفس الشبكة عند توليد رمز الاستجابة السريعة وعند مسحه أم لا. قم بتعطيله فقط إذا وردتك بلاغات من المستخدمين عن مشاكل في تسجيل الدخول باستعمال رمز الاستجابة السريعة.';
$string['qrsiteadminsnotallowed'] = 'لدواعٍ أمنية، تسجيل الدخول عبر ترميز QR غير مسموح به لمشرفي الموقع أو إذا كنت تسجل دخولك بصفة مستخدم آخر.';
$string['readingthisemailgettheapp'] = 'هل تقرأ هذا في البريد الإلكتروني؟ <a href="{$a}">قم بتنزيل تطبيق الجوال وتلقى الإشعارات في جهازك المحمول</a>.';
$string['remoteaddons'] = 'الوظائف الإضافية عن بُعد';
$string['responsivemainmenuitems'] = 'استجابة عناصر القائمة';
$string['scanqrcode'] = 'إمسح ترميز QR';
$string['selfsignedoruntrustedcertificatewarning'] = 'يبدو أن شهادة HTTPS موقعة ذاتياً أو غير موثوق بها. لن يعمل تطبيق الجوال إلا مع المواقع الموثوق بها. الرجاء استعمال أي أداة تحقق على الإنترنت لفحص SSL للحصول على تشخيص أعمق للمشكلة. إذا كانت تلك الأدوات تشير بأن شهادتك صالحة، يمكنك تجاهل هذا التحذير.';
$string['setuplink'] = 'صفحة تنزيل التطبيق';
$string['setuplink_desc'] = 'رابط للصفحة مع خيارات لتنزيل تطبيق الجوّال من App Store و Google Play. سيتم عرض رابط صفحة تنزيل التطبيق في أسفل الصفحة وفي صفحة الملف الشخصي للمستخدم. أتركه فارغاً لكيلا يتم عرض الرابط.';
$string['smartappbanners'] = 'لافتات التطبيق';
$string['subscription'] = 'الاشتراك';
$string['subscriptioncreated'] = 'تاريخ البدء';
$string['subscriptionerrorrequest'] = 'وقع خطأ غير متوقع عند محاولة استرجاع معلومات اشتراكك في تطبيق مودل.';
$string['subscriptionexpiration'] = 'تاريخ انتهاء الصلاحية';
$string['subscriptionfeaturenotapplied'] = 'هذه الميزة مهيأة في موقعك ولكنها غير مضمنة في خطة تطبيق مودل العائدة لك. لذلك، لن يكون للإعداد أي تأثير.';
$string['subscriptionfeatures'] = 'مزايا الاشتراك';
$string['subscriptionlimitsurpassed'] = 'تم تجاوز حد الاشتراك';
$string['subscriptionregister'] = 'لتفاصيل خطط التطبيق المختلفة، وللوصول إلى صفحة إحصائيات استعمال تطبيق مودل، لطفاً، قم بزيارة <a href="{$a}" target="_blank">بوابة تطبيقات مودل</a>.';
$string['subscriptionsseemore'] = 'ملاحظة: المعلومات المعروضة لا يتم تحديثها آنياً. قد تكون بحاجة إلى الخروج ثم معاودة تسجيل الدخول لمعاينة التحديثات. للمعلومات عن كيفية ترقية خطة التطبيق العائدة لك، لطفاً، سجل دخولك في <a href="{$a}" target="_blank">بوابة تطبيقات مودل</a>.';
$string['switchaccount'] = 'تبديل الحساب';
$string['typeoflogin'] = 'نوع تسجيل الدخول';
$string['typeoflogin_desc'] = 'إذا كان الموقع يستخدم طريقة مصادقة الدخول الموحّد (SSO) ، فحدد عبر نافذة متصفح أو عبر متصفح مدمج. يوفر المستعرض المدمج تجربة مستخدم أفضل ، على الرغم من أنه لا يعمل مع جميع المكونات الإضافية لـ SSO.';
$string['viewqrcode'] = 'معاينة ترميز QR';
