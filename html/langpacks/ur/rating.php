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
 * Strings for component 'rating', language 'ur', version '4.1'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'درجہ بندی کا اوسط';
$string['aggregatecount'] = 'درجہ بندی کی گنتی';
$string['aggregatemax'] = 'زیادہ سے زیادہ درجہ بندی';
$string['aggregatemin'] = 'کم سے کم درجہ بندی';
$string['aggregatenone'] = 'کوئی درجہ بندی نہیں';
$string['aggregatesum'] = 'ریٹنگز کا مجموعہ';
$string['aggregatetype'] = 'مجموعی قسم';
$string['aggregatetype_help'] = 'مجموعی قسم اس بات کی وضاحت کرتی ہے کہ درجہ بندی کو کس طرح ملا کر گریڈ بک میں حتمی درجہ بنایا جاتا ہے۔ * درجہ بندی کا اوسط - تمام درجہ بندیوں کا اوسط * درجہ بندیوں کی تعداد - درجہ بندی کی گئی اشیاء کی تعداد حتمی درجہ بن جاتی ہے۔ نوٹ کریں کہ کل سرگرمی کے لیے زیادہ سے زیادہ گریڈ سے زیادہ نہیں ہو سکتا۔ *زیادہ سے زیادہ - سب سے زیادہ درجہ بندی حتمی درجہ بن جاتی ہے * کم از کم - سب سے چھوٹی درجہ بندی حتمی درجہ بن جاتی ہے * رقم - تمام درجہ بندی ایک ساتھ شامل کی جاتی ہیں۔ نوٹ کریں کہ کل سرگرمی کے لیے زیادہ سے زیادہ گریڈ سے زیادہ نہیں ہو سکتا۔ اگر "کوئی درجہ بندی نہیں" کو منتخب کیا جاتا ہے، تو سرگرمی گریڈ بک میں ظاہر نہیں ہوگی۔';
$string['allowratings'] = 'آئٹمز کی درجہ بندی کرنے کی اجازت دیں؟';
$string['allratingsforitem'] = 'تمام جمع کرائی گئی ریٹنگز';
$string['capabilitychecknotavailable'] = 'صلاحیت کی جانچ اس وقت تک دستیاب نہیں ہے جب تک کہ سرگرمی محفوظ نہ ہو جائے';
$string['couldnotdeleteratings'] = 'معذرت، اسے حذف نہیں کیا جا سکتا کیونکہ لوگ پہلے ہی اس کی درجہ بندی کر چکے ہیں';
$string['norate'] = 'اشیاء کی درجہ بندی کی اجازت نہیں ہے!';
$string['noratings'] = 'کوئی درجہ بندی جمع نہیں کی گئی';
$string['noviewanyrate'] = 'آپ صرف اپنے بنائے ہوئے آئٹمز کے نتائج دیکھ سکتے ہیں';
$string['noviewrate'] = 'آپ کے پاس آئٹم کی درجہ بندی دیکھنے کی اہلیت نہیں ہے';
$string['privacy:metadata:rating'] = 'صارف کی درج کردہ درجہ بندی اس آئٹم کی نقشہ سازی کے ساتھ محفوظ کی جاتی ہے جس کی درجہ بندی کی گئی تھی۔';
$string['privacy:metadata:rating:rating'] = 'عددی درجہ بندی جو صارف نے درج کی ہے۔';
$string['privacy:metadata:rating:timecreated'] = 'وہ وقت جب درجہ بندی پہلی بار کی گئی تھی۔';
$string['privacy:metadata:rating:timemodified'] = 'وہ وقت جب درجہ بندی کو آخری بار اپ ڈیٹ کیا گیا تھا۔';
$string['privacy:metadata:rating:userid'] = 'وہ صارف جس نے درجہ بندی کی۔';
$string['rate'] = 'درجہ';
$string['ratepermissiondenied'] = 'آپ کو اس آئٹم کی درجہ بندی کرنے کی اجازت نہیں ہے';
$string['rating'] = 'درجہ بندی';
$string['ratinginvalid'] = 'درجہ بندی غلط ہے';
$string['ratings'] = 'درجہ بندی';
$string['ratingtime'] = 'اس رینج میں تاریخوں والے آئٹمز کی درجہ بندی کو محدود کریں:';
$string['rolewarning'] = 'درجہ بندی کی اجازت کے ساتھ کردار';
$string['rolewarning_help'] = 'ریٹنگ جمع کرانے کے لیے صارفین کو موڈل/ریٹنگ:ریٹ کی اہلیت اور کسی ماڈیول کی مخصوص صلاحیتوں کی ضرورت ہوتی ہے۔ درج ذیل کردار تفویض کردہ صارفین کو اشیاء کی درجہ بندی کرنے کے قابل ہونا چاہئے۔ کرداروں کی فہرست میں تھیم کے لحاظ سے ایکشن مینو یا ایڈمنسٹریشن بلاک میں اجازت کے لنک کے ذریعے ترمیم کی جا سکتی ہے۔';
$string['scaleselectionrequired'] = 'درجہ بندی کی مجموعی قسم کا انتخاب کرتے وقت آپ کو اسکیل استعمال کرنے یا زیادہ سے زیادہ پوائنٹس سیٹ کرنے کا انتخاب بھی کرنا چاہیے۔';
