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
 * Strings for component 'block_edwiser_site_monitor', language 'ar', version '4.5'.
 *
 * @package     block_edwiser_site_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeusers'] = 'نشط';
$string['cannotshowonsidebar'] = 'يتعذر إظهار مخطط الاستعمال في الشريط الجانبي. يرجى نقل الكتلة إلى منطقة المحتوى لمشاهدة مخطط الاستعمال.';
$string['changelog'] = 'سجل وقوعات التغيير';
$string['checksettings'] = 'يرجى التحقق <a target="_blank" href="{$a->link}">{$a->text}</a>';
$string['comeswith'] = 'يأتي مع: {$a}';
$string['configtitle'] = 'عنوان كتلة مراقب الموقع Edwiser';
$string['contactus'] = 'إتصل بنا';
$string['cpu'] = 'CPU';
$string['cpucommandnotallowed'] = 'سطر الأمر <strong>/proc/cpuinfo</strong> --Permission Denied.';
$string['cpuhigherlimit'] = 'الحد الأعلى لوحدة المعالجة المركزية';
$string['cpuhigherlimit_help'] = 'الحد الأعلى لاستعمال وحدة المعالجة المركزية';
$string['cpulimit_invalid'] = 'يرجى تزويد حد صالح لوحدة المعالجة المركزية';
$string['cpulimit_overlap'] = 'يرجى تزويد حد صالح لوحدة المعالجة المركزية. الحد الأعلى لا يمكن أن يساوي أو يقل عن الحد الأدنى';
$string['cpulowerlimit'] = 'الحد الأدنى لوحدة المعالجة المركزية';
$string['cpulowerlimit_help'] = 'الحد الأدنى لاستعمال وحدة المعالجة المركزية';
$string['cpuusage'] = 'استعمال وحدة المعالجة المركزية';
$string['crontask'] = 'مراقب الموقع Edwiser - إجمع إحصائيات الاستعمال 24 ساعة';
$string['crontaskwarning'] = 'لمشاهدة بيانات الاستعمال خلال 24 ساعة عليك تشغيل مشغل الوظائف الدورية كل 5 دقائق. أنظر الرابط <a target="_blank" href="{$a}">link</a> لتهيئة مشغل الوظائف الدورية.';
$string['deletedusers'] = 'محذوف';
$string['edwiser_site_monitor:addinstance'] = 'إضافة كتلة جديدة لمراقبة الموقع';
$string['edwiser_site_monitor:myaddinstance'] = 'إضافة كتلة جديدة لمراقبة الموقع إلى دفة القيادة';
$string['edwiserplugins'] = 'ملاحق Edwiser';
$string['emailfailed'] = 'تعذر إرسال البريد الالكتروني.';
$string['emailsent'] = 'البريد الالكتروني تم إرساله.';
$string['emailsuccess'] = 'رسالتك تم إرسالها بنجاح. شكرًا.';
$string['enablethreshold'] = 'تمكين حدود العتبة';
$string['enablethreshold_help'] = 'هذا سيُمكن فحوصات حد العتبة ويرسل بريدًا الكترونيًا إذا كان الاستعمال أقل من الحد الأدنى أو أكثر من الحد الأعلى';
$string['errorfetching'] = 'خطأ عند إحضار الملف المضغوط للملحق. <b>{$a}</b>';
$string['errorfetchingexist'] = 'خطأ عند إحضار الملف المضغوط للملحق: موضع المقصد موجود. <b>{$a}</b>';
$string['errors'] = 'الأخطاء';
$string['failed'] = 'فاشلة';
$string['hader-threshold'] = 'العتبة';
$string['header-current'] = 'الحالي';
$string['header-expected'] = 'واطئ/عال';
$string['header-type'] = 'النوع';
$string['high'] = 'أعلى';
$string['highusage'] = 'استعمال عالٍ';
$string['installnew'] = 'تنصيب ملحق جديد';
$string['invalidjsonfile'] = 'قائمة منتجات Edwiser خاطئة.';
$string['invalidzip'] = 'ملف مضغوط خاطئ. <b>{$a}</b>';
$string['knowmore'] = 'أعرف المزيد';
$string['last24hoursusage'] = 'استعمال آخر 24 ساعة';
$string['livestatusrefreshrate'] = 'معدل التنشيط';
$string['livestatusrefreshrate_help'] = 'معدل التنشيط لتبويب الحالة المباشرة بالثواني';
$string['livestatusrefreshrate_invalid'] = 'يرجى إعطاء معدل تنشيط صالح بالثواني';
$string['liveusage'] = 'الاستعمال الآن';
$string['liveusers'] = 'المستخدمون الآن';
$string['low'] = 'واطئ';
$string['lowusage'] = 'الاستعمال الواطئ';
$string['memory'] = 'الذاكرة';
$string['memorycommandnotallowed'] = 'سطر الأمر <strong>free</strong> --Permission Denied.';
$string['memoryhigherlimit'] = 'حد الذاكرة الأعلى';
$string['memoryhigherlimit_help'] = 'الحد الأعلى لاستعمال الذاكرة';
$string['memorylimit_invalid'] = 'يرجى إعطاء حد ذاكرة صالح';
$string['memorylimit_overlap'] = 'يرجى تزويد حد صالح للذاكرة. الحد الأعلى لا يمكن أن يساوي أو يقل عن الحد الأدنى';
$string['memorylowerlimit'] = 'حد الذاكرة الأدنى';
$string['memorylowerlimit_help'] = 'الحد الأدنى لاستعمال الذاكرة';
$string['memoryusage'] = 'استعمال الذاكرة';
$string['messageprovider:notifications'] = 'أخبار وتحديثات Edwiser';
$string['moderateusage'] = 'الاستعمال المعتدل';
$string['news'] = 'أخبار وتحديثات Edwiser';
$string['noupdates'] = 'كل شيء محدث.';
$string['otherplugins'] = 'الملاحق الأخرى';
$string['pluginname'] = 'مراقب الموقع Edwiser';
$string['policy'] = 'أنا أوافق على <a href="{$a}" target="_blank">سياسة الخصوصية</a>';
$string['privacy:metadata'] = 'إن كتلة مراقب الموقع تظهر معلومات عن المخدم.';
$string['privacy:metadata:block_edwiser_site_monitor:cpu'] = 'استعمال وحدة المعالجة المركزية في الموقع عند تسجيله';
$string['privacy:metadata:block_edwiser_site_monitor:memory'] = 'استعمال الذاكرة في الموقع عند تسجيله';
$string['privacy:metadata:block_edwiser_site_monitor:storage'] = 'استعمال التخزين في الموقع عند تسجيله';
$string['privacy:metadata:block_edwiser_site_monitor:tableexplanation'] = 'يحفظ استعمالات وحدة المعالجة المركزي، الذاكرة، والتخزين في الموقع';
$string['privacy:metadata:block_edwiser_site_monitor:time'] = 'وقت تسجيل الاستعمالات';
$string['recommendation'] = 'الملاحق الموصى بها';
$string['requirehigherversion'] = 'يتطلب الإصدار: <b>{$a}</b> من مودل';
$string['storage'] = 'التخزين';
$string['storagehigherlimit'] = 'حد التخزين الأعلى';
$string['storagehigherlimit_help'] = 'الحد الأعلى لاستعمال التخزين';
$string['storagelimit_invalid'] = 'يرجى تزويد حد تخزين صالح';
$string['storagelimit_overlap'] = 'يرجى تزويد حد صالح للتخزين. الحد الأعلى لا يمكن أن يساوي أو يقل عن الحد الأدنى';
$string['storagelowerlimit'] = 'حد التخزين الأدنى';
$string['storagelowerlimit_help'] = 'الحد الأدنى لاستعمال التخزين';
$string['storageusage'] = 'استعمال التخزين';
$string['suspendedusers'] = 'معلقة';
$string['thanksmessage'] = '<div style="background-color: #efefef; -webkit-text-size-adjust: none !important; margin: 0; padding: 70px 70px 70px 70px;"><table id="template_container" style="text-align: center; padding-bottom: 20px; background-color: rgb(223, 223, 223); box-shadow: rgba(0, 0, 0, 0.024) 0px 0px 0px 3px !important; border-radius: 6px !important; margin: auto;" border="0" width="500" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="background-color: #1177d1;border-top-left-radius: 6px !important;border-top-right-radius: 6px !important;border-bottom: 0;font-family: Arial;font-weight: bold;line-height: 100%;vertical-align: middle;">
<center><img style="height: 60px;" src="https://edwiser.org/wp-content/uploads/2016/07/edwiser-logoalternate.png"></center>
</td>
</tr>
<tr>
<td style="padding: 20px; background-color: #dfdfdf; border-radius: 6px !important;" align="center" valign="top">
<div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Hi {$a->user},</div><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;"><br>شكراً على اتصالك بنا.<br><br> فريق دعمنا سيتصل بك خلال 24 ساعة القادمة.</div><br><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">هذه رسالة بريد الكتروني مولدة تلقائياً. لأي استعلامات أو مساعدة إضافية، يمكنك التواصل معنا عبر {$a->email}</div></td></tr></tbody></table><br>
</div>';
$string['thankssubject'] = 'شكرًا لتواصلك معنا.';
$string['thresholdheader'] = 'حد العتبة';
$string['today'] = 'هذا اليوم';
$string['unabletoloadplugindetails'] = 'يتعذر تحميل تفاصبل الملحق <b>{$a}</b>';
$string['unabletounzip'] = 'يتعذر فك ضغط <b>{$a}</b>';
$string['usageemailsubject'] = '{$a}: مراقب الموقع Edwiser - تنبيهات الاستعمال';
$string['users'] = 'المستخدمون';
$string['xaxistitle'] = 'الوقت';
$string['yaxistitle'] = 'الاستعمال (%)';
