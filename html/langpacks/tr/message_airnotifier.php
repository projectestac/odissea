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
 * Strings for component 'message_airnotifier', language 'tr', version '4.5'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Cihazları yönet';
$string['airnotifieraccesskey'] = 'Airnotifier erişim anahtarı';
$string['airnotifierappname'] = 'Airnotifier uygulama adı';
$string['airnotifierfielderror'] = 'Lütfen aşağıdaki alandan tüm boş alanları veya gereksiz karakterleri kaldırın: {$a}';
$string['airnotifiermobileappname'] = 'Mobil uygulama adı';
$string['airnotifierport'] = 'Airnotifier bağlantı noktası';
$string['airnotifierurl'] = 'Airnotifier URL';
$string['checkconfiguration'] = 'Anlık bildirim yapılandırmasını kontrol edin ve test edin';
$string['configairnotifieraccesskey'] = 'Airnotifier sunucusuna bağlanmak için erişim anahtarı. Aşağıdaki "Erişim Anahtarı talep Et" bağlantısına tıklayarak (yalnızca kayıtlı siteler) veya <a href="https://apps.moodle.com"> Moodle Uygulamaları Portalı </a>\'da bir hesap oluşturarak bir erişim anahtarı edinebilirsiniz.';
$string['configairnotifierappname'] = 'Airnotifier\'daki uygulama adı tanımlayıcısı.';
$string['configairnotifiermobileappname'] = 'Mobil uygulama benzersiz tanımlayıcı (genellikle com.moodle.moodlemobile gibi).';
$string['configairnotifierport'] = 'Airnotifier sunucusuna bağlanırken kullanılacak bağlantı noktası.';
$string['configairnotifierurl'] = 'Değişiklik bildirimlerini göndermek için sunucu url\'i.';
$string['configured'] = 'Yapılandırılmış';
$string['deletecheckdevicename'] = 'Cihazınızı silin: {$a->name}';
$string['deletedevice'] = 'Cihazı sil. Bir uygulamanın cihazı tekrar kaydedebileceğini unutmayın. Cihaz tekrar görünmeye devam ederse, devre dışı bırakın.';
$string['devicetoken'] = 'Cihaz belirteci';
$string['donotsendnotification'] = 'Hiç bildirim göndermeyin';
$string['enableprocessor'] = 'Mobil bildirimleri etkinleştir';
$string['encryptnotifications'] = 'Bildirimleri şifrele';
$string['encryptnotifications_help'] = 'Uygulama bildirimlerinin uçtan uca şifrelenmesini etkinleştirin. Şifrelenemezse bazı veriler bildirimlerden kaldırılabilir.';
$string['encryptprocessing'] = 'Şifrelemeyi desteklemeyen cihazlar için';
$string['encryptprocessing_desc'] = 'Şifrelenmiş bildirimler için en az Android 8 veya iOS 13 ve Moodle App 4.2 veya üstü gerekir.';
$string['errorretrievingkey'] = 'Erişim anahtarı alınırken bir hata oluştu.  Bu hizmeti kullanmak için sitenizin kayıtlı olması gerekir.  Siteniz zaten kayıtlıysa, lütfen kaydınızı güncellemeyi deneyin.  Alternatif olarak, <a href="https://apps.moodle.com">Moodle Apps Portalı</a>\'nda bir hesap oluşturarak bir erişim anahtarı edinebilirsiniz.';
$string['keyretrievedsuccessfully'] = 'Erişim anahtarı başarıyla alındı.  Moodle uygulama kullanım istatistiklerine erişmek için lütfen <a href="https://apps.moodle.com">Moodle Uygulamaları Portalı</a>\'nda bir hesap oluşturun.';
$string['messageprovidersempty'] = 'Varsayılan bildirim tercihlerinde etkinleştirilen mobil bildirim yok.';
$string['messageproviderslow'] = 'Varsayılan bildirim tercihlerinde yalnızca birkaç mobil bildirim etkinleştirilmiştir.';
$string['moodleappsportallimitswarning'] = 'Bildirim almasına izin verilen kullanıcı cihazı sayısının Moodle uygulama aboneliğinize bağlı olduğunu lütfen unutmayın.  Ayrıntılar için <a href="{$a}" target="_blank">Moodle Apps Portalı</a>\'nı ziyaret edin.';
$string['nodevices'] = 'Kayıtlı cihaz yok. Moodle uygulamasını yükledikten ve bu siteyi ekledikten sonra cihazlar otomatik olarak görünecektir.';
$string['noemailevernotset'] = '$CFG->noemailever devre dışı bırakıldı';
$string['noemaileverset'] = '$CFG->noemailever, config.php\'de etkindir. Bu ayarı yanlış olarak ayarlamanız veya kaldırmanız gerekir.';
$string['nopermissiontomanagedevices'] = 'Cihazları yönetme izniniz yok.';
$string['notconfigured'] = 'Airnotifier sunucusu yapılandırılmadığı için Airnotifier mesajları gönderilemez';
$string['notificationsserverconfiguration'] = 'Bildirim sunucusu (Airnotifier) yapılandırması';
$string['pluginname'] = 'Mobil';
$string['privacy:appiddescription'] = 'Bu, kullanılan uygulamanın tanımlayıcısıdır.';
$string['privacy:enableddescription'] = 'Bu cihaz airnotifier için etkinleştirildiyse.';
$string['privacy:metadata:date'] = 'Mesajın gönderildiği tarih.';
$string['privacy:metadata:enabled'] = 'Airnotifier cihazının etkinleştirilip etkinleştirilmediği.';
$string['privacy:metadata:externalpurpose'] = 'Bu bilgi, nihai olarak kullanıcının mobil cihazına iletilmek üzere harici bir siteye gönderilir.';
$string['privacy:metadata:fullmessage'] = 'Tam mesaj.';
$string['privacy:metadata:notification'] = 'Bu mesaj bir bildirim ise.';
$string['privacy:metadata:smallmessage'] = 'Mesajın bir bölümü.';
$string['privacy:metadata:subject'] = 'Mesajın konu satırı.';
$string['privacy:metadata:tableexplanation'] = 'Airnotifier cihaz bilgileri burada saklanır.';
$string['privacy:metadata:userdeviceid'] = 'Kullanıcının mobil cihazına bağlanan kimlik';
$string['privacy:metadata:userfromfullname'] = 'Mesajı gönderen kullanıcının tam adı.';
$string['privacy:metadata:userfromid'] = 'Mesajın yazarının kullanıcı kimliği.';
$string['privacy:metadata:userid'] = 'Mesajı gönderen kullanıcının kimliği.';
$string['privacy:metadata:username'] = 'Kullanıcı adı.';
$string['privacy:metadata:usersubsystem'] = 'Bu eklenti, kullanıcı alt sistemine bağlıdır.';
$string['privacy:subcontext'] = 'Mesaj Hava Bildiricisi';
$string['requestaccesskey'] = 'Erişim anahtarı isteğinde bulun';
$string['sendnotificationnotenc'] = 'Şifreleme olmadan bildirim gönderme';
$string['sendtest'] = 'Cihazlarıma test push bildirimi gönder';
$string['sendtestconfirmation'] = 'Bu siteye bağlanmak için kullandığınız cihazlara bir test push bildirimi gönderilecektir.  Lütfen cihazlarınızın internete bağlı olduğundan ve mobil uygulamanın açık olmadığından emin olun (çünkü anlık bildirimler yalnızca arka planda alındığında görüntülenir).';
$string['serverconnectivityerror'] = 'Bu site, {$a} bildirim sunucusuna bağlanamıyor';
$string['showhide'] = 'Cihazı etkinleştir/devre dışı bırak.';
$string['sitemustberegistered'] = 'Herkese açık Airnotifier örneğini kullanmak için sitenizin kayıtlı olması gerekir.  Alternatif olarak, <a href="https://apps.moodle.com">Moodle Apps Portalı</a>\'nda bir hesap oluşturarak bir erişim anahtarı edinebilirsiniz.';
$string['unknowndevice'] = 'Bilinmeyen aygıt';
$string['userdevices'] = 'Kullanıcı cihazları';
$string['view_notification'] = 'Görüntülemek için dokunun';
