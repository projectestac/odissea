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
 * Strings for component 'enrol_imsenterprise', language 'ur', version '4.4'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'ایک بار جب آپ اپنی ترتیبات کو محفوظ کر لیتے ہیں، تو آپ چاہیں گے';
$string['allowunenrol'] = 'IMS ڈیٹا کو طلباء/اساتذہ کو <strong>اندراج ختم کرنے</strong> کی اجازت دیں';
$string['allowunenrol_desc'] = 'فعال ہونے پر، انٹرپرائز ڈیٹا میں بیان ہونے پر کورس کے اندراجات کو ہٹا دیا جائے گا۔';
$string['basicsettings'] = 'بنیادی ترتیبات';
$string['categoryidnumber'] = 'زمرہ کے شناختی نمبر کی اجازت دیں';
$string['categoryidnumber_desc'] = 'اگر فعال ہو گیا تو IMS انٹرپرائز آئی ڈی نمبر کے ساتھ زمرہ بنائے گا';
$string['categoryseparator'] = 'زمرہ الگ کرنے والا کردار';
$string['categoryseparator_desc'] = 'جب "زمرہ کا شناختی نمبر" فعال ہو تو درکار ہے۔ زمرہ کے نام اور شناختی نمبر کو الگ کرنے کے لیے کریکٹر۔';
$string['coursesettings'] = 'کورس کے ڈیٹا کے اختیارات';
$string['createnewcategories'] = 'اگر موڈل میں نہیں ملے تو نئے (چھپے ہوئے) کورس کے زمرے بنائیں';
$string['createnewcategories_desc'] = 'اگر &lt;org&gt;&lt;orgunit&gt; عنصر کسی کورس کے آنے والے ڈیٹا میں موجود ہوتا ہے، اس کا مواد کسی زمرے کی وضاحت کے لیے استعمال کیا جائے گا اگر کورس کو شروع سے بنانا ہے۔ پلگ ان موجودہ کورسز کی دوبارہ درجہ بندی نہیں کرے گا۔ اگر مطلوبہ نام کے ساتھ کوئی زمرہ موجود نہیں ہے، تو ایک پوشیدہ زمرہ بن جائے گا۔';
$string['createnewcourses'] = 'اگر موڈل میں نہ ملے تو نئے (پوشیدہ) کورسز بنائیں';
$string['createnewcourses_desc'] = 'اگر فعال ہو تو، آئی ایم ایس انٹرپرائز انرولمنٹ پلگ ان آئی ایم ایس ڈیٹا میں پائے جانے والے نئے کورسز بنا سکتا ہے لیکن موڈل کے ڈیٹا بیس میں نہیں۔ کوئی بھی نئے بنائے گئے کورسز ابتدائی طور پر پوشیدہ ہوتے ہیں۔';
$string['createnewusers'] = 'ان صارفین کے لیے صارف اکاؤنٹ بنائیں جو ابھی تک موڈل میں رجسٹرڈ نہیں ہیں۔';
$string['createnewusers_desc'] = 'IMS انٹرپرائز اندراج کا ڈیٹا عام طور پر صارفین کے ایک سیٹ کو بیان کرتا ہے۔ اگر فعال ہو تو، موڈل کے ڈیٹا بیس میں نہ پائے جانے والے کسی بھی صارف کے لیے اکاؤنٹس بنائے جا سکتے ہیں۔ صارفین کو پہلے ان کے "idnumber" کے ذریعے تلاش کیا جاتا ہے، اور دوسرا ان کے موڈل صارف نام سے۔ پاس ورڈز IMS انٹرپرائز پلگ ان کے ذریعے درآمد نہیں کیے جاتے ہیں۔ تصدیق کرنے والے صارفین کے لیے توثیقی پلگ ان کے استعمال کی سفارش کی جاتی ہے۔';
$string['cronfrequency'] = 'پروسیسنگ کی فریکوئنسی';
$string['deleteusers'] = 'IMS ڈیٹا میں بیان ہونے پر صارف کے اکاؤنٹس کو حذف کریں';
$string['deleteusers_desc'] = 'اگر فعال ہو تو، IMS انٹرپرائز اندراج کا ڈیٹا صارف کے اکاؤنٹس کو حذف کرنے کی وضاحت کر سکتا ہے (اگر "recstatus" پرچم 3 پر سیٹ کیا گیا ہے، جو اکاؤنٹ کے حذف ہونے کی نمائندگی کرتا ہے)۔ جیسا کہ موڈل میں معیاری ہے، صارف کا ریکارڈ دراصل موڈل کے ڈیٹا بیس سے حذف نہیں ہوتا ہے، لیکن اکاؤنٹ کو حذف شدہ کے بطور نشان زد کرنے کے لیے ایک موڈل لگایا جاتا ہے۔';
$string['doitnow'] = 'ابھی آئی ایم ایس انٹرپرائز کی درآمد انجام دیں';
$string['emptyattribute'] = 'اسے خالی چھوڑ دو';
$string['filelockedmail'] = 'ٹیکسٹ فائل جو آپ IMS-file-based انرولمنٹس ({$a}) کے لیے استعمال کر رہے ہیں اسے cron کے عمل سے حذف نہیں کیا جا سکتا۔ اس کا عام طور پر مطلب ہے کہ اس پر اجازتیں غلط ہیں۔ براہ کرم اجازتوں کو درست کریں تاکہ موڈل فائل کو حذف کر سکے، ورنہ اس پر بار بار کارروائی ہو سکتی ہے۔';
$string['filelockedmailsubject'] = 'اہم خرابی: اندراج فائل';
$string['fixcasepersonalnames'] = 'ذاتی ناموں کو ٹائٹل کیس میں تبدیل کریں';
$string['fixcaseusernames'] = 'صارف ناموں کو لوئر کیس میں تبدیل کریں';
$string['ignore'] = 'نظر انداز کرنا';
$string['importimsfile'] = 'آئی ایم ایس انٹرپرائز فائل درآمد کریں';
$string['imsenterprise:config'] = 'IMS انٹرپرائز کے اندراج کی مثالیں ترتیب دیں';
$string['imsenterprisecrontask'] = 'اندراج فائل پروسیسنگ';
$string['imsrolesdescription'] = 'IMS انٹرپرائز کی تفصیلات میں 8 الگ الگ کردار کی اقسام شامل ہیں۔ براہ کرم منتخب کریں کہ آپ انہیں موڈل میں کیسے تفویض کرنا چاہتے ہیں، بشمول ان میں سے کسی کو نظر انداز کیا جانا چاہیے۔';
$string['location'] = 'فائل کا مقام';
$string['logtolocation'] = 'لاگ فائل آؤٹ پٹ لوکیشن (لاگنگ کے لیے خالی)';
$string['mailadmins'] = 'ایڈمن کو بذریعہ ای میل مطلع کریں';
$string['mailusers'] = 'ای میل کے ذریعے صارفین کو مطلع کریں';
$string['messageprovider:imsenterprise_enrolment'] = 'IMS انٹرپرائز اندراج کے پیغامات';
$string['miscsettings'] = 'متفرق';
$string['nestedcategories'] = 'نیسٹڈ زمروں کی اجازت دیں';
$string['nestedcategories_desc'] = 'اگر فعال کیا گیا تو IMS انٹرپرائز نیسٹڈ زمرے بنائے گا';
$string['pluginname'] = 'IMS انٹرپرائز فائل';
$string['pluginname_desc'] = 'یہ طریقہ آپ کے بتائے ہوئے مقام پر خصوصی طور پر فارمیٹ شدہ ٹیکسٹ فائل کو بار بار چیک کرے گا اور اس پر کارروائی کرے گا۔ فائل کو فرد، گروپ، اور رکنیت XML عناصر پر مشتمل IMS انٹرپرائز کی تصریحات کی پیروی کرنی چاہیے۔';
$string['privacy:metadata'] = 'IMS انٹرپرائز فائل انرولمنٹ پلگ ان کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔';
$string['processphoto'] = 'پروفائل میں صارف کی تصویر کا ڈیٹا شامل کریں';
$string['processphotowarning'] = 'انتباہ: امیج پروسیسنگ سرور پر ایک اہم بوجھ ڈالنے کا امکان ہے۔ آپ کو اس اختیار کو فعال نہ کرنے کی سفارش کی جاتی ہے اگر طلباء کی بڑی تعداد پر کارروائی کی توقع ہے۔';
$string['restricttarget'] = 'صرف اس صورت میں ڈیٹا پر کارروائی کریں جب درج ذیل ہدف کی وضاحت کی گئی ہو';
$string['restricttarget_desc'] = 'ایک IMS انٹرپرائز ڈیٹا فائل کا مقصد متعدد "اہداف" - مختلف LMSes، یا اسکول/یونیورسٹی کے اندر مختلف سسٹمز کے لیے ہو سکتا ہے۔ انٹرپرائز فائل میں یہ بتانا ممکن ہے کہ ڈیٹا کا مقصد ایک یا زیادہ نام والے ٹارگٹ سسٹمز کے لیے ہے، انہیں <properties> ٹیگ کے اندر موجود <target> ٹیگز میں نام دے کر۔ عام طور پر آپ کو اس کے بارے میں فکر کرنے کی ضرورت نہیں ہے۔ سیٹنگ کو خالی چھوڑ دیں اور موڈل ہمیشہ ڈیٹا فائل پر کارروائی کرے گا، چاہے کوئی ہدف متعین کیا گیا ہو یا نہیں۔ بصورت دیگر، بالکل وہی نام پُر کریں جو <target> ٹیگ کے اندر آؤٹ پٹ ہوگا۔';
$string['roles'] = 'کردار';
$string['settingfullname'] = 'کورس کے مکمل نام کے لیے IMS تفصیل کا ٹیگ';
$string['settingfullnamedescription'] = 'پورا نام ایک مطلوبہ کورس فیلڈ ہے لہذا آپ کو اپنی IMS انٹرپرائز فائل میں منتخب کردہ ڈسکرپشن ٹیگ کی وضاحت کرنی ہوگی';
$string['settingshortname'] = 'کورس کے مختصر نام کے لیے IMS تفصیل کا ٹیگ';
$string['settingshortnamedescription'] = 'مختصر نام ایک مطلوبہ کورس فیلڈ ہے لہذا آپ کو اپنی IMS انٹرپرائز فائل میں منتخب کردہ ڈسکرپشن ٹیگ کی وضاحت کرنی ہوگی';
$string['settingsummary'] = 'کورس کے خلاصے کے لیے IMS تفصیل کا ٹیگ';
$string['settingsummarydescription'] = 'ایک اختیاری فیلڈ ہے، اگر آپ کورس کے خلاصے کی وضاحت نہیں کرنا چاہتے ہیں تو \'اسے خالی چھوڑ دیں\' کو منتخب کریں';
$string['sourcedidfallback'] = 'اگر \'userid\' فیلڈ نہیں ملتی ہے تو صارف کے userid کے لیے \'sourcedid\' استعمال کریں';
$string['sourcedidfallback_desc'] = 'IMS ڈیٹا میں، <sourcedid> فیلڈ کسی شخص کے لیے مستقل ID کوڈ کی نمائندگی کرتا ہے جیسا کہ سورس سسٹم میں استعمال ہوتا ہے۔ <userid> فیلڈ ایک علیحدہ فیلڈ ہے جس میں لاگ ان کرتے وقت صارف کی طرف سے استعمال ہونے والا ID کوڈ ہونا چاہیے۔ بہت سے معاملات میں یہ دونوں کوڈ ایک جیسے ہو سکتے ہیں - لیکن ہمیشہ نہیں۔ کچھ طلباء کے معلوماتی نظام <userid> فیلڈ کو آؤٹ پٹ کرنے میں ناکام رہتے ہیں۔ اگر ایسا ہے تو، آپ کو اس ترتیب کو فعال کرنا چاہیے تاکہ <sourcedid> کو موڈل صارف ID کے طور پر استعمال کرنے کی اجازت دی جائے۔ بصورت دیگر، اس ترتیب کو غیر فعال رہنے دیں۔';
$string['truncatecoursecodes'] = 'کورس کوڈز کو اس لمبائی تک ترچھا کریں';
$string['truncatecoursecodes_desc'] = 'کچھ حالات میں آپ کے پاس کورس کے کوڈز ہو سکتے ہیں جنہیں آپ پروسیسنگ سے پہلے ایک مخصوص طوالت میں چھوٹا کرنا چاہتے ہیں۔ اگر ایسا ہے تو اس باکس میں حروف کی تعداد درج کریں۔ بصورت دیگر، باکس کو خالی چھوڑ دیں اور کوئی کٹوتی نہیں ہوگی۔';
$string['updatecourses'] = 'کورس کو اپ ڈیٹ کریں';
$string['updatecourses_desc'] = 'فعال ہونے پر، IMS انٹرپرائز انرولمنٹ پلگ ان کورس کے مکمل اور مختصر ناموں کو اپ ڈیٹ کر سکتا ہے (اگر "recstatus" جھنڈا 2 پر سیٹ کیا گیا ہے، جو اپ ڈیٹ کی نمائندگی کرتا ہے)۔';
$string['updateusers'] = 'IMS ڈیٹا میں مخصوص ہونے پر صارف اکاؤنٹس کو اپ ڈیٹ کریں';
$string['updateusers_desc'] = 'اگر فعال ہو تو، IMS انٹرپرائز اندراج کا ڈیٹا صارف کے اکاؤنٹس میں تبدیلیوں کی وضاحت کر سکتا ہے (اگر "recstatus" نشان 2 پر سیٹ کیا گیا ہے، جو ایک اپ ڈیٹ کی نمائندگی کرتا ہے)۔';
$string['usecapitafix'] = 'اگر Capita استعمال کر رہے ہیں تو اس باکس پر نشان لگائیں (کیونکہ ان کا XML فارمیٹ قدرے مختلف ہے)';
$string['usecapitafix_desc'] = 'Capita کی طرف سے تیار کردہ سٹوڈنٹ ڈیٹا سسٹم کے XML آؤٹ پٹ میں ایک معمولی خامی پائی گئی ہے۔ اگر آپ Capita استعمال کر رہے ہیں تو آپ کو اس ترتیب کو فعال کرنا چاہیے - بصورت دیگر اسے بغیر نشان کے چھوڑ دیں۔';
$string['usersettings'] = 'صارف کے ڈیٹا کے اختیارات';
$string['zeroisnotruncation'] = '0 کسی کٹوتی کی نشاندہی کرتا ہے';
