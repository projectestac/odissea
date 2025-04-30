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
 * Strings for component 'gradingform_rubric', language 'ar', version '4.4'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'أضف معياراً';
$string['additionalfeedback'] = 'إفادة إضافية';
$string['alwaysshowdefinition'] = 'إسمح للمستخدمين بمعاينة سلم التقييم (بخلافه، سيتم عرضه فقط بعد التقييم)';
$string['backtoediting'] = 'عودة إلى التحرير';
$string['confirmdeletecriterion'] = 'هل أنت متأكد من رغبتك في حذف هذا المعيار؟';
$string['confirmdeletelevel'] = 'هل أنت متأكد من رغبتك في حذف هذا المستوى؟';
$string['criterion'] = 'المعيار {$a}';
$string['criterionaddlevel'] = 'أضف مستوىً';
$string['criteriondelete'] = 'إحذف المعيار';
$string['criterionduplicate'] = 'تكرار المعيار';
$string['criterionempty'] = 'أنقر لتحرير المعيار';
$string['criterionmovedown'] = 'أنقل للأسفل';
$string['criterionmoveup'] = 'أنقل للأعلى';
$string['criterionremark'] = 'ملاحظة عن المعيار {$a->description}: {$a->remark}';
$string['definerubric'] = 'تعريف سلم التقييم';
$string['description'] = 'الوصف';
$string['enableremarks'] = 'إسمح للمقيِّم بوضع ملاحظات نصية لكل معيار';
$string['err_mintwolevels'] = 'كل معيار ينبغي أن يكون له مستويان اثنان على الأقل';
$string['err_nocriteria'] = 'سلم التقييم ينبغي أن يتكون من معيار واحد على الأقل';
$string['err_nodefinition'] = 'تعريف المستوى لا يمكن أن يترك فارغاً';
$string['err_nodescription'] = 'وصف المعيار لا يمكن أن يترك فارغاً';
$string['err_novariations'] = 'مستويات المعيار لا يمكن لها أن تتساوى من حيث النقاط';
$string['err_scoreformat'] = 'عدد النقاط لكل مستوى ينبغي أن يكون رقماً صالحاً';
$string['err_totalscore'] = 'أقصى عدد من النقاط الممكنة عند استعمال سلم التقييم ينبغي أن يكون أكبر من صفر.';
$string['gradingof'] = 'وضع درجات {$a}';
$string['level'] = 'المستوى {$a->definition}، {$a->score} نقاط.';
$string['leveldefinition'] = 'تعريف المستوى {$a}';
$string['leveldelete'] = 'إحذف المستوى {$a}';
$string['levelempty'] = 'أنقر لتحرير المستوى';
$string['levelsgroup'] = 'مجموعة المستويات';
$string['lockzeropoints'] = 'إحسب العلامة التي لها أدنى درجة يمكن تحقيقها لسلم التقييم';
$string['lockzeropoints_help'] = 'هذا الإعداد يظهر فقط إذا كان مجموع الحد الأدنى من النقاط لكل معيار أكبر من 0. عند تأشيره، ستكون أدنى درجة للنشاط هي الدرجة الأدنى الممكن تحققها في سلم التقييم. عند عدم تأشيرها، ستكون أدنى درجة ممكنة في سلم التقييم معينة حسب الدرجة الأدنى المساقة في النشاط (والتي هي 0 ما لم يتم استعمال مقياس ما).';
$string['name'] = 'الاسم';
$string['needregrademessage'] = 'لقد تغير تعريف سلم التقييم بعد منح التقديرات لهذا الطالب. لا يمكن للطالب معاينة هذا السلم حتى تقوم بالتحقق منه وتحديث الدرجة.';
$string['notset'] = 'غير مُعد';
$string['pluginname'] = 'سلم التقييم';
$string['pointsvalue'] = '{$a} نقاط';
$string['previewrubric'] = 'استعراض سلم التقييم';
$string['privacy:metadata:criterionid'] = 'مُعرَّف لمعيار معين يتم وضع التقديرات له';
$string['privacy:metadata:fillingssummary'] = 'يخزن معلومات عن علامة المستخدم المنشأة من قبل سلم التقييم';
$string['privacy:metadata:instanceid'] = 'مُعرَّف يعود إلى علامة في نشاط';
$string['privacy:metadata:levelid'] = 'المستوى الذي تم الوصول إليه في سلم التقييم';
$string['privacy:metadata:remark'] = 'ملاحظات متعلقة بمعيار سُلم التقييم الذي يجري تقييمه';
$string['regrademessage1'] = 'أنت على وشك حفظ التغييرات في سلم تقييم سبق وأن تم استعماله لتقييم الطلبة. لطفاً، حدد فيما إذا كانت التقديرات الحالية بحاجة إلى مراجعة. إذا اخترت ذلك، فسيكون سلم التقييم مخفياً عن الطلاب حتى تتم مراجعة تقديراتهم.';
$string['regrademessage5'] = 'أنت على وشك حفظ تغييرات هامة في سلم تقييم سبق وأن تم استعماله لتقييم الطلبة. القيم في سجل التقديرات لن تتغير ولكن سلم التقييم سيكون مخفياً عن الطلاب حتى تتم مراجعة تقديراتهم.';
$string['regradeoption0'] = 'لا تضع علامة لإعادة التقييم';
$string['regradeoption1'] = 'ضع علامة لإعادة التقييم';
$string['restoredfromdraft'] = 'ملاحظة: آخر محاولة لتقييم هذا الشخص لم يتم حفظها بشكل صحيح لذلك تمت استعادة مسودات التقديرات. إذا أردت إلغاء هذه التغييرات استعمل زر \'إلغاء\' أدناه.';
$string['rubric'] = 'سلم التقييم';
$string['rubricmapping'] = 'قواعد تعيين النقاط للدرجات';
$string['rubricmappingexplained'] = 'الدرجة الصغرى الممكنة لسلم التقييم هذا هي <b>{$a->minscore} نقطة</b>. سيتم تحويلها إلى الدرجة الصغرى المتاحة في النشاط (والتي هي 0 ما لم تتم مقايستها). الدرجة القصوى والتي هي <b>{$a->maxscore} نقطة</b> سيتم تحويلها إلى الدرجة القصوى للنشاط. الدرجات الوسطى سيتم تحويلها وفقاً لذلك.

