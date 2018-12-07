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
 * Strings for component 'resource', language 'ar', branch 'MOODLE_34_STABLE'
 *
 * @package   resource
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clicktodownload'] = 'انقر على{$a} الرابط لتحميل الملف.';
$string['clicktoopen2'] = 'انقر على{$a} الرابط لعرض الملف.';
$string['configdisplayoptions'] = 'اختر جميع الخيارات التي يجب أن تكون متوافرة، الإعدادات الحالية لن تتغير. استمر بالضغط على رز CTRL لتحديد أكثر من حقل.';
$string['configframesize'] = 'عنداختيار صفحه من شبكةالانترنت،أو تحميل ملف للعرض ضمن اطار هذا المتغيرهومقياس الاطار العلوي زالذي يحتوي على واصلات التنقل';
$string['configpopup'] = 'عند اضافة مورد جديد والذي سيكون عرضة في نافذه جديدة، هل يمكن هذا الاختيار افتراضياً؟';
$string['configpopupdirectories'] = 'هل ستظهر النوافذ الجديدة دليل الروابط افتراضياً؟';
$string['configpopupheight'] = 'كم يجب ان يكون الارتفاع الافتراضي للنوافذ الجديدة؟';
$string['configpopuplocation'] = 'هل يجب على اظهار شريط الموقع في النوافذ الجديدة؟';
$string['configpopupmenubar'] = 'هل يجب اظهار شريط قائمة الاوامر في النوافذ الجديدة افتراضياً؟';
$string['configpopupresizable'] = 'هل يجب ان تكون النوافذ الجديدة قابلة لإعادة القياس افتراضياً؟';
$string['configpopupscrollbars'] = 'هل يبج ان تكون النوافذ الجديدة قابلة التمرير افتراضياً؟';
$string['configpopupstatus'] = 'هلي يجب للنوافذ الجديدة اظهار شريط الحالةافتراضياً؟';
$string['configpopuptoolbar'] = 'هل يجب على النوافذ الجديدة اظهار شريط الادوات افتراضياً؟';
$string['configpopupwidth'] = 'ما هو العرض الافتراضي للنوافذ الجديدة؟';
$string['contentheader'] = 'محتوى';
$string['displayoptions'] = 'الخيارات المتوفرة للعرض';
$string['displayselect'] = 'عرض';
$string['displayselectexplain'] = 'اختر طريقة العرض، للأسف لا تناسب كل طرق العرض جميع الملفات.';
$string['displayselect_help'] = 'يحدد هذا الإعداد، بالإضافة إلى نوع الملف وكون المتصفح يدعم تضمينه كيفية عرض الملف.
الخيارات قد تتضمن:

* تلقائي - أفضل خيار للعرض لأن نوع الملف يحدد تلقائياً.
* تضمين - يعرض الملف ضمن الصفحة تحت شريط التصفح مع وصف الملف وأي كتل.
* التحميل الإجباري - يطلب من المستخدم تحميل الملف.
* يتم عرض الملف فقط في نافذة المتصفح.
* في قائمة منبثقة - يتم عرض الملف في نافذة متصفح جديدة من دون قائمة أو شريط عنوان.
* في إطار - يعرض الملف في إطار تحت شريط لاتصفح ووصف الملف.
* نافذة جديدة - يعرض الملف في نافذة متصفح جديدة مع قائمة و شريط عنوان.';
$string['dnduploadresource'] = 'إنشاء مصدر من نوع ملف';
$string['encryptedcode'] = 'رمز مشفر';
$string['filenotfound'] = 'عذراً، لم يتم العثور على الملف';
$string['filterfiles'] = 'استخدام المرشحات على محتوى الملف';
$string['filtername'] = 'ربط آلي لأسماء الموارد';
$string['forcedownload'] = 'تنزيل إجباري';
$string['framesize'] = 'ارتفاع الإطار';
$string['legacyfiles'] = 'ترحيل ملفات المقرر القديمة';
$string['legacyfilesactive'] = 'نشط';
$string['legacyfilesdone'] = 'انتهى';
$string['modifieddate'] = 'المُحدَّثة {$a}';
$string['modulename'] = 'ملف';
$string['modulename_help'] = 'وحدة ملف تمكن المعلم من تقديم ملف كمصدر للمقرر الدراسي. حيثما كان ذلك ممكناً، سيتم عرض الملف ضمن واجهة المقرر الدراسي. وإلا سيتم دفع الطلاب لتحميل الملف. ويجوز أن يتضمن الملف  ملفات من أنواع مدعومة مثل ملفات صفحات الويب HTMLالتي تتضمن ، على سبيل المثال صور أوفلاش.

