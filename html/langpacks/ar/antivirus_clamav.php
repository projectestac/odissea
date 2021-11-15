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
 * Strings for component 'antivirus_clamav', language 'ar', version '3.11'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'هناك مشكلة في الفحص الذي يقوم به مضاد الفيروسات حالياً. ملفك {$a->item} لم يتم رفعه. لطفاً، حاول مجدداً فيما بعد.';
$string['clamfailed'] = 'فشل تشغيل مضاد الفيروسات ClamAV. رسالة الخطأ الواردة هي "{$a}". إليك ما أخرجه ClamAV:';
$string['clamfailureonupload'] = 'عند فشل ClamAV';
$string['configclamactlikevirus'] = 'عامل الملفات كفيروسات';
$string['configclamdonothing'] = 'عامل الملفات على أنها سليمة';
$string['configclamfailureonupload'] = 'إذا تم اختيار \'عامل الملفات على أنها سليمة\'، سيتم نقل الملفات إلى المجلد المقصود. إذا تم اختيار \'أرفض الرفع، حاول مجدداً\'، ستتم مطالبة المستخدم بالمحاولة مرة أخرى لاحقاً. إذا تم اختيار \'عامل الملفات على أنها فيروسات\'، سيتم نقل الملفات إلى منطقة الحجر، أو حذفها. تحذير: مع هذا الخيار، إذا فشل مضاد الفيروسات في العمل لسبب ما (عادة بسبب تمرير مسار خاطئ)، فإن كل الملفات المرفوعة سيتم نقلها إلى منطقة الحجر المحددة، أو حذفها.';
$string['configclamtryagain'] = 'أرفض الرفع، حاول مجدداً';
$string['errorcantopensocket'] = 'الاتصال بمقبس مجال يونكس أنتج خطأً، {$a}';
$string['errorclamavnoresponse'] = 'مضاد الفيروسات ClamAV لا يستجيب؛ تحقق من حالة تشغيل مهمة ديمون الخاصة به.';
$string['errornounixsocketssupported'] = 'ناقل مقبس مجال يونكس غير مدعوم في هذا النظام. لطفاً، استعمل خيار سطر الأوامر عوضاً عنه.';
$string['invalidpathtoclam'] = 'لقد تم إعداد مودل لتشغيل كلام عند تحميل الملفات، ولكن المسار الذي تم تزويدة لكلامأيفي،{$a}، غير صحيحز';
$string['pathtoclam'] = 'سطر الأوامر';
$string['pathtoclamdesc'] = 'إذا تم ضبط طريقة التشغيل على "سطر الأوامر"، أدخل مسار مضاد الفيروسات ClamAV هنا. في بيئة Linux هذا سيكون /usr/bin/clamscan أو /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'مقبس مجال يونكس';
$string['pathtounixsocketdesc'] = 'إذا تم ضبط طريقة التشغيل على "مقبس مجال يونكس"، أدخل المسار إلى مقبس يونكس لمضاد الفيروسات ClamAV هنا. في بيئة Debian Linux هذا سيكون /var/run/clamav/clamd.ctl. لطفاً، تأكد من أن برنامج clamav daemon لديه صلاحية قراءة الملفات المرفوعة، وأسهل طريقة للتأكد من ذلك هي بإضافة مستخدم \'clamav\' إلى مجموعة webserver (\'www-data\' في Debian Linux).';
$string['pluginname'] = 'مضاد الفيروسات ClamAV';
$string['privacy:metadata'] = 'إن إضافة مضاد الفيروسات ClamAV لا يخزن أي بيانات شخصية.';
$string['quarantinedir'] = 'مجلد الحجر';
$string['runningmethod'] = 'طريقة التشغيل';
$string['runningmethodcommandline'] = 'سطر الأوامر';
$string['runningmethoddesc'] = 'طريقة تشغيل ClamAV. سطر الأوامر يُستعمل إفتراضياً، مع ذلك، في أنظمة يونكس، الأداء الأفضل يمكن تحقيقه عبر استعمال مقابس النظام.';
$string['runningmethodtcpsocket'] = 'مقبس TCP';
$string['runningmethodunixsocket'] = 'مقبس مجال يونكس';
$string['tcpsockethost'] = 'اسم مضيف مقبس TCP';
$string['tcpsockethostdesc'] = 'اسم المجال لمخدم ClamAV';
$string['tcpsocketport'] = 'منفذ مقبس TCP';
$string['tcpsocketportdesc'] = 'المنفذ المستعمل عند الاتصال مع ClamAV';
$string['tries'] = 'محاولات الفحص';
$string['tries_desc'] = 'عدد المحاولات المنفذة من ClamAV إذا كان هناك خطأ خلال عملية الفحص.';
$string['tries_notice'] = 'فحص Clamav قد تمت محاولته {$a->tries} مرة/مرات.
{$a->notice}';
$string['unknownerror'] = 'يوجد خطأ غير معروف في ClamAV.';
