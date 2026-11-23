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
 * Strings for component 'elang', language 'ar', version '4.5'.
 *
 * @package     elang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedlanguages'] = 'لغات المحتوى المسموح بها';
$string['allowedlanguages_desc'] = 'لغات المحتوى المعروضة عند إنشاء إملاء بالفيديو أو تحريره. لا تختر أياً منها لعرض قائمة اللغات كاملة. يحتفظ النشاط باللغة المخزَّنة فيه حتى لو أزلتها من هنا لاحقاً.';
$string['allowtranscriptdownload'] = 'تنزيل النص للمتعلمين';
$string['allowtranscriptdownload_help'] = 'عند تفعيله، يمكن للمتعلمين تنزيل ورقة عمل النص، مع إخفاء كل فراغ، بصيغة ‏PDF أو ‏Word أو ‏OpenDocument أو نص.

هذا الخيار معطّل افتراضياً. ويمكن للمعلمين تنزيل النص دائماً بصرف النظر عن هذا الإعداد.';
$string['allowtranscriptdownload_label'] = 'يمكن للمتعلمين تنزيل ورقة العمل';
$string['completiondetail_completionfinishattempt'] = 'إنهاء محاولة';
$string['completionfinishattempt'] = 'على الطالب إنهاء محاولة';
$string['cuepausemode'] = 'التوقف عند حدود الترجمة المصاحبة';
$string['cuepausemode_auto'] = 'تلقائي';
$string['cuepausemode_help'] = 'ما إذا كان الوسيط يتوقف عند نهاية الترجمة المصاحبة.

* تلقائي — يستمر التشغيل، ولا يتوقف عند نهاية ترجمة مصاحبة إلا ما دام العمل جارياً عليها، أي بعد النقر عليها أو على أحد فراغاتها، أو بعد نقل تركيز لوحة المفاتيح إلى أحدها.
* التوقف عند كل ترجمة مصاحبة غير مُجابة — يتوقف التشغيل عند نهاية كل ترجمة مصاحبة ما يزال فيها فراغ فارغ، وينتظر الاستئناف.
* عدم التوقف أبداً — يستمر التشغيل حتى نهاية الوسيط.

