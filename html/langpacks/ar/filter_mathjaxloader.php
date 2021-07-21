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
 * Strings for component 'filter_mathjaxloader', language 'ar', version '3.11'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'المحددات الإضافية للمعادلات';
$string['additionaldelimiters_help'] = 'يقوم مرشح MathJax بتحليل النص بحثاً عن المعادلات المحتواة ما بين رموز المحددات.

يمكن إضافة قائمة برموز المحددات المعروفة هنا (مثلاً، AsciiMath تستعمل `). يمكن للمحددات أن تتضمن رموزاً متعددة ويمكن الفصل بين المحددات في القائمة بفوارز.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'رابط MathJax';
$string['httpsurl_help'] = 'الرابط الكامل لمكتبة MathJax';
$string['localinstall'] = 'تنصيب MathJax المحلي';
$string['localinstall_help'] = 'إن التهيئة الافتراضية لـ MathJax تستعمل إصدار CDN من MathJax، ولكن يمكن تنصيب MathJax محلياً إذا تطلب الأمر.

هذا قد يكون مفيداً لتوفير حزمة التراسل أو تقييدات الوكيل المحلي.

لاستعمال التنصيب المحلي من MathJax، قم أولاً يتنزيل المكتبة الكاملة لـ MathJax من https://www.mathjax.org/. ثم نصبه في مخدم ويب. وأخيراً قم بتحديث إعدادات مرشح MathJax httpurl و/أو httpsurl لتشير إلى رابط MathJax.js المحلي.';
$string['mathjaxsettings'] = 'تهيئة MathJax';
$string['mathjaxsettings_desc'] = 'إن التهيئة الافتراضية لـ MathJax ينبغي أن تكون مناسبة لأغلب المستخدمين، ولكن MathJax قابل للتخصيص إلى حد كبير ويمكن هنا إضافة أي من خيارات التهيئة القياسية لـ MathJax.';
$string['privacy:metadata'] = 'إن ملحق MathJax لا يخزن أي بيانات شخصية.';
$string['texfiltercompatibility'] = 'توافق مرشح TeX';
$string['texfiltercompatibility_help'] = 'مرشح MathJax يمكن استعماله كبديل عن مرشح ترميز TeX .

لدعم كل المحددات المدعومة من قبل مرشح ترميز TeX، ستتم تهيئة MathJax لعرض كل المعادلات "في نسق" النص.';
