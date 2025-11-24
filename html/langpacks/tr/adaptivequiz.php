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
 * Strings for component 'adaptivequiz', language 'tr', version '4.5'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated'] = 'Tahmini yetenek';
$string['abilityestimated_help'] = 'Sınava giren kişinin tahmini yeteneği, sınava giren kişinin soruyu doğru cevaplama olasılığının %50 olduğu soru zorluğuyla uyumludur. Performans düzeyini belirlemek için, yetenek değerini soru düzeyi aralığıyla eşleştirin (\'/\' simgesinden sonraki aralığa bakın).';
$string['activityreports'] = 'Deneme raporu';
$string['adaptivequiz:addinstance'] = 'Yeni bir uyarlamalı test ekle';
$string['adaptivequiz:attempt'] = 'Deneme sınavı çalışması';
$string['adaptivequiz:reviewattempts'] = 'Deneme sınavı gönderilerini inceleyin';
$string['adaptivequiz:viewreport'] = 'Deneme sınavı raporlarını görüntüle';
$string['adaptivequizname'] = 'İsim';
$string['adaptivequizname_help'] = 'Deneme Sınavı örneğinin adını girin';
$string['all_attempts_deleted'] = 'Tüm Deneme sınavları silindir';
$string['all_grades_removed'] = 'Tüm Deneme Sınavı notları kaldırıldı';
$string['answer'] = 'Cevap';
$string['answers_display_name'] = 'Yanıtlar';
$string['attempt_questiondetails'] = 'Soru Detayları';
$string['attempt_state'] = 'Deneme durumu';
$string['attempt_summary'] = 'Deneme Özeti';
$string['attempt_user'] = 'Kullanıcı';
$string['attemptclosed'] = 'Deneme sınavları manuel kapatıldı.';
$string['attemptclosedstatus'] = 'El ile {$a->current_user_name} (user-id: {$a->current_user_id}) tarafından {$a->now} tarihinde kapatıldı.';
$string['attemptdeleted'] = '{$a->timecompleted} tarihinde gönderilen {$a-> name} için deneme silindi';
$string['attemptfeedback'] = 'Deneme Geribildirimi';
$string['attemptfeedback_help'] = 'Deneme bittikten sonra deneme geri bildirimi kullanıcıya gösterilir';
$string['attemptfeedbackdefaulttext'] = 'Denemeyi bitirdiniz, testi çözdüğünüz için teşekkürler!';
$string['attemptfinishedtimestamp'] = 'Deneme Bitiş Zamanı';
$string['attemptfirst'] = 'İlk Deneme';
$string['attemptlast'] = 'Son Deneme';
$string['attemptnofirstquestion'] = 'Maalesef denemeyi başlatmak için ilk soruyu tanımlayamadı, test muhtemelen yanlış yapılandırılmış.';
$string['attemptquestion_ability'] = 'Yetenek Ölçüsü';
$string['attemptquestion_abilitylogits'] = 'Ölçülen Yetenek (logits)';
$string['attemptquestion_difficulty'] = 'Soruların Zorluğu (logits)';
$string['attemptquestion_diffsum'] = 'Zorluk Toplamı';
$string['attemptquestion_level'] = 'Soru Seviyesi';
$string['attemptquestion_rightwrong'] = 'Doğru/Yanlış';
$string['attemptquestion_stderr'] = 'Standart Hata (&plusmn;&nbsp;logits)';
$string['attemptquestionsprogress'] = 'Sorular ilerleme durumu: {$a}';
$string['attemptquestionsprogress_help'] = 'Burada görüntülenen en fazla soru sayısı, sınav sırasında sormanız gereken soru sayısı olmayabilir.  Alabilceğiniz MAKSİMUM OLASI soru sayısıdır, yetkinlik ölçütü yeterince tanımlanırsa sınav daha erken bitebilir.';
$string['attemptsallowed'] = 'Denemelere İzin Verildi';
$string['attemptsallowed_help'] = 'Öğrencinin bu etkinliği deneme sayısı';
$string['attemptstarttime'] = 'Deneme Başlangıç Zamanı';
$string['attemptstate'] = 'Denemenin durumu';
$string['attemptstopcriteria'] = 'Denemenin Durdurulma Nedeni';
$string['attemptsusernoprevious'] = 'Henüz bu testi denemediniz.';
$string['attemptsuserprevious'] = 'Önceki denemeleriniz';
$string['attempttotaltime'] = 'Toplam Zaman (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Tüm Sorulara Geri Dön';
$string['bestscore'] = 'En İyi Skor';
$string['bestscorestderror'] = 'Standart Hata';
$string['browsersecurity'] = 'Tarayıcı Güvenliği';
$string['browsersecurity_help'] = '"Bazı JavaScript güvenlikli tam ekran açılır penceresi" seçilirse, sınav yalnızca öğrencinin JavaScript etkin bir web tarayıcısı varsa başlar, kısa sınav diğer tüm pencereleri kapsayan ve hiçbir navigasyonu olmayan bir tam ekran açılır penceresinde görünür kontroller ve öğrencilerin kopyala ve yapıştır gibi olanaklardan mümkün olduğunca kaçınmaları';
$string['calcerrorwithinlimits'] = '{$a-> calerror} adlı hesaplanan standart hata, {$a-> definitionerror} etkinliği tarafından belirtilen sınırlar dahilinde';
$string['closeattempt'] = 'Denemeyi Kapat';
$string['completionattemptcompletedcminfo'] = 'Denemeyi tamamla';
$string['completionattemptcompletedform'] = 'Öğrencinin bu etkinlikte en az bir denemesini tamamlamış olması gerekir';
$string['confirmcloseattempt'] = 'Bu {$a->name} denemeyi kapatmak ve sonlandırmak istediğinizden emin misiniz?';
$string['confirmcloseattemptscore'] = '{$a->num_questions} soruları cevaplandı ve şu ana kadarki puan {$a->measure} {$a->standarderror} dir.';
$string['confirmcloseattemptstats'] = 'Bu deneme {$a->started} tarihinde başlatıldı ve en son {$a->modified} tarihinde güncellendi.';
$string['confirmdeleteattempt'] = '{$a->timecompleted} adresinde gönderilen {$a-> name} denemenin silinmesinin onaylanması';
$string['deleteattemp'] = 'Deneme sınavını sil';
$string['discrimination_display_name'] = 'Ayıt etme';
$string['downloadcsv'] = 'CSV\'yi indirin';
$string['enterrequiredpassword'] = 'Gerekli şifreyi girin';
$string['errorattemptstate'] = 'Deneme durumunu belirlerken bir hata oluştu';
$string['errorclosingattempt_alreadycomplete'] = 'Bu deneme zaten tamamlandı, manuel olarak kapatılamaz.';
$string['errorfetchingquest'] = '{$a-> level} düzeyi için bir soru getirilemiyor';
$string['errorlastattpquest'] = 'Son denenen soru için yanıt değeri kontrol edilirken hata oluştu';
$string['errornumattpzero'] = 'Denenen soru sayısıyla ilgili hata sıfıra eşit, ancak kullanıcı önceki soruya bir cevap gönderdi';
$string['errorsumrightwrong'] = 'Doğru ve yanlış cevapların toplamı, denenen toplam soru sayısına eşit değil';
$string['eventattemptcompleted'] = 'Deneme tamalandı';
$string['formelementdecimal'] = 'Ondalık bir sayı girin. Ondalık noktasının sağında maksimum 10 basamak uzunluğunda ve maksimum 5 basamak';
$string['formelementempty'] = '1 ile 999 arasında pozitif bir sayı girin';
$string['formelementnegative'] = '1 ile 999 arasında pozitif bir sayı girin';
$string['formelementnumeric'] = '1 ile 999 arasında bir sayısal değer girin';
$string['formlowlevelgreaterthan'] = 'En düşük seviye en yüksek seviyeden az olmalıdır';
$string['formminquestgreaterthan'] = 'Minimum soru sayısı maksimum soru sayısından az olmalıdır';
$string['formquestionpool'] = 'En az bir soru kategorisi seçin';
$string['formstartleveloutofbounds'] = 'Başlangıç seviyesi, en düşük ve en yüksek seviye arasındaki bir sayı olmalıdır';
$string['formstderror'] = '50\'den küçük ve 0\'a eşit veya 0\'dan büyük bir yüzde girilmelidir';
$string['functiondisabledbysecuremode'] = 'Bu işlev şu anda devre dışı';
$string['gradehighest'] = 'En Yüksek Puan';
$string['grademethod'] = 'Puanlama Yöntemi';
$string['grademethod_help'] = 'Birden fazla denemeye izin verildiğinde, son sınav notunu hesaplamak için aşağıdaki yöntemler kullanılabilir:

