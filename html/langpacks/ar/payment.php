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
 * Strings for component 'payment', language 'ar', version '4.5'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'مؤرشف';
$string['accountconfignote'] = 'ستتم تهيئة بوابات الدفع لهذا الحساب بشكل مستقل';
$string['accountdeleteconfirm'] = 'إذا كانت لهذا الحساب مدفوعات سابقة، ستتم أرشفته، بخلاف ذلك، ستتعرض بيانات تهيئته إلى الحذف الدائم. هل أنت متأكد من رغبتك في المتابعة؟';
$string['accountidnumber'] = 'رقم المُعرَّف';
$string['accountidnumber_help'] = 'يُستعمل رقم المُعرَّف فقط عند مطابقة الحساب مع الأنظمة الخارجية ولا يتم عرضه في أي موضع من الموقع. إذا كان الحساب متضمنًا لاسم ترميز رسمي، فبالإمكان إدخاله، بخلافه، يمكن ترك حقله فارغًا.';
$string['accountname'] = 'اسم الحساب';
$string['accountname_help'] = 'كيفية تعريف هذا الحساب للمعلمين أو المدراء الذين يقومون بإعداد المدفوعات المالية (على سبيل المثال في ملحق الانضمام إلى المساق).';
$string['accountnotavailable'] = 'غير متاح';
$string['createaccount'] = 'إنشاء حساب الدفع';
$string['deleteorarchive'] = 'الحذف أو الأرشفة';
$string['editpaymentaccount'] = 'تحرير حساب الدفع المالي';
$string['eventaccountcreated'] = 'حساب دفع تم إنشاؤه';
$string['eventaccountdeleted'] = 'حساب دفع تم حذفه';
$string['eventaccountupdated'] = 'حساب دفع تم تحديثه';
$string['feeincludesurcharge'] = '{$a->fee} (يتضمن {$a->surcharge}% تكلفة إضافية لاستعمال نوع الدفع هذا)';
$string['gatewaycannotbeenabled'] = 'لا يمكن تمكين بوابة الدفع لأن عملية التهيئة غير مكتملة.';
$string['gatewaydisabled'] = 'مُعطَّل';
$string['gatewayenabled'] = 'مُمَكَّن';
$string['gatewaynotfound'] = 'لم يتم العثور على البوابة';
$string['gotomanageplugins'] = 'تمكين بوابات الدفع المالي وتعطيلها وتحديد الكُلف الإضافية بواسطة {$a}.';
$string['gotopaymentaccounts'] = 'إنشاء حسابات دفع باستعمال أي من هذه البوابات التي في {$a}.';
$string['hidearchived'] = 'إخفاء المؤرشف';
$string['noaccountsavilable'] = 'لا توجد أي حسابات للدفع المالي.';
$string['nocurrencysupported'] = 'لا يوجد دعم للدفع المالي بأي عملة. لطفًا، تأكد من تمكين بوابة دفع واحدة على الأقل.';
$string['nogateway'] = 'لا توجد بوابة دفع مالي يمكن استعمالها.';
$string['nogatewayselected'] = 'عليك أولاً إختيار بوابة الدفع المالي.';
$string['paymentaccount'] = 'حساب الدفع';
$string['paymentaccounts'] = 'حسابات الدفع';
$string['paymentaccountsexplained'] = 'إنشاء حساب دفع مالي واحد أو أكثر لهذا الموقع. كل حساب يتضمن التهيئة الخاصة ببوابات الدفع المتاحة. الشخص الذي يقوم بتهية المدفوعات في الموقع (على سبيل المثال، مدفوعات الانضمام إلى المقررات الدراسية) سيتمكن من الاختيار من بين الحسابات المتاحة.';
$string['payments'] = 'المدفوعات';
$string['privacy:metadata:database:payments'] = 'معلومات عن المدفوعات';
$string['privacy:metadata:database:payments:amount'] = 'مقدار الدفع المالي';
$string['privacy:metadata:database:payments:currency'] = 'عملة الدفع المالي';
$string['privacy:metadata:database:payments:gateway'] = 'بوابة الدفع المستعملة للدفع المالي';
$string['privacy:metadata:database:payments:timecreated'] = 'وقت إجراء الدفع';
$string['privacy:metadata:database:payments:timemodified'] = 'وقت آخر تعديل في سجل الدفع';
$string['privacy:metadata:database:payments:userid'] = 'المستخدم الذي أجرى الدفع';
$string['restoreaccount'] = 'استعادة';
$string['selectpaymenttype'] = 'إختر نوع الدفع';
$string['showarchived'] = 'إظهار المؤرشف';
$string['supportedcurrencies'] = 'العملات المدعومة';
$string['surcharge'] = 'التكلفة الإضافية (نسبة مئوية)';
$string['surcharge_desc'] = 'التكلفة الإضافية هي نسبة مئوية إضافية يتحملها المستخدمون الذين يلجؤون إلى بوابة الدفع المالي هذه.';
