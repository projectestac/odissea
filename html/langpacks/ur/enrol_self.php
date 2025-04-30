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
 * Strings for component 'enrol_self', language 'ur', version '4.4'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'اندراج نااہل یا غیر فعال ہے';
$string['canntenrolearly'] = 'آپ ابھی اندراج نہیں کر سکتے۔ اندراج {$a} سے شروع ہوتا ہے۔';
$string['canntenrollate'] = 'آپ مزید اندراج نہیں کر سکتے، کیونکہ اندراج {$a} کو ختم ہو گیا ہے۔';
$string['cohortnonmemberinfo'] = 'صرف کوہورٹ \'{$a}\' کے اراکین ہی خود اندراج کر سکتے ہیں۔';
$string['cohortonly'] = 'صرف کوہورٹ ممبران';
$string['cohortonly_help'] = 'خود اندراج صرف ایک مخصوص گروہ کے اراکین تک محدود ہو سکتا ہے۔ نوٹ کریں کہ اس ترتیب کو تبدیل کرنے سے موجودہ اندراج پر کوئی اثر نہیں پڑتا ہے۔';
$string['confirmbulkdeleteenrolment'] = 'کیا آپ واقعی ان صارف اندراجات کو حذف کرنا چاہتے ہیں؟';
$string['customwelcomemessage'] = 'اپنی مرضی کے مطابق خوش آمدید پیغام';
$string['customwelcomemessage_help'] = 'ایک حسب ضرورت خوش آمدید پیغام کو سادہ متن یا موڈل-آٹو فارمیٹ کے طور پر شامل کیا جا سکتا ہے، بشمول HTML ٹیگز اور ملٹی لینگ ٹیگز۔ مندرجہ ذیل پلیس ہولڈرز کو پیغام میں شامل کیا جا سکتا ہے: * کورس کا نام {$a->coursename} * صارف کے پروفائل کا لنک {$a->profileurl} * صارف کا ای میل {$a->email} * صارف کا پورا نام {$a- >fullname}';
$string['defaultrole'] = 'پہلے سے طے شدہ رول تفویض';
$string['defaultrole_desc'] = 'وہ کردار منتخب کریں جو خود اندراج کے دوران صارفین کو تفویض کیا جائے';
$string['deleteselectedusers'] = 'منتخب صارف کے اندراجات کو حذف کریں';
$string['editselectedusers'] = 'منتخب صارف کے اندراج میں ترمیم کریں';
$string['enrolenddate'] = 'آخری تاریخ';
$string['enrolenddate_help'] = 'اگر فعال ہو تو، صارفین صرف اس تاریخ تک اپنا اندراج کر سکتے ہیں۔';
$string['enrolenddaterror'] = 'اندراج کی آخری تاریخ شروع ہونے کی تاریخ سے پہلے نہیں ہو سکتی';
$string['enrolme'] = 'میرا اندراج کرو';
$string['enrolperiod'] = 'اندراج کی مدت';
$string['enrolperiod_desc'] = 'وقت کی طے شدہ لمبائی جب اندراج درست ہے۔ اگر صفر پر سیٹ کیا جاتا ہے، تو اندراج کا دورانیہ بطور ڈیفالٹ لامحدود ہوگا۔';
$string['enrolperiod_help'] = 'اندراج کے درست ہونے کی مدت، صارف کے اندراج کے وقت سے شروع ہوتا ہے۔ غیر فعال ہونے کی صورت میں اندراج کا دورانیہ لامحدود ہوگا۔';
$string['enrolstartdate'] = 'شروع کرنے کی تاریخ';
$string['enrolstartdate_help'] = 'اگر فعال ہو تو، صارف صرف اس تاریخ سے اپنا اندراج کر سکتے ہیں۔';
$string['expiredaction'] = 'اندراج کی میعاد ختم ہونے کی کارروائی';
$string['expiredaction_help'] = 'صارف کے اندراج کی میعاد ختم ہونے پر انجام دینے کے لیے کارروائی کا انتخاب کریں۔ براہ کرم نوٹ کریں کہ کورس کے اندراج کے دوران کچھ صارف ڈیٹا اور سیٹنگز کو کورس سے صاف کر دیا جاتا ہے۔';
$string['expirymessageenrolledbody'] = 'محترم {$a->user}، یہ ایک اطلاع ہے کہ کورس \'{$a->course}\' میں آپ کے اندراج کی میعاد {$a->timeend} کو ختم ہونے والی ہے۔ اگر آپ کو مدد کی ضرورت ہو تو براہ کرم {$a->enroller} سے رابطہ کریں۔';
$string['expirymessageenrolledsubject'] = 'خود اندراج کی میعاد ختم ہونے کی اطلاع';
$string['expirymessageenrollerbody'] = 'کورس \'{$a->course}\' میں خود اندراج درج ذیل صارفین کے لیے اگلے {$a->threshold} کے اندر ختم ہو جائے گا: {$a->users} اپنے اندراج کو بڑھانے کے لیے، {$a-> پر جائیں۔ extendurl}';
$string['expirymessageenrollersubject'] = 'خود اندراج کی میعاد ختم ہونے کی اطلاع';
$string['expirynotifyall'] = 'استاد اور اندراج شدہ صارف';
$string['expirynotifyenroller'] = 'صرف استاد';
$string['groupkey'] = 'گروپ اندراج کی چابیاں استعمال کریں';
$string['groupkey_desc'] = 'گروپ انرولمنٹ کیز بطور ڈیفالٹ استعمال کریں۔';
$string['groupkey_help'] = 'کورس تک رسائی کو صرف ان لوگوں تک محدود کرنے کے علاوہ جو کلید کو جانتے ہیں، گروپ انرولمنٹ کیز کے استعمال کا مطلب ہے کہ جب صارفین کورس میں داخلہ لیتے ہیں تو خود بخود گروپوں میں شامل ہو جاتے ہیں۔ نوٹ: کورس کے لیے اندراج کی کلید خود اندراج کی ترتیبات کے ساتھ ساتھ گروپ کی ترتیبات میں گروپ اندراج کی کلیدوں میں بیان کی جانی چاہیے۔';
$string['keyholder'] = 'آپ کو یہ اندراج کلید یہاں سے موصول ہونی چاہیے تھی:';
$string['longtimenosee'] = 'اس کے بعد غیر فعال اندراج ختم کریں';
$string['longtimenosee_help'] = 'اگر صارفین نے طویل عرصے سے کسی کورس تک رسائی حاصل نہیں کی ہے، تو وہ خود بخود انرول ہو جاتے ہیں۔ یہ پیرامیٹر اس وقت کی حد کی وضاحت کرتا ہے۔';
$string['maxenrolled'] = 'زیادہ سے زیادہ اندراج شدہ صارفین';
$string['maxenrolled_help'] = 'صارفین کی زیادہ سے زیادہ تعداد بتاتا ہے جو خود اندراج کر سکتے ہیں۔ 0 کا مطلب ہے کوئی حد نہیں۔';
$string['maxenrolledreached'] = 'خود اندراج کی اجازت والے صارفین کی زیادہ سے زیادہ تعداد پہلے ہی پہنچ چکی ہے۔';
$string['messageprovider:expiry_notification'] = 'خود اندراج کی میعاد ختم ہونے کی اطلاعات';
$string['newenrols'] = 'نئے اندراج کی اجازت دیں';
$string['newenrols_desc'] = 'صارفین کو بطور ڈیفالٹ نئے کورسز میں خود داخلہ لینے کی اجازت دیں۔';
$string['newenrols_help'] = 'یہ ترتیب طے کرتی ہے کہ آیا کوئی صارف اس کورس میں داخلہ لے سکتا ہے۔';
$string['nopassword'] = 'اندراج کی کلید کی ضرورت نہیں ہے۔';
$string['password'] = 'اندراج کی کلید';
$string['password_help'] = 'اندراج کی کلید کورس تک رسائی کو صرف ان لوگوں تک محدود رکھنے کے قابل بناتی ہے جو کلید جانتے ہیں۔ اگر فیلڈ کو خالی چھوڑ دیا جائے تو کوئی بھی صارف کورس میں داخلہ لے سکتا ہے۔ اگر اندراج کی کلید بتائی گئی ہے، تو کورس میں داخلہ لینے کی کوشش کرنے والے کسی بھی صارف کو کلید فراہم کرنے کی ضرورت ہوگی۔ نوٹ کریں کہ ایک صارف کو صرف ایک بار اندراج کی کلید فراہم کرنے کی ضرورت ہوتی ہے، جب وہ کورس میں داخلہ لیتے ہیں۔';
$string['passwordinvalid'] = 'غلط اندراج کلید، براہ کرم دوبارہ کوشش کریں';
$string['passwordinvalidhint'] = 'اندراج کی وہ کلید غلط تھی، براہ کرم دوبارہ کوشش کریں<br /> (یہاں ایک اشارہ ہے - یہ \'{$a}\' سے شروع ہوتا ہے)';
$string['pluginname'] = 'خود اندراج';
$string['pluginname_desc'] = 'سیلف انرولمنٹ پلگ ان صارفین کو یہ انتخاب کرنے کی اجازت دیتا ہے کہ وہ کن کورسز میں حصہ لینا چاہتے ہیں۔ کورسز کو اندراج کی کلید سے محفوظ کیا جا سکتا ہے۔ اندرونی طور پر اندراج مینوئل انرولمنٹ پلگ ان کے ذریعے کیا جاتا ہے جسے اسی کورس میں فعال کرنا ہوتا ہے۔';
$string['privacy:metadata'] = 'سیلف انرولمنٹ پلگ ان کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔';
$string['requirepassword'] = 'اندراج کی کلید درکار ہے';
$string['requirepassword_desc'] = 'نئے کورسز میں اندراج کی کلید کا تقاضہ کریں اور موجودہ کورسز سے اندراج کی کلید کو ہٹانے سے روکیں۔';
$string['role'] = 'ڈیفالٹ تفویض کردہ کردار';
$string['self:config'] = 'خود اندراج کی مثالیں ترتیب دیں';
$string['self:enrolself'] = 'کورس میں خود داخلہ لیں';
$string['self:holdkey'] = 'خود اندراج کلید ہولڈر کے طور پر ظاہر ہوں';
$string['self:manage'] = 'اندراج شدہ صارفین کا نظم کریں';
$string['self:unenrol'] = 'کورس سے صارفین کا اندراج ختم کریں';
$string['self:unenrolself'] = 'کورس سے اپنا اندراج ختم کریں';
$string['sendcoursewelcomemessage'] = 'کورس کا خیرمقدم پیغام بھیجیں';
$string['sendcoursewelcomemessage_help'] = 'جب کوئی صارف خود کورس میں داخلہ لیتا ہے، تو اسے خوش آمدید کا پیغام ای میل بھیجا جا سکتا ہے۔ اگر کورس کے رابطہ سے بھیجا جاتا ہے (بطور ڈیفالٹ ٹیچر)، اور ایک سے زیادہ صارفین کا یہ کردار ہوتا ہے، تو ای میل پہلے صارف کی طرف سے بھیجا جاتا ہے جسے رول تفویض کیا جاتا ہے۔';
$string['sendexpirynotificationstask'] = 'خود اندراج میعاد ختم ہونے کی اطلاع بھیجنے کا کام';
$string['showhint'] = 'اشارہ دکھائیں';
$string['showhint_desc'] = 'مہمان رسائی کلید کا پہلا حرف دکھائیں۔';
$string['status'] = 'موجودہ اندراج کی اجازت دیں';
$string['status_desc'] = 'نئے کورسز میں خود اندراج کا طریقہ فعال کریں۔';
$string['status_help'] = 'اگر \'نئے اندراج کی اجازت دیں\' کے ساتھ فعال کیا جاتا ہے، تو صرف وہی صارفین جو پہلے خود اندراج کر چکے ہیں کورس تک رسائی حاصل کر سکتے ہیں۔ اگر غیر فعال ہو تو، خود اندراج کا یہ طریقہ مؤثر طریقے سے غیر فعال ہو جاتا ہے، کیونکہ تمام موجودہ خود اندراج معطل کر دیا جاتا ہے اور نئے صارفین خود اندراج نہیں کر سکتے۔';
$string['syncenrolmentstask'] = 'خود اندراج کے کام کو سنکرونائز کریں';
$string['unenrol'] = 'اندراج ختم کرنے والے صارف';
$string['unenrolselfconfirm'] = 'کیا آپ واقعی "{$a}" کورس سے اپنا اندراج ختم کرنا چاہتے ہیں؟';
$string['unenroluser'] = 'کیا آپ واقعی کورس "{$a->course}" سے "{$a->user}" کا اندراج ختم کرنا چاہتے ہیں؟';
$string['unenrolusers'] = 'صارفین کا اندراج ختم کریں';
$string['usepasswordpolicy'] = 'پاس ورڈ پالیسی استعمال کریں';
$string['usepasswordpolicy_desc'] = 'اندراج کی کلیدوں کے لیے معیاری پاس ورڈ پالیسی استعمال کریں۔';
$string['welcometocourse'] = '{$a} میں خوش آمدید';
$string['welcometocoursetext'] = '{$a->coursename} میں خوش آمدید! اگر آپ نے پہلے ہی ایسا نہیں کیا ہے، تو آپ کو اپنے پروفائل میں ترمیم کرنی چاہیے تاکہ ہم آپ کے بارے میں مزید جان سکیں: {$a->profileurl}';