* Tüm denemelerin en yüksek notu
* İlk deneme (diğer tüm denemeler yok sayılır)
* Son deneme (diğer tüm denemeler yok sayılır)';
$string['graphlegend_error'] = 'Standart hata';
$string['highestlevel'] = 'En Yüksek Zorluk Seviyesi';
$string['highestlevel_help'] = 'Değerlendirmenin soruları seçebileceği en yüksek veya en zor düzey. Bir deneme sınavı sırasında etkinlik bu zorluk seviyesinin ötesine geçmeyecek';
$string['highlevelusers'] = 'Soru seviyesinin üstündeki kullanıcılar';
$string['id'] = 'Kimlik';
$string['indvuserreport'] = 'Bireysel kullanıcı denemeleri raporu {$a}';
$string['leveloutofbounds'] = 'Deneme için istenen {$a->level} seviye sınırı dışında';
$string['lowestlevel'] = 'En düşük zorluk seviyesi';
$string['lowestlevel_help'] = 'Değerlendirmenin soruları seçebileceği en düşük veya en az zor düzey. Bir deneme sırasında etkinlik bu zorluk seviyesinin üstüne çıkmayacaktır.';
$string['lowlevelusers'] = 'Soru seviyesinin altındaki kullanıcılar';
$string['maximumquestions'] = 'Maksimum soru sayısı';
$string['maximumquestions_help'] = 'Öğrencinin denemedeki maksimum soru sayısı';
$string['maxquestattempted'] = 'Denemedeki maksimum soru sayısı';
$string['midlevelusers'] = 'Soru düzeyine yakın kullanıcılar';
$string['minimumquestions'] = 'Minimum soru sayısı';
$string['minimumquestions_help'] = 'Öğrencinin denemesi gereken minimum soru sayısı';
$string['missingtagprefix'] = 'Eksik etiket öneki';
$string['modformshowattemptprogress'] = 'Öğrencilere sınav ilerleme durumunu göster';
$string['modformshowattemptprogress_help'] = 'Seçildiğinde, deneme sırasında, öğrenci maksimum sayıdan kaç sorunun yanıtlandığını gösteren bir ilerleme çubuğu görecektir.';
$string['modulename'] = 'Deneme Sınavı';
$string['modulename_help'] = 'Uyarlanabilir Sınav etkinliği, bir öğretmenin katılımcıların yeteneklerini verimli bir şekilde ölçen sınavlar oluşturmasına yardımcı olur. Uyarlanabilir sınavlar, soru bankasından seçilen ve zorluk derecelerine göre bir puanla etiketlenen sorulardan oluşur. Sorular, mevcut sınav katılımcısının yaklaşık yetenek seviyesine uygun olacak şekilde seçilir. Sınav katılımcısı bir soruda başarılı olursa, daha zorlayıcı bir soru sunulur. Sınav katılımcısı bir soruya yanlış cevap verirse, daha az zorlayıcı bir soru sorulur. Bu teknik, sınav katılımcısının etkin beceri seviyesine ulaşan bir dizi soruya dönüşecektir. Test katılımcısının yeteneği gerekli doğrulukta belirlendiğinde sınav sona erer.

