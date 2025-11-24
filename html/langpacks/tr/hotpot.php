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
 * Strings for component 'hotpot', language 'tr', version '4.5'.
 *
 * @package     hotpot
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = 'Vazgeçildi';
$string['abandonhotpot'] = 'Cevaplarınız kaydedildi. Fakat daha sonra tekrar yeniden uygulayamaz veya kaldığınız yerden devam edemezsiniz.';
$string['activitycloses'] = 'Etkinlikler kapanacak';
$string['activitygrade'] = 'Etkinlik puanı';
$string['activityopens'] = 'Etkinlik açılacak';
$string['added'] = 'Eklendi';
$string['addquizchain'] = 'Sınav zinciri ekle';
$string['addquizchain_help'] = 'Bir sınav zincirindeki tüm sınavlar eklenmeli mi?

**Hayır**
: Derse sadece bir sınav eklenecektir

**Evet**
: Kaynak dosya bir ** Sınav dosyası ** ise, bir sınav zincirinin başlangıcı olarak kabul edilir ve zincirdeki tüm sınavlar aynı ayarlarla Derse eklenir. Zincirdeki her sorunun, zincirdeki bir sonraki dosyayla bağlantılı olması gerekir.

Kaynak dosya bir **klasör** ise, aynı ayarlara sahip sınavlar zinciri oluşturmak üzere klasördeki tanınmış tüm sınavlar derste eklenecektir.

Kaynak dosya bir Hot Potatoes masher dosyası veya index.html gibi bir ** birim dosyası ** ise, birim dosyasında listelenen testler, aynı ayarlara sahip olan sınavlar zinciri olarak derse eklenecektir.';
$string['allowpaste'] = 'Yapıştırmaya izin ver';
$string['allowpaste_help'] = 'Eğer bu seçenek etkinleştirilirse, öğrenciler metinleri, metin kutularına kopyala&yapıştır ve/veya sürükle&bırak yapabilecek.';
$string['allowreview'] = 'Gözden geçirmeye izin ver';
$string['allowreview_help'] = 'Etkinleştirilirse, öğrenciler sınav bittikten sonra sonuçları gözden geçirebilecekler.';
$string['analysisreport'] = 'Madde analizi';
$string['attempted'] = 'Denendi';
$string['attemptlimit'] = 'Deneme Limiti';
$string['attemptlimit_help'] = 'Bir öğrencinin bu HotPot etkinliği için yapabileceği maximum deneme sayısı';
$string['attemptnumber'] = 'Deneme sayısı';
$string['attempts'] = 'Deneme';
$string['attemptscore'] = 'Deneme Puanı';
$string['attemptsunlimited'] = 'Sınırsız Deneme Hakkı';
$string['average'] = 'Ortalama';
$string['averagescore'] = 'Ortalama puan';
$string['bodystyles'] = 'Gövde stilleri';
$string['bodystylesbackground'] = 'Arkaplan rengi ve resmi';
$string['bodystylescolor'] = 'Metin rengi';
$string['bodystylesfont'] = 'Font rengi ve ailesi';
$string['bodystylesmargin'] = 'Sol ve sağ kenar boşluğu';
$string['cacherecords'] = 'HotPot önbellek kayıtları';
$string['canrestarthotpot'] = 'Şimdiye kadar elde ettiğiniz sonuçlar kaydedilecek ve daha sonra "{$a}" yeniden uygulayabilirsiniz';
$string['canresumehotpot'] = 'Şimdiye kadar elde ettiğiniz sonuçlar kaydedilecek ve daha sonra "{$a}" başlayabilirsiniz.';
$string['checks'] = 'Denetim';
$string['checksomeboxes'] = 'Lütfen bazı kutuları işaretleyiniz';
$string['clearcache'] = 'HotPot önbelleğini temizle';
$string['cleardetails'] = 'HotPot detaylarını temizle';
$string['clearedcache'] = 'HotPot önbelleği temizlendi';
$string['cleareddetails'] = 'HotPot detayları silindi';
$string['clickreporting'] = 'Tıklama raporunu etkinleştir';
$string['clickreporting_help'] = 'Etkinleştirilirse, bir "ipucu", "ipucu" veya "kontrol" düğmesi her tıklandığında ayrı bir kayıt tutulur. Bu, öğretmenin her bir tıklamayla sınavın durumunu gösteren çok ayrıntılı bir raporu görmesini sağlar. Aksi takdirde, sınavda deneme başına yalnızca bir kayıt tutulur.';
$string['clicktrailreport'] = 'Yolları tıklayın';
$string['closed'] = 'Bu etkinlik kapatıldı';
$string['clues'] = 'İpuçları';
$string['completed'] = 'Tamamlandı';
$string['completioncompleted'] = 'Tamamlanan durum gerekli';
$string['completionmingrade'] = 'Minimum notu gerekli';
$string['completionpass'] = 'Geçiş notu gerekli';
$string['completionwarning'] = 'Bu alanın sınıfı sınırı "Not yok" veya not ağırlığı "Ağırlık yok" olduğunda bu alanlar devre dışı bırakılır';
$string['configbodystyles'] = 'Varsayılan olarak, Moodle tema stilleri HotPot etkinlik stillerini geçersiz kılacaktır. Bununla birlikte, burada seçilen stiller için HotPot etkinlik stillerine Moodle tema stilleri üzerinde öncelik verilecektir.';
$string['configenablecache'] = 'HotPot sınavlarının önbelleğini elinde bulundurmak, sınavların öğrencilere kazandırılmasını önemli ölçüde hızlandırabilir.';
$string['configenablecron'] = 'HotPot cron komut dosyasının çalıştığı saat dilimindeki saatleri belirtin';
$string['configenablemymoodle'] = 'Bu ayar HotPot\'ların MyMoodle sayfasında listelenip listelenmediğini kontrol eder';
$string['configenableobfuscate'] = 'Metin dizelerini ve URL\'leri javascript kodunda karmaşıklaştırmak, tarayıcıdaki HTML sayfasının kaynağını görüntüleyerek yanıtları tahmin etmeyi zorlaştırır.';
$string['configenableswf'] = 'HotPot etkinliklerine SWF dosyalarının yerleştirilmesine izin ver. Etkinleştirilirse, bu ayar filter_mediaplugin_enable_swf yerine geçer.';
$string['configfile'] = 'Ayar dosyası';
$string['configframeheight'] = 'Bir çerçeve içerisinde bir sınav görüntülendiğinde, bu değer, Moodle gezinme çubuğunu içeren üst çerçevenin yüksekliğidir (piksel cinsinden).';
$string['configlocation'] = 'Ayar dosyasına ait konum';
$string['configlockframe'] = 'Bu ayar etkinleştirilirse, gezinme çerçevesi kullanılırsa kilitlenebilir, böylece kaydırılabilir değildir, yeniden boyutlandırılamaz ve kenarlık yoktur.';
$string['configmaxeventlength'] = 'HotPot açık ve kapalı bir süre belirtilmişse ve iki zaman arasındaki fark burada belirtilen gün sayısından büyükse, ders takvimine iki ayrı takvim etkinliği eklenecektir. Daha kısa süreler için veya yalnızca bir kez belirtildiğinde, yalnızca bir takvim etkinliği eklenir. Ne zaman belirtilmediyse, takvim etkinliği eklenmez.';
$string['configstoredetails'] = 'Bu ayar etkinleştirilirse, HotPot sınavlarındaki girişimleri gösteren ham XML ayrıntıları hotpot_details tablosunda saklanır. Bu, HotPot quiz puanlama sistemindeki değişiklikleri yansıtmak için gelecekte yeniden düzenlenmeye çalışılan sınav girişimleri sağlar. Bununla birlikte, yoğun bir sitede bu seçeneği etkinleştirmek hotpot_details tablosunun çok hızlı bir şekilde büyümesine neden olur.';
$string['confirmdeleteattempts'] = 'Bu denemeleri gerçekten silmek istiyor musunuz?';
$string['confirmstop'] = 'Bu sayfadan uzaklaşmak istediğinizden emin misiniz?';
$string['correct'] = 'Doğru';
$string['couldnotinsertsubmissionform'] = 'Gönderim formu eklenemedi';
$string['d_index'] = 'Ayırıcı index';
$string['delay1'] = 'Bekleme 1';
$string['delay1_help'] = 'Birinci ve ikinci deneme arasındaki minimum bekleme süresi';
$string['delay1summary'] = 'Birinci ve ikinci deneme arasındaki bekleme süresi';
$string['delay2'] = 'Bekleme 2';
$string['delay2_help'] = 'İkinci denemeden sonraki uygulamalar arasındaki bekleme süresi';
$string['delay2summary'] = 'Sonraki denemeler arasındaki bekleme süresi';
$string['delay3'] = 'Bekleme 3';
$string['delay3_help'] = 'Ayarı, sınavı bitirme ve ekranın Moodle\'a geri dönmesi arasındaki gecikmeyi belirtir.

