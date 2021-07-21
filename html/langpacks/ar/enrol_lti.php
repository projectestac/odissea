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
 * Strings for component 'enrol_lti', language 'ar', version '3.11'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'ملاحظة: من الموصى به تمكين الإعداد \'السماح بتضمين الإطار\' في إعدادات الإشراف على الموقع، ليتم عرض الأدوات ضمن إطار بدلاً من نافذة جديدة.';
$string['authltimustbeenabled'] = 'ملاحظة: هذا الملحق يتطلب تمكين ملحق مصادقة LTI أيضاً.';
$string['cartridgeurl'] = 'رابط الخرطوش';
$string['couldnotestablishproxy'] = 'تعذر تأسيس الوكيل مع المستهلك.';
$string['enrolenddate'] = 'تاريخ الانتهاء';
$string['enrolenddate_help'] = 'عند تمكينه، سيقتصر وصول المستخدمين إلى ذلك التاريخ.';
$string['enrolenddateerror'] = 'تاريخ انتهاء الانضمام لا يمكن أن يكون سابقاً لتاريخ بدئه';
$string['enrolisdisabled'] = 'ملحق \'أنشر بمثابة أداة LTI\' معطل.';
$string['enrolmentfinished'] = 'انتهى الانضمام.';
$string['enrolmentnotstarted'] = 'لم يبدأ الانضمام بعد.';
$string['enrolperiod'] = 'فترة الانضمام';
$string['enrolperiod_help'] = 'طول مدة صلاحية الانضمام، بدءاً من لحظة قيام المستخدمين بالانضمام من النظام البعيد. عند تعطيله، ستكون فترة الانضمام غير محدودة.';
$string['enrolstartdate'] = 'تاريخ البدء';
$string['enrolstartdate_help'] = 'عند تمكينه، سيبدأ وصول المستخدمين من ذلك التاريخ فصاعداً.';
$string['failedrequest'] = 'فشل الطلب. السبب: {$a->reason}';
$string['frameembeddingnotenabled'] = 'للوصول إلى الإداة، لطفاً استعمل الرابط أدناه.';
$string['gradesync'] = 'مزامنة الدرجات';
$string['gradesync_help'] = 'فيما إذا كانت الدرجات من الأداة سيتم إرسالها إلى النظام البعيد (مستهلك LTI).';
$string['incorrecttoken'] = 'لم يكن الترميز صحيحاً. لطفاً، تحقق من الرابط وحاول مجدداً، أو تواصل مع المشرف على الأداة.';
$string['invalidrequest'] = 'طلب غير صحيح';
$string['invalidtoolconsumer'] = 'مستهلك غير صحيح للأداة.';
$string['launchdetails'] = 'تفاصيل الإطلاق';
$string['launchdetails_help'] = 'رابط الخرطوش (أو ما يعرف أيضاً برابط التهيئة) زائداً رابط سري أو رابط الإطلاق، مطلوبة جميعاً لتهيئة الأداة.';
$string['launchurl'] = 'رابط الإطلاق';
$string['lti:config'] = 'تهيئة عينات \'النشر بمثابة أداة LTI\'';
$string['lti:unenrol'] = 'إلغاء انضمام المستخدمين إلى المقرر الدراسي';
$string['maxenrolled'] = 'أقصى عدد للمستخدمين المنضمين';
$string['maxenrolled_help'] = 'أقصى عدد من المستخدمين البعيدين الذين يمكنهم الوصول إلى الأداة. عند ضبطه على 0، سيكون عدد المستخدمين المنضمين غير محدود.';
$string['maxenrolledreached'] = 'تم الوصول إلى أقصى عدد من المستخدمين البعيدين الذين يسمح لهم بالوصول إلى الأداة.';
$string['membersync'] = 'مزامنة المستخدمين';
$string['membersync_help'] = 'فيما إذا كانت المهمة المجدول تقوم بمزامنة المستخدمين المنضمين في النظام البعيد مع انضماماتهم في هذا المقرر الدراسي، عبر إنشاء حساب لكل مستخدم بعيد عند الضرورة، وضمهم إو إلغائه حسب ما هو مطلوب.

عند تعطيله، في اللحظة التي يصل فيها المستخدم البعيد إلى الأداة، سيتم إنشاء حساب له وسيتم ضمه بشكل تلقائي.';
$string['membersyncmode'] = 'نمط مزامنة المستخدم';
$string['membersyncmode_help'] = 'فيما إذا كان ينبغي ضم و/أو إلغاء ضم المستخدمين في هذا المقرر الدراسي.';
$string['membersyncmodeenrolandunenrol'] = 'قم بضم الجديد وألغ انضمام المفقود من المستخدمين';
$string['membersyncmodeenrolnew'] = 'ضم المستخدمين الجدد';
$string['membersyncmodeunenrolmissing'] = 'ألغ انضمام المستخدمين المفقودين';
$string['notoolsprovided'] = 'لم يتم توفير أي أدوات';
$string['opentool'] = 'إفتح الأداة';
$string['pluginname'] = 'النشر بمثابة أداة LTI';
$string['pluginname_desc'] = 'إن ملحق \'أنشر بمثابة أداة LTI\'، مع ملحق مصادقة LTI تسمح للمستخدمين البعيدين بالوصول إلى مقررات ونشاطات معينة. بعبارة أخرى، مودل سيكون بمثابة مزود لأداة LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'قائمة المستخدمين المنضمين بواسطة مزود LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'وقت آخر وصول للمستخدم إلى المقرر الدراسي';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'آخر علامة سجلت للمستخدم';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'وقت انضمام المستخدم';
$string['privacy:metadata:enrol_lti_users:userid'] = 'مُعرَّف المستخدم';
$string['registration'] = 'تسجيل الأداة المنشورة';
$string['registrationurl'] = 'رابط التسجيل';
$string['registrationurl_help'] = 'عند استعمال رابط التسجيل (أو ما يعرف أيضاً رابط الوكيل)، ستتم تهيئة الأداة بشكل تلقائي.';
$string['remotesystem'] = 'النظام البعيد';
$string['requirecompletion'] = 'يتطلب الأمر إكمال المقرر الدراسي أو النشاط قبل مزامنة الدرجات';
$string['returnurlnotset'] = 'رابط الرجوع لم يتم ضبطه.';
$string['roleinstructor'] = 'الدور للمعلم';
$string['roleinstructor_help'] = 'الدور المعين في الأداة للمعلم البعيد.';
$string['rolelearner'] = 'الدور للطالب';
$string['rolelearner_help'] = 'الدور المعين في الأداة للطالب البعيد.';
$string['secret'] = 'السر';
$string['secret_help'] = 'سلسلة من الحروف تتم مشاركتها مع النظام البعيد (مستهلك LTI) لإتاحة الوصول إلى الأداة.';
$string['sharedexternaltools'] = 'منشورة بمثابة أدوات LTI';
$string['successfulregistration'] = 'التسجيل ناجح';
$string['tasksyncgrades'] = 'النشر بمثابة أداة LTI لمزامنة الدرجات';
$string['tasksyncmembers'] = 'النشر بمثابة أداة LTI لمزامنة المستخدمين';
$string['toolsprovided'] = 'الأدوات المنشورة';
$string['toolsprovided_help'] = 'يمكن مشاركة الأداة مع موقع آخر إما عبر تقديم تفاصيل الإطلاق أو رابط التسجيل.';
$string['tooltobeprovided'] = 'الأداة المزمع نشرها';
$string['toolurl'] = 'رابط الأداة';
$string['userdefaultvalues'] = 'قِيم المستخدم الافتراضية';
