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
 * Strings for component 'auth', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'ملاحق المصادقة المتاحة';
$string['allowaccountssameemail'] = 'السماح لعدة حسابات باستخدام نفس البريد الإلكتروني';
$string['allowaccountssameemail_desc'] = 'في حالة التمكين، يمكن لأكثر من حساب مستخدم أن يستخدموا عنوان البريد الإلكتروني نفسه. قد يسبب ذلك مشكلات متعلقة بالأمان أو الخصوصية، على سبيل المثال: البريد الإلكتروني الذي يرسل لتأكيد تغيير كلمة المرور.';
$string['alternatelogin'] = 'لو قمت بإدخال رابط هنا، سيستخدم كصفحة دخول إلى الموقع، يجب أن تحتوي الصفحة على نموذج يتضمن خاصية الإجراء <strong>\'{$a}\'</strong> و ترجع الحقول
 <strong>اسم المستخدم</strong> و
<strong>كلمة المرور</strong>.
<br/> كن حذرا في إدخال العنوان الصحيح في حالة إدخالك عنوان خاطئ سيتم حجبك عن الموقع.
<br/> اترك هذا الإعداد فارغاً ليتم استخدام صفحة الدخول الافتراضية.';
$string['alternateloginurl'] = 'رابط دخول بديل';
$string['auth_changepasswordhelp'] = 'مساعدة تغيير كلمة المرور';
$string['auth_changepasswordhelp_expl'] = 'اعرض مساعدة كلمة المرور المفقودة للمستخدمين الذين فقدوا {$a} كلمات مرورهم . هذا سيتم عرضه إمّا بالإضافة إلى أَو بدلاً مِنْ
 <strong>رابط تغيير كلمة المرور </strong>
 أو تغير كلمة المرور من داخل مودل .';
