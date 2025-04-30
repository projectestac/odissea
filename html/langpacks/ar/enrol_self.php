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
 * Strings for component 'enrol_self', language 'ar', version '4.4'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'التسجيل معطل أو غير نشط';
$string['canntenrolearly'] = 'لا يمكنك التسجيل حتى الآن يبدأ التسجيل في {$a}.';
$string['canntenrollate'] = 'لا يمكنك التسجيل بعد الآن ، حيث انتهى التسجيل في {$a}.';
$string['cohortnonmemberinfo'] = 'فقط أعضاء الدفعة \'{$a}\' يمكنهم تسجيل أنفسهم.';
$string['cohortonly'] = 'فقط أعضاء الدفعة';
$string['cohortonly_help'] = 'الانضمام الذاتي قد يكون محصوراً بأعضاء دفعة معينة. لاحظ أن تغيير هذا الإعداد ليس له تأثير على الانضمامات الحالية.';
$string['confirmbulkdeleteenrolment'] = 'هل أنت متأكد من رغبتك في حذف انضمامات المستخدمين هذه؟';
$string['customwelcomemessage'] = 'رسالة ترحيب مخصصة';
$string['customwelcomemessage_help'] = 'التنسيقات المقبولة: النص العادي أو تنسيق مودل التلقائي، وسوم HTML ووسوم متعدد اللغات مقبولة أيضًا، فضلاً عن العناصر النائبة الآتية:
<ul>
<li>اسم المساق {$a->coursename}</li>
<li>رابط إلى صفحة الملف الشخصي للمستخدم {$a->profileurl}</li>
<li>بريد المستخدم {$a->email}</li>
<li>اسم المستخدم الكامل {$a->fullname}</li>
<li>الاسم الأول للمستخدم {$a->firstname}</li>
<li>الاسم الأخير للمستخدم {$a->lastname}</li>
<li>دور المستخدم في المساق {$a->courserole}</li>
</ul>';
$string['defaultrole'] = 'تحديد الدور الأساسي';
$string['defaultrole_desc'] = 'إختر الدور الذي ينبغي منحه إلى المستخدمين خلال الانضمام الذاتي';
$string['deleteselectedusers'] = 'إحذف انضمامات المستخدمين المحددة';
$string['editselectedusers'] = 'تحرير انضمامات المستخدمين المحددة';
$string['enrolenddate'] = 'تاريخ الانتهاء';
$string['enrolenddate_help'] = 'عند تمكينه، سيستمر الانضمام الذاتي للمستخدمين إلى ذلك التاريخ فقط.';
$string['enrolenddaterror'] = 'لا يمكن أن يكون تاريخ الانتهاء للتسجيل قبل تاريخ بداية المساق';
$string['enrolme'] = 'سجلني في هذا المساق';
$string['enrolperiod'] = 'فترة الانضمام';
$string['enrolperiod_desc'] = 'المدة الزمنية الافتراضية التي يكون فيها الانضمام سارياً. عند ضبطها على 0، ستكون فترة الانضمام غير محدودة إفتراضياً.';
$string['enrolperiod_help'] = 'المدة الزمنية التي يكون فيها الانضمام سارياً، بدءاً من لحظة الانضمام الذاتي للمستخدم. عند تعطيله، ستكون فترة الانضمام غير محدودة إفتراضياً.';
$string['enrolstartdate'] = 'تاريخ البدء';
$string['enrolstartdate_help'] = 'عند تمكينه، سيكون بإمكان المستخدمين ضم أنفسهم من ذلك التاريخ فصاعداً.';
$string['expiredaction'] = 'إجراء انتهاء صلاحية الانضمام';
$string['expiredaction_help'] = 'إختر الإجراء المزمع تنفيذه عند انتهاء صلاحية انضمام المستخدم. لطفاً، لاحظ أن بعض بيانات المستخدم وإعداداته ستزول من المساق عند إلغاء انضمامه.';
$string['expiryinactivemessageenrolledbody'] = 'مرحبًا {$a->user}،

إن انضمامك إلى المساق {$a->course} ينتهي في {$a->timeend} نظرًا لكونك لم تقم بزيارته خلال {$a->inactivetime} من الأيام الماضية.

