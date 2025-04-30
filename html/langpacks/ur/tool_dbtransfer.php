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
 * Strings for component 'tool_dbtransfer', language 'ur', version '4.4'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'منتقلی کے لیے دستیاب ڈیٹا بیس ڈرائیور';
$string['cliheading'] = 'ڈیٹا بیس کی منتقلی - یقینی بنائیں کہ منتقلی کے دوران کوئی بھی سرور تک رسائی نہیں کر رہا ہے!';
$string['climigrationnotice'] = 'ڈیٹا بیس کی منتقلی جاری ہے، براہ کرم اس وقت تک انتظار کریں جب تک کہ منتقلی مکمل نہ ہو جائے اور سرور ایڈمنسٹریٹر کنفیگریشن کو اپ ڈیٹ کر دے اور $CFG->dataroot/climaintenance.html فائل کو حذف کردے۔';
$string['convertinglogdisplay'] = 'لاگ ڈسپلے کے اعمال کو تبدیل کرنا';
$string['dbexport'] = 'ڈیٹا بیس کی برآمد';
$string['dbtransfer'] = 'ڈیٹا بیس کی منتقلی';
$string['enablemaintenance'] = 'مینٹیننس موڈ کو فعال کریں';
$string['enablemaintenance_help'] = 'یہ آپشن ڈیٹا بیس کی منتقلی کے دوران اور اس کے بعد مینٹیننس موڈ کو فعال کرتا ہے، یہ منتقلی مکمل ہونے تک تمام صارفین کی رسائی کو روکتا ہے۔ براہ کرم نوٹ کریں کہ ایڈمنسٹریٹر کو config.php سیٹنگز کو اپ ڈیٹ کرنے کے بعد $CFG->dataroot/climaintenance.html فائل کو دستی طور پر ڈیلیٹ کرنا پڑتا ہے تاکہ نارمل آپریشن کو دوبارہ شروع کیا جا سکے۔';
$string['exportdata'] = 'ڈیٹا ایکسپورٹ کریں';
$string['notargetconectexception'] = 'ٹارگٹ ڈیٹا بیس کو جوڑ نہیں سکتا، معذرت۔';
$string['options'] = 'اختیارات';
$string['pluginname'] = 'ڈیٹا بیس کی منتقلی';
$string['privacy:metadata'] = 'ڈیٹا بیس ٹرانسفر پلگ ان کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔';
$string['targetdatabase'] = 'ٹارگٹ ڈیٹا بیس';
$string['targetdatabasenotempty'] = 'ٹارگٹ ڈیٹا بیس میں دیے گئے سابقہ کے ساتھ کوئی ٹیبل نہیں ہونا چاہیے!';
$string['transferdata'] = 'ڈیٹا منتقل کریں';
$string['transferdbintro'] = 'یہ اسکرپٹ اس ڈیٹا بیس کے تمام مواد کو دوسرے ڈیٹا بیس سرور پر منتقل کر دے گا۔ یہ اکثر ڈیٹا بیس کی مختلف قسم میں منتقلی کے لیے استعمال ہوتا ہے۔';
$string['transferdbtoserver'] = 'اس موڈل ڈیٹا بیس کو دوسرے سرور پر منتقل کریں';
$string['transferringdbto'] = 'اس {$a->dbtypefrom} ڈیٹا بیس کو {$a->dbtype} ڈیٹا بیس "{$a->dbname}" کو "{$a->dbhost}" پر منتقل کیا جا رہا ہے';
