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
 * Strings for component 'qtype_multianswer', language 'ar', version '3.11'.
 *
 * @package     qtype_multianswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'أؤكد أنني أريد أن يتم حفظ السؤال كما حررته';
$string['confirmsave'] = 'تأكيد ثم حفظ {$a}';
$string['correctanswer'] = 'الإجابة الصحيحة';
$string['correctanswerandfeedback'] = 'الجواب الصحيح والإفادة';
$string['decodeverifyquestiontext'] = 'فك الترميز والتحقق من نص السؤال';
$string['invalidmultianswerquestion'] = 'سؤال الإجابات المضمنة (Cloze) غير صالح ({$a}).';
$string['layout'] = 'تصميم';
$string['layouthorizontal'] = 'صف أفقي من أزرار الراديو';
$string['layoutmultiple_horizontal'] = 'صف أفقي من خانات الاختيار';
$string['layoutmultiple_vertical'] = 'العمود الرأسي من خانات الاختيار';
$string['layoutselectinline'] = 'القائمة المنسدلة مضمنة في النص';
$string['layoutundefined'] = 'تصميم غير معروف';
$string['layoutvertical'] = 'عمود رأسي من أزرار الراديو';
$string['nooptionsforsubquestion'] = 'غير قادر على الحصول على خيارات السؤال للجزء # {$a->sub} (question->id={$a->id})';
$string['noquestions'] = 'السؤال أكمل الفراغ (الإجابات المتعددة) "<strong>{$a}</strong>" لا يحتوي على أي سؤال';
$string['pleaseananswerallparts'] = 'يرجى الإجابة على جميع أجزاء السؤال.';
$string['pluginname'] = 'الإجابات المضمنة (إكمال الفراغ)';
$string['pluginname_help'] = 'أسئلة الإجابات المضمنة (Cloze) تتكون من قطعة نصية ذات أسئلة مثل متعدد الخيارات والإجابات القصيرة مضمنة داخلها.';
$string['pluginnameadding'] = 'بإضافة إجابات مضمنة للسؤال (إكمال الفراغ)';
$string['pluginnameediting'] = 'بتحرير الإجابات المضمنة للسؤال (إكمال الفراغ)';
$string['pluginnamesummary'] = 'الأسئلة من هذا النوع مرنة للغاية، ولكن يمكن فقط إنشاؤها عبر إدخال نص يحتوي رموزًا خاصة لتضمين متعدد الخيارات، الإجابات القصيرة والأسئلة العددية.';
$string['privacy:metadata'] = 'إن ملحق نوع السؤال، الإجابات المضمنة (Cloze) لا يخزن أي بيانات شخصية.';
$string['qtypenotrecognized'] = 'نوع السؤال {$a} غير معروف';
$string['questiondefinition'] = 'تعريف السؤال';
$string['questiondeleted'] = 'حذف السؤال';
$string['questioninquiz'] = '<ul>
 <li>إضافة الأسئلة أو حذفها، </li>
 <li>تغيير ترتيب الأسئلة في النص، </li>
 <li>تغيير نوع الأسئلة (العددية، الإجابة القصيرة، الاختيار من متعدد). </li></ul>';
$string['questionnotfound'] = 'تعذر العثور على نص السؤال للجزء #{$a}';
$string['questionsadded'] = 'أضيف السؤال';
$string['questionsaveasedited'] = 'سيتم حفظ السؤال كما حررته';
$string['questionsless'] = '{$a} الأسئلة أقل مما كانت عليه في جواب الأسئلة المتعددة المخزنة في قاعدة البيانات';
$string['questionsmissing'] = 'يجب أن يتضمن نص السؤال إجابة واحدة على الأقل مضمنة.';
$string['questionsmore'] = '{$a} الأسئلة أكثر مما كانت عليه في جواب الأسئلة المتعددة المخزنة في قاعدة البيانات';
$string['questiontypechanged'] = 'نوع السؤال تغيّر';
$string['questiontypechangedcomment'] = 'تم تغيير واحد على الأقل نوع السؤال. <br\\> هل تمت إضافة أو حذف أو نقل السؤال؟ <br\\> نتطلع إلى الأمام.';
$string['questionusedinquiz'] = 'يستخدم هذا السؤال في {$a->nb_of_quiz} اختبار , جميع المحاولات : {$a->nb_of_attempts}';
$string['storedqtype'] = 'تخزين نوع السؤال {$a}';
$string['subqresponse'] = 'الجزء {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'نوع السؤال غير معروف : {$a->type} من جزء السؤال # {$a->sub}';
$string['warningquestionmodified'] = '<b> تحذير </b>';
$string['youshouldnot'] = '<b> يجب عليك ألّا </b>';
