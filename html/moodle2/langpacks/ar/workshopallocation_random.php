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
 * Strings for component 'workshopallocation_random', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   workshopallocation_random
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'إضافة التقييم الذاتي';
$string['allocationaddeddetail'] = 'تقييم جديد ينبغي القيام به: <strong>{$a->reviewername}</strong> مراجع لــ <strong>{$a->authorname}</strong>';
$string['allocationdeallocategraded'] = 'غير قادر على التخصيص .. فالتقييم أعطي درجات بالفعل: المراجع <strong>{$a->reviewername}</strong>, المقدم و الكاتب: <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'إعادة استخدام التقييم: <strong>{$a->reviewername}</strong>  احفظه كمراجع لـ <strong>{$a->authorname}</strong>';
$string['allocationsettings'] = 'إعدادات التخصيص';
$string['assessmentdeleteddetail'] = 'عدم تخصيص التقييم : <strong>{$a->reviewername}</strong> لم يعد مراجع لـ  <strong>{$a->authorname}</strong>';
$string['assesswosubmission'] = 'يمكن للمشاركين التقييم دون أن يقدموا أيّ شيء';
$string['confignumofreviews'] = 'الرقم الافتراضي للتقديم يتم تخصيصه بشكل عشوائي';
$string['excludesamegroup'] = 'منع المراجعين على أقرانهم من نفس المجموعة';
$string['noallocationtoadd'] = 'لا تخصيصات لإضافتها';
$string['nogroupusers'] = 'تحذير <p> : إذا ورشة العمل في وضع "مجموعات مرئية" أو وضع "مجموعات منفصلة"، فعلى المستخدمين أن يكونوا جزءا من مجموعة واحدة على الأقل و أن يكون نظير التقييمات المخصصة لها من قبل هذه الأداة. لا يزال المستخدمين غير ملتحقين بمجموعة قادرين على إعطاء التقييمات الذاتية أو التقييمات الحالية لديهم أو الإزالة </P>
 <p> و هؤلاء المستخدمين حالياً ليسوا في وضع المجموعة:  {$a}  </ P>';
$string['numofdeallocatedassessment'] = 'إلغاء تخصيص {$a} التقييمات';
$string['numofrandomlyallocatedsubmissions'] = 'تخصيص عشوائي {$a} التقديمات';
$string['numofreviews'] = 'عدد المراجعين';
$string['numofselfallocatedsubmissions'] = 'تخصيص ذاتي {$a} تقديمات';
$string['numperauthor'] = 'لكل تقديمة';
$string['numperreviewer'] = 'لكل مراجع';
$string['pluginname'] = 'تخصيص عشوائي';
$string['privacy:metadata'] = 'البرنامج المساعد لتخصيص عشوائي لا يخزن أي بيانات شخصية. البيانات الشخصية الفعلية حول من سيقوم بتقييم من يتم تخزينه بواسطة وحدة ورشة العمل نفسها وتشكل أساسًا لتصدير تفاصيل التقييمات.';
$string['randomallocationdone'] = 'التخصيص العشوائي اكتمل';
$string['removecurrentallocations'] = 'أزل التخصيصات الحالية';
$string['resultnomorepeers'] = 'لا مزيد من أقران';
$string['resultnomorepeersingroup'] = 'لا مزيد من الأقران كفاية في هذه المجموعة المنفصلة';
$string['resultnotenoughpeers'] = 'غير كافي القرناء المتوفرين';
$string['resultnumperauthor'] = 'محاولة تخصيص {$a} مراجع لكل كاتب';
$string['resultnumperreviewer'] = 'محاولة توزيع {$a} مراجعات لكل مراجع';
$string['stats'] = 'إحصاءات التخصيص الحالي';
