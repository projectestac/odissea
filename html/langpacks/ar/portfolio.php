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
 * Strings for component 'portfolio', language 'ar', version '3.11'.
 *
 * @package     portfolio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = 'تفصيل التصدير النشط';
$string['activeportfolios'] = 'المحفظات المتوفرة';
$string['addalltoportfolio'] = 'تصدير الكل إلى المحفظة';
$string['addnewportfolio'] = 'إضافة محفظة جديدة';
$string['addtoportfolio'] = 'التصدير إلى محفظة';
$string['alreadyalt'] = 'قيد التصدير حالياً - لطفاً، أنقر هنا لتفصيل هذا النقل';
$string['alreadyexporting'] = 'لديك سلفاً محفظة تصدير نشطة في هذه الجلسة. قبل المتابعة، إما أن تُكمل هذا التصدير، أو تلغيه. هل ترغب في متابعته؟ (لا معناها إلغاؤه)';
$string['availableformats'] = 'تنسيقات التصدير المتوفرة';
$string['callbackclassinvalid'] = 'طبقة رد النداء المحددة غير صالحة أو ليست جزءا من التسلسل الهرمي portfolio_caller';
$string['callercouldnotpackage'] = 'فشل في رزم بياناتك للتصدير: كان الخطأ الأصلي {$a}';
$string['cannotsetvisible'] = 'لا يمكن تغيير هذا الخيار إلى مرئي - الملحق تم تعطيله تماماً بسبب الإعدادت الخاطئة.';
$string['commonportfoliosettings'] = 'الإعدادات العامة للمحفظة';
$string['commonsettingsdesc'] = '<p>تغير مدة النقل فيما إذا كانت \'معتدلة\' أو \'عالية\' على مدى قدرة المستخدم على الانتظار لاستكمالها أم لا. </P> <P> الأحجام حتى عتبة مدة النقل \'معتدلة\' ستحدث على الفور دون السؤال من المستخدم، أما إذا كانت المدة \'عالية\' فمعناها أن المستخدم سيُمنح الخيار لكن مع تنبيهه بأن الأمر قد يستغرق بعض الوقت. </P><P> فضلاً عن ذلك، بعض إضافات المحافظ قد تتجاهل هذا الخيار تماماً، وتفرض وضع كل عمليات النقل في طابور الانتظار. </P>';
$string['configexport'] = 'تهيئة البيانات التي تم تصديرها';
$string['configplugin'] = 'تهيئة ملحق الحافظة';
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
$string['enabled'] = 'تفعيل المَحَافظ';
$string['enableddesc'] = 'عند تمكينه، سيُتاح للمستخدمين تصدير المحتوى، مثل منشورات المنتديات وتسليمات الواجبات إلى المحافظ الخارجية أو صفحات HTML.';
$string['err_uniquename'] = 'يجب أن يكون اسم المحفظة فريد من نوعه (لكل برنامج مساعد)';
$string['exportalreadyfinished'] = 'تم اكتمال تصدير المحفظة!';
$string['exportalreadyfinisheddesc'] = 'تم اكتمال تصدير المحفظة!';
$string['exportcomplete'] = 'تم اكتمال تصدير المحفظة!';
$string['exportedpreviously'] = 'التصديرات السابقة';
$string['exportexceptionnoexporter'] = 'وقع خطأ مُعرَّفه portfolio_export_exception ضمن الجلسة النشطة ولكن بدون مكون تصدير';
$string['exportexpired'] = 'انتهت صلاحية  تصديرالمحفظة';
$string['exportexpireddesc'] = 'حاولت تكرار تصدير بعض المعلومات، أو بدء تصدير فارغ. للقيام بذلك بشكل صحيح يجب أن تذهب مرة أخرى إلى الموقع الأصلي والبدء من جديد. هذا يحدث في بعض الأحيان إذا كنت تستخدم زر الرجوع بعد اكتمال التصدير، أو عن طريق النقر على ارتباط لعنوان إلكتروني غير صالح.';
$string['exporting'] = 'التصدير إلى محفظة';
$string['exportingcontentfrom'] = 'تصدير المحتوى من {$a}';
$string['exportingcontentto'] = 'تصدير المحتوى إلى {$a}';
$string['exportqueued'] = 'تم اصطفاف تصدير المحفظة  بنجاح لنقلها';
$string['exportqueuedforced'] = 'تم اصطفاف تصدير المحفظة  بنجاح لنقلها (فرض النظام البعيد نقل قائمة الانتظار)';
$string['failedtopackage'] = 'تعذر العثور على الملفات لرزمها';
$string['failedtosendpackage'] = 'فشل إرسال البيانات إلى نظام المحفظة المختارة: كان الخطأ الأصلي{$a}';
$string['filedenied'] = 'تم رفض الوصول إلى هذا الملف';
$string['filenotfound'] = 'لم يتم العثور على الملف';
$string['fileoutputnotsupported'] = 'إعادة كتابة الملف غير مدعوم بهذا الشكل';
$string['format_document'] = 'مستند';
$string['format_file'] = 'ملف';
$string['format_image'] = 'صورة';
$string['format_leap2a'] = 'تصميم المحفظة هو  Leap2A';
$string['format_mbkp'] = 'تنسيق الحفظ الاحتياطي لمودل';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'عرض';
$string['format_richhtml'] = 'HTML مع المرفقات';
$string['format_spreadsheet'] = 'جداول';
$string['format_text'] = 'نص';
$string['format_video'] = 'فيديو';
$string['highdbsizethreshold'] = 'معدل نقل عالٍ في قاعدة البيانات';
$string['highdbsizethresholddesc'] = 'أقصى عدد لسجلات قاعدة البيانات وأي عدد أعلى منها ستستهلك';
$string['highfilesizethreshold'] = 'معدل نقل عالٍ في حجم الملفات';
$string['highfilesizethresholddesc'] = 'حجوم الملفات الأعلى من هذه العتبة ستُعتبر متطلبة لقدر كبير من وقت النقل';
$string['insanebody'] = 'مرحباً! أنت تتلقى هذا الرسالة باعتبارك المشرف على {$a->sitename}.