** Belli bir gecikmeyi ** kullanın
: Kontrol belirtilen gecikmeden sonra Moodle\'a geri gönderilecektir.

**Kaynak/şablon dosyasındaki ayarları kullanın**
: Kaynak dosya veya bu çıktı biçimi için şablon dosyalarında belirtilen saniye sayısından sonra denetim Moodle\'a geri gönderilecektir.

**Öğrenci tamamlamasını bekleyene kadar bekleyin**
: Öğrenci, sınavdaki tamamlama mesajında OK düğmesini tıklattıktan sonra kontrol Moodle\'a geri gönderilecektir.

**Otomatik olarak devam etmeyin**
: Sınav bittikten sonra kontrol Moodle\'a geri gönderilmeyecektir. Öğrenci, sınav sayfasından gitmekte serbesttir.

Not, quiz sonuçları, Moodle\'a her zaman, bu ayardan bağımsız olarak test tamamlandığında veya terk edildiğinde unutulmamalıdır.';
$string['delay3afterok'] = 'Öğrenciler TAMAM a basana kadar bekleyiniz';
$string['delay3disable'] = 'Otomatik olarak devam edemezsiniz';
$string['delay3specific'] = 'Belirli bir zaman belirt (Saniye cinsinden)';
$string['delay3summary'] = 'Sınav sonunda bekleme süresi';
$string['delay3template'] = 'Kaynak/şablon dosyasındaki ayarları kullanın';
$string['deleteallattempts'] = 'Tüm uygulamaları sil';
$string['deleteattempts'] = 'Uygulamaları sil';
$string['detailsrecords'] = 'HotPot kayıt ayrıntıları';
$string['duration'] = 'Süre';
$string['enablecache'] = 'HotPot önbelleğini etkinleştir';
$string['enablecron'] = 'HotPot cron etkinleştiriniz';
$string['enablemymoodle'] = 'MyMoodle\'da HotPots Göster';
$string['enableobfuscate'] = 'Metin ve medya oynatıcılarının şaşırtma özelliğini etkinleştirin';
$string['enableswf'] = 'SWF dosyalarının HotPot etkinliklerin gömülebilmesine izin ver';
$string['entry_attempts'] = 'Uygulamalar';
$string['entry_dates'] = 'Tarihler';
$string['entry_grading'] = 'Puanlama';
$string['entry_title'] = 'Başlık olarak birim adı';
$string['entrycm'] = 'Önceki Etkinlik';
$string['entrycm_help'] = 'Bu ayar bir Moodle aktivitesini ve bu HotPot aktivitesine teşebbüs edilmeden önce gerçekleştirilmesi gereken bir etkinlik için bir minimum derece belirtir.

Öğretmen belirli bir etkinlik seçebilir,
Veya aşağıdaki genel amaçlı ayarlardan biriyle değiştirilebilir:

