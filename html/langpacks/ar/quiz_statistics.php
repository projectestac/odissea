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
 * Strings for component 'quiz_statistics', language 'ar', version '3.8'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'الاستجابات الفعلية';
$string['allattempts'] = 'كل المحاولات';
$string['allattemptsavg'] = 'الدرجة المتوسطة لجميع المحاولات';
$string['allattemptscount'] = 'إجمالي عدد المحاولات الكاملة و المقيمة';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a- number}) "{$a->name}" تباين {$a->variant}';
$string['analysisofresponses'] = 'تحليل الاستجابات';
$string['analysisofresponsesfor'] = 'تحليل الاستجابات لــ {$a}.';
$string['analysisvariant'] = 'تباين "{$a->name}" {$a->variant}';
$string['attempts'] = 'المحاولات';
$string['attemptsall'] = 'كل المحاولات';
$string['attemptsfirst'] = 'المحاولة الأولى';
$string['backtoquizreport'] = 'عودة إلى صفحة تقرير الإحصائيات الرئيسية';
$string['calculatefrom'] = 'احسب الإحصاءات من';
$string['calculatingallstats'] = 'حساب إحصاءات الاختبار و الأسئلة و تحليل بيانات الاستجابة';
$string['cic'] = 'معامل الاتساق الداخلي (لـ{$a})';
$string['completestatsfilename'] = 'حالات كاملة';
$string['count'] = 'العدد';
$string['counttryno'] = 'عدّ المحاولة  {$a}';
$string['coursename'] = 'اسم المقرر الدراسي';
$string['detailedanalysis'] = 'تحليل أكثر تفصيلاً للاستجابات على هذا السؤال';
$string['detailedanalysisforvariant'] = 'تحليل أكثر تفصيلاً للاستجابات على البديل {$a} لهذا السؤال';
$string['discrimination_index'] = 'مؤشر التمييز';
$string['discriminative_efficiency'] = 'كفاءة التمييز';
$string['downloadeverything'] = 'تحميل التقرير بالكامل بصيغة {$a->formatsmenu} {$a->downloadbutton}';
$string['duration'] = 'افتح لـ';
$string['effective_weight'] = 'الوزن المؤثر';
$string['errordeleting'] = 'خطأ في حذف السجلات {$a} القديمة.';
$string['errormedian'] = 'خطأ في جلب الوسيط';
$string['errorpowerquestions'] = 'خطأ جلب البيانات لحساب التباين لدرجات السؤال';
$string['errorpowers'] = 'خطأ جلب البيانات لحساب التباين في درجات الاختبار';
$string['errorrandom'] = 'خطأ في الحصول على بيانات البند الفرعي';
$string['errorratio'] = 'معدل الأخطاء (لــ {$a})';
$string['errorstatisticsquestions'] = 'خطأ جلب البيانات لحساب إحصاءات درجات السؤال';
$string['facility'] = 'مؤشر السهولة';
$string['firstattempts'] = 'أول المحاولات';
$string['firstattemptsavg'] = 'متوسط درجة المحاولات الأولى';
$string['firstattemptscount'] = 'عدد المحاولات الأولى المكتملة التقييم';
$string['frequency'] = 'التكرار';
$string['highestattempts'] = 'أعلى محاولة مقيّمة';
$string['highestattemptsavg'] = 'متوسط درجة أعلى محاولات مقيّمة';
$string['intended_weight'] = 'الوزن المعد';
$string['kurtosis'] = 'نقاط توزيع التفرطح  ( لـ {$a})';
$string['lastattempts'] = 'آخر محاولة';
$string['lastattemptsavg'] = 'متوسط درجة المحاولات الأخيرة';
$string['lastcalculated'] = 'آخر حساب {$a->lastcalculated} قبل هذا كانت هناك {$a->count}. محاولات منذ ذلك الحين.';
$string['maximumfacility'] = 'أعلى السهولة';
$string['median'] = 'وسيط الدرجة  (لـ {$a})';
$string['medianfacility'] = 'وسيط السهولة';
$string['minimumfacility'] = 'أدنى السهولة';
$string['modelresponse'] = 'نموذج الاستجابة';
$string['nameforvariant'] = 'المتغير {$a->variant} من {$a->name}';
$string['negcovar'] = 'التباين السلبي للدرجة مع إجمالي درجة المحاولة';
$string['negcovar_help'] = 'إن درجة هذا السؤال لهذا العدد من المحاولات في هذا الاختبار تختلف عكسيًا عن الدرجة الإجمالية للمحاولة.. هذا معناه أن الدرجة الإجمالية للمحاولات تميل إلى أن تكون أقل من المتوسط عندما تكون درجة هذا السؤال فوق المتوسط والعكس بالعكس.