لاحظ أن الطلاب بحاجة تحميل البرنامج المناسب على أجهزة الكمبيوتر الخاصة بهم من أجل فتح الملف.

يمكن استخدام ملف

* لمشاركة العروض المقدمة في الصف
* لتضمين موقع ويب صغير كمصدر للمقرر الدراسي
* تقديم ملفات مسودة لبعض البرامج (مثل فوتوشوب ) بحيث يمكن للطلاب تحريرها وتقديمها للتقييم';
$string['modulenameplural'] = 'ملفات';
$string['notmigrated'] = 'هذا النوع من المصادر القديمة ({$a})  لم يتم ترحيلها  بعد،عذراً.';
$string['optionsheader'] = 'خيارات';
$string['page-mod-resource-x'] = 'أي صفحة لوحدة ملف';
$string['pluginadministration'] = 'إدارة وحدة ملف';
$string['pluginname'] = 'ملف';
$string['popupheight'] = 'ارتفاع النوافذ المنبثقة (بالبكسل)';
$string['popupheightexplain'] = 'يحدد الارتفاع الافتراضي للنوافذ المنبثقة.';
$string['popupresource'] = 'لا بد ان يظهر هذا المورد في نافذه مستقله';
$string['popupresourcelink'] = 'لو لم تعمل، أنقر هنا: {$a}';
$string['popupwidth'] = 'عرض النوافذ المنبثقة (بالبكسل)';
$string['popupwidthexplain'] = 'يحدد العرض الافتراضي للنوافذ المنبثقة.';
$string['printintro'] = 'أعرض وصف المورد';
$string['printintroexplain'] = 'وصف الموارد عرض أقل من المحتوى؟ قد لا يتم عرض بعض أنواع العرض وصف حتى لو تمكين.';
$string['resource:addinstance'] = 'إضافة مصدر جديد';
$string['resourcecontent'] = 'ملفات ومجلدات فرعية';
$string['resourcedetails_sizedate'] = '{$a->size} {$a->date}';
$string['resourcedetails_sizetype'] = '{$a->size} {$a->type}';
$string['resourcedetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['resourcedetails_typedate'] = '{$a->type} {$a->date}';
$string['resource:exportresource'] = 'تصدير المورد';
$string['resource:view'] = 'معاينة مورد';
$string['search:activity'] = 'ملف';
$string['selectmainfile'] = 'يرجى تحديد الملف الرئيسي من خلال النقر على أيقونة بجانب اسم الملف.';
$string['showdate'] = 'أظهر تاريخ التحميل/ التعديل';
$string['showdate_desc'] = 'عرض تاريخ التحميل/التعديل على صفحة المقرر الدراسي؟';
$string['showdate_help'] = 'عرض  تاريخ التحميل / التعديل بجانب الروابط إلى الملف.

إذا كان هناك عدة ملفات في هذا المصدر، يتم عرض تاريخ التحميل / التعديل لأول ملف.';
$string['showsize'] = 'أظهر الحجم';
$string['showsize_desc'] = 'اعرض حجم ملف على صفحة المقرر الدراسي؟';
$string['showsize_help'] = 'يعرض حجم الملف، مثل "3.1 MB"، إلى جانب وصلات إلى الملف.

إذا كان هناك عدة ملفات في هذا المصدر، سيتم عرض الحجم الكلي لكافة الملفات.';
$string['showtype'] = 'اعرض النوع';
$string['showtype_desc'] = 'عرض نوع الملف ( \'مستند Word "على سبيل المثال) على صفحة المقرر الدراسي؟';
$string['showtype_help'] = 'يعرض نوع الملف، مثل "مستند Word"، إلى جانب وصلات إلى الملف.

إذا كان هناك عدة ملفات في هذا المصدر، يتم عرض نوع أول الملف.

إذا لم يتم التعرف على  نوع الملف من النظام، فإنه لن يتم عرضه.';
$string['uploadeddate'] = 'تم تحميلها {$a}';
