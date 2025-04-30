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
 * Strings for component 'tool_analytics', language 'ar', version '4.4'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'الدقة';
$string['actionexecutedgroupedusefulness'] = 'إجراءات مجمعة';
$string['actions'] = 'إجراءات';
$string['actionsexecutedbyusers'] = 'الإجراءات المنفذة من قبل المستخدمين';
$string['actionsexecutedbyusersfor'] = 'الإجراءات المنفذة من قبل المستخدمين لنموذج "{$a}"';
$string['allpredictions'] = 'كل التنبؤات';
$string['alltimesplittingmethods'] = 'كل فترات التحليل';
$string['analysingsitedata'] = 'تحليل الموقع';
$string['analysis'] = 'التحليل';
$string['analyticmodels'] = 'نماذج التحليلات';
$string['bettercli'] = 'قد يتضمن تقييم النماذج وتوليد التنبؤات معالجة ثقيلة. يوصى بتشغيل هذه الإجراءات من سطر الأوامر.';
$string['cantguessenddate'] = 'لا يمكن تخمين تاريخ الانتهاء';
$string['cantguessstartdate'] = 'لا يمكن تخمين تاريخ البدء';
$string['classdoesnotexist'] = 'الصنف {$a} غير موجود';
$string['clearmodelpredictions'] = 'هل أنت متأكد من رغبتك في إخلاء كل تنبؤات "{$a}"؟';
$string['clearpredictions'] = 'إخلاء التنبؤات';
$string['clienablemodel'] = 'يمكنك تمكين النموذج عبر اختيار فترة التحليل بمُعرَّفها. لاحظ أن بإمكانك أيضاً تمكينها لاحقاً باستعمال واجهة الويب (\'لا شيء\' للخروج).';
$string['clievaluationandpredictions'] = 'تتناوب المهمة المجدولة ما بين النماذج الممَكَّنة وتحصل على التنبؤات. تم تعطيل تقييم النماذج عبر واجهة الويب. يمكنك السماح بتنفيذ هذه العمليات يدوياً عبر واجهة الويب عن طريق تعطيل إعداد التحليلات <a href="{$a}">\'من سطر الأوامر فقط\'</a>.';
$string['clievaluationandpredictionsnoadmin'] = 'تتناوب المهمة المجدولة ما بين النماذج الممَكَّنة وتحصل على التنبؤات. تم تعطيل تقييم النماذج عبر واجهة الويب. يمكن تمكينها من قبل المشرف على الموقع.';
$string['component'] = 'المكوِّن';
$string['componentcore'] = 'النواة';
$string['componentselect'] = 'حدد جميع النماذج المقدمة من قبل المكوِّن \'{$a}\\';
$string['componentselectnone'] = 'إلغاء تحديد الكل';
$string['contexts'] = 'السياق';
$string['contexts_help'] = 'سيكون النموذج مقتصراً على هذه المجموعة من السياقات. لن يتم تطبيق أي تقييدات للسياقات إذا لم يتم تحديد أيٍّ منها.';
$string['createmodel'] = 'أنشئ نموذج';
$string['currenttimesplitting'] = 'فترة التحليل الحالية';
$string['delete'] = 'إحذف';
$string['deletemodelconfirmation'] = 'هل أنت متأكد من رغبتك في حذف "{$a}"؟ لا يمكن التراجع عن هذه التغييرات.';
$string['disabled'] = 'معطَّل';
$string['editmodel'] = 'تحرير نموذج "{$a}"';
$string['edittrainedwarning'] = 'لقد تم تدريب هذا النموذج سابقاً. لاحظ أن تغيير مؤشراته أو فترة تحليله سيؤدي إلى حذف تنبؤاته السابقة والشروع بتوليد تنبؤات جديدة.';
$string['enabled'] = 'مُمَكَّن';
$string['errorcantenablenotimesplitting'] = 'ينبغي عليك تحديد فترة التحليل قبل تمكين النموذج';
$string['errornoenabledandtrainedmodels'] = 'لا توجد نماذج مُمَكَّنة ومدربة للتنبؤ.';
$string['errornoenabledmodels'] = 'لا توجد نماذج مُمَكَّنة لتدريبها.';
$string['errornoexport'] = 'يمكن تصدير النماذج المدرّبة فقط';
$string['errornostaticevaluated'] = 'لا يمكن تقييم النماذج القائمة على الافتراضات. هي دائما صحيحة 100 ٪ وفقاً للطريقة التي تم تعريفها بها.';
$string['errornostaticlog'] = 'لا يمكن تقييم النماذج القائمة على الافتراضات لعدم وجود سجل أداء.';
$string['erroronlycli'] = 'لا يُسمح بالتنفيذ إلا عبر سطر الأوامر';
$string['errortrainingdataexport'] = 'تعذر تصدير بيانات تدريب النموذج';
$string['evaluate'] = 'تقييم';
$string['evaluatemodel'] = 'تقييم النموذج';
$string['evaluationinbatches'] = 'يتم حساب محتويات الموقع وتخزينها على دفعات. قد تتوقف عملية التقييم في أيّ وقت. عند تشغيله القادم، ستتابع من النقطة التي توقفت عندها.';
$string['evaluationmode'] = 'نمط التقييم';
$string['evaluationmode_help'] = 'هناك نمطان للتقييم:

