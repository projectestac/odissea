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
 * Strings for component 'scorm', language 'tr', version '4.5'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Etkinleştirme';
$string['activityloading'] = 'Otomatik olarak etkinliğe yönlendiriliyorsunuz';
$string['activityoverview'] = 'Dikkate alınması gereken SCORM paketleri var';
$string['activitypleasewait'] = 'Etkinlik yükleniyor, lütfen bekleyin ...';
$string['adminsettings'] = 'Yönetici ayarları';
$string['advanced'] = 'Parametreler';
$string['aicchacpkeepsessiondata'] = 'AICC HACP oturum verileri';
$string['aicchacpkeepsessiondata_desc'] = 'Harici AICC HACP oturum verilerini tutmak için geçen süre (yüksek bir ayar, tabloyu eski verilerle doldurur, ancak hata ayıklarken yararlı olabilir)';
$string['aicchacptimeout'] = 'AICC HACP zamanaşımı';
$string['aicchacptimeout_desc'] = 'Harici bir AICC HACP oturumunun açık kalabileceği dakika cinsinden süre';
$string['aiccuserid'] = 'AICC sayısal kullanıcı kimliği geç';
$string['aiccuserid_desc'] = 'Kullanıcı adları için AICC standardı, Moodle ile karşılaştırıldığında çok kısıtlayıcıdır ve yalnızca alfasayısal karakterler, çizgi ve alt çizgiye izin verir. Dönemler, boşluklar ve @ sembolüne izin verilmiyor. Etkinleştirilirse, kullanıcı kimliği numaraları kullanıcı adları yerine AICC paketine geçirilir.';
$string['aliasonly'] = 'Depodan bir imsmanifest.xml dosyası seçerken, bu dosya için bir takma ad / kısayol kullanmanız gerekir.';
$string['allowapidebug'] = 'API hata ayıklama ve izlemeyi etkinleştir (apidebugmask ile yakalama maskesini ayarlayın)';
$string['allowtypeaicchacp'] = 'Harici AICC HACP\'yi etkinleştir';
$string['allowtypeaicchacp_desc'] = 'Etkinleştirilirse, bu, harici AICC paketinden gelen yayın istekleri için kullanıcı girişi gerektirmeden AICC HACP dış iletişimi sağlar';
$string['allowtypeexternal'] = 'Harici paket türünü etkinleştir';
$string['allowtypeexternalaicc'] = 'Doğrudan AICC URL\'sini etkinleştir';
$string['allowtypeexternalaicc_desc'] = 'Etkinleştirildiğinde, bu, basit bir AICC paketine doğrudan bir url sağlar';
$string['allowtypelocalsync'] = 'İndirilmiş paket tipini etkinleştir';
$string['apidebugmask'] = 'API hata ayıklama yakalama maskesi- <kullanıcıadı>:<etkinlikadı> üzerinde basit bir normal ifade kullanın, örn. admin:.* yalnızca yönetici kullanıcı için hata ayıklayacaktır';
$string['areacontent'] = 'İçerik dosyaları';
$string['areapackage'] = 'Paket tipi';
$string['asset'] = 'Öge';
$string['assetlaunched'] = 'Öge - Bakılan';
$string['attempt'] = 'Deneme';
$string['attempt1'] = '1 deneme';
$string['attempts'] = 'Uygulama (lar)';
$string['attemptsmanagement'] = 'Deneme Yönetimi';
$string['attemptstatusall'] = 'Kontrol paneli ve giriş sayfası';
$string['attemptstatusentry'] = 'Yalnızca giriş sayfası';
$string['attemptstatusmy'] = 'Yalnızca kontrol paneli';
$string['attemptsx'] = '{$a} deneme';
$string['attr_error'] = '{$a->tag} etiketinde ({$a->attr}) özelliği için hatalı değer.';
$string['autocommit'] = 'Otomatik tamamlama';
$string['autocommit_help'] = 'Etkinleştirilirse, SCORM verileri otomatik olarak veritabanına kaydedilir. Verilerini düzenli olarak kaydetmeyen SCORM nesneleri için kullanışlıdır.';
$string['autocommitdesc'] = 'SCORM paketi kaydetmezse otomatik olarak SCORM verilerini kaydedin.';
$string['autocontinue'] = 'Otomatik devam et';
$string['autocontinue_help'] = 'Etkinleştirilirse, sonraki öğrenme nesneleri otomatik olarak başlatılır, aksi takdirde Devam düğmesi kullanılmalıdır.';
$string['autocontinuedesc'] = 'Etkinleştirilirse, sonraki öğrenme nesneleri otomatik olarak başlatılır, aksi takdirde Devam düğmesi kullanılmalıdır.';
$string['averageattempt'] = 'Uygulama ortalaması';
$string['badarchive'] = 'Geçerli bir zip dosyası sağlamalısınız';
$string['badimsmanifestlocation'] = 'Bir imsmanifest.xml dosyası bulundu, ancak zip dosyanızın kök dizininde değil, lütfen SCORM\'unuzu yeniden paketleyin';
$string['badmanifest'] = 'Manifest hatası: hata kayıtlarına bakın';
$string['browse'] = 'Önizleme';
$string['browsed'] = 'Gözatıldı';
$string['browsemode'] = 'Önizleme modu';
$string['browserepository'] = 'Depoya gözat';
$string['cachedef_elements'] = 'Öğe önbelleği';
$string['calculatedweight'] = 'Hesaplanan ağırlık';
$string['calendarend'] = '{$a} kapanacak';
$string['calendarstart'] = '{$a} açılacak';
$string['cannotaccess'] = 'Bu betiği bu şekilde arayamazsın';
$string['cannotfindsco'] = 'SCO bulunamadı';
$string['chooseapacket'] = 'Seç veya bir paketi güncelle';
$string['closebeforeopen'] = 'Açılış tarihinden önce bir yakın tarih belirlediniz.';
$string['collapsetocwinsize'] = 'Pencere boyutu aşağıda olduğunda İçindekiler sayfasını daralt';
$string['collapsetocwinsizedesc'] = 'Bu ayar, İçindekiler sayfasının otomatik olarak daraltılacağı pencere boyutunu belirtmenizi sağlar.';
$string['compatibilitysettings'] = 'Uyumluluk ayarları';
$string['completed'] = 'Tamamlandı';
$string['completiondetail:allscos'] = 'Bu etkinliğin tüm bölümlerini yapın';
$string['completiondetail:completionscore'] = '{$a} veya daha fazla puan al';
$string['completiondetail:completionstatuscompleted'] = 'Etkinliği tamamla';
$string['completiondetail:completionstatuscompletedorpassed'] = 'Etkinliği tamamlayın yada geçin';
$string['completiondetail:completionstatuspassed'] = 'Etkinlik geçme';
$string['completionscorerequired'] = 'Minimum puan isteyin';
$string['completionscorerequired_help'] = 'Bu ayarın etkinleştirilmesi, kullanıcının bu SCORM etkinliğinde ve diğer Etkinlik Tamamlama gereksinimlerinde eksiksiz olarak işaretlenmiş en azından minimum puanı girmesini gerektirir.';
$string['completionscorerequireddesc'] = 'Tamamlama için minimum {$a} puan gereklidir';
$string['completionstatus_completed'] = 'Tamamlandı';
$string['completionstatus_passed'] = 'Geçti';
$string['completionstatusallscos'] = 'Tüm SCO\'lar tamamlanma durumunu bildirmelidir';
$string['completionstatusallscos_help'] = 'Bazı SCORM paketleri birden fazla bileşen veya "sco" içerir - bu etkinleştirildiğinde paket içindeki tüm sco\'ların bu etkinliklerin tamamlanması için işaretlenmiş olan lesson_status döndürmesi gerekir.';
$string['completionstatusrequired'] = 'Durumu gerekli kıl';
$string['completionstatusrequired_help'] = 'Bir veya daha fazla statüyü kontrol etmek, bu SCORM etkinliğinde ve diğer Etkinlik Tamamlama gereksinimlerinde eksiksiz olarak işaretlenebilmek için kullanıcının bir kontrol durumundan en az birini elde etmesini gerektirir.';
$string['completionstatusrequireddesc'] = 'Öğrenci, aşağıdaki durumlardan en az birine ulaşmalıdır: {$a}';
$string['confirmloosetracks'] = 'UYARI: Paket değiştirilmiş veya güncellenmiş görünüyor. Paket yapısı değiştirildiyse bazı kullanıcı izlemeleri güncelleme sırasında kaybolabilir.';
$string['contents'] = 'İçerik';
$string['coursepacket'] = 'Kurs paketi';
$string['coursestruct'] = 'İçerik yapısı';
$string['crontask'] = 'SCORM için arka plan işleme';
$string['currentwindow'] = 'Geçerli pencere';
$string['datadir'] = 'Dosya sistemi hatası: Kurs veri klasörü oluşturulamadı.';
$string['defaultdisplaysettings'] = 'Varsayılan ekran ayarları';
$string['defaultgradesettings'] = 'Varsayılan not ayarları';
$string['defaultothersettings'] = 'Diğer varsayılan ayarlar';
$string['deleteallattempts'] = 'Tüm SCORM denemeleini sil';
$string['deleteattemptcheck'] = 'Bu denemeleri tamamen silmek istediğinizden emin misiniz?';
$string['deleteselected'] = 'Seçili uygulamaları sil';
$string['deleteuserattemptcheck'] = 'Tüm denemeleri tamamen silmek istediğinizden emin misiniz?';
$string['details'] = 'İzleme ayrıntıları';
$string['directories'] = 'Dizin bağlantılarını göster';
$string['disabled'] = 'Devre dışı bırakıldı';
$string['display'] = 'Paketi göster';
$string['displayattemptstatus'] = 'Uygulama durumunu göster';
$string['displayattemptstatus_help'] = 'Bu tercih, kullanıcıların denemelerinin bir özetinin Kontrol Panelindeki kursa genel bakış bloğunda ve/veya SCORM giriş sayfasında gösterilmesini sağlar.';
$string['displayattemptstatusdesc'] = 'Kullanıcının denemelerinin bir özetinin Kontrol Paneli\'ndeki kursa genel bakış bloğunda ve/veya SCORM giriş sayfasında gösterilip gösterilmeyeceği.';
$string['displaycoursestructure'] = 'İçerik yapısını giriş sayfasında görüntüle';
$string['displaycoursestructure_help'] = 'Etkinleştirilirse, içindekiler SCORM anahat sayfasında görüntülenir.';
$string['displaycoursestructuredesc'] = 'Etkinleştirilirse, içindekiler tablosu SCORM anahat sayfasında görüntülenir.';
$string['displaydesc'] = 'SCORM paketini yeni bir pencerede görüntüleyip görüntülememek.';
$string['displaysettings'] = 'Görüntü ayarları';
$string['dnduploadscorm'] = 'Bir SCORM paketi ekleyin';
$string['domxml'] = 'DOMXML harici kütüphanesi';
$string['element'] = 'Öge';
$string['enter'] = 'Giriş';
$string['entercourse'] = 'Kursa gir';
$string['errorlogs'] = 'Hata kayıtları';
$string['eventattemptdeleted'] = 'Silinmeye çalışıldı';
$string['eventinteractionsviewed'] = 'Görüntülenen etkileşimler';
$string['eventreportviewed'] = 'Görüntülenen rapor';
$string['eventscolaunched'] = 'Sco başlatıldı';
$string['eventscorerawsubmitted'] = 'SCORM ham puanı gönderildi';
$string['eventstatussubmitted'] = 'Gönderilen SCORM durumu';
$string['eventtracksviewed'] = 'İzlemeler Görüntülendi';
$string['eventuserreportviewed'] = 'Görüntülenen kullanıcı raporu';
$string['everyday'] = 'Her gün';
$string['everytime'] = 'Kullandığı her zaman';
$string['exceededmaxattempts'] = 'En fazla uygulama sayısına ulaştınız.';
$string['exit'] = 'Kurstan çık';
$string['exitactivity'] = 'Etkinlikten çık';
$string['expired'] = 'Üzgünüz, bu etkinlik {$a} tarihinde kapatılmış ve artık erişilemez';
$string['external'] = 'Harici paket zamanlamasını güncelle';
$string['failed'] = 'Hata oluştu';
$string['finishscorm'] = 'Bu kaynağı görüntülemeyi bitirdiyseniz, {$a}';
$string['finishscormlinkname'] = 'Kurs sayfasına geri dönmek için buraya tıklayın';
$string['firstaccess'] = 'İlk erişim';
$string['firstattempt'] = 'İlk deneme';
$string['floating'] = 'Gezinme';
$string['forceattemptalways'] = 'Her zaman';
$string['forceattemptoncomplete'] = 'Önceki deneme tamamlandığında, başarılı veya başarısız olduğunda';
$string['forcecompleted'] = 'Tamamlamaya zorla';
$string['forcecompleted_help'] = 'Etkinleştirilirse, mevcut denemelerin durumu "tamamlandı" olarak zorlanır. (Sadece SCORM 1.2 paketleri için geçerlidir.)';
$string['forcecompleteddesc'] = 'Bu seçenek, tamamlamaya zorla ayarı için varsayılan değeri ayarlar';
$string['forcejavascript'] = 'Kullanıcıları JavaScript\'i etkinleştirmeye zorla';
$string['forcejavascript_desc'] = 'Etkinleştirildiğinde (önerilen), JavaScript bir kullanıcı tarayıcısında desteklenmediğinde / etkinleştirilmediğinde SCORM nesnelerine erişimi engeller. Devre dışı bırakıldığında kullanıcı SCORM\'u görüntüleyebilir ancak API iletişimi başarısız olur ve sınıf bilgisi kaydedilmez.';
$string['forcejavascriptmessage'] = 'Bu nesneyi görmek için JavaScript gereklidir, lütfen tarayıcınızda JavaScript\'i etkinleştirip tekrar deneyin.';
$string['forcenewattempts'] = 'Yeni uygulamaya zorla';
$string['forcenewattempts_help'] = '3 seçenek vardır:

* Hayır - Önceki bir deneme tamamlanmış, başarılı veya başarısız olunmuşsa, öğrenciye gözden geçirme moduna girme veya yeni bir deneme başlatma seçeneği sunulacaktır.
* Önceki deneme tamamlanıp, başarılı veya başarısız olunduğunda - Bu, \'tamamlandı\', \'geçti\' veya \'başarısız\' durumunu ayarlayan SCORM paketini esas alır.
* Her Zaman - SCORM etkinliğine her yeniden giriş, yeni bir deneme oluşturur ve öğrenci önceki denemesinde ulaştığı noktaya geri döndürülmez.';
$string['found'] = 'Manifest bulundu';
$string['frameheight'] = 'Sahne çerçevesinin veya penceresinin yüksekliği.';
$string['framewidth'] = 'Sahne çerçevesinin veya penceresinin genişliği.';
$string['fromleft'] = 'Soldan';
$string['fromtop'] = 'Üstten';
$string['fullscreen'] = 'Ekranı kapla';
$string['general'] = 'Genel veri';
$string['gradeaverage'] = 'Ortalama not';
$string['gradeforattempt'] = 'Uygulama notu';
$string['gradehighest'] = 'En yüksek not';
$string['grademethod'] = 'Puanlama yöntemi';
$string['grademethod_help'] = 'Puanlama yöntemi, etkinliğin tek denemesi için puanın nasıl belirlendiğini tanımlar.

