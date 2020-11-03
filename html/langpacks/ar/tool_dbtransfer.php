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
 * Strings for component 'tool_dbtransfer', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_dbtransfer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'برامج تشغيل قاعدة البيانات المتوفرة للترحيل';
$string['cliheading'] = 'ترحيل قاعدة البيانات - تأكد من أن لا أحد يدخل إلى الخادم أثناء الترحيل!';
$string['climigrationnotice'] = 'ترحيل قاعدة البيانات في تقدم، يرجى الانتظار حتى اكتمال الترحيل و تكوين الخادم لتحديثات المسؤول و حذف ملف $CFG->dataroot/climaintenance.html.';
$string['convertinglogdisplay'] = 'تحويل سجل عرض الإجراءات';
$string['dbexport'] = 'تصدير قاعدة البيانات';
$string['dbtransfer'] = 'ترحيل قاعدة البيانات';
$string['enablemaintenance'] = 'مكّن وضع الصيانة';
$string['enablemaintenance_help'] = 'هذا الخيار يتيح وضع الصيانة أثناء و بعد ترحيل قاعدة البيانات، فإنه يمنع وصول جميع المستخدمين حتى يتم الانتهاء من الترحيل. يرجى ملاحظة أن المسؤول يجب أن يحذف يدويا الملف
$CFG->dataroot/climaintenance.html
بعد تحديث إعدادات ملف config.php لاستئناف التشغيل العادي.';
$string['exportdata'] = 'تصدير البيانات';
$string['notargetconectexception'] = 'لا يمكن الاتصال بقاعدة البيانات المقصودة، عذراً.';
$string['options'] = 'الخيارات';
$string['pluginname'] = 'نقل قاعدة البيانات';
$string['privacy:metadata'] = 'إن ملحق نقل قاعدة البيانات لا يخزن أي بيانات شخصية.';
$string['targetdatabase'] = 'قاعدة البيانات المقصودة';
$string['targetdatabasenotempty'] = 'يجب أن تكون قاعدة البيانات الهدف لا تحتوي على أيّ جداول مع إعطاء البادئة !';
$string['transferdata'] = 'نقل البيانات';
$string['transferdbintro'] = 'سيقوم هذا النص البرمجي بنقل كامل محتويات قاعدة البيانات هذه إلى مخدم قواعد بيانات آخر. غالباً ما يتم استعماله لترحيل البيانات إلى نوع مختلف من قواعد البيانات.';
$string['transferdbtoserver'] = 'أنقل قاعدة بيانات مودل هذه إلى مخدم آخر';
$string['transferringdbto'] = 'يجري نقل قاعدة البيانات هذه {$a->dbtypefrom} إلى قاعدة بيانات {$a->dbtype} اسمها "{$a->dbname}" في "{$a->dbhost}"';
