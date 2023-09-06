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
 * Strings for component 'auth_email', language 'ar', version '4.1'.
 *
 * @package     auth_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = '<p>التسجيل الشخصي المبني على أساس البريد الالكتروني يُمكِّن المستخدم من إنشاء حسابه الخاص عبر زر \'إنشاء حساب جديد\' في صفحة الدخول. سيستلم بعدها المستخدم رسالة الكترونية تتضمن رابطاً مؤمناً إلى صفحة يمكنه عبرها تأكيد حسابه. تسجيلات الدخول اللاحقة تقوم فقط بالتحقق من اسم المستخدم وكلمة المرور عبر مقارنتهما بما هو مخزون في قاعدة بيانات مودل.</p><p>ملاحظة: فضلاً عن تمكين الإضافة، لا بد من اختيار التسجيل الشخصي المبني على أساس البريد الالكتروني من القائمة المنسدلة لأنواع التسجيل الذاتي في صفحة \'إدارة المصادقة\'.</p>';
$string['auth_emailnoemail'] = 'تمت محاولة إرسال بريد إلكتروني لك ولكنها فشلت';
$string['auth_emailrecaptcha'] = 'يضيف عنصر تأكيد بشكل مرئي/مسموع إلى صفحة تسجيل الدخول بالنسبة إلى المستخدمين الراغبين بالتسجيل الشخصي المبني على أساس البريد الالكتروني. هذا من شأنه حماية موقعك من المزعجين ويرفع من أدائه بشكل عام. أنظر https://www.google.com/recaptcha للمزيد من التفاصيل.';
$string['auth_emailrecaptcha_key'] = 'تمكين عنصر reCAPTCHA';
$string['auth_emailsettings'] = 'الإعدادات';
$string['pluginname'] = 'التسجيل الذاتي عن طريق البريد الالكتروني';
$string['privacy:metadata'] = 'إن إضافة التسجيل الشخصي المبني على أساس البريد الالكتروني لا تخزن أي بيانات شخصية.';
