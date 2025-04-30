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
 * Strings for component 'gradingform_erubric', language 'ar', version '4.4'.
 *
 * @package     gradingform_erubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backtoediting'] = 'عودة إلى التحرير';
$string['benchmarkinfo'] = 'النتائج من تحليلات التعلُّم';
$string['benchmarkinfonull'] = 'لا نتائج من تحليلات التعلُّم';
$string['confirmdeleteassignment'] = 'هل أنت متأكد من رغبتك في حذف هذا الواجب؟';
$string['deleteassignment'] = 'حذف الواجب';
$string['description'] = 'الوصف';
$string['enrichedvalueempty'] = 'إضافة قيمة';
$string['enrichedvaluesuffixnothing'] = '<font color="red"><b>!!!</b></font>';
$string['enrichment_help'] = 'شاهد البرنامج التعليمي الآتي عن كيفية إنشاء المعيار في تحليلات التعلُّم لسلم التقييم المعزز:
   <br /><br />
    <a target="_blank" href="https://www.youtube.com/watch?v=jCuNm463yTU">إنشاء معيار في تحليلات التعلُّم لسلم التقييم المعزز</a><br /><br />';
$string['enrichshareconfirm'] = '<p style="text-align:center;color:red;font-weight:bold">تنبيه!</p>
    ملحق <b>تحليلات التعلُّم لسلم التقييم المعزز</b> يمكن استعماله كقالب لنموذج تقييم متقدم ، فقط للمساق الحالي!
    إذا قام مستخدمون آخرون في موقعك باستعمال هذا النموذج في أي مساق آخر، <b>فلن يعمل معهم كما ينبغي</b>! سيبقى هيكل سلم التقييم سليمًا،
    ولكن سيكون عليك استبدال كل وحدات المساق المضمنة بوحدات مشابهة من المساق المقصود.';
$string['err_attention'] = '<p style="text-align:center;color:red;font-weight:bold">إنتباه!</p>';
$string['err_enrichedvalueformat'] = 'عدد قيم الفحص لكل مستوى معزز ينبغي أن يكون رقمًا صحيحًا موجبًا.';
$string['err_enrichedvaluemissing'] = 'المعيار المعزز ينبغي أن تكون له قيم فحص في كل المستويات.';
$string['err_missinglogstores'] = '<p><font color="red"><b>خطأ في نظام الوقوعات!</b></font></p>
    هذه الأداة يمكنها العمل فقط إذا تم تمكين سجلات الوقعات <b>القياسية</b> و/أو <b>القديمة</b>. لا يبدو أن أي منهما موجود.
    يرجى التواصل مع مشرف موقعك من أجل تفعل أيٍّ منهما إذا أردت استعمال هذه الأداة.
    لمزيد من المعلومات، راجع <a target="_blank" href="https://docs.moodle.org/35/en/Learning_Analytics_Enriched_Rubric">توثيقات الإضافة</a>.';
$string['err_nodescription'] = 'وصف المعيار لا يمكن أن يكون خاليًا';
$string['err_novariationsvalues'] = 'المعيار المعزز ينبغي أن تكون له قيم فحص مختلفة لكل المستويات، في نفس المعيار.';
$string['err_scoreformat'] = 'رقم الدرجات لكل مستوى ينبغي أن يكون رقمًا صالحًا (موجبًا أو سالبًا).';
$string['erubric'] = 'تحليلات التعلُّم لسلم التقييم المعزز';
$string['level'] = 'المستوى {$a->definition}، {$a->score} من النقاط.';
$string['lockzeropoints_help'] = 'هذا الإعداد يطبق فقط إذا كان مجموع العدد الأدنى من النقاط لكل معيار هو أكبر من الصفر.
    عند تأشيره، الدرجة الدنيا القابلة للتحقيق لسلم التقييم ستكون أكبر من صفر.
    عند عدم تأشيره، الدرجة الدنيا الممكنة لسلم التقييم سيتم تعيينها وفقًا للدرجة الدنيا المتاحة للنشاط (والتي تكون 0 ما لم يتم استعمال التقدير بمقياس).<br />
    لمزيد من المعلومات راجع توثيقات الإضافة بشأن <a target="_blank" href="https://docs.moodle.org/35/en/Learning_Analytics_Enriched_Rubric#Grade_calculation">إحتساب التقدير</a>.';
$string['name'] = 'الاسم';
$string['pluginname'] = 'تحليلات التعلُّم لسلم التقييم المعزز';
$string['privacy:metadata:fillings'] = 'جدول قاعدة البيانات الذي يخزن معلومات التقييم ومخرجاته من تحليلات التعلم وتنقيب البيانات.';
$string['regrademessage2'] = '<p style="text-align:center;color:red;font-weight:bold">تحذير!</p>
أنت على وشك حفظ تغييرات هامة في سلم تقييم معزز سبق وأن تم استعماله لتقييم الطلبة. القيم في سجل التقديرات لن تتغير ولكن سلم التقييم المعزز سيكون مخفياً عن الطلاب حتى تتم مراجعة نقديراتهم.';
$string['rubricmapping'] = 'قواعد تعيين النقاط للدرجات';
$string['scoreinputforlevel'] = 'إدخال الدرجة للمستوى {$a}';
$string['showdescriptionstudent'] = 'عَرض وصف سلم التقييم إلى من يتم تقييمهم';
$string['showdescriptionteacher'] = 'عَرض وصف سلم التقييم في أثناء التقييم';
