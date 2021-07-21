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
 * Strings for component 'tool_behat', language 'ar', version '3.11'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'تساعد أداة الإدارة هذه المطورين وكتاب الاختبار على إنشاء ملفات .feature تصف وظائف مودل وتقوم بتشغيلها تلقائياً. تعريفات الخطوة المتاحة للاستعمال في ملفات .feature مدرجة أدناه.';
$string['allavailablesteps'] = 'كل ما يتوافر من تعاريف الخطوة';
$string['errorapproot'] = '$CFG-> behat_ionic_dirroot لا يشير إلى تثبيت صالح من مطور تطبيق مودل.';
$string['errorbehatcommand'] = 'خطأ في تشغيل الأمر من واجهة سطر الأوامر لـ behat. حاول تشغيل "{$a} --help" يدويًا من واجهة سطر الأوامر لمعرفة المزيد عن المشكلة.';
$string['errorcomposer'] = 'لم يتم تثبيت تبعيات المؤلف.';
$string['errordataroot'] = 'لم يتم تعيين $CFG-> behat_dataroot أو هو غير صالح.';
$string['errorsetconfig'] = 'يجب ضبط $CFG-> behat_dataroot و $CFG-> behat_prefix و $CFG-> behat_wwwroot في config.php.';
$string['erroruniqueconfig'] = 'يجب أن تكون قيم $CFG-> behat_dataroot و $CFG-> behat_prefix و $CFG-> behat_wwwroot  مختلفة عن قيم $CFG-> dataroot و $CFG->prefix و $CFG-> wwwroot و $CFG-> phpunit_dataroot و $CFG->phpunit_prefix.';
$string['fieldvalueargument'] = 'وسيطات قيمة الحقل';
$string['fieldvalueargument_help'] = 'يجب إكمال هذا المعامل بقيمة حقل. هناك العديد من أنواع الحقول، بما في ذلك الأنواع البسيطة مثل خانات الاختيار، التحديدات أو المناطق النصية، أو الأنواع المعقدة مثل محددات التاريخ. راجع توثيقات المطور <a href="https://docs.moodle.org/dev/Acceptance_testing" target="_blank">Acceptance_testing</a> للحصول على تفاصيل عن قيم الحقول المتوقعة.';
$string['giveninfo'] = 'معطى. العمليات لإعداد البيئة.';
$string['infoheading'] = 'المعلومات';
$string['installinfo'] = 'إقرأ {$a} لمعلومات التثبيت وتنفيذ الاختبارات';
$string['newstepsinfo'] = 'إقرأ {$a} للحصول على معلومات عن كيفية إضافة تعريفات جديدة للخطوة';
$string['newtestsinfo'] = 'إقرأ {$a} للحصول على معلومات عن كيفية كتابة إختبارات جديدة';
$string['nostepsdefinitions'] = 'لا توجد أي تعريفات خطوة مطابقة لهذا المرشح';
$string['pluginname'] = 'إختبار القبول';
$string['privacy:metadata'] = 'إن ملحق اختبار القبول لا يخزن أي بيانات شخصية.';
$string['stepsdefinitionscomponent'] = 'المنطقة';
$string['stepsdefinitionscontains'] = 'يحتوي على';
$string['stepsdefinitionsfilters'] = 'تعاريف الخطوة';
$string['stepsdefinitionstype'] = 'النوع';
$string['theninfo'] = 'ثم. عمليات التحقق للتأكد من أن النتائج هي تلك المتوقعة.';
$string['unknownexceptioninfo'] = 'حدثت مشكلة في السيلينيوم أو متصفحك. يرجى التأكد من أنك تستعمل أحدث إصدار من السيلينيوم. خطأ:';
$string['viewsteps'] = 'مرشّح';
$string['warndirrootconfigfound'] = 'تم العثور على ملف تهيئة في {$a}. لا يتم تحديث هذا الملف تلقائيًا وقد يصير مهملاً. نوصي بإزالة هذا الملف.';
$string['wheninfo'] = 'متى. الإجراءات التي تثير الحدث';
$string['wrongbehatsetup'] = 'هناك خطأ في إعداد behat .. لذا لا يمكن سرد تعريفات الخطوة: <b>{$a->errormsg}</b><br/>يرجى التحقق من:<ul>
<li>$CFG->behat_dataroot، $CFG->behat_prefix و $CFG->behat_wwwroot قد تم إعدادها في الملف config.php بقيم مختلفة من $CFG->dataroot، $CFG->prefix و $CFG->wwwroot.</li>
<li>قمت بتشغيل "{$a->behatinit}" من مجلد الجذر لتنصيبك من مودل.</li>
<li>تم تنصيب التبِعات في vendor/ والملف {$a->behatcommand} يمتلك صلاحيات التنفيذ.</li></ul>';
