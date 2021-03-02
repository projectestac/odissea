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
 * Strings for component 'tool_filetypes', language 'ar', version '3.8'.
 *
 * @package     tool_filetypes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'إضافة نوع ملف جديد';
$string['corestring'] = 'سلسلة لغة بديلة';
$string['corestring_help'] = 'يمكن استخدام هذا الإعداد لتحديد سلسلة لغة مختلفة من ملف اللغة mimetypes.php الأساسي.
عموماً يجب أن تترك فارغة. بالنسبة للأنواع المخصصة ، استخدم حقل الوصف.';
$string['defaulticon'] = 'الرمز الافتراضي لنوع MIME امتدادات البريد المتعددة';
$string['defaulticon_help'] = 'إذا كانت هناك امتدادات ملفات متعددة لها نفس نوع امتدادات البريد المتعددة، فحدد هذا الخيار لأحد الإضافات بحيث يتم استخدام الرمز الخاص به عند تحديد رمز من نوع امتدادات البريد المتعددة.';
$string['delete_confirmation'] = 'هل أنت متأكد تمامًا من أنك تريد الإزالة . {$a} ؟';
$string['deletea'] = 'احذف {$a}';
$string['deletefiletypes'] = 'حذف نوع الملف';
$string['description'] = 'وصف مخصص';
$string['description_help'] = 'وصف بسيط لنوع الملف ، مثل "Kindle ebook". إذا كان موقعك يدعم لغات متعددة ويستخدم عامل التصفية متعدد اللغات ، فيمكنك إدخال علامات متعددة اللغات في هذا الحقل لتقديم وصف بلغات مختلفة.';
$string['descriptiontype'] = 'نوع الوصف';
$string['descriptiontype_custom'] = 'وصف مخصص المحدد في هذا النموذج';
$string['descriptiontype_default'] = 'الافتراضي (نوع MIME امتدادات البريد المتعددة أو سلسلة اللغة المقابلة إذا كانت متوفرة)';
$string['descriptiontype_help'] = 'هناك ثلاث طرق ممكنة لتحديد الوصف.
* السلوك الافتراضي يستخدم نوع امتدادات البريد المتعددة MIME. إذا كان هناك سلسلة لغة في mimetypes.php المقابلة لهذا النوع امتدادات البريد المتعددة، فسيتم استخدامها ؛ وإلا سيتم عرض نوع امتدادات البريد المتعددة نفسه للمستخدمين.
* يمكنك تحديد وصف مخصص في هذا النموذج.
* يمكنك تحديد اسم سلسلة الوصل في mimetypes.php لاستخدامها بدلاً من نوع امتدادات البريد المتعددة MIME.';
$string['descriptiontype_lang'] = 'سلسلة لغة بديلة (من mimetypes.php)';
$string['displaydescription'] = 'الوصف';
$string['editfiletypes'] = 'تحرير نوع ملف موجود';
$string['emptylist'] = 'لا توجد أنواع ملفات محددة.';
$string['error_addentry'] = 'يجب ألا يحتوي امتداد نوع الملف و الوصف و نوع امتدادات البريد المتعددة و الرمز على سطر فاصل و فاصلة منقوطة.';
$string['error_defaulticon'] = 'تم وضع علامة على امتداد الملف الآخر بنفس نوع امتدادات البريد المتعددة كرمز افتراضي.';
$string['error_extension'] = 'امتداد نوع الملف {$a} موجود بالفعل أو غير صالح.
يجب أن تكون امتدادات الملفات فريدة و لا يجب أن تحتوي على أحرف خاصة.';
$string['error_notfound'] = 'لا يمكن ايجاد نوع الملف بالملحق {$a}.';
$string['extension'] = 'تمديد';
$string['extension_help'] = 'امتداد اسم الملف بدون النقطة ، مثل "mobi"';
$string['groups'] = 'اكتب المجموعات';
$string['groups_help'] = 'قائمة اختيارية بمجموعات أنواع الملفات التي ينتمي إليها هذا النوع. هذه فئات عامة مثل امتدار "المستند" و "الصورة".';
$string['icon'] = 'رمز الملف';
$string['icon_help'] = 'اسم ملف الرمز. يتم أخذ قائمة الرموز من دليل / pix / f داخل تثبيت Moodle. يمكنك إضافة رموز مخصصة إلى هذا المجلد إذا لزم الأمر.';
$string['mimetype'] = 'نوع امتدادات البريد المتعددة';
$string['mimetype_help'] = 'نوع امتدادات البريد المتعددة MIME المرتبط بنوع الملف هذا ، على سبيل المثال "application / x-mobipocket-ebook"';
$string['pluginname'] = 'أنواع الملفات';
$string['privacy:metadata'] = 'البرنامج المساعد File types  لا يخزن أيّ بيانات شخصية.';
$string['revert'] = 'استعادة {$a} إلى إعدادات Moodle الافتراضية';
$string['revert_confirmation'] = 'هل أنت متأكد من رغبتك في الاستعادة . {$a} إلى إعدادات Moodle الافتراضية ، مع تجاهل تغييراتك؟';
$string['revertfiletype'] = 'استعادة نوع الملف';
$string['source'] = 'النوع';
$string['source_custom'] = 'العادة';
$string['source_deleted'] = 'تم الحذف';
$string['source_modified'] = 'تم التعديل';
$string['source_standard'] = 'قياسي';