$string['auth_changepasswordurl'] = 'رابط تغير كلمة المرور';
$string['auth_changepasswordurl_expl'] = 'حدّدْ عنوان لإرْسال المستخدمين الذين فَقدَوا {$a} كلمة المرور.
ضع <strong>ضع استخدام صفحة قياسية لتغيير كلمة المرور</strong> إلى<strong>لا</strong>.';
$string['auth_changingemailaddress'] = 'لقد طلبت تغيير بريدك الإلكتروني من {$a->oldemail} إلى {$a->newemail}. لأسباب أمنية أرسلنا  لك رسالة إلى بريدك الإلكتروني الجديد، للتأكد من أنه ملكك. سيتم تحديث بريدك الإلكتروني حالما تفتح الرابط المرسل لك في تلك الرسالة.';
$string['auth_common_settings'] = 'الإعدادات العامة';
$string['auth_data_mapping'] = 'تخطيط البيانات';
$string['authenticationoptions'] = 'خيارات التحقق';
$string['auth_fieldlock'] = 'قفل القيمة';
$string['auth_fieldlock_expl'] = '<p><b>قيمة القفل: </b> إذا مكّن ، سَيَمْنعُ المستخدمين و مدراء مودل مِنْ تَحرير الحقلِ مباشرة. استعملْ هذا الخيارِ إذا كنت تحتفظ بهذه البياناتِ في نظامِ مصادقة خارجي. </p>';
$string['auth_fieldlockfield'] = 'أقفل القيمة({$a})';
$string['auth_fieldlocks'] = 'اغلق حقول المستخدم';
$string['auth_fieldlocks_help'] = '<p> تستطيع تأمين حقول بيانات المستخدم. هذا مفيد للمواقعِ التي يقوم مشرفوها بتحرير بيانات المستخدمين يدوياً أو باستعمال خدمة \'رفع المستخدمين\'. لو قمت بتأمين حقول مطلوبة من قبل مودل، تأكد من تزويدك لتلك البيانات عندما تنشئ حسابات المستخدمين؛ وإلا ستكون الحسابات غير صالحة للإستعمال. </p> <p>خذ في اعتبارك وضع إعداد حالة التأمين على \'عدم التأمين إذا كان الحقل فارغاً\' لتفادي هذه المشكلة.</p>';
$string['auth_fieldmapping'] = 'تعيين البيانات ({$a})';
$string['authinstructions'] = 'هنا يمكنك إعطاء تعليمات للمستخدمين لديك حتى يعرفوا أسماء المستخدمين وكلمات المرور التي يتعين عليهم استخدامها. سيظهر النص الذي تقوم بإدخاله هنا على صفحة الدخول. إذا تركت هذا المكان فارغا فلن يتم طباعة أية تعليمات.';
$string['auth_invalidnewemailkey'] = 'خطأ: إذا كنت تحاول تأكيد تغيير بريد إلكتروني، فلربما أخطأت في نسخ الرابط المرسل لك إلى البريد الإلكتروني. رجاءً انسخ العنوان و حاول مرة أخرى .';
$string['authloginviaemail'] = 'السماح بتسجيل الدخول عبر البريد الإلكتروني';
$string['authloginviaemail_desc'] = 'السماح للمستخدمين باستخدام كل من اسم المستخدم وعنوان البريد الإلكتروني (إذا كان فريدًا) لتسجيل الدخول إلى الموقع.';
$string['auth_multiplehosts'] = 'يمكن تحديد أكثر من مستضيف أو عنوان (host1.com, host2.net, host3.org)  أو  (eg xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'طريقة التوثيق {$a} لم يتم ضبطها.';
$string['auth_outofnewemailupdateattempts'] = 'لقد وصلت للحد الأقصى المسموح لمحاولات تغيير بريدك الإلكتروني. لقد تم إلغاء طلبك.';
$string['auth_passwordisexpired'] = 'انتهت صلاحية كلمة المرور. فضلاً غيرها الآن.';
$string['auth_passwordwillexpire'] = 'ستنتهي صلاحية كلمة مرورك خلال {$a} من الأيام. هل ترغب في تغيير كلمة المرور الآن؟';
$string['auth_remove_delete'] = 'حذف كامل داخلي';
$string['auth_remove_keep'] = 'إبقاء داخلي';
$string['auth_remove_suspend'] = 'تعليق داخلي';
$string['auth_remove_user'] = 'حدد ماذا سيفعل بحسابات المستخدمين الداخلية أثناء المزامنة الشاملة عندما يكون المستخدم قد حذف من المصدر الخارجي.
فقط المستخدمين المعلقين يتم إعادتهم بشكل تلقائي إذا ظهروا مرة ثانية في المصدر الخارجي.';
$string['auth_remove_user_key'] = 'المستخدم الخارجي المحذوف';
$string['auth_sync_script'] = 'نص المزامنة الدورية';
$string['auth_sync_suspended'] = 'عند التمكين، سيتم استخدام السمة المعلّقة لتحديث حالة تعليق حساب المستخدم المحلي.';
$string['auth_sync_suspended_key'] = 'مزامنة حالة تعليق المستخدم المحلي';
$string['auth_updatelocal'] = 'حذث المعلومات المحلية';
$string['auth_updatelocal_expl'] = '<p><b>تحديث محلي:</b> عند تفعيله، سيتم تحديث الحقل (عبر مصادقة خارجية) كلما سجل المستخدم دخوله أو عند إجراء مزامنة للمستخدم. يجب قفل الحقول المعدّة للتحديث المحلّي.</p>';
$string['auth_updatelocalfield'] = 'حدِّث المحلي ({$a})';
$string['auth_updateremote'] = 'حدث المعلمومات الخارجية';
$string['auth_updateremote_expl'] = '<p><b>تحديث خارجي:</b> عند التفعيل، سيتم تحديث المصادقة الخارجية عند تحديث سجل المستخدم. يجب إلغاء قفل الحقول للسماح بتحريرها.</p>';
$string['auth_updateremotefield'] = 'حدِّث الخارجي ({$a})';
$string['auth_updateremote_ldap'] = '<p> <b> ملاحظة : </b> تحديث بيانات (LDAP) الخارجية تَتطلّبُ منك وَضع (binddn) و(bindpw) لربط المستخدم بصلاحيات التَحرير لكلّ سجلات المستخدم . حالياً لا تحتفظ بخواصَ متعددةَ القيم ، وسَتُزيلُ القيم الإضافيةَ عند التحديث . </p>';
$string['auth_user_create'] = 'مكّن إنشاء مستخدم';
$string['auth_user_creation'] = 'يستطيع المستخدمون الجدد أو (المجهولون) إنشاء حسابات على مصدر المصادقة الخارجيّ و تأكيد التسجيل عبر البريد الإلكتروني .
إذا مكنت هذه الخاصية, فتذكّر إعداد خيارات الوحدة المخصصة لإنشاء المستخدم أيضاً.';
$string['auth_usernameexists'] = 'اسم المستخدم المختار موجود، الرجاء اختيار آخر جديد.';
$string['auth_usernotexist'] = 'لا يمكن تحديث مستخدم غير موجود: {$a}';
$string['auto_add_remote_users'] = 'إضافة تلقائية للمستخدمين البعيدين';
$string['cannotmapfield'] = 'لا يمكن تعيين الحقل "{$a->fieldname}" لأن اسمه المختصر "{$a->shortname}" طويل جدًا. للسماح بتعيينها ، يجب تقليل الاسم المختصر إلى {$a->charlimit} حرفًا.
 <a href="{$a->link}">تحرير حقول الملف الشخصي للمستخدم</a>';
