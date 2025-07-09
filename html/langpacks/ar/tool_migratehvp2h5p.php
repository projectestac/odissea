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
 * Strings for component 'tool_migratehvp2h5p', language 'ar', version '4.4'.
 *
 * @package     tool_migratehvp2h5p
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempted'] = 'المستخدمون المحاولون';
$string['cannot_migrate'] = 'لا يمكن ترحيل النشاط';
$string['contenttype'] = 'نوع المحتوى';
$string['copy2cb'] = 'هل تنبغي إضافة تلك المحتويات إلى بنك المحتوى؟';
$string['copy2cb_no'] = 'لا، ينبغي فقط إنشاؤها في النشاط';
$string['copy2cb_yeswithlink'] = 'نعم، وينبغي استعمال رابط إلى تلك الملفات في النشاط';
$string['copy2cb_yeswithoutlink'] = 'نعم، ولكن سيتم استعمال نسخة منها في النشاط (التغييرات في بنك المحتوى لن تنعكس على النشاط)';
$string['error_contenttypeh5p_disabled'] = 'نوع بنك المحتوى H5P معطل. ينبغي تمكينه لترحيل النشاطات من mod_hvp
وإضافتها إلى بنك المحتوى أيضًا. يمكنك تمكين نوع المحتوى من \'إدارة الموقع | الملاحق | بنك المحتوى | إدارة أنواع المحتوى\' أو إعادة تشغيل أداة الترحيل ثم اختيار \'لا، ينبغي فقط إنشاؤها في النشاط\'. (أو استعمال \'copy2cb=0\' إذا كنت تنفذ ذلك من خلال سطر الأوامر) لتتجنب إنشاء الملفات في بنك المحتوى.';
$string['error_modh5pactivity_disabled'] = 'نشاط H5P معطل. ينبغي تمكينه لترحيل النشاطات من mod_hvp';
$string['event_hvp_migrated'] = 'mod_hvp تم ترحيله mod_h5pactivity';
$string['graded'] = 'المستخدمون المقيمون';
$string['hvpactivities'] = 'نشاطات mod_hvp التي قيد الانتظار';
$string['id'] = 'المُعرَّف';
$string['keeporiginal'] = 'حدد ما تريد القيام به مع النشاط الأصلي بمجرد ترحيله';
$string['keeporiginal_delete'] = 'حذف النشاط الأصلي';
$string['keeporiginal_hide'] = 'إخفاء النشاط الأصلي';
$string['keeporiginal_nothing'] = 'أترك النشاط الأصلي كما هو';
$string['migrate'] = 'ترحيل';
$string['migrate_fail'] = 'وقع خطأ عند ترحيل نشاط  H5P ذي المُعرَّف {$a}';
$string['migrate_gradesoverridden'] = 'النشاط الأصلي mod_hvp "{$a->name}"، ذي المُعرَّف {$a->id}، تم ترحيله بنجاح. مع ذلك، لديه بعض التجاوزات في معلومات التقييم مثل الإفادة والتي لم يتم ترحيلها لأن النشاط الأصلي مهيأ مع درجة قصوى خاطئة (ينبغي أن تكون أكبر من 0 من أجل ترحيلها إلى سجل التقديرات).';
$string['migrate_gradesoverridden_notdelete'] = 'النشاط الأصلي mod_hvp "{$a->name}"، ذي المُعرَّف {$a->id}، تم ترحيله بنجاح. مع ذلك، لديه بعض التجاوزات في معلومات التقييم مثل الإفادة والتي لم يتم ترحيلها لأن النشاط الأصلي مهيأ مع درجة قصوى خاطئة (ينبغي أن تكون أكبر من 0 من أجل ترحيلها إلى سجل التقديرات). لقد تم إخفاء النشاط الأصلي بدلاً من إزالته.';
$string['migrate_success'] = 'تم ترحيل نشاط hvp ذي المُعرَّف {$a} بنجاح';
$string['nohvpactivities'] = 'ليست هناك نشاطات mod_hvp لترحيلها إلى mod_h5pactivity.';
$string['pluginname'] = 'ترحيل المحتوى من mod_hvp إلى mod_h5pactivity';
$string['privacy:metadata'] = 'إن ملحق ترحيل المحتوى من صيغة hvp إلى صيغة h5p لا يخزن أي بيانات شخصية.';
$string['savedstate'] = 'الحالة المحفوظة';
$string['selecthvpactivity'] = 'إختر النشاط {$a} mod_hvp';
$string['settings'] = 'إعدادات الترحيل';
