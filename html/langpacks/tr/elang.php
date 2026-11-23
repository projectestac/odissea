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
 * Strings for component 'elang', language 'tr', version '4.5'.
 *
 * @package     elang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedlanguages'] = 'İzin verilen içerik dilleri';
$string['allowedlanguages_desc'] = 'Bir video dikte oluşturulurken veya düzenlenirken sunulan içerik dilleri. Tüm dil listesinin sunulması için hiçbirini seçmeyin. Etkinlik, daha sonra buradan kaldırsanız bile kayıtlı dilini korur.';
$string['allowtranscriptdownload'] = 'Katılımcıların deşifre metnini indirmesi';
$string['allowtranscriptdownload_help'] = 'Bu seçenek açıkken katılımcılar, her boşluğun gizlendiği deşifre metni çalışma sayfasını PDF, Word, OpenDocument veya metin olarak indirebilir.

Varsayılan olarak kapalıdır. Yetkili öğretim kadrosu, bu ayardan bağımsız olarak deşifre metnini her zaman indirebilir.';
$string['allowtranscriptdownload_label'] = 'Katılımcılar çalışma sayfasını indirebilir';
$string['completiondetail_completionfinishattempt'] = 'Bir denemeyi tamamlama';
$string['completionfinishattempt'] = 'Katılımcı bir denemeyi tamamlamalı';
$string['cuepausemode'] = 'Altyazı sonunda duraklama';
$string['cuepausemode_auto'] = 'Otomatik';
$string['cuepausemode_help'] = 'Ortamın bir altyazının sonunda durup durmayacağı.

* Otomatik — oynatma sürer ve yalnızca o altyazı üzerinde çalışıldığı sürece, yani ona veya boşluklarından birine tıklandıktan sonra ya da klavye odağı bunlardan birindeyken, altyazının sonunda durur.
* Yanıtlanmamış her altyazıda dur — oynatma, hâlâ boş bir boşluğu olan her altyazının sonunda durur ve sürdürülmeyi bekler.
* Hiç durma — oynatma ortamın sonuna kadar sürer.

