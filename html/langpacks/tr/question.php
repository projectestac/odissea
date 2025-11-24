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
 * Strings for component 'question', language 'tr', version '4.5'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Eylem';
$string['addanotherhint'] = 'Bir başka ipucu daha ekle';
$string['addcategory'] = 'Kategori ekle';
$string['addmorechoiceblanks'] = '{no} seçenek daha ekle';
$string['adminreport'] = 'Soru veritabanınızdaki mevcut sorunları raporlayın.';
$string['advancedsearchoptions'] = 'Arama seçeneği';
$string['alltries'] = 'Tüm ağaç';
$string['answer'] = 'Cevap';
$string['answers'] = 'Cevaplar';
$string['answersaved'] = 'Cevap kaydedildi';
$string['answerx'] = 'Cevap {$a}';
$string['attemptfinished'] = 'Gönderim tamamlandı';
$string['attemptfinishedsubmitting'] = 'Tamamlanan deneme gönderiliyor: {$a}';
$string['attemptoptions'] = 'Deneme seçenekleri';
$string['availableq'] = 'Kullanılabilir mi?';
$string['badbase'] = '**: {$a}** öncesi yanlış temel';
$string['behaviour'] = 'Davranış';
$string['behaviourbeingused'] = 'Kulanılmakta olan davranış: {$a}';
$string['broken'] = 'Bu "bağlantı" yanlıştır. Olmayan bir dosyayı gösteriyor.';
$string['byandon'] = '<em>{$a->user}</em> tarafından <em>{$a->time}</em> tarihinde';
$string['cannotcopybackup'] = 'Yedek dosya kopyalanamadı';
$string['cannotcreate'] = 'question_attempts tablosunda yeni kayıt oluşturulamadı';
$string['cannotcreatepath'] = 'Yol oluşturulamadı: {$a}';
$string['cannotdeletebehaviourinuse'] = '\'{$a}\' davranışını silemezsiniz. Bu soru denemelerinde kullanılmaktadır.';
$string['cannotdeletecate'] = 'Bu kategori, bu bağlam için varsayılan kategori olduğundan silemezsiniz.';
$string['cannotdeleteneededbehaviour'] = '\'{$a}\' soru davranışı silinemez. Bu davranışa bağlı olan başka davranışlar bulunmaktadır.';
$string['cannotdeleteqtypeinuse'] = '{$a} soru tipini silemezsiniz. Soru bankasında bu tip sorular var.';
$string['cannotdeleteqtypeneeded'] = '{$a} soru tipini silemezsiniz. Buna bağlı olan, kurulu başka soru tipleri var.';
$string['cannotdeletetopcat'] = 'Üst kategoriler silinemez.';
$string['cannotedittopcat'] = 'Üst kategoriler düzenlenemez.';
$string['cannotenable'] = '{$a} soru tipi direkt silinemez.';
$string['cannotenablebehaviour'] = 'Soru davranışı {$a} direk olarak kullanılamaz. Bu dahili kullanım içindir.';
$string['cannotfindcate'] = 'Kategori kaydı bulunamadı';
$string['cannotfindquestionfile'] = 'Zip dosyasında soru verisi bulunamadı';
$string['cannotgetdsfordependent'] = 'Belirtilen veri kümesi için bir veri kümesi bağımlı soru  veri kümesi alınamıyor! (question: {$a-> id}, datasetitem: {$a-> item})';
$string['cannotgetdsforquestion'] = 'Hesaplanan soru için belirtilen veri kümesi alınamıyor!  (question: {$a})';
$string['cannothidequestion'] = 'Soru gizlenemedi';
$string['cannotimportformat'] = 'Üzgünüz, bu soru için içe aktarma henüz etkin değil!';
$string['cannotinsertquestion'] = 'Yeni soru eklenemedi!';
$string['cannotinsertquestioncatecontext'] = 'Yeni soru kategorisi eklenemedi!';
$string['cannotloadquestion'] = 'Soru yüklenemedi';
$string['cannotmovequestion'] = 'Bu skripti farklı alanlarda bağlı dosyaları bulunan soruları taşımak için kullanamazsınız.';
$string['cannotopenforwriting'] = 'Yazma için açılamıyor: {$a}';
$string['cannotpreview'] = 'Bu sorulara göz atamazsınız!';
$string['cannotread'] = 'Alınan dosya okunamadı (veya dosya boş)';
$string['cannotregradedifferentqtype'] = 'Farklı türde bir soruyla yeniden not verilemez.';
$string['cannotretrieveqcat'] = 'Soru kategorisi alınamadı';
$string['cannotunhidequestion'] = 'Soruyu görünür yaparken hata.';
$string['cannotunzip'] = 'Zipli dosya açılamadı';
$string['cannotwriteto'] = 'Çıkartılan sorular yazılamadı: {$a}';
$string['categories'] = 'Kategoriler';
$string['category'] = 'Kategori';
$string['categorycurrent'] = 'Mevcut kategori';
$string['categorycurrentuse'] = 'Bu kategoriyi kullan';
$string['categorydoesnotexist'] = 'Bu kategori yok';
$string['categoryinfo'] = 'Kategori bilgisi';
$string['categorymove'] = '\'{$a->name}\' kategorisi {$a->count} soruları içeriyor (bunlardan bazıları gizli sorular veya bir sınavda hala kullanılmakta olan rastgele sorular olabilir). Lütfen bunları taşımak için başka bir kategori seçin.';
$string['categorymoveto'] = 'Kategoriye kaydet';
$string['categorynamecantbeblank'] = 'Kategori adı boş bırakılamaz.';
$string['categorynamewithcount'] = '{$a->name} ({$a->questioncount})';
$string['categorynamewithidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['categorynamewithidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->questioncount})';
$string['changeoptions'] = 'Ayarları değiştir';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}">"{$a->coursename}" kursundaki "{$a->name}"</a> kategorisinin paylaşım durumu {$a->changefrom} yerine {$a->changeto} olarak değiştirilecektir.';
$string['check'] = 'Kontrol et';
$string['chooseqtypetoadd'] = 'Eklenecek soru tipini seçin';
$string['clearwrongparts'] = 'Yanlış cevapları temizle';
$string['clickflag'] = 'Soruyu işaretle';
$string['clicktoflag'] = 'İlerisi için bu soruyu işaretle';
$string['clicktounflag'] = 'İşareti kaldır';
$string['clickunflag'] = 'İşareti kaldır';
$string['closepreview'] = 'Önizlemeyi kapat';
$string['combinedfeedback'] = 'Birleşik geribildirim';
$string['comment'] = 'Yorum';
$string['commented'] = 'Yorum: {$a}';
$string['commentormark'] = 'Yorum yap veya notu değiştir';
$string['comments'] = 'Yorumlar';
$string['commentx'] = 'Yorum: {$a}';
$string['complete'] = 'Tamamlandı';
$string['contexterror'] = 'Eğer bir kategoriyi farklı bir içeriğe taşımak istemiyorsanız, burada olmamalısınız.';
$string['copy'] = 'Buradan {$a} kopyala ve linkleri değiştir.';
$string['correct'] = 'Doğru';
$string['correctfeedback'] = 'Tüm doğru yanıtlar için';
$string['correctfeedbackdefault'] = 'Cevabınız doğru.';
$string['created'] = 'Oluşturma';
$string['createdby'] = 'Oluşturan';
$string['createdmodifiedheader'] = 'Oluşturma / Son kaydetme';
$string['createnewquestion'] = 'Yeni soru oluştur ...';
$string['cwrqpfs'] = 'Alt kategorilerden gelişigüzel sorular seçiliyor';
$string['cwrqpfsinfo'] = '<p>Moodle 1.9 yükseltmesi sırasında soru kategorilerini farklı bağlamlara ayıracağız. Bazı soru kategorileri ve sitenizdeki soruların paylaşım konumu değişmek zorunda kalacaktır. Bu, çok nadir bir durum olarak bir küçük sınavdaki \'gelişigüzel\' soruların paylaşılan ve paylaşılmayan kategorilerin karışımından seçilmek üzere ayarlandığı bir durum için gereklidir (aynen bu sitede olduğu gibi). Bu, \'gelişigüzel\' bir soru alt kategorilerden seçilmek üzere ayarlandığında ve bir ya da daha fazla alt kategorinin gelişigüzel sorunun oluşturulduğu üst kategoriye farklı bir paylaşım konumu varsa olur.</p>
<p> Üst kategorilerdeki \'gelişigüzel\' sorulardan soru seçen aşağıdaki soru kategorileri, paylaşım konumlarını değiştirerek Moodle 1.9\'a yükseltmedeki \'gelişigüzel\' soru kategorisindeki paylaşım konumu ile aynı yapacaklardır. Etkilenen sorular, mevcut bütün küçük sınavlarda, siz bu soruları bu küçük sınavlardan kaldırmadığınız sürece çalışmaya devam edecektir.</p>';
$string['cwrqpfsnoprob'] = '\'Alt kategorilerden sorular seçen gelişigüzel sorular\' konusundan sitenizdeki hiçbir soru kategorisi etkilenmez.';
$string['decimalplacesingrades'] = 'Notlardaki ondalık alanları';
$string['defaultfor'] = '{$a} için varsayılan';
$string['defaultinfofor'] = 'Sorular için varsayılan kategori \'{$a}\' bağlamında paylaşıldı.';
$string['defaultmark'] = 'Varsayılan not';
$string['defaultmarkmustbepositive'] = 'Varsayılan not pozitif olmalı.';
$string['deletecoursecategorywithquestions'] = 'Soru bankasında bu kurs kategorisiyle ilişkili sorular mevcuttur. İlerlerseniz, bunlar silinecektir. Soru bankası arayüzünü kullanarak ilk önce bunları taşımak isteyebilirsiniz.';
$string['deletequestioncheck'] = 'Bu, aşağıdaki soruyu ve tüm sürümlerini silecektir:<br /><br />{$a}';
$string['deletequestionscheck'] = 'Bu işlem aşağıdaki soruları ve tüm sürümlerini silecektir:<br /><br />{$a}';
$string['deletequestiontitle'] = 'Soru silinsin mi?';
$string['deletequestiontitle_plural'] = 'Soru silinsin mi?';
$string['deleteselectedquestioncheck'] = 'Bu, aşağıdaki sorunun seçilen sürümlerini silecektir:<br /><br />{$a}';
$string['deleteversiontitle'] = 'Seçilen sürümler silinsin mi?';
$string['deleteversiontitle_plural'] = 'Seçilen sürümler silinsin mi?';
$string['deletingbehaviour'] = '\'{$a}\' soru davranışı siliniyor';
$string['deletingqtype'] = '\'{$a}\' soru tipi siliniyor';
$string['didnotmatchanyanswer'] = '[Hiçbir cevapla eşleşmedi]';
$string['disabled'] = 'Etkin değil';
$string['displayoptions'] = 'Ayarları görüntüle';
$string['disterror'] = '{$a} dağıtımı hataya sebep oldu';
$string['donothing'] = 'Dosyaları kopyalamayın/taşımayın ya da linkleri değiştirmeyin.';
$string['editcategories'] = 'Kategorileri düzenle';
$string['editcategories_help'] = 'Her şey büyük bir listede tutmak yerine, sorular kategorileri ve alt kategorileri halinde düzenlenebilir.