* Bu derste önceki etkinlik
* Bu bölümdeki önceki etkinlik
* Bu derste geçen HotPot
* Bu bölümdeki Önceki HotPot';
$string['entrycmcourse'] = 'Bu dersteki bir önceki etkinlik';
$string['entrycmsection'] = 'Bu kurs bölümündeki Önceki etkinlik';
$string['entrycompletionwarning'] = 'Bu etkinliği başlatmadan önce, {$a}\'ya  bakmanız gerekir.';
$string['entrygrade'] = 'Önceki etkinlikten alınan not';
$string['entrygradewarning'] = '{$a->entryactivity} üzerinde {$a->entrygrade}% puan elde edene kadar bu etkinliğe başlayamazsınız. Şu anda, bu etkinlik için notunuz {$a->usergrade}%';
$string['entryhotpotcourse'] = 'Bu kursdaki önceki HotPot';
$string['entryhotpotsection'] = 'Bu kurs bölümündeki Önceki HotPot';
$string['entryoptions'] = 'Giriş sayfası seçenekleri';
$string['entryoptions_help'] = 'Bu onay kutuları, HotPot giriş sayfasındaki öğelerin görüntülenmesini etkinleştirir veya devre dışı bırakır.

**Ünite adı başlık** olarak
: Işaretli ise, ünite adı giriş sayfasının başlığı olarak gösterilir.

**Not verme**
: Işaretlendiğinde, HotPot\'un derecelendirmesi bilgileri giriş sayfasında görüntülenir.

**Tarih**
: Işaretlendiğinde HotPot\'un açık ve kapalı tarihleri giriş sayfasında görüntülenir.

**Denemeler**
: İşaretlenirse, bir kullanıcının bu HotPot\'taki daha önceki girişimleri ayrıntılarını gösteren bir tablo giriş sayfasında görüntülenir. Devam edebilecek denemeler, en sağdaki sütunda görüntülenen bir devam düğmesine basılacaktır.';
$string['entrypage'] = 'Giriş sayfasını göster';
$string['entrypage_help'] = 'HotPot etkinliğine başlamadan önce öğrencilere bir başlangıç sayfası gösterilmeli mi?

**Evet**
: HotPot\'a başlamadan önce öğrencilere bir giriş sayfası gösterilecektir. Giriş sayfasının içeriği, HotPot\'un giriş sayfası seçenekleri ile belirlenir.

**Hayır**
: Öğrencilere bir giriş sayfası gösterilmeyecek ve HotPot\'u derhal başlatacaktır.

Raporlara erişim sağlamak ve sınavları düzenlemek için öğretmen her zaman bir giriş sayfası gösterilir';
$string['entrypagehdr'] = 'Giriş sayfası';
$string['entrytext'] = 'Giriş sayfası metni';
$string['event_attempt_reviewed'] = 'HotPot uygulamaları incelendi';
$string['event_attempt_reviewed_description'] = '"{$a->userid}" kimliğine sahip olan kullanıcı "{$a->cmid}" ders modülü kimliğine sahip "hotpot" etkinliğinde bir denemeyi inceledi.';
$string['event_attempt_reviewed_explanation'] = 'Bir kullanıcı HotPot etkinliğine girişimi gözden geçirdi.';
$string['event_attempt_started'] = 'HotPot uygulaması başladı';
$string['event_attempt_started_description'] = '"{$a->userid}" kimliğine sahip kullanıcı "{$a->cmid}" ders modülü kimliğine sahip "hotpot" etkinliğinde bir girişim başlattı.';
$string['event_attempt_started_explanation'] = 'Bir kullanıcı HotPot etkinliği girişiminde bulundu';
$string['event_attempt_submitted'] = 'HotPot Uygulaması gönderildi.';
$string['event_attempt_submitted_description'] = '"{$a->userid}" kimliği olan kullanıcı "{$a->cmid}" ders modülü kimliğine sahip "hotpot" etkinliğinde bir girişimde bulundu';
$string['event_attempt_submitted_explanation'] = 'Bir kullanıcı sadece HotPot etkinliği girişiminde bulundu.';
$string['event_base'] = 'HotPot olayı tespit edildi';
$string['event_base_description'] = '"{$a->userid}" kimliği olan kullanıcı "{$a->cmid}" ders modülü kimliğine sahip "hotpot" etkinliğinde bir etkinlik başlattı.';
$string['event_base_explanation'] = 'HotPot modülü tarafından bir olay tespit edildi';
$string['event_report_viewed'] = 'HotPot raporu inceledi';
$string['event_report_viewed_description'] = '"{$a->userid}" kimliğine sahip olan kullanıcı "{$a->cmid}" ders modülü kimliğine sahip "hotpot" etkinliğiyle ilgili bir rapor görüntülemiştir.';
$string['event_report_viewed_explanation'] = 'Bir kullanıcı HotPot etkinliği denemeleri hakkında yeni bir rapor izledi';
$string['exit_areyouok'] = 'Merhaba, halen orada mısınız ?';
$string['exit_attemptscore'] = 'Bu uygulama için puanınız {$a} dir';
$string['exit_course'] = 'Ders';
$string['exit_course_text'] = 'Kurs ana sayfasına dön';
$string['exit_encouragement'] = 'Cesaretlendirme';
$string['exit_excellent'] = 'Mükemmel!';
$string['exit_feedback'] = 'Çıkış sayfası geri bildirimi';
$string['exit_feedback_help'] = 'Bu seçenekler HotPot\'un çıkış sayfasındaki geribildirim öğelerinin görüntülenmesini etkinleştirir veya devre dışı bırakır.

**Ünite adı başlık** olarak
: Işaretlenirse, ünite adı çıkış sayfasının başlığı olarak görüntülenir.

**Teşvik**
: Işaretli ise, çıkış sayfasında bir miktar cesaret gösterilecektir. Teşvik, HotPot derecesine bağlı:
: **&gt; 90% **: Mükemmel!
: **&gt; 60% **: Aferin
: **&gt; 0% **: İyi deneme
: ** = 0% **: iyi misiniz?

** Birim deneme notu **
: İşaretliyse, henüz tamamlanmış ünite denemesinin notu çıkış sayfasında görüntülenir.

**Birim notu**
: Işaretlendiğinde HotPot notu çıkış sayfasında görüntülenir.

