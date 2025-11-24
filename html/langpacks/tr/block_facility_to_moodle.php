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
 * Strings for component 'block_facility_to_moodle', language 'tr', version '4.5'.
 *
 * @package     block_facility_to_moodle
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Facility'] = 'Moodle için Tesis';
$string['NoJavaScript'] = '<p style = "text-align: center">Maalesef bu özellik Javascript\'e bağlıdır ve sizinki şu anda devre dışıdır.</p>';
$string['access'] = 'Microsoft Access';
$string['ad'] = 'Adres';
$string['add'] = 'BDN ekle';
$string['addstu'] = 'Grup Ekle';
$string['ag'] = 'Politika Kabul Edildi';
$string['back'] = 'Blok Ayarlarına Dön';
$string['bdn'] = 'BDN<br /><span class = "babytxt">(örneğin: <i>ou = 2011, ou=Öğrenciler, ou=Ossett Okul Kullanıcıları, dc=ossettschool, dc=co, dc=uk</i>)</span>';
$string['bdnname'] = 'BDN Adı<br /><span class="babytxt">(yalnızca referans)</span>';
$string['blockmenutitle'] = 'Moodle için Tesis';
$string['blockname'] = 'Moodle için Tesis';
$string['ch'] = 'Çocuk';
$string['clgr'] = 'Sınıf Grubu';
$string['del'] = 'Silme';
$string['descconfig'] = '<p>Kullanıcılarınız için tüm BDN\'lerinizi aşağıdaki bağlantıdan tanımlamanız ve ardından geri kalan ayarlarınızı girmek için buraya dönmeniz gerekecektir.</p>';
$string['descdbpass'] = 'Tesis Veritabanınıza erişmek için sunucu türünüz tarafından gerekli parola';
$string['descdbq'] = 'Yalnızca DBType Access olarak ayarlanmışsa gereklidir / kullanılır. Bu, MS Access mdb dosyanızın yoludur';
$string['descdbtype'] = 'Tesis veritabanı sunucu türünüzü seçin... MS Access veya MS SQL';
$string['descdbuser'] = 'Tesis Veritabanınıza erişmek için sunucu türünüz tarafından gerekli olan kullanıcı adı';
$string['descdefaults'] = 'Aşağıdaki ayarlar, kalan profil alanları için varsayılan değerleri tanımlar.';
$string['descdset'] = 'Bu, mevcut veri kümeniz olmalı, örneğin: 2011/2012 ve her yaz değiştirilmesi gerekecek';
$string['descdsn'] = 'Bu, web sunucunuzun unixODBC kurulumunun bir parçası olarak /etc/odbc.ini içinde yapılandırılan DSN\'dir.';
$string['descfacdet'] = 'Aşağıdaki ayarlar Tesis veritabanınızı tanımlar.';
$string['descfauth'] = 'Varsayılan kimlik doğrulama türünü belirtilene zorlar. Unutmayın, bu blok LDAPCapture eklentisi ile kullanılmak üzere tasarlanmıştır, bu nedenle bu alan genellikle \'ldapcapture\' olarak ayarlanmalıdır. Bu ayar personel ve öğrenci hesaplarına uygulanır. Ana hesaplar ne olursa olsun \'manuel\' kimlik doğrulamasında kalır.';
$string['descfirstyr'] = 'Okulunuza kayıtlı ilk yıl grubu (genellikle 7)';
$string['desciaml'] = '<a href=\\"https://www.iamlearning.co.uk/\\" target="_blank">Öğreniyorum</a>\'a yüklenmeye uygun CSV dosyalarını dışa aktarma özelliğini etkinleştirir';
$string['desclastyr'] = 'Okulunuza kayıtlı son yıl grubu (genellikle 13)';
$string['descmanage'] = '<p>Facility to Moodle Block, kullanıcılarınızın ActiveDirectory içindeki konumunu bilmesi gerekir. Örneğin...</p><ul><li>BDN Adı: 7. Yıl</li><li>BDN: ou=2007, ou=Öğrenciler, ou=Okul Kullanıcıları, dc=okul, dc=co, dc=uk</li><li>Tür: Öğrenci</li></ul>';
$string['descmisc'] = 'Aşağıdaki ayarlar \'Çeşitli\' kategorisine girer.';
$string['descparaccs'] = 'Aşağıdaki ayarlar, Moodle içindeki Parent name alanlarına önekler belirlemenize izin verir. Bu, kullanıcı yönetimi görevlerini gerçekleştirirken tanımlamayı daha basit hale getirebilir.';
$string['descparforce'] = 'Ebeveynleri, ilk girişte oluşturulan varsayılan parolayı değiştirmeye zorlar [RECOMMENDED]';
$string['descparfpref'] = 'Moodle Hesabı\'nda ebeveynin adının başına eklenir';
$string['descparlpref'] = 'Giriş için önek. Bu varsayılan olarak "p-" dir, bu nedenle tüm Ana hesap kullanıcı adları "p-" ile başlayacaktır.';
$string['descparspref'] = 'Moodle Hesabı\'nda ebeveynin soyadının başına eklenir';
$string['descscou'] = 'Moodle Hesabı\'nda ebeveynin soyadının başına eklenir';
$string['descsdomain'] = 'Öğrencilerinizin ikamet ettiği ALAN (ör. Müfredat)';
$string['descsdomainsrv'] = 'Öğrenci etki alanı sunucunuzun makine adı (örneğin: sunucu1). Bu, web sunucunuz tarafından komut satırında çözülebilir olmalıdır, aksi takdirde IP Adresini kullanın';
$string['descslang'] = 'Öğrenci etki alanı sunucunuzun makine adı (örneğin: sunucu1). Bu, web sunucunuz tarafından komut satırında çözülebilir olmalıdır, aksi takdirde IP Adresini kullanın';
$string['descstaaccs'] = 'Aşağıdaki ayarlar, Moodle\'daki personel üyelerinizin ad alanlarına önek ve son ekler belirlemenize olanak tanır. Bu, kullanıcı yönetimi görevlerini gerçekleştirirken tanımlamayı daha basit hale getirebilir.';
$string['descstafai'] = 'Personel üyesinin Moodle içindeki adının baş harfini değiştirir.';
$string['descstaffad'] = 'Aşağıdaki ayarlar, personel hesaplarınızın bulunduğu etki alanını ve sunucuyu (etki alanı denetleyicisi), bu ayrıntıları okumak için kimlik bilgileriyle birlikte tanımlar.';
$string['descstaffdom'] = 'Personelinizin bulunduğu ALAN (örneğin: müfredat)';
$string['edit'] = 'Düzenle';
$string['fa'] = 'İlk Erişim';
$string['labelmisc'] = 'Çeşitli Seçenekler';
$string['tt'] = 'Başlık';
$string['un'] = 'Kullanıcı Adı';