لا يتوقف أي من الخيارين الأولين عند ترجمة مصاحبة امتلأت كل فراغاتها: فذلك عمل منجَز، والتوقف هناك يطلب ضغطة مفتاح بلا فائدة. وهذا يعني أيضاً أن المرور الثاني على التمرين لا يتوقف إلا حيث ما يزال هناك نقص.';
$string['cuepausemode_nostop'] = 'عدم التوقف أبداً';
$string['cuepausemode_stop'] = 'التوقف عند كل ترجمة مصاحبة غير مُجابة';
$string['editcontent'] = 'تحرير المحتوى';
$string['editor_addcue'] = 'إضافة مقطع';
$string['editor_addgap'] = 'تعليم فراغ من التحديد';
$string['editor_addhint'] = 'إضافة تلميح';
$string['editor_addvariant'] = 'إضافة صيغة';
$string['editor_advanced'] = 'إعدادات متقدمة';
$string['editor_algoexact'] = 'تطابق تام';
$string['editor_algorithm'] = 'المطابقة';
$string['editor_algowordrecognized'] = 'قبول الإجابات المقاربة';
$string['editor_answers'] = 'الصيغ المقبولة';
$string['editor_autosaved'] = 'حُفظت كل التغييرات.';
$string['editor_autosaveerror'] = 'تعذر الحفظ التلقائي — استخدم «حفظ» لإعادة المحاولة.';
$string['editor_captureend'] = 'تعيين النهاية من التشغيل';
$string['editor_capturestart'] = 'تعيين البداية من التشغيل';
$string['editor_cueactions'] = 'إجراءات المقطع';
$string['editor_cuecount'] = 'المقاطع: {$a}';
$string['editor_currentmedia'] = 'الوسيط الحالي:';
$string['editor_deletecue'] = 'حذف المقطع';
$string['editor_deletegap'] = 'حذف الفراغ';
$string['editor_emptytranscript'] = '(لا يوجد نص بعد)';
$string['editor_endtime'] = 'وقت النهاية';
$string['editor_formatsubrip'] = '‏SubRip ‏(.srt)';
$string['editor_formatwebvtt'] = '‏WebVTT ‏(.vtt)';
$string['editor_gapcount'] = 'الفراغات: {$a}';
$string['editor_gaprange'] = 'موضع الفراغ (بالأحرف)';
$string['editor_gotomedia'] = 'الانتقال إلى الوسائط';
$string['editor_heading'] = 'محرر محتوى التمرين';
$string['editor_hints'] = 'التلميحات';
$string['editor_hinttext'] = 'نص التلميح';
$string['editor_hinttype'] = 'النوع';
$string['editor_hinttype_firstletter'] = 'الحرف الأول';
$string['editor_hinttype_partial'] = 'جزئي';
$string['editor_hinttype_solution'] = 'الحل';
$string['editor_hinttype_text'] = 'نص حر';
$string['editor_hinttype_translation'] = 'ترجمة';
$string['editor_hinttype_wordlength'] = 'طول الكلمة';
$string['editor_import'] = 'استيراد الترجمات المصاحبة';
$string['editor_importappend'] = 'إضافة إلى المقاطع الموجودة';
$string['editor_importapply'] = 'استيراد';
$string['editor_importcancel'] = 'إلغاء';
$string['editor_importcheck'] = 'فحص المحتوى';
$string['editor_importchecking'] = 'جارٍ الفحص…';
$string['editor_importcuecount'] = 'المقاطع الموجودة';
$string['editor_importduration'] = 'المدة';
$string['editor_importedcues'] = 'المقاطع المستوردة: {$a}';
$string['editor_importfilehint'] = 'اختر ملف ‏WebVTT ‏(.vtt) أو ‏SubRip ‏(.srt) يحتوي على ترجمات مصاحبة.';
$string['editor_importformat'] = 'التنسيق';
$string['editor_importfromfile'] = 'رفع ملف';
$string['editor_importfromtext'] = 'لصق نص';
$string['editor_importgapcount'] = 'الفراغات الموجودة';
$string['editor_importhint'] = 'الصق محتوى ‏WebVTT أو ‏SubRip، ثم استورده كمقاطع.';
$string['editor_importparseerror'] = 'تعذرت قراءة هذا المحتوى بتنسيق ‏WebVTT أو ‏SubRip.';
$string['editor_importpastedtext'] = 'نص ملصق';
$string['editor_importreaderror'] = 'تعذرت قراءة الملف.';
$string['editor_importready'] = 'جاهز للاستيراد';
$string['editor_importreplace'] = 'استبدال كل المقاطع';
$string['editor_importreplacedcues'] = 'استُبدلت المقاطع؛ المستورد حديثاً: {$a}';
$string['editor_importsource'] = 'المصدر';
$string['editor_importsummary'] = 'ما تم العثور عليه';
$string['editor_importtoolarge'] = 'حجم هذا الملف {$a->size}؛ الاستيراد يقبل {$a->max} كحد أقصى.';
$string['editor_importwrongtype'] = 'اختر ملف ترجمة مصاحبة ({$a}).';
$string['editor_insertafter'] = 'إدراج مقطع بعده';
$string['editor_insertbefore'] = 'إدراج مقطع قبله';
$string['editor_invalidtime'] = 'أدخل وقتاً بالصيغة mm:ss.SSS، مثلاً 01:05.400.';
$string['editor_linkurl'] = 'رابط مرجعي';
$string['editor_linkurl_help'] = 'يظهر بجانب الفراغ كموضع للبحث عن الكلمة. اتركه فارغاً إن لم تُرد رابطاً.';
$string['editor_loaderror'] = 'تعذر تحميل المحرر. يرجى إعادة تحميل الصفحة.';
$string['editor_loading'] = 'جارٍ تحميل المحرر…';
$string['editor_maxlength'] = 'الطول الأقصى';
$string['editor_maxlength_help'] = 'يحدّ عدد الأحرف التي يمكن للمتعلم إدخالها. القيمة 0 تعني بلا حد.';
$string['editor_media'] = 'الوسائط';
$string['editor_mediafile'] = 'ملف مرفوع';
$string['editor_mediakind'] = 'نوع الوسيط';
$string['editor_medianone'] = 'لا شيء';
$string['editor_mediaprovider'] = 'المزود';
$string['editor_mediaproviderref'] = 'مرجع المزود';
$string['editor_mediaproviderrefhint'] = 'معرّف الفيديو أو رابطه بأي صيغة شائعة (مثل ‎youtu.be/…).';
$string['editor_mediasaved'] = 'حُفظ الوسيط.';
$string['editor_mediaurl'] = 'رابط مباشر';
$string['editor_nocues'] = 'لا توجد مقاطع بعد. أضف مقطعاً أو استورد ترجمات مصاحبة.';
$string['editor_nocueselected'] = 'اختر مقطعاً من القائمة لتحريره.';
$string['editor_nocuesmatch'] = 'لا يطابق أي مقطع هذا البحث.';
$string['editor_nogaps'] = 'لا توجد فراغات';
$string['editor_nomedia'] = 'لا شيء';
$string['editor_nomedianotice'] = 'أضف ملف الفيديو أو الصوت في تبويب الوسائط أولاً. تُوقَّت الترجمات المصاحبة على الوسيط، لذا يحتاجه المحرر قبل أن تتمكن من العمل على المقاطع والفراغات.';
$string['editor_novideotrack'] = 'لا يستطيع هذا المتصفح فك ترميز مسار الفيديو لهذا الوسيط (يُشغَّل الصوت فقط)، وسيرى المتعلمون صورة سوداء. يرجى إعادة ترميز الملف بصيغة ‏H.264/MP4 (مثلاً باستعمال ‏ffmpeg أو ‏HandBrake) ورفعه من جديد.';
$string['editor_onboardinggaps'] = 'حدد كلمة في مقطع وعلّمها كفراغ.';
$string['editor_onboardingimport'] = 'استورد ترجمات مصاحبة ‏WebVTT أو ‏SubRip، أو أضف المقاطع يدوياً.';
$string['editor_onboardingintro'] = 'أنشئ تمريناً في ثلاث خطوات:';
$string['editor_onboardingmedia'] = 'اختر وسيطاً (رفع، أو رابط، أو مزود).';
$string['editor_onboardingtitle'] = 'ابدأ تمرينك';
$string['editor_onlywarnings'] = 'المقاطع ذات التحذيرات فقط';
$string['editor_parsegaps'] = 'التعرف على علامات الفراغات: ‏[كلمة] ينشئ فراغاً مع السماح بالتلميحات، و‏{كلمة} ينشئ فراغاً بدونها.';
$string['editor_penalty'] = 'الخصم';
$string['editor_poster'] = 'صورة الغلاف';
$string['editor_preview'] = 'معاينة المتعلم';
$string['editor_publish'] = 'نشر';
$string['editor_published'] = 'نُشرت النسخة.';
$string['editor_removehint'] = 'إزالة التلميح';
$string['editor_removevariant'] = 'إزالة';
$string['editor_ruleapplied'] = 'أُنشئت %count% فراغات من القاعدة.';
$string['editor_ruleapply'] = 'تطبيق %count% فراغات';
$string['editor_ruleerror'] = 'تعذر إنشاء الفراغات.';
$string['editor_ruleeverynth'] = 'كل كلمة رقم ن';
$string['editor_rulefound'] = 'وجدت القاعدة %count% فراغات.';
$string['editor_rulegenerate'] = 'إنشاء الفراغات';
$string['editor_ruleinterval'] = 'الفاصل (ن)';
$string['editor_ruletype'] = 'قاعدة الفراغات';
$string['editor_rulewordlist'] = 'الكلمات المراد إخفاؤها';
$string['editor_rulewords'] = 'قائمة كلمات';
$string['editor_save'] = 'حفظ المسودة';
$string['editor_saved'] = 'حُفظت المسودة.';
$string['editor_saveerror'] = 'تعذر حفظ المسودة.';
$string['editor_savemedia'] = 'حفظ الوسيط';
$string['editor_saving'] = 'جارٍ الحفظ…';
$string['editor_searchcues'] = 'البحث في المقاطع';
$string['editor_selecttext'] = 'حدد أولاً الكلمة المراد إخفاؤها في النص.';
$string['editor_solution'] = 'الحل';
$string['editor_starttime'] = 'وقت البداية';
$string['editor_transcript'] = 'النص';
$string['editor_unsaved'] = 'تغييرات غير محفوظة';
$string['editor_uploadmedia'] = 'رفع ملفات الوسائط';
$string['editor_variantisregex'] = 'معاملة {$a} كتعبير نمطي';
$string['editor_variantmatching'] = 'كيفية مطابقة الصيغ المقبولة';
$string['editor_warnemptysolution'] = 'فراغ بلا حل';
$string['editor_warnnotranscript'] = 'لا يوجد نص';
$string['editor_warntiming'] = 'النهاية ليست بعد البداية';
$string['editor_waveform'] = 'الشكل الموجي للصوت';
$string['elang:addinstance'] = 'إضافة إملاء بالفيديو جديد';
$string['elang:attempt'] = 'أداء إملاء بالفيديو';
$string['elang:deleteattempts'] = 'حذف محاولات المتعلمين';
$string['elang:exportreports'] = 'تصدير تقارير تحتوي على بيانات شخصية';
$string['elang:exportsolution'] = 'تصدير نص الحل الكامل';
$string['elang:exporttranscript'] = 'تصدير ورقة عمل النص كمستند';
$string['elang:manage'] = 'إنشاء محتوى التمارين وتحريره';
$string['elang:useregex'] = 'استعمال التعابير النمطية في الإجابات المقبولة';
$string['elang:view'] = 'عرض إملاء بالفيديو';
$string['elang:viewreports'] = 'عرض تقارير المتعلمين';
$string['error_attemptnotinprogress'] = 'لم تعد هذه المحاولة جارية.';
$string['error_couldnotobtainlock'] = 'تعذر الحصول على قفل لهذه العملية. يرجى المحاولة مرة أخرى.';
$string['error_draftrevisionmismatch'] = 'تغيّرت هذه المسودة منذ أن حمّلتها. يرجى إعادة التحميل والمحاولة مرة أخرى.';
$string['error_duplicatecuekey'] = 'يتشارك مقطعان المفتاح ‏\'{$a}\'؛ يحتاج كل مقطع إلى مفتاح فريد.';
$string['error_duplicategapkey'] = 'يتشارك فراغان في المقطع نفسه المفتاح ‏\'{$a}\'؛ يحتاج كل فراغ إلى مفتاح فريد.';
$string['error_duplicatehintlevel'] = 'لأحد الفراغات تلميحان بالمستوى {$a}؛ يجب أن يكون كل مستوى تلميح فريداً.';
$string['error_gapnotinattemptversion'] = 'لا ينتمي هذا الفراغ إلى نسخة التمرين الخاصة بهذه المحاولة.';
$string['error_importnocues'] = 'تعذرت قراءة أي ترجمة مصاحبة من هذا المحتوى. يحتوي ملف ‏WebVTT أو ‏SubRip على سطر توقيت مثل 00:00:01.000 --> 00:00:04.000 فوق كل ترجمة مصاحبة.';
$string['error_importnotutf8'] = 'هذا الملف ليس ‏UTF-8 صالحاً. غالباً حُفظ بترميز أقدم — افتحه في محرر نصوص واحفظه من جديد بترميز ‏UTF-8.';
$string['error_importtoolarge'] = 'حجم هذا الملف {$a->size}؛ الاستيراد يقبل {$a->max} كحد أقصى. ملف الترجمة المصاحبة لتسجيل درس أصغر من ذلك بكثير، لذا من غير المرجح أن يكون هذا ملف ترجمة مصاحبة.';
$string['error_importtoomanycues'] = 'يحتوي هذا الملف على {$a->count} ترجمة مصاحبة؛ الاستيراد يقبل {$a->max} كحد أقصى.';
$string['error_invalidcuepausemode'] = 'اختر أحد الخيارات المعروضة للتوقف عند حدود الترجمة المصاحبة.';
$string['error_invalidgradingalgorithm'] = 'خوارزمية التقييم ‏\'{$a}\' ليست ‏exact ولا ‏wordrecognized.';
$string['error_invalidhinttype'] = 'نوع التلميح ‏\'{$a}\' ليس من الأنواع المسموح بها.';
$string['error_invalidisregex'] = 'يجب أن تكون علامة التعبير النمطي لصيغة الإجابة 0 أو 1.';
$string['error_invalidmediakind'] = 'نوع الوسيط المختار ليس ملفاً ولا رابطاً ولا مزوداً.';
$string['error_invalidpenalty'] = 'يجب أن يكون خصم التلميح بين 0 و1.';
$string['error_invalidproviderref'] = '‏\'{$a}\' ليس معرّف فيديو ولا رابطاً معروفاً لهذا المزود.';
$string['error_invalidregexpattern'] = '‏\'{$a}\' ليس تعبيراً نمطياً صالحاً.';
$string['error_invalidsolutionavailability'] = 'اختر أحد الخيارات المعروضة لتحديد متى يمكن للمتعلمين رؤية نص الحل.';
$string['error_invalidsourceurl'] = 'أدخل عنواناً كاملاً يبدأ بـ ‏http:// أو ‏https://، أو رابط ‏YouTube أو ‏Vimeo.';
$string['error_invalidsubtitleposition'] = 'اختر أحد الخيارات المعروضة لموضع عرض الترجمات المصاحبة.';
$string['error_invalidv1cuejson'] = 'تعذر تحليل مقطع الإصدار 1 هذا.';
$string['error_negativegapoffset'] = 'يجب ألا يكون موضع الفراغ أو طوله سالباً.';
$string['error_noaccesstoattempt'] = 'ليس لديك صلاحية الوصول إلى هذه المحاولة.';
$string['error_nomorehints'] = 'لا تتوفر تلميحات إضافية لهذا الفراغ.';
$string['error_nopublishedversion'] = 'لا يحتوي هذا التمرين على محتوى منشور بعد.';
$string['error_responsetoolong'] = 'إجابتك طويلة جداً. الحد الأقصى لهذا الفراغ هو {$a} حرفاً.';
$string['error_solutionnotavailable'] = 'نص الحل غير متاح لك في هذا النشاط.';
$string['error_staleattemptstate'] = 'عرضك لهذه المحاولة غير محدّث. يرجى إعادة تحميل الحالة الحالية والمحاولة مرة أخرى.';
$string['error_transcriptnotavailable'] = 'لا يوجد نص متاح لك للتنزيل في هذا النشاط.';
$string['error_unknowngaprule'] = 'نوع قاعدة الفراغات ‏\'{$a}\' غير معروف.';
$string['error_unknownmediaprovider'] = '‏\'{$a}\' ليس من مزودي الوسائط المدعومين.';
$string['error_versionnotadraft'] = 'يمكن تحرير النسخ المسودة فقط.';
$string['error_versionnotfound'] = 'لم تعد نسخة التمرين هذه موجودة.';
$string['error_versionnotpublishable'] = 'تعذر نشر هذه النسخة: {$a}';
$string['export_audienceaftersubmission'] = 'يمكن للمتعلمين تنزيل هذا بعد إنهاء محاولة';
$string['export_audiencealways'] = 'يمكن للمتعلمين تنزيل هذا في أي وقت';
$string['export_audiencestaff'] = 'لهيئة التدريس المخوَّلة فقط — غير متاح للمتعلمين';
$string['export_docx'] = 'تنزيل بصيغة ‏Word ‏(DOCX)';
$string['export_downloadpdf'] = 'تنزيل ‏PDF';
$string['export_heading'] = 'تصدير النص';
$string['export_intro'] = 'نزّل نص هذا التمرين بعدة صيغ.';
$string['export_moreformats'] = 'صيغ أخرى';
$string['export_nocontent'] = 'لا يوجد نص منشور للتصدير بعد.';
$string['export_odt'] = 'تنزيل بصيغة ‏OpenDocument ‏(ODT)';
$string['export_pdf'] = 'تنزيل بصيغة ‏PDF';
$string['export_solution'] = 'نص الحل';
$string['export_solutionhint'] = 'النص الكامل مع إظهار حل كل فراغ.';
$string['export_text'] = 'تنزيل كنص';
$string['export_versionnote'] = 'تستند عمليات التصدير إلى النسخة المنشورة حالياً من هذا التمرين.';
$string['export_worksheet'] = 'ورقة عمل (الفراغات مخفية)';
$string['export_worksheethint'] = 'النص مع إخفاء كل فراغ. جاهز للتوزيع كمادة للمتعلمين.';
$string['exporttranscript'] = 'تصدير النص';
$string['filearea_media'] = 'الوسائط';
$string['filearea_poster'] = 'صورة الغلاف';
$string['gradingheading'] = 'تقييم الإجابات';
$string['import_badtiming'] = 'تعذرت قراءة سطر التوقيت: {$a}';
$string['import_emptytranscript'] = 'تم تخطي مقطع بلا نص.';
$string['import_warnlinetoolong'] = 'تم تخطي الكتلة {$a->block}: تحتوي على سطر يتجاوز {$a->max} حرفاً، وهذا ليس سطر ترجمة مصاحبة.';
$string['jarothreshold'] = 'عتبة التشابه';
$string['jarothreshold_help'] = 'بالنسبة للفراغات المضبوطة على «قبول الإجابات المقاربة»، هذه هي أدنى درجة تشابه Jaro بين الإجابة المتوقعة والإجابة المكتوبة. القيمة 1 تتطلب تطابقاً تاماً بعد التطبيع الخاص باللغة؛ والقيم الأدنى تقبل كتابات مختلفة أكثر فأكثر.';
$string['jarothresholdrange'] = 'يجب أن تكون العتبة بين 0 و1.';
$string['language'] = 'لغة المحتوى';
$string['language_help'] = 'اختر لغة محتوى التمرين. تتحكم في كيفية مقارنة الإجابات، بما في ذلك حالة الأحرف والنقحرة. اختر «عام (غير محدد)» إذا لم ترغب في معالجة خاصة بلغة معينة. تبدأ نسخ المحتوى الجديدة من هذا الإعداد.';
$string['language_none'] = 'عام (غير محدد)';
$string['media_cuenote'] = 'تبقى الترجمات المصاحبة والفراغات الموجودة كما هي عند تغيير الوسيط. لا تُعدَّل توقيتاتها، لذا راجعها في المحرر بعد ذلك.';
$string['media_current'] = 'الوسيط الحالي';
$string['media_heading'] = 'الوسائط';
$string['media_intro'] = 'اختر الفيديو أو الصوت الذي يقوم عليه هذا التمرين. تُوقَّت الترجمات المصاحبة عليه، لذا يأتي أولاً.';
$string['media_none'] = 'لم يُحدَّد وسيط لهذا التمرين بعد.';
$string['media_othersource'] = 'مصدر آخر';
$string['media_providerhint'] = 'المزودون المعروفون: {$a}. أي عنوان آخر يُستعمل كرابط وسائط مباشر.';
$string['media_sourceurl'] = 'عنوان المصدر';
$string['media_sourceurl_help'] = 'الصق عنوان فيديو بدل رفع ملف — رابط ‏YouTube أو ‏Vimeo، أو العنوان المباشر لملف وسائط.

