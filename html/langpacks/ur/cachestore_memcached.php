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
 * Strings for component 'cachestore_memcached', language 'ur', version '4.5'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'بفر لکھتا ہے';
$string['bufferwrites_help'] = 'بفرڈ I/O کو فعال یا غیر فعال کرتا ہے۔ بفر شدہ I/O کو فعال کرنے سے اسٹوریج کمانڈز بھیجے جانے کے بجائے "بفر" ہو جاتی ہیں۔ کوئی بھی عمل جو ڈیٹا کو بازیافت کرتا ہے اس بفر کو ریموٹ کنکشن پر بھیجنے کا سبب بنتا ہے۔ کنکشن چھوڑنا یا کنکشن بند کرنا بھی بفرڈ ڈیٹا کو ریموٹ کنکشن میں دھکیلنے کا سبب بنے گا۔';
$string['clustered'] = 'کلسٹرڈ سرورز کو فعال کریں';
$string['clustered_help'] = 'اس کا استعمال ایک پڑھنے، سیٹ ملٹی فنکشنلٹی کی اجازت دینے کے لیے کیا جاتا ہے۔ مطلوبہ استعمال کی صورت یہ ہے کہ لوڈ متوازن کنفیگریشنز کے لیے ایک بہتر اسٹور بنایا جائے۔ اسٹور ایک سرور (عام طور پر لوکل ہوسٹ) سے حاصل کرے گا، لیکن بہت سے پر سیٹ کیا جائے گا (لوڈ بیلنس پول میں تمام سرورز)۔ ریشو سیٹ کرنے کے لیے بہت زیادہ پڑھنے والے کیشز کے لیے، یہ نیٹ ورک اوور ہیڈ کی ایک خاصی رقم بچاتا ہے۔ جب یہ ترتیب فعال ہو جائے گی، اوپر درج سرور کو بازیافت کرنے کے لیے استعمال کیا جائے گا۔';
$string['clusteredheader'] = 'تقسیم سرورز';
$string['hash'] = 'ہیش کا طریقہ';
$string['hash_crc'] = 'سی آر سی';
$string['hash_default'] = 'ڈیفالٹ (ایک وقت میں)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'آئٹم کیز کے لیے استعمال ہونے والے ہیشنگ الگورتھم کی وضاحت کرتا ہے۔ ہر ہیش الگورتھم کے اپنے فوائد اور نقصانات ہیں۔ اگر آپ نہیں جانتے یا پرواہ نہیں کرتے تو پہلے سے طے شدہ کے ساتھ جائیں۔';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'مشترکہ کیش';
$string['isshared_help'] = 'کیا آپ کا memcached سرور بھی دوسری ایپلیکیشنز کے ذریعے استعمال ہو رہا ہے؟ اگر کیشے کو دیگر ایپلیکیشنز کے ذریعے شیئر کیا گیا ہے تو ہر کلید کو انفرادی طور پر حذف کر دیا جائے گا تاکہ یہ یقینی بنایا جا سکے کہ صرف اس ایپلی کیشن کے پاس موجود ڈیٹا کو صاف کیا گیا ہے (بیرونی ایپلیکیشن کیش ڈیٹا کو بغیر تبدیلی کے)۔ اس کے نتیجے میں آپ کے سرور کی ترتیب کے لحاظ سے، کیشے کو صاف کرتے وقت کارکردگی کم ہو سکتی ہے۔ اگر آپ اس ایپلیکیشن کے لیے ایک وقف شدہ کیش چلا رہے ہیں تو پوری کیش کو کسی دوسرے ایپلیکیشن کے کیش ڈیٹا کو تباہ کرنے کے خطرے کے بغیر محفوظ طریقے سے فلش کیا جا سکتا ہے۔ اس کے نتیجے میں کیشے صاف کرتے وقت کارکردگی میں اضافہ ہونا چاہیے۔';
$string['pluginname'] = 'میموری کیش';
$string['prefix'] = 'سابقہ کلید';
$string['prefix_help'] = 'اس کا استعمال آپ کے آئٹم کیز کے لیے "ڈومین" بنانے کے لیے کیا جا سکتا ہے جس سے آپ ایک ہی میم کیچڈ انسٹالیشن پر متعدد میمکیچڈ اسٹورز بنا سکتے ہیں۔ یہ 16 حروف سے زیادہ لمبا نہیں ہو سکتا تاکہ یہ یقینی بنایا جا سکے کہ طوالت کے کلیدی مسائل کا سامنا نہ ہو۔';
$string['prefixinvalid'] = 'غلط سابقہ۔ آپ صرف a-z A-Z 0-9-_ استعمال کر سکتے ہیں۔';
$string['privacy:metadata:memcached'] = 'Memcached cachestore پلگ ان اپنی کیشنگ فعالیت کے حصے کے طور پر ڈیٹا کو مختصراً ذخیرہ کرتا ہے۔ یہ ڈیٹا ایک Memcache سرور پر محفوظ کیا جاتا ہے جہاں ڈیٹا کو باقاعدگی سے ہٹایا جاتا ہے۔';
$string['privacy:metadata:memcached:data'] = 'کیشے میں ذخیرہ شدہ مختلف ڈیٹا';
$string['serialiser_igbinary'] = 'igbinary سیریلائزر۔';
$string['serialiser_json'] = 'JSON سیریلائزر۔';
$string['serialiser_php'] = 'ڈیفالٹ PHP سیریلائزر۔';
$string['servers'] = 'سرورز';
$string['servers_help'] = 'یہ ان سرورز کو متعین کرتا ہے جنہیں اس میمکیچڈ اڈاپٹر کے ذریعے استعمال کیا جانا چاہیے۔ سرورز کو فی سطر ایک بیان کیا جانا چاہئے اور اس میں سرور کا پتہ اور اختیاری طور پر ایک بندرگاہ اور وزن ہونا چاہئے۔ اگر کوئی پورٹ فراہم نہیں کی جاتی ہے تو ڈیفالٹ پورٹ (11211) استعمال کیا جاتا ہے۔ مثال کے طور پر: <pre> server.url.com ipaddress:port servername:port:weight </pre> اگر *کلسٹرڈ سرورز کو فعال کریں* نیچے فعال ہے، تو یہاں صرف ایک سرور درج ہونا چاہیے۔ یہ عام طور پر ایک ایسا نام ہوگا جو ہمیشہ مقامی مشین کو حل کرتا ہے، جیسے 127.0.0.1 یا لوکل ہوسٹ۔';
$string['serversclusterinvalid'] = 'جب کلسٹرنگ فعال ہو تو بالکل ایک سرور درکار ہوتا ہے۔';
$string['sessionhandlerconflict'] = 'انتباہ: ایک میم کیچڈ مثال ({$a}) کو سیشن کے طور پر اسی میمکیچڈ سرور کو استعمال کرنے کے لیے کنفیگر کیا جا رہا ہے۔ تمام کیشز کو صاف کرنے سے سیشنز کو بھی صاف کیا جائے گا۔';
$string['setservers'] = 'سیٹ سرورز';
$string['setservers_help'] = 'یہ سرورز کی فہرست ہے جو کیش میں ڈیٹا میں ترمیم کرنے پر اپ ڈیٹ ہو جائیں گے۔ عام طور پر پول میں ہر سرور کا مکمل طور پر اہل نام۔ اس میں **لازمی طور پر** اوپر *Servers* میں درج سرور کو شامل کرنا چاہیے، چاہے کسی دوسرے میزبان نام سے ہو۔ سرورز کو فی سطر ایک بیان کیا جانا چاہئے اور اس میں سرور ایڈریس اور اختیاری طور پر ایک پورٹ ہونا چاہئے۔ اگر کوئی پورٹ فراہم نہیں کی جاتی ہے تو ڈیفالٹ پورٹ (11211) استعمال کیا جاتا ہے۔ مثال کے طور پر: <pre> server.url.com ipaddress:port </pre>';
$string['testservers'] = 'ٹیسٹ سرورز';
$string['testservers_desc'] = 'memcached سرورز کے خلاف جانچنے کے لیے ایک یا زیادہ کنکشن سٹرنگز۔ اگر ٹیسٹ سرور کی وضاحت کی گئی ہے تو ایڈمنسٹریشن بلاک میں کیش پرفارمنس پیج کا استعمال کرتے ہوئے میمکیچڈ کارکردگی کی جانچ کی جا سکتی ہے۔ مثال کے طور پر: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'ہم تجویز کرتے ہیں کہ آپ اپنے Memcached PHP ایکسٹینشن کو ورژن 2.0.0 یا اس سے زیادہ میں اپ گریڈ کریں۔ Memcached PHP ایکسٹینشن کا جو ورژن آپ فی الحال استعمال کر رہے ہیں وہ فعالیت فراہم نہیں کرتا ہے جو موڈل سینڈ باکسڈ کیشے کو یقینی بنانے کے لیے استعمال کرتا ہے۔ جب تک آپ اپ گریڈ نہیں کرتے ہم آپ کو مشورہ دیتے ہیں کہ آپ اسی Memcached سرورز کو استعمال کرنے کے لیے کوئی دوسری ایپلیکیشن ترتیب نہ دیں جیسا کہ موڈل کو استعمال کرنے کے لیے کنفیگر کیا گیا ہے۔';
$string['usecompression'] = 'کمپریشن استعمال کریں';
$string['usecompression_help'] = 'پے لوڈ کمپریشن کو فعال یا غیر فعال کرتا ہے۔ فعال ہونے پر، ایک مخصوص حد (فی الحال 100 بائٹس) سے زیادہ طویل آئٹم کی قدریں اسٹوریج کے دوران کمپریس ہو جائیں گی اور بازیافت کے دوران شفاف طریقے سے کمپریس ہو جائیں گی۔';
$string['useserialiser'] = 'سیریلائزر استعمال کریں';
$string['useserialiser_help'] = 'غیر اسکیلر اقدار کو سیریلائز کرنے کے لیے استعمال کرنے کے لیے سیریلائزر کی وضاحت کرتا ہے۔ درست سیریلائزرز Memcached::SERIALIZER_PHP یا Memcached::SERIALIZER_IGBINARY ہیں۔ مؤخر الذکر کو صرف اس وقت سپورٹ کیا جاتا ہے جب memcached کو --enable-memcached-igbinary آپشن کے ساتھ کنفیگر کیا جاتا ہے اور igbinary ایکسٹینشن لوڈ ہوتا ہے۔';
