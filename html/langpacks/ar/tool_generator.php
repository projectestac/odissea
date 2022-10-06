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
 * Strings for component 'tool_generator', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_generator
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'ملف كبير {$a}';
$string['courseexplanation'] = 'تقوم هذه الأداة بإنشاء مساقات اختبار قياسية تتضمن العديد من الأقسام والأنشطة والملفات.

يهدف هذا إلى توفير مقياس موحد للتحقق من موثوقية وأداء مكونات النظام المختلفة (مثل النسخ الاحتياطي والاستعادة).

هذا الاختبار مهم لأنه كانت هناك العديد من الحالات في السابق التي يعجز فيها النظام عن العمل عندما يواجه ظروف التشغيل الفعلي (مثل مساق ذي 1000 نشاط).

يمكن أن تشغل المساقات التي تم إنشاؤها باستخدام هذه الميزة قدراً كبيراً من مساحة قاعدة البيانات ونظام الملفات (عشرات الجيجابايت). ستحتاج إلى حذف تلك المساقات  (وانتظار عدة جولات تنظيف) لإطلاق هذه المساحة مرة أخرى.

**لا تستعمل هذه الميزة على نظام فعلي**. استعملها فقط على مخدم قيد التطوير.
(لتجنب الاستعمال غير المقصود، هذه الميزة معطلة ما لم تكن قد حددت أيضاً مستوى تصحيح أخطاء DEVELOPER).';
$string['coursesize_0'] = 'XS (حوالي 10 كيلو بايت؛ ينشأ في ثانية واحدة تقريباً)';
$string['coursesize_1'] = 'S (حوالي 10 ميغا بايت؛ يُنشأ في حوالي 30 ثانية)';
$string['coursesize_2'] = 'M (حوالي 100 ميجابايت؛ ينشأ في دقيقتين تقريباً)';
$string['coursesize_3'] = 'L (حوالي 1 جيجابايت ؛ أنشئ في حوالي 30 دقيقة)';
$string['coursesize_4'] = 'XL (حوالي 10 جيجابايت؛ ينشأ خلال ساعتين تقريباً)';
$string['coursesize_5'] = 'XXL (حوالي 20 جيجابايت؛ ينشأ خلال 4 ساعات تقريباً)';
$string['coursewithoutusers'] = 'المساق المحدد لا يوجد فيه مستخدمون';
$string['createcourse'] = 'أنشئ المساق';
$string['createtestplan'] = 'أنشئ خطة اختبار';
$string['creating'] = 'إنشاء مقرر';
$string['done'] = 'تم ({$a} )';
$string['downloadtestplan'] = 'تحميل خطة الاختبار';
$string['downloadusersfile'] = 'تتزيل ملف المستخدمين';
$string['error_nocourses'] = 'لا توجد مساقات لتوليد خطة الاختبار';
$string['error_noforumdiscussions'] = 'لا تحتوي المساقات المحددة على منتديات مناقشة';
$string['error_noforuminstances'] = 'لا تحتوي المساقات المحددة على عينات لوحدة المنتدى';
$string['error_noforumreplies'] = 'المساقات المحددة لا تحتوي على ردود منتدى';
$string['error_nonexistingcourse'] = 'المساق المحدد غير موجود';
$string['error_nopageinstances'] = 'لا يحتوي المساق المحدد على عينات لوحدة الصفحة';
$string['error_notdebugging'] = 'غير متاح على هذا الخادم لأن تصحيح الأخطاء لم يتم تعيينه على DEVELOPER';
$string['error_nouserspassword'] = 'تحتاج إلى تعيين $CFG-> tool_generator_users_password في config.php لإنشاء خطة اختبار';
$string['fullname'] = 'مساق اختباري: {$a->size}';
$string['maketestcourse'] = 'إنشاء مساق إختباري';
$string['maketestplan'] = 'بناء خطة اختبار JMeter';
$string['notenoughusers'] = 'لا يحتوي المساق المحدد على عدد كافٍ من المستخدمين';
$string['pluginname'] = 'مولد بيانات المطور';
$string['privacy:metadata'] = 'إن ملحق مولد بيانات المطور لا يخزن أي بيانات شخصية.';
$string['progress_checkaccounts'] = 'التحقق من حسابات المستخدمين ({$a})';
$string['progress_coursecompleted'] = 'اكتمل المساق ({$a})';
$string['progress_createaccounts'] = 'يجري إنشاء حسابات المستخدمين ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'إنشاء الواجبات ({$a})';
$string['progress_createbigfiles'] = 'إنشاء ملفات كبيرة ({$a})';
$string['progress_createcourse'] = 'إنشاء مقرر {$a}';
$string['progress_createforum'] = 'إنشاء منتدى ({$a} منشورات)';
$string['progress_createpages'] = 'إنشاء صفحات ({$a})';
$string['progress_createsmallfiles'] = 'إنشاء ملفات صغيرة ({$a})';
$string['progress_enrol'] = 'تسجيل المستخدمين في المقرر ({$a})';
$string['progress_sitecompleted'] = 'اكتمل الموقع ({$a} s)';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (حوالي 10 ميغا بايت؛ 3 مواد، يُنشأ في حوالي 30 ثانية)';
$string['sitesize_1'] = 'S (حوالي 50 ميجابايت ؛ 8 مواد، تم إنشاؤها في حوالي دقيقتين)';
$string['sitesize_2'] = 'M (حوالي 200 ميجابايت ؛ 73 مادة ، تم إنشاؤها في حوالي 10 دقائق)';
$string['sitesize_3'] = 'L (حوالي 1\'5GB ؛ 277 دورة تدريبية ، تم إنشاؤها في حوالي 1\'5 ساعات)';
$string['sitesize_4'] = 'XL (حوالي 10 غيغابايت ؛ 1065 مادة ، تم إنشاؤها في حوالي 5 ساعات)';
$string['sitesize_5'] = 'XXL (حوالي 20 جيجابايت ؛ 4177 مادة ، تم إنشاؤها في حوالي 10 ساعات)';
$string['size'] = 'حجم المساق';
$string['smallfiles'] = 'ملفات صغيرة';
$string['targetcourse'] = 'إختبار المساق المقصود';
$string['testplanexplanation'] = 'تقوم هذه الأداة بإنشاء ملف خطة اختبار JMeter مع ملف بيانات اعتماد المستخدم.