العنوان المُدخل هنا يحل محل الملف المرفوع. اتركه فارغاً لاستعمال الرفع أعلاه.

يُشغَّل فيديو المزود في إطاره الخاص، وهو لا يُبلّغ عن وقت التشغيل. لذا يعرض مثل هذا التمرين الترجمات المصاحبة دائماً أسفل الوسيط ولا يتوقف عند حدود الترجمة المصاحبة.

**إلى أين تذهب البيانات.** يربط إطار ‏YouTube أو ‏Vimeo متصفح كل متعلم بتلك الشركة، فتتلقى عنوان ‏IP الخاص به وبيانات جهازه. يسأل التمرين افتراضياً قبل ذلك. وإن كانت مؤسستك تشغّل خادم وسائط خاصاً بها — ‏Opencast أو ‏Panopto أو ‏Kaltura أو ما شابه — فالصق بدلاً من ذلك العنوان المباشر للملف من هناك: يُعامَل كرابط وسائط عادي، ويحافظ على موضع الترجمة المصاحبة وإعداد التوقف اللذين اخترتهما، ولا يشارك فيه أي طرف ثالث.';
$string['migratev1_approvalheading'] = 'تمت الهجرة، بانتظار المراجعة';
$string['migratev1_approvebutton'] = 'اعتماد هذه الهجرة';
$string['migratev1_approved'] = 'تم وسم الإملاء بالفيديو {$a} كمعتمَد.';
$string['migratev1_colactivity'] = 'النشاط';
$string['migratev1_colalgorithm'] = 'خوارزمية التقييم';
$string['migratev1_colcues'] = 'المقاطع';
$string['migratev1_colgaps'] = 'الفراغات';
$string['migratev1_colissues'] = 'المشكلات';
$string['migratev1_collearners'] = 'المتعلمون';
$string['migratev1_confirmdecommission'] = 'هذا يحذف نهائياً جداول الإصدار 1 القديمة وعمود elang.options. لا يمكن التراجع. هل تريد المتابعة؟';
$string['migratev1_confirmmigrate'] = 'سيؤدي هذا إلى جدولة مهمة خلفية تكتب بيانات الإصدار 2 لكل نشاط مذكور أعلاه. تبقى جداول الإصدار 1 وعمود elang.options دون تغيير. هل تريد المتابعة؟';
$string['migratev1_decommissionblocked'] = 'ما يزال الحذف محظوراً؛ انظر القائمة أدناه.';
$string['migratev1_decommissionblockedintro'] = 'الحذف محظور حتى:';
$string['migratev1_decommissionbutton'] = 'حذف بيانات الإصدار 1 القديمة';
$string['migratev1_decommissioned'] = 'حُذفت بيانات الإصدار 1 القديمة.';
$string['migratev1_decommissionheading'] = 'إيقاف بيانات الإصدار 1';
$string['migratev1_decommissionready'] = 'تمت هجرة كل أنشطة الإصدار 1 واعتمادها. يمكن الآن حذف جداول الإصدار 1 القديمة وعمود elang.options. هذا إجراء لا رجعة فيه.';
$string['migratev1_heading'] = 'هجرة أنشطة الإصدار 1';
$string['migratev1_migratebutton'] = 'هجرة هذه الأنشطة';
$string['migratev1_noissues'] = 'لا شيء';
$string['migratev1_nonepending'] = 'لا توجد أنشطة من الإصدار 1 بانتظار الهجرة.';
$string['migratev1_nonependingapproval'] = 'لا توجد أنشطة مهاجَرة بانتظار المراجعة.';
$string['migratev1_notablespresent'] = 'لم يُعثر على جداول قديمة من الإصدار 1 في هذا الموقع. لا يوجد ما يُهاجَر.';
$string['migratev1_parseerrorcount'] = 'المقاطع التي تعذر تحليلها: {$a}';
$string['migratev1_pendingheading'] = 'لم تُهاجَر بعد';
$string['migratev1_queued'] = 'تمت جدولة مهمة الهجرة. ستُنفَّذ في دورة cron التالية، أو فوراً عبر admin/cli/adhoc_task.php --execute.';
$string['migratev1_verifiedclean'] = 'تم التحقق: البيانات المهاجَرة تطابق مصدر الإصدار 1 دون أي اختلاف.';
$string['migratev1_verifieddiscrepancies'] = 'وجد التحقق اختلافات مقارنةً بمصدر الإصدار 1: {$a}';
$string['migratev1_verifyfailed'] = 'تعذر التحقق من هذا النشاط: {$a}';
$string['modulename'] = 'إملاء بالفيديو';
$string['modulename_help'] = 'يتيح نشاط الإملاء بالفيديو للمتعلمين ملء الفراغات في ترجمات مصاحبة موقَّتة زمنياً أثناء مشاهدة فيديو أو الاستماع إليه.