بعض عينات إضافات المحافظ قد تم تعطيلها تلقائياً بسبب أخطاء في إعدادات التهيئة. هذا معناه أن المستخدمين لا يستطيعون حالياً تصدير المحتوى إلى هذه المحافظ.

قائمة عينات ملاحق المحافظ التي تم تعطيلها هي:

{$a->textlist}

هذا ينبغي تصحيحه في أقرب وقت ممكن عبر زيارة {$a->fixurl}.';
$string['insanebodyhtml'] = '<p>مرحباً! أنت تتلقى هذا الرسالة باعتبارك المشرف على {$a->sitename}.</p>
<p>بعض عينات إضافات المحافظ قد تم تعطيلها تلقائياً بسبب أخطاء في إعدادات التهيئة. هذا معناه أن المستخدمين لا يستطيعون حالياً تصدير المحتوى إلى هذه المحافظ.</p>
<p>قائمة عينات إضافات المحافظ التي تم تعطيلها هي:</p>
{$a->textlist}
<p>هذا ينبغي تصحيحه في أقرب وقت ممكن عبر زيارة <a href="{$a->fixurl}">صفحات تهيئة المحفظة</a>.</p>';
$string['insanebodysmall'] = 'مرحباً! أنت تتلقى هذا الرسالة باعتبارك المشرف على {$a->sitename}.بعض عينات إضافات المحافظ قد تم تعطيلها تلقائياً بسبب أخطاء في إعدادات التهيئة. هذا معناه أن المستخدمين لا يستطيعون حالياً تصدير المحتوى إلى هذه المحافظ.
هذا ينبغي تصحيحه في أقرب وقت ممكن عبر زيارة {$a->fixurl}.';
$string['insanesubject'] = 'بعض عينات إضافات المحافظ قد تم تعطيلها تلقائياً';
$string['instancedeleted'] = 'تم حذف المحفظة بنجاح';
$string['instanceismisconfigured'] = 'عينة ملحق المحفظة مهيأة بشكل خاطئ؛ يجري تخطيها. الخطأ كان: {$a}';
$string['instancenotdelete'] = 'فشل حذف المحفظة';
$string['instancenotsaved'] = 'فشل حفظ المحفظة';
$string['instancesaved'] = 'تم حفظ المحفظة بنجاح';
$string['intro'] = 'المحتوى الذي أنشأته، مثل تسليمات الواجبات، منشورات المنتديات، إدخالات المدونات، يمكن تصديرها إلى محفظة أو تنزيلها.<br>
اي محفظة لا ترغب باستعمالها يمكن إخفاؤها بحيث لا يتم إدراجها كأحد وجهات تصدير المحتوى.';
$string['invalidaddformat'] = 'تنسيق إضافة خاطئ موجه إلى portfolio_add_button. ({$a}) ينبغي أن يكون واحداً من PORTFOLIO_ADD_XXX';
$string['invalidbuttonproperty'] = 'تعذر العثور على الخاصية ({$a} لـ portfolio_button';
$string['invalidconfigproperty'] = 'تعذر العثور على خاصية التهيئة ({$a->property} لـ {$a->class})';
$string['invalidexportproperty'] = 'تعذر العثور على خاصية تهيئة التصدير ({$a->property} لـ {$a->class})';
$string['invalidfileareaargs'] = 'تم تمرير عوامل خاطئة لمساحة ملف إلى set_file_and_format_data - ينبغي أن تتضمن contextid، component، filearea و itemid';
$string['invalidformat'] = 'شيء ما يقوم بتصدير صيغة خاطئة، {$a}';
$string['invalidinstance'] = 'تعذر العثور على عينة المحفظة هذه';
$string['invalidpreparepackagefile'] = 'استدعاء خاطئ لـ prepare_package_file - لا بد من وضع إما single أو multifiles';
$string['invalidproperty'] = 'تعذر العثور على الخاصية ({$a->property} لـ {$a->class})';
$string['invalidsha1file'] = 'استدعاء خاطئ لـ get_sha1_file - لا بد من وضع إما single أو multifiles';
$string['invalidtempid'] = 'مُعرَّف تصدير غير صحيح. ربما انتهت صلاحيته.';
$string['invaliduserproperty'] = 'تعذر العثور على خاصية تهيئة هذا المستخدم ({$a->property} لـ {$a->class})';
$string['leap2a_emptyselection'] = 'القيمة المطلوبة غير محددة';
$string['leap2a_entryalreadyexists'] = 'لقد حاولت إضافة إدخال Leap2A بالمُعرَّف ({$a}) الموجود سلفاً في المغذي';
$string['leap2a_feedtitle'] = 'تصدير Leap2A من مودل لـ {$a}';
$string['leap2a_filecontent'] = 'حاولت تعيين محتوى إدخال Leap2A إلى ملف بدلاً من استعمال الصنف الفرعي للملف';
$string['leap2a_invalidentryfield'] = 'لقد حاولت تعيين حقل إدخال غير موجود ({$a}) أو لا يمكنك تعيينه بشكل مباشر';
$string['leap2a_invalidentryid'] = 'لقد حاولت الوصول إلى إدخال عبر مُعرَّف غير موجود ({$a})';
$string['leap2a_missingfield'] = 'حقل إدخال Leap2A {$a} مفقود';
$string['leap2a_nonexistantlink'] = 'إدخال Leap2A ({$a->from}) حاول الارتباط بإدخال غير موجود ({$a->to}) مع الصلة {$a->rel}';
$string['leap2a_overwritingselection'] = 'تجري الكتابة فوق النوع الأصلي للإدخال ({$a}) للاختيار الموجود في make_selection';
$string['leap2a_selflink'] = 'إدخال Leap2A ({$a->id}) حاول الارتباط بنفسه مع الصلة {$a->rel}';
$string['logs'] = 'سجل توثيق النقل';
$string['logsummary'] = 'عمليات النقل الناجحة سابقاً';
$string['manageportfolios'] = 'إدارة المحافظ';
$string['manageyourportfolios'] = 'إدارة المحافظ الخاصة بك';
$string['mimecheckfail'] = 'ملحق المحفظة {$a->plugin} لا يدعم هذا النوع mimetype {$a->mimetype}';
$string['missingcallbackarg'] = 'معامل معاودة الاتصال {$a->arg} مفقود للصنف {$a->class}';
$string['moderatedbsizethreshold'] = 'معدل النقل المعتدل لقاعدة البيانات';
$string['moderatedbsizethresholddesc'] = 'عدد سجلات قاعدة البيانات الذي سيتم اعتباره معتدلاً من حيث الوقت الذي تستغرقه عملية النقل';
$string['moderatefilesizethreshold'] = 'معدل النقل المعتدل لحجم الملفات';
$string['moderatefilesizethresholddesc'] = 'حجوم الملفات عند هذه العتبة ستعتبر متطلبة لمقدار معتدل من الوقت عند النقل';
$string['multipleinstancesdisallowed'] = 'محاولة إنشاء نسخة أخرى من إضافة تمنع إنشاء عدة نسخ ({$a}).';
$string['mustsetcallbackoptions'] = 'عليك تعيين خيارات معاودة الاتصال إما في موجه portfolio_add_button أو باستعمال الطريقة set_callback_options';
$string['noavailableplugins'] = 'عذراً، ولكن لا تتواجد محافظ للتصدير إليها';
$string['nocallbackclass'] = 'تعذر العثور على صنف معاودة الاتصال المطلوب استعماله ({$a})';
$string['nocallbackcomponent'] = 'تعذر العثور على المكون المحدد ({$a})';
$string['nocallbackfile'] = 'شيء ما مُعاب في الوحدة التي تحاول التصدير منها - تعذر العثور على ملف المحفظة المطلوب';
$string['noclassbeforeformats'] = 'عليك تعيين صنف معاودة الاتصال قبل استدعاء set_formats في portfolio_button';
$string['nocommonformats'] = 'لا توجد تنسيقات مشتركة ما بين أي من إضافات المحافظ المتاحة وموضع الاستدعاء {$a->location} (المستدعي المدعوم {$a->formats})';
$string['noinstanceyet'] = 'لم يتم اختياره بعد';
$string['nologs'] = 'لا يوجد سجلات للقيام بعرضها';
$string['nomultipleexports'] = 'عذراً، ولكن مقصد المحفظة ({$a->plugin}) لا يدعم عمليات تصدير متعددة في نفس الوقت. لطفاً، <a href="{$a->link}">أنهِ العملية الحالية أولاً</a> ثم حاول مجدداً';
$string['nonprimative'] = 'لقد تم تمرير قيمة لا إبتدائية بمثابة معامل معاودة الاتصال إلى portfolio_add_button.
الاستمرار مرفوض. المفتاح كان {$a->key} والقيمة كانت {$a->value}';
$string['nopermissions'] = 'عذراً، ولكن ليست لديك الصلاحيات المطلوبة لتصدير الملفات من هذه المنطقة';
$string['notexportable'] = 'عذراً، ولكن نوع المحتوى الذي تحاول تصديره غير قابل للتصدير';
$string['notimplemented'] = 'عذراً، ولكنك تحاول تصدير المحتوى بصيغة ما لم يسبق تطبيقها ({$a})';
$string['notyetselected'] = 'لم يتم اختياره بعد';
$string['notyours'] = 'أنت تحاول استئناف عملية تصدير لمحفظة ليست عائدة لك!';
$string['nouploaddirectory'] = 'تعذر إنشاء مجلد مؤقت لرزم بياناتك فيه';
$string['off'] = 'مُمَكَّن ولكنه مخفي';
$string['on'] = 'ممكن/مفعل وظاهر';
$string['plugin'] = 'ملحق المحفظة';
$string['plugincouldnotpackage'] = 'نعذر رزم بياناتك للتصدير: الخطأ الأصلي كان {$a}';
$string['pluginismisconfigured'] = 'ملحق المحفظة مهيأ بشكل خاطئ، يجري تجاوزه الآن. الخطأ كان: {$a}';
$string['portfolio'] = 'محفظة';
$string['portfolios'] = 'المحافظ';
$string['privacy:metadata'] = 'نظام المحفظة الفرعي يعمل بمثابة قناة تمرر الطلبات من الإضافات المختلفة إلى إضافات المحافظ';
$string['privacy:metadata:instance'] = 'مُعرَّف المحفظة';
$string['privacy:metadata:instancesummary'] = 'يخزن البيانات عن عينات المحافظ وتفضيلاتها';
$string['privacy:metadata:name'] = 'اسم التفضيل';
$string['privacy:metadata:portfolio_log'] = 'سجل توثيق عمليات نقل المحافظ (يُستعمل لتدقيق التكرارات مستقبلاً)';
$string['privacy:metadata:portfolio_log:caller_class'] = 'اسم الصنف المستعمل لإنشاء النقل';
$string['privacy:metadata:portfolio_log:caller_component'] = 'اسم المكون المسؤول عن التصدير';
$string['privacy:metadata:portfolio_log:time'] = 'مدة النقل (في حالة النقل ضمن طابور، هذه هي المدة الفعلية التي استغرقها النقل وليس عندما بدأها المستخدم)';
$string['privacy:metadata:portfolio_log:userid'] = 'مُعرَّف المستخدم الذي صدَّر المحتوى';
$string['privacy:metadata:portfolio_tempdata'] = 'يخزن البيانات المؤقتة لتصديرات المحافظ';
$string['privacy:metadata:portfolio_tempdata:data'] = 'تصدير البيانات';
$string['privacy:metadata:portfolio_tempdata:expirytime'] = 'وقت انتهاء صلاحية هذا السجل';
$string['privacy:metadata:portfolio_tempdata:instance'] = 'عينة ملحق المحفظة المستعمل';
$string['privacy:metadata:portfolio_tempdata:userid'] = 'المستخدم المنفذ للتصدير';
$string['privacy:metadata:userid'] = 'مُعرَّف المستخدم';
$string['privacy:metadata:value'] = 'قيمة التفضيل';
$string['privacy:path'] = 'عينات المحفظة';
$string['queuesummary'] = 'عمليات النقل الحالية في طابور الانتظار';
$string['returntowhereyouwere'] = 'العودة إلى حيث كنت';
$string['save'] = 'حفظ';
$string['selectedformat'] = 'تنسيق التصدير الذي تم اختياره';
$string['selectedwait'] = 'محددة للانتظار؟';
$string['selectplugin'] = 'إختر المقصد';
$string['showhide'] = 'إظهار/إخفاء';
$string['singleinstancenomultiallowed'] = 'عينة واحدة فقط لملحق محفظة متاحة حالياً وهي لا تدعم تصديرات متعددة في نفس الجلسة، وهناك سلفاً عملية تصدير نشطة في الجلسة تستعمل هذا الملحق!';
$string['somepluginsdisabled'] = 'بعض إضافات المحافظ تم تعطيلها بالكامل، إما لأنها غير صحيحة التهيئة أو تعتمد على مكونات أخرى، وهي:';
$string['sure'] = 'هل أنت متأكد من رغبتك في حذف \'{$a}\'؟ هذا لا يمكن التراجع عنه.';
$string['thirdpartyexception'] = 'وقع خطأ من طرف ثالث خلال تصدير المحفظة ({$a}). تم تلقيه وتكرر مراراً، وهذا ينبغي إصلاحه قطعاً';
$string['transfertime'] = 'وقت التحويل';
$string['unknownplugin'] = 'مجهول (قد تكون إزيلت في حينها من قبل المشرف)';
$string['wait'] = 'انتظر';
$string['wanttowait_high'] = 'من غير الموصى به انتظار عملية التصدير هذه حتى انتهائها، ولكنك تستطيع ذلك إن كنت متأكداً وتعرف بالضبط ما تريد فعله';
$string['wanttowait_moderate'] = 'هل تريد انتظار عملية النقل هذه؟ قد تستغرق بضع دقائق';
