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
 * Strings for component 'auth_oauth2', language 'tr', version '4.5'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Bu sitede bu kullanıcı adına sahip bir kullanıcı zaten var. Bu sizin hesabınızsa, kullanıcı adınızı ve şifrenizi girerek giriş yapın ve tercihler sayfanız üzerinden bağlantılı giriş olarak ekleyin.';
$string['alreadylinked'] = 'Bu harici hesap, bu sitedeki bir hesaba zaten bağlı';
$string['auth_oauth2description'] = 'OAuth 2 standartlarına dayalı kimlik doğrulama';
$string['auth_oauth2settings'] = 'OAuth 2 kimlik doğrulama ayarları.';
$string['confirmaccountemail'] = 'Merhaba {$a->firstname},

\'{$a->sitename}\' adresinde yeni bir hesap istendi
e-posta adresinizi kullanarak.

Yeni hesabınızı onaylamak için lütfen bu web adresine gidin:

{$a->link}

Çoğu posta programında, bu mavi bir bağlantı olarak görünmelidir
sadece tıklayabilirsiniz. Bu işe yaramazsa,
sonra adresi kesip adrese yapıştırın
web tarayıcısı pencerenizin üstündeki satır.

Yardıma ihtiyacınız varsa, lütfen site yöneticisine başvurun,
{$a->admin}

Bunu siz yapmadıysanız, başka biri hesabınızı tehlikeye atmaya çalışıyor olabilir.
Lütfen hemen site yöneticisine başvurun.';
$string['confirmaccountemailsubject'] = '{$a}: hesap onayı';
$string['confirmationinvalid'] = 'Onay bağlantısı geçersiz veya süresi dolmuş. Yeni bir onay e-postası oluşturmak için lütfen oturum açma işlemini yeniden başlatın.
';
$string['confirmationpending'] = 'Bu hesap e-posta onayı bekliyor.';
$string['confirmlinkedloginemail'] = 'Merhaba {$a->fullname},

{$a->linkedemail} \'{$a->siteame}\' adresindeki hesabınıza
e-posta adresinizi kullanarak
{$a->issuername} giriş bilgilerinin bağlanması için istekte bulunuldu


Bu isteği onaylamak ve bu girişleri bağlamak için lütfen şu web adresine gidin:

{$a->link}


Çoğu posta programında bu, üzerine tıklayabileceğiniz mavi bir bağlantı
olarak görünmelidir.  Bu işe yaramazsa, adresi kesip web tarayıcı pencerenizin üst kısmındaki adres satırına yapıştırın.

Yardıma ihtiyacınız varsa, lütfen site yöneticisine başvurun,
{$a->admin}

Bunu siz yapmadıysanız, başka biri hesabınızı tehlikeye atmaya çalışıyor olabilir.
Lütfen hemen site yöneticisine başvurun.';
$string['confirmlinkedloginemailsubject'] = '{$a}: bağlantılı giriş onayı';
$string['createaccountswarning'] = 'Bu kimlik doğrulama eklentisi, kullanıcıların sitenizde hesaplar oluşturmasına olanak tanır. Bu eklentiyi kullanıyorsanız "authpreventaccountcreation" ayarını etkinleştirmek isteyebilirsiniz.';
$string['createnewlinkedlogin'] = 'Yeni bir hesap bağlayın ({$a})';
$string['emailconfirmlink'] = 'Hesaplarınızı bağlayın';
$string['emailconfirmlinksent'] = '<p>Bu e-posta adresiyle mevcut bir hesap bulundu, ancak henüz bağlanmadı.</p>
   <p>Giriş yapabilmeniz için önce hesapların bağlanması gerekir.</p>
   <p><b>{$a}</b> adresindeki adresinize bir e-posta gönderilmiş olmalıdır.</p>
   <p>Hesaplarınızı bağlamanız için kolay talimatlar içerir.</p>
   <p>Herhangi bir zorlukla karşılaşırsanız, site yöneticisine başvurun.</p>';
$string['emailpasswordchangeinfo'] = 'Merhaba {$a->firstname},

