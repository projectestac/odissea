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
 * Strings for component 'condition', language 'ar', version '4.5'.
 *
 * @package     condition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'أضف {no} شروط نشاط للنموذج';
$string['addgrades'] = 'أضف {no} شروط تقديرات للنموذج';
$string['adduserfields'] = '{لا} تضف شروطاً إلى حقل المستخدم في النموذج';
$string['availabilityconditions'] = 'تقييد الوصول';
$string['availablefrom'] = 'السماح بالوصول له من';
$string['availablefrom_help'] = 'تاريخي البدء/الانتهاء تحدد الفترة الزمينة التي يمكن بها للطلاب الدخول على النشاط عبر رابط في صفحة المقرر.

الفرق بين تاريخي البدء/الانتهاء وإعدادات التوافر للنشاط هو أنه خارج تلك الفترة، تاريخا البدء/الانتهاء يمنعان الوصول تماماً، في حين أن التوافر يتيح للطلبة معاينة وصف النشاط.';
$string['availableuntil'] = 'يمكن الدخول حتى';
$string['badavailabledates'] = 'التواريخ غير صالحة، إن كنت قد وضعت كلا التاريخين، يجب أن يكون تاريخ "يمكن الدخول من" قبل تاريخ "حتى"';
$string['badgradelimits'] = 'إذا قمت بتحديد كل من الدرجتين العليا والصغرى، فلا بد أن تكون الدرجة العليا أكبر قيمة من الصغرى.';
$string['completion_complete'] = 'يجب أن يكون معلّماً بأنه مكتمل';
$string['completion_fail'] = 'يجب أن يكون مكتملاً مع علامة رسوب';
$string['completion_incomplete'] = 'لا يجب أن يكون معلّم بأنه مكتمل';
$string['completion_pass'] = 'يجب أن يكون مكتملاً مع علامة نجاح';
$string['completioncondition'] = 'شرط إكمال النشاط';
$string['completioncondition_help'] = 'يحدد هذا الإعداد أي شروط إكمال النشاط يجب تحقيقها لكي يصبح النشاط متوافرًا. لاحظ أنه لكي تتمكن من ضبط شرط إكمال النشاط يجب أولاً ضبط تتبع الإكمال.

يمكن وضع عدة شروط لإكمال النشاط عند الرغبة. وعندها يجب أن تتحقق كل هذه الشروط لكي يصبح النشاط متوافرًا.';
$string['completionconditionsection'] = 'شرط إكمال النشاط';
$string['completionconditionsection_help'] = 'هذا الإعداد يقرر شروط إكمال النشاط التي لا بد من تلبيتها من أجل إتاحة الوصول إلى القسم. لاحظ أن ميزة تتبع الإكمال لا بد من تمكينها قبل أن يكون بالإمكان وضع أي من شروط الإكمال للنشاط.

يمكن تحديد شروط إكمال متعددة حسب الحاجة. إذا كانت الحال كذلك، فلا بد عندها من تلبية كل تلك الشروط ليكون القسم متاحاً للوصول.';
$string['configenableavailability'] = 'عندتمكينه، يتيح لك وضع شروط (بناءً على التاريخ، الدرجة، أو الإكمال) لتحديد فيما إذا كان النشاط متاحاً للوصول إليه.';
$string['contains'] = 'يحتوي';
$string['doesnotcontain'] = 'لا يحتوي';
$string['enableavailability'] = 'فعل خاصية الدخول المشروط';
$string['endswith'] = 'ينتهي بـ';
$string['fielddeclaredmultipletimes'] = 'لا يمكنك التصريح بنفس الحقل لأكثر من مرة لنفس النشاط.';
$string['grade_atleast'] = 'يجب أن يكون على الأقل';
$string['grade_upto'] = 'وأقل من';
$string['gradecondition'] = 'شرط الدرجة';
$string['gradecondition_help'] = 'يحدد هذا الإعداد أي شروط الدرجات يجب تحقيقها لكي يصبح النشاط متوافرًا. لاحظ أنه لكي تتمكن من ضبط شرط إكمال النشاط يجب أولاً ضبط تتبع الإكمال.

يمكن وضع عدة شروط درجات عند الرغبة. وعندها يجب أن تتحقق كل هذه الشروط لكي يصبح النشاط متوافرًا.';
$string['gradeconditionsection'] = 'شرط الدرجة';
$string['gradeconditionsection_help'] = 'هذا الإعداد يقرر شرط الدرجة الذي لا بد من تلبيته من أجل إتاحة الوصول إلى القسم.

