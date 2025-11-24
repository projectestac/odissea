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
 * Strings for component 'tool_filetypes', language 'ar', version '4.5'.
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
$string['defaulticon'] = 'الأيقونة الافتراضية لنوع MIME';
$string['defaulticon_help'] = 'إذا كانت هناك امتدادات ملفات متعددة لها نفس نوع MIME، فحدد هذا الخيار لأحد الامتدادات بحيث يتم استعمال أيقونته الخاصة عند تحديد الأيقونة من نوع MIME.';
$string['delete_confirmation'] = 'هل أنت متأكد من رغبتك في إزالة <strong>.{$a}</strong>؟';
$string['deletea'] = 'احذف {$a}';
$string['deletefiletypes'] = 'حذف نوع الملف';
$string['description'] = 'وصف مخصص';
$string['description_help'] = 'وصف بسيط لنوع الملف، مثل "Kindle ebook". إذا كان موقعك يدعم لغات متعددة ويستعمل منقح متعدد اللغات، يمكنك إدخال وسوم متعددة اللغات في هذا الحقل لتقديم وصف بلغات مختلفة.';
$string['descriptiontype'] = 'نوع الوصف';
$string['descriptiontype_custom'] = 'وصف مخصص المحدد في هذا النموذج';
$string['descriptiontype_default'] = 'الافتراضي (نوع MIME أو سلسلة اللغة المقابلة إذا كانت متوافرة)';
$string['descriptiontype_help'] = 'هناك ثلاث طرق ممكنة لتحديد الوصف.

* السلوك الافتراضي يستعمل نوع امتدادات البريد المتعددة MIME. إذا كانت هناك جملة لغة في mimetypes.php تقابل هذا النوع من MIME، فسيتم استعمالها؛ وإلا فسيتم عرض نوع MIME نفسه للمستخدمين.
* يمكنك تحديد وصف مخصص في هذا النموذج.
* يمكنك تحديد اسم جملة اللغة في mimetypes.php لاستعمالها بدلاً من نوع MIME.';
$string['descriptiontype_lang'] = 'سلسلة لغة بديلة (من mimetypes.php)';
$string['displaydescription'] = 'الوصف';
$string['editfiletypes'] = 'تحرير نوع ملف موجود';
$string['emptylist'] = 'لا توجد أنواع ملفات محددة.';
$string['error_addentry'] = 'ينبغي ألا يحتوي امتداد نوع الملف والوصف ونوع MIME والأيقونة على سطر فاصل ولا فاصلة منقوطة.';
$string['error_defaulticon'] = 'تم اعتبار امتداد آخر لملف بنفس نوع MIME بمثابة الأيقونة افتراضية.';
$string['error_extension'] = 'امتداد نوع الملف <strong>{$a}</strong> موجود بالفعل أو غير صالح. يجب أن تكون امتدادات الملفات فريدة وغير محتوية على على أحرف خاصة.';
$string['error_notfound'] = 'لا يمكن ايجاد نوع الملف بالامتداد {$a}.';
$string['extension'] = 'الامتداد';
$string['extension_help'] = 'امتداد اسم الملف بدون النقطة ، مثل "mobi"';
$string['groups'] = 'مجموعات النوع';
$string['groups_help'] = 'قائمة اختيارية بمجموعات أنواع الملفات التي ينتمي إليها هذا النوع. هذه فئات عامة مثل امتداد \'مستند\' و \'صورة\'.';
$string['icon'] = 'أيقونة الملف';
$string['icon_help'] = 'اسم ملف الأيقونة.

 يتم أخذ قائمة الأيقونات من المجلد /pix/f داخل تنصيبك من مودل. يمكنك إضافة أيقونات مخصصة إلى هذا المجلد إذا لزم الأمر.';
$string['mimetype'] = 'نوع MIME';
$string['mimetype_help'] = 'نوع MIME المرتبط بنوع الملف هذا، على سبيل المثال \'application/x-mobipocket-ebook\\';
$string['pluginname'] = 'أنواع الملفات';
$string['privacy:metadata'] = 'إن ملحق أنواع الملفات لا يخزن أي بيانات شخصية.';
$string['revert'] = 'استعادة {$a} إلى إعدادات Moodle الافتراضية';
$string['revert_confirmation'] = 'هل أنت متأكد من رغبتك في استعادة <strong>.{$a}</strong> إلى إعدادات مودل الافتراضية، مع تجاهل تغييراتك؟';
$string['revertfiletype'] = 'استعادة نوع الملف';
$string['source'] = 'النوع';
$string['source_custom'] = 'تخصيص';
$string['source_deleted'] = 'تم الحذف';
$string['source_modified'] = 'تم التعديل';
$string['source_standard'] = 'قياسي';
