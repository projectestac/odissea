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
 * Strings for component 'block', language 'ar', version '4.4'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addblock'] = 'إضافة كتلة {$a}';
$string['anypagematchingtheabove'] = 'أيّ صفحة مطابقة مع الصفحة أعلاه';
$string['appearsinsubcontexts'] = 'يظهر في المحتويات الفرعية';
$string['assignrolesinblock'] = 'تعيين الأدوار في {$a}';
$string['blocksdrawertoggle'] = 'إخفاء/إظهار دُرج الكتلة';
$string['blocksettings'] = 'إعدادات الكتلة';
$string['bracketfirst'] = '{$a} (أولاً)';
$string['bracketlast'] = '{$a} (آخراً)';
$string['configureblock'] = 'تهيئة {$a}';
$string['contexts'] = 'سياق الصفحة';
$string['contexts_help'] = 'السياقات هي صفحات من نوع أكثر تحديداً حيث يمكن عرض هذه الكتلة ضمن موقعها الأصلي. سيكون لديك عدة خيارات هنا اعتماداً على موقع الكتلة الأصلي وموقعك الحالي. كمثال على ذلك، يمكنك تقييد ظهور الكتلة ليقتصر على المنتدى فقط في المساق عبر إضافة الكتلة للمساق (مما يسمح لها بالظهور في كل الصفحات الفرعية)، ثم الذهاب إلى المنتدى وتحرر إعدادات الكتلة مرة أخرى لتقييد عرضها مع صفحات المنتدى.';
$string['createdat'] = 'الموضع الأصلي للكتلة';
$string['createdat_help'] = 'الموضع الأصلي الذي تم إنشاء الكتل فيه. إعدادات الكتل قد يجعلها تظهر في مواضع أخرى (سياقات) ضمن الموضع الأصلي. كمثال، الكتلة المنشأة في صفحة المقرر يمكن عرضها في الأنشطة ضمن ذلك المقرر. الكتلة المنشأة في صفحة الواجهة يمكن عرضها في كل أنحاء الموقع.';
$string['defaultregion'] = 'المنطقة الافتراضية';
$string['defaultregion_help'] = 'القوالب قد تعرّف واحداً أو أكثر من المناطق ذات التسميات حيث تُعرض الكتل. هذا الإعداد يحدد أي من تلك المناطق تريد أن تظهر فيها هذه الكتلة بشكل افتراضي. المنطقة يمكن تجاوزها في صفحات معينة إذا لزم الأمر.';
$string['defaultweight'] = 'الوزن الافتراضي';
$string['defaultweight_help'] = 'الوزن الافتراضي يسْمحُ لك باخْتياَر المكان الذي تُريدُ الكتلةَ أَنْ تَظْهرَ فيه ضمن المنطقة المختاَرة، إمّا في الأعلى أَو الأسفل.
الموقعَ النهائيَ للكتلة سيتم حسابه مع باقي الكُتَل في ذلك النطاق (على سبيل المثال، كتلة واحدة فقط  يُمْكِنُ أَنْ تَكُونَ في الأعلى). يُمكن تجاوز هذه القيمة في صفحات معيّنة إذا كان هذا مطلوباً.';
$string['deleteblock'] = 'حذف {$a}';
$string['deleteblockcheck'] = 'هذا من شأنه حذف الكتلة المسماة {$a}.';
$string['deleteblockinprogress'] = 'يجري حاليًا حذف الكتلة {$a}...';
$string['deleteblockwarning'] = '<p>أنت على وشك حذف كتلة تظهر في مكان آخر.</p><p>موقع الكتلة الأصلي: {$a->location}<br />تعرض على الصفحات من النوع: {$a->pagetype}</p><p>هل أنت متأكد أنك تريد المتابعة؟</p>';
$string['deletecheck'] = 'أتريد حذف {$a}؟';
$string['deletecheck_modal'] = 'أتريد حذف الكتلة؟';
$string['hideblock'] = 'إخفاء {$a}';
$string['hidepanel'] = 'إخفاء اللوحة';
$string['moveblock'] = 'نقل {$a}';
$string['moveblockafter'] = 'أنقل الكتلة إلى ما بعد {$a}';
$string['moveblockbefore'] = 'أنقل الكتلة إلى ما قبل {$a}';
$string['moveblockinregion'] = 'أنقل الكتلة إلى منطقة {$a}';
$string['movingthisblockcancel'] = 'تحريك هذه الكتلة ({$a})';
$string['myblocks'] = 'كتلي';
$string['onthispage'] = 'في هذه الصفحة';
$string['pagetypes'] = 'أنواع الصفحات';
$string['pagetypewarning'] = 'إنّ نوعَ الصفحةِ المحدّدِ سابقاً لَمْ يَعُدْ قابلاً للاختيار. رجاءً إخترْ نوعَ الصفحةِ الأكثر ملائمة من القائمة التالية.';
$string['privacy:metadata:userpref:dockedinstance'] = 'يسجل متى قام المستخدم بإرساء الكتلة';
$string['privacy:metadata:userpref:hiddenblock'] = 'يسجل متى قام المستخدم بِطَي أو إخفاء الكتلة';
$string['privacy:request:blockisdocked'] = 'يشير إلى ما إذا كان قد تم إرساء الكتلة';
$string['privacy:request:blockishidden'] = 'يشير إلى ما إذا كانت الكتلة مخفية / مطوية';
$string['region'] = 'المنطقة';
$string['restrictpagetypes'] = 'عرض في أنواع الصفحات';
$string['showblock'] = 'إظهار {$a}';
$string['showoncontextandsubs'] = 'العرض في \'{$a}\' وأي صفحات أخرى ضمنه';
$string['showoncontextonly'] = 'فقط إعرض في \'{$a}\'';
$string['showonentiresite'] = 'إعرض في كافة أنحاء الموقع';
$string['showonfrontpageandsubs'] = 'العرض في واجهة الموقع وأي صفحات مضافة إليها.';
$string['showonfrontpageonly'] = 'العرض في واجهة الموقع فقط';
$string['subpages'] = 'إختر الصفحات';
$string['thisspecificpage'] = 'هذه الصفحة بحد ذاتها';
$string['visible'] = 'المرئي';
$string['weight'] = 'الوزن';
$string['wherethisblockappears'] = 'حيثما تظهر هذه الكتلة';
