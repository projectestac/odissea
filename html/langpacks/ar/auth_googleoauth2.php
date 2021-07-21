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
 * Strings for component 'auth_googleoauth2', language 'ar', version '3.11'.
 *
 * @package     auth_googleoauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_facebookclientid'] = 'يمكن توليد المُعرَّف/السر الخاصين بتطبيقك من خلال <a href="https://developers.facebook.com/apps/" target="_blank">صفحة مطوري فيسبوك</a>:
<br/>أضف تطبيقاً جديداً > موقع الويب > أدخل اسم موقعك بمثابة اسم التطبيق > أنشئ مُعرَّف تطبيق جديد في فيسبوك > أدخل عنوان رابط الموقع - لا حاجة إلى إدخال عنوان رابط الجوال >
في صفحة التأكيد، إبحث عن رابط "Skip to Developer Dashboard" > في دفة قيادة التطبيق ينبغي أن تجد المُعرَّف/السر > الإعدادات > المتقدمة > أدخل روابط إعادة التوجيه الصحيحة لتفويض OAuth
<br/>رابط الموقع: {$a->siteurl}
<br/>مجال التطبيق: {$a->sitedomain}
<br/>روابط إعادة التوجيه الصحيحة لتفويض OAuth: {$a->callbackurl}.
<br/><strong>تنبيه: قام فيسبوك مؤخراً بتغيير واجهة برمجة التطبيق. لم يعد شغالاً بالنسبة إلى مفاتيح واجهة برمجة التطبيق المولدة حديثاً. على سبيل المثال، نحن نعلم أنه متعطل منذ واجهة برمجة التطبيق لفيسبوك 2.8 وإنه شغال حتى للإصدار 2.2 منه. لم نقم باختباره مع الإصدارات 2.3، 2.4، 2.5، 2.6 و 2.7. باختصار، إذا لم يكن لديك مسبقاً مفتاح قديم لواجهة برمجة التطبيق من فيسبوك، فبالتأكيد لن يكون بالإمكان تسجيل الدخول عبر فيسبوك. لطفاً، أنظر في بدائل الملحق أو انتظر التحديث الرئيسي القادم للملحق (غير مخطط له بعد).</strong>';
$string['auth_facebookclientid_key'] = 'مُعرَّف تطبيق فيسبوك';
$string['auth_facebookclientsecret_key'] = 'سر التطبيق لفيسبوك';
$string['auth_githubclientid'] = 'يمكن توليد مُعرَّف الزبون/كلمة المرور الخاصين بك في <a href="https://github.com/settings/applications/new" target="_blank">صفحة تسجيل تطبيق Github</a>:
<br/>رابط الصفحة الرئيسية: {$a->siteurl}
<br/>رابط استدعاء التفويض: {$a->callbackurl}';
$string['auth_googleclientid'] = 'يمكن توليد مُعرَّف الزبون/كلمة المرور الخاصين بك في <a href="https://code.google.com/apis/console" target="_blank">Google console API</a>:
<br/>
Dashboard > Google Identity and Access Management (IAM) API > Enable > Credentials > Create new Oauth Client ID > Configure Product name in Consent Screen > Save > Choose \'Web application\' Credentials Type
<br/>
Authorized Javascript origins: {$a->jsorigins}
<br/>
Authorized Redirect URI: {$a->redirecturls}
<br/>';
$string['auth_linkedinclientid'] = 'يمكن توليد واجهة برمجة التطبيق والمفاتيح السرية الخاصة بك في <a href="https://www.linkedin.com/secure/developer" target="_blank">صفحة تسجيل تطبيق Linkedin</a>:
<br/>رابط الموقع: {$a->siteurl}
<br/>رابط إعادة توجيه قبول OAuth 2.0: {$a->callbackurl}';
$string['auth_linkedinclientid_key'] = 'مفتاح واجهة برمجة تطبيق Linkedin';
$string['auth_linkedinclientsecret_key'] = 'مفتاح سر زبون linkedin';
$string['auth_sign-in_with'] = 'تسجيل الدخول مع {$a->providername}';
$string['auth_vkontakteclientid'] = 'يتم توليد مُعرَّف التطبيق والسر الخاصين بك في <a href="https://vk.com/apps?act=manage" target="_blank">VK My Applications console</a>.
أدخل الإعدادات الآتية عند إنشاء التطبيق:
<br/>عنوان الموقع: {$a->siteurl}
<br/>المجال الأساسي: {$a->sitedomain}
<br/>رابط إعادة توجيه التفويض: {$a->callbackurl}';
$string['authdomains'] = 'مجالات البريد الالكتروني المسموح بها لمزودي oauth2';
$string['authdomainshelp'] = 'بهذا الخيار، يمكنك تقييد مجال البريد الالكتروني المسموح له بالدخول إلى هذا الموقع باستعمال مزودي oauth2.<br /> هذه قائمة من عناصر مفصولة بفوارز (مثل example.com, mysite.net). إذا أردت تمكين المجالات الفرعية أيضاً، حددها عبر إسباق المجال بنقطة (مثل .example.com ستطابق my.example.com أو new.example.com).<br />أتركه فارغاً لإدارة أي مجال للبريد الالكتروني.';
$string['couldnotgetuseremail'] = 'لا تقدم لنا الشبكة الاجتماعية <b>عنوان بريد الكتروني</b>. يتطلب مودل بريداً الكترونياً صحيحاً لتسجيل الدخول بشكل صحيح: يرجى التحقق من تفضيلاتك في الشبكة الاجتماعية وقم بتمكين إظهار بريدك الالكتروني.';
$string['facebook'] = 'فيسبوك';
$string['linkedin'] = 'LinkedIn';
$string['moreproviderlink'] = 'تسجيل الدخول مع خدمة أخرى.';
$string['noaccountyet'] = 'ليست لديك صلاحية استعمال هذا الموقع بعد. يرجى التواصل مع مشرفك ومطالبته بتفعيل حسابك.';
$string['pluginname'] = 'Oauth2';
$string['signinwithanaccount'] = 'تسجيل الدخول مع {$a}';
$string['stattitle'] = 'إحصائيات تسجيل الدخول لهذا الملحق';
$string['stattitlecaption'] = 'إحصائيات الأيام {$a->periodindays} الأخيرة.';
$string['supportmaintenance'] = 'لدعم صيانة هذا الملحق، سجل دخولك إلى<a target="_blank" href="https://moodle.org/plugins/view/auth_googleoauth2">صفحة Moodle.org للملحق</a> وانقر على \'إضافة إلى مفضلاتي\'. شكراً!';
