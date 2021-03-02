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
 * Strings for component 'qtype_ddmarker', language 'ar', version '3.8'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'الفراغات لـ {no} علامات أخرى';
$string['alttext'] = 'النص القديم';
$string['answer'] = 'الإجابة';
$string['bgimage'] = 'صورة خلفية';
$string['clearwrongparts'] = 'حرك العلامات الموضوعة بشكل غير صحيح إلى موضع البدء الافتراضي أسفل الصورة';
$string['coords'] = 'إحداثيات';
$string['correctansweris'] = 'الإجابة الصحيحة هي: {$a}';
$string['draggableimage'] = 'صورة قابلة للسحب';
$string['draggableitem'] = 'عنصر قابل للسحب';
$string['draggableitemheader'] = 'عنصر قابل للسحب {$a}';
$string['draggableitemtype'] = 'النوع';
$string['draggableword'] = 'نص قابل للسحب';
$string['dropbackground'] = 'صورة خلفية لسحب علامات عليها';
$string['dropzone'] = 'منطقة الإفلات {$a}';
$string['dropzoneheader'] = 'مناطق الإسقاط';
$string['dropzones'] = 'مناطق الإسقاط';
$string['dropzones_help'] = 'يمكن تحديد مناطق الإسقاط بالإحداثيات ، أو جرها إلى موضعها في المعاينة أعلاه. سيؤدي تحديد شكل (دائرة أو مستطيل أو مضلع) أولاً إلى إضافة شكل منطقة إفلات جديد إلى أعلى يسار المعاينة. قد يكون من المفيد تصغير قسم "علامات" حتى تتمكن من رؤية المعاينة أثناء تحرير مناطق الإفلات.
يبدأ تحرير الشكل بنقرة على الشكل في المعاينة لإظهار مقابض التحرير. يمكنك تحريك الشكل باستخدام المقبض الأوسط ، أو ضبط أبعاد الشكل بمقابض الرأس. بالنسبة للمضلعات فقط ، سيؤدي الضغط على زر التحكم (زر الأمر في نظام التشغيل Mac) أثناء النقر فوق مقبض رأس إلى إضافة رأس جديد إلى المضلع. يرجى الحفاظ على شكل مضلع بسيط قدر الإمكان ، دون عبور خطوط.
للحصول على معلومات ، تستخدم الأشكال الثلاثة الإحداثيات بهذه الطريقة: * دائرة: نصف القطر ،  المركز_x، المركز _y؛
80،100 ؛ 50
* مستطيل: top_left_x ، top_left_y ؛ عرض ارتفاع
على سبيل المثال: 20،60 ؛ 80،40
* المضلع: x1 ، y1 ؛ x2 ، y2 ؛ ...؛ إكس ، ين
على سبيل المثال: 20،60؛ 100،60؛ 20،100 سيؤدي تحديد نص علامة إلى إضافة هذا النص إلى الشكل في المعاينة.';
$string['followingarewrong'] = 'تم وضع العلامات التالية في المنطقة الخطأ: {$a}.';
$string['followingarewrongandhighlighted'] = 'تم وضع العلامات التالية بشكل غير صحيح: {$a}. يتم الآن تمييز علامة (علامات) مميزة مع الموضع (المواضع) الصحيحة.';
$string['formerror_nobgimage'] = 'تحتاج إلى تحديد صورة لاستعمالها كخلفية لمنطقة السحب والإفلات.';
$string['formerror_noitemselected'] = 'لقد حددت منطقة إفلات ولكن لم تختر علامة يجب سحبها إلى المنطقة.';
$string['formerror_nosemicolons'] = 'لا توجد فواصل منقوطة في سلسلة الإحداثيات. يجب التعبير عن إحداثياتك لـ {$a->shape} كـ - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'يُسمح فقط بعلامات "{$a}" في التصنيف الخاص بالعلامة.';
$string['formerror_onlyusewholepositivenumbers'] = 'يرجى استعمال الأرقام الموجبة الكاملة فقط لتحديد إحداثيات x و y و/أو عرض الأشكال وارتفاعها. يجب التعبير عن إحداثياتك لـ {$a->shape} بشكل - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'للحصول على شكل مضلع تحتاج إلى تحديد 3 نقاط على الأقل.
يجب التعبير عن إحداثياتك لـ {$a->shape} كـ - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'لقد أدخلت نفس الإحداثيات مرتين. كل نقطة يجب أن تكون فريدة من نوعها. يجب التعبير عن إحداثياتك لـ {$a->shape} كـ - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'يخرج الشكل الذي حددته من حدود صورة الخلفية.';
$string['formerror_toomanysemicolons'] = 'هناك الكثير من الأجزاء المفصولة بفاصلة منقوطة إلى الإحداثيات التي حددتها.
يجب التعبير عن إحداثياتك لـ {$a->shape} كـ - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'لا يمكن التعرف على العرض و الارتفاع اللذين حددتهما. يجب التعبير عن إحداثياتك لـ {$a->shape} كـ - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'إحداثيات x، y التي حددتها غير معروفة. يجب التعبير عن إحداثياتك لـ {$a->shape} كـ - {$a->coordsstring}.';
$string['infinite'] = 'غير محدود';
$string['marker'] = 'علامة';
$string['marker_n'] = 'علامة {no}';
$string['markers'] = 'علامات';
$string['nolabel'] = 'نص التسمية مفقود';
$string['noofdrags'] = 'الرقم';
$string['pleasedragatleastonemarker'] = 'إجابتك ليست كاملة.
يجب وضع علامة واحدة على الأقل على الصورة.';
$string['pluginname'] = 'سحب و إسقاط العلامات';
$string['pluginname_help'] = 'تتطلب علامات السحب والإفلات من المستجيب سحب علامات النص وإفلاتها في مناطق الإسقاط المحددة في صورة خلفية.';
$string['pluginnameadding'] = 'إضافة علامات السحب والإفلات';
$string['pluginnameediting'] = 'تحرير علامات السحب والإفلات';
$string['pluginnamesummary'] = 'يتم سحب العلامات وإفلاتها على صورة الخلفية.

