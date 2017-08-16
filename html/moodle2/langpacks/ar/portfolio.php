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
 * Strings for component 'portfolio', language 'ar', branch 'MOODLE_32_STABLE'
 *
 * @package   portfolio
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeportfolios'] = 'المحفظات المتوفرة';
$string['addalltoportfolio'] = 'تصدير الكل إلى المحفظة';
$string['addnewportfolio'] = 'أضف محفظة جديدة';
$string['addtoportfolio'] = 'صدر إلى محفظة';
$string['availableformats'] = 'تنسيقات التصدير المتوفرة';
$string['callbackclassinvalid'] = 'طبقة رد النداء المحددة غير صالحة أو ليست جزءا من التسلسل الهرمي portfolio_caller';
$string['callercouldnotpackage'] = 'فشل لحزم البيانات احتياطيا للتصدير: كان الخطأ الأصلي {$a}';
$string['cannotsetvisible'] = 'لا يمكن  تغيير هذا الخيار إلى مرئي - البرنامج المساعد تم تعطيله تماماً بسبب الإعدادت الخاطئة';
$string['commonportfoliosettings'] = 'الإعدادات العامة للمحفظة';
$string['commonsettingsdesc'] = '<p> تعتمد مدة  نقل إذا ما كانت "متوسطة" أو "عالية" على ما إذا كان المستخدم قادر على الانتظار لاستكمال النقل أم لا. </ P> <P> إذا كانت مدة النقل \'معتدل "فستحدث على الفور دون إذن المستخدم ، أما إذا كانت المدة " معتدل "و" عالي "يعني أن المستخدم يُمنح الخيار لكن يتم التحذير من أن الأمر قد يستغرق بعض الوقت. </ P> <P> وبالإضافة إلى ذلك، بعض الإضافات  قد تتجاهل هذا الخيار تماماً، وإجبار جميع عمليات النقل هذه في قائمة الانتظار. </ P>';
$string['configexport'] = 'تهيئة البيانات التي تم تصديرها';
$string['configplugin'] = 'تهيئة البرنامج المساعد الحافظة';
$string['configure'] = 'تهيئة';
$string['confirmcancel'] = 'هل أنت متأكد من رغبتك بإلغاء هذا التصدير؟';
$string['confirmexport'] = 'الرجاء تأكيد هذا التصدير';
$string['confirmsummary'] = 'ملخص لتصديرك';
$string['continuetoportfolio'] = 'استمر إلى حافظتك';
$string['deleteportfolio'] = 'حذف أنموذج المحفظة';
$string['destination'] = 'الوجهة';
$string['disabled'] = 'عذراً، ولكن لم يتم تمكين تصدير المحفظة في هذا الموقع';
$string['disabledinstance'] = 'معطل';
$string['displayarea'] = 'منطقة التصدير';
$string['displayexpiry'] = 'نقل وقت الانتهاء';
$string['displayinfo'] = 'معلومات التصدير';
$string['dontwait'] = 'لا تنتظر';
$string['enabled'] = 'فعل محافظ';
$string['enableddesc'] = 'إذا تم التفعيل، يمكن للمستخدمين تصدير المحتوى، مثل المشاركات في المنتدى وإجابات التكاليف، إلى المحافظ الخارجية أو صفحات HTML.';
$string['err_uniquename'] = 'يجب أن يكون اسم المحفظة فريد من نوعه (لكل برنامج مساعد)';
$string['exportalreadyfinished'] = 'تم اكتمال تصدير المحفظة!';
$string['exportalreadyfinisheddesc'] = 'تم اكتمال تصدير المحفظة!';
$string['exportcomplete'] = 'تم اكتمال تصدير المحفظة!';
$string['exportedpreviously'] = 'التصديرات السابقة';
$string['exportexpired'] = 'انتهت صلاحية  تصديرالمحفظة';
$string['exportexpireddesc'] = 'حاولت تكرار تصدير بعض المعلومات، أو بدء تصدير فارغ. للقيام بذلك بشكل صحيح يجب أن تذهب مرة أخرى إلى الموقع الأصلي والبدء من جديد. هذا يحدث في بعض الأحيان إذا كنت تستخدم زر الرجوع بعد اكتمال التصدير، أو عن طريق النقر على ارتباط لعنوان إلكتروني غير صالح.';
$string['exporting'] = 'التصدير إلى محفظة';
$string['exportingcontentfrom'] = 'تصدير المحتوى من {$a}';
$string['exportingcontentto'] = 'تصدير المحتوى إلى {$a}';
$string['exportqueued'] = 'تم اصطفاف تصدير المحفظة  بنجاح لنقلها';
$string['exportqueuedforced'] = 'تم اصطفاف تصدير المحفظة  بنجاح لنقلها (فرض النظام البعيد نقل قائمة الانتظار)';
$string['failedtosendpackage'] = 'فشل إرسال البيانات إلى نظام المحفظة المختارة: كان الخطأ الأصلي{$a}';
$string['filedenied'] = 'تم رفض الوصول إلى هذا الملف';
$string['filenotfound'] = 'لم يتم العثور على الملف';
$string['fileoutputnotsupported'] = 'إعادة كتابة الملف غير مدعوم بهذا الشكل';
$string['format_document'] = 'مستند';
$string['format_file'] = 'ملف';
$string['format_image'] = 'صورة';
$string['format_leap2a'] = 'تصميم المحفظة هو  Leap2A';
$string['format_mbkp'] = 'تنسيق النسخ الاحتياطي لمودل';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'أتش تي إم إل';
$string['format_presentation'] = 'عرض';
$string['format_richhtml'] = 'HTML مع المرفقات';
$string['format_spreadsheet'] = 'جداول';
$string['format_text'] = 'نص';
$string['format_video'] = 'فيديو';
$string['highdbsizethresholddesc'] = 'أقصى عدد لسجلات قاعدة البيانات وأي عدد أعلى منها ستستهلك';
$string['instancedeleted'] = 'تم حذف المحفظة بنجاح';
$string['instancenotdelete'] = 'فشل حذف المحفظة';
$string['instancenotsaved'] = 'فشل حفظ المحفظة';
$string['instancesaved'] = 'تم حفظ المحفظة بنجاح';
$string['manageportfolios'] = 'إدارة محافظ';
$string['manageyourportfolios'] = 'قم بإدارة محافظ الخاصة بك';
$string['multipleinstancesdisallowed'] = 'محاولة إنشاء نسخة أخرى من إضافة تمنع إنشاء عدة نسخ ({$a}).';
$string['noinstanceyet'] = 'لم يتم اختياره بعد';
$string['nologs'] = 'لا يوجد سجلات للقيام بعرضها';
$string['notyetselected'] = 'لم يتم اختياره بعد';
$string['off'] = 'ممكن/مفعل ولكنة مخفي';
$string['on'] = 'ممكن/مفعل وظاهر';
$string['portfolio'] = 'محفظة';
$string['portfolios'] = 'محافظ';
$string['returntowhereyouwere'] = 'العودة إلى حيث كنت';
$string['save'] = 'حفظ';
$string['selectedformat'] = 'تنسيق التصدير الذي تم اختياره';
$string['transfertime'] = 'وقت التحويل';
$string['wait'] = 'انتظر';
