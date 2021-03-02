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
 * Strings for component 'block', language 'ar', version '3.8'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtodock'] = 'انقل هذا إلى المرسى';
$string['anypagematchingtheabove'] = 'أيّ صفحة مطابقة مع الصفحة أعلاه';
$string['appearsinsubcontexts'] = 'يظهر في المحتويات الفرعية';
$string['assignrolesinblock'] = 'اعتماد صلاحيات في كتلة {$a}';
$string['blocksdrawertoggle'] = 'إخفاء/إظهار راسم الكتل';
$string['blocksettings'] = 'إعدادات الكتلة';
$string['bracketfirst'] = '{$a} (أولاً)';
$string['bracketlast'] = '{$a} (آخراً)';
$string['configureblock'] = 'تهيئة {$a} كتلة';
$string['contexts'] = 'سياق الصفحة';
$string['contexts_help'] = 'السياقات أكثر تحديداً لنوع الصفحات حيث الكتل التي يمكن عرضها ضمن موقعها الأصلي . يوجد عدة خيارات هنا اعتماداً على موقع الكتلة الأساسي و موقعك الحالي . كمثال يمكنك تقييد ظهور الكتل في المنتدى فقط في المقرر و ذلك بإضافة الكتل للمقرر (مكنها من الظهور في كل الصفحات الفرعية) ، ثم اذهب إلى المنتدى و حرر إعدادات الكتل إلى العرض فقط في المنتدى .';
$string['createdat'] = 'الموضع الأصلي للكتلة';
$string['createdat_help'] = 'الموقع الأساسي الذي تم إنشاء الكتل فيه . إعدادات الكتل قد يجعلها تظهر في أماكن أخرى (سياقات) داخل الموقع الأساسي .
كمثال كتلة أنشئت في صفحة المقرر يمكن عرضها في الأنشطة داخل ذلك المقرر .
الكتلة المنشأة في الصفحة الأولى يمكن عرضها في كل الموقع';
$string['defaultregion'] = 'المنطقة الافتراضية';
$string['defaultregion_help'] = 'المظاهر قد تعرّف اسما واحدا أو من مناطق الكتل حيث تظهر الكتل . هذه الإعدادات تحدد أي من هذه الكتل تريدها أن تظهر بشكل افتراضي . النطاق يمكن تجاوزه في صفحات محددة إذا لزم الأمر  ..';
$string['defaultweight'] = 'الوزن الافتراضي';
$string['defaultweight_help'] = 'الوزن الافتراضي يسْمحُ لك باخْتياَر المكان الذي تُريدُ الكتلةَ أَنْ تَظْهرَ فيه ضمن المنطقة المختاَرة، إمّا في الأعلى أَو الأسفل.
الموقعَ النهائيَ للكتلة سيتم حسابه مع باقي الكُتَل في ذلك النطاق (على سبيل المثال، كتلة واحدة فقط  يُمْكِنُ أَنْ تَكُونَ في الأعلى). يُمكن تجاوز هذه القيمة في صفحات معيّنة إذا كان هذا مطلوباً.';
$string['deleteblock'] = 'حذف {$a} كتلة';
$string['deleteblockcheck'] = 'هل أنت متأكد أنك تريد حذف هذه الكتلة بعنوان {$a} ؟';
$string['deleteblockwarning'] = '<p>أنت على وشك حذف كتلة تظهر في مكان آخر.</p><p>موقع الكتلة الأصلي: {$a->location}<br />تعرض على الصفحات من النوع: {$a->pagetype}</p><p>هل أنت متأكد أنك تريد المتابعة؟</p>';
$string['deletecheck'] = 'احذف {$a} الكتلة ؟';
$string['dockblock'] = 'إرساء {$a} كتلة';
$string['hideblock'] = 'إخفاء {$a} كتلة';
$string['hidedockpanel'] = 'إخفاء لوحة الإرساء';
$string['hidepanel'] = 'اخفاء اللوحة';
$string['moveblock'] = 'نقل {$a} كتلة';
$string['moveblockafter'] = 'انقل الكتلة إلى بعد {$a}  كتلة';
$string['moveblockbefore'] = 'نقل كتلة إلى قبل {$ a} كتلة';
$string['moveblockinregion'] = 'انقل الكتلة إلى منطقة {$ a}';
$string['movingthisblockcancel'] = 'حركة هذه الكتلة ({$a})';
$string['myblocks'] = 'كتلي';
$string['onthispage'] = 'في هذه الصفحة';
$string['pagetypes'] = 'أنواع الصفحات';
$string['pagetypewarning'] = 'نوعَ الصفحة المحدّدة سابقاً لَمْ يعد قابلا للاختيار . رجاءً اخترْ نوعَ الصفحةِ الأكثر ملائمة أدناه .';
$string['privacy:metadata:userpref:dockedinstance'] = 'التسجيل عند إرساء المستخدم كتلة';
$string['privacy:metadata:userpref:hiddenblock'] = 'يسجل عندما يطوي  / يخفي المستخدم كتلة';
$string['privacy:request:blockisdocked'] = 'يشير إلى ما إذا كان قد تم إرساء الكتلة';
$string['privacy:request:blockishidden'] = 'يشير إلى ما إذا كانت الكتلة مخفية / مطوية';
$string['region'] = 'المنطقة';
$string['restrictpagetypes'] = 'اعرض أنواع الصفحة';
$string['showblock'] = 'إظهار {$ a} كتلة';
$string['showoncontextandsubs'] = 'اعرض \'{$a}\' و أيّ صفحات أخرى مضمنة';
$string['showoncontextonly'] = 'اعرض \'{$a}\' فقط';
$string['showonentiresite'] = 'إعرض في كافة أنحاء الموقع';
$string['showonfrontpageandsubs'] = 'اعرض في الصفحة الرئيسية و أيّ صفحة مضافة إلى الصفحة الرئيسية';
$string['showonfrontpageonly'] = 'اعرض في الصفحة الرئيسية فقط';
$string['subpages'] = 'اختر الصفحات';
$string['thisspecificpage'] = 'الصفحة المحددة';
$string['undockall'] = 'إلفاء قفل الكل';
$string['undockblock'] = 'إلغاء قفل {$a} كتلة';
$string['undockitem'] = 'افتح هذا العنصر';
$string['visible'] = 'المرئي';
$string['weight'] = 'الوزن';
$string['wherethisblockappears'] = 'حيثما تظهر هذه الكتلة';
