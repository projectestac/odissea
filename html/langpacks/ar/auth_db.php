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
 * Strings for component 'auth_db', language 'ar', version '3.11'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'تعذر الاتصال بقاعدة البيانات الخارجية.';
$string['auth_dbcannotreadtable'] = 'تعذرت قراءة الجدول الخارجي.';
$string['auth_dbcantconnect'] = 'تعذر الاتصال بقاعدة بيانات المصادقة المحددة...';
$string['auth_dbchangepasswordurl_key'] = 'رابط تغيير كلمة المرور';
$string['auth_dbcolumnlist'] = 'الجدول الخارجي يحتوي على الأعمدة الآتية:<br />{$a}';
$string['auth_dbdebugauthdb'] = 'معالج أخطاء ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'التحري عن أخطاء اتصال ADOdb بقاعدة البيانات الخارجية - استعمله عند ظهور صفحة فارغة عند تسجيل الدخول. غير مناسب للمواقع الإنتاجية.';
$string['auth_dbdeleteuser'] = 'تم حذف المستخدم {$a->name} المُعرَّف {$a->id}';
$string['auth_dbdeleteusererror'] = 'خطأ ما عند حذف المستخدم {$a}';
$string['auth_dbdescription'] = 'يستعمل هذا الأسلوب جدول قاعدة بيانات خارجية للتحقق من صحة اسم المستخدم وكلمة المرور. وفي حالة الحسابات الجديدة فقد يتم نسخ المعلومات من الحقول الأخرى أيضاً ونقلها إلى مودل.';
$string['auth_dbextencoding'] = 'ترميز قاعدة البيانات الخارجية';
$string['auth_dbextencodinghelp'] = 'الترميز المستعمل في قاعدة البيانات الخارجية';
$string['auth_dbextrafields'] = 'هذه الحقول إختيارية، ويمكنك ملء بعض حقول المستخدم في مودل مسبقاً بالمعلومات من <b>حقول البيانات الخارجية</b> التي تحددها هنا. <p> إذا تركت هذه الأماكن فارغة فسيتم استعمال القيم الافتراضية.</p><p>في كل الأحوال، سيتمكن المستخدم من تعديل كل تلك الحقول بعد الدخول.</p>';
$string['auth_dbfieldpass'] = 'اسم الحقل المشتمل على كلمات المرور';
$string['auth_dbfieldpass_key'] = 'حقل كلمة المرور';
$string['auth_dbfielduser'] = 'اسم الحقل المشتمل على أسماء المستخدمين. هذا الحقل ينبغي أن يكون من نوع بيانات varchar.';
$string['auth_dbfielduser_key'] = 'حقل اسم المستخدم';
$string['auth_dbhost'] = 'الحاسوب المضيف لمخدم قاعدة البيانات. استعمل إدخال DSN للنظام عند استعمال ODBC. استعمل PDO DSN عند استعمال PDO.';
$string['auth_dbhost_key'] = 'مستضيف';
$string['auth_dbinsertuser'] = 'تم إدراج المستخدم {$a->name} المُعرَّف {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'وقع خطأ عند إدراج المستخدم {$a->username} - تم سلفاً إنشاء مستخدم باسم الدخول هذا عبر الملحق \'{$a->auth}\'.';
$string['auth_dbinsertusererror'] = 'وقع خطأ عند إدراج المستخدم {$a}';
$string['auth_dbname'] = 'اسم قاعدة البيانات ذاتها. أتركه فارغاً عند استعمال ODBC DSN. أتركه فارغاً عندما يكون PDO DSN محتوياً سلفاً على اسم قاعدة البيانات.';
$string['auth_dbname_key'] = 'اسم قاعدة البيانات';
$string['auth_dbnoexttable'] = 'لم يتم تحديد الجدول الخارجي.';
$string['auth_dbnouserfield'] = 'لم يتم تحديد حقل المستخدم الخارجي.';
$string['auth_dbpass'] = 'كلمة المرور المطابقة لاسم المستخدم المذكور';
$string['auth_dbpass_key'] = 'كلمة المرور';
$string['auth_dbpasstype'] = '<p>حدد التنسيق المستعمل في حقل كلمة المرور.</p> <p>استعمل \'داخلي\' إذا إردت من قاعدة البيانات الخارجية إدارة اسماء المستخدمين وعناوين بريدهم، ولكن إدارة كلمات المرور يقوم بها مودل. إذا استعملت \'داخلي\'، يجب عليك تقديم حقل مشغول بعناوين البريد الالكتروني في قاعدة البيانات الخارجية، وينبغي عليك تمكين المهمة المجدولة \\auth_db\\task\\sync_users. سيرسل مودل رسالة الكترونية إلى المستخدمين الجدد فيها كلمة مرور مؤقتة.</p>';
$string['auth_dbpasstype_key'] = 'تنسيق كلمة المرور';
$string['auth_dbreviveduser'] = 'تمت إعادة المستخدم {$a->name} المُعرَّف {$a->id}';
$string['auth_dbrevivedusererror'] = 'وقع خطأ عند إعادة المستخدم {$a}';
$string['auth_dbsaltedcrypt'] = 'دمج نص التشفير باتجاه واحد';
$string['auth_dbsetupsql'] = 'أمر إعداد SQL';
$string['auth_dbsetupsqlhelp'] = 'أمر SQL لتنصيب قاعدة البيانات بشكل خاص، غالباً ما يستعمل لتنصيب ترميز الاتصال - مثال عن MySQL و PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'تم تعليق المستخدم {$a->name} المُعرَّف {$a->id}';
$string['auth_dbsuspendusererror'] = 'خطأ عند تعليق المستخدم: {$a}';
$string['auth_dbsybasequoting'] = 'استعمل اقتباسات sybase';
$string['auth_dbsybasequotinghelp'] = 'نمط Sybase لاستعادة علامة الاقتباس المفردة في النص المرمز - مطلوب من أجل Oracle، MS SQL وبعض قواعد البيانات الأخرى. لا تستعملها مع MySQL!';
$string['auth_dbsyncuserstask'] = 'مزامنة مهمة المستخدمين';
$string['auth_dbtable'] = 'اسم الجدول في قاعدة البيانات';
$string['auth_dbtable_key'] = 'جدول';
$string['auth_dbtableempty'] = 'الجدول الخارجي فارغ.';
$string['auth_dbtype'] = 'نوع قاعدة البيانات (أنظر التوثيقات <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - طبقة تجريد قاعدة البيانات لـ PHP</a> للمزيد من التفاصيل).';
$string['auth_dbtype_key'] = 'قاعدة البيانات';
$string['auth_dbupdateerror'] = 'وقع خطأ عند تحديث قاعدة البيانات الخارجية.';
$string['auth_dbupdateusers'] = 'تحديث المستخدمين';
$string['auth_dbupdateusers_description'] = 'فضلاً عن إدراج مستخدمين جدد، تحديث الموجودين منهم.';
$string['auth_dbupdatinguser'] = 'يجري تحديث المستخدم {$a->name} المُعرَّف {$a->id}';
$string['auth_dbuser'] = 'اسم المستخدم مع حق الدخول على قاعدة البيانات للقراءة فقط';
$string['auth_dbuser_key'] = 'مستخدم قاعدة البيانات';
$string['auth_dbuserstoadd'] = 'تم أضافة بيانات المستخدم:{$a}';
$string['auth_dbuserstoremove'] = 'تم إزالة بيانات المستخدم:{$a}';
$string['pluginname'] = 'قاعدة البيانات الخارجية';
$string['privacy:metadata'] = 'إن ملحق مصادقة قاعدة البيانات الخارجية لا يخزن أي بيانات شخصية.';
