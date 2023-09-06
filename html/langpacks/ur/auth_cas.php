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
 * Strings for component 'auth_cas', language 'ur', version '4.1'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'توثیق کا انتخاب';
$string['auth_cas_auth_logo'] = 'تصدیق کے طریقہ کار کا لوگو';
$string['auth_cas_auth_logo_description'] = 'سی اے ایس توثیق کے طریقہ کار کے لیے ایک لوگو فراہم کریں جو آپ کے صارفین سے واقف ہو۔ توثیق کے طریقہ کار کے لیے ایک لوگو فراہم کریں جو آپ کے صارفین سے واقف ہو۔';
$string['auth_cas_auth_name'] = 'تصدیق کے طریقہ کار کا نام';
$string['auth_cas_auth_name_description'] = 'سی اے ایس تصدیق کے طریقہ کار کے لیے ایک نام فراہم کریں جو آپ کے صارفین کو معلوم ہو۔';
$string['auth_cas_auth_service'] = 'سی اے ایس';
$string['auth_cas_auth_user_create'] = 'بیرونی طور پر صارفین بنائیں';
$string['auth_cas_baseuri'] = 'سرور کا URI (بیس یو آر آئی کے بغیر کچھ نہیں)<br />مثال کے طور پر، اگر سی اے ایس سرور host.domaine.fr/CAS/ کو جواب دیتا ہے تو<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'بیس یو آر آئی';
$string['auth_cas_broken_password'] = 'آپ اپنا پاس ورڈ تبدیل کیے بغیر آگے نہیں بڑھ سکتے، تاہم اسے تبدیل کرنے کے لیے کوئی صفحہ دستیاب نہیں ہے۔ براہ کرم اپنے موڈل ایڈمنسٹریٹر سے رابطہ کریں۔';
$string['auth_cas_cantconnect'] = 'CAS-module کا ایل ڈی اے پی حصہ سرور سے منسلک نہیں ہو سکتا: {$a}';
$string['auth_cas_casversion'] = 'سی اے ایس پروٹوکول ورژن';
$string['auth_cas_certificate_check'] = 'اگر آپ سرور سرٹیفکیٹ کی توثیق کرنا چاہتے ہیں تو \'ہاں\' کو منتخب کریں';
$string['auth_cas_certificate_check_key'] = 'سرور کی توثیق';
$string['auth_cas_certificate_path'] = 'سرور سرٹیفکیٹ کی توثیق کرنے کے لیےسی اے چین فائل (پی ای ایم فارمیٹ) کا راستہ';
$string['auth_cas_certificate_path_empty'] = 'اگر آپ سرور کی توثیق کو آن کرتے ہیں، تو آپ کو سرٹیفکیٹ کا راستہ بتانا ہوگا';
$string['auth_cas_certificate_path_key'] = 'سرٹیفکیٹ پاتھ';
$string['auth_cas_changepasswordurl'] = 'پاس ورڈ تبدیل کرنے کا یو آر ایل';
$string['auth_cas_create_user'] = 'اگر آپ موڈل ڈیٹا بیس میں سی اے ایس سے تصدیق شدہ صارفین کو داخل کرنا چاہتے ہیں تو اسے آن کریں۔ اگر نہیں تو پھر صرف وہی صارف لاگ ان کر سکتے ہیں جو موڈل ڈیٹا بیس میں پہلے سے موجود ہیں۔';
$string['auth_cas_create_user_key'] = 'صارف بنائیں';
$string['auth_cas_curl_ssl_version'] = 'ایس ایس ایل ورژن (2 یا 3) استعمال کرنے کے لیے۔ پہلے سے طے شدہ طور پر پی ایچ پی خود اس کا تعین کرنے کی کوشش کرے گا، حالانکہ بعض صورتوں میں اسے دستی طور پر سیٹ کیا جانا چاہیے۔';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'ایس ایس ایل وی 2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'ایس ایس ایل وی 3';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'ٹی ایل ایس وی 1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'ٹی ایل ایس وی 1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'ٹی ایل ایس وی 1.2';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'ٹی ایل ایس وی 1.x';
$string['auth_cas_curl_ssl_version_default'] = 'طے شدہ';
$string['auth_cas_curl_ssl_version_key'] = 'سی یو آر ایل ایس ایس ایل ورژن';
$string['auth_cas_enabled'] = 'اگر آپ سی اے ایس تصدیق استعمال کرنا چاہتے ہیں تو اسے آن کریں۔';
$string['auth_cas_hostname'] = 'سی اے ایس سرور کا میزبان نام <br />جیسے: host.domain.fr';
$string['auth_cas_hostname_key'] = 'میزبان کا نام';
$string['auth_cas_invalidcaslogin'] = 'معذرت، آپ کا لاگ ان ناکام ہو گیا ہے - آپ کو اجازت نہیں دی جا سکی';
$string['auth_cas_language'] = 'تصدیقی صفحات کے لیے زبان منتخب کریں';
$string['auth_cas_language_key'] = 'زبان';
$string['auth_cas_logincas'] = 'محفوظ کنکشن تک رسائی';
$string['auth_cas_logout_return_url'] = 'وہ یو آر ایل فراہم کریں جس پر لاگ آؤٹ کرنے کے بعد سی اے ایس صارفین کو ری ڈائریکٹ کیا جائے گا۔<br />اگر خالی چھوڑ دیا جائے تو، صارفین کو اس مقام پر بھیج دیا جائے گا جہاں موڈل صارفین کو ری ڈائریکٹ کرے گا';
$string['auth_cas_logout_return_url_key'] = 'متبادل لاگ آؤٹ واپسی یو آر ایل';
$string['auth_cas_logoutcas'] = 'اگر آپ موڈل سے منقطع ہونے پر سی اے ایس سے لاگ آؤٹ کرنا چاہتے ہیں تو \'ہاں\' کو منتخب کریں';
$string['auth_cas_logoutcas_key'] = 'سی اے ایس لاگ آؤٹ آپشن';
$string['auth_cas_multiauth'] = 'اگر آپ کثیر تصدیق (سی اے ایس + دیگر تصدیق) کرنا چاہتے ہیں تو \'ہاں\' کو منتخب کریں۔';
$string['auth_cas_multiauth_key'] = 'کثیر تصدیق';
$string['auth_cas_port'] = 'سی اے ایس سرور کا پورٹ';
$string['auth_cas_port_key'] = 'پورٹ';
$string['auth_cas_proxycas'] = 'اگر آپ پراکسی موڈ میں سی اے ایس استعمال کرتے ہیں تو \'ہاں\' کو منتخب کریں';
$string['auth_cas_proxycas_key'] = 'پراکسی موڈ';
$string['auth_cas_server_settings'] = 'سی اے ایس سرور کی ترتیب';
$string['auth_cas_text'] = 'محفوظ کنکشن';
$string['auth_cas_use_cas'] = 'سی اے ایس استعمال کرو';
$string['auth_cas_version'] = 'استعمال کرنے کے لیے سی اے ایس پروٹوکول ورژن';
$string['auth_casdescription'] = 'یہ طریقہ استعمال کنندگان کو سنگل سائن آن ماحول (ایس ایس او) میں تصدیق کرنے کے لیے سی اے ایس سرور (مرکزی تصدیقی خدمت) کا استعمال کرتا ہے۔ آپ ایک سادہ ایل ڈی اے پی توثیق بھی استعمال کر سکتے ہیں۔ اگر دیا گیا صارف نام اور پاس ورڈ سی اے ایس کے مطابق درست ہیں، موڈل اپنے ڈیٹا بیس میں صارف کی ایک نئی انٹری بناتا ہے، اگر ضرورت ہو تو LDAP سے صارف کی خصوصیات لیتا ہے۔ مندرجہ ذیل لاگ ان پر صرف صارف نام اور پاس ورڈ چیک کیا جاتا ہے۔';
$string['auth_casnotinstalled'] = 'سی اے ایس کی توثیق کا استعمال نہیں کر سکتے۔ پی ایچ پی ایل ڈی اے پی ماڈیول انسٹال نہیں ہے۔';
$string['noldapserver'] = 'سی اے ایس کے لیے کوئی LDAP سرور تشکیل نہیں دیا گیا! مطابقت پذیری غیر فعال ہے۔';
$string['pluginname'] = 'سی اے ایس سرور (ایس ایس او)';
$string['privacy:metadata'] = 'سی اے ایس سرور (ایس ایس او) تصدیقی پلگ ان کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔';
$string['synctask'] = 'سی اے ایس صارفین کام کی مطابقت پذیری کرتے ہیں';
