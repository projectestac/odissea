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
 * Strings for component 'qtype_calculated', language 'ar', version '4.4'.
 *
 * @package     qtype_calculated
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'أضف عنصر';
$string['addmoreanswerblanks'] = 'إضافة فراغ لإجابة أخرى';
$string['addsets'] = 'أضف مجموعة/ات';
$string['answerdisplay'] = 'عرض الإجابة';
$string['answerformula'] = 'أجب بصيغة {$a}';
$string['answerhdr'] = 'الإجابة';
$string['answerstoleranceparam'] = 'معايير التسامح في الإجابات';
$string['answerwithtolerance'] = '{$a->answer} (±{$a->tolerance} {$a->tolerancetype})';
$string['anyvalue'] = 'أيّ قيمة';
$string['atleastoneanswer'] = 'تحتاج إلى تقديم إجابة واحدة على الأقل.';
$string['atleastonerealdataset'] = 'ينبغي أن تكون هناك مجموعة بيانات واحدة حقيقية على الأقل في نص السؤال';
$string['atleastonewildcard'] = 'ينبغي أن يكون هناك بطاقة بديلة واحدة على الأقل في صيغة الجواب أو نص السؤال';
$string['calcdistribution'] = 'التوزيع';
$string['calclength'] = 'المنازل العشرية';
$string['calcmax'] = 'الأعلى';
$string['calcmin'] = 'الأدنى';
$string['choosedatasetproperties'] = 'اختيار خصائص البطاقات البديلة في مجموعة البيانات';
$string['choosedatasetproperties_help'] = 'مجموعة البيانات هي مجموعة من القيم يتم إدراجها بدلاً من القيم البديلة. يمكنك إنشاء مجموعة بيانات خاصة بسؤال محدد، أو مجموعة بيانات مشتركة يمكن استعمالها لغيرها من الأسئلة الحسابية ضمن الصنف.';
$string['correctanswerformula'] = 'صيغة الجواب الصحيح';
$string['correctanswershows'] = 'يعرض الجواب الصحيح';
$string['correctanswershowsformat'] = 'التنسيق';
$string['correctfeedback'] = 'لأي إجابة صحيحة';
$string['dataitemdefined'] = 'مع {$a} القيم العددية المحددة متاحة بالفعل';
$string['datasetrole'] = 'الرموز البديلة <strong>{x..}</strong> سيتم استبدالها بقيمة رقمية من مجموعة البيانات الخاصة بها';
$string['decimals'] = 'مع {$a}';
$string['deleteitem'] = 'حذف العنصر';
$string['deletelastitem'] = 'حذف آخر عنصر';
$string['distributionoption'] = 'حدد خيار التوزيع';
$string['editdatasets'] = 'تحرير مجموعات بيانات البطاقات البديلة';
$string['editdatasets_help'] = 'قد يتم إنشاء من القيم البديلة عن طريق إدخال رقم في كل حقل كبطاقة بديلة ثم النقر على زر الإضافة. لتوليد 10 أو أكثر من القيم تلقائيا، حدد عددا من القيم المطلوبة قبل النقر على زر الإضافة.
توزيع منتظم يعني أن أي قيمة بين الحدود هي بنفس القدر من المرجح أن يتم إنشاؤها؛
سجل توزيع موحد يعني أن من القيم نحو الحد الأدنى هي أكثر احتمالا.';
$string['editdatasets_link'] = 'question/type/calculated';
$string['existingcategory1'] = 'سوف تستخدم مجموعة البيانات المشتركة الموجودة بالفعل';
$string['existingcategory2'] = 'ملف من مجموعة موجودة بالفعل من الملفات التي يتم استخدامها أيضا من قبل أسئلة أخرى في هذه الفئة';
$string['existingcategory3'] = 'رابط من مجموعة موجودة بالفعل من الروابط التي تستخدم أيضا من قبل أسئلة أخرى في هذه الفئة';
$string['forceregeneration'] = 'فرض إعادة التوليد';
$string['forceregenerationall'] = 'فرض إعادة توليد جميع البطاقات البديلة';
$string['forceregenerationshared'] = 'فرض إعادة توليد البطاقات البديلة غير المشتركة فقط';
$string['functiontakesatleasttwo'] = 'الدالة {$a} يجب أن يكون بها اثنين على الأقل من المتغيرات';
$string['functiontakesnoargs'] = 'الدالة  {$a} لا تأخذ أية متغيرات';
$string['functiontakesonearg'] = 'الدالة {$a} يجب أن يكون بها متغير واحد بالضبط';
$string['functiontakesoneortwoargs'] = 'الدالة {$a} يجب أن يكون بها إما واحدا أو اثنين من المتغيرات';
$string['functiontakestwoargs'] = 'الدالة {$a} يجب أن يكون بها من المتغيرات اثنان بالضبط';
$string['generatevalue'] = 'توليد قيمة جديدة بين';
$string['getnextnow'] = 'الحصول على جديد \'لإضافة عنصر\' الآن';
$string['hexanotallowed'] = 'مجموعة البيانات <strong>{$a->name}</strong> فيها قيمة التنسيق السداسي عشري {$a->value} غير مسموح بها';
$string['illegalformulasyntax'] = 'صيغة معادلة غير صحيحة والتي تبدأ بـ \'{$a}\'';
$string['incorrectfeedback'] = 'عن أيّ إجابة غير صحيحة';
$string['itemno'] = 'العنصر {$a}';
$string['itemscount'] = 'عدد<br/>العناصر';
$string['itemtoadd'] = 'العنصر المزمعة إضافته';
$string['keptcategory1'] = 'سوف تستخدم نفس مجموعة البيانات المشتركة الموجودة كما كان من قبل';
$string['keptcategory2'] = 'ملف من نفس فئة المجموعة من الملفات القابلة لإعادة الاستخدام كما كان من قبل';
$string['keptcategory3'] = 'رابط من نفس فئة المجموعة القابلة لإعادة الاستخدام من الروابط كما كان من قبل';
$string['keptlocal1'] = 'سوف تستخدم نفس مجموعة البيانات الخاصة من القائمة كما كان من قبل';
$string['keptlocal2'] = 'ملف من أسئلة نفس المجموعة الخاصة من الملفات كما كان من قبل';
$string['keptlocal3'] = 'رابط من نفس المجموعة الخاصة من أسئلة الروابط كما كان من قبل';
$string['lengthoption'] = 'حدد خيار الطول';
$string['loguniform'] = 'تسجيل موحد';
$string['loguniformbit'] = 'أرقام من سجل توزيع موحد';
$string['makecopynextpage'] = 'الصفحة التالية (سؤال جديد)';
$string['mandatoryhdr'] = 'إلزامية البطاقات البديلة في تقديم الإجابات';
$string['max'] = 'أعلى';
$string['min'] = 'أدنى';
$string['minmax'] = 'نطاق القيم';
$string['missingformula'] = 'معادلة مفقودة';
$string['missingname'] = 'اسم السؤال مفقود';
$string['missingquestiontext'] = 'نص السؤال مفقود';
$string['mustenteraformulaorstar'] = 'يجب عليك إدخال معادلة أو \'*\'.';
$string['newcategory1'] = 'سوف تستخدم مجموعة بيانات المشتركة جديدة';
$string['newcategory2'] = 'ملف من مجموعة جديدة من الملفات التي يمكن أن تستخدم أيضا من قبل الأسئلة أخرى في هذه الفئة';
$string['newcategory3'] = 'رابط من مجموعة جديدة من الارتباطات التي يمكن أن تستخدم أيضا من قبل أسئلة أخرى في هذه الفئة';
$string['newlocal1'] = 'سوف تستخدم مجموعة بيانات خاصة جديدة';
$string['newlocal2'] = 'ملف من مجموعة جديدة من الملفات التي سيتم استخدامها فقط من قبل هذا السؤال';
$string['newlocal3'] = 'رابط من مجموعة جديدة من الارتباطات التي سيتم استخدامها فقط من قبل هذا السؤال';
$string['newsetwildcardvalues'] = 'مجموعة(ات) جديدة من قيم(ة) البطاقات البديلة';
$string['nextitemtoadd'] = '\'العنصر المزمعة إضافته\' التالي';
$string['nextpage'] = 'الصفحة التالية';
$string['nocoherencequestionsdatyasetcategory'] = 'السؤال رقم {$a->qid}, the الفئة رقم  {$a->qcat} ليست متطابقة مع البطاقة البديلة المشتركة  {$a->name}  الفئة رقم {$a->sharedcat}. حرر السؤال.';
$string['nocommaallowed'] = 'إن الفارزة (,) لا يمكن استعمالها، استعمل النقطة (.) كما في 0.013 أو 1.3e-2';
$string['nodataset'] = 'لا شيء - إنها ليست البطاقات البديلة';
$string['nosharedwildcard'] = 'لا توجد بطاقة بديلة مشتركة في هذه الفئة';
$string['notvalidnumber'] = 'قيمة البطاقات البديلة ليست رقماً صالحاً';
$string['oneanswertrueansweroutsidelimits'] = 'جواب صحيح واحد على الأقل خارج حدود القيمة الحقيقية. <br/>قم بتعديل إعدادات التسامح في الإجابة والمتوفرة ضمن العوامل المتقدمة';
$string['param'] = 'العامل {<strong>{$a}</strong>}';
$string['partiallycorrectfeedback'] = 'لأي إجابة صحيحة جزئياً';
$string['pluginname'] = 'حسابي';
$string['pluginname_help'] = 'الأسئلة الحسابية .. تمكن الأسئلة العددية الفردية المراد إنشاؤها باستخدام البطاقات البديلة في الأقواس التي يتم استبدالها مع القيم الفردية عندما يتم أخذ هذا الاختبار. على سبيل المثال، فإن السؤال "ما هي مساحة مستطيل طوله {L} وعرضه {W}؟" سيكون صيغة الجواب الصحيح "{L} * {W}" (حيث * تدل على الضرب).';
$string['pluginname_link'] = 'question/type/calculated';
$string['pluginnameadding'] = 'إضافة سؤال حسابي';
$string['pluginnameediting'] = 'تحرير سؤال حسابي';
$string['pluginnamesummary'] = 'الأسئلة الحسابية مثل الأسئلة العددية ولكن مع أرقام مستعملة يتم اختيارها عشوائياً من مجموعة محددة، عندما يتم أخذ هذا الاختبار.';
$string['possiblehdr'] = 'البطاقات البديلة وجودها ممكن فقط في نص السؤال';
$string['privacy:metadata'] = 'إن ملحق نوع السؤال الحسابي لا يخزن أي بيانات شخصية.';
$string['questiondatasets'] = 'مجموعات بيانات السؤال';
$string['questiondatasets_help'] = 'مجموعة بيانات السؤال من البطاقات البديلة التي سيتم استخدامها في كل سؤال فردي';
$string['questionstoredname'] = 'اسم السؤال المخزن';
$string['replacewithrandom'] = 'استبدل بقيمة عشوائية';
$string['reuseifpossible'] = 'إعادة استخدام القيمة السابقة إذا كانت متوفرة';
$string['setno'] = 'المجموعة  {$a}';
$string['setwildcardvalues'] = 'قيم مجموعات البطاقات البديلة';
$string['sharedwildcard'] = 'بطاقة بديلة مشتركة  {<strong>{$a}</strong>}';
$string['sharedwildcardname'] = 'بطاقة بديلة مشتركة';
$string['sharedwildcards'] = 'البطاقات البديلة المشتركة';
$string['showitems'] = 'عرض';
$string['significantfigures'] = 'مع {$a}';
$string['significantfiguresformat'] = 'الخانات المهمة';
$string['synchronize'] = 'مزامنة البيانات من مجموعة بيانات مشتركة مع غيرها من المسائل في هذا الاختبار';
$string['synchronizeno'] = 'لا تزامن';
$string['synchronizeyes'] = 'تزامن';
$string['synchronizeyesdisplay'] = 'مزامنة وعرض اسم مجموعة بيانات مشتركة كما في بادئة اسم السؤال';
$string['tolerance'] = 'تسامح ±';
$string['tolerancetype'] = 'النوع';
$string['trueanswerinsidelimits'] = 'الإجابة الصحيحة : {$a->correct} داخل حدود القيمة الصحيحة {$a->true}';
$string['trueansweroutsidelimits'] = '<span class="error"> خطأ الجواب الصحيح: {$a->correct} خارج حدود القيمة الصحيحة {$a->true}</span>';
$string['uniform'] = 'منتظم';
$string['uniformbit'] = 'عشرية، من توزيع موحد';
$string['unsupportedformulafunction'] = 'الدالة {$a} غير مدعومة';
$string['updatecategory'] = 'تحديث الفئة';
$string['updatedatasetparam'] = 'تحديث معلمات مجموعات البيانات';
$string['updatetolerancesparam'] = 'تحديث معلمات التسامح في الإجابات';
$string['updatewildcardvalues'] = 'تحديث قيم البطاقات البديلة';
$string['useadvance'] = 'استعمل زر المتقدم لرؤية الأخطاء';
$string['usedinquestion'] = 'تستخدم في السؤال';
$string['wildcard'] = 'البطاقة البديلة {<strong>{$a}</strong>}';
$string['wildcardparam'] = 'معايير البطاقات البديلة المستخدمة لتوليد القيم';
$string['wildcardrole'] = 'الرموز البديلة <strong>{x..}</strong>سيتم استبدالها بقيمة رقمية من القيم المولدة';
$string['wildcards'] = 'البطاقات البديلة {a}...{z}';
$string['wildcardvalues'] = 'قيم البطاقات البديلة';
$string['wildcardvaluesgenerated'] = 'توليد قيم البطاقات البديلة';
$string['youmustaddatleastoneitem'] = 'ينبغي عليك إضافة عنصر واحد على الأقل من مجموعة البيانات قبل أن تتمكن من حفظ هذا السؤال.';
$string['youmustaddatleastonevalue'] = 'يجب إضافة مجموعة واحدة على الأقل من قيم البطاقات البديلة قبل أن تتمكن من حفظ هذا السؤال.';
$string['zerosignificantfiguresnotallowed'] = 'الإجابة الصحيحة لا يمكن أن تحتوي على صفر في الخانات المهمة!';
