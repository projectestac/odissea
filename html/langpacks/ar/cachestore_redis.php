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
 * Strings for component 'cachestore_redis', language 'ar', version '3.11'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = 'بدون ضغط.';
$string['compressor_php_gzip'] = 'استعمل ضغط gzip';
$string['compressor_php_zstd'] = 'استعمل ضغط Zstandard';
$string['password'] = 'كلمة المرور';
$string['password_help'] = 'هذا يعين كلمة مرور مخدم Redis.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'بادئة المفتاح';
$string['prefix_help'] = 'يتم استخدام هذه البادئة لجميع أسماء المفاتيح على خادم Redis.
* إذا كان لديك مثيل Moodle واحد فقط يستخدم هذا الخادم ، يمكنك ترك هذه القيمة الافتراضية.
* بسبب قيود طول المفتاح ، يُسمح بحد أقصى 5 أحرف.';
$string['prefixinvalid'] = 'بادئة غير صالحة. يمكنك فقط استخدام az AZ 0-9-_.';
$string['privacy:metadata:redis'] = 'يقوم ملحق مخزن خبء Redis بتخزين البيانات لفترة وجيزة كجزء من وظائف التخبئة الخاصة به. يتم تخزين هذه البيانات في مخدم Redis حيث تتم إزالتها بانتظام.';
$string['privacy:metadata:redis:data'] = 'البيانات المختلفة المخزنة في الخبء';
$string['serializer_igbinary'] = 'المسلسل igbinary.';
$string['serializer_php'] = 'التسلسل الافتراضي PHP .';
$string['server'] = 'الخادم';
$string['server_help'] = 'هذا يعين اسم المضيف أو عنوان IP لخادم Redis لاستخدامه.';
$string['test_password'] = 'إختبار كلمة مرور المخدم';
$string['test_password_desc'] = 'اختبار كلمة مرور المخدم Redis.';
$string['test_serializer'] = 'مسلسل';
$string['test_serializer_desc'] = 'Serializer لاستخدامه للاختبار.';
$string['test_server'] = 'خادم الاختبار';
$string['test_server_desc'] = 'خادم Redis لاستخدامه للاختبار.';
$string['usecompressor'] = 'استعمل الضغط';
$string['usecompressor_help'] = 'حدد برنامج الضغط المستعمل بعد التحويل إلى سلسلة. هذا الأمر يتم على مستوى واجهة برمجة التطبيق لمخبأ مودل، وليس على مستوى تقليعة php';
$string['useserializer'] = 'استخدام التسلسل';
$string['useserializer_help'] = 'يحدد المُسلسل الذي ينبغي استعماله للتسلسل.
المسَلسِلون الصالحون هم Redis::SERIALIZER_PHP أو Redis::SERIALIZER_IGBINARY.
يتم دعم الأخير فقط عند تهيئة phpredis مع خيار --enable-redis-igbinary وتحميل الامتداد igbinary.';