Her kategori soruların nerede kullanılabileceğini belirleyen içerik kategorileri halinde ayarlanabilir:

* Etkinlik içeriği- Sorular sadece etkinlik modülünde kullanılır.
* Kurs içeriği - Sorular kurstaki tüm etkinlik modüllerinde kullanılabilir.
* Kurs kategori içeriği - sorular  Kurs kategorisindeki tüm etkinlik modülleri ve kurslarda kullanılabilir.
* Sistem içeriği - sorular sitedeki mevcut tüm kurslar ve etkinliklerde kullanılabilir.

Kategoriler ayrıcı  belirli bir kategori seçilerek oradan rastgele soruları almak içinde kullanılır.';
$string['editcategories_link'] = 'question/category';
$string['editcategory'] = 'Kategoriyi düzenle';
$string['editingcategory'] = 'Kategori düzenleniyor';
$string['editingquestion'] = 'Soru düzenleniyor';
$string['editquestion'] = 'Soruyu düzenle';
$string['editquestions'] = 'Soruları düzenle';
$string['editthiscategory'] = 'Bu kategoriyi düzenle';
$string['emptyxml'] = 'Bilinmeyen hata - boş imsmanifest.xml';
$string['enabled'] = 'Etkin';
$string['erroraccessingcontext'] = 'Bağlama erişilemedi';
$string['errordeletingquestionsfromcategory'] = '{$a} kategorisinden soruları silmede hata.';
$string['errorduringpost'] = 'İşlem sonrasında hata oluştu!';
$string['errorduringpre'] = 'İşlem öncesinde hata oluştu!';
$string['errorduringproc'] = 'İşlenirken hata oluştu!';
$string['errorduringregrade'] = '{$a->qid}  sorusu yeniden puanlanamadı,  {$a->stateid}.\'nin önceki durumuna dönülüyor.';
$string['errorfilecannotbecopied'] = 'Hata: dosya kopyalanamadı {$a}.';
$string['errorfilecannotbemoved'] = 'Hata: dosya taşınamadı {$a}.';
$string['errorfileschanged'] = 'Hata: formun görüntülenmesinden beri form sorularına bağlı hata dosyaları değişti.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'Soru ({$a}) sınavın farklı konumlarında farklı ağırlıklarla birden fazla kez görünmektedir. Bu durum şu anda istatistik raporu tarafından desteklenmemektedir ve bu soruya ilişkin istatistikleri güvenilmez hale getirebilir.';
$string['errormanualgradeoutofrange'] = '{$a->grade} notu, {$a->name} sorusu için 0 ve {$a->maxgrade} arasında değil. puan ve komut kaydedilmedi.';
$string['errormovingquestions'] = 'Soruları ID\'ler {$a} ile taşırken hata.';
$string['errorpostprocess'] = 'İşlem sonrasında hata oluştu!';
$string['errorpreprocess'] = 'İşlem öncesinde hata oluştu!';
$string['errorprocess'] = 'İşlenirken hata oluştu!';
$string['errorprocessingresponses'] = 'Yanıtlarınızı işlemede hata oluştu. ({$a}).  Devam etmek için tıklayın ve önceki sayfaya  dönün ve tekrar deneyin';
$string['errorsavingcomment'] = '{$a->name} sorusu için yorum veritabanına kaydederken hata.';
$string['errorsavingflags'] = 'Bayrak durumu kaydedilirken hata oluştu.';
$string['errorupdatingattempt'] = '{$a->id} girişimini veritabanında güncellemede hata.';
$string['eventqbankdisabled'] = 'Soru bankası eklentisi devre dışı';
$string['eventqbankenabled'] = 'Soru bankası eklentisi etkinleştirildi';
$string['eventquestioncategorycreated'] = 'Soru kategorisi oluşturuldu.';
$string['eventquestioncategorydeleted'] = 'Soru kategorisi silindi';
$string['eventquestioncategorymoved'] = 'Question category moved';
$string['eventquestioncategoryupdated'] = 'Soru kategorisi güncellendi';
$string['eventquestioncategoryviewed'] = 'Soru kategorisi görüntülendi';
$string['eventquestioncreated'] = 'Soru oluşturuldu';
$string['eventquestiondeleted'] = 'Soru silindi';
$string['eventquestionmoved'] = 'Soru taşındı';
$string['eventquestionsexported'] = 'Sorular dışa aktarıldı';
$string['eventquestionsimported'] = 'İçe aktarılan sorular';
$string['eventquestionupdated'] = 'Soru güncellendi';
$string['eventquestionviewed'] = 'Soru görüntülendi';
$string['export'] = 'Dışa Aktar';
$string['exportasxml'] = 'Moodle XML olarak dışa aktar';
$string['exportcategory'] = 'Kategoriyi dışa ver';
$string['exportcategory_help'] = 'Bu ayar dışa verilecek soruların hangi kategoriden seçileceğini belirler.
Bazı  dosya alma biçimleri örneğin GİFT ve Moodle XML, Kategori ve İçerik verilerinin ihraç  dosyasına dahil edilmesi (isteğe bağlı) dosyalar yeniden alınırken onların yeniden oluşturulmasına izin verir. Eğer gerek duyuyorsanız uygun onay kutusunu işaretleyiniz.';
$string['exporterror'] = 'Dışa aktarırken hata oluştu';
$string['exportfilename'] = 'sorular';
$string['exportnameformat'] = '%Y%a%g-%S%D';
$string['exportonequestion'] = 'Bu soruyu Moodle XML formatında indirin';
$string['exportquestions'] = 'Soruları dosyaya aktar';
$string['exportquestions_help'] = 'Bu fonksiyon kategori (ve herhangi bir alt kategori)deki  tüm soruların bir dosyaya verilmesine imkan verir. Lütfen seçilen dosya biçimine bağlı olarak bazı soruların ve soru tiplerinin dışa aktarılamayacağını unutmayın.';
$string['exportquestions_link'] = 'question/export';
$string['feedback'] = 'Geri bildirim';
$string['fieldinquestion'] = '{$a->fieldname} {$a->questionindentifier}';
$string['fieldinquestionpre'] = '{$a->questionindentifier} {$a->fieldname}';
$string['filecantmovefrom'] = 'Bu soru dosyası taşınamaz çünkü soruları taşımaya çalıştığınız yerden dosyaları  taşımak için izniniz yok.';
$string['filecantmoveto'] = 'Bu soru dosyası taşınamıyor veya kopyalanamıyor. çünkü soruları taşımaya çalıştığınız yerden dosyaları taşımak için izniniz yok.';
$string['fileformat'] = 'Dosya biçimi';
$string['filesareacourse'] = 'kurs dosyaları alanı';
$string['filesareasite'] = 'site dosyaları alanı';
$string['filestomove'] = 'Dosyalar buraya taşınsın/kopyalansın mı: {$a}?';
$string['fillincorrect'] = 'Doğru cevapları göster';
$string['filterbytags'] = 'Etiketlere göre filtrele...';
$string['firsttry'] = 'İlk deneme';
$string['flagged'] = 'İşaretli';
$string['flagthisquestion'] = 'Bu soruyu işaretle';
$string['formquestionnotinids'] = 'Soru formundaki sorularınız soru kimliği yok';
$string['fractionsnomax'] = 'Bu sorudan tam not alınabilmesi için sorulardan en az bir tanesinin puanı %100 olması gerekir.';
$string['generalfeedback'] = 'Genel geribildirim';
$string['generalfeedback_help'] = 'Genel geri bildirim öğrencilere soruların tamamını cevapladıktan sonra gösterilir. Öğrencinin verdiği cevaba  ve soru tipine bağlı olarak  öğrenciye gösterilen özel geri bildirimlere benzemez. Genel geribilldirim metni tüm öğrencilere aynı şekilde gösterilir.
Genel geri bildirimleri öğrencilerin  tam olarak anlamadıkları soruları tam cevap vermeleri için kullunabilirsin';
$string['getcategoryfromfile'] = 'Kategoriyi dosyadan getir';
$string['getcontextfromfile'] = 'Bağlamı dosyadan getir';
$string['hintn'] = 'İpucu {no}';
$string['hintnoptions'] = 'İpucu ayarları {no}';
$string['hinttext'] = 'İpucu metini';
$string['howquestionsbehave'] = 'Sorular nasıl davransın';
$string['howquestionsbehave_help'] = 'Sınav soruları ile öğrencilerle çeşitli şekillerde etkileşimde bulunabilirsiniz. Örneğin öğrencilerden puan alabilmeleri veye geribildirim görüntülemeleri için tüm soruları cevaplaması ve sınavı bitirmelerini isteyebilirsiniz. Bu \'ertelenmiş geribildirim\' modudur.

