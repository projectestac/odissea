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
 * Strings for component 'mnet', language 'ar', version '3.11'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (مُوَقَّع ذاتياً)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (مُوَقَّع)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP غير مشفر';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (مُوَقَّع ذاتياً)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (مُوَقَّع)';
$string['aboutyourhost'] = 'حول خادمك';
$string['accesslevel'] = 'مستوى الوصول';
$string['addhost'] = 'إضافة مستضيف';
$string['addnewhost'] = 'إضافة مضيف جديد';
$string['addtoacl'] = 'أضف إلى سيطرة الوصول';
$string['allhosts'] = 'كل المضيفين';
$string['allhosts_no_options'] = 'لا تتاح الخيارات عند معاينة مضيفين متعددين';
$string['allow'] = 'إسمح';
$string['applicationtype'] = 'نوع التطبيق';
$string['authfail_nosessionexists'] = 'التفويض فشل: جلسة شبكة مودل غير موجودة.';
$string['authfail_sessiontimedout'] = 'التفويض فشل: جلسة شبكة مودل انتهت صلاحيتها.';
$string['authfail_usermismatch'] = 'التفويض فشل: المستخدم غير متطابق.';
$string['authmnetdisabled'] = 'ملحق مصادقة شبكة مودل <strong>معطل</strong>.';
$string['badcert'] = 'هذه ليست شهادة مصادقة صحيحة.';
$string['certdetails'] = 'تفاصيل شهادة مصادقة';
$string['configmnet'] = 'تسمح شبكة مودل باتصال هذا المخدم مع مخدمات أو خدمات أخرى.';
$string['couldnotgetcert'] = 'لا توجد شهادة مصادقة في <br />{$a}. <br />قد يكون المضيف متوقفاً أو معرفاً بشكل خاطئ.';
$string['couldnotmatchcert'] = 'هذا لا يطابق شهادة المصادقة المنشورة حالياً من قبل مخدم الويب.';
$string['courses'] = 'المقررات الدراسية';
$string['courseson'] = 'المقررات الدراسية في';
$string['current_transport'] = 'النقل الحالي';
$string['currentkey'] = 'المفتاح العام الحالي';
$string['databaseerror'] = 'تعذرت كتابة التفاصيل في قاعدة البيانات.';
$string['deleteaserver'] = 'حذف المخدم';
$string['deletedhostinfo'] = 'لقد تم حذف هذا المضيف. إذا إردت إلغاء حذفه، إقلب حالة الحذف إلى \'لا\'.';
$string['deletedhosts'] = 'المضيفون المحذوفون: {$a}';
$string['deletehost'] = 'إحذف المضيف';
$string['deletekeycheck'] = 'هل أنت متأكد من رغبتك في حذف هذا المفتاح؟';
$string['deleteoutoftime'] = 'مهلة الـ 60 ثانية لحذف هذا المفتاح قد انتهت. لطفاً، إبدأ مجدداً.';
$string['deleteuserrecord'] = 'SSO ACL: حذف سجل المستخدم \'{$a->user}\' من {$a->host}.';
$string['deletewrongkeyvalue'] = 'حدث خطأ ما. إن لم تكن تحاول حذف مفتاح SSL لمخدمك، فمن الممكن أنك تتعرض إلى هجوم ضار. لم يتم اتخاذ أي إجراء.';
$string['deny'] = 'أرفض';
$string['description'] = 'الوصف';
$string['duplicate_usernames'] = 'فشلنا في إنشاء فهرس في الأعمدة "mnethostid" و "username" في جدول المستخدم الخاص بك.<br />قد يحدث ذلك عندما يكون لديك <a href="{$a}" target="_blank">أسماء مستخدمين متكررة في جدولك</a>.<br />عملية الترقية يمكنها الاكتمال مع ذلك. أنقر على الزر أعلاه، لتظهر تعليمات عن كيفية إصلاح هذه المشكلة في نافذة جديدة. يمكنك النظر في ذلك عند انتهاء الترقية.<br />';
$string['enabled_for_all'] = '(هذه الخدمة قد تم تمكينها لكل المضيفين).';
$string['enterausername'] = 'لطفاً، أدخل اسم المستخدم، أو قائمة بأسماء المستخدمين مفصولاً بينها بفوارز.';
$string['error7020'] = 'هذا الخطأ يحدث عادة إذا كان الموقع البعيد قد أنشأ سجلاً لك بالتسمية الخاطئة لـ wwwroot، على سبيل المثال، https://yoursite.com بدلاً من https://www.yoursite.com. لطفاً، تواصل مع المشرف على الموقع البعيد لإبلاغه بالنص الصحيح (كما هو محدد في الملف config.php) وأطلب منه تحديث السجل الخاص بالاستضافة.';
$string['error7022'] = 'الرسالة التي بعثتها إلى الموقع البعيد تم تشفيرها بشكل صحيح، لكنها غير موقعة. هذا أمر غير متوقع تماماً؛ قد يكون عليك الإبلاغ عن هذا الأمر إذا وقع (معطياً أكبر قدر ممكن من المعلومات عن أرقام إصدارات التطبيق الذي قيد التشغيل... إلخ.).';
$string['error7023'] = 'الموقع البعيد حاول فك تشفير رسالتك بكل المفاتيح التي يمتلكها والمسجلة لموقعك. لقد فشل في ذلك. قد تتمكن من حل هذه المشكلة عبر إعادة تبادل المفاتيح يدوياً مع الموقع البعيد. من غير المرجح أن يحدث ذلك إلا إذا كنت منقطعاً عن التواصل مع الموقع البعيد لعدة أشهر.';
$string['error7024'] = 'لقد بعثت رسالة غير مشفرة إلى الموقع البعيد، ولكنه لا يقبل الاتصالات غير المشفرة من طرفك. هذا أمر غير متوقع تماماً؛ قد يكون عليك الإبلاغ عن هذا الأمر إذا وقع (معطياً أكبر قدر ممكن من المعلومات عن أرقام إصدارات التطبيق الذي قيد التشغيل... إلخ.).';
$string['error7026'] = 'المفتاح الذي تم به توقيع رسالتك مختلف عن المفتاح المسجل في الموقع البعيد لمخدمك. لا بل إن المضيف البعيد حاول جلب مفتاحك الحالي وفشل في ذلك. لطفاً أعد تبادل المفاتيح يدوياً مع المضيف البعيد ثم حاول مجددأً.';
$string['error709'] = 'الموقع البعيد فشل في الحصول على مفتاح SSL منك.';
$string['eventaccesscontrolcreated'] = 'سيطرة وصول تم إنشاؤها';
$string['eventaccesscontrolupdated'] = 'سيطرة وصول تم تحديثها';
$string['expired'] = 'ستنتهي صلاحية هذا المفتاح في';
$string['expires'] = 'صالح حتى';
$string['expireyourkey'] = 'إحذف هذا المفتاح';
$string['expireyourkeyexplain'] = 'يقوم مودل تلقائياً بتدوير مفاتيحك كل 28 يوم (إفتراضياً) ولكنك تمتلك خيار  إنهاء صلاحية هذا المفتاح <em>يدوياً</em> في أي وقت. هذا سيكون مفيداً إن كنت تعتقد أن هذا المفتاح قد تم كشفه. سيتم توليد البديل مباشرة وبشكل تلقائي.<br />حذف هذا المفتاح سيؤدي إلى استحالة نجاح التطبيقات الأخرى في الاتصال بك، حتى تقوم يدوياً بالاتصال بكل مشرف وتزويده بمفتاحك الجديد.';
$string['exportfields'] = 'الحقول المطلوب تصديرها';
$string['failedaclwrite'] = 'فشلت الكتابة في قائمة سيطرة الوصول لشبكة مودل للمستخدم \'{$a}\'.';
$string['findlogin'] = 'إعثر على سجل الدخول';
$string['forbidden-function'] = 'هذه الوظيفة لم يتم تمكينها لـ RPC.';
$string['forbidden-transport'] = 'طريقة النقل التي تحاول استعمالها غير مسموح بها.';
$string['forcesavechanges'] = 'فرض حفظ التغييرات';
$string['helpnetworksettings'] = 'تهيئة اتصال شبكة مودل';
$string['hidelocal'] = 'إخفاء المستخدمين المحليين';
$string['hideremote'] = 'إخفاء المستخدمين البعيدين';
$string['host'] = 'مستضيف';
$string['hostcoursenotfound'] = 'تعذر العثور على المضيف أو المقرر الدراسي';
$string['hostdeleted'] = 'تم حذف المضيف';
$string['hostexists'] = 'يوجد سلفاً سجل لمضيف بتلك التسمية (قد يكون محذوفاً). <a href="{$a}">أنقر هنا</a> لتعديل ذلك السجل.';
$string['hostlist'] = 'قائمة بالمضيفين المتصلين بالشبكة';
$string['hostname'] = 'اسم المستضيف';
$string['hostnamehelp'] = 'اسم المجال المؤهل بالكامل للمضيف البعيد، مثلاً www.example.com';
$string['hostnotconfiguredforsso'] = 'هذا المخدم غير مهيأ لتسجيل الدخول عن بُعد.';
$string['hostsettings'] = 'إعدادات المضيف';
$string['http_self_signed_help'] = 'إسمح بالاتصالات مستعملاً شهادة مصادقة SSL موقعة ذاتياً (إصنعها بنفسك) في المضيف البعيد.';
$string['http_verified_help'] = 'إسمح بالاتصالات مستعملاً شهادة مصادقة SSL موثوقة لـ PHP في المضيف البعيد، ولكن عبر http (وليس https).';
$string['https_self_signed_help'] = 'إسمح بالاتصالات مستعملاً شهادة مصادقة SSL موقعة ذاتياً (إصنعها بنفسك) لـ PHP في المضيف البعيد عبر http.';
$string['https_verified_help'] = 'إسمح بالاتصالات مستعملاً شهادة مصادقة SSL موثوقة في المضيف البعيد.';
$string['id'] = 'المُعرَّف';
$string['idhelp'] = 'هذه القيمة معينة تلقائياً ولا يمكن تغييرها';
$string['importfields'] = 'الحقول المطلوب استيرادها';
$string['inspect'] = 'إفحص';
$string['installnosuchfunction'] = 'خطأ برمجي! شيء ما يحاول تنصيب دالة شبكة مودل xmlrpc ({$a->method}) من الملف ({$a->file}) ولا يمكن العثور عليه!';
$string['installnosuchmethod'] = 'خطأ برمجي! شيء ما يحاول تنصيب طريقة شبكة مودل xmlrpc ({$a->method}) في الصنف ({$a->class}) ولا يمكن العثور عليه!';
$string['installreflectionclasserror'] = 'خطأ برمجي! فشل استنباط شبكة مودل للطريقة \'{$a->method}\' في الصنف \'{$a->class}\'. رسالة الخطأ الأصلية لو كانت تساعد في إيجاد الحل، هي: \'{$a->error}\'';
$string['installreflectionfunctionerror'] = 'خطأ برمجي! فشل استنباط شبكة مودل للدالة \'{$a->method}\' في الملف \'{$a->class}\'. رسالة الخطأ الأصلية لو كانت تساعد في إيجاد الحل، هي: \'{$a->error}\'';
$string['invalidaccessparam'] = 'معامل وصول غير صحيح.';
$string['invalidactionparam'] = 'معامل إجراء غير صحيح.';
$string['invalidhost'] = 'لا بد أن تعطي مُعرَّف مضيف صحيح';
$string['invalidpubkey'] = 'المفتاح ليس مفتاح SSL صحيح. ({$a})';
$string['invalidurl'] = 'معامل رابط إنترنت غير صحيح.';
$string['ipaddress'] = 'عنوان IP';
$string['is_in_range'] = 'عنوان IP <code>{$a}</code> يمثل مضيفاً صحيحاً موثوقاً منه.';
$string['ispublished'] = '{$a} قام بتمكين هذه الخدمة لك.';
$string['issubscribed'] = '{$a} يشترك بهذه الخدمة في مضيفك.';
$string['keydeleted'] = 'تم حذف مفتاحك بنجاح واستبداله.';
$string['keymismatch'] = 'المفتاح العمومي الذي بحيازتك لهذا المضيف مختلف عن المفتاح العمومي الذي ينشره حالياً. المفتاح المنشور الحالي هو:';
$string['last_connect_time'] = 'وقت آخر اتصال';
$string['last_connect_time_help'] = 'وقت اتصالك الأخير بهذا المضيف.';
$string['last_transport_help'] = 'النقل الذي استعملته للاتصال الأخير بهذا المضيف.';
$string['leavedefault'] = 'استعمل بدلاً من ذلك الإعدادات الافتراضية';
$string['listservices'] = 'أدرج الخدمات';
$string['loginlinkmnetuser'] = '<br />إذا كنت مستخدم بعيد لشبكة مودل وتستطيع <a href="{$a}">تأكيد عنوان بريدك الالكتروني</a>، يمكن إعادة توجيهك إلى صفحة دخولك.<br />';
$string['logs'] = 'سجلات';
$string['managemnetpeers'] = 'إدارة النظراء';
$string['method'] = 'الطريقة';
$string['methodhelp'] = 'مساعدة الطريقة لـ {$a}';
$string['methodsavailableonhost'] = 'الطرق المتاحة في {$a}';
$string['methodsavailableonhostinservice'] = 'الطرق المتاحة لـ {$a->service} في {$a->host}';
$string['methodsignature'] = 'توقيع الطريقة لـ {$a}';
$string['mnet'] = 'شبكة مودل';
$string['mnet_concatenate_strings'] = 'أَتْبِع (حتى) 3 نصوص وأعط الناتج';
$string['mnet_session_prohibited'] = 'المستخدمون من مخدمك ليس مسموحاً لهم حالياً بالتجوال في {$a}.';
$string['mnetdisabled'] = 'شبكة مودل <strong>معطلة</strong>.';
$string['mnetidprovider'] = 'مزود مُعرَّف شبكة مودل';
$string['mnetidproviderdesc'] = 'يمكنك استعمال هذه المزية للحصول على رابط يمكنك تسجيل الدخول عبره، لو كنت تستطيع تقديم عنوان البريد الالكتروني الصحيح المطابق لما يمتلكه اسم المستخدم الذي سبق وأَن حاولتَ الدخول به.';
$string['mnetidprovidermsg'] = 'ينبغي أن تكون قادراً على تسجيل الدخول إلى مزود {$a} الخاص بك.';
$string['mnetidprovidernotfound'] = 'عذراً، ولكن تعذر العثور على مزيد من المعلومات.';
$string['mnetpeers'] = 'النظراء';
$string['mnetservices'] = 'خدمات';
$string['mnetsettings'] = 'إعدادات شبكة مودل';
$string['moodle_home_help'] = 'مسار الصفحة الرئيسية لتطبيق شبكة مودل في المخدم البعيد، بعبارة أخرى، /moodle/.';
$string['name'] = 'الاسم';
$string['net'] = 'التشبيك';
$string['networksettings'] = 'إعدادات الشبكة';
$string['never'] = 'ابداَ';
$string['noaclentries'] = 'لا إدخالات في قائمة سيطرة وصول SSO';
$string['noaddressforhost'] = 'عذراً، ولكن تعذر التوصل إلى اسم المضيف ({$a})!';
$string['nocurl'] = 'مكتبة PHP cURL غير منصبة';
$string['nolocaluser'] = 'لا يوجد سجل محلي للمستخدم البعيد، وتعذر إنشاؤه، نظراً لأن هذا المضيف لا يقوم بإنشاء المستخدمين تلقائياً. لطفاً، تواصل مع مشرفك!';
$string['nomodifyacl'] = 'غير مسموح لك بتعديل قائمة سيطرة الوصول لشبكة مودل.';
$string['nonmatchingcert'] = 'موضوع شهادة المصادقة: <br /><em>{$a->subject}</em><br />لا يطابق المضيف الذي جاءت منه:<br /><em>{$a->host}</em>.';
$string['nopubkey'] = 'وقع خطأ ما عند استرجاع المفتاح العمومي.<br /> ربما المضيف لا يسمح بالاتصال بشبكة مودل أو إن المفتاح غير صحيح.';
$string['nosite'] = 'تعذر العثور على المقرر الدراسي الذي على مستوى الموقع';
$string['nosuchfile'] = 'الملف/الدالة {$a} غير موجودة.';
$string['nosuchfunction'] = 'تعذر تعيين موضع الدالة، أو إن الدالة محظورة في RPC.';
$string['nosuchmodule'] = 'تمت مخاطبة الدالة بشكل خاطئ وتعذر تعيين موضعها. لطفاً، استعمل الصيغة
mod/modulename/lib/functionname.';
$string['nosuchpublickey'] = 'تعذر الحصول على المفتاح العمومي للتحقق من التوقيع.';
$string['nosuchservice'] = 'إن خدمة RPC غير شغالة في هذا المضيف.';
$string['nosuchtransport'] = 'لا يوجد ناقل بهذا المُعرَّف.';
$string['notBASE64'] = 'هذا النص ليس بالترميز المبني على تنسيق base64. لا يمكن أن يكون مفتاحاً صحيحاً.';
$string['notPEM'] = 'المفتاح ليس بتنسيق PEM. لن يعمل.';
$string['not_in_range'] = 'عنوان IP <code>{$a}</code> لا يمثل مضيفاً صحيحاً موثوقاً منه.';
$string['notenoughidpinfo'] = 'مزود الهوية الخاص بك لا يعطينا معلومات كافية لإنشاء أو تحديث حسابك محلياً. عذراً!';
$string['notinxmlrpcserver'] = 'حاول الوصول إلى وكيل بعيد لشبكة مودل، ليس في أثناء تنفيذ XMLRPC للمخدم';
$string['notmoodleapplication'] = 'تحذير: هذا ليس تطبيق مودل، لذلك فإن بعض طرق الفحص قد لا تعمل بشكل صحيح.';
$string['notpermittedtojump'] = 'ليست لديك صلاحية بدء جلسة بعيدة من مخدم مودل هذا.';
$string['notpermittedtojumpas'] = 'لا يمكنك بدء جلسة بعيدة طالما تسجل دخولك بمثابة مستخدم آخر.';
$string['notpermittedtoland'] = 'ليست لديك صلاحية بدء جلسة بعيدة.';
$string['off'] = 'مُعطل';
$string['on'] = 'مُمَكن';
$string['options'] = 'الخيارات';
$string['peerprofilefielddesc'] = 'هنا يمكنك تجاوز الإعدادات العامة بشأن تحديد حقول المستخدم التي ينبغي تصديرها واستيرادها عند إنشاء المستخدمين الجدد';
$string['permittedtransports'] = 'النواقل المسموح بها';
$string['phperror'] = 'خطأ داخلي في PHP يمنع من تحقيق طلبك.';
$string['position'] = 'الموضع';
$string['postrequired'] = 'وظيفة الحذف تتطلب التماس POST.';
$string['privacy:metadata'] = 'ملحق شبكة مودل لا يخزن أي بيانات شخصية.';
$string['profileexportfields'] = 'الحقول المطلوب إرسالها';
$string['profilefielddesc'] = 'هنا يمكنك تحديد قائمة حقول الملف الشخصي التي ترسل وتستلم عبر شبكة مودل عند إنشاء أو تحديث حسابات المستخدمين. يمكنك أيضاً تجاوزها لكل نظير في شبكة مودل وبشكل فردي. لاحظ أن الحقول الآتية يتم إرسالها دائماً وهي ليست اختيارية: {$a}';
$string['profilefields'] = 'حقول الملف الشخصي';
$string['profileimportfields'] = 'الحقول المطلوب استيرادها';
$string['promiscuous'] = 'مشوش';
$string['publickey'] = 'المفتاح العمومي';
$string['publickey_help'] = 'يتم الحصول تلقائياً على المفتاح العمومي من المخدم البعيد.';
$string['publickeyrequired'] = 'لا بد أن تقوم بإعطاء المفتاح العمومي.';
$string['publish'] = 'أنشر';
$string['reallydeleteserver'] = 'هل أنت متأكد من رغبتك في حذف المخدم؟';
$string['receivedwarnings'] = 'تم تلقي التحذيرات الآتية';
$string['recordnoexists'] = 'السجل غير موجود.';
$string['reenableserver'] = 'لا - حدد هذا الخيار لإعادة تمكين هذا المخدم.';
$string['registerallhosts'] = 'سجل كل المضيفين (نمط مشوش)';
$string['registerallhostsexplain'] = 'يمكنك أن تختار تسجيل كل المضيفين الذين يحاولون الاتصال بك تلقائياً. هذا معناه أن سجلاً سيظهر في قائمة المضيفين لديك لأي موقع شبكة مودل يتصل بك ويطلب مفتاحك العمومي.<br />أدناه تمتلك خيار تعريف الخدمات لـ \'كل المضيفين\' ولذلك فإن تمكين بعض الخدمات هنا، سيوفرها عرضياً لكل مخدم بعيد.';
$string['registerhostsoff'] = 'تسجيل كل المضيفين حالياً هو <b>معطل</b>';
$string['registerhostson'] = 'تسجيل كل المضيفين حالياً هو <b>مُمَكَّن</b>';
$string['remotecourses'] = 'المقررات الدراسية عن بعد';
$string['remotehost'] = 'المضيف البعيد';
$string['remotehosts'] = 'المضيفون البعيدون';
$string['remoteuser'] = 'المستخدم البعيد {$a->remotetype}';
$string['remoteuserinfo'] = 'الملف التعريفي مأخوذ من <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'التشبيك يتطلب الامتداد OpenSSL';
$string['restore'] = 'استعادة';
$string['returnvalue'] = 'القيمة الراجعة';
$string['reviewhostdetails'] = 'تقييم تفاصيل المضيف';
$string['reviewhostservices'] = 'مراجعة خدمات المضيف';
$string['selectaccesslevel'] = 'لطفاً، إختر مستوى الوصول من القائمة.';
$string['selectahost'] = 'لطفاً، إختر المضيف البعيد.';
$string['service'] = 'اسم الخدمة';
$string['serviceid'] = 'مُعرَّف الخدمة';
$string['servicesavailableonhost'] = 'الخدمة متاحة في {$a}';
$string['serviceswepublish'] = 'الخدمات التي ننشر لها {$a}.';
$string['serviceswesubscribeto'] = 'الخدمات التي نشترك فيها عند {$a}.';
$string['settings'] = 'إعدادات';
$string['showlocal'] = 'أظهر المستخدمين المحليين';
$string['showremote'] = 'أظهر المستخدمين البعيدين';
$string['ssl_acl_allow'] = 'SSO ACL: إسمح للمستخدم \'{$a->user}\' من \'{$a->host}\'';
$string['ssl_acl_deny'] = 'SSO ACL: إمنع المستخدم \'{$a->user}\' من \'{$a->host}\'';
$string['sslverification'] = 'التحقق من SSL';
$string['sslverification_help'] = 'هذا الخيار يسمح بتعريف مستوى الأمان عند الاتصال مع نظير باستعمال HTTPS.

