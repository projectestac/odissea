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
 * Strings for component 'search_solr', language 'ar', version '4.1'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'مخدم Solr غير متاح أو إن الفهرس المحدد غير موجود';
$string['connectionsettings'] = 'إعدادات الاتصال';
$string['errorcreatingschema'] = 'خطأ عند إنشاء مخطط Solr: {$a}';
$string['errorsolr'] = 'محرك بحث Solr أبلغ بوجود خطأ: {$a}';
$string['errorvalidatingschema'] = 'خطأ عند التحقق من مخطط Solr: الحقل {$a->fieldname} غير موجود. لطفاً، <a href="{$a->setupurl}">إتبع هذا الرابط</a> لإعداد الحقول المطلوبة.';
$string['extensionerror'] = 'إن امتداد Solr PHP العائد لـ Apache غير منصب. لطفاً، تحقق من التوثيقات.';
$string['fileindexing'] = 'تمكين فهرسة الملفات';
$string['fileindexing_help'] = 'إن كان تنصيب Solr يدعمها، فهذه الميزة تسمح لمودل بإرسال الملفات للفهرسة.<br/>
ستكون بحاجة إلى إعادة فهرسة كل محتويات الموقع بعد تمكين هذا الخيار لتتم إضافة كل الملفات.';
$string['fileindexsettings'] = 'إعدادات فهرسة الملفات';
$string['maxindexfilekb'] = 'أقصى حجم ملف لتتم فهرسته (كيلو بايت)';
$string['maxindexfilekb_help'] = 'الملفات الأكبر من هذا المقدار بالكيلو بايت لم يتم تضمينها في فهرسة البحث. إذا تم جعله صفراً، ستتم فهرسة الملفات بأي حجم.';
$string['minimumsolr4'] = 'Solr 4.0 هو الإصدار الأدنى المطلوب لمودل';
$string['missingconfig'] = 'لم تتم تهيئة مخدم Solr العائد لـ Apache بعد في مودل.';
$string['multivaluedfield'] = 'أعاد الحقل "{$a}" مصفوفة بدلاً من مقياس. لطفاً، إحذف الفهرس الحالي، أنشئ واحداً جديداً، ثم قم بتشغيل setup_schema.php قبل فهرسة البيانات في Solr.';
$string['nodatafromserver'] = 'لا بيانات من المخدم';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'إن هذه الإضافة ترسل البيانات إلى محرك بحث Solr مرتبط. هي لا تخزن البيانات محلياً';
$string['privacy:metadata:data'] = 'البيانات الشخصية المُمرَّرة عبر نظام البحث الفرعي';
$string['schemafieldautocreated'] = 'الحقل "{$a}" موجود سلفاً في مخطط Solr. ربما نسيت تشغيل هذا النص البرمجي قبل فهرسة البيانات وتم إنشاء الحقول تلقائياً من قبل Solr. لطفاً، قم بحذف الفهرس الحالي، أنشئ واحداً جديداً، ثم قم بتشغيل setup_schema.php قبل فهرسة البيانات في Solr.';
$string['schemasetupfromsolr5'] = 'إن إصدار مخدم Solr عندك هو أقل من 5.0. يمكن لهذا النص البرمجي فقط إعداد مخططك إذا كان إصدار Solr 5.0 أو أعلى. ينبغي عليك إعداد الحقول يدوياً في مخططك وفقاً لـ \\search_solr\\document::get_default_fields_definition().';
$string['searchinfo'] = 'استعلامات البحث';
$string['searchinfo_help'] = 'يمكن تحديد الحقل المطلوب البحث فيه عبر اسباق استعلام البحث بـ: \'title:\'، \'content:\'، \'name:\'، أو \'intro:\'. على سبيل المثال، البحث عن \'title:news\' سيعطي نتائج فيها كلمة \'news\' في العنوان.

المعاملات المنطقية (\'AND\'، \'OR\'، \'NOT\') يمكن استعمالها لتضمين أو استبعاد الكلمات المفتاحية.

الرموز البديلة (\'*\' أو \'?\' ) يمكن استعمالها للدلالة على الحروف في استعلام البحث.';
$string['setupok'] = 'المخطط جاهز للاستعمال.';
$string['solrauthpassword'] = 'كلمة مرور مصادقة HTTP';
$string['solrauthuser'] = 'اسم المستخدم لمصادقة HTTP';
$string['solrhttpconnectionport'] = 'المنفذ';
$string['solrhttpconnectiontimeout'] = 'وقت الصلاحية';
$string['solrhttpconnectiontimeout_desc'] = 'وقت صلاحية اتصال HTTP هو أقصى وقت بالثواني يسمح به لعملية نقل البيانات عبر بروتوكول HTTP.';
$string['solrindexname'] = 'اسم الفهرس';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'محرك Solr ليس هو محرك البحث الذي تمت تهيئته';
$string['solrsecuremode'] = 'النمط الآمن';
$string['solrserverhostname'] = 'اسم المضيف';
$string['solrserverhostname_desc'] = 'اسم المجال لمخدم Solr.';
$string['solrsetting'] = 'إعدادات Solr';
$string['solrsslcainfo'] = 'اسم شهادات SSL CA';
$string['solrsslcainfo_desc'] = 'اسم الملف المحتوي على شهادة أو أكثر لـ CA ليتم التحقق بها من النظير';
$string['solrsslcapath'] = 'مسار شهادات SSL CA';
$string['solrsslcapath_desc'] = 'مسار المجلد المحتوي على شهادات متعددة لـ CA ليتم التحقق بها من النظير';
$string['solrsslcert'] = 'شهادة SSL';
$string['solrsslcert_desc'] = 'اسم الملف لشهادة خاصة بتنسيق PEM';
$string['solrsslkey'] = 'مفتاح SSL';
$string['solrsslkey_desc'] = 'اسم الملف لمفتاح خاص بتنسيق PEM';
$string['solrsslkeypassword'] = 'كلمة مرور مفتاح SSL';
$string['solrsslkeypassword_desc'] = 'كلمة المرور لملف مفتاح خاص بتنسيق PEM';
