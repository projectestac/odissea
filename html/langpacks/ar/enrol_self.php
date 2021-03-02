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
 * Strings for component 'enrol_self', language 'ar', version '3.8'.
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
$string['cohortnonmemberinfo'] = 'فقط أعضاء الفوج \'{$a}\' يمكنهم تسجيل أنفسهم.';
$string['cohortonly'] = 'فقط أعضاء الفوج';
$string['cohortonly_help'] = 'الانضمام الذاتي قد يكون محصوراً بأعضاء فوج معين. لاحظ أن تغيير هذا الإعداد ليس له تأثير على الانضمامات الحالية.';
$string['confirmbulkdeleteenrolment'] = 'هل أنت متأكد من رغبتك في حذف انضمامات المستخدمين هذه؟';
$string['customwelcomemessage'] = 'رسالة ترحيب مخصصة';
$string['customwelcomemessage_help'] = 'يمكن إضافة رسالة ترحيبية مخصصة بتنسيق عادي أو بتنسيق مودل التلقائي، متضمنة وسوم HTML ووسوم متعدد اللغات.

يمكن تضمين العناصر النائبة الآتية في الرسالة:

* اسم المقرر {$a->coursename}
* رابط إلى صفحة الملف الشخصي للمستخدم {$a->profileurl}
* بريد المستخدم {$a->email}
* اسم المستخدم الكامل {$a->fullname}';
$string['defaultrole'] = 'تحديد الدور الأساسي';
$string['defaultrole_desc'] = 'إختر الدور الذي ينبغي منحه إلى المستخدمين خلال الانضمام الذاتي';
$string['deleteselectedusers'] = 'إحذف انضمامات المستخدمين المحددة';
$string['editselectedusers'] = 'تحرير انضمامات المستخدمين المحددة';
$string['enrolenddate'] = 'تاريخ الانتهاء';
$string['enrolenddate_help'] = 'عند تمكينه، سيستمر الانضمام الذاتي للمستخدمين إلى ذلك التاريخ فقط.';
$string['enrolenddaterror'] = 'لا يمكن أن يكون تاريخ الانتهاء للتسجيل قبل تاريخ بداية المقرر الدراسي';
$string['enrolme'] = 'سجلني في هذا المقرر الدراسي';
$string['enrolperiod'] = 'فترة الانضمام';
$string['enrolperiod_desc'] = 'المدة الزمنية الافتراضية التي يكون فيها الانضمام سارياً. عند ضبطها على 0، ستكون فترة الانضمام غير محدودة إفتراضياً.';
$string['enrolperiod_help'] = 'المدة الزمنية التي يكون فيها الانضمام سارياً، بدءاً من لحظة الانضمام الذاتي للمستخدم. عند تعطيله، ستكون فترة الانضمام غير محدودة إفتراضياً.';
$string['enrolstartdate'] = 'تاريخ البدء';
$string['enrolstartdate_help'] = 'عند تمكينه، سيكون بإمكان المستخدمين ضم أنفسهم من ذلك التاريخ فصاعداً.';
$string['expiredaction'] = 'إجراء انتهاء صلاحية الانضمام';
$string['expiredaction_help'] = 'إختر الإجراء المزمع تنفيذه عند انتهاء صلاحية انضمام المستخدم. لطفاً، لاحظ أن بعض بيانات المستخدم وإعداداته ستزول من المقرر الدراسي عند إلغاء انضمامه.';
$string['expirymessageenrolledbody'] = 'عزيزي {$a->user}،

هذا إشعار بأن انضمامك إلى المقرر الدراسي \'{$a->course}\' قد استحق الانتهاء بتاريخ {$a->timeend}.

