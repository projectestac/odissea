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
 * Strings for component 'auth_saml', language 'ar', version '3.11'.
 *
 * @package     auth_saml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_saml_coursemapping_head'] = 'يمكن لـ IdP استعمال الاسم المختصر/المُعرَّف الخاص به للمقررات الدراسية. حدد في هذا المقطع التقابل ما بين مقررات IdP ومقررات مودل. يتقبل قيم متعددة مفصولة بفوارز.';
$string['auth_saml_db_reset_button'] = 'إعادة تعيين القيم إلى إعدادات المصنع';
$string['auth_saml_db_reset_error'] = 'وع خطأ عند إعادة ضبط قيم ملحق saml';
$string['auth_saml_error_attribute_course_mapping'] = 'خطأ في أسماء السمات (الفهرس) لتعيين جدول المقرر الدراسي. تحقق من صياغة externalcoursemappingsql';
$string['auth_saml_error_attribute_role_mapping'] = 'خطأ في أسماء السمات (الفهرس) لتعيين جدول الأدوار. تحقق من صياغة externalrolemappingsql';
$string['auth_saml_error_authentication_process'] = 'خطأ في عملية المصادقة {\\$a}';
$string['auth_saml_initialize_roles'] = 'تهيئة الدور';
$string['auth_saml_loginusing'] = 'سجل دخولك هنا مستعملاً اسم الدخول وكلمة المرور الخاصين بك';
$string['auth_saml_moodle_course_id_field_warning'] = 'قبل إضافة أي تعيينات إلى المساق، حدد حقل المُعرَّف (الاسم المختصر للمساق أو الرقم المُعرَّف) الذي سيتم استعماله للتعرف على المساق. بمجرد اتخاذ القرار، إحفظ النموذج ثم بعدها سيظهر الاسم المختصر أو الرقم التعريفي عند تحديد مُعرَّف مساق مودل. ضع في اعتبارك أن numberid افتراضيًا غير مطلوب في مودل ولكن يجب عليك تقديمه إذا كان هذا هو خيارك المحدد (أو سيظهر خيار فارغ لهذا). إذا قمت بتبديل قيمة الحقل المستعمل لتعريف المساق بعد توفير بعض التعيينات، فسيتم تجاهل تلك التعيينات (ولكنها تبقى مخزونة في قاعدة البيانات)';
$string['auth_saml_rolemapping_head'] = 'يمكن لـ IdP استعمال الاسم المختصر للأدوار الخاص به. حدد في هذا المقطع التقابل ما بين أدوار IdP وأدوار مودل. يتقبل قيم متعددة مفصولة بفوارز.';
$string['auth_saml_supportcourses'] = 'مقررات دعم SAML';
$string['pluginname'] = 'مصادقة SAML';
