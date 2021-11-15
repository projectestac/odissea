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
 * Strings for component 'cachestore_memcached', language 'ar', version '3.11'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'كتابة من الذاكرة';
$string['bufferwrites_help'] = 'تمكين أو تعطيل مخزنة I / O. تمكين مخزنة I / O يتسبب التخزين لأوامر "الذاكرة" بدلا من إرسالها. أيّ عمل يقوم باسترداد البيانات يؤدي لإرسالها إلى هذا المخزن المؤقت من الاتصال البعيد. الانسحاب من الاتصال أو إغلاق الاتصال يسبب أيضا إلى دفع البيانات المخزنة في اتصال بعيد.';
$string['clustered'] = 'تمكين الخوادم المجمعة';
$string['clustered_help'] = 'يستعمل هذا للسماح بوظيفة القراءة الواحدة، الضبط المتعدد.

حالة الاستعمال المنشود هي إنشاء مخزن محسّن للخروج بتهيئة قادرة على موازنة الأحمال. سيقوم المخزن بإحضار البيانات من مخدم واحد (المضيف المحلي عادةً)، ولكنه يوجه البيانات إلى جهات متعددة (كل المخدمات الموجودة في مجمع موازنة التحميل). بالنسبة إلى المخبوءات التي تكون فيها نسبة القراءة إلى الوضع مرتفعة للغاية، فإن هذا يوفر مقداراً كبيراً من حمل الشبكة.

عند تمكين هذا الإعداد، سيتم استخدام المخدم المذكور أعلاه في مهمات جلب البيانات.';
$string['clusteredheader'] = 'خوادم مقسمة';
$string['hash'] = 'طريقة التجزئة';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'الافتراضي (واحدة في كل مرة)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'يحدد خوارزمية التجزئة المستخدمة في مفاتيح البند. كل خوارزمية التجزئة مزاياه وعيوبه. الذهاب مع الافتراضية إذا كنت لا تعرف أو لا تكترث.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'الخبء المشترك';
$string['isshared_help'] = 'هل يتم استخدام خادم memcached أيضًا بواسطة تطبيقات أخرى؟ إذا تمت مشاركة ذاكرة التخزين المؤقت بواسطة تطبيقات أخرى ، فسيتم حذف كل مفتاح على حدة لضمان إزالة البيانات المملوكة لهذا التطبيق فقط (مع ترك بيانات ذاكرة التخزين المؤقت للتطبيق الخارجي دون تغيير). يمكن أن يؤدي هذا إلى انخفاض الأداء عند إزالة ذاكرة التخزين المؤقت ، اعتمادًا على تكوين الخادم الخاص بك. إذا كنت تقوم بتشغيل ذاكرة تخزين مؤقت مخصصة لهذا التطبيق ، فيمكن مسح ذاكرة التخزين المؤقت بالكامل بأمان دون أي خطر في إتلاف بيانات ذاكرة التخزين المؤقت للتطبيق الآخر. هذا يجب أن يؤدي إلى زيادة الأداء عند مسح ذاكرة التخزين المؤقت.';
$string['pluginname'] = 'خبء الذاكرة';
$string['prefix'] = 'بادئة مفتاح';
$string['prefix_help'] = 'هذا يمكن استعماله لإنشاء "مجال" لمفاتيح العنصر الخاص بك مما يسمح بإنشاء مخازن ذاكرة مؤقتة متعددة على تنصيب ذاكرة مؤقتة واحد. لا يمكن أن يكون أطول من 16 حرفاً لضمان عدم مواجهة مشاكل تتعلق بطول المفتاح.';
$string['prefixinvalid'] = 'بادئة غير صالحة. يمكنك فقط استخدام az AZ 0-9-_.';
$string['privacy:metadata:memcached'] = 'يخزن ملحق مخزن خبء الذاكرة؛ البيانات لفترة وجيزة كجزء من وظائف التخزين المؤقت. يتم تخزين هذه البيانات على خادم Memcache حيث تتم إزالة البيانات بانتظام.';
$string['privacy:metadata:memcached:data'] = 'البيانات المختلفة المخزنة في الخبء';
$string['serialiser_igbinary'] = 'مسلسل igbinary .';
$string['serialiser_json'] = 'مسلسل JSON.';
$string['serialiser_php'] = 'المسلسل الافتراضي PHP.';
$string['servers'] = 'الخوادم';
$string['servers_help'] = 'هذا يحدد المخدمات التي ينبغي استعمالها من قبل هذا المحول للذاكرة.
ينبغي وضع المخدمات واحداً في كل سطر وأن يتضمن عنوان المخدم والمنفذ إختيارياً والوزن.
إذا لم يتم توفير اي منفذ سيتم استعمال المنفذ الافتراضي (11211).

