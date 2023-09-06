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
 * Strings for component 'auth_shibboleth', language 'ur', version '4.1'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'تصدیق کے طریقہ کار کا لوگو';
$string['auth_shib_auth_logo_description'] = 'شبولتھ تصدیق کے طریقہ کار کے لیے ایک لوگو فراہم کریں جو آپ کے صارفین کے لیے واقف ہو۔ یہ آپ کی شببولیت فیڈریشن کا لوگو ہو سکتا ہے، جیسے <tt>SWITHaai لاگ ان</tt> یا <tt>InCommon Login</tt> یا اس سے ملتا جلتا۔';
$string['auth_shib_auth_method'] = 'تصدیق کے طریقہ کار کا نام';
$string['auth_shib_auth_method_description'] = 'شبولتھ توثیق کے طریقہ کار کے لیے ایک نام فراہم کریں جو آپ کے صارفین سے واقف ہو۔ یہ آپ کی شببولیت فیڈریشن کا نام ہو سکتا ہے، جیسے <tt>SWITHaai لاگ ان</tt> یا <tt>InCommon Login</tt> یا اس سے ملتا جلتا۔';
$string['auth_shib_changepasswordurl'] = 'پاس ورڈ تبدیل کرنے کا یو آر ایل';
$string['auth_shib_contact_administrator'] = 'اگر آپ دی گئی تنظیموں سے وابستہ نہیں ہیں اور آپ کو اس سرور پر کسی کورس تک رسائی کی ضرورت ہے، تو براہ کرم <a href="mailto:{$a}">Moodle Administrator</a> سے رابطہ کریں۔';
$string['auth_shib_convert_data'] = 'ڈیٹا ترمیم اے پی آئی';
$string['auth_shib_convert_data_description'] = 'آپ اس اے پی آئی کو شیبلوتھ کے فراہم کردہ ڈیٹا میں مزید ترمیم کرنے کے لیے استعمال کر سکتے ہیں۔ مزید ہدایات کے لیے <a href="{$a}">README</a> پڑھیں۔';
$string['auth_shib_convert_data_filepath_warning'] = 'آپ ایسی فائل کا استعمال نہیں کر سکتے جو موجودہ سائٹ ڈیٹا ڈائرکٹری ($CFG->dataroot) کے اندر ڈیٹا ترمیم API کے طور پر موجود ہو۔';
$string['auth_shib_convert_data_warning'] = 'فائل موجود نہیں ہے یا ویب سرور کے عمل سے پڑھنے کے قابل نہیں ہے!';
$string['auth_shib_idp_list'] = 'شناخت فراہم کرنے والے';
$string['auth_shib_idp_list_description'] = 'شناخت فراہم کرنے والے entityIDs کی ایک فہرست فراہم کریں تاکہ صارف لاگ ان صفحہ پر سے انتخاب کر سکے۔<br />ہر سطر پر IdP کی entityID کے لیے کوما سے الگ کردہ ٹوپل ہونا چاہیے (شیبولتھ میٹا ڈیٹا فائل دیکھیں) اور IdP کا نام بطور اسے ڈراپ ڈاؤن فہرست میں ظاہر کیا جائے گا۔<br />اختیاری تیسرے پیرامیٹر کے طور پر آپ شیبلوتھ سیشن انیشیٹر کا مقام شامل کر سکتے ہیں جو اس صورت میں استعمال کیا جائے گا جب آپ کا موڈل انسٹالیشن ملٹی فیڈریشن سیٹ اپ کا حصہ ہو۔';
$string['auth_shib_instructions'] = 'شیبلوتھ کے ذریعے رسائی حاصل کرنے کے لیے <a href="{$a}">شیبلوتھ لاگ ان</a> استعمال کریں، اگر آپ کا ادارہ اس کی حمایت کرتا ہے۔ بصورت دیگر، یہاں دکھایا گیا عام لاگ ان فارم استعمال کریں۔';
$string['auth_shib_instructions_help'] = 'یہاں آپ کو اپنے صارفین کے لیے شیبلوتھ کی وضاحت کے لیے حسب ضرورت ہدایات فراہم کرنی چاہئیں۔ یہ ہدایات سیکشن میں لاگ ان صفحہ پر دکھایا جائے گا. ہدایات میں "<b>{$a}</b>" کا ایک لنک شامل ہونا چاہیے جسے صارف لاگ ان کرنے پر کلک کرتے ہیں۔';
$string['auth_shib_instructions_key'] = 'لاگ ان ہدایات';
$string['auth_shib_integrated_wayf'] = 'موڈل WAYF سروس';
$string['auth_shib_integrated_wayf_description'] = 'اگر آپ اسے فعال کرتے ہیں، تو موڈل شبولتھ کے لیے کنفیگر کردہ کی بجائے اپنی WAYF سروس استعمال کرے گا۔ موڈل  اس متبادل لاگ ان صفحہ پر ایک ڈراپ ڈاؤن فہرست دکھائے گا جہاں صارف کو اپنا شناختی فراہم کنندہ منتخب کرنا ہوگا۔';
$string['auth_shib_logout_return_url'] = 'متبادل لاگ آؤٹ واپسی یو آر ایل';
$string['auth_shib_logout_return_url_description'] = 'وہ یو آر ایل فراہم کریں جس پر لاگ آؤٹ کرنے کے بعد شبولتھ صارفین کو ری ڈائریکٹ کیا جائے گا۔<br />اگر خالی چھوڑ دیا جائے تو، صارفین کو اس مقام پر بھیج دیا جائے گا جہاں موڈل صارفین کو ری ڈائریکٹ کرے گا۔';
$string['auth_shib_logout_url'] = 'شبولتھ سروس پرووائیڈر لاگ آؤٹ ہینڈلر یو آر ایل';
$string['auth_shib_logout_url_description'] = 'شبولتھ سروس پرووائیڈر لاگ آؤٹ ہینڈلر کو یو آر ایل فراہم کریں۔ یہ عام طور پر <tt>/Shibboleth.sso/Logout</tt> ہے۔';
$string['auth_shib_no_organizations_warning'] = 'اگر آپ مربوط WAYF سروس استعمال کرنا چاہتے ہیں، تو آپ کو شناخت فراہم کرنے والے entityIDs، ان کے ناموں اور اختیاری طور پر سیشن شروع کرنے والے کی کوما سے الگ کردہ فہرست فراہم کرنی ہوگی۔';
$string['auth_shib_only'] = 'صرف شبولتھ';
$string['auth_shib_only_description'] = 'اس اختیار کو چیک کریں اگر شیبلوتھ کی توثیق نافذ کی جائے گی';
$string['auth_shib_username_description'] = 'ویب سرور شیبلوتھ ماحولیاتی متغیر کا نام جو موڈل صارف نام کے طور پر استعمال کیا جائے گا۔';
$string['auth_shibboleth_errormsg'] = 'براہ کرم اس تنظیم کو منتخب کریں جس کے آپ رکن ہیں!';
$string['auth_shibboleth_login'] = 'شبولتھ لاگ ان';
$string['auth_shibboleth_login_long'] = 'شبولتھ کے ذریعے موڈل میں لاگ ان کریں';
$string['auth_shibboleth_manual_login'] = 'دستی لاگ ان';
$string['auth_shibboleth_select_member'] = 'میں کا ممبر ہوں۔۔۔';
$string['auth_shibboleth_select_organization'] = 'شببولیتھ کے ذریعے تصدیق کے لیے، براہ کرم ڈراپ ڈاؤن مینو سے اپنی تنظیم منتخب کریں:';
$string['auth_shibbolethdescription'] = 'اس طریقہ کو استعمال کرتے ہوئے صارفین کو شبولتھ کا استعمال کرتے ہوئے تخلیق اور تصدیق کی جاتی ہے۔ سیٹ اپ کی تفصیلات کے لیے، <a href="{$a}">Shibboleth README</a> دیکھیں۔';
$string['pluginname'] = 'شیبلوتھ';
$string['privacy:metadata'] = 'شیبلوتھ توثیق پلگ ان کوئی ذاتی ڈیٹا ذخیرہ نہیں کرتا ہے۔';
$string['shib_invalid_account_error'] = 'ایسا لگتا ہے کہ آپ شبولتھ تصدیق شدہ ہیں لیکن موڈل کے پاس آپ کے صارف نام کے لیے کوئی درست اکاؤنٹ نہیں ہے۔ ہو سکتا ہے آپ کا اکاؤنٹ موجود نہ ہو یا اسے معطل کر دیا گیا ہو۔';
$string['shib_no_attributes_error'] = 'ایسا لگتا ہے کہ آپ شبولتھ کی توثیق شدہ ہیں لیکن موڈل کو صارف کی کوئی صفت موصول نہیں ہوئی۔ براہ کرم چیک کریں کہ آپ کا شناختی فراہم کنندہ ضروری صفات ({$a}) کو سروس پرووائیڈر کے لیے جاری کرتا ہے موڈل چل رہا ہے یا اس سرور کے ویب ماسٹر کو مطلع کریں۔';
$string['shib_not_all_attributes_error'] = 'موڈل کو کچھ شبو لیتھ اوصاف کی ضرورت ہے جو آپ کے معاملے میں موجود نہیں ہیں۔ اوصاف یہ ہیں: {$a}<br />براہ کرم اس سرور کے ویب ماسٹر یا اپنے شناختی فراہم کنندہ سے رابطہ کریں۔';
$string['shib_not_set_up_error'] = 'شبولتھ کی توثیق درست طریقے سے ترتیب نہیں دی گئی ہے کیونکہ اس صفحہ کے لیے کوئی شبولتھ ماحولیاتی متغیر موجود نہیں ہے۔ براہ کرم مزید ہدایات کے لیے <a href="{$a}">README</a> سے مشورہ کریں کہ شبولتھ توثیق کو کیسے ترتیب دیا جائے یا اس موڈل انسٹالیشن کے ویب ماسٹر سے رابطہ کریں۔';
