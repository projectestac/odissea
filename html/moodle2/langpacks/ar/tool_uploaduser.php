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
 * Strings for component 'tool_uploaduser', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_uploaduser
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'السماح بالحذف';
$string['allowrenames'] = 'السماح بإعادة التسمية';
$string['allowsuspends'] = 'السماح بتعليق وتفعيل الحسابات';
$string['assignedsysrole'] = 'دور النظام المعين {$a}';
$string['csvdelimiter'] = 'محدد CSV';
$string['defaultvalues'] = 'القيم الأفتراضية';
$string['deleteerrors'] = 'احذف الاخطاء';
$string['encoding'] = 'التشفير';
$string['errormnetadd'] = 'لا يمكن إضافة المستخدمين عن بعد';
$string['errors'] = 'أخطاء';
$string['invalidupdatetype'] = 'لا يمكن تحديد هذا الخيار بنوع التحميل المختار.';
$string['invaliduserdata'] = 'تم اكتشاف بيانات غير صالحة للمستخدم {$a} وتم تنظيفها تلقائيًا.';
$string['nochanges'] = 'لا يوجد تغير';
$string['pluginname'] = 'تحميل المستخدم';
$string['privacy:metadata'] = 'لا يقوم مكون تحميل المستخدم بتخزين أي بيانات شخصية.';
$string['renameerrors'] = 'أخطاء في إعادة المسميات';
$string['requiredtemplate'] = 'مطلوب. يمكنك استخدام بناء قالب جملة هنا (%l = lastname, %f = firstname, %u = username). انظر التعليمات للمزيد من التفاصيل و الأمثلة.';
$string['rowpreviewnum'] = 'معاينة صفوف جدول';
$string['unassignedsysrole'] = 'دور النظام غير المعيّن {$a}';
$string['uploadpicture_baduserfield'] = 'سمة المستخدم المحددة غير صالحة. من فضلك، حاول مرة أخرى.';
$string['uploadpicture_cannotmovezip'] = 'لا يمكن نقل ملف مضغوط إلى مجلد مؤقت';
$string['uploadpicture_cannotprocessdir'] = 'لا يمكن معالجة الملفات المضغوطة';
$string['uploadpicture_cannotsave'] = 'لا يمكن حفظ صورة للمستخدم {$a}. تحقق من ملف الصورة الأصلي .';
$string['uploadpicture_cannotunzip'] = 'لا يمكن فك ملف الصور المضغوط';
$string['uploadpicture_invalidfilename'] = 'ملف الصورة {$a} يحتوي على أحرف غير صالحة في اسمها .. تجاوز.';
$string['uploadpicture_overwrite'] = 'الكتابة فوق صور المستخدم الموجودة ؟';
$string['uploadpictures'] = 'حمل صور مستخدم';
$string['uploadpictures_help'] = 'ويمكن تحميل الصور للمستخدم كملف مضغوط من ملفات الصور. يجب تسمية ملفات الصور المختارة من قبل المستخدم-attribute.extension، على سبيل المثال user1234.jpg لمستخدم باسم المستخدم user1234.';
$string['uploadpicture_userfield'] = 'سمة المستخدم و المستخدمة لمطابقة الصورة:';
$string['uploadpicture_usernotfound'] = 'المستخدم مع  \'{$a->userfield}\' قيمة  \'{$a->uservalue}\' غير موجود. تجاوز.';
$string['uploadpicture_userskipped'] = 'تخطي المستخدم {$a}  (لديه بالفعل صورة).';
$string['uploadpicture_userupdated'] = 'صورة محدثة للمستخدم {$a}.';
$string['uploadusers'] = 'تحميل مستخدمون';
$string['uploadusers_help'] = 'ويمكن تحميل المستخدمين (والمسجلين اختياريا في المقررات) عن طريق ملف نصي. تنسيق الملف يجب أن يكون على النحو التالي:
* كل سطر من الملف يحتوي على سجل واحد
* كل سجل هو عبارة عن سلسلة من البيانات مفصولة بفواصل (أو محددات أخرى)
* يحتوي السجل الأول على قائمة أسماء الحقول التي تحدد شكل بقية الملف
* أسماء الحقول المطلوبة هي اسم المستخدم، كلمة السر، الاسم الأول، اسم العائلة، البريد الإلكتروني';
$string['uploaduserspreview'] = 'معاينة تحميل المستخدمين';
$string['uploadusersresult'] = 'حمل نتائج مستخدمين';
$string['uploaduser:uploaduserpictures'] = 'تحميل صور المستخدم';
$string['useraccountupdated'] = 'تم تحديث مستخدم';
$string['useraccountuptodate'] = 'المستخدم حتى تاريخه';
$string['userdeleted'] = 'تم حذف المستخدم';
$string['userrenamed'] = 'تم تغير اسم مستخدم';
$string['userscreated'] = 'تم أنشاء مستخدمون';
$string['usersdeleted'] = 'تم خدف المستخدمين';
$string['usersrenamed'] = 'تم تغير اسماء مستخدمين';
$string['usersskipped'] = 'تم تخطي المستخدمين';
$string['usersupdated'] = 'تم تحديث المستخدمين';
$string['usersweakpassword'] = 'المستخدمين الذين لديهم كلمة مرور ضعيفة';
$string['uubulk'] = 'حدد الجزء الأكبر للعمليات';
$string['uubulkall'] = 'كل المستخدمين';
$string['uubulknew'] = 'المستخدمين الجدد';
$string['uubulkupdated'] = 'المستخدمين الذين تم تحديثهم';
$string['uucsvline'] = 'سطر CSV';
$string['uulegacy1role'] = '(الطالب الأصلي) = 1 typeN';
$string['uulegacy2role'] = '(المعلم الأصلي) typeN = 2';
$string['uulegacy3role'] = '(الأصل معلم بدون صلاحية التحرير) typeN = 3';
$string['uunoemailduplicates'] = 'أمنع تكرار البريد الإلكتروني';
$string['uuoptype'] = 'نوع التحميل';
$string['uuoptype_addinc'] = 'إضافة الكل، إلحاق عدد من أسماء المستخدمين إذا لزم الأمر';
$string['uuoptype_addnew'] = 'أضف الجديد فقط، وتخطى المستخدمين الموجودين';
$string['uuoptype_addupdate'] = 'أضف مستخدم جديد وحدث المستخدمين الحاليين';
$string['uuoptype_update'] = 'حدث المستخدمين الحاليين فقط';
$string['uupasswordcron'] = 'ولدت من cron';
$string['uupasswordnew'] = 'كلمة مرور مستخدم جديدة';
$string['uupasswordold'] = 'كلمة مرور المستخدم الحالية';
$string['uustandardusernames'] = 'أسماء المستخدمين المعياري';
$string['uuupdateall'] = 'تجاوز مع الإعدادات الافتراضية و الملف';
$string['uuupdatefromfile'] = 'تخطى بملف';
$string['uuupdatemissing'] = 'ملء المفقود من الملف و الإعدادات الافتراضية';
$string['uuupdatetype'] = 'تفاصيل المستخدم الحالية';
$string['uuusernametemplate'] = 'قالب اسم المستخدم';