4 puanlama yöntemi vardır:

* Öğrenme nesneleri - Tamamlanan / geçilen öğrenme nesnelerinin sayısı
* En yüksek not - Geçilen tüm öğrenme nesnelerinde elde edilen en yüksek puanı
* Ortalama not - Tüm puanlar ortalamaları
* Toplam not - Tüm puanlar toplamı';
$string['grademethoddesc'] = 'Puanlama yöntemi, etkinliğin tek bir denemesi için notun nasıl belirlendiğini ayarlar.';
$string['gradereported'] = 'Not verme raporu';
$string['gradescoes'] = 'Öğrenme Nesneleri';
$string['gradesettings'] = 'Not verme ayarları';
$string['gradesum'] = 'Toplam not';
$string['height'] = 'Yükseklik';
$string['hidden'] = 'Gizli';
$string['hidebrowse'] = 'Önizleme modunu kapat';
$string['hidebrowse_help'] = 'Ön izleme modu, bir öğrencinin denemeden önce bir etkinliğe göz atmasına izin verir. Önizleme modu devre dışı bırakılırsa önizleme düğmesi gizlenir.';
$string['hidebrowsedesc'] = 'Önizleme modu, öğrencinin bir etkinliğe katılmadan önce göz atmasını sağlar.';
$string['hideexit'] = 'Çıkış bağlantısını gizle';
$string['hidereview'] = 'Önizleme düğmesini gizle';
$string['hidetoc'] = 'İçerik yapısını oynatıcıda görüntüle';
$string['hidetoc_help'] = 'SCORM oynatıcıda içindekiler tablosu nasıl görüntülenir?';
$string['hidetocdesc'] = 'Bu ayar içindekiler tablosunun SCORM oynatıcısında nasıl görüntüleneceğini belirtir.';
$string['highestattempt'] = 'En yüksek uygulama';
$string['identifier'] = 'Soru Tanımlayıcısı';
$string['incomplete'] = 'Tamamlanmadı';
$string['indicator:cognitivedepth'] = 'SCORM bilişsel';
$string['indicator:cognitivedepth_help'] = 'Bu gösterge, öğrencinin bir SCORM etkinliğinde ulaştığı bilişsel derinliğe dayanmaktadır.';
$string['indicator:cognitivedepthdef'] = 'SCORM bilişsel';
$string['indicator:cognitivedepthdef_help'] = 'Katılımcı, bu analiz aralığı sırasında SCORM etkinlikleri tarafından sunulan bilişsel katılımın bu yüzdesine ulaştı (Seviyeler = Görüntüleme Yok, Görüntüleme, Gönderme, Geri Bildirimi Görüntüleme)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'SCORM sosyal';
$string['indicator:socialbreadth_help'] = 'Bu gösterge, öğrencinin bir SCORM etkinliğinde ulaştığı sosyal genişliğe dayalıdır.';
$string['indicator:socialbreadthdef'] = 'SCORM sosyal';
$string['indicator:socialbreadthdef_help'] = 'Katılımcı, bu analiz aralığı sırasında SCORM etkinlikleri tarafından sunulan sosyal katılımın bu yüzdesine ulaştı (Seviyeler = Katılım yok, Yalnızca Katılımcı)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['interactions'] = 'Etkileşimler';
$string['invalidactivity'] = 'Scorm etkinliği hatalı';
$string['invalidhacpsession'] = 'Geçersiz HACP oturumu';
$string['invalidmanifestname'] = 'Only imsmanifest.xml or .zip files may be selected';
$string['invalidmanifestresource'] = 'UYARI: Aşağıdaki kaynaklar bildiriminizde referans alınmış ancak bulunamadı:';
$string['invalidstatus'] = 'Geçersiz durum';
$string['invalidurl'] = 'Geçersiz URL belirtildi';
$string['invalidurlhttpcheck'] = 'Geçersiz URL belirtildi. Hata ayıklama iletisi:<pre>{$a->cmsg}</pre>';
$string['largetrackupgrade'] = 'Bu sonraki yükseltme adımının tamamlanması biraz zaman alabilir, sitenizde {$a} Yeni tablo yapısına taşınması gereken SCORM parça kayıtları, bir ilerleme çubuğu görüntülenemediği için lütfen sabırlı olun.';
$string['last'] = 'Son erişim tarihi';
$string['lastaccess'] = 'Son erişim';
$string['lastattempt'] = 'Son tamamlanan uygulama';
$string['lastattemptlock'] = 'Son uygulamadan sonra kilitle';
$string['lastattemptlock_help'] = 'Etkinleştirilirse, bir öğrencinin kendisine atanan tüm denemeleri kullandıktan sonra SCORM oynatıcısını başlatması engellenir.';
$string['lastattemptlockdesc'] = 'Etkinleştirilirse, bir öğrencinin kendisine atanan tüm denemeleri kullandıktan sonra SCORM oynatıcısını başlatması engellenir.';
$string['location'] = 'Adres çubuğunu göster';
$string['masteryoverride'] = 'Mastery skor durumu geçersiz kılar.';
$string['masteryoverride_help'] = 'Etkinleştirildiğinde ve hakimlik skoru sağlandığı zaman, LMSFinish çağrıldığında ve ham skor ayarlandıysa, durum ham skor ve mastery skoru kullanılarak yeniden hesaplanacak ve SCORM tarafından sağlanan herhangi bir durum ("eksik" de dahil olmak üzere) geçersiz kılınacaktır.';
$string['masteryoverridedesc'] = 'Bu tercih, mastery score geçersiz kılma ayarı için varsayılanı ayarlar';
$string['max'] = 'Max puan';
$string['maximumattempts'] = 'Uygulama sayısı';
$string['maximumattempts_help'] = 'Bu ayar, denenme sayısının kısıtlanmasını sağlar. Yalnızca SCORM 1.2 ve AICC paketleri için geçerlidir.';
$string['maximumattemptsdesc'] = 'Bu seçenek, bir etkinlik için en fazla uygulama sayısını ayarlar';
$string['maximumgradedesc'] = 'Bu seçenek, bir etkinlik için verilebilecek en fazla notu ayarlar';
$string['menubar'] = 'Menü çubuğunu göster';
$string['min'] = 'En düşük puan';
$string['minimumscoregreater'] = 'Asgari puan 0\'dan büyük olmalıdır.';
$string['missing_attribute'] = '{$a->tag} etiketi içinde hatalı {$a->attr} özelliği';
$string['missing_tag'] = 'Hatalı tag {$a->tag}';
$string['missingparam'] = 'Gerekli bir alan eksik veya hatalı';
$string['mode'] = 'Mod';
$string['modulename'] = 'SCORM paketi';
$string['modulename_help'] = 'SCORM paketi, öğrenme nesneleri için kabul gören standarda göre paketlenmiş dosya koleksiyonudur. SCORM etkinlik modülü, SCORM veya AICC içerik paketlerinin kursa eklenmesii için  zip dosyası olarak yüklenmesini sağlar.

