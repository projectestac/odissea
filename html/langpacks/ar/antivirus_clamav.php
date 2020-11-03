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
 * Strings for component 'antivirus_clamav', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'فشل تشغيل مضاد الفيروسات ClamAV. رسالة الخطأ الواردة هي "{$a}". إليك ما أخرجه ClamAV:';
$string['clamfailureonupload'] = 'عند فشل ClamAV';
$string['configclamactlikevirus'] = 'عامل الملفات كفيروسات';
$string['configclamdonothing'] = 'عامل الملفات على أنها سليمة';
$string['configclamfailureonupload'] = 'إذا تم اختيار \'عامل الملفات على أنها سليمة\'، سيتم نقل الملفات إلى المجلد المقصود. إذا تم اختيار \'أرفض الرفع، حاول مجدداً\'، ستتم مطالبة المستخدم بالمحاولة مرة أخرى لاحقاً. إذا تم اختيار \'عامل الملفات على أنها فيروسات\'، سيتم نقل الملفات إلى منطقة الحجر، أو حذفها. تحذير: مع هذا الخيار، إذا فشل مضاد الفيروسات في العمل لسبب ما (عادة بسبب تمرير مسار خاطئ)، فإن كل الملفات المرفوعة سيتم نقلها إلى منطقة الحجر المحددة، أو حذفها.';
$string['errorcantopensocket'] = 'الاتصال بمقبس مجال يونكس أنتج خطأً، {$a}';
$string['errorclamavnoresponse'] = 'مضاد الفيروسات ClamAV لا يستجيب؛ تحقق من حالة تشغيل مهمة ديمون الخاصة به.';
$string['errornounixsocketssupported'] = 'ناقل مقبس مجال يونكس غير مدعوم في هذا النظام. لطفاً، استعمل خيار سطر الأوامر عوضاً عنه.';
$string['invalidpathtoclam'] = 'لقد تم إعداد مودل لتشغيل كلام عند تحميل الملفات، ولكن المسار الذي تم تزويدة لكلامأيفي،{$a}، غير صحيحز';
$string['pathtoclam'] = 'سطر الأوامر';
$string['pathtoclamdesc'] = 'إذا تم ضبط طريقة التشغيل على "سطر الأوامر"، أدخل مسار مضاد الفيروسات ClamAV هنا. في بيئة Linux هذا سيكون /usr/bin/clamscan أو /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'مقبس مجال يونكس';
$string['pathtounixsocketdesc'] = 'إذا تم ضبط طريقة التشغيل على "مقبس مجال يونكس"، أدخل المسار إلى مقبس يونكس لمضاد الفيروسات ClamAV هنا. في بيئة Debian Linux هذا سيكون /var/run/clamav/clamd.ctl. لطفاً، تأكد من أن برنامج clamav daemon لديه صلاحية قراءة الملفات المرفوعة، وأسهل طريقة للتأكد من ذلك هي بإضافة مستخدم \'clamav\' إلى مجموعة webserver (\'www-data\' في Debian Linux).';
$string['pluginname'] = 'مضاد الفيروسات ClamAV';
$string['privacy:metadata'] = 'إن ملحق مضاد الفيروسات ClamAV لا يخزن أي بيانات شخصية.';
$string['quarantinedir'] = 'مجلد الحجر';
$string['runningmethod'] = 'طريقة التشغيل';
$string['runningmethodcommandline'] = 'سطر الأوامر';
$string['runningmethoddesc'] = 'طريقة تشغيل ClamAV. سطر الأوامر يُستعمل إفتراضياً، مع ذلك، في أنظمة يونكس، الأداء الأفضل يمكن تحقيقه عبر استعمال مقابس النظام.';
$string['runningmethodunixsocket'] = 'مقبس مجال يونكس';
$string['unknownerror'] = 'يوجد خطأ غير معروف في ClamAV.';