للإبقاء على انضمامك ساريًا، سجل دخولك وقم بزيارة <a href="{$a->url}">{$a->course}</a> قبل {$a->timeend}.';
$string['expiryinactivemessageenrolledsubject'] = 'انضمامك تنتهي صلاحيته: {$a->course}';
$string['expirymessageenrolledbody'] = 'عزيزي {$a->user}،

هذا إشعار بأن انضمامك إلى المساق \'{$a->course}\' قد استحق الانتهاء بتاريخ {$a->timeend}.

إذا أردت المساعدة، لطفاً، تواصل مع {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'إشعار انتهاء صلاحية الانضمام الذاتي';
$string['expirymessageenrollerbody'] = 'الانضمام الذاتي إلى المساق \'{$a->course}\' ستنتهي صلاحيته خلال {$a->threshold} القادمة للمستخدمين الآتية أسماؤهم:

{$a->users}

لتمديد انضمامهم، إذهب إلى {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'إشعار انتهاء صلاحية الانضمام الذاتي';
$string['expirynotifyall'] = 'المعلم والمستخدم المنضم';
$string['expirynotifyenroller'] = 'المعلم فقط';
$string['groupkey'] = 'استعمل مفاتيح انضمام المجموعة';
$string['groupkey_desc'] = 'استعمل مفاتيح انضمام المجموعة إفتراضياً.';
$string['groupkey_help'] = 'فضلاً عن حصر الوصول إلى المساق بهؤلاء الذين يملكون المفتاح، استعمال مفاتيح انضمام المجموعة معناه إضافة المستخدمين تلقائياً إلى المجموعة عند انضمامهم إلى المساق.

ملاحظة: مفتاح الانضمام إلى المساق ينبغي تحديده في إعدادات الانضمام الذاتي فضلاً عن مفاتيح انضمام المجموعة في إعداداتها.';
$string['keyholder'] = 'ينبغي أن تكون قد استلمت مفتاح الانضمام هذا من:';
$string['longtimenosee'] = 'ألغِ الانضمام غير النشط بعد';
$string['longtimenosee_help'] = 'إذا لم يصل المستخدمون إلى المساق لمدة طويلة، سيتم إلغاء انضمامهم إليه تلقائياً. هذا الإعداد يحدد مقدار تلك المدة.';
$string['maxenrolled'] = 'أقصى عدد للمستخدمين المنضمين';
$string['maxenrolled_help'] = 'يحدد أقصى عدد من المستخدمين الذين يمكنهم ضم أنفسهم. 0 معناه بلا حد.';
$string['maxenrolledreached'] = 'تم الوصول سلفاً إلى أقصى عدد مسموح به من المنضمين ذاتياً.';
$string['messageprovider:expiry_notification'] = 'إشعارات انتهاء صلاحية الانضمام الذاتي';
$string['newenrols'] = 'السماح بالانضمامات الذاتية الجديدة';
$string['newenrols_desc'] = 'إسمح للمستخدمين بالانضمام الذاتي إلى المقررات الدراسية الجديدة إفتراضياً.';
$string['newenrols_help'] = 'هذا الإعداد يحدد فيما إذا كان بإمكان المستخدم الانضمام إلى هذا المساق.';
$string['nopassword'] = 'لا حاجة لمفتاح الانضمام.';
$string['password'] = 'مفتاح الانضمام';
$string['password_help'] = 'مفتاح الانضمام يسمح بحصر الوصول إلى المساق بهؤلاء الذين يعرفون المفتاح فقط.

إذا تُرك الحقل فارغاً، سيتمكن أي مستخدم من الانضمام إلى المساق.

إذا تم تحديد مفتاح الانضمام، سيُطالب أي مستخدم يحاول الانضمام إلى المساق بإدخال المفتاح. لاحظ أن على المستخدم تقديم مفتاح الانضمام مرة واحدة فقط عند طلبهم الانضمام إليه.';
$string['passwordinvalid'] = 'مفتاح الانضمام غير صحيح، لطفاً، حاول مجدداً';
$string['passwordinvalidhint'] = 'مفتاح التسجيل غير صحيح. يرجى إعادة المحاولة<br />
(هذا تلميح - إنه يبدأ بـ \'{$a}\'';
$string['passwordmatchesgroupkey'] = 'مفتاح الانضمام هذا مستعمل مسبقًا كمفتاح انضمام مجموعة.';
$string['pluginname'] = 'الانضمام الذاتي';
$string['pluginname_desc'] = 'إضافة الانضمام الذاتي تسمح للمستخدمين باختيار المقررات الدراسية التي يريدون المشاركة فيها. قد تكون المقررات الدراسية محمية بمفاتيح انضمام. داخلياً، يتم تنفيذ الانضمام من قبل إضافة الانضمام اليدوي والذي ينبغي تمكينه في نفس المقرر.';
$string['privacy:metadata'] = 'إن إضافة الانضمام الذاتي لا تخزن أي بيانات شخصية.';
$string['requirepassword'] = 'يتطلب مفتاح الانضمام';
$string['requirepassword_desc'] = 'يتطلب وجود مفتاح الانضمام في المساقات الجديدة ويمنع إزالة مفاتيح الانضمام من المساقات الموجودة.';
$string['role'] = 'تعيين الدور الافتراضي';
$string['self:config'] = 'تهيئة عينات الانضمام الذاتي';
$string['self:enrolself'] = 'ضم نفسه إلى المساق';
$string['self:holdkey'] = 'الظهور بمثابة حامل مفتاح الانضمام الذاتي';
$string['self:manage'] = 'إدارة المستخدمين المنضمين';
$string['self:unenrol'] = 'إلغاء انضمام المستخدمين إلى المساق';
$string['self:unenrolself'] = 'إلغاء انضمامه إلى المساق';
$string['sendcoursewelcomemessage'] = 'أرسل رسالة ترحيب المساق';
$string['sendcoursewelcomemessage_help'] = 'عند انضمام المستخدم ذاتياً إلى مساق، قد ترسل له رسالة ترحيبية عبر البريد الالكتروني. إذا تم إرسالها من عنوان اتصال المساق (إفتراضياً هو المعلم)، وكان هناك أكثر من مستخدم واحد يحملون هذا الدور، فالرسالة ستُرسل من قبل المستخدم الذي حصل على الدور أولاً.';
$string['sendexpirynotificationstask'] = 'مهمة إرسال إشعار انتهاء صلاحية الانضمام الذاتي';
$string['showhint'] = 'أظهر التلميح';
$string['showhint_desc'] = 'أظهر الحرف الأول من مفتاح الانضمام';
$string['status'] = 'الإبقاء على الانضمامات الذاتية الحالية فعالة';
$string['status_desc'] = 'تمكين طريقة الانضمام الذاتي في المقررات الدراسية الجديدة';
$string['status_help'] = 'عند تعطيله، لن يكون للمستخدمين الموجودين حاليًا والذين انضموا ذاتيًا إلى المساق إمكانية الوصول إليه.';
$string['syncenrolmentstask'] = 'مهمة مزامنة الانضمام الذاتي';
$string['unenrol'] = 'إلغِ انضمام المستخدم';
$string['unenrolselfconfirm'] = 'هل تريد بالفعل إلغاء تسجيلك من المساق "{$a}"؟';
$string['unenroluser'] = 'هل ترغب حقاً في إلغاء انضمام "{$a->user}" إلى المساق "{$a->course}"?';
$string['unenrolusers'] = 'إلغِ انضمام المستخدمين';
$string['usepasswordpolicy'] = 'استعمل سياسة كلمة المرور';
$string['usepasswordpolicy_desc'] = 'استعمل سياسة كلمة المرور القياسية لمفاتيح الانضمام.';
$string['welcometocourse'] = 'مرحبا في {$a}';
$string['welcometocoursetext'] = 'مرحبا في {$a->coursename}!
من الأشياء التي يجب أن تفعلها ابتداء أن تقوم بتعديل الصفحة السيرة الذاتية خلال المساق حتى نعرف المزيد عنك
 {$a->profileurl}';
