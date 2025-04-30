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
 * Strings for component 'tool_filetypes', language 'ur', version '4.4'.
 *
 * @package     tool_filetypes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'ایک نئی فائل کی قسم شامل کریں';
$string['corestring'] = 'متبادل زبان سٹرنگ';
$string['corestring_help'] = 'اس ترتیب کو بنیادی mimetypes.php لینگویج فائل سے مختلف زبان کے سٹرنگ کو منتخب کرنے کے لیے استعمال کیا جا سکتا ہے۔ عام طور پر اسے خالی چھوڑ دینا چاہئے۔ اپنی مرضی کے مطابق اقسام کے لیے، تفصیل کا فیلڈ استعمال کریں۔';
$string['defaulticon'] = 'MIME قسم کے لیے ڈیفالٹ آئیکن';
$string['defaulticon_help'] = 'اگر ایک ہی MIME قسم کے ساتھ متعدد فائل ایکسٹینشنز ہیں، تو اس آپشن کو کسی ایک ایکسٹینشن کے لیے منتخب کریں تاکہ MIME قسم سے آئیکن کا تعین کرتے وقت اس کا آئیکن استعمال کیا جائے۔';
$string['delete_confirmation'] = 'کیا آپ کو یقین ہے کہ آپ <strong>{$a}</strong> کو ہٹانا چاہتے ہیں؟';
$string['deletea'] = 'حذف کریں {$a}';
$string['deletefiletypes'] = 'فائل کی قسم کو حذف کریں';
$string['description'] = 'حسب ضرورت تفصیل';
$string['description_help'] = 'سادہ فائل کی قسم کی تفصیل، جیسے \'کنڈل ای بک\'۔ اگر آپ کی سائٹ متعدد زبانوں کو سپورٹ کرتی ہے اور ملٹی لینگویج فلٹر استعمال کرتی ہے، تو آپ مختلف زبانوں میں تفصیل فراہم کرنے کے لیے اس فیلڈ میں ملٹی لینگویج ٹیگز درج کر سکتے ہیں۔';
$string['descriptiontype'] = 'تفصیل کی قسم';
$string['descriptiontype_custom'] = 'حسب ضرورت وضاحت اس فارم میں بیان کی گئی ہے';
$string['descriptiontype_default'] = 'پہلے سے طے شدہ (MIME قسم یا متعلقہ زبان کی سٹرنگ اگر دستیاب ہو)';
$string['descriptiontype_help'] = 'تفصیل بیان کرنے کے تین ممکنہ طریقے ہیں۔ * پہلے سے طے شدہ سلوک MIME قسم کا استعمال کرتا ہے۔ اگر mimetypes.php میں اس MIME قسم سے مطابقت رکھنے والی زبان کی سٹرنگ ہے، تو اسے استعمال کیا جائے گا۔ بصورت دیگر MIME قسم خود صارفین کو دکھائی جائے گی۔ * آپ اس فارم پر اپنی مرضی کی تفصیل بتا سکتے ہیں۔ * آپ MIME قسم کی بجائے استعمال کرنے کے لیے mimetypes.php میں زبان کی سٹرنگ کا نام بتا سکتے ہیں۔';
$string['descriptiontype_lang'] = 'متبادل زبان کی سٹرنگ (mimetypes.php سے)';
$string['displaydescription'] = 'تفصیل';
$string['editfiletypes'] = 'موجودہ فائل کی قسم میں ترمیم کریں';
$string['emptylist'] = 'فائل کی کوئی قسم کی وضاحت نہیں کی گئی ہے۔';
$string['error_addentry'] = 'فائل کی قسم کی توسیع، تفصیل، MIME قسم، اور آئیکن میں لائن فیڈ اور سیمکولن حروف نہیں ہونے چاہئیں۔';
$string['error_defaulticon'] = 'اسی MIME قسم کے ساتھ ایک اور فائل ایکسٹینشن پہلے سے طے شدہ آئیکن کے طور پر نشان زد ہے۔';
$string['error_extension'] = 'فائل ٹائپ ایکسٹینشن <strong>{$a}</strong> پہلے سے موجود ہے یا غلط ہے۔ فائل ایکسٹینشنز منفرد ہونی چاہئیں اور ان میں خاص حروف نہیں ہونے چاہئیں۔';
$string['error_notfound'] = 'ایکسٹینشن {$a} والی فائل کی قسم نہیں مل سکتی۔';
$string['extension'] = 'ایکسٹینشن';
$string['extension_help'] = 'بغیر ڈاٹ کے فائل کے نام کی ایکسٹینشن، جیسے \'موبی\'';
$string['groups'] = 'گروپس ٹائپ کریں';
$string['groups_help'] = 'فائل ٹائپ گروپس کی اختیاری فہرست جن سے اس قسم کا تعلق ہے۔ یہ عام زمرے ہیں جیسے \'دستاویز\' اور \'تصویر\'۔';
$string['icon'] = 'فائل کا آئیکن';
$string['icon_help'] = 'آئیکن فائل کا نام۔ شبیہیں کی فہرست آپ کے موڈل انسٹالیشن کے اندر /pix/f ڈائریکٹری سے لی گئی ہے۔ اگر ضرورت ہو تو آپ اس فولڈر میں حسب ضرورت شبیہیں شامل کر سکتے ہیں۔';
$string['mimetype'] = 'MIME قسم';
$string['mimetype_help'] = 'اس فائل کی قسم سے وابستہ MIME قسم، جیسے \'application/x-mobipocket-ebook\'';
$string['pluginname'] = 'فائل کی اقسام';
$string['privacy:metadata'] = 'فائل ٹائپ پلگ ان کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔';
$string['revert'] = '{$a} کو موڈل ڈیفالٹس پر بحال کریں';
$string['revert_confirmation'] = 'کیا آپ واقعی اپنی تبدیلیوں کو رد کرتے ہوئے، <strong>{$a}</strong> کو موڈل ڈیفالٹس پر بحال کرنا چاہتے ہیں؟';
$string['revertfiletype'] = 'فائل کی قسم کو بحال کریں';
$string['source'] = 'قسم';
$string['source_custom'] = 'اپنی مرضی کے مطابق';
$string['source_deleted'] = 'حذف کر دیا گیا';
$string['source_modified'] = 'ترمیم شدہ';
$string['source_standard'] = 'معیاری';
