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
 * Strings for component 'auth_saml2', language 'ar', version '4.4'.
 *
 * @package     auth_saml2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowcreate'] = 'السماح بالإنشاء';
$string['anyauth'] = 'السماح بأي نوع مصادقة';
$string['auth_fieldlock_expl'] = '<p><b>تأمين القيمة:</b> عند تمكينه، سيمنع ذلك مستخدمي مودل ومشرفيه من تحرير الحقل بشكل مباشر. استعمل هذا الخيار إذا كنت تديم هذه البيانات في نظام المصادقة الخارجي. </p>';
$string['auth_fieldlockfield'] = 'تأمين قيمة ({$a})';
$string['autocreate_help'] = 'السماح بإنشاء مستخدمي مودل عند الطلب';
$string['autologincookie_help'] = 'اسم ملف تعريف الارتباط المستعمل في تقرير متى تتم محاولة تسجيل الدخول التلقائية (مؤثر فقط إذا تم تحديد خيار ملف تعريف الارتباط أعلاه).';
$string['blockredirectheading'] = 'إجراءات حظر الحساب';
$string['certificate'] = 'إعادة توليد الشهادة';
$string['certificate_help'] = 'إعادة توليد المفتاح الخاص والشهادة المستعملين من قبل مزود الخدمة هذا. | <a href=\'{$a}\'>معاينة شهادة مزود الخدمة</a>';
$string['certificatedetails'] = 'تفاصيل الشهادة';
$string['certificatedetailshelp'] = '<h1>قام SAML2 بتوليد محتويات الشهادة العامة تلقائيًا</h1><p>مسار الشهادة تجده هنا:</p>';
$string['certificatelock'] = 'تأمين الشهادة';
$string['certificatelock_help'] = 'تأمين الشهادات سيمنع الكتابة عليها بمجرد توليدها.';
$string['certificatelock_locked'] = 'الشهادة مؤمنة';
$string['certificatelock_warning'] = 'تنبيه. أنت على وشك تأمين الشهادات. هل أنت متأكد من رغبتك في القيام بذلك؟';
$string['expirydays'] = 'انتهاء الصلاحية بالأيام';
$string['flagresponsetype'] = 'نوع استجابة حظر الحساب';
$string['flagresponsetype_help'] = 'إذا تم حظر الوصول بناءً على إعدادات تقييد المجموعة، كيف ينبغي لمودل أن يتصرف؟';
$string['grouprules_help'] = '<p>قائمة من القواعد لتتمكن من التحكم بالوصول بناءً على قيمة سمة المجموعة.</p>
<p>ينبغي أن يحتوي كل سطر على قاعدة واحدة بالصيغة: {allow أو deny} {groups attribute}={value}.</p>
<p>الأعلى في قائمة القواعد ستم تطبيقه أولاً.</p>
مثال: <br/>
allow admins=yes<br>
deny admins=no<br>
allow examrole=proctor<br>
deny library=overdue<br>';
$string['multiidpbuttons'] = 'الأزرار مع الأيقونات';
$string['nullprivatecert'] = 'فشل إنشاء الشهادة الخاصة.';
$string['nullpubliccert'] = 'فشل إنشاء الشهادة العامة.';
$string['pluginname'] = 'SAML2';
$string['privacy:no_data_reason'] = 'إن إضافة مصادقة Saml2 لا تخزن أي بيانات شخصية.';
$string['privatekeypass'] = 'كلمة مرور مفتاح الشهادة الخاصة';
$string['privatekeypass_help'] = 'هذا يستعمل لتوقيع شهادة مودل المحلية. تغييره سيجعل الشهادة الحالية خاطئة.';
$string['spmetadata_help'] = '<a href=\'{$a}\'>معاينة البيانات الوصفية لمزود الخدمة</a> | <a href=\'{$a}?download=1\'>تنزيل البيانات الوصفية لمزود الخدمة</a>
<p>قد ترغب بإعطائها إلى مشرف IdP لوضعك في القائمة البيضاء.</p>';
