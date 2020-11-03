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
 * Strings for component 'quiz_statistics', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   quiz_statistics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'الاستجابة الفعلية';
$string['allattempts'] = 'كل المحاولات';
$string['allattemptsavg'] = 'العلامة المتوسطة لكل المحاولات';
$string['allattemptscount'] = 'العدد الكلي للمحاولات المكتملة التي تم منح علاماتها';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = 'تباين ({$a->number}) "{$a->name}" {$a->variant}';
$string['analysisofresponses'] = 'تحليل الاستجابات';
$string['analysisofresponsesfor'] = 'تحليل الاستجابات لـ {$a}';
$string['analysisvariant'] = 'تباين "{$a->name}" {$a->variant}';
$string['attempts'] = 'المحاولات';
$string['attemptsall'] = 'كل المحاولات';
$string['attemptsfirst'] = 'المحاولة الأولى';
$string['backtoquizreport'] = 'عودة إلى صفحة تقرير الإحصائيات الرئيسية';
$string['calculatefrom'] = 'حساب الإحصائيات من';
$string['calculatingallstats'] = 'حساب الإحصائيات للاختبار، الأسئلة وتحليل بيانات الاستجابة';
$string['cic'] = 'معامل الاتساق الداخلي (لـ{$a})';
$string['completestatsfilename'] = 'حالات كاملة';
$string['count'] = 'العدد';
$string['counttryno'] = 'عدّ المحاولة {$a}';
$string['coursename'] = 'اسم المساق';
$string['detailedanalysis'] = 'تحليل أكثر تفصيلاً لاستجابات هذا السؤال';
$string['detailedanalysisforvariant'] = 'تحليل أكثر تفصيلاً للاستجابات على التباين {$a} لهذا السؤال';
$string['discrimination_index'] = 'مؤشر التمييز';
$string['discriminative_efficiency'] = 'كفاءة التمييز';
$string['downloadeverything'] = 'تنزيل التقرير بالكامل بصيغة';
$string['duration'] = 'مفتوح لمدة';
$string['effective_weight'] = 'الوزن المؤثر';
$string['errordeleting'] = 'خطأ في حذف سجلات {$a} القديمة.';
$string['errormedian'] = 'خطأ في جلب الوسيط';
$string['errorpowerquestions'] = 'خطأ جلب البيانات لحساب التباين لدرجات السؤال';
$string['errorpowers'] = 'خطأ عند جلب البيانات لحساب التباين في درجات الاختبار';
$string['errorrandom'] = 'خطأ في الحصول على بيانات البند الفرعي';
$string['errorratio'] = 'معدل الأخطاء (ل{$a})';
$string['errorstatisticsquestions'] = 'خطأ في جلب البيانات لحساب إحصائيات درجات السؤال';
$string['facility'] = 'مؤشر السهولة';
$string['firstattempts'] = 'أول المحاولات';
$string['firstattemptsavg'] = 'متوسط الدرجات للمحاولة الأولى';
$string['firstattemptscount'] = 'عدد المحاولات الأولى الكاملة والمُصحَّحة';
$string['frequency'] = 'التكرار';
$string['highestattempts'] = 'أعلى محاولة تم تصحيحها';
$string['highestattemptsavg'] = 'متوسط درجة أعلى محاولات مقيّمة';
$string['intended_weight'] = 'الوزن المقصود';
$string['kurtosis'] = 'نقاط توزيع التفرطح (ل{$a})';
$string['lastattempts'] = 'آخر محاولة';
$string['lastattemptsavg'] = 'متوسط درجة المحاولات الأخيرة';
$string['lastcalculated'] = 'آخر حساب {$a->lastcalculated} قبل هذا كانت هناك {$a->count}. محاولات منذ ذلك الحين.';
$string['maximumfacility'] = 'أقصى سهولة';
$string['median'] = 'وسيط الدرجة (ل{$a})';
$string['medianfacility'] = 'وسيط السهولة';
$string['minimumfacility'] = 'أدنى سهولة';
$string['modelresponse'] = 'استجابة النموذج';
$string['nameforvariant'] = 'التباين {$a->variant} من {$a->name}';
$string['negcovar'] = 'التباين السلبي للدرجة مع إجمالي درجة المحاولة';
$string['negcovar_help'] = 'إن درجة هذا السؤال لهذا العدد من المحاولات على هذا الاختبار يختلف في الاتجاه المعاكس .. لأن درجة المحاولات الإجمالية تميل إلى أن تكون أقل من المتوسط في درجة هذا السؤال .. و هو فوق المتوسط و العكس بالعكس.
لدينا لا يمكن حساب المعادلة بطريقة فعالة لوزن السؤال في هذه الحالة. حسابات وزن السؤال فعالة للأسئلة الأخرى في هذا الاختبار، الوزن الفعلي للسؤال لهذه الأسئلة إذا أعطيت الأسئلة سلط الضوء مع التباين السلبي على درجة الحد الأقصى عن الصفر.
إذا قمت بتحرير هذا الاختبار و إعطاء هؤلاء السؤال مع التباين السلبي على الدرجة كحد أقصى من الصفر فإن وزن السؤال الفعلي لهذه الأسئلة يكون صفرا و الثقل الحقيقي للسؤال الفعال من الأسئلة الأخرى سيتم وفقا للحسابات الآنية.';
$string['nogradedattempts'] = 'لم يتم إجراء أي محاولات للإجابة على هذا الاختبار، أو أن كل المحاولات هي لأسئلة تحتاج إلى التصحيح اليدوي.';
$string['nostudentsingroup'] = 'لا يوجد طلاب في هذه المجموعة حتى الآن';
$string['optiongrade'] = 'الرصيد الجزئي';
$string['partofquestion'] = 'جزء من السؤال';
$string['pluginname'] = 'الإحصائيات';
$string['position'] = 'الموضع';
$string['positions'] = 'المواضع';
$string['privacy:metadata'] = 'على الرغم من أن ملحق إحصائيات الاختبار يحتوي على جداول قاعدة بيانات، فإن بياناته هي بيانات مجمّعة ولا تصف الأشخاص بشكل فردي.';
$string['questioninformation'] = 'معلومات السؤال';
$string['questionname'] = 'اسم السؤال';
$string['questionnumber'] = 'س #';
$string['questionstatistics'] = 'إحصائيات السؤال';
$string['questionstatsfilename'] = 'احصائيات السؤال';
$string['questiontype'] = 'نوع السؤال';
$string['quizinformation'] = 'معلومات الاختبار';
$string['quizname'] = 'اسم الاختبار';
$string['quizoverallstatistics'] = 'إحصاءات الاختبار الكاملة';
$string['quizstatisticscleanuptask'] = 'تنظيف سجلات الخبء القديمة لإحصائيات الاختبار';
$string['quizstructureanalysis'] = 'تحليل بنية الاختبار';
$string['random_guess_score'] = 'درجة التخمين العشوائي';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'نطاق إحصائيات هذه الأسئلة';
$string['recalculatenow'] = 'إعادة حساب الدرجات الآن';
$string['reportsettings'] = 'إعدادات حساب الإحصائيات';
$string['response'] = 'الاستجابة';
$string['skewness'] = 'انحراف توزيع الدرجة (ل{$a})';
$string['slotstructureanalysis'] = 'التحليل الهيكلي للسؤال المرقم {$a}';
$string['standarddeviation'] = 'الانحراف المعياري (ل{$a})';
$string['standarddeviationq'] = 'الانحراف المعياري';
$string['standarderror'] = 'الخطأ المعياري (ل{$a})';
$string['statistics'] = 'الإحصائيات';
$string['statistics:componentname'] = 'تقرير عن إحصاءات الاختبار';
$string['statisticsreport'] = 'تقرير الإحصاءات';
$string['statisticsreportgraph'] = 'إحصائيات عن مواضع الأسئلة';
$string['statistics:view'] = 'معاينة تقرير الإحصائيات';
$string['statsfor'] = 'إحصاءات الاختبار  (لـ{$a})';
$string['variant'] = 'التباين';
$string['viewanalysis'] = 'معاينة التفاصيل';
$string['whichtries'] = 'تحليل الاستجابات لـ';
