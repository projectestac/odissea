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
 * Strings for component 'portfolio_mahara', language 'ur', version '4.4'.
 *
 * @package     portfolio_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Leap2A پورٹ فولیو سپورٹ کو فعال کریں (Mahara 1.3 یا اس سے اوپر کی ضرورت ہے)';
$string['err_invalidhost'] = 'غلط MNet میزبان';
$string['err_invalidhost_help'] = 'یہ پلگ ان غلط (یا حذف شدہ) MNet میزبان کی طرف اشارہ کرنے کے لیے غلط کنفیگر کیا گیا ہے۔ یہ پلگ ان SSO IDP شائع شدہ، SSO_SP سبسکرائب شدہ، اور پورٹ فولیو سبسکرائب شدہ <b>اور</b> شائع کرنے والے موڈل نیٹ ورکنگ ساتھیوں پر انحصار کرتا ہے۔';
$string['err_networkingoff'] = 'MNet بند ہے';
$string['err_networkingoff_help'] = 'MNet کی توثیق فی الحال غیر فعال ہے۔ براہ کرم اس پلگ ان کو کنفیگر کرنے کی کوشش کرنے سے پہلے اسے فعال کریں۔ MNet کے فعال ہونے تک اس پلگ ان کی کوئی بھی مثال چھپائی گئی ہے۔ پھر انہیں دستی طور پر دوبارہ نظر آنے کے لیے سیٹ کرنے کی ضرورت ہوگی۔';
$string['err_nomnetauth'] = 'MNet توثیق پلگ ان غیر فعال ہے';
$string['err_nomnetauth_help'] = 'MNet توثیق پلگ ان غیر فعال ہے، لیکن اس سروس کے لیے ضروری ہے';
$string['err_nomnethosts'] = 'MNet پر انحصار کرتا ہے';
$string['err_nomnethosts_help'] = 'یہ پلگ ان MNet کے ساتھیوں پر انحصار کرتا ہے جس میں SSO IDP شائع ہوتا ہے، SSO SP سبسکرائب ہوتا ہے، پورٹ فولیو سروسز شائع ہوتا ہے <b>اور</b> سبسکرائب شدہ نیز MNet تصدیقی پلگ ان۔ اس پلگ ان کی کوئی بھی مثال اس وقت تک پوشیدہ رکھی گئی ہے جب تک کہ یہ شرائط پوری نہ ہو جائیں۔ پھر انہیں دستی طور پر دوبارہ نظر آنے کی ترتیب کی ضرورت ہوگی۔';
$string['failedtojump'] = 'ریموٹ سرور کے ساتھ مواصلت شروع کرنے میں ناکام';
$string['failedtoping'] = 'ریموٹ سرور کے ساتھ مواصلت شروع کرنے میں ناکام: {$a}';
$string['mnet_nofile'] = 'منتقلی آبجیکٹ میں فائل نہیں مل سکی - عجیب خرابی۔';
$string['mnet_nofilecontents'] = 'منتقلی آبجیکٹ میں فائل ملی، لیکن مواد نہیں مل سکا - عجیب خرابی: {$a}';
$string['mnet_noid'] = 'اس ٹوکن کے لیے مماثل ٹرانسفر ریکارڈ نہیں مل سکا';
$string['mnet_notoken'] = 'اس منتقلی سے مماثل ٹوکن نہیں مل سکا';
$string['mnet_wronghost'] = 'ریموٹ ہوسٹ اس ٹوکن کے ٹرانسفر ریکارڈ سے مماثل نہیں ہے';
$string['mnethost'] = 'MNet میزبان';
$string['pf_description'] = 'صارفین کو موڈل کے مواد کو اس میزبان پر بھیجنے کی اجازت دیں<br />سبسکرائب کریں <b>اور</b> اس سروس کو شائع کریں تاکہ آپ کی سائٹ کے مستند صارفین کو {$a}<br /><ul><li پر مواد بھیجنے کی اجازت دی جا سکے۔ <em>انحصار</em>: آپ کو {$a} کے لیے SSO (Identify Provider) سروس کو بھی <strong>شائع</strong> کرنا چاہیے۔</li><li><em>انحصار</em>: آپ کو {$a}</li><li><em>انحصار</em> پر SSO (سروس پرووائیڈر) سروس کو بھی <strong>سبسکرائب</strong> کرنا ہوگا: آپ کو MNet تصدیقی پلگ ان کو بھی فعال کرنا ہوگا۔< /li></ul><br />';
$string['pf_name'] = 'پورٹ فولیو خدمات';
$string['pluginname'] = 'مہارا ای پورٹ فولیو';
$string['privacy:metadata'] = 'یہ پلگ ان ایک منسلک مہارا ایپلیکیشن کو بیرونی طور پر ڈیٹا بھیجتا ہے۔ یہ مقامی طور پر ڈیٹا کو ذخیرہ نہیں کرتا ہے۔';
$string['privacy:metadata:data'] = 'ذاتی ڈیٹا پورٹ فولیو سب سسٹم سے گزرا ہے۔';
$string['senddisallowed'] = 'آپ اس وقت فائلوں کو مہارا کو منتقل نہیں کر سکتے';
$string['url'] = 'یو آر ایل';
