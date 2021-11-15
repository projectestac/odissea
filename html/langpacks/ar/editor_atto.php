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
 * Strings for component 'editor_atto', language 'ar', version '3.11'.
 *
 * @package     editor_atto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'تعذر الاتصال بالمخدم. إذا قمت بتقديم هذه الصفحة الآن، فقد تفقد تغييراتك.';
$string['autosavefrequency'] = 'معدل الحفظ التلقائي';
$string['autosavefrequency_desc'] = 'هذا يمثل عدد الثواني ما بين محاولات الحفظ التلقائي. Atto سيقوم تلقائياً بحفظ النص الذي في المحرر وفقاً لهذا الإعداد، ليكي يكون النص قابلاً للاستعادة عندما يعود نفس المستخدم إلى نفس النموذج.';
$string['autosaves'] = 'معلومات الحفظ التلقائي للمحرر';
$string['autosavesucceeded'] = 'تم حفظ المسودة.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'السطر \'{$a}\' ليس بالتنسيق الصحيح.';
$string['errorgroupisusedtwice'] = 'تم تعريف المجموعة \'{$a}\' مرتين؛ أسماء المجموعات ينبغي أن تكون فريدة.';
$string['errornopluginsorgroupsfound'] = 'تعذر العثور على إضافات أو مجموعات؛ لطفاً، أضف بعض المجموعات والإضافات.';
$string['errorpluginisusedtwice'] = 'تم استعمال الإضافة \'{$a}\' مرتين؛ الإضافات يمكن تعريفها مرة واحدة فقط.';
$string['errorpluginnotfound'] = 'تعذر استعمال الملحق \'{$a}\'؛ لا يبدو أنه منصب.';
$string['errortextrecovery'] = 'للأسف، تعذر استرجاع النسخة المسودة.';
$string['infostatus'] = 'المعلومات';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['pluginname'] = 'محرر Atto HTML';
$string['privacy:metadata:database:atto_autosave'] = 'مسودات محرر النصوص المحفوظة تلقائياً';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'النص الذي تم حفظه';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'وقت تعديل هذا المحتوى';
$string['privacy:metadata:database:atto_autosave:userid'] = 'مُعرَّف المستخدم الذي تم حفظ بياناته';
$string['recover'] = 'استعد';
$string['settings'] = 'إعدادات شريط أدوات Atto';
$string['subplugintype_atto'] = 'ملحق Atto';
$string['subplugintype_atto_plural'] = 'إضافات Atto';
$string['taskautosavecleanup'] = 'حذف مسودات الحفظ التلقائي منتهية الصلاحية';
$string['textrecovered'] = 'تمت الاستعادة التلقائية لهذا النص من نسخة مسودة.';
$string['toolbarconfig'] = 'تهيئة شريط الأدوات';
$string['toolbarconfig_desc'] = 'يمكن تهيئة قائمة الإضافات والترتيب الذي تظهر به هنا. التهيئة تتضمن مجموعات (واحدة لكل سطر) متبوعة بقائمة مرتبة من الإضافات لتلك المجموعة. المجموعة مفصولة عن الإضافات بعلامة المساواة والإضافات مفصولة بعضها عن بعض بفواصل. أسماء المجموعات ينبغي أن تكون فريدة وعليها أن تشير إلى أزرار بوظائف ذات صلة. لا ينبغي تكرار أسماء الأزرار والمجموعات، ويمكن أن تحتوي الأسماء فقط على حروف وأرقام لاتينية.';
$string['warningstatus'] = 'تحذير';
