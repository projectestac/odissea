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
 * Strings for component 'auth_db', language 'ur', version '4.1'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'بیرونی ڈیٹا بیس سے منسلک نہیں ہو سکتا۔';
$string['auth_dbcannotreadtable'] = 'بیرونی جدول نہیں پڑھ سکتا۔';
$string['auth_dbcantconnect'] = 'مخصوص تصدیقی ڈیٹا بیس سے منسلک نہیں ہو سکا۔۔۔';
$string['auth_dbchangepasswordurl_key'] = 'پاس ورڈ تبدیل کرنے کا یو آر ایل';
$string['auth_dbcolumnlist'] = 'بیرونی جدول میں درج ذیل کالم ہوتے ہیں:<br />{$a}';
$string['auth_dbdebugauthdb'] = 'ڈی بگ اے ڈی او ڈی بی';
$string['auth_dbdebugauthdbhelp'] = 'بیرونی ڈیٹا بیس سے اے ڈی او ڈی بی کنکشن ڈیبگ کریں - لاگ ان کے دوران خالی صفحہ حاصل کرنے پر استعمال کریں۔ پروڈکشن سائٹس کے لیے موزوں نہیں ہے۔';
$string['auth_dbdeleteuser'] = 'حذف شدہ صارف {$a->name} آئی ڈی {$a->id}';
$string['auth_dbdeleteusererror'] = 'صارف {$a} کو حذف کرنے میں خرابی';
$string['auth_dbdescription'] = 'یہ طریقہ ایک بیرونی ڈیٹا بیس ٹیبل کا استعمال کرتا ہے تاکہ یہ چیک کیا جا سکے کہ آیا دیا گیا صارف نام اور پاس ورڈ درست ہے یا نہیں۔ اگر اکاؤنٹ نیا ہے، تو دیگر فیلڈز سے معلومات بھی موڈل میں کاپی کی جا سکتی ہیں۔';
$string['auth_dbextencoding'] = 'بیرونی ڈی بی انکوڈنگ';
$string['auth_dbextencodinghelp'] = 'بیرونی ڈیٹا بیس میں استعمال ہونے والی انکوڈنگ';
$string['auth_dbextrafields'] = 'یہ فیلڈز اختیاری ہیں۔ آپ کچھ موڈل صارف فیلڈز کو <b>بیرونی ڈیٹا بیس فیلڈز</b> سے معلومات کے ساتھ پہلے سے پُر کرنے کا انتخاب کر سکتے ہیں جو آپ یہاں بیان کرتے ہیں۔ <p>اگر آپ ان کو خالی چھوڑ دیتے ہیں، تو ڈیفالٹس استعمال کیے جائیں گے۔</p><p>دونوں صورتوں میں، صارف لاگ ان ہونے کے بعد ان تمام فیلڈز میں ترمیم کر سکے گا۔</p>';
$string['auth_dbfieldpass'] = 'پاس ورڈ پر مشتمل فیلڈ کا نام';
$string['auth_dbfieldpass_key'] = 'پاس ورڈ فیلڈ';
$string['auth_dbfielduser'] = 'صارف ناموں پر مشتمل فیلڈ کا نام۔ یہ فیلڈ varchar ڈیٹا کی قسم ہونی چاہیے۔';
$string['auth_dbfielduser_key'] = 'صارف نام کا فیلڈ';
$string['auth_dbhost'] = 'ڈیٹا بیس سرور کی میزبانی کرنے والا کمپیوٹر۔ اگر ODBC استعمال کر رہے ہیں تو سسٹم DSN اندراج کا استعمال کریں۔ اگر PDO استعمال کر رہے ہیں تو PDO DSN اندراج استعمال کریں۔';
$string['auth_dbhost_key'] = 'میزبان';
$string['auth_dbinsertuser'] = 'داخل کیا گیا صارف {$a->name} آئی ڈی {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'صارف {$a->username} داخل کرنے میں خرابی - اس صارف نام کا صارف پہلے ہی \'{$a->auth}\' پلگ ان کے ذریعے بنایا گیا تھا۔';
$string['auth_dbinsertusererror'] = 'صارف {$a} داخل کرنے میں خرابی';
$string['auth_dbname'] = 'خود ڈیٹا بیس کا نام۔ اگر ODBC DSN استعمال کر رہے ہیں تو خالی چھوڑ دیں۔ اگر آپ کا PDO DSN پہلے سے ہی ڈیٹا بیس کا نام رکھتا ہے تو خالی چھوڑ دیں۔';
$string['auth_dbname_key'] = 'ڈی بی کا نام';
$string['auth_dbnoexttable'] = 'بیرونی جدول متعین نہیں ہے۔';
$string['auth_dbnouserfield'] = 'بیرونی صارف فیلڈ کی وضاحت نہیں کی گئی ہے۔';
$string['auth_dbpass'] = 'مندرجہ بالا صارف نام سے مماثل پاس ورڈ';
$string['auth_dbpass_key'] = 'پاسورڈ';
$string['auth_dbpasstype'] = '<p>اس فارمیٹ کی وضاحت کریں جو پاس ورڈ فیلڈ استعمال کر رہا ہے۔</p> <p>\'اندرونی\' استعمال کریں اگر آپ چاہتے ہیں کہ خارجی ڈیٹا بیس صارف ناموں اور ای میل پتوں کا نظم کرے، لیکن پاس ورڈز کا نظم کرنے کے لیے موڈل۔ اگر آپ \'اندرونی\' استعمال کرتے ہیں، تو آپ کو بیرونی ڈیٹا بیس میں ایک آبادی والے ای میل ایڈریس کا فیلڈ فراہم کرنا ہوگا، اور آپ کو \\auth_db\\task\\sync_users شیڈول کردہ ٹاسک کو فعال کرنا ہوگا۔ موڈل نئے صارفین کو ایک عارضی پاس ورڈ کے ساتھ ایک ای میل بھیجے گا۔</p>';
$string['auth_dbpasstype_key'] = 'پاس ورڈ فارمیٹ';
$string['auth_dbreviveduser'] = 'بحال شدہ صارف {$a->name} آئی ڈی {$a->id}';
$string['auth_dbrevivedusererror'] = 'صارف {$a} کو بحال کرنے میں خرابی';
$string['auth_dbsaltedcrypt'] = 'کرپٹ ون وے سٹرنگ ہیشنگ';
$string['auth_dbsetupsql'] = 'ایس کیو ایل سیٹ اپ کمانڈ';
$string['auth_dbsetupsqlhelp'] = 'خصوصی ڈیٹا بیس سیٹ اپ کے لیے SQL کمانڈ، جو اکثر مواصلاتی انکوڈنگ کو ترتیب دینے کے لیے استعمال ہوتی ہے - مثال کے طور پر MySQL اور PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'معطل صارف {$a->name} آئی ڈی {$a->id}';
$string['auth_dbsuspendusererror'] = 'صارف کو معطل کرنے میں خرابی {$a}';
$string['auth_dbsybasequoting'] = 'سائبیس اقتباسات استعمال کریں';
$string['auth_dbsybasequotinghelp'] = 'سائبیس اسٹائل سنگل اقتباس فرار - اوریکل، ایم ایس ایس کیو ایل اور کچھ دوسرے ڈیٹا بیس کے لیے درکار ہے۔ MySQL کے لیے استعمال نہ کریں!';
$string['auth_dbsyncuserstask'] = 'صارفین کے کام کو سنکرونائز کریں';
$string['auth_dbtable'] = 'ڈیٹا بیس میں اسم جدول';
$string['auth_dbtable_key'] = 'جدول';
$string['auth_dbtableempty'] = 'بیرونی جدول خالی ہے۔';
$string['auth_dbtype'] = 'ڈیٹا بیس کی قسم (تفصیلات کے لیے دستاویزات دیکھیں <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - ڈیٹا بیس ابسٹریکشن لیئر برائے PHP</a>)۔';
$string['auth_dbtype_key'] = 'ڈیٹا بیس';
$string['auth_dbupdateerror'] = 'بیرونی ڈیٹا بیس کو اپ ڈیٹ کرنے میں خرابی۔';
$string['auth_dbupdateusers'] = 'صارفین کو اپ ڈیٹ کریں';
$string['auth_dbupdateusers_description'] = 'نئے صارفین کو داخل کرنے کے ساتھ ساتھ، موجودہ صارفین کو اپ ڈیٹ کریں۔';
$string['auth_dbupdatinguser'] = 'صارف {$a->name} آئی ڈی {$a->id} کو اپ ڈیٹ کیا جا رہا ہے';
$string['auth_dbuser'] = 'ڈیٹا بیس تک پڑھنے تک رسائی کے ساتھ صارف نام';
$string['auth_dbuser_key'] = 'ڈی بی صارف';
$string['auth_dbuserstoadd'] = 'شامل کرنے کے لیے صارف کے اندراجات: {$a}';
$string['auth_dbuserstoremove'] = 'ہٹانے کے لیے صارف کے اندراجات: {$a}';
$string['pluginname'] = 'بیرونی ڈیٹا بیس';
$string['privacy:metadata'] = 'بیرونی ڈیٹا بیس کی توثیق کا پلگ ان کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔';