ملاحظة: نوع السؤال هذا لا يمكن التعامل معه من قبل ذوي الإعاقة البصرية.';
$string['previewareaheader'] = 'المعاينة';
$string['previewareamessage'] = 'حدد ملف صورة الخلفية، وأدخل ملصقات نصية للعلامات وحدد مناطق الإفلات على صورة الخلفية التي يجب سحبها إليها.';
$string['privacy:metadata'] = 'لا يخزن المكون الإضافي Drag and drop markers question type أيّ بيانات شخصية.';
$string['refresh'] = 'تحديث المعاينة';
$string['shape'] = 'الشكل';
$string['shape_circle'] = 'الدائرة';
$string['shape_circle_coords'] = 'x ، y ؛ r (حيث x ، y هي إحداثيات مركز الدائرة و r هي نصف القطر)';
$string['shape_circle_lowercase'] = 'دائرة';
$string['shape_polygon'] = 'المضلع';
$string['shape_polygon_coords'] = 'x1 ، y1 ؛ x2 ، y2 ؛ x3 ، y3 ؛ x4 ، y4 ... (حيث x1 ، y1 هي إحداثيات القمة الأولى ، x2 ، y2 هي إحداثيات الثانية وما إلى ذلك. ليست هناك حاجة لتكرار الإحداثيات لأول قمة لإغلاق المضلع.)';
$string['shape_polygon_lowercase'] = 'المضلع';
$string['shape_rectangle'] = 'المستطيل';
$string['shape_rectangle_coords'] = 'x ، y ، w ، h (حيث x ، y هي إحداثيات الزاوية العليا اليسرى من المستطيل و w و h هي عرض وارتفاع المستطيل)';
$string['shape_rectangle_lowercase'] = 'مستطيل';
$string['showmisplaced'] = 'قم بتمييز مناطق الإسقاط التي لم يتم تحديد العلامة الصحيحة عليها';
$string['shuffleimages'] = 'خلط عناصر السحب في كل مرة يتم فيها محاولة السؤال';
$string['stateincorrectlyplaced'] = 'حدد العلامات التي وضعت بشكل غير صحيح';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'منطقة الإفلات {$a}';
$string['ytop'] = 'أعلى';