İçerikler genelde sayfaları arasında gezinti yapılabilen birden çok safyafadan oluşur. İçerikleri görütlelemek  için açılır pencere gezinti düğmeleri vb. çeşitli seçenekler vardır. SCORM etkinlikleri genel olarak, değerlendirme souçları not defterine kaydadilen soruları da içerir.

SCORM etkinlikleri aşağıdaki durumlarda kullanılabilir

* Animasyon ve çoklu ortam içeriklerini sunmak için
* Bir değerlendirme aracı olarak';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulenameplural'] = 'SCORM Paketleri';
$string['myaiccsessions'] = 'AICC  oturumlarım';
$string['myattempts'] = 'Denemelerim';
$string['nav'] = 'Gezinmeyi Göster';
$string['nav_help'] = 'Bu ayar, gezinme düğmelerinin ve konumlarının gösterilip gösterilmeyeceğini veya gizleneceğini belirtir.

3 seçenek var:

* Hayır - Gezinme düğmeleri gösterilmiyor
* İçerik altında - Gezinme düğmeleri SCORM paket içeriğinin altında gösterilir
* Yüzen - Gezinme düğmeleri yüzen olarak gösterilir; üstten ve soldan pakete göre belirlenir.';
$string['navdesc'] = 'Bu ayar, gezinme düğmelerinin ve konumlarının gösterilip gösterilmeyeceğini veya gizlenip gizlenmeyeceğini belirtir.';
$string['navigation'] = 'Gezinme';
$string['navpositionleft'] = 'Gezinme düğmelerinin piksel cinsinden konumu.';
$string['navpositiontop'] = 'Gezinme düğmelerinin üstten piksel olarak konumlandırılması.';
$string['networkdropped'] = 'SCORM çalar internet bağlantınızın güvenilmez olduğunu veya kesintiye uğradığını belirlemiştir. Bu SCORM etkinliğine devam ederseniz ilerleme kaydedilemeyebilir. <br />
Şimdi etkinlikten çıkıp güvenilir bir İnternet bağlantınız olduğunda geri dönmelisiniz.';
$string['newattempt'] = 'Yeni bir uygulama başlat';
$string['next'] = 'Devam et';
$string['no_attributes'] = '{$a->tag} etiketinin özellikleri olmalı';
$string['no_children'] = '{$a->tag} etiketinin alt ögeleri olmalı';
$string['noactivity'] = 'Rapor edilecek bir şey yok';
$string['noattemptsallowed'] = 'İzin verilen uygulama sayısı';
$string['noattemptsmade'] = 'Yaptığınız uygulama sayısı';
$string['nolimit'] = 'Sınırsız uygulama';
$string['nomanifest'] = 'Manifest bulunamadı';
$string['noprerequisites'] = 'Üzgünüz, bu etkinliğe erişmek için gerekli ön şartları yerine getirmediniz.';
$string['noreports'] = 'Gösterilecek rapor yok';
$string['normal'] = 'Normal';
$string['noscriptnoscorm'] = 'Tarayıcınız JavaScript\'i desteklemiyor veya JavaScript desteği devre dışı bırakılmış. Bu SCORM paketi verileri doğru şekilde yürütemeyebilir veya kaydedemeyebilir.';
$string['not_corr_type'] = '{$a->tag} etiketi için tip uyumsuzluğu';
$string['notattempted'] = 'Uygulanmadı';
$string['notopenyet'] = 'Üzgünüz, bu etkinliğe {$a} tarihine kadar erişemezsiniz.';
$string['objectives'] = 'Amaçlar';
$string['openafterclose'] = 'Kapanış tarihinden sonra olacak şekilde bir açık tarih belirlediniz';
$string['optallstudents'] = 'tüm kullanıcılar';
$string['optattemptsonly'] = 'yalnızca denemeleri olan kullanıcılar';
$string['options'] = 'Seçenekler (Bazı tarayıcılar tarafından engellenir)';
$string['optionsadv'] = 'Seçenekler (Gelişmiş)';
$string['optionsadv_desc'] = 'İşaretlenirse, genişlik ve yükseklik gelişmiş ayarlar olarak listelenir.';
$string['optnoattemptsonly'] = 'Sadece denemeye kalıtmayan öğrenciler';
$string['organization'] = 'Düzenleme';
$string['organizations'] = 'Düzenlemeler';
$string['othersettings'] = 'Ek ayarlar';
$string['package'] = 'Paket dosyası';
$string['package_help'] = 'Paket dosyası SCORM / AICC ders tanım dosyalarını içeren bir zip (veya pif) dosyasıdır.';
$string['packagedir'] = 'Dosya sistemi hatası: Klasör oluşturulamıyor';
$string['packagefile'] = 'Paket dosyası belirtilmedi';
$string['packagehdr'] = 'Paket';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Bu ayar, dosya seçici aracılığıyla bir dosya seçmek yerine, SCORM paketi için bir URL\'yi belirtmenizi sağlar.';
$string['page-mod-scorm-x'] = 'Herhangi bir SCORM modülü sayfası';
$string['pagesize'] = 'Sayfa boyutu';
$string['passed'] = 'Geçti';
$string['php5'] = 'PHP 5 (DOMXML doğal kütüphansesi)';
$string['pluginadministration'] = 'SCORM paket yönetimi';
$string['pluginname'] = 'SCORM paketi';
$string['popup'] = 'Yeni pencere';
$string['popuplaunched'] = 'Bu SCORM paketi bir açılır pencerede başlatılmıştır, bu kaynağı görüntülemeyi bitirdiyseniz, ders sayfasına dönmek için burayı tıklayın';
$string['popupmenu'] = 'Açılır menüde';
$string['popupopen'] = 'Paketi yeni bir pencerede aç';
$string['popupsblocked'] = 'Açılır pencerelerin engellendiği ve bu SCORM paketinin oynatılmasının durdurulduğu anlaşılıyor. Lütfen tekrar denemeden önce tarayıcı ayarlarınızı kontrol edin.';
$string['position_error'] = '{$a->tag} etiketi, {$a->parent} etiketinin alt ögesi olamaz.';
$string['preferencespage'] = 'Bu sayfa için tercihler';
$string['preferencesuser'] = 'Bu rapor için tercihler';
$string['prev'] = 'Önceki';
$string['privacy:metadata:aicc:data'] = 'AICC/SCORM alt sisteminden aktarılan kişisel veriler.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Bu eklenti, verileri AICC HACP\'yi kullanarak harici olarak gönderir.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'Takip edilecek ders durumu';
$string['privacy:metadata:aicc_session:scormmode'] = 'İzlenecek öğenin modu';
$string['privacy:metadata:aicc_session:scormstatus'] = 'İzlenecek öğenin durumu';
$string['privacy:metadata:aicc_session:sessiontime'] = 'Takip edilecek oturum süresi';
$string['privacy:metadata:aicc_session:timecreated'] = 'İzlenen öğenin oluşturulduğu saat';
$string['privacy:metadata:attempt'] = 'Deneme sayısı';
$string['privacy:metadata:scoes_track:element'] = 'İzlenecek öğenin adı';
$string['privacy:metadata:scoes_track:value'] = 'Verilen öğenin değeri';
$string['privacy:metadata:scorm_aicc_session'] = 'AICC HACP oturum bilgileri';
$string['privacy:metadata:scorm_attempt'] = 'Bir kullanıcı tarafından yapılan SCORM denemeleri';
$string['privacy:metadata:timemodified'] = 'İzlenen öğenin en son değiştirildiği saat';
$string['privacy:metadata:userid'] = 'SCORM etkinliğine erişen kullanıcının kimliği';
$string['protectpackagedownloads'] = 'Paket indirme işlemlerini koruma';
$string['protectpackagedownloads_desc'] = 'Etkinleştirilirse, SCORM paketleri yalnızca kullanıcının ders yöneticisi etkinlik yeteneği varsa indirilebilir. Devre dışı bırakılırsa, SCORM paketleri her zaman indirilebilir (mobil veya diğer yollarla).';
$string['raw'] = 'Ham puan';
$string['regular'] = 'Düzenli Manifest';
$string['report'] = 'Rapor';
$string['reportcountallattempts'] = 'Toplam {$a->nbresults} sonuçtan {$a->nbusers} kullanıcı için {$a->nbattempts} deneme';
$string['reportcountattempts'] = '{$a->nbresults} sonuç ({$a->nbusers} users)';
$string['reports'] = 'Raporlar';
$string['repositorynotsupported'] = 'Bu depo doğrudan imsmanifest.xml dosyasına bağlanmayı desteklemez.';
$string['response'] = 'Yanıt';
$string['result'] = 'Sonuç';
$string['results'] = 'Sonuç';
$string['review'] = 'Önizleme';
$string['reviewmode'] = 'Önizleme Modu';
$string['rightanswer'] = 'Doğru cevap';
$string['scoes'] = 'Öğrenme Nesneleri';
$string['score'] = 'Puan';
$string['scorm:addinstance'] = 'Yeni bir SCORM paketi ekleyin';
$string['scorm:deleteownresponses'] = 'Kendi denemelerimi sil';
$string['scorm:deleteresponses'] = 'Kullanıcı SCORM uygulamalarını sil';
$string['scorm:savetrack'] = 'İzlemeleri kaydet';
$string['scorm:skipview'] = 'Gözgeçirmeyi atla';
$string['scorm:viewreport'] = 'Raporlara bak';
$string['scorm:viewscores'] = 'Notlara bak';
$string['scormclose'] = 'Şu tarihe kadar kullanılabilir';
$string['scormcourse'] = 'Öğrenme Kurs';
$string['scormloggingoff'] = 'API kaydı kapalı';
$string['scormloggingon'] = 'API kaydı açık';
$string['scormopen'] = 'Şu tarihten itibaren kullanılailir';
$string['scormresponsedeleted'] = 'Kullanıcı uygulamaları silindi';
$string['scormstandard'] = 'SCORM standartları modu';
$string['scormstandarddesc'] = 'Devre dışı bırakıldığında Moodle, SCORM 1.2 paketlerinin belirtimmin izin verdiğinden daha fazlasını depolamasına izin verir ve kullanıcı adını SCORM paketine iletirken Moodle tam ad formatı ayarlarını kullanır.';
$string['scormtype'] = 'Tip';
$string['scormtype_help'] = 'Bu ayar, paketin derste nasıl dahil edileceğini belirler. 4 seçeneğe kadar var:

* Yüklenen paket - Dosya seçici aracılığıyla bir SCORM paketinin seçilmesini sağlar
* Harici SCORM bildirimi - Bir imsmanifest.xml URL\'sinin belirtilmesini sağlar. Not: URL sitenizden farklı bir alan adına sahipse, "İndirilen paket" daha iyi bir seçenektir, zira aksi durumda notlar kaydedilmez..
* İndirilen paketi - Belirtilecek bir paket URL\'sini etkinleştirir. Paketi yerel olarak açılmış ve kaydedilmiş olacak ve dış SCORM paketi güncellendiğinde güncellenecektir.
* Harici AICC URL\'si - bu URL, tek bir AICC Etkinliği için başlatılan URL\'dir. Bunun etrafında bir psuedo paketi inşa edilecek.';
$string['scrollbars'] = 'Kaydırma çubuğuna izin ver';
$string['search:activity'] = 'SCORM paketi - etkinlik bilgileri';
$string['selectall'] = 'Tümünü seç';
$string['selectnone'] = 'Tüm seçimleri kaldır';
$string['show'] = 'Göster';
$string['sided'] = 'Yanda';
$string['skipview'] = 'Öğrenci içerik yapısı sayfasını atlasın';
$string['skipview_help'] = 'Bu ayar, içerik yapısı sayfasının atlanıp atlanmayacağını (görüntülenmmeyeceğin) belirtir. Paket tek bir öğrenme nesnesi içeriyorsa, içerik yapısı sayfası her zaman atlanabilir.';
$string['skipviewdesc'] = 'Bu tercih, bir sayfa için içerik yapısını atlama zamanı için varsayılanı belirler';
$string['slashargs'] = 'UYARI: eğik çizgi bağımsız değişkenleri bu sitede devre dışı bırakılmıştır ve nesneler beklendiği gibi çalışmayabilir!';
$string['stagesize'] = 'Sahne boyutu';
$string['stagesize_help'] = 'Bu iki ayar, öğrenme nesneleri için çerçeve / pencere genişliği ve yüksekliğini belirtir.';
$string['started'] = 'Başlama tarihi';
$string['status'] = 'Durum';
$string['statusbar'] = 'Durum çubuğunu göster';
$string['student_response'] = 'Verilen yanıt';
$string['subplugintype_scormreport'] = 'Rapor';
$string['subplugintype_scormreport_plural'] = 'Raporlar';
$string['suspended'] = 'Durduruldu';
$string['syntax'] = 'Yazım hatası';
$string['tag_error'] = 'Bu içerikte bilinmeyen bir etiket ({$a->tag}) var: {$a->value}';
$string['time'] = 'Zaman';
$string['title'] = 'Başlık';
$string['toc'] = 'TOC';
$string['too_many_attributes'] = '{$a->tag} etiketinin çok fazla özelliği var';
$string['too_many_children'] = '{$a->tag} etiketinin çok fazla alt ögesi var';
$string['toolbar'] = 'Araç çubuğunu göster';
$string['totaltime'] = 'Zaman';
$string['trackcorrectcount'] = 'Doğru sayım';
$string['trackcorrectcount_help'] = 'Soru için doğru sonuç sayısı';
$string['trackid'] = 'Kimlik';
$string['trackid_help'] = 'Bu, SCORM paketiniz tarafından bu soru için belirlenen tanımlayıcıdır; SCORM belirtimi, tam soru metninin verilmesine izin vermez.';
$string['trackingloose'] = 'UYARI: Bu paketin izleme verisi kaybolacak!';
$string['tracklatency'] = 'Gecikme';
$string['tracklatency_help'] = 'Sorunun öğrenciye bir yanıt alınması zamanı ile ilk yanıtın zamanı arasında geçen süre.';
$string['trackpattern'] = 'Model';
$string['trackpattern_help'] = 'Bu sorunun cevabının doğru olması, öğrencilerin yanıtını göstermez.';
$string['trackresponse'] = 'Yanıt';
$string['trackresponse_help'] = 'Bu, öğrencinin bu soru için verdiği cevaptır';
$string['trackresult'] = 'Sonuç';
$string['trackresult_help'] = 'Öğrencinin doğru cevabı girip girmediğini gösterir.';
$string['trackscoremax'] = 'Maksimum puan';
$string['trackscoremax_help'] = 'Ham puana atanabilecek maksimum değer';
$string['trackscoremin'] = 'Minimum puan';
$string['trackscoremin_help'] = 'Ham puana atanabilecek minimum değer';
$string['trackscoreraw'] = 'Ham puan';
$string['trackscoreraw_help'] = 'Minimum ve max değerleriyle sınırlanan aralığa göre öğrenicinin performansını yansıtan sayı';
$string['tracksuspenddata'] = 'Veriyi askıya alma';
$string['tracksuspenddata_help'] = 'Öğrenci oturumları arasında veri depolamak ve almak için alan sağlar';
$string['tracktime'] = 'Süre';
$string['tracktime_help'] = 'Denemenin başladığı saat';
$string['tracktype'] = 'Tür';
$string['tracktype_help'] = 'Soru türü, örneğin "seçim" veya "kısacevapl".';
$string['trackweight'] = 'Ağırlık';
$string['trackweight_help'] = 'Puan hesaplanırken soruna atanan ağırlık.';
$string['type'] = 'Tip';
$string['typeaiccurl'] = 'Harici AICC URL\'si';
$string['typeexternal'] = 'Harici SCORM manifest';
$string['typelocal'] = 'Yüklenmiş paket';
$string['typelocalsync'] = 'İndirilmiş paket';
$string['undercontent'] = 'Içerik altında';
$string['unziperror'] = 'Paket açılırken hata oluştu';
$string['updatefreq'] = 'Otomatik-güncelleme sıklığı';
$string['updatefreq_error'] = 'Otomatik güncelleştirme sıklığı yalnızca paket dosyası dışarıdan barındırıldığında ayarlanabilir';
$string['updatefreq_help'] = 'Bu, dış paketin otomatik olarak indirilip güncellenmesini sağlar';
$string['updatefreqdesc'] = 'Bu tercih, bir etkinliğin varsayılan otomatik güncelleme sıklığını ayarlar';
$string['validateascorm'] = 'Bir paketi denetle';
$string['validation'] = 'Denetleme sonucu';
$string['validationtype'] = 'Bu seçenek SCORM paketindeki manifest dosyasınının geçerliliğini denetlemek için DOMXML kütüphanesinin kullanımını ayarlar. Ne yaptığınızı bilmiyorsanız seçili olanı bırakın.';
$string['value'] = 'Değer';
$string['versionwarning'] = 'Manifest sürümü 1.3\'den daha eski, {$a->tag} etiketinde uyarı';
$string['viewallreports'] = '{$a} uygulama raporuna bak';
$string['viewalluserreports'] = '{$a} uygulama raporuna bak';
$string['whatgrade'] = 'Deneme Puanlama';
$string['whatgrade_help'] = 'Birden çok denemeye izin verilirse, bu ayar, en yüksek, ortalama (aritmetik ortalama), ilk veya son tamamlanan denemenin not defterine kaydedilip kaydedilmeyeceğini belirtir. Son tamamlanan deneme seçeneği, \'başarısız\' olunan denemeleri içermez.

