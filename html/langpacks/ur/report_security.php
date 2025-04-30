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
 * Strings for component 'report_security', language 'ur', version '4.4'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>یہ سفارش کی جاتی ہے کہ <code>config.php</code> کی فائل کی اجازت کو انسٹالیشن کے بعد تبدیل کر دیا جائے تاکہ ویب سرور کے ذریعے فائل میں ترمیم نہ کی جا سکے۔ براہ کرم نوٹ کریں کہ یہ اقدام سرور کی سیکیورٹی کو نمایاں طور پر بہتر نہیں کرتا ہے، حالانکہ یہ عام کارناموں کو سست یا محدود کر سکتا ہے۔</p>';
$string['check_configrw_name'] = 'قابل تحریر config.php';
$string['check_configrw_ok'] = 'config.php کو پی ایچ پی اسکرپٹس کے ذریعے تبدیل نہیں کیا جا سکتا۔';
$string['check_configrw_warning'] = 'پی ایچ پی اسکرپٹس config.php میں ترمیم کر سکتی ہیں۔';
$string['check_cookiesecure_details'] = '<p>اگر https کمیونیکیشن فعال ہے، تو محفوظ کوکیز بھیجنے کو فعال کرنے کی سفارش کی جاتی ہے۔ آپ کو HTTP سے https کی طرف مستقل طور پر ری ڈائریکشن ہونا چاہیے اور مثالی طور پر HSTS ہیڈرز بھی پیش کریں۔</p>';
$string['check_cookiesecure_error'] = 'براہ کرم محفوظ کوکیز کو فعال کریں';
$string['check_cookiesecure_http'] = 'محفوظ کوکیز استعمال کرنے کے لیے آپ کو https کو آن کرنا ہوگا';
$string['check_cookiesecure_name'] = 'محفوظ کوکیز';
$string['check_cookiesecure_ok'] = 'محفوظ کوکیز فعال ہیں۔';
$string['check_crawlers_details'] = '<p>"اوپن ٹو سرچ انجن" کی ترتیب سرچ انجنوں کو مہمانوں تک رسائی کے ساتھ کورسز میں داخل ہونے کے قابل بناتی ہے۔ اگر مہمان لاگ ان کی اجازت نہ ہو تو اس ترتیب کو فعال کرنے کا کوئی فائدہ نہیں ہے۔</p>';
$string['check_crawlers_error'] = 'سرچ انجن تک رسائی کی اجازت ہے لیکن مہمانوں تک رسائی غیر فعال ہے۔';
$string['check_crawlers_info'] = 'سرچ انجن بطور مہمان داخل ہو سکتے ہیں۔';
$string['check_crawlers_name'] = 'سرچ انجنوں کے لیے کھولیں';
$string['check_crawlers_ok'] = 'سرچ انجن تک رسائی فعال نہیں ہے۔';
$string['check_defaultuserrole_details'] = '<p>تمام لاگ ان صارفین کو پہلے سے طے شدہ صارف کردار کی صلاحیتیں دی جاتی ہیں۔ براہ کرم یقینی بنائیں کہ اس کردار میں کسی بھی خطرناک صلاحیتوں کی اجازت نہیں ہے۔</p> <p>ڈیفالٹ صارف کے کردار کے لیے واحد معاون میراثی قسم <em>تصدیق شدہ صارف</em> ہے۔ کورس دیکھنے کی اہلیت کو فعال نہیں کیا جانا چاہیے۔</p>';
$string['check_defaultuserrole_error'] = 'پہلے سے طے شدہ صارف کا کردار "{$a}" غلط طریقے سے بیان کیا گیا ہے!';
$string['check_defaultuserrole_name'] = 'تمام صارفین کے لیے پہلے سے طے شدہ کردار';
$string['check_defaultuserrole_notset'] = 'ڈیفالٹ رول سیٹ نہیں ہے۔';
$string['check_defaultuserrole_ok'] = 'تمام صارفین کی تعریف کے لیے ڈیفالٹ رول ٹھیک ہے۔';
$string['check_dirindex_info'] = 'ڈائریکٹری انڈیکس کو فعال نہیں کیا جانا چاہئے';
$string['check_displayerrors_details'] = '<p>پی ایچ پی کی ترتیب <code>display_errors</code> کو فعال کرنے کی پروڈکشن سائٹس پر سفارش نہیں کی جاتی ہے کیونکہ خرابی کے پیغامات آپ کے سرور کے بارے میں حساس معلومات کو ظاہر کر سکتے ہیں۔</p>';
$string['check_displayerrors_error'] = 'غلطیوں کو ظاہر کرنے کے لیے پی ایچ پی کی ترتیب فعال ہے۔ یہ تجویز کیا جاتا ہے کہ یہ غیر فعال ہے۔';
$string['check_displayerrors_name'] = 'پی ایچ پی کی غلطیوں کی نمائش';
$string['check_displayerrors_ok'] = 'پی ایچ پی کی غلطیوں کی نمائش کو غیر فعال کر دیا گیا ہے۔';
$string['check_dotfiles_info'] = '/.well-known/* کے علاوہ تمام ڈاٹ فائلز عوامی نہیں ہونی چاہئیں';
$string['check_emailchangeconfirmation_details'] = '<p>یہ تجویز کیا جاتا ہے کہ جب صارفین اپنے پروفائل میں اپنا ای میل پتہ تبدیل کرتے ہیں تو ایک ای میل تصدیقی مرحلہ درکار ہوتا ہے۔ غیر فعال ہونے پر، اسپامرز اسپام بھیجنے کے لیے سرور کا استحصال کرنے کی کوشش کر سکتے ہیں۔</p> <p>ای میل فیلڈ کو توثیقی پلگ ان سے بھی لاک کیا جا سکتا ہے، اس امکان پر یہاں غور نہیں کیا جاتا ہے۔</p>';
$string['check_emailchangeconfirmation_error'] = 'صارفین کوئی بھی ای میل ایڈریس درج کر سکتے ہیں۔';
$string['check_emailchangeconfirmation_info'] = 'صارفین صرف اجازت شدہ ڈومینز سے ای میل پتے درج کر سکتے ہیں۔';
$string['check_emailchangeconfirmation_name'] = 'ای میل تبدیلی کی تصدیق';
$string['check_emailchangeconfirmation_ok'] = 'صارف پروفائل میں ای میل ایڈریس کی تبدیلی کی تصدیق۔';
$string['check_embed_details'] = '<p>لامحدود آبجیکٹ ایمبیڈنگ بہت خطرناک ہے - کوئی بھی رجسٹرڈ صارف دوسرے سرور صارفین کے خلاف XSS حملہ کر سکتا ہے۔ اس ترتیب کو پروڈکشن سرورز پر غیر فعال ہونا چاہیے۔</p>';
$string['check_embed_error'] = 'لامحدود آبجیکٹ ایمبیڈنگ فعال ہے - یہ زیادہ تر سرورز کے لیے بہت خطرناک ہے۔';
$string['check_embed_name'] = 'EMBED اور OBJECT کی اجازت دیں';
$string['check_embed_ok'] = 'لامحدود آبجیکٹ ایمبیڈنگ کی اجازت نہیں ہے۔';
$string['check_frontpagerole_details'] = '<p>فرنٹ پیج کی سرگرمیوں کے لیے تمام رجسٹرڈ صارفین کو پہلے سے طے شدہ فرنٹ پیج رول دیا جاتا ہے۔ براہ کرم یقینی بنائیں کہ اس کردار کے لیے کسی خطرناک صلاحیت کی اجازت نہیں ہے۔</p> <p>اس مقصد کے لیے ایک خاص کردار بنانے کی سفارش کی جاتی ہے اور میراثی قسم کا کردار استعمال نہیں کیا جاتا ہے۔</p>';
$string['check_frontpagerole_error'] = 'غلط طریقے سے متعین فرنٹ پیج رول "{$a}" کا پتہ چلا!';
$string['check_frontpagerole_name'] = 'صفحہ اول کا کردار';
$string['check_frontpagerole_notset'] = 'فرنٹ پیج رول سیٹ نہیں ہے۔';
$string['check_frontpagerole_ok'] = 'فرنٹ پیج رول کی تعریف ٹھیک ہے۔';
$string['check_guestrole_details'] = '<p>گیسٹ رول مہمانوں کے لیے استعمال ہوتا ہے، صارفین کے لیے لاگ ان نہیں ہوتے اور عارضی مہمان کورس تک رسائی۔ براہ کرم یقینی بنائیں کہ اس کردار میں کسی خطرناک صلاحیت کی اجازت نہیں ہے۔</p> <p>مہمان کے کردار کے لیے واحد تعاون یافتہ میراثی قسم <em>مہمان</em> ہے۔</p>';
$string['check_guestrole_error'] = 'مہمان کا کردار "{$a}" غلط طریقے سے بیان کیا گیا ہے!';
$string['check_guestrole_name'] = 'مہمان کا کردار';
$string['check_guestrole_notset'] = 'مہمان کا کردار متعین نہیں ہے۔';
$string['check_guestrole_ok'] = 'مہمان کے کردار کی تعریف ٹھیک ہے۔';
$string['check_nodemodules_details'] = '<p>ڈائریکٹری <code>{$a->path}</code> Node.js ماڈیولز اور ان کے انحصار پر مشتمل ہے، جو عام طور پر NPM یوٹیلیٹی کے ذریعے انسٹال ہوتی ہے۔ ان ماڈیولز کی ضرورت مقامی موڈل ڈیولپمنٹ کے لیے ہو سکتی ہے، جیسے کہ گرنٹ فریم ورک استعمال کرنے کے لیے۔ موڈل سائٹ کو پروڈکشن میں چلانے کے لیے ان کی ضرورت نہیں ہے اور ان میں ممکنہ طور پر خطرناک کوڈ ہو سکتا ہے جو آپ کی سائٹ کو دور دراز کے حملوں کے لیے بے نقاب کرتا ہے۔ یا کم از کم اپنی ویب سرور کنفیگریشن میں اس تک ویب رسائی کو روک دیں۔</p>';
$string['check_nodemodules_info'] = 'node_modules ڈائریکٹری عوامی سائٹس پر موجود نہیں ہونی چاہیے۔';
$string['check_nodemodules_name'] = 'Node.js ماڈیول ڈائرکٹری';
$string['check_openprofiles_details'] = 'اسپامرز کے ذریعے اوپن یوزر پروفائلز کا غلط استعمال کیا جا سکتا ہے۔ یہ تجویز کیا جاتا ہے کہ یا تو <code>صارفین کو پروفائلز کے لیے لاگ ان کرنے پر مجبور کریں</code> یا <code>صارفین کو لاگ ان کرنے پر مجبور کریں</code> کو فعال کیا جائے۔';
$string['check_openprofiles_error'] = 'کوئی بھی صارف کے پروفائلز کو لاگ ان کیے بغیر دیکھ سکتا ہے۔';
$string['check_openprofiles_name'] = 'صارف پروفائلز کھولیں';
$string['check_openprofiles_ok'] = 'صارف پروفائلز دیکھنے سے پہلے لاگ ان ضروری ہے۔';
$string['check_passwordpolicy_details'] = '<p>یہ سفارش کی جاتی ہے کہ پاس ورڈ کی پالیسی ترتیب دی جائے، کیونکہ پاس ورڈ کا اندازہ لگانا اکثر غیر مجاز رسائی حاصل کرنے کا سب سے آسان طریقہ ہوتا ہے۔ تاہم تقاضوں کو زیادہ سخت نہ بنائیں، کیونکہ اس کے نتیجے میں صارفین اپنے پاس ورڈز کو یاد نہیں رکھ پاتے اور یا تو انہیں بھول جاتے ہیں یا انہیں لکھ دیتے ہیں۔</p>';
$string['check_passwordpolicy_error'] = 'پاس ورڈ پالیسی سیٹ نہیں ہے۔';
$string['check_passwordpolicy_name'] = 'پاس ورڈ پالیسی';
$string['check_passwordpolicy_ok'] = 'پاس ورڈ پالیسی فعال ہے۔';
$string['check_preventexecpath_details'] = '<p>ایڈمن GUI کے ذریعے قابل عمل راستوں کو سیٹ کرنے کی اجازت دینا استحقاق میں اضافے کا ایک ویکٹر ہے۔ اسے config.php میں مجبور کیا جانا چاہیے:</p><p><code>$CFG->preventexecpath = true;<code></p>';
$string['check_preventexecpath_name'] = 'قابل عمل پاتھ';
$string['check_preventexecpath_ok'] = 'قابل عمل پاتھ صرف config.php میں سیٹ کیے جا سکتے ہیں۔';
$string['check_preventexecpath_warning'] = 'ایڈمن GUI میں ایگزیکیوٹیبل پاتھ سیٹ کیے جا سکتے ہیں۔';
$string['check_publicpaths_403'] = '(ایک 403 لوٹایا، مثالی طور پر 404 ہونا چاہئے)';
$string['check_publicpaths_generic'] = '{$a} فائلوں کو عوامی نہیں ہونا چاہیے';
$string['check_publicpaths_name'] = 'تمام عوامی / نجی راستوں کو چیک کریں';
$string['check_riskadmin_detailsok'] = '<p>براہ کرم سسٹم ایڈمنسٹریٹرز کی درج ذیل فہرست کی تصدیق کریں:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>براہ کرم سسٹم ایڈمنسٹریٹرز کی درج ذیل فہرست کی تصدیق کریں:</p>{$a->admins} <p>صرف سسٹم کے تناظر میں ایڈمنسٹریٹر کا کردار تفویض کرنے کی سفارش کی جاتی ہے۔ درج ذیل صارفین کے پاس دوسرے سیاق و سباق میں (غیر تعاون یافتہ) ایڈمن رول اسائنمنٹس ہیں:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'ایڈمنسٹریٹرز';
$string['check_riskadmin_ok'] = '{$a} سرور ایڈمنسٹریٹر ملا۔';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) رول تفویض کا جائزہ لیں</a>';
$string['check_riskadmin_warning'] = '{$a->admincount} سرور ایڈمنسٹریٹرز اور {$a->unsupcount} غیر تعاون یافتہ ایڈمن رول اسائنمنٹس ملے۔';
$string['check_riskbackup_details_overriddenroles'] = '<p>یہ فعال اوور رائیڈز صارفین کو یہ صلاحیت فراہم کرتے ہیں کہ وہ بیک اپ میں صارف کا ڈیٹا شامل کر سکیں۔ براہ کرم یقینی بنائیں کہ یہ اجازت ضروری ہے۔</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>درج ذیل نظام کے کردار فی الحال صارفین کو بیک اپ میں صارف کا ڈیٹا شامل کرنے کی اجازت دیتے ہیں۔ براہ کرم یقینی بنائیں کہ یہ اجازت ضروری ہے۔</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>مذکورہ بالا کرداروں یا مقامی اوور رائیڈز کی وجہ سے، درج ذیل صارف اکاؤنٹس کو فی الحال اپنے کورس میں اندراج شدہ کسی بھی صارف کے نجی ڈیٹا پر مشتمل بیک اپ بنانے کی اجازت ہے۔ یقینی بنائیں کہ وہ (a) قابل بھروسہ ہیں اور (b) مضبوط پاس ورڈز سے محفوظ ہیں:</p> {$a}';
$string['check_riskbackup_detailsok'] = 'کوئی کردار واضح طور پر صارف کے ڈیٹا کے بیک اپ کی اجازت نہیں دیتا ہے۔ تاہم، نوٹ کریں کہ "doanything" کی اہلیت کے حامل منتظمین اب بھی ایسا کرنے کے قابل ہو سکتے ہیں۔';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} {$a->contextname</a> میں';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'صارف کے ڈیٹا کا بیک اپ';
$string['check_riskbackup_ok'] = 'کوئی کردار واضح طور پر صارف کے ڈیٹا کے بیک اپ کی اجازت نہیں دیتا ہے';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) {$a->contextname}</a> میں';
$string['check_riskbackup_warning'] = '{$a->rolecount} رولز، {$a->overridecount} اوور رائیڈز اور {$a->usercount} صارفین کو صارف کے ڈیٹا کا بیک اپ لینے کی اہلیت ملے۔';
$string['check_riskxss_details'] = '<p>RISK_XSS تمام خطرناک صلاحیتوں کی نشاندہی کرتا ہے جو صرف قابل اعتماد صارف استعمال کر سکتے ہیں۔ </p><p>براہ کرم صارفین کی درج ذیل فہرست کی تصدیق کریں اور یقینی بنائیں کہ آپ اس سرور پر ان پر مکمل اعتماد کرتے ہیں:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS قابل اعتماد صارفین';
$string['check_riskxss_warning'] = 'RISK_XSS - ایسے {$a} صارفین ملے جن پر بھروسہ کرنا ضروری ہے۔';
$string['check_unsecuredataroot_details'] = '<p>ڈیٹا روٹ ڈائرکٹری کو ویب کے ذریعے قابل رسائی نہیں ہونا چاہیے۔ یہ یقینی بنانے کا بہترین طریقہ ہے کہ ڈائرکٹری تک رسائی ممکن نہیں ہے عوامی ویب ڈائرکٹری سے باہر ڈائریکٹری کا استعمال کرنا ہے۔ code> ترتیب <code>config.php</code> کے مطابق۔</p>';
$string['check_unsecuredataroot_error'] = 'آپ کی ڈیٹا روٹ ڈائرکٹری <code>{$a}</code> غلط جگہ پر ہے اور ویب کے سامنے آ گئی ہے!';
$string['check_unsecuredataroot_name'] = 'غیر محفوظ ڈیٹا روٹ';
$string['check_unsecuredataroot_ok'] = 'Dataroot ڈائریکٹری ویب کے ذریعے قابل رسائی نہیں ہونی چاہیے۔';
$string['check_unsecuredataroot_warning'] = 'آپ کی ڈیٹا روٹ ڈائرکٹری <code>{$a}</code> غلط جگہ پر ہے اور ویب کے سامنے آ سکتی ہے۔';
$string['check_vendordir_details'] = '<p>ڈائریکٹری <code>{$a->path}</code> مختلف فریق ثالث لائبریریوں اور ان کے انحصار پر مشتمل ہے، جو عام طور پر PHP کمپوزر کے ذریعے انسٹال کی جاتی ہیں۔ ان لائبریریوں کی مقامی موڈل ڈیولپمنٹ کے لیے ضرورت ہو سکتی ہے، جیسے کہ PHPUnit فریم ورک کو انسٹال کرنے کے لیے۔ موڈل سائٹ کو پروڈکشن میں چلانے کے لیے ان کی ضرورت نہیں ہے اور ان میں ممکنہ طور پر خطرناک کوڈ ہو سکتا ہے جو آپ کی سائٹ کو دور دراز کے حملوں کے لیے بے نقاب کرتا ہے۔ یا کم از کم اپنی ویب سرور کنفیگریشن میں اس تک ویب رسائی کو روک دیں۔</p>';
$string['check_vendordir_info'] = 'وینڈر ڈائرکٹری عوامی سائٹس پر موجود نہیں ہونی چاہیے۔';
$string['check_vendordir_name'] = 'وینڈر ڈائرکٹری';
$string['check_webcron_details'] = '<p>کرون کو ویب براؤزر سے چلانے سے مراعات یافتہ معلومات کو گمنام صارفین تک پہنچایا جا سکتا ہے۔ یہ سفارش کی جاتی ہے کہ صرف کمانڈ لائن سے کرون کو چلائیں یا ریموٹ رسائی کے لیے کرون پاس ورڈ سیٹ کریں۔</p>';
$string['check_webcron_name'] = 'ویب کرون';
$string['check_webcron_ok'] = 'گمنام صارفین کرون تک رسائی حاصل نہیں کرسکتے ہیں۔';
$string['check_webcron_warning'] = 'گمنام صارفین کرون تک رسائی حاصل کرسکتے ہیں۔';
$string['configuration'] = 'کنفیگریشن';
$string['description'] = 'تفصیل';
$string['details'] = 'تفصیلات';
$string['eventreportviewed'] = 'سیکیورٹی چیک رپورٹ دیکھیں';
$string['issue'] = 'مسئلہ';
$string['pluginname'] = 'سیکیورٹی چیک';
$string['privacy:metadata'] = 'سیکورٹی اوور ویو پلگ ان کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔';
$string['security:view'] = 'سیکیورٹی رپورٹ دیکھیں';
$string['timewarning'] = 'ڈیٹا پروسیسنگ میں کافی وقت لگ سکتا ہے، براہ کرم صبر کریں۔۔۔';
