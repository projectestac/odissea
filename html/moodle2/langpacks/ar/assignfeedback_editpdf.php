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
 * Strings for component 'assignfeedback_editpdf', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   assignfeedback_editpdf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'أضف إلى القائمة السريعة';
$string['annotationcolour'] = 'لون التعليق';
$string['black'] = 'أسود';
$string['blue'] = 'أزرق';
$string['cannotopenpdf'] = 'لا يمكن فتح ملف PDF. قد يكون الملف تالفًا أو بتنسيق غير مدعوم.';
$string['clear'] = 'واضح';
$string['colourpicker'] = 'منتقي الألوان';
$string['command'] = 'أمر:';
$string['comment'] = 'تعليقات';
$string['commentcolour'] = 'لون التعليق';
$string['commentcontextmenu'] = 'قائمة سياق التعليق';
$string['commentindex'] = 'فهرس التعليقات';
$string['commentlabel'] = '{$a->pnum}.{$a->cnum}';
$string['couldnotsavepage'] = 'لا يمكن حفظ الصفحة {$a}';
$string['currentstamp'] = 'ختم';
$string['default'] = 'مُفعّل تلقائياً';
$string['default_help'] = 'إذا تم تفعيل هذا الخيار فإن طريقة اتغذية الراجعة هذه ستكون مفُعّلة افتراضياً لكل المهمات الجديدة.';
$string['deleteannotation'] = 'حذف التعليق التوضيحي';
$string['deletecomment'] = 'امسح التعليق';
$string['deletefeedback'] = 'حذف ردود الفعل بصيغة  PDF';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'تحميل الملاحظات بصيغة PDF';
$string['draftchangessaved'] = 'تم حفظ مشروع التعليقات التوضيحية';
$string['drag'] = 'اسحب';
$string['editpdf'] = 'التعليق على PDF';
$string['editpdf_help'] = 'تعلق الطلاب على الإرسالات مباشرة في المستعرض .. و ينتج عن هذا ملف PDF قابل للتحرير .';
$string['enabled'] = 'التعليق على PDF';
$string['enabled_help'] = 'في حالة التمكين ، سيكون المعلم قادرًا على إنشاء ملفات PDF مشروحة عند تحديد المهام. يتيح ذلك للمعلم إضافة التعليقات و الرسم و الأختام مباشرة فوق عمل الطلاب.
يتم التعليق التوضيحي في المستعرض و لا يلزم وجود برامج إضافية.';
$string['errorgenerateimage'] = 'حدث خطأ أثناء إنشاء صورة باستخدام ghostscript .. و معلومات تصحيح الأخطاء: {$a}';
$string['errorpdfpage'] = 'حدث خطأ أثناء إنشاء هذه الصفحة.';
$string['expcolcomments'] = 'توسيع / طي جميع التعليقات';
$string['filter'] = 'تصفية التعليقات ...';
$string['generatefeedback'] = 'توليد التعليقات بصيغة  PDF';
$string['generatingpdf'] = 'توليد ملف PDF ...';
$string['gotopage'] = 'الذهاب لصفحة';
$string['green'] = 'أخضر';
$string['gsimage'] = 'اختبار الصورة بصيغة Ghostscript';
$string['highlight'] = 'تسليط الضوء';
$string['jsrequired'] = 'جافا سكريبت مطلوبة للتعليق على  PDF. يرجى تمكين JavaScript في متصفحك لاستخدام هذه الميزة.';
$string['launcheditor'] = 'بدء تشغيل محرر PDF ...';
$string['line'] = 'خط';
$string['loadingeditor'] = 'تحميل محرر PDF';
$string['navigatenext'] = 'الصفحة التالية';
$string['navigateprevious'] = 'الصفحة السابقة';
$string['output'] = 'انتاج:';
$string['oval'] = 'بيضاوي';
$string['pagenumber'] = 'صفحة رقم {$a}';
$string['pagexofy'] = 'صفحة رقم {$a} من مجموع صفحات {$a->total}';
$string['partialwarning'] = 'لا يمكن الوصول إلى بعض الملفات الموجودة في هذا التقديم إلا عن طريق التنزيل المباشر.';
$string['pathtogspathdesc'] = 'يرجى ملاحظة أن التعليقات التوضيحية بتنسيق PDF تتطلب تعيين المسار إلى ghostscript في {$a}.';
$string['pen'] = 'قلم';
$string['pluginname'] = 'التعليق على PDF';
$string['preparesubmissionsforannotation'] = 'إعداد التقديمات للتعليق';
$string['privacy:metadata:colourpurpose'] = 'لوّن التعليق أو الشرح';
$string['privacy:metadata:conversionpurpose'] = 'يتم تحويل الملفات إلى ملفات PDF للسماح بالتعليقات التوضيحية.';
$string['privacy:metadata:filepurpose'] = 'يخزن PDF المشروح مع ردود الفعل للمستخدم.';
$string['privacy:metadata:rawtextpurpose'] = 'يخزن النص الأصلي في البيانات السريعة.';
$string['privacy:metadata:tablepurpose'] = 'يخزّن المعلمين المحددين تعليقات قائمة سريعة';
$string['privacy:metadata:userid'] = 'معرف المستخدم';
$string['privacy:path'] = 'ردود الفعل الشعبي';
$string['rectangle'] = 'مستطيل';
$string['red'] = 'أحمر';
$string['result'] = 'النتيجة:';
$string['searchcomments'] = 'البحث في التعليقات';
$string['select'] = 'اختر';
$string['stamp'] = 'الختم';
$string['stamppicker'] = 'منتقي الطوابع';
$string['stamps'] = 'طوابع بريدية';
$string['stampsdesc'] = 'يجب أن تكون الطوابع ملفات صور (الحجم الموصى به: 40 × 40). يمكن استخدام هذه الصور مع أداة الختم للتعليق على PDF.';
$string['test_doesnotexist'] = 'يشير مسار ghostscript إلى ملف غير موجود';
$string['test_empty'] = 'مسار ghostscript فارغ - يرجى إدخال المسار الصحيح';
$string['testgs'] = 'اختبار مسار المخطط';
$string['test_isdir'] = 'يشير مسار ghostscript إلى مجلد ، يرجى تضمين برنامج ghostscript في المسار الذي تحدده';
$string['test_notestfile'] = 'اختبار PDF مفقود';
$string['test_notexecutable'] = 'يشير ghostscript إلى ملف غير قابل للتنفيذ';
$string['test_ok'] = 'يبدو أن مسار ghostscript على ما يرام - يرجى التحقق من أنه يمكنك رؤية الرسالة في الصورة أدناه';
$string['tool'] = 'أداة';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'عرض تعليقات على PDF  ...';
$string['white'] = 'أبيض';
$string['yellow'] = 'أصفر';
