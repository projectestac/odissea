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
 * Strings for component 'tool_uploaduser', language 'ar', version '4.5'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'اسمح بالحذف';
$string['allowrenames'] = 'السماح بإعادة التسمية';
$string['allowsuspends'] = 'السماح بتعليق وتفعيل الحسابات';
$string['assignedsysrole'] = 'دور النظام المُعيَّن {$a}';
$string['clidefault'] = 'الافتراضي:';
$string['clierrorargument'] = 'قيمة المعامل --{$a->name} غير صحيحة. القيم المسموح بها هي: {$a->values}';
$string['clifile'] = 'المسار إلى ملف CSV ذي بيانات المستخدم. مطلوب.';
$string['clifilenotreadable'] = 'الملف {$a} غير موجود أو غير قابل للقراءة.';
$string['clihelp'] = 'طباعة هذه التعليمات.';
$string['climissingargument'] = 'المعامل --{$a} مطلوب حتماً';
$string['clititle'] = 'أداة رفع المستخدم عبر سطر الأوامر.';
$string['clivalidationerror'] = 'خطأ عند التحقق:';
$string['csvdelimiter'] = 'فاصل CSV';
$string['defaultvalues'] = 'القيم الافتراضية';
$string['deleteerrors'] = 'إحذف الأخطاء';
$string['duplicateemail'] = 'تم الكشف عن مستخدمين متعددين للبريد الالكتروني {$a}';
$string['encoding'] = 'الترميز';
$string['errormnetadd'] = 'لا يمكن إضافة المستخدمين عن بعد';
$string['errorprefix'] = 'خطأ:';
$string['errors'] = 'الأخطاء';
$string['examplecsv'] = 'ملف نصي كنموذج';
$string['examplecsv_help'] = 'لاستعمال الملف النصي النموذجي، قم بتنزيله ثم افتحه بمحرر نصوص أو محرر جداول. أترك السطر الأول كما هو، ثم حرر السطور (السجلات) اللاحقة لتضيف بيانات المستخدمين لديك، وأضف المزيد من السطور عند الحاجة. إحفظ الملف بصيغة CSV ثم إرفعه.

يمكن استعمال الملف النصي النموذجي أيضاً لأغراض الفحص، نظراً لكونك قادر على استعراض بياناتك واختيار إلغاء الإجراء قبل إنشاء حسابات المستخدمين.';
$string['infoprefix'] = 'معلومات:';
$string['invalidtheme'] = 'القالب "{$a}" غير مثبت وسيتم تجاهله.';
$string['invalidupdatetype'] = 'لا يمكن تحديد هذا الخيار بنوع التحميل المختار.';
$string['invaliduserdata'] = 'تم اكتشاف بيانات غير صالحة للمستخدم {$a} وتم تنظيفها تلقائياً.';
$string['invaliduserdatavalues'] = 'تم العثور على بيانات غير صحيحة ({$a->values}) للمستخدم {$a->username}. تم تصحيح هذه البيانات أو حذفها.';
$string['linex'] = 'السطر {$a}';
$string['matchemail'] = 'المطابقة تبعًا للبريد الالكتروني';
$string['nochanges'] = 'لا يوجد تغير';
$string['notheme'] = 'لا يوجد قالب محدد لهذا المستخدم.';
$string['pluginname'] = 'رفع المستخدمين';
$string['privacy:metadata'] = 'إن ملحق رفع المستخدمين لا يخزن أي بيانات شخصية.';
$string['renameerrors'] = 'أخطاء إعادة التسمية';
$string['requiredtemplate'] = 'مطلوب. يمكنك استعمال صياغة المظهر هنا (%l = lastname, %f = firstname, %u = username). أنظر التعليمات للمزيد من التفاصيل والأمثلة.';
$string['rowpreviewnum'] = 'استعراض الصفوف';
$string['unassignedsysrole'] = 'دور النظام غير المعيّن {$a}';
$string['uploadpicture_baduserfield'] = 'سمة المستخدم المحددة غير صالحة. من فضلك، حاول مرة أخرى.';
$string['uploadpicture_cannotmovezip'] = 'تعذر نقل الملف المضغوط إلى مجلد مؤقت.';
$string['uploadpicture_cannotprocessdir'] = 'لا يمكن معالجة فك ضغط الملفات.';
$string['uploadpicture_cannotsave'] = 'لا يمكن حفظ صورة للمستخدم {$a}. تحقق من ملف الصورة الأصلي .';
$string['uploadpicture_cannotunzip'] = 'لا يمكن فك ملف الصور المضغوط.';
$string['uploadpicture_invalidfilename'] = 'ملف الصورة {$a} يحتوي على أحرف غير صالحة في اسمه. سيتم تخطيه.';
$string['uploadpicture_overwrite'] = 'أتريد استبدال صور المستخدمين إن كانت موجودة؟';
$string['uploadpicture_userfield'] = 'سمة المستخدم المستعملة لمطابقة الصورة:';
$string['uploadpicture_usernotfound'] = 'المستخدم ذي \'{$a->userfield}\' بقيمة \'{$a->uservalue}\' غير موجود. سيتم تخطيه.';
$string['uploadpicture_userskipped'] = 'يتم تخطي المستخدم {$a} (لديه صورة مسبقاً).';
$string['uploadpicture_userupdated'] = 'تم تحديث صورة المستخدم {$a}.';
$string['uploadpictures'] = 'رفع صور المستخدمين';
$string['uploadpictures_help'] = 'يمكن تحميل صور المستخدمين بملف مضغوط zip يحتوي ملفات الصور. ينبغي تسمية ملفات الصور بشكل: سمة المستخدم المعني.الامتداد، على سبيل المثال user1234.jpg تمثل صورة المستخدم ذي اسم المستخدم user1234.';
$string['uploaduser:uploaduserpictures'] = 'رفع صور المستخدمين';
$string['uploadusers'] = 'رفع المستخدمين';
$string['uploadusers_help'] = 'يمكن رفع المستخدمين (واختيارياً ضمهم إلى المقررات الدراسية) عن طريق ملف نصي. تنسيق الملف ينبغي أن يكون على النحو التالي:

* كل سطر من الملف يحتوي على سجل واحد
* كل سجل هو عبارة عن سلسلة من البيانات مفصولة بفوارز (أو محددات أخرى)
* يحتوي السجل الأول على قائمة أسماء الحقول التي تحدد شكل بقية الملف
* أسماء الحقول المطلوبة هي username، password، firstname، lastname، email';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'استعراض رفع المستخدمين';
$string['uploadusersresult'] = 'نتائج رفع المستخدمين';
$string['useraccountupdated'] = 'تم تحديث المستخدم';
$string['useraccountuptodate'] = 'المستخدم بأحدث حال';
$string['userdeleted'] = 'تم حذف المستخدم';
$string['userrenamed'] = 'تم تغير اسم المستخدم';
$string['userscreated'] = 'تم إنشاء المستخدمين';
$string['usersdeleted'] = 'تم حذف المستخدمين';
$string['usersrenamed'] = 'تمت إعادة تسمية المستخدمين';
$string['usersskipped'] = 'تم تخطي المستخدمين';
$string['usersupdated'] = 'تم تحديث المستخدمين';
$string['usersweakpassword'] = 'المستخدمون ذوو كلمة المرور الضعيفة';
$string['userthemesnotallowed'] = 'لم يتم تمكين القوالب على مستوى المستخدم، وبالتالي سيتم تجاهل ما يتضمنه الملف المرفوع منها.';
$string['uubulk'] = 'إختر لإجراءات بالجملة على المستخدمين';
$string['uubulkall'] = 'كل المستخدمين';
$string['uubulknew'] = 'المستخدمون الجدد';
$string['uubulkupdated'] = 'المستخدمون الذين تم تحديثهم';
$string['uucsvline'] = 'سطر CSV';
$string['uulegacy1role'] = '(الطالب الأصلي) = 1 typeN';
$string['uulegacy2role'] = '(المعلم الأصلي) typeN = 2';
$string['uulegacy3role'] = '(<strong>أصلي</strong> معلم بلا صلاحية التحرير) typeN = 3';
$string['uunoemailduplicates'] = 'امنع تكرار البريد الإلكتروني';
$string['uuoptype'] = 'نوع الرفع';
$string['uuoptype_addinc'] = 'إضافة الكل، ألحق رقماً بأسماء المستخدمين إذا لزم الأمر';
$string['uuoptype_addnew'] = 'إضافة الجديد فقط، تخطى المستخدمين الموجودين';
$string['uuoptype_addupdate'] = 'إضافة الجدد وتحديث المستخدمين الحاليين';
$string['uuoptype_update'] = 'تحديث المستخدمين الحاليين فقط';
$string['uupasswordcron'] = 'تم توليدها في مشغل الوظائف الدورية';
$string['uupasswordnew'] = 'كلمة مرور المستخدم الجديدة';
$string['uupasswordold'] = 'كلمة مرور المستخدم الحالية';
$string['uustandardusernames'] = 'جعل أسماء المستخدمين قياسية';
$string['uuupdateall'] = 'تجاوز مستعملاً الإعدادات الافتراضية والملف';
$string['uuupdatefromfile'] = 'تجاوز بالملف';
$string['uuupdatemissing'] = 'إملأ المفقود من الملف والإعدادات الافتراضية';
$string['uuupdatetype'] = 'تفاصيل المستخدم الحالية';
$string['uuusernametemplate'] = 'مظهر اسم المستخدم';
$string['warningprefix'] = 'تحذير:';