İlk ikisinden hiçbiri, tüm boşlukları doldurulmuş bir altyazıda durmaz: o iş bitmiştir ve orada durmak hiçbir etkisi olmayan bir tuşa basmayı gerektirirdi. Bu aynı zamanda, bir alıştırmanın ikinci turunun yalnızca hâlâ eksik olan yerlerde duracağı anlamına gelir.';
$string['cuepausemode_nostop'] = 'Hiç durma';
$string['cuepausemode_stop'] = 'Yanıtlanmamış her altyazıda dur';
$string['editcontent'] = 'İçeriği düzenle';
$string['editor_addcue'] = 'Segment ekle';
$string['editor_addgap'] = 'Seçimden boşluk oluştur';
$string['editor_addhint'] = 'İpucu ekle';
$string['editor_addvariant'] = 'Değişke ekle';
$string['editor_advanced'] = 'Gelişmiş ayarlar';
$string['editor_algoexact'] = 'Tam eşleşme';
$string['editor_algorithm'] = 'Yanıt karşılaştırması';
$string['editor_algowordrecognized'] = 'Yakın yanıtları kabul et';
$string['editor_answers'] = 'Kabul edilen değişkeler';
$string['editor_autosaved'] = 'Tüm değişiklikler kaydedildi.';
$string['editor_autosaveerror'] = 'Otomatik kaydetme başarısız oldu — yeniden denemek için Kaydet düğmesini kullanın.';
$string['editor_captureend'] = 'Bitişi oynatmadan al';
$string['editor_capturestart'] = 'Başlangıcı oynatmadan al';
$string['editor_cueactions'] = 'Segment işlemleri';
$string['editor_cuecount'] = 'Segmentler: {$a}';
$string['editor_currentmedia'] = 'Geçerli ortam:';
$string['editor_deletecue'] = 'Segmenti sil';
$string['editor_deletegap'] = 'Boşluğu sil';
$string['editor_emptytranscript'] = '(henüz metin yok)';
$string['editor_endtime'] = 'Bitiş zamanı';
$string['editor_formatsubrip'] = 'SubRip (.srt)';
$string['editor_formatwebvtt'] = 'WebVTT (.vtt)';
$string['editor_gapcount'] = 'Boşluklar: {$a}';
$string['editor_gaprange'] = 'Boşluğun konumu (karakter)';
$string['editor_gotomedia'] = 'Ortam bölümüne git';
$string['editor_heading'] = 'Altyazıları ve boşlukları düzenle';
$string['editor_hints'] = 'İpuçları';
$string['editor_hinttext'] = 'İpucu metni';
$string['editor_hinttype'] = 'Tür';
$string['editor_hinttype_firstletter'] = 'İlk harf';
$string['editor_hinttype_partial'] = 'Kısmi';
$string['editor_hinttype_solution'] = 'Çözüm';
$string['editor_hinttype_text'] = 'Serbest metin';
$string['editor_hinttype_translation'] = 'Çeviri';
$string['editor_hinttype_wordlength'] = 'Sözcük uzunluğu';
$string['editor_import'] = 'Altyazıları içe aktar';
$string['editor_importappend'] = 'Var olan segmentlere ekle';
$string['editor_importapply'] = 'İçe aktar';
$string['editor_importcancel'] = 'İptal';
$string['editor_importcheck'] = 'İçeriği denetle';
$string['editor_importchecking'] = 'Denetleniyor…';
$string['editor_importcuecount'] = 'Bulunan segmentler';
$string['editor_importduration'] = 'Süre';
$string['editor_importedcues'] = 'İçe aktarılan segmentler: {$a}';
$string['editor_importfilehint'] = 'Altyazı içeren bir WebVTT (.vtt) veya SubRip (.srt) dosyası seçin.';
$string['editor_importformat'] = 'Biçim';
$string['editor_importfromfile'] = 'Dosya yükle';
$string['editor_importfromtext'] = 'Metin yapıştır';
$string['editor_importgapcount'] = 'Bulunan boşluklar';
$string['editor_importhint'] = 'WebVTT veya SubRip içeriğini yapıştırın ve segment olarak içe aktarın.';
$string['editor_importparseerror'] = 'Bu içerik WebVTT veya SubRip olarak okunamadı.';
$string['editor_importpastedtext'] = 'Yapıştırılan metin';
$string['editor_importreaderror'] = 'Dosya okunamadı.';
$string['editor_importready'] = 'İçe aktarmaya hazır';
$string['editor_importreplace'] = 'Tüm segmentleri değiştir';
$string['editor_importreplacedcues'] = 'Segmentler değiştirildi; yeni içe aktarılan: {$a}';
$string['editor_importsource'] = 'Kaynak';
$string['editor_importsummary'] = 'Bulunanlar';
$string['editor_importtoolarge'] = 'Bu dosya {$a->size} boyutunda; içe aktarma en fazla {$a->max} kabul eder.';
$string['editor_importwrongtype'] = 'Bir altyazı dosyası seçin ({$a}).';
$string['editor_insertafter'] = 'Sonrasına segment ekle';
$string['editor_insertbefore'] = 'Öncesine segment ekle';
$string['editor_invalidtime'] = 'Zamanı mm:ss.SSS biçiminde girin, örneğin 01:05.400.';
$string['editor_linkurl'] = 'Bakılacak bağlantı';
$string['editor_linkurl_help'] = 'Sözcüğün aranabileceği bir yer olarak boşluğun yanında görünür. Bağlantı sunulmasın istiyorsanız boş bırakın.';
$string['editor_loaderror'] = 'Düzenleyici yüklenemedi. Sayfayı yeniden yükleyin.';
$string['editor_loading'] = 'Düzenleyici yükleniyor…';
$string['editor_maxlength'] = 'En büyük uzunluk';
$string['editor_maxlength_help'] = 'Katılımcının ne kadar yazabileceğini sınırlar. 0 sınır yok demektir.';
$string['editor_media'] = 'Ortam';
$string['editor_mediafile'] = 'Yüklenen dosya';
$string['editor_mediakind'] = 'Ortam türü';
$string['editor_medianone'] = 'Yok';
$string['editor_mediaprovider'] = 'Sağlayıcı';
$string['editor_mediaproviderref'] = 'Sağlayıcı başvurusu';
$string['editor_mediaproviderrefhint'] = 'Video kimliği veya bağlantısı, alışılmış biçimlerden birinde (örneğin youtu.be/…).';
$string['editor_mediasaved'] = 'Ortam kaydedildi.';
$string['editor_mediaurl'] = 'Doğrudan ortam adresi';
$string['editor_nocues'] = 'Henüz segment yok. Bir tane ekleyin ya da altyazıları içe aktarın.';
$string['editor_nocueselected'] = 'Düzenlemek için listeden bir segment seçin.';
$string['editor_nocuesmatch'] = 'Bu aramaya uyan segment yok.';
$string['editor_nogaps'] = 'Boşluk yok';
$string['editor_nomedia'] = 'yok';
$string['editor_nomedianotice'] = 'Önce Ortam sekmesinden video veya ses dosyasını ekleyin. Altyazılar ortama göre zamanlanır, bu yüzden segmentler ve boşluklarla çalışabilmeniz için düzenleyicinin ona ihtiyacı vardır.';
$string['editor_novideotrack'] = 'Bu tarayıcı bu ortamın video izini çözemiyor (yalnızca ses çalıyor); katılımcılar siyah bir görüntü görürdü. Dosyayı H.264/MP4 olarak yeniden kodlayın (örneğin ffmpeg veya HandBrake ile) ve yeniden yükleyin.';
$string['editor_onboardinggaps'] = 'Bir segmentte bir sözcük seçin ve onu boşluğa dönüştürün.';
$string['editor_onboardingimport'] = 'WebVTT veya SubRip altyazılarını içe aktarın ya da segmentleri elle ekleyin.';
$string['editor_onboardingintro'] = 'Üç adımda bir alıştırma oluşturun:';
$string['editor_onboardingmedia'] = 'Bir ortam seçin (yükleme, adres veya sağlayıcı).';
$string['editor_onboardingtitle'] = 'Alıştırmanıza başlayın';
$string['editor_onlywarnings'] = 'Yalnızca uyarı içeren segmentler';
$string['editor_parsegaps'] = 'Boşluk imlerini tanı: [sözcük] ipucuna izin veren bir boşluk oluşturur, {sözcük} ise ipucusuz.';
$string['editor_penalty'] = 'Kesinti';
$string['editor_poster'] = 'Kapak görseli';
$string['editor_preview'] = 'Katılımcı önizlemesi';
$string['editor_publish'] = 'Yayımla';
$string['editor_published'] = 'Sürüm yayımlandı.';
$string['editor_removehint'] = 'İpucunu kaldır';
$string['editor_removevariant'] = 'Kaldır';
$string['editor_ruleapplied'] = 'Kurala göre %count% boşluk oluşturuldu.';
$string['editor_ruleapply'] = '%count% boşluğu uygula';
$string['editor_ruleerror'] = 'Boşluklar oluşturulamadı.';
$string['editor_ruleeverynth'] = 'Her n. sözcük';
$string['editor_rulefound'] = 'Kural %count% boşluk buldu.';
$string['editor_rulegenerate'] = 'Boşlukları oluştur';
$string['editor_ruleinterval'] = 'Aralık (n)';
$string['editor_ruletype'] = 'Boşluk kuralı';
$string['editor_rulewordlist'] = 'Gizlenecek sözcükler';
$string['editor_rulewords'] = 'Sözcük listesi';
$string['editor_save'] = 'Taslağı kaydet';
$string['editor_saved'] = 'Taslak kaydedildi.';
$string['editor_saveerror'] = 'Taslak kaydedilemedi.';
$string['editor_savemedia'] = 'Ortamı kaydet';
$string['editor_saving'] = 'Kaydediliyor…';
$string['editor_searchcues'] = 'Segmentlerde ara';
$string['editor_selecttext'] = 'Önce deşifre metninde gizlenecek sözcüğü seçin.';
$string['editor_solution'] = 'Çözüm';
$string['editor_starttime'] = 'Başlangıç zamanı';
$string['editor_transcript'] = 'Deşifre metni';
$string['editor_unsaved'] = 'Kaydedilmemiş değişiklikler';
$string['editor_uploadmedia'] = 'Ortam dosyalarını yükle';
$string['editor_variantisregex'] = '{$a} ifadesini düzenli ifade olarak ele al';
$string['editor_variantmatching'] = 'Kabul edilen değişkelerin nasıl karşılaştırıldığı';
$string['editor_warnemptysolution'] = 'Çözümü olmayan boşluk';
$string['editor_warnnotranscript'] = 'Metin yok';
$string['editor_warntiming'] = 'Bitiş, başlangıçtan sonra değil';
$string['editor_waveform'] = 'Ses dalga biçimi';
$string['elang:addinstance'] = 'Yeni video dikte ekleme';
$string['elang:attempt'] = 'Video dikte yapma';
$string['elang:deleteattempts'] = 'Katılımcı denemelerini silme';
$string['elang:exportreports'] = 'Kişisel veri içeren raporları dışa aktarma';
$string['elang:exportsolution'] = 'Tam deşifre metnini çözümleriyle dışa aktarma';
$string['elang:exporttranscript'] = 'Çalışma sayfasını belge olarak dışa aktarma';
$string['elang:manage'] = 'Alıştırma içeriği oluşturma ve düzenleme';
$string['elang:useregex'] = 'Kabul edilen yanıtlarda düzenli ifade kullanma';
$string['elang:view'] = 'Video dikteyi görüntüleme';
$string['elang:viewreports'] = 'Katılımcı raporlarını görüntüleme';
$string['error_attemptnotinprogress'] = 'Bu deneme artık sürmüyor.';
$string['error_couldnotobtainlock'] = 'Bu işlem için kilit alınamadı. Yeniden deneyin.';
$string['error_draftrevisionmismatch'] = 'Bu taslak siz yükledikten sonra değişti. Yeniden yükleyip tekrar deneyin.';
$string['error_duplicatecuekey'] = 'İki segment “{$a}” anahtarını paylaşıyor; her segmentin benzersiz bir anahtarı olmalı.';
$string['error_duplicategapkey'] = 'Aynı segmentteki iki boşluk “{$a}” anahtarını paylaşıyor; her boşluğun benzersiz bir anahtarı olmalı.';
$string['error_duplicatehintlevel'] = 'Bir boşlukta {$a}. düzeyde iki ipucu var; her düzey benzersiz olmalı.';
$string['error_gapnotinattemptversion'] = 'Bu boşluk, bu denemenin alıştırma sürümüne ait değil.';
$string['error_importnocues'] = 'Bu içerikten hiç altyazı okunamadı. Bir WebVTT veya SubRip dosyasında her altyazının üstünde 00:00:01.000 --> 00:00:04.000 gibi bir zaman satırı bulunur.';
$string['error_importnotutf8'] = 'Bu dosya geçerli UTF-8 değil. Büyük olasılıkla eski bir kodlamayla kaydedilmiş — bir metin düzenleyicide açıp UTF-8 olarak yeniden kaydedin.';
$string['error_importtoolarge'] = 'Bu dosya {$a->size} boyutunda; içe aktarma en fazla {$a->max} kabul eder. Bir ders kaydının altyazı dosyası bundan çok daha küçüktür, bu yüzden bunun altyazı dosyası olması pek olası değil.';
$string['error_importtoomanycues'] = 'Bu dosya {$a->count} altyazı içeriyor; içe aktarma en fazla {$a->max} kabul eder.';
$string['error_invalidcuepausemode'] = 'Altyazı sonunda duraklama için sunulan seçeneklerden birini seçin.';
$string['error_invalidgradingalgorithm'] = '“{$a}” değerlendirme algoritması ne exact ne de wordrecognized.';
$string['error_invalidhinttype'] = '“{$a}” ipucu türü izin verilen türlerden biri değil.';
$string['error_invalidisregex'] = 'Bir değişkenin düzenli ifade imi 0 veya 1 olmalı.';
$string['error_invalidmediakind'] = 'Seçilen ortam türü file, url veya provider değil.';
$string['error_invalidpenalty'] = 'İpucu kesintisi 0 ile 1 arasında olmalı.';
$string['error_invalidproviderref'] = '“{$a}” bu sağlayıcı için tanınan bir video kimliği veya bağlantısı değil.';
$string['error_invalidregexpattern'] = '“{$a}” geçerli bir düzenli ifade değil.';
$string['error_invalidsolutionavailability'] = 'Katılımcıların çözümlü deşifre metnini ne zaman görebileceği için sunulan seçeneklerden birini seçin.';
$string['error_invalidsourceurl'] = 'http:// veya https:// ile başlayan tam bir adres ya da bir YouTube veya Vimeo bağlantısı girin.';
$string['error_invalidsubtitleposition'] = 'Altyazıların nerede gösterileceği için sunulan seçeneklerden birini seçin.';
$string['error_invalidv1cuejson'] = 'Sürüm 1’den gelen bu segment işlenemedi.';
$string['error_negativegapoffset'] = 'Bir boşluğun konumu ve uzunluğu negatif olamaz.';
$string['error_noaccesstoattempt'] = 'Bu denemeye erişiminiz yok.';
$string['error_nomorehints'] = 'Bu boşluk için başka ipucu yok.';
$string['error_nopublishedversion'] = 'Bu alıştırmanın henüz yayımlanmış içeriği yok.';
$string['error_responsetoolong'] = 'Yanıtınız çok uzun. Bu boşluk için üst sınır {$a} karakter.';
$string['error_solutionnotavailable'] = 'Çözümlü deşifre metni bu etkinlikte size açık değil.';
$string['error_staleattemptstate'] = 'Bu denemeye ilişkin görünümünüz güncel değil. Geçerli durumu yeniden yükleyip tekrar deneyin.';
$string['error_transcriptnotavailable'] = 'Bu etkinlikte indirilebilecek bir deşifre metni yok.';
$string['error_unknowngaprule'] = 'Bilinmeyen boşluk kuralı türü: “{$a}”.';
$string['error_unknownmediaprovider'] = '“{$a}” desteklenen ortam sağlayıcılarından biri değil.';
$string['error_versionnotadraft'] = 'Yalnızca taslak durumundaki bir sürüm düzenlenebilir.';
$string['error_versionnotfound'] = 'Alıştırmanın bu sürümü artık yok.';
$string['error_versionnotpublishable'] = 'Bu sürüm yayımlanamaz: {$a}';
$string['export_audienceaftersubmission'] = 'Katılımcılar bir denemeyi tamamladıktan sonra indirebilir';
$string['export_audiencealways'] = 'Katılımcılar istedikleri zaman indirebilir';
$string['export_audiencestaff'] = 'Yalnızca yetkili öğretim kadrosu — katılımcılara sunulmaz';
$string['export_docx'] = 'Word olarak indir (DOCX)';
$string['export_downloadpdf'] = 'PDF indir';
$string['export_heading'] = 'Deşifre metnini dışa aktar';
$string['export_intro'] = 'Bu alıştırmanın deşifre metnini çeşitli biçimlerde indirin.';
$string['export_moreformats'] = 'Diğer biçimler';
$string['export_nocontent'] = 'Dışa aktarılacak yayımlanmış bir deşifre metni henüz yok.';
$string['export_odt'] = 'OpenDocument olarak indir (ODT)';
$string['export_pdf'] = 'PDF olarak indir';
$string['export_solution'] = 'Çözümlü deşifre metni';
$string['export_solutionhint'] = 'Her boşluğun çözümünün göründüğü tam metin.';
$string['export_text'] = 'Metin olarak indir';
$string['export_versionnote'] = 'Dışa aktarmalar bu alıştırmanın şu anda yayımlanmış sürümüne dayanır.';
$string['export_worksheet'] = 'Çalışma sayfası (boşluklar gizli)';
$string['export_worksheethint'] = 'Her boşluğun gizlendiği metin. Katılımcı materyali olarak dağıtılmaya hazır.';
$string['exporttranscript'] = 'Deşifre metnini dışa aktar';
$string['filearea_media'] = 'Ortam';
$string['filearea_poster'] = 'Kapak görseli';
$string['gradingheading'] = 'Yanıtların değerlendirilmesi';
$string['import_badtiming'] = 'Zaman satırı okunamadı: {$a}';
$string['import_emptytranscript'] = 'Metni olmayan bir segment atlandı.';
$string['import_warnlinetoolong'] = '{$a->block}. blok atlandı: {$a->max} karakterden uzun bir satır içeriyor, bu da bir altyazı satırı değil.';
$string['jarothreshold'] = 'Benzerlik eşiği';
$string['jarothreshold_help'] = '“Yakın yanıtları kabul et” olarak ayarlanmış boşluklarda bu değer, beklenen yanıt ile yazılan yanıt arasındaki en küçük Jaro benzerliğidir. 1 değeri, dile özgü normalleştirmeden sonra tam eşleşme ister; daha düşük değerler giderek daha farklı yazımları kabul eder.';
$string['jarothresholdrange'] = 'Eşik 0 ile 1 arasında olmalı.';
$string['language'] = 'İçerik dili';
$string['language_help'] = 'Alıştırma içeriğinin dilini seçin. Bu, büyük-küçük harf işleme ve çevriyazı dahil olmak üzere yanıtların nasıl karşılaştırılacağını belirler. Dile özgü bir işlem uygulanmasın istiyorsanız “Genel (belirtilmemiş)” seçeneğini seçin. Yeni içerik sürümleri bu ayardan başlar.';
$string['language_none'] = 'Genel (belirtilmemiş)';
$string['media_cuenote'] = 'Ortamı değiştirdiğinizde var olan altyazılar ve boşluklar korunur. Zamanlamaları uyarlanmaz, bu yüzden sonrasında düzenleyicide denetleyin.';
$string['media_current'] = 'Geçerli ortam';
$string['media_heading'] = 'Ortam';
$string['media_intro'] = 'Bu alıştırmanın dayandığı videoyu veya sesi seçin. Altyazılar buna göre zamanlanır, bu yüzden ilk adım budur.';
$string['media_none'] = 'Bu alıştırma için henüz bir ortam belirlenmedi.';
$string['media_othersource'] = 'Başka kaynak';
$string['media_providerhint'] = 'Tanınan sağlayıcılar: {$a}. Diğer tüm adresler doğrudan ortam adresi olarak kullanılır.';
$string['media_sourceurl'] = 'Ortam adresi';
$string['media_sourceurl_help'] = 'Dosya yüklemek yerine bir videonun adresini yapıştırın — YouTube veya Vimeo bağlantısı ya da bir ortam dosyasının doğrudan adresi.

