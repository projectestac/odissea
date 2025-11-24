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
 * Strings for component 'webservice', language 'tr', version '4.5'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Erişim kontrolü istisnası';
$string['actwebserviceshhdr'] = 'Etkin web servis protokolleri';
$string['addaservice'] = 'Servis ekle';
$string['addcapabilitytousers'] = 'Kullanıcıların yetkisini kontrol et';
$string['addcapabilitytousersdescription'] = 'Kullanıcıların iki yeteneği olmalıdır - webservice:createtoken ve kullanılan protokollere uyan bir yetenek, örneğin webservice/rest:use, webservice/soap: use. Bunu başarmak için, izin verilen uygun yeteneklere sahip bir web hizmetleri rolü oluşturun ve bir sistem rolü olarak web hizmetleri kullanıcılarına atayın.';
$string['addexternalservice'] = 'Harici hizmet ekle';
$string['addfunction'] = 'İşlev ekle';
$string['addfunctionhelp'] = 'Servise eklenecek işlevi seçin.';
$string['addfunctions'] = 'İşlevleri ekle';
$string['addfunctionsdescription'] = 'Yeni oluşturulmuş servis için gerekli işlevleri seç';
$string['addrequiredcapability'] = 'Gerekli yeteneği atayın / atamasını kaldırın';
$string['addservice'] = 'Yeni servis ekle: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Şu servise işlev ekleyin " {$a}"';
$string['allusers'] = 'Tüm kullanıcılar';
$string['apiexplorer'] = 'API gezgini';
$string['apiexplorernotavalaible'] = 'API gezgini henüz ulaşılabilir değil';
$string['arguments'] = 'Argümanlar';
$string['authmethod'] = 'Kimlik doğrulama yöntemi';
$string['callablefromajax'] = 'AJAX\'den çağrı yapılabilir';
$string['cannotcreatetoken'] = '{$a} hizmeti için web hizmeti simgesi oluşturmak için izniniz yok.';
$string['cannotgetcoursecontents'] = 'Kurs içeriği alınamadı';
$string['checkusercapability'] = 'Kullanıcı yetkisini kontrol et';
$string['checkusercapabilitydescription'] = 'Kullanıcı, kullanılan protokollere göre uygun yeteneklere sahip olmalıdır, örneğin webservice/soap:use, webservice/soap: use. Bunu başarmak için, izin verilen protokol özelliklerine sahip bir web hizmetleri rolü oluşturun ve bir sistem rolü olarak web hizmetleri kullanıcılarına atayın.';
$string['configwebserviceplugins'] = 'Güvenlik nedenleriyle, yalnızca kullanımda olan protokoller etkinleştirilmelidir.';
$string['context'] = 'Bağlam';
$string['createservicedescription'] = 'Bir hizmet, bir dizi web hizmeti işlevidir. Kullanıcının yeni bir servise girmesine izin vereceksin. <strong> Hizmet ekle </strong> sayfasında \'Etkinleştir\' ve \'Yetkili kullanıcıların\' seçeneklerini kontrol edin. \'Gerekli yetenek yok\' seçeneğini belirleyin.';
$string['createserviceforusersdescription'] = 'Servis, bir dizi web servisi fonksiyonudur. Kullanıcıların yeni bir servise erişmesine izin vereceksiniz.  <strong>Servis ekle</strong> sayfasındaki \'Etkinleştir\' seçeneğini işaretleyin ve \'Yetkili kullanıcılar\' seçeneğinin işaretini kaldırın. \'Gerekli yetkinlik yok\' seçeneğini seçin.';
$string['createtoken'] = 'Dizgecik oluştur';
$string['createtokenforuser'] = 'Bir kullanıcı için dizgecik oluştur';
$string['createtokenforuserdescription'] = 'Web servis kullanıcısı için dizgecik oluştur.';
$string['createuser'] = 'Özel bir kullanıcı oluştur';
$string['createuserdescription'] = 'Bir web hizmetleri kullanıcısının Moodle\'ı kontrol eden sistemi temsil etmesi gereklidir.';
$string['criteriaerror'] = 'Bir kriter üzerinde arama yapma izniniz yok.';
$string['default'] = 'Varsayılan değer "{$a}"';
$string['deleteaservice'] = 'Servisi sil';
$string['deleteservice'] = 'Servisi sil: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Bir hizmetin silinmesi, bu hizmetle ilgili token\'ların da silinmesine neden olur. "{$a}" harici hizmetini gerçekten silmek istiyor musunuz?';
$string['deletetoken'] = 'Jetonu sil';
$string['deletetokenconfirm'] = '<strong> {$a-> service} </strong> hizmetinde <strong> {$a->user} </strong> için bu web hizmeti simgesini gerçekten silmek istiyor musunuz?';
$string['deprecated'] = 'Kullanım dışı';
$string['disabledwarning'] = 'Tüm web hizmeti protokolleri devre dışı bırakılır. "Web hizmetlerini etkinleştir" ayarı Gelişmiş özellikler bölümünde bulunabilir.';
$string['doc'] = 'Dokümantasyon';
$string['docaccessrefused'] = 'Bu dizgecik dokümanını görme izniniz yok';
$string['downloadfiles'] = 'Dosya indirebilir';
$string['downloadfiles_help'] = 'Etkinleştirilirse, her kullanıcı güvenlik anahtarları ile dosya indirebilir. Tabi ki indirmekle izinli oldukları dosyalar ile sınırlıdırlar.';
$string['editaservice'] = 'Servisi düzenle';
$string['editexternalservice'] = 'Harici hizmeti düzenle';
$string['editservice'] = 'Servisi düzenle: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Etkin';
$string['enabledocumentation'] = 'Geliştirici dokümantasyonunu etkinleştir';
$string['enabledocumentationdescription'] = 'Ayrıntılı web servis dokümantasyonu etkin protokoller için kullanılabilir durumda.';
$string['enableprotocols'] = 'Protokolleri etkinleştir';
$string['enableprotocolsdescription'] = 'En az bir protokol etkinleştirilmelidir. Güvenlik nedenleriyle, yalnızca kullanılacak protokollerin etkinleştirilmesi gerekir.';
$string['enablews'] = 'Web servislerini etkinleştir';
$string['enablewsdescription'] = 'Web hizmetleri, Gelişmiş özellikler\'de etkinleştirilmelidir.';
$string['entertoken'] = 'Bir güvenlik anahtarı/dizgeciği girin:';
$string['error'] = 'Hata: {$a}';
$string['errorcatcontextnotvalid'] = 'Kategorideki bağlamlarda işlevler yürütemezsiniz (kategori kimliği: {$a->catid}). Bağlam hata iletisi: {$a->message}';
$string['errorcodes'] = 'Hata mesajı';
$string['errorcoursecontextnotvalid'] = 'Kurs bağlamında (course id:{$a->courseid}) işlevleri yürütemezsiniz. Bağlam hata iletisi şöyledir: {$a->message}';
$string['errorinvalidparam'] = '"{$a}" parametresi geçersiz.';
$string['errornotemptydefaultparamarray'] = '\'{$a}\' adlı web hizmeti tanımı parametresi tek veya çoklu bir yapıdır. Varsayılan değer yalnızca boş dizide olabilir. Web hizmeti açıklamasını kontrol edin.';
$string['erroroptionalparamarray'] = '\'{$a}\' adlı web hizmeti açıklama parametresi, tekli veya çoklu bir yapıdır. VALUE_OPTIONAL olarak ayarlanamaz. Web hizmeti açıklamasını kontrol edin.';
$string['eventwebservicefunctioncalled'] = 'Web hizmeti işlevi çağrıldı';
$string['eventwebserviceloginfailed'] = 'Web servis oturum açma başarısız';
$string['eventwebserviceservicecreated'] = 'Web hizmeti oluşturuldu';
$string['eventwebserviceservicedeleted'] = 'Web hizmeti silindi';
$string['eventwebserviceserviceupdated'] = 'Web hizmeti güncellendi';
$string['eventwebserviceserviceuseradded'] = 'Web hizmeti kullanıcısı eklendi';
$string['eventwebserviceserviceuserremoved'] = 'Web hizmeti kullanıcısı kaldırıldı';
$string['eventwebservicetokencreated'] = 'Web servis dizgeciği oluşturuldu';
$string['eventwebservicetokensent'] = 'Web servis dizgeciği gönderildi';
$string['execute'] = 'Çalıştır';
$string['executewarnign'] = 'UYARI: Çalıştır düğmesine basarsanız, veritabanınız değiştirilecek ve değişiklikler otomatik olarak geri alınamayacaktır!';
$string['externalservice'] = 'Harici servis';
$string['externalservicefunctions'] = 'Harici servis işlevleri';
$string['externalservices'] = 'Harici servisler';
$string['externalserviceusers'] = 'Harici servis kullanıcıları';
$string['failedtolog'] = 'Oturum açılamadı';
$string['filenameexist'] = 'Dosya adı zaten var: {$a}';
$string['forbiddenwsuser'] = 'Doğrulanmamış, silinmiş, askıya alınmış veya konuk kullanıcı için simge oluşturulamıyor.';
$string['function'] = 'İşlev';
$string['functions'] = 'İşlevler';
$string['generalstructure'] = 'Genel yapı';
$string['information'] = 'Bilgi';
$string['installexistingserviceshortnameerror'] = 'Kısa adı "{$a}" olan bir web servisi zaten var. Bu kısa adla farklı bir web hizmetini kuramaz/güncelleştiremeyiz.';
$string['installserviceshortnameerror'] = 'Kodlama hatası: "{$a}" hizmet kısa adı yalnızca alfasayısal karakterler (harfler ve sayılar), alt çizgi (_), kısa çizgi (-) veya nokta (.) İçerebilir';
$string['invalidextparam'] = 'Geçersiz harici api parametresi: {$a}';
$string['invalidextresponse'] = 'Geçersiz harici api yanıtı: {$a}';
$string['invalidiptoken'] = 'Geçersiz dizgecik - IP\'niz desteklenmiyor';
$string['invalidtimedtoken'] = 'Geçersiz dizgecik - dizgecik zaman aşımına uğradı';
$string['invalidtoken'] = 'Geçersiz dizgecik - dizgecik bulunamadı';
$string['iprestriction'] = 'IP sınırlaması';
$string['iprestriction_help'] = 'Kullanıcı listelenen IP\'lerden (virgülle ayrılmış olarak) web hizmetini aramalıdır.';
$string['key'] = 'Anahtar';
$string['keyshelp'] = 'Anahtarla harici uygulamalardan Moodle hesabınıza ulaşmanızı sağlar.';
$string['loginrequired'] = 'Oturum açan kullanıcılarla sınırlandı';
$string['manageprotocols'] = 'Protokolleri yönet';
$string['managetokens'] = 'Dizgecikleri yönet';
$string['missingcaps'] = 'Eksik yetenekler';
$string['missingcaps_help'] = 'Kullanıcının sahip olmadığı hizmet tarafından beyan edilen yetenekler listesi. Bu yetenekler olmadan bazı hizmet işlevleri kullanılamayabilir.';
$string['missingpassword'] = 'Kayıp şifre';
$string['missingrequiredcapability'] = '{$a} yeteneği gerekiyor.';
$string['missingusername'] = 'Kayıp kulllanıcı adı';
$string['missingversionfile'] = 'Kod çözme hatası: {$a} bileşeni için version.php dosyası eksik';
$string['nameexists'] = 'Bu ad başka bir hizmet tarafından zaten kullanılıyor';
$string['nocapabilitytouseparameter'] = 'Kullanıcının {$a} parametresini kullanma yeteneği yok.';
$string['nofunctions'] = 'Servisin fonksiyonu yok.';
$string['norequiredcapability'] = 'Gerekli yetki yok';
$string['notoken'] = 'Dizgecik listesi boş.';
$string['onesystemcontrolling'] = 'Moodle\'ı kontrol etmek için harici bir sisteme izin ver';
$string['onesystemcontrollingdescription'] = 'Aşağıdaki adımlar, harici bir sistemin Moodle ile etkileşime girmesine izin vermek için Moodle web servislerini kurmanıza yardımcı olur. Buna bir simge (güvenlik anahtarı) kimlik doğrulama yöntemi kurma dahildir.';
$string['onlyseecreatedtokens'] = 'Yalnızca kendi oluşturduğunuz token\'ları görüntüleyebilirsiniz.';
$string['operation'] = 'İşlem';
$string['optional'] = 'İsteğe bağlı';
$string['passwordisexpired'] = 'Şifre süresi doldu';
$string['phpparam'] = 'XML-RPC (PHP yapısı)';
$string['phpresponse'] = 'XML-RPC (PHP yapısı)';
$string['postrestparam'] = 'REST için PHP kodu (POST isteği)';
$string['potusers'] = 'Yetkilendirilmiş kullanıcılar yok';
$string['potusersmatching'] = 'Eşleşen yetkilendirilmiş kullanıcılar yok';
$string['print'] = 'Tümünü yazdır';
$string['privacy:metadata'] = 'WebService API herhangi bir veri depolamaz';
$string['protocol'] = 'Protokol';
$string['removefunction'] = 'Sil';
$string['removefunctionconfirm'] = '"{$a->service}" servisinden "{$a->function}" işlevini gerçekten silmek istediğinizden emin misiniz?';
$string['requireauthentication'] = 'Bu işlev, xxx izni için yetki gerektirir.';
$string['required'] = 'Gerekli';
$string['requiredcapability'] = 'Gerekli yetki';
$string['requiredcapability_help'] = 'Ayarlanırsa, yalnızca gerekli yetkiye sahip kullanıcılar servise erişebilir.';
$string['requiredcaps'] = 'Gerekli yetkiler';
$string['resettokencomplete'] = 'Seçilen belirteç sıfırlandı';
$string['resettokenconfirm'] = '<strong> {$a->service} </strong> hizmetinde <strong> {$a->user} </strong> için bu web hizmeti anahtarını gerçekten sıfırlamak istiyor musunuz?';
$string['resettokenconfirmsimple'] = 'Bu anahtarı sıfırlamak gerçekten istiyor musun? Eski anahtarı içeren kayıtlı bağlantılar artık çalışmayacaktır.';
$string['response'] = 'Yanıt';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Geri yüklenen hesap, bir simge almadan önce şifreyi sıfırlamanız gerekir.';
$string['restparam'] = 'REST (POST parametreleri)';
$string['restrictedusers'] = 'Sadece yetkilendirilmiş kullanıcılar';
$string['restrictedusers_help'] = 'Bu ayar, web hizmetleri belirteci oluşturma iznine sahip tüm kullanıcıların güvenlik anahtarları sayfası aracılığıyla bu hizmet için bir simge oluşturup oluşturamayacağını veya yalnızca yetkili kullanıcıların bunu yapabileceklerini belirler.';
$string['securitykey'] = 'Güvenlik anahtarı (dizgecik)';
$string['securitykeys'] = 'Güvenlik anahtarları';
$string['selectauthorisedusers'] = 'Yetkili kullanıcıları seçin';
$string['selectedcapability'] = 'Seçili';
$string['selectedcapabilitydoesntexit'] = 'Şu anda ayarlanmış olan gerekli özellik ({$a}) artık mevcut değil. Lütfen değiştirin ve değişiklikleri kaydedin.';
$string['selectservice'] = 'Servis seç';
$string['selectspecificuser'] = 'Özel bir kullanıcı seç';
$string['selectspecificuserdescription'] = 'Web servislerini yetkili kullanıcı olarak ekleyin.';
$string['service'] = 'Servis';
$string['servicehelpexplanation'] = 'Bir servis fonksiyonların birleşimidir. Bir servise bütün kullanıcılar tarafından ya da yalnızca özel kullanıcılar tarafından erişilebilir.';
$string['servicename'] = 'Servis adı';
$string['servicenotavailable'] = 'Web servisi mevcut değil. (Mevcut değil veya devre dışı bırakılmış olabilir.)';
$string['servicerequireslogin'] = 'Web servisi mevcut değil. (Oturum kapatıldı veya süresi doldu.)';
$string['servicesbuiltin'] = 'Yerleşik servisler';
$string['servicescustom'] = 'Özel servisler';
$string['serviceusers'] = 'Yetkili kullanıcılar';
$string['serviceusersettings'] = 'Kullanıcı ayarları';
$string['serviceusersmatching'] = 'Eşleşen yetkili kullanıcılar';
$string['serviceuserssettings'] = 'Yetkili kullanıcılar için ayarları değiştir';
$string['shortnametaken'] = 'Kısa adı başka bir hizmet için zaten kullanılmış ({$a})';
$string['simpleauthlog'] = 'Basit kimlik doğrulama girişi';
$string['step'] = 'Adım';
$string['supplyinfo'] = 'Daha fazla detay';
$string['testauserwithtestclientdescription'] = 'Web hizmeti test istemcisini kullanarak servise harici erişimi simüle edin. Bunu yapmadan önce, moodle/webservice:createtoken özelliği ile bir kullanıcı olarak oturum açın ve kullanıcının tercih sayfasından güvenlik anahtarı (belirteç) edinin. Bu belirteci test istemcisinde kullanacaksınız. Test istemcisinde, belirteç kimliği ile etkinleştirilmiş bir protokol de seçin. <strong> UYARI: Test ettiğiniz işlevler bu kullanıcı için DEVAM EDECEK, bu nedenle test etmeyi seçtiğinize dikkat edin! </strong>';
$string['testclient'] = 'Web servisi test istemcisi';
$string['testclientdescription'] = '* Web hizmeti test istemcisi, <strong>REAL</strong> için işlevleri <strong> çalıştırır </strong>. Bilmediğiniz fonksiyonları test etmeyin. <br/> * Mevcut tüm web hizmeti işlevleri henüz test istemcisine uygulanmıyor. <br/> * Bir kullanıcının bazı işlevlere erişemediğini kontrol etmek için izin vermediğiniz bazı işlevleri test edebilirsiniz. <br/> * Daha net hata iletilerini görmek için hata ayıklamasını <strong> {$a- >mode} </strong> \'u {$a->atag} içine ekleyin.';
$string['testwithtestclient'] = 'Servisi test et';
$string['testwithtestclientdescription'] = 'Web hizmeti test istemcisini kullanarak servise harici erişimi simüle edin. Belirgin kimlik doğrulaması ile etkinleştirilmiş bir protokol kullanın. <strong> UYARI: Test ettiğiniz işlevler DEVAM EDECEĞİNİZ, bu nedenle test etmeyi seçtiğinize dikkat edin! </strong>';
$string['token'] = 'Dizgecik';
$string['tokenauthlog'] = 'Dizgecik doğrulama';
$string['tokencopied'] = 'Metin panoya kopyalandı.';
$string['tokencreatedbyadmin'] = 'Yalnızca yönetici tarafından sıfırlanabilir';
$string['tokencreator'] = 'Oluşturan';
$string['tokenfilter'] = 'Token filtresi';
$string['tokenfilterreset'] = 'Tüm token\'ları göster';
$string['tokenfiltersubmit'] = 'Yalnızca eşleşen token\'ları göster';
$string['tokenname'] = 'İsimi';
$string['tokennamehint'] = 'Eğer bir isim girmezseniz rastgele bir isim kullanılacaktır.';
$string['tokennameprefix'] = 'Webservis-{$a}';
$string['tokennewmessage'] = 'Jetonu şimdi kopyalayın. Bu sayfadan ayrıldıktan sonra bir daha gösterilmeyecektir.';
$string['unknownoptionkey'] = 'Bilinmeyen seçenek anahtarı ({$a})';
$string['unnamedstringparam'] = 'Bir dizgi parametresi isimsiz.';
$string['updateusersettings'] = 'Güncelle';
$string['uploadfiles'] = 'Dosya yükleyebilir';
$string['uploadfiles_help'] = 'Etkinleştirilirse, herhangi bir kullanıcı güvenlik anahtarlarıyla dosyalarınızı kendi özel dosyalar alanına veya bir taslak dosya alanına yükleyebilir. Herhangi bir kullanıcı dosya kotası geçerlidir.';
$string['userasclients'] = 'Dizgecikli istemci kullanıcıları';
$string['userasclientsdescription'] = 'Aşağıdaki adımlar, kullanıcılar için Moodle web hizmetini istemciler olarak ayarlamanıza yardımcı olur. Bu adımlar, önerilen belirteci (güvenlik anahtarları) kimlik doğrulama yöntemini ayarlamanıza da yardımcı olur. Bu kullanım durumunda kullanıcı, kendi tercihleri sayfası aracılığıyla güvenlik anahtarları sayfasından kendi simgesini oluşturacaktır.';
$string['usermissingcaps'] = 'Eksik yetenekler: {$a}';
$string['usernameorid'] = 'Kullanıcı adı/ Kullanıcı id\'si';
$string['usernameorid_help'] = 'Bir kullanıcı adı ya da id\'si girin.';
$string['usernotallowed'] = 'Bu hizmet için kullanıcıya izin verilmiyor. Önce, {$a} \'ya izin verilen kullanıcılar yönetimi sayfasına bu kullanıcıya izin vermeniz gerekiyor.';
$string['userservices'] = 'Kullanıcı hizmetleri: {$a}';
$string['usersettingssaved'] = 'Kullanıcı ayarları kaydedildi';
$string['validuntil'] = 'Geçerlilik';
$string['validuntil_empty'] = 'Bu jetonun son kullanma tarihi yoktur.';
$string['validuntil_help'] = 'Ayarlanırsa, servis bu kullanıcı için bu tarihten sonra inaktif olacaktır.';
$string['webservice'] = 'Web servisi';
$string['webservices'] = 'Web servisleri';
$string['webservicesoverview'] = 'Genel bakış';
$string['webservicetokens'] = 'Web servis dizgecikleri';
$string['wrongusernamepassword'] = 'Yanlış kullanıcı adı ya da şifre';
$string['wsaccessuserdeleted'] = 'Silinmiş kullanıcı adı dolayısıyla web servis girişi reddedildi: {$a}';
$string['wsaccessuserexpired'] = 'Şifre süresi dolmuş dolayısıyla web servis girişi reddedildi: {$a}';
$string['wsaccessusernologin'] = 'Nologin kimlik doğrulaması için reddedilen web hizmeti erişimi kullanıcı adı: {$a}';
$string['wsaccessusersuspended'] = 'Askıya alınan kullanıcı adı için web hizmeti erişimi reddedildi: {$a}';
$string['wsaccessuserunconfirmed'] = 'Doğrulanmamış kullanıcı adı nedeniyle reddedilen web servis erişim isteği: {$a}';
$string['wsclientdoc'] = 'Moodle web servis istemci dokümantasyonu';
$string['wsdocapi'] = 'API Dokümantasyonu';
$string['wsdocumentation'] = 'Web servisi belgesi';
$string['wsdocumentationdisable'] = 'Web servisi belgelendirmesi etkin değil';
$string['wsdocumentationintro'] = 'Bir müşteri oluşturmak için, {$a->doclink} bölümünü okumanızı tavsiye ederiz.';
$string['wsdocumentationlogin'] = 'veya web hizmeti kullanıcı adınızı ve şifrenizi girin:';
$string['wspassword'] = 'Web servisi şifresi';
$string['wsusername'] = 'Web servisi kullanıcı adı';