Buna ek olarak, eğer birim derecelendirmesi yöntemi en son ise, en son deneme, önceki girişimi eşit ya da daha iyi olup olmadığını kullanıcıya söyleyen bir mesaj görüntülenir.';
$string['exit_goodtry'] = 'İyi deneme!';
$string['exit_grades'] = 'Puanlar';
$string['exit_grades_text'] = 'Bu ders için şu ana kadar ki notlarınıza bakın';
$string['exit_hotpotgrade'] = 'Bu etkinlik için notunuz : {$a}';
$string['exit_hotpotgrade_average'] = 'Bu etkinlik için bugüne kadarki ortalama notunuz {$a}';
$string['exit_hotpotgrade_highest'] = 'Bu etkinlik için bugüne kadarki en yüksek notunuz {$a}';
$string['exit_hotpotgrade_highest_equal'] = 'Bu etkinlik için önceki en iyi performansı elde ettiniz!';
$string['exit_hotpotgrade_highest_previous'] = 'Bu etkinlik için önceki en yüksek notunuz {$a}';
$string['exit_hotpotgrade_highest_zero'] = 'Bu etkinlik için {$a} \'dan daha yüksek puan almadınız.';
$string['exit_index'] = 'İndex';
$string['exit_index_text'] = 'Aktivitelerin dizinine git';
$string['exit_links'] = 'Sayfa bağlantılarından çık';
$string['exit_links_help'] = 'Bu seçenekler HotPot\'un çıkış sayfasındaki belirli gezinme bağlantılarının görüntülenmesini etkinleştirir veya devre dışı bırakır.

** Yeniden Dene **
: Bu HotPot\'ta birden fazla girişime izin verilmişse ve öğrenci hala bazı denemeler bırakmışsa öğrencinin HotPot\'u tekrar denemesi için bir bağlantı görüntülenir

**Dizin**
: Işaretli ise HotPot dizin sayfasına bir bağlantı görüntülenir.

**Ders**
: Işaretlenirse, Moodle ders sayfasına bir bağlantı görüntülenir.

**Notlar**
: Işaretlenirse, Moodle sınıf kitapına bir bağlantı görüntülenir.';
$string['exit_next'] = 'Sonraki';
$string['exit_next_text'] = 'Sonraki etkinliği dene';
$string['exit_noscore'] = 'Başarıyla bu etkinliği tamamladın!';
$string['exit_retry'] = 'Yeniden dene';
$string['exit_retry_text'] = 'Bu etkinliği yeniden dene';
$string['exit_welldone'] = 'Aferin!';
$string['exit_whatnext_0'] = 'Bundan sonra ne yapmak istiyorsun?';
$string['exit_whatnext_1'] = 'Kaderini seç ...';
$string['exit_whatnext_default'] = 'Lütfen aşağıdakilerden birini seçin:';
$string['exitcm'] = 'Sonraki etkinlik';
$string['exitcm_help'] = 'Bu ayar, bu HotPot etkinliği tamamlandıktan sonra yapılması gereken bir Moodle etkinliğini belirtir. İsteğe bağlı not, sonraki etkinlik gösterilmeden önce gerekli olan bu HotPot etkinliğinin minimum notudur.

Öğretmen, belirli bir etkinliği veya aşağıdaki genel amaçlı ayarlardan birini seçebilir:

* Bu derste bir sonraki etkinlik
* Bu bölümdeki bir sonraki etkinlik
* Bu derste önümüzdeki HotPot etkinliği
* Bu bölümdeki Sonraki HotPot etkinliği

Diğer çıkış sayfası seçenekleri devre dışı bırakılır ve öğrenci bu HotPot etkinliğinde gerekli nota ulaştıysa, bir sonraki etkinlik hemen gösterilir. Aksi takdirde, öğrenci, hazır olduklarında tıklayabilecekleri bir sonraki etkinliğe bir bağlantı gösterilir.';
$string['exitcmcourse'] = 'Bu derse ait sonraki etkinlik';
$string['exitcmsection'] = 'Bu kurs bölümündeki sonraki etkinlik';
$string['exitgrade'] = 'Sonraki etkinlik puanı';
$string['exithotpotcourse'] = 'Bu kurstaki bir Sonraki HotPot';
$string['exithotpotsection'] = 'Bu derste bir sonraki HotPot bölümü';
$string['exitoptions'] = 'Çıkış sayfası seçenekleri';
$string['exitpage'] = 'Çıkış safyasını göster';
$string['exitpage_help'] = 'HotPot quizinden sonra bir çıkış sayfası görüntülenmeli mi?

**Evet**
: HotPot tamamlandığında öğrencilere bir çıkış sayfası gösterilecektir. Çıkış sayfasının içeriği, HotPot\'un çıkış sayfası geri bildirimi ve bağlantı ayarları tarafından belirlenir.

**Hayır**
: Öğrencilere bir çıkış sayfası gösterilmeyecektir. Bunun yerine, derhal bir sonraki etkinliğe gidecekler veya Moodle ders sayfasına geri döneceklerdir.';
$string['exitpagehdr'] = 'Sayfadan çık';
$string['exittext'] = 'Çıkış sayfası metni';
$string['feedbackdiscuss'] = 'Bu sınavı bir forumda tartışın';
$string['feedbackformmail'] = 'Geribildirim formu';
$string['feedbackmoodleforum'] = 'Forum';
$string['feedbackmoodlemessaging'] = 'Mesajlaşma';
$string['feedbacknone'] = 'Hiçbiri';
$string['feedbacksendmessage'] = 'Hocanıza mesaj yollayın';
$string['feedbackwebpage'] = 'Web sayfası';
$string['firstattempt'] = 'İlk Deneme';
$string['forceplugins'] = 'Ortam eklentileri zorunlu mu?';
$string['forceplugins_help'] = 'Etkinleştirildiğinde, Moodle uyumlu medya oynatıcıları avi, mpeg, mpg, mp3, mov ve wmv gibi dosyaları oynatacaktır. Aksi takdirde, Moodle sınavdaki medya oyuncusunun ayarlarını değiştirmeyecektir.';
$string['frameheight'] = 'Çerçeve yüksekliği';
$string['giveup'] = 'Vazgeç';
$string['grademethod'] = 'Puanlama Yöntemi';
$string['grademethod_help'] = 'Bu ayar, HotPot notunun deneme puanlarından nasıl hesaplandığını tanımlar.

