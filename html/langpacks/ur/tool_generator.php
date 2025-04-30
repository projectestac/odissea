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
 * Strings for component 'tool_generator', language 'ur', version '4.4'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'بڑی فائل {$a}';
$string['courseexplanation'] = 'یہ ٹول معیاری ٹیسٹ کورسز بناتا ہے جس میں بہت سے حصے، سرگرمیاں اور فائلیں شامل ہوتی ہیں۔ اس کا مقصد سسٹم کے مختلف اجزاء (جیسے بیک اپ اور بحالی) کی وشوسنییتا اور کارکردگی کو جانچنے کے لیے ایک معیاری پیمائش فراہم کرنا ہے۔ یہ ٹیسٹ اس لیے اہم ہے کیونکہ اس سے پہلے بہت سے ایسے کیسز سامنے آئے ہیں جہاں، حقیقی زندگی میں استعمال کے کیسز کا سامنا کرنا پڑا (مثلاً 1,000 سرگرمیوں والا کورس)، سسٹم کام نہیں کرتا ہے۔ اس خصوصیت کا استعمال کرتے ہوئے بنائے گئے کورسز ڈیٹا بیس اور فائل سسٹم کی ایک بڑی مقدار (دسیوں گیگا بائٹس) پر قبضہ کر سکتے ہیں۔ اس جگہ کو دوبارہ چھوڑنے کے لیے آپ کو کورسز کو حذف کرنے کی ضرورت ہوگی (اور مختلف کلین اپ رنز کا انتظار کریں)۔ **اس خصوصیت کو لائیو سسٹم پر استعمال نہ کریں**۔ صرف ڈویلپر سرور پر استعمال کریں۔ (حادثاتی استعمال سے بچنے کے لیے، اس خصوصیت کو غیر فعال کر دیا جاتا ہے جب تک کہ آپ نے DEVELOPER ڈیبگنگ لیول بھی منتخب نہ کر لیا ہو۔)';
$string['coursesize_0'] = 'XS (~10KB؛ ~1 سیکنڈ میں تخلیق کریں)';
$string['coursesize_1'] = 'S (~10MB؛ ~30 سیکنڈ میں تخلیق کریں)';
$string['coursesize_2'] = 'M (~100MB؛ ~2 منٹ میں تخلیق کریں)';
$string['coursesize_3'] = 'L (~1GB؛ ~30 منٹ میں تخلیق کریں)';
$string['coursesize_4'] = 'XL (~10GB؛ ~2 گھنٹے میں تخلیق کریں)';
$string['coursesize_5'] = 'XXL (~20GB؛ ~4 گھنٹے میں تخلیق کریں)';
$string['coursewithoutusers'] = 'منتخب کردہ کورس میں کوئی صارف نہیں ہے';
$string['createcourse'] = 'کورس بنائیں';
$string['createtestplan'] = 'ٹیسٹ پلان بنائیں';
$string['creating'] = 'کورس بنانا';
$string['done'] = 'ہو گیا ({$a}s)';
$string['downloadtestplan'] = 'ٹیسٹ پلان ڈاؤن لوڈ کریں';
$string['downloadusersfile'] = 'صارفین کی فائل ڈاؤن لوڈ کریں';
$string['error_nocourses'] = 'ٹیسٹ پلان بنانے کے لیے کوئی کورسز نہیں ہیں';
$string['error_noforumdiscussions'] = 'منتخب کورس میں فورم کے مباحث شامل نہیں ہیں';
$string['error_noforuminstances'] = 'منتخب کردہ کورس میں فورم ماڈیول کی مثالیں شامل نہیں ہیں';
$string['error_noforumreplies'] = 'منتخب کورس میں فورم کے جوابات شامل نہیں ہیں';
$string['error_nonexistingcourse'] = 'مخصوص کورس موجود نہیں ہے';
$string['error_nopageinstances'] = 'منتخب کردہ کورس میں صفحہ ماڈیول کی مثالیں شامل نہیں ہیں';
$string['error_notdebugging'] = 'اس سرور پر دستیاب نہیں ہے کیونکہ ڈیبگنگ ڈیولپر پر سیٹ نہیں ہے';
$string['error_nouserspassword'] = 'ٹیسٹ پلان بنانے کے لیے آپ کو config.php میں $CFG->tool_generator_users_password سیٹ کرنا ہوگا';
$string['fullname'] = 'ٹیسٹ کورس: {$a->size}';
$string['maketestcourse'] = 'ٹیسٹ کورس بنائیں';
$string['maketestplan'] = 'JMeter ٹیسٹ پلان بنائیں';
$string['notenoughusers'] = 'منتخب کردہ کورس میں کافی صارفین نہیں ہیں';
$string['pluginname'] = 'ڈویلپمنٹ ڈیٹا جنریٹر';
$string['privacy:metadata'] = 'ڈویلپمنٹ ڈیٹا جنریٹر پلگ ان کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔';
$string['progress_checkaccounts'] = 'صارف کے کھاتوں کی جانچ ہو رہی ہے ({$a})';
$string['progress_coursecompleted'] = 'کورس مکمل ہوا ({$a}s)';
$string['progress_createaccounts'] = 'صارف اکاؤنٹ بنانا ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'اسائنمنٹس بنانا ({$a})';
$string['progress_createbigfiles'] = 'بڑی فائلیں بنانا ({$a})';
$string['progress_createcourse'] = 'کورس بنانا {$a}';
$string['progress_createforum'] = 'فورم بنانا ({$a} پوسٹس)';
$string['progress_createpages'] = 'صفحات بنانا ({$a})';
$string['progress_createsmallfiles'] = 'چھوٹی فائلیں بنانا ({$a})';
$string['progress_enrol'] = 'کورس میں صارفین کا اندراج ({$a})';
$string['progress_sitecompleted'] = 'سائٹ مکمل ہو گئی ({$a}s)';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~10MB؛ 3 کورسز، ~30 سیکنڈ میں بنائے گئے)';
$string['sitesize_1'] = 'S (~50MB؛ 8 کورسز، ~2 منٹ میں بنائے گئے)';
$string['sitesize_2'] = 'M (~200MB؛ 73 کورسز، ~10 منٹ میں بنائے گئے)';
$string['sitesize_3'] = 'L (~1\'5GB؛ 277 کورسز، ~1\'5 گھنٹے میں بنائے گئے)';
$string['sitesize_4'] = 'XL (~ 10GB؛ 1065 کورسز، ~5 گھنٹے میں بنائے گئے)';
$string['sitesize_5'] = 'XXL (~20GB؛ 4177 کورسز، ~10 گھنٹے میں بنائے گئے)';
$string['size'] = 'سائز یقینا';
$string['smallfiles'] = 'چھوٹی فائلیں';
$string['targetcourse'] = 'ٹیسٹ ٹارگٹ کورس';
$string['testplanexplanation'] = 'یہ ٹول صارف کی اسناد کی فائل کے ساتھ ایک JMeter ٹیسٹ پلان فائل بناتا ہے۔ یہ ٹیسٹ پلان {$a} کے ساتھ کام کرنے کے لیے ڈیزائن کیا گیا ہے، جو ایک مخصوص موڈل ماحول میں ٹیسٹ پلان کو چلانا آسان بناتا ہے، رنز کے بارے میں معلومات اکٹھا کرتا ہے اور نتائج کا موازنہ کرتا ہے، لہذا آپ کو اسے ڈاؤن لوڈ کرنے اور اس کا test_runner استعمال کرنے کی ضرورت ہوگی۔ sh اسکرپٹ یا انسٹالیشن اور استعمال کی ہدایات پر عمل کریں۔ آپ کو config.php میں کورس کے صارفین کے لیے پاس ورڈ سیٹ کرنے کی ضرورت ہے (جیسے $CFG->tool_generator_users_password = \'moodle\'؛)۔ ٹول کے غیر ارادی استعمال کو روکنے کے لیے اس پاس ورڈ کی کوئی ڈیفالٹ قدر نہیں ہے۔ آپ کو اپ ڈیٹ پاس ورڈ کا اختیار استعمال کرنے کی ضرورت ہے اگر آپ کے کورس کے صارفین کے پاس دوسرے پاس ورڈز ہوں یا وہ ٹول_جنریٹر کے ذریعہ بنائے گئے ہوں لیکن $CFG->tool_generator_users_password ویلیو سیٹ کیے بغیر۔ یہ ٹول_جنریٹر کا حصہ ہے لہذا یہ کورسز اور سائٹ جنریٹر کے ذریعہ تیار کردہ کورسز کے ساتھ اچھی طرح کام کرتا ہے، اسے کسی بھی کورس کے ساتھ بھی استعمال کیا جا سکتا ہے جس میں کم از کم: * کافی اندراج شدہ صارفین (آپ کے منتخب کردہ ٹیسٹ پلان کے سائز پر منحصر ہے) پاس ورڈ کو \'موڈل\' پر ری سیٹ کریں * صفحہ ماڈیول مثال * کم از کم ایک بحث اور ایک جواب کے ساتھ ایک فورم ماڈیول مثال آپ بڑے ٹیسٹ پلانز چلاتے وقت اپنے سرورز کی صلاحیت پر غور کرنا چاہیں گے کیونکہ JMeter کے ذریعہ تیار کردہ لوڈ کی رقم خاص طور پر بڑی ہو سکتی ہے۔ . اس قسم کے مسائل کو کم کرنے کے لیے ریمپ اپ پیریڈ کو تھریڈز (صارفین) کی تعداد کے مطابق ایڈجسٹ کیا گیا ہے لیکن بوجھ اب بھی بہت زیادہ ہے۔ **لائیو سسٹم پر ٹیسٹ پلان نہ چلائیں**۔ یہ خصوصیت JMeter کو فیڈ کرنے کے لیے صرف فائلیں بناتی ہے اس لیے یہ خود خطرناک نہیں ہے، لیکن آپ کو **کبھی نہیں** اس ٹیسٹ پلان کو پروڈکشن سائٹ میں نہیں چلانا چاہیے۔';
$string['testplansize_0'] = 'XS ({$a->users} صارفین، {$a->loops} loops اور {$a->rampup} ریمپ اپ پیریڈ)';
$string['testplansize_1'] = 'S ({$a->users} صارفین، {$a->loops} loops اور {$a->rampup} ریمپ اپ پیریڈ)';
$string['testplansize_2'] = 'M ({$a->users} صارفین، {$a->loops} loops اور {$a->rampup} ریمپ اپ پیریڈ)';
$string['testplansize_3'] = 'L ({$a->users} صارفین، {$a->loops} loops اور {$a->rampup} ریمپ اپ پیریڈ)';
$string['testplansize_4'] = 'XL ({$a->users} صارفین، {$a->loops} loops اور {$a->rampup} ریمپ اپ پیریڈ)';
$string['testplansize_5'] = 'XXL ({$a->users} صارفین، {$a->loops} loops اور {$a->rampup} ریمپ اپ پیریڈ)';
$string['updateuserspassword'] = 'کورس کے صارفین کا پاس ورڈ اپ ڈیٹ کریں';
$string['updateuserspassword_help'] = 'JMeter کو کورس کے صارفین کے طور پر لاگ ان کرنے کی ضرورت ہے، آپ config.php میں $CFG->tool_generator_users_password استعمال کر کے صارفین کا پاس ورڈ سیٹ کر سکتے ہیں۔ یہ ترتیب کورس کے صارف کے پاس ورڈ کو $CFG->tool_generator_users_password کے مطابق اپ ڈیٹ کرتی ہے۔ یہ اس صورت میں کارآمد ہو سکتا ہے جب آپ کوئی ایسا کورس استعمال کر رہے ہوں جو tool_generator کے ذریعے تیار نہ کیا گیا ہو یا $CFG->tool_generator_users_password سیٹ نہیں کیا گیا تھا جب آپ نے ٹیسٹ کورسز بنائے تھے۔';
