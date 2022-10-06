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
 * Strings for component 'message_airnotifier', language 'ar', version '3.11'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'إدارة الأجهزة';
$string['airnotifieraccesskey'] = 'مفتاح وصول Airnotifier';
$string['airnotifierappname'] = 'اسم تطبيق Airnotifier';
$string['airnotifierfielderror'] = 'الرجاء إزالة الفراغات أو الحروف غير الضرورية من الحقل الآتي: {$a}';
$string['airnotifiermobileappname'] = 'اسم تطبيق الجوال';
$string['airnotifierport'] = 'منفذ Airnotifier';
$string['airnotifierurl'] = 'رابط Airnotifier';
$string['checkconfiguration'] = 'التحقق والفحص لتهيئة دفع الإشعارات';
$string['configairnotifieraccesskey'] = 'مفتاح الوصول للاتصال بمخدم Airnotifier. يمكنك الحصول على مفتاح الوصول عبر النقر على رابط "طلب مفتاح الوصول" أدناه (للمواقع المسجلة فقط) أو عبر إنشاء حساب في <a href="https://apps.moodle.com">بوابة تطبيقات مودل</a>.';
$string['configairnotifierappname'] = 'مُعرَّف اسم تطبيق Airnotifier.';
$string['configairnotifiermobileappname'] = 'المُعرَّف الفريد لتطبيق الجوال (عادة شيء ما مثل com.moodle.moodlemobile).';
$string['configairnotifierport'] = 'المنفذ المستعمل للاتصال بمخدم airnotifier.';
$string['configairnotifierurl'] = 'رابط المخدم للاتصال به عند إرسال دفعات الإشعارات.';
$string['configured'] = 'مهيأ';
$string['deletecheckdevicename'] = 'إحذف جهازك: {$a->name}';
$string['deletedevice'] = 'إحذف الجهاز. لاحظ أن التطبيق يمكنه تسجيل الجهاز مجدداً. إذا استمر الجهاز بالظهور، عطله.';
$string['devicetoken'] = 'ترميز الجهاز';
$string['enableprocessor'] = 'تمكين إشعارات الجوال';
$string['errorretrievingkey'] = 'وقع خطأ عند إحضار مفتاح الوصول. ينبغي أن يكون موقعك مسجلاً لاستعمال هذه الخدمة. إن كان موقعك مسجل مسبقاً، لطفاً، حاول تحديث تسجيلك. كبديل، يمكنك الحصول على مفتاح الوصول عبر إنشاء حساب في <a href="https://apps.moodle.com">بوابة تطبيقات مودل</a>.';
$string['keyretrievedsuccessfully'] = 'تم الحصول على مفتاح الوصول بنجاح. للوصول إلى إحصائيات استعمال تطبيق مودل، لطفاً، أنشئ حساباً في <a href="https://apps.moodle.com">بوابة تطبيقات مودل</a>.';
$string['messageprovidersempty'] = 'ليست هناك إشعارات جوال مُمَكَّنة في تفضيلات الإشعارات الافتراضية.';
$string['messageproviderslow'] = 'فقط القليل من إشعارات الجوال مُمَكَّنة في تفضيلات الإشعارات الافتراضية.';
$string['moodleappsportallimitswarning'] = 'لطفاً، لاحظ أن عدد أجهزة المستخدمين المسموح لها بتلقي الإشعارات يعتمد على اشتراكك في تطبيقات مودل. لمعرفة التفاصيل، قم بزيارة <a href="{$a}" target="_blank">بوابة تطبيقات مودل</a>.';
$string['nodevices'] = 'لا أجهزة مسجلة. ستظهر الأجهزة تلقائياً بعد تنصيب تطبيق مودل وإضافة هذا الموقع.';
$string['nopermissiontomanagedevices'] = 'ليست لديك صلاحية إدارة الأجهزة.';
$string['notconfigured'] = 'لم تتم تهيئة مخدم Airnotifier بعد، لذلك يتعذر إرسال دفعات الإشعارات.';
$string['notificationsserverconfiguration'] = 'تهيئة مخدم الإشعارات (Airnotifier)';
$string['pluginname'] = 'الجوال';
$string['privacy:appiddescription'] = 'هذا مُعرَّف للتطبيق الذي هو قيد الاستعمال.';
$string['privacy:enableddescription'] = 'إذا كان هذا الجهاز مُمَكَّناً لـ airnotifier.';
$string['privacy:metadata:date'] = 'تاريخ إرسال الرسالة';
$string['privacy:metadata:enabled'] = 'فيما إذا كان جهاز airnotifier مُمَكَّناً';
$string['privacy:metadata:externalpurpose'] = 'هذه المعلومات ترسل إلى موقع خارجي لنقلها بشكل نهائي إلى جهاز جوال المستخدم';
$string['privacy:metadata:fullmessage'] = 'الرسالة الكاملة';
$string['privacy:metadata:notification'] = 'فيما إذا كانت هذه الرسالة إشعاراً';
$string['privacy:metadata:smallmessage'] = 'مقطع من الرسالة';
$string['privacy:metadata:subject'] = 'سطر الموضوع في الرسالة';
$string['privacy:metadata:tableexplanation'] = 'معلومات جهاز Airnotifier تخزن هنا';
$string['privacy:metadata:userdeviceid'] = 'المُعرَّف المؤدي إلى جهاز جوال المستخدم';
$string['privacy:metadata:userfromfullname'] = 'الاسم الكامل للمستخدم الذي أرسل الرسالة';
$string['privacy:metadata:userfromid'] = 'مُعرَّف المستخدم لمؤلف الرسالة';
$string['privacy:metadata:userid'] = 'مُعرَّف المستخدم الذي أرسل الرسالة';
$string['privacy:metadata:username'] = 'اسم المستخدم للمستخدم';
$string['privacy:metadata:usersubsystem'] = 'هذه الإضافة مرتبطة بنظام المستخدم الفرعي';
$string['privacy:subcontext'] = 'مراسلة Airnotifier';
$string['requestaccesskey'] = 'أطلب مفتاح الوصول';
$string['sendtest'] = 'إرسال دفع إشعارات تجريبي إلى أجهزتي';
$string['sendtestconfirmation'] = 'سيتم إرسال دفع إشعار تجريبي إلى الأجهزة التي تستعملها للاتصال بهذا الموقع. يرجى التأكد من أن أجهزتك متصلة بالإنترنت وتطبيق الجوال فيها غير مفتوح (لأن دفع الإشعارات يتم عرضه فقط عند تلقيه في الخلفية).';
$string['serverconnectivityerror'] = 'هذا الموقع غير قادر على الاتصال مع مخدم الإشعارات {$a}';
$string['showhide'] = 'تمكين/تعطيل الجهاز';
$string['sitemustberegistered'] = 'من أجل استعمال عينة Airnotifier العامة، لا بد من تسجيل موقعك. كبديل، يمكنك الحصول على مفتاح وصول عبر إنشاء حساب في <a href="https://apps.moodle.com">بوابة تطبيقات مودل</a>.';
$string['unknowndevice'] = 'جهاز مجهول';
$string['userdevices'] = 'أجهزة المستخدم';
