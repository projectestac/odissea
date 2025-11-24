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
 * Strings for component 'block_cmanager', language 'ar', version '4.5'.
 *
 * @package     block_cmanager
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['SaveAll'] = 'حفظ الكل';
$string['back'] = 'رجوع';
$string['cannotapproverecord'] = 'عذرًا، حسابك لا يمتلك الصلاحيات الكافية للموافقة على السجلات. ينبغي منحك أحد أدوار النظام ذي الصلاحيات الكافية.';
$string['cannotcomment'] = 'عذرًا، حسابك لا يمتلك الصلاحيات الكافية للتعليق. ينبغي منحك أحد أدوار النظام ذي الصلاحيات الكافية.';
$string['cannotdelete'] = 'عذرًا، حسابك لا يمتلك الصلاحيات الكافية لحذف السجل. ينبغي منحك أحد أدوار النظام ذي الصلاحيات الكافية.';
$string['cannoteditrequest'] = 'عذرًا، حسابك لا يمتلك الصلاحيات الكافية لتحرير السجل. ينبغي منحك أحد أدوار النظام ذي الصلاحيات الكافية.';
$string['cannotrequestcourse'] = 'عذرًا، حسابك لا يمتلك الصلاحيات الكافية للمطالبة بإنشاء مساق. ينبغي منحك أحد أدوار النظام ذي الصلاحيات الكافية.';
$string['cannotviewconfig'] = 'عذرًا، حسابك لا يمتلك الصلاحيات الكافية لمعاينة الإعدادات. ينبغي منحك أحد أدوار النظام ذي الصلاحيات الكافية.';
$string['cannotviewrecords'] = 'عذرًا، حسابك لا يمتلك الصلاحيات الكافية لمعاينة السجلات. ينبغي منحك أحد أدوار النظام ذي الصلاحيات الكافية.';
$string['cmanagerEnrolmentInstruction'] = 'مدير طلبات المقررات الدراسية يمكنه توليد مفتاح انضمام تلقائي أو يمكنك أن تختار مطالبة المستخدم بمفتاح الانضمام حسبما يختاره.';
$string['cmanagerStats'] = 'إحصائيات CManager';
$string['comments_date'] = 'التاريخ / الوقت';
$string['config_addemail'] = 'عنوان البريد الالكتروني';
$string['configure_EnrolmentKey'] = 'مفتاح الانضمام';
$string['configure_EnrolmentKeyInstruction'] = 'مدير طلبات المقررات الدراسية يمكنه توليد مفتاح انضمام تلقائي أو يمكنك أن تختار مطالبة المستخدم بمفتاح الانضمام حسبما يختاره. إذا اخترت مطالبة المستخدم، ستتم إضافة حقل لإدخال مفتاح الانضمام إلى الصفحة الأولى من نموذج الطلب.';
$string['configure_instruction1'] = 'إعدادات مدير طلبات المقررات الدراسية تسمح لك بوضع عناوين البريد الالكتروني للمشرفين لأغراض التواصل، تحديد عناوين البريد الافتراضية، وضع تقاليد تسمية المقرر الدراسي وإعداداته الافتراضية مثل تاريخ البدء وسياسة مفتاح الانضمام.';
$string['configure_leaveblankmail'] = 'أترك هذا الحقل فارغاً لتجنب إرسال البريد.';
$string['configurecourseformfields'] = 'تهيئة نموذج الطلب - صفحة 1';
$string['email_courseName'] = 'اسم المقرر';
$string['email_enrolmentKey'] = 'مفتاح الانضمام';
$string['email_noReply'] = 'عنوان البريد الالكتروني للتواصل';
$string['entryFields_AddNewItem'] = 'إضافة عنصر جديد';
$string['entryFields_Description'] = 'الوصف';
$string['entryFields_DropdownDescription'] = 'قد ترغب في إضافة قائمة منسدلة اختيارية مع بعض القيم التي ستساعدك في تصنيف المساق الجديد. على سبيل المثال، قد تقدم مؤسستك مقررات دراسية في وضعية الدوام الكامل، وضعية الدوام الجزئي، وضعية التعليم عن بعد، والوضعية عبر الإنترنت فقط وما إلى ذلك. يمكنك إضافة هذه الخيارات إلى القائمة المنسدلة الاختيارية والسماح للمستخدمين بتحديد واحدة منها عند تقديم طلب مقرر جديد.';
$string['entryFields_Name'] = 'الاسم';
$string['entryFields_instruction1'] = 'قم بتكوين الصفحة الأولى من نموذج طلب المقرر. تُستعمل الصفحة الأولى من نموذج الطلب لقبول القيم من المستخدم للاسم المختصر للمقرر والاسم الكامل له كما هو مطلوب من قبل مودل. قد يتم وصف هذه بشكل مختلف من قبل مؤسستك. على سبيل المثال، يمكنك استعمال رمز المقرر (الاسم المختصر) واسم المقرر (الاسم الكامل) لوصف مقرراتك.';
$string['formBuilder_addItemBtnTxt'] = 'إضافة عنصر جديد';
$string['formBuilder_instructions1'] = 'رموز البرنامج وعناوينه';
$string['formBuilder_instructions3'] = 'مفاتيح الانضمام المرغوبة';
$string['formBuilder_instructions4'] = 'الطاقم الإضافي والصلاحيات';
$string['formBuilder_leftTxt'] = 'الاسم';
$string['formBuilder_name'] = 'تهيئة نموذج الطلب - صفحة 2';
$string['formBuilder_p2_addNewField'] = 'إضافة حقل جديد';
$string['formBuilder_p2_dropdown1'] = 'إضافة جديد..';
$string['formBuilder_p2_header'] = 'محرر نموذج المعلومات الإضافية';
$string['formfieldsHeader'] = 'تهيئة نموذج الطلب - صفحة 1';
$string['formpage1'] = 'صفحة النموذج 1';
$string['formpage2'] = 'صفحة النموذج 2';
$string['formpage2builder'] = 'منشئ صفحة النموذج 2';
$string['informationform'] = 'تهيئة نموذج الطلب - صفحة 2';
$string['modname'] = 'اسم المقرر';
$string['namingConvetion_option1'] = 'الاسم الكامل فقط';
$string['namingConvetion_option2'] = 'الاسم المختصر - الاسم الكامل';
$string['namingConvetion_option3'] = 'الاسم الكامل (الاسم المختصر)';
$string['namingConvetion_option4'] = 'الاسم المختصر - الاسم الكامل (السنة)';
$string['namingConvetion_option5'] = 'الاسم الكامل (السنة)';
$string['privacy:metadata:db:block_cmanager_comments:dt'] = 'وقت الإنشاء';
$string['privacy:metadata:db:block_cmanager_records:createdate'] = 'وقت الإنشاء';
$string['privacy:metadata:db:block_cmanager_records:modname'] = 'الاسم الكامل للمقرر الدراسي المطلوب';
$string['requestReview_courseName'] = 'اسم المقرر';
$string['requestReview_moduleName'] = 'اسم المقرر';
$string['request_rule1'] = 'يرجى إدخال قيمة في هذا الحقل';
$string['request_rule2'] = 'يرجى تحديد القيمة.';
$string['request_rule3'] = 'يرجى إدخال مفتاح الانضمام.';
$string['withselectedrequests'] = 'مع الطلبات المحددة';
