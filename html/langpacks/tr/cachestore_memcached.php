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
 * Strings for component 'cachestore_memcached', language 'tr', version '4.5'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Arabellek yazılıyor';
$string['bufferwrites_help'] = 'Arabelleğe alınmış I/O\'i etkinleştirir veya devre dışı bırakır. Arabelleğe alınmış I/O\'i etkinleştirmek, depolama komutlarının gönderilmek yerine "arabelleğe" dönüştürülmesine neden olur. Veri alırken yapılan herhangi bir işlem bu arabelleğin uzaktaki bağlantıya gönderilmesine neden olur. Bağlantıyı kesmek veya bağlantıyı kapatmak, arabelleğe alınan verilerin uzak bağlantıya yönlendirilmesine neden olur.';
$string['clustered'] = 'Kümelenmiş sunucuları etkinleştir';
$string['clustered_help'] = 'Bu, salt okunur, ayar-çoklu işlevsellik sağlamak için kullanılır.

Amaçlanan kullanım durumu, yük dengeli yapılandırmalar için geliştirilmiş bir depo oluşturmaktır. Mağaza bir sunucudan (genellikle localhost) alınır, ancak birçoğuna (yük dengeleme havuzundaki tüm sunuculara) ayarlanır. Çok yüksek okuma oranlarına sahip önbellekler için, bu, ağ yükü miktarını önemli ölçüde azaltır.

Bu ayar etkinleştirildiğinde, getirme için yukarıda listelenen sunucu kullanılacaktır.';
$string['clusteredheader'] = 'Bölünmüş sunucular';
$string['hash'] = 'Hash(Çırpı) yöntemi';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Varsayılan (birer birer)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Öğe tuşları için kullanılan karma algoritmasını belirtir. Her karma algoritmanın avantajları ve dezavantajları vardır. Bilmiyorsanız veya önemsemiyorsanız varsayılana gidin.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'Paylaşılan önbellek';
$string['isshared_help'] = 'Memcached sunucunuz diğer uygulamalar tarafından da kullanılıyor mu?

Önbellek diğer uygulamalar tarafından paylaşılırsa, yalnızca bu uygulamanın sahip olduğu verilerin temizlendiğinden (harici uygulama önbellek verilerini değiştirmeden) her anahtar ayrı ayrı silinir. Bu, sunucu yapılandırmanıza bağlı olarak önbellek temizlenirken performansın düşmesine neden olabilir.

Bu uygulama için özel bir önbellek kullanıyorsanız, başka bir uygulamanın önbellek verilerini yok etme riski olmadan tüm önbellek güvenli bir şekilde silinebilir. Bu, önbellek temizlenirken artan performans ile sonuçlanacaktır.';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Önek anahtarı';
$string['prefix_help'] = 'Bu, öğe anahtarlarınız için bir "etki alanı" yaratmak için kullanılabilir ve bu da tek bir memcached kurulumda birden çok memcached mağaza oluşturmanıza olanak tanır. Anahtar uzunluğu sorunlarının ortaya çıkmadığından emin olmak için 16 karakterden uzun olamaz.';
$string['prefixinvalid'] = 'Geçersiz önek. Sadece a-z A-Z 0-9-_ kullanabilirsiniz.';
$string['serialiser_igbinary'] = 'igbinary serileştirici.';
$string['serialiser_json'] = 'JSON serileştiricisi.';
$string['serialiser_php'] = 'Varsayılan PHP serileştirici.';
$string['servers'] = 'Sunucular';
$string['servers_help'] = 'Bu, bu memcached bağdaştırıcı tarafından kullanılması gereken sunucuları ayarlar.
Sunucular her satıra bir tane olacak şekilde tanımlanmalı ve bir sunucu adresi ve isteğe bağlı olarak bir bağlantı noktası ve ağırlıktan oluşmalıdır.
Hiçbir bağlantı noktası sağlanmazsa varsayılan bağlantı noktası (11211) kullanılır.

Örneğin:
<pre>
Sunucu.url.com
Ipaddress: bağlantı noktası
Sunucuadı: port: ağırlık
</pre>

Aşağıda * Kümelenmiş sunucuları etkinleştir * etkinleştirilmişse, burada yalnızca bir sunucu listelenmelidir. Bu genelde 127.0.0.1 veya localhost gibi yerel makineye her zaman çözüm olan bir isim olurdu.';
$string['serversclusterinvalid'] = 'Kümeleme etkinleştirildiğinde tam olarak bir sunucu gerekir.';
$string['sessionhandlerconflict'] = 'Uyarı: Bir memcached örneği ({$a}) aynı memcached sunucuyu oturumlarla kullanmak üzere yapılandırılmıştır. Tüm önbelleklerin temizlenmesi oturumların da temizlenmesine yol açacaktır.';
$string['setservers'] = 'Sunucuları ayarla';
$string['setservers_help'] = 'Önbellekte veriler değiştirildiğinde güncellenecek sunucular listesi. Genellikle, havuzdaki her sunucunun tam nitelikli adı.
Farklı bir sunucu adı olsa bile, *Sunucular* \'da listelenen sunucuyu **mutlaka** içermelidir.
Sunucular her satıra bir tane olmak üzere tanımlanmalı ve bir sunucu adresi ve isteğe bağlı olarak bir bağlantı noktası içermelidir.
Hiçbir bağlantı noktası sağlanmazsa varsayılan bağlantı noktası (11211) kullanılır.

Örneğin:
<pre>
Sunucu.url.com
Ipaddress: bağlantı noktası
</pre>';
$string['testservers'] = 'Sunucuları test et';
$string['testservers_desc'] = 'Memcached sunucuların karşı karşıya kalacağı bir veya daha fazla bağlantı dizesi. Bir sınama sunucusu belirtilmişse, memcached performans, yönetim bloğundaki önbellek performansı sayfasını kullanarak test edilebilir.
Örnek olarak: 127.0.0.1.11211';
$string['upgrade200recommended'] = 'Memcached PHP uzantınızı 2.0.0 veya daha yeni sürüme yükseltmenizi öneririz.
Şu anda kullandığınız Memcached PHP uzantısının sürümü, Moodle\'ın bir sandboxed önbellek sağlamak için kullandığı işlevselliği sağlamıyor. Yükseltene dek, Moodle\'ın kullanacağı şekilde yapılandırılmış olan aynı Memcached sunucularını kullanacak başka herhangi bir uygulamayı yapılandırmamanızı öneririz.';
$string['usecompression'] = 'Sıkıştırmayı kullan';
$string['usecompression_help'] = 'Yük sıkıştırmasını etkinleştirir veya devre dışı bırak. Etkinleştirildiğinde, belirli bir eşikten (şu anda 100 bayttan) daha uzun öğe değerleri, saklama sırasında sıkıştırılacak ve alma esnasında şeffaf bir şekilde arşivden çıkarılacaktır.';
$string['useserialiser'] = 'Seri hale getirici kullan';
$string['useserialiser_help'] = 'Çarpık olmayan değerleri seri hale getirmek için kullanılacak seri düzenleyiciyi belirtir.
Geçerli seri hale getiriciler Memcached :: SERIALIZER_PHP veya Memcached :: SERIALIZER_IGBINARY\'dir.
İkincisi yalnızca memcached, --enable-memcached-igbinary seçeneği ile yapılandırıldığında ve igbinary uzantısı yüklendiğinde desteklenir.';
