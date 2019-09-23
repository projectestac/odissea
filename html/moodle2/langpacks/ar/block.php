<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'block', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   block
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtodock'] = 'انقل الى زاوية التصغير';
$string['anypagematchingtheabove'] = 'أي صفحة متطابقة مع الصفحة العليا';
$string['appearsinsubcontexts'] = 'يظهر في المتحويات الفرعية';
$string['assignrolesinblock'] = 'اعتماد صلاحيات في كتلة {$a}';
$string['blocksdrawertoggle'] = 'إخفاء/إظهار راسم الكتل';
$string['blocksettings'] = 'إعدادات الكتل';
$string['bracketfirst'] = '{$a} أولاً';
$string['bracketlast'] = '{$a} آخراً';
$string['configureblock'] = 'تهيئة {$a} كتلة';
$string['contexts'] = 'سياقات الصفحة';
$string['contexts_help'] = 'السياقات أكثر تحديداً لنوع الصفحات حيث الكتل التي يمكن عرضها ضمن موقعها الأصلي . يوجد عدة خيارات هنا اعتماداً على موقع الكتلة الأساسي و موقعك الحالي . كمثال يمكنك تقييد ظهور الكتل في المنتدى فقط في المقرر و ذلك بإضافة الكتل للمقرر (مكنها من الظهور في كل الصفحات الفرعية) ، ثم اذهب إلى المنتدى و حرر إعدادات الكتل إلى العرض فقط في المنتدى .';
$string['createdat'] = 'الموضع الأصلي للكتلة';
$string['createdat_help'] = 'الموقع الأساسي الذي تم إنشاء الكتل فيه . إعدادات الكتل قد يجعلها تظهر في أماكن أخرى (سياقات) داخل الموقع الأساسي .
كمثال كتلة أنشئت في صفحة المقرر يمكن عرضها في الأنشطة داخل ذلك المقرر .
الكتلة المنشأة في الصفحة الأولى يمكن عرضها في كل الموقع';
$string['defaultregion'] = 'منظقة افتراضية';
$string['defaultregion_help'] = 'المظاهر قد تعرّف اسما واحدا أو من مناطق الكتل حيث تظهر الكتل . هذه الإعدادات تحدد أي من هذه الكتل تريدها أن تظهر بشكل افتراضي . النطاق يمكن تجاوزه في صفحات محددة إذا لزم الأمر  ..';
$string['defaultweight'] = 'وزن فتراضي';
$string['defaultweight_help'] = 'تسْمحُ لك القيمةِ الأفتراضي إخْتياَر المكان الذي تُريدُ الكتلةَ أَنْ تَظْهرَ فيه ضمن المنطقةِ المُختَاَرةِ، أمّا في الأعلى أَو الأسفل. مع العلم أنه سيتم حساب الموقعَ النهائيَ للكتلة مع باقي الكُتَل في تلك المنطقةِ (على سبيل المثال، فقط كتلة واحدة يُمْكِنُ أَنْ تَكُونَ في الأعلى). يُمْكِنُ أَنْ تُتجاوزَ هذه القيمةِ على الصفحاتِ المعيّنةِ إذا كان هذا مطلوبا.';
$string['deleteblock'] = 'حذف الصندوق';
$string['deleteblockcheck'] = 'هل انت متأكد وواثق من حذف عنوان الصندوق';
$string['deleteblockwarning'] = 'أنت على وشك حذف كتلة تظهر في مكان آخر.

موقع الكتلة الأصلي: {$ a-> location}
تعرض على الصفحات من النوع: {$ a-> pagetype}

هل أنت متأكد أنك تريد المتابعة؟';
$string['deletecheck'] = 'حذف الصندوق';
$string['dockblock'] = 'تصغير الصندوق';
$string['hideblock'] = 'اخفاء الصندوق';
$string['hidedockpanel'] = 'اخفاء صندوق التصغير';
$string['hidepanel'] = 'اخفاء اللوحة';
$string['moveblock'] = 'نقل {$a} كتلة';
$string['moveblockafter'] = 'نقل الصندوق بعد الصندوق التالي';
$string['moveblockbefore'] = 'نقل الصندوق الى الصندوق الذي قبل';
$string['moveblockinregion'] = 'نقل الصندوق الى المنطقة';
$string['movingthisblockcancel'] = 'حرك هذه الكتلة ({$a})';
$string['myblocks'] = 'كتلي';
$string['onthispage'] = 'على هذه الصفحة';
$string['pagetypes'] = 'أنواع الصفحات';
$string['pagetypewarning'] = 'إنّ نوعَ الصفحةِ المحدّدِ سابقاً لَمْ يَعُدْ قابل للإختيار. رجاءً إخترْ نوعَ الصفحةِ الأكثر ملائمة من القائمة التالية';
$string['privacy:metadata:userpref:dockedinstance'] = 'التسجيل عند إرساء المستخدم كتلة';
$string['privacy:metadata:userpref:hiddenblock'] = 'يسجل عندما يطوي  / يخفي المستخدم كتلة';
$string['privacy:request:blockisdocked'] = 'يشير إلى ما إذا كان قد تم إرساء الكتلة';
$string['privacy:request:blockishidden'] = 'يشير إلى ما إذا كانت الكتلة مخفية / مطوية';
$string['region'] = 'منطقة';
$string['restrictpagetypes'] = 'أعرض أنواع الصفحة';
$string['showblock'] = 'عرض الصندوق';
$string['showoncontextandsubs'] = 'وأي صفحات اخرى متضمنة به \'{$a}\' أعرض في';
$string['showoncontextonly'] = 'فقط اعرض في a$';
$string['showonentiresite'] = 'اعرض في كافة الموقع';
$string['showonfrontpageandsubs'] = 'اعرض في الصفحة الرئيسية واي صفحة مضافة إلى الصفحة الرئيسية';
$string['showonfrontpageonly'] = 'أعرض في الصفحة الرئيسية فقط';
$string['subpages'] = 'أختر الصفحات';
$string['thisspecificpage'] = 'هذه الصفحة بذاتها (صفحة a$)';
$string['undockall'] = 'افتح الكل';
$string['undockblock'] = 'ازالة تصغير الصندوق';
$string['undockitem'] = 'افتح هذا البند';
$string['visible'] = 'مرئي';
$string['weight'] = 'وزن';
$string['wherethisblockappears'] = 'أين تظهر هذه الكتلة';
