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
 * Strings for component 'tool_lpmigrate', language 'ur', version '4.4'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'کورسز کی اجازت ہے';
$string['allowedcourses_help'] = 'نئے فریم ورک میں منتقل ہونے کے لیے کورسز کا انتخاب کریں۔ اگر کوئی کورس متعین نہیں کیا گیا ہے، تو تمام کورسز کو منتقل کر دیا جائے گا۔';
$string['continuetoframeworks'] = 'فریم ورک پر جاری رکھیں';
$string['coursecompetencymigrations'] = 'کورس کی قابلیت کی منتقلی';
$string['coursemodulecompetencymigrations'] = 'کورس کی سرگرمی اور وسائل کی اہلیت کی منتقلی';
$string['coursemodulesfound'] = 'کورس کی سرگرمیاں یا وسائل ملے';
$string['coursesfound'] = 'کورسز مل گئے';
$string['coursestartdate'] = 'کورسز شروع ہونے کی تاریخ';
$string['coursestartdate_help'] = 'اگر فعال ہو تو، بتائی گئی تاریخ سے پہلے شروع کی تاریخ والے کورسز منتقل نہیں کیے جائیں گے۔';
$string['disallowedcourses'] = 'غیر منظور شدہ کورسز';
$string['disallowedcourses_help'] = 'ایسے کورسز کو منتخب کریں جنہیں نئے فریم ورک میں منتقل نہیں کیا جانا چاہیے۔';
$string['errorcannotmigratetosameframework'] = 'ایک ہی فریم ورک سے اور اس میں منتقل نہیں ہو سکتے۔';
$string['errorcouldnotmapcompetenciesinframework'] = 'اس فریم ورک میں کسی قابلیت کا نقشہ نہیں بنایا جا سکا۔';
$string['errors'] = 'غلطیاں';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'کورس کی اہلیت کو منتقل کرتے وقت خرابی: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'سرگرمی یا وسائل کی اہلیت کو منتقل کرتے وقت خرابی: {$a}';
$string['excludethese'] = 'ان کو خارج کریں';
$string['explanation'] = 'اس ٹول کو قابلیت کے فریم ورک کو نئے ورژن میں اپ ڈیٹ کرنے کے لیے استعمال کیا جا سکتا ہے۔ یہ پرانے فریم ورک کا استعمال کرتے ہوئے کورسز اور سرگرمیوں میں قابلیت تلاش کرتا ہے، اور نئے فریم ورک کی طرف اشارہ کرنے کے لیے لنکس کو اپ ڈیٹ کرتا ہے۔ قابلیت کے پرانے سیٹ میں براہ راست ترمیم کرنے کی سفارش نہیں کی جاتی ہے، کیونکہ اس سے وہ تمام قابلیتیں بدل جائیں گی جو پہلے ہی صارفین کے سیکھنے کے منصوبوں میں دی گئی ہیں۔ عام طور پر آپ فریم ورک کا نیا ورژن درآمد کریں گے، پرانے فریم ورک کو چھپائیں گے، پھر اس ٹول کو نئے کورسز کو نئے فریم ورک میں منتقل کرنے کے لیے استعمال کریں گے۔';
$string['findingcoursecompetencies'] = 'کورس کی قابلیت تلاش کرنا';
$string['findingmodulecompetencies'] = 'سرگرمی اور وسائل کی قابلیت تلاش کرنا';
$string['frameworks'] = 'فریم ورکس';
$string['limittothese'] = 'ان تک محدود رکھیں';
$string['lpmigrate:frameworksmigrate'] = 'فریم ورکس کو منتقل کریں';
$string['migrateframeworks'] = 'فریم ورکس کو منتقل کریں';
$string['migratefrom'] = 'سے ہجرت کریں';
$string['migratefrom_help'] = 'اس وقت استعمال میں پرانا فریم ورک منتخب کریں۔';
$string['migratemore'] = 'مزید ہجرت کریں';
$string['migrateto'] = 'کی طرف ہجرت کریں';
$string['migrateto_help'] = 'فریم ورک کا نیا ورژن منتخب کریں۔ یہ صرف ایک فریم ورک کو منتخب کرنے کے لئے ممکن ہے جو پوشیدہ نہیں ہے۔';
$string['migratingcourses'] = 'ہجرت کے کورسز';
$string['missingmappings'] = 'غائب نقشہ جات';
$string['performmigration'] = 'ہجرت انجام دیں';
$string['pluginname'] = 'قابلیت منتقلی کا آلہ';
$string['privacy:metadata'] = 'قابلیت مائیگریشن ٹول پلگ ان کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔';
$string['results'] = 'نتائج';
$string['startdatefrom'] = 'سے شروع ہونے کی تاریخ';
$string['unmappedin'] = '{$a} میں نقشہ ہٹا دیا گیا';
$string['warningcouldnotremovecoursecompetency'] = 'کورس کی اہلیت کو ختم نہیں کیا جا سکا۔';
$string['warningcouldnotremovemodulecompetency'] = 'سرگرمی یا وسائل کی اہلیت کو ہٹایا نہیں جا سکا۔';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'منزل مقصود کورس کی اہلیت پہلے سے موجود ہے۔';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'منزل کی سرگرمی یا وسائل کی اہلیت پہلے سے موجود ہے۔';
$string['warnings'] = 'انتباہات';
