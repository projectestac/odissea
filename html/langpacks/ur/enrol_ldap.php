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
 * Strings for component 'enrol_ldap', language 'ur', version '4.4'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'کورس \'{$a->course_shortname}\' میں صارف \'{$a->user_username}\' کو رول \'{$a->role_shortname}\' تفویض کرنا (id {$a->course_id})';
$string['assignrolefailed'] = 'کورس \'{$a->course_shortname}\' (id {$a->course_id}) میں صارف \'{$a->user_username}\' کو رول \'{$a->role_shortname}\' تفویض کرنے میں ناکام';
$string['autocreate'] = '<p>کورسز خود بخود بنائے جا سکتے ہیں اگر کسی ایسے کورس کے اندراجات ہوں جو ابھی تک Moodle میں موجود نہیں ہے</p><p>اگر آپ خودکار کورس تخلیق استعمال کر رہے ہیں، تو یہ تجویز کی جاتی ہے کہ آپ درج ذیل صلاحیتوں کو ہٹا دیں: moodle/ کورس:changeidnumber، moodle/course:changeidnumber، moodle/course:changefullname اور moodle/course:changesummary، اوپر بیان کردہ چار کورس فیلڈز (ID نمبر، مختصر نام، پورا نام اور خلاصہ) میں ترمیم کو روکنے کے لیے متعلقہ کرداروں سے۔ >';
$string['autocreate_key'] = 'خودکار بنائیں';
$string['autocreation_settings'] = 'خودکار کورس تخلیق کی ترتیبات';
$string['autoupdate_settings'] = 'خودکار کورس اپ ڈیٹ کی ترتیبات';
$string['autoupdate_settings_desc'] = '<p>جب \'Synchronise LDAP انرولمنٹس\' کا طے شدہ کام چل رہا ہو تو اپ ڈیٹ کرنے کے لیے فیلڈز کو منتخب کریں۔</p><p>جب کم از کم ایک فیلڈ کو منتخب کیا جائے گا تو ایک اپ ڈیٹ ہو جائے گا۔</p>';
$string['bind_dn'] = 'اگر آپ صارفین کو تلاش کرنے کے لیے بائنڈ یوزر استعمال کرنا چاہتے ہیں، تو اسے یہاں بیان کریں۔ کچھ جیسے \'cn=ldapuser,ou=public,o=org\'';
$string['bind_dn_key'] = 'صارف امتیازی نام باندھیں';
$string['bind_pw'] = 'پابند صارف کے لیے پاس ورڈ';
$string['bind_pw_key'] = 'پاس ورڈ';
$string['bind_settings'] = 'پابندی کی ترتیبات';
$string['cannotcreatecourse'] = 'کورس نہیں بنایا جا سکتا: LDAP ریکارڈ سے مطلوبہ ڈیٹا غائب!';
$string['cannotupdatecourse'] = 'کورس کو اپ ڈیٹ نہیں کیا جا سکتا: LDAP ریکارڈ سے مطلوبہ ڈیٹا غائب! کورس کا آئی ڈی نمبر: \'{$a->idnumber}\'';
$string['cannotupdatecourse_duplicateshortname'] = 'کورس کو اپ ڈیٹ نہیں کیا جا سکتا: ڈپلیکیٹ مختصر نام۔ آئی ڈی نمبر \'{$a->idnumber}\' کے ساتھ کورس کو چھوڑنا۔۔۔';
$string['category'] = 'خود کار طریقے سے تیار کردہ کورسز کا زمرہ';
$string['category_key'] = 'زمره';
$string['contexts'] = 'LDAP سیاق و سباق';
$string['couldnotfinduser'] = 'صارف \'{$a}\' کو تلاش نہیں کر سکا، نظر انداز کر رہا ہے';
$string['course_fullname'] = 'اختیاری: مکمل نام حاصل کرنے کے لیے LDAP انتساب';
$string['course_fullname_key'] = 'پورا نام';
$string['course_fullname_updateonsync'] = 'مطابقت پذیری اسکرپٹ کے دوران پورا نام اپ ڈیٹ کریں';
$string['course_fullname_updateonsync_key'] = 'پورا نام اپ ڈیٹ کریں';
$string['course_idnumber'] = 'کورس آئی ڈی نمبر حاصل کرنے کے لیے LDAP انتساب۔ عام طور پر \'cn\' یا \'uid\'۔';
$string['course_idnumber_key'] = 'آئی ڈی نمبر';
$string['course_search_sub'] = 'ذیلی سیاق و سباق سے گروپ کی رکنیت تلاش کریں';
$string['course_search_sub_key'] = 'ذیلی سیاق و سباق تلاش کریں';
$string['course_settings'] = 'کورس کے اندراج کی ترتیبات';
$string['course_shortname'] = 'اختیاری: مختصر نام حاصل کرنے کے لیے LDAP وصف';
$string['course_shortname_key'] = 'مختصر نام';
$string['course_shortname_updateonsync'] = 'مطابقت پذیری اسکرپٹ کے دوران مختصر نام کو اپ ڈیٹ کریں';
$string['course_shortname_updateonsync_key'] = 'مختصر نام کو اپ ڈیٹ کریں';
$string['course_summary'] = 'اختیاری: خلاصہ حاصل کرنے کے لیے LDAP انتساب';
$string['course_summary_key'] = 'خلاصہ';
$string['course_summary_updateonsync'] = 'مطابقت پذیری اسکرپٹ کے دوران خلاصہ اپ ڈیٹ کریں';
$string['course_summary_updateonsync_key'] = 'خلاصہ اپ ڈیٹ کریں';
$string['coursenotexistskip'] = 'کورس \'{$a}\' موجود نہیں ہے اور خودکار تخلیق کو غیر فعال کر دیا گیا ہے، چھوڑنا';
$string['courseupdated'] = 'آئی ڈی نمبر \'{$a->idnumber}\' والا کورس کامیابی کے ساتھ اپ ڈیٹ ہو گیا تھا۔';
$string['courseupdateskipped'] = 'idnumber \'{$a->idnumber}\' کے ساتھ کورس کو اپ ڈیٹ کرنے کی ضرورت نہیں ہے۔ اچھالنا۔۔۔';
$string['createcourseextid'] = 'غیر موجود کورس \'{$a->courseextid}\' میں اندراج شدہ صارف بنائیں';
$string['createnotcourseextid'] = 'صارف کا اندراج غیر موجود کورس \'{$a->courseextid}\' میں ہوا';
$string['creatingcourse'] = 'کورس \'{$a}\' بنانا۔۔۔';
$string['duplicateshortname'] = 'کورس کی تخلیق ناکام ہو گئی۔ ڈپلیکیٹ مختصر نام۔ آئی ڈی نمبر \'{$a->idnumber}\' کے ساتھ کورس کو چھوڑنا۔۔۔';
$string['editlock'] = 'لاک ویلیو';
$string['emptyenrolment'] = 'کورس \'{$a->course_shortname}\' میں رول \'{$a->role_shortname}\' کے لیے خالی اندراج';
$string['enrolname'] = 'ایل ڈی اے پی';
$string['enroluser'] = 'صارف \'{$a->user_username}\' کو کورس \'{$a->course_shortname}\' میں اندراج کریں (id {$a->course_id})';
$string['enroluserenable'] = 'کورس \'{$a->course_shortname}\' میں صارف \'{$a->user_username}\' کے لیے فعال اندراج (id {$a->course_id})';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group() منتخب صارف کی قسم کو سپورٹ نہیں کرتا: {$a}';
$string['extcourseidinvalid'] = 'کورس کی بیرونی شناخت غلط ہے!';
$string['extremovedsuspend'] = 'کورس \'{$a->course_shortname}\' (id {$a->course_id}) میں صارف \'{$a->user_username}\' کے لیے غیر فعال اندراج';
$string['extremovedsuspendnoroles'] = 'غیر فعال اندراج اور صارف کے لئے ہٹائے گئے کردار \'{$a->user_username}\' میں \'{$a->course_shortname}\' (شناختی نام {$a->course_id})';
$string['extremovedunenrol'] = 'کورس \'{$a->course_shortname}\' سے صارف \'{$a->user_username}\' کا اندراج ختم کریں (id {$a->course_id})';
$string['failed'] = 'ناکام!';
$string['general_options'] = 'عام اختیارات';
$string['group_memberofattribute'] = 'اس وصف کا نام جو یہ بتاتا ہے کہ دیا گیا صارف یا گروپ کن گروپوں سے تعلق رکھتا ہے (مثال کے طور پر ممبر آف، گروپ ممبرشپ، وغیرہ)';
$string['group_memberofattribute_key'] = '\'ممبر کا\' وصف';
$string['host_url'] = 'LDAP ہوسٹ کو URL کی شکل میں متعین کریں جیسے \'ldap://ldap.myorg.com/\' یا \'ldaps://ldap.myorg.com/\'';
$string['host_url_key'] = 'میزبان یو آر ایل';
$string['idnumber_attribute'] = 'اگر گروپ کی رکنیت ممتاز ناموں پر مشتمل ہے، تو وہی وصف بیان کریں جو آپ نے LDAP تصدیق کی ترتیبات میں صارف \'ID نمبر\' میپنگ کے لیے استعمال کیا ہے۔';
$string['idnumber_attribute_key'] = 'آئی ڈی نمبر وصف';
$string['ldap:manage'] = 'LDAP اندراج کے واقعات کا نظم کریں';
$string['ldap_encoding'] = 'LDAP سرور کے ذریعہ استعمال کردہ انکوڈنگ کی وضاحت کریں۔ غالباً utf-8، MS AD v2 ڈیفالٹ پلیٹ فارم انکوڈنگ کا استعمال کرتا ہے جیسے cp1252, cp1250، وغیرہ۔';
$string['ldap_encoding_key'] = 'LDAP انکوڈنگ';
$string['memberattribute'] = 'LDAP ممبر کی خصوصیت';
$string['memberattribute_isdn'] = 'اگر گروپ کی رکنیت ممتاز ناموں پر مشتمل ہے، تو آپ کو انہیں یہاں بتانا ہوگا۔ اگر ایسا ہے تو، آپ کو اس سیکشن میں باقی ترتیبات کو بھی ترتیب دینے کی ضرورت ہے۔';
$string['memberattribute_isdn_key'] = 'ممبر وصف dn کا استعمال کرتا ہے';
$string['nested_groups'] = 'کیا آپ اندراج کے لیے نیسٹڈ گروپس (گروپوں کے گروپ) استعمال کرنا چاہتے ہیں؟';
$string['nested_groups_key'] = 'نیسٹڈ گروپس';
$string['nested_groups_settings'] = 'نیسٹڈ گروپس کی ترتیبات';
$string['nosuchrole'] = 'ایسا کوئی کردار نہیں: \'{$a}\'';
$string['objectclass'] = 'آبجیکٹ کلاس کورسز تلاش کرنے کے لیے استعمال ہوتی ہے۔ عام طور پر \'گروپ\' یا \'پوزکس گروپ\'';
$string['objectclass_key'] = 'آبجیکٹ کلاس';
$string['ok'] = 'ٹھیک ہے!';
$string['opt_deref'] = 'اگر گروپ کی رکنیت ممتاز ناموں پر مشتمل ہے، تو وضاحت کریں کہ تلاش کے دوران عرفی ناموں کو کیسے ہینڈل کیا جاتا ہے۔ درج ذیل میں سے ایک قدر منتخب کریں: \'نہیں\' (LDAP_DEREF_NEVER) یا \'ہاں\' (LDAP_DEREF_ALWAYS)۔';
$string['opt_deref_key'] = 'ڈیریفرنس عرفی نام';
$string['phpldap_noextension'] = 'ایسا لگتا ہے کہ PHP LDAP ماڈیول موجود نہیں ہے۔ اگر آپ اس اندراج پلگ ان کو استعمال کرنا چاہتے ہیں تو براہ کرم یقینی بنائیں کہ یہ انسٹال اور فعال ہے۔';
$string['pluginname'] = 'LDAP اندراجات';
$string['pluginname_desc'] = '<p>آپ اپنے اندراج کو کنٹرول کرنے کے لیے LDAP سرور استعمال کر سکتے ہیں۔ یہ فرض کیا جاتا ہے کہ آپ کے LDAP درخت میں ایسے گروپ شامل ہیں جو کورسز کا نقشہ بناتے ہیں، اور یہ کہ ان گروپس/کورسز میں سے ہر ایک میں طلباء کو نقشہ بنانے کے لیے رکنیت کے اندراجات ہوں گے۔ ہر ایک گروپ کے ساتھ متعدد ممبرشپ فیلڈز (<em>ممبر</em> یا <em>memberUid</em>) جس میں صارف کی منفرد شناخت ہوتی ہے۔</p><p>LDAP اندراج کو استعمال کرنے کے لیے، آپ کے صارفین <strong> ایک درست idnumber فیلڈ رکھنے کے لیے >لازمی ہے</strong>۔ LDAP گروپس کے پاس ممبر فیلڈز میں وہ شناختی نمبر ہونا ضروری ہے تاکہ کسی صارف کو کورس میں داخلہ لیا جائے۔ یہ عام طور پر اچھی طرح سے کام کرے گا اگر آپ پہلے سے ہی LDAP تصدیق استعمال کر رہے ہیں۔ <em>enrol/ldap/cli/sync.php</em> میں دیکھیں۔</p><p>یہ پلگ ان LDAP میں نئے گروپس کے ظاہر ہونے پر خود بخود نئے کورسز بنانے کے لیے بھی سیٹ کیا جا سکتا ہے۔</p>';
$string['pluginnotenabled'] = 'پلگ ان فعال نہیں ہے!';
$string['privacy:metadata'] = 'LDAP انرولمنٹ پلگ ان کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔';
$string['role_mapping'] = '<p>ہر کردار کے لیے، آپ کو تمام LDAP سیاق و سباق بتانے کی ضرورت ہے جہاں کورسز کی نمائندگی کرنے والے گروپس واقع ہیں۔ مختلف سیاق و سباق کو سیمی کالون (;) کے ساتھ الگ کریں. یہ عام طور پر \'ممبر\' یا \'memberUid\' ہوتا ہے۔</p>';
$string['role_mapping_attribute'] = '{$a} کے لیے LDAP ممبر کا وصف';
$string['role_mapping_context'] = 'LDAP سیاق و سباق برائے {$a}';
$string['role_mapping_key'] = 'LDAP سے نقشہ کے کردار';
$string['roles'] = 'رول میپنگ';
$string['server_settings'] = 'LDAP سرور کی ترتیبات';
$string['synccourserole'] = '== رول \'{$a->role_shortname}\' کے لیے کورس \'{$a->idnumber}\' کی ہم آہنگی';
$string['syncenrolmentstask'] = 'LDAP انرولمنٹ ٹاسک کو سنکرونائز کریں';
$string['template'] = 'اختیاری: خود کار طریقے سے تیار کردہ کورسز ٹیمپلیٹ کورس سے اپنی سیٹنگز کاپی کر سکتے ہیں۔';
$string['template_key'] = 'ٹیمپلیٹ';
$string['unassignrole'] = 'کورس \'{$a->course_shortname}\' سے صارف \'{$a->user_username}\' کو رول \'{$a->role_shortname}\' کو غیر تفویض کرنا (id {$a->course_id})';
$string['unassignrolefailed'] = 'کورس \'{$a->course_shortname}\' (id {$a->course_id}) سے \'{$a->role_shortname}\' کا کردار \'{$a->user_username}\' کو صارف کو تفویض کرنے میں ناکام';
$string['unassignroleid'] = 'رول id \'{$a->role_id}\' کو صارف id \'{$a->user_id}\' سے غیر تفویض کرنا';
$string['updatelocal'] = 'مقامی ڈیٹا کو اپ ڈیٹ کریں';
$string['user_attribute'] = 'اگر گروپ کی رکنیت ممتاز ناموں پر مشتمل ہے تو، نام/صارفین کے لیے تلاش کرنے کے لیے استعمال ہونے والی خصوصیت کی وضاحت کریں۔ اگر آپ LDAP توثیق کا استعمال کر رہے ہیں، تو یہ قدر LDAP توثیق پلگ ان میں \'ID نمبر\' میپنگ میں بیان کردہ وصف سے مماثل ہونی چاہیے۔';
$string['user_attribute_key'] = 'آئی ڈی نمبر کا وصف';
$string['user_contexts'] = 'اگر گروپ کی رکنیت ممتاز ناموں پر مشتمل ہے تو سیاق و سباق کی فہرست بتائیں جہاں صارفین موجود ہیں۔ سیمی کالون (;) کے ساتھ مختلف سیاق و سباق کو الگ کریں۔ مثال کے طور پر: \'ou=users,o=org; ou=other,o=org\'۔';
$string['user_contexts_key'] = 'سیاق و سباق';
$string['user_search_sub'] = 'اگر گروپ کی رکنیت ممتاز ناموں پر مشتمل ہے، تو وضاحت کریں کہ کیا صارفین کی تلاش ذیلی سیاق و سباق میں بھی کی جاتی ہے۔';
$string['user_search_sub_key'] = 'ذیلی سیاق و سباق تلاش کریں';
$string['user_settings'] = 'صارف کی تلاش کی ترتیبات';
$string['user_type'] = 'اگر گروپ کی رکنیت ممتاز ناموں پر مشتمل ہے، تو واضح کریں کہ صارفین کو LDAP میں کیسے ذخیرہ کیا جاتا ہے۔';
$string['user_type_key'] = 'صارف کی قسم';
$string['version'] = 'LDAP پروٹوکول کا وہ ورژن جو آپ کا سرور استعمال کر رہا ہے';
$string['version_key'] = 'ورژن';
