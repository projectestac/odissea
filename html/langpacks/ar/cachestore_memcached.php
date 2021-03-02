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
 * Strings for component 'cachestore_memcached', language 'ar', version '3.8'.
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
$string['clustered_help'] = 'يستخدم هذا للسماح بوظيفة القراءة الواحدة ، set-multi.

حالة الاستخدام المقصود هي إنشاء مخزن محسّن لتكوينات متوازنة التحميل. سيتم جلب المخزن من خادم واحد (مضيف محلي عادةً) ، و لكن يتم تعيينه على العديد (جميع الخوادم الموجودة في تجمع موازنة التحميل). بالنسبة إلى ذاكرات التخزين المؤقت ذات نسب القراءة المرتفعة للغاية ، فإن هذا يوفر مقدارًا كبيرًا من حمل الشبكة.

عند تمكين هذا الإعداد ، سيتم استخدام الخادم المذكور أعلاه للجلب.';
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
$string['isshared'] = 'ذاكرة التخزين المؤقت المشتركة';
$string['isshared_help'] = 'هل يتم استخدام خادم memcached أيضًا بواسطة تطبيقات أخرى؟ إذا تمت مشاركة ذاكرة التخزين المؤقت بواسطة تطبيقات أخرى ، فسيتم حذف كل مفتاح على حدة لضمان إزالة البيانات المملوكة لهذا التطبيق فقط (مع ترك بيانات ذاكرة التخزين المؤقت للتطبيق الخارجي دون تغيير). يمكن أن يؤدي هذا إلى انخفاض الأداء عند إزالة ذاكرة التخزين المؤقت ، اعتمادًا على تكوين الخادم الخاص بك. إذا كنت تقوم بتشغيل ذاكرة تخزين مؤقت مخصصة لهذا التطبيق ، فيمكن مسح ذاكرة التخزين المؤقت بالكامل بأمان دون أي خطر في إتلاف بيانات ذاكرة التخزين المؤقت للتطبيق الآخر. هذا يجب أن يؤدي إلى زيادة الأداء عند مسح ذاكرة التخزين المؤقت.';
$string['pluginname'] = 'أعطها';
$string['prefix'] = 'بادئة مفتاح';
$string['prefix_help'] = 'هذا يمكن استخدامها لإنشاء "مجال" لمفاتيح البند الخاص بك مما يسمح لك لإنشاء مخازن ذاكرة مؤقتة متعددة على تثبيت ذاكرة مؤقتة واحدة. لا يمكن أن تكون أطول من 16 حرفا من أجل ضمان قضايا طول المفتاح التي تواجه.';
$string['prefixinvalid'] = 'بادئة غير صالحة. يمكنك فقط استخدام az AZ 0-9-_.';
$string['privacy:metadata:memcached'] = 'يخزن البرنامج المساعد Memcached cachestore البيانات لفترة وجيزة كجزء من وظائف التخزين المؤقت. يتم تخزين هذه البيانات على خادم Memcache حيث تتم إزالة البيانات بانتظام.';
$string['privacy:metadata:memcached:data'] = 'البيانات المختلفة المخزنة في ذاكرة التخزين المؤقت';
$string['serialiser_igbinary'] = 'مسلسل igbinary .';
$string['serialiser_json'] = 'مسلسل JSON.';
$string['serialiser_php'] = 'المسلسل الافتراضي PHP.';
$string['servers'] = 'الخوادم';
$string['servers_help'] = 'هذا يحدد الملقمات التي يجب استخدامها من قبل هذا المحول للذاكرة. و ينبغي تحديد ملقمات واحدة في كل سطر و تتكون من عنوان خادم و منفذ اختياري و الوزن. إذا لم يتم توفير منفذ ثم يتم استخدام المنفذ الافتراضي (11211). على سبيل المثال: <PRE> server.url.com IPADDRESS: ميناء SERVERNAME: الميناء: الوزن
إذا تم تمكين * تمكين الخوادم المجمعة * أدناه ، يجب أن يكون هناك خادم واحد فقط مدرج هنا. عادة ما يكون هذا اسمًا يحل دائمًا للجهاز المحلي ، مثل 127.0.0.1 أو localhost.';
$string['serversclusterinvalid'] = 'بالضبط خادم واحد مطلوب عند تمكين التجميع.';
$string['sessionhandlerconflict'] = 'تحذير: تم تكوين مثيل memcached ({$a}) لاستخدام نفس خادم memcached مثل الجلسات.
تطهير جميع المخابئ سيؤدي إلى جلسات أيضا سيتم تطهيرها.';
$string['setservers'] = 'تعيين الخوادم';
$string['setservers_help'] = 'هذه هي قائمة الخوادم التي سيتم تحديثها عند تعديل البيانات في ذاكرة التخزين المؤقت. عموما اسم مؤهل بالكامل لكل خادم في التجمع. يجب أن تتضمن ** ** الخادم المدرج في * الخوادم * أعلاه ، حتى لو كان بواسطة اسم مضيف مختلف. يجب تحديد خوادم واحدة في كل سطر وتتألف من عنوان الخادم واختياريا منفذ. إذا لم يتم توفير منفذ ، فسيتم استخدام المنفذ الافتراضي (11211). فمثلا:';
$string['testservers'] = 'اختبار الخوادم';
$string['testservers_desc'] = 'خوادم الاختبار تعتاد على اختبار الوحدة واختبارات الأداء. وهي اختيارية تماما لإعداد ملقمات الاختبار. و ينبغي تحديد ملقم واحد في كل سطر، و تتألف من عنوان الخادم واختياريا المنفذ والوزن. إذا لم يتم توفير منفذ فسيتم استخدام المنفذ الافتراضي (11211).';
$string['upgrade200recommended'] = 'نوصيك بترقية امتداد Memcached PHP إلى الإصدار 2.0.0 أو أحدث. لا يوفر إصدار ملحق Memcached PHP الذي تستخدمه حاليا الوظيفة التي يستخدمها Moodle لضمان وجود ذاكرة تخزين مؤقت مخزنة في وضع الحماية. إلى أن تقوم بالترقية ، نوصيك بعدم تكوين أي تطبيقات أخرى لاستخدام نفس خوادم Memcached التي تم تكوين Moodle لاستخدامها.';
$string['usecompression'] = 'استخدم الضغط';
$string['usecompression_help'] = 'تمكين أو تعطيل ضغط الحمولة. عند التمكين، سيتم ضغط قيم العنصر الأطول من عتبة معينة (حاليًا 100 بايت) في أثناء التخزين وفك ضغطها خلال استرجاعها بشفافية.';
$string['useserialiser'] = 'استخدام مسلسل';
$string['useserialiser_help'] = 'تحدد مسلسل لاستخدامها لإجراء تسلسل القيم غير العددية. و إعطائها المسلسل الصالح
Memcached::SERIALIZER_PHP
أو
 emcached::SERIALIZER_IGBINARY.
يدعم هذا الأخير فقط عندما يتم تكوين ذاكرة مؤقتة مع - خيار تمكين الذاكرة مؤقتة -igbinary و يتم تحميل و تمديد igbinary .';
