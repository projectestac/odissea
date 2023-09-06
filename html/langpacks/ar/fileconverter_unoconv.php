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
 * Strings for component 'fileconverter_unoconv', language 'ar', version '4.1'.
 *
 * @package     fileconverter_unoconv
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'المسار إلى محول الوثائق  unoconv';
$string['pathtounoconv_help'] = 'المسار إلى محول الوثائق unoconv. هذا ملف قابل للتنفيذ وقادر على التحويل بين تنسيقات المستندات التي يدعمها LibreOffice.
هذا إختياري، ولكن إذا تم تحديده، فسيستعمله مودل للتحويل تلقائياً بين تنسيقات المستندات. يستعمل هذا لدعم مجموعة واسعة من ملفات الإدخال لميزة كتابة الشروحات على ملفات الواجبات التي بصيغة PDF.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'لا تقوم إضافة تحويل المستندات Unoconv  بتخزين أيّ بيانات شخصية.';
$string['test_unoconv'] = 'اختبار مسار unoconv';
$string['test_unoconvdoesnotexist'] = 'مسار unoconv لا يشير إلى برنامج unoconv.
يرجى مراجعة إعدادات المسار الخاص بك.';
$string['test_unoconvdownload'] = 'قم بتنزيل ملف اختبار  محول pdf.';
$string['test_unoconvempty'] = 'لم يتم تعيين مسار unoconv.
يرجى مراجعة إعدادات المسار الخاص بك.';
$string['test_unoconvisdir'] = 'يشير مسار unoconv إلى مجلد ، يرجى تضمين برنامج unoconv في المسار الذي تحدده';
$string['test_unoconvnotestfile'] = 'مستند الاختبار المطلوب تحويله إلى PDF مفقود.';
$string['test_unoconvnotexecutable'] = 'يشير مسار unoconv إلى ملف غير قابل للتنفيذ';
$string['test_unoconvok'] = 'يبدو أن مسار unoconv قد تم تكوينه بشكل صحيح.';
$string['test_unoconvversionnotsupported'] = 'إصدار unoconv الذي قمت بتنصيبه غير مدعوم.';
