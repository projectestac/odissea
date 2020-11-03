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
 * Strings for component 'qtype_ordering', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   qtype_ordering
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'وضع مطلق';
$string['addmultipleanswers'] = 'أضف {$a} من العناصر الأخرى';
$string['addsingleanswer'] = 'أضف عنصراً آخر';
$string['allornothing'] = 'الكل أو لا شيء';
$string['answer'] = 'نص العنصر';
$string['answerheader'] = 'العنصر القابل للسحب {no}';
$string['correctorder'] = 'الترتيب الصحيح لهذه العناصر هو كالتالي:';
$string['defaultanswerformat'] = 'التنسيق الافتراضي للإجابة';
$string['defaultquestionname'] = 'إسحب العناصر التالية وفق الترتيب الصحيح.';
$string['duplicatesnotallowed'] = 'لا يُسمح بتكرار العناصر القابلة للسحب. النص "{$a->text}" مستخدم بالفعل في {$a->item}.';
$string['editingordering'] = 'تحرير سؤال الترتيب';
$string['gradedetails'] = 'تفاصيل العلامة';
$string['gradingtype'] = 'نوع التقييم';
$string['gradingtype_help'] = 'اختر نوع حساب الدرجات.

**الكل أو لا شيء**
: إذا كانت كل العناصر بمواضعها الصحيحة، فسيتم منح العلامة الكاملة. بخلافه، الدرجة ستكون صفراً.

**الموضع المطلق**
: سيتم اعتبار العنصر صحيحاً إن وضعه الطالب في نفس موضعه في الإجابة الصحيحة. أقصى درجة ممكنة للسؤال ستكون **هي نفسها** عدد العناصر المعروضة للطالب.

**نسبة إلى الموضع الصحيح**
: سيتم اعتبار العنصر صحيحاً إذا كان في نفس موضعه في الإجابة الصحيحة. تتلقى العناصر الصحيحة درجات مساوية إلى عددها المعروض مطروحاً منه واحد. تتلقى العناصر الخاطئة درجات مساوية إلى عددها المعروض مطروحاً منه واحد ومطروحاً منه أيضاً المسافة ما بين العنصر وموضعه الصحيح. لهذا، إذا تم عرض ***س*** من العناصر للطالب، فعدد الدرجات المتاحة لكل عنصر سيكون ***(س - 1)***، وأقصى درجة متاحة للسؤال هي ***س × (س - 1)***، والتي ستساوي ***(س² - س)***.

**نسبة إلى العنصر اللاحق (مع استبعاد الأخير)**
: سيتم اعتبار العنصر صحيحاً إن كان متبوعاً بنفس العنصر الذي يظهر بعده في الإجابة الصحيحة. العنصر الأخير لن يدخل ضمن هذا الفحص. لذلك ستصير أقصى درجة ممكنة للسؤال هي عدد العناصر المعروضة للطالب **مطروحاً منها واحد** .

**نسبة إلى العنصر اللاحق (مع شمول الأخير)**
: سيتم اعتبار العنصر صحيحاً إن كان متبوعاً بنفس العنصر الذي يظهر بعده في الإجابة الصحيحة. هذا يشمل العنصر الأخير الذي ينبغي أن لا يكون متبوعاً بعنصر آخر. لذلك ستصير أقصى درجة ممكنة للسؤال هي **نفسها** عدد العناصر المعروضة للطالب.

**نسبة إلى العنصرين السابق واللاحق معاً**
: سيتم اعتبار العنصر صحيحاً إن كان كل من العنصرين السابق واللاحق له هما نفسهما كما يظهران في الجواب الصحيح. العنصر الأول ينبغي أن لا يكون قبله شيء، والعنصر الأخير ينبغي أن لا يكون بعده شيء. لذلك ستكون هناك درجتان محتملتان لكل عنصر، وأقصى درجة ممكنة للسؤال هي **مرتان** بقدر عدد العناصر المعروضة للطالب.

**نسبة إلى كل العناصر السابقة واللاحقة**
: سيتم اعتبار العنصر صحيحاً إن كان مسبوقاً بكل العناصر التي تسبقه فعلاً في الجواب الصحيح، وإذا كان متبوعاً كذلك بكل العناصر التي تتبعه فعلاً في الجواب الصحيح. ترتيب العناصر السابقة هنا غير مهم، وكذلك الحال مع ترتيب العناصر اللاحقة. لذلك، إذا كان عدد العناصر المعروضة للطالب ***س***، فعدد الدرجات المتاحة لكل عنصر ***(س - 1)***، وأقصى درجة ممكنة للسؤال هي ***س × (س - 1)***، وهي نفسها ***(س² - س)***.

