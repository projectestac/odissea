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
 * Strings for component 'portfolio_googledocs', language 'ar', version '4.5'.
 *
 * @package     portfolio_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'مُعرَّف الزبون';
$string['noauthtoken'] = 'لم يتم تلقي ترميز المصادقة من Google. لطفاً، تأكد من أنك تسمح لمودل بالوصول إلى حسابك في Google.';
$string['nooauthcredentials'] = 'شهادات مصادقة OAuth مطلوبة.';
$string['nooauthcredentials_help'] = 'لاستعمال ملحق محفظة Google Drive، عليك تعريف شهادة مصادقة OAuth في إعدادات المحفظة.';
$string['nosessiontoken'] = 'ترميز الجلسة غير موجود مما يمنع التصدير إلى Google.';
$string['oauthinfo'] = '<p>لاستعمال هذه الإضافة، عليك تسجيل موقعك في Google، كما هو موصوف في التوثيقات <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>كجزء من عملية التسجيل، عليك إدخال الرابط الآتي بمثابة \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p><p>بمجرد التسجيل، سيتم تزويدك بمُعرَّف الزبون وكلمة السر وبهما يمكنك تهيئة كل إضافات Google Drive.</p>';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata'] = 'هذه الإضافة ترسل البيانات خارجياً إلى حساب Google مرتبط. هو لا يحفظ البيانات محلياً.';
$string['privacy:metadata:data'] = 'البيانات الشخصية المُمرَّرة عبر نظام المحفظة الفرعي';
$string['secret'] = 'كلمة السر';
$string['sendfailed'] = 'فشل نقل الملف {$a} إلى Google';