Birisi (muhtemelen siz) \'{$a->sitename}\' üzerindeki hesabınız için yeni bir şifre talep etti.

Ancak hesabınızı başka bir sitede oturum açmak için kullandığınız için şifreniz sıfırlanamaz.

Lütfen giriş sayfasındaki bağlantıyı kullanarak daha önce olduğu gibi giriş yapın.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: Şifre değişim bilgisi';
$string['info'] = 'Harici hesap';
$string['issuer'] = 'OAuth 2 hizmeti';
$string['issuernologin'] = 'Bu sağalayıcı, giriş yapmak için kullanılamaz';
$string['key'] = 'Anahtar';
$string['linkedlogins'] = 'Bağlantılı girişler';
$string['linkedloginshelp'] = 'Bağlantılı girişlerle ilgili yardım';
$string['loggedin'] = 'Kullanıcı, sağlayıcı ile başarıyla doğrulandı.';
$string['loginerror_authenticationfailed'] = 'Kimlik doğrulama işlemi başarısız oldu.';
$string['loginerror_cannotcreateaccounts'] = 'E-posta adresinizle bir hesap bulunamadı.';
$string['loginerror_invaliddomain'] = 'Bu sitede e-posta adresine izin verilmiyor.';
$string['loginerror_nouserinfo'] = 'Kullanıcı bilgisi iade edilmedi. OAuth 2 hizmeti yanlış yapılandırılmış olabilir.';
$string['loginerror_userincomplete'] = 'Döndürülen kullanıcı bilgileri bir kullanıcı adı ve e-posta adresi içermiyordu. OAuth 2 hizmeti yanlış yapılandırılmış olabilir.';
$string['noconfiguredidps'] = 'Yapılandırılmış OAuth2 sağlayıcısı yok.';
$string['noissuersavailable'] = 'Yapılandırılmış OAuth2 hizmetlerinden hiçbiri, giriş hesaplarını bağlamanıza izin vermez';
$string['notenabled'] = 'Maalesef OAuth 2 kimlik doğrulama eklentisi etkinleştirilmedi';
$string['notloggedindebug'] = 'Oturum açma girişimi başarısız oldu. Neden: {$a}';
$string['notwhileloggedinas'] = 'Başka bir kullanıcı olarak oturum açıldığında bağlantılı girişler yönetilemez.
';
$string['oauth2:managelinkedlogins'] = 'Kendi bağlantılı oturum açma hesaplarını yönetin';
$string['plugindescription'] = 'Bu kimlik doğrulama eklentisi, oturum açma sayfasında yapılandırılmış kimlik sağlayıcılarının bir listesini görüntüler. Bir kimlik sağlayıcı seçmek, kullanıcıların bir OAuth 2 sağlayıcısından aldıkları kimlik bilgileriyle oturum açmalarına olanak tanır.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'OAuth 2 kimlik doğrulaması';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Bu eklenti, kimlik doğrulama alt sistemine bağlıdır.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'Onay jetonu.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'Onay jetonunun sona erdiği zaman damgası.';
$string['privacy:metadata:auth_oauth2:email'] = 'Bu hesapla eşleşen harici e-posta.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'Bu OAuth 2 girişi için OAuth 2 veren kuruluşun kimliği';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Bir kullanıcının Moodle hesabına bağlı OAuth 2 hesapları.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Kullanıcı hesabının OAuth 2 girişine bağlandığı zaman damgası.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'Bu kaydın değiştirildiği zaman damgası.';
$string['privacy:metadata:auth_oauth2:userid'] = 'OAuth 2 girişinin bağlı olduğu kullanıcı hesabının kimliği.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'Bu hesabı değiştiren kullanıcının kimliği.';
$string['privacy:metadata:auth_oauth2:username'] = 'Bu hesapla eşleşen harici kullanıcı adı.';
$string['testidplogin'] = 'Girişi şununla test et:';
$string['userinfo'] = 'Sağlayıcıdan kullanıcı verileri:';
$string['value'] = 'Değer';
