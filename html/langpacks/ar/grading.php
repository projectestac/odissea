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
 * Strings for component 'grading', language 'ar', version '3.8'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = 'تم اختيار الطريقة \'{$a->method}\' بمثابة الطريقة النشطة لمنح العلامات لمنطقة \'{$a->area}\\';
$string['activemethodinfonone'] = 'لم يتم اختيار الطريقة المتقدمة لمنح العلامات لمنطقة \'{$a->area}\' بعد. منح العلامات البسيط والمباشر سيكون هو المتبع.';
$string['changeactivemethod'] = 'غيِّر الطريقة النشطة لمنح العلامات إلى';
$string['clicktoclose'] = 'انقر للإغلاق';
$string['error:notinrange'] = 'علامة غير صحيحة \'{$a->grade}\' تم تقديمها. العلامات ينبغي أن تتراوح ما بين 0 و {$a->maxgrade}.';
$string['exc_gradingformelement'] = 'غير قادر على إنشاء نموذج الدرجات';
$string['formnotavailable'] = 'تم اختيار طريقة التقييم المتقدم لاستخدامها ولكن نموذج التقييم غير مُتاح حتى الان. تحتاج إلى تعريف النموذج أولاً من خلال الرابط الموجود في كتلة الإعدادات';
$string['gradingformunavailable'] = 'الرجاء الانتباه: نموذج التقييم المُتقدم غيرجاهز حتى الان.سيتم استخدام طريقة التقييم البسيطة حتى يكون النموذج جاهز.';
$string['gradingmanagement'] = 'تقييم متقدم';
$string['gradingmanagementtitle'] = 'منح العلامات المتقدم: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'طريقة التقييم';
$string['gradingmethod_help'] = 'اختر طريقة التقييم المتقدمة التي ستستخدم لاحتساب العلامات في هذا السياق.

لإلغاء التقييم المتقدم والعودة لطريقة التقييم الافتراضية، اختر "تقييم بسيط ومباشر".';
$string['gradingmethodnone'] = 'تقييم بسيط ومباشر';
$string['gradingmethods'] = 'طرق التقييم';
$string['manageactionclone'] = 'إنشاء نموذج تقييم جديد من القالب';
$string['manageactiondelete'] = 'حذف النموذج المحدد حالياً';
$string['manageactiondeleteconfirm'] = 'أنت بصدد حذف العلامات من \'{$a->formname}\' وكل المعلومات ذات الصلة من \'{$a->component} ({$a->area})\'. لطفاً، تأكد من أنك تفهم التبعات الآتية:

