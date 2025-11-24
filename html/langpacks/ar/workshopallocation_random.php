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
 * Strings for component 'workshopallocation_random', language 'ar', version '4.5'.
 *
 * @package     workshopallocation_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'إضافة التقييم الذاتي';
$string['allocationaddeddetail'] = 'تقييم جديد ينبغي القيام به: <strong>{$a->reviewername}</strong> مراجع لــ <strong>{$a->authorname}</strong>';
$string['allocationdeallocategraded'] = 'يتعذر إلغاء توزيع التقييم الذي سبق منحه درجات: المقيِّم <strong>{$a->reviewername}</strong>، كاتب التسليم: <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'إعادة استخدام التقييم: <strong>{$a->reviewername}</strong>  احفظه كمراجع لـ <strong>{$a->authorname}</strong>';
$string['allocationsettings'] = 'إعدادات التوزيع';
$string['assessmentdeleteddetail'] = 'تم إلغاء توزيع التقييم: <strong>{$a->reviewername}</strong> لم يعد مقيماً لـ  <strong>{$a->authorname}</strong>';
$string['assesswosubmission'] = 'يمكن للمشاركين التقييم دون أن يقدموا أيّ شيء';
$string['confignumofreviews'] = 'العدد الافتراضي من التسليمات التي يتم توزيعها عشوائياً';
$string['excludesamegroup'] = 'إمنع تقييمات المناظرين من نفس المجموعة';
$string['noallocationtoadd'] = 'لا توزيعات لإضافتها';
$string['nogroupusers'] = '<p>تحذير: إذا كانت ورشة العمل في وضع \'مجموعات مرئية\' أو وضع \'مجموعات منفصلة\'، فعلى المستخدمين أن يكونوا جزءاً من مجموعة واحدة على الأقل لتُوزع عليهم تقييمات النظراء من قبل هذه الأداة. لا يزال بالإمكان منح المستخدمين غير المنتمين إلى مجموعة تقييمات ذاتية جديدة أو إزالة تقييماتهم الحالية.</P>
 <p>هؤلاء المستخدمون حالياً ليسوا في أي مجموعة: {$a}</P>';
$string['numofdeallocatedassessment'] = 'إلغاء توزيع {$a} من التقييمات';
$string['numofrandomlyallocatedsubmissions'] = 'تعيين عشوائي لـ {$a} من التوزيعات';
$string['numofreviews'] = 'عدد التقييمات';
$string['numofselfallocatedsubmissions'] = 'توزيع ذاتي لـ {$a} من التسليمات';
$string['numperauthor'] = 'لكل تسليم';
$string['numperreviewer'] = 'لكل مقيِّم';
$string['pluginname'] = 'التوزيع العشوائي';
$string['privacy:metadata'] = 'ملحق التعيين العشوائي لا يخزن أي بيانات شخصية. البيانات الشخصية الفعلية حول من سيقوم بتقييم من، يتم تخزينها بواسطة وحدة ورشة العمل نفسها وتشكل أساساً لتصدير تفاصيل التقييمات.';
$string['randomallocationdone'] = 'التوزيع العشوائي اكتمل';
$string['removecurrentallocations'] = 'إزالة التوزيعات الحالية';
$string['resultnomorepeers'] = 'لا يتوافر المزيد من النظراء';
$string['resultnomorepeersingroup'] = 'لا يتوافر المزيد من النظراء في هذه المجموعة المنفصلة';
$string['resultnotenoughpeers'] = 'لا يتوافر عدد كافٍ من النظراء';
$string['resultnumperauthor'] = 'تجري محاولة توزيع {$a} تقييم لكل كاتب';
$string['resultnumperreviewer'] = 'تجري محاولة توزيع {$a} تقييم لكل مُقيِّم';
$string['stats'] = 'إحصائيات التوزيع الحالي';