* نموذج مُدَرَّب - يتم استعمال بيانات الموقع كبيانات اختبار لتقييم دقة النموذج المدرب.
* التهيئة - يتم تقسيم بيانات الموقع إلى بيانات تدريب وبيانات اختبار، وذلك لتدريب واختبار دقة تهيئة النموذج.

يتوفر النموذج المدرب فقط إذا تم استيراد نموذج مدرب إلى الموقع، ولم تتم إعادة تدريبه بعد باستعمال بيانات الموقع.';
$string['evaluationmodecolconfiguration'] = 'التهيئة';
$string['evaluationmodecoltrainedmodel'] = 'نموذج مُدَرَّب';
$string['evaluationmodeconfiguration'] = 'تقييم تهيئة النموذج';
$string['evaluationmodeinfo'] = 'تم استيراد هذا النموذج إلى الموقع. يمكنك إما تقييم أداء النموذج، أو يمكنك تقييم أداء تهيئة النموذج باستعمال بيانات الموقع.';
$string['evaluationmodetrainedmodel'] = 'تقييم النموذج المُدَرَّب';
$string['executescheduledanalysis'] = 'نفذ التحليل المجدوَل';
$string['export'] = 'تصدير';
$string['exportincludeweights'] = 'تضمين أوزان النموذج المُدَرَّب';
$string['exportmodel'] = 'تصدير التهيئة';
$string['exporttrainingdata'] = 'تصدير بيانات التدريب';
$string['extrainfo'] = 'المعلومات';
$string['generalerror'] = 'خطأ في التقييم. ترميز الحالة {$a}';
$string['goodmodel'] = 'هذا نموذج جيد للحصول على تنبؤات.
قم بتمكينه للحصول على التنبؤات.';
$string['ignoreversionmismatches'] = 'تجاهل عدم تطابق الإصدار';
$string['ignoreversionmismatchescheckbox'] = 'تجاهل الاختلافات بين إصدار الموقع هذا وإصدار الموقع الأصلي.';
$string['importedsuccessfully'] = 'تم استيراد النموذج بنجاح.';
$string['importmodel'] = 'استورد النموذج';
$string['indicators'] = 'المؤشرات';
$string['indicators_help'] = 'المؤشرات هي ما تعتقد أنها ستؤدي إلى تنبؤ دقيق للهدف.';
$string['indicators_link'] = 'Indicators';
$string['indicatorsnum'] = 'عدد المؤشرات: {$a}';
$string['info'] = 'المعلومات';
$string['insights'] = 'الرؤى';
$string['insightsreport'] = 'تقرير الرؤى';
$string['invalidanalysables'] = 'عناصر الموقع غير صالحة';
$string['invalidanalysablesinfo'] = 'تسرد هذه الصفحة العناصر القابلة للتحليل والتي لا يمكن استعمالها من قبل نموذج التنبؤ هذا. لا يمكن استعمال العناصر المدرجة لتدريب نموذج التنبؤ ولا يمكن لنموذج التنبؤ الحصول على تنبؤات لها.';
$string['invalidanalysablestable'] = 'جدول العناصر القابلة للتحليل، غير الصحيحة في الموقع';
$string['invalidcurrenttimesplitting'] = 'فترة التحليل الحالية غير صحيحة بالنسبة إلى مقصد هذا النموذج. لطفاً، إختر فترة تحليل مختلفة.';
$string['invalidindicatorsremoved'] = 'لقد تمت إضافة نموذج جديد. المؤشرات التي لا تعمل مع المقصد المحدد تمت إزالتها تلقائياً.';
$string['invalidprediction'] = 'لا يصلح للحصول على تنبؤات';
$string['invalidtimesplitting'] = 'فترة التحليل المحددة غير صحيحة بالنسبة إلى المقصد المحدد.';
$string['invalidtimesplittinginmodels'] = 'فترة التحليل المستعملة من قبل بعض النماذج غير صحيحة. لطفاً، إختر فترة مختلفة للنماذج الآتية: {$a}';
$string['invalidtraining'] = 'لا يصلح لتدريب النموذج';
$string['loginfo'] = 'سجِّل معلومات إضافية';
$string['missingmoodleversion'] = 'الملف المستورد لا يحدد رقم الإصدار';
$string['modelid'] = 'معرف النموذج';
$string['modelinvalidanalysables'] = 'عناصر قابلة للتحليل غير صالحة لنموذج "{$a}"';
$string['modelname'] = 'اسم النموذج';
$string['modelresults'] = 'نتائج {$a}';
$string['modeltimesplitting'] = 'فترة التحليل';
$string['newmodel'] = 'نموذج جديد';
$string['nextpage'] = 'الصفحة التالية';
$string['noactionsfound'] = 'لم يقم المستخدمون بتنفيذ أي إجراءات بما تم توليده من رؤى.';
$string['nodatatoevaluate'] = 'لا توجد بيانات لتقييم النموذج';
$string['nodatatopredict'] = 'لا عناصر جديدة للحصول على تنبؤات لها.';
$string['nodatatotrain'] = 'لا توجد بيانات جديدة يمكن استعمالها للتدريب.';
$string['noinvalidanalysables'] = 'لا يحتوي هذا الموقع على أية عناصر قابلة للتحليل غير صالحة.';
$string['notdefined'] = 'لم يحدد بعد';
$string['pluginname'] = 'نماذج تحليلية';
$string['predictionprocessfinished'] = 'انتهت عملية التنبؤ';
$string['predictionresults'] = 'نتائج التنبؤ';
$string['predictmodels'] = 'تنبأ النماذج';
$string['predictorresultsin'] = 'تم تسجيل معلومات التنبؤ في المجلد {$a}';
$string['previouspage'] = 'الصفحة السابقة';
$string['privacy:metadata'] = 'إن ملحق نماذج التحليل لا يخزن أي بيانات شخصية.';
$string['restoredefault'] = 'استعادة النماذج الافتراضية';
$string['restoredefaultempty'] = 'يرجى اختيار النماذج لاستعادتها.';
$string['restoredefaultinfo'] = 'هذه النماذج الافتراضية مفقودة أو تغيرت منذ تنصيبها. يمكنك استعادة النماذج الافتراضية المحددة.';
$string['restoredefaultnone'] = 'تم إنشاء جميع النماذج الافتراضية التي توفرها إضافات النواة المركزية والإضافات المنصبة. لم يتم العثور على نماذج جديدة؛ لا يوجد شيء للاستعادة.';
$string['restoredefaultsome'] = 'تم إعادة إنشاء {$a->count} نموذج/نماذج جديدة بنجاح.';
$string['restoredefaultsubmit'] = 'استعادة المحددة';
$string['sameenddate'] = 'تاريخ الانتهاء الحالي جيد';
$string['samestartdate'] = 'تاريخ البدء الحالي جيد';
$string['scheduledanalysisresults'] = 'النتائج التي تستعمل فترة التحليل {$a->name}';
$string['scheduledanalysisresultscli'] = 'النتائج التي تستعمل فترة التحليل {$a->name} (المُعرَّف: {$a->id})';
$string['selecttimesplittingforevaluation'] = 'إختر فترة التحليل التي تريد استعمالها لتقييم تهيئة النموذج.';
$string['target'] = 'المقصد';
$string['target_help'] = 'المقصد هو ما سيتنبأ به النموذج.';
$string['target_link'] = 'الأهداف';
$string['timesplittingnotdefined'] = 'لم يتم تعريف فترة التحليل.';
$string['timesplittingnotdefined_help'] = 'ينبغي عليك تحديد فترة التحليل قبل تمكين النموذج.';
$string['trainandpredictmodel'] = 'تدريب النموذج وحساب التنبؤات';
$string['trainingprocessfinished'] = 'انتهت عملية التدريب';
$string['trainingresults'] = 'نتائج التدريب';
$string['trainmodels'] = 'تدريب النماذج';
$string['versionnotsame'] = 'الملف المستورد كان من إصدار مختلف ({$a->importedversion}) عن الإصدار الحالي ({$a->version})';
$string['viewlog'] = 'سجل التقييم';
$string['weeksenddateautomaticallyset'] = 'تاريخ الانتهاء المحدد تلقائياً بناءً على تاريخ البدء وعدد المقاطع';
$string['weeksenddatedefault'] = 'تاريخ الانتهاء المحسوب تلقائياً من تاريخ بدء المقرر.';
