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
 * Strings for component 'tool_messageinbound', language 'tr', version '4.5'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Sınıf adı';
$string['component'] = 'Bileşen';
$string['configmessageinboundhost'] = 'Moodle\'ın postaları karşı tarafa kontrol etmesi gereken sunucunun adresi. Varsayılan olmayan bir bağlantı noktası belirtmek için, [server]: [port] (örneğin mail.example.com:993 biçimi) kullanabilirsiniz. Bu alanı boş bırakırsanız, Moodle belirttiğiniz posta sunucusu türü için varsayılan bağlantı noktasını kullanacaktır.';
$string['defaultexpiration'] = 'Varsayılan adres bitiş periyodu';
$string['defaultexpiration_help'] = 'İşleyici tarafından bir e-posta adresi oluşturulduğunda, belirli bir süre sonra otomatik olarak dolacak şekilde ayarlanabilir, böylece artık kullanılamaz. Bir son kullanma süresinin belirlenmesi önerilir.';
$string['description'] = 'Açıklama';
$string['domain'] = 'E-posta alan adı';
$string['edit'] = 'Düzenle';
$string['edithandler'] = '{$a} işleyici için ayarları değiştir';
$string['editinghandler'] = 'Düzenleme {$a}';
$string['enabled'] = 'Etkinleştirildi';
$string['fixedenabled_help'] = 'Bu işleyicinin durumunu değiştiremezsiniz. Bunun nedeni, işleyiciye diğer işleyiciler tarafından gerekli olmasıdır.';
$string['fixedvalidateaddress'] = 'Gönderen adresini doğrula';
$string['fixedvalidateaddress_help'] = 'Bu işleyici için adres doğrulamasını değiştiremezsiniz. Bunun nedeni işleyicinin belirli bir ayarı gerektirmesi olabilir.';
$string['handlerdisabled'] = 'İletişim kurmaya çalıştığınız e-posta işleyicisi devre dışı bırakıldı. Şu anda ileti işlenemiyor.';
$string['incomingmailconfiguration'] = 'Gelen e posta yapılandırması';
$string['incomingmailserversettings'] = 'Gelen e posta sunucusu ayarları';
$string['incomingmailserversettings_desc'] = 'Moodle, uygun şekilde yapılandırılmış IMAP sunucularına bağlanabilir. IMAP sunucunuza bağlanmak için kullanılan ayarları burada belirtebilirsiniz.';
$string['invalid_recipient_handler'] = 'Geçerli bir ileti alındı ancak gönderen kimliği doğrulanamıyorsa, ileti e-posta sunucusunda saklanır ve kullanıcıya, kullanıcı profilindeki e-posta adresini kullanarak ulaşır. Kullanıcıya, orijinal iletinin doğruluğunu onaylamak için cevap verme şansı verilir.

Bu işleyici bu yanıtları işler.

E-posta istemcisi yapılandırması yanlışsa, kullanıcı yanlış bir e-posta adresinden yanıt verebileceğinden, bu işleyicinin gönderen doğrulamasını devre dışı bırakmak mümkün değildir.';
$string['invalid_recipient_handler_name'] = 'Geçersiz gönderenişleyici';
$string['invalidrecipientdescription'] = '"{$a->subject}" ileti, kullanıcı profilinizden farklı bir e-posta adresinden gönderildiği için kimliği doğrulanamadı. İletinin kimliği doğrulanmış olabilmesi için bu iletiyi yanıtlamanız gerekir.';
$string['invalidrecipientdescriptionhtml'] = '"{$a->subject}" ileti, kullanıcı profilinizden farklı bir e-posta adresinden gönderildiği için kimliği doğrulanamadı. İletinin kimliği doğrulanmış olabilmesi için bu iletiyi yanıtlamanız gerekir.';
$string['invalidrecipientfinal'] = '"{$a->subject}" ileti doğrulanamadı. Lütfen iletinizi profilinizdeki e-posta adresinden gönderdiğinizden emin olun.';
$string['mailbox'] = 'Posta kutusu adı';
$string['mailboxconfiguration'] = 'Posta kutusu yapılandırması';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'E posta ayarları';
$string['message_handlers'] = 'İleti işleçleri';
$string['messageinbound'] = 'Gelen İleti';
$string['messageinboundenabled'] = 'Gelen posta işlemeyi etkinleştir';
$string['messageinboundenabled_desc'] = 'İletilerin uygun bilgilerle gönderilmesi için gelen posta işleme etkinleştirilmelidir.';
$string['messageinboundgeneralconfiguration'] = 'Genel yapılandırma';
$string['messageinboundgeneralconfiguration_desc'] = 'Gelen ileti işleme, Moodle içindeki e-postaları almanıza ve işlersiniz. Bu, forum iletilerine e-posta cevapları göndermek veya bir kullanıcının kişisel dosyalarına dosya eklemek gibi uygulamalar içerir.';
$string['messageinboundhost'] = 'Gelen posta sunucusu';
$string['messageinboundhostoauth_help'] = 'XOAUTH2 kimlik doğrulamasını kullanarak IMAP sunucusuna erişmek için kullanılacak OAuth 2 hizmeti. Hizmet henüz mevcut değilse, onu oluşturmanız gerekecektir.';
$string['messageinboundhostpass'] = 'Parola';
$string['messageinboundhostpass_desc'] = 'Bu, servis sağlayıcınızın e-posta hesabınıza giriş yapmak için sağladığı paroladır.';
$string['messageinboundhostssl'] = 'SSL\'yi kullan';
$string['messageinboundhostssl_desc'] = 'Bazı posta sunucuları, Moodle ve sunucunuz arasındaki iletişimi şifreleyerek ek bir güvenlik seviyesini desteklemektedir. Sunucunuz destekliyorsa, bu SSL şifrelemesini kullanmanızı öneririz.';
$string['messageinboundhosttype'] = 'Sunucu türü';
$string['messageinboundhostuser'] = 'Kullanıcı adı';
$string['messageinboundhostuser_desc'] = 'Bu, servis sağlayıcınızın e-posta hesabınıza giriş yapmak için vermiş olduğu kullanıcı adıdır.';
$string['messageinboundmailboxconfiguration_desc'] = 'İletiler gönderildiğinde, bunlar adres +data@example.com biçimindedir. Moodle\'dan güvenilir bir şekilde adres üretmek için lütfen normalde @ işaretinden önce kullanacağınız adresi ve @ işaretinden sonraki alan adını ayrı ayrı belirtin. Örneğin, örnekte Posta Kutusu adı "adres" olur ve E-posta etki alanı "example.com" olurdu. Bu amaçla özel bir e-posta hesabı kullanmalısınız.';
$string['messageprocessingerror'] = 'Kısa bir süre önce "{$a->subject}" e-posta gönderdiniz ancak maalesef işleme koyulamadı.