**En yüksek skor**
: Bu HotPot etkinlik girişimi için not en yüksek puana ayarlanacaktır.

**Ortalama skor **
: Puan, bu HotPot etkinliğindeki denemeler için ortalama puana ayarlanacaktır.

**İlk girişim**
: Puan, bu HotPot etkinliğindeki ilk denemenin skoruna ayarlanacaktır.

**Son deneme**
: Puan, bu HotPot etkinliğindeki en son girişimin puanına ayarlanacaktır.';
$string['gradeweighting'] = 'Not verme Ağırlığı';
$string['gradeweighting_help'] = 'Bu HotsPot etkinliği için notlar, Moodle not kitaplarında bu sayıya ölçeklendirilecektir.';
$string['highestscore'] = 'En yüksek not';
$string['hints'] = 'İpuçları';
$string['hotpot:addinstance'] = 'Yeni bir HotPot etkinliği ekle';
$string['hotpot:attempt'] = 'Bir sınavı uygula';
$string['hotpot:deleteallattempts'] = 'Herhangi bir kullanıcının HotPot etkinliğindeki denemelerini silin';
$string['hotpot:deletemyattempts'] = 'HotPot etkinliğinde kendi denemelerini sil';
$string['hotpot:ignoretimelimits'] = 'Bir HotPot etkinliğinde zaman sınırlarını yoksayar';
$string['hotpot:manage'] = 'Bir HotPot etkinliğinin ayarlarını değiştirme';
$string['hotpot:preview'] = 'Bir HotPot etkinliğini önizle';
$string['hotpot:reviewallattempts'] = 'Herhangi bir kullanıcının HotPot etkinliğindeki denemelerini görüntüleyin';
$string['hotpot:reviewmyattempts'] = 'HotPot etkinliğinde kendi denemelerinizi görün';
$string['hotpot:view'] = 'Sınavı kullan';
$string['hotpotname'] = 'HotPot etkinlik adı';
$string['ignored'] = 'Yoksayıldı';
$string['inprogress'] = 'işlemde';
$string['isgreaterthan'] = 'daha büyük';
$string['islessthan'] = 'daha küçük';
$string['lastaccess'] = 'Son giriş';
$string['lastattempt'] = 'Son deneme';
$string['lockframe'] = 'Çerçeve kilidi';
$string['maxeventlength'] = 'Tek bir takvim etkinliği için maksimum gün sayısı';
$string['mediafilter_hotpot'] = 'HotPot medya filtresi';
$string['mediafilter_moodle'] = 'Moodle\'ın standart medya filtreleri';
$string['migratingfiles'] = 'Hot Potatoes taşıma dosyası sınav dosyaları';
$string['migratinglogs'] = 'Hot Potatoes günlüklerini taşıma';
$string['missingsourcetype'] = 'HotPot kaydı eksik.';
$string['modulename'] = 'Hot Potatoes Sınavı';
$string['modulename_help'] = 'HotPot modülü, öğretmenlerin Moodle aracılığıyla etkileşimli öğrenme materyallerini öğrencilere dağıtmalarına ve öğrencilerin cevap ve sonuçlarına ilişkin raporlar görüntülemelerine olanak tanır. .

Tek bir HotPot etkinliği isteğe bağlı giriş sayfası, tek bir elearning egzersizi ve isteğe bağlı bir çıkış sayfası içerir. Eleme egzersizi, statik bir web sayfası veya öğrencilere metin, sesli ve görüntülü komut istemleri sunan ve karşılıklarını kaydeden interaktif bir web sayfası olabilir. Eleme egzersizi, öğretmen bilgisayarında yazarlık yazılımını kullanarak oluşturulur ve daha sonra Moodle\'a yüklenir.

Bir HotPot etkinliği, aşağıdaki yazarlık yazılımıyla oluşturulan egzersizleri halledebilir:

* Hot Potatoes  (sürüm 6)
* Qedoc
* Xerte
* ISpring
* Herhangi bir HTML editörü';
$string['modulename_link'] = 'mod/hotpot/view';
$string['modulenameplural'] = 'Hot Potatoes Sınavları';
$string['nameadd'] = 'İsim';
$string['nameadd_help'] = 'İsim, öğretmen tarafından girilen spesifik metin olabilir veya otomatik olarak oluşturulabilir.

**Kaynak dosyadan alın**
: Ad kaynak dosyadan çıkarılacaktır.

**Kaynak dosya adı** kullanın
: Kaynak dosya adı adı olarak kullanılacaktır.

**Kaynak dosya yolu** kullanın
: Kaynak dosya yolu adı olarak kullanılacaktır. Dosya yolundaki eğik çizgiler boşluklarla değiştirilir.

**Belirli metin**
: Öğretmen tarafından girilen metin, ad olarak kullanılacaktır.';
$string['nameedit'] = 'İsim';
$string['nameedit_help'] = 'Öğrencilere görüntülenecek belirli bir metin';
$string['navigation'] = 'Gezinme';
$string['navigation_embed'] = 'Gömülü web sayfası';
$string['navigation_frame'] = 'Moodle gezinme çerçevesi';
$string['navigation_give_up'] = 'Tek bir &quot;Vazgeç&quot;düğmesi';
$string['navigation_help'] = 'Bu ayar, testte kullanılan gezinmeyi belirtir:

**Moodle gezinti çubuğu**
: Moodle gezinti çubuğu, sayfanın üst kısmındaki test ile aynı pencerede görüntülenecektir

**Moodle gezinme çerçevesi**
: Moodle gezinme çubuğu testin üst kısmında ayrı bir çerçevede gösterilecektir

**Katıştırılmış web sayfası**
: Moodle gezinti çubuğu, Hot Potatoes sınavı penceresinde gömülü olarak görüntülenecektir.

