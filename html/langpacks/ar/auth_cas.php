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
 * Strings for component 'auth_cas', language 'ar', version '4.1'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'خيار المصادقة';
$string['auth_cas_auth_logo'] = 'شعار طريقة المصادقة';
$string['auth_cas_auth_logo_description'] = 'أعط شعاراً لطريقة مصادقة خدمة المصادقة المركزية بحيث يكون مألوفاً للمستخدمين عندك.';
$string['auth_cas_auth_name'] = 'اسم طريقة المصادقة';
$string['auth_cas_auth_name_description'] = 'أعط اسماً لطريقة مصادقة خدمة المصادقة المركزية بحيث يكون مألوفاً للمستخدمين عندك.';
$string['auth_cas_auth_service'] = 'خدمة المصادقة المركزية';
$string['auth_cas_auth_user_create'] = 'أنشئ المستخدمين خارجياً';
$string['auth_cas_baseuri'] = 'عنوان رابط المخدم (لا شيء في حالة عدم وجود عنوان أساسي)<br /> على سبيل المثال، إذا كان مخدم خدمة التوثيق المركزية يتجاوب مع host.domaine.fr/CAS/ فإذن<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'الرابط الأساسي';
$string['auth_cas_broken_password'] = 'لا يمكنك المتابعة بدون تغيير كلمة مرورك، مع ذلك، لا تتوفر صفحة لإجراء ذلك التغيير. لطفاً، تواصل مع مشرف مودل عندك.';
$string['auth_cas_cantconnect'] = 'جزء LDAP لوحدة خدمة المصادقة المركزية لا يمكنه الاتصال بالمخدم: {$a}';
$string['auth_cas_casversion'] = 'إصدار بروتوكول خدمة المصادقة المركزية';
$string['auth_cas_certificate_check'] = 'إختر \'نعم\' إذا كنت تريد التحقق من شهادة المخدم';
$string['auth_cas_certificate_check_key'] = 'التحقق من صحة الخادم';
$string['auth_cas_certificate_path'] = 'مسار ملف سلسلة المصادقة المركزية (بصيغة PEM) للتحقق من شهادة المخدم';
$string['auth_cas_certificate_path_empty'] = 'إذا قمت بتمكين التحقق من المخدم، عليك تحديد مسار الشهادة';
$string['auth_cas_certificate_path_key'] = 'مسار الشهادة';
$string['auth_cas_changepasswordurl'] = 'عنوان تغير كلمة المرور';
$string['auth_cas_create_user'] = 'فعل هذا لو كنت ترغب في إدراج خدمة التوثيق المركزية لتوثيق للمستخدمين في قاعدة بيانات مودل. في حالة عدم الرغبة فقط المستخدمين المثبتين في قاعدة بيانات مودل يستطيعون الدخول إلى الموقع.';
$string['auth_cas_create_user_key'] = 'إنشاء المستخدم';
$string['auth_cas_curl_ssl_version'] = 'إصدار SSL (2 أو 3) ليتم استعماله. إفتراضياً، سيحاول PHP تقرير ذلك بنفسه، مع ذلك وفي بعض الحالات، لا بد من ضبطه يدوياً.';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_cas_curl_ssl_version_default'] = 'إفتراضي';
$string['auth_cas_curl_ssl_version_key'] = 'إصدار cURL SSL';
$string['auth_cas_enabled'] = 'في حالة رغبتك في استخدام توثيق  CAS قم نشغيل هذا.';
$string['auth_cas_hostname'] = 'اسم المستضيف لمخدم المصادقة المركزي <br />على سبيل المثال: host.domain.fr';
$string['auth_cas_hostname_key'] = 'اسم المضيف';
$string['auth_cas_invalidcaslogin'] = 'عذراَ، لقد أخفقت محاولت دخولك - بربما أنت غير مخول للقيام بذلك.';
$string['auth_cas_language'] = 'حدد لغة صفحات المصادقة';
$string['auth_cas_language_key'] = 'اللغة';
$string['auth_cas_logincas'] = 'الدخول عن طريق أتصال أمن';
$string['auth_cas_logout_return_url'] = 'أعط الرابط الذي ينبغي توجيه مستعملي خدمة المصادقة المركزية إليه بعد تسجيل خروجهم.<br />عند تركه فارغاً، سيتم توجيه المستخدمين إلى الموضع الذي يقوم مودل بتوجيههم إليه';
$string['auth_cas_logout_return_url_key'] = 'الرابط البديل لتسجيل الخروج';
$string['auth_cas_logoutcas'] = 'إختر \'نعم\' إذا أردت تسجيل الخروج من خدمة المصادقة المركزية عند قطع اتصالك بمودل';
$string['auth_cas_logoutcas_key'] = 'خيار الخروج من خدمة المصادقة المركزية';
$string['auth_cas_multiauth'] = 'إختر \'نعم\' إذا أردت أن يكون لديك مصادقة متعددة (خدمة المصادقة المركزية + طرق مصادقة أخرى)';
$string['auth_cas_multiauth_key'] = 'المصادقة المتعددة';
$string['auth_cas_port'] = 'منفذ خادم خدمة التوثيق المركزية';
$string['auth_cas_port_key'] = 'منفذ';
$string['auth_cas_proxycas'] = 'إختر \'نعم\' إن كنت تستعمل خدمة المصادقة المركزية في نمط تشغيل الوكيل';
$string['auth_cas_proxycas_key'] = 'نمط الوكيل';
$string['auth_cas_server_settings'] = 'إعدادات خادم خدمة التوثيق المركزية';
$string['auth_cas_text'] = 'أتصال أمن';
$string['auth_cas_use_cas'] = 'استخدم خدمة التوثيق المركزية';
$string['auth_cas_version'] = 'إصدار خدمة المصادقة المركزية المزمع استعمالها';
$string['auth_casdescription'] = 'هذه الطريقةِ تستعمل (خدمة التوثيق المركزيةِ) لتوثيق لمستخدمين في بيئة تسجيل دخول واحدة. تستطيع أيضاً استعمال توثيق LDAP المبسط. إذا كان اسم المستخدم وكلمة المرور صحيحين وفقاً لخدمة التوثيق المركزيةِ، سينشئ مودل إدخالاً جديداً في قاعدة بياناته للمستخدم الجديد ويَأْخذُ معلومات المستخدم من LDAP إذا كانت مطلوبة. في محاولات الدخول اللاحقة، سيتم التحقق من اسم المستخدم وكلمة المرور فقط.';
$string['auth_casnotinstalled'] = 'لا يمكن استخدام خدمة التوثيق المركزية. لم يتم تثبت وحدة (PHP LDAP)';
$string['noldapserver'] = 'لم يتم تعريف مخدم LDAP لخدمة المصادقة المركزية! تم تعطيل المزامنة.';
$string['pluginname'] = 'مُخدم خدمة المصادقة المركزية';
$string['privacy:metadata'] = 'إن إضافة مخدم خدمة المصادقة المركزية (SSO) لا تخزن أي بيانات شخصية.';
$string['synctask'] = 'مهمة مزامنة مستخدمي خدمة المصادقة المركزية';
