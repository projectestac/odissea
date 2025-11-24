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
 * Strings for component 'enrol_paypal', language 'ur', version '4.5'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'کردار تفویض کریں';
$string['businessemail'] = 'پے پال کاروباری ای میل';
$string['businessemail_desc'] = 'آپ کے کاروبار کے پے پال اکاؤنٹ کا ای میل پتہ';
$string['cost'] = 'اندراج کی لاگت';
$string['costerror'] = 'اندراج کی لاگت عددی نہیں ہے';
$string['costorkey'] = 'براہ کرم اندراج کے درج ذیل طریقوں میں سے ایک کا انتخاب کریں۔';
$string['currency'] = 'کرنسی';
$string['defaultrole'] = 'پہلے سے طے شدہ رول تفویض';
$string['defaultrole_desc'] = 'وہ کردار منتخب کریں جو PayPal کے اندراج کے دوران صارفین کو تفویض کیا جائے';
$string['enrolenddate'] = 'آخری تاریخ';
$string['enrolenddate_help'] = 'اگر فعال ہو تو، صارفین کو صرف اس تاریخ تک اندراج کیا جا سکتا ہے۔';
$string['enrolenddaterror'] = 'اندراج کی آخری تاریخ شروع ہونے کی تاریخ سے پہلے نہیں ہو سکتی';
$string['enrolperiod'] = 'اندراج کی مدت';
$string['enrolperiod_desc'] = 'وقت کی طے شدہ لمبائی جب اندراج درست ہے۔ اگر صفر پر سیٹ کیا جاتا ہے، تو اندراج کا دورانیہ بطور ڈیفالٹ لامحدود ہوگا۔';
$string['enrolperiod_help'] = 'اندراج کے درست ہونے کا وقت، صارف کے اندراج کے لمحے سے شروع ہوتا ہے۔ غیر فعال ہونے کی صورت میں اندراج کا دورانیہ لامحدود ہوگا۔';
$string['enrolstartdate'] = 'شروع کرنے کی تاریخ';
$string['enrolstartdate_help'] = 'اگر فعال ہو تو، صارفین کو صرف اس تاریخ سے اندراج کیا جا سکتا ہے۔';
$string['errdisabled'] = 'پے پال انرولمنٹ پلگ ان غیر فعال ہے اور ادائیگی کی اطلاعات کو ہینڈل نہیں کرتا ہے۔';
$string['erripninvalid'] = 'پے پال کے ذریعے فوری ادائیگی کی اطلاع کی تصدیق نہیں کی گئی ہے۔';
$string['errpaypalconnect'] = 'فوری ادائیگی کی اطلاع کی توثیق کرنے کے لیے {$a->url} سے منسلک نہیں ہو سکا: {$a->result}';
$string['expiredaction'] = 'اندراج کی میعاد ختم ہونے کی کارروائی';
$string['expiredaction_help'] = 'صارف کے اندراج کی میعاد ختم ہونے پر انجام دینے کے لیے کارروائی کا انتخاب کریں۔ براہ کرم نوٹ کریں کہ کورس کے اندراج کے دوران کچھ صارف ڈیٹا اور سیٹنگز کو کورس سے صاف کر دیا جاتا ہے۔';
$string['mailadmins'] = 'ایڈمن کو مطلع کریں';
$string['mailstudents'] = 'طلباء کو مطلع کریں';
$string['mailteachers'] = 'اساتذہ کو مطلع کریں';
$string['messageprovider:paypal_enrolment'] = 'پے پال اندراج کے پیغامات';
$string['nocost'] = 'اس کورس میں داخلہ لینے سے متعلق کوئی لاگت نہیں ہے!';
$string['paypal:config'] = 'پے پال کے اندراج کی مثالیں ترتیب دیں';
$string['paypal:manage'] = 'اندراج شدہ صارفین کا نظم کریں';
$string['paypal:unenrol'] = 'کورس سے صارفین کا اندراج ختم کریں';
$string['paypal:unenrolself'] = 'کورس سے اپنا اندراج ختم کریں';
$string['paypalaccepted'] = 'پے پال کی ادائیگی قبول کر لی گئی';
$string['pluginname'] = 'پے پال';
$string['pluginname_desc'] = 'پے پال ماڈیول آپ کو بامعاوضہ کورسز ترتیب دینے کی اجازت دیتا ہے۔ اگر کسی کورس کی لاگت صفر ہے، تو طلباء سے داخلے کے لیے ادائیگی کرنے کو نہیں کہا جاتا ہے۔ پوری سائٹ پر لاگت ہے جسے آپ یہاں پوری سائٹ کے لیے بطور ڈیفالٹ سیٹ کرتے ہیں اور پھر ایک کورس کی ترتیب جسے آپ ہر کورس کے لیے انفرادی طور پر سیٹ کر سکتے ہیں۔ کورس کی لاگت سائٹ کی لاگت کو اوور رائیڈ کرتی ہے۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'پے پال اندراجات کے لیے پے پال لین دین کے بارے میں معلومات۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'ادائیگی وصول کنندہ (یعنی مرچنٹ) کا ای میل پتہ یا پے پال اکاؤنٹ آئی ڈی۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'بیچے جانے والے کورس کی آئی ڈی۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'کورس میں اندراج کی مثال کی آئی ڈی۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'کورس کا پورا نام کہ اس کا اندراج فروخت ہو چکا ہے۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'ایک نوٹ جو خریدار نے PayPal ویب سائٹ کے ادائیگیوں کے نوٹ کے خانے میں درج کیا تھا۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'خریدار کا پورا نام۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'ریفنڈ، ریورسل، یا منسوخ شدہ ریورسل کی صورت میں، یہ اصل ٹرانزیکشن کی ٹرانزیکشن آئی ڈی ہوگی۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'ادائیگی کی حیثیت۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'اس بات کو روکتا ہے کہ آیا ادائیگی کو eCheck (echeck) سے فنڈ کیا گیا تھا، یا PayPal بیلنس، کریڈٹ کارڈ، یا فوری منتقلی (فوری) سے فنڈ کیا گیا تھا۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'ادائیگی کی حیثیت زیر التواء ہونے کی وجہ (اگر یہ ہے)۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'ادائیگی کی حیثیت الٹ، ریفنڈ، منسوخ_ریورسل، یا انکاری ہونے کی وجہ (اگر حیثیت ان میں سے ایک ہے)۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'ادائیگی وصول کنندہ (یعنی مرچنٹ) کا بنیادی ای میل پتہ۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'ادائیگی وصول کنندہ (یعنی مرچنٹ) کا منفرد پے پال اکاؤنٹ آئی ڈی۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'ادائیگی پر عائد ٹیکس کی رقم۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'ادائیگی کے بارے میں پے پال کے ذریعہ موڈل کو مطلع کرنے کا وقت۔';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'خریدار سے ادائیگی کے لئے تاجر کا اصل لین دین شناختی نمبر، جس کے خلاف مقدمہ درج کیا گیا تھا';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'اس صارف کی آئی ڈی جس نے کورس کا اندراج خریدا تھا۔';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'پے پال انرولمنٹ پلگ ان صارف کا ڈیٹا موڈل سے پے پال ویب سائٹ پر منتقل کرتا ہے۔';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'اس صارف کا پتہ جو کورس خرید رہا ہے۔';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'صارف کا شہر جو کورس خرید رہا ہے۔';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'صارف کا ملک جو کورس خرید رہا ہے۔';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'ہائفن سے الگ کردہ سٹرنگ جس میں صارف (خریدار) کی آئی ڈی، کورس کی آئی ڈی، اندراج کی مثال کی آئی ڈی شامل ہے۔';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'اس صارف کا ای میل ایڈریس جو کورس خرید رہا ہے۔';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'اس صارف کا پہلا نام جو کورس خرید رہا ہے۔';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'اس صارف کا آخری نام جو کورس خرید رہا ہے۔';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'خریدار کا پورا نام۔';
$string['processexpirationstask'] = 'پے پال اندراج میعاد ختم ہونے کی اطلاع بھیجنے کا کام';
$string['sendpaymentbutton'] = 'پے پال کے ذریعے ادائیگی بھیجیں';
$string['status'] = 'پے پال اندراج کی اجازت دیں';
$string['status_desc'] = 'صارفین کو بطور ڈیفالٹ کورس میں داخلہ لینے کے لیے پے پال استعمال کرنے کی اجازت دیں۔';
$string['transactions'] = 'پے پال لین دین';
$string['unenrolselfconfirm'] = 'کیا آپ واقعی "{$a}" کورس سے اپنا اندراج ختم کرنا چاہتے ہیں؟';
