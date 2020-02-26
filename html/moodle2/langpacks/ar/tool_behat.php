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
 * Strings for component 'tool_behat', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_behat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'تساعد أداة الإدارة هذه المطورين و كتاب الاختبار على إنشاء ملفات .feature تصف وظائف Moodle و تشغيلها تلقائيًا. يتم سرد تعريفات الخطوة المتاحة للاستخدام في ملفات .feature أدناه.';
$string['allavailablesteps'] = 'تعاريف جميع  الخطوات المتاحة';
$string['errorbehatcommand'] = 'خطأ في تشغيل الأمر behat CLI. حاول تشغيل "{$a} - المساعدة" يدويًا من CLI لمعرفة المزيد حول المشكلة.';
$string['errorcomposer'] = 'لم يتم تثبيت استقلالية المؤلف.';
$string['errordataroot'] = 'لم يتم تعيين $ CFG-> behat_dataroot أو غير صالح.';
$string['errorsetconfig'] = 'يجب ضبط $ CFG-> behat_dataroot و $ CFG-> behat_prefix و $ CFG-> behat_wwwroot في config.php.';
$string['erroruniqueconfig'] = 'يجب أن تكون قيم $ CFG-> behat_dataroot و $ CFG-> behat_prefix و $ CFG-> behat_wwwroot مختلفة عن $ CFG-> dataroot و $ CFG-> بادئة و CFG-> wwwroot و $ CFG-> phpunit_dataroot و $ CFG-> > قيم phpunit_prefix.';
$string['fieldvalueargument'] = 'وسيطات قيمة الحقل';
$string['fieldvalueargument_help'] = 'يجب إكمال هذه الوسيطة بقيمة حقل. هناك العديد من أنواع الحقول ، بما في ذلك الأنواع البسيطة مثل مربعات الاختيار أو التحديدات أو النصوص النصية أو الأنواع المعقدة مثل محددات التاريخ.
راجع وثائق المطابقة Acceptance_testing للحصول على تفاصيل قيم الحقول المتوقعة.';
$string['giveninfo'] = 'معطى. عمليات لإعداد البيئة';
$string['infoheading'] = 'معلومات';
$string['installinfo'] = 'اقرأ {$a} للتثبيت و اختبار معلومات التنفيذ';
$string['newstepsinfo'] = 'اقرأ {$a} للحصول على معلومات حول كيفية إضافة التعريفات خطوة جديدة';
$string['newtestsinfo'] = 'اقرأ {$a} للحصول على معلومات حول كيفية كتابة اختبارات جديدة';
$string['nostepsdefinitions'] = 'لا توجد أي تعريفات خطوة مطابقة لهذا الفلتر';
$string['pluginname'] = 'اختبار القبول';
$string['privacy:metadata'] = 'البرنامج المساعد  Acceptance testing لا يخزن أيّ بيانات شخصية.';
$string['stepsdefinitionscomponent'] = 'المنطقة';
$string['stepsdefinitionscontains'] = 'يحتوي على';
$string['stepsdefinitionsfilters'] = 'تعاريف الخطوة';
$string['stepsdefinitionstype'] = 'النوع';
$string['theninfo'] = 'ثم. عمليات التحقق للتأكد من النتائج هي تلك المتوقعة';
$string['unknownexceptioninfo'] = 'حدثت مشكلة في السيلينيوم أو متصفحك. يرجى التأكد من أنك تستخدم أحدث إصدار من السيلينيوم. خطأ:';
$string['viewsteps'] = 'مرشّح';
$string['wheninfo'] = 'متى؟.... الإجراءات التي تؤثر في الحدث';
$string['wrongbehatsetup'] = 'هناك خطأ في إعداد behat .. لذا لا يمكن سرد تعريفات الخطوة: {$a->errormsg}
يرجى التحقق من:
يتم تعيين $ CFG-> behat_dataroot ، $ CFG-> behat_prefix و $CFG-> behat_wwwroot في config.php بقيم مختلفة من $CFG-> dataroot ، $CFG-> بادئة و $CFG-> wwwroot.
قمت بتشغيل "{$ a-> behatinit}" من دليل جذر Moodle الخاص بك.
يتم تثبيت التبعيات في البائع / و {$a->behatcommand} للملف أذونات تنفيذ.';
