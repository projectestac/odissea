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
 * Strings for component 'auth_oauth2', language 'ar', version '3.11'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'هناك مستخدم موجود سلفاً في هذا الموقع باسم الدخول هذا. إذا كان هذا الحساب لك، قم بتسجيل الدخول عبر إدخال اسم الدخول وكلمة المرور الخاصين لك، ثم أضفه بمثابة حساب مرتبط من صفحة تفصيلاتك الشخصية.';
$string['alreadylinked'] = 'الحساب الخارجي مرتبط سلفاً بحساب في هذا الموقع';
$string['auth_oauth2description'] = 'مصادقة مبنية على معايير OAuth 2 القياسية';
$string['auth_oauth2settings'] = 'إعدادات مصادقة OAuth 2.';
$string['confirmaccountemail'] = 'مرحباً {$a->fullname}،

لقد طُلب إنشاء حساب جديد في \'{$a->sitename}\'
باستعمال بريدك الالكتروني.

لتأكيد حسابك الجديد، لطفاً، إذهب إلى عنوان الويب أدناه:

{$a->link}

في أغلب برامج البريد، هذا متوقع أن يظهر بشكل رابط أزرق
بحيث يمكنك مجرد النقر عليه. إذا لم يكن ذلك متأتِّياً،
فقم بنسخ الرابط وإلصاقه في شريط العنوان أعلى
نافذة المتصفح لديك.

إذا أردت الحصول على المساعدة، لطفاً، راسل المشرف على الموقع،
{$a->admin}

إن لم تكن من قام بهذا، فقد يكون هناك شخص آخر يحاول اختراق حسابك.
لطفاً، راسل المشرف على الموقع فوراً.';
$string['confirmaccountemailsubject'] = '{$a}: تأكيد الحساب';
$string['confirmationinvalid'] = 'رابط التأكيد إما أنه غير صحيح، أو انتهت صلاحيته. لطفاً، إبدأ عملية تسجيل الدخول مرة أخرى لتوليد رسالة تأكيد جديدة.';
$string['confirmationpending'] = 'هذا الحساب ينتظر التأكيد عبر البريد الالكتروني.';
$string['confirmlinkedloginemail'] = 'مرحباً {$a->fullname}،

لقد تم تقديم طلب لربط  حساب الدخول العائد إلى {$a->issuername}
ذي البريد {$a->linkedemail} مع حسابك في \'{$a->sitename}\'
باستعمال بريدك الالكتروني.

لتأكيد هذا الطلب وربط هذين الحسابين، لطفاً، إذهب إلى عنوان الويب أدناه:

{$a->link}

في أغلب برامج البريد، هذا متوقع أن يظهر بشكل رابط أزرق
بحيث يمكنك مجرد النقر عليه.  إذا كانت الأمور بشكل آخر،
فقم بنسخ الرابط وإلصاقه في شريط العنوان أعلى
نافذة المتصفح لديك.

إذا أردت الحصول على المساعدة، لطفاً، راسل المشرف على الموقع،
{$a->admin}

إن لم تكن من قام بهذا، فقد يكون هناك شخص آخر يحاول اختراق حسابك.
لطفاً، راسل المشرف على الموقع فوراً.';
$string['confirmlinkedloginemailsubject'] = '{$a}: تأكيد الحساب المرتبط';
$string['createaccountswarning'] = 'الإضافة المصادقة هذه تسمح للمستخدمين بإنشاء حسابات في موقعك. قد ترغب بتمكين الإعداد "authpreventaccountcreation" إذا كنت تستعمل هذه الإضافة.';
$string['createnewlinkedlogin'] = 'أربط حساباً جديداً ({$a})';
$string['emailconfirmlink'] = 'إربط حساباتك';
$string['emailconfirmlinksent'] = '<p>تم العثور على حساب بهذا العنوان البريدي، ولكنه غير مرتبط بعد.</p>
   <p>لا بد من ربط الحساب حتى تتمكن من تسجيل الدخول.</p>
   <p>رسالة بريد الكتروني ينبغي أن تكون قد أرسلت إلى عنوانك عند <b>{$a}</b>.</p>
   <p>هي تتضمن توجيهات بسيطة بشأن ربط حسابك.</p>
   <p>إذا واجهتك أي صعوبات، راسل المشرف على الموقع.</p>';
