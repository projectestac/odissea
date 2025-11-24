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
 * Strings for component 'tool_mobile', language 'tr', version '4.5'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'ADOdb hata ayıklama etkinleştirildi. Harici veritabanı kimlik doğrulama veya harici veritabanı kayıt eklentisi ayarlarında devre dışı bırakılmalıdır.';
$string['androidappid'] = 'Android uygulamasının benzersiz tanımlayıcısı';
$string['androidappid_desc'] = 'Özel bir Android uygulamanız yoksa bu ayar varsayılan olarak bırakılabilir.';
$string['apppolicy'] = 'Uygulama politikası URL\'si';
$string['apppolicy_help'] = 'Uygulamadaki Hakkında sayfasında listelenen, uygulama kullanıcıları için bir politikanın URL\'si.  Alan boş bırakılırsa bunun yerine site politikası URL\'si kullanılacaktır.';
$string['apprequired'] = 'Bu işlevsellik, yalnızca Moodle mobil veya masaüstü uygulaması aracılığıyla erişildiğinde kullanılabilir.';
$string['autologinkeygenerationlockout'] = 'Otomatik giriş anahtarı oluşturulması engellendi. Her yeni istek için {$a} dakika beklemeniz gerekir.';
$string['autologinmintimebetweenreq'] = 'Otomatik oturum açma istekleri arasındaki minimum süre';
$string['autologinmintimebetweenreq_desc'] = 'Mobil uygulamadan otomatik oturum açma istekleri arasındaki minimum süre.  Uygulama kullanıcılarından siteden katıştırılmış içeriği görüntülerken sık sık kimlik bilgilerini girmeleri istenirse daha düşük bir değer ayarlayın.';
$string['autologinnotallowedtoadmins'] = 'Site yöneticileri için otomatik giriş izni verilmez.';
$string['autologout'] = 'Kullanıcılarınız için otomatik oturum kapatmayı zorunlu kılın';
$string['autologout_desc'] = 'Güvenlik nedeniyle, kullanıcılarınız uygulamadan çıktıklarında veya uygulamayı kapattıklarında ya da uygulama arka plana geçtiğinde otomatik oturum kapatmayı zorunlu kılabilirsiniz. Kullanıcılar uygulamaya geri döndüklerinde tekrar giriş yapmak zorunda kalacaklardır.';
$string['autologoutcustom'] = 'Kullanıcıların uygulamadan ayrılmasından veya uygulamayı kapatmasından sonraki özel süre';
$string['autologoutinmediate'] = 'Kullanıcılar uygulamadan ayrıldıktan veya uygulamayı kapattıktan hemen sonra';
$string['autologouttime'] = 'Otomatik oturum kapatma zamanlayıcısı';
$string['cachedef_plugininfo'] = 'Bu, mobil eklentilere sahip eklentilerin listesini saklar';
$string['cachedef_subscriptiondata'] = 'Bu, Moodle uygulaması abonelik bilgilerini saklar.';
$string['clickheretolaunchtheapp'] = 'Uygulama otomatik olarak açılmazsa buraya tıklayın.';
$string['configmobilecssurl'] = 'Mobil uygulama arayüzünü özelleştirmek için CSS dosyası.';
$string['customlangstrings'] = 'Özel dil dizeleri';
$string['customlangstrings_desc'] = 'Uygulamada görüntülenen kelimeler ve ifadeler burada özelleştirilebilir. Her bir özel dil dizesini yeni bir satıra şu formatta girin: dize tanımlayıcısı, özel dil dizesi ve dil kodu, ayırma işareti karakterleri ile. Örneğin:
<pre>
mm.user.student|Learner|tr
mm.user.student|Aprendiz|es
</pre>
Dize tanımlayıcılarının tam listesi için belgelere bakın.';
$string['custommenuitems'] = 'Özel menü öğeleri';
$string['custommenuitems_desc'] = 'Ek öğeler, burada belirtilerek uygulamanın ana menüsüne eklenebilir.  Her bir özel menü öğesini şu biçime sahip yeni bir satıra girin: öğe metni, bağlantı URL\'si, bağlantı açma yöntemi ve dil kodu (isteğe bağlı, öğeyi yalnızca belirtilen dildeki kullanıcılara görüntülemek için), dikey çizgi karakterleriyle ayırarak.

 Bağlantı açma yöntemleri şunlardır: uygulama (uygulama tarafından desteklenen bir etkinliğe bağlantı için), inappbrowser (uygulamadan çıkmadan bir tarayıcıda bağlantı açmak için), tarayıcı (bağlantıyı uygulamanın dışında cihazın varsayılan tarayıcısında açmak için) ve gömülü (bağlantıyı uygulamada yeni bir sayfada bir iframe\'de görüntülemek için).

 Öğelerin belirli bir dil için çevirisi eksik olduğunda, dil koduna "_only" eklenmediği sürece diğer dilleri yedek olarak kullanırlar.

 Örneğin:
 <pre>
 Uygulama yardımı|https://someurl.xyz/help|inappbrowser
 Notlarım|https://someurl.xyz/local/mygrades/index.php|embedded|en
 Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
 Bunu yalnızca İngilizce|https://someurl.xyz/english|browser|en_only olarak göreceksiniz
 </pre>';
$string['darkmode'] = 'Karanlık mod';
$string['disabledfeatures'] = 'Engelli özellikleri';
$string['disabledfeatures_desc'] = 'Siteniz için Mobil uygulamada devre dışı bırakmak istediğiniz özellikleri buradan seçin. Burada listelenen bazı özelliklerin diğer site ayarları aracılığıyla zaten devre dışı bırakılmış olabileceğini lütfen unutmayın. Değişiklikleri görmek için oturumu kapatmanız ve uygulamada tekrar oturum açmanız gerekecektir.';
$string['displayerrorswarning'] = 'Hata ayıklama mesajlarını görüntüle (debugdisplay) etkinleştirildi.  Devre dışı bırakılmalıdır.';
$string['downloadcourse'] = 'Kursu indir';
$string['downloadcourses'] = 'Kursları indir';
$string['enablesmartappbanners'] = 'Uygulama Bannerlarını Etkinleştir';
$string['enablesmartappbanners_desc'] = 'Etkinleştirildiğinde, mobil tarayıcı kullanarak siteye erişirken mobil uygulamayı tanıtan bir banner görüntülenir.';
$string['filetypeexclusionlist'] = 'Dosya türü dışlama listesi';
$string['filetypeexclusionlist_desc'] = 'Mobil cihazda kullanılmayan tüm dosya türlerini seçin. Bu tür dosyalar kursta listelenecek, ardından bir kullanıcı bunları açmaya çalışırsa, dosya türünün bir mobil cihazda kullanılmak üzere tasarlanmadığını bildiren bir uyarı görüntülenecektir. Kullanıcı daha sonra uyarıyı iptal edebilir veya görmezden gelebilir ve dosyayı yine de açabilir.';
$string['filetypeexclusionlistplaceholder'] = 'Mobil dosya türü dışlama listesi';
$string['forcedurlscheme'] = 'Yalnızca özel markalı uygulamanızın bir tarayıcı penceresi aracılığıyla açılmasına izin vermek istiyorsanız, URL şemasını burada belirtin. Yalnızca resmi uygulamaya izin vermek istiyorsanız, varsayılan değeri ayarlayın. Herhangi bir uygulamaya izin vermek istiyorsanız alanı boş bırakın.';
$string['forcedurlscheme_key'] = 'URL şeması';
$string['forcelogout'] = 'Oturumu kapatmaya zorla';
$string['forcelogout_desc'] = 'Etkinleştirilirse, hesap değiştirirken bile kullanıcıların oturumu her zaman tamamen kapatılır. Siteye bir daha erişmek istediklerinde şifrelerini yeniden girmeleri gerekir.';
$string['getmoodleonyourmobile'] = 'Mobil uygulamayı edinin';
$string['h5poffline'] = 'H5P içeriğini çevrimdışı görüntüleyin';
$string['httpsrequired'] = 'HTTPS gerekli';
$string['insecurealgorithmwarning'] = 'Görünüşe göre HTTPS sertifikası, imzalamak için güvenli olmayan bir algoritma kullanıyor (SHA-1).  Lütfen sertifikayı güncellemeyi deneyin.';
$string['invalidcertificatechainwarning'] = 'Görünüşe göre sertifika zinciri geçersiz.  Bu sertifika bir tarayıcı için çalışabilir, ancak bir mobil uygulama için çalışmayabilir.';
$string['invalidcertificateexpiredatewarning'] = 'Görünüşe göre site için HTTPS sertifikasının süresi dolmuş.';
$string['invalidcertificatestartdatewarning'] = 'Görünüşe göre site için HTTPS sertifikası henüz geçerli değil (başlangıç tarihi gelecekte).';
$string['invalidprivatetoken'] = 'Geçersiz özel simge. Simge boş bırakılmamalı veya GET parametresi aracılığıyla geçilmemelidir.';
$string['invaliduserquotawarning'] = 'Kullanıcı kotası (kullanıcı kotası) geçersiz bir sayı olarak ayarlanmış.  Site güvenlik ayarlarında geçerli bir sayıya (bir tamsayı değer) ayarlanmalıdır.';
$string['iosappid'] = 'IOS uygulamanın benzersiz tanımlayıcısı';
$string['iosappid_desc'] = 'Bu ayar, özel bir iOS uygulaması olmadığı sürece varsayılan olarak bırakılabilir.';
$string['launchviasiteinbrowser'] = 'Sistem tarayıcısında site aracılığıyla başlat';
$string['loginintheapp'] = 'Uygulama aracılığıyla';
$string['logininthebrowser'] = 'Bir tarayıcı penceresi aracılığıyla (SSO eklentileri için)';
$string['loginintheembeddedbrowser'] = 'Katıştırılmış bir tarayıcı (SSO eklentileri için)';
$string['logoutconfirmation'] = 'Mobil cihazlarınızdaki mobil uygulamadan çıkış yapmak istediğinizden emin misiniz?  Çıkış yaparak, uygulamanın kurulu olduğu tüm cihazlarda mobil uygulamada kullanıcı adınızı ve şifrenizi tekrar girmeniz gerekecektir.';
$string['mainmenu'] = 'Ana menü';
$string['managefiletypes'] = 'Dosya türlerini yönet';
$string['minimumversion'] = 'Bir uygulama sürümü belirtilirse (3.8.0 veya üstü), daha eski bir uygulama sürümü kullanan kullanıcılardan siteye erişim izni verilmeden önce uygulamalarını yükseltmeleri istenir.';
$string['minimumversion_key'] = 'Minimum uygulama sürümü gerekli';
$string['mobileapp'] = 'Mobil uygulama';
$string['mobileappearance'] = 'Mobil görünümü';
$string['mobileappenabled'] = 'Bu sitenin mobil uygulama erişimi etkin.<br /><a href="{$a}">Mobil uygulamayı indirin</a>.';
$string['mobileappsubscription'] = 'Moodle uygulaması aboneliği';
$string['mobileauthentication'] = 'Mobil kimlik doğrulama';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Mobil özellikler';
$string['mobilenotificationsdisabledwarning'] = 'Mobil bildirimler etkinleştirilmedi. Bildirim ayarlarında etkinleştirilmeleri gerekir.';
$string['mobilesettings'] = 'Mobil ayarları';
$string['moodleappsportalfeatureswarning'] = 'Moodle uygulama aboneliğinize bağlı olarak bazı özelliklerin kısıtlanabileceğini lütfen unutmayın.  Ayrıntılar için <a href="{$a}" target="_blank">Moodle Apps Portalı</a>\'nı ziyaret edin.';
$string['notifications'] = 'Bildirimler';
$string['notificationsactivedevices'] = 'Aktif cihazlar';
$string['notificationscurrentactivedevices'] = 'Bu ay bildirim alan cihazlar';
$string['notificationsignorednotifications'] = 'Bildirimler gönderilmedi';
$string['notificationslimitreached'] = 'Aylık aktif kullanıcı cihaz limiti aşıldı.  Bazı kullanıcılar için bildirim gönderilmeyecektir.  <a href="{$a}" target="_blank">Moodle Apps Portalı</a>\'nda uygulama planınızı yükseltmeniz önerilir.';
$string['notificationsmissingwarning'] = 'Moodle uygulaması bildirim istatistikleri alınamadı. Bunun nedeni büyük olasılıkla sitede mobil bildirimlerin henüz etkinleştirilmemiş olmasıdır. Bunları Site Yönetimi / Mesajlaşma / Mobil bölümünden etkinleştirebilirsiniz.';
$string['notificationsnewdevices'] = 'Yeni cihazlar';
$string['notificationsseemore'] = 'Not: Moodle uygulaması kullanım istatistikleri gerçek zamanlı olarak hesaplanmaz.  Önceki aylara ait veriler de dahil olmak üzere daha ayrıntılı istatistiklere erişmek için lütfen <a href="{$a}" target="_blank">Moodle Uygulamaları Portalı</a>\'na giriş yapın.';
$string['notificationssentnotifications'] = 'Gönderilen bildirimler';
$string['oauth2identityproviders'] = 'OAuth 2 kimlik sağlayıcıları';
$string['offlineuse'] = 'Çevrimdışı kullanım';
$string['pluginname'] = 'Moodle Mobil araçlar';
$string['pluginnotenabledorconfigured'] = 'Eklenti etkin değil veya yapılandırılmamış.';
$string['privacy:metadata:core_userkey'] = 'Geçerli kullanıcı için otomatik oturum açma anahtarı oluşturmak için kullanılan kullanıcı anahtarları.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Son otomatik giriş anahtarı istek tarihi. Her yeni istek için 6 dakika beklenmesi gerekir.';
$string['qrcodedisabled'] = 'QR kodu ile erişim devre dışı bırakıldı';
$string['qrcodeformobileappaccess'] = 'Mobil uygulama erişimi için QR kodu';
$string['qrcodeformobileapploginabout'] = 'QR kodunu mobil uygulamanızla tarayın ve otomatik olarak oturum açacaksınız. QR kodunun süresi {$a} içinde dolacak.';
$string['qrcodeformobileappurlabout'] = 'Uygulamanızdaki site URL\'sini doldurmak için QR kodunu mobil uygulamanızla tarayın.';
$string['qrcodetype'] = 'QR kod erişimi';
$string['qrcodetype_desc'] = 'Mobil uygulama kullanıcılarının taraması için bir QR kodu sağlanabilir.  Bu, site URL\'sini doldurmak için veya sitenin HTTPS kullanılarak güvenli hale getirildiği durumlarda, kullanıcının kullanıcı adını ve şifresini girmesine gerek kalmadan otomatik olarak oturum açması için kullanılabilir.';
$string['qrcodetypelogin'] = 'Otomatik oturum açma özellikli QR kodu';
$string['qrcodetypeurl'] = 'Site URL\'li QR kodu';
$string['qrkeyttl'] = 'QR kimlik doğrulama anahtarı süresi';
$string['qrkeyttl_desc'] = 'Otomatik oturum açma için bir QR kodunun geçerli olduğu süre.';
$string['qrsameipcheck'] = 'QR kimlik doğrulaması aynı IP kontrolü';
$string['qrsameipcheck_desc'] = 'Kullanıcıların oturum açmak için hem QR kodu oluşturmak hem de taramak için aynı ağı kullanması gerekip gerekmediği.  Yalnızca kullanıcılar QR girişiyle ilgili sorun bildirirse devre dışı bırakın.';
$string['qrsiteadminsnotallowed'] = 'Güvenlik nedeniyle, site yöneticileri veya başka bir kullanıcı olarak oturum açtıysanız, QR kodu ile giriş yapmanıza izin verilmez.';
$string['readingthisemailgettheapp'] = 'Bunu bir e-postada mı okuyorsun?  <a href="{$a}">Mobil uygulamayı indirin ve mobil cihazınızda bildirimler alın</a>.';
$string['remoteaddons'] = 'Uzak eklentiler';
$string['responsivemainmenuitems'] = 'Duyarlı menü öğeleri';
$string['scanqrcode'] = 'QR kodunu tarayın';
$string['selfsignedoruntrustedcertificatewarning'] = 'Görünüşe göre HTTPS sertifikası kendinden imzalı veya güvenilir değil.  Mobil uygulama yalnızca güvenilir sitelerle çalışacaktır.  Lütfen sorunu teşhis etmek için herhangi bir çevrimiçi SSL denetleyicisi kullanın.  Sertifikanızın tamam olduğunu gösteriyorsa, bu uyarıyı yok sayabilirsiniz.';
$string['setuplink'] = 'Uygulama indirme sayfası';
$string['setuplink_desc'] = 'App Store ve Google Play\'den mobil uygulamayı indirme seçeneklerinin bulunduğu sayfanın URL\'si.  Uygulama indirme sayfası bağlantısı, sayfa altbilgisinde ve bir kullanıcının profilinde görüntülenir.  Bağlantı göstermemek için boş bırakın.';
$string['smartappbanners'] = 'Uygulama Banner\'ları';
$string['subscription'] = 'Abonelik';
$string['subscriptioncreated'] = 'Başlangıç tarihi';
$string['subscriptionerrorrequest'] = 'Moodle uygulaması abonelik bilgileriniz alınmaya çalışılırken beklenmeyen bir hata oluştu.';
$string['subscriptionexpiration'] = 'Son kullanma tarihi';
$string['subscriptionfeaturenotapplied'] = 'Bu özellik sitenizde yapılandırılmıştır ancak Moodle uygulama planınıza dahil değildir.  Böylece, ayarın hiçbir etkisi olmayacaktır.';
$string['subscriptionfeatures'] = 'Abonelik özellikleri';
$string['subscriptionlimitsurpassed'] = 'Abonelik sınırı aşıldı';
$string['subscriptionregister'] = 'Çeşitli uygulama planlarının ayrıntıları ve Moodle uygulama kullanım istatistiklerine erişmek için lütfen <a href="{$a}" target="_blank">Moodle Uygulamaları Portalı</a>\'nı ziyaret edin.';
$string['subscriptionsseemore'] = 'Not: Görüntülenen bilgiler gerçek zamanlı olarak güncellenmez. Güncellemeleri görmek için oturumu kapatıp tekrar oturum açmanız gerekebilir. Uygulama planınızı yükseltme hakkında bilgi için lütfen <a href="{$a}" target="_blank"> Moodle Apps Portal </a>\'da oturum açın.';
$string['switchaccount'] = 'Hesap değiştir';
$string['typeoflogin'] = 'Giriş türü';
$string['typeoflogin_desc'] = 'Eğer site SSO doğrulama yöntemi kullanıyorsa, seçiminizi bir tarayıcı penceresi veya gömülü tarayıcı aracılığıyla yapınız. Gömülü tarayıcı daha iyi bir kullanıcı deneyimi sunar ancak tüm SSO eklentileri ile çalışmaz.';
$string['viewqrcode'] = 'QR kodunu görüntüle';
