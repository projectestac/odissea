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
 * Strings for component 'filter_poodll', language 'tr', version '4.5'.
 *
 * @package     filter_poodll
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activate'] = 'PoodLL\'yi etkinleştirir misin?';
$string['alwayshtml5'] = 'Daima HTML5\' i kullan';
$string['audiotranscode'] = 'Otomatik Dönüştür MP3\'e';
$string['audiotranscodedetails'] = 'Kaydedilen/yüklenen ses dosyasını Moodle\' a kaydetmeden önce MP3 biçimine dönüştürün. Bu, tokyo.poodll.com\'da yapılan kayıtlar veya FFMPEG kullanılıyorsa yüklenen kayıtlar için geçerlidir';
$string['autotryports'] = 'Fark etmeyi dene. Bağlanamıyorsa bağlantı noktaları';
$string['bandwidth'] = 'Öğrenci bağlantısı. Bayt/saniye. Web kamerası kalitesini etkiliyor.';
$string['bgtranscode_audio'] = 'MP3 Arka Plana Dönüştürme Yapma';
$string['bgtranscode_video'] = 'MP4 Arka Planına Dönüştürme Yapma';
$string['bgtranscodedetails_audio'] = 'Bu, kullanıcı beklerken onları gerçekleştirmekten daha güvenilirdir. Fakat kullanıcı kaydettikten sonra cron\'u çalıştırana kadar sesini almaz. Yalnızca FFMPEG ve Moodle 2.7 veya üstünü kullanıyorsanız çalışır. MP3\'teki MP3 kaydediciyle yapılan kayıtlar için dönüşüm, sunucuda değil tarayıcıda gerçekleşir. Bu nedenle, sunucu tarafında dönüşüm (FFMPEG) kullanılacak değil.';
$string['bgtranscodedetails_video'] = 'Bu, kullanıcı beklerken onları gerçekleştirmekten daha güvenilirdir. Ancak kullanıcı kaydettikten sonra cron yayınlanana kadar videoyu almaz. Yalnızca FFMPEG ve Moodle 2.7 veya üstünü kullanıyorsanız çalışır.';
$string['bundle'] = 'Yığın';
$string['burntrose_recorder'] = '';
$string['cameraback'] = 'Geri';
$string['camerafront'] = 'Ön';
$string['cancel'] = 'İptal';
$string['capturefps'] = 'Video Kaydedici Yakalama FPS';
$string['captureheight'] = 'Video Kayıt Cihazı Yakalama Yüksekliği';
$string['capturewidth'] = 'Video Kaydedici Yakalama Boyutu';
$string['dataset'] = 'Veri kümesi';
$string['dataset_desc'] = 'Poodll, şablonunuzda kullanmak üzere bir veri kümesini veritabanından çekmenizi sağlar. Bu gelişmiş bir özelliktir. Bir $DB-> get_records_sql çağrısının sql bölümünü buraya girin.';
$string['datasetvars'] = 'Veri kümesi değişkenleri';
$string['datasetvars_desc'] = 'SQL için değişkenleri virgülle ayrılmış bir liste halinde koyun. Değişkenleri burada ve muhtemelen kullanmayı isteyebilirsiniz.';
$string['debug_enable'] = 'Hata ayıklamayı etkinleştir';
$string['debug_enable_details'] = 'Etkinleştirilirse, kayıtlarla ilgili bilgiler Moodle günlüklerinde saklanır. Bunların Poodll yardım masasından sorun gidermeye ve desteklemeye yardımcı olması amaçlanmıştır. İhtiyaç duyulmadığında kapatın veya Moodle günlüğünüzde gereksiz önemsiz şeylere sahip olun.';
$string['debug_heading'] = 'Poodll Hata ayıklama';
$string['default_camera'] = 'Varsayılan kamera';
$string['defaultwhiteboard'] = 'Varsayılan beyaz tahta';
$string['event_adhoc_completed'] = 'Poodll Adhoc görevi tamamlandı';
$string['event_adhoc_convert_completed'] = 'Poodll Adhoc dönüştürme görevi tamamlandı';
$string['event_adhoc_convert_registered'] = 'Poodll Adhoc dönüştürme görevi kaydedildi';
$string['event_adhoc_move_completed'] = 'Poodll Adhoc taşıma görevi tamamlandı';
$string['event_adhoc_move_registered'] = 'Poodll Adhoc taşıma görevi kaydedildi';
$string['event_adhoc_registered'] = 'Poodll Adhoc görevi kaydedildi';
$string['event_debug_log'] = 'Poodll hata ayıklama notu';
$string['expired'] = 'Kayıt süresi dolduğundan PoodLL görüntülenmiyor. Öğretmeninizden/yöneticiinizden PoodLL.com\'daki kayıt yenilemelerini isteyin';
$string['exportdiagnostics'] = 'Dışa aktar';
$string['extensions'] = 'Dosya uzantıları';
$string['extensions_desc'] = 'Bu filtrenin ayrıştırılacağı dosya uzantılarının bir CSV (virgülle ayrılmış değer) listesi.';
$string['extensionsettings'] = 'Dosya Uzantısı Ayarları';
$string['ffmpeg'] = 'Yüklenen ortamı FFMPEG ile dönüştürme';
$string['ffmpeg_details'] = 'FFMPEG, Moodle Sunucunuza ve sistem yoluna kurulmalıdır. Mp3\'e dönüştürmeyi desteklemeniz gerekecek, bu yüzden önce komut satırında deneyin, örneğin ffmpeg -i somefile.flv somefile.mp3.';
$string['filter_poodll_audioplayer_heading'] = 'Ses Oynatıcı Ayarları';
$string['filter_poodll_camera_heading'] = 'Web Kamerası Ayarları';
$string['filter_poodll_flashcards_heading'] = 'Flashcards Ayarları';
$string['filter_poodll_html5recorder_heading'] = 'HTML5 Kaydedici Ayarları';
$string['filter_poodll_mic_heading'] = 'Mikrofon Ayarları';
$string['filter_poodll_mp3recorder_heading'] = 'MP3 Kaydedici Ayarları';
$string['filter_poodll_network_heading'] = 'PoodLL Ağ Ayarları';
$string['filter_poodll_registration_explanation'] = 'PoodLL 3 bir kayıt anahtarı gerektiriyor. Bir tane almak için Poodll.com\'u ziyaret etmediyseniz.';
$string['filter_poodll_registration_heading'] = 'PoodLL\' ınızı kaydedin';
$string['filter_poodll_videogallery_heading'] = 'Video Galerisi Ayarları';
$string['filter_poodll_videoplayer_heading'] = 'Video oynadıcı Ayarları';
$string['filter_poodll_whiteboard_heading'] = 'Beyaz tahta Ayarları';
$string['filtername'] = 'PoodLL Filtresi';
$string['flashcardstype'] = 'Flashcard Türü';
$string['generalsettings'] = 'Genel ayarlar';
$string['handle'] = 'İşle {$a}';
$string['highquality'] = 'Yüksek';
$string['insert'] = 'Ekle';
$string['legacysettings'] = 'Eski Ayarlar';
$string['license_details'] = '<br> -------------- <br> Lisans türü: {$a->license_type} <br> Expires(JST): {$a->expire_date} <br> URL\' Kaydedildi: {$a->registered_url}';
$string['lowquality'] = 'Düşük';
$string['mediumquality'] = 'Orta';
$string['miccanpause'] = 'Duraklamaya izin ver (sadece MP3 kaydedici)';
$string['micecho'] = 'Mikrofon. Eko';
$string['micgain'] = 'Mikrofon. Arttırma';
$string['micloopback'] = 'Mikrofon. Döngü';
$string['micrate'] = 'Mikrofon. Oran';
$string['micsilencelevel'] = 'Mikrofon. Sessizlik Seviyesi';
$string['mobile_audio_quality'] = 'Ses kalitesi';
$string['mobile_os_version_warning'] = '<p> OS Sürümünüz çok düşük </p>
<p> Android, sürüm 4 veya daha üst sürümü gerektiriyor. </p>
<p> iOS, 6 veya daha fazla sürümü gerektiriyor. </p>';
$string['mobile_show'] = 'Mobil\' i göster';
$string['mobile_show_desc'] = 'Kullanıcı bir iOS cihazında bir kayıt cihazı yerine bir "upload/record" düğmesi ve "PoodLL uygulaması kullanma" düğmesi gösterilir. PoodLL uygulaması düğmesini gizlemek için bu işaretin işaretini kaldırın.';
$string['mobile_video_quality'] = 'Video kalitesi';
$string['mobileandwebkit'] = 'Mobil + Webkit tarayıcıları (Safari, Chrome vb.)';
$string['mobileonly'] = 'Sadece mobil cihazlar';
$string['mobilesettings'] = 'iOS Uygulama Ayarları';
$string['mp3_nocloud'] = 'Bulut yok';
$string['mp3_nocloud_details'] = 'Transkod ve geri kopyalama için buluta Flash mp3 kayıtları göndermeyin.';
$string['mp3opts'] = 'FFMPEG MP3 Dönüştürme seçenekleri';
$string['mp3opts_details'] = 'FFMPEG\'nin karar vermesine izin vermek isterseniz bu boş bırakın. Burada koyduğun her şey, [ffmpeg -i myfile.xx ] ve [ myfile.mp3 ]';
$string['mp3skin'] = 'MP3 Ara yüzü';
$string['mp3skin_details'] = 'Bir kaydedici ara yüzü, ala tema kullanmak isterseniz, adını buraya girin. Aksi takdirde: none.';
$string['mp4opts'] = 'FFMPEG MP4 Dönüştürme seçenekleri';
$string['mp4opts_details'] = 'FFMPEG\'nin karar vermesine izin vermek isterseniz bu boş bırakın. Burada koyduğun her şey, [ffmpeg -i myfile.xx ] ve [ myfile.mp3 ]';
$string['neverhtml5'] = 'Asla HTML5 kullanmayın';
$string['normal'] = 'Normal';
$string['picqual'] = 'Hedef web kamerası kalemi. 1 - 10';
$string['plain_recorder'] = 'Yalın';
$string['player'] = 'Oynatıcı {$a}';
$string['pluginname'] = 'PoodLL Filtresi';
$string['poodll:candownloadmedia'] = 'Medyayı indirebilirsin';
$string['poodllsupportinfo'] = 'PoodLL Destek Bilgileri';
$string['ppn_portfolio_blogexport'] = 'BlogDışa Aktarma';
$string['presets'] = 'Şablonu Otomatik Önbellekle Otomatik Doldurma';
$string['presets_desc'] = 'Poodll, kutudan çıkar çıkmaz kullanabileceğiniz veya kendi şablonunuzu oluşturmaya başlamanıza yardımcı olmak için bazı varsayılan ön ayarlarla birlikte gelir.  Buradakilerden birini seçin veya sıfırdan kendi şablonunuzu oluşturun.  Yukarıdaki yeşil kutuya tıklayarak bir şablonu paket olarak dışa aktarabilirsiniz.  Bir paketi yeşil kutuya sürükleyerek içe aktarabilirsiniz.';
$string['privacy:metadata'] = 'Poodll filtre eklentisi herhangi bir kişisel veri saklamaz.';
$string['recorderorder'] = 'Tercih Edilen Kayıt Sırası';
$string['recorderorder_desc'] = 'PoodLL, kullanıcı tarayıcısı ve platform destekliyorsa, mümkün olan en iyi kayıt cihazı seçecek. Emri buraya ayarla.';
$string['recui_audiogain'] = 'Ses Arttırma';
$string['recui_audiorate'] = 'Ses Oranı';
$string['recui_awaitingconfirmation'] = 'Onaylama bekliyor';
$string['recui_btnupload'] = 'Bir Dosya Kaydedin veya Seçin';
$string['recui_cancelsnapshot'] = 'İptal';
$string['recui_close'] = 'Kapat';
$string['recui_continue'] = 'Devam et';
$string['recui_converting'] = 'Dönüştürme';
$string['recui_echo'] = 'Yankı önleme';
$string['recui_inaudibleerror'] = 'Seni duyamıyoruz. Lütfen flaş ve tarayıcı izinlerini kontrol edin.';
$string['recui_loopback'] = 'Döngü';
$string['recui_nothingtosaveerror'] = 'Hiçbir şey yakalanmadı. Maalesef ... yükleyecek bir şey yok.';
$string['recui_off'] = 'Kapalı';
$string['recui_ok'] = 'Tamam';
$string['recui_on'] = 'Açık';
$string['recui_openrecorderapp'] = 'PoddLL uygulaması';
$string['recui_pause'] = 'Ara ver';
$string['recui_play'] = 'Oynat';
$string['recui_record'] = 'Kaydet';
$string['recui_recordorchoose'] = 'Seç veya kayded';
$string['recui_save'] = 'Yükle';
$string['recui_silencelevel'] = 'Sessizlik Seviyesi';
$string['recui_stop'] = 'Dur';
$string['recui_takesnapshot'] = 'Resim Al';
$string['recui_time'] = 'Süre:';
$string['recui_timeouterror'] = 'İstek zaman aşımına uğradı. Üzgünüz';
$string['recui_uploadafile'] = 'Dosyayı yükle';
$string['recui_uploaderror'] = 'Bir hata oluştu ve dosya yüklenmedi.';
$string['recui_uploading'] = 'Yükleme';
$string['recui_uploadsuccess'] = 'Başarıyla yüklendi';
$string['registrationkey'] = 'Kayıt anahtarı';
$string['registrationkey_explanation'] = 'PoodLL kayıt anahtarınızı buraya girin. Şuradan bir anahtar alabilirsiniz: <a href=\'https://poodll.com/poodll-3-2\'>https://poodll.com/poodll-3-2</a>';
$string['serverhttpport'] = 'PoodLL Sunucu Bağlantı Noktası (HTTP)';
$string['serverid'] = 'PoodLL sunucu kimliği';
$string['servername'] = 'PoodLL barındırıcı adresi';
$string['serverport'] = 'PoodLL Sunucu bağlantı noktası(RTMP)';
$string['settings'] = 'PoodLL filtre ayarları';
$string['showdownloadicon'] = 'Oynatıcıların altında indirme simgesini göster';
$string['sitedefault'] = 'Site varsayılanı';
$string['size'] = 'Boyut';
$string['studentcam'] = 'Kamera için tercih edilen cihaz adı';
$string['studentmic'] = 'Mikrofon için tercih edilen cihaz adı';
$string['supportinfo'] = 'Destek Bilgileri';
$string['template'] = 'Şablon gövdesi {$a}';
$string['template_desc'] = 'Şablonu buraya yerleştirin, değişkenleri değişkenler ile çevreleyerek tanımlayın. @@ işareti ile örneğin @@variable@@';
$string['template_showatto'] = 'Atto\'da göster (şablon {$a})';
$string['template_showatto_desc'] = 'Atto için PoodLL Widget\'lar iletişim kutusunda bu widget için bir düğme ve form gösterin.';
$string['template_showplayers'] = 'Oynatıcılar listesinde göster (şablon {$a})';
$string['template_showplayers_desc'] = 'Bir dosya uzantısıyla ilişkilendirilebilecek oynatıcılar açılır listesinde görüntüleyin.';
$string['templatealternate'] = 'Alternatif içerik (şablon {$a})';
$string['templatealternate_desc'] = 'Özel CSS ve javascript içeriği mevcut olmadığında kullanılabilir içerik. Şu anda bu, şablon bir webcoder tarafından işlendiğinde, muhtemelen mobil uygulamadaki içerik için kullanılır';
$string['templatealternate_end'] = 'Alternatif içerik sonu ((şablon {$a})';
$string['templatealternate_end_desc'] = 'Kullanıcı içeriğini başlangıç ve bitiş PoodLL etiketleri ile örtüşen şablonlar için alternatif içerik etiketlerini kapatma';
$string['templatecount'] = 'Şablon sayısı';
$string['templatecount_desc'] = 'Sahip olabileceğiniz şablonların sayısı. Varsayılan 20\'dir.';
$string['templatedefaults'] = 'Değişken varsayılanları(şablon {$a})';
$string['templatedefaults_desc'] = 'Virgülle ayrılmış kümelerdeki varsayılanları tanımlayın  name=value örneğin width=800,height=900,feeling=joy';
$string['templateend'] = 'Bitiş etiketleri ({$a} şablonu)';
$string['templateend_desc'] = 'Şablonunuz kullanıcı içeriğini, örneğin bir bilgi kutusu içeriyorsa, kapanış etiketlerini buraya koyun. Kullanıcı filtreyi kapatmak için {POODLL: mytag_end} gibi bir şey girecek.';
$string['templateheading'] = 'Poodll Şablonu Ayarları {$a}';
$string['templateheadingcss'] = 'CSS/Style Ayarları.';
$string['templateheadingjs'] = 'Javascript Ayarları';
$string['templateinstructions'] = 'Talimatlar (şablon {$a})';
$string['templateinstructions_desc'] = 'Burada girilen talimatlar, bu şablonun orada gösterilmeye uygun olması durumunda, PoodLL atto biçiminde gösterilecektir. Onları kısa tutun yoksa kötü görünecektir.';
$string['templatekey'] = 'Şablonu tanımlayan anahtar {$a}';
$string['templatekey_desc'] = 'Anahtar bir kelime olmalı ve yalnızca rakamlar ve harfler, alt çizgiler, tire ve noktalar içermelidir.';
$string['templatename'] = '{$a} şablonunun görünen adı';
$string['templatename_desc'] = 'Ad, sayı ve harf, alt çizgi, tire ve nokta içerebilir.';
$string['templaterequire_amd'] = 'AMD\'den yükleme';
$string['templaterequire_amd_desc'] = 'AMD bir javascript yükleme mekanizmasıdır. Şablonunuza javascript kitaplıkları yüklerseniz veya bağlantı oluşturursanız, bu işaretin işaretini kaldırmanız gerekebilir. Sadece Moodle 2.9 veya daha üstü';
$string['templaterequire_css'] = 'CSS gerektirir (şablon {$a})';
$string['templaterequire_css_desc'] = 'Bu şablonun gerektirdiği harici bir CSS dosyasına bir bağlantı (yalnızca 1). isteğe bağlı.';
$string['templaterequire_jquery'] = 'JQuery gerektirir (şablon {$a})';
$string['templaterequire_jquery_desc'] = 'En iyisi bunu kontrol etmeyin. Pek çok AMD olmayan şablon JQuery gerektirir. Burayı denetlemek JQuery\'yi yükleyecek, ancak pek de iyi değil. Temanız zaten JQuery\'yı yine de yükleyebilir. Değilse, bu dizeyi Site Yönetimi -> Görünüm -> Ek HTML\'ye (HEAD içinde) ekleyin:
<br/> &lt;script src="https://code.jquery.com/jquery-1.11.2.min.js"&gt;&lt;/script&gt;';
$string['templaterequire_js'] = 'JS gerektirir (şablon {$a})';
$string['templaterequire_js_desc'] = 'Bu şablonun gerektirdiği harici bir JS dosyasına bağlantı (yalnızca 1). isteğe bağlı.';
$string['templaterequire_js_shim'] = 'Shim Dışa Aktarma (şablon {$a})';
$string['templaterequire_js_shim_desc'] = 'Shim dışa aktarma değerini shimden geçirmeniz gerekiyorsa ve ONLY girin.';
$string['templatescript'] = 'Özel JS (şablon {$a})';
$string['templatescript_desc'] = 'Şablonunuzun özel javascript çalıştırması gerekiyorsa, buraya girin. Sayfadaki tüm öğeler yüklendikten sonra çalıştırılacaktır.';
$string['templatestyle'] = 'Özel CSS (şablon {$a})';
$string['templatestyle_desc'] = 'Şablonunuzun burada kullandığı özel CSS\'leri girin. Şablon değişkenleri burada çalışmaz. Sadece eski css.';
$string['templateversion'] = 'Bu şablonun sürümü {$a}';
$string['templateversion_desc'] = 'Şablonları paylaşırken, sürüm başına net bir sürüm sağlamak en iyisidir. Sürüm biçimi size kalmıştır.';
$string['tiny'] = 'Ufak';
$string['transcode_heading'] = 'Ses/Video Dosya Dönüştürme Ayarları';
$string['unregistered'] = 'PoodLL kayıtlı değil, çünkü görüntülenmiyor. Öğretmen/yönetici\'den PoodLL.com\'a PoodLL kaydettirmesini isteyin.';
$string['usecloudrecording'] = 'Buluta kaydetme';
$string['usecloudrecording_desc'] = 'PoodLL bulut kaydı. Bu, bulutta kod çözme ve diğer hizmetleri sağlar. PoodLL iOS uygulaması bunun gerektirir ve aynı şekilde html5 ses ve video kaydedicileri de yapar. Kaydedilen dosyalar bulutta barındırılmaz.';
$string['useplayer'] = '{$a} Oynatıcı';
$string['useplayerdesc'] = 'Seçilen oynatıcı uygun şablondan gelen bilgileri kullanacaktır.';
$string['value'] = 'Değer';
$string['videotranscode'] = 'Otomatik Dönüştür. MP4\' e';
$string['videotranscodedetails'] = 'Kaydedilen/yüklenen video dosyalarını Moodle\'ye kaydetmeden önce MP4 biçimine dönüştürün. Bu, tokyo.poodll.com\'da yapılan kayıtlar veya FFMPEG kullanılıyorsa yüklenen kayıtlar için geçerlidir';
$string['wboardautosave'] = 'Otomatik kayıt(milisaniye)';
$string['wboardautosave_details'] = 'Kullanıcı, X milisaniyeden sonra çizimi duraklattığında çizimi kaydeder. 0 = no autosave';
$string['wboardheight'] = 'Beyaz tahta varsayılan yüksekliği';
$string['wboardwidth'] = 'Beyaz tahta varsayılan genişliği';
$string['whiteboardsave'] = 'Resmi Kaydet';
$string['widgetsettings'] = 'Widget Ayarları';