$string['changepassword'] = 'رابط تغيير كلمة المرور';
$string['changepasswordhelp'] = 'رابط لصفحة استعادة كلمة المرور المفقودة ، والتي سيتم إرسالها إلى المستخدمين في رسالة بريد إلكتروني. لاحظ أن هذا الإعداد لن يكون له أي تأثير إذا تم تعيين رابط  لكلمة المرور المفقودة في الإعدادات العامة للمصادقة.';
$string['chooseauthmethod'] = 'إختر طريقة المصادقة';
$string['chooseauthmethod_help'] = 'هذا الإعداد يحدد طريقة المصادقة المستخدمة عند تسجيل دخول المستخدمين. يجب اختيار إضافات المصادقة المفعّلة فقط، وإلا فلن يتمكن المستخدم من تسجيل الدخول. لمنع المستخدم من تسجيل الدخول، اختر "منع تسجيل الدخول".';
$string['createpassword'] = 'قم بتوليد كلمة المرور وأبلغ المستخدم';
$string['createpasswordifneeded'] = 'إنشاء كلمة مرور إذا لزم الأمر وإرسالها عبر البريد الإلكتروني';
$string['emailchangecancel'] = 'إلغاء تغيير البريد';
$string['emailchangepending'] = 'التغيير معلق. افتح الرابط الذي تم إرساله لك على {$a->preference_newemail}.';
$string['emailnowexists'] = 'البريد الإلكتروني الذي تريد تخصيصه في حسابك تم تخصيصه من قبل شخص آخر. لذا تم إلغاء طلبك لتغيير البريد، يمكنك المحاولة مرة أخرى مع بريد آخر.';
$string['emailupdate'] = 'تحديث البريد الإلكتروني';
$string['emailupdatemessage'] = 'عزيزي {$a->fullname},
 لقد طلبت تغيير عنوان بريدك الإلكتروني لحساب المستخدم الخاص بك على {$a->site}.
يرجى فتح الرابط  التالي في متصفحك لتأكيد هذا التغيير.
إذا كانت لديك أي أسئلة ، فيرجى الاتصال بالدعم على: {$a->supportemail}

