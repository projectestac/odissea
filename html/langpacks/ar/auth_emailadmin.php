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
 * Strings for component 'auth_emailadmin', language 'ar', version '3.11'.
 *
 * @package     auth_emailadmin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emailadmindescription'] = '<p>التسجيل الشخصي المبني على أساس البريد الالكتروني مع تأكيد المشرف، يُمكِّن المستخدم من إنشاء حسابه الخاص عبر زر \'إنشاء حساب جديد\' في صفحة الدخول. سيستلم بعدها مشرفو الموقع رسالة الكترونية تتضمن رابطاً مؤمناً إلى صفحة يمكن عبرها تأكيد الحساب. تسجيلات الدخول اللاحقة تقوم فقط بالتحقق من اسم المستخدم وكلمة المرور عبر مقارنتهما بما هو مخزون في قاعدة بيانات مودل.</p><p>ملاحظة: فضلاً عن تمكين الملحق، لا بد من اختيار التسجيل الشخصي المبني على أساس البريد الالكتروني مع تأكيد المشرف من القائمة المنسدلة لأنواع التسجيل الذاتي في صفحة \'إدارة المصادقة\'.</p>';
$string['auth_emailadminnoemail'] = 'تمت محاولة إرسال بريد إلكتروني لك ولكنها فشلت';
$string['auth_emailadminnotif_strategy_allupdate'] = 'كل المشرفين والمستخدمين الذين لديهم إمكانية تحديث المستخدمين';
$string['auth_emailadminrecaptcha'] = 'يضيف عنصر تأكيد بشكل مرئي/مسموع إلى صفحة تسجيل الدخول بالنسبة إلى المستخدمين الراغبين بالتسجيل الشخصي المبني على أساس البريد الالكتروني. هذا من شأنه حماية موقعك من المزعجين ويرفع من أدائه بشكل عام. أنظر https://www.google.com/recaptcha للمزيد من التفاصيل. <br /><em>يتطلب ذلك وجود الامتداد cURL لـ PHP.</em>';
$string['auth_emailadminrecaptcha_key'] = 'تمكين عنصر reCAPTCHA';
$string['pluginname'] = 'التسجيل الذاتي المبني على البريد الالكتروني مع تأكيد المشرف';
