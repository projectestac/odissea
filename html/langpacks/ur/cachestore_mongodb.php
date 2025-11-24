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
 * Strings for component 'cachestore_mongodb', language 'ur', version '4.5'.
 *
 * @package     cachestore_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'ڈیٹا بیس';
$string['database_help'] = 'استعمال کرنے کے لیے ڈیٹا بیس کا نام۔';
$string['extendedmode'] = 'توسیعی کلیدیں استعمال کریں';
$string['extendedmode_help'] = 'اگر فعال کیا جاتا ہے تو پلگ ان کے ساتھ کام کرتے وقت کلیدی سیٹوں کا استعمال کیا جائے گا۔ یہ ابھی تک اندرونی طور پر استعمال نہیں کیا گیا ہے لیکن اگر آپ انتخاب کرتے ہیں تو آپ کو آسانی سے مونگو ڈی بی پلگ ان کو دستی طور پر تلاش اور تفتیش کرنے کی اجازت دے گی۔ اسے آن کرنے سے ایک چھوٹا اوور ہیڈ شامل ہو جائے گا لہذا صرف اس صورت میں کیا جانا چاہئے جب آپ کو اس کی ضرورت ہو۔';
$string['password'] = 'پاس ورڈ';
$string['password_help'] = 'کنکشن کے لیے استعمال کیے جانے والے صارف کا پاس ورڈ۔';
$string['pleaseupgrademongo'] = 'آپ پی ایچ پی مونگو ایکسٹینشن (<1.3) کا پرانا ورژن استعمال کر رہے ہیں۔ Mongo ایکسٹینشن کے پرانے ورژن کے لیے سپورٹ مستقبل میں ختم کر دی جائے گی۔ براہ کرم اپ گریڈ کرنے پر غور کریں۔';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = 'MongoDB کیچ اسٹور پلگ ان اپنی کیشنگ فعالیت کے حصے کے طور پر ڈیٹا کو مختصر طور پر اسٹور کرتا ہے۔ یہ ڈیٹا MongoDB سرور پر محفوظ کیا جاتا ہے جہاں ڈیٹا کو باقاعدگی سے ہٹایا جاتا ہے۔';
$string['privacy:metadata:mongodb:data'] = 'کیشے میں ذخیرہ شدہ مختلف ڈیٹا';
$string['replicaset'] = 'ریپلیکا سیٹ';
$string['replicaset_help'] = 'ریپلیکا کا نام جس سے منسلک ہونا ہے۔ اگر یہ دیا جاتا ہے تو ماسٹر کا تعین بیجوں پر ismaster database کمانڈ کا استعمال کرتے ہوئے کیا جائے گا، لہذا ڈرائیور کسی ایسے سرور سے جڑ سکتا ہے جو درج بھی نہیں تھا۔';
$string['server'] = 'سرور';
$string['server_help'] = 'یہ اس سرور کے لیے کنکشن سٹرنگ ہے جسے آپ استعمال کرنا چاہتے ہیں۔ کوما سے الگ کردہ فہرست کا استعمال کرتے ہوئے متعدد سرورز کی وضاحت کی جا سکتی ہے۔';
$string['testserver'] = 'ٹیسٹ سرور';
$string['testserver_desc'] = 'جانچ کے لیے سرور کے لیے کنکشن کی تار۔ اگر ٹیسٹ سرور کی وضاحت کی گئی ہے تو انتظامیہ بلاک میں کیش پرفارمنس پیج کا استعمال کرتے ہوئے MongoDB کی کارکردگی کو جانچا جا سکتا ہے۔ مثال کے طور پر: mongodb://127.0.0.1:27017';
$string['username'] = 'صارف نام';
$string['username_help'] = 'کنکشن بناتے وقت استعمال کرنے والا صارف نام۔';
$string['usesafe'] = 'محفوظ استعمال کریں';
$string['usesafe_help'] = 'اگر فعال کیا جاتا ہے تو usesafe آپشن داخل کرنے، حاصل کرنے اور ہٹانے کے عمل کے دوران استعمال کیا جائے گا۔ اگر آپ نے ایک ریپلیکا سیٹ کی وضاحت کی ہے تو اسے بہرحال مجبور کیا جائے گا۔';
$string['usesafevalue'] = 'محفوظ قدر استعمال کریں';
$string['usesafevalue_help'] = 'آپ محفوظ استعمال کے لیے ایک مخصوص قدر فراہم کرنے کا انتخاب کر سکتے ہیں۔ یہ ان سرورز کی تعداد کا تعین کرے گا جن پر آپریشنز مکمل ہونے سے پہلے انہیں مکمل تصور کیا جانا چاہیے۔';
