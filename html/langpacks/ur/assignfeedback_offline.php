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
 * Strings for component 'assignfeedback_offline', language 'ur', version '4.5'.
 *
 * @package     assignfeedback_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'درجات کی درآمد کی تصدیق کریں';
$string['default'] = 'بطور ڈیفالٹ فعال';
$string['default_help'] = 'سیٹ ہونے پر، ورک شیٹس کے ساتھ آف لائن گریڈنگ تمام نئی اسائنمنٹس کے لیے بطور ڈیفالٹ فعال ہو جائے گی۔';
$string['downloadgrades'] = 'گریڈنگ ورک شیٹ ڈاؤن لوڈ کریں';
$string['enabled'] = 'آف لائن گریڈنگ ورک شیٹ';
$string['enabled_help'] = 'فعال ہونے پر، استاد اسائنمنٹس کو نشان زد کرتے وقت طلبہ کے درجات کے ساتھ ایک ورک شیٹ ڈاؤن لوڈ اور اپ لوڈ کر سکے گا۔';
$string['feedbackupdate'] = 'فیلڈ "{$a->field}" کو "{$a->student}" کے لیے "{$a->text}" پر سیٹ کریں';
$string['gradelockedingradebook'] = 'گریڈ کو {$a} کے لیے گریڈ بک میں بند کر دیا گیا ہے';
$string['graderecentlymodified'] = '{$a} کے لیے گریڈنگ ورک شیٹ کے مقابلے موڈل میں گریڈ کو حال ہی میں تبدیل کیا گیا ہے';
$string['gradesfile'] = 'گریڈنگ ورک شیٹ (CSV فارمیٹ)';
$string['gradesfile_help'] = 'ترمیم شدہ درجات کے ساتھ گریڈنگ ورک شیٹ۔ یہ فائل UTF-8 انکوڈنگ کے ساتھ CSV فائل ہونی چاہیے جسے اسائنمنٹ سے ڈاؤن لوڈ کیا گیا ہو، جس میں طالب علم کے گریڈ اور شناخت کنندہ کے کالم ہوں۔';
$string['gradeupdate'] = '{$a->student} کے لیے گریڈ {$a->grade} پر سیٹ کریں';
$string['ignoremodified'] = 'ان ریکارڈز کو اپ ڈیٹ کرنے کی اجازت دیں جن میں اسپریڈشیٹ کے مقابلے موڈل میں حال ہی میں ترمیم کی گئی ہے۔';
$string['ignoremodified_help'] = 'جب گریڈنگ ورک شیٹ موڈل سے ڈاؤن لوڈ کی جاتی ہے تو اس میں ہر گریڈ کے لیے آخری ترمیم شدہ تاریخ ہوتی ہے۔ اگر اس ورک شیٹ کے ڈاؤن لوڈ ہونے کے بعد موڈل میں گریڈز میں سے کسی کو اپ ڈیٹ کیا جاتا ہے، تو موڈل بذریعہ ڈیفالٹ گریڈز درآمد کرتے وقت اس اپڈیٹ شدہ معلومات کو اوور رائٹ کرنے سے انکار کر دے گا۔ اس اختیار کو منتخب کرنے سے موڈل اس حفاظتی جانچ کو غیر فعال کر دے گا اور یہ ممکن ہو سکتا ہے کہ متعدد مارکر ایک دوسرے کے درجات کو اوور رائٹ کر دیں۔';
$string['importgrades'] = 'گریڈنگ ورک شیٹ میں تبدیلیوں کی تصدیق کریں';
$string['invalidgradeimport'] = 'موڈل اپ لوڈ کردہ ورک شیٹ نہیں پڑھ سکا۔ یقینی بنائیں کہ یہ کوما سے الگ کردہ ویلیو فارمیٹ (.csv) میں محفوظ ہے اور دوبارہ کوشش کریں۔';
$string['nochanges'] = 'اپ لوڈ کردہ ورک شیٹ میں کوئی ترمیم شدہ درجات نہیں ملے';
$string['offlinegradingworksheet'] = 'درجات';
$string['pluginname'] = 'آف لائن گریڈنگ ورک شیٹ';
$string['privacy:nullproviderreason'] = 'اس پلگ ان میں صارف کی معلومات کو ذخیرہ کرنے کے لیے کوئی ڈیٹا بیس نہیں ہے۔ یہ گریڈنگ انٹرفیس کو ظاہر کرنے میں مدد کے لیے mod_assign میں صرف APIs کا استعمال کرتا ہے۔';
$string['processgrades'] = 'درجات درآمد کریں';
$string['skiprecord'] = 'ریکارڈ چھوڑ دیں';
$string['updatedgrades'] = 'اپ ڈیٹ کردہ <strong>{$a->gradeupdatescount}</strong> گریڈز اور <strong>{$a->feedbackupdatescount}</strong> تاثرات کی مثالیں۔';
$string['updaterecord'] = 'ریکارڈ کو اپ ڈیٹ کریں';
$string['uploadgrades'] = 'گریڈنگ ورک شیٹ اپ لوڈ کریں';
