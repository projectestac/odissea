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
 * Strings for component 'qtype_algebra', language 'ar', version '4.5'.
 *
 * @package     qtype_algebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'إضافة {no} إجابات أخرى';
$string['addmorevariableblanks'] = 'إضافة {no} متغيرات أخرى';
$string['algebraoptions'] = 'الخيارات';
$string['allfunctions'] = 'كل الدوال';
$string['allowedfuncs'] = 'الدوال المسموح بها';
$string['allowedfuncs_help'] = '**ليست مطبقة بعد**

يمكن استعمال أدوات التحكم هذه لتقييد الدوال التي
يمكن للطالب استعمالها في استجاباته. إذا تم تأشير
زر "الكل"، فلن تكون هناك قيود على الدوال المتاحة
للطالب. هذه هي الحالة الافتراضية. لتقييد ما هو مسموح
به، قم بإزالة التأشير من خانة "الكل" واختر الدوال
التي ترغب بإتاحتها.';
$string['allowedfunctions'] = 'الدوال المسموح بها';
$string['answer'] = 'الإجابة: {$a}';
$string['answerboxprefix'] = 'النص الذي تريد جعله بمثابة بادئة لمربع الإجابة عند عرض السؤال';
$string['answermustbegiven'] = 'ينبغي عليك إدخال الإجابة إذا كانت هناك علامة أو إفادة';
$string['answerno'] = 'الإجابة {$a}';
$string['answerprefix'] = 'بائدة مربع الإجابة';
$string['answerprefix_help'] = 'النص الذي تدخله هنا سيتم وضعه قبل مربع الإدخال
الذي يضع فيه الطلاب إجاباتهم. على سبيل المثال،
إذا كان السؤال يتعلق بنموذج الدالة، f(x)،
فسيكون مناسباً وضع "f(x) = " هنا.';
$string['answerx'] = 'الإجابة {no}';
$string['badclosebracket'] = 'تم العثور على إغلاق أقواس غير صحيح';
$string['badfuncargs'] = 'معاملات الدالة غير صحيحة \'{$a}\'';
$string['braces'] = '\\(...\\)';
$string['brackets'] = '\\[...\\]';
$string['cdot'] = '\\cdot';
$string['checktolerance'] = 'تحقق من التسامح';
$string['compalgorithm'] = 'خوارزمية المقارنة';
$string['compareby'] = 'خوارزمية المقارنة';
$string['compareby_help'] = 'هذا يحدد الطريقة التي تتم بها مقارنة إجابات الطلبة
مع كل إجابات الأسئلة. الإحتمالات المختلفة هي:

SAGE: يستعمل البرنامج الرياضي مفتوح المصدر <ahref="http://www.sagemath.org/">SAGE</a> لتنفيذ مقارنة رمزية جبرية كاملة.

التقييم: هذه الطريقة تقوم بتوليد أرقام عشوائية
لمتغيرات السؤال ومن ثم تقييم كل من إجابة
الطالب وإجابة السؤال لهذه المجموعة من القيم.

