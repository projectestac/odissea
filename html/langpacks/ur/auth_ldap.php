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
 * Strings for component 'auth_ldap', language 'ur', version '4.1'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'ایکٹو ڈائریکٹری میں نیا اکاؤنٹ نہیں بنا سکتے۔ یقینی بنائیں کہ آپ اس کے کام کرنے کے لیے تمام تقاضوں کو پورا کرتے ہیں (ایل ڈی اے پی ایس کنکشن، صارف کو مناسب حقوق کے ساتھ پابند کریں، وغیرہ)';
$string['auth_ldap_attrcreators'] = 'ان گروپس یا سیاق و سباق کی فہرست جن کے اراکین کو اوصاف تخلیق کرنے کی اجازت ہے۔ \';\' کے ساتھ متعدد گروپس کو الگ کریں۔ عام طور پر کچھ ایسا ہوتا ہے جیسے \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'انتساب تخلیق کار';
$string['auth_ldap_auth_user_create_key'] = 'بیرونی طور پر صارفین بنائیں';
$string['auth_ldap_bind_dn'] = 'اگر آپ صارفین کو تلاش کرنے کے لیے bind-user استعمال کرنا چاہتے ہیں، تو اسے یہاں واضح کریں۔ \'cn=ldapuser,ou=public,o=org\' جیسا کچھ';
$string['auth_ldap_bind_dn_key'] = 'ممتاز نام';
$string['auth_ldap_bind_pw'] = 'پابند صارف کے لیے پاس ورڈ۔';
$string['auth_ldap_bind_pw_key'] = 'پاسورڈ';
$string['auth_ldap_bind_settings'] = 'پابندی کی ترتیبات';
$string['auth_ldap_changepasswordurl_key'] = 'پاس ورڈ تبدیل کرنے کا یو آر ایل';
$string['auth_ldap_contexts'] = 'سیاق و سباق کی فہرست جہاں صارفین موجود ہیں۔ مختلف سیاق و سباق کو \';\' سے الگ کریں۔ مثال کے طور پر: \'ou=users,o=org; ou=other, o=org\'';
$string['auth_ldap_contexts_key'] = 'سیاق و سباق';
$string['auth_ldap_create_context'] = 'اگر آپ ای میل کی تصدیق کے ساتھ صارف تخلیق کو فعال کرتے ہیں، تو اس سیاق و سباق کی وضاحت کریں جہاں صارفین تخلیق کیے گئے ہیں۔ سیکیورٹی کے مسائل کو روکنے کے لیے یہ سیاق و سباق دوسرے صارفین سے مختلف ہونا چاہیے۔ آپ کو اس سیاق و سباق کو ldap_context-variable میں شامل کرنے کی ضرورت نہیں ہے، موڈل اس سیاق و سباق سے صارفین کو خود بخود تلاش کرے گا۔<br /><b>نوٹ!</b> آپ کو فائل auth/ میں طریقہ user_create() میں ترمیم کرنا ہوگی۔ ldap/auth.php صارف کی تخلیق کا کام کرنے کے لیے';
$string['auth_ldap_create_context_key'] = 'نئے صارفین کے لیے سیاق و سباق';
$string['auth_ldap_create_error'] = 'LDAP میں صارف بنانے میں خرابی۔';
$string['auth_ldap_expiration_desc'] = 'میعاد ختم ہونے والے پاس ورڈ کی جانچ کو غیر فعال کرنے کے لیے \'{$a->no}\' کو منتخب کریں یا LDAP سرور سے براہ راست پاس ورڈ ختم ہونے کا وقت پڑھنے کے لیے \'{$a->ldapserver}\' کو منتخب کریں۔';
$string['auth_ldap_expiration_key'] = 'ختم';
$string['auth_ldap_expiration_warning_desc'] = 'پاس ورڈ ختم ہونے کی وارننگ جاری ہونے سے پہلے دنوں کی تعداد۔';
$string['auth_ldap_expiration_warning_key'] = 'ختم ہونے کی وارننگ';
$string['auth_ldap_expireattr_desc'] = 'اختیاری: LDAP انتساب کو اوور رائیڈ کرتا ہے جو پاس ورڈ ختم ہونے کے وقت کو محفوظ کرتا ہے۔';
$string['auth_ldap_expireattr_key'] = 'ایکسپائری وصف';
$string['auth_ldap_graceattr_desc'] = 'اختیاری: فضل لاگ ان کی خصوصیت کو اوور رائیڈ کرتا ہے';
$string['auth_ldap_gracelogin_key'] = 'گریس لاگ ان وصف';
$string['auth_ldap_gracelogins_desc'] = 'LDAP گریس لاگ ان سپورٹ کو فعال کریں۔ پاس ورڈ کی میعاد ختم ہونے کے بعد، صارف اس وقت تک لاگ ان کر سکتا ہے جب تک کہ فضل لاگ ان کی تعداد 0 نہ ہو جائے۔ اس ترتیب کو فعال کرنے سے اگر پاس ورڈ کی میعاد ختم ہو گئی ہو تو فضل لاگ ان پیغام دکھاتا ہے۔';
$string['auth_ldap_gracelogins_key'] = 'گریس لاگ ان';
$string['auth_ldap_groupecreators'] = 'گروپس یا سیاق و سباق کی فہرست جن کے اراکین کو گروپ بنانے کی اجازت ہے۔ \';\' کے ساتھ متعدد گروپس کو الگ کریں۔ عام طور پر کچھ ایسا ہوتا ہے جیسے \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_groupecreators_key'] = 'گروپ بنانے والے';
$string['auth_ldap_host_url'] = 'LDAP ہوسٹ کو یو آر ایل کی شکل میں بیان کریں جیسے \'ldap://ldap.myorg.com/\' یا \'ldaps://ldap.myorg.com/\'۔ متعدد سرورز کو \';\' کے ساتھ الگ کریں ناکامی کی حمایت حاصل کرنے کے لئے.';
$string['auth_ldap_host_url_key'] = 'میزبان یو آر ایل';
$string['auth_ldap_ldap_encoding'] = 'LDAP سرور کے ذریعہ استعمال کردہ انکوڈنگ، غالباً utf-8۔ اگر LDAP v2 کو منتخب کیا جاتا ہے، تو Active Directory اپنی تشکیل شدہ انکوڈنگ کا استعمال کرتی ہے، جیسے cp1252 یا cp1250۔';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP انکوڈنگ';
$string['auth_ldap_login_settings'] = 'لاگ ان کی ترتیبات';
$string['auth_ldap_memberattribute'] = 'اختیاری: صارف کے رکن کی خصوصیت کو اوور رائیڈ کرتا ہے، جب صارفین کسی گروپ سے تعلق رکھتے ہیں۔ عام طور پر \'ممبر\'';
$string['auth_ldap_memberattribute_isdn'] = 'ممبر کی انتساب کی قدروں کے ہینڈلنگ کو اوور رائیڈ کرتا ہے';
$string['auth_ldap_memberattribute_isdn_key'] = 'ممبر وصف dn کا استعمال کرتا ہے';
$string['auth_ldap_memberattribute_key'] = 'رکن کی صفت';
$string['auth_ldap_no_mbstring'] = 'آپ کو ایکٹو ڈائریکٹری میں صارفین بنانے کے لیے mbstring ایکسٹینشن کی ضرورت ہے۔';
$string['auth_ldap_noconnect'] = 'LDAP-module سرور سے منسلک نہیں ہو سکتا: {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP-module کسی بھی سرور سے منسلک نہیں ہو سکتا: {$a}';
$string['auth_ldap_noextension'] = 'ایسا لگتا ہے کہ PHP LDAP ماڈیول موجود نہیں ہے۔ اگر آپ اس تصدیقی پلگ ان کو استعمال کرنا چاہتے ہیں تو براہ کرم یقینی بنائیں کہ یہ انسٹال اور فعال ہے۔';
$string['auth_ldap_objectclass'] = 'اختیاری: ldap_user_type پر صارفین کو نام/تلاش کرنے کے لیے استعمال ہونے والے آبجیکٹ کلاس کو اوور رائیڈ کرتا ہے۔ عام طور پر آپ کو اسے تبدیل کرنے کی ضرورت نہیں ہے۔';
$string['auth_ldap_objectclass_key'] = 'آبجیکٹ کلاس';
$string['auth_ldap_opt_deref'] = 'اس بات کا تعین کرتا ہے کہ تلاش کے دوران عرفی ناموں کو کیسے ہینڈل کیا جاتا ہے۔ درج ذیل اقدار میں سے ایک کو منتخب کریں: "نہیں" (LDAP_DEREF_NEVER) یا "ہاں" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'ڈیریفرنس عرفی نام';
$string['auth_ldap_passtype'] = 'ایل ڈی اے پی سرور میں نئے یا تبدیل شدہ پاس ورڈز کا فارمیٹ بتائیں۔';
$string['auth_ldap_passtype_key'] = 'پاس ورڈ فارمیٹ';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP پاس ورڈ کی میعاد ختم ہونے کی ترتیبات';
$string['auth_ldap_preventpassindb'] = 'موڈل کے ڈیٹا بیس میں پاسورڈ محفوظ ہونے سے پچانے کے لیے ہاں منتخب کریں';
$string['auth_ldap_preventpassindb_key'] = 'پاسورڈز خفی کرو';
$string['auth_ldap_rolecontext'] = '{$a->localname} سیاق و سباق';
$string['auth_ldap_rolecontext_help'] = 'LDAP سیاق و سباق کو <i>{$a->localname}</i> میپنگ کے لیے منتخب کرنے کے لیے استعمال کیا جاتا ہے۔ \';\' کے ساتھ متعدد گروپس کو الگ کریں۔ عام طور پر کچھ جیسا کہ "cn={$a->shortname},ou=first-ou-with-role-groups,o=myorg; cn={$a->shortname},ou=second-ou-with-role- گروپس، o=myorg"۔';
$string['auth_ldap_search_sub'] = 'ذیلی سیاق و سباق سے صارفین کو تلاش کریں۔';
$string['auth_ldap_search_sub_key'] = 'ذیلی سیاق و سباق تلاش کریں';
$string['auth_ldap_server_settings'] = 'LDAP سرور کی ترتیبات';
$string['auth_ldap_suspended_attribute'] = 'اختیاری: فراہم کیے جانے پر یہ وصف مقامی طور پر بنائے گئے صارف اکاؤنٹ کو فعال/معطل کرنے کے لیے استعمال کیا جائے گا۔';
$string['auth_ldap_suspended_attribute_key'] = 'معطل وصف';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() منتخب صارف قسم کی حمایت نہیں کرتا: {$a}';
$string['auth_ldap_update_userinfo'] = 'صارف کی معلومات (پہلا نام، آخری نام، پتہ..) کو LDAP سے Moodle میں اپ ڈیٹ کریں۔ آپ کی ضرورت کے مطابق "ڈیٹا میپنگ" کی ترتیبات کی وضاحت کریں۔';
$string['auth_ldap_user_attribute'] = 'اختیاری: صارفین کو نام/تلاش کرنے کے لیے استعمال ہونے والے وصف کو اوور رائیڈ کرتا ہے۔ عام طور پر \'cn\'۔';
$string['auth_ldap_user_attribute_key'] = 'صارف کا وصف';
$string['auth_ldap_user_exists'] = 'LDAP صارف نام پہلے سے موجود ہے۔';
$string['auth_ldap_user_settings'] = 'صارف کی تلاش کی ترتیبات';
$string['auth_ldap_user_type'] = 'منتخب کریں کہ صارفین کو LDAP میں کیسے ذخیرہ کیا جاتا ہے۔ یہ ترتیب یہ بھی بتاتی ہے کہ لاگ ان کی میعاد ختم، فضل لاگ ان اور صارف کی تخلیق کیسے کام کرے گی۔';
$string['auth_ldap_user_type_key'] = 'صارف کی قسم';
$string['auth_ldap_usertypeundefined'] = 'config.user_type کی وضاحت نہیں کی گئی یا فنکشن ldap_expirationtime2unix منتخب قسم کی حمایت نہیں کرتا!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type کی وضاحت نہیں کی گئی یا فنکشن ldap_unixi2expirationtime منتخب قسم کی حمایت نہیں کرتا!';
$string['auth_ldap_version'] = 'LDAP پروٹوکول کا وہ ورژن جو آپ کا سرور استعمال کر رہا ہے۔';
$string['auth_ldap_version_key'] = 'ورژن';
$string['auth_ldapdescription'] = 'یہ طریقہ ایک بیرونی LDAP سرور کے خلاف تصدیق فراہم کرتا ہے۔ اگر دیا گیا صارف نام اور پاس ورڈ درست ہے تو، موڈل اپنے ڈیٹا بیس میں صارف کا ایک نیا اندراج بناتا ہے۔ یہ پلگ ان LDAP سے صارف کی خصوصیات پڑھ سکتا ہے اور موڈل میں مطلوبہ فیلڈز کو پہلے سے بھر سکتا ہے۔ مندرجہ ذیل لاگ ان کے لیے صرف صارف کا نام اور پاس ورڈ چیک کیا جاتا ہے۔';
$string['auth_ldapextrafields'] = 'یہ فیلڈز اختیاری ہیں۔ آپ کچھ موڈل صارف فیلڈز کو <b>LDAP فیلڈز</b> سے معلومات کے ساتھ پہلے سے بھرنے کا انتخاب کر سکتے ہیں جو آپ نے یہاں بیان کیا ہے۔ <p>اگر آپ ان فیلڈز کو خالی چھوڑ دیتے ہیں، تو LDAP سے کچھ بھی منتقل نہیں کیا جائے گا اور اس کے بجائے موڈل ڈیفالٹس استعمال کیے جائیں گے۔</p><p>دونوں صورتوں میں، صارف لاگ ان ہونے کے بعد ان تمام فیلڈز میں ترمیم کر سکے گا۔ </p>';
$string['auth_ldapnotinstalled'] = 'LDAP توثیق کا استعمال نہیں کر سکتا۔ پی ایچ پی ایل ڈی اے پی ماڈیول انسٹال نہیں ہے۔';
$string['auth_ntlmsso'] = 'این ٹی ایل ایم ایس ایس او';
$string['auth_ntlmsso_enabled'] = 'NTLM ڈومین کے ساتھ سنگل سائن آن کرنے کی کوشش کرنے کے لیے ہاں پر سیٹ کریں۔ نوٹ کریں کہ یہ کام کرنے کے لیے سرور پر اضافی سیٹ اپ کی ضرورت ہے۔ مزید تفصیلات کے لیے، دستاویزات <a href="https://docs.moodle.org/en/NTLM_authentication">NTLM تصدیق</a> دیکھیں۔';
$string['auth_ntlmsso_enabled_key'] = 'فعال کریں';
$string['auth_ntlmsso_ie_fastpath'] = 'این ٹی ایل ایم ایس ایس او فاسٹ پاتھ کو فعال کرنے کے لیے سیٹ کریں (اگر کلائنٹ کا براؤزر MS Internet Explorer ہے تو کچھ مراحل کو نظرانداز کرتا ہے)۔';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'تمام براؤزرز کے ساتھ این ٹی ایل ایم کی کوشش کریں';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE تیز پاتھ؟';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'ہاں، این ٹی ایل ایم دوسرے براؤزرز کو آزمائیں';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'ہاں، دیگر تمام براؤزر معیاری لاگ ان فارم استعمال کرتے ہیں';
$string['auth_ntlmsso_maybeinvalidformat'] = 'REMOTE_USER ہیڈر سے صارف نام نکالنے سے قاصر ہے۔ کیا تشکیل شدہ فارمیٹ درست ہے؟';
$string['auth_ntlmsso_missing_username'] = 'آپ کو ریموٹ صارف نام کی شکل میں کم از کم %username% کی وضاحت کرنے کی ضرورت ہے';
$string['auth_ntlmsso_remoteuserformat'] = 'اگر آپ نے \'توثیق کی قسم\' میں \'NTLM\' کا انتخاب کیا ہے، تو آپ یہاں ریموٹ صارف نام کی شکل بتا سکتے ہیں۔ اگر آپ اسے خالی چھوڑ دیتے ہیں تو ڈیفالٹ DOMAIN\\username فارمیٹ استعمال کیا جائے گا۔ آپ اختیاری <b>%domain%</b> پلیس ہولڈر کو یہ بتانے کے لیے استعمال کر سکتے ہیں کہ ڈومین کا نام کہاں ظاہر ہوتا ہے، اور لازمی <b>%username%</b> پلیس ہولڈر یہ بتانے کے لیے کہ صارف نام کہاں ظاہر ہوتا ہے۔ <br /><br />کچھ وسیع پیمانے پر استعمال شدہ فارمیٹس ہیں <tt>%domain%\\%username%</tt> (MS Windows default), <tt>%domain%/%username%</tt>, <tt >%domain%+%username%</tt> اور صرف <tt>%username%</tt> (اگر ڈومین کا کوئی حصہ نہیں ہے)۔';
$string['auth_ntlmsso_remoteuserformat_key'] = 'ریموٹ صارف نام کی شکل';
$string['auth_ntlmsso_subnet'] = 'اگر سیٹ ہے، تو یہ صرف اس سب نیٹ میں کلائنٹس کے ساتھ SSO کی کوشش کرے گا۔ فارمیٹ: xxx.xxx.xxx.xxx/bitmask۔ \'،\' (کوما) کے ساتھ متعدد ذیلی نیٹ کو الگ کریں۔';
$string['auth_ntlmsso_subnet_key'] = 'سب نیٹ';
$string['auth_ntlmsso_type'] = 'توثیق کا طریقہ جو ویب سرور میں کنفیگر کیا گیا ہے تاکہ صارفین کی تصدیق ہو سکے (اگر شک ہو تو این ٹی ایل ایم کا انتخاب کریں)';
$string['auth_ntlmsso_type_key'] = 'تصدیق کی قسم';
$string['cannotmaprole'] = 'کردار "{$a->rolename}" کو نقشہ نہیں بنایا جا سکتا کیونکہ اس کا مختصر نام "{$a->shortname}" بہت لمبا ہے اور/یا ہائفنز پر مشتمل ہے۔ اسے میپ کرنے کی اجازت دینے کے لیے، مختصر نام کو زیادہ سے زیادہ {$a->charlimit} حروف تک کم کرنے کی ضرورت ہے اور کوئی بھی ہائفن ہٹا دیا جائے۔ <a href="{$a->link}">کردار میں ترمیم کریں</a>';
$string['connectingldap'] = 'ایل ڈی اے پی سرور سے منسلک ہو رہا ہے۔۔۔';
$string['connectingldapsuccess'] = 'آپ کے ایل ڈی اے پی سرور سے جڑنا کامیاب رہا';
$string['creatingtemptable'] = 'عارضی جدول بنانا {$a}';
$string['diag_contextnotfound'] = 'سیاق و سباق {$a} موجود نہیں ہے یا بائنڈ DN کے ذریعے پڑھا نہیں جا سکتا۔';
$string['diag_emptycontext'] = 'خالی سیاق و سباق ملا۔';
$string['diag_genericerror'] = 'LDAP خرابی {$a->code} پڑھنے میں {$a->subject}: {$a->message}۔';
$string['diag_rolegroupnotfound'] = 'کردار {$a->localname} کے لیے گروپ {$a->group} موجود نہیں ہے یا بائنڈ DN کے ذریعے پڑھا نہیں جا سکتا۔';
$string['diag_toooldversion'] = 'یہ بہت کم امکان ہے کہ ایک جدید LDAP سرور LDAPv2 پروٹوکول استعمال کرتا ہے۔ غلط ترتیبات صارف کے شعبوں میں اقدار کو خراب کر سکتی ہیں۔ اپنے LDAP ایڈمنسٹریٹر سے چیک کریں۔';
$string['didntfindexpiretime'] = 'password_expire() کو میعاد ختم ہونے کا وقت نہیں ملا۔';
$string['didntgetusersfromldap'] = 'کیا LDAP -- error سے کوئی صارف نہیں ملا؟ --.باہر نکلنا';
$string['gotcountrecordsfromldap'] = 'LDAP سے {$a} ریکارڈز ملے';
$string['ldapnotconfigured'] = 'LDAP میزبان url فی الحال کنفیگر نہیں ہے';
$string['morethanoneuser'] = 'LDAP میں ایک سے زیادہ صارف کا ریکارڈ ملا۔ صرف پہلا استعمال کرنا۔';
$string['needbcmath'] = 'ایکٹو ڈائرکٹری کے ساتھ میعاد ختم شدہ پاس ورڈ چیکنگ استعمال کرنے کے لیے آپ کو BCMath ایکسٹینشن کی ضرورت ہے۔';
$string['needmbstring'] = 'آپ کو ایکٹو ڈائریکٹری میں پاس ورڈ تبدیل کرنے کے لیے mbstring ایکسٹینشن کی ضرورت ہے۔';
$string['nodnforusername'] = 'user_update_password() میں خرابی اس کے لیے کوئی DN نہیں: {$a->username}';
$string['noemail'] = 'آپ کو برقی خط بھیجنے کی کوشش کامیاب نا ہو سکی';
$string['notcalledfromserver'] = 'ویب سرور سے نہیں بلایا جانا چاہئے!';
$string['noupdatestobedone'] = 'کوئی اپ ڈیٹ نہیں کرنا ہے';
$string['nouserentriestoremove'] = 'صارف کے اندراجات کو ہٹانا نہیں ہے';
$string['nouserentriestorevive'] = 'کسی صارف کے اندراجات کو بحال نہیں کیا جائے گا';
$string['nouserstobeadded'] = 'صارف کے اندراجات کو شامل کرنے کی ضرورت نہیں ہے';
$string['ntlmsso_attempting'] = 'این ٹی ایل ایم  کے ذریعے سنگل سائن آن کرنے کی کوشش۔۔۔';
$string['ntlmsso_failed'] = 'خودکار لاگ ان ناکام ہو گیا، عام لاگ ان صفحہ آزمائیں۔۔۔';
$string['ntlmsso_isdisabled'] = 'این ٹی ایل ایم ایس ایس او نااہل ہے۔';
$string['ntlmsso_unknowntype'] = 'نامعلوم این ٹی ایل ایم ایس ایس قسم!';
$string['pagedresultsnotsupp'] = 'ایل ڈی اے پی پیجڈ نتائج تعاون یافتہ نہیں ہیں (یا تو آپ کے پی ایچ پی ورژن میں سپورٹ نہیں ہے، آپ نے ایل ڈی اے پی پروٹوکول ورژن 2 استعمال کرنے کے لیے موڈل کو کنفیگر کیا ہے یا موڈل یہ دیکھنے کے لیے آپ کے ایل ڈی اے پی سرور سے رابطہ نہیں کر سکتا کہ آیا پیجڈ سپورٹ دستیاب ہے۔)';
$string['pagesize'] = 'یقینی بنائیں کہ یہ قدر آپ کے LDAP سرور رزلٹ سیٹ سائز کی حد سے چھوٹی ہے (اندراجات کی زیادہ سے زیادہ تعداد جو ایک سوال میں واپس کی جا سکتی ہے)';
$string['pagesize_key'] = 'صفحہ کا سائز';
$string['pluginname'] = 'ایل ڈی اے پی سرور';
$string['pluginnotenabled'] = 'پلگ ان فعال نہیں ہے!';
$string['privacy:metadata'] = 'ایل ڈی اے پی سرور تصدیقی پلگ ان کوئی ذاتی ڈیٹا ذخیرہ نہیں کرتا ہے۔';
$string['renamingnotallowed'] = 'ایل ڈی اے پی میں صارف کا نام تبدیل کرنے کی اجازت نہیں ہے';
$string['rootdseerror'] = 'ایکٹو ڈائریکٹری کے لیے rootDSE سے استفسار کرنے میں خرابی';
$string['start_tls'] = 'TLS انکرپشن کے ساتھ باقاعدہ LDAP سروس (پورٹ 389) استعمال کریں';
$string['start_tls_key'] = 'TLS استعمال کریں';
$string['syncroles'] = 'LDAP سے سسٹم رولز کو سنکرونائز کریں';
$string['synctask'] = 'LDAP صارفین کام کی مطابقت پذیری کرتے ہیں';
$string['systemrolemapping'] = 'سسٹم رول میپنگ';
$string['updatepasserror'] = 'user_update_password() میں خرابی خرابی کا کوڈ: {$a->errno}; خرابی کی تار: {$a->errstring}';
$string['updatepasserrorexpire'] = 'پاس ورڈ ختم ہونے کا وقت پڑھتے وقت user_update_password() میں خرابی خرابی کا کوڈ: {$a->errno}; خرابی کی تار: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'ایکسپائری ٹائم اور/یا گریس لاگ ان میں ترمیم کرتے وقت user_update_password() میں خرابی۔ خرابی کا کوڈ: {$a->errno}; خرابی کی تار: {$a->errstring}';
$string['updateremfail'] = 'LDAP ریکارڈ کو اپ ڈیٹ کرنے میں خرابی۔ خرابی کا کوڈ: {$a->errno}; خرابی کی تار: {$a->errstring}<br/>Key ({$a->key}) - پرانی موڈل قدر: \'{$a->ouvalue}\' نئی قدر: \'{$a->nuvalue}\'';
$string['updateremfailamb'] = 'مبہم فیلڈ {$a->key} کے ساتھ LDAP کو اپ ڈیٹ کرنے میں ناکام؛ پرانی موڈل ویلیو: \'{$a->ouvalue}\'، نئی قدر: \'{$a->nuvalue}\'';
$string['updateusernotfound'] = 'بیرونی طور پر اپ ڈیٹ کرتے وقت صارف نہیں مل سکا۔ تفصیلات کی پیروی کریں: تلاش کی بنیاد: \'{$a->userdn}\'; تلاش فلٹر: \'(objectClass=*)\'؛ تلاش کی خصوصیات: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() منتخب صارف قسم کی حمایت نہیں کرتا: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() منتخب صارف قسم کی حمایت نہیں کرتا: {$a}';
$string['useracctctrlerror'] = '{$a} کے لیے userAccountControl حاصل کرنے میں خرابی';
$string['userentriestoadd'] = 'شامل کیے جانے والے صارف کے اندراجات: {$a}';
$string['userentriestoremove'] = 'صارف کے اندراجات کو ہٹایا جانا ہے: {$a}';
$string['userentriestorevive'] = 'صارف کے اندراجات کو بحال کیا جائے گا: {$a}';
$string['userentriestoupdate'] = 'صارف کے اندراجات کو اپ ڈیٹ کیا جائے گا: {$a}';
$string['usernotfound'] = 'LDAP میں صارف نہیں ملا';
