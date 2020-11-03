<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'logstore_legacy', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   logstore_legacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'تم توثيق الحدث القديم';
$string['loglegacy'] = 'توثيق البيانات القديمة';
$string['loglegacy_help'] = 'يسجل هذا الملحق بيانات سجل الوقوعات في جدول الوقوعات القديم (mdl_log). تم استبدال هذه الوظيفة بما هو أحدث، أغنى، وأكثر فعالية، من الملاحق، لذا ينبغي عليك تشغيل هذا الملحق فقط إذا كان لديك تقارير مخصصة قديمة تستعلم مباشرة من جدول سجل الوقوعات القديم. ستؤدي الكتابة إلى سجلات الوقوعات القديمة إلى زيادة الحمل، لذلك يوصى بتعطيل هذا الملحق لأسباب تتعلق بالأداء عندما لا تكون هناك حاجة إليه.';
$string['pluginname'] = 'السجل القديم';
$string['pluginname_desc'] = 'ملحق سجل الوقوعات الذي يخزن إدخالات السجل في جدول السجل القديم.';
$string['privacy:metadata:log'] = 'مجموعة من الأحداث الماضية';
$string['privacy:metadata:log:action'] = 'وصف الإجراء';
$string['privacy:metadata:log:info'] = 'معلومة إضافية';
$string['privacy:metadata:log:ip'] = 'عنوان IP المستخدم في وقت الحدث';
$string['privacy:metadata:log:time'] = 'الوقت الذي حدث فيه الإجراء';
$string['privacy:metadata:log:url'] = 'الرابط المتعلق بالحدث';
$string['privacy:metadata:log:userid'] = 'معرف المستخدم الذي قام بتنفيذ الإجراء';
$string['taskcleanup'] = 'تنظيف سجل الجدول القديم';
