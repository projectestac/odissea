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
 * Strings for component 'cachestore_mongodb', language 'ar', version '3.11'.
 *
 * @package     cachestore_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'قاعدة البيانات';
$string['database_help'] = 'اسم قاعدة البيانات المزمع الاستفادة منها.';
$string['extendedmode'] = 'استخدم مفاتيح موسعة';
$string['extendedmode_help'] = 'إذا مكّن.. سيتم استعمال مجموعات مفاتيح كاملة عند العمل مع الإضافة. لا يتم استعماله داخلياً بعد ولكن من شأنه السماح لك بالبحث بسهولة في إضافة MongoDB يدوياً والتحري عنه إذا اخترت ذلك. تشغيله سيضيف حملاً صغيراً لذلك ينبغي القيام بذلك عند الحاجة له فقط.';
$string['password'] = 'كلمة المرور';
$string['password_help'] = 'كلمة مرور المستخدم المستعمل للاتصال.';
$string['pleaseupgrademongo'] = 'أنت تستعمل إصداراً قديماً من امتداد PHP Mongo (<1.3). سيتم إسقاط دعم الإصدارات القديمة من هذه الإضافة مستقبلاً. يرجى أخذ الترقية بعين الاعتبار.';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = 'تخزن إضافة مخزن خبء MongoDB؛ البيانات لفترة وجيزة كجزء من وظائف التخزين المؤقت. يتم تخزين هذه البيانات على مخدم MongoDB حيث تتم إزالة البيانات بانتظام.';
$string['privacy:metadata:mongodb:data'] = 'البيانات المختلفة المخزنة في الخبء';
$string['replicaset'] = 'مجموعة النسخ المماثلة';
$string['replicaset_help'] = 'اسم مجموعة النسخ المماثلة للاتصال. إذا تم إعطاء هذا فسيتم تحديد الرئيسي باستخدام أمر قاعدة البيانات ismaster على الفروع، لذلك قد ينتهي السائق من الاتصال بالخادم إن لم يكن مدرج في القائمة.';
$string['server'] = 'الخادم';
$string['server_help'] = 'هذه هي سلسلة الاتصال بالمخدم الذي تريد استعماله. يمكن تحديد عدة مخدمات عبر فصلها عن بعض بفارزة.';
$string['testserver'] = 'خادم الاختبار';
$string['testserver_desc'] = 'هذه هي سلسلة الاتصال بمخدم الاختبار الذي تريد استعماله. إذا تم تحديد مخدم إختبار، عندها يمكن فحص أداء قاعدة بيانات Mongo باستعمال صفحة خبء الأداء في كتلة الإدارة.
مثال على ذلك: mongodb://127.0.0.1:27017';
$string['username'] = 'اسم  المستخدم';
$string['username_help'] = 'اسم المستخدم لاستخدامه عند إجراء الاتصال.';
$string['usesafe'] = 'استخدام آمن';
$string['usesafe_help'] = 'عند تمكينه، سيتم استعمال خيار الاستعمال الآمن خلال عمليات الإدراج، الإحضار، والإزالة. إذا كنت قد حددتَ مجموعة النسخ المتماثلة فسيتم فرض ذلك على أيّ حال.';
$string['usesafevalue'] = 'استعمل القيمة الآمنة';
$string['usesafevalue_help'] = 'يمكنك الاختيار لتوفير قيمة محددة للاستخدام الآمن. هذا يحدد عدد الخوادم التي يجب أن تكتمل عملياتها قبل أن تعتبر قد تم الانتهاء منها.';
