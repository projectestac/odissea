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
 * Strings for component 'enrol_manual', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol_manual
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'المتقدمة';
$string['alterstatus'] = 'غَيِّر الحالة';
$string['altertimeend'] = 'غَيِّر وقت الانتهاء';
$string['altertimestart'] = 'غَيِّر وقت البدء';
$string['assignrole'] = 'تعيين دور';
$string['assignroles'] = 'تعيين الأدوار';
$string['browsecohorts'] = 'تصفح الأفواج';
$string['browseusers'] = 'تصفح المستخدمين';
$string['confirmbulkdeleteenrolment'] = 'هل أنت متأكد من رغبتك في حذف إنضمامات المستخدمين هذه؟';
$string['defaultperiod'] = 'فترة الانضمام الافتراضية';
$string['defaultperiod_desc'] = 'المدة الزمنية الافتراضية التي يكون فيها الانضمام سارياً. عند ضبطها على 0، ستكون فترة الانضمام غير محدودة إفتراضياً.';
$string['defaultperiod_help'] = 'المدة الزمنية التي يكون فيها الانضمام سارياً، بدءاً من لحظة انضمام المستخدم. عند تعطيله، ستكون فترة الانضمام غير محدودة إفتراضياً.';
$string['defaultstart'] = 'بدء الانضمام إفتراضياً';
$string['deleteselectedusers'] = 'إحذف انضمامات المستخدمين المحددين';
$string['editselectedusers'] = 'تحرير انضمامات المستخدمين المحددين';
$string['enrolledincourserole'] = 'منضم إلى "{$a->course}" بدور "{$a->role}"';
$string['enrolusers'] = 'ضم المستخدمين';
$string['enroluserscohorts'] = 'ضم المستخدمين والأفواج المحددة';
$string['expiredaction'] = 'إجراء انتهاء صلاحية الانضمام';
$string['expiredaction_help'] = 'إختر الإجراء المزمع تنفيذه عند انتهاء صلاحية انضمام المستخدم. لطفاً، لاحظ أن بعض بيانات المستخدم وإعداداته ستزول من المساق عند إلغاء انضمامه.';
$string['expirymessageenrolledbody'] = 'عزيزي {$a->user}،

هذا إشعار بأن انضمامك إلى المساق \'{$a->course}\' قد استحق الانتهاء بتاريخ {$a->timeend}.

إذا أردت المساعدة، لطفاً، تواصل مع {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'إشعار انتهاء صلاحية الانضمام';
$string['expirymessageenrollerbody'] = 'الانضمام إلى المساق \'{$a->course}\' ستنتهي صلاحيته خلال {$a->threshold} القادمة للمستخدمين الآتية أسماؤهم:

{$a->users}

لتمديد انضمامهم، إذهب إلى {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'إشعار انتهاء صلاحية الانضمام';
$string['manual:config'] = 'تهيئة عينات الانضمام اليدوي';
$string['manual:enrol'] = 'ضم المستخدمين';
$string['manual:manage'] = 'إدارة انضمامات المستخدمين';
$string['manualpluginnotinstalled'] = 'لم يتم تنصيب الملحق "اليدوي" بعد';
$string['manual:unenrol'] = 'إلغاء انضمام المستخدمين إلى المساق';
$string['manual:unenrolself'] = 'إلغاء انضمامه إلى المساق';
$string['messageprovider:expiry_notification'] = 'إشعار انتهاء صلاحية الانضمام اليدوي';
$string['now'] = 'الآن';
$string['pluginname'] = 'الانضمامات اليدوية';
$string['pluginname_desc'] = 'ملحق الانضمام اليدوي يسمح بانضمام المستخدمين يدوياً عبر رابط في إعدادات إدارة المساق يضعه مستخدم ذو صلاحيات مناسبة، مثل المعلم. الملحق ينبغي تمكينه عادة، طالما أن بعض ملاحق الانضمام الأخرى تحتاجه، مثل الانضمام الشخصي.';
$string['privacy:metadata'] = 'إن ملحق الانضمام اليدوي لا يخزن أي بيانات شخصية.';
$string['selectcohorts'] = 'إختر الأفواج';
$string['selection'] = 'التحديد';
$string['selectusers'] = 'إختر المستخدمين';
$string['sendexpirynotificationstask'] = 'مهمة إرسال إشعار انتهاء صلاحية الانضمام اليدوي';
$string['status'] = 'تمكين الانضمام اليدوي';
$string['status_desc'] = 'السماح بالوصول إلى المساق من قبل المستخدمين المنضمين داخلياً. هذا ينبغي إبقاؤه مُمَكَّناً في أغلب الحالات.';
$string['statusdisabled'] = 'معطل';
$string['statusenabled'] = 'مُمَكَّن';
$string['status_help'] = 'هذا الإعداد يحدد فيما إذا كان بالإمكان ضم المستخدمين يدوياً عبر رابط في إعدادات إدارة المساق يضعه مستخدم ذو صلاحيات مناسبة، مثل المعلم.';
$string['syncenrolmentstask'] = 'مهمة مزامنة الانضمام اليدوي';
$string['unenrol'] = 'إلغِ انضمام المستخدم';
$string['unenrolselectedusers'] = 'إلغِ انضمام المستخدمين المحددين';
$string['unenrolselfconfirm'] = 'هل تريد بالفعل إلغاء تسجيلك من المقرر "{$a}"؟';
$string['unenroluser'] = 'هل ترغب حقاً في إلغاء انضمام "{$a->user}" إلى المساق "{$a->course}"؟';
$string['unenrolusers'] = 'إلغاء تسجيل المستخدمين';
$string['wscannotenrol'] = 'عينة الملحق لا يمكنها يدوياً ضم المستخدم إلى المساق ذي المُعرَّف = {$a->courseid}';
$string['wsnoinstance'] = 'عينة ملحق الانضمام اليدوي غير موجودة أو معطلة في المساق (المُعرَّف = {$a->courseid})';
$string['wsusercannotassign'] = 'ليست لديك صلاحية لتعيين هذا الدور ({$a->roleid}) إلى هذا المستخدم ({$a->userid}) في هذا المساق ({$a->courseid}).';