يستورد المعلمون ملف ترجمة مصاحبة بصيغة ‏WebVTT أو ‏SubRip، ويعلّمون كلمات أو عبارات كفراغات، ويضبطون مدى صرامة مقارنة الإجابات. يعمل المتعلمون على النص مقطعاً بمقطع، ويطلبون تلميحات مُقيَّمة، ويتلقون تغذية راجعة فورية.';
$string['modulenameplural'] = 'إملاءات بالفيديو';
$string['nav_exportshort'] = 'تصدير';
$string['nav_media'] = 'الوسائط';
$string['nav_reports'] = 'المحاولات';
$string['nav_subtitles'] = 'الترجمات المصاحبة والفراغات';
$string['noinstances'] = 'لا توجد إملاءات بالفيديو في هذه الدورة.';
$string['overview_attempts'] = 'المحاولات';
$string['playbackheading'] = 'التشغيل والترجمات المصاحبة';
$string['playbackoverlayhint'] = 'تعرض الترجمة المصاحبة الموضوعة على الصورة المقطع الجاري تشغيله فقط، لذا يتوقف التشغيل دائماً عند نهاية أي مقطع ما تزال فيه فراغات لتُملأ. لا يوجد خيار هنا.';
$string['playbackproviderhint'] = 'يُشغَّل فيديو ‏YouTube أو ‏Vimeo لدى المزود في إطاره الخاص، وهو لا يُبلّغ عن وقت التشغيل. لذا يعرض هذا التمرين الترجمات المصاحبة دائماً أسفل الوسيط ولا يتوقف عند حدود الترجمة المصاحبة، مهما كان الاختيار أعلاه. أما الملفات المرفوعة وروابط الوسائط المباشرة فتحترم كلا الإعدادين.';
$string['player_check'] = 'تحقق من الإجابة';
$string['player_consentaccept'] = 'تحميل الفيديو من {$a}';
$string['player_consentdetail'] = 'يؤدي تشغيله إلى اتصال متصفحك بـ {$a}. يتلقى {$a} عنوان ‏IP الخاص بك ومعلومات عن جهازك، وقد يقرأ ملفات تعريف ارتباط سبق أن وضعها. لا يُرسَل أي شيء قبل أن تختار تحميل الفيديو.';
$string['player_consentheading'] = 'هذا الفيديو مقدَّم من {$a}';
$string['player_finish'] = 'إنهاء المحاولة';
$string['player_finished'] = 'انتهت المحاولة. الدرجة: %score%%';
$string['player_finishincomplete'] = 'الفراغات التي ما تزال فارغة: {$a}. هل تريد إنهاء المحاولة على أي حال؟';
$string['player_gaplabel'] = 'الفراغ %gap%';
$string['player_gaplink'] = 'فتح الرابط';
$string['player_hint'] = 'إظهار تلميح';
$string['player_loaderror'] = 'تعذر تحميل التمرين. يرجى إعادة تحميل الصفحة.';
$string['player_loading'] = 'جارٍ تحميل التمرين…';
$string['player_nocontent'] = 'لم يُنشر محتوى لهذا التمرين بعد. يرجى المحاولة لاحقاً.';
$string['player_novideotrack'] = 'لا يستطيع متصفحك عرض مسار الفيديو لهذا الوسيط؛ سيستمر تشغيل الصوت. يرجى إبلاغ معلمك.';
$string['player_outdatedattempt'] = 'جرى تحديث هذا التمرين منذ أن بدأت هذه المحاولة. أنت تواصل على المحتوى الأقدم؛ أنهِ هذه المحاولة للعمل على التمرين المحدَّث في المرة القادمة.';
$string['player_progress'] = 'تمت الإجابة عن {$a->done} من {$a->total} فراغاً';
$string['player_ready'] = 'التمرين جاهز.';
$string['player_scorelabel'] = 'الدرجة: %score%%';
$string['player_stateaccepted'] = 'مقبولة';
$string['player_statecorrect'] = 'صحيحة';
$string['player_statehinted'] = 'استُعمل تلميح';
$string['player_stateincorrect'] = 'خاطئة';
$string['player_submitfailed'] = 'تعذر حفظ إجابتك. يرجى المحاولة مرة أخرى.';
$string['player_transcriptheading'] = 'النص';
$string['pluginadministration'] = 'إدارة الإملاء بالفيديو';
$string['pluginname'] = 'إملاء بالفيديو';
$string['privacy_metadata_elang'] = 'لكل نشاط، سجل بمن اعتمد الهجرة أحادية الاتجاه لمحتواه من الإصدار 1.x.';
$string['privacy_metadata_elang_attempt'] = 'لكل محاولة في تمرين، يخزن النشاط من قام بها ومتى وإلى أي مدى وصلت وكيف قُيِّمت.';
$string['privacy_metadata_elang_attempt_answeredgaps'] = 'عدد الفراغات التي أجاب عنها المتعلم في هذه المحاولة.';
$string['privacy_metadata_elang_attempt_attemptnumber'] = 'الرقم التسلسلي لهذه المحاولة للمستخدم والنشاط.';
$string['privacy_metadata_elang_attempt_correctgaps'] = 'عدد الفراغات التي قُبلت كصحيحة في هذه المحاولة.';
$string['privacy_metadata_elang_attempt_exactgaps'] = 'عدد الفراغات التي أُجيب عنها بتطابق حرفي تام في هذه المحاولة.';
$string['privacy_metadata_elang_attempt_hintedgaps'] = 'عدد الفراغات التي طلب المتعلم تلميحاً لها في هذه المحاولة.';
$string['privacy_metadata_elang_attempt_score'] = 'الدرجة المحققة في هذه المحاولة.';
$string['privacy_metadata_elang_attempt_state'] = 'ما إذا كانت المحاولة جارية أو منتهية أو متروكة.';
$string['privacy_metadata_elang_attempt_timefinish'] = 'وقت إنهاء المحاولة.';
$string['privacy_metadata_elang_attempt_timemodified'] = 'وقت آخر تحديث للمحاولة.';
$string['privacy_metadata_elang_attempt_timestart'] = 'وقت بدء المحاولة.';
$string['privacy_metadata_elang_attempt_totalgaps'] = 'العدد الإجمالي للفراغات في نسخة التمرين التي جرت عليها هذه المحاولة.';
$string['privacy_metadata_elang_attempt_userid'] = 'معرّف المستخدم الذي قام بالمحاولة.';
$string['privacy_metadata_elang_attempt_versionid'] = 'نسخة التمرين التي جرت عليها هذه المحاولة.';
$string['privacy_metadata_elang_migrationapproveduserid'] = 'المستخدم الذي اعتمد هجرة هذا النشاط من mod_elang ‏1.x. يُخزَّن ليبقى الاعتماد قابلاً للتدقيق.';
$string['privacy_metadata_elang_response'] = 'لكل فراغ يجيب عنه متعلم ضمن محاولة، يخزن النشاط نص الإجابة وكيفية تقييمها.';
$string['privacy_metadata_elang_response_accepted'] = 'ما إذا قُبلت الإجابة كصحيحة لهذا الفراغ.';
$string['privacy_metadata_elang_response_hintlevel'] = 'أعلى مستوى تلميح كُشف للمتعلم في هذا الفراغ.';
$string['privacy_metadata_elang_response_responsetext'] = 'النص الذي كتبه المتعلم لهذا الفراغ.';
$string['privacy_metadata_elang_response_resultstate'] = 'التصنيف الذي توصل إليه المقيّم لهذه الإجابة (تطابق تام، أو كلمة معروفة، أو خاطئة، أو فارغة).';
$string['privacy_metadata_elang_response_score'] = 'النقاط التي أسهمت بها هذه الإجابة بعد خصم التلميح إن وُجد.';
$string['privacy_metadata_elang_response_timecreated'] = 'وقت أول إرسال لهذه الإجابة.';
$string['privacy_metadata_elang_response_timemodified'] = 'وقت آخر تحديث لهذه الإجابة.';
$string['privacy_metadata_elang_response_tries'] = 'عدد مرات إرسال المتعلم إجابة لهذا الفراغ.';
$string['privacy_metadata_elang_version'] = 'لكل نسخة محتوى، يخزن النشاط المستخدم الذي عدّلها آخر مرة.';
$string['privacy_metadata_elang_version_usermodified'] = 'المستخدم الذي عدّل نسخة المحتوى هذه آخر مرة. يُخزَّن لتدقيق من حرّر محتوى التمرين.';
$string['privacy_provider_externallink'] = 'عندما يقوم تمرين على فيديو من ‏YouTube أو ‏Vimeo، يؤدي فتحه إلى اتصال متصفح المتعلم بذلك المزود. لا يرسل الملحق شيئاً بنفسه، لكن النشاط هو ما يسبب الاتصال. وما إذا كان يحدث أصلاً يتوقف على إعداد الموقع الخاص بموافقة المزود وعلى موافقة المتعلم.';
$string['privacy_provider_ipaddress'] = 'عنوان ‏IP الذي يتصل منه متصفح المتعلم.';
$string['privacy_provider_useragent'] = 'بيانات المتصفح والجهاز التي يرسلها المتصفح.';
$string['provider_vimeo'] = 'Vimeo';
$string['provider_youtube'] = 'YouTube';
$string['providerconsent'] = 'السؤال قبل تضمين ‏YouTube أو ‏Vimeo';
$string['providerconsent_desc'] = 'التمارين القائمة على فيديو من ‏YouTube أو ‏Vimeo تعرض إشعاراً بدل الفيديو، ولا تضمّنه إلا بعد موافقة المتعلم. من دون ذلك يتلقى المزود عنوان ‏IP الخاص بالمتعلم وبيانات متصفحه بمجرد فتح الصفحة — قبل أن يضغط أحد على التشغيل. لا تعطّله إلا إذا كانت مؤسستك تحصل على هذه الموافقة في مكان آخر.';
$string['report_actions'] = 'الإجراءات';
$string['report_answered'] = 'أُجيب عنها';
$string['report_attemptnumber'] = 'المحاولة';
$string['report_back'] = 'العودة إلى كل المحاولات';
$string['report_correct'] = 'صحيحة';
$string['report_delete'] = 'حذف';
$string['report_deleteconfirm'] = 'حذف هذه المحاولة وكل إجاباتها نهائياً؟ لا يمكن التراجع عن ذلك.';
$string['report_deleted'] = 'حُذفت المحاولة.';
$string['report_exact'] = 'تطابق تام';
$string['report_export'] = 'تصدير';
$string['report_filterany'] = 'الكل';
$string['report_filterapply'] = 'تطبيق المرشحات';
$string['report_filterattempt'] = 'رقم المحاولة';
$string['report_filterfrom'] = 'بدأت من';
$string['report_filterrangeerror'] = 'نهاية المدى تسبق بدايته.';
$string['report_filterreset'] = 'مسح المرشحات';
$string['report_filterstate'] = 'الحالة';
$string['report_filterto'] = 'بدأت حتى';
$string['report_filteruser'] = 'الشخص';
$string['report_finished'] = 'منتهية';
$string['report_heading'] = 'المحاولات';
$string['report_hinted'] = 'مع تلميح';
$string['report_hints'] = 'مستوى التلميح';
$string['report_kpianswered'] = 'أُجيب عنها';
$string['report_kpiattempts'] = 'المحاولات المعروضة';
$string['report_kpiaverage'] = 'متوسط الدرجة (المنتهية)';
$string['report_kpicorrect'] = 'مقبولة';
$string['report_kpiexact'] = 'صحيحة تماماً';
$string['report_kpifinished'] = 'منتهية';
$string['report_kpihinted'] = 'استعملت تلميحاً';
$string['report_kpihintedgaps'] = 'احتاجت تلميحاً';
$string['report_noattempts'] = 'لا توجد محاولات بعد.';
$string['report_nogaps'] = 'النسخة التي جرت عليها هذه المحاولة لا تحتوي على فراغات.';
$string['report_nomatchingattempts'] = 'لا توجد محاولة تطابق هذه المرشحات.';
$string['report_noresponse'] = 'بلا إجابة';
$string['report_response'] = 'الإجابة';
$string['report_result'] = 'النتيجة';
$string['report_result_empty'] = 'فارغة';
$string['report_result_exact'] = 'تطابق تام';
$string['report_result_incorrect'] = 'خاطئة';
$string['report_result_none'] = '—';
$string['report_result_wordrecognized'] = 'معروفة';
$string['report_score'] = 'الدرجة';
$string['report_solution'] = 'الحل';
$string['report_started'] = 'بدأت';
$string['report_state'] = 'الحالة';
$string['report_state_abandoned'] = 'متروكة';
$string['report_state_finished'] = 'منتهية';
$string['report_state_inprogress'] = 'جارية';
$string['report_transcript'] = 'النص';
$string['report_tries'] = 'المحاولات';
$string['report_user'] = 'الشخص';
$string['report_view'] = 'عرض';
$string['reports'] = 'التقارير';
$string['resetattempts'] = 'حذف كل محاولات المتعلمين وإجاباتهم';
$string['solutionavailability'] = 'نص الحل للمتعلمين';
$string['solutionavailability_aftersubmission'] = 'بعد إنهاء المحاولة';
$string['solutionavailability_always'] = 'في أي وقت';
$string['solutionavailability_help'] = 'متى يمكن للمتعلمين تنزيل النص الكامل مع إظهار حل كل فراغ.