Bu etkinlik, tek boyutlu bir ölçek üzerinden bir yetenek ölçüsü belirlemek için en uygun olanıdır. Ölçek çok geniş olsa da, soruların hepsi aynı ölçekte bir yetenek veya beceri ölçüsü sağlamalıdır. Örneğin bir seviye belirleme sınavında, acemilerin doğru cevaplayabildiği ölçeğin altındaki sorular uzmanlar tarafından da cevaplanabilmeli, ölçeğin üstündeki sorular ise sadece uzmanlar veya şanslı bir tahminde bulunan kişiler tarafından cevaplanabilmelidir. Farklı yeteneklere sahip katılımcılar arasında ayrım yapmayan sorular sınavı etkisiz hale getirecek ve sonuçsuz kalmasına neden olabilecektir.

Uyarlamalı sınav kullanılan sorular

 * otomatik olarak doğru / yanlış olarak puanlanacaktır
 * \'adpq_\' kullanarak zorluklarla etiketlenir ve ardından sınav aralığı içindeki pozitif bir tamsayı gelir

Deneme sınavı şu şekilde yapılandırılabilir:

 * ölçülecek soru zorlukları / kullanıcı yetenekleri aralığını tanımlamak. 1-10, 1-16 ve 1-100 geçerli aralıklara örnektir.
 * sınav durdurulmadan önce gereken hassasiyeti tanımlayın. Genellikle yetenek ölçüsünde% 5\'lik bir hata uygun bir durdurma kuralıdır
 * en az sayıda sorunun cevaplanmasını gerektirir
 * cevaplanabilecek maksimum sayıda soru gerektirir

