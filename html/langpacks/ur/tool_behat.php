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
 * Strings for component 'tool_behat', language 'ur', version '4.1'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'یہ ایڈمنسٹریشن ٹول ڈویلپرز اور ٹیسٹ رائٹرز کو موڈل کی خصوصیات کو بیان کرنے والی .feature فائلیں بنانے میں مدد کرتا ہے اور انہیں خود بخود چلاتا ہے۔ .feature فائلوں میں استعمال کے لیے دستیاب مرحلہ کی تعریفیں ذیل میں درج ہیں۔';
$string['allavailablesteps'] = 'تمام دستیاب مرحلہ تعریفیں';
$string['errorbehatcommand'] = 'بیہٹ CLI کمانڈ چلانے میں خرابی۔ مسئلہ کے بارے میں مزید جاننے کے لیے CLI سے "{$a} --help" کو دستی طور پر چلانے کی کوشش کریں۔';
$string['errorcomposer'] = 'کمپوزر انحصار انسٹال نہیں ہیں۔';
$string['errordataroot'] = '$CFG->behat_dataroot سیٹ نہیں ہے یا غلط ہے۔';
$string['errorsetconfig'] = '$CFG->behat_dataroot، $CFG->behat_prefix اور $CFG->behat_wwwroot کو config.php میں سیٹ کرنے کی ضرورت ہے۔';
$string['erroruniqueconfig'] = '$CFG->behat_dataroot، $CFG->behat_prefix اور $CFG->behat_wwwroot اقدار کو $CFG->dataroot، $CFG->پریفکس، $CFG->wwwroot، $CFG->phpunit_dataroot اور $CFG- سے مختلف ہونے کی ضرورت ہے۔ >phpunit_prefix اقدار۔';
$string['fieldvalueargument'] = 'فیلڈ ویلیو کے دلائل';
$string['fieldvalueargument_help'] = 'اس دلیل کو فیلڈ ویلیو سے مکمل کیا جانا چاہیے۔ فیلڈ کی بہت سی قسمیں ہیں، بشمول چیک باکسز، سلیکٹس یا ٹیکسٹیریاز، یا ڈیٹ سلیکٹر جیسے پیچیدہ۔ متوقع فیلڈ اقدار کی تفصیلات کے لیے ڈیو دستاویزات <a href="https://docs.moodle.org/dev/Acceptance_testing" target="_blank">Acceptance_testing</a> دیکھیں۔';
$string['giveninfo'] = 'دیا. ماحول کو ترتیب دینے کے عمل';
$string['infoheading'] = 'معلومات';
$string['installinfo'] = 'تنصیب اور جانچ کے عمل کی معلومات کے لیے {$a} پڑھیں';
$string['newstepsinfo'] = 'نئے قدم کی تعریفیں شامل کرنے کے بارے میں معلومات کے لیے {$a} پڑھیں';
$string['newtestsinfo'] = 'نئے ٹیسٹ لکھنے کے طریقے کے بارے میں معلومات کے لیے {$a} پڑھیں';
$string['nostepsdefinitions'] = 'اس فلٹر سے مماثل قدم کی کوئی تعریف نہیں ہے';
$string['pluginname'] = 'قبولیت کی جانچ';
$string['privacy:metadata'] = 'قبولیت ٹیسٹنگ پلگ ان کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔';
$string['stepsdefinitionscomponent'] = 'رقبہ';
$string['stepsdefinitionscontains'] = 'مشتمل';
$string['stepsdefinitionsfilters'] = 'مرحلہ تعریفیں';
$string['stepsdefinitionstype'] = 'قسم';
$string['theninfo'] = 'پھر. اس بات کو یقینی بنانے کے لیے جانچ پڑتال کی جاتی ہے کہ نتائج متوقع ہیں۔';
$string['unknownexceptioninfo'] = 'سیلینیم یا آپ کے براؤزر میں ایک مسئلہ تھا۔ براہ کرم یقینی بنائیں کہ آپ سیلینیم کا تازہ ترین ورژن استعمال کر رہے ہیں۔ خرابی:';
$string['viewsteps'] = 'فلٹر';
$string['warndirrootconfigfound'] = 'ایک کنفیگریشن فائل {$a} پر ملی۔ یہ فائل خود بخود اپ ڈیٹ نہیں ہوتی ہے اور یہ باسی ہو سکتی ہے۔ ہم اس فائل کو ہٹانے کی تجویز کرتے ہیں۔';
$string['wheninfo'] = 'کب. ایسا عمل جو کسی واقعہ کو مشتعل کرتا ہے';
$string['wrongbehatsetup'] = 'بیہٹ سیٹ اپ میں کچھ گڑبڑ ہے اور اس لیے مرحلہ وار تعریفیں درج نہیں کی جا سکتیں: <b>{$a->errormsg}</b><br/><br/>براہ کرم چیک کریں:<ul> <li>$CFG-> behat_dataroot، $CFG->behat_prefix اور $CFG->behat_wwwroot کو $CFG->dataroot، $CFG->پریفکس اور $CFG->wwwroot سے مختلف اقدار کے ساتھ config.php میں سیٹ کیا گیا ہے۔</li> <li>آپ بھاگ گئے آپ کی موڈل روٹ ڈائرکٹری سے "{$a->behatinit}"۔</li> <li>انحصارات وینڈر/ میں انسٹال ہیں اور {$a->behatcommand} فائل کو عمل درآمد کی اجازت ہے۔</li></ul>';
