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
 * Strings for component 'analytics', language 'ar', version '4.4'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = '{$a->analysableid} القابل للتحليل، لم يستخدم: {$a->errors}';
$string['analysablenotvalidfortarget'] = '{$a->analysableid} القابل للتحليل، لا يصلح لهذا الهدف: {$a->result}';
$string['analysisinprogress'] = 'لا يزال يجري تحليلها من قبل تنفيذ سابق';
$string['analytics'] = 'التحليلات';
$string['analyticsdisabled'] = 'التحليلات معطلة. يمكنك تمكينها عبر الذهاب إلى "إدارة الموقع > الميزات المتقدمة".';
$string['analyticslogstore'] = 'مخزن السجل المستخدم للتحليلات';
$string['analyticslogstore_help'] = 'مخزن سجلات التوثيق الذي سيتم استعماله من قبل واجهة برمجة تطبيقات التحليلات لقراءة أنشطة المستخدمين';
$string['analyticssettings'] = 'إعدادات التحليلات';
$string['analyticssiteinfo'] = 'معلومات الموقع';
$string['calclifetime'] = 'الإبقاء على حسابات التحليلات من أجل';
$string['configlcalclifetime'] = 'هذا يحدد الفترة الزمنية التي تريد فيها الإبقاء على بيانات الحسابات - هذا لن يحذف التنبؤات، ولكنه يحذف البيانات المستعملة لتوليد التنبؤات. استعمال الخيار الافتراضي هنا هو الأفضل لأنه يبقيك مسيطراً على إدارة مساحة التخزين، مع ذلك، إذا كنت تستعمل جداول الحسابات لأغراض أخرى، فقد ترغب بزيادة هذه القيمة.';
$string['defaultpredictionsprocessor'] = 'معالج التنبؤات الافتراضي';
$string['defaultpredictoroption'] = 'المعالج الافتراضي ({$a})';
$string['defaulttimesplittingmethods'] = 'فترات التحليل الافتراضية لتقييم المكون';
$string['defaulttimesplittingmethods_help'] = 'فترات التحليل تُعرِّف للنظام متى عليه إحتساب التنبؤات وتدله على أجزاء سجلات التوثيق العائدة لأي نشاط والتي عليه أخذها بعين الاعتبار عند الشروع بتلك الحسابات. إن عملية تقييم المكونات ستستمر بالتتابع خلال فترات التحليل تلك ما لم يتم تحديد فترة تحليل معينة لها.';
$string['disabledmodel'] = 'نموذج معطل';
$string['erroralreadypredict'] = 'تم استخدام الملف {$a} سابقا لتوليد التوقعات.';
$string['errorcannotreaddataset'] = 'ملف البيانات {$a} تتعذر قراءته.';
$string['errorcannotusetimesplitting'] = 'فترة التحليل المعطاة لا يمكن استعمالها لهذا المكون.';
$string['errorcannotwritedataset'] = 'ملف البيانات {$a} تتعذر كتابته.';
$string['errorexportmodelresult'] = 'لا يمكن تصدير نموذج التعلم الآلي.';
$string['errorimport'] = 'خطأ في استيراد ملف JSON المقدم.';
$string['errorimportmissingclasses'] = 'لا تتوفر مكونات التحليلات التالية على هذا الموقع: {$a-> missingclasses}.';
$string['errorimportmissingcomponents'] = 'يتطلب النموذج المقدم تنصيب الملاحق الآتية: {$a}. لاحظ أن الإصدارات لا تحتاج بالضرورة إلى التطابق مع الإصدارات المنصبة في موقعك. تنصيب الملحق بالإصدار نفسه أو الأحدث منه سيكون أمراً حسناً في معظم الحالات.';
$string['errorimportversionmismatches'] = 'يختلف إصدار المكونات التالية عن الإصدار المثبت على هذا الموقع: {$a}. يمكنك استخدام الخيار "تجاهل عدم تطابق الإصدار" لتجاهل هذه الاختلافات.';
$string['errorinvalidcontexts'] = 'بعض السياقات المختارة لا يمكن استعمالها لهذا الغرض.';
$string['errorinvalidindicator'] = '{$a} مؤشر غير صالح';
$string['errorinvalidtarget'] = 'هدف {$a} غير صالح';
$string['errorinvalidtimesplitting'] = 'فترة التحليل غير صالحة؛ لطفاً، تأكد من وضع الاسم المؤهل الكامل للصنف.';
$string['errornocontextrestrictions'] = 'المقصد المختار لا يدعم تقييدات السياق';
$string['errornoexportconfig'] = 'كانت هناك مشكلة في تصدير تكوين النموذج.';
$string['errornoexportconfigrequirements'] = 'المكونات اللاثابتة ذات فترات التحليل حصراً يمكن تصديرها.';
$string['errornoindicators'] = 'هذا النموذج ليس لديه أي مؤشرات.';
$string['errornopredictresults'] = 'معالج التنبؤات لم يظهر أي نتائج. تأكد من محتويات دليل الإخراج لمزيد من المعلومات.';
$string['errornoroles'] = 'لم يتم تحديد أدوار الطلاب أو المعلمين. حددهم في صفحة إعدادات التحليلات.';
$string['errornotarget'] = 'هذا النموذج ليس لديه أي هدف.';
$string['errornotimesplittings'] = 'هذا المكون ليس لديه فترة تحليل خاصة به.';
$string['errorpredictioncontextnotavailable'] = 'لم يعد سياق التنبؤ هذا متاحاً.';
$string['errorpredictionformat'] = 'تصميم خاطئ لحسابات التنبؤ';
$string['errorpredictionnotfound'] = 'التنبؤ غير موجود';
$string['errorpredictionsprocessor'] = 'خطأ في معالج التنبؤات: {$a}';
$string['errorpredictwrongformat'] = 'لا يمكن فك شفرة عودة معالج التنبؤات: "{$a}"';
$string['errorprocessornotready'] = 'معالج التنبؤات المحدد ليس جاهزًا: {$a}';
$string['errorsamplenotavailable'] = 'عينة التنبؤ لم تعد متوفرة.';
$string['errorunexistingmodel'] = 'نموذج غير موجود {$a}';
$string['errorunexistingtimesplitting'] = 'فترة التحليل المختارة غير متوفرة.';
$string['errorunknownaction'] = 'إجراء غير معروف';
$string['eventinsightsviewed'] = 'رؤى تمت مشاهدتها';
$string['eventpredictionactionstarted'] = 'عملية تنبؤ تم بدؤها';
$string['fixedack'] = 'القبول';
$string['incorrectlyflagged'] = 'مُعلَّم خطأً';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'النظام أنشأ لك بعض الرؤى.';
$string['insightinfomessageplain'] = 'النظام أعطاك رؤية: {$a}';
$string['insightmessagesubject'] = 'رؤية جديدة لـ "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'لا يمكن تحليلها باستعمال فترة التحليل {$a}.';
$string['invalidtimesplitting'] = 'النموذج ذو المعرّف {$a} يحتاج إلى فترة تحليل قبل استعماله لأغراض التدريب.';
$string['levelinstitution'] = 'مستوى التعليم';
$string['levelinstitutionisced0'] = 'التعليم في مرحلة الطفولة المبكرة (\'أدنى من التعليم الابتدائي\' كتحصيل تعليمي)';
$string['levelinstitutionisced1'] = 'التعليم الابتدائي';
$string['levelinstitutionisced2'] = 'التعليم الثانوي الأدنى';
$string['levelinstitutionisced3'] = 'التعليم الثانوي العالي';
$string['levelinstitutionisced4'] = 'التعليم بعد الثانوي غير الجامعي (قد يشمل تدريب الشركات أو المجتمع / المنظمات غير الحكومية)';
$string['levelinstitutionisced5'] = 'التعليم قصير الأمد (قد يشمل تدريب الشركات أو المجتمع / المنظمات غير الحكومية)';
$string['levelinstitutionisced6'] = 'البكالوريوس أو ما يعادلها من مستوى';
$string['levelinstitutionisced7'] = 'الماجستير أو ما يعادلها من مستوى';
$string['levelinstitutionisced8'] = 'الدكتوراه أو ما يعادلها من مستوى';
$string['modeinstruction'] = 'طرق التدريس';
$string['modeinstructionblendedhybrid'] = 'المخلوط أو الهجين';
$string['modeinstructionfacetoface'] = 'وجهاً لوجه';
$string['modeinstructionfullyonline'] = 'على الانترنت بالكامل';
$string['modeloutputdir'] = 'مجلد تخريج النماذج';
$string['modeloutputdirwithdefaultinfo'] = 'المجلد الذي تحفظ فيه معالجات التنبؤ كل بيانات التقييم. مفيد لأغراض تصحيح الأخطاء والبحث. إذا كان خالياً، سيتم استعمال {$a} بمثابة الافتراضي.';
$string['modeltimelimit'] = 'الوقت الأقصى لتحليل كل نموذج';
$string['modeltimelimitinfo'] = 'يحدد هذا الإعداد الوقت الذي يقضيه كل نموذج في تحليل محتويات الموقع.';
$string['neutral'] = 'حيادي';
$string['neverdelete'] = 'لا تحذف الحسابات أبداً';
$string['nocourses'] = 'لا توجد مقررات دراسية لتحليل';
$string['nodata'] = 'لا توجد بيانات لتحليلها';
$string['noevaluationbasedassumptions'] = 'لا يمكن تقييم النماذج القائمة على الافتراضات.';
$string['noinsights'] = 'لم يتم الإبلاغ عن أي رؤى';
$string['noinsightsmodel'] = 'هذا النموذج لا يولد افكار';
$string['nonewdata'] = 'لا توجد بيانات جديدة متاحة. سيتم تحليل النموذج بعد فترة التحليل القادمة.';
$string['nonewranges'] = 'لا توجد تنبؤات جديدة حتى الآن. سيتم تحليل النموذج بعد فترة التحليل القادمة.';
$string['nopredictionsyet'] = 'لا توجد توقعات متاحة حتى الآن';
$string['noranges'] = 'لا توجد توقعات حتى الآن';
$string['notapplicable'] = 'غير مطبق';
$string['notrainingbasedassumptions'] = 'لا تحتاج النماذج القائمة على الافتراضات إلى التدريب';
$string['notuseful'] = 'غير مفيد';
$string['novaliddata'] = 'لا توجد بيانات صالحة متاحة';
$string['novalidsamples'] = 'لا توجد عينات صالحة المتاحة';
$string['onlycli'] = 'تنفيذ معالجة التحليلات من خلال سطر الأوامر فقط';
$string['onlycliinfo'] = 'عمليات التحليل مثل تقييم النماذج أو تدريب خوارزميات تعلم الآلة أو الحصول على تنبؤات يمكن أن تستغرق بعض الوقت. يتم ترك تشغيلها على عاتق مشغل الوظائف الدورية أو فرضها عبر سطر الأوامر. إذا تم تعطيلها بشكلها الآلي، فيمكن تشغيلها يدوياً عبر واجهة الويب.';
$string['percentonline'] = 'النسبة المئوية للإنترنت';
$string['percentonline_help'] = 'إذا كانت مؤسستك تقدم مقررات دراسية مختلطة أو هجينة، فما هي نسبة ما ينجزه الطلاب عبر الإنترنت في مودل؟ أدخل رقماً يتراوح بين 0 و 100.';
$string['predictionsprocessor'] = 'معالج التنبؤات';
$string['predictionsprocessor_help'] = 'معالج التنبؤات هو الخلفية للتعلم الآلي التي تعالج مجموعات البيانات الناتجة عن حساب مؤشرات ومقاصد النماذج. كل نموذج يمكنه استعمال معالج مختلف. ما تحدده هنا سيكون بمثابة المعالج الافتراضي.';
$string['privacy:metadata:analytics:analyticsmodels'] = 'نماذج التحليلات';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'المستخدم الذي قام بتعديل النموذج';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'سجل الوقوعات المستعمل مع نماذج التحليلات';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'المستخدم الذي قام بتعديل السجل';
$string['privacy:metadata:analytics:indicatorcalc'] = 'حسابات المؤشر';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'السياق';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'نهاية وقت الحساب';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'درجة آلة حاسبة مؤشر';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'الرقم التعريفي للعينة';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'الجدول الأصلي للعينة';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'بداية وقت الحساب';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'متى تم التنبؤ';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'القيمة المحسوبة';
$string['privacy:metadata:analytics:predictionactions'] = 'إجراءات التنبؤ';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'اسم الإجراء';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'مُعرَّف التنبؤ';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'متى تم تنفيذ إجراء التنبؤ';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'المستخدم الذي اتخذ الإجراء';
$string['privacy:metadata:analytics:predictions'] = 'التنبؤات';
$string['privacy:metadata:analytics:predictions:calculations'] = 'حسابات المؤشر';
$string['privacy:metadata:analytics:predictions:contextid'] = 'السياق';
$string['privacy:metadata:analytics:predictions:modelid'] = 'مُعرَّف النموذج';
$string['privacy:metadata:analytics:predictions:prediction'] = 'التنبؤ';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'درجة التنبؤ';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'فهرس فترة التحليل';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'مُعرَّف للعينة';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'متى تم التنبؤ';
$string['privacy:metadata:analytics:predictions:timeend'] = 'وقت انتهاء الحسابات';
$string['privacy:metadata:analytics:predictions:timestart'] = 'وقت بدء الحسابات';
$string['processingsitecontents'] = 'معالجة محتويات الموقع';
$string['successfullyanalysed'] = 'تم تحليلها بنجاح';
$string['timesplittingmethod'] = 'فترة التحليل';
$string['timesplittingmethod_help'] = 'فترات التحليل تُعرِّف للنظام متى عليه إحتساب التنبؤات وتدله على أجزاء سجلات التوثيق العائدة لأي نشاط والتي عليه أخذها بعين الاعتبار عند الشروع بتلك الحسابات. على سبيل المثال، يمكن تقسيم فترة المقرر إلى أجزاء، بحيث تحصل على التنبؤات عند انتهاء كل جزء منها.';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'نوع المؤسسة';
$string['typeinstitutionacademic'] = 'أكاديمي';
$string['typeinstitutionngo'] = 'منظمة غير حكومية';
$string['typeinstitutiontraining'] = 'تدريبي لموظفي الشركات';
$string['useful'] = 'مفيدة';
$string['viewdetails'] = 'عرض التفاصيل';
$string['viewinsight'] = 'معاينة الرؤية';
$string['viewinsightdetails'] = 'معاينة تفاصيل الرؤية';
$string['viewprediction'] = 'مشاهدة تفاصيل التنبؤ';
$string['washelpful'] = 'هل كان هذا مفيداً؟';
