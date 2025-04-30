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
 * Strings for component 'auth', language 'ur', version '4.4'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'دستیاب تصدیقی پلگ ان';
$string['allowaccountssameemail'] = 'ایک ہی ای میل والے اکاؤنٹس کی اجازت دیں';
$string['allowaccountssameemail_desc'] = 'اگر فعال ہو تو، ایک سے زیادہ صارف اکاؤنٹ ایک ہی ای میل ایڈریس کا اشتراک کر سکتے ہیں۔ اس کے نتیجے میں سیکیورٹی یا رازداری کے مسائل پیدا ہوسکتے ہیں، مثال کے طور پر پاس ورڈ کی تبدیلی کی تصدیقی ای میل کے ساتھ۔';
$string['alternatelogin'] = 'اگر آپ یہاں URL درج کرتے ہیں، تو اسے اس سائٹ کے لاگ ان صفحہ کے طور پر استعمال کیا جائے گا۔ صفحہ میں ایک فارم ہونا چاہیے جس میں ایکشن پراپرٹی سیٹ ہو <strong>\'{$a}\'</strong> اور فیلڈز <strong>صارف کا نام</strong> اور <strong>پاس ورڈ واپس کریں۔<br / >محتاط رہیں کہ غلط URL درج نہ کریں کیونکہ آپ خود کو اس سائٹ سے بند کر سکتے ہیں۔<br />ڈیفالٹ لاگ ان صفحہ استعمال کرنے کے لیے اس ترتیب کو خالی چھوڑ دیں۔';
$string['alternateloginurl'] = 'متبادل یو آر ایل براۓ لاگ ان';
$string['auth_changepasswordhelp'] = 'پاس ورڈ کی مدد کو تبدیل کریں';
$string['auth_changepasswordhelp_expl'] = 'کھوئے ہوئے پاس ورڈ کی مدد ان صارفین کو دکھائیں جنہوں نے اپنا {$a} پاس ورڈ کھو دیا ہے۔ یہ <strong>پاس ورڈ یو آر ایل تبدیل کریں</strong> یا اندرونی موڈل پاس ورڈ کی تبدیلی کے ساتھ ساتھ یا اس کے بجائے ظاہر ہوگا۔';
$string['auth_changepasswordurl'] = 'پاس ورڈ URL تبدیل کریں';
$string['auth_changepasswordurl_expl'] = 'ان صارفین کو بھیجنے کے لیے url کی وضاحت کریں جنہوں نے اپنا {$a} پاس ورڈ کھو دیا ہے۔ <strong>معیاری تبدیلی کا صفحہ استعمال کریں</strong> کو <strong>نہیں</strong> پر سیٹ کریں۔';
$string['auth_changingemailaddress'] = 'آپ نے ای میل ایڈریس کو {$a->oldemail} سے {$a->newemail} میں تبدیل کرنے کی درخواست کی ہے۔ سیکورٹی وجوہات کی بنا پر، ہم آپ کو نئے پتے پر ایک ای میل پیغام بھیج رہے ہیں تاکہ اس بات کی تصدیق کی جا سکے کہ یہ آپ کا ہے۔ جیسے ہی آپ اس پیغام میں آپ کو بھیجے گئے یو آر ایل کو کھولیں گے آپ کا ای میل پتہ اپ ڈیٹ ہو جائے گا۔';
$string['auth_common_settings'] = 'عام سیٹنگز';
$string['auth_data_mapping'] = 'ڈیٹا میپنگ';
$string['auth_fieldlock'] = 'لاک ویلیو';
$string['auth_fieldlock_expl'] = '<p><b>لاک ویلیو:</b> فعال ہونے پر، Moodle کے صارفین اور منتظمین کو براہ راست فیلڈ میں ترمیم کرنے سے روکے گا۔ اگر آپ اس ڈیٹا کو ایکسٹرنل آتھ سسٹم میں برقرار رکھتے ہیں تو اس آپشن کا استعمال کریں۔ </p>';
$string['auth_fieldlockfield'] = 'لاک ویلیو ({$a})';
$string['auth_fieldlocks'] = 'صارف کے فیلڈز کو لاک کریں';
$string['auth_fieldlocks_help'] = '<p>آپ صارف کے ڈیٹا فیلڈز کو لاک کر سکتے ہیں۔ یہ ان سائٹس کے لیے کارآمد ہے جہاں صارف کے ڈیٹا کو منتظمین دستی طور پر صارف کے ریکارڈ میں ترمیم کرکے یا \'اپ لوڈ یوزرز\' کی سہولت کا استعمال کرکے اپ لوڈ کرتے ہیں۔ اگر آپ ان فیلڈز کو لاک کر رہے ہیں جن کی ضرورت Moodle کے لیے ہے، تو یقینی بنائیں کہ آپ صارف اکاؤنٹ بناتے وقت وہ ڈیٹا فراہم کرتے ہیں ورنہ اکاؤنٹس ناقابل استعمال ہو جائیں گے۔</p><p>اس سے بچنے کے لیے لاک موڈ کو \'ان لاک اگر خالی\' پر سیٹ کرنے پر غور کریں۔ مسئلہ۔</p>';
$string['auth_fieldmapping'] = 'ڈیٹا میپنگ ({$a})';
$string['auth_invalidnewemailkey'] = 'خرابی: اگر آپ ای میل ایڈریس کی تبدیلی کی تصدیق کرنے کی کوشش کر رہے ہیں، تو ہو سکتا ہے آپ نے اس URL کو کاپی کرنے میں غلطی کی ہو جو ہم نے آپ کو بذریعہ ای میل بھیجا ہے۔ براہ کرم پتہ کاپی کریں اور دوبارہ کوشش کریں۔';
$string['auth_multiplehosts'] = 'متعدد میزبان یا پتے بتائے جا سکتے ہیں (مثال کے طور پر host1.com;host2.com;host3.com) یا (جیسے xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'تصدیق کا طریقہ {$a} کنفیگر نہیں ہے۔';
$string['auth_outofnewemailupdateattempts'] = 'آپ کے ای میل ایڈریس کو اپ ڈیٹ کرنے کی اجازت شدہ کوششیں ختم ہو گئی ہیں۔ آپ کی اپ ڈیٹ کی درخواست منسوخ کر دی گئی ہے۔';
$string['auth_passwordisexpired'] = 'آپ کے پاس ورڈ کی میعاد ختم ہو گئی ہے۔ براہ کرم اسے ابھی تبدیل کریں۔';
$string['auth_passwordwillexpire'] = 'آپ کے پاس ورڈ کی میعاد {$a} دنوں میں ختم ہو جائے گی۔ کیا آپ ابھی اپنا پاس ورڈ تبدیل کرنا چاہتے ہیں؟';
$string['auth_remove_delete'] = 'مکمل حذف اندرونی';
$string['auth_remove_keep'] = 'اندرونی رکھیں';
$string['auth_remove_suspend'] = 'اندرونی معطل';
$string['auth_remove_user'] = 'واضح کریں کہ بڑے پیمانے پر مطابقت پذیری کے دوران اندرونی صارف اکاؤنٹ کے ساتھ کیا کرنا ہے جب صارف کو بیرونی ذریعہ سے ہٹا دیا گیا تھا۔ صرف معطل شدہ صارفین خود بخود بحال ہو جاتے ہیں اگر وہ بیرونی ماخذ میں دوبارہ ظاہر ہوتے ہیں۔';
$string['auth_remove_user_key'] = 'ext صارف کو ہٹا دیا گیا';
$string['auth_sync_script'] = 'صارف کے اکاؤنٹ کی مطابقت پذیری';
$string['auth_sync_suspended'] = 'فعال ہونے پر، معطل شدہ وصف مقامی صارف اکاؤنٹ کی معطلی کی حیثیت کو اپ ڈیٹ کرنے کے لیے استعمال کیا جائے گا۔';
$string['auth_sync_suspended_key'] = 'مقامی صارف کی معطلی کی حیثیت کو مطابقت پذیر بنائیں';
$string['auth_updatelocal'] = 'مقامی کو اپ ڈیٹ کریں';
$string['auth_updatelocal_expl'] = '<p><b>مقامی کو اپ ڈیٹ کریں:</b> اگر فعال ہو تو، ہر بار جب صارف لاگ ان ہوتا ہے یا صارف کی مطابقت پذیری ہوتی ہے تو فیلڈ کو اپ ڈیٹ کیا جائے گا (بیرونی تصدیق سے)۔ مقامی طور پر اپ ڈیٹ کرنے کے لیے سیٹ کیے گئے فیلڈز کو لاک کر دینا چاہیے۔</p>';
$string['auth_updatelocalfield'] = 'مقامی ({$a}) کو اپ ڈیٹ کریں';
$string['auth_updateremote'] = 'بیرونی کو اپ ڈیٹ کریں';
$string['auth_updateremote_expl'] = '<p><b>بیرونی کو اپ ڈیٹ کریں:</b> فعال ہونے پر، صارف کا ریکارڈ اپ ڈیٹ ہونے پر بیرونی توثیق کو اپ ڈیٹ کیا جائے گا۔ ترمیمات کی اجازت دینے کے لیے فیلڈز کو غیر مقفل کیا جانا چاہیے۔</p>';
$string['auth_updateremote_ldap'] = '<p><b>نوٹ:</b> بیرونی LDAP ڈیٹا کو اپ ڈیٹ کرنے کے لیے ضروری ہے کہ آپ binddn اور bindpw کو بائنڈ یوزر کے لیے سیٹ کریں جس میں صارف کے تمام ریکارڈز میں ترمیم کے مراعات حاصل ہوں۔ یہ فی الحال کثیر قدر والی صفات کو محفوظ نہیں رکھتا ہے، اور اپ ڈیٹ پر اضافی اقدار کو ہٹا دے گا۔ </p>';
$string['auth_updateremotefield'] = 'بیرونی ({$a}) کو اپ ڈیٹ کریں';
$string['auth_user_create'] = 'صارف تخلیق کو فعال کریں';
$string['auth_user_creation'] = 'نئے (گمنام) صارفین بیرونی توثیق کے ذریعہ اور ای میل کے ذریعے تصدیق شدہ صارف اکاؤنٹس بنا سکتے ہیں۔ اگر آپ اسے فعال کرتے ہیں تو، صارف کی تخلیق کے لیے ماڈیول کے لیے مخصوص اختیارات کو بھی ترتیب دینا یاد رکھیں۔';
$string['auth_usernameexists'] = 'منتخب کردہ صارف نام پہلے سے موجود ہے۔ براہ کرم ایک نیا منتخب کریں۔';
$string['auth_usernotexist'] = 'غیر موجود صارف کو اپ ڈیٹ نہیں کیا جا سکتا: {$a}';
$string['authenticationoptions'] = 'تصدیق کے اختیارات';
$string['authinstructions'] = 'لاگ ان صفحہ پر ظاہر ہونے کے لیے پہلے سے طے شدہ لاگ ان ہدایات کے لیے اسے خالی چھوڑ دیں۔ اگر آپ حسب ضرورت لاگ ان ہدایات فراہم کرنا چاہتے ہیں، تو انہیں یہاں درج کریں۔';
$string['authloginviaemail'] = 'ای میل کے ذریعے لاگ ان ہونے دیں';
$string['authloginviaemail_desc'] = 'صارفین کو سائٹ لاگ ان کے لیے صارف نام اور ای میل پتہ (اگر منفرد) دونوں استعمال کرنے کی اجازت دیں۔';
$string['auto_add_remote_users'] = 'دور دراز کے صارفین کو آٹو شامل کریں';
$string['cannotmapfield'] = 'فیلڈ "{$a->fieldname}" کو میپ نہیں کیا جا سکتا کیونکہ اس کا مختصر نام "{$a->shortname}" بہت لمبا ہے۔ اسے میپ کرنے کی اجازت دینے کے لیے، آپ کو مختصر نام کو {$a->charlimit} حروف تک کم کرنا ہوگا۔ <a href="{$a->link}">صارف پروفائل فیلڈز میں ترمیم کریں</a>';
$string['changepassword'] = 'پاس ورڈ URL تبدیل کریں';
$string['changepasswordhelp'] = 'کھوئے ہوئے پاس ورڈ کی بازیابی کے صفحہ کا URL، جو صارفین کو ای میل میں بھیجا جائے گا۔ نوٹ کریں کہ اس ترتیب کا کوئی اثر نہیں ہوگا اگر پاس ورڈ کا بھولا ہوا یو آر ایل تصدیق عام ترتیبات میں سیٹ کیا جاتا ہے۔';
$string['chooseauthmethod'] = 'تصدیق کا طریقہ منتخب کریں';
$string['chooseauthmethod_help'] = 'یہ ترتیب صارف کے لاگ ان ہونے پر استعمال ہونے والے تصدیقی طریقہ کا تعین کرتی ہے۔ صرف فعال تصدیقی پلگ ان کا انتخاب کیا جانا چاہیے، ورنہ صارف مزید لاگ ان نہیں کر سکے گا۔ صارف کو لاگ ان کرنے سے روکنے کے لیے، "لاگ ان نہیں" کو منتخب کریں۔';
$string['createpassword'] = 'پاس ورڈ بنائیں اور صارف کو مطلع کریں';
$string['createpasswordifneeded'] = 'اگر ضرورت ہو تو پاس ورڈ بنائیں اور ای میل کے ذریعے بھیجیں';
$string['emailchangecancel'] = 'ای میل کی تبدیلی منسوخ کریں';
$string['emailchangepending'] = 'تبدیلی زیر التواء آپ کو بھیجا گیا لنک {$a->preference_newemail} پر کھولیں۔';
$string['emailnowexists'] = 'جو ای میل پتہ آپ نے اپنے پروفائل کو تفویض کرنے کی کوشش کی ہے وہ آپ کی اصل درخواست کے بعد سے کسی اور کو تفویض کر دیا گیا ہے۔ ای میل ایڈریس کی تبدیلی کے لیے آپ کی درخواست کو منسوخ کر دیا گیا ہے، لیکن آپ کسی دوسرے ایڈریس کے ساتھ دوبارہ کوشش کر سکتے ہیں۔';
$string['emailupdate'] = 'ای میل ایڈریس اپ ڈیٹ';
$string['emailupdatemessage'] = 'محترم {$a->fullname}، آپ نے {$a->site} پر اپنے اکاؤنٹ کے لیے اپنا ای میل پتہ تبدیل کرنے کی درخواست کی ہے۔ اس تبدیلی کی تصدیق کرنے کے لیے، براہ کرم درج ذیل ویب ایڈریس پر جائیں: {$a->url} {$a->supportemail}';
$string['emailupdatesuccess'] = 'صارف کا ای میل پتہ <em>{$a->fullname}</em> کامیابی کے ساتھ <em>{$a->email}</em> پر اپ ڈیٹ کر دیا گیا۔';
$string['emailupdatetitle'] = '{$a->site} پر ای میل اپ ڈیٹ کی تصدیق';
$string['errormaxconsecutiveidentchars'] = 'پاس ورڈز میں زیادہ سے زیادہ {$a} لگاتار ایک جیسے حروف ہونے چاہئیں۔';
$string['errorminpassworddigits'] = 'پاس ورڈز میں کم از کم {$a} ہندسوں کا ہونا ضروری ہے۔';
$string['errorminpasswordlength'] = 'پاس ورڈ کم از کم {$a} حروف کا ہونا چاہیے۔';
$string['errorminpasswordlower'] = 'پاس ورڈز میں کم از کم {$a} چھوٹے حروف کا ہونا ضروری ہے۔';
$string['errorminpasswordnonalphanum'] = 'پاس ورڈ میں کم از کم {$a} خصوصی حرف (زبانیں) جیسے *، -، یا # ہونا ضروری ہے۔';
$string['errorminpasswordupper'] = 'پاس ورڈز میں کم از کم {$a} بڑے حروف کا ہونا ضروری ہے۔';
$string['errorpasswordreused'] = 'یہ پاس ورڈ پہلے استعمال کیا جا چکا ہے، اور اسے دوبارہ استعمال کرنے کی اجازت نہیں ہے';
$string['errorpasswordupdate'] = 'پاس ورڈ اپ ڈیٹ کرنے میں خرابی، پاس ورڈ تبدیل نہیں ہوا';
$string['eventuserloggedin'] = 'صارف نے لاگ ان کیا ہے';
$string['eventuserloggedinas'] = 'صارف دوسرے صارف کے طور پر لاگ ان ہوا';
$string['eventuserloginfailed'] = 'صارف لاگ ان ناکام ہو گیا';
$string['forcechangepassword'] = 'پاس ورڈ تبدیل کرنے پر مجبور کریں';
$string['forcechangepassword_help'] = 'Moodle میں اپنے اگلے لاگ ان پر صارفین کو پاس ورڈ تبدیل کرنے پر مجبور کریں۔';
$string['forcechangepasswordfirst_help'] = 'صارفین کو موڈل میں اپنے پہلے لاگ ان پر پاس ورڈ تبدیل کرنے پر مجبور کریں۔';
$string['forgottenpassword'] = 'اگر آپ یہاں URL درج کرتے ہیں، تو اسے اس سائٹ کے لیے کھوئے ہوئے پاس ورڈ کی بازیابی کے صفحہ کے طور پر استعمال کیا جائے گا۔ یہ ان سائٹس کے لیے ہے جہاں پاس ورڈز کو مکمل طور پر Moodle سے باہر ہینڈل کیا جاتا ہے۔ پہلے سے طے شدہ پاس ورڈ کی بازیابی کو استعمال کرنے کے لیے اسے خالی چھوڑ دیں۔';
$string['forgottenpasswordurl'] = 'بھولا ہوا پاس ورڈ URL';
$string['getrecaptchaapi'] = 'reCAPTCHA استعمال کرنے کے لیے آپ کو <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a> سے ایک API کلید حاصل کرنی ہوگی۔';
$string['guestloginbutton'] = 'مہمان کے لیے لاگ ان بٹن';
$string['incorrectpleasetryagain'] = 'درست نا ہے۔ براہ مہربانی دوبارہ کوشش کریں';
$string['infilefield'] = 'فائل میں فیلڈ درکار ہے';
$string['informminpassworddigits'] = 'کم از کم {$a} ہندسے';
$string['informminpasswordlength'] = 'کم از کم {$a} حروف';
$string['informminpasswordlower'] = 'کم از کم {$a} چھوٹے حروف';
$string['informminpasswordnonalphanum'] = 'کم از کم {$a} خصوصی حروف جیسے *، -، یا #';
$string['informminpasswordreuselimit'] = 'پاس ورڈز کو {$a} تبدیلیوں کے بعد دوبارہ استعمال کیا جا سکتا ہے';
$string['informminpasswordupper'] = 'کم از کم {$a} بڑے حروف';
$string['informpasswordpolicy'] = 'پاس ورڈ میں {$a} ہونا ضروری ہے';
$string['instructions'] = 'ہدایات';
$string['internal'] = 'اندرونی';
$string['limitconcurrentlogins'] = 'متوازی لاگ ان محدود کریں';
$string['limitconcurrentlogins_desc'] = 'اگر فعال کیا جاتا ہے تو ہر صارف کے لیے متوازی براؤزر لاگ ان کی تعداد محدود ہے۔ سب سے پرانا سیشن حد تک پہنچنے کے بعد ختم کر دیا جاتا ہے، براہ کرم نوٹ کریں کہ صارفین تمام غیر محفوظ شدہ کام کھو سکتے ہیں۔ یہ ترتیب سنگل سائن آن (SSO) تصدیقی پلگ ان کے ساتھ مطابقت نہیں رکھتی ہے۔';
$string['locked'] = 'مقفل';
$string['md5'] = 'MD5 ہیش';
$string['nopasswordchange'] = 'پاس ورڈ تبدیل نہیں کیا جا سکتا';
$string['nopasswordchangeforced'] = 'آپ اپنا پاس ورڈ تبدیل کیے بغیر آگے نہیں بڑھ سکتے، تاہم اسے تبدیل کرنے کے لیے کوئی صفحہ دستیاب نہیں ہے۔ براہ کرم اپنے موڈل ایڈمنسٹریٹر سے رابطہ کریں۔';
$string['noprofileedit'] = 'پروفائل میں ترمیم نہیں کی جا سکتی';
$string['ntlmsso_attempting'] = 'NTLM کے ذریعے سنگل سائن آن کرنے کی کوشش کر رہا ہے...';
$string['ntlmsso_failed'] = 'خودکار لاگ ان ناکام ہوگیا، عام لاگ ان صفحہ آزمائیں...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO غیر فعال ہے۔';
$string['passwordhandling'] = 'پاس ورڈ فیلڈ ہینڈلنگ';
$string['plaintext'] = 'سادہ متن';
$string['pluginnotenabled'] = 'تصدیقی پلگ ان \'{$a}\' فعال نہیں ہے۔';
$string['pluginnotinstalled'] = 'تصدیقی پلگ ان \'{$a}\' انسٹال نہیں ہے۔';
$string['potentialidps'] = 'اپنا اکاؤنٹ استعمال کرتے ہوئے لاگ ان کریں:';
$string['privacy:metadata:userpref:createpassword'] = 'اشارہ کرتا ہے کہ صارف کے لیے پاس ورڈ تیار کیا جانا چاہیے';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'اس بات کی نشاندہی کرتا ہے کہ آیا صارف کو لاگ ان ہونے پر اپنا پاس ورڈ تبدیل کرنا چاہیے';
$string['privacy:metadata:userpref:loginfailedcount'] = 'صارف لاگ ان کرنے میں ناکام ہونے کی تعداد';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'صارف کے آخری کامیاب لاگ ان کے بعد سے لاگ ان ہونے میں ناکام ہونے کی تعداد';
$string['privacy:metadata:userpref:loginfailedlast'] = 'وہ تاریخ جب لاگ ان کی آخری ناکام کوشش ریکارڈ کی گئی تھی';
$string['privacy:metadata:userpref:loginlockout'] = 'آیا صارف کا اکاؤنٹ لاگ ان کرنے کی ناکام کوششوں کی وجہ سے لاک ہے، اور وہ تاریخ جب اکاؤنٹ لاک کیا گیا تھا';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'اشارہ کرتا ہے کہ صارف کا اکاؤنٹ کبھی بھی لاک آؤٹ کے تابع نہیں ہونا چاہیے';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'لاک ہونے پر، وہ راز جو صارف کو اپنے اکاؤنٹ کو غیر مقفل کرنے کے لیے استعمال کرنا چاہیے';
$string['recaptcha_help'] = 'کیپچا خودکار پروگراموں کے غلط استعمال کو روکنے کے لیے ہے۔ اس بات کی تصدیق کرنے کے لیے ہدایات پر عمل کریں کہ آپ ایک شخص ہیں۔ یہ چیک کرنے کے لیے ایک باکس ہو سکتا ہے، ایک تصویر میں پیش کیے گئے حروف جو آپ کو داخل کرنا ہوں گے یا تصویروں کا ایک سیٹ ہو سکتا ہے جس میں سے منتخب کیا جائے۔ اگر آپ کو یقین نہیں ہے کہ تصاویر کیا ہیں، تو آپ دوسرا کیپچا یا آڈیو کیپچا حاصل کرنے کی کوشش کر سکتے ہیں۔';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'سیکیورٹی سوال';
$string['selfregistration'] = 'خود رجسٹریشن';
$string['selfregistration_help'] = 'اگر تصدیقی پلگ ان، جیسا کہ ای میل پر مبنی خود رجسٹریشن، کو منتخب کیا جاتا ہے، تو یہ ممکنہ صارفین کو خود کو رجسٹر کرنے اور اکاؤنٹس بنانے کے قابل بناتا ہے۔ اس کے نتیجے میں اسپام کے لیے فورم پوسٹس، بلاگ اندراجات وغیرہ کو استعمال کرنے کے لیے اسپامرز کے اکاؤنٹس بنانے کا امکان ہوتا ہے۔ اس خطرے سے بچنے کے لیے، خود رجسٹریشن کو <em>اجازت یافتہ ای میل ڈومینز</em> کی ترتیب کے ذریعے غیر فعال یا محدود کیا جانا چاہیے۔';
$string['settingmigrationmismatch'] = 'پلگ ان سیٹنگ کے ناموں کو درست کرتے وقت اقدار کی مماثلت کا پتہ چلا! توثیقی پلگ ان \'{$a->plugin}\' کی ترتیب \'{$a->setting}\' کو میراثی نام کے تحت \'{$a->legacy}\' اور \'{$a->current}\' پر ترتیب دیا گیا تھا۔ موجودہ نام کے تحت. مؤخر الذکر قدر کو درست کے طور پر سیٹ کیا گیا ہے لیکن آپ کو چیک کر کے تصدیق کرنی چاہیے کہ یہ متوقع ہے۔';
$string['sha1'] = 'SHA-1 ہیش';
$string['showguestlogin'] = 'آپ لاگ ان پیج پر مہمان لاگ ان بٹن کو چھپا یا دکھا سکتے ہیں۔';
$string['stdchangepassword'] = 'پاس ورڈ تبدیل کرنے کے لیے معیاری صفحہ استعمال کریں';
$string['stdchangepassword_expl'] = 'اگر بیرونی تصدیقی نظام موڈل کے ذریعے پاس ورڈ تبدیل کرنے کی اجازت دیتا ہے تو اسے ہاں میں تبدیل کریں۔ یہ ترتیب \'پاس ورڈ URL تبدیل کریں\' کو اوور رائیڈ کرتی ہے۔';
$string['stdchangepassword_explldap'] = 'نوٹ: یہ تجویز کیا جاتا ہے کہ اگر LDAP سرور ریموٹ ہے تو آپ LDAP کو SSL انکرپٹڈ ٹنل (ldaps://) پر استعمال کریں۔';
$string['suspended'] = 'معطل اکاؤنٹ';
$string['suspended_help'] = 'معطل شدہ صارف اکاؤنٹس لاگ ان یا ویب سروسز کا استعمال نہیں کر سکتے ہیں، اور کوئی بھی باہر جانے والے پیغامات کو رد کر دیا جاتا ہے۔';
$string['testsettings'] = 'ٹیسٹ کی ترتیبات';
$string['testsettingsheading'] = 'جانچ کی تصدیق کی ترتیبات - {$a}';
$string['unlocked'] = 'کھلا';
$string['unlockedifempty'] = 'اگر خالی ہو تو کھلا ہے';
$string['update_never'] = 'کبھی نہیں';
$string['update_oncreate'] = 'تخلیق کے وقت';
$string['update_onlogin'] = 'ہر لاگ ان کے وقت';
$string['update_onupdate'] = 'اپ ڈیٹ پر';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() منتخب صارف قسم کی حمایت نہیں کرتا: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() منتخب یوزر ٹائپ کو سپورٹ نہیں کرتا (.. ابھی تک)';
$string['username'] = 'صارف نام';
$string['username_help'] = 'براہ کرم آگاہ رہیں کہ کچھ تصدیقی پلگ ان آپ کو صارف نام تبدیل کرنے کی اجازت نہیں دیں گے۔';
