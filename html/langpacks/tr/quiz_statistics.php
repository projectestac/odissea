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
 * Strings for component 'quiz_statistics', language 'tr', version '4.5'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Güncel yanıt';
$string['allattempts'] = 'tüm denemeler';
$string['allattemptsavg'] = 'Tüm denemelerin not ortalaması';
$string['allattemptscount'] = 'Puanlaması yapılmış toplam deneme sayısı';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" variant {$a->variant}';
$string['analysisofresponses'] = 'Verilen yanıtların analizi';
$string['analysisofresponsesfor'] = '{$a} için verilen yanıtların analizi';
$string['analysisvariant'] = '"{$a->name}" sürüm {$a->variant}';
$string['attempts'] = 'Denemeler';
$string['attemptsall'] = 'tüm denemeler';
$string['attemptsfirst'] = 'ilk deneme';
$string['backtoquizreport'] = 'Ana istatistik rapor sayfasına dön';
$string['calculatefrom'] = 'İstatistikleri buradan hesapla';
$string['calculatingallstats'] = 'Sınav, soru ve yanıt verilerini analiz etmek için istatistikleri hesaplanıyor';
$string['cic'] = 'Dahili tutarlılıkların katsayısı ({$a} için)';
$string['completestatsfilename'] = 'Tamamlamalar';
$string['count'] = 'Sıra';
$string['counttryno'] = 'Deneme sayısı {$a}';
$string['coursename'] = 'Kurs adı';
$string['detailedanalysis'] = 'Bu soruya verilen yanıtların daha ayrıntılı analizi';
$string['detailedanalysisforvariant'] = 'Bu soruya verilen yanıtların {$a} versiyonunun daha ayrıntılı analizi';
$string['discrimination_index'] = 'Ayırt edicilik indexi';
$string['discriminative_efficiency'] = 'Ayırt edicilik gücü';
$string['downloadeverything'] = 'Raporu şu formatta indir:';
$string['duration'] = 'Açık';
$string['effective_weight'] = 'Etkili ağırlık';
$string['errordeleting'] = 'Eski {$a} kayıtları silerken hata.';
$string['errormedian'] = 'Ortanca alınırken hata';
$string['errorpowerquestions'] = 'Soru notları varyansını hesaplamak için veri alma hatası';
$string['errorpowers'] = 'Sınav notları varyansını hesaplamak için veri alma hatası';
$string['errorrandom'] = 'Alt öğe verisi alınırken hata';
$string['errorratio'] = 'Hata oranı ({$a} için)';
$string['errorstatisticsquestions'] = 'Soru notlari istatistiklerini  hesaplarken veri alma hatası';
$string['facility'] = 'Güçlük indeksi';
$string['firstattempts'] = 'ilk deneme';
$string['firstattemptsavg'] = 'İlk denemenin not ortalaması';
$string['firstattemptscount'] = 'Not verilen ilk deneme sayısı';
$string['frequency'] = 'Sıklık';
$string['getstatslockprogress'] = 'Devam eden görev bekleniyor. Lütfen bekleyin veya daha sonra tekrar deneyin.';
$string['getstatslocktimeout'] = 'İstatistik hesaplama kilit zaman aşımı';
$string['getstatslocktimeoutdesc'] = 'Sınav için istatistik hesaplaması yapılmaya çalışıldığında kilit için kaç saniye bekleneceği. Bu ayar öncelikle sınav içindir, ne yaptığınızı bilmiyorsanız değiştirmeyin.';
$string['highestattempts'] = 'en yuksek puanlı deneme';
$string['highestattemptsavg'] = 'En yüksek puanlı uygulamaların ortalaması';
$string['intended_weight'] = 'Kasıtlı ağırlık';
$string['kurtosis'] = 'Not dağılım basıklığı ({$a} için)';
$string['lastattempts'] = 'son deneme';
$string['lastattemptsavg'] = 'Son denemelerin not ortalaması';
$string['lastcalculated'] = 'O zamandan beri {$a->lastcalculated} gün önce {$a->count} deneme yapıldı.';
$string['maximumfacility'] = 'Maksimum kolaylık';
$string['median'] = 'Ortanca not ({$a} için)';
$string['medianfacility'] = 'Ortanca kolaylık';
$string['minimumfacility'] = 'Minimum kolaylık';
$string['modelresponse'] = 'Cevap anahtarı';
$string['nameforvariant'] = '$a->name} Varyant {$a->variant}';
$string['negcovar'] = 'Toplam deneme notu ile notun negatif ortak değişkenliği';
$string['negcovar_help'] = 'Bu sorunun sınavdaki bu deneme seti için notu, genel deneme notunun tersi yönde değişir. Bu, bu sorunun notu ortalamanın üzerindeyken genel deneme notunun ortalamanın altında olma eğiliminde olduğu veya tam tersi olduğu anlamına gelir.

