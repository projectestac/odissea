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
 * Strings for component 'qbehaviour_deferredcbm', language 'ur', version '4.4'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'درستگی';
$string['accuracyandbonus'] = 'درستگی + بونس';
$string['assumingcertainty'] = 'آپ نے یقین کا انتخاب نہیں کیا۔ فرض کرنا: {$a}۔';
$string['averagecbmmark'] = 'اوسط CBM نشان';
$string['basemark'] = 'بنیادی نشان {$a}';
$string['breakdownbycertainty'] = 'یقین سے ٹوٹنا';
$string['cbmbonus'] = 'CBM بونس';
$string['cbmgradeexplanation'] = 'CBM کے لیے، اوپر کا درجہ C=1 پر تمام درست کے لیے زیادہ سے زیادہ کے نسبت دکھایا گیا ہے۔';
$string['cbmgrades'] = 'CBM گریڈز';
$string['cbmgrades_help'] = 'یقینی پر مبنی مارکنگ(CBM) کے ساتھ C=1 (کم یقین) کے ساتھ ہر سوال کا درست ہونا 100% کا گریڈ دیتا ہے۔ گریڈز زیادہ سے زیادہ 300% ہوسکتے ہیں اگر ہر سوال C=3 (ہائی یقین) کے ساتھ درست ہے۔ غلط فہمیاں (پراعتماد غلط جوابات) غلط جوابات سے کہیں زیادہ کم درجے جن کو غیر یقینی تسلیم کیا جاتا ہے۔ یہ مجموعی طور پر منفی درجات کا باعث بھی بن سکتا ہے۔ **درستگی** یقین کو نظر انداز کرتے ہوئے % درست ہے لیکن ہر سوال کے زیادہ سے زیادہ نمبر کے لیے وزنی ہے۔ زیادہ اور کم قابل اعتماد جوابات میں کامیابی کے ساتھ فرق کرنا ہر سوال کے لیے ایک ہی یقین کو منتخب کرنے سے بہتر درجہ دیتا ہے۔ یہ **CBM بونس** میں ظاہر ہوتا ہے۔ **درستیت** + **CBM بونس** **درستگی** سے بہتر علم کا پیمانہ ہے۔ غلط فہمیاں منفی بونس کا باعث بن سکتی ہیں، یہ انتباہ ہے کہ کیا معلوم ہے اور کیا نہیں ہے اسے غور سے دیکھیں۔';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['cbmmark'] = 'CBM نشان {$a}';
$string['certainty'] = 'یقینی';
$string['certainty-1'] = 'کچھ اندازہ نہیں';
$string['certainty1'] = 'C=1 (غیر یقینی: <67%)';
$string['certainty2'] = 'C=2 (وسط: >67%)';
$string['certainty3'] = 'C=3 (بالکل یقینی: >80%)';
$string['certainty_help'] = 'یقینییت پر مبنی مارکنگ آپ سے یہ بتانے کی ضرورت ہے کہ آپ کے خیال میں آپ کا جواب کتنا قابل اعتماد ہے۔ دستیاب سطحیں ہیں: یقینی سطح | C=1 (غیر یقینی) | C=2 (وسط) | C=3 (بالکل یقین ہے) ------------------- | ------------ | --------- | ---------------- درست ہے تو نشان زد کریں | 1 | 2 | 3 اگر غلط ہے تو نشان زد کریں | 0 | -2 | -6 احتمال درست | <67% | 67-80% | >80% بہترین نمبر غیر یقینی صورتحال کو تسلیم کرکے حاصل کیے جاتے ہیں۔ مثال کے طور پر، اگر آپ سوچتے ہیں کہ غلط ہونے کے 3 میں سے 1 سے زیادہ امکانات ہیں، تو آپ کو C=1 درج کرنا چاہیے اور منفی نشان کے خطرے سے بچنا چاہیے۔';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certaintyshort-1'] = 'کچھ اندازہ نہیں';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'کچھ اندازہ نہیں';
$string['foransweredquestions'] = 'صرف {$a} جوابات والے سوالات کے نتائج';
$string['forentirequiz'] = 'پورے کوئز کے نتائج ({$a} سوالات)';
$string['howcertainareyou'] = 'یقینی بات{$a->help}: {$a->choices}';
$string['judgementok'] = 'ٹھیک ہے';
$string['judgementsummary'] = 'جوابات: {$a->responses}۔ درستگی: {$a->fraction}۔ (بہترین حد {$a->idealrangelow} سے {$a->idealrangehigh})۔ آپ اس یقین کی سطح کو استعمال کرتے ہوئے {$a->judgement} تھے۔';
$string['noquestions'] = 'کوئی جواب نہیں';
$string['overconfident'] = 'زیادہ پر اعتماد';
$string['pluginname'] = 'CBM کے ساتھ مؤخر کردہ تاثرات';
$string['privacy:metadata'] = 'CBM سوال برتاؤ پلگ ان کے ساتھ موخر شدہ تاثرات کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔';
$string['slightlyoverconfident'] = 'تھوڑا زیادہ اعتماد';
$string['slightlyunderconfident'] = 'تھوڑا کم اعتماد';
$string['underconfident'] = 'کم اعتماد';
$string['weightx'] = 'وزن {$a}';