Hatanın ayrıntıları aşağıda gösterilmektedir.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p> Kısa bir süre önce "{$a->subject}" e-posta gönderdiniz, ancak maalesef işleme koyulamadı. </p><p> Hata ayrıntıları aşağıda gösterilmiştir. </p><p> {$a->error} </p>';
$string['messageprocessingfailed'] = '"{$a->subject}" e-postası işlenemedi. Hata şu şekildedir: "{$a->message}".';
$string['messageprocessingfailedunknown'] = '"{$a->subject}" e-postası işlenemedi. Daha fazla bilgi için yöneticinize başvurun';
$string['messageprocessingsuccess'] = '{$a->plain}
Gelecekte bu bildirimleri almak istemiyorsanız, kişisel mesajlaşma tercihlerinizi tarayıcınızdan {$a->messagepreferencesurl} açarak düzenleyebilirsiniz.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p> Gelecekte bu bildirimlerin alınmasını istemiyorsanız, <a href="{$a->messagepreferencesurl}"> kişisel ileti tercihlerinizi düzenleyebilirsiniz </a>. </p>';
$string['messageprovider:invalidrecipienthandler'] = 'Gelen iletinin sizden geldiğini onaylayan ileti';
$string['messageprovider:messageprocessingerror'] = 'Gelen bir ileti işlenemediğinde uyarı';
$string['messageprovider:messageprocessingsuccess'] = 'Bir iletinin başarıyla işlendiğinin onaylanması';
$string['name'] = 'Adı';
$string['noencryption'] = 'Kapalı - Şifreleme yok';
$string['noexpiry'] = 'Bitiş yok';
$string['oldmessagenotfound'] = 'Bir iletiyi el ile doğrulamaya çalıştınız, ancak ileti bulunamadı. Bunun nedeni, zaten işleme koyulmuş olması ya da ileti sona erdiğinden kaynaklanabilir.';
$string['oneday'] = 'Bir gün';
$string['onehour'] = 'Bir saat';
$string['oneweek'] = 'Bir hafta';
$string['oneyear'] = 'Bir yıl';
$string['pluginname'] = 'Gelen ileti yapılandırması';
$string['privacy:metadata:coreuserkey'] = 'Alınan e-postayı doğrulamak için kullanıcı anahtarları';
$string['privacy:metadata:messagelist'] = 'Doğrulaması başarısız olan ve daha fazla yetkilendirme gerektiren mesaj tanımlayıcılarının bir listesi';
$string['privacy:metadata:messagelist:address'] = 'E-postanın gönderildiği adres';
$string['privacy:metadata:messagelist:messageid'] = 'Mesaj kimliği';
$string['privacy:metadata:messagelist:timecreated'] = 'Kaydın yapıldığı zaman';
$string['privacy:metadata:messagelist:userid'] = 'Mesajı onaylaması gereken kullanıcının kimliği';
$string['replysubjectprefix'] = 'Yeniden:';
$string['requirevalidation'] = 'Gönderen adresini doğrula';
$string['ssl'] = 'SSL (SSL sürümünü otomatik algıla)';
$string['sslv2'] = 'SSLv2 (SSL Sürüm 2\'yi Zorla)';
$string['sslv3'] = 'SSLv2 (SSL Versiyon 3\'ü Zorla)';
$string['taskcleanup'] = 'Doğrulanmamış gelen e-postaların temizlenmesi';
$string['taskpickup'] = 'Gelen e-posta alımı';
$string['tls'] = 'TLS (şifrelenmemiş kanal üzerinden protokol düzeyinde görüşme yoluyla başlatılan TLS; güvenli bağlantı başlatmanın ÖNERİ si)';
$string['tlsv1'] = 'TLSv1 (sunucuya TLS doğrudan sürüm 1.x bağlantısı)';
$string['validateaddress'] = 'Gönderenin e-posta adresini doğrula';
$string['validateaddress_help'] = 'Bir kullanıcıdan bir mesaj alındığında, Moodle gönderenin e-posta adresini kullanıcı profilindeki e-posta adresiyle karşılaştırarak mesajı doğrulamaya çalışır.

Gönderen kişi eşleşmezse, kullanıcıya e-postayı gerçekten gönderdiklerini doğrulamak için bir bildirim gönderilir.

Bu ayar devre dışı bırakılırsa, gönderenin e-posta adresi hiç kontrol edilmez.';
