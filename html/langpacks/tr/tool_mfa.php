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
 * Strings for component 'tool_mfa', language 'tr', version '4.5'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Ulaşılan ağırlık';
$string['added'] = 'Eklendi';
$string['alltime'] = 'Her zaman';
$string['areyousure'] = 'Faktörü kaldırmak istediğinize emin misiniz?';
$string['cancellogin'] = 'Girişi iptal et';
$string['combination'] = 'Kombinasyon';
$string['confirmationreplace'] = 'Hemen başka bir \'{$a}\' kurmanız istenecek.  Lütfen kurulum işlemini tamamlamaya hazır olduğunuzdan emin olun.';
$string['confirmationrevoke'] = 'Artık bu siteye giriş yapmak için \'{$a}\' kullanamayacaksınız.';
$string['connector'] = 'VE';
$string['created'] = 'Oluşturulan';
$string['createdfromip'] = 'IP\'den oluşturuldu';
$string['debugmode:heading'] = 'Hata ayıklama modu';
$string['devicename'] = 'Cihaz';
$string['editfactor'] = '{$a} faktörüne ilişkin ayarları düzenleyin';
$string['email:subject'] = '{$a} hesabına giriş yapılamıyor';
$string['enablefactor'] = 'Faktörü etkinleştir';
$string['entercode'] = 'Kodu gir';
$string['error:actionnotfound'] = '\'{$a}\' işlemi desteklenmiyor';
$string['error:couldnotreplace'] = 'Bu faktör değiştirilemedi.';
$string['error:directaccess'] = 'Bu sayfaya doğrudan erişilmez';
$string['error:factornotenabled'] = 'Çok faktörlü kimlik doğrulama faktörü \'{$a}\' etkinleştirilmedi';
$string['error:factornotfound'] = 'Çok faktörlü kimlik doğrulama faktörü \'{$a}\' bulunamadı';
$string['error:isguestuser'] = 'Erişime izin ver';
$string['error:notenoughfactors'] = 'Kimlik doğrulaması yapılamıyor';
$string['error:reauth'] = 'Site kimlik doğrulama güvenlik politikasını karşılamak için kimliğinizi yeterince doğrulayamadık.Bunun nedeni şu olabilir: <br> 1) Adımlar kilitlendi - lütfen birkaç dakika bekleyin ve tekrar deneyin.
     < br > 2) Adımlar başarısız oldu - lütfen her adım için ayrıntıları iki kez kontrol edin. <br> 3) Adımlar atlandı - lütfen bu sayfayı yeniden yükleyin veya yeniden giriş yapmayı deneyin.';
