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
 * Strings for component 'cachestore_memcache', language 'tr', version '4.5'.
 *
 * @package     cachestore_memcache
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'Kümelenmiş sunucuları etkinleştir';
$string['clustered_help'] = 'Bu, salt okunur, ayar-çoklu işlevsellik sağlamak için kullanılır.

Amaçlanan kullanım durumu, yük dengeli yapılandırmalar için geliştirilmiş bir depo oluşturmaktır. Mağaza bir sunucudan (genellikle localhost) alınır, ancak birçoğuna (yük dengeleme havuzundaki tüm sunuculara) ayarlanır. Çok yüksek okuma oranlarına sahip önbellekler için, bu, ağ yükü miktarını önemli ölçüde azaltır.

Bu ayar etkinleştirildiğinde, getirme için yukarıda listelenen sunucu kullanılacaktır.';
$string['clusteredheader'] = 'Sunucuları böl';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Anahtar öneki';
$string['prefix_help'] = 'Bu önek, memcache sunucusundaki tüm anahtar adlar için kullanılır.
* Bu sunucuyu kullanarak yalnızca bir Moodle örneğiniz varsa, bu değeri varsayılan olarak bırakabilirsiniz.
* Anahtar uzunluğu kısıtlamaları nedeniyle, maksimum 5 karakterden izin verilir.';
$string['prefixinvalid'] = 'Geçersiz önek. Sadece a-z A-Z 0-9-_ kullanabilirsiniz.';
$string['servers'] = 'Sunucular';
$string['servers_help'] = 'Bu, bu memcache bağdaştırıcısı tarafından kullanılması gereken sunucuları ayarlar.
Sunucular her satıra bir tane olacak şekilde tanımlanmalı ve bir sunucu adresi ve isteğe bağlı olarak bir bağlantı noktası ve ağırlıktan oluşmalıdır.
Hiçbir bağlantı noktası sağlanmazsa varsayılan bağlantı noktası (11211) kullanılır.

Örneğin:
<pre>
sunucu.url.com
ipaddress:bağlantı-noktası
sunucuadı:port:ağırlık
</pre>

Aşağıda * Kümelenmiş sunucuları etkinleştir * etkinleştirilmişse, burada yalnızca bir sunucu listelenmelidir. Bu genelde 127.0.0.1 veya localhost gibi yerel makineye her zaman çözüm olan bir isim olurdu.';
$string['serversclusterinvalid'] = 'Kümeleme etkinleştirildiğinde tam olarak bir sunucu gerekir.';
$string['sessionhandlerconflict'] = 'Uyarı: Bir memcache örneği ({$a}) aynı memcached sunucuyu oturumlarla kullanmak üzere yapılandırılmıştır. Tüm önbelleklerin temizlenmesi oturumların da temizlenmesine yol açacaktır.';
$string['setservers'] = 'Sunucuları Ayarla';
$string['setservers_help'] = 'Önbellekte veriler değiştirildiğinde güncellenecek sunucular listesi. Genellikle, havuzdaki her sunucunun tam nitelikli adı.
Farklı bir ana sunucu adı olsa bile, *Sunucular* \'da listelenen sunucuyu **mutlaka** içermelidir.
Sunucular her satıra bir tane olmak üzere tanımlanmalı ve bir sunucu adresi ve isteğe bağlı olarak bir bağlantı noktası içermelidir.
Hiçbir bağlantı noktası sağlanmazsa varsayılan bağlantı noktası (11211) kullanılır.

Örneğin:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'Sunucuları Test et';
$string['testservers_desc'] = 'Memcache sunucularının karşı karşıya kalacağı bir veya daha fazla bağlantı dizesi. Bir test sunucusu belirtilmişse, memcache performansı, yönetim bloğundaki önbellek performans sayfası kullanılarak sınanabilir.
Örnek olarak: 127.0.0.1.11211';