Birden fazla girişimi işleme hakkında notlar:

* Yeni bir deneme başlatma seçeneği, içerik yapısı sayfasındaki Enter düğmesinin üzerindeki bir onay kutusu tarafından sağlanır; bu nedenle, birden fazla denemede izin vermek istiyorsanız, o sayfaya erişim sağladığınızdan emin olun.
* Bazı SCORM paketleri yeni denemeler hakkında akılcı olsa da, pek çoğu değildir. Bunun anlamı, öğrenen mevcut bir denemey tekrar girerse, SCORM içeriği önceki girişimlerin üzerine yazılmasını önlemek için iç mantığa sahip değilse, girişimi "tamamlandı" veya "geçti" olsa bile üzerine yazılabilir.
* "Tamamlamaya zorla", "Yeni denemeye zorla" ve "Son denemelerden sonra kilitle" ayarları da birden fazla denemenin iyi fazla yönetimini sağlar.';
$string['whatgradedesc'] = 'Birden çok denemeye izin verilmesi durumunda not defterine en yüksek, ortalama (aritmetik ortalama), ilk veya son tamamlanan denemenin kaydedilip kaydedilmeyeceğini belirleyin.';
$string['width'] = 'Genişlik';
$string['window'] = 'Pencere';
$string['youmustselectastatus'] = 'İstemek için bir durum seçmelisiniz';
