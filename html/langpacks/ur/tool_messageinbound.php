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
 * Strings for component 'tool_messageinbound', language 'ur', version '4.1'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'کلاس کا نام';
$string['component'] = 'جزو';
$string['configmessageinboundhost'] = 'سرور کا ایڈریس جس کے خلاف موڈل کو میل چیک کرنا چاہئے۔ غیر ڈیفالٹ پورٹ کی وضاحت کرنے کے لیے، [server]:[port]، مثال کے طور پر mail.example.com:993 استعمال کریں۔ اگر پورٹ متعین نہیں ہے تو میل سرور کی قسم کے لیے ڈیفالٹ پورٹ استعمال کیا جائے گا۔';
$string['defaultexpiration'] = 'پہلے سے طے شدہ ایڈریس ختم ہونے کی مدت';
$string['defaultexpiration_help'] = 'جب ہینڈلر کی طرف سے ای میل ایڈریس تیار کیا جاتا ہے، تو اسے وقت کے بعد خود بخود ختم ہونے کے لیے سیٹ کیا جا سکتا ہے، تاکہ اسے مزید استعمال نہ کیا جا سکے۔ یہ ایک ختم ہونے کی مدت مقرر کرنے کے لئے مشورہ دیا جاتا ہے۔';
$string['description'] = 'تفصیل';
$string['domain'] = 'ای میل ڈومین';
$string['edit'] = 'ترمیم';
$string['edithandler'] = '{$a} ہینڈلر کے لیے ترتیبات میں ترمیم کریں';
$string['editinghandler'] = 'ترمیم کر رہا ہے {$a}';
$string['enabled'] = 'فعال';
$string['fixedenabled_help'] = 'آپ اس ہینڈلر کی حالت نہیں بدل سکتے۔ یہ اس لیے ہو سکتا ہے کہ ہینڈلر دوسرے ہینڈلرز کو درکار ہو۔';
$string['fixedvalidateaddress'] = 'بھیجنے والے کے پتے کی توثیق کریں';
$string['fixedvalidateaddress_help'] = 'آپ اس ہینڈلر کے لیے ایڈریس کی توثیق کو تبدیل نہیں کر سکتے۔ یہ اس لیے ہو سکتا ہے کہ ہینڈلر کو ایک مخصوص ترتیب درکار ہو۔';
$string['handlerdisabled'] = 'آپ نے جس ای میل ہینڈلر سے رابطہ کرنے کی کوشش کی اسے غیر فعال کر دیا گیا ہے۔ اس وقت پیغام پر کارروائی کرنے سے قاصر ہے۔';
$string['incomingmailconfiguration'] = 'آنے والی میل کی ترتیب';
$string['incomingmailserversettings'] = 'آنے والی میل سرور کی ترتیبات';
$string['incomingmailserversettings_desc'] = 'موڈل مناسب طریقے سے تشکیل شدہ IMAP سرورز سے منسلک ہونے کے قابل ہے۔ آپ اپنے IMAP سرور سے جڑنے کے لیے استعمال ہونے والی ترتیبات کو یہاں بیان کر سکتے ہیں۔';
$string['invalid_recipient_handler'] = 'اگر کوئی درست پیغام موصول ہوتا ہے لیکن بھیجنے والے کی توثیق نہیں کی جا سکتی ہے، تو پیغام ای میل سرور پر محفوظ کیا جاتا ہے اور صارف سے ان کے صارف پروفائل میں ای میل ایڈریس کا استعمال کرتے ہوئے رابطہ کیا جاتا ہے۔ صارف کو اصل پیغام کی صداقت کی تصدیق کے لیے جواب دینے کا موقع دیا جاتا ہے۔ یہ ہینڈلر ان جوابات پر کارروائی کرتا ہے۔ اس ہینڈلر کی بھیجنے والے کی تصدیق کو غیر فعال کرنا ممکن نہیں ہے کیونکہ صارف غلط ای میل ایڈریس سے جواب دے سکتا ہے اگر ان کے ای میل کلائنٹ کی ترتیب غلط ہے۔';
$string['invalid_recipient_handler_name'] = 'غلط بھیجنے والا ہینڈلر';
$string['invalidrecipientdescription'] = 'پیغام "{$a->subject}" کی توثیق نہیں کی جا سکی، کیونکہ یہ آپ کے صارف پروفائل سے مختلف ای میل ایڈریس سے بھیجا گیا تھا۔ پیغام کی تصدیق کے لیے، آپ کو اس پیغام کا جواب دینا ہوگا۔';
$string['invalidrecipientdescriptionhtml'] = 'پیغام "{$a->subject}" کی توثیق نہیں کی جا سکی، کیونکہ یہ آپ کے صارف پروفائل سے مختلف ای میل ایڈریس سے بھیجا گیا تھا۔ پیغام کی تصدیق کے لیے، آپ کو اس پیغام کا جواب دینا ہوگا۔';
$string['invalidrecipientfinal'] = 'پیغام "{$a->subject}" کی توثیق نہیں کی جا سکی۔ براہ کرم چیک کریں کہ آپ اپنا پیغام اسی ای میل ایڈریس سے بھیج رہے ہیں جو آپ کے پروفائل میں ہے۔';
$string['mailbox'] = 'میل باکس کا نام';
$string['mailboxconfiguration'] = 'میل باکس کی ترتیب';
$string['mailboxdescription'] = '[mailbox]+ذیلی پتہ@[domain]';
$string['mailsettings'] = 'میل کی ترتیبات';
$string['message_handlers'] = 'میسج ہینڈلرز';
$string['messageinbound'] = 'پیغام ان باؤنڈ';
$string['messageinboundenabled'] = 'آنے والی میل پروسیسنگ کو فعال کریں';
$string['messageinboundenabled_desc'] = 'مناسب معلومات کے ساتھ پیغامات بھیجے جانے کے لیے آنے والی میل پروسیسنگ کو فعال کیا جانا چاہیے۔';
$string['messageinboundgeneralconfiguration'] = 'عمومی ترتیب';
$string['messageinboundgeneralconfiguration_desc'] = 'ان باؤنڈ میسج پروسیسنگ آپ کو موڈل کے اندر ای میل وصول کرنے اور اس پر کارروائی کرنے کی اجازت دیتی ہے۔ اس میں ایپلیکیشنز ہیں جیسے کہ فورم کے خطوط پر ای میل کے جوابات بھیجنا یا صارف کی نجی فائلوں میں فائلیں شامل کرنا۔';
$string['messageinboundhost'] = 'آنے والا میل سرور';
$string['messageinboundhostpass'] = 'پاس ورڈ';
$string['messageinboundhostpass_desc'] = 'یہ وہ پاس ورڈ ہے جسے آپ کے سروس فراہم کنندہ نے آپ کے ای میل اکاؤنٹ میں لاگ ان کرنے کے لیے فراہم کیا ہوگا۔';
$string['messageinboundhostssl'] = 'SSL استعمال کریں';
$string['messageinboundhostssl_desc'] = 'کچھ میل سرورز موڈل اور آپ کے سرور کے درمیان مواصلت کو خفیہ کر کے سیکیورٹی کی اضافی سطح کی حمایت کرتے ہیں۔ اگر آپ کا سرور اس کی حمایت کرتا ہے تو ہم اس SSL انکرپشن کو استعمال کرنے کی تجویز کرتے ہیں۔';
$string['messageinboundhosttype'] = 'سرور کی قسم';
$string['messageinboundhostuser'] = 'صارف نام';
$string['messageinboundhostuser_desc'] = 'یہ وہ صارف نام ہے جو آپ کے خدمت فراہم کنندہ نے آپ کے ای میل اکاؤنٹ میں لاگ ان کرنے کے لیے فراہم کیا ہوگا۔';
$string['messageinboundmailboxconfiguration_desc'] = 'جب پیغامات بھیجے جاتے ہیں، تو وہ ایڈریس+data@example.com کی شکل میں فٹ ہوجاتے ہیں۔ موڈل سے پتے کو قابل اعتماد طریقے سے بنانے کے لیے، براہ کرم وہ پتہ بتائیں جو آپ عام طور پر @ کے نشان سے پہلے استعمال کرتے ہیں، اور @ نشان کے بعد کا ڈومین الگ الگ استعمال کرتے ہیں۔ مثال کے طور پر، مثال میں میل باکس کا نام "ایڈریس" ہوگا، اور ای میل ڈومین "example.com" ہوگا۔ اس مقصد کے لیے آپ کو ایک وقف شدہ ای میل اکاؤنٹ استعمال کرنا چاہیے۔';
$string['messageprocessingerror'] = 'آپ نے حال ہی میں ایک ای میل "{$a->subject}" بھیجا لیکن بدقسمتی سے اس پر کارروائی نہیں ہو سکی۔ غلطی کی تفصیلات ذیل میں دکھائی گئی ہیں۔ {$a->error}';
$string['messageprocessingerrorhtml'] = '<p>آپ نے حال ہی میں ایک ای میل "{$a->subject}" بھیجا لیکن بدقسمتی سے اس پر کارروائی نہیں ہو سکی۔</p> <p>خرابی کی تفصیلات ذیل میں دکھائی گئی ہیں۔</p> <p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'ای میل "{$a->subject}" پر کارروائی نہیں ہو سکی۔ خرابی درج ذیل ہے: "{$a->message}"۔';
$string['messageprocessingfailedunknown'] = 'ای میل "{$a->subject}" پر کارروائی نہیں ہو سکی۔ مزید معلومات کے لیے اپنے منتظم سے رابطہ کریں۔';
$string['messageprocessingsuccess'] = '{$a->plain} اگر آپ مستقبل میں یہ اطلاعات موصول نہیں کرنا چاہتے ہیں، تو آپ اپنے براؤزر میں {$a->messagepreferencesurl} کھول کر اپنی ذاتی پیغام رسانی کی ترجیحات میں ترمیم کر سکتے ہیں۔';
$string['messageprocessingsuccesshtml'] = '{$a->html} <p>اگر آپ مستقبل میں یہ اطلاعات موصول نہیں کرنا چاہتے تو آپ <a href="{$a->messagepreferencesurl}">اپنی ذاتی پیغام رسانی کی ترجیحات میں ترمیم کر سکتے ہیں</a>۔< </p>';
$string['messageprovider:invalidrecipienthandler'] = 'اس بات کی تصدیق کرنے کے لیے پیغام بھیجیں کہ آپ کی طرف سے ایک ان باؤنڈ پیغام آیا ہے';
$string['messageprovider:messageprocessingerror'] = 'انباؤنڈ پیغام پر کارروائی نہ ہونے پر وارننگ';
$string['messageprovider:messageprocessingsuccess'] = 'اس بات کی تصدیق کہ ایک پیغام پر کامیابی کے ساتھ کارروائی ہوئی ہے';
$string['name'] = 'نام';
$string['noencryption'] = 'آف - کوئی خفیہ کاری نہیں';
$string['noexpiry'] = 'کوئی میعاد ختم نہیں ہوتی';
$string['oldmessagenotfound'] = 'آپ نے دستی طور پر ایک پیغام کی تصدیق کرنے کی کوشش کی، لیکن پیغام نہیں مل سکا۔ یہ اس لیے ہو سکتا ہے کہ اس پر پہلے ہی کارروائی ہو چکی ہے، یا پیغام کی میعاد ختم ہونے کی وجہ سے۔';
$string['oneday'] = 'ایک دن';
$string['onehour'] = 'ایک گھنٹہ';
$string['oneweek'] = 'ایک ہفتہ';
$string['oneyear'] = 'ایک سال';
$string['pluginname'] = 'ان باؤنڈ پیغام کی ترتیب';
$string['privacy:metadata:coreuserkey'] = 'موصولہ ای میل کی توثیق کرنے کے لیے صارف کی چابیاں';
$string['privacy:metadata:messagelist'] = 'پیغام کے شناخت کنندگان کی ایک فہرست جو توثیق میں ناکام رہے اور مزید اجازت کی ضرورت ہے۔';
$string['privacy:metadata:messagelist:address'] = 'وہ پتہ جہاں ای میل بھیجا گیا تھا';
$string['privacy:metadata:messagelist:messageid'] = 'پیغام کی آئی ڈی';
$string['privacy:metadata:messagelist:timecreated'] = 'جس وقت ریکارڈ بنایا گیا تھا';
$string['privacy:metadata:messagelist:userid'] = 'صارف کی  آئی ڈی جسے پیغام کو منظور کرنے کی ضرورت ہے';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'بھیجنے والے کے پتے کی توثیق کریں';
$string['ssl'] = 'SSL (SSL ورژن کا خود بخود پتہ لگائیں)';
$string['sslv2'] = 'SSLv2 (SSL ورژن 2 کو مجبور کریں)';
$string['sslv3'] = 'SSLv3 (SSL ورژن 3 کو مجبور کریں)';
$string['taskcleanup'] = 'غیر تصدیق شدہ آنے والی ای میل کی صفائی';
$string['taskpickup'] = 'آنے والی ای میل پک اپ';
$string['tls'] = 'TLS (TLS؛ غیر خفیہ کردہ چینل پر پروٹوکول سطح کے مذاکرات کے ذریعے شروع کیا گیا؛ محفوظ کنکشن شروع کرنے کا تجویز کردہ طریقہ)';
$string['tlsv1'] = 'TLSv1 (TLS سرور ورژن 1.x سے براہ راست کنکشن)';
$string['validateaddress'] = 'بھیجنے والے کے ای میل ایڈریس کی توثیق کریں';
$string['validateaddress_help'] = 'جب کسی صارف کی طرف سے کوئی پیغام موصول ہوتا ہے، تو موڈل بھیجنے والے کے ای میل ایڈریس کا ان کے صارف پروفائل میں موجود ای میل ایڈریس کے ساتھ موازنہ کرکے پیغام کی توثیق کرنے کی کوشش کرتا ہے۔ اگر بھیجنے والا مماثل نہیں ہے، تو صارف کو اس بات کی تصدیق کے لیے ایک اطلاع بھیجی جاتی ہے کہ اس نے واقعی ای میل بھیجی ہے۔ اگر یہ ترتیب غیر فعال ہے، تو بھیجنے والے کا ای میل پتہ بالکل بھی چیک نہیں ہوتا ہے۔';
