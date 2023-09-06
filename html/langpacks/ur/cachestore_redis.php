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
 * Strings for component 'cachestore_redis', language 'ur', version '4.1'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = 'کوئی کمپریشن نہیں۔';
$string['compressor_php_gzip'] = 'gzip کمپریشن استعمال کریں۔';
$string['compressor_php_zstd'] = 'Zstandard کمپریشن استعمال کریں۔';
$string['password'] = 'پاس ورڈ';
$string['password_help'] = 'یہ Redis سرور کا پاس ورڈ سیٹ کرتا ہے۔';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'کلیدی سابقہ';
$string['prefix_help'] = 'یہ سابقہ Redis سرور پر تمام کلیدی ناموں کے لیے استعمال ہوتا ہے۔ * اگر آپ کے پاس اس سرور کا استعمال کرتے ہوئے صرف ایک موڈل مثال ہے، تو آپ اس قدر کو ڈیفالٹ چھوڑ سکتے ہیں۔ * کلیدی لمبائی کی پابندیوں کی وجہ سے، زیادہ سے زیادہ 5 حروف کی اجازت ہے۔';
$string['prefixinvalid'] = 'غلط سابقہ۔ آپ صرف a-z A-Z 0-9-_ استعمال کر سکتے ہیں۔';
$string['privacy:metadata:redis'] = 'Redis cachestore پلگ ان اپنی کیشنگ فعالیت کے حصے کے طور پر ڈیٹا کو مختصر طور پر اسٹور کرتا ہے۔ یہ ڈیٹا ایک Redis سرور پر محفوظ کیا جاتا ہے جہاں ڈیٹا کو باقاعدگی سے ہٹایا جاتا ہے۔';
$string['privacy:metadata:redis:data'] = 'کیشے میں ذخیرہ شدہ مختلف ڈیٹا';
$string['serializer_igbinary'] = 'igbinary سیریلائزر۔';
$string['serializer_php'] = 'ڈیفالٹ PHP سیریلائزر۔';
$string['server'] = 'سرور';
$string['server_help'] = 'یہ Redis سرور کے میزبان نام یا آئی پی ایڈریس کو استعمال کرنے کے لیے سیٹ کرتا ہے۔';
$string['test_password'] = 'سرور پاس ورڈ کی جانچ کریں';
$string['test_password_desc'] = 'سرور پاس ورڈ کی جانچ کریں Redis';
$string['test_serializer'] = 'سیریلائزر';
$string['test_serializer_desc'] = 'جانچ کے لیے استعمال کرنے کے لیے سیریلائزر۔';
$string['test_server'] = 'ٹیسٹ سرور';
$string['test_server_desc'] = 'جانچ کے لیے استعمال کرنے کے لیے Redis سرور۔';
$string['usecompressor'] = 'کمپریسر استعمال کریں';
$string['usecompressor_help'] = 'سیریلائز کرنے کے بعد استعمال کرنے کے لیے کمپریسر کی وضاحت کرتا ہے۔ یہ Moodle Cache API کی سطح پر کیا جاتا ہے، php-redis کی سطح پر نہیں۔';
$string['useserializer'] = 'سیریلائزر استعمال کریں';
$string['useserializer_help'] = 'سیریلائزر کو سیریلائز کرنے کے لیے استعمال کرنے کی وضاحت کرتا ہے۔ درست سیریلائزرز Redis::SERIALIZER_PHP یا Redis::SERIALIZER_IGBINARY ہیں۔ مؤخر الذکر کو صرف اس وقت سپورٹ کیا جاتا ہے جب phpredis کو --enable-redis-igbinary آپشن کے ساتھ کنفیگر کیا جاتا ہے اور igbinary ایکسٹینشن کو لوڈ کیا جاتا ہے۔';
