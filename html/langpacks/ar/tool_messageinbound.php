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
 * Strings for component 'tool_messageinbound', language 'ar', version '3.8'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'اسم الصف';
$string['component'] = 'مكوّن';
$string['configmessageinboundhost'] = 'عنوان المخدم الذي ينبغي لمودل أن يتحقق من بريده. لتحديد منفذ غير افتراضي، استعمل [server]:[port]، على سبيل المثال mail.example.com:993. إذا لم يتم تحديد المنفذ، سيتم استعمال المنفذ الافتراضي لذلك النوع من مخدم البريد.';
$string['defaultexpiration'] = 'مدة صلاحية العنوان الافتراضية';
$string['defaultexpiration_help'] = 'عندما يتم إنشاء عنوان بريد إلكتروني بواسطة المعالج ، يمكن تعيينه بحيث تنتهي صلاحيته تلقائيًا بعد فترة من الوقت ، بحيث لم يعد من الممكن استخدامه. من المستحسن تحديد فترة انتهاء الصلاحية.';
$string['description'] = 'الوصف';
$string['domain'] = 'مجال البريد الإلكتروني';
$string['edit'] = 'تحرير';
$string['edithandler'] = 'تحرير إعدادات المعالج {$a}';
$string['editinghandler'] = 'تحرير {$a}';
$string['enabled'] = 'تمكين';
$string['fixedenabled_help'] = 'لا يمكنك تغيير حالة هذا المعالج. قد يكون هذا لأن المعالج مطلوب من قبل معالجات أخرى.';
$string['fixedvalidateaddress'] = 'التحقق من صحة عنوان المرسل';
$string['fixedvalidateaddress_help'] = 'لا يمكنك تغيير التحقق من صحة العنوان لهذا المعالج. قد يكون هذا لأن المعالج يتطلب إعدادًا محددًا.';
$string['handlerdisabled'] = 'تم تعطيل معالج البريد الإلكتروني الذي حاولت الاتصال به. غير قادر على معالجة الرسالة في هذا الوقت.';
$string['incomingmailconfiguration'] = 'تكوين البريد الوارد';
$string['incomingmailserversettings'] = 'إعدادات خادم البريد الوارد';
$string['incomingmailserversettings_desc'] = 'Moodle قادر على الاتصال بخوادم IMAP التي تم تكوينها بشكل مناسب. يمكنك تحديد الإعدادات المستخدمة للاتصال بخادم IMAP هنا.';
$string['invalid_recipient_handler'] = 'في حالة تلقي رسالة صالحة ولكن لا يمكن مصادقة المرسل ، يتم تخزين الرسالة على خادم البريد الإلكتروني ويتم الاتصال بالمستخدم باستخدام عنوان البريد الإلكتروني في ملف تعريف المستخدم الخاص به. يتم منح المستخدم الفرصة للرد لتأكيد صحة الرسالة الأصلية. يعالج هذا المعالج تلك الردود. لا يمكن تعطيل التحقق من المرسل لهذا المعالج لأن المستخدم قد يرد من عنوان بريد إلكتروني غير صحيح إذا كان تكوين عميل البريد الإلكتروني الخاص به غير صحيح.';
$string['invalid_recipient_handler_name'] = 'معالج مرسل غير صالح';
$string['invalidrecipientdescription'] = 'تعذرت مصادقة الرسالة "{$a->topic}"، حيث تم إرسالها من عنوان بريد الكتروني مختلف عن ذلك الموجود في ملفك الشخصي. لكي تتم المصادقة على الرسالة، عليك بالرد على هذه الرسالة.';
$string['invalidrecipientdescriptionhtml'] = 'تعذرت مصادقة الرسالة "{$a->topic}"، حيث تم إرسالها من عنوان بريد الكتروني مختلف عن ذلك الموجود في ملفك الشخصي. لكي تتم المصادقة على الرسالة، عليك بالرد على هذه الرسالة.';
$string['invalidrecipientfinal'] = 'تعذرت مصادقة الرسالة "{$a->topic}". يرجى التحقق من أنك ترسل رسالتك من نفس عنوان البريد الإلكتروني كما في ملفك الشخصي.';
$string['mailbox'] = 'اسم صندوق البريد';
$string['mailboxconfiguration'] = 'إعدادات صندوق البريد';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'إعدادات البريد';
$string['message_handlers'] = 'معالجات الرسائل';
$string['messageinbound'] = 'رسالة واردة';
$string['messageinboundenabled'] = 'تمكين معالجة البريد الوارد';
$string['messageinboundenabled_desc'] = 'يجب تمكين معالجة البريد الوارد حتى يتم إرسال الرسائل بالمعلومات المناسبة.';
$string['messageinboundgeneralconfiguration'] = 'التكوين العام';
$string['messageinboundgeneralconfiguration_desc'] = 'تتيح لك معالجة الرسائل الواردة تلقي البريد الالكتروني ومعالجته داخل مودل. يتضمن هذا تطبيقات مثل إرسال ردود البريد الالكتروني إلى مشاركات المنتدى أو إضافة الملفات إلى ملفات المستخدم الخاصة.';
$string['messageinboundhost'] = 'خادم البريد الوارد';
$string['messageinboundhostpass'] = 'كلمه السر';
$string['messageinboundhostpass_desc'] = 'هذه هي كلمة المرور التي سيوفرها مزود الخدمة لتسجيل الدخول إلى حساب البريد الإلكتروني الخاص بك.';
$string['messageinboundhostssl'] = 'استخدم SSL';
$string['messageinboundhostssl_desc'] = 'تدعم بعض مخدمات البريد مستوى إضافيًا من الأمان من خلال تشفير الاتصالات بين مودل ومخدمك. نوصي باستعمال تشفير SSL هذا إذا كان مخدمك يدعمه.';
$string['messageinboundhosttype'] = 'نوع الخادم';
$string['messageinboundhostuser'] = 'اسم المستخدم';
$string['messageinboundhostuser_desc'] = 'هذا هو اسم المستخدم الذي سيوفره مزود الخدمة لتسجيل الدخول إلى حساب البريد الإلكتروني الخاص بك.';
$string['messageinboundmailboxconfiguration_desc'] = 'عندما يتم إرسال الرسائل ، فإنها تنسجم مع التنسيق address+data@example.com. لإنشاء عناوين موثوق بها من Moodle ، يرجى تحديد العنوان الذي ستستخدمه عادة قبل علامة @ ، والمجال بعد العلامة @ بشكل منفصل.
على سبيل المثال ، سيكون اسم صندوق البريد في المثال هو "العنوان" ، وسيكون مجال البريد الإلكتروني "example.com". يجب عليك استخدام حساب بريد إلكتروني مخصص لهذا الغرض.';
$string['messageprocessingerror'] = 'لقد أرسلت مؤخرًا رسالة بريد إلكتروني "{$ a-> topic}" ولكن لسوء الحظ ، تعذرت معالجتها. و ترد تفاصيل الخطأ أدناه. {$ أ-> خطأ}';
$string['messageprocessingerrorhtml'] = 'لقد أرسلت مؤخرًا رسالة بريد إلكتروني "{$a->topic}" ولكن لسوء الحظ ، تعذرت معالجتها.

