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
 * Strings for component 'qtype_gapfill', language 'ar', version '4.1'.
 *
 * @package     qtype_gapfill
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addhinttext'] = 'إضافة نص التلميح إلى نموذج التحرير';
$string['addhinttext_text'] = 'تسكين أول تلميحين في مقطع المحاولات المتعددة للنموذج';
$string['additemsettings'] = 'إضافة إعدادات الفراغ';
$string['answerdisplay'] = 'إعرض الإجابات';
$string['answerdisplay_help'] = 'السحب والإفلات يظهر قائمة من الكلمات التي يمكن سحبها إلى الفراغات، مالئ الفراغات يعرض فراغات بلا كلمات للاختيار منها، المنسدل يعرض نفس القائمة من الإجابات الصحيحة (والمحتمل أنها خاطئة) لكل حقل';
$string['blank'] = 'فارغ';
$string['cannotimport'] = 'لا يمكن الاستيراد';
$string['casesensitive'] = 'يتحسس حالة الأحرف';
$string['casesensitive_help'] = 'عند تأشيره، إذا كانت الإجابة الصحيحة هي CAT، ستُعتبر الإجابة cat بأنها غير صحيحة';
$string['correct'] = 'الإفادة بشأن الصحيح.';
$string['correctanswer'] = 'الإجابة الصحيحة';
$string['course'] = 'مساعد الاستيراد';
$string['coursenotfound'] = 'تعذر العثور على المساق، تحقق من اسمه المختصر';
$string['courseshortname'] = 'الاسم المختصر للمساق';
$string['courseshortname_help'] = 'أدخل الاسم المختصر للمساق المزمع استيراد السؤال إليه. هذا سيقوم بعملية استيراد قياسية للسؤال بصيغة XML من الملف example_questions.xml المتوضع في مجلد نوع السؤال، مالئ الفراغات.';
$string['delimitchars'] = 'الرموز المحددة';
$string['delimitchars_help'] = 'تغيير الرموز المحددة لموضع الفراغ عن الرمز الافتراضي [ ]، مفيد بالنسبة إلى أسئلة لغات البرمجة';
$string['delimitset_text'] = 'تحديد رموز الفراغات، بحيث يمكنك إضافة % % للعبارة The %cat% sat on the %mat%';
$string['disableregex'] = 'تعطيل التعابير الإعتيادية';
$string['disableregex_help'] = 'تعطيل معالجة التعابير الإعتيادية وإجراء مقارنة قياسية للجُمل. هذا قد يكون مفيداً لأسئلة html حيث تنبغي معاملة الأقواس الزاوية (&lt; و &gt;) حرفياً والرموز الرياضية مثل * ينبغي النظر إليها حرفياً بدلاً من معاملتها كتعابير';
$string['disableregexset_text'] = 'تعطيل معالجة التعابير الإعتيادية للاستجابات';
$string['displaydragdrop'] = 'السحب والإفلات';
$string['displaydropdown'] = 'المنسدل';
$string['displaygapfill'] = 'مالئ الفراغات';
$string['distractor1'] = 'أزرق,حذاء,صغير';
$string['distractor2'] = 'أزرق,حذاء,صغير';
$string['duplicatepartialcredit'] = 'الدرجة جزئية لأن لديك إجابات مكررة';
$string['editquestiontext'] = 'تحرير نص السؤال';
$string['example1'] = 'إسحب الكلمات إلى الفراغات. أَفَمَنْ هُوَ [قَائِمٌ] عَلَىٰ كُلِّ [نَفْسٍ] بِمَا كَسَبَتْ';
$string['example2'] = 'إختر الكلمات من القائمة المنسدلة. أَفَمَنْ هُوَ [قَائِمٌ] عَلَىٰ كُلِّ [نَفْسٍ] بِمَا كَسَبَتْ';
$string['example3'] = 'من أين يأتي الكنغر? [استراليا]. الفراغ الآتي سيتقبل إما النهر أو البحر [النهر|البحر]';
$string['fixedgapsize'] = 'حجم الفراغ ثابت';
$string['fixedgapsize_help'] = 'عند محاولة السؤال سيتم جعل كل الفراغات بنفس الحجم المناسب لأكبر فراغ منها. هذا من شأنه تجنب جعل حجم الفراغ كدليل على الإجابة الصحيحة، بعبارة أخرى، إن كانت الفراغات مثل [بلد] و [محيطات]، سيكون من الواضح أن كلمة محيطات محلها هو الفراغ الأكبر حجماً';
$string['fixedgapsizeset_text'] = 'يجعل حجم كل الفراغات مساوياً لحجم الفراغ الأكبر منها';
$string['gap_plural'] = 'الفراغات';
$string['gap_singular'] = 'الفراغ';
$string['gapfill'] = 'مالئ الفراغات.';
$string['importexamples'] = 'استيراد';
$string['incorrect'] = 'الإفادة بشأن الخاطئ.';
$string['itemsettings_button'] = 'إعدادات العنصر';
$string['itemsettings_button_help'] = 'النقر عليه سيبدل نمط الإعدادات لتصير على مستوى الفراغ الواحد، مثل إعدادات الإفادة بشأن الإجابة الصحيحة أو الإجابة الخاطئة. أنقر على الكلمة المحددة للفراغ لإظهار نموذج الإعدادات الخاص بها';
$string['itemsettingsbutton'] = 'إعدادات الفراغ';
$string['itemsettingserror'] = 'يعمل فقط مع محرر النصوص Atto. إذهب إلى تفضيلات المحرر للتبديل إلى Atto';
$string['letterhint0'] = 'ستتم إضافة الحرف الأول من الإجابة الصحيحة إلى كل فراغ إجابته خاطئة عند النقر على المحاولة مرة أخرى.';
$string['letterhint1'] = 'ستتم إضافة الحرف التالي من الإجابة الصحيحة عند النقر على المحاولة مرة أخرى.';
$string['letterhints'] = 'تلميحات الحروف';
$string['letterhints_help'] = 'إضافة حرف من الإجابة الصحيحة بمثابة تلميح في النمط التفاعلي عند إعطاء إجابة خاطئة. لا بد أن تكون التلميحات مستعملة مع المحاولات المتعددة ليتسنى لها الظهور.';
$string['letterhints_text'] = 'إضافة حرف من الإجابة الصحيحة بمثابة تلميح في النمط التفاعلي عند إعطاء إجابة خاطئة';
$string['moreoptions'] = 'خيارات أخرى';
$string['noduplicates'] = 'بلا تكرار';
$string['noduplicates_help'] = 'عند تأشيره، كل إجابة لا بد لها أن تكون فريدة، مفيد عندما يكون لكل حقل المعامل | ، ومثال على ذلك: ما هي أنواع الميداليات الأولمبية، وكل حقل فيه [ذهب|فضة|برونز]، إذا أدخل الطالب ذهب في كل حقل، سيحصل على علامة عن الحق الأول فقط، (الحقول الأخرى ستحصل على تأشيرة مع ذلك). هو في الواقع عملية إهمال للإجابات المتكررة لأغراض منح الدرجات.';
$string['optionsaftertext'] = 'الخيارات بعد النص';
$string['optionsaftertext_help'] = 'الخيارات التي تمثل الإجابات القابلة للسحب سيتم وضعها بعد متن النص بدلاً من أعلاه';
$string['optionsaftertext_text'] = 'ضع العناصر القابلة للسحب بعد متن النص';
$string['or'] = 'أو';
$string['pleaseenterananswer'] = 'لطفاً، أدخل الإجابة.';
$string['pluginname'] = 'مالئ الفراغات';
$string['pluginname_help'] = 'ضع الكلمات التي تريد إكمالها بين أقواس مربعة. مثلاً: ظهرت [الشمس] من بين [السحاب]. إذا كانت كلمتا السحاب والغيوم مقبولتان، استعمل [السحاب|الغيوم]. نمطا السحب والإفلات والمنسدل يسمحان بخلط قائمة الإجابات وعرضها؛ والتي يمكنها أن تتضمن إجابات خاطئة بغرض التشتيت.';
$string['pluginname_link'] = 'question/type/gapfill';
$string['pluginnameadding'] = 'تجري إضافة سؤال من نوع مالئ الفراغات.';
$string['pluginnameediting'] = 'تحرير سؤال مالئ الفراغات.';
$string['pluginnamesummary'] = 'نمط سؤال إملأ الفراغات. يسمح بالسحب والإفلات أو الخيارات من قائمة منسدلة مع وجود عناصر التشتيت. صياغته سهلة التعلم جداً.';
$string['privacy:null_reason'] = 'إن ملحق نوع السؤال، مالئ الفراغات لا يؤثر على أو يخزن أي بيانات بحد ذاته.';
$string['questioncatnotfound'] = 'تعذر العثور على صنف السؤال، أنقر <a href={$a}>هنا</a> لتأسيسه، ثم أنقر على زر العودة في المستعرض';
$string['questionsmissing'] = 'لم تقم بوضع اي حقول في نص سؤالك';
$string['questiontext'] = 'نص السؤال';
$string['questiontext_help'] = 'ضع المحددات حول الكلمات التي ستصير ضمن النص';
$string['singleuse'] = 'عناصر قابلة للسحب تُستعمل مرة واحدة';
$string['singleuse_help'] = 'إزالة العناصر القابلة للسحب من القائمة عند إفلاتها في الفراغ';
$string['singleuse_text'] = 'إزالة العناصر القابلة للسحب من القائمة عند إفلاتها في الفراغ';
$string['visitquestions'] = 'أنقر <a href={$a}>هنا</a> للذهاب إلى الأسئلة';
$string['wronganswers'] = 'عناصر التشتيت.';
$string['wronganswers_help'] = 'قائمة بالكلمات الخاطئة مصممة لتشتيت الانتباه عن الإجابات الصحيحة. يتم الفصل ما بين كل منها بفارزة، ويُطبق فقط مع نمطي السحب والإفلات والمنسدل.';
$string['yougotnrightcount'] = 'لقد أكملت {$a->num} {$a->gaporgaps} بشكل صحيح من أصل {$a->outof}.';
