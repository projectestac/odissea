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
 * Strings for component 'mnet', language 'tr', version '4.5'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (kendinden-imzalı)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (imzalı)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP şifresiz';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (kendinden-imzalı)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (imzalı)';
$string['aboutyourhost'] = 'Sunucunuz hakkında';
$string['accesslevel'] = 'Erişim seviyesi';
$string['addhost'] = 'Sunucu ekleyin';
$string['addnewhost'] = 'Yeni sunucu ekleyin';
$string['addtoacl'] = 'Erişim kontrolüne ekleyin';
$string['allhosts'] = 'Tüm sunucular';
$string['allhosts_no_options'] = 'Birden fazla sunucuya bakarken seçenekler sunulmaz';
$string['allow'] = 'İzin ver';
$string['allowaccess'] = 'Erişimi kabul et';
$string['applicationtype'] = 'Uygulama tipi';
$string['authfail_nosessionexists'] = 'Yetkilendirme hatası: mnet oturumu mevcut değil.';
$string['authfail_sessiontimedout'] = 'Yetkilendirme hatası: mnet oturumu zaman aşımına uğradı.';
$string['authfail_usermismatch'] = 'Yetkilendirme hatası: kullanıcı eşleşmiyor.';
$string['authmnetdisabled'] = 'MNet kimlik doğrulama eklentisi <strong>devre dışı</strong>.';
$string['badcert'] = 'Bu geçerli bir sertifika değil.';
$string['certdetails'] = 'Sertifika ayrıntıları';
$string['configmnet'] = 'MNet, bu sunucunun diğer sunucular veya hizmetlerle iletişimine izin verir.';
$string['couldnotgetcert'] = 'Burada sertifika yok: {$a}<br />{$a}<br />Sunucu çalışmıyor veya hatalı yapılandırıldı.';
$string['couldnotmatchcert'] = 'Bu, web sunucusu tarafından yayınlanan şimdiki sertifikayla eşleşmiyor.';
$string['courses'] = 'kurslar';
$string['courseson'] = 'kurslar';
$string['current_transport'] = 'Geçerli taşıma';
$string['currentkey'] = 'Mevcut ortak anahtar';
$string['databaseerror'] = 'Veritabanına ayrıntılar yazılamadı.';
$string['deleteaserver'] = 'Sunucu siliniyor';
$string['deletedhostinfo'] = 'Bu sunucu silindi. Eğer bu işlemi geri almak istiyorsanız, silindi durumunu "Hayır" durumuna getirin.';
$string['deletedhosts'] = 'Silinen sunucular: {$a}';
$string['deletehost'] = 'Sunucuyu silin';
$string['deletekeycheck'] = 'Bu anahtarı silmek istediğinizden kesinlikle emin misiniz?';
$string['deleteoutoftime'] = 'Bu anahtarı silecek olan 60 saniyelik pencerenizin süresi doldu. Lütfen yeniden başlatın.';
$string['deleteuserrecord'] = 'SSO ACL:{$a}[1\'den kullanıcı \'{$a}[0]\'için kaydı silin.';
$string['deletewrongkeyvalue'] = 'Bir hata oluştu. Eğer sunucunuzun SSL anahtarını silmeye çalışmadıysanız, kötücül bir saldırıya maruz kalmış olmanız mümkündür.';
$string['deny'] = 'Reddedin';
$string['denyaccess'] = 'Erişimi reddet';
$string['description'] = 'Açıklama';
$string['duplicate_usernames'] = 'Kullanıcı tablonuzda "mnethostid" ve \'\'kullanıcı adı\'\' sütunlarında bir dizin oluşturmayı başaramadık.<br />
Bu, kullanıcı tablonuzda </a> <a href="{$a}" target="_blank"> ikinci kullanıcı adlarınız varsa ortaya çıkar. Yükseltmeniz başarıyla tamamlanmalıdır.Yukarıdaki bağa tıkladığınızda bu sorunu çözmek için yönergelerin olduğu yeni bir pencere açılacaktır. Yükseltmenin sonunda bununla ilgilenebilirsiniz.<br />';
$string['enabled_for_all'] = '(Bu hizmet tüm sunucular için etkin kılındı)';
$string['enterausername'] = 'Lütfen sadece bir kullanıcı adı girin veya kullanıcı adlarını virgülle ayırarak girin.';
$string['error7020'] = 'Normalde bu hata eğer uzak site sizin için yanlış wwwroot ile bir kayıt oluşturduysa ortaya çıkar, örneğin http://www.yoursite.com yerine  http://yoursite.com. wwwroot unuz ile (config.php\'de belirtildiği gibi)uzak sitenin yöneticisine danışıp kendi sunucunuz için onun kaydını güncellemesini isteyin.';
$string['error7022'] = 'Uzak siteye gönderdiğiniz mesaj düzgün bir şekilde şifrelenmiş ancak imzalanmamıştır. Bu çok beklenmedik bir durum; böyle bir durumda muhtemelen bir hata kaydı oluşturmalısınız (söz konusu uygulama sürümleri vb. hakkında mümkün olduğunca fazla bilgi vererek).';
$string['error7023'] = 'Uzak site  sizin siteniz için kaydında bulunan tüm anahtarlarla mesajınızın şifresini açmaya çalıştı. Hepsi başarısız oldu. Bu sorunu uzak siteye el ile anahtarı tekrar girerek aşabilirsiniz. Birkaç aydır uzak site ile iletişiminiz kesilmediyse böyle bir şeyin olması muhtemel değildir.';
$string['error7024'] = 'Uzak siteye şifrelenmemiş bir mesaj gönderiyorsunuz, ancak uzak site sizin sitenizden gelen şifrelenmemiş iletişimi kabul etmiyor. Bu çok beklenmedik bir durum; böyle bir durumda muhtemelen bir hata kaydı oluşturmalısınız (söz konusu uygulama sürümleri vb. hakkında mümkün olduğunca fazla bilgi vererek).';
$string['error7026'] = 'Sizin mesajınızın imzalandığı anahtar, sizin sunucunuz için uzak sunucunun dosyada tuttuğundan farklıdır. Ayrıca, uzak sunucu şu anki anahtarınızı getirme girişiminde bulundu ancak başarısız oldu. Lütfen uzak sunucuya el ile anahtarı  tekrar girip yeniden deneyin.';
$string['error709'] = 'Uzak site sizden bir SSL anahtarı almada başarısız oldu.';
$string['eventaccesscontrolcreated'] = 'Erişim kontrolü oluşturuldu';
$string['eventaccesscontrolupdated'] = 'Erişim kontrolü güncellendi';
$string['expired'] = 'Bu anahtarın geçerlilik süresi ...doldu';
$string['expires'] = '-e kadar geçerli';
$string['expireyourkey'] = 'Bu anahtarı silin';
$string['expireyourkeyexplain'] = 'Moodle otomatik olarak anahtarlarınızı 28 günde bir (varsayılan şekilde) döndürür ancak bu anahtarı herhangi bir zamanda <em>manually</em> sona erdirme seçeneğine sahipsiniz. Bu yalnızca eğer bu anahtarın uzlaştırıldığına inanırsanız yararlı olacaktır. Anında yerine otomatik olarak başkası konulacaktır.<br />Bu anahtarı silmek, siz, her bir yöneticiyle el ile iletişime geçip onlara yeni anahtarınızı sağlayıncaya dek diğer Moodle\'ların sizinle iletişim kurmasını olanaksız hale getirecektir.';
$string['exportfields'] = 'Dışarı aktarılacak alanlar';
$string['failedaclwrite'] = 'Kullanıcı \'{$a}\' için MNET erişim denetim listesine yazmada başarısız oldu.';
$string['findlogin'] = 'Giriş bul';
$string['forbidden-function'] = 'RPC için bu işlev etkin kılınmamış.';
$string['forbidden-transport'] = 'Kullanmayı denediğiniz taşıma metoduna izin verilmiyor.';
$string['forcesavechanges'] = 'Değişiklikleri saklamaya zorlayın';
$string['helpnetworksettings'] = 'MNet iletişimini yapılandırın';
$string['hidelocal'] = 'Yerel kullanıcıları gizleyin';
$string['hideremote'] = 'Uzak kullanıcıları gizleyin';
$string['host'] = 'Sunucu';
$string['hostcoursenotfound'] = 'Sunucu ya da kurs bulunamadı';
$string['hostdeleted'] = 'Sunucu silindi';
$string['hostexists'] = 'Bu ana bilgisayar adına sahip bir ana bilgisayar için zaten bir kayıt var. (It may have been deleted.) <a href="{$a}"]>Kaydı düzenleyin</a>';
$string['hostlist'] = 'Ağ sunucularının listesi';
$string['hostname'] = 'Sunucu adı';
$string['hostnamehelp'] = 'Uzak sunucunun tam alan adı, örnek: www.ornek.com';
$string['hostnotconfiguredforsso'] = 'Bu sunucu uzaktan oturum açmak için yapılandırılmadı.';
$string['hostsettings'] = 'Sunucu (host) ayarları';
$string['http_self_signed_help'] = 'Uzak sunucuda kendinden imzalı bir SSL kullanarak bağlantılara izin verin.';
$string['http_verified_help'] = 'Uzak sunucu üzerinde(https değil de http üzerinde) PHP\'de doğrulanmış bir SSL sertifikası kullanarak bağlantılara izin verin.';
$string['https_self_signed_help'] = 'Http üzerinden sunucuda kendinden imzalı PHP\'de bir DIY SSL kullanarak bağlantılara izin verin.';
$string['https_verified_help'] = 'Uzak sunucuda doğrulanmış bir SSL Sertifikası kullanarak bağlantılara izin verin.';
$string['id'] = 'ID';
$string['idhelp'] = 'Bu değer otomatikman atandı ve değiştirilemez';
$string['importfields'] = 'İçeri alınacak alanlar';
$string['inspect'] = 'Kontrol etmek';
$string['installnosuchfunction'] = 'Kodlama hatası! ({$a->file}) dosyasından ({$a->method}) mnet xmlprc fonksiyonu kurulmaya çalışılıyor ve dosya bulunamıyor!';
$string['installnosuchmethod'] = 'Kodlama hatası! ({$a->method}) mnet xmlrpc metodu ({$a->class}) sınıfının üstüne kurulmaya çalışılıyor ve sınıf bulunamıyor.';
$string['installreflectionclasserror'] = 'Kodlama hatası! \'{$a->class}\' sınıfı, \'{$a->method}\' metodunda Mnet denetimi başarısız oldu. Yardımcı olabilecek orjinal hata mesajı: \'{$a->error}\'';
$string['installreflectionfunctionerror'] = '';
$string['invalidaccessparam'] = 'Geçersiz erişim parametresi';
$string['invalidactionparam'] = 'Geçersiz eylem parametresi';
$string['invalidhost'] = 'Geçerli bir sunucu tanımlayıcısı girmelisiniz';
$string['invalidpubkey'] = 'Bu geçerli bir SSL anahtarı değil.';
$string['invalidurl'] = 'Geçersiz URL parametresi';
$string['ipaddress'] = 'IP adresi';
$string['is_in_range'] = 'IP adresi &nbsp;<code>{$a}</code>&nbsp; geçerli, güvenilir bir sunucuyu gösteriyor.';
$string['ispublished'] = '{$a} bu hizmeti sizin için etkin kılmıştır.';
$string['issubscribed'] = '{$a} sunucunuzdan bu hizmete abone oluyor.';
$string['keydeleted'] = 'Anahtarınız başarıyla silindi ve değiştirildi.';
$string['keydeletedcancelled'] = 'Anahtarda değişiklik yapılmadı.';
$string['keymismatch'] = 'Bu sunucu için elinizdeki açık anahtar şu anda yayınlamakta olduğu açık anahtardan farklıdır.';
$string['last_connect_time'] = 'Son bağlantı zamanı';
$string['last_connect_time_help'] = 'Bu sunucuya son bağlantı zamanı.';
$string['last_transport_help'] = 'Bu konak bilgisayara son bağlantı için kullandığınız taşıma';
$string['leavedefault'] = 'Yerine varsayılan ayarları kullanın';
$string['listservices'] = 'Servisleri listele';
$string['loginlinkmnetuser'] = '<br/>Uzak Moodle Ağı kullanıcıysanız, <a href="{$a}">e-posta adresinizi doğrulayabilir</a> ve giriş sayfanıza yönlendirilebilirsiniz.<br />';
$string['logs'] = 'kayitlar';
$string['managemnetpeers'] = 'Eşleri yönet';
$string['method'] = 'Metod';
$string['methodhelp'] = '{$a} için metod yardımı';
$string['methodsavailableonhost'] = '{$a} için uygun metodlar';
$string['methodsavailableonhostinservice'] = '{$a->service} için {$a->host} içinde yöntemler mevcut';
$string['methodsignature'] = '{$a} için yöntem imzası';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = '(en fazla) 3 dizgiyi bitiştirip sonucu girin';
$string['mnet_session_prohibited'] = 'Ana sunucunuzdaki kullanıcıların şu anda {$a}\'da dolaşıma izni yoktur.';
$string['mnetdisabled'] = 'Moodle Ağı <strong>etkin değil</strong>.';
$string['mnetidprovider'] = 'MNET ID Sağlayıcı';
$string['mnetidproviderdesc'] = 'Eğer bir önceki giriş denemendeki kullanıcı adıyla aynı e-posta adresini sağlamışsanız, bu özelliği kullanarak giriş yapabileceğiniz bir link alabilirsiniz.';
$string['mnetidprovidermsg'] = '{$a} sağlayıcınızla giriş yapmanız gerekiyor';
$string['mnetidprovidernotfound'] = 'Üzgünüz, daha fazla bilgi bulunamadı.';
$string['mnetpeers'] = 'Eşler';
$string['mnetservices'] = 'Hizmetler';
$string['mnetsettings'] = 'MNet ayarları';
$string['moodle_home_help'] = 'Uzak ana bilgisayardaki MNet uygulamasının ana sayfasına giden yol, örneğin /moodle/.';
$string['name'] = 'İsim';
$string['net'] = 'Ağ';
$string['networksettings'] = 'Ağ ayarları';
$string['never'] = 'Hiçbir zaman';
$string['noaclentries'] = 'SSO erişim kontrol listesinde hiç kayıt yok';
$string['noaddressforhost'] = 'Üzgünüz, ama bu sunucu adı başkası tarafından alınmış! ({$a})';
$string['nocurl'] = 'PHP cURL kütüphanesi kurulmamış';
$string['nolocaluser'] = 'Uzak kullanıcı için yerel kayıt yok ve bu ana bilgisayar kullanıcıları otomatik olarak oluşturmayacağı için oluşturulamadı.  Lütfen yöneticinizle iletişime geçin!';
$string['nomodifyacl'] = 'MNet erişim kontrol listesini değiştirmenize izin verilmez.';
$string['nonmatchingcert'] = 'Sertifikanın konusu: <br /><em>{$a->subject}</em><br />geldiği ana bilgisayarla eşleşmiyor:<br /><em>{$a->ana bilgisayar }</em>.';
$string['nopubkey'] = 'Açık anahtara erişmede bir sorun çıktı.<br />Sunucu Moodle ağına izin vermiyor ya da anahtar geçersiz olabilir.';
$string['nosite'] = 'Site düzeyinde kurs bulunamadı';
$string['nosuchfile'] = '{$a} dosyası/işlevi mevcut değil.';
$string['nosuchfunction'] = 'İşlevin yeri belirlenemedi, ya da işlev RPC için engellendi.';
$string['nosuchmodule'] = 'İşlev adresi yanlış olduğundan yeri belirlenemedi. Lütfen mod/modulename/lib/functionname format kullanın.';
$string['nosuchpublickey'] = 'İmza doğrulaması için açık anahtar alınamadı.';
$string['nosuchservice'] = 'Bu sunucu üzerinde RPC servisi çalışmıyor.';
$string['nosuchtransport'] = 'Bu ID ile bir taşıyıcı yok.';
$string['notBASE64'] = 'Bu ifade, Base64 biçiminde değil. Geçerli bir anahtar değil.';
$string['notPEM'] = 'Bu anahtar PEM biçiminde değil. Çalışmaz.';
$string['not_in_range'] = 'IP adresi  <code>{$a}</code>  geçerli güvenli bir sunucuyu temsil etmez.';
$string['notenoughidpinfo'] = 'Kimlik sağlayıcınız hesabınızı oluşturabilmemiz ya da güncelleyebilmemiz için yeterli bilgiyi içermiyor. Üzgünüz!';
$string['notinxmlrpcserver'] = 'Mnet uzak istemcisine XMLRPC sunucu yürütmesini durdurup erişmeyi deneyin';
$string['notmoodleapplication'] = 'UYARI: Bu bir Moodle uygulaması değil, bu yüzden bazı kontrol yöntemleri düzgün çalışmayabilir.';
$string['notpermittedtojump'] = 'Bu Moodle merkezinden uzak oturum başlatma izniniz yok.';
$string['notpermittedtojumpas'] = 'Misafir kullanıcı olarak giriş yaptığınız için sunucuda oturum başlatamazsınız.';
$string['notpermittedtoland'] = 'Uzak oturum başlatma izniniz yok.';
$string['off'] = 'Kapalı';
$string['on'] = 'Açık';
$string['options'] = 'Seçenekler';
$string['peerprofilefielddesc'] = 'Burada gönderilecek profil alanları ve oluşturduğunuz yeni kullanıcılar için genel ayarlarınızı düzenleyebilirsiniz.';
$string['permittedtransports'] = 'İzin verilen taşımalar';
$string['phperror'] = 'İç bir PHP hatası isteğinizin yerine getirilmesini engelledi.';
$string['position'] = 'Durum';
$string['postrequired'] = 'Silme işlevi POST isteği gerektirir.';
$string['privacy:metadata'] = 'MNet eklentisi herhangi bir kişisel veri saklamaz.';
$string['profileexportfields'] = 'Gönderilecek alanlar';
$string['profilefielddesc'] = 'Yeni kullanıcı hesabı oluşturulduğunda veya güncellendiğinde MNet üzerinden gönderilen ya da alınan profil alanlarının listesini düzenleyebilirsiniz. Bunu her MNet kısmı için ayrı ayrı düzenleyebilirsiniz. Dikkat edin gösterilen alanlar isteğe bağlı olmadan her zaman gönderilir: {$a}';
$string['profilefields'] = 'Profil alanları';
$string['profileimportfields'] = 'İçeri aktarılacak alanlar';
$string['promiscuous'] = 'karmakarışık';
$string['publickey'] = 'Açık anahtar';
$string['publickey_help'] = 'Bu açık anahtar uzak sunucudan otomatik olarak alındı.';
$string['publickeyrequired'] = 'Bir açık anahtar tanımlamalısınız';
$string['publish'] = 'Yayınlayın';
$string['reallydeleteserver'] = 'Sunucuyu silmek istediğinizden emin misiniz';
$string['receivedwarnings'] = 'Aşağıdaki uyarılar alındı';
$string['recordnoexists'] = 'Kayıt mevcut değil.';
$string['reenableserver'] = 'Hayır - bu sunucuyu tekrar etkin kılmak için bunu seçin';
$string['registerallhosts'] = 'Bütün sunucuları kaydedin (<em>Merkez modu</em>)';
$string['registerallhostsexplain'] = 'Size otomatik olarak bağlanmaya çalışan tüm ana bilgisayarları kaydetmeyi seçebilirsiniz.  Bu, size bağlanan ve genel anahtarınızı isteyen herhangi bir MNet sitesi için ana bilgisayar listenizde bir kaydın görüneceği anlamına gelir.<br />Aşağıdaki hizmetleri \'Tüm ana bilgisayarlar\' için yapılandırma seçeneğine sahipsiniz ve orada bazı hizmetleri etkinleştirerek, ayrım gözetmeksizin herhangi bir uzak sunucuya hizmet sağlayabilir.';
$string['registerhostsoff'] = 'Şu an <b>kapalı</b> olan tüm sunucuları kaydet';
$string['registerhostson'] = 'Şu an <b>açık</b> olan tüm sunucuları kaydet';
$string['remotecourses'] = 'Uzak kurslar';
$string['remotehost'] = 'Uzak sunucu';
$string['remotehosts'] = 'Uzak sunucular';
$string['remoteuser'] = 'Uzak {$a->remotetype} kullanıcısı';
$string['remoteuserinfo'] = 'Profil <a href="{$a->remoteurl}">{$a->remotename}</a> adresinden alındı';
$string['requiresopenssl'] = 'Ağ, OpenSSL eklentisini gerektirir';
$string['restore'] = 'Geri yükleyin';
$string['returnvalue'] = 'Değer döndür';
$string['reviewhostdetails'] = 'Sunucu ayrıntılarını inceleyin';
$string['reviewhostservices'] = 'Sunucu hizmetlerini inceleyin';
$string['selectaccesslevel'] = 'Lütfen listeden bir erişim seviyesi seçin.';
$string['selectahost'] = 'Lütfen bir uzak Moodle sunucusu seçin.';
$string['service'] = 'Servis adı';
$string['serviceid'] = 'Servis ID';
$string['servicesavailableonhost'] = '{$a} için uygun servisler';
$string['serviceswepublish'] = '{$a} için duyurduğumuz hizmetler';
$string['serviceswesubscribeto'] = '{$a} üzerinde abonesi olduğumuz hizmetler';
$string['settings'] = 'Ayarlar';
$string['showlocal'] = 'Yerel kullanıcıları gösterin';
$string['showremote'] = 'Uzak kullanıcıları gösterin';
$string['ssl_acl_allow'] = 'TOA ACL: \'{$a->user}\' kullanıcısına \'{$a->host}\' üzerinden izin ver';
$string['ssl_acl_deny'] = 'TOA ACL: \'{$a->user}\' kullanıcısını \'{$a->host}\' adresinden reddet';
$string['sslverification'] = 'SSL doğrulama';
$string['sslverification_help'] = 'Bu seçenek, HTTPS kullanarak bir eşe bağlanırken güvenlik düzeyini yapılandırmanıza izin verir.