**Orijinal gezinme yardımcıları**
: Sınav, eğer varsa, sınav tanımlanan gezinme düğmeleriyle birlikte görüntülenecektir

**Tek bir "Vazgeç" düğmesi**
: Sınav, sayfanın üst kısmında tek bir "Vazgeç" düğmesi ile görüntülenecektir

**Yok**
:Sınav, herhangi bir gezinme yardımı olmadan görüntülenir; bu nedenle, tüm soruları doğru yanıtladıktan sonra "Bir sonraki testi göster?" Ayarlandığında, Moodle ders sayfasına dönecek veya bir sonraki sınavı gösterecektir';
$string['navigation_moodle'] = 'Standart Moodle gezinti çubukları (üst ve yan)';
$string['navigation_none'] = 'Hiçbiri';
$string['navigation_original'] = 'Orijinal gezinti yardımcıları';
$string['navigation_topbar'] = 'Sadece üst Moodle gezinti çubuğu (yan sutunlar olmadan)';
$string['noactivity'] = 'Etkinlik yok';
$string['nohotpots'] = 'Hiç HotPot bulunamadı';
$string['nomoreattempts'] = 'Üzgünüz, bu etkinlik için başka deneme hakkınız kalmadı';
$string['noresponses'] = 'Başlı başına soru ve yanıtlar hakkında bilgi bulunamadı.';
$string['noreview'] = 'Üzgünüz, bu sınav denemesine ait detaylara bakma yetkiniz yok';
$string['noreviewafterclose'] = 'Maalesef, bu sınav kapandı. Artık bu sınav girişimi ayrıntılarını görüntülemek için izininiz yok.';
$string['noreviewbeforeclose'] = 'Üzgünüz, {$a} olana kadar bu quiz girişiminde bulunma ayrıntılarını görme izniniz yok.';
$string['nosourcefilesettings'] = 'HotPot kayıt kaynağı dosya bilgileri eksik';
$string['notattemptedyet'] = 'Henüz deneme yapılmadı';
$string['notavailable'] = 'Üzgünüz, bu etkinlik sizin için şu anda kullanılabilir değil.';
$string['outputformat'] = 'Çıktı biçimi';
$string['outputformat_best'] = 'En iyi';
$string['outputformat_help'] = 'Çıktı biçimi, içeriğin öğrenciye nasıl sunulacağını belirtir.

Kullanılabilen çıktı biçimleri, kaynak dosyanın türüne bağlıdır. Bazı kaynak dosyası türlerinin yalnızca bir çıktı biçimi vardır; diğer kaynak dosyası türleri ise çeşitli çıktı biçimlerine sahiptir.

"En iyi" ayarı içeriği öğrencinin tarayıcısı için en uygun çıktı biçimini kullanarak gösterecektir.';
$string['outputformat_hp_6_jcloze_html'] = 'Html\'den JCloze (v6)';
$string['outputformat_hp_6_jcloze_html_findit_a'] = 'FindIt (a) html\'den';
$string['outputformat_hp_6_jcloze_html_findit_b'] = 'FindIt (b) html\'den';
$string['outputformat_hp_6_jcloze_xml_anctscan'] = 'HP6 JCloze xml\'den DropDown';
$string['outputformat_hp_6_jcloze_xml_dropdown'] = 'HP6 JCloze xml\'den DropDown';
$string['outputformat_hp_6_jcloze_xml_findit_a'] = 'FindIt (a) HP6 JCloze xml\'den';
$string['outputformat_hp_6_jcloze_xml_findit_b'] = 'Findit (b), HP6 JCloze xml\'den';
$string['outputformat_hp_6_jcloze_xml_jgloss'] = 'HP6 JCloze x\'den gelen JGloss';
$string['outputformat_hp_6_jcloze_xml_v6'] = 'HP6 xml\'den JCloze (v6)';
$string['outputformat_hp_6_jcloze_xml_v6_autoadvance'] = 'HP6 xml\'den JCloze (v6) (Otomatik ilerleme)';
$string['outputformat_hp_6_jcross_html'] = 'JCross (v6) html\'den';
$string['outputformat_hp_6_jcross_xml_v6'] = 'JCross (v6) xml\'den';
$string['outputformat_hp_6_jmatch_html'] = 'JMatch (v6) html\' den';
$string['outputformat_hp_6_jmatch_html_sort'] = 'JMatch html\'den sırala';
$string['outputformat_hp_6_jmatch_xml_flashcard'] = 'JMatch (flashcard) xml\' den';
$string['outputformat_hp_6_jmatch_xml_jmemori'] = 'Xml\'den JMemori';
$string['outputformat_hp_6_jmatch_xml_sort'] = 'JMatch xml\'den sıralama';
$string['outputformat_hp_6_jmatch_xml_v6'] = 'JMatch (v6) xml\'den';
$string['outputformat_hp_6_jmatch_xml_v6_plus'] = 'JMatch (v6+) xml\'den';
$string['outputformat_hp_6_jmix_html'] = 'JMix (v6) html\'den';
$string['outputformat_hp_6_jmix_xml_v6'] = 'JMix (v6) xml\'den';
$string['outputformat_hp_6_jmix_xml_v6_plus'] = 'JMix (v6+) xml\'den';
$string['outputformat_hp_6_jmix_xml_v6_plus_deluxe'] = 'JMix (v6+ ön k ile, yönlendiricilere ek) xml\'den';
$string['outputformat_hp_6_jmix_xml_v6_plus_keypress'] = 'Xml\'den JMix (tuş takımı ile v6+)';
$string['outputformat_hp_6_jquiz_html'] = 'JQuiz (v6) html\'den';
$string['outputformat_hp_6_jquiz_xml_v6'] = 'JQuiz (v6) xml\'den';
$string['outputformat_hp_6_jquiz_xml_v6_autoadvance'] = 'JQuiz (v6) xml\'den (Otomatik ilerleme)';
$string['outputformat_hp_6_jquiz_xml_v6_exam'] = 'JQuiz (v6) xml\'den (Sınav)';
$string['outputformat_hp_6_rhubarb_html'] = 'Rhubarb (v6) html kimden';
$string['outputformat_hp_6_rhubarb_xml'] = 'Rhubarb (v6) xml\'den';
$string['outputformat_hp_6_sequitur_html'] = 'Sequitur (v6) html\'den';
$string['outputformat_hp_6_sequitur_html_incremental'] = 'Sequitur (v6) html\'den, artımlı puanlama';
$string['outputformat_hp_6_sequitur_xml'] = 'Xml\'den Sequitur (v6)';
$string['outputformat_hp_6_sequitur_xml_incremental'] = 'Sequitur (v6) xml, artımlı puanlama';
$string['outputformat_html_ispring'] = 'ISpring HTML dosyası';
$string['outputformat_html_xerte'] = 'Xerte HTML dosyası';
$string['outputformat_html_xhtml'] = 'Standart HTML dosyası';
$string['outputformat_qedoc'] = 'Qedoc dosyası';
$string['overviewreport'] = 'Genel bakış';
$string['penalties'] = 'Cezalar';
$string['percent'] = 'Yüzde';
$string['pluginadministration'] = 'HotPot yönetimi';
$string['pluginname'] = 'Hot Potatoes Modülü';
$string['pressoktocontinue'] = 'Devam etmek için Tamam\'a veya mevcut safyada kalmak için Vazgeç tıklayın';
$string['questionshort'] = 'S-{$a}';
$string['quizname_help'] = 'Sınav adı yardım metni';
$string['quizzes'] = 'Sınavlar';
$string['responses'] = 'Cevaplar';
$string['responsesreport'] = 'Cevaplar';
$string['reviewafterattempt'] = 'Uygulamadan sonra incelemeye izin ver';
$string['reviewafterclose'] = 'HotPot kapatıldıktan sonra incelemeye izin ver';
$string['reviewduringattempt'] = 'Deneme sırasında incelemeye izin ver';
$string['reviewoptions'] = 'Seçenekleri gözden geçir';
$string['score'] = 'Puan';
$string['scoresreport'] = 'Puanlar';
$string['selectattempts'] = 'Uygulmaları seç';
$string['showerrormessage'] = 'HotPot hatası: {$a}';
$string['sourcefile'] = 'Kaynak dosya';
$string['sourcefile_help'] = 'Bu ayar, öğrencilere gösterilecek içeriği içeren dosyayı belirtir.

