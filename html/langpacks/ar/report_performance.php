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
 * Strings for component 'report_performance', language 'ar', version '4.1'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'الحفظ الاحتياطي التلقائي';
$string['check_backup_comment_disable'] = 'قد يتأثر الأداء خلال عملية الحفظ الاحتياطي. عند تمكينه، ينبغي جدولة مهام الحفظ الاحتياطي لتكون خارج أوقات الذروة.';
$string['check_backup_comment_enable'] = 'قد يتأثر الأداء خلال عملية الحفظ الاحتياطي. ينبغي جدولة مهام الحفظ الاحتياطي لتكون خارج أوقات الذروة.';
$string['check_backup_details'] = 'تمكين الحفظ الاحتياطي يقوم تلقائياً بإنشاء محفوظات لكل المقررات الدراسية في المخدم في الوقت الذي تحدده.<p>خلال هذه العملية، سيتم استهلاك المزيد من موارد المخدم مما قد يؤثر على الأداء.</p>';
$string['check_cachejs_comment_disable'] = 'عند تمكينه، سيتحسن أداء تحميل الصفحات.';
$string['check_cachejs_comment_enable'] = 'عند تعطيله، قد يكون تحميل الصفحات أبطأ.';
$string['check_cachejs_details'] = 'استعمال ميزة الخبء والضغط لـ Javascript يحسن كثيراً من أداء تحميل الصفحات. يوصى به بشدة في المواقع الإنتاجية.';
$string['check_dbschema_errors'] = 'مخطط قاعدة البيانات غير متراصف.';
$string['check_dbschema_name'] = 'فحص مخطط قاعدة البيانات';
$string['check_dbschema_ok'] = 'مخطط قاعدة البيانات صحيح.';
$string['check_debugmsg_comment_developer'] = 'إذا تم ضبطه على قيمة مغايرة لـ DEVELOPER، قد يتحسن الأداء قليلاً.';
$string['check_debugmsg_comment_nodeveloper'] = 'إذا تم ضبطه على DEVELOPER، قد يتأثر الأداء قليلاً.';
$string['check_debugmsg_details'] = 'نادراً ما تكون هناك فؤائد من الانتقال إلى مستوى المطور، ما لم يتم طلبه من قبل مطور.<p>بمجرد حصولك على رسالة الخطأ ونسخها ولصقها في موضع ما، يوصى بشدة بإعادة وضع الكشف عن الأخطاء إلى لا شيء. رسائل الكشف عن الأخطاء قد تعطي أدلة يستفيد منها المخترق بشأن إعدادات موقعك وقد تؤثر على الأداء.</p>';
$string['check_enablestats_comment_disable'] = 'قد يتأثر الأداء بمعالجة الإحصائيات. عند تمكينه، ينبغي الحذر عند ضبط إعداداتها.';
$string['check_enablestats_comment_enable'] = 'قد يتأثر الأداء بمعالجة الإحصائيات. ينبغي الحذر عند ضبط إعداداتها.';
$string['check_enablestats_details'] = 'تمكينه سيؤدي إلى معالجة سجلات الوقوعات من قبل مشغل المهام المجدولة لجمع بعض الإحصائيات. إعتماداً على حجم المرور في موقعك، هذا الأمر قد يستغرق وقتاً.<p>خلال هذه العملية، سيتم استهلاك المزيد من موارد المخدم وقد يؤثر على الأداء.</p>';
$string['check_themedesignermode_comment_disable'] = 'عند تمكينه، لن تتم تخبئة الصور والأنماط، مما ينتج عنه انحدار كبير في الأداء.';
$string['check_themedesignermode_comment_enable'] = 'عند تعطيله، ستتم تخبئة الصور والأنماط، مما ينتج عنه تحسن كبير في الأداء.';
$string['check_themedesignermode_details'] = 'هذا عادة ما يكون سبب البطئ في مواقع مودل. <p>في المعدل، قد يستدعي تشغيل نمط التصميم إلى استهلاك ضعف قدرة المعالج المركزي.</p>';
$string['comments'] = 'التعليقات';
$string['disabled'] = 'مُعطل';
$string['edit'] = 'تحرير';
$string['enabled'] = 'مُمَكَّن';
$string['issue'] = 'المشكلة';
$string['morehelp'] = 'المزيد من المساعدة';
$string['performance:view'] = 'معاينة تقرير الأداء';
$string['performancereportdesc'] = 'هذا التقرير يعرض المشاكل التي من شأنها التأثير على الأداء في موقع {$a}';
$string['pluginname'] = 'استعراض الأداء';
$string['privacy:metadata'] = 'إن ملحق استعراض الأداء لا يخزن أي بيانات شخصية.';
$string['value'] = 'القيمة';
