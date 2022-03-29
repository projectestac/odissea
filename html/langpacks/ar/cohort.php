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
 * Strings for component 'cohort', language 'ar', version '3.11'.
 *
 * @package     cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'إضافة دفعة جديدة';
$string['allcohorts'] = 'كل الدفعات';
$string['anycohort'] = 'أيَ';
$string['assign'] = 'تعيين';
$string['assigncohorts'] = 'تعيين أعضاء الدفعة';
$string['assignto'] = 'أعضاء دفعة \'{$a}\'';
$string['backtocohorts'] = 'عودة إلى الدفعات';
$string['bulkadd'] = 'إضافة إلى الدفعة';
$string['bulknocohort'] = 'لم يتم العثور على أي دفعات متاحة';
$string['categorynotfound'] = 'لم يتم العثور على التصنيف <b>{$a}</b> أو ليست لديك صلاحية إنشاء دفعة هناك. سيتم استعمال السياق الافتراضي.';
$string['cohort'] = 'الدفعة';
$string['cohorts'] = 'الدفعات';
$string['cohortsin'] = '{$a}: الدفعات المتاحة';
$string['component'] = 'المصدر';
$string['contextnotfound'] = 'لم يتم العثور على السياق <b>{$a}</b> أو ليس لديك صلاحية إنشاء دفعة هناك. سيتم استعمال السياق الافتراضي.';
$string['csvcontainserrors'] = 'تم العثور على أخطاء في بيانات CSV. أنظر التفاصيل أدناه.';
$string['csvcontainswarnings'] = 'تم العثور على تحذيرات في بيانات CSV. انظر التفاصيل أدناه.';
$string['csvextracolumns'] = 'سيتم تجاهل العمود (الأعمدة) <b>{$a}</b>.';
$string['currentusers'] = 'المستخدمون الحاليون';
$string['currentusersmatching'] = 'المستخدمون الحاليون المطابقون';
$string['defaultcontext'] = 'السياق الافتراضي';
$string['delcohort'] = 'حذف الدفعة';
$string['delconfirm'] = 'هل حقاً تريد حذف الدفعة \'{$a}\'؟';
$string['description'] = 'الوصف';
$string['displayedrows'] = '{$a->displayed} الصفوف تعرض من {$a->total}.';
$string['duplicateidnumber'] = 'دفعة بنفس رقم المُعرَّف موجود مسبقاً';
$string['editcohort'] = 'تحرير الدفعة';
$string['editcohortidnumber'] = 'تحرير مُعرَّف الدفعة';
$string['editcohortname'] = 'تحرير اسم الدفعة';
$string['eventcohortcreated'] = 'دفعة تم إنشاؤها';
$string['eventcohortdeleted'] = 'دفعة تم حذفها';
$string['eventcohortmemberadded'] = 'مستخدم تمت إضافته إلى دفعة';
$string['eventcohortmemberremoved'] = 'مستخدم تمت إزالته من دفعة';
$string['eventcohortupdated'] = 'دفعة تم تحديثها';
$string['external'] = 'دفعة خارجية';
$string['idnumber'] = 'مُعرّف الدفعة';
$string['invalidtheme'] = 'قالب الدفعة غير موجود';
$string['memberscount'] = 'حجم الدفعة';
$string['name'] = 'الاسم';
$string['namecolumnmissing'] = 'يوجد خطأ ما في تنسيق ملف CSV. يرجى التحقق من أنه يتضمن أسماء الأعمدة الصحيحة. لإضافة أعضاء إلى الدفعة، انتقل إلى \'رفع المستخدمين\' في إدارة الموقع.';
$string['namefieldempty'] = 'اسم الحقل لا يمكن أن يكون فارغاً';
$string['newidnumberfor'] = 'رقم مُعرَّف جديد للدفعة {$a}';
$string['newnamefor'] = 'الاسم الجديد للدفعة {$a}';
$string['nocomponent'] = 'تم إنشاؤه يدوياً';
$string['potusers'] = 'المستخدمون المحتملون';
$string['potusersmatching'] = 'المستخدمون المحتملون المطابقون';
$string['preview'] = 'معاينة';
$string['privacy:metadata:cohort_members'] = 'معلومات عن دفعة المستخدم';
$string['privacy:metadata:cohort_members:cohortid'] = 'مُعرَّف الدفعة';
$string['privacy:metadata:cohort_members:timeadded'] = 'الطابع الزمني الذي يشير إلى وقت إضافة المستخدم إلى الدفعة';
$string['privacy:metadata:cohort_members:userid'] = 'مُعرَّف المستخدم المرتبط بالدفعة';
$string['removeuserwarning'] = 'إزالة المستخدمين من الدفعة قد يؤدي إلى إلغاء انضمامات المستخدمين في مقررات متعددة وهذا الأمر يتضمن حذف إعداداتهم، تقديراتهم، عضوياتهم في المجموعات وغيرها من معلومات المستخدمين في المساقات المتأثرة بتلك الإزالة.';
$string['search'] = 'بحث';
$string['searchcohort'] = 'البحث عن الدفعة';
$string['selectfromcohort'] = 'إختر أعضاءً من الدفعة';
$string['systemcohorts'] = 'دفعات النظام';
$string['unknowncohort'] = 'دفعة مرة غير معروفة ({$a})!';
$string['uploadcohorts'] = 'رفع الدفعات';
$string['uploadcohorts_help'] = 'يمكن رفع الزمر عبر ملف نصي. يجب أن يكون تنسيق الملف كما يلي:

* يحتوي كل سطر من الملف على سجل واحد
* كل سجل عبارة عن سلسلة من البيانات مفصولة بالفاصلة المحددة
* يحتوي السجل الأول على قائمة بأسماء الحقول التي تحدد تنسيق باقي الملف
* الحقل المطلوب هو حقل name
* الحقول الاختيارية هي idnumber، description، descriptionformat، visible، context، category، category_id، category_idnumber، category_path';
$string['uploadedcohorts'] = 'تم رفع {$a} من الدفعات';
$string['useradded'] = 'تمت إضافة المستخدم إلى الدفعة "{$a}"';
$string['visible'] = 'مرئي';
$string['visible_help'] = 'يمكن معاينة أي فرقة من قبل المستخدمين الذين لديهم الإمكانية \'moodle/cohort:view\' في سياق الفرقة.
يمكن أيضاً معاينة الفرق المرئية بواسطة المستخدمين في المقررات الدراسية الضمنية.';