**أطول مقطوعة جزئية مرتبة**
: الدرجة ستصير عدد العناصر ضمن أطول مقطع مرتب بشكل صحيح منها. أقصى درجة ممكنة سيكون هو نفسه عدد العناصر المعروضة. المقطع لا بد أن يتكون من عنصرين على الأقل. لا يُشترط بدء المقاطع من العنصر الأول (ولكن يمكن حدوث ذلك)، ولا يُشترط أن تكون متجاورة (ولكن يمكن حدوث ذلك). عندما يظهر هناك أكثر من مقطع جزئي بنفس الطول، سيتم عرض العناصر للمقطع الأول منها عند ترتيبها من بداية الكلام على أنه يمثل ما صحَّ من الإجابة. العناصر الأخرى ستُعتبر خاطئة.

**أطول مقطوعة متجاورة**
: الدرجة ستصير عدد العناصر في أطول مقطع متجاور من العناصر. أقصى درجة ممكنة سيكون هو نفسه عدد العناصر المعروضة. المقطع لا بد أن يتكون من عنصرين على الأقل. لا يُشترط بدء المقاطع من العنصر الأول (ولكن يمكن حدوث ذلك)، ويُفترض أن تكون متجاورة. عندما يظهر هناك أكثر من مقطع جزئي بنفس الطول، سيتم عرض العناصر للمقطع الأول منها عند ترتيبها من بداية الكلام على أنه يمثل ما صحَّ من الإجابة. العناصر الأخرى ستُعتبر خاطئة.';
$string['horizontal'] = 'أفقي';
$string['layouttype'] = 'تخطيط العناصر';
$string['layouttype_help'] = 'إختر ما إذا كنت تريد عرض العناصر عمودياً أم أفقياً.';
$string['longestcontiguoussubset'] = 'أطول مجموعة فرعية متجاورة';
$string['longestorderedsubset'] = 'أطول مجموعة فرعية مرتبة';
$string['noresponsedetails'] = 'عذراً، لا توجد تفاصيل عن الرد على هذا السؤال.';
$string['noscore'] = 'لا نقاط';
$string['notenoughanswers'] = 'يجب أن تحتوي أسئلة الترتيب على أكثر من {$a} من الإجابات.';
$string['numberingstyle'] = 'أتريد ترقيم الخيارات؟';
$string['numberingstyle123'] = '1., 2., 3., ...';
$string['numberingstyleabc'] = '';
$string['numberingstyleABCD'] = '';
$string['numberingstyle_desc'] = 'نمط الترقيم الافتراضي.';
$string['numberingstyle_help'] = 'إختر نمط الترقيم للعناصر القابلة للسحب في هذا السؤال.';
$string['numberingstyleiii'] = 'i., ii., iii., ...';
$string['numberingstyleIIII'] = 'I., II., III., ...';
$string['numberingstylenone'] = 'بلا ترقيم';
$string['pluginname'] = 'الترتيب';
$string['pluginnameadding'] = 'إضافة سؤال ترتيب';
$string['pluginnameediting'] = 'تحرير سؤال ترتيب';
$string['pluginname_help'] = 'يتم عرض العديد من العناصر بترتيب مختلط. يمكن سحب العناصر إلى ترتيب ذو معنى.';
$string['pluginnamesummary'] = 'ضع العناصر المختلطة بترتيب ذي معنى.';
$string['positionx'] = 'الموضع {$a}';
$string['privacy:metadata'] = 'إن ملحق السؤال من نوع الترتيب لا يخزن أي بيانات شخصية.';
$string['relativeallpreviousandnext'] = 'نسبة إلى كل العناصر السابقة واللاحقة';
$string['relativenextexcludelast'] = 'نسبة إلى العنصر اللاحق (مع استبعاد الأخير)';
$string['relativenextincludelast'] = 'نسبة إلى العنصر اللاحق (مع شمول الأخير)';
$string['relativeonepreviousandnext'] = 'نسبة إلى العنصرين السابق واللاحق معاً';
$string['relativetocorrect'] = 'نسبة إلى الموضع الصحيح';
$string['removeeditor'] = 'إزالة محرر HTML';
$string['removeitem'] = 'أزِل العنصر القابل للسحب';
$string['scoredetails'] = 'في ما يلي نتائج كل عنصر ضمن هذه الاستجابة:';
$string['selectall'] = 'إختر كافة العناصر';
$string['selectcontiguous'] = 'إختر مجموعة فرعية متجاورة من العناصر';
$string['selectcount'] = 'حجم المجموعة الفرعية';
$string['selectcount_help'] = 'عدد العناصر التي سيتم عرضها عند ظهور السؤال في الاختبار.';
$string['selectrandom'] = 'حدد مجموعة فرعية عشوائية من العناصر';
$string['selecttype'] = 'نوع اختيار العنصر';
$string['selecttype_help'] = 'إختر ما إذا كنت تريد عرض كافة العناصر أو مجموعة فرعية من العناصر.';
$string['showgrading'] = 'تفاصيل منح العلامات';
$string['showgrading_help'] = 'إختر ما إذا كنت تريد إظهار أو إخفاء تفاصيل حساب الدرجات عندما يراجع الطالب ردًا على سؤال الترتيب هذا.';
$string['vertical'] = 'عمودي';
