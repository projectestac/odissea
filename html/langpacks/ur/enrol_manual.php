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
 * Strings for component 'enrol_manual', language 'ur', version '4.1'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'اعلی درجے کی';
$string['alterstatus'] = 'حیثیت بدل دیں';
$string['altertimeend'] = 'اختتامی وقت کو تبدیل کریں';
$string['altertimestart'] = 'آغاز کا وقت تبدیل کریں';
$string['assignrole'] = 'کردار تفویض کریں';
$string['assignroles'] = 'کردار تفویض کریں';
$string['browsecohorts'] = 'کوہورٹس کو براؤز کریں';
$string['browseusers'] = 'صارفین کو براؤز کریں';
$string['confirmbulkdeleteenrolment'] = 'کیا آپ واقعی ان صارف اندراجات کو حذف کرنا چاہتے ہیں؟';
$string['defaultperiod'] = 'پہلے سے طے شدہ اندراج کی مدت';
$string['defaultperiod_desc'] = 'وقت کی طے شدہ لمبائی جب اندراج درست ہے۔ اگر صفر پر سیٹ کیا جاتا ہے، تو اندراج کا دورانیہ بطور ڈیفالٹ لامحدود ہوگا۔';
$string['defaultperiod_help'] = 'اندراج کے درست ہونے کے وقت کی طے شدہ لمبائی، صارف کے اندراج کے لمحے سے شروع ہوتی ہے۔ غیر فعال ہونے پر، اندراج کا دورانیہ بطور ڈیفالٹ لامحدود ہوگا۔';
$string['defaultstart'] = 'پہلے سے طے شدہ اندراج شروع';
$string['deleteselectedusers'] = 'منتخب صارف کے اندراجات کو حذف کریں';
$string['editselectedusers'] = 'منتخب صارف کے اندراج میں ترمیم کریں';
$string['enrolledincourserole'] = '"{$a->course}" میں بطور "{$a->role}" داخلہ لیا';
$string['enrolusers'] = 'صارفین کو اندراج کریں';
$string['enroluserscohorts'] = 'منتخب صارفین اور ساتھیوں کا اندراج کریں';
$string['expiredaction'] = 'اندراج کی میعاد ختم ہونے کی کارروائی';
$string['expiredaction_help'] = 'صارف کے اندراج کی میعاد ختم ہونے پر انجام دینے کے لیے کارروائی کا انتخاب کریں۔ براہ کرم نوٹ کریں کہ کورس کے اندراج کے دوران کچھ صارف ڈیٹا اور سیٹنگز کو کورس سے صاف کر دیا جاتا ہے۔';
$string['expirymessageenrolledbody'] = 'محترم {$a->user}، یہ ایک اطلاع ہے کہ کورس \'{$a->course}\' میں آپ کے اندراج کی میعاد {$a->timeend} کو ختم ہونے والی ہے۔ اگر آپ کو مدد کی ضرورت ہو تو براہ کرم {$a->enroller} سے رابطہ کریں۔';
$string['expirymessageenrolledsubject'] = 'اندراج کی میعاد ختم ہونے کی اطلاع';
$string['expirymessageenrollerbody'] = 'کورس \'{$a->course}\' میں اندراج درج ذیل صارفین کے لیے اگلے {$a->threshold} کے اندر ختم ہو جائے گا: {$a->users} اپنے اندراج کو بڑھانے کے لیے، {$a->extendurl پر جائیں }';
$string['expirymessageenrollersubject'] = 'اندراج کی میعاد ختم ہونے کی اطلاع';
$string['manual:config'] = 'دستی اندراج کی مثالیں ترتیب دیں';
$string['manual:enrol'] = 'صارفین کو اندراج کریں';
$string['manual:manage'] = 'صارف کے اندراج کا نظم کریں';
$string['manual:unenrol'] = 'کورس سے صارفین کا اندراج ختم کریں';
$string['manual:unenrolself'] = 'کورس سے اپنا اندراج ختم کریں';
$string['manualpluginnotinstalled'] = '"دستی" پلگ ان ابھی تک انسٹال نہیں ہوا ہے۔';
$string['messageprovider:expiry_notification'] = 'دستی اندراج کی میعاد ختم ہونے کی اطلاعات';
$string['now'] = 'ابھی';
$string['pluginname'] = 'دستی اندراجات';
$string['pluginname_desc'] = 'مینوئل انرولمنٹ پلگ ان صارفین کو کورس ایڈمنسٹریشن سیٹنگز میں ایک لنک کے ذریعے دستی طور پر اندراج کرنے کی اجازت دیتا ہے، مناسب اجازتوں کے حامل صارف جیسے استاد۔ پلگ ان کو عام طور پر فعال کیا جانا چاہئے، کیونکہ کچھ دوسرے اندراج پلگ ان، جیسے خود اندراج، اس کی ضرورت ہوتی ہے۔';
$string['privacy:metadata'] = 'دستی اندراج کا پلگ ان کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔';
$string['selectcohorts'] = 'کوہورٹس منتخب کریں';
$string['selection'] = 'انتخاب';
$string['selectusers'] = 'صارفین کو منتخب کریں';
$string['sendexpirynotificationstask'] = 'دستی اندراج میعاد ختم ہونے کی اطلاع بھیجنے کا کام';
$string['status'] = 'دستی اندراج کو فعال کریں';
$string['status_desc'] = 'داخلی طور پر اندراج شدہ صارفین کو کورس تک رسائی کی اجازت دیں۔ اسے زیادہ تر معاملات میں فعال رکھا جانا چاہیے۔';
$string['status_help'] = 'یہ ترتیب اس بات کا تعین کرتی ہے کہ آیا یوزر کو دستی طور پر، کورس ایڈمنسٹریشن کی ترتیبات میں ایک لنک کے ذریعے، مناسب اجازتوں کے حامل صارف جیسے استاد کے ذریعے اندراج کیا جا سکتا ہے۔';
$string['statusdisabled'] = 'غیر فعال';
$string['statusenabled'] = 'فعال';
$string['syncenrolmentstask'] = 'دستی اندراج کے کام کو سنکرونائز کریں';
$string['unenrol'] = 'اندراج ختم کرنے والے صارف';
$string['unenrolselectedusers'] = 'منتخب صارفین کا اندراج ختم کریں';
$string['unenrolselfconfirm'] = 'کیا آپ واقعی "{$a}" کورس سے اپنا اندراج ختم کرنا چاہتے ہیں؟';
$string['unenroluser'] = 'کیا آپ واقعی کورس "{$a->course}" سے "{$a->user}" کا اندراج ختم کرنا چاہتے ہیں؟';
$string['unenrolusers'] = 'صارفین کا اندراج ختم کریں';
$string['wscannotenrol'] = 'پلگ ان مثال دستی طور پر کسی صارف کو کورس id = {$a->courseid} میں اندراج نہیں کرسکتی ہے';
$string['wsnoinstance'] = 'دستی اندراج پلگ ان مثال موجود نہیں ہے یا کورس کے لیے غیر فعال ہے (id = {$a->courseid})';
$string['wsusercannotassign'] = 'آپ کو اس کورس ({$a->courseid}) میں اس صارف ({$a->userid}) کو یہ کردار ({$a->roleid}) تفویض کرنے کی اجازت نہیں ہے۔';
