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
 * Strings for component 'tool_oauth2', language 'ur', version '4.1'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authconfirm'] = 'یہ کارروائی تصدیق شدہ اکاؤنٹ کے لیے موڈل تک مستقل API رسائی فراہم کرے گی۔ اس کا مقصد موڈل کی ملکیت والی فائلوں کے انتظام کے لیے سسٹم اکاؤنٹ کے طور پر استعمال کرنا ہے۔';
$string['authconnected'] = 'سسٹم اکاؤنٹ اب آف لائن رسائی کے لیے منسلک ہے';
$string['authnotconnected'] = 'سسٹم اکاؤنٹ آف لائن رسائی کے لیے منسلک نہیں تھا';
$string['configured'] = 'تشکیل شدہ';
$string['configuredstatus'] = 'تشکیل شدہ';
$string['connectsystemaccount'] = 'سسٹم اکاؤنٹ سے جڑیں';
$string['createfromtemplate'] = 'ٹیمپلیٹ سے OAuth 2 سروس بنائیں';
$string['createfromtemplatedesc'] = 'OAuth سروس بنانے کے لیے نیچے دیے گئے OAuth 2 سروس ٹیمپلیٹس میں سے ایک کا انتخاب کریں تاکہ معلوم سروس کی اقسام میں سے کسی ایک کے لیے درست کنفیگریشن ہو۔ یہ OAuth 2 سروس بنائے گا، جس میں تصدیق کے لیے درکار تمام درست پوائنٹس اور پیرامیٹرز ہوں گے، حالانکہ آپ کو اب بھی نئی سروس کے استعمال سے پہلے کلائنٹ آئی ڈی اور راز درج کرنے کی ضرورت ہوگی۔';
$string['createnewendpoint'] = 'جاری کنندہ "{$a}" کے لیے نیا اختتامی نقطہ بنائیں';
$string['createnewfacebookissuer'] = 'فیس بک کی نئی سروس بنائیں';
$string['createnewgoogleissuer'] = 'نئی گوگل سروس بنائیں';
$string['createnewissuer'] = 'نئی کسٹم سروس بنائیں';
$string['createnewmicrosoftissuer'] = 'نئی مائیکروسافٹ سروس بنائیں';
$string['createnewnextcloudissuer'] = 'نئی نیکسٹ کلاؤڈ سروس بنائیں';
$string['createnewservice'] = 'نئی سروس بنائیں:';
$string['createnewuserfieldmapping'] = 'جاری کنندہ "{$a}" کے لیے نیا صارف فیلڈ میپنگ بنائیں';
$string['custom_service'] = 'اپنی مرضی کے مطابق';
$string['deleteconfirm'] = 'کیا آپ واقعی شناخت جاری کنندہ "{$a}" کو حذف کرنا چاہتے ہیں؟ اس جاری کنندہ پر انحصار کرنے والا کوئی بھی پلگ ان کام کرنا بند کر دے گا۔';
$string['deleteendpointconfirm'] = 'کیا آپ واقعی جاری کنندہ "{$a->issuer}" کے لیے اختتامی نقطہ "{$a->endpoint}" کو حذف کرنا چاہتے ہیں؟ اس اختتامی نقطہ پر انحصار کرنے والا کوئی بھی پلگ ان کام کرنا بند کر دے گا۔';
$string['deleteuserfieldmappingconfirm'] = 'کیا آپ واقعی جاری کنندہ "{$a}" کے لیے صارف کی فیلڈ میپنگ کو حذف کرنا چاہتے ہیں؟';
$string['discovered'] = 'سروس کی دریافت کامیاب';
$string['discovered_help'] = 'دریافت کا مطلب یہ ہے کہ OAuth 2 اختتامی پوائنٹس کا تعین OAuth سروس کے بنیادی یو آر ایل سے خود بخود کیا جا سکتا ہے۔ تمام خدمات کو "دریافت" کرنے کی ضرورت نہیں ہے، لیکن اگر وہ نہیں ہیں، تو اختتامی نکات اور صارف کی نقشہ سازی کی معلومات کو دستی طور پر درج کرنے کی ضرورت ہوگی۔';
$string['discoverystatus'] = 'دریافت';
$string['editendpoint'] = 'اختتامی نقطہ میں ترمیم کریں: جاری کنندہ {$a->جاری کرنے والے کے لیے {$a->endpoint}';
$string['editendpoints'] = 'اختتامی مقامات کو ترتیب دیں';
$string['editissuer'] = 'شناخت جاری کنندہ میں ترمیم کریں: {$a}';
$string['edituserfieldmapping'] = 'جاری کنندہ {$a} کے لیے صارف کی فیلڈ میپنگ میں ترمیم کریں';
$string['edituserfieldmappings'] = 'صارف کی فیلڈ میپنگ کو ترتیب دیں';
$string['endpointdeleted'] = 'اختتامی نقطہ حذف کر دیا گیا';
$string['endpointname'] = 'نام';
$string['endpointname_help'] = 'اس اختتامی نقطہ کو تلاش کرنے کے لیے استعمال ہونے والی کلید۔ "_endpoint" کے ساتھ ختم ہونا چاہیے۔';
$string['endpointsforissuer'] = 'جاری کنندہ کے لیے اختتامی پوائنٹس: {$a}';
$string['endpointurl'] = 'یو آر ایل';
$string['endpointurl_help'] = 'اس اختتامی نقطہ کے لیے یو آر ایل۔ https:// پروٹوکول ضرور استعمال کریں۔';
$string['facebook_service'] = 'فیس بک';
$string['google_service'] = 'گوگل';
$string['imsobv2p1_service'] = 'بیجز کھولیں';
$string['issueralloweddomains'] = 'لاگ ان ڈومینز';
$string['issueralloweddomains_help'] = 'اگر سیٹ ہے تو، یہ ترتیب کوما سے الگ کردہ ڈومینز کی فہرست ہے جس پر اس فراہم کنندہ کا استعمال کرتے وقت لاگ انز پر پابندی ہوگی۔';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = 'سروس بیس یو آر ایل';
$string['issuerbaseurl_help'] = 'سروس تک رسائی کے لیے استعمال ہونے والا بنیادی یو آر ایل۔';
$string['issuerclientid'] = 'کلائنٹ آئی ڈی';
$string['issuerclientid_help'] = 'اس جاری کنندہ کے لیے OAuth کلائنٹ  آئی ڈی۔';
$string['issuerclientsecret'] = 'کلائنٹ کا راز';
$string['issuerclientsecret_help'] = 'اس جاری کنندہ کے لیے OAuth کلائنٹ کا راز۔';
$string['issuerdeleted'] = 'شناخت جاری کرنے والا حذف کر دیا گیا';
$string['issuerdisabled'] = 'شناخت جاری کرنے والا غیر فعال ہے';
$string['issuerenabled'] = 'شناخت جاری کنندہ فعال ہے';
$string['issuerimage'] = 'لوگو یو آر ایل';
$string['issuerimage_help'] = 'اس جاری کنندہ کے لیے لوگو دکھانے کے لیے استعمال ہونے والا تصویری یو آر ایل ۔ لاگ ان صفحہ پر دکھایا جا سکتا ہے۔';
$string['issuerloginpagename'] = 'لاگ ان صفحہ پر نام ظاہر ہوتا ہے';
$string['issuerloginpagename_help'] = 'اگر بیان کیا گیا ہے، تو یہ نام سروس کے نام کے بجائے لاگ ان صفحہ پر استعمال کیا جائے گا۔';
$string['issuerloginparams'] = 'لاگ ان درخواست میں اضافی پیرامیٹرز شامل ہیں۔';
$string['issuerloginparams_help'] = 'صارف کے بنیادی پروفائل کو پڑھنے کے لیے کچھ سسٹمز کو لاگ ان کی درخواست کے لیے اضافی پیرامیٹرز کی ضرورت ہوتی ہے۔';
$string['issuerloginparamsoffline'] = 'اضافی پیرامیٹرز آف لائن رسائی کے لیے لاگ ان کی درخواست میں شامل ہیں۔';
$string['issuerloginparamsoffline_help'] = 'ہر OAuth سسٹم آف لائن رسائی کی درخواست کرنے کا ایک مختلف طریقہ بیان کرتا ہے۔ جیسے گوگل کو اضافی پیرامز کی ضرورت ہے: "access_type=offline&prompt=consent"۔ یہ پیرامیٹرز یو آر ایل استفسار پیرامیٹر فارمیٹ میں ہونے چاہئیں۔';
$string['issuerloginscopes'] = 'لاگ ان درخواست میں شامل دائرہ کار۔';
$string['issuerloginscopes_help'] = 'صارف کے بنیادی پروفائل کو پڑھنے کے لیے کچھ سسٹمز کو لاگ ان کی درخواست کے لیے اضافی اسکوپس کی ضرورت ہوتی ہے۔ اوپن آئی ڈی کنیکٹ کمپلائنٹ سسٹم کے معیاری دائرہ کار "اوپنیڈ پروفائل ای میل" ہیں۔';
$string['issuerloginscopesoffline'] = 'آف لائن رسائی کے لیے لاگ ان درخواست میں شامل دائرہ کار۔';
$string['issuerloginscopesoffline_help'] = 'ہر OAuth سسٹم آف لائن رسائی کی درخواست کرنے کا ایک مختلف طریقہ بیان کرتا ہے۔ جیسے مائیکروسافٹ کو ایک اضافی دائرہ کار "آف لائن_ رسائی" کی ضرورت ہے۔';
$string['issuername'] = 'نام';
$string['issuername_help'] = 'شناخت جاری کرنے والے کا نام۔ لاگ ان صفحہ پر دکھایا جا سکتا ہے۔';
$string['issuerrequireconfirmation'] = 'ای میل کی توثیق کی ضرورت ہے';
$string['issuerrequireconfirmation_help'] = 'تقاضہ کرتا ہے کہ تمام صارفین اپنے ای میل ایڈریس کی تصدیق کریں اس سے پہلے کہ وہ OAuth کے ساتھ لاگ ان ہوں۔ یہ لاگ ان کے عمل کے حصے کے طور پر نئے بنائے گئے اکاؤنٹس پر لاگو ہوتا ہے، یا جب ایک موجودہ موڈل اکاؤنٹ مماثل ای میل پتوں کے ذریعے OAuth لاگ ان سے منسلک ہوتا ہے۔';
$string['issuers'] = 'جاری کرنے والے';
$string['issuersetup'] = 'عام OAuth 2 سروسز کو ترتیب دینے کے بارے میں تفصیلی ہدایات';
$string['issuersetuptype'] = '{$a} OAuth 2 فراہم کنندہ کو ترتیب دینے کے بارے میں تفصیلی ہدایات';
$string['issuershowonloginpage'] = 'لاگ ان پیج پر دکھائیں';
$string['issuershowonloginpage_help'] = 'اگر OAuth 2 تصدیقی پلگ ان فعال ہے، تو اس لاگ ان جاری کنندہ کو لاگ ان صفحہ پر درج کیا جائے گا تاکہ صارفین اس جاری کنندہ کے اکاؤنٹس کے ساتھ لاگ ان کرسکیں۔';
$string['issuersservicesallow'] = 'خدمات کی اجازت دیں';
$string['issuersservicesnotallow'] = 'خدمات کی اجازت نہ دیں';
$string['issuerusedforinternal'] = 'اندرونی خدمات';
$string['issuerusedforlogin'] = 'لاگ ان کریں';
$string['issuerusein'] = 'یہ سروس استعمال کی جائے گی';
$string['issuerusein_help'] = 'OAuth 2 خدمات داخلی خدمات کے لیے، لاگ ان صفحہ پر، یا دونوں، اگر ضرورت ہو تو استعمال کی جا سکتی ہیں۔';
$string['issueruseineverywhere'] = 'لاگ ان صفحہ اور اندرونی خدمات';
$string['issueruseininternalonly'] = 'صرف اندرونی خدمات';
$string['issueruseinloginonly'] = 'صرف لاگ ان صفحہ';
$string['linkedin_service'] = 'لنکڈ ان';
$string['logindisplay'] = 'لاگ ان پیج پر بطور ڈسپلے کریں';
$string['loginissuer'] = 'لاگ ان کی اجازت دیں';
$string['microsoft_service'] = 'مائیکروسافٹ';
$string['nextcloud_service'] = 'نیکسٹ کلاؤڈ';
$string['notconfigured'] = 'کنفیگر نہیں ہے';
$string['notdiscovered'] = 'سروس کی دریافت کامیاب نہیں ہوئی';
$string['notloginissuer'] = 'لاگ ان کی اجازت نہ دیں';
$string['pluginname'] = 'OAuth 2 سروسز';
$string['privacy:metadata'] = 'OAuth 2 سروسز پلگ ان کوئی ذاتی ڈیٹا اسٹور نہیں کرتا ہے۔';
$string['savechanges'] = 'تبدیلیاں محفوظ کرو';
$string['serviceshelp'] = 'سروس فراہم کنندہ کے سیٹ اپ کی ہدایات۔';
$string['systemaccountconnected'] = 'سسٹم اکاؤنٹ منسلک ہے';
$string['systemaccountconnected_help'] = 'سسٹم اکاؤنٹس کا استعمال پلگ انز کے لیے جدید فعالیت فراہم کرنے کے لیے کیا جاتا ہے۔ ان کی ضرورت صرف لاگ ان فعالیت کے لیے نہیں ہے، لیکن OAuth سروس استعمال کرنے والے دیگر پلگ ان خصوصیات کا کم سیٹ پیش کر سکتے ہیں اگر سسٹم اکاؤنٹ منسلک نہیں ہے۔ مثال کے طور پر ریپوزٹریز فائل آپریشنز کرنے کے لیے سسٹم اکاؤنٹ کے بغیر "کنٹرولڈ لنکس" کو سپورٹ نہیں کر سکتیں۔';
$string['systemaccountnotconnected'] = 'سسٹم اکاؤنٹ منسلک نہیں ہے';
$string['systemauthstatus'] = 'سسٹم اکاؤنٹ منسلک ہے';
$string['usebasicauth'] = 'HTTP ہیڈر کے ذریعے ٹوکن کی درخواستوں کی تصدیق کریں';
$string['usebasicauth_help'] = 'ریفریش ٹوکن کی درخواست کے ساتھ کلائنٹ آئی ڈی اور پاس ورڈ بھیجتے وقت HTTP بنیادی تصدیقی اسکیم کا استعمال کریں۔ OAuth 2 معیار کے ذریعہ تجویز کردہ، لیکن کچھ جاری کنندگان کے ساتھ دستیاب نہیں ہوسکتا ہے۔';
$string['userfieldexternalfield'] = 'بیرونی فیلڈ کا نام';
$string['userfieldexternalfield_error'] = 'اس فیلڈ میں HTML شامل نہیں ہو سکتا۔';
$string['userfieldexternalfield_help'] = 'بیرونی OAuth سسٹم کے ذریعے فراہم کردہ فیلڈ کا نام۔';
$string['userfieldinternalfield'] = 'اندرونی فیلڈ کا نام';
$string['userfieldinternalfield_help'] = 'موڈل صارف فیلڈ کا نام جو بیرونی فیلڈ سے میپ کیا جانا چاہئے۔';
$string['userfieldmappingdeleted'] = 'صارف کی فیلڈ میپنگ کو حذف کر دیا گیا';
$string['userfieldmappingsforissuer'] = 'جاری کنندہ کے لیے صارف کی فیلڈ میپنگ: {$a}';