Buraya girilen adres, yüklenen dosyanın yerini alır. Yukarıdaki yüklemeyi kullanmak için boş bırakın.

Sağlayıcı videosu, sağlayıcının kendi çerçevesinde oynatılır ve bu çerçeve oynatma süresini bildirmez. Böyle bir alıştırma altyazıları her zaman ortamın altında gösterir ve altyazı sonunda hiç durmaz.

**Veriler nereye gider.** Bir YouTube veya Vimeo çerçevesi her katılımcının tarayıcısını o şirkete bağlar; şirket böylece katılımcının IP adresini ve aygıt bilgilerini alır. Varsayılan olarak alıştırma bunu yapmadan önce sorar. Kurumunuzun kendi ortam sunucusu varsa — Opencast, Panopto, Kaltura veya benzeri — bunun yerine dosyanın oradaki doğrudan adresini yapıştırın: sıradan bir ortam adresi gibi ele alınır, seçtiğiniz altyazı konumunu ve duraklama ayarını korur ve işin içine üçüncü bir taraf girmez.';
$string['migratev1_approvalheading'] = 'Taşındı, denetim bekliyor';
$string['migratev1_approvebutton'] = 'Bu taşımayı onayla';
$string['migratev1_approved'] = '{$a} video dikte onaylandı olarak işaretlendi.';
$string['migratev1_colactivity'] = 'Etkinlik';
$string['migratev1_colalgorithm'] = 'Değerlendirme algoritması';
$string['migratev1_colcues'] = 'Segmentler';
$string['migratev1_colgaps'] = 'Boşluklar';
$string['migratev1_colissues'] = 'Sorunlar';
$string['migratev1_collearners'] = 'Katılımcılar';
$string['migratev1_confirmdecommission'] = 'Bu işlem sürüm 1’in eski tablolarını ve elang.options sütununu GERİ ALINAMAZ biçimde siler. Geri alınamaz. Devam edilsin mi?';
$string['migratev1_confirmmigrate'] = 'Bu işlem, yukarıda listelenen her etkinlik için sürüm 2 verilerini yazan bir arka plan görevini sıraya alır. Sürüm 1’in tabloları ve elang.options dokunulmadan kalır. Devam edilsin mi?';
$string['migratev1_decommissionblocked'] = 'Silme hâlâ engelleniyor; aşağıdaki listeye bakın.';
$string['migratev1_decommissionblockedintro'] = 'Silme şunlar gerçekleşene kadar engellidir:';
$string['migratev1_decommissionbutton'] = 'Sürüm 1’in eski verilerini sil';
$string['migratev1_decommissioned'] = 'Sürüm 1’in eski verileri silindi.';
$string['migratev1_decommissionheading'] = 'Sürüm 1 verilerinin kullanımdan kaldırılması';
$string['migratev1_decommissionready'] = 'Sürüm 1’in tüm etkinlikleri taşındı ve onaylandı. Eski tablolar ve elang.options artık silinebilir. Bu işlem geri alınamaz.';
$string['migratev1_heading'] = 'Sürüm 1 etkinliklerini taşı';
$string['migratev1_migratebutton'] = 'Bu etkinlikleri taşı';
$string['migratev1_noissues'] = 'Yok';
$string['migratev1_nonepending'] = 'Taşınmayı bekleyen sürüm 1 etkinliği yok.';
$string['migratev1_nonependingapproval'] = 'Denetim bekleyen taşınmış etkinlik yok.';
$string['migratev1_notablespresent'] = 'Bu sitede sürüm 1’e ait eski tablo bulunamadı. Taşınacak bir şey yok.';
$string['migratev1_parseerrorcount'] = 'İşlenemeyen segmentler: {$a}';
$string['migratev1_pendingheading'] = 'Henüz taşınmadı';
$string['migratev1_queued'] = 'Taşıma görevi sıraya alındı. Bir sonraki cron çalışmasında ya da admin/cli/adhoc_task.php --execute komutuyla hemen çalışır.';
$string['migratev1_verifiedclean'] = 'Doğrulandı: taşınan veriler sürüm 1 kaynağıyla sapma olmadan örtüşüyor.';
$string['migratev1_verifieddiscrepancies'] = 'Doğrulama, sürüm 1 kaynağına göre sapmalar buldu: {$a}';
$string['migratev1_verifyfailed'] = 'Bu etkinlik doğrulanamadı: {$a}';
$string['modulename'] = 'Video dikte';
$string['modulename_help'] = 'Video dikte etkinliği, katılımcıların bir videoyu izlerken veya dinlerken zaman kodlu altyazılardaki boşlukları doldurmasını sağlar.

