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
 * Strings for component 'rating', language 'ar', version '4.4'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'متوسط التقييمات';
$string['aggregatecount'] = 'عدد التقييمات';
$string['aggregatemax'] = 'أعلى التقييمات';
$string['aggregatemin'] = 'أدنى التقييمات';
$string['aggregatenone'] = 'بلا تقييم';
$string['aggregatesum'] = 'مجموع التقييمات';
$string['aggregatetype'] = 'نوعية التجميع';
$string['aggregatetype_help'] = 'نوع التجميع يحدد كيفية تجميع التقييمات لتشكيل التقدير النهائي في سجل التقديرات.

* متوسط التقييمات - معدل كل التقييمات
* عدد التقييمات - عدد الفقرات المقيمة سيصير التقدير النهائي. لاحظ أن الإجمالي لا يمكن أن يتجاوز الدرجة الكاملة للنشاط.
* الأعلى - التقييم الأعلى سيصير الدرجة النهائية
* الأدنى - التقييم الأدنى سيصير الدرجة النهائية
* المجموع - كل التقييمات تجمع مع بعض. لاحظ أن الإجمالي لا يمكن أن يتجاوز الدرجة الكاملة للنشاط.

إذا تم اختيار "بلا تقييم"، فعندها لن يظهر النشاط في سجل التقديرات.';
$string['allowratings'] = 'هل سيسمح بتقييم العناصر';
$string['allratingsforitem'] = 'جميع التقييمات المسلمة';
$string['capabilitychecknotavailable'] = 'التحقق من الإمكانات غير متوفر حتى يتم حفظ هذا النشاط';
$string['couldnotdeleteratings'] = 'عذراً، لا يمكن حذفه لأن الآخرين سبق وأن قاموا بتقييمه';
$string['norate'] = 'تقييم الفقرات غير مسموح به!';
$string['noratings'] = 'لم يتم تسليم أي تقييمات';
$string['noviewanyrate'] = 'يمكن فقط معاينة نتائج عناصر التي قمت بها';
$string['noviewrate'] = 'ليست لديك صلاحية معاينة تقييمات الفقرات';
$string['privacy:metadata:rating'] = 'التقييم المقدم من قبل المستخدمين يُخزن مع تفصيل عن الفقرة التي تم تقييمها';
$string['privacy:metadata:rating:rating'] = 'التقييم الرقمي الذي أدخله المستخدم';
$string['privacy:metadata:rating:timecreated'] = 'وقت وضع التقييم أول مرة';
$string['privacy:metadata:rating:timemodified'] = 'وقت آخر تحديث للتقييم';
$string['privacy:metadata:rating:userid'] = 'المستخدم الذي وضع التقييم';
$string['rate'] = 'قييم';
$string['ratepermissiondenied'] = 'ليس لديك الصلاحية لتقييم هذا العنصر';
$string['rating'] = 'تقييم';
$string['ratinginvalid'] = 'التقييم غير صحيح';
$string['ratings'] = 'التقييمات';
$string['ratingtime'] = 'حصر التقييم بالعناصر ضمن المجال الزمني هذا:';
$string['rolewarning'] = 'الأدوار التي تمتلك صلاحية التقييم';
$string['rolewarning_help'] = 'لتقديم التقييمات، على المستخدمين أن يمتلكوا الإمكانية moodle/rating:rate مع أي إمكانيات خاصة بالوحدة. المستخدمون ذوو الأدوار الآتية ينبغي أن تكون لديهم إمكانية وضع التقييمات. قائمة الأدوار قد تكون عرضة لتغيير عبر رابط الصلاحيات في قائمة الإجراءات أو كتلة الإدارة، اعتماداً على المظهر المستعمل في الموقع.';
$string['scaleselectionrequired'] = 'عند اختيار نوع تجميع التقييمات عليك ايضاً أن تحدد فيما إذا كنت ستستعمل مقياساً معيناً أو تضع الدرجة العظمى.';