معادلتنا للوزن المؤثر للسؤال لا يمكن حسابها في تلك الحالة. حسابات الوزن المؤثر للأسئلة الأخرى في هذا الاختبار؛ هي الأوزان المؤثرة لتلك الأسئلة إذا أعطيت الأسئلة المبرزة ذات التباين السلبي درجة قصوى مقدارها الصفر.

إذا قمت بتحرير الاختبار وجعلت الدرجة القصوى لتلك الأسئلة ذات التباين السلبي صفرًا، فإن الأوزان المؤثرة لتلك الأسئلة ستكون صفرًا والوزن المؤثر الحقيقي للأسئلة الأخرى سيكون كما هو محسوب الآن.';
$string['nogradedattempts'] = 'لم يتم إجراء أية محاولات في هذا الاختبار ، أو كانت لكل المحاولات أسئلة تحتاج إلى تقييم يدوي.';
$string['nostudentsingroup'] = 'لا يوجد طلاب في هذه المجموعة حتى الآن';
$string['optiongrade'] = 'اعتماد جزئي';
$string['partofquestion'] = 'جزء من السؤال';
$string['pluginname'] = 'الإحصاءات';
$string['position'] = 'المكان';
$string['positions'] = 'الأماكن';
$string['privacy:metadata'] = 'على الرغم من أن المكوّن الإضافي لـ Quiz Statistics يحتوي على جداول قاعدة بيانات ، فإن البيانات عبارة عن بيانات مجمّعة و لا تصف شخصية فريدة من نوعها.';
$string['questioninformation'] = 'معلومات السؤال';
$string['questionname'] = 'اسم السؤال';
$string['questionnumber'] = 'س #';
$string['questionstatistics'] = 'إحصائيات السؤال';
$string['questionstatsfilename'] = 'إحصاءات السؤال';
$string['questiontype'] = 'نوع السؤال';
$string['quizinformation'] = 'معلومات الاختبار';
$string['quizname'] = 'اسم الاختبار';
$string['quizoverallstatistics'] = 'إحصاءات الاختبار الكاملة';
$string['quizstatisticscleanuptask'] = 'تنظيف سجلات الخبء القديمة لإحصائيات الاختبار';
$string['quizstructureanalysis'] = 'تحليل بنية الاختبار';
$string['random_guess_score'] = 'نتيجة التخمين العشوائي';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'نطاق من الإحصاءات لهذه الأسئلة';
$string['recalculatenow'] = 'أعد حسابها الآن';
$string['reportsettings'] = 'إحصائيات حساب الإعدادات';
$string['response'] = 'الاستجابة';
$string['skewness'] = 'نقاط توزيع الانحراف (لــ{$a})';
$string['slotstructureanalysis'] = 'التحليل الهيكلي لرقم السؤال {$a}';
$string['standarddeviation'] = 'الانحراف المعياري (لـ {$a})';
$string['standarddeviationq'] = 'الانحراف المعياري';
$string['standarderror'] = 'معيار الخطأ ( لـ {$a})';
$string['statistics'] = 'الإحصائيات';
$string['statistics:componentname'] = 'تقرير عن إحصاءات الاختبار';
$string['statistics:view'] = 'معاينة التقرير الإحصائي';
$string['statisticsreport'] = 'تقرير الإحصاءات';
$string['statisticsreportgraph'] = 'إحصاءات عن موقع السؤال';
$string['statsfor'] = 'إحصائيات الاختبار ( لـ {$a})';
$string['variant'] = 'التباين';
$string['viewanalysis'] = 'عرض التفاصيل';
$string['whichtries'] = 'تحليل الاستجابات لـ';