$string['error:revoke'] = 'Faktörü kaldırılamıyor';
$string['error:setupfactor'] = 'Faktör kurulamıyor';
$string['error:support'] = 'Hala giriş yapamıyorsanız veya bunu yanlışlıkla gördüğünüzü düşünüyorsanız, lütfen e-posta gönderin:';
$string['error:wrongfactorid'] = '\'{$a}\' faktör kimliği yanlış';
$string['event:failfactor'] = 'Çok faktörlü kimlik doğrulama, başarısız bir faktör nedeniyle başarısız oldu.';
$string['event:faillockout'] = 'Çok faktörlü kimlik doğrulama çok fazla deneme nedeniyle başarısız oldu.';
$string['event:failnotenoughfactors'] = 'Çok faktörlü kimlik doğrulama, yeterli sayıda tatmin edici faktör olmaması nedeniyle başarısız oldu.';
$string['event:userdeletedfactor'] = 'Faktör silindi';
$string['event:userfailedmfa'] = 'Kullanıcı çok faktörlü kimlik doğrulamasında başarısız oldu';
$string['event:userpassedmfa'] = 'Doğrulama geçti';
$string['event:userrevokedfactor'] = 'Faktör iptali';
$string['event:usersetupfactor'] = 'Faktör kurulumu';
$string['factor'] = 'Faktör';
$string['factorreplace'] = '\'{$a}\' faktörü başarıyla değiştirildi.';
$string['factorreport'] = 'Tüm faktör raporu';
$string['factorreset'] = 'Çok faktörlü kimlik doğrulamanız \'{$a->factor}\' bir site yöneticisi tarafından sıfırlandı. Bu faktörü yeniden ayarlamanız gerekebilir. {$a->url}';
$string['factorresetall'] = 'Tüm çok faktörlü kimlik doğrulama faktörleriniz bir site yöneticisi tarafından sıfırlandı. Bu faktörleri yeniden ayarlamanız gerekebilir. {$a}';
$string['factorrevoked'] = '\'{$a}\' faktörü başarıyla kaldırıldı';
$string['factorsetup'] = '\'{$a}\' faktörü başarıyla kuruldu.';
$string['fallback'] = 'Yedek faktör';
$string['fallback_info'] = 'Bu faktör, başka hiçbir faktör yapılandırılmamışsa bir yedektir. Bu faktör her zaman başarısız olacaktır.';
$string['guidance'] = 'Çok faktörlü kimlik doğrulama kullanıcı kılavuzu';
$string['inputrequired'] = 'Kullanıcı girişi';
$string['ipatcreation'] = 'Faktörün oluşturulduğu IP adresi';
$string['lastused'] = 'Son kullanım';
$string['lastverified'] = 'Son doğrulama tarihi';
$string['locked'] = '{$a} (Mevcut değil)';
$string['lockedusersforallfactors'] = 'Kilitli kullanıcılar: Tüm faktörler';
$string['lockedusersforfactor'] = 'Kilitli kullanıcılar: {$a}';
$string['lockoutnotification'] = 'Geriye {$a} deneme hakkınız kaldı.';
$string['managefactor'] = 'Faktörü yönet';
$string['mfa'] = 'Çok faktörlü kimlik doğrulama';
$string['mfa:intro'] = 'Oturum açtığınızda ek bir doğrulama yöntemi gerektirerek hesabınızı daha güvenli hale getirin.';
$string['mfa:mfaaccess'] = 'Çok Faktörlü Kimlik Doğrulama etkileşir';
$string['mfareports'] = 'Çok Faktörlü Kimlik Doğrulama raporu';
$string['mfasettings'] = 'Çok faktörlü kimlik doğrulamasını yönet';
$string['na'] = 'yok';
$string['needhelp'] = 'Yardıma ihtiyacınız var mı?';
$string['nologinusers'] = 'Giriş yapılmadı';
$string['nonauthusers'] = 'Bekleyen ÇFD';
$string['overall'] = 'Tüm';
$string['pending'] = 'Bekliyor';
$string['performbulk'] = 'Toplu eylem';
$string['pluginname'] = 'Çok faktörlü kimlik doğrulama';
$string['preferences:activefactors'] = 'Aktif faktörler';
$string['preferences:availablefactors'] = 'Mevcut faktörler';
$string['preferences:header'] = 'Çok faktörlü kimlik doğrulama seçenekleri';
$string['preferenceslink'] = 'Kullanıcı tercihlerine gitmek için buraya tıklayın.';
$string['privacy:metadata:tool_mfa'] = '';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'Faktörün kurulduğu IP adresi.';
$string['privacy:metadata:tool_mfa:factor'] = 'Faktör tipi';
$string['privacy:metadata:tool_mfa:id'] = 'Kayıtlı ID';
$string['privacy:metadata:tool_mfa:label'] = 'Faktör örneği için etiket, örneğin cihaz veya e-posta.';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Kullanıcının bu faktörle en son doğrulandığı zaman';
$string['privacy:metadata:tool_mfa:secret'] = 'Faktör için gizli veriler';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Faktör örneğinin kurulduğu zaman.';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Zaman faktörü son olarak değiştirildi';
$string['privacy:metadata:tool_mfa:userid'] = 'Faktörün ait olduğu kullanıcının kimliği';
$string['privacy:metadata:tool_mfa_auth'] = 'Bir kullanıcı kimliği için başarılı bir çok faktörlü kimlik doğrulamanın son kaydedildiği zaman.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Kullanıcının en son kimlik doğrulamasının yapıldığı zaman';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'Bu zaman damgasının ilişkilendirildiği kullanıcı.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Kullanıcı kimlik doğrulaması için geçici gizli diziler.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'Bu sırrın ilişkili olduğu faktör.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'Gizli güvenlik kodu.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'Bu sırrın ilişkilendirildiği oturum kimliği.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'Bu sırrın ilişkili olduğu kullanıcı.';
$string['redirecterrordetected'] = 'Desteklenmeyen yönlendirme algılandı, kod yürütmesi sonlandırıldı. ÇFD ve {$a} arasında yeniden yönlendirme hatası oluştu.';
$string['remove'] = 'Kaldır';
$string['replace'] = 'Yenile';
$string['replacefactor'] = 'Faktörü yenile';
$string['resetconfirm'] = 'Kullanıcı faktörünü sıfırla';
$string['resetfactor'] = 'Kullanıcı kimlik doğrulama faktörlerini sıfırlama';
$string['resetfactorconfirm'] = 'Bu faktörü {$a} için sıfırlamak istediğinizden emin misiniz?';
$string['resetfactorplaceholder'] = 'Kullanıcı adı veya e-posta';
$string['resetsuccess'] = '\'{$a->factor}\' faktörü \'{$a->username}\' kullanıcısı için başarıyla sıfırlandı.';
$string['resetsuccessbulk'] = '\'{$a}\' faktörü sağlanan kullanıcılar için başarıyla sıfırlandı.';
$string['resetuser'] = 'Kullanıcı:';
$string['revoke'] = 'İptal Et';
$string['revokefactor'] = 'Faktörü kaldır';
$string['selectfactor'] = 'Sıfırlanacak faktörü seçin:';
$string['selectperiod'] = 'Rapor için bir geriye dönük dönem seçin:';
$string['settings:combinations'] = 'Giriş için iyi koşulların özeti';
$string['settings:debugmode'] = 'Hata ayıklama modunu etkinleştir';
$string['settings:debugmode_help'] = 'Debug mode will display a small notification banner on MFA admin pages, as well as the user preferences page
         with information on the currently enabled factors.';