* Hiçbiri: güvenlik seviyesi yok
* Yalnızca ana makineyi doğrula: SSL sertifikasının alan adını doğrular
* Ana makineyi ve bağlı olduklarını doğrula (önerilir): SSL sertifikasının alan adını ve yayıncısını doğrular';
$string['ssoaccesscontrol'] = 'SSO erişim kontrolü';
$string['ssoacldescr'] = 'Uzak MNet ana makinelerinden belirli kullanıcılara erişim izni vermek/reddetmek için bu sayfayı kullanın.  Bu, uzak kullanıcılara SSO hizmetleri sunarken işlevseldir.  <em>Yerel</em> kullanıcılarınızın diğer MNet ana makinelerinde gezinme yeteneğini kontrol etmek için, onlara <em>mnetlogintoremote</em> yeteneği vermek üzere roller sistemini kullanın.';
$string['ssoaclneeds'] = 'Bu işlevselliğin çalışması için Ağ\'ın açık olması ve MNet kimlik doğrulama eklentisinin etkinleştirilmiş olması gerekir.';
$string['strict'] = 'Sıkı';
$string['subscribe'] = 'Abone olun';
$string['system'] = 'Sistem';
$string['testclient'] = 'MNet test istemcisi';
$string['testtrustedhosts'] = 'Bir adresi sınayın';
$string['testtrustedhostsexplain'] = 'Adresin güvenilir olup olmadığını sınamak için bir IP girin.';
$string['theypublish'] = 'Yayınlayanlar';
$string['theysubscribe'] = 'Takip edenler';
$string['transport_help'] = 'Bu seçenekler terstir, o yüzden, eğer sunucunuz da imzalı bir SSL sertifikasına sahipse, uzak bir sunucuyu imzalı bir SSL sertifikası kullanmaya zorlayabilirsiniz.';
$string['trustedhosts'] = 'XML-RPC sunucuları';
$string['trustedhostsexplain'] = '<p>Güvenilir konak bilgisayarların mekanizması belli makinelerin Moodle API\'nin herhangi bir bölümüne XML-RPC üzerinden arama yürütmesine izin verir. Bu, senaryoların Moodle davranışını denetlemesi için mevcuttur ve etkin kılınması oldukça tehlikeli bir seçenek olabilir. Eğer şüpheliyseniz, bunu kapalı tutun.</p>
<p><strong>Bu, herhangi bir standart MNet özelliği için gerekli değildir!</strong> Yalnızca ne yaptığınızı biliyorsanız açın.</p>
<p>Bunu etkin kılmak için, her bir hata bir tane olacak şekilde, IP adreslerinin ya da ağların listesini girin. Bazı örnekler:</p> Yerel sunucunuz:<br />127.0.0.1<br /> Yerel konak bilgisayarınız (bir ağ bloku ile):<br />127.0.0.1/32<br /> Yalnızca IP adresi olan sunucu 192.168.0.7:<br />192.168.0.7/32<br />
IP adresi  192.168.0.1 ve 92.168.0.255:<br />192.168.0.0/24<br /> arasında olan herhangi bir sunucu. Herhangi bir sunucu:<br />192.168.0.0/0<br /> Belli ki, son örnek <strong>not</strong> önerilen bir yapılandırmadır.';
$string['turnitoff'] = 'Kapat';
$string['turniton'] = 'Aç';
$string['type'] = 'Tip';
$string['unknown'] = 'Bilinmeyen';
$string['unknownerror'] = 'Anlaşma sırasında bilinmeyen bir hata oluştu.';
$string['usercannotchangepassword'] = 'Uzak bir kullanıcı olduğunuz için parolanızı değiştiremezsiniz.';
$string['userchangepasswordlink'] = '<br/><a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a> sağlayıcısındaki parolanızı değiştirebilirsiniz.';
$string['usernotfullysetup'] = 'Kullanıcı hesabınız tamamlamamış. <a href="{$a}">Sağlayıcınıza geri dönün</a> ve profilinizin tamamlandığından emin olun. İşlemin tamamlanması için oturumu kapatıp açmanız gerekebilir.';
$string['usersareonline'] = 'Uyarı: O sunucudan {$a} kullanıcıları şu anda sizin sitenize girmiş durumdalar.';
$string['validated_by'] = 'Ağ tarafından doğrulandı: &nbsp;<code>{$a}</code>';
$string['verifyhostandpeer'] = 'Ana makineyi ve bağlı olduklarını doğrula';
$string['verifyhostonly'] = 'Yalnızca ana makineyi doğrula';
$string['verifysignature-error'] = 'İmza doğrulamasında hata oluştu.';
$string['verifysignature-invalid'] = 'İmza doğrulaması başarısız oldu. Görünüşe göre saltveri sizin tarafınızdan imzalanmamış.';
$string['version'] = 'Sürüm';
$string['warning'] = 'Uyarı';
$string['wrong-ip'] = 'IP adresiniz, bizdeki kayıtlarla eşleşmiyor.';
$string['xmlrpc-missing'] = 'Bu özelliği kullanabilmek için PHP, XML-RPC kurulumunu gerektirir.';
$string['yourhost'] = 'Sunucunuz';
$string['yourpeers'] = 'Eşleriniz';