على سبيل المثال:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

إذا تم تمكين *تمكين المخدمات العنقودية* أدناه، فينبغي أن يكون هناك مخدم واحد فقط مدرج هنا. عادة ما يكون هذا اسماً يشير دائماً إلى الجهاز المحلي، مثل 127.0.0.1 أو localhost.';
$string['serversclusterinvalid'] = 'بالضبط خادم واحد مطلوب عند تمكين التجميع.';
$string['sessionhandlerconflict'] = 'تحذير: تم تكوين مثيل memcached ({$a}) لاستخدام نفس خادم memcached مثل الجلسات.
تطهير جميع المخابئ سيؤدي إلى جلسات أيضا سيتم تطهيرها.';
$string['setservers'] = 'تعيين الخوادم';
$string['setservers_help'] = 'هذه قائمة المخدمات التي سيتم تحديثها عند تعديل البيانات في الخبء. عادة ما تكون التسمية المؤهلة الكاملة لكل مخدم في التجمع.
القائمة **يجب** أن تتضمن المخدم المدرج في *المخدمات* أعلاه، حتى لو كان باسم مضيف آخر.
ينبغي تعريف المخدمات بشكل سطر مستقل لكل منها يتضمن عنوان المخدم ورقم المنفذ إختياريًا.
إذا لم يتم تقديم رقم المنفذ، سيتم استعمال المنفذ الافتراضي (11211).

على سبيل المثال:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'اختبار الخوادم';
$string['testservers_desc'] = 'واحد أو أكثر من جُمل الاتصال بمخدمات خبء الذاكرة من أجل الفحص بها. إذا تم تحديد مخدم الفحص، سيكون بالإمكان فحص أداء مخبوءات الذاكرة باستعمال صفحة أداء الخبء في كتلة الإدارة.
مثال على ذلك: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'نوصيك بترقية امتداد Memcached PHP إلى الإصدار 2.0.0 أو أحدث. لا يوفر إصدار ملحق Memcached PHP الذي تستخدمه حاليا الوظيفة التي يستخدمها Moodle لضمان وجود ذاكرة تخزين مؤقت مخزنة في وضع الحماية. إلى أن تقوم بالترقية ، نوصيك بعدم تكوين أي تطبيقات أخرى لاستخدام نفس خوادم Memcached التي تم تكوين Moodle لاستخدامها.';
$string['usecompression'] = 'استخدم الضغط';
$string['usecompression_help'] = 'تمكين أو تعطيل ضغط الحمولة. عند التمكين، سيتم ضغط قيم العنصر الأطول من عتبة معينة (حاليًا 100 بايت) في أثناء التخزين وفك ضغطها خلال استرجاعها بشفافية.';
$string['useserialiser'] = 'استخدام مسلسل';
$string['useserialiser_help'] = 'تحدد المسلسِل المزمع استعماله لسلسلة القيم غير العددية.
المسلسِلات الصالحة هي Memcached::SERIALIZER_PHP
أو
emcached::SERIALIZER_IGBINARY.
هذا الأخير مدعوم فقط عندما تتم تهيئة memcached مع الخيار --enable-memcached-igbinary والامتداد igbinary قد تم تحميله.';