$string['emailpasswordchangeinfo'] = 'مرحباً {$a->firstname}،

أحدهم (ربما أنت) قد طلب كلمة مرور جديدة لحسابك في \'{$a->sitename}\'.

مع ذلك، تتعذر إعادة تعيين كلمة مرورك لأنك تستعمل حسابك في موقع آخر لتسجيل الدخول.

لطفاً، سجل دخولك كما في السابق مستعملاً الرابط في صفحة الدخول.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: معلومات تغير كلمة المرور';
$string['info'] = 'حساب خارجي';
$string['issuer'] = 'خدمة OAuth 2';
$string['issuernologin'] = 'جهة الإصدار هذه لا يمكن استعمالها لتسجيل الدخول';
$string['linkedlogins'] = 'تسجيلات الدخول المرتبطة';
$string['linkedloginshelp'] = 'المساعدة بشأن تسجيلات الدخول المرتبطة';
$string['loginerror_authenticationfailed'] = 'فشلت عملية المصادقة.';
$string['loginerror_cannotcreateaccounts'] = 'تعذر العثور على حساب بعنوان بريدك الالكتروني.';
$string['loginerror_invaliddomain'] = 'عنوان البريد الالكتروني غير مسموح به في هذا الموقع.';
$string['loginerror_nouserinfo'] = 'لم ترجع أي بيانات للمستخدم. ربما خدمة OAuth 2 معرفة بشكل خاطئ.';
$string['loginerror_userincomplete'] = 'بيانات للمستخدم الراجعة لم تتضمن اسم الدخول وعنوان البريد الالكتروني. ربما خدمة OAuth 2 معرفة بشكل خاطئ.';
$string['noissuersavailable'] = 'لا أي من خدمات OAuth2 تسمح لك بربط حسابات دخول';
$string['notenabled'] = 'عذراً، إن إضافة مصادقة OAuth 2 غير مُمَكَّنة';
$string['notloggedindebug'] = 'محاولة تسجيل الدخول فشلت. السبب: {$a}';
$string['notwhileloggedinas'] = 'لا يمكن إدارة عمليات الدخول المرتبطة عند الدخول بمثابة مستخدم آخر.';
$string['oauth2:managelinkedlogins'] = 'إدارة حسابات الدخول المرتبطة العائدة له';
$string['plugindescription'] = 'تعرض إضافة المصادقة هذا قائمة بمزودي الهوية المتاحين في صفحة الدخول. عند اختيار أحد مزودي الهوية هؤلاء سيكون بإمكان المستخدمين تسجيل الدخول مستعملين معطيات حساباتهم من مزود OAuth 2.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'مصادقة OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'هذه الإضافة مرتبطة بنظام المصادقة الفرعي.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'ترميز التأكيد';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'البصمة الزمنية التي تنتهي عندها صلاحية ترميز التأكيد';
$string['privacy:metadata:auth_oauth2:email'] = 'البريد الالكتروني الخارجي الذي يتم تعيينه لهذا الحساب';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'مُعرَّف الجهة المُصدرة لـ OAuth 2 لدخول OAuth 2 هذا';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'حسابات OAuth 2 المرتبطة بحساب المستخدم في مودل';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'البصمة الزمنية التي عندها تم ربط حساب المستخدم بدخول OAuth 2 هذا';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'البصمة الزمنية التي عندها تم تعديل هذا السجل';
$string['privacy:metadata:auth_oauth2:userid'] = 'مُعرَّف حساب المستخدم الذي يرتبط به دخول OAuth 2';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'مُعرَّف المستخدم الذي قام بتعديل هذا الحساب';
$string['privacy:metadata:auth_oauth2:username'] = 'حساب المستخدم الخارجي المعين لهذا الحساب';
