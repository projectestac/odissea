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
 * Strings for component 'search_solr', language 'tr', version '4.5'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'Belirtilen Solr sunucusu kullanılamıyor veya belirtilen dizin mevcut değil';
$string['connectionsettings'] = 'Bağlantı ayarları';
$string['errorcreatingschema'] = 'Solr şeması oluşturulurken hata oluştu: {$a}';
$string['errorsolr'] = 'Solr arama motoru bir hata bildirdi: {$a}';
$string['errorvalidatingschema'] = 'Solr şeması doğrulanırken hata oluştu: {$A-> fieldname} alanı yok. Lütfen <a href="{$a->setupurl}"> gerekli alanları ayarlamak için bu bağlantı </a>\'sini izleyin.';
$string['extensionerror'] = 'Apache Solr PHP uzantısı yüklü değil. Lütfen belgeleri kontrol edin.';
$string['fileindexing'] = 'Dosya indekslemeyi etkinleştir';
$string['fileindexing_help'] = 'Tüm dosyaların eklenmesi için bu seçeneği etkinleştirdikten sonra tüm site içeriğini yeniden indekslemeniz gerekecektir.';
$string['fileindexsettings'] = 'Dosya indeksleme ayarları';
$string['maxindexfilekb'] = 'Dizine eklenecek maksimum dosya boyutu (kB)';
$string['maxindexfilekb_help'] = 'Bu kilobayt sayısından daha büyük dosyalar arama indekslemesine dahil edilmeyecektir. Sıfır olarak ayarlanırsa, herhangi bir boyuttaki dosyalar dizine eklenecektir.';
$string['minimumsolr4'] = 'Solr 4.0, Moodle için gereken minimum sürümdür';
$string['missingconfig'] = 'Apache Solr sunucunuz henüz Moodle\'da yapılandırılmadı.';
$string['multivaluedfield'] = '"{$a}" alanı skaler yerine bir dizi döndürdü. Lütfen mevcut dizini silin, yeni bir tane oluşturun ve Solr\'da verileri dizine eklemeden önce setup_schema.php dosyasını çalıştırın.';
$string['nodatafromserver'] = 'Sunucudan veri yok';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Bu eklenti, verileri harici olarak bağlantılı bir Solr arama motoruna gönderir. Verileri yerel olarak depolamaz.';
$string['privacy:metadata:data'] = 'Arama alt sisteminden aktarılan kişisel veriler.';
$string['schemafieldautocreated'] = '"{$a}" alanı Solr şemasında zaten mevcut. Muhtemelen verileri indekslemeden önce bu betiği çalıştırmayı unuttunuz ve alanlar Solr tarafından otomatik olarak oluşturuldu. Lütfen mevcut dizini silin, yeni bir tane oluşturun ve verileri Solr\'da dizine eklemeden önce setup_schema.php dosyasını tekrar çalıştırın.';
$string['schemasetupfromsolr5'] = 'Solr sunucu sürümünüz 5.0\'dan düşük. Bu komut dosyası yalnızca Solr sürümünüz 5.0 veya daha yüksekse şemanızı ayarlayabilir. Şemanızdaki alanları \\search_solr\\document::get_default_fields_definition()\'a göre manuel olarak ayarlamanız gerekir.';
$string['searchinfo'] = 'Arama sorguları';
$string['searchinfo_help'] = 'Aranacak alan, arama sorgusunun önüne \'title:\', \'content:\', \'name:\' veya \'intro:\' eklenerek belirtilebilir. Örneğin, \'title:news\' araması, başlığında \'news\' kelimesi geçen sonuçları döndürür.

Boolean operatörleri (\'AND\', \'OR\', \'NOT\') anahtar kelimeleri birleştirmek veya hariç tutmak için kullanılabilir.

Joker karakterler (\'*\' veya \'?\' ) arama sorgusundaki karakterleri temsil etmek için kullanılabilir.';
$string['setupok'] = 'Şema kullanıma hazırdır.';
$string['solrauthpassword'] = 'HTTP kimlik doğrulama parolası';
$string['solrauthuser'] = 'HTTP kimlik doğrulama kullanıcı adı';
$string['solrhttpconnectionport'] = 'Port';
$string['solrhttpconnectiontimeout'] = 'Zamanaşımı';
$string['solrhttpconnectiontimeout_desc'] = 'HTTP bağlantı zaman aşımı, HTTP veri aktarım işlemi için izin verilen saniye cinsinden maksimum süredir.';
$string['solrindexname'] = 'Dizin adı';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Solr motoru yapılandırılmış arama motoru değildir';
$string['solrsecuremode'] = 'Güvenli mod';
$string['solrserverhostname'] = 'Ana bilgisayar adı';
$string['solrserverhostname_desc'] = 'Solr sunucusunun alan adı.';
$string['solrsetting'] = 'Solr ayarları';
$string['solrsslcainfo'] = 'SSL CA sertifikaları adı';
$string['solrsslcainfo_desc'] = 'Eşi doğrulamak için bir veya daha fazla CA sertifikasını tutan dosya adı';
$string['solrsslcapath'] = 'SSL CA sertifika yolu';
$string['solrsslcapath_desc'] = 'Eşleri doğrulamak için birden fazla CA sertifikasını tutan dizin yolu';
$string['solrsslcert'] = 'SSL sertifikası';
$string['solrsslcert_desc'] = 'PEM biçimli özel sertifikanın dosya adı';
$string['solrsslkey'] = 'SSL anahtarı';
$string['solrsslkey_desc'] = 'PEM biçimli özel anahtara dosya adı';
$string['solrsslkeypassword'] = 'SSL anahtar şifresi';
$string['solrsslkeypassword_desc'] = 'PEM biçimli özel anahtar dosyası için parola';