إذا تم استعمال المقياس لوضع الدرجات، سيتم تقريب الدرجة وتحويلها إلى عناصر المقياس كما لو أنها أعداد صحيحة متوالية.

يمكن تغيير حسابات هذه الدرجة عبر تحرير النموذج وتأشير الخانة \'إحسب الدرجة التي لها أدنى درجة يمكن تحقيقها لسلم التقييم\'.';
$string['rubricnotcompleted'] = 'لطفاً، إختر شيئاً ما لكل معيار';
$string['rubricoptions'] = 'خيارات سلم التقييم';
$string['rubricstatus'] = 'حالة سلم التقييم الحالي';
$string['save'] = 'احفظ';
$string['saverubric'] = 'إحفظ سلم التقييم واجعله جاهزاً';
$string['saverubricdraft'] = 'الحفظ كمسودة';
$string['scoreinputforlevel'] = 'إدخال الدرجة للمستوى {$a}';
$string['scorepostfix'] = '{$a} نقاط';
$string['showdescriptionstudent'] = 'إعرض وصف سلم التقييم لمن يتم تقييمهم';
$string['showdescriptionteacher'] = 'إعرض وصف سلم التقييم خلال التقييم';
$string['showremarksstudent'] = 'أظهر الملاحظات لمن يتم تقييمهم';
$string['showscorestudent'] = 'أظهر النقاط لكل مستوى لمن يتم تقييمهم';
$string['showscoreteacher'] = 'أظهر النقاط لكل مستوى خلال التقييم';
$string['sortlevelsasc'] = 'اتجاه الفرز للمستويات:';
$string['sortlevelsasc0'] = 'تنازلياً حسب عدد النقاط';
$string['sortlevelsasc1'] = 'تصاعدياً حسب عدد النقاط';
$string['zerolevelsabsent'] = 'تحذير: أدنى درجة ممكنة لسلم التقييم هذا ليست 0؛ هذا قد يؤدي إلى درجات غير متوقعة للنشاط. لتجنب ذلك، كل معيار ينبغي أن يكون له مستوى ذي 0 من النقاط.<br>
يمكن تجاهل هذا التحذير إذا تم استعمال المقياس لوضع الدرجات، والمستويات الصغرى في سلم التقييم تقترن بالقيم الصغرى للمقياس.';
