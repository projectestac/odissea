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
 * Strings for component 'qtype_randomsamatch', language 'ar', version '3.11'.
 *
 * @package     qtype_randomsamatch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insufficientoptions'] = 'لا تتوافر خيارات كافية في هذا السؤال، لذلك هو غير متاح في هذا الاختبار. لطفاً، أبلغ معلمك.';
$string['nosaincategory'] = 'ليس هناك أسئلة إجابات قصيرة في الصنف الذي اخترته \'{$a->catname}\'. إختر صنفاً آخر وضَع فيه بعض الأسئلة.';
$string['notenoughsaincategory'] = 'هناك فقط {$a->nosaquestions} أسئلة إجابات قصيرة في الصنف الذي اخترته \'{$a->catname}\'. إختر صنفاً آخر وضَع فيه مزيداً من الأسئلة أو قم بتقليل عدد الأسئلة التي اخترتها.';
$string['pluginname'] = 'مطابقة إجابة قصيرة عشوائي';
$string['pluginname_help'] = 'من وجهة نظر الطلبة، هذا يبدو مماثلاً لسؤال المطابقة. الفرق هو أن قائمة الأسماء أو العبارات (الأسئلة) للمطابقة يتم سحبها عشوائياً من أسئلة الإجابة القصيرة في التصنيف الحالي. ينبغي أن يكون هناك عدد كاف من تلك الأسئلة غير مستعمل، بخلافه، ستظهر رسالة خطأ.';
$string['pluginnameadding'] = 'تجري إضافة سؤال إجابة قصيرة عشوائي';
$string['pluginnameediting'] = 'يجري تحرير سؤال إجابة قصيرة عشوائي';
$string['pluginnamesummary'] = 'كسؤال المطابقة، ولكنه منشأ عشوائياً من أسئلة الإجابة القصيرة من صنف معين.';
$string['privacy:metadata'] = 'إن ملحق نوع السؤال، مطابقة الإجابة القصيرة العشوائي لا يخزن أي بيانات شخصية.';
$string['randomsamatch'] = 'مطابقة الإجابة القصيرة العشوائي';
$string['randomsamatchintro'] = 'لأي من الأسئلة الآتية، إختر الإجابة المطابقة من القائمة.';
$string['randomsamatchnumber'] = 'عدد الأسئلة المزمع إختيارها';
$string['subcats'] = 'تضمين الأصناف الفرعية';
$string['subcats_help'] = 'عند تأشيره، سيتم اختيار الأسئلة من الأصناف الفرعية أيضاً.';
