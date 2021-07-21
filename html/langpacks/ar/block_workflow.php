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
 * Strings for component 'block_workflow', language 'ar', version '3.11'.
 *
 * @package     block_workflow
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['atendgobacktostepinfo'] = 'بعد الخطوة {$a->stepcount}، إرجع إلى الخطوة المرقمة {$a->atendgobacktostep}.';
$string['atendgobacktostepno'] = 'عودة إلى الخطوة {$a->stepno} ({$a->name})';
$string['dayafter'] = '{$a} يوماً بعد';
$string['dayas'] = 'نفس يوم';
$string['daybefore'] = '{$a} يوماً قبل';
$string['days'] = 'الأيام';
$string['daysafter'] = '{$a} من الأيام بعد';
$string['daysbefore'] = '{$a} يومن الأيام قبل';
$string['defaultstepdescription'] = 'وصف لهذه الخطوة ينبغي وضعه هنا';
$string['defaultworkflowdescription'] = 'وصف لسير العمل هذا';
$string['description'] = 'الوصف';
$string['eventstepaborted'] = 'خطوة تم إلغاؤها';
$string['eventstepactivated'] = 'خطوة تم تفعيلها';
$string['eventstepcompleted'] = 'خطوة تم إكمالها';
$string['eventstepextranotification'] = 'إشعار إضافي للخطوة تمت معالجته';
$string['eventtodotriggered'] = 'ما مطلوب عمله تمت إثارته';
$string['general'] = 'عام';
$string['invalidmissingvalue'] = 'أمر غير صالح، القيمة مفقودة.';
$string['invalidobsoletesetting'] = 'تم تحديد قيمة قديمة غير صالحة. إعدادات القيمة هي 0 أو 1.';
$string['invalidpermission'] = 'تم تحديد صلاحية خاطئة. الصلاحيات الصائبة هي وراثة، سماح، منع، حظر.';
$string['invalidvisibilitysetting'] = 'تم تحديد خيار إظهار غير صحيح. الخيارات الصحيحة هي مرئي ومخفي. لقد اخترتَ {$a}.';
$string['name'] = 'الاسم';
$string['nomorestepsleft'] = 'لقد تم إكمال مخطط سير العمل.';
$string['notallowedtodothisstep'] = 'ليست لديك صلاحية إجراء تغييرات لهذه الخطوة في الوقت الحاضر';
$string['overviewtitle'] = 'استعراض سير عمل {$a->workflowname} في {$a->contexttitle}';
$string['quizclosedate'] = 'تاريخ إغلاق الاختبار';
$string['quizopendate'] = 'تاريخ فتح الاختبار';
$string['removeworkflowcheck'] = 'هل أنت متأكد من رغبتك في إزالة سير العمل \'{$a->workflowname}\' من {$a->contexttitle}؟ هذا الإجراء يزيل كل البيانات ذات الصلة، ولا يمكن التراجع عنه!';
$string['removeworkflowfromcontext'] = 'أتريد إزالة سير العمل \'{$a->workflowname}\' من {$a->contexttitle}؟';
$string['state_history_active'] = 'مُفعَّلة';
$string['state_history_detail'] = '{$a->newstate} من قِبَل {$a->user} في {$a->time}.';
$string['workflow:dostep'] = 'صلاحية تنفيذ الخطوة';
$string['workflow:editdefinitions'] = 'صلاحية تحرير تفاصيل سير العمل';
$string['workflow:manage'] = 'صلاحية إدارة سير العمل';
$string['workflow:view'] = 'صلاحية معاينة معلومات سير العمل';
$string['workflowactive'] = 'سير العمل هذا حاليًا مُمَكَّن (<a href="{$a}" title="تعطيل سير العمل هذا">تعطيله</a>).';
$string['workflownotassignedtocontext'] = 'سير عمل \'{$a->workflowname}\' غير مُعيَّن إلى {$a->contexttitle}';
$string['workflowobsolete'] = 'سير العمل هذا حاليًا مؤشر على أنه معطل (<a href="{$a}" title="إعادة تمكين سير العمل هذا">تمكينه</a>).';
