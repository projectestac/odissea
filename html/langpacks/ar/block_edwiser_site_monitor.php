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
 * Strings for component 'block_edwiser_site_monitor', language 'ar', version '4.1'.
 *
 * @package     block_edwiser_site_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checksettings'] = 'يرجى التحقق <a target="_blank" href="{$a->link}">{$a->text}</a>';
$string['comeswith'] = 'يأتي مع: {$a}';
$string['configtitle'] = 'عنوان كتلة مراقب الموقع Edwiser';
$string['cpucommandnotallowed'] = 'سطر الأمر <strong>/proc/cpuinfo</strong> -- طلب الصلاحية مرفوض.';
$string['crontask'] = 'مراقب الموقع Edwiser - إجمع إحصائيات الاستعمال 24 ساعة';
$string['edwiser_site_monitor:addinstance'] = 'إضافة كتلة جديدة لمراقبة الموقع';
$string['edwiser_site_monitor:myaddinstance'] = 'إضافة كتلة جديدة لمراقبة الموقع إلى لوحة التحكم';
$string['errorfetching'] = 'خطأ عند إحظار الملف المضغوط للإضافة. <b>{$a}</b>';
$string['errorfetchingexist'] = 'خطأ عند إحضار الملف المضغوط للإضافة: موضع المقصد موجود. <b>{$a}</b>';
$string['memorycommandnotallowed'] = 'سطر الأمر <strong>free</strong> -- طلب الصلاحية مرفوض.';
$string['pluginname'] = 'مراقب الموقع Edwiser';
$string['policy'] = 'أنا أوافق على <a href="{$a}" target="_blank">سياسة الخصوصية</a>';
$string['privacy:metadata:block_edwiser_site_monitor:cpu'] = 'استعمال وحدة المعالجة المركزية في الموقع عند تسجيله';
$string['privacy:metadata:block_edwiser_site_monitor:memory'] = 'استعمال الذاكرة في الموقع عند تسجيله';
$string['privacy:metadata:block_edwiser_site_monitor:storage'] = 'استعمال التخزين في الموقع عند تسجيله';
$string['privacy:metadata:block_edwiser_site_monitor:tableexplanation'] = 'يحفظ استعمالات وحدة المعالجة المركزي، الذاكرة، والتخزين في الموقع';
$string['privacy:metadata:block_edwiser_site_monitor:time'] = 'وقت تسجيل الاستعمالات';
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
$string['today'] = 'هذا اليوم';
$string['xaxistitle'] = 'الوقت';
