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
 * Strings for component 'enrol_flatfile', language 'ur', version '4.1'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'فائل انکوڈنگ';
$string['expiredaction'] = 'اندراج کی میعاد ختم ہونے کی کارروائی';
$string['expiredaction_help'] = 'صارف کے اندراج کی میعاد ختم ہونے پر انجام دینے کے لیے کارروائی کا انتخاب کریں۔ براہ کرم نوٹ کریں کہ کورس کے اندراج کے دوران کچھ صارف ڈیٹا اور سیٹنگز کو کورس سے صاف کر دیا جاتا ہے۔';
$string['filelockedmail'] = 'فائل بیسڈ انرولمنٹس ({$a}) کے لیے آپ جو ٹیکسٹ فائل استعمال کر رہے ہیں وہ کرون کے عمل سے حذف نہیں ہو سکتی۔ اس کا عام طور پر مطلب ہے کہ اس پر اجازتیں غلط ہیں۔ براہ کرم اجازتوں کو درست کریں تاکہ موڈل فائل کو حذف کر سکے، ورنہ اس پر بار بار کارروائی ہو سکتی ہے۔';
$string['filelockedmailsubject'] = 'اہم خرابی: اندراج فائل';
$string['flatfile:manage'] = 'دستی طور پر صارف کے اندراج کا نظم کریں';
$string['flatfile:unenrol'] = 'دستی طور پر کورس سے صارفین کا اندراج ختم کریں';
$string['flatfileenrolments'] = 'فلیٹ فائل (CSV) اندراج';
$string['flatfilesync'] = 'فلیٹ فائل اندراج کی مطابقت پذیری';
$string['location'] = 'فائل کا مقام';
$string['location_desc'] = 'انرولمنٹ فائل کا مکمل راستہ بتائیں۔ پروسیسنگ کے بعد فائل خود بخود ڈیلیٹ ہو جاتی ہے۔';
$string['mapping'] = 'فلیٹ فائل رول میپنگ';
$string['messageprovider:flatfile_enrolment'] = 'فلیٹ فائل اندراج کے پیغامات';
$string['notifyadmin'] = 'منتظم کو مطلع کریں';
$string['notifyenrolled'] = 'اندراج شدہ صارفین کو مطلع کریں';
$string['notifyenroller'] = 'اندراج کے لیے ذمہ دار صارف کو مطلع کریں';
$string['pluginname'] = 'فلیٹ فائل (CSV)';
$string['pluginname_desc'] = 'یہ طریقہ آپ کے بتائے ہوئے مقام پر خصوصی طور پر فارمیٹ شدہ ٹیکسٹ فائل کو بار بار چیک کرے گا اور اس پر کارروائی کرے گا۔ فائل ایک کوما سے الگ کی گئی فائل ہے جس کے بارے میں فرض کیا گیا ہے کہ ہر لائن میں چار یا چھ فیلڈز ہیں: آپریشن، رول، یوزر آئی ڈی نمبر، کورس آئی ڈی نمبر [، اسٹارٹ ٹائم [، اینڈ ٹائم]] جہاں: * آپریشن - ایڈ | ڈیل * کردار - طالب علم | استاد | استاد ایڈٹ * صارف کا شناختی نمبر - صارف ٹیبل میں آئی ڈی نمبر NB نہیں ہے * کورس idnumber - کورس ٹیبل میں idnumber NB نہیں ہے * آغاز کا وقت - آغاز کا وقت (دور کے بعد سے سیکنڈوں میں) - اختیاری * اختتامی وقت - اختتامی وقت (دور کے بعد کے سیکنڈوں میں) - اختیاری یہ کچھ اس طرح نظر آسکتا ہے: <pre class="informationbox"> شامل کریں، طالب علم، 5، CF101 شامل کریں، استاد، 6، CF101 شامل کریں، استاد ایڈٹ، 7، CF101 ڈیل، طالب علم، 8، CF101 ڈیل، طالب علم، 17، CF101 شامل کریں, طالب علم, 21, CF101, 1091115000, 1091215000 </pre>';
$string['privacy:metadata:enrol_flatfile'] = 'فلیٹ فائل (CSV) انرولمنٹ پلگ ان enrol_flatfile ٹیبل میں مستقبل کے اندراج سے متعلق ذاتی ڈیٹا محفوظ کر سکتا ہے۔';
$string['privacy:metadata:enrol_flatfile:action'] = 'دی گئی تاریخ کو اندراج کی کارروائی متوقع ہے';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'کورس آئی ڈی جس سے اندراج کا تعلق ہے';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'تفویض یا غیر تفویض کردہ کردار کی آئی ڈی';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'وہ وقت جب اندراج ختم ہوتا ہے';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'وہ وقت جب اندراج میں ترمیم کی جاتی ہے';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'وہ وقت جب اندراج شروع ہوتا ہے';
$string['privacy:metadata:enrol_flatfile:userid'] = 'صارف کی وہ آئی ڈی جس سے کردار کی تفویض کا تعلق ہے';
