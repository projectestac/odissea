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
 * Strings for component 'files', language 'ar', version '4.5'.
 *
 * @package     files
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contenthash'] = 'الترميز الرقمي الفريد للمحتوى';
$string['eventfileaddedtodraftarea'] = 'ملف تمت إضافته إلى منطقة المسودات';
$string['eventfiledeletedfromdraftarea'] = 'تم حذف الملف من منطقة المسودات';
$string['privacy:metadata:core_userkey'] = 'يتم توليد رمز شخصي وخزنه. هذا الرمز يمكن استعماله للوصول إلى ملفات مودل دون حاجة منك لتسجيل الدخول';
$string['privacy:metadata:file_conversion:usermodified'] = 'المستخدم الذي بدأ تحويل الملف';
$string['privacy:metadata:file_conversions'] = 'سجل تحويلات الملف المجراة من قبل المستخدم';
$string['privacy:metadata:files'] = 'سِجل للملفات المرفوعة أو المشارَكة من قبل المستخدمين';
$string['privacy:metadata:files:author'] = 'مؤلف محتويات الملف';
$string['privacy:metadata:files:contenthash'] = 'ترميز رقمي فريد لمحتويات الملف';
$string['privacy:metadata:files:filename'] = 'اسم الملف ضمن منطقة الملفات الخاصة به';
$string['privacy:metadata:files:filepath'] = 'مسار الملف ضمن منطقة الملفات الخاصة به';
$string['privacy:metadata:files:filesize'] = 'حجم الملف';
$string['privacy:metadata:files:license'] = 'رخصة محتويات الملف';
$string['privacy:metadata:files:mimetype'] = 'نوع MIME للملف';
$string['privacy:metadata:files:source'] = 'مصدر الملف';
$string['privacy:metadata:files:timecreated'] = 'وقت إنشاء الملف';
$string['privacy:metadata:files:timemodified'] = 'وقت التعديل الأخير للملف';
$string['privacy:metadata:files:userid'] = 'المستخدم الذي أنشأ الملف';
$string['redactor'] = 'تنقيح الملف';
$string['redactor:exifremover'] = 'مزيل EXIF';
$string['redactor:exifremover:emptyremovetags'] = 'وسوم الإزالة لا يمكن تركها فارغة!';
$string['redactor:exifremover:enabled'] = 'تمكين مزيل EXIF';
$string['redactor:exifremover:enabled_desc'] = 'إفتراضيًا، مزيل EXIF يدعم فقط ملفات JPG باستعمال PHP GD، أو أداة ExifTool إذا كانت مهيئة.
إن استعمال PHP GD لهذا الغرض يمكن أن يخفض جودة الصورة.

لتحسين أداء مزيل EXIF، يرجى تهيئة إعدادات أداة ExifTool أدناه.

يمكن العثور على مزيد من المعلومات عن تنصيب ExifTool في {$a->link}';
$string['redactor:exifremover:failedprocessexiftool'] = 'التنقيح قد فشل: فشلت معالجة الملف بأداة ExifTool!';
$string['redactor:exifremover:failedprocessgd'] = 'التنقيح قد فشل: فشلت معالجة الملف بأداة PHP gd!';
$string['redactor:exifremover:heading'] = 'ExifTool';
$string['redactor:exifremover:mimetype'] = 'أنواع MIME المدعومة';
$string['redactor:exifremover:mimetype_desc'] = 'لإضافة أنواع MIME جديدة، تأكد من أنها مضمنة في <a href="./tool/filetypes/index.php">أنواع الملفات</a>.';
$string['redactor:exifremover:removetags'] = 'وسوم EXIF المزمع إزالتها';
$string['redactor:exifremover:removetags_desc'] = 'وسوم EXIF التي بحاجة إلى إزالة.';
$string['redactor:exifremover:tag:all'] = 'الكل';
$string['redactor:exifremover:tag:gps'] = 'فقط GPS';
$string['redactor:exifremover:tooldoesnotexist'] = 'التنقيح قد فشل: أداة ExifTool غير موجودة!';
$string['redactor:exifremover:toolpath'] = 'المسار إلى ExifTool';
$string['redactor:exifremover:toolpath_desc'] = 'لاستعمال ExifTool، يرجى توفير المسار المؤدي إلى الملف التنفيذي لـ.
في أنظمة يونكس/لينكس، عادة ما يكون المسار /usr/bin/exiftool.';
