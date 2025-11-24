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
 * Strings for component 'grading', language 'ur', version '4.5'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' کو \'{$a->area}\' علاقے کے لیے درجہ بندی کے فعال طریقہ کے طور پر منتخب کیا گیا ہے';
$string['activemethodinfonone'] = '\'{$a->علاقہ}\' علاقے کے لیے درجہ بندی کا کوئی جدید طریقہ منتخب نہیں کیا گیا ہے۔ سادہ براہ راست درجہ بندی استعمال کی جائے گی۔';
$string['changeactivemethod'] = 'فعال درجہ بندی کا طریقہ تبدیل کریں';
$string['clicktoclose'] = 'بند کرنے کے لیے کلک کریں';
$string['error:gradingunavailable'] = 'اعلی درجے کی درجہ بندی کا طریقہ درست طریقے سے سیٹ نہیں کیا گیا ہے۔ براہ کرم فورم کی ترتیبات میں پورے فورم کی درجہ بندی کے اختیارات کو چیک کریں۔';
$string['error:notinrange'] = 'غلط گریڈ \'{$a->grade}\' فراہم کیا گیا۔ درجات 0 اور {$a->maxgrade} کے درمیان ہونے چاہئیں۔';
$string['exc_gradingformelement'] = 'گریڈنگ فارم عنصر کو فوری کرنے سے قاصر';
$string['formnotavailable'] = 'استعمال کرنے کے لیے ایک اعلی درجے کی درجہ بندی کا طریقہ منتخب کیا گیا تھا لیکن درجہ بندی کا فارم ابھی تک دستیاب نہیں ہے۔ آپ کو پہلے ایکشن مینو یا ایڈمنسٹریشن بلاک کے لنک کے ذریعے اس کی وضاحت کرنے کی ضرورت پڑ سکتی ہے۔';
$string['gradingformunavailable'] = 'براہ کرم نوٹ کریں: اعلی درجے کی درجہ بندی کا فارم اس وقت تیار نہیں ہے۔ سادہ درجہ بندی کا طریقہ استعمال کیا جائے گا جب تک کہ فارم کو درست حیثیت حاصل نہ ہو۔';
$string['gradingmanagement'] = 'اعلی درجے کی درجہ بندی';
$string['gradingmanagementtitle'] = 'اعلی درجے کی درجہ بندی: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'درجہ بندی کا طریقہ';
$string['gradingmethod_help'] = 'اعلی درجے کا درجہ بندی کا طریقہ منتخب کریں جسے دیے گئے سیاق و سباق میں درجات کا حساب لگانے کے لیے استعمال کیا جانا چاہیے۔ اعلی درجے کی درجہ بندی کو غیر فعال کرنے اور پہلے سے طے شدہ درجہ بندی کے طریقہ کار پر واپس جانے کے لیے، \'سادہ براہ راست گریڈنگ\' کا انتخاب کریں۔';
$string['gradingmethodnone'] = 'سادہ براہ راست درجہ بندی';
$string['gradingmethods'] = 'درجہ بندی کے طریقے';
$string['manageactionclone'] = 'ٹیمپلیٹ سے نیا گریڈنگ فارم بنائیں';
$string['manageactiondelete'] = 'فی الحال بیان کردہ فارم کو حذف کریں';
$string['manageactiondeleteconfirm'] = 'آپ گریڈنگ فارم \'{$a->formname}\' اور \'{$a->component} ({$a->area})\' سے تمام متعلقہ معلومات کو حذف کرنے جا رہے ہیں۔ براہ کرم یقینی بنائیں کہ آپ درج ذیل نتائج کو سمجھتے ہیں: * اس آپریشن کو کالعدم کرنے کا کوئی طریقہ نہیں ہے۔ * آپ اس فارم کو حذف کیے بغیر \'سادہ براہ راست گریڈنگ\' سمیت درجہ بندی کے دوسرے طریقے پر جا سکتے ہیں۔ * گریڈنگ فارم کیسے بھرے جاتے ہیں اس کے بارے میں تمام معلومات ضائع ہو جائیں گی۔ * گریڈ بک میں محفوظ کردہ حسابی نتائج کے درجات متاثر نہیں ہوں گے۔ تاہم ان کا حساب کیسے لیا گیا اس کی وضاحت دستیاب نہیں ہوگی۔ * یہ آپریشن دیگر سرگرمیوں میں اس فارم کی حتمی کاپیوں کو متاثر نہیں کرتا ہے۔';
$string['manageactiondeletedone'] = 'فارم کو کامیابی کے ساتھ حذف کر دیا گیا تھا';
$string['manageactionedit'] = 'موجودہ فارم کی تعریف میں ترمیم کریں';
$string['manageactionnew'] = 'شروع سے نئے گریڈنگ فارم کی وضاحت کریں';
$string['manageactionshare'] = 'فارم کو ایک نئے ٹیمپلیٹ کے طور پر شائع کریں';
$string['manageactionshareconfirm'] = 'آپ گریڈنگ فارم \'{$a}\' کی ایک کاپی کو ایک نئے عوامی سانچے کے طور پر محفوظ کرنے جا رہے ہیں۔ آپ کی سائٹ کے دوسرے صارفین اس ٹیمپلیٹ سے اپنی سرگرمیوں میں گریڈنگ کے نئے فارم تیار کر سکیں گے۔';
$string['manageactionsharedone'] = 'فارم کو کامیابی کے ساتھ ٹیمپلیٹ کے طور پر محفوظ کر لیا گیا تھا';
$string['noitemid'] = 'درجہ بندی ممکن نہیں۔ درجہ بندی شدہ آئٹم موجود نہیں ہے۔';
$string['nosharedformfound'] = 'کوئی ٹیمپلیٹ نہیں ملا';
$string['privacy:metadata:grading_definitions'] = 'ایک اعلی درجے کی درجہ بندی کے فارم کے بارے میں بنیادی معلومات جس کی وضاحت قابل گریڈ ایریا میں کی گئی ہے۔';
$string['privacy:metadata:grading_definitions:areaid'] = 'علاقہ ID جہاں اعلی درجے کی گریڈنگ فارم کی وضاحت کی گئی ہے۔';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'گریڈنگ ڈیفینیشن ID جہاں سے اسے کاپی کیا گیا تھا۔';
$string['privacy:metadata:grading_definitions:description'] = 'اعلی درجے کی درجہ بندی کے طریقہ کار کی تفصیل۔';
$string['privacy:metadata:grading_definitions:method'] = 'درجہ بندی کا طریقہ جو تعریف کے لیے ذمہ دار ہے۔';
$string['privacy:metadata:grading_definitions:name'] = 'اعلی درجے کی درجہ بندی کی تعریف کا نام۔';
$string['privacy:metadata:grading_definitions:options'] = 'اس درجہ بندی کی تعریف کی کچھ ترتیبات۔';
$string['privacy:metadata:grading_definitions:status'] = 'اس اعلی درجے کی درجہ بندی کی تعریف کی حیثیت۔';
$string['privacy:metadata:grading_definitions:timecopied'] = 'وہ وقت جب درجہ بندی کی تعریف کاپی کی گئی تھی۔';
$string['privacy:metadata:grading_definitions:timecreated'] = 'وہ وقت جب درجہ بندی کی تعریف بنائی گئی۔';
$string['privacy:metadata:grading_definitions:timemodified'] = 'وہ وقت جب درجہ بندی کی تعریف میں آخری بار ترمیم کی گئی تھی۔';
$string['privacy:metadata:grading_definitions:usercreated'] = 'اس صارف کی ID جس نے درجہ بندی کی تعریف بنائی۔';
$string['privacy:metadata:grading_definitions:usermodified'] = 'اس صارف کی ID جس نے آخری بار درجہ بندی کی تعریف میں ترمیم کی تھی۔';
$string['privacy:metadata:grading_instances'] = 'ایک درجہ بندی کے قابل آئٹم کے لیے تشخیص کا ریکارڈ ایک ریٹر کے ذریعے جانچا جاتا ہے۔';
$string['privacy:metadata:grading_instances:feedback'] = 'صارف کی طرف سے دی گئی رائے۔';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'صارف کی طرف سے دیے گئے تاثرات کا ٹیکسٹ فارمیٹ۔';
$string['privacy:metadata:grading_instances:raterid'] = 'اس صارف کی ID جس نے درجہ بندی کی مثال کی درجہ بندی کی۔';
$string['privacy:metadata:grading_instances:rawgrade'] = 'درجہ بندی کی مثال کے لیے درجہ۔';
$string['privacy:metadata:grading_instances:status'] = 'اس درجہ بندی کی مثال کی حیثیت۔';
$string['privacy:metadata:grading_instances:timemodified'] = 'وہ وقت جب درجہ بندی کی مثال میں آخری بار ترمیم کی گئی تھی۔';
$string['privacy:metadata:gradingformpluginsummary'] = 'درجہ بندی کے طریقہ کار کے لیے ڈیٹا۔';
$string['searchownforms'] = 'میرے اپنے فارمز کو شامل کریں';
$string['searchtemplate'] = 'درجہ بندی کے فارم کی تلاش';
$string['searchtemplate_help'] = 'آپ گریڈنگ فارم تلاش کر سکتے ہیں اور اسے یہاں نئے گریڈنگ فارم کے لیے بطور ٹیمپلیٹ استعمال کر سکتے ہیں۔ بس ایسے الفاظ ٹائپ کریں جو فارم کے نام، اس کی تفصیل یا فارم باڈی میں کہیں ظاہر ہونے چاہئیں۔ کسی فقرے کو تلاش کرنے کے لیے، پوری استفسار کو دوہرے اقتباسات میں لپیٹ دیں۔ پہلے سے طے شدہ طور پر، صرف درجہ بندی کے فارم جو مشترکہ ٹیمپلیٹس کے طور پر محفوظ کیے گئے ہیں تلاش کے نتائج میں شامل کیے جاتے ہیں۔ آپ تلاش کے نتائج میں اپنے تمام گریڈنگ فارم بھی شامل کر سکتے ہیں۔ اس طرح، آپ آسانی سے اپنے گریڈنگ فارمز کو شیئر کیے بغیر دوبارہ استعمال کر سکتے ہیں۔ صرف \'استعمال کے لیے تیار\' کے بطور نشان زد فارمز کو اس طرح دوبارہ استعمال کیا جا سکتا ہے۔';
$string['statusdraft'] = 'مسودہ';
$string['statusready'] = 'استعمال کے لیے تیار ہے';
$string['templatedelete'] = 'حذف کریں';
$string['templatedeleteconfirm'] = 'آپ مشترکہ ٹیمپلیٹ \'{$a}\' کو حذف کرنے جا رہے ہیں۔ کسی ٹیمپلیٹ کو حذف کرنے سے موجودہ فارمز متاثر نہیں ہوتا جو اس سے بنائے گئے تھے۔';
$string['templateedit'] = 'ترمیم';
$string['templatepick'] = 'اس ٹیمپلیٹ کو استعمال کریں';
$string['templatepickconfirm'] = 'کیا آپ گریڈنگ فارم \'{$a->formname}\' کو \'{$a->component} ({$a->area})\' میں نئے گریڈنگ فارم کے لیے بطور ٹیمپلیٹ استعمال کرنا چاہتے ہیں؟';
$string['templatepickownform'] = 'اس فارم کو بطور ٹیمپلیٹ استعمال کریں';
$string['templatesource'] = 'مقام: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'اپنا فارم';
$string['templatetypeshared'] = 'مشترکہ ٹیمپلیٹ';
