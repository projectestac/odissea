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
 * Strings for component 'payment', language 'ur', version '4.4'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'محفوظ شدہ';
$string['accountconfignote'] = 'اس اکاؤنٹ کے لیے ادائیگی کے گیٹ ویز الگ سے کنفیگر کیے جائیں گے';
$string['accountdeleteconfirm'] = 'اگر اس اکاؤنٹ میں پچھلی ادائیگیاں ہیں، تو اسے محفوظ کر لیا جائے گا، ورنہ اس کا کنفیگریشن ڈیٹا مستقل طور پر حذف کر دیا جائے گا۔ کیا آپ واقعی جاری رکھنا چاہتے ہیں؟';
$string['accountidnumber'] = 'شناختی نمبر';
$string['accountidnumber_help'] = 'ID نمبر صرف اس وقت استعمال ہوتا ہے جب اکاؤنٹ کو بیرونی سسٹمز کے ساتھ ملایا جاتا ہے اور سائٹ پر کہیں بھی ظاہر نہیں ہوتا ہے۔ اگر اکاؤنٹ کا سرکاری کوڈ نام ہے تو اسے درج کیا جا سکتا ہے، بصورت دیگر فیلڈ کو خالی چھوڑا جا سکتا ہے۔';
$string['accountname'] = 'اکاؤنٹ کا نام';
$string['accountname_help'] = 'ادائیگیاں ترتیب دینے والے اساتذہ یا مینیجرز کے لیے اس اکاؤنٹ کی شناخت کیسے کی جائے گی (مثال کے طور پر کورس انرولمنٹ پلگ ان میں)۔';
$string['accountnotavailable'] = 'دستیاب نہیں ہے';
$string['createaccount'] = 'ادائیگی اکاؤنٹ بنائیں';
$string['deleteorarchive'] = 'حذف کریں یا محفوظ کریں';
$string['eventaccountcreated'] = 'ادائیگی کا اکاؤنٹ بنایا گیا';
$string['eventaccountdeleted'] = 'ادائیگی کا اکاؤنٹ حذف کر دیا گیا';
$string['eventaccountupdated'] = 'ادائیگی کا اکاؤنٹ اپ ڈیٹ ہو گیا';
$string['feeincludesurcharge'] = '{$a->fee} (اس ادائیگی کی قسم کو استعمال کرنے کے لیے {$a->surcharge}% سرچارج بھی شامل ہے)';
$string['gatewaycannotbeenabled'] = 'ادائیگی کے گیٹ وے کو فعال نہیں کیا جا سکتا کیونکہ کنفیگریشن نامکمل ہے۔';
$string['gatewaydisabled'] = 'غیر فعال';
$string['gatewayenabled'] = 'فعال';
$string['gatewaynotfound'] = 'گیٹ وے نہیں ملا';
$string['gotomanageplugins'] = 'ادائیگی کے گیٹ ویز کو فعال اور غیر فعال کریں اور {$a} کے ذریعے سرچارج سیٹ کریں۔';
$string['gotopaymentaccounts'] = 'آپ {$a} صفحہ پر ان میں سے کسی بھی گیٹ وے کا استعمال کرتے ہوئے متعدد ادائیگی اکاؤنٹس بنا سکتے ہیں۔';
$string['hidearchived'] = 'محفوظ شدہ دستاویزات کو چھپائیں';
$string['noaccountsavilable'] = 'کوئی ادائیگی اکاؤنٹس دستیاب نہیں ہیں۔';
$string['nocurrencysupported'] = 'کسی بھی کرنسی میں ادائیگی کی سہولت نہیں ہے۔ براہ کرم یقینی بنائیں کہ کم از کم ایک ادائیگی کا گیٹ وے فعال ہے۔';
$string['nogateway'] = 'ادائیگی کا کوئی گیٹ وے نہیں ہے جسے استعمال کیا جا سکے۔';
$string['nogatewayselected'] = 'آپ کو پہلے ادائیگی کے گیٹ وے کو منتخب کرنے کی ضرورت ہے۔';
$string['paymentaccount'] = 'ادائیگی اکاؤنٹ';
$string['paymentaccounts'] = 'ادائیگی اکاؤنٹس';
$string['paymentaccountsexplained'] = 'اس سائٹ کے لیے ایک یا متعدد ادائیگی اکاؤنٹس بنائیں۔ ہر اکاؤنٹ میں دستیاب ادائیگی کے گیٹ ویز کے لیے ترتیب شامل ہوتی ہے۔ وہ شخص جو سائٹ پر ادائیگیوں کو ترتیب دیتا ہے (مثال کے طور پر، کورس کے اندراج کے لیے ادائیگی) دستیاب اکاؤنٹس میں سے انتخاب کر سکے گا۔';
$string['payments'] = 'ادائیگیاں';
$string['privacy:metadata:database:payments'] = 'ادائیگیوں کے بارے میں معلومات۔';
$string['privacy:metadata:database:payments:amount'] = 'ادائیگی کے لیے رقم۔';
$string['privacy:metadata:database:payments:currency'] = 'ادائیگی کی کرنسی۔';
$string['privacy:metadata:database:payments:gateway'] = 'ادائیگی کا گیٹ وے جو ادائیگی کے لیے استعمال ہوتا ہے۔';
$string['privacy:metadata:database:payments:timecreated'] = 'جس وقت ادائیگی کی گئی تھی۔';
$string['privacy:metadata:database:payments:timemodified'] = 'وہ وقت جب ادائیگی کے ریکارڈ کو آخری بار اپ ڈیٹ کیا گیا تھا۔';
$string['privacy:metadata:database:payments:userid'] = 'وہ صارف جس نے ادائیگی کی۔';
$string['restoreaccount'] = 'بحال کریں';
$string['selectpaymenttype'] = 'ادائیگی کی قسم منتخب کریں';
$string['showarchived'] = 'محفوظ شدہ دکھائیں';
$string['supportedcurrencies'] = 'تعاون یافتہ کرنسی';
$string['surcharge'] = 'سرچارج (فیصد)';
$string['surcharge_desc'] = 'سرچارج ایک اضافی فیصد ہے جو ان صارفین سے وصول کیا جاتا ہے جو اس ادائیگی کے گیٹ وے کے ذریعے ادائیگی کرنے کا انتخاب کرتے ہیں۔';
