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
 * Strings for component 'search_solr', language 'ur', version '4.1'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'مخصوص سولر سرور دستیاب نہیں ہے یا مخصوص انڈیکس موجود نہیں ہے';
$string['connectionsettings'] = 'کنکشن کی ترتیبات';
$string['errorcreatingschema'] = 'سولر اسکیما بنانے میں خرابی: {$a}';
$string['errorsolr'] = 'سولر سرچ انجن نے ایک خرابی کی اطلاع دی: {$a}';
$string['errorvalidatingschema'] = 'سولر اسکیما کی توثیق کرنے میں خرابی: فیلڈ {$a->fieldname} موجود نہیں ہے۔ براہ کرم مطلوبہ فیلڈز ترتیب دینے کے لیے <a href="{$a->setupurl}">اس لنک پر عمل کریں</a>۔';
$string['extensionerror'] = 'اپاچی سولر پی ایچ پی ایکسٹینشن انسٹال نہیں ہے۔ براہ کرم دستاویزات کی جانچ کریں۔';
$string['fileindexing'] = 'فائل انڈیکسنگ کو فعال کریں';
$string['fileindexing_help'] = 'اگر آپ کا سولر انسٹال اس کو سپورٹ کرتا ہے، تو یہ فیچر موڈل کو فائلوں کو انڈیکس کرنے کے لیے بھیجنے کی اجازت دیتا ہے۔<br/> تمام فائلوں کو شامل کرنے کے لیے اس آپشن کو فعال کرنے کے بعد آپ کو سائٹ کے تمام مواد کو دوبارہ انڈیکس کرنے کی ضرورت ہوگی۔';
$string['fileindexsettings'] = 'فائل اشاریہ سازی کی ترتیبات';
$string['maxindexfilekb'] = 'انڈیکس میں فائل کا زیادہ سے زیادہ سائز (kB)';
$string['maxindexfilekb_help'] = 'کلو بائٹس کی اس تعداد سے بڑی فائلیں سرچ انڈیکسنگ میں شامل نہیں ہوں گی۔ اگر صفر پر سیٹ کیا جاتا ہے تو، کسی بھی سائز کی فائلوں کو انڈیکس کیا جائے گا۔';
$string['minimumsolr4'] = 'سولر 4.0 موڈل کے لیے مطلوبہ کم از کم ورژن ہے';
$string['missingconfig'] = 'آپ کا اپاچی سولر سرور ابھی تک موڈل میں کنفیگر نہیں ہوا ہے۔';
$string['multivaluedfield'] = 'فیلڈ "{$a}" نے اسکیلر کے بجائے ایک صف واپس کی۔ براہ کرم موجودہ انڈیکس کو حذف کریں، ایک نیا بنائیں اور سولر میں ڈیٹا انڈیکس کرنے سے پہلے setup_schema.php چلائیں۔';
$string['nodatafromserver'] = 'سرور سے کوئی ڈیٹا نہیں ہے';
$string['pluginname'] = 'سولر';
$string['privacy:metadata'] = 'یہ پلگ ان ایک منسلک سولر سرچ انجن کو بیرونی طور پر ڈیٹا بھیجتا ہے۔ یہ مقامی طور پر ڈیٹا کو ذخیرہ نہیں کرتا ہے۔';
$string['privacy:metadata:data'] = 'تلاش کے ذیلی نظام سے ذاتی ڈیٹا گزر گیا۔';
$string['schemafieldautocreated'] = 'فیلڈ "{$a}" سولر اسکیما میں پہلے سے موجود ہے۔ آپ شاید اس اسکرپٹ کو چلانا بھول گئے تھے اس سے پہلے کہ انڈیکسنگ ڈیٹا اور فیلڈز سولر کے ذریعہ خود کار طریقے سے بنائے گئے ہوں۔ سولر میں ڈیٹا انڈیکس کرنے سے پہلے براہ کرم موجودہ انڈیکس کو حذف کریں، ایک نیا بنائیں اور setup_schema.php کو دوبارہ چلائیں۔';
$string['schemasetupfromsolr5'] = 'آپ کا سولر سرور ورژن 5.0 سے کم ہے۔ اگر آپ کا سولر ورژن 5.0 یا اس سے زیادہ ہے تو یہ اسکرپٹ آپ کا اسکیما صرف سیٹ کر سکتا ہے۔ آپ کو \\search_solr\\document::get_default_fields_definition() کے مطابق اپنے اسکیما میں فیلڈز کو دستی طور پر سیٹ کرنے کی ضرورت ہے۔';
$string['searchinfo'] = 'تلاش کے سوالات';
$string['searchinfo_help'] = 'جس فیلڈ کو تلاش کیا جانا ہے اسے \'عنوان:\'، \'مواد:\'، \'نام:\'، یا \'intro:\' کے ساتھ تلاش کے استفسار کا سابقہ لگا کر بیان کیا جا سکتا ہے۔ مثال کے طور پر، \'title:news\' تلاش کرنے سے عنوان میں لفظ \'خبر\' کے ساتھ نتائج آئیں گے۔ بولین آپریٹرز (\'AND\', \'OR\', \'NOT\') کو مطلوبہ الفاظ کو یکجا کرنے یا خارج کرنے کے لیے استعمال کیا جا سکتا ہے۔ وائلڈ کارڈ حروف (\'*\' یا \'؟\' ) کو تلاش کے استفسار میں حروف کی نمائندگی کرنے کے لیے استعمال کیا جا سکتا ہے۔';
$string['setupok'] = 'اسکیما استعمال کے لیے تیار ہے۔';
$string['solrauthpassword'] = 'ایچ ٹی ٹی پی تصدیقی پاس ورڈ';
$string['solrauthuser'] = 'ایچ ٹی ٹی پی تصدیقی صارف نام';
$string['solrhttpconnectionport'] = 'پورٹ';
$string['solrhttpconnectiontimeout'] = 'وقت ختم';
$string['solrhttpconnectiontimeout_desc'] = 'ایچ ٹی ٹی پی ڈیٹا کی منتقلی کے آپریشن کے لیے ایچ ٹی ٹی پی کنکشن کا ٹائم آؤٹ سیکنڈوں میں زیادہ سے زیادہ وقت ہے۔';
$string['solrindexname'] = 'انڈیکس کا نام';
$string['solrinfo'] = 'سولر';
$string['solrnotselected'] = 'سولر انجن ترتیب شدہ سرچ انجن نہیں ہے';
$string['solrsecuremode'] = 'محفوظ موڈ';
$string['solrserverhostname'] = 'میزبان کا نام';
$string['solrserverhostname_desc'] = 'سولر سرور کا ڈومین نام۔';
$string['solrsetting'] = 'سولر کی ترتیبات';
$string['solrsslcainfo'] = 'SSL CA سرٹیفکیٹس کا نام';
$string['solrsslcainfo_desc'] = 'فائل کا نام جس میں ایک یا زیادہ CA سرٹیفکیٹ ہوں تاکہ ہم مرتبہ کی تصدیق کی جاسکے';
$string['solrsslcapath'] = 'SSL CA سرٹیفکیٹس کا راستہ';
$string['solrsslcapath_desc'] = 'ایک سے زیادہ CA سرٹیفکیٹس رکھنے والی ڈائرکٹری کا راستہ پیر کے ساتھ تصدیق کرنے کے لیے';
$string['solrsslcert'] = 'SSL سرٹیفکیٹ';
$string['solrsslcert_desc'] = 'PEM فارمیٹ شدہ پرائیویٹ سرٹیفکیٹ کے لیے فائل کا نام';
$string['solrsslkey'] = 'SSL کلید';
$string['solrsslkey_desc'] = 'PEM فارمیٹ شدہ نجی کلید کے لیے فائل کا نام';
$string['solrsslkeypassword'] = 'SSL کلیدی پاس ورڈ';
$string['solrsslkeypassword_desc'] = 'PEM فارمیٹ شدہ نجی کلید فائل کے لیے پاس ورڈ';