Öğretim elemanları bir WebVTT veya SubRip altyazı dosyasını içe aktarır, sözcükleri ya da öbekleri boşluk olarak işaretler ve yanıtların ne kadar katı karşılaştırılacağını ayarlar. Katılımcılar deşifre metninde segment segment ilerler, puan kesintili ipuçları ister ve anında geri bildirim alır.';
$string['modulenameplural'] = 'Video dikteler';
$string['nav_exportshort'] = 'Dışa aktar';
$string['nav_media'] = 'Ortam';
$string['nav_reports'] = 'Denemeler';
$string['nav_subtitles'] = 'Altyazılar ve boşluklar';
$string['noinstances'] = 'Bu derste video dikte yok.';
$string['overview_attempts'] = 'Denemeler';
$string['playbackheading'] = 'Oynatma ve altyazılar';
$string['playbackoverlayhint'] = 'Görüntünün üzerine yerleştirilen altyazı yalnızca o an oynayan altyazıyı gösterir; bu yüzden oynatma, hâlâ doldurulacak boşluğu olan bir altyazının sonunda her zaman durur. Burada seçilecek bir şey yoktur.';
$string['playbackproviderhint'] = 'YouTube veya Vimeo videosu, sağlayıcının kendi çerçevesinde oynatılır ve bu çerçeve oynatma süresini bildirmez. Böyle bir alıştırma altyazıları her zaman ortamın altında gösterir ve yukarıda ne seçilirse seçilsin altyazı sonunda hiç durmaz. Yüklenen dosyalar ve doğrudan ortam adresleri her iki ayara da uyar.';
$string['player_check'] = 'Yanıtı denetle';
$string['player_consentaccept'] = 'Videoyu {$a} üzerinden yükle';
$string['player_consentdetail'] = 'Oynatmak, tarayıcınızı {$a} ile bağlar. {$a}, IP adresinizi ve aygıtınıza ilişkin bilgileri alır ve daha önce yerleştirdiği çerezleri okuyabilir. Videoyu yüklemeyi seçene dek hiçbir şey gönderilmez.';
$string['player_consentheading'] = 'Bu videoyu {$a} sağlıyor';
$string['player_finish'] = 'Denemeyi tamamla';
$string['player_finished'] = 'Deneme tamamlandı. Puan: %score%%';
$string['player_finishincomplete'] = 'Hâlâ boş olan boşluklar: {$a}. Deneme yine de tamamlansın mı?';
$string['player_gaplabel'] = '%gap%. boşluk';
$string['player_gaplink'] = 'Bağlantıyı aç';
$string['player_hint'] = 'Bir ipucu göster';
$string['player_loaderror'] = 'Alıştırma yüklenemedi. Sayfayı yeniden yükleyin.';
$string['player_loading'] = 'Alıştırma yükleniyor…';
$string['player_nocontent'] = 'Henüz yayımlanmış alıştırma içeriği yok. Daha sonra yeniden bakın.';
$string['player_novideotrack'] = 'Tarayıcınız bu ortamın video izini gösteremiyor; ses yine de çalacak. Öğretim elemanınıza bildirin.';
$string['player_outdatedattempt'] = 'Bu alıştırma, siz bu denemeye başladıktan sonra güncellendi. Önceki içerik üzerinden sürdürüyorsunuz; bir sonraki sefer güncel alıştırmayla çalışmak için bu denemeyi tamamlayın.';
$string['player_progress'] = '{$a->total} boşluktan {$a->done} tanesi yanıtlandı';
$string['player_ready'] = 'Alıştırma hazır.';
$string['player_scorelabel'] = 'Puan: %score%%';
$string['player_stateaccepted'] = 'Kabul edildi';
$string['player_statecorrect'] = 'Doğru';
$string['player_statehinted'] = 'İpucu kullanıldı';
$string['player_stateincorrect'] = 'Yanlış';
$string['player_submitfailed'] = 'Yanıtınız kaydedilemedi. Yeniden deneyin.';
$string['player_transcriptheading'] = 'Deşifre metni';
$string['pluginadministration'] = 'Video dikte yönetimi';
$string['pluginname'] = 'Video dikte';
$string['privacy_metadata_elang'] = 'Her etkinlik için, 1.x içeriğinin tek yönlü taşınmasını kimin onayladığının kaydı.';
$string['privacy_metadata_elang_attempt'] = 'Bir alıştırmadaki her deneme için etkinlik, kimin yaptığını, ne zaman yaptığını, nereye kadar ilerlediğini ve nasıl değerlendirildiğini saklar.';
$string['privacy_metadata_elang_attempt_answeredgaps'] = 'Katılımcının bu denemede kaç boşluğu yanıtladığı.';
$string['privacy_metadata_elang_attempt_attemptnumber'] = 'Bu denemenin kullanıcı ve etkinlik için sıra numarası.';
$string['privacy_metadata_elang_attempt_correctgaps'] = 'Bu denemede kaç boşluğun doğru kabul edildiği.';
$string['privacy_metadata_elang_attempt_exactgaps'] = 'Bu denemede kaç boşluğun karakterine dek tam eşleşmeyle yanıtlandığı.';
$string['privacy_metadata_elang_attempt_hintedgaps'] = 'Katılımcının bu denemede kaç boşluk için ipucu istediği.';
$string['privacy_metadata_elang_attempt_score'] = 'Bu denemede elde edilen puan.';
$string['privacy_metadata_elang_attempt_state'] = 'Denemenin sürüyor, tamamlanmış ya da yarıda bırakılmış olması.';
$string['privacy_metadata_elang_attempt_timefinish'] = 'Denemenin tamamlandığı zaman.';
$string['privacy_metadata_elang_attempt_timemodified'] = 'Denemenin en son güncellendiği zaman.';
$string['privacy_metadata_elang_attempt_timestart'] = 'Denemenin başladığı zaman.';
$string['privacy_metadata_elang_attempt_totalgaps'] = 'Bu denemenin ait olduğu alıştırma sürümündeki toplam boşluk sayısı.';
$string['privacy_metadata_elang_attempt_userid'] = 'Denemeyi yapan kullanıcının kimliği.';
$string['privacy_metadata_elang_attempt_versionid'] = 'Bu denemenin üzerinde yapıldığı alıştırma sürümü.';
$string['privacy_metadata_elang_migrationapproveduserid'] = 'Bu etkinliğin mod_elang 1.x sürümünden taşınmasını onaylayan kullanıcı. Onayın izlenebilir kalması için saklanır.';
$string['privacy_metadata_elang_response'] = 'Katılımcının bir deneme içinde yanıtladığı her boşluk için etkinlik, yanıt metnini ve nasıl değerlendirildiğini saklar.';
$string['privacy_metadata_elang_response_accepted'] = 'Bu boşluk için yanıtın doğru kabul edilip edilmediği.';
$string['privacy_metadata_elang_response_hintlevel'] = 'Bu boşluk için katılımcıya gösterilen en yüksek ipucu düzeyi.';
$string['privacy_metadata_elang_response_responsetext'] = 'Katılımcının bu boşluğa yazdığı metin.';
$string['privacy_metadata_elang_response_resultstate'] = 'Değerlendirmenin bu yanıta verdiği sınıflandırma (tam, sözcük tanındı, yanlış veya boş).';
$string['privacy_metadata_elang_response_score'] = 'Bu yanıtın, varsa ipucu kesintisinden sonra kattığı puan.';
$string['privacy_metadata_elang_response_timecreated'] = 'Bu yanıtın ilk gönderildiği zaman.';
$string['privacy_metadata_elang_response_timemodified'] = 'Bu yanıtın en son güncellendiği zaman.';
$string['privacy_metadata_elang_response_tries'] = 'Katılımcının bu boşluk için kaç kez yanıt gönderdiği.';
$string['privacy_metadata_elang_version'] = 'Her içerik sürümü için etkinlik, onu en son hangi kullanıcının değiştirdiğini saklar.';
$string['privacy_metadata_elang_version_usermodified'] = 'Bu içerik sürümünü en son değiştiren kullanıcı. Alıştırma içeriğini kimin düzenlediğinin izlenebilmesi için saklanır.';
$string['privacy_provider_externallink'] = 'Bir alıştırma YouTube veya Vimeo videosuna dayandığında, açılması katılımcının tarayıcısını o sağlayıcıya bağlar. Eklenti kendiliğinden hiçbir şey göndermez, ancak bağlantıya etkinlik yol açar. Bunun gerçekleşip gerçekleşmeyeceği, sitenin sağlayıcı onayı ayarına ve katılımcının onayına bağlıdır.';
$string['privacy_provider_ipaddress'] = 'Katılımcının tarayıcısının bağlandığı IP adresi.';
$string['privacy_provider_useragent'] = 'Tarayıcının gönderdiği tarayıcı ve aygıt bilgileri.';
$string['provider_vimeo'] = 'Vimeo';
$string['provider_youtube'] = 'YouTube';
$string['providerconsent'] = 'YouTube veya Vimeo gömülmeden önce sor';
$string['providerconsent_desc'] = 'YouTube veya Vimeo videosuna dayanan alıştırmalar, videonun yerine bir bildirim gösterir ve videoyu ancak katılımcı onayladıktan sonra gömer. Bu olmadan sağlayıcı, sayfa açılır açılmaz katılımcının IP adresini ve tarayıcı bilgilerini alır — daha kimse oynat düğmesine basmadan. Bunu yalnızca kurumunuz bu onayı başka bir yerde alıyorsa kapatın.';
$string['report_actions'] = 'İşlemler';
$string['report_answered'] = 'Yanıtlanan';
$string['report_attemptnumber'] = 'Deneme';
$string['report_back'] = 'Tüm denemelere dön';
$string['report_correct'] = 'Doğru';
$string['report_delete'] = 'Sil';
$string['report_deleteconfirm'] = 'Bu deneme ve tüm yanıtları kalıcı olarak silinsin mi? Bu işlem geri alınamaz.';
$string['report_deleted'] = 'Deneme silindi.';
$string['report_exact'] = 'Tam';
$string['report_export'] = 'Dışa aktar';
$string['report_filterany'] = 'Tümü';
$string['report_filterapply'] = 'Süzgeçleri uygula';
$string['report_filterattempt'] = 'Deneme numarası';
$string['report_filterfrom'] = 'Şu tarihten başlayan';
$string['report_filterrangeerror'] = 'Aralığın sonu başlangıcından önce.';
$string['report_filterreset'] = 'Süzgeçleri temizle';
$string['report_filterstate'] = 'Durum';
$string['report_filterto'] = 'Şu tarihe kadar başlayan';
$string['report_filteruser'] = 'Katılımcı';
$string['report_finished'] = 'Tamamlanan';
$string['report_heading'] = 'Denemeler';
$string['report_hinted'] = 'İpucuyla';
$string['report_hints'] = 'İpucu düzeyi';
$string['report_kpianswered'] = 'Yanıtlanan';
$string['report_kpiattempts'] = 'Gösterilen denemeler';
$string['report_kpiaverage'] = 'Ortalama puan (tamamlanan)';
$string['report_kpicorrect'] = 'Kabul edilen';
$string['report_kpiexact'] = 'Tamamen doğru';
$string['report_kpifinished'] = 'Tamamlanan';
$string['report_kpihinted'] = 'İpucu kullandı';
$string['report_kpihintedgaps'] = 'İpucuna gerek duydu';
$string['report_noattempts'] = 'Henüz deneme yok.';
$string['report_nogaps'] = 'Bu denemenin yapıldığı sürümde boşluk yok.';
$string['report_nomatchingattempts'] = 'Bu süzgeçlere uyan deneme yok.';
$string['report_noresponse'] = 'Yanıtsız';
$string['report_response'] = 'Yanıt';
$string['report_result'] = 'Sonuç';
$string['report_result_empty'] = 'Boş';
$string['report_result_exact'] = 'Tam';
$string['report_result_incorrect'] = 'Yanlış';
$string['report_result_none'] = '—';
$string['report_result_wordrecognized'] = 'Tanındı';
$string['report_score'] = 'Puan';
$string['report_solution'] = 'Çözüm';
$string['report_started'] = 'Başlangıç';
$string['report_state'] = 'Durum';
$string['report_state_abandoned'] = 'Yarıda bırakıldı';
$string['report_state_finished'] = 'Tamamlandı';
$string['report_state_inprogress'] = 'Sürüyor';
$string['report_transcript'] = 'Deşifre metni';
$string['report_tries'] = 'Yanıt denemeleri';
$string['report_user'] = 'Katılımcı';
$string['report_view'] = 'Görüntüle';
$string['reports'] = 'Raporlar';
$string['resetattempts'] = 'Tüm katılımcı denemelerini ve yanıtlarını sil';
$string['solutionavailability'] = 'Katılımcılar için çözümlü deşifre metni';
$string['solutionavailability_aftersubmission'] = 'Deneme tamamlandıktan sonra';
$string['solutionavailability_always'] = 'İstenildiği zaman';
$string['solutionavailability_help'] = 'Katılımcıların, her boşluğun çözümünün göründüğü tam deşifre metnini ne zaman indirebileceği.

