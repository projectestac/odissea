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
 * Strings for component 'tool_oauth2', language 'tr', version '4.5'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrisk'] = 'E-posta doğrulamasını devre dışı bırakmanın bir güvenlik sorunu olabileceğini anlıyorum.';
$string['acceptrisk_help'] = 'E-posta doğrulamasını devre dışı bırakmak, potansiyel olarak bir kullanıcının başka bir kullanıcı olarak kimlik doğrulaması yapmasına izin verebilir.';
$string['authconfirm'] = 'Bu işlem, kimliği doğrulanmış hesap için Moodle\'a kalıcı API erişimi sağlayacaktır.  Bu, Moodle\'a ait dosyaları yönetmek için bir sistem hesabı olarak kullanılmak üzere tasarlanmıştır.';
$string['authconnected'] = 'Sistem hesabı artık çevrimdışı erişim için bağlı durumda';
$string['authnotconnected'] = 'Sistem hesabı çevrimdışı erişim için bağlanamadı';
$string['clever_service'] = 'Zeki';
$string['configured'] = 'Ayarlandı';
$string['configuredstatus'] = 'Ayarlandı';
$string['connectsystemaccount'] = 'Bir sistem hesabına bağlanın';
$string['createfromtemplate'] = 'Şablondan bir OAuth 2 hizmeti oluşturun';
$string['createfromtemplatedesc'] = 'Bilinen hizmet türlerinden biri için geçerli bir yapılandırmaya sahip bir OAuth hizmeti oluşturmak için aşağıdaki OAuth 2 hizmet şablonlarından birini seçin. Bu, kimlik doğrulama için gereken tüm doğru uç noktalar ve parametrelerle birlikte OAuth 2 hizmetini oluşturacaktır, ancak kullanılabilmesi için yeni hizmet için istemci kimliğini ve sırrını girmeniz gerekecektir.';
$string['createnewendpoint'] = '"{$a}" ihraççısı için yeni uç nokta oluşturun';
$string['createnewservice'] = 'Yeni hizmet oluştur:';
$string['createnewuserfieldmapping'] = 'Düzenleyici "{$a}" için yeni kullanıcı alanı eşlemesi oluşturun';
$string['custom_service'] = 'Özel';
$string['deleteconfirm'] = '"{$a}" kimlik vericisini silmek istediğinizden emin misiniz? Bu yayıncıya güvenen tüm eklentiler çalışmayı durduracak.';
$string['deleteendpointconfirm'] = '"{$a->issuer}" yayıncı için "{$a->endpoint}" uç noktasını silmek istediğinizden emin misiniz? Bu uç noktaya güvenen tüm eklentiler çalışmayı durduracaktır.';
$string['deleteuserfieldmappingconfirm'] = '"{$a}" düzenleyicisi için kullanıcı alanı eşlemesini silmek istediğinizden emin misiniz?';
$string['discovered'] = 'Hizmet keşfi başarılı';
$string['discovered_help'] = 'Keşif, OAuth 2 uç noktalarının, OAuth hizmeti için temel URL\'den otomatik olarak belirlenebileceği anlamına gelir.  Tüm hizmetlerin "keşfedilmesi" gerekli değildir, ancak değilse, uç noktaların ve kullanıcı eşleme bilgilerinin manuel olarak girilmesi gerekecektir.';
$string['discoverystatus'] = 'Keşif';
$string['editendpoint'] = 'Bitiş noktasını düzenleyin: {$a->issuer} yayıncısı için {$a->endpoint}';
$string['editendpoints'] = 'Uç noktaları yapılandırın';
$string['editissuer'] = 'Kimliği veren kuruluşu düzenleyin: {$a}';
$string['edituserfieldmapping'] = '{$a} yayıncısı için kullanıcı alanı eşlemesini düzenleyin';
$string['edituserfieldmappings'] = 'Kullanıcı alanı eşlemelerini yapılandırın';
$string['endpointdeleted'] = 'Bitiş noktası silindi';
$string['endpointname'] = 'İsim';
$string['endpointname_help'] = 'Bu uç noktayı aramak için kullanılan anahtar. "_endpoint" ile bitmelidir.';
$string['endpointsforissuer'] = 'Düzenleyici için uç noktalar: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'Bu uç nokta için URL. https:// protokolünü kullanmalıdır.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Açık Rozetler';
$string['issueralloweddomains'] = 'Giriş alanları';
$string['issueralloweddomains_help'] = 'Ayarlanmışsa bu ayar, bu sağlayıcı kullanılırken oturum açma işlemlerinin kısıtlanacağı etki alanlarının virgülle ayrılmış bir listesidir.';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = 'Hizmet tabanı URL\'si';
$string['issuerbaseurl_help'] = 'Hizmete erişmek için kullanılan temel URL.';
$string['issuerclientid'] = 'İstemci Kimliği';
$string['issuerclientid_help'] = 'Bu düzenleyici için OAuth istemci kimliği.';
$string['issuerclientsecret'] = 'İstemci parolası';
$string['issuerclientsecret_help'] = 'Bu veren için OAuth istemci şifresi.';
$string['issuerdeleted'] = 'Kimlik düzenleyici silindi';
$string['issuerdisabled'] = 'Kimlik düzenleyici devre dışı';
$string['issuerenabled'] = 'Kimlik düzenleyici etkin';
$string['issuerimage'] = 'Logo URL\'si';
$string['issuerimage_help'] = 'Bu düzenleyici için bir logo göstermek için kullanılan bir resim URL\'si.  Oturum açma sayfasında görüntülenebilir.';
$string['issuerloginpagename'] = 'Oturum açma sayfasında görüntülenen ad';
$string['issuerloginpagename_help'] = 'Belirtilmesi halinde bu ad, oturum açma sayfasında hizmet adı yerine kullanılacaktır.';
$string['issuerloginparams'] = 'Bir oturum açma isteğine dahil edilen ek parametreler.';
$string['issuerloginparams_help'] = 'Bazı sistemler, kullanıcının temel profilini okumak için oturum açma isteği için ek parametreler gerektirir.';
$string['issuerloginparamsoffline'] = 'Çevrimdışı erişim için oturum açma isteğine dahil edilen ek parametreler.';
$string['issuerloginparamsoffline_help'] = 'Her OAuth sistemi, çevrimdışı erişim istemek için farklı bir yol tanımlar.  Örneğin, Google ek parametreler gerektirir: "access_type=offline&prompt=consent".  Bu parametreler, URL sorgu parametresi biçiminde olmalıdır.';
$string['issuerloginscopes'] = 'Oturum açma isteğine dahil edilen kapsamlar.';
$string['issuerloginscopes_help'] = 'Bazı sistemler, kullanıcının temel profilini okumak için bir oturum açma isteği için ek kapsamlar gerektirir.  OpenID Connect uyumlu bir sistem için standart kapsamlar "openid profil e-postası"dır.';
$string['issuerloginscopesoffline'] = 'Çevrimdışı erişim için oturum açma isteğine dahil edilen kapsamlar.';
$string['issuerloginscopesoffline_help'] = 'Her OAuth sistemi, çevrimdışı erişim istemek için farklı bir yol tanımlar.  Örneğin, Microsoft ek bir "offline_access" kapsamı gerektirir.';
$string['issuername'] = 'İsim';
$string['issuername_help'] = 'Kimlik verenin adı.  Oturum açma sayfasında görüntülenebilir.';
$string['issuerrequireconfirmation'] = 'E-posta doğrulaması gerektir';
$string['issuerrequireconfirmation_help'] = 'OAuth ile oturum açabilmeleri için tüm kullanıcıların e-posta adreslerini doğrulamasını zorunlu kılın.  Bu, giriş işleminin bir parçası olarak yeni oluşturulan hesaplar için veya mevcut bir Moodle hesabı, eşleşen e-posta adresleri aracılığıyla bir OAuth girişine bağlandığında geçerlidir.';
$string['issuers'] = 'Yayıncılar';
$string['issuersetup'] = 'Ortak OAuth 2 hizmetlerini yapılandırma hakkında ayrıntılı talimatlar';
$string['issuersetuptype'] = '{$a} OAuth 2 sağlayıcısının kurulumuyla ilgili ayrıntılı yönergeler';
$string['issuershowonloginpage'] = 'Giriş sayfasında göster';
$string['issuershowonloginpage_help'] = 'OAuth 2 kimlik doğrulama eklentisi etkinleştirildiyse, bu oturum açma düzenleyicisi, kullanıcıların bu düzenleyiciden hesaplarla oturum açmasına izin vermek için oturum açma sayfasında listelenecektir.';
$string['issuersservicesallow'] = 'Hizmetlere izin ver';
$string['issuersservicesnotallow'] = 'Hizmetlere izin verme';
$string['issuerusedforinternal'] = 'Dahili hizmetler';
$string['issuerusedforlogin'] = 'Giriş yap';
$string['issuerusein'] = 'Bu hizmet kullanılacak';
$string['issuerusein_help'] = '"OAuth 2 hizmetleri, dahili hizmetler için, oturum açma sayfasında, XOAUTH2 ile SMTP için veya gerekirse hem oturum açma sayfası hem de dahili hizmetler için kullanılabilir.';
$string['issueruseineverywhere'] = 'Oturum açma sayfası ve dahili hizmetler';
$string['issueruseininternalonly'] = 'Yalnızca dahili hizmetler';
$string['issueruseinloginonly'] = 'Sadece giriş sayfası';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Giriş sayfasında şu şekilde görüntüle';
$string['loginissuer'] = 'Girişe izin ver';
$string['microsoft_service'] = 'Microsoft';
$string['moodlenet_service'] = 'MoodleNet';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Yapılandırılmamış';
$string['notdiscovered'] = 'Hizmet bulma aşaması başarılı değil';
$string['notloginissuer'] = 'Giriş kabul edilmiyor';
$string['pluginname'] = 'OAuth 2 hizmetleri';
$string['privacy:metadata'] = 'OAuth 2 hizmetleri eklentisi herhangi bir kişisel veri saklamaz.';
$string['savechanges'] = 'Değişiklikleri kaydet';
$string['serviceshelp'] = 'Servis sağlayıcı kurulum talimatları.';
$string['systemaccountconnected'] = 'Sistem hesabı bağlandı';
$string['systemaccountconnected_help'] = 'Sistem hesapları, eklentiler için gelişmiş işlevsellik sağlamak için kullanılır. Yalnızca oturum açma işlevi için gerekli değildir, ancak OAuth hizmetini kullanan diğer eklentiler, sistem hesabı bağlanmamışsa daha az sayıda özellik sunabilir. Örneğin havuzlar, dosya işlemlerini gerçekleştirmek için bir sistem hesabı olmadan "kontrollü bağlantıları" destekleyemez.';
$string['systemaccountnotconnected'] = 'Sistem hesabı bağlı değil';
$string['systemauthstatus'] = 'Sistem hesabı bağlandı';
$string['usebasicauth'] = 'Belirteç isteklerini HTTP başlıkları aracılığıyla doğrulayın';
$string['usebasicauth_help'] = 'İstemci kimliğini ve parolayı yenileme belirteci isteğiyle gönderirken HTTP Temel kimlik doğrulama şemasını kullanın.  OAuth 2 standardı tarafından önerilir, ancak bazı yayıncılarda bulunmayabilir.';
$string['userfieldexternalfield'] = 'Harici alan adı';
$string['userfieldexternalfield_error'] = 'Bu alan HTML içeremez.';
$string['userfieldexternalfield_help'] = 'Harici OAuth sistemi tarafından sağlanan alanın adı.';
$string['userfieldinternalfield'] = 'Dahili alan adı';
$string['userfieldinternalfield_help'] = 'Harici alandan eşlenmesi gereken Moodle kullanıcı alanının adı.';
$string['userfieldmappingdeleted'] = 'Kullanıcı alanı eşlemesi silindi';
$string['userfieldmappingsforissuer'] = 'Yayıncı için kullanıcı alanı eşlemeleri: {$a}';
