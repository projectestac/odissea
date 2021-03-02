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
 * Strings for component 'tool_generator', language 'ar', version '3.8'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'ملف كبير {$a}';
$string['courseexplanation'] = 'تقوم هذه الأداة بإنشاء دورات اختبار قياسية تتضمن العديد من الأقسام والأنشطة والملفات. يهدف هذا إلى توفير مقياس موحد للتحقق من موثوقية وأداء مكونات النظام المختلفة (مثل النسخ الاحتياطي والاستعادة). هذا الاختبار مهم لأنه كان هناك العديد من الحالات في السابق ، حيث لا يعمل النظام في مواجهة حالات الاستخدام الفعلي (على سبيل المثال دورة مع 1000 نشاط). يمكن أن تشغل الدورات التي تم إنشاؤها باستخدام هذه الميزة قدرًا كبيرًا من مساحة قاعدة البيانات ونظام الملفات (عشرات الجيجابايت). ستحتاج إلى حذف الدورات التدريبية (وانتظر عدة عمليات تنظيف) لإطلاق هذه المساحة مرة أخرى.
** لا تستخدم هذه الميزة على نظام مباشر
** استخدم فقط على خادم مطور.
(لتجنب الاستخدام غير المقصود، يتم تعطيل هذه الميزة ما لم تكن قد حددت أيضًا مستوى تصحيح أخطاء DEVELOPER).';
$string['coursesize_0'] = 'XS (حوالي 10 كيلو بايت ؛ أنشئ في ثانية واحدة تقريبًا)';
$string['coursesize_1'] = 'S (حوالي  10 ميغابايت ؛ أنشئ في حوالي 30 ثانية)';
$string['coursesize_2'] = 'M (حوالي 100 ميجابايت ؛ أنشئ في دقيقتين تقريبًا)';
$string['coursesize_3'] = 'L (حوالي 1 غيغا بايت؛ ينشأ في 30 دقيقة تقريبًا)';
$string['coursesize_4'] = 'XL (حوالي 10 جيجابايت ؛ أنشئ خلال ساعتين تقريبًا)';
$string['coursesize_5'] = 'XXL (حوالي 20 جيجابايت ؛ أنشئ خلال 4 ساعات تقريبًا)';
$string['coursewithoutusers'] = 'بالطبع المحدد لا يوجد لديه المستخدمين';
$string['createcourse'] = 'أنشئ مقرر';
$string['createtestplan'] = 'أنشئ خطة اختبار';
$string['creating'] = 'إنشاء مقرر';
$string['done'] = 'تم ({$a} )';
$string['downloadtestplan'] = 'تحميل خطة الاختبار';
$string['downloadusersfile'] = 'تتزيل ملف المستخدمين';
$string['error_nocourses'] = 'لا توجد مواد لتوليد خطة اختبار';
$string['error_noforumdiscussions'] = 'لا تحتوي المادة المحددة على منتدى نقاش';
$string['error_noforuminstances'] = 'لا تحتوي المادة المحددة على نماذج مشابهة للمنتدى';
$string['error_noforumreplies'] = 'الدورة التدريبية المحددة لا تحتوي على ردود المنتدى';
$string['error_nonexistingcourse'] = 'المادة المحددة غير موجودة';
$string['error_nopageinstances'] = 'لا تحتوي المادة المحددة على وحدة صفحة مشابهة';
$string['error_notdebugging'] = 'غير متاح على هذا الخادم لأن تصحيح الأخطاء لم يتم تعيينه على DEVELOPER';
$string['error_nouserspassword'] = 'تحتاج إلى تعيين $CFG-> tool_generator_users_password في config.php لإنشاء خطة اختبار';
$string['fullname'] = 'اختبار مادة: {$a->size}';
$string['maketestcourse'] = 'بناء اختبار مادة';
$string['maketestplan'] = 'بناء خطة اختبار JMeter';
$string['notenoughusers'] = 'لا تحتوي المادة المحددة على عدد كافٍ من المستخدمين';
$string['pluginname'] = 'مطور مولد البيانات';
$string['privacy:metadata'] = 'لا يخزن المكون الإضافي Development data generator  أيّ بيانات شخصية.';
$string['progress_checkaccounts'] = 'التحقق من حسابات المستخدمين ({$a})';
$string['progress_coursecompleted'] = 'اكتملت المادة ({$a} )';
$string['progress_createaccounts'] = 'إنشاء حسابات مستخدمين  ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'إنشاء مهام ({$a})';
$string['progress_createbigfiles'] = 'إنشاء ملفات كبيرة ({$a})';
$string['progress_createcourse'] = 'إنشاء مقرر {$a}';
$string['progress_createforum'] = 'إنشاء منتدى ({$a} منشورات)';
$string['progress_createpages'] = 'إنشاء صفحات ({$a})';
$string['progress_createsmallfiles'] = 'إنشاء ملفات صغيرة ({$a})';
$string['progress_enrol'] = 'ضم المستخدمين إلى المقرر ({$a})';
$string['progress_sitecompleted'] = 'اكتمل الموقع ({$a} s)';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (حوالي 10 ميغابايت ؛ 3 مواد، تم إنشاؤها في حوالي 30 ثانية)';
$string['sitesize_1'] = 'S (حوالي 50 ميغا بايت؛ 8 مساقات، ينشأ في دقيقتين تقريبًا)';
$string['sitesize_2'] = 'M (حوالي 200 ميغا بايت؛ 73 مساق، ينشأ في 10 دقائق تقريبًا)';
$string['sitesize_3'] = 'L (حوالي 1.5 غيغا بايت؛ 277 مساق، ينشأ في 1.5 ساعة تقريبًا)';
$string['sitesize_4'] = 'XL (حوالي 10 غيغا بايت؛ 1065 مساق؛ ينشأ في 5 ساعات تقريبًا)';
$string['sitesize_5'] = 'XXL (حوالي 20 غيغا بايت؛ 4177 مساق، ينشأ في 10 ساعات تقريبًا)';
$string['size'] = 'حجم المقرر';
$string['smallfiles'] = 'ملفات صغيرة';
$string['targetcourse'] = 'اختبار المادة الهدف';
$string['testplanexplanation'] = 'تقوم هذه الأداة بإنشاء ملف خطة اختبار JMeter مع ملف بيانات اعتماد المستخدم. تم تصميم خطة الاختبار هذه لتعمل جنبًا إلى جنب مع {$a} ، مما يسهل تشغيل خطة الاختبار في بيئة Moodle المعينة ، ويجمع معلومات حول عمليات التشغيل ويقارن النتائج ، لذلك ستحتاج إلى تنزيلها واستخدامها test_runner. sh النصي أو اتبع تعليمات التثبيت والاستخدام. تحتاج إلى تعيين كلمة مرور لمستخدمي المقرر في config.php (مثل $CFG-> tool_generator_users_password = \'moodle\'؛). لا توجد قيمة افتراضية لكلمة المرور هذه لمنع الاستخدامات غير المقصودة للأداة. تحتاج إلى استخدام خيار تحديث كلمات المرور في حالة امتلاك مستخدمي الدورة التدريبية كلمات مرور أخرى أو تم إنشاؤها بواسطة tool_generator ولكن دون تعيين قيمة $CFG-> tool_generator_users_password. إنه جزء من أداة توليد الطاقة ، لذا فهو يعمل جيدًا مع الدورات التي تم إنشاؤها بواسطة الدورات ومولدات الموقع ، كما يمكن استخدامه مع أي دورة تدريبية تحتوي على الأقل:
 * عدد كافٍ من المستخدمين المسجلين (يعتمد على حجم خطة الاختبار التي تحددها) مع إعادة تعيين كلمة المرور إلى "moodle"
