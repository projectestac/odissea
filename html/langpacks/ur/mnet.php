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
 * Strings for component 'mnet', language 'ur', version '4.4'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (خود دستخط شدہ)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (دستخط شدہ)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP غیر خفیہ کردہ';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (خود دستخط شدہ)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (دستخط شدہ)';
$string['aboutyourhost'] = 'آپ کے سرور کے بارے میں';
$string['accesslevel'] = 'رسائی کی سطح';
$string['addhost'] = 'میزبان شامل کریں';
$string['addnewhost'] = 'ایک نیا میزبان شامل کریں';
$string['addtoacl'] = 'رسائی کنٹرول میں شامل کریں';
$string['allhosts'] = 'تمام میزبان';
$string['allhosts_no_options'] = 'متعدد میزبانوں کو دیکھتے وقت کوئی آپشن دستیاب نہیں ہوتا ہے';
$string['allow'] = 'اجازت دیں';
$string['applicationtype'] = 'درخواست کی قسم';
$string['authfail_nosessionexists'] = 'اجازت دینے میں ناکام: mnet سیشن موجود نہیں ہے۔';
$string['authfail_sessiontimedout'] = 'اجازت دینے میں ناکام: mnet سیشن کا وقت ختم ہو گیا ہے۔';
$string['authfail_usermismatch'] = 'اجازت دینے میں ناکام: صارف مماثل نہیں ہے۔';
$string['authmnetdisabled'] = 'MNet تصدیقی پلگ ان <strong>غیر فعال</strong> ہے۔';
$string['badcert'] = 'یہ ایک درست سند نہیں ہے۔';
$string['certdetails'] = 'سرٹیفکیٹ کی تفصیلات';
$string['configmnet'] = 'MNet اس سرور کے دوسرے سرورز یا خدمات کے ساتھ رابطے کی اجازت دیتا ہے۔';
$string['couldnotgetcert'] = '<br />{$a} پر کوئی سرٹیفکیٹ نہیں ملا۔ <br />میزبان نیچے یا غلط کنفیگر ہو سکتا ہے۔';
$string['couldnotmatchcert'] = 'یہ ویب سرور کے ذریعہ شائع کردہ سرٹیفکیٹ سے میل نہیں کھاتا ہے۔';
$string['courses'] = 'کورسز';
$string['courseson'] = 'کورسز پر';
$string['current_transport'] = 'موجودہ ٹرانسپورٹ';
$string['currentkey'] = 'موجودہ عوامی کلید';
$string['databaseerror'] = 'ڈیٹا بیس میں تفصیلات نہیں لکھ سکے۔';
$string['deleteaserver'] = 'سرور کو حذف کرنا';
$string['deletedhostinfo'] = 'اس میزبان کو حذف کر دیا گیا ہے۔ اگر آپ اسے ختم کرنا چاہتے ہیں تو حذف شدہ اسٹیٹس کو واپس \'نہیں\' میں تبدیل کریں۔';
$string['deletedhosts'] = 'حذف شدہ میزبان: {$a}';
$string['deletehost'] = 'میزبان کو حذف کریں';
$string['deletekeycheck'] = 'کیا آپ کو یقین ہے کہ آپ اس کلید کو حذف کرنا چاہتے ہیں؟';
$string['deleteoutoftime'] = 'اس کلید کو حذف کرنے کے لیے آپ کی 60 سیکنڈ کی ونڈو کی میعاد ختم ہو گئی ہے۔ براہ کرم دوبارہ شروع کریں۔';
$string['deleteuserrecord'] = 'SSO ACL: صارف \'{$a->user}\' کا ریکارڈ {$a->host} سے حذف کریں۔';
$string['deletewrongkeyvalue'] = 'ایک خرابی آگئی ہے. اگر آپ اپنے سرور کی SSL کلید کو حذف کرنے کی کوشش نہیں کر رہے تھے، تو یہ ممکن ہے کہ آپ بدنیتی پر مبنی حملے کا نشانہ بنے۔ کوئی کارروائی نہیں کی گئی۔';
$string['deny'] = 'انکار کرنا';
$string['description'] = 'تفصیل';
$string['duplicate_usernames'] = 'ہم آپ کے صارف ٹیبل میں کالم "mnethostid" اور "username" پر ایک انڈیکس بنانے میں ناکام رہے۔<br />یہ اس وقت ہوسکتا ہے جب آپ کے پاس <a href="{$a}" target="_blank">ڈپلیکیٹ صارف نام ہوں آپ کا یوزر ٹیبل</a>۔<br />آپ کا اپ گریڈ اب بھی کامیابی سے مکمل ہونا چاہیے۔ اوپر دیے گئے لنک پر کلک کریں، اور اس مسئلے کو حل کرنے کی ہدایات ایک نئی ونڈو میں ظاہر ہوں گی۔ اپ گریڈ کے اختتام پر آپ اس میں شرکت کر سکتے ہیں۔<br />';
$string['enabled_for_all'] = '(یہ سروس تمام میزبانوں کے لیے فعال کر دی گئی ہے)۔';
$string['enterausername'] = 'براہ کرم ایک صارف نام، یا کوما سے الگ کردہ صارف ناموں کی فہرست درج کریں۔';
$string['error7020'] = 'یہ خرابی عام طور پر اس وقت ہوتی ہے جب ریموٹ سائٹ نے آپ کے لیے غلط wwwroot کے ساتھ ریکارڈ بنایا ہو، مثال کے طور پر، https://www.yoursite.com کے بجائے https://yoursite.com۔ براہ کرم اپنے wwwroot کے ساتھ ریموٹ سائٹ کے منتظم سے رابطہ کریں (جیسا کہ config.php میں بیان کیا گیا ہے) اور ان سے اپنے میزبان کے ریکارڈ کو اپ ڈیٹ کرنے کو کہیں۔';
$string['error7022'] = 'آپ نے ریموٹ سائٹ پر جو پیغام بھیجا ہے وہ ٹھیک طرح سے مرموز کیا گیا تھا، لیکن اس پر دستخط نہیں کیے گئے تھے۔ یہ بہت غیر متوقع ہے؛ اگر ایسا ہوتا ہے تو آپ کو شاید ایک بگ فائل کرنا چاہئے (سوال میں ایپلیکیشن ورژن کے بارے میں زیادہ سے زیادہ معلومات دینا وغیرہ)۔';
$string['error7023'] = 'ریموٹ سائٹ نے آپ کے پیغام کو ان تمام کلیدوں کے ساتھ ڈکرپٹ کرنے کی کوشش کی ہے جو اس کے پاس آپ کی سائٹ کے ریکارڈ میں موجود ہیں۔ وہ سب ناکام ہو چکے ہیں۔ آپ ریموٹ سائٹ کے ساتھ دستی طور پر دوبارہ کلید کرکے اس مسئلے کو حل کرنے کے قابل ہوسکتے ہیں۔ ایسا ہونے کا امکان نہیں ہے جب تک کہ آپ کچھ مہینوں سے ریموٹ سائٹ کے ساتھ مواصلت سے باہر نہ ہوں۔';
$string['error7024'] = 'آپ ریموٹ سائٹ پر ایک غیر مرموز پیغام بھیجتے ہیں، لیکن ریموٹ سائٹ آپ کی سائٹ سے غیر خفیہ کردہ مواصلات کو قبول نہیں کرتی ہے۔ یہ بہت غیر متوقع ہے؛ اگر ایسا ہوتا ہے تو آپ کو شاید ایک بگ فائل کرنا چاہئے (سوال میں ایپلیکیشن ورژن کے بارے میں زیادہ سے زیادہ معلومات دینا وغیرہ)۔';
$string['error7026'] = 'جس کلید کے ساتھ آپ کے پیغام پر دستخط کیے گئے تھے وہ اس کلید سے مختلف ہے جو ریموٹ ہوسٹ کے پاس آپ کے سرور کی فائل میں موجود ہے۔ مزید، ریموٹ ہوسٹ نے آپ کی موجودہ کلید لانے کی کوشش کی اور ایسا کرنے میں ناکام رہا۔ براہ کرم ریموٹ میزبان کے ساتھ دستی طور پر دوبارہ کلید کریں اور دوبارہ کوشش کریں۔';
$string['error709'] = 'ریموٹ سائٹ آپ سے SSL کلید حاصل کرنے میں ناکام رہی۔';
$string['eventaccesscontrolcreated'] = 'رسائی کنٹرول بنایا گیا';
$string['eventaccesscontrolupdated'] = 'رسائی کنٹرول کو اپ ڈیٹ کر دیا گیا';
$string['expired'] = 'اس کلید کی میعاد ختم ہو گئی';
$string['expires'] = 'جائز جب تک';
$string['expireyourkey'] = 'اس کلید کو حذف کریں';
$string['expireyourkeyexplain'] = 'Moodle ہر 28 دن بعد آپ کی کلیدوں کو خود بخود گھماتا ہے (بذریعہ ڈیفالٹ) لیکن آپ کے پاس یہ اختیار ہے کہ <em>دستی طور پر</em> اس کلید کو کسی بھی وقت ختم کر دیں۔ یہ تبھی مفید ہو گا جب آپ کو یقین ہو کہ اس کلید سے سمجھوتہ کیا گیا ہے۔ ایک متبادل فوری طور پر خود بخود تیار ہو جائے گا۔<br />اس کلید کو حذف کرنے سے دوسری ایپلیکیشنز کے لیے آپ کے ساتھ بات چیت کرنا ناممکن ہو جائے گا، جب تک کہ آپ دستی طور پر ہر ایک منتظم سے رابطہ کریں اور انہیں اپنی نئی کلید فراہم نہ کریں۔';
$string['exportfields'] = 'ایکسپورٹ کرنے کے لیے فیلڈز';
$string['failedaclwrite'] = 'صارف \'{$a}\' کے لیے MNet رسائی کنٹرول لسٹ میں لکھنے میں ناکام۔';
$string['findlogin'] = 'لاگ ان تلاش کریں';
$string['forbidden-function'] = 'وہ فنکشن RPC کے لیے فعال نہیں کیا گیا ہے۔';
$string['forbidden-transport'] = 'آپ جس نقل و حمل کا طریقہ استعمال کرنے کی کوشش کر رہے ہیں اس کی اجازت نہیں ہے۔';
$string['forcesavechanges'] = 'تبدیلیاں محفوظ کرنے پر مجبور کریں';
$string['helpnetworksettings'] = 'MNet مواصلات کو ترتیب دیں';
$string['hidelocal'] = 'مقامی صارفین کو چھپائیں';
$string['hideremote'] = 'دور دراز کے صارفین کو چھپائیں';
$string['host'] = 'میزبان';
$string['hostcoursenotfound'] = 'میزبان یا کورس نہیں ملا';
$string['hostdeleted'] = 'میزبان کو حذف کر دیا گیا';
$string['hostexists'] = 'اس میزبان نام والے میزبان کے لیے ایک ریکارڈ پہلے سے موجود ہے (اسے حذف کیا جا سکتا ہے)۔ اس ریکارڈ میں ترمیم کرنے کے لیے <a href="{$a}">یہاں کلک کریں</a>۔';
$string['hostlist'] = 'نیٹ ورک والے میزبانوں کی فہرست';
$string['hostname'] = 'میزبان کا نام';
$string['hostnamehelp'] = 'ریموٹ ہوسٹ کا مکمل طور پر اہل ڈومین نام، جیسے www.example.com';
$string['hostnotconfiguredforsso'] = 'یہ سرور ریموٹ لاگ ان کے لیے کنفیگر نہیں ہے۔';
$string['hostsettings'] = 'میزبان کی ترتیبات';
$string['http_self_signed_help'] = 'ریموٹ ہوسٹ پر خود دستخط شدہ DIY SSL سرٹیفکیٹ کا استعمال کرتے ہوئے کنکشن کی اجازت دیں۔';
$string['http_verified_help'] = 'ریموٹ ہوسٹ پر پی ایچ پی میں تصدیق شدہ SSL سرٹیفکیٹ کا استعمال کرتے ہوئے کنکشن کی اجازت دیں، لیکن HTTP سے زیادہ (https نہیں)۔';
$string['https_self_signed_help'] = 'HTTP پر ریموٹ ہوسٹ پر پی ایچ پی میں خود دستخط شدہ DIY SSL کا استعمال کرتے ہوئے کنکشن کی اجازت دیں۔';
$string['https_verified_help'] = 'ریموٹ ہوسٹ پر تصدیق شدہ SSL سرٹیفکیٹ کا استعمال کرتے ہوئے کنکشن کی اجازت دیں۔';
$string['id'] = 'آئی ڈی';
$string['idhelp'] = 'یہ قدر خود بخود تفویض ہو جاتی ہے اور اسے تبدیل نہیں کیا جا سکتا';
$string['importfields'] = 'درآمد کرنے کے لیے فیلڈز';
$string['inspect'] = 'معائنہ کریں';
$string['installnosuchfunction'] = 'کوڈنگ کی خرابی! کچھ فائل ({$a->file}) سے mnet xmlrpc فنکشن ({$a->method}) انسٹال کرنے کی کوشش کر رہا ہے اور اسے نہیں مل سکا!';
$string['installnosuchmethod'] = 'کوڈنگ کی خرابی! کچھ کلاس ({$a->class}) پر mnet xmlrpc طریقہ ({$a->method}) انسٹال کرنے کی کوشش کر رہا ہے اور اسے نہیں مل سکا!';
$string['installreflectionclasserror'] = 'کوڈنگ کی خرابی! کلاس \'{$a->class}\' میں طریقہ \'{$a->method}\' کے لیے MNet کا تعارف ناکام ہو گیا۔ اصل غلطی کا پیغام، اگر یہ مدد کرتا ہے، تو یہ ہے: \'{$a->error}\'';
$string['installreflectionfunctionerror'] = 'کوڈنگ کی خرابی! فائل \'{$a->file}\' میں فنکشن \'{$a->method}\' کے لیے MNet کا تعارف ناکام ہو گیا۔ اصل غلطی کا پیغام، اگر یہ مدد کرتا ہے، تو یہ ہے: \'{$a->error}\'';
$string['invalidaccessparam'] = 'غلط رسائی پیرامیٹر۔';
$string['invalidactionparam'] = 'غلط ایکشن پیرامیٹر۔';
$string['invalidhost'] = 'آپ کو ایک درست میزبان شناخت کنندہ فراہم کرنا ہوگا';
$string['invalidpubkey'] = 'کلید ایک درست SSL کلید نہیں ہے۔ ({$a})';
$string['invalidurl'] = 'غلط URL پیرامیٹر۔';
$string['ipaddress'] = 'IP پتہ';
$string['is_in_range'] = 'IP ایڈریس <code>{$a}</code> ایک درست قابل اعتماد میزبان کی نمائندگی کرتا ہے۔';
$string['ispublished'] = '{$a} نے آپ کے لیے اس سروس کو فعال کر دیا ہے۔';
$string['issubscribed'] = '{$a} آپ کے میزبان پر اس سروس کو سبسکرائب کر رہا ہے۔';
$string['keydeleted'] = 'آپ کی کلید کو کامیابی کے ساتھ حذف اور تبدیل کر دیا گیا ہے۔';
$string['keymismatch'] = 'اس میزبان کے لیے آپ کے پاس جو عوامی کلید ہے وہ اس عوامی کلید سے مختلف ہے جو یہ فی الحال شائع کر رہی ہے۔ فی الحال شائع شدہ کلید یہ ہے:';
$string['last_connect_time'] = 'آخری رابطہ وقت';
$string['last_connect_time_help'] = 'وہ وقت جب آپ آخری بار اس میزبان سے جڑے تھے۔';
$string['last_transport_help'] = 'وہ ٹرانسپورٹ جو آپ نے اس میزبان سے آخری کنکشن کے لیے استعمال کی تھی۔';
$string['leavedefault'] = 'اس کے بجائے پہلے سے طے شدہ ترتیبات استعمال کریں';
$string['listservices'] = 'خدمات کی فہرست بنائیں';
$string['loginlinkmnetuser'] = '<br />اگر آپ MNet ریموٹ صارف ہیں اور <a href="{$a}">یہاں اپنے ای میل ایڈریس کی تصدیق کر سکتے ہیں</a>، تو آپ کو اپنے لاگ ان صفحہ پر بھیج دیا جا سکتا ہے۔<br />';
$string['logs'] = 'نوشتہ جات';
$string['managemnetpeers'] = 'ساتھیوں کا نظم کریں';
$string['method'] = 'طریقہ';
$string['methodhelp'] = '{$a} کے لیے طریقہ مدد';
$string['methodsavailableonhost'] = '{$a} پر دستیاب طریقے';
$string['methodsavailableonhostinservice'] = '{$a->host} پر {$a->service} کے لیے دستیاب طریقے';
$string['methodsignature'] = '{$a} کے لیے طریقہ دستخط';
$string['mnet'] = 'ایم نیٹ';
$string['mnet_concatenate_strings'] = '3 سٹرنگز کو جوڑیں اور نتیجہ واپس کریں';
$string['mnet_session_prohibited'] = 'آپ کے ہوم سرور کے صارفین کو فی الحال {$a} پر گھومنے کی اجازت نہیں ہے۔';
$string['mnetdisabled'] = 'ایم نیٹ <strong>غیر فعال</strong> ہے۔';
$string['mnetidprovider'] = 'MNet ID فراہم کنندہ';
$string['mnetidproviderdesc'] = 'آپ اس سہولت کو اس لنک کو بازیافت کرنے کے لیے استعمال کر سکتے ہیں جس پر آپ لاگ ان کر سکتے ہیں، اگر آپ اس صارف نام سے مماثل درست ای میل پتہ فراہم کر سکتے ہیں جس کے ساتھ آپ نے پہلے لاگ ان کرنے کی کوشش کی تھی۔';
$string['mnetidprovidermsg'] = 'آپ کو اپنے {$a} فراہم کنندہ پر لاگ ان کرنے کے قابل ہونا چاہیے۔';
$string['mnetidprovidernotfound'] = 'معذرت، لیکن مزید معلومات نہیں مل سکیں۔';
$string['mnetpeers'] = 'ساتھی';
$string['mnetservices'] = 'خدمات';
$string['mnetsettings'] = 'MNet کی ترتیبات';
$string['moodle_home_help'] = 'ریموٹ ہوسٹ پر MNet ایپلیکیشن کے ہوم پیج کا راستہ، جیسے /moodle/.';
$string['name'] = 'نام';
$string['net'] = 'نیٹ ورکنگ';
$string['networksettings'] = 'نیٹ ورک کی ترتیبات';
$string['never'] = 'کبھی نہیں';
$string['noaclentries'] = 'SSO رسائی کنٹرول لسٹ میں کوئی اندراج نہیں ہے';
$string['noaddressforhost'] = 'معذرت، لیکن وہ میزبان نام ({$a}) حل نہیں ہو سکا!';
$string['nocurl'] = 'PHP cURL لائبریری انسٹال نہیں ہے';
$string['nolocaluser'] = 'دور دراز کے صارف کے لیے کوئی مقامی ریکارڈ موجود نہیں ہے، اور یہ نہیں بنایا جا سکا، کیونکہ یہ میزبان خودکار طور پر صارفین کو تخلیق نہیں کرے گا۔ براہ کرم اپنے منتظم سے رابطہ کریں!';
$string['nomodifyacl'] = 'آپ کو MNet رسائی کنٹرول لسٹ میں ترمیم کرنے کی اجازت نہیں ہے۔';
$string['nonmatchingcert'] = 'سرٹیفکیٹ کا موضوع: <br /><em>{$a->subject}</em><br />اس میزبان سے میل نہیں کھاتا جس سے یہ آیا ہے:<br /><em>{$a->میزبان </em>';
$string['nopubkey'] = 'عوامی کلید کی بازیافت میں ایک مسئلہ تھا۔<br />ہوسکتا ہے کہ میزبان MNet کی اجازت نہ دے یا کلید غلط ہو۔';
$string['nosite'] = 'سائٹ کی سطح کا کورس نہیں مل سکا';
$string['nosuchfile'] = 'فائل/فنکشن {$a} موجود نہیں ہے۔';
$string['nosuchfunction'] = 'فنکشن کا پتہ لگانے سے قاصر، یا فنکشن RPC کے لیے ممنوع ہے۔';
$string['nosuchmodule'] = 'فنکشن کو غلط طریقے سے ایڈریس کیا گیا تھا اور اس کا پتہ نہیں چل سکا۔ براہ کرم mod/modulename/lib/functionname فارمیٹ استعمال کریں۔';
$string['nosuchpublickey'] = 'دستخط کی تصدیق کے لیے عوامی کلید حاصل کرنے سے قاصر۔';
$string['nosuchservice'] = 'RPC سروس اس میزبان پر نہیں چل رہی ہے۔';
$string['nosuchtransport'] = 'اس ID کے ساتھ کوئی ٹرانسپورٹ موجود نہیں ہے۔';
$string['notBASE64'] = 'یہ سٹرنگ بیس 64 انکوڈ شدہ فارمیٹ میں نہیں ہے۔ یہ ایک درست کلید نہیں ہو سکتی۔';
$string['notPEM'] = 'یہ کلید PEM فارمیٹ میں نہیں ہے۔ یہ کام نہیں کرے گا۔';
$string['not_in_range'] = 'IP ایڈریس <code>{$a}</code> ایک درست قابل اعتماد میزبان کی نمائندگی نہیں کرتا ہے۔';
$string['notenoughidpinfo'] = 'آپ کا شناختی فراہم کنندہ ہمیں مقامی طور پر آپ کا اکاؤنٹ بنانے یا اپ ڈیٹ کرنے کے لیے کافی معلومات نہیں دے رہا ہے۔ معذرت!';
$string['notinxmlrpcserver'] = 'MNet ریموٹ کلائنٹ تک رسائی حاصل کرنے کی کوشش، XMLRPC سرور کے عمل کے دوران نہیں';
$string['notmoodleapplication'] = 'انتباہ: یہ موڈل ایپلیکیشن نہیں ہے، اس لیے معائنے کے کچھ طریقے ٹھیک سے کام نہیں کر سکتے۔';
$string['notpermittedtojump'] = 'آپ کو اس Moodle سرور سے ریموٹ سیشن شروع کرنے کی اجازت نہیں ہے۔';
$string['notpermittedtojumpas'] = 'جب آپ دوسرے صارف کے طور پر لاگ ان ہوتے ہیں تو آپ ریموٹ سیشن شروع نہیں کر سکتے۔';
$string['notpermittedtoland'] = 'آپ کو ریموٹ سیشن شروع کرنے کی اجازت نہیں ہے۔';
$string['off'] = 'بند';
$string['on'] = 'آن';
$string['options'] = 'اختیارات';
$string['peerprofilefielddesc'] = 'یہاں آپ عالمی ترتیبات کو اوور رائیڈ کر سکتے ہیں جس کے لیے پروفائل فیلڈز بھیجنے اور درآمد کرنے کے لیے جب نئے صارفین بنائے جائیں گے';
$string['permittedtransports'] = 'نقل و حمل کی اجازت ہے';
$string['phperror'] = 'پی ایچ پی کی اندرونی خرابی نے آپ کی درخواست کو پورا ہونے سے روک دیا۔';
$string['position'] = 'پوزیشن';
$string['postrequired'] = 'ڈیلیٹ فنکشن کے لیے POST کی درخواست کی ضرورت ہے۔';
$string['privacy:metadata'] = 'MNet پلگ ان کوئی ذاتی ڈیٹا ذخیرہ نہیں کرتا ہے۔';
$string['profileexportfields'] = 'بھیجنے کے لیے فیلڈز';
$string['profilefielddesc'] = 'یہاں آپ پروفائل فیلڈز کی فہرست ترتیب دے سکتے ہیں جو صارف کے اکاؤنٹس بننے یا اپ ڈیٹ ہونے پر MNet پر بھیجے اور موصول ہوتے ہیں۔ آپ اسے ہر MNet ہم مرتبہ کے لیے انفرادی طور پر بھی اوور رائیڈ کر سکتے ہیں۔ نوٹ کریں کہ درج ذیل فیلڈز ہمیشہ بھیجی جاتی ہیں اور اختیاری نہیں ہیں: {$a}';
$string['profilefields'] = 'پروفائل فیلڈز';
$string['profileimportfields'] = 'درآمد کرنے کے لیے فیلڈز';
$string['promiscuous'] = 'متضاد';
$string['publickey'] = 'عوامی کلید';
$string['publickey_help'] = 'عوامی کلید خود بخود ریموٹ سرور سے حاصل کی جاتی ہے۔';
$string['publickeyrequired'] = 'آپ کو ایک عوامی کلید فراہم کرنا ہوگی۔';
$string['publish'] = 'شائع کریں';
$string['reallydeleteserver'] = 'کیا آپ واقعی سرور کو حذف کرنا چاہتے ہیں؟';
$string['receivedwarnings'] = 'درج ذیل انتباہات موصول ہوئے';
$string['recordnoexists'] = 'ریکارڈ موجود نہیں ہے۔';
$string['reenableserver'] = 'نہیں - اس سرور کو دوبارہ فعال کرنے کے لیے اس اختیار کو منتخب کریں۔';
$string['registerallhosts'] = 'تمام میزبانوں کو رجسٹر کریں (متضاد موڈ)';
$string['registerallhostsexplain'] = 'آپ ان تمام میزبانوں کو رجسٹر کرنے کا انتخاب کر سکتے ہیں جو خود بخود آپ سے جڑنے کی کوشش کرتے ہیں۔ اس کا مطلب یہ ہے کہ کسی بھی MNet سائٹ کے لیے آپ کی میزبانوں کی فہرست میں ایک ریکارڈ ظاہر ہوگا جو آپ سے جڑتی ہے اور آپ کی عوامی کلید کی درخواست کرتی ہے۔<br />آپ کے پاس \'تمام میزبانوں\' کے لیے خدمات کو ترتیب دینے کا اختیار نیچے ہے اور وہاں کچھ خدمات کو فعال کرکے، آپ کسی بھی ریموٹ سرور کو بلاامتیاز خدمات فراہم کرنے کے قابل ہیں۔';
$string['registerhostsoff'] = 'تمام میزبانوں کو رجسٹر کریں فی الحال <b>آف</b> ہے';
$string['registerhostson'] = 'تمام میزبانوں کو رجسٹر کریں فی الحال <b>آن</b> ہے';
$string['remotecourses'] = 'ریموٹ کورسز';
$string['remotehost'] = 'ریموٹ میزبان';
$string['remotehosts'] = 'ریموٹ میزبان';
$string['remoteuser'] = 'ریموٹ {$a->remotetype} صارف';
$string['remoteuserinfo'] = 'پروفائل <a href="{$a->remoteurl}">{$a->remotename}</a> سے حاصل کیا گیا';
$string['requiresopenssl'] = 'نیٹ ورکنگ کو اوپن ایس ایس ایل ایکسٹینشن کی ضرورت ہے';
$string['restore'] = 'بحال کریں';
$string['returnvalue'] = 'واپسی کی قیمت';
$string['reviewhostdetails'] = 'میزبان کی تفصیلات کا جائزہ لیں';
$string['reviewhostservices'] = 'میزبان خدمات کا جائزہ لیں';
$string['selectaccesslevel'] = 'براہ کرم فہرست سے رسائی کی سطح منتخب کریں۔';
$string['selectahost'] = 'براہ کرم ایک ریموٹ میزبان منتخب کریں۔';
$string['service'] = 'سروس کا نام';
$string['serviceid'] = 'سروس آئی ڈی';
$string['servicesavailableonhost'] = 'خدمات {$a} پر دستیاب ہیں';
$string['serviceswepublish'] = 'خدمات جو ہم {$a} پر شائع کرتے ہیں۔';
$string['serviceswesubscribeto'] = '{$a} پر خدمات جن کو ہم سبسکرائب کرتے ہیں۔';
$string['settings'] = 'ترتیبات';
$string['showlocal'] = 'مقامی صارفین کو دکھائیں';
$string['showremote'] = 'ریموٹ صارفین کو دکھائیں';
$string['ssl_acl_allow'] = 'SSO ACL: صارف \'{$a->user}\' کو \'{$a->host}\' سے اجازت دیں';
$string['ssl_acl_deny'] = 'SSO ACL: صارف \'{$a->user}\' سے \'{$a->host}\' سے انکار کریں';
$string['sslverification'] = 'SSL تصدیق';
$string['sslverification_help'] = 'یہ اختیار آپ کو HTTPS کا استعمال کرتے ہوئے ہم مرتبہ سے منسلک ہونے پر سیکیورٹی کی سطح کو ترتیب دینے کی اجازت دیتا ہے۔ * کوئی نہیں: سیکیورٹی کی کوئی سطح نہیں * صرف میزبان کی تصدیق کریں: SSL سرٹیفکیٹ کے ڈومین کی توثیق کرتا ہے * میزبان اور ہم مرتبہ کی تصدیق کرتا ہے (تجویز کردہ): SSL سرٹیفکیٹ کے ڈومین اور جاری کنندہ کی توثیق کرتا ہے';
$string['ssoaccesscontrol'] = 'SSO رسائی کنٹرول';
$string['ssoacldescr'] = 'دور دراز کے MNet میزبانوں سے مخصوص صارفین تک رسائی دینے/انکار کرنے کے لیے اس صفحہ کا استعمال کریں۔ یہ اس وقت فعال ہوتا ہے جب آپ دور دراز کے صارفین کو SSO خدمات پیش کر رہے ہوتے ہیں۔ اپنے <em>مقامی</em> صارفین کی دوسرے MNet میزبانوں کے لیے روم کرنے کی صلاحیت کو کنٹرول کرنے کے لیے، انہیں <em>mnetlogintoremote</em> کی صلاحیت فراہم کرنے کے لیے رولز سسٹم کا استعمال کریں۔';
$string['ssoaclneeds'] = 'اس فعالیت کے کام کرنے کے لیے، آپ کے پاس نیٹ ورکنگ آن ہونی چاہیے، نیز MNet تصدیقی پلگ ان کا فعال ہونا ضروری ہے۔';
$string['strict'] = 'سخت';
$string['subscribe'] = 'سبسکرائب';
$string['system'] = 'سسٹم';
$string['testclient'] = 'MNet ٹیسٹ کلائنٹ';
$string['testtrustedhosts'] = 'ایڈریس کی جانچ کریں';
$string['testtrustedhostsexplain'] = 'یہ دیکھنے کے لیے کہ آیا یہ ایک قابل اعتماد میزبان ہے ایک IP ایڈریس درج کریں۔';
$string['theypublish'] = 'وہ شائع کرتے ہیں';
$string['theysubscribe'] = 'وہ سبسکرائب کرتے ہیں';
$string['transport_help'] = 'یہ اختیارات باہمی ہیں، لہذا آپ صرف ایک ریموٹ میزبان کو دستخط شدہ SSL سرٹیفکیٹ استعمال کرنے پر مجبور کر سکتے ہیں اگر آپ کے سرور کے پاس بھی دستخط شدہ SSL سرٹیفکیٹ ہو۔';
$string['trustedhosts'] = 'XML-RPC میزبان';
$string['trustedhostsexplain'] = '<p> بھروسہ مند میزبان میکانزم مخصوص مشینوں کو XML-RPC کے ذریعے Moodle API کے کسی بھی حصے پر کال کرنے کی اجازت دیتا ہے۔ یہ Moodle رویے کو کنٹرول کرنے کے لیے اسکرپٹس کے لیے دستیاب ہے اور اسے فعال کرنے کے لیے ایک بہت خطرناک آپشن ہو سکتا ہے۔ اگر شک ہو تو اسے بند رکھیں۔</p> <p><strong>کسی معیاری MNet خصوصیت کے لیے اس کی ضرورت نہیں ہے!</strong> اسے صرف اس صورت میں آن کریں جب آپ جانتے ہوں کہ آپ کیا کر رہے ہیں۔</p> <p >اسے فعال کرنے کے لیے، ہر لائن پر ایک IP پتوں یا نیٹ ورکس کی فہرست درج کریں۔ کچھ مثالیں:</p> آپ کا مقامی میزبان:<br />127.0.0.1<br />آپ کا مقامی میزبان (ایک نیٹ ورک بلاک کے ساتھ):<br />127.0.0.1/32<br />صرف IP کے ساتھ میزبان ایڈریس 192.168.0.7:<br />192.168.0.7/32<br />192.168.0.1 اور 192.168.0.255 کے درمیان IP ایڈریس کے ساتھ کوئی بھی میزبان:<br />192.168.0.0/24<br />جو بھی ہو <br />192.168.0.0/0<br />ظاہر ہے آخری مثال ایک تجویز کردہ ترتیب <strong>نہیں</strong> ہے۔';
$string['turnitoff'] = 'اسے بند کر دیں';
$string['turniton'] = 'اسے آن کریں';
$string['type'] = 'قسم';
$string['unknown'] = 'نامعلوم';
$string['unknownerror'] = 'مذاکرات کے دوران نامعلوم خرابی پیش آگئی۔';
$string['usercannotchangepassword'] = 'آپ یہاں اپنا پاس ورڈ تبدیل نہیں کر سکتے کیونکہ آپ دور دراز کے صارف ہیں۔';
$string['userchangepasswordlink'] = '<br /> آپ اپنے <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a> فراہم کنندہ پر اپنا پاس ورڈ تبدیل کر سکتے ہیں۔';
$string['usernotfullysetup'] = 'آپ کا صارف اکاؤنٹ نامکمل ہے۔ آپ کو <a href="{$a}">اپنے فراہم کنندہ کے پاس واپس</a> جانا ہوگا اور یقینی بنانا ہوگا کہ آپ کا پروفائل وہاں مکمل ہوگیا ہے۔ اس کے اثر میں آنے کے لیے آپ کو دوبارہ لاگ آؤٹ اور دوبارہ ان کرنے کی ضرورت پڑسکتی ہے۔';
$string['usersareonline'] = 'انتباہ: اس سرور کے {$a} صارفین فی الحال آپ کی سائٹ پر لاگ ان ہیں۔';
$string['validated_by'] = 'نیٹ ورک کے ذریعہ اس کی توثیق کی جاتی ہے: <code>{$a}</code>';
$string['verifyhostandpeer'] = 'میزبان اور ہم مرتبہ کی تصدیق کریں';
$string['verifyhostonly'] = 'صرف میزبان کی تصدیق کریں';
$string['verifysignature-error'] = 'دستخط کی توثیق ناکام ہوگئی۔ ایک خرابی آگئی ہے۔';
$string['verifysignature-invalid'] = 'دستخط کی توثیق ناکام ہوگئی۔ ایسا لگتا ہے کہ اس پے لوڈ پر آپ کے دستخط نہیں تھے۔';
$string['version'] = 'ورژن';
$string['warning'] = 'وارننگ';
$string['wrong-ip'] = 'آپ کا آئی پی ایڈریس ہمارے ریکارڈ میں موجود ایڈریس سے میل نہیں کھاتا۔';
$string['xmlrpc-missing'] = 'اس خصوصیت کو استعمال کرنے کے لیے آپ کو اپنی پی ایچ پی کی تعمیر میں XML-RPC انسٹال ہونا چاہیے۔';
$string['yourhost'] = 'آپ کا میزبان';
$string['yourpeers'] = 'آپ کے ساتھی';