$string['settings:duration'] = 'Sır geçerlilik süresi';
$string['settings:duration_help'] = 'Üretilen gizli dizilerin geçerli olduğu süre.';
$string['settings:enabled'] = 'MFA (ÇFD) eklentisi etkinleştirildi';
$string['settings:enablefactor'] = 'Faktörü etkinleştir';
$string['settings:enablefactor_help'] = 'Faktörün ÇFD kimlik doğrulaması için kullanılmasına izin vermek için bu kontrolü işaretleyin.';
$string['settings:general'] = 'Genel ÇFD ayarları';
$string['settings:guidancecheck'] = 'Rehberlik sayfasını kullanın';
$string['settings:guidancecheck_help'] = 'ÇFD kimlik doğrulama sayfalarındaki rehberlik sayfasına ve ÇFD tercihleri sayfasına bir bağlantı ekleyin.';
$string['settings:guidancefiles'] = 'Rehberlik sayfası dosyaları';
$string['settings:guidancefiles_help'] = 'Kılavuz sayfasında kullanmak üzere herhangi bir dosyayı buraya ekleyin ve düzenleyicide {{filename}} (çözümlenmiş yol) veya {{{filename}}} (html bağlantısı) kullanarak bunları sayfaya gömün';
$string['settings:guidancepage'] = 'Rehberlik sayfası içeriği';
$string['settings:guidancepage_help'] = 'Buradaki HTML kılavuz sayfasında görüntülenecektir. Dosyayı {{filename}} çözümlenmiş yolu ile veya {{{filename}} kullanarak bir html bağlantısı olarak gömmek için dosya alanından dosya adlarını girin.}';
$string['settings:lockout'] = 'Kilitleme eşiği';
$string['settings:lockout_help'] = 'Bir kullanıcının oturum açması engellenmeden önce giriş faktörlerini cevaplayabileceği deneme sayısı.';
$string['settings:redir_exclusions'] = 'ÇFD kontrolünü yönlendirmemesi gereken URL\'ler';
$string['settings:redir_exclusions_help'] = 'Her yeni satır, MFA (ÇFD) kontrolünün yönlendirilmeyeceği siteroot\'tan göreli bir URL\'dir, örn. /admin/tool/securityquestions/set_responses.php';
$string['settings:weight'] = 'Faktör ağırlığı';
$string['settings:weight_help'] = 'Geçilirse bu faktörün ağırlığı. Bir kullanıcının oturum açmak için en az 100 puana ihtiyacı vardır.';
$string['setup'] = 'Kurulum';
$string['setupfactor'] = 'Faktörü ayarla';
$string['setuprequired'] = 'Kullanıcı ayarları';
$string['state:fail'] = 'Başarısız';
$string['state:locked'] = 'Kilitli';
$string['state:neutral'] = 'Nötr';
$string['state:pass'] = 'Geçiş';
$string['state:unknown'] = 'Bilinmeyen';
$string['subplugintype_factor'] = 'Faktör türü';
$string['subplugintype_factor_plural'] = 'Faktör türleri';
$string['totalusers'] = 'Toplam kullanıcı';
$string['totalweight'] = 'Toplam ağırlık';
$string['userempty'] = 'Kullanıcı boş olamaz.';
$string['userlogs'] = 'Kullanıcı günlükleri';
$string['usernotfound'] = 'Kullanıcı bulunamıyor.';
$string['usersauthedinperiod'] = 'Giriş';
$string['verification'] = '2 adımlı doğrulama';
$string['verification_desc'] = 'Hesabınızı güvende tutmak için, bu kişinin gerçekten siz olup olmadığını kontrol etmemiz gerekiyor.';
$string['verificationcode'] = 'Doğrulama kodu';
$string['verificationcode_help'] = 'Geçerli kimlik doğrulama faktörü tarafından sağlanan doğrulama kodu.';
$string['verifyalt'] = 'Doğrulamak için başka bir yöntem deneyin:';
$string['weight'] = 'Ağırlık';
$string['yesremove'] = 'Evet kaldır';
$string['yesreplace'] = 'Evet yenile';