Etkin soru ağırlığı denklemimiz bu durumda hesaplanamaz. Bu testteki diğer sorular için etkin soru ağırlığı hesaplamaları, negatif kovaryansa sahip vurgulanmış sorulara maksimum sıfır notu verilmesi durumunda bu sorular için etkin soru ağırlığıdır.

Bir sınavı düzenler ve negatif kovaryansa sahip bu soru(lar)a maksimum sıfır notu verirseniz, bu soruların etkin soru ağırlığı sıfır olacak ve diğer soruların gerçek etkin soru ağırlığı şimdi hesaplandığı gibi olacaktır.';
$string['nogradedattempts'] = 'Bu testte herhangi bir deneme yapılmamıştır veya tüm denemelerde elle puanlamayı gerektiren sorular bulunmakta.';
$string['nostats'] = 'İstatistik hesaplaması tamamlanamadı. Uzun süredir devam eden bir hesaplama olabilir. Lütfen daha sonra tekrar deneyin.';
$string['nostudentsingroup'] = 'Bu grupta henüz öğrenci yok';
$string['optiongrade'] = 'Kısmi kredi';
$string['partofquestion'] = 'Sorunun bir bölümü';
$string['pluginname'] = 'İstatistikler';
$string['position'] = 'Yer';
$string['positions'] = 'Yer(ler)';
$string['privacy:metadata'] = 'Sınav İstatistikleri eklentisi veritabanı tablolarına sahip olsa da, veriler toplu verilerdir ve benzersiz bir tekil bireyi tanımlamaz.';
$string['questioninformation'] = 'Soru bilgisi';
$string['questionname'] = 'Soru adı';
$string['questionnumber'] = 'S#';
$string['questionstatistics'] = 'Soru istatistikleri';
$string['questionstatsfilename'] = 'soru istatistikleri';
$string['questiontype'] = 'Soru türü';
$string['quizinformation'] = 'Sınav bilgisi';
$string['quizname'] = 'Sınav adı';
$string['quizoverallstatistics'] = 'Ayrıntılı sınav istatistikleri';
$string['quizstructureanalysis'] = 'Sınav yapısı analizi';
$string['random_guess_score'] = 'Rastgele tahmin puanı';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'Bu sorular için istatistik aralığı';
$string['recalculatenow'] = 'Şimdi yeniden hesapla';
$string['recalculatetask'] = 'Soru istatistiklerini yeniden hesaplayın';
$string['reportsettings'] = 'İstatistik hesaplama ayarları';
$string['response'] = 'Verilen yanıt';
$string['skewness'] = 'Not dağılım çarpıklığı ({$a} için)';
$string['slotstructureanalysis'] = '{$a} numaralı soru için yapısal analiz';
$string['standarddeviation'] = 'Standart sapma ({$a} için)';
$string['standarddeviationq'] = 'Standart sapma';
$string['standarderror'] = 'Standart hata ({$a} için)';
$string['statistics'] = 'Sınav istatistikleri';
$string['statistics:view'] = 'İstatistik raporuna bak';
$string['statisticsreport'] = 'İstatistik raporu';
$string['statisticsreportgraph'] = 'Soru konumları için istatistikler';
$string['statsfor'] = 'Sınav İstatistikleri ({$a} için)';
$string['variant'] = 'Varyant';
$string['viewanalysis'] = 'Detayları göster';
$string['whichtries'] = 'cevapları için analiz';
