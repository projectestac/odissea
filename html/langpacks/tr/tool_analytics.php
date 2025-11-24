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
 * Strings for component 'tool_analytics', language 'tr', version '4.5'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'doğruluk';
$string['actionexecutedgroupedusefulness'] = 'Gruplandırılmış eylemler';
$string['actions'] = 'Eylemler';
$string['actionsexecutedbyusers'] = 'Kullanıcılar tarafından yürütülen eylemler';
$string['actionsexecutedbyusersfor'] = '"{$a}" modeli için kullanıcılar tarafından yürütülen işlemler';
$string['allpredictions'] = 'Tüm tahminler';
$string['alltimesplittingmethods'] = 'Tüm analiz aralıkları';
$string['analysingsitedata'] = 'Siteyi analiz etme';
$string['analysis'] = 'analiz';
$string['analyticmodels'] = 'Analitik modeller';
$string['bettercli'] = 'Modelleri değerlendirmek ve tahminler oluşturmak, yoğun işleme gerektirebilir. Bu eylemleri komut satırından çalıştırmanız önerilir.';
$string['cantguessenddate'] = 'Bitiş tarihini tahmin edemiyorum';
$string['cantguessstartdate'] = 'Başlangıç tarihini tahmin edemiyorum';
$string['classdoesnotexist'] = '{$a} sınıfı mevcut değil';
$string['clearmodelpredictions'] = 'Tüm "{$a}" tahminlerini silmek istediğinizden emin misiniz?';
$string['clearpredictions'] = 'Tahminleri temizle';
$string['clienablemodel'] = 'Kimliğine göre bir analiz aralığı seçerek modeli etkinleştirebilirsiniz. Bunu daha sonra web arayüzünü kullanarak da etkinleştirebileceğinizi unutmayın (çıkmak için \'none\').';
$string['clievaluationandpredictions'] = 'Zamanlanmış bir görev, etkinleştirilmiş modeller aracılığıyla yinelenir ve tahminler alır. Web arayüzü üzerinden model değerlendirmesi devre dışı bırakıldı. <a href="{$a}">\'onlycli\'</a> analitik ayarını devre dışı bırakarak bu işlemlerin web arayüzü üzerinden manuel olarak yürütülmesine izin verebilirsiniz.';
$string['clievaluationandpredictionsnoadmin'] = 'Zamanlanmış bir görev, etkinleştirilmiş modeller aracılığıyla yinelenir ve tahminler alır. Web arayüzü üzerinden model değerlendirmesi devre dışı bırakıldı. Bir site yöneticisi tarafından etkinleştirilebilir.';
$string['component'] = 'Bileşen';
$string['componentcore'] = 'çekirdek';
$string['componentselect'] = '\'{$a}\' bileşeni tarafından sağlanan tüm modelleri seçin';
$string['componentselectnone'] = 'Tümünün seçimini kaldır';
$string['contexts'] = 'Bağlamlar';
$string['contexts_help'] = 'Model, bu bağlam kümesiyle sınırlı olacaktır. Hiçbir bağlam seçilmezse, hiçbir bağlam kısıtlaması uygulanmaz.';
$string['createmodel'] = 'Model oluştur';
$string['currenttimesplitting'] = 'Mevcut analiz aralığı';
$string['delete'] = 'Sil';
$string['deletemodelconfirmation'] = '"{$a}" silmek istediğinizden emin misiniz? Bu değişiklikler geri alınamaz.';
$string['disabled'] = 'Devre dışı';
$string['editmodel'] = '"{$a}" modelini düzenle';
$string['edittrainedwarning'] = 'Bu model zaten eğitildi. Göstergelerini veya analiz aralığını değiştirmenin önceki tahminlerini sileceğini ve yeni tahminler üretmeye başlayacağını unutmayın.';
$string['enabled'] = 'Etkin';
$string['errorcantenablenotimesplitting'] = 'Modeli etkinleştirmeden önce bir analiz aralığı seçmeniz gerekir.';
$string['errornoenabledandtrainedmodels'] = 'Tahmin edilecek etkin ve eğitilmiş model yok.';
$string['errornoenabledmodels'] = 'Eğitilecek etkinleştirilmiş model yok.';
$string['errornoexport'] = 'Yalnızca eğitilmiş modeller dışa aktarılabilir';
$string['errornostaticevaluated'] = 'Varsayımlara dayalı modeller değerlendirilemez. Nasıl tanımlandıklarına göre her zaman %100 doğrudurlar.';
$string['errornostaticlog'] = 'Varsayımlara dayalı modeller, performans günlüğü olmadığı için değerlendirilemez.';
$string['erroronlycli'] = 'Yürütmeye yalnızca komut satırı üzerinden izin verilir';
$string['errortrainingdataexport'] = 'Model eğitim verileri dışa aktarılamadı';
$string['evaluate'] = 'Değerlendirmek';
$string['evaluatemodel'] = 'Modeli değerlendir';
$string['evaluationinbatches'] = 'Site içeriği gruplar halinde hesaplanır ve saklanır. Değerlendirme süreci herhangi bir zamanda durdurulabilir. Bir sonraki çalıştırılışında durdurulduğu noktadan devam edecektir.';
$string['evaluationmode'] = 'değerlendirme modu';
$string['evaluationmode_help'] = 'İki değerlendirme modu vardır:

* Eğitilen model - Saha verileri, eğitilen modelin doğruluğunu değerlendirmek için test verileri olarak kullanılır.
* Konfigürasyon - Site verileri, model konfigürasyonunun doğruluğunu hem eğitmek hem de test etmek için eğitim ve test verilerine bölünür.

Eğitilen model, yalnızca eğitilmiş bir model siteye aktarılmışsa ve site verileri kullanılarak henüz yeniden eğitilmemişse kullanılabilir.';
$string['evaluationmodecolconfiguration'] = 'Yapılandırma';
$string['evaluationmodecoltrainedmodel'] = 'Yapılandırma';
$string['evaluationmodeconfiguration'] = 'Model yapılandırmasını değerlendirin';
$string['evaluationmodeinfo'] = 'Bu model siteye aktarılmıştır. Modelin performansını değerlendirebilir veya site verilerini kullanarak model yapılandırmasının performansını değerlendirebilirsiniz.';
$string['evaluationmodetrainedmodel'] = 'Eğitilmiş modeli değerlendirin';
$string['executescheduledanalysis'] = 'Planlanmış analizi yürütün';
$string['export'] = 'Dışa aktar';
$string['exportincludeweights'] = 'Eğitilmiş modelin ağırlıklarını dahil et';
$string['exportmodel'] = 'Yapılandırmayı dışa aktar';
$string['exporttrainingdata'] = 'Eğitim verilerini dışa aktar';
$string['extrainfo'] = 'Bilgi';
$string['generalerror'] = 'Değerlendirme hatası. Durum kodu {$a}';
$string['goodmodel'] = 'Bu, tahminleri elde etmek için kullanmak için iyi bir modeldir. Tahminleri almaya başlamak için etkinleştirin.';
$string['ignoreversionmismatches'] = 'Sürüm uyumsuzluklarını yoksay';
$string['ignoreversionmismatchescheckbox'] = 'Bu site sürümü ile orijinal site sürümü arasındaki farkları yok sayın.';
$string['importedsuccessfully'] = 'Model başarıyla içe aktarıldı.';
$string['importmodel'] = 'Modeli içe aktar';
$string['indicators'] = 'Göstergeler';
$string['indicators_help'] = 'Göstergeler, hedefin doğru bir tahminine yol açacağını düşündüğünüz şeydir.';
$string['indicators_link'] = 'Indicators';
$string['indicatorsnum'] = 'Gösterge sayısı: {$a}';
$string['info'] = 'Bilgi';
$string['insights'] = 'içgörüler';
$string['insightsreport'] = 'İçgörü raporu';
$string['invalidanalysables'] = 'Geçersiz site öğeleri';
$string['invalidanalysablesinfo'] = 'Bu sayfa, bu tahmin modeli tarafından kullanılamayan analiz edilebilir öğeleri listeler. Listelenen öğeler ne tahmin modelini eğitmek için ne de tahmin modeli onlar için tahminler elde etmek için kullanılamaz.';
$string['invalidanalysablestable'] = 'Geçersiz site analiz edilebilir öğeler tablosu';
$string['invalidcurrenttimesplitting'] = 'Mevcut analiz aralığı, bu modelin hedefi için geçersiz. Lütfen farklı bir aralık seçin.';
$string['invalidindicatorsremoved'] = 'Yeni bir model eklendi. Seçilen hedefle çalışmayan göstergeler otomatik olarak kaldırıldı.';
$string['invalidprediction'] = 'Tahmin almak için geçersiz';
$string['invalidtimesplitting'] = 'Seçilen analiz aralığı, seçilen hedef için geçersiz.';
$string['invalidtimesplittinginmodels'] = 'Bazı modellerin kullandığı analiz aralığı geçersiz. Lütfen aşağıdaki modeller için farklı bir aralık seçin: {$a}';
$string['invalidtraining'] = 'Modeli eğitmek için geçersiz';
$string['loginfo'] = 'Ek bilgileri günlüğe kaydet';
$string['missingmoodleversion'] = 'İçe aktarılan dosya bir sürüm numarası tanımlamıyor';
$string['modelid'] = 'model kimliği';
$string['modelinvalidanalysables'] = '"{$a}" modeli için geçersiz analiz edilebilir öğeler';
$string['modelname'] = 'Model adı';
$string['modelresults'] = '{$a} sonuç';
$string['modeltimesplitting'] = 'Analiz aralığı';
$string['newmodel'] = 'Yeni model';
$string['nextpage'] = 'Sonraki Sayfa';
$string['noactionsfound'] = 'Kullanıcılar, oluşturulan içgörüler üzerinde herhangi bir işlem gerçekleştirmedi.';
$string['nodatatoevaluate'] = 'Modeli değerlendirmek için veri yok';
$string['nodatatopredict'] = 'Tahmin almak için yeni öğe yok.';
$string['nodatatotrain'] = 'Eğitim için kullanılabilecek yeni bir veri yok.';
$string['noinvalidanalysables'] = 'Bu site herhangi bir geçersiz analiz edilebilir öğe içermiyor.';
$string['notdefined'] = 'Henüz tanımlanmadı';
$string['pluginname'] = 'Analitik modeller';
$string['predictionprocessfinished'] = 'Tahmin süreci tamamlandı';
$string['predictionresults'] = 'Tahmin sonuçları';
$string['predictmodels'] = 'Modelleri tahmin et';
$string['predictorresultsin'] = 'Tahminci, {$a} dizinindeki bilgileri günlüğe kaydetti';
$string['previouspage'] = 'Önceki sayfa';
$string['privacy:metadata'] = 'Analitik modeller eklentisi herhangi bir kişisel veri saklamaz.';
$string['restoredefault'] = 'Varsayılan modelleri geri yükle';
$string['restoredefaultempty'] = 'Lütfen geri yüklenecek modelleri seçin.';
$string['restoredefaultinfo'] = 'Bu varsayılan modeller eksik veya kurulduktan sonra değişti. Seçili varsayılan modelleri geri yükleyebilirsiniz.';
$string['restoredefaultnone'] = 'Çekirdek ve kurulu eklentiler tarafından sağlanan tüm varsayılan modeller oluşturuldu. Yeni model bulunamadı; geri yüklenecek bir şey yok.';
$string['restoredefaultsome'] = '{$a->count} yeni model(ler) başarıyla yeniden oluşturuldu.';
$string['restoredefaultsubmit'] = 'Seçileni geri yükle';
$string['sameenddate'] = 'Mevcut bitiş tarihi iyi';
$string['samestartdate'] = 'Mevcut başlangıç tarihi iyi';
$string['scheduledanalysisresults'] = '{$a->name} analiz aralığını kullanan sonuçlar';
$string['scheduledanalysisresultscli'] = '{$a->name} (id: {$a->id}) analiz aralığını kullanan sonuçlar';
$string['selecttimesplittingforevaluation'] = 'Model konfigürasyonunu değerlendirmek için kullanmak istediğiniz analiz aralığını seçin.
';
$string['target'] = 'Hedef';
$string['target_help'] = 'Hedef, modelin tahmin edeceği şeydir.';
$string['target_link'] = 'Targets';
$string['timesplittingnotdefined'] = 'Herhangi bir analiz aralığı tanımlanmamıştır.';
$string['timesplittingnotdefined_help'] = 'Modeli etkinleştirmeden önce bir analiz aralığı seçmeniz gerekir.';
$string['trainandpredictmodel'] = 'Eğitim modeli ve tahminleri hesaplama';
$string['trainingprocessfinished'] = 'Eğitim süreci tamamlandı';
$string['trainingresults'] = 'Eğitim sonuçları';
$string['trainmodels'] = 'Tren modelleri';
$string['versionnotsame'] = 'İçe aktarılan dosya, mevcut sürümden ({$a->version}) farklı bir sürümden ({$a->importedversion})';
$string['viewlog'] = 'Değerlendirme günlüğü';
$string['weeksenddateautomaticallyset'] = 'Bitiş tarihi, başlangıç tarihine ve bölüm sayısına göre otomatik olarak ayarlanır';
$string['weeksenddatedefault'] = 'Bitiş tarihi, ders başlangıç tarihinden itibaren otomatik olarak hesaplanır.';
