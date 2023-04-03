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
 * Strings for component 'block_case_repository', language 'ar', version '3.11'.
 *
 * @package     block_case_repository
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_module'] = 'وحدة النشاط';
$string['apply_metadata_presets'] = 'تطبيق القيم الافتراضية للبيانات الوصفية';
$string['apply_presets'] = 'عند إملاء البيانات الوصفية للنشاط، كل قيم البيانات الوصفية الحالية لكل نشاطات التعلم في هذا المقرر ستتم إعادة تعيينها إلى قيمها الافتراضية.';
$string['apply_presets_question'] = 'هل ينبغي إملاء البيانات الوصفية للنشاط؟';
$string['capability_no_store'] = 'لن يتم إنشاء حالات جديدة لما أدخلته في تكيف المتعلم لأن حساب المستخدم الخاص بك ليس بدور متعلم.';
$string['case_repository:apply_metadata_presets'] = 'ضبط القيمة المُعرَّفة مسبقًا للبيانات الوصفية';
$string['config_description_adjust'] = 'باستعمال هذه القواعد، يمكنك تكوين إعدادات الضبط لتكييف المتعلم. يتم تطبيق كل القواعد واحدة تلو الأخرى.<br/> تتكون القواعد من شرط وإجراء. عندما يكون الشرط صحيحًا ،يتم تنفيذ إجراء القاعدة. تستند الشروط إلى حسابات المقارنة بين قيم السمات وتتكون من نوع الشرط، الحد عند افتراض أن الشرط صحيح، والسمة المرجعية التي تتم مقارنة قيمة السمة الحالية بها. تتكون الإجراءات من نوع الإجراء الذي سيتم تنفيذه و(في حالة تعديل المعامل) من قوة التعديل الذي يتعين إجراؤه.';
$string['config_description_case_count'] = 'هذا الرقم الموجب يحدد أقصى عدد من الحالات المراد خزنها في مستودع الحالات (الافتراضي 1000) عند بلوغ هذا الحد يتم استبدال الحالات غير المهمة للحصول على مساحة خالية لخزن الحالات الجديدة.<br/> كن على حذر عند تغيير هذه القيمة: إذا تم خزن حالات كثيرة جدًا في المستودع، فستستغرق حسابات تكيُّف المتعلم وقتًا طويلاً نظرًا للحاجة إلى استرجاع مقدار كبير من الحالات للوصول إلى الحل. إذا تم خزن عدد قليل من الحالات في المستودع، فقد لا تكون جودة تكيُّف المتعلم بالمقدار المطلوب لأنه لن تكون هناك مساحة خالية لخزن الحلول المناسبة.';
$string['config_description_defaults'] = 'إفتراضيًا، كل قيم البيانات الوصفية للنشاط تكون فارغة لكل المساقات/النشاطات.<br/>يمكنك هنا تعريف القيم الافتراضية لكل البيانات الوصفية للنشاطات ولكل وحدة. عند إنشاء نشاط جديد، ستكون قيم البيانات الوصفية هذه بمثالة قوالب لها مع احتفاظ كل عينة منها بقابلية التعديل عليها بشكل مستقل لاحقًا.';
$string['config_description_replace'] = 'هذه القيمة (ما بين 0.0 و 1.0، الافتراضي 0.9) تحدد متى يمكن دمج حالتين متقاربتين في حالة واحدة. قيمة 0.95 تعني على سبيل المثال، أن حالتين بينهما تشابه بنسبة 95 بالمئة (أو أكثر) يمكن دمجهما معًا لتوفير مساحة الخزن في مستودع الحالات.';
$string['config_description_yellow_markup'] = 'هذه القيمة (ما بين 0.0 و 1.0، الافتراضي 0.6) تحدد متى يتم تقديم النشاطات البديلة (ذات درجات المَعين الأصفر) إلى المتعلمين.<br/>قيمة 0.6 تعني على سبيل المثال، بأن الحالة الحالية ينبغي أن يكون لها تشابه بنسبة 60 بالمئة (أو أكثر) مع مرجع الحالة المكتشفة ليتم تقديمه بمثابة نشاط بديل.';
$string['config_difftype_greater_than'] = 'القيمة الأكبر من';
$string['config_difftype_lesser_than'] = 'القيمة الأقل من';
$string['config_legend_defaults'] = 'إفتراضيات البيانات الوصفية للنشاط';
$string['config_windowheader_preset'] = 'التحضيرات المسبقة للبيانات الوصفية للنشاط';
$string['configure_metadata_presets'] = 'تهيئة القيم الافتراضية للبيانات الوصفية';
$string['label_source_activity'] = 'النشاط الرئيسي';
$string['legend_dependent_on_add'] = 'إضافة نشاط رئيسي جديد';
$string['markup2_bad'] = 'المحتوى التعليمي هذا تنبغي معالجته في حالات قليلة فقط';
$string['markup2_good'] = 'المحتوى التعليمي هذا تنبغي معالجته لاحقاً';
$string['markup2_medium'] = 'المحتوى التعليمي هذا يمكن معالجته ايضاً';
$string['no_dependent_on'] = 'لم يتم العثور على نشاطات رئيسية إعتماداً على نشاط التعلم هذا.';
$string['panel_dependent_on'] = 'النشاطات الرئيسية ذات الصلة';
$string['pluginname'] = 'تكيُّف المتعلم';
$string['relation_querverweis'] = 'مرتبط مع';
$string['state_complete'] = 'مكتمل';
$string['time_visited'] = 'آخر دخول';
$string['usermeta_empty_headline'] = 'لم يتم ضبط تفضيلاتك الشخصية بعد';
$string['usermeta_update'] = '<p>تفضيلاتك الشخصية ينبغي تحديثها للمساعدة في جعل هيكلية هذا المقرر الدراسي في الوضع المثالي.</p>';
$string['usermeta_update_headline'] = 'تفضيلاتك الشخصية قديمة';
$string['value_unknown'] = 'لا تتوفر أي قيمة';
