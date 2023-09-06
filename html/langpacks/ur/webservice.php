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
 * Strings for component 'webservice', language 'ur', version '4.1'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'رسائی کنٹرول استثناء';
$string['actwebserviceshhdr'] = 'فعال ویب سروس پروٹوکول';
$string['addaservice'] = 'سروس شامل کریں';
$string['addcapabilitytousers'] = 'صارفین کی صلاحیت کو چیک کریں';
$string['addcapabilitytousersdescription'] = 'صارفین کے پاس دو صلاحیتیں ہونی چاہئیں - webservice:createtoken اور استعمال شدہ پروٹوکول سے مماثل ایک صلاحیت، مثال کے طور پر webservice/rest:use، webservice/soap:use۔ اس کو حاصل کرنے کے لیے، اجازت دی گئی مناسب صلاحیتوں کے ساتھ ویب سروسز کا رول بنائیں اور اسے ویب سروسز کے صارف کو سسٹم رول کے طور پر تفویض کریں۔';
$string['addfunction'] = 'فنکشن شامل کریں';
$string['addfunctionhelp'] = 'سروس میں شامل کرنے کے لیے فنکشن کو منتخب کریں۔';
$string['addfunctions'] = 'افعال شامل کریں';
$string['addfunctionsdescription'] = 'نئی تخلیق شدہ سروس کے لیے مطلوبہ فنکشنز منتخب کریں۔';
$string['addrequiredcapability'] = 'مطلوبہ صلاحیت کو تفویض/غیر تفویض کریں';
$string['addservice'] = 'ایک نئی سروس شامل کریں: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'سروس "{$a}" میں فنکشنز شامل کریں';
$string['allusers'] = 'تمام صارفین';
$string['apiexplorer'] = 'API ایکسپلورر';
$string['apiexplorernotavalaible'] = 'API ایکسپلورر ابھی تک دستیاب نہیں ہے۔';
$string['arguments'] = 'دلائل';
$string['authmethod'] = 'تصدیق کا طریقہ';
$string['callablefromajax'] = 'AJAX سے کال کی جا سکتی ہے';
$string['cannotcreatetoken'] = 'سروس {$a} کے لیے ویب سروس ٹوکن بنانے کی اجازت نہیں ہے۔';
$string['cannotgetcoursecontents'] = 'کورس کے مواد حاصل نہیں کر سکتے';
$string['checkusercapability'] = 'صارف کی صلاحیت کو چیک کریں';
$string['checkusercapabilitydescription'] = 'استعمال کنندہ کے پاس استعمال شدہ پروٹوکول کے مطابق مناسب صلاحیتیں ہونی چاہئیں، مثال کے طور پر webservice/rest:use، webservice/soap:use۔ اس کو حاصل کرنے کے لیے، پروٹوکول کی اجازت کے ساتھ ویب سروسز کا رول بنائیں اور اسے ویب سروسز کے صارف کو سسٹم رول کے طور پر تفویض کریں۔';
$string['configwebserviceplugins'] = 'سیکورٹی وجوہات کی بناء پر، صرف پروٹوکولز کو فعال کیا جانا چاہئے جو استعمال میں ہیں۔';
$string['context'] = 'سیاق و سباق';
$string['createservicedescription'] = 'سروس ویب سروس کے افعال کا ایک مجموعہ ہے۔ آپ صارف کو ایک نئی سروس تک رسائی کی اجازت دیں گے۔ <strong>سروس شامل کریں</strong> صفحہ پر \'فعال کریں\' اور \'مجاز صارفین\' کے اختیارات کو چیک کریں۔ \'کوئی مطلوبہ صلاحیت نہیں\' کو منتخب کریں۔';
$string['createserviceforusersdescription'] = 'سروس ویب سروس کے افعال کا ایک مجموعہ ہے۔ آپ صارفین کو ایک نئی سروس تک رسائی کی اجازت دیں گے۔ <strong>سروس شامل کریں</strong> صفحہ پر \'فعال کریں\' کو چیک کریں اور \'مجاز صارفین کے اختیارات کو غیر نشان زد کریں۔ \'کوئی مطلوبہ صلاحیت نہیں\' کو منتخب کریں۔';
$string['createtoken'] = 'ٹوکن بنائیں';
$string['createtokenforuser'] = 'صارف کے لیے ایک ٹوکن بنائیں';
$string['createtokenforuserdescription'] = 'ویب سروسز کے صارف کے لیے ایک ٹوکن بنائیں۔';
$string['createuser'] = 'ایک مخصوص صارف بنائیں';
$string['createuserdescription'] = 'موڈل کو کنٹرول کرنے والے سسٹم کی نمائندگی کرنے کے لیے ویب سروسز کے صارف کی ضرورت ہوتی ہے۔';
$string['criteriaerror'] = 'کسوٹی پر تلاش کرنے کی اجازتیں غائب ہیں۔';
$string['default'] = '"{$a}" پر ڈیفالٹ';
$string['deleteaservice'] = 'سروس کو حذف کریں';
$string['deleteservice'] = 'سروس کو حذف کریں: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'کسی سروس کو حذف کرنے سے اس سروس سے متعلق ٹوکن بھی حذف ہو جائیں گے۔ کیا آپ واقعی بیرونی سروس "{$a}" کو حذف کرنا چاہتے ہیں؟';
$string['deletetokenconfirm'] = 'کیا آپ واقعی <strong>{$a->service}</strong> پر <strong>{$a->user}</strong> کے لیے اس ویب سروس ٹوکن کو حذف کرنا چاہتے ہیں؟';
$string['disabledwarning'] = 'تمام ویب سروس پروٹوکول غیر فعال ہیں۔ "ویب سروسز کو فعال کریں" کی ترتیب اعلی درجے کی خصوصیات میں مل سکتی ہے۔';
$string['doc'] = 'دستاویزی';
$string['docaccessrefused'] = 'آپ کو اس ٹوکن کے لیے دستاویزات دیکھنے کی اجازت نہیں ہے';
$string['downloadfiles'] = 'فائلیں ڈاؤن لوڈ کر سکتے ہیں';
$string['downloadfiles_help'] = 'فعال ہونے پر، کوئی بھی صارف اپنی سیکیورٹی کلید کے ساتھ فائلیں ڈاؤن لوڈ کر سکتا ہے۔ یقیناً وہ ان فائلوں تک ہی محدود ہیں جن کی انہیں سائٹ میں ڈاؤن لوڈ کرنے کی اجازت ہے۔';
$string['editaservice'] = 'سروس میں ترمیم کریں';
$string['editservice'] = 'سروس میں ترمیم کریں: {$a->name} (id: {$a->id})';
$string['enabled'] = 'فعال';
$string['enabledocumentation'] = 'ڈویلپر دستاویزات کو فعال کریں';
$string['enabledocumentationdescription'] = 'فعال پروٹوکولز کے لیے تفصیلی ویب سروسز دستاویزات دستیاب ہیں۔';
$string['enableprotocols'] = 'پروٹوکولز کو فعال کریں';
$string['enableprotocolsdescription'] = 'کم از کم ایک پروٹوکول فعال ہونا چاہیے۔ حفاظتی وجوہات کی بناء پر، صرف پروٹوکول کو ہی فعال کیا جانا چاہیے۔';
$string['enablews'] = 'ویب سروسز کو فعال کریں';
$string['enablewsdescription'] = 'ویب سروسز کو ایڈوانسڈ فیچرز میں فعال کیا جانا چاہیے۔';
$string['entertoken'] = 'سیکیورٹی کلید/ٹوکن درج کریں:';
$string['error'] = 'خرابی: {$a}';
$string['errorcatcontextnotvalid'] = 'آپ زمرہ کے سیاق و سباق میں افعال انجام نہیں دے سکتے ہیں (زمرہ id:{$a->catid})۔ سیاق و سباق کی خرابی کا پیغام یہ تھا: {$a->message}';
$string['errorcodes'] = 'غلطی کا پیغام';
$string['errorcoursecontextnotvalid'] = 'آپ کورس کے سیاق و سباق (کورس id:{$a->courseid}) میں فنکشنز کو انجام نہیں دے سکتے۔ سیاق و سباق کی خرابی کا پیغام یہ تھا: {$a->message}';
$string['errorinvalidparam'] = 'پیرم "{$a}" غلط ہے۔';
$string['errornotemptydefaultparamarray'] = '\'{$a}\' نامی ویب سروس کی تفصیل کا پیرامیٹر ایک یا ایک سے زیادہ ڈھانچہ ہے۔ ڈیفالٹ صرف خالی صف ہو سکتی ہے۔ ویب سروس کی تفصیل چیک کریں۔';
$string['erroroptionalparamarray'] = '\'{$a}\' نامی ویب سروس کی تفصیل کا پیرامیٹر ایک یا ایک سے زیادہ ڈھانچہ ہے۔ اسے VALUE_OPTIONAL کے بطور سیٹ نہیں کیا جا سکتا۔ ویب سروس کی تفصیل چیک کریں۔';
$string['eventwebservicefunctioncalled'] = 'ویب سروس فنکشن کہا جاتا ہے';
$string['eventwebserviceloginfailed'] = 'ویب سروس لاگ ان ناکام ہو گیا';
$string['eventwebserviceservicecreated'] = 'ویب سروس بنائی گئی';
$string['eventwebserviceservicedeleted'] = 'ویب سروس حذف کر دی گئی';
$string['eventwebserviceserviceupdated'] = 'ویب سروس کو اپ ڈیٹ کر دیا گیا';
$string['eventwebserviceserviceuseradded'] = 'ویب سروس صارف کو شامل کیا گیا';
$string['eventwebserviceserviceuserremoved'] = 'ویب سروس صارف کو ہٹا دیا گیا';
$string['eventwebservicetokencreated'] = 'ویب سروس ٹوکن بنایا گیا';
$string['eventwebservicetokensent'] = 'ویب سروس ٹوکن بھیج دیا گیا';
$string['execute'] = 'ایگزیکٹ';
$string['executewarnign'] = 'انتباہ: اگر آپ ایگزیکٹ کو دبائیں گے تو آپ کے ڈیٹا بیس میں ترمیم ہو جائے گی اور تبدیلیاں خود بخود واپس نہیں جا سکتیں!';
$string['externalservice'] = 'بیرونی سروس';
$string['externalservicefunctions'] = 'بیرونی خدمات کے افعال';
$string['externalservices'] = 'بیرونی خدمات';
$string['externalserviceusers'] = 'بیرونی سروس استعمال کرنے والے';
$string['failedtolog'] = 'لاگ ان کرنے میں ناکام';
$string['filenameexist'] = 'فائل کا نام پہلے سے موجود ہے: {$a}';
$string['forbiddenwsuser'] = 'غیر تصدیق شدہ، حذف شدہ، معطل یا مہمان صارف کے لیے ٹوکن نہیں بنا سکتے۔';
$string['function'] = 'فنکشن';
$string['functions'] = 'فنکشنز';
$string['generalstructure'] = 'جنرل سٹرکچر';
$string['information'] = 'معلومات';
$string['installexistingserviceshortnameerror'] = 'مختصر نام "{$a}" کے ساتھ ایک ویب سروس پہلے سے موجود ہے۔ اس مختصر نام کے ساتھ ایک مختلف ویب سروس کو انسٹال/اپ ڈیٹ نہیں کر سکتے۔';
$string['installserviceshortnameerror'] = 'کوڈنگ کی خرابی: سروس کا مختصر نام "{$a}" صرف حروف عددی حروف (حروف اور اعداد)، انڈر سکور (_)، ہائفن (-) یا فل سٹاپ (.) پر مشتمل ہو سکتا ہے';
$string['invalidextparam'] = 'غلط بیرونی api پیرامیٹر: {$a}';
$string['invalidextresponse'] = 'غلط بیرونی API جواب: {$a}';
$string['invalidiptoken'] = 'غلط ٹوکن - آپ کا IP تعاون یافتہ نہیں ہے';
$string['invalidtimedtoken'] = 'غلط ٹوکن - ٹوکن کی میعاد ختم ہو گئی';
$string['invalidtoken'] = 'غلط ٹوکن - ٹوکن نہیں ملا';
$string['iprestriction'] = 'آئی پی پابندی';
$string['iprestriction_help'] = 'صارف کو درج کردہ IPs سے ویب سروس کو کال کرنے کی ضرورت ہوگی (کوما سے الگ)۔';
$string['key'] = 'کلید';
$string['keyshelp'] = 'کلید بیرونی ایپلی کیشنز سے آپ کے Moodle اکاؤنٹ تک رسائی کے لیے استعمال ہوتی ہیں۔';
$string['loginrequired'] = 'لاگ ان صارفین تک محدود';
$string['manageprotocols'] = 'پروٹوکول کا انتظام کریں';
$string['managetokens'] = 'ٹوکنز کا نظم کریں';
$string['missingcaps'] = 'صلاحیتوں کی کمی';
$string['missingcaps_help'] = 'سروس کے ذریعہ اعلان کردہ صلاحیتوں کی فہرست جو صارف کے پاس نہیں ہے۔ کچھ سروس کی فعالیت ان صلاحیتوں کے بغیر دستیاب نہیں ہوسکتی ہے۔';
$string['missingpassword'] = 'پاس ورڈ غائب ہے';
$string['missingrequiredcapability'] = 'اہلیت {$a} درکار ہے۔';
$string['missingusername'] = 'غائب صارف نام';
$string['missingversionfile'] = 'کوڈنگ کی خرابی: جزو {$a} کے لیے version.php فائل غائب ہے';
$string['nameexists'] = 'یہ نام پہلے سے ہی دوسری سروس کے زیر استعمال ہے';
$string['nocapabilitytouseparameter'] = 'صارف کے پاس پیرامیٹر {$a} استعمال کرنے کی مطلوبہ صلاحیت نہیں ہے';
$string['nofunctions'] = 'اس سروس کا کوئی کام نہیں ہے۔';
$string['norequiredcapability'] = 'مطلوبہ صلاحیت نہیں';
$string['notoken'] = 'ٹوکن لسٹ خالی ہے۔';
$string['onesystemcontrolling'] = 'ایک بیرونی نظام کو موڈل کو کنٹرول کرنے کی اجازت دیں';
$string['onesystemcontrollingdescription'] = 'مندرجہ ذیل اقدامات آپ کو Moodle ویب سروسز کو ترتیب دینے میں مدد کرتے ہیں تاکہ بیرونی نظام کو Moodle کے ساتھ بات چیت کرنے کی اجازت دی جا سکے۔ اس میں ٹوکن (سیکیورٹی کلید) توثیق کا طریقہ ترتیب دینا شامل ہے۔';
$string['onlyseecreatedtokens'] = 'آپ صرف وہی ٹوکن دیکھ سکتے ہیں جو آپ نے بنائے ہیں۔';
$string['operation'] = 'آپریشن';
$string['optional'] = 'آپریشنل';
$string['passwordisexpired'] = 'پاس ورڈ کی میعاد ختم ہو گئی ہے۔';
$string['phpparam'] = 'XML-RPC (PHP ڈھانچہ)';
$string['phpresponse'] = 'XML-RPC (PHP ڈھانچہ)';
$string['postrestparam'] = 'پی ایچ پی کوڈ برائے REST (پوسٹ درخواست)';
$string['potusers'] = 'مجاز صارفین نہیں';
$string['potusersmatching'] = 'مماثل مجاز صارفین نہیں ہیں';
$string['print'] = 'تمام پرنٹ کریں';
$string['privacy:metadata:serviceusers'] = 'ان صارفین کی فہرست جو ایک مخصوص بیرونی سروس استعمال کر سکتے ہیں';
$string['privacy:metadata:serviceusers:iprestriction'] = 'آئی پی سروس استعمال کرنے کے لیے محدود ہے';
$string['privacy:metadata:serviceusers:timecreated'] = 'وہ تاریخ جب ریکارڈ بنایا گیا تھا';
$string['privacy:metadata:serviceusers:userid'] = 'صارف کی شناخت';
$string['privacy:metadata:serviceusers:validuntil'] = 'وہ تاریخ جب تک اجازت درست ہے';
$string['privacy:metadata:tokens'] = 'ویب سروسز یا موبائل ایپلیکیشنز کے ذریعے موڈل کے ساتھ تعامل کے لیے ٹوکنز کا ریکارڈ۔';
$string['privacy:metadata:tokens:creatorid'] = 'ٹوکن بنانے والے صارف کی ID';
$string['privacy:metadata:tokens:iprestriction'] = 'IP اس ٹوکن کو استعمال کرنے کے لیے محدود ہے';
$string['privacy:metadata:tokens:lastaccess'] = 'وہ تاریخ جب ٹوکن آخری بار استعمال کیا گیا تھا';
$string['privacy:metadata:tokens:privatetoken'] = 'ایک زیادہ پرائیویٹ ٹوکن کبھی کبھار کچھ کارروائیوں کی توثیق کرنے کے لیے استعمال ہوتا ہے، جیسے SSO';
$string['privacy:metadata:tokens:timecreated'] = 'وہ تاریخ جب ٹوکن بنایا گیا تھا';
$string['privacy:metadata:tokens:token'] = 'صارف کا ٹوکن';
$string['privacy:metadata:tokens:tokentype'] = 'ٹوکن کی قسم';
$string['privacy:metadata:tokens:userid'] = 'اس صارف کی ID جس کا ٹوکن یہ ہے';
$string['privacy:metadata:tokens:validuntil'] = 'وہ تاریخ جب تک ٹوکن درست ہے';
$string['privacy:request:notexportedsecurity'] = 'سیکیورٹی وجوہات کی بنا پر برآمد نہیں کیا گیا';
$string['protocol'] = 'پروٹوکول';
$string['removefunction'] = 'ہٹانا';
$string['removefunctionconfirm'] = 'کیا آپ واقعی "{$a->function}" کو سروس "{$a->service}" سے ہٹانا چاہتے ہیں؟';
$string['requireauthentication'] = 'اس طریقہ کے لیے xxx کی اجازت کے ساتھ تصدیق کی ضرورت ہے۔';
$string['required'] = 'درکار ہے';
$string['requiredcapability'] = 'مطلوبہ صلاحیت';
$string['requiredcapability_help'] = 'اگر سیٹ ہو تو صرف مطلوبہ صلاحیت کے حامل صارفین ہی سروس تک رسائی حاصل کر سکتے ہیں۔';
$string['requiredcaps'] = 'مطلوبہ صلاحیتیں';
$string['resettokencomplete'] = 'منتخب کردہ ٹوکن دوبارہ ترتیب دیا گیا تھا';
$string['resettokenconfirm'] = 'کیا آپ واقعی اس ویب سروس کلید کو <strong>{$a->service}</strong> پر <strong>{$a->user}</strong> کے لیے دوبارہ ترتیب دینا چاہتے ہیں؟';
$string['resettokenconfirmsimple'] = 'کیا آپ واقعی اس کلید کو دوبارہ ترتیب دینا چاہتے ہیں؟ پرانی کلید پر مشتمل کوئی بھی محفوظ کردہ لنکس اب کام نہیں کریں گے۔';
$string['response'] = 'جواب';
$string['restcode'] = 'ریسٹ';
$string['restexception'] = 'ریسٹ';
$string['restoredaccountresetpassword'] = 'بحال شدہ اکاؤنٹ کو ٹوکن حاصل کرنے سے پہلے پاس ورڈ کو دوبارہ ترتیب دینے کی ضرورت ہے۔';
$string['restparam'] = 'ریسٹ (پوسٹ پیرامیٹرز)';
$string['restrictedusers'] = 'صرف مجاز صارفین';
$string['restrictedusers_help'] = 'یہ ترتیب اس بات کا تعین کرتی ہے کہ آیا ویب سروسز ٹوکن بنانے کی اجازت کے حامل تمام صارفین اپنے سیکیورٹی کیز کے صفحہ کے ذریعے اس سروس کے لیے ٹوکن تیار کر سکتے ہیں یا صرف مجاز صارفین ہی ایسا کر سکتے ہیں۔';
$string['securitykey'] = 'سیکیورٹی کلید (ٹوکن)';
$string['securitykeys'] = 'سیکیورٹی کلید';
$string['selectauthorisedusers'] = 'مجاز صارفین کو منتخب کریں';
$string['selectedcapability'] = 'منتخب شدہ';
$string['selectedcapabilitydoesntexit'] = 'فی الحال سیٹ کی گئی مطلوبہ صلاحیت ({$a}) مزید موجود نہیں ہے۔ براہ کرم اسے تبدیل کریں اور تبدیلیوں کو محفوظ کریں۔';
$string['selectservice'] = 'ایک سروس منتخب کریں';
$string['selectspecificuser'] = 'ایک مخصوص صارف کو منتخب کریں';
$string['selectspecificuserdescription'] = 'ویب سروسز کے صارف کو ایک مجاز صارف کے طور پر شامل کریں۔';
$string['service'] = 'سروس';
$string['servicehelpexplanation'] = 'سروس افعال کا ایک مجموعہ ہے۔ ایک سروس تک تمام صارفین یا صرف مخصوص صارفین کے ذریعہ رسائی حاصل کی جاسکتی ہے۔';
$string['servicename'] = 'سروس کا نام';
$string['servicenotavailable'] = 'ویب سروس دستیاب نہیں ہے۔ (یہ موجود نہیں ہے یا اسے غیر فعال کیا جا سکتا ہے۔)';
$string['servicerequireslogin'] = 'ویب سروس دستیاب نہیں ہے۔ (سیشن لاگ آؤٹ ہو چکا ہے یا ختم ہو چکا ہے۔)';
$string['servicesbuiltin'] = 'بلٹ ان سروسز';
$string['servicescustom'] = 'مخصوص سروسز';
$string['serviceusers'] = 'مجاز صارفین';
$string['serviceusersettings'] = 'صارف کی ترتیبات';
$string['serviceusersmatching'] = 'مجاز صارفین کے ملاپ';
$string['serviceuserssettings'] = 'مجاز صارفین کے لیے سیٹنگز تبدیل کریں';
$string['shortnametaken'] = 'مختصر نام پہلے ہی کسی دوسری سروس کے لیے استعمال کیا جا چکا ہے ({$a})';
$string['simpleauthlog'] = 'سادہ توثیق لاگ ان';
$string['step'] = 'قدم';
$string['supplyinfo'] = 'مزید تفصیلات';
$string['testauserwithtestclientdescription'] = 'ویب سروس ٹیسٹ کلائنٹ کا استعمال کرتے ہوئے سروس تک بیرونی رسائی کی تقلید کریں۔ ایسا کرنے سے پہلے، moodle/webservice:createtoken کی صلاحیت کے ساتھ بطور صارف لاگ ان ہوں اور صارف کی ترجیحات کے صفحہ کے ذریعے سیکیورٹی کلید (ٹوکن) حاصل کریں۔ آپ اس ٹوکن کو ٹیسٹ کلائنٹ میں استعمال کریں گے۔ ٹیسٹ کلائنٹ میں، ٹوکن کی تصدیق کے ساتھ ایک فعال پروٹوکول بھی منتخب کریں۔ <strong>انتباہ: آپ جن فنکشنز کی جانچ کرتے ہیں وہ اس صارف کے لیے کیے جائیں گے، لہذا محتاط رہیں کہ آپ کیا جانچنے کا انتخاب کرتے ہیں!</strong>';
$string['testclient'] = 'ویب سروس ٹیسٹ کلائنٹ';
$string['testclientdescription'] = '* ویب سروس ٹیسٹ کلائنٹ <strong>حقیقی</strong> کے افعال کو <strong>عمل کرتا ہے</strong>۔ ایسے افعال کی جانچ نہ کریں جو آپ نہیں جانتے ہیں۔ <br/>* تمام موجودہ ویب سروس فنکشنز ابھی تک ٹیسٹ کلائنٹ میں لاگو نہیں ہوئے ہیں۔ <br/>* یہ چیک کرنے کے لیے کہ صارف کچھ فنکشنز تک رسائی حاصل نہیں کرسکتا، آپ کچھ فنکشنز کی جانچ کر سکتے ہیں جن کی آپ نے اجازت نہیں دی۔<br/>* واضح ایرر میسیجز دیکھنے کے لیے ڈیبگنگ کو <strong>{$a- پر سیٹ کریں۔ >mode</strong> کو {$a->atag} میں۔';
$string['testwithtestclient'] = 'سروس کی جانچ کریں';
$string['testwithtestclientdescription'] = 'ویب سروس ٹیسٹ کلائنٹ کا استعمال کرتے ہوئے سروس تک بیرونی رسائی کی تقلید کریں۔ ٹوکن کی تصدیق کے ساتھ ایک فعال پروٹوکول استعمال کریں۔ <strong>انتباہ: آپ جن فنکشنز کی جانچ کرتے ہیں ان پر عمل درآمد کیا جائے گا، لہذا محتاط رہیں کہ آپ کس چیز کو جانچنے کا انتخاب کرتے ہیں!</strong>';
$string['token'] = 'ٹوکن';
$string['tokenauthlog'] = 'ٹوکن کی تصدیق';
$string['tokencreatedbyadmin'] = 'صرف منتظم کے ذریعہ دوبارہ ترتیب دیا جاسکتا ہے (*)';
$string['tokencreator'] = 'تخلیق کار';
$string['tokenfilter'] = 'ٹوکن فلٹر';
$string['tokenfilterreset'] = 'تمام ٹوکن دکھائیں';
$string['tokenfiltersubmit'] = 'صرف مماثل ٹوکن دکھائیں';
$string['unknownoptionkey'] = 'نامعلوم آپشن کلید ({$a})';
$string['unnamedstringparam'] = 'ایک سٹرنگ پیرامیٹر بے نام ہے۔';
$string['updateusersettings'] = 'اپ ڈیٹ';
$string['uploadfiles'] = 'فائلیں اپ لوڈ کر سکتے ہیں';
$string['uploadfiles_help'] = 'اگر فعال ہو تو، کوئی بھی صارف اپنی سیکیورٹی کلید کے ساتھ فائلوں کو اپنے ذاتی فائلز ایریا یا ڈرافٹ فائل ایریا میں اپ لوڈ کر سکتا ہے۔ کوئی بھی صارف فائل کوٹہ لاگو ہوتا ہے۔';
$string['userasclients'] = 'ٹوکن کے ساتھ کلائنٹ کے طور پر صارفین';
$string['userasclientsdescription'] = 'مندرجہ ذیل اقدامات صارفین کے لیے موڈل ویب سروس کو بطور کلائنٹ ترتیب دینے میں آپ کی مدد کرتے ہیں۔ یہ اقدامات تجویز کردہ ٹوکن (سیکیورٹی کلید) کی تصدیق کے طریقہ کار کو ترتیب دینے میں بھی مدد کرتے ہیں۔ اس استعمال کی صورت میں، صارف اپنی ترجیحات کے صفحہ کے ذریعے سیکیورٹی کلید کے صفحہ سے اپنا ٹوکن تیار کرے گا۔';
$string['usermissingcaps'] = 'غائب صلاحیتیں: {$a}';
$string['usernameorid'] = 'صارف نام / صارف آئی ڈی';
$string['usernameorid_help'] = 'صارف نام یا صارف کی شناخت درج کریں۔';
$string['usernameoridnousererror'] = 'اس صارف نام/یوزر آئی ڈی کے ساتھ کوئی صارف نہیں ملا۔';
$string['usernameoridoccurenceerror'] = 'اس صارف نام کے ساتھ ایک سے زیادہ صارف ملے۔ براہ کرم صارف کی شناخت درج کریں۔';
$string['usernotallowed'] = 'صارف کو اس سروس کی اجازت نہیں ہے۔ پہلے آپ کو اس صارف کو {$a} کے اجازت یافتہ صارفین کے انتظامی صفحہ پر اجازت دینی ہوگی۔';
$string['userservices'] = 'صارف کی خدمات: {$a}';
$string['usersettingssaved'] = 'صارف کی ترتیبات محفوظ ہو گئیں';
$string['validuntil'] = 'قابل قبول جب تک';
$string['validuntil_help'] = 'اگر سیٹ ہو تو اس صارف کے لیے اس تاریخ کے بعد سروس غیر فعال ہو جائے گی۔';
$string['webservice'] = 'ویب سروس';
$string['webservices'] = 'ویب سروسز';
$string['webservicesoverview'] = 'جائزہ';
$string['webservicetokens'] = 'ویب سروس ٹوکنز';
$string['wrongusernamepassword'] = 'غلط استعملاتی نام یا خفیہ کوڈ';
$string['wsaccessuserdeleted'] = 'حذف شدہ صارف نام کے لیے ویب سروس تک رسائی سے انکار کر دیا گیا: {$a}';
$string['wsaccessuserexpired'] = 'پاس ورڈ کے لیے ویب سروس تک رسائی سے انکار کر دیا گیا صارف نام: {$a}';
$string['wsaccessusernologin'] = 'بغیر لاگ ان تصدیق کے صارف نام کے لیے ویب سروس تک رسائی سے انکار کر دیا: {$a}';
$string['wsaccessusersuspended'] = 'معطل شدہ صارف نام کے لیے ویب سروس تک رسائی سے انکار کر دیا: {$a}';
$string['wsaccessuserunconfirmed'] = 'غیر تصدیق شدہ صارف نام کے لیے ویب سروس تک رسائی سے انکار کر دیا: {$a}';
$string['wsclientdoc'] = 'موڈل ویب سروس کلائنٹ دستاویزات';
$string['wsdocapi'] = 'API دستاویزات';
$string['wsdocumentation'] = 'ویب سروس دستاویزات';
$string['wsdocumentationdisable'] = 'ویب سروس کی دستاویزات غیر فعال ہیں۔';
$string['wsdocumentationintro'] = 'ایک کلائنٹ بنانے کے لیے ہم آپ کو {$a->doclink} پڑھنے کا مشورہ دیتے ہیں';
$string['wsdocumentationlogin'] = 'یا اپنی ویب سروس کا صارف نام اور پاس ورڈ درج کریں:';
$string['wspassword'] = 'ویب سروس کا پاس ورڈ';
$string['wsusername'] = 'ویب سروس کا صارف نام';
