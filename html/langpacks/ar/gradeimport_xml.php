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
 * Strings for component 'gradeimport_xml', language 'ar', version '4.4'.
 *
 * @package     gradeimport_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = 'خطأ - تنسيق XML خاطئ';
$string['errduplicategradeidnumber'] = 'خطأ - هناك مفردتا تقييم تحملان الرمز التعريفي \'{$a}\' في هذا المساق. ينبغي أن يكون ذلك مستحيلاً.';
$string['errduplicateidnumber'] = 'خطأ - تكرار في الرمز التعريفي';
$string['errincorrectgradeidnumber'] = 'خطأ - الرمز التعريفي \'{$a}\' من ملف الاستيراد لا يطابق أي عنصر تقييم.';
$string['errincorrectidnumber'] = 'خطأ - رمز تعريفي خاطئ';
$string['errincorrectuseridnumber'] = 'خطأ - الرمز التعريفي \'{$a}\' من ملف الاستيراد لا يطابق أي مستخدم.';
$string['error'] = 'وقعت أخطاء';
$string['errorduringimport'] = 'وقع خطأ عند محاولة الاستيراد: {$a}';
$string['fileurl'] = 'رابط الملف البعيد';
$string['fileurl_help'] = 'حقل رابط الملف البعيد هو من أجل إحضار البيانات من مخدم بعيد، مثل أنظمة معلومات الطلبة.';
$string['importxml'] = 'استيراد XML';
$string['importxml_help'] = 'يمكن استيراد التقديرات بواسطة ملف XML يحتوي على مُعرَّفات المستخدمين ومُعرَّفات النشاطات. للحصول على التنسيق الصحيح، قم أولاً بتصدير بعض التقديرات إلى ملف XML ثم عاينه.';
$string['importxml_link'] = 'grade/import/xml/index';
$string['pluginname'] = 'ملف XML';
$string['privacy:metadata'] = 'إن ملحق استيراد التقديرات من XML لا يخزن أي بيانات شخصية.';
$string['xml:publish'] = 'نشر التقديرات المستوردة من XML';
$string['xml:view'] = 'استيراد التقديرات من XML';