تم تصميم خطة الاختبار هذه لتعمل جنباً إلى جنب مع {$a}، مما يسهل تشغيل خطة الاختبار في بيئة معينة من مودل، ويجمع معلومات حول عمليات التشغيل ويقارن النتائج، لذلك ستحتاج إلى تنزيلها واستعمال النص البرمجي test_runner.sh الخاص بها أو اتباع تعليمات التنصيب والاستخدام.

تحتاج إلى تعيين كلمة مرور لمستخدمي المساق في config.php (مثل $CFG->tool_generator_users_password = \'moodle\';). لا توجد قيمة افتراضية لكلمة المرور هذه لمنع الاستعمالات غير المقصودة للأداة. تحتاج إلى استعمال خيار تحديث كلمات المرور في حالة امتلاك مستخدمي المساق كلمات مرور أخرى أو تم إنشاؤها بواسطة tool_generator ولكن دون تعيين قيمة $CFG-> tool_generator_users_password.

إنه جزء من tool_generator لذا فهو يعمل جيداً مع المساقات التي تم إنشاؤها بواسطة المساقات ومولدات الموقع، كما يمكن استعماله مع أي مساق يحتوي على الأقل:

* عدد كافٍ من المستخدمين المنضمين (يعتمد على حجم خطة الاختبار التي تحددها) مع إعادة تعيين كلمة المرور لتصير \'moodle\'
* عينة لوحدة الصفحة
* عينة لوحدة منتدى مع مناقشة واحدة على الأقل ورد واحد

قد ترغب في مراعاة سعة الخوادم الخاصة بك عند تشغيل خطط اختبار كبيرة حيث يمكن أن يكون حجم التحميل الناتج عن JMeter كبيراً بشكل خاص. تم ضبط فترة زيادة البيانات وفقاً لعدد مؤشرات الترابط (المستخدمون) لتقليل هذا النوع من المشكلات ولكن الحمل لا يزال كبيراً.

**لا تقم بتشغيل خطة الاختبار على نظام فعلي**. تقوم هذه الميزة فقط بإنشاء الملفات لتغذية JMeter، لذا فهي ليست خطيرة بحد ذاتها، لكن ينبغي أن **لا تقوم أبداً** بتشغيل خطة الاختبار هذه في موقع إنتاجي.';
$string['testplansize_0'] = 'XS ({$a->users} من المستخدمين ، {$a->loops} وحلقات {$a->rampup}';
$string['testplansize_1'] = 'S ({$a->users} المستخدمين ، {$a->loops} حلقات و {$a->rampup} فترة';
$string['testplansize_2'] = 'M ({$a->users} من المستخدمين ، {$a->loops} حلقات و {$a->rampup} فترة';
$string['testplansize_3'] = 'L ({$a->users} المستخدمين ، {$a->loops} وحلقات {$a->rampup}';
$string['testplansize_4'] = 'XL ({$a->users} المستخدمين ، {$a->loops} حلقات و {$a->rampup} فترة';
$string['testplansize_5'] = 'XXL ({$a->users} من المستخدمين ، {$a->loops} وحلقات {$a->rampup})';
$string['updateuserspassword'] = 'تحديث كلمة مرور مستخدمي المادة';
$string['updateuserspassword_help'] = 'يحتاج JMeter إلى تسجيل الدخول كمستخدمين للمادة، يمكنك تعيين كلمة مرور المستخدمين باستخدام $CFG-> tool_generator_users_password في config.php؛ يقوم هذا الإعداد بتحديث كلمة مرور مستخدم المادة وفقًا لـ $CFG-> tool_generator_users_password. قد يكون ذلك مفيدًا إذا كنت تستخدم مادة لم يتم إنشاؤها بواسطة tool_generator أو لم يتم تعيين $CFG-> tool_generator_users_password عند إنشاء دورات الاختبار.';
