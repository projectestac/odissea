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
 * Strings for component 'enrol_arlo', language 'ar', version '4.5'.
 *
 * @package     enrol_arlo
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowcompletedevents'] = 'السماح بالأحداث المكتملة';
$string['allowcompletedevents_help'] = 'سيكون بالإمكان تحديد الأحداث المكتملة وربطها مع عيِّنة الانضمام.';
$string['allowcompletedevents_text'] = 'الأحداث المكتملة يمكن ربطها';
$string['allowhiddencourses'] = 'السماح بالمقررات المخفية';
$string['apipassword_desc'] = 'هل نسيت كلمة مرورك؟ <a title="{$a->title}" href="{$a->url}" target="_blank">تعلم كيفية إعادة تعيينها.</a>';
$string['apiusername_desc'] = 'مهم: حسابك في Arlo ينبغي تمكين واجهة برمجة التطبيق فيه، <a title="{$a->title}" href="{$a->url}" target="_blank">تعلم المزيد.</a>';
$string['arlo:synchronizecore'] = 'سحب الموارد الجديدة للنواة يدوياً';
$string['associatetemplatedanger'] = '<div class="alert alert-danger" role="alert">
<strong>مهم!</strong>
<p>هذا من شأنه التعلق بكل حدث أو نشاط متصل بالإنترنت مبني على القالب. هذا لا يشمل الأحداث أو النشاطات المتصلة بالإنترنت التي سبق وأن تمت إضافتها إلى مساق آخر.</p>
</div>';
$string['backtoenrolmentmethods'] = 'عودة إلى طرق الانضمام';
$string['coretask'] = 'مزامنة معلومات نواة Arlo';
$string['customwelcomemessage_help'] = 'يمكن إضافة رسالة ترحيبية مخصصة بتنسيق عادي أو بتنسيق مودل التلقائي، متضمنة وسوم HTML ووسوم متعدد اللغات.

يمكن تضمين العناصر النائبة الآتية في الرسالة:

* اسم المقرر {$a->coursename}
* رابط المقرر {$a->courseurl}
* الاسم الكامل للمستخدم {$a->firstname}
* اسم المستخدم الكامل {$a->fullname}
* اسم المستخدم للمستخدم {$a->username}
* رابط استعادة كلمة المرور {$a->forgotpasswordurl}';
$string['error_duplicateusers_full'] = 'تم العثور على مستخدمين مكررين عند محاولة إجراء المطابقة مع جهة اتصال Arlo.

تم العثور على {$a->count} من حسابات مودل وبالتفاصيل الآتية:
الاسم الأول: {$a->firstname}
الاسم الأخير: {$a->lastname}
البريد الالكتروني: {$a->email}
رقم المُعرَّف: {$a->idnumber}

تم إنشاء حساب جديد لهذا المستخدم.';
$string['error_duplicateusers_fullhtml'] = '<p>تم العثور على مستخدمين مكررين عند محاولة إجراء المطابقة مع جهة اتصال Arlo.</p>
<br>
<p>تم العثور على {$a->count} من حسابات مودل وبالتفاصيل الآتية:</p>
<br>
<pre>
الاسم الأول: {$a->firstname}
الاسم الأخير: {$a->lastname}
البريد الالكتروني: {$a->email}
رقم المُعرَّف: {$a->idnumber}
</pre>
<br>
<p>تم إنشاء حساب جديد لهذا المستخدم.</p>';
$string['errorselectevent'] = 'ينبغي أن تختار حدثًا';
$string['errorselectonlineactvity'] = 'ينبغي عليك تحديد نشاط متصل بالإنترنت';
$string['event'] = 'الحدث';
$string['eventcreated'] = 'حدث تم إنشاؤه';
$string['events'] = 'الأحداث';
$string['eventupdated'] = 'حدث تم تحديثه';
$string['firstnamelastnamerandomnumber'] = 'الاسم الأول، الاسم الأخير ورقم عشوائي';
$string['httpstatus:415'] = 'نوع وسائط غير مدعوم';
$string['messagesent'] = 'تم إرسال الرسالة';
$string['noeventsoractivitiesfound'] = 'لم يتم العثور على أحداث "نشطة" أو أحداث متصلة بالإنترنت.';
$string['onlineactivity'] = 'نشاط متصل بالإنترنت';
$string['platform_desc'] = 'رابط منصة إدارة Arlo \'yourplatform.arlo.co\' (مع استبعاد https:// و /). ليس لديك منصة Arlo؟ <a title="{$a->title}" href="{$a->url}" target="_blank">إبدأ تجربتها مجانًا.</a>';
$string['privacy:metadata:enrol_arlo_contact:firstname'] = 'الاسم الأول لجهة اتصال Arlo';
$string['privacy:metadata:enrol_arlo_contact:lastname'] = 'الاسم الأخير لجهة اتصال Arlo';
$string['pusheventresults_help'] = 'إدفع معلومات النتائج من عينات الانضمام المعينة إلى
<strong>الأحداث</strong> رجوعاً إلى Arlo';
$string['pushonlineactivityresults_help'] = 'إدفع معلومات النتائج من عينات الانضمام المعينة إلى
<strong>النشاطات عند الاتصال</strong> رجوعاً إلى Arlo';
$string['timelogged'] = 'وقت التوثيق';
$string['timemodified'] = 'وقت التعديل';
$string['typeofevent'] = 'نوع الحدث';
