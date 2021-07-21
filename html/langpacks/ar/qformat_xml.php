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
 * Strings for component 'qformat_xml', language 'ar', version '3.11'.
 *
 * @package     qformat_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = 'ملف XML غير صحيح - يُتوقع وجود نص (هل تستعمل CDATA؟)';
$string['pluginname'] = 'صيغة XML لمودل';
$string['pluginname_help'] = 'هذه صيغة خاصة بمودل لتصدير واستيراد الأسئلة';
$string['privacy:metadata'] = 'إن ملحق صيغة السؤال XML لا يخزن أي بيانات شخصية.';
$string['truefalseimporterror'] = '<b>تحذير</b>: تعذر استيراد سؤال صح/خطأ \'{$a->questiontext}\' بشكل صحيح. لم يكن واضحاً فيما إذا كانت الإجابة الصحيحة هي صح أم خطأ. تم استيراد السؤال على فرض أن إجابته هي \'{$a->answer}\'. إذا كان ذلك خاطئاً، فعليك تحرير السؤال.';
$string['unsupportedexport'] = 'نوع السؤال {$a} غير مدعوم للتصدير بصيغة XML';
$string['xmlimportnoname'] = 'اسم السؤال مفقود في ملف XML';
$string['xmlimportnoquestion'] = 'نص السؤال مفقود في ملف XML';
$string['xmltypeunsupported'] = 'نوع السؤال {$a} غير مدعوم للاستيراد بصيغة XML';
