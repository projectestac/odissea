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
 * Strings for component 'tool_lpmigrate', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_lpmigrate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'المواد المسموح بها';
$string['allowedcourses_help'] = 'حدد المواد المراد ترحيلها إلى الإطار الجديد. إذا لم يتم تحديد مادة ، فسيتم ترحيل جميع المواد.';
$string['continuetoframeworks'] = 'الاستمرار في الأطر';
$string['coursecompetencymigrations'] = 'ترحيل الكفاءة من المادة';
$string['coursemodulecompetencymigrations'] = 'ترحيل نشاط المادة ومصادر الكفاءة';
$string['coursemodulesfound'] = 'أنشطة المادة أو الموارد الموجودة';
$string['coursesfound'] = 'المواد الموجودة';
$string['coursestartdate'] = 'تاريخ بدء المواد';
$string['coursestartdate_help'] = 'في حالة التمكين ، فلن يتم ترحيل المواد التي لها تاريخ بدء قبل التاريخ المحدد.';
$string['disallowedcourses'] = 'المواد غير المسموح بها';
$string['disallowedcourses_help'] = 'حدد أي مادة لا ينبغي ترحيلها إلى الإطار الجديد.';
$string['errorcannotmigratetosameframework'] = 'لا يمكن الترحيل من و إلى نفس الإطار.';
$string['errorcouldnotmapcompetenciesinframework'] = 'لا يمكن تعيين أي كفاءة في هذا الإطار.';
$string['errors'] = 'الأخطاء';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'خطأ أثناء ترحيل كفاءة المادة: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'خطأ أثناء ترحيل النشاط أو كفاءة المصادر: {$a}';
$string['excludethese'] = 'استبعد هذه';
$string['explanation'] = 'يمكن استخدام هذه الأداة لتحديث إطار الكفاءات إلى إصدار أحدث. يبحث عن الكفاءات في الدورات و الأنشطة باستخدام الإطار القديم ، و يقوم بتحديث الروابط للإشارة إلى الإطار الجديد.
لا يوصى بتحرير المجموعة القديمة من الكفاءات مباشرةً ، حيث سيؤدي ذلك إلى تغيير جميع الكفاءات التي تم منحها بالفعل في خطط تعلم المستخدمين. عادةً ما تقوم باستيراد الإصدار الجديد من إطار عمل وإخفاء الإطار القديم ثم استخدام هذه الأداة لترحيل المواد الجديدة إلى الإطار الجديد.';
$string['findingcoursecompetencies'] = 'العثور على كفاءات المقرر';
$string['findingmodulecompetencies'] = 'إيجاد النشاط و كفاءات المصادر';
$string['frameworks'] = 'الأُطر';
$string['limittothese'] = 'الحد من هذه';
$string['lpmigrate:frameworksmigrate'] = 'ترحيل الأطر';
$string['migrateframeworks'] = 'ترحيل الأطر';
$string['migratefrom'] = 'الهجرة من';
$string['migratefrom_help'] = 'حدد الإطار الأقدم المستخدم حاليًا.';
$string['migratemore'] = 'ترحيل المزيد';
$string['migrateto'] = 'ترحيل إلى';
$string['migrateto_help'] = 'حدد الإصدار الأحدث من الإطار. من الممكن فقط اختيار إطار غير مخفي.';
$string['migratingcourses'] = 'ترحيل المواد';
$string['missingmappings'] = 'تعيينات مفقودة';
$string['performmigration'] = 'أداء الترحيل';
$string['pluginname'] = 'أداة ترحيل الكفاءات';
$string['privacy:metadata'] = 'لا يخزن مكون Competencies migration tool أي بيانات شخصية.';
$string['results'] = 'النتائج';
$string['startdatefrom'] = 'تاريخ البدء من';
$string['unmappedin'] = 'غير معيّن في {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'لا يمكن إزالة كفاءة المادة.';
$string['warningcouldnotremovemodulecompetency'] = 'لا يمكن إزالة النشاط أو كفاءة المورد.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'الكفاءة الوجهة موجودة بالفعل.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'النشاط الوجهة أو كفاءة المصادر موجودة بالفعل.';
$string['warnings'] = 'تحذيرات';