التكافؤ: هذه هي أبسط الطريق. هي ستقوم بأبسط
مقارنة أساسية بين التعابير.';
$string['compareequiv'] = 'التكافؤ';
$string['compareeval'] = 'التقييم';
$string['comparesage'] = 'SAGE';
$string['correctansweris'] = 'الإجابة الصحيحة هي: {$a} حيث أن';
$string['correctanswers'] = 'الإجابات الصحيحة';
$string['defaultmethod'] = 'طريقة المقارنة الافتراضية';
$string['disallow'] = 'الإجابة غير المسموح بها';
$string['disallow_help'] = 'يحتوي على تعبير سيتم منعه كجواب.
الطلبة الذين يحاولون إدخال إجابة مطابقة
له سيتم حرمانهم من علامة السؤال حتى
وإن كان ذلك مطابقاً لأحد إجابات السؤال.';
$string['disallowans'] = 'الإجابة غير المسموح بها';
$string['disallowanswer'] = 'إجابة غير مسموح بها';
$string['displayresponse'] = 'عرض الاستجابة';
$string['dollar'] = '$...$';
$string['dollars'] = '$$...$$';
$string['duplicatevar'] = 'تسمية مكررة لمتغير. \'{$a}\' مُعرَّف مسبقاً.';
$string['dynamic'] = 'استعمال طلبات AJAX المرنة';
$string['editingalgebra'] = 'تحرير سؤال جبري';
$string['evalchecks'] = 'فحوصات التقييم';
$string['exceptionmessage'] = '{$a}';
$string['filloutoneanswer'] = 'عليك إعطاء إجابة ممكنة واحدة على الأقل. خانات الإجابات التي تُترك فارغة لن يتم استعمالها. سيتم استعمال أول إجابة مطابقة لتقرير الدرجة والإفادة. يُسمح فقط بالمتغيرات المُعرَّفة أعلاه.';
$string['filloutonevariable'] = 'عليك إعطاء متغير واحد على الأقل.';
$string['formuladisplay'] = 'طريقة عرض معادلة الإجابة';
$string['host'] = 'عنوان الرابط لمخدم مضيف SAGE';
$string['iframe'] = 'استعمال العنصر iframe';
$string['illegalplusminus'] = 'تم العثور على علامة + أو علامة - في موضع غير صحيح';
$string['illegalvarname'] = 'تسمية المتغير \'{$a}\' غير مقبولة: إنها نفس تسمية دالة المحلل أو ثابت خاص.';
$string['invalidanswer'] = 'إجابة غير صحيحة أو غير مفهومة';
$string['mismatchedbracket'] = 'أقواس غير متطابقة: زوجا أقواس الفتح والإغلاق ليسا من نفس النوع \'{$a}\'';
$string['mismatchedcloseb'] = 'أقواس غير متطابقة: تم العثور على قوس إغلاق بدون قوس فتح';
$string['mismatchedopenb'] = 'أقواس غير متطابقة: تم العثور على قوس فتح بدون قوس إغلاق';
$string['missingonearg'] = 'خطأ في الصياغة: العامل \'{$a}\' يفتقر إلى عوامله';
$string['missingtwoargs'] = 'خطأ في الصياغة: العامل \'{$a}\' يتطلب وجود اثنين من العوامل';
$string['morethantwoargs'] = 'محاولة لمقارنة تعبير فيه أكثر من عاملين اثنين - لا ترميز برمجي لمعالجة هذه الحالة!';
$string['multiplyoperator'] = 'عامل TeX للضرب';
$string['nargswrong'] = 'عدد خاطئ من العوامل للتعبير \'{$a}\'';
$string['nchecks'] = 'عدد فحوص التقييم';
$string['nchecks_help'] = 'عدد فحوص التقييم المستعملة في خوارزمية مقارنة التقييم';
$string['noevaluate'] = 'طريقة التقييم للتعبير \'{$a}\' لم يتم تطبيقها';
$string['notanumber'] = 'قيمة غير صحيحة: يتطلب رقماً.';
$string['notenoughanswers'] = 'عليك إدخال إجابة واحدة على الأقل.';
$string['notenoughvars'] = 'عليك إدخال متغير واحد على الأقل.';
$string['notopterm'] = 'خطأ في الصياغة: يتعذر التكثيف إلى عامل منفرد بالمستوى الأعلى';
$string['novarmax'] = 'لم يتم تحديد الحد الأعلى للمتغير.';
$string['novarmin'] = 'لم يتم تحديد الحد الأدنى للمتغير.';
$string['options'] = 'الخيارات';
$string['parseerror'] = 'خطأ عند تحليل الدالة: \'{$a}\'';
$string['pluginname'] = 'الجبر';
$string['pluginname_help'] = 'يقوم الطالب بإدخال معادلة كجواب وهي تتضمن متغيراً واحداً أو أكثر. يتم تقييم صحة الإجابة باستعمال واحدة من 3 طرق مختلفة.';
$string['pluginname_link'] = 'question/type/algebra';
$string['pluginnameadding'] = 'إضافة سؤال جبري';
$string['pluginnameediting'] = 'تحرير سؤال جبري';
$string['pluginnamesummary'] = 'يقوم الطالب بإدخال معادلة يمكن لها أن تتضمن متغيراً واحداً أو أكثر. يتم تقييم صحة الإجابة باستعمال واحدة من 3 طرق مختلفة.';
$string['port'] = 'منفذ مخدم SAGE';
$string['privacy:metadata'] = 'إن ملحق نوع السؤال الجبري لا يخزن أي بيانات شخصية.';
$string['restoreqdbfailed'] = 'فشلت استعادة السؤال الجبري: خطأ عند الكتابة في قاعدة البيانات';
$string['restorevardbfailed'] = 'فشلت استعادة متغير السؤال الجبري: خطأ عند الكتابة في قاعدة البيانات';
$string['texdelimiters'] = 'محددات تعابير TeX';
$string['tolerance'] = 'التسامح لفحوص التقييم';
$string['tolerance_help'] = 'يحدد أقصى فرق ما بين التقييم الرقمي لاستجابة الطالب وإجابات السؤال بحيث يمكن عنده اعتبار تلك الإجابات مطابقة.';
$string['toleranceltzero'] = 'التسامح ينبغي أن يكون أكبر من الصفر أو مساوياً له';
$string['undeclaredvar'] = 'تم العثور على متغير غير مُعرَّف \'{$a}\'';
$string['undefinedfunction'] = 'دالة غير مُعرَّفة \'{$a}\'';
$string['undefinedvar'] = 'متغير أو متغيرات {$a} غير مُعرَّفة، مستعملة في إجابة أو أكثر.';
$string['undefinedvariable'] = 'تم العثور على متغير غير مُعرَّف \'{$a}\' عن تقييم التعبير رقمياً';
$string['unknownterm'] = 'خطأ في الصياغة: مصطلح غير معروف تم العثور عليه عند \'{$a}\' في التعبير';
$string['unusedvar'] = 'هذا المتغير ليس مستعملاً من قبل أي إجابة.';
$string['uri'] = 'رابط مخدم SAGE';
$string['variable'] = 'المتغير';
$string['variable_help'] = 'ينبغي إدخال أسماء كل المتغيرات المستعملة في الإجابات هنا.
الحاجة إلى تعيين القيم العظمى والصغرى مطلوبة فقط عند استعمال خوارزمية مقارنة التقييم.';
$string['variablename'] = 'الاسم';
$string['variableno'] = 'المتغير {$a}';
$string['variables'] = 'المتغيرات';
$string['variablex'] = 'المتغير {no}';
$string['varmax'] = 'القيمة العظمى';
$string['varmin'] = 'القيمة الصغرى';
$string['varmingtmax'] = 'القيمة الصغرى ينبغي أن تكون أقل من القيمة العظمى.';
