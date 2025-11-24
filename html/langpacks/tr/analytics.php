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
 * Strings for component 'analytics', language 'tr', version '4.5'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analiz edilebilir {$a->analysableid} kullanılmıyor: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analiz edilebilir {$a->analysableid} bu hedef için geçerli değil: {$a->result}';
$string['analysisinprogress'] = 'Hâlâ bir önceki yürütme tarafından analiz edilmekte';
$string['analytics'] = 'Analitikler';
$string['analyticsdisabled'] = 'Analitikler devre dışı. "Site yönetimi> Gelişmiş özellikler" bölümünde etkinleştirebilirsiniz.';
$string['analyticslogstore'] = 'Analitikler için kullanılan günlük deposu';
$string['analyticslogstore_help'] = 'Kullanıcıların etkinliklerini okumak için analitik API tarafından kullanılacak günlük deposu.';
$string['analyticssettings'] = 'Analitik ayarları';
$string['analyticssiteinfo'] = 'Site bilgileri';
$string['calclifetime'] = 'Aşağıdakiler için analitik hesaplamaları saklayın';
$string['configlcalclifetime'] = 'Bu, hesaplama verilerini saklamak istediğiniz sürenin uzunluğunu belirtir - bu, tahminleri silmez, ancak tahminleri oluşturmak için kullanılan verileri siler. Buradaki varsayılan seçeneği kullanmak, disk kullanımınızı kontrol altında tutması açısından en iyisidir, ancak başka amaçlar için hesaplama tablolarını kullanıyorsanız bu değeri artırmak isteyebilirsiniz.';
$string['defaultpredictionsprocessor'] = 'Varsayılan tahmin işlemcisi';
$string['defaultpredictoroption'] = 'Varsayılan işlemci ({$a})';
$string['defaulttimesplittingmethods'] = 'Modelin değerlendirilmesi için varsayılan analiz aralıkları';
$string['defaulttimesplittingmethods_help'] = 'Analiz aralığı, sistemin tahminleri ne zaman hesaplayacağını ve etkinlik günlüklerinin bu tahminler için dikkate alınacak kısmını tanımlar. Model değerlendirme süreci, spesifik bir analiz aralığı belirtilmedikçe bu analiz aralıklarında tekrarlanır.';
$string['disabledmodel'] = 'Devre dışı model';
$string['erroralreadypredict'] = 'Tahminler oluşturmak için {$a} dosyası zaten kullanılmış.';
$string['errorcannotreaddataset'] = 'Veri kümesi dosyası {$a} okunamıyor.';
$string['errorcannotusetimesplitting'] = 'Sağlanan analiz aralığı bu modelde kullanılamaz.';
$string['errorcannotwritedataset'] = 'Veri kümesi dosyası {$a} yazılamıyor.';
$string['errorexportmodelresult'] = 'Makine öğrenimi modeli dışa aktarılamaz.';
$string['errorimport'] = 'Sağlanan JSON dosyasını içe aktarma hatası.';
$string['errorimportmissingclasses'] = 'Aşağıdaki analitik bileşenleri bu sitede mevcut değildir: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Sağlanan model için aşağıdaki eklentilerin yüklenmesi gerekiyor: {$a}. Sürümlerin sitenizde yüklü sürümlerle eşleşmesi gerekmediğini unutmayın. Eklentinin aynı veya daha yeni bir sürümünü yüklemek çoğu durumda iyi olmalıdır.';
$string['errorimportversionmismatches'] = 'Aşağıdaki bileşenlerin sürümü, bu sitede yüklü sürümden farklıdır: {$a}. Bu farkları yok saymak için \'Sürüm uyumsuzluklarını yoksay\' seçeneğini kullanabilirsiniz.';
$string['errorinvalidcontexts'] = 'Seçilen bağlamlardan bazıları bu hedefte kullanılamaz.';
$string['errorinvalidindicator'] = 'Geçersiz {$a} göstergesi';
$string['errorinvalidtarget'] = 'Geçersiz {$a} hedefi';
$string['errorinvalidtimesplitting'] = 'Geçersiz analiz aralığı; lütfen tam nitelikli sınıf adını eklediğinizden emin olun.';
$string['errornocontextrestrictions'] = 'Seçilen hedef içerik kısıtlamalarını desteklemiyor';
$string['errornoexportconfig'] = 'Model yapılandırması verilirken bir sorun oluştu.';
$string['errornoexportconfigrequirements'] = 'Yalnızca analiz aralığına sahip statik olmayan modeller dışa aktarılabilir.';
$string['errornoindicators'] = 'Bu modelin herhangi bir göstergesi yoktur.';
$string['errornopredictresults'] = 'Tahmin işlemcisi hiçbir sonuç döndürmedi. Daha fazla bilgi için çıktı dizini içeriğini kontrol edin.';
$string['errornoroles'] = 'Öğrenci veya öğretmen rolleri tanımlanmamıştır. Bunları, analitik ayarları sayfasında tanımlayın.';
$string['errornotarget'] = 'Bu modelin herhangi bir hedefi yok.';
$string['errornotimesplittings'] = 'Bu modelin bir analiz aralığı yoktur.';
$string['errorpredictioncontextnotavailable'] = 'Bu tahmin içeriği artık mevcut değildir.';
$string['errorpredictionformat'] = 'Yanlış tahmin hesaplamaları formatı';
$string['errorpredictionnotfound'] = 'Tahmin bulunamadı';
$string['errorpredictionsprocessor'] = 'Tahmin işlemci hatası: {$a}';
$string['errorpredictwrongformat'] = 'Tahmin işlemcisi dönüşü kodu çözülemez: "{$a}"';
$string['errorprocessornotready'] = 'Seçilen öngörüler işlemcisi hazır değil: {$a}';
$string['errorsamplenotavailable'] = 'Tahmin edilen örnek artık mevcut değildir.';
$string['errorunexistingmodel'] = 'Mevcut olmayan model {$a}';
$string['errorunexistingtimesplitting'] = 'Seçilen analiz aralığı mevcut değil.';
$string['errorunknownaction'] = 'Bilinmeyen eylem';
$string['eventinsightsviewed'] = 'Görüntülenen Analizler';
$string['eventpredictionactionstarted'] = 'Tahmin süreci başladı';
$string['fixedack'] = 'Kabul et';
$string['incorrectlyflagged'] = 'Yanlış işaretlenmiş';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = '.Sistem, sizin için bazı bilgiler sağlamıştır.';
$string['insightinfomessageplain'] = 'Sistem, sizin için bazı bilgiler sağlamıştır: {$a}';
$string['insightmessagesubject'] = '"{$a}" için yeni bir bakış açısı';
$string['invalidanalysablefortimesplitting'] = '{$a} analiz aralığı kullanılarak analiz edilemez.';
$string['invalidtimesplitting'] = '{$a} kimliğine sahip model, eğitim için kullanılmadan önce bir analiz aralığına ihtiyaç duyar.';
$string['levelinstitution'] = 'Eğitim seviyesi';
$string['levelinstitutionisced0'] = 'Erken çocukluk eğitimi (eğitim düzeyi için \'ilkokuldan daha az\')';
$string['levelinstitutionisced1'] = 'İlköğretim';
$string['levelinstitutionisced2'] = 'Ortaöğretim';
$string['levelinstitutionisced3'] = 'Lise eğitimi';
$string['levelinstitutionisced4'] = 'Ortaöğretim sonrası yükseköğretim olmayan eğitim (kurumsal veya topluluk / STK eğitimini içerebilir)';
$string['levelinstitutionisced5'] = 'Kısa dönem yükseköğretim (kurumsal veya topluluk / STK eğitimini içerebilir)';
$string['levelinstitutionisced6'] = 'Lisans veya eşdeğeri seviye';
$string['levelinstitutionisced7'] = 'Master veya eşdeğer seviye';
$string['levelinstitutionisced8'] = 'Doktora veya eşdeğeri seviye';
$string['modeinstruction'] = 'Öğretim modları';
$string['modeinstructionblendedhybrid'] = 'Karışık veya hibrit';
$string['modeinstructionfacetoface'] = 'Yüz yüze';
$string['modeinstructionfullyonline'] = 'Tamamen çevrimiçi';
$string['modeloutputdir'] = 'Model çıktıları dizini';
$string['modeloutputdirwithdefaultinfo'] = 'Tahmin işlemcilerinin tüm değerlendirme bilgilerini sakladığı dizin. Hata ayıklama ve araştırma için kullanışlıdır. Boşsa, varsayılan olarak {$a} kullanılacaktır.';
$string['modeltimelimit'] = 'Model başına analiz süresi sınırı';
$string['modeltimelimitinfo'] = 'Bu ayar, her bir modelin sitenin içeriğini analiz etmek için harcadığı süreyi sınırlar.';
$string['neutral'] = 'Nötr';
$string['neverdelete'] = 'Hesaplamaları asla silme';
$string['nocourses'] = 'Analiz edilecek kurs yok';
$string['nodata'] = 'Analiz edecek veri yok';
$string['noevaluationbasedassumptions'] = 'Varsayımlara dayalı modeller değerlendirilemez.';
$string['noinsights'] = 'Analizler bildirilmedi';
$string['noinsightsmodel'] = 'Bu model analiz üretmiyor';
$string['nonewdata'] = 'Yeni veri yok. Model bir sonraki analiz aralığından sonra analiz edilecektir.';
$string['nonewranges'] = 'Henüz yeni tahmin yok. Model bir sonraki analiz aralığından sonra analiz edilecektir.';
$string['nopredictionsyet'] = 'Henüz bir tahmin yok';
$string['noranges'] = 'Henüz tahmin yok';
$string['notapplicable'] = 'Uygulanamaz';
$string['notrainingbasedassumptions'] = 'Varsayımlara dayalı modellerin eğitime ihtiyacı yoktur';
$string['notuseful'] = 'Yararlı değil';
$string['novaliddata'] = 'Geçerli bir veri yok';
$string['novalidsamples'] = 'Geçerli örnek yok';
$string['onlycli'] = 'Analitik süreçlerin yalnızca komut satırı üzerinden yürüt';
$string['onlycliinfo'] = 'Modelleri değerlendirme, makine öğrenimi algoritmalarını eğitme veya tahmin alma gibi analitik süreçler biraz zaman alabilir. Cron görevleri olarak çalışırlar veya komut satırı aracılığıyla zorlanabilirler. Devre dışı bırakılırsa, analitik süreçleri web arayüzü aracılığıyla manuel olarak çalıştırılabilir.';
$string['percentonline'] = 'Yüzde çevrimiçi';
$string['percentonline_help'] = 'Kuruluşunuz karma veya karma kurslar sunuyorsa, Moodle\'da çevrimiçi olarak öğrenci çalışmalarının yüzde kaçı yapılır? 0 ile 100 arasında bir sayı girin.';
$string['predictionsprocessor'] = 'Tahmin işlemcisi';
$string['predictionsprocessor_help'] = 'Tahmin işlemcisi, modellerin göstergelerini ve hedeflerini hesaplayarak oluşturulan veri kümelerini işleyen makine öğrenimi arka uçtur. Her model farklı bir işlemci kullanabilir. Burada belirtilen, varsayılan olacaktır.';
$string['privacy:metadata:analytics:analyticsmodels'] = 'Analitik modelleri';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'Modeli değiştiren kullanıcı';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'Analitik modelleri için kullanılan günlük';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'Günlüğü değiştiren kullanıcı';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Gösterge hesaplamaları';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Bağlam';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Hesaplama bitiş zamanı';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Gösterge hesap makinesi sınıfı';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'Örnek kimlik';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Numunenin başlangıç tablosu';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Hesaplama başlangıç zamanı';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Tahmin ne zaman yapıldı';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Hesaplanan değer';
$string['privacy:metadata:analytics:predictionactions'] = 'Tahmin eylemleri';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'İşlem adı';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'Tahmin kimliği';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Tahmin eylemi gerçekleştirildiğinde';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Eylemi yapan kullanıcı';
$string['privacy:metadata:analytics:predictions'] = 'Tahminler';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Gösterge hesaplamaları';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Bağlam';
$string['privacy:metadata:analytics:predictions:modelid'] = 'Model kimliği';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Tahmini';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Tahmin puanı';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Analiz aralığının endeksi';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Örnek kimlik';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Tahmin ne zaman yapıldı';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Hesaplamalar zaman sonu';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Hesaplamalar başlangıç zamanı';
$string['processingsitecontents'] = 'Site içeriğini işleme koyma';
$string['successfullyanalysed'] = 'Başarıyla analiz edildi';
$string['timesplittingmethod'] = 'Analiz aralığı';
$string['timesplittingmethod_help'] = 'Analiz aralığı, sistemin tahminleri ne zaman hesaplayacağını ve bu tahminler için dikkate alınacak etkinlik günlüklerinin bölümünü tanımlar. Örneğin, kurs süresi, her bölümün sonunda oluşturulan bir tahminle parçalara bölünebilir.';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'Kurum türü';
$string['typeinstitutionacademic'] = 'Akademik';
$string['typeinstitutionngo'] = 'Sivil toplum kuruluşu (STK)';
$string['typeinstitutiontraining'] = 'Kurumsal eğitim';
$string['useful'] = 'Kullanışlı';
$string['viewdetails'] = 'Detayları göster';
$string['viewinsight'] = 'Analizleri görüntüle';
$string['viewinsightdetails'] = 'Analiz ayrıntılarını görüntüleme';
$string['viewprediction'] = 'Tahmin ayrıntılarını görüntüle';
$string['washelpful'] = 'Bu yardımcı oldu mu?';