* لاسبيل إلى التراجع عن هذه العملية.
* يمكنك التبديل إلى طريقة منح علامات أخرى بضمنها "منح العلامات البسيط والمباشر" دون الحاجة إلى حذف هذا النموذج.
* كل المعلومات التي تشرح كيفية عمل نموذج منح العلامات سيتم فقدانها.
* العلامات المحسوبة والناتجة من استعماله والمخزونة في سجل العلامات لن تتأثر. مع ذلك، التوضيحات بشأن كيفية احتسابها لن تكون متوافرة.
* هذه العملية لا تؤثر على النسخ النهائية الأخرى من هذا النموذج في النشاطات الأخرى.';
$string['manageactiondeletedone'] = 'تم حذف النموذج بنجاح';
$string['manageactionedit'] = 'تعديل إعدادات النموذج الحالي';
$string['manageactionnew'] = 'أنشئ نموذج تقييم جديد من البداية';
$string['manageactionshare'] = 'نشر النموذج كقالب جديد';
$string['manageactionshareconfirm'] = 'أنت بصدد حفظ نسخة من نموذج منح العلامات \'{$a}\' بمثابة قالب عمومي جديد. سيتمكن المستخدمون الآخرون في موقعك من إنشاء نماذج منح علامات جديدة لنشاطاتهم مستندين على هذا القالب.';
$string['manageactionsharedone'] = 'تم حفظ النموذج بنجاح كقالب';
$string['noitemid'] = 'التقييم غير ممكن. عنصر التقييم غير موجود';
$string['nosharedformfound'] = 'لم يتم إيجاد القالب';
$string['privacy:metadata:grading_definitions'] = 'معلومات أساسية عن نموذج منح علامات متقدم والمعرفة في منطقة قابلة لمنح العلامات.';
$string['privacy:metadata:grading_definitions:areaid'] = 'مُعرَّف المنطقة التي تم فيها تعريف نموذج منح العلامات المتقدم.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'مُعرَّف تعريف منح العلامات من حيث تم نسخ هذا.';
$string['privacy:metadata:grading_definitions:description'] = 'وصف طريقة منح العلامات المتقدمة.';
$string['privacy:metadata:grading_definitions:method'] = 'طريقة منح العلامات المسؤولة عن التعريف';
$string['privacy:metadata:grading_definitions:name'] = 'اسم تعريف طريقة منح العلامات المتقدمة';
$string['privacy:metadata:grading_definitions:options'] = 'بعض إعدادت تعريف منح العلامات هذا';
$string['privacy:metadata:grading_definitions:status'] = 'حالة طريقة منح العلامات المتقدمة هذه';
$string['privacy:metadata:grading_definitions:timecopied'] = 'وقت نسخ تعريف منح العلامات';
$string['privacy:metadata:grading_definitions:timecreated'] = 'وقت إنشاء تعريف منح العلامات';
$string['privacy:metadata:grading_definitions:timemodified'] = 'وقت التعديل الأخير لتعريف منح العلامات';
$string['privacy:metadata:grading_definitions:usercreated'] = 'مُعرَّف المستخدم الذي أنشأ تعريف منح العلامات';
$string['privacy:metadata:grading_definitions:usermodified'] = 'مُعرَّف المستخدم الذي أجرى آخر تعديل على تعريف منح العلامات';
$string['privacy:metadata:grading_instances'] = 'سجل التقييم لفقرة واحدة قابلة لمنح العلامة والمُقيَّمة من قبل مُقيِّم واحد';
$string['privacy:metadata:grading_instances:feedback'] = 'الإفادة المقدمة من قبل المستخدم';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'تنسيق النص للإفادة المقدمة من قبل المستخدم';
$string['privacy:metadata:grading_instances:raterid'] = 'مُعرَّف المستخدم الذي قيَّم عينة منح العلامة';
$string['privacy:metadata:grading_instances:rawgrade'] = 'علامة عينة منح العلامة';
$string['privacy:metadata:grading_instances:status'] = 'حالة عينة منح العلامة هذه';
$string['privacy:metadata:grading_instances:timemodified'] = 'وقت آخر تعديل على عينة منح العلامة';
$string['privacy:metadata:gradingformpluginsummary'] = 'بيانات لطريقة منح العلامات';
$string['searchownforms'] = 'ضمِّن نماذجي الخاصة';
$string['searchtemplate'] = 'البحث في نماذج التقييم';
$string['searchtemplate_help'] = 'يمكنك البحث عن نموذج منح العلامات واستعماله بمثابة قالب لنموذج منح العلامات الجديد هنا. ببساطة، أدخل الكلمات التي تتوقع وجودها في تسمية النموذج، وصفه، أو متن النموذج نفسه. للبحث عن عبارة كاملة كما هي، ضع كلماتها بين علامتي اقتباس مزدوج.

إفتراضياً، نموذج منح العلامات الذي تم حفظه كنموذج متاح للمشاركة هو ما سيظهر في نتائج البحث فقط. يمكنك أيضاً تضمين كل نماذجك الخاصة في نتائج البحث. بهذه الطريقة، يمكنك ببساطة إعادة استعمال نماذج منح العلامات الخاصة بك دون الحاجة إلى مشاركتها. النماذج المعلمة على أنها \'جاهزة للاستعمال\' فقط يمكن إعادة استعمالها بهذه الطريقة.';
$string['statusdraft'] = 'مسودة';
$string['statusready'] = 'جاهز للاستخدام';
$string['templatedelete'] = 'حذف';
$string['templatedeleteconfirm'] = 'أنت بصدد حذف القالب المشاع \'{$a}\'. حذف القالب لا يؤثر على النماذج المتواجدة والتي سبق إنشاؤها منه.';
$string['templateedit'] = 'تحرير';
$string['templatepick'] = 'استخدم هذا القالب';
$string['templatepickconfirm'] = 'هل ترغب باستعمال نموذج منح العلامات \'{$a->formname}\' بمثابة قالب لنموذج منح العلامات الجديد في \'{$a->component} ({$a->area})\'؟';
$string['templatepickownform'] = 'استعمل هذا النموذج بمثابة قالب';
$string['templatesource'] = 'الموقع: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'نموذج خاص بي';
$string['templatetypeshared'] = 'قالب مُشترك';
