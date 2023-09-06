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
 * Strings for component 'enrol_paypal', language 'ar', version '4.1'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'إسناد دور';
$string['businessemail'] = 'رسالة عمل PayPal';
$string['businessemail_desc'] = 'عنوان البريد الالكتروني لحساب العمل الخاص بك في PayPal';
$string['cost'] = 'تكلفة الانضمام';
$string['costerror'] = 'تكلفة الانضمام ليست رقماً';
$string['costorkey'] = 'لطفاً، إختر إحدى الطرق الآتية للانضمام.';
$string['currency'] = 'العملة';
$string['defaultrole'] = 'تعيين الدور الافتراضي';
$string['defaultrole_desc'] = 'إختر الدور الذي ينبغي تعيينه للمستخدمين خلال انضمامات PayPal';
$string['enrolenddate'] = 'تاريخ الانتهاء';
$string['enrolenddate_help'] = 'عند تمكينه، سيقتصر وصول المستخدمين إلى ذلك التاريخ.';
$string['enrolenddaterror'] = 'تاريخ انتهاء الانضمام لا يمكن أن يكون سابقاً لتاريخ بدئه';
$string['enrolperiod'] = 'فترة الانضمام';
$string['enrolperiod_desc'] = 'المدة الزمنية الافتراضية التي يكون فيها الانضمام سارياً. عند ضبطها على 0، ستكون فترة الانضمام غير محدودة إفتراضياً.';
$string['enrolperiod_help'] = 'المدة الزمنية التي يكون فيها الانضمام سارياً، بدءاً من لحظة انضمام المستخدم. عند تعطيله، ستكون فترة الانضمام غير محدودة إفتراضياً.';
$string['enrolstartdate'] = 'تاريخ البدء';
$string['enrolstartdate_help'] = 'عند تمكينه، سيبدأ وصول المستخدمين من ذلك التاريخ فصاعداً.';
$string['errdisabled'] = 'إضافة انضمام PayPal معطل ولا تتعامل مع إشعارات الانضمام.';
$string['erripninvalid'] = 'إشعار الدفع الفوري لم يتم التحقق منه بعد من قبل PayPal.';
$string['errpaypalconnect'] = 'تعذر الاتصال بـ {$a->url} للتحقق من إشعار الدفع الفوري: {$a->result}';
$string['expiredaction'] = 'إجراء انتهاء صلاحية الانضمام';
$string['expiredaction_help'] = 'إختر الإجراء المزمع تنفيذه عند انتهاء صلاحية انضمام المستخدم. لطفاً، لاحظ أن بعض بيانات المستخدم وإعداداته ستزول من المساق عند إلغاء انضمامه.';
$string['mailadmins'] = 'أبلغ المشرف';
$string['mailstudents'] = 'أبلغ الطلبة';
$string['mailteachers'] = 'أبلغ المعلمين';
$string['messageprovider:paypal_enrolment'] = 'رسائل انضمام PayPal';
$string['nocost'] = 'لا تكاليف مالية مفروضة على الانضمام إلى هذا المساق!';
$string['paypal:config'] = 'تهيئة عينة انضمام PayPal';
$string['paypal:manage'] = 'إدارة المستخدمين المنضمين';
$string['paypal:unenrol'] = 'إلغاء انضمام المستخدمين إلى المساق';
$string['paypal:unenrolself'] = 'إلغاء انضمامه إلى المساق';
$string['paypalaccepted'] = 'تم قبول التبرع المدفوع';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'تسمح وحدة PayPal لك بإعداد بيع المقررات الدراسية. إذا كانت كلفة اي مقرر صفراً، فلن تتم مطالبة الطلبة بالدفع مقابل الدخول. هناك تكلفة عامة على مستوى الموقع يمكنك تحديدها هنا على أنها المبلغ الافتراضي، ومن ثم هناك إعداد على مستوى المقرر يمكنك ضبطه لكل مساق على حدة. تكلفة المقرر تتجاوز تكلفة الموقع.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'معلومات عن معاملات PayPal المالية لانضمامات PayPal';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'عنوان البريد الالكتروني أو مُعرَّف حساب PayPal لمستلم الدفعة المالية (أي التاجر)';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'مُعرَّف المساق المباع';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'مُعرَّف عينة الانضمام في المساق';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'الاسم الكامل للمساق الدراسي الذي تم بيع الانضمام إليه';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'الملاحظة التي أدخلها المشتري في حقل الملاحظة لموقع مبيعات PayPal';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'الاسم الكامل للمشتري';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'في حالة إعادة المال، إلغاء الشراء، أو إلغاء إلغاء الشراء، هذا سيكون مُعرَّف المعاملة المالية الأصلية.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'حالة الدفع المالي';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'يثبت ما إذا كان الدفع المالي ممول بصك الكتروني (echeck)، أو ممول من قبل رصيد PayPal، بطاقة اعتماد أو تحويل مالي فوري (instant)';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'سبب تعليق حالة الدفع المالي (إن وجد)';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'سبب كون حالة الدفع المالي: ملغى، معاد، ملغى الإلغاء أو مرفوض (إذا كانت الحالة أي مما سبق)';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'عنوان البريد الالكتروني الأساسي لمستلم المال (وهو التاجر)';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'مُعرَّف الحساب الفريد في PayPal لمستلم المال (أي التاجر)';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'مبلغ الضريبة المفروضة على الدفع';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'الوقت الذي تم فيه إبلاغ مودل من قبل PayPal بشأن الدفع';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'الرقم التعريفي الأصلي للمعاملة المالية العائد للتاجر؛ لعملية الدفع من قبل المشتري، حيث تم تسجيل الحالة';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'مُعرَّف المستخدم الذي اشترى الانضمام إلى المساق';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'إن إضافة انضمام PayPal تنقل بيانات المستخدم من مودل إلى موقع PayPal';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'عنوان سكن المستخدم الذي يشتري المساق';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'مدينة المستخدم الذي يشتري المساق';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'بلد المستخدم الذي يشتري المساق';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'نص مفصول بواصلات يتضمن مُعرَّف المستخدم (المشتري)، مُعرَّف المساق، مُعرَّف عينة الانضمام';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'عنوان البريد الالكتروني للمستخدم الذي يشتري المساق';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'الاسم الأول للمستخدم الذي يشتري المساق';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'الاسم الأخير للمستخدم الذي يشتري المساق';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'الاسم الكامل للمشتري';
$string['processexpirationstask'] = 'مهمة إرسال انتهاء صلاحية انضمام PayPal';
$string['sendpaymentbutton'] = 'أرسل القيمة المدفوعة عن طريق PayPal';
$string['status'] = 'إسمح بانضمامات PayPal';
$string['status_desc'] = 'إسمح للمستخدمين باستعمال PayPal للانضمام إلى المساق إفتراضياً.';
$string['transactions'] = 'معاملات PayPal المالية';
$string['unenrolselfconfirm'] = 'هل تريد بالفعل إلغاء تسجيلك من المساق "{$a}"؟';