* بلا: بدون أي مستوى للأمان
* التحقق من المضيف فقط: التوثق من شهادة مصادقة SSL للمجال
* التحقق من المضيف والنظير (موصى به): التوثق من المجال ومن منشأ شهادة مصادقة SSL';
$string['ssoaccesscontrol'] = 'سيطرة وصول SSO';
$string['ssoacldescr'] = 'استعمل هذه الصفحة لـ منح/حجب الوصول لمستخدمين معينين من مضيفي شبكة مودل. هذا فعال عندما تقوم بتقديم خدمات SSO للمستخدمين البعيدين. للسيطرة على إمكانيات مستخدميك <em>المحليين</em> في التجوال في مضيفي شبكات مودل الأخرى، استعمل نظام الأدوار لمنحهم إمكانية <em>mnetlogintoremote</em>.';
$string['ssoaclneeds'] = 'لتعمل هذه الوظيفة، ينبغي أن يكون التشبيك مُمَكناً، وكذلك ملحق مصادقة شبكة مودل.';
$string['strict'] = 'صارم';
$string['subscribe'] = 'إشترك';
$string['system'] = 'النظام';
$string['testclient'] = 'وكيل اختبار شبكة مودل';
$string['testtrustedhosts'] = 'إختبر عنواناً';
$string['testtrustedhostsexplain'] = 'أدخل عنوان IP لترى إن كان مضيفاً موثوقاً.';
$string['theypublish'] = 'هم ينشرون';
$string['theysubscribe'] = 'هم يشتركون';
$string['transport_help'] = 'هذه الخيارات متبادلة، لذلك يمكنك إجبار المضيف البعيد على استعمال شهادة مصادقة SSL مُوَقَّعة إن كان مخدمك أيضاً يستعمل شهادة مصادقة SSL مُوَقَّعة.';
$string['trustedhosts'] = 'مضيفو XML-RPC';
$string['trustedhostsexplain'] = '<p>ميكانيكية المضيفين الموثوقين تسمح لبعض الآلات بتنفيذ استدعاءات عبر XML-RPC إلى أي جزء من واجهة برمجة التطبيق في مودل. هذا متاح للنصوص البرمجية من أجل السيطرة على سلوك مودل ويمكن أن يكون خياراً خطيراً للغاية عند تمكينه. إن كنت في شك، أبقه معطلاً.</p>
<p><strong>هذا غير ضروري لأي ميزة قياسية في شبكة مودل!</strong> قم بتمكينه فقط إن كنت تعلم ما أنت فاعل.</p>
<p>لتمكينه، أدخل قائمة عناوين IP أو الشبكات واحداً تلو الآخر
كل واحد منها في سطر جديد. بعض الأمثلة:</p>
مضيفك المحلي:<br />127.0.0.1<br />مضيفك المحلي (مع حجب الشبكة):<br />127.0.0.1/32<br />فقط المضيف ذي عنوان IP 192.168.0.7:<br />192.168.0.7/32<br />أي مضيف ذي عنوان IP يتراوح بين 192.168.0.1 و 192.168.0.255:<br />192.168.0.0/24<br />أي مضيف مهما كان:<br />192.168.0.0/0<br />من الواضح أن المثال الأخير  <strong>ليس</strong> إعداداً موصى به.';
$string['turnitoff'] = 'قم بإيقافه';
$string['turniton'] = 'قم بتشغيله';
$string['type'] = 'النوع';
$string['unknown'] = 'مجهول';
$string['unknownerror'] = 'خطأ غير معروف وقع خلال التفاوض.';
$string['usercannotchangepassword'] = 'لا يمكنك تغيير كلمة مرورك هنا نظراً لكونك مستخدم بعيد.';
$string['userchangepasswordlink'] = '<br /> قد يكون بإمكانك تغيير كلمة مرورك عند موقعك <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a>.';
$string['usernotfullysetup'] = 'حسابك غير مكتمل. عليك <a href="{$a}">الرجوع إلى مجهزك</a> والتأكد من إكمال ملفك الشخصي هناك. قد تحتاج إلى الخروج وتسجيل الدخول مرة أخرى ليكون ذلك ساري المفعول.';
$string['usersareonline'] = 'تحذير: مستخدمو {$a} من ذلك المخدم سجلوا دخولهم حالياً إلى موقعك.';
$string['validated_by'] = 'تم التحقق منه من قبل الشبكة: <code>{$a}</code>';
$string['verifyhostandpeer'] = 'تحقق من المضيف ومن النظير';
$string['verifyhostonly'] = 'تحقق من المضيف فقط';
$string['verifysignature-error'] = 'فشل التحقق من التوقيع. وقع خطأ ما.';
$string['verifysignature-invalid'] = 'فشل التحقق من التوقيع. يبدو أن تلك الحمولة لم يتم توقيعها من قِبَلِك.';
$string['version'] = 'الإصدار';
$string['warning'] = 'تحذير';
$string['wrong-ip'] = 'عنوان IP الخاص بك لا يطابق العنوان المسجل لدينا.';
$string['xmlrpc-missing'] = 'ينبغي أن يكون XML-RPC منصباً في مبنى PHP عندك لتتمكن من استعمال هذه الميزة.';
$string['yourhost'] = 'مضيفك';
$string['yourpeers'] = 'نظراؤك';
