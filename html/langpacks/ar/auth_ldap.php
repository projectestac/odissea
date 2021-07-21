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
 * Strings for component 'auth_ldap', language 'ar', version '3.11'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'تعذر إنشاء الحساب الجديد في المجلد النشط. تأكد من تلبية كل المتطلبات لجعله ممكناً (اتصال LDAPS، ربط المستخدم بصلاحيات كافية،... إلخ.)';
$string['auth_ldap_attrcreators'] = 'قائمة المجموعات أو السياقات التي أعضاؤها يُسمح لهم بإنشاء السمات. إفصل ما بين المجموعات المتعددة بفارزة منقوطة \';\'. عادة شيء مشابه لـ \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'منشؤو السمات';
$string['auth_ldap_auth_user_create_key'] = 'إنشاء المستخدمين خارجياً';
$string['auth_ldap_bind_dn'] = 'إذا أردت استخدام وظيفة bind-user للبحث عن مستخدمين فيمكنك تعيين ذلك هنا، كأن تحدد مثلا: \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'الاسم المميز';
$string['auth_ldap_bind_pw'] = 'كلمة مرور bind-user';
$string['auth_ldap_bind_pw_key'] = 'كلمة المرور';
$string['auth_ldap_bind_settings'] = 'إعدادات بايند';
$string['auth_ldap_changepasswordurl_key'] = 'رابط تغيير كلمة المرور';
$string['auth_ldap_contexts'] = 'قائمة السياقات الموجود بها المستخدمين، حيث يفصل بين كل سياق وآخر بفاصلة هكذا: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'السياقات';
$string['auth_ldap_create_context'] = 'لو مكّنت إنشاء المستخدم بتأكيد البريد الإلكترونيّ, حدّد السّياق إنشاء مستخدمون . يجب أن يكون هذا السّياق مختلف عن المستخدمين الآخرين لمنع القضايا الأمنيّة . لا تحتاج لإضافة هذا السّياق سياق الـمتغير(ldap_context-variable) مودل سيبحث عن المستخدمين من هذا السّياق تلقائيًّا';
$string['auth_ldap_create_context_key'] = 'السياق للمستخدمين الجدد';
$string['auth_ldap_create_error'] = 'وقع خطأ عند إنشاء المستخدم في LDAP.';
$string['auth_ldap_expiration_desc'] = 'إختر \'{$a->no}\' لتعطيل التحقق من كلمات المرور منتهية الصلاحية أو \'{$a->ldapserver}\' لقراءة وقت انتهاء صلاحية كلمة المرور مباشرة من مخدم LDAP.';
$string['auth_ldap_expiration_key'] = 'إنتهاء الصلاحية';
$string['auth_ldap_expiration_warning_desc'] = 'عدد الأيام قبل إطلاق تحذير انتهاء صلاحية كلمة المرور.';
$string['auth_ldap_expiration_warning_key'] = 'تحذير انتهاء الصلاحية';
$string['auth_ldap_expireattr_desc'] = 'إختياري: تجاوز سمة LDAP التي تخزن وقت انتهاء صلاحية كلمة المرور.';
$string['auth_ldap_expireattr_key'] = 'سمة انتهاء الصلاحية';
$string['auth_ldap_graceattr_desc'] = 'إختياري: تجاوز سمة مهلة الدخول';
$string['auth_ldap_gracelogin_key'] = 'سمة مهلة الدخول';
$string['auth_ldap_gracelogins_desc'] = 'تمكين دعم إمهال دخول لـ LDAP. بعد انتهاء صلاحية كلمة المرور، يمكن للمستخدم الدخول حتى تصفير عداد مهلة الدخول. تمكين هذا الإعداد يؤدي إلى عرض رسالة مهلة الدخول إذا كانت كلمة المرور منتهية الصلاحية.';
$string['auth_ldap_gracelogins_key'] = 'تسجيلات الدخول الممهولة';
$string['auth_ldap_groupecreators'] = 'قائمة المجموعات أو السياقات التي أعضاؤها يُسمح لهم بإنشاء المجموعات. إفصل ما بين المجموعات المتعددة بفارزة منقوطة \';\'. عادة شيء مشابه لـ \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_groupecreators_key'] = 'منشؤو المجموعات';
$string['auth_ldap_host_url'] = 'حدد مضيف برتوكول الدخول على الدليل الخفيف LDAP بشكل رابط ويب مثل \'ldap://ldap.myorg.com/\' أو \'ldaps://ldap.myorg.com/\'. إفصل ما بين المخدمات المتعددة بفارزة منقوطة \';\' للحصول على دعم تجاوز الفشل.';
$string['auth_ldap_host_url_key'] = 'عنوان المستضيف';
$string['auth_ldap_ldap_encoding'] = 'الترميز المستعمل من قبل مخدم LDAP، غالباً هو utf-8. إذا تم اختيار الإصدار الثاني من LDAP، فإن المجلد النشط سيستعمل الترميز المهيأ فيه، مثل cp1252 أو cp1250.';
$string['auth_ldap_ldap_encoding_key'] = 'ترميز إل بي أي دي';
$string['auth_ldap_login_settings'] = 'أعدادات الدخول';
$string['auth_ldap_memberattribute'] = 'حدد صفة العضو المستخدم، عندما ينتمي المستخدمون لمجموعة. عادة "عضو"';
$string['auth_ldap_memberattribute_isdn'] = 'معالجة التجاوز لقيم سمة العضو';
$string['auth_ldap_memberattribute_isdn_key'] = 'سمة العضو التي تستعمل dn';
$string['auth_ldap_memberattribute_key'] = 'سمة العضو';
$string['auth_ldap_no_mbstring'] = 'أنت بحاجة إلى امتداد mbstring لإنشاء المستخدمين في المجلد النشط.';
$string['auth_ldap_noconnect'] = 'وحدة LDAP لا يمكنها الاتصال بالمخدم: {$a}';
$string['auth_ldap_noconnect_all'] = 'وحدة LDAP لا يمكنها الاتصال بأي مخدم: {$a}';
$string['auth_ldap_noextension'] = 'لا يبدو أن وحدة PHP LDAP موجودة. لطفاً، تأكد من أنها منصبة ومُمَكَّنة إذا أردت استعمال ملحق المصادقة هذا.';
$string['auth_ldap_objectclass'] = 'إختياري: تجاوز objectClass المستعمل في تسمية/بحث المستخدمين في ldap_user_type. َعادة، لست بحاجة إلى تغيير هذا.';
$string['auth_ldap_objectclass_key'] = 'صنف المكون';
$string['auth_ldap_opt_deref'] = 'يحدد كيفية معاملة الاستعارات في أثناء البحث. إختر واحداً من القيم الآتية: "لا" (LDAP_DEREF_NEVER) أو "نعم" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'استعارات الإحالة';
$string['auth_ldap_passtype'] = 'يحدد تنسيق كلمات المرور الجديدة أو المعدلة في مخدم LDAP.';
$string['auth_ldap_passtype_key'] = 'تنسيق كلمة المرور';
$string['auth_ldap_passwdexpire_settings'] = 'إعدادات انتهاء صلاحية كلمة مرور LDAP';
$string['auth_ldap_preventpassindb'] = 'إختر نعم لمنع حفظ كلمات المرور في قاعدة بيانات مودل.';
$string['auth_ldap_preventpassindb_key'] = 'إمنع تخبئة كلمة المرور';
$string['auth_ldap_rolecontext'] = 'سياق {$a->localname}';
$string['auth_ldap_rolecontext_help'] = 'سياق LDAP المستعمل في تفصيل <i>{$a->localname}</i>. إفصل ما بين المجموعات المتعددة بفارزة منقوطة \';\'. عادة مثل "cn={$a->shortname},ou=staff,o=myorg".';
$string['auth_ldap_search_sub'] = 'البحث عن المستخدمين في السياقات الفرعية.';
$string['auth_ldap_search_sub_key'] = 'البحث في السياقات الفرعية';
$string['auth_ldap_server_settings'] = 'إعدادات مزود LDAP';
$string['auth_ldap_suspended_attribute'] = 'إختياري: عند إعطاء هذه السمة فسيتم استعمالها في تمكين/تعليق حساب المستخدم المنشأ محلياً';
$string['auth_ldap_suspended_attribute_key'] = 'سمة معلقة';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() لا تدعم usertype المحدد: {$a}';
$string['auth_ldap_update_userinfo'] = 'تحديث معلومات المستخدم (الاسم الأول، الاسم الأخير، العنوان، …) من برتوكول الدخول على الدليل الخفيف  LDAPإلى نظام Moodle . أنظر /auth/ldap/attr_mappings.php للحصول على معلومات عن التخطيط';
$string['auth_ldap_user_attribute'] = 'الوصف المستخدم لتسمية/البحث عن المستخدمين، وغالبا ما يكون \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'سمة المستخدم';
$string['auth_ldap_user_exists'] = 'اسم دخول LDAP موجود سلفاً.';
$string['auth_ldap_user_settings'] = 'أعدادات البحث عن مستخدم';
$string['auth_ldap_user_type'] = 'إختر كيفية خزن المستخدمين في LDAP. هذا الإعداد يحدد أيضاً منحى عمل انتهاء صلاحية الدخول، إمهال الدخول وإنشاء المستخدمين.';
$string['auth_ldap_user_type_key'] = 'نوع المستخدم';
$string['auth_ldap_usertypeundefined'] = 'config.user_type غير معرف أو إن الدالة ldap_expirationtime2unix لا تدعم النوع المحدد!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type غير معرف أو إن الدالة ldap_unixi2expirationtime لا تدعم النوع المحدد!';
$string['auth_ldap_version'] = 'أصدار نظام الـ LDAP المستخدم في خادمك';
$string['auth_ldap_version_key'] = 'لإصدار';
$string['auth_ldapdescription'] = 'هذه الطريقة توفر المصادقة إزاء مخدم خارجي لبروتوكول الدخول على الدليل الخفيف LDAP. إذا كان كل اسم المستخدم وكلمة المرور صحيحين، فإن مودل يقوم بإنشاء إدخال مستخدم جديد في قاعدة بياناته. يمكن لهذا الملحق قراءة سمات المستخدم من بروتوكول الدخول على الدليل الخفيف LDAP وملء الحقول المطلوبة في مودل. لعمليات تسجيل الدخول الاحقة، يتم فقط التحقق من اسم المستخدم وكلمة المرور.';
$string['auth_ldapextrafields'] = 'هذه الحقول اختيارية، ويمكنك ملء بعض حقول المستخدم في نظام Moodle  مسبقا بالمعلومات من <b>حقول LDAP </b> التي تقوم بتحديدها هنا. <br />إذا تركت هذه الحقول فارغة فلن يتم نقل أي شيء من بروتوكول الدخول على الدليل الخفيف LDAP ، بل يتم استخدام الأوضاع الافتراضية الموجودة بنظام Moodle.<br />وفي كل الأحوال، فسوف يتمكن المستخدم من تعديل كل تلك الحقول بعد الدخول.';
$string['auth_ldapnotinstalled'] = 'لا يمكن استعمال مصادقة LDAP. وحدة PHP LDAP غير منصبة.';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'إختر نعم لمحاولة الدخول الموحد مع المجال NTLM. لاحظ أن ذلك ليعمل بنجاح يتطلب تهيئة إضافية في المخدم. للمزيد من التفاصيل، أنظر التوثيقات <a href="https://docs.moodle.org/en/NTLM_authentication">مصادقة NTLM</a>.';
$string['auth_ntlmsso_enabled_key'] = 'تمكين';
$string['auth_ntlmsso_ie_fastpath'] = 'إختر لتمكين المسار السريع لـ NTLM SSO (يتجاوز بعض الخطوات إذا كان متصفحات الويب هو MS Internet Explorer).';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'حاول NTLM مع جميع المتصفحات';
$string['auth_ntlmsso_ie_fastpath_key'] = 'المسار السريع لمتصفح الإنترنت IE من مايكروسوف؟';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'نعم، حاول NTLM مع المتصفحات الأخرى';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'نعم، كل المتصفحات الأخرى تستعمل نموذج الدخول القياسي';
$string['auth_ntlmsso_maybeinvalidformat'] = 'تعذر استخرام اسم الدخول من رأس REMOTE_USER. هل الصيغة المهيأة صحيحة؟';
$string['auth_ntlmsso_missing_username'] = 'عليك تحديد %username% على الأقل بصيغة اسم المستخدم البعيد';
$string['auth_ntlmsso_remoteuserformat'] = 'إذا سبق لك اختيار \'NTLM\' في \'طريقة المصادقة\'، يمكنك تحديد صيغة اسم الدخول هنا. إذا تركته فارغاً، فسيتم استعمال الصيغة الافتراضية DOMAIN\\username. يمكنك استعمال العنصر النائب الاختياري <b>%domain%</b> لتحديد موضع ظهور اسم المجال، والعنصر النائب الإجباري <b>%username%</b> لتحديد موضع ظهور اسم الدخول. <br /><br />بعض الصيغ الأكثر شيوعاً هي <tt>%domain%\\%username%</tt> (الإفتراضي في مايكروسوفت وندوز)، <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> ومجرد  <tt>%username%</tt> (إذا لم يكن هناك جزء المجال).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'صيغة اسم المستخدم البعيد';
$string['auth_ntlmsso_subnet'] = 'عند ضبطه، فسيحاول SSO فقط مع العملاء ضمن الشبكة الفرعية هذه. الصيغة: xxx.xxx.xxx.xxx/bitmask. إفصل ما بين الشبكات الفرعية المتعددة بفارزة \',\'.';
$string['auth_ntlmsso_subnet_key'] = 'الشبكة الفرعية';
$string['auth_ntlmsso_type'] = 'طريقة المصادقة المهيئة في مخدم الويب للمصادقة على المستخدمين (إذا كنت في شك، إختر NTLM)';
$string['auth_ntlmsso_type_key'] = 'نوع المصادقة';
$string['cannotmaprole'] = 'لا يمكن تعيين الدور "{$a->rolename}" لأن اسمه المختصر "{$a->shortname}" طويل جداً و/أو يحتوي على واصلات. للسماح بتعيينه، ينبغي تقصير الاسم المختصر إلى ما لا يزيد عن {$a->charlimit} حرف مع إزالة كل الواصلات منه. <a href="{$a->link}">تحرير الدور</a>';
$string['connectingldap'] = 'الاتصال جارٍ بمخدم LDAP...';
$string['connectingldapsuccess'] = 'نجح الاتصال بمخدم LDAP';
$string['creatingtemptable'] = 'إنشاء جدول مؤقت {$a}';
$string['diag_contextnotfound'] = 'السياق {$a} غير موجود أو تتعذر قراءته بواسطة ربط DN.';
$string['diag_emptycontext'] = 'تم العثور على سياق فارغ.';
$string['diag_genericerror'] = 'خطأ LDAP {$a->code} عند قراءة {$a->subject}: {$a->message}.';
$string['diag_rolegroupnotfound'] = 'المجموعة {$a->group} لدور {$a->localname} غير موجودة أو تتعذر قراءتها بواسطة ربط DN.';
$string['diag_toooldversion'] = 'إنه من غير المرجح أن يستعمل مخدم LDAP حديث البروتوكول LDAPv2. الإعدادات الخاطئة يمكن أن تؤدي إلى إتلاف القيم في الحقول. تحقق من الأمر مع مشرف LDAP الخاص بك.';
$string['didntfindexpiretime'] = 'الدالة password_expire() لم تعثر على وقت انتهاء الصلاحية.';
$string['didntgetusersfromldap'] = 'لم نحصل على أي مستخدمين من LDAP -- خطأ؟ -- يتم الآن الخروج';
$string['gotcountrecordsfromldap'] = 'تم الحصول على {$a} سجل/سجلات من LDAP';
$string['ldapnotconfigured'] = 'رابط مضيف LDAP غير مهيأ حالياً';
$string['morethanoneuser'] = 'تم العثور على أكثر من سجل مستخدم في LDAP. سيتم استعمال السجل الأول فقط.';
$string['needbcmath'] = 'أنت بحاجة إلى استعمال الامتداد BCMath لخاصية التحقق من انتهاء صلاحية كلمة المرور مع المجلد النشط.';
$string['needmbstring'] = 'أنت بحاجة إلى قيام الامتداد mbstring بتغيير كلمات المرور في المجلد النشط';
$string['nodnforusername'] = 'خطأ في الدالة user_update_password(). لا DN لـ: {$a->username}';
$string['noemail'] = 'تمت محاولة إرسال بريد إلكتروني لك ولكنها فشلت';
$string['notcalledfromserver'] = 'لا ينبغي استدعاؤها من مخدم الويب!';
$string['noupdatestobedone'] = 'لا تحديثات لعملها';
$string['nouserentriestoremove'] = 'لا إدخالات مستخدم لإزالتها';
$string['nouserentriestorevive'] = 'لا إدخالات مستخدم لإعادتها';
$string['nouserstobeadded'] = 'لا إدخالات مستخدم لإضافتها';
$string['ntlmsso_attempting'] = 'تجري محاولة الدخول الموحد عبر NTLM...';
$string['ntlmsso_failed'] = 'الدخول التلقائي فشل، حاول من صفحة الدخول العادية...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO مُعطل';
$string['ntlmsso_unknowntype'] = 'نوع ntlmsso مجهول!';
$string['pagedresultsnotsupp'] = 'نتائج LDAP ذات الصفحات غير مدعومة (إما أن إصدار PHP يفتقر إلى الدعم، لقد قمت بتهيئة مودل لاستعمال بروتوكول LDAP الإصدار 2 أو إن مودل لا يستطيع الاتصال بمخدم LDAP لمعرفة ما إذا كان دعم ذي الصفحات متوافراً).';
$string['pagesize'] = 'تأكد من كون هذه القيمة أصغر من حد الحجم لطقم النتائج في مخدم LDAP (العدد الإقصى من الإدخالات التي يمكن إرجاعها للاستعلام واحد)';
$string['pagesize_key'] = 'حجم الصفحة';
$string['pluginname'] = 'مُخدم LDAP';
$string['pluginnotenabled'] = 'الملحق غير مُمَكَّن!';
$string['privacy:metadata'] = 'إن ملحق مصادقة مخدم LDAP لا يخزن أي بيانات شخصية.';
$string['renamingnotallowed'] = 'إعادة تسمية المستخدم غير مسموح بها في LDAP';
$string['rootdseerror'] = 'خطأ عند استعلام rootDSE للمجلد النشط';
$string['start_tls'] = 'استعمل خدمة LDAP الاعتيادية (المنفذ 389) بتشفير TLS';
$string['start_tls_key'] = 'استعمل TLS';
$string['syncroles'] = 'مزامنة أدوار النظام من LDAP';
$string['synctask'] = 'عملية مزامنة المستخدمين في LDAP';
$string['systemrolemapping'] = 'تعيين دور النظام';
$string['updatepasserror'] = 'خطأ في الدالة user_update_password(). رمز الخطأ: {$a->errno}؛ نص الخطأ: {$a->errstring}';
$string['updatepasserrorexpire'] = 'خطأ في الدالة user_update_password() عند قراءة وقت انتهاء صلاحية كلمة المرور. رمز الخطأ: {$a->errno}؛ نص الخطأ: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'خطأ في الدالة user_update_password() عند تحديث وقت انتهاء صلاحية كلمة المرور و/أو إمهال الدخول. رمز الخطأ: {$a->errno}؛ نص الخطأ: {$a->errstring}';
$string['updateremfail'] = 'خطأ عند تحديث سجل LDAP. رمز الخطأ: {$a->errno}؛ نص الخطأ: {$a->errstring}<br/>المفتاح ({$a->key}) - قيمة مودل القديمة: \'{$a->ouvalue}\' القيمة الجديدة: \'{$a->nuvalue}\'';
$string['updateremfailamb'] = 'فشل تحديث LDAP بالحقل الغامض {$a->key}؛ قيمة مودل القديمة: \'{$a->ouvalue}\' القيمة الجديدة: \'{$a->nuvalue}\'';
$string['updateremfailfield'] = 'فشل تحديث LDAP بحقل غير موجود (\'{$a->ldapkey}\'). المفتاح ({$a->key}) - قيمة مودل القديمة: \'{$a->ouvalue}\' القيمة الجديدة: \'{$a->nuvalue}\'';
$string['updateusernotfound'] = 'تعذر العثور على المستخدم في أثناء التحديث الخارجي. التفاصيل تتبع: أساس البحث: \'{$a->userdn}\'؛ مرشح البحث: \'(objectClass=*)\'؛ سمات البحث: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'الدالة auth: ldap user_activate() لا تدعم نوع المستخدم المحدد: {$a}';
$string['user_disablenotsupportusertype'] = 'الدالة auth: ldap user_disable() لا تدعم usertype المحدد: {$a}';
$string['useracctctrlerror'] = 'وقع خطأ عند الحصول على userAccountControl لـ {$a}';
$string['userentriestoadd'] = 'إدخالات المستخدم التي بصدد الإضافة: {$a}';
$string['userentriestoremove'] = 'إدخالات المستخدم التي بصدد الإزالة: {$a}';
$string['userentriestorevive'] = 'إدخالات المستخدم التي بصدد الإعادة: {$a}';
$string['userentriestoupdate'] = 'إدخالات المستخدم التي بصدد التحديث: {$a}';
$string['usernotfound'] = 'تعذر العثور على المستخدم في LDAP';