* مثيل لوحدة الصفحة
* مثيل لوحدة منتدى مع مناقشة واحدة على الأقل ورد واحد قد ترغب في مراعاة سعة الخوادم الخاصة بك عند تشغيل خطط اختبار كبيرة حيث يمكن أن يكون حجم التحميل الناتج عن JMeter كبيرًا بشكل خاص . تم ضبط فترة زيادة البيانات وفقًا لعدد مؤشرات الترابط (المستخدمون) لتقليل هذا النوع من المشكلات ولكن الحمل لا يزال كبيرًا.
** لا تقم بتشغيل خطة الاختبار على نظام مباشر
**. تقوم هذه الميزة فقط بإنشاء الملفات لتغذية JMeter ، لذا فهي ليست خطيرة بحد ذاتها ، لكن يجب عليك
** NEVER ** تشغيل خطة الاختبار هذه في موقع الإنتاج.';
$string['testplansize_0'] = 'XS ({$a->users} من المستخدمين، {$a->loops} من الجولات و {$a->rampup} فترة التوليد';
$string['testplansize_1'] = 'S ({$a->users} من المستخدمين، {$a->loops} من الجولات و {$a->rampup} فترة التوليد';
$string['testplansize_2'] = 'M ({$a->users} من المستخدمين، {$a->loops} من الجولات و {$a->rampup} فترة التوليد';
$string['testplansize_3'] = 'L ({$a->users} من المستخدمين، {$a->loops} من الجولات و {$a->rampup} فترة التوليد';
$string['testplansize_4'] = 'XL ({$a->users} من المستخدمين، {$a->loops} من الجولات و {$a->rampup} فترة التوليد';
$string['testplansize_5'] = 'XXL ({$a->users} من المستخدمين، {$a->loops} من الجولات و {$a->rampup} فترة التوليد';
$string['updateuserspassword'] = 'تحديث كلمة مرور مستخدمي المادة';
$string['updateuserspassword_help'] = 'يحتاج JMeter إلى تسجيل الدخول كمستخدمين للمادة، يمكنك تعيين كلمة مرور المستخدمين باستخدام $CFG-> tool_generator_users_password في config.php؛ يقوم هذا الإعداد بتحديث كلمة مرور مستخدم المادة وفقًا لـ $CFG-> tool_generator_users_password. قد يكون ذلك مفيدًا إذا كنت تستخدم مادة لم يتم إنشاؤها بواسطة tool_generator أو لم يتم تعيين $CFG-> tool_generator_users_password عند إنشاء دورات الاختبار.';
