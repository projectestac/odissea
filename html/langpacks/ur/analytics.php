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
 * Strings for component 'analytics', language 'ur', version '4.5'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'قابل تجزیہ {$a->analysableid} استعمال نہیں کیا گیا: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'قابل تجزیہ {$a->analysableid} اس ہدف کے لیے درست نہیں ہے: {$a->result}';
$string['analysisinprogress'] = 'اب بھی ایک سابقہ عمل سے تجزیہ کیا جا رہا ہے';
$string['analytics'] = 'تجزیات';
$string['analyticsdisabled'] = 'تجزیات غیر فعال ہے۔ آپ اسے "سائٹ ایڈمنسٹریشن> ایڈوانسڈ فیچرز" میں فعال کر سکتے ہیں۔';
$string['analyticslogstore'] = 'تجزیات کے لیے لاگ اسٹور استعمال کیا جاتا ہے';
$string['analyticslogstore_help'] = 'لاگ اسٹور جسے اینالیٹکس API صارفین کی سرگرمی کو پڑھنے کے لیے استعمال کرے گا۔';
$string['analyticssettings'] = 'تجزیات کی ترتیبات';
$string['analyticssiteinfo'] = 'سائٹ کی معلومات';
$string['calclifetime'] = 'کے لیے تجزیاتی حسابات رکھیں';
$string['configlcalclifetime'] = 'یہ بتاتا ہے کہ آپ کتنے عرصے کے حساب سے ڈیٹا رکھنا چاہتے ہیں - اس سے پیشین گوئیاں حذف نہیں ہوں گی، لیکن پیشین گوئیاں بنانے کے لیے استعمال ہونے والے ڈیٹا کو حذف کر دیا جائے گا۔ یہاں پہلے سے طے شدہ آپشن کا استعمال بہترین ہے کیونکہ یہ آپ کے ڈسک کے استعمال کو کنٹرول میں رکھتا ہے، تاہم اگر آپ دوسرے مقاصد کے لیے کیلکولیشن ٹیبل استعمال کر رہے ہیں تو آپ اس قدر کو بڑھانا چاہیں گے۔';
$string['defaultpredictionsprocessor'] = 'پہلے سے طے شدہ پیشن گوئی پروسیسر';
$string['defaultpredictoroption'] = 'ڈیفالٹ پروسیسر ({$a})';
$string['defaulttimesplittingmethods'] = 'ماڈل کی تشخیص کے لیے پہلے سے طے شدہ تجزیہ کے وقفے';
$string['defaulttimesplittingmethods_help'] = 'تجزیہ کا وقفہ اس بات کی وضاحت کرتا ہے کہ نظام کب پیشین گوئیوں کا حساب لگائے گا اور سرگرمی لاگ کے اس حصے کا جو ان پیشین گوئیوں کے لیے زیر غور آئے گا۔ ماڈل کی تشخیص کا عمل ان تجزیوں کے وقفوں کے ذریعے دہرایا جائے گا جب تک کہ ایک مخصوص تجزیہ وقفہ متعین نہ کیا جائے۔';
$string['disabledmodel'] = 'غیر فعال ماڈل';
$string['erroralreadypredict'] = 'فائل {$a} پہلے ہی پیشین گوئیاں بنانے کے لیے استعمال ہو چکی ہے۔';
$string['errorcannotreaddataset'] = 'ڈیٹا سیٹ فائل {$a} کو پڑھا نہیں جا سکتا۔';
$string['errorcannotusetimesplitting'] = 'فراہم کردہ تجزیہ وقفہ اس ماڈل پر استعمال نہیں کیا جا سکتا۔';
$string['errorcannotwritedataset'] = 'ڈیٹا سیٹ فائل {$a} نہیں لکھی جا سکتی۔';
$string['errorexportmodelresult'] = 'مشین لرننگ ماڈل کو ایکسپورٹ نہیں کیا جا سکتا۔';
$string['errorimport'] = 'فراہم کردہ JSON فائل کو درآمد کرنے میں خرابی۔';
$string['errorimportmissingclasses'] = 'مندرجہ ذیل تجزیاتی اجزاء اس سائٹ پر دستیاب نہیں ہیں: {$a-> missingclasses}۔';
$string['errorimportmissingcomponents'] = 'فراہم کردہ ماڈل کو درج ذیل پلگ ان انسٹال کرنے کی ضرورت ہے: {$a}۔ نوٹ کریں کہ ضروری نہیں کہ ورژنز آپ کی سائٹ پر انسٹال کردہ ورژنز سے مماثل ہوں۔ پلگ ان کا ایک ہی یا نیا ورژن انسٹال کرنا زیادہ تر معاملات میں ٹھیک ہونا چاہئے۔';
$string['errorimportversionmismatches'] = 'درج ذیل اجزاء کا ورژن اس سائٹ پر انسٹال کردہ ورژن سے مختلف ہے: {$a}۔ آپ ان اختلافات کو نظر انداز کرنے کے لیے \'ورژن کی مماثلتوں کو نظر انداز کریں\' کا آپشن استعمال کر سکتے ہیں۔';
$string['errorinvalidcontexts'] = 'کچھ منتخب سیاق و سباق کو اس ہدف میں استعمال نہیں کیا جا سکتا۔';
$string['errorinvalidindicator'] = 'غلط {$a} اشارے';
$string['errorinvalidtarget'] = 'غلط {$a} ہدف';
$string['errorinvalidtimesplitting'] = 'غلط تجزیہ وقفہ؛ براہ کرم یقینی بنائیں کہ آپ مکمل طور پر اہل کلاس کا نام شامل کرتے ہیں۔';
$string['errornocontextrestrictions'] = 'منتخب کردہ ہدف سیاق و سباق کی پابندیوں کی حمایت نہیں کرتا ہے';
$string['errornoexportconfig'] = 'ماڈل کنفیگریشن برآمد کرنے میں ایک مسئلہ تھا۔';
$string['errornoexportconfigrequirements'] = 'تجزیہ وقفہ کے ساتھ صرف غیر جامد ماڈل ہی برآمد کیے جا سکتے ہیں۔';
$string['errornoindicators'] = 'اس ماڈل میں کوئی اشارے نہیں ہیں۔';
$string['errornopredictresults'] = 'پیشین گوئی پروسیسر سے کوئی نتیجہ نہیں آیا۔ مزید معلومات کے لیے آؤٹ پٹ ڈائرکٹری کے مواد کو چیک کریں۔';
$string['errornoroles'] = 'طالب علم یا استاد کے کردار کی وضاحت نہیں کی گئی ہے۔ تجزیاتی ترتیبات کے صفحہ میں ان کی وضاحت کریں۔';
$string['errornotarget'] = 'اس ماڈل کا کوئی ہدف نہیں ہے۔';
$string['errornotimesplittings'] = 'اس ماڈل میں تجزیہ کا وقفہ نہیں ہے۔';
$string['errorpredictioncontextnotavailable'] = 'یہ پیشین گوئی سیاق و سباق اب دستیاب نہیں ہے۔';
$string['errorpredictionformat'] = 'غلط پیشن گوئی کے حساب کتاب کی شکل';
$string['errorpredictionnotfound'] = 'پیشین گوئی نہیں ملی';
$string['errorpredictionsprocessor'] = 'پیشین گوئی پروسیسر کی خرابی: {$a}';
$string['errorpredictwrongformat'] = 'پیشین گوئی پروسیسر کی واپسی کو ڈی کوڈ نہیں کیا جا سکتا: "{$a}"';
$string['errorprocessornotready'] = 'منتخب پیشین گوئی پروسیسر تیار نہیں ہے: {$a}';
$string['errorsamplenotavailable'] = 'پیش گوئی شدہ نمونہ اب دستیاب نہیں ہے۔';
$string['errorunexistingmodel'] = 'غیر موجود ماڈل {$a}';
$string['errorunexistingtimesplitting'] = 'منتخب تجزیہ وقفہ دستیاب نہیں ہے۔';
$string['errorunknownaction'] = 'نامعلوم کارروائی';
$string['eventinsightsviewed'] = 'بصیرتیں دیکھی گئیں';
$string['eventpredictionactionstarted'] = 'پیشین گوئی کا عمل شروع ہوا';
$string['fixedack'] = 'قبول کریں';
$string['incorrectlyflagged'] = 'غلط علامت';
$string['insightinfomessagehtml'] = 'سسٹم نے آپ کے لیے ایک بصیرت پیدا کی ہے۔';
$string['insightinfomessageplain'] = 'سسٹم نے آپ کے لیے ایک بصیرت پیدا کی ہے: {$a}';
$string['insightmessagesubject'] = '"{$a}" کے لیے نئی بصیرت';
$string['invalidanalysablefortimesplitting'] = '{$a} تجزیہ وقفہ کا استعمال کرتے ہوئے اس کا تجزیہ نہیں کیا جا سکتا۔';
$string['invalidtimesplitting'] = 'ID {$a} والے ماڈل کو تربیت کے لیے استعمال کرنے سے پہلے تجزیہ وقفہ کی ضرورت ہے۔';
$string['levelinstitution'] = 'تعلیم کا معیار';
$string['levelinstitutionisced0'] = 'ابتدائی بچپن کی تعلیم (تعلیمی حصول کے لیے \'پرائمری سے کم\')';
$string['levelinstitutionisced1'] = 'پرائمری تعلیم';
$string['levelinstitutionisced2'] = 'لوئر سیکنڈری تعلیم';
$string['levelinstitutionisced3'] = 'اعلیٰ ثانوی تعلیم';
$string['levelinstitutionisced4'] = 'ثانوی کے بعد کی غیر ترتیری تعلیم (کارپوریٹ یا کمیونٹی/این جی او کی تربیت شامل ہو سکتی ہے)';
$string['levelinstitutionisced5'] = 'مختصر دور کی ترتیری تعلیم (کارپوریٹ یا کمیونٹی/این جی او کی تربیت شامل ہو سکتی ہے)';
$string['levelinstitutionisced6'] = 'بیچلر یا مساوی سطح';
$string['levelinstitutionisced7'] = 'ماسٹر یا مساوی سطح';
$string['levelinstitutionisced8'] = 'ڈاکٹریٹ یا مساوی سطح';
$string['modeinstruction'] = 'ہدایات کے طریقے';
$string['modeinstructionblendedhybrid'] = 'ملاوٹ شدہ یا ہائبرڈ';
$string['modeinstructionfacetoface'] = 'آمنے سامنے';
$string['modeinstructionfullyonline'] = 'مکمل طور پر آن لائن';
$string['modeloutputdir'] = 'ماڈل آؤٹ پٹ ڈائرکٹری';
$string['modeloutputdirwithdefaultinfo'] = 'ڈائرکٹری جہاں پیشین گوئی پروسیسرز تمام تشخیصی معلومات کو محفوظ کرتے ہیں۔ ڈیبگنگ اور تحقیق کے لیے مفید ہے۔ اگر خالی ہے، تو {$a} بطور ڈیفالٹ استعمال ہوگا۔';
$string['modeltimelimit'] = 'فی ماڈل تجزیہ وقت کی حد';
$string['modeltimelimitinfo'] = 'یہ ترتیب اس وقت کو محدود کرتی ہے جو ہر ماڈل سائٹ کے مواد کا تجزیہ کرنے میں صرف کرتا ہے۔';
$string['neutral'] = 'غیر جانبدار';
$string['neverdelete'] = 'حسابات کو کبھی حذف نہ کریں';
$string['nocourses'] = 'تجزیہ کرنے کے لیے کوئی کورس نہیں ہے';
$string['nodata'] = 'تجزیہ کرنے کے لیے کوئی ڈیٹا نہیں ہے';
$string['noevaluationbasedassumptions'] = 'مفروضوں پر مبنی ماڈلز کا اندازہ نہیں لگایا جا سکتا';
$string['noinsights'] = 'کوئی بصیرت کی اطلاع نہیں ہے';
$string['noinsightsmodel'] = 'یہ ماڈل بصیرت پیدا نہیں کرتا ہے';
$string['nonewdata'] = 'کوئی نیا ڈیٹا دستیاب نہیں ہے۔ ماڈل کا تجزیہ اگلے تجزیہ وقفہ کے بعد کیا جائے گا۔';
$string['nonewranges'] = 'ابھی تک کوئی نئی پیشین گوئیاں نہیں ہیں۔ ماڈل کا تجزیہ اگلے تجزیہ وقفہ کے بعد کیا جائے گا۔';
$string['nopredictionsyet'] = 'ابھی تک کوئی پیشین گوئیاں دستیاب نہیں ہیں۔';
$string['noranges'] = 'ابھی تک کوئی پیشین گوئیاں نہیں ہیں';
$string['notapplicable'] = 'قابل اطلاق نہیں';
$string['notrainingbasedassumptions'] = 'مفروضوں پر مبنی ماڈلز کو تربیت کی ضرورت نہیں ہوتی';
$string['notuseful'] = 'مفید نہیں';
$string['novaliddata'] = 'کوئی درست ڈیٹا دستیاب نہیں ہے';
$string['novalidsamples'] = 'کوئی درست نمونے دستیاب نہیں ہیں';
$string['onlycli'] = 'تجزیات صرف کمانڈ لائن کے ذریعے عمل درآمد کرتا ہے';
$string['onlycliinfo'] = 'تجزیات کے عمل جیسے کہ ماڈلز کا جائزہ لینا، مشین لرننگ الگورتھم کی تربیت یا پیشین گوئیاں حاصل کرنے میں کچھ وقت لگ سکتا ہے۔ وہ کرون ٹاسک کے طور پر چلتے ہیں یا کمانڈ لائن کے ذریعے مجبور ہو سکتے ہیں۔ اگر غیر فعال ہو تو، تجزیاتی عمل کو ویب انٹرفیس کے ذریعے دستی طور پر چلایا جا سکتا ہے۔';
$string['percentonline'] = 'فیصد آن لائن';
$string['percentonline_help'] = 'اگر آپ کی تنظیم ملاوٹ شدہ یا ہائبرڈ کورسز پیش کرتی ہے، تو Moodle میں کتنے فیصد طلباء کا کام آن لائن کیا جاتا ہے؟ 0 اور 100 کے درمیان نمبر درج کریں۔';
$string['predictionsprocessor'] = 'پیشن گوئی پروسیسر';
$string['predictionsprocessor_help'] = 'ایک پیشین گوئی پروسیسر مشین لرننگ بیک اینڈ ہے جو ماڈلز کے اشارے اور اہداف کا حساب لگا کر تیار کردہ ڈیٹاسیٹس پر کارروائی کرتا ہے۔ ہر ماڈل ایک مختلف پروسیسر استعمال کر سکتا ہے۔ یہاں بیان کردہ ایک ڈیفالٹ ہوگا۔';
$string['privacy:metadata:analytics:indicatorcalc'] = 'اشارے کے حسابات';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'سیاق و سباق';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'حساب کے اختتامی وقت';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'اشارے کیلکولیٹر کلاس';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'نمونہ ID';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'نمونے کی اصل جدول';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'حساب شروع کرنے کا وقت';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'جب پیشین گوئی کی گئی';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'حسابی قدر';
$string['privacy:metadata:analytics:predictionactions'] = 'پیشن گوئی کے اعمال';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'عمل کا نام';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'پیشن گوئی ID';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'جب پیشن گوئی کی کارروائی کی گئی تھی';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'وہ صارف جس نے کارروائی کی';
$string['privacy:metadata:analytics:predictions'] = 'پیشین گوئیاں';
$string['privacy:metadata:analytics:predictions:calculations'] = 'اشارے کے حسابات';
$string['privacy:metadata:analytics:predictions:contextid'] = 'سیاق و سباق';
$string['privacy:metadata:analytics:predictions:modelid'] = 'ماڈل آئی ڈی';
$string['privacy:metadata:analytics:predictions:prediction'] = 'پیشین گوئی';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'پیشن گوئی کا سکور';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'تجزیہ وقفہ کا اشاریہ';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'نمونہ ID';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'جب پیشین گوئی کی گئی';
$string['privacy:metadata:analytics:predictions:timeend'] = 'حساب کا وقت ختم';
$string['privacy:metadata:analytics:predictions:timestart'] = 'حساب کا وقت شروع';
$string['processingsitecontents'] = 'سائٹ کے مواد پر کارروائی ہو رہی ہے';
$string['successfullyanalysed'] = 'کامیابی سے تجزیہ کیا گیا';
$string['timesplittingmethod'] = 'تجزیہ وقفہ';
$string['timesplittingmethod_help'] = 'تجزیہ کا وقفہ اس بات کی وضاحت کرتا ہے کہ نظام کب پیشین گوئیوں کا حساب لگائے گا اور سرگرمی لاگ کے اس حصے کا جو ان پیشین گوئیوں کے لیے زیر غور آئے گا۔ مثال کے طور پر، کورس کے دورانیے کو حصوں میں تقسیم کیا جا سکتا ہے، ہر حصے کے آخر میں ایک پیشین گوئی تیار کی جاتی ہے۔';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'ادارے کی قسم';
$string['typeinstitutionacademic'] = 'تعلیمی';
$string['typeinstitutionngo'] = 'غیر سرکاری تنظیم (این جی او)';
$string['typeinstitutiontraining'] = 'کارپوریٹ ٹریننگ';
$string['useful'] = 'مفید';
$string['viewdetails'] = 'تفصیلات دیکھیں';
$string['viewinsight'] = 'بصیرت دیکھیں';
$string['viewinsightdetails'] = 'بصیرت کی تفصیلات دیکھیں';
$string['viewprediction'] = 'پیشن گوئی کی تفصیلات دیکھیں';
$string['washelpful'] = 'کیا یہ مددگار تھا؟';