و ترد تفاصيل الخطأ أدناه.

{$a->error}';
$string['messageprocessingfailed'] = 'لا يمكن معالجة البريد الإلكتروني "{$a->topic}". الخطأ كالتالي: "{$a->message}".';
$string['messageprocessingfailedunknown'] = 'لا يمكن معالجة البريد الإلكتروني "{$a->topic}".
اتصل بالمسؤول للحصول على مزيد من المعلومات.';
$string['messageprocessingsuccess'] = '{$a->plain} إذا كنت لا ترغب في تلقي هذه الإشعارات في المستقبل ، فيمكنك تعديل تفضيلات المراسلة الشخصية عن طريق فتح {$a->messagepreferencesurl} في متصفحك.';
$string['messageprocessingsuccesshtml'] = 'إذا كنت لا ترغب في تلقي هذه الإشعارات في المستقبل ، فيمكنك تعديل تفضيلات المراسلة الشخصية .';
$string['messageprovider:invalidrecipienthandler'] = 'رسالة لتأكيد أن رسالة واردة جاءت منك';
$string['messageprovider:messageprocessingerror'] = 'تحذير عند تعذر معالجة رسالة واردة';
$string['messageprovider:messageprocessingsuccess'] = 'تأكيد أن الرسالة قد تمت معالجتها بنجاح';
$string['name'] = 'الاسم';
$string['noencryption'] = 'إيقاف - لا تشفير';
$string['noexpiry'] = 'لا انتهاء للصلاحية';
$string['oldmessagenotfound'] = 'لقد حاولت مصادقة رسالة يدويًا ، لكن تعذر العثور على الرسالة.
قد يكون هذا بسبب معالجتها بالفعل أو بسبب انتهاء صلاحية الرسالة.';
$string['oneday'] = 'يوما واحد';
$string['onehour'] = 'ساعة واحدة';
$string['oneweek'] = 'اسبوع واحد';
$string['oneyear'] = 'سنة واحدة';
$string['pluginname'] = 'تكوين الرسائل الواردة';
$string['privacy:metadata:coreuserkey'] = 'مفاتيح المستخدم للتحقق من صحة البريد الإلكتروني المستلم';
$string['privacy:metadata:messagelist'] = 'قائمة معرفات الرسائل التي فشلت في التحقق من الصحة وتتطلب المزيد من التفويض';
$string['privacy:metadata:messagelist:address'] = 'العنوان الذي تم إرسال البريد الإلكتروني إليه';
$string['privacy:metadata:messagelist:messageid'] = 'معرف الرسالة';
$string['privacy:metadata:messagelist:timecreated'] = 'الوقت الذي تم فيه تسجيل السجل';
$string['privacy:metadata:messagelist:userid'] = 'معرف المستخدم الذي يحتاج إلى الموافقة على الرسالة';
$string['replysubjectprefix'] = 'إعادة:';
$string['requirevalidation'] = 'التحقق من صحة عنوان المرسل';
$string['ssl'] = 'SSL (إصدار SSL للكشف التلقائي)';
$string['sslv2'] = 'SSLv2 (فرض SSL الإصدار 2)';
$string['sslv3'] = 'SSLv2 (إصدار قوة SSL 3)';
$string['taskcleanup'] = 'تنظيف البريد الإلكتروني الوارد لم يتم التحقق منه';
$string['taskpickup'] = 'التقاط البريد الإلكتروني الوارد';
$string['tls'] = 'TLS (TLS ؛ بدأ عبر التفاوض على مستوى البروتوكول عبر قناة غير مشفرة ؛ طريقة موصى بها لبدء الاتصال الآمن)';
$string['tlsv1'] = 'TLSv1 (اتصال مباشر بإصدار خادم TLS 1.x)';
$string['validateaddress'] = 'التحقق من صحة عنوان البريد الإلكتروني للمرسل';
$string['validateaddress_help'] = 'عند تلقي رسالة من أحد المستخدمين ، يحاول Moodle التحقق من صحة الرسالة عن طريق مقارنة عنوان البريد الإلكتروني للمرسل مع عنوان البريد الإلكتروني في ملف تعريف المستخدم الخاص به. إذا لم يتطابق المرسل ، فسيتم إرسال إشعار إلى المستخدم لتأكيد أنه قام بالفعل بإرسال البريد الإلكتروني. إذا تم تعطيل هذا الإعداد ، فلن يتم تحديد عنوان البريد الإلكتروني للمرسل على الإطلاق.';
