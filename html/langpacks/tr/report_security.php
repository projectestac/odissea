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
 * Strings for component 'report_security', language 'tr', version '4.5'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_antivirus_details'] = 'Bu durum, ana antivirüs ayarlarında ayarlanan eşiğe dayalı olarak yakın zamanda tespit edilen bir hata olup olmadığını kontrol eder.';
$string['check_antivirus_error'] = 'Son {$a->lookback} içinde {$a->error} hataları tespit edildi';
$string['check_antivirus_info'] = 'Şu anda hiçbir virüsten koruma tarayıcısı etkin değil';
$string['check_antivirus_logstore_not_supported'] = 'Seçilen günlük deposu türü nedeniyle virüsten koruma tarayıcılarının durumu doğrulanamıyor';
$string['check_antivirus_name'] = 'Antivirüs';
$string['check_antivirus_ok'] = '{$a->scanners} antivirüs tarayıcı(lar)ı etkinleştirildi, son {$a->yeniden inceleme} sırasında herhangi bir sorun tespit edilmedi';
$string['check_configrw_details'] = '<p>Dosyanın web sunucusu tarafından değiştirilememesi için kurulumdan sonra <code>config.php</code> dosya izinlerinin değiştirilmesi önerilir.
Bu önlemin sunucunun güvenliğini önemli ölçüde artırmadığını, ancak genel istismarları yavaşlatabileceğini veya sınırlayabileceğini lütfen unutmayın.</p>';
$string['check_configrw_name'] = 'Yazılabilir config.php';
$string['check_configrw_ok'] = 'config.php PHP betikleri tarafından değiştirilemez.';
$string['check_configrw_warning'] = 'PHP betikleri config.php\'yi değiştirebilir.';
$string['check_cookiesecure_details'] = '<p>https iletişimi etkinleştirilirse, güvenli çerezlerin gönderilmesini etkinleştirmeniz önerilir. Http\'den https\'ye kalıcı yeniden yönlendirmeye sahip olmalı ve ideal olarak HSTS başlıklarını da sunmalısınız.</p>';
$string['check_cookiesecure_error'] = 'Lütfen güvenli çerezleri etkin kılın';
$string['check_cookiesecure_http'] = 'Güvenli çerezleri kullanmak için https\'yi açmalısınız';
$string['check_cookiesecure_name'] = 'Güvenli çerezler';
$string['check_cookiesecure_ok'] = 'Güvenli çerezler etkin kılındı.';
$string['check_crawlers_details'] = '<p>Google\'a açma ayarı arama motorlarının kurslara konuk erişimi ile girmesini etkin kılar. Eğer konuk girişine izin verilmiyorsa, bu ayarı etkin kılmanın bir anlamı yoktur.</p>';
$string['check_crawlers_error'] = 'Arama motoru erişimine izin verilmiş ama konuk erişimi engellenmiştir.';
$string['check_crawlers_info'] = 'Arama motorları konuk olarak girebilir.';
$string['check_crawlers_name'] = 'Google\'a aç';
$string['check_crawlers_ok'] = 'Arama motoru erişimi etkin değildir.';
$string['check_defaultuserrole_details'] = '<p>Oturum açan tüm kullanıcılara varsayılan kullanıcı rolünün yetkileri verilir. Lütfen bu rolde riskli yetkilere izin verilmediğinden emin olun.</p>
<p>Varsayılan kullanıcı rolü için desteklenen tek eski tür <em>Doğrulanmış kullanıcı</em>\'dır. Kurs görünümü özelliği etkinleştirilmemelidir.</p>
<p> Lütfen otomatik veri silme isteği onayı (tool_dataprivacy | automaticdatadeletionapproval) seçeneğinin etkin olup olmadığını kontrol edin. Kullanıcılar büyük miktarda veriyi silebilecek şekilde silme talebinde bulunabilirler.</p>';
$string['check_defaultuserrole_error'] = 'Varsayılan kullanıcı rolü "{$a}" yanlış tanımlandı!';
$string['check_defaultuserrole_name'] = 'Tüm kullanıcılar için varsayılan rol';
$string['check_defaultuserrole_notset'] = 'Varsayılan rol ayarlanmadı.';
$string['check_defaultuserrole_ok'] = 'Tüm kullanıcılar için varsayılan rol tanımı uygundur.';
$string['check_dirindex_info'] = 'Dizin indeksi etkinleştirilmemelidir';
$string['check_displayerrors_details'] = '<p>PHP ayarını <code>display_errors</code> etkin kılmak üretim sitelerinde önerilmez çünkü hata mesajları sunucunuzla ilgili hassas bilgileri açığa çıkarabilir.</p>';
$string['check_displayerrors_error'] = 'Hataları görüntülemek için PHP ayarı etkin kılındı. Bunun geçersiz kılınması önerilir.';
$string['check_displayerrors_name'] = 'PHP hatalarının görüntülenmesi';
$string['check_displayerrors_ok'] = 'PHP hatalarının görüntülenmesi geçersiz kılındı.';
$string['check_dotfiles_info'] = '.well-known/* dışındaki tüm nokta dosyaları herkese açık olmamalıdır';
$string['check_emailchangeconfirmation_details'] = '<p>Kullanıcılar profillerindeki e-posta adreslerini değiştirdiklerinde bir e-posta onay adımı önerilir. Eğer bu geçersiz kılınırsa, istenmeyen e-posta göndericileri sunucuyu istenmeyen e-posta göndermek için kötüye kullanabilir.</p>
<p>E-posta alanı kimlik denetimi eklentilerine kitlenebilir, bu olasılık burada göz önüne alınmamıştır.</p>';
$string['check_emailchangeconfirmation_error'] = 'Kullanıcılar herhangi bir eposta adresini girebilir.';
$string['check_emailchangeconfirmation_info'] = 'Kullanıcılar yalnızca izin verilmiş etki alanlarından alınan e-posta adreslerini girebilirler.';
$string['check_emailchangeconfirmation_name'] = 'E-posta değişikliği onayı';
$string['check_emailchangeconfirmation_ok'] = 'Kullanıcı profilindeki e-posta adresi değişikliğinin onayı';
$string['check_embed_details'] = '<p>Sınırsız nesne gömme çok tehlikelidir - herhangi bir kayıtlı kullanıcı diğer sunucu kullanıcılarına karşı XSS saldırısı başlatabilir. Bu ayar üretim sunucuları üzerinde geçersiz kılınmalıdır.</p>';
$string['check_embed_error'] = 'Sınırsız nesne gömülmesi etkindir - bu, çoğu sunucu için çok tehlikelidir.';
$string['check_embed_name'] = 'EMBED ve OBJECT etiketi izni';
$string['check_embed_ok'] = 'Sınırsız nesne gömülmesine izin verilmez.';
$string['check_frontpagerole_details'] = '<p>Varsayılan site ana sayfa rolü, site ana sayfa etkinlikleri için kimliği doğrulanmış tüm kullanıcılara verilir. Lütfen bu rol için riskli yeteneklere izin verilmediğinden emin olun.</p>
<p>Bu amaç için özel bir rol oluşturulması ve eski tip bir rolün kullanılmaması önerilir.</p>.';
$string['check_frontpagerole_error'] = 'Yanlış tanımlanmış ana sayfa rolü "{$a}" tespit edildi!';
$string['check_frontpagerole_name'] = 'Ana sayfa rolü';
$string['check_frontpagerole_notset'] = 'Ana sayfa rolü ayarlanmadı';
$string['check_frontpagerole_ok'] = 'Ana sayfa rol tanımı uygundur.';
$string['check_guestrole_details'] = '<p>Konuk rolü, giriş yapmayan konuklar ve geçici konuk dersi erişimi için değil, konuklar için kullanılır. Lütfen bu rolde riskli yeteneklere izin verilmediğinden emin olun.</p>
<p>Konuk rolü için tek desteklenen devralınan tip <em>Konuk</em>tur.</p>';
$string['check_guestrole_error'] = 'Konuk rolü "{$a}" yanlış tanımlanmıştır!';
$string['check_guestrole_name'] = 'Konuk rolü';
$string['check_guestrole_notset'] = 'Konuk rolü ayarlanmamıştır.';
$string['check_guestrole_ok'] = 'Konuk rolü tanımı uygundur.';
$string['check_nodemodules_details'] = '<p> <code>{$a->path}</code> dizini, genellikle NPM yardımcı programı tarafından yüklenen Node.js modüllerini ve bağımlılıklarını içerir. Bu modüller, grunt çerçevesini kullanmak gibi yerel Moodle geliştirmesi için gerekli olabilir. Bir Moodle sitesini üretimde çalıştırmak için gerekli değildirler ve sitenizi uzaktan saldırılara maruz bırakan potansiyel olarak tehlikeli kod içerebilirler.</p><p>Site herkese açık bir URL üzerinden erişilebilirse dizini kaldırmanız veya en azından web sunucusu yapılandırmanızda web erişimini yasaklamanız şiddetle tavsiye edilir.</p><p>';
$string['check_nodemodules_info'] = 'node_modules dizini genel sitelerde bulunmamalıdır.';
$string['check_nodemodules_name'] = 'Node.js modülleri dizini';
$string['check_openprofiles_details'] = 'Açık kullanıcı profilleri spam gönderenler tarafından kötüye kullanılabilir.  <code>Kullanıcıları profiller için oturum açmaya zorla</code> veya <code>Kullanıcıları oturum açmaya zorla</code> seçeneklerinin etkinleştirilmesi önerilir.';
$string['check_openprofiles_error'] = 'Herkes kullanıcı profillerini giriş yapmadan görüntüleyebilir.';
$string['check_openprofiles_name'] = 'Kullanıcı profillerini aç';
$string['check_openprofiles_ok'] = 'Kullanıcı profillerini izlemeden önce giriş yapmak gereklidir.';
$string['check_passwordpolicy_details'] = '<p>Parola ilkesinin ayarlanması önerilir, çünkü parola tahmin etmek yetkisiz erişim elde etmede en sık başvurulan yoldur. Yine de gereksinimleri çok sıkılaştırmayın, çünkü bunun sonucunda kullanıcılar parolalarını hatırlamayabilir, unutabilir ya da bir yere yazabilir.</p>';
$string['check_passwordpolicy_error'] = 'Parola ilkesi ayarlanmadı';
$string['check_passwordpolicy_name'] = 'Parola ilkesi';
$string['check_passwordpolicy_ok'] = 'Parola ilkesi etkindir.';
$string['check_preventexecpath_details'] = '<p>Yürütülebilir yolların Yönetici GUI aracılığıyla ayarlanmasına izin vermek, ayrıcalık yükseltme için bir vektördür.  Bu, config.php\'de zorunlu kılınmalıdır:</p><p><code>$CFG->preventexecpath = true;</code></p>';
$string['check_preventexecpath_name'] = 'Çalıştırılabilir dosyalar';
$string['check_preventexecpath_ok'] = 'Çalıştırılabilir dosyalar yalnızca config.php\'de ayarlanabilir.';
$string['check_preventexecpath_warning'] = 'Çalıştırılabilir dosyalar Yönetici GUI\'sinde ayarlanabilir.';
$string['check_publicpaths_403'] = '(403 olarak döndürüldü, ideal olarak 404 olmalıdır)';
$string['check_publicpaths_generic'] = '{$a} dosya herkese açık olmamalıdır';
$string['check_publicpaths_name'] = 'Tüm genel/özel yolları kontrol edin';
$string['check_publicpaths_ok'] = 'Tüm dahili yollar herkese açık değildir';
$string['check_publicpaths_warning'] = 'Bazı dahili yollar herkesin erişimine açıktır';
$string['check_riskadmin_detailsok'] = '<p>Lütfen aşağıdaki sistem yöneticileri listesini doğrulayın:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Lütfen aşağıdaki sistem yöneticileri listesini doğrulayın:</p>{$a->admins}
<p>Yönetici rolünün yalnızca sistem bağlamında atanması önerilir. Aşağıdaki kullanıcıların diğer bağlamlarda (desteklenmeyen) yönetici rolü atamaları vardır:</p>{$a->desteklenmeyen}';
$string['check_riskadmin_name'] = 'Yöneticiler';
$string['check_riskadmin_ok'] = '{$a} sunucu yöneticisi bulundu.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) rol atamasını gözden geçir</a>';
$string['check_riskadmin_warning'] = '{$a->admincount} sunucu yöneticisi ve {$a->unsupcount} desteklenmeyen yönetici rolü ataması buldu.';
$string['check_riskbackup_details_overriddenroles'] = '<p> Bu etkin geçersiz kılmalar, Kullanıcı verilerinin yedeklere dahil olmasına izin verir. Lütfen bu iznin gerekli olduğundan emin olun. </p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p> Şu sistem rolleri, kullanıcıların kullanıcı verilerini yedeklemelere dahil etmesine izin veriyor. Lütfen bu iznin gerekli olduğundan emin olun. </p> {$a}';
$string['check_riskbackup_details_users'] = '<p> Yukarıdaki roller veya yerel geçersiz kılma nedeniyle, şu kullanıcı hesapları şu anda, derslerine kayıtlı herhangi bir kullanıcıdan gelen özel verileri içeren yedeklemeleri yapma iznine sahipler. (a) güvenilir ve (b) güçlü şifrelerle korunduklarından emin olun: </p> {$a}';
$string['check_riskbackup_detailsok'] = 'Hiçbir rol açıkça kullanıcı verilerinin yedeklenmesine izin vermez. Bununla birlikte, "doanything" özelliğine sahip yöneticilerin hala bunu yapabilecek durumda olduklarına dikkat edin.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} içinde {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Kullanıcı verilerinin yedeklenmesi';
$string['check_riskbackup_ok'] = 'Hiçbir rol açıkça kullanıcı verilerinin yedeklenmesine izin vermez';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) içinde {$a->contextname}</a>';
$string['check_riskbackup_warning'] = '{$a->rolecount} rol, {$a->overridecount} geçersiz kılma ve {$a->usercount} kullanıcısı yedekleme olanağı buldular.';
$string['check_riskxss_details'] = '<p>RISK_XSS yalnızca güvenilir kullanıcıların kullanabileceği tehlikeli yetkileri gösterir.</p>
<p>Aşağıdaki kullanıcı listesini doğrulayın ve bu sunucuda bu kullanıcılara tamamen güvendiğinizden emin olun:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS güvenilir kullanıcılar';
$string['check_riskxss_warning'] = 'RISK_XSS - güvenilmesi gereken {$a} kullanıcı buldu.';
$string['check_unsecuredataroot_details'] = '<p>Veriyolu klasörü web üzerinden erişilebilir olmamalıdır. Klasörün erişilebilir olmamasını sağlamanın en iyi yolu herkese açık web klasörü dışında bir klasör kullanmaktır.</p>
<p>Eğer klasörü taşıyacak olursanız, <code>config.php</code> içindeki <code>$CFG->dataroot</code> ayarını buna göre güncellemeniz gerekir.</p>';
$string['check_unsecuredataroot_error'] = 'Veriyolu klasörürünüz <code>{$a}</code> yanlış yerde ve internetten saldırılara açık durumda.';
$string['check_unsecuredataroot_name'] = 'Güvensiz veriyolu';
$string['check_unsecuredataroot_ok'] = 'Veriyolu klasörü web üzerinden erişilebilir olmamalı.';
$string['check_unsecuredataroot_warning'] = 'Veriyolu klasörünüz <code>{$a}</code> yanlış yerde ve internetten saldırılara maruz kalabilir.';
$string['check_upgradefile_info'] = 'Yükseltme notu dosyaları herkese açık olmamalıdır';
$string['check_vendordir_details'] = '<p> <code>{$a->path}</code> dizini, genellikle PHP Composer tarafından yüklenen çeşitli üçüncü taraf kütüphaneleri ve bunların bağımlılıklarını içerir. Bu kütüphaneler, PHPUnit çerçevesini kurmak gibi yerel Moodle geliştirme için gerekli olabilir. Bir Moodle sitesini üretimde çalıştırmak için gerekli değildirler ve sitenizi uzaktan saldırılara maruz bırakan potansiyel olarak tehlikeli kod içerebilirler.</p><p>Site herkese açık bir URL üzerinden erişilebilirse dizini kaldırmanız veya en azından web sunucusu yapılandırmanızda web erişimini yasaklamanız şiddetle tavsiye edilir.</p><p>';
$string['check_vendordir_info'] = 'Sağlayıcı dizini genel sitelerde bulunmamalıdır.';
$string['check_vendordir_name'] = 'Satıcı dizini';
$string['check_webcron_details'] = '<p> Web tarayıcısından cron\'u çalıştırmak ayrıcalıklı bilgileri anonim kullanıcılara gösterebilir. Yalnızca komut satırından cron\'u çalıştırmanız veya uzaktan erişim için bir cron şifresi belirlemeniz önerilir. </p>';
$string['check_webcron_name'] = 'Web cron';
$string['check_webcron_ok'] = 'Adsız kullanıcılar cron\'a erişemez.';
$string['check_webcron_warning'] = 'Anonim kullanıcılar cron\'a erişebilir.';
$string['configuration'] = 'Yapılandırma';
$string['description'] = 'Açıklama';
$string['details'] = 'Ayrıntılar';
$string['eventreportviewed'] = 'Görüntülenen güvenlik kontrolü raporu';
$string['issue'] = 'Sorun';
$string['pluginname'] = 'Güvenliği gözden geçir';
$string['privacy:metadata'] = 'Güvenliğe genel bakış eklentisi herhangi bir kişisel veri saklamaz.';
$string['security:view'] = 'Güvenlik raporunu görüntüle';
$string['timewarning'] = 'Veri işleme uzun sürebilir, lütfen sabırlı olun...';
