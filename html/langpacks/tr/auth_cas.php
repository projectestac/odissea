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
 * Strings for component 'auth_cas', language 'tr', version '4.5'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'Kimlik denetimi seçeneği';
$string['auth_cas_auth_logo'] = 'Kimlik doğrulama yöntemi logosu';
$string['auth_cas_auth_logo_description'] = 'CAS kimlik doğrulama yöntemi için kullanıcılarınızın uygun bir logo yükleyin.';
$string['auth_cas_auth_name'] = 'Kimlik doğrulama yöntemi adı';
$string['auth_cas_auth_name_description'] = 'CAS kimlik doğrulama yöntemi için kullanıcılarınızın uygun bir ad girin.';
$string['auth_cas_auth_service'] = 'CAS';
$string['auth_cas_auth_user_create'] = 'Harici kullanıcı oluştur';
$string['auth_cas_baseuri'] = 'Sunucunun klasör adresi; baseUri yoksa hiçbir şey girmeyin.<br />Örnek: CAS sunucu host.alanadi.edu.tr/CAS/ adresinden cevap veriyorsa <br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Temel URI';
$string['auth_cas_broken_password'] = 'Şifrenizi değiştirmeden devam edemezsiniz, ancak şifrenizi değiştirmek için de bir sayfa mevcut değil. Lütfen Moodle Yöneticinizle iletişime geçin.';
$string['auth_cas_cantconnect'] = 'CAS modülünün LDAP bölümü sunucuya bağlanamıyor: {$a}';
$string['auth_cas_casversion'] = 'CAS protokol versiyonu';
$string['auth_cas_certificate_check'] = 'Sunucu sertifikasını doğrulamak istiyorsanız \'evet\' seçeneğini seçiniz.,';
$string['auth_cas_certificate_check_key'] = 'Sunucu doğrulama';
$string['auth_cas_certificate_path'] = 'Sunucu sertifikasını doğrulamak için CA zincirleme dosyasının yolu (PEM Biçimi)';
$string['auth_cas_certificate_path_empty'] = 'Sunucu doğrulamasını açarsanız, bir sertifika yolu belirtmeniz gerekir';
$string['auth_cas_certificate_path_key'] = 'Sertifika adresi';
$string['auth_cas_changepasswordurl'] = 'Şifre değiştirme adresi';
$string['auth_cas_create_user'] = 'Moodle veritabana CAS-yetkili kullanıcıları eklemek istiyorsanız bunu açın. Açmazsanız, sadece Moodle veritabanında mevcut olan kullanıcılar giriş yapabilecektir.';
$string['auth_cas_create_user_key'] = 'Kullanıcı oluştur';
$string['auth_cas_curl_ssl_version'] = 'Kullanılacak SSL sürümü (2 veya 3). Varsayılan olarak PHP kendisini belirlemeye çalışacaktır, ancak bazı durumlarda elle ayarlanması gerekir.';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_cas_curl_ssl_version_default'] = 'Varsayılan';
$string['auth_cas_curl_ssl_version_key'] = 'cURL SSL Sürümü';
$string['auth_cas_enabled'] = 'CAS kimlik denetimini kullanmak istiyorsanız bunu etkinleştirin.';
$string['auth_cas_hostname'] = 'CAS sunucusunun host adı<br />Ör: host.domain.com';
$string['auth_cas_hostname_key'] = 'Host adı';
$string['auth_cas_invalidcaslogin'] = 'Üzgünüz, giriş hatalı. Yetkilendirmeniz yapılamadı.';
$string['auth_cas_language'] = 'Kimlik doğrulama sayfaları için dil seçin';
$string['auth_cas_language_key'] = 'Dil';
$string['auth_cas_logincas'] = 'Güvenli bağlantı erişimi';
$string['auth_cas_logout_return_url'] = 'Oturum açtıktan sonra CAS kullanıcılarının yönlendirileceği URL\'yi sağlayın. <br/> Boş bırakılırsa, kullanıcılar, moodle\'ın kullanıcıları yeniden yönlendirecek konuma yönlendirilecek.';
$string['auth_cas_logout_return_url_key'] = 'Alternatif çıkış URL\'si';
$string['auth_cas_logoutcas'] = 'Moodle ile bağlantınız kesildiğinde CAS\'tan çıkmak istiyorsanız \'evet\'i seçin';
$string['auth_cas_logoutcas_key'] = 'CAS çıkış seçeneği';
$string['auth_cas_multiauth'] = 'Birden fazla kimlik denetimi istiyursanız bunu \'evet\' yapın (CAS + diğer yetkilendirme)';
$string['auth_cas_multiauth_key'] = 'Çoklu kimlik denetimi';
$string['auth_cas_port'] = 'CAS sunucu bağlantı noktası';
$string['auth_cas_port_key'] = 'Bağlantı noktası';
$string['auth_cas_proxycas'] = 'CAS\'ı proxy modunda kullanıyorsanız bunu \'evet\' yapın';
$string['auth_cas_proxycas_key'] = 'Proxy modu';
$string['auth_cas_server_settings'] = 'CAS sunucu yapılandırması';
$string['auth_cas_text'] = 'Güvenli bağlantı';
$string['auth_cas_use_cas'] = 'CAS kullan';
$string['auth_cas_version'] = 'Kullanılacak CAS protokolü sürümü';
$string['auth_casdescription'] = 'Bu yöntem, Single Sign On (SSO) ortamındaki kullanıcıları yetkilendirmek için CAS sunucu (Central Authentication Service, Merkezi Yetkilendirme Servisi) kullanır. Ayrıca basit LDAP yetkilendirmesi de kullanabilirsiniz. Sağlanan kullanıcı adı ve şifre CAS\'a göre doğruysa, Moodle kendi veritabanında gerekli olması durumunda kullanıcı niteliklerini alarak yeni bir kullanıcı kaydı oluşturur ve sonraki girişlerde sadece kullanıcı adı ve şifre kontrol edilir.';
$string['auth_casnotinstalled'] = 'CAS kimlik denetimi kullanılamaz. PHP LDAP modülü kurulmamış.';
$string['noldapserver'] = 'CAS için yapılandırılmış bir LDAP sunucusu yok! Senkronizasyon devre dışı.';
$string['pluginname'] = 'CAS sunucu (SSO)';
$string['privacy:metadata'] = 'CAS sunucusu (SSO) kimlik doğrulama eklentisi herhangi bir kişisel veriyi saklamaz.';
$string['synctask'] = 'CAS kullanıcıları iş senkronizasyonu';
