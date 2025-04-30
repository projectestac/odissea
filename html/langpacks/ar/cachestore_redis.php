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
 * Strings for component 'cachestore_redis', language 'ar', version '4.4'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'مسار ملف تفويض الشهادة';
$string['ca_file_help'] = 'موقع ملف تفويض الشهادة في نظام الملفات المحلي';
$string['clustermode'] = 'وضعية العناقيد';
$string['clustermode_help'] = 'تمكين وضعية عناقيد Redis سيؤدي إلى تشغيل وظيفة العناقيد، مما يسمح لمخدمك بالتجاوب مع مخدمات متعددة للتعامل مع طلبات متعددة في وقت واحد.';
$string['clustermodeunavailable'] = 'عناقيد Redis غير متاحة حايًا. يرجى التأكد من أن الإمتداد PHP Redis يدعم وظيفة عناقيد Redis.';
$string['compressor_none'] = 'بدون ضغط.';
$string['compressor_php_gzip'] = 'استعمل ضغط gzip';
$string['compressor_php_zstd'] = 'استعمل ضغط Zstandard';
$string['connectiontimeout'] = 'وقت محاولة الاتصال';
$string['connectiontimeout_help'] = 'هذا يضبط فترة محاولة الاتصال مع مخدم Redis.';
$string['encrypt_connection'] = 'استعمل تشفير TLS.';
$string['encrypt_connection_help'] = 'استعمال TLS للاتصال مع Redis. لا تستعمل \'tls://\' في اسم المضيف لـ Redis، استعمل هذا الخيار بدلاً منه.';
$string['password'] = 'كلمة المرور';
$string['password_help'] = 'هذا يعين كلمة مرور مخدم Redis.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'بادئة المفتاح';
$string['prefix_help'] = 'هذه البادئة مستعملة لكل أسماء المفاتيح في مخدم Redis.
* إذا كان لديك تنصيب واحد فقط من مودل في هذا المخدم، يمكنك ترك هذه القيمة الافتراضية.
* بسبب قيود طول المفتاح، يُسمح بخمسة أحرف كحد أقصى.';
$string['prefixinvalid'] = 'بادئة غير صالحة. يمكنك فقط استخدام az AZ 0-9-_.';
$string['privacy:metadata:redis'] = 'تقوم إضافة مخزن خبء Redis بتخزين البيانات لفترة وجيزة كجزء من وظائف التخبئة الخاصة به. يتم تخزين هذه البيانات في مخدم Redis حيث تتم إزالتها بانتظام.';
$string['privacy:metadata:redis:data'] = 'البيانات المختلفة المخزنة في الخبء';
$string['serializer_igbinary'] = 'المسلسل Igbinary.';
$string['serializer_php'] = 'مسلسِل PHP الافتراضي';
$string['server'] = 'الخادم/الخوادم';
$string['server_help'] = 'مخدم Redis المزمع استعماله للاختبار.

بعض الأمثلة:

* testredis.abc.com - للاتصال مع مخدم Redis باستعمال اسم المضيف (المنفذ 6379 إفتراضيًا).
* testredis.abc.com:1234 - للاتصال مع مخدم Redis باستعمال اسم المضيف مع منفذ معين.
* 1.2.3.4 - للاتصال مع مخدم Redis باستعمال عنوان IP (المنفذ 6379 إفتراضيًا).
* 1.2.3.4:1234 - للاتصال مع مخدم Redis باستعمال عنوان IP مع منفذ معين.
* unix:///var/redis.sock - للاتصال مع مخدم Redis باستعمال مقبس يونكس.
* /var/redis.sock - للاتصال مع مخدم Redis باستعمال مقبس يونكس (صيغة بديلة).

إذا تم تمكين وضع العناقيد، حدد المخدمات مفصولاً بينها بسطر جديد، على سبيل المثال:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

لمزيد من المعلومات، أنظر <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">قبول اتصالات العملاء</a> و <a href="https://redis.io/resources/clients/#php" target="_new">عملاء Redis PHP</a> لمزيد من المعلومات.';
$string['task_ttl'] = 'تفريغ الذاكرة المستعملة من قبل المُدخلات منتهية الصلاحية في مخبوءات Redis';
$string['test_clustermode'] = 'وضعية العناقيد';
$string['test_clustermode_desc'] = 'تمكين الاختبار في وضعية عناقيد Redis.';
$string['test_password'] = 'إختبار كلمة مرور المخدم';
$string['test_password_desc'] = 'اختبار كلمة مرور المخدم Redis.';
$string['test_serializer'] = 'مسلسل';
$string['test_serializer_desc'] = 'Serializer لاستخدامه للاختبار.';
$string['test_server'] = 'خادم الاختبار';
$string['test_server_desc'] = 'مخدم Redis المزمع استعماله للاختبار.

بعض الأمثلة:

* testredis.abc.com - للاتصال مع مخدم Redis باستعمال اسم المضيف (المنفذ 6379 إفتراضيًا).
* testredis.abc.com:1234 - للاتصال مع مخدم Redis باستعمال اسم المضيف مع منفذ معين.
* 1.2.3.4 - للاتصال مع مخدم Redis باستعمال عنوان IP (المنفذ 6379 إفتراضيًا).
* 1.2.3.4:1234 - للاتصال مع مخدم Redis باستعمال عنوان IP مع منفذ معين.
* unix:///var/redis.sock - للاتصال مع مخدم Redis باستعمال مقبس يونكس.
* /var/redis.sock - للاتصال مع مخدم Redis باستعمال مقبس يونكس (صيغة بديلة).

إذا تم تمكين وضع العناقيد، حدد المخدمات مفصولاً بينها بسطر جديد، على سبيل المثال:<br>
  172.23.0.11<br>
  172.23.0.12<br>
  172.23.0.13<br>

لمزيد من المعلومات، أنظر <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">قبول اتصالات العملاء</a> و <a href="https://redis.io/resources/clients/#php" target="_new">عملاء Redis PHP</a> لمزيد من المعلومات.';
$string['test_ttl'] = 'فحص TTL';
$string['test_ttl_desc'] = 'تشغيل إختبار الفحص باستعمال خبء يتطلب TTL (أبطأ).';
$string['usecompressor'] = 'استعمل الضغط';
$string['usecompressor_help'] = 'حدد برنامج الضغط المستعمل بعد التحويل إلى سلسلة. هذا الأمر يتم على مستوى واجهة برمجة التطبيق لمخبأ مودل، وليس على مستوى تقليعة php';
$string['useserializer'] = 'استخدام التسلسل';
$string['useserializer_help'] = 'يحدد المُسلسل الذي ينبغي استعماله للتسلسل.
المسَلسِلون الصالحون هم Redis::SERIALIZER_PHP أو Redis::SERIALIZER_IGBINARY.
يتم دعم الأخير فقط عند تهيئة phpredis مع خيار --enable-redis-igbinary وتحميل الامتداد igbinary.';
