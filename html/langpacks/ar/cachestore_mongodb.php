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
 * Strings for component 'cachestore_mongodb', language 'ar', version '3.8'.
 *
 * @package     cachestore_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'قاعدة البيانات';
$string['database_help'] = 'اسم قاعدة البيانات للاستفادة منه.';
$string['extendedmode'] = 'استخدم مفاتيح موسعة';
$string['extendedmode_help'] = 'إذا مكّن .. مفتاح مجموعات كاملة ستستخدم عند العمل مع المكون الإضافي . لا يتم استخدام هذا داخليا بعد و لكن من شأنها أن تسمح لك بالبحث بسهولة و التحقيق في المكون الإضافي  MongoDB يدويا إذا اخترت ذلك.
سوف تحول هذا على إضافة أحمال صغيرة لذلك ينبغي أن يتم إلا إذا كنت بحاجة إليها.';
$string['password'] = 'كلمة المرور';
$string['password_help'] = 'كلمة مرور للمستخدم المتصل.';
$string['pleaseupgrademongo'] = 'أنت تستخدم إصدارًا قديمًا من امتداد PHP Mongo (<1.3). سيتم إسقاط دعم الإصدارات القديمة من ملحق Mongo في المستقبل.
يرجى النظر في الترقية.';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = 'يخزن البرنامج المساعد MongoDB cachestore البيانات لفترة وجيزة كجزء من وظائف التخزين المؤقت. يتم تخزين هذه البيانات على خادم MongoDB حيث تتم إزالة البيانات بانتظام.';
$string['privacy:metadata:mongodb:data'] = 'البيانات المختلفة المخزنة في ذاكرة التخزين المؤقت';
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
$string['usesafe_help'] = 'إذا مكّن سيتم استخدام خيار الاستخدام الآمن خلال عمليات الإدراج، الحصول على ، و الإزالة. و إذا كنت قد حددت مجموعة النسخ المتماثلة فهذا إجبار على أيّ حال.';
$string['usesafevalue'] = 'استخدام القيم الآمنة';
$string['usesafevalue_help'] = 'يمكنك الاختيار لتوفير قيمة محددة للاستخدام الآمن. هذا يحدد عدد الخوادم التي يجب أن تكتمل عملياتها قبل أن تعتبر قد تم الانتهاء منها.';