يمكن تحديد شروط درجة متعددة حسب الحاجة. إذا كانت الحال كذلك، فلا بد عندها من تلبية كل تلك الشروط ليكون القسم متاحاً للوصول.';
$string['gradeitembutnolimits'] = 'عليك إدخال الحد الأعلى أو الحد الأدنى أو كليهما.';
$string['gradelimitsbutnoitem'] = 'عليك اختيار أحد عناصر الدرجة.';
$string['gradesmustbenumeric'] = 'العلامتان العظمى والصغرى لا بد أن تكونا رقمين (أو فارغتين).';
$string['groupingnoaccess'] = 'أنت غير منتمٍ حالياً إلى مجموعة لديها حق الوصول إلى هذا القسم.';
$string['isempty'] = 'هو فارغ';
$string['isequalto'] = 'هو يساوي';
$string['isnotempty'] = 'ليست خالية';
$string['none'] = '(لا شيء)';
$string['notavailableyet'] = 'غير متوافر حتى الآن';
$string['requires_completion_0'] = 'غير متوافر مالم يكن النشاط <strong>{$a}</strong> غير مكتمل.';
$string['requires_completion_1'] = 'غير متوافر إلى أن يعلّم النشاط <strong>{$a}</strong> بأنه مكتمل.';
$string['requires_completion_2'] = 'غير متوافر إلى أن يعلّم النشاط <strong>{$a}</strong> بأنه مكتمل وناجح.';
$string['requires_completion_3'] = 'غير متوافر مالم يكن النشاط <strong>{$a}</strong> مكتملاً وراسبًا.';
$string['requires_date'] = 'متوافر من {$a}.';
$string['requires_date_before'] = 'متوافر حتى {$a}.';
$string['requires_date_both'] = 'متوافر من {$a->from} إلى  {$a->until}.';
$string['requires_date_both_single_day'] = 'متاحة في {$a}.';
$string['requires_grade_any'] = 'غير متوافر إلى أن تحصل على علامة <strong>{$a}</strong>.';
$string['requires_grade_max'] = 'غير متاح إلى أن تحصل على درجة مناسبة في <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'غير متاح إلى أن تحقق الدرجة المطلوبة في <strong>{$a}</strong>.';
$string['requires_grade_range'] = 'غير متوافر مالم تحصل على المحصلة المحددة في <strong>{$a}</strong>.';
$string['requires_grouping'] = 'متاحة حصرياً إلى التجميع <strong>{$a}</strong>.';
$string['requires_user_field_contains'] = 'ليست متاحة ما لم يكن حقل <strong>{$a->field}</strong> لديك محتوياً على <strong>{$a->value}</strong>.';
$string['requires_user_field_doesnotcontain'] = 'ليست متاحة إذا كان حقل <strong>{$a->field}</strong> لديك محتوياً على <strong>{$a->value}</strong>.';
$string['requires_user_field_endswith'] = 'ليست متاحة ما لم يكن حقل <strong>{$a->field}</strong> لديك منتهياً بـ <strong>{$a->value}</strong>.';
$string['requires_user_field_isempty'] = 'ليست متاحة ما لم يكن حقل <strong>{$a->field}</strong> لديك خالياً.';
$string['requires_user_field_isequalto'] = 'ليست متاحة ما لم يكن حقل <strong>{$a->field}</strong> لديك مساوياً لـ <strong>{$a->value}</strong>.';
$string['requires_user_field_isnotempty'] = 'ليست متاحة إذا كان حقل <strong>{$a->field}</strong> لديك خالياً.';
$string['requires_user_field_startswith'] = 'ليست متاحة ما لم يكن حقل <strong>{$a->field}</strong> لديك بادئاً بـ <strong>{$a->value}</strong>.';
$string['showavailability'] = 'طالما كان الوصول ممنوعاً';
$string['showavailability_hide'] = 'إخفاء النشاط بالكامل في المساق وفي سجل التقديرات';
$string['showavailability_show'] = 'إعرض النشاط غير مفعلاً (بلون رمادي)، مع معلومات عن سبب التقييد';
$string['showavailabilitysection'] = 'قبل إتاحة الوصول إلى القسم';
$string['showavailabilitysection_hide'] = 'إخفاء القسم بالكامل';
$string['showavailabilitysection_show'] = 'أظهر القسم باللون الرمادي مع معلومات تقييد الوصول';
$string['startswith'] = 'يبدأ بـ';
$string['userfield'] = 'حقل المستخدم';
$string['userfield_help'] = 'يمكنك تقييد الوصول بناءً على أي حقل من حقول الملف الشخصي للمستخدمين.';
$string['userrestriction_hidden'] = 'مقيَّد (مخفي بالكامل، دون رسالة): {$a}';
$string['userrestriction_visible'] = 'مقيَّد: {$a}';