* Hiçbir zaman — yalnızca öğretim elemanları indirebilir.
* Deneme tamamlandıktan sonra — katılımcı, bu etkinlikte bir denemeyi tamamladıktan sonra indirebilir.
* İstenildiği zaman — katılımcı yanıtlamadan önce de indirebilir.

Yetkili öğretim kadrosu, bu ayardan bağımsız olarak her zaman indirebilir.';
$string['solutionavailability_never'] = 'Hiçbir zaman';
$string['subplugintype_elangscript'] = 'Yazı sistemi işleyicisi';
$string['subplugintype_elangscript_plural'] = 'Yazı sistemi işleyicileri';
$string['subtitleposition'] = 'Altyazıların gösterimi';
$string['subtitleposition_below'] = 'Ortamın altında';
$string['subtitleposition_help'] = 'Etkileşimli altyazıların nerede gösterileceği.

* Ortamın altında — deşifre metninin tamamı ortamın altında kendi kaydırma alanında durur ve oynatmayı izler.
* Videoda, altta veya üstte — ortamın üzerine yalnızca o an oynayan altyazı çizilir.

Yalnızca sesten oluşan bir ortamda üzerine çizilecek görüntü yoktur; bu yüzden her zaman ortamın altındaki gösterim kullanılır. Ayarın kendisi korunur ve etkinlik bir video kullanır kullanmaz yeniden geçerli olur.';
$string['subtitleposition_overlaybottom'] = 'Videoda — altta';
$string['subtitleposition_overlaytop'] = 'Videoda — üstte';
$string['task_migratev1activities'] = 'Sürüm 1 etkinliklerini taşı';
$string['transcriptheading'] = 'Katılımcılar için deşifre metni';
$string['validate_cueafterend'] = '{$a->where}: {$a->endtime} ms’de bitiyor, yani ortamdan sonra ({$a->duration} ms). Oynatma oraya hiç ulaşamaz.';
$string['validate_cueendbeforestart'] = '{$a}: bitiş, başlangıçtan sonra değil.';
$string['validate_cuewhere'] = '{$a->sortorder}. segment ({$a->cuekey})';
$string['validate_emptysolution'] = '{$a} için çözüm boş.';
$string['validate_hintlevels'] = '{$a} için ipucu düzeyleri birden başlayan kesintisiz bir dizi oluşturmuyor.';
$string['validate_negativetime'] = '{$a}: başlangıç zamanı kaydın başlangıcından önce.';
$string['validate_nocues'] = 'Sürümde hiç segment yok.';
$string['validate_nogaps'] = 'Sürümde yanıtlanacak boşluk yok.';
$string['validate_nonpositivelength'] = '{$a} için karakter uzunluğu pozitif olmalı.';
$string['validate_rangeoutside'] = '{$a} için karakter aralığı kendi deşifre metninin dışında kalıyor.';
$string['validate_rangeoverlap'] = '{$a} için karakter aralığı başka bir boşlukla çakışıyor.';
$string['validate_unknownalgorithm'] = '{$a->where} için “{$a->algorithm}” değerlendirme algoritması tanınmıyor.';
$string['validate_where'] = '{$a->cuekey} segmentindeki {$a->gapkey} boşluğu';
$string['verify_algorithmmismatch'] = '{$a->gapkey} boşluğu: değerlendirme algoritması “{$a->actual}”, beklenen “{$a->expected}” idi.';
$string['verify_attemptcount'] = 'Taşınan deneme sayısı {$a->actual}, beklenen 1.x sürümünden {$a->expected} ayrı katılımcıydı.';
$string['verify_jarothreshold'] = 'Yanıt karşılaştırma eşiği {$a->actual}, beklenen {$a->expected} idi.';
$string['verify_missingattempt'] = '{$a} kullanıcısı: taşınmış bir deneme bekleniyordu, hiçbiri bulunamadı.';
$string['verify_missingcue'] = '{$a} segmenti: taşınan segment eksik.';
$string['verify_missinggap'] = '{$a} boşluğu: taşınan boşluk eksik.';
$string['verify_missinghint'] = '{$a} boşluğu: sürüm 1 burada yardıma izin veriyordu, ancak hiç ipucu taşınmadı.';
$string['verify_orphancue'] = '{$a} segmenti: sürüm 1’den karşılık gelen bir segment bulunamadı.';
$string['verify_orphangap'] = '{$a} boşluğu: sürüm 1’den karşılık gelen bir boşluk bulunamadı.';
$string['verify_rangemismatch'] = '{$a} boşluğu: karakter aralığı sürüm 1 kaynağıyla örtüşmüyor.';
$string['verify_responsecount'] = '{$a->userid} kullanıcısı: taşınan yanıt sayısı {$a->actual}, beklenen {$a->expected} idi.';
$string['verify_solutionmismatch'] = '{$a->gapkey} boşluğu: çözüm “{$a->actual}”, beklenen “{$a->expected}” idi.';
$string['verify_transcriptmismatch'] = '{$a} segmenti: deşifre metni sürüm 1 kaynağıyla örtüşmüyor.';
$string['verify_unexpectedhint'] = '{$a} boşluğu: sürüm 1 burada yardıma izin vermiyordu, yine de bir ipucu taşındı.';
