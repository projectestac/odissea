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
 * Strings for component 'tool_monitor', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_monitor
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'أضف قاعدة جديدة';
$string['allevents'] = 'كل الأحداث';
$string['allmodules'] = 'جميع الحالات';
$string['area'] = 'المنطقة';
$string['areatomonitor'] = 'منطقة المراقبة';
$string['cachedef_eventsubscriptions'] = 'هذا يخزن قائمة اشتراكات الحدث للدورات الفردية';
$string['contactadmin'] = 'اتصل بالمسؤول الخاص بك لتمكينها.';
$string['core'] = 'النواة';
$string['currentsubscriptions'] = 'اشتراكاتك الحالية';
$string['defaultmessagetemplate'] = 'اسم القاعدة: {rulename}
الوصف: {description}
اسم الحدث: {eventname}';
$string['deleterule'] = 'حذف القاعدة';
$string['deletesubscription'] = 'احذف الاشتراك';
$string['description'] = 'الوصف:';
$string['disablefieldswarning'] = 'لا يمكن تعديل بعض الحقول لأن هذه القاعدة بها بالفعل اشتراكات.';
$string['duplicaterule'] = 'قاعدة مكررة';
$string['editrule'] = 'تحرير القاعدة';
$string['enablehelp'] = 'تمكين / تعطيل مراقبة الأحداث';
$string['enablehelp_help'] = 'يجب تمكين مراقبة الأحداث قبل أن تتمكن من إنشاء القواعد و الاشتراك فيها. لاحظ أن تمكين مراقبة الأحداث قد يؤثر على أداء موقعك.';
$string['errorincorrectevent'] = 'يرجى اختيار حدث متعلق بالبرنامج المساعد المحدد';
$string['event'] = 'هدف';
$string['eventnotfound'] = 'لم يتم العثور على الحدث';
$string['eventrulecreated'] = 'تم إنشاء القاعدة';
$string['eventruledeleted'] = 'تم حذف القاعدة';
$string['eventruleupdated'] = 'تم تحديث القاعدة';
$string['eventsubcreated'] = 'تم إنشاء الاشتراك';
$string['eventsubcriteriamet'] = 'التقى معايير الاشتراك';
$string['eventsubdeleted'] = 'تم حذف الاشتراك';
$string['freqdesc'] = '{$a->freq} مرة في {$a->mins} (دقائق)';
$string['frequency'] = 'حد الإخطار';
$string['frequency_help'] = 'عدد الأحداث خلال فترة زمنية محددة مطلوبة لإرسال رسالة إعلام.';
$string['inminutes'] = 'في دقائق';
$string['invalidmodule'] = 'وحدة غير صالحة';
$string['manage'] = 'أدر';
$string['managerules'] = 'قواعد مراقبة الحدث';
$string['manageruleslink'] = 'يمكنك إدارة القواعد من صفحة {$a}.';
$string['managesubscriptions'] = 'رصد الأحداث';
$string['managesubscriptionslink'] = 'يمكنك الاشتراك في القواعد من صفحة {$a}.';
$string['messageprovider:notification'] = 'إخطارات اشتراكات القاعدة';
$string['messagetemplate'] = 'رسالة الإخطار';
$string['messagetemplate_help'] = 'يتم إرسال رسالة إعلام للمشتركين بمجرد الوصول إلى حد الإخطار. يمكن أن يشمل أيًا أو كلًا من العناصر النائبة التالية:
* رابط إلى موقع الحدث {link}
* رابط إلى المنطقة المراقبة {modulelink}
* اسم القاعدة {rulename}
* الوصف {description}
* الحدث {eventname}';
$string['moduleinstance'] = 'مثل';
$string['monitordisabled'] = 'تم تعطيل مراقبة الأحداث حاليًا.';
$string['monitorenabled'] = 'تم تمكين مراقبة الأحداث حاليًا.';
$string['monitor:managerules'] = 'أدر قواعد مراقبة الحدث';
$string['monitor:managetool'] = 'تمكين / تعطيل مراقبة الأحداث';
$string['monitor:subscribe'] = 'اشترك في قواعد مراقبة الحدث';
$string['norules'] = 'لا توجد قواعد مراقبة الحدث.';
$string['pluginname'] = 'رصد الحدث';
$string['privacy:createdrules'] = 'قواعد مراقبة الأحداث التي قمت بإنشائها';
$string['privacy:metadata:description'] = 'وصف القاعدة';
$string['privacy:metadata:eventname'] = 'اسم مؤهل بالكامل لهذا الحدث';
$string['privacy:metadata:frequency'] = 'تواتر الإخطارات';
$string['privacy:metadata:historysummary'] = 'يخزن تاريخ رسالة الإخطارات المرسلة';
$string['privacy:metadata:inactivedate'] = 'الفترة الزمنية ، بالأيام ، وبعد ذلك سيتم إزالة اشتراك غير نشط بالكامل';
$string['privacy:metadata:lastnotificationsent'] = 'عندما تم إرسال إشعار آخر لهذا الاشتراك.';
$string['privacy:metadata:messagesummary'] = 'يتم إرسال الإشعارات إلى نظام الرسائل.';
$string['privacy:metadata:name'] = 'اسم القاعدة';
$string['privacy:metadata:plugin'] = 'Frankenstlye اسم البرنامج المساعد';
$string['privacy:metadata:rulessummary'] = 'هذا يخزن قواعد الشاشة.';
$string['privacy:metadata:subscriptionssummary'] = 'يخزن اشتراكات المستخدم للقواعد المختلفة';
$string['privacy:metadata:template'] = 'قالب الرسالة';
$string['privacy:metadata:timecreatedrule'] = 'عندما تم إنشاء هذه القاعدة';
$string['privacy:metadata:timecreatedsub'] = 'عندما تم إنشاء هذا الاشتراك';
$string['privacy:metadata:timemodifiedrule'] = 'عندما تم تعديل هذه القاعدة آخر مرة';
$string['privacy:metadata:timesent'] = 'عندما تم إرسال الرسالة';
$string['privacy:metadata:timewindow'] = 'نافذة الوقت في الثوان';
$string['privacy:metadata:userid'] = 'معرف المستخدم الذي أنشأ القاعدة.';
$string['privacy:metadata:useridhistory'] = 'معرف المستخدم الذي تم إرسال هذا الإشعار إليه';
$string['privacy:metadata:useridsub'] = 'معرف المشترك.';
$string['privacy:subscriptions'] = 'اشتراكات مراقب الأحداث الخاصة بي';
$string['processevents'] = 'أحداث العملية';
$string['ruleareyousure'] = 'هل أنت متأكد أنك تريد حذف القاعدة "{$a}"؟';
$string['ruleareyousureextra'] = 'هناك {$a} اشتراك في هذه القاعدة سيتم حذفه أيضًا.';
$string['rulecopysuccess'] = 'تم تكرار القاعدة بنجاح';
$string['ruledeletesuccess'] = 'تم حذف القاعدة بنجاح';
$string['rulehelp'] = 'تفاصيل القاعدة';
$string['rulehelp_help'] = 'تستمع هذه القاعدة إلى وقت بدء الحدث ({$a->event} مرة الحدث  \'{$a->eventname}\' \'في\' \'{$a->eventcomponent}\' في {$a->minutes} دقيقة.';
$string['rulename'] = 'اسم القاعدة';
$string['rulenopermission'] = 'ليس لديك إذن للاشتراك في أي أحداث.';
$string['rulenopermissions'] = 'ليس لديك أذونات لـ "{$a} قاعدة"';
$string['rulescansubscribe'] = 'القواعد التي يمكنك الاشتراك فيها';
$string['selectacourse'] = 'حدد مادة';
$string['selectcourse'] = 'تفضل بزيارة هذا التقرير على مستوى المادة للحصول على قائمة بالوحدات النمطية الممكنة';
$string['subareyousure'] = 'هل أنت متأكد من أنك تريد حذف الاشتراك في القاعدة "{$a}"؟';
$string['subcreatesuccess'] = 'تم إنشاء الاشتراك بنجاح';
$string['subdeletesuccess'] = 'تمت إزالة الاشتراك بنجاح';
$string['subhelp'] = 'تفاصيل الاشتراك';
$string['subhelp_help'] = 'يستمع هذا الاشتراك إلى الوقت الذي يتم فيه تشغيل الحدث \'{$a->eventname}\' في وقت ({$a->moduleinstance} \' {$a->frequency}  في {$a->minutes}  دقيقة ( دقائق).';
$string['subscribeto'] = 'اشترك في القاعدة "{$a}"';
$string['taskchecksubscriptions'] = 'تنشيط / إلغاء تنشيط اشتراكات القاعدة غير الصالحة';
$string['taskcleanevents'] = 'تنظيف الأحداث و رصد الأحداث';
$string['unsubscribe'] = 'إلغاء الاشتراك';
