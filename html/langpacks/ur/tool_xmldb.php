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
 * Strings for component 'tool_xmldb', language 'ur', version '4.4'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'اصل';
$string['addpersistent'] = 'لازمی مستقل فیلڈز شامل کریں';
$string['aftertable'] = 'ٹیبل کے بعد:';
$string['back'] = 'پیچھے';
$string['backtomainview'] = 'واپس مین پر';
$string['cannotuseidfield'] = '"id" فیلڈ داخل نہیں کر سکتے۔ یہ ایک خودکار کالم ہے';
$string['change'] = 'تبدیلی';
$string['charincorrectlength'] = 'چار فیلڈ کے لیے غلط لمبائی';
$string['check_bigints'] = 'غلط ڈی بی انٹیجرز تلاش کریں';
$string['check_defaults'] = 'متضاد ڈیفالٹ اقدار تلاش کریں';
$string['check_foreign_keys'] = 'غیر ملکی کلیدی خلاف ورزیوں کو تلاش کریں';
$string['check_indexes'] = 'لاپتہ DB اشاریہ جات تلاش کریں';
$string['check_oracle_semantics'] = 'لمبائی کے غلط الفاظ تلاش کریں';
$string['checkbigints'] = 'عدد کو چیک کریں';
$string['checkdefaults'] = 'ڈیفالٹس چیک کریں';
$string['checkforeignkeys'] = 'غیر ملکی چابیاں چیک کریں';
$string['checkindexes'] = 'اشاریہ جات کی جانچ کریں';
$string['checkoraclesemantics'] = 'سیمنٹکس چیک کریں';
$string['completelogbelow'] = '(ذیل میں تلاش کا مکمل لاگ دیکھیں)';
$string['confirmcheckbigints'] = 'یہ فعالیت آپ کے موڈل سرور میں <a href="https://tracker.moodle.org/browse/MDL-11038">ممکنہ غلط انٹیجر فیلڈز</a> کو تلاش کرے گی، خود بخود ضرورت پیدا کرے گی (لیکن اس پر عمل نہیں!) ایس کیو ایل اسٹیٹمنٹس کو آپ کے DB میں تمام عدد صحیح طریقے سے بیان کیا گیا ہے۔ ایک بار تیار ہوجانے کے بعد آپ اس طرح کے بیانات کو کاپی کرسکتے ہیں اور انہیں اپنے پسندیدہ ایس کیو ایل انٹرفیس کے ساتھ محفوظ طریقے سے انجام دے سکتے ہیں (ایسا کرنے سے پہلے اپنے ڈیٹا کا بیک اپ لینا نہ بھولیں)۔ غلط انٹیجرز کی تلاش کو انجام دینے سے پہلے اپنے موڈل کی ریلیز کے دستیاب تازہ ترین (+ ورژن) کو چلانے کی انتہائی سفارش کی جاتی ہے۔ یہ فعالیت DB کے خلاف کوئی کارروائی نہیں کرتی ہے (صرف اس سے پڑھتی ہے)، لہذا کسی بھی وقت محفوظ طریقے سے عمل میں لایا جا سکتا ہے۔';
$string['confirmcheckdefaults'] = 'یہ فعالیت آپ کے موڈل سرور میں متضاد ڈیفالٹ قدروں کو تلاش کرے گی، تمام ڈیفالٹ اقدار کو درست طریقے سے بیان کرنے کے لیے مطلوبہ ایس کیو ایل اسٹیٹمنٹس تیار کرے گی (لیکن عمل نہیں کر رہی!)۔ ایک بار تیار ہوجانے کے بعد آپ اس طرح کے بیانات کو کاپی کرسکتے ہیں اور انہیں اپنے پسندیدہ ایس کیو ایل انٹرفیس کے ساتھ محفوظ طریقے سے انجام دے سکتے ہیں (ایسا کرنے سے پہلے اپنے ڈیٹا کا بیک اپ لینا نہ بھولیں)۔ متضاد ڈیفالٹ اقدار کی تلاش کو انجام دینے سے پہلے اپنے موڈل ریلیز کا تازہ ترین (+ ورژن) دستیاب چلانے کی انتہائی سفارش کی جاتی ہے۔ یہ فعالیت DB کے خلاف کوئی کارروائی نہیں کرتی ہے (صرف اس سے پڑھتی ہے)، لہذا کسی بھی وقت محفوظ طریقے سے عمل میں لایا جا سکتا ہے۔';
$string['confirmcheckforeignkeys'] = 'یہ فعالیت install.xml کی تعریفوں میں بیان کردہ غیر ملکی کلیدوں کی ممکنہ خلاف ورزیوں کو تلاش کرے گی۔ (موڈل فی الحال ڈیٹا بیس میں اصل غیر ملکی کلیدی رکاوٹیں پیدا نہیں کرتا ہے، جس کی وجہ سے غلط ڈیٹا موجود ہو سکتا ہے۔) یہ انتہائی سفارش کی جاتی ہے کہ آپ کی ممکنہ خلاف ورزیوں کی تلاش کو انجام دینے سے پہلے اپنے موڈل کی ریلیز کا تازہ ترین (+ ورژن) دستیاب ہو۔ غیر ملکی چابیاں یہ فعالیت DB کے خلاف کوئی کارروائی نہیں کرتی ہے (صرف اس سے پڑھتی ہے)، لہذا کسی بھی وقت محفوظ طریقے سے عمل میں لایا جا سکتا ہے۔';
$string['confirmcheckindexes'] = 'یہ فعالیت آپ کے موڈل سرور میں ممکنہ گمشدہ اشاریہ جات کو تلاش کرے گی، ہر چیز کو اپ ڈیٹ رکھنے کے لیے خود بخود مطلوبہ ایس کیو ایل اسٹیٹمنٹس تیار کرے گی (لیکن عمل نہیں کر رہی!)۔ ایک بار تیار ہوجانے کے بعد آپ اس طرح کے بیانات کو کاپی کرسکتے ہیں اور انہیں اپنے پسندیدہ ایس کیو ایل انٹرفیس کے ساتھ محفوظ طریقے سے انجام دے سکتے ہیں (ایسا کرنے سے پہلے اپنے ڈیٹا کا بیک اپ لینا نہ بھولیں)۔ گمشدہ اشاریہ جات کی تلاش کو انجام دینے سے پہلے اپنے موڈل کی ریلیز کے دستیاب تازہ ترین (+ ورژن) کو چلانے کی انتہائی سفارش کی جاتی ہے۔ یہ فعالیت DB کے خلاف کوئی کارروائی نہیں کرتی ہے (صرف اس سے پڑھتی ہے)، لہذا کسی بھی وقت محفوظ طریقے سے عمل میں لایا جا سکتا ہے۔';
$string['confirmcheckoraclesemantics'] = 'یہ فعالیت آپ کے موڈل سرور میں <a href="https://tracker.moodle.org/browse/MDL-29322">BYTE semantics کا استعمال کرتے ہوئے Oracle varchar2 کالمز</a> کو تلاش کرے گی، خود بخود پیدا کرے گی (لیکن عمل نہیں کر رہی!) تمام کالموں کو تبدیل کرنے کے لیے مطلوبہ ایس کیو ایل اسٹیٹمنٹس کی بجائے CHAR سیمنٹکس استعمال کرنے کے لیے (کراس ڈی بی مطابقت اور مواد کی زیادہ سے زیادہ لمبائی کے لیے بہتر)۔ ایک بار تیار ہوجانے کے بعد آپ اس طرح کے بیانات کو کاپی کرسکتے ہیں اور انہیں اپنے پسندیدہ ایس کیو ایل انٹرفیس کے ساتھ محفوظ طریقے سے انجام دے سکتے ہیں (ایسا کرنے سے پہلے اپنے ڈیٹا کا بیک اپ لینا نہ بھولیں)۔ BYTE سیمینٹکس کی تلاش کو انجام دینے سے پہلے اپنے Moodle ریلیز کے دستیاب تازہ ترین (+ ورژن) کو چلانے کی انتہائی سفارش کی جاتی ہے۔ یہ فعالیت DB کے خلاف کوئی کارروائی نہیں کرتی ہے (صرف اس سے پڑھتی ہے)، لہذا کسی بھی وقت محفوظ طریقے سے عمل میں لایا جا سکتا ہے۔';
$string['confirmdeletefield'] = 'کیا آپ کو یقین ہے کہ آپ فیلڈ کو حذف کرنا چاہتے ہیں:';
$string['confirmdeleteindex'] = 'کیا آپ کو یقین ہے کہ آپ انڈیکس کو حذف کرنا چاہتے ہیں:';
$string['confirmdeletekey'] = 'کیا آپ کو یقین ہے کہ آپ کلید کو حذف کرنا چاہتے ہیں:';
$string['confirmdeletetable'] = 'کیا آپ کو یقین ہے کہ آپ جدول کو حذف کرنا چاہتے ہیں:';
$string['confirmdeletexmlfile'] = 'کیا آپ کو یقین ہے کہ آپ فائل کو حذف کرنا چاہتے ہیں:';
$string['confirmrevertchanges'] = 'کیا آپ کو یقین ہے کہ آپ اس پر کی گئی تبدیلیوں کو واپس کرنا چاہتے ہیں:';
$string['create'] = 'تخلیق';
$string['createtable'] = 'جدول بنائیں:';
$string['defaultincorrect'] = 'غلط ڈیفالٹ';
$string['delete'] = 'حذف کریں';
$string['delete_field'] = 'فیلڈ کو حذف کریں';
$string['delete_index'] = 'انڈیکس کو حذف کریں';
$string['delete_key'] = 'کلید کو حذف کریں';
$string['delete_table'] = 'ٹیبل کو حذف کریں';
$string['delete_xml_file'] = 'XML فائل کو حذف کریں';
$string['doc'] = 'Doc';
$string['docindex'] = 'دستاویزی اشاریہ:';
$string['documentationintro'] = 'یہ دستاویزات XMLDB ڈیٹا بیس کی تعریف سے خود بخود تیار ہوتی ہیں۔ یہ صرف انگریزی میں دستیاب ہے۔';
$string['down'] = 'نیچے';
$string['duplicate'] = 'نقل';
$string['duplicatefieldname'] = 'اس نام کے ساتھ ایک اور فیلڈ موجود ہے';
$string['duplicatefieldsused'] = 'ڈپلیکیٹ فیلڈز استعمال کیے گئے';
$string['duplicateindexname'] = 'ڈپلیکیٹ انڈیکس کا نام';
$string['duplicatekeyname'] = 'اس نام کی ایک اور کلید موجود ہے';
$string['duplicatetablename'] = 'اس نام کا ایک اور جدول موجود ہے';
$string['edit'] = 'ترمیم';
$string['edit_field'] = 'فیلڈ میں ترمیم کریں';
$string['edit_field_save'] = 'فیلڈ کو محفوظ کریں';
$string['edit_index'] = 'انڈیکس میں ترمیم کریں';
$string['edit_index_save'] = 'انڈیکس کو محفوظ کریں';
$string['edit_key'] = 'کلید میں ترمیم کریں';
$string['edit_key_save'] = 'کلید محفوظ کریں';
$string['edit_table'] = 'جدول میں ترمیم کریں';
$string['edit_table_save'] = 'جدول کو محفوظ کریں';
$string['edit_xml_file'] = 'XML فائل میں ترمیم کریں';
$string['enumvaluesincorrect'] = 'اینوم فیلڈ کے لیے غلط اقدار';
$string['expected'] = 'متوقع';
$string['extensionrequired'] = 'معذرت - اس کارروائی کے لیے پی ایچ پی ایکسٹینشن \'{$a}\' درکار ہے۔ اگر آپ اس فیچر کو استعمال کرنا چاہتے ہیں تو براہ کرم ایکسٹینشن انسٹال کریں۔';
$string['extraindexesfound'] = 'اضافی اشاریہ جات مل گئے';
$string['field'] = 'فیلڈ';
$string['fieldnameempty'] = 'نام کی فیلڈ خالی ہے';
$string['fields'] = 'فیلڈز';
$string['fieldsnotintable'] = 'ٹیبل میں فیلڈ موجود نہیں ہے';
$string['fieldsusedinindex'] = 'یہ فیلڈ انڈیکس کے طور پر استعمال ہوتی ہے';
$string['fieldsusedinkey'] = 'یہ فیلڈ بطور کلید استعمال ہوتی ہے۔';
$string['filemodifiedoutfromeditor'] = 'انتباہ: XMLDB ایڈیٹر کا استعمال کرتے ہوئے فائل کو مقامی طور پر تبدیل کیا گیا۔ محفوظ کرنا مقامی تبدیلیوں کو اوور رائٹ کر دے گا۔';
$string['filenotwriteable'] = 'فائل قابل تحریر نہیں ہے';
$string['fkunknownfield'] = 'غیر ملکی کلید {$a->keyname} ٹیبل پر {$a->tablename} حوالہ شدہ ٹیبل {$a->reftable} میں ایک غیر موجود فیلڈ {$a->reffield} کی طرف اشارہ کرتی ہے۔';
$string['fkunknowntable'] = 'ٹیبل {$a->tablename} پر غیر ملکی کلید {$a->keyname} ایک غیر موجود ٹیبل {$a->reftable} کی طرف اشارہ کرتی ہے۔';
$string['fkviolationdetails'] = 'ٹیبل {$a->tablename} پر موجود غیر ملکی کلید {$a->numrows} قطاروں میں سے {$a->numviolations} کی خلاف ورزی ہے۔';
$string['float2numbernote'] = 'نوٹس: اگرچہ "فلوٹ" فیلڈز XMLDB کی طرف سے 100% تعاون یافتہ ہیں، اس کے بجائے "نمبر" فیلڈز میں منتقل کرنے کی سفارش کی جاتی ہے۔';
$string['floatincorrectdecimals'] = 'فلوٹ فیلڈ کے لیے اعشاریوں کی غلط تعداد';
$string['floatincorrectlength'] = 'فلوٹ فیلڈ کے لیے غلط لمبائی';
$string['generate_all_documentation'] = 'تمام دستاویزات';
$string['generate_documentation'] = 'دستاویزات';
$string['gotolastused'] = 'آخری استعمال شدہ فائل پر جائیں';
$string['incorrectfieldname'] = 'غلط نام';
$string['incorrectindexname'] = 'غلط اشاریہ نام';
$string['incorrectkeyname'] = 'غلط کلیدی نام';
$string['incorrecttablename'] = 'ٹیبل کا نام غلط ہے';
$string['index'] = 'فہرست';
$string['indexes'] = 'اشاریہ جات';
$string['indexnameempty'] = 'فہرست کا نام خالی ہے';
$string['integerincorrectlength'] = 'انٹیجر فیلڈ کے لیے غلط لمبائی';
$string['key'] = 'کلید';
$string['keynameempty'] = 'کلیدی نام خالی نہیں ہو سکتا';
$string['keys'] = 'کلید';
$string['listreservedwords'] = 'محفوظ الفاظ کی فہرست<br />(<a href="https://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB محفوظ الفاظ</a> کو اپ ڈیٹ رکھنے کے لیے استعمال کیا جاتا ہے)';
$string['load'] = 'لوڈ';
$string['main_view'] = 'مرکزی منظر';
$string['masterprimaryuniqueordernomatch'] = 'آپ کی غیر ملکی کلید میں فیلڈز کو اسی ترتیب سے درج کیا جانا چاہیے جیسا کہ وہ حوالہ شدہ ٹیبل پر منفرد کلید میں درج ہیں۔';
$string['missing'] = 'لاپتہ';
$string['missingindexes'] = 'گمشدہ اشاریہ جات مل گئے';
$string['mustselectonefield'] = 'فیلڈ سے متعلق کارروائیاں دیکھنے کے لیے آپ کو ایک فیلڈ کا انتخاب کرنا ہوگا!';
$string['mustselectoneindex'] = 'انڈیکس سے متعلق کارروائیاں دیکھنے کے لیے آپ کو ایک انڈیکس منتخب کرنا ہوگا!';
$string['mustselectonekey'] = 'کلیدی متعلقہ کارروائیوں کو دیکھنے کے لیے آپ کو ایک کلید کا انتخاب کرنا ہوگا!';
$string['new_table_from_mysql'] = 'MySQL سے نیا جدول';
$string['newfield'] = 'نیا فیلڈ';
$string['newindex'] = 'نیا انڈیکس';
$string['newkey'] = 'نئی کلید';
$string['newtable'] = 'نیا جدول';
$string['newtablefrommysql'] = 'MySQL سے نیا جدول';
$string['nofieldsspecified'] = 'کوئی فیلڈ متعین نہیں ہے';
$string['nomasterprimaryuniquefound'] = 'وہ کالم (ز) جو آپ کے فارن کلیدی حوالہ جات کو حوالہ شدہ جدول میں ایک بنیادی یا منفرد KEY میں شامل کیا جانا چاہیے۔ نوٹ کریں کہ کالم کا ایک منفرد انڈیکس میں ہونا کافی اچھا نہیں ہے۔';
$string['nomissingorextraindexesfound'] = 'کوئی گمشدہ یا اضافی اشاریہ جات نہیں ملے ہیں، اس لیے مزید کارروائی کی ضرورت نہیں ہے۔';
$string['noreffieldsspecified'] = 'کوئی حوالہ قطعات متعین نہیں ہے';
$string['noreftablespecified'] = 'مخصوص حوالہ جدول نہیں ملا';
$string['noviolatedforeignkeysfound'] = 'کوئی خلاف ورزی شدہ فارن کلید نہیں ملی';
$string['nowrongdefaultsfound'] = 'کوئی متضاد ڈیفالٹ اقدار نہیں ملی ہیں، آپ کے DB کو مزید کارروائیوں کی ضرورت نہیں ہے۔';
$string['nowrongintsfound'] = 'کوئی غلط عدد نہیں ملا، آپ کے DB کو مزید کارروائیوں کی ضرورت نہیں ہے۔';
$string['nowrongoraclesemanticsfound'] = 'BYTE سیمنٹکس استعمال کرنے والے کوئی اوریکل کالم نہیں ملے ہیں، آپ کے DB کو مزید کارروائیوں کی ضرورت نہیں ہے۔';
$string['numberincorrectdecimals'] = 'نمبر فیلڈ کے لیے اعشاریوں کی غلط تعداد';
$string['numberincorrectlength'] = 'نمبر فیلڈ کے لیے غلط لمبائی';
$string['numberincorrectwholepart'] = 'نمبر فیلڈ کے لیے مکمل نمبر کا بہت بڑا حصہ';
$string['pendingchanges'] = 'نوٹ: آپ نے اس فائل میں تبدیلیاں کی ہیں۔ انہیں کسی بھی وقت بچایا جا سکتا ہے۔';
$string['pendingchangescannotbesaved'] = 'اس فائل میں تبدیلیاں ہیں لیکن انہیں محفوظ نہیں کیا جا سکتا! براہ کرم تصدیق کریں کہ ڈائرکٹری اور اس کے اندر موجود "install.xml" دونوں کو ویب سرور کے لیے لکھنے کی اجازت ہے۔';
$string['pendingchangescannotbesavedreload'] = 'اس فائل میں تبدیلیاں ہیں لیکن انہیں محفوظ نہیں کیا جا سکتا! براہ کرم تصدیق کریں کہ ڈائرکٹری اور اس کے اندر موجود "install.xml" دونوں کو ویب سرور کے لیے لکھنے کی اجازت ہے۔ پھر اس صفحہ کو دوبارہ لوڈ کریں اور آپ کو ان تبدیلیوں کو محفوظ کرنے کے قابل ہونا چاہیے۔';
$string['persistentfieldscomplete'] = 'درج ذیل فیلڈز کو شامل کیا گیا ہے:';
$string['persistentfieldsconfirm'] = 'کیا آپ درج ذیل فیلڈز کو شامل کرنا چاہتے ہیں:';
$string['persistentfieldsexist'] = 'درج ذیل فیلڈز پہلے سے موجود ہیں:';
$string['pluginname'] = 'XMLDB ایڈیٹر';
$string['primarykeyonlyallownotnullfields'] = 'بنیادی کلیدیں کالعدم نہیں ہو سکتیں';
$string['privacy:metadata'] = 'XMLDB ایڈیٹر پلگ ان کوئی ذاتی ڈیٹا ذخیرہ نہیں کرتا ہے۔';
$string['reserved'] = 'محفوظ';
$string['reservedwords'] = 'محفوظ الفاظ';
$string['revert'] = 'واپس کریں';
$string['revert_changes'] = 'تبدیلیاں واپس کریں';
$string['save'] = 'محفوظ کریں';
$string['searchresults'] = 'تلاش کے نتائج';
$string['selectaction'] = 'عمل کا انتخاب کریں:';
$string['selectdb'] = 'ڈیٹا بیس منتخب کریں:';
$string['selectfieldkeyindex'] = 'فیلڈ/کلید/انڈیکس منتخب کریں:';
$string['selectonecommand'] = 'پی ایچ پی کوڈ دیکھنے کے لیے براہ کرم فہرست سے ایک عمل منتخب کریں';
$string['selectonefieldkeyindex'] = 'پی ایچ پی کوڈ دیکھنے کے لیے براہ کرم فہرست سے ایک فیلڈ/کی/انڈیکس منتخب کریں';
$string['selecttable'] = 'جدول منتخب کریں:';
$string['table'] = 'جدول';
$string['tablenameempty'] = 'جدول کا نام خالی نہیں ہو سکتا';
$string['tables'] = 'جدول';
$string['unknownfield'] = 'ایک نامعلوم فیلڈ کا حوالہ دیتا ہے';
$string['unknowntable'] = 'ایک نامعلوم جدول کا حوالہ دیتا ہے';
$string['unload'] = 'ان لوڈ';
$string['up'] = 'اوپر';
$string['view'] = 'دیکھیں';
$string['view_reserved_words'] = 'محفوظ الفاظ دیکھیں';
$string['view_structure_php'] = 'پی ایچ پی کا ڈھانچہ دیکھیں';
$string['view_structure_sql'] = 'SQL کی ساخت دیکھیں';
$string['view_table_php'] = 'جدول PHP دیکھیں';
$string['view_table_sql'] = 'جدول SQL دیکھیں';
$string['viewedited'] = 'ترمیم شدہ دیکھیں';
$string['vieworiginal'] = 'اصل دیکھیں';
$string['viewphpcode'] = 'PHP کوڈ دیکھیں';
$string['viewsqlcode'] = 'SQL کوڈ دیکھیں';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'فارن کلید کی خلاف ورزی';
$string['violatedforeignkeysfound'] = 'خلاف ورزی شدہ فارن کلید ملیں';
$string['violations'] = 'خلاف ورزیاں';
$string['wrong'] = 'غلط';
$string['wrongdefaults'] = 'غلط ڈیفالٹس مل گئے';
$string['wrongints'] = 'غلط عدد ملے';
$string['wronglengthforenum'] = 'اینوم فیلڈ کے لیے غلط لمبائی';
$string['wrongnumberofreffields'] = 'حوالہ والے فیلڈز کی غلط تعداد';
$string['wrongoraclesemantics'] = 'غلط Oracle BYTE سیمنٹکس ملا';
$string['wrongreservedwords'] = 'فی الحال استعمال شدہ محفوظ الفاظ<br />(نوٹ کریں کہ $CFG->سابقہ استعمال کرنے پر ٹیبل کے نام اہم نہیں ہیں)';
$string['yesextraindexesfound'] = 'درج ذیل اضافی اشاریہ جات پائے گئے۔';
$string['yesmissingindexesfound'] = '<p>آپ کے ڈی بی میں کچھ گمشدہ اشاریہ جات ملے ہیں۔ یہاں ان کی تفصیلات اور مطلوبہ ایس کیو ایل اسٹیٹمنٹس ہیں جو ان سب کو بنانے کے لیے آپ کے پسندیدہ ایس کیو ایل انٹرفیس کے ساتھ انجام دیے جائیں۔ پہلے اپنے ڈیٹا کا بیک اپ لینا یاد رکھیں!</p> <p>ایسا کرنے کے بعد، اس یوٹیلیٹی کو دوبارہ عمل میں لانے کی انتہائی سفارش کی جاتی ہے تاکہ یہ چیک کیا جا سکے کہ مزید گمشدہ اشاریہ جات نہیں ملے۔</p>';
$string['yeswrongdefaultsfound'] = '<p>آپ کے ڈی بی میں کچھ متضاد ڈیفالٹس پائے گئے ہیں۔ یہاں ان کی تفصیلات اور مطلوبہ SQL بیانات ہیں جو آپ کے پسندیدہ ایس کیو ایل انٹرفیس کے ساتھ ان سب کو ٹھیک کرنے کے لیے کیے جائیں گے۔ پہلے اپنے ڈیٹا کا بیک اپ لینا یاد رکھیں!</p> <p>ایسا کرنے کے بعد، اس یوٹیلیٹی کو دوبارہ چلانے کی انتہائی سفارش کی جاتی ہے تاکہ یہ چیک کیا جا سکے کہ مزید متضاد ڈیفالٹس نہیں پائے جاتے۔</p>';
$string['yeswrongintsfound'] = '<p>آپ کے DB میں کچھ غلط عدد ملے ہیں۔ یہاں ان کی تفصیلات اور مطلوبہ ایس کیو ایل اسٹیٹمنٹس ہیں جنہیں آپ کے پسندیدہ ایس کیو ایل انٹرفیس کے ساتھ ٹھیک کرنے کے لیے عمل میں لانا ہے۔ پہلے اپنے ڈیٹا کا بیک اپ لینا یاد رکھیں!</p> <p>ان کو ٹھیک کرنے کے بعد، یہ بہت زیادہ سفارش کی جاتی ہے کہ اس یوٹیلیٹی کو دوبارہ عمل میں لائیں تاکہ یہ چیک کیا جا سکے کہ مزید غلط عدد نہیں ملے۔</p>';
$string['yeswrongoraclesemanticsfound'] = '<p>آپ کے DB میں BYTE سیمنٹکس استعمال کرنے والے کچھ اوریکل کالم ملے ہیں۔ یہاں ان کی تفصیلات اور مطلوبہ ایس کیو ایل اسٹیٹمنٹس ہیں جنہیں آپ کے پسندیدہ ایس کیو ایل انٹرفیس کے ساتھ عمل میں لایا جائے گا تاکہ ان سب کو تبدیل کیا جاسکے۔ پہلے اپنے ڈیٹا کا بیک اپ لینا یاد رکھیں!</p> <p>ایسا کرنے کے بعد، اس یوٹیلیٹی کو دوبارہ عمل میں لانے کی انتہائی سفارش کی جاتی ہے تاکہ یہ چیک کیا جا سکے کہ مزید غلط الفاظ نہیں مل رہے ہیں۔</p>';