Alternetif olarak öğrencilere  doğru cevap veremediklerinde yeniden daha az seçenekle deneme yapabilmeleri için soruya cevap verdikleri anda  geri bildirim görüntüleyebilirsiniz. Bu \'Etkileşimli birden fazla deneme\' modudur.

Bunlar en sık kullanılan davranış modundan ikisidir.';
$string['howquestionsbehave_link'] = 'question/behaviour';
$string['idnumber'] = 'Kimlik numarası';
$string['idnumber_help'] = 'Eğer kullanılıyorsa, kimlik numarası her soru kategorisi içinde benzersiz olmalıdır. Bazen kullanışlı olan bir soruyu tanımlamanın başka bir yolunu sağlar, ancak genellikle boş bırakılabilir.';
$string['ignorebroken'] = 'Kırık linkleri yok say';
$string['import'] = 'İçe Aktar';
$string['importcategory'] = 'Kategori aktar';
$string['importcategory_help'] = 'Bu ayar alınacak soruların yer alacağı kategoriyi belirler.

Bazı aktarılacak dosya biçimleri  GIFT ve Moodle XML, gibi kategori ve içerik verileri içerebilir. Seçilen kategori yerine bu verileri kullanmak için uygun onay kutularının işaretli olmalıdır. Aktarılan dosyadaki kategoriler yoksa bunlar yeni kategori olarak  oluşturulacaktır.';
$string['importerror'] = 'İçeri almada bir hata oluştu';
$string['importerrorquestion'] = 'Soru aktarılırken hata oluştu';
$string['importfromcoursefiles'] = '... ya da aktarım için bir kurs dosyası seçin.';
$string['importfromupload'] = 'Yüklemek için bir dosya seçin ...';
$string['importingquestions'] = '{$a} soruları dosyadan aktarılıyor';
$string['importparseerror'] = 'sağlıklı olarak alınabilmesi için ayarlardan \'hata durumunda dur\' kısmını hayir olarak işaretleyin ve tekrar deyin.';
$string['importquestions'] = 'Dosyadan soruları aktar';
$string['importquestions_help'] = 'Bu işlev farklı bicimlerdeki metin dosyalarından soru almanızı sağlar. Not dosyanızın UTF-8 Kodu ile kodlanması gerektiğini unutmayınız.';
$string['importquestions_link'] = 'question/import';
$string['importwrongfileencoding'] = 'Seçtiğiniz dosya UTF-8 karakter kodlaması kullanmıyor. {$a} dosyaları UTF-8 kullanmalıdır.';
$string['importwrongfiletype'] = 'Seçtiğiniz dosya türü ({$a->actualtype}) alınma  biçimi ({$a->expectedtype}) alınma biçimi türü ile eşleşmiyor.';
$string['impossiblechar'] = 'İmkansız karakter {$a} parantez karakteri olarak tespit edildi';
$string['includesubcategories'] = 'Altkategorilerdeki soruları da göster';
$string['incorrect'] = 'Yanlış';
$string['incorrectfeedback'] = 'Tüm yanlış cevaplar için';
$string['incorrectfeedbackdefault'] = 'Cevabınız yanlış.';
$string['information'] = 'Bilgi';
$string['invalidanswer'] = 'Eksik cevap';
$string['invalidarg'] = 'Geçersiz argüman ya da yanlış sunucu yapılandırması';
$string['invalidcategoryidforparent'] = 'Ebeveyni geçersiz kategori id\'si!';
$string['invalidcategoryidtomove'] = 'Taşınması geçersiz kategori id\'si!';
$string['invalidconfirm'] = 'Doğrulama ifadesi hatalı';
$string['invalidcontextinhasanyquestions'] = 'Geçersiz bağlam question_context_has_any_questions\'a geçirildi.';
$string['invalidgrade'] = 'Notlar ({$a}) not seçenekleri ile uyuşmuyor-soru atlandı';
$string['invalidgradequestion'] = 'Notlar ({$a->grades}) not seçenekleriyle eşleşmiyor - \'{$a->question}\' sorusu atlandı.';
$string['invalidpenalty'] = 'Geçersiz ceza';
$string['invalidwizardpage'] = 'Yanlış veya olmayan sihirbaz sayfası belirtildi';
$string['lastmodifiedby'] = 'Son düzenleyen';
$string['lasttry'] = 'Son deneme';
$string['linkedfiledoesntexist'] = '{$a} bağlantılı dosyası yok';
$string['makechildof'] = '\'{$a}\' nın alt ögesi yap';
$string['makecopy'] = 'Kopyasını oluştur';
$string['maketoplevelitem'] = 'En üste taşı';
$string['manualgradeinvalidformat'] = 'Bu geçerli bir numara değil.';
$string['manualgradeoutofrange'] = 'Bu not geçerli aralığın dışında.';
$string['manuallygraded'] = 'Elle puanlama {$a->mark} yorumla birlikte {$a->comment}';
$string['mark'] = 'Not';
$string['markedoutof'] = 'olarak puanlandı';
$string['markedoutofmax'] = '{$a} üzerinden puanlanmış';
$string['markoutofmax'] = '{$a->max} üzerinden {$a->mark} notunu ver';
$string['marks'] = 'Puanlar';
$string['matchgrades'] = 'Notları eşleştir';
$string['matchgrades_help'] = 'Aktarılacak puanların sabit listedeki bir değerle eşleşmesi gerekir- 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0  (ayrıca negatif değerler). aksi halde iki seçenek mevcuttur:

*Puan listede yoksa, hata eğer  - bir soru listede bulunmayan herhangi bir puan içeriyorsa bir hata görüntülenir ve bu soru aktarılmaz.
*Puan listede yoksa, yakın puan- listede bulunan bir puanla eşleşmiyor sa, en yakın eşleşen puan ile değiştirilir.';
$string['matchgradeserror'] = 'Eğer not listelenmemişse hata ver';
$string['matchgradesnearest'] = 'Listede yoksa en yakın puan';
$string['missingcourseorcmid'] = 'Print_question için CourseID veya CMID sağlamak gerekiyor';
$string['missingcourseorcmidtolink'] = 'Get_question_edit_link için CourseID veya CMID sağlamak gerekiyor.';
$string['missingimportantcode'] = 'Bu soru tipinin önemli bir kodu eksik: {$a}.';
$string['missingoption'] = 'Cevabı soruda gömülü {$a}sorusunun seçeneklerinde eksik var';
$string['modified'] = 'Son kaydetme';
$string['move'] = '{$a} dan taşı ve bağlantıları değiştir.';
$string['movecategory'] = 'Kategori taşı';
$string['movedquestionsandcategories'] = 'Sorular ve soru kategorileri {$a->oldplace}\'dan {$a->newplace}\'a taşındı.';
$string['movelinksonly'] = 'Yalnızca bağların işaret ettiği yerleri değiştirin, dosyalarıhareket ettirmek ya da kopyalamada bulunmayın.';
$string['moveq'] = 'Soruları taşıyın';
$string['moveqtoanothercontext'] = 'Soruyu başka bağlama taşıyın';
$string['moveto'] = 'Şuraya taşı';
$string['movingcategory'] = 'Kategori taşınıyor';
$string['movingcategoryandfiles'] = '{$a->name}kategorisini ve tüm ast kategorileri "{$a->contextto}"  bağlamına taşımak istediğinizden emin misiniz?<br /> {$a->fromareaname}içindeki sorulara bağlı {$a->urlcount} dosyaları bulduk, bunları kopyalamak ya da {$a->toareaname}\'a taşımak ister misiniz?';
$string['movingcategorynofiles'] = '"{$a->name}" kategorisini ve tüm ast kategorileri "{$a->contextto}"
için bağlama taşımak istediğinizden emin misiniz?';
$string['movingquestions'] = 'Soruları ve her dosyayı taşımak';
$string['movingquestionsandfiles'] = '{$a->questions}kategorisini <strong>"{$a->tocontext}"</strong>?bağlamına taşımak istediğinizden emin misiniz?<br {$a->fromareaname}içindeki sorulara bağlı <strong>{$a->urlcount} files</strong> dosyaları bulduk, bunları kopyalamak ya da {$a->toareaname}\'a taşımak ister misiniz?';
$string['movingquestionsnofiles'] = 'Soru(yu)/(ları){$a->questions}<strong>"{$a->tocontext}"</strong>?<br /> bağlamına taşımak istediğinizden emin misiniz? {$a->fromareaname}içinde bu soru(ya)/(lara) bağlı hiç <strong>dosya</strong> yok.';
$string['needtochoosecat'] = 'Bu soruyu taşımak için bir kategori seçmeniz gerekir ya da \'iptal\'e basın.';
$string['nocate'] = '{$a} - böyle bir kategori yok!';
$string['noconditionspecified'] = 'Lütfen bir koşul belirleyin';
$string['nopermissionadd'] = 'Buraya soru ekleme izniniz yok.';
$string['nopermissionedit'] = 'Buradan soruları düzenleme yetkiniz yok.';
$string['noprobs'] = 'Soru veritabanında hiç bir sorun bulunamadı.';
$string['noquestionbanks'] = 'Soru bankası eklentisi bulunamadı.';
$string['noquestions'] = 'ihraç edilecek soru bulunamadı. ihraç etmek için bir kategori seçtiğinize ve kategorinizin sorular içerdiğine emin olun.';
$string['noquestionsinfile'] = 'Alınan dosyada hiç soru yok';
$string['noresponse'] = '[Yanıt yok]';
$string['notagfiltersapplied'] = 'Etiket filtresi uygulanmadı';
$string['notanswered'] = 'Cevaplanmadı';
$string['notchanged'] = 'Son denemeden beri hiç değiştirilmedi';
$string['notenoughanswers'] = 'Bu soru türü en az {$a} cevaplı olmalı';
$string['notenoughdatatoeditaquestion'] = 'Ne soru id, ne de kategori id ve soru tipi belirtilmedi.';
$string['notenoughdatatomovequestions'] = 'Taşımak istediğiniz soruların soru ID\'lerini sağlamanız gerekir.';
$string['notgraded'] = 'Not verilmemiş';
$string['notshown'] = 'Gösterilmedi';
$string['notyetanswered'] = 'Henüz cevaplanmadı';
$string['notyourpreview'] = 'Bu önizleme size ait değil';
$string['novirtualquestiontype'] = 'Soru tipi {$a} sanal soru tipi olamaz';
$string['numqas'] = 'Soru gönderimi sayısı.';
$string['numquestions'] = 'Soru no';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} gizli)';
$string['options'] = 'Ayarlar';
$string['page-question-category'] = 'Soru kategori sayfası';
$string['page-question-edit'] = 'Soru düzenleme sayfası';
$string['page-question-export'] = 'Soru dışa aktarım sayfası';
$string['page-question-import'] = 'Soru içe aktarım sayfası';
$string['page-question-x'] = 'Herhangi bir soru sayfası';
$string['parent'] = 'Ana';
$string['parentcategory'] = 'Ana kategori';
$string['parentcategory_help'] = 'Ana Kategori içinde yeni bir kategorinin yer alacağı kategoridir. "Üst" ün anlamı bu kategori başka herhangi bir kategori içinde yer almıyor demektir. Kategori içeriği bold yazıtipiyle gösterilmiştir. Her bağlamda en az bir kategori olmalıdır.';
$string['parentcategory_link'] = 'question/category';
$string['parenthesisinproperclose'] = '**{$a} daki parantez*** doğru  kapatılmamış';
$string['parenthesisinproperstart'] = '**{$a} daki parantez*** doğru  kapatılmamış';
$string['parsingquestions'] = 'Alınan dosyalar ayrıştırılıyor';
$string['partiallycorrect'] = 'Kısmen doğru';
$string['partiallycorrectfeedback'] = 'Kısmen doğru tüm yanıtlar için';
$string['partiallycorrectfeedbackdefault'] = 'Cevabınız kısmen doğru';
$string['penaltyfactor'] = 'Ceza katsayısı';
$string['penaltyfactor_help'] = 'Bu ayar, elde edilen skorun hangi kısmının her yanlış yanıtı çıkarılacağını belirler. Yalnızca, test adaptif modda çalıştırılıyorsa uygulanabilir.

