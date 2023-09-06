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
 * Strings for component 'tool_langimport', language 'ur', version '4.1'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'ڈاؤن لوڈ سرور سے منسلک ہونے سے قاصر۔ لینگویج پیک کو خود بخود انسٹال یا اپ ڈیٹ کرنا ممکن نہیں ہے۔ براہ کرم مناسب زپ فائل (ز) کو <a href="{$a->src}">{$a->src}</a> سے ڈاؤن لوڈ کریں اور اپنی ڈیٹا ڈائرکٹری <code>{$a- میں دستی طور پر ان زپ کریں۔ >dest</code>';
$string['install'] = 'منتخب لینگویج پیک انسٹال کریں';
$string['installedlangs'] = 'انسٹال کردہ لینگویج پیک';
$string['installfailed'] = 'زبان کے پیک کی تنصیب ناکام ہو گئی!';
$string['installfinished'] = 'لینگویج پیک کی تنصیب مکمل ہو گئی۔';
$string['installpending'] = 'درج ذیل لینگویج پیک جلد ہی انسٹال ہو جائیں گے: {$a}۔';
$string['installscheduled'] = 'لینگویج پیک انسٹال کرنے کے لیے شیڈول کیے گئے ہیں۔';
$string['langimport'] = 'زبان کی درآمد کی افادیت';
$string['langimportdisabled'] = 'زبان کی درآمد کی خصوصیت کو غیر فعال کر دیا گیا ہے۔ آپ کو اپنے لینگویج پیک کو فائل سسٹم کی سطح پر دستی طور پر اپ ڈیٹ کرنا ہوگا۔ ایسا کرنے کے بعد سٹرنگ کیچز کو صاف کرنا نہ بھولیں۔';
$string['langpackinstalled'] = 'زبان کا پیک \'{$a}\' کامیابی سے انسٹال ہو گیا تھا';
$string['langpackinstalledevent'] = 'زبان کا پیک انسٹال ہو گیا';
$string['langpacknotremoved'] = 'ایک خرابی آگئی ہے؛ لینگویج پیک \'{$a}\' مکمل طور پر ان انسٹال نہیں ہوا ہے۔ براہ کرم فائل کی اجازتوں کو چیک کریں۔';
$string['langpackremoved'] = 'زبان کا پیک \'{$a}\' اَن انسٹال کر دیا گیا تھا';
$string['langpackremovedevent'] = 'زبان کا پیک اَن انسٹال کر دیا گیا';
$string['langpackupdated'] = 'لینگویج پیک \'{$a}\' کو کامیابی کے ساتھ اپ ڈیٹ کر دیا گیا';
$string['langpackupdatedevent'] = 'زبان کا پیک اپ ڈیٹ ہو گیا';
$string['langpackupdateskipped'] = '\'{$a}\' لینگویج پیک کی اپ ڈیٹ کو چھوڑ دیا گیا';
$string['langpackuptodate'] = 'زبان کا پیک \'{$a}\' اپ ٹو ڈیٹ ہے';
$string['langunsupported'] = '<p>ایسا لگتا ہے کہ آپ کا سرور درج ذیل زبانوں کو مکمل طور پر سپورٹ نہیں کرتا:</p><ul>{$a->missinglocales</ul><p>اس کے بجائے، عالمی لوکیل ({$a->globallocale}) کچھ تاروں جیسے تاریخوں یا نمبروں کو فارمیٹ کرنے کے لیے استعمال کیا جائے گا۔</p>';
$string['langupdatecomplete'] = 'زبان پیک اپ ڈیٹ مکمل ہو گیا';
$string['missingcfglangotherroot'] = 'غائب کنفیگریشن قدر $CFG->langotherroot';
$string['missinglangparent'] = '<em>{$a->lang}</em> کی بنیادی زبان <em>{$a->parent}</em> غائب ہے۔';
$string['noenglishuninstall'] = 'انگریزی زبان کے پیک کو ان انسٹال نہیں کیا جا سکتا۔';
$string['nolangupdateneeded'] = 'آپ کے تمام لینگویج پیک اپ ٹو ڈیٹ ہیں، کسی اپ ڈیٹ کی ضرورت نہیں ہے';
$string['pluginname'] = 'زبانوں کے بنڈل';
$string['privacy:metadata'] = 'لینگویج پیک پلگ ان کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔';
$string['purgestringcaches'] = 'سٹرنگ کیچز کو صاف کریں';
$string['search'] = 'دستیاب زبان کے پیک تلاش کریں';
$string['selectlangs'] = 'ان انسٹال کرنے کے لیے زبانیں منتخب کریں';
$string['uninstall'] = 'منتخب کردہ لینگویج پیک کو ان انسٹال کریں';
$string['uninstallconfirm'] = 'آپ ان لینگویج پیک کو مکمل طور پر ان انسٹال کرنے والے ہیں: <strong>{$a}</strong>۔ کیا تمہیں یقین ہے؟';
$string['updatelangs'] = 'تمام انسٹال شدہ لینگویج پیک کو اپ ڈیٹ کریں';
$string['updatelangsnote'] = 'بٹن پر کلک کر کے تمام انسٹال شدہ لینگویج پیک کو اپ ڈیٹ کرنے میں کافی وقت لگ سکتا ہے اور ٹائم آؤٹ ہو سکتا ہے۔ اس کی بجائے تجویز کیا جاتا ہے کہ طے شدہ کام \'{$a->taskname}\' (جو ہر روز ڈیفالٹ کے طور پر چلتا ہے) کا استعمال کریں۔';
