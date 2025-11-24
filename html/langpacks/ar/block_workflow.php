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
 * Strings for component 'block_workflow', language 'ar', version '4.5'.
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
$string['editstepinstructions'] = 'بعض التوجيهات التي توضح الغرض من هذه الصفحة مع مقدمة عامة عنها. أذكر النصوص البرمجية، ولكن ملفات المساعدة الخاصة بها هي المفترض أن تعطي معلومات أكثر عن كيفية عملها.';
$string['emailmessage_help'] = 'يمكن استعمال العناصر النائبة الآتية في سطر الموضوع ومتن الرسالة:

* %%workflowname%% - اسم سير العمل.
* %%stepname%% - اسم الخطوة الحالية.
* %%contextname%% - اسم الشيء الذي ينطبق عليه سير العمل، على سبيل المثال، اسم الموقع أو الاختبار.
* %%contexturl%% - رابط إلى الشيء الذي ينطبق عليه سير العمل.
* %%coursename%% - اسم موقع الويب الذي يوجد فيه الشيء (تنحصر فائدته في سير عمل النشاطات)
* %%coursestartdate%% - تاريخ بدء المقرر.
* %%courseenddate%% - تاريخ انتهاء المقرر.
* %%activityopendate%% - للنشاطات ذات تاريخ البدء (مثل الاختبار) يمثل ذلك التاريخ.
* %%activityclosedate%% -  للنشاطات ذات تاريخ الإغلاق (مثل الاختبار) يمثل ذلك التاريخ.
* %%usernames%% - أسماء كل الأشخاص الذين سترسل لهم هذه الرسالة، بشكل قائمة مفصولة بفوارز.
* %%currentusername%% - اسم الشخص الذي أدى إجراؤه إلى تحفيز الرسالة الحالية. هذا سيعمل فقط مع رسائل المهام المنتهية وليس إرسالاً واحدًا مجدولاً.

يمكن استعمال الترميزات الآتية فقط في متن الرسالة:

* %%instructions%% - التعليمات من خطوة سير العمل هذه.
* %%tasks%% - قائمة خانات تأشير ما مطلوب، منسقة بشكل قائمة منقطة.
* %%comment%% - تعليق سير العمل. عادةً هو التعليق من المهمة الحالية، ولكنه أحيانًا قد يكون التعليق من المهمة السابقة عندما يكون ذلك معقولاً أكثر.';
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
$string['managedescription'] = 'في هذه الصفحة يمكنك إنشاء وتحرير مخططات سير العمل ومظاهر البريد الالكتروني التي تستعملها.';
$string['name'] = 'الاسم';
$string['nameinuse'] = 'الاسم المحدد مستعمل سابقًا. لا بد للأسماء أن تكون فريدة';
$string['nomorestepsleft'] = 'لقد تم إكمال مخطط سير العمل.';
$string['notallowedtodothisstep'] = 'ليست لديك صلاحية إجراء تغييرات لهذه الخطوة في الوقت الحاضر';
$string['noworkflow'] = 'ليس هناك حاليًا سير عمل مُعَيَّن إلى هذه الصفحة';
$string['overview'] = 'نظرة عامة';
$string['overviewtitle'] = 'استعراض سير عمل {$a->workflowname} في {$a->contexttitle}';
$string['quizclosedate'] = 'تاريخ إغلاق الاختبار';
$string['quizopendate'] = 'تاريخ فتح الاختبار';
$string['removeworkflowcheck'] = 'هل أنت متأكد من رغبتك في إزالة سير العمل \'{$a->workflowname}\' من {$a->contexttitle}؟ هذا الإجراء يزيل كل البيانات ذات الصلة، ولا يمكن التراجع عنه!';
$string['removeworkflowfromcontext'] = 'أتريد إزالة سير العمل \'{$a->workflowname}\' من {$a->contexttitle}؟';
$string['shortnameinuse'] = 'الاسم المختصر المحدد مستعمل سابقًا. لا بد للأسماء المختصرة أن تكون فريدة';
$string['shownamesx'] = 'إظهار الأسماء ({$a})';
$string['state_history_active'] = 'مُفعَّلة';
$string['state_history_detail'] = '{$a->newstate} من قِبَل {$a->user} في {$a->time}.';
$string['stepactivation_link'] = 'block/workflow';
$string['stepcompletion_link'] = 'block/workflow';
$string['stepextranotify_link'] = 'block/workflow';
$string['workflow:dostep'] = 'صلاحية تنفيذ الخطوة';
$string['workflow:editdefinitions'] = 'صلاحية تحرير تفاصيل سير العمل';
$string['workflow:manage'] = 'صلاحية إدارة سير العمل';
$string['workflow:view'] = 'صلاحية معاينة معلومات سير العمل';
$string['workflowactive'] = 'سير العمل هذا حاليًا مُمَكَّن (<a href="{$a}" title="تعطيل سير العمل هذا">تعطيله</a>).';
$string['workflownotassignedtocontext'] = 'سير عمل \'{$a->workflowname}\' غير مُعيَّن إلى {$a->contexttitle}';
$string['workflowobsolete'] = 'سير العمل هذا حاليًا مؤشر على أنه معطل (<a href="{$a}" title="إعادة تمكين سير العمل هذا">تمكينه</a>).';
