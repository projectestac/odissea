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
 * Strings for component 'sms', language 'ar', version '4.5'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'الإجراءات';
$string['countrycode'] = 'رمز البلد الافتراضي';
$string['countrycode_help'] = 'رمز البلد لإضافته إلى أرقام الجوالات إذا لم يُدخل المستخدمون رموز بلدانهم. أدخل الرقم بدون البادئة \'+\'.';
$string['createnewgateway'] = 'إنشاء بوابة رسائل قصيرة جديدة';
$string['delete_sms_gateway'] = 'حذف بوابة الرسائل القصيرة';
$string['delete_sms_gateway_confirmation'] = 'هذا سيؤدي إلى حذف بوابة الرسائل القصيرة {$a->gateway}.';
$string['edit_sms_gateway'] = 'تحرير بوابة الرسائل القصيرة {$a->gateway}';
$string['gateway'] = 'البوابة';
$string['gateway_name'] = 'اسم البوابة';
$string['manage_sms_gateways'] = 'إدارة بوابات الرسائل القصيرة';
$string['phonenumbernotvalid'] = 'شكل رقم الهاتف غير المتعرف عليه: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'يخزن الرسائل المرسلة عبر الرسائل القصيرة.';
$string['privacy:metadata:sms_messages:content'] = 'نص الرسالة';
$string['privacy:metadata:sms_messages:id'] = 'مُعرَّف الرسالة';
$string['privacy:metadata:sms_messages:recipient'] = 'رقم الهاتف الذي أرسلت إليه الرسالة';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'المستخدم الذي أرسلت إليه الرسالة، لو عُلم';
$string['privacy:metadata:sms_messages:status'] = 'حالة الرسالة';
$string['privacy:metadata:sms_messages:timecreated'] = 'وقت إنشاء الرسالة';
$string['privacy:sms:sensitive_not_shown'] = 'لم يتم تخزين محتوى هذه الرسالة لأنها كانت مُعلَّمة بأنها ذات محتوى حساس.';
$string['select_sms_gateways'] = 'مزود بوابة الرسائل القصيرة';
$string['sms'] = 'الرسالة القصيرة';
$string['sms_gateway_delete_failed'] = 'يتعذر حذف بوابة الرسائل القصيرة {$a->gateway}. قد تكون قيد الاستعمال أو هناك مشكلة في قاعدة البيانات. تأكد من كون البوابة شغالة أو أطلب مساعدة المشرف على قاعدة بياناتك.';
$string['sms_gateway_deleted'] = 'تم حذف بوابة الرسائل القصيرة {$a->gateway}';
$string['sms_gateway_disable_failed'] = 'يتعذر تعطيل بوابة الرسائل القصيرة {$a->gateway}. قد تكون قيد الاستعمال أو هناك مشكلة في قاعدة البيانات. تأكد من كون البوابة شغالة أو أطلب مساعدة المشرف على قاعدة بياناتك.';
$string['sms_gateways'] = 'بوابات الرسائل القصيرة';
$string['sms_gateways_info'] = 'إنشاء وإدارة بوابات الرسائل القصيرة لإرسال رسائل قصيرة من موقعك.';
$string['status:gateway_failed'] = 'فشلت البوابة في إرسال الرسالة';
$string['status:gateway_not_available'] = 'البوابة غير متاحة لإرسال الرسالة';
$string['status:gateway_queued'] = 'الرسالة وُضعت في الطابور لإرسالها عبر البوابة';
$string['status:gateway_rejected'] = 'البوابة رفضت الرسالة';
$string['status:gateway_sent'] = 'الرسالة أُرسلت من قبل البوابة';
$string['status:message_over_size'] = 'الرسالة أطول من أن تُرسل عبر البوابة';
$string['status:unknown'] = 'يتعذر تحديد حالة الرسالة';
