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
 * Strings for component 'chat', language 'ur', version '4.4'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'آپ کے آنے والی گفتگو سیشنز ہیں';
$string['ajax'] = 'AJAX کا استعمال کرتے ہوئے ورژن';
$string['autoscroll'] = 'خود کار سکرول';
$string['beep'] = 'گھنٹی';
$string['bubble'] = 'ببل';
$string['cantlogin'] = 'گفتگو روم میں لاگ ان نہیں ہو سکا!!';
$string['chat:addinstance'] = 'ایک نئی گفتگو شامل کریں';
$string['chat:chat'] = 'گفتگو روم تک رسائی حاصل کریں';
$string['chat:deletelog'] = 'گفتگو لاگز کو حذف کریں';
$string['chat:exportparticipatedsession'] = 'گفتگو سیشن کو برآمد کریں جس میں آپ نے حصہ لیا تھا';
$string['chat:exportsession'] = 'کسی بھی گفتگو سیشن کو برآمد کریں';
$string['chat:readlog'] = 'گفتگو لاگز دیکھیں';
$string['chat:talk'] = 'گفتگو میں بات کریں';
$string['chat:view'] = 'گفتگو کی سرگرمی دیکھیں';
$string['chatintro'] = 'تفصیل';
$string['chatname'] = 'اس گفتگو روم کا نام';
$string['chatreport'] = 'گفتگو سیشن';
$string['chattime'] = 'اگلی گفتگو کا وقت';
$string['compact'] = 'کمپیکٹ';
$string['composemessage'] = 'ایک پیغام تحریر کریں';
$string['configmethod'] = 'AJAX گفتگو کا طریقہ AJAX پر مبنی گفتگو انٹرفیس فراہم کرتا ہے جو اپ ڈیٹس کے لیے سرور سے باقاعدگی سے رابطہ کرتا ہے۔ عام بات چیت کے طریقہ کار میں کلائنٹس کا باقاعدگی سے اپ ڈیٹس کے لیے سرور سے رابطہ کرنا شامل ہوتا ہے۔ اس کے لیے کسی ترتیب کی ضرورت نہیں ہے اور ہر جگہ کام کرتا ہے، لیکن اگر بہت سے صارفین گفتگو کر رہے ہوں تو یہ سرور پر ایک بڑا بوجھ پیدا کر سکتا ہے۔ سرور ڈیمون کو استعمال کرنے کے لیے یونکس تک شیل رسائی کی ضرورت ہوتی ہے، لیکن اس کے نتیجے میں ایک تیز رفتار توسیع پذیر گفتگو ماحول ہوتا ہے۔';
$string['confignormalupdatemode'] = 'گفتگو رومز کی تبیدلیاں ایچ ٹی ٹی پی 1.1 کے فیچر <em> کیپ الاوئیو</em> کے ذریعے اچھے طریقے سے بھیجی جاتی ہیں، لیکن یہ پھر بھی سرور کیلیے باعث لوڈ ہیں۔ ایک بہت جدید طریقہ تبدیلیوں کو صارف تک بھیجنے کی <em>سٹریم</em> کی حکمت عملی ہے۔ <em> سٹریم</em> بہت بہتر ہے ) بالکل گفتگو کے طریقہ کار کی طرح( لیکن شاید یہ آپ کے سرور کیلیے موافق نا ہو۔';
$string['configoldping'] = 'زیادہ سے زیادہ ٹائم ) سیکنڈز میں( کیا ہے جس کے گزرنے پر یہ معلوم ہو سکے کہ استعمال کنندہ جدا ہو گیا ہے؟ یہ صرف بالا حد ہے، عموماً یہ جلدی پتا چل جاتا ہے۔ نچلی قیمتوں کا سرور پر عموماً مطالبہ زیادہ ہوتا ہے۔ اگر آپ عام طریقہ استعمال کر رہے ہیں تو کبھی بھی اس کی قیمت 2*chat_refresh_room سے کم نا رکھیں۔';
$string['configrefreshroom'] = 'کتنی دیر بعد بار گفتگو روم خود کو ریفریش کرے ) سیکنڈز میں ( کم قیمت گفتگو روم کو زیادہ چست بنائے گی، لیکن زیادہ لوگوں کی وجہ سے یہ آپ کے ویب سرور پر زیادہ لوڈ ڈالے گی۔ اگر آپ <em>سٹریم<em /> استعمال کر رہے ہیں تو آپ بالا ریفریش فریکوئنسی منتخب کر سکتے ہیں -- 2 دے کر دیکھیں۔';
$string['configrefreshuserlist'] = 'کتنی دیر بعد استعمال کنندگان کی فہرست کی تروتازہ ہو )سیکنڈز میں(؟';
$string['configserverhost'] = 'جہاں سرور کا ڈیمن ہے اس میزبان کمپیوٹر کا نام ہے';
$string['configserverip'] = 'عددی IP پتہ جو اوپر والے میزبان نام سے میل کھاتا ہے';
$string['configservermax'] = 'کلائنٹس کی زیادہ سے زیادہ تعداد کی اجازت ہے';
$string['configserverport'] = 'ڈیمن کیلیے سرور پر قابل استعمال پورٹ';
$string['coursetheme'] = 'کورس تھیم';
$string['crontask'] = 'گفتگو ماڈیول کے لیے بیک گراؤنڈ پروسیسنگ';
$string['currentchats'] = 'متحرک گفتگو سیشن';
$string['currentusers'] = 'موجودہ صارفین';
$string['deletesession'] = 'اس سیشن کو خارج کرو';
$string['deletesessionsure'] = 'کیا آپ اس سیشن کو خارج کرنے کیلیے پر اعتماد ہیں';
$string['donotusechattime'] = 'کسی بھی گفتگو  کے اوقات کو شائع نا کریں';
$string['enterchat'] = 'گفتگو میں داخلے کیلیے کلک کریں';
$string['entermessage'] = 'اپنا پیغام درج کریں';
$string['errornousers'] = 'کوئی بھی استعمال کنندہ تلاش نہیں کیا جا سکا!';
$string['eventmessagesent'] = 'پیغام چلا گیا';
$string['eventsessionsviewed'] = 'سیشنز دیکھے گئے';
$string['explaingeneralconfig'] = 'یہ سیٹنگز <strong>ہمیشہ</strong> استعمال ہونگی';
$string['explainmethoddaemon'] = 'ان ترتیبات کا اثر صرف اس صورت میں ہوتا ہے جب \'چیٹ سرور ڈیمون\' کو گفتگو  کے طریقہ کے طور پر منتخب کیا جائے۔';
$string['explainmethodnormal'] = 'یہ سیٹنگز <strong>صرف</strong> اس وقت اثر کرتی ہیں جب آپ نے گفتگو  کے طریقے کیلیے "عام طریقہ" منتخب کیا ہو گا';
$string['generalconfig'] = 'عمومی وضع';
$string['idle'] = 'بیکار';
$string['indicator:cognitivedepth'] = 'علمی گفتگو';
$string['indicator:cognitivedepth_help'] = 'یہ اشارے گفتگو کی سرگرمی میں طالب علم کے ذریعے حاصل کردہ علمی گہرائی پر مبنی ہے۔';
$string['indicator:cognitivedepthdef'] = 'علمی گفتگو';
$string['indicator:cognitivedepthdef_help'] = 'شرکت کنندہ اس تجزیہ کے وقفہ کے دوران گفتگو کی سرگرمیوں کے ذریعہ پیش کردہ علمی مشغولیت کے اس فیصد تک پہنچ گیا ہے (سطح = کوئی نظارہ نہیں، دیکھیں، جمع کرائیں، رائے دیکھیں، رائے پر تبصرہ)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'سوشل گفتگو کریں';
$string['indicator:socialbreadth_help'] = 'یہ اشارے طالب علم کی طرف سے گفتگو کی سرگرمی میں پہنچنے والی سماجی وسعت پر مبنی ہے۔';
$string['indicator:socialbreadthdef'] = 'سوشل گفتگو کریں';
$string['indicator:socialbreadthdef_help'] = 'شرکت کنندہ اس تجزیہ کے وقفے کے دوران گفتگو کی سرگرمیوں کے ذریعہ پیش کردہ سماجی مشغولیت کے اس فیصد تک پہنچ گیا ہے (سطح = کوئی شرکت نہیں، تنہا شریک، دوسروں کے ساتھ شریک)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inputarea'] = 'ان پٹ ایریا';
$string['invalidid'] = 'وہ گفتگو روم نہیں مل سکا!';
$string['list_all_sessions'] = 'تمام سیشنز کی فہرست بنائیں۔';
$string['list_complete_sessions'] = 'صرف مکمل سیشن کی فہرست بنائیں۔';
$string['listing_all_sessions'] = 'تمام سیشنز کی فہرست۔';
$string['messagebeepseveryone'] = '{$a} سب کو بیپ کرتا ہے!';
$string['messagebeepsyou'] = '{$a} نے ابھی آپ کو بیپ کیا ہے!';
$string['messageenter'] = '{$a} ابھی اس گفتگو میں شامل ہوئے ہیں';
$string['messageexit'] = '{$a} گفتگو  چھوڈ  چکا ھے';
$string['messages'] = 'پیغامات';
$string['messageyoubeep'] = 'آپ نے {$a} کی بیپ کی';
$string['method'] = 'گفتگو کا طریقہ';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'گفتگو سرور ڈیمن';
$string['methodnormal'] = 'نارمل';
$string['modulename'] = 'گفتگو';
$string['modulename_help'] = 'گفتگو ایکٹیویٹی ماڈیول شرکاء کو متن پر مبنی، ریئل ٹائم سنکرونس گفتگو کرنے کے قابل بناتا ہے۔ چیٹ ایک بار کی سرگرمی ہو سکتی ہے یا اسے ہر دن یا ہر ہفتے ایک ہی وقت میں دہرایا جا سکتا ہے۔ گفتگو سیشنز کو محفوظ کیا جاتا ہے اور ہر کسی کو دیکھنے کے لیے دستیاب کیا جا سکتا ہے یا گفتگو سیشن لاگز دیکھنے کی اہلیت رکھنے والے صارفین تک محدود کیا جا سکتا ہے۔ گفتگو خاص طور پر اس وقت مفید ہوتی ہیں جب گروپ گفتگو آمنے سامنے نہیں مل پاتی ہے، جیسے کہ * آن لائن کورسز میں حصہ لینے والے طلباء کی باقاعدہ ملاقاتیں تاکہ وہ اسی کورس میں دوسروں کے ساتھ تجربات کا اشتراک کرسکیں لیکن ایک مختلف مقام پر * ایک طالب علم کام کے بارے میں جاننے کے لیے اپنے استاد کے ساتھ ذاتی طور پر بات چیت کرنے میں عارضی طور پر شرکت کرنے سے قاصر ہونا * کام کے تجربے پر باہر طلباء ایک دوسرے اور اپنے استاد کے ساتھ اپنے تجربات پر تبادلہ خیال کرنے کے لیے اکٹھے ہوتے ہیں * چھوٹے بچے شام کے وقت گھر میں ایک کنٹرولڈ (مانیٹرنگ) تعارف کے طور پر گفتگو کا استعمال کرتے ہیں سوشل نیٹ ورکنگ کی دنیا میں * ایک مدعو اسپیکر کے ساتھ ایک مختلف جگہ پر سوال و جواب کا سیشن * طلباء کو امتحانات کی تیاری میں مدد کرنے کے لیے سیشن جہاں استاد، یا دیگر طلباء، نمونہ سوالات پیش کریں گے۔';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'گفتگو';
$string['neverdeletemessages'] = 'پیغامات کو کبھی حذف نہ کریں';
$string['nextchattime'] = 'اگلی گفتگو کا وقت:';
$string['no_complete_sessions_found'] = 'کوئی مکمل سیشن نہیں ملا۔';
$string['nochat'] = 'کوئی گفتگو نہیں ملی';
$string['noguests'] = 'مہمانوں کیلیے یہ گفتگو کھلی نہیں';
$string['nomessages'] = 'ابھی تک کوئی پیغام نہیں';
$string['nopermissiontoseethechatlog'] = 'آپ کو گفتگو لاگز دیکھنے کی اجازت نہیں ہے۔';
$string['normalkeepalive'] = 'متحرک رکھیں';
$string['normalstream'] = 'سٹریم';
$string['noscheduledsession'] = 'شیڈول میں کوئی سیشن نہیں ہے';
$string['notallowenter'] = 'آپ اس گفتگو میں شامل ہونے کے مجاز نہیں';
$string['notlogged'] = 'آپ لاگ ان نہیں ہیں!';
$string['oldping'] = 'رابطہ ختم ہونے کا ٹائم';
$string['page-mod-chat-x'] = 'کوئی بھی گفتگو ماڈیول صفحہ';
$string['pastchats'] = 'پرانے گفتگو سیشن';
$string['pluginadministration'] = 'گفتگو انتظامیہ';
$string['pluginname'] = 'گفتگو';
$string['privacy:metadata:chat_messages_current'] = 'موجودہ گفتگو سیشن۔ یہ ڈیٹا عارضی ہے اور گفتگو سیشن کے حذف ہونے کے بعد اسے حذف کر دیا جاتا ہے';
$string['privacy:metadata:chat_users'] = 'اس بات پر نظر رکھتا ہے کہ کون سے صارف کن گفتگو رومز میں ہیں';
$string['privacy:metadata:chat_users:firstping'] = 'گفتگو روم تک پہلی رسائی کا وقت';
$string['privacy:metadata:chat_users:ip'] = 'صارف IP';
$string['privacy:metadata:chat_users:lang'] = 'صارف کی زبان';
$string['privacy:metadata:chat_users:lastmessageping'] = 'اس گفتگو روم میں آخری پیغام کا وقت';
$string['privacy:metadata:chat_users:lastping'] = 'گفتگو روم تک آخری رسائی کا وقت';
$string['privacy:metadata:chat_users:userid'] = 'صارف آئی ڈی';
$string['privacy:metadata:chat_users:version'] = 'صارف نے گفتگو تک کیسے رسائی حاصل کی (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'گفتگو سیشن کے دوران بھیجے گئے پیغامات کا ریکارڈ';
$string['privacy:metadata:messages:issystem'] = 'آیا پیغام سسٹم سے تیار کردہ پیغام ہے';
$string['privacy:metadata:messages:message'] = 'پیغام';
$string['privacy:metadata:messages:timestamp'] = 'جس وقت پیغام بھیجا گیا تھا۔';
$string['privacy:metadata:messages:userid'] = 'پیغام کے مصنف کی صارف ID';
$string['refreshroom'] = 'روم ریفریش کریں';
$string['refreshuserlist'] = 'صارف کی فہرست ریفریش کرو';
$string['removemessages'] = 'تمام پیغامات ہٹائیں';
$string['repeatdaily'] = 'ہر روز ایک ہی وقت میں';
$string['repeatnone'] = 'کوئی دوہرائی نہیں - متعین وقت پر شائع کرو';
$string['repeattimes'] = 'سیشن کے اوقات کو دہرائیں/شائع کریں';
$string['repeatweekly'] = 'ہر ہفتے ایک ہی وقت پر';
$string['saidto'] = 'سے کہا';
$string['savemessages'] = 'پرانے سیشن محفوظ کرو';
$string['search:activity'] = 'گفتگو - سرگرمی کی معلومات';
$string['seesession'] = 'یہ سیشن دیکھیں';
$string['send'] = 'بھیجیں';
$string['sending'] = 'بھیج رہا ہے';
$string['serverhost'] = 'سرور کا نام';
$string['serverip'] = 'سرور کا آئی پی';
$string['servermax'] = 'زیادہ سے زیادہ صارفین';
$string['serverport'] = 'سرور پورٹ';
$string['sessions'] = 'گفتگو کے سیشن';
$string['sessionstartsin'] = 'اگلا گفتگو سیشن اب سے {$a} سے شروع ہوگا۔';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'ہر کوئی پرانے سیشن دیکھ سکتا ہے';
$string['studentseereports_help'] = 'اگر نہیں پر سیٹ کیا جاتا ہے، تو صرف صارفین کے پاس mod/chat:readlog کی اہلیت ہی گفتگو لاگز دیکھنے کے قابل ہوتی ہے';
$string['talk'] = 'بات کرنا';
$string['updatemethod'] = 'اپ ڈیٹ کرنے کا طریقہ';
$string['updaterate'] = 'اپ ڈیٹ کی شرح:';
$string['userlist'] = 'صارف کی فہرست';
$string['usingchat'] = 'گفتگو کا استعمال کرتے ہوئے';
$string['usingchat_help'] = 'گفتگو ماڈیول میں بات چیت کو قدرے بہتر بنانے کے لیے کچھ خصوصیات شامل ہیں۔ * مسکراہٹیں - کوئی بھی مسکراہٹ والے چہرے (جذباتی نشانات) جو آپ Moodle میں کہیں اور ٹائپ کرسکتے ہیں وہ یہاں بھی ٹائپ کیے جاسکتے ہیں، مثال کے طور پر :-) * لنکس - ویب سائٹ کے پتے خود بخود لنکس میں تبدیل ہوجائیں گے * Emoting - آپ "/me" کے ساتھ لائن شروع کر سکتے ہیں۔ " یا ":" جذباتی کرنے کے لیے، مثال کے طور پر اگر آپ کا نام کم ہے اور آپ ٹائپ کریں ":laughs!" یا "/ میں ہنستا ہوں!" پھر سب دیکھیں گے "کم ہنستا ہے!" * بیپس - آپ دوسرے شرکاء کے نام کے آگے "بیپ" لنک پر کلک کرکے انہیں آواز بھیج سکتے ہیں۔ چیٹ میں موجود تمام لوگوں کو ایک ساتھ بیپ کرنے کا ایک مفید شارٹ کٹ "بیپ آل" ٹائپ کرنا ہے۔ * ایچ ٹی ایم ایل - اگر آپ کو کچھ ایچ ٹی ایم ایل کوڈ معلوم ہے، تو آپ اسے اپنے متن میں تصاویر داخل کرنے، آوازیں چلانے یا مختلف رنگوں کا متن بنانے کے لیے استعمال کر سکتے ہیں۔';
$string['viewreport'] = 'پرانے گفتگو سیشنز دیکھیں';