إذا أردت المساعدة، لطفاً، تواصل مع {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'إشعار انتهاء صلاحية الانضمام الذاتي';
$string['expirymessageenrollerbody'] = 'الانضمام الذاتي إلى المقرر الدراسي \'{$a->course}\' ستنتهي صلاحيته خلال {$a->threshold} القادمة للمستخدمين الآتية أسماؤهم:

{$a->users}

لتمديد انضمامهم، إذهب إلى {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'إشعار انتهاء صلاحية الانضمام الذاتي';
$string['expirynotifyall'] = 'المعلم والمستخدم المنضم';
$string['expirynotifyenroller'] = 'المعلم فقط';
$string['groupkey'] = 'استعمل مفاتيح انضمام المجموعة';
$string['groupkey_desc'] = 'استعمل مفاتيح انضمام المجموعة إفتراضياً.';
$string['groupkey_help'] = 'فضلاً عن حصر الوصول إلى المقرر الدراسي بهؤلاء الذين يملكون المفتاح، استعمال مفاتيح انضمام المجموعة معناه إضافة المستخدمين تلقائياً إلى المجموعة عند انضمامهم إلى المقرر الدراسي.

ملاحظة: مفتاح الانضمام إلى المقرر الدراسي ينبغي تحديده في إعدادات الانضمام الذاتي فضلاً عن مفاتيح انضمام المجموعة في إعداداتها.';
$string['keyholder'] = 'ينبغي أن تكون قد استلمت مفتاح الانضمام هذا من:';
$string['longtimenosee'] = 'ألغِ انضمام غير النشط';
$string['longtimenosee_help'] = 'إذا لم يصل المستخدمون إلى المقرر الدراسي لمدة طويلة، سيتم إلغاء انضمامهم إليه تلقائياً. هذا الإعداد يحدد مقدار تلك المدة.';
$string['maxenrolled'] = 'أقصى عدد للمستخدمين المنضمين';
$string['maxenrolled_help'] = 'يحدد أقصى عدد من المستخدمين الذين يمكنهم ضم أنفسهم. 0 معناه بلا حد.';
$string['maxenrolledreached'] = 'تم الوصول سلفاً إلى أقصى عدد مسموح به من المنضمين ذاتياً.';
$string['messageprovider:expiry_notification'] = 'إشعارات انتهاء صلاحية الانضمام الذاتي';
$string['newenrols'] = 'إسمح بالانضمامات الجديدة';
$string['newenrols_desc'] = 'إسمح للمستخدمين بالانضمام الذاتي إلى المقررات الدراسية الجديدة إفتراضياً.';
$string['newenrols_help'] = 'هذا الإعداد يحدد فيما إذا كان بإمكان المستخدم الانضمام إلى هذا المقرر الدراسي.';
$string['nopassword'] = 'لا حاجة لمفتاح الانضمام.';
$string['password'] = 'مفتاح الانضمام';
$string['password_help'] = 'مفتاح الانضمام يسمح بحصر الوصول إلى المقرر الدراسي بهؤلاء الذين يعرفون المفتاح فقط.

إذا تُرك الحقل فارغاً، سيتمكن أي مستخدم من الانضمام إلى المقرر الدراسي.

إذا تم تحديد مفتاح الانضمام، سيُطالب أي مستخدم يحاول الانضمام إلى المقرر الدراسي بإدخال المفتاح. لاحظ أن على المستخدم تقديم مفتاح الانضمام مرة واحدة فقط عند طلبهم الانضمام إليه.';
$string['passwordinvalid'] = 'مفتاح الانضمام غير صحيح، لطفاً، حاول مجدداً';
$string['passwordinvalidhint'] = 'مفتاح التسجيل غير صحيح. يرجى إعادة المحاولة<br />
(هذا تلميح - إنه يبدأ بـ \'{$a}\'';
$string['pluginname'] = 'التسجيل الذاتي';
$string['pluginname_desc'] = 'ملحق الانضمام الذاتي يسمح للمستخدمين باختيار المقررات الدراسية التي يريدون المشاركة فيها. قد تكون المقررات الدراسية محمية بمفاتيح انضمام. داخلياً، يتم تنفيذ الانضمام من قبل ملحق الانضمام اليدوي والذي ينبغي تمكينه في نفس المقرر.';
$string['privacy:metadata'] = 'ملحق الانضمام الذاتي لا يخزن أي بيانات شخصية.';
$string['requirepassword'] = 'يتطلب مفتاح الانضمام';
$string['requirepassword_desc'] = 'يتطلب وجود مفتاح الانضمام في المقررات الدراسية الجديدة ويمنع إزالة مفاتيح الانضمام من المقررات الدراسية الموجودة.';
$string['role'] = 'تعيين الدور الافتراضي';
$string['self:config'] = 'تهيئة عينات الانضمام الذاتي';
$string['self:holdkey'] = 'الظهور بمثابة حامل مفتاح الانضمام الذاتي';
$string['self:manage'] = 'إدارة المستخدمين المنضمين';
$string['self:unenrol'] = 'إلغاء تسجيل المستخدمين من مقرر';
$string['self:unenrolself'] = 'إلغاء انضمامه إلى المقرر الدراسي';
$string['sendcoursewelcomemessage'] = 'أرسل رسالة ترحيب المقرر الدراسي';
$string['sendcoursewelcomemessage_help'] = 'عند انضمام المستخدم ذاتياً إلى مقرر، قد ترسل له رسالة ترحيبية عبر البريد الالكتروني. إذا تم إرسالها من عنوان اتصال المقرر الدراسي (إفتراضياً هو المعلم)، وكان هناك أكثر من مستخدم واحد يحملون هذا الدور، فالرسالة ستُرسل من قبل المستخدم الذي حصل على الدور أولاً.';
$string['sendexpirynotificationstask'] = 'مهمة إرسال إشعار انتهاء صلاحية الانضمام الذاتي';
$string['showhint'] = 'أظهر التلميح';
$string['showhint_desc'] = 'أظهر الحرف الأول من مفتاح الانضمام';
$string['status'] = 'إسمح بالانضمامات الموجودة';
$string['status_desc'] = 'تمكين طريقة الانضمام الذاتي في المقررات الدراسية الجديدة';
$string['status_help'] = 'عند تمكينه مع تعطيل \'إسمح بالانضمامات الجديدة\'، سيقتصر الوصول إلى المقرر الدراسي على المستخدمين المنضمين ذاتياً سابقاً. عند تعطيله، ستكون طريقة الانضمام الذاتي هذه معطلة فعلياً، نظراً لتعليق كل الانضمامات الذاتية الحالية وعدم تمكن المستخدمين الجدد من الانضمام ذاتياً.';
$string['syncenrolmentstask'] = 'مهمة مزامنة الانضمام الذاتي';
$string['unenrol'] = 'إلغِ انضمام المستخدم';
$string['unenrolselfconfirm'] = 'هل تريد بالفعل إلغاء تسجيلك من المقرر "{$a}"؟';
$string['unenroluser'] = 'هل ترغب حقاً في إلغاء انضمام "{$a->user}" إلى المقرر الدراسي "{$a->course}"?';
$string['unenrolusers'] = 'إلغِ انضمام المستخدمين';
$string['usepasswordpolicy'] = 'استعمل سياسة كلمة المرور';
$string['usepasswordpolicy_desc'] = 'استعمل سياسة كلمة المرور القياسية لمفاتيح الانضمام.';
$string['welcometocourse'] = 'مرحبا في {$a}';
$string['welcometocoursetext'] = 'مرحبا في {$a->coursename}!
من الأشياء التي يجب أن تفعلها ابتداء أن تقوم بتعديل الصفحة السيرة الذاتية خلال المقرر الدراسي حتى نعرف المزيد عنك
 {$a->profileurl}';
