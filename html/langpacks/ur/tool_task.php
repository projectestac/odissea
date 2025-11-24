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
 * Strings for component 'tool_task', language 'ur', version '4.5'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'اس کو';
$string['adhocempty'] = 'ایڈہاک ٹاسک کی قطار خالی ہے';
$string['adhocqueueold'] = 'سب سے پرانا کام {$a->age} ہے جو کہ {$a->max} سے زیادہ ہے۔';
$string['adhocqueuesize'] = 'ایڈہاک ٹاسک کیو میں {$a} کام ہیں';
$string['adhoctaskid'] = 'ایڈہاک ٹاسک آئی ڈی: {$a}';
$string['adhoctasks'] = 'ایڈہاک کام';
$string['asap'] = 'جتنی جلدی ہو سکے';
$string['backtoscheduledtasks'] = 'طے شدہ کاموں پر واپس جائیں';
$string['blocking'] = 'بلاک کرنا';
$string['cannotfindthepathtothecli'] = 'PHP CLI قابل عمل کا راستہ تلاش نہیں کر سکتا لہذا ٹاسک پر عمل درآمد روک دیا گیا۔ سائٹ ایڈمنسٹریشن/سرور/سسٹم پاتھز میں \'پی ایچ پی سی ایل آئی کا راستہ\' سیٹ کریں۔';
$string['checkadhocqueue'] = 'ایڈہاک ٹاسک قطار';
$string['checkcronrunning'] = 'کرون چل رہا ہے';
$string['checkmaxfaildelay'] = 'کاموں میں زیادہ سے زیادہ ناکامی میں تاخیر';
$string['classname'] = 'کلاس کا نام';
$string['clearfaildelay_confirm'] = 'کیا آپ واقعی ٹاسک \'{$a}\' کی ناکامی کی تاخیر کو ختم کرنا چاہتے ہیں؟ تاخیر کو صاف کرنے کے بعد، کام اپنے معمول کے شیڈول کے مطابق چلے گا۔';
$string['component'] = 'جزو';
$string['corecomponent'] = 'لازمی';
$string['crondisabled'] = 'کرون غیر فعال ہے۔ کوئی نیا کام شروع نہیں کیا جائے گا۔ سسٹم اس وقت تک ٹھیک سے کام نہیں کرے گا جب تک اسے دوبارہ فعال نہیں کیا جاتا ہے۔';
$string['cronok'] = 'کرون کثرت سے چل رہا ہے';
$string['default'] = 'طے شدہ';
$string['defaultx'] = 'طے شدہ: {$a}';
$string['disabled'] = 'غیر فعال';
$string['disabled_help'] = 'غیر فعال طے شدہ کاموں کو کرون سے انجام نہیں دیا جاتا ہے، تاہم انہیں پھر بھی CLI ٹول کے ذریعے دستی طور پر انجام دیا جا سکتا ہے۔';
$string['edittaskschedule'] = 'کام کے شیڈول میں ترمیم کریں: {$a}';
$string['enablerunnow'] = 'طے شدہ کاموں کے لیے \'ابھی چلائیں\' کی اجازت دیں';
$string['enablerunnow_desc'] = 'منتظمین کو ایک طے شدہ کام کو فوری طور پر چلانے کی اجازت دیتا ہے، بجائے اس کے کہ اس کے شیڈول کے مطابق چلنے کا انتظار کریں۔ فیچر کے لیے \'Path to PHP CLI\' (pathtophp) کو سسٹم پاتھز میں سیٹ کرنے کی ضرورت ہے۔ یہ کام ویب سرور پر چلتا ہے، اس لیے آپ ممکنہ کارکردگی کے مسائل سے بچنے کے لیے اس خصوصیت کو غیر فعال کر سکتے ہیں۔';
$string['faildelay'] = 'ناکام تاخیر';
$string['fromcomponent'] = 'جزو سے: {$a}';
$string['hostname'] = 'میزبان کا نام';
$string['lastruntime'] = 'آخری دوڑ';
$string['lastupdated'] = 'آخری بار اپ ڈیٹ کیا گیا {$a}۔';
$string['nextruntime'] = 'اگلی دوڑ';
$string['pid'] = 'پی آئی ڈی';
$string['plugindisabled'] = 'پلگ ان غیر فعال ہے';
$string['pluginname'] = 'طے شدہ کام کی ترتیب';
$string['privacy:metadata'] = 'شیڈول کردہ ٹاسک کنفیگریشن پلگ ان کوئی ذاتی ڈیٹا محفوظ نہیں کرتا ہے۔';
$string['resettasktodefaults'] = 'ٹاسک شیڈول کو ڈیفالٹ پر ری سیٹ کریں';
$string['resettasktodefaults_help'] = 'یہ کسی بھی مقامی تبدیلیوں کو رد کر دے گا اور اس کام کے شیڈول کو اس کی اصل ترتیبات پر واپس لے جائے گا۔';
$string['runagain'] = 'دوبارہ چلائیں';
$string['runningtasks'] = 'کام ابھی چل رہے ہیں';
$string['runnow'] = 'اب چلائیں';
$string['runnow_confirm'] = 'کیا آپ واقعی یہ کام \'{$a}\' ابھی چلانا چاہتے ہیں؟ یہ کام ویب سرور پر چلے گا اور اسے مکمل ہونے میں کچھ وقت لگ سکتا ہے۔';
$string['runpattern'] = 'چلائیں پیٹرن';
$string['scheduled'] = 'طے شدہ';
$string['scheduledtaskchangesdisabled'] = 'موڈل کنفیگریشن میں طے شدہ کاموں کی فہرست میں ترمیم کو روک دیا گیا ہے';
$string['scheduledtasks'] = 'طے شدہ کام';
$string['started'] = 'شروع';
$string['taskdisabled'] = 'ٹاسک غیر فعال ہے';
$string['taskfailures'] = '{$a} کام ناکام ہو رہا ہے';
$string['tasklogs'] = 'ٹاسک لاگز';
$string['tasknofailures'] = 'ناکام ہونے والے کام نہیں ہیں';
$string['taskscheduleday'] = 'دن';
$string['taskscheduleday_help'] = 'ٹاسک شیڈول کے لیے مہینے کا دن۔ فیلڈ یونکس کرون کی طرح ہی فارمیٹ استعمال کرتی ہے۔ کچھ مثالیں یہ ہیں: * <strong>*</strong> ہر دن * <strong>*/2</strong> ہر دوسرے دن * <strong>1</strong> ہر مہینے کا پہلا * <strong>1,15 </strong>ہر مہینے کی پہلی اور پندرہ تاریخ';
$string['taskscheduledayofweek'] = 'ہفتے کا دن';
$string['taskscheduledayofweek_help'] = 'کام کے شیڈول کے لیے ہفتے کا دن۔ فیلڈ یونکس کرون کی طرح ہی فارمیٹ استعمال کرتی ہے۔ کچھ مثالیں یہ ہیں: * <strong>*</strong> ہر روز * <strong>0</strong> ہر اتوار * <strong>6</strong> ہر ہفتہ * <strong>1,5</strong> ہر پیر اور جمعہ';
$string['taskschedulehour'] = 'گھنٹہ';
$string['taskschedulehour_help'] = 'کام کے شیڈول کے لیے گھنٹے کا میدان۔ فیلڈ یونکس کرون کی طرح ہی فارمیٹ استعمال کرتی ہے۔ کچھ مثالیں یہ ہیں: * <strong>*</strong> ہر گھنٹے * <strong>*/2</strong> ہر 2 گھنٹے * <strong>2-10</strong> ہر گھنٹے 2am سے صبح 10am تک (بشمول) * <strong>2,6,9</strong> 2am، 6am اور 9am';
$string['taskscheduleminute'] = 'منٹ';
$string['taskscheduleminute_help'] = 'ٹاسک شیڈول کے لیے منٹ فیلڈ۔ فیلڈ یونکس کرون کی طرح ہی فارمیٹ استعمال کرتی ہے۔ کچھ مثالیں یہ ہیں: * <strong>*</strong> ہر منٹ * <strong>*/5</strong> ہر 5 منٹ * <strong>2-10</strong> ہر منٹ 2 اور 10 کے درمیان گھنٹہ گزرے ( شامل) * <strong>2,6,9</strong> 2، 6 اور 9 منٹ گزرے گھنٹے';
$string['taskschedulemonth'] = 'مہینہ';
$string['taskschedulemonth_help'] = 'ٹاسک شیڈول کے لیے مہینے کا فیلڈ۔ فیلڈ یونکس کرون کی طرح ہی فارمیٹ استعمال کرتی ہے۔ کچھ مثالیں یہ ہیں: * <strong>*</strong> ہر ماہ * <strong>*/2</strong> ہر دوسرے مہینے * <strong>1</strong> ہر جنوری * <strong>1,5</strong> > ہر جنوری اور مئی';
$string['viewlogs'] = '{$a} کے لیے لاگز دیکھیں';
