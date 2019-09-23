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
 * Strings for component 'analytics', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = '{$a->analysableid} القابل للتحليل، لم يستخدم: {$a->errors}';
$string['analysablenotvalidfortarget'] = '{$a->analysableid} القابل للتحليل، لا يصلح لهذا الهدف: {$a->result}';
$string['analysisinprogress'] = 'لا يزال يجري تحليلها من قبل تنفيذ سابق';
$string['analytics'] = 'تحليلات';
$string['analyticslogstore'] = 'مخزن السجل المستخدم للتحليلات';
$string['analyticslogstore_help'] = 'مخزن السجلات الذي سيتم استخدامه بواسطة واجهة برمجة تطبيقات التحليلاتAPI  لقراءة أنشطة المستخدمين';
$string['analyticssettings'] = 'إعدادات التحليلات';
$string['coursetoolong'] = 'المساق طويل جداَ';
$string['defaultpredictionsprocessor'] = 'معالج التنبؤات الافتراضي';
$string['defaultpredictoroption'] = 'المعالج الافتراضي ({$a})';
$string['disabledmodel'] = 'نموذج معطل';
$string['enabledtimesplittings'] = 'طرق قسمة الوقت';
$string['erroralreadypredict'] = 'تم استخدام الملف {$ a} سابقا لتوليد التوقعات.';
$string['errorcannotreaddataset'] = 'ملف البيانات {$a} لا يمكن قراءته';
$string['errorcannotwritedataset'] = 'ملف البيانات {$a} لا يمكن كتابته';
$string['errorendbeforestart'] = 'تاريخ الانتهاء ({$a}) يسبق تاريخ بدء المساق.';
$string['errorinvalidindicator'] = '{$a} مؤشر غير صالح';
$string['errorinvalidtimesplitting'] = 'تقسيم الوقت غير صالح يرجى التأكد من إضافة اسم الفصل المؤهل بالكامل.';
$string['errornoindicators'] = 'هذا النموذج ليس لديه أي مؤشرات.';
$string['errornopredictresults'] = 'معالج التنبؤات لم يظهر أي نتائج. تأكد من محتويات دليل الإخراج لمزيد من المعلومات.';
$string['errornoroles'] = 'لم يتم تحديد أدوار الطلاب أو المعلمين. حددهم في صفحة إعدادات التحليلات.';
$string['errornotarget'] = 'هذا النموذج ليس لديه أي هدف.';
$string['errornotimesplittings'] = 'هذا النموذج ليس لديه أي طريقة تقسيم الوقت.';
$string['errorpredictioncontextnotavailable'] = 'سياق التنبؤ هذا غير متوفر بعد الآن.';
$string['errorpredictionformat'] = 'تصميم خاطئ لحسابات التنبؤ';
$string['errorpredictionnotfound'] = 'التنبؤ غير موجود';
$string['errorpredictionsprocessor'] = 'خطأ في المعالج التنبؤ:';
$string['errorpredictwrongformat'] = 'رد معالج التنبؤ لا يمكن فهمه: "{$a}"';
$string['errorprocessornotready'] = 'معالج التوقعات الذي تم اختياره غير جاهز:{$a}';
$string['errorsamplenotavailable'] = 'العينة المتوقعة لم تعد متوفرة';
$string['errorunexistingmodel'] = 'نموذج غير موجود {$a}';
$string['errorunexistingtimesplitting'] = 'طريقة تقسيم الوقت التي تم اختيارها غير متوفرة.';
$string['errorunknownaction'] = 'إجراء غير معروف';
$string['eventinsightsviewed'] = 'أفكار تم مشاهدتها';
$string['eventpredictionactionstarted'] = 'بدأت عملية التنبؤ';
$string['fixedack'] = 'تم الاقرار به';
$string['insightinfomessage'] = 'النظام أنتج بعض الافكار لك: {$a}';
$string['insightinfomessagehtml'] = 'النظام أنتج بعض الافكار لك: <a href="{$a}">{$a}</a>.';
$string['insightmessagesubject'] = 'أفكار جديدة لِ"{$a->contextname}": {$a->insightname}';
$string['invalidanalysablefortimesplitting'] = 'لا يمكن تحليلها باستخدام طريقة {$a} تقسيم الوقت.';
$string['invalidtimesplitting'] = 'يحتاج النموذج الذي يحمل المعرّف {$a} إلى طريقة تقسيم الوقت قبل استخدامه للتدرب.';
$string['modeloutputdir'] = 'دليل انتاج النماذج';
$string['modeloutputdirinfo'] = 'الدليل حيث تخزن معالجات التنبؤ جميع معلومات التقييم. مفيد للتصحيح والبحوث.';
$string['modeltimelimit'] = 'الوقت اللأقصى لتحليل كل نموذج';
$string['modeltimelimitinfo'] = 'يحدد هذا الإعداد الوقت الذي يقضيه كل نموذج في تحليل محتويات الموقع.';
$string['nocourses'] = 'لا توجد مساقات لتحليلها';
$string['nodata'] = 'لا توجد بيانات لتحليلها';
$string['noevaluationbasedassumptions'] = 'لا يمكن تقييم النماذج القائمة على الافتراضات.';
$string['noinsights'] = 'لم يتم الإبلاغ عن أي افكار';
$string['noinsightsmodel'] = 'هذا النموذج لا يولد افكار';
$string['nonewdata'] = 'لا توجد بيانات جديدة متاحة';
$string['nonewranges'] = 'لا توجد تنبؤات جديدة حتى الآن';
$string['nonewtimeranges'] = 'لا نطاقات زمنية جديدة ؛ لا شيء للتنبؤ.';
$string['nopredictionsyet'] = 'لا توجد توقعات متاحة حتى الآن';
$string['noranges'] = 'لا توجد توقعات حتى الآن';
$string['notrainingbasedassumptions'] = 'لا تحتاج النماذج القائمة على الافتراضات إلى التدريب';
$string['notuseful'] = 'غير مفيد';
$string['novaliddata'] = 'لا توجد بيانات صالحة متاحة';
$string['novalidsamples'] = 'لا توجد عينات صالحة المتاحة';
$string['onlycli'] = 'تنفيذ معالجة التحليلات من خلال سطر الأوامر فقط';
$string['onlycliinfo'] = 'يمكن أن تستغرق عمليات التحليلات مثل تقييم النماذج أو تدريب خوارزميات تعلم الآلة أو الحصول على تنبؤات بعض الوقت ، حيث يتم تشغيلها كمهام cron ويمكن فرضها عبر سطر الأوامر. يمكنك تعطيل هذا الإعداد إذا كنت ترغب في أن يتمكن مديرو المواقع من تشغيل هذه العمليات يدويًا عبر واجهة الويب';
$string['predictionsprocessor'] = 'معالج التنبؤات';
$string['predictionsprocessor_help'] = 'معالج التوقعات هو الخلفية للتعلم الآلي التي تعالج مجموعات البيانات الناتجة عن حساب مؤشرات وأهداف النماذج. سيتم حذف جميع الخوارزميات والتنبؤات المدربة إذا قمت بالتغيير إلى معالج تنبؤات آخر.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'حسابات المؤشر';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'السياق';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'نهاية وقت الحساب';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'فئة حاسبة المؤشر';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'الرقم التعريفي للعينة';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'الجدول الأصلي للعينة';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'بداية وقت الحساب';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'عندما تم التنبؤ';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'القيمة المحسوبة';
$string['privacy:metadata:analytics:predictionactions'] = 'إجراءات التنبؤ';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'اسم الفعل';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'الرقم التعريفي للتنبؤ';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'عندما تم تنفيذ إجراء التنبؤ';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'المستخدم الذي اتخذ الإجراء';
$string['privacy:metadata:analytics:predictions'] = 'التنبؤات';
$string['privacy:metadata:analytics:predictions:calculations'] = 'حسابات المؤشر';
$string['privacy:metadata:analytics:predictions:contextid'] = 'السياق';
$string['privacy:metadata:analytics:predictions:modelid'] = 'الرقم التعريفي للنموذج';
$string['privacy:metadata:analytics:predictions:prediction'] = 'التنبؤ';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'درجة التنبؤ';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'الرقم التعريفي للعينة';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'عندما تم التنبؤ';
$string['privacy:metadata:analytics:predictions:timeend'] = 'وقت انتهاء الحسابات';
$string['privacy:metadata:analytics:predictions:timestart'] = 'وقت بدء الحسابات';
$string['processingsitecontents'] = 'معالجة محتويات الموقع';
$string['successfullyanalysed'] = 'تم تحليلها بنجاح';
$string['timesplittingmethod'] = 'طريقة قسمة الوقت';
$string['timesplittingmethod_help'] = 'تقسم طريقة تقسيم الوقت مدة المساق إلى أجزاء؛ سيتم تشغيل محرك التنبؤات في نهاية هذه الأجزاء. من المستحسن أن تقوم فقط بتمكين طرق تقسيم الوقت التي قد تكون مهتمًا باستخدامها. سوف تتكرر عملية التقييم من خلال جميع طرق تقسيم الوقت التي تم تمكينها، لذا كلما زادت طرق تقسيم الوقت ، كلما كانت عملية التقييم أبطأ.';
$string['viewprediction'] = 'مشاهدة تفاصيل التنبؤ';