Ceza faktörü 0 ile 1 arasında bir sayı olmalıdır. Bir ceza faktörü 1 ise, öğrencinin herhangi bir kredi alması için cevabını ilk yanıtında alması gerektiği anlamına gelir. Bir ceza faktörü 0, öğrencinin istediği sıklıkta deneyebileceği ve hala tam not alabileceği anlamına gelir.';
$string['penaltyforeachincorrecttry'] = 'Her yanlış deneme için ceza';
$string['penaltyforeachincorrecttry_help'] = 'Sorular \'Birden fazla deneme ile etkileşimli\' veya \'Uyarlanabilir mod\' davranışı kullanılarak çalıştırıldığında, öğrencinin soruyu doğru yapmak için birkaç kez deneme yapması gerekir, o zaman bu seçenek her yanlış deneme için ne kadar ceza alacaklarını kontrol eder.

Ceza, toplam soru puanının bir orantısıdır; yani soru üç puan değerindeyse ve ceza 0,3333333 ise, öğrenci soruyu ilk seferde doğru yaparsa 3, ikinci denemede doğru yaparsa 2 ve üçüncü denemede doğru yaparsa 1 puan alacaktır.

Bazı çok bölümlü sorular için bu puanlama mantığı sorunun her bölümüne ayrı ayrı uygulanır. Ayrıntılar soru türüne bağlıdır ve karmaşık olabilir, ancak ilke, öğrencilere mümkün olduğunca adil bir şekilde ortaya koydukları bilgi için puan vermektir.';
$string['permissionedit'] = 'Bu soruyu düzenle';
$string['permissionmove'] = 'Bu soruyu taşı';
$string['permissionsaveasnew'] = 'Bu soruyu yeni soru olarak kaydet';
$string['permissionto'] = 'İzinleriniz:';
$string['previewquestion'] = 'Soru önizlemesi: {$a}';
$string['privacy:metadata:database:question'] = 'Belirli bir soruyla ilgili ayrıntılar.';
$string['privacy:metadata:database:question:createdby'] = 'Soruyu oluşturan kişi.';
$string['privacy:metadata:database:question:generalfeedback'] = 'Bu soru için genel geri bildirim.';
$string['privacy:metadata:database:question:modifiedby'] = 'Soruyu en son güncelleyen kişi.';
$string['privacy:metadata:database:question:name'] = 'Soru adı.';
$string['privacy:metadata:database:question:questiontext'] = 'Soru metni.';
$string['privacy:metadata:database:question:timecreated'] = 'Bu sorunun oluşturulduğu tarih ve saat.';
$string['privacy:metadata:database:question:timemodified'] = 'Bu sorunun güncellendiği tarih ve saat.';
$string['privacy:metadata:database:question_attempt_step_data'] = 'Soru girişimi adımları, o adıma özel ek verilere sahip olabilir. Veriler step_data tablosunda saklanır.';
$string['privacy:metadata:database:question_attempt_step_data:name'] = 'Veri öğesinin adı.';
$string['privacy:metadata:database:question_attempt_step_data:value'] = 'Veri öğesinin değeri.';
$string['privacy:metadata:database:question_attempt_steps'] = 'Her soru adımı , başlangıçtan tamamlanmasına ve işaretlenmesine kadar farklı aşamalır belirtmek için bir dizi adıma sahiptir. Bu tablo, bu aşamaların her biri için bilgileri saklar.';
$string['privacy:metadata:database:question_attempt_steps:fraction'] = 'Bu soru denemesine verilen not 1 üzerinden bir değere ölçeklendirilmiştir.';
$string['privacy:metadata:database:question_attempt_steps:state'] = 'Adım geçişinin sonunda bu soru denemesi adımının durumu.';
$string['privacy:metadata:database:question_attempt_steps:timecreated'] = 'Bu adım geçişinin başladığı tarih ve saat.';
$string['privacy:metadata:database:question_attempt_steps:userid'] = 'Adım geçişini gerçekleştiren kullanıcı.';
$string['privacy:metadata:database:question_attempts'] = 'Belirli bir soruya yönelik bir girişim hakkındaki bilgiler.';
$string['privacy:metadata:database:question_attempts:flagged'] = 'Kullanıcının bu soruyu deneme içinde işaretlediğine dair bir gösterge.';
$string['privacy:metadata:database:question_attempts:responsesummary'] = 'Soru yanıtının özeti.';
$string['privacy:metadata:database:question_attempts:timemodified'] = 'Sorukaydı girişiminin güncellendiği saat.';
$string['privacy:metadata:database:question_bank_entries'] = 'Soru bankası kayıtlarının sahibi olan kişi.';
$string['privacy:metadata:database:question_bank_entries:ownerid'] = 'Soru bankası girişinin sahibi olan kişi.';
$string['privacy:metadata:link:qbehaviour'] = 'Soru alt sistemi, Soru Davranışı eklenti türünü kullanır.';
$string['privacy:metadata:link:qformat'] = 'Soru alt sistemi, farklı biçimlerdeki soruları içe ve dışa aktarmak amacıyla Soru Biçimi eklenti türünü kullanır.';
$string['privacy:metadata:link:qtype'] = 'Soru alt sistemi, farklı soru biçimlerini içeren Soru Tipi eklenti tipi ile etkileşim halindedir.';
$string['published'] = 'paylaşıldı';
$string['qbanknotfound'] = '\'{$a}\' soru bankası eklentisi mevcut değil veya tanınmadı.';
$string['qtypeveryshort'] = 'D';
$string['question_version'] = 'Soru sürümü';
$string['questionaffected'] = '<a href="{$a->qurl}">Soru "{$a->name}" ({$a->qtype})</a> bu soru kategorisindedir ancak <a href="{$a->qurl}"> "{$a->coursename}" bir başka dersteki "{$a->quizname}"</a> sınavında da kullanılıyor.';
$string['questionbank'] = 'Soru bankası';
$string['questionbanknavigation'] = 'Soru bankası üçüncül navigasyon';
$string['questionbehaviouradminsetting'] = 'Soru davranış ayarları';
$string['questionbehavioursdisabled'] = 'Devre dışı bırakılacak soru davranışları';
$string['questionbehavioursdisabledexplained'] = 'Açılır menüde görünmesini istemediğiniz davranışların virgülle ayrılmış bir listesini girin.';
$string['questionbehavioursorder'] = 'Soru davranışına göre sıralama';
$string['questionbehavioursorderexplained'] = 'Açılır menüde görünmelerini istediğiniz sırayla virgülle ayrılmış bir davranış listesi girin.';
$string['questioncategories'] = 'Soru kategorileri';
$string['questioncategory'] = 'Soru kategorisi';
$string['questioncatsfor'] = '\'{$a}\' için soru kategorileri';
$string['questiondefaultssave'] = 'Soru seçeneklerini kullanıcı tercihi varsayılanları olarak kaydedin';
$string['questiondefaultssave_desc'] = '\'Varsayılan not\', \'Bir veya birden fazla cevap?\' gibi soru seçeneklerinin, soru düzenleme formu gönderildiğinde, kullanıcı forma bir sonraki erişiminde varsayılan olarak kullanılmak üzere kullanıcı tercihleri olarak kaydedilip kaydedilmeyeceği.';
$string['questiondoesnotexist'] = 'Bu soru yok';
$string['questionediting'] = 'Soru düzenleme';
$string['questionediting_desc'] = 'Bu ayarlar soru formlarını düzenlemek için geçerlidir.';
$string['questionformtagheader'] = '{$a} etiketleri';
$string['questionidmismatch'] = 'Soru id\'leri eşleşmedi';
$string['questionloaderror'] = 'Soru seçenekleri yüklenemedi.';
$string['questionname'] = 'Soru adı';
$string['questionnameandquestionversion'] = '{$a->name} v{$a->version}';
$string['questionnamecopy'] = '{$a} Kopyala';
$string['questionno'] = 'Soru {$a}';
$string['questionpreviewdefaults'] = 'Soru önizleme varsayılanı';
$string['questionpreviewdefaults_desc'] = 'Kullanıcı soru bankasındaki soruyu önizlediğinde bu varsayılan değerler kullanılır. Kullanıcı kendi kişisel tercihlerini kullanarak bir soru önizlemesi yaptıktan sonra, tercihleri kullanıcı tercihleri olarak kaydedilir.';
$string['questions'] = 'Sorular';
$string['questionsaveerror'] = 'Soruyu kaydederken hata - ({$a})';
$string['questionsinuse'] = '* Kullanımda oldukları için silinemeyen soruları gösterir. Bunun yerine, \'Gizli soruları göster\' seçeneğini \'Evet\' olarak ayarlamadığınız sürece soru bankasında gizleneceklerdir.';
$string['questionsmovedto'] = 'Hâlâ kullanımda olan sorular ana kurs kategorisindeki "{$a}" bölümüne taşınmıştır.';
$string['questionsrescuedfrom'] = '{$a} bağlamından kaydedilmiş sorular.';
$string['questionsrescuedfrominfo'] = 'Bu sorular (bazıları gizli olabilir) {$a} bağlamı silindiğinde kaydedilmişti çünkü bunlar hala bazı sınavlar ve etkinlikler tarafından kullanılmaktadır.';
$string['questiontags'] = 'Soru etiketleri';
$string['questiontext'] = 'Soru metini';
$string['questiontype'] = 'Soru tipi';
$string['questionuse'] = 'Bu etkinlikte soruyu kullan';
$string['questionvariant'] = 'Soru çeşidi';
$string['questionx'] = 'Soru {$a}';
$string['requiresgrading'] = 'Not verlimesi gerekir';
$string['responsehistory'] = 'Cevap geçmişi';
$string['restart'] = 'Yeniden başla';
$string['restartwiththeseoptions'] = 'Önizleme seçeneklerini kaydedin ve tekrar başlayın';
$string['restoremultipletopcats'] = 'Yedekleme dosyası, {$a} bağlamı için birden fazla üst düzey soru kategorisi içerir.';
$string['reviewresponse'] = 'Yanıtı incele';
$string['rightanswer'] = 'Doğru cevap';
$string['rightanswer_help'] = 'Doğru yanıtın otomatik olarak oluşturulan bir özeti. Bunu sınırlı tutabilirsiniz, bu nedenle sorunun genel geri bildiriminde doğru çözümü açıklamayı ve bu seçeneği kapatmayı düşünebilirsiniz.';
$string['save'] = 'Kaydet';
$string['savechangesandcontinueediting'] = 'Değişiklikleri kaydet ve düzenlemeye devam et';
$string['saved'] = 'Kaydedildi: {$a}';
$string['saveflags'] = 'İşaretlerin durumunu kaydet';
$string['selectacategory'] = 'Bir kategori seç:';
$string['selectaqtypefordescription'] = 'Açıklamasını görmek için bir soru tipi seçin.';
$string['selectcategoryabove'] = 'Yukarıdan bir kategori seçin';
$string['selectquestionsforbulk'] = 'Toplu işlemler için soruları seçin';
$string['settingsformultipletries'] = 'Çoklu deneme';
$string['shareincontext'] = '{$a} bağlamında paylaş';
$string['shortversioninfo'] = 'v {$a->version} ({$a->latestversion})';
$string['shortversioninfolatest'] = 'v{$a->version} ( en son )';
$string['showhidden'] = 'Gizli soruları göster';
$string['showmarkandmax'] = 'Puanı ve en yüksek değeri göster';
$string['showmaxmarkonly'] = 'Yalnızca en yüksek notu göster';
$string['shown'] = 'Gösterildi';
$string['shownumpartscorrect'] = 'Doğru yanıtların sayısını göster';
$string['shownumpartscorrectwhenfinished'] = 'Soru tamamlandığında doğru yanıtların sayısını göster';
$string['showquestiontext'] = 'Soru listesinde soru metni de gösterilsin mi?';
$string['showquestiontext_full'] = 'Evet, resimler, medya vb.İle.';
$string['showquestiontext_off'] = 'Hayır';
$string['showquestiontext_plain'] = 'Evet, yalnızca metin';
$string['specificfeedback'] = 'Özel geribildirim';
$string['specificfeedback_help'] = 'Öğrencinin verdiği yanıta bağlı geri besleme';
$string['started'] = 'Başlatıldı';
$string['state'] = 'Durum';
$string['step'] = 'Adım';
$string['steps'] = 'Adımlar';
$string['stoponerror'] = 'Hatada dur';
$string['stoponerror_help'] = 'Bu ayar Soru alma işlemi esnasında bir hatayla karşılaşılması durumunda işlemin durmasına yolaçar. Böylece hatalı Soruların yanı sıra doğru sorularında alınamamasına yol açar.';
$string['submissionoutofsequence'] = 'Dizi dışı erişim. Sınav soruları üzerinde çalışılıyor lütfen geri tuşuna başmayınız.';
$string['submissionoutofsequencefriendlymessage'] = 'Verileri normal dizinin dışına girdiniz. Bu, tarayıcınızın Geri veya İleri düğmelerini kullanırsanız oluşabilir; Lütfen bunları test sırasında kullanmayın. Bir sayfa yüklenirken bir şeye tıklarsanız da olabilir. Devam etmek için <strong> Devam et </strong> \'i tıklayın.';
$string['submit'] = 'Gönder';
$string['submitandfinish'] = 'Gönder ve bitir';
$string['submitted'] = 'Gönder: {$a}';
$string['tagarea_question'] = 'Sorular';
$string['technicalinfo'] = 'Teknik bilgi';
$string['technicalinfo_help'] = 'Bu teknik bilgiler muhtemelen yeni soru türleri üzerinde çalışan geliştiriciler için kullanışlı olacaktır.  Bu bilgiler aynı zamanda sorularla ilgili sorunları teşhis etmede yararlı olacaktır.';
$string['technicalinfomaxfraction'] = 'En büyük oran: {$a}';
$string['technicalinfominfraction'] = 'En küçük oran: {$a}';
$string['technicalinfoquestionsummary'] = 'Soru özeti: {$a}';
$string['technicalinforesponsesummary'] = 'Cevap özeti: {$a}';
$string['technicalinforightsummary'] = 'Doğru cevap özeti: {$a}';
$string['technicalinfostate'] = 'Soru durumu: {$a}';
$string['technicalinfovariant'] = 'Soru varyantı: {$a}';
$string['tofilecategory'] = 'Kategoriyi dosyaya yaz';
$string['tofilecontext'] = 'Bağlamı dosyaya yaz';
$string['topfor'] = '{$a} için en iyi seçenek';
$string['uninstallbehaviour'] = 'Bu soru davranışını kaldırın.';
$string['uninstallqtype'] = 'Bu soru tipini kaldır.';
$string['unknown'] = 'Bilinmeyen';
$string['unknownbehaviour'] = 'Bilinmeyen davranış: {$a}.';
$string['unknownorunhandledtype'] = 'Bilinmeyen veya işlenmemiş soru tipi: {$a}';
$string['unknownquestion'] = 'Bilinmeyen soru: {$a}.';
$string['unknownquestioncatregory'] = 'Bilinmeyen soru kategorisi: {$a}.';
$string['unknownquestiontype'] = 'Bilinmeyen soru tipi: {$a}.';
$string['unknowntolerance'] = 'Bilinmeyen tolerans tipi {$a}';
$string['unpublished'] = 'paylaşılmadı';
$string['unusedcategorydeleted'] = 'Kurs silindiği için bu kategori de silindi. Soruları artık kullanılmaz.';
$string['updatedisplayoptions'] = 'Görüntü ayarlarını güncelle';
$string['upgradeproblemcategoryloop'] = 'Soru kategorilerini yükseltirken görülen sorun. Kategori ağacında döngü var. ETkilenmiş kategori idleri {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Soru kategorisi {$a->name} ({$a->id})\'yi güncelleyemedi.';
$string['upgradeproblemunknowncategory'] = 'Soru kategorileri yükseltilirken sorunla karşılaşıldı. {$a->id} kategorisi {$a->parent} üstüne işaret eder, ki bu da mevcut değildir. Sorunu çözmek için üst değiştirildi.';
$string['version_selection'] = 'Sürüm {$a->version}';
$string['versioninfo'] = 'Sürüm {$a->version} ( {$a->latestversion})';
$string['versioninfolatest'] = 'Sürüm {$a->version} (en son)';
$string['whethercorrect'] = 'Doğru olup olmadığı';
$string['whethercorrect_help'] = 'Bu kapak metni açıklaması \'Doğru\', \'Kısmen doğru\' veya \'Yanlış\' içeriklerini kapsar ve bunu vurgulayan herhangi bir renkle aynı bilgileri taşır';
$string['whichtries'] = 'Hangi deneme';
$string['withselected'] = 'Seçili ile';
$string['wrongprefix'] = 'Yanlış biçimlendirilmiş isim öneki {$a}';
$string['xoutofmax'] = '{$a->max} üzerinden {$a->mark}';
$string['yougotnright'] = 'Doğru bir şekilde seçtiniz {$a->num}.';
$string['youmustselectaqtype'] = 'Bir soru türü seçmelisiniz.';
$string['yourfileshoulddownload'] = 'Dışa aktarım dosyanızın birazdan indirmeye başlaması gerekir. Başlamazsa, lütfen <a href="{$a}">click here</a>. Sorunu çözmek için üst değiştirildi.';
