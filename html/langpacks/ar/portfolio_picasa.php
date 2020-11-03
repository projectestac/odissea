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
 * Strings for component 'portfolio_picasa', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   portfolio_picasa
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'مُعرَّف الزبون';
$string['noauthtoken'] = 'لم يتم تلقي ترميز المصادقة من Google. لطفاً، تأكد من أنك تسمح لمودل بالوصول إلى حسابك في Google.';
$string['nooauthcredentials'] = 'شهادات مصادقة OAuth مطلوبة.';
$string['nooauthcredentials_help'] = 'لاستعمال ملحق محفظة Picasa، عليك تعريف شهادة مصادقة OAuth في إعدادات المحفظة.';
$string['oauthinfo'] = '<p>لاستعمال هذا الملحق، عليك تسجيل موقعك في Google، كما هو موصوف في التوثيقات <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>كجزء من عملية التسجيل، عليك إدخال الرابط الآتي بمثابة \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p><p>بمجرد التسجيل، سيتم تزويدك بمُعرَّف الزبون وكلمة السر وبهما يمكنك تهيئة كل ملاحق Google Drive و Picasa.</p>';
$string['pluginname'] = 'Picasa';
$string['privacy:metadata'] = 'هذا الملحق يرسل البيانات خارجياً إلى حساب Picasa مرتبط. هو لا يحفظ البيانات محلياً';
$string['privacy:metadata:data'] = 'البيانات الشخصية المُمرَّرة عبر نظام المحفظة الفرعي';
$string['secret'] = 'كلمة السر';
$string['sendfailed'] = 'فشل نقل الملف {$a} إلى Picasa';
