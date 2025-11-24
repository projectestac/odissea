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
 * Strings for component 'auth_mojeid', language 'tr', version '4.5'.
 *
 * @package     auth_mojeid
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adult_control'] = 'Yetişkin kontrolü';
$string['adult_control_failed'] = 'Çoğunluk yaşının başarısız olup olmadığını kontrol edin.';
$string['adult_control_info'] = 'Yalnızca 18 yaşından büyük kullanıcıların erişimine izin vermek istiyorsanız açın.';
$string['auth_mojeiddescription'] = '<p>Bu eklenti, mojeID yetkilisi aracılığıyla giriş yapılmasına izin verir.</p><p><strong>"Güvenlik düzeyi"</strong>, güvenilir doğrulama kullanımını zorunlu kılmak için uygundur. Ancak her kullanıcı, bir giriş ve şifre kullanarak standart doğrulama prosedürü dışında kullanamaz.</p><p><strong>"Doğrulama Düzeyi"</strong>, yalnızca doğrulama düzeyine sahip kullanıcıların oturum açmasına izin verir. daha yüksek veya en azından burada ayarlayın. <strong>Dikkat edin</strong>, <strong>„Doğrulama“</strong> veya <strong>„Yetişkin kontrolü ile doğrulama“</strong> içinde kimlik doğrulaması kullanmanız gerekiyorsa, <strong>"Doğrulama" için başvurmanız gerekir. >mojeID "Tam Erişim" düzeyi.</strong> Bu hizmetin sağlayıcısı olarak CZ.NIC derneğine başvurabilirsiniz. <a href="https://www. Moodle Yöneticisi olarak oturum açın ve Moodle\'ın ana sayfasına gidin. <strong>"Yönetim"</strong>\'de Düzenleme modunu etkinleştirin. <strong>"Ana menü"</strong>\'de <strong>"Bir etkinlik veya kaynak ekle"</strong>\'yi seçin. Menüden <strong>"Sayfa"</strong>\'yı seçin ve burada <strong>"Ad"</strong> ve <strong>"Açıklama"</strong> alanına <strong>"Neden mojeID" metnini ekleyin< /güçlü>. <strong>"Site İçeriği"</strong>\'ne <a href="https://www.mojeid.cz/vyhody/">bu web sitesinden</a> metin, hatta resimler ekleyin. Adres çubuğu görüntülenen sayfasından <strong>"Kaydet ve görüntüle"</strong> düğmesini kaydedin, bileşenin MojeID\'sine girdiğiniz URL adresini kopyalayın.</p><h3>Bir logo ekleme "MojeID\'yi destekler"</h3><p>Menüde, <strong>"Site yönetimi"</strong>\'ni seçin - > <strong>"Dil"</strong> -> <strong>"Dil özelleştirme"</strong>. Seçim kutusu göründüğünde, düzenlemek istediğiniz dili seçin ve <strong>"Dil paketini düzenlemek için aç"</strong>\'a basın. Paketi yükledikten sonra, <strong>"Devam"</strong> ile onaylayın. Filtrede, dize tanımlayıcı türü olarak <strong>"Çekirdek"</strong> -> <strong>"moodle.php"</strong> arasından seçim yapın ve <strong>"loggedinnot"</strong> tuşuna basın >"Dizeyi göster"< /güçlü>. Ardından, <strong>"Giriş yapmadınız"</strong> dizesiyle birlikte görünen kutuya bu metni ekleyin <strong>"<div id="auth_mojeid_logo"><img src="/auth/mojeid /api/image/logo-podporuje.png" width="90" height="41" /></div>"</strong> ve <strong>"Değişiklikleri dil paketine kaydet"</strong>\'e basın >.</p><p>Farklı bir logo kullanmak istiyorsanız, <a href="https://www.mojeid.cz/files/mojeid/ikony_podporuje_mojeID.zip">bu bölümden diğerini seçin arşivleyin</a>, web\'den erişilebilen bir klasöre yerleştirin ve varsayılan klasör yerine kullanın. Bu durumda görüntünün doğru boyutunu ayarlamak gerekir.</p><h3>Değiştir düğmesi "';
$string['cant_validate_user_account'] = 'Doğrulamak mümkün değildi. Lütfen yönetici LMS Moodle ile iletişime geçin.';
$string['certificate'] = 'sertifika';
$string['create'] = 'Hesap mojeID oluşturun';
$string['disponsable_password'] = 'Tek kullanımlık şifre';
$string['email_already_used'] = 'E-posta zaten başka bir kimlik doğrulama yöntemine atanmış.';
$string['login_mojeid_url'] = 'mojeID (URL) ile oturum açın';
$string['login_mojeid_url_info'] = 'Resmin URL\'sini girerek, mojeID üzerinden oturum açmak için düğmeyi değiştirebilirsiniz.';
$string['minimal_verification_level_is'] = 'Asgari kimlik doğrulama seviyesi,';
$string['not_exists_mojeid_user_data'] = 'Profil mojeID\'nize aşağıdaki verileri ekleyin veya oturum açma işlemi sırasında etkinleştirin.';
$string['password'] = 'Parola';
$string['pin1_pin2'] = 'PIN1/PIN2';
$string['pin3'] = 'PIN3';
$string['pluginname'] = 'mojeID';
$string['security_level'] = 'Güvenlik seviyesi';
$string['security_level_info'] = 'Yetkili mojeID başvurusunda bulunan kullanıcılar için ne düzeyde güvenlik talep ettiğiniz.';
$string['sign_in_with'] = 'mojeID ile oturum açın';
$string['unknown_error_during_communication_with_mojeid'] = 'Sunucu mojeID ile iletişim sırasında bilinmeyen hata oluştu.';
$string['unknown_error_during_create_user'] = 'Kullanıcı oluşturma sırasında bilinmeyen hata.';
$string['unknown_error_during_login_user'] = 'Kullanıcı oturum açma sırasında bilinmeyen hata.';
$string['validation'] = 'doğrulama';
$string['validation_adult_control'] = 'Yetişkin kontrolü ile doğrulama';
$string['verification_cancelled'] = 'Doğrulama iptal edildi.';
$string['verification_failed'] = 'OpenID kimlik doğrulaması başarısız oldu:';
$string['verification_level'] = 'Doğrulama düzeyi';
$string['verification_level_control_failed'] = 'Kimlik doğrulaması kontrol edilemedi.';
$string['verification_level_info'] = 'Kullanıcılar oturum açtığında kimlik doğrulamasını kullanmak istediğiniz düzeyi ayarlayın.';
$string['why'] = 'Neden mojeID';
$string['why_mojeid_url'] = 'Neden myID (URL)';
$string['why_mojeid_url_info'] = 'Bu Moodle kurulumunda, mojeID kimlik doğrulama yöntemlerinin faydaları hakkındaki bilgilerin altındaki adres.';
$string['you_are_not_adult'] = 'Sen bir yetişkin değilsin.';
$string['your_account_is_not_valid'] = 'Hesabınız doğrulanmadı.';
$string['your_verification_level_is'] = 'Doğrulama seviyeniz';
