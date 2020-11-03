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
 * Strings for component 'tool_lpmigrate', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_lpmigrate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'المساقات المسموح بها';
$string['allowedcourses_help'] = 'حدد المواد المراد ترحيلها إلى الإطار الجديد. إذا لم يتم تحديد مادة ، فسيتم ترحيل جميع المواد.';
$string['continuetoframeworks'] = 'المتابعة إلى أطر العمل';
$string['coursecompetencymigrations'] = 'ترحيل الكفاءة من المادة';
$string['coursemodulecompetencymigrations'] = 'ترحيل نشاط المادة ومصادر الكفاءة';
$string['coursemodulesfound'] = 'أنشطة المادة أو الموارد الموجودة';
$string['coursesfound'] = 'المساقات الموجودة';
$string['coursestartdate'] = 'تاريخ بدء المساقات';
$string['coursestartdate_help'] = 'في حالة التمكين، لن يتم ترحيل المساقات التي لها تاريخ بدء قبل التاريخ المحدد.';
$string['disallowedcourses'] = 'المساقات غير المسموح بها';
$string['disallowedcourses_help'] = 'حدد أي مادة لا ينبغي ترحيلها إلى الإطار الجديد.';
$string['errorcannotmigratetosameframework'] = 'لا يمكن الترحيل من و إلى نفس الإطار.';
$string['errorcouldnotmapcompetenciesinframework'] = 'لا يمكن تعيين أي كفاءة في هذا الإطار.';
$string['errors'] = 'الأخطاء';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'خطأ أثناء ترحيل كفاءة المادة: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'خطأ أثناء ترحيل النشاط أو كفاءة المصادر: {$a}';
$string['excludethese'] = 'استبعد هذه';
$string['explanation'] = 'يمكن استعمال هذه الأداة لتحديث إطار عمل الكفاءة إلى إصدار أحدث. إنها تبحث عن الكفاءات في المساقات والأنشطة باستعمال الإطار القديم، وتقوم بتحديث الروابط للإشارة إلى الإطار الجديد.

لا يوصى بتحرير المجموعة القديمة من الكفاءات مباشرةً، حيث سيؤدي ذلك إلى تغيير كل الكفاءات التي تم منحها بالفعل في خطط تعلم المستخدمين.

عادةً، ستقوم باستيراد الإصدار الجديد من إطار العمل وإخفاء الإطار القديم، ثم استعمال هذه الأداة لترحيل المساقات الجديدة إلى إطار العمل الجديد.';
$string['findingcoursecompetencies'] = 'العثور على كفاءات المقرر';
$string['findingmodulecompetencies'] = 'إيجاد كفاءات النشاط والمورد';
$string['frameworks'] = 'أُطر العمل';
$string['limittothese'] = 'الحد من هذه';
$string['lpmigrate:frameworksmigrate'] = 'ترحيل أطر العمل';
$string['migrateframeworks'] = 'ترحيل أطر العمل';
$string['migratefrom'] = 'الترحيل من';
$string['migratefrom_help'] = 'حدد الإطار الأقدم المستخدم حاليًا.';
$string['migratemore'] = 'ترحيل المزيد';
$string['migrateto'] = 'ترحيل إلى';
$string['migrateto_help'] = 'حدد الإصدار الأحدث من الإطار. من الممكن فقط اختيار إطار غير مخفي.';
$string['migratingcourses'] = 'ترحيل المساقات';
$string['missingmappings'] = 'تعيينات مفقودة';
$string['performmigration'] = 'تنفيذ الترحيل';
$string['pluginname'] = 'أداة ترحيل الكفاءات';
$string['privacy:metadata'] = 'إن ملحق أداة ترحيل الكفاءات لا يخزن أي بيانات شخصية.';
$string['results'] = 'النتائج';
$string['startdatefrom'] = 'تاريخ البدء من';
$string['unmappedin'] = 'غير معيّن في {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'لا يمكن إزالة كفاءة المادة.';
$string['warningcouldnotremovemodulecompetency'] = 'لا يمكن إزالة النشاط أو كفاءة المورد.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'الكفاءة الوجهة موجودة بالفعل.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'الكفاءة المقصودة للنشاط أو المورد موجودة سلفاً.';
$string['warnings'] = 'تحذيرات';
