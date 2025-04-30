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
 * Strings for component 'adobeconnect', language 'ar', version '4.4'.
 *
 * @package     adobeconnect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_httpauth_desc'] = 'قيمة HTTP_AUTH_HEADER المستعملة في ملف custom.ini الخاص بك';
$string['admin_login'] = 'تسجيل دخول المشرف';
$string['admin_login_desc'] = 'الدخول لحساب المشرف الرئيسي';
$string['admin_password'] = 'كلمة المرور المشرف';
$string['admin_password_desc'] = 'كلمة المرور لحساب المشرف الرئيسي';
$string['adobeconnect:meetinghost'] = 'مدير الاجتماغ';
$string['adobeconnect:meetingpresenter'] = 'مقدم الاجتماع';
$string['adobeconnectintro'] = 'المقدمة';
$string['adobeconnectname'] = 'عنوان الاجتماع';
$string['allusers'] = 'كل المستخدمين';
$string['assignroles'] = 'تعيين الأدوار';
$string['availablelist'] = 'متوفر';
$string['backtomeeting'] = 'عودة إلى اجتماع $a';
$string['cancelchanges'] = 'إلغاء';
$string['connectiontesttitle'] = 'نافذة اختبار الاتصال';
$string['email_login'] = 'تسجيل الدخول بالبريد الإلكتروني';
$string['endtime'] = 'وقت الإنهاء';
$string['error1'] = 'ينبغي لك أن تكون مشرف الموقع للوصول إلى هذه الصفحة';
$string['error2'] = 'الخاصية \'{$a}\' فارغة، يرجى إدخال قيمة ثم حفظ الإعدادات';
$string['errormeeting'] = 'وقع خطأ عند استرداد التسجيل';
$string['errorrecording'] = 'تعذر العثور على جلسة التسجيل';
$string['event_assign_role'] = 'مستخدم مُنِح دور Connect Pro';
$string['event_join_meeting'] = 'مستخدم انضم إلى اجتماع';
$string['event_unassign_role'] = 'مستخدم أُلغِي مَنحُه دور Connect Pro';
$string['event_view'] = 'نشاط Connect Pro تمت معاينته';
$string['event_view_all'] = 'عيِّنات نشاط Connect Pro شوهدت كلها';
$string['event_view_recording'] = 'مستخدم شاهد تسجيلاً';
$string['greaterstarttime'] = 'وقت البدء لا يمكن أن يكون بعد وقت الإنهاء';
$string['groupswitch'] = 'تصفية حسب المجموعة';
$string['host'] = 'المضيف';
$string['invalidurl'] = 'على الرابط أن يبدأ بحرف لاتيني (a-z)';
$string['joinmeeting'] = 'إنضم إلى الاجتماع';
$string['meethost_desc'] = 'المجال الذي فيه مخدم Adobe منصب';
$string['meetinfo'] = 'المزيد من التفاصيل عن الاجتماع';
$string['meetingend'] = 'وقت انتهاء الاجتماع';
$string['meetinggroup'] = 'مجموعة الاجتماع';
$string['meetinghost'] = 'مجال الاجتماع';
$string['meetinginfo'] = 'معلومات الاجتماع';
$string['meetingintro'] = 'ملخص الاجتماع';
$string['meetingname'] = 'اسم الاجتماع';
$string['meetingstart'] = 'وقت بدء الاجتماع';
$string['meetingtype'] = 'نوع الاجتماع';
$string['meettemplates'] = 'مظاهر الاجتماع';
$string['meettemplates_help'] = '<p>مظهر غرفة الاجتماع ينشئ الاجتماع بتصميم مخصص لغرفة الاجتماعات.</p>';
$string['meeturl'] = 'رابط الاجتماع';
$string['meeturl_help'] = '<p>يمكنك تخصيص الرابط المستعمل للاتصال مع اجتماع اتصال Adobe. مجال مخدم Adobe سيبقى دائماً هو نفسه.
 مع ذلك، يمكن تخصيص الجزء الأخير من الرابط.
</p>
<p>على سبيل المثال، إذا كان مجال مخدم اتصال Adobe هو
<b>http://adobe.connect.server/</b>
 فعند تخصيص الرابط إلى <b>mymeeting</b>، سيكون الرابط للاتصال به هو  <b>http://adobe.connect.server/mymeeting</b>. أترك الشرطة المائلة النهائية
</p>
<p>إدخالات الرابط الصحيحة تتضمن الاسم مع
<ul>
<li>mymeeting</li>
<li>/mymeeting</li>
</ul>

إدخالات الرابط الخاطئة تتضمن أكثر من شرطة أمامية مائلة:
<ul>
<li>mymeeting/mymeeting</li>
<li>mymeeting/mymeeting/</li>
<li>mymeeting/mymeeting//anothermeeting</li>
<li>mymeeting/</li>
</ul>

</p>
<p>بمجرد حفظ الاجتماع، لن تعود قادراً على تحرير/تحديث هذا الحقل لأنه سيتم تعطيله.
عند تحديث إعدادات النشاط وكان <b>نمط المجموعات</b> مضبوطاً على بلا مجموعات، فتشاهد جزءاً من الرابط في حقل النص.
بخلاف ذلك، سيبقى الحقل النصي فارغاً نظرأ لأن كل مجموعة في المساق سيكون لها رابط الاجتماع الخاص بها.
</p>';
$string['missingexpectedgroups'] = 'لا توجد مجموعات متاحة.';
$string['particpantslabel'] = 'المشاركون';
$string['presenterbtngrp'] = 'إجراءات المقدم';
$string['presenterlabel'] = 'مقدم';
$string['private'] = 'خاص';
$string['public'] = 'عام';
$string['recordinghdr'] = 'التسجيلات';
$string['removeparticipant'] = 'إزالة';
$string['removepresenter'] = 'إزالة';
$string['roletoassign'] = 'الدور المطلوب تعيينه';
$string['samemeettime'] = 'وقت الاجتماع غير صالح';
$string['savechanges'] = 'حفظ';
$string['selectparticipants'] = 'تعيين الأدوار';
$string['starttime'] = 'وقت البدء';
