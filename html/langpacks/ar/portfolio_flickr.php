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
 * Strings for component 'portfolio_flickr', language 'ar', version '4.1'.
 *
 * @package     portfolio_flickr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'مفتاح واجهة برمجة التطبيق';
$string['contenttype'] = 'أنواع المحتوى';
$string['err_noapikey'] = 'لا يوجد مفتاح واجهة برمجة التطبيق';
$string['err_noapikey_help'] = 'لم يتم تعريف مفتاح واجهة برمجة التطبيق لهذه الإضافة. يمكنك الحصول على واحد منها من صفحة خدمات Flickr.';
$string['hidefrompublicsearches'] = 'أتريد إخفاء هذه الصور عن عمليات البحث العامة؟';
$string['isfamily'] = 'للعائلة';
$string['isfriend'] = 'مرئي للأصدقاء';
$string['ispublic'] = 'عمومي (أي شخص يمكنه مشاهدتها)';
$string['moderate'] = 'معتدل';
$string['noauthtoken'] = 'تعذر استرجاع ترميز المصادقة لاستعماله في هذه الجلسة';
$string['other'] = 'صور فنية، تخطيطات، رسوم مولدة حاسوبياً وغيرها من الصور غير الفوتوغرافية';
$string['photo'] = 'الصور';
$string['pluginname'] = 'Flickr.com';
$string['privacy:metadata'] = 'هذه الإضافة ترسل البيانات خارجياً إلى حساب Flickr مرتبط. هو لا يحفظ البيانات محلياً';
$string['privacy:metadata:data'] = 'البيانات الشخصية المُمرَّرة عبر نظام المحفظة الفرعي';
$string['restricted'] = 'مُقيَّد';
$string['safe'] = 'آمن';
$string['safetylevel'] = 'مستوى الأمان';
$string['screenshot'] = 'لقطات الشاشة';
$string['set'] = 'طقم';
$string['setupinfo'] = 'تعليمات الإعداد';
$string['setupinfodetails'] = 'للحصول على مفتاح واجهة برمجة التطبيق والنص السري، سجل دخولك في Flickr و <a href="{$a->applyurl}">تقدم بطلب للحصول على مفتاح جديد</a>. بمجرد توليد المفتاح والنص السري لك، تابع الرابط \'Edit auth flow for this app\' في الصفحة. إختر \'App Type\' ليكون \'Web Application\'. في الحقل \'Callback URL\' أدخل القيمة: <br /><code>{$a->callbackurl}</code><br />إختيارياً، يمكنك أيضاً تقديم وصف موقع مودل الخاص بك وشعاره. هذه القيم يمكن ضبطها لاحقاً عبر <a href="{$a->keysurl}">الصفحة</a> التي تدرج فيها تطبيقاتك في Flickr.';
$string['sharedsecret'] = 'النص السري';
$string['title'] = 'العنوان';
$string['uploadfailed'] = 'تعذر رفع الصورة/الصور إلى flickr.com: {$a}';
