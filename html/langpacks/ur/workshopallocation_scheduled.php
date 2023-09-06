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
 * Strings for component 'workshopallocation_scheduled', language 'ur', version '4.1'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'شیڈول ایلوکیشن کے لیے بیک گراؤنڈ پروسیسنگ';
$string['currentstatus'] = 'موجودہ صورت حال';
$string['currentstatusexecution'] = 'صورت حال';
$string['currentstatusexecution1'] = '{$a->datetime} کو عمل میں لایا گیا';
$string['currentstatusexecution2'] = '{$a->datetime} کو دوبارہ عمل میں لایا جائے گا';
$string['currentstatusexecution3'] = '{$a->datetime} کو عمل میں لایا جائے گا';
$string['currentstatusexecution4'] = 'عمل درآمد کا انتظار ہے';
$string['currentstatusnext'] = 'اگلا عمل درآمد';
$string['currentstatusnext_help'] = 'بعض صورتوں میں، مختص کو خود بخود دوبارہ عمل میں لایا جائے گا چاہے یہ پہلے ہی عمل میں آ چکا ہو۔ یہ ہو سکتا ہے اگر جمع کرانے کی آخری تاریخ، مثال کے طور پر طویل ہو گئی ہو۔';
$string['currentstatusreset'] = 'دوبارہ ترتیب دیں';
$string['currentstatusreset_help'] = 'اس چیک باکس پر نشان لگا کر فارم کو محفوظ کرنے کے نتیجے میں موجودہ حالت کو دوبارہ ترتیب دیا جائے گا۔ سابقہ عمل کے بارے میں تمام معلومات کو ہٹا دیا جائے گا تاکہ مختص کو دوبارہ عمل میں لایا جا سکے (اگر اوپر فعال ہو)۔';
$string['currentstatusresetinfo'] = 'عمل کے نتیجے کو دوبارہ ترتیب دینے کے لیے باکس کو چیک کریں اور فارم کو محفوظ کریں';
$string['currentstatusresult'] = 'حالیہ عملدرآمد کا نتیجہ';
$string['enablescheduled'] = 'طے شدہ مختص کو فعال کریں';
$string['enablescheduledinfo'] = 'جمع کرانے کے مرحلے کے اختتام پر گذارشات کو خودکار طور پر مختص کریں';
$string['pluginname'] = 'طے شدہ مختص';
$string['privacy:metadata'] = 'شیڈولڈ ایلوکیشن پلگ ان کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔ اصل ذاتی ڈیٹا کے بارے میں جو اس بات کا اندازہ لگانے جا رہا ہے کہ ورکشاپ ماڈیول کے ذریعہ ہی کس کا ذخیرہ کیا گیا ہے اور وہ اسیسمنٹ کی تفصیلات کو برآمد کرنے کی بنیاد بناتے ہیں۔';
$string['randomallocationsettings'] = 'مختص کی ترتیبات';
$string['randomallocationsettings_help'] = 'بے ترتیب مختص کے طریقہ کار کے پیرامیٹرز یہاں بیان کیے گئے ہیں۔ ان کا استعمال رینڈم ایلوکیشن پلگ ان کے ذریعے گذارشات کی اصل مختص کرنے کے لیے کیا جائے گا۔';
$string['resultdisabled'] = 'طے شدہ مختص غیر فعال';
$string['resultenabled'] = 'طے شدہ مختص کو فعال کر دیا گیا';
$string['resultexecuted'] = 'کامیابی';
$string['resultfailed'] = 'گذارشات کو خود بخود مختص کرنے سے قاصر ہے';
$string['resultfailedconfig'] = 'شیڈول کردہ مختص غلط کنفیگر ہو گیا';
$string['resultfaileddeadline'] = 'ورکشاپ میں جمع کرانے کی آخری تاریخ متعین نہیں ہے';
$string['resultfailedphase'] = 'ورکشاپ جمع کرانے کے مرحلے میں نہیں ہے';
$string['resultvoid'] = 'کوئی گذارشات مختص نہیں کی گئیں';
$string['resultvoiddeadline'] = 'ابھی تک جمع کرانے کی آخری تاریخ کے بعد نہیں';
$string['resultvoidexecuted'] = 'مختص پہلے ہی عمل میں لایا جا چکا ہے';
$string['scheduledallocationsettings'] = 'طے شدہ مختص کی ترتیبات';
$string['scheduledallocationsettings_help'] = 'اگر فعال کیا جاتا ہے، تو طے شدہ مختص کرنے کا طریقہ خود بخود جمع کرانے کے مرحلے کے اختتام پر گذارشات کو تشخیص کے لیے مختص کر دے گا۔ مرحلے کے اختتام کی وضاحت ورکشاپ کی ترتیب \'جمع کرانے کی آخری تاریخ\' میں کی جا سکتی ہے۔ اندرونی طور پر، بے ترتیب مختص کرنے کا طریقہ اس فارم میں پہلے سے بیان کردہ پیرامیٹرز کے ساتھ عمل میں لایا جاتا ہے۔ اس کا مطلب یہ ہے کہ طے شدہ مختص اس طرح کام کرتا ہے جیسے استاد نے ذیل میں مختص کی ترتیبات کا استعمال کرتے ہوئے جمع کرانے کے مرحلے کے اختتام پر خود بے ترتیب مختص کی ہو۔ نوٹ کریں کہ اگر آپ جمع کرانے کی آخری تاریخ سے پہلے ورکشاپ کو دستی طور پر تشخیصی مرحلے میں تبدیل کرتے ہیں تو طے شدہ مختص *نہیں* عمل میں آتا ہے۔ اس صورت میں آپ کو گذارشات خود مختص کرنی ہوں گی۔ طے شدہ مختص کا طریقہ خاص طور پر مفید ہے جب خودکار فیز سوئچنگ فیچر کے ساتھ استعمال کیا جائے۔';
$string['setup'] = 'طے شدہ مختص سیٹ اپ کریں';
