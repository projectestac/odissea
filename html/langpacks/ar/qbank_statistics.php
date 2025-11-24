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
 * Strings for component 'qbank_statistics', language 'ar', version '4.5'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'هل بحاجة إلى تحقق؟';
$string['discrimination_index_help'] = 'يؤشَّر السؤال على أنه من المحتمل أن يحتاج إلى فحص بناءً على إحصائياته. على سبيل المثال، إذا حصل الطلاب على درجة منخفضة في السؤال ولكن حصلوا على درجة عالية في الاختبار بأكمله، أو درجة عالية في السؤال ولكن درجة منخفضة في الاختبار بأكمله، عندها قد تكون هناك مشكلة في السؤال، كأن يكون الجواب الخاطئ مؤشر على أنه الصواب. مع ذلك، الإحصائيات ليست معصومة من الخطأ؛ هذا مجرد تلميح إلى أنه ينبغي فحص السؤال.';
$string['discriminative_efficiency'] = 'الكفاءة التمييزية';
$string['discriminative_efficiency_help'] = 'الكفاءة التمييزية هي تقدير إحصائي لمدى جودة تقييم السؤال للطلاب، مع كون القيمة الأعلى هي الأفضل. قد تشير القيمة المنخفضة بشكل خاص إلى وجود مشكلة في السؤال. يمكن أن يؤدي سؤال صعب أو سهل للغاية (بمؤشر سهولة قريب من 0٪ أو 100٪) إلى قيمة منخفضة.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'مؤشر السهولة';
$string['facility_index_help'] = 'يعطي مؤشر السهولة متوسط الدرجة (كنسبة مئوية) التي تم الحصول عليها في السؤال (كل الإصدارات) في كل الاختبارات التي تمت فيها محاولة السؤال. تشير القيمة الأعلى عادة إلى سؤال أسهل.';
$string['likely'] = 'محتمل';
$string['na'] = 'غير متاح';
$string['pluginname'] = 'إحصائيات السؤال';
$string['privacy:metadata'] = 'إن ملحق إحصائيات السؤال لبنك الأسئلة لا يخزن أي بيانات شخصية.';
$string['unlikely'] = 'غير محتمل';
$string['verylikely'] = 'محتمل جدًا';
