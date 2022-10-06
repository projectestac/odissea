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
 * Strings for component 'auth_oidc', language 'ar', version '3.11'.
 *
 * @package     auth_oidc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cfg_autoappend_desc'] = 'قم بإلحاق هذه الجملة عند توثيق المستخدمين باستعمال طريقة المصادقة "معطيات كلمة المرور المملوكة للمورد". هذا مفيد عندما يتطلب مزود الهوية الخاص بك نطاقًا مشتركًا، ولكنه لا يريد أن يفرض على المستخدمين طباعته عند تسجيل دخولهم. على سبيل المثال، إذا كان مستخدم الاتصال في Azure AD B2C هو بالكامل "james@example.com" وقمت بإدخال "@example.com" هنا، سيكون على المستخدم فقط إدخال كلمة "james" بمثابة اسم المستخدم له. <br /><b>ملاحظة:</b> في حالة وجود تضارب في أسماء المستخدمين - أي وجود مستخدم مودل آخر بنفس الاسم، يتم استعمال أولوية ملحق المصادقة لتقرير أي من المستخدمين يفوز منهما.';
$string['cfg_domainhint_key'] = 'تلميح المجال';
$string['cfg_icon_desc'] = 'أيقونة تُعرض بجوار اسم المزود في صفحة تسجيل الدخول.';
$string['cfg_iconalt_go'] = 'دائرة خضراء';
$string['cfg_iconalt_rightarrow'] = 'أيقونة سهم متجه يميناً';
$string['cfg_iconalt_userlock'] = 'المستخدم مع أيقونة القفل';
$string['cfg_loginflow_authcode_desc'] = 'عبر اللجوء إلى هذا المسلك، ينقر المستخدم على اسم مزود الهوية (أنظر "اسم المزود" أعلاه) في صفحة تسجيل الدخول لمودل وتتم إعادة توجيهه إلى ذلك المزود للدخول. بمجرد دخوله بنجاح، تتم إعادة توجيه المستخدم إلى مودل حيث تجري عملية الدخول بشفافية. هذه هي الطريقة القياسية والأكثر أمانًا لتسجيل دخول المستخدمين.';
$string['cfg_loginflow_rocreds'] = 'منح كلمة مرور حساب مالك المورد';
$string['cfg_logoutendpoint_key'] = 'نهاية النهاية لتسجيل الخروج';
$string['cfg_opname_key'] = 'اسم المزود';
$string['cfg_userrestrictions_desc'] = 'إسمح فقط للمستخدمين الذين يلبون تقييدات معينة بتسجيل الدخول. <br /><b>كيفية استعمال تقييدات المستخدمين: </b> <ul><li>أدخل نمط <a href="https://en.wikipedia.org/wiki/Regular_expression">تعبير إعتيادي</a> يطابق اسم المستخدم لمن تريد السماح له.</li><li>أدخل نمطًا واحدًا لكل سطر</li><li>إذا أدخلت أنماطًا متعددة، سيتم السماح للمستخدم إذا لبى أي منها.</li><li>ينبغي إسباق الحرف "/" بالحرف "\\".</li><li>إذا لم تقم بإدخال أي تقييدات أعلاه، سيكون كل المستخدمين الذين بإمكانهم تسجيل الدخول في مزود اتصال OpenID مقبولين من جهة مودل.</li><li>أي مستخدم لا يتطابق حسابه مع أي من الأنماط المدخلة سيتم منعه من تسجيل الدخول باستعمال اتصال OpenID.</li></ul>';
$string['errorauthdisconnectemptypassword'] = 'لا يمكن لكلمة المرور أن تكون فارغة';
$string['errorjwtunsupportedalg'] = 'JWS Alg أو JWE غير مدعومة';
$string['event_debug'] = 'رسالة تصحيح الخطأ';
$string['eventuserauthed'] = 'مستخدم تم تفويضه عبر اتصال OpenID';
$string['eventuserconnected'] = 'مستخدم اتصل مع اتصال OpenID';
$string['eventusercreated'] = 'مستخدم تم إنشاؤه عبر اتصال OpenID';
$string['eventuserdisconnected'] = 'مستخدم قُطع اتصاله مع اتصال OpenID';
$string['eventuserloggedin'] = 'مستخدم سجل دخوله عبر اتصال OpenID';
$string['pluginname'] = 'إتصال OpenID';
$string['privacy:metadata:auth_oidc_prevlogin:password'] = 'حقل كلمة مرور المستخدم (المشفرة) السابقة';
$string['privacy:metadata:auth_oidc_token:oidcusername'] = 'اسم المستخدم لحساب مستخدم OIDC';
$string['privacy:metadata:auth_oidc_token:username'] = 'اسم المستخدم لحساب مستخدم مودل';
$string['ucp_disconnect_details'] = 'هذا سيقطع اتصال حسابك في مودل مع {$a}. سيكون عليك إنشاء اسم مستخدم وكلمة مرور للدخول إلى مودل.';
$string['ucp_o365accountconnected'] = 'حساب مايكروسوفت أوفس 365 هذا مرتبط سابقًا مع حساب آخر في مودل.';