Genellikle kaynak dosya Moodle dışında oluşturulmuş olacak ve bir Moodle dersinin dosyalara yüklenecektir.
Bir html dosyası olabilir veya Hot Potatoes veya Qedoc gibi yazarlık yazılımıyla yaratılan başka bir dosya türü olabilir.

Kaynak dosya Moodle ders dosyaları alanında bir klasör ve dosya yolu olarak belirtilebilir veya http: // veya https: // ile başlayan bir url olabilir

Qedoc malzemeleri için kaynak dosya, Qedoc sunucusuna yüklenen bir Qedoc modülünün url\'si olmalıdır.

*Örneğin. Http://www.qedoc.net/library/ABCDE_123.zip
*Qedoc modüllerini yüklemekle ilgili bilgi için: [Qedoc documentation: Uploading_modules] (http://www.qedoc.org/en/index.php?title=Uploading_modules)';
$string['sourcefilenotfound'] = 'Kaynak dosya bulunamadı (veya boş): {$a}';
$string['status'] = 'Durum';
$string['stopbutton'] = 'Durdur butonunu göster';
$string['stopbutton_help'] = 'Bu ayar etkinleştirilirse, teste bir durdurma düğmesi eklenecektir.

Bir öğrenci durdurma düğmesini tıklatırsa şimdiye kadar elde edilen sonuçlar Moodle\'a geri gönderilecek ve sınav testinin durumu terk edilmiş olacak şekilde ayarlanacaktır.

Durdur düğmesinde görüntülenen metin, Moodle\'ın dil paketlerinden önceden belirlenmiş ifadelerden biri olabilir veya öğretmen, düğme için kendi metinlerini belirleyebilir.';
$string['stopbutton_langpack'] = 'Dil paketinden';
$string['stopbutton_specific'] = 'Özel metin kullan';
$string['stoptext'] = 'Durdur butonu metni';
$string['storedetails'] = 'HotPot sınav denemelerinin ham XML ayrıntılarını sakla';
$string['studentfeedback'] = 'Öğrenci geri bildirimi';
$string['studentfeedback_help'] = 'Etkinleştirilirse, öğrenci "Check" düğmesini tıkladığında her bir pop-up geribildirim penceresine bir bağlantı görüntülenir. Geri bildirim penceresi, öğrencilerin aşağıdaki yöntemlerden biriyle öğretmenleri ve sınıf arkadaşları ile bu sınavı tartışmasına izin verir:

**İnternet sayfası**
: Web sayfasının URL\'sini gerektirir, örneğin http://myserver.com/feedbackform.html

**Geri bildirim formu**
: Form komut dosyasının URL\'si gerektirir, örneğin http://myserver.com/cgi-bin/formmail.pl

**Moodle Forumu**
: Kursun forumu görüntülenir.

**Moodle mesajlaşması**
: Moodle anlık ileti penceresi görüntülenecektir. Derste birkaç öğretmen varsa, mesaj penceresi görünmeden öğrenciden bir öğretmen seçmeniz istenir.';
$string['submits'] = 'Gönderimler';
$string['subplugintype_hotpotattempt'] = 'Çıktı formatı';
$string['subplugintype_hotpotattempt_plural'] = 'Çıktı formatları';
$string['subplugintype_hotpotreport'] = 'Rapor';
$string['subplugintype_hotpotreport_plural'] = 'Raporlar';
$string['subplugintype_hotpotsource'] = 'Kaynak dosya';
$string['subplugintype_hotpotsource_plural'] = 'Kaynak dosyaları';
$string['textsourcefile'] = 'Kaynak dosyadan getir';
$string['textsourcefilename'] = 'Dosya adı kullan';
$string['textsourcefilepath'] = 'Dosya yolu kullan';
$string['textsourcequiz'] = 'Sınavdan getir';
$string['textsourcespecific'] = 'Belirli metin';
$string['timeclose'] = 'Kadar kullanılabilir';
$string['timedout'] = 'Süresi doldu';
$string['timelimit'] = 'Süre sınırı';
$string['timelimit_help'] = 'Bu ayar, tek bir denemenin maksimum süresini belirtir.

**Kaynak/şablon dosyasındaki ayarları kullanın**
: Zaman sınırı, bu çıktı biçimi için kaynak dosyadan veya şablon dosyalarından alınacaktır

**Belirli bir zamanı kullanın**
: HotPot sınav ayarları sayfasında belirtilen süre sınırı, bu testteki bir deneme için süre limiti olarak kullanılacaktır. Bu ayar, bu çıktı biçimi için kaynak dosyadaki, yapılandırma dosyasındaki veya şablon dosyalarındaki zaman sınırlarını geçersiz kılar.

**Devre Dışı Bırak**
: Bu sınavdaki girişimler için herhangi bir zaman sınırı ayarlanmayacak.

Bir girişime devam ederseniz, zamanlayıcı, denemenin daha önce duraklatıldığından devam ettiğini unutmayın.';
$string['timelimitexpired'] = 'Bu deneme için verilen süre doldu';
$string['timelimitspecific'] = 'Belli bir zaman belirtin';
$string['timelimitsummary'] = 'tek deneme için süre sınırı';
$string['timelimittemplate'] = 'Kaynak/şablon dosyasındaki ayarları kullanın';
$string['timeopen'] = 'Kullanılabilir';
$string['timeopenclose'] = 'Açılışı ve kapanış zamanı';
$string['timeopenclose_help'] = 'Kullanıcıların deneme yapabilecekleri sınavın ne zaman yapılacağını belirtebilirsiniz. Açılış saatinden önce ve kapanış saatinden sonra sınav kullanılamaz.';
$string['title'] = 'Başlık';
$string['title_help'] = 'Bu ayar web sayfasında görüntülenecek başlığı belirtir.

**HotPot etkinlik adı**
: Bu HotPot etkinliğinin adı web sayfası başlığı olarak görüntülenecektir.

** Kaynak dosyadan alın **
: Kaynak dosyada tanımlanan başlık, varsa, web sayfası başlığı olarak kullanılacaktır.

**Kaynak dosya adı** kullanın
: Kaynak dosya adı, klasör isimleri hariç tutulduğunda, web sayfası başlığı olarak kullanılacaktır.

**Kaynak dosya yolu** kullanın
: Herhangi bir klasör adı da dahil olmak üzere kaynak dosya yolu, web sayfası başlığı olarak kullanılacaktır.';
$string['toolsindex'] = 'HotPot Araçları dizini';
$string['unitname_help'] = 'Ünite adı için yardım metni';
$string['unrecognizedsourcefile'] = 'Maalesef, HotPot modülü kaynak dosyanın türünü algılayamadı: {$a}';
$string['updated'] = 'Güncellendi';
$string['updatinggrades'] = 'HotPot notlarının güncellenmesi';
$string['usefilters'] = 'Süzgeç kullan';
$string['usefilters_help'] = 'Bu ayar etkinleştirilirse, içerik tarayıcıya gönderilmeden önce Moodle filtrelerinden geçirilir.';
$string['useglossary'] = 'Sözlük kullan';
$string['useglossary_help'] = 'Bu ayar etkinleştirilirse, içerik tarayıcıya gönderilmeden önce Moodle\'ın Sözlük Oto-bağlama filtresinden geçirilir.

Bu ayarın, Sözlük Otomatik Bağlantı Filtresi\'ni etkinleştirmek veya devre dışı bırakmak için site yönetimi ayarını geçersiz kıldığını unutmayın.';
$string['usemediafilter'] = 'Medya süzgeci kullan';
$string['usemediafilter_help'] = 'Bu ayar, kullanılacak ortam filtresini belirtir.

**Yok**
: İçerik herhangi bir ortam filtresinden geçmeyecek.

** Moodle\'un standart medya filtreleri **
: İçerik Moodle\'un standart medya filtrelerinden geçirilecek. Bu filtreler, yaygın ses ve film türlerine bağlantılar arar ve bu bağlantıları uygun medya oynatıcılarına dönüştürür.

**HotPot ortam filtresi**
: İçerik, bağlantıları, görüntüleri, sesleri ve filmleri tespit etmeyi sağlayan filtreler aracılığıyla kare parantez gösterimi kullanılarak belirtilir.

Köşeli ayraç gösterimi aşağıdaki söz dizimine sahiptir:
<code> [url çalar genişliği yükseklik seçenekleri] </code>

** url **
: Medya dosyasının göreli veya mutlak URL\'si

**player** (isteğe bağlı)
: Eklenecek oynatıcının adı. Bu ayar için varsayılan değer "moodle" dir. HotPot modülünün standart versiyonu aşağıdaki oyuncuları da sunar:
: **dew**: bir mp3 çalar
: **dyer**: Bernard Dyer\'ın mp3 çalar
: **hbs**: Half-Baked Yazılımından mp3 çalar
: **image**: web sayfasına bir resim ekleme
: **link**: başka bir web sayfasına bir bağlantı ekleme

**width** (isteğe bağlı)
: Oynatıcının gerekli genişliği

**height** (isteğe bağlı)
: Oynatıcının gerekli yüksekliği. Bu değer atlandığında, genişlik ayarı ile aynı değere ayarlanır.

**options** (isteğe bağlı)
: Müzik çalara geçirilecek virgülle ayrılmış liste seçenekleri. Her seçenek basit bir açma / kapama anahtarı veya bir ad değeri çifti olabilir.
: ** name =değer
: ** name = "boşluklu bazı değerler"';
$string['viewreports'] = '{$a} kullanıcısına ait raporları görüntüleyin';
$string['views'] = 'Görüntüleleme';
$string['weighting'] = 'Ağırlık';
$string['wrong'] = 'Yanlış';
$string['zeroduration'] = 'Aralık yok';
$string['zeroscore'] = 'Sıfır Puan';