Bu açıklama ve bu etkinlikteki sınav süreci, John Michael\'ın <a href="http://www.rasch.org/memo69.pdf"> Bilgisayar Kullananılan Uyarlanabilir Sınav: Zamanı Gelen Bir Metodolojiye </a> dayanmaktadır. Linacre, Ph.D. MESA Psikometrik Laboratuvarı - Chicago Üniversitesi. MESA Memorandum No.69.';
$string['modulenameplural'] = 'Deneme Sınavı';
$string['na'] = 'tanımsız';
$string['name'] = 'Ad';
$string['noattemptsallowed'] = 'Bu etkinlikte başka girişe izin verilmiyor';
$string['nonewmodules'] = 'Deneme sınavı örneği bulunamadı';
$string['nopermission'] = 'Bu kaynağı görüntüleme izniniz yoktur.';
$string['notinprogress'] = 'Bu deneme devam etmiyor.';
$string['notyourattempt'] = 'Bu etkinlikteki deneme size ait değil';
$string['numofattemptshdr'] = 'Giriş miktarı';
$string['percent_correct_display_name'] = 'Doğru %';
$string['pluginadministration'] = 'Deneme Sınavı';
$string['pluginname'] = 'Deneme Sınavı';
$string['question_report'] = 'Soru analizi';
$string['questionanalysisbtn'] = 'Soru Analizi';
$string['questionnumber'] = 'Soru #';
$string['questionpool'] = 'Soru havuzu';
$string['questionpool_help'] = 'Bir deneme sırasında etkinliğin soruları çekeceği soru kategorisini / kategorilerini seçin.';
$string['questions_report'] = 'Soru Raporu';
$string['questionsattempted'] = 'Denenen soruların toplamı';
$string['questionspoolerrornovalidstartingquestions'] = 'Seçilen soru kategorileri, seçilen başlangıç zorluk seviyesine uygun şekilde etiketlenmiş sorular içermiyor.';
$string['recentactquestionsattempted'] = 'Denenen sorular: {$a}';
$string['recentattemptstate'] = 'Deneme durumu:';
$string['recentcomplete'] = 'Tamamlandı';
$string['recentinprogress'] = 'Devam eden';
$string['reportattemptanswerdistributiontab'] = 'Cevap Dağılımı';
$string['reportattemptgraphtab'] = 'Deneme Grafiği';
$string['reportattemptgraphtabletitle'] = 'Deneme Grafiğinin Tablo Görünümü';
$string['reportattemptquestionsdetailstab'] = 'Soru Detayları';
$string['reportattemptreviewpageheading'] = '{$a->quizname} - {$a->fullname} tarafından {$a->finished} tarihinde gönderilen denemenin ön izlemesi.';
$string['reportattemptsbothenrolledandnotenrolled'] = 'şimdiye kadar deneme yapan tüm kullanıcılar';
$string['reportattemptsdownloadfilename'] = '{$a}_attempts_report';
$string['reportattemptsenrolledwithattempts'] = 'denemeye katılımcılar';
$string['reportattemptsenrolledwithnoattempts'] = 'deneme yapılmayan katılımcılar';
$string['reportattemptsfilterformheader'] = 'Filtreleme';
$string['reportattemptsfilterformsubmit'] = 'filtre';
$string['reportattemptsfilterincludeinactiveenrolments'] = 'Etkin olmayan kayıtlı kullanıcıları dahil et';
$string['reportattemptsfilterincludeinactiveenrolments_help'] = 'Kayıtları askıya alınmış kullanıcıların dahil edilip edilmeyeceği.';
$string['reportattemptsfilterusers'] = 'Göster';
$string['reportattemptsnotenrolled'] = 'deneme yapan kayıtlı olmayan kullanıcılar';
$string['reportattemptspersistentfilter'] = 'Kalıcı filtre';
$string['reportattemptspersistentfilter_help'] = 'İşaretlendiğinde, aşağıdaki filtre ayarları gönderildiğinde saklanacak ve ardından rapor sayfasını her ziyaret edişinizde uygulanacaktır.';
$string['reportattemptsprefsformheader'] = 'Rapor Tercihleri';
$string['reportattemptsprefsformsubmit'] = 'Uygula';
$string['reportattemptsresetfilter'] = 'Filtreyi sıfırla';
$string['reportattemptsshowinitialbars'] = 'Paraf çubuğunu göster';
$string['reportattemptsummarytab'] = 'Deneme Özeti';
$string['reportattemptsusersperpage'] = 'Görüntülenen kullanıcı sayısı:';
$string['reportindividualuserattemptpageheading'] = '{$a->quizname} - {$a->username} için bireysel kullanıcı denemeleri raporu';
$string['reportquestionanalysispageheading'] = '{$a} - soru raporu';
$string['reportuserattemptstitleshort'] = '{$a} denemeleri';
$string['requirepassword'] = 'Gerekli şifre';
$string['requirepassword_help'] = 'Öğrenciler denemelerine başlamadan önce bir şifre girmelidirler';
$string['requirepasswordmessage'] = 'Bu deneme sınavı için sınav şifresini bilmeniz gerekir';
$string['resetadaptivequizsall'] = 'Tüm Uyarlanabilir Test denemelerini sil';
$string['result'] = 'Sonuç';
$string['reviewattempt'] = 'Denemeyi gözden geçir';
$string['reviewattemptreport'] = '{$a->fullname} tarafından {$a->finished} tarihinde gönderilen deneme inceleniyor';
$string['score'] = 'Puan';
$string['standarderror'] = 'Durdurmak için Standart Hata';
$string['standarderror_help'] = 'Kullanıcının yeteneğinin ölçüsündeki hata miktarı bu miktarın altına düştüğünde quiz duracaktır. Yetenek ölçüsünde daha fazla veya daha az hassasiyet gerektirecek şekilde bu değeri varsayılan %5\'ten ayarlayın';
$string['standarderrorhdr'] = 'Standart hata';
$string['startattemptbtn'] = 'Denemeyi başlat';
$string['startinglevel'] = 'Başlangıç zorluk seviyesi';
$string['startinglevel_help'] = 'Öğrenci bir denemeye başlar, etkinlik rastgele zorluk düzeyine uygun bir soru seçecektir.';
$string['statistic'] = 'istatistik';
$string['stopingconditionshdr'] = 'Durdurma koşulları';
$string['submitanswer'] = 'Cevabı gönder';
$string['times_used_display_name'] = 'Kullanılan Kez';
$string['updateattempterror'] = 'Deneme kaydı güncellemeye çalışırken hata oluştu';
$string['user'] = 'Kullanıcı';
$string['value'] = 'Değer';
$string['wrongpassword'] = 'şifre yanlış';
