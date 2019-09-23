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
 * Strings for component 'logstore_legacy', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   logstore_legacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'تم تسجيل الحدث القديم';
$string['loglegacy'] = 'تسجيل البيانات القديمة';
$string['loglegacy_help'] = 'يسجل هذا البرنامج المساعد بيانات السجل إلى جدول السجل القديم (mdl_log). تم استبدال هذه الوظيفة بمكونات إضافية لتسجيل الدخول أكثر ثراءً و فعالية ، لذا يجب عليك تشغيل هذا المكون الإضافي فقط إذا كان لديك تقارير مخصصة قديمة تستعلم مباشرة عن جدول السجل القديم. ستؤدي الكتابة إلى السجلات القديمة إلى زيادة الحمل ، لذلك يوصى بتعطيل هذا المكون الإضافي لأسباب تتعلق بالأداء عندما لا تكون هناك حاجة إليه.';
$string['pluginname'] = 'السجل القديم';
$string['pluginname_desc'] = 'المكون الإضافي log يقوم بتخزين إدخالات السجل في جدول السجل القديم.';
$string['privacy:metadata:log'] = 'مجموعة من الأحداث الماضية';
$string['privacy:metadata:log:action'] = 'وصف للإجراء';
$string['privacy:metadata:log:info'] = 'معلومة إضافية';
$string['privacy:metadata:log:ip'] = 'عنوان IP المستخدم في وقت الحدث';
$string['privacy:metadata:log:time'] = 'الوقت الذي حدث فيه الإجراء';
$string['privacy:metadata:log:url'] = 'الرابط المتعلق بالحدث';
$string['privacy:metadata:log:userid'] = 'معرف المستخدم الذي قام بتنفيذ الإجراء';
$string['taskcleanup'] = 'تنظيف سجل الجدول القديم';
