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
 * Strings for component 'tool_dbtransfer', language 'ar', version '3.8'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'برامج تشغيل قاعدة البيانات المتوفرة للترحيل';
$string['cliheading'] = 'ترحيل قاعدة البيانات - تأكد من أن لا أحد يدخل إلى الخادم أثناء الترحيل!';
$string['climigrationnotice'] = 'ترحيل قاعدة البيانات قيد التنفيذ، يرجى الانتظار حتى اكتمال الترحيل وقيام مشرف المخدم بتحديث الإعدادات وحذف ملف $CFG->dataroot/climaintenance.html.';
$string['convertinglogdisplay'] = 'تحويل سجل عرض الإجراءات';
$string['dbexport'] = 'تصدير قاعدة البيانات';
$string['dbtransfer'] = 'ترحيل قاعدة البيانات';
$string['enablemaintenance'] = 'مكّن وضع الصيانة';
$string['enablemaintenance_help'] = 'هذا الخيار يتيح وضع الصيانة أثناء وبعد ترحيل قاعدة البيانات، وهو يمنع وصول أي من المستخدمين حتى يتم الانتهاء من الترحيل. يرجى ملاحظة أن على المشرف حذف الملف $CFG->dataroot/climaintenance.html يدويًا
بعد تحديث إعدادات ملف config.php لاستئناف التشغيل العادي.';
$string['exportdata'] = 'تصدير البيانات';
$string['notargetconectexception'] = 'لا يمكن الاتصال بقاعدة البيانات المقصودة، عذراً.';
$string['options'] = 'الخيارات';
$string['pluginname'] = 'نقل قاعدة البيانات';
$string['privacy:metadata'] = 'البرنامج المساعد  Database transfer لا يخزن أيّ بيانات شخصية.';
$string['targetdatabase'] = 'قاعدة البيانات الهدف';
$string['targetdatabasenotempty'] = 'يجب أن تكون قاعدة البيانات الهدف لا تحتوي على أيّ جداول مع إعطاء البادئة !';
$string['transferdata'] = 'نقل البيانات';
$string['transferdbintro'] = 'هذا البرنامج النصي سوف ينقل محتويات قاعدة البيانات هذه إلى خادم قاعدة بيانات أخرى.
و غالبا ما يستخدم لنقل البيانات لمختلف أنواع قواعد البيانات.';
$string['transferdbtoserver'] = 'انقل قاعدة بيانات مودل هذه إلى خادم آخر';
$string['transferringdbto'] = 'جاري نقل قاعدة البيانات هذه إلى قاعدة بيانات {$a->dbtype} {$a->dbname} على {$a->dbhost}';