{$a->url}';
$string['emailupdatesuccess'] = 'تم تغيير البريد الإلكتروني للمستخدم <em>{$a->fullname}</em> بنجاح إلى <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'تأكيد تحديث البريد الإلكتروني في {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'ينبغي أن لا يزيد عدد الأحرف المتماثلة المتتالية في كلمة المرور على {$a} من الأحرف.';
$string['errorminpassworddigits'] = 'يجب أن تتضمن كلمة المرور على الأقل {$a} من الأرقام.';
$string['errorminpasswordlength'] = 'يجب أن تتكون كلمة المرور على الأقل من {$a} من الأحرف.';
$string['errorminpasswordlower'] = 'يجب أن تتضمن كلمة المرور على الأقل {$a} من الحروف الصغيرة.';
$string['errorminpasswordnonalphanum'] = 'يجب أن تحتوي كلمات المرور على {$a} على الأقل من الرموز غير الأبجدية الرقمية  مثل * أو - أو #.';
$string['errorminpasswordupper'] = 'يجب أن تتضمن كلمة المرور على الأقل {$a} من الحروف الكبيرة.';
$string['errorpasswordreused'] = 'تم استخدام كلمة المرور هذه من قبل ، ولا يُسمح بإعادة استخدامها';
$string['errorpasswordupdate'] = 'خطأ في تحديث كلمة المرور ، لم يتم تغيير كلمة المرور .';
$string['eventuserloggedin'] = 'قام المستخدم بتسجيل الدخول';
$string['eventuserloggedinas'] = 'قام المستخدم بتسجيل الدخول كمستخدم آخر';
$string['eventuserloginfailed'] = 'فشل تسجيل دخول المستخدم';
$string['forcechangepassword'] = 'فرض تغيير كلمة المرور';
$string['forcechangepasswordfirst_help'] = 'أفرض على المستخدمين تغيير كلمة المرور عند دخولهم إلى مودل للمرة الأولى.';
$string['forcechangepassword_help'] = 'أفرض على المستخدمين تغيير كلمة المرور عند دخولهم إلى مودل في المرة القادمة.';
$string['forgottenpassword'] = 'إذا أدخلت رابط هنا، سيستخدم كصفحة استعادة كلمات المرور المفقودة لهذا الموقع.
هذا موجه للمواقع التي تتعامل مع كلمات المرور خارج مودل بالكامل.
اتركه فارغاً لاستخدام صفحة استعادة كلمة المرور الافتراضية.';
$string['forgottenpasswordurl'] = 'رابط كلمة المرور المفقودة';
$string['getrecaptchaapi'] = 'لاستخدام reCAPTCHA يجب الحصول على مفتاح واجهة برمجة التطبيقات من: <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'زر دخول الضيف';
$string['incorrectpleasetryagain'] = 'غير صحيح، حاول مرة أخرى.';
$string['infilefield'] = 'الحقل المطلوب في الملف';
$string['informminpassworddigits'] = 'على الأقل {$a} من الأرقام';
$string['informminpasswordlength'] = 'على الأقل {$a} من الأحرف';
$string['informminpasswordlower'] = 'على الأقل {$a} من الحروف الصغيرة';
$string['informminpasswordnonalphanum'] = 'ما لا يقل عن {$a} حرف (أحرف) غير أبجدية أو رقمية مثل * أو - أو #';
$string['informminpasswordreuselimit'] = 'يمكن إعادة استخدام كلمة المرور بعد {$a} تغييرات';
$string['informminpasswordupper'] = 'على الأقل {$a} من الحروف الكبيرة';
$string['informpasswordpolicy'] = 'يجب أن تتضمن كلمة المرور {$a}';
$string['instructions'] = 'التعليمات';
$string['internal'] = 'داخلي';
$string['limitconcurrentlogins'] = 'الحد من عمليات تسجيل الدخول المتزامنة';
$string['limitconcurrentlogins_desc'] = 'إذا تم تفعيله، فسيتم الحد من عدد عمليات تسجيل الدخول المتزامنة لكل مستخدم. سيتم إنهاء الجلسة الأقدم عند الوصول إلى الحد الأقصى. يُرجى ملاحظة أن المستخدمين قد يفقدون جميع الأعمال التي لم يتم حفظها. هذا الإعداد غير متوافق مع تسجيل الدخول الأحادي (SSO) Single Sign-on (SSO).';
$string['locked'] = 'مغلق';
$string['md5'] = 'تشفير MD5';
$string['nopasswordchange'] = 'لا يمكن تغيير كلمة المرور';
$string['nopasswordchangeforced'] = 'لا يمكنك الاستمرار دون تغيير كلمة مرورك، مع ذلك، يبدو أنه لا توجد صفحة مخصصة لتغييرها. رجاءً قم بالاتصال بمشرف مودل.';
$string['noprofileedit'] = 'لا يمكن تحرير معلومات الحساب';
$string['ntlmsso_attempting'] = 'محاولة تسجيل الدخول الموحد (SSO) عبر شبكة مودل المحلية الداخلية...';
$string['ntlmsso_failed'] = 'فشل تسجيل الدخول التلقائي، حاول من صفحة تسجيل الدخول العادية...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO غير مفعّل.';
$string['passwordhandling'] = 'حقل التعامل مع كلمة المرور';
$string['plaintext'] = 'نص عادي';
$string['pluginnotenabled'] = 'ملحق المصادقة \'{$a}\' معطل.';
$string['pluginnotinstalled'] = 'ملحق المصادقة \'{$a}\' غير منصب.';
$string['potentialidps'] = 'الدخول باستخدام حسابك في :';
$string['privacy:metadata:userpref:createpassword'] = 'يشير إلى أنه يجب إنشاء كلمة مرور للمستخدم';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'يشير إلى ما إذا كان يجب على المستخدم تغيير كلمة المرور الخاصة به عند تسجيل الدخول';
$string['privacy:metadata:userpref:loginfailedcount'] = 'عدد المرات التي فشل فيها المستخدم في تسجيل الدخول';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'عدد المرات التي فشل فيها المستخدم في تسجيل الدخول منذ آخر تسجيل دخول ناجح';
$string['privacy:metadata:userpref:loginfailedlast'] = 'التاريخ الذي تم فيه تسجيل آخر محاولة تسجيل دخول فاشلة';
$string['privacy:metadata:userpref:loginlockout'] = 'ما إذا كان حساب المستخدم مقفلاً بسبب محاولات تسجيل الدخول الفاشلة، وتاريخ قفل الحساب';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'يشير إلى أن حساب المستخدم يجب ألا يخضع أبدًا للإغلاق';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'عند الإقفال، السر الذي يجب على المستخدم استعماله لفتح حسابه';
$string['recaptcha'] = 'إعادة كلمة التحقق';
$string['recaptcha_help'] = 'اختبار CAPTCHA هو منع إساءة الاستخدام من البرامج الآلية. اتبع التعليمات للتحقق من أنك شخص. قد يكون هذا مربعًا للتحقق ، أو الأحرف المعروضة في صورة يجب عليك إدخالها أو مجموعة من الصور للاختيار منها.

إذا لم تكن متأكدًا من الصور ، فيمكنك محاولة الحصول على اختبار CAPTCHA آخر أو اختبار CAPTCHA الصوتي.';
$string['security_question'] = 'سؤال الأمان';
$string['selfregistration'] = 'التسجيل الذاتي';
$string['selfregistration_help'] = 'إذا تم تحديد ملحق مصادقة، كالتسجيل الذاتي عبر البريد الإلكتروني، فهذا يسمح للمستخدمين المحتملين بتسجيل أنفسهم وإنشاء حساباتهم. وهذا قد يفسح المجال لأشخاص مزعجين بإنشاء حسابات في الموقع واستعمال منشورات المنتديات، والمدونات وغيرها لنشر إزعاجاتهم. لتجنّب هذا الخطر، ينبغي إلغاء تفعيل التسجيل التلقائي أو الحد منه عبر الإعداد <em>مجالات البريد المسموح بها</em>.';
$string['settingmigrationmismatch'] = 'تم اكتشاف عدم تطابق القيم في أثناء تصحيح أسماء إعداد الملحق! يحتوي ملحق المصادقة \'{$a->plugin}\' على الإعداد \'{$a->setting}\' الذي تمت تهيئته على \'{$a->legacy}\' تحت الاسم القديم و \'{$a->current}\' تحت الاسم الحالي. تم تعيين القيمة الأخيرة على أنها القيمة الصالحة ولكن يجب عليك التحقق وتأكيدها بأنها هي المتوقعة.';
$string['sha1'] = 'تشفير SHA-1';
$string['showguestlogin'] = 'تستطيع إظهار أو إخفاء زر دخول الضيف في صفحة الدخول.';
$string['stdchangepassword'] = 'استعمال الصفحة القياسية لتغيير كلمة المرور';
$string['stdchangepassword_expl'] = 'إذا كان نظام المصادقة الخارجي يسمح بتغيير كلمة المرور من خلال مودل، حوّل هذا الإعداد إلى (نعم).
هذا الإعداد يتخطى \'رابط تغيير كلمة المرور\'.';
$string['stdchangepassword_explldap'] = 'ملاحظة: ينصح باستخدام LDAP عبر قناة SSL المشفرة (ldaps://) إن كان خادم LDAP بعيداً.';
$string['suspended'] = 'الحساب معلّق';
$string['suspended_help'] = 'حسابات المستخدمين المعلقة لا يمكنهم تسجيل الدخول أو استخدام خدمات شبكة الإنترنت، و سيتم تجاهل أيّ رسائل صادرة.';
$string['testsettings'] = 'أختبر الإعدادات';
$string['testsettingsheading'] = 'اختبار إعدادات المصادقة - {$a}';
$string['unlocked'] = 'افتح';
$string['unlockedifempty'] = 'افتح إذا كان فارغا';
$string['update_never'] = 'أبداً';
$string['update_oncreate'] = 'في إنشائه';
$string['update_onlogin'] = 'عند كل تسجيل دخول';
$string['update_onupdate'] = 'أثناء التحديث';
$string['user_activatenotsupportusertype'] = 'الدالة auth: ldap user_activate() لا تدعم نوع المستخدم المحدد: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() لا يدعم نوع المستخدم المحدد (...حتى الآن)';
$string['username'] = 'اسم المستخدم';
$string['username_help'] = 'لطفاً، كن على دراية بأن بعض ملاحق المصادقة لن تسمح لك بتغيير اسم المستخدم.';