* أبداً — المعلمون وحدهم يمكنهم تنزيله.
* بعد إنهاء المحاولة — يمكن للمتعلم تنزيله بعد أن ينهي محاولة في هذا النشاط.
* في أي وقت — يمكن للمتعلم تنزيله قبل الإجابة أيضاً.

يمكن للمعلمين تنزيله دائماً بصرف النظر عن هذا الإعداد.';
$string['solutionavailability_never'] = 'أبداً';
$string['subplugintype_elangscript'] = 'معالج النصوص البرمجية';
$string['subplugintype_elangscript_plural'] = 'معالجات النصوص البرمجية';
$string['subtitleposition'] = 'عرض الترجمات المصاحبة';
$string['subtitleposition_below'] = 'أسفل الوسيط';
$string['subtitleposition_help'] = 'أين تُعرض الترجمات المصاحبة التفاعلية.

* أسفل الوسيط — يظهر النص كاملاً تحت الوسيط في منطقة تمرير خاصة به، متتبعاً التشغيل.
* على الوسيط، أسفل أو أعلى — يُرسم المقطع الجاري تشغيله فقط فوق الوسيط.

الوسيط الصوتي وحده لا صورة له ليُرسم عليها، لذا يستعمل دائماً العرض أسفل الوسيط. يبقى الإعداد نفسه محفوظاً، ويسري من جديد حالما يستعمل النشاط فيديو.';
$string['subtitleposition_overlaybottom'] = 'على الوسيط — الأسفل';
$string['subtitleposition_overlaytop'] = 'على الوسيط — الأعلى';
$string['task_migratev1activities'] = 'هجرة أنشطة الإصدار 1';
$string['transcriptheading'] = 'النص للمتعلمين';
$string['validate_cueafterend'] = '{$a->where}: ينتهي عند {$a->endtime} مللي ثانية، بعد الوسيط ({$a->duration} مللي ثانية). لا يمكن للتشغيل الوصول إليه أبداً.';
$string['validate_cueendbeforestart'] = '{$a}: النهاية ليست بعد البداية.';
$string['validate_cuewhere'] = 'المقطع {$a->sortorder} ‏({$a->cuekey})';
$string['validate_emptysolution'] = 'الحل الخاص بـ {$a} فارغ.';
$string['validate_hintlevels'] = 'مستويات التلميح الخاصة بـ {$a} ليست تسلسلاً متصلاً يبدأ من 1.';
$string['validate_negativetime'] = '{$a}: وقت البداية يسبق بداية التسجيل.';
$string['validate_nocues'] = 'لا تحتوي النسخة على مقاطع.';
$string['validate_nogaps'] = 'لا تحتوي النسخة على فراغات للإجابة عنها.';
$string['validate_nonpositivelength'] = 'يجب أن يكون طول الأحرف الخاص بـ {$a} موجباً.';
$string['validate_rangeoutside'] = 'يقع مدى الأحرف الخاص بـ {$a} خارج نصه.';
$string['validate_rangeoverlap'] = 'يتداخل مدى الأحرف الخاص بـ {$a} مع فراغ آخر.';
$string['validate_unknownalgorithm'] = 'خوارزمية التقييم «{$a->algorithm}» الخاصة بـ {$a->where} غير معروفة.';
$string['validate_where'] = 'الفراغ {$a->gapkey} في المقطع {$a->cuekey}';
$string['verify_algorithmmismatch'] = 'الفراغ {$a->gapkey}: خوارزمية التقييم هي «{$a->actual}»، والمتوقع «{$a->expected}».';
$string['verify_attemptcount'] = 'عدد المحاولات المهاجَرة هو {$a->actual}، والمتوقع {$a->expected} متعلماً مختلفاً من الإصدار 1.x.';
$string['verify_jarothreshold'] = 'عتبة مقارنة الإجابات هي {$a->actual}، والمتوقع {$a->expected}.';
$string['verify_missingattempt'] = 'المستخدم {$a}: كانت متوقعة محاولة مهاجَرة، ولم يُعثر على أي منها.';
$string['verify_missingcue'] = 'المقطع {$a}: المقطع المهاجَر مفقود.';
$string['verify_missinggap'] = 'الفراغ {$a}: الفراغ المهاجَر مفقود.';
$string['verify_missinghint'] = 'الفراغ {$a}: سمح الإصدار 1 بالمساعدة هنا، لكن لم تُهاجَر أي تلميحة.';
$string['verify_orphancue'] = 'المقطع {$a}: لم يُعثر على مقطع مقابل في الإصدار 1.';
$string['verify_orphangap'] = 'الفراغ {$a}: لم يُعثر على فراغ مقابل في الإصدار 1.';
$string['verify_rangemismatch'] = 'الفراغ {$a}: مدى الأحرف لا يطابق مصدر الإصدار 1.';
$string['verify_responsecount'] = 'المستخدم {$a->userid}: عدد الإجابات المهاجَرة هو {$a->actual}، والمتوقع {$a->expected}.';
$string['verify_solutionmismatch'] = 'الفراغ {$a->gapkey}: الحل هو «{$a->actual}»، والمتوقع «{$a->expected}».';
$string['verify_transcriptmismatch'] = 'المقطع {$a}: النص لا يطابق مصدر الإصدار 1.';
$string['verify_unexpectedhint'] = 'الفراغ {$a}: منع الإصدار 1 المساعدة هنا، لكن تمت هجرة تلميحة.';
