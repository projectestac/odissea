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
 * Strings for component 'antivirus_clamav', language 'ur', version '4.1'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'اس وقت اینٹی وائرس اسکیننگ میں ایک مسئلہ ہے۔ آپ کی فائل {$a->item} اپ لوڈ نہیں ہوئی ہے۔ براہ کرم کچھ دیر بعد کوشش کریں۔';
$string['clamfailed'] = 'ClamAV چلانے میں ناکام ہو گیا ہے۔ واپسی کی خرابی کا پیغام "{$a}" تھا۔ یہاں ClamAV سے آؤٹ پٹ ہے:';
$string['clamfailureonupload'] = 'ClamAV کی ناکامی پر';
$string['configclamactlikevirus'] = 'فائلوں کو وائرس کی طرح برتاؤ کریں';
$string['configclamdonothing'] = 'فائلوں کو ٹھیک سمجھیں';
$string['configclamfailureonupload'] = 'اگر \'فائلوں کو ٹھیک سمجھیں\' کو منتخب کیا جاتا ہے، تو فائلوں کو منزل کی ڈائرکٹری میں منتقل کر دیا جائے گا۔ اگر \'اپ لوڈ سے انکار کریں، دوبارہ کوشش کریں\' کو منتخب کیا جاتا ہے، صارف کو بعد میں دوبارہ کوشش کرنے کا اشارہ کیا جائے گا۔ اگر \'فائلوں کو وائرس کی طرح علاج کریں\' کو منتخب کیا جاتا ہے، تو فائلوں کو قرنطینہ کے علاقے میں منتقل کر دیا جائے گا، یا حذف کر دیا جائے گا۔ انتباہ: اس اختیار کے ساتھ، اگر کسی وجہ سے کلیم نہیں چل پاتا ہے (عام طور پر ایک غلط پاتھوکلیم کی وجہ سے)، تو اپ لوڈ کی گئی تمام فائلوں کو دیے گئے قرنطینہ علاقے میں منتقل کر دیا جائے گا، یا حذف کر دیا جائے گا۔';
$string['configclamtryagain'] = 'اپ لوڈ کرنے سے انکار کریں، دوبارہ کوشش کریں';
$string['errorcantopensocket'] = 'یونکس ڈومین ساکٹ سے منسلک ہونے کے نتیجے میں خرابی {$a}';
$string['errorclamavnoresponse'] = 'ClamAV جواب نہیں دیتا؛ ڈیمون چلانے کی حالت کو چیک کریں۔';
$string['errornounixsocketssupported'] = 'یونکس ڈومین ساکٹ ٹرانسپورٹ اس سسٹم پر تعاون یافتہ نہیں ہے۔ براہ کرم اس کے بجائے کمانڈ لائن آپشن استعمال کریں۔';
$string['invalidpathtoclam'] = 'ClamAV، {$a} کا راستہ غلط ہے۔';
$string['pathtoclam'] = 'کمانڈ لائن';
$string['pathtoclamdesc'] = 'اگر چلانے کا طریقہ "کمانڈ لائن" پر سیٹ ہے، تو ClamAV کا راستہ یہاں درج کریں۔ لینکس پر یہ /usr/bin/clamscan یا /usr/bin/clamdscan ہوگا۔';
$string['pathtounixsocket'] = 'یونکس ڈومین ساکٹ';
$string['pathtounixsocketdesc'] = 'اگر چلانے کا طریقہ "Unix ڈومین ساکٹ" پر سیٹ ہے، تو یہاں ClamAV Unix ساکٹ کا راستہ درج کریں۔ ڈیبین لینکس پر یہ /var/run/clamav/clamd.ctl ہوگا۔ براہ کرم یقینی بنائیں کہ clamav ڈیمون کو اپ لوڈ کردہ فائلوں تک پڑھنے کی رسائی حاصل ہے، اس بات کو یقینی بنانے کا سب سے آسان طریقہ یہ ہے کہ \'clamav\' صارف کو اپنے ویب سرور گروپ (Debian Linux پر \'www-data\') میں شامل کریں۔';
$string['pluginname'] = 'ClamAV اینٹی وائرس';
$string['privacy:metadata'] = 'ClamAV اینٹی وائرس پلگ ان کوئی ذاتی ڈیٹا ذخیرہ نہیں کرتا ہے۔';
$string['quarantinedir'] = 'قرنطینہ ڈائریکٹری';
$string['runningmethod'] = 'چلانے کا طریقہ';
$string['runningmethodcommandline'] = 'کمانڈ لائن';
$string['runningmethoddesc'] = 'ClamAV چلانے کا طریقہ۔ کمانڈ لائن بطور ڈیفالٹ استعمال ہوتی ہے، تاہم یونکس سسٹمز پر سسٹم ساکٹ استعمال کرکے بہتر کارکردگی حاصل کی جاسکتی ہے۔';
$string['runningmethodtcpsocket'] = 'TCP socket';
$string['runningmethodunixsocket'] = 'یونکس ڈومین ساکٹ';
$string['tcpsockethost'] = 'TCP ساکٹ میزبان نام';
$string['tcpsockethostdesc'] = 'ClamAV سرور کا ڈومین نام';
$string['tcpsocketport'] = 'TCP ساکٹ پورٹ';
$string['tcpsocketportdesc'] = 'ClamAV سے منسلک ہونے پر استعمال کرنے کے لیے پورٹ';
$string['tries'] = 'اسکیننگ کی کوششیں';
$string['tries_desc'] = 'اگر اسکیننگ کے عمل کے دوران کوئی خرابی ہو تو ClamAV کی طرف سے کی جانے والی کوششوں کی تعداد۔';
$string['tries_notice'] = 'Clamav سکیننگ نے {$a->tries} بار آزمایا ہے۔ {$a->notice}';
$string['unknownerror'] = 'ClamAV کے ساتھ ایک نامعلوم خرابی تھی۔';
